(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-reports-statement-statement-module"],{

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/reports/statement/statement.component.html":
/*!**********************************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/pages/default/reports/statement/statement.component.html ***!
  \**********************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<!-- BEGIN: Subheader -->\n<div class=\"m-subheader\" appunwraptag=\"\">\n\t<div class=\"d-flex align-items-center\">\n\t\t<div class=\"mr-auto\">\n\t\t\t<h3 class=\"m-subheader__title\">\n\t\t\t\tStatement\n\t\t\t</h3>\n\t\t</div>\n\t\t<div>\n\t\t\t <span class=\"m-subheader__daterange\" id=\"m_dashboard_daterangepicker\">\n\t\t\t\t<span class=\"m-subheader__daterange-label\">\n\t\t\t\t\t<span class=\"m-subheader__daterange-title\"></span>\n\t\t\t\t\t<span class=\"m-subheader__daterange-date m--font-brand\"></span>\n\t\t\t\t</span>\n\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill\">\n\t\t\t\t\t<i class=\"la la-angle-down\"></i>\n\t\t\t\t</a>\n\t\t\t</span> \n\t\t</div>\n\t</div>\n</div>\n<!-- END: Subheader -->\n<div class=\"m-content\">\n\t<!--Begin::Section-->\n\t<div class=\"row\">\n\t\t\n\t\t<div class=\"col-xl-12\">\n\t\t\t<!--begin:: Widgets/Activity-->\n\t\t\t<div class=\"m-portlet m-portlet--bordered-semi m-portlet--widget-fit m-portlet--full-height m-portlet--skin-light  m-portlet--rounded-force\">\n\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text m--font-light\">\n\t\t\t\t\t\t\t\tOrders\n\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<div class=\"m-portlet__head-tools\">\n\t\t\t\t\t\t<ul class=\"m-portlet__nav\">\n\t\t\t\t\t\t\t<li class=\"m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push\" m-dropdown-toggle=\"hover\">\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t</ul>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\t<div class=\"m-widget17\">\n\t\t\t\t\t\t<div class=\"m-widget17__visual m-widget17__visual--chart m-portlet-fit--top m-portlet-fit--sides m--bg-danger\">\n\t\t\t\t\t\t\t<div class=\"m-widget17__chart\" style=\"height:320px;\">\n\t\t\t\t\t\t\t\t<canvas id=\"m_chart_activities\"></canvas>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-widget17__stats\">\n\t\t\t\t\t\t\t<div class=\"m-widget17__items m-widget17__items-col1\">\n\t\t\t\t\t\t\t\t<div class=\"m-widget17__item\">\n\t\t\t\t\t\t\t\t\t<span class=\"m-widget17__icon\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-truck m--font-brand\"></i>\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t<span class=\"m-widget17__subtitle\">\n\t\t\t\t\t\t\t\t\t\tDelivered\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t<span class=\"m-widget17__desc\">\n\t\t\t\t\t\t\t\t\t\t{{dashboardData.total_delivered_order}} Delivered Orders\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"m-widget17__item\">\n\t\t\t\t\t\t\t\t\t<span class=\"m-widget17__icon\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-paper-plane m--font-info\"></i>\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t<span class=\"m-widget17__subtitle\">\n\t\t\t\t\t\t\t\t\t\tToday's Order\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t<span class=\"m-widget17__desc\">\n\t\t\t\t\t\t\t\t\t\t{{dashboardData.today_total_order}} Order\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"m-widget17__items m-widget17__items-col2\">\n\t\t\t\t\t\t\t\t<div class=\"m-widget17__item\">\n\t\t\t\t\t\t\t\t\t<span class=\"m-widget17__icon\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-pie-chart m--font-success\"></i>\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t<span class=\"m-widget17__subtitle\">\n\t\t\t\t\t\t\t\t\t\tOrdered\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t<span class=\"m-widget17__desc\">\n\t\t\t\t\t\t\t\t\t\t{{dashboardData.total_orders}} total orders\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"m-widget17__item\">\n\t\t\t\t\t\t\t\t\t<span class=\"m-widget17__icon\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-time m--font-danger\"></i>\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t<span class=\"m-widget17__subtitle\">\n\t\t\t\t\t\t\t\t\t\tPending\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t<span class=\"m-widget17__desc\">\n\t\t\t\t\t\t\t\t\t\t{{dashboardData.total_pending_order}} pending shipping status\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t\t<!--end:: Widgets/Activity-->\n\t\t</div>\n\t</div>\n</div>\n"

/***/ }),

