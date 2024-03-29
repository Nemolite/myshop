<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header(); 

/**
 * Слайдер
 */
get_template_part( 'templates/main', 'slider' ); 

/**
 * Middele row baners
 */
get_template_part( 'templates/middle', 'baners' ); 

/**
 *  Latest Products
 */
get_template_part( 'templates/latest', 'products' ); 

/**
 *  Brands
 */
get_template_part( 'templates/slider', 'brends' ); 

/**
 *  Блоки Top Sellers,  Recently Viewed,  Top New
 */
get_template_part( 'templates/products', 'sellers' ); 

get_footer();
