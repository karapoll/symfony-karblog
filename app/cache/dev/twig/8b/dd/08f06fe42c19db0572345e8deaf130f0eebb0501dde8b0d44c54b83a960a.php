<?php

/* TroiswaBlogBundle:Block:showarticle.html.twig */
class __TwigTemplate_8bdd08f06fe42c19db0572345e8deaf130f0eebb0501dde8b0d44c54b83a960a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TroiswaBlogBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
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
    <h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theArticle"]) ? $context["theArticle"] : $this->getContext($context, "theArticle")), "title"), "html", null, true);
        echo "</h1>

    <p><span class=\"glyphicon glyphicon-time\"></span> Posted on ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["theArticle"]) ? $context["theArticle"] : $this->getContext($context, "theArticle")), "dateCreation"), "Y-m-d"), "html", null, true);
        echo " by ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theArticle"]) ? $context["theArticle"] : $this->getContext($context, "theArticle")), "author"), "html", null, true);
        echo "</p>

    <p><strong>Categories</strong></p>
    <div class=''>
        ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["theArticle"]) ? $context["theArticle"] : $this->getContext($context, "theArticle")), "category"));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 12
            echo "            <p>";
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "title") . " "), "html", null, true);
            echo "</p><br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </div>

    <img src=\"http://placehold.it/900x300\" class=\"img-responsive\"><br>
    <p>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theArticle"]) ? $context["theArticle"] : $this->getContext($context, "theArticle")), "content"), "html", null, true);
        echo "</p><br>

    ";
        // line 25
        echo "
    <!-- the comment box -->
    <div class=\"well\">
        <h3>Comment</h3>

        ";
        // line 40
        echo "
        ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formCom"]) ? $context["formCom"] : $this->getContext($context, "formCom")), 'form_start', array("method" => "POST", "class" => "form-group"));
        echo "


            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCom"]) ? $context["formCom"] : $this->getContext($context, "formCom")), "author"), 'label', array("label_attr" => array("class" => ""), "label" => "Name"));
        echo "
            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCom"]) ? $context["formCom"] : $this->getContext($context, "formCom")), "author"), 'widget', array("attr" => array("placeholder" => "Name", "class" => "form-control")));
        echo "
            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCom"]) ? $context["formCom"] : $this->getContext($context, "formCom")), "author"), 'errors', array("attr" => array("class" => "form-control")));
        echo "
            <br>


            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCom"]) ? $context["formCom"] : $this->getContext($context, "formCom")), "content"), 'label', array("label_attr" => array("class" => "")));
        echo "
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCom"]) ? $context["formCom"] : $this->getContext($context, "formCom")), "content"), 'widget', array("attr" => array("placeholder" => "Content", "class" => "form-control")));
        echo "
            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCom"]) ? $context["formCom"] : $this->getContext($context, "formCom")), "content"), 'errors', array("attr" => array("class" => "form-control")));
        echo "
            <br>


            ";
        // line 62
        echo "
            <div class=''>
                ";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["theArticle"]) ? $context["theArticle"] : $this->getContext($context, "theArticle")), "comments"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 65
            echo "
                    <p>";
            // line 66
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "dateCreation"), "Y-m-d"), "html", null, true);
            echo "</p><br>
                    <p>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "author"), "html", null, true);
            echo "</p><br>
                    <p>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "content"), "html", null, true);
            echo "</p><br>

                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 71
            echo "                    <p>Be the first one to leave a comment!</p>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "            </div>

            <div id=\"stars\"></div>
            <br>

            ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCom"]) ? $context["formCom"] : $this->getContext($context, "formCom")), "submit"), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

        ";
        // line 81
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formCom"]) ? $context["formCom"] : $this->getContext($context, "formCom")), 'form_end');
        echo "

        ";
        // line 83
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 84
            echo "            <p class = 'alert alert.success'>";
            echo twig_escape_filter($this->env, (isset($context["flash"]) ? $context["flash"] : $this->getContext($context, "flash")), "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "
    </div>

    <hr>

";
    }

    // line 94
    public function block_javascript($context, array $blocks = array())
    {
        // line 95
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    ";
        // line 96
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c1b1510_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c1b1510_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c1b1510_jquery.raty_1.js");
            // line 97
            echo "        <script type=\"text/javascript\" src = '";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "'></script>
    ";
        } else {
            // asset "c1b1510"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c1b1510") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c1b1510.js");
            echo "        <script type=\"text/javascript\" src = '";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "'></script>
    ";
        }
        unset($context["asset_url"]);
        // line 99
        echo "        <script>
            // \$('#stars').raty({ path: '../../images' });
            \$('#stars').raty({ path: '";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "getBasePath", array(), "method"), "html", null, true);
        echo "/images' });
        </script>
";
    }

    public function getTemplateName()
    {
        return "TroiswaBlogBundle:Block:showarticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 101,  219 => 99,  205 => 97,  201 => 96,  196 => 95,  193 => 94,  184 => 86,  175 => 84,  171 => 83,  166 => 81,  161 => 79,  154 => 74,  146 => 71,  138 => 68,  134 => 67,  130 => 66,  127 => 65,  122 => 64,  118 => 62,  111 => 52,  107 => 51,  103 => 50,  96 => 46,  92 => 45,  88 => 44,  82 => 41,  79 => 40,  72 => 25,  67 => 17,  62 => 14,  53 => 12,  49 => 11,  40 => 7,  35 => 5,  32 => 4,  29 => 3,);
    }
}
