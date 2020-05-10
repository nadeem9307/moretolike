(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-order-order-summary-order-summary-module"],{

/***/ "./src/app/theme/pages/default/order/order-summary/order-summary.component.html":
/*!**************************************************************************************!*\
  !*** ./src/app/theme/pages/default/order/order-summary/order-summary.component.html ***!
  \**************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"m-grid__item m-grid__item--fluid m-wrapper\">\n\t<!-- BEGIN: Subheader -->\n\t<div class=\"m-subheader \">\n\t\t<div class=\"d-flex align-items-center\">\n\t\t\t<div class=\"mr-auto\">\n\t\t\t\t<h3 class=\"m-subheader__title m-subheader__title--separator\">\n\t\t\t\t\tOrder Invoice\n\t\t\t\t</h3>\n\t\t\t\t<ul class=\"m-subheader__breadcrumbs m-nav m-nav--inline\">\n\t\t\t\t\t<li class=\"m-nav__item m-nav__item--home\">\n\t\t\t\t\t\t<a href=\"#\" class=\"m-nav__link m-nav__link--icon\" routerLink=\"/\">\n\t\t\t\t\t\t\t<i class=\"m-nav__link-icon la la-home\"></i>\n\t\t\t\t\t\t</a>\n\t\t\t\t\t</li>\n\t\t\t\t\t<li class=\"m-nav__separator\">\n\t\t\t\t\t\t-\n\t\t\t\t\t</li>\n\t\t\t\t\t<li class=\"m-nav__item\">\n\t\t\t\t\t\t<a href=\"#\" class=\"m-nav__link\" routerLink=\"/order/order-list\">\n\t\t\t\t\t\t\t<span class=\"m-nav__link-text\">\n\t\t\t\t\t\t\t\tOrders\n\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t</a>\n\t\t\t\t\t</li>\n\t\t\t\t\t<li class=\"m-nav__separator\">\n\t\t\t\t\t\t-\n\t\t\t\t\t</li>\n\t\t\t\t\t<li class=\"m-nav__item\">\n\t\t\t\t\t\t<a href=\"\" class=\"m-nav__link\">\n\t\t\t\t\t\t\t<span class=\"m-nav__link-text\">\n\t\t\t\t\t\t\t\tOrder Invoice\n\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t</a>\n\t\t\t\t\t</li>\n\t\t\t\t</ul>\n\t\t\t</div>\n\t\t\t<div>\n\t\t\t\t<div class=\"m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push\" m-dropdown-toggle=\"hover\" aria-expanded=\"true\">\n\t\t\t\t\t<a href=\"#\" class=\"m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle\">\n\t\t\t\t\t\t<i class=\"la la-plus m--hide\"></i>\n\t\t\t\t\t\t<i class=\"la la-ellipsis-h\"></i>\n\t\t\t\t\t</a>\n\t\t\t\t\t<div class=\"m-dropdown__wrapper\">\n\t\t\t\t\t\t<span class=\"m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust\"></span>\n\t\t\t\t\t\t<div class=\"m-dropdown__inner\">\n\t\t\t\t\t\t\t<div class=\"m-dropdown__body\">\n\t\t\t\t\t\t\t\t<div class=\"m-dropdown__content\">\n\t\t\t\t\t\t\t\t\t<ul class=\"m-nav\">\n\t\t\t\t\t\t\t\t\t\t<li class=\"m-nav__section m-nav__section--first m--hide\">\n\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-nav__section-text\">\n\t\t\t\t\t\t\t\t\t\t\t\tQuick Actions\n\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t<li class=\"m-nav__item\">\n\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-nav__link\">\n\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"m-nav__link-icon flaticon-share\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tActivity\n\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t<li class=\"m-nav__item\">\n\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-nav__link\">\n\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"m-nav__link-icon flaticon-chat-1\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tMessages\n\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t<li class=\"m-nav__item\">\n\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-nav__link\">\n\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"m-nav__link-icon flaticon-info\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tFAQ\n\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t<li class=\"m-nav__item\">\n\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-nav__link\">\n\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"m-nav__link-icon flaticon-lifebuoy\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tSupport\n\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t<li class=\"m-nav__separator m-nav__separator--fit\"></li>\n\t\t\t\t\t\t\t\t\t\t<li class=\"m-nav__item\">\n\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm\">\n\t\t\t\t\t\t\t\t\t\t\t\tSubmit\n\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n\t</div>\n\t<!-- END: Subheader -->\n\t<div class=\"m-content\">\n\t\t<div class=\"m-portlet\">\n\t\t\t<div class=\"m-portlet__body m-portlet__body--no-padding\">\n\t\t\t\t<div class=\"m-invoice-1\">\n\t\t\t\t\t<div class=\"m-invoice__wrapper\">\n\t\t\t\t\t\t<table style=\"border:1px solid #ccc;\" width=\"100%\" cellspacing=\"0\" cellpadding=\"10\" border=\"0\" id=\"invoice_print\"> \n\t\t\t\t\t\t    <tbody><tr>\n\t\t\t\t\t\t      <td>\n\t\t\t\t\t\t        <table style=\"border:1px solid #ccc;\" width=\"100%\" cellspacing=\"10\" cellpadding=\"0\" border=\"0\">\n\t\t\t\t\t\t    <tbody><tr>\n\t\t\t\t\t\t      <td><h2>Tax Invoice</h2></td>\n\t\t\t\t\t\t      <td>Order Id: <b>{{orderData.order_no}}</b><br> Order Date: {{orderData.order_date}}</td>\n\t\t\t\t\t\t      <td>Invoice No: <b>{{orderData.order_no}}</b><br>Invoice Date: {{orderData.order_date}}</td>\n\t\t\t\t\t\t      <td>GSTIN: 33AJMPJ9684L1ZF<br> PAN: AJMPJ9684L</td>\n\t\t\t\t\t\t    </tr>\n\t\t\t\t\t\t  \n\t\t\t\t\t\t  </tbody></table>\n\t\t\t\t\t\t</td>\n\t\t\t\t\t\t    </tr>\n\t\t\t\t\t\t   \n\t\t\t\t\t\t    <tr>\n\t\t\t\t\t\t      <td>\n\t\t\t\t\t\t        <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">\n\t\t\t\t\t\t    <tbody><tr>\n\t\t\t\t\t\t      <td><b>MoreToLike</b></td>\n\t\t\t\t\t\t      <td><b>Shipping ADDRESS</b></td>\n\t\t\t\t\t\t      <td><b>Billing Address</b></td>\n\t\t\t\t\t\t    </tr>\n\t\t\t\t\t\t    <tr>\n\t\t\t\t\t\t      <td>Blue Ocean Building</td>\n\t\t\t\t\t\t      <td>{{orderData.billing_first_name}} {{orderData.billing_last_name}},</td>\n\t\t\t\t\t\t      <td>{{orderData.shipping_first_name}} {{orderData.shipping_last_name}},</td>\n\t\t\t\t\t\t    </tr>\n\t\t\t\t\t\t<tr>\n\t\t\t\t\t\t      <td>32 kamla nehru nagar nehru, DC road,</td>\n\t\t\t\t\t\t      <td>{{orderData.billing_address_1}}, {{orderData.billing_address_2}}</td>\n\t\t\t\t\t\t      <td>{{orderData.shipping_address_1}}, {{orderData.shipping_address_2}}</td>\n\t\t\t\t\t\t    </tr>\n\t\t\t\t\t\t    <tr>\n\t\t\t\t\t\t      <td>Crystal view appartment, LK,</td>\n\t\t\t\t\t\t      <td>{{orderData.billing_city}}, </td>\n\t\t\t\t\t\t      <td>{{orderData.shipping_city}},</td>\n\t\t\t\t\t\t    </tr>\n\t\t\t\t\t\t    <tr>\n\t\t\t\t\t\t      <td>TB 600037</td>\n\t\t\t\t\t\t      <td>{{orderData.country_name}} - {{orderData.billing_postcode}}</td>\n\t\t\t\t\t\t      <td>{{orderData.country_name}} - {{orderData.shipping_postcode}}</td>\n\t\t\t\t\t\t    </tr>\n\t\t\t\t\t\t  \n\t\t\t\t\t\t  </tbody></table>\n\t\t\t\t\t\t      </td>\n\t\t\t\t\t\t    </tr>\n\n\t\t\t\t\t\t    <tr>\n\t\t\t\t\t\t      <td>\n\t\t\t\t\t\t         <table style=\"border:1px solid #ccc;\" width=\"100%\" cellspacing=\"0\" cellpadding=\"10\" border=\"0\">\n\t\t\t\t\t\t         <tbody><tr>\n\t\t\t\t\t\t            <td><b>Product<b></b></b></td>\n\t\t\t\t\t\t            <td><b>Description<b></b></b></td>\n\t\t\t\t\t\t            <td><b>Qty<b></b></b></td>\n\t\t\t\t\t\t            <td><b>Gross Amount<b></b></b></td>\n\t\t\t\t\t\t            <td><b>Discount<b></b></b></td>\n\t\t\t\t\t\t            <td><b>Taxable<b></b></b></td>\n\t\t\t\t\t\t            <td><b>IGST<b></b></b></td>\n\t\t\t\t\t\t            <td><b>Total<b></b></b></td>\n\t\t\t\t\t\t         </tr>\n\t\t\t\t\t\t          <tr *ngFor=\"let od of orderDatas\">\n\t\t\t\t\t\t           <td>\n\t\t\t\t\t\t\t\t\t\t<img src=\"{{ImgUrl}}75X75_{{od.product_img}}\" >\n\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t\t\t\t<td style=\"text-align: left;\">\n\t\t\t\t\t\t\t\t\t\tName : {{od.product_name}}\n\t\t\t\t\t\t\t\t\t\t<br>\n\t\t\t\t\t\t\t\t\t\tSKU : {{od.sku}}\n\t\t\t\t\t\t\t\t\t\t<br>\n\t\t\t\t\t\t\t\t\t\tSold By : {{od.store_name}}\n\t\t\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t            <td>{{od.quantity}}</td>\n\t\t\t\t\t\t            <td>${{od.product_price}}</td>\n\t\t\t\t\t\t            <td>-0.00</td>\n\t\t\t\t\t\t            <td>${{od.product_price}}</td>\n\t\t\t\t\t\t            <td>00.00</td>\n\t\t\t\t\t\t            <td>${{od.product_price*od.quantity}}</td>\n\t\t\t\t\t\t         </tr>\n\t\t\t\t\t\t         </tbody></table>\n\t\t\t\t\t\t      </td>\n\t\t\t\t\t\t    </tr>\n\n\t\t\t\t\t\t    <tr>\n\t\t\t\t\t\t      <td>\n\t\t\t\t\t\t        <table style=\"border:1px solid #ccc;\" width=\"100%\" cellspacing=\"0\" cellpadding=\"10\" border=\"0\">\n\t\t\t\t\t\t          <tbody><tr>\n\t\t\t\t\t\t            <td><h4>TOTAL QTY: {{orderData.totalQuantity}}</h4></td>\n\t\t\t\t\t\t            <td align=\"right\"><h4>TOTAL PRICE: ${{orderData.total_amount}}</h4>All values are in $</td>\n\t\t\t\t\t\t          </tr>\n\t\t\t\t\t\t         \n\t\t\t\t\t\t        </tbody></table>\n\t\t\t\t\t\t      </td>\n\t\t\t\t\t\t    </tr>\n\t\t\t\t\t\t    \n\t\t\t\t\t\t      \n\t\t\t\t\t\t      <tr>\n\t\t\t\t\t\t        <td>\n\t\t\t\t\t\t       <b>Declaration</b>\n\t\t\t\t\t\t      </td>\n\t\t\t\t\t\t    </tr>\n\t\t\t\t\t\t     <tr>\n\t\t\t\t\t\t        <td>\n\t\t\t\t\t\t       The goods sold are intended for end user consumption and not for resale.\n\t\t\t\t\t\t      </td>\n\t\t\t\t\t\t    </tr>\n\t\t\t\t\t\t<tr>\n\t\t\t\t\t\t        <td height=\"30\">\n\t\t\t\t\t\t        </td></tr>\n\t\t\t\t\t\t     <tr>\n\t\t\t\t\t\t        <td>\n\t\t\t\t\t\t    <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">\n\t\t\t\t\t\t      <tbody><tr>\n\t\t\t\t\t\t        <td width=\"30%\">E. &amp; O.E.</td>\n\t\t\t\t\t\t         <td width=\"40%\" align=\"center\">Ordered Through</td>\n\t\t\t\t\t\t          <td width=\"30%\" align=\"right\"><img src=\"images/small-logo.jpg\" alt=\"\" width=\"80\"></td>\n\t\t\t\t\t\t      </tr>\n\t\t\t\t\t\t      <tr>\n\t\t\t\t\t\t        <td width=\"30%\"><h4>Moretolike.com</h4></td>\n\t\t\t\t\t\t         <td width=\"40%\" align=\"center\"></td>\n\t\t\t\t\t\t          <td width=\"30%\" align=\"right\"> MoreToLike</td>\n\t\t\t\t\t\t      </tr>\n\t\t\t\t\t\t    </tbody></table>\n\t\t\t\t\t\t      </td>\n\t\t\t\t\t\t    </tr>\n\t\t\t\t\t\t  </tbody></table>\n\t\t\t\t\t\t  \t<a class=\"nav-link m-tabs__link active\" (click)=\"printToCart('invoice_print')\" style=\"cursor: pointer;\">\n\t\t\t\t\t\t\t\t\tPrint\n\t\t\t\t\t\t    </a>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n\t</div>\n</div>"

/***/ }),

