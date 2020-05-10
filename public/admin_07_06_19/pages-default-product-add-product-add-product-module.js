(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-product-add-product-add-product-module"],{

/***/ "./src/app/theme/pages/default/product/add-product/add-product.component.html":
/*!************************************************************************************!*\
  !*** ./src/app/theme/pages/default/product/add-product/add-product.component.html ***!
  \************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"m-portlet m-portlet--mobile\">\n\t\t<div class=\"m-portlet__body\">\n\t\t\t<div class=\"col-lg-12\">\n\t\t\t\t<div class=\"m-portlet\">\n\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\">\n\t\t\t\t\t\t\t\t\t<i class=\"la la-gear\"></i>\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">Add Product</h3>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t\n\t\t\t\t\t <form class=\"m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed\" [formGroup] =\"addForm\">\n\t\t\t\t\t\t<div class=\"m-portlet__body\">\t\n\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\">\n\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">\n\t\t\t\t\t\t\t\t\t<dropzone [config]=\"config\" [message]=\"'Click or drag images here to upload'\" (error)=\"onUploadError($event)\" (success)=\"onUploadSuccess($event)\"></dropzone>\n\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">\n\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">\n\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\"  placeholder=\"Enter Product Name\" formControlName=\"product_name\">\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">\n\t\t\t\t\t\t\t\t\t\t\t<label>Price:</label>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-input-icon m-input-icon--left\">\n\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-input-icon__icon m-input-icon__icon--left\"><span><i class=\"la la-usd\"></i></span></span>\n\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control m-input\" placeholder=\"0.00\" formControlName=\"actual_price\">\n\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">\n\t\t\t\t\t\t\t\t\t\t\t<label>Discounted Price:</label>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-input-icon m-input-icon--left\">\n\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-input-icon__icon m-input-icon__icon--left\"><span><i class=\"la la-usd\"></i></span></span>\n\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control m-input\" placeholder=\"0.00\" formControlName=\"current_price\">\n\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\t\n\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">\n\t\t\t\t\t\t\t\t\t\t\t<textarea placeholder=\"Short description of the products...\" class=\"form-control m-input\" formControlName=\"description\"></textarea>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\t\n\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">\n\t\t\t\t\t\t\t\t\t\t\t<select  class=\"form-control\" formControlName=\"category\">\n\t\t\t\t\t\t\t\t\t\t\t \t<option value=\"\" >Select Category</option>\n\t\t\t\t\t\t\t\t\t\t\t \t<option *ngFor=\"let category of categoryDropdownData\" value=\"{{category.id}}\">{{category.category_name}}</option>\n\t\t\t\t\t\t\t\t\t\t\t </select> \n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\t\n\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">\n\t\t\t\t\t\t\t\t\t\t\t<ng-multiselect-dropdown\n\t\t\t\t\t\t\t\t\t\t\t  [placeholder]=\"'custom placeholder'\"\n\t\t\t\t\t\t\t\t\t\t\t  [data]=\"dropdownList\"\n\t\t\t\t\t\t\t\t\t\t\t  [(ngModel)]=\"selectedItems\"\n\t\t\t\t\t\t\t\t\t\t\t  [settings]=\"dropdownSettings\"\n\t\t\t\t\t\t\t\t\t\t\t  (onSelect)=\"onItemSelect($event)\"\n\t\t\t\t\t\t\t\t\t\t\t  (onSelectAll)=\"onSelectAll($event)\"\n\t\t\t\t\t\t\t\t\t\t\t  formControlName=\"specification\"\n\t\t\t\t\t\t\t\t\t\t\t>\n\t\t\t\t\t\t\t\t\t\t\t</ng-multiselect-dropdown>\n\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\t\n\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\">\n\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">\n\t\t\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12\">\n\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"content\" class=\"form-control\" data-provide=\"markdown\" rows=\"10\" formControlName=\"product_details\"></textarea>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>                \n\t\t\t            </div>\n\t\t\t            <div class=\"m-portlet__foot m-portlet__no-border m-portlet__foot--fit\">\n\t\t\t\t\t\t\t<div class=\"m-form__actions m-form__actions--solid\">\n\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">\n\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success\" (click)=\"onSubmitForm()\">Save</button>\n\t\t\t\t\t\t\t\t\t\t<button type=\"reset\" class=\"btn btn-secondary\">Cancel</button>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</form>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n</div>\n\n"

/***/ }),

