<?php
function jankx_paginate() {
    // Create alias of paginate_links
    $pagination = paginate_links(array(
        'prev_text' => jankx_template('common/pagination/prev', array(), null, false),
        'next_text' => jankx_template('common/pagination/next', array(), null, false),
    ));
    if (!$pagination) {
        return;
    }
    return sprintf('<%1$s class="jankx-pagination">%2$s</%1$s>', 'div', $pagination);
}
