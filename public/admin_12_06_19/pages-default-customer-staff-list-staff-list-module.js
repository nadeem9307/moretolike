(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-customer-staff-list-staff-list-module"],{

/***/ "./src/app/theme/pages/default/customer/staff-list/staff-list.component.html":
/*!***********************************************************************************!*\
  !*** ./src/app/theme/pages/default/customer/staff-list/staff-list.component.html ***!
  \***********************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"m-portlet m-portlet--mobile\">\n\t\t<div class=\"m-portlet__body\">\n\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\"><i class=\"la la-gear\"></i></span>\n\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">Staffs</h3>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t\t<div class=\"col-md-3\" style=\"float: right;\">\n\t\t\t\t\t<div class=\"form-group m-form__group\">\n\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#m_modal_6\">Add New Staff</button>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t\t<div class=\"m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30\">\n\t\t\t\t<div class=\"row align-items-center\">\n\t\t\t\t\t<div class=\"col-xl-12 order-2 order-xl-1\">\n\t\t\t\t\t\t<div class=\"form-group m-form__group row align-items-center\">\n\n\t\t\t\t\t\t\t<div class=\"col-md-4\">\n\t\t\t\t\t\t\t\t<div class=\"m-form__group m-form__group--inline\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__label\">\n\t\t\t\t\t\t\t\t\t\t<label class=\"m-label m-label--single\">\n\t\t\t\t\t\t\t\t\t\t\tStaus:\n\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__control\">\n\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"search_value\" [(ngModel)] = \"dropDownValue\" (change)=\"search()\">\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">All</option>\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"Active\">Active</option>\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"Inactive\">Inactive</option>\n\t\t\t\t\t\t\t\t\t\t</select>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"d-md-none m--margin-bottom-10\"></div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"col-md-6\">\n\t\t\t\t\t\t\t\t<div class=\"m-input-icon m-input-icon--left\">\n\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input m-input--solid\" id=\"generalSearch\" [(ngModel)] = \"searchValue\" placeholder=\"Search by Name / Email / Contact NO\" type=\"text\" name=\"search_value\">\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\n\n\t\t\t\t\t\t\t<div class=\"col-md-2\">\n\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill\" (click)=\"search()\">\n\t\t\t\t\t\t\t\t\t<span>\n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-search\"></i>\n\t\t\t\t\t\t\t\t\t\t<span>\n\t\t\t\t\t\t\t\t\t\t\tSearch\n\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t\t<div class=\"m-separator m-separator--dashed d-xl-none\"></div>\n\t\t\t\t\t\t\t</div> \n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t\t<!--end::Modal-->  <!-- Modal -->\n\t<div class=\"modal fade\" id=\"m_modal_6\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">\n\t\t<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">\n\t\t\t<div class=\"modal-content\">\n\t\t\t\t<div class=\"modal-header\">\n\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">\n\t\t\t\t\t\tAdd New Staff\n\t\t\t\t\t</h5>\n\t\t\t\t</div>\n\t\t\t\t\t<div class=\"modal-body\">\n\t\t\t\t\t\t<form [formGroup] =\"form\">\n\t\t\t\t\t\t\t<div class=\"form-group\">\n\t\t\t\t\t\t\t\t<label for=\"f-name\" class=\"form-control-label\">\n\t\t\t\t\t\t\t\t\tFirst Name:\n\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" formControlName=\"f_name\" id=\"f-name\">\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"form-group\">\n\t\t\t\t\t\t\t\t<label for=\"l-name\" class=\"form-control-label\">\n\t\t\t\t\t\t\t\t\tLast Name:\n\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" formControlName=\"l_name\" id=\"l-name\">\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"form-group\">\n\t\t\t\t\t\t\t\t<label for=\"email\" class=\"form-control-label\">\n\t\t\t\t\t\t\t\t\tEmail:\n\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" formControlName=\"email\" id=\"email\">\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"form-group\">\n\t\t\t\t\t\t\t\t<label for=\"contact_no\" class=\"form-control-label\">\n\t\t\t\t\t\t\t\t\tContact Number:\n\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" formControlName=\"contact_no\" id=\"contact_no\">\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" (click)=\"onSubmit()\" data-dismiss=\"modal\">\n\t\t\t\t\t\t\t\tSubmit\n\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t<button type=\"reset\" class=\"btn btn-secondary\" >\n\t\t\t\t\t\t\t\tReset\n\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t</form>\n\t\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n\t</div>\n\t\t\t\t\t\n\t\t\t<div class=\"m_datatable m-datatable m-datatable--default m-datatable--loaded\" id=\"local_data\" style=\"position: static; zoom: 1;\">\n\t\t\t\t<table class=\"m-datatable__table\" style=\"display: block; min-height: 300px; overflow-x: auto;\">\n\t\t\t\t\t<thead class=\"m-datatable__head\">\n\t\t\t\t\t\t<tr class=\"m-datatable__row\" style=\"left: 0px;\">\n\n\t\t\t\t\t\t\t<!-- <th data-field=\"ShipName\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\"><span style=\"width: 110px;\">Customer ID</span>\n\t\t\t\t\t\t\t</th> -->\n\t\t\t\t\t\t\t<!-- <th data-field=\"ShipName\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\"><span style=\"width: 110px;\">id</span>\n\t\t\t\t\t\t\t</th> -->\n\n\t\t\t\t\t\t\t<th data-field=\"ShipAddress\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\"><span style=\"width: 110px;\">Name</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"ShipDate\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Email</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"Status\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Contact No</span>\n\t\t\t\t\t\t\t</th>\n\n\n\t\t\t\t\t\t\t<th data-field=\"Actions\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Registered Date</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"Actions\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Actions</span>\n\t\t\t\t\t\t\t</th>\n\t\t\t\t\t\t</tr>\n\t\t\t\t\t</thead>\n\t\t\t\t\t<tbody class=\"m-datatable__body\" style=\"\">\n\t\t\t\t\t\t<tr data-row=\"0\" *ngFor=\"let staff of staffData | paginate: { itemsPerPage: 10, currentPage: p }\"  class=\"m-datatable__row\" style=\"left: 0px;\">\n\n\n\t\t\t\t\t\t\t\t<!-- <td data-field=\"ShipName\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\">{{base64_encode(staff.id)}}</span>\n\t\t\t\t\t\t\t\t</td> -->\n\t\t\t\t\t\t\t\t<!-- <td data-field=\"ShipName\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\">{{staff.id}}</span>\n\t\t\t\t\t\t\t\t</td> -->\n\t\t\t\t\t\t\t\t<td data-field=\"Currency\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 130px;\">{{staff.f_name}} {{staff.l_name}}</span>\n\t\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t\t\t<td data-field=\"ShipAddress\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\">{{staff.email}}</span>\n\t\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t\t\t<!-- <td data-field=\"ShipDate\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\">{{staff.customer_name}}</span>\n\t\t\t\t\t\t\t\t</td> -->\n\t\t\t\t\t\t\t\t<td data-field=\"Latitude\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\">{{staff.contact_no}}</span>\n\t\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t\t\t<td data-field=\"Latitude\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\">{{staff.created_date}}</span>\n\t\t\t\t\t\t\t\t</td>\n\n\t\t\t\t\t\t\t\t<!-- <td data-field=\"Status\"  class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span  style=\"width: 110px;\" (click) = \"changeStatus(staff)\">\n\t\t\t\t\t\t\t\t\t\t<span class=\"m-badge--wide m-badge\" [ngClass]=\"{'m-badge--success':  customer.status == '0', 'm-badge--danger':  staff.status != '1'}\" title=\"Status\">{{staff.status==0 ? 'Active' : 'Deactive'}}\n\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</td> -->\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<td data-field=\"Actions\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"overflow: visible; position: relative; width: 110px;\">\t\n\t\t\t\t\t\t\t\t\t\t<!-- <a href=\"#\" class=\"m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill\" title=\"View\" routerLink=\"/customer/support-details/{{staff.id}}\"> \n\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-eye\"></i>  \n\t\t\t\t\t\t\t\t\t\t</a> -->\n\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill\" title=\"Edit\"> \n\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-edit\" data-toggle=\"modal\" data-target=\"#edit_staff\" (click)=\"onEdit(staff.id)\"></i>  \n\t\t\t\t\t\t\t\t\t\t</a> \n\t\t\t\t\t\t\t\t\t\t<!--end::Modal-->  <!-- Modal -->\n\t<div class=\"modal fade\" id=\"edit_staff\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">\n\t\t<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">\n\t\t\t<div class=\"modal-content\">\n\t\t\t\t<div class=\"modal-header\">\n\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">\n\t\t\t\t\t\tUpdate Staff\n\t\t\t\t\t</h5>\n\t\t\t\t</div>\n\t\t\t\t\t<div class=\"modal-body\">\n\t\t\t\t\t\t<form [formGroup] =\"form1\">\n\t\t\t\t\t\t\t<div class=\"form-group\">\n\t\t\t\t\t\t\t\t<label for=\"f-name\" class=\"form-control-label\">\n\t\t\t\t\t\t\t\t\tFirst Name:\n\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t<input type=\"text\" value=\"{{staffDataByid?.f_name}}\" class=\"form-control\" formControlName=\"f_name\" id=\"f-name\">\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"form-group\">\n\t\t\t\t\t\t\t\t<label for=\"l-name\" class=\"form-control-label\">\n\t\t\t\t\t\t\t\t\tLast Name:\n\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t<input type=\"text\" value=\"{{staffDataByid?.l_name}}\" class=\"form-control\" formControlName=\"l_name\" id=\"l-name\">\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"form-group\">\n\t\t\t\t\t\t\t\t<label for=\"email\" class=\"form-control-label\">\n\t\t\t\t\t\t\t\t\tEmail:\n\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t<input type=\"text\" value=\"{{staffDataByid?.email}}\" class=\"form-control\" formControlName=\"email\" id=\"email\">\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"form-group\">\n\t\t\t\t\t\t\t\t<label for=\"contact_no\" class=\"form-control-label\">\n\t\t\t\t\t\t\t\t\tContact Number:\n\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t<input type=\"text\" value=\"{{staffDataByid?.contact_no}}\" class=\"form-control\" formControlName=\"contact_no\" id=\"contact_no\">\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" (click)=\"onUpdate()\" data-dismiss=\"modal\">\n\t\t\t\t\t\t\t\tSubmit\n\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t<button type=\"reset\" class=\"btn btn-secondary\" >\n\t\t\t\t\t\t\t\tReset\n\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t</form>\n\t\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n\t</div>\n\n\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill\" title=\"permission\" routerLink=\"/customer/staff-list/staff-permission/{{staff.id}}\"> \n\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-tasks\"></i>  \n\t\t\t\t\t\t\t\t\t\t</a> \n\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill\" title=\"Delete\" (click)=\"staff_delete(staff.id)\"> \n\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-trash\"></i>  \n\t\t\t\t\t\t\t\t\t\t</a>\n\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t</tr>\n\t\t\t\t\t\t</tbody>\n\t\t\t\t\t</table>\n\t\t\t\t\t <pagination-controls (pageChange)=\"p = $event\"></pagination-controls> \n\t\t\t\n\t\t</div>\n\t</div>"

/***/ }),

