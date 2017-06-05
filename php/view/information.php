<?php
/**
 * Created by PhpStorm.
 * User: MrPiNgVi
 * Date: 26.05.2017
 * Time: 7:57
 */
?>

<div id="parameters_information_modal-<?= $patients_id; ?>" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Введите входные параметры</h4>
            </div>

            <div class="portlet-body">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#show-I-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> I </a>
                    </li>
                    <li class="">
                        <a href="#show-II-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> II</a>
                    </li>
                    <li class="">
                        <a href="#show-III-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> III</a>
                    </li>
                    <li class="">
                        <a href="#show-avr-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> AVR </a>
                    </li>
                    <li class="">
                        <a href="#show-avl-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> AVL </a>
                    </li>
                    <li class="">
                        <a href="#show-avf-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> AVF </a>
                    </li>
                    <li class="">
                        <a href="#show-v1-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> V1 </a>
                    </li>
                    <li class="">
                        <a href="#show-v2-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> V2 </a>
                    </li>
                    <li class="">
                        <a href="#show-v3-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> V3 </a>
                    </li>
                    <li class="">
                        <a href="#show-v4-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> V4 </a>
                    </li>
                    <li class="">
                        <a href="#show-v5-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> V5 </a>
                    </li>
                    <li class="">
                        <a href="#show-v6-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> V6 </a>
                    </li>
                </ul>

                <div class="tab-content show">
                    <div class="tab-pane fade active in" id="show-I-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <div class="form-horizontal form-row-seperated">
                                <div class = "form-group">
                                    <?php
                                    foreach ($db->select("SELECT * FROM `i` WHERE patients_id = $patients_id") as $value) {
                                        foreach ($value as $key => $v) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo '<b>' . $key . ': </b>' . $v;
                                            echo '</div></div>';
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="show-II-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <div class="form-horizontal form-row-seperated">
                                <div class = "form-group">
                                    <?php
                                    foreach ($db->select("SELECT * FROM `ii` WHERE patients_id = $patients_id") as $value) {
                                        foreach ($value as $key => $v) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo '<b>' . $key . ': </b>' . $v;
                                            echo '</div></div>';
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="show-III-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <div class="form-horizontal form-row-seperated">
                                <div class = "form-group">
                                    <?php
                                    foreach ($db->select("SELECT * FROM `iii` WHERE patients_id = $patients_id") as $value) {
                                        foreach ($value as $key => $v) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo '<b>' . $key . ': </b>' . $v;
                                            echo '</div></div>';
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="show-avr-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <div class="form-horizontal form-row-seperated">
                                <div class = "form-group">
                                    <?php
                                    foreach ($db->select("SELECT * FROM `avr` WHERE patients_id = $patients_id") as $value) {
                                        foreach ($value as $key => $v) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo '<b>' . $key . ': </b>' . $v;
                                            echo '</div></div>';
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="show-avl-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <div class="form-horizontal form-row-seperated">
                                <div class = "form-group">
                                    <?php
                                    foreach ($db->select("SELECT * FROM `avl` WHERE patients_id = $patients_id") as $value) {
                                        foreach ($value as $key => $v) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo '<b>' . $key . ': </b>' . $v;
                                            echo '</div></div>';
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="show-avf-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <div class="form-horizontal form-row-seperated">
                                <div class = "form-group">
                                    <?php
                                    foreach ($db->select("SELECT * FROM `avf` WHERE patients_id = $patients_id") as $value) {
                                        foreach ($value as $key => $v) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo '<b>' . $key . ': </b>' . $v;
                                            echo '</div></div>';
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="show-v1-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <div class="form-horizontal form-row-seperated">
                                <div class = "form-group">
                                    <?php
                                    foreach ($db->select("SELECT * FROM `v1` WHERE patients_id = $patients_id") as $value) {
                                        foreach ($value as $key => $v) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo '<b>' . $key . ': </b>' . $v;
                                            echo '</div></div>';
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="show-v2-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <div class="form-horizontal form-row-seperated">
                                <div class = "form-group">
                                    <?php
                                    foreach ($db->select("SELECT * FROM `v2` WHERE patients_id = $patients_id") as $value) {
                                        foreach ($value as $key => $v) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo '<b>' . $key . ': </b>' . $v;
                                            echo '</div></div>';
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="show-v3-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <div class="form-horizontal form-row-seperated">
                                <div class = "form-group">
                                    <?php
                                    foreach ($db->select("SELECT * FROM `v3` WHERE patients_id = $patients_id") as $value) {
                                        foreach ($value as $key => $v) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo '<b>' . $key . ': </b>' . $v;
                                            echo '</div></div>';
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="show-v4-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <div class="form-horizontal form-row-seperated">
                                <div class = "form-group">
                                    <?php
                                    foreach ($db->select("SELECT * FROM `v4` WHERE patients_id = $patients_id") as $value) {
                                        foreach ($value as $key => $v) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo '<b>' . $key . ': </b>' . $v;
                                            echo '</div></div>';
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="show-v5-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <div class="form-horizontal form-row-seperated">
                                <div class = "form-group">
                                    <?php
                                    foreach ($db->select("SELECT * FROM `v5` WHERE patients_id = $patients_id") as $value) {
                                        foreach ($value as $key => $v) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo '<b>' . $key . ': </b>' . $v;
                                            echo '</div></div>';
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="show-v6-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <div class="form-horizontal form-row-seperated">
                                <div class = "form-group">
                                    <?php
                                    foreach ($db->select("SELECT * FROM `v6` WHERE patients_id = $patients_id") as $value) {
                                        foreach ($value as $key => $v) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo '<b>' . $key . ': </b>' . $v;
                                            echo '</div></div>';
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>