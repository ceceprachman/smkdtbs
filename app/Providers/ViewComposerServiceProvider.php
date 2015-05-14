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

		view()->composer([
            'admin.nav-side',
//            'admin.users.all',
//            'admin.users.operator',
//            'admin.users.teachers',
//            'admin.users.student',
            'admin.users.info'
        ], function($view){
            $view->with([
                'users' => User::paginate(),
                'operators' => User::whereRole(2)->paginate(),
                'teachers' => User::whereRole(4)->paginate(),
                'students' => User::whereRole(5)->paginate()
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
