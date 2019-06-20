<?php

header ("Content-Type:text/css");

/** ===============================================================
 *
 *      Edit your Color Configurations below:
 *      You should only enter 6-Digits HEX Colors.
 *
 ================================================================== */

$color = "#1ABC9C"; // Change your Color Here

/** ===============================================================
 *
 *      Do not Edit anything below this line if you do not know
 *      what you are trying to do..!
 *
 ================================================================== */

function checkhexcolor($color) {

	return preg_match('/^#[a-f0-9]{6}$/i', $color);

}

/** ===============================================================
 *
 *      Primary Color Scheme
 *
 ================================================================== */

if( isset( $_GET[ 'color' ] ) AND $_GET[ 'color' ] != '' ) {
	$color = "#" . $_GET[ 'color' ];
}

if( !$color OR !checkhexcolor( $color ) ) {
	$color = "#1ABC9C";
}

?>


/* ----------------------------------------------------------------
	Colors

	Replace the HEX Code with your Desired Color HEX
-----------------------------------------------------------------*/


::selection { background: <?php echo $color; ?>; }

::-moz-selection { background: <?php echo $color; ?>; }

::-webkit-selection { background: <?php echo $color; ?>; }


a,
h1 > span:not(.nocolor),
h2 > span:not(.nocolor),
h3 > span:not(.nocolor),
h4 > span:not(.nocolor),
h5 > span:not(.nocolor),
h6 > span:not(.nocolor),
.header-extras li .he-text span,
#primary-menu ul li:hover > a,
#primary-menu ul li.current > a,
#primary-menu div ul li:hover > a,
#primary-menu div ul li.current > a,
#primary-menu ul ul li:hover > a,
#primary-menu ul li .mega-menu-content.style-2 ul.mega-menu-column > li.mega-menu-title > a:hover,
#top-cart > a:hover,
.top-cart-action span.top-checkout-price,
.breadcrumb a:hover,
.portfolio-filter li a:hover,
.portfolio-desc h3 a:hover,
.portfolio-overlay a:hover,
#portfolio-navigation a:hover,
.entry-title h2 a:hover,
.entry-meta li a:hover,
.post-timeline .entry:hover .entry-timeline,
.post-timeline .entry:hover .timeline-divider,
.ipost .entry-title h3 a:hover,
.ipost .entry-title h4 a:hover,
.spost .entry-title h4 a:hover,
.mpost .entry-title h4 a:hover,
.comment-content .comment-author a:hover,
.product-title h3 a:hover,
.single-product .product-title h2 a:hover,
.product-price ins,
.single-product .product-price,
.feature-box.fbox-border .fbox-icon i,
.feature-box.fbox-border .fbox-icon img,
.feature-box.fbox-plain .fbox-icon i,
.feature-box.fbox-plain .fbox-icon img,
.process-steps li.active h5,
.process-steps li.ui-tabs-active h5,
.team-title span,
.pricing-box.best-price .pricing-price,
.btn-link,
.pagination > li > a, .pagination > li > span,
.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus,
.dark .post-timeline .entry:hover .entry-timeline,
.dark .post-timeline .entry:hover .timeline-divider,
.clear-rating-active:hover { color: <?php echo $color; ?>; }

.color,
.top-cart-item-desc a:hover,
.portfolio-filter.style-3 li.activeFilter a,
.faqlist li a:hover,
.tagcloud a:hover,
.dark .top-cart-item-desc a:hover,
.iconlist-color li i,
.dark.overlay-menu #header-wrap:not(.not-dark) #primary-menu > ul > li:hover > a,
.dark.overlay-menu #header-wrap:not(.not-dark) #primary-menu > ul > li.current > a,
.overlay-menu #primary-menu.dark > ul > li:hover > a,
.overlay-menu #primary-menu.dark > ul > li.current > a,
.nav-tree li:hover > a,
.nav-tree li.current > a,
.nav-tree li.active > a { color: <?php echo $color; ?> !important; }

#primary-menu.style-3 > ul > li.current > a,
#primary-menu.sub-title > ul > li:hover > a,
#primary-menu.sub-title > ul > li.current > a,
#primary-menu.sub-title > div > ul > li:hover > a,
#primary-menu.sub-title > div > ul > li.current > a,
#top-cart > a > span,
#page-menu-wrap,
#page-menu ul ul,
#page-menu.dots-menu nav li.current a,
#page-menu.dots-menu nav li div,
.portfolio-filter li.activeFilter a,
.portfolio-filter.style-4 li.activeFilter a:after,
.portfolio-shuffle:hover,
.entry-link:hover,
.sale-flash,
.button:not(.button-white):not(.button-dark):not(.button-border):not(.button-black):not(.button-red):not(.button-teal):not(.button-yellow):not(.button-green):not(.button-brown):not(.button-aqua):not(.button-purple):not(.button-leaf):not(.button-pink):not(.button-blue):not(.button-dirtygreen):not(.button-amber):not(.button-lime),
.button.button-dark:hover,
.promo.promo-flat,
.feature-box .fbox-icon i,
.feature-box .fbox-icon img,
.fbox-effect.fbox-dark .fbox-icon i:hover,
.fbox-effect.fbox-dark:hover .fbox-icon i,
.fbox-border.fbox-effect.fbox-dark .fbox-icon i:after,
.i-rounded:hover,
.i-circled:hover,
ul.tab-nav.tab-nav2 li.ui-state-active a,
.testimonial .flex-control-nav li a,
.skills li .progress,
.owl-carousel .owl-dots .owl-dot span,
#gotoTop:hover,
.dark .button-dark:hover,
.dark .fbox-effect.fbox-dark .fbox-icon i:hover,
.dark .fbox-effect.fbox-dark:hover .fbox-icon i,
.dark .fbox-border.fbox-effect.fbox-dark .fbox-icon i:after,
.dark .i-rounded:hover,
.dark .i-circled:hover,
.dark ul.tab-nav.tab-nav2 li.ui-state-active a,
.dark .tagcloud a:hover,
.ei-slider-thumbs li.ei-slider-element,
.nav-pills > li.active > a,
.nav-pills > li.active > a:hover,
.nav-pills > li.active > a:focus,
.checkbox-style:checked + .checkbox-style-1-label:before,
.checkbox-style:checked + .checkbox-style-2-label:before,
.checkbox-style:checked + .checkbox-style-3-label:before,
.radio-style:checked + .radio-style-3-label:before,
.irs-bar,
.irs-from,
.irs-to,
.irs-single,
input.switch-toggle-flat:checked + label,
input.switch-toggle-flat:checked + label:after,
input.switch-toggle-round:checked + label:before,
.bootstrap-switch .bootstrap-switch-handle-on.bootstrap-switch-themecolor,
.bootstrap-switch .bootstrap-switch-handle-off.bootstrap-switch-themecolor { background-color: <?php echo $color; ?>; }

.bgcolor,
.button.button-3d:not(.button-white):not(.button-dark):not(.button-border):not(.button-black):not(.button-red):not(.button-teal):not(.button-yellow):not(.button-green):not(.button-brown):not(.button-aqua):not(.button-purple):not(.button-leaf):not(.button-pink):not(.button-blue):not(.button-dirtygreen):not(.button-amber):not(.button-lime):hover,
.process-steps li.active a,
.process-steps li.ui-tabs-active a,
.sidenav > .ui-tabs-active > a,
.sidenav > .ui-tabs-active > a:hover,
.owl-carousel .owl-nav [class*=owl-]:hover,
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus { background-color: <?php echo $color; ?> !important; }

#primary-menu.style-4 > ul > li:hover > a,
#primary-menu.style-4 > ul > li.current > a,
.top-cart-item-image:hover,
.portfolio-filter.style-3 li.activeFilter a,
.post-timeline .entry:hover .entry-timeline,
.post-timeline .entry:hover .timeline-divider,
.cart-product-thumbnail img:hover,
.feature-box.fbox-outline .fbox-icon,
.feature-box.fbox-border .fbox-icon,
.dark .top-cart-item-image:hover,
.dark .post-timeline .entry:hover .entry-timeline,
.dark .post-timeline .entry:hover .timeline-divider,
.dark .cart-product-thumbnail img:hover,
.heading-block.border-color:after { border-color: <?php echo $color; ?>; }

.top-links ul ul,
.top-links ul div.top-link-section,
#primary-menu ul ul:not(.mega-menu-column),
#primary-menu ul li .mega-menu-content,
#primary-menu.style-6 > ul > li > a:after,
#primary-menu.style-6 > ul > li.current > a:after,
#top-cart .top-cart-content,
.fancy-title.title-border-color:before,
.dark #primary-menu:not(.not-dark) ul ul,
.dark #primary-menu:not(.not-dark) ul li .mega-menu-content,
#primary-menu.dark ul ul,
#primary-menu.dark ul li .mega-menu-content,
.dark #primary-menu:not(.not-dark) ul li .mega-menu-content.style-2,
#primary-menu.dark ul li .mega-menu-content.style-2,
.dark #top-cart .top-cart-content,
.tabs.tabs-tb ul.tab-nav li.ui-tabs-active a,
.irs-from:after,
.irs-single:after,
.irs-to:after { border-top-color: <?php echo $color; ?>; }

#page-menu.dots-menu nav li div:after,
.title-block { border-left-color: <?php echo $color; ?>; }

.title-block-right { border-right-color: <?php echo $color; ?>; }

.fancy-title.title-bottom-border h1,
.fancy-title.title-bottom-border h2,
.fancy-title.title-bottom-border h3,
.fancy-title.title-bottom-border h4,
.fancy-title.title-bottom-border h5,
.fancy-title.title-bottom-border h6,
.more-link,
.tabs.tabs-bb ul.tab-nav li.ui-tabs-active a { border-bottom-color: <?php echo $color; ?>; }

.border-color,
.process-steps li.active a,
.process-steps li.ui-tabs-active a,
.tagcloud a:hover,
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus { border-color: <?php echo $color; ?> !important; }

.fbox-effect.fbox-dark .fbox-icon i:after,
.dark .fbox-effect.fbox-dark .fbox-icon i:after { box-shadow: 0 0 0 2px <?php echo $color; ?>; }

