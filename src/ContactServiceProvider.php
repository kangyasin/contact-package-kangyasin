<?php
namespace Kangyasin\Contact;
use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider{

    public function boot(){

        $this->publishes([
            __DIR__.'/Console/Commands/' => app_path('Console/Commands/'),
            __DIR__.'/Console/Kernel.php' => app_path('Console/'),
            __DIR__.'/Http/Controllers/' => app_path('Http/Controllers/')

        ], 'config-kangyasin');

        $this->publishes([
            __DIR__.'/database/migrations/' => database_path('migrations')
        ], 'migrations');
    }

    public function register(){
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'contact');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

    }

}
