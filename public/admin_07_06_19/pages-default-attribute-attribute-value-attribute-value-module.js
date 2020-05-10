(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-attribute-attribute-value-attribute-value-module"],{

/***/ "./src/app/theme/pages/default/attribute/attribute-value/attribute-value.component.html":
/*!**********************************************************************************************!*\
  !*** ./src/app/theme/pages/default/attribute/attribute-value/attribute-value.component.html ***!
  \**********************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "\n\t<div class=\"form-group m-form__group row\" >\n\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-portlet\">\n\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet m-portlet--mobile\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\"><i class=\"la la-gear\"></i></span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">{{form_title}}</h3>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <button class=\"btn btn-warning\" type=\"button\" style=\"margin-left:725px;margin-top:15px;\" routerLink=\"/attribute/add-attribute\">Add Attribute</button> -->\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<form class=\"m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed\" [formGroup] =\"form\">\n\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" formControlName=\"id\" value = \"{{id}}\" [(ngModel)] = \"id\">\n\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" formControlName=\"item_id\" [(ngModel)] = \"item_id\">\n\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" formControlName=\"index_val\" [(ngModel)] = \"index_val\">\n\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group m-form__group row align-items-center\" >\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label  for =\"Sub-Category\" class=\"control-label required\">Attribute Value\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Attribute Name\" formControlName=\"item_text\" [(ngModel)] = \"item_text\" required >\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group m-form__group row align-items-center\" >\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success\" (click)=\"onSubmitAddAttr()\">{{btn_text}}</button>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div> \n\t\t\t\t\t\t\t\t\t\t\t\t\t\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t</form>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet m-portlet--mobile\">\n\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\"><i class=\"la la-gear\"></i></span>\n\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">List Attributes</h3>\n\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t<!-- <button class=\"btn btn-warning\" type=\"button\" style=\"margin-left:725px;margin-top:15px;\" routerLink=\"/attribute/add-attribute\">Add Attribute</button> -->\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\n\t\t\t\t<div class=\"m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30\">\n\t\t\t\t\t<div class=\"row align-items-center\">\n\t\t\t\t\t\t<div class=\"col-xl-12 order-2 order-xl-1\">\n\t\t\t\t\t\t\t<div class=\"form-group m-form__group row align-items-center\">\n\n\t\t\t\t\t\t\t\t<!--div class=\"col-md-4\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__group m-form__group--inline\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-form__label\">\n\t\t\t\t\t\t\t\t\t\t\t<label class=\"m-label m-label--single\">\n\t\t\t\t\t\t\t\t\t\t\t\tStaus:\n\t\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-form__control\">\n\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" [(ngModel)] = \"dropDownValue\" name=\"search_value\" (change)=\"attrSearch();\">\n\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">All</option>\n\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Active\">Active</option>\n\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Inactive\">Inactive</option>\n\t\t\t\t\t\t\t\t\t\t\t</select>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"d-md-none m--margin-bottom-10\"></div>\n\t\t\t\t\t\t\t\t</div-->\n\n\t\t\t\t\t\t\t\t<div class=\"col-md-6\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-input-icon m-input-icon--left\">\n\t\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input  m-input--solid\" [(ngModel)]=\"filterValue\" placeholder=\"Search by Name\" type=\"text\" name=\"filterValue\" (keyup)=\"filterByValue()\">\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t<!--div class=\"col-md-6\">\n\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill\"(click)=\"attrSearch();\">\n\t\t\t\t\t\t\t\t\t\t\t<span>Search</span>\n\t\t\t\t\t\t\t\t\t</button>\n\n\t\t\t\t\t\t\t\t\t\t<!-- <button class=\"btn btn-danger m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill\" (click)=\"reset()\">\n\t\t\t\t\t\t\t\t\t\t\t\tReset\n\t\t\t\t\t\t\t\t\t\t\t</button> -->\n\t\t\t\t\t\t\t\t\t<!--div class=\"m-separator m-separator--dashed d-xl-none\"></div>\n\t\t\t\t\t\t\t\t</div--> \n\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t\t\t\t\n\t\t\t\t<div class=\"m_datatable m-datatable m-datatable--default m-datatable--loaded\" id=\"local_data\" style=\"position: static; zoom: 1;\">\n\t\t\t\t\t<table class=\"m-datatable__table\" style=\"display: block; min-height: 300px; overflow-x: auto;\">\n\n\t\t\t\t\t\t<thead class=\"m-datatable__head\">\n\n\t\t\t\t\t\t\t<tr class=\"m-datatable__row\" style=\"left: 0px;\">\n\n\t\t\t\t\t\t\t\t<th data-field=\"ShipName\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\"><span style=\"width: 110px;\">Attribute Name</span>\n\t\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t\t\n\n\t\t\t\t\t\t\t\t<th data-field=\"Actions\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Actions</span>\n\t\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t</tr>\n\n\t\t\t\t\t\t</thead>\n\n\t\t\t\t\t\t<tbody class=\"m-datatable__body\" style=\"\">\n\n\t\t\t\t\t\t\t<tr data-row=\"0\" *ngFor=\"let attr of attrData | paginate: { itemsPerPage: 10, currentPage: p }; let i = index\" [attr.data-index]=\"i\" class=\"m-datatable__row\" style=\"left: 0px;\">\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t<td data-field=\"Currency\" class=\"m-datatable__cell\" >\n\t\t\t\t\t\t\t\t\t\t<span style=\"width: 100px;\">{{attr.item_text}}</span>\n\t\t\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t\t\t\t<td data-field=\"Status\" class=\"m-datatable__cell\" >\n\n\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill\" title=\"Edit\" (click)=\"getAttrValByIndex(i)\"> \n\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-edit\"></i>  \n\t\t\t\t\t\t\t\t\t\t</a> \n\n\t\t\t\t\t\t\t\t\t\t<button class=\"m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill\" title=\"Remove\" (click)=\"deleteAttributeValue(i)\"> \n\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-remove\"></i>  \n\t\t\t\t\t\t\t\t\t\t</button> \n\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t</td>\n\n\t\t\t\t\t\t\t\t</tr>\n\n\t\t\t\t\t\t\t</tbody>\n\n\t\t\t\t\t\t</table>\n\n\t\t\t\t\t\t<pagination-controls (pageChange)=\"p = $event\"></pagination-controls>\n\t\t\n\t\t\t\t\t</div>\n\t\t\t</div>\n\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t"

/***/ }),

