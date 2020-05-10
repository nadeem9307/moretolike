(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-customer-staff-list-staff-permission-staff-permission-module"],{

/***/ "./src/app/theme/pages/default/customer/staff-list/staff-permission/staff-permission.component.html":
/*!**********************************************************************************************************!*\
  !*** ./src/app/theme/pages/default/customer/staff-list/staff-permission/staff-permission.component.html ***!
  \**********************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "\n<div class=\"m-portlet m-portlet--mobile\">\n\t\t<div class=\"m-portlet__body\">\n\n\n\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\"><i class=\"la la-gear\"></i></span>\n\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">Manage Staff Permissions</h3>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t\t<div class=\"row\"><br></div>\n\t\t\t<form method=\"post\" [formGroup] =\"form\">\t\t\n\t\t\t\t<div class=\"m_datatable m-datatable m-datatable--default m-datatable--loaded\" id=\"local_data\" style=\"position: static; zoom: 1;\">\n\t\t\t\t\t<div class=\"col-sm-12\">\n\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\"><h5>Overview</h5></div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.overview_sales\" formControlName=\"overview_sales\" [(ngModel)]=\"overview_sales\"> view sales overview \n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.overview_sales_report_chart\" formControlName=\"overview_sales_report_chart\" [(ngModel)]=\"overview_sales_report_chart\"> view sales report chart\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.overview_annoucement\" formControlName=\"overview_annoucement\" [(ngModel)]=\"overview_annoucement\"> view annoucement\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.overview_order_report\" formControlName=\"overview_order_report\" [(ngModel)]=\"overview_order_report\"> view order report\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.overview_review_report\" formControlName=\"overview_review_report\" [(ngModel)]=\"overview_review_report\"> view review reports\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.overview_product_status_report\" formControlName=\"overview_product_status_report\" [(ngModel)]=\"overview_product_status_report\"> view product status report\n\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\"><h5>Product</h5></div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.product_add\" formControlName=\"product_add\" [(ngModel)]=\"product_add\"> add product \n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.product_edit\" formControlName=\"product_edit\" [(ngModel)]=\"product__edit\"> edit product\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.product_delete\" formControlName=\"product_delete\" [(ngModel)]=\"product_delete\"> delete product\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.product_view\" formControlName=\"product_view\" [(ngModel)]=\"product_view\"> view product\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.product_duplicate\" formControlName=\"product_duplicate\" [(ngModel)]=\"product_duplicate\"> view duplicate product\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.product_import\" formControlName=\"product_import\" [(ngModel)]=\"product_import\"> view import product\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.product_export\" formControlName=\"product_export\" [(ngModel)]=\"product_export\"> view export product\n\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<br/>\n\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\"><h5>Report</h5></div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.report_overview\" formControlName=\"report_overview\" [(ngModel)]=\"report_overview\"> view overview report \n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.report_daily_sale\" formControlName=\"report_daily_sale\" [(ngModel)]=\"report_daily_sale\"> view daily sale report\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.report_top_selling\" formControlName=\"report_top_selling\" [(ngModel)]=\"report_top_selling\"> view top selling report\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.report_top_earning\" formControlName=\"report_top_earning\" [(ngModel)]=\"report_top_earning\"> view top earning report\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.report_statement\" formControlName=\"report_statement\" [(ngModel)]=\"report_statement\"> view statement report\n\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\"><h5>Order</h5></div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.order_view\" formControlName=\"order_view\" [(ngModel)]=\"order_view\"> view order\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.order_manage\" formControlName=\"order_manage\" [(ngModel)]=\"order_manage\"> manage order\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.order_manage_note\" formControlName=\"order_manage_note\" [(ngModel)]=\"order_manage_note\"> manage order note\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.order_refund\" formControlName=\"order_refund\" [(ngModel)]=\"order_refund\"> manage refund\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<br/>\n\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\"><h5>Booking</h5></div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.booking_manage_product\" formControlName=\"booking_manage_product\" [(ngModel)]=\"booking_manage_product\"> manage booking products \n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.booking_manage_calendar\" formControlName=\"booking_manage_calendar\" [(ngModel)]=\"booking_manage_calendar\"> manage booking calendars\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.booking_manage\" formControlName=\"booking_manage\" [(ngModel)]=\"booking_manage\"> manage bookings\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.booking_manage_resource\" formControlName=\"booking_manage_resource\" [(ngModel)]=\"booking_manage_resource\"> manage booking resource\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.booking_add_product\" formControlName=\"booking_add_product\" [(ngModel)]=\"booking_add_product\"> add booking product\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.booking_edit_product\" formControlName=\"booking_edit_product\" [(ngModel)]=\"booking_edit_product\"> edit booking product\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.booking_delete_product\" formControlName=\"booking_delete_product\" [(ngModel)]=\"booking_delete_product\"> delete booking product\n\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\"><h5>Menu</h5></div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.menu_overview\" formControlName=\"menu_overview\" [(ngModel)]=\"menu_overview\"> view overview menu\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.menu_product\" formControlName=\"menu_product\" [(ngModel)]=\"menu_product\"> view product menu\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.menu_order\" formControlName=\"menu_order\" [(ngModel)]=\"menu_order\"> view order menu\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.menu_coupon\" formControlName=\"menu_coupon\" [(ngModel)]=\"menu_coupon\"> view coupon menu\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.menu_report\" formControlName=\"menu_report\" [(ngModel)]=\"menu_report\"> view report menu\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.menu_withdraw\" formControlName=\"menu_withdraw\" [(ngModel)]=\"menu_withdraw\"> view withdraw menu\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.menu_store_setting\" formControlName=\"menu_store_setting\" [(ngModel)]=\"menu_store_setting\"> view store settings menu\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.menu_store_payment\" formControlName=\"menu_store_payment\" [(ngModel)]=\"menu_store_payment\"> view store payment menu\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.menu_store_shipping\" formControlName=\"menu_store_shipping\" [(ngModel)]=\"menu_store_shipping\"> view store shipping menu\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.menu_store_social\" formControlName=\"menu_store_social\" [(ngModel)]=\"menu_store_social\"> view store social menu\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.menu_store_seo\" formControlName=\"menu_store_seo\" [(ngModel)]=\"menu_store_seo\"> view store seo menu\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.menu_booking\" formControlName=\"menu_booking\" [(ngModel)]=\"menu_booking\"> view booking menu\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.menu_tools\" formControlName=\"menu_tools\" [(ngModel)]=\"menu_tools\"> view tools menu\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.menu_auction\" formControlName=\"menu_auction\" [(ngModel)]=\"menu_auction\"> view auction menu\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.menu_store_verification\" formControlName=\"menu_store_verification\" [(ngModel)]=\"menu_store_verification\"> view store verification menu\n\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<br/>\n\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\"><h5>Review</h5></div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.reviews_view\" formControlName=\"reviews_view\" [(ngModel)]=\"reviews_view\"> view review \n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.reviews_manage\" formControlName=\"reviews_manage\" [(ngModel)]=\"reviews_manage\"> manage review\n\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\"><h5>Store Support</h5></div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.store_manage_support_tickets\" formControlName=\"store_manage_support_tickets\" [(ngModel)]=\"store_manage_support_tickets\"> manage support tickets\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<br/>\n\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\"><h5>Coupon</h5></div>\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.coupon_add\" formControlName=\"coupon_add\" [(ngModel)]=\"coupon_add\"> add coupon\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.coupon_edit\" formControlName=\"coupon_edit\" [(ngModel)]=\"coupon_edit\"> edit coupon\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.coupon_delete\" formControlName=\"coupon_delete\" [(ngModel)]=\"coupon_delete\"> delete coupon\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\"><h5>Withdraw</h5></div>\n\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">\n\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" [checked]=\"userPermisionData?.withdraw_manage\" formControlName=\"withdraw_manage\" [(ngModel)]=\"withdraw_manage\"> manage withdraw\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<br/>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t\t<div class=\"row\"><br></div>\n\t\t\t\t<button class=\"btn btn-success\" (click)=\"onSubmit()\">Update</button>\n\t\t\t</form>\n\t\t</div>\n</div>\n\n\n\n"

/***/ }),

