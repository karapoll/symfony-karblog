<?php

namespace Troiswa\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Troiswa\BlogBundle\Entity\Article;
use Troiswa\BlogBundle\Entity\Comment;
use Troiswa\BlogBundle\Form\ArticleType;


class ArticleController extends Controller
{
    public function createAction(Request $request)
    {
        $article = new Article();
        $article -> setDateCreation(new\DateTime('now'));
        $article -> setAuthor('KarBlog');

        $form = $this->createForm(new ArticleType(),$article);

        /*$article -> setTitle("Tle456");
        $article -> setContent("Et Epigonus quidem amictu tenus philosophus, ut apparuit, prece frustra temptata, sulcatis lateribus mortisque metu admoto turpi confessione cogitatorum socium, quae nulla erant, fuisse firmavit cum nec vidisset quicquam nec audisset penitus expers forensium rerum; Eusebius vero obiecta fidentius negans, suspensus in eodem gradu constantiae stetit latrocinium illud esse, non iudicium clamans.");*/

        $form -> handleRequest($request);

        if($form -> isValid())
        {
            $em = $this -> getDoctrine() -> getManager();
            $em -> persist($article);
            $em -> flush();
            $this -> get('session') -> getFlashBag() -> add('notice','Your article has been created ');
        }

        $articles = $this -> getDoctrine() -> getRepository('TroiswaBlogBundle:Article') -> findAllByDateDesc();

        return $this->render('TroiswaBlogBundle:Block:admincreatearticle.html.twig', array('articles' => $articles, 'formArt' => $form -> createView()));
    }

    public function showAction($id)
    {
        $theArticle = $this -> getDoctrine() -> getRepository('TroiswaBlogBundle:Article') -> find($id);

        // creation d'un formulaire lié à comment
        $comment = new Comment();
        $comment -> setDateCreation(new \DateTime('now'));
        $form = $this -> createFormBuilder($comment)
            -> add('author','text')
            -> add('content','textarea')
            -> add('rate', 'hidden')
            -> add('submit','submit')
            -> setAction($this->generateUrl('troiswa_blog_savecom_article', array('id' => $id))) -> getForm();

        /*
        if('POST' == $request -> getMethod())
        {
            $form -> bind($request);
            $validator = $this -> get('validator');
            $errors = $validator -> validate($form);
            if(!empty($errors))
            {
                // enregistrement
                $em = $this -> getDoctrine() -> getManager();
                $comment -> setArticle($theArticle);
                $theArticle -> addComment($comment);
                $em -> persist($comment);
                $em -> persist($theArticle);
                $em -> flush();
            }
        }
        */

        /*$formCloned = clone $form;

        $form -> handleRequest($request);

        if($form -> isValid())
        {
            $em = $this -> getDoctrine() -> getManager();
            // $comment -> setArticle($theArticle); passe dans function addComment dans Article.php
            $theArticle -> addComment($comment);
            $em -> persist($comment);
            $em -> persist($theArticle);
            $em -> flush();

            $form = $formCloned;
            $this -> get('session') -> getFlashBag() -> add('notice','Your comment has been taken ');

        }*/

        return $this->render('TroiswaBlogBundle:Block:showarticle.html.twig', array('theArticle' => $theArticle, 'formCom' => $form -> createView()));

    }

    public function popularAction()
    {
        /* $tab = array();
        $tab[0] = 1;
        $tab[1] = 2;
        $tab[2] = 3;*/

        $popularArticles = $this -> getDoctrine() -> getRepository('TroiswaBlogBundle:Article') -> popularArticles();

        return $this->render('TroiswaBlogBundle:Block:asidepopular.html.twig', array('popularArticles' => $popularArticles));
    }

    /*exemple
    public function displayComments()
    {
        $article = $this -> getDoctrine() -> getRepository('TroiswaBlogBundle') -> find(1);
        $comment = new comment();
        $comment -> setArticle($article);
    }*/

    public function savecomAction($id, Request $request)
    {
        $theArticle = $this -> getDoctrine() -> getRepository('TroiswaBlogBundle:Article') -> find($id);
        $comment = new Comment();
        $comment -> setDateCreation(new \DateTime('now'));
        $form = $this -> createFormBuilder($comment) -> add('author','text') -> add('content','textarea') -> add('rate', 'hidden') -> add('submit','submit') -> getForm();


        $form -> handleRequest($request);

        if($form -> isValid())
        {
            $comment->setRate($request->request->get('score'));
            $em = $this -> getDoctrine() -> getManager();
            $theArticle -> addComment($comment);
            $em -> persist($comment);
            //$em -> persist($theArticle);
            $em -> flush();
            $this -> get('session') -> getFlashBag() -> add('notice','Your comment has been taken ');
        }

        return $this->redirect($this->generateUrl('troiswa_blog_showarticle_article', array('id' => $id)));
    }

    public function editAction($id, Request $request)
    {
        $article = $this->getDoctrine()->getRepository('TroiswaBlogBundle:Article')->find($id);

        $form = $this->createForm(new ArticleType(),$article);

        $form->handleRequest($request);

        if ($form->isValid())
        {
            $article->setTitle($_POST['form']['title']);
            $article->setContent($_POST['form']['content']);
            $article->setCover($_POST['form']['cover']);
            $article->setDateCreation(new \DateTime('now'));
            $article->setAuthor($_POST['form']['author']);


            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            $this->get('session')->getFlashBag()->add('notice','Article modified');
        }

        return $this->render('TroiswaBlogBundle:Block:admineditarticle.html.twig',array('article' => $article , 'formArt' => $form->createView()));

    }

    public function removeAction($id)
    {
        $article = $this->getDoctrine()->getRepository('TroiswaBlogBundle:Article')->find($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($article);
        $em->flush();

        $this->get('session')->getFlashBag()->add('notice','Article deleted');

        return $this->redirect($this->generateUrl('troiswa_blog_homepage'));
    }

}

?>