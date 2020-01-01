/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
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
$(document).ready(function () {
  $(".hiddenValue").hide();
  $("#submit_data").on("click", function () {
    //send ajax post/fetch/anything for upload images
    $(".hiddenValue").hide();
    $(".profile-pic").attr("src", "");
    $(".profile-pic2").attr("src", "");
  });

  var readURL = function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $(".profile-pic").attr("src", e.target.result);
      };

      reader.readAsDataURL(input.files[0]);
    }
  };

  var readURL2 = function readURL2(input) {
    if (input.files && input.files[0]) {
      var reader2 = new FileReader();

      reader2.onload = function (e) {
        $(".profile-pic2").attr("src", e.target.result);
      };

      reader2.readAsDataURL(input.files[0]);
    }
  };

  $(".file-upload2").on("change", function () {
    readURL2(this);
  });
  $(".file-upload").on("change", function () {
    readURL(this);
  });
});
$(function () {
  $("#makeEditable").SetEditable({
    $addButton: $("#but_add")
  });
  $("#submit_data").on("click", function () {
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

(function () {
  var ga = document.createElement("script");
  ga.type = "text/javascript";
  ga.async = true;
  ga.src = ("https:" == document.location.protocol ? "https://ssl" : "http://www") + ".google-analytics.com/ga.js";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(ga, s);
})();

$("#editPicture").on("click", function () {
  console.log("button clicked");
  $(".hiddenValue").toggle();
});
$(document).ready(function () {
  $(".hiddenValue").hide();
  $("#submit_data").on("click", function () {
    //send ajax post/fetch/anything for upload images
    $(".hiddenValue").hide();
    $(".profile-pic").attr("src", "");
    $(".profile-pic2").attr("src", "");
  });

  var readURL = function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $(".profile-pic").attr("src", e.target.result);
      };

      reader.readAsDataURL(input.files[0]);
    }
  };

  var readURL2 = function readURL2(input) {
    if (input.files && input.files[0]) {
      var reader2 = new FileReader();

      reader2.onload = function (e) {
        $(".profile-pic2").attr("src", e.target.result);
      };

      reader2.readAsDataURL(input.files[0]);
    }
  };

  $(".file-upload2").on("change", function () {
    readURL2(this);
  });
  $(".file-upload").on("change", function () {
    readURL(this);
  });
});
$(function () {
  $("#makeEditable").SetEditable({
    $addButton: $("#but_add")
  });
  $("#submit_data").on("click", function () {
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

(function () {
  var ga = document.createElement("script");
  ga.type = "text/javascript";
  ga.async = true;
  ga.src = ("https:" == document.location.protocol ? "https://ssl" : "http://www") + ".google-analytics.com/ga.js";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(ga, s);
})();

$("#editPicture").on("click", function () {
  console.log("button clicked");
  $(".hiddenValue").toggle();
});

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\Users\ShayaN\Desktop\adminPanel\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! C:\Users\ShayaN\Desktop\adminPanel\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });