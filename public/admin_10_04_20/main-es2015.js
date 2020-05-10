(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["main"],{

/***/ "./node_modules/raw-loader/index.js!./src/app/app.component.html":
/*!**************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/app.component.html ***!
  \**************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<!-- begin::Page loader -->\n<div class=\"m-page-loader m-page-loader--base m-page-loader--non-block\" style=\"margin-left: -80px; margin-top: -20px;\">\n\t<div class=\"m-blockui\">\n\t\t<span>\n\t\t\tPlease wait...\n\t\t</span>\n\t\t<span>\n\t\t\t<div class=\"m-loader m-loader--brand\"></div>\n\t\t</span>\n\t</div>\n</div>\n\n<!-- end::Page loader -->   \n                   \t<!-- begin:: Page -->\n<router-outlet></router-outlet>\n<!-- end:: Page -->\n<app-quick-sidebar></app-quick-sidebar>\n<app-scroll-top></app-scroll-top>\n<app-tooltips></app-tooltips>\n<!--begin::Base Scripts -->             \t    \t \t\t    \t \t\t\t\t<!--end::Base Scripts -->                       <!--begin::Page Vendors -->                                   <!--end::Page Vendors -->                                                              <!--begin::Page Snippets -->                                   <!--end::Page Snippets -->\n"

/***/ }),

/***/ "./node_modules/raw-loader/index.js!./src/app/auth/_directives/alert.component.html":
/*!*********************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/auth/_directives/alert.component.html ***!
  \*********************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div *ngIf=\"message\" class=\"m-alert m-alert--outline alert alert-{{message.type}} alert-dismissible\" role=\"alert\">\r\n\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"></button>\r\n\t<span>{{message.text}}</span>\r\n</div>"

/***/ }),

