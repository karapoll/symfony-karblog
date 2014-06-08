<?php

/* TroiswaBlogBundle:Block:post.html.twig */
class __TwigTemplate_f2d056e8f4af3ad76345e8a2e82e0adf34787a9171a26d4c3d83f6fd60240d32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TroiswaBlogBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TroiswaBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <h3>There is ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "html", null, true);
        echo " articles on this blog</h3>

    <hr>

    ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 10
            echo "        <p class=\"alert alert-session\">";
            echo twig_escape_filter($this->env, (isset($context["flash"]) ? $context["flash"] : $this->getContext($context, "flash")), "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 14
            echo "
        <h1>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title"), "html", null, true);
            echo "</h1>

        <p><span class=\"glyphicon glyphicon-time\"></span> Posted on ";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "dateCreation"), "Y-m-d"), "html", null, true);
            echo " by ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "author"), "html", null, true);
            echo "</p>

        <p><strong>Categories</strong></p>
        <div class=''>
            ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "category"));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 22
                echo "                <p>";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "title") . " "), "html", null, true);
                echo "</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        </div>

        <img src=\"http://placehold.it/900x300\" class=\"img-responsive\"><br>

        <p>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content"), "html", null, true);
            echo "</p>

        <a class=\"btn btn-primary\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("troiswa_blog_showarticle_article", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">Read More<span class=\"glyphicon glyphicon-chevron-right\"></span></a>

        <a class=\"btn btn-primary\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("troiswa_blog_edit_article", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">Edit<span class=\"glyphicon glyphicon-chevron-right\"></span></a>

        <a class=\"btn btn-primary\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("troiswa_blog_remove_article", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">Remove<span class=\"glyphicon glyphicon-chevron-right\"></span></a>

        <hr>

        ";
            // line 45
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
";
    }

    public function getTemplateName()
    {
        return "TroiswaBlogBundle:Block:post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 47,  119 => 45,  112 => 34,  107 => 32,  102 => 30,  97 => 28,  91 => 24,  82 => 22,  78 => 21,  69 => 17,  64 => 15,  61 => 14,  57 => 13,  54 => 12,  45 => 10,  41 => 9,  34 => 5,  31 => 4,  28 => 3,);
    }
}