.fbox-border.fbox-effect.fbox-dark .fbox-icon i:hover,
.fbox-border.fbox-effect.fbox-dark:hover .fbox-icon i,
.dark .fbox-border.fbox-effect.fbox-dark .fbox-icon i:hover,
.dark .fbox-border.fbox-effect.fbox-dark:hover .fbox-icon i { box-shadow: 0 0 0 1px <?php echo $color; ?>; }


@media only screen and (max-width: 991px) {

	body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu > ul > li:hover a,
	body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu > ul > li.current a,
	body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu > div > ul > li:hover a,
	body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu > div > ul > li.current a,
	#primary-menu ul ul li:hover > a,
	#primary-menu ul li .mega-menu-content.style-2 > ul > li.mega-menu-title:hover > a,
	#primary-menu ul li .mega-menu-content.style-2 > ul > li.mega-menu-title > a:hover { color: <?php echo $color; ?> !important; }

	#page-menu nav { background-color: <?php echo $color; ?>; }

}


@media only screen and (max-width: 767px) {

	.portfolio-filter li a:hover { color: <?php echo $color; ?>; }
.}












/* ----------------------------------------------------------------
	Dark Scheme
-----------------------------------------------------------------*/


.dark,
.dark h1,
.dark h2,
.dark h3,
.dark h4,
.dark h5,
.dark h6 { color: #EEE; }

.dark a:hover { color: #EEE; }

body.dark,
.dark #wrapper,
.dark #content,
.dark .shop-quick-view-ajax,
.dark .portfolio-ajax-modal,
.dark .modal-content,
.dark .css3-spinner,
body.dark #side-panel,
body #side-panel.dark { background-color: #383838; }

.dark .css3-spinner > div,
.dark .css3-spinner-grid-pulse > div,
.dark .css3-spinner-ball-rotate > div,
.dark .css3-spinner-zig-zag > div,
.dark .css3-spinner-ball-scale-multiple > div,
.dark .css3-spinner-triangle-path > div,
.dark .css3-spinner-ball-pulse-sync > div { background-color: rgba(255,255,255,0.35); }


.dark .css3-spinner-clip-rotate > div,
.dark .css3-spinner-scale-ripple > div { border-color: rgba(255,255,255,0.35); }

.dark .line,
.dark .double-line { border-top-color: rgba(255,255,255,0.1); }

.dark .section,
.section.dark {
	background-color: #282828;
	border-color: rgba(255,255,255,0.1);
}

.dark #top-bar,
#top-bar.dark {
	border-bottom-color: rgba(255,255,255,0.1);
	background-color: #282828;
}

.dark .top-links ul li { border-left-color: rgba(255,255,255,0.1); }

.dark .top-links li > a { color: #AAA; }

.dark .top-links li:hover {
	background-color: <?php echo $color; ?>;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
}

.dark .top-links ul ul,
.dark .top-links ul div.top-link-section {
	background: <?php echo $color; ?>;
	border-bottom: none;
}

.dark .top-links ul ul li {
	border-top: 1px solid #444;
	border-left: 1px solid #444;
}

.dark .top-links ul ul li:hover { background-color: #383838; }

.dark .top-links ul ul li:first-child { border-left: 1px solid #444; }

.dark #top-social li { border-left: 1px solid rgba(255,255,255,0.1); }

.dark #top-social li a { color: #BBB; }

.dark #header:not(.transparent-header),
#header.dark:not(.transparent-header) {
	background-color: <?php echo $color; ?>;
	border-bottom: 1px solid rgba(255,255,255,0.05);
}

.dark #header.sticky-header:not(.transparent-header) #header-wrap:not(.not-dark),
.dark #header.sticky-header.transparent-header #header-wrap:not(.not-dark),
.dark #header.transparent-header.floating-header .container,
.dark #header.transparent-header.floating-header.sticky-header .container,
#header.dark.sticky-header:not(.transparent-header) #header-wrap:not(.not-dark),
#header.dark.sticky-header.transparent-header #header-wrap:not(.not-dark),
#header.dark.transparent-header.floating-header .container,
#header.dark.transparent-header.floating-header.sticky-header .container,
.dark .responsive-sticky-header #header-wrap,
.responsive-sticky-header.dark #header-wrap { background-color: <?php echo $color; ?>; }

.dark #header.full-header #header-wrap:not(.not-dark),
#header.full-header.dark #header-wrap:not(.not-dark) { border-bottom-color: rgba(255,255,255,0.15); }

.dark #slider + #header.full-header #header-wrap:not(.not-dark),
#slider + #header.full-header.dark #header-wrap:not(.not-dark) { border-top-color: rgba(255,255,255,0.15); }

.dark #header.transparent-header.full-header:not(.sticky-header) #header-wrap:not(.not-dark),
#header.transparent-header.full-header.dark:not(.sticky-header) #header-wrap:not(.not-dark) { border-bottom-color: rgba(255,255,255,0.2); }

.dark #slider + #header.transparent-header.full-header:not(.sticky-header) #header-wrap:not(.not-dark),
#slider + #header.transparent-header.full-header.dark:not(.sticky-header) #header-wrap:not(.not-dark) { border-top-color: rgba(255,255,255,0.2); }

.dark #header.semi-transparent,
.dark #header.semi-transparent.floating-header .container,
#header.dark.semi-transparent,
#header.dark.semi-transparent.floating-header .container { background-color: rgba(0,0,0,0.6); }

.dark #header.sticky-header.semi-transparent,
.dark #header.semi-transparent.floating-header,
.dark #header.semi-transparent.floating-header.sticky-header .container,
#header.dark.sticky-header.semi-transparent,
#header.dark.semi-transparent.floating-header,
#header.dark.semi-transparent.floating-header.sticky-header .container { background-color: transparent; }

.dark #header.semi-transparent.sticky-header #header-wrap,
#header.dark.semi-transparent.sticky-header #header-wrap { background-color: rgba(0,0,0,0.6); }

.dark #logo a { color: #FFF; }

.dark #header.full-header #header-wrap:not(.not-dark) #logo,
#header.full-header.dark #header-wrap:not(.not-dark) #logo { border-right-color: rgba(255,255,255,0.15); }

.dark #header.transparent-header.full-header:not(.sticky-header) #header-wrap:not(.not-dark) #logo,
#header.transparent-header.full-header.dark:not(.sticky-header) #header-wrap:not(.not-dark) #logo { border-right-color: rgba(255,255,255,0.2); }


.dark #header-wrap:not(.not-dark) #primary-menu > ul > li > a,
.dark #header-wrap:not(.not-dark) #primary-menu > .container > ul > li > a,
.dark.overlay-menu #header-wrap:not(.not-dark) #primary-menu > ul > li > a,
.overlay-menu #primary-menu.dark > ul > li > a,
.dark.overlay-menu #header-wrap:not(.not-dark) #primary-menu > #overlay-menu-close,
.overlay-menu #primary-menu.dark > #overlay-menu-close,
.dark #header-wrap:not(.not-dark) #top-search a,
.dark #header-wrap:not(.not-dark) #top-cart a,
.dark #header-wrap:not(.not-dark) #side-panel-trigger a,
.dark #header-wrap:not(.not-dark) #top-account a,
.dark #top-cart .top-cart-item-desc a,
body.top-search-open .dark #header-wrap:not(.not-dark) #top-search a,
.dark #header-wrap:not(.not-dark) #top-search a:hover,
.dark #header-wrap:not(.not-dark) #top-cart a:hover,
.dark #header-wrap:not(.not-dark) #side-panel-trigger a:hover,
.dark #header-wrap:not(.not-dark) #top-account a:hover,
.dark #header-wrap:not(.not-dark) #top-search form input {
	color: #EEE;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.1);
}

.dark #header.full-header #header-wrap:not(.not-dark) #primary-menu > ul,
#header.full-header.dark #header-wrap:not(.not-dark) #primary-menu > ul { border-right-color: rgba(255,255,255,0.15); }

.dark #header.transparent-header.full-header:not(.sticky-header) #header-wrap:not(.not-dark) #primary-menu > ul,
#header.transparent-header.full-header.dark:not(.sticky-header) #header-wrap:not(.not-dark) #primary-menu > ul { border-right-color: rgba(255,255,255,0.2); }

.dark #header.transparent-header:not(.sticky-header) #header-wrap:not(.not-dark) form input,
#header.dark.transparent-header:not(.sticky-header) #header-wrap:not(.not-dark) form input { border-bottom-color: rgba(255,255,255,0.15) !important; }

.dark #header-wrap:not(.not-dark) #top-search form input::-moz-placeholder { color: rgba(255,255,255,0.6); }
.dark #header-wrap:not(.not-dark) #top-search form input:-ms-input-placeholder { color: rgba(255,255,255,0.6); }
.dark #header-wrap:not(.not-dark) #top-search form input::-webkit-input-placeholder { color: rgba(255,255,255,0.6); }

.dark #header-wrap:not(.not-dark) #primary-menu > ul > li:hover > a,
.dark #header-wrap:not(.not-dark) #primary-menu > ul > li.current > a,
.dark #header-wrap:not(.not-dark) #primary-menu > .container > ul > li:hover > a,
.dark #header-wrap:not(.not-dark) #primary-menu > .container > ul > li.current > a { color: #EEE; }

.dark.overlay-menu #header-wrap:not(.not-dark) #primary-menu > ul > li:hover > a,
.dark.overlay-menu #header-wrap:not(.not-dark) #primary-menu > ul > li.current > a,
.overlay-menu #primary-menu.dark > ul > li:hover > a,
.overlay-menu #primary-menu.dark > ul > li.current > a { color: #1ABC9C !important; }

.dark #primary-menu:not(.not-dark) ul ul,
.dark #primary-menu:not(.not-dark) ul li .mega-menu-content,
#primary-menu.dark ul ul,
#primary-menu.dark ul li .mega-menu-content {
	background-color: <?php echo $color; ?>;
	border-color: #3F3F3F;
	border-top-color: #1ABC9C;
}

.dark.overlay-menu #primary-menu:not(.not-dark) ul,
.dark.overlay-menu #primary-menu:not(.not-dark) ul,
.overlay-menu #primary-menu.dark ul,
.overlay-menu #primary-menu.dark ul { background-color: rgba(0,0,0,0.9); }

.dark #primary-menu:not(.not-dark) ul li .mega-menu-content.style-2,
#primary-menu.dark ul li .mega-menu-content.style-2 {
	border-color: transparent;
	border-top-color: #1ABC9C;
}

