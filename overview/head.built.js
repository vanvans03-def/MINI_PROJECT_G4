!(function(t) {
    var e = {};

    function n(o) {
        if (e[o]) return e[o].exports;
        var r = (e[o] = { i: o, l: !1, exports: {} });
        return t[o].call(r.exports, r, r.exports, n), (r.l = !0), r.exports;
    }
    (n.m = t),
    (n.c = e),
    (n.d = function(t, e, o) {
        n.o(t, e) || Object.defineProperty(t, e, { enumerable: !0, get: o });
    }),
    (n.r = function(t) {
        "undefined" != typeof Symbol &&
            Symbol.toStringTag &&
            Object.defineProperty(t, Symbol.toStringTag, { value: "Module" }),
            Object.defineProperty(t, "__esModule", { value: !0 });
    }),
    (n.t = function(t, e) {
        if ((1 & e && (t = n(t)), 8 & e)) return t;
        if (4 & e && "object" == typeof t && t && t.__esModule) return t;
        var o = Object.create(null);
        if (
            (n.r(o),
                Object.defineProperty(o, "default", { enumerable: !0, value: t }),
                2 & e && "string" != typeof t)
        )
            for (var r in t)
                n.d(
                    o,
                    r,
                    function(e) {
                        return t[e];
                    }.bind(null, r)
                );
        return o;
    }),
    (n.n = function(t) {
        var e =
            t && t.__esModule ?

            function() {
                return t.default;
            } :
            function() {
                return t;
            };
        return n.d(e, "a", e), e;
    }),
    (n.o = function(t, e) {
        return Object.prototype.hasOwnProperty.call(t, e);
    }),
    (n.p = "/"),
    n((n.s = 91));
})({
    100: function(t, e, n) {
        "use strict";
        var o = n(43);
        t.exports = function() {
            var t = o.getWindow().matchMedia("(prefers-reduced-motion)");
            return !(!t || !t.matches);
        };
    },
    17: function(t, e, n) {
        "use strict";
        var o = {
            ua: window.navigator.userAgent,
            platform: window.navigator.platform,
            vendor: window.navigator.vendor,
        };
        t.exports = n(30)(o);
    },
    2: function(t, e, n) {
        "use strict";
        t.exports = {
            PICTURE_DATA_DOWNLOAD_AREA_KEYFRAME: "data-download-area-keyframe",
            PICTURE_DATA_LAZY: "data-lazy",
            PICTURE_DATA_EMPTY_SOURCE: "data-empty",
            PICTURE_DATA_LOADED: "data-picture-loaded",
            PICTURE_CLASS_LOADED: "loaded",
        };
    },
    27: function(t, e, n) {
        "use strict";
        const o = n(28),
            r = n(29);
        t.exports = { PictureLazyLoading: o, PictureHead: r };
    },
    28: function(t, e, n) {
        "use strict";
        const o = n(2).PICTURE_DATA_LAZY,
            r = n(2).PICTURE_DATA_EMPTY_SOURCE,
            i = n(2).PICTURE_DATA_DOWNLOAD_AREA_KEYFRAME;
        t.exports = class {
            constructor(t = {}) {
                (this.options = t), this._init();
            }
            _init() {
                (this._pictures = Array.from(document.querySelectorAll(`*[${o}]`))),
                (this.AnimSystem = this._findAnim()),
                null !== this.AnimSystem &&
                    (this._injectSources(),
                        this._addKeyframesToImages(),
                        this._addMethodsToPictures());
            }
            _addMethodsToPictures() {
                this._pictures.forEach((t) => {
                    t.forceLoad = () => {
                        this._downloadImage(t);
                    };
                });
            }
            _injectSources() {
                this._pictures.forEach((t) => {
                    const e = t.nextElementSibling;
                    if (e && "NOSCRIPT" === e.nodeName) {
                        const n = t.querySelector("img"),
                            o = e.textContent.match(/<source .+ \/>/g);
                        o && n.insertAdjacentHTML("beforebegin", o.join(""));
                    }
                });
            }
            _defineKeyframeOptions(t) {
                const e = t.getAttribute(i) || "{}";
                return Object.assign({}, { start: "t - 200vh", end: "b + 100vh", event: "PictureLazyLoading" },
                    JSON.parse(e)
                );
            }
            _addKeyframesToImages() {
                this._pictures.forEach((t) => {
                    (t.__scrollGroup = this.AnimSystem.getGroupForTarget(document.body)),
                    this.AnimSystem.getGroupForTarget(t) &&
                        (t.__scrollGroup = this.AnimSystem.getGroupForTarget(t));
                    let e = this._defineKeyframeOptions(t);
                    t.__scrollGroup
                        .addKeyframe(t, e)
                        .controller.once("PictureLazyLoading:enter", () => {
                            this._imageIsInLoadRange(t);
                        });
                });
            }
            _imageIsInLoadRange(t) {
                t.querySelector("img") && this._downloadImage(t);
            }
            _downloadImage(t) {
                const e = t.querySelector(`[${r}]`);
                e && t.removeChild(e);
            }
            _findAnim() {
                var t = Array.from(
                    document.querySelectorAll(
                        "[data-anim-group],[data-anim-scroll-group],[data-anim-time-group]"
                    )
                );
                return (
                    t
                    .map((t) => (t._animInfo ? t._animInfo.group : null))
                    .filter((t) => null !== t),
                    t[0] && t[0]._animInfo ?
                    t[0]._animInfo.group.anim :
                    (console.error(
                            "PictureLazyLoading: AnimSystem not found, please initialize anim before instantiating"
                        ),
                        null)
                );
            }
        };
    },
    29: function(t, e, n) {
        "use strict";
        const o = n(2).PICTURE_CLASS_LOADED,
            r = n(2).PICTURE_DATA_LOADED,
            i = n(2).PICTURE_DATA_EMPTY_SOURCE;
        t.exports =
            ((window.__pictureElementInstancesLoaded = new Map()),
                void(window.__lp = function(t) {
                    const e = t.target.parentElement;
                    e.querySelector(`[${i}]`) ?
                        t.stopImmediatePropagation() :
                        (e.classList.add(`${o}`),
                            e.setAttribute(`${r}`, ""),
                            window.__pictureElementInstancesLoaded.set(e.id, e),
                            (t.target.onload = null));
                }));
    },
    30: function(t, e, n) {
        "use strict";
        var o = n(31),
            r = n(32);

        function i(t, e) {
            if ("function" == typeof t.parseVersion) return t.parseVersion(e);
            var n,
                o = t.version || t.userAgent;
            "string" == typeof o && (o = [o]);
            for (var r, i = o.length, s = 0; s < i; s++)
                if (
                    (r = e.match(
                        ((n = o[s]), new RegExp(n + "[a-zA-Z\\s/:]+([0-9_.]+)", "i"))
                    )) &&
                    r.length > 1
                )
                    return r[1].replace(/_/g, ".");
            return !1;
        }

        function s(t, e, n) {
            for (var o, r, s = t.length, u = 0; u < s; u++)
                if (
                    ("function" == typeof t[u].test ?
                        !0 === t[u].test(n) && (o = t[u].name) :
                        n.ua.indexOf(t[u].userAgent) > -1 && (o = t[u].name),
                        o)
                ) {
                    if (((e[o] = !0), "string" == typeof(r = i(t[u], n.ua)))) {
                        var a = r.split(".");
                        (e.version.string = r),
                        a &&
                            a.length > 0 &&
                            ((e.version.major = parseInt(a[0] || 0)),
                                (e.version.minor = parseInt(a[1] || 0)),
                                (e.version.patch = parseInt(a[2] || 0)));
                    } else
                        "edge" === o &&
                        ((e.version.string = "12.0.0"),
                            (e.version.major = "12"),
                            (e.version.minor = "0"),
                            (e.version.patch = "0"));
                    return (
                        "function" == typeof t[u].parseDocumentMode &&
                        (e.version.documentMode = t[u].parseDocumentMode()),
                        e
                    );
                }
            return e;
        }
        t.exports = function(t) {
            var e = {};
            return (
                (e.browser = s(r.browser, o.browser, t)), (e.os = s(r.os, o.os, t)), e
            );
        };
    },
    31: function(t, e, n) {
        "use strict";
        t.exports = {
            browser: {
                safari: !1,
                chrome: !1,
                firefox: !1,
                ie: !1,
                opera: !1,
                android: !1,
                edge: !1,
                edgeChromium: !1,
                samsung: !1,
                version: { string: "", major: 0, minor: 0, patch: 0, documentMode: !1 },
            },
            os: {
                osx: !1,
                ios: !1,
                android: !1,
                windows: !1,
                linux: !1,
                fireos: !1,
                chromeos: !1,
                version: { string: "", major: 0, minor: 0, patch: 0 },
            },
        };
    },
    32: function(t, e, n) {
        "use strict";
        t.exports = {
            browser: [{
                    name: "edge",
                    userAgent: "Edge",
                    version: ["rv", "Edge"],
                    test: function(t) {
                        return (
                            t.ua.indexOf("Edge") > -1 ||
                            "Mozilla/5.0 (Windows NT 10.0; Win64; x64)" === t.ua
                        );
                    },
                },
                {
                    name: "edgeChromium",
                    userAgent: "Edge",
                    version: ["rv", "Edg"],
                    test: function(t) {
                        return t.ua.indexOf("Edg") > -1 && -1 === t.ua.indexOf("Edge");
                    },
                },
                { name: "chrome", userAgent: "Chrome" },
                {
                    name: "firefox",
                    test: function(t) {
                        return t.ua.indexOf("Firefox") > -1 && -1 === t.ua.indexOf("Opera");
                    },
                    version: "Firefox",
                },
                { name: "android", userAgent: "Android" },
                {
                    name: "safari",
                    test: function(t) {
                        return (
                            t.ua.indexOf("Safari") > -1 && t.vendor.indexOf("Apple") > -1
                        );
                    },
                    version: "Version",
                },
                {
                    name: "ie",
                    test: function(t) {
                        return t.ua.indexOf("IE") > -1 || t.ua.indexOf("Trident") > -1;
                    },
                    version: ["MSIE", "rv"],
                    parseDocumentMode: function() {
                        var t = !1;
                        return (
                            document.documentMode &&
                            (t = parseInt(document.documentMode, 10)),
                            t
                        );
                    },
                },
                { name: "opera", userAgent: "Opera", version: ["Version", "Opera"] },
                { name: "samsung", userAgent: "SamsungBrowser" },
            ],
            os: [{
                    name: "windows",
                    test: function(t) {
                        return t.ua.indexOf("Windows") > -1;
                    },
                    version: "Windows NT",
                },
                {
                    name: "osx",
                    userAgent: "Mac",
                    test: function(t) {
                        return t.ua.indexOf("Macintosh") > -1;
                    },
                },
                {
                    name: "ios",
                    test: function(t) {
                        return t.ua.indexOf("iPhone") > -1 || t.ua.indexOf("iPad") > -1;
                    },
                    version: ["iPhone OS", "CPU OS"],
                },
                {
                    name: "linux",
                    userAgent: "Linux",
                    test: function(t) {
                        return (
                            (t.ua.indexOf("Linux") > -1 ||
                                t.platform.indexOf("Linux") > -1) &&
                            -1 === t.ua.indexOf("Android")
                        );
                    },
                },
                {
                    name: "fireos",
                    test: function(t) {
                        return t.ua.indexOf("Firefox") > -1 && t.ua.indexOf("Mobile") > -1;
                    },
                    version: "rv",
                },
                {
                    name: "android",
                    userAgent: "Android",
                    test: function(t) {
                        return t.ua.indexOf("Android") > -1;
                    },
                },
                { name: "chromeos", userAgent: "CrOS" },
            ],
        };
    },
    43: function(t, e, n) {
        "use strict";
        t.exports = {
            getWindow: function() {
                return window;
            },
            getDocument: function() {
                return document;
            },
            getNavigator: function() {
                return navigator;
            },
        };
    },
    91: function(t, e, n) {
        t.exports = n(92);
    },
    92: function(t, e, n) {
        "use strict";
        const o = n(93),
            r = n(100);
        n(27).PictureHead;
        const i = n(17);
        const s = !r();
        o.addTests({
                "enhance-base-xp": s,
                quicklook:
                    (function() {
                        const t = document.createElement("a");
                        return !!t.relList && t.relList.supports("ar");
                    })() &&
                    i.browser.safari &&
                    i.browser.version.major >= 13,
                "reduced-motion": r(),
            }),
            o.htmlClass();
    },
    93: function(t, e, n) {
        "use strict";
        n(94);
        var o = n(95),
            r = n(96);
        (t.exports = new o(document.documentElement, r)),
        (t.exports.FeatureDetect = o);
        var i = n(99);
        document.addEventListener &&
            document.addEventListener("DOMContentLoaded", function() {
                new i();
            });
    },
    94: function(t, e) {},
    95: function(t, e, n) {
        "use strict";
        var o = function(t, e) {
                (this._target = t), (this._tests = {}), this.addTests(e);
            },
            r = o.prototype;
        (r.addTests = function(t) {
            this._tests = Object.assign(this._tests, t);
        }),
        (r._supports = function(t) {
            return (
                void 0 !== this._tests[t] &&
                ("function" == typeof this._tests[t] &&
                    (this._tests[t] = this._tests[t]()),
                    this._tests[t])
            );
        }),
        (r._addClass = function(t, e) {
            (e = e || "no-"),
            this._supports(t) ?
                this._target.classList.add(t) :
                this._target.classList.add(e + t);
        }),
        (r.htmlClass = function() {
            var t;
            for (t in (this._target.classList.remove("no-js"),
                    this._target.classList.add("js"),
                    this._tests))
                this._tests.hasOwnProperty(t) && this._addClass(t);
        }),
        (t.exports = o);
    },
    96: function(t, e, n) {
        "use strict";
        var o = n(97);
        t.exports = { touch: o, "progressive-image": !0 };
    },
    97: function(t, e, n) {
        "use strict";
        var o = n(43),
            r = n(98);

        function i() {
            var t = o.getWindow(),
                e = o.getDocument(),
                n = o.getNavigator();
            return !!(
                "ontouchstart" in t ||
                (t.DocumentTouch && e instanceof t.DocumentTouch) ||
                n.maxTouchPoints > 0 ||
                n.msMaxTouchPoints > 0
            );
        }
        (t.exports = r(i)), (t.exports.original = i);
    },
    98: function(t, e, n) {
        "use strict";
        t.exports = function(t) {
            var e;
            return function() {
                return void 0 === e && (e = t.apply(this, arguments)), e;
            };
        };
    },
    99: function(t, e, n) {
        "use strict";
        var o = "touch";

        function r(t, e) {
            (this._target = t || document.body),
            (this._attr = e || "data-focus-method"),
            (this._focusMethod = this._lastFocusMethod = !1),
            (this._onKeyDown = this._onKeyDown.bind(this)),
            (this._onMouseDown = this._onMouseDown.bind(this)),
            (this._onTouchStart = this._onTouchStart.bind(this)),
            (this._onFocus = this._onFocus.bind(this)),
            (this._onBlur = this._onBlur.bind(this)),
            (this._onWindowBlur = this._onWindowBlur.bind(this)),
            this._bindEvents();
        }
        var i = r.prototype;
        (i._bindEvents = function() {
            this._target.addEventListener("keydown", this._onKeyDown, !0),
                this._target.addEventListener("mousedown", this._onMouseDown, !0),
                this._target.addEventListener("touchstart", this._onTouchStart, !0),
                this._target.addEventListener("focus", this._onFocus, !0),
                this._target.addEventListener("blur", this._onBlur, !0),
                window.addEventListener("blur", this._onWindowBlur);
        }),
        (i._onKeyDown = function(t) {
            this._focusMethod = "key";
        }),
        (i._onMouseDown = function(t) {
            this._focusMethod !== o && (this._focusMethod = "mouse");
        }),
        (i._onTouchStart = function(t) {
            this._focusMethod = o;
        }),
        (i._onFocus = function(t) {
            this._focusMethod || (this._focusMethod = this._lastFocusMethod),
                t.target.setAttribute(this._attr, this._focusMethod),
                (this._lastFocusMethod = this._focusMethod),
                (this._focusMethod = !1);
        }),
        (i._onBlur = function(t) {
            t.target.removeAttribute(this._attr);
        }),
        (i._onWindowBlur = function(t) {
            this._focusMethod = !1;
        }),
        (t.exports = r);
    },
});