/***/ "./src/app/theme/pages/default/reports/statement/statement.component.ts":
/*!******************************************************************************!*\
  !*** ./src/app/theme/pages/default/reports/statement/statement.component.ts ***!
  \******************************************************************************/
/*! exports provided: StatementComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "StatementComponent", function() { return StatementComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _auth_services_reports_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../../../../auth/_services/reports.service */ "./src/app/auth/_services/reports.service.ts");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");
/* harmony import */ var _services_data_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../../../../_services/data.service */ "./src/app/_services/data.service.ts");
/* harmony import */ var _auth_services_menu_service__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../../../../auth/_services/menu.service */ "./src/app/auth/_services/menu.service.ts");
/* harmony import */ var _auth_services_product_service__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../../../../auth/_services/product.service */ "./src/app/auth/_services/product.service.ts");
/* harmony import */ var _auth_services_category_service__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../../../../../auth/_services/category.service */ "./src/app/auth/_services/category.service.ts");
/* harmony import */ var _auth_services_subCategory_service__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ../../../../../auth/_services/subCategory.service */ "./src/app/auth/_services/subCategory.service.ts");
/* harmony import */ var _auth_services_brand_service__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ../../../../../auth/_services/brand.service */ "./src/app/auth/_services/brand.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var ngx_toastr__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ngx-toastr */ "./node_modules/ngx-toastr/fesm5/ngx-toastr.js");












