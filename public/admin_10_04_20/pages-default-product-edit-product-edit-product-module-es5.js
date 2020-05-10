(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-product-edit-product-edit-product-module"],{

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/product/edit-product/edit-product.component.html":
/*!****************************************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/pages/default/product/edit-product/edit-product.component.html ***!
  \****************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"m-portlet m-portlet--mobile\">\n<div class=\"m-portlet__body\">\n<div class=\"col-lg-12\">\n<div class=\"m-portlet\">\n<div class=\"m-portlet__head\">\n<div class=\"m-portlet__head-caption\">\n\t<div class=\"m-portlet__head-title\">\n\t\t<span class=\"m-portlet__head-icon m--hide\">\n\t\t\t<i class=\"la la-gear\"></i>\n\t\t</span>\n\t\t<h3 class=\"m-portlet__head-text\">Edit Product</h3>\n\t</div>\n</div>\n</div>\n\n<form class=\"m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed\" [formGroup] =\"form\">\n<div class=\"m-portlet__body\">\t\n\t<div class=\"form-group m-form__group row\">\n\t\t<div class=\"col-lg-8\">\n\t\t\t<div class=\"form-group row\">\n\t\t\t\t<div class=\"col-lg-12\">\n\t\t\t\t\t<input class=\"form-control\" type=\"text\"  placeholder=\"Enter Product Name\" formControlName=\"product_name\" [(ngModel)] = \"product_name\">\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t\t<div class=\"form-group row\">\n\t\t\t\t<div class=\"col-lg-6\">\n\t\t\t\t\t<label>Price:</label>\n\t\t\t\t\t<div class=\"m-input-icon m-input-icon--left\">\n\t\t\t\t\t\t<span class=\"m-input-icon__icon m-input-icon__icon--left\"><span><i class=\"la la-usd\"></i></span></span>\n\t\t\t\t\t\t<input type=\"number\" class=\"form-control m-input\" placeholder=\"0.00\" formControlName=\"actual_price\" [(ngModel)] = \"actual_price\">\n\t\t\t\t\t\t\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t\t<div class=\"col-lg-6\">\n\t\t\t\t\t<label>Discounted Price:</label>\n\t\t\t\t\t<div class=\"m-input-icon m-input-icon--left\">\n\t\t\t\t\t\t<span class=\"m-input-icon__icon m-input-icon__icon--left\"><span><i class=\"la la-usd\"></i></span></span>\n\t\t\t\t\t\t<input type=\"number\" class=\"form-control m-input\" placeholder=\"0.00\" formControlName=\"current_price\" [(ngModel)] = \"current_price\">\n\t\t\t\t\t\t\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\t\n\t\t\t<div class=\"form-group row\">\n\t\t\t\t<div class=\"col-lg-12\">\n\t\t\t\t\t<select  class=\"form-control\" formControlName=\"category\" [(ngModel)] = \"category\">\n\t\t\t\t\t \t<option value=\"\" >Select Category</option>\n\t\t\t\t\t \t<option *ngFor=\"let category of categoryDropdownData\" value=\"{{category.id}}\">{{category.category_name}}</option>\n\t\t\t\t\t </select> \n\t\t\t\t</div>\n\t\t\t</div>\t\n\t\t\t\n\t\t\t<div class=\"form-group row\">\n\t\t\t\t<div class=\"col-lg-12\">\n\t\t\t\t\t<ng-multiselect-dropdown\n\t\t\t\t\t  [placeholder]=\"'custom placeholder'\"\n\t\t\t\t\t  [data]=\"dropdownList\"\n\t\t\t\t\t  formControlName=\"specification\"\n\t\t\t\t\t  [(ngModel)]=\"selectedItems\"\n\t\t\t\t\t  [settings]=\"dropdownSettings\"\n\t\t\t\t\t  (onSelect)=\"onItemSelect($event)\"\n\t\t\t\t\t  (onSelectAll)=\"onSelectAll($event)\"\n\t\t\t\t\t>\n\t\t\t\t\t</ng-multiselect-dropdown>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n\t\t<div class=\"col-lg-4\">\n\t\t\t<dropzone [config]=\"config\" [message]=\"'Click or drag images here to upload'\" (error)=\"onUploadError($event)\" (success)=\"onUploadSuccess($event)\"></dropzone>\n\t\t\t<img src=\"{{ImgUrl}}{{old_product_img}}\" title=\"product image\"  style=\"height: 100ox; width: 100px;\">\n\t\t</div>\n\t</div>\t\n\t<div class=\"form-group m-form__group row\">\n\t\t<div class=\"col-lg-12\">\n\t\t\t<div class=\"form-group m-form__group row\">\n\t\t\t\t<label for=\"short_description\">Short Description</label>\n\t\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12\">\n\t\t\t\t\t<textarea name=\"content\" id=\"short_description\" class=\"form-control\" data-provide=\"markdown\" rows=\"10\" formControlName=\"description\" [(ngModel)] = \"description\"></textarea>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n\t</div>\t\n\t<div class=\"form-group m-form__group row\">\n\t\t<div class=\"col-lg-12\">\n\t\t\t<div class=\"form-group m-form__group row\">\n\t\t\t\t<label for=\"description\">Description</label>\n\t\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12\">\n\t\t\t\t\t<textarea name=\"content\" id=\"description\" class=\"form-control\" data-provide=\"markdown\" rows=\"10\" formControlName=\"product_details\" [(ngModel)] = \"product_details\"></textarea>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n\t</div>\t\n\t<div class=\"form-group row\" style=\"margin-bottom: -50px;\">\n\t\t<div class=\"col-lg-12\">\n\t\t\t<div class=\"form-group m-form__group row\">\n\t\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12\">\n\t\t\t\t<!--begin::Portlet-->\n\t\t\t\t<div class=\"m-portlet m-portlet--head-sm\" m-portlet=\"true\" id=\"m_portlet_tools_5\">\n\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon\">\n\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cubes\"></i>\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">\n\t\t\t\t\t\t\t\t\tInventory\n\t\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t\t\t<p style=\"margin-top: 20px;margin-bottom: 1rem;margin-left: 10px;font-size: 11px;\">Manage Inventory for this product</p>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-portlet__head-tools\">\n\t\t\t\t\t\t\t<ul class=\"m-portlet__nav\">\n\t\t\t\t\t\t\t\t<li class=\"m-portlet__nav-item\">\n\t\t\t\t\t\t\t\t\t<a href=\"#\" m-portlet-tool=\"remove\" class=\"m-portlet__nav-link m-portlet__nav-link--icon\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-power-off\"></i>\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t<li class=\"m-portlet__nav-item\">\n\t\t\t\t\t\t\t\t\t<a href=\"\"  m-portlet-tool=\"reload\" class=\"m-portlet__nav-link m-portlet__nav-link--icon\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-circle\"></i>\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t<li class=\"m-portlet__nav-item\">\n\t\t\t\t\t\t\t\t\t<a href=\"#\"  m-portlet-tool=\"fullscreen\" class=\"m-portlet__nav-link m-portlet__nav-link--icon\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-expand\"></i>\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t<li class=\"m-portlet__nav-item\">\n\t\t\t\t\t\t\t\t\t<a href=\"\"  m-portlet-tool=\"toggle\" class=\"m-portlet__nav-link m-portlet__nav-link--icon\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-angle-down\"></i>\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<!--begin::Form-->\n\t\t\t\t\t<div class=\"m-form m-form--fit m-form--label-align-right\">\n\t\t\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\t\t    <div class=\"form-group  m-form__group row\">\n                                <div class=\"col-lg-12\">  \n                                \t  <div class=\"row m--margin-bottom-10\">    <div class=\"col-lg-6\">\n                                            <label for=\"sku\">SKU (Stock Keeping Unit)</label>\n                                            <div class=\"input-group\">\n                                                <input type=\"text\" class=\"form-control form-control-danger\" placeholder=\"SKU\" id=\"sku\"  formControlName=\"sku\" [(ngModel)]=\"sku\">\n                                            </div>\n                                        </div>\n                                        <div class=\"col-lg-6\">\n                                            <label for=\"stock_status\">Stock Status</label>\n                                            <div class=\"input-group\">\n                                            \t<select class=\"form-control m-input\" formControlName=\"availability\" [(ngModel)]=\"selectedAvilability\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select Availability</option>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"in stock\">Available</option>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"out of stock\">Not Available</option>\n\t\t\t\t\t\t\t\t\t\t\t\t</select>\n                                            </div>\n                                        </div>                    \n                                    </div>                                                        \n                                </div>                 \n                            </div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-portlet__foot m-portlet__foot--fit\">\n\t\t\t\t\t\t\t<div class=\"m-form__actions\">\n\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"e_stock_management\"> <label for=\"e_stock_management\" data-toggle='collapse' data-target='#e_stock_management_details'>Enable product stock management </label>\n\t\t\t\t\t\t\t<div class=\"col-lg-12\" id=\"e_stock_management_details\">  \n                               \t<div class=\"row m--margin-bottom-10\">    \n                               \t\t<div class=\"col-lg-6\">\n                                            <label for=\"stock_quantity\">Stock quantity</label>\n                                            <div class=\"input-group\">\n                                                <input type=\"number\" class=\"form-control form-control-danger\" placeholder=\"0.0\" id=\"stock_quantity\" formControlName=\"stock_quantity\" [(ngModel)] = \"stock_quantity\">\n                                            </div>\n                                        </div>\n                                        <div class=\"col-lg-6\">\n                                            <label for=\"allow_backorders\">Allow Backorders</label>\n                                            <div class=\"input-group\">\n                                            \t<select class=\"form-control\" id=\"allow_backorders\" formControlName=\"allow_backorders\" [(ngModel)] = \"allow_backorders\">\n                                            \t\t<option value=\"no\">Do not allow</option>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"notify\">Allow but notify customer</option>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"yes\">Allow</option>\n                                            \t</select>\n                                            </div>\n                                        </div>                    \n                                    </div>                                                        \n                                </div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"m-form__actions\">\n\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"a_stock_management\"> <label for=\"a_stock_management\">Allow only one quantity of this product to be bought in a single order </label>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<!--end::Form-->\n\t\t\t\t</div>\n\t\t\t\t<!--end::Portlet-->\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n\t</div>\t\n\t<div class=\"form-group row\" style=\"margin-bottom: -50px;\">\n\t\t<div class=\"col-lg-12\">\n\t\t\t<div class=\"form-group m-form__group row\">\n\t\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12\">\n\t\t\t\t<!--begin::Portlet-->\n\t\t\t\t<div class=\"m-portlet m-portlet--head-sm\" m-portlet=\"true\" id=\"m_portlet_tools_6\">\n\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon\">\n\t\t\t\t\t\t\t\t\t<i class=\"fa fa-truck\"></i>\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">\n\t\t\t\t\t\t\t\t\tShiping and Tax\n\t\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t\t\t<p style=\"margin-top: 20px;margin-bottom: 1rem;margin-left: 10px;font-size: 11px;\">Manage shiping and tax for this product</p>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-portlet__head-tools\">\n\t\t\t\t\t\t\t<ul class=\"m-portlet__nav\">\n\t\t\t\t\t\t\t\t<li class=\"m-portlet__nav-item\">\n\t\t\t\t\t\t\t\t\t<a href=\"#\" m-portlet-tool=\"remove\" class=\"m-portlet__nav-link m-portlet__nav-link--icon\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-power-off\"></i>\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t<li class=\"m-portlet__nav-item\">\n\t\t\t\t\t\t\t\t\t<a href=\"\"  m-portlet-tool=\"reload\" class=\"m-portlet__nav-link m-portlet__nav-link--icon\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-circle\"></i>\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t<li class=\"m-portlet__nav-item\">\n\t\t\t\t\t\t\t\t\t<a href=\"#\"  m-portlet-tool=\"fullscreen\" class=\"m-portlet__nav-link m-portlet__nav-link--icon\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-expand\"></i>\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t<li class=\"m-portlet__nav-item\">\n\t\t\t\t\t\t\t\t\t<a href=\"\"  m-portlet-tool=\"toggle\" class=\"m-portlet__nav-link m-portlet__nav-link--icon\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-angle-down\"></i>\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<!--begin::Form-->\n\t\t\t\t\t<div class=\"m-form m-form--fit m-form--label-align-right\">\n\t\t\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\t\t    <div class=\"form-group  m-form__group row\">\n\t\t\t\t\t\t    \t<div class=\"col-lg-12\">\n\t\t\t\t\t\t    \t\t<input type=\"checkbox\" id=\"require_shiping\" data-toggle='collapse' data-target='#require_shiping_details'> <label for=\"require_shiping\">This product requires shipping </label>\n\t\t\t\t\t\t    \t</div>\n\t\t\t\t\t\t    \t<div id=\"require_shiping_details\">\n\t\t\t\t\t\t    \t\t<div class=\"col-lg-12\">  \n\t                                \t<div class=\"row m--margin-bottom-10\">    \n\t                                \t  \t<div class=\"col-lg-3\">\n\t                                            <div class=\"input-group\">\n\t                                                <input type=\"number\" class=\"form-control form-control-danger\" placeholder=\"Weight (Kg)\" id=\"weight\" formControlName=\"weight\" [(ngModel)] = \"weight\">\n\t                                            </div>\n\t                                        </div>\n\t                                        <div class=\"col-lg-3\">\n\t                                            <div class=\"input-group\">\n\t                                            \t<input type=\"number\" class=\"form-control form-control-danger\" placeholder=\"Length (cm)\" id=\"length\" formControlName=\"length\" [(ngModel)] = \"length\">\n\t                                            </div>\n\t                                        </div>\n\t                                        <div class=\"col-lg-3\">\n\t                                            <div class=\"input-group\">\n\t                                                <input type=\"number\" class=\"form-control form-control-danger\" placeholder=\"Width (cm)\" id=\"width\" formControlName=\"width\" [(ngModel)] = \"width\">\n\t                                            </div>\n\t                                        </div>\n\t                                        <div class=\"col-lg-3\">\n\t                                            <div class=\"input-group\">\n\t                                            \t<input type=\"number\" class=\"form-control form-control-danger\" placeholder=\"Height (cm)\" id=\"sku\" formControlName=\"height\" [(ngModel)] = \"height\">\n\t                                            </div>\n\t                                        </div>                    \n\t                                \t</div>                                                        \n\t                                </div>\n\t                                <div class=\"col-lg-12\">  \n\t                                \t  <div class=\"row m--margin-bottom-10\">    \n\t                                \t  \t<div class=\"col-lg-12\">\n\t                                            <label for=\"shipping_class\">Shipping Class</label>\n\t                                            <div class=\"input-group\">\n\t                                                <select id=\"shipping_class\" class=\"form-control\" formControlName=\"shipping_class\" [(ngModel)] = \"shipping_class\">\n\t                                                \t<option>No Shiping Class</option>\n\t                                                \t<option>PAC</option>\n\t                                                </select>\n\t                                            </div>\n\t                                            <p>Shipping classes are used by certain shipping methods to group similar products.</p>\n\t                                        </div>                    \n\t                                </div>                                                        \n\t                                </div> \n\t                                <div class=\"col-lg-12\">\n\t\t\t\t\t\t\t    \t\t<input type=\"checkbox\" id=\"override_defaults_shiping_cost\" data-toggle='collapse' data-target='#override_defaults_shiping_cost_details'> <label for=\"override_defaults_shiping_cost\">Override your store's default shipping cost for this product </label>\n\t\t\t\t\t\t\t    \t</div> \n\t                                <div class=\"col-lg-12\" id=\"override_defaults_shiping_cost_details\">\n\t\t\t\t\t\t\t    \t\t<div class=\"row m--margin-bottom-10\">\n\t                                        <div class=\"col-lg-4\">\n\t                                            <div class=\"input-group\">\n\t                                            \t<input type=\"number\" class=\"form-control form-control-danger\" placeholder=\"Length (cm)\" id=\"o_length\" formControlName=\"o_length\" [(ngModel)] = \"o_length\">\n\t                                            </div>\n\t                                        </div>\n\t                                        <div class=\"col-lg-4\">\n\t                                            <div class=\"input-group\">\n\t                                                <input type=\"number\" class=\"form-control form-control-danger\" placeholder=\"Width (cm)\" id=\"o_width\" formControlName=\"o_width\" [(ngModel)] = \"o_width\">\n\t                                            </div>\n\t                                        </div>\n\t                                        <div class=\"col-lg-4\">\n\t                                            <div class=\"input-group\">\n\t                                            \t<input type=\"number\" class=\"form-control form-control-danger\" placeholder=\"Height (cm)\" id=\"o_height\" formControlName=\"o_height\" [(ngModel)] = \"o_height\">\n\t                                            </div>\n\t                                        </div>                    \n\t                                \t</div>\n\t\t\t\t\t\t\t    \t</div>\n\t\t\t\t\t\t    \t</div>          \n                            </div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<!--end::Form-->\n\t\t\t\t</div>\n\t\t\t\t<!--end::Portlet-->\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n\t</div>\t\n\t<div class=\"form-group row\" style=\"margin-bottom: -50px;\">\n\t\t<div class=\"col-lg-12\">\n\t\t\t<div class=\"form-group m-form__group row\">\n\t\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12\">\n\t\t\t\t<!--begin::Portlet-->\n\t\t\t\t<div class=\"m-portlet m-portlet--head-sm\" m-portlet=\"true\" id=\"m_portlet_tools_8\">\n\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon\">\n\t\t\t\t\t\t\t\t\t<i class=\"fa fa-list-alt\"></i>\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">\n\t\t\t\t\t\t\t\t\t Attribute\n\t\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t\t\t<p style=\"margin-top: 20px;margin-bottom: 1rem;margin-left: 10px;font-size: 11px;\">Manage attribute for this product</p>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-portlet__head-tools\">\n\t\t\t\t\t\t\t<ul class=\"m-portlet__nav\">\n\t\t\t\t\t\t\t\t<li class=\"m-portlet__nav-item\">\n\t\t\t\t\t\t\t\t\t<a href=\"#\" m-portlet-tool=\"remove\" class=\"m-portlet__nav-link m-portlet__nav-link--icon\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-power-off\"></i>\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t<li class=\"m-portlet__nav-item\">\n\t\t\t\t\t\t\t\t\t<a href=\"\"  m-portlet-tool=\"reload\" class=\"m-portlet__nav-link m-portlet__nav-link--icon\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-circle\"></i>\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t<li class=\"m-portlet__nav-item\">\n\t\t\t\t\t\t\t\t\t<a href=\"#\"  m-portlet-tool=\"fullscreen\" class=\"m-portlet__nav-link m-portlet__nav-link--icon\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-expand\"></i>\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t<li class=\"m-portlet__nav-item\">\n\t\t\t\t\t\t\t\t\t<a href=\"\"  m-portlet-tool=\"toggle\" class=\"m-portlet__nav-link m-portlet__nav-link--icon\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-angle-down\"></i>\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<!--begin::Form-->\n\t\t\t\t\t<div class=\"m-form m-form--fit m-form--label-align-right\" >\n\t\t\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\t\t    <div class=\"form-group  m-form__group row\">\n\t\t\t\t\t\t    \t<div class=\"col-lg-12\" id=\"attribute_list\" *ngIf=\"attsLoaded\">\n\t\t\t\t\t\t    \t\t\n\t\t\t\t\t\t    \t\t<div class=\"form-group row\" style=\"margin-bottom: -50px;\" *ngFor=\"let custom_attribite of custom_attribite_list; let i = index \">\n\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Portlet-->\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet m-portlet--head-sm\" m-portlet=\"true\" id=\"m_portlet_tools_9\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bars fa-flip-vertical\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\" style=\"text-transform: capitalize;\" >\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{custom_attribite.name}}\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__head-tools\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"m-portlet__nav\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-portlet__nav-item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" m-portlet-tool=\"remove\" class=\"m-portlet__nav-link m-portlet__nav-link--icon\" (click)=\"removeAttribute(custom_attribite.id)\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-power-off\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Form-->\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-form m-form--fit m-form--label-align-right\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"form-group  m-form__group row\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t    \t<div class=\"col-lg-12\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t    \t\t<input type=\"checkbox\" id=\"discount_option\" data-toggle=\"collapse\" data-target=\"#discount_option_details\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t    \t\t<label for=\"discount_option\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t    \t\t\tEnable bulk discount \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t    \t\t</label>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t    \t</div>\n\t\t\t\t\t\t\t\t                                <div class=\"col-lg-12\" id=\"discount_option_details\">  \n\t\t\t\t\t\t\t\t                                \t  <div class=\"row m--margin-bottom-10\">    \n\t\t\t\t\t\t\t\t                                \t  \t<div class=\"col-lg-6\">\n\t\t\t\t\t\t\t\t                                            <label for=\"minimum_quantity\">Name</label>\n\t\t\t\t\t\t\t\t                                            <div class=\"input-group\">\n\t\t\t\t\t\t\t\t                                            \t<label><b style=\"text-transform: capitalize;\">{{custom_attribite.name}}</b></label>\n\t\t\t\t\t\t\t\t                                                <input type=\"checkbox\" id=\"visibility_on_page\">\n\t\t\t\t\t\t\t\t                                                \n\t\t\t\t\t\t\t\t                                                 <label for=\"visibility_on_page\">Visible on the product page\t</label>   \t\t\n\t\t\t\t\t\t\t\t                                            </div>\n\t\t\t\t\t\t\t\t                                        </div>\n\t\t\t\t\t\t\t\t                                        <div class=\"col-lg-6\">\n\t\t\t\t\t\t\t\t                                            <label for=\"discount_per\">Values</label>\n\t\t\t\t\t\t\t\t                                            <ng-multiselect-dropdown\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  [placeholder]=\"'custom placeholder'\"\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  [data]=\"custom_attribite.data\"\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  [settings]=\"dropdownSettings\"\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  (onSelect)=\"onItemSelect($event)\"\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  (onSelectAll)=\"onSelectAll($event)\"\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   [ngModelOptions]=\"{standalone: true}\" \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  [(ngModel)] = \"custom_attribite.selecteddata\"\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ng-multiselect-dropdown>\n\t\t\t\t\t\t\t\t                                        </div>                    \n\t\t\t\t\t\t\t\t                                    </div>                                                        \n\t\t\t\t\t\t\t\t                                </div>                 \n\t\t\t\t\t\t\t\t                            </div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Form-->\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Portlet-->\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t<!--div *ngIf= 'loadComponent'>\n\t\t\t\t\t\t\t\t\t\t<my-child-component></my-child-component>\n\t\t\t\t\t\t\t\t\t</div-->\n\t\t\t\t\t\t    \t</div>\n                                <div class=\"col-lg-12\">  \n                                \t  <div class=\"row m--margin-bottom-10\">    \n                                \t  \t<div class=\"col-lg-6\">\n                                            <div class=\"input-group\">\n                                                <select class=\"form-control\" placeholder=\"Custom Attribute\" formControlName=\"attributes\" [(ngModel)] = \"attributes\">\n                                                \t<option>Custom Attribute</option>\n                                                \t<option value=\"{{option.id}}\" *ngFor=\"let option of attributeOptions\">{{option.name}}</option>\n                                                </select>\n                                            </div>\n                                        </div>\n                                        <div class=\"col-lg-6\">\n                                            <button class=\"btn btn-secondary\" (click)=\"addAttribute()\">Add Atrribute</button>\n                                            <button class=\"btn btn-secondary\" (click)=\"saveAttribute()\">Save Atrribute</button>\n                                        </div>                    \n                                    </div>                                                        \n                                </div>                 \n                            </div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<!--end::Form-->\n\t\t\t\t</div>\n\t\t\t\t<!--end::Portlet-->\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n\t</div>\t\n\t<div class=\"form-group row\" style=\"margin-bottom: -50px;\">\n\t\t<div class=\"col-lg-12\">\n\t\t\t<div class=\"form-group m-form__group row\">\n\t\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12\">\n\t\t\t\t<!--begin::Portlet-->\n\t\t\t\t<div class=\"m-portlet m-portlet--head-sm\" m-portlet=\"true\" id=\"m_portlet_tools_9\">\n\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon\">\n\t\t\t\t\t\t\t\t\t<i class=\"fa fa-gift\"></i>\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">\n\t\t\t\t\t\t\t\t\tDiscount Options\n\t\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t\t\t<p style=\"margin-top: 20px;margin-bottom: 1rem;margin-left: 10px;font-size: 11px;\">Manage discount options for this product</p>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-portlet__head-tools\">\n\t\t\t\t\t\t\t<ul class=\"m-portlet__nav\">\n\t\t\t\t\t\t\t\t<li class=\"m-portlet__nav-item\">\n\t\t\t\t\t\t\t\t\t<a href=\"#\" m-portlet-tool=\"remove\" class=\"m-portlet__nav-link m-portlet__nav-link--icon\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-power-off\"></i>\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t<li class=\"m-portlet__nav-item\">\n\t\t\t\t\t\t\t\t\t<a href=\"\"  m-portlet-tool=\"reload\" class=\"m-portlet__nav-link m-portlet__nav-link--icon\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-circle\"></i>\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t<li class=\"m-portlet__nav-item\">\n\t\t\t\t\t\t\t\t\t<a href=\"#\"  m-portlet-tool=\"fullscreen\" class=\"m-portlet__nav-link m-portlet__nav-link--icon\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-expand\"></i>\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t<li class=\"m-portlet__nav-item\">\n\t\t\t\t\t\t\t\t\t<a href=\"\"  m-portlet-tool=\"toggle\" class=\"m-portlet__nav-link m-portlet__nav-link--icon\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-angle-down\"></i>\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<!--begin::Form-->\n\t\t\t\t\t<div class=\"m-form m-form--fit m-form--label-align-right\">\n\t\t\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\t\t    <div class=\"form-group  m-form__group row\">\n\t\t\t\t\t\t    \t<div class=\"col-lg-12\">\n\t\t\t\t\t\t    \t\t<input type=\"checkbox\" id=\"discount_option\" data-toggle=\"collapse\" data-target=\"#discount_option_details\">\n\t\t\t\t\t\t    \t\t<label for=\"discount_option\">\n\t\t\t\t\t\t    \t\t\tEnable bulk discount \n\t\t\t\t\t\t    \t\t</label>\n\t\t\t\t\t\t    \t</div>\n                                <div class=\"col-lg-12\" id=\"discount_option_details\">  \n                                \t  <div class=\"row m--margin-bottom-10\">    <div class=\"col-lg-6\">\n                                            <label for=\"minimum_quantity\">Minimum quantity</label>\n                                            <div class=\"input-group\">\n                                                <input type=\"number\" class=\"form-control form-control-danger\" placeholder=\"0\" id=\"discount_minimum_quantity\" formControlName=\"discount_minimum_quantity\" [(ngModel)] = \"discount_minimum_quantity\">\n                                            </div>\n                                        </div>\n                                        <div class=\"col-lg-6\">\n                                            <label for=\"discount_per\">Discount %</label>\n                                            <div class=\"input-group\">\n                                            \t<input type=\"number\" class=\"form-control form-control-danger\" placeholder=\"0\" id=\"discount_per\" formControlName=\"discount_per\" [(ngModel)] = \"discount_per\">\n                                            </div>\n                                        </div>                    \n                                    </div>                                                        \n                                </div>                 \n                            </div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<!--end::Form-->\n\t\t\t\t</div>\n\t\t\t\t<!--end::Portlet-->\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n\t</div>\n\n\t<div class=\"form-group row\" style=\"margin-bottom: -50px;\">\n\t\t<div class=\"col-lg-12\">\n\t\t\t<div class=\"form-group m-form__group row\">\n\t\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12\">\n\t\t\t\t<!--begin::Portlet-->\n\t\t\t\t<div class=\"m-portlet m-portlet--head-sm\" m-portlet=\"true\" id=\"m_portlet_tools_9\">\n\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon\">\n\t\t\t\t\t\t\t\t\t<i class=\"fa fa-paperclip\"></i>\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">\n\t\t\t\t\t\t\t\t\tAccesories \n\t\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t\t\t<p style=\"margin-top: 20px;margin-bottom: 1rem;margin-left: 10px;font-size: 11px;\">Manage accesories for this product</p>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-portlet__head-tools\">\n\t\t\t\t\t\t\t<ul class=\"m-portlet__nav\">\n\t\t\t\t\t\t\t\t<li class=\"m-portlet__nav-item\">\n\t\t\t\t\t\t\t\t\t<a href=\"#\" m-portlet-tool=\"remove\" class=\"m-portlet__nav-link m-portlet__nav-link--icon\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-power-off\"></i>\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t<li class=\"m-portlet__nav-item\">\n\t\t\t\t\t\t\t\t\t<a href=\"\"  m-portlet-tool=\"reload\" class=\"m-portlet__nav-link m-portlet__nav-link--icon\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-circle\"></i>\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t<li class=\"m-portlet__nav-item\">\n\t\t\t\t\t\t\t\t\t<a href=\"#\"  m-portlet-tool=\"fullscreen\" class=\"m-portlet__nav-link m-portlet__nav-link--icon\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-expand\"></i>\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t<li class=\"m-portlet__nav-item\">\n\t\t\t\t\t\t\t\t\t<a href=\"\"  m-portlet-tool=\"toggle\" class=\"m-portlet__nav-link m-portlet__nav-link--icon\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-angle-down\"></i>\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<!--begin::Form-->\n\t\t\t\t\t<div class=\"m-form m-form--fit m-form--label-align-right\">\n\t\t\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\t\t    <div class=\"form-group  m-form__group row\">\n\t\t\t\t\t\t    \t<div class=\"col-lg-12\">\n\t\t\t\t\t\t    \t</div>\n                                <div class=\"col-lg-12\" id=\"discount_option_details\">  \n                                \t  <div class=\"row m--margin-bottom-10\">    \n                                \t  \t<div class=\"col-lg-4\">\n                                            <label for =\"Sub-Category\">Category</label>\n                                            <div class=\"input-group\">\n                                                <select class=\"form-control m-input\" formControlName=\"selectedCategories\" [(ngModel)]=\"selectedCategories\" (change)=\"get_product()\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select Category</option>\t\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<option *ngFor=\"let category1 of categoryListData\" value=\"{{category1.id}}\">{{category1.category_name}}</option>\n\t\t\t\t\t\t\t\t\t\t\t\t</select>\n                                            </div>\n                                        </div>\n                                        <div class=\"col-lg-4\">\n                                            <label for=\"discount_per\">Products</label>\n                                            <div class=\"input-group\">\n                                            \t<select class=\"form-control m-input\" formControlName=\"selectedProduct\" [(ngModel)]=\"selectedProduct\" >\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select Product</option>\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t<option *ngFor=\"let product of productData\" value=\"{{product.product_id}}\">{{product.product_name}}</option>\n\t\t\t\t\t\t\t\t\t\t\t\t</select>\n                                            </div>\n                                        </div>\n                                        <div class=\"col-lg-4\">\n                                            <label><br></label>\n                                            <div class=\"input-group\">\n                                            \t<button class=\"btn btn-warning\" (click)=\"saveAccesories()\">Save</button>\n                                            </div>\n                                        </div>                    \n                                    </div>                                                        \n                                </div>                 \n                            </div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-portlet__foot m-portlet__foot--fit\">\n\t\t\t\t\t\t\t<div class=\"m-form__actions\">\n\t\t\t\t\t\t\t\t<h3>Current Accesories</h3>\n\t\t\t\t\t\t\t\t<div class=\"form-control\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__body\" *ngIf=\"accessData_bool;else other_content\">\n\n\t\t\t\t\t\t\t\t\t\t<div class=\"m_datatable m-datatable m-datatable--default m-datatable--loaded\" id=\"local_data\" style=\"position: static; zoom: 1;\">\n\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"m-datatable__table\" style=\"display: block; min-height: 300px; overflow-x: auto;\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<thead class=\"m-datatable__head\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"m-datatable__row\" style=\"left: 0px;\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-field=\"Latitude\" class=\"m-datatable__cell m-datatable__cell--sort\"><span> Accessories Name </span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-field=\"Latitude\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Categrory </span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-field=\"Latitude\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Sub-Categrory </span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-field=\"Latitude\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Action</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody class=\"m-datatable__body\" style=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr data-row=\"0\" *ngFor=\"let access of accessData | paginate: {itemsPerPage: 10, currentPage: p}\" class=\"m-datatable__row\" style=\"left: 0px;\">\n\n\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td data-field=\"Status\"class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\"> {{access.product_name}}</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td data-field=\"Status\"class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\"> {{access.category_name}}</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td data-field=\"Status\"class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\"> {{access.name}}</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>\n\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td data-field=\"Actions\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"overflow: visible; position: relative; width: 110px;\">\n\n\n\t\t\t\t\t\t\t  \t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill\" title=\"Delete\" (click)=\"accessDelete(access.pk_accessory_id)\"> \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-trash\"></i>  \n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>\n\t\t\t\t\t\t\t\t\t\t\t\t</table>\n\t\t\t\t\t\t\t\t\t\t\t\t<pagination-controls (pageChange)=\"p = $event\"></pagination-controls> \n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<ng-template #other_content>no content here...</ng-template>\n\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<!--end::Form-->\n\t\t\t\t</div>\n\t\t\t\t<!--end::Portlet-->\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n\t</div>\t\n\t<div class=\"form-group row\">\n\t\t<div class=\"col-lg-12\">\n\t\t\t<div class=\"form-group m-form__group row\" style=\"margin-bottom: -50px;\">\n\t\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12\">\n\t\t\t\t<!--begin::Portlet-->\n\t\t\t\t<div class=\"m-portlet m-portlet--head-sm\" m-portlet=\"true\" id=\"m_portlet_tools_10\">\n\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon\">\n\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cog\"></i>\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">\n\t\t\t\t\t\t\t\t\tOther Options\n\t\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t\t\t<p style=\"margin-top: 20px;margin-bottom: 1rem;margin-left: 10px;font-size: 11px;\">Manage other options for this product</p>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-portlet__head-tools\">\n\t\t\t\t\t\t\t<ul class=\"m-portlet__nav\">\n\t\t\t\t\t\t\t\t<li class=\"m-portlet__nav-item\">\n\t\t\t\t\t\t\t\t\t<a href=\"#\" m-portlet-tool=\"remove\" class=\"m-portlet__nav-link m-portlet__nav-link--icon\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-power-off\"></i>\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t<li class=\"m-portlet__nav-item\">\n\t\t\t\t\t\t\t\t\t<a href=\"\"  m-portlet-tool=\"reload\" class=\"m-portlet__nav-link m-portlet__nav-link--icon\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-circle\"></i>\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t<li class=\"m-portlet__nav-item\">\n\t\t\t\t\t\t\t\t\t<a href=\"#\"  m-portlet-tool=\"fullscreen\" class=\"m-portlet__nav-link m-portlet__nav-link--icon\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-expand\"></i>\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t<li class=\"m-portlet__nav-item\">\n\t\t\t\t\t\t\t\t\t<a href=\"\"  m-portlet-tool=\"toggle\" class=\"m-portlet__nav-link m-portlet__nav-link--icon\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-angle-down\"></i>\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<!--begin::Form-->\n\t\t\t\t\t<div class=\"m-form m-form--fit m-form--label-align-right\">\n\t\t\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\t\t    <div class=\"form-group  m-form__group row\">\n                                <div class=\"col-lg-12\">  \n                                \t  <div class=\"row m--margin-bottom-10\">    <div class=\"col-lg-6\">\n                                            <label for=\"product_status\">Product Status</label>\n                                            <div class=\"input-group\">\n                                                <select class=\"form-control\" id=\"product_status\" formControlName=\"product_status\" [(ngModel)] = \"product_status\">\n                                            \t\t<option value=\"Active\" selected=\"selected\">Online</option>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Inactive\">Draft</option>\n                                            \t</select>\n                                            </div>\n                                        </div>\n                                        <div class=\"col-lg-6\">\n                                            <label for=\"visibility\">Visibility</label>\n                                            <div class=\"input-group\">\n                                            \t<select class=\"form-control\" id=\"visibility\" formControlName=\"visibility\" [(ngModel)] = \"visibility\">\n                                            \t\t<option value=\"visible\" selected=\"selected\">Visible</option>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"catalog\">Catalog</option>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"search\">Search</option>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"hidden\">Hidden</option>\n                                            \t</select>\n                                            </div>\n                                        </div>                    \n                                    </div>                                                        \n                                </div>\n                                <div class=\"col-lg-12\">  \n                                \t  <div class=\"row m--margin-bottom-10\">    \n                                \t  \t<div class=\"col-lg-12\">\n                                            <label for=\"product_status\">Purchase Note</label>\n                                            <div class=\"input-group\">\n                                                <textarea class=\"form-control m-input\" placeholder=\"Customer will get this info in their order email\"  formControlName=\"purchase_note\" [(ngModel)] = \"purchase_note\"></textarea>\n                                            </div>\n                                        </div>                    \n                                    </div>                                                        \n                                </div>                 \n                            </div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-portlet__foot m-portlet__foot--fit\">\n\t\t\t\t\t\t\t<div class=\"m-form__actions\">\n\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"e_review\" (ngChecked)=\"e_review\" formControlName=\"e_review\" [(ngModel)]=\"e_review\"> <label for=\"e_review\">Enable product reviews  </label>\n\t\t\t\t\t\t\t\t<br>\n\t\t\t\t\t\t\t\t<input (ngChecked)=\"shareable_product\" formControlName=\"shareable_product\" [(ngModel)]=\"shareable_product\" type=\"checkbox\" id=\"shareable\" data-toggle=\"collapse\" data-target=\"#shareable-form\"> \n\t\t\t\t\t\t\t\t<label for=\"shareable\">Shareable (Make your product shareable and earn commission each sale)  </label>\n\t\t\t\t\t\t\t\t<br>\n\t\t\t\t\t\t\t\t<div id=\"shareable-form\" class=\"form-control\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\n\t\t\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\" >\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">\n\n\t\t\t\t\t\t\t\t\t\t\t<label for =\"admin_commission_type\"  class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\t\t\tAdmin Commision Type\n\t\t\t\t\t\t\t\t\t\t\t</label>\n\n\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control m-input\" formControlName=\"admin_commission_type\" [(ngModel)]=\"admin_commission_type\" [(ngModel)] = \"admin_commission_type\">\n\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select Admin Commision Type</option>\n\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"flat\">Fixed</option>\n\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"percentage\">Percentage</option>\n\t\t\t\t\t\t\t\t\t\t\t</select>\n\n\t\t\t\t\t\t\t\t\t\t\t<!--<app-field-error-display \n\t\t\t\t\t\t\t\t\t\t\t\t[displayError]=\"isFieldValid('admin_commission_type')\" errorMsg=\"Please Select Admin Commision Type\">\n \t\t\t\t\t\t\t\t\t\t\t</app-field-error-display>-->\n\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">\n\n\t\t\t\t\t\t\t\t\t\t\t<label for =\"admin_commission\"  class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\t\t\tAdmin Commision Price/Percentage\n\t\t\t\t\t\t\t\t\t\t\t</label>\n\n\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Enter Admin Price/Percentage\" formControlName=\"admin_commission\" [(ngModel)] = \"admin_commission\"   (keypress)=\"numberOnly($event)\">\n\n\t\t\t\t\t\t\t\t\t\t\t<!--<app-field-error-display \n\t\t\t\t\t\t\t\t\t\t\t\t[displayError]=\"isFieldValid('admin_commission')\" errorMsg=\"Please Enter Admin Commision Price/Percentage\">\n \t\t\t\t\t\t\t\t\t\t\t</app-field-error-display>-->\n\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\n\n\t\t\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\" >\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">\n\n\t\t\t\t\t\t\t\t\t\t\t<label for =\"vendor_commission_type\"   class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\t\t\tVendor Commision Type\n\t\t\t\t\t\t\t\t\t\t\t</label>\n\n\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control m-input\" formControlName=\"vendor_commission_type\" [(ngModel)]=\"vendor_commission_type\">\n\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select Vendor Commision Type</option>\n\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"flat\">Fixed</option>\n\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"percentage\">Percentage</option>\n\t\t\t\t\t\t\t\t\t\t\t</select>\n\n\t\t\t\t\t\t\t\t\t\t\t<!--<app-field-error-display \n\t\t\t\t\t\t\t\t\t\t\t\t[displayError]=\"isFieldValid('vendor_commission_type')\" errorMsg=\"Please Select Vendor Commision Type\">\n \t\t\t\t\t\t\t\t\t\t\t</app-field-error-display>--> \n\t\t\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">\n\n\t\t\t\t\t\t\t\t\t\t\t<label for =\"vendor_commission\" class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\t\t\tVendor Commision Price/Percentage\n\t\t\t\t\t\t\t\t\t\t\t</label>\n\n\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Enter Vendor Price/Percentage\" formControlName=\"vendor_commission\" [(ngModel)] = \"vendor_commission\"  (keypress)=\"numberOnly($event)\">\n\n\t\t\t\t\t\t\t\t\t\t\t<!--<app-field-error-display \n\t\t\t\t\t\t\t\t\t\t\t\t[displayError]=\"isFieldValid('vendor_commission')\" errorMsg=\"Please Enter Vendor Commision Price/Percentage\">\n \t\t\t\t\t\t\t\t\t\t\t</app-field-error-display>--> \n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<!--end::Form-->\n\t\t\t\t</div>\n\t\t\t\t<!--end::Portlet-->\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n\t</div>              \n</div>\n<div class=\"m-portlet__foot m-portlet__no-border m-portlet__foot--fit\">\n\t<div class=\"m-form__actions m-form__actions--solid\">\n\t\t<div class=\"row\">\n\t\t\t<div class=\"col-lg-6\">\n\t\t\t\t<button type=\"submit\" class=\"btn btn-success\" (click)=\"onSubmit()\">Save Product</button>\n\t\t\t\t<button type=\"reset\" class=\"btn btn-secondary\">Cancel</button>\n\t\t\t</div>\n\t\t</div>\n\t</div>\n</div>\n</form>\n\n</div>\n</div>\n</div>\n</div>\n\n"

/***/ }),

