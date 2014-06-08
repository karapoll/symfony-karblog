<?php

namespace Troiswa\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class CategoryController extends Controller
{
    public function showAction($id)
    {
        $articlescategory = $this -> getDoctrine() -> getRepository('TroiswaBlogBundle:Article') -> findAllByCategory($id);

        return $this->render('TroiswaBlogBundle:Block:showarticlesincategory.html.twig', array('articlescategory' => $articlescategory));
    }

    public function navcategoryAction()
    {
        $navcategory = $this -> getDoctrine() -> getRepository('TroiswaBlogBundle:Category') -> findAll();

        return $this->render('TroiswaBlogBundle:Block:navcategories.html.twig', array('navcategory' => $navcategory));
    }

}

?>