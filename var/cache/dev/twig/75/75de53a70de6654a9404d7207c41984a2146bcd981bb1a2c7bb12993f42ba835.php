<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_afadbaac33e79424b727dd14d731d94c0e8e63519fe9c129fba059727e0a79a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56f89166026c09bdc1a0ea34f68eb121c2326526596410efe4a750d0df3f4f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f89166026c09bdc1a0ea34f68eb121c2326526596410efe4a750d0df3f4f58->enter($__internal_56f89166026c09bdc1a0ea34f68eb121c2326526596410efe4a750d0df3f4f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56f89166026c09bdc1a0ea34f68eb121c2326526596410efe4a750d0df3f4f58->leave($__internal_56f89166026c09bdc1a0ea34f68eb121c2326526596410efe4a750d0df3f4f58_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8cc4e8cf7c06c95324c886cfd08d12807eaf6e0befbc616078fc25bda679a61b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc4e8cf7c06c95324c886cfd08d12807eaf6e0befbc616078fc25bda679a61b->enter($__internal_8cc4e8cf7c06c95324c886cfd08d12807eaf6e0befbc616078fc25bda679a61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Security/login_content.html.twig", "@FOSUser/Security/login.html.twig", 4)->display($context);
        
        $__internal_8cc4e8cf7c06c95324c886cfd08d12807eaf6e0befbc616078fc25bda679a61b->leave($__internal_8cc4e8cf7c06c95324c886cfd08d12807eaf6e0befbc616078fc25bda679a61b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {% include \"@FOSUser/Security/login_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/symfony/templates/bundles/FOSUserBundle/Security/login.html.twig");
    }
}
