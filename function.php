<?php

function cookworld1_enqueue_style() {
    wp_enqueue_style("cookworld-style", get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "cookworld1_enqueue_style");

?>