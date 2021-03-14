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

/* wines/Components/footer.html.twig */
class __TwigTemplate_4446113b8ec73bd95d1c0c807345aee4f2606927eaa6dbe806a028c80ccfdc72 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wines/Components/footer.html.twig"));

        // line 1
        echo "<footer class=\"footer-section\">
        <div class=\"container\">
            <div class=\"footer-main-text\">
                <p>TROFEO ESTATE</p>
            </div>
            <div class=\"footer-content pt-5 pb-5\">
                <div class=\"row\">
                    <div class=\"col-xl-4 col-lg-4 col-xs-12 paddingBottom\">
                        <div class=\"footer-widget\">
                            <div class=\"footer-logo\">
                                <img src=\"../build/images/Group-7.png\" class=\"img-fluid\" alt=\"logo\">
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-4 col-md-6 col-xs-12 paddingBottom\">
                        <div class=\"footer-widget\">
                            <div class=\"footer-widget-heading\">
                            <img src=\"../build/images/Group-21.png\" class=\"img-fluid\" alt=\"logo\">
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-4 col-md-6 col-xs-12 paddingBottom\">
                        <div class=\"footer-widget\">
                            <div class=\"footer-widget-heading\">
                                <a class=\"btn btn-default bookEnquire\" href=\"#\" role=\"button\">Book A Enquire</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"copyright-area\">
            <div class=\"container\">
                    <div class=\"d-none d-lg-block text-center\">
                        <div class=\"footer-menu\">
                            <ul>
                                <li><a href=\"#\">Liquor Act 1982: It is an offence to sell or supply to or to obtain liquor on behalf of a person under age of 18 years.</a></li>
                                <li><a href=\"#\">Privacy Policy</a></li>
                                <li><a href=\"#\">Site by Evolution7</a></li>
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
    </footer>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "wines/Components/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer-section\">
        <div class=\"container\">
            <div class=\"footer-main-text\">
                <p>TROFEO ESTATE</p>
            </div>
            <div class=\"footer-content pt-5 pb-5\">
                <div class=\"row\">
                    <div class=\"col-xl-4 col-lg-4 col-xs-12 paddingBottom\">
                        <div class=\"footer-widget\">
                            <div class=\"footer-logo\">
                                <img src=\"../build/images/Group-7.png\" class=\"img-fluid\" alt=\"logo\">
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-4 col-md-6 col-xs-12 paddingBottom\">
                        <div class=\"footer-widget\">
                            <div class=\"footer-widget-heading\">
                            <img src=\"../build/images/Group-21.png\" class=\"img-fluid\" alt=\"logo\">
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-lg-4 col-md-6 col-xs-12 paddingBottom\">
                        <div class=\"footer-widget\">
                            <div class=\"footer-widget-heading\">
                                <a class=\"btn btn-default bookEnquire\" href=\"#\" role=\"button\">Book A Enquire</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"copyright-area\">
            <div class=\"container\">
                    <div class=\"d-none d-lg-block text-center\">
                        <div class=\"footer-menu\">
                            <ul>
                                <li><a href=\"#\">Liquor Act 1982: It is an offence to sell or supply to or to obtain liquor on behalf of a person under age of 18 years.</a></li>
                                <li><a href=\"#\">Privacy Policy</a></li>
                                <li><a href=\"#\">Site by Evolution7</a></li>
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
    </footer>", "wines/Components/footer.html.twig", "/Users/akshayaprakash/Desktop/frontend_test/app/templates/wines/Components/footer.html.twig");
    }
}
