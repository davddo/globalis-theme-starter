<?php do_action('get_header'); ?>
<header>
    <h1><a href="<?= home_url('/') ?>" class="logo" tabindex="1"><?= __('Project', 'XX') ?></a></h1>
    <?php get_template_part('templates/nav/nav-header'); ?>
</header>