/***/ "./src/app/theme/pages/default/product/edit-product/edit-product.component.ts":
/*!************************************************************************************!*\
  !*** ./src/app/theme/pages/default/product/edit-product/edit-product.component.ts ***!
  \************************************************************************************/
/*! exports provided: EditProductComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "EditProductComponent", function() { return EditProductComponent; });
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












var EditProductComponent = /** @class */ (function () {
    function EditProductComponent(imgBaseUrl, toastr, route, router, _dataService, _brandService, _menuService, _categoryService, _productService, _subCategory, _script, formBuilder) {
        this.imgBaseUrl = imgBaseUrl;
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
        this.uploaded_image = 0;
        this.list_attribute_option = [];
        this.list_attribute_value = [];
        this.categories_for_ass = [];
        this.items = ['Amsterdam', 'Antwerp'];
        this.noOfPage = '';
        this.colorAttributeOption = ['Red', 'Green', 'Yellow', 'Grey'];
        this.brandAttributeOption = ['Mi', 'Apple', 'Samsung', 'Hawel'];
        this.sizeAttributeOption = ['XXS', 'XS', 'S', 'M', 'L', 'XL', 'XXL', 'XXXL'];
        this.tagData = '';
        this.sizeData = '';
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
        this.specification = '';
        this.category = '';
        // selectedProductTypes = [];
        this.productTypes = [];
        this.cities = [];
        this.hide = '1';
        this.selectedBrand = [];
        this.selectedAvilability = [];
        this.admin_commission_type = [];
        this.vendor_commission_type = [];
        this.alternateProductImgUrl = [];
        this.productTypeDrpdown = [];
        this.attrData = [];
        this.accessData = [];
        this.accessData_bool = 0;
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
        this.e_review = '';
        this.id = '';
        this.sku = '';
        this.product_name = '';
        this.shareable_product = false;
        //productImgUrl ='';
        this.actual_price = '';
        this.mrp = '';
        this.current_price = '';
        this.description = '';
        this.total_stock_quantity = '';
        this.stock_quantity = '';
        this.old_product_img = '';
        this.admin_commission = '';
        this.vendor_commission = '';
        this.product_details = '';
        this.availability = '';
        this.allow_backorders = 0;
        this.shipping_class = '';
        this.weight = '';
        this.length = '';
        this.width = '';
        this.height = '';
        this.o_length = '';
        this.o_width = '';
        this.o_height = '';
        this.purchase_note = '';
        this.visibility = '';
        this.product_status = '';
        this.discount_per = '';
        this.discount_minimum_quantity = '';
        this.attributeOptions = [];
        this.attributes = '';
        this.attsLoaded = false;
        this.form = formBuilder.group({
            id: [null],
            list_attribute_value: [],
            list_attribute_option: [],
            product_state: [null],
            sku: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_5__["Validators"].required],
            product_name: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_5__["Validators"].required],
            shareable_product: [null],
            product_img: [null],
            old_product_img: [null],
            specification: [null],
            actual_price: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_5__["Validators"].required],
            mrp: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_5__["Validators"].required],
            current_price: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_5__["Validators"].required],
            vendor_commission: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_5__["Validators"].required],
            selectedCategories: [null],
            selectedProduct: [null],
            total_stock_quantity: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_5__["Validators"].required],
            stock_quantity: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_5__["Validators"].required],
            availability: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_5__["Validators"].required],
            category: [null],
            description: [null],
            product_details: [null],
            admin_commission_type: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_5__["Validators"].required],
            admin_commission: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_5__["Validators"].required],
            vendor_commission_type: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_5__["Validators"].required],
            allow_backorders: [null],
            shipping_class: [null],
            weight: [null],
            length: [null],
            width: [null],
            e_review: [null],
            height: [null],
            o_length: [null],
            o_width: [null],
            o_height: [null],
            purchase_note: [null],
            visibility: [null],
            product_status: [null],
            discount_minimum_quantity: [null],
            discount_per: [null],
            attributes: [null],
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
    EditProductComponent.prototype.numberOnly = function (event) {
        var charCode = (event.which) ? event.which : event.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    };
    EditProductComponent.prototype.ngOnInit = function () {
        var _this = this;
        /*user permission*/
        var currentUser = JSON.parse(localStorage.getItem('currentUser'));
        var permission = currentUser.success.permission;
        if (permission.product_edit != 1) {
            this.toastr.error('You have not permission to visit this page.', 'Error Message');
            this.router.navigate(['/']);
        }
        /*user permission*/
        this._categoryService.getAll().subscribe(function (data) {
            _this.categories_for_ass = data.success;
        });
        // console.log(this.brand);
        this.ImgUrl = this.imgBaseUrl._imgBaseUrl;
        this.route.params.subscribe(function (params) {
            if (params.product_id) {
                _this.product_id = params.product_id;
                _this._productService.getById(_this.product_id).subscribe(function (data) {
                    //console.log(data.success);
                    _this._productService.getTagForDropDown().subscribe(function (data_tag) {
                        _this.dropdownList = data_tag.success;
                        _this.selectedItems = JSON.parse(data.success.specification);
                        //console.log(this.selectedItems);
                        //  console.log(this.dropdownList);
                        //  console.log(data_tag);
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
                    _this._productService.getAttributeWithProById(_this.product_id).subscribe(function (data_attr) {
                        _this.custom_attribite_list = (data_attr.success);
                        _this.attsLoaded = true;
                    });
                    // console.log(JSON.parse(this.custom_attribite_list1));
                    //console.log('product_data_from server' data);
                    _this.id = data.success.product_id;
                    // console.log(this.id);
                    //attibutes
                    /*this.custom_attribite_list = JSON.parse(data.success.attributes);
                     
                      let testArray = [];
                      if (this.custom_attribite_list != '' && this.custom_attribite_list != null) {
                          this.custom_attribite_list.forEach(list => {

                              this._productService.getAttributeById(parseInt(list.id),parseInt(this.product_id)).subscribe(data => {
                                  let testObj = { "id": data.success.id, "name": data.success.name, "data": JSON.parse(data.success.data), "selecteddata": list.data };
                                  //this.custom_attribite_list.push(testObj);
                                  //let testObj = {"id": data.success.id, "name": list.name, "data": list.data};
                                  testArray.push(testObj);
                              });


                          });
                          this.custom_attribite_list = testArray;
                      }
                       
                       console.log(this.custom_attribite_list);*/
                    /*console.log('this.custom_attribite_list 23');
                    console.log(this.custom_attribite_list); */
                    //   console.log('data.success.brand_id')
                    //  console.log(data.success.brand_id)
                    //attibutes
                    _this.weight = data.success.weight;
                    _this.length = data.success.length;
                    _this.width = data.success.width;
                    _this.height = data.success.height;
                    _this.o_length = data.success.o_length;
                    _this.o_width = data.success.o_width;
                    _this.o_height = data.success.o_height;
                    _this.sku = data.success.sku;
                    _this.product_name = data.success.product_name;
                    _this.shareable_product = data.success.shareable_product;
                    _this.category = data.success.category;
                    _this.brand_id = data.success.brand_id;
                    _this.old_product_img = data.success.product_img;
                    _this.actual_price = data.success.actual_price;
                    _this.mrp = data.success.mrp;
                    _this.e_review = data.success.e_review;
                    _this.product_status = data.success.status;
                    _this.product_status = data.success.status;
                    _this.purchase_note = data.success.purchase_note;
                    _this.discount_minimum_quantity = data.success.discount_minimum_quantity;
                    _this.product_details = data.success.product_details;
                    _this.current_price = data.success.current_price;
                    _this.description = data.success.description;
                    _this.total_stock_quantity = data.success.total_stock_quantity;
                    _this.stock_quantity = data.success.stock_quantity;
                    _this.selectedAvilability = data.success.availability;
                    _this.admin_commission_type = data.success.admin_commission_type;
                    _this.discount_per = data.success.discount_per;
                    _this.admin_commission = data.success.admin_commission;
                    _this.vendor_commission_type = data.success.vendor_commission_type;
                    _this.vendor_commission = data.success.vendor_commission;
                    _this._productService.getColor(params.product_id).subscribe(function (data) {
                        //console.log(data.success);
                        _this.colorData = data.success;
                        _this.noOfPage = data.success.length;
                        //console.log('getColor', data.success);
                    });
                    _this._productService.getSize(params.product_id).subscribe(function (data) {
                        _this.sizeData = data.success;
                        _this.noOfPage = data.success.length;
                        // console.log('getSize', data.success);
                    });
                    _this._productService.getTag(params.product_id).subscribe(function (data) {
                        // console.log(params.product_id);
                        _this.tagData = data.success;
                        _this.noOfPage = data.success.length;
                        // console.log('getTag', data.success);
                    });
                    _this._productService.getAttribute(params.product_id).subscribe(function (data) {
                        _this.attrData = data.success;
                        _this.noOfPage = data.success.length;
                        // console.log('getAttribute', data.success);
                    });
                    _this._categoryService.getAll().subscribe(function (data) {
                        _this.categoryDropdownData = data.success;
                    });
                    _this._productService.productTypeList(params.product_id).subscribe(function (data) {
                        _this.productTypeList = data.success;
                        //console.log('productTypeList', this.productTypeList);
                    });
                    _this._productService.productSubCatList(params.product_id).subscribe(function (data) {
                        _this.subCategories = data.success;
                        //console.log('productTypeList', this.productTypeList);
                    });
                    _this._productService.productaccessList(params.product_id).subscribe(function (data) {
                        _this.accessData = data.success;
                        if (_this.accessData.length > 0) {
                            _this.accessData_bool = 1;
                        }
                        //console.log('Access Data', this.accessData);
                    });
                });
            }
        });
        this.currentUser = JSON.parse(localStorage.getItem('currentUser'));
        var user_id;
        user_id = this.currentUser.success.id;
        this._dataService.getProductState().subscribe(function (data) {
            _this.hide = data;
        });
        this._productService.getAttributeList().subscribe(function (data) {
            _this.attributeOptions = data.success;
        });
        this._menuService.getAll().subscribe(function (data) {
            _this.menuData = data.success;
            //this.noOfPage = data.success.length;
        });
        this._brandService.searching({ dropdown_value: 'Active', search_value: '' }).subscribe(function (data) {
            _this.brandDrpdown = data.success;
            //console.log(this.brandDrpdown);
        });
        /*this._subCategory.searching({ search_value:'' , dropdown_value: 'Active' }).subscribe(
            data => {
                this.subCategoryData = data.success;
 
              
            }
        );
*/
        this._categoryService.categoryListAss().subscribe(function (data) {
            _this.categoryListData = data.success;
        });
        this._productService.productTypeSearching({ dropdown_value: 'Active', search_value: '' }).subscribe(function (data) {
            _this.productTypeDrpdown = data.success;
        });
        this._productService.attrSearching({ search_value: '', dropdown_value: 'Active', user_id: this.currentUser.success.id }).subscribe(function (data) {
            _this.attrData = data.success;
        });
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
    /*  get product_attributes(): FormArray {
          return this.form.get('product_attributes') as FormArray;
      };
  
      addLair() {
          this.product_attributes.push(this.formBuilder.group(new Attributes()));
          console.log(this.form.value);
      }
 */
    EditProductComponent.prototype.changeProductState = function (event) {
        var _this = this;
        this._dataService.setProductState(event.target.value);
        this._dataService.getProductState().subscribe(function (data) {
            _this.hide = data;
        });
    };
    EditProductComponent.prototype.get_category = function () {
        var _this = this;
        this._subCategory.getCategory({ menu_id: this.selectedMenu }).subscribe(function (data) {
            _this.categoryDrpdown = data.success;
        });
    };
    EditProductComponent.prototype.get_subCategory = function () {
        var _this = this;
        this._subCategory.getSubCategory({ category_id: this.selectedCategories }).subscribe(function (data) {
            _this.subCategoryData = data.success;
        });
    };
    EditProductComponent.prototype.get_subCategoryAss = function () {
        var _this = this;
        this._subCategory.getSubCategoryAss({ category_id: this.selectedCategories1 }).subscribe(function (data) {
            _this.subCategoryData = data.success;
        });
    };
    EditProductComponent.prototype.get_product = function () {
        var _this = this;
        this._productService.get_product({ category_id: this.selectedCategories }).subscribe(function (data) {
            _this.productData = data.success;
        });
    };
    EditProductComponent.prototype.isFieldValid = function (field) {
        return ((!this.form.get(field).valid && this.form.get(field).touched) ||
            (this.form.get(field).untouched && this.formSumitAttempt));
    };
    EditProductComponent.prototype.displayFieldCss = function (field) {
        return {
            'has-error': this.isFieldValid(field),
            'has-feedback': this.isFieldValid(field)
        };
    };
    EditProductComponent.prototype.selected = function (value) {
        value.id = this.items.indexOf(value.text);
        return value;
        /*console.log('Selected value is: ', value);*/
    };
    EditProductComponent.prototype.removed = function (value) {
        console.log('Removed value is: ', value);
    };
    EditProductComponent.prototype.refreshValue = function (value) {
        this.value = value;
    };
    EditProductComponent.prototype.onSubmit = function () {
        var _this = this;
        var input;
        this.formSumitAttempt = true;
        console.log(this.form.value);
        // if (this.form.valid) {
        input = { form_data: this.form.value };
        input.form_data.id = this.id;
        input.form_data.user_id = this.currentUser.success.id;
        if (this.uploaded_image == 1) {
            input.form_data.product_img = this.productImgUrl;
        }
        if (this.form.value.product_name != "" && this.form.value.availability) {
            this._productService.updateProduct(input).subscribe(function (data) {
                _this.product_id = data.success;
                _this.toastr.success('Product Update Successfully', 'Success Message');
                _this.reset();
                _this.router.navigate(['product']);
            });
        }
        //  }
    };
    EditProductComponent.prototype.onSubmitSubCat = function () {
        var _this = this;
        var input;
        this.formSumitAttemptSubCat = true;
        this.route.params.subscribe(function (params) {
            if (params.product_id) {
                _this.product_id = params.product_id;
                if (_this.formSubCat.valid) {
                    input = { form_data: _this.formSubCat.value };
                    input.form_data.fk_user_id = _this.currentUser.success.id;
                    input.form_data.fk_product_id = _this.product_id;
                    // console.log(input);
                    _this._productService.createProductSubCat(input).subscribe(function (data) {
                        _this.reset();
                        _this.toastr.success('Product Sub Category Added Successfully', 'Success Message');
                        _this._productService.productSubCatList(params.product_id).subscribe(function (data) {
                            _this.subCategories = data.success;
                        });
                    });
                }
            }
        });
    };
    EditProductComponent.prototype.onProductTypeSubmit = function () {
        var _this = this;
        var input;
        this.formSumitAttemptProductType = true;
        this.route.params.subscribe(function (params) {
            if (params.product_id) {
                _this.product_id = params.product_id;
                if (_this.formProductType.valid) {
                    input = { form_data: _this.formProductType.value };
                    input.form_data.fk_user_id = _this.currentUser.success.id;
                    input.form_data.fk_product_id = _this.product_id;
                    //  console.log(input);
                    _this._productService.createProductType(input).subscribe(function (data) {
                        _this.toastr.success('Product Types Added Successfully', 'Success Message');
                        _this.reset();
                        _this._productService.productTypeList(params.product_id).subscribe(function (data) {
                            _this.productTypeList = data.success;
                        });
                    });
                }
            }
        });
    };
    EditProductComponent.prototype.onUploadSuccess = function (event) {
        /*console.log('event');
        console.log(event);
        console.log(event[0].dataURL);
        console.log(event[0].name);*/
        this.productImgUrl = event[0].dataURL;
        this.uploaded_image = 1;
    };
    EditProductComponent.prototype.onUploadError = function (event) {
        console.log('event');
        console.log(event);
        this.productImgUrl = event[0].dataURL;
        console.log('added');
        this.uploaded_image = 1;
    };
    EditProductComponent.prototype.onSubmitAddAttr = function () {
        var _this = this;
        var input;
        this.formSumitAttemptAttr = true;
        if (this.formAttr.valid) {
            input = { form_data: this.formAttr.value };
            input.form_data.fk_user_id = this.currentUser.success.id;
            input.form_data.fk_product_id = this.product_id;
            this._productService.addAttribute(input).subscribe(function (data) {
                _this.reset();
            });
        }
    };
    EditProductComponent.prototype.onSubmitAss = function () {
        var _this = this;
        var input;
        this.formSumitAttemptAccess = true;
        this.route.params.subscribe(function (params) {
            if (params.product_id) {
                _this.toastr.success('Product Added Successfully', 'Success Message');
                _this.product_id = params.product_id;
                if (_this.formAccess.valid) {
                    input = { form_data: _this.formAccess.value };
                    input.form_data.fk_user_id = _this.currentUser.success.id;
                    input.form_data.fk_acc_product_id = _this.product_id;
                    _this._productService.addProductAccess(input).subscribe(function (data) {
                        _this.reset();
                        _this._productService.productaccessList(params.product_id).subscribe(function (data) {
                            _this.accessData = data.success;
                            if (_this.accessData.length > 0) {
                                _this.accessData_bool = 1;
                            }
                            // console.log('Access Data', this.accessData);
                        });
                    });
                }
            }
        });
    };
    EditProductComponent.prototype.accessDelete = function (del_id) {
        var _this = this;
        console.log('accessDelete', del_id);
        var value = confirm('Are you want to delete this accessories ?');
        if (value) {
            this._productService.accessDelete(del_id).subscribe(function (data) {
                _this.accessData = data.success;
                if (_this.accessData.length > 0) {
                    _this.accessData_bool = 1;
                }
            });
        }
    };
    EditProductComponent.prototype.productSubCatDelete = function (del_id) {
        var _this = this;
        console.log('productSubCatDelete', del_id);
        var value = confirm('Are you want to delete this Product Sub Category ?');
        if (value) {
            this._productService.productSubCatDelete(del_id).subscribe(function (data) {
                _this.subCategories = data.success;
                // console.log('Access Data', this.accessData);
            });
        }
    };
    EditProductComponent.prototype.productTypeDel = function (del_id) {
        var _this = this;
        console.log('productTypeDel', del_id);
        var value = confirm('Are you want to delete this Product Type ?');
        if (value) {
            this._productService.productTypeDel(del_id).subscribe(function (data) {
                _this.productTypeList = data.success;
                // console.log('Access Data', this.accessData);
            });
        }
    };
    EditProductComponent.prototype.onItemSelect = function (item) {
    };
    EditProductComponent.prototype.onSelectAll = function (items) {
    };
    EditProductComponent.prototype.onDeSelectItem = function (item) {
    };
    EditProductComponent.prototype.reset = function () {
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
    /*  public search() {
   
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
    EditProductComponent.prototype.changeProductTypeStatus = function (user) {
        if (user.status == 'Active') {
            user.status = 'Inactive';
            this._productService.updateProductTypeStatus(user.id).subscribe(function (data) {
            });
        }
        else {
            user.status = 'Active';
            this._productService.updateProductTypeStatus(user.id).subscribe(function (data) {
            });
        }
    };
    EditProductComponent.prototype.handleFileInput = function (files) {
        var _this = this;
        var file = files.item(0);
        var reader = new FileReader();
        reader.onload = function (event) {
            _this.productImgUrl = event.target.result;
        };
        reader.readAsDataURL(file);
    };
    EditProductComponent.prototype.multipleHandleFileInput = function (files) {
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
    EditProductComponent.prototype.multipleUpload = function () {
        this._productService.multipleUpload({ img: this.alternateProductImgUrl, fk_product_id: parseInt(this.product_id) }).subscribe(function (data) {
        });
    };
    EditProductComponent.prototype.removeAttribute = function (attribute_id) {
        var _this = this;
        var temp = [];
        this.custom_attribite_list.forEach(function (data) {
            if (data.id == attribute_id) {
                console.log(attribute_id);
                console.log('reached');
            }
            else {
                temp.push(data);
            }
        });
        this.custom_attribite_list = temp;
        if (this.custom_attribite_list.length) {
            this._productService.addAttributeList({ "product_id": this.product_id, "form_data": this.custom_attribite_list }).subscribe(function (data) {
                //console.log(data);
                _this.toastr.success('You have successfully updated product attributes.', 'Success Message');
            });
        }
    };
    EditProductComponent.prototype.addAttribute = function () {
        var _this = this;
        var counter = 1;
        // let selecteddata = [];
        if (this.attributes != '') {
            if (this.custom_attribite_list == null) {
                this.custom_attribite_list = [];
            }
            else {
                this.custom_attribite_list.forEach(function (data) {
                    if (data.id == _this.attributes) {
                        counter = 0;
                    }
                });
            }
            if (counter == 1) {
                this._productService.getAttributeById(parseInt(this.attributes), parseInt(this.product_id)).subscribe(function (data) {
                    var testObj = { "id": data.success.id, "name": data.success.name, "data": JSON.parse(data.success.data) };
                    _this.custom_attribite_list.push(testObj);
                });
            }
            else {
                console.log('already exists');
            }
        }
    };
    EditProductComponent.prototype.saveAttribute = function () {
        var _this = this;
        if (this.custom_attribite_list.length) {
            this._productService.addAttributeList({ "product_id": this.product_id, "form_data": this.custom_attribite_list }).subscribe(function (data) {
                console.log(data);
                _this.toastr.success('You have successfully updated product attributes.', 'Success Message');
            });
        }
    };
    EditProductComponent.prototype.saveAccesories = function () {
        var _this = this;
        if (this.selectedProduct != '') {
            var input = { form_data: { 'fk_category': this.selectedCategories, 'fk_sub_cat': '', 'accessory_product_id': this.selectedProduct, 'fk_acc_product_id': this.product_id, 'fk_user_id': this.currentUser.success.id } };
            this._productService.addProductAccess(input).subscribe(function (data) {
                //this.reset();
                _this._productService.productaccessList(_this.product_id).subscribe(function (data) {
                    _this.accessData = data.success;
                    if (_this.accessData.length > 0) {
                        _this.accessData_bool = 1;
                        _this.toastr.success('You have successfully selected product.', 'Success Message');
                    }
                    console.log('Access Data', _this.accessData);
                });
            });
        }
        else {
            this.toastr.error('You have not selected product.', 'Error Message');
        }
    };
    EditProductComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: 'app-edit-product',
            template: __webpack_require__(/*! raw-loader!./edit-product.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/product/edit-product/edit-product.component.html")
        }),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_services_script_loader_service__WEBPACK_IMPORTED_MODULE_4__["ScriptLoaderService"], ngx_toastr__WEBPACK_IMPORTED_MODULE_11__["ToastrService"], _angular_router__WEBPACK_IMPORTED_MODULE_10__["ActivatedRoute"], _angular_router__WEBPACK_IMPORTED_MODULE_10__["Router"], _services_data_service__WEBPACK_IMPORTED_MODULE_3__["DataService"], _auth_services_brand_service__WEBPACK_IMPORTED_MODULE_9__["BrandService"], _auth_services_menu_service__WEBPACK_IMPORTED_MODULE_8__["MenuService"], _auth_services_category_service__WEBPACK_IMPORTED_MODULE_7__["CategoryService"], _auth_services_product_service__WEBPACK_IMPORTED_MODULE_2__["ProductService"], _auth_services_subCategory_service__WEBPACK_IMPORTED_MODULE_6__["SubCategoryService"], _services_script_loader_service__WEBPACK_IMPORTED_MODULE_4__["ScriptLoaderService"], _angular_forms__WEBPACK_IMPORTED_MODULE_5__["FormBuilder"]])
    ], EditProductComponent);
    return EditProductComponent;
}());



/***/ }),

/***/ "./src/app/theme/pages/default/product/edit-product/edit-product.module.ts":
/*!*********************************************************************************!*\
  !*** ./src/app/theme/pages/default/product/edit-product/edit-product.module.ts ***!
  \*********************************************************************************/
/*! exports provided: EditProductModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "EditProductModule", function() { return EditProductModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/fesm5/common.js");
/* harmony import */ var _default_default_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../default/default.component */ "./src/app/theme/pages/default/default.component.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var _layouts_layout_module__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../../../layouts/layout.module */ "./src/app/theme/layouts/layout.module.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var ngx_pagination__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ngx-pagination */ "./node_modules/ngx-pagination/dist/ngx-pagination.js");
/* harmony import */ var _edit_product_component__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./edit-product.component */ "./src/app/theme/pages/default/product/edit-product/edit-product.component.ts");
/* harmony import */ var ng_multiselect_dropdown__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ng-multiselect-dropdown */ "./node_modules/ng-multiselect-dropdown/esm5/ng-multiselect-dropdown.js");
/* harmony import */ var angular_tabs_component__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! angular-tabs-component */ "./node_modules/angular-tabs-component/dist/index.js");
/* harmony import */ var ngx_quill__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ngx-quill */ "./node_modules/ngx-quill/index.js");
/* harmony import */ var ng2_select__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ng2-select */ "./node_modules/ng2-select/index.js");
/* harmony import */ var ng2_select__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(ng2_select__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var ngx_dropzone_wrapper__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ngx-dropzone-wrapper */ "./node_modules/ngx-dropzone-wrapper/dist/ngx-dropzone-wrapper.es5.js");















