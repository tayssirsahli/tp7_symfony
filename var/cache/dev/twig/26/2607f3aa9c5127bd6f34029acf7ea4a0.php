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

/* articles/articlesParPrix.html.twig */
class __TwigTemplate_4d4eddd86a825f71b55e55fd8cb170f2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/articlesParPrix.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/articlesParPrix.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "articles/articlesParPrix.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\tListe des Articles par prix
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'form_start');
        echo "
\t<div class=\"form-row align-items-end\">
\t\t<div class=\"col\">
\t\t\t";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "minPrice", [], "any", false, false, false, 9), 'row');
        echo "
\t\t</div>
\t\t<div class=\"col\">
\t\t\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "maxPrice", [], "any", false, false, false, 12), 'row');
        echo "
\t\t</div>
\t\t<div class=\"col\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Rechercher</button>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_end');
        echo "
\t";
        // line 21
        if ((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 21, $this->source); })())) {
            // line 22
            echo "\t\t<table id=\"articles\" class=\"table table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t<th>Catégorie</th>
\t\t\t\t\t<th>Actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 32, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 33
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 36), "titre", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"/article/";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 38), "html", null, true);
                echo "\" class=\"btn btn-dark\">Détails</a>

\t\t\t\t\t\t\t<a href=\"/article/edit/";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 40), "html", null, true);
                echo "\" class=\"btn btn-dark\">Modifier</a>
\t\t\t\t\t\t\t<a href=\"/article/delete/";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 41), "html", null, true);
                echo "\" class=\"btn btn-danger\" onclick=\"return confirm('Etes vous sûr de supprimer cet article?');\">Supprimer</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t\t\t</tbody>
\t\t</table>
\t";
        } else {
            // line 48
            echo "\t\t<p>Aucun articles</p>
\t";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "articles/articlesParPrix.html.twig";
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
        return array (  176 => 48,  171 => 45,  161 => 41,  157 => 40,  152 => 38,  147 => 36,  143 => 35,  139 => 34,  136 => 33,  132 => 32,  120 => 22,  118 => 21,  114 => 20,  103 => 12,  97 => 9,  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title%}
\tListe des Articles par prix
{% endblock %}
{% block body %}
\t{{ form_start(form) }}
\t<div class=\"form-row align-items-end\">
\t\t<div class=\"col\">
\t\t\t{{ form_row(form.minPrice) }}
\t\t</div>
\t\t<div class=\"col\">
\t\t\t{{ form_row(form.maxPrice) }}
\t\t</div>
\t\t<div class=\"col\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-success\">Rechercher</button>
\t\t\t</div>
\t\t</div>
\t</div>
\t{{ form_end(form) }}
\t{% if articles %}
\t\t<table id=\"articles\" class=\"table table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t<th>Catégorie</th>
\t\t\t\t\t<th>Actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for article in articles %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ article.nom }}</td>
\t\t\t\t\t\t<td>{{ article.prix }}</td>
\t\t\t\t\t\t<td>{{ article.category.titre }}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"/article/{{ article.id }}\" class=\"btn btn-dark\">Détails</a>

\t\t\t\t\t\t\t<a href=\"/article/edit/{{ article.id }}\" class=\"btn btn-dark\">Modifier</a>
\t\t\t\t\t\t\t<a href=\"/article/delete/{{ article.id }}\" class=\"btn btn-danger\" onclick=\"return confirm('Etes vous sûr de supprimer cet article?');\">Supprimer</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t{% else %}
\t\t<p>Aucun articles</p>
\t{% endif %}
{% endblock %}
", "articles/articlesParPrix.html.twig", "C:\\xampp\\htdocs\\symfony\\my_project\\templates\\articles\\articlesParPrix.html.twig");
    }
}
