<?php
function jankx_paginate($need_paginate_query = null) {
    // Create alias of paginate_links
    if (!is_null($need_paginate_query)) {
        global $wp_query;
        $backup_wp_query = $wp_query;
        $wp_query = $need_paginate_query;
    }

    $pagination = paginate_links(array(
        'prev_text' => jankx_template('common/pagination/prev', array(), null, false),
        'next_text' => jankx_template('common/pagination/next', array(), null, false),
    ));

    if (!is_null($need_paginate_query)) {
        $wp_query = $backup_wp_query;
    }

    if (!$pagination) {
        return;
    }
    return sprintf('<%1$s class="jankx-pagination">%2$s</%1$s>', 'div', $pagination);
}
