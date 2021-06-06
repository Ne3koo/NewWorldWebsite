<?php


namespace App\Controller;


use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function home(ArticleRepository $articleRepository)
    {
        // Liste tous les article - READ du CRUD
        $articles = $articleRepository->findAll();

        return $this->render('accueil.html.twig',[
            'articles' =>  $articles
        ]);

    }

    
}