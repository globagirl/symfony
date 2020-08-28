<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    private $tab = ["terrain", "maison", "appartement"];

    /**
     * @Route ("/index", name="index")
     */
    public function index()
    {
//        return new Response("Bienvenue dans notre site");
        return $this->render("categorie/index.html.twig");
    }

    /**
     * @Route ("/show/{id}", name="show")
     */
    public function show($id){
        if (is_numeric($id) && $id>=0 && $id<count($this->tab))
            return $this->render("categorie/show.html.twig", ['categorie'=>$this->tab[$id]]);
        else
            return new Response("Erreur: id invalid !");
    }

    /**
     * @Route ("/list", name="list")
     */
    public function list(){
        return $this->render("categorie/list.html.twig", ['tab'=>$this->tab]);
    }
}
