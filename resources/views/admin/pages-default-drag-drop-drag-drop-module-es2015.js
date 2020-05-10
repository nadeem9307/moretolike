(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-drag-drop-drag-drop-module"],{

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/drag-drop/drag-drop.component.html":
/*!**************************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/pages/default/drag-drop/drag-drop.component.html ***!
  \**************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<!-- BEGIN: Subheader -->\n<div class=\"m-subheader\" appunwraptag=\"\">\n\t<div class=\"d-flex align-items-center\">\n\t\t<div class=\"mr-auto\">\n\t\t\t<h3 class=\"m-subheader__title\">\n\t\t\t\tDrag And Drop Dashboard\n\t\t\t</h3>\n\t\t</div>\n\t\t<div>\n\t\t\t<!-- <span class=\"m-subheader__daterange\" id=\"m_dashboard_daterangepicker\">\n\t\t\t\t<span class=\"m-subheader__daterange-label\">\n\t\t\t\t\t<span class=\"m-subheader__daterange-title\"></span>\n\t\t\t\t\t<span class=\"m-subheader__daterange-date m--font-brand\"></span>\n\t\t\t\t</span>\n\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill\">\n\t\t\t\t\t<i class=\"la la-angle-down\"></i>\n\t\t\t\t</a>\n\t\t\t</span> -->\n\t\t</div>\n\t</div>\n</div>\n<!-- END: Subheader -->\n<div class=\"m-content\">\n\t\n\t<!--Begin::Section-->\n\t<div class=\"row\">\n\t\t<div class=\"col-md-3\">\n\t\t\t\t<div class=\"form-group m-form__group\">\n\t\t\t\t\t<label for=\"exampleSelect1\">\n\t\t\t\t\t\tSELECT MARKETS\n\t\t\t\t\t</label>\n\t\t\t\t\t<select class=\"form-control m-input\" (change)=\"onChangeCountry($event)\" id=\"exampleSelect1\">\n\t\t\t\t\t\t<option>--Select Market--</option>\n\t\t\t\t\t\t<option *ngFor=\"let country of countries;\" value={{country.id}}>\n\t\t\t\t\t\t\t{{country.country_name}}\n\t\t\t\t\t\t</option>\n\t\t\t\t\t</select>\n\t\t\t\t</div>\n\t\t</div>\n\t\t<div class=\"col-md-3\">\n\t\t\t<label for=\"exampleSelect1\">\n\t\t\t\t\tAdd Gadget\n\t\t\t\t</label>\n\t\t\t<div class=\"form-group m-form__group\">\n\t\t\t\t<button type=\"submit\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#m_modal_6\">Add Gadget</button>\n\t\t\t</div>\n\t\t</div>\n\t</div>\n\t\t\n\t\t<!--end::Modal-->  <!-- Modal -->\n\t<div class=\"modal fade\" id=\"m_modal_6\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">\n\t\t<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">\n\t\t\t<div class=\"modal-content\">\n\t\t\t\t\n\t\t\t\t<div class=\"modal-body\">\n\t\t\t\t\t<div class=\"form-group m-form__group\">\n\t\t\t\t\t\t<label for=\"exampleSelect1\">\n\t\t\t\t\t\t\tAdd Gadget\n\t\t\t\t\t\t</label>\n\t\t\t\t\t\t<select class=\"form-control m-input\" (change)=\"onChangeGadget($event)\" id=\"exampleSelect1\">\n\t\t\t\t\t\t\t<option>--Add Gadget--</option>\n\t\t\t\t\t\t\t<option value=\"keynumber\">Key numbers</option>\n\t\t\t\t\t\t\t<option value=\"revenueOverview\">Revenue Overview</option>\n\t\t\t\t\t\t</select>\n\t\t\t\t\t</div>\n\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">\n\t\t\t\t\t\tOK\n\t\t\t\t\t</button>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n\t</div>\n\t<div class=\"row\" id=\"m_sortable_portlets\">\n\t\t<div class=\"col-lg-12\" id=\"keynumber\" *ngIf=\"show\" >\n\t\t\t\n\t\t\t<div class=\"m-portlet m-portlet--tab m-portlet--sortable resizable\">\n\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\">\n\t\t\t\t\t\t\t\t\t<i class=\"la la-gear\"></i>\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">\n\t\t\t\t\t\t\t\t\tKey numbers - last 30 day's\n\t\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t<div class=\"col-md-3\">\n\t\t\t\t\t\t\t\t\t<div id=\"todaysRevenue\" style=\"margin-left:50px;\">\n\t\t\t\t\t\t\t\t\t<h4>{{totalRevenueValue?.totalRevenue}} USD</h4>\n\t\t\t\t\t\t\t\t\tTotal Revenue\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-md-3\">\n\t\t\t\t\t\t\t\t\t<div id=\"\" style=\"margin-left:50px;\">\n\t\t\t\t\t\t\t\t\t<h4>{{totalRevenueValue?.totalCost}} USD</h4>\n\t\t\t\t\t\t\t\t\tTotal Cost\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-md-3\">\n\t\t\t\t\t\t\t\t\t<div id=\"\" style=\"margin-left:50px;\">\n\t\t\t\t\t\t\t\t\t<h4>{{totalOrderValue?.totalOrders}} </h4>\n\t\t\t\t\t\t\t\t\tTotal number of orders\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-md-3\">\n\t\t\t\t\t\t\t\t\t<div id=\"\" style=\"margin-left:50px;\">\n\t\t\t\t\t\t\t\t\t<h4>{{totalRevenueValue?.profit}} %</h4>\n\t\t\t\t\t\t\t\t\tProfit\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t</div>\n\t\t<div class=\"col-lg-12\" id=\"revenueOverview\"  >\n\t\t\t\n\t\t\t<div class=\"m-portlet m-portlet--tab m-portlet--sortable resizable\" [ngStyle]=\"{'display': divStyle1}\">\n\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\">\n\t\t\t\t\t\t\t\t\t<i class=\"la la-gear\"></i>\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">\n\t\t\t\t\t\t\t\t\tRevenue Overview\n\t\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<div class=\"m-portlet__body\" [ngStyle]=\"{'padding': divStyle}\">\n\t\t\t\t\t\t\t<div id=\"m_amcharts_90\" ></div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t</div>\n\t\t<div class=\"col-lg-3\">\n\t\t\t\t<!--begin::Portlet-->\n\t\t\t\t<div class=\"m-portlet m-portlet--tab m-portlet--sortable resizable\" style=\"background-color: #2c2e3e;\">\n\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\">\n\t\t\t\t\t\t\t\t\t<i class=\"la la-gear\"></i>\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\" style=\"color: #ffffffde;\">\n\t\t\t\t\t\t\t\t\tToday's Revenue\n\t\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\t\t\t<div id=\"todaysRevenue\" style=\"height: 40px;\">\n\t\t\t\t\t\t\t\t<h3 style=\"color: #ffffffde;\">{{todaysRevenuedata?.todaysRevenue}} USD</h3>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t</div>\n\t\t<div class=\"col-lg-9\">\n\t\t\t\t<!--begin::Portlet-->\n\t\t\t\t<div class=\"m-portlet m-portlet--tab m-portlet--sortable resizable\">\n\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\">\n\t\t\t\t\t\t\t\t\t<i class=\"la la-gear\"></i>\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">\n\t\t\t\t\t\t\t\t\tKey numbers - last 30 day's\n\t\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t<div class=\"col-md-3\">\n\t\t\t\t\t\t\t\t\t<div id=\"todaysRevenue\" style=\"margin-left:50px;\">\n\t\t\t\t\t\t\t\t\t<h4 style=\"color: #009c30a3;\">{{totalRevenueValue?.totalRevenue}}</h4>\n\t\t\t\t\t\t\t\t\tTotal Revenue\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-md-3\">\n\t\t\t\t\t\t\t\t\t<div id=\"\" style=\"margin-left:50px;\">\n\t\t\t\t\t\t\t\t\t<h4 style=\"color: #ff2f0094;\">{{totalRevenueValue?.totalCost}}</h4>\n\t\t\t\t\t\t\t\t\tTotal Cost\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-md-3\">\n\t\t\t\t\t\t\t\t\t<div id=\"\" style=\"margin-left:50px;\">\n\t\t\t\t\t\t\t\t\t<h4>{{totalOrderValue?.totalOrders}} </h4>\n\t\t\t\t\t\t\t\t\tTotal number of orders\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-md-3\">\n\t\t\t\t\t\t\t\t\t<div id=\"\" style=\"margin-left:50px;\">\n\t\t\t\t\t\t\t\t\t<h4>{{totalRevenueValue?.profit}} %</h4>\n\t\t\t\t\t\t\t\t\tProfit\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t</div>\n\t\t\t<!--end::Portlet-->\n\t\t<div class=\"col-lg-6\">\n\t\t\t<!--begin::Portlet-->\n\t\t\t<div class=\"m-portlet m-portlet--tab m-portlet--sortable resizable\">\n\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\">\n\t\t\t\t\t\t\t\t<i class=\"la la-gear\"></i>\n\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">\n\t\t\t\t\t\t\t\tRevenue last 30 days\n\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\t\t<div id=\"m_amcharts_6\" style=\"height: 500px;\"></div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t\t<!-- begin:Empty Portlet: sortable porlet required for each columns! -->\n\t\t\t<div class=\"m-portlet m-portlet--sortable-empty\"></div>\n\t\t\t<!--end::Empty Portlet-->\n\t\t</div>\n\t\t<div class=\"col-lg-6\">\n\t\t\t<div class=\"m-portlet m-portlet--tab m-portlet--sortable resizable\" >\n\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\">\n\t\t\t\t\t\t\t\t<i class=\"la la-gear\"></i>\n\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">\n\t\t\t\t\t\t\t\tAverage order value last 30 days\n\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\t\t<div id=\"m_amcharts_7\" style=\"height: 500px;\"></div>\n\t\t\t\t</div>\n\t\t\t</div>\t\t\n\t\t\t<div class=\"m-portlet m-portlet--sortable-empty\"></div>\n\t\t\t\n\t\t</div>\n\t\t\n\t</div>\n</div>\n"

/***/ }),

