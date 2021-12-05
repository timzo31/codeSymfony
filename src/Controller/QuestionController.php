<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @Route("/")
     */

    public function homepage()
    {
        return new Response('<html><body><h1>What a bewitching controller</h1></body>');
    }
    /**
     * @Route("/questions/{slug}")
     */
    public function question_show($slug)
    {
        return new Response(sprintf('
        Future page to show question: "%s"', ucwords(str_replace('-', ' ', $slug))));
    }
}