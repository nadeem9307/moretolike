(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-index-index-module"],{

/***/ "./src/app/theme/pages/default/index/index.component.html":
/*!****************************************************************!*\
  !*** ./src/app/theme/pages/default/index/index.component.html ***!
  \****************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<!-- BEGIN: Subheader -->\n<div class=\"m-subheader\" appunwraptag=\"\">\n\t<div class=\"d-flex align-items-center\">\n\t\t<div class=\"mr-auto\">\n\t\t\t<h3 class=\"m-subheader__title\">\n\t\t\t\tDashboard\n\t\t\t</h3>\n\t\t</div>\n\t\t<div>\n\t\t\t<!-- <span class=\"m-subheader__daterange\" id=\"m_dashboard_daterangepicker\">\n\t\t\t\t<span class=\"m-subheader__daterange-label\">\n\t\t\t\t\t<span class=\"m-subheader__daterange-title\"></span>\n\t\t\t\t\t<span class=\"m-subheader__daterange-date m--font-brand\"></span>\n\t\t\t\t</span>\n\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill\">\n\t\t\t\t\t<i class=\"la la-angle-down\"></i>\n\t\t\t\t</a>\n\t\t\t</span> -->\n\t\t</div>\n\t</div>\n</div>\n<!-- END: Subheader -->\n<div class=\"m-content\">\n\t<div class=\"row\">\n\t\t<div class=\"col-xl-4\">\n\t\t\t<div class=\"m-portlet m-portlet--head-overlay m-portlet--full-height  m-portlet--rounded-force\">\n\t\t\t\t<div class=\"m-portlet__head m-portlet__head--fit-\">\n\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text m--font-light\" style=\"color:#3f4047 !important;\">\n\t\t\t\t\t\t\t\tTotal Users : {{dashboardData.total_users}} <i class=\"fa fa-users\"></i>\n\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<div class=\"m-portlet__head-tools\">\n\t\t\t\t\t\t<ul class=\"m-portlet__nav\">\n\t\t\t\t\t\t\t<li class=\"m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push\" m-dropdown-toggle=\"hover\">\n\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t</ul>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div> \n\t\t</div>\n\t\t<div class=\"col-xl-4\">\n\t\t\t<div class=\"m-portlet m-portlet--head-overlay m-portlet--full-height  m-portlet--rounded-force\">\n\t\t\t\t<div class=\"m-portlet__head m-portlet__head--fit-\">\n\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text m--font-light\" style=\"color:#3f4047 !important;\">\n\t\t\t\t\t\t\t\tActive Users : {{dashboardData.active_users}} <i class=\"fa fa-users\"></i>\n\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<div class=\"m-portlet__head-tools\">\n\t\t\t\t\t\t<ul class=\"m-portlet__nav\">\n\t\t\t\t\t\t\t<li class=\"m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push\" m-dropdown-toggle=\"hover\">\n\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t</ul>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div> \n\t\t</div>\n\t\t<div class=\"col-xl-4\">\n\t\t\t<div class=\"m-portlet m-portlet--head-overlay m-portlet--full-height  m-portlet--rounded-force\">\n\t\t\t\t<div class=\"m-portlet__head m-portlet__head--fit-\">\n\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text m--font-light\" style=\"color:#3f4047 !important;\">\n\t\t\t\t\t\t\t\tInactive Users : {{dashboardData.inactive_users}} <i class=\"fa fa-users\"></i>\n\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<div class=\"m-portlet__head-tools\">\n\t\t\t\t\t\t<ul class=\"m-portlet__nav\">\n\t\t\t\t\t\t\t<li class=\"m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push\" m-dropdown-toggle=\"hover\">\n\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t</ul>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div> \n\t\t</div>\n\t</div>\n\t<!--Begin::Section-->\n\t<div class=\"row\">\n\t\t<div class=\"col-xl-4\">\n\t\t\t<!--begin:: Widgets/Blog-->\n\t\t\t<div class=\"m-portlet m-portlet--head-overlay m-portlet--full-height  m-portlet--rounded-force\">\n\t\t\t\t<div class=\"m-portlet__head m-portlet__head--fit-\">\n\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text m--font-light\">\n\t\t\t\t\t\t\t\tTotal Sale\n\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<div class=\"m-portlet__head-tools\">\n\t\t\t\t\t\t<ul class=\"m-portlet__nav\">\n\t\t\t\t\t\t\t<li class=\"m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push\" m-dropdown-toggle=\"hover\">\n\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t</ul>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\t<div class=\"m-widget27 m-portlet-fit--sides\">\n\t\t\t\t\t\t<div class=\"m-widget27__pic\">\n\t\t\t\t\t\t\t<img src=\"./assets/app/media/img//bg/bg-4.jpg\" alt=\"\">\n\t\t\t\t\t\t\t<h3 class=\"m-widget27__title m--font-light\">\n\t\t\t\t\t\t\t\t<span *ngIf=\"dashboardData.total_sales\">\n\t\t\t\t\t\t\t\t\t<span>\n\t\t\t\t\t\t\t\t\t\t$\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t{{dashboardData.total_sales}}\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t<span *ngIf=\"!dashboardData.total_sales\">\n\t\t\t\t\t\t\t\t\t<span>\n\t\t\t\t\t\t\t\t\t\t$\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t0\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t\t<div class=\"m-widget27__btn\">\n\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--bolder\">\n\t\t\t\t\t\t\t\t\tToday's Total Sale $ \n\t\t\t\t\t\t\t\t\t<span *ngIf=\"dashboardData.today_total_sales\">{{dashboardData.today_total_sales}}</span>\n\t\t\t\t\t\t\t\t\t<span *ngIf=\"!dashboardData.today_total_sales\">0</span>\n\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-widget27__container\">\n\t\t\t\t\t\t\t<!-- begin::Nav pills -->\n\t\t\t\t\t\t\t<ul class=\"m-widget27__nav-items nav nav-pills nav-fill\" role=\"tablist\">\n\t\t\t\t\t\t\t\t<li class=\"m-widget27__nav-item nav-item\">\n\t\t\t\t\t\t\t\t\t<a class=\"nav-link active\" data-toggle=\"pill\" href=\"#m_personal_income_quater_1\">\n\t\t\t\t\t\t\t\t\t\tQuater 1\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t<li class=\"m-widget27__nav-item nav-item\">\n\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"pill\" href=\"#m_personal_income_quater_2\">\n\t\t\t\t\t\t\t\t\t\tQuater 2\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t<li class=\"m-widget27__nav-item nav-item\">\n\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"pill\" href=\"#m_personal_income_quater_3\">\n\t\t\t\t\t\t\t\t\t\tQuater 3\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t<li class=\"m-widget27__nav-item nav-item\">\n\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" data-toggle=\"pill\" href=\"#m_personal_income_quater_4\">\n\t\t\t\t\t\t\t\t\t\tQuater 4\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t<!-- end::Nav pills --> \t  \t   \t\t\t  \t<!-- begin::Tab Content -->\n\t\t\t\t\t\t\t<div class=\"m-widget27__tab tab-content m-widget27--no-padding\">\n\t\t\t\t\t\t\t\t<div id=\"m_personal_income_quater_1\" class=\"tab-pane active\">\n\t\t\t\t\t\t\t\t\t<div class=\"row  align-items-center\">\n\t\t\t\t\t\t\t\t\t\t<h4 >\n\t\t\t\t\t\t\t\t<span>\n\t\t\t\t\t\t\t\t\t<span>\n\t\t\t\t\t\t\t\t\t\t$\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t{{dashboardData.quater_sale1}}\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</h4>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div id=\"m_personal_income_quater_2\" class=\"tab-pane fade\">\n\t\t\t\t\t\t\t\t\t<div class=\"row  align-items-center\">\n\t\t\t\t\t\t\t\t\t\t<h4 >\n\t\t\t\t\t\t\t\t<span>\n\t\t\t\t\t\t\t\t\t<span>\n\t\t\t\t\t\t\t\t\t\t$\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t{{dashboardData.quater_sale2}}\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</h4>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div id=\"m_personal_income_quater_3\" class=\"tab-pane fade\">\n\t\t\t\t\t\t\t\t\t<div class=\"row  align-items-center\">\n\t\t\t\t\t\t\t\t\t\t<h4 >\n\t\t\t\t\t\t\t\t<span>\n\t\t\t\t\t\t\t\t\t<span>\n\t\t\t\t\t\t\t\t\t\t$\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t{{dashboardData.quater_sale3}}\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</h4>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div id=\"m_personal_income_quater_4\" class=\"tab-pane fade\">\n\t\t\t\t\t\t\t\t\t<div class=\"row  align-items-center\">\n\t\t\t\t\t\t\t\t\t\t<h4 >\n\t\t\t\t\t\t\t\t<span>\n\t\t\t\t\t\t\t\t\t<span>\n\t\t\t\t\t\t\t\t\t\t$\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t{{dashboardData.quater_sale4}}\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</h4>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<!-- end::Tab Content -->\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t\t<!--end:: Widgets/Blog-->\n\t\t</div>\n\t\t<div class=\"col-xl-4\">\n\t\t\t<!--begin:: Widgets/Activity-->\n\t\t\t<div class=\"m-portlet m-portlet--bordered-semi m-portlet--widget-fit m-portlet--full-height m-portlet--skin-light  m-portlet--rounded-force\">\n\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text m--font-light\">\n\t\t\t\t\t\t\t\tOrders\n\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<div class=\"m-portlet__head-tools\">\n\t\t\t\t\t\t<ul class=\"m-portlet__nav\">\n\t\t\t\t\t\t\t<li class=\"m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push\" m-dropdown-toggle=\"hover\">\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t</ul>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\t<div class=\"m-widget17\">\n\t\t\t\t\t\t<div class=\"m-widget17__visual m-widget17__visual--chart m-portlet-fit--top m-portlet-fit--sides m--bg-danger\">\n\t\t\t\t\t\t\t<div class=\"m-widget17__chart\" style=\"height:320px;\">\n\t\t\t\t\t\t\t\t<canvas id=\"m_chart_activities\"></canvas>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-widget17__stats\">\n\t\t\t\t\t\t\t<div class=\"m-widget17__items m-widget17__items-col1\">\n\t\t\t\t\t\t\t\t<div class=\"m-widget17__item\">\n\t\t\t\t\t\t\t\t\t<span class=\"m-widget17__icon\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-truck m--font-brand\"></i>\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t<span class=\"m-widget17__subtitle\">\n\t\t\t\t\t\t\t\t\t\tDelivered\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t<span class=\"m-widget17__desc\">\n\t\t\t\t\t\t\t\t\t\t{{dashboardData.total_delivered_order}} Delivered Orders\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"m-widget17__item\">\n\t\t\t\t\t\t\t\t\t<span class=\"m-widget17__icon\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-paper-plane m--font-info\"></i>\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t<span class=\"m-widget17__subtitle\">\n\t\t\t\t\t\t\t\t\t\tToday's Order\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t<span class=\"m-widget17__desc\">\n\t\t\t\t\t\t\t\t\t\t{{dashboardData.today_total_order}} Order\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"m-widget17__items m-widget17__items-col2\">\n\t\t\t\t\t\t\t\t<div class=\"m-widget17__item\">\n\t\t\t\t\t\t\t\t\t<span class=\"m-widget17__icon\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-pie-chart m--font-success\"></i>\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t<span class=\"m-widget17__subtitle\">\n\t\t\t\t\t\t\t\t\t\tOrdered\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t<span class=\"m-widget17__desc\">\n\t\t\t\t\t\t\t\t\t\t{{dashboardData.total_orders}} total orders\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"m-widget17__item\">\n\t\t\t\t\t\t\t\t\t<span class=\"m-widget17__icon\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-time m--font-danger\"></i>\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t<span class=\"m-widget17__subtitle\">\n\t\t\t\t\t\t\t\t\t\tPending\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t<span class=\"m-widget17__desc\">\n\t\t\t\t\t\t\t\t\t\t{{dashboardData.total_pending_order}} pending shipping status\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t\t<!--end:: Widgets/Activity-->\n\t\t</div>\n\t\t<div class=\"col-xl-4\">\n\t\t\t<!--begin:: Widgets/Top Products-->\n\t\t\t<div class=\"m-portlet m-portlet--bordered-semi m-portlet--full-height\">\n\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">\n\t\t\t\t\t\t\t\tProducts\n\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<div class=\"m-portlet__head-tools\">\n\t\t\t\t\t\t<ul class=\"m-portlet__nav\">\n\t\t\t\t\t\t\t<li class=\"m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push\" m-dropdown-toggle=\"hover\" aria-expanded=\"true\">\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t</ul>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\t<!--begin::Widget5-->\n\t\t\t\t\t<div class=\"m-widget4\">\n\t\t\t\t\t\t<div class=\"m-widget4__chart m-portlet-fit--sides m--margin-top-10 m--margin-top-20\" style=\"height:260px;\">\n\t\t\t\t\t\t\t<canvas id=\"m_chart_trends_stats\"></canvas>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-widget4__item\">\n\t\t\t\t\t\t\t<div class=\"m-widget4__img m-widget4__img--logo\">\n\t\t\t\t\t\t\t\t<!-- <img src=\"./assets/app/media/img/client-logos/logo3.png\" alt=\"\"> -->\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"m-widget4__info\">\n\t\t\t\t\t\t\t\t<span class=\"m-widget4__title\">\n\t\t\t\t\t\t\t\t\tTotal Products\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t<br>\n\t\t\t\t\t\t\t\t<span class=\"m-widget4__sub\">\n\t\t\t\t\t\t\t\t\tYour total products\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<span class=\"m-widget4__ext\">\n\t\t\t\t\t\t\t\t<span class=\"m-widget4__number m--font-danger\">\n\t\t\t\t\t\t\t\t\t{{dashboardData.total_products}}\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-widget4__item\">\n\t\t\t\t\t\t\t<div class=\"m-widget4__img m-widget4__img--logo\">\n\t\t\t\t\t\t\t\t<!-- <img src=\"./assets/app/media/img/client-logos/logo1.png\" alt=\"\"> -->\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"m-widget4__info\">\n\t\t\t\t\t\t\t\t<span class=\"m-widget4__title\">\n\t\t\t\t\t\t\t\t\tTotal In Stock Products\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t<br>\n\t\t\t\t\t\t\t\t<span class=\"m-widget4__sub\">\n\t\t\t\t\t\t\t\t\tcurrently in stock products\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<span class=\"m-widget4__ext\">\n\t\t\t\t\t\t\t\t<span class=\"m-widget4__number m--font-danger\">\n\t\t\t\t\t\t\t\t\t{{dashboardData.total_instock_product}}\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-widget4__item\">\n\t\t\t\t\t\t\t<div class=\"m-widget4__img m-widget4__img--logo\">\n\t\t\t\t\t\t\t\t<!-- <img src=\"./assets/app/media/img/client-logos/logo2.png\" alt=\"\"> -->\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"m-widget4__info\">\n\t\t\t\t\t\t\t\t<span class=\"m-widget4__title\">\n\t\t\t\t\t\t\t\t\tTotal Out Of Stock Products\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t<br>\n\t\t\t\t\t\t\t\t<span class=\"m-widget4__sub\">\n\t\t\t\t\t\t\t\t\tall out of stock products\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<span class=\"m-widget4__ext\">\n\t\t\t\t\t\t\t\t<span class=\"m-widget4__number m--font-danger\">\n\t\t\t\t\t\t\t\t\t{{dashboardData.total_outstock_product}}\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<!--end::Widget 5-->\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t\t<!--end:: Widgets/Top Products-->\n\t\t</div>\n\t</div>\n</div>\n"

/***/ }),

