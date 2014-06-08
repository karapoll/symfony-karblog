<?php

/* TroiswaBlogBundle:Block:nav.html.twig */
class __TwigTemplate_a594526897c10dca7d424f8cdb8ed645e33d3eb51049d8a7ffd67833e829cf65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ul class=\"nav navbar-nav\">

    <li><a href=\"#about\">About</a></li>
    <li class=\"dropdown\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Categories<b class=\"caret\"></b></a>
            ";
        // line 6
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TroiswaBlogBundle:Category:navcategory"));
        echo "
    </li>
    <li><a href=\"#contact\">Contact</a></li>
    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("troiswa_blog_create_user");
        echo "\">Login</a></li>
    <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("troiswa_blog_create_article");
        echo "\">Admin</a></li>

</ul>
";
    }

    public function getTemplateName()
    {
        return "TroiswaBlogBundle:Block:nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 10,  32 => 9,  26 => 6,  19 => 1,);
    }
}
