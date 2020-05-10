(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-slider-add-slider-add-slider-module"],{

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/slider/add-slider/add-slider.component.html":
/*!***********************************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/pages/default/slider/add-slider/add-slider.component.html ***!
  \***********************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"m-portlet m-portlet--mobile\">\n\t\t<div class=\"m-portlet__body\">\n\t\t\t<div class=\"col-lg-12\">\n\t\t\t\t<div class=\"m-portlet\">\n\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\">\n\t\t\t\t\t\t\t\t\t<i class=\"la la-gear\"></i>\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">Add Slider</h3>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t\n\t\t\t\t <form class=\"m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed\" [formGroup] =\"form\">\n\t\t\t\t\t\t<div class=\"m-portlet__body\">\n\n\n\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\" >\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<div class=\"col-lg-4\" [ngClass]=\"displayFieldCss('tab_title')\">\n\t\t\t\t\t\t\t\t\t<label for =\"tab_title\" class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\tTab Title:\n\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" formControlName=\"tab_title\" [(ngModel)] ='tab_title'></textarea>\n\t\t\t\t\t\t\t\t\t<app-field-error-display  errorMsg=\"Please add tab title\">\n     \t\t\t\t\t\t\t\t</app-field-error-display>\n\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t<div class=\"col-lg-4\" [ngClass]=\"displayFieldCss('left_title')\">\n\t\t\t\t\t\t\t\t\t<label for =\"left_title\" class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\tLeft Title:\n\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" formControlName=\"left_title\" [(ngModel)] ='left_title'></textarea>\n\t\t\t\t\t\t\t\t\t<app-field-error-display  errorMsg=\"Please add Left title\">\n     \t\t\t\t\t\t\t\t</app-field-error-display>\n\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t<div class=\"col-lg-4\" [ngClass]=\"displayFieldCss('product_id')\">\n\t\t\t\t\t\t\t\t\t<label for =\"product_id\" class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\tProdcut:\n\t\t\t\t\t\t\t\t\t</label>\n\n\t\t\t\t\t\t\t\t\t<select class=\"form-control\" formControlName=\"product_id\" [(ngModel)] ='product_id'>\n\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select Product</option>\t\n\t\t\t\t\t\t\t\t\t\t<option *ngFor=\"let product of productData\" value=\"{{product.product_id}}\">{{product.product_name}}</option>\n\t\t\t\t\t\t\t\t\t</select>\n\n\t\t\t\t\t\t\t\t\t<app-field-error-display  errorMsg=\"Please Select Product\">\n     \t\t\t\t\t\t\t\t</app-field-error-display>\n\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t</div> \n\t\t\t\t\t\t\t\t<div class=\"col-lg-4\" [ngClass]=\"displayFieldCss('time')\">\n\t\t\t\t\t\t\t\t\t<label for =\"time\" class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\tTime:\n\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" formControlName=\"time\" [(ngModel)] ='time'>\n\n\t\t\t\t\t\t\t\t\t<app-field-error-display  errorMsg=\"Please Select time\">\n     \t\t\t\t\t\t\t\t</app-field-error-display>\n\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t</div> \n\n\t\t\t\t\t\t\t\t\n\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-portlet__foot m-portlet__no-border m-portlet__foot--fit\" style=\"margin-top:135px\">\n\t\t\t\t\t\t\t<div class=\"m-form__actions m-form__actions--solid\">\n\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">\n\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success\" (click)=\"onSubmit()\">\n\t\t\t\t\t\t\t\t\t\t\tSave\n\t\t\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger\" (click)=\"reset()\">\n\t\t\t\t\t\t\t\t\t\t\tReset\n\t\t\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</form> \n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n</div>\n\n"

/***/ }),

/***/ "./src/app/theme/pages/default/slider/add-slider/add-slider.component.ts":
/*!*******************************************************************************!*\
  !*** ./src/app/theme/pages/default/slider/add-slider/add-slider.component.ts ***!
  \*******************************************************************************/
/*! exports provided: AddSliderComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AddSliderComponent", function() { return AddSliderComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _auth_services_banner_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../auth/_services/banner.service */ "./src/app/auth/_services/banner.service.ts");
/* harmony import */ var _auth_services_menu_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../../auth/_services/menu.service */ "./src/app/auth/_services/menu.service.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var ngx_toastr__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ngx-toastr */ "./node_modules/ngx-toastr/fesm5/ngx-toastr.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");







