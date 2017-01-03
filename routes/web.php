<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/movie', function () {
// 	$movie = App\Movie::find(21);
// 	$movie->movie = unserialize($movie->movie);
// 	return $movie;
// });

Route::get('/start', function () {
	$products = App\Product::orderBy('fb_shares', 'desc')->paginate(9);

	return view('index', compact('products', $products));
});

Route::get('/detail', function () {
	return view('detail');
});

use ApaiIO\Configuration\GenericConfiguration;
use ApaiIO\Operations\Search;
use ApaiIO\ApaiIO;

Route::get('/', function () {
	

	$conf = new GenericConfiguration();
	$client = new \GuzzleHttp\Client();
	$request = new \ApaiIO\Request\GuzzleRequest($client);

	$conf
	    ->setCountry('com')
	    ->setAccessKey(env('AWS_API_KEY'))
	    ->setSecretKey(env('AWS_API_SECRET_KEY'))
	    ->setAssociateTag(env('AWS_ASSOCIATE_TAG'))
	    ->setRequest($request);
	$apaiIO = new ApaiIO($conf);

	$search = new Search();
	$search->setCategory('All');
	$search->setKeywords('chocolate');
	$search->setPage(1);
	$search->setResponseGroup(array('ItemAttributes', 'Images', 'EditorialReview', 'Reviews', 'Variations', 'Offers'));

	$formattedResponse = $apaiIO->runOperation($search);

	// return response($formattedResponse)->header('Content-Type', 'text/xml');
	// $formattedResponse = file_get_contents($formattedResponse);
	$formattedResponse = simplexml_load_string($formattedResponse);

	$products = [];

	foreach ($formattedResponse->Items->Item as $item) {
		if ($item->Variations) {
			$title = $item->Variations->Item[0]->ItemAttributes->Title->__toString();

			$features = [];
			foreach ($item->Variations->Item[0]->ItemAttributes->Feature as $feature) {
				array_push($features, $feature->__toString());
			}

			if ($item->Variations->Item[0]->Offers->Offer) {
				$price = $item->Variations->Item[0]->Offers->Offer->OfferListing->Price->FormattedPrice->__toString();
			}
			else {
				$price = null;
			}

			if ($item->Variations->Item[0]->ImageSets->ImageSet[count($item->Variations->Item[0]->ImageSets->ImageSet) - 1]->HiResImage) {
				$imageUrl = $item->Variations->Item[0]->ImageSets->ImageSet[count($item->Variations->Item[0]->ImageSets->ImageSet) - 1]->HiResImage->URL->__toString();
			}
			else {
				$imageUrl = $item->Variations->Item[0]->ImageSets->ImageSet[count($item->Variations->Item[0]->ImageSets->ImageSet) - 1]->LargeImage->URL->__toString();
			}

			$reviews = $item->CustomerReviews->IFrameURL->__toString();

			$amazonUrl = $item->DetailPageURL->__toString();

			$product = [
				'title' => $title,
				'description' => $features,
				'price' => $price,
				'reviews' => $reviews,
				'amazon_url' => $amazonUrl,
				'image_url' => $imageUrl
			];
			array_push($products, $product);
		}
		else {
			$title = $item->ItemAttributes->Title->__toString();

			$features = [];
			foreach ($item->ItemAttributes->Feature as $feature) {
				array_push($features, $feature->__toString());
			}

			if ($item->Offers->Offer) {
				$price = $item->Offers->Offer->OfferListing->Price->FormattedPrice->__toString();
			}
			else {
				$price = null;
			}

			if ($item->ImageSets->ImageSet[count($item->ImageSets->ImageSet) - 1]->HiResImage) {
				$imageUrl = $item->ImageSets->ImageSet[count($item->ImageSets->ImageSet) - 1]->HiResImage->URL->__toString();
			}
			else {
				$imageUrl = $item->ImageSets->ImageSet[count($item->ImageSets->ImageSet) - 1]->LargeImage->URL->__toString();
			}

			$reviews = $item->CustomerReviews->IFrameURL->__toString();

			$amazonUrl = $item->DetailPageURL->__toString();

			$product = [
				'title' => $title,
				'description' => $features,
				'price' => $price,
				'reviews' => $reviews,
				'amazon_url' => $amazonUrl,
				'image_url' => $imageUrl
			];
			array_push($products, $product);
		}
	}

	$amazonUrls = '';
	foreach ($products as $product) {
		$amazonUrls .= strtok($product['amazon_url'], '%') . ',';
	}
	$amazonUrls =  rtrim($amazonUrls, ',');

	$fbShares = [];
	$res = $client->request('GET', 'http://graph.facebook.com/?ids=' . $amazonUrls);
	$shares = json_decode($res->getBody());
	foreach ($shares as $share) {
		if (isset($share->share)) {
			array_push($fbShares, (string) $share->share->share_count);
		}
		else {
			array_push($fbShares, '0');
		}
	}
	for ($i = 0; $i < count($products); $i++) { 
		$products[$i]['fb_shares'] = $fbShares[$i];
	}

	foreach ($products as $product) {
		if (!in_array(null, $product)) {
    		App\Product::create($product);
  		}
	}

	// return dd($formattedResponse->Items->Item[1]);

	return dd($products);
	// return dd($formattedResponse);
});

