<?php

/* js/jquery.cbpFWSlider.js */
class __TwigTemplate_72ba7a1e68bf5325d302f4406524c7b96688ad42a883c5de6bdf5b608fc4ea50 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "js/jquery.cbpFWSlider.js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "js/jquery.cbpFWSlider.js"));

        // line 1
        echo "/**
 * jquery.cbpFWSlider.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2013, Codrops
 * http://www.codrops.com
 */
;( function( \$, window, undefined ) {

\t'use strict';

\t// global
\tvar Modernizr = window.Modernizr;

\t\$.CBPFWSlider = function( options, element ) {
\t\tthis.\$el = \$( element );
\t\tthis._init( options );
\t};

\t// the options
\t\$.CBPFWSlider.defaults = {
\t\t// default transition speed (ms)
\t\tspeed : 500,
\t\t// default transition easing
\t\teasing : 'ease'
\t};

\t\$.CBPFWSlider.prototype = {
\t\t_init : function( options ) {
\t\t\t// options
\t\t\tthis.options = \$.extend( true, {}, \$.CBPFWSlider.defaults, options );
\t\t\t// cache some elements and initialize some variables
\t\t\tthis._config();
\t\t\t// initialize/bind the events
\t\t\tthis._initEvents();
\t\t},
\t\t_config : function() {

\t\t\t// the list of items
\t\t\tthis.\$list = this.\$el.children( 'ul' );
\t\t\t// the items (li elements)
\t\t\tthis.\$items = this.\$list.children( 'li' );
\t\t\t// total number of items
\t\t\tthis.itemsCount = this.\$items.length;
\t\t\t// support for CSS Transitions & transforms
\t\t\tthis.support = Modernizr.csstransitions && Modernizr.csstransforms;
\t\t\tthis.support3d = Modernizr.csstransforms3d;
\t\t\t// transition end event name and transform name
\t\t\t// transition end event name
\t\t\tvar transEndEventNames = {
\t\t\t\t\t'WebkitTransition' : 'webkitTransitionEnd',
\t\t\t\t\t'MozTransition' : 'transitionend',
\t\t\t\t\t'OTransition' : 'oTransitionEnd',
\t\t\t\t\t'msTransition' : 'MSTransitionEnd',
\t\t\t\t\t'transition' : 'transitionend'
\t\t\t\t},
\t\t\t\ttransformNames = {
\t\t\t\t\t'WebkitTransform' : '-webkit-transform',
\t\t\t\t\t'MozTransform' : '-moz-transform',
\t\t\t\t\t'OTransform' : '-o-transform',
\t\t\t\t\t'msTransform' : '-ms-transform',
\t\t\t\t\t'transform' : 'transform'
\t\t\t\t};

\t\t\tif( this.support ) {
\t\t\t\tthis.transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ] + '.cbpFWSlider';
\t\t\t\tthis.transformName = transformNames[ Modernizr.prefixed( 'transform' ) ];
\t\t\t}
\t\t\t// current and old item´s index
\t\t\tthis.current = 0;
\t\t\tthis.old = 0;
\t\t\t// check if the list is currently moving
\t\t\tthis.isAnimating = false;
\t\t\t// the list (ul) will have a width of 100% x itemsCount
\t\t\tthis.\$list.css( 'width', 100 * this.itemsCount + '%' );
\t\t\t// apply the transition
\t\t\tif( this.support ) {
\t\t\t\tthis.\$list.css( 'transition', this.transformName + ' ' + this.options.speed + 'ms ' + this.options.easing );
\t\t\t}
\t\t\t// each item will have a width of 100 / itemsCount
\t\t\tthis.\$items.css( 'width', 100 / this.itemsCount + '%' );
\t\t\t// add navigation arrows and the navigation dots if there is more than 1 item
\t\t\tif( this.itemsCount > 1 ) {

\t\t\t\t// add navigation arrows (the previous arrow is not shown initially):
\t\t\t\tthis.\$navPrev = \$( '<span class=\"cbp-fwprev\">&lt;</span>' ).hide();
\t\t\t\tthis.\$navNext = \$( '<span class=\"cbp-fwnext\">&gt;</span>' );
\t\t\t\t\$( '<nav/>' ).append( this.\$navPrev, this.\$navNext ).appendTo( this.\$el );
\t\t\t\t// add navigation dots
\t\t\t\tvar dots = '';
\t\t\t\tfor( var i = 0; i < this.itemsCount; ++i ) {
\t\t\t\t\t// current dot will have the class cbp-fwcurrent
\t\t\t\t\tvar dot = i === this.current ? '<span class=\"cbp-fwcurrent\"></span>' : '<span></span>';
\t\t\t\t\tdots += dot;
\t\t\t\t}
\t\t\t\tvar navDots = \$( '<div class=\"cbp-fwdots\"/>' ).append( dots ).appendTo( this.\$el );
\t\t\t\tthis.\$navDots = navDots.children( 'span' );

\t\t\t}

\t\t},
\t\t_initEvents : function() {
\t\t\t
\t\t\tvar self = this;
\t\t\tif( this.itemsCount > 1 ) {
\t\t\t\tthis.\$navPrev.on( 'click.cbpFWSlider', \$.proxy( this._navigate, this, 'previous' ) );
\t\t\t\tthis.\$navNext.on( 'click.cbpFWSlider', \$.proxy( this._navigate, this, 'next' ) );
\t\t\t\tthis.\$navDots.on( 'click.cbpFWSlider', function() { self._jump( \$( this ).index() ); } );
\t\t\t}

\t\t},
\t\t_navigate : function( direction ) {

\t\t\t// do nothing if the list is currently moving
\t\t\tif( this.isAnimating ) {
\t\t\t\treturn false;
\t\t\t}

\t\t\tthis.isAnimating = true;
\t\t\t// update old and current values
\t\t\tthis.old = this.current;
\t\t\tif( direction === 'next' && this.current < this.itemsCount - 1 ) {
\t\t\t\t++this.current;
\t\t\t}
\t\t\telse if( direction === 'previous' && this.current > 0 ) {
\t\t\t\t--this.current;
\t\t\t}
\t\t\t// slide
\t\t\tthis._slide();

\t\t},
\t\t_slide : function() {

\t\t\t// check which navigation arrows should be shown
\t\t\tthis._toggleNavControls();
\t\t\t// translate value
\t\t\tvar translateVal = -1 * this.current * 100 / this.itemsCount;
\t\t\tif( this.support ) {
\t\t\t\tthis.\$list.css( 'transform', this.support3d ? 'translate3d(' + translateVal + '%,0,0)' : 'translate(' + translateVal + '%)' );
\t\t\t}
\t\t\telse {
\t\t\t\tthis.\$list.css( 'margin-left', -1 * this.current * 100 + '%' );\t
\t\t\t}
\t\t\t
\t\t\tvar transitionendfn = \$.proxy( function() {
\t\t\t\tthis.isAnimating = false;
\t\t\t}, this );

\t\t\tif( this.support ) {
\t\t\t\tthis.\$list.on( this.transEndEventName, \$.proxy( transitionendfn, this ) );
\t\t\t}
\t\t\telse {
\t\t\t\ttransitionendfn.call();
\t\t\t}

\t\t},
\t\t_toggleNavControls : function() {

\t\t\t// if the current item is the first one in the list, the left arrow is not shown
\t\t\t// if the current item is the last one in the list, the right arrow is not shown
\t\t\tswitch( this.current ) {
\t\t\t\tcase 0 : this.\$navNext.show(); this.\$navPrev.hide(); break;
\t\t\t\tcase this.itemsCount - 1 : this.\$navNext.hide(); this.\$navPrev.show(); break;
\t\t\t\tdefault : this.\$navNext.show(); this.\$navPrev.show(); break;
\t\t\t}
\t\t\t// highlight navigation dot
\t\t\tthis.\$navDots.eq( this.old ).removeClass( 'cbp-fwcurrent' ).end().eq( this.current ).addClass( 'cbp-fwcurrent' );

\t\t},
\t\t_jump : function( position ) {

\t\t\t// do nothing if clicking on the current dot, or if the list is currently moving
\t\t\tif( position === this.current || this.isAnimating ) {
\t\t\t\treturn false;
\t\t\t}
\t\t\tthis.isAnimating = true;
\t\t\t// update old and current values
\t\t\tthis.old = this.current;
\t\t\tthis.current = position;
\t\t\t// slide
\t\t\tthis._slide();

\t\t},
\t\tdestroy : function() {

\t\t\tif( this.itemsCount > 1 ) {
\t\t\t\tthis.\$navPrev.parent().remove();
\t\t\t\tthis.\$navDots.parent().remove();
\t\t\t}
\t\t\tthis.\$list.css( 'width', 'auto' );
\t\t\tif( this.support ) {
\t\t\t\tthis.\$list.css( 'transition', 'none' );
\t\t\t}
\t\t\tthis.\$items.css( 'width', 'auto' );

\t\t}
\t};

\tvar logError = function( message ) {
\t\tif ( window.console ) {
\t\t\twindow.console.error( message );
\t\t}
\t};

\t\$.fn.cbpFWSlider = function( options ) {
\t\tif ( typeof options === 'string' ) {
\t\t\tvar args = Array.prototype.slice.call( arguments, 1 );
\t\t\tthis.each(function() {
\t\t\t\tvar instance = \$.data( this, 'cbpFWSlider' );
\t\t\t\tif ( !instance ) {
\t\t\t\t\tlogError( \"cannot call methods on cbpFWSlider prior to initialization; \" +
\t\t\t\t\t\"attempted to call method '\" + options + \"'\" );
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tif ( !\$.isFunction( instance[options] ) || options.charAt(0) === \"_\" ) {
\t\t\t\t\tlogError( \"no such method '\" + options + \"' for cbpFWSlider instance\" );
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tinstance[ options ].apply( instance, args );
\t\t\t});
\t\t} 
\t\telse {
\t\t\tthis.each(function() {\t
\t\t\t\tvar instance = \$.data( this, 'cbpFWSlider' );
\t\t\t\tif ( instance ) {
\t\t\t\t\tinstance._init();
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\tinstance = \$.data( this, 'cbpFWSlider', new \$.CBPFWSlider( options, this ) );
\t\t\t\t}
\t\t\t});
\t\t}
\t\treturn this;
\t};

} )( jQuery, window );";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "js/jquery.cbpFWSlider.js";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * jquery.cbpFWSlider.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2013, Codrops
 * http://www.codrops.com
 */
;( function( \$, window, undefined ) {

\t'use strict';

\t// global
\tvar Modernizr = window.Modernizr;

\t\$.CBPFWSlider = function( options, element ) {
\t\tthis.\$el = \$( element );
\t\tthis._init( options );
\t};

\t// the options
\t\$.CBPFWSlider.defaults = {
\t\t// default transition speed (ms)
\t\tspeed : 500,
\t\t// default transition easing
\t\teasing : 'ease'
\t};

\t\$.CBPFWSlider.prototype = {
\t\t_init : function( options ) {
\t\t\t// options
\t\t\tthis.options = \$.extend( true, {}, \$.CBPFWSlider.defaults, options );
\t\t\t// cache some elements and initialize some variables
\t\t\tthis._config();
\t\t\t// initialize/bind the events
\t\t\tthis._initEvents();
\t\t},
\t\t_config : function() {

\t\t\t// the list of items
\t\t\tthis.\$list = this.\$el.children( 'ul' );
\t\t\t// the items (li elements)
\t\t\tthis.\$items = this.\$list.children( 'li' );
\t\t\t// total number of items
\t\t\tthis.itemsCount = this.\$items.length;
\t\t\t// support for CSS Transitions & transforms
\t\t\tthis.support = Modernizr.csstransitions && Modernizr.csstransforms;
\t\t\tthis.support3d = Modernizr.csstransforms3d;
\t\t\t// transition end event name and transform name
\t\t\t// transition end event name
\t\t\tvar transEndEventNames = {
\t\t\t\t\t'WebkitTransition' : 'webkitTransitionEnd',
\t\t\t\t\t'MozTransition' : 'transitionend',
\t\t\t\t\t'OTransition' : 'oTransitionEnd',
\t\t\t\t\t'msTransition' : 'MSTransitionEnd',
\t\t\t\t\t'transition' : 'transitionend'
\t\t\t\t},
\t\t\t\ttransformNames = {
\t\t\t\t\t'WebkitTransform' : '-webkit-transform',
\t\t\t\t\t'MozTransform' : '-moz-transform',
\t\t\t\t\t'OTransform' : '-o-transform',
\t\t\t\t\t'msTransform' : '-ms-transform',
\t\t\t\t\t'transform' : 'transform'
\t\t\t\t};

\t\t\tif( this.support ) {
\t\t\t\tthis.transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ] + '.cbpFWSlider';
\t\t\t\tthis.transformName = transformNames[ Modernizr.prefixed( 'transform' ) ];
\t\t\t}
\t\t\t// current and old item´s index
\t\t\tthis.current = 0;
\t\t\tthis.old = 0;
\t\t\t// check if the list is currently moving
\t\t\tthis.isAnimating = false;
\t\t\t// the list (ul) will have a width of 100% x itemsCount
\t\t\tthis.\$list.css( 'width', 100 * this.itemsCount + '%' );
\t\t\t// apply the transition
\t\t\tif( this.support ) {
\t\t\t\tthis.\$list.css( 'transition', this.transformName + ' ' + this.options.speed + 'ms ' + this.options.easing );
\t\t\t}
\t\t\t// each item will have a width of 100 / itemsCount
\t\t\tthis.\$items.css( 'width', 100 / this.itemsCount + '%' );
\t\t\t// add navigation arrows and the navigation dots if there is more than 1 item
\t\t\tif( this.itemsCount > 1 ) {

\t\t\t\t// add navigation arrows (the previous arrow is not shown initially):
\t\t\t\tthis.\$navPrev = \$( '<span class=\"cbp-fwprev\">&lt;</span>' ).hide();
\t\t\t\tthis.\$navNext = \$( '<span class=\"cbp-fwnext\">&gt;</span>' );
\t\t\t\t\$( '<nav/>' ).append( this.\$navPrev, this.\$navNext ).appendTo( this.\$el );
\t\t\t\t// add navigation dots
\t\t\t\tvar dots = '';
\t\t\t\tfor( var i = 0; i < this.itemsCount; ++i ) {
\t\t\t\t\t// current dot will have the class cbp-fwcurrent
\t\t\t\t\tvar dot = i === this.current ? '<span class=\"cbp-fwcurrent\"></span>' : '<span></span>';
\t\t\t\t\tdots += dot;
\t\t\t\t}
\t\t\t\tvar navDots = \$( '<div class=\"cbp-fwdots\"/>' ).append( dots ).appendTo( this.\$el );
\t\t\t\tthis.\$navDots = navDots.children( 'span' );

\t\t\t}

\t\t},
\t\t_initEvents : function() {
\t\t\t
\t\t\tvar self = this;
\t\t\tif( this.itemsCount > 1 ) {
\t\t\t\tthis.\$navPrev.on( 'click.cbpFWSlider', \$.proxy( this._navigate, this, 'previous' ) );
\t\t\t\tthis.\$navNext.on( 'click.cbpFWSlider', \$.proxy( this._navigate, this, 'next' ) );
\t\t\t\tthis.\$navDots.on( 'click.cbpFWSlider', function() { self._jump( \$( this ).index() ); } );
\t\t\t}

\t\t},
\t\t_navigate : function( direction ) {

\t\t\t// do nothing if the list is currently moving
\t\t\tif( this.isAnimating ) {
\t\t\t\treturn false;
\t\t\t}

\t\t\tthis.isAnimating = true;
\t\t\t// update old and current values
\t\t\tthis.old = this.current;
\t\t\tif( direction === 'next' && this.current < this.itemsCount - 1 ) {
\t\t\t\t++this.current;
\t\t\t}
\t\t\telse if( direction === 'previous' && this.current > 0 ) {
\t\t\t\t--this.current;
\t\t\t}
\t\t\t// slide
\t\t\tthis._slide();

\t\t},
\t\t_slide : function() {

\t\t\t// check which navigation arrows should be shown
\t\t\tthis._toggleNavControls();
\t\t\t// translate value
\t\t\tvar translateVal = -1 * this.current * 100 / this.itemsCount;
\t\t\tif( this.support ) {
\t\t\t\tthis.\$list.css( 'transform', this.support3d ? 'translate3d(' + translateVal + '%,0,0)' : 'translate(' + translateVal + '%)' );
\t\t\t}
\t\t\telse {
\t\t\t\tthis.\$list.css( 'margin-left', -1 * this.current * 100 + '%' );\t
\t\t\t}
\t\t\t
\t\t\tvar transitionendfn = \$.proxy( function() {
\t\t\t\tthis.isAnimating = false;
\t\t\t}, this );

\t\t\tif( this.support ) {
\t\t\t\tthis.\$list.on( this.transEndEventName, \$.proxy( transitionendfn, this ) );
\t\t\t}
\t\t\telse {
\t\t\t\ttransitionendfn.call();
\t\t\t}

\t\t},
\t\t_toggleNavControls : function() {

\t\t\t// if the current item is the first one in the list, the left arrow is not shown
\t\t\t// if the current item is the last one in the list, the right arrow is not shown
\t\t\tswitch( this.current ) {
\t\t\t\tcase 0 : this.\$navNext.show(); this.\$navPrev.hide(); break;
\t\t\t\tcase this.itemsCount - 1 : this.\$navNext.hide(); this.\$navPrev.show(); break;
\t\t\t\tdefault : this.\$navNext.show(); this.\$navPrev.show(); break;
\t\t\t}
\t\t\t// highlight navigation dot
\t\t\tthis.\$navDots.eq( this.old ).removeClass( 'cbp-fwcurrent' ).end().eq( this.current ).addClass( 'cbp-fwcurrent' );

\t\t},
\t\t_jump : function( position ) {

\t\t\t// do nothing if clicking on the current dot, or if the list is currently moving
\t\t\tif( position === this.current || this.isAnimating ) {
\t\t\t\treturn false;
\t\t\t}
\t\t\tthis.isAnimating = true;
\t\t\t// update old and current values
\t\t\tthis.old = this.current;
\t\t\tthis.current = position;
\t\t\t// slide
\t\t\tthis._slide();

\t\t},
\t\tdestroy : function() {

\t\t\tif( this.itemsCount > 1 ) {
\t\t\t\tthis.\$navPrev.parent().remove();
\t\t\t\tthis.\$navDots.parent().remove();
\t\t\t}
\t\t\tthis.\$list.css( 'width', 'auto' );
\t\t\tif( this.support ) {
\t\t\t\tthis.\$list.css( 'transition', 'none' );
\t\t\t}
\t\t\tthis.\$items.css( 'width', 'auto' );

\t\t}
\t};

\tvar logError = function( message ) {
\t\tif ( window.console ) {
\t\t\twindow.console.error( message );
\t\t}
\t};

\t\$.fn.cbpFWSlider = function( options ) {
\t\tif ( typeof options === 'string' ) {
\t\t\tvar args = Array.prototype.slice.call( arguments, 1 );
\t\t\tthis.each(function() {
\t\t\t\tvar instance = \$.data( this, 'cbpFWSlider' );
\t\t\t\tif ( !instance ) {
\t\t\t\t\tlogError( \"cannot call methods on cbpFWSlider prior to initialization; \" +
\t\t\t\t\t\"attempted to call method '\" + options + \"'\" );
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tif ( !\$.isFunction( instance[options] ) || options.charAt(0) === \"_\" ) {
\t\t\t\t\tlogError( \"no such method '\" + options + \"' for cbpFWSlider instance\" );
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\tinstance[ options ].apply( instance, args );
\t\t\t});
\t\t} 
\t\telse {
\t\t\tthis.each(function() {\t
\t\t\t\tvar instance = \$.data( this, 'cbpFWSlider' );
\t\t\t\tif ( instance ) {
\t\t\t\t\tinstance._init();
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\tinstance = \$.data( this, 'cbpFWSlider', new \$.CBPFWSlider( options, this ) );
\t\t\t\t}
\t\t\t});
\t\t}
\t\treturn this;
\t};

} )( jQuery, window );", "js/jquery.cbpFWSlider.js", "C:\\Ampps\\www\\YonneAutos\\YonneAutosv1\\YonneAutos\\templates\\js\\jquery.cbpFWSlider.js");
    }
}
