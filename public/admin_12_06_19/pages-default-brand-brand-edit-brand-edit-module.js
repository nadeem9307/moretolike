(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-brand-brand-edit-brand-edit-module"],{

/***/ "./src/app/theme/pages/default/brand/brand-edit/brand-edit.component.html":
/*!********************************************************************************!*\
  !*** ./src/app/theme/pages/default/brand/brand-edit/brand-edit.component.html ***!
  \********************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "\t\n\n<div class=\"m-portlet m-portlet--mobile\">\n\t\t<div class=\"m-portlet__body\">\n\t\t\t<div class=\"col-lg-12\">\n\t\t\t\t<div class=\"m-portlet\">\n\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\">\n\t\t\t\t\t\t\t\t\t<i class=\"la la-gear\"></i>\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">\n\t\t\t\t\t\t\t\tEdit Brand \n\t\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t\t\t<!-- <span *ngIf=\"dataSaved\">{{saveMsg}}</span> -->\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t\n\t\t\t\t\t<form class=\"m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed\" [formGroup] =\"form\" enctype=\"multipart/form-data\">\n\t\t\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\" >\n\t\t\t\t\t\t\t\t\t\n\n\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"hidden\" formControlName=\"id\" [(ngModel)]=\"id\" placeholder=\"Enter Brand Name\">\n\n\t\t\t\t\t\t\t\t<div class=\"col-lg-3\">\n\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t<label for =\"name\" class=\"control-label required\">Brand Name:</label>\n\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" formControlName=\"name\" [(ngModel)]=\"name\" placeholder=\"Enter Brand Name\">\n\n\t\t\t\t\t\t\t\t\t<app-field-error-display \n\t\t\t\t\t\t\t\t\t[displayError]=\"isFieldValid('name')\" errorMsg=\"Please Enter Brand Name\">\n\t     \t\t\t\t\t\t\t</app-field-error-display> \n\t     \t\t\t\t\t\t\t \n\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t<div class=\"col-lg-3\">\n\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t<label for =\"name\" class=\"control-label required\">Brand Logo:</label>\n\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"file\" formControlName=\"brand_img\" (change)=\"handleFileInput($event.target.files)\">\n\n\n\t     \t\t\t\t\t\t\t<input class=\"form-control\" type=\"hidden\" formControlName=\"old_brand_logo\" [(ngModel)]=\"old_brand_logo\" >\n\n\n\n\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<div class=\"col-lg-3\" [ngClass]=\"displayFieldCss('status')\">\n\n\t\t\t\t\t\t\t\t\t<label for =\"status\" class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\tStatus:\n\t\t\t\t\t\t\t\t\t</label>\n\n\t\t\t\t\t\t\t\t\t<select class=\"form-control\" formControlName=\"status\" [(ngModel)] ='selectedStatus'>\n\t\t\t\t\t\t\t\t\t\t<option value=\"\" >Select Status</option>\n\t\t\t\t\t\t\t\t\t\t<option value=\"Active\">Active</option>\n\t\t\t\t\t\t\t\t\t\t<option value=\"Inactive\">Inactive</option>\n\n\t\t\t\t\t\t\t\t\t</select>\n\t\t\t\t\t\t\t\t\t <app-field-error-display [displayError]=\"isFieldValid('status')\" errorMsg=\"Please Select Status\">\n     \t\t\t\t\t\t\t\t</app-field-error-display>\n\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t</div> \n\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-portlet__foot m-portlet__no-border m-portlet__foot--fit\">\n\t\t\t\t\t\t\t<div class=\"m-form__actions m-form__actions--solid\">\n\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">\n\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success\" (click)=\"onSubmit()\">\n\t\t\t\t\t\t\t\t\t\t\tUpdate\n\t\t\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger\" (click)=\"reset()\">\n\t\t\t\t\t\t\t\t\t\t\tReset\n\t\t\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</form>   \n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n</div>\n"

/***/ }),

/***/ "./src/app/theme/pages/default/brand/brand-edit/brand-edit.component.ts":
/*!******************************************************************************!*\
  !*** ./src/app/theme/pages/default/brand/brand-edit/brand-edit.component.ts ***!
  \******************************************************************************/
/*! exports provided: BrandEditComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "BrandEditComponent", function() { return BrandEditComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _auth_services_brand_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../../../../auth/_services/brand.service */ "./src/app/auth/_services/brand.service.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/esm5/forms.js");
/* harmony import */ var _services_data_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../../_services/data.service */ "./src/app/_services/data.service.ts");
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






