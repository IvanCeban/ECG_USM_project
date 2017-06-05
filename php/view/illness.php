<?php
/**
 * Created by PhpStorm.
 * User: MrPiNgVi
 * Date: 26.05.2017
 * Time: 7:56
 */
?>

<h1>Болезни: </h1>

<ul class="nav nav-tabs">
    <?php
    foreach ($illness as $value) {
        extract($value);
        ?>

        <li><a data-toggle="tab" href="#panel-<?= $id; ?>"><?= $title; ?></a></li>
        <?php
    }
    ?>
</ul>

<div class="tab-content">
    <?php
    foreach ($illness as $value) {
        extract($value);
        ?>
        <div id="panel-<?= $id; ?>" class="tab-pane fade">
            <h2>V1:</h2> <?= $v1; ?> <br />
            <h2>V2:</h2> <?= $v2; ?> <br />
            <h2>V3:</h2> <?= $v3; ?> <br />
            <h2>V4:</h2> <?= $v4; ?> <br />
            <h2>V5:</h2> <?= $v5; ?> <br />
            <h2>V6:</h2> <?= $v6; ?> <br />
            <h2>I:</h2> <?= $i; ?> <br />
            <h2>II:</h2> <?= $ii; ?> <br />
            <h2>III:</h2> <?= $iii; ?> <br />
            <h2>AVR:</h2> <?= $avr; ?> <br />
            <h2>AVL:</h2> <?= $avl; ?> <br />
            <h2>AVF:</h2> <?= $avf; ?> <br />
        </div>
        <?php
    }
    ?>
</div>
