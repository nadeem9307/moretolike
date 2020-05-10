(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-product-child-view-child-view-module"],{

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/product/child-view/child-view.component.html":
/*!************************************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/pages/default/product/child-view/child-view.component.html ***!
  \************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div>\n\t<h2>Child View</h2>\n</div>"

/***/ }),

/***/ "./src/app/theme/pages/default/product/child-view/child-view.component.ts":
/*!********************************************************************************!*\
  !*** ./src/app/theme/pages/default/product/child-view/child-view.component.ts ***!
  \********************************************************************************/
/*! exports provided: ChildViewComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ChildViewComponent", function() { return ChildViewComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _auth_services_product_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../auth/_services/product.service */ "./src/app/auth/_services/product.service.ts");
/* harmony import */ var _services_data_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../../_services/data.service */ "./src/app/_services/data.service.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var ngx_toastr__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ngx-toastr */ "./node_modules/ngx-toastr/fesm5/ngx-toastr.js");







var ChildViewComponent = /** @class */ (function () {
    function ChildViewComponent(toastr, route, router, formBuilder, _dataService, _productService) {
        this.toastr = toastr;
        this.route = route;
        this.router = router;
        this.formBuilder = formBuilder;
        this._dataService = _dataService;
        this._productService = _productService;
    }
    ChildViewComponent.prototype.ngOnInit = function () { };
    ChildViewComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: 'app-child-view',
            template: __webpack_require__(/*! raw-loader!./child-view.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/product/child-view/child-view.component.html")
        }),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [ngx_toastr__WEBPACK_IMPORTED_MODULE_6__["ToastrService"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["ActivatedRoute"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["Router"], _angular_forms__WEBPACK_IMPORTED_MODULE_4__["FormBuilder"], _services_data_service__WEBPACK_IMPORTED_MODULE_3__["DataService"], _auth_services_product_service__WEBPACK_IMPORTED_MODULE_2__["ProductService"]])
    ], ChildViewComponent);
    return ChildViewComponent;
}());



/***/ }),

/***/ "./src/app/theme/pages/default/product/child-view/child-view.module.ts":
/*!*****************************************************************************!*\
  !*** ./src/app/theme/pages/default/product/child-view/child-view.module.ts ***!
  \*****************************************************************************/
/*! exports provided: ChildViewModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ChildViewModule", function() { return ChildViewModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/fesm5/common.js");
/* harmony import */ var _default_default_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../default/default.component */ "./src/app/theme/pages/default/default.component.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var _layouts_layout_module__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../../../layouts/layout.module */ "./src/app/theme/layouts/layout.module.ts");
/* harmony import */ var _child_view_child_view_component__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../child-view/child-view.component */ "./src/app/theme/pages/default/product/child-view/child-view.component.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var ngx_pagination__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ngx-pagination */ "./node_modules/ngx-pagination/dist/ngx-pagination.js");









var routes = [
    {
        path: "",
        component: _default_default_component__WEBPACK_IMPORTED_MODULE_3__["DefaultComponent"],
        children: [
            {
                path: "",
                component: _child_view_child_view_component__WEBPACK_IMPORTED_MODULE_6__["ChildViewComponent"]
            }
        ]
    },
];
var ChildViewModule = /** @class */ (function () {
    function ChildViewModule() {
    }
    ChildViewModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["RouterModule"].forChild(routes),
                _layouts_layout_module__WEBPACK_IMPORTED_MODULE_5__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_7__["FormsModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_7__["ReactiveFormsModule"], ngx_pagination__WEBPACK_IMPORTED_MODULE_8__["NgxPaginationModule"],
            ],
            declarations: [_child_view_child_view_component__WEBPACK_IMPORTED_MODULE_6__["ChildViewComponent"]],
        })
    ], ChildViewModule);
    return ChildViewModule;
}());



/***/ })

}]);
//# sourceMappingURL=pages-default-product-child-view-child-view-module-es5.js.map