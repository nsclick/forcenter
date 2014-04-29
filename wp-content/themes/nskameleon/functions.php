<?php

 define ('THEME_PATH', get_theme_root() . '/nskameleon');
/**
 * Load the camoufalge
 * */
 define('ACTIVE_CAMOUFLAGE', 'forcenter');
 define('ACTIVE_CAMOUFLAGE_PATH', THEME_PATH. '/camouflage/' . ACTIVE_CAMOUFLAGE);
 require_once(ACTIVE_CAMOUFLAGE_PATH . '/functions.php');
 
 
