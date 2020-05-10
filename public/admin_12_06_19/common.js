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
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _angular_http__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/http */ "./node_modules/@angular/http/esm5/http.js");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};



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
            var headers = new _angular_http__WEBPACK_IMPORTED_MODULE_1__["Headers"]({ 'Authorization': 'Bearer ' + currentUser.token });
            return new _angular_http__WEBPACK_IMPORTED_MODULE_1__["RequestOptions"]({ headers: headers });
        }
    };
    StaffService = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Injectable"])(),
        __metadata("design:paramtypes", [_angular_http__WEBPACK_IMPORTED_MODULE_1__["Http"], _services_script_loader_service__WEBPACK_IMPORTED_MODULE_2__["ScriptLoaderService"]])
    ], StaffService);
    return StaffService;
}());



/***/ })

}]);
//# sourceMappingURL=common.js.map