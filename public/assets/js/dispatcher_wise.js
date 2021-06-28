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
            "ajax"        : "/summary/dispatcher_wise_data",
            "columnDefs"  : [
            ],
            "columns"     : [
                {"data": null},
                {"data": "name"},
                {"data": "login"},
                {"data": "logout"},
                {"data": "book"},
                {"data": "appbook"},
                {"data": "allot"},
                {"data": "close"},
                {"data": "enquiry"},
                {"data": "cancel"},
                {"data": "complaint"},
                {"data": "followup"},
                {"data": "collection"},
                {"data": "new"}
            ],
            "order"       : [ [ 0, 'asc' ] ],
            "initComplete": function (settings, json) {

            },
        });

        table.on('order.dt search.dt', function () {
            table.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
                cell.innerHTML = i + 1;
            });
        }).draw();
    },
};
window.addEventListener('load', function () {
    app.main();
});