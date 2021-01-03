<?php
function jankx_paginate() {
    // Create alias of paginate_links
    ob_start();
    echo '<div class="jankx-pagination">';
    echo paginate_links(array(
        'prev_text' => jankx_template('common/pagination/next', array(), null, false),
        'next_text' => jankx_template('common/pagination/next', array(), null, false),
    ));
    echo '</div>';
    return ob_get_clean();
}