var currentUser = JSON.parse(localStorage.getItem('currentUser'));
var routes = [
    {
        path: "",
        component: _default_default_component__WEBPACK_IMPORTED_MODULE_3__["DefaultComponent"],
        children: [
            {
                path: "",
                component: _edit_product_component__WEBPACK_IMPORTED_MODULE_8__["EditProductComponent"]
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
var EditProductModule = /** @class */ (function () {
    function EditProductModule() {
    }
    EditProductModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"], ngx_dropzone_wrapper__WEBPACK_IMPORTED_MODULE_13__["DropzoneModule"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["RouterModule"].forChild(routes),
                _layouts_layout_module__WEBPACK_IMPORTED_MODULE_5__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_6__["FormsModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_6__["ReactiveFormsModule"],
                angular_tabs_component__WEBPACK_IMPORTED_MODULE_10__["TabModule"], ng2_select__WEBPACK_IMPORTED_MODULE_12__["SelectModule"], ngx_pagination__WEBPACK_IMPORTED_MODULE_7__["NgxPaginationModule"], ng_multiselect_dropdown__WEBPACK_IMPORTED_MODULE_9__["NgMultiSelectDropDownModule"].forRoot(), ngx_quill__WEBPACK_IMPORTED_MODULE_11__["QuillModule"],
            ],
            declarations: [_edit_product_component__WEBPACK_IMPORTED_MODULE_8__["EditProductComponent"],],
            providers: [{
                    provide: ngx_dropzone_wrapper__WEBPACK_IMPORTED_MODULE_13__["DROPZONE_CONFIG"],
                    useValue: DEFAULT_DROPZONE_CONFIG
                }]
        })
    ], EditProductModule);
    return EditProductModule;
}());



/***/ })

}]);
//# sourceMappingURL=pages-default-product-edit-product-edit-product-module-es5.js.map