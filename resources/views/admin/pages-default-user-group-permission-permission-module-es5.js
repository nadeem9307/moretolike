(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-user-group-permission-permission-module"],{

/***/ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/user-group/permission/permission.component.html":
/*!***************************************************************************************************************!*\
  !*** ./node_modules/raw-loader!./src/app/theme/pages/default/user-group/permission/permission.component.html ***!
  \***************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "\n<div class=\"m-portlet m-portlet--mobile\">\n\t\t<div class=\"m-portlet__body\">\n\n\n\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t<div class=\"m-portlet__head-title\">\n\t\t\t\t\t\t<span class=\"m-portlet__head-icon m--hide\"><i class=\"la la-gear\"></i></span>\n\t\t\t\t\t\t<h3 class=\"m-portlet__head-text\">Group Permissions</h3>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t\t<div class=\"row\"><br></div>\n\t\t\t<form method=\"post\" [formGroup] =\"form\">\t\t\n\t\t\t\t<div class=\"m_datatable m-datatable m-datatable--default m-datatable--loaded\" id=\"local_data\" style=\"position: static; zoom: 1;\">\n\t\t\t\t\t<table border=\"1px\">\n\t\t\t\t\t\t<thead>\n\t\t\t\t\t\t\t<tr style=\"background: #2b2e3e;\">\n\t\t\t\t\t\t\t\t<th colspan=\"6\"><h3 class=\"m-portlet__head-text\" style=\"text-transform: capitalize;text-align: center; color: #ffffff;\">{{permision_group_name}} Staff Group Permission</h3></th>\n\t\t\t\t\t\t\t<tr>\n\t\t\t\t\t\t\t<tr>\n\t                            <th rowspan=\"2\" class=\"text-center\">Module Name</th>\n\t                            <th colspan=\"5\" class=\"text-center\">Permissions</th>\n\t                        </tr>\n\t                        <tr>\n\t                            <th class=\"text-center\">View</th>\n\t                            <th class=\"text-center\">Add</th>\n\t                            <th class=\"text-center\">Edit</th>\n\t                            <th class=\"text-center\">Delete</th>\n\t                            <th class=\"text-center\">Miscellaneous</th>\n\t                        </tr>\n\t\t\t\t\t\t</thead>\n\t\t\t\t\t\t<tbody class=\"m-datatable__body\" style=\"\">\n\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t<tr>\n\t                            <td>Products</td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.product_list\" formControlName=\"product_list\" [(ngModel)]=\"product_list\">\n\t                            </td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.product_add\" formControlName=\"product_add\" [(ngModel)]=\"product_add\">\n\t                            </td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.product_edit\" formControlName=\"product_edit\" [(ngModel)]=\"product_edit\">\n\t                            </td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.product_delete\" formControlName=\"product_delete\" [(ngModel)]=\"product_delete\">\n\t                            </td>\n\t                            <td>\n\t                                <span style=\"display:inline-block;\">\n\t                                    <input type=\"checkbox\" id=\"products-menu\" [checked]=\"userPermisionData.product_menu\" formControlName=\"product_menu\" [(ngModel)]=\"product_menu\">\n\t                                    <label for=\"products-menu\">Menu</label>\n\t                                </span>\n\t                                <span style=\"display:inline-block;\">\n\t                                    <input type=\"checkbox\" id=\"products-category\" [checked]=\"userPermisionData.product_category\" formControlName=\"product_category\" [(ngModel)]=\"product_category\">\n\t                                    <label for=\"products-category\">Category</label>\n\t                                </span>\n\t                                <span style=\"display:inline-block;\">\n\t                                    <input type=\"checkbox\" id=\"products-sub_category\" [checked]=\"userPermisionData.product_subcategory\" formControlName=\"product_subcategory\" [(ngModel)]=\"product_subcategory\">\n\t                                    <label for=\"products-sub_category\">Sub Category</label>\n\t                                </span>\n\t                                <span style=\"display:inline-block;\">\n\t                                    <input type=\"checkbox\" id=\"products-brands\" [checked]=\"userPermisionData.product_brand\" formControlName=\"product_brand\" [(ngModel)]=\"product_brand\">\n\t                                    <label for=\"products-brands\">Brands</label>\n\t                                </span>\n\t                                <span style=\"display:inline-block;\">\n\t                                    <input type=\"checkbox\" id=\"products-bulk_uploads\" [checked]=\"userPermisionData.product_bulkupload\" formControlName=\"product_bulkupload\" [(ngModel)]=\"product_bulkupload\">\n\t                                    <label for=\"products-bulk_uploads\">Bulk Uploads</label>\n\t                                </span>\n\t                            </td>\n\t                        </tr>\n\t                        <tr>\n\t                            <td>Orders</td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.order_list\" formControlName=\"order_list\" [(ngModel)]=\"order_list\">\n\t                            </td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.order_add\" formControlName=\"order_add\" [(ngModel)]=\"order_add\">\n\t                            </td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.order_edit\" formControlName=\"order_edit\" [(ngModel)]=\"order_edit\">\n\t                            </td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.order_delete\" formControlName=\"order_delete\" [(ngModel)]=\"order_delete\">\n\t                            </td>\n\t                            <td>\n\t                                <span style=\"display:inline-block;\">\n\t                                    <input type=\"checkbox\" id=\"orders-delivers\" [checked]=\"userPermisionData.order_deliveries\" formControlName=\"order_deliveries\" [(ngModel)]=\"order_deliveries\">\n\t                                    <label for=\"orders-delivers\">Delivers</label>\n\t                                </span>\n\t                            </td>\n\t                        </tr>\n\t                        <tr>\n\t                            <td>Reviews</td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.reviews_list\" formControlName=\"reviews_list\" [(ngModel)]=\"reviews_list\">\n\t                            </td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.reviews_add\" formControlName=\"reviews_add\" [(ngModel)]=\"reviews_add\">\n\t                            </td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.reviews_edit\" formControlName=\"reviews_edit\" [(ngModel)]=\"reviews_edit\">\n\t                            </td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.reviews_delete\" formControlName=\"reviews_delete\" [(ngModel)]=\"reviews_delete\">\n\t                            </td>\n\t                            <td>\n\t                                <span style=\"display:inline-block;\">\n\t                                    <input type=\"checkbox\" id=\"reviews-approval\" [checked]=\"userPermisionData.reviews_approval\" formControlName=\"reviews_approval\" [(ngModel)]=\"reviews_approval\">\n\t                                    <label for=\"reviews-approval\">Reviews Approval</label>\n\t                                </span>\n\t                            </td>\n\t                        </tr>\n\t                        <tr>\n\t                            <td>Withdraw</td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.withdraw_list\" formControlName=\"withdraw_list\" [(ngModel)]=\"withdraw_list\">\n\t                            </td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.withdraw_add\" formControlName=\"withdraw_add\" [(ngModel)]=\"withdraw_add\">\n\t                            </td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.withdraw_edit\" formControlName=\"withdraw_edit\" [(ngModel)]=\"withdraw_edit\">\n\t                            </td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.withdraw_delete\" formControlName=\"withdraw_delete\" [(ngModel)]=\"withdraw_delete\">\n\t                            </td>\n\t                            <td>\n\t                                <span style=\"display:inline-block;\">\n\t                                    <input type=\"checkbox\" id=\"reviews-approval\" [checked]=\"userPermisionData.withdraw_approval\" formControlName=\"withdraw_approval\" [(ngModel)]=\"withdraw_approval\">\n\t                                    <label for=\"reviews-approval\">Withdraw Approval</label>\n\t                                </span>\n\t                            </td>\n\t                        </tr>\n\t                        <tr>\n\t                            <td>Subscription</td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.subscription_list\" formControlName=\"subscription_list\" [(ngModel)]=\"subscription_list\">\n\t                            </td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.subscription_add\" formControlName=\"subscription_add\" [(ngModel)]=\"subscription_add\">\n\t                            </td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.subscription_edit\" formControlName=\"subscription_edit\" [(ngModel)]=\"subscription_edit\">\n\t                            </td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.subscription_delete\" formControlName=\"subscription_delete\" [(ngModel)]=\"subscription_delete\">\n\t                            </td>\n\t                            <td>\n\t                                \n\t                            </td>\n\t                        </tr>\n\t                        <tr>\n\t                            <td>Booking</td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.booking_list\" formControlName=\"booking_list\" [(ngModel)]=\"booking_list\">\n\t                            </td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.booking_add\" formControlName=\"booking_add\" [(ngModel)]=\"booking_add\">\n\t                            </td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.booking_edit\" formControlName=\"booking_edit\" [(ngModel)]=\"booking_edit\">\n\t                            </td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.booking_delete\" formControlName=\"booking_delete\" [(ngModel)]=\"booking_delete\">\n\t                            </td>\n\t                            <td>\n\t                                \n\t                            </td>\n\t                        </tr>\n\t                        <tr>\n\t                            <td>Supports</td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.support_list\" formControlName=\"support_list\" [(ngModel)]=\"support_list\">\n\t                            </td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.support_add\" formControlName=\"support_add\" [(ngModel)]=\"support_add\">\n\t                            </td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.support_edit\" formControlName=\"support_edit\" [(ngModel)]=\"support_edit\">\n\t                            </td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.support_delete\" formControlName=\"support_delete\" [(ngModel)]=\"support_delete\">\n\t                            </td>\n\t                            <td>\n\t                                \n\t                            </td>\n\t                        </tr>\n\t                        <tr>\n\t                            <td>Website Setting</td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.website_setting\" formControlName=\"website_setting\" [(ngModel)]=\"website_setting\">\n\t                            </td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.website_setting\" formControlName=\"website_setting\" [(ngModel)]=\"website_setting\">\n\t                            </td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.website_setting\" formControlName=\"website_setting\" [(ngModel)]=\"website_setting\">\n\t                            </td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.website_setting\" formControlName=\"website_setting\" [(ngModel)]=\"website_setting\">\n\t                            </td>\n\t                            <td>\n\t                                \n\t                            </td>\n\t                        </tr>\n\t                        <tr>\n\t                            <td>Dropship</td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.dropship_list\" formControlName=\"dropship_list\" [(ngModel)]=\"dropship_list\">\n\t                            </td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.dropship_add\" formControlName=\"dropship_add\" [(ngModel)]=\"dropship_add\">\n\t                            </td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.dropship_edit\" formControlName=\"dropship_edit\" [(ngModel)]=\"dropship_edit\">\n\t                            </td>\n\t                            <td class=\"text-center\">\n\t                                <input type=\"checkbox\" [checked]=\"userPermisionData.dropship_delete\" formControlName=\"dropship_delete\" [(ngModel)]=\"dropship_delete\">\n\t                            </td>\n\t                            <td>\n\t                                \n\t                            </td>\n\t                        </tr>\n\t                        <tr>\n\t                            <td>Reports</td>\n\t                            <td colspan=\"5\">\n\t                                <span style=\"display:inline-block;\">\n\t                                    <input type=\"checkbox\" [checked]=\"userPermisionData.report_overview\" formControlName=\"report_overview\" [(ngModel)]=\"report_overview\">\n\t                                    <label for=\"products-cost\">Overview</label>\n\t                                </span>\n\t                                <span style=\"display:inline-block;\">\n\t                                    <input type=\"checkbox\" [checked]=\"userPermisionData.report_inventory\" formControlName=\"report_inventory\" [(ngModel)]=\"report_inventory\">\n\t                                    <label for=\"products-price\">Inventory</label>\n\t                                </span>\n\t                                <span style=\"display:inline-block;\">\n\t                                    <input type=\"checkbox\" [checked]=\"userPermisionData.report_salesByDay\" formControlName=\"report_salesByDay\" [(ngModel)]=\"report_salesByDay\">\n\t                                    <label for=\"products-adjustments\">Sales By Day</label>\n\t                                </span>\n\t                                <span style=\"display:inline-block;\">\n\t                                    <input type=\"checkbox\" [checked]=\"userPermisionData.report_topSelling\" formControlName=\"report_topSelling\" [(ngModel)]=\"report_topSelling\">\n\t                                    <label for=\"products-barcode\">Top Selling</label>\n\t                                </span>\n\t                                <span style=\"display:inline-block;\">\n\t                                    <input type=\"checkbox\" [checked]=\"userPermisionData.report_topEarning\" formControlName=\"report_topEarning\" [(ngModel)]=\"report_topEarning\">\n\t                                    <label for=\"products-stock_count\">Top Earning</label>\n\t                                </span>\n\t                                <span style=\"display:inline-block;\">\n\t                                    <input type=\"checkbox\" [checked]=\"userPermisionData.report_statement\" formControlName=\"report_statement\" [(ngModel)]=\"report_statement\">\n\t                                    <label for=\"products-stock_count\">Statements</label>\n\t                                </span>\n\t                            </td>\n\t                        </tr>\n\n\t\t\t\t\t\t</tbody>\n\t\t\t\t\t\t</table>\n\t\t\t\t</div>\n\t\t\t\t<div class=\"row\"><br></div>\n\t\t\t\t<button class=\"btn btn-success\" (click)=\"onSubmit()\">Update</button>\n\t\t\t</form>\n\t\t</div>\n</div>\n\n\n\n"

/***/ }),