/***/ "./node_modules/raw-loader/index.js!./src/app/auth/logout/logout.component.html":
/*!*****************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/auth/logout/logout.component.html ***!
  \*****************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ "./node_modules/raw-loader/index.js!./src/app/auth/templates/login-1.component.html":
/*!*********************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/auth/templates/login-1.component.html ***!
  \*********************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div class=\"m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin\" id=\"m_login\">\n\t<div class=\"m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside\">\n\t\t<div class=\"m-stack m-stack--hor m-stack--desktop\">\n\t\t\t<div class=\"m-stack__item m-stack__item--fluid\">\n\t\t\t\t<div class=\"m-login__wrapper\">\n\t\t\t\t\t<!-- <div class=\"m-login__logo\">\n\t\t\t\t\t\t<a href=\"#\">\n\t\t\t\t\t\t\t<img src=\"./assets/app/media/img//logos/logo-2.png\">\n\t\t\t\t\t\t</a>\n\t\t\t\t\t</div> -->\n\t\t\t\t\t\n\t\t\t\t\t<div class=\"m-login__signin\">\n\t\t\t\t\t\t<div class=\"m-login__head\">\n\t\t\t\t\t\t\t<h3 class=\"m-login__title\" style=\"color: #7d7d7d\">Moretolike.com - Your online shopping experience</h3>\n\t\t\t\t\t\t\t<!-- <div class=\"m--margin-top-40 m-alert m-alert--outline m-alert--outline-2x alert alert-success fade show\" role=\"alert\">\n\t\t\t\t\t\t\t\tUse username\n\t\t\t\t\t\t\t\t<span style=\"font-weight: 500;\">\n\t\t\t\t\t\t\t\t\tdemo@demo.com\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\tand password\n\t\t\t\t\t\t\t\t<span style=\"font-weight: 500;\">\n\t\t\t\t\t\t\t\t\tdemo\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\tto continue or singup.\n\t\t\t\t\t\t\t</div> -->\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<form (ngSubmit)=\"f.form.valid && signin()\" #f=\"ngForm\" class=\"m-login__form m-form\" action=\"\">\n\t\t\t\t\t\t\t<ng-template #alertSignin></ng-template>\n\t\t\t\t\t\t\t<div class=\"form-group m-form__group\">\n\t\t\t\t\t\t\t\t<input class=\"form-control m-input\" type=\"text\" placeholder=\"Email\" name=\"email\" [(ngModel)]=\"model.email\" #email=\"ngModel\" autocomplete=\"off\">\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"form-group m-form__group\">\n\t\t\t\t\t\t\t\t<input class=\"form-control m-input m-login__form-input--last\" type=\"password\" placeholder=\"Password\" name=\"password\" [(ngModel)]=\"model.password\" #password=\"ngModel\">\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"row m-login__form-sub\">\n\t\t\t\t\t\t\t\t<!-- <div class=\"col m--align-left\">\n\t\t\t\t\t\t\t\t\t<label class=\"m-checkbox m-checkbox--focus\">\n\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"remember\" [(ngModel)]=\"model.remember\" #remember=\"ngModel\">\n\t\t\t\t\t\t\t\t\t\tRemember me\n\t\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t</div> -->\n\t\t\t\t\t\t\t\t<div class=\"col m--align-right\">\n\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" id=\"m_login_forget_password\" class=\"m-link\">\n\t\t\t\t\t\t\t\t\t\tForget Password ?\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"m-login__form-action\">\n\t\t\t\t\t\t\t\t<button [disabled]=\"loading\" [ngClass]=\"{'m-loader m-loader--right m-loader--light': loading}\" id=\"m_login_signin_submit\" class=\"btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air\">\n\t\t\t\t\t\t\t\t\tSign In\n\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</form>\n\t\t\t\t\t</div>\n\t\t\t\t\t<div class=\"m-login__signup\">\n\t\t\t\t\t\t<div class=\"m-login__head\">\n\t\t\t\t\t\t\t<h3 class=\"m-login__title\">\n\t\t\t\t\t\t\t\tSign Up\n\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t\t<div class=\"m-login__desc\">\n\t\t\t\t\t\t\t\tEnter your details to create your account:\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<form (ngSubmit)=\"f.form.valid && signup()\" #f=\"ngForm\" class=\"m-login__form m-form\" action=\"\">\n\t\t\t\t\t\t\t<ng-template #alertSignup></ng-template>\n\t\t\t\t\t\t\t<div class=\"form-group m-form__group\">\n\t\t\t\t\t\t\t\t<input class=\"form-control m-input\" type=\"text\" placeholder=\"Fullname\" name=\"fullname\" [(ngModel)]=\"model.fullname\" #fullname=\"ngModel\">\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"form-group m-form__group\">\n\t\t\t\t\t\t\t\t<input class=\"form-control m-input\" type=\"text\" placeholder=\"Email\" name=\"email\" [(ngModel)]=\"model.email\" #email=\"ngModel\" autocomplete=\"off\">\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"form-group m-form__group\">\n\t\t\t\t\t\t\t\t<input class=\"form-control m-input\" type=\"password\" placeholder=\"Password\" name=\"password\" [(ngModel)]=\"model.password\" #password=\"ngModel\">\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"form-group m-form__group\">\n\t\t\t\t\t\t\t\t<input class=\"form-control m-input m-login__form-input--last\" type=\"password\" placeholder=\"Confirm Password\" name=\"rpassword\" [(ngModel)]=\"model.rpassword\" #rpassword=\"ngModel\">\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"row form-group m-form__group m-login__form-sub\">\n\t\t\t\t\t\t\t\t<div class=\"col m--align-left\">\n\t\t\t\t\t\t\t\t\t<label class=\"m-checkbox m-checkbox--focus\">\n\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" [(ngModel)]=\"model.agree\" #agree=\"ngModel\">\n\t\t\t\t\t\t\t\t\t\tI Agree the\n\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-link m-link--focus\">\n\t\t\t\t\t\t\t\t\t\t\tterms and conditions\n\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t.\n\t\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t<span class=\"m-form__help\"></span>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"m-login__form-action\">\n\t\t\t\t\t\t\t\t<button [disabled]=\"loading\" [ngClass]=\"{'m-loader m-loader--right m-loader--light': loading}\" id=\"m_login_signup_submit\" class=\"btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air\">\n\t\t\t\t\t\t\t\t\tSign Up\n\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t\t<button [disabled]=\"loading\"  id=\"m_login_signup_cancel\" class=\"btn btn-outline-focus  m-btn m-btn--pill m-btn--custom\">\n\t\t\t\t\t\t\t\t\tCancel\n\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</form>\n\t\t\t\t\t</div>\n\t\t\t\t\t<div class=\"m-login__forget-password\">\n\t\t\t\t\t\t<div class=\"m-login__head\">\n\t\t\t\t\t\t\t<h3 class=\"m-login__title\">\n\t\t\t\t\t\t\t\tForgotten Password ?\n\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t\t<div class=\"m-login__desc\">\n\t\t\t\t\t\t\t\tEnter your email to reset your password:\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<form (ngSubmit)=\"f.form.valid && forgotPass()\" #f=\"ngForm\" class=\"m-login__form m-form\" action=\"\">\n\t\t\t\t\t\t\t<ng-template #alertForgotPass></ng-template>\n\t\t\t\t\t\t\t<div class=\"form-group m-form__group\">\n\t\t\t\t\t\t\t\t<input class=\"form-control m-input\" type=\"text\" placeholder=\"Email\" name=\"email\" [(ngModel)]=\"model.email\" #email=\"ngModel\" id=\"m_email\" autocomplete=\"off\">\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"m-login__form-action\">\n\t\t\t\t\t\t\t\t<button [disabled]=\"loading\" [ngClass]=\"{'m-loader m-loader--right m-loader--light': loading}\" id=\"m_login_forget_password_submit\" class=\"btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air\">\n\t\t\t\t\t\t\t\t\tRequest\n\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t\t<button [disabled]=\"loading\"  id=\"m_login_forget_password_cancel\" class=\"btn btn-outline-focus m-btn m-btn--pill m-btn--custom\">\n\t\t\t\t\t\t\t\t\tCancel\n\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</form>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t\t<div class=\"m-stack__item m-stack__item--center\">\n\t\t\t\t<div class=\"m-login__account\">\n\t\t\t\t\t<span class=\"m-login__account-msg\">\n\t\t\t\t\t\tDon't have an account yet ?\n\t\t\t\t\t</span>\n\t\t\t\t\t&nbsp;&nbsp;\n\t\t\t\t\t<a href=\"javascript:;\" id=\"m_login_signup\" class=\"m-link m-link--focus m-login__account-link\">\n\t\t\t\t\t\tSign Up\n\t\t\t\t\t</a>\n\t\t\t\t</div>\n\t\t\t</div> \n\t\t</div>\n\t</div>\n\t<div class=\"m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1\tm-login__content\" style=\"background-image: url(./assets/app/media/img//bg/bg-4.jpg)\">\n\t\t<!-- <div class=\"m-grid__item m-grid__item--middle\">\n\t\t\t<h3 class=\"m-login__welcome\">\n\t\t\t\tJoin Our Community\n\t\t\t</h3>\n\t\t\t<p class=\"m-login__msg\">\n\t\t\t\tLorem ipsum dolor sit amet, coectetuer adipiscing\n\t\t\t\t<br>\n\t\t\t\telit sed diam nonummy et nibh euismod\n\t\t\t</p>\n\t\t</div> -->\n\t</div>\n</div>\n"

/***/ }),

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/layouts/aside-nav/aside-nav.component.html":
/*!********************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/layouts/aside-nav/aside-nav.component.html ***!
  \********************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<!-- BEGIN: Left Aside -->\n<button class=\"m-aside-left-close  m-aside-left-close--skin-dark\" id=\"m_aside_left_close_btn\" appunwraptag=\"\">\n\t<i class=\"la la-close\"></i>\n</button>\n<div id=\"m_aside_left\" class=\"m-grid__item\tm-aside-left  m-aside-left--skin-dark\">\n\n\t<!-- BEGIN: Aside Menu -->\n\n\t<div  id=\"m_ver_menu\" class=\"m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark\" m-menu-vertical=\"1\" m-menu-scrollable=\"0\" m-menu-dropdown-timeout=\"500\">\n\t\t<ul class=\"m-menu__nav  m-menu__nav--dropdown-submenu-arrow\">\n\t\t\t<li class=\"m-menu__item  \" routerLinkActive=\"m-menu__item--active\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t<a  routerLink=\"/index\" class=\"m-menu__link\">\n\t\t\t\t\t<i class=\"m-menu__link-icon fa fa-dashboard\"></i>\n\t\t\t\t\t<span class=\"m-menu__link-title\">\n\t\t\t\t\t\t<span class=\"m-menu__link-wrap\">\n\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\tDashboard\n\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t</span>\n\t\t\t\t\t</span>\n\t\t\t\t</a>\n\t\t\t</li>\n\n\t\t\t<li *ngIf= \"permission.website_setting == 1\" class=\"m-menu__item  \" routerLinkActive=\"m-menu__item--active\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t<a  routerLink=\"/drag-drop\" class=\"m-menu__link\">\n\t\t\t\t\t<i class=\"m-menu__link-icon fa fa-sign-out\"></i>\n\t\t\t\t\t<span class=\"m-menu__link-title\">\n\t\t\t\t\t\t<span class=\"m-menu__link-wrap\">\n\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\tDrag/Drop Dashboard\n\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t</span>\n\t\t\t\t\t</span>\n\t\t\t\t</a>\n\t\t\t</li>\n\n\t\t\t<!-- product -->\n\t\t\t<li *ngIf= \"(role == 1 || role == 2) && permission.product_list == 1\"  class=\"m-menu__item  m-menu__item--submenu\" routerLinkActive=\"m-menu__item--open\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\"  m-menu-submenu-toggle=\"hover\">\n\t\t\t\t<a  href=\"javascript:;\" class=\"m-menu__link m-menu__toggle\">\n\t\t\t\t\t<i class=\"m-menu__link-icon fa fa-product-hunt\"></i>\n\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\tProducts\n\t\t\t\t\t</span>\n\t\t\t\t\t<i class=\"m-menu__ver-arrow la la-angle-right\"></i>\n\t\t\t\t</a>\n\n\n\n\t\t\t\t<div class=\"m-menu__submenu\">\n\t\t\t\t\t<span class=\"m-menu__arrow\"></span>\n\t\t\t\t\t<ul class=\"m-menu__subnav\">\n\t\t\t\t\t\t<li *ngIf= \"permission.product_add == 1\" class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t<a  routerLink=\"/product/add-product\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\tAdd New Product \n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\n\t\t\t\t\t\t<li *ngIf= \"permission.product_list == 1\" class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t<a  routerLink=\"/product\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\tProduct List\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\n\t\t\t\t\t\t\n\n\n\t\t\t\t\t\t<!--<li *ngIf= \"permission.product_menu == 1\" class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t\t\t<a  routerLink=\"/category/menu-list\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\t\t\t Menu\n\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</li>-->\n\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<li *ngIf= \"permission.product_category == 1\" class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t\t\t<a  routerLink=\"/category/category-list\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\t\t\t Category\n\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</li>\n\n\t\t\t\t\t\t\t\t<!--<li *ngIf= \"permission.product_subcategory == 1\" class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t\t\t<a  routerLink=\"/category/sub-category-list\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\t\t\t Sub-Category\n\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t</li>-->\n\n\n\t\t\t\t\t\t\t<!--<li *ngIf= \"permission.product_brand == 1\" class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t\t<a  routerLink=\"/brand/brand-list\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\t\t Brand\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t</li>-->\n\t\t\t\t\t\t\t<li *ngIf= \"permission.product_brand == 1\" class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t\t<a  routerLink=\"/attributes\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\t\tAttribute\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t</li>\n\n\t\t\t\t\t\t\t<li *ngIf= \"permission.product_bulkupload == 1\" class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t\t<a  routerLink=\"/product/bulk-upload\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\t\t Bulk upload\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t</li>\n\n\t\t\t\t\t\t\t\n\t\t\t\t\t</ul>\n\t\t\t\t</div>\n\t\t\t</li>\n\t\t\t<!-- /product -->\n\n\t\t\t<!-- Orders -->\n\t\t\t<li *ngIf= \"(role == 1 || role == 2) && permission.order_list == 1\"  class=\"m-menu__item  m-menu__item--submenu\" routerLinkActive=\"m-menu__item--open\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\"  m-menu-submenu-toggle=\"hover\">\n\t\t\t\t<a  href=\"javascript:;\" class=\"m-menu__link m-menu__toggle\">\n\t\t\t\t\t<i class=\"m-menu__link-icon fa fa-television\"></i>\n\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\tOrders\n\t\t\t\t\t</span>\n\t\t\t\t\t<i class=\"m-menu__ver-arrow la la-angle-right\"></i>\n\t\t\t\t</a>\n\n\t\t\t\t<div class=\"m-menu__submenu\">\n\t\t\t\t\t<span class=\"m-menu__arrow\"></span>\n\t\t\t\t\t<ul class=\"m-menu__subnav\">\n\n\t\t\t\t\t\t\n\n\t\t\t\t\t\t<li *ngIf= \"permission.order_list == 1\" class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t<a  routerLink=\"/order/order-list\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\tOrders List\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\t\t\t\t\t</ul>\n\t\t\t\t</div>\n\t\t\t</li>\n\t\t\t<!-- /Orders -->\n\t\t\t<!-- reviews -->\n\t\t\t<li *ngIf= \"(role == 1 || role == 2) && permission.reviews_list == 1\"  class=\"m-menu__item  m-menu__item--submenu\" routerLinkActive=\"m-menu__item--open\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\"  m-menu-submenu-toggle=\"hover\">\n\t\t\t\t<a  href=\"javascript:;\" class=\"m-menu__link m-menu__toggle\">\n\t\t\t\t\t<i class=\"m-menu__link-icon fa fa-comments-o\"></i>\n\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\tReviews\n\t\t\t\t\t</span>\n\t\t\t\t\t<i class=\"m-menu__ver-arrow la la-angle-right\"></i>\n\t\t\t\t</a>\n\n\t\t\t\t<div class=\"m-menu__submenu\">\n\t\t\t\t\t<span class=\"m-menu__arrow\"></span>\n\t\t\t\t\t<ul class=\"m-menu__subnav\">\n\n\t\t\t\t\t\t\n\n\t\t\t\t\t\t<li *ngIf= \"permission.reviews_list == 1\" class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t<a  routerLink=\"/reviews/reviews-list\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\tReviews List\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\t\t\t\t\t</ul>\n\t\t\t\t</div>\n\t\t\t</li>\n\t\t\t<!-- ./reviews -->\n\t\t\t<!-- report -->\n\t\t\t<li *ngIf= \"(role == 1 || role == 2) && permission.report_overview == 1\"  class=\"m-menu__item  m-menu__item--submenu\" routerLinkActive=\"m-menu__item--open\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\"  m-menu-submenu-toggle=\"hover\">\n\t\t\t\t<a  href=\"javascript:;\" class=\"m-menu__link m-menu__toggle\">\n\t\t\t\t\t<i class=\"m-menu__link-icon fa fa-file\"></i>\n\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\tReports\n\t\t\t\t\t</span>\n\t\t\t\t\t<i class=\"m-menu__ver-arrow la la-angle-right\"></i>\n\t\t\t\t</a>\n\n\t\t\t\t<div class=\"m-menu__submenu\">\n\t\t\t\t\t<span class=\"m-menu__arrow\"></span>\n\t\t\t\t\t<ul class=\"m-menu__subnav\">\n\n\t\t\t\t\t\t<li *ngIf= \"permission.report_overview == 1\" class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t<a  routerLink=\"/reports/overview\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\tOverview\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\t\t\t\t\t\t<li *ngIf= \"permission.report_inventory == 1\" class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t<a  routerLink=\"/reports/inventory\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\tInventory\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\t\t\t\t\t\t<li *ngIf= \"permission.report_salesByDay == 1\" class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t<a  routerLink=\"/reports/sales-by-day\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\tSales By Day\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\t\t\t\t\t\t<li *ngIf= \"permission.report_topSelling == 1\" class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t<a  routerLink=\"/reports/top-selling\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\tTop Selling\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\t\t\t\t\t\t<li *ngIf= \"permission.report_topEarning == 1\" class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t<a  routerLink=\"/reports/top-earning\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\tTop Earning\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\t\t\t\t\t\t<li *ngIf= \"permission.report_statement == 1\" class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t<a  routerLink=\"/reports/statement\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\tStatement\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\t\t\t\t\t</ul>\n\t\t\t\t</div>\n\t\t\t</li>\n\t\t\t<!-- /report -->\n\t\t\t<!-- withdraw -->\n\t\t\t<li *ngIf= \"(role == 1 || role == 2) && permission.withdraw_list == 1\"  class=\"m-menu__item  m-menu__item--submenu\" routerLinkActive=\"m-menu__item--open\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\"  m-menu-submenu-toggle=\"hover\">\n\t\t\t\t<a  href=\"javascript:;\" class=\"m-menu__link m-menu__toggle\">\n\t\t\t\t\t<i class=\"m-menu__link-icon fa fa-upload\"></i>\n\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\tWithdraw\n\t\t\t\t\t</span>\n\t\t\t\t\t<i class=\"m-menu__ver-arrow la la-angle-right\"></i>\n\t\t\t\t</a>\n\n\t\t\t\t<div class=\"m-menu__submenu\">\n\t\t\t\t\t<span class=\"m-menu__arrow\"></span>\n\t\t\t\t\t<ul class=\"m-menu__subnav\">\n\n\t\t\t\t\t\t<li *ngIf= \"permission.withdraw_list == 1\" class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t<a  routerLink=\"/withdraw/withdraw-list\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\tList\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\t\t\t\t\t\t<li *ngIf= \"permission.withdraw_add == 1\" class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t<a  routerLink=\"/withdraw/withdraw-add\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\tAdd\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\t\t\t\t\t</ul>\n\t\t\t\t</div>\n\t\t\t</li>\n\t\t\t<!-- ./withdraw -->\n\t\t\t<!-- subscription -->\n\t\t\t<li *ngIf= \"role == 1 && permission.subscription_list == 1\"  class=\"m-menu__item  m-menu__item--submenu\" routerLinkActive=\"m-menu__item--open\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\"  m-menu-submenu-toggle=\"hover\">\n\t\t\t\t<a  href=\"javascript:;\" class=\"m-menu__link m-menu__toggle\">\n\t\t\t\t\t<i class=\"m-menu__link-icon fa fa-book\"></i>\n\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\tSubscription\n\t\t\t\t\t</span>\n\t\t\t\t\t<i class=\"m-menu__ver-arrow la la-angle-right\"></i>\n\t\t\t\t</a>\n\n\t\t\t\t<div class=\"m-menu__submenu\">\n\t\t\t\t\t<span class=\"m-menu__arrow\"></span>\n\t\t\t\t\t<ul class=\"m-menu__subnav\">\n\n\t\t\t\t\t\t<li *ngIf= \"permission.subscription_list == 1\" class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t<a  routerLink=\"/subscription/subscription-list\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\tList\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\t\t\t\t\t</ul>\n\t\t\t\t</div>\n\t\t\t</li>\n\t\t\t<!-- ./subscription -->\n\t\t\t<!-- booking -->\n\t\t\t<li *ngIf= \"(role == 1 || role == 2) && permission.booking_list == 1\"  class=\"m-menu__item  m-menu__item--submenu\" routerLinkActive=\"m-menu__item--open\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\"  m-menu-submenu-toggle=\"hover\">\n\t\t\t\t<a  href=\"javascript:;\" class=\"m-menu__link m-menu__toggle\">\n\t\t\t\t\t<i class=\"m-menu__link-icon fa fa-calendar\"></i>\n\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\tBooking\n\t\t\t\t\t</span>\n\t\t\t\t\t<i class=\"m-menu__ver-arrow la la-angle-right\"></i>\n\t\t\t\t</a>\n\n\t\t\t\t<div class=\"m-menu__submenu\">\n\t\t\t\t\t<span class=\"m-menu__arrow\"></span>\n\t\t\t\t\t<ul class=\"m-menu__subnav\">\n\n\t\t\t\t\t\t<li *ngIf= \"permission.booking_list == 1\" class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t<a  routerLink=\"/booking/booking-list\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\tList\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\n\t\t\t\t\t</ul>\n\t\t\t\t</div>\n\t\t\t</li>\n\t\t\t<!-- ./booking -->\n\t\t\t \n\t\t\t <li *ngIf= \"(role == 1 || role == 2) && permission.support_list == 1\"  class=\"m-menu__item  m-menu__item--submenu\" routerLinkActive=\"m-menu__item--open\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\"  m-menu-submenu-toggle=\"hover\">\n\t\t\t\t<a  href=\"javascript:;\" class=\"m-menu__link m-menu__toggle\">\n\t\t\t\t\t<i class=\"m-menu__link-icon fa fa-support\"></i>\n\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\tSupports\n\t\t\t\t\t</span>\n\t\t\t\t\t<i class=\"m-menu__ver-arrow la la-angle-right\"></i>\n\t\t\t\t</a>\n\n\t\t\t\t<div class=\"m-menu__submenu\">\n\t\t\t\t\t<span class=\"m-menu__arrow\"></span>\n\t\t\t\t\t<ul class=\"m-menu__subnav\">\n\t\t\t\t\t\t<li *ngIf= \"permission.support_list == 1\" class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t<a  routerLink=\"/customer/support-list\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\tSupport List\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\n\t\t\t\t\t\t<li *ngIf= \"permission.support_list == 1\" class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t<a  routerLink=\"/customer/ticket-list\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\tTicket List\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\t\t\t\t\t</ul>\n\t\t\t\t</div>\n\t\t\t</li>\n\n\t\t\t<!--- Chat --->\n\t\t\t\t<li *ngIf= \"(role == 1 || role == 2)\"  class=\"m-menu__item  m-menu__item--submenu\" routerLinkActive=\"m-menu__item--open\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\"  m-menu-submenu-toggle=\"hover\">\n\t\t\t\t<a  href=\"javascript:;\" class=\"m-menu__link m-menu__toggle\">\n\t\t\t\t\t<i class=\"m-menu__link-icon fa fa-comments-o\"></i>\n\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\tChat\n\t\t\t\t\t</span>\n\t\t\t\t\t<i class=\"m-menu__ver-arrow la la-angle-right\"></i>\n\t\t\t\t</a>\n\n\n\n\t\t\t\t<div class=\"m-menu__submenu\">\n\t\t\t\t\t<span class=\"m-menu__arrow\"></span>\n\t\t\t\t\t<ul class=\"m-menu__subnav\">\n\t\t\t\t\t\t<li class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t<a  routerLink=\"/chat/private-chat\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\tPrivate\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\n\t\t\t\t\t\t<li class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t<a  routerLink=\"/chat/group-chat\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\tGroup\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\n\t\t\t\t\t\t<li class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t<a  routerLink=\"/chat/popup-chat\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\t Popup\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\t\t\t\t\t</ul>\n\t\t\t\t</div>\n\t\t\t</li>\n\t\t\t<!--- /Chat --->\n\n\t\t\t<li   class=\"m-menu__item  m-menu__item--submenu\" routerLinkActive=\"m-menu__item--open\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\"  m-menu-submenu-toggle=\"hover\">\n\t\t\t\t<a  href=\"javascript:;\" class=\"m-menu__link m-menu__toggle\">\n\t\t\t\t\t<i class=\"m-menu__link-icon fa fa-support\"></i>\n\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\tStaffs\n\t\t\t\t\t</span>\n\t\t\t\t\t<i class=\"m-menu__ver-arrow la la-angle-right\"></i>\n\t\t\t\t</a>\n\n\t\t\t\t<div class=\"m-menu__submenu\">\n\t\t\t\t\t<span class=\"m-menu__arrow\"></span>\n\t\t\t\t\t<ul class=\"m-menu__subnav\">\n\t\t\t\t\t\t<li *ngIf= \"permission.support_list == 1\" class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t<a  routerLink=\"/customer/staff-list\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\tStaff List\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\t\t\t\t\t</ul>\n\t\t\t\t</div>\n\t\t\t</li>\n\n\t\t\t <li *ngIf= \"(role == 1 || role == 2) && permission.dropship_list == 1\"  class=\"m-menu__item  m-menu__item--submenu\" routerLinkActive=\"m-menu__item--open\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\"  m-menu-submenu-toggle=\"hover\">\n\t\t\t\t<a  href=\"javascript:;\" class=\"m-menu__link m-menu__toggle\">\n\t\t\t\t\t<i class=\"m-menu__link-icon fa fa-upload\"></i>\n\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\tDropship\n\t\t\t\t\t</span>\n\t\t\t\t\t<i class=\"m-menu__ver-arrow la la-angle-right\"></i>\n\t\t\t\t</a>\n\n\t\t\t\t<div class=\"m-menu__submenu\">\n\t\t\t\t\t<span class=\"m-menu__arrow\"></span>\n\t\t\t\t\t<ul class=\"m-menu__subnav\">\n\n\t\t\t\t\t\t\n\n\t\t\t\t\t\t<li *ngIf= \"permission.dropship_add == 1\" class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t<a  routerLink=\"/dropship\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\tDrop Ship\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\t\t\t\t\t\t<li *ngIf= \"permission.dropship_list == 1\" class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t<a  routerLink=\"/dropship/dropship-list\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\tDrop Ship List\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\t\t\t\t\t</ul>\n\t\t\t\t</div>\n\t\t\t</li>\n\n\t\t\t \n\n\n\t\t\t<li *ngIf= \"role == 1 && permission.website_setting == 1\"  class=\"m-menu__item  m-menu__item--submenu\" routerLinkActive=\"m-menu__item--open\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\"  m-menu-submenu-toggle=\"hover\">\n\t\t\t\t<a  href=\"javascript:;\" class=\"m-menu__link m-menu__toggle\">\n\t\t\t\t\t<i class=\"m-menu__link-icon fa fa-television\"></i>\n\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\tManage Banner\n\t\t\t\t\t</span>\n\t\t\t\t\t<i class=\"m-menu__ver-arrow la la-angle-right\"></i>\n\t\t\t\t</a>\n\n\t\t\t\t<div class=\"m-menu__submenu\">\n\t\t\t\t\t<span class=\"m-menu__arrow\"></span>\n\t\t\t\t\t<ul class=\"m-menu__subnav\">\n\n\t\t\t\t\t\t<li *ngIf= \"permission.website_setting == 1\" class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t<a  routerLink=\"/banner/add-banner\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\tAdd Banners\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\n\t\t\t\t\t\t<li *ngIf= \"permission.website_setting == 1\" class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t<a  routerLink=\"/slider/slider-list\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\tManage Slider\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\n\t\t\t\t\t\t<li *ngIf= \"permission.website_setting == 1\" class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t<a  routerLink=\"/banner/banner-list\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\tBanner List\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\t\t\t\t\t</ul>\n\t\t\t\t</div>\n\t\t\t</li>\n\n\t\t\t<li *ngIf= \"role == 1 && permission.website_setting == 1\"  class=\"m-menu__item  m-menu__item--submenu\" routerLinkActive=\"m-menu__item--open\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\"  m-menu-submenu-toggle=\"hover\">\n\t\t\t\t<a  href=\"javascript:;\" class=\"m-menu__link m-menu__toggle\">\n\t\t\t\t\t<i class=\"m-menu__link-icon fa fa-user\"></i>\n\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\tManage Vendor\n\t\t\t\t\t</span>\n\t\t\t\t\t<i class=\"m-menu__ver-arrow la la-angle-right\"></i>\n\t\t\t\t</a>\n\n\t\t\t\t<div class=\"m-menu__submenu\">\n\t\t\t\t\t<span class=\"m-menu__arrow\"></span>\n\t\t\t\t\t<ul class=\"m-menu__subnav\">\n\t\t\t\t\t\t<li *ngIf= \"permission.website_setting == 1\" class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t<a  routerLink=\"/vendor/vendor-list\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\tVendors List\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\n\t\t\t\t\t</ul>\n\t\t\t\t</div>\n\t\t\t</li>\n\n\t\t\t<li *ngIf= \"role == 1 && permission.website_setting == 1\" class=\"m-menu__item  m-menu__item--submenu\" routerLinkActive=\"m-menu__item--open\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\"  m-menu-submenu-toggle=\"hover\">\n\t\t\t\t<a  href=\"javascript:;\" class=\"m-menu__link m-menu__toggle\">\n\t\t\t\t\t<i class=\"m-menu__link-icon fa fa-users\"></i>\n\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\tManage Customer\n\t\t\t\t\t</span>\n\t\t\t\t\t<i class=\"m-menu__ver-arrow la la-angle-right\"></i>\n\t\t\t\t</a>\n\t\t\t\t<div class=\"m-menu__submenu\">\n\t\t\t\t\t<span class=\"m-menu__arrow\"></span>\n\t\t\t\t\t<ul class=\"m-menu__subnav\">\n\t\t\t\t\t\n\t\t\t\t\t\t<li *ngIf= \"permission.website_setting == 1\" class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t<a  routerLink=\"/customer/customer-list\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\tCustomer List\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\n\t\t\t\t\t</ul>\n\t\t\t\t</div>\n\t\t\t</li>\n\n\t\t\t<li *ngIf= \"role == 1 && permission.website_setting == 1\" class=\"m-menu__item  m-menu__item--submenu\" routerLinkActive=\"m-menu__item--open\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\"  m-menu-submenu-toggle=\"hover\">\n\t\t\t\t<a  href=\"javascript:;\" class=\"m-menu__link m-menu__toggle\">\n\t\t\t\t\t<i class=\"m-menu__link-icon fa fa-users\"></i>\n\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\tManage Member\n\t\t\t\t\t</span>\n\t\t\t\t\t<i class=\"m-menu__ver-arrow la la-angle-right\"></i>\n\t\t\t\t</a>\n\t\t\t\t<div class=\"m-menu__submenu\">\n\t\t\t\t\t<span class=\"m-menu__arrow\"></span>\n\t\t\t\t\t<ul class=\"m-menu__subnav\">\n\t\t\t\t\t\n\t\t\t\t\t\t<li *ngIf= \"permission.website_setting == 1\" class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t<a  routerLink=\"/user/user-add\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\tAdd Member\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\t\t\t\t\t\t<li *ngIf= \"permission.website_setting == 1\" class=\"m-menu__item\" routerLinkActive=\"m-menu__item\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t\t\t\t<a  routerLink=\"/user/user-list\" class=\"m-menu__link\">\n\t\t\t\t\t\t\t\t<i class=\"m-menu__link-bullet m-menu__link-bullet--dot\">\n\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t</i>\n\t\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\t\tMember List\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\n\t\t\t\t\t</ul>\n\t\t\t\t</div>\n\t\t\t</li>\n\n\t\t\t<li *ngIf= \"permission.website_setting == 1\" class=\"m-menu__item  \" routerLinkActive=\"m-menu__item--active\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t<a  routerLink=\"/user-group\" class=\"m-menu__link\">\n\t\t\t\t\t<i class=\"m-menu__link-icon fa fa-sign-out\"></i>\n\t\t\t\t\t<span class=\"m-menu__link-title\">\n\t\t\t\t\t\t<span class=\"m-menu__link-wrap\">\n\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\tUser Group\n\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t</span>\n\t\t\t\t\t</span>\n\t\t\t\t</a>\n\t\t\t</li>\n\n\t\t\t<li class=\"m-menu__item  \" routerLinkActive=\"m-menu__item--active\" routerLinkActiveOptions=\"{ exact: true }\"  aria-haspopup=\"true\" >\n\t\t\t\t<a  routerLink=\"/logout\" class=\"m-menu__link\">\n\t\t\t\t\t<i class=\"m-menu__link-icon fa fa-key\"></i>\n\t\t\t\t\t<span class=\"m-menu__link-title\">\n\t\t\t\t\t\t<span class=\"m-menu__link-wrap\">\n\t\t\t\t\t\t\t<span class=\"m-menu__link-text\">\n\t\t\t\t\t\t\t\tLogout\n\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t</span>\n\t\t\t\t\t</span>\n\t\t\t\t</a>\n\t\t\t</li>\n\n\t\t</ul>\n\t\t<div class=\"m-stack__item m-stack__item--middle m-brand__logo\" style=\"position: fixed; bottom: 0; text-align: center;left: 3%\">\n\t\t\t\t\t\t<a routerLink=\"/index\" class=\"m-brand__logo-wrapper\" style=\"color:white\">\n\t\t\t\t<i><h6>MoreToLike</h6></i>\n\t\t\t\t</a>\n\t\t</div>\n\t</div>\n\t<!-- END: Aside Menu -->\n</div>\n<!-- END: Left Aside -->\n"

/***/ }),

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/layouts/field-error-display/field-error-display.component.html":
/*!****************************************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/layouts/field-error-display/field-error-display.component.html ***!
  \****************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div *ngIf=\"displayError\" >\n  <span class=\"glyphicon glyphicon-remove form-control-feedback fix-error-icon\"></span>\n  <span class=\"sr-only\">(error)</span>\n  <div class=\"error-msg\">\n    {{ errorMsg }}\n  </div>\n</div>"

/***/ }),

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/layouts/footer/footer.component.html":
/*!**************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/layouts/footer/footer.component.html ***!
  \**************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<!-- begin::Footer -->\n<footer class=\"m-grid__item\t\tm-footer\" appunwraptag=\"\">\n\t<div class=\"m-container m-container--fluid m-container--full-height m-page__container\">\n\t\t<div class=\"m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop\">\n\t\t\t<div class=\"m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last\">\n\t\t\t\t<span class=\"m-footer__copyright\">\n\t\t\t\t\tMoreToLike 2018 &copy; MoreToLike\n\t\t\t\t\t\n\t\t\t\t</span>\n\t\t\t</div>\n\t\t\t\n\t\t</div>\n\t</div>\n</footer>\n<!-- end::Footer -->\n"

/***/ }),

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/layouts/header-nav/header-nav.component.html":
/*!**********************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/layouts/header-nav/header-nav.component.html ***!
  \**********************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<!-- BEGIN: Header -->\n<header id=\"m_header\" class=\"m-grid__item    m-header\"  m-minimize-offset=\"200\" m-minimize-mobile-offset=\"200\" appunwraptag=\"\" >\n\t<div class=\"m-container m-container--fluid m-container--full-height\">\n\t\t<div class=\"m-stack m-stack--ver m-stack--desktop\">\n\t\t\t<!-- BEGIN: Brand -->\n\t\t\t<div class=\"m-stack__item m-brand  m-brand--skin-dark\">\n\t\t\t\t<div class=\"m-stack m-stack--ver m-stack--general\">\n\t\t\t\t\t<div class=\"m-stack__item m-stack__item--middle m-brand__logo\" style=\"line-height: unset\">\n\t\t\t\t\t\t<a routerLink=\"/index\" class=\"m-brand__logo-wrapper\" style=\"color:white\">\n\t\t\t\t\t\t\t<!-- <img alt=\"\" src=\"./assets/demo/default/media/img/logo/logo_default_dark.png\"/> -->\n\t\t\t\t\t\t\t<!-- <i><h6>MoreToLike</h6></i> -->\n\t\t\t\t\t\t\t<li style=\"list-style: none;\" class=\"m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light\" m-dropdown-toggle=\"click\">\n\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-nav__link m-dropdown__toggle\">\n\t\t\t\t\t\t\t\t\t<span class=\"m-topbar__userpic\">\n\t\t\t\t\t\t\t\t\t\t<img src=\"./assets/app/media/img/users/user4.jpg\" class=\"m--img-rounded m--marginless m--img-centered\" style=\"height: 56px;\" alt=\"\"/>\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t<span class=\"m-topbar__username m--hide\">\n\t\t\t\t\t\t\t\t\t\tNick\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t<div class=\"m-dropdown__wrapper\" style=\"left: 0\">\n\t\t\t\t\t\t\t\t\t<span class=\"m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust\"></span>\n\t\t\t\t\t\t\t\t\t<div class=\"m-dropdown__inner\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-dropdown__header m--align-center\" style=\"background: url(./assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-card-user m-card-user--skin-dark\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-card-user__pic\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"./assets/app/media/img/users/user4.jpg\" class=\"m--img-rounded m--marginless\" alt=\"\"/>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-card-user__details\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-card-user__name m--font-weight-500\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{user_f_name}} {{user_l_name}}\n\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-card-user__email m--font-weight-300 m-link\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{user_email}}\n\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-dropdown__body\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-dropdown__content\">\n\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"m-nav m-nav--skin-light\">\n\t\t\t\t\t\t\t\t\t<!-- \t\t\t\t<li class=\"m-nav__section m--hide\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-nav__section-text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSection\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-nav__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a routerLink=\"/header/profile\" class=\"m-nav__link\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"m-nav__link-icon flaticon-profile-1\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-title\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-wrap\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMy Profile\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-badge\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-badge m-badge--success\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-nav__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a routerLink=\"/header/profile\" class=\"m-nav__link\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"m-nav__link-icon flaticon-share\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tActivity\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-nav__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a routerLink=\"/header/profile\" class=\"m-nav__link\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"m-nav__link-icon flaticon-chat-1\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMessages\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-nav__separator m-nav__separator--fit\"></li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-nav__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a routerLink=\"/header/profile\" class=\"m-nav__link\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"m-nav__link-icon flaticon-info\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFAQ\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-nav__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a routerLink=\"/header/profile\" class=\"m-nav__link\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"m-nav__link-icon flaticon-lifebuoy\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSupport\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</li> -->\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-nav__separator m-nav__separator--fit\"></li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-nav__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a routerLink=\"/snippets/pages/user/login-1\" class=\"btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder\" routerLink=\"/logout\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLogout\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t</a>\n\t\t\t\t\t</div>\n\t\t\t\t\t<div class=\"m-stack__item m-stack__item--middle m-brand__tools\">\n\t\t\t\t\t\t<!-- BEGIN: Left Aside Minimize Toggle -->\n\t\t\t\t\t\t<a href=\"javascript:;\" id=\"m_aside_left_minimize_toggle\" class=\"m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block\">\n\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t</a>\n\t\t\t\t\t\t<!-- END --> \t\t\t \t\t\t\t\t\t\t<!-- BEGIN: Responsive Aside Left Menu Toggler -->\n\t\t\t\t\t\t<a href=\"javascript:;\" id=\"m_aside_left_offcanvas_toggle\" class=\"m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block\">\n\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t</a>\n\t\t\t\t\t\t<!-- END --> \t\t\t \t\t\t\t\t\t  \t\t\t\t\t\t\t<!-- BEGIN: Responsive Header Menu Toggler -->\n\t\t\t\t\t\t<a id=\"m_aside_header_menu_mobile_toggle\" href=\"javascript:;\" class=\"m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block\">\n\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t</a>\n\t\t\t\t\t\t<!-- END --> \t\t\t\t\t\t  \t\t\t<!-- BEGIN: Topbar Toggler -->\n\t\t\t\t\t\t<a id=\"m_aside_header_topbar_mobile_toggle\" href=\"javascript:;\" class=\"m-brand__icon m--visible-tablet-and-mobile-inline-block\">\n\t\t\t\t\t\t\t<i class=\"flaticon-more\"></i>\n\t\t\t\t\t\t</a>\n\t\t\t\t\t\t<!-- BEGIN: Topbar Toggler -->\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t\t<!-- END: Brand -->\n\t\t\t<div class=\"m-stack__item m-stack__item--fluid m-header-head\" id=\"m_header_nav\">\n\t\t\t\t<!-- BEGIN: Horizontal Menu -->\n\t\t\t\t<button class=\"m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark\" id=\"m_aside_header_menu_mobile_close_btn\">\n\t\t\t\t\t<i class=\"la la-close\"></i>\n\t\t\t\t</button>\n\t\t\t\t\t\t\t\t\t\t\t\t<!-- BEGIN: Topbar -->\n\t\t\t\t<div id=\"m_header_topbar\" class=\"m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid\">\n\t\t\t\t\t<div class=\"m-stack__item m-topbar__nav-wrapper\">\n\t\t\t\t\t\t<ul class=\"m-topbar__nav m-nav m-nav--inline\">\n\t\t\t\t\t\t\t<li class=\"m-nav__item m-nav__item--accent m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center \tm-dropdown--mobile-full-width\" m-dropdown-toggle=\"click\" m-dropdown-persistent=\"1\">\n\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-nav__link m-dropdown__toggle\" id=\"m_topbar_notification_icon\">\n\t\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-badge m-badge m-badge--dot-large m-badge--danger\">{{_dataService.notification | async }}</span>\n\t\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-icon\">\n\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-nav__link-icon-wrapper\">\n\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-music-2\"></i>\n\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t<div class=\"m-dropdown__wrapper\">\n\t\t\t\t\t\t\t\t\t\t<span class=\"m-dropdown__arrow m-dropdown__arrow--center\"></span>\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-dropdown__inner\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-dropdown__header m--align-center\">\n\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-dropdown__header-title\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t9 New\n\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-dropdown__header-subtitle\">\n\t\t\t\t\t\t\t\t\t\t\t\t\tUser Notifications\n\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-dropdown__body\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-dropdown__content\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand\" role=\"tablist\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item m-tabs__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link m-tabs__link active\" data-toggle=\"tab\" href=\"#topbar_notifications_notifications\" role=\"tab\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAlerts\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item m-tabs__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link m-tabs__link\" data-toggle=\"tab\" href=\"#topbar_notifications_events\" role=\"tab\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEvents\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item m-tabs__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link m-tabs__link\" data-toggle=\"tab\" href=\"#topbar_notifications_logs\" role=\"tab\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLogs\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"topbar_notifications_notifications\" role=\"tabpanel\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-scrollable\" data-scrollable=\"true\" data-max-height=\"250\" data-mobile-max-height=\"200\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-list-timeline m-list-timeline--skin-light\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-list-timeline__items\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge -m-list-timeline__badge--state-success\"></span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t12 new users registered\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tJust now\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge\"></span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSystem shutdown\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-badge m-badge--success m-badge--wide\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpending\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t14 mins\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge\"></span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNew invoice received\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t20 mins\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge\"></span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDB overloaded 80%\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-badge m-badge--info m-badge--wide\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsettled\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t1 hr\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge\"></span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSystem error -\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-link\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCheck\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2 hrs\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-list-timeline__item m-list-timeline__item--read\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge\"></span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span href=\"\" class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNew order received\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-badge m-badge--danger m-badge--wide\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\turgent\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t7 hrs\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-list-timeline__item m-list-timeline__item--read\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge\"></span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduction server down\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t3 hrs\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge\"></span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduction server up\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t5 hrs\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"topbar_notifications_events\" role=\"tabpanel\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-scrollable\" data-scrollable=\"true\" data-max-height=\"250\" data-mobile-max-height=\"200\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-list-timeline m-list-timeline--skin-light\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-list-timeline__items\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge m-list-timeline__badge--state1-success\"></span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNew order received\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tJust now\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge m-list-timeline__badge--state1-danger\"></span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNew invoice received\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t20 mins\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge m-list-timeline__badge--state1-success\"></span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduction server up\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t5 hrs\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge m-list-timeline__badge--state1-info\"></span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNew order received\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t7 hrs\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge m-list-timeline__badge--state1-info\"></span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSystem shutdown\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t11 mins\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge m-list-timeline__badge--state1-info\"></span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tProduction server down\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t3 hrs\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"topbar_notifications_logs\" role=\"tabpanel\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack m-stack--ver m-stack--general\" style=\"min-height: 180px;\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack__item m-stack__item--center m-stack__item--middle\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAll caught up!\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNo new logs.\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t<!-- <li class=\"m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light\" m-dropdown-toggle=\"click\">\n\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-nav__link m-dropdown__toggle\">\n\t\t\t\t\t\t\t\t\t<span class=\"m-topbar__userpic\">\n\t\t\t\t\t\t\t\t\t\t<img src=\"./assets/app/media/img/users/user4.jpg\" class=\"m--img-rounded m--marginless m--img-centered\" alt=\"\"/>\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t<span class=\"m-topbar__username m--hide\">\n\t\t\t\t\t\t\t\t\t\tNick\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t<div class=\"m-dropdown__wrapper\">\n\t\t\t\t\t\t\t\t\t<span class=\"m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust\"></span>\n\t\t\t\t\t\t\t\t\t<div class=\"m-dropdown__inner\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-dropdown__header m--align-center\" style=\"background: url(./assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-card-user m-card-user--skin-dark\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-card-user__pic\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"./assets/app/media/img/users/user4.jpg\" class=\"m--img-rounded m--marginless\" alt=\"\"/>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-card-user__details\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-card-user__name m--font-weight-500\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{user_f_name}} {{user_l_name}}\n\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-card-user__email m--font-weight-300 m-link\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{user_email}}\n\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-dropdown__body\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-dropdown__content\">\n\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"m-nav m-nav--skin-light\">\n\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-nav__separator m-nav__separator--fit\"></li>\n\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"m-nav__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a routerLink=\"/snippets/pages/user/login-1\" class=\"btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder\" routerLink=\"/logout\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLogout\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t\t\t\t\t\t</ul>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</li> -->\n\t\t\t\t\t\t</ul>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t\t<!-- END: Topbar -->\n\t\t\t</div>\n\t\t</div>\n\t</div>\n</header>\n<!-- END: Header -->\n"

/***/ }),

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/layouts/layout/layout.component.html":
/*!**************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/layouts/layout/layout.component.html ***!
  \**************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<router-outlet></router-outlet>\n"

/***/ }),

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/layouts/quick-sidebar/quick-sidebar.component.html":
/*!****************************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/layouts/quick-sidebar/quick-sidebar.component.html ***!
  \****************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<!-- begin::Quick Sidebar -->\n<div id=\"m_quick_sidebar\" class=\"m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light\" appunwraptag=\"\">\n\t<div class=\"m-quick-sidebar__content m--hide\">\n\t\t<span id=\"m_quick_sidebar_close\" class=\"m-quick-sidebar__close\">\n\t\t\t<i class=\"la la-close\"></i>\n\t\t</span>\n\t\t<ul id=\"m_quick_sidebar_tabs\" class=\"nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand\" role=\"tablist\">\n\t\t\t<li class=\"nav-item m-tabs__item\">\n\t\t\t\t<a class=\"nav-link m-tabs__link active\" data-toggle=\"tab\" href=\"#m_quick_sidebar_tabs_messenger\" role=\"tab\">\n\t\t\t\t\tMessages\n\t\t\t\t</a>\n\t\t\t</li>\n\t\t\t<li class=\"nav-item m-tabs__item\">\n\t\t\t\t<a class=\"nav-link m-tabs__link\" \t\tdata-toggle=\"tab\" href=\"#m_quick_sidebar_tabs_settings\" role=\"tab\">\n\t\t\t\t\tSettings\n\t\t\t\t</a>\n\t\t\t</li>\n\t\t\t<li class=\"nav-item m-tabs__item\">\n\t\t\t\t<a class=\"nav-link m-tabs__link\" data-toggle=\"tab\" href=\"#m_quick_sidebar_tabs_logs\" role=\"tab\">\n\t\t\t\t\tLogs\n\t\t\t\t</a>\n\t\t\t</li>\n\t\t</ul>\n\t\t<div class=\"tab-content\">\n\t\t\t<div class=\"tab-pane active m-scrollable\" id=\"m_quick_sidebar_tabs_messenger\" role=\"tabpanel\">\n\t\t\t\t<div class=\"m-messenger m-messenger--message-arrow m-messenger--skin-light\">\n\t\t\t\t\t<div class=\"m-messenger__messages\">\n\t\t\t\t\t\t<div class=\"m-messenger__wrapper\">\n\t\t\t\t\t\t\t<div class=\"m-messenger__message m-messenger__message--in\">\n\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-pic\">\n\t\t\t\t\t\t\t\t\t<img src=\"./assets/app/media/img//users/user3.jpg\" alt=\"\"/>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-body\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-arrow\"></div>\n\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-content\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-username\">\n\t\t\t\t\t\t\t\t\t\t\tMegan wrote\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-text\">\n\t\t\t\t\t\t\t\t\t\t\tHi Bob. What time will be the meeting ?\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-messenger__wrapper\">\n\t\t\t\t\t\t\t<div class=\"m-messenger__message m-messenger__message--out\">\n\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-body\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-arrow\"></div>\n\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-content\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-text\">\n\t\t\t\t\t\t\t\t\t\t\tHi Megan. It's at 2.30PM\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-messenger__wrapper\">\n\t\t\t\t\t\t\t<div class=\"m-messenger__message m-messenger__message--in\">\n\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-pic\">\n\t\t\t\t\t\t\t\t\t<img src=\"./assets/app/media/img//users/user3.jpg\" alt=\"\"/>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-body\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-arrow\"></div>\n\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-content\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-username\">\n\t\t\t\t\t\t\t\t\t\t\tMegan wrote\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-text\">\n\t\t\t\t\t\t\t\t\t\t\tWill the development team be joining ?\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-messenger__wrapper\">\n\t\t\t\t\t\t\t<div class=\"m-messenger__message m-messenger__message--out\">\n\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-body\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-arrow\"></div>\n\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-content\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-text\">\n\t\t\t\t\t\t\t\t\t\t\tYes sure. I invited them as well\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-messenger__datetime\">\n\t\t\t\t\t\t\t2:30PM\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-messenger__wrapper\">\n\t\t\t\t\t\t\t<div class=\"m-messenger__message m-messenger__message--in\">\n\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-pic\">\n\t\t\t\t\t\t\t\t\t<img src=\"./assets/app/media/img//users/user3.jpg\"  alt=\"\"/>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-body\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-arrow\"></div>\n\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-content\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-username\">\n\t\t\t\t\t\t\t\t\t\t\tMegan wrote\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-text\">\n\t\t\t\t\t\t\t\t\t\t\tNoted. For the Coca-Cola Mobile App project as well ?\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-messenger__wrapper\">\n\t\t\t\t\t\t\t<div class=\"m-messenger__message m-messenger__message--out\">\n\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-body\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-arrow\"></div>\n\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-content\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-text\">\n\t\t\t\t\t\t\t\t\t\t\tYes, sure.\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-messenger__wrapper\">\n\t\t\t\t\t\t\t<div class=\"m-messenger__message m-messenger__message--out\">\n\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-body\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-arrow\"></div>\n\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-content\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-text\">\n\t\t\t\t\t\t\t\t\t\t\tPlease also prepare the quotation for the Loop CRM project as well.\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-messenger__datetime\">\n\t\t\t\t\t\t\t3:15PM\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-messenger__wrapper\">\n\t\t\t\t\t\t\t<div class=\"m-messenger__message m-messenger__message--in\">\n\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-no-pic m--bg-fill-danger\">\n\t\t\t\t\t\t\t\t\t<span>\n\t\t\t\t\t\t\t\t\t\tM\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-body\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-arrow\"></div>\n\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-content\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-username\">\n\t\t\t\t\t\t\t\t\t\t\tMegan wrote\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-text\">\n\t\t\t\t\t\t\t\t\t\t\tNoted. I will prepare it.\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-messenger__wrapper\">\n\t\t\t\t\t\t\t<div class=\"m-messenger__message m-messenger__message--out\">\n\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-body\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-arrow\"></div>\n\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-content\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-text\">\n\t\t\t\t\t\t\t\t\t\t\tThanks Megan. I will see you later.\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-messenger__wrapper\">\n\t\t\t\t\t\t\t<div class=\"m-messenger__message m-messenger__message--in\">\n\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-pic\">\n\t\t\t\t\t\t\t\t\t<img src=\"./assets/app/media/img//users/user3.jpg\"  alt=\"\"/>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-body\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-arrow\"></div>\n\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-content\">\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-username\">\n\t\t\t\t\t\t\t\t\t\t\tMegan wrote\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-messenger__message-text\">\n\t\t\t\t\t\t\t\t\t\t\tSure. See you in the meeting soon.\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<div class=\"m-messenger__seperator\"></div>\n\t\t\t\t\t<div class=\"m-messenger__form\">\n\t\t\t\t\t\t<div class=\"m-messenger__form-controls\">\n\t\t\t\t\t\t\t<input type=\"text\" name=\"\" placeholder=\"Type here...\" class=\"m-messenger__form-input\">\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-messenger__form-tools\">\n\t\t\t\t\t\t\t<a href=\"\" class=\"m-messenger__form-attachment\">\n\t\t\t\t\t\t\t\t<i class=\"la la-paperclip\"></i>\n\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t\t<div class=\"tab-pane  m-scrollable\" id=\"m_quick_sidebar_tabs_settings\" role=\"tabpanel\">\n\t\t\t\t<div class=\"m-list-settings\">\n\t\t\t\t\t<div class=\"m-list-settings__group\">\n\t\t\t\t\t\t<div class=\"m-list-settings__heading\">\n\t\t\t\t\t\t\tGeneral Settings\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-list-settings__item\">\n\t\t\t\t\t\t\t<span class=\"m-list-settings__item-label\">\n\t\t\t\t\t\t\t\tEmail Notifications\n\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t<span class=\"m-list-settings__item-control\">\n\t\t\t\t\t\t\t\t<span class=\"m-switch m-switch--outline m-switch--icon-check m-switch--brand\">\n\t\t\t\t\t\t\t\t\t<label>\n\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"checked\" name=\"\">\n\t\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-list-settings__item\">\n\t\t\t\t\t\t\t<span class=\"m-list-settings__item-label\">\n\t\t\t\t\t\t\t\tSite Tracking\n\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t<span class=\"m-list-settings__item-control\">\n\t\t\t\t\t\t\t\t<span class=\"m-switch m-switch--outline m-switch--icon-check m-switch--brand\">\n\t\t\t\t\t\t\t\t\t<label>\n\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"\">\n\t\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-list-settings__item\">\n\t\t\t\t\t\t\t<span class=\"m-list-settings__item-label\">\n\t\t\t\t\t\t\t\tSMS Alerts\n\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t<span class=\"m-list-settings__item-control\">\n\t\t\t\t\t\t\t\t<span class=\"m-switch m-switch--outline m-switch--icon-check m-switch--brand\">\n\t\t\t\t\t\t\t\t\t<label>\n\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"\">\n\t\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-list-settings__item\">\n\t\t\t\t\t\t\t<span class=\"m-list-settings__item-label\">\n\t\t\t\t\t\t\t\tBackup Storage\n\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t<span class=\"m-list-settings__item-control\">\n\t\t\t\t\t\t\t\t<span class=\"m-switch m-switch--outline m-switch--icon-check m-switch--brand\">\n\t\t\t\t\t\t\t\t\t<label>\n\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"\">\n\t\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-list-settings__item\">\n\t\t\t\t\t\t\t<span class=\"m-list-settings__item-label\">\n\t\t\t\t\t\t\t\tAudit Logs\n\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t<span class=\"m-list-settings__item-control\">\n\t\t\t\t\t\t\t\t<span class=\"m-switch m-switch--outline m-switch--icon-check m-switch--brand\">\n\t\t\t\t\t\t\t\t\t<label>\n\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"checked\" name=\"\">\n\t\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<div class=\"m-list-settings__group\">\n\t\t\t\t\t\t<div class=\"m-list-settings__heading\">\n\t\t\t\t\t\t\tSystem Settings\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-list-settings__item\">\n\t\t\t\t\t\t\t<span class=\"m-list-settings__item-label\">\n\t\t\t\t\t\t\t\tSystem Logs\n\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t<span class=\"m-list-settings__item-control\">\n\t\t\t\t\t\t\t\t<span class=\"m-switch m-switch--outline m-switch--icon-check m-switch--brand\">\n\t\t\t\t\t\t\t\t\t<label>\n\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"\">\n\t\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-list-settings__item\">\n\t\t\t\t\t\t\t<span class=\"m-list-settings__item-label\">\n\t\t\t\t\t\t\t\tError Reporting\n\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t<span class=\"m-list-settings__item-control\">\n\t\t\t\t\t\t\t\t<span class=\"m-switch m-switch--outline m-switch--icon-check m-switch--brand\">\n\t\t\t\t\t\t\t\t\t<label>\n\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"\">\n\t\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-list-settings__item\">\n\t\t\t\t\t\t\t<span class=\"m-list-settings__item-label\">\n\t\t\t\t\t\t\t\tApplications Logs\n\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t<span class=\"m-list-settings__item-control\">\n\t\t\t\t\t\t\t\t<span class=\"m-switch m-switch--outline m-switch--icon-check m-switch--brand\">\n\t\t\t\t\t\t\t\t\t<label>\n\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"\">\n\t\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-list-settings__item\">\n\t\t\t\t\t\t\t<span class=\"m-list-settings__item-label\">\n\t\t\t\t\t\t\t\tBackup Servers\n\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t<span class=\"m-list-settings__item-control\">\n\t\t\t\t\t\t\t\t<span class=\"m-switch m-switch--outline m-switch--icon-check m-switch--brand\">\n\t\t\t\t\t\t\t\t\t<label>\n\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"checked\" name=\"\">\n\t\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-list-settings__item\">\n\t\t\t\t\t\t\t<span class=\"m-list-settings__item-label\">\n\t\t\t\t\t\t\t\tAudit Logs\n\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t<span class=\"m-list-settings__item-control\">\n\t\t\t\t\t\t\t\t<span class=\"m-switch m-switch--outline m-switch--icon-check m-switch--brand\">\n\t\t\t\t\t\t\t\t\t<label>\n\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"\">\n\t\t\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t\t<div class=\"tab-pane  m-scrollable\" id=\"m_quick_sidebar_tabs_logs\" role=\"tabpanel\">\n\t\t\t\t<div class=\"m-list-timeline\">\n\t\t\t\t\t<div class=\"m-list-timeline__group\">\n\t\t\t\t\t\t<div class=\"m-list-timeline__heading\">\n\t\t\t\t\t\t\tSystem Logs\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-list-timeline__items\">\n\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge m-list-timeline__badge--state-success\"></span>\n\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\t12 new users registered\n\t\t\t\t\t\t\t\t\t<span class=\"m-badge m-badge--warning m-badge--wide\">\n\t\t\t\t\t\t\t\t\t\timportant\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\tJust now\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge m-list-timeline__badge--state-info\"></span>\n\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\tSystem shutdown\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t11 mins\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge m-list-timeline__badge--state-danger\"></span>\n\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\tNew invoice received\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t20 mins\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge m-list-timeline__badge--state-warning\"></span>\n\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\tDatabase overloaded 89%\n\t\t\t\t\t\t\t\t\t<span class=\"m-badge m-badge--success m-badge--wide\">\n\t\t\t\t\t\t\t\t\t\tresolved\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t1 hr\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge m-list-timeline__badge--state-success\"></span>\n\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\tSystem error\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t2 hrs\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge m-list-timeline__badge--state-info\"></span>\n\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\tProduction server down\n\t\t\t\t\t\t\t\t\t<span class=\"m-badge m-badge--danger m-badge--wide\">\n\t\t\t\t\t\t\t\t\t\tpending\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t3 hrs\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge m-list-timeline__badge--state-success\"></span>\n\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\tProduction server up\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t5 hrs\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<div class=\"m-list-timeline__group\">\n\t\t\t\t\t\t<div class=\"m-list-timeline__heading\">\n\t\t\t\t\t\t\tApplications Logs\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-list-timeline__items\">\n\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge m-list-timeline__badge--state-info\"></span>\n\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\tNew order received\n\t\t\t\t\t\t\t\t\t<span class=\"m-badge m-badge--info m-badge--wide\">\n\t\t\t\t\t\t\t\t\t\turgent\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t7 hrs\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge m-list-timeline__badge--state-success\"></span>\n\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\t12 new users registered\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\tJust now\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge m-list-timeline__badge--state-info\"></span>\n\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\tSystem shutdown\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t11 mins\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge m-list-timeline__badge--state-danger\"></span>\n\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\tNew invoices received\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t20 mins\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge m-list-timeline__badge--state-warning\"></span>\n\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\tDatabase overloaded 89%\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t1 hr\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge m-list-timeline__badge--state-success\"></span>\n\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\tSystem error\n\t\t\t\t\t\t\t\t\t<span class=\"m-badge m-badge--info m-badge--wide\">\n\t\t\t\t\t\t\t\t\t\tpending\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t2 hrs\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge m-list-timeline__badge--state-info\"></span>\n\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\tProduction server down\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t3 hrs\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<div class=\"m-list-timeline__group\">\n\t\t\t\t\t\t<div class=\"m-list-timeline__heading\">\n\t\t\t\t\t\t\tServer Logs\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-list-timeline__items\">\n\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge m-list-timeline__badge--state-success\"></span>\n\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\tProduction server up\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t5 hrs\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge m-list-timeline__badge--state-info\"></span>\n\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\tNew order received\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t7 hrs\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge m-list-timeline__badge--state-success\"></span>\n\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\t12 new users registered\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\tJust now\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge m-list-timeline__badge--state-info\"></span>\n\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\tSystem shutdown\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t11 mins\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge m-list-timeline__badge--state-danger\"></span>\n\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\tNew invoice received\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t20 mins\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge m-list-timeline__badge--state-warning\"></span>\n\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\tDatabase overloaded 89%\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t1 hr\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge m-list-timeline__badge--state-success\"></span>\n\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\tSystem error\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t2 hrs\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge m-list-timeline__badge--state-info\"></span>\n\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\tProduction server down\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t3 hrs\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge m-list-timeline__badge--state-success\"></span>\n\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\tProduction server up\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t5 hrs\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"m-list-timeline__item\">\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__badge m-list-timeline__badge--state-info\"></span>\n\t\t\t\t\t\t\t\t<a href=\"\" class=\"m-list-timeline__text\">\n\t\t\t\t\t\t\t\t\tNew order received\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t\t<span class=\"m-list-timeline__time\">\n\t\t\t\t\t\t\t\t\t1117 hrs\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n\t</div>\n</div>\n<!-- end::Quick Sidebar -->\n"

/***/ }),

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/layouts/scroll-top/scroll-top.component.html":
/*!**********************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/layouts/scroll-top/scroll-top.component.html ***!
  \**********************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<!-- begin::Scroll Top -->\n<div id=\"m_scroll_top\" class=\"m-scroll-top\" appunwraptag=\"\">\n\t<i class=\"la la-arrow-up\"></i>\n</div>\n<!-- end::Scroll Top -->\n"

/***/ }),

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/layouts/side-bar-toggle/side-bar-toggle.component.html":
/*!********************************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/layouts/side-bar-toggle/side-bar-toggle.component.html ***!
  \********************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<a href=\"#\" class=\"m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill\" title=\"View\"><i class=\"la la-eye\"></i></a>"

/***/ }),

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/layouts/side-bar/side-bar.component.html":
/*!******************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/layouts/side-bar/side-bar.component.html ***!
  \******************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<vendor-view-edit *ngIf=\"activeSelector == 'vendor'\"></vendor-view-edit>\n<edit-shareable-product *ngIf=\"activeSelector == 'shareable-product'\"></edit-shareable-product>\n\n"

/***/ }),

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/layouts/tooltips/tooltips.component.html":
/*!******************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/layouts/tooltips/tooltips.component.html ***!
  \******************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<!-- begin::Quick Nav -->\n<!-- <ul class=\"m-nav-sticky\" style=\"margin-top: 30px;\" appunwraptag=\"\">\n\t\n\t<li class=\"m-nav-sticky__item\" data-toggle=\"m-tooltip\" title=\"Showcase\" data-placement=\"left\">\n\t\t<a href=\"\">\n\t\t\t<i class=\"la la-eye\"></i>\n\t\t</a>\n\t</li>\n\t<li class=\"m-nav-sticky__item\" data-toggle=\"m-tooltip\" title=\"Pre-sale Chat\" data-placement=\"left\">\n\t\t<a href=\"\" >\n\t\t\t<i class=\"la la-comments-o\"></i>\n\t\t</a>\n\t</li>\n\n\t<li class=\"m-nav-sticky__item\" data-toggle=\"m-tooltip\" title=\"Purchase\" data-placement=\"left\">\n\t\t<a href=\"https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes\" >\n\t\t\t<i class=\"la la-cart-arrow-down\"></i>\n\t\t</a>\n\t</li>\n\t<li class=\"m-nav-sticky__item\" data-toggle=\"m-tooltip\" title=\"Documentation\" data-placement=\"left\">\n\t\t<a href=\"https://keenthemes.com/metronic/documentation.html\" >\n\t\t\t<i class=\"la la-code-fork\"></i>\n\t\t</a>\n\t</li>\n\t<li class=\"m-nav-sticky__item\" data-toggle=\"m-tooltip\" title=\"Support\" data-placement=\"left\">\n\t\t<a href=\"https://keenthemes.com/forums/forum/support/metronic5/\" >\n\t\t\t<i class=\"la la-life-ring\"></i>\n\t\t</a>\n\t</li>\n</ul> -->\n<!-- begin::Quick Nav -->\n"

/***/ }),

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/pages/aside-left-minimize-default-enabled/aside-left-minimize-default-enabled.component.html":
/*!**********************************************************************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/pages/aside-left-minimize-default-enabled/aside-left-minimize-default-enabled.component.html ***!
  \**********************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<app-aside-nav></app-aside-nav>\n<div class=\"m-grid__item m-grid__item--fluid m-wrapper\">\n\t<router-outlet></router-outlet>\n</div>\n"

/***/ }),

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/color/add-color/add-color.component.html":
/*!********************************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/pages/default/color/add-color/add-color.component.html ***!
  \********************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/color/color-list/color-list.component.html":
/*!**********************************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/pages/default/color/color-list/color-list.component.html ***!
  \**********************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "\n<div>\n\t<div class=\"m-portlet m-portlet--mobile\">\n\t\t<div class=\"m-portlet__body\">\n\t\t\t<div class=\"col-lg-12\">\n\t\t\t\t<div class=\"m-portlet\">\n\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\">\n\t\t\t\t\t\t\t\t\t<i class=\"la la-gear\"></i>\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">\n\t\t\t\t\t\t\t\tAdd Color\n\t\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\n\n\t\t\t\t\t\n\t\t\t\t\t<form class=\"m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed\" [formGroup] =\"form\" enctype=\"multipart/form-data\">\n\t\t\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\" >\n\t\t\t\t\t\t\t\t<div class=\"col-lg-4\" [ngClass]=\"displayFieldCss('color_code')\">\n\t\t\t\t\t\t\t\t\t<label for =\"['form_data']\" class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\tColor:\n\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t<input type=\"color\" style=\"width: 70px; height: 25px\"  id=\"color_code\" formControlName=\"color_code\">\n\n\t\t\t\t\t\t\t\t\t <app-field-error-display [displayError]=\"isFieldValid('color_code')\" errorMsg=\"Please Enter Color Code\">\n     \t\t\t\t\t\t\t\t</app-field-error-display>\n\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t<div class=\"col-lg-4\" [ngClass]=\"displayFieldCss('color_name')\">\n\t\t\t\t\t\t\t\t\t<label for =\"['form_data']\" class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\tColor Name:\n\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input\"\n\t\t\t\t\t\t\t\t\t placeholder=\"Enter Name\" type=\"text\" id=\"color_name\" formControlName=\"color_name\">\n\t\t\t\t\t\t\t\t\t <app-field-error-display [displayError]=\"isFieldValid('color_name')\" errorMsg=\"Please Enter Color Name\">\n     \t\t\t\t\t\t\t\t</app-field-error-display>\n\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t<div class=\"col-lg-4\" [ngClass]=\"displayFieldCss('status')\">\n\n\t\t\t\t\t\t\t\t\t<label for =\"status\" class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\tStatus:\n\t\t\t\t\t\t\t\t\t</label>\n\n\t\t\t\t\t\t\t\t\t<select class=\"form-control\" formControlName=\"status\" [(ngModel)] = \"selectedStatus\">\n\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select Status</option>\n\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Active</option>\n\t\t\t\t\t\t\t\t\t\t<option value=\"0\">Inactive</option>\n\n\t\t\t\t\t\t\t\t\t</select>\n\t\t\t\t\t\t\t\t\t <app-field-error-display [displayError]=\"isFieldValid('status')\" errorMsg=\"Please Select Status\">\n     \t\t\t\t\t\t\t\t</app-field-error-display>\n\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\" >\n\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">\n\t\t\t\t\t\t\t\t\t<label for =\"status\" class=\"control-label required\">Product Image:</label>\n\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"file\" (change)=\"handleFileInput($event.target.files)\">\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t</div> <!-- /form-body  -->\n\t\t\t\t\t\t<div class=\"m-portlet__foot m-portlet__no-border m-portlet__foot--fit\">\n\t\t\t\t\t\t\t<div class=\"m-form__actions m-form__actions--solid\">\n\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">\n\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success\" (click)=\"onSubmit()\">\n\t\t\t\t\t\t\t\t\t\t\tSave\n\t\t\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger\" (click)=\"reset()\">\n\t\t\t\t\t\t\t\t\t\t\tReset\n\t\t\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</form>\t\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n\t</div>\n</div>\n\n\n<div class=\"m-portlet m-portlet--mobile\">\n\t\t<div class=\"m-portlet__body\">\n\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\"><i class=\"la la-gear\"></i></span>\n\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">List Color</h3>\n\n\t\t\t\t\t\t<!-- <button  style=\"margin-left:725px;margin-top:15px;\" class=\"btn btn-warning\" type=\"button\" routerLink=\"/color/add-color\">\n\t\t\t\t\t\t\tAdd Color\n\t\t\t\t\t\t</button> -->\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\n\t\t\t<div class=\"m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30\">\n\t\t\t\t<div class=\"row align-items-center\">\n\t\t\t\t\t<div class=\"col-xl-12 order-2 order-xl-1\">\n\t\t\t\t\t\t<div class=\"form-group m-form__group row align-items-center\">\n\n\t\t\t\t\t\t\t<!-- <div class=\"col-md-4\">\n\t\t\t\t\t\t\t\t<div class=\"m-form__group m-form__group--inline\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__label\">\n\t\t\t\t\t\t\t\t\t\t<label class=\"m-label m-label--single\">\n\t\t\t\t\t\t\t\t\t\t\tStaus:\n\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__control\">\n\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" [(ngModel)] = \"dropDownValue\" name=\"search_value\" (change)=\"search();\">\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">All</option>\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"Active\">Active</option>\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"Inactive\">Inactive</option>\n\t\t\t\t\t\t\t\t\t\t</select>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"d-md-none m--margin-bottom-10\"></div>\n\t\t\t\t\t\t\t</div> -->\n\n\t\t\t\t\t\t\t<!-- <div class=\"col-md-4\">\n\t\t\t\t\t\t\t\t<div class=\"m-input-icon m-input-icon--left\">\n\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input  m-input--solid\" id=\"generalSearch\" [(ngModel)] = \"searchValue\" placeholder=\"Search by Name\" type=\"text\" name=\"search_value\">\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div> -->\n\n\t\t\t\t\t\t<!-- \t<div class=\"col-md-4\">\n\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill\"(click)=\"search();\">\n\t\t\t\t\t\t\t\t\t\t<span>Search</span>\n\t\t\t\t\t\t\t\t</button>\n\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<div class=\"m-separator m-separator--dashed d-xl-none\"></div>\n\t\t\t\t\t\t\t</div>  -->\n\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t\t\t\t\n\t\t\t<div class=\"m_datatable m-datatable m-datatable--default m-datatable--loaded\" id=\"local_data\" style=\"position: static; zoom: 1;\">\n\t\t\t\t<table class=\"m-datatable__table\" style=\"display: block; min-height: 300px; overflow-x: auto;\">\n\n\t\t\t\t\t<thead class=\"m-datatable__head\">\n\n\t\t\t\t\t\t<tr class=\"m-datatable__row\" style=\"left: 0px;\">\n\n\t\t\t\t\t\t\t<th data-field=\"ShipName\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\"><span style=\"width: 110px;\">Color Name</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"ShipName\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\"><span style=\"width: 110px;\">Color Code</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t<th data-field=\"Status\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Status</span>\n\t\t\t\t\t\t\t</th>\n\n\n\t\t\t\t\t\t\t<!-- <th data-field=\"Actions\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Actions</span>\n\t\t\t\t\t\t\t</th> -->\n\n\t\t\t\t\t\t</tr>\n\n\t\t\t\t\t</thead>\n\n\t\t\t\t\t<tbody class=\"m-datatable__body\" style=\"\">\n\n\t\t\t\t\t\t<tr data-row=\"0\" *ngFor=\"let color of colorData | paginate: { itemsPerPage: 10, currentPage: p }\" class=\"m-datatable__row\" style=\"left: 0px;\">\n\n\t\t\t\t\t\t\t\t<td data-field=\"Currency\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 100px;\">{{color.color_name}}</span>\n\t\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t\t\t<td data-field=\"Currency\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 100px;\">{{color.color_code}}</span>\n\t\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<td data-field=\"Status\"  class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\" (click) = \"changeStatus(color)\">\n\t\t\t\t\t\t\t\t\t\t<span class=\"m-badge--wide m-badge\" [ngClass]=\"{'m-badge--success':  color.status == 'Active', 'm-badge--danger':  color.status != 'Active'}\" >{{color.status}}\n\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<!-- <td data-field=\"Actions\" class=\"m-datatable__cell\">\n\n\t\t\t\t\t\t\t\t\t<span style=\"overflow: visible; position: relative; width: 110px;\">\n  \t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill\" title=\"Delete\" (click)=\"vendor_delete(color.id)\"> \n\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-trash\"></i>  \n\t\t\t\t\t\t\t\t\t\t</a>\n\n\t\t\t\t\t\t\t\t\t</span>\t\n\t\t\t\t\t\t\t\t</td> -->\n\t\t\t\t\t\t\t</tr>\n\n\t\t\t\t\t\t</tbody>\n\n\t\t\t\t\t</table>\n\n\t\t\t\t\t<pagination-controls (pageChange)=\"p = $event\"></pagination-controls>\n\t\n\t\t\t\t</div>\n\t\t</div>\n</div>"

/***/ }),

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/default.component.html":
/*!**************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/pages/default/default.component.html ***!
  \**************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<app-side-bar></app-side-bar>\n<app-aside-nav></app-aside-nav>\n<div class=\"m-grid__item m-grid__item--fluid m-wrapper\">\n\t<router-outlet></router-outlet>\n</div>\n"

/***/ }),

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/product/shareable-products/edit-shareable-product/edit-shareable-product.component.html":
/*!*******************************************************************************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/pages/default/product/shareable-products/edit-shareable-product/edit-shareable-product.component.html ***!
  \*******************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<!--  <span class=\"side-bar-close\" (click) = \"closeSidebar()\">\n\t\t\t<i class=\"la la-close\"></i>\n</span> -->\n<span><h4>Shareable Product Details</h4></span>\n&nbsp;\n<br> \n\nProduct Name:<input class=\"form-control m-input\" [readonly]=\"isReadOnly\" placeholder=\"Enter First Name\" type=\"text\" [(ngModel)]=\"selectedProductData.product_name\">\nSKU:<input class=\"form-control m-input\" [readonly]=\"isReadOnly\" placeholder=\"Enter Last Name\" type=\"text\" [(ngModel)]=\"selectedProductData.sku\">\n<div class=\"col-md-12\">\n\n\t<!-- <button *ngIf=\"isReadOnly\" type=\"button\" class=\"btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill\"(click)=\"editMode();\">\n\t\t\t<span>Edit</span>\n\t</button> -->\n\n\t<button *ngIf=\"isReadOnly\" type=\"button\" class=\"btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill\" routerLink=\"/product/shareable-product-detail/{{selectedProductData.product_id}}\">\n\t\t\t<span>View More</span>\n\t</button>\n\n\t<button *ngIf=\"isReadOnly\" type=\"button\" class=\"btn btn-danger m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill\" (click) = \"closeSidebar()\">\n\t\t\t<span>Close</span>\n\t</button>\n\n\t<button *ngIf=\"isReadOnly == false\" type=\"button\" class=\"btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill\"(click)=\"UpdateVendor();\">\n\t\t\t<span>Update</span>\n\t</button>\n\n\t<div class=\"m-separator m-separator--dashed d-xl-none\"></div>\n</div> \n"

/***/ }),

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/size/add-size/add-size.component.html":
/*!*****************************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/pages/default/size/add-size/add-size.component.html ***!
  \*****************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/size/size-list/size-list.component.html":
/*!*******************************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/pages/default/size/size-list/size-list.component.html ***!
  \*******************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div>\n\t<div class=\"m-portlet m-portlet--mobile\">\n\t\t<div class=\"m-portlet__body\">\n\t\t\t<div class=\"col-lg-12\">\n\t\t\t\t<div class=\"m-portlet\">\n\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\">\n\t\t\t\t\t\t\t\t\t<i class=\"la la-gear\"></i>\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">\n\t\t\t\t\t\t\t\tAdd Size\n\t\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\n\n\t\t\t\t\t\n\t\t\t\t\t<form class=\"m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed\" [formGroup] =\"form\">\n\t\t\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\" >\n\t\t\t\t\t\t\t\t<div class=\"col-lg-4\" [ngClass]=\"displayFieldCss('size_name')\">\n\t\t\t\t\t\t\t\t\t<label for =\"['form_data']\" class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\tSize Name:\n\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input\"\n\t\t\t\t\t\t\t\t\t placeholder=\"Enter Name\" type=\"text\" id=\"size_name\" formControlName=\"size_name\">\n\t\t\t\t\t\t\t\t\t <app-field-error-display [displayError]=\"isFieldValid('size_name')\" errorMsg=\"Please Enter Size Name\">\n     \t\t\t\t\t\t\t\t</app-field-error-display>\n\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t<div class=\"col-lg-4\" [ngClass]=\"displayFieldCss('status')\">\n\n\t\t\t\t\t\t\t\t\t<label for =\"status\" class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\tStatus:\n\t\t\t\t\t\t\t\t\t</label>\n\n\t\t\t\t\t\t\t\t\t<select class=\"form-control\" formControlName=\"status\" [(ngModel)] = \"selectedStatus\">\n\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select Status</option>\n\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Active</option>\n\t\t\t\t\t\t\t\t\t\t<option value=\"0\">Inactive</option>\n\n\t\t\t\t\t\t\t\t\t</select>\n\t\t\t\t\t\t\t\t\t <app-field-error-display [displayError]=\"isFieldValid('status')\" errorMsg=\"Please Select Status\">\n     \t\t\t\t\t\t\t\t</app-field-error-display>\n\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-portlet__foot m-portlet__no-border m-portlet__foot--fit\">\n\t\t\t\t\t\t\t<div class=\"m-form__actions m-form__actions--solid\">\n\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">\n\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success\" (click)=\"onSubmit()\">\n\t\t\t\t\t\t\t\t\t\t\tSave\n\t\t\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger\" (click)=\"reset()\">\n\t\t\t\t\t\t\t\t\t\t\tReset\n\t\t\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</form>\t\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n\t</div>\n</div>\n<div class=\"m-portlet m-portlet--mobile\">\n\t\t<div class=\"m-portlet__body\">\n\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\"><i class=\"la la-gear\"></i></span>\n\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">List Size</h3>\n\n\t\t\t\t\t\t\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\n\t\t\t<div class=\"m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30\">\n\t\t\t\t<div class=\"row align-items-center\">\n\t\t\t\t\t<div class=\"col-xl-12 order-2 order-xl-1\">\n\t\t\t\t\t\t<div class=\"form-group m-form__group row align-items-center\">\n\n\t\t\t\t\t\t\t<!-- <div class=\"col-md-4\">\n\t\t\t\t\t\t\t\t<div class=\"m-form__group m-form__group--inline\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__label\">\n\t\t\t\t\t\t\t\t\t\t<label class=\"m-label m-label--single\">\n\t\t\t\t\t\t\t\t\t\t\tStaus:\n\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__control\">\n\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" [(ngModel)] = \"dropDownValue\" name=\"search_value\" (change)=\"search();\">\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">All</option>\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"Active\">Active</option>\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"Inactive\">Inactive</option>\n\t\t\t\t\t\t\t\t\t\t</select>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"d-md-none m--margin-bottom-10\"></div>\n\t\t\t\t\t\t\t</div> -->\n\n\t\t\t\t\t\t\t<!-- <div class=\"col-md-4\">\n\t\t\t\t\t\t\t\t<div class=\"m-input-icon m-input-icon--left\">\n\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input  m-input--solid\" id=\"generalSearch\" [(ngModel)] = \"searchValue\" placeholder=\"Search by Name\" type=\"text\" name=\"search_value\">\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div> -->\n\n\t\t\t\t\t\t\t<!-- <div class=\"col-md-4\">\n\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill\"(click)=\"search();\">\n\t\t\t\t\t\t\t\t\t\t<span>Search</span>\n\t\t\t\t\t\t\t\t</button>\n\n\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<div class=\"m-separator m-separator--dashed d-xl-none\"></div>\n\t\t\t\t\t\t\t</div> --> \n\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t\t\t\t\n\t\t\t<div class=\"m_datatable m-datatable m-datatable--default m-datatable--loaded\" id=\"local_data\" style=\"position: static; zoom: 1;\">\n\t\t\t\t<table class=\"m-datatable__table\" style=\"display: block; min-height: 300px; overflow-x: auto;\">\n\n\t\t\t\t\t<thead class=\"m-datatable__head\">\n\n\t\t\t\t\t\t<tr class=\"m-datatable__row\" style=\"left: 0px;\">\n\n\t\t\t\t\t\t\t<th data-field=\"ShipName\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\"><span style=\"width: 110px;\">Size Name</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t<th data-field=\"Status\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Status</span>\n\t\t\t\t\t\t\t</th>\n\n\n\t\t\t\t\t\t\t<!-- <th data-field=\"Actions\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Actions</span>\n\t\t\t\t\t\t\t</th> -->\n\n\t\t\t\t\t\t</tr>\n\n\t\t\t\t\t</thead>\n\n\t\t\t\t\t<tbody class=\"m-datatable__body\" style=\"\">\n\n\t\t\t\t\t\t<tr data-row=\"0\" *ngFor=\"let size of sizeData | paginate: { itemsPerPage: 10, currentPage: p }\" class=\"m-datatable__row\" style=\"left: 0px;\">\n\n\t\t\t\t\t\t\t\t<td data-field=\"Currency\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 100px;\">{{size.size_name}}</span>\n\t\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<td data-field=\"Status\"  class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\" (click) = \"changeStatus(size)\">\n\t\t\t\t\t\t\t\t\t\t<span class=\"m-badge--wide m-badge\" [ngClass]=\"{'m-badge--success':  size.status == 'Active', 'm-badge--danger':  size.status != 'Active'}\" >{{size.status}}\n\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t<!-- <td data-field=\"Actions\" class=\"m-datatable__cell\">\n\n\t\t\t\t\t\t\t\t\t<span style=\"overflow: visible; position: relative; width: 110px;\">\n\t\t\n  \t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill\" title=\"Delete\" (click)=\"vendor_delete(size.id)\"> \n\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-trash\"></i>  \n\t\t\t\t\t\t\t\t\t\t</a>\n\n\t\t\t\t\t\t\t\t\t</span>\t\n\n\t\t\t\t\t\t\t\t</td> -->\n\n\t\t\t\t\t\t\t</tr>\n\n\t\t\t\t\t\t</tbody>\n\n\t\t\t\t\t</table>\n\n\t\t\t\t\t<pagination-controls (pageChange)=\"p = $event\"></pagination-controls>\n\t\n\t\t\t\t</div>\n\t\t</div>\n</div>\n"

/***/ }),

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/tags/add-tag/add-tag.component.html":
/*!***************************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/pages/default/tags/add-tag/add-tag.component.html ***!
  \***************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ""

/***/ }),

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/tags/tag-list/tag-list.component.html":
/*!*****************************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/pages/default/tags/tag-list/tag-list.component.html ***!
  \*****************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "\n<div>\n\t<div class=\"m-portlet m-portlet--mobile\">\n\t\t<div class=\"m-portlet__body\">\n\t\t\t<div class=\"col-lg-12\">\n\t\t\t\t<div class=\"m-portlet\">\n\t\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\">\n\t\t\t\t\t\t\t\t\t<i class=\"la la-gear\"></i>\n\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">\n\t\t\t\t\t\t\t\tAdd Tag\n\t\t\t\t\t\t\t\t</h3>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\n\n\t\t\t\t\t\n\t\t\t\t\t<form class=\"m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed\" [formGroup] =\"form\">\n\t\t\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\t\t\t<div class=\"form-group m-form__group row\" >\n\t\t\t\t\t\t\t\t<div class=\"col-lg-4\" [ngClass]=\"displayFieldCss('tag_name')\">\n\t\t\t\t\t\t\t\t\t<label for =\"['form_data']\" class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\tTag Name:\n\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input\"\n\t\t\t\t\t\t\t\t\t placeholder=\"Enter Name\" type=\"text\" id=\"tag_name\" formControlName=\"tag_name\">\n\t\t\t\t\t\t\t\t\t <app-field-error-display [displayError]=\"isFieldValid('tag_name')\" errorMsg=\"Please Enter Tag Name\">\n     \t\t\t\t\t\t\t\t</app-field-error-display>\n\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t<div class=\"col-lg-4\" [ngClass]=\"displayFieldCss('description')\">\n\t\t\t\t\t\t\t\t\t<label for =\"['form_data']\" class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\tDescription:\n\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input\"\n\t\t\t\t\t\t\t\t\t placeholder=\"Enter Description\" type=\"text\" id=\"description\" formControlName=\"description\">\n\t\t\t\t\t\t\t\t\t <app-field-error-display [displayError]=\"isFieldValid('description')\" errorMsg=\"Please Enter Description\">\n     \t\t\t\t\t\t\t\t</app-field-error-display>\n\t\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t\t<div class=\"col-lg-4\" [ngClass]=\"displayFieldCss('status')\">\n\n\t\t\t\t\t\t\t\t\t<label for =\"status\" class=\"control-label required\">\n\t\t\t\t\t\t\t\t\t\tStatus:\n\t\t\t\t\t\t\t\t\t</label>\n\n\t\t\t\t\t\t\t\t\t<select class=\"form-control\" formControlName=\"status\" [(ngModel)] = \"selectedStatus\">\n\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select Status</option>\n\t\t\t\t\t\t\t\t\t\t<option value=\"1\">Active</option>\n\t\t\t\t\t\t\t\t\t\t<option value=\"0\">Inactive</option>\n\n\t\t\t\t\t\t\t\t\t</select>\n\t\t\t\t\t\t\t\t\t <app-field-error-display [displayError]=\"isFieldValid('status')\" errorMsg=\"Please Select Status\">\n     \t\t\t\t\t\t\t\t</app-field-error-display>\n\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"m-portlet__foot m-portlet__no-border m-portlet__foot--fit\">\n\t\t\t\t\t\t\t<div class=\"m-form__actions m-form__actions--solid\">\n\t\t\t\t\t\t\t\t<div class=\"row\">\n\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">\n\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success\" (click)=\"onSubmit()\">\n\t\t\t\t\t\t\t\t\t\t\tSave\n\t\t\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger\" (click)=\"reset()\">\n\t\t\t\t\t\t\t\t\t\t\tReset\n\t\t\t\t\t\t\t\t\t\t</button>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</form>\t\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t</div>\n\t</div>\n</div>\n<div class=\"m-portlet m-portlet--mobile\">\n\t\t<div class=\"m-portlet__body\">\n\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\"><i class=\"la la-gear\"></i></span>\n\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">List Tags</h3>\n\n\t\t\t\t\t\t\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\n\t\t\t<div class=\"m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30\">\n\t\t\t\t<div class=\"row align-items-center\">\n\t\t\t\t\t<div class=\"col-xl-12 order-2 order-xl-1\">\n\t\t\t\t\t\t<div class=\"form-group m-form__group row align-items-center\">\n\n\t\t\t\t\t\t\t<div class=\"col-md-4\">\n\t\t\t\t\t\t\t\t<div class=\"m-form__group m-form__group--inline\">\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__label\">\n\t\t\t\t\t\t\t\t\t\t<label class=\"m-label m-label--single\">\n\t\t\t\t\t\t\t\t\t\t\tStaus:\n\t\t\t\t\t\t\t\t\t\t</label>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t<div class=\"m-form__control\">\n\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" [(ngModel)] = \"dropDownValue\" name=\"search_value\" (change)=\"searchTag();\">\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">All</option>\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"Active\">Active</option>\n\t\t\t\t\t\t\t\t\t\t\t<option value=\"Inactive\">Inactive</option>\n\t\t\t\t\t\t\t\t\t\t</select>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"d-md-none m--margin-bottom-10\"></div>\n\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t<div class=\"col-md-4\">\n\t\t\t\t\t\t\t\t<div class=\"m-input-icon m-input-icon--left\">\n\t\t\t\t\t\t\t\t\t<input class=\"form-control m-input  m-input--solid\" id=\"generalSearch\" [(ngModel)] = \"searchValue\" placeholder=\"Search by Name / Description\" type=\"text\" name=\"search_value\">\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\n\t\t\t\t\t\t\t<div class=\"col-md-4\">\n\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill\"(click)=\"searchTag();\">\n\t\t\t\t\t\t\t\t\t\t<span>Search</span>\n\t\t\t\t\t\t\t\t</button>\n\n\t\t\t\t\t\t\t\t\t<!-- <button class=\"btn btn-danger m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill\" (click)=\"reset()\">\n\t\t\t\t\t\t\t\t\t\t\tReset\n\t\t\t\t\t\t\t\t\t\t</button> -->\n\t\t\t\t\t\t\t\t<div class=\"m-separator m-separator--dashed d-xl-none\"></div>\n\t\t\t\t\t\t\t</div> \n\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t\t\t\t\n\t\t\t<div class=\"m_datatable m-datatable m-datatable--default m-datatable--loaded\" id=\"local_data\" style=\"position: static; zoom: 1;\">\n\t\t\t\t<table class=\"m-datatable__table\" style=\"display: block; min-height: 300px; overflow-x: auto;\">\n\n\t\t\t\t\t<thead class=\"m-datatable__head\">\n\n\t\t\t\t\t\t<tr class=\"m-datatable__row\" style=\"left: 0px;\">\n\n\t\t\t\t\t\t\t<th data-field=\"ShipName\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\"><span style=\"width: 110px;\">Tag Name</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t<th data-field=\"ShipName\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\"><span style=\"width: 110px;\">Description</span>\n\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t<th data-field=\"Status\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Status</span>\n\t\t\t\t\t\t\t</th>\n\n\n\t\t\t\t\t\t\t<!-- <th data-field=\"Actions\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 110px;\">Actions</span>\n\t\t\t\t\t\t\t</th> -->\n\n\t\t\t\t\t\t</tr>\n\n\t\t\t\t\t</thead>\n\n\t\t\t\t\t<tbody class=\"m-datatable__body\" style=\"\">\n\n\t\t\t\t\t\t<tr data-row=\"0\" *ngFor=\"let tag of tagData | paginate: { itemsPerPage: 10, currentPage: p }\" class=\"m-datatable__row\" style=\"left: 0px;\">\n\n\t\t\t\t\t\t\t\t<td data-field=\"Currency\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 100px;\">{{tag.tag_name}}</span>\n\t\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t\t\t<td data-field=\"Currency\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 100px;\">{{tag.description}}</span>\n\t\t\t\t\t\t\t\t</td>\n\n\t\t\t\t\t\t\t\t<td data-field=\"Status\"  class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\" (click) = \"changeStatus(tag)\">\n\t\t\t\t\t\t\t\t\t\t<span class=\"m-badge--wide m-badge\" [ngClass]=\"{'m-badge--success':  tag.status == 'Active', 'm-badge--danger':  tag.status != 'Active'}\" >{{tag.status}}\n\t\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t\t</span>\n\t\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t\t\t<!-- <td data-field=\"Actions\" class=\"m-datatable__cell\">\n\n\t\t\t\t\t\t\t\t\t<span style=\"overflow: visible; position: relative; width: 110px;\">\n  \t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill\" title=\"Delete\" (click)=\"tag_delete(tag.id)\"> \n\t\t\t\t\t\t\t\t\t\t\t<i class=\"la la-trash\"></i>  \n\t\t\t\t\t\t\t\t\t\t</a>\n\n\t\t\t\t\t\t\t\t\t</span>\t\n\n\t\t\t\t\t\t\t\t</td> -->\n\n\t\t\t\t\t\t\t</tr>\n\n\t\t\t\t\t\t</tbody>\n\n\t\t\t\t\t</table>\n\n\t\t\t\t\t<pagination-controls (pageChange)=\"p = $event\"></pagination-controls>\n\t\n\t\t\t\t</div>\n\t\t</div>\n</div>"

/***/ }),

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/vendor/vendor-edit/vendor-edit.component.html":
/*!*************************************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/pages/default/vendor/vendor-edit/vendor-edit.component.html ***!
  \*************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<!--  <span class=\"side-bar-close\" (click) = \"closeSidebar()\">\n\t\t\t<i class=\"la la-close\"></i>\n</span> -->\n<span><h4>Vendor Details</h4></span>\n&nbsp;\n<br> \n\nFirst Name:<input class=\"form-control m-input\" [readonly]=\"isReadOnly\" placeholder=\"Enter First Name\" type=\"text\" [(ngModel)]=\"selectedVendorData.f_name\">\nLast Name:<input class=\"form-control m-input\" [readonly]=\"isReadOnly\" placeholder=\"Enter Last Name\" type=\"text\" [(ngModel)]=\"selectedVendorData.l_name\">\nEmail:<input class=\"form-control m-input\" [readonly]=\"isReadOnly\" placeholder=\"Enter Email\" type=\"text\" [(ngModel)]=\"selectedVendorData.email\">\nUserName:<input class=\"form-control m-input\" [readonly]=\"isReadOnly\" placeholder=\"Enter UserName\" type=\"text\" [(ngModel)]=\"selectedVendorData.user_name\">\nContact No.:<input class=\"form-control m-input\" [readonly]=\"isReadOnly\" placeholder=\"Enter Contact No\" type=\"text\" [(ngModel)]=\"selectedVendorData.contact_no\">\n\nAddress:<input class=\"form-control m-input\" [readonly]=\"isReadOnly\" placeholder=\"Enter Address\" type=\"text\" [(ngModel)]=\"selectedVendorData.address\">\n<br/><br/>\n<div class=\"col-md-12\">\n\n\t<!-- <button *ngIf=\"isReadOnly\" type=\"button\" class=\"btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill\"(click)=\"editMode();\">\n\t\t\t<span>Edit</span>\n\t</button> -->\n\t<button *ngIf=\"isReadOnly\" type=\"button\" class=\"btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill\" routerLink=\"/vendor/vendor-detail/{{selectedVendorData.id}}\">\n\t\t\t<span>View More</span>\n\t</button>\n\n\t<button *ngIf=\"isReadOnly\" type=\"button\" class=\"btn btn-danger m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill\" (click) = \"closeSidebar()\">\n\t\t\t<span>Close</span>\n\t</button>\n\n\t<button *ngIf=\"isReadOnly == false\" type=\"button\" class=\"btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill\"(click)=\"UpdateVendor();\">\n\t\t\t<span>Update</span>\n\t</button>\n\n\t<div class=\"m-separator m-separator--dashed d-xl-none\"></div>\n</div> \n"

/***/ }),

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/theme.component.html":
/*!**********************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/theme.component.html ***!
  \**********************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<app-header-nav></app-header-nav>\n<!-- begin::Body -->\n<router-outlet></router-outlet>\n<!-- end:: Body -->\n<app-footer></app-footer>\n"

/***/ }),

