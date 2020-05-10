(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-slider-slider-list-slider-list-module"],{

/***/ "./src/app/theme/pages/default/slider/slider-list/slider-list.component.html":
/*!***********************************************************************************!*\
  !*** ./src/app/theme/pages/default/slider/slider-list/slider-list.component.html ***!
  \***********************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "\t\n<div class=\"m-portlet m-portlet--mobile\">\n\t\t<div class=\"m-portlet__body\">\n\n\n\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\"><i class=\"la la-gear\"></i></span>\n\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">Banner List </h3>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\n\n\t\t\t<div class=\"m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30\">\n\t\t\t\t<div class=\"row align-items-center\">\n\t\t\t\t\t<div class=\"col-xl-12 order-2 order-xl-1\">\n\t\t\t\t\t\t<div class=\"form-group m-form__group row align-items-center\">\n\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\"><i class=\"la la-gear\"></i></span>\n\t\t\t\t\t\t\t<a routerLink=\"/slider/add-slider\" class=\"m-badge--wide m-badge m-badge--success\">Add Slider</a>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t\t\t\t\n\t\t\t<div class=\"m_datatable m-datatable m-datatable--default m-datatable--loaded\" id=\"local_data\" style=\"position: static; zoom: 1;\">\n\t\t\t\t<table class=\"m-datatable__table\" style=\"display: block; min-height: 300px; overflow-x: auto;\">\n\t\t\t\t\t<thead class=\"m-datatable__head\">\n\t\t\t\t\t\t<tr class=\"m-datatable__row\" style=\"left: 0px;\">\n\n\t\t\t\t\t\t\t<th data-field=\"ShipName\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\"><span style=\"width: 70px; height: 60px\">Slider Image</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"ShipName\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\"><span style=\"width: 110px;\">Tab Title</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"ShipName\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\"><span style=\"width: 110px;\">Left Title</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"ShipName\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\"><span style=\"width: 110px;\">Product name</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"Status\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Status</span>\n\t\t\t\t\t\t\t</th>\n\n\n\t\t\t\t\t\t\t<!-- <th data-field=\"Actions\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Actions</span>\n\t\t\t\t\t\t\t</th> -->\n\t\t\t\t\t\t\t\n\t\t\t\t\t\t</tr>\n\t\t\t\t\t</thead>\n\t\t\t\t\t<tbody class=\"m-datatable__body\" style=\"\">\n\t\t\t\t\t\t<tr data-row=\"0\" *ngFor=\"let banner of brandData | paginate: {itemsPerPage: 10, currentPage: p}\" class=\"m-datatable__row\" style=\"left: 0px;\">\n\n\n\t\t\t\t\t\t\t\t<td data-field=\"Latitude\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\"><img src=\"{{ImgUrl}}{{banner.product_img}}\" style=\"width: 70px;\n    \t\t\theight: 60px;\"></span>\n\t\t\t\t\t\t\t\t</td>\n\n\t\t\t\t\t\t\t\t<td data-field=\"Latitude\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\">{{banner.tab_title}}</span>\n\t\t\t\t\t\t\t\t</td>\n\n\t\t\t\t\t\t\t\t<td data-field=\"Latitude\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\">{{banner.left_title}}</span>\n\t\t\t\t\t\t\t\t</td>\n\n\t\t\t\t\t\t\t\t<td data-field=\"Latitude\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\">{{banner.product_name}}</span>\n\t\t\t\t\t\t\t\t</td>\n\n\t\t\t\t\t\t\t\t<!-- <td data-field=\"Latitude\" class=\"m-datatable__cell\" ng-init=\"brandLogo = {{brand.brand_img}\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\">{{brandLogo}}</span>\n\t\t\t\t\t\t\t\t</td> -->\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<td data-field=\"Status\"  class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<!-- <span style=\"width: 110px;\" (click) = \"changeBannerStatus(banner)\">\n\t\t\t\t\t\t\t\t\t\t<span class=\"m-badge--wide m-badge\" [ngClass]=\"{'m-badge--success':  banner.status == 'Active', 'm-badge--danger':  banner.status != 'Active'}\" >{{banner.status}}\n\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t</span> -->\n\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill\" title=\"Delete\" (click)=\"slider_delete(banner.id)\"> <i class=\"la la-trash\"></i>  \n\t\t\t\t\t\t\t\t\t</a>\t\t\n\t\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t\t\t<!-- \n\t\t\t\t\t\t\t\t<td data-field=\"Actions\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"overflow: visible; position: relative; width: 110px;\">\t\n\n\n\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill\" title=\"Edit\" routerLink =\"/brand/brand-edit/{{brand.id}}\"> <i class=\"la la-edit\"></i> </a> \n\n\t\t\t\t\t\t\t\t\t\t&nbsp;\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill\" title=\"Delete\" (click)=\"brand_delete(brand.id)\"> <i class=\"la la-trash\"></i>  \n\t\t\t\t\t\t\t\t\t\t</a>\t\t \t\t\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</td> -->\n\t\t\t\t\t\t\t</tr>\n\n\t\t\t\t\t\t</tbody>\n\t\t\t\t\t</table>\n\t\t\t\t\t<pagination-controls (pageChange)=\"p = $event\"></pagination-controls> \n\t\t\t\t</div>\n\t\t</div>\n</div>"

/***/ }),

/***/ "./src/app/theme/pages/default/slider/slider-list/slider-list.component.ts":
/*!*********************************************************************************!*\
  !*** ./src/app/theme/pages/default/slider/slider-list/slider-list.component.ts ***!
  \*********************************************************************************/
