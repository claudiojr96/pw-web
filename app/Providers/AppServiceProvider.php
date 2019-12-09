<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use App\Application;
use App\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer( 'front.header', function ( $view ) {
            $apps = Application::all();
            $view->with( 'apps', $apps );
        });

        view()->composer( 'front.widgets', function ( $view ) {
            $gms = [];
            foreach ( DB::table( 'auth' )->select( 'userid' )->distinct()->get() as $gm )
            {
                $gms[] = User::find( $gm->userid );
            }
            $view->with( 'gms', $gms );
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
