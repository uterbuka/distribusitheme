<?php

/**
 * @file
 * template.php
 */
 
 function distribusitheme_theme() {
  $items = array();
  // create custom user-login.tpl.php
  $items['user_login'] = array(
  'render element' => 'form',
  'path' => drupal_get_path('theme', 'distribusitheme') . '/templates',
  'template' => 'user-login',
  'preprocess functions' => array(
  'distribusitheme_preprocess_user_login'
  ),
 );
return $items;
}


