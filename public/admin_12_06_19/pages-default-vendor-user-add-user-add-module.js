(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-vendor-user-add-user-add-module"],{

/***/ "./src/app/theme/pages/default/vendor/user-add/user-add.component.html":
/*!*****************************************************************************!*\
  !*** ./src/app/theme/pages/default/vendor/user-add/user-add.component.html ***!
  \*****************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<!-- {{vendorDetails.f_name}} -->\n\n<div class=\"m-content\">\n\t<div class=\"row\">\n\t\t<div class=\"col-lg-12\">\n\t\t\t<div class=\"m-portlet\">\n\t\t\t\t<div class=\"row\">\n\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon\" routerLink=\"/user/user-list\" style=\"color:blue; cursor: pointer\"><i class=\"fa fa-arrow-left\"></i></span>\n\t\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">Add Member</h3>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t\t\n\t\t\t\t<form class=\"m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed\" [formGroup] =\"form\">\n\t\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\t\t<div class=\"form-group m-form__group row\">\n\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t<div class=\"col-lg-4\">\n\t\t\t\t\t\t\t\t<label>\n\t\t\t\t\t\t\t\t\tUsername\n\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t<div class=\"input-group m-input-group m-input-group--square\">\n\t\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">\n\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">\n\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-user\"></i>\n\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input\" placeholder=\"Enter username\" type=\"text\" formControlName=\"username\">\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"form-group m-form__group row\">\n\t\t\t\t\t\t\t<div class=\"col-lg-4\">\n\t\t\t\t\t\t\t\t<label class=\"\">\n\t\t\t\t\t\t\t\t\tEmail\n\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t<input class=\"form-control m-input\" placeholder=\"Enter enter email\" type=\"email\" formControlName=\"email\">\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"col-lg-4\">\n\t\t\t\t\t\t\t\t<label class=\"\">\n\t\t\t\t\t\t\t\t\tContact No\n\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t<div class=\"m-input-icon m-input-icon--right\">\n\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input\" placeholder=\"Enter contact no\" type=\"text\" formControlName=\"contact\">\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"col-lg-4\">\n\t\t\t\t\t\t\t\t<label>\n\t\t\t\t\t\t\t\t\tCountry\n\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t<div class=\"m-input-icon m-input-icon--right\">\n\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input\" placeholder=\"Enter country\" type=\"text\" formControlName=\"country\">\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t<div class=\"form-group m-form__group row\">\n\n\t\t\t\t\t\t\t<div class=\"col-lg-4\">\n\t\t\t\t\t\t\t\t<label>\n\t\t\t\t\t\t\t\t\tState\n\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t<div class=\"m-input-icon m-input-icon--right\">\n\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input\" placeholder=\"Enter state\" type=\"text\" formControlName=\"state\">\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t<div class=\"col-lg-4\">\n\t\t\t\t\t\t\t\t<label>\n\t\t\t\t\t\t\t\t\tCity\n\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t<div class=\"m-input-icon m-input-icon--right\">\n\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input\" placeholder=\"Enter city\" type=\"text\" formControlName=\"city\">\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t<div class=\"col-lg-4\">\n\t\t\t\t\t\t\t\t<label>\n\t\t\t\t\t\t\t\t\tAddress\n\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t<div class=\"m-input-icon m-input-icon--right\">\n\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input\" placeholder=\"Enter address\" type=\"text\" formControlName=\"address\">\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t<div class=\"form-group m-form__group row\">\n\n\t\t\t\t\t\t\t<div class=\"col-lg-4\">\n\t\t\t\t\t\t\t\t<label>\n\t\t\t\t\t\t\t\t\tZipcode\n\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t<div class=\"m-input-icon m-input-icon--right\">\n\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input\" placeholder=\"Enter Zipcode\" type=\"text\" formControlName=\"zipcode\">\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t<div class=\"col-lg-4\">\n\t\t\t\t\t\t\t\t<label>\n\t\t\t\t\t\t\t\t\tFacebook\n\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t<div class=\"m-input-icon m-input-icon--right\">\n\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input\" placeholder=\"Enter Facebook \" type=\"text\" formControlName=\"facebook\">\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t<div class=\"col-lg-4\">\n\t\t\t\t\t\t\t\t<label>\n\t\t\t\t\t\t\t\t\tGoogle +\n\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t<div class=\"m-input-icon m-input-icon--right\">\n\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input\" placeholder=\"Enter Google + \" type=\"text\" formControlName=\"google_plus\">\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\n\n\t\t\t\t\t\t<div class=\"form-group m-form__group row\">\n\n\t\t\t\t\t\t\t<div class=\"col-lg-4\">\n\t\t\t\t\t\t\t\t<label>\n\t\t\t\t\t\t\t\t\tTwitter\n\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t<div class=\"m-input-icon m-input-icon--right\">\n\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input\" placeholder=\"Enter twitter\" type=\"text\" formControlName=\"twitter\">\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t<div class=\"col-lg-4\">\n\t\t\t\t\t\t\t\t<label>\n\t\t\t\t\t\t\t\t\tLinkedin\n\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t<div class=\"m-input-icon m-input-icon--right\">\n\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input\" placeholder=\"Enter linkedin \" type=\"text\" formControlName=\"linkedin\">\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t<div class=\"col-lg-4\">\n\t\t\t\t\t\t\t\t<label>\n\t\t\t\t\t\t\t\t\tYoutube\n\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t<div class=\"m-input-icon m-input-icon--right\">\n\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input\" placeholder=\"Enter youtube \" type=\"text\" formControlName=\"youtube\">\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t<div class=\"form-group m-form__group row\">\n\n\t\t\t\t\t\t\t<div class=\"col-lg-4\">\n\t\t\t\t\t\t\t\t<label>\n\t\t\t\t\t\t\t\t\tInstagram\n\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t<div class=\"m-input-icon m-input-icon--right\">\n\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input\" placeholder=\"Enter instagram\" type=\"text\" formControlName=\"instagram\">\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t<div class=\"col-lg-4\">\n\t\t\t\t\t\t\t\t<label>\n\t\t\t\t\t\t\t\t\tFlicker\n\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t<div class=\"m-input-icon m-input-icon--right\">\n\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input\" placeholder=\"Enter flicker \" type=\"text\" formControlName=\"flicker\">\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t<div class=\"col-lg-4\">\n\t\t\t\t\t\t\t\t<label>\n\t\t\t\t\t\t\t\t\tRole\n\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t<div class=\"m-input-icon m-input-icon--right\">\n\t\t\t\t\t\t\t\t\t<select class=\"form-control m-input\" formControlName=\"role\">\n\t\t\t\t\t\t\t\t\t\t<option value=\"\" >User Role</option>\n\t\t\t\t\t\t\t\t\t \t<option>support admin</option>\n\t\t\t\t\t\t\t\t\t \t<option>admin member</option>\n\t\t\t\t\t\t\t\t\t</select>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t<div class=\"form-group m-form__group row\">\n\n\t\t\t\t\t\t\t<div class=\"col-lg-4\">\n\t\t\t\t\t\t\t\t<div class=\"m-input-icon m-input-icon--right\">\n\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success\" (click)=\"onSubmit()\">\n\t\t\t\t\t\t\t\t\t\tSave\n\t\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\n\t\t\t\t\t</div>\n\t\t\t\t\n\n\t\t\t\t\t\n\t\t\t\t</form>\n\t\t\t</div>\n\t\t</div>\n\t</div>\n</div>"

/***/ }),

