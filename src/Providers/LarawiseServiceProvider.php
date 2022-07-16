<?php
namespace Larawise\Providers;

use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class LarawiseServiceProvider extends ServiceProvider
{
	public function boot()
	{
		$this->publishes([
	        __DIR__.'/../Config/larawise.php' => config_path('larawise.php'),
	    ]);
	}

	public function register()
	{
        $this->mergeConfigFrom(
            __DIR__.'/../config/larawise.php', 'larawise'
        );
	}
}
