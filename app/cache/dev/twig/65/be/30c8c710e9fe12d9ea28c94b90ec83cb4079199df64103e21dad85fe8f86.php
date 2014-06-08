<?php

/* TroiswaBlogBundle:Block:admincreatearticle.html.twig */
class __TwigTemplate_65be30c8c710e9fe12d9ea28c94b90ec83cb4079199df64103e21dad85fe8f86 extends Twig_Template
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
    <div class=\"well\">
        <h3>Articles</h3>

        <div class=\"form-group\">
            ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formArt"]) ? $context["formArt"] : $this->getContext($context, "formArt")), 'form_start', array("method" => "POST", "class" => "form-group"));
        echo "
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formArt"]) ? $context["formArt"] : $this->getContext($context, "formArt")), "author"), 'label', array("label_attr" => array("class" => ""), "label" => "Author"));
        echo "
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formArt"]) ? $context["formArt"] : $this->getContext($context, "formArt")), "author"), 'widget', array("attr" => array("placeholder" => "Author", "class" => "form-control")));
        echo "
            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formArt"]) ? $context["formArt"] : $this->getContext($context, "formArt")), "author"), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formArt"]) ? $context["formArt"] : $this->getContext($context, "formArt")), 'form_start', array("method" => "POST", "class" => "form-group"));
        echo "
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formArt"]) ? $context["formArt"] : $this->getContext($context, "formArt")), "title"), 'label', array("label_attr" => array("class" => ""), "label" => "Title"));
        echo "
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formArt"]) ? $context["formArt"] : $this->getContext($context, "formArt")), "title"), 'widget', array("attr" => array("placeholder" => "Title", "class" => "form-control")));
        echo "
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formArt"]) ? $context["formArt"] : $this->getContext($context, "formArt")), "title"), 'errors');
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formArt"]) ? $context["formArt"] : $this->getContext($context, "formArt")), "content"), 'label', array("label_attr" => array("class" => "")));
        echo "
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formArt"]) ? $context["formArt"] : $this->getContext($context, "formArt")), "content"), 'widget', array("attr" => array("placeholder" => "Content", "class" => "form-control")));
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
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formArt"]) ? $context["formArt"] : $this->getContext($context, "formArt")), 'form_end');
        echo "
        </div>

    </div>

    ";
        // line 49
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 50
            echo "            <p class = 'alert alert.success'>";
            echo twig_escape_filter($this->env, (isset($context["flash"]) ? $context["flash"] : $this->getContext($context, "flash")), "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
        <div class=''>
            ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 55
            echo "
                <p>";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "dateCreation"), "Y-m-d"), "html", null, true);
            echo "</p><br>
                <p>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title"), "html", null, true);
            echo "</p><br>
                <p>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content"), "html", null, true);
            echo "</p><br>
                <hr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </div>

";
    }

    public function getTemplateName()
    {
        return "TroiswaBlogBundle:Block:admincreatearticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 62,  167 => 58,  163 => 57,  159 => 56,  156 => 55,  152 => 54,  148 => 52,  139 => 50,  134 => 49,  126 => 43,  121 => 41,  114 => 37,  110 => 36,  106 => 35,  99 => 31,  95 => 30,  91 => 29,  84 => 25,  80 => 24,  76 => 23,  69 => 19,  65 => 18,  61 => 17,  57 => 16,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  31 => 4,  28 => 3,);
    }
}