/***/ "./src/app/theme/pages/default/product/add-product/add-product.component.ts":
/*!**********************************************************************************!*\
  !*** ./src/app/theme/pages/default/product/add-product/add-product.component.ts ***!
  \**********************************************************************************/
/*! exports provided: AddProductComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AddProductComponent", function() { return AddProductComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _auth_services_product_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../../../../auth/_services/product.service */ "./src/app/auth/_services/product.service.ts");
/* harmony import */ var _services_data_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../_services/data.service */ "./src/app/_services/data.service.ts");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/esm5/forms.js");
/* harmony import */ var _auth_services_subCategory_service__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../../../../auth/_services/subCategory.service */ "./src/app/auth/_services/subCategory.service.ts");
/* harmony import */ var _auth_services_category_service__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../../../../auth/_services/category.service */ "./src/app/auth/_services/category.service.ts");
/* harmony import */ var _auth_services_menu_service__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../../../../../auth/_services/menu.service */ "./src/app/auth/_services/menu.service.ts");
/* harmony import */ var _auth_services_brand_service__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ../../../../../auth/_services/brand.service */ "./src/app/auth/_services/brand.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/esm5/router.js");
/* harmony import */ var ngx_toastr__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ngx-toastr */ "./node_modules/ngx-toastr/fesm5/ngx-toastr.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};











