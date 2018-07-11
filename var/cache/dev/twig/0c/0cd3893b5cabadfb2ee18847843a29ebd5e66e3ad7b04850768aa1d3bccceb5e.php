<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_0eba027ae3308da5b53b274b4944a2f4137f02f07d345203bd17c5e2598d102c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fc8aec9a39a4faa7c77cba36158e8b4e7f0c8d3bca6c4f00da0aeccc4f58c73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fc8aec9a39a4faa7c77cba36158e8b4e7f0c8d3bca6c4f00da0aeccc4f58c73->enter($__internal_5fc8aec9a39a4faa7c77cba36158e8b4e7f0c8d3bca6c4f00da0aeccc4f58c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link href=\"/css/app.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
        <script type=\"text/javascript\" src=\"/scripts/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"/scripts/bootstrap.min.js\"></script>
        <script type=\"text/javascript\" src=\"/scripts/jwt-decode.min.js\"></script>
        <script type=\"text/javascript\" src=\"/scripts/app.js\"></script>
    </head>
    <body>
        <div>
            ";
        // line 16
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 17
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 17, $this->getSourceContext()); })()), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 22
            echo "
            ";
        }
        // line 24
        echo "        </div>

        ";
        // line 26
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 26, $this->getSourceContext()); })()), "request", array()), "hasPreviousSession", array())) {
            // line 27
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 27, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 28
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 29
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 30
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "        ";
        }
        // line 35
        echo "        <div>
            ";
        // line 36
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 38
        echo "        </div>
    </body>
</html>
";
        
        $__internal_5fc8aec9a39a4faa7c77cba36158e8b4e7f0c8d3bca6c4f00da0aeccc4f58c73->leave($__internal_5fc8aec9a39a4faa7c77cba36158e8b4e7f0c8d3bca6c4f00da0aeccc4f58c73_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4e082739ffd83bc40df567519fd4a34c6293236c0972f75824d33f3372e6d47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e082739ffd83bc40df567519fd4a34c6293236c0972f75824d33f3372e6d47->enter($__internal_b4e082739ffd83bc40df567519fd4a34c6293236c0972f75824d33f3372e6d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b4e082739ffd83bc40df567519fd4a34c6293236c0972f75824d33f3372e6d47->leave($__internal_b4e082739ffd83bc40df567519fd4a34c6293236c0972f75824d33f3372e6d47_prof);

    }

    // line 36
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a74b60e7ec96f694f3a79c8cd5704d2269827b15c76969f5a8312a0e19b91590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74b60e7ec96f694f3a79c8cd5704d2269827b15c76969f5a8312a0e19b91590->enter($__internal_a74b60e7ec96f694f3a79c8cd5704d2269827b15c76969f5a8312a0e19b91590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 37
        echo "            ";
        
        $__internal_a74b60e7ec96f694f3a79c8cd5704d2269827b15c76969f5a8312a0e19b91590->leave($__internal_a74b60e7ec96f694f3a79c8cd5704d2269827b15c76969f5a8312a0e19b91590_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 37,  131 => 36,  119 => 6,  109 => 38,  107 => 36,  104 => 35,  101 => 34,  95 => 33,  86 => 30,  81 => 29,  76 => 28,  71 => 27,  69 => 26,  65 => 24,  61 => 22,  55 => 19,  51 => 18,  46 => 17,  44 => 16,  31 => 6,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}Welcome!{% endblock %}</title>

        <link href=\"/css/app.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
        <script type=\"text/javascript\" src=\"/scripts/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"/scripts/bootstrap.min.js\"></script>
        <script type=\"text/javascript\" src=\"/scripts/jwt-decode.min.js\"></script>
        <script type=\"text/javascript\" src=\"/scripts/app.js\"></script>
    </head>
    <body>
        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}

            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}
        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </body>
</html>
", "@FOSUser/layout.html.twig", "/home/symfony/templates/bundles/FOSUserBundle/layout.html.twig");
    }
}
