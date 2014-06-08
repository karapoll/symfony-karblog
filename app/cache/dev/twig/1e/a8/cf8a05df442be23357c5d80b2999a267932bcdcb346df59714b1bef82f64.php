<?php

/* TroiswaBlogBundle:Security:formcreateuser.html.twig */
class __TwigTemplate_1ea8cf8a05df442be23357c5d80b2999a267932bcdcb346df59714b1bef82f64 extends Twig_Template
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
        echo "    <!-- the comment box -->
    <div class=\"well\">
        <h1>Create a user</h1>
        <br>

        ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formUser"]) ? $context["formUser"] : $this->getContext($context, "formUser")), 'form_start', array("method" => "POST", "role" => "form"));
        echo "
        <div class=\"form-group\">
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : $this->getContext($context, "formUser")), "username"), 'label');
        echo "
            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : $this->getContext($context, "formUser")), "username"), 'widget', array("id" => "username", "attr" => array("placeholder" => "username", "class" => "form-control")));
        echo "
            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : $this->getContext($context, "formUser")), "username"), 'errors');
        echo "
            <br>

            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : $this->getContext($context, "formUser")), "password"), "first"), 'label');
        echo "
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : $this->getContext($context, "formUser")), "password"), "first"), 'widget', array("id" => "password", "attr" => array("placeholder" => "******", "class" => "form-control")));
        echo "
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : $this->getContext($context, "formUser")), "password"), "first"), 'errors');
        echo "
            <br>

            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : $this->getContext($context, "formUser")), "password"), "second"), 'label');
        echo "
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : $this->getContext($context, "formUser")), "password"), "second"), 'widget', array("id" => "password", "attr" => array("placeholder" => "******", "class" => "form-control")));
        echo "
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : $this->getContext($context, "formUser")), "password"), "second"), 'errors');
        echo "
            <br>
        </div>

        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUser"]) ? $context["formUser"] : $this->getContext($context, "formUser")), "Submit"), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

        ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formUser"]) ? $context["formUser"] : $this->getContext($context, "formUser")), 'form_end');
        echo "
    </div>

    ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 33
            echo "        <p class=\"alert alert-session\">";
            echo twig_escape_filter($this->env, (isset($context["flash"]) ? $context["flash"] : $this->getContext($context, "flash")), "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
    <hr>
";
    }

    public function getTemplateName()
    {
        return "TroiswaBlogBundle:Security:formcreateuser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 35,  101 => 33,  97 => 32,  91 => 29,  86 => 27,  79 => 23,  75 => 22,  71 => 21,  65 => 18,  61 => 17,  57 => 16,  51 => 13,  47 => 12,  43 => 11,  38 => 9,  31 => 4,  28 => 3,);
    }
}
