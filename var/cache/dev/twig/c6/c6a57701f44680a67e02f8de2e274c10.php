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

/* inc/navbar.html.twig */
class __TwigTemplate_1da9b35d3cf7a49da04194d2a02387a9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-sm navbar-dark bg-primary mb-3\">
\t<div class=\"container\">

\t\t<a href=\"/\" class=\"navbar-brand\">Nadhem BelHadj</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" datatoggle=\"collapse\" data-target=\"#mobile-nav\">
\t\t\t<span class=\"navbar-toggle-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"mobile-nav\">
\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"/\" class=\"nav-link\">Home</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_article");
        echo "\" class=\"nav-link\">Ajouter article</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_category");
        echo "\" class=\"nav-link\">Ajouter catégorie</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_par_cat");
        echo "\" class=\"nav-link\">Recherche par catégorie</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_par_prix");
        echo "\" class=\"nav-link\">Recherche par prix</a>
\t\t\t\t</li>

\t\t\t</ul>
\t\t</div>
\t</div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "inc/navbar.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  76 => 23,  70 => 20,  64 => 17,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-sm navbar-dark bg-primary mb-3\">
\t<div class=\"container\">

\t\t<a href=\"/\" class=\"navbar-brand\">Nadhem BelHadj</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" datatoggle=\"collapse\" data-target=\"#mobile-nav\">
\t\t\t<span class=\"navbar-toggle-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"mobile-nav\">
\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"/\" class=\"nav-link\">Home</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"{{ path('new_article')}}\" class=\"nav-link\">Ajouter article</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"{{ path('new_category')}}\" class=\"nav-link\">Ajouter catégorie</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"{{ path('article_par_cat')}}\" class=\"nav-link\">Recherche par catégorie</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"{{path('article_par_prix')}}\" class=\"nav-link\">Recherche par prix</a>
\t\t\t\t</li>

\t\t\t</ul>
\t\t</div>
\t</div>
</nav>
", "inc/navbar.html.twig", "C:\\xampp\\htdocs\\symfony\\my_project\\templates\\inc\\navbar.html.twig");
    }
}
