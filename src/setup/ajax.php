<?php

namespace ASL\WP\Setup;

add_action('wp_head', __NAMESPACE__ . '\\print_ajax_url');

function print_ajax_url()
{
    ?>
    <script type="text/javascript">
        var ajaxurl = '<?php echo esc_url(admin_url('admin-ajax.php')); ?>';
    </script>
    <?php
}
