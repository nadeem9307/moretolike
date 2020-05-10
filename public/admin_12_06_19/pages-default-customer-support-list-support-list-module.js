(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-customer-support-list-support-list-module"],{

/***/ "./src/app/theme/pages/default/customer/support-list/support-list.component.html":
/*!***************************************************************************************!*\
  !*** ./src/app/theme/pages/default/customer/support-list/support-list.component.html ***!
  \***************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"m-portlet m-portlet--mobile\">\n\t\t<div class=\"m-portlet__body\">\n\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\"><i class=\"la la-gear\"></i></span>\n\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\"> Support List</h3>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\n\t\t\t<div class=\"m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30\">\n\t\t\t\t<div class=\"row align-items-center\">\n\t\t\t\t\t<div class=\"col-xl-12 order-2 order-xl-1\">\n\t\t\t\t\t\t<div class=\"form-group m-form__group row align-items-center\">\n\n\t\t\t\t\t\t\t<div class=\"col-md-4\">\n\t\t\t\t\t\t\t\t<div class=\"m-form__group m-form__group--inline\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__label\">\n\t\t\t\t\t\t\t\t\t\t<label class=\"m-label m-label--single\">\n\t\t\t\t\t\t\t\t\t\t\tStaus:\n\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__control\">\n\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"search_value\" [(ngModel)] = \"dropDownValue\" (change)=\"search()\">\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">All</option>\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"Active\">Active</option>\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"Inactive\">Inactive</option>\n\t\t\t\t\t\t\t\t\t\t</select>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"d-md-none m--margin-bottom-10\"></div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"col-md-6\">\n\t\t\t\t\t\t\t\t<div class=\"m-input-icon m-input-icon--left\">\n\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input m-input--solid\" id=\"generalSearch\" [(ngModel)] = \"searchValue\" placeholder=\"Search by Name / Email / Contact NO\" type=\"text\" name=\"search_value\">\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\n\n\t\t\t\t\t\t\t<div class=\"col-md-2\">\n\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill\" (click)=\"search()\">\n\t\t\t\t\t\t\t\t\t<span>\n\t\t\t\t\t\t\t\t\t\t<i class=\"la la-search\"></i>\n\t\t\t\t\t\t\t\t\t\t<span>\n\t\t\t\t\t\t\t\t\t\t\tSearch\n\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t\t<div class=\"m-separator m-separator--dashed d-xl-none\"></div>\n\t\t\t\t\t\t\t</div> \n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t\t\t\t\n\t\t\t<div class=\"m_datatable m-datatable m-datatable--default m-datatable--loaded\" id=\"local_data\" style=\"position: static; zoom: 1;\">\n\t\t\t\t<table class=\"m-datatable__table\" style=\"display: block; min-height: 300px; overflow-x: auto;\">\n\t\t\t\t\t<thead class=\"m-datatable__head\">\n\t\t\t\t\t\t<tr class=\"m-datatable__row\" style=\"left: 0px;\">\n\n\t\t\t\t\t\t\t<!-- <th data-field=\"ShipName\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\"><span style=\"width: 110px;\">support ID</span>\n\t\t\t\t\t\t\t</th> -->\n\t\t\t\t\t\t\t<th data-field=\"ShipName\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\"><span style=\"width: 110px;\">id</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"Currency\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 100px;\">Order Id</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"ShipAddress\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\"><span style=\"width: 110px;\">Subject</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"ShipDate\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Message</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"Status\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Status</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"Actions\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Assigned To</span>\n\t\t\t\t\t\t\t</th>\n\t\t\t\t\t\t\t<th data-field=\"Actions\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Priority</span>\n\t\t\t\t\t\t\t</th>\n\t\t\t\t\t\t</tr>\n\t\t\t\t\t</thead>\n\t\t\t\t\t<tbody class=\"m-datatable__body\" style=\"\">\n\t\t\t\t\t\t<tr data-row=\"0\" *ngFor=\"let support of supportData | paginate: { itemsPerPage: 10, currentPage: p }\"  class=\"m-datatable__row\" style=\"left: 0px;\">\n\n\n\t\t\t\t\t\t\t\t<!-- <td data-field=\"ShipName\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\">{{base64_encode(support.id)}}</span>\n\t\t\t\t\t\t\t\t</td> -->\n\t\t\t\t\t\t\t\t<td data-field=\"ShipName\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\">{{support.id}}</span>\n\t\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t\t\t<td data-field=\"Currency\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 130px;\">{{support.order_id}}</span>\n\t\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t\t\t<td data-field=\"ShipAddress\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\">{{support.title}}</span>\n\t\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t\t\t<!-- <td data-field=\"ShipDate\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\">{{support.support_name}}</span>\n\t\t\t\t\t\t\t\t</td> -->\n\t\t\t\t\t\t\t\t<td data-field=\"Latitude\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\" data-toggle=\"modal\" data-target=\"#m_modal_7\" (click)=\"supportids(support.id,support.customer_id)\">{{support.description}}</span>\n\t\t\t\t\t\t\t\t</td>\n\n\t\t\t\t\t\t\t\t<td data-field=\"Status\"  class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span  style=\"width: 110px;\" (click)=\"supportId(support.id)\">\n\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"modal\" data-target=\"#status\" class=\"m-badge--wide m-badge\" [ngClass]=\"{'m-badge--success':  support.status == '2', 'm-badge--warning':  support.status == '1', 'm-badge--default':  support.status == '0'}\" title=\"Status\">{{support.status==0 ? 'Pending' : (support.status == 1 ? 'Working on it' : 'Done')}}\n\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<td data-field=\"Actions\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"overflow: visible; position: relative; width: 110px;\">\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t<!-- <button type=\"button\" class=\"btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill btn-sm\" data-toggle=\"modal\" data-target=\"#m_modal_6\" (click)=\"supportId(support.id)\">\n\t\t\t\t\t\t\t\t\t {{support.assing_to==NULL ? 'assignTo' : support.f_name+' '+support.l_name }}\n\t\t\t\t\t\t\t\t\t</button> -->\n\t\t\t\t\t\t\t\t\t<span data-toggle=\"modal\" (click)=\"supportId(support.id)\" data-target=\"#m_modal_6\" class=\"m-badge--wide m-badge\" [ngClass]=\"{'m-badge--success':  support.assing_to == support.assing_to, 'm-badge--default':  support.assing_to == 'NULL'}\">\n\t\t\t\t\t\t\t\t\t\t{{support.assing_to==NULL ? 'assignTo' : support.f_name+' '+support.l_name }}\n\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t\t\t<td data-field=\"Latitude\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span  style=\"width: 110px;\" >\n\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"modal\" (click)=\"supportId(support.id)\" data-target=\"#priority\" class=\"m-badge--wide m-badge\" [ngClass]=\"{'m-badge--primary':  support.priority == '1', 'm-badge--warning':  support.priority == '2', 'm-badge--success':  support.priority == '3', 'm-badge--danger':  support.priority == '4' }\" title=\"Priority\">\n\t\t\t\t\t\t\t\t\t\t\t{{support.priority == 1 ? 'Low' : (support.priority == 2 ? 'Medium' : (support.priority == 3 ? 'High' : (support.priority == 4 ? 'Urgent' : 'No Priority')))}}\n\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t</tr>\n\t\t\t\t\t\t</tbody>\n\t\t\t\t\t</table>\n\t\t\t\t\t<!--end::Modal-->  <!-- Modal -->\n\t\t\t<div class=\"modal fade\" id=\"m_modal_6\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">\n\t\t\t\t<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">\n\t\t\t\t\t<div class=\"modal-content\">\n\t\t\t\t\t\t\n\t\t\t\t\t\t<div class=\"modal-body\">\n\t\t\t\t\t\t\t<form [formGroup] =\"form\">\n\t\t\t\t\t\t\t\t<div class=\"form-group m-form__group\">\n\t\t\t\t\t\t\t\t\t<label for=\"exampleSelect1\">\n\t\t\t\t\t\t\t\t\t\tAssign To\n\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t<select formControlName=\"assign_to\" class=\"form-control m-input\" id=\"exampleSelect1\">\n\t\t\t\t\t\t\t\t\t\t<option>--Select--</option>\n\t\t\t\t\t\t\t\t\t<option *ngFor=\"let staff of staffData\" value=\"{{staff?.id}}\">\n\t\t\t\t\t\t\t\t\t\t{{staff?.f_name}} {{staff?.l_name}}\n\t\t\t\t\t\t\t\t\t</option>\n\t\t\t\t\t\t\t\t\t</select>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<button type=\"button\" (click)=\"assignTo()\" class=\"btn btn-primary\" data-dismiss=\"modal\">\n\t\t\t\t\t\t\t\t\tOK\n\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t</form>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\n\t\t\t<div class=\"modal fade\" id=\"priority\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">\n\t\t\t\t<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">\n\t\t\t\t\t<div class=\"modal-content\">\n\t\t\t\t\t\t<div class=\"modal-body\">\n\t\t\t\t\t\t\t<div class=\"form-group m-form__group\">\n\t\t\t\t\t\t\t\t<label for=\"exampleSelect1\">\n\t\t\t\t\t\t\t\t\tPriority\n\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t<select class=\"form-control m-input\" (change)=\"onChangePriority($event)\" id=\"exampleSelect1\">\n\t\t\t\t\t\t\t\t\t<option value=\"\">--Select Priority--</option>\n\t\t\t\t\t\t\t\t\t<option value=\"1\">Low</option>\n\t\t\t\t\t\t\t\t\t<option value=\"2\">Medium</option>\n\t\t\t\t\t\t\t\t\t<option value=\"3\">High</option>\n\t\t\t\t\t\t\t\t\t<option value=\"4\">Urgent</option>\n\t\t\t\t\t\t\t\t</select>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">\n\t\t\t\t\t\t\t\tOK\n\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\n\t\t\t<div class=\"modal fade\" id=\"status\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">\n\t\t\t\t<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">\n\t\t\t\t\t<div class=\"modal-content\">\n\t\t\t\t\t\t<div class=\"modal-body\">\n\t\t\t\t\t\t\t<form [formGroup] =\"formStatus\">\n\t\t\t\t\t\t\t\t<div class=\"form-group m-form__group\">\n\t\t\t\t\t\t\t\t\t<label for=\"exampleStatus\">\n\t\t\t\t\t\t\t\t\t\tStatus\n\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t<select formControlName=\"status\" class=\"form-control m-input\" id=\"exampleStatus\">\n\t\t\t\t\t\t\t\t\t\t<option value=\"\">--Select Status--</option>\n\t\t\t\t\t\t\t\t\t\t<option value=\"0\">Pending</option>\n\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Working on It</option>\n\t\t\t\t\t\t\t\t\t\t<option value=\"2\">Done</option>\n\t\t\t\t\t\t\t\t\t</select>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<button type=\"button\" (click)=\"onStatus()\" class=\"btn btn-primary\" data-dismiss=\"modal\">\n\t\t\t\t\t\t\t\t\tOK\n\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t</form>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\n\t\t\t<!--end::Modal-->  <!-- Modal -->\n\t\t\t<div class=\"modal fade\" id=\"m_modal_7\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">\n\t\t\t\t<div class=\"modal-dialog modal-dialog-centered\" role=\"document\">\n\t\t\t\t\t<div class=\"modal-content\">\n\t\t\t\t\t\t\n\t\t\t\t\t\t<div class=\"modal-body\">\n\t\t\t\t\t\t\t<form [formGroup] =\"formMessage\">\n\t\t\t\t\t\t\t\t<div class=\"form-group m-form__group\">\n\t\t\t\t\t\t\t\t\t<div class=\"form-control m-input\" id=\"ddd\" style=\"overflow-y: scroll;overflow-x: hidden; height: 400px;\" >\n\t\t\t\t\t\t\t\t\t\t<div class=\"row\" *ngFor=\"let chat of chats\">\n\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\" *ngIf=\"chat.from_user_id==1;else other_content\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"float: right;\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>{{chat.from_u_f_name}} {{chat.from_u_l_name}}</h6>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{chat.from_u_profile}}\" width=\"50px\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin-bottom: 0;\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{chat.message}}\n\t\t\t\t\t\t\t\t\t\t\t\t</p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{chat.created_at}}</p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\" *ngIf=\"chat.from_user_id!=1;\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"float: left;\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<h6>{{chat.f_name}} {{chat.l_name}}</h6>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{chat.to_img}}\" width=\"50px\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin-bottom: 0;\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{chat.message}}\n\t\t\t\t\t\t\t\t\t\t\t\t</p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{chat.created_at}}</p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div><br/>\n\t\t\t\t\t\t\t\t\t<textarea formControlName=\"message\" placeholder=\"Type..\" class=\"form-control m-input\" id=\"exampleTextarea\" rows=\"1\"></textarea>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<button type=\"button\" (click)=\"sendMessage()\" class=\"btn btn-success\" style=\"float: right;\">\n\t\t\t\t\t\t\t\t\tSend\n\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t</form>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t\t\t\t <pagination-controls (pageChange)=\"p = $event\"></pagination-controls> \n\t\t\t\n\t\t</div>\n\t</div>"

/***/ }),