/***/ "./src/$$_lazy_route_resource lazy recursive":
/*!**********************************************************!*\
  !*** ./src/$$_lazy_route_resource lazy namespace object ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function webpackEmptyAsyncContext(req) {
	// Here Promise.resolve().then() is used instead of new Promise() to prevent
	// uncaught exception popping up in devtools
	return Promise.resolve().then(function() {
		var e = new Error("Cannot find module '" + req + "'");
		e.code = 'MODULE_NOT_FOUND';
		throw e;
	});
}
webpackEmptyAsyncContext.keys = function() { return []; };
webpackEmptyAsyncContext.resolve = webpackEmptyAsyncContext;
module.exports = webpackEmptyAsyncContext;
webpackEmptyAsyncContext.id = "./src/$$_lazy_route_resource lazy recursive";

/***/ }),

/***/ "./src/app/_directives/href-prevent-default.directive.ts":
/*!***************************************************************!*\
  !*** ./src/app/_directives/href-prevent-default.directive.ts ***!
  \***************************************************************/
/*! exports provided: HrefPreventDefaultDirective */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "HrefPreventDefaultDirective", function() { return HrefPreventDefaultDirective; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");


let HrefPreventDefaultDirective = class HrefPreventDefaultDirective {
    constructor(el) {
        this.el = el;
    }
    ngAfterViewInit() {
    }
    preventDefault(event) {
        if (this.href.length === 0 || this.href === '#') {
            event.preventDefault();
        }
    }
};
tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])(),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", String)
], HrefPreventDefaultDirective.prototype, "href", void 0);
HrefPreventDefaultDirective = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Directive"])({
        selector: "[href]",
        host: { '(click)': 'preventDefault($event)' },
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_core__WEBPACK_IMPORTED_MODULE_1__["ElementRef"]])
], HrefPreventDefaultDirective);



/***/ }),

/***/ "./src/app/_directives/unwrap-tag.directive.ts":
/*!*****************************************************!*\
  !*** ./src/app/_directives/unwrap-tag.directive.ts ***!
  \*****************************************************/
/*! exports provided: UnwrapTagDirective */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "UnwrapTagDirective", function() { return UnwrapTagDirective; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _helpers__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../helpers */ "./src/app/helpers.ts");



let UnwrapTagDirective = class UnwrapTagDirective {
    constructor(el) {
        this.el = el;
    }
    ngAfterViewInit() {
        let nativeElement = this.el.nativeElement;
        _helpers__WEBPACK_IMPORTED_MODULE_2__["Helpers"].unwrapTag(nativeElement);
    }
};
UnwrapTagDirective = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Directive"])({
        selector: "[appunwraptag]",
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_core__WEBPACK_IMPORTED_MODULE_1__["ElementRef"]])
], UnwrapTagDirective);



/***/ }),

/***/ "./src/app/_services/data.service.ts":
/*!*******************************************!*\
  !*** ./src/app/_services/data.service.ts ***!
  \*******************************************/
/*! exports provided: DataService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "DataService", function() { return DataService; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var rxjs__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! rxjs */ "./node_modules/rxjs/_esm2015/index.js");



let DataService = class DataService {
    constructor() {
        this.data = {
            leftSidebar: true,
            header: true,
            rightSidebar: true
        };
        this.loaderState = false;
        this.loaderState$ = new rxjs__WEBPACK_IMPORTED_MODULE_2__["BehaviorSubject"](this.loaderState);
        this.sideBarData = new rxjs__WEBPACK_IMPORTED_MODULE_2__["BehaviorSubject"]({});
        this.activeMenu = new rxjs__WEBPACK_IMPORTED_MODULE_2__["BehaviorSubject"]('');
        this.productState = new rxjs__WEBPACK_IMPORTED_MODULE_2__["BehaviorSubject"]('1');
        this.notification = new rxjs__WEBPACK_IMPORTED_MODULE_2__["BehaviorSubject"](0);
    }
    setloaderState(state) {
        this.loaderState$.next(state);
    }
    getloaderState() {
        return this.loaderState$.asObservable();
    }
    setsideBarData(details) {
        this.sideBarData.next(details);
    }
    getsideBarData() {
        return this.sideBarData.asObservable();
    }
    setactiveMenu(details) {
        this.activeMenu.next(details);
    }
    getactiveMenu() {
        return this.activeMenu.asObservable();
    }
    setProductState(details) {
        this.productState.next(details);
    }
    getProductState() {
        return this.productState.asObservable();
    }
    setNotification(details) {
        this.notification.next(details);
    }
    getNotification() {
        return this.notification.asObservable();
    }
};
DataService = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])(),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [])
], DataService);



/***/ }),

/***/ "./src/app/_services/script-loader.service.ts":
/*!****************************************************!*\
  !*** ./src/app/_services/script-loader.service.ts ***!
  \****************************************************/
/*! exports provided: ScriptLoaderService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ScriptLoaderService", function() { return ScriptLoaderService; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_2__);



let ScriptLoaderService = class ScriptLoaderService {
    constructor() {
        this._scripts = [];
        //public _baseUrl: string = 'http://localhost:8000/api/';
        //public _imgBaseUrl: string = 'http://localhost/more-to-like/public/uploads/';
        this._baseUrl = 'https://admin-api.moretolike.com/api/';
        // public _baseUrl: string = 'http://localhost:8000/api/';
        this._imgBaseUrl = 'https://admin-api.moretolike.com/uploads/';
    }
    //  public _imgBaseUrl: string = 'http://localhost:8000/uploads/';
    /**
     * @deprecated
     * @param tag
     * @param {string} scripts
     * @returns {Promise<any[]>}
     */
    load(tag, ...scripts) {
        scripts.forEach((src) => {
            if (!this._scripts[src]) {
                this._scripts[src] = { src: src, loaded: false };
            }
        });
        let promises = [];
        scripts.forEach((src) => promises.push(this.loadScript(tag, src)));
        return Promise.all(promises);
    }
    /**
     * Lazy load list of scripts
     * @param tag
     * @param scripts
     * @param loadOnce
     * @returns {Promise<any[]>}
     */
    loadScripts(tag, scripts, loadOnce) {
        loadOnce = loadOnce || false;
        scripts.forEach((script) => {
            if (!this._scripts[script]) {
                this._scripts[script] = { src: script, loaded: false };
            }
        });
        let promises = [];
        scripts.forEach((script) => promises.push(this.loadScript(tag, script, loadOnce)));
        return Promise.all(promises);
    }
    /**
     * Lazy load a single script
     * @param tag
     * @param {string} src
     * @param loadOnce
     * @returns {Promise<any>}
     */
    loadScript(tag, src, loadOnce) {
        loadOnce = loadOnce || false;
        if (!this._scripts[src]) {
            this._scripts[src] = { src: src, loaded: false };
        }
        return new Promise((resolve, reject) => {
            // resolve if already loaded
            if (this._scripts[src].loaded && loadOnce) {
                resolve({ src: src, loaded: true });
            }
            else {
                // load script tag
                let scriptTag = jquery__WEBPACK_IMPORTED_MODULE_2__('<script/>').
                    attr('type', 'text/javascript').
                    attr('src', this._scripts[src].src);
                jquery__WEBPACK_IMPORTED_MODULE_2__(tag).append(scriptTag);
                this._scripts[src] = { src: src, loaded: true };
                resolve({ src: src, loaded: true });
            }
        });
    }
};
ScriptLoaderService = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])()
], ScriptLoaderService);



/***/ }),

/***/ "./src/app/app-routing.module.ts":
/*!***************************************!*\
  !*** ./src/app/app-routing.module.ts ***!
  \***************************************/
/*! exports provided: AppRoutingModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AppRoutingModule", function() { return AppRoutingModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var _auth_logout_logout_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./auth/logout/logout.component */ "./src/app/auth/logout/logout.component.ts");




const routes = [
    { path: 'login', loadChildren: () => Promise.resolve(/*! import() */).then(__webpack_require__.bind(null, /*! ./auth/auth.module */ "./src/app/auth/auth.module.ts")).then(m => m.AuthModule) },
    { path: 'logout', component: _auth_logout_logout_component__WEBPACK_IMPORTED_MODULE_3__["LogoutComponent"] },
    { path: '', redirectTo: 'index', pathMatch: 'full' },
];
let AppRoutingModule = class AppRoutingModule {
};
AppRoutingModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        imports: [_angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"].forRoot(routes)],
        exports: [_angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"]]
    })
], AppRoutingModule);



/***/ }),

/***/ "./src/app/app.component.ts":
/*!**********************************!*\
  !*** ./src/app/app.component.ts ***!
  \**********************************/
/*! exports provided: AppComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AppComponent", function() { return AppComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var _helpers__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./helpers */ "./src/app/helpers.ts");




let AppComponent = class AppComponent {
    constructor(_router) {
        this._router = _router;
        this.title = 'app';
        this.globalBodyClass = 'm-page--loading-non-block m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default';
    }
    ngOnInit() {
        this._router.events.subscribe((route) => {
            if (route instanceof _angular_router__WEBPACK_IMPORTED_MODULE_2__["NavigationStart"]) {
                _helpers__WEBPACK_IMPORTED_MODULE_3__["Helpers"].setLoading(true);
                _helpers__WEBPACK_IMPORTED_MODULE_3__["Helpers"].bodyClass(this.globalBodyClass);
            }
            if (route instanceof _angular_router__WEBPACK_IMPORTED_MODULE_2__["NavigationEnd"]) {
                _helpers__WEBPACK_IMPORTED_MODULE_3__["Helpers"].setLoading(false);
            }
        });
    }
};
AppComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'body',
        template: __webpack_require__(/*! raw-loader!./app.component.html */ "./node_modules/raw-loader/index.js!./src/app/app.component.html"),
        encapsulation: _angular_core__WEBPACK_IMPORTED_MODULE_1__["ViewEncapsulation"].None,
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_router__WEBPACK_IMPORTED_MODULE_2__["Router"]])
], AppComponent);



/***/ }),

/***/ "./src/app/app.module.ts":
/*!*******************************!*\
  !*** ./src/app/app.module.ts ***!
  \*******************************/
/*! exports provided: AppModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AppModule", function() { return AppModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_platform_browser__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/platform-browser */ "./node_modules/@angular/platform-browser/fesm2015/platform-browser.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _theme_theme_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./theme/theme.component */ "./src/app/theme/theme.component.ts");
/* harmony import */ var _theme_layouts_layout_module__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./theme/layouts/layout.module */ "./src/app/theme/layouts/layout.module.ts");
/* harmony import */ var _angular_platform_browser_animations__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/platform-browser/animations */ "./node_modules/@angular/platform-browser/fesm2015/animations.js");
/* harmony import */ var _app_routing_module__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./app-routing.module */ "./src/app/app-routing.module.ts");
/* harmony import */ var _app_component__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./app.component */ "./src/app/app.component.ts");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");
/* harmony import */ var _theme_theme_routing_module__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./theme/theme-routing.module */ "./src/app/theme/theme-routing.module.ts");
/* harmony import */ var _auth_auth_module__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./auth/auth.module */ "./src/app/auth/auth.module.ts");
/* harmony import */ var _amcharts_amcharts3_angular__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! @amcharts/amcharts3-angular */ "./node_modules/@amcharts/amcharts3-angular/es2015/index.js");
/* harmony import */ var ngx_toastr__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ngx-toastr */ "./node_modules/ngx-toastr/fesm2015/ngx-toastr.js");













let AppModule = class AppModule {
};
AppModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_2__["NgModule"])({
        declarations: [
            _theme_theme_component__WEBPACK_IMPORTED_MODULE_3__["ThemeComponent"],
            _app_component__WEBPACK_IMPORTED_MODULE_7__["AppComponent"],
        ],
        imports: [
            _theme_layouts_layout_module__WEBPACK_IMPORTED_MODULE_4__["LayoutModule"],
            _angular_platform_browser__WEBPACK_IMPORTED_MODULE_1__["BrowserModule"],
            _angular_platform_browser_animations__WEBPACK_IMPORTED_MODULE_5__["BrowserAnimationsModule"],
            _app_routing_module__WEBPACK_IMPORTED_MODULE_6__["AppRoutingModule"],
            _theme_theme_routing_module__WEBPACK_IMPORTED_MODULE_9__["ThemeRoutingModule"],
            _auth_auth_module__WEBPACK_IMPORTED_MODULE_10__["AuthModule"],
            // NotificationsModule,
            ngx_toastr__WEBPACK_IMPORTED_MODULE_12__["ToastrModule"].forRoot({
                timeOut: 5000,
                positionClass: 'toast-top-center',
                preventDuplicates: true,
            }),
            _amcharts_amcharts3_angular__WEBPACK_IMPORTED_MODULE_11__["AmChartsModule"]
            //MatTabsModule,
        ],
        providers: [_services_script_loader_service__WEBPACK_IMPORTED_MODULE_8__["ScriptLoaderService"]],
        bootstrap: [_app_component__WEBPACK_IMPORTED_MODULE_7__["AppComponent"]]
    })
], AppModule);



/***/ }),

/***/ "./src/app/auth/_directives/alert.component.ts":
/*!*****************************************************!*\
  !*** ./src/app/auth/_directives/alert.component.ts ***!
  \*****************************************************/
/*! exports provided: AlertComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AlertComponent", function() { return AlertComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _services_index__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../_services/index */ "./src/app/auth/_services/index.ts");



let AlertComponent = class AlertComponent {
    constructor(_alertService) {
        this._alertService = _alertService;
    }
    ngOnInit() {
        this._alertService.getMessage().subscribe(message => {
            this.message = message;
        });
    }
};
AlertComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-alert',
        template: __webpack_require__(/*! raw-loader!./alert.component.html */ "./node_modules/raw-loader/index.js!./src/app/auth/_directives/alert.component.html")
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_services_index__WEBPACK_IMPORTED_MODULE_2__["AlertService"]])
], AlertComponent);



