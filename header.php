<!doctype html>
<html xmlns:fb="http://ogp.me/ns/fb#">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <title><?php wp_title('&laguo;', true, 'right'); ?><?php bloginfo('name');?></title>
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" type="text/css" />
    <!-- <link rel="author" href="https://plus.google.com/118057831385164378209/posts"/> -->
    <? if (is_singular()) wp_enqueue_script('comment-reply'); ?>
    <?php wp_head(); ?>
</head>
<body>
    <div id="wrapper">
        <div id="container">
            <div id="header">
                <div class='title'><h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name');?></a></h1></div><div style="color: #aaa"><?php bloginfo('description'); ?></div>
                <div style='clear:both;'></div>
            </div>
