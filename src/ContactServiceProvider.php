<?php
namespace Kangyasin\Contact;
use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider{

    public function boot(){

    }

    public function register(){
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'contact');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

    }

}