/***/ "./src/app/theme/pages/default/attribute/attribute-value/attribute-value.component.ts":
/*!********************************************************************************************!*\
  !*** ./src/app/theme/pages/default/attribute/attribute-value/attribute-value.component.ts ***!
  \********************************************************************************************/
/*! exports provided: AttributeValueComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AttributeValueComponent", function() { return AttributeValueComponent; });
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






var AttributeValueComponent = /** @class */ (function () {
    function AttributeValueComponent(toastr, route, router, formBuilder, _dataService, _productService) {
        this.toastr = toastr;
        this.route = route;
        this.router = router;
        this.formBuilder = formBuilder;
        this._dataService = _dataService;
        this._productService = _productService;
        this.attributeData = '';
        this.user_id = '';
        this.item_id = 0;
        this.noOfPage = 0;
        this.attrVal = '';
        this.filterValue = '';
        this.btn_text = 'Save';
        this.form_title = 'Add New';
        this.id = 0;
        this.att_id = 0;
        this.index_val = 0;
        this.p = 1;
    }
    AttributeValueComponent.prototype.ngOnInit = function () {
        var _this = this;
        this.form = this.formBuilder.group({
            id: [null],
            index_val: [null],
            item_id: [null],
            item_text: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_3__["Validators"].required],
        });
        this.currentUser = JSON.parse(localStorage.getItem('currentUser'));
        this.user_id = this.currentUser.success.id;
        this.route.params.subscribe(function (params) {
            if (params.att_id) {
                _this.id = params.att_id;
                _this.att_id = params.att_id;
                _this.getAttrByID(_this.id);
            }
        });
    };
    AttributeValueComponent.prototype.onSubmitAddAttr = function () {
        var _this = this;
        this.formSumitAttempt = true;
        var input;
        input = { form_data: this.form.value };
        console.log(input.form_data.id);
        if (this.form.valid) {
            if (input.form_data.item_id == null || input.form_data.item_id == 0) {
                this._productService.addAttributeValue(input).subscribe(function (data) {
                    //this.attributeData = data.success;
                    _this.toastr.success('Attribute Value Added Successfully', 'Success Message');
                    // that.form.c;
                    _this.getAttrByID(_this.id);
                    _this.reset();
                });
            }
            else {
                this._productService.updateAttributeValue(input).subscribe(function (data) {
                    //this.attributeData = data.success;
                    _this.toastr.success('Attribute Value Updated Successfully', 'Success Message');
                    _this.getAttrByID(_this.id);
                    _this.reset();
                    _this.btn_text = "Add";
                    _this.form_title = "Add New";
                });
            }
        }
    };
    AttributeValueComponent.prototype.getAttrByID = function (att_id) {
        var _this = this;
        this._productService.getAttributeListsById(att_id).subscribe(function (data) {
            _this.attrData = JSON.parse(data.success.data);
            _this.noOfPage = _this.attrData.length;
        });
    };
    AttributeValueComponent.prototype.getAttrValByIndex = function (index_val) {
        var _this = this;
        this._productService.getAttrValByIndex(this.id, index_val).subscribe(function (data) {
            if (data.success.item_text) {
                _this.index_val = index_val;
                _this.item_id = data.success.item_id;
                _this.item_text = data.success.item_text;
                _this.btn_text = 'Update';
                _this.form_title = 'Update';
            }
        });
    };
    AttributeValueComponent.prototype.deleteAttributeValue = function (index_val) {
        var _this = this;
        var value = confirm('Are you want to delete this attribute value ?');
        if (value) {
            this._productService.deleteAttributeValue(this.id, index_val).subscribe(function (data) {
                _this.toastr.success('Attribute Value Deleted Successfully', 'Success Message');
                _this._productService.getAttributes().subscribe(function (data) {
                    _this.attrData = data.success;
                    _this.getAttrByID(_this.id);
                });
            });
        }
    };
    AttributeValueComponent.prototype.reset = function () {
        // if (this.selectedStatus != '') {
        this.form.reset({ id: this.id });
        this.formSumitAttempt = false;
        // }
    };
    AttributeValueComponent.prototype.filterByValue = function () {
        var _this = this;
        var attr_value_data = [];
        if (this.filterValue == '') {
            this.attrData = this.filterDataHolder;
        }
        else {
            if (this.filterDataHolder == undefined) {
                this.filterDataHolder = this.attrData;
            }
            else {
                this.attrData = this.filterDataHolder;
            }
            this.attrData.forEach(function (obj) {
                //console.log(obj);
                if (obj.item_text != '' && obj.item_text != null && obj.item_text != undefined) {
                    if (obj.item_text.replace(/<[^>]*>/g, "").toUpperCase().indexOf(_this.filterValue.toUpperCase()) > -1) {
                        attr_value_data.push(obj);
                    }
                }
            });
            this.attrData = attr_value_data;
        }
    };
    AttributeValueComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-attribute-value',
            template: __webpack_require__(/*! ./attribute-value.component.html */ "./src/app/theme/pages/default/attribute/attribute-value/attribute-value.component.html"),
            styles: []
        }),
        __metadata("design:paramtypes", [ngx_toastr__WEBPACK_IMPORTED_MODULE_5__["ToastrService"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["ActivatedRoute"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["Router"], _angular_forms__WEBPACK_IMPORTED_MODULE_3__["FormBuilder"], _services_data_service__WEBPACK_IMPORTED_MODULE_2__["DataService"], _auth_services_product_service__WEBPACK_IMPORTED_MODULE_1__["ProductService"]])
    ], AttributeValueComponent);
    return AttributeValueComponent;
}());



