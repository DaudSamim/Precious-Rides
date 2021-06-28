"use strict";
var app = {
    main   : function () {
        "use strict";
        app.execute();
    },
    execute: function () {
        $.backstretch([
            image_path + "images/cover/1.jpg",
            image_path + "images/cover/8.jpg",
            image_path + "images/cover/9.jpg",
            image_path + "images/cover/10.jpg",
        ], {duration: 1000, fade: 900});
    },
};
window.addEventListener('load', function () {
    app.main();
});