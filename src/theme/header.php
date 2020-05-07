<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
   <meta charset="<?php bloginfo( 'charset' ); ?>" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   <header id="header">
      <h1><?php bloginfo( 'name' ); ?></h1>
   </header>