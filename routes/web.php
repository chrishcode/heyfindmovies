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

Route::get('/', function () {
	$token  = new \Tmdb\ApiToken('3a4addf1cb610f970f9c3fe19b3b9c69');
	$client = new \Tmdb\Client($token);

	$repository = new \Tmdb\Repository\MovieRepository($client);
	$popular = $repository->getPopular(array('page' => 1));

	$movies = [];
	foreach ($popular as $movie) {
		$movie = $repository->load($movie->getId());

		$configRepository = new \Tmdb\Repository\ConfigurationRepository($client);
		$config = $configRepository->load();
		$imageHelper = new \Tmdb\Helper\ImageHelper($config);
		$movie->fullPosterPath = $imageHelper->getUrl($movie->getPosterPath(), 'w500');
		$movie->fullBackdropPath = $imageHelper->getUrl($movie->getBackdropPath(), 'w1000');

		$guzzle = new \GuzzleHttp\Client();
		$res = $guzzle->request('GET', 'https://count.donreach.com/?url=http://www.imdb.com/title/' . $movie->getImdbId());
		$shares = json_decode($res->getBody());
		$movie->social = $shares;

		$res = $guzzle->request('GET', 'https://itunes.apple.com/search?term=' . $movie->getOriginalTitle() . '&entity=movie&limit=1');
		$iTunesMovie = json_decode($res->getBody(), true);
		if ($iTunesMovie['resultCount'] > 0) {
			$iTunesMovie['results'][0]['trackViewUrl'] .= '&at=123456';
			$movie->iTunes = $iTunesMovie;
		}
		if ($iTunesMovie['resultCount'] < 1) {
			$movie = null;
		}

		array_push($movies, $movie);
	}
	// $movies[13]->iTunes['results'][0]['trackViewUrl'] Get movie iTunes url
	return dd($movies);
    // return view('welcome');
});
