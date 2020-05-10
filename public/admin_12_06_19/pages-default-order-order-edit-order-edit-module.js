(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-order-order-edit-order-edit-module"],{

/***/ "./src/app/theme/pages/default/order/order-edit/order-edit.component.html":
/*!********************************************************************************!*\
  !*** ./src/app/theme/pages/default/order/order-edit/order-edit.component.html ***!
  \********************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "\n<div class=\"m-portlet m-portlet--mobile\">\n\t\t<div class=\"m-portlet__body\">\n\n\t\t\t<div class=\"row\">\n\t\t\t\t<div class=\"col-md-6\">\n\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\"><i class=\"la la-gear\"></i></span>\n\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">Order Details </h3>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\n\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t<div class=\"col-md-12\">\n\t\t\t\t\t\t\t<span><label class=\"od-label\"> Order Number:</label> {{orderData.order_no}}</span><br>\n\t\t\t\t\t\t\t<span><label class=\"od-label\"> Order Date:</label> {{orderData.order_date}}</span><br>\n\t\t\t\t\t\t\t<span><label class=\"od-label\"> total Amount:</label> {{orderData.total_amount}}</span><br>\n\t\t\t\t\t\t\t<span *ngIf=\"orderData.payment_status =='p'\"><label class=\"od-label\"> Payment Status:</label> Pending</span>\n\t\t\t\t\t\t\t<span  *ngIf=\"orderData.payment_status =='s'\"><label class=\"od-label\"> Payment Status:</label> Successfull</span>\n\t\t\t\t\t\t\t<span *ngIf=\"orderData.payment_status =='f'\"><label class=\"od-label\"> Payment Status:</label> Failure</span><br>\n\t\t\t\t\t\t\t<span><label class=\"od-label\"> Transaction ID:</label> {{orderData.transaction_id}}</span><br>\n\t\t\t\t\t\t\t<span><label class=\"od-label\"> Payment Type:</label> {{orderData.fk_payment_type}}</span><br>\n\t\t\t\t\t\t\t<span *ngIf=\"orderData.cancelled_status == 'n'\"><label class=\"od-label\"> Order Status:</label> Confirmed</span>\n\t\t\t\t\t\t\t<span *ngIf=\"orderData.cancelled_status == 'y'\"><label class=\"od-label\" > Order Status:</label> Cancelled</span>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\n\t\t\t\t<div class=\"col-md-6\">\n\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\"><i class=\"la la-gear\"></i></span>\n\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">Customer Detail </h3>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\n\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t<div class=\"col-md-12\">\n\t\t\t\t\t\t<span><label class=\"od-label\"> First Name:</label> {{orderData.f_name}}</span><br>\n\t\t\t\t\t\t<span><label class=\"od-label\"> Last Name:</label> {{orderData.l_name}}</span><br>\n\t\t\t\t\t\t<span><label class=\"od-label\"> Billing Address:</label> {{orderData.billing_address_1}},{{orderData.billing_city}},{{orderData.country_name}},{{orderData.billing_postcode}}</span><br>\n\t\t\t\t\t\t<span><label class=\"od-label\"> Phone Number:</label> {{orderData.billing_phone}}</span><br>\n\t\t\t\t\t\n\t\t\t\t\t\t<span><label class=\"od-label\"> Shipping Address:</label> {{orderData.shipping_address_1}},{{orderData.shipping_city}},{{orderData.country_name}},{{orderData.shipping_postcode}}</span><br>\n\t\t\t\t\t\t<span><label class=\"od-label\"> Phone Number:</label> {{orderData.shipping_phone}}</span><br>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t\t\n\n\t\t\t\n\t\t\t\t\t\n\t\t\t<div class=\"m_datatable m-datatable m-datatable--default m-datatable--loaded\" id=\"local_data\" style=\"position: static; zoom: 1;\">\n\t\t\t\t\n\t\t\t</div>\n\t\t\t<div class=\"m_datatable m-datatable m-datatable--default m-datatable--loaded\" id=\"local_data\" style=\"position: static; zoom: 1;\">\n\t\t\t\n\t\t\t</div>\n\t\t</div>\n</div>\n\n\n<div class=\"m-portlet m-portlet--mobile\">\n\n\t\t<div class=\"m-portlet__body\">\n\n\n\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\"><i class=\"la la-gear\"></i></span>\n\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">Ordered Product Detail </h3>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\n\t\t\t<div class=\"row  prod-details\" *ngFor=\"let od of orderDatas\">\n\t\t\t\t<div class=\"col-md-2\">\n\t\t\t\t<span><img src=\"{{ImgUrl}}75X75_{{od.product_img}}\" ></span><br>\n\t\t\t</div>\n\t\t\t<div class=\"col-md-4\">\n\t\t\t\t<span>{{od.sku}}</span><br>\n\t\t\t\t<span>{{od.slug}}</span><br>\n\t\t\t\t<span>{{od.product_name}}</span><br>\n\t\t\t</div>\n\t\t\t<div class=\"col-md-4\">\n\t\t\t\t<span><label>Price: </label> {{od.product_price}}</span><br>\n\t\t\t\t<span><label>Quantity: </label> {{od.quantity}}</span><br>\n\t\t\t\t<span *ngIf=\"od.refund_status == 'y'\">Refund</span><br>\n\t\t\t\t</div>\n\t\t\t\t<div class=\"col-md-2\">\n\t\t\t\t\t\n\t\t\t\t<span ><label> Shipping Status:</label>\n\t\t\t\t\t<select class=\"form-control\" [(ngModel)] = \"od.shipping_status\" (change)=\"shipping_status($event.target.value);\">\n\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"p\">Pending</option>\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"d\">Delivered</option>\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"d\">On Hold</option>\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"d\">Processing</option>\n\t\t\t\t\t</select>\n\t\t\t\t</span>\n\n\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t<div class=\"m_datatable m-datatable m-datatable--default m-datatable--loaded\" id=\"local_data\" style=\"position: static; zoom: 1;\">\n\t\t\t\t</div>\n\t\t</div>\n</div>\n"

/***/ }),

