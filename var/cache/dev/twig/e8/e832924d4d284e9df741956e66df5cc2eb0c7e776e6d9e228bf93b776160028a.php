<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_3f9a1b77f59e8b56eabf7f0be1c86dfc4b06c1310b566768e655ef6e7cfcb956 extends Twig_Template
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
        $__internal_2734fc6393b5dc408b37f6b10070b7810117d9bc5dd6c5c514b3115078cdbabb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2734fc6393b5dc408b37f6b10070b7810117d9bc5dd6c5c514b3115078cdbabb->enter($__internal_2734fc6393b5dc408b37f6b10070b7810117d9bc5dd6c5c514b3115078cdbabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
<div class=\"container\">
    <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
        <div class=\"panel panel-info\" >
            <div class=\"panel-heading\">
                <div class=\"panel-title\">Sign In</div>
                <div style=\"float:right; font-size: 80%; position: relative; top:-10px\"><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">Forgot password?</a></div>
            </div>

            <div style=\"padding-top:30px\" class=\"panel-body\" >

                ";
        // line 13
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 13, $this->getSourceContext()); })())) {
            // line 14
            echo "                    <div id=\"login-alert\" class=\"alert alert-danger col-sm-12\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 14, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 14, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 16
        echo "
                <form method=\"post\" action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" id=\"loginform\" class=\"form-horizontal\" role=\"form\">
                    ";
        // line 18
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 18, $this->getSourceContext()); })())) {
            // line 19
            echo "                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
                    ";
        }
        // line 21
        echo "                    <div style=\"margin-bottom: 25px\" class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                        <input id=\"login-username\" type=\"text\" class=\"form-control\" name=\"_username\" required=\"required\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 23, $this->getSourceContext()); })()), "html", null, true);
        echo "\" placeholder=\"Username\">
                    </div>

                    <div style=\"margin-bottom: 25px\" class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                        <input id=\"login-password\" type=\"password\" class=\"form-control\" name=\"_password\" required=\"required\" placeholder=\"Password\">
                    </div>


                    <div style=\"margin-top:10px\" class=\"form-group\">
                        <!-- Button -->

                        <div class=\"col-sm-12 controls\">
                            <input type=\"submit\" id=\"btn-login\" class=\"btn btn-success\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />

                        </div>
                    </div>


                    <div class=\"form-group\">
                        <div class=\"col-md-12 control\">
                            <div style=\"border-top: 1px solid#888; padding-top:15px; font-size:85%\" >
                                Don't have an account!
                                <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">
                                    Sign Up Here
                                </a>
                            </div>
                        </div>
                    </div>
                </form>



            </div>
        </div>
    </div>
</div>";
        
        $__internal_2734fc6393b5dc408b37f6b10070b7810117d9bc5dd6c5c514b3115078cdbabb->leave($__internal_2734fc6393b5dc408b37f6b10070b7810117d9bc5dd6c5c514b3115078cdbabb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 46,  81 => 36,  65 => 23,  61 => 21,  55 => 19,  53 => 18,  49 => 17,  46 => 16,  40 => 14,  38 => 13,  30 => 8,  22 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"container\">
    <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
        <div class=\"panel panel-info\" >
            <div class=\"panel-heading\">
                <div class=\"panel-title\">Sign In</div>
                <div style=\"float:right; font-size: 80%; position: relative; top:-10px\"><a href=\"{{ path(\"fos_user_resetting_request\") }}\">Forgot password?</a></div>
            </div>

            <div style=\"padding-top:30px\" class=\"panel-body\" >

                {% if error %}
                    <div id=\"login-alert\" class=\"alert alert-danger col-sm-12\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}

                <form method=\"post\" action=\"{{ path(\"fos_user_security_check\") }}\" id=\"loginform\" class=\"form-horizontal\" role=\"form\">
                    {% if csrf_token %}
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                    {% endif %}
                    <div style=\"margin-bottom: 25px\" class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                        <input id=\"login-username\" type=\"text\" class=\"form-control\" name=\"_username\" required=\"required\" value=\"{{ last_username }}\" placeholder=\"Username\">
                    </div>

                    <div style=\"margin-bottom: 25px\" class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                        <input id=\"login-password\" type=\"password\" class=\"form-control\" name=\"_password\" required=\"required\" placeholder=\"Password\">
                    </div>


                    <div style=\"margin-top:10px\" class=\"form-group\">
                        <!-- Button -->

                        <div class=\"col-sm-12 controls\">
                            <input type=\"submit\" id=\"btn-login\" class=\"btn btn-success\" value=\"{{ 'security.login.submit'|trans }}\" />

                        </div>
                    </div>


                    <div class=\"form-group\">
                        <div class=\"col-md-12 control\">
                            <div style=\"border-top: 1px solid#888; padding-top:15px; font-size:85%\" >
                                Don't have an account!
                                <a href=\"{{ path(\"fos_user_registration_register\") }}\">
                                    Sign Up Here
                                </a>
                            </div>
                        </div>
                    </div>
                </form>



            </div>
        </div>
    </div>
</div>", "@FOSUser/Security/login_content.html.twig", "/home/symfony/templates/bundles/FOSUserBundle/Security/login_content.html.twig");
    }
}