var AddProductComponent = /** @class */ (function () {
    function AddProductComponent(toastr, route, router, _dataService, _brandService, _menuService, _categoryService, _productService, _subCategory, _script, formBuilder) {
        this.toastr = toastr;
        this.route = route;
        this.router = router;
        this._dataService = _dataService;
        this._brandService = _brandService;
        this._menuService = _menuService;
        this._categoryService = _categoryService;
        this._productService = _productService;
        this._subCategory = _subCategory;
        this._script = _script;
        this.formBuilder = formBuilder;
        this.dropdownList = [];
        this.selectedItems = [];
        this.dropdownSettings = {};
        this.tagFieldOpen = 0;
        this.items = ['Amsterdam', 'Antwerp'];
        this.brandDrpdown = [];
        this.selectedCategory = [];
        this.selectedCategories1 = [];
        this.categoryDrpdown = [];
        this.productypeDrpdown = [];
        this.subCategories = [];
        this.selectedColor = [];
        this.selectedSize = [];
        this.selectedProductType = '';
        this.productTypeList = [];
        this.productData = '';
        // selectedProductTypes = [];
        this.productTypes = [];
        this.cities = [];
        this.hide = '1';
        this.selectedBrand = [];
        this.selectedAvilability = [];
        this.selectedAdminCommisionType = [];
        this.selectedVendorCommisionType = [];
        this.alternateProductImgUrl = [];
        this.productTypeDrpdown = [];
        this.attrData = [];
        this.accessData = [];
        this.menuData = '';
        this.selectedMenu = '';
        this.categoryData = '';
        this.categoryListData = '';
        this.selectedCategories = '';
        this.selectedProduct = '';
        this.selectedAttribute = '';
        this.selectedSubCategories = '';
        this.dropdown_value = '';
        this.search_value = '';
        this.accDropDownValue = '';
        this.subDropDownValue = '';
        this.dropDownValue = '';
        this.form = formBuilder.group({
            product_state: [null],
            sku: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            product_name: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            shareable_product: [null],
            // product_img: [null, Validators.required],
            actual_price: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            mrp: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            current_price: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            vendor_commission: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            total_stock_quantity: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            stock_quantity: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            availability: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            description: [null],
            admin_commission_type: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            admin_commission: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            vendor_commission_type: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            brand_id: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
        });
        this.addForm = formBuilder.group({
            product_name: [null],
            actual_price: [null],
            current_price: [null],
            product_details: [null],
            category: [null],
            specification: [null],
            description: [null],
        });
        this.formSubCat = formBuilder.group({
            fk_menu_id: [null],
            fk_category_id: [null],
            fk_sub_category_id: [null],
        });
        this.formProductType = formBuilder.group({
            fk_product_type_id: [null],
        });
        this.formAttr = formBuilder.group({
            attribute_name: [null],
            attribute_value: [null],
            status: [null],
        });
        this.formAccess = formBuilder.group({
            fk_category: [null],
            fk_sub_cat: [null],
            accessory_product_id: [null],
        });
    }
    AddProductComponent.prototype.numberOnly = function (event) {
        var charCode = (event.which) ? event.which : event.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    };
    AddProductComponent.prototype.ngOnInit = function () {
        var _this = this;
        /*user permission*/
        var currentUser = JSON.parse(localStorage.getItem('currentUser'));
        var permission = currentUser.success.permission;
        if (permission.product_add != 1) {
            this.toastr.error('You have not permission to visit this page.', 'Error Message');
            this.router.navigate(['/']);
        }
        /*user permission*/
        this._productService.getTagForDropDown().subscribe(function (data) {
            _this.dropdownList = data.success;
            console.log('this.dropdownList');
            console.log(_this.dropdownList);
            _this.selectedItems = [];
            _this.dropdownSettings = {
                singleSelection: false,
                idField: 'item_id',
                textField: 'item_text',
                selectAllText: 'Select All',
                unSelectAllText: 'UnSelect All',
                itemsShowLimit: 3,
                allowSearchFilter: true
            };
        });
        this.route.params.subscribe(function (params) {
            if (params.id) {
                _this.toastr.success('Product Added Successfully', 'Success Message');
                _this.product_id = params.id;
            }
        });
        this.currentUser = JSON.parse(localStorage.getItem('currentUser'));
        var user_id;
        user_id = this.currentUser.success.id;
        this._dataService.getProductState().subscribe(function (data) {
            _this.hide = data;
            //  console.log('color data',this.hide );
        });
        this._menuService.getAll().subscribe(function (data) {
            _this.menuData = data.success;
            //this.noOfPage = data.success.length;
        });
        this._categoryService.getAll().subscribe(function (data) {
            _this.categoryDropdownData = data.success;
            //this.noOfPage = data.success.length;
        });
        this._brandService.searching({ dropdown_value: 'Active', search_value: '' }).subscribe(function (data) {
            _this.brandDrpdown = data.success;
            //console.log(this.brandDrpdown);
        });
        /* this._subCategory.searching({ search_value:'' , dropdown_value: 'Active' }).subscribe(
             data => {
                 this.subCategoryData = data.success;
     
               
             }
         );*/
        this._categoryService.categoryListAss().subscribe(function (data) {
            _this.categoryListData = data.success;
            // console.log('category for ass',this.categoryListData); 
        });
        this._productService.productTypeSearching({ dropdown_value: 'Active', search_value: '' }).subscribe(function (data) {
            _this.productTypeDrpdown = data.success;
            // console.log('productTypeDrpdown',this.productTypeDrpdown);
        });
        this._productService.attrSearching({ search_value: '', dropdown_value: 'Active', user_id: this.currentUser.success.id }).subscribe(function (data) {
            _this.attrData = data.success;
            // console.log(this.attrData);
        });
    };
    AddProductComponent.prototype.changeProductState = function (event) {
        var _this = this;
        //console.log(event.target.value);
        this._dataService.setProductState(event.target.value);
        this._dataService.getProductState().subscribe(function (data) {
            _this.hide = data;
        });
    };
    AddProductComponent.prototype.onItemSelect = function (item) {
        console.log(item);
    };
    AddProductComponent.prototype.onSelectAll = function (items) {
        console.log(items);
    };
    AddProductComponent.prototype.onSubmitForm = function () {
        var _this = this;
        console.log('this.addForm');
        console.log(this.addForm.value);
        var input;
        this.formSumitAttempt = true;
        if (this.addForm.valid && this.productImgUrl) {
            input = { form_data: this.addForm.value };
            input.form_data.user_id = this.currentUser.success.id;
            input.form_data.product_img = this.productImgUrl;
            console.log(input);
            this._productService.createProduct(input).subscribe(function (data) {
                _this.product_id = data.success;
                // localStorage.setItem('product', this.product_id);
                // this.reset();
                _this.toastr.success('Product Added Successfully', 'Success Message');
                _this.router.navigate(['/product']);
                //this.router.navigate(['/product/edit-product/' + parseInt(this.product_id)]);
            });
        }
    };
    AddProductComponent.prototype.get_category = function () {
        var _this = this;
        //  console.log('selectedMenu',this.selectedMenu);
        this._subCategory.getCategory({ menu_id: this.selectedMenu }).subscribe(function (data) {
            _this.categoryDrpdown = data.success;
            ////console.log('categoryDrpdown',this.categoryDrpdown);
        });
    };
    AddProductComponent.prototype.get_subCategory = function () {
        var _this = this;
        //console.log('selectedCategories',this.selectedCategories);
        this._subCategory.getSubCategory({ category_id: this.selectedCategories }).subscribe(function (data) {
            _this.subCategoryData = data.success;
            //// console.log('subCategoryData',this.subCategoryData);
        });
    };
    AddProductComponent.prototype.addTag = function () {
        this.tagFieldOpen = 1;
    };
    AddProductComponent.prototype.hideTag = function () {
        this.tagFieldOpen = 0;
    };
    AddProductComponent.prototype.get_subCategoryAss = function () {
        var _this = this;
        //console.log('selectedCategoriesAss',this.selectedCategories1);
        this._subCategory.getSubCategoryAss({ category_id: this.selectedCategories1 }).subscribe(function (data) {
            _this.subCategoryData = data.success;
            //// console.log('subCategoryData',this.subCategoryData);
        });
    };
    AddProductComponent.prototype.get_product = function () {
        var _this = this;
        // console.log('selectedSubCategories',this.selectedSubCategories);
        this._productService.get_product({ sub_category_id: this.selectedSubCategories }).subscribe(function (data) {
            _this.productData = data.success;
            //console.log('product drp',this.productData);
        });
    };
    AddProductComponent.prototype.isFieldValid = function (field) {
        return ((!this.form.get(field).valid && this.form.get(field).touched) ||
            (this.form.get(field).untouched && this.formSumitAttempt));
    };
    AddProductComponent.prototype.displayFieldCss = function (field) {
        return {
            'has-error': this.isFieldValid(field),
            'has-feedback': this.isFieldValid(field)
        };
    };
    AddProductComponent.prototype.onSubmit = function () {
        var _this = this;
        var input;
        this.formSumitAttempt = true;
        if (this.form.valid && this.productImgUrl) {
            input = { form_data: this.form.value };
            input.form_data.user_id = this.currentUser.success.id;
            input.form_data.product_img = this.productImgUrl;
            this._productService.createProduct(input).subscribe(function (data) {
                _this.product_id = data.success;
                // localStorage.setItem('product', this.product_id);
                // this.reset();
                _this.toastr.success('Product Added Successfully', 'Success Message');
                _this.router.navigate(['/product/add-product/' + parseInt(_this.product_id)]);
            });
        }
    };
    AddProductComponent.prototype.onSubmitSubCat = function () {
        var _this = this;
        var input;
        this.formSumitAttemptSubCat = true;
        this.route.params.subscribe(function (params) {
            if (params.id) {
                _this.product_id = params.id;
                if (_this.formSubCat.valid) {
                    input = { form_data: _this.formSubCat.value };
                    input.form_data.fk_user_id = _this.currentUser.success.id;
                    input.form_data.fk_product_id = _this.product_id;
                    // console.log(input);
                    _this._productService.createProductSubCat(input).subscribe(function (data) {
                        _this.reset();
                        _this.toastr.success('Product Sub Category Added Successfully', 'Success Message');
                        _this._productService.productSubCatList(params.id).subscribe(function (data) {
                            _this.subCategories = data.success;
                            // console.log('productTypeList',this.productTypeList);
                        });
                    });
                }
            }
        });
    };
    AddProductComponent.prototype.onProductTypeSubmit = function () {
        var _this = this;
        var input;
        this.formSumitAttemptProductType = true;
        this.route.params.subscribe(function (params) {
            if (params.id) {
                _this.product_id = params.id;
                if (_this.formProductType.valid) {
                    input = { form_data: _this.formProductType.value };
                    input.form_data.fk_user_id = _this.currentUser.success.id;
                    input.form_data.fk_product_id = _this.product_id;
                    //  console.log(input);
                    _this._productService.createProductType(input).subscribe(function (data) {
                        _this.toastr.success('Product Types Added Successfully', 'Success Message');
                        _this.reset();
                        _this._productService.productTypeList(params.id).subscribe(function (data) {
                            _this.productTypeList = data.success;
                            // console.log('productTypeList',this.productTypeList);
                        });
                    });
                }
            }
        });
    };
    AddProductComponent.prototype.onSubmitAddAttr = function () {
        var _this = this;
        var input;
        this.formSumitAttemptAttr = true;
        if (this.formAttr.valid) {
            input = { form_data: this.formAttr.value };
            input.form_data.fk_user_id = this.currentUser.success.id;
            input.form_data.fk_product_id = this.product_id;
            // console.log(input);
            this._productService.addAttribute(input).subscribe(function (data) {
                _this.reset();
            });
        }
    };
    AddProductComponent.prototype.onSubmitAss = function () {
        var _this = this;
        var input;
        this.formSumitAttemptAccess = true;
        this.route.params.subscribe(function (params) {
            if (params.id) {
                _this.toastr.success('Product Added Successfully', 'Success Message');
                _this.product_id = params.id;
                if (_this.formAccess.valid) {
                    input = { form_data: _this.formAccess.value };
                    input.form_data.fk_user_id = _this.currentUser.success.id;
                    input.form_data.fk_acc_product_id = _this.product_id;
                    //console.log(input);
                    _this._productService.addProductAccess(input).subscribe(function (data) {
                        _this.reset();
                        _this._productService.productaccessList(params.id).subscribe(function (data) {
                            _this.accessData = data.success;
                            console.log('Access Data', _this.accessData);
                        });
                    });
                }
            }
        });
    };
    /* onItemSelect(item: any)
     {
   
     }
   
     onSelectAll(items: any)
     {
      
     }
   
     onDeSelectItem(item: any)
     {
        
     }
  */
    AddProductComponent.prototype.reset = function () {
        this.form.reset();
        this.formSumitAttempt = false;
        this.formSubCat.reset();
        this.formSumitAttemptSubCat = false;
        this.formProductType.reset();
        this.formSumitAttemptProductType = false;
        this.formAttr.reset();
        this.formSumitAttemptAttr = false;
        this.formAccess.reset();
        this.formSumitAttemptAccess = false;
    };
    /* public search() {
   
         this.formSumitAttempt = true;
         this._userService.searching({
             search_value: this.searchValue, dropdown_value: this.dropDownValue
         }).subscribe(
             data => {
                 //console.log(data);
                 this.userData = data.success;
                // this.reset();
             }
             );
     }
     public vendor_delete(del_id) {
   
         //  console.log(del_id);
   
         let value = confirm('Are you want to delete this vendor ?');
         // console.log(value);
         if (value) {
   
             this._userService.del_vendor(del_id).subscribe(
                 data => {
                     this.userData = data.data;
                 }
             );
         }
   
     }
     public changeStatus(user: any) {
       if(user.user_status == 0) {
         user.user_status = 1;
   
        this._userService.updateStaus(user.id).subscribe(
           data => {
             console.log('update',data);
           }
           );
       } else {
          user.user_status = 0;
       this._userService.updateStaus(user.id).subscribe(
           data => {
             console.log('update',data);
           }
           );
       }
     }*/
    AddProductComponent.prototype.changeProductTypeStatus = function (user) {
        if (user.status == 'Active') {
            user.status = 'Inactive';
            this._productService.updateProductTypeStatus(user.id).subscribe(function (data) {
                // console.log('update',data);
            });
        }
        else {
            user.status = 'Active';
            this._productService.updateProductTypeStatus(user.id).subscribe(function (data) {
                //console.log('update',data);
            });
        }
    };
    AddProductComponent.prototype.selected = function (value) {
        value.id = this.items.indexOf(value.text);
        return value;
        /*console.log('Selected value is: ', value);*/
    };
    AddProductComponent.prototype.removed = function (value) {
        console.log('Removed value is: ', value);
    };
    AddProductComponent.prototype.refreshValue = function (value) {
        this.value = value;
    };
    AddProductComponent.prototype.onUploadSuccess = function (event) {
        /*console.log('event');
        console.log(event);
        console.log(event[0].dataURL);
        console.log(event[0].name);*/
        this.productImgUrl = event[0].dataURL;
    };
    AddProductComponent.prototype.onUploadError = function (event) {
        console.log('event');
        console.log(event);
        this.productImgUrl = event[0].dataURL;
        console.log('added');
    };
    AddProductComponent.prototype.handleFileInput = function (files) {
        var _this = this;
        var file = files.item(0);
        var reader = new FileReader();
        reader.onload = function (event) {
            _this.productImgUrl = event.target.result;
        };
        reader.readAsDataURL(file);
    };
    AddProductComponent.prototype.multipleHandleFileInput = function (files) {
        var _this = this;
        var filess = [];
        for (var i = 0; i < files.length; ++i) {
            filess.push(files.item(i));
        }
        filess.forEach(function (element) {
            var reader = new FileReader();
            reader.onload = function (event) {
                _this.alternateProductImgUrl.push(event.target.result);
            };
            reader.readAsDataURL(element);
        });
    };
    AddProductComponent.prototype.multipleUpload = function () {
        var _this = this;
        this._productService.multipleUpload({ img: this.alternateProductImgUrl, fk_product_id: parseInt(this.product_id) }).subscribe(function (data) {
            _this.toastr.success('Product Alternate Images Uploaded Successfully', 'Success Message');
            _this.file = [];
        });
    };
    AddProductComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-add-product',
            template: __webpack_require__(/*! ./add-product.component.html */ "./src/app/theme/pages/default/product/add-product/add-product.component.html"),
            styles: []
        }),
        __metadata("design:paramtypes", [ngx_toastr__WEBPACK_IMPORTED_MODULE_10__["ToastrService"], _angular_router__WEBPACK_IMPORTED_MODULE_9__["ActivatedRoute"], _angular_router__WEBPACK_IMPORTED_MODULE_9__["Router"], _services_data_service__WEBPACK_IMPORTED_MODULE_2__["DataService"], _auth_services_brand_service__WEBPACK_IMPORTED_MODULE_8__["BrandService"], _auth_services_menu_service__WEBPACK_IMPORTED_MODULE_7__["MenuService"], _auth_services_category_service__WEBPACK_IMPORTED_MODULE_6__["CategoryService"], _auth_services_product_service__WEBPACK_IMPORTED_MODULE_1__["ProductService"], _auth_services_subCategory_service__WEBPACK_IMPORTED_MODULE_5__["SubCategoryService"], _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__["ScriptLoaderService"], _angular_forms__WEBPACK_IMPORTED_MODULE_4__["FormBuilder"]])
    ], AddProductComponent);
    return AddProductComponent;
}());