.dark #primary-menu:not(.not-dark) ul ul li,
#primary-menu.dark ul ul li { border-top-color: #3F3F3F; }

.dark #primary-menu:not(.not-dark) ul ul li:first-child,
#primary-menu.dark ul ul li:first-child { border-top: 0; }

.dark #primary-menu:not(.not-dark) ul ul li > a,
#primary-menu.dark ul ul li > a { color: #fff !important; }

.dark #primary-menu:not(.not-dark) ul ul li:hover > a,
#primary-menu.dark ul ul li:hover > a {
	background-color: rgba(0,0,0,0.1);
	color: #CCC !important;
}

.dark #primary-menu:not(.not-dark) ul ul > li.sub-menu > a,
.dark #primary-menu:not(.not-dark) ul ul > li.sub-menu:hover > a,
#primary-menu.dark ul ul > li.sub-menu > a,
#primary-menu.dark ul ul > li.sub-menu:hover > a { background-image: url("../images/icons/submenu-dark.png"); }

.dark #primary-menu ul li .mega-menu-content ul.mega-menu-column:not(:first-child),
#primary-menu.dark ul li .mega-menu-content ul.mega-menu-column:not(:first-child) { border-left-color: #3F3F3F; }

.dark #primary-menu:not(.not-dark) ul li .mega-menu-content.style-2 ul.mega-menu-column > li.mega-menu-title > a,
.dark #primary-menu:not(.not-dark) ul li .mega-menu-content.style-2 ul.mega-menu-column > li.mega-menu-title:hover > a,
#primary-menu.dark ul li .mega-menu-content.style-2 ul.mega-menu-column > li.mega-menu-title > a,
#primary-menu.dark ul li .mega-menu-content.style-2 ul.mega-menu-column > li.mega-menu-title:hover > a {
	color: #BBB !important;
	background: transparent;
}

.dark #primary-menu:not(.not-dark) ul li .mega-menu-content.style-2 ul.mega-menu-column > li.mega-menu-title > a:hover,
#primary-menu.dark ul li .mega-menu-content.style-2 ul.mega-menu-column > li.mega-menu-title > a:hover { color: #DDD !important; }


.dark #primary-menu.style-2:not(.not-dark) { border-top-color: rgba(255,255,255,0.1); }

.dark #primary-menu.style-3:not(.not-dark) > ul > li:hover > a,
#primary-menu.dark.style-3 > ul > li:hover > a {
	color: #EEE;
	background-color: rgba(255,255,255,0.05);
}

.dark #primary-menu.style-3:not(.not-dark) > ul > li.current > a,
#primary-menu.dark.style-3 > ul > li.current > a { color: #EEE; }

.dark #primary-menu.style-5:not(.not-dark) > ul,
#primary-menu.dark.style-5 > ul { border-right-color: rgba(255,255,255,0.1); }

.dark #primary-menu.sub-title:not(.not-dark) > ul > li > a span,
#primary-menu.dark.sub-title > ul > li > a span { color: #999; }

.dark #primary-menu.sub-title:not(.not-dark) > ul > li:hover > a span,
.dark #primary-menu.sub-title:not(.not-dark) > ul > li.current > a span,
.dark #primary-menu.sub-title.style-2:not(.not-dark) > div > ul > li:hover > a span,
.dark #primary-menu.sub-title.style-2:not(.not-dark) > div > ul > li.current > a span,
#primary-menu.dark.sub-title > ul > li:hover > a span,
#primary-menu.dark.sub-title > ul > li.current > a span,
#primary-menu.dark.sub-title.style-2 > div > ul > li:hover > a span,
#primary-menu.dark.sub-title.style-2 > div > ul > li.current > a span { color: #EEE; }


.dark #top-cart .top-cart-content {
	background-color: <?php echo $color; ?>;
	border-color: #3F3F3F;
	border-top-color: #1ABC9C;
}