/***/ "./src/app/theme/pages/default/customer/staff-list/staff-list.component.ts":
/*!*********************************************************************************!*\
  !*** ./src/app/theme/pages/default/customer/staff-list/staff-list.component.ts ***!
  \*********************************************************************************/
/*! exports provided: StaffListComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "StaffListComponent", function() { return StaffListComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _auth_services_staff_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../../../../auth/_services/staff.service */ "./src/app/auth/_services/staff.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/esm5/router.js");
/* harmony import */ var ngx_toastr__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ngx-toastr */ "./node_modules/ngx-toastr/fesm5/ngx-toastr.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/esm5/forms.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};





var StaffListComponent = /** @class */ (function () {
    function StaffListComponent(_staffService, toastr, router, formBuilder) {
        this._staffService = _staffService;
        this.toastr = toastr;
        this.router = router;
        this.formBuilder = formBuilder;
        this.searchValue = "";
        this.dropDownValue = '';
        this.p = 1;
    }
    StaffListComponent.prototype.ngOnInit = function () {
        /*user permission*/
        var currentUser = JSON.parse(localStorage.getItem('currentUser'));
        var permission = currentUser.success.permission;
        if (permission.support_list != 1) {
            this.toastr.error('You have not permission to visit this page.', 'Error Message');
            this.router.navigate(['/']);
        }
        this.form = this.formBuilder.group({
            f_name: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            l_name: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            email: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            contact_no: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
        });
        this.form1 = this.formBuilder.group({
            id: null,
            f_name: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            l_name: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            email: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            contact_no: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
        });
        /*user permission*/
        // localStorage.setItem('section', 'customer');
        this.getAll();
    };
    StaffListComponent.prototype.getAll = function () {
        var _this = this;
        this._staffService.getAll().subscribe(function (data) {
            //console.log(data);
            _this.staffData = data.success;
        });
    };
    StaffListComponent.prototype.onSubmit = function () {
        var _this = this;
        var input;
        this.formSubmitAttempt = true;
        if (this.form.valid) {
            input = this.form.value;
            console.log(input);
            this._staffService.create(input).subscribe(function (data) {
                _this.toastr.success('Staff Added Successfully', 'Success Message');
                _this.reset();
                _this.getAll();
            }, function (error) {
                console.log(error);
                console.log('error');
            });
        }
    };
    StaffListComponent.prototype.reset = function () {
        this.form.reset();
    };
    StaffListComponent.prototype.staff_delete = function (del_id) {
        var _this = this;
        console.log(del_id);
        var value = confirm('Are you sure to delete this staff request?');
        if (value) {
            this._staffService.del_staff(del_id).subscribe(function (data) {
                console.log(data);
                _this.getAll();
                _this.toastr.success('Staff deleted Successfully', 'Success Message');
                //this.customerData = data.data;
            });
        }
    };
    StaffListComponent.prototype.onEdit = function (staff_id) {
        var _this = this;
        this._staffService.getById(staff_id).subscribe(function (data) {
            _this.staffDataByid = data.success;
            _this.staff_id = staff_id;
        });
    };
    StaffListComponent.prototype.onUpdate = function () {
        var _this = this;
        var input;
        this.formSubmitAttempt = true;
        if (this.form1.valid) {
            input = this.form1.value;
            /*console.log(input);
            console.log(this.staff_id);*/
            this._staffService.update(input, this.staff_id).subscribe(function (data) {
                _this.toastr.success('Staff updated Successfully', 'Success Message');
                _this.reset();
                _this.getAll();
            }, function (error) {
                console.log(error);
                console.log('error');
            });
        }
    };
    StaffListComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-staff-list',
            template: __webpack_require__(/*! ./staff-list.component.html */ "./src/app/theme/pages/default/customer/staff-list/staff-list.component.html"),
            styles: [],
            providers: [_auth_services_staff_service__WEBPACK_IMPORTED_MODULE_1__["StaffService"]]
        }),
        __metadata("design:paramtypes", [_auth_services_staff_service__WEBPACK_IMPORTED_MODULE_1__["StaffService"], ngx_toastr__WEBPACK_IMPORTED_MODULE_3__["ToastrService"], _angular_router__WEBPACK_IMPORTED_MODULE_2__["Router"], _angular_forms__WEBPACK_IMPORTED_MODULE_4__["FormBuilder"]])
    ], StaffListComponent);
    return StaffListComponent;
}());



