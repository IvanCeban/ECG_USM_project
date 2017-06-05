<?php
    include_once '../controller/php.select.data.php';
?>

<script>
    $(document).ready(function () {
        var IData = I();
        var IIData = II();
        var IIIData = III();
        var v1Data = v1();
        var v2Data = v2()
        var v3Data = v3();
        var v4Data = v4();
        var v5Data = v5();
        var v6Data = v6();
        var avrData = avr();
        var avlData = avl();
        var avfData = avf();



        var chartI = AmCharts.makeChart("chart-I", {
            "type": "serial",
            "theme": "light",
            "marginRight": 80,
            "dataProvider": IData,
            "mouseWheelZoomEnabled": true,
            "valueAxes": [{
                "position": "left",
                "title": "Напряжение"
            },
                {
                    "position": "right",
                    "title": "Напряжение"
                }],
            "graphs": [{
                "id": "g1",
                "fillAlphas": 0,
                "valueField": "visits",
                "balloonText": "<div style='margin:5px; font-size:16px;'><b>[[value]]</b> mV</div>",
                "lineColor": "red"
            },
                {

                "id": "g2",
                "fillAlphas": 0,
                "valueField": "illness",
                "balloonText": "<div style='margin:5px; font-size:16px;'><b>[[value]]</b> mV</div>",
                "lineColor": "blue"

                }],
            "chartScrollbar": {
                "graph": "g1",
                "scrollbarHeight": 80,
                offset: 30,
                "backgroundAlpha": 0,
                "selectedBackgroundAlpha": 0.1,
                "selectedBackgroundColor": "#888888",
                "graphFillAlpha": 0,
                "graphLineAlpha": 0.5,
                "selectedGraphFillAlpha": 0,
                "selectedGraphLineAlpha": 1,
                "autoGridCount": true,
                "color": "#AAAAAA"
            },
            "chartCursor": {
                "categoryBalloonDateFormat": "JJ:NN, DD MMMM",
                "cursorPosition": "mouse"
            },
            "categoryField": "date",
            "categoryAxis": {
                "minPeriod": "mm",
                "parseDates": true
            },
            "export": {
                "enabled": true,
                "dateFormat": "YYYY-MM-DD HH:NN:SS:QQ"
            }
        });

        chartI.addListener("dataUpdated", zoomChartI);
// when we apply theme, the dataUpdated event is fired even before we add listener, so
// we need to call zoomChart here
        zoomChartI();
// this method is called when chart is first inited as we listen for "dataUpdated" event
        function zoomChartI() {
            // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
            chartI.zoomToIndexes(IData.length - 250, IData.length - 100);
        }

        function I() {
            var IData = [];
            var ecg = [
                <?php
                    if(empty($_GET['patients_id'])) {
                        echo '0';
                    } else {
                        $patient_change_id = $_GET['patients_id'];

                        if(!empty($patient_change_id)) {
                            foreach ($db->select("SELECT * FROM `i` WHERE patients_id = $patient_change_id") as $value) {
                                extract($value);

                                for($i = 0; $i <= 10; $i++) {
                                    echo $prong_P . $segment_PQ . $prong_Q . $QRS_complex . $prong_S . $segment_ST;
                                }

                            }
                        }
                    }
                ?>
            ];
            var ecg2 =  [
                    <?php
                        foreach ($db->select("SELECT * FROM `illness` WHERE title = 'Инфаркт миокарда'") as $value) {
                            extract($value);
                            for ($max = 0; $max <= 10; $max++) {
                                if(!empty($_GET['ill_id'])) {
                                    echo $i;
                                }
                            }
                        }
                    ?>
            ];

            // current date
            var firstDate = new Date();
            // now set 20 minutes back
            firstDate.setMinutes(firstDate.getDate() - 1166);

            // and generate 20 data items
            for (var i = 0; i < 180; i++) {
                var newDate = new Date(firstDate);
                // each time we add one minute
                newDate.setMinutes(newDate.getMinutes() + i);
                // some random number
                // var visits = Math.round(Math.random() * 40 + 10 + i + Math.random() * i / 5);
                var visits = ecg[i];
                var illness = ecg2[i];

                // add data item to the array
                IData.push({
                    date: newDate,
                    visits: visits,
                    illness: illness
                });

            }
            return IData;
        }

        var chartII = AmCharts.makeChart("chart-II", {
            "type": "serial",
            "theme": "light",
            "marginRight": 80,
            "dataProvider": IIData,
            "mouseWheelZoomEnabled": true,
            "valueAxes": [{
                "position": "left",
                "title": "Напряжение"
            },
                {
                    "position": "right",
                    "title": "Напряжение"
                }],
            "graphs": [{
                "id": "g1",
                "fillAlphas": 0,
                "valueField": "visits",
                "balloonText": "<div style='margin:5px; font-size:16px;'><b>[[value]]</b> mV</div>",
                "lineColor": "red"
            },
                {
                 "id": "g2",
                 "fillAlphas": 0,
                 "valueField": "illness",
                 "balloonText": "<div style='margin:5px; font-size:16px;'><b>[[value]]</b> mV</div>",
                 "lineColor": "blue"
                 }],
            "chartScrollbar": {
                "graph": "g1",
                "scrollbarHeight": 80,
                offset: 30,
                "backgroundAlpha": 0,
                "selectedBackgroundAlpha": 0.1,
                "selectedBackgroundColor": "#888888",
                "graphFillAlpha": 0,
                "graphLineAlpha": 0.5,
                "selectedGraphFillAlpha": 0,
                "selectedGraphLineAlpha": 1,
                "autoGridCount": true,
                "color": "#AAAAAA"
            },
            "chartCursor": {
                "categoryBalloonDateFormat": "JJ:NN, DD MMMM",
                "cursorPosition": "mouse"
            },
            "categoryField": "date",
            "categoryAxis": {
                "minPeriod": "mm",
                "parseDates": true
            },
            "export": {
                "enabled": true,
                "dateFormat": "YYYY-MM-DD HH:NN:SS:QQ"
            }
        });

        chartII.addListener("dataUpdated", zoomChartII);
// when we apply theme, the dataUpdated event is fired even before we add listener, so
// we need to call zoomChart here
        zoomChartII();
// this method is called when chart is first inited as we listen for "dataUpdated" event
        function zoomChartII() {
            // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
            chartII.zoomToIndexes(IIData.length - 250, IIData.length - 100);
        }

        function II() {
            var IIData = [];
            var ecg = [
                <?php
                if(empty($_GET['patients_id'])) {
                    echo '0';
                } else {
                    $patient_change_id = $_GET['patients_id'];

                    if(!empty($patient_change_id)) {
                        foreach ($db->select("SELECT * FROM `ii` WHERE patients_id = $patient_change_id") as $value) {
                            extract($value);

                            for($i = 0; $i <= 10; $i++) {
                                echo $prong_P . $segment_PQ . $prong_Q . $QRS_complex . $prong_S . $segment_ST;
                            }

                        }
                    }
                }
                ?>
            ];

            var ecg2 =  [
                <?php
                foreach ($db->select("SELECT * FROM `illness` WHERE title = 'Инфаркт миокарда'") as $value) {
                    extract($value);
                    for ($max = 0; $max <= 10; $max++) {
                        if(!empty($_GET['ill_id'])) {
                            echo $ii;
                        }
                    }
                }
                ?>
            ];

            // current date
            var firstDate = new Date();
            // now set 20 minutes back
            firstDate.setMinutes(firstDate.getDate() - 1166);

            // and generate 20 data items
            for (var i = 0; i < 180; i++) {
                var newDate = new Date(firstDate);
                // each time we add one minute
                newDate.setMinutes(newDate.getMinutes() + i);
                // some random number
                // var visits = Math.round(Math.random() * 40 + 10 + i + Math.random() * i / 5);
                var visits = ecg[i];
                var illness = ecg2[i];

                // add data item to the array
                IIData.push({
                    date: newDate,
                    visits: visits,
                    illness: illness
                });
            }
            return IIData;
        }

        var chartIII = AmCharts.makeChart("chart-III", {
            "type": "serial",
            "theme": "light",
            "marginRight": 80,
            "dataProvider": IIIData,
            "mouseWheelZoomEnabled": true,
            "valueAxes": [{
                "position": "left",
                "title": "Напряжение"
            },
                {
                    "position": "right",
                    "title": "Напряжение"
                }],
            "graphs": [{
                "id": "g1",
                "fillAlphas": 0,
                "valueField": "visits",
                "balloonText": "<div style='margin:5px; font-size:16px;'><b>[[value]]</b> mV</div>",
                "lineColor": "red"
            },
                /*   {
                 "id": "g2",
                 "fillAlphas": 0,
                 "valueField": "illness",
                 "balloonText": "<div style='margin:5px; font-size:16px;'><b>[[value]]</b> mV</div>",
                 "lineColor": "blue"
                 }*/ ],
            "chartScrollbar": {
                "graph": "g1",
                "scrollbarHeight": 80,
                offset: 30,
                "backgroundAlpha": 0,
                "selectedBackgroundAlpha": 0.1,
                "selectedBackgroundColor": "#888888",
                "graphFillAlpha": 0,
                "graphLineAlpha": 0.5,
                "selectedGraphFillAlpha": 0,
                "selectedGraphLineAlpha": 1,
                "autoGridCount": true,
                "color": "#AAAAAA"
            },
            "chartCursor": {
                "categoryBalloonDateFormat": "JJ:NN, DD MMMM",
                "cursorPosition": "mouse"
            },
            "categoryField": "date",
            "categoryAxis": {
                "minPeriod": "mm",
                "parseDates": true
            },
            "export": {
                "enabled": true,
                "dateFormat": "YYYY-MM-DD HH:NN:SS:QQ"
            }
        });

        chartIII.addListener("dataUpdated", zoomChartIII);
// when we apply theme, the dataUpdated event is fired even before we add listener, so
// we need to call zoomChart here
        zoomChartIII();
// this method is called when chart is first inited as we listen for "dataUpdated" event
        function zoomChartIII() {
            // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
            chartIII.zoomToIndexes(IIIData.length - 250, IIIData.length - 100);
        }

        function III() {
            var IIIData = [];
            var ecg = [
                <?php
                if(empty($_GET['patients_id'])) {
                    echo '0';
                } else {
                    $patient_change_id = $_GET['patients_id'];

                    if(!empty($patient_change_id)) {
                        foreach ($db->select("SELECT * FROM `iii` WHERE patients_id = $patient_change_id") as $value) {
                            extract($value);

                            for($i = 0; $i <= 10; $i++) {
                                echo $prong_P . $segment_PQ . $prong_Q . $QRS_complex . $prong_S . $segment_ST;
                            }

                        }
                    }
                }
                ?>
            ];

            var ecg2 = [-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625,-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625,-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625,-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625

            ];

            // current date
            var firstDate = new Date();
            // now set 20 minutes back
            firstDate.setMinutes(firstDate.getDate() - 1166);

            // and generate 20 data items
            for (var i = 0; i < 180; i++) {
                var newDate = new Date(firstDate);
                // each time we add one minute
                newDate.setMinutes(newDate.getMinutes() + i);
                // some random number
                // var visits = Math.round(Math.random() * 40 + 10 + i + Math.random() * i / 5);
                var visits = ecg[i];
                var illness = ecg2[i];

                // add data item to the array
                IIIData.push({
                    date: newDate,
                    visits: visits,
                    illness: illness
                });
            }
            return IIIData;
        }

        var chart = AmCharts.makeChart("chart-v1", {
            "type": "serial",
            "theme": "light",
            "marginRight": 80,
            "dataProvider": v1Data,
            "mouseWheelZoomEnabled": true,
            "valueAxes": [{
                "position": "left",
                "title": "Напряжение"
            },
                {
                    "position": "right",
                    "title": "Напряжение"
                }],
            "graphs": [{
                "id": "g1",
                "fillAlphas": 0,
                "valueField": "visits",
                "balloonText": "<div style='margin:5px; font-size:16px;'><b>[[value]]</b> mV</div>",
                "lineColor": "red"
            },
                /*{
                 "id": "g2",
                 "fillAlphas": 0,
                 "valueField": "illness",
                 "balloonText": "<div style='margin:5px; font-size:16px;'><b>[[value]]</b> mV</div>",
                 "lineColor": "blue"
                 }*/ ],
            "chartScrollbar": {
                "graph": "g1",
                "scrollbarHeight": 80,
                offset: 30,
                "backgroundAlpha": 0,
                "selectedBackgroundAlpha": 0.1,
                "selectedBackgroundColor": "#888888",
                "graphFillAlpha": 0,
                "graphLineAlpha": 0.5,
                "selectedGraphFillAlpha": 0,
                "selectedGraphLineAlpha": 1,
                "autoGridCount": true,
                "color": "#AAAAAA"
            },
            "chartCursor": {
                "categoryBalloonDateFormat": "JJ:NN, DD MMMM",
                "cursorPosition": "mouse"
            },
            "categoryField": "date",
            "categoryAxis": {
                "minPeriod": "mm",
                "parseDates": true
            },
            "export": {
                "enabled": true,
                "dateFormat": "YYYY-MM-DD HH:NN:SS:QQ"
            }
        });

        chart.addListener("dataUpdated", zoomChart);
// when we apply theme, the dataUpdated event is fired even before we add listener, so
// we need to call zoomChart here
        zoomChart();
// this method is called when chart is first inited as we listen for "dataUpdated" event
        function zoomChart() {
            // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
            chart.zoomToIndexes(v1Data.length - 250, v1Data.length - 100);
        }

// generate some random data, quite different range
        function v1() {
            var v1Data = [];
            var ecg = [
                <?php
                if(empty($_GET['patients_id'])) {
                    echo '0';
                } else {
                    $patient_change_id = $_GET['patients_id'];

                    if(!empty($patient_change_id)) {
                        foreach ($db->select("SELECT * FROM `v1` WHERE patients_id = $patient_change_id") as $value) {
                            extract($value);

                            for($i = 0; $i <= 10; $i++) {
                                echo $prong_P . $segment_PQ . $prong_Q . $QRS_complex . $prong_S . $segment_ST;
                            }

                        }
                    }
                }
                ?>
            ];

            var ecg2 = [-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625,-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625,-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625,-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625

            ];

            // current date
            var firstDate = new Date();
            // now set 20 minutes back
            firstDate.setMinutes(firstDate.getDate() - 1166);

            // and generate 20 data items
            for (var i = 0; i < 180; i++) {
                var newDate = new Date(firstDate);
                // each time we add one minute
                newDate.setMinutes(newDate.getMinutes() + i);
                // some random number
                // var visits = Math.round(Math.random() * 40 + 10 + i + Math.random() * i / 5);
                var visits = ecg[i];
                var illness = ecg2[i];

                // add data item to the array
                v1Data.push({
                    date: newDate,
                    visits: visits,
                    illness: illness
                });
            }
            return v1Data;
        }


        var chart2 = AmCharts.makeChart("chart-v2", {
            "type": "serial",
            "theme": "light",
            "marginRight": 80,
            "dataProvider": v2Data,
            "mouseWheelZoomEnabled": true,
            "valueAxes": [{
                "position": "left",
                "title": "Напряжение"
            },
                {
                    "position": "right",
                    "title": "Напряжение"
                }],
            "graphs": [{
                "id": "g1",
                "fillAlphas": 0,
                "valueField": "visits",
                "balloonText": "<div style='margin:5px; font-size:16px;'><b>[[value]]</b> mV</div>",
                "lineColor": "red"
            },
                /*   {
                 "id": "g2",
                 "fillAlphas": 0,
                 "valueField": "illness",
                 "balloonText": "<div style='margin:5px; font-size:16px;'><b>[[value]]</b> mV</div>",
                 "lineColor": "blue"
                 }*/ ],
            "chartScrollbar": {
                "graph": "g1",
                "scrollbarHeight": 80,
                offset: 30,
                "backgroundAlpha": 0,
                "selectedBackgroundAlpha": 0.1,
                "selectedBackgroundColor": "#888888",
                "graphFillAlpha": 0,
                "graphLineAlpha": 0.5,
                "selectedGraphFillAlpha": 0,
                "selectedGraphLineAlpha": 1,
                "autoGridCount": true,
                "color": "#AAAAAA"
            },
            "chartCursor": {
                "categoryBalloonDateFormat": "JJ:NN, DD MMMM",
                "cursorPosition": "mouse"
            },
            "categoryField": "date",
            "categoryAxis": {
                "minPeriod": "mm",
                "parseDates": true
            },
            "export": {
                "enabled": true,
                "dateFormat": "YYYY-MM-DD HH:NN:SS:QQ"
            }
        });

        chart2.addListener("dataUpdated", zoomChart2);
// when we apply theme, the dataUpdated event is fired even before we add listener, so
// we need to call zoomChart here
        zoomChart2();
// this method is called when chart is first inited as we listen for "dataUpdated" event
        function zoomChart2() {
            // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
            chart2.zoomToIndexes(v2Data.length - 250, v2Data.length - 100);
        }

        function v2() {
            var v2Data = [];
            var ecg = [
                <?php
                if(empty($_GET['patients_id'])) {
                    echo '0';
                } else {
                    $patient_change_id = $_GET['patients_id'];

                    if(!empty($patient_change_id)) {
                        foreach ($db->select("SELECT * FROM `v2` WHERE patients_id = $patient_change_id") as $value) {
                            extract($value);

                            for($i = 0; $i <= 10; $i++) {
                                echo $prong_P . $segment_PQ . $prong_Q . $QRS_complex . $prong_S . $segment_ST;
                            }

                        }
                    }
                }
                ?>
            ];

            var ecg2 = [-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625,-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625,-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625,-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625

            ];

            // current date
            var firstDate = new Date();
            // now set 20 minutes back
            firstDate.setMinutes(firstDate.getDate() - 1166);

            // and generate 20 data items
            for (var i = 0; i < 180; i++) {
                var newDate = new Date(firstDate);
                // each time we add one minute
                newDate.setMinutes(newDate.getMinutes() + i);
                // some random number
                // var visits = Math.round(Math.random() * 40 + 10 + i + Math.random() * i / 5);
                var visits = ecg[i];
                var illness = ecg2[i];

                // add data item to the array
                v2Data.push({
                    date: newDate,
                    visits: visits,
                    illness: illness
                });
            }
            return v2Data;
        }

        var chart3 = AmCharts.makeChart("chart-v3", {
            "type": "serial",
            "theme": "light",
            "marginRight": 80,
            "dataProvider": v3Data,
            "mouseWheelZoomEnabled": true,
            "valueAxes": [{
                "position": "left",
                "title": "Напряжение"
            },
                {
                    "position": "right",
                    "title": "Напряжение"
                }],
            "graphs": [{
                "id": "g1",
                "fillAlphas": 0,
                "valueField": "visits",
                "balloonText": "<div style='margin:5px; font-size:16px;'><b>[[value]]</b> mV</div>",
                "lineColor": "red"
            },
                /*    {
                 "id": "g2",
                 "fillAlphas": 0,
                 "valueField": "illness",
                 "balloonText": "<div style='margin:5px; font-size:16px;'><b>[[value]]</b> mV</div>",
                 "lineColor": "blue"
                 }*/ ],
            "chartScrollbar": {
                "graph": "g1",
                "scrollbarHeight": 80,
                offset: 30,
                "backgroundAlpha": 0,
                "selectedBackgroundAlpha": 0.1,
                "selectedBackgroundColor": "#888888",
                "graphFillAlpha": 0,
                "graphLineAlpha": 0.5,
                "selectedGraphFillAlpha": 0,
                "selectedGraphLineAlpha": 1,
                "autoGridCount": true,
                "color": "#AAAAAA"
            },
            "chartCursor": {
                "categoryBalloonDateFormat": "JJ:NN, DD MMMM",
                "cursorPosition": "mouse"
            },
            "categoryField": "date",
            "categoryAxis": {
                "minPeriod": "mm",
                "parseDates": true
            },
            "export": {
                "enabled": true,
                "dateFormat": "YYYY-MM-DD HH:NN:SS:QQ"
            }
        });

        chart3.addListener("dataUpdated", zoomChart3);
// when we apply theme, the dataUpdated event is fired even before we add listener, so
// we need to call zoomChart here
        zoomChart3();
// this method is called when chart is first inited as we listen for "dataUpdated" event
        function zoomChart3() {
            // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
            chart3.zoomToIndexes(v3Data.length - 250, v3Data.length - 100);
        }

        function v3() {
            var v3Data = [];
            var ecg = [
                <?php
                if(empty($_GET['patients_id'])) {
                    echo '0';
                } else {
                    $patient_change_id = $_GET['patients_id'];

                    if(!empty($patient_change_id)) {
                        foreach ($db->select("SELECT * FROM `v3` WHERE patients_id = $patient_change_id") as $value) {
                            extract($value);

                            for($i = 0; $i <= 10; $i++) {
                                echo $prong_P . $segment_PQ . $prong_Q . $QRS_complex . $prong_S . $segment_ST;
                            }

                        }
                    }
                }
                ?>
            ];

            var ecg2 = [-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625,-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625,-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625,-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625

            ];

            // current date
            var firstDate = new Date();
            // now set 20 minutes back
            firstDate.setMinutes(firstDate.getDate() - 1166);

            // and generate 20 data items
            for (var i = 0; i < 180; i++) {
                var newDate = new Date(firstDate);
                // each time we add one minute
                newDate.setMinutes(newDate.getMinutes() + i);
                // some random number
                // var visits = Math.round(Math.random() * 40 + 10 + i + Math.random() * i / 5);
                var visits = ecg[i];
                var illness = ecg2[i];

                // add data item to the array
                v3Data.push({
                    date: newDate,
                    visits: visits,
                    illness: illness
                });
            }
            return v3Data;
        }

        var chart4 = AmCharts.makeChart("chart-v4", {
            "type": "serial",
            "theme": "light",
            "marginRight": 80,
            "dataProvider": v4Data,
            "mouseWheelZoomEnabled": true,
            "valueAxes": [{
                "position": "left",
                "title": "Напряжение"
            },
                {
                    "position": "right",
                    "title": "Напряжение"
                }],
            "graphs": [{
                "id": "g1",
                "fillAlphas": 0,
                "valueField": "visits",
                "balloonText": "<div style='margin:5px; font-size:16px;'><b>[[value]]</b> mV</div>",
                "lineColor": "red"
            },
                /*    {
                 "id": "g2",
                 "fillAlphas": 0,
                 "valueField": "illness",
                 "balloonText": "<div style='margin:5px; font-size:16px;'><b>[[value]]</b> mV</div>",
                 "lineColor": "blue"
                 }*/ ],
            "chartScrollbar": {
                "graph": "g1",
                "scrollbarHeight": 80,
                offset: 30,
                "backgroundAlpha": 0,
                "selectedBackgroundAlpha": 0.1,
                "selectedBackgroundColor": "#888888",
                "graphFillAlpha": 0,
                "graphLineAlpha": 0.5,
                "selectedGraphFillAlpha": 0,
                "selectedGraphLineAlpha": 1,
                "autoGridCount": true,
                "color": "#AAAAAA"
            },
            "chartCursor": {
                "categoryBalloonDateFormat": "JJ:NN, DD MMMM",
                "cursorPosition": "mouse"
            },
            "categoryField": "date",
            "categoryAxis": {
                "minPeriod": "mm",
                "parseDates": true
            },
            "export": {
                "enabled": true,
                "dateFormat": "YYYY-MM-DD HH:NN:SS:QQ"
            }
        });

        chart4.addListener("dataUpdated", zoomChart4);
// when we apply theme, the dataUpdated event is fired even before we add listener, so
// we need to call zoomChart here
        zoomChart4();
// this method is called when chart is first inited as we listen for "dataUpdated" event
        function zoomChart4() {
            // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
            chart4.zoomToIndexes(v4Data.length - 250, v4Data.length - 100);
        }

        function v4() {
            var v4Data = [];
            var ecg = [
                <?php
                if(empty($_GET['patients_id'])) {
                    echo '0';
                } else {
                    $patient_change_id = $_GET['patients_id'];

                    if(!empty($patient_change_id)) {
                        foreach ($db->select("SELECT * FROM `v4` WHERE patients_id = $patient_change_id") as $value) {
                            extract($value);

                            for($i = 0; $i <= 10; $i++) {
                                echo $prong_P . $segment_PQ . $prong_Q . $QRS_complex . $prong_S . $segment_ST;
                            }

                        }
                    }
                }
                ?>
            ];

            var ecg2 = [-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625,-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625,-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625,-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625

            ];

            // current date
            var firstDate = new Date();
            // now set 20 minutes back
            firstDate.setMinutes(firstDate.getDate() - 1166);

            // and generate 20 data items
            for (var i = 0; i < 180; i++) {
                var newDate = new Date(firstDate);
                // each time we add one minute
                newDate.setMinutes(newDate.getMinutes() + i);
                // some random number
                // var visits = Math.round(Math.random() * 40 + 10 + i + Math.random() * i / 5);
                var visits = ecg[i];
                var illness = ecg2[i];

                // add data item to the array
                v4Data.push({
                    date: newDate,
                    visits: visits,
                    illness: illness
                });
            }
            return v4Data;
        }

        var chart5 = AmCharts.makeChart("chart-v5", {
            "type": "serial",
            "theme": "light",
            "marginRight": 80,
            "dataProvider": v5Data,
            "mouseWheelZoomEnabled": true,
            "valueAxes": [{
                "position": "left",
                "title": "Напряжение"
            },
                {
                    "position": "right",
                    "title": "Напряжение"
                }],
            "graphs": [{
                "id": "g1",
                "fillAlphas": 0,
                "valueField": "visits",
                "balloonText": "<div style='margin:5px; font-size:16px;'><b>[[value]]</b> mV</div>",
                "lineColor": "red"
            },
                /*{
                 "id": "g2",
                 "fillAlphas": 0,
                 "valueField": "illness",
                 "balloonText": "<div style='margin:5px; font-size:16px;'><b>[[value]]</b> mV</div>",
                 "lineColor": "blue"
                 }*/],
            "chartScrollbar": {
                "graph": "g1",
                "scrollbarHeight": 80,
                offset: 30,
                "backgroundAlpha": 0,
                "selectedBackgroundAlpha": 0.1,
                "selectedBackgroundColor": "#888888",
                "graphFillAlpha": 0,
                "graphLineAlpha": 0.5,
                "selectedGraphFillAlpha": 0,
                "selectedGraphLineAlpha": 1,
                "autoGridCount": true,
                "color": "#AAAAAA"
            },
            "chartCursor": {
                "categoryBalloonDateFormat": "JJ:NN, DD MMMM",
                "cursorPosition": "mouse"
            },
            "categoryField": "date",
            "categoryAxis": {
                "minPeriod": "mm",
                "parseDates": true
            },
            "export": {
                "enabled": true,
                "dateFormat": "YYYY-MM-DD HH:NN:SS:QQ"
            }
        });

        chart5.addListener("dataUpdated", zoomChart5);
// when we apply theme, the dataUpdated event is fired even before we add listener, so
// we need to call zoomChart here
        zoomChart5();
// this method is called when chart is first inited as we listen for "dataUpdated" event
        function zoomChart5() {
            // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
            chart5.zoomToIndexes(v5Data.length - 250, v5Data.length - 100);
        }

        function v5() {
            var v5Data = [];
            var ecg = [
                <?php
                if(empty($_GET['patients_id'])) {
                    echo '0';
                } else {
                    $patient_change_id = $_GET['patients_id'];

                    if(!empty($patient_change_id)) {
                        foreach ($db->select("SELECT * FROM `v5` WHERE patients_id = $patient_change_id") as $value) {
                            extract($value);

                            for($i = 0; $i <= 10; $i++) {
                                echo $prong_P . $segment_PQ . $prong_Q . $QRS_complex . $prong_S . $segment_ST;
                            }

                        }
                    }
                }
                ?>
            ];

            var ecg2 = [-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625,-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625,-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625,-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625

            ];

            // current date
            var firstDate = new Date();
            // now set 20 minutes back
            firstDate.setMinutes(firstDate.getDate() - 1166);

            // and generate 20 data items
            for (var i = 0; i < 180; i++) {
                var newDate = new Date(firstDate);
                // each time we add one minute
                newDate.setMinutes(newDate.getMinutes() + i);
                // some random number
                // var visits = Math.round(Math.random() * 40 + 10 + i + Math.random() * i / 5);
                var visits = ecg[i];
                var illness = ecg2[i];

                // add data item to the array
                v5Data.push({
                    date: newDate,
                    visits: visits,
                    illness: illness
                });
            }
            return v5Data;
        }

        var chart6 = AmCharts.makeChart("chart-v6", {
            "type": "serial",
            "theme": "light",
            "marginRight": 80,
            "dataProvider": v6Data,
            "mouseWheelZoomEnabled": true,
            "valueAxes": [{
                "position": "left",
                "title": "Напряжение"
            },
                {
                    "position": "right",
                    "title": "Напряжение"
                }],
            "graphs": [{
                "id": "g1",
                "fillAlphas": 0,
                "valueField": "visits",
                "balloonText": "<div style='margin:5px; font-size:16px;'><b>[[value]]</b> mV</div>",
                "lineColor": "red"
            },
                /*    {
                 "id": "g2",
                 "fillAlphas": 0,
                 "valueField": "illness",
                 "balloonText": "<div style='margin:5px; font-size:16px;'><b>[[value]]</b> mV</div>",
                 "lineColor": "blue"
                 }*/ ],
            "chartScrollbar": {
                "graph": "g1",
                "scrollbarHeight": 80,
                offset: 30,
                "backgroundAlpha": 0,
                "selectedBackgroundAlpha": 0.1,
                "selectedBackgroundColor": "#888888",
                "graphFillAlpha": 0,
                "graphLineAlpha": 0.5,
                "selectedGraphFillAlpha": 0,
                "selectedGraphLineAlpha": 1,
                "autoGridCount": true,
                "color": "#AAAAAA"
            },
            "chartCursor": {
                "categoryBalloonDateFormat": "JJ:NN, DD MMMM",
                "cursorPosition": "mouse"
            },
            "categoryField": "date",
            "categoryAxis": {
                "minPeriod": "mm",
                "parseDates": true
            },
            "export": {
                "enabled": true,
                "dateFormat": "YYYY-MM-DD HH:NN:SS:QQ"
            }
        });

        chart6.addListener("dataUpdated", zoomChart6);
// when we apply theme, the dataUpdated event is fired even before we add listener, so
// we need to call zoomChart here
        zoomChart6();
// this method is called when chart is first inited as we listen for "dataUpdated" event
        function zoomChart6() {
            // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
            chart6.zoomToIndexes(v6Data.length - 250, v6Data.length - 100);
        }

        function v6() {
            var v6Data = [];
            var ecg = [
                <?php
                if(empty($_GET['patients_id'])) {
                    echo '0';
                } else {
                    $patient_change_id = $_GET['patients_id'];

                    if(!empty($patient_change_id)) {
                        foreach ($db->select("SELECT * FROM `v6` WHERE patients_id = $patient_change_id") as $value) {
                            extract($value);

                            for($i = 0; $i <= 10; $i++) {
                                echo $prong_P . $segment_PQ . $prong_Q . $QRS_complex . $prong_S . $segment_ST;
                            }

                        }
                    }
                }
                ?>
            ];

            var ecg2 = [-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625,-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625,-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625,-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625

            ];

            // current date
            var firstDate = new Date();
            // now set 20 minutes back
            firstDate.setMinutes(firstDate.getDate() - 1166);

            // and generate 20 data items
            for (var i = 0; i < 180; i++) {
                var newDate = new Date(firstDate);
                // each time we add one minute
                newDate.setMinutes(newDate.getMinutes() + i);
                // some random number
                // var visits = Math.round(Math.random() * 40 + 10 + i + Math.random() * i / 5);
                var visits = ecg[i];
                var illness = ecg2[i];

                // add data item to the array
                v6Data.push({
                    date: newDate,
                    visits: visits,
                    illness: illness
                });
            }
            return v6Data;
        }

        var chartAVR = AmCharts.makeChart("chart-avr", {
            "type": "serial",
            "theme": "light",
            "marginRight": 80,
            "dataProvider": avrData,
            "mouseWheelZoomEnabled": true,
            "valueAxes": [{
                "position": "left",
                "title": "Напряжение"
            },
                {
                    "position": "right",
                    "title": "Напряжение"
                }],
            "graphs": [{
                "id": "g1",
                "fillAlphas": 0,
                "valueField": "visits",
                "balloonText": "<div style='margin:5px; font-size:16px;'><b>[[value]]</b> mV</div>",
                "lineColor": "red"
            },
                /*    {
                 "id": "g2",
                 "fillAlphas": 0,
                 "valueField": "illness",
                 "balloonText": "<div style='margin:5px; font-size:16px;'><b>[[value]]</b> mV</div>",
                 "lineColor": "blue"
                 }*/ ],
            "chartScrollbar": {
                "graph": "g1",
                "scrollbarHeight": 80,
                offset: 30,
                "backgroundAlpha": 0,
                "selectedBackgroundAlpha": 0.1,
                "selectedBackgroundColor": "#888888",
                "graphFillAlpha": 0,
                "graphLineAlpha": 0.5,
                "selectedGraphFillAlpha": 0,
                "selectedGraphLineAlpha": 1,
                "autoGridCount": true,
                "color": "#AAAAAA"
            },
            "chartCursor": {
                "categoryBalloonDateFormat": "JJ:NN, DD MMMM",
                "cursorPosition": "mouse"
            },
            "categoryField": "date",
            "categoryAxis": {
                "minPeriod": "mm",
                "parseDates": true
            },
            "export": {
                "enabled": true,
                "dateFormat": "YYYY-MM-DD HH:NN:SS:QQ"
            }
        });

        chartAVR.addListener("dataUpdated", zoomChartAVR);
// when we apply theme, the dataUpdated event is fired even before we add listener, so
// we need to call zoomChart here
        zoomChartAVR();
// this method is called when chart is first inited as we listen for "dataUpdated" event
        function zoomChartAVR() {
            // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
            chartAVR.zoomToIndexes(avrData.length - 250, avrData.length - 100);
        }

        function avr() {
            var avrData = [];
            var ecg = [
                <?php
                if(empty($_GET['patients_id'])) {
                    echo '0';
                } else {
                    $patient_change_id = $_GET['patients_id'];

                    if(!empty($patient_change_id)) {
                        foreach ($db->select("SELECT * FROM `avr` WHERE patients_id = $patient_change_id") as $value) {
                            extract($value);

                            for($i = 0; $i <= 10; $i++) {
                                echo $prong_P . $segment_PQ . $prong_Q . $QRS_complex . $prong_S . $segment_ST;
                            }

                        }
                    }
                }
                ?>
            ];

            var ecg2 = [-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625,-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625,-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625,-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625

            ];

            // current date
            var firstDate = new Date();
            // now set 20 minutes back
            firstDate.setMinutes(firstDate.getDate() - 1166);

            // and generate 20 data items
            for (var i = 0; i < 180; i++) {
                var newDate = new Date(firstDate);
                // each time we add one minute
                newDate.setMinutes(newDate.getMinutes() + i);
                // some random number
                // var visits = Math.round(Math.random() * 40 + 10 + i + Math.random() * i / 5);
                var visits = ecg[i];
                var illness = ecg2[i];

                // add data item to the array
                avrData.push({
                    date: newDate,
                    visits: visits,
                    illness: illness
                });
            }
            return avrData;
        }

        var chartAVL = AmCharts.makeChart("chart-avl", {
            "type": "serial",
            "theme": "light",
            "marginRight": 80,
            "dataProvider": avlData,
            "mouseWheelZoomEnabled": true,
            "valueAxes": [{
                "position": "left",
                "title": "Напряжение"
            },
                {
                    "position": "right",
                    "title": "Напряжение"
                }],
            "graphs": [{
                "id": "g1",
                "fillAlphas": 0,
                "valueField": "visits",
                "balloonText": "<div style='margin:5px; font-size:16px;'><b>[[value]]</b> mV</div>",
                "lineColor": "red"
            },
                /*    {
                 "id": "g2",
                 "fillAlphas": 0,
                 "valueField": "illness",
                 "balloonText": "<div style='margin:5px; font-size:16px;'><b>[[value]]</b> mV</div>",
                 "lineColor": "blue"
                 }*/ ],
            "chartScrollbar": {
                "graph": "g1",
                "scrollbarHeight": 80,
                offset: 30,
                "backgroundAlpha": 0,
                "selectedBackgroundAlpha": 0.1,
                "selectedBackgroundColor": "#888888",
                "graphFillAlpha": 0,
                "graphLineAlpha": 0.5,
                "selectedGraphFillAlpha": 0,
                "selectedGraphLineAlpha": 1,
                "autoGridCount": true,
                "color": "#AAAAAA"
            },
            "chartCursor": {
                "categoryBalloonDateFormat": "JJ:NN, DD MMMM",
                "cursorPosition": "mouse"
            },
            "categoryField": "date",
            "categoryAxis": {
                "minPeriod": "mm",
                "parseDates": true
            },
            "export": {
                "enabled": true,
                "dateFormat": "YYYY-MM-DD HH:NN:SS:QQ"
            }
        });

        chartAVL.addListener("dataUpdated", zoomChartAVL);
// when we apply theme, the dataUpdated event is fired even before we add listener, so
// we need to call zoomChart here
        zoomChartAVL();
// this method is called when chart is first inited as we listen for "dataUpdated" event
        function zoomChartAVL() {
            // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
            chartAVL.zoomToIndexes(avlData.length - 250, avlData.length - 100);
        }

        function avl() {
            var avlData = [];
            var ecg = [
                <?php
                if(empty($_GET['patients_id'])) {
                    echo '0';
                } else {
                    $patient_change_id = $_GET['patients_id'];

                    if(!empty($patient_change_id)) {
                        foreach ($db->select("SELECT * FROM `avl` WHERE patients_id = $patient_change_id") as $value) {
                            extract($value);

                            for($i = 0; $i <= 10; $i++) {
                                echo $prong_P . $segment_PQ . $prong_Q . $QRS_complex . $prong_S . $segment_ST;
                            }

                        }
                    }
                }
                ?>
            ];

            var ecg2 = [-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625,-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625,-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625,-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625

            ];

            // current date
            var firstDate = new Date();
            // now set 20 minutes back
            firstDate.setMinutes(firstDate.getDate() - 1166);

            // and generate 20 data items
            for (var i = 0; i < 180; i++) {
                var newDate = new Date(firstDate);
                // each time we add one minute
                newDate.setMinutes(newDate.getMinutes() + i);
                // some random number
                // var visits = Math.round(Math.random() * 40 + 10 + i + Math.random() * i / 5);
                var visits = ecg[i];
                var illness = ecg2[i];

                // add data item to the array
                avlData.push({
                    date: newDate,
                    visits: visits,
                    illness: illness
                });
            }
            return avlData;
        }

        var chartAVF = AmCharts.makeChart("chart-avf", {
            "type": "serial",
            "theme": "light",
            "marginRight": 80,
            "dataProvider": avfData,
            "mouseWheelZoomEnabled": true,
            "valueAxes": [{
                "position": "left",
                "title": "Напряжение"
            },
                {
                    "position": "right",
                    "title": "Напряжение"
                }],
            "graphs": [{
                "id": "g1",
                "fillAlphas": 0,
                "valueField": "visits",
                "balloonText": "<div style='margin:5px; font-size:16px;'><b>[[value]]</b> mV</div>",
                "lineColor": "red"
            },
                /*     {
                 "id": "g2",
                 "fillAlphas": 0,
                 "valueField": "illness",
                 "balloonText": "<div style='margin:5px; font-size:16px;'><b>[[value]]</b> mV</div>",
                 "lineColor": "blue"
                 }*/ ],
            "chartScrollbar": {
                "graph": "g1",
                "scrollbarHeight": 80,
                offset: 30,
                "backgroundAlpha": 0,
                "selectedBackgroundAlpha": 0.1,
                "selectedBackgroundColor": "#888888",
                "graphFillAlpha": 0,
                "graphLineAlpha": 0.5,
                "selectedGraphFillAlpha": 0,
                "selectedGraphLineAlpha": 1,
                "autoGridCount": true,
                "color": "#AAAAAA"
            },
            "chartCursor": {
                "categoryBalloonDateFormat": "JJ:NN, DD MMMM",
                "cursorPosition": "mouse"
            },
            "categoryField": "date",
            "categoryAxis": {
                "minPeriod": "mm",
                "parseDates": true
            },
            "export": {
                "enabled": true,
                "dateFormat": "YYYY-MM-DD HH:NN:SS:QQ"
            }
        });

        chartAVF.addListener("dataUpdated", zoomChartAVF);
// when we apply theme, the dataUpdated event is fired even before we add listener, so
// we need to call zoomChart here
        zoomChartAVF();
// this method is called when chart is first inited as we listen for "dataUpdated" event
        function zoomChartAVF() {
            // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
            chartAVF.zoomToIndexes(avfData.length - 250, avfData.length - 100);
        }

        function avf() {
            var avfData = [];
            var ecg = [
                <?php
                if(empty($_GET['patients_id'])) {
                    echo '0';
                } else {
                    $patient_change_id = $_GET['patients_id'];

                    if(!empty($patient_change_id)) {
                        foreach ($db->select("SELECT * FROM `avf` WHERE patients_id = $patient_change_id") as $value) {
                            extract($value);

                            for($i = 0; $i <= 10; $i++) {
                                echo $prong_P . $segment_PQ . $prong_Q . $QRS_complex . $prong_S . $segment_ST;
                            }

                        }
                    }
                }
                ?>
            ];

            var ecg2 = [-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625,-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625,-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625,-0.0745780029296875, -0.07479357910156251, -0.0725338134765625, -0.0418538818359375,
                0.2944150390625001, 0.0004605712890625, -0.28949267578125, -0.697251220703125,
                0.0176046142578125, 0.0300162353515625, 0.0433489990234375, 0.056962646484375004,
                0.0704832763671875, 0.0770511474609375, 0.0898175048828125, 0.10311853027343751,
                0.117046142578125, 0.1312630615234375, 0.1529300537109375, 0.167607177734375,
                0.1899068603515625, 0.2124422607421875, 0.235044677734375, 0.2575535888671875,
                0.2200599365234375, 0.1728209228515625, 0.133416259765625, 0.086224853515625,
                0.05493408203125, 0.02409423828125, 0.00922607421875, -0.0043409423828125,
                -0.0097349853515625, -0.013127685546875, -0.01423095703125, -0.013834716796875,
                -0.012556030273437501, -0.010675048828125, -0.00835888671875,
                -0.0057305908203125, -0.0000562744140625

            ];

            // current date
            var firstDate = new Date();
            // now set 20 minutes back
            firstDate.setMinutes(firstDate.getDate() - 1166);

            // and generate 20 data items
            for (var i = 0; i < 180; i++) {
                var newDate = new Date(firstDate);
                // each time we add one minute
                newDate.setMinutes(newDate.getMinutes() + i);
                // some random number
                // var visits = Math.round(Math.random() * 40 + 10 + i + Math.random() * i / 5);
                var visits = ecg[i];
                var illness = ecg2[i];

                // add data item to the array
                avfData.push({
                    date: newDate,
                    visits: visits,
                    illness: illness
                });
            }
            return avfData;
        }
    });
</script>