var AddSliderComponent = /** @class */ (function () {
    /* public menuDrpdown = "";
     public searchValue = "";
     public dropDownValue = "";
     public productType = "";*/
    function AddSliderComponent(toastr, router, _bannerService, _menuService, formBuilder) {
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
    AddSliderComponent.prototype.ngOnInit = function () {
        var _this = this;
        /*user permission*/
        var currentUser = JSON.parse(localStorage.getItem('currentUser'));
        var permission = currentUser.success.permission;
        if (permission.website_setting != 1) {
            this.toastr.error('You have not permission to visit this page.', 'Error Message');
            this.router.navigate(['/']);
        }
        /*user permission*/
        this.menuData = JSON.parse(localStorage.getItem('menu'));
        console.log('product_data');
        this._bannerService.getProduct().subscribe(function (data) {
            _this.productData = data.product;
        });
        this.dropdownSettings = {
            singleSelection: false,
            idField: 'item_id',
            textField: 'item_text',
            selectAllText: 'Select All',
            unSelectAllText: 'UnSelect All',
            itemsShowLimit: 3,
            allowSearchFilter: true
        };
        this.form = this.formBuilder.group({
            tab_title: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            left_title: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            product_id: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            time: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required]
        });
    };
    AddSliderComponent.prototype.isFieldValid = function (field) {
        return ((!this.form.get(field).valid && this.form.get(field).touched) ||
            (this.form.get(field).untouched && this.formSumitAttempt));
    };
    AddSliderComponent.prototype.displayFieldCss = function (field) {
        return {
            'has-error': this.isFieldValid(field),
            'has-feedback': this.isFieldValid(field)
        };
    };
    AddSliderComponent.prototype.onSubmit = function () {
        var _this = this;
        var input;
        this.formSumitAttempt = true;
        if (this.form.valid) {
            input = { form_data: this.form.value };
            /*input.form_data.slider_img = this.sliderImgUrl;
            console.log(input);*/
            this._bannerService.createSlider(input).subscribe(function (data) {
                // this.subCategoryData = data.success;
                _this.menuDrpdown = data.menu;
                _this.toastr.success('slider Added Successfully', 'Success Message');
                _this.reset();
            });
        }
    };
    AddSliderComponent.prototype.reset = function () {
        if (this.selectedsliderType != '' && this.selectedStatus != '') {
            this.form.reset();
            this.selectedsliderType = '';
            this.selectedStatus = '';
            this.formSumitAttempt = false;
        }
    };
    AddSliderComponent.prototype.handleFileInput = function (files) {
        var _this = this;
        var file = files.item(0);
        var reader = new FileReader();
        reader.onload = function (event) {
            _this.sliderImgUrl = event.target.result;
        };
        reader.readAsDataURL(file);
    };
    AddSliderComponent.prototype.onItemSelect = function (item) {
        // this.selectedItems.push(item);
        console.log(this.selectedItems);
    };
    AddSliderComponent.prototype.onSelectAll = function (items) {
        console.log(items);
    };
    AddSliderComponent.prototype.onDeSelectItem = function (item) {
        console.log(this.selectedItems);
    };
    AddSliderComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: 'app-add-slider',
            template: __webpack_require__(/*! raw-loader!./add-slider.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/slider/add-slider/add-slider.component.html")
        }),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [ngx_toastr__WEBPACK_IMPORTED_MODULE_5__["ToastrService"], _angular_router__WEBPACK_IMPORTED_MODULE_6__["Router"], _auth_services_banner_service__WEBPACK_IMPORTED_MODULE_2__["BannerService"], _auth_services_menu_service__WEBPACK_IMPORTED_MODULE_3__["MenuService"], _angular_forms__WEBPACK_IMPORTED_MODULE_4__["FormBuilder"]])
    ], AddSliderComponent);
    return AddSliderComponent;
}());



/***/ }),

/***/ "./src/app/theme/pages/default/slider/add-slider/add-slider.module.ts":
/*!****************************************************************************!*\
  !*** ./src/app/theme/pages/default/slider/add-slider/add-slider.module.ts ***!
  \****************************************************************************/
/*! exports provided: AddSliderModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AddSliderModule", function() { return AddSliderModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/fesm5/common.js");
/* harmony import */ var _add_slider_add_slider_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../add-slider/add-slider.component */ "./src/app/theme/pages/default/slider/add-slider/add-slider.component.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var _layouts_layout_module__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../../../layouts/layout.module */ "./src/app/theme/layouts/layout.module.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var _default_default_component__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../../../default/default.component */ "./src/app/theme/pages/default/default.component.ts");
/* harmony import */ var ngx_pagination__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ngx-pagination */ "./node_modules/ngx-pagination/dist/ngx-pagination.js");
/* harmony import */ var ng_multiselect_dropdown__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ng-multiselect-dropdown */ "./node_modules/ng-multiselect-dropdown/esm5/ng-multiselect-dropdown.js");
/* harmony import */ var ngx_quill__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ngx-quill */ "./node_modules/ngx-quill/index.js");











var routes = [
    {
        path: "",
        component: _default_default_component__WEBPACK_IMPORTED_MODULE_7__["DefaultComponent"],
        children: [
            {
                path: "",
                component: _add_slider_add_slider_component__WEBPACK_IMPORTED_MODULE_3__["AddSliderComponent"]
            }
        ]
    },
];
var AddSliderModule = /** @class */ (function () {
    function AddSliderModule() {
    }
    AddSliderModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["RouterModule"].forChild(routes), ngx_quill__WEBPACK_IMPORTED_MODULE_10__["QuillModule"],
                _layouts_layout_module__WEBPACK_IMPORTED_MODULE_5__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_6__["FormsModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_6__["ReactiveFormsModule"], ngx_pagination__WEBPACK_IMPORTED_MODULE_8__["NgxPaginationModule"], ng_multiselect_dropdown__WEBPACK_IMPORTED_MODULE_9__["NgMultiSelectDropDownModule"],
            ],
            declarations: [_add_slider_add_slider_component__WEBPACK_IMPORTED_MODULE_3__["AddSliderComponent"]]
        })
    ], AddSliderModule);
    return AddSliderModule;
}());



/***/ })

}]);
//# sourceMappingURL=pages-default-slider-add-slider-add-slider-module-es5.js.map