/***/ "./src/app/theme/pages/default/drag-drop/drag-drop.component.ts":
/*!**********************************************************************!*\
  !*** ./src/app/theme/pages/default/drag-drop/drag-drop.component.ts ***!
  \**********************************************************************/
/*! exports provided: DragDropComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "DragDropComponent", function() { return DragDropComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _helpers__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../helpers */ "./src/app/helpers.ts");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");
/* harmony import */ var _services_data_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../../../_services/data.service */ "./src/app/_services/data.service.ts");
/* harmony import */ var _auth_services_menu_service__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../../../auth/_services/menu.service */ "./src/app/auth/_services/menu.service.ts");
/* harmony import */ var _auth_services_product_service__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../../../auth/_services/product.service */ "./src/app/auth/_services/product.service.ts");
/* harmony import */ var _auth_services_order_service__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../../../../auth/_services/order.service */ "./src/app/auth/_services/order.service.ts");
/* harmony import */ var _auth_services_category_service__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ../../../../auth/_services/category.service */ "./src/app/auth/_services/category.service.ts");
/* harmony import */ var _auth_services_subCategory_service__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ../../../../auth/_services/subCategory.service */ "./src/app/auth/_services/subCategory.service.ts");
/* harmony import */ var _auth_services_brand_service__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ../../../../auth/_services/brand.service */ "./src/app/auth/_services/brand.service.ts");
/* harmony import */ var _amcharts_amcharts3_angular__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! @amcharts/amcharts3-angular */ "./node_modules/@amcharts/amcharts3-angular/es2015/index.js");












