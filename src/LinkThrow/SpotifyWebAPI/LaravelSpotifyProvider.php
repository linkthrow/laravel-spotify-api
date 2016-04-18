<?php namespace LinkThrow\SpotifyWebAPI;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use App;

class LaravelSpotifyProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	public function boot()
	{
		AliasLoader::getInstance()->alias('Spotify', 'SpotifyWebAPI\SpotifyWebAPI');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
