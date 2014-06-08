<?php

/* ::base.html.twig */
class __TwigTemplate_00df56ddecb1b413d7ea864bcaeff16e5f8f1eff109def13d1c2262899ba1f7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html>

    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 9
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 19
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body>

        ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('javascript', $context, $blocks);
        // line 40
        echo "
    </body>

</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 9
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 10
        echo "        <!-- Latest compiled and minified CSS -->
        <!-- <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"//startbootstrap.com/templates/css/blog-home.css\"> -->

        ";
        // line 14
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3f49ce4_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3f49ce4_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3f49ce4_part_1_blog-home_1.css");
            // line 15
            echo "            <link rel=\"stylesheet\" href = '";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "'>
        ";
            // asset "3f49ce4_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3f49ce4_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3f49ce4_part_1_bootstrap_2.css");
            echo "            <link rel=\"stylesheet\" href = '";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "'>
        ";
            // asset "3f49ce4_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3f49ce4_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3f49ce4_part_1_bootstrap.min_3.css");
            echo "            <link rel=\"stylesheet\" href = '";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "'>
        ";
        } else {
            // asset "3f49ce4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3f49ce4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3f49ce4.css");
            echo "            <link rel=\"stylesheet\" href = '";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "'>
        ";
        }
        unset($context["asset_url"]);
        // line 17
        echo "
        ";
    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        // line 26
        echo "        ";
    }

    // line 28
    public function block_javascript($context, array $blocks = array())
    {
        // line 29
        echo "
            ";
        // line 30
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0a6869b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0a6869b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0a6869b_jquery_1.js");
            // line 34
            echo "
            <script type=\"text/javascript\" src=\"";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

            ";
            // asset "0a6869b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0a6869b_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0a6869b_part_2_bootstrap.min_1.js");
            // line 34
            echo "
            <script type=\"text/javascript\" src=\"";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

            ";
            // asset "0a6869b_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0a6869b_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0a6869b_part_2_jquery.raty_3.js");
            // line 34
            echo "
            <script type=\"text/javascript\" src=\"";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

            ";
            // asset "0a6869b_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0a6869b_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0a6869b_part_2_jquery.raty.min_4.js");
            // line 34
            echo "
            <script type=\"text/javascript\" src=\"";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

            ";
        } else {
            // asset "0a6869b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0a6869b") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0a6869b.js");
            // line 34
            echo "
            <script type=\"text/javascript\" src=\"";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>

            ";
        }
        unset($context["asset_url"]);
        // line 38
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 38,  175 => 35,  172 => 34,  164 => 35,  161 => 34,  154 => 35,  151 => 34,  144 => 35,  141 => 34,  134 => 35,  131 => 34,  127 => 30,  124 => 29,  121 => 28,  117 => 26,  114 => 25,  109 => 17,  83 => 15,  73 => 10,  70 => 9,  64 => 7,  56 => 40,  54 => 28,  41 => 20,  36 => 9,  23 => 1,  118 => 30,  115 => 29,  103 => 62,  92 => 53,  85 => 44,  67 => 31,  49 => 25,  39 => 9,  32 => 4,  29 => 3,  110 => 35,  101 => 33,  97 => 32,  91 => 29,  86 => 27,  79 => 14,  75 => 37,  71 => 21,  65 => 29,  61 => 17,  57 => 16,  51 => 27,  47 => 12,  43 => 11,  38 => 19,  31 => 7,  28 => 3,);
    }
}
