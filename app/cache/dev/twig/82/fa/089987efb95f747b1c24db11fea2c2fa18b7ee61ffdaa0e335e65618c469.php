<?php

/* TroiswaBlogBundle:Block:navbutton.html.twig */
class __TwigTemplate_82fa089987efb95f747b1c24db11fea2c2fa18b7ee61ffdaa0e335e65618c469 extends Twig_Template
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
        echo "<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
    <span class=\"sr-only\">Toggle navigation</span>
    <span class=\"icon-bar\"></span>
    <span class=\"icon-bar\"></span>
    <span class=\"icon-bar\"></span>
</button>
<a class=\"navbar-brand\" href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("troiswa_blog_homepage");
        echo "\">KarBlog</a>";
    }

    public function getTemplateName()
    {
        return "TroiswaBlogBundle:Block:navbutton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,  182 => 38,  175 => 35,  172 => 34,  164 => 35,  161 => 34,  154 => 35,  151 => 34,  144 => 35,  141 => 34,  134 => 35,  131 => 34,  127 => 30,  124 => 29,  121 => 28,  117 => 26,  114 => 25,  109 => 17,  83 => 15,  73 => 10,  70 => 9,  64 => 7,  56 => 40,  54 => 28,  41 => 20,  36 => 9,  23 => 1,  118 => 30,  115 => 29,  103 => 62,  92 => 53,  85 => 44,  67 => 31,  49 => 25,  39 => 9,  32 => 4,  29 => 3,  110 => 35,  101 => 33,  97 => 32,  91 => 29,  86 => 27,  79 => 14,  75 => 37,  71 => 21,  65 => 29,  61 => 17,  57 => 16,  51 => 27,  47 => 12,  43 => 11,  38 => 19,  31 => 7,  28 => 3,);
    }
}
