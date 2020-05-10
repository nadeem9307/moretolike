(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-color-add-color-add-color-module"],{

/***/ "./src/app/theme/pages/default/color/add-color/add-color.component.html":
/*!******************************************************************************!*\
  !*** ./src/app/theme/pages/default/color/add-color/add-color.component.html ***!
  \******************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ "./src/app/theme/pages/default/color/add-color/add-color.component.ts":
/*!****************************************************************************!*\
  !*** ./src/app/theme/pages/default/color/add-color/add-color.component.ts ***!
  \****************************************************************************/
/*! exports provided: AddColorComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AddColorComponent", function() { return AddColorComponent; });
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




var AddColorComponent = /** @class */ (function () {
    function AddColorComponent(toastr, route, router, formBuilder, _dataService, _productService) {
        this.toastr = toastr;
        this.route = route;
        this.router = router;
        this.formBuilder = formBuilder;
        this._dataService = _dataService;
        this._productService = _productService;
        this.searchValue = "";
        this.dropDownValue = '';
        this.noOfPage = '';
        this.attributeData = '';
        this.selectedStatus = '';
        this.p = 1;
    }
    AddColorComponent.prototype.ngOnInit = function () {
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
    };
    AddColorComponent.prototype.isFieldValid = function (field) {
        return (
        //console.log('this.form.get',this.form.get(field));
        (!this.form.get(field).valid && this.form.get(field).touched) ||
            (this.form.get(field).untouched && this.formSumitAttempt));
    };
    AddColorComponent.prototype.displayFieldCss = function (field) {
        return {
            'has-error': this.isFieldValid(field),
            'has-feedback': this.isFieldValid(field)
        };
    };
    AddColorComponent.prototype.onSubmit = function () {
        var _this = this;
        this.formSumitAttempt = true;
        this.route.params.subscribe(function (params) {
            if (params.id) {
                _this.product_id = params.id;
                if (_this.form.valid) {
                    _this._productService.addColor({ form_data: _this.form.value, fk_user_id: _this.currentUser.success.id, fk_product_id: parseInt(_this.product_id) }).subscribe(function (data) {
                        //this.attributeData = data.success;
                        console.log(data);
                        _this.toastr.success('Product Color Added Successfully', 'Success Message');
                        _this.attributeData = data.data;
                        // that.form.c;
                        _this.reset();
                    });
                }
            }
        });
    };
    AddColorComponent.prototype.reset = function () {
        if (this.selectedStatus != '') {
            this.form.reset();
            this.selectedStatus = '';
            this.formSumitAttempt = false;
        }
    };
    AddColorComponent.prototype.search = function () {
        this.formSumitAttempt = true;
    };
    AddColorComponent.prototype.vendor_delete = function (del_id) {
    };
    AddColorComponent.prototype.changeStatus = function (user) {
    };
    AddColorComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-add-color-list',
            template: __webpack_require__(/*! ./add-color.component.html */ "./src/app/theme/pages/default/color/add-color/add-color.component.html"),
            styles: []
        }),
        __metadata("design:paramtypes", [ngx_toastr__WEBPACK_IMPORTED_MODULE_5__["ToastrService"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["ActivatedRoute"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["Router"], _angular_forms__WEBPACK_IMPORTED_MODULE_3__["FormBuilder"], _services_data_service__WEBPACK_IMPORTED_MODULE_2__["DataService"], _auth_services_product_service__WEBPACK_IMPORTED_MODULE_1__["ProductService"]])
    ], AddColorComponent);
    return AddColorComponent;
}());



/***/ }),

/***/ "./src/app/theme/pages/default/color/add-color/add-color.module.ts":
/*!*************************************************************************!*\
  !*** ./src/app/theme/pages/default/color/add-color/add-color.module.ts ***!
  \*************************************************************************/
/*! exports provided: AddColorModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AddColorModule", function() { return AddColorModule; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/esm5/common.js");
/* harmony import */ var _layouts_layout_module__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../layouts/layout.module */ "./src/app/theme/layouts/layout.module.ts");
/* harmony import */ var _default_default_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../default/default.component */ "./src/app/theme/pages/default/default.component.ts");
/* harmony import */ var _add_color_add_color_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../add-color/add-color.component */ "./src/app/theme/pages/default/color/add-color/add-color.component.ts");
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
        component: _default_default_component__WEBPACK_IMPORTED_MODULE_3__["DefaultComponent"],
        children: [
            {
                path: "",
                component: _add_color_add_color_component__WEBPACK_IMPORTED_MODULE_4__["AddColorComponent"]
            }
        ]
    },
];
var AddColorModule = /** @class */ (function () {
    function AddColorModule() {
    }
    AddColorModule = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_1__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["RouterModule"].forChild(routes),
                _layouts_layout_module__WEBPACK_IMPORTED_MODULE_2__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_7__["FormsModule"], ngx_pagination__WEBPACK_IMPORTED_MODULE_6__["NgxPaginationModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_7__["ReactiveFormsModule"],
            ],
            declarations: [_add_color_add_color_component__WEBPACK_IMPORTED_MODULE_4__["AddColorComponent"]],
        })
    ], AddColorModule);
    return AddColorModule;
}());



/***/ })

}]);
//# sourceMappingURL=pages-default-color-add-color-add-color-module.js.map