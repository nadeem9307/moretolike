(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-product-bulk-upload-bulk-upload-module"],{

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/product/bulk-upload/bulk-upload.component.html":
/*!**************************************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/pages/default/product/bulk-upload/bulk-upload.component.html ***!
  \**************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"m-portlet m-portlet--mobile\">\n\t\t<div class=\"m-portlet__body\">\n\t\t\t<div class=\"col-lg-12\">\n\t\t\t\t<div class=\"m-portlet\">\n\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\">\n\t\t\t\t\t\t\t\t\t<i class=\"la la-gear\"></i>\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">Add Product (CSV Upload)</h3>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t\n\t\t\t\t <form class=\"m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed\" [formGroup] =\"form\">\n\t\t\t\t\t\t<div class=\"m-portlet__body\">\n\n\n\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\" >\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">\n\t\t\t\t\t\t\t\t\t<p style=\"color: red\"> This is an important functionality it can change history. Sample File <a target=\"_blank\" href=\"https://www.moretolike.com/uploads/product_sample.csv\">Download file</a></p>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-lg-4\" [ngClass]=\"displayFieldCss('csv_file')\">\n\t\t\t\t\t\t\t\t\t<label for =\"csv_file\" class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\tCSV File:\n\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t<input type=\"file\" class=\"form-control\" formControlName=\"csv_file\" [(ngModel)] ='csv_file' (change)=\"handleFileInput($event.target.files)\">\n\n\t\t\t\t\t\t\t\t\t<app-field-error-display  errorMsg=\"Please Select csv_file\">\n     \t\t\t\t\t\t\t\t</app-field-error-display>\n\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t</div> \n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\n\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-portlet__foot m-portlet__no-border m-portlet__foot--fit\" style=\"margin-top:135px\">\n\t\t\t\t\t\t\t<div class=\"m-form__actions m-form__actions--solid\">\n\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">\n\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success\" (click)=\"onSubmit()\">\n\t\t\t\t\t\t\t\t\t\t\tSave\n\t\t\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger\" (click)=\"reset()\">\n\t\t\t\t\t\t\t\t\t\t\tReset\n\t\t\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</form> \n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n</div>\n\n"

/***/ }),

/***/ "./src/app/theme/pages/default/product/bulk-upload/bulk-upload.component.ts":
/*!**********************************************************************************!*\
  !*** ./src/app/theme/pages/default/product/bulk-upload/bulk-upload.component.ts ***!
  \**********************************************************************************/
/*! exports provided: BulkUploadComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "BulkUploadComponent", function() { return BulkUploadComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _auth_services_banner_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../auth/_services/banner.service */ "./src/app/auth/_services/banner.service.ts");
/* harmony import */ var _auth_services_menu_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../../auth/_services/menu.service */ "./src/app/auth/_services/menu.service.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm2015/forms.js");
/* harmony import */ var ngx_toastr__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ngx-toastr */ "./node_modules/ngx-toastr/fesm2015/ngx-toastr.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");