/***/ }),

/***/ "./src/app/theme/pages/default/attribute/attribute-value/attribute-value.module.ts":
/*!*****************************************************************************************!*\
  !*** ./src/app/theme/pages/default/attribute/attribute-value/attribute-value.module.ts ***!
  \*****************************************************************************************/
/*! exports provided: AttributeValueModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AttributeValueModule", function() { return AttributeValueModule; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/esm5/common.js");
/* harmony import */ var _default_default_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../default/default.component */ "./src/app/theme/pages/default/default.component.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/esm5/router.js");
/* harmony import */ var _layouts_layout_module__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../../../layouts/layout.module */ "./src/app/theme/layouts/layout.module.ts");
/* harmony import */ var _attribute_value_attribute_value_component__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../attribute-value/attribute-value.component */ "./src/app/theme/pages/default/attribute/attribute-value/attribute-value.component.ts");
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
                component: _attribute_value_attribute_value_component__WEBPACK_IMPORTED_MODULE_5__["AttributeValueComponent"]
            }
        ]
    },
];
var AttributeValueModule = /** @class */ (function () {
    function AttributeValueModule() {
    }
    AttributeValueModule = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_1__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_3__["RouterModule"].forChild(routes),
                _layouts_layout_module__WEBPACK_IMPORTED_MODULE_4__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_6__["FormsModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_6__["ReactiveFormsModule"], ngx_pagination__WEBPACK_IMPORTED_MODULE_7__["NgxPaginationModule"],
            ],
            declarations: [_attribute_value_attribute_value_component__WEBPACK_IMPORTED_MODULE_5__["AttributeValueComponent"]],
        })
    ], AttributeValueModule);
    return AttributeValueModule;
}());



/***/ })

}]);
//# sourceMappingURL=pages-default-attribute-attribute-value-attribute-value-module.js.map