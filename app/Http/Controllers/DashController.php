<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller
{
    //page d'accueil
    public function showDashboard()
    {
         return view('dashboard.index');
    }

    //Page 404 personnalisée (optionnel)
    public function show404()
    {
         return view('dashboard.404');
    }

    // Page vide
    public function showBlank()
    {
        return view('dashboard.blank');
    }

    // Page de recuperation MDP
    public function showPwd()
    {
        return view('dashboard.forgot-password');
    }

    // Page de creation de compte
    public function showAccount()
    {
        return view('dashboard.create-account');
    }

    // Page de connexion
    public function showLogindash()
    {
        return view('dashboard.logindash');
    }


    // Page des formulaires
    public function showForms()
    {
        return view('dashboard.forms');
    }

    // Page des Modals
    public function showModals()
    {
        return view('dashboard.modals');
    }

    // Page des tables
    public function showTables()
    {
        return view('dashboard.tables');
    }

}
