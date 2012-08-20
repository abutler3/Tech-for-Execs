<!-- Creates nav menu -->
<?php register_nav_menu( 'primary', 'Primary Menu' ); 
// End nav menu

// Adds search bar to the header
add_filter('wp_nav_menu_items','add_search_box', 10, 2);
function add_search_box($items, $args) {
 
        ob_start();
        get_search_form();
        $searchform = ob_get_contents();
        ob_end_clean();
 
        $items .= '<li>' . $searchform . '</li>';
 
    return $items;
}
// Ends add search to header

?>