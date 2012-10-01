<?php
    ini_set("session.gc_maxlifetime", "1200"); 
    if (!session_id()) { session_start(); }
    if (!isset($_SESSION['referrer']) || $_SESSION['referrer'] == '') {
        $_SESSION['referrer'] = $_SERVER['HTTP_REFERER'];
    }
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    
    <meta charset="utf-8">
    <meta name="author" content="Fabrizio Calderan">
    <link rel="image_src" href="http://www.fabriziocalderan.it/mosaiqy/mosaiqy-ss-250.jpg" />
    
    <title>Mosaiqy: a nice jQuery plugin</title>
    
    <script>
    (function(doc) { 
    doc.className = doc.className.replace(/(^|\b)no\-js(\b|$)/, 'js');
    }(document.documentElement));
    
    /* don't steal my bandwidth, thank you */
    if (top.location!= self.location) {
	        top.location = self.location.href
    }
    </script>
    
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://jdbartlett.com/innershiv/innershiv.js"></script>
    <![endif]-->
    
    
    <style>
    @font-face {
        font-family: 'LeagueGothicRegular';
        src: url('css/league_gothic-webfont.eot');
        src: local('☺'), 
            url('css/league_gothic-webfont.woff') format('woff'), 
            url('css/league_gothic-webfont.ttf') format('truetype'), 
            url('css/league_gothic-webfont.svg#webfontqRQZtdhc') format('svg');
        font-weight: normal;
        font-style: normal;
    }
    </style>
    <link rel="stylesheet" media="all" href="css/style.css" />
    <link rel="stylesheet" media="screen" href="lib/lib-css/mosaiqy.css" />


    <meta property="og:url" content="http://www.fabriziocalderan.it/mosaiqy/" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="http://www.fabriziocalderan.it/mosaiqy/mosaiqy-ss-250.jpg" />
    <meta property="og:title" content="Mosaiqy, an amazing jQuery plugin for viewing and zooming photos" />
    <meta property="og:description" content="Mosaiqy, is a photogallery plugin for jQuery 1.6+ with slide effects on thumbnails and zoom" />        
    <meta property="fb:admins" content="1063607596" />