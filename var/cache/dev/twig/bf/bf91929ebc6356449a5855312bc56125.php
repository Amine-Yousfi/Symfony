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

/* author/list.html.twig */
class __TwigTemplate_a1c9b8614c658851fac1d1da1fb16c7e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/list.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<body>
<h1>Le nombre des auteurs est : ";
        // line 11
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["authors"]) || array_key_exists("authors", $context) ? $context["authors"] : (function () { throw new RuntimeError('Variable "authors" does not exist.', 11, $this->source); })())), "html", null, true);
        echo "</h1>
<table border=\"1\">
    <tr>
        <th>id</th>
        <th>picture</th>
        <th>username</th>
        <th>email</th>
        <th>nb_books</th>
        <th>Details</th>
    </tr>
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["authors"]) || array_key_exists("authors", $context) ? $context["authors"] : (function () { throw new RuntimeError('Variable "authors" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 22
            echo "        <tr>
    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
    <td><img src=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "picture", [], "any", false, false, false, 24), "html", null, true);
            echo "\"</td>
    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "username", [], "any", false, false, false, 25)), "html", null, true);
            echo "</td>
    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "email", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "nb_books", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_authorDetails", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">Detalis</td>
        </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "        <h1>Tableau Vide</h1>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</table>
";
        // line 34
        $context["nbTotal"] = 0;
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["authors"]) || array_key_exists("authors", $context) ? $context["authors"] : (function () { throw new RuntimeError('Variable "authors" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 36
            $context["nbTotal"] = ((isset($context["nbTotal"]) || array_key_exists("nbTotal", $context) ? $context["nbTotal"] : (function () { throw new RuntimeError('Variable "nbTotal" does not exist.', 36, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["a"], "nb_books", [], "any", false, false, false, 36));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "<p>Le nombre totale des livres de tous les auteurs est : ";
        echo twig_escape_filter($this->env, (isset($context["nbTotal"]) || array_key_exists("nbTotal", $context) ? $context["nbTotal"] : (function () { throw new RuntimeError('Variable "nbTotal" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "</p>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "author/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 38,  120 => 36,  116 => 35,  114 => 34,  111 => 33,  104 => 31,  96 => 28,  92 => 27,  88 => 26,  84 => 25,  80 => 24,  76 => 23,  73 => 22,  68 => 21,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<body>
<h1>Le nombre des auteurs est : {{ authors | length }}</h1>
<table border=\"1\">
    <tr>
        <th>id</th>
        <th>picture</th>
        <th>username</th>
        <th>email</th>
        <th>nb_books</th>
        <th>Details</th>
    </tr>
    {% for a in authors %}
        <tr>
    <td>{{ a.id }}</td>
    <td><img src=\"{{ a.picture }}\"</td>
    <td>{{ a.username | upper}}</td>
    <td>{{ a.email }}</td>
    <td>{{ a.nb_books}}</td>
            <td><a href=\"{{ path('app_authorDetails',{'id':a.id}) }}\">Detalis</td>
        </tr>
        {% else %}
        <h1>Tableau Vide</h1>
    {% endfor %}
</table>
{% set nbTotal=0 %}
{% for a in authors %}
{% set nbTotal=nbTotal+a.nb_books %}
{% endfor %}
<p>Le nombre totale des livres de tous les auteurs est : {{ nbTotal }}</p>
</body>
</html>", "author/list.html.twig", "C:\\Users\\MSI\\Desktop\\Test\\Test_Symfony\\templates\\author\\list.html.twig");
    }
}
