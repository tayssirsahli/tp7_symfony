<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Category;
use App\Entity\CategorySearch;

use App\Entity\PriceSearch;
use App\Entity\PropertySearch;
use App\Form\ArticleType;
use App\Form\CategorySearchType;
use App\Form\CategoryType;
use App\Form\PriceSearchType;
use App\Form\PropertySearchType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class IndexController extends AbstractController
{
    #[Route('/', name: 'home')]

    public function home(EntityManagerInterface $entityManager, Request $request): Response
    {
        $propertySearch = new PropertySearch();
        $form = $this->createForm(PropertySearchType::class, $propertySearch);
        $form->handleRequest($request);
        //initialement le tableau des articles est vide,
        //c.a.d on affiche les articles que lorsque l'utilisateur
        //clique sur le bouton rechercher
        $articles = [];

        if ($form->isSubmitted() && $form->isValid()) {
            //on récupère le nom d'article tapé dans le formulaire

            $nom = $propertySearch->getNom();
            if ($nom != "")
                //si on a fourni un nom d'article on affiche tous les articles ayant ce nom
                $articles = $entityManager->getRepository(Article::class)->findBy(['nom' => $nom]);
            else
                //si si aucun nom n'est fourni on affiche tous les articles
                $articles = $entityManager->getRepository(Article::class)->findAll();
        }
        return $this->render('articles/index.html.twig', ['form' => $form->createView(), 'articles' => $articles]);
    }


    #[Route('/article/save', name: 'articleSave')]
    public function save(EntityManagerInterface $entityManager): Response
    {

        $article = new Article();
        $article->setNom('pc ');
        $article->setPrix(3000);
        $entityManager->persist($article);
        $entityManager->flush();
        return new Response('Article enregisté avec id ' . $article->getId());
    }
    #[Route('/article/new', name: 'new_article')]
    public function new(Request $request, EntityManagerInterface $entityManager)
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $article = $form->getData();

            $entityManager->persist($article);
            $entityManager->flush();
            return $this->redirectToRoute('home');
        }
        return $this->render('articles/new.html.twig', ['form' => $form->createView()]);
    }
    #[Route('/article/{id}', name: 'article_show')]

    public function show($id, EntityManagerInterface $entityManager)
    {
        $article = $entityManager->getRepository(Article::class)->find($id);
        return $this->render(
            'articles/show.html.twig',
            array('article' => $article)
        );
    }

    #[Route('/article/edit/{id}', name: 'edit_article')]

    public function edit(Request $request, $id, EntityManagerInterface $entityManager)
    {
        $article = new Article();
        $article = $entityManager->getRepository(Article::class)->find($id);

        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('articles/edit.html.twig', ['form' =>
        $form->createView()]);
    }

    #[Route('/article/delete/{id}', name: 'delete_article')]

    public function delete(Request $request, $id, EntityManagerInterface $entityManager)
    {
        $article = $entityManager->getRepository(Article::class)->find($id);

        $entityManager->remove($article);
        $entityManager->flush();

        $response = new Response();
        $response->send();
        return $this->redirectToRoute('home');
    }

    #[Route('/category/newCat', name: 'new_category')]

    public function newCategory(Request $request, EntityManagerInterface $entityManager)
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $article = $form->getData();
            $entityManager->persist($category);
            $entityManager->flush();
        }
        return $this->render('articles/newCategory.html.twig', ['form' =>
        $form->createView()]);
    }


    #[Route('/art_cat/', name: 'article_par_cat')]

    public function articlesParCategorie(Request $request, EntityManagerInterface $entityManager)
    {
        $categorySearch = new CategorySearch();
        $form = $this->createForm(CategorySearchType::class, $categorySearch);
        $form->handleRequest($request);
        $articles = [];

        if ($form->isSubmitted() && $form->isValid()) {
            $category = $categorySearch->getCategory();

            if ($category != "")
                $articles = $category->getArticles();
            else
                $articles = $entityManager->getRepository(Article::class)->findAll();
        }

        return $this->render('articles/articlesParCategorie.html.twig', ['form' => $form->createView(), 'articles' => $articles]);
    }

    #[Route('/art_prix/', name:'article_par_prix')]
    
    public function articlesParPrix(Request $request, EntityManagerInterface $entityManager)
    {

        $priceSearch = new PriceSearch();
        $form = $this->createForm(PriceSearchType::class, $priceSearch);
        $form->handleRequest($request);
        $articles = [];
        if ($form->isSubmitted() && $form->isValid()) {
            $minPrice = $priceSearch->getMinPrice();
            $maxPrice = $priceSearch->getMaxPrice();

            $articles = $entityManager->getRepository(Article::class)->findByPriceRange($minPrice, $maxPrice);
        }
        return $this->render('articles/articlesParPrix.html.twig', ['form' => $form->createView(), 'articles' => $articles]);
    }
}