/***/ "./src/app/theme/pages/default/vendor/user-add/user-add.component.ts":
/*!***************************************************************************!*\
  !*** ./src/app/theme/pages/default/vendor/user-add/user-add.component.ts ***!
  \***************************************************************************/
/*! exports provided: UserAddComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "UserAddComponent", function() { return UserAddComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _auth_services_user_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../../../../auth/_services/user.service */ "./src/app/auth/_services/user.service.ts");
/* harmony import */ var _services_data_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../_services/data.service */ "./src/app/_services/data.service.ts");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/esm5/forms.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/esm5/router.js");
/* harmony import */ var ngx_toastr__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ngx-toastr */ "./node_modules/ngx-toastr/fesm5/ngx-toastr.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};







var UserAddComponent = /** @class */ (function () {
    function UserAddComponent(imgBaseUrl, formBuilder, router, toastr, route, _dataService, _userService) {
        this.imgBaseUrl = imgBaseUrl;
        this.formBuilder = formBuilder;
        this.router = router;
        this.toastr = toastr;
        this.route = route;
        this._dataService = _dataService;
        this._userService = _userService;
        this.vendorDetails = {};
        this.userRole = {};
        this.isReadOnly = true;
    }
    UserAddComponent.prototype.ngOnInit = function () {
        var _this = this;
        /*user permission*/
        var currentUser = JSON.parse(localStorage.getItem('currentUser'));
        var permission = currentUser.success.permission;
        if (permission.subscription_list != 1) {
            this.toastr.error('You have not permission to visit this page.', 'Error Message');
            this.router.navigate(['/']);
        }
        /*user permission*/
        this.form = this.formBuilder.group({
            username: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            email: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            contact: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            country: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            state: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            city: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            address: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            zipcode: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            facebook: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            google_plus: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            twitter: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            linkedin: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            youtube: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            instagram: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            flicker: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            role: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required]
        });
        this._userService.getUserRoleAll().subscribe(function (data) {
            _this.userRole = data.success;
        });
        this.ImgUrl = this.imgBaseUrl._imgBaseUrl;
        this._dataService.setloaderState(false);
        this._dataService.setactiveMenu('vendor');
        this.route.params.subscribe(function (params) {
            localStorage.setItem('section', 'vendor');
            _this._userService.getById(params.id).subscribe(function (data) {
                _this.vendorDetails = data.success;
            });
        });
    };
    UserAddComponent.prototype.isFieldValid = function (field) {
        return ((!this.form.get(field).valid && this.form.get(field).touched) ||
            (this.form.get(field).untouched && this.formSumitAttempt));
    };
    UserAddComponent.prototype.displayFieldCss = function (field) {
        return {
            'has-error': this.isFieldValid(field),
            'has-feedback': this.isFieldValid(field)
        };
    };
    UserAddComponent.prototype.onSubmit = function () {
        var _this = this;
        var input;
        this.formSumitAttempt = true;
        if (this.form.valid) {
            input = { form_data: this.form.value };
            this._userService.create(input).subscribe(function (data) {
                _this.toastr.success('User Added Successfully', 'Success Message');
                _this.reset();
            }, function (error) {
                console.log(error);
                console.log('error');
            });
        }
    };
    UserAddComponent.prototype.reset = function () {
        this.form.reset();
    };
    UserAddComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-user-add',
            template: __webpack_require__(/*! ./user-add.component.html */ "./src/app/theme/pages/default/vendor/user-add/user-add.component.html"),
            styles: []
        }),
        __metadata("design:paramtypes", [_services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__["ScriptLoaderService"], _angular_forms__WEBPACK_IMPORTED_MODULE_4__["FormBuilder"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["Router"], ngx_toastr__WEBPACK_IMPORTED_MODULE_6__["ToastrService"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["ActivatedRoute"], _services_data_service__WEBPACK_IMPORTED_MODULE_2__["DataService"], _auth_services_user_service__WEBPACK_IMPORTED_MODULE_1__["UserService"]])
    ], UserAddComponent);
    return UserAddComponent;
}());