/***/ "./src/app/theme/pages/default/customer/support-list/support-list.component.ts":
/*!*************************************************************************************!*\
  !*** ./src/app/theme/pages/default/customer/support-list/support-list.component.ts ***!
  \*************************************************************************************/
/*! exports provided: SupportListComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "SupportListComponent", function() { return SupportListComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _auth_services_support_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../../../../auth/_services/support.service */ "./src/app/auth/_services/support.service.ts");
/* harmony import */ var _auth_services_staff_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../auth/_services/staff.service */ "./src/app/auth/_services/staff.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/esm5/router.js");
/* harmony import */ var ngx_toastr__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ngx-toastr */ "./node_modules/ngx-toastr/fesm5/ngx-toastr.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/esm5/forms.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};






var SupportListComponent = /** @class */ (function () {
    function SupportListComponent(_staffService, _supportService, toastr, router, formBuilder) {
        this._staffService = _staffService;
        this._supportService = _supportService;
        this.toastr = toastr;
        this.router = router;
        this.formBuilder = formBuilder;
        this.chats = [];
        this.searchValue = "";
        this.dropDownValue = '';
        this.p = 1;
    }
    SupportListComponent.prototype.ngOnInit = function () {
        /*user permission*/
        var currentUser = JSON.parse(localStorage.getItem('currentUser'));
        var permission = currentUser.success.permission;
        if (permission.support_list != 1) {
            this.toastr.error('You have not permission to visit this page.', 'Error Message');
            this.router.navigate(['/']);
        }
        this.form = this.formBuilder.group({
            assign_to: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_5__["Validators"].required],
        });
        this.formMessage = this.formBuilder.group({
            message: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_5__["Validators"].required],
        });
        this.formStatus = this.formBuilder.group({
            status: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_5__["Validators"].required],
        });
        /*user permission*/
        // localStorage.setItem('section', 'customer');
        this.getSupport();
        this.staff();
        // console.log("hello");
    };
    SupportListComponent.prototype.getSupport = function () {
        var _this = this;
        this._supportService.getAll().subscribe(function (data) {
            _this.supportData = data.success;
        });
    };
    SupportListComponent.prototype.staff = function () {
        var _this = this;
        this._staffService.getAll().subscribe(function (data) {
            _this.staffData = data.success;
        });
    };
    /*public search() {
        this._supportService.searching({ search_value: this.searchValue, dropdown_value: this.dropDownValue }).subscribe(
            data => {
                console.log(data);
                this.supportData = data.success;
            }
        );
    }*/
    SupportListComponent.prototype.supportId = function (sp_id) {
        console.log(sp_id);
        this.sp_id = sp_id;
    };
    SupportListComponent.prototype.supportids = function (sp_id, customer_id) {
        console.log(sp_id);
        console.log(customer_id);
        this.sp_id = sp_id;
        this.customer_id = customer_id;
        this.getChat(this.sp_id);
    };
    SupportListComponent.prototype.assignTo = function () {
        var _this = this;
        var assignToid = parseInt(this.form.value.assign_to);
        var sp_id = this.sp_id;
        var data = {
            "assignToid": assignToid,
            "sp_id": sp_id
        };
        this._supportService.assignTo(data).subscribe(function (data) {
            _this.staff_name = data.success.f_name + ' ' + data.success.l_name;
            _this.getSupport();
            _this.toastr.success('Staff assign Successfully', 'Success Message');
        });
    };
    SupportListComponent.prototype.onChangePriority = function (e) {
        var _this = this;
        console.log(e.target.value);
        this._supportService.priorityUpdate(this.sp_id, e.target.value).subscribe(function (data) {
            console.log(data);
            _this.staff_name = data.success.f_name + ' ' + data.success.l_name;
            _this.getSupport();
            _this.toastr.success('Priority updated Successfully', 'Success Message');
        });
    };
    SupportListComponent.prototype.onStatus = function () {
        var _this = this;
        /*console.log(this.formStatus.value.status);
        console.log(parseInt(this.formStatus.value.status));*/
        var status = parseInt(this.formStatus.value.status);
        this._supportService.updateStatus(this.sp_id, status).subscribe(function (data) {
            console.log(data);
            _this.getSupport();
            _this.toastr.success('Status updated Successfully', 'Success Message');
        });
    };
    SupportListComponent.prototype.sendMessage = function () {
        var _this = this;
        console.log(this.sp_id);
        console.log(this.formMessage.value.message);
        //let data = this.formMessage.value.message;
        var data = {
            message: this.formMessage.value.message,
            customer_id: this.customer_id
        };
        this._supportService.sendMessage(this.sp_id, data).subscribe(function (data) {
            _this.getChat(_this.sp_id);
            _this.reset();
            //console.log(data);
            /*this.staff_name = data.success.f_name+' '+data.success.l_name;
            this.getSupport();*/
            _this.toastr.success('Message sent Successfully', 'Success Message');
        });
    };
    SupportListComponent.prototype.reset = function () {
        this.formMessage.reset();
    };
    /*public changeStatus(customer: any) {

        if (customer.customer_status == 'Active') {
            customer.customer_status = 'Inactive';

            this._supportService.updateStatus(customer.id).subscribe(
                data => {
                    console.log('update', data);
                }
            );
        } else {
            customer.customer_status = 'Active';
            this._supportService.updateStatus(customer.id).subscribe(
                data => {
                    console.log('update', data);
                }
            );
        }
    }*/
    SupportListComponent.prototype.getChat = function (sp_id) {
        var _this = this;
        this._supportService.getChat(sp_id).subscribe(function (data) {
            //console.log(data.success);
            _this.chats = data.success;
            var dd = JSON.parse(localStorage.getItem('currentUser'));
            _this.logged_user_id = dd.success.id;
            //this.toastr.success('Priority updated Successfully', 'Success Message');
        });
    };
    SupportListComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-support-list',
            template: __webpack_require__(/*! ./support-list.component.html */ "./src/app/theme/pages/default/customer/support-list/support-list.component.html"),
            styles: [],
            providers: [_auth_services_staff_service__WEBPACK_IMPORTED_MODULE_2__["StaffService"]]
        }),
        __metadata("design:paramtypes", [_auth_services_staff_service__WEBPACK_IMPORTED_MODULE_2__["StaffService"], _auth_services_support_service__WEBPACK_IMPORTED_MODULE_1__["SupportService"], ngx_toastr__WEBPACK_IMPORTED_MODULE_4__["ToastrService"], _angular_router__WEBPACK_IMPORTED_MODULE_3__["Router"], _angular_forms__WEBPACK_IMPORTED_MODULE_5__["FormBuilder"]])
    ], SupportListComponent);
    return SupportListComponent;
}());



