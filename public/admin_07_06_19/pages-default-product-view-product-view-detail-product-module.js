(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-product-view-product-view-detail-product-module"],{

/***/ "./node_modules/ng-multiselect-dropdown/esm5/ng-multiselect-dropdown.js":
/*!******************************************************************************!*\
  !*** ./node_modules/ng-multiselect-dropdown/esm5/ng-multiselect-dropdown.js ***!
  \******************************************************************************/
/*! exports provided: MultiSelectComponent, NgMultiSelectDropDownModule, ɵb, ɵc, ɵa */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "MultiSelectComponent", function() { return MultiSelectComponent; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "NgMultiSelectDropDownModule", function() { return NgMultiSelectDropDownModule; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ɵb", function() { return ClickOutsideDirective; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ɵc", function() { return ListFilterPipe; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ɵa", function() { return DROPDOWN_CONTROL_VALUE_ACCESSOR; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/esm5/forms.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/esm5/common.js");




var ListItem = /** @class */ (function () {
    function ListItem(source) {
        if (typeof source === 'string') {
            this.id = this.text = source;
        }
        if (typeof source === 'object') {
            this.id = source.id;
            this.text = source.text;
        }
    }
    return ListItem;
}());
var DROPDOWN_CONTROL_VALUE_ACCESSOR = {
    provide: _angular_forms__WEBPACK_IMPORTED_MODULE_1__["NG_VALUE_ACCESSOR"],
    useExisting: Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["forwardRef"])(function () { return MultiSelectComponent; }),
    multi: true
};
var noop = function () { };
var MultiSelectComponent = /** @class */ (function () {
    function MultiSelectComponent(cdr) {
        this.cdr = cdr;
        this._data = [];
        this.selectedItems = [];
        this.isDropdownOpen = false;
        this._placeholder = 'Select';
        this.filter = new ListItem(this.data);
        this.defaultSettings = {
            singleSelection: false,
            idField: 'id',
            textField: 'text',
            enableCheckAll: true,
            selectAllText: 'Select All',
            unSelectAllText: 'UnSelect All',
            allowSearchFilter: false,
            limitSelection: -1,
            clearSearchFilter: true,
            maxHeight: 197,
            itemsShowLimit: 999999999999,
            searchPlaceholderText: 'Search',
            closeDropDownOnSelection: false
        };
        this.disabled = false;
        this.onFilterChange = new _angular_core__WEBPACK_IMPORTED_MODULE_0__["EventEmitter"]();
        this.onSelect = new _angular_core__WEBPACK_IMPORTED_MODULE_0__["EventEmitter"]();
        this.onDeSelect = new _angular_core__WEBPACK_IMPORTED_MODULE_0__["EventEmitter"]();
        this.onSelectAll = new _angular_core__WEBPACK_IMPORTED_MODULE_0__["EventEmitter"]();
        this.onDeSelectAll = new _angular_core__WEBPACK_IMPORTED_MODULE_0__["EventEmitter"]();
        this.onTouchedCallback = noop;
        this.onChangeCallback = noop;
    }
    Object.defineProperty(MultiSelectComponent.prototype, "placeholder", {
        set: function (value) {
            if (value) {
                this._placeholder = value;
            }
            else {
                this._placeholder = 'Select';
            }
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(MultiSelectComponent.prototype, "settings", {
        set: function (value) {
            if (value) {
                this._settings = Object.assign(this.defaultSettings, value);
            }
            else {
                this._settings = Object.assign(this.defaultSettings);
            }
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(MultiSelectComponent.prototype, "data", {
        set: function (value) {
            var _this = this;
            if (!value) {
                this._data = [];
            }
            else {
                var _items = value.filter(function (item) {
                    if (typeof item === 'string' || (typeof item === 'object' && item && item[_this._settings.idField] && item[_this._settings.textField])) {
                        return item;
                    }
                });
                this._data = _items.map(function (item) { return typeof item === 'string'
                    ? new ListItem(item)
                    : new ListItem({
                        id: item[_this._settings.idField],
                        text: item[_this._settings.textField]
                    }); });
            }
        },
        enumerable: true,
        configurable: true
    });
    MultiSelectComponent.prototype.onFilterTextChange = function ($event) {
        this.onFilterChange.emit($event);
    };
    MultiSelectComponent.prototype.onItemClick = function ($event, item) {
        if (this.disabled) {
            return false;
        }
        var found = this.isSelected(item);
        var allowAdd = this._settings.limitSelection === -1 || (this._settings.limitSelection > 0 && this.selectedItems.length < this._settings.limitSelection);
        if (!found) {
            if (allowAdd) {
                this.addSelected(item);
            }
        }
        else {
            this.removeSelected(item);
        }
        if (this._settings.singleSelection && this._settings.closeDropDownOnSelection) {
            this.closeDropdown();
        }
    };
    MultiSelectComponent.prototype.writeValue = function (value) {
        var _this = this;
        if (value !== undefined && value !== null && value.length > 0) {
            if (this._settings.singleSelection) {
                try {
                    if (value.length >= 1) {
                        var firstItem = value[0];
                        this.selectedItems = [
                            typeof firstItem === 'string'
                                ? new ListItem(firstItem)
                                : new ListItem({
                                    id: firstItem[this._settings.idField],
                                    text: firstItem[this._settings.textField]
                                })
                        ];
                    }
                }
                catch (e) {
                }
            }
            else {
                var _data = value.map(function (item) { return typeof item === 'string'
                    ? new ListItem(item)
                    : new ListItem({
                        id: item[_this._settings.idField],
                        text: item[_this._settings.textField]
                    }); });
                if (this._settings.limitSelection > 0) {
                    this.selectedItems = _data.splice(0, this._settings.limitSelection);
                }
                else {
                    this.selectedItems = _data;
                }
            }
        }
        else {
            this.selectedItems = [];
        }
        this.onChangeCallback(value);
    };
    MultiSelectComponent.prototype.registerOnChange = function (fn) {
        this.onChangeCallback = fn;
    };
    MultiSelectComponent.prototype.registerOnTouched = function (fn) {
        this.onTouchedCallback = fn;
    };
    MultiSelectComponent.prototype.onTouched = function () {
        this.closeDropdown();
        this.onTouchedCallback();
    };
    MultiSelectComponent.prototype.trackByFn = function (index, item) {
        return item.id;
    };
    MultiSelectComponent.prototype.isSelected = function (clickedItem) {
        var found = false;
        this.selectedItems.forEach(function (item) {
            if (clickedItem.id === item.id) {
                found = true;
            }
        });
        return found;
    };
    MultiSelectComponent.prototype.isLimitSelectionReached = function () {
        return this._settings.limitSelection === this.selectedItems.length;
    };
    MultiSelectComponent.prototype.isAllItemsSelected = function () {
        return this._data.length === this.selectedItems.length;
    };
    MultiSelectComponent.prototype.showButton = function () {
        if (!this._settings.singleSelection) {
            if (this._settings.limitSelection > 0) {
                return false;
            }
            return true;
        }
        else {
            return false;
        }
    };
    MultiSelectComponent.prototype.itemShowRemaining = function () {
        return this.selectedItems.length - Number(this._settings.itemsShowLimit);
    };
    MultiSelectComponent.prototype.addSelected = function (item) {
        if (this._settings.singleSelection) {
            this.selectedItems = [];
            this.selectedItems.push(item);
        }
        else {
            this.selectedItems.push(item);
        }
        this.onChangeCallback(this.emittedValue(this.selectedItems));
        this.onSelect.emit(this.emittedValue(item));
    };
    MultiSelectComponent.prototype.removeSelected = function (itemSel) {
        var _this = this;
        this.selectedItems.forEach(function (item) {
            if (itemSel.id === item.id) {
                _this.selectedItems.splice(_this.selectedItems.indexOf(item), 1);
            }
        });
        this.onChangeCallback(this.emittedValue(this.selectedItems));
        this.onDeSelect.emit(this.emittedValue(itemSel));
    };
    MultiSelectComponent.prototype.emittedValue = function (val) {
        var _this = this;
        var selected = [];
        if (Array.isArray(val)) {
            val.map(function (item) {
                if (item.id === item.text) {
                    selected.push(item.text);
                }
                else {
                    selected.push(_this.objectify(item));
                }
            });
        }
        else {
            if (val) {
                if (val.id === val.text) {
                    return val.text;
                }
                else {
                    return this.objectify(val);
                }
            }
        }
        return selected;
    };
    MultiSelectComponent.prototype.objectify = function (val) {
        var obj = {};
        obj[this._settings.idField] = val.id;
        obj[this._settings.textField] = val.text;
        return obj;
    };
    MultiSelectComponent.prototype.toggleDropdown = function (evt) {
        evt.preventDefault();
        if (this.disabled && this._settings.singleSelection) {
            return;
        }
        this.isDropdownOpen = !this.isDropdownOpen;
    };
    MultiSelectComponent.prototype.closeDropdown = function () {
        this.isDropdownOpen = false;
        if (this._settings.clearSearchFilter) {
            this.filter.text = '';
        }
    };
    MultiSelectComponent.prototype.toggleSelectAll = function () {
        if (this.disabled) {
            return false;
        }
        if (!this.isAllItemsSelected()) {
            this.selectedItems = this._data.slice();
            this.onSelectAll.emit(this.emittedValue(this.selectedItems));
        }
        else {
            this.selectedItems = [];
            this.onDeSelectAll.emit(this.emittedValue(this.selectedItems));
        }
        this.onChangeCallback(this.emittedValue(this.selectedItems));
    };
    return MultiSelectComponent;
}());
MultiSelectComponent.decorators = [
    { type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"], args: [{
                selector: 'ng-multiselect-dropdown',
                template: "<div tabindex=\"=0\" (blur)=\"onTouched()\" class=\"multiselect-dropdown\" (clickOutside)=\"closeDropdown()\">\n  <div [class.disabled]=\"disabled\">\n    <span tabindex=\"-1\" class=\"dropdown-btn\" (click)=\"toggleDropdown($event)\">\n      <span *ngIf=\"selectedItems.length == 0\">{{_placeholder}}</span>\n      <span class=\"selected-item\" *ngFor=\"let item of selectedItems;trackBy: trackByFn;let k = index\" [hidden]=\"k > _settings.itemsShowLimit-1\">\n        {{item.text}}\n        <a style=\"padding-top:2px;padding-left:2px;color:white\" (click)=\"onItemClick($event,item)\">x</a>\n      </span>\n      <span style=\"float:right !important;padding-right:4px\">\n        <span style=\"padding-right: 6px;\" *ngIf=\"itemShowRemaining()>0\">+{{itemShowRemaining()}}</span>\n        <span [ngClass]=\"isDropdownOpen ? 'dropdown-up' : 'dropdown-down'\"></span>\n      </span>\n    </span>\n  </div>\n    <div class=\"dropdown-list\" [hidden]=\"!isDropdownOpen\">\n         <ul *ngIf=\"_settings.enableCheckAll && !_settings.limitSelection\">\n            <li (click)=\"toggleSelectAll()\" *ngIf=\"_data.length > 0 && !_settings.singleSelection\" class=\"multiselect-item-checkbox\" style=\"border-bottom: 1px solid #ccc;padding:10px\">\n                <input type=\"checkbox\" [checked]=\"isAllItemsSelected()\" [disabled]=\"disabled || isLimitSelectionReached()\"/>\n                <div>{{!isAllItemsSelected() ? _settings.selectAllText : _settings.unSelectAllText}}</div>\n            </li>\n             <li class=\"filter-textbox\" *ngIf=\"_settings.allowSearchFilter\">\n                <input type=\"text\" [readOnly]=\"disabled\" [placeholder]=\"_settings.searchPlaceholderText\" [(ngModel)]=\"filter.text\"  (ngModelChange)=\"onFilterTextChange($event)\">\n            </li>\n        </ul>\n         <ul [style.maxHeight] = \"_settings.maxHeight+'px'\">\n            <li *ngFor=\"let item of _data | ng2ListFilter:filter; let i = index;\" (click)=\"onItemClick($event,item)\" class=\"multiselect-item-checkbox\">\n                <input type=\"checkbox\" [checked]=\"isSelected(item)\" [disabled]=\"disabled || (isLimitSelectionReached() && !isSelected(item))\"/>\n                <div>{{item.text}}</div>\n            </li>\n            <li *ngIf=\"_data.length == 0\">\n                <h5>No data available</h5>\n            </li>\n        </ul>\n    </div>\n  <div class=\"dropdown-list\" [hidden]=\"!isDropdownOpen\">\n    <ul>\n      <li (click)=\"toggleSelectAll()\" *ngIf=\"showButton()\" class=\"multiselect-item-checkbox\" style=\"border-bottom: 1px solid #ccc;padding:10px\">\n        <input type=\"checkbox\" [checked]=\"isAllItemsSelected()\" [disabled]=\"disabled\" />\n        <div class='select-all-text'>{{!isAllItemsSelected() ? _settings.selectAllText : _settings.unSelectAllText}}</div>\n      </li>\n      <li class=\"filter-textbox\" *ngIf=\"_settings.allowSearchFilter\">\n        <input type=\"text\" [readOnly]=\"disabled\" [placeholder]=\"_settings.searchPlaceholderText\" [(ngModel)]=\"filter.text\">\n      </li>\n    </ul>\n    <ul [style.maxHeight]=\"_settings.maxHeight+'px'\">\n      <li *ngFor=\"let item of _data | ng2ListFilter:filter; let i = index;\" (click)=\"onItemClick($event,item)\" class=\"multiselect-item-checkbox\">\n        <input type=\"checkbox\" [checked]=\"isSelected(item)\" [disabled]=\"disabled || (isLimitSelectionReached() && !isSelected(item))\"\n        />\n        <div>{{item.text}}</div>\n      </li>\n      <li *ngIf=\"_data.length == 0\">\n        <h5>No data available</h5>\n      </li>\n    </ul>\n  </div>\n</div>\n",
                styles: [".multiselect-dropdown{position:relative;width:100%}.multiselect-dropdown .dropdown-btn{display:inline-block;border:1px solid #adadad;width:100%;padding:6px 12px;margin-bottom:0;font-size:14px;font-weight:400;line-height:1.52857143;text-align:left;vertical-align:middle;cursor:pointer;background-image:none;border-radius:4px}.multiselect-dropdown .dropdown-btn .selected-item{border:1px solid #337ab7;margin-right:4px;background:#337ab7;padding:0 5px;color:#fff;border-radius:2px;float:left}.multiselect-dropdown .dropdown-btn .selected-item a{text-decoration:none}.multiselect-dropdown .dropdown-btn .selected-item:hover{-webkit-box-shadow:1px 1px #959595;box-shadow:1px 1px #959595}.multiselect-dropdown .dropdown-btn .dropdown-down{display:inline-block;top:10px;width:0;height:0;border-top:10px solid #adadad;border-left:10px solid transparent;border-right:10px solid transparent}.multiselect-dropdown .dropdown-btn .dropdown-up{display:inline-block;width:0;height:0;border-bottom:10px solid #adadad;border-left:10px solid transparent;border-right:10px solid transparent}.multiselect-dropdown .disabled>span{background-color:#eceeef}.dropdown-list{position:absolute;padding-top:6px;width:100%;z-index:9999;border:1px solid #ccc;border-radius:3px;background:#fff;margin-top:10px;-webkit-box-shadow:0 1px 5px #959595;box-shadow:0 1px 5px #959595}.dropdown-list ul{padding:0;list-style:none;overflow:auto;margin:0}.dropdown-list li{padding:6px 10px;cursor:pointer;text-align:left}.dropdown-list .filter-textbox{border-bottom:1px solid #ccc;position:relative;padding:10px}.dropdown-list .filter-textbox input{border:0;width:100%;padding:0 0 0 26px}.dropdown-list .filter-textbox input:focus{outline:0}.multiselect-item-checkbox input[type=checkbox]{border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.multiselect-item-checkbox input[type=checkbox]:focus+div:before,.multiselect-item-checkbox input[type=checkbox]:hover+div:before{border-color:#337ab7;background-color:#f2f2f2}.multiselect-item-checkbox input[type=checkbox]:active+div:before{-webkit-transition-duration:0s;transition-duration:0s}.multiselect-item-checkbox input[type=checkbox]+div{position:relative;padding-left:2em;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;cursor:pointer;margin:0;color:#000}.multiselect-item-checkbox input[type=checkbox]+div:before{-webkit-box-sizing:content-box;box-sizing:content-box;content:'';color:#337ab7;position:absolute;top:50%;left:0;width:14px;height:14px;margin-top:-9px;border:2px solid #337ab7;text-align:center;-webkit-transition:all .4s ease;transition:all .4s ease}.multiselect-item-checkbox input[type=checkbox]+div:after{-webkit-box-sizing:content-box;box-sizing:content-box;content:'';position:absolute;-webkit-transform:scale(0);transform:scale(0);-webkit-transform-origin:50%;transform-origin:50%;-webkit-transition:-webkit-transform .2s ease-out;transition:-webkit-transform .2s ease-out;transition:transform .2s ease-out;transition:transform .2s ease-out,-webkit-transform .2s ease-out;background-color:transparent;top:50%;left:4px;width:8px;height:3px;margin-top:-4px;border-style:solid;border-color:#fff;border-width:0 0 3px 3px;-o-border-image:none;border-image:none;-webkit-transform:rotate(-45deg) scale(0);transform:rotate(-45deg) scale(0)}.multiselect-item-checkbox input[type=checkbox]:disabled+div:before{border-color:#ccc}.multiselect-item-checkbox input[type=checkbox]:disabled:focus+div:before .multiselect-item-checkbox input[type=checkbox]:disabled:hover+div:before{background-color:inherit}.multiselect-item-checkbox input[type=checkbox]:disabled:checked+div:before{background-color:#ccc}.multiselect-item-checkbox input[type=checkbox]:checked+div:after{content:'';-webkit-transition:-webkit-transform .2s ease-out;transition:-webkit-transform .2s ease-out;transition:transform .2s ease-out;transition:transform .2s ease-out,-webkit-transform .2s ease-out;-webkit-transform:rotate(-45deg) scale(1);transform:rotate(-45deg) scale(1)}.multiselect-item-checkbox input[type=checkbox]:checked+div:before{-webkit-animation:.2s ease-in borderscale;animation:.2s ease-in borderscale;background:#337ab7}@-webkit-keyframes borderscale{50%{-webkit-box-shadow:0 0 0 2px #337ab7;box-shadow:0 0 0 2px #337ab7}}@keyframes borderscale{50%{-webkit-box-shadow:0 0 0 2px #337ab7;box-shadow:0 0 0 2px #337ab7}}"],
                providers: [DROPDOWN_CONTROL_VALUE_ACCESSOR],
                changeDetection: _angular_core__WEBPACK_IMPORTED_MODULE_0__["ChangeDetectionStrategy"].OnPush
            },] },
];
MultiSelectComponent.ctorParameters = function () { return [
    { type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["ChangeDetectorRef"], },
]; };
MultiSelectComponent.propDecorators = {
    "placeholder": [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"] },],
    "disabled": [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"] },],
    "settings": [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"] },],
    "data": [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"] },],
    "onFilterChange": [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Output"], args: ['onFilterChange',] },],
    "onSelect": [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Output"], args: ['onSelect',] },],
    "onDeSelect": [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Output"], args: ['onDeSelect',] },],
    "onSelectAll": [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Output"], args: ['onSelectAll',] },],
    "onDeSelectAll": [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Output"], args: ['onDeSelectAll',] },],
    "onTouched": [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["HostListener"], args: ['blur',] },],
};
var ClickOutsideDirective = /** @class */ (function () {
    function ClickOutsideDirective(_elementRef) {
        this._elementRef = _elementRef;
        this.clickOutside = new _angular_core__WEBPACK_IMPORTED_MODULE_0__["EventEmitter"]();
    }
    ClickOutsideDirective.prototype.onClick = function (event, targetElement) {
        if (!targetElement) {
            return;
        }
        var clickedInside = this._elementRef.nativeElement.contains(targetElement);
        if (!clickedInside) {
            this.clickOutside.emit(event);
        }
    };
    return ClickOutsideDirective;
}());
ClickOutsideDirective.decorators = [
    { type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Directive"], args: [{
                selector: '[clickOutside]'
            },] },
];
ClickOutsideDirective.ctorParameters = function () { return [
    { type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["ElementRef"], },
]; };
ClickOutsideDirective.propDecorators = {
    "clickOutside": [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Output"] },],
    "onClick": [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["HostListener"], args: ['document:click', ['$event', '$event.target'],] },],
};
var ListFilterPipe = /** @class */ (function () {
    function ListFilterPipe() {
    }
    ListFilterPipe.prototype.transform = function (items, filter) {
        var _this = this;
        if (!items || !filter) {
            return items;
        }
        return items.filter(function (item) { return _this.applyFilter(item, filter); });
    };
    ListFilterPipe.prototype.applyFilter = function (item, filter) {
        return !(filter.text && item.text && item.text.toLowerCase().indexOf(filter.text.toLowerCase()) === -1);
    };
    return ListFilterPipe;
}());
ListFilterPipe.decorators = [
    { type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Pipe"], args: [{
                name: 'ng2ListFilter',
                pure: false
            },] },
];
var NgMultiSelectDropDownModule = /** @class */ (function () {
    function NgMultiSelectDropDownModule() {
    }
    NgMultiSelectDropDownModule.forRoot = function () {
        return {
            ngModule: NgMultiSelectDropDownModule
        };
    };
    return NgMultiSelectDropDownModule;
}());
NgMultiSelectDropDownModule.decorators = [
    { type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["NgModule"], args: [{
                imports: [_angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_1__["FormsModule"]],
                declarations: [MultiSelectComponent, ClickOutsideDirective, ListFilterPipe],
                exports: [MultiSelectComponent]
            },] },
];


//# sourceMappingURL=ng-multiselect-dropdown.js.map


/***/ }),

/***/ "./src/app/theme/pages/default/product/view-product/view-detail-product.component.html":
/*!*********************************************************************************************!*\
  !*** ./src/app/theme/pages/default/product/view-product/view-detail-product.component.html ***!
  \*********************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"m-portlet m-portlet--mobile\">\n\t\t\t\t<div class=\"m-portlet__body\">\n\n\t\t\t\t\t<form class=\"m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed\" [formGroup] =\"form\">\n\t\t\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\" >\n\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-gear\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"m-portlet__head-text\">View New Product </h1>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t<!-- <div class=\"col-md-6\">\n\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control m-input\" formControlName=\"product_state\" (change)=\"changeProductState($event)\" [(ngModel)] = \"selectedProductType\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" >Single Product</option>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">Group Product</option>\n\t\t\t\t\t\t\t\t\t\t\t\t</select>\n\t\t\t\t\t\t\t\t\t\t</div> --> \n\n\t\t\t\t\t\t\t\t\t\t<!-- <div class=\"col-lg-4\">\n\t\t\t\t\t\t\t\t\t\t\t<a routerLink=\"/product/shareable-product\" class=\"btn btn-success\">Add Shareable Product</a>\n\t\t\t\t\t\t\t\t\t\t</div> -->\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\" >\n\t\t\t\t\t\t\t\t<div class=\"col-lg-12\" >\n\t\t\t\t\t\t\t\t\t<div class=\"m-portlet\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-gear\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tGeneral\n\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__body\">\n\n\n\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input\"\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t placeholder=\"Enter Sku\" type=\"hidden\" id=\"\" formControlName=\"id\" [(ngModel)] = \"id\">\n\n\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\" >\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for =\"['form_data']\" for =\"sku\" class=\"control-label required\">Sku\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input\"\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t placeholder=\"Enter Sku\" type=\"text\" id=\"\" formControlName=\"sku\" [(ngModel)] = \"sku\" readonly>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t <app-field-error-display \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t[displayError]=\"isFieldValid('sku')\" errorMsg=\"Please Enter SKU Name\">\n\t     \t\t\t\t\t\t\t\t\t\t\t\t</app-field-error-display> \n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <app-field-error-display \n\t\t\t\t\t\t\t\t\t\t\t\t\t[displayError]=\"isFieldValid('sku')\" errorMsg=\"Please Enter Brand Name\">\n\t\t\t\t\t     \t\t\t\t\t\t\t</app-field-error-display>  -->\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label  for =\"product_name\" class=\"control-label\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct Name\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\"  placeholder=\"Enter Product Name\" formControlName='product_name' [(ngModel)] = \"product_name\" readonly>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<app-field-error-display \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t[displayError]=\"isFieldValid('product_name')\" errorMsg=\"Please Enter Product Name\">\n\t     \t\t\t\t\t\t\t\t\t\t\t\t</app-field-error-display> \n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label  for =\"shareable_product\" class=\"m-checkbox required\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tShareable\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t <input class=\"form-control\" type=\"checkbox\" formControlName=\"shareable_product\" [checked]=\"shareable_product == shareable\"    disabled>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\n\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\" >\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for =\"['form_data']\" for =\"sku\" class=\"control-label required\">Brand\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control m-input\" formControlName=\"brand_id\" [(ngModel)]=\"selectedBrand\" disabled>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select Brand</option>\t\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option *ngFor=\"let brand of brandDrpdown\" value=\"{{brand.id}}\">{{brand.name}}</option>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t <app-field-error-display \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t[displayError]=\"isFieldValid('brand_id')\" errorMsg=\"Please Select Brand\">\n\t     \t\t\t\t\t\t\t\t\t\t\t\t</app-field-error-display> \n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\" style=\"min-height: 331px;\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label  class=\"control-label required\">Product Image</label>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <input class=\"form-control\"  type=\"file\" formControlName=\"product_img\" (change)=\"handleFileInput($event.target.files)\" [(ngModel)] = \"productImgUrl\" disabled>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<app-field-error-display \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t[displayError]=\"isFieldValid('product_img')\" errorMsg=\"Please Upload Product Image\">\n\t     \t\t\t\t\t\t\t\t\t\t\t\t</app-field-error-display> --> \n\n\t     \t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ImgUrl}}100X100_{{product_img}}\" title=\"product image\"> \n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <div class=\"col-lg-2\"><img src=\"\" title=\"product image\" height=\"100px;\" width=\"100px;\"></div> -->\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\" >\n\t\t\t\t\t\t\t\t<div class=\"col-lg-12\" >\n\t\t\t\t\t\t\t\t\t<div class=\"m-portlet\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-gear\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tPrice\n\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\" >\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label  for =\"actual_price\" class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tActual Price\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Enter Actual Price\" formControlName=\"actual_price\"  (keypress)=\"numberOnly($event)\" [(ngModel)] = \"actual_price\" readonly>\n\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<app-field-error-display \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t[displayError]=\"isFieldValid('actual_price')\" errorMsg=\"Please Enter Actual Price\">\n\t     \t\t\t\t\t\t\t\t\t\t\t\t</app-field-error-display> \n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label  for =\"mrp\" class=\"control-label\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMRP\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Enter MRP\" formControlName=\"mrp\"  (keypress)=\"numberOnly($event)\" [(ngModel)] = \"mrp\" readonly>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<app-field-error-display \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t[displayError]=\"isFieldValid('mrp')\" errorMsg=\"Please Enter MRP\">\n\t     \t\t\t\t\t\t\t\t\t\t\t\t</app-field-error-display> \n\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label  for =\"actual_price\" class=\"control-label\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCurrent Price/Sell Price\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Enter Current Price / Sell Price\" formControlName=\"current_price\"  (keypress)=\"numberOnly($event)\" [(ngModel)] = \"current_price\" readonly>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<app-field-error-display \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t[displayError]=\"isFieldValid('current_price')\" errorMsg=\"Please Enter Current Price/Sell Price\">\n\t     \t\t\t\t\t\t\t\t\t\t\t\t</app-field-error-display> \n\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\" >\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-portlet\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-gear\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tDescription\n\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\" >\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<quill-editor formControlName=\"description\"></quill-editor>\n\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <textarea class=\"form-control m-input\" formControlName=\"description\" rows=\"16\"></textarea> -->\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\n\n\n\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-portlet\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-gear\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tInventory\n\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\" >\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for =\"total_stock_quantity\" class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTotal Stock Quantity\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input\"\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t placeholder=\"Enter Stock Quantity\" type=\"text\" id=\"\" formControlName=\"total_stock_quantity\"  (keypress)=\"numberOnly($event)\" [(ngModel)] = \"total_stock_quantity\" readonly>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<app-field-error-display \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t[displayError]=\"isFieldValid('total_stock_quantity')\" errorMsg=\"Please Enter Total Stock Quantity\">\n\t     \t\t\t\t\t\t\t\t\t\t\t\t</app-field-error-display> \n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\" >\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for =\"stock_quantity\" class=\"control-label\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tIn Stock Quantity\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Enter In Stock Quantity\" formControlName=\"stock_quantity\"  (keypress)=\"numberOnly($event)\" [(ngModel)] = \"stock_quantity\" readonly>\n\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<app-field-error-display \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t[displayError]=\"isFieldValid('stock_quantity')\" errorMsg=\"Please Enter In Stock Quantity\">\n\t     \t\t\t\t\t\t\t\t\t\t\t\t</app-field-error-display> \n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\" >\n\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for =\"availability\"  class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tStock Avilability\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control m-input\" formControlName=\"availability\" [(ngModel)]=\"selectedAvilability\" disabled>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select Availability</option>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"in stock\">Available</option>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"out of stock\">Not Available</option>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<app-field-error-display \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t[displayError]=\"isFieldValid('availability')\" errorMsg=\"Please Select Stock Avilability\">\n\t     \t\t\t\t\t\t\t\t\t\t\t\t</app-field-error-display> \n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\t\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t<div class=\"col-lg-12\">\n\t\t\t\t\t\t\t\t<div class=\"m-portlet\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-gear\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">\n\t\t\t\t\t\t\t\t\t\t\t\tAdvanced\n\t\t\t\t\t\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\" >\n\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<label for =\"admin_commission_type\"  class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\tAdmin Commision Type\n\t\t\t\t\t\t\t\t\t\t\t\t\t</label>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control m-input\" formControlName=\"admin_commission_type\" [(ngModel)]=\"selectedAdminCommisionType\" disabled>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select Admin Commision Type</option>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"flat\">Fixed</option>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"percentage\">Percentage</option>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</select>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<app-field-error-display \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t[displayError]=\"isFieldValid('admin_commission_type')\" errorMsg=\"Please Select Admin Commision Type\">\n\t     \t\t\t\t\t\t\t\t\t\t\t</app-field-error-display> \n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<label for =\"admin_commission\"  class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\tAdmin Commision Price/Percentage\n\t\t\t\t\t\t\t\t\t\t\t\t\t</label>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Enter Admin Price/Percentage\" formControlName=\"admin_commission\"  (keypress)=\"numberOnly($event)\"  [(ngModel)] = \"admin_commission\" readonly>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<app-field-error-display \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t[displayError]=\"isFieldValid('admin_commission')\" errorMsg=\"Please Enter Admin Commision Price/Percentage\">\n\t     \t\t\t\t\t\t\t\t\t\t\t</app-field-error-display> \n\t\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\n\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\" >\n\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<label for =\"vendor_commission_type\"   class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\tVendor Commision Type\n\t\t\t\t\t\t\t\t\t\t\t\t\t</label>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control m-input\" formControlName=\"vendor_commission_type\" [(ngModel)]=\"selectedVendorCommisionType\" disabled>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select Vendor Commision Type</option>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"flat\">Fixed</option>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"percentage\">Percentage</option>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</select>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<app-field-error-display \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t[displayError]=\"isFieldValid('vendor_commission_type')\" errorMsg=\"Please Select Vendor Commision Type\">\n\t     \t\t\t\t\t\t\t\t\t\t\t</app-field-error-display> \n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<label for =\"vendor_commission\" class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\tVendor Commision Price/Percentage\n\t\t\t\t\t\t\t\t\t\t\t\t\t</label>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Enter Vendor Price/Percentage\" formControlName=\"vendor_commission\"  (keypress)=\"numberOnly($event)\" [(ngModel)] = \"vendor_commission\" readonly>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<app-field-error-display \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t[displayError]=\"isFieldValid('vendor_commission')\" errorMsg=\"Please Enter Vendor Commision Price/Percentage\">\n\t     \t\t\t\t\t\t\t\t\t\t\t</app-field-error-display> \n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t<!-- \n\t\t\t\t\t\t\t<div class=\"col-lg-12\" *ngIf=\"hide == '0'\">\n\t\t\t\t\t\t\t\t<div class=\"m-portlet\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-gear\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">\n\t\t\t\t\t\t\t\t\t\t\t\tGeneral Grouped Product\n\t\t\t\t\t\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\" >\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<label for =\"['form_data']\" class=\"control-label required\">Sku\n\t\t\t\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input\"\n\t\t\t\t\t\t\t\t\t\t\t\t\t placeholder=\"Enter Sku\" type=\"text\" id=\"\" formControlName=\"sku\">\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t\t\t <div class=\"col-lg-4\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduct Name\n\t\t\t\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<ng-multiselect-dropdown\n\t\t\t\t\t\t\t\t\t\t\t\t\t\tname = \"groued_product_name\"\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t[ngModelOptions]=\"{standalone: true}\"\n\t\t\t\t\t\t\t\t\t\t\t\t\t    [placeholder]=\"'Select Product'\"\n\t\t\t\t\t\t\t\t\t\t\t\t\t    [data]=\"cities\"\n\t\t\t\t\t\t\t\t\t\t\t\t\t    [(ngModel)]=\"selectedItems\"\n\t\t\t\t\t\t\t\t\t\t\t\t\t    [settings]=\"dropdownSettings\"\n\t\t\t\t\t\t\t\t\t\t\t\t\t    (onSelect)=\"onItemSelect($event)\"\n\t\t\t\t\t\t\t\t\t\t\t\t\t    (onSelectAll)=\"onSelectAll($event)\"\n\t\t\t\t\t\t\t\t\t\t\t\t\t    (onDeSelect)=\"onDeSelectItem($event)\"\n\t\t\t\t\t\t\t\t\t\t\t\t\t>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</ng-multiselect-dropdown>\n\t\t\t\t\t\t\t\t\t\t\t\t</div> \n\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<label for =\"status\" class=\"m-checkbox required\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\tShareable\n\t\t\t\t\t\t\t\t\t\t\t\t\t</label>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"checkbox\" placeholder=\"Enter Actual Price\" formControlName=\"shareable_product\">\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\n\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\" >\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<label for =\"['form_data']\" class=\"control-label required\">Product Image\n\t\t\t\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input\"\n\t\t\t\t\t\t\t\t\t\t\t\t\t  type=\"file\" id=\"\"  formControlName=\"product_img\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t\t\n\n\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div> -->\n\n\n\t\t\t\t\t\t\t<!-- <div class=\"col-lg-12\" *ngIf=\"hide == '0'\">\n\t\t\t\t\t\t\t\t<div class=\"m-portlet\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-gear\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">\n\t\t\t\t\t\t\t\t\t\t\t\tGrouped Product Price\n\t\t\t\t\t\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\" >\n\t\t\t\t\t\t\t\t\t\t\t\t\n\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<label for =\"status\" class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\tActual Price/MRP\n\t\t\t\t\t\t\t\t\t\t\t\t\t</label>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Enter Actual Price\" formControlName=\"actual_price\">\n\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\tCurrent Price/Sell Price\n\t\t\t\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Enter Current Name\" formControlName=\"current_price\">\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div> -->\n\n\t\t\t\t\t</form>\t\n\t\t\t\t</div>\n\t\t\t</div>\n\n\n\n"

/***/ }),

/***/ "./src/app/theme/pages/default/product/view-product/view-detail-product.component.ts":
/*!*******************************************************************************************!*\
  !*** ./src/app/theme/pages/default/product/view-product/view-detail-product.component.ts ***!
  \*******************************************************************************************/
/*! exports provided: ViewDetailProductComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ViewDetailProductComponent", function() { return ViewDetailProductComponent; });
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











var ViewDetailProductComponent = /** @class */ (function () {
    /* formSubCat: FormGroup;
     private formSumitAttemptSubCat: boolean;
  
  
     formProductType: FormGroup;
     private formSumitAttemptProductType: boolean;
  
  
     formAttr: FormGroup;
     private formSumitAttemptAttr: boolean;
  
     formAccess: FormGroup;
     private formSumitAttemptAccess: boolean;*/
    function ViewDetailProductComponent(toastr, route, router, _dataService, _brandService, _menuService, _categoryService, _productService, _subCategory, _script, formBuilder) {
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
        this.brandDrpdown = [];
        this.dropdownList = [];
        this.selectedCategory = [];
        this.selectedCategories1 = [];
        this.categoryDrpdown = [];
        this.productypeDrpdown = [];
        this.selectedItems = [];
        this.dropdownSettings = {};
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
        this.id = '';
        this.sku = '';
        this.product_name = '';
        this.shareable_product = '';
        //productImgUrl ='';
        this.actual_price = '';
        this.mrp = '';
        this.current_price = '';
        this.description = '';
        this.total_stock_quantity = '';
        this.stock_quantity = '';
        this.admin_commission = '';
        this.vendor_commission = '';
        this.product_img = '';
        this.form = formBuilder.group({
            id: [null],
            product_state: [null],
            sku: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            product_name: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            shareable_product: [null],
            product_img: [null],
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
        /*  this.formSubCat = formBuilder.group({
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
          });*/
    }
    ViewDetailProductComponent.prototype.numberOnly = function (event) {
        var charCode = (event.which) ? event.which : event.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    };
    ViewDetailProductComponent.prototype.ngOnInit = function () {
        var _this = this;
        // console.log(this.brand);
        this.ImgUrl = this._script._imgBaseUrl;
        this.route.params.subscribe(function (params) {
            if (params.product_id) {
                _this.product_id = params.product_id;
                _this._productService.getById(_this.product_id).subscribe(function (data) {
                    // console.log('product img', data.success.product_img);
                    _this.id = data.success.product_id;
                    _this.sku = data.success.sku;
                    _this.product_name = data.success.product_name;
                    _this.shareable_product = data.success.shareable_product;
                    _this.product_img = data.success.product_img;
                    _this.selectedBrand = data.success.brand_id;
                    _this.productImgUrl = data.success.product_img;
                    _this.actual_price = data.success.actual_price;
                    _this.mrp = data.success.mrp;
                    _this.current_price = data.success.current_price;
                    _this.description = data.success.description;
                    _this.total_stock_quantity = data.success.total_stock_quantity;
                    _this.stock_quantity = data.success.stock_quantity;
                    _this.selectedAvilability = data.success.availability;
                    _this.selectedAdminCommisionType = data.success.admin_commission_type;
                    _this.admin_commission = data.success.admin_commission;
                    _this.selectedVendorCommisionType = data.success.vendor_commission_type;
                    _this.vendor_commission = data.success.vendor_commission;
                });
            }
        });
        this.currentUser = JSON.parse(localStorage.getItem('currentUser'));
        var user_id;
        user_id = this.currentUser.success.id;
        /*this._dataService.getProductState().subscribe(
            data => {
                this.hide = data;
            }
    
        );
    
    
        this._menuService.getAll().subscribe(
            data => {
                this.menuData = data.success;
                //this.noOfPage = data.success.length;
            }
        );*/
        this._brandService.searching({ dropdown_value: 'Active', search_value: '' }).subscribe(function (data) {
            _this.brandDrpdown = data.success;
            //console.log(this.brandDrpdown);
        });
        /* this._subCategory.searching({ search_value:'' , dropdown_value: 'Active' }).subscribe(
             data => {
                 this.subCategoryData = data.success;
     
               
             }
         );
    
        this._categoryService.categoryListAss().subscribe(
            data => {
                this.categoryListData = data.success;
            }
        );
    
        this._productService.productTypeSearching({ dropdown_value: 'Active', search_value: '' }).subscribe(
            data => {
                this.productTypeDrpdown = data.success;
            }
        );
    
        this._productService.attrSearching({ search_value: '', dropdown_value: 'Active', user_id: this.currentUser.success.id }).subscribe(
            data => {
                this.attrData = data.success;
            }
        );*/
        /* this.cities = [
                { item_id: 1, item_text: 'Mumbai' },
                { item_id: 2, item_text: 'Bangaluru' },
                { item_id: 3, item_text: 'Pune' },
                { item_id: 4, item_text: 'Navsari' },
                { item_id: 5, item_text: 'New Delhi' }
            ];
       
        this.dropdownSettings = {
            singleSelection: false,
            idField: 'item_id',
            textField: 'item_text',
            selectAllText: 'Select All',
            unSelectAllText: 'UnSelect All',
            itemsShowLimit: 3,
            allowSearchFilter: true
        }; */
    };
    /* get product_attributes(): FormArray {
         return this.form.get('product_attributes') as FormArray;
     };
   
     addLair() {
         this.product_attributes.push(this.formBuilder.group(new Attributes()));
         console.log(this.form.value);
     }*/
    /* changeProductState(event) {
         this._dataService.setProductState(event.target.value);
         this._dataService.getProductState().subscribe(
             data => {
                 this.hide = data;
             }
         );
     }
  
     public get_category() {
         this._subCategory.getCategory({ menu_id: this.selectedMenu }).subscribe(
             data => {
                 this.categoryDrpdown = data.success;
             }
         )
     }
  
  
     public get_subCategory() {
         this._subCategory.getSubCategory({ category_id: this.selectedCategories }).subscribe(
             data => {
                 this.subCategoryData = data.success;
             }
         )
     }
  
  
     public get_subCategoryAss() {
         this._subCategory.getSubCategoryAss({ category_id: this.selectedCategories1 }).subscribe(
             data => {
                 this.subCategoryData = data.success;
             }
         )
     }
  
  
     public get_product() {
         this._productService.get_product({ sub_category_id: this.selectedSubCategories }).subscribe(
             data => {
                 this.productData = data.success;
             }
         )
     }*/
    ViewDetailProductComponent.prototype.isFieldValid = function (field) {
        return ((!this.form.get(field).valid && this.form.get(field).touched) ||
            (this.form.get(field).untouched && this.formSumitAttempt));
    };
    ViewDetailProductComponent.prototype.displayFieldCss = function (field) {
        return {
            'has-error': this.isFieldValid(field),
            'has-feedback': this.isFieldValid(field)
        };
    };
    ViewDetailProductComponent.prototype.onSubmit = function () {
        var _this = this;
        var input;
        this.formSumitAttempt = true;
        // if (this.form.valid) {
        input = { form_data: this.form.value };
        input.form_data.user_id = this.currentUser.success.id;
        input.form_data.product_img = this.productImgUrl;
        this._productService.updateProduct(input).subscribe(function (data) {
            _this.product_id = data.success;
            _this.toastr.success('Product Update Successfully', 'Success Message');
            _this.reset();
            _this.router.navigate(['product']);
        });
        //  }
    };
    /*
        onSubmitSubCat() {
            let input: any;
            this.formSumitAttemptSubCat = true;
    
            this.route.params.subscribe(
                params => {
                    if (params.id) {
                        this.product_id = params.id;
                        if (this.formSubCat.valid) {
                            input = { form_data: this.formSubCat.value };
                            input.form_data.fk_user_id = this.currentUser.success.id;
                            input.form_data.fk_product_id = this.product_id;
                            // console.log(input);
                            this._productService.createProductSubCat(input).subscribe(
                                data => {
                                    this.reset();
                                    this.toastr.success('Product Sub Category Added Successfully', 'Success Message');
                                    this._productService.productSubCatList(params.id).subscribe(
                                        data => {
                                            this.subCategories = data.success;
                                        }
                                    );
                                }
                            );
                        }
                    }
                }
            );
    
        }
    
    
        onProductTypeSubmit() {
    
            let input: any;
            this.formSumitAttemptProductType = true;
    
            this.route.params.subscribe(
                params => {
                    if (params.id) {
                        this.product_id = params.id;
    
                        if (this.formProductType.valid) {
                            input = { form_data: this.formProductType.value };
                            input.form_data.fk_user_id = this.currentUser.success.id;
                            input.form_data.fk_product_id = this.product_id;
                            //  console.log(input);
                            this._productService.createProductType(input).subscribe(
                                data => {
                                    this.toastr.success('Product Types Added Successfully', 'Success Message');
                                    this.reset();
                                    this._productService.productTypeList(params.id).subscribe(
                                        data => {
                                            this.productTypeList = data.success;
                                        }
                                    );
    
                                }
                            );
                        }
                    }
                }
            );
    
    
        }
    
    
    
        onSubmitAddAttr() {
            let input: any;
            this.formSumitAttemptAttr = true;
            if (this.formAttr.valid) {
                input = { form_data: this.formAttr.value };
                input.form_data.fk_user_id = this.currentUser.success.id;
                input.form_data.fk_product_id = this.product_id;
                this._productService.addAttribute(input).subscribe(
                    data => {
                        this.reset();
                    }
                );
            }
        }
    
    
        onSubmitAss() {
            let input: any;
            this.formSumitAttemptAccess = true;
            this.route.params.subscribe(
                params => {
                    if (params.id) {
                        this.toastr.success('Product Added Successfully', 'Success Message');
                        this.product_id = params.id;
                        if (this.formAccess.valid) {
                            input = { form_data: this.formAccess.value };
                            input.form_data.fk_user_id = this.currentUser.success.id;
                            input.form_data.fk_acc_product_id = this.product_id;
                            this._productService.addProductAccess(input).subscribe(
                                data => {
                                    this.reset();
                                    this._productService.productaccessList(params.id).subscribe(
                                        data => {
                                            this.accessData = data.success;
                                            console.log('Access Data', this.accessData);
                                        }
                                    );
                                }
                            );
                        }
                    }
                }
            );
    
        }*/
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
    ViewDetailProductComponent.prototype.reset = function () {
        this.form.reset();
        this.formSumitAttempt = false;
        /*   this.formSubCat.reset();
           this.formSumitAttemptSubCat = false;
    
           this.formProductType.reset();
           this.formSumitAttemptProductType = false;
    
           this.formAttr.reset();
           this.formSumitAttemptAttr = false;
    
           this.formAccess.reset();
           this.formSumitAttemptAccess = false;*/
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
    /*public changeProductTypeStatus(user: any) {
        if (user.status == 'Active') {
            user.status = 'Inactive';
  
            this._productService.updateProductTypeStatus(user.id).subscribe(
                data => {
                }
            );
        } else {
            user.status = 'Active';
            this._productService.updateProductTypeStatus(user.id).subscribe(
                data => {
                }
            );
        }
    }*/
    ViewDetailProductComponent.prototype.handleFileInput = function (files) {
        var _this = this;
        var file = files.item(0);
        var reader = new FileReader();
        reader.onload = function (event) {
            _this.productImgUrl = event.target.result;
        };
        reader.readAsDataURL(file);
    };
    ViewDetailProductComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-view-detail-product',
            template: __webpack_require__(/*! ./view-detail-product.component.html */ "./src/app/theme/pages/default/product/view-product/view-detail-product.component.html"),
            styles: []
        }),
        __metadata("design:paramtypes", [ngx_toastr__WEBPACK_IMPORTED_MODULE_10__["ToastrService"], _angular_router__WEBPACK_IMPORTED_MODULE_9__["ActivatedRoute"], _angular_router__WEBPACK_IMPORTED_MODULE_9__["Router"],
            _services_data_service__WEBPACK_IMPORTED_MODULE_2__["DataService"], _auth_services_brand_service__WEBPACK_IMPORTED_MODULE_8__["BrandService"], _auth_services_menu_service__WEBPACK_IMPORTED_MODULE_7__["MenuService"],
            _auth_services_category_service__WEBPACK_IMPORTED_MODULE_6__["CategoryService"], _auth_services_product_service__WEBPACK_IMPORTED_MODULE_1__["ProductService"], _auth_services_subCategory_service__WEBPACK_IMPORTED_MODULE_5__["SubCategoryService"],
            _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__["ScriptLoaderService"], _angular_forms__WEBPACK_IMPORTED_MODULE_4__["FormBuilder"]])
    ], ViewDetailProductComponent);
    return ViewDetailProductComponent;
}());



/***/ }),

/***/ "./src/app/theme/pages/default/product/view-product/view-detail-product.module.ts":
/*!****************************************************************************************!*\
  !*** ./src/app/theme/pages/default/product/view-product/view-detail-product.module.ts ***!
  \****************************************************************************************/
/*! exports provided: ViewDetailProductModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ViewDetailProductModule", function() { return ViewDetailProductModule; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/esm5/common.js");
/* harmony import */ var _default_default_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../default/default.component */ "./src/app/theme/pages/default/default.component.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/esm5/router.js");
/* harmony import */ var _layouts_layout_module__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../../../layouts/layout.module */ "./src/app/theme/layouts/layout.module.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/esm5/forms.js");
/* harmony import */ var ngx_pagination__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ngx-pagination */ "./node_modules/ngx-pagination/dist/ngx-pagination.js");
/* harmony import */ var _view_detail_product_component__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./view-detail-product.component */ "./src/app/theme/pages/default/product/view-product/view-detail-product.component.ts");
/* harmony import */ var ng_multiselect_dropdown__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ng-multiselect-dropdown */ "./node_modules/ng-multiselect-dropdown/esm5/ng-multiselect-dropdown.js");
/* harmony import */ var ngx_quill__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ngx-quill */ "./node_modules/ngx-quill/index.js");
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
                component: _view_detail_product_component__WEBPACK_IMPORTED_MODULE_7__["ViewDetailProductComponent"]
            }
        ]
    },
];
var ViewDetailProductModule = /** @class */ (function () {
    function ViewDetailProductModule() {
    }
    ViewDetailProductModule = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_1__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_3__["RouterModule"].forChild(routes),
                _layouts_layout_module__WEBPACK_IMPORTED_MODULE_4__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_5__["FormsModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_5__["ReactiveFormsModule"],
                ngx_pagination__WEBPACK_IMPORTED_MODULE_6__["NgxPaginationModule"], ng_multiselect_dropdown__WEBPACK_IMPORTED_MODULE_8__["NgMultiSelectDropDownModule"],
                ngx_quill__WEBPACK_IMPORTED_MODULE_9__["QuillModule"],
            ],
            declarations: [_view_detail_product_component__WEBPACK_IMPORTED_MODULE_7__["ViewDetailProductComponent"]],
        })
    ], ViewDetailProductModule);
    return ViewDetailProductModule;
}());



/***/ })

}]);
//# sourceMappingURL=pages-default-product-view-product-view-detail-product-module.js.map