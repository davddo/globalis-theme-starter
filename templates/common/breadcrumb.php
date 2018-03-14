<?php
use FPSPP\Clea\WP\Templating;

if (Templating\has_breadcrumb()) :
    $parts = Templating\get_breadcrumb_parts();
    ?>
    <div class="breadcrumbs">
        <?php
        foreach ($parts as $part) :
            $title = $part[0];
            $link  = isset($part[1]) ? $part[1] : false;

            if ($link) :
                ?>
                <a href="<?= $link ?>"><?= $title ?></a>&nbsp;&gt;&nbsp;
                <?php
            else :
                echo $title;
            endif;
        endforeach;
        ?>
    </div>
<?php
endif;
