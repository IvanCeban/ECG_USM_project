﻿<?php
    include_once '../controller/php.select.data.php';
?>

<!-- HEADER -->

<?php include_once 'header.php';?>

    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar-wrapper">
            <div class="page-sidebar navbar-collapse collapse">
                <!-- BEGIN SIDEBAR MENU -->
                <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-closed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <li class="sidebar-toggler-wrapper hide">
                        <div class="sidebar-toggler">
                            <span></span>
                        </div>
                    </li>
                    <!-- END SIDEBAR TOGGLER BUTTON -->
                    <li class="heading">
                        <h3 class="uppercase">Pages</h3>
                    </li>
                    <li class="nav-item start active open">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-home"></i>
                            <span class="title">Homepage</span>
                            <span class="selected"></span>
                            <!--<span class="arrow open"></span>-->
                        </a>
                        <!--<ul class="sub-menu">-->
                        <!--<li class="nav-item start active open">-->
                        <!--<a href="index.html" class="nav-link ">-->
                        <!--<i class="icon-bar-chart"></i>-->
                        <!--<span class="title">Page 1</span>-->
                        <!--<span class="selected"></span>-->
                        <!--</a>-->
                        <!--</li>-->
                        <!--<li class="nav-item start ">-->
                        <!--<a href="#" class="nav-link ">-->
                        <!--<i class="icon-bulb"></i>-->
                        <!--<span class="title">Page 2</span>-->
                        <!--</a>-->
                        <!--</li>-->
                        <!--<li class="nav-item start ">-->
                        <!--<a href="#" class="nav-link ">-->
                        <!--<i class="icon-graph"></i>-->
                        <!--<span class="title">page 3</span>-->
                        <!--</a>-->
                        <!--</li>-->
                        <!--</ul>-->
                    </li>
                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
        </div>
        <!-- END SIDEBAR -->

        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                <!-- BEGIN PAGE BAR -->
                <div class="page-bar">
                    <!--<ul class="page-breadcrumb">-->
                    <!--<li>-->
                    <!--<a href="index.html">Homepage</a>-->
                    <!--<i class="fa fa-circle"></i>-->
                    <!--</li>-->
                    <!--</ul>-->
                    <div class="page-toolbar">
                        <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                            <i class="icon-calendar"></i>&nbsp;
                            <span class="thin uppercase hidden-xs"></span>&nbsp;
                            <i class="fa fa-angle-down"></i>
                        </div>
                    </div>
                </div>
                <!-- END PAGE BAR -->

                <!-- BEGIN PAGE TITLE-->
                <div class="row">
                    <div class="col-xs-9">
                        <h1 class="page-title">
                            ECG
                            <small>simulation, charts, comparing</small>
                        </h1>
                    </div>
                    <div class="col-xs-3">
                        <div class="jke-ecgChart"></div>
                    </div>
                </div>
                <!-- END PAGE TITLE-->


                <!-- BEGIN CHART SECTION-->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-heartbeat"></i>
                                    <span class="caption-subject font-dark bold uppercase">ЭКГ пациента</span>
                                    <span class="caption-helper">
                                        <?php
                                            if(!empty($_GET['patients_name'])) {
                                                echo $_GET['patients_name'];
                                            } else {
                                                echo 'No name';
                                            }
                                        ?>
                                    </span>
                                </div>
                                <div class="tools">
                                    <a href="" class="collapse"> </a>
                                </div>
                            </div>

                            <div class="portlet-body">
                                <h2>Ответвление I</h2>
                                <div id="chart-I"></div>
                                <h2>Ответвление II</h2>
                                <div id="chart-II"></div>
                                <h2>Ответвление III</h2>
                                <div id="chart-III"></div>

                                <h2>Ответвление AVR</h2>
                                <div id="chart-avr"></div>
                                <h2>Ответвление AVL</h2>
                                <div id="chart-avl"></div>
                                <h2>Ответвление AVF</h2>
                                <div id="chart-avf"></div>

                                <h2>Ответвление V1</h2>
                                <div id="chart-v1"></div>
                                <h2>Ответвление V2</h2>
                                <div id="chart-v2"></div>
                                <h2>Ответвление V3</h2>
                                <div id="chart-v3"></div>
                                <h2>Ответвление V4</h2>
                                <div id="chart-v4"></div>
                                <h2>Ответвление V5</h2>
                                <div id="chart-v5"></div>
                                <h2>Ответвление V6</h2>
                                <div id="chart-v6"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CHART SECTION-->

                <!-- BEGIN TABLE PORTLET-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption font-dark">
                                    <i class="fa fa-users"></i>
                                    <span class="caption-subject bold uppercase"> Список пациентов</span>
                                </div>
                                <div class="tools">
                                    <a href="" class="collapse"> </a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-toolbar">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="btn-group">
                                                <a href="#user_data" role="button" class="btn btn-primary" data-toggle="modal"><i class="fa fa-plus"></i> Добавить</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                    <thead>
                                    <tr>
                                        <th> № </th>
                                        <th> Ф.И.О </th>
                                        <th> Статус </th>
                                        <th> Пол </th>
                                        <th> Возраст </th>
                                        <th> Профессия </th>
                                        <th> Дата рождения </th>
                                        <th> Действия </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $counter = 1;
                                             foreach ($patients as $value) {
                                                 extract($value);
                                                 ?>
                                                    <tr class="odd gradeX">
                                                        <td><?= $counter++; ?></td>
                                                        <td><?= $name; ?></td>
                                                        <td><span class="label label-sm label-success"><?= $status; ?></span></td>
                                                        <td><?= $sex; ?></td>
                                                        <td><?= $age; ?></td>
                                                        <td><?= $prof; ?></td>
                                                        <td><?= $date_birth; ?></td>
                                                        <td>
                                                             <div class="btn-group">
                                                                 <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Действия
                                                                     <i class="fa fa-angle-down"></i>
                                                                 </button>
                                                                 <ul class="dropdown-menu pull-left" role="menu">
                                                                     <li>
                                                                         <a href="#parameters_input_modal-<?= $patients_id; ?>" role="button" data-toggle="modal">
                                                                             <i class="fa fa-plus"></i> Добавить параметры экг </a>
                                                                     </li>
                                                                     <li>
                                                                         <a href="#parameters_edit_modal-<?= $patients_id; ?>" role="button" data-toggle="modal">
                                                                             <i class="icon-pencil"></i></i> Редактировать </a>
                                                                     </li>
                                                                     <li>
                                                                         <a href="index.php?patients_id=<?= $patients_id; ?>&patients_name=<?= $name; ?>">
                                                                             <i class="icon-heart"></i> Отобразить ЭКГ </a>
                                                                     </li>
                                                                     <li>
                                                                         <a href="#parameters_information_modal-<?= $patients_id; ?>" role="button" data-toggle="modal">
                                                                             <i class="icon-doc"></i> Просмотреть данные пациента </a>
                                                                     </li>
                                                                     <li>
                                                                         <a href="../controller/php.delete.data.php?patients_id=<?= $patients_id; ?>&table_name=patients,i,ii,iii,v1,v2,v3,v4,v5,v6,avr,avl,avf">
                                                                             <i class="icon-close"></i> Удалить пациента </a>
                                                                     </li>
                                                                 </ul>
                                                             </div>
                                                        </td>
                                                    </tr>
                                                 <?php
                                             }
                                        ?>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <?php foreach($patients as $value) {
                    extract($value);
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

                <?php
                    }
                ?>

                <div id="user_data" class="modal fade" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Введите данные пациента</h4>
                            </div>
                            <div class="modal-body form">
                                <form action="../controller/php.add.user.data.php?table_name=patients" class="form-horizontal form-row-seperated" method = "post">
                                    <div class="form-group">
                                        <?php
                                        $counter = 0;
                                        foreach ($column_patients as $value) {
                                            if ($counter++ >= 1) {

                                                echo '<div class="col-sm-4">';
                                                echo '<div class="input_container">';
                                                echo '<label>' . $value['Field'] . '</label>';
                                                echo '<input class = "form-control input-sm" placeholder = "' . $value['Field'] . '" type="text" name="' . $value['Field'] . '" placeholder = "' . $value['Field'] . '"/>';
                                                echo '</div></div>';
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Закрыть</button>
                                        <button type="submit" class="btn green">
                                            <i class="fa fa-check"></i> Добавить</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- END TABLE PORTLET-->

                <div class="row">
                    <div class="col-xs-12">
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption font-dark">
                                    <i class="fa fa-medkit"></i>
                                    <span class="caption-subject bold uppercase">Болезни сердца</span>
                                </div>
                                <div class="tools">
                                    <a href="" class="collapse"> </a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab_1" data-toggle="tab" aria-expanded="false"> Болезни миокарда </a>
                                    </li>
                                    <li class="">
                                        <a href="#tab_2" data-toggle="tab" aria-expanded="false"> Артериальная гипертензия и гипотензия </a>
                                    </li>
                                    <li class="">
                                        <a href="#tab_3" data-toggle="tab" aria-expanded="false"> Ишемическая болезнь </a>
                                    </li>
                                    <li class="">
                                        <a href="#tab_4" data-toggle="tab" aria-expanded="false"> Болезни перикарда </a>
                                    </li>
                                    <li class="">
                                        <a href="#tab_5" data-toggle="tab" aria-expanded="false"> Болезни эндокарда </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Пороки сердца
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="">
                                                <a href="#tab_6" tabindex="-1" data-toggle="tab" aria-expanded="false"> Приобретенные </a>
                                            </li>
                                            <li class="">
                                                <a href="#tab_7" tabindex="-1" data-toggle="tab" aria-expanded="false"> Врожденные </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="tab_1">
                                        <p>
                                            <b>Миокарди́т</b> — поражение сердечной мышцы, миокарда. Обычно поражения носят воспалительный характер.
                                        </p>
                                        <p>
                                            <b>Причины, приводящие к миокардиту</b><br><br>
                                            Миокардит может возникнуть при любом инфекционном заболевании, но в настоящее время миокардит чаще всего наблюдается при вирусных инфекциях. К неинфекционным факторам, вызывающим миокардит, относятся некоторые лекарственные средства (антибиотики, сульфаниламиды, метилдопа и др.), сыворотки и вакцины. Миокардиты возникают и при системных заболеваниях соединительной ткани, например, при системной красной волчанке и других системных васкулитах.<br><br>
                                            Среди причин воспаления миокарда особое место отводят ревматизму, при котором миокардит является одним из основных проявлений болезни наряду с сочетанием с эндокардитом и перикардитом.
                                        </p>
                                        <p>
                                            В зависимости от причины, вызывающей миокардит, различают:
                                        </p>
                                        <ul>
                                            <li>
                                                ревматический;
                                            </li>
                                            <li>
                                                инфекционный (вирусный, бактериальный, риккетсиозный и др., в том числе при гриппе, кори, краснухе, ветряной оспе, дифтерии, скарлатине, тяжелой пневмонии, сепсисе; наиболее распространенный - вирус Коксаки В, является побудителем возникновения миокардита в половине заболеваний);
                                            </li>
                                            <li>
                                                аллергический (лекарственный, сывороточный, поствакцинальный);
                                            </li>
                                            <li>
                                                при диффузных (системных) заболеваниях соединительной ткани, травмах, ожогах, воздействии ионизирующей радиации;
                                            </li>
                                            <li>
                                                идиопатический (то есть невыясненной природы) миокардит Абрамова-Фидлера.
                                            </li>
                                        </ul>
                                        <p>
                                            Ведущая роль в развитии воспалительного процесса принадлежит аллергии и нарушению иммунитета.
                                        </p>
                                        <p>
                                            <b>Как проявляется миокардит?</b><br><br>
                                            Миокардиты могут быть как изолированными (первичными), так и проявлением другого заболевания (вторичными).<br><br>
                                            По течению различают острый, подострый и хронический миокардит и рецидивирующий (с наличием ремиссий - улучшений по нескольку месяцев или лет). Воспалительный процесс в миокарде приводит к нарушению основных его функций.
                                        </p>
                                        <p>
                                            <b>Общее для всех видов миокардитов</b><br><br>
                                            Часто миокардит протекает без выраженных симптомов и распознается иногда только после обнаружения изменений на ЭКГ. В клинически выраженных случаях характерны жалобы больных на разнообразные по характеру, длительные, не связанные с физической нагрузкой боли в области сердца, слабость, повышенную утомляемость, одышку и сердцебиение при физической нагрузке, перебои в работе сердца. Температура тела может быть нормальной, но чаще отмечается незначительное увеличение до 37-37,90С.
                                        </p>
                                        <p>
                                            <b>Профилактика</b><br><br>
                                            Профилактика заключается в предупреждении и своевременном эффективном лечении инфекционных болезней. Необходима санация очагов хронической инфекции лечение хронического тонзиллита, пародонтита, кариеса. В профилактике сывороточного и лекарственного миокардита решающее значение имеет строгое обоснование показаний к применению сывороток и лекарственных средств с учетом противопоказаний, особенно при наличии аллергии в анамнезе.
                                        </p>
                                        <p>
                                            <b>Что зависит от пациента?</b><br><br>
                                            Если у пациента молодого возраста или у ребенка, ранее не имевшего проблем с сердцем, на фоне инфекции или после нее возникают боли и дискомфорт в области сердца, перебои в работе сердца, необходимо немедленно обратиться к кардиологу для получения необходимого лечения.<br><br>
                                            Людям пожилого возраста, страдающими какими-либо заболеваниями сердца, у которых внезапно появляются перебои в работе сердца, боли в области сердца, которые не уменьшаются на фоне приема обычно эффективных лекарств, также необходимо обратиться к кардиологу.
                                        </p>
                                        <p>
                                            <b>Что зависит от врача?</b><br><br>
                                            Нет строго специфических признаков миокардита. Диагноз ставят на основании клинических признаков, изменений электрокардиограммы, эхокардиографии, наличии лабораторных признаков воспаления, изменений на рентгенограммах.<br><br>
                                            Обычно при миокардите показана госпитализация. Меры общего характера включают постельный режим, ограничение физической нагрузки, при необходимости ингаляции кислорода и лекарственная терапия.<br><br>
                                            Лекарственная терапия зависит от основного заболевания и характера нарушений сердечной деятельности. При инфекционных невирусных миокардитах назначают антибиотики, выбор которых зависит от выделенного возбудителя и его чувствительности к антибиотикам.<br><br>
                                            Другие направления включают лечение сердечной недостаточности, нарушений ритма сердца и проводимости, тромбоэмболических осложнений. В первые месяцы после выписки из стационара больные, перенесшие миокардит, должны находиться под наблюдением; необходимо ограничивать физические нагрузки.
                                        </p>
                                        <form action="index.php?ill_id=1&patients_id=<?php if(!empty($_GET['patients_id'])){echo $_GET['patients_id'];} ?>&patients_name=<?php if(!empty($_GET['patients_name'])){echo $_GET['patients_name'];} ?>" method="post">
                                            <button type="submit" class="btn btn-primary">Сравнить</button>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="tab_2">
                                        <p>
                                            <b>Артериа́льная гипертензи́я</b> (АГ, гипертония, гипертоническая болезнь; др.-греч. ὑπέρ — «над, выше» + др.-греч. τόνος — «натяжение; тон») — стойкое повышение артериального давления от 140/90 мм рт. ст. и выше[1]. Эссенциальная гипертензия (гипертоническая болезнь) составляет 90—95 % случаев гипертонии. В остальных случаях диагностируют вторичные, симптоматические артериальные гипертензии: почечные (нефрогенные) — 3—4 %, эндокринные — 0,1—0,3 %, гемодинамические, неврологические, стрессовые, обусловленные приёмом некоторых веществ (ятрогенные) и АГ беременных, при которых повышение давления крови является одним из симптомов основного заболевания. Среди ятрогенных гипертензий особо выделяются вызванные приёмом биологически активных добавок и лекарств. У женщин, принимающих гормональные контрацептивы, чаще развивается АГ (особенно это заметно у женщин с ожирением, у курящих женщин и пожилых женщин). При развитии АГ на фоне приёма этих препаратов и биологически активных добавок их следует отменить. Решение об отмене других лекарственных препаратов принимается врачом. АГ, не вызванная оральными контрацептивами, не является противопоказанием к заместительной гормональной терапии у постменопаузальных женщин. Однако при начале гормональной заместительной терапии АД (артериальное давление) следует контролировать чаще, так как возможно его повышение.<br>
                                            Артериальная гипертензия — одно из самых распространённых заболеваний сердечно-сосудистой системы. Установлено, что артериальной гипертонией страдают 20—30 % взрослого населения. С возрастом распространённость болезни увеличивается и достигает 50—65 % у лиц старше 65 лет.<br>
                                            Возникновению гипертонической болезни способствуют более 20 комбинаций в генетическом коде человека.
                                        </p>
                                        <p>
                                            Полностью вылечить это заболевание невозможно, однако артериальное давление можно держать под контролем. Повышенное давление один из трех факторов риска ишемической болезни сердца, которые можно контролировать (риск в данном случае подразумевает не только то, как высоко поднимается давление, но и время, в течение которого наблюдается повышенное давление). Своевременный контроль над давлением поможет снизить риск заболеваний почек. Чем раньше вы выявили артериальную гипертензию и начали за ней наблюдать в динамике, тем меньше риск развития осложнений гипертонической болезни в будущем.
                                        </p>
                                        <p>
                                            <br>
                                            <b>Причины</b><br><br>
                                            Причины артериальной гипертонии остаются неизвестными в 90% случаев. Тем не менее, известны определенные факторы, увеличивающие риск развития артериальной гипертензии:
                                        </p>
                                        <ul>
                                            <li>
                                                возраст (с возрастом стенки крупных артерий становятся более ригидными, а из-за этого повышается сопротивление сосудов кровотоку, следовательно, повышается давление);
                                            </li>
                                            <li>
                                                наследственная предрасположенность;
                                            </li>
                                            <li>
                                                пол (чаще артериальной гипертонией страдают мужчины);
                                            </li>
                                            <li>
                                                курение;
                                            </li>
                                            <li>
                                                чрезмерное употребление алкоголя, соли, ожирение, недостаточная физическая активность;
                                            </li>
                                            <li>
                                                чрезмерная подверженность стрессам;
                                            </li>
                                            <li>
                                                заболевания почек;
                                            </li>
                                            <li>
                                                повышенный уровень адреналина в крови;
                                            </li>
                                            <li>
                                                врожденные пороки сердца;
                                            </li>
                                            <li>
                                                регулярный прием некоторых лекарственных средств (например, по некоторым данным регулярный прием пероральных контрацептивов);
                                            </li>
                                            <li>
                                                поздние токсикозы беременных (осложнение течения беременности).<br>
                                            </li>
                                        </ul>
                                        <p>
                                            <br>
                                            <b>Симптомы артериальной гипертензия</b><br><br>
                                            Повышение артериального давления может не сопровождаться никакими симптомами и выявляться случайно, при измерении артериального давления. В некоторых случаях возможно появление головной боли, головокружения, мелькания мушек перед глазами.
                                        </p>
                                        <p>
                                            <br>
                                            <b>Осложнения</b><br>
                                        </p>
                                        <ul>
                                            <li>
                                                инсульт;
                                            </li>
                                            <li>
                                                инфаркт;
                                            </li>
                                            <li>
                                                нарушения зрения;
                                            </li>
                                            <li>
                                                сердечная недостаточность;
                                            </li>
                                            <li>
                                                почечная недостаточность.
                                            </li>
                                        </ul>
                                        <p>
                                            <br>
                                            <b>Что зависит от пациента</b><br><br>
                                            Снизить артериальное давление и тем самым снизить риск ишемической болезни сердца можно следующими способами:<br><br>
                                            Если вы страдаете от избыточного веса, следует сбросить его хотя бы частично, поскольку излишний вес повышает риск развития гипертонии. Похудев на 3-5 кг, вы сможете снизить давление и в последующем хорошо контролировать его. Добившись более низкого веса, вы сможете также снизить уровень холестерина, триглицеридов и сахара в крови. Нормализация веса остается по-прежнему самым эффективным безмедикаментозным методом контроля давления.<br><br>
                                            Регулярно делайте зарядку. Регулярные упражнения на свежем воздухе, такие как ходьба, бег, езда на велосипеде, плавание могут предотвратить повышение артериального давления. Более энергичная физическая активность поможет также снизить вес и уменьшить влияние стресса на организм. Специалисты рекомендуют делать зарядку от 30 до 60 минут 3-5 раз в неделю.<br><br>
                                            Следите за тем, чтобы пища была не очень соленая. Следует ограничить суточное потребление соли до 2,4 мг. Добиться этого можно, если меньше солить пищу, отказаться от употребления консервов, полуфабрикатов, продуктов быстрого питания.<br><br>
                                            Ограничьте употребление алкоголя. Замечено, что у людей, чрезмерно употребляющих спиртное, чаще наблюдается гипертония, прибавка в весе, что делает контроль артериального давления затруднительным. Лучше всего не пейте алкогольные напитки вообще или ограничьте употребление до двух напитков в день для мужчин и одного для женщин. Под словом «напиток» в данном случае подразумевается, например, 350 мл пива, 120 мл вина или 30 мл 100-градусного ликера.<br><br>
                                            Употребляйте больше калия, поскольку таким образом можно также снизить артериальное давление. Источниками калия являются различные фрукты и овощи. Желательно есть не менее пяти порций овощных или фруктовых салатов, десертов в день.<br><br>
                                            Крайне важно бросить курить, т.к. курение само по себе хотя и не вызывает артериальную гипертонию, но тем не менее является значительным риском ишемической болезни сердца.<br><br>
                                            Пища должна быть не очень жирная. Наблюдения показывают, что маложирная диета помогает снизить уровень холестерина в крови и тем самым снизить риск заболевания коронарных сосудов. К тому же маложирная диета способствует похудению.<br><br>
                                            Если ваш врач прописал какое-либо гипотензивное лекарство, принимайте строго так, как говорит вам врач. О любых побочных реакциях и нежелательных эффектах сообщайте врачу. Не прекращайте прием лекарств, не посоветовавшись с врачом.<br><br>
                                            Регулярно посещайте врача. После того, как вы добились желаемого эффекта, и давление снизилось, необходимо постоянно контролировать его. К сожалению, нет каких-либо четких внешних признаков, по которым вы бы могли понять, что давление снова повышается. Рекомендуют регулярно измерять артериальное давление дома и посещать врача, по крайней мере, раз в год (для контроля общего состояния и эффективности проводимой терапии).
                                        </p>
                                        <p>
                                            <br>
                                            <b>Что зависит от врача</b><br><br>
                                            Врач должен установить диагноз, провести дополнительное обследование (проверить состояние глазного дна, функцию почек, исследовать сердце), может назначить антигипертензивную терапию, выявить возможные осложнения. Обычно пациента с впервые выявленной артериальной гипертензией госпитализируют для проведения всех необходимых исследований и подбора терапии. Выделяют различные степени тяжести артериальной гипертензии (это определяется как цифрами артериального давления, так и наличием различных осложнений).<br><br>
                                            Итак, если вам поставили диагноз артериальной гипертензии, то вам следует:<br><br>
                                            - обязательно принимать все препараты, которые назначил врач (соблюдайте рекомендации врача и обязательно прочитайте инструкцию);<br><br>
                                            - принимать лекарства в одно и то же время дня;<br><br>
                                            - никогда не пропускайте прием лекарств из-за того, что ваше давление в норме. Лучше обсудите ваши наблюдения с врачом.<br><br>
                                            - обязательно пополняйте запас лекарств до того, как они заканчиваются.<br><br>
                                            Не прекращайте прием препаратов, если показатели давления стали нормальными. Они стали нормальными именно потому, что вы принимаете медикаменты.
                                        </p>
                                        <p>
                                            <br>
                                            <b>Профилактика артериальной гипертензии</b><br><br>
                                            Если у членов вашей семьи наблюдается артериальная гипертензия (гипертоническая болезнь), или вы старше 30 лет, регулярно измеряйте давление. Откажитесь от курения, употребления спиртных напитков. Соблюдайте маложирную и малосоленую диету. Делайте зарядку, желательно на свежем воздухе (езда на велосипеде, бег, активная ходьба). Старайтесь избегать стрессов, научитесь преодолевать стрессовые ситуации. Поддерживайте нормальный вес тела.
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="tab_3">
                                        <p>
                                            <b>Ишемическая болезнь сердца (ИБС)</b> – болезнь, которая развивается при недостаточном поступлении кислорода к сердечной мышце по коронарным артериям. Наиболее частая причина этого – атеросклероз коронарных артерий с образованием бляшек и сужением их просвета. Может протекать остро и хронически (длительно). Проявлениями ИБС могут быть: стенокардия, инфаркт миокарда, аритмии сердца, а также внезапная сердечная смерть.
                                        </p>
                                        <p>
                                            <br>
                                            <b>Распространенность</b> <br><br>
                                            В развитых странах ишемическая болезнь сердца стала самой частой причиной смерти и инвалидности — на ее долю приходится около 30 процентов смертности. Она намного опережает другие заболевания в качестве причины внезапной смерти и встречается у каждой третьей женщины и у половины мужчин. Такая разница обусловлена тем, что женские половые гормоны являются одним из средств защиты от атеросклеротического поражения сосудов. В связи с изменением гормонального фона при климаксе вероятность инфаркта у женщин после менопаузы значительно возрастает.
                                        </p>
                                        <p>
                                            <br>
                                            <b>Формы</b><br><br>
                                            В зависимости от того, насколько выражено кислородное голодание сердца, как долго оно длится, и как быстро возникло, выделяют несколько форм ишемической болезни сердца.
                                        </p>
                                        <ul>
                                            <li>
                                                <i>Бессимптомная, или «немая» форма ИБС</i> – не вызывает жалоб со стороны больного.
                                            </li>
                                            <li>
                                                <i>Стенокардия напряжения</i> — хроническая форма, проявляется одышкой и болью за грудиной при физической нагрузке и стрессе, при действии некоторых других факторов.
                                            </li>
                                            <li>
                                                <i>Нестабильная стенокардия</i> – любой приступ стенокардии, заметно превосходящий по силе предыдущие или сопровождающийся новыми симптомами. Такие усиливающиеся приступы свидетельствуют об ухудшении течения болезни и могут быть предвестниками инфаркта миокарда.
                                            </li>
                                            <li>
                                                <i>Аритмическая форма</i> – проявляется нарушениями сердечного ритма, чаще всего мерцательной аритмией. Возникает остро и может перейти в хроническую.
                                            </li>
                                            <li>
                                                <i>Инфаркт миокарда</i> — острая форма, отмирание участка сердечной мышцы, вызванное чаще всего отрывом бляшки от стенки коронарной артерии или тромбом и полной закупоркой ее просвета.
                                            </li>
                                            <li>
                                                <i>Внезапная сердечная смерть</i> — остановка сердца, в большинстве случаев, вызванная резким уменьшением количества поставляемой к нему крови в результате полной закупорки большой артерии.
                                            </li>
                                        </ul>
                                        <p>
                                            Эти формы могут сочетаться и накладываться одна на другую. Например, к стенокардии часто присоединяется аритмия, а затем происходит инфаркт.
                                        </p>
                                        <p>
                                            <br>
                                            <b>Причины и механизм развития</b><br><br>
                                            Несмотря на то, что сердце в организме перекачивает кровь, оно само нуждается в кровоснабжении. Сердечная мышца (миокард) получает кровь по двум артериям, которые отходят от корня аорты и носят название коронарных (из-за того, что они огибают сердце как будто короной). Далее эти артерии разделяются на несколько более мелких ветвей, каждая из которых питает свой участок сердца.<br><br>
                                            Больше артерий, приносящих кровь к сердцу, нет. Поэтому при сужении просвета или закупорке одной из них, участок сердечной мышцы испытывает недостаток кислорода и питательных веществ, развивается болезнь.<br><br>
                                            Основной причиной ИБС в настоящее время считается атеросклероз коронарных артерий с отложением в них холестериновых бляшек и сужением просвета артерии (коронарная болезнь). В результате кровь не может в достаточном объеме поступать к сердцу.<br><br>
                                            Поначалу недостаток кислорода проявляется только во время повышенной нагрузки, например при беге или быстрой ходьбе с грузом. Появляющиеся при этом боли за грудиной носят название стенокардии напряжения. По мере сужения просвета коронарных артерий и ухудшения метаболизма сердечной мышцы боли начинают появляться при все более низкой нагрузке, а в конце концов и в покое.<br><br>
                                            Одновременно со стенокардией напряжения может развиваться хроническая сердечная недостаточность, проявляющаяся отеками и одышкой.<br><br>
                                            При внезапном разрыве бляшки может наступить полное перекрытие просвета артерии, инфаркт миокарда, остановка сердца и смерть. Степень поражения сердечной мышцы при этом зависит от того, в какой артерии или разветвлении произошла закупорка – чем крупнее артерия, тем хуже последствия.<br><br>
                                            Для того чтобы развился инфаркт миокарда, просвет артерии должен уменьшиться не менее чем на 75%. Чем медленнее и постепеннее это происходит, тем сердцу легче приспособиться. Резкая закупорка наиболее опасна и часто ведет к смерти.<br><br>
                                        </p>
                                        <p>
                                            <br>
                                            <b>Симптомы</b><br><br>
                                            В зависимости от формы болезни:
                                        </p>
                                        <ul>
                                            <li>
                                                <i>Бессимптомная форма</i> – проявлений болезни нет, выявляется только при обследовании.
                                            </li>
                                            <li>
                                                <i>Стенокардия напряжения</i> – боли за грудиной давящего характера (как будто положили кирпич), отдают в левую руку, шею. Одышка при ходьбе, подъеме по лестнице.
                                            </li>
                                            <li>
                                                <i>Аритмическая форма</i> – одышка, сильное сердцебиение, перебои в работе сердца.
                                            </li>
                                            <li>
                                                <i>Инфаркт миокарда</i> – сильные боли за грудиной, напоминающие приступ стенокардии, но более интенсивные и не снимающиеся обычными средствами.
                                            </li>
                                        </ul>
                                        <p>
                                            <br>
                                            <b>Течение и прогноз</b><br><br>
                                            Течение ишемической болезни сердца необратимое. Это значит, что не существует средств, полностью излечивающих ее. Все современные методы лечения позволяют в той или иной мере контролировать ход болезни и замедлить ее развитие, но повернуть процесс вспять они не могут.<br><br>
                                            Поражение сердца идет непрерывно и параллельно с другими органами: почками, головным мозгом, поджелудочной железой. Этот процесс называется «сердечно-сосудистый континуум», он включает в себя такие болезни как ИБС, атеросклероз, гипертоническая болезнь, инсульт, мерцательная аритмия, метаболический синдром и другие. Все эти заболевания взаимосвязаны и обусловлены общими причинами.<br><br>
                                            Кратко основные этапы сердечно-сосудистого континуума можно описать так.
                                        </p>
                                        <ul>
                                            <li>
                                                Бессимптомная стадия – факторы риска оказывают свое негативное воздействие, в сосудах сердца появляются отложения холестерина, но их просвет еще достаточно широкий.
                                            </li>
                                            <li>
                                                Появление первых предвестников – повышенное давление, сахар крови, холестерин. На этой стадии холестериновые бляшки в сосудах разрастаются и могут закрывать уже до 50% просвета. В сердечной мышце начинаются процессы ремоделирования, то есть изменения ее структуры, которые приводят к сердечной недостаточности.
                                            </li>
                                            <li>
                                                Появление и нарастание симптомов – одышка, перебои в работе сердца, боли за грудиной. На УЗИ сердца к этому моменту становится видно расширение полостей сердца, истончение сердечной мышцы. Просвет артерий еще более сужен.
                                            </li>
                                            <li>
                                                Завершающая стадия – появление застойной сердечной недостаточности, резкое ухудшение работы сердца, появление отеков, застоя в легких, резкое повышение давления, мерцательная аритмия. Боль за грудиной при малейшей нагрузке и даже в покое.
                                            </li>
                                        </ul>
                                        <p>
                                            На любой из этих стадий, но, как правило, на третьей или четвертой, может произойти инфаркт миокарда или внезапная остановка сердца. Инфаркт не обязательно приводит к смерти, но после него ишемическая болезнь всегда ускоряет свое течение.
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="tab_4">
                                        <p>
                                            <b>Перикарди́т</b> — воспалительное поражение серозной оболочки сердца, наиболее часто висцерального листка, возникающее как осложнение различных заболеваний, редко как самостоятельная болезнь. По этиологии выделяют инфекционные, аутоиммунные, травматические и идиопатические перикардиты.<br>
                                            Морфологически проявляется увеличением объёма жидкости в полости перикарда, или образованием фиброзных стриктур, что приводит к затруднению работы сердца.
                                        </p>
                                        <p>
                                            <b>Общие сведения</b><br><br>
                                            Это заболевание редко возникает само по себе, чаще всего оно является частным проявлением поражения сердца либо другого заболевания: ревматизма, туберкулеза, системной красной волчанки, склеродермии и др.<br><br>
                                            Перикардит может протекать в острой или хронической форме, он может быть сухим или сопровождаться скоплением жидкости в околосердечной сумке.
                                        </p>
                                        <p>
                                            <b>Причины развития перикардита</b><br><br>
                                            Основные причины развития воспаления в околосердечной сумке:
                                        </p>
                                        <ul>
                                            <li>
                                                Грипп и некоторые другие вирусные инфекции.
                                            </li>
                                            <li>
                                                Бактериальные инфекции: пневмония, менингит, гнойные заболевания.
                                            </li>
                                            <li>
                                                Туберкулез легких.
                                            </li>
                                            <li>
                                                Ревматоидный артрит, системная красная волчанка.
                                            </li>
                                            <li>
                                                Некоторые аллергические состояния, например, аллергия на лекарственные препараты.
                                            </li>
                                            <li>
                                                Нарушения обмена веществ при болезнях почек, подагре, заболеваниях щитовидной железы.
                                            </li>
                                            <li>
                                                Инфаркт сердца. Перикардит может возникать сразу после инфаркта или позже, когда пациент уже выписан из стационара.
                                            </li>
                                            <li>
                                                Перенесенные операции на сердце.
                                            </li>
                                            <li>
                                                В редких случаях перикардит может быть вызван червями-паразитами.
                                            </li>
                                        </ul>
                                        <p>
                                            <b>Симптомы перикардита</b><br><br>
                                            Основной симптом заболевания – боль в области сердца. Она не усиливается во время физической нагрузки, ее невозможно снять при помощи таблеток нитроглицерина. При частом глубоком дыхании боль становится сильнее. Если в сердечной сумке скапливается жидкость, то усиление болезненных ощущений также отмечается при наклонах вперед. В положении сидя больной чувствует себя лучше.<br><br>
                                            Постепенно боль может уменьшиться и перейти в ощущение тяжести в области сердца.<br><br>
                                            Повышение температуры тела свидетельствует о том, что перикардит вызван инфекцией.<br><br>
                                            У некоторых больных отмечается одышка, сухой кашель, который иногда оканчивается рвотой.
                                        </p>
                                        <p>
                                            <b>Что зависит от пациента?</b><br><br>
                                            При возникновении болей в области сердца необходимо срочно посетить врача или вызвать бригаду «Скорой помощи». Специалист проведет осмотр и обследование, назначит правильное лечение.
                                        </p>
                                        <p>
                                            <b>Что зависит от врача?</b><br><br>
                                            Для уточнения диагноза врач назначает обследование, которое включает в себя электрокардиографию, рентгенографию грудной клетки, эхокардиографию (УЗИ сердца), общий анализ крови. Эти исследования помогают оценить размеры сердца и его сокращения, выявить воспалительный процесс. Если есть подозрение, что перикардит является осложнением другого заболевания, будут назначены дополнительные соответствующие исследования и анализы.<br><br>
                                            Врач может назначить пункцию перикарда. При этом вводят иглу в околосердечную сумку, получают воспалительную жидкость и отправляют ее на анализ в лабораторию.<br><br>
                                            Основные направления лечения перикардита инфекционного происхождения – антибиотики, противовирусные препараты.<br><br>
                                            При перикардите туберкулезного происхождения пациент проходит лечение в специализированном фтизиатрическом стационаре.<br><br>
                                            При аутоиммунных и других заболеваниях назначается соответствующая терапия.<br><br>
                                            С целью нормализации состояния пациента врач назначает противовоспалительные, обезболивающие препараты.<br><br>
                                            Если заболевание протекает хронически, необходимо устранить все факторы, которые способны провоцировать обострения.
                                        </p>
                                        <p>
                                            <b>Прогноз при перикардите</b><br><br>
                                            При правильном и своевременном лечении все симптомы исчезают через несколько дней, наступает полное выздоровление. Прогноз наименее благоприятен при перикардите, вызванном гнойной инфекцией или злокачественными опухолями.
                                        </p>
                                        <p>
                                            <b>Профилактика перикардита</b><br><br>
                                            Профилактические меры заключаются в своевременном лечении заболеваний, которые могут осложниться перикардитом.
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="tab_5">
                                        <p>
                                            <b>Эндокардит</b> (новолат. endocarditis; от др.-греч. ἔνδον — внутри, καρδία — сердце, + itis) — воспаление внутренней оболочки сердца — эндокарда.<br>
                                            В большинстве случаев эндокардит не является самостоятельным заболеванием, а представляет собой частное проявление других заболеваний. Самостоятельное значение имеет подострый бактериальный эндокардит, вызываемый чаще стрептококком.
                                        </p>
                                        <p>
                                            <b>Этиология и пути заражения</b><br><br>
                                            Возбудителями эндокардита являются чаще всего такие микроорганизмы как стрептококки, стафилококки, энтерококки, однако причиной заболевания могут быть и представители нормальной микрофлоры ротоглотки, верхних дыхательных путей, а также грибы. Инфекция может попасть в организм, например, при хирургических вмешательствах (при протезировании клапанов, катетеризации крупных сосудов и даже при экстракции зуба). Довольно высока вероятность ИЭ у пациентов с ослабленным иммунитетом и наличием очагов хронической инфекции (хронический тонзиллит, фурункулы). Эндокардит формируется зачастую на фоне уже существующей сердечной патологии, поэтому группу риска представляют также больные с врожденными и приобретенными пороками сердца.<br><br>
                                            Из входных ворот инфекции возбудитель попадает с током крови в полость сердца, оседает на створках клапанов и образует вегетации (разрастания). Поверхность клапанов при этом изъязвляется и деформируется. Чаще всего повреждаются аортальный и митральный клапаны, реже трехстворчатый и легочный. Здесь же оседают тромбоциты и нити фибрина, ответственные за формирование тромбов. Как только створки клапана деформируются настолько, что не могут полностью смыкаться, формируется клапанный порок, что, в свою очередь, может привести к сердечной недостаточности.<br><br>
                                            Микробные вегетации представляют также большую опасность еще и потому, что их элементы могут отрываться от эндокарда и с током крови распространяться по всему организму, заражая при этом другие органы и ткани и приводя к закупорке (эмболии) крупных сосудов. Именно поэтому при эндокардите нарушается кровоснабжение почек, селезенки, легких, головного мозга, а также самого сердца.<br><br>
                                            Течение заболевания может острым и подострым. Причиной острого ИЭ чаще всего являются Я-гемолитический стрептококк, золотистый стафилококк, пневмококк. Подострый ИЭ протекает легче, встречается при иммунодефицитных состояних и вызывается, например, зеленящим стрептококком, представителями нормальной микрофлоры дыхательных путей, ротоглотки.
                                        </p>
                                        <p>
                                            <b>Симптомы</b><br><br>
                                            ИЭ начинается с подъема температуры до 39-40єС и других неспецифических симптомов (сильные ознобы, повышенная потливость, потеря веса, мышечные и суставные боли). Кожа и слизистые приобретают бледно-желтушный оттенок. В связи с тем, что микробы циркулируют по всему организму, в том числе и в мельчайших сосудах, на коже может появиться мелкая сыпь, а также характерные небольшие узелки темно-красного цвета на ладонях и подошвах стоп (узелки Ослера). Ногтевые фаланги пальцев рук и ног могут утолщаться с развитием так называемого симптома барабанных палочек, сами ногти также утолщаются и приобретают вид «часовых стекол». Ведущим симптомом ИЭ являются шумы в сердце, слышные при аускультации фонендоскопом. Сердечный шум говорит о неправильной работе клапана и в зависимости от степени нарушений его работы может иметь различный тембр и громкость.
                                        </p>
                                        <p>
                                            <b>Диагностика</b><br><br>
                                            Обследование при подозрении на ИЭ включает в себя подробный осмотр больного и особенно тщательную аускультацию сердца, различные анализы крови, ЭКГ, ультразвуковое исследование сердца (эхокардиография). В общем анализе крови выявляются типичные признаки воспаления (увеличение СОЭ, лейкоцитоз). Необходимо также дважды провести посев венозной крови с целью выявления конкретного возбудителя (для этого необходимо две пробы крови). Отрицательный результат посева крови, тем не менее, не исключает диагноз ИЭ. Решающую роль в диагностике играет эхокардиография (через переднюю грудную стенку или чреспищеводная), с помощью которой можно достоверно установить наличие микробных вегетаций, степень поражения клапанов и нарушения насосной функции сердца.
                                        </p>
                                        <p>
                                            <b>Что зависит от пациента?</b><br><br>
                                            Чтобы препятствовать развитию ИЭ, нужно стараться избегать чрезмерных физических и психических нагрузок, укреплять иммунитет. Важно помнить, что любой очаг хронической инфекции является потенциальной причиной эндокардита. Поэтому не следует затягивать с лечением даже самых банальных инфекций, таких как хронический тонзиллит, синусит или зубной кариес. Это особенно важно для пациентов с уже существующими пороками сердца.
                                        </p>
                                        <p>
                                            <b>Что зависит от врача?</b><br><br>
                                            Если диагноз ИЭ подтвержден, врач назначит антибактериальную терапию с учетом результатов посева крови. Как правило, используют антибиотики широкого спектра действия (пенициллины, цефалоспорины) в сравнительно больших дозах. Если возбудителем заболевания являются агрес c ивные бактерии, например, стафилококк, дополнительно назначают еще один антибиотик узкого спектра (ванкомицин, аминогликозиды). Грибковые эндокардиты крайне тяжело поддаются лечению. В редких случаях (при неэффективности антибиотикотерапии, необратимом поражении клапанов сердца, развитии тяжелой сердечной недостаточности) необходимо хирургическое иссечение микробных вегетаций.<br><br>
                                            Пациенты из группы риска обязательно получают профилактику антибиотиками после любой инвазивной процедуры или операции (тонзилэктомия, аденэктомия, удаление зуба, любые эндоскопические манипуляции, аборт, катетеризация мочевого пузыря и др.).
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="tab_6">
                                        <p>
                                            <b>Приобретённые пороки сердца</b>, называемые также клапанными пороками — нарушение деятельности сердца, обусловленное морфологическими и/или функциональными изменениями одного или нескольких его клапанов. Изменения клапанов могут быть в виде стеноза, недостаточности или их сочетания. Являются результатом инфекционного поражения, воспаления или аутоиммунных реакций, перегрузки и дилатации камер сердца.
                                        </p>
                                        <p>
                                            До 90% приобретенных пороков имеют ревматический характер. Пороки клапанов приводят к повышенной нагрузке на соответствующие отделы сердца, гипертрофии миокарда и в конечном итоге к сердечной недостаточности. Сердце состоит из четырех камер: левые предсердие и желудочек, между которыми находится митральный клапан и правые предсердие и желудочек, между которыми находится трикуспидальный клапан. У выхода в аорту и легочную артерию находится соответственно аортальный клапан и клапан легочной артерии. Наиболее часто встречаются пороки митрального клапана (50-70%), несколько реже аортального (8-27%). Изолированные пороки трикуспидального клапана встречаются редко, менее чем в 1% случаев, однако в комбинации с пороками других клапанов поражение трикуспидального клапана встречается у половины больных.
                                        </p>
                                        <p>
                                            <b>Причины развития пороков сердца</b><br><br>
                                            Причиной поражения клапанов чаще всего являются ревматизм, атеросклероз, инфекционный эндокардит. Намного реже встречаются пороки сердца вследствие сифилитического поражения, травмы, диффузных заболеваний соединительной ткани (болезнь Бехтерева, системная склеродермия, дерматомиозит) или дегенеративных изменений створок с включением солей извести. В створках клапанов развивается воспалительный процесс, приводящий к их повреждению, разрушению и рубцовой деформации. При нарушенной функции клапанов сердце работает с повышенной нагрузкой. Развивается гиперторофия (утолщение) отделов сердца. В дальнейшем полости сердца расширяются, падает сократительная способность сердечной мышцы, появляются признаки сердечной недостаточности.
                                        </p>
                                        <p>
                                            <b>Симптомы</b><br><br>
                                            Симптомы заболевания зависят от пораженного клапана или комбинации пораженных клапанов. По состоянию общей гемодинамики выделяют компенсированные, субкомпенсированные и декомпенсированные пороки.<br><br>
                                            Больного могут беспокоить учащенные сердцебиения, одышка, отеки и другие проявления сердечной недостаточности.
                                        </p>
                                        <p>
                                            <b>Диагностика</b><br><br>
                                            Диагностику и лечение пороков сердца проводит кардиолог на основании клинических симптомов, аускультации сердца и дополнительных методов исследования:
                                        </p>
                                        <ul>
                                            <li>
                                                электрокардиографии (ЭКГ);
                                            </li>
                                            <li>
                                                эхокардиографии (ЭХО-КГ);
                                            </li>
                                            <li>
                                                рентгенографии грудной клетки.
                                            </li>
                                        </ul>
                                        <p>
                                            Зондирование полостей сердца и ангиография проводятся лишь при показаниях к хирургическому лечению пороков.
                                        </p>
                                        <p>
                                            <b>Лечение приобретенных пороков сердца</b><br><br>
                                            Консервативное лечение направлено на профилактику рецидивов и осложнений основного заболевания, коррекцию нарушения ритма сердца, профилактику и лечение сердечной недостаточности.<br><br>
                                            Основной вид лечения хирургический. Пациент с приобретенным пороком сердца нуждается в своевременной консультации кардиохирурга, чтобы не оказались пропущенными сроки эффективного хирургического лечения.
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="tab_7">
                                        <p>
                                            <b>Врождённый поро́к се́рдца</b> (ВПС) — дефект в структуре сердца и (или) крупных сосудов, присутствующий с рождения. Большинство пороков нарушают ток крови внутри сердца или по большому (БКК) и малому (МКК) кругам кровообращения.<br>
                                            Пороки сердца являются наиболее частыми врождёнными дефектами и являются основной причиной детской смертности от пороков развития.
                                        </p>
                                        <p>
                                            Дефекты сердца могут встречаться изолированно или в сочетании друг с другом. Врожденный порок сердца может проявляться сразу после рождения ребенка или протекать скрыто. Врожденные пороки сердца встречаются с частотой 6-8 случаев на каждую тысячу родов, что составляет 30% от всех пороков развития. Они занимают первое место по смертности новорожденных и детей первого года жизни. После первого года жизни смертность резко снижается, и в период от 1 года до 15 лет погибают не более 5% детей. Понятно, что это большая и серьезная проблема. Лечение врожденных сердечных аномалий возможно только хирургическим путем. Благодаря успехам кардиохирургии стали возможны сложные реконструктивные операции при ранее неоперабельных ВПС. В этих условиях основной задачей в организации помощи детям с ВПС является своевременная диагностика и оказание квалифицированной помощи в хирургической клинике. Сердце это, как бы внутренний насос, состоящий из мышц, который постоянно перекачивает кровь по сложной сети сосудов в нашем организме. Сердце состоит из четырех камер. Две верхних называют предсердиями, а две нижних камеры желудочками. Кровь последовательно поступает из предсердий в желудочки, а затем в магистральные артерии благодаря четырем сердечным клапанам. Клапаны открываются и закрываются, пропуская кровь только в одном направлении. Поэтому, правильная и надежная работа сердца обусловлена правильным строением. Причины возникновения врожденных пороков сердца. В небольшой части случаев врожденные пороки имеют генетическую природу, основными же причинами их развития считают внешние воздействия на формирование организма ребенка преимущественно в первом триместре беременности (вирусные, напр., краснуха, и другие заболевания матери, алкоголизм, наркомания, применение некоторых лекарственных средств, воздействие ионизирующего излучения радиации и др.). Одним из немаловажных факторов является также здоровье отца. Выделяют также факторы риска рождения ребенка с ВПС. К ним относятся: возраст матери, эндокринные заболевания супругов, токсикоз и угроза прерывания I триместра беременности, мертворожденные в анамнезе, наличие детей с врожденными пороками развития у ближайших родственников. Количественно оценить риск рождения ребенка с ВПС в семье может только генетик, но дать предварительный прогноз и направить родителей на медико-биологическую консультацию может каждый врач. Проявления врожденных пороков сердца. При большом количестве разнообразных ВПС семь из них встречаются наиболее часто: дефект межжелудочковой перегородки (ДМЖП) - составляет около 20% всех случаев врождённых пороков сердца, а дефект межпредсердной перегородки (ДМПП), открытый артериальный проток (ОАП), коарктация аорты, стеноз аорты, стеноз легочной артерии и транспозиция крупных магистральных сосудов (ТКС) по 10-15% каждый. Существует более 100 различных врожденных пороков сердца. Классификаций их очень много, последняя классификация, использующаяся в России, соответствует Международной классификации болезней. Часто используется разделение пороков на синие, сопровождающиеся синюшностью кожи, и белые, при которых кожные покровы бледной окраски. К порокам синего типа относится тетрада Фалло, транспозиция магистральных сосудов, атрезия легочной артерии, к порокам белого типа дефект межпредсердной перегородки, дефект межжелудочковой перегородки и другие. Чем раньше выявлен врожденный порок сердца, тем больше надежды на своевременное его лечение. Врач может заподозрить наличие у ребенка порока сердца по нескольким признакам: Ребенок при рождении или вскоре после рождения имеет голубой или синюшный цвет кожи, губ, ушных раковин. Или синюшность появляется при кормлении грудью, крике малыша. При белых пороках сердца может возникнуть побледнение кожи и похолодание конечностей. Врач при прослушивании сердца выявляет шумы. Шум у ребенка не обязательный признак порока сердца, однако, он заставляет подробнее обследовать сердце. У ребенка обнаруживают признаки сердечной недостаточности. Обычно это очень неблагоприятная ситуация. Обнаруживаются изменения на электрокардиограмме, рентгеновских снимках, при эхокардиографическом исследовании. Даже имея врожденный порок сердца, некоторое время после рождения ребёнок может выглядеть внешне вполне здоровым в течение первых десяти лет жизни. Однако в дальнейшем порок сердца начинает проявлять себя: ребенок отстает в физическом развитии, появляется одышка при физических нагрузках, бледность или даже синюшность кожи. Для установки истинного диагноза необходимо комплексное обследование сердца с применением современного высокотехнологичного дорогостоящего оборудования.
                                        </p>
                                        <p>
                                            <b>Осложнения</b><br><br>
                                            Врожденные пороки могут осложняться сердечной недостаточностью, бактериальным эндокардитом, ранними затяжными пневмониями на фоне застоя в малом круге кровообращения, высокой легочной гипертензией, синкопэ (кратковременная потеря сознания), стенокардитическим синдромом и инфарктом миокарда (наиболее характерны для стенозов аорты, аномального отхождения левой коронарной артерии), одышечно-цианотическими приступами.
                                        </p>
                                        <p>
                                            <b>Профилактика</b><br><br>
                                            Так как причины возникновения врождённых пороков сердца до сих пор мало изучены, сложно определить необходимые профилактические мероприятия, которые гарантировали бы предотвращение развития врождённых пороков сердца. Однако забота родителей о своем здоровье может значительно снизить риск появления врожденных заболеваний у ребенка.
                                        </p>
                                        <p>
                                            <b>Прогноз</b><br><br>
                                            При раннем выявлении и возможности радикального лечения прогноз относительно благоприятный. При отсутствии такой возможности сомнительный или неблагоприятный.
                                        </p>
                                        <p>
                                            <b>Что зависит от пациента?</b><br><br>
                                            Нужно предельно внимательно отнестись к своему здоровью и здоровью своего будущего ребенка. Прийти обдуманно к вопросу о продолжение рода. Если Вы знаете, что в вашей семье или семье супруга/супруги есть родственники с пороками сердца, то есть вероятность того, что может родиться ребенок с пороком сердца. Для того, чтобы не упустить такие моменты, беременной необходимо предупредить своего доктора об этом, проходить все УЗИ во время беременности.
                                        </p>
                                        <p>
                                            <b>Что зависит от врача?</b><br><br>
                                            Лечение ВПС принципиально можно поделить на хирургическое (в большинстве случаев оно единственное является радикальным) и терапевтическое (чаще является вспомогательным). Чаще всего вопрос о хирургическом лечении ставиться еще до рождения ребенка, если это касается «синих пороков». Поэтому в таких случаях роды должны протекать в роддомах при кардиохирургических больницах. Терапевтическое лечение необходимо, если сроки операции можно перенести на более поздний срок. Если вопрос касается «бледных пороков», то лечение будет зависеть от того, как будет себя вести порок по мере роста ребенка. Скорее всего, все лечение будет терапевтическим.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->



<!-- INFORMATION -->

<?php //include_once 'add.php';?>

<!-- TEST -->

<?php
		/*foreach ($rows as $param) {
			foreach ($param as $key => $value) {
				echo $value;
			}
		}*/
	?>

<!-- INFORMATION -->

<?php //include_once 'information.php';?>

<!-- UPDATE -->

<?php //include_once 'update.php';?>

<!-- ILLNESS -->

<?php // include_once 'illness.php';?>

<!-- FOOTER -->

<?php include_once 'footer.php';?>


