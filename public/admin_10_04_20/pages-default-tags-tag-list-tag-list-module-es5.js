(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-tags-tag-list-tag-list-module"],{

/***/ "./src/app/theme/pages/default/tags/tag-list/tag-list.module.ts":
/*!**********************************************************************!*\
  !*** ./src/app/theme/pages/default/tags/tag-list/tag-list.module.ts ***!
  \**********************************************************************/
/*! exports provided: TagListModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "TagListModule", function() { return TagListModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/fesm5/common.js");
/* harmony import */ var _tag_list_tag_list_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../tag-list/tag-list.component */ "./src/app/theme/pages/default/tags/tag-list/tag-list.component.ts");
/* harmony import */ var _default_default_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../../default/default.component */ "./src/app/theme/pages/default/default.component.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var _layouts_layout_module__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../../../layouts/layout.module */ "./src/app/theme/layouts/layout.module.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var ngx_pagination__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ngx-pagination */ "./node_modules/ngx-pagination/dist/ngx-pagination.js");









var routes = [
    {
        path: "",
        component: _default_default_component__WEBPACK_IMPORTED_MODULE_4__["DefaultComponent"],
        children: [
            {
                path: "",
                component: _tag_list_tag_list_component__WEBPACK_IMPORTED_MODULE_3__["TagListComponent"]
            }
        ]
    },
];
var TagListModule = /** @class */ (function () {
    function TagListModule() {
    }
    TagListModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["RouterModule"].forChild(routes),
                _layouts_layout_module__WEBPACK_IMPORTED_MODULE_6__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_7__["FormsModule"], ngx_pagination__WEBPACK_IMPORTED_MODULE_8__["NgxPaginationModule"],
            ],
            declarations: [_tag_list_tag_list_component__WEBPACK_IMPORTED_MODULE_3__["TagListComponent"]],
            exports: [
                _tag_list_tag_list_component__WEBPACK_IMPORTED_MODULE_3__["TagListComponent"]
            ]
            // providers:[DataService]
        })
    ], TagListModule);
    return TagListModule;
}());



/***/ })

}]);
//# sourceMappingURL=pages-default-tags-tag-list-tag-list-module-es5.js.map