/***/ "./src/app/theme/pages/default/user-group/permission/permission.component.ts":
/*!***********************************************************************************!*\
  !*** ./src/app/theme/pages/default/user-group/permission/permission.component.ts ***!
  \***********************************************************************************/
/*! exports provided: PermissionComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "PermissionComponent", function() { return PermissionComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _auth_services_permission_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../auth/_services/permission.service */ "./src/app/auth/_services/permission.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../../../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var ngx_toastr__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ngx-toastr */ "./node_modules/ngx-toastr/fesm5/ngx-toastr.js");







var PermissionComponent = /** @class */ (function () {
    function PermissionComponent(imgBaseUrl, toastr, router, route, _permissionService, formBuilder) {
        this.imgBaseUrl = imgBaseUrl;
        this.toastr = toastr;
        this.router = router;
        this.route = route;
        this._permissionService = _permissionService;
        this.formBuilder = formBuilder;
        this.permision_group_name = "Admin";
        this.product_list = '0';
        this.product_add = '0';
        this.product_edit = '0';
        this.product_delete = '0';
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
        this.form = formBuilder.group({
            product_list: [null],
            product_add: [null],
            product_edit: [null],
            product_delete: [null],
            product_menu: [null],
            product_category: [null],
            product_subcategory: [null],
            product_brand: [null],
            product_bulkupload: [null],
            order_list: [null],
            order_add: [null],
            order_edit: [null],
            order_delete: [null],
            order_deliveries: [null],
            reviews_list: [null],
            reviews_add: [null],
            reviews_edit: [null],
            reviews_delete: [null],
            reviews_approval: [null],
            withdraw_list: [null],
            withdraw_add: [null],
            withdraw_edit: [null],
            withdraw_delete: [null],
            withdraw_approval: [null],
            subscription_list: [null],
            subscription_add: [null],
            subscription_edit: [null],
            subscription_delete: [null],
            booking_list: [null],
            booking_add: [null],
            booking_edit: [null],
            booking_delete: [null],
            support_list: [null],
            support_add: [null],
            support_edit: [null],
            support_delete: [null],
            website_setting: [null],
            dropship_list: [null],
            dropship_add: [null],
            dropship_edit: [null],
            dropship_delete: [null],
            report_overview: [null],
            report_inventory: [null],
            report_salesByDay: [null],
            report_topSelling: [null],
            report_topEarning: [null],
            report_statement: [null],
        });
    }
    PermissionComponent.prototype.ngOnInit = function () {
        var _this = this;
        this.userPermisionData = '{"product_list":0,"product_add":0,"product_edit":0,"product_delete":0,"product_menu":0,"product_category":0,"product_subcategory":0,"product_brand":0,"product_bulkupload":0,"order_list":0,"order_add":0,"order_edit":0,"order_delete":0,"order_deliveries":0,"reviews_list":0,"reviews_add":0,"reviews_edit":0,"reviews_delete":0,"reviews_approval":0,"withdraw_list":0,"withdraw_add":0,"withdraw_edit":0,"withdraw_delete":0,"withdraw_approval":0,"subscription_list":0,"subscription_add":0,"subscription_edit":0,"subscription_delete":0,"booking_list":0,"booking_add":0,"booking_edit":0,"booking_delete":0,"support_list":0,"support_add":0,"support_edit":0,"support_delete":0,"website_setting":0,"dropship_list":0,"dropship_add":0,"dropship_edit":0,"dropship_delete":0,"report_overview":0,"report_inventory":0,"report_salesByDay":0,"report_topSelling":0,"report_topEarning":0,"report_statement":0}';
        this.route.params.subscribe(function (params) {
            _this.userGroup_id = params.id;
            //for getting user Group Details
            _this._permissionService.getUserGroupById(params.id).subscribe(function (data) {
                _this.permision_group_name = data.success.group_name;
                _this.permisionData = data.success;
            });
            //for getting user permission Details
            _this._permissionService.getUserPermissionById(params.id).subscribe(function (data) {
                _this.userPermisionData = data.success;
                _this.product_list = data.success.product_list;
                _this.product_add = data.success.product_add;
                _this.product_edit = data.success.product_edit;
                _this.product_delete = data.success.product_delete;
                _this.product_menu = data.success.product_menu;
                _this.product_category = data.success.product_category;
                _this.product_subcategory = data.success.product_subcategory;
                _this.product_brand = data.success.product_brand;
                _this.product_bulkupload = data.success.product_bulkupload;
                _this.order_list = data.success.order_list;
                _this.order_add = data.success.order_add;
                _this.order_edit = data.success.order_edit;
                _this.order_delete = data.success.order_delete;
                _this.order_deliveries = data.success.order_deliveries;
                _this.reviews_list = data.success.reviews_list;
                _this.reviews_add = data.success.reviews_add;
                _this.reviews_edit = data.success.reviews_edit;
                _this.reviews_delete = data.success.reviews_delete;
                _this.reviews_approval = data.success.reviews_approval;
                _this.withdraw_list = data.success.withdraw_list;
                _this.withdraw_add = data.success.withdraw_add;
                _this.withdraw_edit = data.success.withdraw_edit;
                _this.withdraw_delete = data.success.withdraw_delete;
                _this.withdraw_approval = data.success.withdraw_approval;
                _this.subscription_list = data.success.subscription_list;
                _this.subscription_add = data.success.subscription_add;
                _this.subscription_edit = data.success.subscription_edit;
                _this.subscription_delete = data.success.subscription_delete;
                _this.booking_list = data.success.booking_list;
                _this.booking_add = data.success.booking_add;
                _this.booking_edit = data.success.booking_edit;
                _this.booking_delete = data.success.booking_delete;
                _this.support_list = data.success.support_list;
                _this.support_add = data.success.support_add;
                _this.support_edit = data.success.support_edit;
                _this.support_delete = data.success.support_delete;
                _this.website_setting = data.success.website_setting;
                _this.dropship_list = data.success.dropship_list;
                _this.dropship_add = data.success.dropship_add;
                _this.dropship_edit = data.success.dropship_edit;
                _this.dropship_delete = data.success.dropship_delete;
                _this.report_overview = data.success.report_overview;
                _this.report_inventory = data.success.report_inventory;
                _this.report_salesByDay = data.success.report_salesByDay;
                _this.report_topSelling = data.success.report_topSelling;
                _this.report_topEarning = data.success.report_topEarning;
                _this.report_statement = data.success.report_statement;
            });
        });
    };
    PermissionComponent.prototype.onSubmit = function () {
        var _this = this;
        console.log('this.form.value');
        console.log(this.form.value);
        console.log('this.userGroup_id');
        console.log(this.userGroup_id);
        var input;
        input = { form_data: this.form.value };
        input.form_data.user_id = this.userGroup_id;
        this._permissionService.updateUserPermision(input).subscribe(function (data) {
            _this.toastr.success('Permission Updated Successfully', 'Success Message');
            _this.form.reset();
            //this.formSumitAttempt = false;
            _this.router.navigate(['user-group']);
        });
    };
    PermissionComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: 'app-permission',
            template: __webpack_require__(/*! raw-loader!./permission.component.html */ "./node_modules/raw-loader/index.js!./src/app/theme/pages/default/user-group/permission/permission.component.html")
        }),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_services_script_loader_service__WEBPACK_IMPORTED_MODULE_4__["ScriptLoaderService"], ngx_toastr__WEBPACK_IMPORTED_MODULE_6__["ToastrService"], _angular_router__WEBPACK_IMPORTED_MODULE_3__["Router"], _angular_router__WEBPACK_IMPORTED_MODULE_3__["ActivatedRoute"], _auth_services_permission_service__WEBPACK_IMPORTED_MODULE_2__["PermissionService"], _angular_forms__WEBPACK_IMPORTED_MODULE_5__["FormBuilder"]])
    ], PermissionComponent);
    return PermissionComponent;
}());



