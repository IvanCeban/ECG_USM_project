<?php
/**
 * Created by PhpStorm.
 * User: MrPiNgVi
 * Date: 26.05.2017
 * Time: 7:57
 */
?>

<div id="parameters_input_modal-<?= $patients_id; ?>" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Введите входные параметры</h4>
            </div>

            <div class="portlet-body">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#I-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> I </a>
                    </li>
                    <li class="">
                        <a href="#II-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> II</a>
                    </li>
                    <li class="">
                        <a href="#III-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> III</a>
                    </li>
                    <li class="">
                        <a href="#avr-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> AVR </a>
                    </li>
                    <li class="">
                        <a href="#avl-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> AVL </a>
                    </li>
                    <li class="">
                        <a href="#avf-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> AVF </a>
                    </li>
                    <li class="">
                        <a href="#v1-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> V1 </a>
                    </li>
                    <li class="">
                        <a href="#v2-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> V2 </a>
                    </li>
                    <li class="">
                        <a href="#v3-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> V3 </a>
                    </li>
                    <li class="">
                        <a href="#v4-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> V4 </a>
                    </li>
                    <li class="">
                        <a href="#v5-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> V5 </a>
                    </li>
                    <li class="">
                        <a href="#v6-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> V6 </a>
                    </li>
                </ul>

                <div class="tab-content insert">
                    <div class="tab-pane fade active in" id="I-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <form class="form-horizontal form-row-seperated" action="../controller/php.insert.data.php?table_name=i" method="post">
                                <div class = "form-group">
                                    <?php
                                    $counter = 0;
                                    foreach ($column_I as $value) {
                                        if ($counter++ >= 1) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo ' <label>' . $value['Field'] . '</label>';
                                            echo '<input type="text" class="form-control input-sm" name="' . $value['Field'] . '" placeholder = "' . $value['Field'] . '"/>';
                                            echo '</div></div>';
                                        }
                                    }
                                    ?>

                                </div>
                                <input type = "hidden" name = "patients_id" placeholder = "patients_id" value = "<?= $patients_id; ?>"/>
                                <div class="modal-footer">
                                    <button type="submit" class="btn green"><i class="fa fa-check"></i> Загрузить данные</button>
                                    <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="II-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <form class="form-horizontal form-row-seperated" action="../controller/php.insert.data.php?table_name=ii" method="post">
                                <div class = "form-group">
                                    <?php
                                    $counter = 0;
                                    foreach ($column_II as $value) {
                                        if ($counter++ >= 1) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo ' <label>' . $value['Field'] . '</label>';
                                            echo '<input type="text" class="form-control input-sm" name="' . $value['Field'] . '" placeholder = "' . $value['Field'] . '"/>';
                                            echo '</div></div>';
                                        }
                                    }
                                    ?>
                                </div>
                                <input type = "hidden" name = "patients_id" placeholder = "patients_id" value = "<?= $patients_id; ?>"/>
                                <div class="modal-footer">
                                    <button type="submit" class="btn green"><i class="fa fa-check"></i> Загрузить данные</button>
                                    <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="III-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <form class="form-horizontal form-row-seperated" action="../controller/php.insert.data.php?table_name=iii" method="post">
                                <div class = "form-group">
                                    <?php
                                    $counter = 0;
                                    foreach ($column_III as $value) {
                                        if ($counter++ >= 1) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo ' <label>' . $value['Field'] . '</label>';
                                            echo '<input type="text" class="form-control input-sm" name="' . $value['Field'] . '" placeholder = "' . $value['Field'] . '"/>';
                                            echo '</div></div>';
                                        }
                                    }
                                    ?>
                                </div>
                                <input type = "hidden" name = "patients_id" placeholder = "patients_id" value = "<?= $patients_id; ?>"/>
                                <div class="modal-footer">
                                    <button type="submit" class="btn green"><i class="fa fa-check"></i> Загрузить данные</button>
                                    <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="avr-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <form class="form-horizontal form-row-seperated" action="../controller/php.insert.data.php?table_name=avr" method="post">
                                <div class = "form-group">
                                    <?php
                                    $counter = 0;
                                    foreach ($column_avr as $value) {
                                        if ($counter++ >= 1) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo ' <label>' . $value['Field'] . '</label>';
                                            echo '<input type="text" class="form-control input-sm" name="' . $value['Field'] . '" placeholder = "' . $value['Field'] . '"/>';
                                            echo '</div></div>';
                                        }
                                    }
                                    ?>
                                </div>
                                <input type = "hidden" name = "patients_id" placeholder = "patients_id" value = "<?= $patients_id; ?>"/>
                                <div class="modal-footer">
                                    <button type="submit" class="btn green"><i class="fa fa-check"></i> Загрузить данные</button>
                                    <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="avl-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <form class="form-horizontal form-row-seperated" action="../controller/php.insert.data.php?table_name=avl" method="post">
                                <div class = "form-group">
                                    <?php
                                    $counter = 0;
                                    foreach ($column_avl as $value) {
                                        if ($counter++ >= 1) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo ' <label>' . $value['Field'] . '</label>';
                                            echo '<input type="text" class="form-control input-sm" name="' . $value['Field'] . '" placeholder = "' . $value['Field'] . '"/>';
                                            echo '</div></div>';
                                        }
                                    }
                                    ?>
                                </div>
                                <input type = "hidden" name = "patients_id" placeholder = "patients_id" value = "<?= $patients_id; ?>"/>
                                <div class="modal-footer">
                                    <button type="submit" class="btn green"><i class="fa fa-check"></i> Загрузить данные</button>
                                    <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="avf-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <form class="form-horizontal form-row-seperated" action="../controller/php.insert.data.php?table_name=avf" method="post">
                                <div class = "form-group">
                                    <?php
                                    $counter = 0;
                                    foreach ($column_avf as $value) {
                                        if ($counter++ >= 1) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo ' <label>' . $value['Field'] . '</label>';
                                            echo '<input type="text" class="form-control input-sm" name="' . $value['Field'] . '" placeholder = "' . $value['Field'] . '"/>';
                                            echo '</div></div>';
                                        }
                                    }
                                    ?>
                                </div>
                                <input type = "hidden" name = "patients_id" placeholder = "patients_id" value = "<?= $patients_id; ?>"/>
                                <div class="modal-footer">
                                    <button type="submit" class="btn green"><i class="fa fa-check"></i> Загрузить данные</button>
                                    <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v1-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <form class="form-horizontal form-row-seperated" action="../controller/php.insert.data.php?table_name=v1" method="post">
                                <div class = "form-group">
                                    <?php
                                    $counter = 0;
                                    foreach ($column_v1 as $value) {
                                        if ($counter++ >= 1) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo ' <label>' . $value['Field'] . '</label>';
                                            echo '<input type="text" class="form-control input-sm" name="' . $value['Field'] . '" placeholder = "' . $value['Field'] . '"/>';
                                            echo '</div></div>';
                                        }
                                    }
                                    ?>
                                </div>
                                <input type = "hidden" name = "patients_id" placeholder = "patients_id" value = "<?= $patients_id; ?>"/>
                                <div class="modal-footer">
                                    <button type="submit" class="btn green"><i class="fa fa-check"></i> Загрузить данные</button>
                                    <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v2-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <form class="form-horizontal form-row-seperated" action="../controller/php.insert.data.php?table_name=v2" method="post">
                                <div class = "form-group">
                                    <?php
                                    $counter = 0;
                                    foreach ($column_v2 as $value) {
                                        if ($counter++ >= 1) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo ' <label>' . $value['Field'] . '</label>';
                                            echo '<input type="text" class="form-control input-sm" name="' . $value['Field'] . '" placeholder = "' . $value['Field'] . '"/>';
                                            echo '</div></div>';
                                        }
                                    }
                                    ?>
                                </div>
                                <input type = "hidden" name = "patients_id" placeholder = "patients_id" value = "<?= $patients_id; ?>"/>
                                <div class="modal-footer">
                                    <button type="submit" class="btn green"><i class="fa fa-check"></i> Загрузить данные</button>
                                    <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v3-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <form class="form-horizontal form-row-seperated" action="../controller/php.insert.data.php?table_name=v3" method="post">
                                <div class = "form-group">
                                    <?php
                                    $counter = 0;
                                    foreach ($column_v3 as $value) {
                                        if ($counter++ >= 1) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo ' <label>' . $value['Field'] . '</label>';
                                            echo '<input type="text" class="form-control input-sm" name="' . $value['Field'] . '" placeholder = "' . $value['Field'] . '"/>';
                                            echo '</div></div>';
                                        }
                                    }
                                    ?>
                                    \                                                    </div>
                                <input type = "hidden" name = "patients_id" placeholder = "patients_id" value = "<?= $patients_id; ?>"/>
                                <div class="modal-footer">
                                    <button type="submit" class="btn green"><i class="fa fa-check"></i> Загрузить данные</button>
                                    <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v4-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <form class="form-horizontal form-row-seperated" action="../controller/php.insert.data.php?table_name=v4" method="post">
                                <div class = "form-group">
                                    <?php
                                    $counter = 0;
                                    foreach ($column_v4 as $value) {
                                        if ($counter++ >= 1) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo ' <label>' . $value['Field'] . '</label>';
                                            echo '<input type="text" class="form-control input-sm" name="' . $value['Field'] . '" placeholder = "' . $value['Field'] . '"/>';
                                            echo '</div></div>';
                                        }
                                    }
                                    ?>
                                </div>
                                <input type = "hidden" name = "patients_id" placeholder = "patients_id" value = "<?= $patients_id; ?>"/>
                                <div class="modal-footer">
                                    <button type="submit" class="btn green"><i class="fa fa-check"></i> Загрузить данные</button>
                                    <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v5-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <form class="form-horizontal form-row-seperated" action="../controller/php.insert.data.php?table_name=v5" method="post">
                                <div class = "form-group">
                                    <?php
                                    $counter = 0;
                                    foreach ($column_v5 as $value) {
                                        if ($counter++ >= 1) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo ' <label>' . $value['Field'] . '</label>';
                                            echo '<input type="text" class="form-control input-sm" name="' . $value['Field'] . '" placeholder = "' . $value['Field'] . '"/>';
                                            echo '</div></div>';
                                        }
                                    }
                                    ?>
                                </div>
                                <input type = "hidden" name = "patients_id" placeholder = "patients_id" value = "<?= $patients_id; ?>"/>
                                <div class="modal-footer">
                                    <button type="submit" class="btn green"><i class="fa fa-check"></i> Загрузить данные</button>
                                    <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v6-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <form class="form-horizontal form-row-seperated" action="../controller/php.insert.data.php?table_name=v6" method="post">
                                <div class = "form-group">
                                    <?php
                                    $counter = 0;
                                    foreach ($column_v6 as $value) {
                                        if ($counter++ >= 1) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo ' <label>' . $value['Field'] . '</label>';
                                            echo '<input type="text" class="form-control input-sm" name="' . $value['Field'] . '" placeholder = "' . $value['Field'] . '"/>';
                                            echo '</div></div>';
                                        }
                                    }
                                    ?>
                                </div>
                                <input type = "hidden" name = "patients_id" placeholder = "patients_id" value = "<?= $patients_id; ?>"/>
                                <div class="modal-footer">
                                    <button type="submit" class="btn green"><i class="fa fa-check"></i> Загрузить данные</button>
                                    <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

