<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> <?php the_title(); ?> </title>

    <meta name="description" content="<?php bloginfo('description'); ?>"/>

    <link rel="profile" href="http://gmpg.org/xfn/11">

    <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/assets/images/favicon.ico">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/style.css">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> data-urlBody="<?php bloginfo('url') ?>">
<main>
    <header >

      <div class="logo">
        <figure >
            <a href="<?php bloginfo('url') ?>"><img src="<?php  bloginfo('template_url') ?>/assets/images/logo.jpg" alt=""></a>
        </figure>
      ></div>
        <div class='space'></div>

        <div class="content">

           <div class="goal">

             <figure>
                 <a href="<?php bloginfo('url') ?>"><img src="<?php  bloginfo('template_url') ?>/assets/images/hambregol.png" alt=""></a>
             </figure>
            </div>

            <div class="form">
               <?php echo do_shortcode("[contact-form-7 id=\"10\" title=\"contact\"]"); ?>
            </div>
        </div>

    </header>