/***/ }),

/***/ "./src/app/auth/_guards/auth.guard.ts":
/*!********************************************!*\
  !*** ./src/app/auth/_guards/auth.guard.ts ***!
  \********************************************/
/*! exports provided: AuthGuard */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AuthGuard", function() { return AuthGuard; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var _services_user_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../_services/user.service */ "./src/app/auth/_services/user.service.ts");




let AuthGuard = class AuthGuard {
    constructor(_router, _userService) {
        this._router = _router;
        this._userService = _userService;
    }
    canActivate(route, state) {
        let currentUser = JSON.parse(localStorage.getItem('currentUser'));
        this._userService.islogin().subscribe(data => {
            console.log('found data');
            console.log(data);
        }, (err) => {
            console.log('sorry we got error in login');
            localStorage.removeItem('currentUser');
            localStorage.removeItem('subCategory');
            localStorage.removeItem('productType');
            localStorage.removeItem('menu');
            this._router.navigate(['/login'], { queryParams: { returnUrl: state.url } });
        });
        console.log('data', currentUser);
        if (currentUser && currentUser.token) {
            return true;
        }
        else {
            // error when verify so redirect to login page with the return url
            this._router.navigate(['/login'], { queryParams: { returnUrl: state.url } });
            return false;
        }
    }
};
AuthGuard = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])(),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_router__WEBPACK_IMPORTED_MODULE_2__["Router"], _services_user_service__WEBPACK_IMPORTED_MODULE_3__["UserService"]])
], AuthGuard);



/***/ }),

/***/ "./src/app/auth/_helpers/fake-backend.ts":
/*!***********************************************!*\
  !*** ./src/app/auth/_helpers/fake-backend.ts ***!
  \***********************************************/
/*! exports provided: mockBackEndFactory, fakeBackendProvider */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "mockBackEndFactory", function() { return mockBackEndFactory; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "fakeBackendProvider", function() { return fakeBackendProvider; });
/* harmony import */ var _angular_http__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/http */ "./node_modules/@angular/http/fesm2015/http.js");
/* harmony import */ var _angular_http_testing__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/http/testing */ "./node_modules/@angular/http/fesm2015/testing.js");


function mockBackEndFactory(backend, options, realBackend) {
    // array in local storage for registered users
    let users = JSON.parse(localStorage.getItem('users')) || [];
    // fake token
    let token = 'fake-jwt-token';
    // configure fake backend
    backend.connections.subscribe((connection) => {
        // wrap in timeout to simulate server api call
        setTimeout(() => {
            // authenticate
            if (connection.request.url.endsWith('/api/authenticate') && connection.request.method === _angular_http__WEBPACK_IMPORTED_MODULE_0__["RequestMethod"].Post) {
                // get parameters from post request
                let params = JSON.parse(connection.request.getBody());
                // find if any user matches login credentials
                let filteredUsers = users.filter(user => {
                    return user.email === params.email && user.password === params.password;
                });
                // default account
                if (params.email === 'demo@demo.com' && params.password === 'demo') {
                    filteredUsers[0] = {
                        fullName: 'Demo',
                        email: 'demo@demo.com',
                        password: 'demo',
                    };
                }
                if (filteredUsers.length) {
                    // if login details are valid return 200 OK with user details and fake jwt token
                    let user = filteredUsers[0];
                    connection.mockRespond(new _angular_http__WEBPACK_IMPORTED_MODULE_0__["Response"](new _angular_http__WEBPACK_IMPORTED_MODULE_0__["ResponseOptions"]({
                        status: 200,
                        body: {
                            id: user.id,
                            fullName: user.fullName,
                            email: user.email,
                            token: token
                        }
                    })));
                }
                else {
                    // else return 400 bad request
                    connection.mockError(new Error('Email or password is incorrect'));
                }
                return;
            }
            // get users
            if (connection.request.url.endsWith('/api/users') && connection.request.method === _angular_http__WEBPACK_IMPORTED_MODULE_0__["RequestMethod"].Get) {
                // check for fake auth token in header and return users if valid, this security
                // is implemented server side in a real application
                if (connection.request.headers.get('Authorization') === 'Bearer ' + token) {
                    connection.mockRespond(new _angular_http__WEBPACK_IMPORTED_MODULE_0__["Response"](new _angular_http__WEBPACK_IMPORTED_MODULE_0__["ResponseOptions"]({ status: 200, body: users })));
                }
                else {
                    // return 401 not authorised if token is null or invalid
                    connection.mockRespond(new _angular_http__WEBPACK_IMPORTED_MODULE_0__["Response"](new _angular_http__WEBPACK_IMPORTED_MODULE_0__["ResponseOptions"]({ status: 401 })));
                }
                return;
            }
            // get user by id
            if (connection.request.url.match(/\/api\/users\/\d+$/) && connection.request.method === _angular_http__WEBPACK_IMPORTED_MODULE_0__["RequestMethod"].Get) {
                // check for fake auth token in header and return user if valid, this security is implemented server side in a real application
                if (connection.request.headers.get('Authorization') === 'Bearer ' + token) {
                    // find user by id in users array
                    let urlParts = connection.request.url.split('/');
                    let id = parseInt(urlParts[urlParts.length - 1]);
                    let matchedUsers = users.filter(user => {
                        return user.id === id;
                    });
                    let user = matchedUsers.length ? matchedUsers[0] : null;
                    // respond 200 OK with user
                    connection.mockRespond(new _angular_http__WEBPACK_IMPORTED_MODULE_0__["Response"](new _angular_http__WEBPACK_IMPORTED_MODULE_0__["ResponseOptions"]({ status: 200, body: user })));
                }
                else {
                    // return 401 not authorised if token is null or invalid
                    connection.mockRespond(new _angular_http__WEBPACK_IMPORTED_MODULE_0__["Response"](new _angular_http__WEBPACK_IMPORTED_MODULE_0__["ResponseOptions"]({ status: 401 })));
                }
                return;
            }
            // create user
            if (connection.request.url.endsWith('/api/users') && connection.request.method === _angular_http__WEBPACK_IMPORTED_MODULE_0__["RequestMethod"].Post) {
                // get new user object from post body
                let newUser = JSON.parse(connection.request.getBody());
                // validation
                let duplicateUser = users.filter(user => {
                    return user.email === newUser.email;
                }).length;
                if (duplicateUser) {
                    return connection.mockError(new Error('Email "' + newUser.email + '" is already registered'));
                }
                // save new user
                newUser.id = users.length + 1;
                users.push(newUser);
                localStorage.setItem('users', JSON.stringify(users));
                // respond 200 OK
                connection.mockRespond(new _angular_http__WEBPACK_IMPORTED_MODULE_0__["Response"](new _angular_http__WEBPACK_IMPORTED_MODULE_0__["ResponseOptions"]({ status: 200 })));
                return;
            }
            // delete user
            if (connection.request.url.match(/\/api\/users\/\d+$/) && connection.request.method === _angular_http__WEBPACK_IMPORTED_MODULE_0__["RequestMethod"].Delete) {
                // check for fake auth token in header and return user if valid, this security is implemented server side in a real application
                if (connection.request.headers.get('Authorization') === 'Bearer ' + token) {
                    // find user by id in users array
                    let urlParts = connection.request.url.split('/');
                    let id = parseInt(urlParts[urlParts.length - 1]);
                    for (let i = 0; i < users.length; i++) {
                        let user = users[i];
                        if (user.id === id) {
                            // delete user
                            users.splice(i, 1);
                            localStorage.setItem('users', JSON.stringify(users));
                            break;
                        }
                    }
                    // respond 200 OK
                    connection.mockRespond(new _angular_http__WEBPACK_IMPORTED_MODULE_0__["Response"](new _angular_http__WEBPACK_IMPORTED_MODULE_0__["ResponseOptions"]({ status: 200 })));
                }
                else {
                    // return 401 not authorised if token is null or invalid
                    connection.mockRespond(new _angular_http__WEBPACK_IMPORTED_MODULE_0__["Response"](new _angular_http__WEBPACK_IMPORTED_MODULE_0__["ResponseOptions"]({ status: 401 })));
                }
                return;
            }
            // token verify
            if (connection.request.url.endsWith('/api/verify') && connection.request.method === _angular_http__WEBPACK_IMPORTED_MODULE_0__["RequestMethod"].Get) {
                // check for fake auth token in header and return users if valid, this security
                // is implemented server side in a real application
                if (connection.request.headers.get('Authorization') === 'Bearer ' + token) {
                    connection.mockRespond(new _angular_http__WEBPACK_IMPORTED_MODULE_0__["Response"](new _angular_http__WEBPACK_IMPORTED_MODULE_0__["ResponseOptions"]({ status: 200, body: { status: 'ok' } })));
                }
                else {
                    // return 401 not authorised if token is null or invalid
                    connection.mockRespond(new _angular_http__WEBPACK_IMPORTED_MODULE_0__["Response"](new _angular_http__WEBPACK_IMPORTED_MODULE_0__["ResponseOptions"]({ status: 401 })));
                }
                return;
            }
            // forgot password
            if (connection.request.url.endsWith('/api/forgot-password') && connection.request.method === _angular_http__WEBPACK_IMPORTED_MODULE_0__["RequestMethod"].Post) {
                // get parameters from post request
                let params = JSON.parse(connection.request.getBody());
                // find if any user matches login credentials
                let filteredUsers = users.filter(user => {
                    return user.email === params.email;
                });
                if (filteredUsers.length) {
                    // in real world, if email is valid, send email change password link
                    let user = filteredUsers[0];
                    connection.mockRespond(new _angular_http__WEBPACK_IMPORTED_MODULE_0__["Response"](new _angular_http__WEBPACK_IMPORTED_MODULE_0__["ResponseOptions"]({ status: 200 })));
                }
                else {
                    // else return 400 bad request
                    connection.mockError(new Error('User with this email does not exist'));
                }
                return;
            }
            // pass through any requests not handled above
            let realHttp = new _angular_http__WEBPACK_IMPORTED_MODULE_0__["Http"](realBackend, options);
            let requestOptions = new _angular_http__WEBPACK_IMPORTED_MODULE_0__["RequestOptions"]({
                method: connection.request.method,
                headers: connection.request.headers,
                body: connection.request.getBody(),
                url: connection.request.url,
                withCredentials: connection.request.withCredentials,
                responseType: connection.request.responseType
            });
            realHttp.request(connection.request.url, requestOptions)
                .subscribe((response) => {
                connection.mockRespond(response);
            }, (error) => {
                connection.mockError(error);
            });
        }, 500);
    });
    return new _angular_http__WEBPACK_IMPORTED_MODULE_0__["Http"](backend, options);
}
let fakeBackendProvider = {
    // use fake backend in place of Http service for backend-less development
    provide: _angular_http__WEBPACK_IMPORTED_MODULE_0__["Http"],
    deps: [_angular_http_testing__WEBPACK_IMPORTED_MODULE_1__["MockBackend"], _angular_http__WEBPACK_IMPORTED_MODULE_0__["BaseRequestOptions"], _angular_http__WEBPACK_IMPORTED_MODULE_0__["XHRBackend"]],
    useFactory: mockBackEndFactory
};


/***/ }),

/***/ "./src/app/auth/_helpers/index.ts":
/*!****************************************!*\
  !*** ./src/app/auth/_helpers/index.ts ***!
  \****************************************/
/*! exports provided: mockBackEndFactory, fakeBackendProvider */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _fake_backend__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./fake-backend */ "./src/app/auth/_helpers/fake-backend.ts");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "mockBackEndFactory", function() { return _fake_backend__WEBPACK_IMPORTED_MODULE_0__["mockBackEndFactory"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "fakeBackendProvider", function() { return _fake_backend__WEBPACK_IMPORTED_MODULE_0__["fakeBackendProvider"]; });




/***/ }),

/***/ "./src/app/auth/_services/alert.service.ts":
/*!*************************************************!*\
  !*** ./src/app/auth/_services/alert.service.ts ***!
  \*************************************************/
/*! exports provided: AlertService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AlertService", function() { return AlertService; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var rxjs_Subject__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! rxjs/Subject */ "./node_modules/rxjs-compat/_esm2015/Subject.js");




let AlertService = class AlertService {
    constructor(_router) {
        this._router = _router;
        this.subject = new rxjs_Subject__WEBPACK_IMPORTED_MODULE_3__["Subject"]();
        this.keepAfterNavigationChange = false;
        // clear alert message on route change
        _router.events.subscribe(event => {
            if (event instanceof _angular_router__WEBPACK_IMPORTED_MODULE_2__["NavigationStart"]) {
                if (this.keepAfterNavigationChange) {
                    // only keep for a single location change
                    this.keepAfterNavigationChange = false;
                }
                else {
                    // clear alert
                    this.subject.next();
                }
            }
        });
    }
    success(message, keepAfterNavigationChange = false) {
        this.keepAfterNavigationChange = keepAfterNavigationChange;
        this.subject.next({ type: 'success', text: message });
    }
    error(message, keepAfterNavigationChange = false) {
        this.keepAfterNavigationChange = keepAfterNavigationChange;
        this.subject.next({ type: 'danger', text: message });
    }
    getMessage() {
        return this.subject.asObservable();
    }
};
AlertService = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])(),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_router__WEBPACK_IMPORTED_MODULE_2__["Router"]])
], AlertService);



/***/ }),

/***/ "./src/app/auth/_services/authentication.service.ts":
/*!**********************************************************!*\
  !*** ./src/app/auth/_services/authentication.service.ts ***!
  \**********************************************************/
/*! exports provided: AuthenticationService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AuthenticationService", function() { return AuthenticationService; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/http */ "./node_modules/@angular/http/fesm2015/http.js");
/* harmony import */ var rxjs_add_operator_map__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! rxjs/add/operator/map */ "./node_modules/rxjs-compat/_esm2015/add/operator/map.js");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");





let AuthenticationService = class AuthenticationService {
    constructor(http, baseUrl) {
        this.http = http;
        this.baseUrl = baseUrl;
    }
    login(email, password) {
        //let headers = new HttpHeaders({ 'Content-Type': 'application/json' });
        //let options = { headers: headers };
        console.log('reached');
        return this.http.post(this.baseUrl._baseUrl + 'login', JSON.stringify({ email: email, password: password }))
            .map((response) => {
            // login successful if there's a jwt token in the response
            let user = response.json();
            console.log('user');
            console.log(user);
            user.token = user.success.token;
            if (user && user.token) {
                // store user details and jwt token in local storage to keep user logged in between page refreshes
                localStorage.setItem('currentUser', JSON.stringify(user));
            }
        });
    }
    logout() {
        let input;
        let currentUser = JSON.parse(localStorage.getItem('currentUser'));
        input = { 'user_id': currentUser.success.id, 'is_admin': false, 'own': false };
        this.http.post(this.baseUrl._baseUrl + 'logout', input, this.jwt()).map((response) => response.json());
        // remove user from local storage to log user out
        localStorage.removeItem('currentUser');
        localStorage.removeItem('subCategory');
        localStorage.removeItem('productType');
        localStorage.removeItem('menu');
    }
    jwt() {
        // create authorization header with jwt token
        let currentUser = JSON.parse(localStorage.getItem('currentUser'));
        if (currentUser && currentUser.token) {
            let headers = new _angular_http__WEBPACK_IMPORTED_MODULE_2__["Headers"]({ 'Authorization': 'Bearer ' + currentUser.token });
            return new _angular_http__WEBPACK_IMPORTED_MODULE_2__["RequestOptions"]({ headers: headers });
        }
    }
};
AuthenticationService = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])(),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_http__WEBPACK_IMPORTED_MODULE_2__["Http"], _services_script_loader_service__WEBPACK_IMPORTED_MODULE_4__["ScriptLoaderService"]])
], AuthenticationService);



/***/ }),

/***/ "./src/app/auth/_services/banner.service.ts":
/*!**************************************************!*\
  !*** ./src/app/auth/_services/banner.service.ts ***!
  \**************************************************/
/*! exports provided: BannerService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "BannerService", function() { return BannerService; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/http */ "./node_modules/@angular/http/fesm2015/http.js");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");




let BannerService = class BannerService {
    constructor(http, baseUrl) {
        this.http = http;
        this.baseUrl = baseUrl;
    }
    createBanner(banner) {
        return this.http.post(this.baseUrl._baseUrl + 'banner/add-banner', JSON.stringify(banner), this.jwt()).map((response) => response.json());
    }
    bulkUploadProduct(banner) {
        return this.http.post(this.baseUrl._baseUrl + 'product/add-product-bulk', JSON.stringify(banner), this.jwt()).map((response) => response.json());
    }
    createSlider(banner) {
        return this.http.post(this.baseUrl._baseUrl + 'slider/add-slider', JSON.stringify(banner), this.jwt()).map((response) => response.json());
    }
    getAll() {
        return this.http.get(this.baseUrl._baseUrl + 'banner/banner-list', this.jwt()).map((response) => response.json());
    }
    getProduct() {
        return this.http.get(this.baseUrl._baseUrl + 'slider/product-list', this.jwt()).map((response) => response.json());
    }
    getAllSlider() {
        return this.http.get(this.baseUrl._baseUrl + 'slider/slider-list', this.jwt()).map((response) => response.json());
    }
    updateStatus(id) {
        return this.http.post(this.baseUrl._baseUrl + 'banner/status', id, this.jwt()).map((response) => response.json());
    }
    bannerDelete(id) {
        return this.http.get(this.baseUrl._baseUrl + 'banner/delete/' + id, this.jwt()).map((response) => response.json());
    }
    sliderDelete(id) {
        return this.http.get(this.baseUrl._baseUrl + 'slider/delete/' + id, this.jwt()).map((response) => response.json());
    }
    /*  getMenu() {
          return this.http.get(this.baseUrl._baseUrl + 'brand/brandlist', this.jwt()).map((response: Response) => response.json());
      }
      getById(id: number) {
          return this.http.get(this.baseUrl._baseUrl + 'brand/info/' + id, this.jwt()).map((response: Response) => response.json());
      }
   
      brandDelete(id: number) {
          return this.http.get(this.baseUrl._baseUrl + 'brand/delete/' + id, this.jwt()).map((response: Response) => response.json());
      }
   
      searching(brand: any) {
          return this.http.post(this.baseUrl._baseUrl + 'brand/search', JSON.stringify(brand), this.jwt()).map((response: Response) => response.json());
      }
   
      createBrand(brand: any) {
          return this.http.post(this.baseUrl._baseUrl + 'brand/addBrand', JSON.stringify(brand), this.jwt()).map((response: Response) => response.json());
      }
   
      updateStatus(id: number) {
          return this.http.post(this.baseUrl._baseUrl + 'brand/status', id, this.jwt()).map((response: Response) => response.json());
      }*/
    // private helper methods
    jwt() {
        // create authorization header with jwt token
        let currentUser = JSON.parse(localStorage.getItem('currentUser'));
        if (currentUser && currentUser.token) {
            let headers = new _angular_http__WEBPACK_IMPORTED_MODULE_2__["Headers"]({ 'Authorization': 'Bearer ' + currentUser.token });
            return new _angular_http__WEBPACK_IMPORTED_MODULE_2__["RequestOptions"]({ headers: headers });
        }
    }
};
BannerService = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])(),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_http__WEBPACK_IMPORTED_MODULE_2__["Http"], _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__["ScriptLoaderService"]])
], BannerService);



/***/ }),

/***/ "./src/app/auth/_services/brand.service.ts":
/*!*************************************************!*\
  !*** ./src/app/auth/_services/brand.service.ts ***!
  \*************************************************/
/*! exports provided: BrandService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "BrandService", function() { return BrandService; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/http */ "./node_modules/@angular/http/fesm2015/http.js");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");




let BrandService = class BrandService {
    constructor(http, baseUrl) {
        this.http = http;
        this.baseUrl = baseUrl;
    }
    getAll() {
        return this.http.get(this.baseUrl._baseUrl + 'brand/brandlist', this.jwt()).map((response) => response.json());
    }
    getById(id) {
        return this.http.get(this.baseUrl._baseUrl + 'brand/info/' + id, this.jwt()).map((response) => response.json());
    }
    getByName(name) {
        return this.http.get(this.baseUrl._baseUrl + 'brand/name-search/' + name, this.jwt()).map((response) => response.json());
    }
    brandDelete(id) {
        return this.http.get(this.baseUrl._baseUrl + 'brand/delete/' + id, this.jwt()).map((response) => response.json());
    }
    searching(brand) {
        return this.http.post(this.baseUrl._baseUrl + 'brand/search', JSON.stringify(brand), this.jwt()).map((response) => response.json());
    }
    createBrand(brand) {
        return this.http.post(this.baseUrl._baseUrl + 'brand/addBrand', JSON.stringify(brand), this.jwt()).map((response) => response.json());
    }
    updateBrand(brand) {
        return this.http.post(this.baseUrl._baseUrl + 'brand/updateBrand', JSON.stringify(brand), this.jwt()).map((response) => response.json());
    }
    updateStatus(id) {
        return this.http.post(this.baseUrl._baseUrl + 'brand/status', id, this.jwt()).map((response) => response.json());
    }
    // private helper methods
    jwt() {
        // create authorization header with jwt token
        let currentUser = JSON.parse(localStorage.getItem('currentUser'));
        if (currentUser && currentUser.token) {
            let headers = new _angular_http__WEBPACK_IMPORTED_MODULE_2__["Headers"]({ 'Authorization': 'Bearer ' + currentUser.token });
            return new _angular_http__WEBPACK_IMPORTED_MODULE_2__["RequestOptions"]({ headers: headers });
        }
    }
};
BrandService = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])(),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_http__WEBPACK_IMPORTED_MODULE_2__["Http"], _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__["ScriptLoaderService"]])
], BrandService);



/***/ }),

/***/ "./src/app/auth/_services/category.service.ts":
/*!****************************************************!*\
  !*** ./src/app/auth/_services/category.service.ts ***!
  \****************************************************/
/*! exports provided: CategoryService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "CategoryService", function() { return CategoryService; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/http */ "./node_modules/@angular/http/fesm2015/http.js");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");




let CategoryService = class CategoryService {
    constructor(http, baseUrl) {
        this.http = http;
        this.baseUrl = baseUrl;
    }
    getAll() {
        return this.http.get(this.baseUrl._baseUrl + 'category/categorylist', this.jwt()).map((response) => response.json());
    }
    getById(id) {
        return this.http.get(this.baseUrl._baseUrl + 'category/info/' + id, this.jwt()).map((response) => response.json());
    }
    getByName(name) {
        return this.http.get(this.baseUrl._baseUrl + 'category/name-search/' + name, this.jwt()).map((response) => response.json());
    }
    updateCategory(category) {
        return this.http.post(this.baseUrl._baseUrl + 'category/updateCat', JSON.stringify(category), this.jwt()).map((response) => response.json());
    }
    categoryDelete(id) {
        return this.http.get(this.baseUrl._baseUrl + 'category/delete/' + id, this.jwt()).map((response) => response.json());
    }
    createCategory(category) {
        return this.http.post(this.baseUrl._baseUrl + 'category/addCategory', JSON.stringify(category), this.jwt()).map((response) => response.json());
    }
    updateStatus(id) {
        return this.http.post(this.baseUrl._baseUrl + 'category/status', id, this.jwt()).map((response) => response.json());
    }
    searching(category) {
        return this.http.post(this.baseUrl._baseUrl + 'category/search', JSON.stringify(category), this.jwt()).map((response) => response.json());
    }
    categoryListAss() {
        return this.http.get(this.baseUrl._baseUrl + 'category/categoryListAss', this.jwt()).map((response) => response.json());
    }
    // private helper methods
    jwt() {
        // create authorization header with jwt token
        let currentUser = JSON.parse(localStorage.getItem('currentUser'));
        if (currentUser && currentUser.token) {
            let headers = new _angular_http__WEBPACK_IMPORTED_MODULE_2__["Headers"]({ 'Authorization': 'Bearer ' + currentUser.token });
            return new _angular_http__WEBPACK_IMPORTED_MODULE_2__["RequestOptions"]({ headers: headers });
        }
    }
};
CategoryService = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])(),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_http__WEBPACK_IMPORTED_MODULE_2__["Http"], _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__["ScriptLoaderService"]])
], CategoryService);



/***/ }),

/***/ "./src/app/auth/_services/customer.service.ts":
/*!****************************************************!*\
  !*** ./src/app/auth/_services/customer.service.ts ***!
  \****************************************************/
/*! exports provided: CustomerService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "CustomerService", function() { return CustomerService; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/http */ "./node_modules/@angular/http/fesm2015/http.js");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");




let CustomerService = class CustomerService {
    constructor(http, baseUrl) {
        this.http = http;
        this.baseUrl = baseUrl;
    }
    getAll() {
        return this.http.get(this.baseUrl._baseUrl + 'customer/getall', this.jwt()).map((response) => response.json());
    }
    getById(id) {
        return this.http.get(this.baseUrl._baseUrl + 'customer/info/' + id, this.jwt()).map((response) => response.json());
    }
    del_customer(id) {
        return this.http.get(this.baseUrl._baseUrl + 'customer/delete/' + id, this.jwt()).map((response) => response.json());
    }
    searching(user) {
        return this.http.post(this.baseUrl._baseUrl + 'customer/search', JSON.stringify(user), this.jwt()).map((response) => response.json());
    }
    updateStatus(id) {
        return this.http.post(this.baseUrl._baseUrl + 'customer/status', id, this.jwt()).map((response) => response.json());
    }
    // private helper methods
    jwt() {
        // create authorization header with jwt token
        let currentUser = JSON.parse(localStorage.getItem('currentUser'));
        if (currentUser && currentUser.token) {
            let headers = new _angular_http__WEBPACK_IMPORTED_MODULE_2__["Headers"]({ 'Authorization': 'Bearer ' + currentUser.token });
            return new _angular_http__WEBPACK_IMPORTED_MODULE_2__["RequestOptions"]({ headers: headers });
        }
    }
};
CustomerService = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])(),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_http__WEBPACK_IMPORTED_MODULE_2__["Http"], _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__["ScriptLoaderService"]])
], CustomerService);



/***/ }),

/***/ "./src/app/auth/_services/dropship.service.ts":
/*!****************************************************!*\
  !*** ./src/app/auth/_services/dropship.service.ts ***!
  \****************************************************/
/*! exports provided: DropshipService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "DropshipService", function() { return DropshipService; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/http */ "./node_modules/@angular/http/fesm2015/http.js");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");




//import { dropship } from "../_models/index";
let DropshipService = class DropshipService {
    constructor(http, baseUrl) {
        this.http = http;
        this.baseUrl = baseUrl;
    }
    getAll() {
        return this.http.get(this.baseUrl._baseUrl + 'dropship/getall', this.jwt()).map((response) => response.json());
    }
    getById(id) {
        return this.http.get(this.baseUrl._baseUrl + 'dropship/info/' + id, this.jwt()).map((response) => response.json());
    }
    del_dropship(id) {
        return this.http.get(this.baseUrl._baseUrl + 'dropship/delete/' + id, this.jwt()).map((response) => response.json());
    }
    del_dropship_product(del_data) {
        return this.http.post(this.baseUrl._baseUrl + 'dropship/product_delete/', JSON.stringify(del_data), this.jwt()).map((response) => response.json());
    }
    searching(user) {
        return this.http.post(this.baseUrl._baseUrl + 'dropship/search', JSON.stringify(user), this.jwt()).map((response) => response.json());
    }
    updateStatus(id) {
        return this.http.post(this.baseUrl._baseUrl + 'dropship/status', id, this.jwt()).map((response) => response.json());
    }
    filter(product) {
        return this.http.post(this.baseUrl._baseUrl + 'dropship/search', JSON.stringify(product), this.jwt()).map((response) => response.json());
    }
    createCollection(product) {
        return this.http.post(this.baseUrl._baseUrl + 'dropship/addCollection', JSON.stringify(product), this.jwt()).map((response) => response.json());
    }
    // private helper methods
    jwt() {
        // create authorization header with jwt token
        let currentUser = JSON.parse(localStorage.getItem('currentUser'));
        if (currentUser && currentUser.token) {
            let headers = new _angular_http__WEBPACK_IMPORTED_MODULE_2__["Headers"]({ 'Authorization': 'Bearer ' + currentUser.token });
            return new _angular_http__WEBPACK_IMPORTED_MODULE_2__["RequestOptions"]({ headers: headers });
        }
    }
};
DropshipService = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])(),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_http__WEBPACK_IMPORTED_MODULE_2__["Http"], _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__["ScriptLoaderService"]])
], DropshipService);



/***/ }),

/***/ "./src/app/auth/_services/index.ts":
/*!*****************************************!*\
  !*** ./src/app/auth/_services/index.ts ***!
  \*****************************************/
/*! exports provided: AlertService, AuthenticationService, UserService, CustomerService, ReviewsService, SupportService, ReportsService, MenuService, CategoryService, SubCategoryService, ProductService, BrandService, BannerService, OrderService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _alert_service__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./alert.service */ "./src/app/auth/_services/alert.service.ts");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "AlertService", function() { return _alert_service__WEBPACK_IMPORTED_MODULE_0__["AlertService"]; });

/* harmony import */ var _authentication_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./authentication.service */ "./src/app/auth/_services/authentication.service.ts");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "AuthenticationService", function() { return _authentication_service__WEBPACK_IMPORTED_MODULE_1__["AuthenticationService"]; });

/* harmony import */ var _user_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./user.service */ "./src/app/auth/_services/user.service.ts");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "UserService", function() { return _user_service__WEBPACK_IMPORTED_MODULE_2__["UserService"]; });

/* harmony import */ var _customer_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./customer.service */ "./src/app/auth/_services/customer.service.ts");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "CustomerService", function() { return _customer_service__WEBPACK_IMPORTED_MODULE_3__["CustomerService"]; });

/* harmony import */ var _reviews_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./reviews.service */ "./src/app/auth/_services/reviews.service.ts");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "ReviewsService", function() { return _reviews_service__WEBPACK_IMPORTED_MODULE_4__["ReviewsService"]; });

/* harmony import */ var _support_service__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./support.service */ "./src/app/auth/_services/support.service.ts");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "SupportService", function() { return _support_service__WEBPACK_IMPORTED_MODULE_5__["SupportService"]; });

/* harmony import */ var _reports_service__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./reports.service */ "./src/app/auth/_services/reports.service.ts");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "ReportsService", function() { return _reports_service__WEBPACK_IMPORTED_MODULE_6__["ReportsService"]; });

/* harmony import */ var _menu_service__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./menu.service */ "./src/app/auth/_services/menu.service.ts");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "MenuService", function() { return _menu_service__WEBPACK_IMPORTED_MODULE_7__["MenuService"]; });

/* harmony import */ var _category_service__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./category.service */ "./src/app/auth/_services/category.service.ts");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "CategoryService", function() { return _category_service__WEBPACK_IMPORTED_MODULE_8__["CategoryService"]; });

/* harmony import */ var _subCategory_service__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./subCategory.service */ "./src/app/auth/_services/subCategory.service.ts");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "SubCategoryService", function() { return _subCategory_service__WEBPACK_IMPORTED_MODULE_9__["SubCategoryService"]; });

/* harmony import */ var _product_service__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./product.service */ "./src/app/auth/_services/product.service.ts");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "ProductService", function() { return _product_service__WEBPACK_IMPORTED_MODULE_10__["ProductService"]; });

/* harmony import */ var _brand_service__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ./brand.service */ "./src/app/auth/_services/brand.service.ts");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "BrandService", function() { return _brand_service__WEBPACK_IMPORTED_MODULE_11__["BrandService"]; });

/* harmony import */ var _banner_service__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ./banner.service */ "./src/app/auth/_services/banner.service.ts");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "BannerService", function() { return _banner_service__WEBPACK_IMPORTED_MODULE_12__["BannerService"]; });

/* harmony import */ var _order_service__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ./order.service */ "./src/app/auth/_services/order.service.ts");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "OrderService", function() { return _order_service__WEBPACK_IMPORTED_MODULE_13__["OrderService"]; });

















/***/ }),

/***/ "./src/app/auth/_services/menu.service.ts":
/*!************************************************!*\
  !*** ./src/app/auth/_services/menu.service.ts ***!
  \************************************************/
/*! exports provided: MenuService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "MenuService", function() { return MenuService; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/http */ "./node_modules/@angular/http/fesm2015/http.js");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");




let MenuService = class MenuService {
    constructor(http, baseUrl) {
        this.http = http;
        this.baseUrl = baseUrl;
    }
    getAll() {
        return this.http.get(this.baseUrl._baseUrl + 'menu/menulist', this.jwt()).map((response) => response.json());
    }
    getProductType() {
        return this.http.get(this.baseUrl._baseUrl + 'menu/product-type', this.jwt()).map((response) => response.json());
    }
    getById(id) {
        return this.http.get(this.baseUrl._baseUrl + 'menu/info/' + id, this.jwt()).map((response) => response.json());
    }
    getByName(name) {
        return this.http.get(this.baseUrl._baseUrl + 'menu/name-search/' + name, this.jwt()).map((response) => response.json());
    }
    /* getById(id: number) {
         return this.http.post(this.baseUrl._baseUrl + 'menu/info', JSON.stringify(id), this.jwt()).map((response: Response) => response.json());
     }*/
    menuDelete(id) {
        return this.http.get(this.baseUrl._baseUrl + 'menu/delete/' + id, this.jwt()).map((response) => response.json());
    }
    searching(menu) {
        return this.http.post(this.baseUrl._baseUrl + 'menu/search', JSON.stringify(menu), this.jwt()).map((response) => response.json());
    }
    createMenu(menu) {
        return this.http.post(this.baseUrl._baseUrl + 'menu/addMenu', JSON.stringify(menu), this.jwt()).map((response) => response.json());
    }
    updateMenu(menu) {
        return this.http.post(this.baseUrl._baseUrl + 'menu/updateMenu', JSON.stringify(menu), this.jwt()).map((response) => response.json());
    }
    updateStatus(id) {
        return this.http.post(this.baseUrl._baseUrl + 'menu/status', id, this.jwt()).map((response) => response.json());
    }
    dashboardService(user) {
        return this.http.post(this.baseUrl._baseUrl + 'menu/dashboard-service', JSON.stringify(user), this.jwt()).map((response) => response.json());
    }
    // private helper methods
    jwt() {
        // create authorization header with jwt token
        let currentUser = JSON.parse(localStorage.getItem('currentUser'));
        if (currentUser && currentUser.token) {
            let headers = new _angular_http__WEBPACK_IMPORTED_MODULE_2__["Headers"]({ 'Authorization': 'Bearer ' + currentUser.token });
            return new _angular_http__WEBPACK_IMPORTED_MODULE_2__["RequestOptions"]({ headers: headers });
        }
    }
};
MenuService = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])(),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_http__WEBPACK_IMPORTED_MODULE_2__["Http"], _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__["ScriptLoaderService"]])
], MenuService);



/***/ }),

/***/ "./src/app/auth/_services/order.service.ts":
/*!*************************************************!*\
  !*** ./src/app/auth/_services/order.service.ts ***!
  \*************************************************/
/*! exports provided: OrderService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "OrderService", function() { return OrderService; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/http */ "./node_modules/@angular/http/fesm2015/http.js");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");




let OrderService = class OrderService {
    constructor(http, baseUrl) {
        this.http = http;
        this.baseUrl = baseUrl;
    }
    getAll(user_id) {
        return this.http.post(this.baseUrl._baseUrl + 'order/order-list', JSON.stringify(user_id), this.jwt()).map((response) => response.json());
    }
    getById(order_no) {
        return this.http.post(this.baseUrl._baseUrl + 'order/info/', JSON.stringify(order_no), this.jwt()).map((response) => response.json());
    }
    shippingStatus(status) {
        return this.http.post(this.baseUrl._baseUrl + 'order/shipping-status/', JSON.stringify(status), this.jwt()).map((response) => response.json());
    }
    filter(filter) {
        return this.http.post(this.baseUrl._baseUrl + 'order/order-filter/', JSON.stringify(filter), this.jwt()).map((response) => response.json());
    }
    updateStatus(cart_data) {
        return this.http.post(this.baseUrl._baseUrl + 'order/order-update/', JSON.stringify(cart_data), this.jwt()).map((response) => response.json());
    }
    revenue(data) {
        return this.http.post(this.baseUrl._baseUrl + 'order/revenue/', JSON.stringify(data), this.jwt()).map((response) => response.json());
    }
    average(data) {
        return this.http.post(this.baseUrl._baseUrl + 'order/average/', JSON.stringify(data), this.jwt()).map((response) => response.json());
    }
    getCountry(user_id) {
        return this.http.post(this.baseUrl._baseUrl + 'order/getCountry/', JSON.stringify(user_id), this.jwt()).map((response) => response.json());
    }
    todaysRevenue(user_id) {
        return this.http.post(this.baseUrl._baseUrl + 'order/todaysRevenue/', JSON.stringify(user_id), this.jwt()).map((response) => response.json());
    }
    totalRevenue(user_id) {
        return this.http.post(this.baseUrl._baseUrl + 'order/totalRevenue/', JSON.stringify(user_id), this.jwt()).map((response) => response.json());
    }
    totalOrders(user_id) {
        return this.http.post(this.baseUrl._baseUrl + 'order/totalOrders/', JSON.stringify(user_id), this.jwt()).map((response) => response.json());
    }
    jwt() {
        // create authorization header with jwt token
        let currentUser = JSON.parse(localStorage.getItem('currentUser'));
        if (currentUser && currentUser.token) {
            let headers = new _angular_http__WEBPACK_IMPORTED_MODULE_2__["Headers"]({ 'Authorization': 'Bearer ' + currentUser.token });
            return new _angular_http__WEBPACK_IMPORTED_MODULE_2__["RequestOptions"]({ headers: headers });
        }
    }
};
OrderService = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])(),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_http__WEBPACK_IMPORTED_MODULE_2__["Http"], _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__["ScriptLoaderService"]])
], OrderService);



