<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Temoignage;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;

class DashController extends Controller
{
    //page d'accueil
    public function showDashboard()
    {
        $posts = Post::query()->with('user')->get();
        return view('dashboard.index', compact('posts'));
    }

    //QUESTION
    //page questions frequemment posées
    public function afficheDashquest()
    {
        $questions = Question::all();
         return view('dashboard.dash-question', compact('questions'));
    }

    //CRUD QUESTIONS

    // formulaire Ajout question (GET)
    public function afficheformquest()
    {
         return view('dashboard.formquest');
    }

    // ajout des questions (POST)
    public function formsquest(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'reponse' => 'required',
        ]);

        $question = new Question();
        $question->titre =$request->titre;
        $question->reponse =$request->reponse;
        $question->save();

        return redirect('/dashboard');
    }

    //NEWSLETTERS
    public function afficheNewletters()
    {
        return view('dashboard.dash-newsletters');
    }
    //LISTE ADMIN
    public function afficherAdmin()
    {
        return view('dashboard.dash-admin');
    }
    //  Formulaire modification question (GET)
    public function formModifquest ($id)
    {
        $questions = Question::find($id);
        return view('dashboard.formModifquest', compact('questions'));
    }

    // Modification question (POST)
    public function Modifquest (Request $request )
    {
        $request->validate([
            'titre' => 'required',
            'reponse' => 'required',
        ]);

        $question = Question::find($request->id);
        $question->titre =$request->titre;
        $question->reponse =$request->reponse;
        $question->update();

        return redirect('/dashquest');
    }

    // Supprimer une question (GET)
    public function Supquest ($id)
    {
        $questions = Question::find($id);
        $questions->delete();
        return redirect('/dashquest');
    }

    //TEMOIGNAGES
    //page temoingnages client
    public function afficheDashtemoin()
    {
        $temoignages = Temoignage::all();
         return view('dashboard.dash-temoin',compact('temoignages'));
    }

    //Formulaire Ajout temoignage (GET)
    public function afficheformtemoignage()
    {
         return view('dashboard.formTemoin');
    }
    //Ajout temoignage (POST)
    public function formTemoin(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenoms' => 'required',
            'profession' => 'required',
            'temoignage' => 'required',
        ]);

        $temoignage = new Temoignage();
        $temoignage->nom =$request->nom;
        $temoignage->prenoms =$request->prenoms;
        $temoignage->profession =$request->profession;
        $temoignage->temoignage =$request->temoignage;
        $temoignage->save();

        return redirect('/temoignage');
    }
    //Formulaire de modification temoignage
    public function formModiftemoignage ($id)
    {
        $temoignages = Temoignage::find($id);
        return view('dashboard.formModiftemoignage', compact('temoignages'));
    }

    //Modifier temoignage
    public function Modiftemoin (Request $request )
    {
        $request->validate([
            'nom' => 'required',
            'prenoms' => 'required',
            'profession' => 'required',
            'temoignage' => 'required',
        ]);

        $temoignage = Temoignage::find($request->id);
        $temoignage->nom =$request->nom;
        $temoignage->prenoms =$request->prenoms;
        $temoignage->profession =$request->profession;
        $temoignage->temoignage =$request->temoignage;
        $temoignage->update();

        return redirect('/dashtemoin');
    }

    //Supprimer temoignage
    public function Suptemoignage ($id)
    {
        $questions = Temoignage::find($id);
        $questions->delete();
        return redirect('/dashtemoin');
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


    //CRUD BLOG
    //Route formulaire
    public function adblog()
    {
        return view('dashboard.formsBlog');
    }

    //Validation et récupération des valeurs
    public function adblogpost (PostRequest $request)
    {
        $path = $request->file('image')->store('uploads', 'public');
        $post = $request -> Validated();
        $post['image'] = $path;
        $post['user_id']=Auth::user()->id;
        Post::query()->create($post );
        return redirect('/dashboard');
    }
}
