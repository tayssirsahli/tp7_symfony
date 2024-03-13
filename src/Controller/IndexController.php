<?php

namespace App\Controller;

use App\Entity\Article;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class IndexController extends AbstractController
{
    #[Route('/', name: 'home')]

    public function home(EntityManagerInterface $entityManager): Response
    {
        $articles = $entityManager->getRepository(Article::class)->findAll();
        return $this->render('articles/index.html.twig', ['articles' => $articles]);
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
        $form = $this->createFormBuilder($article)
            ->add('nom', TextType::class)
            ->add('prix', TextType::class)
            ->add(
                'save',
                SubmitType::class,
                array(
                    'label' => 'Créer'
                )
            )->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Ensure the request method is POST before persisting data
            if ($request->isMethod('POST')) {
                $article = $form->getData();

                $entityManager->persist($article);
                $entityManager->flush();

                return $this->redirectToRoute('article_list');
            }
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

        $form = $this->createFormBuilder($article)
            ->add('nom', TextType::class)
            ->add('prix', TextType::class)
            ->add('save', SubmitType::class, array(
                'label' => 'Modifier'
            ))->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->flush();

            return $this->redirectToRoute('article_list');
        }
        return $this->render('articles/edit.html.twig', ['form' => $form->createView()]);
    }

    #[Route('/article/delete/{id}', name: 'delete_article')]

    public function delete(Request $request, $id, EntityManagerInterface $entityManager)
    {
        $article = $entityManager->getRepository(Article::class)->find($id);

        $entityManager->remove($article);
        $entityManager->flush();

        $response = new Response();
        $response->send();
        return $this->redirectToRoute('article_list');
    }
}
