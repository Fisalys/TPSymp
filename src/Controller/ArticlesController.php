<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Articles;

    /**
     * @Route("/news", name="new_")
     */
class ArticlesController extends AbstractController
{
    /**
     * @Route("/", name="articles")
     */
    public function index(): Response
    {
        $articles = $this->getDoctrine()->getRepository(Articles::class)->findBy([], ['created_at' => 'desc']);

        return $this->render('articles/index.html.twig', [
            'articles' => $articles,
        ]);
    }
}
