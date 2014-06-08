<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_c10d9779b82ba07a7157c78037e3f488c065b4e1cc9f83d3737c436b8640e269 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TroiswaBlogBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 8
        echo "
";
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "        ";
        $this->env->loadTemplate("TroiswaBlogBundle:Profile:show_content.html.twig")->display($context);
        // line 7
        echo "    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  45 => 6,  42 => 5,  37 => 8,  35 => 5,  32 => 4,  29 => 3,);
    }
}