/***/ "./src/app/theme/pages/default/index/index.component.ts":
/*!**************************************************************!*\
  !*** ./src/app/theme/pages/default/index/index.component.ts ***!
  \**************************************************************/
/*! exports provided: IndexComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "IndexComponent", function() { return IndexComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");
/* harmony import */ var _services_data_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../_services/data.service */ "./src/app/_services/data.service.ts");
/* harmony import */ var _auth_services_menu_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../auth/_services/menu.service */ "./src/app/auth/_services/menu.service.ts");
/* harmony import */ var _auth_services_product_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../../../auth/_services/product.service */ "./src/app/auth/_services/product.service.ts");
/* harmony import */ var _auth_services_category_service__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../../../auth/_services/category.service */ "./src/app/auth/_services/category.service.ts");
/* harmony import */ var _auth_services_subCategory_service__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../../../auth/_services/subCategory.service */ "./src/app/auth/_services/subCategory.service.ts");
/* harmony import */ var _auth_services_brand_service__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../../../../auth/_services/brand.service */ "./src/app/auth/_services/brand.service.ts");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};








var IndexComponent = /** @class */ (function () {
    function IndexComponent(_brandService, _menuService, _categoryService, _productService, _subCategory, _dataService, _script) {
        this._brandService = _brandService;
        this._menuService = _menuService;
        this._categoryService = _categoryService;
        this._productService = _productService;
        this._subCategory = _subCategory;
        this._dataService = _dataService;
        this._script = _script;
        this.menu = [];
        this.dashboardData = {};
    }
    IndexComponent.prototype.ngOnInit = function () {
        var _this = this;
        var user_id;
        var user_role;
        this.currentUser = JSON.parse(localStorage.getItem('currentUser'));
        user_id = this.currentUser.success.id;
        user_role = this.currentUser.success.role;
        this._menuService.searching({ dropdown_value: 'Active', search_value: "" }).subscribe(function (data) {
            var menu1;
            var menuData;
            menuData = data.success;
            menuData.forEach(function (element) {
                menu1 = {
                    item_id: element.id,
                    item_text: element.menu_name
                };
                _this.menu.push(menu1);
            });
            localStorage.setItem('menu', JSON.stringify(_this.menu));
        });
        console.log('reached');
        this._menuService.dashboardService({ user_role: user_role, user_id: user_id })
            .subscribe(function (data) {
            _this.dashboardData.total_users = data.total_users[0].total_users;
            _this.dashboardData.active_users = data.active_users[0].active_users;
            _this.dashboardData.inactive_users = data.total_users[0].total_users - data.active_users[0].active_users;
            _this.dashboardData.total_orders = data.total_orders[0].total_orders;
            _this.dashboardData.total_sales = data.total_sales[0].total_amt;
            _this.dashboardData.today_total_order = data.today_total_order[0].total_orders;
            _this.dashboardData.today_total_sales = data.today_total_sales[0].total_amt;
            _this.dashboardData.total_delivered_order = data.total_delivered_order[0].total_orders;
            _this.dashboardData.total_products = data.total_products[0].total_products;
            _this.dashboardData.total_instock_product = data.total_instock_product[0].total_products;
            _this.dashboardData.total_outstock_product = data.total_outstock_product[0].total_products;
            _this.dashboardData.total_pending_order = data.total_pending_order[0].total_orders;
            _this.dashboardData.quater_sale1 = data.quater_sale[0].Q1;
            _this.dashboardData.quater_sale2 = data.quater_sale[0].Q2;
            _this.dashboardData.quater_sale3 = data.quater_sale[0].Q3;
            _this.dashboardData.quater_sale4 = data.quater_sale[0].Q4;
            console.log(_this.dashboardData);
        });
    };
    IndexComponent.prototype.ngAfterViewInit = function () {
        this._script.loadScripts('app-index', ['assets/app/js/dashboard.js']);
    };
    IndexComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: "app-index",
            template: __webpack_require__(/*! ./index.component.html */ "./src/app/theme/pages/default/index/index.component.html"),
            encapsulation: _angular_core__WEBPACK_IMPORTED_MODULE_0__["ViewEncapsulation"].None,
        }),
        __metadata("design:paramtypes", [_auth_services_brand_service__WEBPACK_IMPORTED_MODULE_7__["BrandService"], _auth_services_menu_service__WEBPACK_IMPORTED_MODULE_3__["MenuService"], _auth_services_category_service__WEBPACK_IMPORTED_MODULE_5__["CategoryService"], _auth_services_product_service__WEBPACK_IMPORTED_MODULE_4__["ProductService"], _auth_services_subCategory_service__WEBPACK_IMPORTED_MODULE_6__["SubCategoryService"], _services_data_service__WEBPACK_IMPORTED_MODULE_2__["DataService"], _services_script_loader_service__WEBPACK_IMPORTED_MODULE_1__["ScriptLoaderService"]])
    ], IndexComponent);
    return IndexComponent;
}());



