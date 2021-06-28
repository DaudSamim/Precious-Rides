"use strict";
var app = {
    main   : function () {
        "use strict";
        app.execute();
    },
    execute: function () {
        var table = "";
        table = $('#loggedout').DataTable({
            "dom":"mf",
            "ajax"   : {
                "url"    : "/current_status/vehicle_statistics_out",
                "dataSrc": ""
            },
            "columns": [
                {"data": 'vehicle_no'},
                {"data": "current_place"}
            ],
            "order"  : [ [ 0, 'asc' ] ],
        });

        table = $('#loggedin').DataTable({
            "dom":"mf",
            "ajax"   : {
                "url"    : "/current_status/vehicle_statistics_in",
                "dataSrc": ""
            },
            "columns": [
                {"data": 'vehicle_no'},
                {"data": "current_place"}
            ],
            "order"  : [ [ 1, 'asc' ] ],
        });
    },
};
window.addEventListener('load', function () {
    app.main();
});