  <footer class="main-footer">
                <div class="container">
                    <strong>Copyright &copy; 2017-2018 <a href="<?php echo base_url() ?>admin/">Mega Multiplex</a>.</strong> All rights reserved. 
                </div>
            </footer> <!-- /. footer -->
        </div> <!-- ./wrapper -->
        <!-- jQuery -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- jquery-ui -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Bootstrap js -->
        <script src="<?php echo base_url() ?>assets/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- bootsnav js -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/bootsnav/js/bootsnav.min.js" type="text/javascript"></script>
        <!-- lobipanel js -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
        <!-- animsition js -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/animsition/js/animsition.min.js" type="text/javascript"></script>
        <!-- SlimScroll js -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- FastClick js-->
        <script src="<?php echo base_url() ?>assets/assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
        <!-- End Core Plugins
        =====================================================================-->
        <!-- Start Page Lavel Plugins
        =====================================================================-->
        <!-- Toastr js -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/toastr/toastr.min.js" type="text/javascript"></script>
        <!-- Sparkline js -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/sparkline/sparkline.min.js" type="text/javascript"></script>
        <!-- Counterup js -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/assets/plugins/counterup/waypoints.js" type="text/javascript"></script>
        <!-- Emojionearea -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/emojionearea/emojionearea.min.js" type="text/javascript"></script>
        <!-- Monthly js -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/monthly/monthly.min.js" type="text/javascript"></script>
        <!-- amchat js -->
        <script src="<?php echo base_url() ?>assets/assets/plugins/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/assets/plugins/amcharts/ammap.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/assets/plugins/amcharts/worldLow.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/assets/plugins/amcharts/serial.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/assets/plugins/amcharts/export.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/assets/plugins/amcharts/dark.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/assets/plugins/amcharts/pie.js" type="text/javascript"></script>
  <script src="<?php echo base_url() ?>assets/chosen/chosen.jquery.js" type="text/javascript"></script>
  <script src="<?php echo base_url() ?>assets/chosen/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
  <script src="<?php echo base_url() ?>assets/chosen/docsupport/init.js" type="text/javascript" charset="utf-8"></script>
        <!-- Start Theme label Script
        =====================================================================-->
        <!-- Dashboard js -->
        <script src="<?php echo base_url() ?>assets/assets/dist/js/dashboard.js" type="text/javascript"></script>
        <!-- End Theme label Script
        =====================================================================-->
        <script src="<?php echo base_url() ?>assets/assets/plugins/datatables/dataTables.min.js" type="text/javascript"></script>
               <script>
            $(document).ready(function () {

                "use strict"; // Start of use strict

                $('#dataTableExample1').DataTable({
                    "dom": "<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
                    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                    "iDisplayLength": 10
                });

                $("#dataTableExample2").DataTable({
                    dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
                    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                    "order": [[ 0, "desc" ]],
                    buttons: [
                        {extend: 'copy', className: 'btn-sm'},
                        {extend: 'csv', title: 'Mega Multiplex | CSV', className: 'btn-sm'},
                        {extend: 'excel', title: 'Mega Multiplex | Xls', className: 'btn-sm'},
                        {extend: 'pdf', title: 'Mega Multiplex | PDF', className: 'btn-sm'},
                        {extend: 'print', className: 'btn-sm'}
                    ]
                });

            });

        </script>

        <script>


        
            $(document).ready(function () {

                "use strict"; // Start of use strict

                // notification
                setTimeout(function () {
                    toastr.options = {
                        closeButton: true,
                        progressBar: true,
                        showMethod: 'slideDown',
                        timeOut: 4000
                                // positionClass: "toast-top-left"
                    };
                    toastr.success('Mega Multiplex', 'Welcome to Mega Multiplex');

                }, 1300);

                //counter
                $('.count-number').counterUp({
                    delay: 10,
                    time: 5000
                });

                //Chat list
                $('.chat_list').slimScroll({
                    size: '3px',
                    height: '296px',
                    allowPageScroll: true,
                    railVisible: true
                });

                // Message
                $('.message_inner').slimScroll({
                    size: '3px',
                    height: '351px',
                    allowPageScroll: true,
                    railVisible: true
                            // position: 'left'
                });

                //emojionearea
                $(".emojionearea").emojioneArea({
                    pickerPosition: "top",
                    tonesStyle: "radio"
                });

                //monthly calender
                $('#m_calendar').monthly({
                    mode: 'event',
                    //jsonUrl: 'events.json',
                    //dataType: 'json'
                    xmlUrl: 'events.xml'
                });

                //Sparklines Charts
                $('.sparkline1').sparkline([4, 6, 7, 7, 4, 3, 2, 4, 6, 7, 4, 6, 7, 7, 4, 3, 2, 4, 6, 7, 7, 4, 3, 1, 5, 7, 6, 6, 5, 5, 4, 4, 3, 3, 4, 4, 5, 6, 7, 2, 3, 4], {
                    type: 'bar',
                    barColor: '#fff',
                    height: '40',
                    barWidth: '3',
                    barSpacing: 2
                });

                $(".sparkline2").sparkline([4, 6, 7, 7, 4, 3, 2, 1, 4, 4, 5, 6, 3, 4, 5, 8, 7, 6, 9, 3, 2, 4, 1, 5, 6, 4, 3, 7, 6, 8, 3, 2, 6], {
                    type: 'discrete',
                    lineColor: '#fff',
                    width: '200',
                    height: '40'
                });

                $(".sparkline3").sparkline([5, 6, 7, 2, 0, -4, -2, -3, -4, 4, 5, 6, 3, 2, 4, -6, -5, -4, 6, 5, 4, 3, 4, -3, -5, -4, 5, 4, 3, 6, -2, -3, -4, -5, 5, 6, 3, 4, 5], {
                    type: 'bar',
                    barColor: '#fff',
                    negBarColor: '#c6c6c6',
                    width: '200',
                    height: '40'
                });

                $(".sparkline4").sparkline([10, 34, 13, 33, 35, 24, 32, 24, 52, 35], {
                    type: 'line',
                    height: '40',
                    width: '100%',
                    lineColor: '#fff',
                    fillColor: 'rgba(255,255,255,0.1)'
                });

                $(".sparkline5").sparkline([32, 15, 22, 46, 33, 86, 54, 73, 53, 12, 53, 23, 65, 23, 63, 53, 42, 34, 56, 76, 15], {
                    type: 'line',
                    lineColor: '#558B2F',
                    fillColor: '#558B2F',
                    width: '100',
                    height: '20'
                });

                $(".sparkline6").sparkline([4, 6, 7, 7, 4, 3, 2, 1, 4, 4, 5, 6, 3, 4, 5, 8, 7, 6, 9, 3, 2, 4, 1, 5, 6, 4, 3, 7], {
                    type: 'discrete',
                    lineColor: '#558B2F',
                    width: '100',
                    height: '20'
                });

                $(".sparkline7").sparkline([5, 6, 7, 2, 0, -4, -2, 4, 5, 6, 3, 2, 4, -6, -5, -4, 6, 5, 4, 3], {
                    type: 'bar',
                    barColor: '#558B2F',
                    negBarColor: '#c6c6c6',
                    width: '100',
                    height: '20'
                });

                //amchart
                var chart = AmCharts.makeChart("chartdiv", {
                    "type": "serial",
                    "theme": "dark",
                    "dataDateFormat": "YYYY-MM-DD",
                    "precision": 2,
                    "valueAxes": [{
                            "id": "v1",
                            "title": "Sales",
                            "position": "left",
                            "autoGridCount": false,
                            "labelFunction": function (value) {
                                return "$" + Math.round(value) + "M";
                            }
                        }, {
                            "id": "v2",
                            "title": "Market Days",
                            "gridAlpha": 0,
                            "position": "right",
                            "autoGridCount": false
                        }],
                    "graphs": [{
                            "id": "g3",
                            "valueAxis": "v1",
                            "lineColor": "#e1ede9",
                            "fillColors": "#e1ede9",
                            "fillAlphas": 1,
                            "type": "column",
                            "title": "Actual Sales",
                            "valueField": "sales2",
                            "clustered": false,
                            "columnWidth": 0.5,
                            "legendValueText": "$[[value]]M",
                            "balloonText": "[[title]]<br /><b style='font-size: 130%'>$[[value]]M</b>"
                        }, {
                            "id": "g4",
                            "valueAxis": "v1",
                            "lineColor": "#558B2F",
                            "fillColors": "#558B2F",
                            "fillAlphas": 1,
                            "type": "column",
                            "title": "Target Sales",
                            "valueField": "sales1",
                            "clustered": false,
                            "columnWidth": 0.3,
                            "legendValueText": "$[[value]]M",
                            "balloonText": "[[title]]<br /><b style='font-size: 130%'>$[[value]]M</b>"
                        }, {
                            "id": "g1",
                            "valueAxis": "v2",
                            "bullet": "round",
                            "bulletBorderAlpha": 1,
                            "bulletColor": "#FFFFFF",
                            "bulletSize": 5,
                            "hideBulletsCount": 50,
                            "lineThickness": 2,
                            "lineColor": "#20acd4",
                            "type": "smoothedLine",
                            "title": "Market Days",
                            "useLineColorForBulletBorder": true,
                            "valueField": "market1",
                            "balloonText": "[[title]]<br /><b style='font-size: 130%'>[[value]]</b>"
                        }, {
                            "id": "g2",
                            "valueAxis": "v2",
                            "bullet": "round",
                            "bulletBorderAlpha": 1,
                            "bulletColor": "#E5343D",
                            "bulletSize": 5,
                            "hideBulletsCount": 50,
                            "lineThickness": 2,
                            "lineColor": "#E5343D",
                            "type": "smoothedLine",
                            "dashLength": 5,
                            "title": "Market Days ALL",
                            "useLineColorForBulletBorder": true,
                            "valueField": "market2",
                            "balloonText": "[[title]]<br /><b style='font-size: 130%'>[[value]]</b>"
                        }],
                    "chartScrollbar": {
                        "graph": "g1",
                        "oppositeAxis": false,
                        "offset": 30,
                        "scrollbarHeight": 50,
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
                        "pan": true,
                        "valueLineEnabled": true,
                        "valueLineBalloonEnabled": true,
                        "cursorAlpha": 0,
                        "valueLineAlpha": 0.2
                    },
                    "categoryField": "date",
                    "categoryAxis": {
                        "parseDates": true,
                        "dashLength": 1,
                        "minorGridEnabled": true
                    },
                    "legend": {
                        "useGraphSettings": true,
                        "position": "top"
                    },
                    "balloon": {
                        "borderThickness": 1,
                        "shadowAlpha": 0
                    },
                    "export": {
                        "enabled": true
                    },
                    "dataProvider": [{
                            "date": "2013-01-16",
                            "market1": 71,
                            "market2": 75,
                            "sales1": 5,
                            "sales2": 8
                        }, {
                            "date": "2013-01-17",
                            "market1": 74,
                            "market2": 78,
                            "sales1": 4,
                            "sales2": 6
                        }, {
                            "date": "2013-01-18",
                            "market1": 78,
                            "market2": 88,
                            "sales1": 5,
                            "sales2": 2
                        }, {
                            "date": "2013-01-19",
                            "market1": 85,
                            "market2": 89,
                            "sales1": 8,
                            "sales2": 9
                        }, {
                            "date": "2013-01-20",
                            "market1": 82,
                            "market2": 89,
                            "sales1": 9,
                            "sales2": 6
                        }, {
                            "date": "2013-01-21",
                            "market1": 83,
                            "market2": 85,
                            "sales1": 3,
                            "sales2": 5
                        }, {
                            "date": "2013-01-22",
                            "market1": 88,
                            "market2": 92,
                            "sales1": 5,
                            "sales2": 7
                        }, {
                            "date": "2013-01-23",
                            "market1": 85,
                            "market2": 90,
                            "sales1": 7,
                            "sales2": 6
                        }, {
                            "date": "2013-01-24",
                            "market1": 85,
                            "market2": 91,
                            "sales1": 9,
                            "sales2": 5
                        }, {
                            "date": "2013-01-25",
                            "market1": 80,
                            "market2": 84,
                            "sales1": 5,
                            "sales2": 8
                        }, {
                            "date": "2013-01-26",
                            "market1": 87,
                            "market2": 92,
                            "sales1": 4,
                            "sales2": 8
                        }, {
                            "date": "2013-01-27",
                            "market1": 84,
                            "market2": 87,
                            "sales1": 3,
                            "sales2": 4
                        }, {
                            "date": "2013-01-28",
                            "market1": 83,
                            "market2": 88,
                            "sales1": 5,
                            "sales2": 7
                        }, {
                            "date": "2013-01-29",
                            "market1": 84,
                            "market2": 87,
                            "sales1": 5,
                            "sales2": 8
                        }, {
                            "date": "2013-01-30",
                            "market1": 81,
                            "market2": 85,
                            "sales1": 4,
                            "sales2": 7
                        }]
                });


                var chart = AmCharts.makeChart("chartdiv2", {
                    "type": "serial",
                    "theme": "dark",
                    "legend": {
                        "equalWidths": false,
                        "useGraphSettings": true,
                        "valueAlign": "left",
                        "valueWidth": 120
                    },
                    "dataProvider": [{
                            "date": "2012-01-01",
                            "distance": 227,
                            "townName": "New York",
                            "townName2": "New York",
                            "townSize": 25,
                            "latitude": 40.71,
                            "duration": 408
                        }, {
                            "date": "2012-01-02",
                            "distance": 371,
                            "townName": "Washington",
                            "townSize": 14,
                            "latitude": 38.89,
                            "duration": 482
                        }, {
                            "date": "2012-01-03",
                            "distance": 433,
                            "townName": "Wilmington",
                            "townSize": 6,
                            "latitude": 34.22,
                            "duration": 562
                        }, {
                            "date": "2012-01-04",
                            "distance": 345,
                            "townName": "Jacksonville",
                            "townSize": 7,
                            "latitude": 30.35,
                            "duration": 379
                        }, {
                            "date": "2012-01-05",
                            "distance": 480,
                            "townName": "Miami",
                            "townName2": "Miami",
                            "townSize": 10,
                            "latitude": 25.83,
                            "duration": 501
                        }, {
                            "date": "2012-01-06",
                            "distance": 386,
                            "townName": "Tallahassee",
                            "townSize": 7,
                            "latitude": 30.46,
                            "duration": 443
                        }, {
                            "date": "2012-01-07",
                            "distance": 348,
                            "townName": "New Orleans",
                            "townSize": 10,
                            "latitude": 29.94,
                            "duration": 405
                        }, {
                            "date": "2012-01-08",
                            "distance": 238,
                            "townName": "Houston",
                            "townName2": "Houston",
                            "townSize": 16,
                            "latitude": 29.76,
                            "duration": 309
                        }, {
                            "date": "2012-01-09",
                            "distance": 218,
                            "townName": "Dalas",
                            "townSize": 17,
                            "latitude": 32.8,
                            "duration": 287
                        }, {
                            "date": "2012-01-10",
                            "distance": 349,
                            "townName": "Oklahoma City",
                            "townSize": 11,
                            "latitude": 35.49,
                            "duration": 485
                        }, {
                            "date": "2012-01-11",
                            "distance": 603,
                            "townName": "Kansas City",
                            "townSize": 10,
                            "latitude": 39.1,
                            "duration": 890
                        }, {
                            "date": "2012-01-12",
                            "distance": 534,
                            "townName": "Denver",
                            "townName2": "Denver",
                            "townSize": 18,
                            "latitude": 39.74,
                            "duration": 810
                        }, {
                            "date": "2012-01-13",
                            "townName": "Salt Lake City",
                            "townSize": 12,
                            "distance": 425,
                            "duration": 670,
                            "latitude": 40.75,
                            "dashLength": 8,
                            "alpha": 0.4
                        }, {
                            "date": "2012-01-14",
                            "latitude": 36.1,
                            "duration": 470,
                            "townName": "Las Vegas",
                            "townName2": "Las Vegas"
                        }, {
                            "date": "2012-01-15"
                        }, {
                            "date": "2012-01-16"
                        }, {
                            "date": "2012-01-17"
                        }, {
                            "date": "2012-01-18"
                        }, {
                            "date": "2012-01-19"
                        }],
                    "valueAxes": [{
                            "id": "distanceAxis",
                            "axisAlpha": 0,
                            "gridAlpha": 0,
                            "position": "left",
                            "title": "distance"
                        }, {
                            "id": "latitudeAxis",
                            "axisAlpha": 0,
                            "gridAlpha": 0,
                            "labelsEnabled": false,
                            "position": "right"
                        }, {
                            "id": "durationAxis",
                            "duration": "mm",
                            "durationUnits": {
                                "hh": "h ",
                                "mm": "min"
                            },
                            "axisAlpha": 0,
                            "gridAlpha": 0,
                            "inside": true,
                            "position": "right",
                            "title": "duration"
                        }],
                    "graphs": [{
                            "alphaField": "alpha",
                            "balloonText": "[[value]] miles",
                            "dashLengthField": "dashLength",
                            "fillAlphas": 0.7,
                            "legendPeriodValueText": "total: [[value.sum]] mi",
                            "legendValueText": "[[value]] mi",
                            "title": "distance",
                            "type": "column",
                            "valueField": "distance",
                            "valueAxis": "distanceAxis"
                        }, {
                            "balloonText": "latitude:[[value]]",
                            "bullet": "round",
                            "bulletBorderAlpha": 1,
                            "useLineColorForBulletBorder": true,
                            "bulletColor": "#FFFFFF",
                            "bulletSizeField": "townSize",
                            "dashLengthField": "dashLength",
                            "descriptionField": "townName",
                            "labelPosition": "right",
                            "labelText": "[[townName2]]",
                            "legendValueText": "[[value]]/[[description]]",
                            "title": "latitude/city",
                            "fillAlphas": 0,
                            "valueField": "latitude",
                            "valueAxis": "latitudeAxis"
                        }, {
                            "bullet": "square",
                            "bulletBorderAlpha": 1,
                            "bulletBorderThickness": 1,
                            "dashLengthField": "dashLength",
                            "legendValueText": "[[value]]",
                            "title": "duration",
                            "fillAlphas": 0,
                            "valueField": "duration",
                            "valueAxis": "durationAxis"
                        }],
                    "chartCursor": {
                        "categoryBalloonDateFormat": "DD",
                        "cursorAlpha": 0.1,
                        "cursorColor": "#000000",
                        "fullWidth": true,
                        "valueBalloonsEnabled": false,
                        "zoomable": false
                    },
                    "dataDateFormat": "YYYY-MM-DD",
                    "categoryField": "date",
                    "categoryAxis": {
                        "dateFormats": [{
                                "period": "DD",
                                "format": "DD"
                            }, {
                                "period": "WW",
                                "format": "MMM DD"
                            }, {
                                "period": "MM",
                                "format": "MMM"
                            }, {
                                "period": "YYYY",
                                "format": "YYYY"
                            }],
                        "parseDates": true,
                        "autoGridCount": false,
                        "axisColor": "#555555",
                        "gridAlpha": 0.1,
                        "gridColor": "#FFFFFF",
                        "gridCount": 50
                    },
                    "export": {
                        "enabled": true
                    }
                });

                /**
                 * SVG path for target icon
                 */
                var targetSVG = "M9,0C4.029,0,0,4.029,0,9s4.029,9,9,9s9-4.029,9-9S13.971,0,9,0z M9,15.93 c-3.83,0-6.93-3.1-6.93-6.93S5.17,2.07,9,2.07s6.93,3.1,6.93,6.93S12.83,15.93,9,15.93 M12.5,9c0,1.933-1.567,3.5-3.5,3.5S5.5,10.933,5.5,9S7.067,5.5,9,5.5 S12.5,7.067,12.5,9z";

                /**
                 * SVG path for plane icon
                 */
                var planeSVG = "m2,106h28l24,30h72l-44,-133h35l80,132h98c21,0 21,34 0,34l-98,0 -80,134h-35l43,-133h-71l-24,30h-28l15,-47";

                /**
                 * Create the map
                 */
                var map = AmCharts.makeChart("chartMap", {
                    "type": "map",
                    "theme": "dark",

                    "projection": "winkel3",
                    "dataProvider": {
                        "map": "worldLow",

                        "lines": [{
                                "id": "line1",
                                "arc": -0.85,
                                "alpha": 0.3,
                                "latitudes": [23.684994, 48.8567, 43.8163, 34.3, 23, 61.524010, 20.593684, 33.223191],
                                "longitudes": [90.356331, 2.3510, -79.4287, -118.15, -82, 105.318756, 78.962880, 43.679291]
                            }, {
                                "id": "line2",
                                "alpha": 0,
                                "color": "#E5343D",
                                "latitudes": [23.684994, 48.8567, 43.8163, 34.3, 23, 61.524010, 20.593684, 33.223191],
                                "longitudes": [90.356331, 2.3510, -79.4287, -118.15, -82, 105.318756, 78.962880, 43.679291]
                            }],
                        "images": [{
                                "svgPath": targetSVG,
                                "title": "Bangladesh",
                                "latitude": 23.684994,
                                "longitude": 90.356331
                            }, {
                                "svgPath": targetSVG,
                                "title": "Paris",
                                "latitude": 48.8567,
                                "longitude": 2.3510
                            }, {
                                "svgPath": targetSVG,
                                "title": "Toronto",
                                "latitude": 43.8163,
                                "longitude": -79.4287
                            }, {
                                "svgPath": targetSVG,
                                "title": "Los Angeles",
                                "latitude": 34.3,
                                "longitude": -118.15
                            }, {
                                "svgPath": targetSVG,
                                "title": "Havana",
                                "latitude": 23,
                                "longitude": -82
                            }, {}, {
                                "svgPath": targetSVG,
                                "title": "Russia",
                                "latitude": 61.524010,
                                "longitude": 105.318756
                            }, {}, {
                                "svgPath": targetSVG,
                                "title": "India",
                                "latitude": 20.593684,
                                "longitude": 78.962880
                            }, {}, {
                                "svgPath": targetSVG,
                                "title": "Iraq",
                                "latitude": 33.223191,
                                "longitude": 43.679291
                            }, {
                                "svgPath": planeSVG,
                                "positionOnLine": 0,
                                "color": "#000000",
                                "alpha": 0.1,
                                "animateAlongLine": true,
                                "lineId": "line2",
                                "flipDirection": true,
                                "loop": true,
                                "scale": 0.03,
                                "positionScale": 1.3
                            }, {
                                "svgPath": planeSVG,
                                "positionOnLine": 0,
                                "color": "#585869",
                                "animateAlongLine": true,
                                "lineId": "line1",
                                "flipDirection": true,
                                "loop": true,
                                "scale": 0.03,
                                "positionScale": 1.8
                            }]
                    },

                    "areasSettings": {
                        "unlistedAreasColor": "#5b69bc"
                    },

                    "imagesSettings": {
                        "color": "#E5343D",
                        "rollOverColor": "#E5343D",
                        "selectedColor": "#E5343D",
                        "pauseDuration": 0.2,
                        "animationDuration": 4,
                        "adjustAnimationSpeed": true
                    },

                    "linesSettings": {
                        "color": "#E5343D",
                        "alpha": 0.4
                    },

                    "export": {
                        "enabled": true
                    }

                });

                var chart = AmCharts.makeChart("chartPie", {
                    "type": "pie",
                    "theme": "dark",
                    "addClassNames": true,
                    "classNameField": "class",
                    "dataProvider": [{
                            "value": 4852,
                            "class": "color1"
                        }, {
                            "value": 9899,
                            "class": "color2"
                        }, {
                            "value": 7789,
                            "class": "color3"
                        }],
                    "valueField": "value",
                    "labelRadius": 5,

                    "radius": "42%",
                    "innerRadius": "60%",
                    "labelText": "[[title]]",
                    "export": {
                        "enabled": true
                    }
                });

            });



  $('.fa.fa-trash').click(function() {
      return confirm("Are you sure ?");
  });

  $('.categoryID').change(function(){
           var categoryID=$(this).val();
           $.ajax({
            url:"<?php echo base_url() ?>admin/get_subcategories",
            type:"post",
            data:{categoryID:categoryID},
            success:function(resp) {
               $('.subCategoryID').html(resp);
            }
           });
  });
        </script>
    </body>