/*! exports provided: SliderListComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "SliderListComponent", function() { return SliderListComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _auth_services_banner_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../../../../auth/_services/banner.service */ "./src/app/auth/_services/banner.service.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/esm5/forms.js");
/* harmony import */ var _services_data_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../../_services/data.service */ "./src/app/_services/data.service.ts");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../../../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");
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




// import { NotificationsService } from 'angular4-notify';



var SliderListComponent = /** @class */ (function () {
    function SliderListComponent(router, imgBaseUrl, toastr, _bannerService, _dataService, formBuilder) {
        this.router = router;
        this.imgBaseUrl = imgBaseUrl;
        this.toastr = toastr;
        this._bannerService = _bannerService;
        this._dataService = _dataService;
        this.formBuilder = formBuilder;
        this.searchValue = '';
        this.dropDownValue = '';
        this.selectedStatus = '';
        this.dataSaved = false;
        this.saveMsg = '';
        this.p = 1;
    }
    SliderListComponent.prototype.ngOnInit = function () {
        var _this = this;
        /*user permission*/
        var currentUser = JSON.parse(localStorage.getItem('currentUser'));
        var permission = currentUser.success.permission;
        if (permission.website_setting != 1) {
            this.toastr.error('You have not permission to visit this page.', 'Error Message');
            this.router.navigate(['/']);
        }
        /*user permission*/
        // this.notificationsService.addInfo('Brand Added Successfully');
        this._dataService.setloaderState(false);
        this._dataService.setactiveMenu('brand');
        this.ImgUrl = this.imgBaseUrl._imgBaseUrl;
        localStorage.setItem('section', 'brand');
        this._bannerService.getAllSlider().subscribe(function (data) {
            _this.brandData = data.banner;
        });
    };
    SliderListComponent.prototype.slider_delete = function (del_id) {
        var _this = this;
        console.log(del_id);
        var value = confirm('Are u want to delete this brand?');
        if (value) {
            this._bannerService.sliderDelete(del_id).subscribe(function (data) {
                _this.brandData = data.banner;
            });
        }
    };
    SliderListComponent.prototype.changeBannerStatus = function (banner) {
        console.log(banner);
        if (banner.status == 'Active') {
            banner.status = 'Inactive';
            this._bannerService.updateStatus(banner.pk_banner_id).subscribe(function (data) {
            });
        }
        else {
            banner.status = 'Active';
            this._bannerService.updateStatus(banner.pk_banner_id).subscribe(function (data) {
            });
        }
    };
    SliderListComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-slider-list',
            template: __webpack_require__(/*! ./slider-list.component.html */ "./src/app/theme/pages/default/slider/slider-list/slider-list.component.html"),
            styles: []
        }),
        __metadata("design:paramtypes", [_angular_router__WEBPACK_IMPORTED_MODULE_5__["Router"], _services_script_loader_service__WEBPACK_IMPORTED_MODULE_4__["ScriptLoaderService"], ngx_toastr__WEBPACK_IMPORTED_MODULE_6__["ToastrService"], _auth_services_banner_service__WEBPACK_IMPORTED_MODULE_1__["BannerService"], _services_data_service__WEBPACK_IMPORTED_MODULE_3__["DataService"], _angular_forms__WEBPACK_IMPORTED_MODULE_2__["FormBuilder"]])
    ], SliderListComponent);
    return SliderListComponent;
}());



/***/ }),

/***/ "./src/app/theme/pages/default/slider/slider-list/slider-list.module.ts":
/*!******************************************************************************!*\
  !*** ./src/app/theme/pages/default/slider/slider-list/slider-list.module.ts ***!
  \******************************************************************************/
/*! exports provided: SliderListModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "SliderListModule", function() { return SliderListModule; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/esm5/common.js");
/* harmony import */ var _slider_list_slider_list_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../slider-list/slider-list.component */ "./src/app/theme/pages/default/slider/slider-list/slider-list.component.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/esm5/router.js");
/* harmony import */ var _layouts_layout_module__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../../../layouts/layout.module */ "./src/app/theme/layouts/layout.module.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/esm5/forms.js");
/* harmony import */ var _default_default_component__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../../default/default.component */ "./src/app/theme/pages/default/default.component.ts");
/* harmony import */ var ngx_pagination__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ngx-pagination */ "./node_modules/ngx-pagination/dist/ngx-pagination.js");
/* harmony import */ var ngx_quill__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ngx-quill */ "./node_modules/ngx-quill/index.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};









var routes = [
    {
        path: "",
        component: _default_default_component__WEBPACK_IMPORTED_MODULE_6__["DefaultComponent"],
        children: [
            {
                path: "",
                component: _slider_list_slider_list_component__WEBPACK_IMPORTED_MODULE_2__["SliderListComponent"]
            }
        ]
    },
];
var SliderListModule = /** @class */ (function () {
    function SliderListModule() {
    }
    SliderListModule = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_1__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_3__["RouterModule"].forChild(routes),
                _layouts_layout_module__WEBPACK_IMPORTED_MODULE_4__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_5__["FormsModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_5__["ReactiveFormsModule"], ngx_pagination__WEBPACK_IMPORTED_MODULE_7__["NgxPaginationModule"], ngx_quill__WEBPACK_IMPORTED_MODULE_8__["QuillModule"],
            ],
            declarations: [_slider_list_slider_list_component__WEBPACK_IMPORTED_MODULE_2__["SliderListComponent"]]
        })
    ], SliderListModule);
    return SliderListModule;
}());



/***/ })

}]);
//# sourceMappingURL=pages-default-slider-slider-list-slider-list-module.js.map