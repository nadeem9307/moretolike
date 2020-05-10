(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-product-view-product-view-detail-product-module"],{

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/product/view-product/view-detail-product.component.html":
/*!***********************************************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/pages/default/product/view-product/view-detail-product.component.html ***!
  \***********************************************************************************************************************/
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
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _auth_services_product_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../auth/_services/product.service */ "./src/app/auth/_services/product.service.ts");
/* harmony import */ var _services_data_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../../_services/data.service */ "./src/app/_services/data.service.ts");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../../../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var _auth_services_subCategory_service__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../../../../auth/_services/subCategory.service */ "./src/app/auth/_services/subCategory.service.ts");
/* harmony import */ var _auth_services_category_service__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../../../../../auth/_services/category.service */ "./src/app/auth/_services/category.service.ts");
/* harmony import */ var _auth_services_menu_service__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ../../../../../auth/_services/menu.service */ "./src/app/auth/_services/menu.service.ts");
/* harmony import */ var _auth_services_brand_service__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ../../../../../auth/_services/brand.service */ "./src/app/auth/_services/brand.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var ngx_toastr__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ngx-toastr */ "./node_modules/ngx-toastr/fesm5/ngx-toastr.js");












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
            sku: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_5__["Validators"].required],
            product_name: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_5__["Validators"].required],
            shareable_product: [null],
            product_img: [null],
            actual_price: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_5__["Validators"].required],
            mrp: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_5__["Validators"].required],
            current_price: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_5__["Validators"].required],
            vendor_commission: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_5__["Validators"].required],
            total_stock_quantity: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_5__["Validators"].required],
            stock_quantity: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_5__["Validators"].required],
            availability: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_5__["Validators"].required],
            description: [null],
            admin_commission_type: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_5__["Validators"].required],
            admin_commission: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_5__["Validators"].required],
            vendor_commission_type: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_5__["Validators"].required],
            brand_id: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_5__["Validators"].required],
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
    ViewDetailProductComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: 'app-view-detail-product',
            template: __webpack_require__(/*! raw-loader!./view-detail-product.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/product/view-product/view-detail-product.component.html")
        }),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [ngx_toastr__WEBPACK_IMPORTED_MODULE_11__["ToastrService"], _angular_router__WEBPACK_IMPORTED_MODULE_10__["ActivatedRoute"], _angular_router__WEBPACK_IMPORTED_MODULE_10__["Router"],
            _services_data_service__WEBPACK_IMPORTED_MODULE_3__["DataService"], _auth_services_brand_service__WEBPACK_IMPORTED_MODULE_9__["BrandService"], _auth_services_menu_service__WEBPACK_IMPORTED_MODULE_8__["MenuService"],
            _auth_services_category_service__WEBPACK_IMPORTED_MODULE_7__["CategoryService"], _auth_services_product_service__WEBPACK_IMPORTED_MODULE_2__["ProductService"], _auth_services_subCategory_service__WEBPACK_IMPORTED_MODULE_6__["SubCategoryService"],
            _services_script_loader_service__WEBPACK_IMPORTED_MODULE_4__["ScriptLoaderService"], _angular_forms__WEBPACK_IMPORTED_MODULE_5__["FormBuilder"]])
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
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/fesm5/common.js");
/* harmony import */ var _default_default_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../default/default.component */ "./src/app/theme/pages/default/default.component.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var _layouts_layout_module__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../../../layouts/layout.module */ "./src/app/theme/layouts/layout.module.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var ngx_pagination__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ngx-pagination */ "./node_modules/ngx-pagination/dist/ngx-pagination.js");
/* harmony import */ var _view_detail_product_component__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./view-detail-product.component */ "./src/app/theme/pages/default/product/view-product/view-detail-product.component.ts");
/* harmony import */ var ng_multiselect_dropdown__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ng-multiselect-dropdown */ "./node_modules/ng-multiselect-dropdown/esm5/ng-multiselect-dropdown.js");
/* harmony import */ var ngx_quill__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ngx-quill */ "./node_modules/ngx-quill/index.js");











var routes = [
    {
        path: "",
        component: _default_default_component__WEBPACK_IMPORTED_MODULE_3__["DefaultComponent"],
        children: [
            {
                path: "",
                component: _view_detail_product_component__WEBPACK_IMPORTED_MODULE_8__["ViewDetailProductComponent"]
            }
        ]
    },
];
var ViewDetailProductModule = /** @class */ (function () {
    function ViewDetailProductModule() {
    }
    ViewDetailProductModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["RouterModule"].forChild(routes),
                _layouts_layout_module__WEBPACK_IMPORTED_MODULE_5__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_6__["FormsModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_6__["ReactiveFormsModule"],
                ngx_pagination__WEBPACK_IMPORTED_MODULE_7__["NgxPaginationModule"], ng_multiselect_dropdown__WEBPACK_IMPORTED_MODULE_9__["NgMultiSelectDropDownModule"],
                ngx_quill__WEBPACK_IMPORTED_MODULE_10__["QuillModule"],
            ],
            declarations: [_view_detail_product_component__WEBPACK_IMPORTED_MODULE_8__["ViewDetailProductComponent"]],
        })
    ], ViewDetailProductModule);
    return ViewDetailProductModule;
}());



/***/ })

}]);
//# sourceMappingURL=pages-default-product-view-product-view-detail-product-module-es5.js.map