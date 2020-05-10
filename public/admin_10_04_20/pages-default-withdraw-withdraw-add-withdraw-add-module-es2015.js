(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-withdraw-withdraw-add-withdraw-add-module"],{

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/withdraw/withdraw-add/withdraw-add.component.html":
/*!*****************************************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/pages/default/withdraw/withdraw-add/withdraw-add.component.html ***!
  \*****************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"m-portlet m-portlet--mobile\">\n\t\t<div class=\"m-portlet__body\">\n\t\t\t<div class=\"col-lg-12\">\n\t\t\t\t<div class=\"m-portlet\">\n\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\">\n\t\t\t\t\t\t\t\t\t<i class=\"la la-gear\"></i>\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">Add Withdraw</h3>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n</div>\n\n"

/***/ }),

/***/ "./src/app/theme/pages/default/withdraw/withdraw-add/withdraw-add.component.ts":
/*!*************************************************************************************!*\
  !*** ./src/app/theme/pages/default/withdraw/withdraw-add/withdraw-add.component.ts ***!
  \*************************************************************************************/
/*! exports provided: WithdrawAddComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "WithdrawAddComponent", function() { return WithdrawAddComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _auth_services_banner_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../auth/_services/banner.service */ "./src/app/auth/_services/banner.service.ts");
/* harmony import */ var _auth_services_menu_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../../auth/_services/menu.service */ "./src/app/auth/_services/menu.service.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm2015/forms.js");
/* harmony import */ var ngx_toastr__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ngx-toastr */ "./node_modules/ngx-toastr/fesm2015/ngx-toastr.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");







let WithdrawAddComponent = class WithdrawAddComponent {
    constructor(toastr, router, _bannerService, _menuService, formBuilder) {
        this.toastr = toastr;
        this.router = router;
        this._bannerService = _bannerService;
        this._menuService = _menuService;
        this.formBuilder = formBuilder;
        this.menuData = "";
    }
    ngOnInit() {
        /*user permission*/
        let currentUser = JSON.parse(localStorage.getItem('currentUser'));
        let permission = currentUser.success.permission;
        if (permission.withdraw_add != 1) {
            this.toastr.error('You have not permission to visit this page.', 'Error Message');
            this.router.navigate(['/']);
        }
        /*user permission*/
        this.menuData = JSON.parse(localStorage.getItem('menu'));
    }
};
WithdrawAddComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-withdraw-add',
        template: __webpack_require__(/*! raw-loader!./withdraw-add.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/withdraw/withdraw-add/withdraw-add.component.html")
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [ngx_toastr__WEBPACK_IMPORTED_MODULE_5__["ToastrService"], _angular_router__WEBPACK_IMPORTED_MODULE_6__["Router"], _auth_services_banner_service__WEBPACK_IMPORTED_MODULE_2__["BannerService"], _auth_services_menu_service__WEBPACK_IMPORTED_MODULE_3__["MenuService"], _angular_forms__WEBPACK_IMPORTED_MODULE_4__["FormBuilder"]])
], WithdrawAddComponent);



/***/ }),

/***/ "./src/app/theme/pages/default/withdraw/withdraw-add/withdraw-add.module.ts":
/*!**********************************************************************************!*\
  !*** ./src/app/theme/pages/default/withdraw/withdraw-add/withdraw-add.module.ts ***!
  \**********************************************************************************/
/*! exports provided: WithdrawAddModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "WithdrawAddModule", function() { return WithdrawAddModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/fesm2015/common.js");
/* harmony import */ var _withdraw_add_withdraw_add_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../withdraw-add/withdraw-add.component */ "./src/app/theme/pages/default/withdraw/withdraw-add/withdraw-add.component.ts");
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
                component: _withdraw_add_withdraw_add_component__WEBPACK_IMPORTED_MODULE_3__["WithdrawAddComponent"]
            }
        ]
    },
];
let WithdrawAddModule = class WithdrawAddModule {
};
WithdrawAddModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        imports: [
            _angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["RouterModule"].forChild(routes), ngx_quill__WEBPACK_IMPORTED_MODULE_10__["QuillModule"],
            _layouts_layout_module__WEBPACK_IMPORTED_MODULE_5__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_6__["FormsModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_6__["ReactiveFormsModule"], ngx_pagination__WEBPACK_IMPORTED_MODULE_8__["NgxPaginationModule"], ng_multiselect_dropdown__WEBPACK_IMPORTED_MODULE_9__["NgMultiSelectDropDownModule"],
        ],
        declarations: [_withdraw_add_withdraw_add_component__WEBPACK_IMPORTED_MODULE_3__["WithdrawAddComponent"]]
    })
], WithdrawAddModule);



/***/ })

}]);
//# sourceMappingURL=pages-default-withdraw-withdraw-add-withdraw-add-module-es2015.js.map