var BrandEditComponent = /** @class */ (function () {
    function BrandEditComponent(toastr, route, router, _brandService, _dataService, formBuilder) {
        this.toastr = toastr;
        this.route = route;
        this.router = router;
        this._brandService = _brandService;
        this._dataService = _dataService;
        this.formBuilder = formBuilder;
        this.searchValue = '';
        this.dropDownValue = '';
        this.selectedStatus = '';
        this.dataSaved = false;
        this.saveMsg = '';
        this.brand_id = '';
        this.p = 1;
        this.id = '';
        this.name = '';
        this.old_brand_logo = '';
    }
    BrandEditComponent.prototype.ngOnInit = function () {
        // this.notificationsService.addInfo('Brand Added Successfully');
        var _this = this;
        /*user permission*/
        var currentUser = JSON.parse(localStorage.getItem('currentUser'));
        var permission = currentUser.success.permission;
        if (permission.product_brand != 1) {
            this.toastr.error('You have not permission to visit this page.', 'Error Message');
            this.router.navigate(['/']);
        }
        /*user permission*/
        this._dataService.setloaderState(false);
        this._dataService.setactiveMenu('brand');
        localStorage.setItem('section', 'brand');
        this.route.params.subscribe(function (params) {
            if (params.brand_id) {
                _this.brand_id = params.brand_id;
                _this._brandService.getById(params.brand_id).subscribe(function (data) {
                    console.log('brand data', data.success);
                    _this.id = data.success.id;
                    _this.name = data.success.name;
                    _this.old_brand_logo = data.success.brand_img;
                    _this.selectedStatus = data.success.status;
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
    BrandEditComponent.prototype.isFieldValid = function (field) {
        return ((!this.form.get(field).valid && this.form.get(field).touched) ||
            (this.form.get(field).untouched && this.formSumitAttempt));
    };
    BrandEditComponent.prototype.displayFieldCss = function (field) {
        return {
            'has-error': this.isFieldValid(field),
            'has-feedback': this.isFieldValid(field)
        };
    };
    BrandEditComponent.prototype.handleFileInput = function (files) {
        var _this = this;
        var file = files.item(0);
        var reader = new FileReader();
        reader.onload = function (event) {
            _this.brandImgUrl = event.target.result;
        };
        reader.readAsDataURL(file);
    };
    BrandEditComponent.prototype.onSubmit = function () {
        var _this = this;
        var input;
        this.formSumitAttempt = true;
        if (this.form.valid) {
            var that = this;
            input = { form_data: this.form.value };
            input.form_data.brand_img = this.brandImgUrl;
            this._brandService.updateBrand(input).subscribe(function (data) {
                _this.brandData = data.data;
                _this.toastr.success('Brand Updated Successfully', 'Success Message');
                _this.reset();
                _this.router.navigate(['/brand/brand-list']);
            });
        }
    };
    BrandEditComponent.prototype.hideMsg = function () {
        setTimeout(function () {
            this.dataSaved = false;
        }.bind(this), 4000);
    };
    BrandEditComponent.prototype.reset = function () {
        if (this.selectedStatus != '') {
            this.form.reset();
            this.selectedStatus = '';
            this.formSumitAttempt = false;
        }
    };
    BrandEditComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-brand-edit',
            template: __webpack_require__(/*! ./brand-edit.component.html */ "./src/app/theme/pages/default/brand/brand-edit/brand-edit.component.html"),
            styles: []
        }),
        __metadata("design:paramtypes", [ngx_toastr__WEBPACK_IMPORTED_MODULE_5__["ToastrService"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["ActivatedRoute"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["Router"], _auth_services_brand_service__WEBPACK_IMPORTED_MODULE_1__["BrandService"], _services_data_service__WEBPACK_IMPORTED_MODULE_3__["DataService"], _angular_forms__WEBPACK_IMPORTED_MODULE_2__["FormBuilder"]])
    ], BrandEditComponent);
    return BrandEditComponent;
}());



/***/ }),

/***/ "./src/app/theme/pages/default/brand/brand-edit/brand-edit.module.ts":
/*!***************************************************************************!*\
  !*** ./src/app/theme/pages/default/brand/brand-edit/brand-edit.module.ts ***!
  \***************************************************************************/
/*! exports provided: BrandEditModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "BrandEditModule", function() { return BrandEditModule; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/esm5/common.js");
/* harmony import */ var _brand_edit_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./brand-edit.component */ "./src/app/theme/pages/default/brand/brand-edit/brand-edit.component.ts");
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
                component: _brand_edit_component__WEBPACK_IMPORTED_MODULE_2__["BrandEditComponent"]
            }
        ]
    },
];
var BrandEditModule = /** @class */ (function () {
    function BrandEditModule() {
    }
    BrandEditModule = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_1__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_3__["RouterModule"].forChild(routes),
                _layouts_layout_module__WEBPACK_IMPORTED_MODULE_4__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_5__["FormsModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_5__["ReactiveFormsModule"], ngx_pagination__WEBPACK_IMPORTED_MODULE_7__["NgxPaginationModule"],
            ],
            declarations: [_brand_edit_component__WEBPACK_IMPORTED_MODULE_2__["BrandEditComponent"]]
        })
    ], BrandEditModule);
    return BrandEditModule;
}());



/***/ })

}]);
//# sourceMappingURL=pages-default-brand-brand-edit-brand-edit-module.js.map