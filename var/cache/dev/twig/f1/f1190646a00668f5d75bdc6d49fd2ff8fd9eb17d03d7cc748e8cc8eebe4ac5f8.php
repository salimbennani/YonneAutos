<?php

/* js/jquery.cbpFWSlider.min.js */
class __TwigTemplate_6db096a46b75935960bf1865cb747ca0581208391733c160cd2c201fa2cf52cf extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "js/jquery.cbpFWSlider.min.js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "js/jquery.cbpFWSlider.min.js"));

        // line 1
        echo "(function(c,b,e){var d=b.Modernizr;c.CBPFWSlider=function(f,g){this.\$el=c(g);this._init(f)};c.CBPFWSlider.defaults={speed:500,easing:\"ease\"};c.CBPFWSlider.prototype={_init:function(f){this.options=c.extend(true,{},c.CBPFWSlider.defaults,f);this._config();this._initEvents()},_config:function(){this.\$list=this.\$el.children(\"ul\");this.\$items=this.\$list.children(\"li\");this.itemsCount=this.\$items.length;this.support=d.csstransitions&&d.csstransforms;this.support3d=d.csstransforms3d;var h={WebkitTransition:\"webkitTransitionEnd\",MozTransition:\"transitionend\",OTransition:\"oTransitionEnd\",msTransition:\"MSTransitionEnd\",transition:\"transitionend\"},k={WebkitTransform:\"-webkit-transform\",MozTransform:\"-moz-transform\",OTransform:\"-o-transform\",msTransform:\"-ms-transform\",transform:\"transform\"};if(this.support){this.transEndEventName=h[d.prefixed(\"transition\")]+\".cbpFWSlider\";this.transformName=k[d.prefixed(\"transform\")]}this.current=0;this.old=0;this.isAnimating=false;this.\$list.css(\"width\",100*this.itemsCount+\"%\");if(this.support){this.\$list.css(\"transition\",this.transformName+\" \"+this.options.speed+\"ms \"+this.options.easing)}this.\$items.css(\"width\",100/this.itemsCount+\"%\");if(this.itemsCount>1){this.\$navPrev=c('<span class=\"cbp-fwprev\">&lt;</span>').hide();this.\$navNext=c('<span class=\"cbp-fwnext\">&gt;</span>');c(\"<nav/>\").append(this.\$navPrev,this.\$navNext).appendTo(this.\$el);var l=\"\";for(var g=0;g<this.itemsCount;++g){var f=g===this.current?'<span class=\"cbp-fwcurrent\"></span>':\"<span></span>\";l+=f}var j=c('<div class=\"cbp-fwdots\"/>').append(l).appendTo(this.\$el);this.\$navDots=j.children(\"span\")}},_initEvents:function(){var f=this;if(this.itemsCount>1){this.\$navPrev.on(\"click.cbpFWSlider\",c.proxy(this._navigate,this,\"previous\"));this.\$navNext.on(\"click.cbpFWSlider\",c.proxy(this._navigate,this,\"next\"));this.\$navDots.on(\"click.cbpFWSlider\",function(){f._jump(c(this).index())})}},_navigate:function(f){if(this.isAnimating){return false}this.isAnimating=true;this.old=this.current;if(f===\"next\"&&this.current<this.itemsCount-1){++this.current}else{if(f===\"previous\"&&this.current>0){--this.current}}this._slide()},_slide:function(){this._toggleNavControls();var g=-1*this.current*100/this.itemsCount;if(this.support){this.\$list.css(\"transform\",this.support3d?\"translate3d(\"+g+\"%,0,0)\":\"translate(\"+g+\"%)\")}else{this.\$list.css(\"margin-left\",-1*this.current*100+\"%\")}var f=c.proxy(function(){this.isAnimating=false},this);if(this.support){this.\$list.on(this.transEndEventName,c.proxy(f,this))}else{f.call()}},_toggleNavControls:function(){switch(this.current){case 0:this.\$navNext.show();this.\$navPrev.hide();break;case this.itemsCount-1:this.\$navNext.hide();this.\$navPrev.show();break;default:this.\$navNext.show();this.\$navPrev.show();break}this.\$navDots.eq(this.old).removeClass(\"cbp-fwcurrent\").end().eq(this.current).addClass(\"cbp-fwcurrent\")},_jump:function(f){if(f===this.current||this.isAnimating){return false}this.isAnimating=true;this.old=this.current;this.current=f;this._slide()},destroy:function(){if(this.itemsCount>1){this.\$navPrev.parent().remove();this.\$navDots.parent().remove()}this.\$list.css(\"width\",\"auto\");if(this.support){this.\$list.css(\"transition\",\"none\")}this.\$items.css(\"width\",\"auto\")}};var a=function(f){if(b.console){b.console.error(f)}};c.fn.cbpFWSlider=function(g){if(typeof g===\"string\"){var f=Array.prototype.slice.call(arguments,1);this.each(function(){var h=c.data(this,\"cbpFWSlider\");if(!h){a(\"cannot call methods on cbpFWSlider prior to initialization; attempted to call method '\"+g+\"'\");return}if(!c.isFunction(h[g])||g.charAt(0)===\"_\"){a(\"no such method '\"+g+\"' for cbpFWSlider instance\");return}h[g].apply(h,f)})}else{this.each(function(){var h=c.data(this,\"cbpFWSlider\");if(h){h._init()}else{h=c.data(this,\"cbpFWSlider\",new c.CBPFWSlider(g,this))}})}return this}})(jQuery,window);";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "js/jquery.cbpFWSlider.min.js";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("(function(c,b,e){var d=b.Modernizr;c.CBPFWSlider=function(f,g){this.\$el=c(g);this._init(f)};c.CBPFWSlider.defaults={speed:500,easing:\"ease\"};c.CBPFWSlider.prototype={_init:function(f){this.options=c.extend(true,{},c.CBPFWSlider.defaults,f);this._config();this._initEvents()},_config:function(){this.\$list=this.\$el.children(\"ul\");this.\$items=this.\$list.children(\"li\");this.itemsCount=this.\$items.length;this.support=d.csstransitions&&d.csstransforms;this.support3d=d.csstransforms3d;var h={WebkitTransition:\"webkitTransitionEnd\",MozTransition:\"transitionend\",OTransition:\"oTransitionEnd\",msTransition:\"MSTransitionEnd\",transition:\"transitionend\"},k={WebkitTransform:\"-webkit-transform\",MozTransform:\"-moz-transform\",OTransform:\"-o-transform\",msTransform:\"-ms-transform\",transform:\"transform\"};if(this.support){this.transEndEventName=h[d.prefixed(\"transition\")]+\".cbpFWSlider\";this.transformName=k[d.prefixed(\"transform\")]}this.current=0;this.old=0;this.isAnimating=false;this.\$list.css(\"width\",100*this.itemsCount+\"%\");if(this.support){this.\$list.css(\"transition\",this.transformName+\" \"+this.options.speed+\"ms \"+this.options.easing)}this.\$items.css(\"width\",100/this.itemsCount+\"%\");if(this.itemsCount>1){this.\$navPrev=c('<span class=\"cbp-fwprev\">&lt;</span>').hide();this.\$navNext=c('<span class=\"cbp-fwnext\">&gt;</span>');c(\"<nav/>\").append(this.\$navPrev,this.\$navNext).appendTo(this.\$el);var l=\"\";for(var g=0;g<this.itemsCount;++g){var f=g===this.current?'<span class=\"cbp-fwcurrent\"></span>':\"<span></span>\";l+=f}var j=c('<div class=\"cbp-fwdots\"/>').append(l).appendTo(this.\$el);this.\$navDots=j.children(\"span\")}},_initEvents:function(){var f=this;if(this.itemsCount>1){this.\$navPrev.on(\"click.cbpFWSlider\",c.proxy(this._navigate,this,\"previous\"));this.\$navNext.on(\"click.cbpFWSlider\",c.proxy(this._navigate,this,\"next\"));this.\$navDots.on(\"click.cbpFWSlider\",function(){f._jump(c(this).index())})}},_navigate:function(f){if(this.isAnimating){return false}this.isAnimating=true;this.old=this.current;if(f===\"next\"&&this.current<this.itemsCount-1){++this.current}else{if(f===\"previous\"&&this.current>0){--this.current}}this._slide()},_slide:function(){this._toggleNavControls();var g=-1*this.current*100/this.itemsCount;if(this.support){this.\$list.css(\"transform\",this.support3d?\"translate3d(\"+g+\"%,0,0)\":\"translate(\"+g+\"%)\")}else{this.\$list.css(\"margin-left\",-1*this.current*100+\"%\")}var f=c.proxy(function(){this.isAnimating=false},this);if(this.support){this.\$list.on(this.transEndEventName,c.proxy(f,this))}else{f.call()}},_toggleNavControls:function(){switch(this.current){case 0:this.\$navNext.show();this.\$navPrev.hide();break;case this.itemsCount-1:this.\$navNext.hide();this.\$navPrev.show();break;default:this.\$navNext.show();this.\$navPrev.show();break}this.\$navDots.eq(this.old).removeClass(\"cbp-fwcurrent\").end().eq(this.current).addClass(\"cbp-fwcurrent\")},_jump:function(f){if(f===this.current||this.isAnimating){return false}this.isAnimating=true;this.old=this.current;this.current=f;this._slide()},destroy:function(){if(this.itemsCount>1){this.\$navPrev.parent().remove();this.\$navDots.parent().remove()}this.\$list.css(\"width\",\"auto\");if(this.support){this.\$list.css(\"transition\",\"none\")}this.\$items.css(\"width\",\"auto\")}};var a=function(f){if(b.console){b.console.error(f)}};c.fn.cbpFWSlider=function(g){if(typeof g===\"string\"){var f=Array.prototype.slice.call(arguments,1);this.each(function(){var h=c.data(this,\"cbpFWSlider\");if(!h){a(\"cannot call methods on cbpFWSlider prior to initialization; attempted to call method '\"+g+\"'\");return}if(!c.isFunction(h[g])||g.charAt(0)===\"_\"){a(\"no such method '\"+g+\"' for cbpFWSlider instance\");return}h[g].apply(h,f)})}else{this.each(function(){var h=c.data(this,\"cbpFWSlider\");if(h){h._init()}else{h=c.data(this,\"cbpFWSlider\",new c.CBPFWSlider(g,this))}})}return this}})(jQuery,window);", "js/jquery.cbpFWSlider.min.js", "C:\\Ampps\\www\\YonneAutos\\YonneAutosv1\\YonneAutos\\templates\\js\\jquery.cbpFWSlider.min.js");
    }
}
