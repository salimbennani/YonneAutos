<?php

/* css/default.css */
class __TwigTemplate_39c9b93abe104daa3099a4e9c3fa9a0326f56cb273d05d111a275f521b357ad3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "css/default.css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "css/default.css"));

        // line 1
        echo "/* General Demo Style */
@import url(http://fonts.googleapis.com/css?family=Lato:300,400,700);

@font-face {
\tfont-family: 'fontawesome';
\tsrc:url('../fonts/fontawesome.eot');
\tsrc:url('../fonts/fontawesome.eot?#iefix') format('embedded-opentype'),
\t\turl('../fonts/fontawesome.svg#fontawesome') format('svg'),
\t\turl('../fonts/fontawesome.woff') format('woff'),
\t\turl('../fonts/fontawesome.ttf') format('truetype');
\tfont-weight: normal;
\tfont-style: normal;
}

body, html { font-size: 100%; \tpadding: 0; margin: 0;}

/* Reset */
*,
*:after,
*:before {
\t-webkit-box-sizing: border-box;
\t-moz-box-sizing: border-box;
\tbox-sizing: border-box;
}

/* Clearfix hack by Nicolas Gallagher: http://nicolasgallagher.com/micro-clearfix-hack/ */
.clearfix:before,
.clearfix:after {
\tcontent: \" \";
\tdisplay: table;
}

.clearfix:after {
\tclear: both;
}

body {
    font-family: 'Lato', Calibri, Arial, sans-serif;
    color: #47a3da;

}

a {
\tcolor: #f0f0f0;
\ttext-decoration: none;
}

a:hover {
\tcolor: #000;
}

.main,
.container > header {
\twidth: 90%;
\tmax-width: 70em;
\tmargin: 0 auto;
\tpadding: 0 1.875em 3.125em 1.875em;
}

.container > header {
\tpadding: 2.875em 1.875em 1.875em;
}

.container > header h1 {
\tfont-size: 2.125em;
\tline-height: 1.3;
\tmargin: 0;
\tfloat: left;
\tfont-weight: 400;
}

.container > header span {
\tdisplay: block;
\tfont-weight: 700;
\ttext-transform: uppercase;
\tletter-spacing: 0.5em;
\tpadding: 0 0 0.6em 0.1em;
}

.container > header nav {
\tfloat: right;
}

.container > header nav a {
\tdisplay: block;
\tfloat: left;
\tposition: relative;
\twidth: 2.5em;
\theight: 2.5em;
\tbackground: #fff;
\tborder-radius: 50%;
\tcolor: transparent;
\tmargin: 0 0.1em;
\tborder: 4px solid #47a3da;
\ttext-indent: -8000px;
}

.container > header nav a:after {
\tcontent: attr(data-info);
\tcolor: #47a3da;
\tposition: absolute;
\twidth: 600%;
\ttop: 120%;
\ttext-align: right;
\tright: 0;
\topacity: 0;
\tpointer-events: none;
}

.container > header nav a:hover:after {
\topacity: 1;
}

.container > header nav a:hover {
\tbackground: #47a3da;
}

.icon-drop:before, 
.icon-arrow-left:before {
\tfont-family: 'fontawesome';
\tposition: absolute;
\ttop: 0;
\twidth: 100%;
\theight: 100%;
\tspeak: none;
\tfont-style: normal;
\tfont-weight: normal;
\tline-height: 2;
\ttext-align: center;
\tcolor: #47a3da;
\t-webkit-font-smoothing: antialiased;
\ttext-indent: 8000px;
\tpadding-left: 8px;
}

.container > header nav a:hover:before {
\tcolor: #fff;
}

.icon-drop:before {
\tcontent: \"\\e000\";
}

.icon-arrow-left:before {
\tcontent: \"\\f060\";
}

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "css/default.css";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* General Demo Style */
@import url(http://fonts.googleapis.com/css?family=Lato:300,400,700);

@font-face {
\tfont-family: 'fontawesome';
\tsrc:url('../fonts/fontawesome.eot');
\tsrc:url('../fonts/fontawesome.eot?#iefix') format('embedded-opentype'),
\t\turl('../fonts/fontawesome.svg#fontawesome') format('svg'),
\t\turl('../fonts/fontawesome.woff') format('woff'),
\t\turl('../fonts/fontawesome.ttf') format('truetype');
\tfont-weight: normal;
\tfont-style: normal;
}

body, html { font-size: 100%; \tpadding: 0; margin: 0;}

/* Reset */
*,
*:after,
*:before {
\t-webkit-box-sizing: border-box;
\t-moz-box-sizing: border-box;
\tbox-sizing: border-box;
}

/* Clearfix hack by Nicolas Gallagher: http://nicolasgallagher.com/micro-clearfix-hack/ */
.clearfix:before,
.clearfix:after {
\tcontent: \" \";
\tdisplay: table;
}

.clearfix:after {
\tclear: both;
}

body {
    font-family: 'Lato', Calibri, Arial, sans-serif;
    color: #47a3da;

}

a {
\tcolor: #f0f0f0;
\ttext-decoration: none;
}

a:hover {
\tcolor: #000;
}

.main,
.container > header {
\twidth: 90%;
\tmax-width: 70em;
\tmargin: 0 auto;
\tpadding: 0 1.875em 3.125em 1.875em;
}

.container > header {
\tpadding: 2.875em 1.875em 1.875em;
}

.container > header h1 {
\tfont-size: 2.125em;
\tline-height: 1.3;
\tmargin: 0;
\tfloat: left;
\tfont-weight: 400;
}

.container > header span {
\tdisplay: block;
\tfont-weight: 700;
\ttext-transform: uppercase;
\tletter-spacing: 0.5em;
\tpadding: 0 0 0.6em 0.1em;
}

.container > header nav {
\tfloat: right;
}

.container > header nav a {
\tdisplay: block;
\tfloat: left;
\tposition: relative;
\twidth: 2.5em;
\theight: 2.5em;
\tbackground: #fff;
\tborder-radius: 50%;
\tcolor: transparent;
\tmargin: 0 0.1em;
\tborder: 4px solid #47a3da;
\ttext-indent: -8000px;
}

.container > header nav a:after {
\tcontent: attr(data-info);
\tcolor: #47a3da;
\tposition: absolute;
\twidth: 600%;
\ttop: 120%;
\ttext-align: right;
\tright: 0;
\topacity: 0;
\tpointer-events: none;
}

.container > header nav a:hover:after {
\topacity: 1;
}

.container > header nav a:hover {
\tbackground: #47a3da;
}

.icon-drop:before, 
.icon-arrow-left:before {
\tfont-family: 'fontawesome';
\tposition: absolute;
\ttop: 0;
\twidth: 100%;
\theight: 100%;
\tspeak: none;
\tfont-style: normal;
\tfont-weight: normal;
\tline-height: 2;
\ttext-align: center;
\tcolor: #47a3da;
\t-webkit-font-smoothing: antialiased;
\ttext-indent: 8000px;
\tpadding-left: 8px;
}

.container > header nav a:hover:before {
\tcolor: #fff;
}

.icon-drop:before {
\tcontent: \"\\e000\";
}

.icon-arrow-left:before {
\tcontent: \"\\f060\";
}

", "css/default.css", "C:\\Ampps\\www\\YonneAutos\\YonneAutosv1\\YonneAutos\\templates\\css\\default.css");
    }
}