// Route::get('/', function () {
// 	$token  = new \Tmdb\ApiToken(env('TMBD_KEY'));
// 	$client = new \Tmdb\Client($token);

// 	$repository = new \Tmdb\Repository\MovieRepository($client);
// 	$popular = $repository->getPopular(array('page' => 1));

// 	$movies = [];
// 	foreach ($popular as $movie) {
// 		$movie = $repository->load($movie->getId());

// 		$configRepository = new \Tmdb\Repository\ConfigurationRepository($client);
// 		$config = $configRepository->load();
// 		$imageHelper = new \Tmdb\Helper\ImageHelper($config);
// 		$movie->fullPosterPath = $imageHelper->getUrl($movie->getPosterPath(), 'w500');
// 		$movie->fullBackdropPath = $imageHelper->getUrl($movie->getBackdropPath(), 'w1000');

// 		// $guzzle = new \GuzzleHttp\Client();
// 		// $res = $guzzle->request('GET', 'http://graph.facebook.com/?id=http://www.imdb.com/title/' . $movie->getImdbId());
// 		// $shares = json_decode($res->getBody());
// 		// $movie->social = $shares;

// 		// $res = $guzzle->request('GET', 'https://itunes.apple.com/search?term=' . $movie->getOriginalTitle() . '&entity=movie&limit=1');
// 		// $iTunesMovie = json_decode($res->getBody(), true);
// 		// if ($iTunesMovie['resultCount'] > 0) {
// 		// 	$iTunesMovie['results'][0]['trackViewUrl'] .= '&at=123456';
// 		// 	$movie->iTunes = $iTunesMovie;
// 		// }
// 		// if ($iTunesMovie['resultCount'] < 1) {
// 		// 	$movie = null;
// 		// }

// 		// // // Get movie social shares
// 		// $movie->socialShares = $movie->social->share->share_count;

// 		// // // Get movie iTunes url
// 		// $movie->iTunesUrl = $movie->iTunes['results'][0]['trackViewUrl'];

// 		// Get movie cast
// 		$cast = [];
// 		foreach ($movie->getCredits()->getCast() as $key => $castMember) {
// 			$castMember->fullProfilePath = $imageHelper->getUrl($castMember->getProfilePath(), 'w500');
// 			array_push($cast, $castMember);
// 		}
// 		$movie->fullCast = $cast;

// 		// Get similar movies
// 		$similar = [];
// 		foreach ($movie->getSimilar() as $key => $similarMovie) {
// 			array_push($similar, $similarMovie);
// 		}
// 		$movie->fullSimilar = $similar;
		

// 		// Get movie reviews
// 		$reviews = [];
// 		foreach ($movie->getReviews() as $key => $review) {
// 			array_push($reviews, $review);
// 		}
// 		$movie->fullReviews = $reviews;

// 		// Get movie videos
// 		$videos = [];
// 		foreach ($movie->getVideos() as $video) {
// 			$video = 'http://www.youtube.com/watch?v=' . $video->getKey();
// 			array_push($videos, $video);
// 		}
// 		$movie->fullVideos = $videos;

// 		array_push($movies, $movie);
// 	}

// 	foreach ($movies as $movie) {
// 		$movie = [
// 			'movie' => serialize($movie->fullVideos),
// 			'tmdb_id' => $movie->getId(),
// 			'social_shares' => 0,
// 			'release_date' => $movie->getReleaseDate()->format('Y-m-d h:m:s'),
// 			'popularity' => $movie->getPopularity(),
// 			'vote_average' => $movie->getVoteAverage()
// 		];

// 		App\Movie::create($movie);
// 	}
	
// 	return dd($movies[1]);
// });

// OBS!!!! Movie objektet fakkar. Gör som du tänkte från början: -Spara genres, credits, similar o.s.v. som serialized arrays i databasen (Så slipper man kopplingstabeller)
