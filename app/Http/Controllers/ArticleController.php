<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;
use App\Models\SubscribedMail;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Affichage de page d'Accueil
    public function indexAccueil()
    {
        $articles = Article::all();
        return view('layouts.accueil.accueil', ['articles' => $articles]);
    }

    //Affichage des détails d'un article
    public function showDetails($id)
    {
        $article = Article::find($id);
        $releatedArticles = Article::where('id', '!=', $id)->take(4)->get();
        $creater=User::where('id', $article->user_id)->first();
        return view('layouts.details.details', ['article' => $article, 'creater' => $creater, 'releatedArticles' => $releatedArticles ]);
    }

    //enregistrer les emails entrer dans les subscribe
    public function storeEmail(Request $request)
    {
        // Valider la requête 
        $request->validate([
            'email' => 'required|email|unique:subscribed_mails,email',
        ], [
            'email.required' => 'Veuillez fournir une adresse e-mail.',
            'email.email' => 'L\'adresse e-mail doit être au format valide.',
            'email.unique' => 'Cette adresse e-mail est déjà inscrite.',
        ]);

        $subscriber = new SubscribedMail;
        $subscriber->email = $request->email;

        // Sauvegarder dans la base de données
        $subscriber->save();

        // Redirection avec un message de succès
        return redirect()->route('accueil', ['#form_id'])->with('success', 'Votre adresse e-mail a été enregistrée avec succès!');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