.dark .top-cart-title { border-bottom-color: #3F3F3F; }

.dark .top-cart-item { border-top-color: #3F3F3F; }

.dark .top-cart-item-image { border-color: #444; }

.dark .top-cart-item-image:hover { border-color: #1ABC9C; }

.dark .top-cart-item-desc a:hover { color: #1ABC9C !important; }

.dark .top-cart-item-desc span.top-cart-item-price { color: #AAA; }

.dark .top-cart-item-desc span.top-cart-item-quantity { color: #888; }

.dark .top-cart-action { border-top-color: #3F3F3F; }

.dark .one-page-arrow,
.one-page-arrow.dark { color: #FFF; }


.dark.side-header #header {
	background-color: <?php echo $color; ?>;
	border-right-color: #3F3F3F;
}

.dark.side-header #logo:not(.nobottomborder):after,
.dark.side-header #primary-menu:not(.nobottomborder):after { border-bottom-color: #3F3F3F; }

.dark.side-header #primary-menu:not(.not-dark) > ul > li > a,
.dark.side-header #primary-menu ul ul li:hover > a { color: #DDD !important; }

.dark.side-header.open-header #header-trigger {
	background-color: rgba(0,0,0,0.3);
	color: #EEE;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.1);
}

.dark.side-header.side-header-right #header { border-left-color: #3F3F3F; }

.dark.side-header #primary-menu ul ul a { color: #AAA !important; }

.dark .swiper-pagination span { border-color: rgba(255,255,255,0.08); }

.dark .swiper-pagination span:hover,
.dark .swiper-pagination span.swiper-pagination-bullet-active { background-color: <?php echo $color; ?> !important; }


.dark .slider-caption,
.dark .slider-caption h2 {
	color: #EEE;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.15);
}

.not-dark .slider-caption,
.not-dark .slider-caption h2 {
	color: #222;
	text-shadow: none;
}

.dark .ei-title h2,
.dark .ei-title h3,
.dark .ei-title h2 span,
.dark .ei-title h3 span {
	color: #EEE !important;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.15);
}

.not-dark .ei-title h2,
.not-dark .ei-title h3,
.not-dark .ei-title h2 span,
.not-dark .ei-title h3 span {
	color: #222 !important;
	text-shadow: none;
}

.dark #page-title {
	background-color: #282828;
	border-bottom-color: #3F3F3F;
}

.dark #page-title h1 { color: rgba(255,255,255,0.9) !important; }

.dark #page-title span { color: rgba(255,255,255,0.7); }

.dark .breadcrumb a { color: #BBB; }

.dark .breadcrumb a:hover { color: #EEE; }

.dark #page-title.page-title-pattern { background-image: url('../images/pattern2.png'); }


.dark .portfolio-filter { border-color: rgba(255,255,255,0.08); }

.dark .portfolio-filter li a {
	color: #999;
	border-left-color: rgba(255,255,255,0.08);
}

.dark .portfolio-filter li a:hover { color: #EEE; }

.dark .portfolio-shuffle {
	color: #999;
	border-color: rgba(255,255,255,0.08);
}

.dark .portfolio-filter li.activeFilter a,
.dark .portfolio-shuffle:hover { color: #FFF; }

.dark .portfolio-desc h3 a { color: #EEE; }

.dark .portfolio-desc h3 a:hover { color: #BBB; }

.dark .portfolio-desc span { color: #888; }

.dark .portfolio-desc span a { color: #888; }

.dark .portfolio-desc span a:hover { color: #CCC; }

.dark .portfolio-notitle .portfolio-desc {
	background-color: <?php echo $color; ?>;
	border-bottom: 1px solid rgba(255,255,255,0.08);
}

.dark .portfolio-1 .portfolio-item { border-bottom-color: rgba(255,255,255,0.08); }

.dark .portfolio-1.portfolio-fullwidth .portfolio-desc { background-color: <?php echo $color; ?>; }

.dark .portfolio-overlay a {
	background-color: rgba(0,0,0,0.5);
	color: #FFF;
}

.dark .portfolio-overlay a:hover { background-color: rgba(0,0,0,0.7); }

.dark .ajax-modal-title {
	background-color: <?php echo $color; ?>;
	border-bottom-color: rgba(255,255,255,0.08);
}

.dark .portfolio-meta li { color: #999; }

.dark .portfolio-meta li span { color: #BBB; }

.dark .well .line { border-color: rgba(255,255,255,0.08); }

.dark #portfolio-navigation a { color: #BBB; }

.dark #portfolio-navigation a:hover { color: #EEE; }

.dark .entry { border-bottom-color: rgba(255,255,255,0.08); }

.dark .entry-title h2 a,
.dark .ipost .entry-title h3 a,
.dark .ipost .entry-title h4 a { color: #EEE; }

.dark .entry-title h2 a:hover,
.dark .ipost .entry-title h3 a:hover,
.dark .ipost .entry-title h4 a:hover { color: #BBB; }

.dark .entry-meta li {
	border-left-color: rgba(255,255,255,0.08);
	color: #888;
}

.dark .entry-meta li a { color: #888; }

.dark .entry-meta li a:hover { color: #CCC; }

.dark .entry-link { background-color: rgba(0,0,0,0.2); }

.dark .post-masonry-full .entry { border-color: rgba(255,255,255,0.08); }

.dark .timeline-border { border-left-color: rgba(255,255,255,0.1); }

.dark .post-timeline .entry-timeline {
	border-color: rgba(255,255,255,0.1);
	background-color: rgba(255,255,255,0.08);
	color: #AAA;
}

.dark .post-timeline .entry.entry-date-section span {
	border-color: rgba(255,255,255,0.1);
	background-color: <?php echo $color; ?>;
}

.dark .post-timeline .entry-timeline div.timeline-divider { border-top-color: rgba(255,255,255,0.1); }

.dark .post-timeline .entry:hover .entry-timeline,
.dark .post-timeline .entry:hover .timeline-divider {
	border-color: #1ABC9C;
	color: #1ABC9C;
}

.dark .spost,
.dark .mpost { border-top-color: rgba(255,255,255,0.1); }

.dark .spost .entry-image a i,
.dark .mpost .entry-image a i {
	color: #CCC;
	background-color: rgba(0,0,0,0.2);
}

.dark .spost .entry-title h4 a,
.dark .mpost .entry-title h4 a { color: #BBB; }

.dark .spost .entry-title h4 a:hover,
.dark .mpost .entry-title h4 a:hover { color: #999; }

.dark .spost .entry-meta li,
.dark .mpost .entry-meta li { border-left-color: #666; }

.dark .spost .entry-meta li a,
.dark .mpost .entry-meta li a,
.dark .testimonial.twitter-scroll .testi-meta span a { color: #AAA; }

.dark .spost .entry-meta li a:hover,
.dark .mpost .entry-meta li a:hover,
.dark .testimonial.twitter-scroll .testi-meta span a:hover { color: #888; }

.dark #comments { border-top-color: rgba(255,255,255,0.08); }

.dark .commentlist { border-bottom-color: rgba(255,255,255,0.08); }

.dark .comment-wrap { border-color: rgba(255,255,255,0.08); }

.dark .comment-avatar {
	background: rgba(255,255,255,0.08);
	border-color: rgba(255,255,255,0.1);
}

.dark .comment-content .comment-author { color: #CCC; }

.dark .comment-content .comment-author a { color: #BBB; }

.dark .comment-content .comment-author a:hover { color: #EEE; }

.dark .review-comment-ratings { color: #CCC; }

.dark .comment-reply-link:hover { color: #888; }

.dark p.wp-caption-text { background-color: rgba(0,0,0,0.2); }


.dark .product-title h3 a,
.dark .single-product .product-title h2 a { color: #EEE; }

.dark .product-title h3 a:hover,
.dark .single-product .product-title h2 a:hover { color: #BBB; }

.dark .product-price { color: #BBB; }

.dark .product-overlay a {
	color: #EEE;
	background-color: rgba(0,0,0,0.8);
	border-right-color: rgba(255,255,255,0.15);
}

.dark .product-overlay a:last-child { border-right: 0; }

.dark .product-overlay a:hover { background-color: rgba(0,0,0,0.9); }

.dark .bothsidebar .product-1 .product { border-top-color: rgba(255,255,255,0.08); }


.dark .quantity .qty {
	border-left-color: rgba(255,255,255,0.08);
	border-right-color: rgba(255,255,255,0.08);
	background-color: rgba(0,0,0,0.2);
}

.dark .quantity .plus,
.dark .quantity .minus { background-color: rgba(0,0,0,0.2); }

.dark .quantity .plus:hover,
.dark .quantity .minus:hover { background-color: rgba(0,0,0,0.4); }

.dark .product-meta { color: #888; }

.dark .cart .remove { color: #BBB; }

.dark .cart .remove:hover { color: #EEE; }

.dark .cart th { color: #DDD; }

.dark .cart td { border-color: rgba(255,255,255,0.08) !important; }

.dark .cart-product-thumbnail img { border-color: rgba(0,0,0,0.2); }

.dark .cart-product-thumbnail img:hover { border-color: #1ABC9C; }

.dark .cart-product-name a,
.dark .product-name a { color: #EEE; }

.dark .cart-product-name a:hover,
.dark .product-name a:hover { color: #BBB; }

.dark td.actions { background-color: rgba(0,0,0,0.2); }

.dark .events .entry,
.dark .ievent {
	background-color: rgba(0,0,0,0.2);
	border-bottom-color: rgba(0,0,0,0.1);
}

.dark .countdown-section {
	color: #DDD;
	border-left-color: rgba(255,255,255,0.2);
}

.dark .countdown-amount,
.dark .rounded-skill { color: #EEE; }

.dark .button-dark:not(.button-border),
.dark .button:hover { background-color: rgba(0,0,0,0.3); }

.dark .button-dark:hover { background-color: #1ABC9C; }

.dark .button-light:not(.button-border):hover { background-color: #282828; }

.dark .button.button-border:not(.button-light) {
	border-color: rgba(255,255,255,0.4);
	color: rgba(255,255,255,0.5);
}

.dark .button.button-border:not(.button-light):hover { color: #EEE; }

.not-dark .button.button-border:not(.button-light) {
	border-color: #444;
	color: <?php echo $color; ?>;
}

.not-dark .button.button-border:not(.button-light):hover {
	background-color: #444;
	color: #FFF;
}

.dark .promo > span,
.dark .promo > .container > span { color: rgba(255,255,255,0.8); }

.dark .promo.promo-border { border-color: rgba(255,255,255,0.08); }

.dark .promo.promo-light { background-color: rgba(255,255,255,0.1); }

.dark .promo.promo-dark:not(.promo-flat) { background-color: rgba(0,0,0,0.3); }

.dark .feature-box h3 { color: #CCC; }

.dark .feature-box p { color: #888; }

.dark .feature-box.fbox-light.fbox-outline .fbox-icon { border-color: rgba(255,255,255,0.15); }

.dark .feature-box.fbox-light .fbox-icon i,
.dark .feature-box.fbox-light .fbox-icon img {
	border-color: rgba(255,255,255,0.1);
	background-color: rgba(255,255,255,0.1);
	color: #FFF;
}

.dark .feature-box.fbox-dark.fbox-outline .fbox-icon { border-color: rgba(255,255,255,0.15); }

.dark .feature-box.fbox-dark .fbox-icon i,
.dark .feature-box.fbox-dark .fbox-icon img { background-color: rgba(255,255,255,0.1); }

.dark .feature-box.fbox-border.fbox-light .fbox-icon,
.dark .feature-box.fbox-border.fbox-dark .fbox-icon { border-color: rgba(255,255,255,0.15); }

.dark .feature-box.fbox-border.fbox-light .fbox-icon i,
.dark .feature-box.fbox-border.fbox-light .fbox-icon img,
.dark .feature-box.fbox-border.fbox-dark .fbox-icon i,
.dark .feature-box.fbox-border.fbox-dark .fbox-icon img,
.dark .feature-box.fbox-plain.fbox-light .fbox-icon i,
.dark .feature-box.fbox-plain.fbox-light .fbox-icon img,
.dark .feature-box.fbox-plain.fbox-dark .fbox-icon i,
.dark .feature-box.fbox-plain.fbox-dark .fbox-icon img { color: #FFF; }

.dark .feature-box h3 span.subtitle { color: #AAA; }

.dark .feature-box.fbox-bg.fbox-center,
.dark .feature-box.media-box.fbox-bg .fbox-desc {
	background-color: #383838;
	border-color: rgba(255,255,255,0.1);
}

.dark .feature-box.fbox-bg.fbox-center.fbox-plain .fbox-icon,
.dark .feature-box.fbox-bg.fbox-center.fbox-border .fbox-icon,
.dark .feature-box.fbox-bg.fbox-center.fbox-outline .fbox-icon { background-color: #383838 !important; }

.dark .feature-box.fbox-bg.fbox-center.fbox-light .fbox-icon i { background-color: #444 !important; }

.dark .fbox-effect .fbox-icon i:after { box-shadow: 0 0 0 2px #494949; }

.dark .fbox-effect .fbox-icon i:hover,
.dark .fbox-effect:hover .fbox-icon i { background-color: #494949; }

.dark .fbox-effect.fbox-dark .fbox-icon i:after { box-shadow: 0 0 0 2px #1ABC9C; }

.dark .fbox-effect.fbox-dark .fbox-icon i:hover,
.dark .fbox-effect.fbox-dark:hover .fbox-icon i { background-color: #1ABC9C; }

.dark .fbox-border.fbox-effect .fbox-icon i:hover,
.dark .fbox-border.fbox-effect:hover .fbox-icon i { box-shadow: 0 0 0 1px #494949; }

.dark .fbox-border.fbox-effect .fbox-icon i:after { background-color: #494949; }

.dark .fbox-border.fbox-effect.fbox-dark .fbox-icon i:hover,
.dark .fbox-border.fbox-effect.fbox-dark:hover .fbox-icon i { box-shadow: 0 0 0 1px #1ABC9C; }

.dark .fbox-border.fbox-effect.fbox-dark .fbox-icon i:after { background-color: #1ABC9C; }

.dark .process-steps li .i-bordered { background-color: #494949; }

.dark .process-steps li:before,
.dark .process-steps li:after,
.dark .feature-box.fbox-center:not(.fbox-bg) h3:after { border-top-color: rgba(255,255,255,0.15); }

.dark .heading-block:not(.not-dark):after { border-top-color: rgba(255,255,255,0.4); }

.dark .style-msg2 { border-left: 4px solid rgba(0,0,0,0.3); }

.dark .style-msg .sb-msg,
.dark .style-msg2 .msgtitle,
.dark .style-msg2 .sb-msg { border-left-color: rgba(255,255,255,0.1); }


.dark .i-rounded,
.dark .i-circled,
.dark .i-bordered { background-color: #494949; }

.dark .i-bordered {
	border-color: #DDD;
	color: #DDD;
}

.dark .i-light {
	background-color: #F5F5F5;
	color: #444;
	text-shadow: none;
}

.dark .i-rounded:hover,
.dark .i-circled:hover {
	background-color: #1ABC9C;
	color: #FFF;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
	box-shadow: 0 0 0 rgba(0,0,0,0.2);
}

.dark .i-bordered:hover {
	background-color: #444;
	color: #FFF;
	border-color: #444;
}

.dark .i-plain {
	color: #FFF;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
}

.dark .i-plain:hover { color: #DDD; }

.dark .social-icon {
	color: #DDD !important;
	border-color: #DDD;
}

.dark #footer .social-icon.si-borderless,
#footer.dark .social-icon.si-borderless { color: #555 !important; }

.dark .si-dark {
	background-color: rgba(0,0,0,0.2);
	color: #DDD !important;
	border-color: transparent;
}

.dark .si-light {
	background-color: rgba(255,255,255,0.1);
	color: #EEE !important;
	border-color: transparent;
}

.dark .social-icon i:last-child { color: #FFF !important; }

.dark .social-icon:hover {
	color: #FFF !important;
	border-color: transparent;
}

.dark .si-share {
	border-top-color: rgba(255,255,255,0.1);
	border-bottom-color: rgba(255,255,255,0.1);
}


.dark .toggle .togglet,
.dark .toggle .toggleta { color: #CCC; }

.dark .toggle.toggle-bg .togglet,
.dark .toggle.toggle-bg .toggleta { background-color: rgba(0,0,0,0.2); }

.dark .toggle.toggle-border { border-color: rgba(255,255,255,0.15); }

.dark .faqs .toggle { border-bottom-color: rgba(255,255,255,0.1); }

.dark .acctitle,
.dark .acctitlec {
	color: #CCC;
	border-top-color: rgba(255,255,255,0.15);
}

.dark .accordion.accordion-bg .acctitle,
.dark .accordion.accordion-bg .acctitlec { background-color: rgba(0,0,0,0.2); }

.dark .accordion.accordion-border { border-color: rgba(255,255,255,0.1); }

.dark .accordion.accordion-border .acctitle,
.dark .accordion.accordion-border .acctitlec { border-color: rgba(255,255,255,0.15); }

.dark ul.tab-nav { border-bottom-color: #494949; }

.dark ul.tab-nav li,
.dark .tabs.tabs-alt ul.tab-nav li.ui-tabs-active a { border-color: #494949; }

.dark ul.tab-nav li:first-child { border-left-color: #494949; }

.dark ul.tab-nav li a {
	color: #DDD;
	background-color: rgba(0,0,0,0.15);
}

.dark .tabs.tabs-alt ul.tab-nav li a,
.dark ul.tab-nav li.ui-tabs-active a { background-color: #383838; }

.dark ul.tab-nav.tab-nav2 li a { background-color: rgba(0,0,0,0.2); }

.dark ul.tab-nav.tab-nav2 li.ui-state-active a { background-color: #1ABC9C; }

.dark .tabs-bordered .tab-container { border-color: #494949; }

.dark .side-tabs ul.tab-nav { border-right-color: #494949; }

.dark .side-tabs ul.tab-nav li { border-color: #494949; }

.dark .side-tabs ul.tab-nav li:first-child {
	border-top-color: #494949;
	border-left-color: #494949;
}

.dark .tabs-bordered.side-tabs ul.tab-nav li.ui-tabs-active a { border-right-color: #383838; }

.dark .tabs-bordered.side-tabs .tab-container { border-top-color: #494949; }

.dark .sidenav { background-color: rgba(0,0,0,0.2); }

.dark .sidenav > li > a {
	border-color: #494949;
	color: #BBB;
}

.dark .sidenav > li > a:hover { background-color: rgba(0,0,0,0.3); }

.dark .faqlist li a { color: #CCC; }

.dark .clients-grid li:before,
.dark .testimonials-grid li:before { border-left-color: rgba(255,255,255,0.15); }

.dark .clients-grid li:after,
.dark .testimonials-grid li:after { border-bottom-color: rgba(255,255,255,0.15); }

.dark .testimonial {
	background-color: rgba(0,0,0,0.2);
	border: 1px solid rgba(0,0,0,0.1);
	box-shadow: 0 1px 1px rgba(0,0,0,0.1);
}

.dark .testimonial.twitter-scroll .testi-content p a { border-bottom: 1px dotted #AAA; }

.dark .testimonial.twitter-scroll .testi-content p a:hover { border-bottom: 1px solid #888; }

.dark .testimonial.twitter-scroll .testi-image i {
	background-color: rgba(0,0,0,0.2);
	color: #EEE;
	text-shadow: none;
}

.parallax.dark .testimonial .flex-control-nav {
	height: 8px;
	margin-top: 30px;
}

.parallax.dark .testimonial .flex-control-nav li {
	width: 8px;
	height: 8px;
	margin: 0 3px;
}

.parallax.dark .testimonial .flex-control-nav li a {
	width: 8px !important;
	height: 8px !important;
	border: 1px solid #FFF;
	background-color: transparent;
}

.parallax.dark .testimonial .flex-control-nav li:hover a,
.parallax.dark .testimonial .flex-control-nav li a.flex-active { background-color: #FFF; }

.dark .team-desc.team-desc-bg { background-color: rgba(255,255,255,0.05); }

.dark .team-content { color: #999; }

.dark .pricing-box {
	border-color: rgba(255,255,255,0.1);
	background-color: rgba(0,0,0,0.2);
	box-shadow: 0 1px 1px rgba(0,0,0,0.1);
}

.dark .pricing-title {
	background-color: rgba(255,255,255,0.03);
	text-shadow: 1px 1px 1px rgba(0,0,0,0.15);
	border-bottom-color: rgba(255,255,255,0.1);
}

.dark .pricing-title h3 { color: #DDD; }

.dark .pricing-price { color: #EEE; }

.dark .pricing-price:after { border-top-color: rgba(255,255,255,0.1); }

.dark .pricing-features { border-bottom-color: rgba(255,255,255,0.1); }

.dark .pricing-box.best-price {
	background-color: transparent;
	box-shadow: 0 0 8px rgba(0,0,0,0.1);
}

.dark .pricing-box.best-price .pricing-title { background-color: transparent; }

.dark .pricing-box.pricing-minimal .pricing-price {
	background-color: transparent;
	border-bottom-color: rgba(255,255,255,0.1);
}

.dark .pricing-box.pricing-extended { background-color: transparent; }

.dark .pricing-box.pricing-extended .pricing-action-area {
	border-left-color: rgba(255,255,255,0.15);
	background-color: rgba(0,0,0,0.2);
}

.dark .pricing-box.pricing-extended .pricing-meta { color: #999; }

.dark .counter.counter-lined + h5:before { border-color: #EEE; }

.dark .easyPieChart { color: #EEE; }

.dark .skills li { background-color: rgba(255,255,255,0.15); }

.dark .skills li .progress-percent { background-color: #4E4E4E; }

.dark .progress-percent:after,
.dark .progress-percent:before { border-top-color: #4E4E4E; }

.dark .skills li > span {
	font-weight: 600;
	color: #CCC;
}

.dark .owl-carousel.owl-loading { background-image: url('../images/preloader-dark.gif'); }

.dark .owl-carousel .owl-nav [class*=owl-] {
	border-color: transparent;
	color: #EEE;
	background-color: rgba(0,0,0,0.5);
}

.dark label { color: #BBB; }

.dark label.label-muted { color: #777; }

.dark #contact-form-overlay,
.dark #contact-form-overlay-mini { background-color: #383838; }

.dark .title-block > span { color: #999; }

.dark .heading-block:not(.not-dark),
.dark .counter { text-shadow: 1px 1px 1px rgba(0,0,0,0.1); }

.dark .heading-block:not(.not-dark) h1,
.dark .heading-block:not(.not-dark) h2,
.dark .heading-block:not(.not-dark) h3,
.dark .heading-block:not(.not-dark) h4,
.dark .emphasis-title:not(.not-dark) h1,
.dark .emphasis-title:not(.not-dark) h2 { color: #FFF; }

.dark .heading-block.not-dark h1,
.dark .heading-block.not-dark h2,
.dark .heading-block.not-dark h3,
.dark .heading-block.not-dark h4,
.dark .emphasis-title.not-dark h1,
.dark .emphasis-title.not-dark h2 { color: <?php echo $color; ?>; }

.dark .heading-block:not(.not-dark) > span { color: #EEE; }

.dark .emphasis-title.not-dark { color: #444; }

.dark .fancy-title h1,
.dark .fancy-title h2,
.dark .fancy-title h3,
.dark .fancy-title h4,
.dark .fancy-title h5,
.dark .fancy-title h6 { background-color: #383838; }

.dark .fancy-title.title-double-border:before,
.dark .fancy-title.title-border:before,
.dark .fancy-title.title-border-color:before,
.dark .fancy-title.title-border:before { border-top-color: rgba(255,255,255,0.15); }

.dark .divider { color: rgba(255,255,255,0.15); }

.dark .divider:after,
.dark .divider.divider-center:before,
.dark .divider.divider-center.divider-short:before { border-top-color: rgba(255,255,255,0.1); }

.dark .divider.divider-rounded,
.dark .divider.divider-border { color: #999; }

.dark .divider.divider-rounded i,
.dark .divider.divider-border i { background-color: rgba(255,255,255,0.1); }

.dark .divider.divider-border i {
	background-color: transparent;
	border-color: rgba(255,255,255,0.15);
}

.dark .quote:before { color: rgba(255,255,255,0.1); }

.dark .highlight { background-color: rgba(0,0,0,0.2); }

.dark .top-advert {
	border-left-color: rgba(255,255,255,0.1);
	border-right-color: rgba(255,255,255,0.1);
}

.dark .error404 { color: rgba(255,255,255,0.15); }

.dark.error404-wrap .form-control::-webkit-input-placeholder { color: #888; }
.dark.error404-wrap .form-control::-moz-placeholder { color: #888; }
.dark.error404-wrap .form-control:-ms-input-placeholder { color: #888; }

.dark .preloader { background-color: rgba(0,0,0,0.2); }

.dark .preloader,
.dark .preloader2,
.dark .form-process { background-image: url('../images/preloader-dark.gif'); }

.dark .form-process { background-color: transparent; }


#footer.dark,
.dark #footer {
	background-color: <?php echo $color; ?>;
	color: #CCC;
	border-top-color: rgba(0,0,0,0.2);
}

.dark #copyrights {
	background-color: rgba(0,0,0,0.2);
	color: rgba(255,255,255,0.25);
	text-shadow: 1px 1px 1px rgba(0,0,0,0.1);
}

.dark #copyrights i.footer-icon { color: rgba(255,255,255,0.3); }

.dark .copyright-links a {
	color: rgba(255,255,255,0.25);
	border-bottom-color: rgba(255,255,255,0.25);
}

.dark .copyright-links a:hover {
	color: rgba(255,255,255,0.35);
	border-bottom-color: rgba(255,255,255,0.35);
}


.dark .footer-widgets-wrap a { color: #CCC; }

.dark .footer-widgets-wrap a:hover { color: #999; }

.dark .sidebar-widgets-wrap .widget,
body.dark #side-panel .widget,
body #side-panel.dark .widget { border-top-color: rgba(255,255,255,0.1); }

body.dark #side-panel #side-panel-trigger-close a,
body #side-panel.dark #side-panel-trigger-close a {
	background-color: rgba(0,0,0,0.2);
	color: #FFF;
}

.dark .widget h4 { color: #DDD; }

.dark .widget p { opacity: 0.8; }

.dark .tagcloud a {
	color: #999;
	border-color: transparent;
	background-color: rgba(0,0,0,0.2);
}

.dark .tagcloud a:hover {
	border-color: transparent !important;
	background-color: #1ABC9C;
	color: #FFF !important;
}

.dark .widget_recent_comments li { background-image: url("../images/icons/widget-comment-dark.png"); }

.dark .widget_nav_menu li a,
.dark .widget_links li a,
.dark .widget_meta li a,
.dark .widget_archive li a,
.dark .widget_recent_comments li a,
.dark .widget_recent_entries li a,
.dark .widget_categories li a,
.dark .widget_pages li a,
.dark .widget_rss li a {
	color: #CCC;
	background-image: url("../images/icons/widget-link-dark.png");
}

.dark .widget_nav_menu li a:hover,
.dark .widget_links li a:hover,
.dark .widget_meta li a:hover,
.dark .widget_archive li a:hover,
.dark .widget_recent_comments li a:hover,
.dark .widget_recent_entries li a:hover,
.dark .widget_categories li a:hover,
.dark .widget_pages li a:hover,
.dark .widget_rss li a:hover { color: #AAA; }


.dark .nav-tree li a { color: #BBB; }


.dark #cookie-notification,
#cookie-notification.dark {
	background-color: rgba(0,0,0,0.85);
	color: #EEE;
}


/* Dark Scheme - Bootstrap
-----------------------------------------------------------------*/

.dark .show-grid [class^=col-] {
	background-color: rgba(255,255,255,0.05);
	border-color: rgba(255,255,255,0.1);
}

.dark mark {
	background: rgba(0,0,0,0.5);
	color: #FFF;
}

.dark fieldset { border-color: rgba(255,255,255,0.1); }

.dark .img-thumbnail {
	background-color: rgba(0,0,0,0.2);
	border-color: rgba(255,255,255,0.1);
}

.dark hr { border-top-color: rgba(255,255,255,0.1); }

.dark .page-header { border-bottom-color: rgba(255,255,255,0.1); }

.dark blockquote { border-left-color: rgba(255,255,255,0.2); }

.dark .blockquote-reverse,
.dark blockquote.pull-right { border-right-color: rgba(255,255,255,0.2); }

.dark code {
	color: #DF6F72;
	background-color: rgba(0,0,0,0.3);
}

.dark kbd { background-color: rgba(255,255,255,0.1); }

.dark pre {
	color: #FFF;
	background-color: rgba(0,0,0,0.3);
	border-color: rgba(255,255,255,0.15);
}

.dark .table > thead > tr > th,
.dark .table > tbody > tr > th,
.dark .table > tfoot > tr > th,
.dark .table > thead > tr > td,
.dark .table > tbody > tr > td,
.dark .table > tfoot > tr > td { border-top-color: rgba(255,255,255,0.1); }

.dark .table > thead > tr > th { border-bottom-color: rgba(255,255,255,0.1); }

.dark .table > tbody + tbody { border-top-color: rgba(255,255,255,0.1); }

.dark .table .table { background-color: rgba(0,0,0,0.2); }

.dark .table-bordered { border-color: rgba(255,255,255,0.1); }

.dark .table-bordered > thead > tr > th,
.dark .table-bordered > tbody > tr > th,
.dark .table-bordered > tfoot > tr > th,
.dark .table-bordered > thead > tr > td,
.dark .table-bordered > tbody > tr > td,
.dark .table-bordered > tfoot > tr > td { border-color: rgba(255,255,255,0.1); }

.dark .table-striped > tbody > tr:nth-child(odd) > td,
.dark .table-striped > tbody > tr:nth-child(odd) > th,
.table-striped > tbody > tr:nth-child(odd) { background-color: rgba(0,0,0,0.05); }

.dark .table-hover > tbody > tr:hover > td,
.dark .table-hover > tbody > tr:hover > th { background-color: rgba(0,0,0,0.1); }

.dark .table > thead > tr > td.active,
.dark .table > tbody > tr > td.active,
.dark .table > tfoot > tr > td.active,
.dark .table > thead > tr > th.active,
.dark .table > tbody > tr > th.active,
.dark .table > tfoot > tr > th.active,
.dark .table > thead > tr.active > td,
.dark .table > tbody > tr.active > td,
.dark .table > tfoot > tr.active > td,
.dark .table > thead > tr.active > th,
.dark .table > tbody > tr.active > th,
.dark .table > tfoot > tr.active > th { background-color: rgba(0,0,0,0.1); }

.dark .table-hover > tbody > tr > td.active:hover,
.dark .table-hover > tbody > tr > th.active:hover,
.dark .table-hover > tbody > tr.active:hover > td,
.dark .table-hover > tbody > tr.active:hover > th { background-color: rgba(255,255,255,0.1); }

@media (max-width: 767px) {
	.table-responsive { border-color: rgba(255,255,255,0.1); }
}

.dark legend {
	color: #DDD;
	border-bottom-color: rgba(255,255,255,0.1);
}

.dark output { color: #999; }

.dark .form-control:not(.not-dark),
.dark .sm-form-control:not(.not-dark) {
	color: #999;
	background-color: rgba(0,0,0,0.2);
	border-color: rgba(0,0,0,0.25);
}

.dark .form-control:not(.not-dark) option,
.dark .sm-form-control:not(.not-dark) option { background-color: #282828; }

.dark .form-control:not(.not-dark):active,
.dark .form-control:not(.not-dark):focus,
.dark .sm-form-control:not(.not-dark):active,
.dark .sm-form-control:not(.not-dark):focus {
	background-color: rgba(0,0,0,0.3);
	border-color: rgba(0,0,0,0.25) !important;
}

.dark .form-control:not(.not-dark)::-moz-placeholder { color: #666; }
.dark .form-control:not(.not-dark):-ms-input-placeholder { color: #666; }
.dark .form-control:not(.not-dark)::-webkit-input-placeholder { color: #666; }
.dark .sm-form-control:not(.not-dark)::-moz-placeholder { color: #666; }
.dark .sm-form-control:not(.not-dark):-ms-input-placeholder { color: #666; }
.dark .sm-form-control:not(.not-dark)::-webkit-input-placeholder { color: #666; }

.dark .form-control:not(.not-dark)[disabled],
.dark .form-control:not(.not-dark)[readonly],
.dark fieldset[disabled] .form-control:not(.not-dark),
.dark .sm-form-control:not(.not-dark)[disabled],
.dark .sm-form-control:not(.not-dark)[readonly],
.dark fieldset[disabled] .sm-form-control:not(.not-dark) { background-color: rgba(255,255,255,0.1); }

.dark .input-group .form-control.error:not(.not-dark) { color: #E42C3E; }

.dark .sm-form-control.error:not(.not-dark) { border-color: #E42C3E !important; }

.dark .form-control.error:not(.not-dark)::-moz-placeholder { color: rgba(228,44,62,0.6); }
.dark .form-control.error:not(.not-dark):-ms-input-placeholder { color: rgba(228,44,62,0.6); }
.dark .form-control.error:not(.not-dark)::-webkit-input-placeholder { color: rgba(228,44,62,0.6); }

.dark .btn:hover,
.dark .btn:focus { color: #FFF; }

.dark .btn-default {
	color: #FFF;
	background-color: rgba(0,0,0,0.2);
	border-color: rgba(255,255,255,0.15);
}

.dark .btn-default:hover,
.dark .btn-default:focus,
.dark .btn-default:active,
.dark .btn-default.active,
.dark .open .dropdown-toggle.btn-default {
	color: #FFF;
	background-color: rgba(0,0,0,0.3);
	border-color: rgba(255,255,255,0.2);
}

.dark .btn-default.disabled,
.dark .btn-default[disabled],
.dark fieldset[disabled] .btn-default,
.dark .btn-default.disabled:hover,
.dark .btn-default[disabled]:hover,
.dark fieldset[disabled] .btn-default:hover,
.dark .btn-default.disabled:focus,
.dark .btn-default[disabled]:focus,
.dark fieldset[disabled] .btn-default:focus,
.dark .btn-default.disabled:active,
.dark .btn-default[disabled]:active,
.dark fieldset[disabled] .btn-default:active,
.dark .btn-default.disabled.active,
.dark .btn-default[disabled].active,
.dark fieldset[disabled] .btn-default.active {
	color: #BBB;
	background-color: rgba(255,255,255,0.1);
	border-color: rgba(255,255,255,0.1);
}

.dark .btn-default .badge { background-color: rgba(255,255,255,0.1); }

.dark .btn-link:hover,
.dark .btn-link:focus { color: #EEE; }

.dark .dropdown-menu {
	background-color: <?php echo $color; ?>;
	border-color: #3F3F3F;
}

.dark .dropdown-menu .divider { background-color: rgba(255,255,255,0.1); }

.dark .dropdown-menu > li > a { color: #DDD; }

.dark .dropdown-menu > li > a:hover,
.dark .dropdown-menu > li > a:focus {
	color: #EEE;
	background-color: rgba(255,255,255,0.1);
}

.dark .input-group-addon,
.dark .input-group-btn .btn-default {
	color: #999;
	background-color: rgba(0,0,0,0.35);
	border-color: rgba(0,0,0,0.25);
}

.dark .input-group-btn .btn-default { color: #FFF; }

.dark .input-group-btn .btn-default:hover { background-color: rgba(0,0,0,0.30); }

.dark .nav > li > a:hover,
.dark .nav > li > a:focus,
.dark .nav .open > a,
.dark .nav .open > a:hover,
.dark .nav .open > a:focus { background-color: rgba(0,0,0,0.2); }

.dark .nav .nav-divider { background-color: rgba(255,255,255,0.1); }

.dark .nav-tabs { border-bottom-color: rgba(255,255,255,0.15); }

.dark .nav-tabs > li > a:hover {
	border-color: rgba(255,255,255,0.2);
	border-bottom: none;
}

.dark .nav-tabs.nav-justified > li > a:hover,
.dark .nav-tabs-justified > li > a:hover { border-bottom: 1px solid rgba(255,255,255,0.2); }

.dark .nav-tabs > li.active > a,
.dark .nav-tabs > li.active > a:hover,
.dark .nav-tabs > li.active > a:focus {
	color: #DDD;
	background-color: #383838;
	border: 1px solid rgba(255,255,255,0.2);
	border-bottom-color: #383838;
}

.dark .nav-tabs.nav-justified > .active > a,
.dark .nav-tabs.nav-justified > .active > a:hover,
.dark .nav-tabs.nav-justified > .active > a:focus { border-color: rgba(255,255,255,0.15); }

@media (min-width: 768px) {
	.dark .nav-tabs.nav-justified > li > a { border-bottom-color: rgba(255,255,255,0.15); }

	.dark .nav-tabs.nav-justified > .active > a,
	.dark .nav-tabs.nav-justified > .active > a:hover,
	.dark .nav-tabs.nav-justified > .active > a:focus { border-bottom-color: #383838; }
}

.dark .nav-tabs-justified > .active > a,
.dark .nav-tabs-justified > .active > a:hover,
.dark .nav-tabs-justified > .active > a:focus { border-color: rgba(255,255,255,0.15); }

@media (min-width: 768px) {
	.dark .nav-tabs-justified > li > a { border-bottom-color: rgba(255,255,255,0.15); }

	.dark .nav-tabs-justified > .active > a,
	.dark .nav-tabs-justified > .active > a:hover,
	.dark .nav-tabs-justified > .active > a:focus { border-bottom-color: #383838; }
}

.dark .navbar-default {
	background-color: rgba(255,255,255,0.1);
	border-color: rgba(255,255,255,0.1);
}

.dark .navbar-default .navbar-brand { color: #EEE; }

.dark .navbar-default .navbar-brand:hover,
.dark .navbar-default .navbar-brand:focus { color: #BBB; }

.dark .navbar-default .navbar-text { color: #999; }

.dark .navbar-default .navbar-nav > li > a { color: #BBB; }

.dark .navbar-default .navbar-nav > li > a:hover,
.dark .navbar-default .navbar-nav > li > a:focus {
	color: #EEE;
	background-color: transparent;
}

.dark .navbar-default .navbar-nav > .active > a,
.dark .navbar-default .navbar-nav > .active > a:hover,
.dark .navbar-default .navbar-nav > .active > a:focus {
	color: #EEE;
	background-color: rgba(0,0,0,0.25);
}

.dark .navbar-default .navbar-nav > .disabled > a,
.dark .navbar-default .navbar-nav > .disabled > a:hover,
.dark .navbar-default .navbar-nav > .disabled > a:focus { color: #999; }

.dark .navbar-default .navbar-toggle { border-color: rgba(255,255,255,0.15); }

.dark .navbar-default .navbar-toggle:hover,
.dark .navbar-default .navbar-toggle:focus { background-color: rgba(255,255,255,0.15); }

.dark .navbar-default .navbar-toggle .icon-bar { background-color: #BBB; }

.dark .navbar-default .navbar-collapse,
.dark .navbar-default .navbar-form { border-color: rgba(255,255,255,0.15); }

.dark .navbar-default .navbar-nav > .open > a,
.dark .navbar-default .navbar-nav > .open > a:hover,
.dark .navbar-default .navbar-nav > .open > a:focus {
	background-color: rgba(0,0,0,0.25);
	color: #EEE;
}

@media (max-width: 767px) {
	.dark .navbar-default .navbar-nav .open .dropdown-menu > li > a { color: #BBB; }

	.dark .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
	.dark .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus { color: #EEE; }

	.dark .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
	.dark .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
	.dark .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
		background-color: rgba(0,0,0,0.25);
		color: #EEE;
	}

	.dark .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a,
	.dark .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover,
	.dark .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus { color: #999; }
}

.dark .navbar-default .navbar-link { color: #BBB; }

.dark .navbar-default .navbar-link:hover { color: #EEE; }

.dark .pagination > li > a,
.dark .pagination > li > span,
.dark .pager li > a,
.dark .pager li > span {
	color: #BBB;
	background-color: rgba(255,255,255,0.1);
	border-color: #666;
}

.dark .pagination > li > a:hover,
.dark .pagination > li > span:hover,
.dark .pagination > li > a:focus,
.dark .pagination > li > span:focus,
.dark .pager li > a:hover,
.dark .pager li > a:focus {
	color: #EEE;
	background-color: rgba(0,0,0,0.1);
}

.dark .pagination > .disabled > span,
.dark .pagination > .disabled > span:hover,
.dark .pagination > .disabled > span:focus,
.dark .pagination > .disabled > a,
.dark .pagination > .disabled > a:hover,
.dark .pagination > .disabled > a:focus,
.dark .pager .disabled > a,
.dark .pager .disabled > a:hover,
.dark .pager .disabled > a:focus,
.dark .pager .disabled > span {
	color: #999;
	background-color: rgba(255,255,255,0.2);
	border-color: #777;
}

.dark .label-default { background-color: rgba(255,255,255,0.2); }

.dark .label-default[href]:hover,
.dark .label-default[href]:focus { background-color: rgba(0,0,0,0.2); }

.dark .badge { background-color: rgba(255,255,255,0.2); }

.btn .badge { background-color: #FFF; }

.dark .jumbotron { background-color: rgba(255,255,255,0.15); }

.dark .thumbnail {
	background-color: rgba(255,255,255,0.15);
	border-color: rgba(255,255,255,0.1);
}

.dark .thumbnail .caption { color: #EEE; }

.dark .progress { background-color: rgba(255,255,255,0.15); }

.dark .list-group-item {
	background-color: rgba(0,0,0,0.2);
	border-color: #444;
}

.dark a.list-group-item { color: #BBB; }

.dark a.list-group-item .list-group-item-heading { color: #DDD; }

.dark a.list-group-item:hover,
.dark a.list-group-item:focus { background-color: rgba(255,255,255,0.05); }

.dark a.list-group-item.active,
.dark a.list-group-item.active:hover,
.dark a.list-group-item.active:focus {
	color: #ffffff;
	background-color: #428bca;
	border-color: #428bca;
}

.dark .list-group-item-success {
	color: #3c763d;
	background-color: #dff0d8;
}

.dark a.list-group-item-success { color: #3c763d; }

.dark a.list-group-item-success:hover,
.dark a.list-group-item-success:focus {
	color: #3c763d;
	background-color: #d0e9c6;
}

.dark a.list-group-item-success.active,
.dark a.list-group-item-success.active:hover,
.dark a.list-group-item-success.active:focus {
	color: #fff;
	background-color: #3c763d;
	border-color: #3c763d;
}

.dark .list-group-item-info {
	color: #31708f;
	background-color: #d9edf7;
}

.dark a.list-group-item-info { color: #31708f; }

.dark a.list-group-item-info:hover,
.dark a.list-group-item-info:focus {
	color: #31708f;
	background-color: #c4e3f3;
}

.dark a.list-group-item-info.active,
.dark a.list-group-item-info.active:hover,
.dark a.list-group-item-info.active:focus {
	color: #fff;
	background-color: #31708f;
	border-color: #31708f;
}

.dark .list-group-item-warning {
	color: #8a6d3b;
	background-color: #fcf8e3;
}

.dark a.list-group-item-warning { color: #8a6d3b; }

.dark a.list-group-item-warning:hover,
.dark a.list-group-item-warning:focus {
	color: #8a6d3b;
	background-color: #faf2cc;
}

.dark a.list-group-item-warning.active,
.dark a.list-group-item-warning.active:hover,
.dark a.list-group-item-warning.active:focus {
	color: #fff;
	background-color: #8a6d3b;
	border-color: #8a6d3b;
}

.dark .list-group-item-danger {
	color: #a94442;
	background-color: #f2dede;
}

.dark a.list-group-item-danger { color: #a94442; }

.dark a.list-group-item-danger:hover,
.dark a.list-group-item-danger:focus {
	color: #a94442;
	background-color: #ebcccc;
}

.dark a.list-group-item-danger.active,
.dark a.list-group-item-danger.active:hover,
.dark a.list-group-item-danger.active:focus {
	color: #fff;
	background-color: #a94442;
	border-color: #a94442;
}

.dark .panel { background-color: rgba(0,0,0,0.2); }

.dark .panel-footer {
	background-color: rgba(255,255,255,0.1);
	border-top-color: rgba(255,255,255,0.1);
}

.dark .panel > .panel-body + .table,
.dark .panel > .panel-body + .table-responsive { border-top-color: rgba(255,255,255,0.1); }

.dark .panel-group .panel-heading + .panel-collapse .panel-body { border-top-color: rgba(255,255,255,0.1); }

.dark .panel-group .panel-footer + .panel-collapse .panel-body { border-bottom-color: rgba(255,255,255,0.1); }

.dark .panel-default { border-color: rgba(255,255,255,0.15); }

.dark .panel-default > .panel-heading {
	color: #DDD;
	background-color: rgba(255,255,255,0.1);
	border-color: rgba(255,255,255,0.1);
}

.dark .panel-default > .panel-heading + .panel-collapse .panel-body { border-top-color: rgba(255,255,255,0.15); }

.dark .panel-default > .panel-footer + .panel-collapse .panel-body { border-bottom-color: rgba(255,255,255,0.15); }

.dark .well {
	background-color: rgba(0,0,0,0.2);
	border-color: rgba(255,255,255,0.15);
}

.dark .well blockquote { border-color: rgba(255,255,255,0.15); }

.dark .close {
	opacity: 1;
	color: rgba(0,0,0,0.15);
	text-shadow: 0 1px 0 rgba(0,0,0,0.2);
}

.dark .close:hover,
.dark .close:focus {
	color: rgba(0,0,0,0.4);
}

.dark .modal-content { border-color: #555; }

.dark .modal-header { border-bottom-color: rgba(255,255,255,0.15); }

.dark .modal-footer { border-top-color: rgba(255,255,255,0.15); }

.dark .popover {
	background-color: #282828;
	border-color: #494949;
}
.dark .popover-title {
	background-color: rgba(255,255,255,0.1);
	border-bottom-color: rgba(255,255,255,0.075);
}
.dark .popover.top > .arrow { border-top-color: #494949; }

.dark .popover.top > .arrow:after { border-top-color: #282828; }

.dark .popover.right > .arrow { border-right-color: #494949; }

.dark .popover.right > .arrow:after { border-right-color: #282828; }

.dark .popover.bottom > .arrow { border-bottom-color: #494949; }

.dark .popover.bottom > .arrow:after { border-bottom-color: #282828; }

.dark .popover.left > .arrow { border-left-color: #494949; }

.dark .popover.left > .arrow:after { border-left-color: #282828; }


@media (max-width: 991px) {

	.dark .postcontent,
	.dark .postcontent.bothsidebar,
	.dark .sidebar { border-bottom-color: rgba(255,255,255,0.1); }

	.dark #header.transparent-header,
	.dark #header.semi-transparent,
	#header.dark.transparent-header,
	#header.dark.semi-transparent {
		background-color: <?php echo $color; ?>;
		border-bottom-color: rgba(255,255,255,0.1);
	}

	.dark #primary-menu.mobile-menu-off-canvas:not(.not-dark) > ul,
	.dark #primary-menu.mobile-menu-off-canvas:not(.not-dark) > div > ul,
	#primary-menu.mobile-menu-off-canvas.dark > ul,
	#primary-menu.mobile-menu-off-canvas.dark > div > ul {
		background-color: <?php echo $color; ?>;
		border-right: 1px solid rgba(255,255,255,0.05) !important;
	}

	.dark #primary-menu.mobile-menu-off-canvas.from-right:not(.not-dark) > ul,
	.dark #primary-menu.mobile-menu-off-canvas.from-right:not(.not-dark) > div > ul,
	#primary-menu.mobile-menu-off-canvas.from-right.dark > ul,
	#primary-menu.mobile-menu-off-canvas.from-right.dark > div > ul {
		border-right: 0 !important;
		border-left: 1px solid rgba(255,255,255,0.05) !important;
	}

	.dark #primary-menu:not(.not-dark) ul li,
	.dark #primary-menu:not(.not-dark) ul ul,
	.dark #primary-menu:not(.not-dark) ul li .mega-menu-content,
	.dark #primary-menu:not(.not-dark) ul ul li,
	.dark #primary-menu:not(.not-dark) ul li .mega-menu-content ul ul,
	.dark #primary-menu:not(.not-dark) ul li .mega-menu-content.col-2 > ul,
	.dark #primary-menu:not(.not-dark) ul li .mega-menu-content.col-3 > ul,
	.dark #primary-menu:not(.not-dark) ul li .mega-menu-content.col-4 > ul,
	.dark #primary-menu:not(.not-dark) ul li .mega-menu-content.col-5 > ul,
	.dark #primary-menu:not(.not-dark) ul li .mega-menu-content.style-2 li { border-top-color: rgba(255,255,255,0.1) !important; }

	.dark #primary-menu:not(.not-dark) > ul > li.sub-menu > a,
	.dark #primary-menu:not(.not-dark) > .container > ul > li.sub-menu > a { background-image: url("../images/icons/submenu-dark.png"); }

	body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu ul li,
	body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu ul ul,
	body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu ul li .mega-menu-content,
	body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu ul ul li,
	body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu ul li .mega-menu-content ul ul,
	body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu ul li .mega-menu-content.col-2 > ul,
	body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu ul li .mega-menu-content.col-3 > ul,
	body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu ul li .mega-menu-content.col-4 > ul,
	body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu ul li .mega-menu-content.col-5 > ul,
	body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu ul li .mega-menu-content.style-2 li { border-top-color: #EEE !important; }

	body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu > ul > li:hover a,
	body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu > ul > li.current a,
	body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu > div > ul > li:hover a,
	body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu > div > ul > li.current a { color: #1ABC9C !important; }

	body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu ul ul a,
	body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu > ul > li:hover ul a,
	body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu > ul > li.current ul a,
	body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu > div > ul > li:hover ul a,
	body:not(.dark) #header:not(.dark) #header-wrap:not(.dark) #primary-menu > div > ul > li.current ul a  { color: #444 !important; }

	.dark .pricing-box.pricing-extended .pricing-action-area { border-top-color: rgba(255,255,255,0.15); }

}


#primary-menu.style-2 {
border-top: 1px solid <?php echo $color; ?> !important;
border-bottom: 1px solid <?php echo $color; ?> !important;
}

#primary-menu ul li > a:hover {
color: #fff !important;
background: <?php echo $color; ?> !important;
}



############################################



.ui-icon {
    display: block;
    text-indent: -99999px;
    overflow: hidden;
    background-repeat: no-repeat;
}



/* workarounds */
/* reset extra padding in Firefox, see h5bp.com/l */
input.ui-button::-moz-focus-inner,
button.ui-button::-moz-focus-inner {
    border: 0;
    padding: 0;
}
.ui-datepicker {
    width: 17em;
    padding: .2em .2em 0;
    display: none;
}
.ui-datepicker .ui-datepicker-header {
    position: relative;
    padding: .2em 0;
}
.ui-datepicker .ui-datepicker-prev,
.ui-datepicker .ui-datepicker-next {
    position: absolute;
    top: 2px;
    width: 1.8em;
    height: 1.8em;
}
.ui-datepicker .ui-datepicker-prev-hover,
.ui-datepicker .ui-datepicker-next-hover {
    top: 1px;
}
.ui-datepicker .ui-datepicker-prev {
    left: 2px;
}
.ui-datepicker .ui-datepicker-next {
    right: 2px;
}
.ui-datepicker .ui-datepicker-prev-hover {
    left: 1px;
}
.ui-datepicker .ui-datepicker-next-hover {
    right: 1px;
}
.ui-datepicker .ui-datepicker-prev span,
.ui-datepicker .ui-datepicker-next span {
    display: block;
    position: absolute;
    left: 50%;
    margin-left: -8px;
    top: 50%;
    margin-top: -8px;
}
.ui-datepicker .ui-datepicker-title {
    margin: 0 2.3em;
    line-height: 1.8em;
    text-align: center;
}
.ui-datepicker .ui-datepicker-title select {
    font-size: 1em;
    margin: 1px 0;
}
.ui-datepicker select.ui-datepicker-month,
.ui-datepicker select.ui-datepicker-year {
    width: 45%;
    border: 0;
    color: #000;
}
.ui-datepicker table {
    width: 100%;
    font-size: .9em;
    border-collapse: collapse;
    margin: 0 0 .4em;
}
.ui-datepicker th {
    padding: .7em .3em;
    text-align: center;
    font-weight: bold;
    border: 0;
    color: <?php echo $color; ?>;
}
.ui-datepicker td {
    border: 0;
    padding: 1px;
}
.ui-datepicker td span,
.ui-datepicker td a {
    display: block;
    padding: .2em;
    text-align: right;
    text-decoration: none;
}


/* Component containers
----------------------------------*/
.ui-widget {
    font-family: Arial,Helvetica,sans-serif;
    font-size: 1em;
}
.ui-widget .ui-widget {
    font-size: 1em;
}
.ui-widget input,
.ui-widget select,
.ui-widget textarea,
.ui-widget button {
    font-family: Arial,Helvetica,sans-serif;
    font-size: 1em;
}
.ui-widget-content {
    border: 1px solid <?php echo $color; ?>;
    background: #ffffff;
    color: #333333;
}

.ui-widget-content a {
    color: #333333;
}
.ui-widget-header {
    border: 1px solid #fff;
    background: <?php echo $color; ?>;
    color: #fff;
    font-weight: 500;
    font-family: 'Lato', sans-serif;
}
.ui-widget-header a {
    color: #fff;
}

/* Interaction states
----------------------------------*/
.ui-state-default,
.ui-widget-content .ui-state-default,
.ui-widget-header .ui-state-default {
    border: 1px solid <?php echo $color; ?>;
    background: <?php echo $color; ?>;
    font-weight: 700;
    color: #fff;
    font-family: 'Lato', sans-serif;
    text-align: center;
}
.ui-state-default a,
.ui-state-default a:link,
.ui-state-default a:visited {
    color: #454545;
    text-decoration: none;
}
.ui-state-hover,
.ui-widget-content .ui-state-hover,
.ui-widget-header .ui-state-hover,
.ui-state-focus,
.ui-widget-content .ui-state-focus,
.ui-widget-header .ui-state-focus {
    border: 1px solid #cccccc;
    background: #ededed;
    font-weight: normal;
    color: #2b2b2b;
}
.ui-state-hover a,
.ui-state-hover a:hover,
.ui-state-hover a:link,
.ui-state-hover a:visited,
.ui-state-focus a,
.ui-state-focus a:hover,
.ui-state-focus a:link,
.ui-state-focus a:visited {
    color: #2b2b2b;
    text-decoration: none;
}
.ui-state-active,
.ui-widget-content .ui-state-active,
.ui-widget-header .ui-state-active {
    border: 1px solid <?php echo $color; ?>;
    font-weight: normal;
    color: #FFF;
    background: #34a853 none repeat scroll 0% 0%;
}
.ui-state-active a,
.ui-state-active a:link,
.ui-state-active a:visited {
    color: #ffffff;
    text-decoration: none;
}

.ui-datepicker-inline {
	width: 100%;
}

.ui-datepicker-prev {
    visibility: hidden;
}

.ui-datepicker-next {
    visibility: hidden;
}




.catnm{
 display:inline-block;
width: auto;
background: <?php echo $color; ?>;
color: #fff;
text-transform: uppercase;
font-weight: bold;
padding: 4px 8px 4px 8px;
border-radius: 5px;
font-size:12px;

}