/***/ "./src/app/theme/pages/default/customer/staff-list/staff-permission/staff-permission.component.ts":
/*!********************************************************************************************************!*\
  !*** ./src/app/theme/pages/default/customer/staff-list/staff-permission/staff-permission.component.ts ***!
  \********************************************************************************************************/
/*! exports provided: StaffPermissionComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "StaffPermissionComponent", function() { return StaffPermissionComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _auth_services_permission_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../../../../../auth/_services/permission.service */ "./src/app/auth/_services/permission.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/esm5/router.js");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/esm5/forms.js");
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






var StaffPermissionComponent = /** @class */ (function () {
    function StaffPermissionComponent(imgBaseUrl, toastr, router, route, _permissionService, formBuilder) {
        this.imgBaseUrl = imgBaseUrl;
        this.toastr = toastr;
        this.router = router;
        this.route = route;
        this._permissionService = _permissionService;
        this.formBuilder = formBuilder;
        this.permision_group_name = "staff";
        this.product_list = '0';
        this.product_add = '0';
        this.product_edit = '0';
        this.product_delete = '0';
        this.product_view = '0';
        this.product_duplicate = '0';
        this.product_import = '0';
        this.product_export = '0';
        this.product_menu = '0';
        this.product_category = '0';
        this.product_subcategory = '0';
        this.product_brand = '0';
        this.product_bulkupload = '0';
        this.order_list = '0';
        this.order_add = '0';
        this.order_edit = '0';
        this.order_delete = '0';
        this.order_deliveries = '0';
        this.reviews_list = '0';
        this.reviews_add = '0';
        this.reviews_edit = '0';
        this.reviews_delete = '0';
        this.reviews_approval = '0';
        this.reviews_view = '0';
        this.reviews_manage = '0';
        this.withdraw_list = '0';
        this.withdraw_add = '0';
        this.withdraw_edit = '0';
        this.withdraw_delete = '0';
        this.withdraw_approval = '0';
        this.subscription_list = '0';
        this.subscription_add = '0';
        this.subscription_edit = '0';
        this.subscription_delete = '0';
        this.booking_list = '0';
        this.booking_add = '0';
        this.booking_edit = '0';
        this.booking_delete = '0';
        this.support_list = '0';
        this.support_add = '0';
        this.support_edit = '0';
        this.support_delete = '0';
        this.website_setting = '0';
        this.dropship_list = '0';
        this.dropship_add = '0';
        this.dropship_edit = '0';
        this.dropship_delete = '0';
        this.report_overview = '0';
        this.report_inventory = '0';
        this.report_salesByDay = '0';
        this.report_topSelling = '0';
        this.report_topEarning = '0';
        this.report_statement = '0';
        this.report_daily_sale = '0';
        this.report_top_selling = '0';
        this.report_top_earning = '0';
        this.menu_list = '0';
        this.menu_add = '0';
        this.menu_edit = '0';
        this.menu_delete = '0';
        this.overview_sales = '0';
        this.overview_sales_report_chart = '0';
        this.overview_annoucement = '0';
        this.overview_order_report = '0';
        this.overview_review_report = '0';
        this.overview_product_status_report = '0';
        this.booking_manage_product = '0';
        this.booking_manage_calendar = '0';
        this.booking_manage = '0';
        this.booking_manage_resource = '0';
        this.booking_add_product = '0';
        this.booking_delete_product = '0';
        this.booking_edit_product = '0';
        this.menu_overview = '0';
        this.menu_product = '0';
        this.menu_order = '0';
        this.menu_coupon = '0';
        this.menu_report = '0';
        this.menu_withdraw = '0';
        this.menu_store_setting = '0';
        this.menu_store_payment = '0';
        this.menu_store_shipping = '0';
        this.menu_store_social = '0';
        this.menu_store_seo = '0';
        this.menu_booking = '0';
        this.menu_tools = '0';
        this.menu_auction = '0';
        this.menu_store_verification = '0';
        this.store_manage_support_tickets = '0';
        this.coupon_add = '0';
        this.coupon_edit = '0';
        this.coupon_delete = '0';
        this.withdraw_manage = '0';
        this.order_view = '0';
        this.order_manage = '0';
        this.order_manage_note = '0';
        this.order_refund = '0';
        this.form = formBuilder.group({
            //product_list: [null],
            product_add: [null],
            product_edit: [null],
            product_delete: [null],
            product_view: [null],
            product_duplicate: [null],
            product_import: [null],
            product_export: [null],
            //product_menu: [null],
            //product_category: [null],
            //product_subcategory: [null],
            //product_brand: [null],
            //product_bulkupload: [null],
            /*order_list: [null],
            order_add: [null],
            order_edit: [null],
            order_delete: [null],
            order_deliveries: [null],*/
            /* reviews_list: [null],
             reviews_add: [null],
             reviews_edit: [null],
             reviews_delete: [null],
             reviews_approval: [null],*/
            reviews_view: [null],
            reviews_manage: [null],
            /*withdraw_list: [null],
            withdraw_add: [null],
            withdraw_edit: [null],
            withdraw_delete: [null],
            withdraw_approval: [null],*/
            /*subscription_list: [null],
            subscription_add: [null],
            subscription_edit: [null],
            subscription_delete: [null],*/
            /*booking_list: [null],
            booking_add: [null],
            booking_edit: [null],
            booking_delete: [null],*/
            booking_manage_product: [null],
            booking_manage_calendar: [null],
            booking_manage: [null],
            booking_manage_resource: [null],
            booking_add_product: [null],
            booking_delete_product: [null],
            booking_edit_product: [null],
            /* support_list: [null],
             support_add: [null],
             support_edit: [null],
             support_delete: [null],*/
            //website_setting: [null],
            /* dropship_list: [null],
             dropship_add: [null],
             dropship_edit: [null],
             dropship_delete: [null],*/
            report_overview: [null],
            /*report_inventory: [null],
            report_salesByDay: [null],
            report_topSelling: [null],
            report_topEarning: [null],*/
            report_statement: [null],
            report_daily_sale: [null],
            report_top_selling: [null],
            report_top_earning: [null],
            /* menu_list: [null],
             menu_add: [null],
             menu_edit: [null],
             menu_delete: [null],*/
            overview_sales: [null],
            overview_sales_report_chart: [null],
            overview_annoucement: [null],
            overview_order_report: [null],
            overview_review_report: [null],
            overview_product_status_report: [null],
            menu_overview: [null],
            menu_product: [null],
            menu_order: [null],
            menu_coupon: [null],
            menu_report: [null],
            menu_withdraw: [null],
            menu_store_setting: [null],
            menu_store_payment: [null],
            menu_store_shipping: [null],
            menu_store_social: [null],
            menu_store_seo: [null],
            menu_booking: [null],
            menu_tools: [null],
            menu_auction: [null],
            menu_store_verification: [null],
            store_manage_support_tickets: [null],
            coupon_add: [null],
            coupon_edit: [null],
            coupon_delete: [null],
            withdraw_manage: [null],
            order_view: [null],
            order_manage: [null],
            order_manage_note: [null],
            order_refund: [null],
        });
    }
    StaffPermissionComponent.prototype.ngOnInit = function () {
        var _this = this;
        this.userPermisionData = '{"product_add":0,"product_edit":0,"product_delete":0,"product_view":0,"product_duplicate":0,"product_import":0,"product_export":0,"reviews_view":0,"reviews_manage":0,"booking_manage_product":0,"booking_manage_calendar":0,"booking_manage":0,"booking_manage_resource":0,"booking_add_product":0,"booking_delete_product":0,"booking_edit_product":0,"report_overview":0,"report_statement":0,"report_daily_sale":0,"report_top_selling":0,"report_top_earning":0,"overview_sales":0,"overview_sales_report_chart":0,"overview_annoucement":0,"overview_order_report":0,"overview_review_report":0,"overview_product_status_report":0,"menu_overview":0,"menu_product":0,"menu_order":0,"menu_coupon":0,"menu_report":0,"menu_withdraw":0,"menu_store_setting":0,"menu_store_payment":0,"menu_store_shipping":0,"menu_store_social":0,"menu_store_seo":0,"menu_booking":0,"menu_tools":0,"menu_auction":0,"menu_store_verification":0,"store_manage_support_tickets":0,"coupon_add":0,"coupon_edit":0,"coupon_delete":0,"withdraw_manage":0,"order_view":0,"order_manage":0,"order_manage_note":0,"order_refund":0,}';
        this.route.params.subscribe(function (params) {
            console.log(params.id);
            _this.user_id = params.id;
            //for getting user Group Details
            _this._permissionService.getUserGroupById(params.id).subscribe(function (data) {
                //console.log(data);
                /*this.permision_group_name = data.success.group_name;
                this.permisionData = data.success;*/
            });
            //for getting user permission Details
            console.log(params.id);
            _this._permissionService.getUserStaffPermissionById(params.id).subscribe(function (data) {
                console.log(data);
                _this.userPermisionData = data.success;
                _this.product_add = data.success.product_add;
                _this.product_edit = data.success.product_edit;
                _this.product_delete = data.success.product_delete;
                _this.product_view = data.success.product_view;
                _this.product_duplicate = data.success.product_duplicate;
                _this.product_import = data.success.product_import;
                _this.product_export = data.success.product_export;
                _this.reviews_view = data.success.reviews_view;
                _this.reviews_manage = data.success.reviews_manage;
                _this.booking_manage_product = data.success.booking_manage_product;
                _this.booking_manage_calendar = data.success.booking_manage_calendar;
                _this.booking_manage = data.success.booking_manage;
                _this.booking_manage_resource = data.success.booking_manage_resource;
                _this.booking_add_product = data.success.booking_add_product;
                _this.booking_delete_product = data.success.booking_delete_product;
                _this.booking_edit_product = data.success.booking_edit_product;
                _this.report_overview = data.success.report_overview;
                _this.report_statement = data.success.report_statement;
                _this.report_daily_sale = data.success.report_daily_sale;
                _this.report_top_selling = data.success.report_top_selling;
                _this.report_top_earning = data.success.report_top_earning;
                _this.overview_sales = data.success.overview_sales;
                _this.overview_sales_report_chart = data.success.overview_sales_report_chart;
                _this.overview_annoucement = data.success.overview_annoucement;
                _this.overview_order_report = data.success.overview_order_report;
                _this.overview_review_report = data.success.overview_review_report;
                _this.overview_product_status_report = data.success.overview_product_status_report;
                _this.menu_overview = data.success.menu_overview;
                _this.menu_product = data.success.menu_product;
                _this.menu_order = data.success.menu_order;
                _this.menu_coupon = data.success.menu_coupon;
                _this.menu_report = data.success.menu_report;
                _this.menu_withdraw = data.success.menu_withdraw;
                _this.menu_store_setting = data.success.menu_store_setting;
                _this.menu_store_payment = data.success.menu_store_payment;
                _this.menu_store_shipping = data.success.menu_store_shipping;
                _this.menu_store_social = data.success.menu_store_social;
                _this.menu_store_seo = data.success.menu_store_seo;
                _this.menu_booking = data.success.menu_booking;
                _this.menu_tools = data.success.menu_tools;
                _this.menu_auction = data.success.menu_auction;
                _this.menu_store_verification = data.success.menu_store_verification;
                _this.store_manage_support_tickets = data.success.store_manage_support_tickets;
                _this.coupon_add = data.success.coupon_add;
                _this.coupon_edit = data.success.coupon_edit;
                _this.coupon_delete = data.success.coupon_delete;
                _this.withdraw_manage = data.success.withdraw_manage;
                _this.order_view = data.success.order_view;
                _this.order_manage = data.success.order_manage;
                _this.order_manage_note = data.success.order_manage_note;
                _this.order_refund = data.success.order_refund;
            });
        });
    };
    StaffPermissionComponent.prototype.onSubmit = function () {
        var _this = this;
        /* console.log('this.form.value');
         console.log(this.form.value);*/
        console.log('this.user_id');
        console.log(this.user_id);
        var input;
        input = { form_data: this.form.value };
        input.form_data.user_id = this.user_id;
        //console.log(input);
        this._permissionService.updateUserPermision(input).subscribe(function (data) {
            console.log(data);
            _this.toastr.success('Permission Updated Successfully', 'Success Message');
            _this.form.reset();
            //this.formSumitAttempt = false;
            _this.router.navigate(['customer/staff-list']);
        });
    };
    StaffPermissionComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-staff-permission',
            template: __webpack_require__(/*! ./staff-permission.component.html */ "./src/app/theme/pages/default/customer/staff-list/staff-permission/staff-permission.component.html"),
            styles: []
        }),
        __metadata("design:paramtypes", [_services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__["ScriptLoaderService"], ngx_toastr__WEBPACK_IMPORTED_MODULE_5__["ToastrService"], _angular_router__WEBPACK_IMPORTED_MODULE_2__["Router"], _angular_router__WEBPACK_IMPORTED_MODULE_2__["ActivatedRoute"], _auth_services_permission_service__WEBPACK_IMPORTED_MODULE_1__["PermissionService"], _angular_forms__WEBPACK_IMPORTED_MODULE_4__["FormBuilder"]])
    ], StaffPermissionComponent);
    return StaffPermissionComponent;
}());