/***/ }),

/***/ "./src/app/auth/_services/permission.service.ts":
/*!******************************************************!*\
  !*** ./src/app/auth/_services/permission.service.ts ***!
  \******************************************************/
/*! exports provided: PermissionService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "PermissionService", function() { return PermissionService; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/http */ "./node_modules/@angular/http/fesm2015/http.js");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");




let PermissionService = class PermissionService {
    constructor(http, baseUrl) {
        this.http = http;
        this.baseUrl = baseUrl;
    }
    getAllUserGroup() {
        return this.http.get(this.baseUrl._baseUrl + 'user-group/getall', this.jwt()).map((response) => response.json());
    }
    getUserGroupById(id) {
        return this.http.get(this.baseUrl._baseUrl + 'user-group/get-user-group-by-id/' + id, this.jwt()).map((response) => response.json());
    }
    getUserPermissionById(id) {
        return this.http.get(this.baseUrl._baseUrl + 'user-group/permission/' + id, this.jwt()).map((response) => response.json());
    }
    getUserStaffPermissionById(id) {
        return this.http.get(this.baseUrl._baseUrl + 'user-group/staffpermission/' + id, this.jwt()).map((response) => response.json());
    }
    updateUserPermision(userPermission) {
        return this.http.post(this.baseUrl._baseUrl + 'user-group/permission/', JSON.stringify(userPermission), this.jwt()).map((response) => response.json());
    }
    // private helper methods
    jwt() {
        // create authorization header with jwt token
        let currentUser = JSON.parse(localStorage.getItem('currentUser'));
        if (currentUser && currentUser.token) {
            let headers = new _angular_http__WEBPACK_IMPORTED_MODULE_2__["Headers"]({ 'Authorization': 'Bearer ' + currentUser.token });
            return new _angular_http__WEBPACK_IMPORTED_MODULE_2__["RequestOptions"]({ headers: headers });
        }
    }
};
PermissionService = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])(),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_http__WEBPACK_IMPORTED_MODULE_2__["Http"], _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__["ScriptLoaderService"]])
], PermissionService);



/***/ }),

/***/ "./src/app/auth/_services/product.service.ts":
/*!***************************************************!*\
  !*** ./src/app/auth/_services/product.service.ts ***!
  \***************************************************/
/*! exports provided: ProductService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ProductService", function() { return ProductService; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/http */ "./node_modules/@angular/http/fesm2015/http.js");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");




let ProductService = class ProductService {
    constructor(http, baseUrl) {
        this.http = http;
        this.baseUrl = baseUrl;
    }
    /*
        verify() {
            return this.http.get('/api/verify', this.jwt()).map((response: Response) => response.json());
        }
    
        forgotPassword(email: string) {
            return this.http.post('/api/forgot-password', JSON.stringify({ email }), this.jwt()).map((response: Response) => response.json());
        }
    */
    getAll(loggedInfo) {
        return this.http.post(this.baseUrl._baseUrl + 'product/productList', JSON.stringify(loggedInfo), this.jwt()).map((response) => response.json());
    }
    getTagForDropDown() {
        return this.http.get(this.baseUrl._baseUrl + 'product/tag-dropdown', this.jwt()).map((response) => response.json());
    }
    getProduct(category) {
        return this.http.post(this.baseUrl._baseUrl + 'product/getProduct', JSON.stringify(category), this.jwt()).map((response) => response.json());
    }
    createProduct(product) {
        return this.http.post(this.baseUrl._baseUrl + 'product/addProduct', JSON.stringify(product), this.jwt()).map((response) => response.json());
    }
    updateProduct(product) {
        return this.http.post(this.baseUrl._baseUrl + 'product/updateProduct', JSON.stringify(product), this.jwt()).map((response) => response.json());
    }
    createDiscount(discount) {
        return this.http.post(this.baseUrl._baseUrl + 'discount/addDiscount', JSON.stringify(discount), this.jwt()).map((response) => response.json());
    }
    updateProductStaus(productid) {
        return this.http.post(this.baseUrl._baseUrl + 'product/productStatus', productid, this.jwt()).map((response) => response.json());
    }
    getById(id) {
        return this.http.get(this.baseUrl._baseUrl + 'product/info/' + id, this.jwt()).map((response) => response.json());
    }
    productDelete(id) {
        return this.http.get(this.baseUrl._baseUrl + 'product/delete/' + id, this.jwt()).map((response) => response.json());
    }
    searching(product) {
        return this.http.post(this.baseUrl._baseUrl + 'product/search', JSON.stringify(product), this.jwt()).map((response) => response.json());
    }
    productDeleteBulk(product) {
        return this.http.post(this.baseUrl._baseUrl + 'product/delete-product-bulk', JSON.stringify(product), this.jwt()).map((response) => response.json());
    }
    shareableList(user) {
        return this.http.post(this.baseUrl._baseUrl + 'product/shareable/', JSON.stringify(user), this.jwt()).map((response) => response.json());
    }
    addShareableProduct(data) {
        return this.http.post(this.baseUrl._baseUrl + 'product/add-shareable-product', JSON.stringify(data), this.jwt()).map((response) => response.json());
    }
    /*   getById(id: number) {
           return this.http.get(this.baseUrl._baseUrl + 'product/info/' + id, this.jwt()).map((response: Response) => response.json());
       }*/
    getNotification(id) {
        return this.http.get(this.baseUrl._baseUrl + 'product/notification/' + id, this.jwt()).map((response) => response.json());
    }
    addAttribute(product) {
        return this.http.post(this.baseUrl._baseUrl + 'product/add-attribute', JSON.stringify(product), this.jwt()).map((response) => response.json());
    }
    addNewAttribute(product) {
        return this.http.post(this.baseUrl._baseUrl + 'product/addNewAttribute', JSON.stringify(product), this.jwt()).map((response) => response.json());
    }
    addAttributeValue(product) {
        return this.http.post(this.baseUrl._baseUrl + 'product/addAttributeValue', JSON.stringify(product), this.jwt()).map((response) => response.json());
    }
    updateAttributeValue(product) {
        return this.http.post(this.baseUrl._baseUrl + 'product/updateAttributeValue', JSON.stringify(product), this.jwt()).map((response) => response.json());
    }
    deleteAttributeValue(id, attr_index) {
        return this.http.post(this.baseUrl._baseUrl + 'product/deleteAttributeValue', JSON.stringify({ 'id': id, 'attr_index': attr_index }), this.jwt()).map((response) => response.json());
    }
    updateNewAttribute(product) {
        return this.http.post(this.baseUrl._baseUrl + 'product/updateNewAttribute', JSON.stringify(product), this.jwt()).map((response) => response.json());
    }
    addAttributeList(attribute) {
        return this.http.post(this.baseUrl._baseUrl + 'product/add-attribute-product', JSON.stringify(attribute), this.jwt()).map((response) => response.json());
    }
    getAttribute(id) {
        return this.http.get(this.baseUrl._baseUrl + 'product/attribute/' + id, this.jwt()).map((response) => response.json());
    }
    getAttrValByIndex(id, attr_index) {
        return this.http.post(this.baseUrl._baseUrl + 'product/getAttrValByIndex', JSON.stringify({ 'id': id, 'attr_index': attr_index }), this.jwt()).map((response) => response.json());
    }
    getAttributes() {
        return this.http.get(this.baseUrl._baseUrl + 'product/attribute/', this.jwt()).map((response) => response.json());
    }
    deleteNewAttribute(id) {
        return this.http.get(this.baseUrl._baseUrl + 'product/deleteNewAttribute/' + id, this.jwt()).map((response) => response.json());
    }
    deleteAttribute(id) {
        return this.http.get(this.baseUrl._baseUrl + 'product/attr-delete/' + id, this.jwt()).map((response) => response.json());
    }
    updateAttrStatus(id) {
        return this.http.post(this.baseUrl._baseUrl + 'product/attr-status/', id, this.jwt()).map((response) => response.json());
    }
    attrSearching(brand) {
        return this.http.post(this.baseUrl._baseUrl + 'product/attrSearching', JSON.stringify(brand), this.jwt()).map((response) => response.json());
    }
    addSize(product) {
        return this.http.post(this.baseUrl._baseUrl + 'product/add-size', JSON.stringify(product), this.jwt()).map((response) => response.json());
    }
    getSize(id) {
        return this.http.get(this.baseUrl._baseUrl + 'product/size/' + id, this.jwt()).map((response) => response.json());
    }
    getSizeList() {
        return this.http.get(this.baseUrl._baseUrl + 'product/size', this.jwt()).map((response) => response.json());
    }
    getAttributeList() {
        return this.http.get(this.baseUrl._baseUrl + 'product/attribute', this.jwt()).map((response) => response.json());
    }
    getAttributeById(id, product_id) {
        return this.http.post(this.baseUrl._baseUrl + 'product/attributeById', JSON.stringify({ 'id': id, 'product_id': product_id }), this.jwt()).map((response) => response.json());
    }
    getAttributeWithProById(product_id) {
        return this.http.post(this.baseUrl._baseUrl + 'product/getAttributeWithProById', JSON.stringify({ 'product_id': product_id }), this.jwt()).map((response) => response.json());
    }
    getAttributeListsById(id) {
        return this.http.post(this.baseUrl._baseUrl + 'product/getAttributeListsById', JSON.stringify({ 'id': id }), this.jwt()).map((response) => response.json());
    }
    deleteSize(id) {
        return this.http.get(this.baseUrl._baseUrl + 'product/size-delete/' + id, this.jwt()).map((response) => response.json());
    }
    updateSizeStatus(id) {
        return this.http.post(this.baseUrl._baseUrl + 'product/size-status', id, this.jwt()).map((response) => response.json());
    }
    sizeSearching(size) {
        return this.http.post(this.baseUrl._baseUrl + 'product/size-search', JSON.stringify(size), this.jwt()).map((response) => response.json());
    }
    /*updateAttrStatus(id: number)
  {
      return this.http.post(this.baseUrl._baseUrl + 'product/attr-status', id, this.jwt()).map((response: Response) => response.json());
  }
  
  
  attrSearching(brand: any)
  {
     return this.http.post(this.baseUrl._baseUrl + 'product/attrSearching', JSON.stringify(brand), this.jwt()).map((response: Response) => response.json());
  }
  */
    addColor(product) {
        return this.http.post(this.baseUrl._baseUrl + 'product/add-color', JSON.stringify(product), this.jwt()).map((response) => response.json());
    }
    getColor(id) {
        return this.http.get(this.baseUrl._baseUrl + 'product/color/' + id, this.jwt()).map((response) => response.json());
    }
    getColorList() {
        return this.http.get(this.baseUrl._baseUrl + 'product/color', this.jwt()).map((response) => response.json());
    }
    deleteColor(id) {
        return this.http.get(this.baseUrl._baseUrl + 'product/color-delete/' + id, this.jwt()).map((response) => response.json());
    }
    updateColorStatus(id) {
        return this.http.post(this.baseUrl._baseUrl + 'product/color-status', id, this.jwt()).map((response) => response.json());
    }
    colorSearching(color) {
        return this.http.post(this.baseUrl._baseUrl + 'product/color-search', JSON.stringify(color), this.jwt()).map((response) => response.json());
    }
    /* addProductColor(productColor: any)
     {
         return this.http.post(this.baseUrl._baseUrl + 'product/add-product-color',JSON.stringify(productColor), this.jwt()).map((response:Response)=> response.json());
     }*/
    addTag(product) {
        return this.http.post(this.baseUrl._baseUrl + 'product/add-tag', JSON.stringify(product), this.jwt()).map((response) => response.json());
    }
    getTag(id = null) {
        return this.http.get(this.baseUrl._baseUrl + 'product/tag/' + id, this.jwt()).map((response) => response.json());
    }
    deleteTag(id) {
        return this.http.get(this.baseUrl._baseUrl + 'product/tag-delete/' + id, this.jwt()).map((response) => response.json());
    }
    updateTagStatus(id) {
        return this.http.post(this.baseUrl._baseUrl + 'product/tag-status', id, this.jwt()).map((response) => response.json());
    }
    tagSearching(color) {
        return this.http.post(this.baseUrl._baseUrl + 'product/tag-search', JSON.stringify(color), this.jwt()).map((response) => response.json());
    }
    multipleUpload(file) {
        return this.http.post(this.baseUrl._baseUrl + 'product/multiple-upload', JSON.stringify(file), this.jwt()).map((response) => response.json());
    }
    createProductSubCat(data) {
        return this.http.post(this.baseUrl._baseUrl + 'product/sub-cat', JSON.stringify(data), this.jwt()).map((response) => response.json());
    }
    productSubCatList(id) {
        return this.http.get(this.baseUrl._baseUrl + 'product/productSubCatList/' + id, this.jwt()).map((response) => response.json());
    }
    createProductType(data) {
        return this.http.post(this.baseUrl._baseUrl + 'product/product-type', JSON.stringify(data), this.jwt()).map((response) => response.json());
    }
    productTypeList(id) {
        return this.http.get(this.baseUrl._baseUrl + 'product/productTypeList/' + id, this.jwt()).map((response) => response.json());
    }
    productTypeSearching(productType) {
        return this.http.post(this.baseUrl._baseUrl + 'product/productType-search', JSON.stringify(productType), this.jwt()).map((response) => response.json());
    }
    updateProductTypeStatus(id) {
        return this.http.post(this.baseUrl._baseUrl + 'product/productType-status', id, this.jwt()).map((response) => response.json());
    }
    get_product(id) {
        return this.http.post(this.baseUrl._baseUrl + 'product/product_drp', id, this.jwt()).map((response) => response.json());
    }
    addProductAccess(product) {
        return this.http.post(this.baseUrl._baseUrl + 'product/addProductAccess', JSON.stringify(product), this.jwt()).map((response) => response.json());
    }
    productaccessList(id) {
        return this.http.post(this.baseUrl._baseUrl + 'product/productAccessList', id, this.jwt()).map((response) => response.json());
    }
    productTypeDel(id) {
        return this.http.get(this.baseUrl._baseUrl + 'product/productTypeDel/' + id, this.jwt()).map((response) => response.json());
    }
    productSubCatDelete(id) {
        return this.http.get(this.baseUrl._baseUrl + 'product/productSubCatDelete/' + id, this.jwt()).map((response) => response.json());
    }
    accessDelete(id) {
        return this.http.get(this.baseUrl._baseUrl + 'product/accessDel/' + id, this.jwt()).map((response) => response.json());
    }
    // private helper methods
    jwt() {
        // create authorization header with jwt token
        let currentUser = JSON.parse(localStorage.getItem('currentUser'));
        if (currentUser && currentUser.token) {
            let headers = new _angular_http__WEBPACK_IMPORTED_MODULE_2__["Headers"]({ 'Authorization': 'Bearer ' + currentUser.token });
            return new _angular_http__WEBPACK_IMPORTED_MODULE_2__["RequestOptions"]({ headers: headers });
        }
    }
};
ProductService = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])(),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_http__WEBPACK_IMPORTED_MODULE_2__["Http"], _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__["ScriptLoaderService"]])
], ProductService);



/***/ }),

/***/ "./src/app/auth/_services/reports.service.ts":
/*!***************************************************!*\
  !*** ./src/app/auth/_services/reports.service.ts ***!
  \***************************************************/
/*! exports provided: ReportsService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ReportsService", function() { return ReportsService; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/http */ "./node_modules/@angular/http/fesm2015/http.js");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");




let ReportsService = class ReportsService {
    constructor(http, baseUrl) {
        this.http = http;
        this.baseUrl = baseUrl;
    }
    getAll() {
        return this.http.get(this.baseUrl._baseUrl + 'support/getall', this.jwt()).map((response) => response.json());
    }
    reportInventory(loggedInfo) {
        return this.http.post(this.baseUrl._baseUrl + 'report/report-inventory', JSON.stringify(loggedInfo), this.jwt()).map((response) => response.json());
    }
    productByDateRange(datedata) {
        return this.http.post(this.baseUrl._baseUrl + 'report/report-inventory-by-daterange', JSON.stringify(datedata), this.jwt()).map((response) => response.json());
    }
    getById(id) {
        return this.http.get(this.baseUrl._baseUrl + 'support/info/' + id, this.jwt()).map((response) => response.json());
    }
    del_support(id) {
        return this.http.get(this.baseUrl._baseUrl + 'support/delete/' + id, this.jwt()).map((response) => response.json());
    }
    searching(user) {
        return this.http.post(this.baseUrl._baseUrl + 'support/search', JSON.stringify(user), this.jwt()).map((response) => response.json());
    }
    updateStatus(id) {
        return this.http.post(this.baseUrl._baseUrl + 'support/status', id, this.jwt()).map((response) => response.json());
    }
    // private helper methods
    jwt() {
        // create authorization header with jwt token
        let currentUser = JSON.parse(localStorage.getItem('currentUser'));
        if (currentUser && currentUser.token) {
            let headers = new _angular_http__WEBPACK_IMPORTED_MODULE_2__["Headers"]({ 'Authorization': 'Bearer ' + currentUser.token });
            return new _angular_http__WEBPACK_IMPORTED_MODULE_2__["RequestOptions"]({ headers: headers });
        }
    }
};
ReportsService = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])(),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_http__WEBPACK_IMPORTED_MODULE_2__["Http"], _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__["ScriptLoaderService"]])
], ReportsService);



/***/ }),

/***/ "./src/app/auth/_services/reviews.service.ts":
/*!***************************************************!*\
  !*** ./src/app/auth/_services/reviews.service.ts ***!
  \***************************************************/
/*! exports provided: ReviewsService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ReviewsService", function() { return ReviewsService; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/http */ "./node_modules/@angular/http/fesm2015/http.js");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");




let ReviewsService = class ReviewsService {
    constructor(http, baseUrl) {
        this.http = http;
        this.baseUrl = baseUrl;
    }
    getAll() {
        return this.http.get(this.baseUrl._baseUrl + 'reviews/getall', this.jwt()).map((response) => response.json());
    }
    getById(id) {
        return this.http.get(this.baseUrl._baseUrl + 'reviews/info/' + id, this.jwt()).map((response) => response.json());
    }
    del_reviews(id) {
        return this.http.get(this.baseUrl._baseUrl + 'reviews/delete/' + id, this.jwt()).map((response) => response.json());
    }
    searching(user) {
        return this.http.post(this.baseUrl._baseUrl + 'reviews/search', JSON.stringify(user), this.jwt()).map((response) => response.json());
    }
    updateStatus(id) {
        return this.http.post(this.baseUrl._baseUrl + 'reviews/status', id, this.jwt()).map((response) => response.json());
    }
    // private helper methods
    jwt() {
        // create authorization header with jwt token
        let currentUser = JSON.parse(localStorage.getItem('currentUser'));
        if (currentUser && currentUser.token) {
            let headers = new _angular_http__WEBPACK_IMPORTED_MODULE_2__["Headers"]({ 'Authorization': 'Bearer ' + currentUser.token });
            return new _angular_http__WEBPACK_IMPORTED_MODULE_2__["RequestOptions"]({ headers: headers });
        }
    }
};
ReviewsService = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])(),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_http__WEBPACK_IMPORTED_MODULE_2__["Http"], _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__["ScriptLoaderService"]])
], ReviewsService);



/***/ }),

/***/ "./src/app/auth/_services/subCategory.service.ts":
/*!*******************************************************!*\
  !*** ./src/app/auth/_services/subCategory.service.ts ***!
  \*******************************************************/
/*! exports provided: SubCategoryService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "SubCategoryService", function() { return SubCategoryService; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/http */ "./node_modules/@angular/http/fesm2015/http.js");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");




let SubCategoryService = class SubCategoryService {
    constructor(http, baseUrl) {
        this.http = http;
        this.baseUrl = baseUrl;
    }
    getAll() {
        return this.http.get(this.baseUrl._baseUrl + 'subCategory/getall', this.jwt()).map((response) => response.json());
    }
    getById(id) {
        return this.http.get(this.baseUrl._baseUrl + 'subCategory/info/' + id, this.jwt()).map((response) => response.json());
    }
    getByName(name) {
        return this.http.get(this.baseUrl._baseUrl + 'subCategory/name-search/' + name, this.jwt()).map((response) => response.json());
    }
    subCategoryDelete(id) {
        return this.http.get(this.baseUrl._baseUrl + 'subCategory/delete/' + id, this.jwt()).map((response) => response.json());
    }
    updateStatus(id) {
        return this.http.post(this.baseUrl._baseUrl + 'subCategory/status', id, this.jwt()).map((response) => response.json());
    }
    updateSubCategory(subCategory) {
        return this.http.post(this.baseUrl._baseUrl + 'subCategory/updateSubCategory', JSON.stringify(subCategory), this.jwt()).map((response) => response.json());
    }
    createSubCategory(subCategory) {
        return this.http.post(this.baseUrl._baseUrl + 'subCategory/addSubCategory', JSON.stringify(subCategory), this.jwt()).map((response) => response.json());
    }
    getCategory(menu_id) {
        return this.http.post(this.baseUrl._baseUrl + 'subCategory/getCategory', JSON.stringify(menu_id), this.jwt()).map((response) => response.json());
    }
    getSubCategory(catgeory_id) {
        return this.http.post(this.baseUrl._baseUrl + 'subCategory/getSubCategory', catgeory_id, this.jwt()).map((response) => response.json());
    }
    getSubCategoryAss(catgeory_id) {
        return this.http.post(this.baseUrl._baseUrl + 'subCategory/getSubCategory', catgeory_id, this.jwt()).map((response) => response.json());
    }
    searching(subCategory) {
        return this.http.post(this.baseUrl._baseUrl + 'subCategory/search', JSON.stringify(subCategory), this.jwt()).map((response) => response.json());
    }
    // private helper methods
    jwt() {
        // create authorization header with jwt token
        let currentUser = JSON.parse(localStorage.getItem('currentUser'));
        if (currentUser && currentUser.token) {
            let headers = new _angular_http__WEBPACK_IMPORTED_MODULE_2__["Headers"]({ 'Authorization': 'Bearer ' + currentUser.token });
            return new _angular_http__WEBPACK_IMPORTED_MODULE_2__["RequestOptions"]({ headers: headers });
        }
    }
};
SubCategoryService = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])(),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_http__WEBPACK_IMPORTED_MODULE_2__["Http"], _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__["ScriptLoaderService"]])
], SubCategoryService);



/***/ }),

/***/ "./src/app/auth/_services/subscription.service.ts":
/*!********************************************************!*\
  !*** ./src/app/auth/_services/subscription.service.ts ***!
  \********************************************************/
/*! exports provided: SubscriptionService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "SubscriptionService", function() { return SubscriptionService; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/http */ "./node_modules/@angular/http/fesm2015/http.js");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");




let SubscriptionService = class SubscriptionService {
    constructor(http, baseUrl) {
        this.http = http;
        this.baseUrl = baseUrl;
    }
    getAll() {
        return this.http.get(this.baseUrl._baseUrl + 'subscription/subscription-list', this.jwt()).map((response) => response.json());
    }
    jwt() {
        // create authorization header with jwt token
        let currentUser = JSON.parse(localStorage.getItem('currentUser'));
        if (currentUser && currentUser.token) {
            let headers = new _angular_http__WEBPACK_IMPORTED_MODULE_2__["Headers"]({ 'Authorization': 'Bearer ' + currentUser.token });
            return new _angular_http__WEBPACK_IMPORTED_MODULE_2__["RequestOptions"]({ headers: headers });
        }
    }
};
SubscriptionService = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])(),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_http__WEBPACK_IMPORTED_MODULE_2__["Http"], _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__["ScriptLoaderService"]])
], SubscriptionService);



/***/ }),

/***/ "./src/app/auth/_services/support.service.ts":
/*!***************************************************!*\
  !*** ./src/app/auth/_services/support.service.ts ***!
  \***************************************************/
/*! exports provided: SupportService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "SupportService", function() { return SupportService; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/http */ "./node_modules/@angular/http/fesm2015/http.js");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");




let SupportService = class SupportService {
    constructor(http, baseUrl) {
        this.http = http;
        this.baseUrl = baseUrl;
    }
    getAll() {
        return this.http.get(this.baseUrl._baseUrl + 'support/getall', this.jwt()).map((response) => response.json());
    }
    getById(id) {
        return this.http.get(this.baseUrl._baseUrl + 'support/info/' + id, this.jwt()).map((response) => response.json());
    }
    priorityUpdate(sp_id, id) {
        return this.http.post(this.baseUrl._baseUrl + 'support/priority/' + sp_id, id, this.jwt()).map((response) => response.json());
    }
    sendMessage(sp_id, data) {
        return this.http.post(this.baseUrl._baseUrl + 'support/sendMessage/' + sp_id, data, this.jwt()).map((response) => response.json());
    }
    /* searching(user) {
         return this.http.post(this.baseUrl._baseUrl + 'support/search', JSON.stringify(user), this.jwt()).map((response: Response) => response.json());
     }*/
    updateStatus(id, status) {
        return this.http.post(this.baseUrl._baseUrl + 'support/status/' + id, status, this.jwt()).map((response) => response.json());
    }
    assignTo(data) {
        return this.http.post(this.baseUrl._baseUrl + 'support/assignTo', data, this.jwt()).map((response) => response.json());
    }
    getChat(data) {
        return this.http.post(this.baseUrl._baseUrl + 'support/getChat', data, this.jwt()).map((response) => response.json());
    }
    // private helper methods
    jwt() {
        // create authorization header with jwt token
        let currentUser = JSON.parse(localStorage.getItem('currentUser'));
        if (currentUser && currentUser.token) {
            let headers = new _angular_http__WEBPACK_IMPORTED_MODULE_2__["Headers"]({ 'Authorization': 'Bearer ' + currentUser.token });
            return new _angular_http__WEBPACK_IMPORTED_MODULE_2__["RequestOptions"]({ headers: headers });
        }
    }
};
SupportService = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])(),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_http__WEBPACK_IMPORTED_MODULE_2__["Http"], _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__["ScriptLoaderService"]])
], SupportService);



/***/ }),

/***/ "./src/app/auth/_services/user.service.ts":
/*!************************************************!*\
  !*** ./src/app/auth/_services/user.service.ts ***!
  \************************************************/
/*! exports provided: UserService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "UserService", function() { return UserService; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/http */ "./node_modules/@angular/http/fesm2015/http.js");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");




let UserService = class UserService {
    constructor(http, baseUrl) {
        this.http = http;
        this.baseUrl = baseUrl;
    }
    verify() {
        return this.http.get('/api/verify', this.jwt()).map((response) => response.json());
    }
    forgotPassword(email) {
        return this.http.post('/api/forgot-password', JSON.stringify({ email }), this.jwt()).map((response) => response.json());
    }
    getAll() {
        return this.http.get(this.baseUrl._baseUrl + localStorage.getItem('section') + '/getall', this.jwt()).map((response) => response.json());
    }
    getUserRoleAll() {
        return this.http.get(this.baseUrl._baseUrl + 'vendor/get-user-role-all', this.jwt()).map((response) => response.json());
    }
    getById(id) {
        return this.http.get(this.baseUrl._baseUrl + 'vendor/info/' + id, this.jwt()).map((response) => response.json());
    }
    create(user) {
        return this.http.post('/api/users', user, this.jwt()).map((response) => response.json());
    }
    update(user) {
        return this.http.post(this.baseUrl._baseUrl + localStorage.getItem('section') + '/update', JSON.stringify(user), this.jwt()).map((response) => response.json());
    }
    update_username(user) {
        return this.http.post(this.baseUrl._baseUrl + localStorage.getItem('section') + '/updateuser', JSON.stringify(user), this.jwt()).map((response) => response.json());
    }
    update_password(user) {
        return this.http.post(this.baseUrl._baseUrl + localStorage.getItem('section') + '/updatepass', JSON.stringify(user), this.jwt()).map((response) => response.json());
    }
    del_vendor(id) {
        return this.http.get(this.baseUrl._baseUrl + localStorage.getItem('section') + '/delete/' + id, this.jwt()).map((response) => response.json());
    }
    logout_vendor(input) {
        return this.http.post(this.baseUrl._baseUrl + 'logout', input, this.jwt()).map((response) => response.json());
    }
    searching(user) {
        return this.http.post(this.baseUrl._baseUrl + localStorage.getItem('section') + '/search', JSON.stringify(user), this.jwt()).map((response) => response.json());
    }
    updateStaus(id) {
        return this.http.post(this.baseUrl._baseUrl + localStorage.getItem('section') + '/status', id, this.jwt()).map((response) => response.json());
    }
    islogin() {
        return this.http.get(this.baseUrl._baseUrl + 'isLogin', this.jwt()).map((response) => response.json());
    }
    // private helper methods
    jwt() {
        // create authorization header with jwt token
        let currentUser = JSON.parse(localStorage.getItem('currentUser'));
        if (currentUser && currentUser.token) {
            let headers = new _angular_http__WEBPACK_IMPORTED_MODULE_2__["Headers"]({ 'Authorization': 'Bearer ' + currentUser.token });
            return new _angular_http__WEBPACK_IMPORTED_MODULE_2__["RequestOptions"]({ headers: headers });
        }
    }
};
UserService = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])(),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_http__WEBPACK_IMPORTED_MODULE_2__["Http"], _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__["ScriptLoaderService"]])
], UserService);



/***/ }),

/***/ "./src/app/auth/_services/withdraw.service.ts":
/*!****************************************************!*\
  !*** ./src/app/auth/_services/withdraw.service.ts ***!
  \****************************************************/
/*! exports provided: WithdrawService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "WithdrawService", function() { return WithdrawService; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/http */ "./node_modules/@angular/http/fesm2015/http.js");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");




let WithdrawService = class WithdrawService {
    constructor(http, baseUrl) {
        this.http = http;
        this.baseUrl = baseUrl;
    }
    getAll() {
        return this.http.get(this.baseUrl._baseUrl + 'withdraw/withdraw-list', this.jwt()).map((response) => response.json());
    }
    jwt() {
        // create authorization header with jwt token
        let currentUser = JSON.parse(localStorage.getItem('currentUser'));
        if (currentUser && currentUser.token) {
            let headers = new _angular_http__WEBPACK_IMPORTED_MODULE_2__["Headers"]({ 'Authorization': 'Bearer ' + currentUser.token });
            return new _angular_http__WEBPACK_IMPORTED_MODULE_2__["RequestOptions"]({ headers: headers });
        }
    }
};
WithdrawService = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])(),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_http__WEBPACK_IMPORTED_MODULE_2__["Http"], _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__["ScriptLoaderService"]])
], WithdrawService);



/***/ }),

/***/ "./src/app/auth/auth-routing.routing.ts":
/*!**********************************************!*\
  !*** ./src/app/auth/auth-routing.routing.ts ***!
  \**********************************************/
/*! exports provided: AuthRoutingModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AuthRoutingModule", function() { return AuthRoutingModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var _auth_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./auth.component */ "./src/app/auth/auth.component.ts");




const routes = [
    { path: '', component: _auth_component__WEBPACK_IMPORTED_MODULE_3__["AuthComponent"] },
];
let AuthRoutingModule = class AuthRoutingModule {
};
AuthRoutingModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        imports: [_angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"].forChild(routes)],
        exports: [_angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"]],
    })
], AuthRoutingModule);



/***/ }),

/***/ "./src/app/auth/auth.component.ts":
/*!****************************************!*\
  !*** ./src/app/auth/auth.component.ts ***!
  \****************************************/
/*! exports provided: AuthComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AuthComponent", function() { return AuthComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");
/* harmony import */ var _services_authentication_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./_services/authentication.service */ "./src/app/auth/_services/authentication.service.ts");
/* harmony import */ var _services_alert_service__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./_services/alert.service */ "./src/app/auth/_services/alert.service.ts");
/* harmony import */ var _services_user_service__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./_services/user.service */ "./src/app/auth/_services/user.service.ts");
/* harmony import */ var _directives_alert_component__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./_directives/alert.component */ "./src/app/auth/_directives/alert.component.ts");
/* harmony import */ var _helpers__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ../helpers */ "./src/app/helpers.ts");









let AuthComponent = class AuthComponent {
    constructor(_router, _script, _userService, _route, _authService, _alertService, cfr) {
        this._router = _router;
        this._script = _script;
        this._userService = _userService;
        this._route = _route;
        this._authService = _authService;
        this._alertService = _alertService;
        this.cfr = cfr;
        this.model = {};
        this.loading = false;
    }
    ngOnInit() {
        this.model.remember = true;
        // get return url from route parameters or default to '/'
        this.returnUrl = this._route.snapshot.queryParams['returnUrl'] || '/';
        this._router.navigate([this.returnUrl]);
        this._script.loadScripts('body', [
            'assets/vendors/base/vendors.bundle.js',
            'assets/demo/default/base/scripts.bundle.js'
        ], true).then(() => {
            _helpers__WEBPACK_IMPORTED_MODULE_8__["Helpers"].setLoading(false);
            this.handleFormSwitch();
            this.handleSignInFormSubmit();
            this.handleSignUpFormSubmit();
            this.handleForgetPasswordFormSubmit();
        });
    }
    signin() {
        this.loading = true;
        this._authService.login(this.model.email, this.model.password).subscribe(data => {
            this._router.navigate([this.returnUrl]);
        }, error => {
            this.showAlert('alertSignin');
            this._alertService.error(error);
            this.loading = false;
        });
    }
    signup() {
        this.loading = true;
        this._userService.create(this.model).subscribe(data => {
            this.showAlert('alertSignin');
            this._alertService.success('Thank you. To complete your registration please check your email.', true);
            this.loading = false;
            this.displaySignInForm();
            this.model = {};
        }, error => {
            this.showAlert('alertSignup');
            this._alertService.error(error);
            this.loading = false;
        });
    }
    forgotPass() {
        this.loading = true;
        this._userService.forgotPassword(this.model.email).subscribe(data => {
            this.showAlert('alertSignin');
            this._alertService.success('Cool! Password recovery instruction has been sent to your email.', true);
            this.loading = false;
            this.displaySignInForm();
            this.model = {};
        }, error => {
            this.showAlert('alertForgotPass');
            this._alertService.error(error);
            this.loading = false;
        });
    }
    showAlert(target) {
        this[target].clear();
        let factory = this.cfr.resolveComponentFactory(_directives_alert_component__WEBPACK_IMPORTED_MODULE_7__["AlertComponent"]);
        let ref = this[target].createComponent(factory);
        ref.changeDetectorRef.detectChanges();
    }
    handleSignInFormSubmit() {
        $('#m_login_signin_submit').click((e) => {
            let form = $(e.target).closest('form');
            form.validate({
                rules: {
                    email: {
                        required: true,
                        email: true,
                    },
                    password: {
                        required: true,
                    },
                },
            });
            if (!form.valid()) {
                e.preventDefault();
                return;
            }
        });
    }
    displaySignUpForm() {
        let login = document.getElementById('m_login');
        mUtil.removeClass(login, 'm-login--forget-password');
        mUtil.removeClass(login, 'm-login--signin');
        mUtil.addClass(login, 'm-login--signup');
        mUtil.animateClass(login.getElementsByClassName('m-login__signup')[0], 'flipInX animated');
    }
    displaySignInForm() {
        let login = document.getElementById('m_login');
        mUtil.removeClass(login, 'm-login--forget-password');
        mUtil.removeClass(login, 'm-login--signup');
        try {
            $('form').data('validator').resetForm();
        }
        catch (e) {
        }
        mUtil.addClass(login, 'm-login--signin');
        mUtil.animateClass(login.getElementsByClassName('m-login__signin')[0], 'flipInX animated');
    }
    displayForgetPasswordForm() {
        let login = document.getElementById('m_login');
        mUtil.removeClass(login, 'm-login--signin');
        mUtil.removeClass(login, 'm-login--signup');
        mUtil.addClass(login, 'm-login--forget-password');
        mUtil.animateClass(login.getElementsByClassName('m-login__forget-password')[0], 'flipInX animated');
    }
    handleFormSwitch() {
        document.getElementById('m_login_forget_password').addEventListener('click', (e) => {
            e.preventDefault();
            this.displayForgetPasswordForm();
        });
        document.getElementById('m_login_forget_password_cancel').addEventListener('click', (e) => {
            e.preventDefault();
            this.displaySignInForm();
        });
        document.getElementById('m_login_signup').addEventListener('click', (e) => {
            e.preventDefault();
            this.displaySignUpForm();
        });
        document.getElementById('m_login_signup_cancel').addEventListener('click', (e) => {
            e.preventDefault();
            this.displaySignInForm();
        });
    }
    handleSignUpFormSubmit() {
        document.getElementById('m_login_signup_submit').addEventListener('click', (e) => {
            let btn = $(e.target);
            let form = $(e.target).closest('form');
            form.validate({
                rules: {
                    fullname: {
                        required: true,
                    },
                    email: {
                        required: true,
                        email: true,
                    },
                    password: {
                        required: true,
                    },
                    rpassword: {
                        required: true,
                    },
                    agree: {
                        required: true,
                    },
                },
            });
            if (!form.valid()) {
                e.preventDefault();
                return;
            }
        });
    }
    handleForgetPasswordFormSubmit() {
        document.getElementById('m_login_forget_password_submit').addEventListener('click', (e) => {
            let btn = $(e.target);
            let form = $(e.target).closest('form');
            form.validate({
                rules: {
                    email: {
                        required: true,
                        email: true,
                    },
                },
            });
            if (!form.valid()) {
                e.preventDefault();
                return;
            }
        });
    }
};
tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["ViewChild"])('alertSignin', { read: _angular_core__WEBPACK_IMPORTED_MODULE_1__["ViewContainerRef"], static: true }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", _angular_core__WEBPACK_IMPORTED_MODULE_1__["ViewContainerRef"])
], AuthComponent.prototype, "alertSignin", void 0);
tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["ViewChild"])('alertSignup', { read: _angular_core__WEBPACK_IMPORTED_MODULE_1__["ViewContainerRef"], static: true }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", _angular_core__WEBPACK_IMPORTED_MODULE_1__["ViewContainerRef"])
], AuthComponent.prototype, "alertSignup", void 0);
tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["ViewChild"])('alertForgotPass', { read: _angular_core__WEBPACK_IMPORTED_MODULE_1__["ViewContainerRef"], static: true }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", _angular_core__WEBPACK_IMPORTED_MODULE_1__["ViewContainerRef"])
], AuthComponent.prototype, "alertForgotPass", void 0);
AuthComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: '.m-grid.m-grid--hor.m-grid--root.m-page',
        template: __webpack_require__(/*! raw-loader!./templates/login-1.component.html */ "./node_modules/raw-loader/index.js!./src/app/auth/templates/login-1.component.html"),
        encapsulation: _angular_core__WEBPACK_IMPORTED_MODULE_1__["ViewEncapsulation"].None,
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_router__WEBPACK_IMPORTED_MODULE_2__["Router"],
        _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__["ScriptLoaderService"],
        _services_user_service__WEBPACK_IMPORTED_MODULE_6__["UserService"],
        _angular_router__WEBPACK_IMPORTED_MODULE_2__["ActivatedRoute"],
        _services_authentication_service__WEBPACK_IMPORTED_MODULE_4__["AuthenticationService"],
        _services_alert_service__WEBPACK_IMPORTED_MODULE_5__["AlertService"],
        _angular_core__WEBPACK_IMPORTED_MODULE_1__["ComponentFactoryResolver"]])
], AuthComponent);



