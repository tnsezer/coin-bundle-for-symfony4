<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_d650e9fdda6b858f75e44870bb83960581e3af30bdd44bf77b0945bfe6e33141 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_862a72799c4f9402f1745ad506dde6d743adad7ce27dea1031b13911cdb13faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_862a72799c4f9402f1745ad506dde6d743adad7ce27dea1031b13911cdb13faf->enter($__internal_862a72799c4f9402f1745ad506dde6d743adad7ce27dea1031b13911cdb13faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_862a72799c4f9402f1745ad506dde6d743adad7ce27dea1031b13911cdb13faf->leave($__internal_862a72799c4f9402f1745ad506dde6d743adad7ce27dea1031b13911cdb13faf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_710b90768445269dda7aed6712443fb8cb3bb617f4f4d8600125c2b72994ce77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710b90768445269dda7aed6712443fb8cb3bb617f4f4d8600125c2b72994ce77->enter($__internal_710b90768445269dda7aed6712443fb8cb3bb617f4f4d8600125c2b72994ce77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_710b90768445269dda7aed6712443fb8cb3bb617f4f4d8600125c2b72994ce77->leave($__internal_710b90768445269dda7aed6712443fb8cb3bb617f4f4d8600125c2b72994ce77_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f1cca709867bd767ee25b5af809f59a419427b9699a9093161ae586688d6bdaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1cca709867bd767ee25b5af809f59a419427b9699a9093161ae586688d6bdaf->enter($__internal_f1cca709867bd767ee25b5af809f59a419427b9699a9093161ae586688d6bdaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f1cca709867bd767ee25b5af809f59a419427b9699a9093161ae586688d6bdaf->leave($__internal_f1cca709867bd767ee25b5af809f59a419427b9699a9093161ae586688d6bdaf_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c31666c2e2ce1b34be150ba4f876eb79eadd1b8bda44cd3ed727cebba8803d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c31666c2e2ce1b34be150ba4f876eb79eadd1b8bda44cd3ed727cebba8803d2d->enter($__internal_c31666c2e2ce1b34be150ba4f876eb79eadd1b8bda44cd3ed727cebba8803d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c31666c2e2ce1b34be150ba4f876eb79eadd1b8bda44cd3ed727cebba8803d2d->leave($__internal_c31666c2e2ce1b34be150ba4f876eb79eadd1b8bda44cd3ed727cebba8803d2d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 33,  108 => 10,  97 => 7,  85 => 34,  83 => 33,  73 => 26,  63 => 19,  56 => 15,  50 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/symfony/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