/***/ }),

/***/ "./src/app/theme/pages/default/customer/staff-list/staff-list.module.ts":
/*!******************************************************************************!*\
  !*** ./src/app/theme/pages/default/customer/staff-list/staff-list.module.ts ***!
  \******************************************************************************/
/*! exports provided: StaffListModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "StaffListModule", function() { return StaffListModule; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/esm5/common.js");
/* harmony import */ var _staff_list_staff_list_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../staff-list/staff-list.component */ "./src/app/theme/pages/default/customer/staff-list/staff-list.component.ts");
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
                component: _staff_list_staff_list_component__WEBPACK_IMPORTED_MODULE_2__["StaffListComponent"]
            }
        ]
    },
];
var StaffListModule = /** @class */ (function () {
    function StaffListModule() {
    }
    StaffListModule = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_1__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["RouterModule"].forChild(routes),
                _layouts_layout_module__WEBPACK_IMPORTED_MODULE_5__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_6__["FormsModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_6__["ReactiveFormsModule"], ngx_pagination__WEBPACK_IMPORTED_MODULE_7__["NgxPaginationModule"],
            ],
            declarations: [_staff_list_staff_list_component__WEBPACK_IMPORTED_MODULE_2__["StaffListComponent"]]
        })
    ], StaffListModule);
    return StaffListModule;
}());



/***/ })

}]);
//# sourceMappingURL=pages-default-customer-staff-list-staff-list-module.js.map