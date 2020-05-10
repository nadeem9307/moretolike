(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-tags-product-tag-product-tag-module"],{

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/tags/product-tag/product-tag.component.html":
/*!***********************************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/pages/default/tags/product-tag/product-tag.component.html ***!
  \***********************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<app-add-tag-list></app-add-tag-list> \n<app-tag-list></app-tag-list> "

/***/ }),

/***/ "./src/app/theme/pages/default/tags/product-tag/product-tag.component.ts":
/*!*******************************************************************************!*\
  !*** ./src/app/theme/pages/default/tags/product-tag/product-tag.component.ts ***!
  \*******************************************************************************/
/*! exports provided: ProductTagComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ProductTagComponent", function() { return ProductTagComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _auth_services_permission_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../auth/_services/permission.service */ "./src/app/auth/_services/permission.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../../../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var ngx_toastr__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ngx-toastr */ "./node_modules/ngx-toastr/fesm5/ngx-toastr.js");







var ProductTagComponent = /** @class */ (function () {
    function ProductTagComponent(imgBaseUrl, toastr, router, route, _permissionService, formBuilder) {
        this.imgBaseUrl = imgBaseUrl;
        this.toastr = toastr;
        this.router = router;
        this.route = route;
        this._permissionService = _permissionService;
        this.formBuilder = formBuilder;
    }
    ProductTagComponent.prototype.ngOnInit = function () {
    };
    ProductTagComponent.prototype.onSubmit = function () {
        console.log('this.form.value');
    };
    ProductTagComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: 'app-product-tag',
            template: __webpack_require__(/*! raw-loader!./product-tag.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/tags/product-tag/product-tag.component.html")
        }),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_services_script_loader_service__WEBPACK_IMPORTED_MODULE_4__["ScriptLoaderService"], ngx_toastr__WEBPACK_IMPORTED_MODULE_6__["ToastrService"], _angular_router__WEBPACK_IMPORTED_MODULE_3__["Router"], _angular_router__WEBPACK_IMPORTED_MODULE_3__["ActivatedRoute"], _auth_services_permission_service__WEBPACK_IMPORTED_MODULE_2__["PermissionService"], _angular_forms__WEBPACK_IMPORTED_MODULE_5__["FormBuilder"]])
    ], ProductTagComponent);
    return ProductTagComponent;
}());



/***/ }),

/***/ "./src/app/theme/pages/default/tags/product-tag/product-tag.module.ts":
/*!****************************************************************************!*\
  !*** ./src/app/theme/pages/default/tags/product-tag/product-tag.module.ts ***!
  \****************************************************************************/
/*! exports provided: ProductTagModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ProductTagModule", function() { return ProductTagModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/fesm5/common.js");
/* harmony import */ var _product_tag_product_tag_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../product-tag/product-tag.component */ "./src/app/theme/pages/default/tags/product-tag/product-tag.component.ts");
/* harmony import */ var _default_default_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../../default/default.component */ "./src/app/theme/pages/default/default.component.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var _layouts_layout_module__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../../../layouts/layout.module */ "./src/app/theme/layouts/layout.module.ts");
/* harmony import */ var ngx_pagination__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ngx-pagination */ "./node_modules/ngx-pagination/dist/ngx-pagination.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");









var routes = [
    {
        path: "",
        component: _default_default_component__WEBPACK_IMPORTED_MODULE_4__["DefaultComponent"],
        children: [
            {
                path: "",
                component: _product_tag_product_tag_component__WEBPACK_IMPORTED_MODULE_3__["ProductTagComponent"]
            }
        ]
    },
];
var ProductTagModule = /** @class */ (function () {
    function ProductTagModule() {
    }
    ProductTagModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["RouterModule"].forChild(routes),
                _layouts_layout_module__WEBPACK_IMPORTED_MODULE_6__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_8__["FormsModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_8__["ReactiveFormsModule"], ngx_pagination__WEBPACK_IMPORTED_MODULE_7__["NgxPaginationModule"],
            ],
            declarations: [_product_tag_product_tag_component__WEBPACK_IMPORTED_MODULE_3__["ProductTagComponent"]]
        })
    ], ProductTagModule);
    return ProductTagModule;
}());



/***/ })

}]);
//# sourceMappingURL=pages-default-tags-product-tag-product-tag-module-es5.js.map