/***/ }),

/***/ "./src/app/theme/pages/default/vendor/user-add/user-add.module.ts":
/*!************************************************************************!*\
  !*** ./src/app/theme/pages/default/vendor/user-add/user-add.module.ts ***!
  \************************************************************************/
/*! exports provided: UserAddModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "UserAddModule", function() { return UserAddModule; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/esm5/common.js");
/* harmony import */ var _user_add_user_add_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../user-add/user-add.component */ "./src/app/theme/pages/default/vendor/user-add/user-add.component.ts");
/* harmony import */ var _default_default_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../default/default.component */ "./src/app/theme/pages/default/default.component.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/esm5/router.js");
/* harmony import */ var _layouts_layout_module__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../../../layouts/layout.module */ "./src/app/theme/layouts/layout.module.ts");
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
        component: _default_default_component__WEBPACK_IMPORTED_MODULE_3__["DefaultComponent"],
        children: [
            {
                path: "",
                component: _user_add_user_add_component__WEBPACK_IMPORTED_MODULE_2__["UserAddComponent"]
            }
        ]
    },
];
var UserAddModule = /** @class */ (function () {
    function UserAddModule() {
    }
    UserAddModule = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_1__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["RouterModule"].forChild(routes),
                _layouts_layout_module__WEBPACK_IMPORTED_MODULE_5__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_6__["FormsModule"], ngx_pagination__WEBPACK_IMPORTED_MODULE_7__["NgxPaginationModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_6__["ReactiveFormsModule"],
            ],
            declarations: [_user_add_user_add_component__WEBPACK_IMPORTED_MODULE_2__["UserAddComponent"]],
        })
    ], UserAddModule);
    return UserAddModule;
}());



/***/ })

}]);
//# sourceMappingURL=pages-default-vendor-user-add-user-add-module.js.map