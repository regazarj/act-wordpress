<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="http://localhost/regaza_rj/wp-content/themes/blank/css/regaza.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
     <div class="header">
        <nav>
          <ul>
              <li><a href="http://localhost/regaza_rj/home/">Home</a></li>
              <li><a href="http://localhost/regaza_rj/shop/">Shop</a></li>
              <li><a href="http://localhost/regaza_rj/contact/">Contact Us</a></li>
              <li><a href="http://localhost/regaza_rj/about/">About Us</a></li>
              <li><a href="http://localhost/regaza_rj/my-account/">Account</a></li>
          </ul>
        </nav>
        <div class="header_logo">
           <a href="http://localhost/regaza_rj/home/">
            <img src="http://localhost/regaza_rj/wp-content/uploads/2021/04/awit.png" height="300px" width="300px"></a>
        </div>
    </div>
