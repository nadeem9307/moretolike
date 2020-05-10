(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-order-order-list-order-list-module"],{

/***/ "./src/app/theme/pages/default/order/order-list/order-list.component.html":
/*!********************************************************************************!*\
  !*** ./src/app/theme/pages/default/order/order-list/order-list.component.html ***!
  \********************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "\n<div class=\"m-portlet m-portlet--mobile\">\n\t\t<div class=\"m-portlet__body\">\n\n\n\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t<span class=\"m-portlet__head-icon\" routerLink=\"/vendor/vendor-list\" style=\"color:blue; cursor: pointer\" *ngIf=\"back_btn\"><i class=\"fa fa-arrow-left\"></i></span>\n\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\" style=\"text-transform: capitalize;\">{{pageTilte}} </h3>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\n\n\t\t\t<div class=\"m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30\">\n\t\t\t\t<div class=\"row align-items-center\">\n\t\t\t\t\t<div class=\"col-xl-12 order-2 order-xl-1\">\n\t\t\t\t\t\t<div class=\"form-group m-form__group row align-items-center\">\n\n\t\t\t\t\t\t\t<div class=\"col-md-12\">\n\t\t\t\t\t\t\t\t<div class=\"m-form__group m-form__group--inline\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__label\">\n\t\t\t\t\t\t\t\t\t\t<label class=\"m-label m-label--single\">\n\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" (click)=\"orderFilterAll()\">All({{allOrder}}) |</a>\n\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__label\">\n\t\t\t\t\t\t\t\t\t\t<label class=\"m-label m-label--single\">\n\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" (click)=\"statusOrderData('completed', true)\">Completed({{completedOrder}}) |</a>\n\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__label\">\n\t\t\t\t\t\t\t\t\t\t<label class=\"m-label m-label--single\">\n\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" (click)=\"statusOrderData('processing', true)\">Processing({{processingOrder}}) |</a>\n\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__label\">\n\t\t\t\t\t\t\t\t\t\t<label class=\"m-label m-label--single\">\n\t\t\t\t\t\t\t\t\t\t\t <a href=\"#\" (click)=\"statusOrderData('on_hold', true)\">On Hold({{on_holdOrder}}) |</a>\n\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__label\">\n\t\t\t\t\t\t\t\t\t\t<label class=\"m-label m-label--single\">\n\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" (click)=\"statusOrderData('pending', true)\">Pending({{pendingOrder}}) |</a>\n\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__label\">\n\t\t\t\t\t\t\t\t\t\t<label class=\"m-label m-label--single\">\n\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" (click)=\"statusOrderData('cancelled', true)\">Cancelled({{cancelledOrder}}) |</a>\n\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__label\">\n\t\t\t\t\t\t\t\t\t\t<label class=\"m-label m-label--single\">\n\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" (click)=\"statusOrderData('refunded', true)\">Refunded({{refundedOrder}})</a>\n\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t \n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t\t<div class=\"m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30\">\n\t\t\t\t<div class=\"row align-items-center\">\n\t\t\t\t\t<div class=\"col-xl-12 order-2 order-xl-1\">\n\t\t\t\t\t\t<div class=\"form-group m-form__group row align-items-center\">\n\n\t\t\t\t\t\t\t<div class=\"col-md-2\">\n\t\t\t\t\t\t\t\t<div class=\"m-form__group m-form__group--inline\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__control\">\n\t\t\t\t\t\t\t\t\t\t<input type=\"date\" class=\"date form-control\" placeholder=\"Filter By Date\" [(ngModel)] = \"filterDate\" (change)=\"filterByDate()\">\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"d-md-none m--margin-bottom-10\">\n\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"col-md-6\">\n\t\t\t\t\t\t\t\t<div class=\"m-input-icon m-input-icon--left\">\n \n\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input  m-input--solid\" [(ngModel)] = \"customer_name\" placeholder=\"Filter by Customer\" type=\"text\" (keyup)=\"filterByCustomer()\">\n\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t</div>\n\n\n\t\t\t\t\t\t\t<!--<div class=\"col-md-2\">\n\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill\"(click)=\"orderFilter();\">\n\t\t\t\t\t\t\t\t\t<span>\n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-search\"></i>\n\t\t\t\t\t\t\t\t\t\t<span>\n\t\t\t\t\t\t\t\t\t\t\tFilter\n\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t\t<div class=\"m-separator m-separator--dashed d-xl-none\"></div>\n\t\t\t\t\t\t\t</div>-->\n\n\t\t\t\t\t\t\t<div class=\"col-md-2\">\n\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill\"(click)=\"orderFilter();\">\n\t\t\t\t\t\t\t\t\t<span>\n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-search\"></i>\n\t\t\t\t\t\t\t\t\t\t<span>\n\t\t\t\t\t\t\t\t\t\t\tExport All\n\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t\t<div class=\"m-separator m-separator--dashed d-xl-none\"></div>\n\t\t\t\t\t\t\t</div> \n\t\t\t\t\t\t\t<div class=\"col-md-2\">\n\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill\"(click)=\"orderFilter();\">\n\t\t\t\t\t\t\t\t\t<span>\n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-search\"></i>\n\t\t\t\t\t\t\t\t\t\t<span>\n\t\t\t\t\t\t\t\t\t\t\tExport Filtered\n\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t\t<div class=\"m-separator m-separator--dashed d-xl-none\"></div>\n\t\t\t\t\t\t\t</div> \n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t\t<div class=\"m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30\">\n\t\t\t\t<div class=\"row align-items-center\">\n\t\t\t\t\t<div class=\"col-xl-12 order-2 order-xl-1\">\n\t\t\t\t\t\t<div class=\"form-group m-form__group row align-items-center\">\n\t\t\t\t\t\t\t<div class=\"col-md-2\">\n\t\t\t\t\t\t\t\t<div class=\"m-form__label\">\n\t\t\t\t\t\t\t\t\t\t<label class=\"m-label m-label--single\">\n\t\t\t\t\t\t\t\t\t\t\tBulk Action:\n\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"m-separator m-separator--dashed d-xl-none\"></div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"col-md-6\">\n\t\t\t\t\t\t\t\t<div class=\"m-form__group m-form__group--inline\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__label\">\n\t\t\t\t\t\t\t\t\t\t<label class=\"m-label m-label--single\">\n\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__control\" >\n\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" [(ngModel)]=\"bulkActionData\">\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Bulk Actions</option>\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"on-hold\">Change status to on-hold</option>\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"processing\">Change status to processing</option>\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"completed\">Change status to completed</option>\n\t\t\t\t\t\t\t\t\t\t</select>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"d-md-none m--margin-bottom-10\"></div>\n\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t<div class=\"col-md-2\">\n\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill\"(click)=\"bulkAction(brandData);\">\n\t\t\t\t\t\t\t\t\t<span>\n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-search\"></i>\n\t\t\t\t\t\t\t\t\t\t<span>\n\t\t\t\t\t\t\t\t\t\t\tApply\n\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t\t<div class=\"m-separator m-separator--dashed d-xl-none\"></div>\n\t\t\t\t\t\t\t</div> \n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t\t\t\t\n\t\t\t<div class=\"m_datatable m-datatable m-datatable--default m-datatable--loaded\" id=\"local_data\" style=\"position: static; zoom: 1;\">\n\t\t\t\t<table class=\"m-datatable__table\" style=\"display: block; min-height: 300px; overflow-x: auto;\">\n\t\t\t\t\t<thead class=\"m-datatable__head\">\n\t\t\t\t\t\t<tr class=\"m-datatable__row\" style=\"left: 0px;\">\n\n\t\t\t\t\t\t\t<th data-field=\"ShipName\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\">\n\n\t\t\t\t\t\t\t\t<span style=\"width: 20px;\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"order_no\" [checked]=\"isAllChecked(brandData)\" (change)=\"checkAll($event, brandData)\">\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"ShipName\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\">\n\n\t\t\t\t\t\t\t\t<span style=\"width: 110px;\">\n\t\t\t\t\t\t\t\t\tOrder\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"Status\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Order Total</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"Status\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Status</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"ShipName\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\"><span style=\"width: 110px;\">Customer Name</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"ShipName\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\"><span style=\"width: 110px;\">Date</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"Actions\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Actions</span>\n\t\t\t\t\t\t\t</th>\n\t\t\t\t\t\t\t\n\t\t\t\t\t\t</tr>\n\t\t\t\t\t</thead>\n\t\t\t\t\t<tbody class=\"m-datatable__body\" style=\"\">\n\t\t\t\t\t\t<tr data-row=\"0\" *ngFor=\"let brand of brandData | paginate: {itemsPerPage: 10, currentPage: p}\" class=\"m-datatable__row\" style=\"left: 0px;\">\n\n\t\t\t\t\t\t\t\t<th data-field=\"Latitude\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\">\n\n\t\t\t\t\t\t\t\t\t<span style=\"width: 20px;\">\n\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"order_no\" name=\"sizecb[]\" value=\"{{brand.id}}\" [(ngModel)]=\"brand.state\">\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</th>\n\t\t\t\t\t\t\t\t<td data-field=\"Latitude\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\"><a href=\"#\" title=\"View\" routerLink =\"/order/order-details/{{brand.order_no}}\">{{brand.order_no}}</a></span>\n\t\t\t\t\t\t\t\t</td>\n\n\t\t\t\t\t\t\t\t<td data-field=\"Latitude\" class=\"m-datatable__cell\" >\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\">${{brand.total_amount}}</span>\n\t\t\t\t\t\t\t\t</td>\n\n\t\t\t\t\t\t\t\t<td data-field=\"Latitude\" class=\"m-datatable__cell\" >\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\" *ngIf=\"brand.status == 'pending'\" class=\"btn btn-warning\">Pending</span>\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\" *ngIf=\"brand.status == 'completed'\" class=\"btn btn-success\">Complete</span>\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\" *ngIf=\"brand.status == 'cancelled'\" class=\"btn btn-danger\">Failure</span>\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\" *ngIf=\"brand.status == 'on-hold'\" class=\"btn btn-danger\">Hold</span>\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\" *ngIf=\"brand.status == 'refunding'\" class=\"btn btn-danger\">Refunded</span>\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\" *ngIf=\"brand.status == 'processing'\" class=\"btn btn-default\">Processing</span>\n\t\t\t\t\t\t\t\t</td>\n\n\t\t\t\t\t\t\t\t<td data-field=\"Latitude\" class=\"m-datatable__cell\" >\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\">{{brand.customer_name}}</span>\n\t\t\t\t\t\t\t\t</td>\n\n\t\t\t\t\t\t\t\t<td data-field=\"Latitude\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\">{{brand.payment_date}}</span>\n\t\t\t\t\t\t\t\t</td>\n\n\t\t\t\t\t\t\t\t\n\n\t\t\t\t\t\t\t\t\n\n\t\t\t\t\t\t\t\t<!-- <td data-field=\"Latitude\" class=\"m-datatable__cell\" ng-init=\"brandLogo = {{brand.brand_img}\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\">{{brand.transaction_id}}</span>\n\t\t\t\t\t\t\t\t</td> -->\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<!-- <td data-field=\"Status\"  class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\" (click) = \"changeBrandStatus(brand)\">\n\t\t\t\t\t\t\t\t\t\t<span class=\"m-badge--wide m-badge\" [ngClass]=\"{'m-badge--success':  brand.status == 'Active', 'm-badge--danger':  brand.status != 'Active'}\" >{{brand.status}}\n\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</td> -->\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<td data-field=\"Actions\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"overflow: visible; position: relative; width: 110px;\">\t\n\n\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill\" title=\"Edit\" routerLink =\"/order/order-details/{{brand.order_no}}\"> <i class=\"la la-edit\"></i> </a>\n\n\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill\" title=\"Invoice\" routerLink =\"/order/order-summary/{{brand.order_no}}\"> <i class=\"fa fa-file\"></i> </a>\n\n\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill\" title=\"Packing Slip\" routerLink =\"/order/order-summary/{{brand.order_no}}\"> <i class=\"fa fa-file-o\"></i> </a>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t\t</tr>\n\n\t\t\t\t\t\t</tbody>\n\t\t\t\t\t</table>\n\t\t\t\t\t<pagination-controls (pageChange)=\"p = $event\"></pagination-controls> \n\t\t\t\t</div>\n\t\t</div>\n</div>"

/***/ }),

