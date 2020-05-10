(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-category-category-edit-category-edit-module"],{

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/category/category-edit/category-edit.component.html":
/*!*******************************************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/pages/default/category/category-edit/category-edit.component.html ***!
  \*******************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"m-portlet m-portlet--mobile\">\n\t\t<div class=\"m-portlet__body\">\n\t\t\t<div class=\"col-lg-12\">\n\t\t\t\t<div class=\"m-portlet\">\n\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\">\n\t\t\t\t\t\t\t\t\t<i class=\"la la-gear\"></i>\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">\n\t\t\t\t\t\t\t\tEdit Category \n\t\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t\n\t\t\t\t\t<form class=\"m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed\" [formGroup] =\"form\">\n\t\t\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\" >\n\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"hidden\" formControlName=\"id\"  [(ngModel)]=\"id\">\n\n\t\t\t\t\t\t\t\t<div class=\"col-lg-4\" [ngClass]=\"displayFieldCss('menu_id')\">\n\t\t\t\t\t\t\t\t\t<label for =\"menu_id\" class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\tMenu Name:\n\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t<select  class=\"form-control\" formControlName=\"menu_id\" [(ngModel)]=\"selectedMenu\">\n\t\t\t\t\t\t\t\t\t \t<option value=\"\" >Select Menu</option>\n\t\t\t\t\t\t\t\t\t \t<option *ngFor=\"let menu of menuDrpdown\" value=\"{{menu.id}}\">{{menu.menu_name}}</option>\n\t\t\t\t\t\t\t\t\t</select> \n\t\t\t\t\t\t\t\t<app-field-error-display [displayError]=\"isFieldValid('menu_id')\" errorMsg=\"Please Select Menu Name\">\n     \t\t\t\t\t\t\t\t</app-field-error-display> \n\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">\n\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t<label for =\"category_name\" class=\"control-label required\">Category Name:</label>\n\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" formControlName=\"category_name\"  [(ngModel)]=\"category_name\">\n\n\t\t\t\t\t\t\t\t\t<app-field-error-display \n\t\t\t\t\t\t\t\t\t[displayError]=\"isFieldValid('category_name')\" errorMsg=\"Please Enter Category Name\">\n\t     \t\t\t\t\t\t\t</app-field-error-display>\n\n\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<div class=\"col-lg-4\" [ngClass]=\"displayFieldCss('status')\">\n\n\t\t\t\t\t\t\t\t\t<label for =\"status\" class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\tStatus:\n\t\t\t\t\t\t\t\t\t</label>\n\n\t\t\t\t\t\t\t\t\t<select class=\"form-control\" formControlName=\"status\" [(ngModel)] ='selectedStatus'>\n\t\t\t\t\t\t\t\t\t\t<option value=\"\" >Select Status</option>\n\t\t\t\t\t\t\t\t\t\t<option value=\"Active\">Active</option>\n\t\t\t\t\t\t\t\t\t\t<option value=\"Inactive\">Inactive</option>\n\n\t\t\t\t\t\t\t\t\t</select>\n\t\t\t\t\t\t\t\t\t <app-field-error-display [displayError]=\"isFieldValid('status')\" errorMsg=\"Please Select Status\">\n     \t\t\t\t\t\t\t\t</app-field-error-display>\n\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t</div> \n\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-portlet__foot m-portlet__no-border m-portlet__foot--fit\">\n\t\t\t\t\t\t\t<div class=\"m-form__actions m-form__actions--solid\">\n\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">\n\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success\" (click)=\"onSubmit()\">\n\t\t\t\t\t\t\t\t\t\t\tUpdate\n\t\t\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger\" (click)=\"reset()\">\n\t\t\t\t\t\t\t\t\t\t\tReset\n\t\t\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</form>\t  \n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n</div>\n\n"

/***/ }),

/***/ "./src/app/theme/pages/default/category/category-edit/category-edit.component.ts":
/*!***************************************************************************************!*\
  !*** ./src/app/theme/pages/default/category/category-edit/category-edit.component.ts ***!
  \***************************************************************************************/
/*! exports provided: CategoryEditComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "CategoryEditComponent", function() { return CategoryEditComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _auth_services_category_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../auth/_services/category.service */ "./src/app/auth/_services/category.service.ts");
/* harmony import */ var _auth_services_menu_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../../auth/_services/menu.service */ "./src/app/auth/_services/menu.service.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var ngx_toastr__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ngx-toastr */ "./node_modules/ngx-toastr/fesm5/ngx-toastr.js");







