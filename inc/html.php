<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/inc/keys.php');

class Print_html
{
    public $page;
    public $section;
    public $pageTitle;
    public $keywords;
    public $dirLevel;
    public $styleSheets;
    public $scriptFiles;

    public function __construct() {
        $this->page = 'home';
        $this->section = 'home';
        $this->pageTitle = '';
        $this->keywords = 'pet sitting,Colonie,Latham,pets,dogs,cats,pet sitter,dog walking,Latham,Albany,pet,NY,Auntie Kim';
        $this->dirLevel = 0;
        $this->styleSheets = array();
        $this->scriptFiles = array();
        $this->isTablet = false;
        $this->siteDescription = "Auntie Kim's Pet Sitting cares for your pets in Latham, Colonie and northern Albany County, NY";
    }

    # Print the appropriate number of ../../ for relative links
    public function print_dir_level() {
        if ($this->section === 'error') {
            echo '/';
        }
        else {
            $lev = $this->dirLevel;
            $path = '';
            while ($lev > 0) {
                $path .= '../';
                $lev--;
            }
            echo strlen($path) > 0 ? $path : '';
        }
    }

    public function print_page_begin() {
    ?>
<!DOCTYPE html>
<!--[if lt IE 8]><html class="no-js lt-ie9 oldie" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title><?php if (!empty($this->pageTitle) && $this->name !== 'home') { echo $this->pageTitle . ' - '; } echo SITE_TITLE; ?></title>
    <link rel="stylesheet" href="/inc/css/style.min.css">
    <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/inc/img/icons/logo-square-og.png">
    <meta property="og:title" content="<?php echo SITE_TITLE; ?>">
    <meta property="og:url" content="<?php echo SITE_BASE_URL; if (!empty($this->name) && $this->name !== 'home') { echo '/' . $this->name . '/'; } ?>">
    <meta property="og:site_name" content="<?php echo SITE_TITLE; ?>">
    <meta property="og:description" content="<?php echo $this->siteDescription; ?>">
    <?php if (!empty($this->styleSheets) && is_array($this->styleSheets)) {
            foreach ($this->styleSheets as $ss) { ?>
    <link rel="stylesheet" media="all" href="<?php echo $ss; ?>">
    <?php   }
    } ?>
    <?php if (!empty($this->keywords)) { ?>
    <meta name="keywords" content="<?php echo $this->keywords; ?>">
    <?php } ?>
    <meta name="description" content="<?php echo $this->siteDescription; ?>">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@AuntieKims">
    <meta name="twitter:creator" content="@AuntieKims">
    <meta name="twitter:title" content="<?php echo SITE_TITLE; ?>">
    <meta name="twitter:description" content="<?php echo $this->siteDescription; ?>">
    <meta name="twitter:image:src" content="<?php echo SITE_BASE_URL; ?>/inc/img/icons/logo-square-og-120.png">
    <meta name="twitter:domain" content="<?php echo SITE_BASE_URL; ?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php $this->print_dir_level(); ?>inc/img/icons/apple-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php $this->print_dir_level(); ?>inc/img/icons/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php $this->print_dir_level(); ?>inc/img/icons/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php $this->print_dir_level(); ?>inc/img/icons/apple-touch-icon-57x57-precomposed.png">
    <link rel="shortcut icon" href="/inc/img/icons/favicon.ico">
    <link rel="icon" href="/inc/img/icons/favicon.ico">
    <script src="<?php $this->print_dir_level(); ?>inc/js/vendor/modernizr.js"></script>
    <!--[if lte IE 8]><script src="/inc/js/vendor/respond.min.js"></script><![endif]-->
</head>
<body>
    <a href="#page" class="skip-to">Skip to Content</a>
    <header>
        <h1><a href="/"><?php echo SITE_TITLE; ?></a></h1><?php /* class="site-logo" */ ?>
    </header>
    <nav class="row">
        <div class="small-6 medium-4 large-2 columns">
            <a href="/">Home</a>
        </div>
        <div class="small-6 medium-4 large-2 columns">
            <a<?php if ($this->name === 'about') { echo ' class="current"'; } ?> href="<?php $this->print_dir_level(); ?>about/">About Us</a>
        </div>
        <div class="small-6 medium-4 large-2 columns">
            <a<?php if ($this->name === 'services') { echo ' class="current"'; } ?> href="<?php $this->print_dir_level(); ?>services/">Services &amp; Rates</a>
        </div>
        <div class="small-6 medium-4 large-2 columns">
            <a<?php if ($this->name === 'photos') { echo ' class="current"'; } ?> href="<?php $this->print_dir_level(); ?>photos/">Photo Album</a>
        </div>
        <div class="small-6 medium-4 large-2 columns">
            <a href="<?php echo CLIENT_LOGIN_URL ?>">Client Login</a>
        </div>
        <div class="small-6 medium-4 large-2 columns">
            <a<?php if ($this->name === 'contact') { echo ' class="current"'; } ?> href="<?php $this->print_dir_level(); ?>contact/">Contact</a>
        </div><?php /*
        <div class="small-6 large-3 columns">
            <a<?php if ($this->name === 'faq') { echo ' class="current"'; } ?> href="<?php $this->print_dir_level(); ?>faq/">FAQ</a>
        </div>
        <li><a<?php if ($this->name === 'specials') { echo ' class="current"'; } ?> href="<?php $this->print_dir_level(); ?>specials/">Specials &amp; Discounts</a></li>
        <li><a<?php if ($this->name === 'testimonials') { echo ' class="current"'; } ?> href="<?php $this->print_dir_level(); ?>testimonials/">Testimonials</a></li>
        */ ?>
    </nav>
    <div class="page-container"><?php /*
        <noscript>
            <div class="alert-box">
                <p><strong>JavaScript is currently disabled in your web browser. </strong><br /> For full functionality of this site, it is necessary to enable JavaScript. Here are <a href="http://www.enable-javascript.com/" target="_blank"> instructions how to enable JavaScript</a></p>
            </div>
        </noscript>*/ ?>
    <?php
    } // end print_page_begin()

