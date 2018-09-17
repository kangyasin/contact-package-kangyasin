<?php

namespace Kangyasin\Contact\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
namespace Kangyasin\Contact\Models\Contact;


class ContactController extends Controller
{
    //

    public function index(){
        return view('contact::contact');
    }

    public function send(Request $request){
        Contact::create($request->all());
        return redirect(route('contact'));
    }

    public function testClientMigrate($host, $databasename, $user){
        // $this->createSchema('testdby');
        // Artisan::call('make:database', ['dbname' => 'migration_name_db']);
        // return 'oke';

        $this->setConnectionDB($host, $databasename, '', $user);
        Artisan::call('migrate', [
          '--path'     => "database/migrations/client"
          ]);
        // Artisan::call("php artisan migrate --path=database/migrations/client");
        return 'oke';
    }

}
