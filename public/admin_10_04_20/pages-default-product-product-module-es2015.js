(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-product-product-module"],{

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/product/product-list/product-list.component.html":
/*!****************************************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/pages/default/product/product-list/product-list.component.html ***!
  \****************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"m-portlet m-portlet--mobile\">\n\t\t<div class=\"m-portlet__body\">\n\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\n\t\t\t\t\t\t<div class=\"col-lg-12 row\">\n\t\t\t\t\t\t\t<div class=\"col-lg-6\">\n\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\"><i class=\"la la-gear\"></i></span>\n\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">List Product</h3>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"col-lg-6\">\n\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill\" routerLink=\"/product/add-product\">\n\t\t\t\t\t\t\t\t\t<span>Add Product</span>\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\n\t\t\t<div class=\"m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30\">\n\t\t\t\t<div class=\"row align-items-center\">\n\t\t\t\t\t<div class=\"col-xl-12 order-2 order-xl-1\">\n\t\t\t\t\t\t<div class=\"form-group m-form__group row align-items-center\">\n\t\t\t\t\t\t\t<div class=\"col-md-2\">\n\t\t\t\t\t\t\t\t<div class=\"m-form__group m-form__group--inline\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__label\">\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__control\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-form__control\">\n\t\t\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"date form-control\" placeholder=\"Filter By Date\" [(ngModel)] = \"filterDate\" (change)=\"filterByDate()\">\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"d-md-none m--margin-bottom-10\"></div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"col-md-1\">\n\t\t\t\t\t\t\t\t<div class=\"m-input-icon m-input-icon--left\">\n\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"col-md-3\">\n\t\t\t\t\t\t\t\t<div class=\"m-form__group m-form__group--inline\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__label\">\n\t\t\t\t\t\t\t\t\t\t<label class=\"m-label m-label--single\">\n\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__control\">\n\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" [(ngModel)] = \"dropDownValueStatus\" name=\"dropDownValueStatus\">\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">--Select a Category--</option>\n\t\t\t\t\t\t\t\t\t\t\t<option *ngFor=\"let category of categoryData\" value=\"{{category.id}}\">{{category.category_name}}</option>\n\t\t\t\t\t\t\t\t\t\t</select>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"d-md-none m--margin-bottom-10\"></div>\n\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t<div class=\"col-md-4\">\n\t\t\t\t\t\t\t\t<div class=\"m-input-icon m-input-icon--left\">\n\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input  m-input--solid\" id=\"generalSearch\" [(ngModel)] = \"searchValue\" placeholder=\"Search by Name / SKU\" type=\"text\" name=\"search_value\">\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\n\n\t\t\t\t\t\t\t<div class=\"col-md-2\">\n\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill\"(click)=\"search();\">\n\t\t\t\t\t\t\t\t\t\t<span>Filter</span>\n\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t\t<div class=\"m-separator m-separator--dashed d-xl-none\"></div>\n\t\t\t\t\t\t\t</div> \n\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<div class=\"col-xl-12 order-2 order-xl-1\">\n\t\t\t\t\t\t<div class=\"form-group m-form__group row align-items-center\">\n\t\t\t\t\t\t\t<div class=\"col-md-3\">\n\t\t\t\t\t\t\t\t<div class=\"m-form__group m-form__group--inline\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__label\">\n\t\t\t\t\t\t\t\t\t\t<label class=\"m-label m-label--single\">\n\t\t\t\t\t\t\t\t\t\t\tAction:\n\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__control\">\n\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" [(ngModel)] = \"bulkActionData\" >\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"\" selected=\"selected\">Bulk Action</option>\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"delete_permanently\">Delete Permanently</option>\n\t\t\t\t\t\t\t\t\t\t</select>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"d-md-none m--margin-bottom-10\"></div>\n\t\t\t\t\t\t\t</div>\n\n\n\t\t\t\t\t\t\t<div class=\"col-md-2\">\n\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill\"(click)=\"bulkAction(productData);\">\n\t\t\t\t\t\t\t\t\t<span>Apply</span>\n\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t\t<div class=\"m-separator m-separator--dashed d-xl-none\"></div>\n\t\t\t\t\t\t\t</div> \n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<!--<div class=\"col-xl-12 order-2 order-xl-1\">\n\t\t\t\t\t\t<div class=\"form-group m-form__group row align-items-center\">\n\t\t\t\t\t\t\t<div class=\"col-md-3\">\n\t\t\t\t\t\t\t\t<div class=\"m-form__group m-form__group--inline\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__label\">\n\t\t\t\t\t\t\t\t\t\t<label class=\"m-label m-label--single\">\n\t\t\t\t\t\t\t\t\t\t\tType:\n\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__control\">\n\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" [(ngModel)] = \"dropDownValueType\" name=\"dropDownValueType\" (change)=\"search();\">\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">All</option>\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"shareable\">Shareable</option>\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"non shareable\">Non Shareable</option>\n\t\t\t\t\t\t\t\t\t\t</select>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"d-md-none m--margin-bottom-10\"></div>\n\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t<div class=\"col-md-3\">\n\t\t\t\t\t\t\t\t<div class=\"m-form__group m-form__group--inline\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__label\">\n\t\t\t\t\t\t\t\t\t\t<label class=\"m-label m-label--single\">\n\t\t\t\t\t\t\t\t\t\t\tStaus:\n\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__control\">\n\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" [(ngModel)] = \"dropDownValueStatus\" name=\"dropDownValueStatus\" (change)=\"search();\">\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">All</option>\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"Active\">Active</option>\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"Inactive\">Inactive</option>\n\t\t\t\t\t\t\t\t\t\t</select>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"d-md-none m--margin-bottom-10\"></div>\n\t\t\t\t\t\t\t</div>\n\n\n\t\t\t\t\t\t\t<div class=\"col-md-4\">\n\t\t\t\t\t\t\t\t<div class=\"m-input-icon m-input-icon--left\">\n\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input  m-input--solid\" id=\"generalSearch\" [(ngModel)] = \"searchValue\" placeholder=\"Search by Name / SKU\" type=\"text\" name=\"search_value\">\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\n\n\t\t\t\t\t\t\t<div class=\"col-md-2\">\n\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill\"(click)=\"search();\">\n\t\t\t\t\t\t\t\t\t\t<span>Search</span>\n\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t\t<div class=\"m-separator m-separator--dashed d-xl-none\"></div>\n\t\t\t\t\t\t\t</div> \n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>-->\n\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t\t\t\t\n\t\t\t<div class=\"m_datatable m-datatable m-datatable--default m-datatable--loaded\" id=\"local_data\" style=\"position: static; zoom: 1;\">\n\t\t\t\t<table class=\"m-datatable__table\" style=\"display: block; min-height: 300px; overflow-x: auto;\">\n\t\t\t\t\t<thead class=\"m-datatable__head\">\n\t\t\t\t\t\t<tr class=\"m-datatable__row\" style=\"left: 0px;\">\n\n\t\t\t\t\t\t\t<th data-field=\"ShipName\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\">\n\n\t\t\t\t\t\t\t\t<span style=\"width: 20px;\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"order_no\" [checked]=\"isAllChecked(productData)\" (change)=\"checkAll($event, productData)\" >\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</th>\n\n\n\n\t\t\t\t\t\t\t<th data-field=\"Shareable Product\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Image</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"Product Name\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 100px;\">Name</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"Status\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Status</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"Product SKU\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\"><span style=\"width: 110px;\">SKU</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"Product Brand\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\"><span style=\"width: 110px;\">Stock</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"Product Actual Price / MRP\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Price</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"Product Brand\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\"><span style=\"width: 110px;\">Earning</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"Type\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Type</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"Views\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Views</span>\n\t\t\t\t\t\t\t</th>\n\n\n\t\t\t\t\t\t\t<th data-field=\"Actions\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Actions</span>\n\t\t\t\t\t\t\t</th>\n\t\t\t\t\t\t</tr>\n\t\t\t\t\t</thead>\n\t\t\t\t\t<tbody class=\"m-datatable__body\" style=\"\">\n\t\t\t\t\t\t<tr data-row=\"0\" *ngFor=\"let product of productData | paginate: { itemsPerPage: 10, currentPage: p }\" class=\"m-datatable__row\" style=\"left: 0px;\">\n\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<th data-field=\"Latitude\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\">\n\n\t\t\t\t\t\t\t\t\t<span style=\"width: 20px;\">\n\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"product_no\" name=\"sizecb[]\" value=\"{{product.id}}\" [(ngModel)]=\"product.state\">\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t\t<td data-field=\"Latitude\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span ><img src=\"{{ImgUrl}}75X75_{{product.product_img}}\" style=\"height: 100px; width:100px;\"></span>\n\t\t\t\t\t\t\t\t</td>\n\n\t\t\t\t\t\t\t\t<td data-field=\"Currency\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 100px;\">\n\t\t\t\t\t\t\t\t\t\t{{product.product_name}}\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill\" title=\"Delete\" (click)=\"productDelete(product.product_id)\"> \n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-trash\"></i>  \n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill\" title=\"Edit\" routerLink=\"/product/edit-product/{{product.product_id}}\"> \n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-edit\"></i>  \n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</td>\n\n\t\t\t\t\t\t\t\t<td data-field=\"Status\"  class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\" (click) = \"changeStatus(product)\">\n\t\t\t\t\t\t\t\t\t\t<span class=\"m-badge--wide m-badge\" [ngClass]=\"{'m-badge--success':  product.status == 'Active', 'm-badge--danger':  product.status != 'Active'}\" title=\"Status\" >{{product.status}}\n\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</td>\n\n\t\t\t\t\t\t\t\t<td data-field=\"ShipName\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\">{{product.sku}}</span>\n\t\t\t\t\t\t\t\t</td>\n\n\t\t\t\t\t\t\t\t<td data-field=\"ShipAddress\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\">{{product.availability}}</span>\n\t\t\t\t\t\t\t\t</td>\n\n\t\t\t\t\t\t\t\t<td data-field=\"ShipDate\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\">{{product.current_price}}</span>\n\t\t\t\t\t\t\t\t</td>\n\n\t\t\t\t\t\t\t\t<td data-field=\"ShipDate\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\">{{product.current_price - product.current_price}}</span>\n\t\t\t\t\t\t\t\t</td>\n\n\t\t\t\t\t\t\t\t<td data-field=\"Type\"  class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\" (click) = \"changeType(product)\">\n\t\t\t\t\t\t\t\t\t\t<span class=\"m-badge--wide m-badge\" [ngClass]=\"{'m-badge--success':  product.shareable_product == 'shareable', 'm-badge--danger':  product.shareable_product != 'shareable'}\" title=\"Type\" >{{product.shareable_product}}\n\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</td>\n\n\t\t\t\t\t\t\t\t<td data-field=\"ShipDate\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\">{{product.current_price - product.current_price}}</span>\n\t\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<td data-field=\"Actions\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"overflow: visible; position: relative; width: 110px;\">\n\n\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill\" title=\"Edit\" routerLink=\"/product/edit-product/{{product.product_id}}\"> \n\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-edit\"></i>  \n\t\t\t\t\t\t\t\t\t\t</a> \n\n\n\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill\" title=\"View\" routerLink=\"/product/view-product/{{product.product_id}}\"> \n\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-eye\"></i>  \n\t\t\t\t\t\t\t\t\t\t</a> \n\n\t\t\t\t\t\t\t\t\t\t<!--<app-side-bar-toggle [sideBarValue]=\"user\"></app-side-bar-toggle> -->\n\n  \t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill\" title=\"Delete\" (click)=\"productDelete(product.product_id)\"> \n\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-trash\"></i>  \n\t\t\t\t\t\t\t\t\t\t</a>\t\n\t\t\t\t\t\t\t\t\t</span>\t\n\t\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t\t</tr>\n\t\t\t\t\t\t</tbody>\n\t\t\t\t\t</table>\n\t\t\t\t\t<pagination-controls (pageChange)=\"p = $event\"></pagination-controls>\n\t\n\t\t\t</div>\n\t\t</div>\n</div>"

/***/ }),

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/product/product.component.html":
/*!**********************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/pages/default/product/product.component.html ***!
  \**********************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<app-product-list></app-product-list>"

/***/ }),

