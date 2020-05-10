(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-size-add-size-add-size-module"],{

/***/ "./src/app/theme/pages/default/size/add-size/add-size.module.ts":
/*!**********************************************************************!*\
  !*** ./src/app/theme/pages/default/size/add-size/add-size.module.ts ***!
  \**********************************************************************/
/*! exports provided: AddSizeModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AddSizeModule", function() { return AddSizeModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/fesm2015/common.js");
/* harmony import */ var _add_size_add_size_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../add-size/add-size.component */ "./src/app/theme/pages/default/size/add-size/add-size.component.ts");
/* harmony import */ var _default_default_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../../default/default.component */ "./src/app/theme/pages/default/default.component.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var _layouts_layout_module__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../../../layouts/layout.module */ "./src/app/theme/layouts/layout.module.ts");
/* harmony import */ var ngx_pagination__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ngx-pagination */ "./node_modules/ngx-pagination/dist/ngx-pagination.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm2015/forms.js");









const routes = [
    {
        path: "",
        component: _default_default_component__WEBPACK_IMPORTED_MODULE_4__["DefaultComponent"],
        children: [
            {
                path: "",
                component: _add_size_add_size_component__WEBPACK_IMPORTED_MODULE_3__["AddSizeComponent"]
            }
        ]
    },
];
let AddSizeModule = class AddSizeModule {
};
AddSizeModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        imports: [
            _angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["RouterModule"].forChild(routes),
            _layouts_layout_module__WEBPACK_IMPORTED_MODULE_6__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_8__["FormsModule"], ngx_pagination__WEBPACK_IMPORTED_MODULE_7__["NgxPaginationModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_8__["ReactiveFormsModule"],
        ],
        declarations: [_add_size_add_size_component__WEBPACK_IMPORTED_MODULE_3__["AddSizeComponent"]],
        exports: [
            _add_size_add_size_component__WEBPACK_IMPORTED_MODULE_3__["AddSizeComponent"]
        ]
        // providers:[DataService]
    })
], AddSizeModule);



/***/ })

}]);
//# sourceMappingURL=pages-default-size-add-size-add-size-module-es2015.js.map