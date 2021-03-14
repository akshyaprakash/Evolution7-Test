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

/* wines/Components/header.html.twig */
class __TwigTemplate_c28518b4961124e255fed41cc061793a17177ae1fc51d9a91dc1b70222bda04f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wines/Components/header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar9\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
      </div>
      
      <div class=\"brand-centered\">
      <a class=\"navbar-brand\" href=\"#\"><img style=\"margin-right: 10px; padding: 0;\" src=\"../build/images/Trofeo-Estate-Logo.png\" alt=\"\" /></a>
      </div>
      
      <div id=\"navbar9\" class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav navbar-left\">
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> Food <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"#\">Our Range</a></li>
            <li><a href=\"#\">Our Vineyard</a></li>
            <li><a href=\"#\">Cellar Donor</a></li>
            <li><a href=\"#\">Teracotta</a></li>
            <li><a href=\"#\">Friends of Trofeo</a></li>
          </ul>
        </li>
          <li class=\"#\">
            <a href=\"#\">Wine</a>
          </li>
          <li><a href=\"#\">Weddings</a></li>
        </ul>
        <ul class=\"nav navbar-nav navbar-right\">
          <li class=\"#\"><a href=\"#\">Visit & Stay</a></li>
          <li><a href=\"#\">About</a></li>
          <li><a href=\"#\">Contact</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "wines/Components/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar9\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
      </div>
      
      <div class=\"brand-centered\">
      <a class=\"navbar-brand\" href=\"#\"><img style=\"margin-right: 10px; padding: 0;\" src=\"../build/images/Trofeo-Estate-Logo.png\" alt=\"\" /></a>
      </div>
      
      <div id=\"navbar9\" class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav navbar-left\">
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> Food <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"#\">Our Range</a></li>
            <li><a href=\"#\">Our Vineyard</a></li>
            <li><a href=\"#\">Cellar Donor</a></li>
            <li><a href=\"#\">Teracotta</a></li>
            <li><a href=\"#\">Friends of Trofeo</a></li>
          </ul>
        </li>
          <li class=\"#\">
            <a href=\"#\">Wine</a>
          </li>
          <li><a href=\"#\">Weddings</a></li>
        </ul>
        <ul class=\"nav navbar-nav navbar-right\">
          <li class=\"#\"><a href=\"#\">Visit & Stay</a></li>
          <li><a href=\"#\">About</a></li>
          <li><a href=\"#\">Contact</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>", "wines/Components/header.html.twig", "/Users/akshayaprakash/Desktop/frontend_test/app/templates/wines/Components/header.html.twig");
    }
}
