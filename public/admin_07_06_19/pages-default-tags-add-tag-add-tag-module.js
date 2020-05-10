(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-tags-add-tag-add-tag-module"],{

/***/ "./src/app/theme/pages/default/tags/add-tag/add-tag.component.html":
/*!*************************************************************************!*\
  !*** ./src/app/theme/pages/default/tags/add-tag/add-tag.component.html ***!
  \*************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ "./src/app/theme/pages/default/tags/add-tag/add-tag.component.ts":
/*!***********************************************************************!*\
  !*** ./src/app/theme/pages/default/tags/add-tag/add-tag.component.ts ***!
  \***********************************************************************/
/*! exports provided: AddTagComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AddTagComponent", function() { return AddTagComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _auth_services_product_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../../../../auth/_services/product.service */ "./src/app/auth/_services/product.service.ts");
/* harmony import */ var _services_data_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../_services/data.service */ "./src/app/_services/data.service.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/esm5/forms.js");
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


var AddTagComponent = /** @class */ (function () {
    function AddTagComponent(formBuilder, _dataService, _productService) {
        this.formBuilder = formBuilder;
        this._dataService = _dataService;
        this._productService = _productService;
        this.searchValue = "";
        this.dropDownValue = '';
        this.noOfPage = '';
        this.attributeData = '';
        this.selectedStatus = '';
        this.user_id = '';
        this.p = 1;
    }
    AddTagComponent.prototype.ngOnInit = function () {
        this.form = this.formBuilder.group({
            tag_name: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_3__["Validators"].required],
            description: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_3__["Validators"].required],
            status: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_3__["Validators"].required]
        });
        if (JSON.parse(localStorage.getItem('product'))) {
            this.product_id = JSON.parse(localStorage.getItem('product'));
        }
        this.currentUser = JSON.parse(localStorage.getItem('currentUser'));
        this.user_id = this.currentUser.success.id;
    };
    AddTagComponent.prototype.isFieldValid = function (field) {
        return (
        //console.log('this.form.get',this.form.get(field));
        (!this.form.get(field).valid && this.form.get(field).touched) ||
            (this.form.get(field).untouched && this.formSumitAttempt));
    };
    AddTagComponent.prototype.displayFieldCss = function (field) {
        return {
            'has-error': this.isFieldValid(field),
            'has-feedback': this.isFieldValid(field)
        };
    };
    AddTagComponent.prototype.onSubmit = function () {
        var _this = this;
        this.formSumitAttempt = true;
        if (this.form.valid) {
            var that = this;
            console.log(this.product_id);
            this._productService.addTag({ form_data: this.form.value, fk_user_id: this.user_id }).subscribe(function (data) {
                //this.attributeData = data.success;
                console.log(data);
                _this.attributeData = data.data;
                // that.form.c;
                _this.reset();
            });
            /*this._productService.addTag({ form_data: this.form.value, fk_user_id: this.user_id, fk_product_id: parseInt(this.product_id) }).subscribe(
                data => {
                    //this.attributeData = data.success;
                    console.log(data);
                    this.attributeData = data.data;
                    // that.form.c;
                    this.reset();
                }
            );*/
        }
    };
    AddTagComponent.prototype.reset = function () {
        if (this.selectedStatus != '') {
            this.form.reset();
            this.selectedStatus = '';
            this.formSumitAttempt = false;
        }
    };
    AddTagComponent.prototype.search = function () {
        this.formSumitAttempt = true;
    };
    AddTagComponent.prototype.vendor_delete = function (del_id) {
    };
    AddTagComponent.prototype.changeStatus = function (user) {
    };
    AddTagComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-add-tag-list',
            template: __webpack_require__(/*! ./add-tag.component.html */ "./src/app/theme/pages/default/tags/add-tag/add-tag.component.html"),
            styles: []
        }),
        __metadata("design:paramtypes", [_angular_forms__WEBPACK_IMPORTED_MODULE_3__["FormBuilder"], _services_data_service__WEBPACK_IMPORTED_MODULE_2__["DataService"], _auth_services_product_service__WEBPACK_IMPORTED_MODULE_1__["ProductService"]])
    ], AddTagComponent);
    return AddTagComponent;
}());



/***/ }),

/***/ "./src/app/theme/pages/default/tags/add-tag/add-tag.module.ts":
/*!********************************************************************!*\
  !*** ./src/app/theme/pages/default/tags/add-tag/add-tag.module.ts ***!
  \********************************************************************/
/*! exports provided: AddTagModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AddTagModule", function() { return AddTagModule; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/esm5/common.js");
/* harmony import */ var _default_default_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../default/default.component */ "./src/app/theme/pages/default/default.component.ts");
/* harmony import */ var _layouts_layout_module__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../layouts/layout.module */ "./src/app/theme/layouts/layout.module.ts");
/* harmony import */ var _add_tag_add_tag_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../add-tag/add-tag.component */ "./src/app/theme/pages/default/tags/add-tag/add-tag.component.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/esm5/router.js");
/* harmony import */ var ngx_pagination__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ngx-pagination */ "./node_modules/ngx-pagination/dist/ngx-pagination.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/esm5/forms.js");
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
                component: _add_tag_add_tag_component__WEBPACK_IMPORTED_MODULE_4__["AddTagComponent"]
            }
        ]
    },
];
var AddTagModule = /** @class */ (function () {
    function AddTagModule() {
    }
    AddTagModule = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_1__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["RouterModule"].forChild(routes),
                _layouts_layout_module__WEBPACK_IMPORTED_MODULE_3__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_7__["FormsModule"], ngx_pagination__WEBPACK_IMPORTED_MODULE_6__["NgxPaginationModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_7__["ReactiveFormsModule"],
            ],
            declarations: [_add_tag_add_tag_component__WEBPACK_IMPORTED_MODULE_4__["AddTagComponent"]],
        })
    ], AddTagModule);
    return AddTagModule;
}());



/***/ })

}]);
//# sourceMappingURL=pages-default-tags-add-tag-add-tag-module.js.map