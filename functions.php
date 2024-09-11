<?php
    /**
     * 
     * Theme Supports
     * 
     */
    require get_template_directory() . '/inc/themesupport.php';
    
    /**
     * 
     * Custom Post Types
     * 
     */
    require get_template_directory() . '/inc/cpt.php';
    
    /**
     * 
     * enqueue scripts
     * 
     */
    require get_template_directory() . '/inc/enqueuescripts.php';

    /**
     * 
     * Misc
     * 
     */
    require get_template_directory() . '/inc/misc.php';

    /**
     * 
     * loadmore ajax
     * 
     */
    require get_template_directory() . '/inc/myajax.php';