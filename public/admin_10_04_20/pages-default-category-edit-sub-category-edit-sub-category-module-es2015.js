(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-category-edit-sub-category-edit-sub-category-module"],{

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/category/edit-sub-category/edit-sub-category.component.html":
/*!***************************************************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/pages/default/category/edit-sub-category/edit-sub-category.component.html ***!
  \***************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"m-portlet m-portlet--mobile\">\n\t\t<div class=\"m-portlet__body\">\n\t\t\t<div class=\"col-lg-12\">\n\t\t\t\t<div class=\"m-portlet\">\n\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\">\n\t\t\t\t\t\t\t\t\t<i class=\"la la-gear\"></i>\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">\n\t\t\t\t\t\t\t\tEdit Sub-Category \n\t\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t\n\t\t\t\t\t<form class=\"m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed\" [formGroup] =\"form\">\n\t\t\t\t\t\t<div class=\"m-portlet__body\">\n\n\n\t\t\t\t\t\t\t<input class=\"form-control\" type=\"hidden\" formControlName=\"id\"  [(ngModel)]=\"id\">\n\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\" >\n\t\t\t\t\t\t\t\t <div class=\"col-lg-3\" [ngClass]=\"displayFieldCss('menu_id')\">\n\t\t\t\t\t\t\t\t\t<label for =\"menu_id\" class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\tMenu Name:\n\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t<select  class=\"form-control\" formControlName=\"menu_id\" [(ngModel)]=\"selectedMenu\" (change)=\"get_category();\">\n\t\t\t\t\t\t\t\t\t \t<option value=\"\" >Select Menu</option>\n\t\t\t\t\t\t\t\t\t \t<option *ngFor=\"let menu of menuDrpdown\" value=\"{{menu.id}}\">{{menu.menu_name}}</option>\n\t\t\t\t\t\t\t\t\t </select> \n\t\t\t\t\t\t\t\t<app-field-error-display [displayError]=\"isFieldValid('menu_id')\" errorMsg=\"Please Select Menu Name\">\n     \t\t\t\t\t\t\t\t</app-field-error-display> \n\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t<div class=\"col-lg-3\" [ngClass]=\"displayFieldCss('category_id')\">\n\t\t\t\t\t\t\t\t\t<label for =\"menu_id\" class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\tCategory Name:\n\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t<select  class=\"form-control\" formControlName=\"category_id\" [(ngModel)]=\"selectedCategory\">\n\t\t\t\t\t\t\t\t\t \t<option value=\"\" >Select Category</option>\n\t\t\t\t\t\t\t\t\t \t<option *ngFor=\"let category of categoryDrpdown\" value=\"{{category.id}}\">{{category.category_name}}</option>\n\t\t\t\t\t\t\t\t\t </select> \n\n\t\t\t\t\t\t\t\t\t<app-field-error-display [displayError]=\"isFieldValid('category_id')\" errorMsg=\"Please Select Category Name\">\n     \t\t\t\t\t\t\t\t</app-field-error-display> \n\t\t\t\t\t\t\t\t</div>  \n\n\t\t\t\t\t\t\t\t<div class=\"col-lg-3\" [ngClass]=\"displayFieldCss('name')\">\n\t\t\t\t\t\t\t\t\t<label for =\"sub_category\" class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\tSub-Category Name:\n\t\t\t\t\t\t\t\t\t</label>\n\n\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" formControlName=\"name\"  [(ngModel)]=\"name\">\n\n\t\t\t\t\t\t\t\t\t<app-field-error-display \n\t\t\t\t\t\t\t\t\t[displayError]=\"isFieldValid('name')\" errorMsg=\"Please Enter Sub-Category Name\">\n\t     \t\t\t\t\t\t\t</app-field-error-display>\n\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<div class=\"col-lg-3\" [ngClass]=\"displayFieldCss('status')\">\n\n\t\t\t\t\t\t\t\t\t<label for =\"status\" class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\tStatus:\n\t\t\t\t\t\t\t\t\t</label>\n\n\t\t\t\t\t\t\t\t\t<select class=\"form-control\" formControlName=\"status\" [(ngModel)] ='selectedStatus'>\n\t\t\t\t\t\t\t\t\t\t<option value=\"\" >Select Status</option>\n\t\t\t\t\t\t\t\t\t\t<option value=\"Active\">Active</option>\n\t\t\t\t\t\t\t\t\t\t<option value=\"Inactive\">Inactive</option>\n\t\t\t\t\t\t\t\t\t</select>\n\n\t\t\t\t\t\t\t\t\t <app-field-error-display [displayError]=\"isFieldValid('status')\" errorMsg=\"Please Select Status\">\n     \t\t\t\t\t\t\t\t</app-field-error-display>\n\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t</div> \n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-portlet__foot m-portlet__no-border m-portlet__foot--fit\">\n\t\t\t\t\t\t\t<div class=\"m-form__actions m-form__actions--solid\">\n\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">\n\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success\" (click)=\"onSubmit()\">\n\t\t\t\t\t\t\t\t\t\t\tUpdate\n\t\t\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger\" (click)=\"reset()\">\n\t\t\t\t\t\t\t\t\t\t\tReset\n\t\t\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</form>\n\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n</div>\n"

/***/ }),