/***/ "./src/app/theme/pages/default/order/order-list/order-list.component.ts":
/*!******************************************************************************!*\
  !*** ./src/app/theme/pages/default/order/order-list/order-list.component.ts ***!
  \******************************************************************************/
/*! exports provided: OrderListComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "OrderListComponent", function() { return OrderListComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _auth_services_order_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../../../../auth/_services/order.service */ "./src/app/auth/_services/order.service.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/esm5/forms.js");
/* harmony import */ var _services_data_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../../_services/data.service */ "./src/app/_services/data.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/esm5/router.js");
/* harmony import */ var ngx_toastr__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ngx-toastr */ "./node_modules/ngx-toastr/fesm5/ngx-toastr.js");
/* harmony import */ var _auth_services_user_service__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../../../../auth/_services/user.service */ "./src/app/auth/_services/user.service.ts");
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



var OrderListComponent = /** @class */ (function () {
    function OrderListComponent(toastr, _userService, route, router, _orderService, _dataService, formBuilder) {
        this.toastr = toastr;
        this._userService = _userService;
        this.route = route;
        this.router = router;
        this._orderService = _orderService;
        this._dataService = _dataService;
        this.formBuilder = formBuilder;
        this.brandData = [{ "pk_order_id": 1, "order_no": "1", "fk_customer_id": 13, "fk_address_id": 25, "fk_payment_type": "cod", "total_amount": 83008, "payment_status": "p", "payment_date": "2018-08-10 13:17:12", "transaction_id": null, "cancelled_status": "n", "deliver_date": "2018-08-11", "created_date": "2018-06-30 18:30:00", "update_date": "2018-08-16 14:56:59", "product_name": "Mi Note 5 Pro", "state": false, "status": "completed", "shipping_status": "d", "refund_status": "n", "slug": "MI-Mi-Note-5-Pro-MI3455632", "customer_name": "Sam" }];
        this.searchValue = '';
        this.pageTilte = 'Orders List';
        this.dropDownValue = '';
        this.selectedStatus = '';
        this.dataSaved = false;
        this.saveMsg = '';
        this.allOrder = 0;
        this.completedOrder = 0;
        this.processingOrder = 0;
        this.on_holdOrder = 0;
        this.pendingOrder = 0;
        this.cancelledOrder = 0;
        this.refundedOrder = 0;
        this.p = 1;
        this.back_btn = false;
    }
    OrderListComponent.prototype.ngOnInit = function () {
        var _this = this;
        /*user permission*/
        var currentUser = JSON.parse(localStorage.getItem('currentUser'));
        var permission = currentUser.success.permission;
        var where;
        if (permission.order_list != 1) {
            this.toastr.error('You have not permission to visit this page.', 'Error Message');
            this.router.navigate(['/']);
        }
        /*user permission*/
        // this.notificationsService.addInfo('Brand Added Successfully');
        this._dataService.setloaderState(false);
        this._dataService.setactiveMenu('order');
        var loggedUserId = JSON.parse(localStorage.getItem('currentUser'));
        this.route.params.subscribe(function (parameter) {
            localStorage.setItem('section', 'order');
            loggedUserId = JSON.parse(localStorage.getItem('currentUser'));
            if (parameter.vendor_id) {
                //console.log('parameter.vendor_id', parameter.vendor_id);
                where = { loggedUserId: parameter.vendor_id, loggedUserRole: loggedUserId.success.role, role: '' };
                _this._userService.getById(parameter.vendor_id).subscribe(function (data) {
                    _this.pageTilte = data.success.store_name + '\'s Order';
                    _this.back_btn = true;
                });
            }
            else {
                where = { loggedUserId: loggedUserId.success.id, loggedUserRole: loggedUserId.success.role };
            }
            _this._orderService.getAll(where).subscribe(function (data) {
                _this.brandData = data.success;
                _this.allOrder = _this.brandData.length;
                _this.statusOrderData('completed');
                _this.statusOrderData('processing');
                _this.statusOrderData('on_hold');
                _this.statusOrderData('pending');
                _this.statusOrderData('cancelled');
                _this.statusOrderData('refunded');
            }, function (err) {
                console.log('Sorry We have not found any product');
            });
        });
    };
    OrderListComponent.prototype.statusOrderData = function (status, filter) {
        if (filter === void 0) { filter = false; }
        var order_data = [];
        if (this.filterDataHolder == undefined) {
            this.filterDataHolder = this.brandData;
        }
        else {
            this.brandData = this.filterDataHolder;
        }
        if (status == 'completed') {
            this.brandData.forEach(function (obj) {
                if (obj.status == 'completed') {
                    order_data.push(obj);
                }
            });
            this.completedOrder = order_data.length;
            console.log('completed');
        }
        else if (status == 'processing') {
            this.brandData.forEach(function (obj) {
                if (obj.status == 'processing') {
                    order_data.push(obj);
                }
            });
            this.processingOrder = order_data.length;
            console.log('processingOrder');
        }
        else if (status == 'on_hold') {
            this.brandData.forEach(function (obj) {
                if (obj.status == 'on-hold') {
                    order_data.push(obj);
                }
            });
            this.on_holdOrder = order_data.length;
            console.log('on_holdOrder');
        }
        else if (status == 'pending') {
            this.brandData.forEach(function (obj) {
                if (obj.status == 'pending') {
                    order_data.push(obj);
                }
            });
            this.pendingOrder = order_data.length;
            console.log('pendingOrder');
        }
        else if (status == 'cancelled') {
            this.brandData.forEach(function (obj) {
                if (obj.status == 'cancelled') {
                    order_data.push(obj);
                }
            });
            this.cancelledOrder = order_data.length;
            console.log('cancelledOrder');
        }
        else if (status == 'refunded') {
            this.brandData.forEach(function (obj) {
                if (obj.status == 'refunded') {
                    order_data.push(obj);
                }
            });
            this.refundedOrder = order_data.length;
            console.log('refundedOrder');
        }
        else {
            console.log('working');
        }
        if (filter == true) {
            this.brandData = order_data;
        }
    };
    OrderListComponent.prototype.isFieldValid = function (field) {
        return ((!this.form.get(field).valid && this.form.get(field).touched) ||
            (this.form.get(field).untouched && this.formSumitAttempt));
    };
    OrderListComponent.prototype.displayFieldCss = function (field) {
        return {
            'has-error': this.isFieldValid(field),
            'has-feedback': this.isFieldValid(field)
        };
    };
    OrderListComponent.prototype.handleFileInput = function (files) {
        var _this = this;
        var file = files.item(0);
        var reader = new FileReader();
        reader.onload = function (event) {
            _this.brandImgUrl = event.target.result;
        };
        reader.readAsDataURL(file);
    };
    OrderListComponent.prototype.hideMsg = function () {
        setTimeout(function () {
            this.dataSaved = false;
        }.bind(this), 4000);
    };
    OrderListComponent.prototype.reset = function () {
        if (this.selectedStatus != '') {
            this.form.reset();
            this.selectedStatus = '';
            this.formSumitAttempt = false;
        }
    };
    OrderListComponent.prototype.orderFilter = function () {
        var _this = this;
        var loggedUserId = JSON.parse(localStorage.getItem('currentUser'));
        this._orderService.filter({ search_value: this.searchValue, dropdown_value: this.dropDownValue, loggedUserId: loggedUserId.success.id, loggedUserRole: loggedUserId.success.role }).subscribe(function (data) {
            _this.brandData = data.success;
        });
    };
    OrderListComponent.prototype.checkAll = function (ev, brandData) {
        brandData.forEach(function (x) { return x.state = ev.target.checked; });
    };
    OrderListComponent.prototype.isAllChecked = function (brandData) {
        return brandData.every(function (_) { return _.state; });
    };
    OrderListComponent.prototype.filterByCustomer = function () {
        var _this = this;
        var order_data = [];
        if (this.customer_name == '') {
            this.brandData = this.filterDataHolder;
        }
        else {
            if (this.filterDataHolder == undefined) {
                this.filterDataHolder = this.brandData;
            }
            else {
                this.brandData = this.filterDataHolder;
            }
            this.brandData.forEach(function (obj) {
                if (obj.customer_name != '' && obj.customer_name != null && obj.customer_name != undefined) {
                    if (obj.customer_name.replace(/<[^>]*>/g, "").toUpperCase().indexOf(_this.customer_name.toUpperCase()) > -1) {
                        //console.log(obj);
                        order_data.push(obj);
                    }
                }
            });
            this.brandData = order_data;
        }
    };
    OrderListComponent.prototype.filterByDate = function () {
        var _this = this;
        var order_data = [];
        if (this.filterDate == '') {
            this.brandData = this.filterDataHolder;
        }
        else {
            if (this.filterDataHolder == undefined) {
                this.filterDataHolder = this.brandData;
            }
            else {
                this.brandData = this.filterDataHolder;
            }
            this.brandData.forEach(function (obj) {
                var created_date = obj.payment_date.split(' ');
                //created_date = created_date;
                if (created_date[0] == _this.filterDate) {
                    order_data.push(obj);
                }
            });
            this.brandData = order_data;
        }
    };
    OrderListComponent.prototype.bulkAction = function (brandData) {
        var _this = this;
        var cart_data = [];
        this.brandData.forEach(function (obj) {
            console.log('obj');
            if (obj.state) {
                cart_data.push(obj.pk_order_id);
            }
        });
        this._orderService.updateStatus({ cart_id: cart_data, status: this.bulkActionData }).subscribe(function (data) {
            console.log('data');
            console.log(data);
            if (Number(data) && data != 0) {
                _this.toastr.success('Changes updated successfully!', 'Success Message');
                _this.getAllOrderList();
            }
            else {
                _this.toastr.error('Sorry! changes could not updated.', 'Error Message');
            }
        });
    };
    OrderListComponent.prototype.orderFilterAll = function (order_list) {
        var _this = this;
        var currentUser = JSON.parse(localStorage.getItem('currentUser'));
        var permission = currentUser.success.permission;
        var where;
        var loggedUserId = JSON.parse(localStorage.getItem('currentUser'));
        this.route.params.subscribe(function (parameter) {
            localStorage.setItem('section', 'order');
            loggedUserId = JSON.parse(localStorage.getItem('currentUser'));
            if (parameter.vendor_id) {
                //console.log('parameter.vendor_id', parameter.vendor_id);
                where = { loggedUserId: parameter.vendor_id, loggedUserRole: loggedUserId.success.role, role: '' };
                _this._userService.getById(parameter.vendor_id).subscribe(function (data) {
                    _this.pageTilte = data.success.store_name + '\'s Order';
                    _this.back_btn = true;
                });
            }
            else {
                where = { loggedUserId: loggedUserId.success.id, loggedUserRole: loggedUserId.success.role };
            }
            _this._orderService.getAll(where).subscribe(function (data) {
                _this.brandData = data.success;
                _this.statusOrderData('completed');
                _this.statusOrderData('processing');
                _this.statusOrderData('on_hold');
                _this.statusOrderData('pending');
                _this.statusOrderData('cancelled');
                _this.statusOrderData('refunded');
                console.log('all is well');
            }, function (err) {
                console.log('Sorry We have not found any product');
            });
        });
    };
    OrderListComponent.prototype.getAllOrderList = function () {
        var _this = this;
        var currentUser = JSON.parse(localStorage.getItem('currentUser'));
        var permission = currentUser.success.permission;
        var where;
        var loggedUserId = JSON.parse(localStorage.getItem('currentUser'));
        this.route.params.subscribe(function (parameter) {
            localStorage.setItem('section', 'order');
            loggedUserId = JSON.parse(localStorage.getItem('currentUser'));
            if (parameter.vendor_id) {
                //console.log('parameter.vendor_id', parameter.vendor_id);
                where = { loggedUserId: parameter.vendor_id, loggedUserRole: loggedUserId.success.role, role: '' };
                _this._userService.getById(parameter.vendor_id).subscribe(function (data) {
                    _this.pageTilte = data.success.store_name + '\'s Order';
                    _this.back_btn = true;
                });
            }
            else {
                where = { loggedUserId: loggedUserId.success.id, loggedUserRole: loggedUserId.success.role };
            }
            _this._orderService.getAll(where).subscribe(function (data) {
                _this.brandData = data.success;
                _this.filterDataHolder = undefined;
                _this.statusOrderData('completed');
                _this.statusOrderData('processing');
                _this.statusOrderData('on_hold');
                _this.statusOrderData('pending');
                _this.statusOrderData('cancelled');
                _this.statusOrderData('refunded');
            }, function (err) {
                console.log('Sorry We have not found any product');
            });
        });
    };
    OrderListComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-order-list',
            template: __webpack_require__(/*! ./order-list.component.html */ "./src/app/theme/pages/default/order/order-list/order-list.component.html"),
            styles: []
        }),
        __metadata("design:paramtypes", [ngx_toastr__WEBPACK_IMPORTED_MODULE_5__["ToastrService"], _auth_services_user_service__WEBPACK_IMPORTED_MODULE_6__["UserService"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["ActivatedRoute"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["Router"], _auth_services_order_service__WEBPACK_IMPORTED_MODULE_1__["OrderService"], _services_data_service__WEBPACK_IMPORTED_MODULE_3__["DataService"], _angular_forms__WEBPACK_IMPORTED_MODULE_2__["FormBuilder"]])
    ], OrderListComponent);
    return OrderListComponent;
}());



