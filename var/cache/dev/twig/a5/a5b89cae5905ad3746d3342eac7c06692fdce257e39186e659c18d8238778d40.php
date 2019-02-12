<?php

/* base.html.twig */
class __TwigTemplate_c2ffbe718d4c7bbeed778fe163f7e7140d67058f48b89615f1e8cba23e0d60a2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'titre' => [$this, 'block_titre'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>        
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://bootswatch.com/4/flatly/bootstrap.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/app.css"), "html", null, true);
        echo "\">
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "
        <!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap-responsive.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/default.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/component.css\"> -->
        
    </head>
    <body>
\t\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
\t\t\t<a class=\"navbar-brand\" href=\"#\">YonneAutos</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t    \t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t\t    <ul class=\"navbar-nav mr-auto\">
\t\t\t        <li class=\"nav-item active\">
\t\t\t        \t<a class=\"nav-link\" href=\"/\">Accueil <span class=\"sr-only\">(current)</span></a>
\t\t\t        </li>
\t\t\t        <li class=\"nav-item\">
\t\t\t        \t<a class=\"nav-link\" href=\"nous-connaitre\">Qui sommes-nous</a>
\t\t\t        </li>
\t\t\t        <li class=\"nav-item\">
\t\t\t        \t<a class=\"nav-link\" href=\"nos-service\">Nos services</a>
\t\t\t        </li>
\t\t\t      <li class=\"nav-item\">
\t\t\t        <a class=\"nav-link\" href=\"contact\">Contact</a>
\t\t\t      </li>
\t\t\t       <li class=\"nav-item\" id=\"espace-membre\">
\t\t\t        <a class=\"nav-link\" href=\"espace-membre\">Espace Membre</a>
\t\t\t      </li>
\t\t\t    </ul>
\t\t\t    <form class=\"form-inline my-2 my-lg-0\">
\t\t\t      <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Faites votre choix\">
\t\t\t      <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Rappelez-moi</button>
\t\t\t    </form>
\t\t    </div>
\t\t</nav>
\t\t";
        // line 48
        echo "\t\t<div class=\"container\">
\t\t\t";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "\t\t</div>
        ";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "YonneAutos!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 51,  147 => 49,  130 => 9,  112 => 5,  100 => 52,  98 => 51,  95 => 50,  93 => 49,  90 => 48,  51 => 10,  49 => 9,  45 => 8,  39 => 5,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block titre %}YonneAutos!{% endblock %}</title>        
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://bootswatch.com/4/flatly/bootstrap.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('build/app.css') }}\">
        {% block stylesheets %}{% endblock %}

        <!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap-responsive.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/default.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/component.css\"> -->
        
    </head>
    <body>
\t\t<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
\t\t\t<a class=\"navbar-brand\" href=\"#\">YonneAutos</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t    \t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
\t\t\t    <ul class=\"navbar-nav mr-auto\">
\t\t\t        <li class=\"nav-item active\">
\t\t\t        \t<a class=\"nav-link\" href=\"/\">Accueil <span class=\"sr-only\">(current)</span></a>
\t\t\t        </li>
\t\t\t        <li class=\"nav-item\">
\t\t\t        \t<a class=\"nav-link\" href=\"nous-connaitre\">Qui sommes-nous</a>
\t\t\t        </li>
\t\t\t        <li class=\"nav-item\">
\t\t\t        \t<a class=\"nav-link\" href=\"nos-service\">Nos services</a>
\t\t\t        </li>
\t\t\t      <li class=\"nav-item\">
\t\t\t        <a class=\"nav-link\" href=\"contact\">Contact</a>
\t\t\t      </li>
\t\t\t       <li class=\"nav-item\" id=\"espace-membre\">
\t\t\t        <a class=\"nav-link\" href=\"espace-membre\">Espace Membre</a>
\t\t\t      </li>
\t\t\t    </ul>
\t\t\t    <form class=\"form-inline my-2 my-lg-0\">
\t\t\t      <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Faites votre choix\">
\t\t\t      <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Rappelez-moi</button>
\t\t\t    </form>
\t\t    </div>
\t\t</nav>
\t\t{# On indique le contenu de notre body  #}
\t\t<div class=\"container\">
\t\t\t{% block body %}{% endblock %}
\t\t</div>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Ampps\\www\\YonneAutos\\YonneAutosv1\\YonneAutos\\templates\\base.html.twig");
    }
}
