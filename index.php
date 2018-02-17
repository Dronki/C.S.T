<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>C.S.T</title>
        <link rel="stylesheet"
        type="text/css" href="style.css" />
    </head>
    <body>
        <div id="wrapper">
        <div id="meny">
            <?php include 'meny.php'; ?>
        </div>
        
        <div id="user">
            <?php
            include_once 'main_login.php';
            ?>
        </div>
            <div id="content">
            <p>
            <?php
            require('wordpress/wp-blog-header.php');
            ?>
            <?php
            $posts = get_posts('numberposts=10&order=DES&orderby=post_date');
            foreach ($posts as $post) : start_wp(); ?>
            <?php echo "<div id='titel'>"; the_title(); echo "</div>"; ?>
            <?php echo "<div id='datum'>"; the_date(); echo "</div> <hr />"; ?>
            <?php the_content(); ?> 
            <?php
            echo "<hr />";
            ?>
            <?php
            endforeach;
            ?> 
            </p>    
        </div>
        <br>
        <div Id="footer">
            <?php include 'footer.php'; ?>
        </div>
        </div>
    </body>
</html>
