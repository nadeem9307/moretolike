(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-color-color-list-color-list-module"],{

/***/ "./src/app/theme/pages/default/color/color-list/color-list.component.html":
/*!********************************************************************************!*\
  !*** ./src/app/theme/pages/default/color/color-list/color-list.component.html ***!
  \********************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "\n<div>\n\t<div class=\"m-portlet m-portlet--mobile\">\n\t\t<div class=\"m-portlet__body\">\n\t\t\t<div class=\"col-lg-12\">\n\t\t\t\t<div class=\"m-portlet\">\n\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\">\n\t\t\t\t\t\t\t\t\t<i class=\"la la-gear\"></i>\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">\n\t\t\t\t\t\t\t\tAdd Color\n\t\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\n\n\t\t\t\t\t\n\t\t\t\t\t<form class=\"m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed\" [formGroup] =\"form\" enctype=\"multipart/form-data\">\n\t\t\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\" >\n\t\t\t\t\t\t\t\t<div class=\"col-lg-4\" [ngClass]=\"displayFieldCss('color_code')\">\n\t\t\t\t\t\t\t\t\t<label for =\"['form_data']\" class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\tColor:\n\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t<input type=\"color\" style=\"width: 70px; height: 25px\"  id=\"color_code\" formControlName=\"color_code\">\n\n\t\t\t\t\t\t\t\t\t <app-field-error-display [displayError]=\"isFieldValid('color_code')\" errorMsg=\"Please Enter Color Code\">\n     \t\t\t\t\t\t\t\t</app-field-error-display>\n\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t<div class=\"col-lg-4\" [ngClass]=\"displayFieldCss('color_name')\">\n\t\t\t\t\t\t\t\t\t<label for =\"['form_data']\" class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\tColor Name:\n\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input\"\n\t\t\t\t\t\t\t\t\t placeholder=\"Enter Name\" type=\"text\" id=\"color_name\" formControlName=\"color_name\">\n\t\t\t\t\t\t\t\t\t <app-field-error-display [displayError]=\"isFieldValid('color_name')\" errorMsg=\"Please Enter Color Name\">\n     \t\t\t\t\t\t\t\t</app-field-error-display>\n\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t<div class=\"col-lg-4\" [ngClass]=\"displayFieldCss('status')\">\n\n\t\t\t\t\t\t\t\t\t<label for =\"status\" class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\tStatus:\n\t\t\t\t\t\t\t\t\t</label>\n\n\t\t\t\t\t\t\t\t\t<select class=\"form-control\" formControlName=\"status\" [(ngModel)] = \"selectedStatus\">\n\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select Status</option>\n\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Active</option>\n\t\t\t\t\t\t\t\t\t\t<option value=\"0\">Inactive</option>\n\n\t\t\t\t\t\t\t\t\t</select>\n\t\t\t\t\t\t\t\t\t <app-field-error-display [displayError]=\"isFieldValid('status')\" errorMsg=\"Please Select Status\">\n     \t\t\t\t\t\t\t\t</app-field-error-display>\n\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\" >\n\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">\n\t\t\t\t\t\t\t\t\t<label for =\"status\" class=\"control-label required\">Product Image:</label>\n\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"file\" (change)=\"handleFileInput($event.target.files)\">\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t</div> <!-- /form-body  -->\n\t\t\t\t\t\t<div class=\"m-portlet__foot m-portlet__no-border m-portlet__foot--fit\">\n\t\t\t\t\t\t\t<div class=\"m-form__actions m-form__actions--solid\">\n\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">\n\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success\" (click)=\"onSubmit()\">\n\t\t\t\t\t\t\t\t\t\t\tSave\n\t\t\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger\" (click)=\"reset()\">\n\t\t\t\t\t\t\t\t\t\t\tReset\n\t\t\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</form>\t\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n\t</div>\n</div>\n\n\n<div class=\"m-portlet m-portlet--mobile\">\n\t\t<div class=\"m-portlet__body\">\n\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\"><i class=\"la la-gear\"></i></span>\n\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">List Color</h3>\n\n\t\t\t\t\t\t<!-- <button  style=\"margin-left:725px;margin-top:15px;\" class=\"btn btn-warning\" type=\"button\" routerLink=\"/color/add-color\">\n\t\t\t\t\t\t\tAdd Color\n\t\t\t\t\t\t</button> -->\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\n\t\t\t<div class=\"m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30\">\n\t\t\t\t<div class=\"row align-items-center\">\n\t\t\t\t\t<div class=\"col-xl-12 order-2 order-xl-1\">\n\t\t\t\t\t\t<div class=\"form-group m-form__group row align-items-center\">\n\n\t\t\t\t\t\t\t<!-- <div class=\"col-md-4\">\n\t\t\t\t\t\t\t\t<div class=\"m-form__group m-form__group--inline\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__label\">\n\t\t\t\t\t\t\t\t\t\t<label class=\"m-label m-label--single\">\n\t\t\t\t\t\t\t\t\t\t\tStaus:\n\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__control\">\n\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" [(ngModel)] = \"dropDownValue\" name=\"search_value\" (change)=\"search();\">\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">All</option>\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"Active\">Active</option>\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"Inactive\">Inactive</option>\n\t\t\t\t\t\t\t\t\t\t</select>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"d-md-none m--margin-bottom-10\"></div>\n\t\t\t\t\t\t\t</div> -->\n\n\t\t\t\t\t\t\t<!-- <div class=\"col-md-4\">\n\t\t\t\t\t\t\t\t<div class=\"m-input-icon m-input-icon--left\">\n\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input  m-input--solid\" id=\"generalSearch\" [(ngModel)] = \"searchValue\" placeholder=\"Search by Name\" type=\"text\" name=\"search_value\">\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div> -->\n\n\t\t\t\t\t\t<!-- \t<div class=\"col-md-4\">\n\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill\"(click)=\"search();\">\n\t\t\t\t\t\t\t\t\t\t<span>Search</span>\n\t\t\t\t\t\t\t\t</button>\n\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<div class=\"m-separator m-separator--dashed d-xl-none\"></div>\n\t\t\t\t\t\t\t</div>  -->\n\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t\t\t\t\n\t\t\t<div class=\"m_datatable m-datatable m-datatable--default m-datatable--loaded\" id=\"local_data\" style=\"position: static; zoom: 1;\">\n\t\t\t\t<table class=\"m-datatable__table\" style=\"display: block; min-height: 300px; overflow-x: auto;\">\n\n\t\t\t\t\t<thead class=\"m-datatable__head\">\n\n\t\t\t\t\t\t<tr class=\"m-datatable__row\" style=\"left: 0px;\">\n\n\t\t\t\t\t\t\t<th data-field=\"ShipName\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\"><span style=\"width: 110px;\">Color Name</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"ShipName\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\"><span style=\"width: 110px;\">Color Code</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t<th data-field=\"Status\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Status</span>\n\t\t\t\t\t\t\t</th>\n\n\n\t\t\t\t\t\t\t<!-- <th data-field=\"Actions\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Actions</span>\n\t\t\t\t\t\t\t</th> -->\n\n\t\t\t\t\t\t</tr>\n\n\t\t\t\t\t</thead>\n\n\t\t\t\t\t<tbody class=\"m-datatable__body\" style=\"\">\n\n\t\t\t\t\t\t<tr data-row=\"0\" *ngFor=\"let color of colorData | paginate: { itemsPerPage: 10, currentPage: p }\" class=\"m-datatable__row\" style=\"left: 0px;\">\n\n\t\t\t\t\t\t\t\t<td data-field=\"Currency\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 100px;\">{{color.color_name}}</span>\n\t\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t\t\t<td data-field=\"Currency\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 100px;\">{{color.color_code}}</span>\n\t\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<td data-field=\"Status\"  class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\" (click) = \"changeStatus(color)\">\n\t\t\t\t\t\t\t\t\t\t<span class=\"m-badge--wide m-badge\" [ngClass]=\"{'m-badge--success':  color.status == 'Active', 'm-badge--danger':  color.status != 'Active'}\" >{{color.status}}\n\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<!-- <td data-field=\"Actions\" class=\"m-datatable__cell\">\n\n\t\t\t\t\t\t\t\t\t<span style=\"overflow: visible; position: relative; width: 110px;\">\n  \t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill\" title=\"Delete\" (click)=\"vendor_delete(color.id)\"> \n\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-trash\"></i>  \n\t\t\t\t\t\t\t\t\t\t</a>\n\n\t\t\t\t\t\t\t\t\t</span>\t\n\t\t\t\t\t\t\t\t</td> -->\n\t\t\t\t\t\t\t</tr>\n\n\t\t\t\t\t\t</tbody>\n\n\t\t\t\t\t</table>\n\n\t\t\t\t\t<pagination-controls (pageChange)=\"p = $event\"></pagination-controls>\n\t\n\t\t\t\t</div>\n\t\t</div>\n</div>"

/***/ }),

