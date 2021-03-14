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
class __TwigTemplate_bab83e454ab3196f9a644ccd9c7af3562baf4366c7457f3c5a7b81d7f90577e4 extends Template
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
        echo "<div class=\"card\" style=\"width: 20rem\">
    <img
    src=\"./images/wM1Yq4UTyU2NOJM-Mw44Ig.png\"
    class=\"card-img-top\"
    alt=\"...\"
    />
    <div class=\"card-body\">
        <h5 class=\"card-title\">Card title</h5>
        <p class=\"card-text\">
            Some quick example text to build on the card title and make
            up the bulk of the card's content.
        </p>
        <a href=\"./product.html\" class=\"btn btn-primary colorOfButton\">Buy Now</a>
    </div>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/wines/Components/card-section.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\" style=\"width: 20rem\">
    <img
    src=\"./images/wM1Yq4UTyU2NOJM-Mw44Ig.png\"
    class=\"card-img-top\"
    alt=\"...\"
    />
    <div class=\"card-body\">
        <h5 class=\"card-title\">Card title</h5>
        <p class=\"card-text\">
            Some quick example text to build on the card title and make
            up the bulk of the card's content.
        </p>
        <a href=\"./product.html\" class=\"btn btn-primary colorOfButton\">Buy Now</a>
    </div>
</div>", "/wines/Components/card-section.html.twig", "/Users/akshayaprakash/Desktop/frontend_test/app/templates/wines/Components/card-section.html.twig");
    }
}