var CategoryEditComponent = /** @class */ (function () {
    function CategoryEditComponent(toastr, _categoryService, _menuService, route, router, formBuilder) {
        this.toastr = toastr;
        this._categoryService = _categoryService;
        this._menuService = _menuService;
        this.route = route;
        this.router = router;
        this.formBuilder = formBuilder;
        this.searchValue = "";
        this.dropDownValue = '';
        this.noOfPage = '';
        this.selectedMenu = '';
        this.selectedStatus = '';
        this.id = '';
        this.category_name = '';
        this.category_id = '';
        this.p = 1;
    }
    CategoryEditComponent.prototype.ngOnInit = function () {
        var _this = this;
        /*user permission*/
        var currentUser = JSON.parse(localStorage.getItem('currentUser'));
        var permission = currentUser.success.permission;
        if (permission.product_category != 1) {
            this.toastr.error('You have not permission to visit this page.', 'Error Message');
            this.router.navigate(['/']);
        }
        /*user permission*/
        this.route.params.subscribe(function (params) {
            if (params.category_id) {
                _this.category_id = params.category_id;
                _this._categoryService.getById(params.category_id).subscribe(function (data) {
                    console.log('category data', data.success);
                    _this.id = data.success.id;
                    _this.selectedMenu = data.success.menu_id;
                    _this.category_name = data.success.category_name;
                    _this.selectedStatus = data.success.status;
                });
            }
        });
        this.form = this.formBuilder.group({
            id: [null],
            menu_id: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            category_name: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            status: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required]
        });
        this._menuService.searching({ dropdown_value: 'Active', search_value: '' }).subscribe(function (data) {
            _this.menuDrpdown = data.success;
        });
    };
    CategoryEditComponent.prototype.isFieldValid = function (field) {
        return ((!this.form.get(field).valid && this.form.get(field).touched) ||
            (this.form.get(field).untouched && this.formSumitAttempt));
    };
    CategoryEditComponent.prototype.displayFieldCss = function (field) {
        return {
            'has-error': this.isFieldValid(field),
            'has-feedback': this.isFieldValid(field)
        };
    };
    CategoryEditComponent.prototype.onSubmit = function () {
        var _this = this;
        this.formSumitAttempt = true;
        if (this.form.valid) {
            var that = this;
            this._categoryService.updateCategory({ form_data: this.form.value }).subscribe(function (data) {
                _this.categoryData = data.data;
                _this.toastr.success('Category Updated Successfully', 'Success Message');
                _this.reset();
                _this.router.navigate(['/category/category-list']);
            });
        }
    };
    CategoryEditComponent.prototype.reset = function () {
        if (this.selectedMenu != '' && this.selectedStatus != '') {
            this.form.reset();
            this.selectedMenu = '';
            this.selectedStatus = '';
            this.formSumitAttempt = false;
        }
    };
    CategoryEditComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: 'app-category-edit',
            template: __webpack_require__(/*! raw-loader!./category-edit.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/category/category-edit/category-edit.component.html")
        }),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [ngx_toastr__WEBPACK_IMPORTED_MODULE_6__["ToastrService"], _auth_services_category_service__WEBPACK_IMPORTED_MODULE_2__["CategoryService"], _auth_services_menu_service__WEBPACK_IMPORTED_MODULE_3__["MenuService"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["ActivatedRoute"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["Router"], _angular_forms__WEBPACK_IMPORTED_MODULE_4__["FormBuilder"]])
    ], CategoryEditComponent);
    return CategoryEditComponent;
}());



/***/ }),

/***/ "./src/app/theme/pages/default/category/category-edit/category-edit.module.ts":
/*!************************************************************************************!*\
  !*** ./src/app/theme/pages/default/category/category-edit/category-edit.module.ts ***!
  \************************************************************************************/
/*! exports provided: CategoryEditModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "CategoryEditModule", function() { return CategoryEditModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/fesm5/common.js");
/* harmony import */ var _default_default_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../default/default.component */ "./src/app/theme/pages/default/default.component.ts");
/* harmony import */ var _category_edit_category_edit_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../category-edit/category-edit.component */ "./src/app/theme/pages/default/category/category-edit/category-edit.component.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var _layouts_layout_module__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../../../layouts/layout.module */ "./src/app/theme/layouts/layout.module.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var ngx_pagination__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ngx-pagination */ "./node_modules/ngx-pagination/dist/ngx-pagination.js");









var routes = [
    {
        path: "",
        component: _default_default_component__WEBPACK_IMPORTED_MODULE_3__["DefaultComponent"],
        children: [
            {
                path: "",
                component: _category_edit_category_edit_component__WEBPACK_IMPORTED_MODULE_4__["CategoryEditComponent"]
            }
        ]
    },
];
var CategoryEditModule = /** @class */ (function () {
    function CategoryEditModule() {
    }
    CategoryEditModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["RouterModule"].forChild(routes),
                _layouts_layout_module__WEBPACK_IMPORTED_MODULE_6__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_7__["FormsModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_7__["ReactiveFormsModule"], ngx_pagination__WEBPACK_IMPORTED_MODULE_8__["NgxPaginationModule"],
            ],
            declarations: [_category_edit_category_edit_component__WEBPACK_IMPORTED_MODULE_4__["CategoryEditComponent"]]
        })
    ], CategoryEditModule);
    return CategoryEditModule;
}());



/***/ })

}]);
//# sourceMappingURL=pages-default-category-category-edit-category-edit-module-es5.js.map