/***/ "./src/app/theme/pages/default/color/color-list/color-list.component.ts":
/*!******************************************************************************!*\
  !*** ./src/app/theme/pages/default/color/color-list/color-list.component.ts ***!
  \******************************************************************************/
/*! exports provided: ColorListComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ColorListComponent", function() { return ColorListComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _auth_services_product_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../../../../auth/_services/product.service */ "./src/app/auth/_services/product.service.ts");
/* harmony import */ var _services_data_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../_services/data.service */ "./src/app/_services/data.service.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/esm5/forms.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/esm5/router.js");
/* harmony import */ var ngx_toastr__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ngx-toastr */ "./node_modules/ngx-toastr/fesm5/ngx-toastr.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


// import { SideBarService } from '../../../../layouts/side-bar/side-bar.service';
// import { SideBarToggleComponent } from '../../../../layouts/side-bar-toggle/side-bar-toggle.component';




var ColorListComponent = /** @class */ (function () {
    function ColorListComponent(toastr, router, route, formBuilder, _dataService, _productService) {
        this.toastr = toastr;
        this.router = router;
        this.route = route;
        this.formBuilder = formBuilder;
        this._dataService = _dataService;
        this._productService = _productService;
        this.noOfPage = '';
        this.searchValue = "";
        this.dropDownValue = '';
        this.attributeData = '';
        this.selectedStatus = '';
        this.p = 1;
    }
    ColorListComponent.prototype.ngOnInit = function () {
        var _this = this;
        /*user permission*/
        var currentUser = JSON.parse(localStorage.getItem('currentUser'));
        var permission = currentUser.success.permission;
        if (permission.product_color != 1) {
            this.toastr.error('You have not permission to visit this page.', 'Error Message');
            this.router.navigate(['/']);
        }
        /*user permission*/
        this.form = this.formBuilder.group({
            color_name: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_3__["Validators"].required],
            color_code: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_3__["Validators"].required],
            status: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_3__["Validators"].required]
        });
        this.currentUser = JSON.parse(localStorage.getItem('currentUser'));
        var user_id;
        user_id = this.currentUser.success.id;
        this.route.params.subscribe(function (params) {
            if (params.product_id) {
                _this._productService.getColor(params.product_id).subscribe(function (data) {
                    console.log(data.success);
                    _this.colorData = data.success;
                    _this.noOfPage = data.success.length;
                    console.log('getColor', data.success);
                });
            }
        });
    };
    ColorListComponent.prototype.onSubmit = function () {
        var _this = this;
        this.formSumitAttempt = true;
        this.route.params.subscribe(function (params) {
            if (params.id) {
                _this.product_id = params.id;
                if (_this.form.valid && _this.productImgUrl) {
                    _this.form.value.product_img = _this.productImgUrl;
                    _this._productService.addColor({ form_data: _this.form.value, fk_user_id: _this.currentUser.success.id, fk_product_id: parseInt(_this.product_id) }).subscribe(function (data) {
                        //this.attributeData = data.success;
                        console.log(data);
                        _this.toastr.success('Product Color Added Successfully', 'Success Message');
                        _this.attributeData = data.data;
                        // that.form.c;
                        _this.reset();
                        _this._productService.getColor(params.id).subscribe(function (data) {
                            //  console.log(user_id);
                            _this.colorData = data.success;
                            _this.noOfPage = data.success.length;
                        });
                    });
                }
            }
        });
    };
    ColorListComponent.prototype.handleFileInput = function (files) {
        var _this = this;
        var file = files.item(0);
        var reader = new FileReader();
        reader.onload = function (event) {
            _this.productImgUrl = event.target.result;
        };
        reader.readAsDataURL(file);
    };
    ColorListComponent.prototype.isFieldValid = function (field) {
        return (
        //console.log('this.form.get',this.form.get(field));
        (!this.form.get(field).valid && this.form.get(field).touched) ||
            (this.form.get(field).untouched && this.formSumitAttempt));
    };
    ColorListComponent.prototype.displayFieldCss = function (field) {
        return {
            'has-error': this.isFieldValid(field),
            'has-feedback': this.isFieldValid(field)
        };
    };
    ColorListComponent.prototype.reset = function () {
        if (this.selectedStatus != '') {
            this.form.reset();
            this.selectedStatus = '';
            this.formSumitAttempt = false;
        }
    };
    ColorListComponent.prototype.search = function () {
        var _this = this;
        this.formSumitAttempt = true;
        this._productService.colorSearching({
            search_value: this.searchValue, dropdown_value: this.dropDownValue, user_id: this.currentUser.success.id
        }).subscribe(function (data) {
            _this.colorData = data.success;
        });
    };
    ColorListComponent.prototype.vendor_delete = function (del_id) {
        //  console.log(del_id);
        var value = confirm('Are you want to delete this vendor ?');
        // console.log(value);
        if (value) {
        }
    };
    ColorListComponent.prototype.changeStatus = function (user) {
        console.log(user.status);
        if (user.status == 'Active') {
            user.status = 'Inactive';
            this._productService.updateColorStatus(user.id).subscribe(function (data) {
                console.log('update', data);
            });
        }
        else {
            user.status = 'Active';
            this._productService.updateColorStatus(user.id).subscribe(function (data) {
                console.log('update', data);
            });
        }
    };
    ColorListComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-color-list',
            template: __webpack_require__(/*! ./color-list.component.html */ "./src/app/theme/pages/default/color/color-list/color-list.component.html"),
            styles: []
        }),
        __metadata("design:paramtypes", [ngx_toastr__WEBPACK_IMPORTED_MODULE_5__["ToastrService"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["Router"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["ActivatedRoute"], _angular_forms__WEBPACK_IMPORTED_MODULE_3__["FormBuilder"], _services_data_service__WEBPACK_IMPORTED_MODULE_2__["DataService"], _auth_services_product_service__WEBPACK_IMPORTED_MODULE_1__["ProductService"]])
    ], ColorListComponent);
    return ColorListComponent;
}());