/***/ "./src/app/theme/pages/default/product/product-list/product-list.component.ts":
/*!************************************************************************************!*\
  !*** ./src/app/theme/pages/default/product/product-list/product-list.component.ts ***!
  \************************************************************************************/
/*! exports provided: ProductsListComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ProductsListComponent", function() { return ProductsListComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _auth_services_product_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../auth/_services/product.service */ "./src/app/auth/_services/product.service.ts");
/* harmony import */ var _auth_services_category_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../../auth/_services/category.service */ "./src/app/auth/_services/category.service.ts");
/* harmony import */ var _services_data_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../../../../_services/data.service */ "./src/app/_services/data.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../../../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");
/* harmony import */ var ngx_toastr__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ngx-toastr */ "./node_modules/ngx-toastr/fesm2015/ngx-toastr.js");








let ProductsListComponent = class ProductsListComponent {
    constructor(toastr, imgBaseUrl, route, router, _dataService, _productService, _categoryService) {
        this.toastr = toastr;
        this.imgBaseUrl = imgBaseUrl;
        this.route = route;
        this.router = router;
        this._dataService = _dataService;
        this._productService = _productService;
        this._categoryService = _categoryService;
        this.dropDownValueSearch = [];
        this.dropDownValueStatus = '';
        this.dropDownValueType = '';
        this.categoryData = [{ "id": 1, "category_name": "HTC-test-a" }, { "id": 2, "category_name": "test" }];
        this.productData = [{ "product_id": 1032, "slug": "HTC-test-a", "sku": "a", "product_name": "test", "availability": "in stock", "actual_price": 1000, "mrp": 1200, "current_price": 800, "stock_quantity": 4, "total_stock_quantity": 5, "description": "<p><strong>good<\/strong><\/p>", "specification": null, "product_details": null, "product_img": "7f48ccb34b1d8fcec8774ae9eeb6de33.png", "user_id": 1, "brand_id": 49, "discount_type": null, "discount": null, "discount_display_type": null, "shareable_product": "shareable", "status": "Active", "deleted_status": "Not deleted", "admin_commission_type": "flat", "admin_commission": 65, "vendor_commission_type": "flat", "vendor_commission": 65, "product_state": null, "country": null, "created_date": "2018-11-27", "updated_date": "2018-11-27 05:17:36", "max_order_qty": 0, "name": "HTC", "state": false }];
        this.searchValue = "";
    }
    ngOnInit() {
        let loggedUserId;
        let where;
        this.ImgUrl = this.imgBaseUrl._imgBaseUrl;
        /*user permission*/
        let currentUser = JSON.parse(localStorage.getItem('currentUser'));
        this.permission = currentUser.success.permission;
        if (this.permission.product_list != 1) {
            this.toastr.error('You have not permission to visit this page.', 'Error Message');
            this.router.navigate(['/']);
        }
        /*user permission*/
        this._categoryService.getAll().subscribe(data => {
            this.categoryData = data.success;
        });
        this.route.params.subscribe(parameter => {
            localStorage.setItem('section', 'product');
            loggedUserId = JSON.parse(localStorage.getItem('currentUser'));
            if (parameter.vendor_id) {
                console.log('parameter.vendor_id', parameter.vendor_id);
                where = { loggedUserId: parameter.vendor_id, role: '' };
            }
            else {
                where = { loggedUserId: loggedUserId.success.id, role: loggedUserId.success.role };
            }
            this._productService.getAll(where).subscribe(data => {
                this.productData = data.success;
            }, (err) => {
                console.log('sorry we got error in login');
                localStorage.removeItem('currentUser');
                localStorage.removeItem('subCategory');
                localStorage.removeItem('productType');
                localStorage.removeItem('menu');
                this.router.navigate(['/login']);
            });
        });
    }
    checkAll(ev, productData) {
        console.log(productData);
        console.log(ev);
        productData.forEach(x => x.state = ev.target.checked);
    }
    isAllChecked(productData) {
        ///console.log(productData);
        return productData.every(_ => _.state);
    }
    bulkAction(productData) {
        let cart_data = [];
        this.productData.forEach(obj => {
            console.log('obj');
            if (obj.state) {
                cart_data.push(obj.product_id);
            }
        });
        console.log('cart_data');
        console.log(cart_data);
        let id = 1;
        this._productService.productDeleteBulk(cart_data).subscribe(data => {
            if (Number(data) && data != 0) {
                this.toastr.success('Changes updated successfully!', 'Success Message');
                this.getAllProductList();
            }
            else {
                this.toastr.error('Sorry! changes could not updated.', 'Error Message');
            }
        });
    }
    getAllProductList() {
        let loggedUserId;
        let where;
        let currentUser = JSON.parse(localStorage.getItem('currentUser'));
        this.route.params.subscribe(parameter => {
            localStorage.setItem('section', 'product');
            loggedUserId = JSON.parse(localStorage.getItem('currentUser'));
            if (parameter.vendor_id) {
                console.log('parameter.vendor_id', parameter.vendor_id);
                where = { loggedUserId: parameter.vendor_id, role: '' };
            }
            else {
                where = { loggedUserId: loggedUserId.success.id, role: loggedUserId.success.role };
            }
            this._productService.getAll(where).subscribe(data => {
                this.productData = data.success;
            }, (err) => {
                console.log('sorry we got error in login');
                localStorage.removeItem('currentUser');
                localStorage.removeItem('subCategory');
                localStorage.removeItem('productType');
                localStorage.removeItem('menu');
                this.router.navigate(['/login']);
            });
        });
    }
    search() {
        console.log(this.searchValue);
        this._productService.searching({ search_value: this.searchValue, dropdown_value: this.dropDownValueStatus, shareable: this.dropDownValueType }).subscribe(data => {
            this.productData = data.success;
        });
    }
    filterByDate() {
        let product_data = [];
        if (this.filterDate == '') {
            this.productData = this.filterDataHolder;
        }
        else {
            if (this.filterDataHolder == undefined) {
                this.filterDataHolder = this.productData;
            }
            else {
                this.productData = this.filterDataHolder;
            }
            this.productData.forEach(obj => {
                //let created_date = obj.payment_date.split(' ');
                //created_date = created_date;
                if (obj.created_date == this.filterDate) {
                    product_data.push(obj);
                }
            });
            this.productData = product_data;
        }
    }
    productDelete(del_id) {
        let value = confirm('Are you want to delete this product ?');
        if (value) {
            this._productService.productDelete(del_id).subscribe(data => {
                this.productData = data.data;
                this.toastr.success('Product Deleted Successfully', 'Success Message');
            });
        }
    }
    changeStatus(product) {
        if (product.status == 'Active') {
            product.status = 'Inactive';
            console.log('product.product_id');
            console.log(product.product_id);
            this._productService.updateProductStaus(product.product_id).subscribe(data => {
                console.log('update', data);
            });
        }
        else {
            product.status = 'Active';
            this._productService.updateProductStaus(product.product_id).subscribe(data => {
                console.log('update', data);
            });
        }
    }
    changeType(product) {
        if (product.shareable_product == 'shareable') {
            product.shareable_product = 'non shareable';
            this._productService.updateProductStaus(product.product_id).subscribe(data => {
                console.log('update', data);
            });
        }
        else {
            product.shareable_product = 'shareable';
            this._productService.updateProductStaus(product.product_id).subscribe(data => {
                console.log('update', data);
            });
        }
    }
};
ProductsListComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-product-list',
        template: __webpack_require__(/*! raw-loader!./product-list.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/product/product-list/product-list.component.html")
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [ngx_toastr__WEBPACK_IMPORTED_MODULE_7__["ToastrService"], _services_script_loader_service__WEBPACK_IMPORTED_MODULE_6__["ScriptLoaderService"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["ActivatedRoute"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["Router"], _services_data_service__WEBPACK_IMPORTED_MODULE_4__["DataService"], _auth_services_product_service__WEBPACK_IMPORTED_MODULE_2__["ProductService"], _auth_services_category_service__WEBPACK_IMPORTED_MODULE_3__["CategoryService"]])
], ProductsListComponent);



/***/ }),

