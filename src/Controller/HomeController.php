<?php


namespace App\Controller;


use App\Entity\Article;
use App\Form\FormulaireType;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
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

    /**
     * @Route("/update/{id}", name="article_update")
     *
     * Pour modifier un article
     */
    public function update(ArticleRepository $articleRepository, $id, EntityManagerInterface
    $entityManager, Request $request)
    {

        $article = $articleRepository->find($id);

        // représentation abstraite du formulaire
        $form = $this->createForm(FormulaireType::class,$article);

        $form->handleRequest($request);

        // traitement après soumission du formulaire
        // vérification de la soumission du formulaire + vérifier si formulaire valide
        if($form->isSubmitted() && $form->isValid()){

            $entityManager->persist($article);
            $entityManager->flush();

            return $this->redirectToRoute('accueil');

        }


        return $this->render('article_update.html.twig',[
            'formulaire' => $form->createView()
        ]);
    }

    /**
     *
     * CRÉER UNE MÉTHODE + UN TWIG POUR AJOUTER UN NOUVEL ARTICLE
     *
     */

    /**
     * @Route("/create", name="article_create")
     *
     * Permet de créer un article
     */
    public function create(Request $request, EntityManagerInterface $entityManager)
    {

        $article = new Article();

        // représentation abstraite du formulaire
        $form = $this->createForm(FormulaireType::class,$article);

        $form->handleRequest($request);

        // traitement après soumission du formulaire
        // vérification de la soumission du formulaire + vérifier si formulaire valide
        if($form->isSubmitted() && $form->isValid()){

            $entityManager->persist($article);
            $entityManager->flush();

            return $this->redirectToRoute('accueil');

        }

        return $this->render('article_create.html.twig',[
            'formulaire' => $form->createView() // représentation visuelle du formulaire
        ]);

    }
}