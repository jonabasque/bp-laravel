<?php namespace Jonabasque\Businessplan;

use Illuminate\Support\ServiceProvider;

class BusinessplanServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		//Load views from package
		$this->loadViewsFrom(dirname(dirname(__DIR__)).'/views', 'Jonabasque/Businessplan');
		include __DIR__.'/../../routes.php';

		include __DIR__.'/../../../libs/business_plan/movement.php';
		include __DIR__.'/../../../libs/business_plan/inversion.php';
		include __DIR__.'/../../../libs/business_plan/human_resource.php';
		include __DIR__.'/../../../libs/business_plan/results.php';
		include __DIR__.'/../../../libs/business_plan/business_plan.php';
		include __DIR__.'/../../../libs/business_plan/fiscal_year.php';

	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [];
	}

}
