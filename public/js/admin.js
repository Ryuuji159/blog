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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/admin.js":
/*!*******************************!*\
  !*** ./resources/js/admin.js ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

function is_admin_post_route() {
  var posts_edit_regexp = new RegExp("/admin/posts/\\d+/edit");
  return window.location.pathname === "/admin/posts" || window.location.pathname === "/admin/posts/create" || window.location.pathname.match(posts_edit_regexp);
}

function is_admin_now_route() {
  var now_edit_regexp = new RegExp("/admin/now/\\d+/edit");
  return window.location.pathname === "/admin/now" || window.location.pathname === "/admin/now/create" || window.location.pathname.match(now_edit_regexp);
}

function is_admin_projects_route() {
  var projects_edit_regexp = new RegExp("/admin/projects/\\d+/edit");
  return window.location.pathname === "/admin/projects" || window.location.pathname === "/admin/projects/create" || window.location.pathname.match(projects_edit_regexp);
}

function is_admin_setups_route() {
  var setups_edit_regexp = new RegExp("/admin/setups/\\d+/edit");
  return window.location.pathname === "/admin/setups" || window.location.pathname === "/admin/setups/create" || window.location.pathname.match(setups_edit_regexp);
}

function admin_highlight() {
  if (is_admin_post_route()) {
    document.getElementById("posts-link").classList.add("menu-highlight");
  }

  if (is_admin_now_route()) {
    document.getElementById("now-link").classList.add("menu-highlight");
  }

  if (is_admin_projects_route()) {
    document.getElementById("projects-link").classList.add("menu-highlight");
  }

  if (is_admin_setups_route()) {
    document.getElementById("setup-link").classList.add("menu-highlight");
  }
}

function preview() {
  var previewButton = document.getElementById("preview");
  var mainButton = document.getElementById("main");

  if (previewButton == null) {
    return;
  }

  var form = document.getElementsByTagName("form")[0];
  previewButton.addEventListener("click", function (e) {
    form.setAttribute("target", "_blank");
  });
  mainButton.addEventListener("click", function (e) {
    form.removeAttribute("target");
  });
}

function main() {
  admin_highlight();
  preview();
}

window.onload = main;

/***/ }),

/***/ 1:
/*!*************************************!*\
  !*** multi ./resources/js/admin.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/data/src/www.danielcortes.xyz/resources/js/admin.js */"./resources/js/admin.js");


/***/ })

/******/ });