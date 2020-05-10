(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-size-size-list-size-list-module"],{

/***/ "./src/app/theme/pages/default/size/size-list/size-list.module.ts":
/*!************************************************************************!*\
  !*** ./src/app/theme/pages/default/size/size-list/size-list.module.ts ***!
  \************************************************************************/
/*! exports provided: SizeListModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "SizeListModule", function() { return SizeListModule; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/esm5/common.js");
/* harmony import */ var _size_list_size_list_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../size-list/size-list.component */ "./src/app/theme/pages/default/size/size-list/size-list.component.ts");
/* harmony import */ var _default_default_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../default/default.component */ "./src/app/theme/pages/default/default.component.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/esm5/router.js");
/* harmony import */ var _layouts_layout_module__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../../../layouts/layout.module */ "./src/app/theme/layouts/layout.module.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/esm5/forms.js");
/* harmony import */ var ngx_pagination__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ngx-pagination */ "./node_modules/ngx-pagination/dist/ngx-pagination.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};








var routes = [
    {
        path: "",
        component: _default_default_component__WEBPACK_IMPORTED_MODULE_3__["DefaultComponent"],
        children: [
            {
                path: "",
                component: _size_list_size_list_component__WEBPACK_IMPORTED_MODULE_2__["SizeListComponent"]
            }
        ]
    },
];
var SizeListModule = /** @class */ (function () {
    function SizeListModule() {
    }
    SizeListModule = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_1__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["RouterModule"].forChild(routes),
                _layouts_layout_module__WEBPACK_IMPORTED_MODULE_5__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_6__["FormsModule"], ngx_pagination__WEBPACK_IMPORTED_MODULE_7__["NgxPaginationModule"],
            ],
            declarations: [_size_list_size_list_component__WEBPACK_IMPORTED_MODULE_2__["SizeListComponent"]],
            exports: [
                _size_list_size_list_component__WEBPACK_IMPORTED_MODULE_2__["SizeListComponent"]
            ]
            // providers:[DataService]
        })
    ], SizeListModule);
    return SizeListModule;
}());



/***/ })

}]);
//# sourceMappingURL=pages-default-size-size-list-size-list-module.js.map