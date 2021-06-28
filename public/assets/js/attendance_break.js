"use strict";
var app = {
    main   : function () {
        "use strict";
        app.execute();
    },
    execute: function () {

        var table = "";

        table = $('#table').DataTable({
            "scrollX"       : true,
            "bPaginate"     : false,
            "ajax"          : {
                "url"    : "/attendance/attendance_break_data",
                "dataSrc": ""
            },
            "fnDrawCallback": function () {

            },
            "columnDefs"    : [
                {
                    "render" : function (data, type, row) {
                        if (data && data != "" && data != null && data != 'null') {
                            var res = data.split("");
                            res = res[0] + res[1] + res[2].replace(/[0-9]/g, "xxxxxx") + res[8] + res[9];
                        }
                        return res;
                    },
                    "targets": 3
                }, {
                    "render" : function (data, type, row) {
                        return '0';
                    },
                    "targets": 5
                }, {
                    "render" : function (data, type, row) {
                        if (data.running_status != 'leave' && data.running_status != "break_down") {
                            return 'Yes'
                        } else {
                            return 'No'
                        }
                    },
                    "targets": 6
                }, {
                    "render" : function (data, type, row) {
                        if (data.running_status == "break") {
                            return '<a href="javascript:void(0)" class="label label-inverse">Break Out</a>'
                        } else if (data.running_status == "break_down") {
                            return '<a href="javascript:void(0)" class="label label-warning">Leave</a>'
                        } else if (data.running_status == "assigned") {
                            return '<a href="javascript:void(0)" class="label label-danger">Cancel</a>'
                        } else if (data.running_status == "free") {
                            return '<a href="javascript:void(0)" class="label label-warning">logout</a>'
                        } else if (data.running_status == "running") {
                            return '<a href="javascript:void(0)" class="label label-inverse">End Trip</a>'
                        } else if (data.running_status == "leave") {
                            return '<a href="javascript:void(0)" class="label label-info">Login</a>\n' +
                                '<a href="javascript:void(0)" class="label label-primary m-t-5">Pending</a>'
                        } else {
                            return 'no'
                        }
                    },
                    "targets": 11
                } ],
            "columns"       : [
                {"data": null},
                {"data": "us.display_name"},
                {"data": "vehicle_no"},
                {"data": "us.primary_mobile"},
                {"data": "bk.from_time"},
                {"data": null},
                {"data": null},
                {"data": "vt.expected_logout"},
                {"data": "login_hours"},
                {"data": "smt.total_amount"},
                {"data": "running_status"},
                {"data": null},

            ],
            "order"         : [ [ 6, 'desc' ] ]
        });

        table.on('order.dt search.dt', function () {
            table.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
                cell.innerHTML = i + 1;
            });
        }).draw();

        table.columns([ 7, 4, 5 ]).visible(false);
    },
};
window.addEventListener('load', function () {
    app.main();
});