var StatementComponent = /** @class */ (function () {
    function StatementComponent(toastr, router, _reportsService, _brandService, _menuService, _categoryService, _productService, _subCategory, _dataService, _script) {
        this.toastr = toastr;
        this.router = router;
        this._reportsService = _reportsService;
        this._brandService = _brandService;
        this._menuService = _menuService;
        this._categoryService = _categoryService;
        this._productService = _productService;
        this._subCategory = _subCategory;
        this._dataService = _dataService;
        this._script = _script;
        this.searchValue = "";
        this.dropDownValue = '';
        this.dashboardData = {};
        this.menu = [];
        this.p = 1;
    }
    StatementComponent.prototype.ngOnInit = function () {
        var _this = this;
        /*user permission*/
        var currentUser = JSON.parse(localStorage.getItem('currentUser'));
        var permission = currentUser.success.permission;
        if (permission.report_statement != 1) {
            this.toastr.error('You have not permission to visit this page.', 'Error Message');
            this.router.navigate(['/']);
        }
        /*user permission*/
        var user_id;
        var user_role;
        this.currentUser = JSON.parse(localStorage.getItem('currentUser'));
        user_id = this.currentUser.success.id;
        user_role = this.currentUser.success.role;
        this._menuService.searching({ dropdown_value: 'Active', search_value: "" }).subscribe(function (data) {
            var menu1;
            var menuData;
            menuData = data.success;
            menuData.forEach(function (element) {
                menu1 = {
                    item_id: element.id,
                    item_text: element.menu_name
                };
                _this.menu.push(menu1);
            });
            localStorage.setItem('menu', JSON.stringify(_this.menu));
        });
        this._menuService.dashboardService({ user_role: user_role, user_id: user_id })
            .subscribe(function (data) {
            _this.dashboardData.total_orders = data.total_orders[0].total_orders;
            _this.dashboardData.total_sales = data.total_sales[0].total_amt;
            _this.dashboardData.today_total_order = data.today_total_order[0].total_orders;
            _this.dashboardData.today_total_sales = data.today_total_sales[0].total_amt;
            _this.dashboardData.total_delivered_order = data.total_delivered_order[0].total_orders;
            _this.dashboardData.total_products = data.total_products[0].total_products;
            _this.dashboardData.total_instock_product = data.total_instock_product[0].total_products;
            _this.dashboardData.total_outstock_product = data.total_outstock_product[0].total_products;
            _this.dashboardData.total_pending_order = data.total_pending_order[0].total_orders;
            _this.dashboardData.quater_sale1 = data.quater_sale[0].Q1;
            _this.dashboardData.quater_sale2 = data.quater_sale[0].Q2;
            _this.dashboardData.quater_sale3 = data.quater_sale[0].Q3;
            _this.dashboardData.quater_sale4 = data.quater_sale[0].Q4;
            console.log(_this.dashboardData);
        });
    };
    StatementComponent.prototype.search = function () {
        var _this = this;
        this._reportsService.searching({ search_value: this.searchValue, dropdown_value: this.dropDownValue }).subscribe(function (data) {
            console.log(data);
            _this.customerData = data.success;
        });
    };
    StatementComponent.prototype.customer_delete = function (del_id) {
        var _this = this;
        console.log(del_id);
        var value = confirm('Are you sure to delete this customer request?');
        if (value) {
            this._reportsService.del_support(del_id).subscribe(function (data) {
                _this.customerData = data.data;
            });
        }
    };
    StatementComponent.prototype.changeStatus = function (customer) {
        if (customer.customer_status == 'Active') {
            customer.customer_status = 'Inactive';
            this._reportsService.updateStatus(customer.id).subscribe(function (data) {
                console.log('update', data);
            });
        }
        else {
            customer.customer_status = 'Active';
            this._reportsService.updateStatus(customer.id).subscribe(function (data) {
                console.log('update', data);
            });
        }
    };
    StatementComponent.prototype.ngAfterViewInit = function () {
        this._script.loadScripts('app-statement', ['assets/app/js/statement.js']);
    };
    StatementComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_2__["Component"])({
            selector: 'app-statement',
            template: __webpack_require__(/*! raw-loader!./statement.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/reports/statement/statement.component.html"),
            encapsulation: _angular_core__WEBPACK_IMPORTED_MODULE_2__["ViewEncapsulation"].None
        }),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [ngx_toastr__WEBPACK_IMPORTED_MODULE_11__["ToastrService"], _angular_router__WEBPACK_IMPORTED_MODULE_10__["Router"], _auth_services_reports_service__WEBPACK_IMPORTED_MODULE_1__["ReportsService"], _auth_services_brand_service__WEBPACK_IMPORTED_MODULE_9__["BrandService"], _auth_services_menu_service__WEBPACK_IMPORTED_MODULE_5__["MenuService"], _auth_services_category_service__WEBPACK_IMPORTED_MODULE_7__["CategoryService"], _auth_services_product_service__WEBPACK_IMPORTED_MODULE_6__["ProductService"], _auth_services_subCategory_service__WEBPACK_IMPORTED_MODULE_8__["SubCategoryService"], _services_data_service__WEBPACK_IMPORTED_MODULE_4__["DataService"], _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__["ScriptLoaderService"]])
    ], StatementComponent);
    return StatementComponent;
}());



/***/ }),

/***/ "./src/app/theme/pages/default/reports/statement/statement.module.ts":
/*!***************************************************************************!*\
  !*** ./src/app/theme/pages/default/reports/statement/statement.module.ts ***!
  \***************************************************************************/
/*! exports provided: StatementModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "StatementModule", function() { return StatementModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/fesm5/common.js");
/* harmony import */ var _statement_statement_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../statement/statement.component */ "./src/app/theme/pages/default/reports/statement/statement.component.ts");
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
                component: _statement_statement_component__WEBPACK_IMPORTED_MODULE_3__["StatementComponent"]
            }
        ]
    },
];
var StatementModule = /** @class */ (function () {
    function StatementModule() {
    }
    StatementModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["RouterModule"].forChild(routes),
                _layouts_layout_module__WEBPACK_IMPORTED_MODULE_6__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_7__["FormsModule"], ngx_pagination__WEBPACK_IMPORTED_MODULE_8__["NgxPaginationModule"],
            ],
            declarations: [_statement_statement_component__WEBPACK_IMPORTED_MODULE_3__["StatementComponent"]]
        })
    ], StatementModule);
    return StatementModule;
}());



/***/ })

}]);
//# sourceMappingURL=pages-default-reports-statement-statement-module-es5.js.map