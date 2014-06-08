<?php

/* TroiswaBlogBundle:Block:showarticlesincategory.html.twig */
class __TwigTemplate_31cac783c56629c8e02b326b75159a39ceeaa5c82a2b1efea8fe11d9e0a41600 extends Twig_Template
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
    ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articlescategory"]) ? $context["articlescategory"] : $this->getContext($context, "articlescategory")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 6
            echo "
        <h1>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title"), "html", null, true);
            echo "</h1>

        <p><span class=\"glyphicon glyphicon-time\"></span> Posted on ";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "dateCreation"), "Y-m-d"), "html", null, true);
            echo " by ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "author"), "html", null, true);
            echo "</p>

        <p><strong>Categories</strong></p>
        <div class=''>
            ";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "category"));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 14
                echo "                <p>";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "title") . " "), "html", null, true);
                echo "</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        </div>

        <img src=\"http://placehold.it/900x300\" class=\"img-responsive\"><br>

        <p>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content"), "html", null, true);
            echo "</p>

        <a class=\"btn btn-primary\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("troiswa_blog_showarticle_article", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">Read More<span class=\"glyphicon glyphicon-chevron-right\"></span></a>

        <a class=\"btn btn-primary\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("troiswa_blog_edit_article", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">Edit<span class=\"glyphicon glyphicon-chevron-right\"></span></a>

        <a class=\"btn btn-primary\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("troiswa_blog_remove_article", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">Remove<span class=\"glyphicon glyphicon-chevron-right\"></span></a>

        <hr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
";
    }

    public function getTemplateName()
    {
        return "TroiswaBlogBundle:Block:showarticlesincategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 31,  89 => 26,  84 => 24,  79 => 22,  74 => 20,  68 => 16,  59 => 14,  55 => 13,  46 => 9,  41 => 7,  38 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
