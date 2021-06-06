<?php


namespace App\Controller;


use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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

    /**
    * @Route("/article/{id}", name="article")
    */

    public function article(ArticleRepository $articleRepository, $id){
        //Ici read du CRUD

        $articles = $articleRepository->findOneBy(['id' => $id]);

        return $this->render('article.html.twig', ['article' => $articles]);
    }
    
    /**
     * FAIRE UN "DELETE" = SUPPRESSION D'UN ARTICLE
     *
     * 1/ Quand on clique sur "Supprimer" => DD de l'ID de l'article
     *
     * 2/ Supprimer l'article qui correspond à l'ID
     *
     * @Route("/delete/{id}", name="article_delete")
     *
     * Suppression d'un article
     * Aucune vue - redirection vers l'accueil de l'admin
     *
     */
    public function delete($id, ArticleRepository $articleRepository, EntityManagerInterface $entityManager)
    {
        // je sélectionne l'article à supprimer (en accord avec l'ID)
        $article = $articleRepository->find($id);

        // je supprime l'article
        $entityManager->remove($article);
        $entityManager->flush();

        return $this->redirectToRoute('accueil');

    }
}