let DragDropComponent = class DragDropComponent {
    constructor(_brandService, _menuService, _categoryService, _productService, _subCategory, _dataService, _script, AmCharts, _orderService) {
        this._brandService = _brandService;
        this._menuService = _menuService;
        this._categoryService = _categoryService;
        this._productService = _productService;
        this._subCategory = _subCategory;
        this._dataService = _dataService;
        this._script = _script;
        this.AmCharts = AmCharts;
        this._orderService = _orderService;
        this.menu = [];
        this.revenueData = [];
        this.totalAverageValue = [];
        this.totalAveValues = [];
        this.dashboardData = {};
        this.dataProvider2 = [];
        this.divStyle = '0';
        this.divStyle1 = 'none';
        this.show = false;
        this.show2 = false;
    }
    ngOnInit() {
        this.allRevenue();
        this.revenue();
        this.average();
        this.allAverage();
        this.getCountry();
        this.todaysRevenue();
        this.totalRevenue();
        this.totalOrders();
        //console.log('ngOn',this.revenueData);
        let user_id;
        let user_role;
        this.currentUser = JSON.parse(localStorage.getItem('currentUser'));
        user_id = this.currentUser.success.id;
        user_role = this.currentUser.success.role;
        this._menuService.searching({ dropdown_value: 'Active', search_value: "" }).subscribe(data => {
            let menu1;
            let menuData;
            menuData = data.success;
            menuData.forEach(element => {
                menu1 = {
                    item_id: element.id,
                    item_text: element.menu_name
                };
                this.menu.push(menu1);
            });
            localStorage.setItem('menu', JSON.stringify(this.menu));
        });
        console.log('reached');
        this._menuService.dashboardService({ user_role: user_role, user_id: user_id })
            .subscribe(data => {
            this.dashboardData.total_users = data.total_users[0].total_users;
            this.dashboardData.active_users = data.active_users[0].active_users;
            this.dashboardData.inactive_users = data.total_users[0].total_users - data.active_users[0].active_users;
            this.dashboardData.total_orders = data.total_orders[0].total_orders;
            this.dashboardData.total_sales = data.total_sales[0].total_amt;
            this.dashboardData.today_total_order = data.today_total_order[0].total_orders;
            this.dashboardData.today_total_sales = data.today_total_sales[0].total_amt;
            this.dashboardData.total_delivered_order = data.total_delivered_order[0].total_orders;
            this.dashboardData.total_products = data.total_products[0].total_products;
            this.dashboardData.total_instock_product = data.total_instock_product[0].total_products;
            this.dashboardData.total_outstock_product = data.total_outstock_product[0].total_products;
            this.dashboardData.total_pending_order = data.total_pending_order[0].total_orders;
            this.dashboardData.quater_sale1 = data.quater_sale[0].Q1;
            this.dashboardData.quater_sale2 = data.quater_sale[0].Q2;
            this.dashboardData.quater_sale3 = data.quater_sale[0].Q3;
            this.dashboardData.quater_sale4 = data.quater_sale[0].Q4;
            //console.log(this.dashboardData);
        });
    }
    revenue() {
        let dataProvider1 = [];
        let dataLoaded = false;
        this.currentUser = JSON.parse(localStorage.getItem('currentUser'));
        let user_id = this.currentUser.success.id;
        this._orderService.revenue({ user_id: user_id, country_id: this.country_id }).subscribe(data => {
            let revenueData = data.success;
            revenueData.forEach(element => {
                let revData = {
                    date: element.created_date.split(" ")[0],
                    value: element.revenue
                };
                dataProvider1.push(revData);
            });
            dataLoaded = true;
        }, (err) => { console.log(err); }, () => {
            this.AmCharts.updateChart(this.chart, () => {
                this.chart.dataProvider = dataProvider1;
            });
        });
    }
    allRevenue() {
        let dataLoaded = false;
        this.currentUser = JSON.parse(localStorage.getItem('currentUser'));
        let user_id = this.currentUser.success.id;
        this._orderService.revenue({ user_id: user_id, country_id: this.country_id }).subscribe(data => {
            let revenueData = data.success;
            revenueData.forEach(element => {
                let revData = {
                    date: element.created_date.split(" ")[0],
                    value: element.revenue
                };
                this.dataProvider2.push(revData);
            });
            dataLoaded = true;
        }, (err) => { console.log(err); });
    }
    onChangeCountry(e) {
        this.country_id = e.target.value;
        this.revenue();
        this.average();
    }
    onChangeGadget(e) {
        this.gadget = e.target.value;
        if (e.target.value == 'keynumber') {
            this.show = true;
            this.show2 = false;
            this.divStyle = "0px";
            this.divStyle1 = "none";
            this.AmCharts.destroyChart(this.chart2);
        }
        if (e.target.value == 'revenueOverview') {
            this.show2 = true;
            this.show = false;
            this.divStyle = "5px";
            this.divStyle1 = "block";
            this.reviewOverview();
            this.AmCharts.updateChart(this.chart2, () => {
                //console.log(this.chart2);
                this.chart2.dataProvider = this.dataProvider2;
            });
        }
    }
    average() {
        let aver = [];
        let dataLoaded = false;
        this.currentUser = JSON.parse(localStorage.getItem('currentUser'));
        let user_id = this.currentUser.success.id;
        this._orderService.average({ user_id: user_id, country_id: this.country_id }).subscribe(data => {
            let averageData = data.success;
            averageData.forEach(element => {
                let aveData = {
                    date: element.created_date.split(" ")[0],
                    visits: element.average
                };
                aver.push(aveData);
            });
            dataLoaded = true;
        }, (err) => { console.log(err); }, () => {
            //console.log(aver);
            this.AmCharts.updateChart(this.chart1, () => {
                this.chart1.dataProvider = aver;
            });
        });
    }
    allAverage() {
        this.currentUser = JSON.parse(localStorage.getItem('currentUser'));
        let user_id = this.currentUser.success.id;
        this._orderService.average({ user_id: user_id, country_id: this.country_id }).subscribe(data => {
            this.totalAverageValue = data.success;
            this.totalAverageValue.forEach(element => {
                this.totalAveData = {
                    date: element.created_date.split(" ")[0],
                    visits: element.average
                };
                this.totalAveValues.push(this.totalAveData);
            });
        });
    }
    getCountry() {
        this.currentUser = JSON.parse(localStorage.getItem('currentUser'));
        let user_id = this.currentUser.success.id;
        this._orderService.getCountry({ user_id: user_id }).subscribe(data => {
            this.countries = data.success;
        });
    }
    todaysRevenue() {
        this.currentUser = JSON.parse(localStorage.getItem('currentUser'));
        let user_id = this.currentUser.success.id;
        this._orderService.todaysRevenue({ user_id: user_id }).subscribe(data => {
            //console.log(data.success);
            this.todaysRevenuedata = data.success;
        });
    }
    totalRevenue() {
        this.currentUser = JSON.parse(localStorage.getItem('currentUser'));
        let user_id = this.currentUser.success.id;
        this._orderService.totalRevenue({ user_id: user_id }).subscribe(data => {
            //console.log(data.success);
            this.totalRevenueValue = data.success;
        });
    }
    totalOrders() {
        this.currentUser = JSON.parse(localStorage.getItem('currentUser'));
        let user_id = this.currentUser.success.id;
        this._orderService.totalOrders({ user_id: user_id }).subscribe(data => {
            //console.log(data.success);
            this.totalOrderValue = data.success;
        });
    }
    ngAfterViewInit() {
        this._script.loadScripts('app-drag-drop', ['assets/app/js/dashboard.js', '//www.amcharts.com/lib/3/plugins/tools/polarScatter/polarScatter.min.js',
            '//www.amcharts.com/lib/3/plugins/export/export.min.js',
            'assets/demo/default/custom/components/charts/amcharts/charts.js', 'assets/demo/default/custom/components/charts/amcharts/stock-charts.js', 'assets/vendors/custom/jquery-ui/jquery-ui.bundle.js',
            'assets/demo/default/custom/components/portlets/draggable.js']);
        _helpers__WEBPACK_IMPORTED_MODULE_2__["Helpers"].loadStyles('app-amcharts-charts', [
            '//www.amcharts.com/lib/3/plugins/export/export.css', 'assets/vendors/custom/jquery-ui/jquery-ui.bundle.css'
        ]);
        this.chart = this.AmCharts.makeChart('m_amcharts_6', {
            type: "serial",
            theme: "light",
            marginRight: 40,
            marginLeft: 40,
            autoMarginOffset: 20,
            mouseWheelZoomEnabled: !0,
            dataDateFormat: "YYYY-MM-DD",
            valueAxes: [{
                    id: "v1",
                    axisAlpha: 0,
                    position: "left",
                    ignoreAxisWidth: !0
                }],
            balloon: {
                borderThickness: 1,
                shadowAlpha: 0
            },
            graphs: [{
                    id: "g1",
                    balloon: {
                        drop: !0,
                        adjustBorderColor: !1,
                        color: "#ffffff"
                    },
                    bullet: "round",
                    bulletBorderAlpha: 1,
                    bulletColor: "#FFFFFF",
                    bulletSize: 5,
                    hideBulletsCount: 50,
                    lineThickness: 2,
                    title: "red line",
                    useLineColorForBulletBorder: !0,
                    valueField: "value",
                    balloonText: "<span style='font-size:18px;'>[[value]]</span>"
                }],
            chartScrollbar: {
                graph: "g1",
                oppositeAxis: !1,
                offset: 30,
                scrollbarHeight: 80,
                backgroundAlpha: 0,
                selectedBackgroundAlpha: .1,
                selectedBackgroundColor: "#888888",
                graphFillAlpha: 0,
                graphLineAlpha: .5,
                selectedGraphFillAlpha: 0,
                selectedGraphLineAlpha: 1,
                autoGridCount: !0,
                color: "#AAAAAA"
            },
            chartCursor: {
                pan: !0,
                valueLineEnabled: !0,
                valueLineBalloonEnabled: !0,
                cursorAlpha: 1,
                cursorColor: "#258cbb",
                limitToGraph: "g1",
                valueLineAlpha: .2,
                valueZoomable: !0
            },
            valueScrollbar: {
                oppositeAxis: !1,
                offset: 50,
                scrollbarHeight: 10
            },
            categoryField: "date",
            categoryAxis: {
                parseDates: !0,
                dashLength: 1,
                minorGridEnabled: !0
            },
            export: {
                enabled: 0
            },
            dataProvider: this.dataProvider2
        });
        this.chart1 = this.AmCharts.makeChart("m_amcharts_7", {
            type: "serial",
            theme: "light",
            marginRight: 80,
            autoMarginOffset: 20,
            marginTop: 7,
            dataProvider: this.totalAveValues,
            valueAxes: [{
                    axisAlpha: .2,
                    dashLength: 1,
                    position: "left"
                }],
            mouseWheelZoomEnabled: !0,
            graphs: [{
                    id: "g1",
                    balloonText: "[[value]]",
                    bullet: "round",
                    bulletBorderAlpha: 1,
                    bulletColor: "#FFFFFF",
                    hideBulletsCount: 50,
                    title: "red line",
                    valueField: "visits",
                    useLineColorForBulletBorder: !0,
                    balloon: {
                        drop: !0
                    }
                }],
            chartScrollbar: {
                autoGridCount: !0,
                graph: "g1",
                scrollbarHeight: 40
            },
            chartCursor: {
                limitToGraph: "g1"
            },
            categoryField: "date",
            categoryAxis: {
                parseDates: !0,
                axisColor: "#DADADA",
                dashLength: 1,
                minorGridEnabled: !0
            },
            export: {
                enabled: 0
            }
        });
    }
    reviewOverview() {
        this.chart2 = this.AmCharts.makeChart("m_amcharts_90", {
            type: "serial",
            theme: "light",
            height: "500",
            dataProvider: this.dataProvider2,
            valueAxes: [{
                    gridColor: "#FFFFFF",
                    gridAlpha: .2,
                    dashLength: 0
                }],
            gridAboveGraphs: !0,
            startDuration: 1,
            graphs: [{
                    balloonText: "[[category]]: <b>[[value]]</b>",
                    fillAlphas: .8,
                    lineAlpha: .2,
                    type: "column",
                    valueField: "value"
                }],
            chartCursor: {
                categoryBalloonEnabled: !1,
                cursorAlpha: 0,
                zoomable: !1
            },
            categoryField: "date",
            categoryAxis: {
                gridPosition: "start",
                gridAlpha: 0,
                tickPosition: "start",
                tickLength: 20,
                labelRotation: 90,
                parseDates: true,
                dataDateFormat: "YYYY-MM-DD"
            },
            export: {
                enabled: 0
            }
        });
    }
    ngOnDestroy() {
        if (this.chart) {
            this.AmCharts.destroyChart(this.chart);
        }
        if (this.chart1) {
            this.AmCharts.destroyChart(this.chart1);
        }
        if (this.chart2) {
            this.AmCharts.destroyChart(this.chart2);
        }
    }
};
DragDropComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: "app-drag-drop",
        template: __webpack_require__(/*! raw-loader!./drag-drop.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/drag-drop/drag-drop.component.html"),
        encapsulation: _angular_core__WEBPACK_IMPORTED_MODULE_1__["ViewEncapsulation"].None,
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_auth_services_brand_service__WEBPACK_IMPORTED_MODULE_10__["BrandService"], _auth_services_menu_service__WEBPACK_IMPORTED_MODULE_5__["MenuService"], _auth_services_category_service__WEBPACK_IMPORTED_MODULE_8__["CategoryService"], _auth_services_product_service__WEBPACK_IMPORTED_MODULE_6__["ProductService"], _auth_services_subCategory_service__WEBPACK_IMPORTED_MODULE_9__["SubCategoryService"], _services_data_service__WEBPACK_IMPORTED_MODULE_4__["DataService"], _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__["ScriptLoaderService"], _amcharts_amcharts3_angular__WEBPACK_IMPORTED_MODULE_11__["AmChartsService"], _auth_services_order_service__WEBPACK_IMPORTED_MODULE_7__["OrderService"]])
], DragDropComponent);



/***/ }),

