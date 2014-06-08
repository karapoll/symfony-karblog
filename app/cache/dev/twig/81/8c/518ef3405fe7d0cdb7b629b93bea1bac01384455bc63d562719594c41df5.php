<?php

/* TroiswaBlogBundle:Block:admineditarticle.html.twig */
class __TwigTemplate_818c518ef3405fe7d0cdb7b629b93bea1bac01384455bc63d562719594c41df5 extends Twig_Template
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
    <!-- the comment box -->
    <div class=\"well\">
        <h1>Edit an Article</h1>
        ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formArt"]) ? $context["formArt"] : $this->getContext($context, "formArt")), 'form_start', array("method" => "POST", "role" => "form"));
        echo "

        <div class=\"form-group\">
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formArt"]) ? $context["formArt"] : $this->getContext($context, "formArt")), "author"), 'label');
        echo "
            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formArt"]) ? $context["formArt"] : $this->getContext($context, "formArt")), "author"), 'widget', array("id" => "author", "attr" => array("placeholder" => "Author", "class" => "form-control")));
        echo "
            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formArt"]) ? $context["formArt"] : $this->getContext($context, "formArt")), "author"), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formArt"]) ? $context["formArt"] : $this->getContext($context, "formArt")), "title"), 'label');
        echo "
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formArt"]) ? $context["formArt"] : $this->getContext($context, "formArt")), "title"), 'widget', array("id" => "author", "attr" => array("placeholder" => "Title", "class" => "form-control")));
        echo "
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formArt"]) ? $context["formArt"] : $this->getContext($context, "formArt")), "title"), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formArt"]) ? $context["formArt"] : $this->getContext($context, "formArt")), "content"), 'label');
        echo "
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formArt"]) ? $context["formArt"] : $this->getContext($context, "formArt")), "content"), 'widget', array("id" => "content", "attr" => array("placeholder" => "Content", "class" => "form-control")));
        echo "
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formArt"]) ? $context["formArt"] : $this->getContext($context, "formArt")), "content"), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formArt"]) ? $context["formArt"] : $this->getContext($context, "formArt")), "category"), 'label', array("label" => "Category"));
        echo "
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formArt"]) ? $context["formArt"] : $this->getContext($context, "formArt")), "category"), 'widget', array("attr" => array("class" => "category")));
        echo "
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formArt"]) ? $context["formArt"] : $this->getContext($context, "formArt")), "category"), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formArt"]) ? $context["formArt"] : $this->getContext($context, "formArt")), "cover"), 'label', array("label" => "Popularity"));
        echo "
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formArt"]) ? $context["formArt"] : $this->getContext($context, "formArt")), "cover"), 'widget', array("attr" => array("class" => "cover")));
        echo "
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formArt"]) ? $context["formArt"] : $this->getContext($context, "formArt")), "cover"), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formArt"]) ? $context["formArt"] : $this->getContext($context, "formArt")), "submit"), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
            ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formArt"]) ? $context["formArt"] : $this->getContext($context, "formArt")), 'form_end');
        echo "
        </div>

    </div>

    ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 48
            echo "        <p class=\"alert alert-session\">";
            echo twig_escape_filter($this->env, (isset($context["flash"]) ? $context["flash"] : $this->getContext($context, "flash")), "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
    <hr>
    <!-- the article -->
    <h3>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title"), "html", null, true);
        echo "
        <small>Posted on ";
        // line 54
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "dateCreation"), "Y-m-d"), "html", null, true);
        echo " by ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "author"), "html", null, true);
        echo "</small>
    </h3>
    <p>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content"), "html", null, true);
        echo "</p>


";
    }

    public function getTemplateName()
    {
        return "TroiswaBlogBundle:Block:admineditarticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 56,  152 => 54,  148 => 53,  143 => 50,  134 => 48,  130 => 47,  122 => 42,  118 => 41,  111 => 37,  107 => 36,  103 => 35,  96 => 31,  92 => 30,  88 => 29,  81 => 25,  77 => 24,  73 => 23,  66 => 19,  62 => 18,  58 => 17,  51 => 13,  47 => 12,  43 => 11,  37 => 8,  31 => 4,  28 => 3,);
    }
}
