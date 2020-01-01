$(function() {
    $("#example1").DataTable();
    $("#example2").DataTable({
        paging: true,
        lengthChange: false,
        searching: false,
        ordering: true,
        info: true,
        autoWidth: false
    });
});

$.widget.bridge("uibutton", $.ui.button);

$(document).ready(function() {
    $(".hiddenValue").hide();

    $("#submit_data").on("click", function() {
        //send ajax post/fetch/anything for upload images

        $(".hiddenValue").hide();
        $(".profile-pic").attr("src", "");
        $(".profile-pic2").attr("src", "");
    });

    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $(".profile-pic").attr("src", e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    };

    var readURL2 = function(input) {
        if (input.files && input.files[0]) {
            var reader2 = new FileReader();

            reader2.onload = function(e) {
                $(".profile-pic2").attr("src", e.target.result);
            };
            reader2.readAsDataURL(input.files[0]);
        }
    };

    $(".file-upload2").on("change", function() {
        readURL2(this);
    });
    $(".file-upload").on("change", function() {
        readURL(this);
    });
});
$(function() {
    $("#makeEditable").SetEditable({ $addButton: $("#but_add") });

    $("#submit_data").on("click", function() {
        var td = TableToCSV("makeEditable", ",");
        console.log(td);
        var ar_lines = td.split("\n");
        var each_data_value = [];
        for (i = 0; i < ar_lines.length; i++) {
            each_data_value[i] = ar_lines[i].split(",");
        }

        for (i = 0; i < each_data_value.length; i++) {
            if (each_data_value[i] > 1) {
                console.log(each_data_value[i][2]);
                console.log(each_data_value[i].length);
            }
        }
    });
});

var _gaq = _gaq || [];
_gaq.push(["_setAccount", "UA-36251023-1"]);
_gaq.push(["_setDomainName", "jqueryscript.net"]);
_gaq.push(["_trackPageview"]);

(function() {
    var ga = document.createElement("script");
    ga.type = "text/javascript";
    ga.async = true;
    ga.src =
        ("https:" == document.location.protocol
            ? "https://ssl"
            : "http://www") + ".google-analytics.com/ga.js";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(ga, s);
})();
$("#editPicture").on("click", function() {
    console.log("button clicked");
    $(".hiddenValue").toggle();
});

$(document).ready(function() {
    $(".hiddenValue").hide();

    $("#submit_data").on("click", function() {
        //send ajax post/fetch/anything for upload images

        $(".hiddenValue").hide();
        $(".profile-pic").attr("src", "");
        $(".profile-pic2").attr("src", "");
    });

    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $(".profile-pic").attr("src", e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    };

    var readURL2 = function(input) {
        if (input.files && input.files[0]) {
            var reader2 = new FileReader();

            reader2.onload = function(e) {
                $(".profile-pic2").attr("src", e.target.result);
            };
            reader2.readAsDataURL(input.files[0]);
        }
    };

    $(".file-upload2").on("change", function() {
        readURL2(this);
    });
    $(".file-upload").on("change", function() {
        readURL(this);
    });
});
$(function() {
    $("#makeEditable").SetEditable({ $addButton: $("#but_add") });

    $("#submit_data").on("click", function() {
        var td = TableToCSV("makeEditable", ",");
        console.log(td);
        var ar_lines = td.split("\n");
        var each_data_value = [];
        for (i = 0; i < ar_lines.length; i++) {
            each_data_value[i] = ar_lines[i].split(",");
        }

        for (i = 0; i < each_data_value.length; i++) {
            if (each_data_value[i] > 1) {
                console.log(each_data_value[i][2]);
                console.log(each_data_value[i].length);
            }
        }
    });
});

var _gaq = _gaq || [];
_gaq.push(["_setAccount", "UA-36251023-1"]);
_gaq.push(["_setDomainName", "jqueryscript.net"]);
_gaq.push(["_trackPageview"]);

(function() {
    var ga = document.createElement("script");
    ga.type = "text/javascript";
    ga.async = true;
    ga.src =
        ("https:" == document.location.protocol
            ? "https://ssl"
            : "http://www") + ".google-analytics.com/ga.js";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(ga, s);
})();
$("#editPicture").on("click", function() {
    console.log("button clicked");
    $(".hiddenValue").toggle();
});
