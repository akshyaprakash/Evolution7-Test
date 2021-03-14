<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /wines/Components/card-section.html.twig */
class __TwigTemplate_d01dcdc751bb6a19fcc992e7b28911e8a79f3d68318be4d29b5b6a478a3ef339 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/wines/Components/card-section.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["wines"]) || array_key_exists("wines", $context) ? $context["wines"] : (function () { throw new RuntimeError('Variable "wines" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["wine"]) {
            // line 2
            echo "<div class=\"col-lg-4 col-md-6 col-sm-6 col-xs-12 card-center\">
    <div class=\"card\">
        <img
        src=\"../build/images/wM1Yq4UTyU2NOJM-Mw44Ig.png\"
        class=\"card-img-top\"
        alt=\"...\"
        />
        <div class=\"card-body\">
           <div class=\"container-fluid\">
                <h5 class=\"card-title\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["wine"], "title", [], "any", false, false, false, 11), "html", null, true);
            echo "</h5>
                <p>\$ ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["wine"], "price", [], "any", false, false, false, 12), "html", null, true);
            echo "</p>
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["wine"], "awards", [], "any", false, false, false, 13));
            foreach ($context['_seq'] as $context["_key"] => $context["award"]) {
                // line 14
                echo "                <p class=\"card-text\">
                ";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["award"], "event", [], "any", false, false, false, 15), "html", null, true);
                echo "
                </p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['award'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "            </div>
        </div>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/wines/Components/card-section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 18,  70 => 15,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  44 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for wine in wines %}
<div class=\"col-lg-4 col-md-6 col-sm-6 col-xs-12 card-center\">
    <div class=\"card\">
        <img
        src=\"../build/images/wM1Yq4UTyU2NOJM-Mw44Ig.png\"
        class=\"card-img-top\"
        alt=\"...\"
        />
        <div class=\"card-body\">
           <div class=\"container-fluid\">
                <h5 class=\"card-title\">{{wine.title}}</h5>
                <p>\$ {{wine.price}}</p>
                {% for award in wine.awards %}
                <p class=\"card-text\">
                {{award.event}}
                </p>
                {% endfor %}
            </div>
        </div>
    </div>
</div>
{% endfor %}", "/wines/Components/card-section.html.twig", "/Users/akshayaprakash/Desktop/frontend_test/app/templates/wines/Components/card-section.html.twig");
    }
}