/***/ "./src/app/theme/pages/default/product/product.component.ts":
/*!******************************************************************!*\
  !*** ./src/app/theme/pages/default/product/product.component.ts ***!
  \******************************************************************/
/*! exports provided: ProductComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ProductComponent", function() { return ProductComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");


let ProductComponent = class ProductComponent {
    constructor() {
        this.searchValue = "";
        this.dropDownValue = '';
        this.noOfPage = '';
        this.p = 1;
    }
    ngOnInit() {
    }
};
ProductComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-product',
        template: __webpack_require__(/*! raw-loader!./product.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/product/product.component.html")
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [])
], ProductComponent);



/***/ }),

/***/ "./src/app/theme/pages/default/product/product.module.ts":
/*!***************************************************************!*\
  !*** ./src/app/theme/pages/default/product/product.module.ts ***!
  \***************************************************************/
/*! exports provided: ProductModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ProductModule", function() { return ProductModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/fesm2015/common.js");
/* harmony import */ var _default_default_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../default/default.component */ "./src/app/theme/pages/default/default.component.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var _layouts_layout_module__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../../layouts/layout.module */ "./src/app/theme/layouts/layout.module.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm2015/forms.js");
/* harmony import */ var ngx_pagination__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ngx-pagination */ "./node_modules/ngx-pagination/dist/ngx-pagination.js");
/* harmony import */ var _product_list_product_list_component__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./product-list/product-list.component */ "./src/app/theme/pages/default/product/product-list/product-list.component.ts");
/* harmony import */ var _product_component__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./product.component */ "./src/app/theme/pages/default/product/product.component.ts");










