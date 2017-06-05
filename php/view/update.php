<?php
/**
 * Created by PhpStorm.
 * User: MrPiNgVi
 * Date: 26.05.2017
 * Time: 7:57
 */
?>

<div id="parameters_edit_modal-<?= $patients_id; ?>" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Изменить данные</h4>
            </div>

            <div class="portlet-body">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#edit-I-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> I </a>
                    </li>
                    <li class="">
                        <a href="#edit-II-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> II</a>
                    </li>
                    <li class="">
                        <a href="#edit-III-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> III</a>
                    </li>
                    <li class="">
                        <a href="#edit-avr-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> AVR </a>
                    </li>
                    <li class="">
                        <a href="#edit-avl-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> AVL </a>
                    </li>
                    <li class="">
                        <a href="#edit-avf-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> AVF </a>
                    </li>
                    <li class="">
                        <a href="#edit-v1-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> V1 </a>
                    </li>
                    <li class="">
                        <a href="#edit-v2-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> V2 </a>
                    </li>
                    <li class="">
                        <a href="#edit-v3-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> V3 </a>
                    </li>
                    <li class="">
                        <a href="#edit-v4-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> V4 </a>
                    </li>
                    <li class="">
                        <a href="#edit-v5-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> V5 </a>
                    </li>
                    <li class="">
                        <a href="#edit-v6-<?= $patients_id; ?>" data-toggle="tab" aria-expanded="false"> V6 </a>
                    </li>
                </ul>

                <div class="tab-content edit">
                    <div class="tab-pane fade active in" id="edit-I-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <?php
                            foreach ($db->select("SELECT * FROM `i` WHERE patients_id = $patients_id") as $value) {
                                extract($value);
                                ?>
                                <form class="form-horizontal form-row-seperated" action="../controller/php.update.data.php?patients_id=<?= $patients_id; ?>&table_name=i" method="post">
                                    <div class = "form-group">
                                        <?php
                                        foreach ($value as $key => $v) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo ' <label>' . $key . '</label>';
                                            echo '<input type="text" name="' . $key . '" value = "' . $v . '"/>';
                                            echo '</div></div>';
                                        }
                                        ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn green"><i class="fa fa-check"></i> Обновить данные</button>
                                        <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                    </div>
                                </form>
                                <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="edit-II-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <?php
                            foreach ($db->select("SELECT * FROM `ii` WHERE patients_id = $patients_id") as $value) {
                                extract($value);
                                ?>
                                <form class="form-horizontal form-row-seperated" action="../controller/php.update.data.php?patients_id=<?= $patients_id; ?>&table_name=ii" method="post">
                                    <div class = "form-group">
                                        <?php
                                        foreach ($value as $key => $v) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo ' <label>' . $key . '</label>';
                                            echo '<input type="text" name="' . $key . '" value = "' . $v . '"/>';
                                            echo '</div></div>';
                                        }
                                        ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn green"><i class="fa fa-check"></i> Обновить данные</button>
                                        <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                    </div>
                                </form>
                                <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="edit-III-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <?php
                            foreach ($db->select("SELECT * FROM `iii` WHERE patients_id = $patients_id") as $value) {
                                extract($value);
                                ?>
                                <form class="form-horizontal form-row-seperated" action="../controller/php.update.data.php?patients_id=<?= $patients_id; ?>&table_name=iii" method="post">
                                    <div class = "form-group">
                                        <?php
                                        foreach ($value as $key => $v) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo ' <label>' . $key . '</label>';
                                            echo '<input type="text" name="' . $key . '" value = "' . $v . '"/>';
                                            echo '</div></div>';
                                        }
                                        ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn green"><i class="fa fa-check"></i> Обновить данные</button>
                                        <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                    </div>
                                </form>
                                <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="edit-avr-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <?php
                            foreach ($db->select("SELECT * FROM `avr` WHERE patients_id = $patients_id") as $value) {
                                extract($value);
                                ?>
                                <form class="form-horizontal form-row-seperated" action="../controller/php.update.data.php?patients_id=<?= $patients_id; ?>&table_name=avr" method="post">
                                    <div class = "form-group">
                                        <?php
                                        foreach ($value as $key => $v) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo ' <label>' . $key . '</label>';
                                            echo '<input type="text" name="' . $key . '" value = "' . $v . '"/>';
                                            echo '</div></div>';
                                        }
                                        ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn green"><i class="fa fa-check"></i> Обновить данные</button>
                                        <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                    </div>
                                </form>
                                <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="edit-avl-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <?php
                            foreach ($db->select("SELECT * FROM `avl` WHERE patients_id = $patients_id") as $value) {
                                extract($value);
                                ?>
                                <form class="form-horizontal form-row-seperated" action="../controller/php.update.data.php?patients_id=<?= $patients_id; ?>&table_name=avl" method="post">
                                    <div class = "form-group">
                                        <?php
                                        foreach ($value as $key => $v) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo ' <label>' . $key . '</label>';
                                            echo '<input type="text" name="' . $key . '" value = "' . $v . '"/>';
                                            echo '</div></div>';
                                        }
                                        ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn green"><i class="fa fa-check"></i> Обновить данные</button>
                                        <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                    </div>
                                </form>
                                <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="edit-avf-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <?php
                            foreach ($db->select("SELECT * FROM `avf` WHERE patients_id = $patients_id") as $value) {
                                extract($value);
                                ?>
                                <form class="form-horizontal form-row-seperated" action="../controller/php.update.data.php?patients_id=<?= $patients_id; ?>&table_name=avf" method="post">
                                    <div class = "form-group">
                                        <?php
                                        foreach ($value as $key => $v) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo ' <label>' . $key . '</label>';
                                            echo '<input type="text" name="' . $key . '" value = "' . $v . '"/>';
                                            echo '</div></div>';
                                        }
                                        ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn green"><i class="fa fa-check"></i> Обновить данные</button>
                                        <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                    </div>
                                </form>
                                <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="edit-v1-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <?php
                            foreach ($db->select("SELECT * FROM `v1` WHERE patients_id = $patients_id") as $value) {
                                extract($value);
                                ?>
                                <form class="form-horizontal form-row-seperated" action="../controller/php.update.data.php?patients_id=<?= $patients_id; ?>&table_name=v1" method="post">
                                    <div class = "form-group">
                                        <?php
                                        foreach ($value as $key => $v) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo ' <label>' . $key . '</label>';
                                            echo '<input type="text" name="' . $key . '" value = "' . $v . '"/>';
                                            echo '</div></div>';
                                        }
                                        ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn green"><i class="fa fa-check"></i> Обновить данные</button>
                                        <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                    </div>
                                </form>
                                <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="edit-v2-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <?php
                            foreach ($db->select("SELECT * FROM `v2` WHERE patients_id = $patients_id") as $value) {
                                extract($value);
                                ?>
                                <form class="form-horizontal form-row-seperated" action="../controller/php.update.data.php?patients_id=<?= $patients_id; ?>&table_name=v2" method="post">
                                    <div class = "form-group">
                                        <?php
                                        foreach ($value as $key => $v) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo ' <label>' . $key . '</label>';
                                            echo '<input type="text" name="' . $key . '" value = "' . $v . '"/>';
                                            echo '</div></div>';
                                        }
                                        ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn green"><i class="fa fa-check"></i> Обновить данные</button>
                                        <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                    </div>
                                </form>
                                <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="edit-v3-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <?php
                            foreach ($db->select("SELECT * FROM `v3` WHERE patients_id = $patients_id") as $value) {
                                extract($value);
                                ?>
                                <form class="form-horizontal form-row-seperated" action="../controller/php.update.data.php?patients_id=<?= $patients_id; ?>&table_name=v3" method="post">
                                    <div class = "form-group">
                                        <?php
                                        foreach ($value as $key => $v) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo ' <label>' . $key . '</label>';
                                            echo '<input type="text" name="' . $key . '" value = "' . $v . '"/>';
                                            echo '</div></div>';
                                        }
                                        ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn green"><i class="fa fa-check"></i> Обновить данные</button>
                                        <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                    </div>
                                </form>
                                <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="edit-v4-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <?php
                            foreach ($db->select("SELECT * FROM `v4` WHERE patients_id = $patients_id") as $value) {
                                extract($value);
                                ?>
                                <form class="form-horizontal form-row-seperated" action="../controller/php.update.data.php?patients_id=<?= $patients_id; ?>&table_name=v4" method="post">
                                    <div class = "form-group">
                                        <?php
                                        foreach ($value as $key => $v) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo ' <label>' . $key . '</label>';
                                            echo '<input type="text" name="' . $key . '" value = "' . $v . '"/>';
                                            echo '</div></div>';
                                        }
                                        ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn green"><i class="fa fa-check"></i> Обновить данные</button>
                                        <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                    </div>
                                </form>
                                <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="edit-v5-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <?php
                            foreach ($db->select("SELECT * FROM `v5` WHERE patients_id = $patients_id") as $value) {
                                extract($value);
                                ?>
                                <form class="form-horizontal form-row-seperated" action="../controller/php.update.data.php?patients_id=<?= $patients_id; ?>&table_name=v5" method="post">
                                    <div class = "form-group">
                                        <?php
                                        foreach ($value as $key => $v) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo ' <label>' . $key . '</label>';
                                            echo '<input type="text" name="' . $key . '" value = "' . $v . '"/>';
                                            echo '</div></div>';
                                        }
                                        ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn green"><i class="fa fa-check"></i> Обновить данные</button>
                                        <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                    </div>
                                </form>
                                <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="edit-v6-<?= $patients_id; ?>">
                        <div class="modal-body form">
                            <?php
                            foreach ($db->select("SELECT * FROM `v6` WHERE patients_id = $patients_id") as $value) {
                                extract($value);
                                ?>
                                <form class="form-horizontal form-row-seperated" action="../controller/php.update.data.php?patients_id=<?= $patients_id; ?>&table_name=v6" method="post">
                                    <div class = "form-group">
                                        <?php
                                        foreach ($value as $key => $v) {
                                            echo '<div class="col-sm-4">';
                                            echo '<div class="input_container">';
                                            echo ' <label>' . $key . '</label>';
                                            echo '<input type="text" name="' . $key . '" value = "' . $v . '"/>';
                                            echo '</div></div>';
                                        }
                                        ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn green"><i class="fa fa-check"></i> Обновить данные</button>
                                        <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                    </div>
                                </form>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


