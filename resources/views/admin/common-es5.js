(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["common"],{

/***/ "./src/app/auth/_services/staff.service.ts":
/*!*************************************************!*\
  !*** ./src/app/auth/_services/staff.service.ts ***!
  \*************************************************/
/*! exports provided: StaffService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "StaffService", function() { return StaffService; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_http__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/http */ "./node_modules/@angular/http/fesm5/http.js");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");




var StaffService = /** @class */ (function () {
    function StaffService(http, baseUrl) {
        this.http = http;
        this.baseUrl = baseUrl;
    }
    StaffService.prototype.getAll = function () {
        return this.http.get(this.baseUrl._baseUrl + 'staff/getall', this.jwt()).map(function (response) { return response.json(); });
    };
    StaffService.prototype.create = function (staff) {
        return this.http.post(this.baseUrl._baseUrl + 'staff/create', staff, this.jwt()).map(function (response) { return response.json(); });
    };
    StaffService.prototype.getById = function (id) {
        return this.http.get(this.baseUrl._baseUrl + 'staff/edit/' + id, this.jwt()).map(function (response) { return response.json(); });
    };
    StaffService.prototype.update = function (staff, id) {
        console.log(id);
        return this.http.post(this.baseUrl._baseUrl + 'staff/update/' + id, staff, this.jwt()).map(function (response) { return response.json(); });
    };
    StaffService.prototype.del_staff = function (id) {
        return this.http.get(this.baseUrl._baseUrl + 'staff/delete/' + id, this.jwt()).map(function (response) { return response.json(); });
    };
    // private helper methods
    StaffService.prototype.jwt = function () {
        // create authorization header with jwt token
        var currentUser = JSON.parse(localStorage.getItem('currentUser'));
        if (currentUser && currentUser.token) {
            var headers = new _angular_http__WEBPACK_IMPORTED_MODULE_2__["Headers"]({ 'Authorization': 'Bearer ' + currentUser.token });
            return new _angular_http__WEBPACK_IMPORTED_MODULE_2__["RequestOptions"]({ headers: headers });
        }
    };
    StaffService = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])(),
        tslib__WEBPACK_IMPORTED_MODULE_0__["__metadata"]("design:paramtypes", [_angular_http__WEBPACK_IMPORTED_MODULE_2__["Http"], _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__["ScriptLoaderService"]])
    ], StaffService);
    return StaffService;
}());



/***/ })

}]);
//# sourceMappingURL=common-es5.js.map