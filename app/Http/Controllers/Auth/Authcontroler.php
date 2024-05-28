<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;


class Authcontroler extends Controller
{
    //page d'accueil
    public function showAcceuil()
    {
         return view('page.accueil');
    }

    //service 1 Accompagnement
    public function showService1()
    {
         return view('page.service1');
    }

    //service 2 Ameliorations
    public function showService2()
    {
         return view('page.service2');
    }

    //service 3 Conseils
    public function showService3()
    {
         return view('page.service3');
    }

    //service 4 Formations
    public function showService4()
    {
         return view('page.service4');
    }

    //Contacts
    public function showContact()
    {
         return view('page.contact');
    }

    //rédirection vers la page d'inscription
    public function showRegister()
    {
         return view('auth.register1');
    }

    //gestion des inscriptions
    public function register(RegisterRequest $request)
    {

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'admin' => 0,
        ]);


        event(new Registered($user));

        return redirect()->route('login');
        //récupération des données au sein du formulaire
        //User::query()->create($request->validated());
        //Rédirection vers la page de connexion après inscription validée
        //return redirect()->route('auth.login');
    }

    public function registerAdmin(RegisterRequest $request)
    {
        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'admin' => 1,
        ]);

        event(new Registered($user));

        return redirect()->route('dashbo.page');
    }

    //redirection vers la page d'inscription
    public function showLogin()
    {
         return view('auth.login1');
    }

    //Gérer les connexions
    public function login(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->route('blog.index');


        //     $registered = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        //     if($registered) {
        //        session()->regenerate();
        //        return redirect()->route('blog.index');
        //     }
        //$credentials = $request->only('email', 'password');
        //if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        //     return redirect()->route('blog.index');
        //}
     }

     public function loginDash(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->route('dashbo.page');


        //     $registered = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        //     if($registered) {
        //        session()->regenerate();
        //        return redirect()->route('blog.index');
        //     }
        //$credentials = $request->only('email', 'password');
        //if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        //     return redirect()->route('blog.index');
        //}
     }
}

