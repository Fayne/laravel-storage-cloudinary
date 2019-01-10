<?php
namespace CarlosOCarvalho\Providers;

use Storage;
use League\Flysystem\Filesystem;
use Illuminate\Support\ServiceProvider;
use CarlosOCarvalho\Flysystem\Cloudinary\CloudinaryAdapter;

class CloudinaryServiceProvider extends ServiceProvider {

	/**
	 * Perform post-registration booting of services.
	 *
	 * @return void
	 */
	public function boot() {
		Storage::extend('cloudinary', function ($app, $config) {
			return new Filesystem( new CloudinaryAdapter($config) );
		});
	}

	/**
	 * Register bindings in the container.
	 *
	 * @return void
	 */
	public function register() {
		//
	}
}
