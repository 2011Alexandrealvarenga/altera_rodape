<?php 
/*
Plugin Name: altera rodape
Plugin URI: www.rodape.com
Description: altera informações do rodape
Version: 1.0
Author: Alexandre
Author URI: alexandre.com
License: GLP2
Text Domain: altera informações do rodape
*/
 
 function meu_plugin_altera_rodape(){
  acho "meu primeiro plugin";
 }

 add_action('wp_footer','meu_plugin_altera_rodape');