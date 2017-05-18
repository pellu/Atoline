<?php
session_start();
$pagename="index";
include('header.php');
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Tableau de bord

        </h1>
        <h1 class="breadcrumb" style="font-size: 
		"><a href="#myModal" style="font-size: 20px;" role="button" class="" data-toggle="modal">Antoline Chat</a>
        </h1>
    </section>

    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="box box-primary direct-chat direct-chat-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Atoline Chat</h3>

                            <div class="box-tools pull-right">
                                <span data-toggle="tooltip" title="" class="badge bg-light-blue" data-original-title="3 New Messages">3</span>
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
                                <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
								<i class="fa fa-comments"></i></button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <!-- Conversations are loaded here -->
                            <div class="direct-chat-messages">
                                <!-- Message. Default to the left -->
                                <div class="direct-chat-msg">
                                    <div class="direct-chat-info clearfix">
                                        <span class="direct-chat-name pull-left"> Docteur Alexander Pierce</span>
                                        <span class="direct-chat-timestamp pull-right">17 Mai 14:00 </span>
                                    </div>
                                    <!-- /.direct-chat-info -->
                                    <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="Message User Image">
                                    <!-- /.direct-chat-img -->
                                    <div class="direct-chat-text">
                                        Bonjour, comment vous sentez vous avec votr nouvelle pompe à insuline ?
                                    </div>
                                    <!-- /.direct-chat-text -->
                                </div>
                                <!-- /.direct-chat-msg -->

                                <!-- Message to the right -->
                                <div class="direct-chat-msg right">
                                    <div class="direct-chat-info clearfix">
                                        <span class="direct-chat-name pull-right">Clotilde Dessange</span>
                                        <span class="direct-chat-timestamp pull-left">17 Mai 15:00</span>
                                    </div>
                                    <!-- /.direct-chat-info -->
                                    <img class="direct-chat-img" src="img/moi.jpg" alt="Message User Image">
                                    <!-- /.direct-chat-img -->
                                    <div class="direct-chat-text">
                                        Bonjour, merveilleusement bien, j'en est presque oublié son existence !
                                    </div>
                                    <!-- /.direct-chat-text -->
                                </div>
                                <!-- /.direct-chat-msg -->
                            </div>
                            <!--/.direct-chat-messages-->

                            <!-- Contacts are loaded here -->
                            <div class="direct-chat-contacts">
                                <ul class="contacts-list">
                                    <li>
                                        <a href="#">
                                            <img class="contacts-list-img" src="dist/img/user1-128x128.jpg" alt="User Image">

                                            <div class="contacts-list-info">
                                                <span class="contacts-list-name">
													Docteur Alexander Pierce
													<small class="contacts-list-date pull-right">17 Mai 15:00</small>
												</span>
                                                <span class="contacts-list-msg">Comment allez vous ?</span>
                                            </div>
                                            <!-- /.contacts-list-info -->
                                        </a>
                                    </li>
                                    <!-- End Contact Item -->
                                </ul>
                                <!-- /.contatcts-list -->
                            </div>
                            <!-- /.direct-chat-pane -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <form action="#" method="post">
                                <div class="input-group">
                                    <input type="text" name="message" placeholder="Écrivez votre message..." class="form-control">
                                    <span class="input-group-btn">
										<button type="submit" class="btn btn-primary btn-flat">Envoyer</button>
									</span>
                                </div>
                            </form>
                        </div>
                        <!-- /.box-footer-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video / Generic Modal -->
    <div class="modal fade" id="mediaModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- content dynamically inserted -->
                </div>
            </div>
        </div>
    </div>





    <section class="content">
        <!-- Make it flow -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <i class="fa fa-bar-chart-o"></i>

                <h3 class="box-title">Taux Glycémie</h3>


            </div>
            <div class="box-body">
                <div id="interactive2" style="height: 300px;"></div>
            </div>
        </div>

        <!-- Make it flow -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <i class="fa fa-heartbeat"></i>

                <h3 class="box-title">Pulsation coeur</h3>

            </div>
            <div class="box-body">
                <div id="interactive" style="height: 300px;"></div>
            </div>
        </div>

        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
                <!-- Custom tabs (Charts with tabs)-->

                <!-- Calendar -->
                <div class="box box-solid bg-green-gradient">
                    <div class="box-header">
                        <i class="fa fa-calendar"></i>

                        <h3 class="box-title">Vos prochains rendez-vous</h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <!-- button with a dropdown -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-bars"></i></button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li><a href="#">Ajouter un rdv</a></li>
                                    <li><a href="#">Supprimer un rdv</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Voir le calendrier</a></li>
                                </ul>
                            </div>
                            
                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <!--The calendar -->
                        <div id="calendar" style="width: 100%"></div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer text-black">
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- Progress bars -->
                                <div class="clearfix">
                                    <span class="pull-left">Niveau de la batterie</span>
                                    <small class="pull-right">90%</small>
                                </div>
                                <div class="progress xs">
                                    <div class="progress-bar progress-bar-green" style="width: 90%;">

                                    </div>
                                </div>

                                <div class="clearfix">
                                    <span class="pull-left">Reservoir d'insuline</span>
                                    <small class="pull-right">70% | 4ml</small>
                                </div>
                                <div class="progress xs">
                                    <div class="progress-bar progress-bar-green" style="width: 70%;">

                                    </div>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <div class="clearfix">
                                    <span class="pull-left">État du cathéter</span>
                                    <small class="pull-right">60% | 30h</small>
                                </div>
                                <div class="progress xs">
                                    <div class="progress-bar progress-bar-green" style="width: 60%;">

                                    </div>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>




                <!-- jQuery 2.2.3 -->
                <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>

                <!-- FLOT CHARTS -->
                <script src="plugins/flot/jquery.flot.min.js"></script>
                <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
                <script src="plugins/flot/jquery.flot.resize.min.js"></script>
                <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
                <script src="plugins/flot/jquery.flot.pie.min.js"></script>
                <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
                <script src="plugins/flot/jquery.flot.categories.min.js"></script>

                <!-- Page script -->

                <script>
                    $(function() {
                        /*
                         * Flot Interactive Chart
                         * -----------------------
                         */
                        // We use an inline data source in the example, usually data would
                        // be fetched from a server

                        var glycemie = [],
                            totalGlycemie = 300;

                        function getRandomGylcemie() {
                            if (glycemie.length > 0)
                                glycemie = glycemie.slice(1);

                            // Do a random walk
                            while (glycemie.length < totalGlycemie) {

                                var prev = glycemie.length > 0 ? glycemie[glycemie.length - 1] : 180,
                                    y = prev + Math.random() * 10 - 5;

                                if (y < 0) {
                                    y = 0;
                                } else if (y > 180) {
                                    y = 180;
                                }

                                glycemie.push(y);
                            }
                            // Zip the generated y values with the x values
                            var res = [];
                            for (var i = 0; i < glycemie.length; ++i) {
                                res.push([i, glycemie[i]]);
                            }

                            return res;
                        }


                        var data = [],
                            totalPoints = 100;

                        function getRandomData() {

                            if (data.length > 0)
                                data = data.slice(1);

                            // Do a random walk
                            while (data.length < totalPoints) {

                                var prev = data.length > 0 ? data[data.length - 1] : 100,
                                    y = prev + Math.random() * 10 - 5;

                                if (y < 0) {
                                    y = 0;
                                } else if (y > 100) {
                                    y = 100;
                                }

                                data.push(y);
                            }

                            // Zip the generated y values with the x values
                            var res = [];
                            for (var i = 0; i < data.length; ++i) {
                                res.push([i, data[i]]);
                            }

                            return res;
                        }

                        var interactive_plot = $.plot("#interactive", [getRandomData()], {
                            grid: {
                                borderColor: "#f3f3f3",
                                borderWidth: 1,
                                tickColor: "#f3f3f3"
                            },
                            series: {
                                shadowSize: 0, // Drawing is faster without shadows
                                color: "#d4000"
                            },
                            lines: {
                                fill: true, //Converts the line chart to area chart
                                color: "#d4000"
                            },
                            yaxis: {
                                min: 0,
                                max: 150,
                                show: true
                            },
                            xaxis: {
                                show: true
                            }
                        });

                        var interactive2_plot = $.plot("#interactive2", [getRandomGylcemie()], {
                            grid: {
                                borderColor: "#f3f3f3",
                                borderWidth: 1,
                                tickColor: "#f3f3f3"
                            },
                            series: {
                                shadowSize: 0, // Drawing is faster without shadows
                                color: "#3c8dbc"
                            },
                            lines: {
                                fill: true, //Converts the line chart to area chart
                                color: "#3c8dbc"
                            },
                            yaxis: {
                                min: 0,
                                max: 300,
                                show: true
                            },
                            xaxis: {
                                show: true
                            }
                        });

                        var updateInterval = 1000; //Fetch data ever x milliseconds
                        var realtime = "on"; //If == to on then fetch data every x seconds. else stop fetching
                        function update() {

                            interactive_plot.setData([getRandomData()]);
                            interactive2_plot.setData([getRandomGylcemie()]);

                            // Since the axes don't change, we don't need to call plot.setupGrid()
                            interactive_plot.draw();
                            interactive2_plot.draw();

                            if (realtime === "on")
                                setTimeout(update, updateInterval);
                        }

                        //INITIALIZE REALTIME DATA FETCHING
                        if (realtime === "on") {
                            update();
                        }
                        //REALTIME TOGGLE
                        $("#realtime .btn").click(function() {
                            if ($(this).data("toggle") === "on") {
                                realtime = "on";
                            } else {
                                realtime = "off";
                            }
                            update();
                        });
                        /*
                         * END INTERACTIVE CHART
                         */


                        /*
                         * LINE CHART
                         * ----------
                         */
                        //LINE randomly generated data

                        var sin = [],
                            cos = [];
                        for (var i = 0; i < 14; i += 0.5) {
                            sin.push([i, Math.sin(i)]);
                            cos.push([i, Math.cos(i)]);
                        }
                        var line_data1 = {
                            data: sin,
                            color: "#d4000"
                        };
                        var line_data2 = {
                            data: cos,
                            color: "#00c0ef"
                        };
                        $.plot("#line-chart", [line_data1, line_data2], {
                            grid: {
                                hoverable: true,
                                borderColor: "#f3f3f3",
                                borderWidth: 1,
                                tickColor: "#f3f3f3"
                            },
                            series: {
                                shadowSize: 0,
                                lines: {
                                    show: true
                                },
                                points: {
                                    show: true
                                }
                            },
                            lines: {
                                fill: false,
                                color: ["#3c8dbc", "#f56954"]
                            },
                            yaxis: {
                                show: true,
                            },
                            xaxis: {
                                show: true
                            }
                        });
                        //Initialize tooltip on hover
                        $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
                            position: "absolute",
                            display: "none",
                            opacity: 0.8
                        }).appendTo("body");
                        $("#line-chart").bind("plothover", function(event, pos, item) {

                            if (item) {
                                var x = item.datapoint[0].toFixed(2),
                                    y = item.datapoint[1].toFixed(2);

                                $("#line-chart-tooltip").html(item.series.label + " of " + x + " = " + y)
                                    .css({
                                        top: item.pageY + 5,
                                        left: item.pageX + 5
                                    })
                                    .fadeIn(200);
                            } else {
                                $("#line-chart-tooltip").hide();
                            }

                        });
                        /* END LINE CHART */

                        /*
                         * FULL WIDTH STATIC AREA CHART
                         * -----------------
                         */
                        var areaData = [
                            [2, 88.0],
                            [3, 93.3],
                            [4, 102.0],
                            [5, 108.5],
                            [6, 115.7],
                            [7, 115.6],
                            [8, 124.6],
                            [9, 130.3],
                            [10, 134.3],
                            [11, 141.4],
                            [12, 146.5],
                            [13, 151.7],
                            [14, 159.9],
                            [15, 165.4],
                            [16, 167.8],
                            [17, 168.7],
                            [18, 169.5],
                            [19, 168.0]
                        ];
                        $.plot("#area-chart", [areaData], {
                            grid: {
                                borderWidth: 0
                            },
                            series: {
                                shadowSize: 0, // Drawing is faster without shadows
                                color: "#00c0ef"
                            },
                            lines: {
                                fill: true //Converts the line chart to area chart
                            },
                            yaxis: {
                                show: false
                            },
                            xaxis: {
                                show: false
                            }
                        });

                        /* END AREA CHART */

                        /*
                         * BAR CHART
                         * ---------
                         */

                        var bar_data = {
                            data: [
                                ["January", 10],
                                ["February", 8],
                                ["March", 4],
                                ["April", 13],
                                ["May", 17],
                                ["June", 9]
                            ],
                            color: "#3c8dbc"
                        };
                        $.plot("#bar-chart", [bar_data], {
                            grid: {
                                borderWidth: 1,
                                borderColor: "#f3f3f3",
                                tickColor: "#f3f3f3"
                            },
                            series: {
                                bars: {
                                    show: true,
                                    barWidth: 0.5,
                                    align: "center"
                                }
                            },
                            xaxis: {
                                mode: "categories",
                                tickLength: 0
                            }
                        });
                        /* END BAR CHART */

                        /*
                         * DONUT CHART
                         * -----------
                         */

                        var donutData = [{
                                label: "Series2",
                                data: 30,
                                color: "#3c8dbc"
                            },
                            {
                                label: "Series3",
                                data: 20,
                                color: "#0073b7"
                            },
                            {
                                label: "Series4",
                                data: 50,
                                color: "#00c0ef"
                            }
                        ];
                        $.plot("#donut-chart", donutData, {
                            series: {
                                pie: {
                                    show: true,
                                    radius: 1,
                                    innerRadius: 0.5,
                                    label: {
                                        show: true,
                                        radius: 2 / 3,
                                        formatter: labelFormatter,
                                        threshold: 0.1
                                    }

                                }
                            },
                            legend: {
                                show: false
                            }
                        });
                        /*
                         * END DONUT CHART
                         */

                    });

                    /*
                     * Custom Label formatter
                     * ----------------------
                     */
                    function labelFormatter(label, series) {
                        return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">' +
                            label +
                            "<br>" +
                            Math.round(series.percent) + "%</div>";
                    }

                </script>

            </section>
           
        </div>
    </section>
</div>
<?php include('footer.php'); ?>