    public function print_full_page($body_function = '', $opts = null) {
        if (!$body_function) {
            $body_function = 'print_page_body';
        }

        $this->print_page_begin();
        $body_function($opts);
        $this->print_page_end();
    }

    public function print_page_end() {
    ?>
    </div>
    <footer role="contentinfo">
        <div class="row">
            <div class="small-6 medium-4 large-2 columns">
                <a href="/">Home</a>
            </div>
            <div class="small-6 medium-4 large-2 columns">
                <a href="/about/">About Us</a>
            </div>
            <div class="small-6 medium-4 large-2 columns">
                <a href="/services/">Services &amp; Rates</a>
            </div>
            <?php /*<div class="small-6 large-3 columns">
                <a href="/specials/">Specials &amp; Discounts</a>
            </div>*/ ?>
            <div class="small-6 medium-4 large-2 columns">
                <a href="/photos/">Photo Album</a>
            </div>
            <div class="small-6 medium-4 large-2 columns">
                <a href="<?php echo CLIENT_LOGIN_URL; ?>">Client Login</a>
            </div>
            <div class="small-6 medium-4 large-2 columns">
                <a href="/contact/">Contact</a>
            </div>
            <?php /*<div class="small-6 large-3 columns">
                <a href="/faq/">FAQ</a>
            </div>*/ ?>
            <?php /*<div class="small-6 large-3 columns">
                <a href="/testimonials/">Testimonials</a>
            </div>*/ ?>
        </div>
    </footer>

    <?php /*
    <script src="/inc/js/vendor.js"></script>
    <script src="/inc/js/site.js"></script>

    <script>$(document).foundation();</script>
    <script>
        yepnope([
    <?php
    if (!empty($this->scriptFiles) && is_array($this->scriptFiles)) { ?>
        <?php foreach ($this->scriptFiles as $ss) { ?>
            { load: '<?php echo $ss; ?>' },
        <?php }
            } ?>
            // { load: '<?php $this->print_dir_level(); ?>inc/js/ga.js' }
        ]);
    </script> */ ?>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-41366207-1', '<?php echo SITE_DOMAIN; ?>');
        ga('send', 'pageview');
    </script>
    <?php if ($this->name === 'home') { /* Ugh. Needed for Twitter SVG on home page for Opera only */ ?>
    <script>try { if (window.opera) { document.body.classList.add('opera'); } } catch(e) { }</script>
    <? } ?>
</body>
</html>
    <?php
    }
}

?>