/***/ }),

/***/ "./src/app/theme/pages/default/index/index.module.ts":
/*!***********************************************************!*\
  !*** ./src/app/theme/pages/default/index/index.module.ts ***!
  \***********************************************************/
/*! exports provided: IndexModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "IndexModule", function() { return IndexModule; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/esm5/common.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/esm5/router.js");
/* harmony import */ var _index_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./index.component */ "./src/app/theme/pages/default/index/index.component.ts");
/* harmony import */ var _layouts_layout_module__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../../layouts/layout.module */ "./src/app/theme/layouts/layout.module.ts");
/* harmony import */ var _default_component__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../default.component */ "./src/app/theme/pages/default/default.component.ts");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};






var routes = [
    {
        "path": "",
        "component": _default_component__WEBPACK_IMPORTED_MODULE_5__["DefaultComponent"],
        "children": [
            {
                "path": "",
                "component": _index_component__WEBPACK_IMPORTED_MODULE_3__["IndexComponent"]
            }
        ]
    }
];
var IndexModule = /** @class */ (function () {
    function IndexModule() {
    }
    IndexModule = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_1__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"].forChild(routes), _layouts_layout_module__WEBPACK_IMPORTED_MODULE_4__["LayoutModule"]
            ], exports: [
                _angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"]
            ], declarations: [
                _index_component__WEBPACK_IMPORTED_MODULE_3__["IndexComponent"]
            ]
        })
    ], IndexModule);
    return IndexModule;
}());



/***/ })

}]);
//# sourceMappingURL=pages-default-index-index-module.js.map