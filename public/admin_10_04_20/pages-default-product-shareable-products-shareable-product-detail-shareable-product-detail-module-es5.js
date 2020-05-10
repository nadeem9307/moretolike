(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-product-shareable-products-shareable-product-detail-shareable-product-detail-module"],{

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/product/shareable-products/shareable-product-detail/shareable-product-detail.component.html":
/*!***********************************************************************************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/pages/default/product/shareable-products/shareable-product-detail/shareable-product-detail.component.html ***!
  \***********************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<!-- {{vendorDetails.f_name}} -->\n\n<div class=\"m-content\">\n\t<div class=\"row\">\n\t\t<div class=\"col-lg-12\">\n\t\t\t<div class=\"m-portlet\">\n\t\t\t\t<div class=\"row\">\n\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">\n\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">\n\t\t\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\">\n\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-gear\"></i>\n\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">\n\t\t\t\t\t\t\t\t\t\t\tShareable Product Details\n\t\t\t\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\" *ngIf=\"showAddBtn == '0'\">\n\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill\" (click)=\"addProductInStore()\">\n\t\t\t\t\t\t\t\t\t\t<span>Add Product In Your Store</span>\n\t\t\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\" *ngIf=\"showAddBtn == '1'\">\n\t\t\t\t\t\t\t\t\t\tProduct Added In Your Store\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t\t\n\t\t\t\t\n\t\t\t</div>\n\t\t</div>\n\t</div>\n</div>"

/***/ }),

/***/ "./src/app/theme/pages/default/product/shareable-products/shareable-product-detail/shareable-product-detail.component.ts":
/*!*******************************************************************************************************************************!*\
  !*** ./src/app/theme/pages/default/product/shareable-products/shareable-product-detail/shareable-product-detail.component.ts ***!
  \*******************************************************************************************************************************/
/*! exports provided: ShareableProductDetailComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ShareableProductDetailComponent", function() { return ShareableProductDetailComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _auth_services_product_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../auth/_services/product.service */ "./src/app/auth/_services/product.service.ts");
/* harmony import */ var _services_data_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../../../_services/data.service */ "./src/app/_services/data.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");





var ShareableProductDetailComponent = /** @class */ (function () {
    function ShareableProductDetailComponent(route, _dataService, _productService) {
        this.route = route;
        this._dataService = _dataService;
        this._productService = _productService;
        this.productDetails = {};
        this.showAddBtn = 0;
    }
    ShareableProductDetailComponent.prototype.ngOnInit = function () {
        var _this = this;
        var sharedVendor;
        var vendors;
        var loggedVendorId;
        var indexValue;
        this._dataService.setloaderState(false);
        this._dataService.setactiveMenu('shareable-product');
        this.route.params.subscribe(function (params) {
            _this.productId = params.id;
            _this._productService.getById(params.id).subscribe(function (data) {
                _this.productDetails = data.success[0];
                loggedVendorId = JSON.parse(localStorage.getItem('currentUser'));
                sharedVendor = _this.productDetails.shared_vendor;
                console.log(sharedVendor != null);
                if (loggedVendorId.success.role == 1) {
                    _this.showAddBtn = 2;
                }
                else if (loggedVendorId.success.vendor_id && sharedVendor) {
                    vendors = sharedVendor.split(',');
                    indexValue = vendors.indexOf(loggedVendorId.success.vendor_id);
                    if (indexValue >= 0) {
                        _this.showAddBtn = 1;
                    }
                }
            });
        });
    };
    ShareableProductDetailComponent.prototype.addProductInStore = function () {
        var _this = this;
        var current_logged_user_id = JSON.parse(localStorage.getItem('currentUser'));
        current_logged_user_id = current_logged_user_id.success.vendor_id;
        console.log(current_logged_user_id);
        if (current_logged_user_id) {
            this._productService.addShareableProduct({ vendor_id: current_logged_user_id, product_id: this.productId }).subscribe(function (data) {
                if (data.success == 1) {
                    _this.showAddBtn = 1;
                    _this._productService.getNotification(current_logged_user_id).subscribe(function (datas) {
                        _this._dataService.setNotification(datas.success.length);
                        console.log(datas.success.length);
                    });
                    _this._dataService.getNotification().subscribe(function (not_data) {
                        console.log('not_data', not_data);
                    });
                }
            });
        }
    };
    ShareableProductDetailComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: 'app-shareable-product-detail',
            template: __webpack_require__(/*! raw-loader!./shareable-product-detail.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/product/shareable-products/shareable-product-detail/shareable-product-detail.component.html")
        }),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_router__WEBPACK_IMPORTED_MODULE_4__["ActivatedRoute"], _services_data_service__WEBPACK_IMPORTED_MODULE_3__["DataService"], _auth_services_product_service__WEBPACK_IMPORTED_MODULE_2__["ProductService"]])
    ], ShareableProductDetailComponent);
    return ShareableProductDetailComponent;
}());



/***/ }),

/***/ "./src/app/theme/pages/default/product/shareable-products/shareable-product-detail/shareable-product-detail.module.ts":
/*!****************************************************************************************************************************!*\
  !*** ./src/app/theme/pages/default/product/shareable-products/shareable-product-detail/shareable-product-detail.module.ts ***!
  \****************************************************************************************************************************/
/*! exports provided: ShareableProductDetailModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ShareableProductDetailModule", function() { return ShareableProductDetailModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/fesm5/common.js");
/* harmony import */ var _shareable_product_detail_shareable_product_detail_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../shareable-product-detail/shareable-product-detail.component */ "./src/app/theme/pages/default/product/shareable-products/shareable-product-detail/shareable-product-detail.component.ts");
/* harmony import */ var _default_default_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../../../default/default.component */ "./src/app/theme/pages/default/default.component.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var _layouts_layout_module__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../../../../layouts/layout.module */ "./src/app/theme/layouts/layout.module.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var ngx_pagination__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ngx-pagination */ "./node_modules/ngx-pagination/dist/ngx-pagination.js");









var routes = [
    {
        path: "",
        component: _default_default_component__WEBPACK_IMPORTED_MODULE_4__["DefaultComponent"],
        children: [
            {
                path: "",
                component: _shareable_product_detail_shareable_product_detail_component__WEBPACK_IMPORTED_MODULE_3__["ShareableProductDetailComponent"]
            }
        ]
    },
];
var ShareableProductDetailModule = /** @class */ (function () {
    function ShareableProductDetailModule() {
    }
    ShareableProductDetailModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["RouterModule"].forChild(routes),
                _layouts_layout_module__WEBPACK_IMPORTED_MODULE_6__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_7__["FormsModule"], ngx_pagination__WEBPACK_IMPORTED_MODULE_8__["NgxPaginationModule"],
            ],
            declarations: [_shareable_product_detail_shareable_product_detail_component__WEBPACK_IMPORTED_MODULE_3__["ShareableProductDetailComponent"]],
        })
    ], ShareableProductDetailModule);
    return ShareableProductDetailModule;
}());



/***/ })

}]);
//# sourceMappingURL=pages-default-product-shareable-products-shareable-product-detail-shareable-product-detail-module-es5.js.map