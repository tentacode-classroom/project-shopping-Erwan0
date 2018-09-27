<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name = "homepage")
     */
    public function home()
    {
        $sword = [
            [
                'name' => 'sword',
                'id' => 1,
            ],
            [
                'name' => 'sword1',
                'id' => 2,
            ],
        ];

        return $this->render("/homepage/index.html.twig", [
            'sword' => $sword,
        ]);
    }
}