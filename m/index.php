<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <link rel="apple-touch-icon"
        href="img/pukerain.jpg" />
        <link rel="apple-touch-icon-precomposed"
        href="img/pukerain.jpg" />
        <link rel="stylesheet"
        type="text/css" href="style.css" />
        <title>C.S.T</title>
    </head>
    <body>
        <div id="header">
            <div id="titel">
                C.S.T
            </div>
        </div>
        <!--<div id="article">-->
            <?php 
            require('../wordpress/wp-blog-header.php');
            ?>
            <?php
            $posts = get_posts('numberposts=10&order=DES&orderby=post_date');
            foreach ($posts as $post) : start_wp(); ?>
            <?php echo "<div id='article'>"; ?>
            <?php echo "<div id='titel'>"; the_title(); echo "</div>"; ?>
            <?php echo "<div id='datum'>"; the_date(); echo "</div>"; ?>
            <?php echo the_content(); ?> 
            <?php echo "</div>"; ?>
            <?php
            endforeach;
            ?> 
        <!--</div>-->
    </body>
</html>