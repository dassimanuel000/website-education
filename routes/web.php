<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/team', function () {
    return view('team');
});

Route::get('/vie', function () {
    return view('vie');
});

Route::get('/admission', function () {
    return view('admission');
});

Route::get('/contact', function (Request $request) {
  
    $contact = DB::insert("insert into contact (name,email,tel,message) values (?,?,?,?)",
     [
         $request->input('name'),
         $request->input('email'),
         $request->input('phone'),
         $request->input('subject')
    ]);  //, [1, 'Dayle']);
        
        if (true) {
            ini_set('display_errors', 1);
        error_reporting( E_ALL );
        
            $from= "life-cm@life-cm.com";
            $to= $request->input('email');
        
        // Subject
        $subject = 'CONFIRMATION MESSAGE | LES POISSONS ';
        
        // Message
        $message = '
            <div class="row">
                <div class="container">
                        <h2>LES SERVICES </h2>
                        <small>
                                <ul class="gtco-quick-contact">
                                    <li><a href="#"><i class="icon-phone"></i> +237 6 99 95 43 71</a></li>
                                    <li><a href="mailto:dassijean000@gmail.com"><i class="icon-mail2"></i>Mail ecole les poissons</a></li>
                                    <li><a href="https://wa.me/+237699954371"><i class="icon-chat"></i> Whatsapp Chat</a></li>
                                    <li><a href="#"><i class="icon-map"></i>YAOUNDE | DAMAS - Lieu dit Entr&eacute;e Maetur</a></li>
                                </ul>
                                <ul class="gtco-social-icons pull-right">
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                                </ul>
                        </small>
                </div>
            </div>';
        
        // To send HTML mail, the Content-type header must be set
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
        
        // Additional headers
        $headers[] = 'To: Fondateur <dassijean000@gmail.com>, CEO <dassimanuel@life-cm.com>';
        
        // Mail it
        mail($to, $subject, $message, implode("\r\n", $headers));

        return redirect('/')->with('success', 'VOTRE MESSAGE EST BIEN ENVOYE VOUS RECEVREZ UN APPEL');
        } else {
        return redirect('/')->with('error', 'UNE ERREUR DANS LA VALIDATION ');
        }
});

Auth::routes();

Route::get('/delete_contact/{id}', function ($id) {

    $objet = DB::update('update contact set objet = "1" where id = '.$id.' ' );
    if ($objet) {
        return redirect()->back()->withErrors('success', 'Votre Message est bien arrive !')->withInput();
    }

});

Route::get('/home', 'HomeController@index')->name('home');
