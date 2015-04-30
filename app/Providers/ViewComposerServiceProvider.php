<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\User;

class ViewComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */



	public function boot()
	{

		view()->composer('admin.nav-side', function($view){
            $view->with([
                'users' => User::paginate(15),
                'operators' => User::whereRole(2)->paginate(15),
                'teachers' => User::whereRole(4)->paginate(15),
                'students' => User::whereRole(5)->paginate(15)
            ]);
        });
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
