(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["pages-default-reports-overview-overview-module"],{

/***/ "./node_modules/@amcharts/amcharts3-angular/es2015/index.js":
/*!******************************************************************!*\
  !*** ./node_modules/@amcharts/amcharts3-angular/es2015/index.js ***!
  \******************************************************************/
/*! exports provided: AmChartsDirective, AmChart, AmEvent, Formatter, AmChartsService, AmChartsModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AmChartsDirective", function() { return AmChartsDirective; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AmChart", function() { return AmChart; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AmEvent", function() { return AmEvent; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "Formatter", function() { return Formatter; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AmChartsService", function() { return AmChartsService; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AmChartsModule", function() { return AmChartsModule; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/**
 * @fileoverview added by tsickle
 * @suppress {checkTypes} checked by tsc
 */

/**
 * @param {?} x
 * @return {?}
 */
function getType(x) {
    // TODO make this faster ?
    return {}.toString.call(x);
}
/**
 * @param {?} obj
 * @param {?} key
 * @return {?}
 */
function hasOwnKey(obj, key) {
    return {}.hasOwnProperty.call(obj, key);
}
/**
 * @param {?} x
 * @return {?}
 */
function copyObject(x) {
    var /** @type {?} */ output = {};
    // TODO use Object.keys ?
    for (var /** @type {?} */ key in x) {
        if (hasOwnKey(x, key)) {
            output[key] = copy(x[key]);
        }
    }
    return output;
}
/**
 * @param {?} x
 * @return {?}
 */
function copyArray(x) {
    var /** @type {?} */ length = x.length;
    var /** @type {?} */ output = new Array(length);
    for (var /** @type {?} */ i = 0; i < length; ++i) {
        output[i] = copy(x[i]);
    }
    return output;
}
/**
 * @param {?} x
 * @return {?}
 */
function copy(x) {
    switch (getType(x)) {
        case "[object Array]":
            return copyArray(x);
        case "[object Object]":
            return copyObject(x);
        // TODO is this necessary ?
        case "[object Date]":
            return new Date(x.getTime());
        default:
            return x;
    }
}
/**
 * @param {?} x
 * @return {?}
 */
function isNaN(x) {
    return x !== x;
}
/**
 * @param {?} x
 * @param {?} y
 * @return {?}
 */
function isNumberEqual(x, y) {
    return x === y || (isNaN(x) && isNaN(y));
}
/**
 * @param {?} chart
 * @param {?} x
 * @param {?} y
 * @return {?}
 */
function removeChartListeners(chart, x, y) {
    if (x !== y) {
        // TODO is this necessary ?
        if (x == null) {
            x = [];
        }
        // TODO is this necessary ?
        if (y == null) {
            y = [];
        }
        var /** @type {?} */ xLength = x.length;
        var /** @type {?} */ yLength = y.length;
        for (var /** @type {?} */ i = 0; i < xLength; ++i) {
            var /** @type {?} */ xValue = x[i];
            var /** @type {?} */ has = false;
            // TODO make this faster ?
            for (var /** @type {?} */ j = 0; j < yLength; ++j) {
                var /** @type {?} */ yValue = y[j];
                // TODO is this correct ?
                if (xValue.event === yValue.event &&
                    xValue.method === yValue.method) {
                    has = true;
                    break;
                }
            }
            if (!has) {
                // TODO is this correct ?
                chart.removeListener(chart, xValue.event, xValue.method);
            }
        }
    }
}
/**
 * @param {?} a
 * @param {?} x
 * @param {?} y
 * @return {?}
 */
function updateArray(a, x, y) {
    var /** @type {?} */ didUpdate = false;
    if (x !== y) {
        var /** @type {?} */ xLength = x.length;
        var /** @type {?} */ yLength = y.length;
        if (xLength !== yLength) {
            a.length = yLength;
            didUpdate = true;
        }
        for (var /** @type {?} */ i = 0; i < yLength; ++i) {
            if (i < xLength) {
                if (update(a, i, x[i], y[i])) {
                    didUpdate = true;
                }
            }
            else {
                // TODO make this faster ?
                a[i] = copy(y[i]);
                // TODO is this necessary ?
                didUpdate = true;
            }
        }
    }
    return didUpdate;
}
/**
 * @param {?} obj
 * @param {?} key
 * @param {?} x
 * @param {?} y
 * @return {?}
 */
function update(obj, key, x, y) {
    var /** @type {?} */ didUpdate = false;
    if (x !== y) {
        var /** @type {?} */ xType = getType(x);
        var /** @type {?} */ yType = getType(y);
        if (xType === yType) {
            switch (xType) {
                case "[object Array]":
                    if (updateArray(obj[key], x, y)) {
                        didUpdate = true;
                    }
                    break;
                case "[object Object]":
                    if (updateObject(obj[key], x, y)) {
                        didUpdate = true;
                    }
                    break;
                case "[object Date]":
                    if (x.getTime() !== y.getTime()) {
                        // TODO make this faster ?
                        obj[key] = copy(y);
                        didUpdate = true;
                    }
                    break;
                case "[object Number]":
                    if (!isNumberEqual(x, y)) {
                        // TODO is the copy necessary ?
                        obj[key] = copy(y);
                        didUpdate = true;
                    }
                    break;
                default:
                    if (x !== y) {
                        // TODO is the copy necessary ?
                        obj[key] = copy(y);
                        didUpdate = true;
                    }
                    break;
            }
            // TODO is this correct ?
        }
        else {
            // TODO make this faster ?
            obj[key] = copy(y);
            didUpdate = true;
        }
    }
    return didUpdate;
}
/**
 * @param {?} chart
 * @param {?} oldObj
 * @param {?} newObj
 * @return {?}
 */
function updateObject(chart, oldObj, newObj) {
    var /** @type {?} */ didUpdate = false;
    if (oldObj !== newObj) {
        // TODO use Object.keys ?
        for (var /** @type {?} */ key in newObj) {
            if (hasOwnKey(newObj, key)) {
                // TODO make this faster ?
                if (hasOwnKey(oldObj, key)) {
                    // TODO should this count as an update ?
                    if (key === "listeners") {
                        // TODO make this faster ?
                        removeChartListeners(chart, oldObj[key], newObj[key]);
                    }
                    if (update(chart, key, oldObj[key], newObj[key])) {
                        didUpdate = true;
                    }
                }
                else {
                    // TODO make this faster ?
                    chart[key] = copy(newObj[key]);
                    didUpdate = true;
                }
            }
        }
        // TODO use Object.keys ?
        for (var /** @type {?} */ key in oldObj) {
            if (hasOwnKey(oldObj, key) && !hasOwnKey(newObj, key)) {
                if (key === "listeners") {
                    removeChartListeners(chart, oldObj[key], []);
                }
                delete chart[key];
                didUpdate = true;
            }
        }
    }
    return didUpdate;
}
var AmChartsDirective = (function () {
    function AmChartsDirective(el, AmCharts, zone) {
        this.el = el;
        this.AmCharts = AmCharts;
        this.zone = zone;
        this.delay = 0;
    }
    /**
     * @return {?}
     */
    AmChartsDirective.prototype.ngAfterViewInit = /**
     * @return {?}
     */
    function () {
        // AmCharts mutates the config object, so we have to make a deep copy to prevent that
        var /** @type {?} */ props = copy(this.options);
        var /** @type {?} */ el = this.el.nativeElement;
        el.id = this.id;
        el.style.display = "block";
        this.chart = this.AmCharts.makeChart(this.id, props, this.delay);
    };
    // TODO is this correct ?
    /**
     * @param {?} x
     * @return {?}
     */
    AmChartsDirective.prototype.ngOnChanges = /**
     * @param {?} x
     * @return {?}
     */
    function (x) {
        var _this = this;
        var /** @type {?} */ el = this.el.nativeElement;
        if (x["id"]) {
            el.id = x["id"].currentValue;
        }
        if (x["options"]) {
            // Update the chart after init
            if (this.chart) {
                // This is needed to avoid triggering ngDoCheck
                this.zone.runOutsideAngular(function () {
                    var /** @type {?} */ didUpdate = updateObject(_this.chart, x["options"].previousValue, x["options"].currentValue);
                    // TODO make this faster
                    if (didUpdate) {
                        _this.chart["validateNow"](true);
                    }
                });
            }
        }
    };
    /**
     * @return {?}
     */
    AmChartsDirective.prototype.ngOnDestroy = /**
     * @return {?}
     */
    function () {
        if (this.chart) {
            this.AmCharts.destroyChart(this.chart);
        }
    };
    AmChartsDirective.decorators = [
        { type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Directive"], args: [{
                    selector: "amCharts"
                },] },
    ];
    /** @nocollapse */
    AmChartsDirective.ctorParameters = function () { return [
        { type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["ElementRef"], },
        { type: AmChartsService, },
        { type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["NgZone"], },
    ]; };
    AmChartsDirective.propDecorators = {
        "id": [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"] },],
        "options": [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"] },],
        "delay": [{ type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Input"] },],
    };
    return AmChartsDirective;
}());

function AmChartsDirective_tsickle_Closure_declarations() {
    /** @type {!Array<{type: !Function, args: (undefined|!Array<?>)}>} */
    AmChartsDirective.decorators;
    /**
     * @nocollapse
     * @type {function(): !Array<(null|{type: ?, decorators: (undefined|!Array<{type: !Function, args: (undefined|!Array<?>)}>)})>}
     */
    AmChartsDirective.ctorParameters;
    /** @type {!Object<string,!Array<{type: !Function, args: (undefined|!Array<?>)}>>} */
    AmChartsDirective.propDecorators;
    /** @type {?} */
    AmChartsDirective.prototype.id;
    /** @type {?} */
    AmChartsDirective.prototype.options;
    /** @type {?} */
    AmChartsDirective.prototype.delay;
    /** @type {?} */
    AmChartsDirective.prototype.chart;
    /** @type {?} */
    AmChartsDirective.prototype.el;
    /** @type {?} */
    AmChartsDirective.prototype.AmCharts;
    /** @type {?} */
    AmChartsDirective.prototype.zone;
}
/**
 * @record
 */
function AmChart() { }
function AmChart_tsickle_Closure_declarations() {
    /* TODO: handle strange member:
    [key: string]: any;
    */
}
/**
 * @record
 */
function AmEvent() { }
function AmEvent_tsickle_Closure_declarations() {
    /* TODO: handle strange member:
    [key: string]: any;
    */
}
/**
 * @record
 */
function Formatter() { }
function Formatter_tsickle_Closure_declarations() {
    /** @type {?} */
    Formatter.prototype.precision;
    /** @type {?} */
    Formatter.prototype.decimalSeparator;
    /** @type {?} */
    Formatter.prototype.thousandsSeparator;
}
var AmChartsService = (function () {
    function AmChartsService(zone) {
        this.zone = zone;
    }
    Object.defineProperty(AmChartsService.prototype, "StockPanel", {
        get: /**
         * @return {?}
         */
        function () {
            return AmCharts.StockPanel;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(AmChartsService.prototype, "StockGraph", {
        get: /**
         * @return {?}
         */
        function () {
            return AmCharts.StockGraph;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(AmChartsService.prototype, "StockEvent", {
        get: /**
         * @return {?}
         */
        function () {
            return AmCharts.StockEvent;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(AmChartsService.prototype, "StockLegend", {
        get: /**
         * @return {?}
         */
        function () {
            return AmCharts.StockLegend;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(AmChartsService.prototype, "baseHref", {
        get: /**
         * @return {?}
         */
        function () {
            return AmCharts.baseHref;
        },
        set: /**
         * @param {?} v
         * @return {?}
         */
        function (v) {
            AmCharts.baseHref = v;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(AmChartsService.prototype, "useUTC", {
        get: /**
         * @return {?}
         */
        function () {
            return AmCharts.useUTC;
        },
        set: /**
         * @param {?} v
         * @return {?}
         */
        function (v) {
            AmCharts.useUTC = v;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(AmChartsService.prototype, "dayNames", {
        get: /**
         * @return {?}
         */
        function () {
            return AmCharts.dayNames;
        },
        set: /**
         * @param {?} v
         * @return {?}
         */
        function (v) {
            AmCharts.dayNames = v;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(AmChartsService.prototype, "monthNames", {
        get: /**
         * @return {?}
         */
        function () {
            return AmCharts.monthNames;
        },
        set: /**
         * @param {?} v
         * @return {?}
         */
        function (v) {
            AmCharts.monthNames = v;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(AmChartsService.prototype, "shortDayNames", {
        get: /**
         * @return {?}
         */
        function () {
            return AmCharts.shortDayNames;
        },
        set: /**
         * @param {?} v
         * @return {?}
         */
        function (v) {
            AmCharts.shortDayNames = v;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(AmChartsService.prototype, "shortMonthNames", {
        get: /**
         * @return {?}
         */
        function () {
            return AmCharts.shortMonthNames;
        },
        set: /**
         * @param {?} v
         * @return {?}
         */
        function (v) {
            AmCharts.shortMonthNames = v;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(AmChartsService.prototype, "theme", {
        // TODO better type for this
        get: /**
         * @return {?}
         */
        function () {
            return AmCharts.theme;
        },
        // TODO better type for this
        set: /**
         * @param {?} v
         * @return {?}
         */
        function (v) {
            AmCharts.theme = v;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(AmChartsService.prototype, "processDelay", {
        get: /**
         * @return {?}
         */
        function () {
            return AmCharts.processDelay;
        },
        set: /**
         * @param {?} v
         * @return {?}
         */
        function (v) {
            AmCharts.processDelay = v;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(AmChartsService.prototype, "charts", {
        get: /**
         * @return {?}
         */
        function () {
            return AmCharts.charts;
        },
        enumerable: true,
        configurable: true
    });
    /**
     * @param {?} handler
     * @param {?=} types
     * @return {?}
     */
    AmChartsService.prototype.addInitHandler = /**
     * @param {?} handler
     * @param {?=} types
     * @return {?}
     */
    function (handler, types) {
        // TODO use this.zone.runOutsideAngular ?
        AmCharts.addInitHandler(handler, types);
    };
    /**
     * @param {?} value
     * @param {?} prefixesBig
     * @param {?} prefixesSmall
     * @param {?} numberFormatter
     * @return {?}
     */
    AmChartsService.prototype.addPrefix = /**
     * @param {?} value
     * @param {?} prefixesBig
     * @param {?} prefixesSmall
     * @param {?} numberFormatter
     * @return {?}
     */
    function (value, prefixesBig, prefixesSmall, numberFormatter) {
        // TODO use this.zone.runOutsideAngular ?
        return AmCharts.addPrefix(value, prefixesBig, prefixesSmall, numberFormatter);
    };
    /**
     * @return {?}
     */
    AmChartsService.prototype.clear = /**
     * @return {?}
     */
    function () {
        // TODO use this.zone.runOutsideAngular ?
        AmCharts.clear();
    };
    /**
     * @param {?} date
     * @param {?} format
     * @return {?}
     */
    AmChartsService.prototype.formatDate = /**
     * @param {?} date
     * @param {?} format
     * @return {?}
     */
    function (date, format) {
        // TODO use this.zone.runOutsideAngular ?
        return AmCharts.formatDate(date, format);
    };
    /**
     * @param {?} number
     * @param {?} formatter
     * @param {?} zeroCount
     * @return {?}
     */
    AmChartsService.prototype.formatNumber = /**
     * @param {?} number
     * @param {?} formatter
     * @param {?} zeroCount
     * @return {?}
     */
    function (number, formatter, zeroCount) {
        // TODO use this.zone.runOutsideAngular ?
        return AmCharts.formatNumber(number, formatter, zeroCount);
    };
    /**
     * @param {?} string
     * @param {?} format
     * @return {?}
     */
    AmChartsService.prototype.stringToDate = /**
     * @param {?} string
     * @param {?} format
     * @return {?}
     */
    function (string, format) {
        // TODO use this.zone.runOutsideAngular ?
        return AmCharts.stringToDate(string, format);
    };
    // TODO is Node the correct type ?
    // TODO better type for config
    /**
     * @param {?} id
     * @param {?} config
     * @param {?=} delay
     * @return {?}
     */
    AmChartsService.prototype.makeChart = /**
     * @param {?} id
     * @param {?} config
     * @param {?=} delay
     * @return {?}
     */
    function (id, config, delay) {
        return this.zone.runOutsideAngular(function () { return AmCharts.makeChart(id, config, delay); });
    };
    /**
     * @param {?} chart
     * @param {?} type
     * @param {?} fn
     * @return {?}
     */
    AmChartsService.prototype.addListener = /**
     * @param {?} chart
     * @param {?} type
     * @param {?} fn
     * @return {?}
     */
    function (chart, type, fn) {
        var _this = this;
        var /** @type {?} */ callback = function (e) {
            _this.zone.run(function () {
                fn(e);
            });
        };
        this.zone.runOutsideAngular(function () {
            chart["addListener"](type, callback);
        });
        return function () {
            _this.zone.runOutsideAngular(function () {
                chart["removeListener"](chart, type, callback);
            });
        };
    };
    /**
     * @param {?} chart
     * @param {?} fn
     * @return {?}
     */
    AmChartsService.prototype.updateChart = /**
     * @param {?} chart
     * @param {?} fn
     * @return {?}
     */
    function (chart, fn) {
        this.zone.runOutsideAngular(function () {
            fn();
            chart["validateNow"](true);
        });
    };
    /**
     * @param {?} chart
     * @return {?}
     */
    AmChartsService.prototype.destroyChart = /**
     * @param {?} chart
     * @return {?}
     */
    function (chart) {
        this.zone.runOutsideAngular(function () {
            chart["clear"]();
        });
    };
    AmChartsService.decorators = [
        { type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["Injectable"] },
    ];
    /** @nocollapse */
    AmChartsService.ctorParameters = function () { return [
        { type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["NgZone"], },
    ]; };
    return AmChartsService;
}());

function AmChartsService_tsickle_Closure_declarations() {
    /** @type {!Array<{type: !Function, args: (undefined|!Array<?>)}>} */
    AmChartsService.decorators;
    /**
     * @nocollapse
     * @type {function(): !Array<(null|{type: ?, decorators: (undefined|!Array<{type: !Function, args: (undefined|!Array<?>)}>)})>}
     */
    AmChartsService.ctorParameters;
    /** @type {?} */
    AmChartsService.prototype.zone;
}
var AmChartsModule = (function () {
    function AmChartsModule() {
    }
    AmChartsModule.decorators = [
        { type: _angular_core__WEBPACK_IMPORTED_MODULE_0__["NgModule"], args: [{
                    declarations: [
                        AmChartsDirective
                    ],
                    exports: [
                        AmChartsDirective
                    ],
                    providers: [
                        AmChartsService
                    ]
                },] },
    ];
    /** @nocollapse */
    AmChartsModule.ctorParameters = function () { return []; };
    return AmChartsModule;
}());

function AmChartsModule_tsickle_Closure_declarations() {
    /** @type {!Array<{type: !Function, args: (undefined|!Array<?>)}>} */
    AmChartsModule.decorators;
    /**
     * @nocollapse
     * @type {function(): !Array<(null|{type: ?, decorators: (undefined|!Array<{type: !Function, args: (undefined|!Array<?>)}>)})>}
     */
    AmChartsModule.ctorParameters;
}
//# sourceMappingURL=index.js.map

/***/ }),

/***/ "./src/app/theme/pages/default/reports/overview/overview.component.html":
/*!******************************************************************************!*\
  !*** ./src/app/theme/pages/default/reports/overview/overview.component.html ***!
  \******************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<!-- BEGIN: Subheader -->\n<div class=\"m-subheader\" appunwraptag=\"\">\n\t<div class=\"d-flex align-items-center\">\n\t\t<div class=\"mr-auto\">\n\t\t\t<h3 class=\"m-subheader__title\">\n\t\t\t\tReports\n\t\t\t</h3>\n\t\t</div>\n\t\t<div>\n\t\t\t <span class=\"m-subheader__daterange\" id=\"m_dashboard_daterangepicker\">\n\t\t\t\t<span class=\"m-subheader__daterange-label\">\n\t\t\t\t\t<span class=\"m-subheader__daterange-title\"></span>\n\t\t\t\t\t<span class=\"m-subheader__daterange-date m--font-brand\" id=\"date_range\"></span>\n\t\t\t\t</span>\n\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill\">\n\t\t\t\t\t<i class=\"la la-angle-down\"></i>\n\t\t\t\t</a>\n\t\t\t</span> \n\t\t</div>\n\t</div>\n</div>\n<!-- END: Subheader -->\n<div class=\"m-content\">\n\t<!--Begin::Section-->\n\t\n\t<div class=\"row\">\n\t\t\n\t\t<div class=\"col-xl-12\">\n\t\t\t<!--begin:: Widgets/Best Sellers-->\n\t\t\t<div class=\"m-portlet m-portlet--full-height\">\n\t\t\t\t<div class=\"m-portlet__head\">\n\t\t\t\t\t<div class=\"m-portlet__head-caption\">\n\t\t\t\t\t\t\n\t\t\t\t\t\t<ul class=\"nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm\" role=\"tablist\">\n\t\t\t\t\t\t\t<li class=\"nav-item m-tabs__item\">\n\t\t\t\t\t\t\t\t<a class=\"nav-link m-tabs__link active\" data-toggle=\"tab\" href=\"#overview\" role=\"tab\" aria-selected=\"true\" style=\"cursor: pointer;\">\n\t\t\t\t\t\t\t\t\tOverview\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t<li class=\"nav-item m-tabs__item\">\n\t\t\t\t\t\t\t\t<a class=\"nav-link m-tabs__link\" data-toggle=\"tab\" href=\"#sales-by-day\" role=\"tab\" aria-selected=\"false\" style=\"cursor: pointer;\">\n\t\t\t\t\t\t\t\t\tSales By Day\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t<li class=\"nav-item m-tabs__item\">\n\t\t\t\t\t\t\t\t<a class=\"nav-link m-tabs__link\" data-toggle=\"tab\" href=\"#top-selling\" role=\"tab\" aria-selected=\"false\" style=\"cursor: pointer;\">\n\t\t\t\t\t\t\t\t\tTop Selling\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t<li class=\"nav-item m-tabs__item\">\n\t\t\t\t\t\t\t\t<a class=\"nav-link m-tabs__link\" data-toggle=\"tab\" href=\"#top-earning\" role=\"tab\" aria-selected=\"false\" style=\"cursor: pointer;\">\n\t\t\t\t\t\t\t\t\tTop Earning\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t\t<li class=\"nav-item m-tabs__item\">\n\t\t\t\t\t\t\t\t<a class=\"nav-link m-tabs__link\" data-toggle=\"tab\" href=\"#statement\" role=\"tab\" aria-selected=\"false\" style=\"cursor: pointer;\">\n\t\t\t\t\t\t\t\t\tStatement\n\t\t\t\t\t\t\t\t</a>\n\t\t\t\t\t\t\t</li>\n\t\t\t\t\t\t</ul>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t\t<div class=\"m-portlet__body\">\n\t\t\t\t\t<!--begin::Content-->\n\t\t\t\t\t<div class=\"tab-content\">\n\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"overview\" aria-expanded=\"true\">\n\t\t\t\t\t\t\t<!--begin::m-widget5-->\n\t\t\t\t\t\t\t<div class=\"m-widget5\">\n\t\t\t\t\t\t\t\t<div class=\"m-widget5__item\">\n\t\t\t\t\t\t\t\t\t<h1>OVERVIEW</h1>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"m-widget5__item\" >\n\t\t\t\t\t\t\t\t\t<div class=\"m-section\">\n\t\t\t\t\t\t\t\t\t\t<!-- <span class=\"m-section__sub\">\n\t\t\t\t\t\t\t\t\t\t\tMetronic's Stack allows building an equal height flexbile blocks easily:\n\t\t\t\t\t\t\t\t\t\t</span> -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-section__content\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-demo\" data-code-preview=\"true\" data-code-html=\"true\" data-code-js=\"false\">\n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-demo__preview\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack m-stack--ver m-stack--general m-stack--demo\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack__item\" style=\"width: 30%;\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Section-->\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-section\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <span class=\"m-section__sub\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMetronic's Stack allows building an equal height flexbile blocks easily:\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span> -->\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-section__content\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-demo\" data-code-preview=\"true\" data-code-html=\"true\" data-code-js=\"false\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-demo__preview\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack m-stack--ver m-stack--general m-stack--demo\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"color: #307be1\"><i class=\"fa fa-signal\"></i> ${{dashboardData.total_sales}}</b>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p> sales in this period</p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack m-stack--ver m-stack--general m-stack--demo\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"color: #6da754\"><i class=\"fa fa-id-card\"></i> ${{average_sale}}</b>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>  average daily sales</p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack m-stack--ver m-stack--general m-stack--demo\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{dashboardData.total_orders}} <p>  orders placed</p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack m-stack--ver m-stack--general m-stack--demo\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pie-chart\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{dashboardData.total_orders}} <p>  items purchased</p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack m-stack--ver m-stack--general m-stack--demo\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t$100 <p>  charged for shipping</p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack m-stack--ver m-stack--general m-stack--demo\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t10 <p>  worth of coupons used</p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Section-->\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>This month's sales</b>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"overview_monthly_sale\" style=\"height: 500px;\"></div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<!--end::m-widget5-->\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"tab-pane\" id=\"sales-by-day\" aria-expanded=\"true\">\n\t\t\t\t\t\t\t<!--begin::m-widget5-->\n\t\t\t\t\t\t\t<div class=\"m-widget5\">\n\t\t\t\t\t\t\t\t<div class=\"m-widget5__item\">\n\t\t\t\t\t\t\t\t\t<h1>SALES-BY-DAY</h1>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"m-widget5__item\" >\n\t\t\t\t\t\t\t\t\t<div class=\"m-section\">\n\t\t\t\t\t\t\t\t\t\t<!-- <span class=\"m-section__sub\">\n\t\t\t\t\t\t\t\t\t\t\tMetronic's Stack allows building an equal height flexbile blocks easily:\n\t\t\t\t\t\t\t\t\t\t</span> -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-section__content\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-demo\" data-code-preview=\"true\" data-code-html=\"true\" data-code-js=\"false\">\n\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-section__sub\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t <form class=\"form-inline\" action=\"/action_page.php\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t  <div class=\"form-group\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t    <label for=\"from\">From:</label>\n\t\t\t\t\t\t\t\t\t\t\t\t\t    <input type=\"date\" class=\"date form-control\" id=\"from\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t  </div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t  <div class=\"form-group\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t    <label for=\"to\">To:</label>\n\t\t\t\t\t\t\t\t\t\t\t\t\t    <input type=\"date\" class=\"date form-control\" id=\"to\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t  </div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t  <button type=\"submit\" class=\"btn btn-success\">Show</button>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</form> \n\t\t\t\t\t\t\t\t\t\t\t\t</span> \n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-demo__preview\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack m-stack--ver m-stack--general m-stack--demo\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack__item\" style=\"width: 30%;\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--begin::Section-->\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-section\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <span class=\"m-section__sub\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMetronic's Stack allows building an equal height flexbile blocks easily:\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span> -->\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-section__content\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-demo\" data-code-preview=\"true\" data-code-html=\"true\" data-code-js=\"false\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-demo__preview\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack m-stack--ver m-stack--general m-stack--demo\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"color: #307be1\"><i class=\"fa fa-signal\"></i> ${{dashboardData.total_sales}}</b>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p> sales in this period</p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack m-stack--ver m-stack--general m-stack--demo\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b style=\"color: #6da754\"><i class=\"fa fa-id-card\"></i> ${{average_sale}}</b>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>  average daily sales</p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack m-stack--ver m-stack--general m-stack--demo\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{dashboardData.total_orders}} <p>  orders placed</p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack m-stack--ver m-stack--general m-stack--demo\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pie-chart\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{dashboardData.total_orders}} <p>  items purchased</p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack m-stack--ver m-stack--general m-stack--demo\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t$100 <p>  charged for shipping</p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack m-stack--ver m-stack--general m-stack--demo\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t10 <p>  worth of coupons used</p>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--end::Section-->\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack__item\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Sales in this period</b>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"sales-by-day-chart\" style=\"height: 500px;\"></div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<!--end::m-widget5-->\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"tab-pane\" id=\"top-selling\" aria-expanded=\"true\">\n\t\t\t\t\t\t\t<!--begin::m-widget5-->\n\t\t\t\t\t\t\t<div class=\"m-widget5\">\n\t\t\t\t\t\t\t\t<div class=\"m-widget5__item\">\n\t\t\t\t\t\t\t\t\t<form class=\"form-inline\">\n\t\t\t\t\t\t\t\t\t  <div class=\"form-group\">\n\t\t\t\t\t\t\t\t\t    <label for=\"from\">From:</label>\n\t\t\t\t\t\t\t\t\t    <input type=\"date\" class=\"date form-control\" id=\"from\">\n\t\t\t\t\t\t\t\t\t  </div>\n\t\t\t\t\t\t\t\t\t  <div class=\"form-group\">\n\t\t\t\t\t\t\t\t\t    <label for=\"to\">To:</label>\n\t\t\t\t\t\t\t\t\t    <input type=\"date\" class=\"date form-control\" id=\"to\">\n\t\t\t\t\t\t\t\t\t  </div>\n\t\t\t\t\t\t\t\t\t  <button type=\"submit\" class=\"btn btn-success\" (click)=\"top_selling()\">Show</button>\n\t\t\t\t\t\t\t\t\t</form> \n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"m-widget5__item\" >\n\t\t\t\t\t\t\t\t\t<div class=\"m-section\">\n\t\t\t\t\t\t\t\t\t\t<!-- <span class=\"m-section__sub\">\n\t\t\t\t\t\t\t\t\t\t\tMetronic's Stack allows building an equal height flexbile blocks easily:\n\t\t\t\t\t\t\t\t\t\t</span> -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-section__content\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-demo\" data-code-preview=\"true\" data-code-html=\"true\" data-code-js=\"false\">\n\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-section__sub\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t \n\t\t\t\t\t\t\t\t\t\t\t\t</span> \n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-demo__preview\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m_datatable m-datatable m-datatable--default m-datatable--loaded\" id=\"local_data\" style=\"position: static; zoom: 1;\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"m-datatable__table\" style=\"display: block; min-height: 300px; overflow-x: auto;\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead class=\"m-datatable__head\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"m-datatable__row\" style=\"left: 0px;\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-field=\"Product SKU\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\"><span style=\"width: 110px;\">Product</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-field=\"Product Name\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 100px;\">Sales</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody class=\"m-datatable__body\" style=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr data-row=\"0\" *ngFor=\"let product of dashboardData.top_selling | paginate: { itemsPerPage: 10, currentPage: p }\" class=\"m-datatable__row\" style=\"left: 0px;\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td data-field=\"ShipName\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\">{{product.name}}</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td data-field=\"Currency\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"width: 100px;\">{{product.amount}}</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<pagination-controls (pageChange)=\"p = $event\"></pagination-controls>\n\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<!--end::m-widget5-->\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"tab-pane\" id=\"top-earning\" aria-expanded=\"true\">\n\t\t\t\t\t\t\t<!--begin::m-widget5-->\n\t\t\t\t\t\t\t<div class=\"m-widget5\">\n\t\t\t\t\t\t\t\t<div class=\"m-widget5__item\">\n\t\t\t\t\t\t\t\t\t<form class=\"form-inline\" action=\"/action_page.php\">\n\t\t\t\t\t\t\t\t\t  <div class=\"form-group\">\n\t\t\t\t\t\t\t\t\t    <label for=\"from\">From:</label>\n\t\t\t\t\t\t\t\t\t    <input type=\"date\" class=\"date form-control\" id=\"from\">\n\t\t\t\t\t\t\t\t\t  </div>\n\t\t\t\t\t\t\t\t\t  <div class=\"form-group\">\n\t\t\t\t\t\t\t\t\t    <label for=\"to\">To:</label>\n\t\t\t\t\t\t\t\t\t    <input type=\"date\" class=\"date form-control\" id=\"to\">\n\t\t\t\t\t\t\t\t\t  </div>\n\t\t\t\t\t\t\t\t\t  <button type=\"submit\" class=\"btn btn-success\">Show</button>\n\t\t\t\t\t\t\t\t\t</form> \n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"m-widget5__item\" >\n\t\t\t\t\t\t\t\t\t<div class=\"m-section\">\n\t\t\t\t\t\t\t\t\t\t<!-- <span class=\"m-section__sub\">\n\t\t\t\t\t\t\t\t\t\t\tMetronic's Stack allows building an equal height flexbile blocks easily:\n\t\t\t\t\t\t\t\t\t\t</span> -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-section__content\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-demo\" data-code-preview=\"true\" data-code-html=\"true\" data-code-js=\"false\">\n\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-section__sub\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t \n\t\t\t\t\t\t\t\t\t\t\t\t</span> \n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-demo__preview\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m_datatable m-datatable m-datatable--default m-datatable--loaded\" id=\"local_data\" style=\"position: static; zoom: 1;\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"m-datatable__table\" style=\"display: block; min-height: 300px; overflow-x: auto;\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead class=\"m-datatable__head\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"m-datatable__row\" style=\"left: 0px;\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-field=\"Product SKU\" class=\"m-datatable__cell m-datatable__cell--sort\" style=\"\"><span style=\"width: 110px;\">Product</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-field=\"Product Name\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 100px;\">Sales</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th data-field=\"Product Name\" class=\"m-datatable__cell m-datatable__cell--sort\"><span style=\"width: 100px;\">Earning</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody class=\"m-datatable__body\" style=\"\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr data-row=\"0\" *ngFor=\"let product of dashboardData.top_earning | paginate: { itemsPerPage: 10, currentPage: p }\" class=\"m-datatable__row\" style=\"left: 0px;\">\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td data-field=\"ShipName\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"width: 110px;\">{{product.name}}</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td data-field=\"Currency\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"width: 100px;\">{{product.amount}}</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>\n\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td data-field=\"Currency\" class=\"m-datatable__cell\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"width: 100px;\">{{product.earning}}</span>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<pagination-controls (pageChange)=\"p = $event\"></pagination-controls>\n\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<!--end::m-widget5-->\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t<div class=\"tab-pane\" id=\"statement\" aria-expanded=\"true\">\n\t\t\t\t\t\t\t<!--begin::m-widget5-->\n\t\t\t\t\t\t\t<div class=\"m-widget5\">\n\t\t\t\t\t\t\t\t<div class=\"m-widget5__item\">\n\t\t\t\t\t\t\t\t\t<form class=\"form-inline\" action=\"/action_page.php\">\n\t\t\t\t\t\t\t\t\t  <div class=\"form-group\">\n\t\t\t\t\t\t\t\t\t    <label for=\"from\">From:</label>\n\t\t\t\t\t\t\t\t\t    <input type=\"date\" class=\"date form-control\" id=\"from\">\n\t\t\t\t\t\t\t\t\t  </div>\n\t\t\t\t\t\t\t\t\t  <div class=\"form-group\">\n\t\t\t\t\t\t\t\t\t    <label for=\"to\">To:</label>\n\t\t\t\t\t\t\t\t\t    <input type=\"date\" class=\"date form-control\" id=\"to\">\n\t\t\t\t\t\t\t\t\t  </div>\n\t\t\t\t\t\t\t\t\t  <button type=\"submit\" class=\"btn btn-success\">Show</button>\n\t\t\t\t\t\t\t\t\t</form> \n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t<div class=\"m-widget5__item\" >\n\t\t\t\t\t\t\t\t\t<div class=\"m-section\">\n\t\t\t\t\t\t\t\t\t\t<!-- <span class=\"m-section__sub\">\n\t\t\t\t\t\t\t\t\t\t\tMetronic's Stack allows building an equal height flexbile blocks easily:\n\t\t\t\t\t\t\t\t\t\t</span> -->\n\t\t\t\t\t\t\t\t\t\t<div class=\"m-section__content\">\n\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-demo\" data-code-preview=\"true\" data-code-html=\"true\" data-code-js=\"false\">\n\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"m-section__sub\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t \n\t\t\t\t\t\t\t\t\t\t\t\t</span> \n\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-demo__preview\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack m-stack--ver m-stack--general m-stack--demo\">\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"m-stack__item\" >\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<!--end::m-widget5-->\n\t\t\t\t\t\t</div>\n\t\t\t\t\t</div>\n\t\t\t\t\t<!--end::Content-->\n\t\t\t\t</div>\n\t\t\t</div>\n\t\t\t<!--end:: Widgets/Best Sellers-->\n\t\t</div>\n\t</div>\n</div>\n"

/***/ }),

/***/ "./src/app/theme/pages/default/reports/overview/overview.component.ts":
/*!****************************************************************************!*\
  !*** ./src/app/theme/pages/default/reports/overview/overview.component.ts ***!
  \****************************************************************************/
/*! exports provided: OverviewComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "OverviewComponent", function() { return OverviewComponent; });
/* harmony import */ var _auth_services_reports_service__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../../../auth/_services/reports.service */ "./src/app/auth/_services/reports.service.ts");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _helpers__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../helpers */ "./src/app/helpers.ts");
/* harmony import */ var _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../../_services/script-loader.service */ "./src/app/_services/script-loader.service.ts");
/* harmony import */ var _services_data_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../../../../_services/data.service */ "./src/app/_services/data.service.ts");
/* harmony import */ var _auth_services_menu_service__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../../../../auth/_services/menu.service */ "./src/app/auth/_services/menu.service.ts");
/* harmony import */ var _auth_services_product_service__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../../../../auth/_services/product.service */ "./src/app/auth/_services/product.service.ts");
/* harmony import */ var _auth_services_category_service__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../../../../../auth/_services/category.service */ "./src/app/auth/_services/category.service.ts");
/* harmony import */ var _auth_services_subCategory_service__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ../../../../../auth/_services/subCategory.service */ "./src/app/auth/_services/subCategory.service.ts");
/* harmony import */ var _auth_services_brand_service__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ../../../../../auth/_services/brand.service */ "./src/app/auth/_services/brand.service.ts");
/* harmony import */ var _amcharts_amcharts3_angular__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! @amcharts/amcharts3-angular */ "./node_modules/@amcharts/amcharts3-angular/es2015/index.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/esm5/router.js");
/* harmony import */ var ngx_toastr__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ngx-toastr */ "./node_modules/ngx-toastr/fesm5/ngx-toastr.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};













var OverviewComponent = /** @class */ (function () {
    function OverviewComponent(AmCharts, route, toastr, router, _reportsService, _brandService, _menuService, _categoryService, _productService, _subCategory, _dataService, _script) {
        this.AmCharts = AmCharts;
        this.route = route;
        this.toastr = toastr;
        this.router = router;
        this._reportsService = _reportsService;
        this._brandService = _brandService;
        this._menuService = _menuService;
        this._categoryService = _categoryService;
        this._productService = _productService;
        this._subCategory = _subCategory;
        this._dataService = _dataService;
        this._script = _script;
        this.searchValue = "";
        this.dropDownValue = '';
        this.dashboardData = {};
        this.menu = [];
        this.chart_data = [];
        this.average_sale = 0;
        this.from_top_selling = '';
        this.to_top_selling = '';
        this.p = 1;
    }
    OverviewComponent.prototype.ngOnInit = function () {
        var _this = this;
        /*user permission*/
        var currentUser = JSON.parse(localStorage.getItem('currentUser'));
        var permission = currentUser.success.permission;
        if (permission.report_overview != 1) {
            this.toastr.error('You have not permission to visit this page.', 'Error Message');
            this.router.navigate(['/']);
        }
        /*user permission*/
        var user_id;
        var user_role;
        var loggedUserId;
        var where;
        this.route.params.subscribe(function (parameter) {
            localStorage.setItem('section', 'product');
            loggedUserId = JSON.parse(localStorage.getItem('currentUser'));
            if (parameter.vendor_id) {
                console.log('parameter.vendor_id', parameter.vendor_id);
                where = { loggedUserId: parameter.vendor_id, role: '' };
            }
            else {
                where = { loggedUserId: loggedUserId.success.id, role: loggedUserId.success.role };
            }
            _this._reportsService.reportInventory(where).subscribe(function (data) {
                _this.productData = data.success;
            });
        });
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
        this._menuService.dashboardService({ user_role: user_role, user_id: user_id })
            .subscribe(function (data) {
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
            _this.dashboardData.vendor_awaiting_approval = data.quater_sale[0].vendor_awaiting_approval;
            _this.dashboardData.vendor_signup_this_month = data.quater_sale[0].vendor_signup_this_month;
            _this.dashboardData.total_sales_chart = data.total_sales_chart;
            _this.dashboardData.top_selling = data.top_selling;
            _this.dashboardData.top_earning = data.top_earning;
            _this.average_sale = data.total_sales_avg[0].total_amt.toFixed(2);
            console.log('this.average_sale');
            console.log(_this.average_sale);
            console.log(_this.dashboardData);
            //this.chart_data = 
            _this.createChart('overview_monthly_sale', data.total_sales_chart);
            _this.createChart('sales-by-day-chart', data.total_sales_chart);
        });
    };
    OverviewComponent.prototype.top_selling = function () {
        console.log('from_top_selling');
        console.log(this.from_top_selling);
        console.log('to_top_selling');
        console.log(this.to_top_selling);
        console.log('top_selling');
    };
    OverviewComponent.prototype.search = function () {
        var _this = this;
        this._reportsService.searching({ search_value: this.searchValue, dropdown_value: this.dropDownValue }).subscribe(function (data) {
            console.log(data);
            _this.customerData = data.success;
        });
    };
    OverviewComponent.prototype.customer_delete = function (del_id) {
        var _this = this;
        console.log(del_id);
        var value = confirm('Are you sure to delete this customer request?');
        if (value) {
            this._reportsService.del_support(del_id).subscribe(function (data) {
                _this.customerData = data.data;
            });
        }
    };
    OverviewComponent.prototype.createChart = function (div_id, data) {
        this.chart = this.AmCharts.makeChart(div_id, {
            type: "serial",
            theme: "light",
            marginRight: 40,
            marginLeft: 40,
            autoMarginOffset: 20,
            mouseWheelZoomEnabled: !0,
            dataDateFormat: "YYYY-MM-DD",
            valueAxes: [{
                    id: "v1",
                    axisAlpha: 0,
                    position: "left",
                    ignoreAxisWidth: !0
                }],
            balloon: {
                borderThickness: 1,
                shadowAlpha: 0
            },
            graphs: [{
                    id: "g1",
                    balloon: {
                        drop: !0,
                        adjustBorderColor: !1,
                        color: "#ffffff"
                    },
                    bullet: "round",
                    bulletBorderAlpha: 1,
                    bulletColor: "#FFFFFF",
                    bulletSize: 5,
                    hideBulletsCount: 50,
                    lineThickness: 2,
                    title: "red line",
                    useLineColorForBulletBorder: !0,
                    valueField: "value",
                    balloonText: "<span style='font-size:18px;'>[[value]]</span>"
                }],
            chartScrollbar: {
                graph: "g1",
                oppositeAxis: !1,
                offset: 30,
                scrollbarHeight: 80,
                backgroundAlpha: 0,
                selectedBackgroundAlpha: .1,
                selectedBackgroundColor: "#888888",
                graphFillAlpha: 0,
                graphLineAlpha: .5,
                selectedGraphFillAlpha: 0,
                selectedGraphLineAlpha: 1,
                autoGridCount: !0,
                color: "#AAAAAA"
            },
            chartCursor: {
                pan: !0,
                valueLineEnabled: !0,
                valueLineBalloonEnabled: !0,
                cursorAlpha: 1,
                cursorColor: "#258cbb",
                limitToGraph: "g1",
                valueLineAlpha: .2,
                valueZoomable: !0
            },
            valueScrollbar: {
                oppositeAxis: !1,
                offset: 50,
                scrollbarHeight: 10
            },
            categoryField: "date",
            categoryAxis: {
                parseDates: !0,
                dashLength: 1,
                minorGridEnabled: !0
            },
            export: {
                enabled: !0
            },
            dataProvider: data
        });
    };
    OverviewComponent.prototype.changeStatus = function (customer) {
        if (customer.customer_status == 'Active') {
            customer.customer_status = 'Inactive';
            this._reportsService.updateStatus(customer.id).subscribe(function (data) {
                console.log('update', data);
            });
        }
        else {
            customer.customer_status = 'Active';
            this._reportsService.updateStatus(customer.id).subscribe(function (data) {
                console.log('update', data);
            });
        }
    };
    OverviewComponent.prototype.ngAfterViewInit = function () {
        this._script.loadScripts('app-overview', ['assets/app/js/overview.js', '//www.amcharts.com/lib/3/plugins/tools/polarScatter/polarScatter.min.js',
            '//www.amcharts.com/lib/3/plugins/export/export.min.js',
            'assets/demo/default/custom/components/charts/amcharts/charts.js']);
        _helpers__WEBPACK_IMPORTED_MODULE_2__["Helpers"].loadStyles('app-overview', [
            '//www.amcharts.com/lib/3/plugins/export/export.css'
        ]);
    };
    OverviewComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: 'app-overview',
            template: __webpack_require__(/*! ./overview.component.html */ "./src/app/theme/pages/default/reports/overview/overview.component.html"),
            encapsulation: _angular_core__WEBPACK_IMPORTED_MODULE_1__["ViewEncapsulation"].None,
            styles: []
        }),
        __metadata("design:paramtypes", [_amcharts_amcharts3_angular__WEBPACK_IMPORTED_MODULE_10__["AmChartsService"], _angular_router__WEBPACK_IMPORTED_MODULE_11__["ActivatedRoute"], ngx_toastr__WEBPACK_IMPORTED_MODULE_12__["ToastrService"], _angular_router__WEBPACK_IMPORTED_MODULE_11__["Router"], _auth_services_reports_service__WEBPACK_IMPORTED_MODULE_0__["ReportsService"], _auth_services_brand_service__WEBPACK_IMPORTED_MODULE_9__["BrandService"], _auth_services_menu_service__WEBPACK_IMPORTED_MODULE_5__["MenuService"], _auth_services_category_service__WEBPACK_IMPORTED_MODULE_7__["CategoryService"], _auth_services_product_service__WEBPACK_IMPORTED_MODULE_6__["ProductService"], _auth_services_subCategory_service__WEBPACK_IMPORTED_MODULE_8__["SubCategoryService"], _services_data_service__WEBPACK_IMPORTED_MODULE_4__["DataService"], _services_script_loader_service__WEBPACK_IMPORTED_MODULE_3__["ScriptLoaderService"]])
    ], OverviewComponent);
    return OverviewComponent;
}());



/***/ }),

/***/ "./src/app/theme/pages/default/reports/overview/overview.module.ts":
/*!*************************************************************************!*\
  !*** ./src/app/theme/pages/default/reports/overview/overview.module.ts ***!
  \*************************************************************************/
/*! exports provided: OverviewModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "OverviewModule", function() { return OverviewModule; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/esm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/esm5/common.js");
/* harmony import */ var _overview_overview_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../overview/overview.component */ "./src/app/theme/pages/default/reports/overview/overview.component.ts");
/* harmony import */ var _default_default_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../default/default.component */ "./src/app/theme/pages/default/default.component.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/esm5/router.js");
/* harmony import */ var _layouts_layout_module__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../../../layouts/layout.module */ "./src/app/theme/layouts/layout.module.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/esm5/forms.js");
/* harmony import */ var ngx_pagination__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ngx-pagination */ "./node_modules/ngx-pagination/dist/ngx-pagination.js");
/* harmony import */ var _amcharts_amcharts3_angular__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! @amcharts/amcharts3-angular */ "./node_modules/@amcharts/amcharts3-angular/es2015/index.js");
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
                component: _overview_overview_component__WEBPACK_IMPORTED_MODULE_2__["OverviewComponent"]
            }
        ]
    },
];
var OverviewModule = /** @class */ (function () {
    function OverviewModule() {
    }
    OverviewModule = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_1__["CommonModule"], _angular_router__WEBPACK_IMPORTED_MODULE_4__["RouterModule"].forChild(routes),
                _layouts_layout_module__WEBPACK_IMPORTED_MODULE_5__["LayoutModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_6__["FormsModule"], _amcharts_amcharts3_angular__WEBPACK_IMPORTED_MODULE_8__["AmChartsModule"], ngx_pagination__WEBPACK_IMPORTED_MODULE_7__["NgxPaginationModule"],
            ],
            declarations: [_overview_overview_component__WEBPACK_IMPORTED_MODULE_2__["OverviewComponent"]]
        })
    ], OverviewModule);
    return OverviewModule;
}());



/***/ })

}]);
//# sourceMappingURL=pages-default-reports-overview-overview-module.js.map