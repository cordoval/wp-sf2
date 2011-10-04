<?php

/*
  Plugin Name: Wordpress Symfony2 Wedlock
  Version: 1.0
  Plugin URI: http://www.craftitonline.com
  Description: Wedlock your apps with Symfony2 :)
  Author: Luis Cordova - cordoval@gmail.com http://www.craftitonline.com
  Author URI: http://www.craftitonline.com
 */
use Symfony\Component\ClassLoader\UniversalClassLoader;
require_once __DIR__.'/lib/ClassLoader/UniversalClassLoader.php';

function sf2AutoLoad() {

    $loader = new UniversalClassLoader();

    $loader->registerNamespaces(array(
        'Sf2Plugins'           => __DIR__.'/src',
    ));

    $loader->registerPrefixes(array(
        'Twig_Extensions_' => __DIR__.'/lib/Twig-extensions/lib',
        'Twig_'            => __DIR__.'/lib/Twig/lib',
    ));
    $loader->register();

}

add_action('init', 'sf2AutoLoad');
?>