/***/ "./src/app/theme/pages/default/order/order-edit/order-edit.component.ts":
/*!******************************************************************************!*\
  !*** ./src/app/theme/pages/default/order/order-edit/order-edit.component.ts ***!
  \******************************************************************************/
/*! exports provided: OrderEditComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "OrderEditComponent", function() { return OrderEditComponent; });
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







var OrderEditComponent = /** @class */ (function () {
    function OrderEditComponent(imgBaseUrl, toastr, route, router, _orderService, _dataService, formBuilder) {
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
    OrderEditComponent.prototype.ngOnInit = function () {
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
    OrderEditComponent.prototype.isFieldValid = function (field) {
        return ((!this.form.get(field).valid && this.form.get(field).touched) ||
            (this.form.get(field).untouched && this.formSumitAttempt));
    };
    OrderEditComponent.prototype.displayFieldCss = function (field) {
        return {
            'has-error': this.isFieldValid(field),
            'has-feedback': this.isFieldValid(field)
        };
    };
    OrderEditComponent.prototype.shipping_status = function (event) {
        var _this = this;
        this._orderService.shippingStatus({ shipping_status: event, order_id: this.orderData.pk_order_id }).subscribe(function (data) {
            console.log('brand data', data);
            _this.toastr.success('Shipping Status Updated Successfully', 'Success Message');
        });
    };
    OrderEditComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-order-edit',
            template: __webpack_require__(/*! ./order-edit.component.html */ "./src/app/theme/pages/default/order/order-edit/order-edit.component.html"),
            styles: []
        }),
        __metadata("design:paramtypes", [_services_script_loader_service__WEBPACK_IMPORTED_MODULE_6__["ScriptLoaderService"], ngx_toastr__WEBPACK_IMPORTED_MODULE_5__["ToastrService"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["ActivatedRoute"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["Router"], _auth_services_order_service__WEBPACK_IMPORTED_MODULE_1__["OrderService"], _services_data_service__WEBPACK_IMPORTED_MODULE_3__["DataService"], _angular_forms__WEBPACK_IMPORTED_MODULE_2__["FormBuilder"]])
    ], OrderEditComponent);
    return OrderEditComponent;
}());



/***/ }),

/***/ "./src/app/theme/pages/default/order/order-edit/order-edit.module.ts":
/*!***************************************************************************!*\
  !*** ./src/app/theme/pages/default/order/order-edit/order-edit.module.ts ***!
  \***************************************************************************/
/*! exports provided: OrderEditModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "OrderEditModule", function() { return OrderEditModule; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/esm5/common.js");
/* harmony import */ var _order_edit_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./order-edit.component */ "./src/app/theme/pages/default/order/order-edit/order-edit.component.ts");
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
                component: _order_edit_component__WEBPACK_IMPORTED_MODULE_2__["OrderEditComponent"]
            }
        ]
    },
];
var OrderEditModule = /** @class */ (function () {
    function OrderEditModule() {
    }
    OrderEditModule = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_1__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_3__["RouterModule"].forChild(routes),
                _layouts_layout_module__WEBPACK_IMPORTED_MODULE_4__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_5__["FormsModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_5__["ReactiveFormsModule"], ngx_pagination__WEBPACK_IMPORTED_MODULE_7__["NgxPaginationModule"],
            ],
            declarations: [_order_edit_component__WEBPACK_IMPORTED_MODULE_2__["OrderEditComponent"]]
        })
    ], OrderEditModule);
    return OrderEditModule;
}());



/***/ })

}]);
//# sourceMappingURL=pages-default-order-order-edit-order-edit-module.js.map