/***/ }),

/***/ "./src/app/auth/auth.module.ts":
/*!*************************************!*\
  !*** ./src/app/auth/auth.module.ts ***!
  \*************************************/
/*! exports provided: AuthModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AuthModule", function() { return AuthModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/fesm2015/common.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm2015/forms.js");
/* harmony import */ var _angular_http__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/http */ "./node_modules/@angular/http/fesm2015/http.js");
/* harmony import */ var _angular_http_testing__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/http/testing */ "./node_modules/@angular/http/fesm2015/testing.js");
/* harmony import */ var _auth_routing_routing__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./auth-routing.routing */ "./src/app/auth/auth-routing.routing.ts");
/* harmony import */ var _auth_component__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./auth.component */ "./src/app/auth/auth.component.ts");
/* harmony import */ var _directives_alert_component__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./_directives/alert.component */ "./src/app/auth/_directives/alert.component.ts");
/* harmony import */ var _logout_logout_component__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./logout/logout.component */ "./src/app/auth/logout/logout.component.ts");
/* harmony import */ var _guards_auth_guard__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./_guards/auth.guard */ "./src/app/auth/_guards/auth.guard.ts");
/* harmony import */ var _services_alert_service__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ./_services/alert.service */ "./src/app/auth/_services/alert.service.ts");
/* harmony import */ var _services_authentication_service__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ./_services/authentication.service */ "./src/app/auth/_services/authentication.service.ts");
/* harmony import */ var _services_user_service__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ./_services/user.service */ "./src/app/auth/_services/user.service.ts");
/* harmony import */ var _services_reports_service__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! ./_services/reports.service */ "./src/app/auth/_services/reports.service.ts");
/* harmony import */ var _services_customer_service__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! ./_services/customer.service */ "./src/app/auth/_services/customer.service.ts");
/* harmony import */ var _services_support_service__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! ./_services/support.service */ "./src/app/auth/_services/support.service.ts");
/* harmony import */ var _services_menu_service__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! ./_services/menu.service */ "./src/app/auth/_services/menu.service.ts");
/* harmony import */ var _services_brand_service__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! ./_services/brand.service */ "./src/app/auth/_services/brand.service.ts");
/* harmony import */ var _services_product_service__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! ./_services/product.service */ "./src/app/auth/_services/product.service.ts");
/* harmony import */ var _services_category_service__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! ./_services/category.service */ "./src/app/auth/_services/category.service.ts");
/* harmony import */ var _services_subCategory_service__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! ./_services/subCategory.service */ "./src/app/auth/_services/subCategory.service.ts");
/* harmony import */ var _helpers_index__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! ./_helpers/index */ "./src/app/auth/_helpers/index.ts");
/* harmony import */ var _services_banner_service__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! ./_services/banner.service */ "./src/app/auth/_services/banner.service.ts");
/* harmony import */ var _services_order_service__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(/*! ./_services/order.service */ "./src/app/auth/_services/order.service.ts");
/* harmony import */ var _services_reviews_service__WEBPACK_IMPORTED_MODULE_25__ = __webpack_require__(/*! ./_services/reviews.service */ "./src/app/auth/_services/reviews.service.ts");
/* harmony import */ var _services_dropship_service__WEBPACK_IMPORTED_MODULE_26__ = __webpack_require__(/*! ./_services/dropship.service */ "./src/app/auth/_services/dropship.service.ts");
/* harmony import */ var _services_subscription_service__WEBPACK_IMPORTED_MODULE_27__ = __webpack_require__(/*! ./_services/subscription.service */ "./src/app/auth/_services/subscription.service.ts");
/* harmony import */ var _services_withdraw_service__WEBPACK_IMPORTED_MODULE_28__ = __webpack_require__(/*! ./_services/withdraw.service */ "./src/app/auth/_services/withdraw.service.ts");
/* harmony import */ var _services_permission_service__WEBPACK_IMPORTED_MODULE_29__ = __webpack_require__(/*! ./_services/permission.service */ "./src/app/auth/_services/permission.service.ts");






























let AuthModule = class AuthModule {
};
AuthModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        declarations: [
            _auth_component__WEBPACK_IMPORTED_MODULE_7__["AuthComponent"],
            _directives_alert_component__WEBPACK_IMPORTED_MODULE_8__["AlertComponent"],
            _logout_logout_component__WEBPACK_IMPORTED_MODULE_9__["LogoutComponent"],
        ],
        imports: [
            _angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"],
            _angular_forms__WEBPACK_IMPORTED_MODULE_3__["FormsModule"],
            _angular_http__WEBPACK_IMPORTED_MODULE_4__["HttpModule"],
            _auth_routing_routing__WEBPACK_IMPORTED_MODULE_6__["AuthRoutingModule"],
        ],
        providers: [
            _guards_auth_guard__WEBPACK_IMPORTED_MODULE_10__["AuthGuard"],
            _services_alert_service__WEBPACK_IMPORTED_MODULE_11__["AlertService"],
            _services_authentication_service__WEBPACK_IMPORTED_MODULE_12__["AuthenticationService"],
            _services_user_service__WEBPACK_IMPORTED_MODULE_13__["UserService"],
            _services_brand_service__WEBPACK_IMPORTED_MODULE_18__["BrandService"],
            _services_product_service__WEBPACK_IMPORTED_MODULE_19__["ProductService"],
            _services_subscription_service__WEBPACK_IMPORTED_MODULE_27__["SubscriptionService"],
            _services_withdraw_service__WEBPACK_IMPORTED_MODULE_28__["WithdrawService"],
            // api backend simulation
            _helpers_index__WEBPACK_IMPORTED_MODULE_22__["fakeBackendProvider"],
            _angular_http_testing__WEBPACK_IMPORTED_MODULE_5__["MockBackend"],
            _angular_http__WEBPACK_IMPORTED_MODULE_4__["BaseRequestOptions"],
            _services_reports_service__WEBPACK_IMPORTED_MODULE_14__["ReportsService"],
            _services_customer_service__WEBPACK_IMPORTED_MODULE_15__["CustomerService"],
            _services_reviews_service__WEBPACK_IMPORTED_MODULE_25__["ReviewsService"],
            _services_dropship_service__WEBPACK_IMPORTED_MODULE_26__["DropshipService"],
            _services_support_service__WEBPACK_IMPORTED_MODULE_16__["SupportService"],
            _services_category_service__WEBPACK_IMPORTED_MODULE_20__["CategoryService"],
            _services_menu_service__WEBPACK_IMPORTED_MODULE_17__["MenuService"],
            _services_subCategory_service__WEBPACK_IMPORTED_MODULE_21__["SubCategoryService"],
            _services_banner_service__WEBPACK_IMPORTED_MODULE_23__["BannerService"],
            _services_order_service__WEBPACK_IMPORTED_MODULE_24__["OrderService"],
            _services_permission_service__WEBPACK_IMPORTED_MODULE_29__["PermissionService"]
        ],
        entryComponents: [_directives_alert_component__WEBPACK_IMPORTED_MODULE_8__["AlertComponent"]],
    })
], AuthModule);



/***/ }),

/***/ "./src/app/auth/logout/logout.component.ts":
/*!*************************************************!*\
  !*** ./src/app/auth/logout/logout.component.ts ***!
  \*************************************************/
/*! exports provided: LogoutComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "LogoutComponent", function() { return LogoutComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var _services_authentication_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../_services/authentication.service */ "./src/app/auth/_services/authentication.service.ts");
/* harmony import */ var _helpers__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../helpers */ "./src/app/helpers.ts");





let LogoutComponent = class LogoutComponent {
    constructor(_router, _authService) {
        this._router = _router;
        this._authService = _authService;
    }
    ngOnInit() {
        _helpers__WEBPACK_IMPORTED_MODULE_4__["Helpers"].setLoading(true);
        // reset login status
        this._authService.logout();
        this._router.navigate(['/login']);
    }
};
LogoutComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-logout',
        template: __webpack_require__(/*! raw-loader!./logout.component.html */ "./node_modules/raw-loader/index.js!./src/app/auth/logout/logout.component.html"),
        encapsulation: _angular_core__WEBPACK_IMPORTED_MODULE_1__["ViewEncapsulation"].None,
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_router__WEBPACK_IMPORTED_MODULE_2__["Router"],
        _services_authentication_service__WEBPACK_IMPORTED_MODULE_3__["AuthenticationService"]])
], LogoutComponent);



/***/ }),

/***/ "./src/app/helpers.ts":
/*!****************************!*\
  !*** ./src/app/helpers.ts ***!
  \****************************/
/*! exports provided: Helpers */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "Helpers", function() { return Helpers; });
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

class Helpers {
    static loadStyles(tag, src) {
        if (Array.isArray(src)) {
            jquery__WEBPACK_IMPORTED_MODULE_0__["each"](src, function (k, s) {
                jquery__WEBPACK_IMPORTED_MODULE_0__(tag).append(jquery__WEBPACK_IMPORTED_MODULE_0__('<link/>').attr('href', s).attr('rel', 'stylesheet').attr('type', 'text/css'));
            });
        }
        else {
            jquery__WEBPACK_IMPORTED_MODULE_0__(tag).append(jquery__WEBPACK_IMPORTED_MODULE_0__('<link/>').attr('href', src).attr('rel', 'stylesheet').attr('type', 'text/css'));
        }
    }
    static unwrapTag(element) {
        jquery__WEBPACK_IMPORTED_MODULE_0__(element).removeAttr('appunwraptag').unwrap();
    }
    /**
     * Set title markup
     * @param title
     */
    static setTitle(title) {
        jquery__WEBPACK_IMPORTED_MODULE_0__('.m-subheader__title').text(title);
    }
    /**
     * Breadcrumbs markup
     * @param breadcrumbs
     */
    static setBreadcrumbs(breadcrumbs) {
        if (breadcrumbs)
            jquery__WEBPACK_IMPORTED_MODULE_0__('.m-subheader__title').addClass('m-subheader__title--separator');
        let ul = jquery__WEBPACK_IMPORTED_MODULE_0__('.m-subheader__breadcrumbs');
        if (jquery__WEBPACK_IMPORTED_MODULE_0__(ul).length === 0) {
            ul = jquery__WEBPACK_IMPORTED_MODULE_0__('<ul/>').addClass('m-subheader__breadcrumbs m-nav m-nav--inline')
                .append(jquery__WEBPACK_IMPORTED_MODULE_0__('<li/>').addClass('m-nav__item')
                .append(jquery__WEBPACK_IMPORTED_MODULE_0__('<a/>').addClass('m-nav__link m-nav__link--icon')
                .append(jquery__WEBPACK_IMPORTED_MODULE_0__('<i/>').addClass('m-nav__link-icon la la-home'))));
        }
        jquery__WEBPACK_IMPORTED_MODULE_0__(ul).find('li:not(:first-child)').remove();
        jquery__WEBPACK_IMPORTED_MODULE_0__["each"](breadcrumbs, function (k, v) {
            let li = jquery__WEBPACK_IMPORTED_MODULE_0__('<li/>').addClass('m-nav__item')
                .append(jquery__WEBPACK_IMPORTED_MODULE_0__('<a/>').addClass('m-nav__link m-nav__link--icon').attr('routerLink', v.href).attr('title', v.title)
                .append(jquery__WEBPACK_IMPORTED_MODULE_0__('<span/>').addClass('m-nav__link-text').text(v.text)));
            jquery__WEBPACK_IMPORTED_MODULE_0__(ul).append(jquery__WEBPACK_IMPORTED_MODULE_0__('<li/>').addClass('m-nav__separator').text('-')).append(li);
        });
        jquery__WEBPACK_IMPORTED_MODULE_0__('.m-subheader .m-stack__item:first-child').append(ul);
    }
    static setLoading(enable) {
        let body = jquery__WEBPACK_IMPORTED_MODULE_0__('body');
        if (enable) {
            jquery__WEBPACK_IMPORTED_MODULE_0__(body).addClass('m-page--loading-non-block');
        }
        else {
            jquery__WEBPACK_IMPORTED_MODULE_0__(body).removeClass('m-page--loading-non-block');
        }
    }
    static bodyClass(strClass) {
        jquery__WEBPACK_IMPORTED_MODULE_0__('body').attr('class', strClass);
    }
}


/***/ }),

/***/ "./src/app/theme/layouts/aside-nav/aside-nav.component.ts":
/*!****************************************************************!*\
  !*** ./src/app/theme/layouts/aside-nav/aside-nav.component.ts ***!
  \****************************************************************/
/*! exports provided: AsideNavComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AsideNavComponent", function() { return AsideNavComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");


let AsideNavComponent = class AsideNavComponent {
    constructor() {
    }
    ngOnInit() {
        let currentUser = JSON.parse(localStorage.getItem('currentUser'));
        this.role = currentUser.success.role;
        this.permission = currentUser.success.permission;
    }
    ngAfterViewInit() {
        mLayout.initAside();
    }
};
AsideNavComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: "app-aside-nav",
        template: __webpack_require__(/*! raw-loader!./aside-nav.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/layouts/aside-nav/aside-nav.component.html"),
        encapsulation: _angular_core__WEBPACK_IMPORTED_MODULE_1__["ViewEncapsulation"].None,
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [])
], AsideNavComponent);



/***/ }),

/***/ "./src/app/theme/layouts/field-error-display/field-error-display.component.css":
/*!*************************************************************************************!*\
  !*** ./src/app/theme/layouts/field-error-display/field-error-display.component.css ***!
  \*************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".error-msg {\n  color: red;\n}\n.fix-error-icon {\n  top: 27px;\n}\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvdGhlbWUvbGF5b3V0cy9maWVsZC1lcnJvci1kaXNwbGF5L2ZpZWxkLWVycm9yLWRpc3BsYXkuY29tcG9uZW50LmNzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtFQUNFLFVBQVU7QUFDWjtBQUNBO0VBQ0UsU0FBUztBQUNYIiwiZmlsZSI6InNyYy9hcHAvdGhlbWUvbGF5b3V0cy9maWVsZC1lcnJvci1kaXNwbGF5L2ZpZWxkLWVycm9yLWRpc3BsYXkuY29tcG9uZW50LmNzcyIsInNvdXJjZXNDb250ZW50IjpbIi5lcnJvci1tc2cge1xuICBjb2xvcjogcmVkO1xufVxuLmZpeC1lcnJvci1pY29uIHtcbiAgdG9wOiAyN3B4O1xufSJdfQ== */"

/***/ }),

/***/ "./src/app/theme/layouts/field-error-display/field-error-display.component.ts":
/*!************************************************************************************!*\
  !*** ./src/app/theme/layouts/field-error-display/field-error-display.component.ts ***!
  \************************************************************************************/
/*! exports provided: FieldErrorDisplayComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "FieldErrorDisplayComponent", function() { return FieldErrorDisplayComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");


let FieldErrorDisplayComponent = class FieldErrorDisplayComponent {
};
tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])(),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", String)
], FieldErrorDisplayComponent.prototype, "errorMsg", void 0);
tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])(),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Boolean)
], FieldErrorDisplayComponent.prototype, "displayError", void 0);
FieldErrorDisplayComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-field-error-display',
        template: __webpack_require__(/*! raw-loader!./field-error-display.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/layouts/field-error-display/field-error-display.component.html"),
        styles: [__webpack_require__(/*! ./field-error-display.component.css */ "./src/app/theme/layouts/field-error-display/field-error-display.component.css")]
    })
], FieldErrorDisplayComponent);



/***/ }),

/***/ "./src/app/theme/layouts/footer/footer.component.ts":
/*!**********************************************************!*\
  !*** ./src/app/theme/layouts/footer/footer.component.ts ***!
  \**********************************************************/
/*! exports provided: FooterComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "FooterComponent", function() { return FooterComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");


let FooterComponent = class FooterComponent {
    constructor() {
    }
    ngOnInit() {
    }
};
FooterComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: "app-footer",
        template: __webpack_require__(/*! raw-loader!./footer.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/layouts/footer/footer.component.html"),
        encapsulation: _angular_core__WEBPACK_IMPORTED_MODULE_1__["ViewEncapsulation"].None,
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [])
], FooterComponent);



/***/ }),

/***/ "./src/app/theme/layouts/header-nav/header-nav.component.ts":
/*!******************************************************************!*\
  !*** ./src/app/theme/layouts/header-nav/header-nav.component.ts ***!
  \******************************************************************/
/*! exports provided: HeaderNavComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "HeaderNavComponent", function() { return HeaderNavComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _auth_services_product_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../auth/_services/product.service */ "./src/app/auth/_services/product.service.ts");
/* harmony import */ var _services_data_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../_services/data.service */ "./src/app/_services/data.service.ts");




let HeaderNavComponent = class HeaderNavComponent {
    constructor(_dataService, _productService) {
        this._dataService = _dataService;
        this._productService = _productService;
    }
    ngOnInit() {
        this._dataService.getNotification().subscribe(data => {
            console.log('get notification', data);
            this.notificationCount = data;
        });
        let current_logged_user = JSON.parse(localStorage.getItem('currentUser'));
        console.log('current_logged_user', current_logged_user.success.f_name);
        // current_logged_user = current_logged_user.success.id;
        this.user_f_name = current_logged_user.success.f_name;
        this.user_l_name = current_logged_user.success.l_name;
        this.user_email = current_logged_user.success.email;
        // this._productService.getNotification(current_logged_user.id).subscribe(
        //     data => {
        //         this._dataService.setNotification(data.success.length);
        //         console.log(data.success.length);
        //     }
        // );
    }
    ngAfterViewInit() {
        mLayout.initHeader();
    }
};
HeaderNavComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: "app-header-nav",
        template: __webpack_require__(/*! raw-loader!./header-nav.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/layouts/header-nav/header-nav.component.html"),
        encapsulation: _angular_core__WEBPACK_IMPORTED_MODULE_1__["ViewEncapsulation"].None,
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_services_data_service__WEBPACK_IMPORTED_MODULE_3__["DataService"], _auth_services_product_service__WEBPACK_IMPORTED_MODULE_2__["ProductService"]])
], HeaderNavComponent);



/***/ }),

/***/ "./src/app/theme/layouts/layout.module.ts":
/*!************************************************!*\
  !*** ./src/app/theme/layouts/layout.module.ts ***!
  \************************************************/
/*! exports provided: LayoutModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "LayoutModule", function() { return LayoutModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _layout_layout_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./layout/layout.component */ "./src/app/theme/layouts/layout/layout.component.ts");
/* harmony import */ var _pages_aside_left_minimize_default_enabled_aside_left_minimize_default_enabled_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../pages/aside-left-minimize-default-enabled/aside-left-minimize-default-enabled.component */ "./src/app/theme/pages/aside-left-minimize-default-enabled/aside-left-minimize-default-enabled.component.ts");
/* harmony import */ var _header_nav_header_nav_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./header-nav/header-nav.component */ "./src/app/theme/layouts/header-nav/header-nav.component.ts");
/* harmony import */ var _pages_default_default_component__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../pages/default/default.component */ "./src/app/theme/pages/default/default.component.ts");
/* harmony import */ var _aside_nav_aside_nav_component__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./aside-nav/aside-nav.component */ "./src/app/theme/layouts/aside-nav/aside-nav.component.ts");
/* harmony import */ var _footer_footer_component__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./footer/footer.component */ "./src/app/theme/layouts/footer/footer.component.ts");
/* harmony import */ var _quick_sidebar_quick_sidebar_component__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./quick-sidebar/quick-sidebar.component */ "./src/app/theme/layouts/quick-sidebar/quick-sidebar.component.ts");
/* harmony import */ var _scroll_top_scroll_top_component__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./scroll-top/scroll-top.component */ "./src/app/theme/layouts/scroll-top/scroll-top.component.ts");
/* harmony import */ var _tooltips_tooltips_component__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./tooltips/tooltips.component */ "./src/app/theme/layouts/tooltips/tooltips.component.ts");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/fesm2015/common.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var _directives_href_prevent_default_directive__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ../../_directives/href-prevent-default.directive */ "./src/app/_directives/href-prevent-default.directive.ts");
/* harmony import */ var _directives_unwrap_tag_directive__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! ../../_directives/unwrap-tag.directive */ "./src/app/_directives/unwrap-tag.directive.ts");
/* harmony import */ var _side_bar_side_bar_component__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! ./side-bar/side-bar.component */ "./src/app/theme/layouts/side-bar/side-bar.component.ts");
/* harmony import */ var _side_bar_side_bar_service__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! ./side-bar/side-bar.service */ "./src/app/theme/layouts/side-bar/side-bar.service.ts");
/* harmony import */ var _services_data_service__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! ../../_services/data.service */ "./src/app/_services/data.service.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm2015/forms.js");
/* harmony import */ var _field_error_display_field_error_display_component__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! ./field-error-display/field-error-display.component */ "./src/app/theme/layouts/field-error-display/field-error-display.component.ts");
/* harmony import */ var primeng_primeng__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! primeng/primeng */ "./node_modules/primeng/primeng.js");
/* harmony import */ var primeng_primeng__WEBPACK_IMPORTED_MODULE_20___default = /*#__PURE__*/__webpack_require__.n(primeng_primeng__WEBPACK_IMPORTED_MODULE_20__);
/* harmony import */ var _side_bar_toggle_side_bar_toggle_component__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! ./side-bar-toggle/side-bar-toggle.component */ "./src/app/theme/layouts/side-bar-toggle/side-bar-toggle.component.ts");
/* harmony import */ var _pages_default_vendor_vendor_edit_vendor_edit_component__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! ../pages/default/vendor/vendor-edit/vendor-edit.component */ "./src/app/theme/pages/default/vendor/vendor-edit/vendor-edit.component.ts");
/* harmony import */ var _pages_default_product_shareable_products_edit_shareable_product_edit_shareable_product_component__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! ../pages/default/product/shareable-products/edit-shareable-product/edit-shareable-product.component */ "./src/app/theme/pages/default/product/shareable-products/edit-shareable-product/edit-shareable-product.component.ts");
/* harmony import */ var ngx_pagination__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(/*! ngx-pagination */ "./node_modules/ngx-pagination/dist/ngx-pagination.js");
/* harmony import */ var ng2_select__WEBPACK_IMPORTED_MODULE_25__ = __webpack_require__(/*! ng2-select */ "./node_modules/ng2-select/index.js");
/* harmony import */ var ng2_select__WEBPACK_IMPORTED_MODULE_25___default = /*#__PURE__*/__webpack_require__.n(ng2_select__WEBPACK_IMPORTED_MODULE_25__);
/* harmony import */ var _pages_default_color_add_color_add_color_component__WEBPACK_IMPORTED_MODULE_26__ = __webpack_require__(/*! ../pages/default/color/add-color/add-color.component */ "./src/app/theme/pages/default/color/add-color/add-color.component.ts");
/* harmony import */ var _pages_default_color_color_list_color_list_component__WEBPACK_IMPORTED_MODULE_27__ = __webpack_require__(/*! ../pages/default/color/color-list/color-list.component */ "./src/app/theme/pages/default/color/color-list/color-list.component.ts");
/* harmony import */ var _pages_default_size_add_size_add_size_component__WEBPACK_IMPORTED_MODULE_28__ = __webpack_require__(/*! ../pages/default/size/add-size/add-size.component */ "./src/app/theme/pages/default/size/add-size/add-size.component.ts");
/* harmony import */ var _pages_default_tags_add_tag_add_tag_component__WEBPACK_IMPORTED_MODULE_29__ = __webpack_require__(/*! ../pages/default/tags/add-tag/add-tag.component */ "./src/app/theme/pages/default/tags/add-tag/add-tag.component.ts");
/* harmony import */ var _pages_default_size_size_list_size_list_component__WEBPACK_IMPORTED_MODULE_30__ = __webpack_require__(/*! ../pages/default/size/size-list/size-list.component */ "./src/app/theme/pages/default/size/size-list/size-list.component.ts");
/* harmony import */ var _pages_default_tags_tag_list_tag_list_component__WEBPACK_IMPORTED_MODULE_31__ = __webpack_require__(/*! ../pages/default/tags/tag-list/tag-list.component */ "./src/app/theme/pages/default/tags/tag-list/tag-list.component.ts");
































let LayoutModule = class LayoutModule {
};
LayoutModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        declarations: [
            _layout_layout_component__WEBPACK_IMPORTED_MODULE_2__["LayoutComponent"],
            _pages_aside_left_minimize_default_enabled_aside_left_minimize_default_enabled_component__WEBPACK_IMPORTED_MODULE_3__["AsideLeftMinimizeDefaultEnabledComponent"],
            _header_nav_header_nav_component__WEBPACK_IMPORTED_MODULE_4__["HeaderNavComponent"],
            _pages_default_default_component__WEBPACK_IMPORTED_MODULE_5__["DefaultComponent"],
            _aside_nav_aside_nav_component__WEBPACK_IMPORTED_MODULE_6__["AsideNavComponent"],
            _footer_footer_component__WEBPACK_IMPORTED_MODULE_7__["FooterComponent"],
            _quick_sidebar_quick_sidebar_component__WEBPACK_IMPORTED_MODULE_8__["QuickSidebarComponent"],
            _scroll_top_scroll_top_component__WEBPACK_IMPORTED_MODULE_9__["ScrollTopComponent"],
            _tooltips_tooltips_component__WEBPACK_IMPORTED_MODULE_10__["TooltipsComponent"],
            _directives_href_prevent_default_directive__WEBPACK_IMPORTED_MODULE_13__["HrefPreventDefaultDirective"],
            _directives_unwrap_tag_directive__WEBPACK_IMPORTED_MODULE_14__["UnwrapTagDirective"],
            _side_bar_side_bar_component__WEBPACK_IMPORTED_MODULE_15__["SideBarComponent"],
            _field_error_display_field_error_display_component__WEBPACK_IMPORTED_MODULE_19__["FieldErrorDisplayComponent"],
            _side_bar_toggle_side_bar_toggle_component__WEBPACK_IMPORTED_MODULE_21__["SideBarToggleComponent"],
            _pages_default_vendor_vendor_edit_vendor_edit_component__WEBPACK_IMPORTED_MODULE_22__["VendorEditComponent"],
            _pages_default_product_shareable_products_edit_shareable_product_edit_shareable_product_component__WEBPACK_IMPORTED_MODULE_23__["EditShareableProductComponent"],
            _pages_default_color_add_color_add_color_component__WEBPACK_IMPORTED_MODULE_26__["AddColorComponent"], _pages_default_size_add_size_add_size_component__WEBPACK_IMPORTED_MODULE_28__["AddSizeComponent"], _pages_default_tags_add_tag_add_tag_component__WEBPACK_IMPORTED_MODULE_29__["AddTagComponent"],
            _pages_default_color_color_list_color_list_component__WEBPACK_IMPORTED_MODULE_27__["ColorListComponent"], _pages_default_size_size_list_size_list_component__WEBPACK_IMPORTED_MODULE_30__["SizeListComponent"], _pages_default_tags_tag_list_tag_list_component__WEBPACK_IMPORTED_MODULE_31__["TagListComponent"]
        ],
        exports: [
            _layout_layout_component__WEBPACK_IMPORTED_MODULE_2__["LayoutComponent"],
            _pages_aside_left_minimize_default_enabled_aside_left_minimize_default_enabled_component__WEBPACK_IMPORTED_MODULE_3__["AsideLeftMinimizeDefaultEnabledComponent"],
            _header_nav_header_nav_component__WEBPACK_IMPORTED_MODULE_4__["HeaderNavComponent"],
            _pages_default_default_component__WEBPACK_IMPORTED_MODULE_5__["DefaultComponent"],
            _aside_nav_aside_nav_component__WEBPACK_IMPORTED_MODULE_6__["AsideNavComponent"],
            _footer_footer_component__WEBPACK_IMPORTED_MODULE_7__["FooterComponent"],
            _quick_sidebar_quick_sidebar_component__WEBPACK_IMPORTED_MODULE_8__["QuickSidebarComponent"],
            _scroll_top_scroll_top_component__WEBPACK_IMPORTED_MODULE_9__["ScrollTopComponent"],
            _tooltips_tooltips_component__WEBPACK_IMPORTED_MODULE_10__["TooltipsComponent"],
            _directives_href_prevent_default_directive__WEBPACK_IMPORTED_MODULE_13__["HrefPreventDefaultDirective"],
            _side_bar_side_bar_component__WEBPACK_IMPORTED_MODULE_15__["SideBarComponent"],
            _field_error_display_field_error_display_component__WEBPACK_IMPORTED_MODULE_19__["FieldErrorDisplayComponent"],
            _side_bar_toggle_side_bar_toggle_component__WEBPACK_IMPORTED_MODULE_21__["SideBarToggleComponent"],
            _pages_default_color_add_color_add_color_component__WEBPACK_IMPORTED_MODULE_26__["AddColorComponent"], _pages_default_size_add_size_add_size_component__WEBPACK_IMPORTED_MODULE_28__["AddSizeComponent"], _pages_default_tags_add_tag_add_tag_component__WEBPACK_IMPORTED_MODULE_29__["AddTagComponent"],
            _pages_default_color_color_list_color_list_component__WEBPACK_IMPORTED_MODULE_27__["ColorListComponent"], _pages_default_size_size_list_size_list_component__WEBPACK_IMPORTED_MODULE_30__["SizeListComponent"], _pages_default_tags_tag_list_tag_list_component__WEBPACK_IMPORTED_MODULE_31__["TagListComponent"]
        ],
        imports: [
            _angular_common__WEBPACK_IMPORTED_MODULE_11__["CommonModule"],
            _angular_router__WEBPACK_IMPORTED_MODULE_12__["RouterModule"],
            _angular_forms__WEBPACK_IMPORTED_MODULE_18__["FormsModule"],
            _angular_forms__WEBPACK_IMPORTED_MODULE_18__["ReactiveFormsModule"],
            primeng_primeng__WEBPACK_IMPORTED_MODULE_20__["FileUploadModule"],
            ngx_pagination__WEBPACK_IMPORTED_MODULE_24__["NgxPaginationModule"],
            ng2_select__WEBPACK_IMPORTED_MODULE_25__["SelectModule"],
        ],
        providers: [_side_bar_side_bar_service__WEBPACK_IMPORTED_MODULE_16__["SideBarService"], _services_data_service__WEBPACK_IMPORTED_MODULE_17__["DataService"]],
    })
], LayoutModule);



/***/ }),

/***/ "./src/app/theme/layouts/layout/layout.component.ts":
/*!**********************************************************!*\
  !*** ./src/app/theme/layouts/layout/layout.component.ts ***!
  \**********************************************************/
/*! exports provided: LayoutComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "LayoutComponent", function() { return LayoutComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _services_data_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../_services/data.service */ "./src/app/_services/data.service.ts");



let LayoutComponent = class LayoutComponent {
    constructor(_dataService) {
        this._dataService = _dataService;
    }
    ngOnInit() {
        this._dataService.getNotification().subscribe(data => {
            console.log('get notification', data);
            // this.notificationCount = data;
        });
    }
};
LayoutComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: ".m-grid.m-grid--hor.m-grid--root.m-page",
        template: __webpack_require__(/*! raw-loader!./layout.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/layouts/layout/layout.component.html"),
        encapsulation: _angular_core__WEBPACK_IMPORTED_MODULE_1__["ViewEncapsulation"].None,
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_services_data_service__WEBPACK_IMPORTED_MODULE_2__["DataService"]])
], LayoutComponent);



/***/ }),

/***/ "./src/app/theme/layouts/quick-sidebar/quick-sidebar.component.ts":
/*!************************************************************************!*\
  !*** ./src/app/theme/layouts/quick-sidebar/quick-sidebar.component.ts ***!
  \************************************************************************/
/*! exports provided: QuickSidebarComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "QuickSidebarComponent", function() { return QuickSidebarComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");


let QuickSidebarComponent = class QuickSidebarComponent {
    constructor() {
    }
    ngOnInit() {
    }
};
QuickSidebarComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: "app-quick-sidebar",
        template: __webpack_require__(/*! raw-loader!./quick-sidebar.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/layouts/quick-sidebar/quick-sidebar.component.html"),
        encapsulation: _angular_core__WEBPACK_IMPORTED_MODULE_1__["ViewEncapsulation"].None,
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [])
], QuickSidebarComponent);



/***/ }),

/***/ "./src/app/theme/layouts/scroll-top/scroll-top.component.ts":
/*!******************************************************************!*\
  !*** ./src/app/theme/layouts/scroll-top/scroll-top.component.ts ***!
  \******************************************************************/
/*! exports provided: ScrollTopComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ScrollTopComponent", function() { return ScrollTopComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");


let ScrollTopComponent = class ScrollTopComponent {
    constructor() {
    }
    ngOnInit() {
    }
};
ScrollTopComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: "app-scroll-top",
        template: __webpack_require__(/*! raw-loader!./scroll-top.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/layouts/scroll-top/scroll-top.component.html"),
        encapsulation: _angular_core__WEBPACK_IMPORTED_MODULE_1__["ViewEncapsulation"].None,
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [])
], ScrollTopComponent);



/***/ }),

/***/ "./src/app/theme/layouts/side-bar-toggle/side-bar-toggle.component.css":
/*!*****************************************************************************!*\
  !*** ./src/app/theme/layouts/side-bar-toggle/side-bar-toggle.component.css ***!
  \*****************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ":host {\n  display: inline-block;\n  padding: 10px;\n  cursor: pointer;\n}\n\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvdGhlbWUvbGF5b3V0cy9zaWRlLWJhci10b2dnbGUvc2lkZS1iYXItdG9nZ2xlLmNvbXBvbmVudC5jc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7RUFDRSxxQkFBcUI7RUFDckIsYUFBYTtFQUNiLGVBQWU7QUFDakIiLCJmaWxlIjoic3JjL2FwcC90aGVtZS9sYXlvdXRzL3NpZGUtYmFyLXRvZ2dsZS9zaWRlLWJhci10b2dnbGUuY29tcG9uZW50LmNzcyIsInNvdXJjZXNDb250ZW50IjpbIjpob3N0IHtcbiAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICBwYWRkaW5nOiAxMHB4O1xuICBjdXJzb3I6IHBvaW50ZXI7XG59XG4iXX0= */"

/***/ }),

/***/ "./src/app/theme/layouts/side-bar-toggle/side-bar-toggle.component.ts":
/*!****************************************************************************!*\
  !*** ./src/app/theme/layouts/side-bar-toggle/side-bar-toggle.component.ts ***!
  \****************************************************************************/
/*! exports provided: SideBarToggleComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "SideBarToggleComponent", function() { return SideBarToggleComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _side_bar_side_bar_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../side-bar/side-bar.service */ "./src/app/theme/layouts/side-bar/side-bar.service.ts");
/* harmony import */ var _side_bar_side_bar_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../side-bar/side-bar.component */ "./src/app/theme/layouts/side-bar/side-bar.component.ts");
/* harmony import */ var _services_data_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../../_services/data.service */ "./src/app/_services/data.service.ts");





let SideBarToggleComponent = class SideBarToggleComponent {
    constructor(sideBarService, _dataService) {
        this.sideBarService = sideBarService;
        this._dataService = _dataService;
    }
    click() {
        this._dataService.setsideBarData(this.sideBarValue);
        this.sideBarService.toggle();
    }
};
tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])(),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", _side_bar_side_bar_component__WEBPACK_IMPORTED_MODULE_3__["SideBarComponent"])
], SideBarToggleComponent.prototype, "sideBarValue", void 0);
tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["HostListener"])('click'),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Function),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", []),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:returntype", void 0)
], SideBarToggleComponent.prototype, "click", null);
SideBarToggleComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-side-bar-toggle',
        template: __webpack_require__(/*! raw-loader!./side-bar-toggle.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/layouts/side-bar-toggle/side-bar-toggle.component.html"),
        styles: [__webpack_require__(/*! ./side-bar-toggle.component.css */ "./src/app/theme/layouts/side-bar-toggle/side-bar-toggle.component.css")]
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_side_bar_side_bar_service__WEBPACK_IMPORTED_MODULE_2__["SideBarService"],
        _services_data_service__WEBPACK_IMPORTED_MODULE_4__["DataService"]])
], SideBarToggleComponent);