<!-- Mirrored from adminpage.thememinister.com/preview_page/theme/AdminPage_black_v1.0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jul 2017 06:37:12 GMT -->
</html>


<script type="text/javascript">
 $(document).ready(function() {
    $("body").on("click",".add-more",function(){
        var html = $(".after-add-more").first().clone();
        //  $(html).find(".change").prepend("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");
          $(html).find(".change").html("<a class='btn btn-danger remove'><i class='fa fa-trash-o' aria-hidden='true'></i> </a> "+' <a class="btn btn-success add-more"><strong> + </strong> </a>');
        $(".after-add-more").last().after(html);
    });
    $("body").on("click",".remove",function(){
        $(this).parents(".after-add-more").remove();
    });
});

 $(document).ready(function () {
                 var date = new Date();
                 var currentMonth = date.getMonth();
                 var currentDate = date.getDate();
                 var currentYear = date.getFullYear();

                 $('.releasedate').datepicker({
                     minDate: new Date(currentYear, currentMonth, currentDate),
                     dateFormat: 'd M yy'
                 });
             });


</script>

<!-- 
             <script type="text/javascript">
 $(document).ready(function() {
    $("body").on("click",".add-more",function(){
      
      // alert();

          var html = $(".change").html();
        
    //       $(html).find(".change").html("<a class='btn btn-danger remove'><i class='fa fa-trash-o' aria-hidden='true'></i> </a> "+' <a class="btn btn-success add-more"><strong> + </strong> </a>');
    //      $(".after-add-more").last().after(html);
    // });
    // $("body").on("click",".remove",function(){
    //     $(this).parents(".after-add-more").remove();

      $('.change').append(html);

    });

});
</script> -->