/***/ }),

/***/ "./src/app/theme/pages/default/order/order-list/order-list.module.ts":
/*!***************************************************************************!*\
  !*** ./src/app/theme/pages/default/order/order-list/order-list.module.ts ***!
  \***************************************************************************/
/*! exports provided: OrderListModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "OrderListModule", function() { return OrderListModule; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/esm5/common.js");
/* harmony import */ var _default_default_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../default/default.component */ "./src/app/theme/pages/default/default.component.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/esm5/router.js");
/* harmony import */ var _layouts_layout_module__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../../../layouts/layout.module */ "./src/app/theme/layouts/layout.module.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/esm5/forms.js");
/* harmony import */ var ngx_pagination__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ngx-pagination */ "./node_modules/ngx-pagination/dist/ngx-pagination.js");
/* harmony import */ var _order_list_order_list_component__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../order-list/order-list.component */ "./src/app/theme/pages/default/order/order-list/order-list.component.ts");
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
                component: _order_list_order_list_component__WEBPACK_IMPORTED_MODULE_7__["OrderListComponent"]
            }
        ]
    },
];
var OrderListModule = /** @class */ (function () {
    function OrderListModule() {
    }
    OrderListModule = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_1__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_3__["RouterModule"].forChild(routes),
                _layouts_layout_module__WEBPACK_IMPORTED_MODULE_4__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_5__["FormsModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_5__["ReactiveFormsModule"], ngx_pagination__WEBPACK_IMPORTED_MODULE_6__["NgxPaginationModule"],
            ],
            declarations: [_order_list_order_list_component__WEBPACK_IMPORTED_MODULE_7__["OrderListComponent"]]
        })
    ], OrderListModule);
    return OrderListModule;
}());



/***/ })

}]);
//# sourceMappingURL=pages-default-order-order-list-order-list-module.js.map