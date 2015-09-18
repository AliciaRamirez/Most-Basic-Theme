<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>
        <?php wp_title(" | ", TRUE, "right"); ?>
    </title>

    <?php wp_head(); ?>

</head>

<body <?php body_class()?>>
    <?php bloginfo("name");?>
    <a href="<?php echo home_url(); ?>">
       <img src="<?php echo get_template_directory_uri()."/images/placeholder.gif " ?>" alt="￼￼￼<?php bloginfo(" name "); ?>">
    </a>
        <nav class="main-navigation">
            <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
        </nav>