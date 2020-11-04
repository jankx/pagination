<?php
function jankx_paginate() {
    // Create alias of paginate_links
    ob_start();
    echo '<div class="jankx-pagination">';
    echo paginate_links();
    echo '</div>';
    return ob_get_clean();
}