let BulkUploadComponent = class BulkUploadComponent {
    /* public menuDrpdown = "";
     public searchValue = "";
     public dropDownValue = "";
     public productType = "";*/
    constructor(toastr, router, _bannerService, _menuService, formBuilder) {
        this.toastr = toastr;
        this.router = router;
        this._bannerService = _bannerService;
        this._menuService = _menuService;
        this.formBuilder = formBuilder;
        this.subCategoryData = "";
        this.searchValue = "";
        this.dropDownValue = '';
        this.noOfPage = '';
        this.categoryDrpdown = '';
        this.selectedMenu = '';
        this.selectedStatus = '';
        this.selectedDiscountType = '';
        this.selectedCategory = '';
        this.selectedItems = [];
        this.sliderImgUrl = '';
        this.selectedsliderType = '';
        this.menuData = "";
        this.dropdownSettings = {};
    }
    ngOnInit() {
        /*user permission*/
        let currentUser = JSON.parse(localStorage.getItem('currentUser'));
        let permission = currentUser.success.permission;
        if (permission.product_bulkupload != 1) {
            this.toastr.error('You have not permission to visit this page.', 'Error Message');
            this.router.navigate(['/']);
        }
        /*user permission*/
        this.menuData = JSON.parse(localStorage.getItem('menu'));
        this.form = this.formBuilder.group({
            csv_file: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required]
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
    onSubmit() {
        let input;
        this.formSumitAttempt = true;
        if (this.form.valid) {
            input = { form_data: this.sliderImgUrl };
            //input.form_data.csv_file = this.sliderImgUrl;
            console.log(input);
            this._bannerService.bulkUploadProduct(input).subscribe(data => {
                // this.subCategoryData = data.success;
                this.menuDrpdown = data.menu;
                this.toastr.success('Product uploaded Successfully!', 'Success Message');
                this.reset();
            });
        }
    }
    reset() {
        if (this.selectedsliderType != '' && this.selectedStatus != '') {
            this.form.reset();
            this.selectedsliderType = '';
            this.selectedStatus = '';
            this.formSumitAttempt = false;
        }
    }
    handleFileInput(files) {
        let file = files.item(0);
        var reader = new FileReader();
        //reader.readAsText(file);
        reader.onload = (event) => {
            this.sliderImgUrl = event.target.result;
            /*let csv: string = reader.result;
            this.csv_json_data = csv.split("\r\n");*/
        };
        reader.readAsDataURL(file);
    }
};
BulkUploadComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-bulk-upload',
        template: __webpack_require__(/*! raw-loader!./bulk-upload.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/product/bulk-upload/bulk-upload.component.html")
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [ngx_toastr__WEBPACK_IMPORTED_MODULE_5__["ToastrService"], _angular_router__WEBPACK_IMPORTED_MODULE_6__["Router"], _auth_services_banner_service__WEBPACK_IMPORTED_MODULE_2__["BannerService"], _auth_services_menu_service__WEBPACK_IMPORTED_MODULE_3__["MenuService"], _angular_forms__WEBPACK_IMPORTED_MODULE_4__["FormBuilder"]])
], BulkUploadComponent);



/***/ }),

/***/ "./src/app/theme/pages/default/product/bulk-upload/bulk-upload.module.ts":
/*!*******************************************************************************!*\
  !*** ./src/app/theme/pages/default/product/bulk-upload/bulk-upload.module.ts ***!
  \*******************************************************************************/
/*! exports provided: BulkUploadModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "BulkUploadModule", function() { return BulkUploadModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/fesm2015/common.js");
/* harmony import */ var _bulk_upload_bulk_upload_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../bulk-upload/bulk-upload.component */ "./src/app/theme/pages/default/product/bulk-upload/bulk-upload.component.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var _layouts_layout_module__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../../../layouts/layout.module */ "./src/app/theme/layouts/layout.module.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm2015/forms.js");
/* harmony import */ var _default_default_component__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../../../default/default.component */ "./src/app/theme/pages/default/default.component.ts");
/* harmony import */ var ngx_pagination__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ngx-pagination */ "./node_modules/ngx-pagination/dist/ngx-pagination.js");
/* harmony import */ var ng_multiselect_dropdown__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ng-multiselect-dropdown */ "./node_modules/ng-multiselect-dropdown/esm2015/ng-multiselect-dropdown.js");
/* harmony import */ var ngx_quill__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ngx-quill */ "./node_modules/ngx-quill/index.js");











const routes = [
    {
        path: "",
        component: _default_default_component__WEBPACK_IMPORTED_MODULE_7__["DefaultComponent"],
        children: [
            {
                path: "",
                component: _bulk_upload_bulk_upload_component__WEBPACK_IMPORTED_MODULE_3__["BulkUploadComponent"]
            }
        ]
    },
];
let BulkUploadModule = class BulkUploadModule {
};
BulkUploadModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        imports: [
            _angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["RouterModule"].forChild(routes), ngx_quill__WEBPACK_IMPORTED_MODULE_10__["QuillModule"],
            _layouts_layout_module__WEBPACK_IMPORTED_MODULE_5__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_6__["FormsModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_6__["ReactiveFormsModule"], ngx_pagination__WEBPACK_IMPORTED_MODULE_8__["NgxPaginationModule"], ng_multiselect_dropdown__WEBPACK_IMPORTED_MODULE_9__["NgMultiSelectDropDownModule"],
        ],
        declarations: [_bulk_upload_bulk_upload_component__WEBPACK_IMPORTED_MODULE_3__["BulkUploadComponent"]]
    })
], BulkUploadModule);



/***/ })

}]);
//# sourceMappingURL=pages-default-product-bulk-upload-bulk-upload-module-es2015.js.map