/***/ }),

/***/ "./src/app/theme/layouts/side-bar/side-bar.component.css":
/*!***************************************************************!*\
  !*** ./src/app/theme/layouts/side-bar/side-bar.component.css ***!
  \***************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ":host {\n  box-sizing: border-box;\n  display: none;\n  position: fixed;\n  right: 0;\n  top: 65px;\n  width: 438px;   \n  height: 100%;\n  max-height: calc(100vh - 9rem);\n  overflow-y: auto;\n  padding: 20px 10px;\n  background: #f4f3f8;\n  z-index: 9;\n}\n\n:host.is-open {\n  display: block;\n}\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvdGhlbWUvbGF5b3V0cy9zaWRlLWJhci9zaWRlLWJhci5jb21wb25lbnQuY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0VBQ0Usc0JBQXNCO0VBQ3RCLGFBQWE7RUFDYixlQUFlO0VBQ2YsUUFBUTtFQUNSLFNBQVM7RUFDVCxZQUFZO0VBQ1osWUFBWTtFQUNaLDhCQUE4QjtFQUM5QixnQkFBZ0I7RUFDaEIsa0JBQWtCO0VBQ2xCLG1CQUFtQjtFQUNuQixVQUFVO0FBQ1o7O0FBRUE7RUFDRSxjQUFjO0FBQ2hCIiwiZmlsZSI6InNyYy9hcHAvdGhlbWUvbGF5b3V0cy9zaWRlLWJhci9zaWRlLWJhci5jb21wb25lbnQuY3NzIiwic291cmNlc0NvbnRlbnQiOlsiOmhvc3Qge1xuICBib3gtc2l6aW5nOiBib3JkZXItYm94O1xuICBkaXNwbGF5OiBub25lO1xuICBwb3NpdGlvbjogZml4ZWQ7XG4gIHJpZ2h0OiAwO1xuICB0b3A6IDY1cHg7XG4gIHdpZHRoOiA0MzhweDsgICBcbiAgaGVpZ2h0OiAxMDAlO1xuICBtYXgtaGVpZ2h0OiBjYWxjKDEwMHZoIC0gOXJlbSk7XG4gIG92ZXJmbG93LXk6IGF1dG87XG4gIHBhZGRpbmc6IDIwcHggMTBweDtcbiAgYmFja2dyb3VuZDogI2Y0ZjNmODtcbiAgei1pbmRleDogOTtcbn1cblxuOmhvc3QuaXMtb3BlbiB7XG4gIGRpc3BsYXk6IGJsb2NrO1xufSJdfQ== */"

/***/ }),

/***/ "./src/app/theme/layouts/side-bar/side-bar.component.ts":
/*!**************************************************************!*\
  !*** ./src/app/theme/layouts/side-bar/side-bar.component.ts ***!
  \**************************************************************/
/*! exports provided: SideBarComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "SideBarComponent", function() { return SideBarComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _side_bar_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./side-bar.service */ "./src/app/theme/layouts/side-bar/side-bar.service.ts");
/* harmony import */ var _services_data_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../_services/data.service */ "./src/app/_services/data.service.ts");




let SideBarComponent = class SideBarComponent {
    constructor(sideBarService, _dataService) {
        this.sideBarService = sideBarService;
        this._dataService = _dataService;
        this.isOpen = false;
    }
    ngOnInit() {
        this._dataService.getloaderState().subscribe(data => {
            this.isOpen = data;
        });
        this._dataService.getactiveMenu().subscribe(data => {
            this.activeSelector = data;
        });
        this.sideBarService.change.subscribe(isOpen => {
            this.isOpen = isOpen;
        });
    }
};
tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["HostBinding"])('class.is-open'),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", Object)
], SideBarComponent.prototype, "isOpen", void 0);
SideBarComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-side-bar',
        template: __webpack_require__(/*! raw-loader!./side-bar.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/layouts/side-bar/side-bar.component.html"),
        styles: [__webpack_require__(/*! ./side-bar.component.css */ "./src/app/theme/layouts/side-bar/side-bar.component.css")]
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_side_bar_service__WEBPACK_IMPORTED_MODULE_2__["SideBarService"],
        _services_data_service__WEBPACK_IMPORTED_MODULE_3__["DataService"]])
], SideBarComponent);



/***/ }),

/***/ "./src/app/theme/layouts/side-bar/side-bar.service.ts":
/*!************************************************************!*\
  !*** ./src/app/theme/layouts/side-bar/side-bar.service.ts ***!
  \************************************************************/
/*! exports provided: SideBarService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "SideBarService", function() { return SideBarService; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _services_data_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../_services/data.service */ "./src/app/_services/data.service.ts");



let SideBarService = class SideBarService {
    constructor(_dataService) {
        this._dataService = _dataService;
        this.isOpen = false;
        this.change = new _angular_core__WEBPACK_IMPORTED_MODULE_1__["EventEmitter"]();
    }
    toggle() {
        this._dataService.setloaderState(true);
    }
};
tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Output"])(),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:type", _angular_core__WEBPACK_IMPORTED_MODULE_1__["EventEmitter"])
], SideBarService.prototype, "change", void 0);
SideBarService = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])(),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_services_data_service__WEBPACK_IMPORTED_MODULE_2__["DataService"]])
], SideBarService);



/***/ }),

/***/ "./src/app/theme/layouts/tooltips/tooltips.component.ts":
/*!**************************************************************!*\
  !*** ./src/app/theme/layouts/tooltips/tooltips.component.ts ***!
  \**************************************************************/
/*! exports provided: TooltipsComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "TooltipsComponent", function() { return TooltipsComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");


let TooltipsComponent = class TooltipsComponent {
    constructor() {
    }
    ngOnInit() {
    }
};
TooltipsComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: "app-tooltips",
        template: __webpack_require__(/*! raw-loader!./tooltips.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/layouts/tooltips/tooltips.component.html"),
        encapsulation: _angular_core__WEBPACK_IMPORTED_MODULE_1__["ViewEncapsulation"].None,
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [])
], TooltipsComponent);



/***/ }),

/***/ "./src/app/theme/pages/aside-left-minimize-default-enabled/aside-left-minimize-default-enabled.component.ts":
/*!******************************************************************************************************************!*\
  !*** ./src/app/theme/pages/aside-left-minimize-default-enabled/aside-left-minimize-default-enabled.component.ts ***!
  \******************************************************************************************************************/
/*! exports provided: AsideLeftMinimizeDefaultEnabledComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AsideLeftMinimizeDefaultEnabledComponent", function() { return AsideLeftMinimizeDefaultEnabledComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");


let AsideLeftMinimizeDefaultEnabledComponent = class AsideLeftMinimizeDefaultEnabledComponent {
    constructor() {
    }
    ngOnInit() {
    }
};
AsideLeftMinimizeDefaultEnabledComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: ".m-grid__item.m-grid__item--fluid.m-grid.m-grid--ver-desktop.m-grid--desktop.m-body",
        template: __webpack_require__(/*! raw-loader!./aside-left-minimize-default-enabled.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/pages/aside-left-minimize-default-enabled/aside-left-minimize-default-enabled.component.html"),
        encapsulation: _angular_core__WEBPACK_IMPORTED_MODULE_1__["ViewEncapsulation"].None,
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [])
], AsideLeftMinimizeDefaultEnabledComponent);



/***/ }),

/***/ "./src/app/theme/pages/default/color/add-color/add-color.component.ts":
/*!****************************************************************************!*\
  !*** ./src/app/theme/pages/default/color/add-color/add-color.component.ts ***!
  \****************************************************************************/
/*! exports provided: AddColorComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AddColorComponent", function() { return AddColorComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _auth_services_product_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../auth/_services/product.service */ "./src/app/auth/_services/product.service.ts");
/* harmony import */ var _services_data_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../../_services/data.service */ "./src/app/_services/data.service.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm2015/forms.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var ngx_toastr__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ngx-toastr */ "./node_modules/ngx-toastr/fesm2015/ngx-toastr.js");



// import { SideBarService } from '../../../../layouts/side-bar/side-bar.service';
// import { SideBarToggleComponent } from '../../../../layouts/side-bar-toggle/side-bar-toggle.component';




let AddColorComponent = class AddColorComponent {
    constructor(toastr, route, router, formBuilder, _dataService, _productService) {
        this.toastr = toastr;
        this.route = route;
        this.router = router;
        this.formBuilder = formBuilder;
        this._dataService = _dataService;
        this._productService = _productService;
        this.searchValue = "";
        this.dropDownValue = '';
        this.noOfPage = '';
        this.attributeData = '';
        this.selectedStatus = '';
        this.p = 1;
    }
    ngOnInit() {
        /*user permission*/
        let currentUser = JSON.parse(localStorage.getItem('currentUser'));
        let permission = currentUser.success.permission;
        if (permission.product_color != 1) {
            this.toastr.error('You have not permission to visit this page.', 'Error Message');
            this.router.navigate(['/']);
        }
        /*user permission*/
        this.form = this.formBuilder.group({
            color_name: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            color_code: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            status: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required]
        });
        this.currentUser = JSON.parse(localStorage.getItem('currentUser'));
    }
    isFieldValid(field) {
        return (
        //console.log('this.form.get',this.form.get(field));
        (!this.form.get(field).valid && this.form.get(field).touched) ||
            (this.form.get(field).untouched && this.formSumitAttempt));
    }
    displayFieldCss(field) {
        return {
            'has-error': this.isFieldValid(field),
            'has-feedback': this.isFieldValid(field)
        };
    }
    onSubmit() {
        this.formSumitAttempt = true;
        this.route.params.subscribe(params => {
            if (params.id) {
                this.product_id = params.id;
                if (this.form.valid) {
                    this._productService.addColor({ form_data: this.form.value, fk_user_id: this.currentUser.success.id, fk_product_id: parseInt(this.product_id) }).subscribe(data => {
                        //this.attributeData = data.success;
                        console.log(data);
                        this.toastr.success('Product Color Added Successfully', 'Success Message');
                        this.attributeData = data.data;
                        // that.form.c;
                        this.reset();
                    });
                }
            }
        });
    }
    reset() {
        if (this.selectedStatus != '') {
            this.form.reset();
            this.selectedStatus = '';
            this.formSumitAttempt = false;
        }
    }
    search() {
        this.formSumitAttempt = true;
    }
    vendor_delete(del_id) {
    }
    changeStatus(user) {
    }
};
AddColorComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-add-color-list',
        template: __webpack_require__(/*! raw-loader!./add-color.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/color/add-color/add-color.component.html")
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [ngx_toastr__WEBPACK_IMPORTED_MODULE_6__["ToastrService"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["ActivatedRoute"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["Router"], _angular_forms__WEBPACK_IMPORTED_MODULE_4__["FormBuilder"], _services_data_service__WEBPACK_IMPORTED_MODULE_3__["DataService"], _auth_services_product_service__WEBPACK_IMPORTED_MODULE_2__["ProductService"]])
], AddColorComponent);



/***/ }),

/***/ "./src/app/theme/pages/default/color/color-list/color-list.component.ts":
/*!******************************************************************************!*\
  !*** ./src/app/theme/pages/default/color/color-list/color-list.component.ts ***!
  \******************************************************************************/
/*! exports provided: ColorListComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ColorListComponent", function() { return ColorListComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _auth_services_product_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../auth/_services/product.service */ "./src/app/auth/_services/product.service.ts");
/* harmony import */ var _services_data_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../../_services/data.service */ "./src/app/_services/data.service.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm2015/forms.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var ngx_toastr__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ngx-toastr */ "./node_modules/ngx-toastr/fesm2015/ngx-toastr.js");



// import { SideBarService } from '../../../../layouts/side-bar/side-bar.service';
// import { SideBarToggleComponent } from '../../../../layouts/side-bar-toggle/side-bar-toggle.component';




let ColorListComponent = class ColorListComponent {
    constructor(toastr, router, route, formBuilder, _dataService, _productService) {
        this.toastr = toastr;
        this.router = router;
        this.route = route;
        this.formBuilder = formBuilder;
        this._dataService = _dataService;
        this._productService = _productService;
        this.noOfPage = '';
        this.searchValue = "";
        this.dropDownValue = '';
        this.attributeData = '';
        this.selectedStatus = '';
        this.p = 1;
    }
    ngOnInit() {
        /*user permission*/
        let currentUser = JSON.parse(localStorage.getItem('currentUser'));
        let permission = currentUser.success.permission;
        if (permission.product_color != 1) {
            this.toastr.error('You have not permission to visit this page.', 'Error Message');
            this.router.navigate(['/']);
        }
        /*user permission*/
        this.form = this.formBuilder.group({
            color_name: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            color_code: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            status: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required]
        });
        this.currentUser = JSON.parse(localStorage.getItem('currentUser'));
        let user_id;
        user_id = this.currentUser.success.id;
        this.route.params.subscribe(params => {
            if (params.product_id) {
                this._productService.getColor(params.product_id).subscribe(data => {
                    console.log(data.success);
                    this.colorData = data.success;
                    this.noOfPage = data.success.length;
                    console.log('getColor', data.success);
                });
            }
        });
    }
    onSubmit() {
        this.formSumitAttempt = true;
        this.route.params.subscribe(params => {
            if (params.id) {
                this.product_id = params.id;
                if (this.form.valid && this.productImgUrl) {
                    this.form.value.product_img = this.productImgUrl;
                    this._productService.addColor({ form_data: this.form.value, fk_user_id: this.currentUser.success.id, fk_product_id: parseInt(this.product_id) }).subscribe(data => {
                        //this.attributeData = data.success;
                        console.log(data);
                        this.toastr.success('Product Color Added Successfully', 'Success Message');
                        this.attributeData = data.data;
                        // that.form.c;
                        this.reset();
                        this._productService.getColor(params.id).subscribe(data => {
                            //  console.log(user_id);
                            this.colorData = data.success;
                            this.noOfPage = data.success.length;
                        });
                    });
                }
            }
        });
    }
    handleFileInput(files) {
        let file = files.item(0);
        var reader = new FileReader();
        reader.onload = (event) => {
            this.productImgUrl = event.target.result;
        };
        reader.readAsDataURL(file);
    }
    isFieldValid(field) {
        return (
        //console.log('this.form.get',this.form.get(field));
        (!this.form.get(field).valid && this.form.get(field).touched) ||
            (this.form.get(field).untouched && this.formSumitAttempt));
    }
    displayFieldCss(field) {
        return {
            'has-error': this.isFieldValid(field),
            'has-feedback': this.isFieldValid(field)
        };
    }
    reset() {
        if (this.selectedStatus != '') {
            this.form.reset();
            this.selectedStatus = '';
            this.formSumitAttempt = false;
        }
    }
    search() {
        this.formSumitAttempt = true;
        this._productService.colorSearching({
            search_value: this.searchValue, dropdown_value: this.dropDownValue, user_id: this.currentUser.success.id
        }).subscribe(data => {
            this.colorData = data.success;
        });
    }
    vendor_delete(del_id) {
        //  console.log(del_id);
        let value = confirm('Are you want to delete this vendor ?');
        // console.log(value);
        if (value) {
        }
    }
    changeStatus(user) {
        console.log(user.status);
        if (user.status == 'Active') {
            user.status = 'Inactive';
            this._productService.updateColorStatus(user.id).subscribe(data => {
                console.log('update', data);
            });
        }
        else {
            user.status = 'Active';
            this._productService.updateColorStatus(user.id).subscribe(data => {
                console.log('update', data);
            });
        }
    }
};
ColorListComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-color-list',
        template: __webpack_require__(/*! raw-loader!./color-list.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/color/color-list/color-list.component.html")
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [ngx_toastr__WEBPACK_IMPORTED_MODULE_6__["ToastrService"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["Router"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["ActivatedRoute"], _angular_forms__WEBPACK_IMPORTED_MODULE_4__["FormBuilder"], _services_data_service__WEBPACK_IMPORTED_MODULE_3__["DataService"], _auth_services_product_service__WEBPACK_IMPORTED_MODULE_2__["ProductService"]])
], ColorListComponent);



/***/ }),

/***/ "./src/app/theme/pages/default/default.component.ts":
/*!**********************************************************!*\
  !*** ./src/app/theme/pages/default/default.component.ts ***!
  \**********************************************************/
/*! exports provided: DefaultComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "DefaultComponent", function() { return DefaultComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");


let DefaultComponent = class DefaultComponent {
    constructor() {
    }
    ngOnInit() {
    }
};
DefaultComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: ".m-grid__item.m-grid__item--fluid.m-grid.m-grid--ver-desktop.m-grid--desktop.m-body",
        template: __webpack_require__(/*! raw-loader!./default.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/default.component.html"),
        encapsulation: _angular_core__WEBPACK_IMPORTED_MODULE_1__["ViewEncapsulation"].None,
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [])
], DefaultComponent);



/***/ }),

/***/ "./src/app/theme/pages/default/product/shareable-products/edit-shareable-product/edit-shareable-product.component.ts":
/*!***************************************************************************************************************************!*\
  !*** ./src/app/theme/pages/default/product/shareable-products/edit-shareable-product/edit-shareable-product.component.ts ***!
  \***************************************************************************************************************************/
/*! exports provided: EditShareableProductComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "EditShareableProductComponent", function() { return EditShareableProductComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _services_data_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../_services/data.service */ "./src/app/_services/data.service.ts");
/* harmony import */ var _auth_services_product_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../../../auth/_services/product.service */ "./src/app/auth/_services/product.service.ts");
/* harmony import */ var ngx_toastr__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ngx-toastr */ "./node_modules/ngx-toastr/fesm2015/ngx-toastr.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");






let EditShareableProductComponent = class EditShareableProductComponent {
    constructor(_dataService, _productService, toastr, router) {
        this._dataService = _dataService;
        this._productService = _productService;
        this.toastr = toastr;
        this.router = router;
        this.isReadOnly = true;
    }
    ngOnInit() {
        /*user permission*/
        let currentUser = JSON.parse(localStorage.getItem('currentUser'));
        let permission = currentUser.success.permission;
        if (permission.product_edit != 1) {
            this.toastr.error('You have not permission to visit this page.', 'Error Message');
            this.router.navigate(['/']);
        }
        /*user permission*/
        this._dataService.getsideBarData().subscribe(data => {
            this.selectedProductData = data;
        });
    }
    editMode() {
        this.isReadOnly = false;
    }
    closeSidebar() {
        this.isReadOnly = true;
        this._dataService.setloaderState(false);
    }
    UpdateVendor() {
        // console.log(this.selectedVendorData);
        // this._productService.update(this.selectedVendorData);
    }
};
EditShareableProductComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'edit-shareable-product',
        template: __webpack_require__(/*! raw-loader!./edit-shareable-product.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/product/shareable-products/edit-shareable-product/edit-shareable-product.component.html"),
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_services_data_service__WEBPACK_IMPORTED_MODULE_2__["DataService"], _auth_services_product_service__WEBPACK_IMPORTED_MODULE_3__["ProductService"], ngx_toastr__WEBPACK_IMPORTED_MODULE_4__["ToastrService"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["Router"]])
], EditShareableProductComponent);



/***/ }),

/***/ "./src/app/theme/pages/default/size/add-size/add-size.component.ts":
/*!*************************************************************************!*\
  !*** ./src/app/theme/pages/default/size/add-size/add-size.component.ts ***!
  \*************************************************************************/
/*! exports provided: AddSizeComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AddSizeComponent", function() { return AddSizeComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _auth_services_product_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../auth/_services/product.service */ "./src/app/auth/_services/product.service.ts");
/* harmony import */ var _services_data_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../../_services/data.service */ "./src/app/_services/data.service.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm2015/forms.js");



// import { SideBarService } from '../../../../layouts/side-bar/side-bar.service';
// import { SideBarToggleComponent } from '../../../../layouts/side-bar-toggle/side-bar-toggle.component';


let AddSizeComponent = class AddSizeComponent {
    constructor(formBuilder, _dataService, _productService) {
        this.formBuilder = formBuilder;
        this._dataService = _dataService;
        this._productService = _productService;
        this.searchValue = "";
        this.dropDownValue = '';
        this.noOfPage = '';
        this.attributeData = '';
        this.selectedStatus = '';
        this.user_id = '';
        this.p = 1;
    }
    ngOnInit() {
        this.form = this.formBuilder.group({
            size_name: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            status: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required]
        });
        if (JSON.parse(localStorage.getItem('product'))) {
            this.product_id = JSON.parse(localStorage.getItem('product'));
        }
        this.currentUser = JSON.parse(localStorage.getItem('currentUser'));
        this.user_id = this.currentUser.success.id;
    }
    isFieldValid(field) {
        return (
        //console.log('this.form.get',this.form.get(field));
        (!this.form.get(field).valid && this.form.get(field).touched) ||
            (this.form.get(field).untouched && this.formSumitAttempt));
    }
    displayFieldCss(field) {
        return {
            'has-error': this.isFieldValid(field),
            'has-feedback': this.isFieldValid(field)
        };
    }
    onSubmit() {
        this.formSumitAttempt = true;
        if (this.form.valid) {
            let that = this;
            console.log(this.product_id);
            this._productService.addSize({ form_data: this.form.value, fk_user_id: this.user_id, fk_product_id: parseInt(this.product_id) }).subscribe(data => {
                //this.attributeData = data.success;
                console.log(data);
                this.attributeData = data.data;
                // that.form.c;
                this.reset();
            });
        }
    }
    reset() {
        if (this.selectedStatus != '') {
            this.form.reset();
            this.selectedStatus = '';
            this.formSumitAttempt = false;
        }
    }
    search() {
        this.formSumitAttempt = true;
    }
    vendor_delete(del_id) {
    }
    changeStatus(user) {
    }
};
AddSizeComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-add-size-list',
        template: __webpack_require__(/*! raw-loader!./add-size.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/size/add-size/add-size.component.html")
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_forms__WEBPACK_IMPORTED_MODULE_4__["FormBuilder"], _services_data_service__WEBPACK_IMPORTED_MODULE_3__["DataService"], _auth_services_product_service__WEBPACK_IMPORTED_MODULE_2__["ProductService"]])
], AddSizeComponent);



/***/ }),

/***/ "./src/app/theme/pages/default/size/size-list/size-list.component.ts":
/*!***************************************************************************!*\
  !*** ./src/app/theme/pages/default/size/size-list/size-list.component.ts ***!
  \***************************************************************************/
/*! exports provided: SizeListComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "SizeListComponent", function() { return SizeListComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _auth_services_product_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../auth/_services/product.service */ "./src/app/auth/_services/product.service.ts");
/* harmony import */ var _services_data_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../../_services/data.service */ "./src/app/_services/data.service.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm2015/forms.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var ngx_toastr__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ngx-toastr */ "./node_modules/ngx-toastr/fesm2015/ngx-toastr.js");



// import { SideBarService } from '../../../../layouts/side-bar/side-bar.service';
// import { SideBarToggleComponent } from '../../../../layouts/side-bar-toggle/side-bar-toggle.component';




let SizeListComponent = class SizeListComponent {
    constructor(toastr, route, router, formBuilder, _dataService, _productService) {
        this.toastr = toastr;
        this.route = route;
        this.router = router;
        this.formBuilder = formBuilder;
        this._dataService = _dataService;
        this._productService = _productService;
        this.searchValue = "";
        this.dropDownValue = '';
        this.noOfPage = '';
        this.p = 1;
        this.attributeData = '';
        this.selectedStatus = '';
        this.user_id = '';
    }
    ngOnInit() {
        this.form = this.formBuilder.group({
            size_name: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            status: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required]
        });
        this.currentUser = JSON.parse(localStorage.getItem('currentUser'));
        this.user_id = this.currentUser.success.id;
        this.route.params.subscribe(params => {
            if (params.product_id) {
                this._productService.getSize(params.product_id).subscribe(data => {
                    this.sizeData = data.success;
                    this.noOfPage = data.success.length;
                    console.log('getSize', data.success);
                });
            }
        });
    }
    isFieldValid(field) {
        return (
        //console.log('this.form.get',this.form.get(field));
        (!this.form.get(field).valid && this.form.get(field).touched) ||
            (this.form.get(field).untouched && this.formSumitAttempt));
    }
    displayFieldCss(field) {
        return {
            'has-error': this.isFieldValid(field),
            'has-feedback': this.isFieldValid(field)
        };
    }
    onSubmit() {
        this.formSumitAttempt = true;
        this.route.params.subscribe(params => {
            if (params.id) {
                this.product_id = params.id;
                if (this.form.valid) {
                    let that = this;
                    this._productService.addSize({ form_data: this.form.value, fk_user_id: this.user_id, fk_product_id: params.id }).subscribe(data => {
                        //this.attributeData = data.success;
                        this.attributeData = data.data;
                        this.toastr.success('Product Size Added Successfully', 'Success Message');
                        this.reset();
                        this._productService.getSize(params.id).subscribe(data => {
                            this.sizeData = data.success;
                            this.noOfPage = data.success.length;
                            // console.log(data.success.length);
                        });
                    });
                }
            }
        });
    }
    reset() {
        if (this.selectedStatus != '') {
            this.form.reset();
            this.selectedStatus = '';
            this.formSumitAttempt = false;
        }
    }
    search() {
        this.formSumitAttempt = true;
        this._productService.sizeSearching({
            search_value: this.searchValue, dropdown_value: this.dropDownValue, user_id: this.currentUser.success.id
        }).subscribe(data => {
            this.sizeData = data.success;
        });
    }
    vendor_delete(del_id) {
        //  console.log(del_id);
        let value = confirm('Are you want to delete this vendor ?');
        // console.log(value);
        if (value) {
        }
    }
    changeStatus(user) {
        console.log(user.status);
        if (user.status == 'Active') {
            user.status = 'Inactive';
            this._productService.updateSizeStatus(user.id).subscribe(data => {
                console.log('update', data);
            });
        }
        else {
            user.status = 'Active';
            this._productService.updateSizeStatus(user.id).subscribe(data => {
                console.log('update', data);
            });
        }
    }
};
SizeListComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-size-list',
        template: __webpack_require__(/*! raw-loader!./size-list.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/size/size-list/size-list.component.html")
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [ngx_toastr__WEBPACK_IMPORTED_MODULE_6__["ToastrService"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["ActivatedRoute"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["Router"], _angular_forms__WEBPACK_IMPORTED_MODULE_4__["FormBuilder"], _services_data_service__WEBPACK_IMPORTED_MODULE_3__["DataService"], _auth_services_product_service__WEBPACK_IMPORTED_MODULE_2__["ProductService"]])
], SizeListComponent);



/***/ }),

/***/ "./src/app/theme/pages/default/tags/add-tag/add-tag.component.ts":
/*!***********************************************************************!*\
  !*** ./src/app/theme/pages/default/tags/add-tag/add-tag.component.ts ***!
  \***********************************************************************/
/*! exports provided: AddTagComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AddTagComponent", function() { return AddTagComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _auth_services_product_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../auth/_services/product.service */ "./src/app/auth/_services/product.service.ts");
/* harmony import */ var _services_data_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../../_services/data.service */ "./src/app/_services/data.service.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm2015/forms.js");



// import { SideBarService } from '../../../../layouts/side-bar/side-bar.service';
// import { SideBarToggleComponent } from '../../../../layouts/side-bar-toggle/side-bar-toggle.component';


let AddTagComponent = class AddTagComponent {
    constructor(formBuilder, _dataService, _productService) {
        this.formBuilder = formBuilder;
        this._dataService = _dataService;
        this._productService = _productService;
        this.searchValue = "";
        this.dropDownValue = '';
        this.noOfPage = '';
        this.attributeData = '';
        this.selectedStatus = '';
        this.user_id = '';
        this.p = 1;
    }
    ngOnInit() {
        this.form = this.formBuilder.group({
            tag_name: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            description: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            status: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required]
        });
        if (JSON.parse(localStorage.getItem('product'))) {
            this.product_id = JSON.parse(localStorage.getItem('product'));
        }
        this.currentUser = JSON.parse(localStorage.getItem('currentUser'));
        this.user_id = this.currentUser.success.id;
    }
    isFieldValid(field) {
        return (
        //console.log('this.form.get',this.form.get(field));
        (!this.form.get(field).valid && this.form.get(field).touched) ||
            (this.form.get(field).untouched && this.formSumitAttempt));
    }
    displayFieldCss(field) {
        return {
            'has-error': this.isFieldValid(field),
            'has-feedback': this.isFieldValid(field)
        };
    }
    onSubmit() {
        this.formSumitAttempt = true;
        if (this.form.valid) {
            let that = this;
            console.log(this.product_id);
            this._productService.addTag({ form_data: this.form.value, fk_user_id: this.user_id }).subscribe(data => {
                //this.attributeData = data.success;
                console.log(data);
                this.attributeData = data.data;
                // that.form.c;
                this.reset();
            });
            /*this._productService.addTag({ form_data: this.form.value, fk_user_id: this.user_id, fk_product_id: parseInt(this.product_id) }).subscribe(
                data => {
                    //this.attributeData = data.success;
                    console.log(data);
                    this.attributeData = data.data;
                    // that.form.c;
                    this.reset();
                }
            );*/
        }
    }
    reset() {
        if (this.selectedStatus != '') {
            this.form.reset();
            this.selectedStatus = '';
            this.formSumitAttempt = false;
        }
    }
    search() {
        this.formSumitAttempt = true;
    }
    vendor_delete(del_id) {
    }
    changeStatus(user) {
    }
};
AddTagComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-add-tag-list',
        template: __webpack_require__(/*! raw-loader!./add-tag.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/tags/add-tag/add-tag.component.html")
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_forms__WEBPACK_IMPORTED_MODULE_4__["FormBuilder"], _services_data_service__WEBPACK_IMPORTED_MODULE_3__["DataService"], _auth_services_product_service__WEBPACK_IMPORTED_MODULE_2__["ProductService"]])
], AddTagComponent);



/***/ }),

/***/ "./src/app/theme/pages/default/tags/tag-list/tag-list.component.ts":
/*!*************************************************************************!*\
  !*** ./src/app/theme/pages/default/tags/tag-list/tag-list.component.ts ***!
  \*************************************************************************/
/*! exports provided: TagListComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "TagListComponent", function() { return TagListComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _auth_services_product_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../auth/_services/product.service */ "./src/app/auth/_services/product.service.ts");
/* harmony import */ var _services_data_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../../_services/data.service */ "./src/app/_services/data.service.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm2015/forms.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var ngx_toastr__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ngx-toastr */ "./node_modules/ngx-toastr/fesm2015/ngx-toastr.js");



// import { SideBarService } from '../../../../layouts/side-bar/side-bar.service';
// import { SideBarToggleComponent } from '../../../../layouts/side-bar-toggle/side-bar-toggle.component';




let TagListComponent = class TagListComponent {
    constructor(toastr, route, router, formBuilder, _dataService, _productService) {
        this.toastr = toastr;
        this.route = route;
        this.router = router;
        this.formBuilder = formBuilder;
        this._dataService = _dataService;
        this._productService = _productService;
        this.searchValue = "";
        this.dropDownValue = '';
        this.noOfPage = '';
        this.p = 1;
        this.attributeData = '';
        this.selectedStatus = '';
        this.user_id = '';
    }
    ngOnInit() {
        this.form = this.formBuilder.group({
            tag_name: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            description: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required],
            status: [null, _angular_forms__WEBPACK_IMPORTED_MODULE_4__["Validators"].required]
        });
        this.currentUser = JSON.parse(localStorage.getItem('currentUser'));
        this.user_id = this.currentUser.success.id;
        this._productService.getTag().subscribe(data => {
            this.tagData = data.success;
            this.noOfPage = data.success.length;
            console.log('getTag', data.success);
        });
    }
    isFieldValid(field) {
        return (
        //console.log('this.form.get',this.form.get(field));
        (!this.form.get(field).valid && this.form.get(field).touched) ||
            (this.form.get(field).untouched && this.formSumitAttempt));
    }
    displayFieldCss(field) {
        return {
            'has-error': this.isFieldValid(field),
            'has-feedback': this.isFieldValid(field)
        };
    }
    onSubmit() {
        this.formSumitAttempt = true;
        if (this.form.valid) {
            let fk_product_id = 1;
            this._productService.addTag({ form_data: this.form.value, fk_user_id: this.user_id, fk_product_id: parseInt(this.product_id) }).subscribe(data => {
                //this.attributeData = data.success;
                console.log(data);
                this.attributeData = data.data;
                this.toastr.success('Product Tag Added Successfully', 'Success Message');
                // that.form.c;
                this.reset();
                this._productService.getTag().subscribe(data => {
                    //console.log(params.id);
                    this.tagData = data.success;
                    this.noOfPage = data.success.length;
                });
            });
        }
        /*this.route.params.subscribe(
            params => {
                if (params.id) {
                    this.product_id = params.id;

                    
                }
            }
        );*/
    }
    reset() {
        if (this.selectedStatus != '') {
            this.form.reset();
            this.selectedStatus = '';
            this.formSumitAttempt = false;
        }
    }
    searchTag() {
        this._productService.tagSearching({ search_value: this.searchValue, dropdown_value: this.dropDownValue, user_id: this.currentUser.success.id }).subscribe(data => {
            console.log(this.currentUser.success.id);
            this.tagData = data.success;
        });
    }
    tag_delete(del_id) {
        console.log(del_id);
        let value = confirm('Are you want to delete this tag ?');
        if (value) {
            this._productService.deleteTag(del_id).subscribe(data => {
                this.tagData = data.data;
            });
        }
    }
    changeStatus(user) {
        console.log(user.status);
        if (user.status == 'Active') {
            user.status = 'Inactive';
            this._productService.updateTagStatus(user.id).subscribe(data => {
                console.log('update', data);
            });
        }
        else {
            user.status = 'Active';
            this._productService.updateTagStatus(user.id).subscribe(data => {
                console.log('update', data);
            });
        }
    }
};
TagListComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'app-tag-list',
        template: __webpack_require__(/*! raw-loader!./tag-list.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/tags/tag-list/tag-list.component.html")
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [ngx_toastr__WEBPACK_IMPORTED_MODULE_6__["ToastrService"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["ActivatedRoute"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["Router"], _angular_forms__WEBPACK_IMPORTED_MODULE_4__["FormBuilder"], _services_data_service__WEBPACK_IMPORTED_MODULE_3__["DataService"], _auth_services_product_service__WEBPACK_IMPORTED_MODULE_2__["ProductService"]])
], TagListComponent);



/***/ }),

/***/ "./src/app/theme/pages/default/vendor/vendor-edit/vendor-edit.component.ts":
/*!*********************************************************************************!*\
  !*** ./src/app/theme/pages/default/vendor/vendor-edit/vendor-edit.component.ts ***!
  \*********************************************************************************/
/*! exports provided: VendorEditComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "VendorEditComponent", function() { return VendorEditComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _services_data_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../_services/data.service */ "./src/app/_services/data.service.ts");
/* harmony import */ var _auth_services_user_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../../auth/_services/user.service */ "./src/app/auth/_services/user.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var ngx_toastr__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ngx-toastr */ "./node_modules/ngx-toastr/fesm2015/ngx-toastr.js");






let VendorEditComponent = class VendorEditComponent {
    constructor(_dataService, router, toastr, _userService) {
        this._dataService = _dataService;
        this.router = router;
        this.toastr = toastr;
        this._userService = _userService;
        this.isReadOnly = true;
    }
    ngOnInit() {
        /*user permission*/
        let currentUser = JSON.parse(localStorage.getItem('currentUser'));
        let permission = currentUser.success.permission;
        if (permission.customer_edit != 1) {
            this.toastr.error('You have not permission to visit this page.', 'Error Message');
            this.router.navigate(['/']);
        }
        /*user permission*/
        this._dataService.getsideBarData().subscribe(data => {
            this.selectedVendorData = data;
        });
    }
    editMode() {
        this.isReadOnly = false;
    }
    closeSidebar() {
        this.isReadOnly = true;
        this._dataService.setloaderState(false);
    }
    UpdateVendor() {
        console.log(this.selectedVendorData);
        this._userService.update(this.selectedVendorData);
    }
};
VendorEditComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: 'vendor-view-edit',
        template: __webpack_require__(/*! raw-loader!./vendor-edit.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/vendor/vendor-edit/vendor-edit.component.html"),
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_services_data_service__WEBPACK_IMPORTED_MODULE_2__["DataService"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["Router"], ngx_toastr__WEBPACK_IMPORTED_MODULE_5__["ToastrService"], _auth_services_user_service__WEBPACK_IMPORTED_MODULE_3__["UserService"]])
], VendorEditComponent);



/***/ }),

/***/ "./src/app/theme/theme-routing.module.ts":
/*!***********************************************!*\
  !*** ./src/app/theme/theme-routing.module.ts ***!
  \***********************************************/
/*! exports provided: ThemeRoutingModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ThemeRoutingModule", function() { return ThemeRoutingModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _theme_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./theme.component */ "./src/app/theme/theme.component.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var _auth_guards_auth_guard__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../auth/_guards/auth.guard */ "./src/app/auth/_guards/auth.guard.ts");





