<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <base href="/">
  <link rel="alternate" hreflang="x-default" href="<?php echo home_url(); ?>">
  <link rel="alternate" hreflang="en" href="<?php echo home_url(); ?>/en">
  <link rel="alternate" hreflang="ru" href="<?php echo home_url(); ?>/ru">
  <link rel="alternate" hreflang="ua" href="<?php echo home_url(); ?>/ua">
  <?php
  // ENQUEUE your css and js in inc/enqueues.php

    wp_head();
	?>
</head>
<body <?php echo body_class('bg-gray-300'); ?> >
  <!-- <div class="preloader"></div> -->
  
  <header id="header" class="header" role="banner">
    <div class="hidden md:block header_top">
      <div class="container mx-auto mt-5 mb-5">
        <div class="flex justify-end">
          <div class="flex items-center mr-10">
            <div class="flex items-center mr-2">
              <img src="<?php bloginfo('template_url') ?>/img/phone.svg" alt="" width="20px" class="mr-3"><span>Телефон:</span>
            </div>
            <div>
              <?php $phones = carbon_get_theme_option('crb_phones');
              foreach ($phones as $phone): ?>
                <span><?php echo $phone['crb_phone'] ?> </span>
              <?php endforeach; ?> 
            </div>
          </div>
          <div class="flex items-center">
            <div class="flex items-center mr-2">
              <img src="<?php bloginfo('template_url') ?>/img/email.svg" alt="" width="20px" class="mr-3"> 
              <span>E-mail:</span>
            </div>
            <div>
              <?php $emails = carbon_get_theme_option('crb_emails');
              foreach ($emails as $email): ?>
                <span><?php echo $email['crb_email'] ?> </span>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header_bottom container shadow-lg text-white mx-auto p-6 mb-5">
      <div class="flex mobile_menu justify-end md:hidden mb-6 cursor-pointer">
        <span class="mobile_menu_text">Меню</span>
        <span class="mobile_menu_span"></span>
        <span class="mobile_menu_span"></span>
        <span class="mobile_menu_span"></span>
      </div>
      <div class="flex items-center justify-between flex-col md:flex-row">
        <div class="text-2xl mb-4 md:mb-0">
          <a href="<?php echo home_url(); ?>">
            <?php echo carbon_get_theme_option( 'crb_namesite' ); ?>
          </a>
        </div>
        <div>
          <div class="flex mb-1">
            <div class="w-1/2 mr-4">
              Код за ЄДРПОУ:   
            </div>
            <div class="w-1/2">
              <?php echo carbon_get_theme_option( 'crb_edrpoy' ); ?>
            </div>  
          </div>
          <div class="flex">
            <div class="w-1/2 mr-4">
              Юридична адреса:
            </div>
            <div class="w-1/2">
              <?php echo carbon_get_theme_option( 'crb_uraddress' ); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="mobile_menu_cover block md:hidden shadow-lg py-6 px-4">
    <?php get_template_part('blocks/sidebar') ?>
  </div>
  <section id="content" role="main">