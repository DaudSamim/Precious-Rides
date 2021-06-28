var app = {
    main   : function () {
        "use strict";
        app.execute();
    },
    execute: function () {
        var _container = jQuery("#graph-1-container");
        if (_container.length > 0) {
            function drawLineGraph(graph, points, container, id) {
                var graph = Snap(graph);
                /*END DRAW GRID*/

                /* PARSE POINTS */
                var myPoints = [];
                var shadowPoints = [];

                function parseData(points) {
                    for (i = 0; i < points.length; i++) {
                        var p = new point();
                        var pv = points[ i ] / 100 * 40;
                        p.x = 83.7 / points.length * i + 1;
                        p.y = 40 - pv;
                        if (p.x > 78) {
                            p.x = 78;
                        }
                        myPoints.push(p);
                    }
                }

                var segments = [];

                function createSegments(p_array) {
                    for (i = 0; i < p_array.length; i++) {
                        var seg = "L" + p_array[ i ].x + "," + p_array[ i ].y;
                        if (i === 0) {
                            seg = "M" + p_array[ i ].x + "," + p_array[ i ].y;
                        }
                        segments.push(seg);
                    }
                }

                function joinLine(segments_array, id) {
                    var line = segments_array.join(" ");
                    var line = graph.path(line);
                    line.attr('id', 'graph-' + id);
                    var lineLength = line.getTotalLength();

                    line.attr({
                        'stroke-dasharray' : lineLength,
                        'stroke-dashoffset': lineLength
                    });
                }

                function calculatePercentage(points, graph) {
                    var initValue = points[ 0 ];
                    var endValue = points[ points.length - 1 ];
                    var sum = endValue - initValue;
                    var prefix;
                    var percentageGain;
                    var stepCount = 1300 / sum;

                    function findPrefix() {
                        if (sum > 0) {
                            prefix = "+";
                        } else {
                            prefix = "";
                        }
                    }

                    var percentagePrefix = "";

                    function percentageChange() {
                        percentageGain = initValue / endValue * 100;

                        if (percentageGain > 100) {
                            percentageGain = Math.round(percentageGain * 100 * 10) / 100;
                        } else if (percentageGain < 100) {
                            percentageGain = Math.round(percentageGain * 10) / 10;
                        }
                        if (initValue > endValue) {

                            percentageGain = endValue / initValue * 100 - 100;
                            percentageGain = percentageGain.toFixed(2);

                            percentagePrefix = "";
                            $(graph).find('.percentage-value').addClass('negative');
                        } else {
                            percentagePrefix = "+";
                        }
                        if (endValue > initValue) {
                            percentageGain = endValue / initValue * 100;
                            percentageGain = Math.round(percentageGain);
                        }
                    };
                    percentageChange();
                    findPrefix();

                    var percentage = $(graph).find('.percentage-value');
                    var totalGain = $(graph).find('.total-gain');
                    var hVal = $(graph).find('.h-value');

                    function count(graph, sum) {
                        var totalGain = $(graph).find('.total-gain');
                        var i = 0;
                        var time = 1300;
                        var intervalTime = Math.abs(time / sum);
                        var timerID = 0;
                        if (sum > 0) {
                            var timerID = setInterval(function () {
                                i++;
                                totalGain.text(percentagePrefix + i);
                                if (i === sum) clearInterval(timerID);
                            }, intervalTime);
                        } else if (sum < 0) {
                            var timerID = setInterval(function () {
                                i--;
                                totalGain.text(percentagePrefix + i);
                                if (i === sum) clearInterval(timerID);
                            }, intervalTime);
                        }
                    }

                    count(graph, sum);

                    percentage.text(percentagePrefix + percentageGain + "%");
                    totalGain.text("0%");
                    setTimeout(function () {
                        percentage.addClass('visible');
                        hVal.addClass('visible');
                    }, 1300);

                }


                function showValues() {
                    var val1 = $(graph).find('.h-value');
                    var val2 = $(graph).find('.percentage-value');
                    val1.addClass('visible');
                    val2.addClass('visible');
                }

                function drawPolygon(segments, id) {
                    var lastel = segments[ segments.length - 1 ];
                    var polySeg = segments.slice();
                    polySeg.push([ 78, 38.4 ], [ 1, 38.4 ]);
                    var polyLine = polySeg.join(' ').toString();
                    var replacedString = polyLine.replace(/L/g, '').replace(/M/g, "");

                    var poly = graph.polygon(replacedString);
                    var clip = graph.rect(-80, 0, 80, 40);
                    poly.attr({
                        'id'      : 'poly-' + id,
                        /*'clipPath':'url(#clip)'*/
                        'clipPath': clip
                    });
                    clip.animate({
                        transform: 't80,0'
                    }, 1300, mina.linear);
                }

                parseData(points);

                createSegments(myPoints);
                calculatePercentage(points, container);
                joinLine(segments, id);

                drawPolygon(segments, id);


                /*$('#poly-'+id).attr('class','show');*/

                /* function drawPolygon(segments,id){
                  var polySeg = segments;
                  polySeg.push([80,40],[0,40]);
                  var polyLine = segments.join(' ').toString();
                  var replacedString = polyLine.replace(/L/g,'').replace(/M/g,"");
                  var poly = graph.polygon(replacedString);
                  poly.attr('id','poly-'+id)
                }
                drawPolygon(segments,id);*/
            }

            var chart_1_y = [
                15, 25, 40, 30, 45, 40, 35, 55, 37, 50, 60, 45, 70, 78
            ];
            var chart_2_y = [
                80, 65, 65, 40, 55, 34, 54, 50, 60, 64, 55, 27, 24, 30
            ];

            function point(x, y) {
                x: 0;
                y: 0;
            }

            drawLineGraph('#chart-1', chart_1_y, '#graph-1-container', 1);
            drawLineGraph('#chart-2', chart_2_y, '#graph-2-container', 2);
        }


        var date = new Date();
        var currentYear = date.getFullYear();
        var currentMonth = date.getMonth() + 1;
        currentMonth = (currentMonth < 10) ? '0' + currentMonth : currentMonth;
        $('#calendar').fullCalendar({
            header      : {
                left  : 'month,agendaWeek,agendaDay',
                center: 'title',
                right : 'prev,today,next '
            },
            droppable   : true, // this allows things to be dropped onto the calendar
            drop        : function () {
                //$(this).remove();
            },
            selectable  : true,
            selectHelper: true,
            select      : function (t, e) {
                var a, r = swal({
                    title           : "Title for " + moment(t._d).format('DD-MM-YYYY'),
                    text            : "Write something interesting...",
                    type            : "input",
                    showCancelButton: true,
                    closeOnConfirm  : false,
                    inputPlaceholder: "Write something..."
                }, function (inputValue) {
                    if (inputValue === false) return false;
                    if (inputValue === "") {
                        swal.showInputError("You need to write something!");
                        return false
                    }
                    (a = {
                        title: inputValue,
                        start: t,
                        end  : e,
                        color: "#9368E9"
                    });
                    swal("Nice!", "You wrote: " + inputValue, "success");
                    $("#calendar").fullCalendar("renderEvent", a, 1);
                    $("#calendar").fullCalendar("unselect");
                });
            },
            editable    : true,
            eventLimit  : true, // allow "more" link when too many events
            events      : [ {
                title: "PVR201873894",
                start: currentYear + "-" + currentMonth + "-01",
                color: "#797979"
            }, {
                title: "PVR201873896",
                start: currentYear + "-" + currentMonth + "-07",
                end  : currentYear + "-" + currentMonth + "-07",
                color: "#447DF7"
            }, {
                id   : 999,
                title: "PVR201873897",
                start: currentYear + "-" + currentMonth + "-09T16:00:00",
                color: "#23CCEF"
            }, {
                id   : 999,
                title: "PVR201873898",
                start: currentYear + "-" + currentMonth + "-16T16:00:00",
                color: "#87CB16"
            }, {
                title: "PVR201873899",
                start: currentYear + "-" + currentMonth + "-11",
                end  : currentYear + "-" + currentMonth + "-11",
                color: "#9368E9"
            }, {
                title: "PVR201873900",
                start: currentYear + "-" + currentMonth + "-12T10:30:00",
                color: "#FFA534"
            }, {
                title: "PVR201873901",
                start: currentYear + "-" + currentMonth + "-25T12:00:00",
                color: "#FF5221"
            }, {
                title: "PVR201873902",
                start: currentYear + "-" + currentMonth + "-05T14:30:00",
                color: "#23CCEF"
            }, {
                title: "PVR201873903",
                start: currentYear + "-" + currentMonth + "-22T17:30:00",
                color: "#9368E9"
            }, {
                title: "PVR201873904",
                start: currentYear + "-" + currentMonth + "-19T20:00:00",
                color: "#FF5221"
            }, {
                title: "PVR201873905",
                start: currentYear + "-" + currentMonth + "-13T07:00:00",
                color: "#9368E9"
            }, {
                title: "PVR201873906",
                url  : "http://google.com/",
                start: currentYear + "-" + currentMonth + "-03",
                color: "#FF5221"
            } ]
        });

        var _container = jQuery("#dynamic_chart");
        if (_container.length > 0) {
            var barChartData = {
                labels  : [ "January", "February", "March", "April" ],
                datasets: [ {
                    type                : 'line',
                    label               : "",
                    data                : [ 2, 1, 5, 6 ],
                    fill                : false,
                    backgroundColor     : '#4076e0',
                    borderColor         : '#4076e0',
                    borderWidth         : 3,
                    pointRadius         : 0,
                    hoverBackgroundColor: '#4076e0',
                    hoverBorderColor    : '#4076e0',
                    yAxisID             : 'y-axis-1',
                    animateScale        : true,
                    easing              : "none",
                    duration            : 0,
                } ]
            };
            var length = barChartData.datasets[ 0 ].data.length;
            var ctx = document.getElementById("dynamic_chart").getContext("2d");
            myBar = new Chart(ctx, {
                animation: {
                    animateScale: true,
                    easing      : "none",
                    duration    : 0,
                },
                type     : 'bar',
                data     : barChartData,
                options  : {
                    responsive: true,
                    tooltips  : {
                        mode: 'label'
                    },
                    legend    : {
                        display: false,
                        labels : {
                            fontColor: 'rgb(255, 99, 132)'
                        }
                    },
                    elements  : {
                        line: {
                            fill: true
                        }
                    },
                    scales    : {
                        xAxes: [ {
                            display  : false,
                            gridLines: {
                                display: false
                            },
                            labels   : {
                                show: true,
                            }
                        } ],
                        yAxes: [ {
                            type     : "linear",
                            display  : false,
                            position : "left",
                            id       : "y-axis-1",
                            gridLines: {
                                display: false
                            },
                            labels   : {
                                show: false,

                            }
                        } ]
                    }
                }
            });
            var lcount = 0;
            setInterval(function () {
                var count = 10;
                lcount++;
                var data = myBar.data.datasets[ 0 ].data;
                var labels = myBar.data.labels;
                data.push(Math.floor(Math.random() * 10));
                count++;
                labels.push(count.toString());
                if (lcount == 25) {
                    if (myBar.data.datasets[ 0 ].data.length > 25) myBar.data.datasets[ 0 ].data.splice(0, 25);
                    if (myBar.data.labels.length > 25) myBar.data.labels.splice(0, 25);
                    lcount = 0;
                }
                myBar.update();
            }, 570);
        }

        $(".upcoming_event_carasol").owlCarousel({
            items             : 5,
            autoplay          : true,
            loop              : true,
            margin            : 30,
            autoplayTimeout   : 5000,
            autoplayHoverPause: true,
            lazyLoad          : true,
            center            : true,
            nav               : true,
            navText           : [ '<i class="material-icons badge badge-success f-s-18">arrow_back</i> ', ' &nbsp;<i class="material-icons badge badge-success f-s-18">arrow_forward</i>' ],
            navClass          : [ 'owl-prev', 'owl-next' ],
            responsive        : {
                0   : {items: 1},
                600 : {items: 1},
                1100: {items: 1},
                1200: {items: 1}
            }
        });

        var select_mobile = [{"text":"86xxxxxx67","id":"867"},{"text":"70xxxxxx66","id":"706"},{"text":"81xxxxxx00","id":"810"},{"text":"96xxxxxx30","id":"960"},{"text":"98xxxxxx86","id":"986"},{"text":"95xxxxxx87","id":"957"},{"text":"99xxxxxx57","id":"997"},{"text":"94xxxxxx00","id":"940"},{"text":"99xxxxxx19","id":"999"},{"text":"99xxxxxx05","id":"995"},{"text":"99xxxxxx14","id":"994"},{"text":"77xxxxxx42","id":"772"},{"text":"82xxxxxx67","id":"827"},{"text":"97xxxxxx75","id":"975"},{"text":"93xxxxxx17","id":"937"},{"text":"96xxxxxx85","id":"965"},{"text":"96xxxxxx56","id":"966"},{"text":"95xxxxxx17","id":"957"},{"text":"97xxxxxx31","id":"971"},{"text":"93xxxxxx08","id":"938"},{"text":"98xxxxxx11","id":"981"},{"text":"99xxxxxx55","id":"995"},{"text":"77xxxxxx47","id":"777"},{"text":"82xxxxxx69","id":"829"},{"text":"84xxxxxx87","id":"847"},{"text":"80xxxxxx33","id":"803"},{"text":"84xxxxxx37","id":"847"},{"text":"77xxxxxx99","id":"779"},{"text":"95xxxxxx75","id":"955"},{"text":"99xxxxxx77","id":"997"},{"text":"80xxxxxx02","id":"802"},{"text":"97xxxxxx91","id":"971"},{"text":"75xxxxxx30","id":"750"},{"text":"81xxxxxx62","id":"812"},{"text":"90xxxxxx04","id":"904"},{"text":"73xxxxxx03","id":"733"},{"text":"95xxxxxx46","id":"956"},{"text":"97xxxxxx98","id":"978"},{"text":"95xxxxxx75","id":"955"},{"text":"80xxxxxx29","id":"809"},{"text":"94xxxxxx12","id":"942"},{"text":"90xxxxxx64","id":"904"},{"text":"78xxxxxx03","id":"783"},{"text":"95xxxxxx80","id":"950"}];
        $(".select_mobile").select2({
            data: select_mobile
        });

    },
};
window.addEventListener('load', function () {
    app.main();
});