/***/ "./src/app/theme/pages/default/order/order-summary/order-summary.component.ts":
/*!************************************************************************************!*\
  !*** ./src/app/theme/pages/default/order/order-summary/order-summary.component.ts ***!
  \************************************************************************************/
/*! exports provided: OrderSummaryComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "OrderSummaryComponent", function() { return OrderSummaryComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _auth_services_order_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../../../../auth/_services/order.service */ "./src/app/auth/_services/order.service.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/esm5/forms.js");
/* harmony import */ var _services_data_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../../_services/data.service */ "./src/app/_services/data.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/esm5/router.js");
/* harmony import */ var ngx_toastr__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ngx-toastr */ "./node_modules/ngx-toastr/fesm5/ngx-toastr.js");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../../../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};







var OrderSummaryComponent = /** @class */ (function () {
    function OrderSummaryComponent(imgBaseUrl, toastr, route, router, _orderService, _dataService, formBuilder) {
        this.imgBaseUrl = imgBaseUrl;
        this.toastr = toastr;
        this.route = route;
        this.router = router;
        this._orderService = _orderService;
        this._dataService = _dataService;
        this.formBuilder = formBuilder;
        this.orderData = {};
        this.searchValue = '';
        this.shippingValue = '';
        this.selectedStatus = '';
        this.dataSaved = false;
        this.saveMsg = '';
        this.order_no = '';
        this.p = 1;
        this.id = '';
        this.name = '';
        this.old_brand_logo = '';
    }
    OrderSummaryComponent.prototype.ngOnInit = function () {
        // this.notificationsService.addInfo('Brand Added Successfully');
        var _this = this;
        /*user permission*/
        var currentUser = JSON.parse(localStorage.getItem('currentUser'));
        var permission = currentUser.success.permission;
        if (permission.order_edit != 1) {
            this.toastr.error('You have not permission to visit this page.', 'Error Message');
            this.router.navigate(['/']);
        }
        /*user permission*/
        this._dataService.setloaderState(false);
        this._dataService.setactiveMenu('brand');
        this.ImgUrl = this.imgBaseUrl._imgBaseUrl;
        localStorage.setItem('section', 'brand');
        var loggedUserId = JSON.parse(localStorage.getItem('currentUser'));
        this.route.params.subscribe(function (params) {
            if (params.order_no) {
                _this.order_no = params.order_no;
                _this._orderService.getById({ order_no: params.order_no, loggedUserId: loggedUserId.success.id, loggedUserRole: loggedUserId.success.role }).subscribe(function (data) {
                    console.log('cart_data');
                    console.log(data);
                    _this.orderDatas = data;
                    _this.orderData.amt = data[0].amt;
                    _this.orderData.billing_address_1 = data[0].billing_address_1;
                    _this.orderData.billing_address_2 = data[0].billing_address_2;
                    _this.orderData.billing_city = data[0].billing_city;
                    _this.orderData.billing_company = data[0].billing_company;
                    _this.orderData.billing_country_code = data[0].billing_country_code;
                    _this.orderData.billing_email = data[0].billing_email;
                    _this.orderData.billing_first_name = data[0].billing_first_name;
                    _this.orderData.billing_last_name = data[0].billing_last_name;
                    _this.orderData.billing_phone = data[0].billing_phone;
                    _this.orderData.billing_postcode = data[0].billing_postcode;
                    _this.orderData.cancelled_status = data[0].cancelled_status;
                    _this.orderData.country_name = data[0].country_name;
                    _this.orderData.created_date = data[0].created_date;
                    _this.orderData.deliver_date = data[0].deliver_date;
                    _this.orderData.f_name = data[0].f_name;
                    _this.orderData.fk_address_id = data[0].fk_address_id;
                    _this.orderData.fk_billing_country = data[0].fk_billing_country;
                    _this.orderData.fk_customer_id = data[0].fk_customer_id;
                    _this.orderData.fk_payment_type = data[0].fk_payment_type;
                    _this.orderData.fk_shipping_country = data[0].fk_shipping_country;
                    _this.orderData.l_name = data[0].l_name;
                    _this.orderData.order_date = data[0].order_date;
                    _this.orderData.order_no = data[0].order_no;
                    _this.orderData.payment_date = data[0].payment_date;
                    _this.orderData.payment_status = data[0].payment_status;
                    _this.orderData.pk_address_id = data[0].pk_address_id;
                    _this.orderData.pk_order_id = data[0].pk_order_id;
                    _this.orderData.product_attributes = data[0].product_attributes;
                    _this.orderData.product_img = data[0].product_img;
                    _this.orderData.product_name = data[0].product_name;
                    _this.orderData.product_price = data[0].product_price;
                    _this.orderData.quantity = data[0].quantity;
                    _this.orderData.refund_status = data[0].refund_status;
                    _this.orderData.ship_to_different_address = data[0].ship_to_different_address;
                    _this.orderData.shipping_address_1 = data[0].shipping_address_1;
                    _this.orderData.shipping_address_2 = data[0].shipping_address_2;
                    _this.orderData.shipping_city = data[0].shipping_city;
                    _this.orderData.shipping_company = data[0].shipping_company;
                    _this.orderData.shipping_country_code = data[0].shipping_country_code;
                    _this.orderData.shipping_email = data[0].shipping_email;
                    _this.orderData.shipping_first_name = data[0].shipping_first_name;
                    _this.orderData.shipping_last_name = data[0].shipping_last_name;
                    _this.orderData.shipping_phone = data[0].shipping_phone;
                    _this.orderData.shipping_postcode = data[0].shipping_postcode;
                    _this.orderData.slug = data[0].slug;
                    _this.orderData.total_amount = data[0].total_amount;
                    _this.orderData.transaction_id = data[0].transaction_id;
                    _this.orderData.totalQuantity = data.length;
                    _this.shippingValue = data[0].shipping_status;
                    console.log('brand data', _this.orderData);
                });
            }
        });
        this.form = this.formBuilder.group({
            id: [null],
            name: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required],
            brand_img: [null],
            old_brand_logo: [null],
            status: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_2__["Validators"].required]
        });
    };
    OrderSummaryComponent.prototype.isFieldValid = function (field) {
        return ((!this.form.get(field).valid && this.form.get(field).touched) ||
            (this.form.get(field).untouched && this.formSumitAttempt));
    };
    OrderSummaryComponent.prototype.displayFieldCss = function (field) {
        return {
            'has-error': this.isFieldValid(field),
            'has-feedback': this.isFieldValid(field)
        };
    };
    OrderSummaryComponent.prototype.shipping_status = function (event) {
        var _this = this;
        this._orderService.shippingStatus({ shipping_status: event, order_id: this.orderData.pk_order_id }).subscribe(function (data) {
            console.log('brand data', data);
            _this.toastr.success('Shipping Status Updated Successfully', 'Success Message');
        });
    };
    OrderSummaryComponent.prototype.printToCart = function (printSectionId) {
        var innerContents = document.getElementById(printSectionId).innerHTML;
        var popupWinindow = window.open('', '_blank', 'width=600,height=700,scrollbars=no,menubar=no,toolbar=no,location=no,status=no,titlebar=no');
        popupWinindow.document.open();
        popupWinindow.document.write('<html><head><link rel="stylesheet" type="text/css" href="style.css" /></head><body onload="window.print()">' + innerContents + '</html>');
        popupWinindow.document.close();
    };
    OrderSummaryComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-order-summary',
            template: __webpack_require__(/*! ./order-summary.component.html */ "./src/app/theme/pages/default/order/order-summary/order-summary.component.html"),
            styles: []
        }),
        __metadata("design:paramtypes", [_services_script_loader_service__WEBPACK_IMPORTED_MODULE_6__["ScriptLoaderService"], ngx_toastr__WEBPACK_IMPORTED_MODULE_5__["ToastrService"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["ActivatedRoute"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["Router"], _auth_services_order_service__WEBPACK_IMPORTED_MODULE_1__["OrderService"], _services_data_service__WEBPACK_IMPORTED_MODULE_3__["DataService"], _angular_forms__WEBPACK_IMPORTED_MODULE_2__["FormBuilder"]])
    ], OrderSummaryComponent);
    return OrderSummaryComponent;
}());



