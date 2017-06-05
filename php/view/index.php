<?php
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
                                        <a href="#tab_1" data-toggle="tab" aria-expanded="false"> Ишемическая болезнь </a>
                                    </li>
                                    <li class="">
                                        <a href="#tab_2" data-toggle="tab" aria-expanded="false"> Артериальная гипертензия и гипотензия </a>
                                    </li>
                                    <li class="">
                                        <a href="#tab_3" data-toggle="tab" aria-expanded="false"> Болезни миокарда </a>
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
                                            <b>Ишеми́ческая боле́знь се́рдца</b> (ИБС; лат. morbus ischaemicus cordis от др.-греч. ἴσχω — «задерживаю, сдерживаю» и αἷμα — «кровь») — патологическое состояние, характеризующееся абсолютным или относительным нарушением кровоснабжения миокарда вследствие поражения коронарных артерий.<br>
                                            Ишемическая болезнь сердца представляет собой обусловленное расстройством коронарного кровообращения поражение миокарда, возникающее в результате нарушения равновесия между коронарным кровотоком и метаболическими потребностями сердечной мышцы. Иными словами, миокард нуждается в бо́льшем количестве кислорода, чем его поступает с кровью. ИБС может протекать остро (в виде инфаркта миокарда), а также хронически (периодические приступы стенокардии).
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
                                            <b>Артериальная гипотензия</b> (от др.-греч. ὑπό — под, внизу и лат. tensio — напряжение) — снижение артериального давления более, чем на 20 % от исходного/обычных значений или в абсолютных цифрах — ниже 90 мм рт. ст. систолического давления или 60 мм рт.ст. среднего артериального давления. Снижение давления может быть острым и хроническим.<br>
                                            Острая артериальная гипотензия (коллапс, шок) как правило возникает при нарушениях деятельности сердца, большой кровопотере, дегидратации и быстро приводит к гипоксии мозга и внутренних органов. Таким образом, острая гипотензия — это всегда осложнение какого-то заболевания или внешнего воздействия, всегда имеет очевидную причину, которая должна учитываться при лечении.<br>
                                            Хроническая артериальная гипотензия обусловлена совсем другими причинами, нежели острая. У людей с пониженным давлением обычно нарушена его регуляция, истинные причины которой могут иметь разную природу.<br>
                                            Люди с пониженным давлением не имеют такого высокого риска инфаркта и инсульта, как гипертоники, поэтому стандарты и методы лечения хронической гипотонии разработаны хуже. При этом качество жизни гипотоников может быть очень низким из-за постоянной слабости, головных болей, снижения активности и других симптомов.
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="tab_3">
                                        <p> <b>Миокарди́т</b> — поражение сердечной мышцы, миокарда. Обычно поражения носят воспалительный характер.</p>
                                    </div>
                                    <div class="tab-pane fade" id="tab_4">
                                        <p>
                                            <b>Перикарди́т</b> — воспалительное поражение серозной оболочки сердца, наиболее часто висцерального листка, возникающее как осложнение различных заболеваний, редко как самостоятельная болезнь. По этиологии выделяют инфекционные, аутоиммунные, травматические и идиопатические перикардиты.<br>
                                            Морфологически проявляется увеличением объёма жидкости в полости перикарда, или образованием фиброзных стриктур, что приводит к затруднению работы сердца.
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="tab_5">
                                        <p>
                                            <b>Эндокардит</b> (новолат. endocarditis; от др.-греч. ἔνδον — внутри, καρδία — сердце, + itis) — воспаление внутренней оболочки сердца — эндокарда.<br>
                                            В большинстве случаев эндокардит не является самостоятельным заболеванием, а представляет собой частное проявление других заболеваний. Самостоятельное значение имеет подострый бактериальный эндокардит, вызываемый чаще стрептококком.
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="tab_6">
                                        <p>
                                            <b>Приобретённые пороки сердца</b>, называемые также клапанными пороками — нарушение деятельности сердца, обусловленное морфологическими и/или функциональными изменениями одного или нескольких его клапанов. Изменения клапанов могут быть в виде стеноза, недостаточности или их сочетания. Являются результатом инфекционного поражения, воспаления или аутоиммунных реакций, перегрузки и дилатации камер сердца.
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="tab_7">
                                        <p>
                                            <b>Врождённый поро́к се́рдца</b> (ВПС) — дефект в структуре сердца и (или) крупных сосудов, присутствующий с рождения. Большинство пороков нарушают ток крови внутри сердца или по большому (БКК) и малому (МКК) кругам кровообращения.<br>
                                            Пороки сердца являются наиболее частыми врождёнными дефектами и являются основной причиной детской смертности от пороков развития.
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


