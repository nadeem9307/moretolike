(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-dropship-dropship-module"],{

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/dropship/dropship.component.html":
/*!************************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/pages/default/dropship/dropship.component.html ***!
  \************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "\n<div class=\"m-portlet m-portlet--mobile\">\n\t\t<div class=\"m-portlet__body\">\n\n\n\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\"><i class=\"la la-gear\"></i></span>\n\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">Drop Ship</h3>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\n\n\t\t\t<div class=\"m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30\">\n\t\t\t\t<div class=\"row align-items-center\">\n\t\t\t\t\t<div class=\"col-xl-12 order-2 order-xl-1\">\n\t\t\t\t\t\t<div class=\"form-group m-form__group row align-items-center\">\n\t\t\t\t\t\t\t<div class=\"col-md-12\">\n\t\t\t\t\t\t\t\t<div class=\"m-input-icon m-input-icon--left\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__label\">\n\t\t\t\t\t\t\t\t\t\t<label class=\"m-label m-label--single\">\n\t\t\t\t\t\t\t\t\t\t\tCollection Name:\n\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__control\">\n\t\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input  m-input--solid\" id=\"collectionName\" [(ngModel)] = \"collectionName\" placeholder=\"Collection Name \" type=\"text\" name=\"collection_name\">\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t\t<div class=\"row align-items-center\">\n\t\t\t\t\t<div class=\"col-xl-12 order-2 order-xl-1\">\n\t\t\t\t\t\t<div class=\"form-group m-form__group row align-items-center\">\n\n\t\t\t\t\t\t\t<div class=\"col-md-4\">\n\t\t\t\t\t\t\t\t<div class=\"m-form__group m-form__group--inline\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__control\">\n\t\t\t\t\t\t\t\t\t\t<label class=\"m-label m-label--single\">\n\t\t\t\t\t\t\t\t\t\t\tFilter:\n\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t\t<div style=\"width: 300px; margin-bottom: 20px;\">\n\t\t\t\t\t\t\t\t\t\t  <ng-select  [multiple]=\"true\"\n\t\t\t\t\t\t\t\t\t\t              [items]=\"items\"\n\t\t\t\t\t\t\t\t\t\t              (data)=\"refreshValue($event)\"\n\t\t\t\t\t\t\t\t\t\t              bindLabel=\"code\"\n\t\t\t\t\t\t\t\t\t\t\t\t\t  bindValue=\"form.get('data')\"\n\t\t\t\t\t\t\t\t\t\t              (selected)=\"selected($event)\"[(ngModel)] = \"dropDownValue\" name=\"search_value\"\n\t\t\t\t\t\t\t\t\t\t              (removed)=\"removed($event)\"\n\t\t\t\t\t\t\t\t\t\t              placeholder=\"All categories\"></ng-select>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"d-md-none m--margin-bottom-10\"></div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"col-md-6\">\n\t\t\t\t\t\t\t\t<div class=\"m-input-icon m-input-icon--left\">\n\n\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input  m-input--solid\" id=\"generalSearch\" [(ngModel)] = \"searchValue\" placeholder=\"Search by Name \" type=\"text\" name=\"search_value\">\n\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\n\n\t\t\t\t\t\t\t<div class=\"col-md-2\">\n\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill\"(click)=\"orderFilter();\">\n\t\t\t\t\t\t\t\t\t<span>\n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-search\"></i>\n\t\t\t\t\t\t\t\t\t\t<span>\n\t\t\t\t\t\t\t\t\t\t\tSearch\n\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t\t<div class=\"m-separator m-separator--dashed d-xl-none\"></div>\n\t\t\t\t\t\t\t</div> \n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t\t\t\t\n\t\t\t<div class=\"m_datatable m-datatable m-datatable--default m-datatable--loaded\" id=\"local_data\" style=\"position: static; zoom: 1;\">\n\t\t\t\t<table class=\"m-datatable__table\" style=\"display: block; min-height: 300px; overflow-x: auto;\">\n\t\t\t\t\t<thead class=\"m-datatable__head\">\n\t\t\t\t\t\t<tr class=\"m-datatable__row\" style=\"left: 0px;\">\n\n\t\t\t\t\t\t\t<th data-field=\"Product SKU\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\">\n\t\t\t\t\t\t\t\t<div class=\"m-checkbox-list\">\n\t\t\t\t\t\t\t\t\t<label class=\"m-checkbox\">\n\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" (click)=\"checkAll(productData)\" [(ngModel)] = \"checkAllList\">\n\t\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"Product SKU\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\"><span style=\"width: 110px;\">Product SKU</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"Product Name\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 100px;\">Product Name</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"Product Brand\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\"><span style=\"width: 110px;\">Product Brand</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"Product Actual Price / MRP\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Product Actual Price / MRP</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"Shareable Product\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Product Image</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"Status\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Status</span>\n\t\t\t\t\t\t\t</th>\n\n\n\t\t\t\t\t\t\t<th data-field=\"Actions\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Actions</span>\n\t\t\t\t\t\t\t</th>\n\t\t\t\t\t\t</tr>\n\t\t\t\t\t</thead>\n\t\t\t\t\t<tbody class=\"m-datatable__body\" style=\"\">\n\t\t\t\t\t\t<tr data-row=\"0\" *ngFor=\"let product of productData | paginate: { itemsPerPage: 10, currentPage: p }\" class=\"m-datatable__row\" style=\"left: 0px;\">\n\n\t\t\t\t\t\t\t\t<td data-field=\"ShipName\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-checkbox-list\">\n\t\t\t\t\t\t\t\t\t\t<label class=\"m-checkbox\">\n\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [(ngModel)]=\"product.id\" name=\"{{ product.sku }}\" id=\"{{product.sku}}\" (change)=\"isAnswerProvided($event, product)\">\n\t\t\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t</div> \n\t\t\t\t\t\t\t\t</td>\n\n\t\t\t\t\t\t\t\t<td data-field=\"ShipName\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\">{{product.sku}}</span>\n\t\t\t\t\t\t\t\t</td>\n\n\t\t\t\t\t\t\t\t<td data-field=\"Currency\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 100px;\">{{product.product_name}}</span>\n\t\t\t\t\t\t\t\t</td>\n\n\t\t\t\t\t\t\t\t<td data-field=\"ShipAddress\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\">{{product.name}}</span>\n\t\t\t\t\t\t\t\t</td>\n\n\t\t\t\t\t\t\t\t<td data-field=\"ShipDate\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\">{{product.actual_price}}</span>\n\t\t\t\t\t\t\t\t</td>\n\n\t\t\t\t\t\t\t\t<td data-field=\"Latitude\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\"><img src=\"{{ImgUrl}}{{product.product_img}}\" style=\"width: 70px;\n    \t\t\theight: 60px;\"></span>\n\t\t\t\t\t\t\t\t</td>\n\n\t\t\t\t\t\t\t\t<td data-field=\"Status\"  class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\" (click) = \"changeStatus(product)\">\n\t\t\t\t\t\t\t\t\t\t<span class=\"m-badge--wide m-badge\" [ngClass]=\"{'m-badge--success':  product.status == 'Active', 'm-badge--danger':  product.status != 'Active'}\" title=\"Status\" >{{product.status}}\n\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<td data-field=\"Actions\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"overflow: visible; position: relative; width: 110px;\">\n\n\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill\" title=\"Edit\" routerLink=\"/product/edit-product/{{product.product_id}}\"> \n\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-edit\"></i>  \n\t\t\t\t\t\t\t\t\t\t</a> \n\n\n\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill\" title=\"View\" routerLink=\"/product/view-product/{{product.product_id}}\"> \n\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-eye\"></i>  \n\t\t\t\t\t\t\t\t\t\t</a> \n\n\t\t\t\t\t\t\t\t\t\t<!--<app-side-bar-toggle [sideBarValue]=\"user\"></app-side-bar-toggle> -->\n\n  \t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill\" title=\"Delete\" (click)=\"productDelete(product.product_id)\"> \n\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-trash\"></i>  \n\t\t\t\t\t\t\t\t\t\t</a>\t\n\t\t\t\t\t\t\t\t\t</span>\t\n\t\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t\t</tr>\n\t\t\t\t\t\t</tbody>\n\t\t\t\t\t</table>\n\t\t\t\t\t<pagination-controls (pageChange)=\"p = $event\"></pagination-controls> \n\t\t\t\t</div>\n\t\t\t\t<div class=\"col-md-2\">\n\t\t\t\t\t<button type=\"button\" class=\"btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill\"(click)=\"addToCollection(selectedPro);\">\n\t\t\t\t\t\t<span>\n\t\t\t\t\t\t\t<i class=\"la la-calculator\"></i>\n\t\t\t\t\t\t\t<span>\n\t\t\t\t\t\t\t\tAdd To Collection\n\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t</span>\n\t\t\t\t\t</button>\n\t\t\t\t\t<div class=\"m-separator m-separator--dashed d-xl-none\"></div>\n\t\t\t\t</div>\n\t\t</div>\n</div>"

/***/ }),