/***/ "./src/app/theme/pages/default/category/edit-sub-category/edit-sub-category.component.ts":
/*!***********************************************************************************************!*\
  !*** ./src/app/theme/pages/default/category/edit-sub-category/edit-sub-category.component.ts ***!
  \***********************************************************************************************/
/*! exports provided: EditSubCategoryComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "EditSubCategoryComponent", function() { return EditSubCategoryComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _auth_services_subCategory_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../auth/_services/subCategory.service */ "./src/app/auth/_services/subCategory.service.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm2015/forms.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var _auth_services_menu_service__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../../../../auth/_services/menu.service */ "./src/app/auth/_services/menu.service.ts");
/* harmony import */ var ngx_toastr__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ngx-toastr */ "./node_modules/ngx-toastr/fesm2015/ngx-toastr.js");







let EditSubCategoryComponent = class EditSubCategoryComponent {
    constructor(toastr, route, _menuService, router, _subCategoryService, formBuilder) {
        this.toastr = toastr;
        this.route = route;
        this._menuService = _menuService;
        this.router = router;
        this._subCategoryService = _subCategoryService;
        this.formBuilder = formBuilder;
        this.subCategoryData = "";
        this.searchValue = "";
        this.dropDownValue = '';
        this.noOfPage = '';
        this.categoryDrpdown = '';
        this.selectedMenu = '';
        this.selectedStatus = '';
        this.selectedCategory = '';
        this.p = 1;
        this.sub_cat_id = '';
        this.id = '';
        this.name = '';
    }
    ngOnInit() {
        /* localStorage.setItem('section', 'subCategory');
         this._subCategoryService.getAll().subscribe(
             data => {
                 this.subCategoryData = data.success;
                 this.menuDrpdown = data.menu;
                 console.log(this.subCategoryData);
             }
         );
 */
        /*user permission*/
        let currentUser = JSON.parse(localStorage.getItem('currentUser'));
        let permission = currentUser.success.permission;
        if (permission.product_subcategory != 1) {
            this.toastr.error('You have not permission to visit this page.', 'Error Message');
            this.router.navigate(['/']);
        }
        /*user permission*/
        this.route.params.subscribe(params => {
            console.log('sub_cat_id', params.sub_cat_id);
            if (params.sub_cat_id) {
                this.sub_cat_id = params.sub_cat_id;
                this._subCategoryService.getById(params.sub_cat_id).subscribe(data => {
                    //console.log('category data', data.success);
                    this.id = data.success.id;
                    this.selectedMenu = data.success.menu_id;
                    this.selectedCategory = data.success.category_id;
                    this.name = data.success.name;
                    this.selectedStatus = data.success.status;
                    this.get_category();
                });
            }
        });
        this.form = this.formBuilder.group({
            id: [null],
            menu_id: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_3__["Validators"].required],
            category_id: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_3__["Validators"].required],
            name: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_3__["Validators"].required],
            status: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_3__["Validators"].required]
        });
        this._menuService.searching({ dropdown_value: 'Active', search_value: '' }).subscribe(data => {
            this.menuDrpdown = data.success;
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
        this.formSumitAttempt = true;
        if (this.form.valid) {
            let that = this;
            this._subCategoryService.updateSubCategory({ form_data: this.form.value }).subscribe(data => {
                this.subCategoryData = data.success;
                this.menuDrpdown = data.menu;
                this.toastr.success('Sub-category update Successfully', 'Success Message');
                this.reset();
                this.router.navigate(['/category/sub-category-list']);
            });
        }
    }
    reset() {
        if (this.selectedMenu != '' && this.selectedCategory != '' && this.selectedStatus != '') {
            this.form.reset();
            this.selectedMenu = '';
            this.selectedStatus = '';
            this.selectedCategory = '';
            this.formSumitAttempt = false;
        }
    }
    subCategory_delete(del_id) {
        console.log(del_id);
        let value = confirm('Are u want to delete this sub-category?');
        if (value) {
            this._subCategoryService.subCategoryDelete(del_id).subscribe(data => {
                this.subCategoryData = data.success;
                this.menuDrpdown = data.data;
            });
        }
    }
    changeSubCategoryStatus(subCategory) {
        console.log(subCategory);
        if (subCategory.status == 'Active') {
            subCategory.status = 'Inactive';
            this._subCategoryService.updateStatus(subCategory.id).subscribe(data => {
                console.log('update', data);
            });
        }
        else {
            subCategory.status = 'Active';
            this._subCategoryService.updateStatus(subCategory.id).subscribe(data => {
                console.log('update', data);
            });
        }
    }
    search() {
        this._subCategoryService.searching({ search_value: this.searchValue, dropdown_value: this.dropDownValue }).subscribe(data => {
            this.subCategoryData = data.success;
        });
    }
    get_category() {
        console.log(this.selectedMenu);
        this._subCategoryService.getCategory({ menu_id: this.selectedMenu }).subscribe(data => {
            this.categoryDrpdown = data.success;
            console.log(this.categoryDrpdown);
        });
    }
};
EditSubCategoryComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-edit-sub-category',
        template: __webpack_require__(/*! raw-loader!./edit-sub-category.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/category/edit-sub-category/edit-sub-category.component.html")
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [ngx_toastr__WEBPACK_IMPORTED_MODULE_6__["ToastrService"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["ActivatedRoute"], _auth_services_menu_service__WEBPACK_IMPORTED_MODULE_5__["MenuService"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["Router"], _auth_services_subCategory_service__WEBPACK_IMPORTED_MODULE_2__["SubCategoryService"], _angular_forms__WEBPACK_IMPORTED_MODULE_3__["FormBuilder"]])
], EditSubCategoryComponent);



/***/ }),