/***/ }),

/***/ "./src/app/theme/pages/default/color/color-list/color-list.module.ts":
/*!***************************************************************************!*\
  !*** ./src/app/theme/pages/default/color/color-list/color-list.module.ts ***!
  \***************************************************************************/
/*! exports provided: ColorListModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ColorListModule", function() { return ColorListModule; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/esm5/common.js");
/* harmony import */ var _default_default_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../default/default.component */ "./src/app/theme/pages/default/default.component.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/esm5/router.js");
/* harmony import */ var _layouts_layout_module__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../../../layouts/layout.module */ "./src/app/theme/layouts/layout.module.ts");
/* harmony import */ var _color_list_color_list_component__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../color-list/color-list.component */ "./src/app/theme/pages/default/color/color-list/color-list.component.ts");
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
        component: _default_default_component__WEBPACK_IMPORTED_MODULE_2__["DefaultComponent"],
        children: [
            {
                path: "",
                component: _color_list_color_list_component__WEBPACK_IMPORTED_MODULE_5__["ColorListComponent"]
            }
        ]
    },
];
var ColorListModule = /** @class */ (function () {
    function ColorListModule() {
    }
    ColorListModule = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_1__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_3__["RouterModule"].forChild(routes),
                _layouts_layout_module__WEBPACK_IMPORTED_MODULE_4__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_6__["FormsModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_6__["ReactiveFormsModule"], ngx_pagination__WEBPACK_IMPORTED_MODULE_7__["NgxPaginationModule"],
            ],
            declarations: [_color_list_color_list_component__WEBPACK_IMPORTED_MODULE_5__["ColorListComponent"]],
        })
    ], ColorListModule);
    return ColorListModule;
}());



/***/ })

}]);
//# sourceMappingURL=pages-default-color-color-list-color-list-module.js.map