<div class="ui pointing menu center">
    <?php
    $aNavigation = include "configs/app.php";
    foreach ($aNavigation['navigation'] as $navigationKey => $navigationValue):
        ?>
        <a class="<?php echo MathedRoute($navigationKey) ? 'active' : ''; ?> item"
           href="<?= \mvcv2\Core\URL::url($navigationKey) ?>">
            <?php echo $navigationValue; ?>
        </a>

    <?php endforeach; ?>
    <div class="right menu">
        <div class="item">
            <div class="ui transparent icon input">
                <input type="text" placeholder="Search...">
                <i class="search link icon"></i>
            </div>
        </div>
    </div>
</div>