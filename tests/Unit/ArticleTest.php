<?php

namespace Tests\Unit;
use Tests\TestCase;
use App\Http\Controllers\ArticleController;

//
use App\Models\Article;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Mockery as m;
//


class ArticleTest extends TestCase
{

     use RefreshDatabase;

     public function tearDown(): void
     {
         parent::tearDown();
         m::close();

     }

     //tester la vue retourner de ce controleur et si il y a des articles retourner
     public function test_index_articles()
    {
        $controller = new ArticleController();
        $response = $this->get('/');
        $response->assertViewIs('layouts.accueil.accueil');
        $response->assertStatus(200);
        $response->assertViewHas('articles');
    } 

    
    public function testShowDetails()
    {

        // Créez un article simulé
        $article = m::mock(Article::class);
        $article->shouldReceive('id')->andReturn(3); // Par exemple, définissez les attributs nécessaires
        
        // Créez un utilisateur simulé associé à l'article
        $creater = m::mock(User::class); 
        $creater->shouldReceive('id')->andReturn(1);
        $article->shouldReceive('user_id')->andReturn($creater);//associer le user à l'article

        // Créez un utilisateur simulé associé à l'article

        $relatedArticle = m::mock(Article::class);
        $relatedArticle->shouldReceive('id')->andReturn(4);

        // Appel de la méthode showDetails du contrôleur en passant l'id de l'article créé
        $controller = new ArticleController();
        $id=3;
        $response = $this->get('/details/3');
        $response->assertStatus(500);
    }

    public function testStoreEmail()
    {
        // Cas où l'e-mail est valide
        $response = $this->post('/subscribe', [
            'email' => 'test@example.com',
        ]);

        $response->assertStatus(302); // Redirection
        $response->assertSessionHas('success'); // Vérifie la présence du message de succès

        // Assurez-vous que l'enregistrement a été effectué dans la base de données
        $this->assertDatabaseHas('subscribed_mails', [
            'email' => 'test@example.com',
        ]);

        // Cas où l'e-mail est invalide (vous pouvez ajouter d'autres cas de test selon vos besoins)
        $response = $this->post('/subscribe', [
            'email' => 'invalid-email',
        ]);

        $response->assertStatus(302); // Redirection

        // Assurez-vous que le message d'erreur est présent dans la session
        $response->assertSessionHasErrors('email', 'L\'adresse e-mail doit être au format valide.');
    }
}