/***/ }),

/***/ "./src/app/theme/pages/default/product/add-product/add-product.module.ts":
/*!*******************************************************************************!*\
  !*** ./src/app/theme/pages/default/product/add-product/add-product.module.ts ***!
  \*******************************************************************************/
/*! exports provided: AddProductModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AddProductModule", function() { return AddProductModule; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/esm5/common.js");
/* harmony import */ var _default_default_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../default/default.component */ "./src/app/theme/pages/default/default.component.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/esm5/router.js");
/* harmony import */ var _layouts_layout_module__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../../../layouts/layout.module */ "./src/app/theme/layouts/layout.module.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/esm5/forms.js");
/* harmony import */ var ngx_pagination__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ngx-pagination */ "./node_modules/ngx-pagination/dist/ngx-pagination.js");
/* harmony import */ var _add_product_component__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./add-product.component */ "./src/app/theme/pages/default/product/add-product/add-product.component.ts");
/* harmony import */ var ng_multiselect_dropdown__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ng-multiselect-dropdown */ "./node_modules/ng-multiselect-dropdown/esm5/ng-multiselect-dropdown.js");
/* harmony import */ var angular_tabs_component__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! angular-tabs-component */ "./node_modules/angular-tabs-component/dist/index.js");
/* harmony import */ var ngx_quill__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ngx-quill */ "./node_modules/ngx-quill/index.js");
/* harmony import */ var ng2_select__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ng2-select */ "./node_modules/ng2-select/index.js");
/* harmony import */ var ng2_select__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(ng2_select__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var ngx_dropzone_wrapper__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ngx-dropzone-wrapper */ "./node_modules/ngx-dropzone-wrapper/dist/ngx-dropzone-wrapper.es5.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};














var currentUser = JSON.parse(localStorage.getItem('currentUser'));
var routes = [
    {
        path: "",
        component: _default_default_component__WEBPACK_IMPORTED_MODULE_2__["DefaultComponent"],
        children: [
            {
                path: "",
                component: _add_product_component__WEBPACK_IMPORTED_MODULE_7__["AddProductComponent"]
            }
        ]
    },
];
var DEFAULT_DROPZONE_CONFIG = {
    // Change this to your upload POST address:
    url: 'https://admin-api.moretolike.com/api/test',
    headers: { headers: { 'Authorization': 'Bearer ' + currentUser.token, 'Cache-Control': 'max-age=1864000, public' } },
    maxFilesize: 50,
    acceptedFiles: 'image/*'
};
var AddProductModule = /** @class */ (function () {
    function AddProductModule() {
    }
    AddProductModule = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_1__["CommonModule"], ngx_dropzone_wrapper__WEBPACK_IMPORTED_MODULE_12__["DropzoneModule"], _angular_router__WEBPACK_IMPORTED_MODULE_3__["RouterModule"].forChild(routes),
                _layouts_layout_module__WEBPACK_IMPORTED_MODULE_4__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_5__["FormsModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_5__["ReactiveFormsModule"],
                angular_tabs_component__WEBPACK_IMPORTED_MODULE_9__["TabModule"], ngx_pagination__WEBPACK_IMPORTED_MODULE_6__["NgxPaginationModule"], ng2_select__WEBPACK_IMPORTED_MODULE_11__["SelectModule"], ng_multiselect_dropdown__WEBPACK_IMPORTED_MODULE_8__["NgMultiSelectDropDownModule"].forRoot(),
                ngx_quill__WEBPACK_IMPORTED_MODULE_10__["QuillModule"],
            ],
            declarations: [_add_product_component__WEBPACK_IMPORTED_MODULE_7__["AddProductComponent"],],
            providers: [{
                    provide: ngx_dropzone_wrapper__WEBPACK_IMPORTED_MODULE_12__["DROPZONE_CONFIG"],
                    useValue: DEFAULT_DROPZONE_CONFIG
                }]
        })
    ], AddProductModule);
    return AddProductModule;
}());



/***/ })

}]);
//# sourceMappingURL=pages-default-product-add-product-add-product-module.js.map