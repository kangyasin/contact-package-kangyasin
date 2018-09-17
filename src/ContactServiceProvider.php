<?php
namespace Kangyasin\Contact;
use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider{

    public function boot(){

        // $this->publishes([
        //     __DIR__.'/../app/Console/Commands/CreateDatabase.php' => resource_path('/Console/Commands/CreateDatabase.php')
        // ], 'console');

        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations')
        ], 'migrations');
    }

    public function register(){
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'contact');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

    }

}
