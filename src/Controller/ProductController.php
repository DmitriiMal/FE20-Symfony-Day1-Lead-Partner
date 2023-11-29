<?php

namespace App\Controller;

use App\Entity\Product;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;


class ProductController extends AbstractController
{

    #[Route('/', name: 'index_action')]
    public function indexAction(ManagerRegistry $doctrine)
    {
        $products = $doctrine
            ->getRepository(Product::class)
            ->findAll(); // this variable $products will store the result of running a query to find all the products
        return $this->render('product/index.html.twig', array("products" => $products));
        //sends the variable that have all the products as an array of objects to the index.html.twig page
    }


    #[Route('/create', name: 'create_action')]
    public function createAction(ManagerRegistry $doctrine)
    {

        // you can fetch the ManagerRegistry via $doctrine()
        $em = $doctrine->getManager();
        $product = new Product(); // here we will create an object from our class Product.
        $product->setName('Keyboard'); // in our Product class we have a set function for each column in our db
        $product->setPrice(19);

        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        $em->persist($product);
        // actually executes the queries (i.e. the INSERT query)
        $em->flush();
        return new Response('Saved new product with id' . $product->getId());
    }

    #[Route('/details/{productId}', name: 'details_action')]
    public function showDetailsAction($productId, ManagerRegistry $doctrine)
    {
        $product = $doctrine
            ->getRepository(Product::class)
            ->find($productId);
        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id ' . $productId
            );
        } else {
            return new Response('Details from the product with id ' . $productId . ", Product name is " . $product->getName() . " and it cost " . $product->getPrice() . "€");
        }
    }
}