/***/ }),

/***/ "./src/app/theme/pages/default/user-group/permission/permission.module.ts":
/*!********************************************************************************!*\
  !*** ./src/app/theme/pages/default/user-group/permission/permission.module.ts ***!
  \********************************************************************************/
/*! exports provided: PermissionModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "PermissionModule", function() { return PermissionModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/fesm5/common.js");
/* harmony import */ var _permission_permission_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../permission/permission.component */ "./src/app/theme/pages/default/user-group/permission/permission.component.ts");
/* harmony import */ var _default_default_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../../default/default.component */ "./src/app/theme/pages/default/default.component.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var _layouts_layout_module__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../../../layouts/layout.module */ "./src/app/theme/layouts/layout.module.ts");
/* harmony import */ var ngx_pagination__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ngx-pagination */ "./node_modules/ngx-pagination/dist/ngx-pagination.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");









var routes = [
    {
        path: "",
        component: _default_default_component__WEBPACK_IMPORTED_MODULE_4__["DefaultComponent"],
        children: [
            {
                path: "",
                component: _permission_permission_component__WEBPACK_IMPORTED_MODULE_3__["PermissionComponent"]
            }
        ]
    },
];
var PermissionModule = /** @class */ (function () {
    function PermissionModule() {
    }
    PermissionModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["RouterModule"].forChild(routes),
                _layouts_layout_module__WEBPACK_IMPORTED_MODULE_6__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_8__["FormsModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_8__["ReactiveFormsModule"], ngx_pagination__WEBPACK_IMPORTED_MODULE_7__["NgxPaginationModule"],
            ],
            declarations: [_permission_permission_component__WEBPACK_IMPORTED_MODULE_3__["PermissionComponent"]]
        })
    ], PermissionModule);
    return PermissionModule;
}());



/***/ })

}]);
//# sourceMappingURL=pages-default-user-group-permission-permission-module-es5.js.map