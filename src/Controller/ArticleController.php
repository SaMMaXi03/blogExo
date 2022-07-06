<?php

namespace App\Controller;

use App\Entity\Article;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ArticleController extends AbstractController
{
    #[Route("/insert-article", name: "insert-article")]
    public function insertArticle(EntityManagerInterface $entityManager){

        $article = new Article();

        $article->setTitle("Chat mignon");
        $article->setContent("ouuuh qu'il est troumignoninou ce petit chat. Et si je lui roulais dessus avec mon SUV");
        $article->setIsPublished(true);
        $article->setAuthor("Moi même");

        $entityManager->persist($article);
        $entityManager->flush();

        dump($article);
        die();
    }
}