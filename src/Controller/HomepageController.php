<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\SwordRepository;
use App\Entity\Sword;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $swords = $this->getDoctrine()
            ->getRepository(Sword::class)
            ->findBy([], ['price' => 'DESC']);
        if (!$swords){
            throw $this->createNotFoundException('There is no product in the database');
        }
        return $this->render('homepage.html.twig', ['swords' => $swords]);
    }
}