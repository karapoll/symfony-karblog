<?php

namespace Troiswa\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// use Symfony\Component\HTTpFondation\Response;


class DefaultController extends Controller
{
    public function indexAction()
    {
        // $articles = $this -> getDoctrine() -> getRepository('TroiswaBlogBundle:Article') -> findAll();
        $articles = $this -> getDoctrine() -> getRepository('TroiswaBlogBundle:Article') -> findAllByDateDesc();
        $count = $this -> getDoctrine() -> getRepository('TroiswaBlogBundle:Article') -> countArticle();

        return $this->render('TroiswaBlogBundle:Block:post.html.twig', array('articles' => $articles, 'count' => $count ));
    }
}

?>