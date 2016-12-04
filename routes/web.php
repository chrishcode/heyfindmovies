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
	return view('index');
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
	$search->setCategory('Grocery');
	$search->setKeywords('pregnancy food');
	$search->setPage(1);
	$search->setResponseGroup(array('ItemAttributes', 'Images', 'EditorialReview', 'Reviews', 'Variations'));

	$formattedResponse = $apaiIO->runOperation($search);

	// return response($formattedResponse)->header('Content-Type', 'text/xml');
	// $formattedResponse = file_get_contents($formattedResponse);
	$formattedResponse = simplexml_load_string($formattedResponse);

	$products = [];

	foreach ($formattedResponse->Items->Item as $item) {
		$product = [
			'title' => $item->ItemAttributes->Title->__toString(),
			'description' => null,
			'price' => null,
			'reviews' => null,
			'amazon_url' => null,
			'image_url' => $item->ImageSets->ImageSet
		];
		array_push($products, $product);
	}

	// return dd($formattedResponse->Items->Item[1]);
	return dd($products);

	return dd($formattedResponse);
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
