<?php
namespace Kangyasin\Contact;
use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider{

    public function boot(){

        $this->publishes([
            __DIR__.'/../app/Console/' => resource_path('/Console')
        ], 'console');

    }

    public function register(){
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'contact');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

    }

}
