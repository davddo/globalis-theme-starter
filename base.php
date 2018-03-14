<!doctype html>
<html <?php language_attributes(); ?>>
    <?php get_template_part('templates/common/head'); ?>
    <body <?php body_class(); ?>>
        <?php
        get_template_part('templates/common/browsehappy');
        get_template_part('templates/common/header');
        include \ASL\WP\Wrapper\template_path();
        get_template_part('templates/common/footer');
        ?>
    </body>
</html>
