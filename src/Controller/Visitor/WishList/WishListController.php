<?php

namespace App\Controller\Visitor\WishList;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WishListController extends AbstractController
{
    #[Route('/wish-list', name: 'visitor.wish_list.index', methods:['GET'])]
    public function index(): Response
    {
        return $this->render('pages/visitor/wish_list/index.html.twig');
    }
}