/***/ "./src/app/theme/pages/default/category/edit-sub-category/edit-sub-category.module.ts":
/*!********************************************************************************************!*\
  !*** ./src/app/theme/pages/default/category/edit-sub-category/edit-sub-category.module.ts ***!
  \********************************************************************************************/
/*! exports provided: EditSubCategoryModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "EditSubCategoryModule", function() { return EditSubCategoryModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/fesm2015/common.js");
/* harmony import */ var _edit_sub_category_edit_sub_category_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../edit-sub-category/edit-sub-category.component */ "./src/app/theme/pages/default/category/edit-sub-category/edit-sub-category.component.ts");
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
                component: _edit_sub_category_edit_sub_category_component__WEBPACK_IMPORTED_MODULE_3__["EditSubCategoryComponent"]
            }
        ]
    },
];
let EditSubCategoryModule = class EditSubCategoryModule {
};
EditSubCategoryModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        imports: [
            _angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["RouterModule"].forChild(routes),
            _layouts_layout_module__WEBPACK_IMPORTED_MODULE_5__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_6__["FormsModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_6__["ReactiveFormsModule"], ngx_pagination__WEBPACK_IMPORTED_MODULE_8__["NgxPaginationModule"],
        ],
        declarations: [_edit_sub_category_edit_sub_category_component__WEBPACK_IMPORTED_MODULE_3__["EditSubCategoryComponent"]]
    })
], EditSubCategoryModule);



/***/ })

}]);
//# sourceMappingURL=pages-default-category-edit-sub-category-edit-sub-category-module-es2015.js.map