/***/ }),

/***/ "./src/app/theme/pages/default/customer/support-list/support-list.module.ts":
/*!**********************************************************************************!*\
  !*** ./src/app/theme/pages/default/customer/support-list/support-list.module.ts ***!
  \**********************************************************************************/
/*! exports provided: SupportListModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "SupportListModule", function() { return SupportListModule; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/esm5/common.js");
/* harmony import */ var _support_list_support_list_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../support-list/support-list.component */ "./src/app/theme/pages/default/customer/support-list/support-list.component.ts");
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
                component: _support_list_support_list_component__WEBPACK_IMPORTED_MODULE_2__["SupportListComponent"]
            }
        ]
    },
];
var SupportListModule = /** @class */ (function () {
    function SupportListModule() {
    }
    SupportListModule = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_1__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["RouterModule"].forChild(routes),
                _layouts_layout_module__WEBPACK_IMPORTED_MODULE_5__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_6__["FormsModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_6__["ReactiveFormsModule"], ngx_pagination__WEBPACK_IMPORTED_MODULE_7__["NgxPaginationModule"],
            ],
            declarations: [_support_list_support_list_component__WEBPACK_IMPORTED_MODULE_2__["SupportListComponent"]]
        })
    ], SupportListModule);
    return SupportListModule;
}());



/***/ })

}]);
//# sourceMappingURL=pages-default-customer-support-list-support-list-module.js.map