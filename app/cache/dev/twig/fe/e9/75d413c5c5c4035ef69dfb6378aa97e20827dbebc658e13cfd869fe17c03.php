<?php

/* TroiswaBlogBundle:Block:navcategories.html.twig */
class __TwigTemplate_fee975d413c5c5c4035ef69dfb6378aa97e20827dbebc658e13cfd869fe17c03 extends Twig_Template
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
        echo "<ul class=\"dropdown-menu\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["navcategory"]) ? $context["navcategory"] : $this->getContext($context, "navcategory")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 3
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("troiswa_blog_category", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "title"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "TroiswaBlogBundle:Block:navcategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  22 => 2,  33 => 10,  26 => 3,  27 => 7,  19 => 1,  182 => 38,  175 => 35,  172 => 34,  164 => 35,  161 => 34,  154 => 35,  151 => 34,  144 => 35,  141 => 34,  134 => 35,  131 => 34,  127 => 30,  124 => 29,  121 => 28,  117 => 26,  114 => 25,  109 => 17,  83 => 15,  73 => 10,  70 => 9,  64 => 7,  56 => 40,  54 => 28,  41 => 20,  36 => 9,  23 => 1,  118 => 30,  115 => 29,  103 => 62,  92 => 53,  85 => 44,  67 => 31,  49 => 25,  39 => 9,  32 => 4,  29 => 3,  110 => 35,  101 => 33,  97 => 32,  91 => 29,  86 => 27,  79 => 14,  75 => 37,  71 => 21,  65 => 29,  61 => 17,  57 => 16,  51 => 27,  47 => 12,  43 => 11,  38 => 19,  31 => 7,  28 => 3,);
    }
}