/***/ "./src/app/theme/pages/default/dropship/dropship.component.ts":
/*!********************************************************************!*\
  !*** ./src/app/theme/pages/default/dropship/dropship.component.ts ***!
  \********************************************************************/
/*! exports provided: DropshipComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "DropshipComponent", function() { return DropshipComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _auth_services_dropship_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../auth/_services/dropship.service */ "./src/app/auth/_services/dropship.service.ts");
/* harmony import */ var _auth_services_category_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../auth/_services/category.service */ "./src/app/auth/_services/category.service.ts");
/* harmony import */ var ngx_toastr__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ngx-toastr */ "./node_modules/ngx-toastr/fesm5/ngx-toastr.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");







var DropshipComponent = /** @class */ (function () {
    function DropshipComponent(imgBaseUrl, router, toastr, _categoryService, _dropshipService) {
        this.imgBaseUrl = imgBaseUrl;
        this.router = router;
        this.toastr = toastr;
        this._categoryService = _categoryService;
        this._dropshipService = _dropshipService;
        this.searchValue = "";
        this.dropDownValue = '';
        this.brandData = '';
        this.p = 1;
        this.productData = '';
        this.checkAllList = '';
        this.selectedPro = [];
        this.inputData = [];
        this.collectionName = '';
        /*public items:Array<string> = ['Amsterdam', 'Antwerp', 'Athens', 'Barcelona',
        'Berlin', 'Birmingham', 'Bradford', 'Bremen', 'Brussels', 'Bucharest',
        'Budapest', 'Cologne', 'Copenhagen', 'Dortmund', 'Dresden', 'Dublin', 'Düsseldorf',
        'Essen', 'Frankfurt', 'Genoa', 'Glasgow', 'Gothenburg', 'Hamburg', 'Hannover',
        'Helsinki', 'Leeds', 'Leipzig', 'Lisbon', 'Łódź', 'London', 'Kraków', 'Madrid',
        'Málaga', 'Manchester', 'Marseille', 'Milan', 'Munich', 'Naples', 'Palermo',
        'Paris', 'Poznań', 'Prague', 'Riga', 'Rome', 'Rotterdam', 'Seville', 'Sheffield',
        'Sofia', 'Stockholm', 'Stuttgart', 'The Hague', 'Turin', 'Valencia', 'Vienna',
        'Vilnius', 'Warsaw', 'Wrocław', 'Zagreb', 'Zaragoza'];*/
        this.items = ['Amsterdam', 'Antwerp'];
        this.value = ['Athens'];
        this._disabledV = '0';
        this.disabled = false;
    }
    Object.defineProperty(DropshipComponent.prototype, "disabledV", {
        get: function () {
            return this._disabledV;
        },
        set: function (value) {
            this._disabledV = value;
            this.disabled = this._disabledV === '1';
        },
        enumerable: true,
        configurable: true
    });
    DropshipComponent.prototype.selected = function (value) {
        value.id = this.items.indexOf(value.text);
        return value;
        /*console.log('Selected value is: ', value);*/
    };
    DropshipComponent.prototype.removed = function (value) {
        console.log('Removed value is: ', value);
    };
    DropshipComponent.prototype.refreshValue = function (value) {
        this.value = value;
    };
    DropshipComponent.prototype.itemsToString = function (value) {
        if (value === void 0) { value = []; }
        return value
            .map(function (item) {
            return item.text;
        }).join(',');
    };
    DropshipComponent.prototype.ngOnInit = function () {
        var _this = this;
        /*user permission*/
        var currentUser = JSON.parse(localStorage.getItem('currentUser'));
        var permission = currentUser.success.permission;
        if (permission.dropship_add != 1) {
            this.toastr.error('You have not permission to visit this page.', 'Error Message');
            this.router.navigate(['/']);
        }
        /*user permission*/
        // localStorage.setItem('section', 'dropship');
        this.ImgUrl = this.imgBaseUrl._imgBaseUrl;
        this._dropshipService.getAll().subscribe(function (data) {
            // console.log(data);
            _this.dropshipData = data.success;
        });
        this._categoryService.getAll().subscribe(function (data) {
            _this.categoryData = data.success;
            //this.items = data.success;
            var num = [];
            _this.categoryData.forEach(function (category) {
                num[category.id] = category.category_name;
            });
            _this.items = num;
            //this.items.push()
            console.log('this.items');
            console.log(_this.items);
        });
        // console.log("hello");
    };
    DropshipComponent.prototype.search = function () {
        var _this = this;
        this._dropshipService.searching({ search_value: this.searchValue, dropdown_value: this.dropDownValue }).subscribe(function (data) {
            console.log(data);
            _this.dropshipData = data.success;
        });
    };
    DropshipComponent.prototype.dropship_delete = function (del_id) {
        var _this = this;
        console.log(del_id);
        var value = confirm('Are you want to delete this dropship ?');
        if (value) {
            this._dropshipService.del_dropship(del_id).subscribe(function (data) {
                _this.dropshipData = data.data;
            });
        }
    };
    DropshipComponent.prototype.changeStatus = function (dropship) {
        if (dropship.dropship_status == 'Active') {
            dropship.dropship_status = 'Inactive';
            this._dropshipService.updateStatus(dropship.id).subscribe(function (data) {
                console.log('update', data);
            });
        }
        else {
            dropship.dropship_status = 'Active';
            this._dropshipService.updateStatus(dropship.id).subscribe(function (data) {
                console.log('update', data);
            });
        }
    };
    DropshipComponent.prototype.orderFilter = function () {
        var _this = this;
        var loggedUserId = JSON.parse(localStorage.getItem('currentUser'));
        this._dropshipService.filter({ search_value: this.searchValue, dropdown_value: this.dropDownValue, loggedUserId: loggedUserId.success.id, loggedUserRole: loggedUserId.success.role }).subscribe(function (data) {
            _this.productData = data.success;
        });
    };
    DropshipComponent.prototype.checkAll = function (productData) {
        var loggedUserId = JSON.parse(localStorage.getItem('currentUser'));
    };
    DropshipComponent.prototype.isAnswerProvided = function (event, product) {
        if (this.selectedPro.indexOf(product.product_id) == -1) {
            this.selectedPro.push(product.product_id);
        }
        else {
            this.selectedPro.splice(this.selectedPro.indexOf(product.product_id), 1);
        }
    };
    DropshipComponent.prototype.addToCollection = function (selectedPro) {
        var _this = this;
        var loggedUserId = JSON.parse(localStorage.getItem('currentUser'));
        this.inputData = { 'products_data': selectedPro, 'user_id': loggedUserId.success.id, 'collection_name': this.collectionName };
        console.log('inputData');
        console.log(this.inputData);
        this._dropshipService.createCollection(this.inputData).subscribe(function (data) {
            _this.toastr.success('Product Added Successfully', 'Success Message');
        }, function (error) {
            _this.toastr.error('Please Enter Valid data', 'Error Message');
        });
    };
    DropshipComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: 'app-dropship',
            template: __webpack_require__(/*! raw-loader!./dropship.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/dropship/dropship.component.html"),
        }),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_services_script_loader_service__WEBPACK_IMPORTED_MODULE_6__["ScriptLoaderService"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["Router"], ngx_toastr__WEBPACK_IMPORTED_MODULE_4__["ToastrService"], _auth_services_category_service__WEBPACK_IMPORTED_MODULE_3__["CategoryService"], _auth_services_dropship_service__WEBPACK_IMPORTED_MODULE_2__["DropshipService"]])
    ], DropshipComponent);
    return DropshipComponent;
}());



/***/ }),

/***/ "./src/app/theme/pages/default/dropship/dropship.module.ts":
/*!*****************************************************************!*\
  !*** ./src/app/theme/pages/default/dropship/dropship.module.ts ***!
  \*****************************************************************/
/*! exports provided: DropshipModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "DropshipModule", function() { return DropshipModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/fesm5/common.js");
/* harmony import */ var _dropship_dropship_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../dropship/dropship.component */ "./src/app/theme/pages/default/dropship/dropship.component.ts");
/* harmony import */ var _default_default_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../default/default.component */ "./src/app/theme/pages/default/default.component.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var _layouts_layout_module__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../../layouts/layout.module */ "./src/app/theme/layouts/layout.module.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var ngx_pagination__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ngx-pagination */ "./node_modules/ngx-pagination/dist/ngx-pagination.js");
/* harmony import */ var ng2_select__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ng2-select */ "./node_modules/ng2-select/index.js");
/* harmony import */ var ng2_select__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(ng2_select__WEBPACK_IMPORTED_MODULE_9__);










var routes = [
    {
        path: "",
        component: _default_default_component__WEBPACK_IMPORTED_MODULE_4__["DefaultComponent"],
        children: [
            {
                path: "",
                component: _dropship_dropship_component__WEBPACK_IMPORTED_MODULE_3__["DropshipComponent"]
            }
        ]
    },
];
var DropshipModule = /** @class */ (function () {
    function DropshipModule() {
    }
    DropshipModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["RouterModule"].forChild(routes),
                _layouts_layout_module__WEBPACK_IMPORTED_MODULE_6__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_7__["FormsModule"], ngx_pagination__WEBPACK_IMPORTED_MODULE_8__["NgxPaginationModule"], ng2_select__WEBPACK_IMPORTED_MODULE_9__["SelectModule"],
            ],
            declarations: [_dropship_dropship_component__WEBPACK_IMPORTED_MODULE_3__["DropshipComponent"]]
        })
    ], DropshipModule);
    return DropshipModule;
}());



/***/ })

}]);
//# sourceMappingURL=pages-default-dropship-dropship-module-es5.js.map