/***/ "./src/app/theme/pages/default/drag-drop/drag-drop.module.ts":
/*!*******************************************************************!*\
  !*** ./src/app/theme/pages/default/drag-drop/drag-drop.module.ts ***!
  \*******************************************************************/
/*! exports provided: DragDropModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "DragDropModule", function() { return DragDropModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/fesm2015/common.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var _drag_drop_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./drag-drop.component */ "./src/app/theme/pages/default/drag-drop/drag-drop.component.ts");
/* harmony import */ var _layouts_layout_module__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../../layouts/layout.module */ "./src/app/theme/layouts/layout.module.ts");
/* harmony import */ var _default_component__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../default.component */ "./src/app/theme/pages/default/default.component.ts");







const routes = [
    {
        "path": "",
        "component": _default_component__WEBPACK_IMPORTED_MODULE_6__["DefaultComponent"],
        "children": [
            {
                "path": "",
                "component": _drag_drop_component__WEBPACK_IMPORTED_MODULE_4__["DragDropComponent"]
            }
        ]
    }
];
let DragDropModule = class DragDropModule {
};
DragDropModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        imports: [
            _angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_3__["RouterModule"].forChild(routes), _layouts_layout_module__WEBPACK_IMPORTED_MODULE_5__["LayoutModule"]
        ], exports: [
            _angular_router__WEBPACK_IMPORTED_MODULE_3__["RouterModule"]
        ], declarations: [
            _drag_drop_component__WEBPACK_IMPORTED_MODULE_4__["DragDropComponent"]
        ]
    })
], DragDropModule);



/***/ })

}]);
//# sourceMappingURL=pages-default-drag-drop-drag-drop-module-es2015.js.map