(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-brand-brand-edit-brand-edit-module"],{

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/brand/brand-edit/brand-edit.component.html":
/*!**********************************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/pages/default/brand/brand-edit/brand-edit.component.html ***!
  \**********************************************************************************************************/
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
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _auth_services_brand_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../auth/_services/brand.service */ "./src/app/auth/_services/brand.service.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm2015/forms.js");
/* harmony import */ var _services_data_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../../../../_services/data.service */ "./src/app/_services/data.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var ngx_toastr__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ngx-toastr */ "./node_modules/ngx-toastr/fesm2015/ngx-toastr.js");







let BrandEditComponent = class BrandEditComponent {
    constructor(toastr, route, router, _brandService, _dataService, formBuilder) {
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
    ngOnInit() {
        // this.notificationsService.addInfo('Brand Added Successfully');
        /*user permission*/
        let currentUser = JSON.parse(localStorage.getItem('currentUser'));
        let permission = currentUser.success.permission;
        if (permission.product_brand != 1) {
            this.toastr.error('You have not permission to visit this page.', 'Error Message');
            this.router.navigate(['/']);
        }
        /*user permission*/
        this._dataService.setloaderState(false);
        this._dataService.setactiveMenu('brand');
        localStorage.setItem('section', 'brand');
        this.route.params.subscribe(params => {
            if (params.brand_id) {
                this.brand_id = params.brand_id;
                this._brandService.getById(params.brand_id).subscribe(data => {
                    console.log('brand data', data.success);
                    this.id = data.success.id;
                    this.name = data.success.name;
                    this.old_brand_logo = data.success.brand_img;
                    this.selectedStatus = data.success.status;
                });
            }
        });
        this.form = this.formBuilder.group({
            id: [null],
            name: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_3__["Validators"].required],
            brand_img: [null],
            old_brand_logo: [null],
            status: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_3__["Validators"].required]
        });
    }
    isFieldValid(field) {
        return ((!this.form.get(field).valid && this.form.get(field).touched) ||
            (this.form.get(field).untouched && this.formSumitAttempt));
    }
    displayFieldCss(field) {
        return {
            'has-error': this.isFieldValid(field),
            'has-feedback': this.isFieldValid(field)
        };
    }
    handleFileInput(files) {
        let file = files.item(0);
        var reader = new FileReader();
        reader.onload = (event) => {
            this.brandImgUrl = event.target.result;
        };
        reader.readAsDataURL(file);
    }
    onSubmit() {
        let input;
        this.formSumitAttempt = true;
        if (this.form.valid) {
            let that = this;
            input = { form_data: this.form.value };
            input.form_data.brand_img = this.brandImgUrl;
            this._brandService.updateBrand(input).subscribe(data => {
                this.brandData = data.data;
                this.toastr.success('Brand Updated Successfully', 'Success Message');
                this.reset();
                this.router.navigate(['/brand/brand-list']);
            });
        }
    }
    hideMsg() {
        setTimeout(function () {
            this.dataSaved = false;
        }.bind(this), 4000);
    }
    reset() {
        if (this.selectedStatus != '') {
            this.form.reset();
            this.selectedStatus = '';
            this.formSumitAttempt = false;
        }
    }
};
BrandEditComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-brand-edit',
        template: __webpack_require__(/*! raw-loader!./brand-edit.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/brand/brand-edit/brand-edit.component.html")
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [ngx_toastr__WEBPACK_IMPORTED_MODULE_6__["ToastrService"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["ActivatedRoute"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["Router"], _auth_services_brand_service__WEBPACK_IMPORTED_MODULE_2__["BrandService"], _services_data_service__WEBPACK_IMPORTED_MODULE_4__["DataService"], _angular_forms__WEBPACK_IMPORTED_MODULE_3__["FormBuilder"]])
], BrandEditComponent);



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
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/fesm2015/common.js");
/* harmony import */ var _brand_edit_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./brand-edit.component */ "./src/app/theme/pages/default/brand/brand-edit/brand-edit.component.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var _layouts_layout_module__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../../../layouts/layout.module */ "./src/app/theme/layouts/layout.module.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm2015/forms.js");
/* harmony import */ var _default_default_component__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../../../default/default.component */ "./src/app/theme/pages/default/default.component.ts");
/* harmony import */ var ngx_pagination__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ngx-pagination */ "./node_modules/ngx-pagination/dist/ngx-pagination.js");









const routes = [
    {
        path: "",
        component: _default_default_component__WEBPACK_IMPORTED_MODULE_7__["DefaultComponent"],
        children: [
            {
                path: "",
                component: _brand_edit_component__WEBPACK_IMPORTED_MODULE_3__["BrandEditComponent"]
            }
        ]
    },
];
let BrandEditModule = class BrandEditModule {
};
BrandEditModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        imports: [
            _angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["RouterModule"].forChild(routes),
            _layouts_layout_module__WEBPACK_IMPORTED_MODULE_5__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_6__["FormsModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_6__["ReactiveFormsModule"], ngx_pagination__WEBPACK_IMPORTED_MODULE_8__["NgxPaginationModule"],
        ],
        declarations: [_brand_edit_component__WEBPACK_IMPORTED_MODULE_3__["BrandEditComponent"]]
    })
], BrandEditModule);



/***/ })

}]);
//# sourceMappingURL=pages-default-brand-brand-edit-brand-edit-module-es2015.js.map