<?php

/* TroiswaBlogBundle::layout.html.twig */
class __TwigTemplate_c7ff2e8e113c0bb8efdb73882ad03e09d92da141af8d7812034710956688ef91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">

            ";
        // line 9
        echo twig_include($this->env, $context, "TroiswaBlogBundle:Block:navbutton.html.twig");
        echo "

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse navbar-ex1-collapse\">

            ";
        // line 16
        echo twig_include($this->env, $context, "TroiswaBlogBundle:Block:nav.html.twig");
        echo "

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<div class=\"container\">

    <div class=\"row\">
        <div class=\"col-lg-8\">

            ";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "
        </div>

        <div class=\"col-lg-4\">
            <div class=\"well\">

                ";
        // line 37
        echo twig_include($this->env, $context, "TroiswaBlogBundle:Block:asidesearch.html.twig");
        echo "
                <!-- /input-group -->

            </div>
            <!-- /well -->
            <div class=\"well\">

                ";
        // line 44
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TroiswaBlogBundle:Article:popular"));
        echo "

            </div>
            <!-- /well -->
            ";
        // line 53
        echo "            <!-- /well -->
        </div>
    </div>

    <hr>

    <footer>
        <div class=\"row\">

            ";
        // line 62
        echo twig_include($this->env, $context, "TroiswaBlogBundle:Block:footer.html.twig");
        echo "

        </div>
    </footer>

</div>

";
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        // line 30
        echo "            ";
    }

    public function getTemplateName()
    {
        return "TroiswaBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 30,  115 => 29,  103 => 62,  92 => 53,  85 => 44,  67 => 31,  49 => 16,  39 => 9,  32 => 4,  29 => 3,  110 => 35,  101 => 33,  97 => 32,  91 => 29,  86 => 27,  79 => 23,  75 => 37,  71 => 21,  65 => 29,  61 => 17,  57 => 16,  51 => 13,  47 => 12,  43 => 11,  38 => 9,  31 => 4,  28 => 3,);
    }
}