const routes = [
    {
        "path": "",
        "component": _theme_component__WEBPACK_IMPORTED_MODULE_2__["ThemeComponent"],
        "canActivate": [_auth_guards_auth_guard__WEBPACK_IMPORTED_MODULE_4__["AuthGuard"]],
        "children": [
            {
                "path": "angular\/ng-bootstrap",
                "loadChildren": () => Promise.all(/*! import() | pages-default-angular-ng-bootstrap-ng-bootstrap-module */[__webpack_require__.e("default~pages-default-angular-ng-bootstrap-ng-bootstrap-module~pages-default-withdraw-withdraw-list-~666adf09"), __webpack_require__.e("pages-default-angular-ng-bootstrap-ng-bootstrap-module")]).then(__webpack_require__.bind(null, /*! ./pages/default/angular/ng-bootstrap/ng-bootstrap.module */ "./src/app/theme/pages/default/angular/ng-bootstrap/ng-bootstrap.module.ts")).then(m => m.NgBootstrapModule)
            },
            {
                "path": "angular\/primeng",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-angular-primeng-primeng-module */ "pages-default-angular-primeng-primeng-module").then(__webpack_require__.bind(null, /*! ./pages/default/angular/primeng/primeng.module */ "./src/app/theme/pages/default/angular/primeng/primeng.module.ts")).then(m => m.PrimengModule)
            },
            {
                "path": "vendor\/vendor-list",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-vendor-vendor-list-vendor-list-module */ "pages-default-vendor-vendor-list-vendor-list-module").then(__webpack_require__.bind(null, /*! ./pages/default/vendor/vendor-list/vendor-list.module */ "./src/app/theme/pages/default/vendor/vendor-list/vendor-list.module.ts")).then(m => m.VendorListModule)
            },
            {
                "path": "user\/user-list",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-vendor-user-list-user-list-module */ "pages-default-vendor-user-list-user-list-module").then(__webpack_require__.bind(null, /*! ./pages/default/vendor/user-list/user-list.module */ "./src/app/theme/pages/default/vendor/user-list/user-list.module.ts")).then(m => m.UserListModule)
            },
            {
                "path": "user\/user-add",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-vendor-user-add-user-add-module */ "pages-default-vendor-user-add-user-add-module").then(__webpack_require__.bind(null, /*! ./pages/default/vendor/user-add/user-add.module */ "./src/app/theme/pages/default/vendor/user-add/user-add.module.ts")).then(m => m.UserAddModule)
            },
            {
                "path": "vendor\/vendor-detail\/:id",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-vendor-vendor-detail-vendor-detail-module */ "pages-default-vendor-vendor-detail-vendor-detail-module").then(__webpack_require__.bind(null, /*! ./pages/default/vendor/vendor-detail/vendor-detail.module */ "./src/app/theme/pages/default/vendor/vendor-detail/vendor-detail.module.ts")).then(m => m.VendorDetailModule)
            },
            {
                "path": "vendor\/vendor-password\/:id",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-vendor-vendor-password-vendor-password-module */ "pages-default-vendor-vendor-password-vendor-password-module").then(__webpack_require__.bind(null, /*! ./pages/default/vendor/vendor-password/vendor-password.module */ "./src/app/theme/pages/default/vendor/vendor-password/vendor-password.module.ts")).then(m => m.VendorPasswordModule)
            },
            {
                "path": "subscription\/subscription-list",
                "loadChildren": () => Promise.all(/*! import() | pages-default-subscription-subscription-list-subscription-list-module */[__webpack_require__.e("default~pages-default-banner-add-banner-add-banner-module~pages-default-banner-banner-list-banner-li~4dd7891b"), __webpack_require__.e("pages-default-subscription-subscription-list-subscription-list-module")]).then(__webpack_require__.bind(null, /*! ./pages/default/subscription/subscription-list/subscription-list.module */ "./src/app/theme/pages/default/subscription/subscription-list/subscription-list.module.ts")).then(m => m.SubscriptionListModule)
            },
            {
                "path": "withdraw\/withdraw-list",
                "loadChildren": () => Promise.all(/*! import() | pages-default-withdraw-withdraw-list-withdraw-list-module */[__webpack_require__.e("default~pages-default-banner-add-banner-add-banner-module~pages-default-banner-banner-list-banner-li~4dd7891b"), __webpack_require__.e("default~pages-default-angular-ng-bootstrap-ng-bootstrap-module~pages-default-withdraw-withdraw-list-~666adf09"), __webpack_require__.e("pages-default-withdraw-withdraw-list-withdraw-list-module")]).then(__webpack_require__.bind(null, /*! ./pages/default/withdraw/withdraw-list/withdraw-list.module */ "./src/app/theme/pages/default/withdraw/withdraw-list/withdraw-list.module.ts")).then(m => m.WithdrawListModule)
            },
            {
                "path": "withdraw\/withdraw-add",
                "loadChildren": () => Promise.all(/*! import() | pages-default-withdraw-withdraw-add-withdraw-add-module */[__webpack_require__.e("default~pages-default-banner-add-banner-add-banner-module~pages-default-banner-banner-list-banner-li~4dd7891b"), __webpack_require__.e("default~pages-default-banner-add-banner-add-banner-module~pages-default-chat-group-chat-group-chat-m~20e04c83"), __webpack_require__.e("pages-default-withdraw-withdraw-add-withdraw-add-module")]).then(__webpack_require__.bind(null, /*! ./pages/default/withdraw/withdraw-add/withdraw-add.module */ "./src/app/theme/pages/default/withdraw/withdraw-add/withdraw-add.module.ts")).then(m => m.WithdrawAddModule)
            },
            {
                "path": "subscription\/subscription-add",
                "loadChildren": () => Promise.all(/*! import() | pages-default-subscription-subscription-add-subscription-add-module */[__webpack_require__.e("default~pages-default-banner-add-banner-add-banner-module~pages-default-banner-banner-list-banner-li~4dd7891b"), __webpack_require__.e("default~pages-default-banner-add-banner-add-banner-module~pages-default-chat-group-chat-group-chat-m~20e04c83"), __webpack_require__.e("pages-default-subscription-subscription-add-subscription-add-module")]).then(__webpack_require__.bind(null, /*! ./pages/default/subscription/subscription-add/subscription-add.module */ "./src/app/theme/pages/default/subscription/subscription-add/subscription-add.module.ts")).then(m => m.SubscriptionAddModule)
            },
            {
                "path": "reports\/overview",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-reports-overview-overview-module */ "pages-default-reports-overview-overview-module").then(__webpack_require__.bind(null, /*! ./pages/default/reports/overview/overview.module */ "./src/app/theme/pages/default/reports/overview/overview.module.ts")).then(m => m.OverviewModule)
            },
            {
                "path": "reports\/inventory",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-reports-inventory-inventory-module */ "pages-default-reports-inventory-inventory-module").then(__webpack_require__.bind(null, /*! ./pages/default/reports/inventory/inventory.module */ "./src/app/theme/pages/default/reports/inventory/inventory.module.ts")).then(m => m.InventoryModule)
            },
            {
                "path": "reports\/sales-by-day",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-reports-sales-by-day-sales-by-day-module */ "pages-default-reports-sales-by-day-sales-by-day-module").then(__webpack_require__.bind(null, /*! ./pages/default/reports/sales-by-day/sales-by-day.module */ "./src/app/theme/pages/default/reports/sales-by-day/sales-by-day.module.ts")).then(m => m.SalesByDayModule)
            },
            {
                "path": "reports\/top-earning",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-reports-top-earning-top-earning-module */ "pages-default-reports-top-earning-top-earning-module").then(__webpack_require__.bind(null, /*! ./pages/default/reports/top-earning/top-earning.module */ "./src/app/theme/pages/default/reports/top-earning/top-earning.module.ts")).then(m => m.TopEarningModule)
            },
            {
                "path": "reports\/top-selling",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-reports-top-selling-top-selling-module */ "pages-default-reports-top-selling-top-selling-module").then(__webpack_require__.bind(null, /*! ./pages/default/reports/top-selling/top-selling.module */ "./src/app/theme/pages/default/reports/top-selling/top-selling.module.ts")).then(m => m.TopSellingModule)
            },
            {
                "path": "reports\/statement",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-reports-statement-statement-module */ "pages-default-reports-statement-statement-module").then(__webpack_require__.bind(null, /*! ./pages/default/reports/statement/statement.module */ "./src/app/theme/pages/default/reports/statement/statement.module.ts")).then(m => m.StatementModule)
            },
            {
                "path": "customer\/customer-list",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-customer-customer-list-customer-list-module */ "pages-default-customer-customer-list-customer-list-module").then(__webpack_require__.bind(null, /*! ./pages/default/customer/customer-list/customer-list.module */ "./src/app/theme/pages/default/customer/customer-list/customer-list.module.ts")).then(m => m.CustomerListModule)
            },
            {
                "path": "dropship",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-dropship-dropship-module */ "pages-default-dropship-dropship-module").then(__webpack_require__.bind(null, /*! ./pages/default/dropship/dropship.module */ "./src/app/theme/pages/default/dropship/dropship.module.ts")).then(m => m.DropshipModule)
            },
            {
                "path": "user-group",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-user-group-user-group-module */ "pages-default-user-group-user-group-module").then(__webpack_require__.bind(null, /*! ./pages/default/user-group/user-group.module */ "./src/app/theme/pages/default/user-group/user-group.module.ts")).then(m => m.UserGroupModule)
            },
            {
                "path": "drag-drop",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-drag-drop-drag-drop-module */ "pages-default-drag-drop-drag-drop-module").then(__webpack_require__.bind(null, /*! ./pages/default/drag-drop/drag-drop.module */ "./src/app/theme/pages/default/drag-drop/drag-drop.module.ts")).then(m => m.DragDropModule)
            },
            {
                "path": "user-group\/permission\/:id",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-user-group-permission-permission-module */ "pages-default-user-group-permission-permission-module").then(__webpack_require__.bind(null, /*! ./pages/default/user-group/permission/permission.module */ "./src/app/theme/pages/default/user-group/permission/permission.module.ts")).then(m => m.PermissionModule)
            },
            {
                "path": "dropship\/dropship-list",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-dropship-dropship-list-dropship-list-module */ "pages-default-dropship-dropship-list-dropship-list-module").then(__webpack_require__.bind(null, /*! ./pages/default/dropship/dropship-list/dropship-list.module */ "./src/app/theme/pages/default/dropship/dropship-list/dropship-list.module.ts")).then(m => m.DropshipListModule)
            },
            {
                "path": "dropship\/:id",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-dropship-dropship-view-dropship-view-module */ "pages-default-dropship-dropship-view-dropship-view-module").then(__webpack_require__.bind(null, /*! ./pages/default/dropship/dropship-view/dropship-view.module */ "./src/app/theme/pages/default/dropship/dropship-view/dropship-view.module.ts")).then(m => m.DropshipViewModule)
            },
            {
                "path": "reviews\/reviews-list",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-reviews-reviews-list-reviews-list-module */ "pages-default-reviews-reviews-list-reviews-list-module").then(__webpack_require__.bind(null, /*! ./pages/default/reviews/reviews-list/reviews-list.module */ "./src/app/theme/pages/default/reviews/reviews-list/reviews-list.module.ts")).then(m => m.ReviewsListModule)
            },
            {
                "path": "customer\/support-list",
                "loadChildren": () => Promise.all(/*! import() | pages-default-customer-support-list-support-list-module */[__webpack_require__.e("common"), __webpack_require__.e("pages-default-customer-support-list-support-list-module")]).then(__webpack_require__.bind(null, /*! ./pages/default/customer/support-list/support-list.module */ "./src/app/theme/pages/default/customer/support-list/support-list.module.ts")).then(m => m.SupportListModule)
            },
            {
                "path": "chat\/private-chat",
                "loadChildren": () => Promise.all(/*! import() | pages-default-chat-private-chat-private-chat-module */[__webpack_require__.e("default~pages-default-banner-add-banner-add-banner-module~pages-default-banner-banner-list-banner-li~4dd7891b"), __webpack_require__.e("default~pages-default-banner-add-banner-add-banner-module~pages-default-chat-group-chat-group-chat-m~20e04c83"), __webpack_require__.e("default~pages-default-chat-group-chat-group-chat-module~pages-default-chat-private-chat-private-chat~b2cfe66d"), __webpack_require__.e("pages-default-chat-private-chat-private-chat-module")]).then(__webpack_require__.bind(null, /*! ./pages/default/chat/private-chat/private-chat.module */ "./src/app/theme/pages/default/chat/private-chat/private-chat.module.ts")).then(m => m.PrivateChatModule)
            },
            {
                "path": "chat\/group-chat",
                "loadChildren": () => Promise.all(/*! import() | pages-default-chat-group-chat-group-chat-module */[__webpack_require__.e("default~pages-default-banner-add-banner-add-banner-module~pages-default-banner-banner-list-banner-li~4dd7891b"), __webpack_require__.e("default~pages-default-banner-add-banner-add-banner-module~pages-default-chat-group-chat-group-chat-m~20e04c83"), __webpack_require__.e("default~pages-default-chat-group-chat-group-chat-module~pages-default-chat-private-chat-private-chat~b2cfe66d"), __webpack_require__.e("pages-default-chat-group-chat-group-chat-module")]).then(__webpack_require__.bind(null, /*! ./pages/default/chat/group-chat/group-chat.module */ "./src/app/theme/pages/default/chat/group-chat/group-chat.module.ts")).then(m => m.GroupChatModule)
            },
            {
                "path": "chat\/popup-chat",
                "loadChildren": () => Promise.all(/*! import() | pages-default-chat-popup-chat-popup-chat-module */[__webpack_require__.e("default~pages-default-banner-add-banner-add-banner-module~pages-default-banner-banner-list-banner-li~4dd7891b"), __webpack_require__.e("default~pages-default-banner-add-banner-add-banner-module~pages-default-chat-group-chat-group-chat-m~20e04c83"), __webpack_require__.e("pages-default-chat-popup-chat-popup-chat-module")]).then(__webpack_require__.bind(null, /*! ./pages/default/chat/popup-chat/popup-chat.module */ "./src/app/theme/pages/default/chat/popup-chat/popup-chat.module.ts")).then(m => m.PopupChatModule)
            },
            {
                "path": "customer\/staff-list",
                "loadChildren": () => Promise.all(/*! import() | pages-default-customer-staff-list-staff-list-module */[__webpack_require__.e("common"), __webpack_require__.e("pages-default-customer-staff-list-staff-list-module")]).then(__webpack_require__.bind(null, /*! ./pages/default/customer/staff-list/staff-list.module */ "./src/app/theme/pages/default/customer/staff-list/staff-list.module.ts")).then(m => m.StaffListModule)
            },
            {
                "path": "customer\/staff-list\/staff-permission\/:id",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-customer-staff-list-staff-permission-staff-permission-module */ "pages-default-customer-staff-list-staff-permission-staff-permission-module").then(__webpack_require__.bind(null, /*! ./pages/default/customer/staff-list/staff-permission/staff-permission.module */ "./src/app/theme/pages/default/customer/staff-list/staff-permission/staff-permission.module.ts")).then(m => m.StaffPermissionModule)
            },
            {
                "path": "customer\/support-details\/:id",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-customer-support-details-support-details-module */ "pages-default-customer-support-details-support-details-module").then(__webpack_require__.bind(null, /*! ./pages/default/customer/support-details/support-details.module */ "./src/app/theme/pages/default/customer/support-details/support-details.module.ts")).then(m => m.SupportDetailsModule)
            },
            {
                "path": "category\/menu-list",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-category-menu-list-menu-list-module */ "pages-default-category-menu-list-menu-list-module").then(__webpack_require__.bind(null, /*! ./pages/default/category/menu-list/menu-list.module */ "./src/app/theme/pages/default/category/menu-list/menu-list.module.ts")).then(m => m.MenuListModule)
            },
            {
                "path": "category\/menu-edit\/:menu_id",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-category-menu-edit-menu-edit-module */ "pages-default-category-menu-edit-menu-edit-module").then(__webpack_require__.bind(null, /*! ./pages/default/category/menu-edit/menu-edit.module */ "./src/app/theme/pages/default/category/menu-edit/menu-edit.module.ts")).then(m => m.MenuEditModule)
            },
            {
                "path": "category\/category-list",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-category-category-list-category-list-module */ "pages-default-category-category-list-category-list-module").then(__webpack_require__.bind(null, /*! ./pages/default/category/category-list/category-list.module */ "./src/app/theme/pages/default/category/category-list/category-list.module.ts")).then(m => m.CategoryListModule)
            },
            {
                "path": "category\/category-edit\/:category_id",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-category-category-edit-category-edit-module */ "pages-default-category-category-edit-category-edit-module").then(__webpack_require__.bind(null, /*! ./pages/default/category/category-edit/category-edit.module */ "./src/app/theme/pages/default/category/category-edit/category-edit.module.ts")).then(m => m.CategoryEditModule)
            },
            {
                "path": "category\/sub-category-list",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-category-sub-category-list-sub-category-list-module */ "pages-default-category-sub-category-list-sub-category-list-module").then(__webpack_require__.bind(null, /*! ./pages/default/category/sub-category-list/sub-category-list.module */ "./src/app/theme/pages/default/category/sub-category-list/sub-category-list.module.ts")).then(m => m.SubCatgoryListModule)
            },
            {
                "path": "sub-category\/edit-sub-category\/:sub_cat_id",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-category-edit-sub-category-edit-sub-category-module */ "pages-default-category-edit-sub-category-edit-sub-category-module").then(__webpack_require__.bind(null, /*! ./pages/default/category/edit-sub-category/edit-sub-category.module */ "./src/app/theme/pages/default/category/edit-sub-category/edit-sub-category.module.ts")).then(m => m.EditSubCategoryModule)
            },
            {
                "path": "brand\/brand-list",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-brand-brand-list-brand-list-module */ "pages-default-brand-brand-list-brand-list-module").then(__webpack_require__.bind(null, /*! ./pages/default/brand/brand-list/brand-list.module */ "./src/app/theme/pages/default/brand/brand-list/brand-list.module.ts")).then(m => m.BrandListModule)
            },
            {
                "path": "brand\/brand-edit\/:brand_id",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-brand-brand-edit-brand-edit-module */ "pages-default-brand-brand-edit-brand-edit-module").then(__webpack_require__.bind(null, /*! ./pages/default/brand/brand-edit/brand-edit.module */ "./src/app/theme/pages/default/brand/brand-edit/brand-edit.module.ts")).then(m => m.BrandEditModule)
            },
            {
                "path": "product\/add-product\/:id",
                "loadChildren": () => Promise.all(/*! import() | pages-default-product-add-product-add-product-module */[__webpack_require__.e("default~pages-default-banner-add-banner-add-banner-module~pages-default-banner-banner-list-banner-li~4dd7891b"), __webpack_require__.e("default~pages-default-banner-add-banner-add-banner-module~pages-default-chat-group-chat-group-chat-m~20e04c83"), __webpack_require__.e("default~pages-default-chat-group-chat-group-chat-module~pages-default-chat-private-chat-private-chat~b2cfe66d"), __webpack_require__.e("pages-default-product-add-product-add-product-module")]).then(__webpack_require__.bind(null, /*! ./pages/default/product/add-product/add-product.module */ "./src/app/theme/pages/default/product/add-product/add-product.module.ts")).then(m => m.AddProductModule)
            },
            {
                "path": "product\/add-product",
                "loadChildren": () => Promise.all(/*! import() | pages-default-product-add-product-add-product-module */[__webpack_require__.e("default~pages-default-banner-add-banner-add-banner-module~pages-default-banner-banner-list-banner-li~4dd7891b"), __webpack_require__.e("default~pages-default-banner-add-banner-add-banner-module~pages-default-chat-group-chat-group-chat-m~20e04c83"), __webpack_require__.e("default~pages-default-chat-group-chat-group-chat-module~pages-default-chat-private-chat-private-chat~b2cfe66d"), __webpack_require__.e("pages-default-product-add-product-add-product-module")]).then(__webpack_require__.bind(null, /*! ./pages/default/product/add-product/add-product.module */ "./src/app/theme/pages/default/product/add-product/add-product.module.ts")).then(m => m.AddProductModule)
            },
            {
                "path": "product\/bulk-upload",
                "loadChildren": () => Promise.all(/*! import() | pages-default-product-bulk-upload-bulk-upload-module */[__webpack_require__.e("default~pages-default-banner-add-banner-add-banner-module~pages-default-banner-banner-list-banner-li~4dd7891b"), __webpack_require__.e("default~pages-default-banner-add-banner-add-banner-module~pages-default-chat-group-chat-group-chat-m~20e04c83"), __webpack_require__.e("pages-default-product-bulk-upload-bulk-upload-module")]).then(__webpack_require__.bind(null, /*! ./pages/default/product/bulk-upload/bulk-upload.module */ "./src/app/theme/pages/default/product/bulk-upload/bulk-upload.module.ts")).then(m => m.BulkUploadModule)
            },
            {
                "path": "product\/child-view",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-product-child-view-child-view-module */ "pages-default-product-child-view-child-view-module").then(__webpack_require__.bind(null, /*! ./pages/default/product/child-view/child-view.module */ "./src/app/theme/pages/default/product/child-view/child-view.module.ts")).then(m => m.ChildViewModule)
            },
            {
                "path": "product\/edit-product\/:product_id",
                "loadChildren": () => Promise.all(/*! import() | pages-default-product-edit-product-edit-product-module */[__webpack_require__.e("default~pages-default-banner-add-banner-add-banner-module~pages-default-banner-banner-list-banner-li~4dd7891b"), __webpack_require__.e("default~pages-default-banner-add-banner-add-banner-module~pages-default-chat-group-chat-group-chat-m~20e04c83"), __webpack_require__.e("default~pages-default-chat-group-chat-group-chat-module~pages-default-chat-private-chat-private-chat~b2cfe66d"), __webpack_require__.e("pages-default-product-edit-product-edit-product-module")]).then(__webpack_require__.bind(null, /*! ./pages/default/product/edit-product/edit-product.module */ "./src/app/theme/pages/default/product/edit-product/edit-product.module.ts")).then(m => m.EditProductModule)
            },
            {
                "path": "product\/view-product\/:product_id",
                "loadChildren": () => Promise.all(/*! import() | pages-default-product-view-product-view-detail-product-module */[__webpack_require__.e("default~pages-default-banner-add-banner-add-banner-module~pages-default-banner-banner-list-banner-li~4dd7891b"), __webpack_require__.e("default~pages-default-banner-add-banner-add-banner-module~pages-default-chat-group-chat-group-chat-m~20e04c83"), __webpack_require__.e("pages-default-product-view-product-view-detail-product-module")]).then(__webpack_require__.bind(null, /*! ./pages/default/product/view-product/view-detail-product.module */ "./src/app/theme/pages/default/product/view-product/view-detail-product.module.ts")).then(m => m.ViewDetailProductModule)
            },
            {
                "path": "product\/shareable-product-detail\/:id",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-product-shareable-products-shareable-product-detail-shareable-product-detail-module */ "pages-default-product-shareable-products-shareable-product-detail-shareable-product-detail-module").then(__webpack_require__.bind(null, /*! ./pages/default/product/shareable-products/shareable-product-detail/shareable-product-detail.module */ "./src/app/theme/pages/default/product/shareable-products/shareable-product-detail/shareable-product-detail.module.ts")).then(m => m.ShareableProductDetailModule)
            },
            {
                "path": "product\/shareable-product",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-product-shareable-products-shareable-product-shareable-product-module */ "pages-default-product-shareable-products-shareable-product-shareable-product-module").then(__webpack_require__.bind(null, /*! ./pages/default/product/shareable-products/shareable-product/shareable-product.module */ "./src/app/theme/pages/default/product/shareable-products/shareable-product/shareable-product.module.ts")).then(m => m.ShareableProductModule)
            },
            {
                "path": "product\/:vendor_id",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-product-product-module */ "pages-default-product-product-module").then(__webpack_require__.bind(null, /*! ./pages/default/product/product.module */ "./src/app/theme/pages/default/product/product.module.ts")).then(m => m.ProductModule)
            },
            {
                "path": "product",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-product-product-module */ "pages-default-product-product-module").then(__webpack_require__.bind(null, /*! ./pages/default/product/product.module */ "./src/app/theme/pages/default/product/product.module.ts")).then(m => m.ProductModule)
            },
            {
                "path": "size\/add-size",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-size-add-size-add-size-module */ "pages-default-size-add-size-add-size-module").then(__webpack_require__.bind(null, /*! ./pages/default/size/add-size/add-size.module */ "./src/app/theme/pages/default/size/add-size/add-size.module.ts")).then(m => m.AddSizeModule)
            },
            {
                "path": "size",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-size-size-list-size-list-module */ "pages-default-size-size-list-size-list-module").then(__webpack_require__.bind(null, /*! ./pages/default/size/size-list/size-list.module */ "./src/app/theme/pages/default/size/size-list/size-list.module.ts")).then(m => m.SizeListModule)
            },
            {
                "path": "color\/add-color",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-color-add-color-add-color-module */ "pages-default-color-add-color-add-color-module").then(__webpack_require__.bind(null, /*! ./pages/default/color/add-color/add-color.module */ "./src/app/theme/pages/default/color/add-color/add-color.module.ts")).then(m => m.AddColorModule)
            },
            {
                "path": "color",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-color-color-list-color-list-module */ "pages-default-color-color-list-color-list-module").then(__webpack_require__.bind(null, /*! ./pages/default/color/color-list/color-list.module */ "./src/app/theme/pages/default/color/color-list/color-list.module.ts")).then(m => m.ColorListModule)
            },
            {
                "path": "tag\/add-tag",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-tags-add-tag-add-tag-module */ "pages-default-tags-add-tag-add-tag-module").then(__webpack_require__.bind(null, /*! ./pages/default/tags/add-tag/add-tag.module */ "./src/app/theme/pages/default/tags/add-tag/add-tag.module.ts")).then(m => m.AddTagModule)
            },
            {
                "path": "tag",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-tags-tag-list-tag-list-module */ "pages-default-tags-tag-list-tag-list-module").then(__webpack_require__.bind(null, /*! ./pages/default/tags/tag-list/tag-list.module */ "./src/app/theme/pages/default/tags/tag-list/tag-list.module.ts")).then(m => m.TagListModule)
            },
            {
                "path": "product-tag",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-tags-product-tag-product-tag-module */ "pages-default-tags-product-tag-product-tag-module").then(__webpack_require__.bind(null, /*! ./pages/default/tags/product-tag/product-tag.module */ "./src/app/theme/pages/default/tags/product-tag/product-tag.module.ts")).then(m => m.ProductTagModule)
            },
            {
                "path": "discount\/discount-offer",
                "loadChildren": () => Promise.all(/*! import() | pages-default-discount-add-discount-module */[__webpack_require__.e("default~pages-default-banner-add-banner-add-banner-module~pages-default-chat-group-chat-group-chat-m~20e04c83"), __webpack_require__.e("pages-default-discount-add-discount-module")]).then(__webpack_require__.bind(null, /*! ./pages/default/discount/add-discount.module */ "./src/app/theme/pages/default/discount/add-discount.module.ts")).then(m => m.AddDiscountModule)
            },
            {
                "path": "banner\/add-banner",
                "loadChildren": () => Promise.all(/*! import() | pages-default-banner-add-banner-add-banner-module */[__webpack_require__.e("default~pages-default-banner-add-banner-add-banner-module~pages-default-banner-banner-list-banner-li~4dd7891b"), __webpack_require__.e("default~pages-default-banner-add-banner-add-banner-module~pages-default-chat-group-chat-group-chat-m~20e04c83"), __webpack_require__.e("pages-default-banner-add-banner-add-banner-module")]).then(__webpack_require__.bind(null, /*! ./pages/default/banner/add-banner/add-banner.module */ "./src/app/theme/pages/default/banner/add-banner/add-banner.module.ts")).then(m => m.AddBannerModule)
            },
            {
                "path": "banner\/banner-list",
                "loadChildren": () => Promise.all(/*! import() | pages-default-banner-banner-list-banner-list-module */[__webpack_require__.e("default~pages-default-banner-add-banner-add-banner-module~pages-default-banner-banner-list-banner-li~4dd7891b"), __webpack_require__.e("pages-default-banner-banner-list-banner-list-module")]).then(__webpack_require__.bind(null, /*! ./pages/default/banner/banner-list/banner-list.module */ "./src/app/theme/pages/default/banner/banner-list/banner-list.module.ts")).then(m => m.BannerListModule)
            },
            {
                "path": "slider\/add-slider",
                "loadChildren": () => Promise.all(/*! import() | pages-default-slider-add-slider-add-slider-module */[__webpack_require__.e("default~pages-default-banner-add-banner-add-banner-module~pages-default-banner-banner-list-banner-li~4dd7891b"), __webpack_require__.e("default~pages-default-banner-add-banner-add-banner-module~pages-default-chat-group-chat-group-chat-m~20e04c83"), __webpack_require__.e("pages-default-slider-add-slider-add-slider-module")]).then(__webpack_require__.bind(null, /*! ./pages/default/slider/add-slider/add-slider.module */ "./src/app/theme/pages/default/slider/add-slider/add-slider.module.ts")).then(m => m.AddSliderModule)
            },
            {
                "path": "slider\/slider-list",
                "loadChildren": () => Promise.all(/*! import() | pages-default-slider-slider-list-slider-list-module */[__webpack_require__.e("default~pages-default-banner-add-banner-add-banner-module~pages-default-banner-banner-list-banner-li~4dd7891b"), __webpack_require__.e("pages-default-slider-slider-list-slider-list-module")]).then(__webpack_require__.bind(null, /*! ./pages/default/slider/slider-list/slider-list.module */ "./src/app/theme/pages/default/slider/slider-list/slider-list.module.ts")).then(m => m.SliderListModule)
            },
            {
                "path": "order\/order-list",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-order-order-list-order-list-module */ "pages-default-order-order-list-order-list-module").then(__webpack_require__.bind(null, /*! ./pages/default/order/order-list/order-list.module */ "./src/app/theme/pages/default/order/order-list/order-list.module.ts")).then(m => m.OrderListModule)
            },
            {
                "path": "order\/order-list\/:vendor_id",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-order-order-list-order-list-module */ "pages-default-order-order-list-order-list-module").then(__webpack_require__.bind(null, /*! ./pages/default/order/order-list/order-list.module */ "./src/app/theme/pages/default/order/order-list/order-list.module.ts")).then(m => m.OrderListModule)
            },
            //  {
            //     "path": "order\/order-details\/:order_id",
            //     "loadChildren": ".\/pages\/default\/order\/order-details\/order-details.module#OrderDetailsModule"
            // },
            {
                "path": "order\/order-details\/:order_no",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-order-order-edit-order-edit-module */ "pages-default-order-order-edit-order-edit-module").then(__webpack_require__.bind(null, /*! ./pages/default/order/order-edit/order-edit.module */ "./src/app/theme/pages/default/order/order-edit/order-edit.module.ts")).then(m => m.OrderEditModule)
            },
            {
                "path": "order\/order-summary\/:order_no",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-order-order-summary-order-summary-module */ "pages-default-order-order-summary-order-summary-module").then(__webpack_require__.bind(null, /*! ./pages/default/order/order-summary/order-summary.module */ "./src/app/theme/pages/default/order/order-summary/order-summary.module.ts")).then(m => m.OrderSummaryModule)
            },
            /* {
                 "path": "banner\/barnd-banner-list",
                 "loadChildren": ".\/pages\/default\/banner\/barnd-banner-list\/brand-banner-list.module#BrandBannerListModule"
             },*/
            {
                "path": "attribute/add-attribute",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-attribute-add-attribute-add-attribute-module */ "pages-default-attribute-add-attribute-add-attribute-module").then(__webpack_require__.bind(null, /*! ./pages/default/attribute/add-attribute/add-attribute.module */ "./src/app/theme/pages/default/attribute/add-attribute/add-attribute.module.ts")).then(m => m.AddAttributeModule)
            },
            {
                "path": "attributes",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-attribute-attribute-list-attribute-list-module */ "pages-default-attribute-attribute-list-attribute-list-module").then(__webpack_require__.bind(null, /*! ./pages/default/attribute/attribute-list/attribute-list.module */ "./src/app/theme/pages/default/attribute/attribute-list/attribute-list.module.ts")).then(m => m.AttributeListModule)
            },
            {
                "path": "attribute/attribute-value/:att_id",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-attribute-attribute-value-attribute-value-module */ "pages-default-attribute-attribute-value-attribute-value-module").then(__webpack_require__.bind(null, /*! ./pages/default/attribute/attribute-value/attribute-value.module */ "./src/app/theme/pages/default/attribute/attribute-value/attribute-value.module.ts")).then(m => m.AttributeValueModule)
            },
            {
                "path": "index",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-index-index-module */ "pages-default-index-index-module").then(__webpack_require__.bind(null, /*! ./pages/default/index/index.module */ "./src/app/theme/pages/default/index/index.module.ts")).then(m => m.IndexModule)
            },
            {
                "path": "404",
                "loadChildren": () => __webpack_require__.e(/*! import() | pages-default-not-found-not-found-module */ "pages-default-not-found-not-found-module").then(__webpack_require__.bind(null, /*! ./pages/default/not-found/not-found.module */ "./src/app/theme/pages/default/not-found/not-found.module.ts")).then(m => m.NotFoundModule)
            },
            {
                "path": "",
                "redirectTo": "index",
                "pathMatch": "full"
            }
        ]
    },
    {
        "path": "**",
        "redirectTo": "404",
        "pathMatch": "full"
    }
];
let ThemeRoutingModule = class ThemeRoutingModule {
};
ThemeRoutingModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
        imports: [_angular_router__WEBPACK_IMPORTED_MODULE_3__["RouterModule"].forChild(routes)],
        exports: [_angular_router__WEBPACK_IMPORTED_MODULE_3__["RouterModule"]]
    })
], ThemeRoutingModule);



/***/ }),

/***/ "./src/app/theme/theme.component.ts":
/*!******************************************!*\
  !*** ./src/app/theme/theme.component.ts ***!
  \******************************************/
/*! exports provided: ThemeComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ThemeComponent", function() { return ThemeComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm2015/router.js");
/* harmony import */ var _helpers__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../helpers */ "./src/app/helpers.ts");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");





let ThemeComponent = class ThemeComponent {
    constructor(_script, _router) {
        this._script = _script;
        this._router = _router;
    }
    ngOnInit() {
        this._script.loadScripts('body', ['assets/vendors/base/vendors.bundle.js', 'assets/demo/default/base/scripts.bundle.js'], true)
            .then(result => {
            _helpers__WEBPACK_IMPORTED_MODULE_3__["Helpers"].setLoading(false);
            // optional js to be loaded once
            this._script.loadScripts('head', ['assets/vendors/custom/fullcalendar/fullcalendar.bundle.js'], true);
        });
        this._router.events.subscribe((route) => {
            if (route instanceof _angular_router__WEBPACK_IMPORTED_MODULE_2__["NavigationStart"]) {
                mLayout.closeMobileAsideMenuOffcanvas();
                mLayout.closeMobileHorMenuOffcanvas();
                mApp.scrollTop();
                _helpers__WEBPACK_IMPORTED_MODULE_3__["Helpers"].setLoading(true);
                // hide visible popover
                $('[data-toggle="m-popover"]').popover('hide');
            }
            if (route instanceof _angular_router__WEBPACK_IMPORTED_MODULE_2__["NavigationEnd"]) {
                // init required js
                mApp.init();
                mUtil.init();
                _helpers__WEBPACK_IMPORTED_MODULE_3__["Helpers"].setLoading(false);
                // content m-wrapper animation
                let animation = 'm-animate-fade-in-up';
                $('.m-wrapper').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function (e) {
                    $('.m-wrapper').removeClass(animation);
                }).removeClass(animation).addClass(animation);
            }
        });
    }
};
ThemeComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
        selector: ".m-grid.m-grid--hor.m-grid--root.m-page",
        template: __webpack_require__(/*! raw-loader!./theme.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/theme.component.html"),
        encapsulation: _angular_core__WEBPACK_IMPORTED_MODULE_1__["ViewEncapsulation"].None,
    }),
    tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_services_script_loader_service__WEBPACK_IMPORTED_MODULE_4__["ScriptLoaderService"], _angular_router__WEBPACK_IMPORTED_MODULE_2__["Router"]])
], ThemeComponent);



/***/ }),

/***/ "./src/environments/environment.ts":
/*!*****************************************!*\
  !*** ./src/environments/environment.ts ***!
  \*****************************************/
/*! exports provided: environment */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "environment", function() { return environment; });
// The file contents for the current environment will overwrite these during build.
// The build system defaults to the dev environment which uses `environment.ts`, but if you do
// `ng build --env=prod` then `environment.prod.ts` will be used instead.
// The list of which env maps to which file can be found in `.angular-cli.json`.
const environment = {
    production: false
};


/***/ }),

/***/ "./src/main.ts":
/*!*********************!*\
  !*** ./src/main.ts ***!
  \*********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm2015/core.js");
/* harmony import */ var _angular_platform_browser_dynamic__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/platform-browser-dynamic */ "./node_modules/@angular/platform-browser-dynamic/fesm2015/platform-browser-dynamic.js");
/* harmony import */ var _app_app_module__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./app/app.module */ "./src/app/app.module.ts");
/* harmony import */ var _environments_environment__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./environments/environment */ "./src/environments/environment.ts");




if (_environments_environment__WEBPACK_IMPORTED_MODULE_3__["environment"].production) {
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["enableProdMode"])();
}
Object(_angular_platform_browser_dynamic__WEBPACK_IMPORTED_MODULE_1__["platformBrowserDynamic"])().bootstrapModule(_app_app_module__WEBPACK_IMPORTED_MODULE_2__["AppModule"])
    .catch(err => console.log(err));


/***/ }),

/***/ 0:
/*!***************************!*\
  !*** multi ./src/main.ts ***!
  \***************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /var/www/html/more-to-like-admin-front_06-jun-19/more-to-like-admin-front/src/main.ts */"./src/main.ts");


/***/ })

},[[0,"runtime","vendor"]]]);
//# sourceMappingURL=main-es2015.js.map