/***/ }),

/***/ "./src/app/theme/pages/default/customer/staff-list/staff-permission/staff-permission.module.ts":
/*!*****************************************************************************************************!*\
  !*** ./src/app/theme/pages/default/customer/staff-list/staff-permission/staff-permission.module.ts ***!
  \*****************************************************************************************************/
/*! exports provided: StaffPermissionModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "StaffPermissionModule", function() { return StaffPermissionModule; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/esm5/common.js");
/* harmony import */ var _staff_permission_staff_permission_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../staff-permission/staff-permission.component */ "./src/app/theme/pages/default/customer/staff-list/staff-permission/staff-permission.component.ts");
/* harmony import */ var _default_default_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../default/default.component */ "./src/app/theme/pages/default/default.component.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/esm5/router.js");
/* harmony import */ var _layouts_layout_module__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../../../../layouts/layout.module */ "./src/app/theme/layouts/layout.module.ts");
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
                component: _staff_permission_staff_permission_component__WEBPACK_IMPORTED_MODULE_2__["StaffPermissionComponent"]
            }
        ]
    },
];
var StaffPermissionModule = /** @class */ (function () {
    function StaffPermissionModule() {
    }
    StaffPermissionModule = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_1__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["RouterModule"].forChild(routes),
                _layouts_layout_module__WEBPACK_IMPORTED_MODULE_5__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_7__["FormsModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_7__["ReactiveFormsModule"], ngx_pagination__WEBPACK_IMPORTED_MODULE_6__["NgxPaginationModule"],
            ],
            declarations: [_staff_permission_staff_permission_component__WEBPACK_IMPORTED_MODULE_2__["StaffPermissionComponent"]]
        })
    ], StaffPermissionModule);
    return StaffPermissionModule;
}());



/***/ })

}]);
//# sourceMappingURL=pages-default-customer-staff-list-staff-permission-staff-permission-module.js.map