/***/ }),

/***/ "./src/app/theme/pages/default/order/order-summary/order-summary.module.ts":
/*!*********************************************************************************!*\
  !*** ./src/app/theme/pages/default/order/order-summary/order-summary.module.ts ***!
  \*********************************************************************************/
/*! exports provided: OrderSummaryModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "OrderSummaryModule", function() { return OrderSummaryModule; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/esm5/common.js");
/* harmony import */ var _order_summary_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./order-summary.component */ "./src/app/theme/pages/default/order/order-summary/order-summary.component.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/esm5/router.js");
/* harmony import */ var _layouts_layout_module__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../../../layouts/layout.module */ "./src/app/theme/layouts/layout.module.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/esm5/forms.js");
/* harmony import */ var _default_default_component__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../../default/default.component */ "./src/app/theme/pages/default/default.component.ts");
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
        component: _default_default_component__WEBPACK_IMPORTED_MODULE_6__["DefaultComponent"],
        children: [
            {
                path: "",
                component: _order_summary_component__WEBPACK_IMPORTED_MODULE_2__["OrderSummaryComponent"]
            }
        ]
    },
];
var OrderSummaryModule = /** @class */ (function () {
    function OrderSummaryModule() {
    }
    OrderSummaryModule = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_1__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_3__["RouterModule"].forChild(routes),
                _layouts_layout_module__WEBPACK_IMPORTED_MODULE_4__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_5__["FormsModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_5__["ReactiveFormsModule"], ngx_pagination__WEBPACK_IMPORTED_MODULE_7__["NgxPaginationModule"],
            ],
            declarations: [_order_summary_component__WEBPACK_IMPORTED_MODULE_2__["OrderSummaryComponent"]]
        })
    ], OrderSummaryModule);
    return OrderSummaryModule;
}());



/***/ })

}]);
//# sourceMappingURL=pages-default-order-order-summary-order-summary-module.js.map