//import {MatTabsModule} from '@angular/material/tabs';
const routes = [
    {
        path: ":vendor_id",
        component: _default_default_component__WEBPACK_IMPORTED_MODULE_3__["DefaultComponent"],
        children: [
            {
                path: "",
                component: _product_list_product_list_component__WEBPACK_IMPORTED_MODULE_8__["ProductsListComponent"]
            }
        ]
    },
    {
        path: "",
        component: _default_default_component__WEBPACK_IMPORTED_MODULE_3__["DefaultComponent"],
        children: [
            {
                path: "",
                component: _product_list_product_list_component__WEBPACK_IMPORTED_MODULE_8__["ProductsListComponent"]
            }
        ]
    },
];
let ProductModule = class ProductModule {
};
ProductModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        imports: [
            _angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["RouterModule"].forChild(routes),
            _layouts_layout_module__WEBPACK_IMPORTED_MODULE_5__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_6__["FormsModule"], ngx_pagination__WEBPACK_IMPORTED_MODULE_7__["NgxPaginationModule"],
        ],
        declarations: [_product_list_product_list_component__WEBPACK_IMPORTED_MODULE_8__["ProductsListComponent"], _product_component__WEBPACK_IMPORTED_MODULE_9__["ProductComponent"],],
    })
], ProductModule);



/***/ })

}]);
//# sourceMappingURL=pages-default-product-product-module-es2015.js.map