<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\SwordRepository;
use App\Entity\Sword;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{productId}", name="product_detail")
     */
    public function index(int $productId)
    {
        $sword = $this->getDoctrine()->getRepository(Sword::class)->find($productId);
        $sword->incrementViews();
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($sword);
        $entityManager->flush();
        $data = [
            'slug' => $productId,
            'sword' => $sword,
        ];
        return $this->render('product/detail.html.twig', $data);
    }
}