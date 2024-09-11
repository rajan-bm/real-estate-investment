<?php
    // print function
    function dd(...$v) {
        echo '<pre>';
        foreach ($v as $var) {
            var_dump($var);
            echo "\n";
        }
        echo '</pre>';
    }
    

   // Function to check if the user is a bot
    function is_user_bot() {
        $bots = array(
            'googlebot', 'bingbot', 'slurp', 'duckduckbot', 'baiduspider', 
            'yandex', 'sogou', 'exabot', 'facebot', 'ia_archiver'
        );
        $user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);
        foreach ($bots as $bot) {
            if (strpos($user_agent, $bot) !== false) {
                return true;
            }
        }
        return false;
    }

    // Modified track_post_views function to exclude bots
    function track_post_views($post_id) {
        if (!is_single() || is_user_bot()) return; // Exclude bots and non-single pages

        if (empty($post_id)) {
            global $post;
            $post_id = $post->ID;
        }

        $count_key = 'post_views_count';
        $count = get_post_meta($post_id, $count_key, true);

        if ($count == '') {
            $count = 1; // Start counting from 1
            add_post_meta($post_id, $count_key, $count);
        } else {
            $count++;
            update_post_meta($post_id, $count_key, $count); // Corrected line with three arguments
        }
    }
    add_action('wp_head', 'track_post_views');
