<?php
get_header(); 
?>
<?php
$category_current = get_category( get_query_var( 'cat' ) );
if(get_cat_name($category_current->parent)=="Каталог" || $category_current->name=="Каталог"){
  require_once(__DIR__."/categories/catalogs.php");
}
if(get_cat_name($category_current->parent)=="Услуги" || $category_current->name=="Услуги"){
  require_once(__DIR__."/categories/services.php");
}
if(get_cat_name($category_current->parent)=="Портфолио" || $category_current->name=="Портфолио"){
  require_once(__DIR__."/categories/portfolios.php");
}
?>
<?php get_footer(); ?>