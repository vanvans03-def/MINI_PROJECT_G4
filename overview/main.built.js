!(function(t) {
    var e = {};

    function i(s) {
        if (e[s]) return e[s].exports;
        var r = (e[s] = { i: s, l: !1, exports: {} });
        return t[s].call(r.exports, r, r.exports, i), (r.l = !0), r.exports;
    }
    (i.m = t),
    (i.c = e),
    (i.d = function(t, e, s) {
        i.o(t, e) || Object.defineProperty(t, e, { enumerable: !0, get: s });
    }),
    (i.r = function(t) {
        "undefined" != typeof Symbol &&
            Symbol.toStringTag &&
            Object.defineProperty(t, Symbol.toStringTag, { value: "Module" }),
            Object.defineProperty(t, "__esModule", { value: !0 });
    }),
    (i.t = function(t, e) {
        if ((1 & e && (t = i(t)), 8 & e)) return t;
        if (4 & e && "object" == typeof t && t && t.__esModule) return t;
        var s = Object.create(null);
        if (
            (i.r(s),
                Object.defineProperty(s, "default", { enumerable: !0, value: t }),
                2 & e && "string" != typeof t)
        )
            for (var r in t)
                i.d(
                    s,
                    r,
                    function(e) {
                        return t[e];
                    }.bind(null, r)
                );
        return s;
    }),
    (i.n = function(t) {
        var e =
            t && t.__esModule ?

            function() {
                return t.default;
            } :
            function() {
                return t;
            };
        return i.d(e, "a", e), e;
    }),
    (i.o = function(t, e) {
        return Object.prototype.hasOwnProperty.call(t, e);
    }),
    (i.p = "/"),
    i((i.s = 101));
})([
        function(t, e, i) {
            "use strict";
            var s = i(68);
            t.exports = function(t) {
                return function() {
                    if (
                        s &&
                        "object" == typeof window.console &&
                        "function" == typeof console[t]
                    )
                        return console[t].apply(
                            console,
                            Array.prototype.slice.call(arguments, 0)
                        );
                };
            };
        },
        function(t, e) {
            t.exports = function(t) {
                return t && t.__esModule ? t : { default: t };
            };
        },
        function(t, e, i) {
            "use strict";
            t.exports = {
                PICTURE_DATA_DOWNLOAD_AREA_KEYFRAME: "data-download-area-keyframe",
                PICTURE_DATA_LAZY: "data-lazy",
                PICTURE_DATA_EMPTY_SOURCE: "data-empty",
                PICTURE_DATA_LOADED: "data-picture-loaded",
                PICTURE_CLASS_LOADED: "loaded",
            };
        },
        function(t, e, i) {
            "use strict";
            const s = {
                GUI_INSTANCE: null,
                ANIM_INSTANCE: null,
                VIEWPORT_EMITTER_ELEMENT: void 0,
                LOCAL_STORAGE_KEYS: {
                    GuiPosition: "anim-ui.position",
                    GroupCollapsedStates: "anim-ui.group-collapsed-states",
                    scrollY: "anim-ui.scrollY-position",
                    path: "anim-ui.path",
                },
                RESIZE_TIMEOUT: -1,
                BREAKPOINTS: [
                    { name: "S", mediaQuery: "only screen and (max-width: 734px)" },
                    { name: "M", mediaQuery: "only screen and (max-width: 1068px)" },
                    { name: "L", mediaQuery: "only screen and (min-width: 1069px)" },
                ],
                getBreakpoint: function() {
                    for (let t = 0; t < s.BREAKPOINTS.length; t++) {
                        let e = s.BREAKPOINTS[t];
                        if (window.matchMedia(e.mediaQuery).matches) return e.name;
                    }
                },
                KeyframeDefaults: {
                    ease: 1,
                    epsilon: 0.05,
                    preserveState: !1,
                    easeFunctionString: "linear",
                    easeFunction: "linear",
                    hold: !1,
                    snapAtCreation: !1,
                    toggle: !1,
                    breakpointMask: "SMLX",
                    event: "",
                    disabledWhen: [],
                    cssClass: "",
                },
                KeyframeTypes: {
                    Interpolation: 0,
                    InterpolationForward: 1,
                    CSSClass: 2,
                    Event: 3,
                },
                EVENTS: {
                    ON_DOM_KEYFRAMES_CREATED: "ON_DOM_KEYFRAMES_CREATED",
                    ON_DOM_GROUPS_CREATED: "ON_DOM_GROUPS_CREATED",
                    ON_GROUP_CREATED: "ON_GROUP_CREATED",
                    ON_KEYFRAME_UPDATED: "ON_KEYFRAME_UPDATED",
                    ON_TIMELINE_START: "ON_TIMELINE_START",
                    ON_TIMELINE_UPDATE: "ON_TIMELINE_UPDATE",
                    ON_TIMELINE_COMPLETE: "ON_TIMELINE_COMPLETE",
                    ON_CHAPTER_INITIATED: "ON_CHAPTER_INITIATED",
                    ON_CHAPTER_OCCURRED: "ON_CHAPTER_OCCURRED",
                    ON_CHAPTER_COMPLETED: "ON_CHAPTER_COMPLETED",
                },
                PageEvents: {
                    ON_SCROLL: "ON_SCROLL",
                    ON_RESIZE_IMMEDIATE: "ON_RESIZE_IMMEDIATE",
                    ON_RESIZE_DEBOUNCED: "ON_RESIZE_DEBOUNCED",
                    ON_BREAKPOINT_CHANGE: "ON_BREAKPOINT_CHANGE",
                },
                KeyframeJSONReservedWords: [
                    "event",
                    "cssClass",
                    "style",
                    "anchors",
                    "start",
                    "end",
                    "epsilon",
                    "easeFunction",
                    "ease",
                    "breakpointMask",
                    "disabledWhen",
                ],
                TweenProps: i(44),
                TargetValue: i(13),
                CSSTargetValue: i(33),
                pageMetrics: new(function() {
                    (this.scrollX = 0),
                    (this.scrollY = 0),
                    (this.windowWidth = 0),
                    (this.windowHeight = 0),
                    (this.documentOffsetX = 0),
                    (this.documentOffsetY = 0),
                    (this.previousBreakpoint = ""),
                    (this.breakpoint = "");
                })(),
                KeyframeComparison: function(t, e) {
                    return t.start < e.start ? -1 : t.start > e.start ? 1 : 0;
                },
            };
            t.exports = s;
        },
        function(t, e, i) {
            "use strict";
            t.exports = { EventEmitterMicro: i(18) };
        },
        function(t, e, i) {
            "use strict";
            var s = i(15);
            t.exports = s.requestAnimationFrame("draw");
        },
        function(t, e, i) {
            "use strict";
            var s = i(1);
            Object.defineProperty(e, "__esModule", { value: !0 }), (e.default = void 0);
            var r = s(i(10));
            var n = class {
                constructor(t) {
                    (this.options = t),
                    (this.media = t.media),
                    (this.mounted = this.mounted.bind(this)),
                    this.media.on(r.default.MOUNTED, this.mounted);
                }
                mounted() {}
                static get isSupported() {
                    return !0;
                }
                destroy() {}
            };
            e.default = n;
        },
        function(t, e, i) {
            "use strict";
            t.exports = {
                lerp: function(t, e, i) {
                    return e + (i - e) * t;
                },
                map: function(t, e, i, s, r) {
                    return s + ((r - s) * (t - e)) / (i - e);
                },
                mapClamp: function(t, e, i, s, r) {
                    var n = s + ((r - s) * (t - e)) / (i - e);
                    return Math.max(s, Math.min(r, n));
                },
                norm: function(t, e, i) {
                    return (t - e) / (i - e);
                },
                clamp: function(t, e, i) {
                    return Math.max(e, Math.min(i, t));
                },
                randFloat: function(t, e) {
                    return Math.random() * (e - t) + t;
                },
                randInt: function(t, e) {
                    return Math.floor(Math.random() * (e - t) + t);
                },
            };
        },
        function(t, e, i) {
            "use strict";
            var s = i(15);
            t.exports = s.requestAnimationFrame("update");
        },
        function(t, e, i) {
            "use strict";
            const s = {
                GUI_INSTANCE: null,
                ANIM_INSTANCE: null,
                VIEWPORT_EMITTER_ELEMENT: void 0,
                LOCAL_STORAGE_KEYS: {
                    GuiPosition: "anim-ui.position",
                    GroupCollapsedStates: "anim-ui.group-collapsed-states",
                    scrollY: "anim-ui.scrollY-position",
                    path: "anim-ui.path",
                },
                RESIZE_TIMEOUT: -1,
                BREAKPOINTS: [
                    { name: "S", mediaQuery: "only screen and (max-width: 735px)" },
                    { name: "M", mediaQuery: "only screen and (max-width: 1068px)" },
                    { name: "L", mediaQuery: "only screen and (min-width: 1442px)" },
                    { name: "L", mediaQuery: "only screen and (min-width: 1069px)" },
                ],
                getBreakpoint: function() {
                    for (let t = 0; t < s.BREAKPOINTS.length; t++) {
                        let e = s.BREAKPOINTS[t];
                        if (window.matchMedia(e.mediaQuery).matches) return e.name;
                    }
                },
                KeyframeDefaults: {
                    ease: 1,
                    epsilon: 0.05,
                    easeFunctionString: "linear",
                    easeFunction: "linear",
                    hold: !1,
                    snapAtCreation: !1,
                    toggle: !1,
                    breakpointMask: "SMLX",
                    event: "",
                    disabledWhen: [],
                    cssClass: "",
                },
                KeyframeTypes: {
                    Interpolation: 0,
                    InterpolationForward: 1,
                    CSSClass: 2,
                    Event: 3,
                },
                EVENTS: {
                    ON_DOM_KEYFRAMES_CREATED: "ON_DOM_KEYFRAMES_CREATED",
                    ON_DOM_GROUPS_CREATED: "ON_DOM_GROUPS_CREATED",
                    ON_GROUP_CREATED: "ON_GROUP_CREATED",
                    ON_KEYFRAME_UPDATED: "ON_KEYFRAME_UPDATED",
                    ON_TIMELINE_START: "ON_TIMELINE_START",
                    ON_TIMELINE_UPDATE: "ON_TIMELINE_UPDATE",
                    ON_TIMELINE_COMPLETE: "ON_TIMELINE_COMPLETE",
                },
                PageEvents: {
                    ON_SCROLL: "ON_SCROLL",
                    ON_RESIZE_IMMEDIATE: "ON_RESIZE_IMMEDIATE",
                    ON_RESIZE_DEBOUNCED: "ON_RESIZE_DEBOUNCED",
                    ON_BREAKPOINT_CHANGE: "ON_BREAKPOINT_CHANGE",
                },
                KeyframeJSONReservedWords: [
                    "event",
                    "cssClass",
                    "style",
                    "anchors",
                    "start",
                    "end",
                    "epsilon",
                    "easeFunction",
                    "ease",
                    "breakpointMask",
                    "disabledWhen",
                ],
                TweenProps: i(84),
                TargetValue: class {
                    constructor(t, e, i) {
                        (this.epsilon = parseFloat(e)),
                        (this.snapAtCreation = i),
                        (this.initialValue = t),
                        (this.target = t),
                        (this.current = t),
                        (this.previousValue = t),
                        (this.isActive = !1);
                    }
                },
                AnimInfo: i(221),
                Progress: function() {
                    (this.local = 0), (this.localUnclamped = 0), (this.lastPosition = 0);
                },
                ViewableRange: function(t, e) {
                    (this.a = t.top - e),
                    this.a < 0 && (this.a = t.top),
                        (this.b = t.top),
                        (this.d = t.bottom),
                        (this.c = Math.max(this.d - e, this.b));
                },
                pageMetrics: new(function() {
                    (this.scrollX = 0),
                    (this.scrollY = 0),
                    (this.windowWidth = 0),
                    (this.windowHeight = 0),
                    (this.documentOffsetX = 0),
                    (this.documentOffsetY = 0),
                    (this.previousBreakpoint = ""),
                    (this.breakpoint = "");
                })(),
                EventObject: function(t) {
                    (this.controller = t),
                    (this.element = this.controller.element),
                    (this.keyframe = null),
                    (this.event = ""),
                    (this.tweenProps = this.controller.tweenProps);
                },
                KeyframeComparison: function(t, e) {
                    return t.start < e.start ? -1 : t.start > e.start ? 1 : 0;
                },
            };
            t.exports = s;
        },
        function(t, e, i) {
            "use strict";
            Object.defineProperty(e, "__esModule", { value: !0 }), (e.default = void 0);
            e.default = {
                MOUNTED: "MOUNTED",
                MEDIA_LOAD_START: "MEDIA_LOAD_START",
                MEDIA_LOAD_COMPLETE: "MEDIA_LOAD_COMPLETE",
                MEDIA_LOAD_ERROR: "MEDIA_LOAD_ERROR",
                PLAYBACK_STATE_CHANGE: "PLAYBACK_STATE_CHANGE",
                LOADING_STATE_CHANGE: "LOADING_STATE_CHANGE",
            };
        },
        function(t, e, i) {
            "use strict";
            var s,
                r = i(4).EventEmitterMicro,
                n = i(119),
                o = i(122);

            function a(t) {
                (t = t || {}),
                r.call(this),
                    (this.id = o.getNewID()),
                    (this.executor = t.executor || n),
                    this._reset(),
                    (this._willRun = !1),
                    (this._didDestroy = !1);
            }
            ((s = a.prototype = Object.create(r.prototype)).run = function() {
                return this._willRun || (this._willRun = !0), this._subscribe();
            }),
            (s.cancel = function() {
                this._unsubscribe(),
                    this._willRun && (this._willRun = !1),
                    this._reset();
            }),
            (s.destroy = function() {
                var t = this.willRun();
                return (
                    this.cancel(),
                    (this.executor = null),
                    r.prototype.destroy.call(this),
                    (this._didDestroy = !0),
                    t
                );
            }),
            (s.willRun = function() {
                return this._willRun;
            }),
            (s.isRunning = function() {
                return this._isRunning;
            }),
            (s._subscribe = function() {
                return this.executor.subscribe(this);
            }),
            (s._unsubscribe = function() {
                return this.executor.unsubscribe(this);
            }),
            (s._onAnimationFrameStart = function(t) {
                (this._isRunning = !0),
                (this._willRun = !1),
                this._didEmitFrameData ||
                    ((this._didEmitFrameData = !0), this.trigger("start", t));
            }),
            (s._onAnimationFrameEnd = function(t) {
                this._willRun || (this.trigger("stop", t), this._reset());
            }),
            (s._reset = function() {
                (this._didEmitFrameData = !1), (this._isRunning = !1);
            }),
            (t.exports = a);
        },
        function(t, e, i) {
            "use strict";
            const s = i(191),
                r = "[ @marcom/pricing ]",
                n = Object.keys(s);
            let o = !1;
            for (var a = 0, h = n.length; a < h; a++) {
                const e = n[a],
                    i = "function" == typeof s[e] ? s[e] : null;
                i &&
                    (t.exports[e] = function() {
                        const t = Array.prototype.slice.call(arguments);
                        o || "string" != typeof t[0] || (t[0] = `${r} ${t[0]}`),
                            ("group" !== e && "groupCollapsed" !== e) || (o = !0),
                            "groupEnd" === e && (o = !1),
                            i.apply(s, t);
                    });
            }
            t.exports.enabled = s.enabled;
        },
        function(t, e, i) {
            "use strict";
            t.exports = class {
                constructor(t, e, i, s, r = !1, n) {
                    (this.epsilon = parseFloat(e)),
                    (this.snapAtCreation = i),
                    (this.initialValue = t),
                    (this.target = t),
                    (this.current = t),
                    (this.previousValue = t),
                    (this.isActive = !1),
                    (this.key = s),
                    (this.round = r),
                    (this.suffix = n);
                }
                update(t, e, i) {
                    (this.target = t[0] + e * (t[1] - t[0])),
                    (this.previousValue = this.current),
                    (this.current += (this.target - this.current) * i);
                    let s = this.delta(this.current, this.target);
                    return (
                        s < this.epsilon && ((this.current = this.target), (s = 0)),
                        s > this.epsilon || (0 === s && this.previousValue !== this.current)
                    );
                }
                reconcile(t, e) {
                    return (this.initialValue = t[0]), this.update(t, e, 1);
                }
                needsUpdate() {
                    return this.delta(this.current, this.target) > this.epsilon;
                }
                delta(t, e) {
                    return Math.abs(t - e);
                }
                calculateEpsilon(t, e) {
                    if (t.epsilon) return void(this.epsilon = t.epsilon);
                    let i = this.delta(e[0], e[1]),
                        s = Math.min(0.001 * i, this.epsilon, 0.05);
                    this.epsilon = Math.max(s, 0.001);
                }
                set(t) {
                    let e = this.current;
                    this.round && (e = Math.round(e)),
                        this.suffix && (e += this.suffix),
                        (t[this.key] = e);
                }
            };
        },
        function(t, e, i) {
            "use strict";
            const s = i(3),
                r = i(13),
                n = i(33),
                o = i(7),
                a = i(106),
                h = i(107),
                l = i(108),
                c = i(34),
                u = i(109),
                d = i(45),
                p = i(46),
                { cssAttributes: m } = i(47);
            class f {
                constructor(t, e) {
                    (this.controller = t),
                    (this.anchors = []),
                    (this.jsonProps = e),
                    (this.ease = t.group.defaultEase),
                    (this.easeFunction = a.linear),
                    (this.start = 0),
                    (this.end = 0),
                    (this.localT = 0),
                    (this.curvedT = 0),
                    (this.id = 0),
                    (this.event = ""),
                    (this.needsEventDispatch = !1),
                    (this.snapAtCreation = !1),
                    (this.isEnabled = !1),
                    (this.animValues = {}),
                    (this.breakpointMask = s.KeyframeDefaults.breakpointMask),
                    (this.disabledWhen = []),
                    (this.keyframeType = s.KeyframeTypes.Interpolation),
                    (this.hold = !1),
                    (this.preserveState = !1),
                    (this.markedForRemoval = !1);
                    let i = !1;
                    Object.defineProperty(this, "hidden", {
                            get: () => i,
                            set(e) {
                                (i = e), (t.group.keyframesDirty = !0);
                            },
                        }),
                        (this.uuid = p()),
                        (this.destroyed = !1);
                }
                destroy() {
                    (this.destroyed = !0),
                    (this.controller = null),
                    (this.disabledWhen = null),
                    (this.anchors = null),
                    (this.jsonProps = null),
                    (this.easeFunction = null),
                    (this.animValues = null);
                }
                remove() {
                    return this.controller.removeKeyframe(this);
                }
                parseOptions(t) {
                    (this.jsonProps = t),
                    t.relativeTo &&
                        console.error(
                            `KeyframeError: relativeTo has been removed. Use 'anchors' property instead. Found 'relativeTo':"${t.relativeTo}"`
                        ),
                        void 0 === t.end && void 0 === t.duration && (t.end = t.start),
                        "" !== t.anchors && t.anchors ?
                        ((this.anchors = []),
                            (t.anchors = Array.isArray(t.anchors) ? t.anchors : [t.anchors]),
                            t.anchors.forEach((e, i) => {
                                let s = u(e, this.controller.group.element);
                                if (!s) {
                                    let s = "";
                                    return (
                                        "string" == typeof e &&
                                        (s =
                                            " Provided value was a string, so a failed attempt was made to find anchor with the provided querystring in group.element, or in the document."),
                                        void console.warn(
                                            "Keyframe on",
                                            this.controller.element,
                                            ` failed to find anchor at index ${i} in array`,
                                            t.anchors,
                                            `. Anchors must be JS Object references, Elements references, or valid query selector strings. ${s}`
                                        )
                                    );
                                }
                                this.anchors.push(s), this.controller.group.metrics.add(s);
                            })) :
                        ((this.anchors = []), (t.anchors = [])),
                        t.ease ? (this.ease = parseFloat(t.ease)) : (t.ease = this.ease),
                        t.hasOwnProperty("snapAtCreation") ?
                        (this.snapAtCreation = t.snapAtCreation) :
                        (t.snapAtCreation = this.snapAtCreation),
                        t.easeFunction ||
                        (t.easeFunction = s.KeyframeDefaults.easeFunctionString),
                        t.breakpointMask ?
                        (this.breakpointMask = t.breakpointMask) :
                        (t.breakpointMask = this.breakpointMask),
                        t.disabledWhen ?
                        (this.disabledWhen = Array.isArray(t.disabledWhen) ?
                            t.disabledWhen : [t.disabledWhen]) :
                        (t.disabledWhen = this.disabledWhen),
                        t.hasOwnProperty("hold") ?
                        (this.hold = t.hold) :
                        (t.hold = this.hold),
                        t.hasOwnProperty("preserveState") ?
                        (this.preserveState = t.preserveState) :
                        (t.preserveState = s.KeyframeDefaults.preserveState),
                        (this.easeFunction = a[t.easeFunction]),
                        a.hasOwnProperty(t.easeFunction) ||
                        (t.easeFunction.includes("bezier") ?
                            (this.easeFunction = h.fromCSSString(t.easeFunction)) :
                            t.easeFunction.includes("spring") ?
                            (this.easeFunction = l.fromCSSString(t.easeFunction)) :
                            console.error(
                                "Keyframe parseOptions cannot find 'easeFunction' named '" +
                                t.easeFunction +
                                "'"
                            ));
                    for (let e in t) {
                        if (-1 !== s.KeyframeJSONReservedWords.indexOf(e)) continue;
                        let i = t[e];
                        if (Array.isArray(i)) {
                            if (
                                (1 === i.length && ((i[1] = i[0]), (i[0] = null)),
                                    void 0 === this.controller.tweenProps[e] ||
                                    !this.controller._ownerIsElement)
                            ) {
                                let o = 0;
                                this.controller._ownerIsElement ||
                                    (o = this.controller.element[e] || 0);
                                const a = e.startsWith("--");
                                let h =
                                    i[2] ||
                                    (a || [
                                            "opacity",
                                            "z-index",
                                            "font-weight",
                                            "zIndex",
                                            "fontWeight",
                                        ].includes(e) ?
                                        void 0 :
                                        "px"),
                                    l = this.controller.group.anim.plugins.keyframe.reduce(
                                        (i, s) => i || s.parseProp.call(this, t, e),
                                        null
                                    );
                                if (!l &&
                                    this.controller._ownerIsElement &&
                                    (a || m.includes(e))
                                ) {
                                    let i = d(e),
                                        r = t.round || ["zIndex"].includes(i);
                                    (o = parseFloat(
                                        this.controller.getTargetComputedStyle().getPropertyValue(i)
                                    )),
                                    isNaN(o) && (o = 0),
                                        (l = new n(
                                            o,
                                            s.KeyframeDefaults.epsilon,
                                            this.snapAtCreation,
                                            e,
                                            r,
                                            h
                                        )),
                                        this.controller.cssAttributes.push(l);
                                }
                                l ||
                                    (l = new r(
                                        o,
                                        s.KeyframeDefaults.epsilon,
                                        this.snapAtCreation,
                                        e,
                                        t.round,
                                        h
                                    )),
                                    (this.controller.tweenProps[e] = l);
                            }
                            (this.animValues[e] =
                                this.controller.group.expressionParser.parseArray(this, i)),
                            this.controller.tweenProps[e].calculateEpsilon(
                                t,
                                this.animValues[e]
                            );
                        }
                    }
                    (this.keyframeType = this.hold ?
                        s.KeyframeTypes.InterpolationForward :
                        s.KeyframeTypes.Interpolation),
                    t.event && (this.event = t.event);
                }
                overwriteProps(t) {
                    this.animValues = {};
                    let e = Object.assign({}, this.jsonProps, t);
                    this.controller.updateKeyframe(this, e);
                }
                updateLocalProgress(t) {
                    if (this.start === this.end || t < this.start || t > this.end)
                        return (
                            (this.localT =
                                t < this.start ?
                                this.hold ?
                                this.localT :
                                0 :
                                t > this.end ?
                                1 :
                                0),
                            void(this.curvedT = this.easeFunction(this.localT))
                        );
                    const e = (t - this.start) / (this.end - this.start),
                        i = this.hold ? this.localT : 0;
                    (this.localT = o.clamp(e, i, 1)),
                    (this.curvedT = this.easeFunction(this.localT));
                }
                reconcile(t) {
                    this.controller.tweenProps[t].reconcile(
                            this.animValues[t],
                            this.curvedT
                        ) &&
                        (this.needsEventDispatch ||
                            ((this.needsEventDispatch = !0),
                                this.controller.keyframesRequiringDispatch.push(this)));
                }
                reset(t) {
                    this.localT = t || 0;
                    let e = this.ease;
                    this.ease = 1;
                    for (let t in this.animValues) this.reconcile(t);
                    this.ease = e;
                }
                onDOMRead(t) {
                    let e = this.controller.tweenProps[t].update(
                        this.animValues[t],
                        this.curvedT,
                        this.ease
                    );
                    return (
                        "" === this.event ||
                        this.needsEventDispatch ||
                        (e &&
                            ((this.needsEventDispatch = !0),
                                this.controller.keyframesRequiringDispatch.push(this))),
                        e
                    );
                }
                isInRange(t) {
                    return t >= this.start && t <= this.end;
                }
                setEnabled(t) {
                    t = t || c(Array.from(document.documentElement.classList));
                    let e = -1 !== this.breakpointMask.indexOf(s.pageMetrics.breakpoint),
                        i = !1;
                    return (
                        this.disabledWhen.length > 0 &&
                        (i = this.disabledWhen.some((e) => void 0 !== t[e])),
                        (this.isEnabled = e && !i),
                        this.isEnabled
                    );
                }
                evaluateConstraints() {
                    (this.start = this.controller.group.expressionParser.parseTimeValue(
                        this,
                        this.jsonProps.start
                    )),
                    (this.end = this.controller.group.expressionParser.parseTimeValue(
                        this,
                        this.jsonProps.end
                    )),
                    this.evaluateInterpolationConstraints();
                }
                evaluateInterpolationConstraints() {
                    for (let t in this.animValues) {
                        let e = this.jsonProps[t];
                        this.animValues[t] =
                            this.controller.group.expressionParser.parseArray(this, e);
                    }
                }
            }
            (f.DATA_ATTRIBUTE = "data-anim-tween"), (t.exports = f);
        },
        function(t, e, i) {
            "use strict";
            var s = i(117),
                r = function() {
                    this.events = {};
                },
                n = r.prototype;
            (n.requestAnimationFrame = function(t) {
                return (
                    this.events[t] || (this.events[t] = new s(t)),
                    this.events[t].requestAnimationFrame
                );
            }),
            (n.cancelAnimationFrame = function(t) {
                return (
                    this.events[t] || (this.events[t] = new s(t)),
                    this.events[t].cancelAnimationFrame
                );
            }),
            (t.exports = new r());
        },
        function(t, e, i) {
            "use strict";
            const s = i(9),
                r = i(7),
                n = i(65),
                o = i(85),
                a = i(222),
                h = i(41),
                l = i(223),
                c = i(86);
            class u {
                constructor(t, e) {
                    (this.controller = t),
                    (this.anchors = []),
                    (this.jsonProps = e),
                    (this.ease = t.group.defaultEase),
                    (this.easeFunctionString = s.KeyframeDefaults.easeFunctionString),
                    (this.easeFunction = n[this.easeFunctionString]),
                    (this.start = 0),
                    (this.end = 0),
                    (this.localT = 0),
                    (this.curvedT = 0),
                    (this.id = 0),
                    (this.event = ""),
                    (this.needsEventDispatch = !1),
                    (this.snapAtCreation = !1),
                    (this.isEnabled = !1),
                    (this.animValues = {}),
                    (this.breakpointMask = "SMLX"),
                    (this.disabledWhen = []),
                    (this.keyframeType = s.KeyframeTypes.Interpolation),
                    (this.hold = !1),
                    (this.preserveState = !1),
                    (this.markedForRemoval = !1),
                    (this.hidden = !1),
                    (this.uuid = c());
                }
                destroy() {
                    (this.controller = null),
                    (this.disabledWhen = null),
                    (this.anchors = null),
                    (this.jsonProps = null),
                    (this.easeFunction = null),
                    (this.animValues = null);
                }
                remove() {
                    return this.controller.removeKeyframe(this);
                }
                parseOptions(t) {
                    (this.jsonProps = t),
                    t.relativeTo &&
                        console.error(
                            `KeyframeError: relativeTo has been removed. Use 'anchors' property instead. Found 'relativeTo':"${t.relativeTo}"`
                        ),
                        "" !== t.anchors && t.anchors ?
                        ((this.anchors = []),
                            (t.anchors = Array.isArray(t.anchors) ? t.anchors : [t.anchors]),
                            t.anchors.forEach((e, i) => {
                                let s = l(e, this.controller.group.element);
                                if (!s) {
                                    let s = "";
                                    return (
                                        "string" == typeof e &&
                                        (s =
                                            " Provided value was a string, so a failed attempt was made to find anchor with the provided querystring in group.element, or in the document."),
                                        void console.warn(
                                            "Keyframe on",
                                            this.controller.element,
                                            ` failed to find anchor at index ${i} in array`,
                                            t.anchors,
                                            `. Anchors must be JS Object references, Elements references, or valid query selector strings. ${s}`
                                        )
                                    );
                                }
                                this.anchors.push(s), this.controller.group.metrics.add(s);
                            })) :
                        ((this.anchors = []), (t.anchors = [])),
                        t.ease ? (this.ease = parseFloat(t.ease)) : (t.ease = this.ease),
                        t.hasOwnProperty("snapAtCreation") ?
                        (this.snapAtCreation = t.snapAtCreation) :
                        (t.snapAtCreation = this.snapAtCreation),
                        t.easeFunction ?
                        (this.easeFunctionString = t.easeFunction) :
                        (t.easeFunction = this.easeFunctionString),
                        t.breakpointMask ?
                        (this.breakpointMask = t.breakpointMask) :
                        (t.breakpointMask = this.breakpointMask),
                        t.disabledWhen ?
                        (this.disabledWhen = Array.isArray(t.disabledWhen) ?
                            t.disabledWhen : [t.disabledWhen]) :
                        (t.disabledWhen = this.disabledWhen),
                        t.hasOwnProperty("hold") ?
                        (this.hold = t.hold) :
                        (t.hold = this.hold),
                        t.hasOwnProperty("preserveState") ?
                        (this.preserveState = t.preserveState) :
                        (t.preserveState = this.preserveState),
                        (this.easeFunction = n[t.easeFunction]),
                        n.hasOwnProperty(t.easeFunction) ||
                        (t.easeFunction.includes("bezier") ?
                            (this.easeFunction = o.fromCSSString(t.easeFunction)) :
                            t.easeFunction.includes("spring") ?
                            (this.easeFunction = a.fromCSSString(t.easeFunction)) :
                            console.error(
                                "Keyframe parseOptions cannot find 'easeFunction' named '" +
                                t.easeFunction +
                                "'"
                            ));
                    for (let e in t) {
                        if (-1 !== s.KeyframeJSONReservedWords.indexOf(e)) continue;
                        let i = t[e];
                        if (!Array.isArray(i)) continue;
                        if (
                            ((this.animValues[e] =
                                    this.controller.group.expressionParser.parseArray(this, i)),
                                void 0 === this.controller.tweenProps[e] ||
                                !this.controller._ownerIsElement)
                        ) {
                            let t = 0;
                            this.controller._ownerIsElement ||
                                (t = this.controller.element[e] || 0);
                            let i = new s.TargetValue(
                                t,
                                s.KeyframeDefaults.epsilon,
                                this.snapAtCreation
                            );
                            this.controller.tweenProps[e] = i;
                        }
                        let r = this.controller.tweenProps[e];
                        if (t.epsilon) r.epsilon = t.epsilon;
                        else {
                            let t = Math.abs(this.animValues[e][0] - this.animValues[e][1]),
                                i = Math.min(0.001 * t, r.epsilon, s.KeyframeDefaults.epsilon);
                            r.epsilon = Math.max(i, 1e-4);
                        }
                    }
                    (this.keyframeType = this.hold ?
                        s.KeyframeTypes.InterpolationForward :
                        s.KeyframeTypes.Interpolation),
                    t.event && (this.event = t.event);
                }
                overwriteProps(t) {
                    this.animValues = {};
                    let e = Object.assign({}, this.jsonProps, t);
                    this.controller.updateKeyframe(this, e);
                }
                updateLocalProgress(t) {
                    if (this.start === this.end || t < this.start || t > this.end)
                        return (
                            (this.localT = t < this.start ? 0 : t > this.end ? 1 : 0),
                            void(this.curvedT = this.easeFunction(this.localT))
                        );
                    const e = (t - this.start) / (this.end - this.start),
                        i = this.hold ? this.localT : 0;
                    (this.localT = r.clamp(e, i, 1)),
                    (this.curvedT = this.easeFunction(this.localT));
                }
                reconcile(t) {
                    let e = this.animValues[t],
                        i = this.controller.tweenProps[t];
                    (i.initialValue = e[0]),
                    (i.target = e[0] + this.curvedT * (e[1] - e[0])),
                    i.current !== i.target &&
                        ((i.current = i.target),
                            this.needsEventDispatch ||
                            ((this.needsEventDispatch = !0),
                                this.controller.keyframesRequiringDispatch.push(this)));
                }
                reset(t) {
                    this.localT = t || 0;
                    var e = this.ease;
                    this.ease = 1;
                    for (let t in this.animValues) this.reconcile(t);
                    this.ease = e;
                }
                onDOMRead(t) {
                    let e = this.animValues[t],
                        i = this.controller.tweenProps[t];
                    i.target = e[0] + this.curvedT * (e[1] - e[0]);
                    let s = i.current;
                    i.current += (i.target - i.current) * this.ease;
                    let r = i.current - i.target;
                    r < i.epsilon && r > -i.epsilon && ((i.current = i.target), (r = 0)),
                        "" === this.event ||
                        this.needsEventDispatch ||
                        ((r > i.epsilon ||
                                r < -i.epsilon ||
                                (0 === r && s !== i.current)) &&
                            ((this.needsEventDispatch = !0),
                                this.controller.keyframesRequiringDispatch.push(this)));
                }
                isInRange(t) {
                    return t >= this.start && t <= this.end;
                }
                setEnabled(t) {
                    t = t || h(Array.from(document.documentElement.classList));
                    let e = -1 !== this.breakpointMask.indexOf(s.pageMetrics.breakpoint),
                        i = !1;
                    return (
                        this.disabledWhen.length > 0 &&
                        (i = this.disabledWhen.some((e) => void 0 !== t[e])),
                        (this.isEnabled = e && !i),
                        this.isEnabled
                    );
                }
                evaluateConstraints() {
                    (this.start = this.controller.group.expressionParser.parseTimeValue(
                        this,
                        this.jsonProps.start
                    )),
                    (this.end = this.controller.group.expressionParser.parseTimeValue(
                        this,
                        this.jsonProps.end
                    )),
                    this.evaluateInterpolationConstraints();
                }
                evaluateInterpolationConstraints() {
                    for (let t in this.animValues) {
                        let e = this.jsonProps[t];
                        this.animValues[t] =
                            this.controller.group.expressionParser.parseArray(this, e);
                    }
                }
            }
            (u.DATA_ATTRIBUTE = "data-anim-tween"), (t.exports = u);
        },
        function(t, e, i) {
            "use strict";
            var s = {
                ua: window.navigator.userAgent,
                platform: window.navigator.platform,
                vendor: window.navigator.vendor,
            };
            t.exports = i(30)(s);
        },
        function(t, e, i) {
            "use strict";

            function s() {
                this._events = {};
            }
            var r = s.prototype;
            (r.on = function(t, e) {
                (this._events[t] = this._events[t] || []), this._events[t].unshift(e);
            }),
            (r.once = function(t, e) {
                var i = this;
                this.on(t, function s(r) {
                    i.off(t, s), void 0 !== r ? e(r) : e();
                });
            }),
            (r.off = function(t, e) {
                if (this.has(t)) {
                    if (1 === arguments.length)
                        return (this._events[t] = null), void delete this._events[t];
                    var i = this._events[t].indexOf(e); -
                    1 !== i && this._events[t].splice(i, 1);
                }
            }),
            (r.trigger = function(t, e) {
                if (this.has(t))
                    for (var i = this._events[t].length - 1; i >= 0; i--)
                        void 0 !== e ? this._events[t][i](e) : this._events[t][i]();
            }),
            (r.has = function(t) {
                return t in this._events != !1 && 0 !== this._events[t].length;
            }),
            (r.destroy = function() {
                for (var t in this._events) this._events[t] = null;
                this._events = null;
            }),
            (t.exports = s);
        },
        function(t, e, i) {
            "use strict";
            t.exports = { SharedInstance: i(120) };
        },
        function(t, e, i) {
            "use strict";
            var s = i(15);
            t.exports = s.requestAnimationFrame("external");
        },
        function(t, e, i) {
            "use strict";
            const s = i(4).EventEmitterMicro,
                r = i(3),
                n = { create: i(11), update: i(8), draw: i(5) },
                o = () => {};
            let a = 0;
            t.exports = class extends s {
                constructor(t) {
                    super(),
                        (this.el = t.el),
                        (this.gum = t.gum),
                        (this.componentName = t.componentName),
                        (this._keyframeController = null);
                }
                destroy() {
                    (this.el = null),
                    (this.gum = null),
                    (this._keyframeController = null),
                    super.destroy();
                }
                addKeyframe(t) {
                    const e = t.el || this.el;
                    return (t.group || this.anim).addKeyframe(e, t);
                }
                addDiscreteEvent(t) {
                    t.event = t.event || "Generic-Event-Name-" + a++;
                    let e = void 0 !== t.end && t.end !== t.start;
                    const i = this.addKeyframe(t);
                    return (
                        e ?
                        (t.onEnterOnce &&
                            i.controller.once(t.event + ":enter", t.onEnterOnce),
                            t.onExitOnce &&
                            i.controller.once(t.event + ":exit", t.onExitOnce),
                            t.onEnter && i.controller.on(t.event + ":enter", t.onEnter),
                            t.onExit && i.controller.on(t.event + ":exit", t.onExit)) :
                        (t.onEventOnce && i.controller.once(t.event, t.onEventOnce),
                            t.onEventReverseOnce &&
                            i.controller.once(t.event + ":reverse", t.onEventReverseOnce),
                            t.onEvent && i.controller.on(t.event, t.onEvent),
                            t.onEventReverse &&
                            i.controller.on(t.event + ":reverse", t.onEventReverse)),
                        i
                    );
                }
                addRAFLoop(t) {
                    let e = ["start", "end"];
                    if (!e.every((e) => t.hasOwnProperty(e)))
                        return void console.log(
                            "BubbleGum.BaseComponent::addRAFLoop required options are missing: " +
                            e.join(" ")
                        );
                    const i = new n.create();
                    i.on("update", t.onUpdate || o),
                        i.on("draw", t.onDraw || o),
                        i.on("draw", () => i.run());
                    const { onEnter: s, onExit: r } = t;
                    return (
                        (t.onEnter = () => {
                            i.run(), s && s();
                        }),
                        (t.onExit = () => {
                            i.cancel(), r && r();
                        }),
                        this.addDiscreteEvent(t)
                    );
                }
                addContinuousEvent(t) {
                    t.onDraw ||
                        console.log(
                            "BubbleGum.BaseComponent::addContinuousEvent required option `onDraw` is missing. Consider using a regular keyframe if you do not need a callback"
                        ),
                        (t.event = t.event || "Generic-Event-Name-" + a++);
                    let e = this.addKeyframe(t);
                    return e.controller.on(t.event, t.onDraw), e;
                }
                mounted() {}
                onResizeImmediate(t) {}
                onResizeDebounced(t) {}
                onBreakpointChange(t) {}
                get anim() {
                    return this.gum.anim;
                }
                get keyframeController() {
                    return (
                        this._keyframeController ||
                        (this._keyframeController = this.anim.getControllerForTarget(this.el))
                    );
                }
                get pageMetrics() {
                    return r.pageMetrics;
                }
            };
        },
        function(t, e, i) {
            "use strict";
            Object.defineProperty(e, "__esModule", { value: !0 }), (e.default = void 0);
            e.default = {
                EMPTY: "loading-empty",
                LOADING: "loading",
                LOADED: "loaded",
                ERROR: "loading-error",
                DISABLED: "loading-disabled",
            };
        },
        function(t, e, i) {
            "use strict";
            t.exports = i(0)("warn");
        },
        function(t, e, i) {
            "use strict";
            Object.defineProperty(e, "__esModule", { value: !0 }), (e.default = void 0);
            e.default = {
                IDLE: "idle",
                PLAYING: "playing",
                PAUSED: "paused",
                ENDED: "ended",
            };
        },
        function(t, e, i) {
            "use strict";
            const s = i(8);
            t.exports = function(t) {
                return new Promise(function(e) {
                    "undefined" != typeof window && window.document ?
                        s(function() {
                            let i = {};
                            const s = document.querySelector(`link[rel="ac:${t}-endpoint"]`);
                            s && (i.endpoint = (s.getAttribute("href") || "").trim());
                            document
                                .querySelectorAll(`meta[name="ac:${t}-alias"]`)
                                .forEach((t) => {
                                    const [e, s] = (t.getAttribute("content") || "").split("=");
                                    e && s && ((i.aliases = i.aliases || {}), (i.aliases[e] = s));
                                });
                            const r = document.querySelector('meta[name="ac:pricing-dummy"]');
                            r &&
                                (i.dummyPrices =
                                    "true" === (r.getAttribute("content") || "").trim()),
                                e(i);
                        }) :
                        e({});
                });
            };
        },
        function(t, e, i) {
            "use strict";
            t.exports = class {
                constructor(t = null, e = {}) {
                    (this.error = t), (this.products = e);
                }
            };
        },
        function(t, e, i) {
            "use strict";
            const s = i(28),
                r = i(29);
            t.exports = { PictureLazyLoading: s, PictureHead: r };
        },
        function(t, e, i) {
            "use strict";
            const s = i(2).PICTURE_DATA_LAZY,
                r = i(2).PICTURE_DATA_EMPTY_SOURCE,
                n = i(2).PICTURE_DATA_DOWNLOAD_AREA_KEYFRAME;
            t.exports = class {
                constructor(t = {}) {
                    (this.options = t), this._init();
                }
                _init() {
                    (this._pictures = Array.from(document.querySelectorAll(`*[${s}]`))),
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
                            const i = t.querySelector("img"),
                                s = e.textContent.match(/<source .+ \/>/g);
                            s && i.insertAdjacentHTML("beforebegin", s.join(""));
                        }
                    });
                }
                _defineKeyframeOptions(t) {
                    const e = t.getAttribute(n) || "{}";
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
        function(t, e, i) {
            "use strict";
            const s = i(2).PICTURE_CLASS_LOADED,
                r = i(2).PICTURE_DATA_LOADED,
                n = i(2).PICTURE_DATA_EMPTY_SOURCE;
            t.exports =
                ((window.__pictureElementInstancesLoaded = new Map()),
                    void(window.__lp = function(t) {
                        const e = t.target.parentElement;
                        e.querySelector(`[${n}]`) ?
                            t.stopImmediatePropagation() :
                            (e.classList.add(`${s}`),
                                e.setAttribute(`${r}`, ""),
                                window.__pictureElementInstancesLoaded.set(e.id, e),
                                (t.target.onload = null));
                    }));
        },
        function(t, e, i) {
            "use strict";
            var s = i(31),
                r = i(32);

            function n(t, e) {
                if ("function" == typeof t.parseVersion) return t.parseVersion(e);
                var i,
                    s = t.version || t.userAgent;
                "string" == typeof s && (s = [s]);
                for (var r, n = s.length, o = 0; o < n; o++)
                    if (
                        (r = e.match(
                            ((i = s[o]), new RegExp(i + "[a-zA-Z\\s/:]+([0-9_.]+)", "i"))
                        )) &&
                        r.length > 1
                    )
                        return r[1].replace(/_/g, ".");
                return !1;
            }

            function o(t, e, i) {
                for (var s, r, o = t.length, a = 0; a < o; a++)
                    if (
                        ("function" == typeof t[a].test ?
                            !0 === t[a].test(i) && (s = t[a].name) :
                            i.ua.indexOf(t[a].userAgent) > -1 && (s = t[a].name),
                            s)
                    ) {
                        if (((e[s] = !0), "string" == typeof(r = n(t[a], i.ua)))) {
                            var h = r.split(".");
                            (e.version.string = r),
                            h &&
                                h.length > 0 &&
                                ((e.version.major = parseInt(h[0] || 0)),
                                    (e.version.minor = parseInt(h[1] || 0)),
                                    (e.version.patch = parseInt(h[2] || 0)));
                        } else
                            "edge" === s &&
                            ((e.version.string = "12.0.0"),
                                (e.version.major = "12"),
                                (e.version.minor = "0"),
                                (e.version.patch = "0"));
                        return (
                            "function" == typeof t[a].parseDocumentMode &&
                            (e.version.documentMode = t[a].parseDocumentMode()),
                            e
                        );
                    }
                return e;
            }
            t.exports = function(t) {
                var e = {};
                return (
                    (e.browser = o(r.browser, s.browser, t)), (e.os = o(r.os, s.os, t)), e
                );
            };
        },
        function(t, e, i) {
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
        function(t, e, i) {
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
        function(t, e, i) {
            "use strict";
            const s = i(13),
                r = i(45);
            t.exports = class extends s {
                constructor(t, e, i, s, n = !1, o) {
                    super(t, e, i, (s = r(s)), n, o);
                }
                set(t) {
                    let e = this.current;
                    this.round && (e = Math.round(e)),
                        this.suffix && (e += this.suffix),
                        t.setProperty(this.key, e);
                }
            };
        },
        function(t, e, i) {
            "use strict";
            t.exports = function(t) {
                return t.reduce((t, e) => ((t[e] = e), t), {});
            };
        },
        function(t, e, i) {
            "use strict";
            const s = i(14),
                r = i(3),
                n = i(13);
            class o extends s {
                constructor(t, e) {
                    super(t, e),
                        (this.keyframeType = r.KeyframeTypes.CSSClass),
                        (this._triggerType = o.TRIGGER_TYPE_CSS_CLASS),
                        (this.cssClass = ""),
                        (this.friendlyName = ""),
                        (this.style = { on: null, off: null }),
                        (this.toggle = r.KeyframeDefaults.toggle),
                        (this.isApplied = !1);
                }
                parseOptions(t) {
                    if (!this.controller._ownerIsElement)
                        throw new TypeError("CSS Keyframes cannot be applied to JS Objects");
                    if (
                        ((t.x = void 0),
                            (t.y = void 0),
                            (t.z = void 0),
                            (t.scale = void 0),
                            (t.scaleX = void 0),
                            (t.scaleY = void 0),
                            (t.rotationX = void 0),
                            (t.rotationY = void 0),
                            (t.rotationZ = void 0),
                            (t.rotation = void 0),
                            (t.opacity = void 0),
                            (t.hold = void 0),
                            void 0 !== t.toggle && (this.toggle = t.toggle),
                            void 0 !== t.cssClass)
                    )
                        (this._triggerType = o.TRIGGER_TYPE_CSS_CLASS),
                        (this.cssClass = t.cssClass),
                        (this.friendlyName = "." + this.cssClass),
                        void 0 === this.controller.tweenProps.targetClasses &&
                        (this.controller.tweenProps.targetClasses = {
                            add: [],
                            remove: [],
                        });
                    else {
                        if (void 0 === t.style || !this.isValidStyleProperty(t.style))
                            throw new TypeError(
                                "KeyframeCSSClass no 'cssClass` property found. If using `style` property its also missing or invalid"
                            );
                        if (
                            ((this._triggerType = o.TRIGGER_TYPE_STYLE_PROPERTY),
                                (this.style = t.style),
                                (this.friendlyName = "style"),
                                (this.toggle = void 0 !== this.style.off || this.toggle),
                                this.toggle && void 0 === this.style.off)
                        ) {
                            this.style.off = {};
                            for (let t in this.style.on) this.style.off[t] = "";
                        }
                        void 0 === this.controller.tweenProps.targetStyles &&
                            (this.controller.tweenProps.targetStyles = {});
                    }
                    if (
                        (void 0 === t.end && (t.end = t.start),
                            (t.toggle = this.toggle),
                            this._triggerType === o.TRIGGER_TYPE_CSS_CLASS)
                    )
                        this.isApplied = this.controller.element.classList.contains(
                            this.cssClass
                        );
                    else {
                        let t = getComputedStyle(this.controller.element);
                        this.isApplied = !0;
                        for (let e in this.style.on)
                            if (t[e] !== this.style.on[e]) {
                                this.isApplied = !1;
                                break;
                            }
                    }
                    s.prototype.parseOptions.call(this, t),
                        (this.animValues[this.friendlyName] = [0, 0]),
                        void 0 === this.controller.tweenProps[this.friendlyName] &&
                        (this.controller.tweenProps[this.friendlyName] = new n(
                            0,
                            1, !1,
                            this.friendlyName
                        )),
                        (this.keyframeType = r.KeyframeTypes.CSSClass);
                }
                updateLocalProgress(t) {
                    (this.isApplied && !this.toggle) ||
                    (this.start !== this.end ?
                        !this.isApplied && t >= this.start && t <= this.end ?
                        this._apply() :
                        this.isApplied &&
                        this.toggle &&
                        (t < this.start || t > this.end) &&
                        this._unapply() :
                        !this.isApplied && t >= this.start ?
                        this._apply() :
                        this.isApplied &&
                        this.toggle &&
                        t < this.start &&
                        this._unapply());
                }
                _apply() {
                    if (this._triggerType === o.TRIGGER_TYPE_CSS_CLASS)
                        this.controller.tweenProps.targetClasses.add.push(this.cssClass),
                        (this.controller.needsClassUpdate = !0);
                    else {
                        for (let t in this.style.on)
                            this.controller.tweenProps.targetStyles[t] = this.style.on[t];
                        this.controller.needsStyleUpdate = !0;
                    }
                    this.isApplied = !0;
                }
                _unapply() {
                    if (this._triggerType === o.TRIGGER_TYPE_CSS_CLASS)
                        this.controller.tweenProps.targetClasses.remove.push(this.cssClass),
                        (this.controller.needsClassUpdate = !0);
                    else {
                        for (let t in this.style.off)
                            this.controller.tweenProps.targetStyles[t] = this.style.off[t];
                        this.controller.needsStyleUpdate = !0;
                    }
                    this.isApplied = !1;
                }
                isValidStyleProperty(t) {
                    if (!t.hasOwnProperty("on")) return !1;
                    if ("object" != typeof t.on)
                        throw new TypeError(
                            "KeyframeCSSClass `style` property should be in the form of: {on:{visibility:'hidden', otherProperty: 'value'}}"
                        );
                    if (this.toggle && t.hasOwnProperty("off") && "object" != typeof t.off)
                        throw new TypeError(
                            "KeyframeCSSClass `style` property should be in the form of: {on:{visibility:'hidden', otherProperty: 'value'}}"
                        );
                    return !0;
                }
                reconcile(t) {}
                onDOMRead(t) {}
                evaluateInterpolationConstraints() {}
            }
            (o.TRIGGER_TYPE_CSS_CLASS = 0),
            (o.TRIGGER_TYPE_STYLE_PROPERTY = 1),
            (o.DATA_ATTRIBUTE = "data-anim-classname"),
            (t.exports = o);
        },
        function(t, e, i) {
            "use strict";
            const s = i(4).EventEmitterMicro,
                r = i(7),
                n = i(34),
                o = i(3),
                a = i(49),
                h = i(110),
                l = i(111),
                c = i(50),
                u = i(112),
                d = i(114),
                p = {};
            "undefined" != typeof window &&
                ((p.create = i(11)), (p.update = i(8)), (p.draw = i(5)));
            let m = 0;
            t.exports = class extends s {
                constructor(t, e) {
                    super(),
                        (this.anim = e),
                        (this.element = t),
                        (this.name = this.name || t.getAttribute("data-anim-scroll-group")),
                        (this.isEnabled = !0),
                        (this.position = new h()),
                        (this.metrics = new c()),
                        this.metrics.add(this.element),
                        (this.expressionParser = new u(this)),
                        (this.boundsMin = 0),
                        (this.boundsMax = 0),
                        (this.timelineUpdateRequired = !1),
                        (this._keyframesDirty = !1),
                        (this.viewableRange = this.createViewableRange()),
                        (this.defaultEase = o.KeyframeDefaults.ease),
                        (this.keyframeControllers = []),
                        this.updateProgress(this.getPosition()),
                        (this.onDOMRead = this.onDOMRead.bind(this)),
                        (this.onDOMWrite = this.onDOMWrite.bind(this)),
                        (this.gui = null),
                        (this.computedStyleCache = {}),
                        this.finalizeInit();
                }
                finalizeInit() {
                    (this.element._animInfo = new a(this, null, !0)),
                    this.setupRAFEmitter();
                }
                destroy() {
                    (this.destroyed = !0),
                    this.expressionParser.destroy(),
                        (this.expressionParser = null);
                    for (let t = 0, e = this.keyframeControllers.length; t < e; t++)
                        this.keyframeControllers[t].destroy();
                    (this.keyframeControllers = null),
                    (this.position = null),
                    (this.viewableRange = null),
                    this.gui && (this.gui.destroy(), (this.gui = null)),
                        this.metrics.destroy(),
                        (this.metrics = null),
                        this.rafEmitter.destroy(),
                        (this.rafEmitter = null),
                        (this.anim = null),
                        this.element._animInfo &&
                        this.element._animInfo.group === this &&
                        ((this.element._animInfo.group = null),
                            (this.element._animInfo = null)),
                        (this.element = null),
                        (this.isEnabled = !1),
                        super.destroy();
                }
                removeKeyframeController(t) {
                    return this.keyframeControllers.includes(t) ?
                        (t._allKeyframes.forEach((t) => (t.markedForRemoval = !0)),
                            (this.keyframesDirty = !0),
                            new Promise((e) => {
                                p.draw(() => {
                                    const i = this.keyframeControllers.indexOf(t); -
                                    1 !== i ?
                                        (this.keyframeControllers.splice(i, 1),
                                            t.onDOMWrite(),
                                            t.destroy(),
                                            this.gui && this.gui.create(),
                                            e()) :
                                        e();
                                });
                            })) :
                        Promise.resolve();
                }
                remove() {
                    return this.anim.removeGroup(this);
                }
                clear() {
                    return Promise.all(
                        this.keyframeControllers.map((t) => this.removeKeyframeController(t))
                    );
                }
                setupRAFEmitter(t) {
                    this.rafEmitter && this.rafEmitter.destroy(),
                        (this.rafEmitter = t || new p.create()),
                        this.rafEmitter.on("update", this.onDOMRead),
                        this.rafEmitter.on("draw", this.onDOMWrite),
                        this.rafEmitter.once("external", () => this.reconcile());
                }
                requestDOMChange() {
                    return !!this.isEnabled && this.rafEmitter.run();
                }
                onDOMRead() {
                    this.keyframesDirty && this.onKeyframesDirty();
                    for (let t = 0, e = this.keyframeControllers.length; t < e; t++)
                        this.keyframeControllers[t].onDOMRead(this.position.local);
                }
                onDOMWrite() {
                    for (let t = 0, e = this.keyframeControllers.length; t < e; t++)
                        this.keyframeControllers[t].onDOMWrite();
                    this.needsUpdate() && this.requestDOMChange(),
                        (this.computedStyleCache = {});
                }
                needsUpdate() {
                    if (this._keyframesDirty) return !0;
                    for (let t = 0, e = this.keyframeControllers.length; t < e; t++)
                        if (this.keyframeControllers[t].needsUpdate()) return !0;
                    return !1;
                }
                addKeyframe(t, e) {
                    let i = this.getControllerForTarget(t);
                    return (
                        null === i &&
                        ((i = new d(this, t)), this.keyframeControllers.push(i)),
                        (this.keyframesDirty = !0),
                        i.addKeyframe(e)
                    );
                }
                addEvent(t, e) {
                    e.event = e.event || "Generic-Event-Name-" + m++;
                    let i = void 0 !== e.end && e.end !== e.start;
                    const s = this.addKeyframe(t, e);
                    return (
                        i ?
                        (e.onEnterOnce &&
                            s.controller.once(e.event + ":enter", e.onEnterOnce),
                            e.onExitOnce &&
                            s.controller.once(e.event + ":exit", e.onExitOnce),
                            e.onEnter && s.controller.on(e.event + ":enter", e.onEnter),
                            e.onExit && s.controller.on(e.event + ":exit", e.onExit)) :
                        (e.onEventOnce && s.controller.once(e.event, e.onEventOnce),
                            e.onEventReverseOnce &&
                            s.controller.once(e.event + ":reverse", e.onEventReverseOnce),
                            e.onEvent && s.controller.on(e.event, e.onEvent),
                            e.onEventReverse &&
                            s.controller.on(e.event + ":reverse", e.onEventReverse)),
                        s
                    );
                }
                forceUpdate({ waitForNextUpdate: t = !0, silent: e = !1 } = {}) {
                    this.isEnabled &&
                        (this.refreshMetrics(),
                            (this.timelineUpdateRequired = !0),
                            t ?
                            (this.keyframesDirty = !0) :
                            this.onKeyframesDirty({ silent: e }));
                }
                onKeyframesDirty({ silent: t = !1 } = {}) {
                    this.determineActiveKeyframes(),
                        (this.keyframesDirty = !1),
                        this.metrics.refreshMetrics(this.element),
                        (this.viewableRange = this.createViewableRange());
                    for (let t = 0, e = this.keyframeControllers.length; t < e; t++)
                        this.keyframeControllers[t].updateAnimationConstraints();
                    this.updateBounds(),
                        this.updateProgress(this.getPosition()),
                        t || this.updateTimeline(),
                        this.gui && this.gui.create();
                }
                refreshMetrics() {
                    let t = new Set([this.element]);
                    this.keyframeControllers.forEach((e) => {
                            t.add(e.element),
                                e._allKeyframes.forEach((e) => e.anchors.forEach((e) => t.add(e)));
                        }),
                        this.metrics.refreshCollection(t),
                        (this.viewableRange = this.createViewableRange());
                }
                reconcile() {
                    for (let t = 0, e = this.keyframeControllers.length; t < e; t++)
                        this.keyframeControllers[t].reconcile();
                }
                determineActiveKeyframes(t) {
                    t = t || n(Array.from(document.documentElement.classList));
                    for (let e = 0, i = this.keyframeControllers.length; e < i; e++)
                        this.keyframeControllers[e].determineActiveKeyframes(t);
                }
                updateBounds() {
                    if (0 === this.keyframeControllers.length)
                        return (this.boundsMin = 0), void(this.boundsMax = 0);
                    let t = {
                        min: Number.POSITIVE_INFINITY,
                        max: Number.NEGATIVE_INFINITY,
                    };
                    for (let e = 0, i = this.keyframeControllers.length; e < i; e++)
                        this.keyframeControllers[e].getBounds(t);
                    let e = this.convertTValueToScrollPosition(t.min),
                        i = this.convertTValueToScrollPosition(t.max);
                    i - e < o.pageMetrics.windowHeight ?
                        ((t.min = this.convertScrollPositionToTValue(
                                e - 0.5 * o.pageMetrics.windowHeight
                            )),
                            (t.max = this.convertScrollPositionToTValue(
                                i + 0.5 * o.pageMetrics.windowHeight
                            ))) :
                        ((t.min -= 0.001), (t.max += 0.001)),
                        (this.boundsMin = t.min),
                        (this.boundsMax = t.max),
                        (this.timelineUpdateRequired = !0);
                }
                createViewableRange() {
                    return new l(
                        this.metrics.get(this.element),
                        o.pageMetrics.windowHeight
                    );
                }
                _onBreakpointChange(t, e) {
                    (this.keyframesDirty = !0), this.determineActiveKeyframes();
                }
                updateProgress(t) {
                    this.hasDuration() ?
                        ((this.position.localUnclamped =
                                (t - this.viewableRange.a) /
                                (this.viewableRange.d - this.viewableRange.a)),
                            (this.position.local = r.clamp(
                                this.position.localUnclamped,
                                this.boundsMin,
                                this.boundsMax
                            ))) :
                        (this.position.local = this.position.localUnclamped = 0);
                }
                performTimelineDispatch() {
                    for (let t = 0, e = this.keyframeControllers.length; t < e; t++)
                        this.keyframeControllers[t].updateLocalProgress(this.position.local);
                    this.trigger(o.EVENTS.ON_TIMELINE_UPDATE, this.position.local),
                        this.trigger("update", this.position.local),
                        (this.timelineUpdateRequired = !1),
                        this.position.lastPosition !== this.position.local &&
                        (this.position.lastPosition <= this.boundsMin &&
                            this.position.localUnclamped > this.boundsMin ?
                            (this.trigger(o.EVENTS.ON_TIMELINE_START, this),
                                this.trigger("start", this)) :
                            this.position.lastPosition >= this.boundsMin &&
                            this.position.localUnclamped < this.boundsMin ?
                            (this.trigger(o.EVENTS.ON_TIMELINE_START + ":reverse", this),
                                this.trigger("start:reverse", this)) :
                            this.position.lastPosition <= this.boundsMax &&
                            this.position.localUnclamped >= this.boundsMax ?
                            (this.trigger(o.EVENTS.ON_TIMELINE_COMPLETE, this),
                                this.trigger("complete", this)) :
                            this.position.lastPosition >= this.boundsMax &&
                            this.position.localUnclamped < this.boundsMax &&
                            (this.trigger(o.EVENTS.ON_TIMELINE_COMPLETE + ":reverse", this),
                                this.trigger("complete:reverse", this))),
                        null !== this.gui && this.gui.onScrollUpdate(this.position);
                }
                updateTimeline(t) {
                    if (!this.isEnabled) return !1;
                    void 0 === t && (t = this.getPosition()), this.updateProgress(t);
                    let e =
                        this.position.lastPosition === this.boundsMin ||
                        this.position.lastPosition === this.boundsMax,
                        i =
                        this.position.localUnclamped === this.boundsMin ||
                        this.position.localUnclamped === this.boundsMax;
                    if (!this.timelineUpdateRequired &&
                        e &&
                        i &&
                        this.position.lastPosition === t
                    )
                        return void(this.position.local = this.position.localUnclamped);
                    if (
                        this.timelineUpdateRequired ||
                        (this.position.localUnclamped > this.boundsMin &&
                            this.position.localUnclamped < this.boundsMax)
                    )
                        return (
                            this.performTimelineDispatch(),
                            this.requestDOMChange(),
                            void(this.position.lastPosition = this.position.localUnclamped)
                        );
                    let s =
                        this.position.lastPosition > this.boundsMin &&
                        this.position.lastPosition < this.boundsMax,
                        r =
                        this.position.localUnclamped <= this.boundsMin ||
                        this.position.localUnclamped >= this.boundsMax;
                    if (s && r)
                        return (
                            this.performTimelineDispatch(),
                            this.requestDOMChange(),
                            void(this.position.lastPosition = this.position.localUnclamped)
                        );
                    const n =
                        this.position.lastPosition < this.boundsMin &&
                        this.position.localUnclamped > this.boundsMax,
                        o =
                        this.position.lastPosition > this.boundsMax &&
                        this.position.localUnclamped < this.boundsMax;
                    (n || o) &&
                    (this.performTimelineDispatch(),
                        this.requestDOMChange(),
                        (this.position.lastPosition = this.position.localUnclamped)),
                    null !== this.gui && this.gui.onScrollUpdate(this.position);
                }
                _onScroll(t) {
                    this.updateTimeline(t);
                }
                convertScrollPositionToTValue(t) {
                    return this.hasDuration() ?
                        r.map(t, this.viewableRange.a, this.viewableRange.d, 0, 1) :
                        0;
                }
                convertTValueToScrollPosition(t) {
                    return this.hasDuration() ?
                        r.map(t, 0, 1, this.viewableRange.a, this.viewableRange.d) :
                        0;
                }
                hasDuration() {
                    return this.viewableRange.a !== this.viewableRange.d;
                }
                getPosition() {
                    return o.pageMetrics.scrollY;
                }
                getControllerForTarget(t) {
                    if (!t._animInfo || !t._animInfo.controllers) return null;
                    if (t._animInfo.controller && t._animInfo.controller.group === this)
                        return t._animInfo.controller;
                    const e = t._animInfo.controllers;
                    for (let t = 0, i = e.length; t < i; t++)
                        if (e[t].group === this) return e[t];
                    return null;
                }
                trigger(t, e) {
                    if (void 0 !== this._events[t])
                        for (let i = this._events[t].length - 1; i >= 0; i--)
                            void 0 !== e ? this._events[t][i](e) : this._events[t][i]();
                }
                set keyframesDirty(t) {
                    (this._keyframesDirty = t),
                    this._keyframesDirty && this.requestDOMChange();
                }
                get keyframesDirty() {
                    return this._keyframesDirty;
                }
            };
        },
        function(t, e, i) {
            "use strict";
            var s = i(15);
            t.exports = s.cancelAnimationFrame("draw");
        },
        function(t, e, i) {
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
        function(t, e, i) {
            "use strict";
            t.exports = function(t) {
                var e;
                return function() {
                    return void 0 === e && (e = t.apply(this, arguments)), e;
                };
            };
        },
        function(t, e, i) {
            "use strict";
            const s = i(12);
            t.exports = class extends Error {
                constructor(t) {
                    super(
                            t ||
                            "Failed to fetch product price: The API service responded with an unexpected data format."
                        ),
                        (this.name = "InvalidDataError");
                }
                showHint() {
                    s.warn(this.message);
                }
            };
        },
        function(t, e, i) {
            "use strict";
            t.exports = function(t) {
                return t.reduce((t, e) => ((t[e] = e), t), {});
            };
        },
        function(t, e, i) {
            "use strict";
            const s = i(16),
                r = i(9);
            class n extends s {
                constructor(t, e) {
                    super(t, e),
                        (this.keyframeType = r.KeyframeTypes.CSSClass),
                        (this._triggerType = n.TRIGGER_TYPE_CSS_CLASS),
                        (this.cssClass = ""),
                        (this.friendlyName = ""),
                        (this.style = { on: null, off: null }),
                        (this.toggle = !1),
                        (this.isApplied = !1);
                }
                parseOptions(t) {
                    if (!this.controller._ownerIsElement)
                        throw new TypeError("CSS Keyframes cannot be applied to JS Objects");
                    if (
                        ((t.x = void 0),
                            (t.y = void 0),
                            (t.scale = void 0),
                            (t.scaleX = void 0),
                            (t.scaleY = void 0),
                            (t.rotation = void 0),
                            (t.opacity = void 0),
                            (t.hold = void 0),
                            void 0 !== t.toggle && (this.toggle = t.toggle),
                            void 0 !== t.cssClass)
                    )
                        (this._triggerType = n.TRIGGER_TYPE_CSS_CLASS),
                        (this.cssClass = t.cssClass),
                        (this.friendlyName = "." + this.cssClass),
                        void 0 === this.controller.tweenProps.targetClasses &&
                        (this.controller.tweenProps.targetClasses = {
                            add: [],
                            remove: [],
                        });
                    else {
                        if (void 0 === t.style || !this.isValidStyleProperty(t.style))
                            throw new TypeError(
                                "KeyframeCSSClass no 'cssClass` property found. If using `style` property its also missing or invalid"
                            );
                        if (
                            ((this._triggerType = n.TRIGGER_TYPE_STYLE_PROPERTY),
                                (this.style = t.style),
                                (this.friendlyName = "style"),
                                (this.toggle = void 0 !== this.style.off || this.toggle),
                                this.toggle && void 0 === this.style.off)
                        ) {
                            this.style.off = {};
                            for (let t in this.style.on) this.style.off[t] = "";
                        }
                        void 0 === this.controller.tweenProps.targetStyles &&
                            (this.controller.tweenProps.targetStyles = {});
                    }
                    if (
                        (void 0 === t.end && (t.end = t.start),
                            (t.toggle = this.toggle),
                            this._triggerType === n.TRIGGER_TYPE_CSS_CLASS)
                    )
                        this.isApplied = this.controller.element.classList.contains(
                            this.cssClass
                        );
                    else {
                        let t = getComputedStyle(this.controller.element);
                        this.isApplied = !0;
                        for (let e in this.style.on)
                            if (t[e] !== this.style.on[e]) {
                                this.isApplied = !1;
                                break;
                            }
                    }
                    s.prototype.parseOptions.call(this, t),
                        (this.animValues[this.friendlyName] = [0, 0]),
                        void 0 === this.controller.tweenProps[this.friendlyName] &&
                        (this.controller.tweenProps[this.friendlyName] = new r.TargetValue(
                            0,
                            1, !1
                        )),
                        (this.keyframeType = r.KeyframeTypes.CSSClass);
                }
                updateLocalProgress(t) {
                    (this.isApplied && !this.toggle) ||
                    (this.start !== this.end ?
                        !this.isApplied && t >= this.start && t <= this.end ?
                        this._apply() :
                        this.isApplied &&
                        this.toggle &&
                        (t < this.start || t > this.end) &&
                        this._unapply() :
                        !this.isApplied && t >= this.start ?
                        this._apply() :
                        this.isApplied &&
                        this.toggle &&
                        t < this.start &&
                        this._unapply());
                }
                _apply() {
                    if (this._triggerType === n.TRIGGER_TYPE_CSS_CLASS)
                        this.controller.tweenProps.targetClasses.add.push(this.cssClass),
                        (this.controller.needsClassUpdate = !0);
                    else {
                        for (let t in this.style.on)
                            this.controller.tweenProps.targetStyles[t] = this.style.on[t];
                        this.controller.needsStyleUpdate = !0;
                    }
                    this.isApplied = !0;
                }
                _unapply() {
                    if (this._triggerType === n.TRIGGER_TYPE_CSS_CLASS)
                        this.controller.tweenProps.targetClasses.remove.push(this.cssClass),
                        (this.controller.needsClassUpdate = !0);
                    else {
                        for (let t in this.style.off)
                            this.controller.tweenProps.targetStyles[t] = this.style.off[t];
                        this.controller.needsStyleUpdate = !0;
                    }
                    this.isApplied = !1;
                }
                isValidStyleProperty(t) {
                    if (!t.hasOwnProperty("on")) return !1;
                    if ("object" != typeof t.on)
                        throw new TypeError(
                            "KeyframeCSSClass `style` property should be in the form of: {on:{visibility:hidden, otherProperty: value}}"
                        );
                    if (this.toggle && t.hasOwnProperty("off") && "object" != typeof t.off)
                        throw new TypeError(
                            "KeyframeCSSClass `style` property should be in the form of: {on:{visibility:hidden, otherProperty: value}}"
                        );
                    return !0;
                }
                reconcile(t, e) {}
                onDOMRead(t, e) {}
                evaluateInterpolationConstraints() {}
            }
            (n.TRIGGER_TYPE_CSS_CLASS = 0),
            (n.TRIGGER_TYPE_STYLE_PROPERTY = 1),
            (n.DATA_ATTRIBUTE = "data-anim-classname"),
            (t.exports = n);
        }, ,
        function(t, e, i) {
            "use strict";
            t.exports = class {};
        },
        function(t, e, i) {
            "use strict";
            t.exports = function(t) {
                return t.startsWith("--") ?
                    t :
                    t.replace(/[A-Z]/g, (t) => "-" + t.toLowerCase());
            };
        },
        function(t, e, i) {
            "use strict";
            t.exports = () => Math.random().toString(16).slice(-4);
        },
        function(t, e, i) {
            "use strict";
            let s = [
                "borderRadius",
                "bottom",
                "fontSize",
                "fontWeight",
                "height",
                "left",
                "lineHeight",
                "marginBottom",
                "marginLeft",
                "marginRight",
                "marginTop",
                "maxHeight",
                "maxWidth",
                "opacity",
                "paddingBottom",
                "paddingLeft",
                "paddingRight",
                "paddingTop",
                "right",
                "top",
                "width",
                "zIndex",
                "color",
                "backgroundColor",
                "fill",
                "stroke",
                "strokeDashoffset",
            ];
            s.push(...s.map((t) => t.replace(/[A-Z]/g, (t) => "-" + t.toLowerCase())));
            t.exports = {
                transformAttributes: [
                    "x",
                    "y",
                    "z",
                    "scale",
                    "scaleX",
                    "scaleY",
                    "rotation",
                    "rotationX",
                    "rotationY",
                    "rotationZ",
                ],
                cssAttributes: s,
                domAttributes: ["currentTime", "scrollLeft", "scrollTop"],
            };
        },
        function(t, e, i) {
            "use strict";
            const s = i(14),
                r = i(3),
                n = i(13);
            class o extends s {
                constructor(t, e) {
                    super(t, e),
                        (this.keyframeType = r.KeyframeTypes.Event),
                        (this.isApplied = !1),
                        (this.hasDuration = !1),
                        (this.isCurrentlyInRange = !1);
                }
                parseOptions(t) {
                    (t.x = void 0),
                    (t.y = void 0),
                    (t.scale = void 0),
                    (t.scaleX = void 0),
                    (t.scaleY = void 0),
                    (t.rotation = void 0),
                    (t.style = void 0),
                    (t.cssClass = void 0),
                    (t.rotation = void 0),
                    (t.opacity = void 0),
                    (t.hold = void 0),
                    (this.event = t.event),
                    (this.animValues[this.event] = [0, 0]),
                    void 0 === this.controller.tweenProps[this.event] &&
                        (this.controller.tweenProps[this.event] = new n(
                            0,
                            1, !1,
                            this.event
                        )),
                        super.parseOptions(t),
                        (this.keyframeType = r.KeyframeTypes.Event);
                }
                updateLocalProgress(t) {
                    if (this.hasDuration) {
                        let e = this.isCurrentlyInRange,
                            i = t >= this.start && t <= this.end;
                        if (e === i) return;
                        return (
                            (this.isCurrentlyInRange = i),
                            void(i && !e ?
                                this._trigger(this.event + ":enter") :
                                e && !i && this._trigger(this.event + ":exit"))
                        );
                    }!this.isApplied && t >= this.start ?
                        ((this.isApplied = !0), this._trigger(this.event)) :
                        this.isApplied &&
                        t < this.start &&
                        ((this.isApplied = !1), this._trigger(this.event + ":reverse"));
                }
                _trigger(t) {
                    (this.controller.eventObject.event = t),
                    (this.controller.eventObject.keyframe = this),
                    this.controller.trigger(t, this.controller.eventObject);
                }
                evaluateConstraints() {
                    super.evaluateConstraints(),
                        (this.hasDuration = this.start !== this.end);
                }
                reset(t) {
                    (this.isApplied = !1), (this.isCurrentlyInRange = !1), super.reset(t);
                }
                onDOMRead(t) {}
                reconcile(t) {}
                evaluateInterpolationConstraints() {}
            }
            (o.DATA_ATTRIBUTE = "data-anim-event"), (t.exports = o);
        },
        function(t, e, i) {
            "use strict";
            const s = i(44);
            t.exports = class {
                constructor(t, e, i = !1) {
                    (this.isGroup = i),
                    (this.group = t),
                    (this.controller = e),
                    (this.controllers = []),
                    (this.tweenProps = new s());
                }
            };
        },
        function(t, e, i) {
            "use strict";
            const s = i(3),
                r = (t, e) => (null == t ? e : t);
            class n {
                constructor(t) {
                    (this.top = 0),
                    (this.bottom = 0),
                    (this.left = 0),
                    (this.right = 0),
                    (this.height = 0),
                    (this.width = 0);
                }
                toString() {
                    return `top:${this.top}, bottom:${this.bottom}, left:${this.left}, right:${this.right}, height:${this.height}, width:${this.width}`;
                }
                toObject() {
                    return {
                        top: this.top,
                        bottom: this.bottom,
                        left: this.left,
                        right: this.right,
                        height: this.height,
                        width: this.width,
                    };
                }
            }
            t.exports = class {
                constructor() {
                    this.clear();
                }
                clear() {
                    this._metrics = new WeakMap();
                }
                destroy() {
                    this._metrics = null;
                }
                add(t) {
                    let e = this._metrics.get(t);
                    if (e) return e;
                    let i = new n(t);
                    return this._metrics.set(t, i), this._refreshMetrics(t, i);
                }
                get(t) {
                    return this._metrics.get(t);
                }
                refreshCollection(t) {
                    t.forEach((t) => this._refreshMetrics(t, null));
                }
                refreshMetrics(t) {
                    return this._refreshMetrics(t);
                }
                _refreshMetrics(t, e) {
                    if (((e = e || this._metrics.get(t)), !(t instanceof Element)))
                        return (
                            (e.width = r(t.width, 0)),
                            (e.height = r(t.height, 0)),
                            (e.top = r(t.top, r(t.y, 0))),
                            (e.left = r(t.left, r(t.x, 0))),
                            (e.right = e.left + e.width),
                            (e.bottom = e.top + e.height),
                            e
                        );
                    if (void 0 === t.offsetWidth) {
                        let i = t.getBoundingClientRect();
                        return (
                            (e.width = i.width),
                            (e.height = i.height),
                            (e.top = s.pageMetrics.scrollY + i.top),
                            (e.left = s.pageMetrics.scrollX + i.left),
                            (e.right = e.left + e.width),
                            (e.bottom = e.top + e.height),
                            e
                        );
                    }
                    (e.width = t.offsetWidth),
                    (e.height = t.offsetHeight),
                    (e.top = s.pageMetrics.documentOffsetY),
                    (e.left = s.pageMetrics.documentOffsetX);
                    let i = t;
                    for (; i;)
                        (e.top += i.offsetTop),
                        (e.left += i.offsetLeft),
                        (i = i.offsetParent);
                    return (e.right = e.left + e.width), (e.bottom = e.top + e.height), e;
                }
            };
        },
        function(t, e, i) {
            "use strict";
            "undefined" != typeof window &&
                (window.DOMMatrix =
                    window.DOMMatrix ||
                    window.WebKitCSSMatrix ||
                    window.CSSMatrix ||
                    window.MSCSSMatrix);
            const s = 180 / Math.PI,
                r = (t) => Math.round(1e6 * t) / 1e6;

            function n(t) {
                return Math.sqrt(t[0] * t[0] + t[1] * t[1] + t[2] * t[2]);
            }

            function o(t, e) {
                return 0 === e ? Array.from(t) : [t[0] / e, t[1] / e, t[2] / e];
            }

            function a(t, e) {
                return t[0] * e[0] + t[1] * e[1] + t[2] * e[2];
            }

            function h(t, e, i, s) {
                return [t[0] * i + e[0] * s, t[1] * i + e[1] * s, t[2] * i + e[2] * s];
            }

            function l(t) {
                const e = new Float32Array(4),
                    i = new Float32Array(3),
                    l = new Float32Array(3),
                    c = new Float32Array(3);
                (c[0] = t[3][0]), (c[1] = t[3][1]), (c[2] = t[3][2]);
                const u = new Array(3);
                for (let e = 0; e < 3; e++) u[e] = t[e].slice(0, 3);
                (i[0] = n(u[0])),
                (u[0] = o(u[0], i[0])),
                (l[0] = a(u[0], u[1])),
                (u[1] = h(u[1], u[0], 1, -l[0])),
                (i[1] = n(u[1])),
                (u[1] = o(u[1], i[1])),
                (l[0] /= i[1]),
                (l[1] = a(u[0], u[2])),
                (u[2] = h(u[2], u[0], 1, -l[1])),
                (l[2] = a(u[1], u[2])),
                (u[2] = h(u[2], u[1], 1, -l[2])),
                (i[2] = n(u[2])),
                (u[2] = o(u[2], i[2])),
                (l[1] /= i[2]),
                (l[2] /= i[2]);
                const d =
                    ((p = u[1]),
                        (m = u[2]), [
                            p[1] * m[2] - p[2] * m[1],
                            p[2] * m[0] - p[0] * m[2],
                            p[0] * m[1] - p[1] * m[0],
                        ]);
                var p, m;
                if (a(u[0], d) < 0)
                    for (let t = 0; t < 3; t++)
                        (i[t] *= -1), (u[t][0] *= -1), (u[t][1] *= -1), (u[t][2] *= -1);
                let f;
                return (
                    (e[0] = 0.5 * Math.sqrt(Math.max(1 + u[0][0] - u[1][1] - u[2][2], 0))),
                    (e[1] = 0.5 * Math.sqrt(Math.max(1 - u[0][0] + u[1][1] - u[2][2], 0))),
                    (e[2] = 0.5 * Math.sqrt(Math.max(1 - u[0][0] - u[1][1] + u[2][2], 0))),
                    (e[3] = 0.5 * Math.sqrt(Math.max(1 + u[0][0] + u[1][1] + u[2][2], 0))),
                    u[2][1] > u[1][2] && (e[0] = -e[0]),
                    u[0][2] > u[2][0] && (e[1] = -e[1]),
                    u[1][0] > u[0][1] && (e[2] = -e[2]),
                    (f =
                        e[0] < 0.001 && e[0] >= 0 && e[1] < 0.001 && e[1] >= 0 ? [0, 0, r((180 * Math.atan2(u[0][1], u[0][0])) / Math.PI)] :
                        (function(t) {
                            const [e, i, n, o] = t,
                            a = e * e,
                                h = i * i,
                                l = n * n,
                                c = e * i + n * o,
                                u = o * o + a + h + l;
                            return c > 0.49999 * u ? [0, 2 * Math.atan2(e, o) * s, 90] :
                                c < -0.49999 * u ? [0, -2 * Math.atan2(e, o) * s, -90] : [
                                    r(
                                        Math.atan2(2 * e * o - 2 * i * n, 1 - 2 * a - 2 * l) * s
                                    ),
                                    r(
                                        Math.atan2(2 * i * o - 2 * e * n, 1 - 2 * h - 2 * l) * s
                                    ),
                                    r(Math.asin(2 * e * i + 2 * n * o) * s),
                                ];
                        })(e)), {
                        translation: c,
                        rotation: f,
                        eulerRotation: f,
                        scale: [r(i[0]), r(i[1]), r(i[2])],
                    }
                );
            }
            t.exports = function(t) {
                t instanceof Element &&
                    (t = String(getComputedStyle(t).transform).trim());
                let e = new DOMMatrix(t);
                const i = new Array(4);
                for (let t = 1; t < 5; t++) {
                    const s = (i[t - 1] = new Float32Array(4));
                    for (let i = 1; i < 5; i++) s[i - 1] = e[`m${t}${i}`];
                }
                return l(i);
            };
        },
        function(t, e, i) {
            "use strict";
            t.exports = { majorVersionNumber: "3.x" };
        },
        function(t, e) {
            t.exports = function() {
                var t = new Float32Array(16);
                return (
                    (t[0] = 1),
                    (t[1] = 0),
                    (t[2] = 0),
                    (t[3] = 0),
                    (t[4] = 0),
                    (t[5] = 1),
                    (t[6] = 0),
                    (t[7] = 0),
                    (t[8] = 0),
                    (t[9] = 0),
                    (t[10] = 1),
                    (t[11] = 0),
                    (t[12] = 0),
                    (t[13] = 0),
                    (t[14] = 0),
                    (t[15] = 1),
                    t
                );
            };
        },
        function(t, e) {
            t.exports = function(t, e, i) {
                var s = Math.sin(i),
                    r = Math.cos(i),
                    n = e[4],
                    o = e[5],
                    a = e[6],
                    h = e[7],
                    l = e[8],
                    c = e[9],
                    u = e[10],
                    d = e[11];
                e !== t &&
                    ((t[0] = e[0]),
                        (t[1] = e[1]),
                        (t[2] = e[2]),
                        (t[3] = e[3]),
                        (t[12] = e[12]),
                        (t[13] = e[13]),
                        (t[14] = e[14]),
                        (t[15] = e[15]));
                return (
                    (t[4] = n * r + l * s),
                    (t[5] = o * r + c * s),
                    (t[6] = a * r + u * s),
                    (t[7] = h * r + d * s),
                    (t[8] = l * r - n * s),
                    (t[9] = c * r - o * s),
                    (t[10] = u * r - a * s),
                    (t[11] = d * r - h * s),
                    t
                );
            };
        },
        function(t, e) {
            t.exports = function(t, e, i) {
                var s = Math.sin(i),
                    r = Math.cos(i),
                    n = e[0],
                    o = e[1],
                    a = e[2],
                    h = e[3],
                    l = e[8],
                    c = e[9],
                    u = e[10],
                    d = e[11];
                e !== t &&
                    ((t[4] = e[4]),
                        (t[5] = e[5]),
                        (t[6] = e[6]),
                        (t[7] = e[7]),
                        (t[12] = e[12]),
                        (t[13] = e[13]),
                        (t[14] = e[14]),
                        (t[15] = e[15]));
                return (
                    (t[0] = n * r - l * s),
                    (t[1] = o * r - c * s),
                    (t[2] = a * r - u * s),
                    (t[3] = h * r - d * s),
                    (t[8] = n * s + l * r),
                    (t[9] = o * s + c * r),
                    (t[10] = a * s + u * r),
                    (t[11] = h * s + d * r),
                    t
                );
            };
        },
        function(t, e) {
            t.exports = function(t, e, i) {
                var s = Math.sin(i),
                    r = Math.cos(i),
                    n = e[0],
                    o = e[1],
                    a = e[2],
                    h = e[3],
                    l = e[4],
                    c = e[5],
                    u = e[6],
                    d = e[7];
                e !== t &&
                    ((t[8] = e[8]),
                        (t[9] = e[9]),
                        (t[10] = e[10]),
                        (t[11] = e[11]),
                        (t[12] = e[12]),
                        (t[13] = e[13]),
                        (t[14] = e[14]),
                        (t[15] = e[15]));
                return (
                    (t[0] = n * r + l * s),
                    (t[1] = o * r + c * s),
                    (t[2] = a * r + u * s),
                    (t[3] = h * r + d * s),
                    (t[4] = l * r - n * s),
                    (t[5] = c * r - o * s),
                    (t[6] = u * r - a * s),
                    (t[7] = d * r - h * s),
                    t
                );
            };
        },
        function(t, e) {
            t.exports = function(t, e, i) {
                var s = i[0],
                    r = i[1],
                    n = i[2];
                return (
                    (t[0] = e[0] * s),
                    (t[1] = e[1] * s),
                    (t[2] = e[2] * s),
                    (t[3] = e[3] * s),
                    (t[4] = e[4] * r),
                    (t[5] = e[5] * r),
                    (t[6] = e[6] * r),
                    (t[7] = e[7] * r),
                    (t[8] = e[8] * n),
                    (t[9] = e[9] * n),
                    (t[10] = e[10] * n),
                    (t[11] = e[11] * n),
                    (t[12] = e[12]),
                    (t[13] = e[13]),
                    (t[14] = e[14]),
                    (t[15] = e[15]),
                    t
                );
            };
        },
        function(t, e, i) {
            "use strict";
            const s = i(3);
            class r {
                constructor(t, e) {
                    (this._index = 0), (this.keyframe = t), e && (this.name = e);
                }
                get start() {
                    return this.keyframe.jsonProps.start;
                }
                set index(t) {
                    this._index = t;
                }
                get index() {
                    return this._index;
                }
            }
            t.exports = class {
                constructor(t) {
                    (this.timeGroup = t),
                    (this.chapters = []),
                    (this.chapterNames = {}),
                    (this.currentChapter = null),
                    (this.tween = null);
                }
                addChapter(t) {
                    const { position: e, name: i } = t;
                    if (void 0 === e)
                        throw ReferenceError("Cannot add chapter without target position.");
                    t._impIsFirst ||
                        0 !== this.chapters.length ||
                        this.addChapter({ position: 0, _impIsFirst: !0 });
                    let s = this.timeGroup.addKeyframe(this, {
                        start: e,
                        end: e,
                        event: "Chapter",
                    });
                    this.timeGroup.forceUpdate({ waitForNextFrame: !1, silent: !0 });
                    const n = new r(s, i);
                    if ((this.chapters.push(n), i)) {
                        if (this.chapterNames.hasOwnProperty(i))
                            throw ReferenceError(
                                `Duplicate chapter name assigned - "${i}" is already in use`
                            );
                        this.chapterNames[i] = n;
                    }
                    return (
                        this.chapters
                        .sort((t, e) => t.start - e.start)
                        .forEach((t, e) => (t.index = e)),
                        (this.currentChapter = this.currentChapter || this.chapters[0]),
                        n
                    );
                }
                playToChapter(t) {
                    let e;
                    if (t.hasOwnProperty("index")) e = this.chapters[t.index];
                    else {
                        if (!t.hasOwnProperty("name"))
                            throw ReferenceError(
                                "Cannot play to chapter without target index or name"
                            );
                        e = this.chapterNames[t.name];
                    }
                    if (!e || (this.currentChapter === e && !0 !== t.force)) return;
                    let i = t.ease || "easeInOutCubic";
                    this.tween &&
                        this.tween.controller &&
                        (this.tween.remove(), (i = "easeOutQuint")),
                        this.timeGroup.timeScale(t.timeScale || 1);
                    const r =
                        void 0 !== t.duration ? t.duration : this.getDurationToChapter(e),
                        n = this.timeGroup.time(),
                        o = e.start;
                    let a = !1;
                    this.tween = this.timeGroup.anim.addTween({ time: n }, {
                        easeFunction: i,
                        duration: r,
                        time: [n, o],
                        onStart: () =>
                            this.timeGroup.trigger(s.EVENTS.ON_CHAPTER_INITIATED, {
                                player: this,
                                next: e,
                            }),
                        onDraw: (t) => {
                            let i = t.tweenProps.time.current;
                            this.timeGroup.time(i),
                                t.keyframe.curvedT > 0.5 &&
                                !a &&
                                ((a = !0),
                                    (this.currentIndex = e.index),
                                    (this.currentChapter = e),
                                    this.timeGroup.trigger(s.EVENTS.ON_CHAPTER_OCCURRED, {
                                        player: this,
                                        current: e,
                                    }));
                        },
                        onComplete: () => {
                            this.timeGroup.trigger(s.EVENTS.ON_CHAPTER_COMPLETED, {
                                    player: this,
                                    current: e,
                                }),
                                this.timeGroup.paused(!0),
                                (this.tween = null);
                        },
                    });
                }
                getDurationToChapter(t) {
                    const e = this.chapters[t.index - 1] || this.chapters[t.index + 1];
                    return Math.abs(e.start - t.start);
                }
            };
        },
        function(t, e, i) {
            "use strict";
            var s = i(15);
            t.exports = s.cancelAnimationFrame("update");
        },
        function(t, e, i) {
            "use strict";
            t.exports = { BaseComponent: i(21) };
        },
        function(t, e, i) {
            "use strict";
            const s = i(137),
                r = i(140);
            t.exports = {
                itemsCreated(t) {
                    this._items.forEach((t, e) => {
                        e === this.wrappedIndex(this.currentIndex) ? r(t.el) : s(t.el);
                    });
                },
                onItemChangeCompleted(t) {
                    const { previous: e, current: i } = this.selections.completed;
                    e && e !== i && s(e.el), r(i.el);
                },
            };
        },
        function(t, e, i) {
            "use strict";
            t.exports = {
                AUTOCOMPLETE: "aria-autocomplete",
                CHECKED: "aria-checked",
                DISABLED: "aria-disabled",
                EXPANDED: "aria-expanded",
                HASPOPUP: "aria-haspopup",
                HIDDEN: "aria-hidden",
                INVALID: "aria-invalid",
                LABEL: "aria-label",
                LEVEL: "aria-level",
                MULTILINE: "aria-multiline",
                MULTISELECTABLE: "aria-multiselectable",
                ORIENTATION: "aria-orientation",
                PRESSED: "aria-pressed",
                READONLY: "aria-readonly",
                REQUIRED: "aria-required",
                SELECTED: "aria-selected",
                SORT: "aria-sort",
                VALUEMAX: "aria-valuemax",
                VALUEMIN: "aria-valuemin",
                VALUENOW: "aria-valuenow",
                VALUETEXT: "aria-valuetext",
                ATOMIC: "aria-atomic",
                BUSY: "aria-busy",
                LIVE: "aria-live",
                RELEVANT: "aria-relevant",
                DROPEFFECT: "aria-dropeffect",
                GRABBED: "aria-grabbed",
                ACTIVEDESCENDANT: "aria-activedescendant",
                CONTROLS: "aria-controls",
                DESCRIBEDBY: "aria-describedby",
                FLOWTO: "aria-flowto",
                LABELLEDBY: "aria-labelledby",
                OWNS: "aria-owns",
                POSINSET: "aria-posinset",
                SETSIZE: "aria-setsize",
            };
        },
        function(t, e, i) {
            "use strict";
            const s = i(145),
                r = i(153),
                n = i(154),
                o = i(155),
                a = i(156),
                h = i(157);
            t.exports = class {
                constructor(t, e = {}) {
                    if ("number" != typeof t || !isFinite(t))
                        throw new TypeError(
                            `Clip duration must be a finite number; got "${t}"`
                        );
                    "function" == typeof e && (e = { draw: e }),
                        (this.ease = o(e.ease)),
                        (this.update = o(e.update)),
                        (this.draw = e.draw),
                        (this.prepare = o(e.prepare)),
                        (this.finish = o(e.finish)),
                        (this._duration = 1e3 * t),
                        (this._startTime = null),
                        (this._isPrepared = !1),
                        (this._promise = null),
                        (this._isPlaying = !1);
                }
                get isReversed() {
                    return this._duration < 0;
                }
                get isComplete() {
                    const t = this.progress;
                    return (!this.isReversed && t >= 1) || (this.isReversed && t <= 0);
                }
                get progress() {
                    if (0 === this._duration) return 1;
                    let t = (this.lastFrameTime - this._startTime) / this._duration;
                    return this.isReversed && (t = 1 + t), h(t, 0, 1);
                }
                get easedProgress() {
                    return this.ease ? this.ease(this.progress) : this.progress;
                }
                _run(t, e) {
                    (this.lastFrameTime = Date.now()),
                    null === this._startTime && (this._startTime = this.lastFrameTime);
                    const i = this.easedProgress;
                    this.update && s(() => this._isPlaying && this.update(i)),
                        r(() => {
                            this._isPlaying &&
                                (this.draw(i),
                                    this.isComplete ? a(r, [this.finish, e]) : this._run(this, e));
                        });
                }
                play() {
                    if ("function" != typeof this.draw)
                        throw new Error(
                            'Clip must be given a "draw" function as an option or have its "draw" method overriden.'
                        );
                    return (
                        (this._isPlaying = !0),
                        this._promise ||
                        (this._promise = new Promise((t, e) => {
                            !this._isPrepared && this.prepare ?
                                ((this._isPrepared = !0),
                                    r(() =>
                                        n(this.prepare(), () => {
                                            this._run(this, t);
                                        })
                                    )) :
                                this._run(this, t);
                        })),
                        this._promise
                    );
                }
                destroy() {
                    (this._isPlaying = !1), (this.draw = this.finish = this.update = null);
                }
                static play() {
                    return new this(...arguments).play();
                }
            };
        },
        function(t, e, i) {
            "use strict";
            var s = i(146),
                r = function() {
                    this.events = {};
                },
                n = r.prototype;
            (n.requestAnimationFrame = function(t) {
                return (
                    this.events[t] || (this.events[t] = new s(t)),
                    this.events[t].requestAnimationFrame
                );
            }),
            (n.cancelAnimationFrame = function(t) {
                return (
                    this.events[t] || (this.events[t] = new s(t)),
                    this.events[t].cancelAnimationFrame
                );
            }),
            (t.exports = new r());
        },
        function(t, e, i) {
            "use strict";
            t.exports = new(class {
                constructor() {
                    (this.linear = function(t) {
                        return t;
                    }),
                    (this.easeInQuad = function(t) {
                        return t * t;
                    }),
                    (this.easeOutQuad = function(t) {
                        return t * (2 - t);
                    }),
                    (this.easeInOutQuad = function(t) {
                        return t < 0.5 ? 2 * t * t : (4 - 2 * t) * t - 1;
                    }),
                    (this.easeInSin = function(t) {
                        return 1 + Math.sin((Math.PI / 2) * t - Math.PI / 2);
                    }),
                    (this.easeOutSin = function(t) {
                        return Math.sin((Math.PI / 2) * t);
                    }),
                    (this.easeInOutSin = function(t) {
                        return (1 + Math.sin(Math.PI * t - Math.PI / 2)) / 2;
                    }),
                    (this.easeInElastic = function(t) {
                        return 0 === t ? t : (0.04 - 0.04 / t) * Math.sin(25 * t) + 1;
                    }),
                    (this.easeOutElastic = function(t) {
                        return ((0.04 * t) / --t) * Math.sin(25 * t);
                    }),
                    (this.easeInOutElastic = function(t) {
                        return (t -= 0.5) < 0 ?
                            (0.02 + 0.01 / t) * Math.sin(50 * t) :
                            (0.02 - 0.01 / t) * Math.sin(50 * t) + 1;
                    }),
                    (this.easeOutBack = function(t) {
                        return (t -= 1) * t * (2.70158 * t + 1.70158) + 1;
                    }),
                    (this.easeInCubic = function(t) {
                        return t * t * t;
                    }),
                    (this.easeOutCubic = function(t) {
                        return --t * t * t + 1;
                    }),
                    (this.easeInOutCubic = function(t) {
                        return t < 0.5 ?
                            4 * t * t * t :
                            (t - 1) * (2 * t - 2) * (2 * t - 2) + 1;
                    }),
                    (this.easeInQuart = function(t) {
                        return t * t * t * t;
                    }),
                    (this.easeOutQuart = function(t) {
                        return 1 - --t * t * t * t;
                    }),
                    (this.easeInOutQuart = function(t) {
                        return t < 0.5 ? 8 * t * t * t * t : 1 - 8 * --t * t * t * t;
                    }),
                    (this.easeInQuint = function(t) {
                        return t * t * t * t * t;
                    }),
                    (this.easeOutQuint = function(t) {
                        return 1 + --t * t * t * t * t;
                    }),
                    (this.easeInOutQuint = function(t) {
                        return t < 0.5 ?
                            16 * t * t * t * t * t :
                            1 + 16 * --t * t * t * t * t;
                    });
                }
            })();
        },
        function(t, e, i) {
            "use strict";
            var s = i(1);
            Object.defineProperty(e, "__esModule", { value: !0 }),
                (e.default = e.pluginCache = void 0);
            var r = s(i(18)),
                n = s(i(169)),
                o = s(i(174)),
                a = s(i(10));
            const h = {};
            e.pluginCache = h;
            const l = [];
            let c = 1;
            class u extends r.default {
                constructor(t = {}) {
                    super(),
                        (this.el = t.el || document.createElement("video")),
                        (this.id =
                            t.id ||
                            this.el.id ||
                            this.el.dataset.inlineMediaId ||
                            "inlineMedia-" + c++);
                    const e = (t.plugins || []).concat(n.default);
                    this._initPlugins(e, t), l.push(this);
                }
                async load(t) {
                    for (const e of this.plugins)
                        if ("function" == typeof e.load) return e.load(t);
                }
                abortLoad() {
                    for (const t of this.plugins)
                        if ("function" == typeof t.abortLoad) {
                            t.abortLoad();
                            break;
                        }
                }
                async play() {
                    for (const t of this.plugins)
                        if ("function" == typeof t.play) return t.play();
                }
                get src() {
                    for (const t of this.plugins)
                        if (t.src) return t.src;
                    return "";
                }
                get playbackState() {
                    for (const t of this.plugins) {
                        const e = t.playbackState;
                        if (void 0 !== e) return e;
                    }
                }
                get loadingState() {
                    for (const t of this.plugins) {
                        const e = t.loadingState;
                        if (void 0 !== e) return e;
                    }
                }
                _initPlugins(t, e) {
                    (this.plugins = []), (this.pluginMap = new Map());
                    for (let i of t) {
                        if ("string" == typeof i) {
                            if (!h[i])
                                throw new Error(
                                    `Trying to use undefined Plugin named: ${i} . Ensure you call Media.addPlugin() first!`
                                );
                            i = h[i];
                        }
                        if (!1 !== i.isSupported) {
                            const t = new i(Object.assign({ media: this }, e));
                            this.plugins.push(t), this.pluginMap.set(i, t);
                        }
                    }
                    this.trigger(a.default.MOUNTED);
                }
                destroy() {
                    if (!this._destroyed) {
                        for (const t of this.plugins)
                            "function" == typeof t.destroy && t.destroy();
                        super.destroy(), l.splice(l.indexOf(this), 1), (this._destroyed = !0);
                    }
                }
                static get medias() {
                    return l;
                }
                static addPlugin(t, e) {
                    h[t] = e;
                }
                static async autoInitialize(t = document, e = {}) {
                    return (0, o.default)(t, e);
                }
            }
            var d = u;
            e.default = d;
        },
        function(t, e, i) {
            "use strict";
            Object.defineProperty(e, "__esModule", { value: !0 }), (e.default = void 0);
            e.default = {
                LOAD_START: "loadstart",
                LOADED_DATA: "loadeddata",
                LOADED_METADATA: "loadedmetadata",
                CAN_PLAY: "canplay",
                CAN_PLAY_THROUGH: "canplaythrough",
                PLAY: "play",
                PLAYING: "playing",
                PAUSE: "pause",
                WAITING: "waiting",
                SEEKING: "seeking",
                SEEKED: "seeked",
                ERROR: "error",
                ENDED: "ended",
                ABORT: "abort",
            };
        },
        function(t, e, i) {
            "use strict";
            var s = !1,
                r = window || self;
            try {
                s = !!r.localStorage.getItem("f7c9180f-5c45-47b4-8de4-428015f096c0");
            } catch (t) {}
            t.exports = s;
        },
        function(t, e, i) {
            "use strict";
            Object.defineProperty(e, "__esModule", { value: !0 }),
                (e.default = function(t, e, i, s) {
                    const r = i[0].toUpperCase() + i.slice(1),
                        n = t["inlineMedia" + r];
                    if (void 0 !== n)
                        switch (typeof s) {
                            case "boolean":
                                return "false" !== n;
                            case "object":
                                return JSON.parse(n);
                            case "number":
                                return Number(n);
                            default:
                                return n;
                        }
                    else if (void 0 !== e[i]) {
                        const t = e[i];
                        return "boolean" != typeof s || ("false" !== t && "true" !== t) ?
                            t :
                            "false" !== t;
                    }
                    return s;
                });
        },
        function(t, e, i) {
            "use strict";
            var s = i(1);
            Object.defineProperty(e, "__esModule", { value: !0 }), (e.default = void 0);
            var r = s(i(184));
            e.default = class {
                constructor(t) {
                    (this._breakpoints = t.breakpoints || r.default),
                    (this.options = t),
                    this._initialize();
                }
                _initialize() {
                    (this._updateBreakpoint = this._updateBreakpoint.bind(this)),
                    (this._callback = this.options.callback),
                    (this._mediaQueries = Object.keys(this._breakpoints).map((t) =>
                        window.matchMedia(`(min-width: ${this._breakpoints[t]}px)`)
                    )),
                    this._addEventListeners(),
                        this._updateBreakpoint();
                }
                _addEventListeners() {
                    for (const t of this._mediaQueries)
                        t.addListener(this._updateBreakpoint);
                }
                _removeEventListeners() {
                    for (const t of this._mediaQueries)
                        t.removeListener(this._updateBreakpoint);
                }
                _updateBreakpoint() {
                    const t = Object.keys(this._breakpoints);
                    let e = t[0];
                    for (let i = 1; i < t.length; i++) {
                        if (!this._mediaQueries[i].matches) break;
                        e = t[i];
                    }
                    let i = !1;
                    this._currentBreakpoint && this._currentBreakpoint !== e && (i = !0),
                        (this._currentBreakpoint = e),
                        i && this._callback();
                }
                get breakpoint() {
                    return this._currentBreakpoint;
                }
                destroy() {
                    this._removeEventListeners();
                }
            };
        },
        function(t, e, i) {
            "use strict";
            t.exports = i(0)("log");
        },
        function(t, e, i) {
            "use strict";
            const s = i(25),
                r = i(26),
                n = i(73);
            t.exports = function(t = [], e = {}) {
                if (!t.length) {
                    const t = new r();
                    return Promise.resolve(t);
                }
                return s("edupricing").then((i) => {
                    const s = Object.assign({}, i, e);
                    return new n(t, s).send();
                });
            };
        },
        function(t, e, i) {
            "use strict";
            const s = i(190),
                r = i(76),
                n = i(79);
            t.exports = class extends n {
                constructor(t, e) {
                    super(t, e), (this.identifierParam = "parts");
                }
                createDummyItem(t) {
                    return s(t, "unauthorized");
                }
                formatResponseItem(t, e) {
                    let i = null;
                    return (
                        this.options.dummyPrices &&
                        "UNKNOWN" === e.type &&
                        ((e = s(t, "unknown")), this.itemsWithDummyPrice.push(t)),
                        (i = new r(e)),
                        i.price &&
                        999999 === i.price.value &&
                        this.itemsWithDummyPrice.push(t),
                        i
                    );
                }
                getItemsFromResponse(t) {
                    return t.items;
                }
            };
        },
        function(t, e, i) {
            "use strict";
            t.exports = { mockPrices: { unauthorized: 777777, unknown: 888888 } };
        },
        function(t, e, i) {
            "use strict";
            t.exports = function(t, e) {
                const i = t % 1 == 0 ? 0 : 2;
                return t > 9999 ?
                    t.toLocaleString(e, {
                        minimumFractionDigits: i,
                        maximumFractionDigits: i,
                    }) :
                    t.toFixed(i);
            };
        },
        function(t, e, i) {
            "use strict";
            const s = i(77),
                r = i(78),
                n = i(40),
                o = (t) => ({
                    id: t.isString,
                    name: t.isString,
                    type: (t) => ["WUIP", "PART"].includes(t),
                    price: t.isObject,
                    "price.value": t.isNumber,
                    "price.display": t.isObject,
                    "price.display.disclaimer": t.isOptionalString,
                    "price.display.legal": t.isOptionalString,
                    "price.display.actual": t.isString,
                    "price.display.monthlyFrom": t.isOptionalString,
                    "price.display.smart": t.isString,
                    "price.display.from": (t, e) =>
                        "WUIP" === e.type ? "string" == typeof t : void 0 === t,
                }),
                a =
                (t = "id") =>
                (e) =>
                void 0 === e ||
                r(e, (e) => ({
                    [t]: e.isString,
                    productName: e.isString,
                    credit: e.isObject,
                    "credit.value": e.isNumber,
                    "credit.display": e.isObject,
                    "credit.display.actual": e.isString,
                    "credit.display.smart": e.isString,
                    "credit.display.upto": e.isString,
                    priceWithCreditApplied: e.isObject,
                    "priceWithCreditApplied.value": e.isNumber,
                    "priceWithCreditApplied.display.actual": e.isString,
                    "priceWithCreditApplied.display.disclaimer": e.isOptionalString,
                    "priceWithCreditApplied.display.from": e.isString,
                    "priceWithCreditApplied.display.monthlyFrom": e.isOptionalString,
                    "priceWithCreditApplied.display.smart": e.isString,
                })),
                h =
                (t = "id") =>
                (e) => ({...o(e), tradeIn: a(t) });
            class l {
                constructor(t) {
                    if (!l.validate(t))
                        throw new n(
                            "Could not create Product, because the given JSON contains invalid data."
                        );
                    s(this, t);
                }
                get isWUIP() {
                    return "WUIP" === this.type;
                }
                get isPart() {
                    return "PART" === this.type;
                }
                static validate(t) {
                    if (!t.tradeIn) return r(t, h);
                    if (t.tradeIn.slug) return r(t, h("slug"));
                    if (t.tradeIn.id) return r(t, h("id"));
                    throw new Error("Cannot validate Product data.");
                }
            }
            t.exports = l;
        },
        function(t, e, i) {
            "use strict";
            t.exports = function(t, e) {
                Object.entries(e).forEach(([e, i]) => {
                    t[e] ||
                        Object.defineProperty(t, e, {
                            enumerable: !0,
                            value: "object" == typeof i ?
                                Object.freeze(JSON.parse(JSON.stringify(i))) : i,
                        });
                });
            };
        },
        function(t, e, i) {
            "use strict";
            const s = {
                isString: (t) => "string" == typeof t,
                isOptionalString: (t) => !t || "string" == typeof t,
                isNumber: (t) => "number" == typeof t,
                isObject: (t) => "[object Object]" === Object.prototype.toString.call(t),
            };

            function r(t, e) {
                return e.split(".").reduce((t, e) => t && t[e], t);
            }
            t.exports = function(t, e) {
                "function" == typeof e && (e = e(s));
                const i = Object.entries(e);
                for (var n = 0, o = i.length; n < o; n++) {
                    const [e, s] = i[n],
                        o = e.indexOf(".") > -1 ? r(t, e) : t[e];
                    if (!0 !== s.call(t, o, t)) return !1;
                }
                return !0;
            };
        },
        function(t, e, i) {
            "use strict";
            const s = i(208),
                r = i(209),
                n = i(12),
                o = i(211),
                a = i(80),
                h = i(26),
                l = { endpoint: null, aliases: null, timeout: 5, dummyPrices: !1 },
                c = "39f4f1f5-c4a1-4a7c-ab30-085335a11146";
            t.exports = class {
                constructor(t = [], e = {}) {
                    (this.ids = Array.isArray(t) ? t : [t]),
                    (this._originalIDs = [...this.ids]),
                    (this.identifierToAliasMap = {}),
                    (this.options = this._processOptions(e)),
                    (this.itemsWithDummyPrice = []),
                    (this.identifierParam = {});
                }
                formatResponseItem() {
                    throw new Error("not implemented");
                }
                getItemsFromResponse() {
                    throw new Error("not implemented");
                }
                createDummyItem() {
                    throw new Error("not implemented");
                }
                send() {
                    return this._maybeForceError()
                        .then(() => this._request())
                        .then((t) => this._processResponse(t))
                        .then((t) => this._createProductObjects(t))
                        .catch((t) => this._handleError(t));
                }
                _createProductObjects(t) {
                    let e = {};
                    return (
                        Object.entries(t).forEach(([t, i]) => {
                            let s = null;
                            const r = this.identifierToAliasMap[t] ||
                                this.identifierToAliasMap[`slug:${t}`] || [t];
                            try {
                                s = this.formatResponseItem(t, i);
                            } catch (t) {
                                if ("InvalidDataError" !== t.name) throw t;
                            }
                            r.forEach((t) => {
                                e[t] = s;
                            });
                        }),
                        Object.defineProperty(e, "aliases", { value: this.options.aliases }),
                        n.group(
                            "%cResults from Apple Online Store",
                            "background-color:#27a33f;color:white;padding:2px 5px"
                        ),
                        n.log(e),
                        n.groupEnd(),
                        n.enabled &&
                        this.itemsWithDummyPrice.length &&
                        (n.group("Dummy Prices"),
                            n.warn(
                                "Using dummy prices for the following product identifiers: " +
                                this.itemsWithDummyPrice.join(", ")
                            ),
                            n.info(
                                "$777,777 — The API service may require authentication and/or authorization. \n$888,888 — The product identifer is currently unknown to the API service. \n$999,999 — The product identifier is known to the API service, but the price has yet to be set. \n"
                            ),
                            n.groupEnd()),
                        new h(null, e)
                    );
                }
                _handleError(t) {
                    let e = {};
                    this.ids.forEach((t) => (e[t] = null));
                    let i = new h(t, e);
                    if (!t) return i;
                    if (!Object.keys(a).some((e) => t.name === e)) throw t;
                    if ("UnexpectedError" === t.name && this.options.dummyPrices) {
                        let e = {};
                        this._originalIDs.forEach((t) => {
                                (e[t] = this.createDummyItem(t)), this.itemsWithDummyPrice.push(t);
                            }),
                            (i = new h(t, e));
                    }
                    return (
                        t && "function" == typeof t.showHint && t.showHint(i.products), i
                    );
                }
                _maybeForceError() {
                    return new Promise((t, e) => {
                        if (
                            this.options.dummyPrices &&
                            "undefined" != typeof window &&
                            window.location.search.indexOf(c) > -1
                        ) {
                            const t = s(c, null);
                            e(t && a[t] && new a[t]());
                        }
                        t();
                    });
                }
                _processOptions(t) {
                    if (!(t = Object.assign({}, l, t)).endpoint)
                        throw new a.ConfigurationError({ type: "endpoint" });
                    const e = t.aliases ? Object.entries(t.aliases) : [];
                    return (
                        e.length &&
                        ((this.identifierToAliasMap = e.reduce(
                                (t, [e, i]) => ((t[i] = t[i] || []), t[i].push(e), t), {}
                            )),
                            (this.ids = this.ids.map((e) => t.aliases[e] || e))),
                        t
                    );
                }
                _processResponse(t) {
                    let e = null,
                        i = null;
                    switch (
                        parseInt(t.getResponseHeader("x-rewrite-status"), 10) ||
                        t.status
                    ) {
                        case 404:
                            throw new a.ServiceNotFoundError();
                        case 503:
                            throw new a.ServiceUnavailableError();
                        case 400:
                            throw new a.UnexpectedError();
                        case 200:
                            if (
                                ((i = o(t.responseText)),
                                    null !== i && ((e = this.getItemsFromResponse(i)), e))
                            )
                                return e;
                        default:
                            throw new a.InvalidDataError();
                    }
                }
                _request() {
                    return new Promise((t, e) => {
                        const i = new XMLHttpRequest();
                        (i.withCredentials = !0),
                        (i.onloadend = t.bind(this, i)),
                        (i.ontimeout = e.bind(
                            this,
                            new a.TimeoutError(this.options.timeout)
                        )),
                        (i.onerror = e.bind(this, new a.UnexpectedError())),
                        i.open(
                                "POST",
                                r(this.options.endpoint, this.identifierParam, this.ids), !0
                            ),
                            (i.timeout = 1e3 * (this.options.timeout || 0)),
                            i.send();
                    });
                }
            };
        },
        function(t, e, i) {
            "use strict";
            t.exports = {
                ConfigurationError: i(212),
                ServiceNotFoundError: i(213),
                ServiceUnavailableError: i(214),
                TimeoutError: i(215),
                InvalidDataError: i(40),
                UnexpectedError: i(216),
            };
        },
        function(t, e, i) {
            "use strict";
            const s = i(25),
                r = i(26),
                n = i(73);
            t.exports = function(t = [], e = {}) {
                if (!t.length) {
                    const t = new r();
                    return Promise.resolve(t);
                }
                return s("pricing").then((i) => {
                    const s = Object.assign({}, i, e);
                    return new n(t, s).send();
                });
            };
        },
        function(t, e, i) {
            "use strict";
            const s = i(25),
                r = i(26),
                n = i(217);
            t.exports = function(t = [], e = {}) {
                if (!t.length) {
                    const t = new r();
                    return Promise.resolve(t);
                }
                return s("tradein").then((i) => {
                    const s = Object.assign({}, i, e);
                    return new n(t, s).send();
                });
            };
        },
        function(t, e, i) {
            "use strict";
            const s = i(77),
                r = i(78),
                n = i(40),
                o = (t) => ({
                    productName: t.isString,
                    productNameWithMaxPrice: t.isString,
                    credit: t.isObject,
                    "credit.value": t.isNumber,
                    "credit.display": t.isObject,
                    "credit.display.actual": t.isString,
                    "credit.display.smart": t.isString,
                    "credit.display.upto": t.isString,
                }),
                a =
                (t = "id") =>
                (e) => ({...o(e), [t]: e.isString });
            class h {
                constructor(t) {
                    if (!h.validate(t))
                        throw new n(
                            "Could not create TradeIn, because the given JSON contains invalid data."
                        );
                    s(this, t);
                }
                static validate(t) {
                    if (t.slug) return r(t, a("slug"));
                    if (t.id) return r(t, a("id"));
                    throw new Error("Cannot validate TradeIn data.");
                }
            }
            t.exports = h;
        },
        function(t, e, i) {
            "use strict";
            t.exports = class {};
        },
        function(t, e, i) {
            "use strict";
            const s = 1e-5,
                r = Math.abs;
            class n {
                constructor(t, e, i, s) {
                    (this.cp = new Float32Array(6)),
                    (this.cp[0] = 3 * t),
                    (this.cp[1] = 3 * (i - t) - this.cp[0]),
                    (this.cp[2] = 1 - this.cp[0] - this.cp[1]),
                    (this.cp[3] = 3 * e),
                    (this.cp[4] = 3 * (s - e) - this.cp[3]),
                    (this.cp[5] = 1 - this.cp[3] - this.cp[4]);
                }
                sampleCurveX(t) {
                    return ((this.cp[2] * t + this.cp[1]) * t + this.cp[0]) * t;
                }
                sampleCurveY(t) {
                    return ((this.cp[5] * t + this.cp[4]) * t + this.cp[3]) * t;
                }
                sampleCurveDerivativeX(t) {
                    return (3 * this.cp[2] * t + 2 * this.cp[1]) * t + this.cp[0];
                }
                solveCurveX(t) {
                    var e, i, n, o, a, h;
                    for (n = t, h = 0; h < 5; h++) {
                        if (((o = this.sampleCurveX(n) - t), r(o) < s)) return n;
                        if (((a = this.sampleCurveDerivativeX(n)), r(a) < s)) break;
                        n -= o / a;
                    }
                    if ((n = t) < (e = 0)) return e;
                    if (n > (i = 1)) return i;
                    for (; e < i;) {
                        if (((o = this.sampleCurveX(n)), r(o - t) < s)) return n;
                        t > o ? (e = n) : (i = n), (n = 0.5 * (i - e) + e);
                    }
                    return n;
                }
                solve(t) {
                    return this.sampleCurveY(this.solveCurveX(t));
                }
            }
            const o = /\d*\.?\d+/g;
            (n.fromCSSString = function(t) {
                let e = t.match(o);
                if (4 !== e.length)
                    throw `UnitBezier could not convert ${t} to cubic-bezier`;
                let i = e.map(Number),
                    s = new n(i[0], i[1], i[2], i[3]);
                return s.solve.bind(s);
            }),
            (t.exports = n);
        },
        function(t, e, i) {
            "use strict";
            t.exports = () => Math.random().toString(16).slice(2);
        },
        function(t, e, i) {
            "use strict";
            const s = i(16),
                r = i(9);
            class n extends s {
                constructor(t, e) {
                    super(t, e),
                        (this.keyframeType = r.KeyframeTypes.Event),
                        (this.isApplied = !1),
                        (this.hasDuration = !1),
                        (this.isCurrentlyInRange = !1);
                }
                parseOptions(t) {
                    (t.x = void 0),
                    (t.y = void 0),
                    (t.scale = void 0),
                    (t.scaleX = void 0),
                    (t.scaleY = void 0),
                    (t.rotation = void 0),
                    (t.style = void 0),
                    (t.cssClass = void 0),
                    (t.rotation = void 0),
                    (t.opacity = void 0),
                    (t.hold = void 0),
                    void 0 === t.end && (t.end = t.start),
                        (this.event = t.event),
                        (this.animValues[this.event] = [0, 0]),
                        void 0 === this.controller.tweenProps[this.event] &&
                        (this.controller.tweenProps[this.event] = new r.TargetValue(
                            0,
                            1, !1
                        )),
                        super.parseOptions(t),
                        (this.keyframeType = r.KeyframeTypes.Event);
                }
                updateLocalProgress(t) {
                    if (this.hasDuration) {
                        let e = this.isCurrentlyInRange,
                            i = t >= this.start && t <= this.end;
                        if (e === i) return;
                        return (
                            (this.isCurrentlyInRange = i),
                            void(i && !e ?
                                this._trigger(this.event + ":enter") :
                                e && !i && this._trigger(this.event + ":exit"))
                        );
                    }!this.isApplied && t >= this.start ?
                        ((this.isApplied = !0), this._trigger(this.event)) :
                        this.isApplied &&
                        t < this.start &&
                        ((this.isApplied = !1), this._trigger(this.event + ":reverse"));
                }
                _trigger(t) {
                    (this.controller.eventObject.event = t),
                    (this.controller.eventObject.keyframe = this),
                    this.controller.trigger(t, this.controller.eventObject);
                }
                evaluateConstraints() {
                    super.evaluateConstraints(),
                        (this.hasDuration = this.start !== this.end);
                }
                reset(t) {
                    (this.isApplied = !1), (this.isCurrentlyInRange = !1), super.reset(t);
                }
                onDOMRead(t, e) {}
                reconcile(t, e) {}
                evaluateInterpolationConstraints() {}
            }
            (n.DATA_ATTRIBUTE = "data-anim-event"), (t.exports = n);
        },
        function(t, e, i) {
            "use strict";
            const s = i(4).EventEmitterMicro,
                r = i(7),
                n = i(41),
                o = i(9),
                a = i(89),
                h = i(224),
                l = i(226),
                c = { create: i(11), update: i(8), draw: i(5) };
            t.exports = class extends s {
                constructor(t, e) {
                    super(),
                        (this.anim = e),
                        (this.element = t),
                        (this.name = this.name || t.getAttribute("data-anim-scroll-group")),
                        (this.isEnabled = !0),
                        (this.position = new o.Progress()),
                        (this.metrics = new a()),
                        this.metrics.add(this.element),
                        (this.expressionParser = new h(this)),
                        (this.boundsMin = 0),
                        (this.boundsMax = 0),
                        (this.timelineUpdateRequired = !1),
                        (this._keyframesDirty = !1),
                        (this.viewableRange = this.createViewableRange()),
                        (this.defaultEase = o.KeyframeDefaults.ease),
                        (this.keyframeControllers = []),
                        this.updateProgress(this.getPosition()),
                        (this.onDOMRead = this.onDOMRead.bind(this)),
                        (this.onDOMWrite = this.onDOMWrite.bind(this)),
                        (this.gui = null),
                        this.finalizeInit();
                }
                finalizeInit() {
                    (this.element._animInfo = new o.AnimInfo(this, null, !0)),
                    this.setupRAFEmitter();
                }
                destroy() {
                    this.expressionParser.destroy(), (this.expressionParser = null);
                    for (let t = 0, e = this.keyframeControllers.length; t < e; t++)
                        this.keyframeControllers[t].destroy();
                    (this.keyframeControllers = null),
                    (this.position = null),
                    (this.viewableRange = null),
                    this.gui && (this.gui.destroy(), (this.gui = null)),
                        this.metrics.destroy(),
                        (this.metrics = null),
                        this.rafEmitter.destroy(),
                        (this.rafEmitter = null),
                        (this.anim = null),
                        this.element._animInfo &&
                        this.element._animInfo.group === this &&
                        ((this.element._animInfo.group = null),
                            (this.element._animInfo = null)),
                        (this.element = null),
                        (this.isEnabled = !1),
                        super.destroy();
                }
                removeKeyframeController(t) {
                    return this.keyframeControllers.includes(t) ?
                        (t._allKeyframes.forEach((t) => (t.markedForRemoval = !0)),
                            (this.keyframesDirty = !0),
                            new Promise((e) => {
                                c.draw(() => {
                                    const i = this.keyframeControllers.indexOf(t); -
                                    1 !== i ?
                                        (this.keyframeControllers.splice(i, 1),
                                            t.onDOMWrite(),
                                            t.destroy(),
                                            this.gui && this.gui.create(),
                                            e()) :
                                        e();
                                });
                            })) :
                        Promise.resolve();
                }
                remove() {
                    return this.anim.removeGroup(this);
                }
                setupRAFEmitter(t) {
                    this.rafEmitter && this.rafEmitter.destroy(),
                        (this.rafEmitter = t || new c.create()),
                        this.rafEmitter.on("update", this.onDOMRead),
                        this.rafEmitter.on("draw", this.onDOMWrite),
                        this.rafEmitter.once("external", () => this.reconcile());
                }
                requestDOMChange() {
                    return !!this.isEnabled && this.rafEmitter.run();
                }
                onDOMRead() {
                    this.keyframesDirty && this.onKeyframesDirty();
                    for (let t = 0, e = this.keyframeControllers.length; t < e; t++)
                        this.keyframeControllers[t].onDOMRead(this.position.local);
                }
                onDOMWrite() {
                    for (let t = 0, e = this.keyframeControllers.length; t < e; t++)
                        this.keyframeControllers[t].onDOMWrite();
                    this.needsUpdate() && this.requestDOMChange();
                }
                needsUpdate() {
                    if (this._keyframesDirty) return !0;
                    for (let t = 0, e = this.keyframeControllers.length; t < e; t++)
                        if (this.keyframeControllers[t].needsUpdate()) return !0;
                    return !1;
                }
                addKeyframe(t, e) {
                    let i = this.getControllerForTarget(t);
                    return (
                        null === i &&
                        ((i = new l(this, t)), this.keyframeControllers.push(i)),
                        (this.keyframesDirty = !0),
                        i.addKeyframe(e)
                    );
                }
                forceUpdate({ waitForNextUpdate: t = !0, silent: e = !1 } = {}) {
                    this.isEnabled &&
                        (this.refreshMetrics(),
                            (this.timelineUpdateRequired = !0),
                            t ?
                            (this.keyframesDirty = !0) :
                            this.onKeyframesDirty({ silent: e }));
                }
                onKeyframesDirty({ silent: t = !1 } = {}) {
                    this.determineActiveKeyframes(),
                        (this.keyframesDirty = !1),
                        this.metrics.refreshMetrics(this.element),
                        (this.viewableRange = this.createViewableRange());
                    for (let t = 0, e = this.keyframeControllers.length; t < e; t++)
                        this.keyframeControllers[t].updateAnimationConstraints();
                    this.updateBounds(),
                        this.updateProgress(this.getPosition()),
                        t || this._onScroll(),
                        this.gui && this.gui.create();
                }
                refreshMetrics() {
                    let t = new Set([this.element]);
                    this.keyframeControllers.forEach((e) => {
                            t.add(e.element),
                                e._allKeyframes.forEach((e) => e.anchors.forEach((e) => t.add(e)));
                        }),
                        this.metrics.refreshCollection(t),
                        (this.viewableRange = this.createViewableRange());
                }
                reconcile() {
                    for (let t = 0, e = this.keyframeControllers.length; t < e; t++)
                        this.keyframeControllers[t].reconcile();
                }
                determineActiveKeyframes(t) {
                    t = t || n(Array.from(document.documentElement.classList));
                    for (let e = 0, i = this.keyframeControllers.length; e < i; e++)
                        this.keyframeControllers[e].determineActiveKeyframes(t);
                }
                updateBounds() {
                    if (0 === this.keyframeControllers.length)
                        return (this.boundsMin = 0), void(this.boundsMax = 0);
                    let t = {
                        min: Number.POSITIVE_INFINITY,
                        max: Number.NEGATIVE_INFINITY,
                    };
                    for (let e = 0, i = this.keyframeControllers.length; e < i; e++)
                        this.keyframeControllers[e].getBounds(t);
                    let e = this.convertTValueToScrollPosition(t.min),
                        i = this.convertTValueToScrollPosition(t.max);
                    i - e < o.pageMetrics.windowHeight ?
                        ((t.min = this.convertScrollPositionToTValue(
                                e - 0.5 * o.pageMetrics.windowHeight
                            )),
                            (t.max = this.convertScrollPositionToTValue(
                                i + 0.5 * o.pageMetrics.windowHeight
                            ))) :
                        ((t.min -= 0.001), (t.max += 0.001)),
                        (this.boundsMin = t.min),
                        (this.boundsMax = t.max),
                        (this.timelineUpdateRequired = !0);
                }
                createViewableRange() {
                    return new o.ViewableRange(
                        this.metrics.get(this.element),
                        o.pageMetrics.windowHeight
                    );
                }
                _onBreakpointChange(t, e) {
                    (this.keyframesDirty = !0), this.determineActiveKeyframes();
                }
                updateProgress(t) {
                    this.hasDuration() ?
                        ((this.position.localUnclamped =
                                (t - this.viewableRange.a) /
                                (this.viewableRange.d - this.viewableRange.a)),
                            (this.position.local = r.clamp(
                                this.position.localUnclamped,
                                this.boundsMin,
                                this.boundsMax
                            ))) :
                        (this.position.local = this.position.localUnclamped = 0);
                }
                performTimelineDispatch() {
                    for (let t = 0, e = this.keyframeControllers.length; t < e; t++)
                        this.keyframeControllers[t].updateLocalProgress(this.position.local);
                    this.trigger(o.EVENTS.ON_TIMELINE_UPDATE, this.position.local),
                        (this.timelineUpdateRequired = !1),
                        this.position.lastPosition !== this.position.local &&
                        (this.position.lastPosition <= this.boundsMin &&
                            this.position.localUnclamped > this.boundsMin ?
                            this.trigger(o.EVENTS.ON_TIMELINE_START, this) :
                            this.position.lastPosition >= this.boundsMin &&
                            this.position.localUnclamped < this.boundsMin ?
                            this.trigger(o.EVENTS.ON_TIMELINE_START + ":reverse", this) :
                            this.position.lastPosition <= this.boundsMax &&
                            this.position.localUnclamped >= this.boundsMax ?
                            this.trigger(o.EVENTS.ON_TIMELINE_COMPLETE, this) :
                            this.position.lastPosition >= this.boundsMax &&
                            this.position.localUnclamped < this.boundsMax &&
                            this.trigger(o.EVENTS.ON_TIMELINE_COMPLETE + ":reverse", this)),
                        null !== this.gui && this.gui.onScrollUpdate(this.position);
                }
                _onScroll(t) {
                    if (!this.isEnabled) return !1;
                    void 0 === t && (t = this.getPosition()), this.updateProgress(t);
                    let e =
                        this.position.lastPosition === this.boundsMin ||
                        this.position.lastPosition === this.boundsMax,
                        i =
                        this.position.localUnclamped === this.boundsMin ||
                        this.position.localUnclamped === this.boundsMax;
                    if (!this.timelineUpdateRequired &&
                        e &&
                        i &&
                        this.position.lastPosition === t
                    )
                        return void(this.position.local = this.position.localUnclamped);
                    if (
                        this.timelineUpdateRequired ||
                        (this.position.localUnclamped > this.boundsMin &&
                            this.position.localUnclamped < this.boundsMax)
                    )
                        return (
                            this.performTimelineDispatch(),
                            this.requestDOMChange(),
                            void(this.position.lastPosition = this.position.localUnclamped)
                        );
                    let s =
                        this.position.lastPosition > this.boundsMin &&
                        this.position.lastPosition < this.boundsMax,
                        r =
                        this.position.localUnclamped <= this.boundsMin ||
                        this.position.localUnclamped >= this.boundsMax;
                    if (s && r)
                        return (
                            this.performTimelineDispatch(),
                            this.requestDOMChange(),
                            void(this.position.lastPosition = this.position.localUnclamped)
                        );
                    const n =
                        this.position.lastPosition < this.boundsMin &&
                        this.position.localUnclamped > this.boundsMax,
                        o =
                        this.position.lastPosition > this.boundsMax &&
                        this.position.localUnclamped < this.boundsMax;
                    (n || o) &&
                    (this.performTimelineDispatch(),
                        this.requestDOMChange(),
                        (this.position.lastPosition = this.position.localUnclamped)),
                    null !== this.gui && this.gui.onScrollUpdate(this.position);
                }
                convertScrollPositionToTValue(t) {
                    return this.hasDuration() ?
                        r.map(t, this.viewableRange.a, this.viewableRange.d, 0, 1) :
                        0;
                }
                convertTValueToScrollPosition(t) {
                    return this.hasDuration() ?
                        r.map(t, 0, 1, this.viewableRange.a, this.viewableRange.d) :
                        0;
                }
                hasDuration() {
                    return this.viewableRange.a !== this.viewableRange.d;
                }
                getPosition() {
                    return o.pageMetrics.scrollY;
                }
                getControllerForTarget(t) {
                    if (!t._animInfo || !t._animInfo.controllers) return null;
                    if (t._animInfo.controller && t._animInfo.controller.group === this)
                        return t._animInfo.controller;
                    const e = t._animInfo.controllers;
                    for (let t = 0, i = e.length; t < i; t++)
                        if (e[t].group === this) return e[t];
                    return null;
                }
                trigger(t, e) {
                    if (void 0 !== this._events[t])
                        for (let i = this._events[t].length - 1; i >= 0; i--)
                            void 0 !== e ? this._events[t][i](e) : this._events[t][i]();
                }
                set keyframesDirty(t) {
                    (this._keyframesDirty = t),
                    this._keyframesDirty && this.requestDOMChange();
                }
                get keyframesDirty() {
                    return this._keyframesDirty;
                }
            };
        },
        function(t, e, i) {
            "use strict";
            const s = i(9),
                r = (t, e) => (null == t ? e : t);
            class n {
                constructor(t) {
                    (this.top = 0),
                    (this.bottom = 0),
                    (this.left = 0),
                    (this.right = 0),
                    (this.height = 0),
                    (this.width = 0);
                }
                toString() {
                    return `top:${this.top}, bottom:${this.bottom}, left:${this.left}, right:${this.right}, height:${this.height}, width:${this.width}`;
                }
                toObject() {
                    return {
                        top: this.top,
                        bottom: this.bottom,
                        left: this.left,
                        right: this.right,
                        height: this.height,
                        width: this.width,
                    };
                }
            }
            t.exports = class {
                constructor() {
                    this.clear();
                }
                clear() {
                    this._metrics = new WeakMap();
                }
                destroy() {
                    this._metrics = null;
                }
                add(t) {
                    let e = this._metrics.get(t);
                    if (e) return e;
                    let i = new n(t);
                    return this._metrics.set(t, i), this._refreshMetrics(t, i);
                }
                get(t) {
                    return this._metrics.get(t);
                }
                refreshCollection(t) {
                    t.forEach((t) => this._refreshMetrics(t, null));
                }
                refreshMetrics(t) {
                    return this._refreshMetrics(t);
                }
                _refreshMetrics(t, e) {
                    if (((e = e || this._metrics.get(t)), !(t instanceof Element)))
                        return (
                            (e.width = r(t.width, 0)),
                            (e.height = r(t.height, 0)),
                            (e.top = r(t.top, r(t.y, 0))),
                            (e.left = r(t.left, r(t.x, 0))),
                            (e.right = e.left + e.width),
                            (e.bottom = e.top + e.height),
                            e
                        );
                    if (void 0 === t.offsetWidth) {
                        let i = t.getBoundingClientRect();
                        return (
                            (e.width = i.width),
                            (e.height = i.height),
                            (e.top = s.pageMetrics.scrollY + i.top),
                            (e.left = s.pageMetrics.scrollX + i.left),
                            (e.right = e.left + e.width),
                            (e.bottom = e.top + e.height),
                            e
                        );
                    }
                    (e.width = t.offsetWidth),
                    (e.height = t.offsetHeight),
                    (e.top = s.pageMetrics.documentOffsetY),
                    (e.left = s.pageMetrics.documentOffsetX);
                    let i = t;
                    for (; i;)
                        (e.top += i.offsetTop),
                        (e.left += i.offsetLeft),
                        (i = i.offsetParent);
                    return (e.right = e.left + e.width), (e.bottom = e.top + e.height), e;
                }
            };
        },
        function(t, e, i) {
            "use strict";
            t.exports = function(t, e) {
                var i;
                return e ? { width: (i = t.getBoundingClientRect()).width, height: i.height } : { width: t.offsetWidth, height: t.offsetHeight };
            };
        }, , , , , , , , , , ,
        function(t, e, i) {
            t.exports = i(102);
        },
        function(t, e, i) {
            "use strict";
            const s = i(103),
                r = i(60),
                n = i(126),
                { applyPrices: o } = i(188),
                a = i(219),
                h = i(27).PictureLazyLoading,
                l = i(220);
            i(230);
            Object.assign(r, n),
                new s(document.querySelector(".main")).anim.on(
                    l.model.EVENTS.ON_DOM_GROUPS_CREATED,
                    () => {
                        new h();
                    }
                ),
                o.loadPricingFromHTML(),
                o.loadTradeInFromHTML(),
                a.detect();
        },
        function(t, e, i) {
            "use strict";
            const s = i(4).EventEmitterMicro,
                r = i(104),
                n = i(105),
                o = i(3),
                a = i(60),
                h = {};
            class l extends s {
                constructor(t, e = {}) {
                    super(),
                        (this.el = t),
                        (this.anim = n),
                        (this.componentAttribute = e.attribute || "data-component-list"),
                        (this.components = []),
                        (this.componentsInitialized = !1),
                        this.el.getAttribute("data-anim-scroll-group") ||
                        this.el.setAttribute("data-anim-scroll-group", "bubble-gum-group"),
                        r.add(() => {
                            n.initialize().then(() => {
                                this.initComponents(),
                                    this.setupEvents(),
                                    this.components.forEach((t) => t.mounted()),
                                    this.trigger(l.EVENTS.DOM_COMPONENTS_MOUNTED);
                            });
                        });
                }
                initComponents() {
                    const t = Array.prototype.slice.call(
                        this.el.querySelectorAll(`[${this.componentAttribute}]`)
                    );
                    this.el.hasAttribute(this.componentAttribute) && t.push(this.el);
                    for (let e = 0; e < t.length; e++) {
                        let i = t[e],
                            s = i.getAttribute(this.componentAttribute).split(" ");
                        for (let t = 0, e = s.length; t < e; t++) {
                            let e = s[t];
                            "" !== e &&
                                " " !== e &&
                                this.addComponent({ el: i, componentName: e });
                        }
                    }
                    this.componentsInitialized = !0;
                }
                setupEvents() {
                    (this.onResizeDebounced = this.onResizeDebounced.bind(this)),
                    (this.onResizeImmediate = this.onResizeImmediate.bind(this)),
                    (this.onBreakpointChange = this.onBreakpointChange.bind(this)),
                    n.on(o.PageEvents.ON_RESIZE_IMMEDIATE, this.onResizeImmediate),
                        n.on(o.PageEvents.ON_RESIZE_DEBOUNCED, this.onResizeDebounced),
                        n.on(o.PageEvents.ON_BREAKPOINT_CHANGE, this.onBreakpointChange);
                }
                addComponent(t) {
                    const { el: e, componentName: i, data: s } = t;
                    if (!a.hasOwnProperty(i))
                        throw (
                            "BubbleGum::addComponent could not add component to '" +
                            e.className +
                            "'. No component type '" +
                            i +
                            "' found!"
                        );
                    const r = a[i];
                    if (!l.componentIsSupported(r, i))
                        return (
                            void 0 === h[i] &&
                            (console.log(
                                    "BubbleGum::addComponent unsupported component '" +
                                    i +
                                    "'. Reason: '" +
                                    i +
                                    ".IS_SUPPORTED' returned false"
                                ),
                                (h[i] = !0)),
                            null
                        );
                    let n = e.dataset.componentList || "";
                    n.includes(i) ||
                        (e.dataset.componentList = n.split(" ").concat(i).join(" "));
                    let c = new r({
                        el: e,
                        data: s,
                        componentName: t.componentName,
                        gum: this,
                        pageMetrics: o.pageMetrics,
                    });
                    return (
                        this.components.push(c), this.componentsInitialized && c.mounted(), c
                    );
                }
                removeComponent(t) {
                    const e = this.components.indexOf(t); -
                    1 !== e &&
                        (this.components.splice(e, 1),
                            (t.el.dataset.componentList = t.el.dataset.componentList
                                .split(" ")
                                .filter((e) => e !== t.componentName)
                                .join(" ")),
                            t.destroy());
                }
                getComponentOfType(t, e = document.documentElement) {
                    const i = `[${this.componentAttribute}*=${t}]`,
                        s = e.matches(i) ? e : e.querySelector(i);
                    return s ?
                        this.components.find((e) => e instanceof a[t] && e.el === s) :
                        null;
                }
                getComponentsOfType(t, e = document.documentElement) {
                    const i = `[${this.componentAttribute}*=${t}]`,
                        s = e.matches(i) ? [e] : Array.from(e.querySelectorAll(i));
                    return this.components.filter(
                        (e) => e instanceof a[t] && s.includes(e.el)
                    );
                }
                getComponentsForElement(t) {
                    return this.components.filter((e) => e.el === t);
                }
                onResizeImmediate() {
                    this.components.forEach((t) => t.onResizeImmediate(o.pageMetrics));
                }
                onResizeDebounced() {
                    this.components.forEach((t) => t.onResizeDebounced(o.pageMetrics));
                }
                onBreakpointChange() {
                    this.components.forEach((t) => t.onBreakpointChange(o.pageMetrics));
                }
                static componentIsSupported(t, e) {
                    const i = t.IS_SUPPORTED;
                    if (void 0 === i) return !0;
                    if ("function" != typeof i)
                        return (
                            console.error(
                                'BubbleGum::addComponent error in "' +
                                e +
                                '".IS_SUPPORTED - it should be a function which returns true/false'
                            ), !0
                        );
                    const s = t.IS_SUPPORTED();
                    return void 0 === s ?
                        (console.error(
                            'BubbleGum::addComponent error in "' +
                            e +
                            '".IS_SUPPORTED - it should be a function which returns true/false'
                        ), !0) :
                        s;
                }
            }
            (l.EVENTS = { DOM_COMPONENTS_MOUNTED: "DOM_COMPONENTS_MOUNTED" }),
            (t.exports = l);
        },
        function(t, e, i) {
            "use strict";
            let s = !1,
                r = !1,
                n = [],
                o = -1;
            t.exports = {
                NUMBER_OF_FRAMES_TO_WAIT: 30,
                add: function(t) {
                    if ((r && t(), n.push(t), s)) return;
                    s = !0;
                    let e = document.documentElement.scrollHeight,
                        i = 0;
                    const a = () => {
                        let t = document.documentElement.scrollHeight;
                        if (e !== t) i = 0;
                        else if ((i++, i >= this.NUMBER_OF_FRAMES_TO_WAIT))
                            return void n.forEach((t) => t());
                        (e = t), (o = requestAnimationFrame(a));
                    };
                    o = requestAnimationFrame(a);
                },
                reset() {
                    cancelAnimationFrame(o), (s = !1), (r = !1), (n = []);
                },
            };
        },
        function(t, e, i) {
            "use strict";
            const s = i(4).EventEmitterMicro,
                r = i(3),
                n = i(14),
                o = i(35),
                a = i(48),
                h = i(36),
                l = i(123),
                c = i(124),
                u = i(125),
                d = {};
            "undefined" != typeof window &&
                ((d.update = i(8)),
                    (d.cancelUpdate = i(59)),
                    (d.external = i(20)),
                    (d.draw = i(5)));
            let p = null;
            class m extends s {
                constructor() {
                    if ((super(), p))
                        throw "You cannot create multiple AnimSystems. You probably want to create multiple groups instead. You can have unlimited groups on a page";
                    (p = this),
                    (this.groups = []),
                    (this.scrollSystems = []),
                    (this.timeSystems = []),
                    (this.tweenGroup = null),
                    (this._forceUpdateRAFId = -1),
                    (this.initialized = !1),
                    (this.model = r),
                    (this.plugins = { keyframe: [], parser: [] }),
                    (this.version = u.version),
                    (this._resolveReady = () => {}),
                    (this.ready = new Promise((t) => (this._resolveReady = t))),
                    (this.onScroll = this.onScroll.bind(this)),
                    (this.onResizedDebounced = this.onResizedDebounced.bind(this)),
                    (this.onResizeImmediate = this.onResizeImmediate.bind(this));
                }
                initialize() {
                    return (
                        this.initialized ||
                        "undefined" == typeof window ||
                        ((this.initialized = !0),
                            (this.timeSystems = []),
                            (this.scrollSystems = []),
                            (this.groups = []),
                            this.setupEvents(),
                            this.initializeResizeFilter(),
                            this.initializeModel(),
                            this.createDOMGroups(),
                            this.createDOMKeyframes(),
                            (this.tweenGroup = new c(null, this)),
                            this.groups.unshift(this.tweenGroup),
                            this._resolveReady()),
                        this.ready
                    );
                }
                use(t, e) {
                    t.install(this, e);
                }
                remove() {
                    return this.initialized ?
                        Promise.all(this.groups.map((t) => t.remove())).then(() => {
                            (this.groups = null),
                            (this.scrollSystems = null),
                            (this.timeSystems = null),
                            window.clearTimeout(r.RESIZE_TIMEOUT),
                                window.removeEventListener("scroll", this.onScroll),
                                window.removeEventListener("resize", this.onResizeImmediate),
                                (this._events = {}),
                                (this.initialized = !1),
                                (this.ready = new Promise((t) => (this._resolveReady = t)));
                        }) :
                        ((this.ready = new Promise((t) => (this._resolveReady = t))),
                            Promise.resolve());
                }
                destroy() {
                    return this.remove();
                }
                createTimeGroup(t, e) {
                    t instanceof HTMLElement || (t = (e = t || {}).el);
                    let i = new l(t, this);
                    return (
                        e && e.name && (i.name = e.name),
                        this.groups.push(i),
                        this.timeSystems.push(i),
                        this.trigger(r.EVENTS.ON_GROUP_CREATED, i),
                        i
                    );
                }
                createScrollGroup(t, e) {
                    if (!t)
                        throw "AnimSystem scroll based groups must supply an HTMLElement";
                    let i = new h(t, this);
                    return (
                        (e = e || {}).name && (i.name = e.name),
                        e.getPosition &&
                        e.getMaxPosition &&
                        ((i.getPosition = e.getPosition),
                            (i.createViewableRange = () => ({ a: 0, d: e.getMaxPosition() }))),
                        (i.getPosition = e.getPosition || i.getPosition),
                        (i.getPosition = e.getPosition || i.getPosition),
                        this.groups.push(i),
                        this.scrollSystems.push(i),
                        this.trigger(r.EVENTS.ON_GROUP_CREATED, i),
                        i
                    );
                }
                removeGroup(t) {
                    return Promise.all(
                        t.keyframeControllers.map((e) => t.removeKeyframeController(e))
                    ).then(() => {
                        let e = this.groups.indexOf(t); -
                        1 !== e && this.groups.splice(e, 1),
                            (e = this.scrollSystems.indexOf(t)), -1 !== e && this.scrollSystems.splice(e, 1),
                            (e = this.timeSystems.indexOf(t)), -1 !== e && this.timeSystems.splice(e, 1),
                            t.destroy();
                    });
                }
                createDOMGroups() {
                    document.body.setAttribute("data-anim-scroll-group", "body"),
                        document
                        .querySelectorAll("[data-anim-scroll-group]")
                        .forEach((t) => this.createScrollGroup(t)),
                        document
                        .querySelectorAll("[data-anim-time-group]")
                        .forEach((t) => this.createTimeGroup(t)),
                        this.trigger(r.EVENTS.ON_DOM_GROUPS_CREATED, this.groups);
                }
                createDOMKeyframes() {
                    let t = [];
                    [
                        "data-anim-keyframe",
                        n.DATA_ATTRIBUTE,
                        o.DATA_ATTRIBUTE,
                        a.DATA_ATTRIBUTE,
                    ].forEach(function(e) {
                        for (let i = 0; i < 12; i++)
                            t.push(e + (0 === i ? "" : "-" + (i - 1)));
                    });
                    for (let e = 0; e < t.length; e++) {
                        let i = t[e],
                            s = document.querySelectorAll("[" + i + "]");
                        for (let t = 0; t < s.length; t++) {
                            const e = s[t],
                                r = JSON.parse(e.getAttribute(i));
                            this.addKeyframe(e, r);
                        }
                    }
                    d.update(() => {
                        null !== this.groups &&
                            (this.groups.forEach((t) => t.onKeyframesDirty({ silent: !0 })),
                                this.groups.forEach((t) =>
                                    t.trigger(r.EVENTS.ON_DOM_KEYFRAMES_CREATED, t)
                                ),
                                this.trigger(r.EVENTS.ON_DOM_KEYFRAMES_CREATED, this),
                                this.groups.forEach((t) => {
                                    t.forceUpdate({ waitForNextUpdate: !1, silent: !0 }),
                                        t.reconcile();
                                }),
                                this.onScroll());
                    }, !0);
                }
                initializeResizeFilter() {
                    if (r.cssDimensionsTracker) return;
                    const t =
                        document.querySelector(".cssDimensionsTracker") ||
                        document.createElement("div");
                    t.setAttribute("cssDimensionsTracker", "true"),
                        (t.style.position = "fixed"),
                        (t.style.top = "0"),
                        (t.style.width = "100%"),
                        (t.style.height = "100vh"),
                        (t.style.pointerEvents = "none"),
                        (t.style.visibility = "hidden"),
                        (t.style.zIndex = "-1"),
                        document.documentElement.appendChild(t),
                        (r.cssDimensionsTracker = t);
                }
                initializeModel() {
                    (r.pageMetrics.windowHeight = r.cssDimensionsTracker.clientHeight),
                    (r.pageMetrics.windowWidth = r.cssDimensionsTracker.clientWidth),
                    (r.pageMetrics.scrollY = window.scrollY || window.pageYOffset),
                    (r.pageMetrics.scrollX = window.scrollX || window.pageXOffset),
                    (r.pageMetrics.breakpoint = r.getBreakpoint());
                    let t = document.documentElement.getBoundingClientRect();
                    (r.pageMetrics.documentOffsetX = t.left + r.pageMetrics.scrollX),
                    (r.pageMetrics.documentOffsetY = t.top + r.pageMetrics.scrollY);
                }
                setupEvents() {
                    window.removeEventListener("scroll", this.onScroll),
                        window.addEventListener("scroll", this.onScroll),
                        window.removeEventListener("resize", this.onResizeImmediate),
                        window.addEventListener("resize", this.onResizeImmediate);
                }
                onScroll() {
                    (r.pageMetrics.scrollY = window.scrollY || window.pageYOffset),
                    (r.pageMetrics.scrollX = window.scrollX || window.pageXOffset);
                    for (let t = 0, e = this.scrollSystems.length; t < e; t++)
                        this.scrollSystems[t].updateTimeline();
                    this.trigger(r.PageEvents.ON_SCROLL, r.pageMetrics);
                }
                onResizeImmediate() {
                    let t = r.cssDimensionsTracker.clientWidth,
                        e = r.cssDimensionsTracker.clientHeight;
                    if (t === r.pageMetrics.windowWidth && e === r.pageMetrics.windowHeight)
                        return;
                    (r.pageMetrics.windowWidth = t),
                    (r.pageMetrics.windowHeight = e),
                    (r.pageMetrics.scrollY = window.scrollY || window.pageYOffset),
                    (r.pageMetrics.scrollX = window.scrollX || window.pageXOffset);
                    let i = document.documentElement.getBoundingClientRect();
                    (r.pageMetrics.documentOffsetX = i.left + r.pageMetrics.scrollX),
                    (r.pageMetrics.documentOffsetY = i.top + r.pageMetrics.scrollY),
                    window.clearTimeout(r.RESIZE_TIMEOUT),
                        (r.RESIZE_TIMEOUT = window.setTimeout(this.onResizedDebounced, 250)),
                        this.trigger(r.PageEvents.ON_RESIZE_IMMEDIATE, r.pageMetrics);
                }
                onResizedDebounced() {
                    d.update(() => {
                        let t = r.pageMetrics.breakpoint,
                            e = r.getBreakpoint();
                        if (e !== t) {
                            (r.pageMetrics.previousBreakpoint = t),
                            (r.pageMetrics.breakpoint = e);
                            for (let t = 0, e = this.groups.length; t < e; t++)
                                this.groups[t]._onBreakpointChange();
                            this.trigger(r.PageEvents.ON_BREAKPOINT_CHANGE, r.pageMetrics);
                        }
                        for (let t = 0, e = this.groups.length; t < e; t++)
                            this.groups[t].forceUpdate({ waitForNextUpdate: !1 });
                        this.trigger(r.PageEvents.ON_RESIZE_DEBOUNCED, r.pageMetrics);
                    }, !0);
                }
                forceUpdate({ waitForNextUpdate: t = !0, silent: e = !1 } = {}) {
                    -1 !== this._forceUpdateRAFId && d.cancelUpdate(this._forceUpdateRAFId);
                    let i = () => {
                        for (let t = 0, i = this.groups.length; t < i; t++) {
                            this.groups[t].forceUpdate({ waitForNextUpdate: !1, silent: e });
                        }
                        return -1;
                    };
                    this._forceUpdateRAFId = t ? d.update(i, !0) : i();
                }
                addKeyframe(t, e) {
                    let i = this.getGroupForTarget(t);
                    return (
                        (i = i || this.getGroupForTarget(document.body)), i.addKeyframe(t, e)
                    );
                }
                addEvent(t, e) {
                    let i = this.getGroupForTarget(t);
                    return (
                        (i = i || this.getGroupForTarget(document.body)), i.addEvent(t, e)
                    );
                }
                getTimeGroupForTarget(t) {
                    return this._getGroupForTarget(t, (t) => t instanceof l);
                }
                getScrollGroupForTarget(t) {
                    return this._getGroupForTarget(t, (t) => !(t instanceof l));
                }
                getGroupForTarget(t) {
                    return this._getGroupForTarget(t, () => !0);
                }
                getGroupByName(t) {
                    return this.groups.find((e) => e.name === t);
                }
                _getGroupForTarget(t, e) {
                    if (t._animInfo && t._animInfo.group && e(t._animInfo.group))
                        return t._animInfo.group;
                    let i = t;
                    for (; i;) {
                        if (i._animInfo && i._animInfo.isGroup && e(i._animInfo.group))
                            return i._animInfo.group;
                        i = i.parentElement;
                    }
                }
                getControllerForTarget(t) {
                    return t._animInfo && t._animInfo.controller ?
                        t._animInfo.controller :
                        null;
                }
                addTween(t, e) {
                    return this.tweenGroup.addKeyframe(t, e);
                }
            }
            (t.exports =
                "undefined" == typeof window ?
                new m() :
                window.AC.SharedInstance.share("AnimSystem", u.major, m)),
            (t.exports.default = t.exports);
        },
        function(t, e, i) {
            "use strict";
            t.exports = new(class {
                constructor() {
                    (this.linear = function(t) {
                        return t;
                    }),
                    (this.easeInQuad = function(t) {
                        return t * t;
                    }),
                    (this.easeOutQuad = function(t) {
                        return t * (2 - t);
                    }),
                    (this.easeInOutQuad = function(t) {
                        return t < 0.5 ? 2 * t * t : (4 - 2 * t) * t - 1;
                    }),
                    (this.easeInSin = function(t) {
                        return 1 + Math.sin((Math.PI / 2) * t - Math.PI / 2);
                    }),
                    (this.easeOutSin = function(t) {
                        return Math.sin((Math.PI / 2) * t);
                    }),
                    (this.easeInOutSin = function(t) {
                        return (1 + Math.sin(Math.PI * t - Math.PI / 2)) / 2;
                    }),
                    (this.easeInElastic = function(t) {
                        return 0 === t ? t : (0.04 - 0.04 / t) * Math.sin(25 * t) + 1;
                    }),
                    (this.easeOutElastic = function(t) {
                        return ((0.04 * t) / --t) * Math.sin(25 * t);
                    }),
                    (this.easeInOutElastic = function(t) {
                        return (t -= 0.5) < 0 ?
                            (0.02 + 0.01 / t) * Math.sin(50 * t) :
                            (0.02 - 0.01 / t) * Math.sin(50 * t) + 1;
                    }),
                    (this.easeOutBack = function(t) {
                        return (t -= 1) * t * (2.70158 * t + 1.70158) + 1;
                    }),
                    (this.easeInCubic = function(t) {
                        return t * t * t;
                    }),
                    (this.easeOutCubic = function(t) {
                        return --t * t * t + 1;
                    }),
                    (this.easeInOutCubic = function(t) {
                        return t < 0.5 ?
                            4 * t * t * t :
                            (t - 1) * (2 * t - 2) * (2 * t - 2) + 1;
                    }),
                    (this.easeInQuart = function(t) {
                        return t * t * t * t;
                    }),
                    (this.easeOutQuart = function(t) {
                        return 1 - --t * t * t * t;
                    }),
                    (this.easeInOutQuart = function(t) {
                        return t < 0.5 ? 8 * t * t * t * t : 1 - 8 * --t * t * t * t;
                    }),
                    (this.easeInQuint = function(t) {
                        return t * t * t * t * t;
                    }),
                    (this.easeOutQuint = function(t) {
                        return 1 + --t * t * t * t * t;
                    }),
                    (this.easeInOutQuint = function(t) {
                        return t < 0.5 ?
                            16 * t * t * t * t * t :
                            1 + 16 * --t * t * t * t * t;
                    });
                }
            })();
        },
        function(t, e, i) {
            "use strict";
            const s = 1e-5,
                r = Math.abs;
            class n {
                constructor(t, e, i, s) {
                    (this.cp = new Float32Array(6)),
                    (this.cp[0] = 3 * t),
                    (this.cp[1] = 3 * (i - t) - this.cp[0]),
                    (this.cp[2] = 1 - this.cp[0] - this.cp[1]),
                    (this.cp[3] = 3 * e),
                    (this.cp[4] = 3 * (s - e) - this.cp[3]),
                    (this.cp[5] = 1 - this.cp[3] - this.cp[4]);
                }
                sampleCurveX(t) {
                    return ((this.cp[2] * t + this.cp[1]) * t + this.cp[0]) * t;
                }
                sampleCurveY(t) {
                    return ((this.cp[5] * t + this.cp[4]) * t + this.cp[3]) * t;
                }
                sampleCurveDerivativeX(t) {
                    return (3 * this.cp[2] * t + 2 * this.cp[1]) * t + this.cp[0];
                }
                solveCurveX(t) {
                    var e, i, n, o, a, h;
                    for (n = t, h = 0; h < 5; h++) {
                        if (((o = this.sampleCurveX(n) - t), r(o) < s)) return n;
                        if (((a = this.sampleCurveDerivativeX(n)), r(a) < s)) break;
                        n -= o / a;
                    }
                    if ((n = t) < (e = 0)) return e;
                    if (n > (i = 1)) return i;
                    for (; e < i;) {
                        if (((o = this.sampleCurveX(n)), r(o - t) < s)) return n;
                        t > o ? (e = n) : (i = n), (n = 0.5 * (i - e) + e);
                    }
                    return n;
                }
                solve(t) {
                    return this.sampleCurveY(this.solveCurveX(t));
                }
            }
            const o = /\d*\.?\d+/g;
            (n.fromCSSString = function(t) {
                let e = t.match(o);
                if (4 !== e.length)
                    throw `UnitBezier could not convert ${t} to cubic-bezier`;
                let i = e.map(Number),
                    s = new n(i[0], i[1], i[2], i[3]);
                return s.solve.bind(s);
            }),
            (t.exports = n);
        },
        function(t, e, i) {
            "use strict";
            const { map: s } = i(7),
                r = {};
            class n {
                constructor(t, e, i, s) {
                    (this.mass = t),
                    (this.stiffness = e),
                    (this.damping = i),
                    (this.initialVelocity = s),
                    (this.m_w0 = Math.sqrt(this.stiffness / this.mass)),
                    (this.m_zeta =
                        this.damping / (2 * Math.sqrt(this.stiffness * this.mass))),
                    this.m_zeta < 1 ?
                        ((this.m_wd =
                                this.m_w0 * Math.sqrt(1 - this.m_zeta * this.m_zeta)),
                            (this.m_A = 1),
                            (this.m_B =
                                (this.m_zeta * this.m_w0 - this.initialVelocity) / this.m_wd)) :
                        ((this.m_wd = 0),
                            (this.m_A = 1),
                            (this.m_B = -this.initialVelocity + this.m_w0));
                }
                solve(t) {
                    return (
                        1 -
                        (t =
                            this.m_zeta < 1 ?
                            Math.exp(-t * this.m_zeta * this.m_w0) *
                            (this.m_A * Math.cos(this.m_wd * t) +
                                this.m_B * Math.sin(this.m_wd * t)) :
                            (this.m_A + this.m_B * t) * Math.exp(-t * this.m_w0))
                    );
                }
            }
            const o = /\d*\.?\d+/g;
            (n.fromCSSString = function(t) {
                let e = t.match(o);
                if (4 !== e.length)
                    throw `SpringEasing could not convert ${cssString} to spring params`;
                let i = e.map(Number),
                    a = new n(...i);
                const h = a.solve.bind(a);
                let l = 0;
                let c = (function() {
                    if (r[t]) return r[t];
                    const e = 1 / 6;
                    let i,
                        s = 0;
                    for (;;) {
                        l += e;
                        if (1 === h(l)) {
                            if ((s++, s >= 16)) {
                                i = l * e;
                                break;
                            }
                        } else s = 0;
                    }
                    return (r[t] = i), r[t];
                })();
                return function(t) {
                    return 0 === t || 1 === t ? t : h(s(t, 0, 1, 0, c));
                };
            }),
            (t.exports = n);
        },
        function(t, e, i) {
            "use strict";
            t.exports = function(t, e) {
                if ("string" != typeof t) return t;
                try {
                    return (e || document).querySelector(t) || document.querySelector(t);
                } catch (t) {
                    return !1;
                }
            };
        },
        function(t, e, i) {
            "use strict";
            t.exports = class {
                constructor() {
                    (this.local = 0), (this.localUnclamped = 0), (this.lastPosition = 0);
                }
            };
        },
        function(t, e, i) {
            "use strict";
            t.exports = class {
                constructor(t, e) {
                    (this.a = t.top - e),
                    this.a < 0 && (this.a = t.top),
                        (this.b = t.top),
                        (this.d = t.bottom),
                        (this.c = Math.max(this.d - e, this.b));
                }
            };
        },
        function(t, e, i) {
            "use strict";
            const s = i(113),
                r = new(i(50))();
            class n {
                constructor(t) {
                    (this.group = t),
                    (this.data = {
                        target: null,
                        anchors: null,
                        metrics: this.group.metrics,
                    });
                }
                parseArray(t, e) {
                    return [this.parseExpression(t, e[0]), this.parseExpression(t, e[1])];
                }
                parseExpression(t, e) {
                    if (!e) return null;
                    if ("number" == typeof e) return e;
                    if ("string" != typeof e)
                        throw `Expression must be a string, received ${typeof e}: ${e}`;
                    return (
                        (this.data.target = t.controller.element),
                        (this.data.anchors = t.anchors),
                        (this.data.keyframe = t.keyframe),
                        this.group.anim.plugins.parser.reduce(
                            (i, s) => i || s.parseExpression.call(this, t, e),
                            null
                        ) || n._parse(e, this.data)
                    );
                }
                parseTimeValue(t, e) {
                    if ("number" == typeof e) return e;
                    let i = this.group.expressionParser.parseExpression(t, e);
                    return this.group.convertScrollPositionToTValue(i);
                }
                destroy() {
                    this.group = null;
                }
                static parse(t, e) {
                    return (
                        (e = e || {}) &&
                        (r.clear(),
                            e.target && r.add(e.target),
                            e.anchors && e.anchors.forEach((t) => r.add(t))),
                        (e.metrics = r),
                        n._parse(t, e)
                    );
                }
                static _parse(t, e) {
                    return s.Parse(t).execute(e);
                }
            }
            (n.programs = s.programs),
            "undefined" != typeof window && (window.ExpressionParser = n),
                (t.exports = n);
        },
        function(t, e, i) {
            "use strict";
            const s = i(3),
                r = i(7),
                n = {},
                o = {
                    smoothstep: (t, e, i) =>
                        (i = o.clamp((i - t) / (e - t), 0, 1)) * i * (3 - 2 * i),
                    deg: (t) => (180 * t) / Math.PI,
                    rad: (t) => (t * Math.PI) / 180,
                    random: (t, e) => Math.random() * (e - t) + t,
                    atan: Math.atan2,
                };
            Object.getOwnPropertyNames(Math).forEach((t) =>
                    o[t] ? null : (o[t.toLowerCase()] = Math[t])
                ),
                Object.getOwnPropertyNames(r).forEach((t) =>
                    o[t] ? null : (o[t.toLowerCase()] = r[t])
                );
            let a = null;
            const h = "a",
                l = "ALPHA",
                c = "(",
                u = ")",
                d = "PLUS",
                p = "MINUS",
                m = "MUL",
                f = "DIV",
                _ = "INTEGER_CONST",
                g = "FLOAT_CONST",
                y = ",",
                E = "EOF",
                v = {
                    NUMBERS: /\d|\d\.\d/,
                    DIGIT: /\d/,
                    OPERATOR: /[-+*/]/,
                    PAREN: /[()]/,
                    WHITE_SPACE: /\s/,
                    ALPHA: /[a-zA-Z]|%/,
                    ALPHANUMERIC: /[a-zA-Z0-9]/,
                    OBJECT_UNIT: /^(t|l|b|r|%w|%h|%|h|w)$/,
                    GLOBAL_METRICS_UNIT: /^(px|vh|vw)$/,
                    ANY_UNIT: /^(t|l|b|r|%w|%h|%|h|w|px|vh|vw)$/,
                    MATH_FUNCTION: new RegExp(`\\b(${Object.keys(o).join("|")})\\b`, "i"),
                },
                b = function(t, e, i, s = "") {
                    let r = e.slice(Math.max(i, 0), Math.min(e.length, i + 3)),
                        n = new Error(
                            `Expression Error. ${t} in expression "${e}", near "${r}"`
                        );
                    throw (console.error(n.message, a ? a.keyframe || a.target : ""), n);
                },
                w = {
                    round: 1,
                    clamp: 3,
                    lerp: 3,
                    random: 2,
                    atan: 2,
                    floor: 1,
                    ceil: 1,
                    abs: 1,
                    cos: 1,
                    sin: 1,
                    smoothstep: 3,
                    rad: 1,
                    deg: 1,
                    pow: 2,
                    calc: 1,
                };
            class T {
                constructor(t, e) {
                    (this.type = t), (this.value = e);
                }
            }
            (T.ONE = new T("100", 100)), (T.EOF = new T(E, null));
            class x {
                constructor(t) {
                    this.type = t;
                }
            }
            class A extends x {
                constructor(t, e) {
                    super("UnaryOp"), (this.token = this.op = t), (this.expr = e);
                }
            }
            class I extends x {
                constructor(t, e, i) {
                    super("BinOp"), (this.left = t), (this.op = e), (this.right = i);
                }
            }
            class S extends x {
                constructor(t, e) {
                    if (
                        (super("MathOp"),
                            (this.op = t),
                            (this.list = e),
                            w[t.value] && e.length !== w[t.value])
                    )
                        throw new Error(
                            `Incorrect number of arguments for '${t.value}'. Received ${
              e.length
            }, expected ${w[t.value]}`
                        );
                }
            }
            class P extends x {
                constructor(t) {
                    super("Num"), (this.token = t), (this.value = t.value);
                }
            }
            class C extends x {
                constructor(t, e, i) {
                    super("RefValue"), (this.num = t), (this.ref = e), (this.unit = i);
                }
            }
            class O extends x {
                constructor(t, e) {
                    super("CSSValue"), (this.ref = t), (this.propertyName = e);
                }
            }
            class M extends x {
                constructor(t, e) {
                    super("PropValue"), (this.ref = t), (this.propertyName = e);
                }
            }
            class D {
                constructor(t) {
                    let e;
                    for (
                        this.text = t,
                        this.pos = 0,
                        this.char = this.text[this.pos],
                        this.tokens = [];
                        (e = this.getNextToken()) && e !== T.EOF;

                    )
                        this.tokens.push(e);
                    this.tokens.push(e);
                }
                advance() {
                    this.char = this.text[++this.pos];
                }
                skipWhiteSpace() {
                    for (; null != this.char && v.WHITE_SPACE.test(this.char);)
                        this.advance();
                }
                name() {
                    let t = "";
                    for (; null != this.char && v.ALPHA.test(this.char);)
                        (t += this.char), this.advance();
                    return new T(l, t);
                }
                number() {
                    let t = "";
                    for (
                        "." === this.char && ((t += this.char), this.advance()); null != this.char && v.DIGIT.test(this.char);

                    )
                        (t += this.char), this.advance();
                    if (null != this.char && "." === this.char)
                        for (
                            t.includes(".") &&
                            b(
                                "Number appears to contain 2 decimal points",
                                this.text,
                                this.pos
                            ),
                            t += this.char,
                            this.advance(); null != this.char && v.DIGIT.test(this.char);

                        )
                            (t += this.char), this.advance();
                    return (
                        "." === t &&
                        b(
                            "Attempted to parse a number, but found only a decimal point",
                            this.text,
                            this.pos
                        ),
                        t.includes(".") ? new T(g, parseFloat(t)) : new T(_, parseInt(t))
                    );
                }
                getNextToken() {
                    for (; null != this.char;)
                        if (v.WHITE_SPACE.test(this.char)) this.skipWhiteSpace();
                        else {
                            if ("." === this.char || v.DIGIT.test(this.char))
                                return this.number();
                            if ("," === this.char) return this.advance(), new T(y, ",");
                            if (v.OPERATOR.test(this.char)) {
                                let t = "",
                                    e = this.char;
                                switch (e) {
                                    case "+":
                                        t = d;
                                        break;
                                    case "-":
                                        t = p;
                                        break;
                                    case "*":
                                        t = m;
                                        break;
                                    case "/":
                                        t = f;
                                }
                                return this.advance(), new T(t, e);
                            }
                            if (v.PAREN.test(this.char)) {
                                let t = "",
                                    e = this.char;
                                switch (e) {
                                    case "(":
                                        t = c;
                                        break;
                                    case ")":
                                        t = u;
                                }
                                return this.advance(), new T(t, e);
                            }
                            if (v.ALPHA.test(this.char)) return this.name();
                            b(`Unexpected character "${this.char}"`, this.text, this.pos);
                        }
                    return T.EOF;
                }
            }
            class R {
                constructor(t) {
                    (this.lexer = t), (this.pos = 0);
                }
                get currentToken() {
                    return this.lexer.tokens[this.pos];
                }
                error(t, e = "") {
                    b(t, e, this.lexer.text, this.pos);
                }
                consume(t) {
                    let e = this.currentToken;
                    return (
                        e.type === t ?
                        (this.pos += 1) :
                        this.error(
                            `Invalid token ${this.currentToken.value}, expected ${t}`
                        ),
                        e
                    );
                }
                consumeList(t) {
                    t.includes(this.currentToken) ?
                        (this.pos += 1) :
                        this.error(
                            `Invalid token ${this.currentToken.value}, expected ${tokenType}`
                        );
                }
                expr() {
                    let t = this.term();
                    for (; this.currentToken.type === d || this.currentToken.type === p;) {
                        const e = this.currentToken;
                        switch (e.value) {
                            case "+":
                                this.consume(d);
                                break;
                            case "-":
                                this.consume(p);
                        }
                        t = new I(t, e, this.term());
                    }
                    return t;
                }
                term() {
                    let t = this.factor();
                    for (; this.currentToken.type === m || this.currentToken.type === f;) {
                        const e = this.currentToken;
                        switch (e.value) {
                            case "*":
                                this.consume(m);
                                break;
                            case "/":
                                this.consume(f);
                        }
                        t = new I(t, e, this.factor());
                    }
                    return t;
                }
                factor() {
                    if (this.currentToken.type === d)
                        return new A(this.consume(d), this.factor());
                    if (this.currentToken.type === p)
                        return new A(this.consume(p), this.factor());
                    if (this.currentToken.type === _ || this.currentToken.type === g) {
                        let t = new P(this.currentToken);
                        if (
                            ((this.pos += 1),
                                v.OPERATOR.test(this.currentToken.value) ||
                                this.currentToken.type === u ||
                                this.currentToken.type === y ||
                                this.currentToken.type === E)
                        )
                            return t;
                        if (this.currentToken.type === l && this.currentToken.value === h)
                            return (
                                this.consume(l),
                                new C(t, this.anchorIndex(), this.unit(v.ANY_UNIT))
                            );
                        if (this.currentToken.type === l)
                            return (
                                "%a" === this.currentToken.value &&
                                this.error("%a is invalid, try removing the %"),
                                new C(t, null, this.unit())
                            );
                        this.error("Expected a scaling unit type", "Such as 'h' / 'w'");
                    } else {
                        if (v.OBJECT_UNIT.test(this.currentToken.value))
                            return new C(new P(T.ONE), null, this.unit());
                        if (this.currentToken.value === h) {
                            this.consume(l);
                            const t = this.anchorIndex();
                            if (v.OBJECT_UNIT.test(this.currentToken.value))
                                return new C(new P(T.ONE), t, this.unit());
                        } else if (this.currentToken.type === l) {
                            if ("calc" === this.currentToken.value)
                                return this.consume(l), this.expr();
                            if (
                                "css" === this.currentToken.value ||
                                "var" === this.currentToken.value ||
                                "prop" === this.currentToken.value
                            ) {
                                const t = "prop" !== this.currentToken.value ? O : M;
                                this.consume(l), this.consume(c);
                                const e = this.propertyName();
                                let i = null;
                                return (
                                    this.currentToken.type === y &&
                                    (this.consume(y), this.consume(l), (i = this.anchorIndex())),
                                    this.consume(u),
                                    new t(i, e)
                                );
                            }
                            if (v.MATH_FUNCTION.test(this.currentToken.value)) {
                                const t = this.currentToken.value.toLowerCase();
                                if ("number" == typeof o[t])
                                    return this.consume(l), new P(new T(l, o[t]));
                                const e = T[t] || new T(t, t),
                                    i = [];
                                this.consume(l), this.consume(c);
                                let s = null;
                                do {
                                    this.currentToken.value === y && this.consume(y),
                                        (s = this.expr()),
                                        i.push(s);
                                } while (this.currentToken.value === y);
                                return this.consume(u), new S(e, i);
                            }
                        } else if (this.currentToken.type === c) {
                            this.consume(c);
                            let t = this.expr();
                            return this.consume(u), t;
                        }
                    }
                    this.error(`Unexpected token ${this.currentToken.value}`);
                }
                propertyName() {
                    let t = "";
                    for (; this.currentToken.type === l || this.currentToken.type === p;)
                        (t += this.currentToken.value), (this.pos += 1);
                    return t;
                }
                unit(t = v.ANY_UNIT) {
                    const e = this.currentToken;
                    if (e.type === l && t.test(e.value))
                        return (
                            this.consume(l),
                            new T(
                                l,
                                (e.value = e.value.replace(/%(h|w)/, "$1").replace("%", "h"))
                            )
                        );
                    this.error("Expected unit type");
                }
                anchorIndex() {
                    const t = this.currentToken;
                    if (t.type === _) return this.consume(_), new P(t);
                    this.error(
                        "Invalid anchor reference",
                        ". Should be something like a0, a1, a2"
                    );
                }
                parse() {
                    const t = this.expr();
                    return (
                        this.currentToken !== T.EOF &&
                        this.error(`Unexpected token ${this.currentToken.value}`),
                        t
                    );
                }
            }
            class k {
                constructor(t) {
                    (this.parser = t), (this.root = t.parse());
                }
                visit(t) {
                    let e = this[t.type];
                    if (!e) throw new Error(`No visit method named, ${e}`);
                    return e.call(this, t);
                }
                BinOp(t) {
                    switch (t.op.type) {
                        case d:
                            return this.visit(t.left) + this.visit(t.right);
                        case p:
                            return this.visit(t.left) - this.visit(t.right);
                        case m:
                            return this.visit(t.left) * this.visit(t.right);
                        case f:
                            return this.visit(t.left) / this.visit(t.right);
                    }
                }
                RefValue(t) {
                    let e = this.unwrapReference(t),
                        i = t.unit.value,
                        r = t.num.value;
                    const n = a.metrics.get(e);
                    switch (i) {
                        case "h":
                            return 0.01 * r * n.height;
                        case "t":
                            return 0.01 * r * n.top;
                        case "vh":
                            return 0.01 * r * s.pageMetrics.windowHeight;
                        case "vw":
                            return 0.01 * r * s.pageMetrics.windowWidth;
                        case "px":
                            return r;
                        case "w":
                            return 0.01 * r * n.width;
                        case "b":
                            return 0.01 * r * n.bottom;
                        case "l":
                            return 0.01 * r * n.left;
                        case "r":
                            return 0.01 * r * n.right;
                    }
                }
                PropValue(t) {
                    return (null === t.ref ? a.target : a.anchors[t.ref.value])[
                        t.propertyName
                    ];
                }
                CSSValue(t) {
                    let e = this.unwrapReference(t);
                    const i = getComputedStyle(e).getPropertyValue(t.propertyName);
                    return "" === i ? 0 : k.Parse(i).execute(a);
                }
                Num(t) {
                    return t.value;
                }
                UnaryOp(t) {
                    return t.op.type === d ?
                        +this.visit(t.expr) :
                        t.op.type === p ?
                        -this.visit(t.expr) :
                        void 0;
                }
                MathOp(t) {
                    let e = t.list.map((t) => this.visit(t));
                    return o[t.op.value].apply(null, e);
                }
                unwrapReference(t) {
                    return null === t.ref ?
                        a.target :
                        (t.ref.value >= a.anchors.length &&
                            console.error(
                                `Not enough anchors supplied for expression ${this.parser.lexer.text}`,
                                a.target
                            ),
                            a.anchors[t.ref.value]);
                }
                execute(t) {
                    return (a = t), this.visit(this.root);
                }
                static Parse(t) {
                    return n[t] || (n[t] = new k(new R(new D(t))));
                }
            }
            (k.programs = n), (t.exports = k);
        },
        function(t, e, i) {
            "use strict";
            const s = i(3),
                r = i(13),
                n = (i(33), i(115)),
                o = i(49),
                a = (i(14), i(35)),
                h = i(116),
                l = i(34),
                c = i(46),
                u = i(4).EventEmitterMicro,
                d = i(51),
                p = {};
            "undefined" != typeof window &&
                ((p.update = i(8)), (p.external = i(20)), (p.draw = i(5)));
            const {
                transformAttributes: m,
                cssAttributes: f,
                domAttributes: _,
            } = i(47),
                g = Math.PI / 180,
                y = {
                    create: i(53),
                    rotateX: i(54),
                    rotateY: i(55),
                    rotateZ: i(56),
                    scale: i(57),
                };
            t.exports = class extends u {
                constructor(t, e) {
                    super(),
                        (this._events.draw = []),
                        (this.uuid = c()),
                        (this.group = t),
                        (this.element = e),
                        (this._ownerIsElement = this.element instanceof Element),
                        this._ownerIsElement ?
                        (this.friendlyName =
                            this.element.tagName +
                            "." +
                            Array.from(this.element.classList).join(".")) :
                        (this.friendlyName = this.element.friendlyName || this.uuid),
                        (this.element._animInfo = this.element._animInfo || new o(t, this)),
                        (this.element._animInfo.controller = this),
                        (this.element._animInfo.group = this.group),
                        this.element._animInfo.controllers.push(this),
                        (this.tweenProps = this.element._animInfo.tweenProps),
                        (this.eventObject = new n(this)),
                        (this.needsStyleUpdate = !1),
                        (this.needsClassUpdate = !1),
                        (this.elementMetrics = this.group.metrics.add(this.element)),
                        (this.attributes = []),
                        (this.cssAttributes = []),
                        (this.domAttributes = []),
                        (this.keyframes = {}),
                        (this._allKeyframes = []),
                        (this._activeKeyframes = []),
                        (this.keyframesRequiringDispatch = []),
                        this.updateCachedValuesFromElement(),
                        (this.boundsMin = 0),
                        (this.boundsMax = 0),
                        (this.mat2d = new Float32Array(6)),
                        (this.mat4 = y.create()),
                        (this.needsWrite = !0),
                        (this.onDOMWriteImp = this._ownerIsElement ?
                            this.onDOMWriteForElement :
                            this.onDOMWriteForObject);
                }
                destroy() {
                    if (this.element._animInfo) {
                        this.element._animInfo.controller === this &&
                            (this.element._animInfo.controller = null);
                        let t = this.element._animInfo.controllers.indexOf(this);
                        if (
                            (-1 !== t && this.element._animInfo.controllers.splice(t, 1),
                                0 === this.element._animInfo.controllers.length)
                        )
                            this.element._animInfo = null;
                        else {
                            let t = this.element._animInfo.controllers.find(
                                (t) => t.group !== t.group.anim.tweenGroup
                            );
                            t &&
                                ((this.element._animInfo.controller = t),
                                    (this.element._animInfo.group = t.group));
                        }
                    }
                    (this.eventObject.controller = null),
                    (this.eventObject.element = null),
                    (this.eventObject.keyframe = null),
                    (this.eventObject.tweenProps = null),
                    (this.eventObject = null),
                    (this.elementMetrics = null),
                    (this.group = null),
                    (this.keyframesRequiringDispatch = null);
                    for (let t = 0; t < this._allKeyframes.length; t++)
                        this._allKeyframes[t].destroy();
                    (this._allKeyframes = null),
                    (this._activeKeyframes = null),
                    (this.attributes = null),
                    (this.keyframes = null),
                    (this.element = null),
                    (this.tweenProps = null),
                    (this.destroyed = !0),
                    super.destroy();
                }
                remove() {
                    return this.group.removeKeyframeController(this);
                }
                updateCachedValuesFromElement() {
                    if (!this._ownerIsElement) return;
                    const t = this.getTargetComputedStyle(!0);
                    let e = new DOMMatrix(t.getPropertyValue("transform")),
                        i = d(e),
                        n = s.KeyframeDefaults.epsilon,
                        o = !1;
                    ["x", "y", "z"].forEach((t, e) => {
                            this.tweenProps[t] = new r(i.translation[e], n, o, t);
                        }),
                        (this.tweenProps.rotation = new r(i.rotation[2], n, o, "rotation")), ["rotationX", "rotationY", "rotationZ"].forEach((t, e) => {
                            this.tweenProps[t] = new r(i.rotation[e], n, o, t);
                        }),
                        (this.tweenProps.scale = new r(i.scale[0], n, o, "scale")), ["scaleX", "scaleY", "scaleZ"].forEach((t, e) => {
                            this.tweenProps[t] = new r(i.scale[e], n, o, t);
                        }),
                        _.forEach((t) => {
                            let e = isNaN(this.element[t]) ? 0 : this.element[t];
                            this.tweenProps[t] = new r(e, n, o, t, !1);
                        });
                }
                addKeyframe(t) {
                    let e = h(t);
                    if (!e)
                        throw new Error(
                            "AnimSystem Cannot create keyframe for from options `" + t + "`"
                        );
                    let i = new e(this, t);
                    return (
                        i.parseOptions(t),
                        (i.id = this._allKeyframes.length),
                        this._allKeyframes.push(i),
                        i
                    );
                }
                needsUpdate() {
                    for (let t = 0, e = this.attributes.length; t < e; t++) {
                        let e = this.attributes[t];
                        if (this.tweenProps[e].needsUpdate()) return !0;
                    }
                    return !1;
                }
                updateLocalProgress(t) {
                    for (let e = 0, i = this.attributes.length; e < i; e++) {
                        let i = this.attributes[e],
                            s = this.keyframes[this.attributes[e]];
                        if (1 === s.length) {
                            s[0].updateLocalProgress(t);
                            continue;
                        }
                        let r = this.getNearestKeyframeForAttribute(i, t);
                        r && r.updateLocalProgress(t);
                    }
                }
                reconcile() {
                    for (let t = 0, e = this.attributes.length; t < e; t++) {
                        let e = this.attributes[t],
                            i = this.getNearestKeyframeForAttribute(
                                e,
                                this.group.position.local
                            );
                        i.updateLocalProgress(this.group.position.local),
                            i.snapAtCreation && i.reconcile(e);
                    }
                }
                determineActiveKeyframes(t) {
                    t = t || l(Array.from(document.documentElement.classList));
                    let e = this._activeKeyframes,
                        i = this.attributes,
                        s = {};
                    (this._activeKeyframes = []),
                    (this.attributes = []),
                    (this.keyframes = {});
                    for (let e = 0; e < this._allKeyframes.length; e++) {
                        let i = this._allKeyframes[e];
                        if (i.markedForRemoval || i.hidden || !i.setEnabled(t))
                            for (let t in i.animValues)
                                (this.tweenProps[t].isActive = i.preserveState),
                                i.preserveState && (s[t] = !0);
                        else {
                            this._activeKeyframes.push(i);
                            for (let t in i.animValues)
                                (this.keyframes[t] = this.keyframes[t] || []),
                                this.keyframes[t].push(i), -1 === this.attributes.indexOf(t) &&
                                ((s[t] = !0),
                                    this.attributes.push(t),
                                    (this.tweenProps[t].isActive = !0));
                        }
                    }
                    this.attributes.forEach((t) => (this.tweenProps[t].isActive = !0)),
                        (this.cssAttributes = this.attributes
                            .filter((t) => f.includes(t) || t.startsWith("--"))
                            .map((t) => this.tweenProps[t])),
                        (this.domAttributes = this.attributes
                            .filter((t) => _.includes(t))
                            .map((t) => this.tweenProps[t]));
                    let r = e.filter((t) => -1 === this._activeKeyframes.indexOf(t));
                    if (0 === r.length) return;
                    let n = i.filter(
                        (t) => -1 === this.attributes.indexOf(t) && !s.hasOwnProperty(t)
                    );
                    if (0 !== n.length)
                        if (((this.needsWrite = !0), this._ownerIsElement))
                            p.external(() => {
                                let t = n.some((t) => m.includes(t)),
                                    e = t && Object.keys(s).some((t) => m.includes(t));
                                t && !e && this.element.style.removeProperty("transform");
                                for (let t = 0, e = n.length; t < e; ++t) {
                                    let e = n[t],
                                        i = this.tweenProps[e],
                                        s = i.isActive ? i.target : i.initialValue;
                                    (i.current = i.target = s), !i.isActive &&
                                        f.includes(e) &&
                                        (this.element.style[e] = null);
                                }
                                for (let t = 0, e = r.length; t < e; ++t) {
                                    let e = r[t];
                                    e instanceof a && !e.preserveState && e._unapply();
                                }
                            }, !0);
                        else
                            for (let t = 0, e = n.length; t < e; ++t) {
                                let e = this.tweenProps[n[t]];
                                (e.current = e.target), (e.isActive = !1);
                            }
                }
                onDOMRead(t) {
                    for (let e = 0, i = this.attributes.length; e < i; e++) {
                        let i = this.attributes[e],
                            s = this.getNearestKeyframeForAttribute(i, t);
                        s && s.onDOMRead(i) && (this.needsWrite = !0);
                    }
                }
                onDOMWrite() {
                    (this.needsWrite || this.needsClassUpdate || this.needsStyleUpdate) &&
                    ((this.needsWrite = !1),
                        this.onDOMWriteImp(),
                        this.handleEventDispatch());
                }
                onDOMWriteForObject() {
                    for (let t = 0, e = this.attributes.length; t < e; t++) {
                        let e = this.attributes[t];
                        this.element[e] = this.tweenProps[e].current;
                    }
                }
                onDOMWriteForElement(t = this.element.style) {
                    this.handleStyleTransform(t);
                    for (let e = 0, i = this.cssAttributes.length; e < i; e++)
                        this.cssAttributes[e].set(t);
                    for (let t = 0, e = this.domAttributes.length; t < e; t++)
                        this.domAttributes[t].set(this.element);
                    if (this.needsStyleUpdate) {
                        for (let t in this.tweenProps.targetStyles)
                            null !== this.tweenProps.targetStyles[t] &&
                            (this.element.style[t] = this.tweenProps.targetStyles[t]),
                            (this.tweenProps.targetStyles[t] = null);
                        this.needsStyleUpdate = !1;
                    }
                    this.needsClassUpdate &&
                        (this.tweenProps.targetClasses.add.length > 0 &&
                            this.element.classList.add.apply(
                                this.element.classList,
                                this.tweenProps.targetClasses.add
                            ),
                            this.tweenProps.targetClasses.remove.length > 0 &&
                            this.element.classList.remove.apply(
                                this.element.classList,
                                this.tweenProps.targetClasses.remove
                            ),
                            (this.tweenProps.targetClasses.add.length = 0),
                            (this.tweenProps.targetClasses.remove.length = 0),
                            (this.needsClassUpdate = !1));
                }
                handleStyleTransform(t = this.element.style) {
                    let e = this.tweenProps;
                    if (e.z.isActive || e.rotationX.isActive || e.rotationY.isActive) {
                        const i = this.mat4;
                        (i[0] = 1),
                        (i[1] = 0),
                        (i[2] = 0),
                        (i[3] = 0),
                        (i[4] = 0),
                        (i[5] = 1),
                        (i[6] = 0),
                        (i[7] = 0),
                        (i[8] = 0),
                        (i[9] = 0),
                        (i[10] = 1),
                        (i[11] = 0),
                        (i[12] = 0),
                        (i[13] = 0),
                        (i[14] = 0),
                        (i[15] = 1);
                        const s = e.x.current,
                            r = e.y.current,
                            n = e.z.current;
                        if (
                            ((i[12] = i[0] * s + i[4] * r + i[8] * n + i[12]),
                                (i[13] = i[1] * s + i[5] * r + i[9] * n + i[13]),
                                (i[14] = i[2] * s + i[6] * r + i[10] * n + i[14]),
                                (i[15] = i[3] * s + i[7] * r + i[11] * n + i[15]),
                                0 !== e.rotation.current || 0 !== e.rotationZ.current)
                        ) {
                            const t = (e.rotation.current || e.rotationZ.current) * g;
                            y.rotateZ(i, i, t);
                        }
                        if (0 !== e.rotationX.current) {
                            const t = e.rotationX.current * g;
                            y.rotateX(i, i, t);
                        }
                        if (0 !== e.rotationY.current) {
                            const t = e.rotationY.current * g;
                            y.rotateY(i, i, t);
                        }
                        (1 === e.scale.current &&
                            1 === e.scaleX.current &&
                            1 === e.scaleY.current) ||
                        y.scale(i, i, [e.scale.current, e.scale.current, 1]),
                            (t.transform =
                                "matrix3d(" +
                                i[0] +
                                "," +
                                i[1] +
                                "," +
                                i[2] +
                                "," +
                                i[3] +
                                "," +
                                i[4] +
                                "," +
                                i[5] +
                                "," +
                                i[6] +
                                "," +
                                i[7] +
                                "," +
                                i[8] +
                                "," +
                                i[9] +
                                "," +
                                i[10] +
                                "," +
                                i[11] +
                                "," +
                                i[12] +
                                "," +
                                i[13] +
                                "," +
                                i[14] +
                                "," +
                                i[15] +
                                ")");
                    } else if (
                        e.x.isActive ||
                        e.y.isActive ||
                        e.rotation.isActive ||
                        e.rotationZ.isActive ||
                        e.scale.isActive ||
                        e.scaleX.isActive ||
                        e.scaleY.isActive
                    ) {
                        const i = this.mat2d;
                        (i[0] = 1),
                        (i[1] = 0),
                        (i[2] = 0),
                        (i[3] = 1),
                        (i[4] = 0),
                        (i[5] = 0);
                        const s = e.x.current,
                            r = e.y.current,
                            n = i[0],
                            o = i[1],
                            a = i[2],
                            h = i[3],
                            l = i[4],
                            c = i[5];
                        if (
                            ((i[0] = n),
                                (i[1] = o),
                                (i[2] = a),
                                (i[3] = h),
                                (i[4] = n * s + a * r + l),
                                (i[5] = o * s + h * r + c),
                                0 !== e.rotation.current || 0 !== e.rotationZ.current)
                        ) {
                            const t = (e.rotation.current || e.rotationZ.current) * g,
                                s = i[0],
                                r = i[1],
                                n = i[2],
                                o = i[3],
                                a = i[4],
                                h = i[5],
                                l = Math.sin(t),
                                c = Math.cos(t);
                            (i[0] = s * c + n * l),
                            (i[1] = r * c + o * l),
                            (i[2] = s * -l + n * c),
                            (i[3] = r * -l + o * c),
                            (i[4] = a),
                            (i[5] = h);
                        }
                        e.scaleX.isActive || e.scaleY.isActive ?
                            ((i[0] = i[0] * e.scaleX.current),
                                (i[1] = i[1] * e.scaleX.current),
                                (i[2] = i[2] * e.scaleY.current),
                                (i[3] = i[3] * e.scaleY.current)) :
                            ((i[0] = i[0] * e.scale.current),
                                (i[1] = i[1] * e.scale.current),
                                (i[2] = i[2] * e.scale.current),
                                (i[3] = i[3] * e.scale.current)),
                            (t.transform =
                                "matrix(" +
                                i[0] +
                                ", " +
                                i[1] +
                                ", " +
                                i[2] +
                                ", " +
                                i[3] +
                                ", " +
                                i[4] +
                                ", " +
                                i[5] +
                                ")");
                    }
                }
                handleEventDispatch() {
                    if (0 !== this.keyframesRequiringDispatch.length) {
                        for (
                            let t = 0, e = this.keyframesRequiringDispatch.length; t < e; t++
                        ) {
                            let e = this.keyframesRequiringDispatch[t];
                            (e.needsEventDispatch = !1),
                            (this.eventObject.keyframe = e),
                            (this.eventObject.pageMetrics = s.pageMetrics),
                            (this.eventObject.event = e.event),
                            this.trigger(e.event, this.eventObject);
                        }
                        this.keyframesRequiringDispatch.length = 0;
                    }
                    if (0 !== this._events.draw.length) {
                        (this.eventObject.keyframe = null), (this.eventObject.event = "draw");
                        for (let t = this._events.draw.length - 1; t >= 0; t--)
                            this._events.draw[t](this.eventObject);
                    }
                }
                updateAnimationConstraints() {
                    for (let t = 0, e = this._activeKeyframes.length; t < e; t++)
                        this._activeKeyframes[t].evaluateConstraints();
                    this.attributes.forEach((t) => {
                            1 !== this.keyframes[t].length &&
                                this.keyframes[t].sort(s.KeyframeComparison);
                        }),
                        this.updateDeferredPropertyValues();
                }
                refreshMetrics() {
                    let t = new Set([this.element]);
                    this._allKeyframes.forEach((e) => e.anchors.forEach((e) => t.add(e))),
                        this.group.metrics.refreshCollection(t),
                        (this.group.keyframesDirty = !0);
                }
                getTargetComputedStyle(t = !1) {
                    return this._ownerIsElement ?
                        ((t || void 0 === this.group.computedStyleCache[this.uuid]) &&
                            (this.group.computedStyleCache[this.uuid] = getComputedStyle(
                                this.element
                            )),
                            this.group.computedStyleCache[this.uuid]) :
                        null;
                }
                updateDeferredPropertyValues() {
                    for (let t = 0, e = this.attributes.length; t < e; t++) {
                        let e = this.attributes[t],
                            i = this.keyframes[e];
                        if (!(i[0].keyframeType > s.KeyframeTypes.InterpolationForward))
                            for (let t = 0, s = i.length; t < s; t++) {
                                let r = i[t];
                                null === r.jsonProps[e][0] &&
                                    (0 === t ?
                                        (r.jsonProps[e][0] = r.animValues[e][0] =
                                            this.tweenProps[e].current) :
                                        (r.animValues[e][0] = i[t - 1].animValues[e][1])),
                                    null === r.jsonProps[e][1] &&
                                    (r.animValues[e][1] =
                                        t === s - 1 ?
                                        this.tweenProps[e].current :
                                        i[t + 1].animValues[e][0]),
                                    r.snapAtCreation &&
                                    ((r.jsonProps[e][0] = r.animValues[e][0]),
                                        (r.jsonProps[e][1] = r.animValues[e][1]));
                            }
                    }
                }
                getBounds(t) {
                    (this.boundsMin = Number.MAX_VALUE),
                    (this.boundsMax = -Number.MAX_VALUE);
                    for (let e = 0, i = this.attributes.length; e < i; e++) {
                        let i = this.keyframes[this.attributes[e]];
                        for (let e = 0; e < i.length; e++) {
                            let s = i[e];
                            (this.boundsMin = Math.min(s.start, this.boundsMin)),
                            (this.boundsMax = Math.max(s.end, this.boundsMax)),
                            (t.min = Math.min(s.start, t.min)),
                            (t.max = Math.max(s.end, t.max));
                        }
                    }
                }
                getNearestKeyframeForAttribute(t, e) {
                    e = void 0 !== e ? e : this.group.position.local;
                    let i = null,
                        s = Number.POSITIVE_INFINITY,
                        r = this.keyframes[t];
                    if (void 0 === r) return null;
                    let n = r.length;
                    if (0 === n) return null;
                    if (1 === n) return r[0];
                    for (let t = 0; t < n; t++) {
                        let n = r[t];
                        if (n.isInRange(e)) {
                            i = n;
                            break;
                        }
                        let o = Math.min(Math.abs(e - n.start), Math.abs(e - n.end));
                        o < s && ((s = o), (i = n));
                    }
                    return i;
                }
                getAllKeyframesForAttribute(t) {
                    return this.keyframes[t];
                }
                updateKeyframe(t, e) {
                    t.parseOptions(e),
                        t.evaluateConstraints(),
                        (this.group.keyframesDirty = !0),
                        p.update(() => {
                            this.trigger(s.EVENTS.ON_KEYFRAME_UPDATED, t),
                                this.group.trigger(s.EVENTS.ON_KEYFRAME_UPDATED, t);
                        }, !0);
                }
                removeKeyframe(t) {
                    return t.controller !== this ?
                        Promise.resolve(null) :
                        ((t.markedForRemoval = !0),
                            (this.group.keyframesDirty = !0),
                            new Promise((e) => {
                                this.group.rafEmitter.executor.eventEmitter.once(
                                    "before:draw",
                                    () => {
                                        e(t), t.destroy();
                                        let i = this._allKeyframes.indexOf(t); -
                                        1 !== i && this._allKeyframes.splice(i, 1);
                                    }
                                );
                            }));
                }
                updateAnimation(t, e) {
                    return (
                        this.group.gui &&
                        console.warn(
                            "KeyframeController.updateAnimation(keyframe,props) has been deprecated. Please use updateKeyframe(keyframe,props)"
                        ),
                        this.updateKeyframe(t, e)
                    );
                }
            };
        },
        function(t, e, i) {
            "use strict";
            t.exports = class {
                constructor(t) {
                    (this.controller = t),
                    (this.element = this.controller.element),
                    (this.keyframe = null),
                    (this.event = ""),
                    (this.tweenProps = this.controller.tweenProps);
                }
            };
        },
        function(t, e, i) {
            "use strict";
            const s = i(3),
                r = i(14),
                n = i(48),
                o = i(35),
                a = function(t) {
                    for (let e in t) {
                        let i = t[e];
                        if (-1 === s.KeyframeJSONReservedWords.indexOf(e) && Array.isArray(i))
                            return !0;
                    }
                    return !1;
                };
            t.exports = function(t) {
                if (void 0 !== t.cssClass || void 0 !== t.style) {
                    if (a(t))
                        throw "CSS Keyframes cannot tween values, please use multiple keyframes instead";
                    return o;
                }
                if (a(t)) return r;
                if (t.event) return n;
                throw (
                    (delete t.anchors,
                        `Could not determine tween type based on ${JSON.stringify(t)}`)
                );
            };
        },
        function(t, e, i) {
            "use strict";
            var s = i(118),
                r = function(t) {
                    (this.phase = t),
                    (this.rafEmitter = new s()),
                    this._cachePhaseIndex(),
                        (this.requestAnimationFrame = this.requestAnimationFrame.bind(this)),
                        (this.cancelAnimationFrame = this.cancelAnimationFrame.bind(this)),
                        (this._onBeforeRAFExecutorStart =
                            this._onBeforeRAFExecutorStart.bind(this)),
                        (this._onBeforeRAFExecutorPhase =
                            this._onBeforeRAFExecutorPhase.bind(this)),
                        (this._onAfterRAFExecutorPhase =
                            this._onAfterRAFExecutorPhase.bind(this)),
                        this.rafEmitter.on(this.phase, this._onRAFExecuted.bind(this)),
                        this.rafEmitter.executor.eventEmitter.on(
                            "before:start",
                            this._onBeforeRAFExecutorStart
                        ),
                        this.rafEmitter.executor.eventEmitter.on(
                            "before:" + this.phase,
                            this._onBeforeRAFExecutorPhase
                        ),
                        this.rafEmitter.executor.eventEmitter.on(
                            "after:" + this.phase,
                            this._onAfterRAFExecutorPhase
                        ),
                        (this._frameCallbacks = []),
                        (this._currentFrameCallbacks = []),
                        (this._nextFrameCallbacks = []),
                        (this._phaseActive = !1),
                        (this._currentFrameID = -1),
                        (this._cancelFrameIdx = -1),
                        (this._frameCallbackLength = 0),
                        (this._currentFrameCallbacksLength = 0),
                        (this._nextFrameCallbacksLength = 0),
                        (this._frameCallbackIteration = 0);
                },
                n = r.prototype;
            (n.requestAnimationFrame = function(t, e) {
                return (!0 === e &&
                    this.rafEmitter.executor.phaseIndex > 0 &&
                    this.rafEmitter.executor.phaseIndex <= this.phaseIndex ?
                    this._phaseActive ?
                    ((this._currentFrameID =
                            this.rafEmitter.executor.subscribeImmediate(
                                this.rafEmitter, !0
                            )),
                        this._frameCallbacks.push(this._currentFrameID, t),
                        (this._frameCallbackLength += 2)) :
                    ((this._currentFrameID =
                            this.rafEmitter.executor.subscribeImmediate(
                                this.rafEmitter, !1
                            )),
                        this._currentFrameCallbacks.push(this._currentFrameID, t),
                        (this._currentFrameCallbacksLength += 2)) :
                    ((this._currentFrameID = this.rafEmitter.run()),
                        this._nextFrameCallbacks.push(this._currentFrameID, t),
                        (this._nextFrameCallbacksLength += 2)),
                    this._currentFrameID
                );
            }),
            (n.cancelAnimationFrame = function(t) {
                (this._cancelFrameIdx = this._nextFrameCallbacks.indexOf(t)),
                this._cancelFrameIdx > -1 ?
                    this._cancelNextAnimationFrame() :
                    ((this._cancelFrameIdx = this._currentFrameCallbacks.indexOf(t)),
                        this._cancelFrameIdx > -1 ?
                        this._cancelCurrentAnimationFrame() :
                        ((this._cancelFrameIdx = this._frameCallbacks.indexOf(t)),
                            this._cancelFrameIdx > -1 &&
                            this._cancelRunningAnimationFrame()));
            }),
            (n._onRAFExecuted = function(t) {
                for (
                    this._frameCallbackIteration = 0; this._frameCallbackIteration < this._frameCallbackLength; this._frameCallbackIteration += 2
                )
                    this._frameCallbacks[this._frameCallbackIteration + 1](t.time, t);
                (this._frameCallbacks.length = 0), (this._frameCallbackLength = 0);
            }),
            (n._onBeforeRAFExecutorStart = function() {
                Array.prototype.push.apply(
                        this._currentFrameCallbacks,
                        this._nextFrameCallbacks.splice(0, this._nextFrameCallbacksLength)
                    ),
                    (this._currentFrameCallbacksLength = this._nextFrameCallbacksLength),
                    (this._nextFrameCallbacks.length = 0),
                    (this._nextFrameCallbacksLength = 0);
            }),
            (n._onBeforeRAFExecutorPhase = function() {
                (this._phaseActive = !0),
                Array.prototype.push.apply(
                        this._frameCallbacks,
                        this._currentFrameCallbacks.splice(
                            0,
                            this._currentFrameCallbacksLength
                        )
                    ),
                    (this._frameCallbackLength = this._currentFrameCallbacksLength),
                    (this._currentFrameCallbacks.length = 0),
                    (this._currentFrameCallbacksLength = 0);
            }),
            (n._onAfterRAFExecutorPhase = function() {
                this._phaseActive = !1;
            }),
            (n._cachePhaseIndex = function() {
                this.phaseIndex = this.rafEmitter.executor.phases.indexOf(this.phase);
            }),
            (n._cancelRunningAnimationFrame = function() {
                this._frameCallbacks.splice(this._cancelFrameIdx, 2),
                    (this._frameCallbackLength -= 2);
            }),
            (n._cancelCurrentAnimationFrame = function() {
                this._currentFrameCallbacks.splice(this._cancelFrameIdx, 2),
                    (this._currentFrameCallbacksLength -= 2);
            }),
            (n._cancelNextAnimationFrame = function() {
                this._nextFrameCallbacks.splice(this._cancelFrameIdx, 2),
                    (this._nextFrameCallbacksLength -= 2),
                    0 === this._nextFrameCallbacksLength && this.rafEmitter.cancel();
            }),
            (t.exports = r);
        },
        function(t, e, i) {
            "use strict";
            var s = i(11),
                r = function(t) {
                    s.call(this, t);
                };
            ((r.prototype = Object.create(s.prototype))._subscribe = function() {
                return this.executor.subscribe(this, !0);
            }),
            (t.exports = r);
        },
        function(t, e, i) {
            "use strict";
            var s = i(19).SharedInstance,
                r = i(52).majorVersionNumber,
                n = i(121);
            t.exports = s.share(
                "@marcom/ac-raf-emitter/sharedRAFExecutorInstance",
                r,
                n
            );
        },
        function(t, e, i) {
            "use strict";
            var s,
                r = window,
                n = r.AC,
                o =
                ((s = {}), {
                    get: function(t, e) {
                        var i = null;
                        return s[t] && s[t][e] && (i = s[t][e]), i;
                    },
                    set: function(t, e, i) {
                        return (
                            s[t] || (s[t] = {}),
                            (s[t][e] = "function" == typeof i ? new i() : i),
                            s[t][e]
                        );
                    },
                    share: function(t, e, i) {
                        var s = this.get(t, e);
                        return s || (s = this.set(t, e, i)), s;
                    },
                    remove: function(t, e) {
                        var i = typeof e;
                        if ("string" !== i && "number" !== i) s[t] && (s[t] = null);
                        else {
                            if (!s[t] || !s[t][e]) return;
                            s[t][e] = null;
                        }
                    },
                });
            n || (n = r.AC = {}),
                n.SharedInstance || (n.SharedInstance = o),
                (t.exports = n.SharedInstance);
        },
        function(t, e, i) {
            "use strict";
            var s,
                r = i(18);

            function n(t) {
                (t = t || {}),
                this._reset(),
                    this.updatePhases(),
                    (this.eventEmitter = new r()),
                    (this._willRun = !1),
                    (this._totalSubscribeCount = -1),
                    (this._requestAnimationFrame = window.requestAnimationFrame),
                    (this._cancelAnimationFrame = window.cancelAnimationFrame),
                    (this._boundOnAnimationFrame = this._onAnimationFrame.bind(this)),
                    (this._boundOnExternalAnimationFrame =
                        this._onExternalAnimationFrame.bind(this));
            }
            ((s = n.prototype).frameRequestedPhase = "requested"),
            (s.startPhase = "start"),
            (s.runPhases = ["update", "external", "draw"]),
            (s.endPhase = "end"),
            (s.disabledPhase = "disabled"),
            (s.beforePhaseEventPrefix = "before:"),
            (s.afterPhaseEventPrefix = "after:"),
            (s.subscribe = function(t, e) {
                return (
                    this._totalSubscribeCount++,
                    this._nextFrameSubscribers[t.id] ||
                    (e ?
                        this._nextFrameSubscribersOrder.unshift(t.id) :
                        this._nextFrameSubscribersOrder.push(t.id),
                        (this._nextFrameSubscribers[t.id] = t),
                        this._nextFrameSubscriberArrayLength++,
                        this._nextFrameSubscriberCount++,
                        this._run()),
                    this._totalSubscribeCount
                );
            }),
            (s.subscribeImmediate = function(t, e) {
                return (
                    this._totalSubscribeCount++,
                    this._subscribers[t.id] ||
                    (e ?
                        this._subscribersOrder.splice(
                            this._currentSubscriberIndex + 1,
                            0,
                            t.id
                        ) :
                        this._subscribersOrder.unshift(t.id),
                        (this._subscribers[t.id] = t),
                        this._subscriberArrayLength++,
                        this._subscriberCount++),
                    this._totalSubscribeCount
                );
            }),
            (s.unsubscribe = function(t) {
                return (!!this._nextFrameSubscribers[t.id] &&
                    ((this._nextFrameSubscribers[t.id] = null),
                        this._nextFrameSubscriberCount--,
                        0 === this._nextFrameSubscriberCount && this._cancel(), !0)
                );
            }),
            (s.getSubscribeID = function() {
                return (this._totalSubscribeCount += 1);
            }),
            (s.destroy = function() {
                var t = this._cancel();
                return (
                    this.eventEmitter.destroy(),
                    (this.eventEmitter = null),
                    (this.phases = null),
                    (this._subscribers = null),
                    (this._subscribersOrder = null),
                    (this._nextFrameSubscribers = null),
                    (this._nextFrameSubscribersOrder = null),
                    (this._rafData = null),
                    (this._boundOnAnimationFrame = null),
                    (this._onExternalAnimationFrame = null),
                    t
                );
            }),
            (s.useExternalAnimationFrame = function(t) {
                if ("boolean" == typeof t) {
                    var e = this._isUsingExternalAnimationFrame;
                    return (
                        t &&
                        this._animationFrame &&
                        (this._cancelAnimationFrame.call(window, this._animationFrame),
                            (this._animationFrame = null)), !this._willRun ||
                        t ||
                        this._animationFrame ||
                        (this._animationFrame = this._requestAnimationFrame.call(
                            window,
                            this._boundOnAnimationFrame
                        )),
                        (this._isUsingExternalAnimationFrame = t),
                        t ? this._boundOnExternalAnimationFrame : e || !1
                    );
                }
            }),
            (s.updatePhases = function() {
                this.phases || (this.phases = []),
                    (this.phases.length = 0),
                    this.phases.push(this.frameRequestedPhase),
                    this.phases.push(this.startPhase),
                    Array.prototype.push.apply(this.phases, this.runPhases),
                    this.phases.push(this.endPhase),
                    (this._runPhasesLength = this.runPhases.length),
                    (this._phasesLength = this.phases.length);
            }),
            (s._run = function() {
                if (!this._willRun)
                    return (
                        (this._willRun = !0),
                        0 === this.lastFrameTime &&
                        (this.lastFrameTime = performance.now()),
                        (this._animationFrameActive = !0),
                        this._isUsingExternalAnimationFrame ||
                        (this._animationFrame = this._requestAnimationFrame.call(
                            window,
                            this._boundOnAnimationFrame
                        )),
                        this.phase === this.disabledPhase &&
                        ((this.phaseIndex = 0),
                            (this.phase = this.phases[this.phaseIndex])), !0
                    );
            }),
            (s._cancel = function() {
                var t = !1;
                return (
                    this._animationFrameActive &&
                    (this._animationFrame &&
                        (this._cancelAnimationFrame.call(window, this._animationFrame),
                            (this._animationFrame = null)),
                        (this._animationFrameActive = !1),
                        (this._willRun = !1),
                        (t = !0)),
                    this._isRunning || this._reset(),
                    t
                );
            }),
            (s._onAnimationFrame = function(t) {
                for (
                    this._subscribers = this._nextFrameSubscribers,
                    this._subscribersOrder = this._nextFrameSubscribersOrder,
                    this._subscriberArrayLength = this._nextFrameSubscriberArrayLength,
                    this._subscriberCount = this._nextFrameSubscriberCount,
                    this._nextFrameSubscribers = {},
                    this._nextFrameSubscribersOrder = [],
                    this._nextFrameSubscriberArrayLength = 0,
                    this._nextFrameSubscriberCount = 0,
                    this.phaseIndex = 0,
                    this.phase = this.phases[this.phaseIndex],
                    this._isRunning = !0,
                    this._willRun = !1,
                    this._didRequestNextRAF = !1,
                    this._rafData.delta = t - this.lastFrameTime,
                    this.lastFrameTime = t,
                    this._rafData.fps = 0,
                    this._rafData.delta >= 1e3 && (this._rafData.delta = 0),
                    0 !== this._rafData.delta &&
                    (this._rafData.fps = 1e3 / this._rafData.delta),
                    this._rafData.time = t,
                    this._rafData.naturalFps = this._rafData.fps,
                    this._rafData.timeNow = Date.now(),
                    this.phaseIndex++,
                    this.phase = this.phases[this.phaseIndex],
                    this.eventEmitter.trigger(this.beforePhaseEventPrefix + this.phase),
                    this._currentSubscriberIndex = 0; this._currentSubscriberIndex < this._subscriberArrayLength; this._currentSubscriberIndex++
                )
                    null !==
                    this._subscribers[
                        this._subscribersOrder[this._currentSubscriberIndex]
                    ] &&
                    !1 ===
                    this._subscribers[
                        this._subscribersOrder[this._currentSubscriberIndex]
                    ]._didDestroy &&
                    this._subscribers[
                        this._subscribersOrder[this._currentSubscriberIndex]
                    ]._onAnimationFrameStart(this._rafData);
                for (
                    this.eventEmitter.trigger(this.afterPhaseEventPrefix + this.phase),
                    this._runPhaseIndex = 0; this._runPhaseIndex < this._runPhasesLength; this._runPhaseIndex++
                ) {
                    for (
                        this.phaseIndex++,
                        this.phase = this.phases[this.phaseIndex],
                        this.eventEmitter.trigger(
                            this.beforePhaseEventPrefix + this.phase
                        ),
                        this._currentSubscriberIndex = 0; this._currentSubscriberIndex < this._subscriberArrayLength; this._currentSubscriberIndex++
                    )
                        null !==
                        this._subscribers[
                            this._subscribersOrder[this._currentSubscriberIndex]
                        ] &&
                        !1 ===
                        this._subscribers[
                            this._subscribersOrder[this._currentSubscriberIndex]
                        ]._didDestroy &&
                        this._subscribers[
                            this._subscribersOrder[this._currentSubscriberIndex]
                        ].trigger(this.phase, this._rafData);
                    this.eventEmitter.trigger(this.afterPhaseEventPrefix + this.phase);
                }
                for (
                    this.phaseIndex++,
                    this.phase = this.phases[this.phaseIndex],
                    this.eventEmitter.trigger(this.beforePhaseEventPrefix + this.phase),
                    this._currentSubscriberIndex = 0; this._currentSubscriberIndex < this._subscriberArrayLength; this._currentSubscriberIndex++
                )
                    null !==
                    this._subscribers[
                        this._subscribersOrder[this._currentSubscriberIndex]
                    ] &&
                    !1 ===
                    this._subscribers[
                        this._subscribersOrder[this._currentSubscriberIndex]
                    ]._didDestroy &&
                    this._subscribers[
                        this._subscribersOrder[this._currentSubscriberIndex]
                    ]._onAnimationFrameEnd(this._rafData);
                this.eventEmitter.trigger(this.afterPhaseEventPrefix + this.phase),
                    this._willRun ?
                    ((this.phaseIndex = 0),
                        (this.phaseIndex = this.phases[this.phaseIndex])) :
                    this._reset();
            }),
            (s._onExternalAnimationFrame = function(t) {
                this._isUsingExternalAnimationFrame && this._onAnimationFrame(t);
            }),
            (s._reset = function() {
                this._rafData || (this._rafData = {}),
                    (this._rafData.time = 0),
                    (this._rafData.delta = 0),
                    (this._rafData.fps = 0),
                    (this._rafData.naturalFps = 0),
                    (this._rafData.timeNow = 0),
                    (this._subscribers = {}),
                    (this._subscribersOrder = []),
                    (this._currentSubscriberIndex = -1),
                    (this._subscriberArrayLength = 0),
                    (this._subscriberCount = 0),
                    (this._nextFrameSubscribers = {}),
                    (this._nextFrameSubscribersOrder = []),
                    (this._nextFrameSubscriberArrayLength = 0),
                    (this._nextFrameSubscriberCount = 0),
                    (this._didEmitFrameData = !1),
                    (this._animationFrame = null),
                    (this._animationFrameActive = !1),
                    (this._isRunning = !1),
                    (this._shouldReset = !1),
                    (this.lastFrameTime = 0),
                    (this._runPhaseIndex = -1),
                    (this.phaseIndex = -1),
                    (this.phase = this.disabledPhase);
            }),
            (t.exports = n);
        },
        function(t, e, i) {
            "use strict";
            var s = i(19).SharedInstance,
                r = i(52).majorVersionNumber,
                n = function() {
                    this._currentID = 0;
                };
            (n.prototype.getNewID = function() {
                return this._currentID++, "raf:" + this._currentID;
            }),
            (t.exports = s.share(
                "@marcom/ac-raf-emitter/sharedRAFEmitterIDGeneratorInstance",
                r,
                n
            ));
        },
        function(t, e, i) {
            "use strict";
            const s = i(36),
                r = i(58),
                n = i(7);
            let o = 0;
            const a = {};
            "undefined" != typeof window && (a.create = i(11));
            class h extends s {
                constructor(t, e) {
                    t ||
                        ((t = document.createElement("div")).className = "TimeGroup-" + o++),
                        super(t, e),
                        (this.name = this.name || t.getAttribute("data-anim-time-group")),
                        (this._isPaused = !0),
                        (this._repeats = 0),
                        (this._isReversed = !1),
                        (this._timeScale = 1),
                        (this._chapterPlayer = new r(this)),
                        (this.now = performance.now());
                }
                finalizeInit() {
                    if (!this.anim)
                        throw "TimeGroup not instantiated correctly. Please use `AnimSystem.createTimeGroup(el)`";
                    (this.onPlayTimeUpdate = this.onPlayTimeUpdate.bind(this)),
                    super.finalizeInit();
                }
                progress(t) {
                    if (void 0 === t)
                        return 0 === this.boundsMax ?
                            0 :
                            this.position.local / this.boundsMax;
                    let e = t * this.boundsMax;
                    (this.timelineUpdateRequired = !0), this.updateTimeline(e);
                }
                time(t) {
                    if (void 0 === t) return this.position.local;
                    (t = n.clamp(t, this.boundsMin, this.duration)),
                    (this.timelineUpdateRequired = !0),
                    this.updateTimeline(t);
                }
                play(t) {
                    this.reversed(!1),
                        (this.isEnabled = !0),
                        (this._isPaused = !1),
                        this.time(t),
                        (this.now = performance.now()),
                        this._playheadEmitter.run();
                }
                reverse(t) {
                    this.reversed(!0),
                        (this.isEnabled = !0),
                        (this._isPaused = !1),
                        this.time(t),
                        (this.now = performance.now()),
                        this._playheadEmitter.run();
                }
                reversed(t) {
                    if (void 0 === t) return this._isReversed;
                    this._isReversed = t;
                }
                restart() {
                    this._isReversed ?
                        (this.progress(1), this.reverse(this.time())) :
                        (this.progress(0), this.play(this.time()));
                }
                pause(t) {
                    this.time(t), (this._isPaused = !0);
                }
                paused(t) {
                    return void 0 === t ?
                        this._isPaused :
                        ((this._isPaused = t), this._isPaused || this.play(), this);
                }
                onPlayTimeUpdate() {
                    if (this._isPaused) return;
                    let t = performance.now(),
                        e = (t - this.now) / 1e3;
                    (this.now = t), this._isReversed && (e = -e);
                    let i = this.time() + e * this._timeScale;
                    if (this._repeats === h.REPEAT_FOREVER || this._repeats > 0) {
                        let t = !1;
                        !this._isReversed && i > this.boundsMax ?
                            ((i -= this.boundsMax), (t = !0)) :
                            this._isReversed && i < 0 && ((i = this.boundsMax + i), (t = !0)),
                            t &&
                            (this._repeats =
                                this._repeats === h.REPEAT_FOREVER ?
                                h.REPEAT_FOREVER :
                                this._repeats - 1);
                    }
                    this.time(i);
                    let s = !this._isReversed && this.position.local !== this.duration,
                        r = this._isReversed && 0 !== this.position.local;
                    s || r ? this._playheadEmitter.run() : this.paused(!0);
                }
                updateProgress(t) {
                    this.hasDuration() ?
                        ((this.position.localUnclamped = t),
                            (this.position.local = n.clamp(
                                this.position.localUnclamped,
                                this.boundsMin,
                                this.boundsMax
                            ))) :
                        (this.position.local = this.position.localUnclamped = 0);
                }
                updateBounds() {
                    if (0 === this.keyframeControllers.length)
                        return (this.boundsMin = 0), void(this.boundsMax = 0);
                    let t = {
                        min: Number.POSITIVE_INFINITY,
                        max: Number.NEGATIVE_INFINITY,
                    };
                    for (let e = 0, i = this.keyframeControllers.length; e < i; e++)
                        this.keyframeControllers[e].getBounds(t);
                    (this.boundsMin = 0),
                    (this.boundsMax = t.max),
                    (this.viewableRange.a = this.viewableRange.b = 0),
                    (this.viewableRange.c = this.viewableRange.d = this.boundsMax),
                    (this.timelineUpdateRequired = !0);
                }
                setupRAFEmitter(t) {
                    (this._playheadEmitter = new a.create()),
                    this._playheadEmitter.on("update", this.onPlayTimeUpdate),
                        super.setupRAFEmitter(t);
                }
                get duration() {
                    return (
                        this.keyframesDirty && this.onKeyframesDirty({ silent: !0 }),
                        this.boundsMax
                    );
                }
                timeScale(t) {
                    return void 0 === t ? this._timeScale : ((this._timeScale = t), this);
                }
                repeats(t) {
                    if (void 0 === t) return this._repeats;
                    this._repeats = t;
                }
                getPosition() {
                    return this.position.local;
                }
                addChapter(t) {
                    return this._chapterPlayer.addChapter(t);
                }
                playToChapter(t) {
                    this._chapterPlayer.playToChapter(t);
                }
                convertScrollPositionToTValue(t) {
                    return t;
                }
                convertTValueToScrollPosition(t) {
                    return t;
                }
                hasDuration() {
                    return this.duration > 0;
                }
                destroy() {
                    this._playheadEmitter.destroy(),
                        (this._playheadEmitter = null),
                        super.destroy();
                }
                get timelineProgress() {
                    return this.progress();
                }
                set timelineProgress(t) {
                    this.progress(t);
                }
                get progressValue() {
                    return this.progress();
                }
                set progressValue(t) {
                    this.progress(t);
                }
                get timeValue() {
                    return this.time();
                }
                set timeValue(t) {
                    this.time(t);
                }
            }
            (h.REPEAT_FOREVER = -1), (t.exports = h);
        },
        function(t, e, i) {
            "use strict";
            const s = i(36),
                r = (i(58), i(7));
            let n = 0;
            const o = {};
            "undefined" != typeof window && (o.create = i(11));
            t.exports = class extends s {
                constructor(t, e) {
                    t ||
                        ((t = document.createElement("div")).className = "TweenGroup-" + n++),
                        super(t, e),
                        (this.name = "Tweens"),
                        (this.keyframes = []),
                        (this._isPaused = !1),
                        (this.now = performance.now());
                }
                finalizeInit() {
                    (this.onTimeEmitterUpdate = this.onTimeEmitterUpdate.bind(this)),
                    (this.removeExpiredKeyframeControllers =
                        this.removeExpiredKeyframeControllers.bind(this)),
                    super.finalizeInit();
                }
                destroy() {
                    this._timeEmitter.destroy(),
                        (this._timeEmitter = null),
                        (this._keyframes = []),
                        super.destroy();
                }
                setupRAFEmitter(t) {
                    (this.now = performance.now()),
                    (this._timeEmitter = new o.create()),
                    this._timeEmitter.on("update", this.onTimeEmitterUpdate),
                        this._timeEmitter.run(),
                        super.setupRAFEmitter(t);
                }
                addKeyframe(t, e) {
                    if (void 0 !== e.start || void 0 !== e.end)
                        throw Error(
                            "Tweens do not have a start or end, they can only have a duration. Consider using a TimeGroup instead"
                        );
                    if ("number" != typeof e.duration)
                        throw Error(
                            "Tween options.duration is undefined, or is not a number"
                        );
                    let i, s;
                    (e.start = (e.delay || 0) + this.position.localUnclamped),
                    (e.end = e.start + e.duration),
                    (e.preserveState = !0),
                    (e.snapAtCreation = !0),
                    t._animInfo &&
                        ((i = t._animInfo.group), (s = t._animInfo.controller));
                    let r = super.addKeyframe(t, e);
                    return (
                        (t._animInfo.group = i),
                        (t._animInfo.controller = s),
                        e.onStart &&
                        r.controller.once("draw", (t) => {
                            (t.keyframe = r), e.onStart(t), (t.keyframe = null);
                        }),
                        e.onDraw &&
                        r.controller.on("draw", (t) => {
                            (t.keyframe = r), e.onDraw(t), (t.keyframe = null);
                        }),
                        this.removeOverlappingProps(r),
                        this.keyframes.push(r),
                        this._timeEmitter.willRun() ||
                        ((this.now = performance.now()), this._timeEmitter.run()),
                        r
                    );
                }
                removeOverlappingProps(t) {
                    if (t.controller._allKeyframes.length <= 1) return;
                    let e = Object.keys(t.animValues),
                        i = t.controller;
                    for (let s = 0, r = i._allKeyframes.length; s < r; s++) {
                        const r = i._allKeyframes[s];
                        if (r === t) continue;
                        if (r.markedForRemoval) continue;
                        let n = Object.keys(r.animValues),
                            o = n.filter((t) => e.includes(t));
                        o.length !== n.length ?
                            o.forEach((t) => delete r.animValues[t]) :
                            (r.markedForRemoval = !0);
                    }
                }
                onTimeEmitterUpdate(t) {
                    if (this._isPaused || 0 === this.keyframeControllers.length) return;
                    let e = performance.now(),
                        i = (e - this.now) / 1e3;
                    this.now = e;
                    let s = this.position.local + i;
                    (this.position.local = this.position.localUnclamped = s),
                    this.onTimeUpdate();
                }
                onTimeUpdate() {
                    for (let t = 0, e = this.keyframes.length; t < e; t++)
                        this.keyframes[t].updateLocalProgress(this.position.localUnclamped);
                    this.requestDOMChange(),
                        this._timeEmitter.run(),
                        null !== this.gui && this.gui.onScrollUpdate(this.position);
                }
                onDOMRead() {
                    if (
                        (this.keyframesDirty && this.onKeyframesDirty(),
                            0 !== this.keyframes.length)
                    )
                        for (let t = 0, e = this.keyframes.length; t < e; t++) {
                            this.keyframes[t].controller.needsWrite = !0;
                            for (let e in this.keyframes[t].animValues)
                                this.keyframes[t].onDOMRead(e);
                        }
                }
                onDOMWrite() {
                    super.onDOMWrite(), this.removeExpiredKeyframes();
                }
                removeExpiredKeyframes() {
                    let t = this.keyframes.length,
                        e = t;
                    for (; t--;) {
                        let e = this.keyframes[t];
                        e.destroyed ?
                            this.keyframes.splice(t, 1) :
                            (e.markedForRemoval &&
                                (e.jsonProps.onComplete &&
                                    1 === e.localT &&
                                    ((e.controller.eventObject.keyframe = e),
                                        e.jsonProps.onComplete(e.controller.eventObject),
                                        (e.jsonProps.onComplete = null)),
                                    (null !== this.gui && this.gui.isDraggingPlayhead) ||
                                    (e.remove(), this.keyframes.splice(t, 1))),
                                1 === e.localT && (e.markedForRemoval = !0));
                    }
                    (this.keyframes.length === e && 0 !== this.keyframes.length) ||
                    this._timeEmitter.executor.eventEmitter.once(
                        "after:draw",
                        this.removeExpiredKeyframeControllers
                    );
                }
                removeExpiredKeyframeControllers() {
                    for (let t = 0, e = this.keyframeControllers.length; t < e; t++) {
                        let e = !0,
                            i = this.keyframeControllers[t];
                        for (let t = 0, s = i._allKeyframes.length; t < s; t++)
                            if (!i._allKeyframes[t].destroyed) {
                                e = !1;
                                break;
                            }
                        e && i.remove();
                    }
                }
                updateBounds() {
                    (this.boundsMin = Math.min(...this.keyframes.map((t) => t.start))),
                    (this.boundsMax = Math.max(...this.keyframes.map((t) => t.end)));
                }
                play() {
                    (this.isEnabled = !0),
                    (this._isPaused = !1),
                    (this.now = performance.now()),
                    this._timeEmitter.run();
                }
                pause() {
                    this._isPaused = !0;
                }
                paused() {
                    return this._isPaused;
                }
                time(t) {
                    if (void 0 === t) return this.position.local;
                    (this.position.local = this.position.localUnclamped =
                        r.clamp(t, this.boundsMin, this.boundsMax)),
                    this.onTimeUpdate();
                }
                performTimelineDispatch() {}
                hasDuration() {
                    return !0;
                }
                getPosition() {
                    return this.position.local;
                }
                updateProgress(t) {}
                get duration() {
                    return this.boundsMax;
                }
            };
        },
        function(t, e, i) {
            "use strict";
            t.exports = { version: "3.5.2", major: "3.x", majorMinor: "3.5" };
        },
        function(t, e, i) {
            "use strict";
            t.exports = {
                ConnectionGallery: i(127),
                InlineMedia: i(167),
                TileOverlay: i(187),
            };
        },
        function(t, e, i) {
            "use strict";
            const s = i(21),
                r = i(128),
                n = i(142),
                o = i(143),
                a = i(144),
                h = i(158),
                l = i(159),
                c = i(160),
                u = i(161),
                d = i(163),
                p = i(61),
                m = i(164),
                f = (t, e, i, s, r) => {
                    e =
                        window.innerWidth >= 735 || window.innerWidth <= 1068 || m() ? 1 : 2;
                    let n = t._items.length - 1,
                        o = i;
                    return (
                        i === n - e && ((t.lastSlide = !0), (o = n - e)),
                        t.currentIndex === n && ((t.lastSlide = !1), (o = n - e + s * r)),
                        o
                    );
                },
                _ = {
                    mounted() {
                        l.mounted.apply(this, arguments);
                    },
                    destroy() {
                        l.destroy.apply(this, arguments);
                    },
                    onPaddleNavSelected(t) {
                        if (this.clip && this.clip._isPlaying) return;
                        this.slideContainer.parentElement.scrollLeft = 0;
                        let e = t.currentTarget.className.includes("previous") ? -1 : 1;
                        (this.lastInteractionEvent = t), (this.lastSlide = !1);
                        let i = this.currentIndex + 1 * e;
                        (i = f(this, 1, i, e, 1)), this.animateToItem(i);
                    },
                    onItemChangeCompleted(t) {
                        this.lastSlide && (this.currentIndex = this._items.length - 1),
                            l.onItemChangeCompleted.apply(this, arguments);
                    },
                },
                g = {
                    created(t) {
                        h.created.apply(this, arguments);
                    },
                    destroy() {
                        h.destroy.apply(this, arguments);
                    },
                    handleIntersect() {
                        h.handleIntersect.apply(this, arguments);
                    },
                    onKeyDown(t) {
                        if (!(!this.isInView ||
                                this.inputHasFocus() ||
                                (this.clip && this.clip._isPlaying) ||
                                (37 !== t.keyCode && 39 !== t.keyCode)
                            )) {
                            let e = this.model.IsRTL ? -1 : 1,
                                i = 37 === t.keyCode ? -1 : 1;
                            this.lastInteractionEvent = t;
                            let s = this.currentIndex + i * e;
                            (s = f(this, 1, s, i, e)), this.animateToItem(s);
                        }
                    },
                    inputHasFocus() {
                        h.inputHasFocus.apply(this, arguments);
                    },
                    onItemChangeCompleted() {
                        this.lastSlide && (this.currentIndex = this._items.length - 1);
                    },
                },
                y = {
                    mounted() {
                        this._items.forEach((t, e) => {
                            t.el.addEventListener("focusin", (t) => {
                                if ("key" !== t.target.getAttribute("data-focus-method")) return;
                                (this.lastInteractionEvent = t), (this.currentIndex = e);
                                const i = this._items[e];
                                this.trigger(this.model.Events.ITEM_CHANGE_INITIATED, {
                                        gallery: this,
                                        next: i,
                                    }),
                                    this.trigger(this.model.Events.ITEM_CHANGE_OCCURRED, {
                                        gallery: this,
                                        current: i,
                                    }),
                                    this.trigger(this.model.Events.ITEM_CHANGE_COMPLETED, {
                                        gallery: this,
                                        current: i,
                                    });
                            });
                        });
                    },
                },
                E = {
                    wrapSlideItems() {
                        this.clampedIndex;
                    },
                };
            t.exports = class extends s {
                constructor(t) {
                    super(t);
                }
                createGallery() {
                    const t = {
                            beforeCreate() {
                                (this.model.duration = 1),
                                (this.model.PrefersReducedMotion =
                                    document.documentElement.classList.contains(
                                        "reduced-motion"
                                    )),
                                (this.model.IsRTL =
                                    "rtl" === document.documentElement.getAttribute("dir")),
                                (this.model.IsTouch =
                                    "ontouchstart" in document.documentElement);
                            },
                        },
                        e = n.combine([
                            { mixin: h, breakpointMask: "S" },
                            { mixin: g, breakpointMask: "ML" },
                        ]),
                        i = n.combine([
                            { mixin: l, breakpointMask: "S" },
                            { mixin: _, breakpointMask: "ML" },
                        ]),
                        s = r.withMixins(t, o, a, i, e, c, u, d, E, y);
                    this.removeSetAriaVisibilityOnChangeCompleted(s, [
                            "itemsCreated",
                            "onItemChangeCompleted",
                        ]),
                        (this.gallery = new s({ el: this.el }));
                }
                mounted() {
                    document.documentElement.classList.contains("text-zoom") ||
                        ((this._onTextZoomResize = this._onTextZoomResize.bind(this)),
                            window.addEventListener("resize:text-zoom", this._onTextZoomResize),
                            this.createGallery());
                }
                _onTextZoomResize(t) {
                    if (
                        (t.detail.originalSize === t.detail.currentSize &&
                            (this.gallery || this.createGallery()),
                            t.detail.originalSize < t.detail.currentSize && this.gallery)
                    )
                        try {
                            this.gallery.destroy(), (this.gallery = null);
                        } catch (t) {}
                }
                removeSetAriaVisibilityOnChangeCompleted(t, e) {
                    e.forEach((e) => {
                        let i = t.prototype[`__${e}`].indexOf(p[e]);
                        t.prototype[`__${e}`].splice(i, 1);
                    });
                }
                static IS_SUPPORTED() {
                    return document.documentElement.classList.contains("enhance-base-xp");
                }
            };
        },
        function(t, e, i) {
            "use strict";
            const s = i(18),
                r = i(129),
                n = i(131),
                o = i(132),
                a = i(133),
                h = i(134),
                l = i(135),
                c = i(136),
                u = i(61),
                d = [
                    "beforeCreate",
                    "created",
                    "beforeMount",
                    "createItems",
                    "itemsCreated",
                    "mounted",
                    "animateToItem",
                    "onItemChangeInitiated",
                    "onItemChangeOccurred",
                    "onItemChangeCompleted",
                    "onResizeImmediate",
                    "onBreakpointChange",
                    "onResizeDebounced",
                    "destroy",
                ];
            class p extends s {
                constructor(t) {
                    super(t),
                        (this.el = t.el),
                        (this.model = Object.assign({ options: t },
                            JSON.parse(JSON.stringify(r))
                        )),
                        (this.model.Item.ConstructorFunction = r.Item.ConstructorFunction),
                        (this._items = []),
                        (this.currentIndex = 0),
                        d.forEach((t) => {
                            this[t] = (...e) => {
                                this[`__${t}`] && this[`__${t}`].forEach((t) => t.apply(this, e));
                            };
                        });
                    const e = this.destroy;
                    (this.destroy = (...t) => {
                        e.apply(this, t), s.prototype.destroy.call(this);
                    }),
                    this.on(r.Events.ITEM_CHANGE_INITIATED, this.onItemChangeInitiated),
                        this.on(r.Events.ITEM_CHANGE_OCCURRED, this.onItemChangeOccurred),
                        this.on(r.Events.ITEM_CHANGE_COMPLETED, this.onItemChangeCompleted), ["beforeCreate", "created", "beforeMount", "createItems"].forEach(
                            (e) => this[e](t)
                        );
                }
            }
            (p.withMixins = (...t) => {
                const e = class extends p {},
                    i = e.prototype;
                return (
                    t.unshift(n, h, a),
                    t.push(l, u, o, c),
                    t.forEach((t) => {
                        for (const e in t)
                            d.includes(e) ?
                            ((i[`__${e}`] = i[`__${e}`] || []), i[`__${e}`].push(t[e])) :
                            (i[e] = t[e]);
                    }),
                    e
                );
            }),
            (t.exports = p);
        },
        function(t, e, i) {
            "use strict";
            t.exports = {
                PrefersReducedMotion: !1,
                IsRTL: !1,
                IsTouch: !1,
                Slide: { Selector: ".item-container", duration: 1 },
                Fade: { duration: 0.5 },
                Item: {
                    Selector: ".item-container .gallery-item",
                    ConstructorFunction: i(130),
                },
                DotNav: { Selector: ".dotnav" },
                PaddleNav: { Selector: ".paddlenav" },
                ChapterPlayer: { defaultEase: (t) => t },
                FadeCaptionOnChange: {
                    ItemSelector: ".captions-gallery [data-captions-gallery-item]",
                },
                TabNav: {
                    ItemSelector: ".tablist-wrapper li",
                    RoamingTabIndexSelector: "a",
                },
                SwipeDrag: {
                    DesktopSwipe: !1,
                    movementRateMultiplier: 1.5,
                    velocityMultiplier: 8,
                },
                Events: {
                    ITEM_CHANGE_INITIATED: "ITEM_CHANGE_INITIATED",
                    ITEM_CHANGE_OCCURRED: "ITEM_CHANGE_OCCURRED",
                    ITEM_CHANGE_COMPLETED: "ITEM_CHANGE_COMPLETED",
                },
            };
        },
        function(t, e, i) {
            "use strict";
            const s = i(4).EventEmitterMicro,
                r = {};
            "undefined" != typeof window && ((r.draw = i(5)), (r.cancelDraw = i(37)));
            t.exports = class extends s {
                constructor(t) {
                    super(),
                        (this._x = 0),
                        (this._y = 0),
                        (this._opacity = 0),
                        (this._width = 0),
                        (this._height = 0),
                        (this._zIndex = 0),
                        (this.index = t.index),
                        (this.el = t.el),
                        (this.applyDraw = this.applyDraw.bind(this)),
                        this.measure();
                }
                measure() {
                    const t = getComputedStyle(this.el);
                    (this._width = this.el.clientWidth),
                    (this._height = this.el.clientHeight),
                    (this._zIndex = parseInt(t.getPropertyValue("z-index"))),
                    (this._opacity = parseFloat(t.getPropertyValue("opacity")));
                }
                select() {
                    this.el.classList.add("current"), this.trigger("select", this);
                }
                deselect() {
                    this.el.classList.remove("current"), this.trigger("deselect", this);
                }
                progress(t) {}
                needsRedraw() {
                    r.cancelDraw(this._rafID), (this._rafID = r.draw(this.applyDraw, !0));
                }
                applyDraw() {
                    (this.el.style.zIndex = this._zIndex),
                    (this.el.style.opacity = this._opacity),
                    (this.el.style.transform = `translate(${this._x}px, ${this._y}px)`);
                }
                get id() {
                    return this.el.id;
                }
                get height() {
                    return this._height;
                }
                set height(t) {
                    (this._height = t), this.needsRedraw();
                }
                get width() {
                    return this._width;
                }
                set width(t) {
                    (this._width = t), this.needsRedraw();
                }
                get x() {
                    return this._x;
                }
                set x(t) {
                    (this._x = t), this.needsRedraw();
                }
                get y() {
                    return this._y;
                }
                set y(t) {
                    (this._y = t), this.needsRedraw();
                }
                get opacity() {
                    return this._opacity;
                }
                set opacity(t) {
                    (this._opacity = t), this.needsRedraw();
                }
                get zIndex() {
                    return this._zIndex;
                }
                set zIndex(t) {
                    (this._zIndex = t), this.needsRedraw();
                }
            };
        },
        function(t, e, i) {
            "use strict";
            t.exports = {
                beforeCreate() {
                    Object.defineProperties(this, {
                        currentItem: {
                            configurable: !0,
                            get: () => this._items[this.wrappedIndex(this.currentIndex)],
                        },
                    });
                },
                wrappedIndex(t) {
                    return (t %= this._items.length) < 0 ? this._items.length + t : t;
                },
                getItemForTrigger(t) {
                    return this._items.find((e) => e.id === t);
                },
            };
        },
        function(t, e, i) {
            "use strict";
            t.exports = {
                itemsCreated(t) {
                    this.model.options.gum ||
                        this._isVue ||
                        (this.anim.on("ON_RESIZE_IMMEDIATE", this.onResizeImmediate),
                            this.anim.on("ON_RESIZE_DEBOUNCED", this.onResizeDebounced),
                            this.anim.on("ON_BREAKPOINT_CHANGE", this.onBreakpointChange),
                            requestAnimationFrame(this.mounted));
                },
                destroy() {
                    this.model.options.gum ||
                        this._isVue ||
                        (this.anim.off("ON_RESIZE_IMMEDIATE", this.onResizeImmediate),
                            this.anim.off("ON_RESIZE_DEBOUNCED", this.onResizeDebounced),
                            this.anim.off("ON_BREAKPOINT_CHANGE", this.onBreakpointChange));
                },
            };
        },
        function(t, e, i) {
            "use strict";
            t.exports = {
                beforeCreate() {
                    document.body._animInfo &&
                        ((this.anim = document.body._animInfo.group.anim),
                            (this.model.pageMetrics = this.anim.model.pageMetrics));
                },
                addKeyframe(t) {
                    const e = t.el || this.el;
                    return (t.group || this.anim).addKeyframe(e, t);
                },
                addDiscreteEvent(t) {
                    t.event = t.event || "Generic-Event-Name-" + tmpUUID++;
                    let e = void 0 !== t.end && t.end !== t.start;
                    const i = this.addKeyframe(t);
                    return (
                        e ?
                        (t.onEnterOnce &&
                            i.controller.once(t.event + ":enter", t.onEnterOnce),
                            t.onExitOnce &&
                            i.controller.once(t.event + ":exit", t.onExitOnce),
                            t.onEnter && i.controller.on(t.event + ":enter", t.onEnter),
                            t.onExit && i.controller.on(t.event + ":exit", t.onExit)) :
                        (t.onEventOnce && i.controller.once(t.event, t.onEventOnce),
                            t.onEventReverseOnce &&
                            i.controller.once(t.event + ":reverse", t.onEventReverseOnce),
                            t.onEvent && i.controller.on(t.event, t.onEvent),
                            t.onEventReverse &&
                            i.controller.on(t.event + ":reverse", t.onEventReverse)),
                        i
                    );
                },
                addRAFLoop(t) {
                    let e = ["start", "end"];
                    if (!e.every((e) => t.hasOwnProperty(e)))
                        return void console.log(
                            "BubbleGum.BaseComponent::addRAFLoop required options are missing: " +
                            e.join(" ")
                        );
                    const i = new RAFEmitter.create();
                    i.on("update", t.onUpdate || noop),
                        i.on("draw", t.onDraw || noop),
                        i.on("draw", () => i.run());
                    const { onEnter: s, onExit: r } = t;
                    return (
                        (t.onEnter = () => {
                            i.run(), s && s();
                        }),
                        (t.onExit = () => {
                            i.cancel(), r && r();
                        }),
                        this.addDiscreteEvent(t)
                    );
                },
                addContinuousEvent(t) {
                    t.onDraw ||
                        console.log(
                            "BubbleGum.BaseComponent::addContinuousEvent required option `onDraw` is missing. Consider using a regular keyframe if you do not need a callback"
                        ),
                        (t.event = t.event || "Generic-Event-Name-" + tmpUUID++);
                    let e = this.addKeyframe(t);
                    return e.controller.on(t.event, t.onDraw), e;
                },
            };
        },
        function(t, e, i) {
            "use strict";
            t.exports = {
                beforeCreate() {
                    this.selections = {
                        initiated: { current: null, previous: null },
                        occurred: { current: null, previous: null },
                        completed: { current: null, previous: null },
                    };
                },
                onItemChangeInitiated(t) {
                    (this.selections.initiated.previous =
                        this.selections.initiated.current),
                    (this.selections.initiated.current = this.selections.initiated.next),
                    (this.selections.initiated.next = t.next);
                },
                onItemChangeOccurred(t) {
                    (this.selections.occurred.previous = t.previous =
                        this.selections.occurred.current),
                    (this.selections.occurred.current = t.current);
                },
                onItemChangeCompleted(t) {
                    (this.selections.completed.previous = t.previous =
                        this.selections.completed.current),
                    (this.selections.completed.current = t.current);
                },
            };
        },
        function(t, e, i) {
            "use strict";
            t.exports = {
                createItems(t) {
                    if (this._items.length) this.itemsCreated();
                    else {
                        if (!this.model.Item.ConstructorFunction)
                            throw new ReferenceError(
                                "MixinGallery::AutoCreateItems - this.model.Item.ConstructorFunction is null"
                            );
                        if (0 === this._items.length) {
                            (this._items = []),
                            Array.from(
                                this.el.querySelectorAll(this.model.Item.Selector)
                            ).forEach((t, e) => {
                                const i = new this.model.Item.ConstructorFunction({
                                    el: t,
                                    index: e,
                                });
                                this._items.push(i);
                            });
                            let t = this._items[this._items.length - 1];
                            for (let e = 0; e < this._items.length; e++) {
                                const i = this._items[e];
                                (i.prev = t), (i.next = this._items[e + 1]), (t = i);
                            }
                            t.next = this._items[0];
                        }
                        this.itemsCreated();
                    }
                },
            };
        },
        function(t, e, i) {
            "use strict";
            t.exports = {
                mounted() {
                    const t = this._items[this.wrappedIndex(this.currentIndex)],
                        e = this;
                    this.trigger(this.model.Events.ITEM_CHANGE_INITIATED, {
                            gallery: e,
                            next: t,
                        }),
                        this.trigger(this.model.Events.ITEM_CHANGE_OCCURRED, {
                            gallery: e,
                            current: t,
                        }),
                        this.trigger(this.model.Events.ITEM_CHANGE_COMPLETED, {
                            gallery: e,
                            current: t,
                        });
                },
            };
        },
        function(t, e, i) {
            "use strict";
            var s = i(62),
                r = i(138),
                n = "data-original-",
                o = "tabindex",
                a = function(t, e) {
                    var i = t.getAttribute(n + e);
                    i || ((i = t.getAttribute(e) || ""), t.setAttribute(n + e, i));
                };
            t.exports = function(t, e) {
                if (r.isFocusableElement(t, e)) a(t, o), t.setAttribute(o, "-1");
                else
                    for (var i = r.getTabbableElements(t, e), n = i.length; n--;)
                        a(i[n], o), i[n].setAttribute(o, "-1");
                a(t, s.HIDDEN), t.setAttribute(s.HIDDEN, "true");
            };
        },
        function(t, e, i) {
            "use strict";
            var s = i(139),
                r = function() {
                    this.focusableSelectors = s.selectors;
                },
                n = r.prototype;
            (n.isFocusableElement = function(t, e, i) {
                return (!(e && !this._isDisplayed(t)) &&
                    (s.nodeName[t.nodeName] ?
                        !t.disabled :
                        !t.contentEditable ||
                        ((i = i || parseFloat(t.getAttribute("tabindex"))), !isNaN(i)))
                );
            }),
            (n.isTabbableElement = function(t, e) {
                if (e && !this._isDisplayed(t)) return !1;
                var i = t.getAttribute("tabindex");
                return (
                    (i = parseFloat(i)),
                    isNaN(i) ? this.isFocusableElement(t, e, i) : i >= 0
                );
            }),
            (n._isDisplayed = function(t) {
                var e = t.getBoundingClientRect();
                return (
                    (0 !== e.top || 0 !== e.left || 0 !== e.width || 0 !== e.height) &&
                    "hidden" !== window.getComputedStyle(t).visibility
                );
            }),
            (n.getTabbableElements = function(t, e) {
                for (
                    var i = t.querySelectorAll(this.focusableSelectors),
                        s = i.length,
                        r = [],
                        n = 0; n < s; n++
                )
                    this.isTabbableElement(i[n], e) && r.push(i[n]);
                return r;
            }),
            (n.getFocusableElements = function(t, e) {
                for (
                    var i = t.querySelectorAll(this.focusableSelectors),
                        s = i.length,
                        r = [],
                        n = 0; n < s; n++
                )
                    this.isFocusableElement(i[n], e) && r.push(i[n]);
                return r;
            }),
            (t.exports = new r());
        },
        function(t, e, i) {
            "use strict";
            t.exports = {
                selectors: [
                    "input",
                    "select",
                    "textarea",
                    "button",
                    "optgroup",
                    "option",
                    "menuitem",
                    "fieldset",
                    "object",
                    "a[href]",
                    "[tabindex]",
                    "[contenteditable]",
                ].join(","),
                nodeName: {
                    INPUT: "input",
                    SELECT: "select",
                    TEXTAREA: "textarea",
                    BUTTON: "button",
                    OPTGROUP: "optgroup",
                    OPTION: "option",
                    MENUITEM: "menuitem",
                    FIELDSET: "fieldset",
                    OBJECT: "object",
                    A: "a",
                },
            };
        },
        function(t, e, i) {
            "use strict";
            var s = i(141),
                r = i(62),
                n = "data-original-",
                o = "tabindex",
                a = function(t, e) {
                    var i = t.getAttribute(n + e);
                    null !== i && ("" === i ? s(t, e) : t.setAttribute(e, i), s(t, n + e));
                };
            t.exports = function(t) {
                a(t, o), a(t, r.HIDDEN);
                for (var e = t.querySelectorAll(`[${n + o}]`), i = e.length; i--;)
                    a(e[i], o);
            };
        },
        function(t, e, i) {
            "use strict";
            t.exports = function(t, e) {
                let i;
                (i = t instanceof NodeList ? t : [].concat(t)),
                (e = Array.isArray(e) ? e : [].concat(e)),
                i.forEach((t) => {
                    e.forEach((e) => {
                        t.removeAttribute(e);
                    });
                });
            };
        },
        function(t, e, i) {
            "use strict";
            const s = i(5);
            t.exports = {
                combine: function(t) {
                    let e = "mixin_mask_" + Math.random().toString(16).slice(2);
                    const i = {
                            beforeCreate() {
                                (this[e] = r(this.model.pageMetrics.breakpoint)),
                                n(this, "beforeCreate");
                            },
                            onBreakpointChange(t) {
                                const i = r(t.breakpoint);
                                i !== this[e] &&
                                    (n(this, "destroy"),
                                        (this[e] = i),
                                        s(() => {
                                            n(this, "beforeCreate", this.model.options),
                                                n(this, "created", this.model.options),
                                                n(this, "beforeMount", this.model.options),
                                                n(this, "itemsCreated"),
                                                n(this, "mounted");
                                        }, !1));
                            },
                            destroy() {
                                n(this, "destroy"), (this[e] = null);
                            },
                        },
                        r = function(e) {
                            let i = t.find((t) => t.breakpointMask.includes(e));
                            if (!i)
                                throw `Cannot find mode for current breakpoint ${e}. Current Settings ${t}`;
                            return i.mixin;
                        };
                    let n = function(t, i, ...s) {
                        if (t[e][i]) return t[e][i].apply(t, s);
                    };
                    return (
                        t.forEach(function(t) {
                            t.mixin || (t.mixin = {}),
                                Object.keys(t.mixin).forEach(
                                    (t) =>
                                    (i[t] =
                                        i[t] ||
                                        function(...e) {
                                            return n(this, t, ...e);
                                        })
                                );
                        }),
                        i
                    );
                },
            };
        },
        function(t, e, i) {
            "use strict";
            t.exports = {
                beforeCreate() {
                    this.clampedIndex = !0;
                },
                wrappedIndex(t) {
                    return Math.max(0, Math.min(t, this._items.length - 1));
                },
            };
        },
        function(t, e, i) {
            "use strict";
            const s = i(63),
                r = i(65),
                n = i(8),
                o = i(5),
                a = i(37);
            t.exports = {
                beforeCreate() {
                    Object.defineProperties(this, {
                        widthOfItem: { configurable: !0, get: () => this._items[0].width },
                    });
                },
                created(t) {
                    (this.position = 0),
                    (this.target = 0),
                    (this.slideContainer = this.el.querySelector(
                        this.model.Slide.Selector
                    )),
                    (this.sign = this.model.IsRTL ? -1 : 1);
                },
                mounted() {
                    n(() => {
                        this._items.forEach((t) => {
                                t.measure(), (t.x = t.width * t.index * this.sign);
                            }),
                            o(() => {
                                (this.position = this.target =
                                    this.convertSlideIndexToHorizontalPosition(
                                        this.wrappedIndex(this.currentIndex)
                                    )),
                                (this.slideContainer.style.transform = `translate3d(${-this
                  .position}px, 0,0)`),
                                this.checkForSlideUpdate(!0);
                            });
                    });
                },
                animateToItem(t) {
                    const e = this.wrappedIndex(t);
                    if (this.currentIndex === e) return;
                    this.el.parentElement.scrollLeft = 0;
                    let i = "easeInOutCubic",
                        n = this.target;
                    this.clip &&
                        this.clip._isPlaying &&
                        ((n = this.clip.endPosition),
                            this.clip.destroy(),
                            (i = "easeOutQuint"));
                    const o = this.target,
                        a = this.convertSlideIndexToHorizontalPosition(t),
                        h = this.model.PrefersReducedMotion ?
                        0.001 :
                        this.model.Slide.duration,
                        l = this._items[this.wrappedIndex(t)];
                    (this.clip = new s(h, {
                        ease: r[i],
                        prepare: () =>
                            this.trigger(this.model.Events.ITEM_CHANGE_INITIATED, {
                                gallery: this,
                                next: l,
                            }),
                        update: (t) => {
                            this.target = o + (a - o) * t;
                        },
                        draw: () => this.draw(1),
                        finish: () =>
                            this.trigger(this.model.Events.ITEM_CHANGE_COMPLETED, {
                                gallery: this,
                                current: l,
                            }),
                    })),
                    (this.clip.endPosition = a),
                    this.clip.play().then(() => {
                        this.clip.destroy(), (this.clip = null);
                    });
                },
                draw(t = 1) {
                    let e = this.target - this.position;
                    this.position += e * t;
                    const i = Math.abs(this.position - this.target);
                    i < 0.1 && (this.position = this.target),
                        this.checkForSlideUpdate(),
                        (this.slideContainer.style.transform = `translate3d(${-this
            .position}px, 0,0)`);
                    for (let t = 0, e = this._items.length; t < e; t++) {
                        let e = this._items[t],
                            i = (this.position - e.x) / this.widthOfItem;
                        e.progress(i);
                    }
                    this.position, this.widthOfItem, this._items.length;
                    Math.abs(i) > 0 && (a(this.dragDrawId), o(() => this.draw(t)));
                },
                checkForSlideUpdate(t) {
                    let e = Math.floor(
                        (this.position * this.sign + 0.5 * this.widthOfItem) /
                        this.widthOfItem
                    );
                    isNaN(e) ||
                        ((e !== this.currentIndex || t) &&
                            ((this.currentIndex = e),
                                this.wrapSlideItems(),
                                this.trigger(this.model.Events.ITEM_CHANGE_OCCURRED, {
                                    gallery: this,
                                    current: this.currentItem,
                                })));
                },
                wrapSlideItems() {
                    (this.currentItem.x = this.convertSlideIndexToHorizontalPosition(
                        this.currentIndex
                    )),
                    (this.currentItem.prev.x = this.convertSlideIndexToHorizontalPosition(
                        this.currentIndex - 1
                    )),
                    (this.currentItem.next.x = this.convertSlideIndexToHorizontalPosition(
                        this.currentIndex + 1
                    ));
                },
                onResizeImmediate() {
                    this.clip && (this.clip.destroy(), (this.clip = null)),
                        this._items.forEach((t) => {
                            t.measure(), (t.x = t.width * t.index * this.sign);
                        }),
                        (this.currentIndex = this.wrappedIndex(this.currentItem.index)),
                        this.wrapSlideItems(),
                        (this.position = this.target =
                            this.convertSlideIndexToHorizontalPosition(
                                this.wrappedIndex(this.currentIndex)
                            )),
                        (this.slideContainer.style.transform = `translate3d(${-this
            .position}px, 0,0)`);
                },
                convertSlideIndexToHorizontalPosition(t) {
                    return t * this.widthOfItem * this.sign;
                },
                destroy() {
                    this._items.forEach((t) => {
                            t.measure(), (t.x = 0), (t.zIndex = t === this.currentItem ? 2 : 0);
                        }),
                        this.slideContainer.removeAttribute("style");
                },
            };
        },
        function(t, e, i) {
            "use strict";
            var s = i(64);
            t.exports = s.requestAnimationFrame("update");
        },
        function(t, e, i) {
            "use strict";
            var s = i(147),
                r = function(t) {
                    (this.rafEmitter = new s()),
                    this.rafEmitter.on(t, this._onRAFExecuted.bind(this)),
                        (this.requestAnimationFrame = this.requestAnimationFrame.bind(this)),
                        (this.cancelAnimationFrame = this.cancelAnimationFrame.bind(this)),
                        (this._frameCallbacks = []),
                        (this._nextFrameCallbacks = []),
                        (this._currentFrameID = -1),
                        (this._cancelFrameIdx = -1),
                        (this._frameCallbackLength = 0),
                        (this._nextFrameCallbacksLength = 0),
                        (this._frameCallbackIteration = 0);
                },
                n = r.prototype;
            (n.requestAnimationFrame = function(t) {
                return (
                    (this._currentFrameID = this.rafEmitter.run()),
                    this._nextFrameCallbacks.push(this._currentFrameID, t),
                    (this._nextFrameCallbacksLength += 2),
                    this._currentFrameID
                );
            }),
            (n.cancelAnimationFrame = function(t) {
                (this._cancelFrameIdx = this._nextFrameCallbacks.indexOf(t)), -1 !== this._cancelFrameIdx &&
                    (this._nextFrameCallbacks.splice(this._cancelFrameIdx, 2),
                        (this._nextFrameCallbacksLength -= 2),
                        0 === this._nextFrameCallbacksLength && this.rafEmitter.cancel());
            }),
            (n._onRAFExecuted = function(t) {
                for (
                    this._frameCallbacks = this._nextFrameCallbacks,
                    this._frameCallbackLength = this._nextFrameCallbacksLength,
                    this._nextFrameCallbacks = [],
                    this._nextFrameCallbacksLength = 0,
                    this._frameCallbackIteration = 0; this._frameCallbackIteration < this._frameCallbackLength; this._frameCallbackIteration += 2
                )
                    this._frameCallbacks[this._frameCallbackIteration + 1](t.time, t);
            }),
            (t.exports = r);
        },
        function(t, e, i) {
            "use strict";
            var s = i(148),
                r = function(t) {
                    s.call(this, t);
                };
            ((r.prototype = Object.create(s.prototype))._subscribe = function() {
                return this.executor.subscribe(this, !0);
            }),
            (t.exports = r);
        },
        function(t, e, i) {
            "use strict";
            var s,
                r = i(4).EventEmitterMicro,
                n = i(149),
                o = i(152);

            function a(t) {
                (t = t || {}),
                r.call(this),
                    (this.id = o.getNewID()),
                    (this.executor = t.executor || n),
                    this._reset(),
                    (this._willRun = !1),
                    (this._didDestroy = !1);
            }
            ((s = a.prototype = Object.create(r.prototype)).run = function() {
                return this._willRun || (this._willRun = !0), this._subscribe();
            }),
            (s.cancel = function() {
                this._unsubscribe(),
                    this._willRun && (this._willRun = !1),
                    this._reset();
            }),
            (s.destroy = function() {
                var t = this.willRun();
                return (
                    this.cancel(),
                    (this.executor = null),
                    r.prototype.destroy.call(this),
                    (this._didDestroy = !0),
                    t
                );
            }),
            (s.willRun = function() {
                return this._willRun;
            }),
            (s.isRunning = function() {
                return this._isRunning;
            }),
            (s._subscribe = function() {
                return this.executor.subscribe(this);
            }),
            (s._unsubscribe = function() {
                return this.executor.unsubscribe(this);
            }),
            (s._onAnimationFrameStart = function(t) {
                (this._isRunning = !0),
                (this._willRun = !1),
                this._didEmitFrameData ||
                    ((this._didEmitFrameData = !0), this.trigger("start", t));
            }),
            (s._onAnimationFrameEnd = function(t) {
                this._willRun || (this.trigger("stop", t), this._reset());
            }),
            (s._reset = function() {
                (this._didEmitFrameData = !1), (this._isRunning = !1);
            }),
            (t.exports = a);
        },
        function(t, e, i) {
            "use strict";
            var s = i(19).SharedInstance,
                r = i(150);
            t.exports = s.share(
                "ac-raf-executor:sharedRAFExecutorInstance",
                "2.0.1",
                r
            );
        },
        function(t, e, i) {
            "use strict";
            var s;

            function r(t) {
                (t = t || {}),
                this._reset(),
                    (this._willRun = !1),
                    (this._totalSubscribeCount = -1),
                    (this._requestAnimationFrame = window.requestAnimationFrame),
                    (this._cancelAnimationFrame = window.cancelAnimationFrame),
                    (this._boundOnAnimationFrame = this._onAnimationFrame.bind(this)),
                    (this._boundOnExternalAnimationFrame =
                        this._onExternalAnimationFrame.bind(this));
            }
            i(151),
                ((s = r.prototype).subscribe = function(t, e) {
                    return (
                        this._totalSubscribeCount++,
                        this._nextFrameSubscribers[t.id] ||
                        (e ?
                            this._nextFrameSubscribersOrder.unshift(t.id) :
                            this._nextFrameSubscribersOrder.push(t.id),
                            (this._nextFrameSubscribers[t.id] = t),
                            this._nextFrameSubscriberArrayLength++,
                            this._nextFrameSubscriberCount++,
                            this._run()),
                        this._totalSubscribeCount
                    );
                }),
                (s.unsubscribe = function(t) {
                    return (!!this._nextFrameSubscribers[t.id] &&
                        ((this._nextFrameSubscribers[t.id] = null),
                            this._nextFrameSubscriberCount--,
                            0 === this._nextFrameSubscriberCount && this._cancel(), !0)
                    );
                }),
                (s.trigger = function(t, e) {
                    var i;
                    for (i = 0; i < this._subscriberArrayLength; i++)
                        null !== this._subscribers[this._subscribersOrder[i]] &&
                        !1 === this._subscribers[this._subscribersOrder[i]]._didDestroy &&
                        this._subscribers[this._subscribersOrder[i]].trigger(t, e);
                }),
                (s.destroy = function() {
                    var t = this._cancel();
                    return (
                        (this._subscribers = null),
                        (this._subscribersOrder = null),
                        (this._nextFrameSubscribers = null),
                        (this._nextFrameSubscribersOrder = null),
                        (this._rafData = null),
                        (this._boundOnAnimationFrame = null),
                        (this._onExternalAnimationFrame = null),
                        t
                    );
                }),
                (s.useExternalAnimationFrame = function(t) {
                    if ("boolean" == typeof t) {
                        var e = this._isUsingExternalAnimationFrame;
                        return (
                            t &&
                            this._animationFrame &&
                            (this._cancelAnimationFrame.call(window, this._animationFrame),
                                (this._animationFrame = null)), !this._willRun ||
                            t ||
                            this._animationFrame ||
                            (this._animationFrame = this._requestAnimationFrame.call(
                                window,
                                this._boundOnAnimationFrame
                            )),
                            (this._isUsingExternalAnimationFrame = t),
                            t ? this._boundOnExternalAnimationFrame : e || !1
                        );
                    }
                }),
                (s._run = function() {
                    if (!this._willRun)
                        return (
                            (this._willRun = !0),
                            0 === this.lastFrameTime &&
                            (this.lastFrameTime = performance.now()),
                            (this._animationFrameActive = !0),
                            this._isUsingExternalAnimationFrame ||
                            (this._animationFrame = this._requestAnimationFrame.call(
                                window,
                                this._boundOnAnimationFrame
                            )), !0
                        );
                }),
                (s._cancel = function() {
                    var t = !1;
                    return (
                        this._animationFrameActive &&
                        (this._animationFrame &&
                            (this._cancelAnimationFrame.call(window, this._animationFrame),
                                (this._animationFrame = null)),
                            (this._animationFrameActive = !1),
                            (this._willRun = !1),
                            (t = !0)),
                        this._isRunning || this._reset(),
                        t
                    );
                }),
                (s._onSubscribersAnimationFrameStart = function(t) {
                    var e;
                    for (e = 0; e < this._subscriberArrayLength; e++)
                        null !== this._subscribers[this._subscribersOrder[e]] &&
                        !1 === this._subscribers[this._subscribersOrder[e]]._didDestroy &&
                        this._subscribers[this._subscribersOrder[e]]._onAnimationFrameStart(
                            t
                        );
                }),
                (s._onSubscribersAnimationFrameEnd = function(t) {
                    var e;
                    for (e = 0; e < this._subscriberArrayLength; e++)
                        null !== this._subscribers[this._subscribersOrder[e]] &&
                        !1 === this._subscribers[this._subscribersOrder[e]]._didDestroy &&
                        this._subscribers[this._subscribersOrder[e]]._onAnimationFrameEnd(
                            t
                        );
                }),
                (s._onAnimationFrame = function(t) {
                    (this._subscribers = this._nextFrameSubscribers),
                    (this._subscribersOrder = this._nextFrameSubscribersOrder),
                    (this._subscriberArrayLength = this._nextFrameSubscriberArrayLength),
                    (this._subscriberCount = this._nextFrameSubscriberCount),
                    (this._nextFrameSubscribers = {}),
                    (this._nextFrameSubscribersOrder = []),
                    (this._nextFrameSubscriberArrayLength = 0),
                    (this._nextFrameSubscriberCount = 0),
                    (this._isRunning = !0),
                    (this._willRun = !1),
                    (this._didRequestNextRAF = !1),
                    (this._rafData.delta = t - this.lastFrameTime),
                    (this.lastFrameTime = t),
                    (this._rafData.fps = 0),
                    this._rafData.delta >= 1e3 && (this._rafData.delta = 0),
                        0 !== this._rafData.delta &&
                        (this._rafData.fps = 1e3 / this._rafData.delta),
                        (this._rafData.time = t),
                        (this._rafData.naturalFps = this._rafData.fps),
                        (this._rafData.timeNow = Date.now()),
                        this._onSubscribersAnimationFrameStart(this._rafData),
                        this.trigger("update", this._rafData),
                        this.trigger("external", this._rafData),
                        this.trigger("draw", this._rafData),
                        this._onSubscribersAnimationFrameEnd(this._rafData),
                        this._willRun || this._reset();
                }),
                (s._onExternalAnimationFrame = function(t) {
                    this._isUsingExternalAnimationFrame && this._onAnimationFrame(t);
                }),
                (s._reset = function() {
                    (this._rafData = {
                        time: 0,
                        delta: 0,
                        fps: 0,
                        naturalFps: 0,
                        timeNow: 0,
                    }),
                    (this._subscribers = {}),
                    (this._subscribersOrder = []),
                    (this._subscriberArrayLength = 0),
                    (this._subscriberCount = 0),
                    (this._nextFrameSubscribers = {}),
                    (this._nextFrameSubscribersOrder = []),
                    (this._nextFrameSubscriberArrayLength = 0),
                    (this._nextFrameSubscriberCount = 0),
                    (this._didEmitFrameData = !1),
                    (this._animationFrame = null),
                    (this._animationFrameActive = !1),
                    (this._isRunning = !1),
                    (this._shouldReset = !1),
                    (this.lastFrameTime = 0);
                }),
                (t.exports = r);
        },
        function(t, e) {},
        function(t, e, i) {
            "use strict";
            var s = i(19).SharedInstance,
                r = function() {
                    this._currentID = 0;
                };
            (r.prototype.getNewID = function() {
                return this._currentID++, "raf:" + this._currentID;
            }),
            (t.exports = s.share(
                "ac-raf-emitter-id-generator:sharedRAFEmitterIDGeneratorInstance",
                "1.0.3",
                r
            ));
        },
        function(t, e, i) {
            "use strict";
            var s = i(64);
            t.exports = s.requestAnimationFrame("draw");
        },
        function(t, e, i) {
            "use strict";
            t.exports = function(t, e) {
                t instanceof Promise ? t.then(e) : e();
            };
        },
        function(t, e, i) {
            "use strict";
            t.exports = function(t) {
                return "function" == typeof t ? t : null;
            };
        },
        function(t, e, i) {
            "use strict";
            t.exports = function(t, e) {
                const i = e.length;
                let s = 0;
                !(function r() {
                    "function" == typeof e[s] && t(e[s]), s++, s < i && r();
                })();
            };
        },
        function(t, e, i) {
            "use strict";
            t.exports = function(t, e, i) {
                return Math.min(Math.max(t, e), i);
            };
        },
        function(t, e, i) {
            "use strict";
            const s = ["INPUT", "SELECT", "TEXTAREA"];
            t.exports = {
                created() {
                    (this.handleIntersect = this.handleIntersect.bind(this)),
                    (this.onKeyDown = this.onKeyDown.bind(this)),
                    (this.observer = new IntersectionObserver(this.handleIntersect)),
                    this.observer.observe(this.el),
                        (this.isInView = !1);
                },
                destroy() {
                    window.removeEventListener("keydown", this.onKeyDown),
                        this.observer.disconnect(),
                        (this.observer = null),
                        (this.isInView = !1);
                },
                handleIntersect(t) {
                    t.forEach((t) => {
                        (this.isInView = t.isIntersecting),
                        t.isIntersecting ?
                            window.addEventListener("keydown", this.onKeyDown) :
                            window.removeEventListener("keydown", this.onKeyDown);
                    });
                },
                onKeyDown(t) {
                    if ((37 !== t.keyCode && 39 !== t.keyCode) || this.inputHasFocus())
                        return;
                    let e = this.model.IsRTL ? -1 : 1,
                        i = 37 === t.keyCode ? -1 : 1;
                    this.lastInteractionEvent = t;
                    const s = this.currentIndex + i * e;
                    this.animateToItem(s);
                },
                inputHasFocus: function() {
                    return -1 !== s.indexOf(document.activeElement.nodeName);
                },
            };
        },
        function(t, e, i) {
            "use strict";
            const s = (t, e) => {
                e ? t.removeAttribute("disabled") : t.setAttribute("disabled", "true");
            };
            t.exports = {
                mounted() {
                    const t = this.el.querySelector(this.model.PaddleNav.Selector);
                    (this.paddleNav = {
                        previousEl: t.querySelector(".paddlenav-arrow-previous"),
                        nextEl: t.querySelector(".paddlenav-arrow-next"),
                    }),
                    (this.onPaddleNavSelected = this.onPaddleNavSelected.bind(this)), [this.paddleNav.previousEl, this.paddleNav.nextEl].forEach((t) => {
                        t.addEventListener("click", this.onPaddleNavSelected);
                    });
                },
                destroy() {
                    [this.paddleNav.previousEl, this.paddleNav.nextEl].forEach((t) => {
                            t.removeEventListener("click", this.onPaddleNavSelected);
                        }),
                        (this.paddleNav = null);
                },
                onPaddleNavSelected(t) {
                    let e = t.target.className.includes("previous") ? -1 : 1;
                    this.lastInteractionEvent = t;
                    const i = this.currentIndex + 1 * e;
                    this.animateToItem(i);
                },
                onItemChangeCompleted(t) {
                    const e =
                        this.wrappedIndex(this.currentIndex + 1) !== this.currentIndex;
                    s(this.paddleNav.nextEl, e);
                    const i =
                        this.wrappedIndex(this.currentIndex + -1) !== this.currentIndex;
                    s(this.paddleNav.previousEl, i);
                },
            };
        },
        function(t, e, i) {
            "use strict";
            t.exports = {
                onItemChangeOccurred(t) {
                    const { previous: e, current: i } = this.selections.occurred;
                    e && e !== i && e.deselect(), i.select();
                },
            };
        },
        function(t, e, i) {
            "use strict";
            let s;
            try {
                s = i(162).observer.Gallery;
            } catch (t) {}
            t.exports = {
                created(t) {
                    this.analytics = {
                        lastTrackedItem: null,
                        observer: null,
                        events: { UPDATE: "update", UPDATE_COMPLETE: "update:complete" },
                    };
                },
                mounted() {
                    if (s) {
                        let t = this.el.getAttribute("id");
                        t ||
                            (console.warn(
                                    "No ID attribute found on the Mixin Gallery element - please add an ID",
                                    this
                                ),
                                (t = "null")),
                            (this.analytics.observer = new s(this, {
                                galleryName: t,
                                beforeUpdateEvent: this.analytics.events.UPDATE,
                                afterUpdateEvent: this.analytics.events.UPDATE_COMPLETE,
                                trackAutoRotate: !0,
                            }));
                    }
                },
                onItemChangeCompleted(t) {
                    if (!t.previous ||
                        t.current === this.analytics.lastTrackedItem ||
                        (t.current === t.previous && !this.analytics.lastTrackedItem)
                    )
                        return;
                    this.analytics.lastTrackedItem = t.current;
                    let e = {
                        incoming: { id: t.current.id },
                        outgoing: { id: t.previous.id },
                        interactionEvent: this.lastInteractionEvent,
                    };
                    this.trigger(this.analytics.events.UPDATE_COMPLETE, e);
                },
            };
        },
        function(t, e) {
            t.exports = require("@marcom/ac-analytics");
        },
        function(t, e, i) {
            "use strict";
            const s = i(5),
                r = i(37);
            t.exports = {
                created(t) {
                    (this.swipeDrag = {
                        movementRateMultiplier: this.model.SwipeDrag.movementRateMultiplier,
                        velocityMultiplier: this.model.SwipeDrag.velocityMultiplier,
                        dragDrawId: -1,
                        waitingToReachTargetDrawId: -1,
                        inputStart: { x: 0, y: 0 },
                        swipeVelocity: 0,
                        isDragging: !1,
                    }),
                    (this._onStartDrag = this._onStartDrag.bind(this)),
                    (this._onDrag = this._onDrag.bind(this)),
                    (this._onStopDrag = this._onStopDrag.bind(this)),
                    (this.waitingToReachTarget = this.waitingToReachTarget.bind(this));
                },
                mounted() {
                    (this.inputMoveEventName = this.model.IsTouch ?
                        "touchmove" :
                        "mousemove"),
                    (this.inputUpEventName = this.model.IsTouch ? "touchend" : "mouseup"),
                    (this.inputDownEvent = this.model.IsTouch ?
                        "touchstart" :
                        "mousedown"),
                    (this.model.IsTouch || this.model.SwipeDrag.DesktopSwipe) &&
                    (this.el.removeEventListener(
                            this.inputDownEvent,
                            this._onStartDrag
                        ),
                        this.el.addEventListener(this.inputDownEvent, this._onStartDrag));
                },
                _onStartDrag(t) {
                    r(this.swipeDrag.dragDrawId),
                        r(this.swipeDrag.waitingToReachTargetDrawId);
                    const e = t.target || t.relatedTarget;
                    switch (!0) {
                        case "A" === e.tagName:
                        case "BUTTON" === e.tagName:
                        case !t.touches && 1 !== t.which:
                            return;
                    }
                    this.clip && this.clip.destroy(),
                        (this.lastInteractionEvent = t),
                        (this.swipeDrag.swipeVelocity = 0),
                        (this.swipeDrag.isDragging = !1);
                    const i = this.model.IsTouch ? t.touches[0] : t;
                    let { screenX: s, screenY: n } = i;
                    (this.swipeDrag.inputStart = { x: s, y: n }),
                    window.addEventListener(this.inputMoveEventName, this._onDrag, {
                            passive: !1,
                        }),
                        window.addEventListener(this.inputUpEventName, this._onStopDrag);
                },
                _onDrag(t) {
                    this.swipeDrag.isDragging && t.cancelable && t.preventDefault();
                    const e = this.model.IsTouch ? t.touches[0] : t;
                    let { screenX: i, screenY: n } = e,
                    o = this.swipeDrag.inputStart.x - i,
                        a = this.swipeDrag.inputStart.y - n;
                    (this.swipeDrag.inputStart = { x: i, y: n }),
                    this.swipeDrag.isDragging ||
                        (this.swipeDrag.isDragging =
                            Math.abs(o) > 3 && Math.abs(o) > Math.abs(a)),
                        this.swipeDrag.isDragging &&
                        ((this.target += o * this.swipeDrag.movementRateMultiplier),
                            (this.swipeDrag.swipeVelocity =
                                o * this.swipeDrag.velocityMultiplier),
                            this.clampedIndex &&
                            (this.model.IsRTL ?
                                (this.target = Math.max(
                                    this.widthOfItem * this.sign * (this._items.length - 1),
                                    Math.min(0, this.target)
                                )) :
                                (this.target = Math.min(
                                    this.widthOfItem * (this._items.length - 1),
                                    Math.max(0, this.target)
                                ))),
                            r(this.swipeDrag.dragDrawId),
                            (this.swipeDrag.dragDrawId = s(() => this.draw(0.3))));
                },
                _onStopDrag(t) {
                    if (
                        (window.removeEventListener(this.inputMoveEventName, this._onDrag),
                            window.removeEventListener(this.inputUpEventName, this._onStopDrag), !this.swipeDrag.isDragging)
                    )
                        return;
                    let e = [
                            this.currentIndex - 1,
                            this.currentIndex,
                            this.currentIndex + 1,
                        ],
                        i = 0,
                        n = Number.MAX_VALUE;
                    for (let t = 0, s = e.length; t < s; t++) {
                        let s = e[t] * this.widthOfItem,
                            r = Math.abs(
                                s - (this.position + this.swipeDrag.swipeVelocity) * this.sign
                            );
                        r < n && ((n = r), (i = t));
                    }
                    this.lastInteractionEvent = t;
                    let o = e[i];
                    this.clampedIndex && (o = this.wrappedIndex(o)),
                        (this.target = this.convertSlideIndexToHorizontalPosition(o)),
                        r(this.swipeDrag.dragDrawId),
                        r(this.swipeDrag.waitingToReachTargetDrawId),
                        (this.swipeDrag.dragDrawId = s(() => {
                            this.trigger(this.model.Events.ITEM_CHANGE_INITIATED, {
                                    gallery: this,
                                    next: this._items[this.wrappedIndex(o)],
                                }),
                                this.draw(0.2),
                                this.waitingToReachTarget(o);
                        }));
                },
                waitingToReachTarget(t) {
                    if (Math.abs(this.position - this.target) > 0.1)
                        return void(this.swipeDrag.waitingToReachTargetDrawId = s(() =>
                            this.waitingToReachTarget(t)
                        ));
                    const e = this.selections.occurred.current;
                    this.trigger(this.model.Events.ITEM_CHANGE_COMPLETED, {
                        gallery: this,
                        current: e,
                    });
                },
                destroy() {
                    this.el.removeEventListener(this.inputDownEvent, this._onStartDrag),
                        window.removeEventListener(this.inputUpEventName, this._onStopDrag),
                        window.removeEventListener(this.inputUpEventName, this._onStopDrag);
                },
            };
        },
        function(t, e, i) {
            "use strict";
            var s = i(165).original,
                r = i(38),
                n = i(39);

            function o() {
                var t = r.getWindow(),
                    e = t.screen.width;
                return (
                    t.orientation && t.screen.height < e && (e = t.screen.height), !s() && e >= 600
                );
            }
            (t.exports = n(o)), (t.exports.original = o);
        },
        function(t, e, i) {
            "use strict";
            var s = i(17).os,
                r = i(166).original,
                n = i(38),
                o = i(39);

            function a() {
                var t = n.getWindow();
                return (!r() && !t.orientation) || s.windows;
            }
            (t.exports = o(a)), (t.exports.original = a);
        },
        function(t, e, i) {
            "use strict";
            var s = i(38),
                r = i(39);

            function n() {
                var t = s.getWindow(),
                    e = s.getDocument(),
                    i = s.getNavigator();
                return !!(
                    "ontouchstart" in t ||
                    (t.DocumentTouch && e instanceof t.DocumentTouch) ||
                    i.maxTouchPoints > 0 ||
                    i.msMaxTouchPoints > 0
                );
            }
            (t.exports = r(n)), (t.exports.original = n);
        },
        function(t, e, i) {
            "use strict";
            const { Media: s } = i(168),
                r = i(21);
            t.exports = class extends r {
                constructor(t) {
                    super(t);
                }
                async mounted() {
                    (this.mediaInstance = await s.autoInitialize(this.el, {
                        anim: this.gum.anim,
                    })),
                    this.trigger("media-instance-ready", this.mediaInstance[0]);
                }
                static IS_SUPPORTED() {
                    return document.documentElement.classList.contains("enhance-base-xp");
                }
            };
        },
        function(t, e, i) {
            "use strict";
            var s = i(1);
            Object.defineProperty(e, "__esModule", { value: !0 }),
                Object.defineProperty(e, "Media", {
                    enumerable: !0,
                    get: function() {
                        return r.default;
                    },
                }),
                Object.defineProperty(e, "default", {
                    enumerable: !0,
                    get: function() {
                        return r.default;
                    },
                }),
                Object.defineProperty(e, "Plugin", {
                    enumerable: !0,
                    get: function() {
                        return n.default;
                    },
                }),
                (e.autoInit = void 0);
            var r = s(i(66)),
                n = s(i(6));
            const o = r.default.autoInitialize;
            e.autoInit = o;
        },
        function(t, e, i) {
            "use strict";
            var s = i(1);
            Object.defineProperty(e, "__esModule", { value: !0 }), (e.default = void 0);
            var r = s(i(170)),
                n = s(i(171)),
                o = s(i(172)),
                a = s(i(173)),
                h = [r.default, n.default, o.default, a.default];
            e.default = h;
        },
        function(t, e, i) {
            "use strict";
            var s = i(1);
            Object.defineProperty(e, "__esModule", { value: !0 }), (e.default = void 0);
            var r = s(i(6));
            class n extends r.default {
                get src() {
                    if (!this.media.el.currentSrc && !this.media.el.src)
                        for (let t of this.media.el.querySelectorAll("source"))
                            if (this.media.el.canPlayType(t.type)) return t.src;
                    return this.media.el.currentSrc || this.media.el.src;
                }
            }
            var o = n;
            e.default = o;
        },
        function(t, e, i) {
            "use strict";
            var s = i(1);
            Object.defineProperty(e, "__esModule", { value: !0 }), (e.default = void 0);
            var r = s(i(6)),
                n = s(i(67)),
                o = s(i(10)),
                a = s(i(22)),
                h = s(i(23)),
                l = s(i(17));
            const c = n.default.CAN_PLAY_THROUGH,
                {
                    HAVE_NOTHING: u,
                    HAVE_CURRENT_DATA: d,
                    NETWORK_EMPTY: p,
                } = HTMLMediaElement;
            class m extends r.default {
                constructor(t) {
                    super(t),
                        (this._loadCompleteEvent = t.loadCompleteEvent || c),
                        (this._onLoaded = this._onLoaded.bind(this)),
                        (this._onError = this._onError.bind(this));
                }
                mounted() {
                    "none" !== this.media.el.preload &&
                        this.media.src &&
                        (async() => {
                            try {
                                await this.media.load(this.media.src);
                            } catch (t) {
                                (0, h.default)(
                                    `auto load of ${this.media.src} failed or was aborted with err:${t}`
                                );
                            }
                        })();
                }
                async load(t) {
                    if ((void 0 === t && this.media.src && (t = this.media.src), !t))
                        throw new Error(
                            "No Media src was specified, can not fullfill load() request"
                        );
                    return (
                        t !== this._currentLoadUrl &&
                        (this.media.trigger(o.default.MEDIA_LOAD_START),
                            (this._currentLoadUrl = t),
                            (this._pendingPromise = new Promise((e, i) => {
                                (this._resolvePendingPromise = () => {
                                    (this._resolvePendingPromise = null),
                                    (this._rejectPendingPromise = null),
                                    e();
                                }),
                                (this._rejectPendingPromise = () => {
                                    (this._resolvePendingPromise = null),
                                    (this._rejectPendingPromise = null),
                                    i();
                                }),
                                this.media.el.addEventListener(
                                        this._loadCompleteEvent,
                                        this._onLoaded
                                    ),
                                    l.default.browser.firefox &&
                                    "canplaythrough" === this._loadCompleteEvent &&
                                    this.media.el.addEventListener("canplay", this._onLoaded),
                                    this.media.el.addEventListener(n.default.ERROR, this._onError),
                                    this.media.el.addEventListener(n.default.ABORT, this._onError),
                                    (this.media.el.src = t),
                                    this.media.el.load();
                            }))),
                        this._pendingPromise
                    );
                }
                _clearLoadListeners() {
                    this.media.el.removeEventListener(
                            this._loadCompleteEvent,
                            this._onLoaded
                        ),
                        this.media.el.removeEventListener("canplay", this._onLoaded),
                        this.media.el.removeEventListener(n.default.ERROR, this._onError),
                        this.media.el.removeEventListener(n.default.ABORT, this._onError);
                }
                _onLoaded() {
                    this._clearLoadListeners(),
                        this.media.trigger(o.default.LOADING_STATE_CHANGE),
                        this.media.trigger(o.default.MEDIA_LOAD_COMPLETE),
                        this._resolvePendingPromise();
                }
                _onError() {
                    this._clearLoadListeners(),
                        this.media.trigger(o.default.MEDIA_LOAD_ERROR),
                        this.media.trigger(o.default.LOADING_STATE_CHANGE),
                        this._rejectPendingPromise();
                }
                abortLoad() {
                    this._rejectPendingPromise && this._rejectPendingPromise();
                }
                get loadingState() {
                    return this.media.el.error ?
                        a.default.ERROR :
                        this.media.el.networkState === p && this.media.el.readyState === u ?
                        a.default.EMPTY :
                        this.media.el.readyState < d ?
                        this.media.el.buffered.length &&
                        0 === this.media.el.buffered.start(0) &&
                        this.media.el.buffered.end(0) === this.media.el.duration ?
                        a.default.LOADED :
                        a.default.LOADING :
                        a.default.LOADED;
                }
                destroy() {
                    this._clearLoadListeners(), super.destroy();
                }
            }
            var f = m;
            e.default = f;
        },
        function(t, e, i) {
            "use strict";
            var s = i(1);
            Object.defineProperty(e, "__esModule", { value: !0 }), (e.default = void 0);
            var r = s(i(6)),
                n = s(i(24));
            const { HAVE_METADATA: o, HAVE_CURRENT_DATA: a } = HTMLVideoElement;
            class h extends r.default {
                constructor(t) {
                    super(t), this._initialize();
                }
                _initialize() {
                    (this.media.el.playsInline = !0),
                    this.media.el.autoplay &&
                        (this._autoPlayTimer = setTimeout(() => this.media.play()));
                }
                async play() {
                    this.media.el.readyState < o && (await this.media.load()),
                        await this.media.el.play();
                }
                get playbackState() {
                    return this.media.el.ended ?
                        n.default.ENDED :
                        this.media.el.paused && !this.media.el.ended ?
                        n.default.PAUSED :
                        n.default.PLAYING;
                }
                destroy() {
                    clearTimeout(this._autoPlayTimer), super.destroy();
                }
            }
            var l = h;
            e.default = l;
        },
        function(t, e, i) {
            "use strict";
            var s = i(1);
            Object.defineProperty(e, "__esModule", { value: !0 }), (e.default = void 0);
            var r = s(i(6)),
                n = s(i(24)),
                o = s(i(22)),
                a = s(i(67)),
                h = s(i(10));
            const l = [
                    a.default.LOADED_DATA,
                    a.default.LOAD_START,
                    a.default.CAN_PLAY,
                    a.default.CAN_PLAY_THROUGH,
                    a.default.PLAY,
                    a.default.PLAYING,
                    a.default.PAUSE,
                    a.default.WAITING,
                    a.default.SEEKING,
                    a.default.SEEKED,
                    a.default.ERROR,
                    a.default.ENDED,
                ],
                c = "[data-inline-media-controller={id}]";
            class u extends r.default {
                constructor(t) {
                    super(t),
                        (this._container = t.container || this.media.el.parentElement),
                        (this._playbackState = n.default.IDLE),
                        (this._loadingState = o.default.EMPTY),
                        (this._elementsToDecorate = []),
                        this._container && this._elementsToDecorate.push(this._container),
                        this.media.id &&
                        this._elementsToDecorate.push(
                            ...Array.from(
                                document.querySelectorAll(c.replace("{id}", this.media.id))
                            )
                        );
                    for (const t of this._elementsToDecorate)
                        t.classList.add(this._playbackState),
                        t.classList.add(this._loadingState);
                    (this.updateState = this.updateState.bind(this)),
                    this._addEventListeners();
                }
                _addEventListeners() {
                    for (let t of l) this.media.el.addEventListener(t, this.updateState);
                    this.media.on(h.default.LOADING_STATE_CHANGE, this.updateState),
                        this.media.on(h.default.PLAYBACK_STATE_CHANGE, this.updateState);
                }
                _removeEventListeners() {
                    for (let t of l) this.media.el.removeEventListener(t, this.updateState);
                    this.media.off(h.default.LOADING_STATE_CHANGE, this.updateState),
                        this.media.off(h.default.PLAYBACK_STATE_CHANGE, this.updateState);
                }
                updateState(t) {
                    const e = this.media.playbackState,
                        i = this._playbackState,
                        s = this.media.loadingState,
                        r = this._loadingState;
                    if (((this._playbackState = e), (this._loadingState = s), e !== i)) {
                        for (const t of this._elementsToDecorate)
                            t.classList.add(e), t.classList.remove(i);
                        this.media.trigger(h.default.PLAYBACK_STATE_CHANGE);
                    }
                    if (s !== r) {
                        for (const t of this._elementsToDecorate)
                            t.classList.add(s), t.classList.remove(r);
                        this.media.trigger(h.default.LOADING_STATE_CHANGE);
                    }
                }
                destroy() {
                    for (const t of this._elementsToDecorate)
                        t.classList.remove(this._playbackState),
                        t.classList.remove(this._loadingState);
                    this._removeEventListeners(), super.destroy();
                }
            }
            var d = u;
            e.default = d;
        },
        function(t, e, i) {
            "use strict";
            var s = i(1);
            Object.defineProperty(e, "__esModule", { value: !0 }),
                (e.default = async function(t = document, e = {}) {
                    t || (t = document);
                    const i = t.querySelectorAll("[data-inline-media]"),
                        s = [];
                    for (let t of i) {
                        const i = t.dataset,
                            o = i.inlineMediaPlugins ?
                            i.inlineMediaPlugins.split(",").map((t) => t.trim()) : [],
                            a = [];
                        for (const t of o)
                            if (!r.pluginCache[t]) {
                                if (!n.default[t])
                                    throw new Error(
                                        `Error Trying to use undefined Plugin named: ${t} . Ensure you call Media.addPlugin() first to register this custom plugin!`
                                    );
                                a.push(async() => {
                                    const e = (await n.default[t]()).default;
                                    r.default.addPlugin(t, e);
                                });
                            }
                        await Promise.all(a.map(async(t) => t())),
                            s.push(
                                new r.default(
                                    Object.assign({ el: t, plugins: o.map((t) => r.pluginCache[t]) },
                                        e
                                    )
                                )
                            );
                    }
                    return s;
                });
            var r = (function(t, e) {
                    if (!e && t && t.__esModule) return t;
                    if (null === t || ("object" != typeof t && "function" != typeof t))
                        return { default: t };
                    var i = o(e);
                    if (i && i.has(t)) return i.get(t);
                    var s = {},
                        r = Object.defineProperty && Object.getOwnPropertyDescriptor;
                    for (var n in t)
                        if ("default" !== n && Object.prototype.hasOwnProperty.call(t, n)) {
                            var a = r ? Object.getOwnPropertyDescriptor(t, n) : null;
                            a && (a.get || a.set) ?
                                Object.defineProperty(s, n, a) :
                                (s[n] = t[n]);
                        }
                        (s.default = t), i && i.set(t, s);
                    return s;
                })(i(66)),
                n = s(i(175));

            function o(t) {
                if ("function" != typeof WeakMap) return null;
                var e = new WeakMap(),
                    i = new WeakMap();
                return (o = function(t) {
                    return t ? i : e;
                })(t);
            }
        },
        function(t, e, i) {
            "use strict";

            function s(t) {
                if ("function" != typeof WeakMap) return null;
                var e = new WeakMap(),
                    i = new WeakMap();
                return (s = function(t) {
                    return t ? i : e;
                })(t);
            }

            function r(t, e) {
                if (!e && t && t.__esModule) return t;
                if (null === t || ("object" != typeof t && "function" != typeof t))
                    return { default: t };
                var i = s(e);
                if (i && i.has(t)) return i.get(t);
                var r = {},
                    n = Object.defineProperty && Object.getOwnPropertyDescriptor;
                for (var o in t)
                    if ("default" !== o && Object.prototype.hasOwnProperty.call(t, o)) {
                        var a = n ? Object.getOwnPropertyDescriptor(t, o) : null;
                        a && (a.get || a.set) ?
                            Object.defineProperty(r, o, a) :
                            (r[o] = t[o]);
                    }
                return (r.default = t), i && i.set(t, r), r;
            }
            Object.defineProperty(e, "__esModule", { value: !0 }), (e.default = void 0);
            var n = {
                AnimLoad: async() => Promise.resolve().then(() => r(i(176))),
                AnimPlay: async() => Promise.resolve().then(() => r(i(177))),
                FeatureObserver: async() => Promise.resolve().then(() => r(i(178))),
                LoadTimeout: async() => Promise.resolve().then(() => r(i(181))),
                PlayPauseButton: async() => Promise.resolve().then(() => r(i(182))),
                ViewportSource: async() => Promise.resolve().then(() => r(i(183))),
            };
            e.default = n;
        },
        function(t, e, i) {
            "use strict";
            var s = i(1);
            Object.defineProperty(e, "__esModule", { value: !0 }), (e.default = void 0);
            var r = s(i(69)),
                n = s(i(6)),
                o = s(i(23));
            const a = { start: "t - 200vh", end: "b + 100vh" };
            class h extends n.default {
                constructor(t) {
                    super(t),
                        (this._anim = t.anim),
                        (this._container = t.container || this.media.el.parentElement),
                        (this._scrollGroup =
                            this.options.scrollGroup ||
                            this._anim.getGroupForTarget(this._container || this.media.el)),
                        this._initialize();
                }
                _initialize() {
                    (this._onLoadKeyframeEnter = this._onLoadKeyframeEnter.bind(this)),
                    (this._onLoadKeyframeExit = this._onLoadKeyframeExit.bind(this));
                    const t = (0, r.default)(
                        this.media.el.dataset,
                        this.options,
                        "loadKeyframe",
                        a
                    );
                    t.event || (t.event = "inline-media-load-kf"),
                        (this._loadKeyframe = this._scrollGroup.addKeyframe(
                            this.media.el,
                            t
                        )),
                        this._loadKeyframe.controller.on(
                            `${this._loadKeyframe.event}:enter`,
                            this._onLoadKeyframeEnter
                        ),
                        this._loadKeyframe.controller.on(
                            `${this._loadKeyframe.event}:exit`,
                            this._onLoadKeyframeExit
                        );
                }
                get loadKeyframe() {
                    return this._loadKeyframe;
                }
                async _onLoadKeyframeEnter(t) {
                    try {
                        await this.media.load(), (this._loaded = !0);
                    } catch (t) {
                        (0, o.default)("AnimLoad: Load error occured");
                    }
                }
                _onLoadKeyframeExit(t) {}
                destroy() {
                    this._loadKeyframe.controller.off(
                            `${this._loadKeyframe.event}:enter`,
                            this._onLoadKeyframeEnter
                        ),
                        this._loadKeyframe.controller.off(
                            `${this._loadKeyframe.event}:exit`,
                            this._onLoadKeyframeExit
                        ),
                        super.destroy();
                }
            }
            e.default = h;
        },
        function(t, e, i) {
            "use strict";
            var s = i(1);
            Object.defineProperty(e, "__esModule", { value: !0 }), (e.default = void 0);
            var r = s(i(10)),
                n = s(i(69)),
                o = s(i(6));
            const a = { start: "t - 100vh", end: "b" };
            class h extends o.default {
                constructor(t) {
                    super(t),
                        (this._anim = t.anim),
                        (this._container = t.container || this.media.el.parentElement),
                        (this._scrollGroup =
                            this.options.scrollGroup ||
                            this._anim.getGroupForTarget(this._container || this.media.el)),
                        this._initialize();
                }
                _initialize() {
                    (this._onPlayKeyframeEnter = this._onPlayKeyframeEnter.bind(this)),
                    (this._onPlayKeyframeExit = this._onPlayKeyframeExit.bind(this));
                    const t = this.media.el.dataset;
                    if (
                        ((this._autoPlayWithReducedMotion = (0, n.default)(
                            t,
                            this.options,
                            "autoPlayWithReducedMotion", !1
                        )), !this._autoPlayWithReducedMotion && h.prefersReducedMotion)
                    )
                        return;
                    (this._pauseOnExit = (0, n.default)(
                        t,
                        this.options,
                        "pauseOnExit", !1
                    )),
                    (this._resetOnExit = (0, n.default)(
                        t,
                        this.options,
                        "resetOnExit", !1
                    ));
                    const e = (0, n.default)(t, this.options, "playKeyframe", a);
                    e.event || (e.event = "inline-media-play-kf"),
                        (this._playKeyframe = this._scrollGroup.addKeyframe(
                            this.media.el,
                            e
                        )),
                        this._playKeyframe.controller.on(
                            `${this._playKeyframe.event}:enter`,
                            this._onPlayKeyframeEnter
                        ),
                        this._playKeyframe.controller.on(
                            `${this._playKeyframe.event}:exit`,
                            this._onPlayKeyframeExit
                        ),
                        (this._onLoadStart = this._onLoadStart.bind(this)),
                        this.media.on(r.default.MEDIA_LOAD_START, this._onLoadStart);
                }
                _onLoadStart() {
                    this._loaded = !1;
                }
                async _onPlayKeyframeEnter(t) {
                    if (
                        ((this._inFrame = !0), !this._paused &&
                            (this._loaded || (await this.media.load(), (this._loaded = !0)),
                                this._inFrame))
                    )
                        try {
                            await this.media.play();
                        } catch (t) {}
                }
                _onPlayKeyframeExit(t) {
                    (this._inFrame = !1),
                    this._loaded && this.media.el.paused && !this.media.el.ended ?
                        (this._paused = !0) :
                        this._pauseOnExit && ((this._paused = !1), this.media.el.pause()),
                        this._loaded && this._resetOnExit && (this.media.el.currentTime = 0);
                }
                get playKeyframe() {
                    return this._playKeyframe;
                }
                destroy() {
                    this._playKeyframe.controller.off(
                            `${this._playKeyframe.event}:enter`,
                            this._onPlayKeyframeEnter
                        ),
                        this._playKeyframe.controller.off(
                            `${this._playKeyframe.event}:exit`,
                            this._onPlayKeyframeExit
                        ),
                        this.media.off(r.default.MEDIA_LOAD_START, this._onLoadStart),
                        super.destroy();
                }
                static get prefersReducedMotion() {
                    return window.matchMedia("(prefers-reduced-motion: reduce)").matches;
                }
            }
            e.default = h;
        },
        function(t, e, i) {
            "use strict";
            var s = i(1);
            Object.defineProperty(e, "__esModule", { value: !0 }), (e.default = void 0);
            var r = s(i(6)),
                n = s(i(24)),
                o = s(i(22)),
                a = s(i(10)),
                h = s(i(179)),
                l = s(i(180));
            const c = (t) => t,
                u = (t) => (t ? t.split(",").map((t) => t.trim()) : null);
            class d extends r.default {
                constructor(t) {
                    super(t);
                    const e = (e, i, s) => {
                        let r = "inlineMedia" + e[0].toUpperCase() + e.slice(1);
                        return i(this.media.el.dataset[r]) || t[e] || s;
                    };
                    (this._disabledStates = new h.default({
                        features: e("disabledWhen", u, []),
                        onActivate: this.disable.bind(this),
                        onDeactivate: this.enable.bind(this),
                    })),
                    (this._destroyStates = new h.default({
                        features: e("destroyWhen", u, []),
                        onActivate: this.destroyMedia.bind(this),
                    })),
                    (this._pausedStates = new h.default({
                        features: e("pausedWhen", u, []),
                        onActivate: this.pauseMedia.bind(this),
                    })),
                    (this._autoplayStates = new h.default({
                        features: e("autoplayWhen", u, []),
                        onActivate: this.autoplayMedia.bind(this),
                        onDeactivate: this.disableAutoplay.bind(this),
                    }));
                    const i = t.featureDetect || {};
                    var s;
                    (this.featureCallbacks = Object.entries(i).map(
                        ([t, e]) => new l.default({ featureClass: t, callback: e })
                    )),
                    (this._featureElement =
                        (s = e("featureElement", c, document.documentElement)) instanceof HTMLElement ?
                        s :
                        document.querySelector(s)),
                    (this.featureSets = [
                        this._autoplayStates,
                        this._pausedStates,
                        this._disabledStates,
                        this._destroyStates,
                    ]),
                    (this._featuresUpdated = this._featuresUpdated.bind(this)),
                    (this.play = !1),
                    (this._observer = new MutationObserver(this._featuresUpdated)),
                    this._observer.observe(this._featureElement, {
                            attributes: !0,
                            attributeFilter: ["class"],
                        }),
                        this._featuresUpdated();
                }
                get loadingState() {
                    return this._disabledStates.isDetected ? o.default.DISABLED : void 0;
                }
                get playbackState() {
                    return this._disabledStates.isDetected ? n.default.PAUSED : void 0;
                }
                _featuresUpdated() {
                    let t = this._featureElement.classList;
                    this.featureSets
                        .filter((e) => (e.updateFeatureState(t), e.detectionChanged))
                        .forEach((t) => t.applyEffect()),
                        this.featureCallbacks.forEach((e) => {
                            e.updatePresence(t),
                                e.isPresent && e.presenceChanged && e.triggerCallback(this.media);
                        });
                }
                autoplayMedia() {
                    this.media.el.setAttribute("autoplay", !0), this.media.play();
                }
                disableAutoplay() {
                    this.media.el.setAttribute("autoplay", !1);
                }
                pauseMedia() {
                    this.media.el.pause();
                }
                destroyMedia() {
                    this.media.destroy();
                }
                destroy() {
                    this._observer.disconnect();
                }
                disable() {
                    this.media.abortLoad(),
                        this.media.el.pause(),
                        (this.play = c),
                        this.media.trigger(a.default.LOADING_STATE_CHANGE),
                        this.media.trigger(a.default.PLAYBACK_STATE_CHANGE);
                }
                enable() {
                    (this.play = !1),
                    this.media.trigger(a.default.LOADING_STATE_CHANGE),
                        this.media.trigger(a.default.PLAYBACK_STATE_CHANGE);
                }
            }
            var p = d;
            e.default = p;
        },
        function(t, e, i) {
            "use strict";
            Object.defineProperty(e, "__esModule", { value: !0 }), (e.default = void 0);
            const s = () => {};
            var r = class {
                constructor(t) {
                    var e;
                    (this._features = new Set(
                        ((e = t.features), Array.isArray(e) ? e : e ? [e] : [])
                    )),
                    (this._isDetected = !1),
                    (this._wasDetected = !1),
                    (this._onActivate = t.onActivate || s),
                    (this._onDeactivate = t.onDeactivate || s);
                }
                get detectionChanged() {
                    return this._isDetected !== this._wasDetected;
                }
                get isDetected() {
                    return this._isDetected;
                }
                updateFeatureState(t) {
                    this._wasDetected = this._isDetected;
                    for (let e of t)
                        if (this._features.has(e)) return void(this._isDetected = !0);
                    this._isDetected = !1;
                }
                applyEffect() {
                    this._isDetected ? this._onActivate() : this._onDeactivate();
                }
            };
            e.default = r;
        },
        function(t, e, i) {
            "use strict";
            Object.defineProperty(e, "__esModule", { value: !0 }), (e.default = void 0);
            var s = class {
                constructor(t) {
                    (this.featureClass = t.featureClass),
                    (this._callback = t.callback),
                    (this._isPresent = !1),
                    (this._wasPresent = !1);
                }
                get presenceChanged() {
                    return this._isPresent !== this._wasPresent;
                }
                get isPresent() {
                    return this._isPresent;
                }
                updatePresence(t) {
                    (this._wasPresent = this._isPresent),
                    (this._isPresent = t.contains(this.featureClass));
                }
                triggerCallback(t) {
                    return this._callback(t);
                }
            };
            e.default = s;
        },
        function(t, e, i) {
            "use strict";
            var s = i(1);
            Object.defineProperty(e, "__esModule", { value: !0 }), (e.default = void 0);
            var r = s(i(6)),
                n = s(i(10));
            const o = "inline-media-timeout";
            class a extends r.default {
                static get LOAD_TIMEOUT_EVENT() {
                    return o;
                }
                constructor(t) {
                    super(t);
                    const e = this.media.el.dataset;
                    (this._timeoutDelay = e.loadTimeout || t.loadTimeout || 3e4),
                    (this._onLoadStart = this._onLoadStart.bind(this)),
                    (this._onLoadComplete = this._onLoadComplete.bind(this)),
                    (this._onTimerComplete = this._onTimerComplete.bind(this)),
                    this.media.on(n.default.MEDIA_LOAD_START, this._onLoadStart),
                        this.media.on(n.default.MEDIA_LOAD_COMPLETE, this._onLoadComplete);
                }
                _onLoadStart() {
                    clearTimeout(this._timer),
                        (this._timer = setTimeout(this._onTimerComplete, this._timeoutDelay));
                }
                _onLoadComplete() {
                    clearTimeout(this._timer);
                }
                _onTimerComplete() {
                    this.media.trigger(o),
                        this.media.destroy(),
                        this.media.el.parentElement &&
                        this.media.el.parentElement.removeChild(this.media.el);
                }
                destroy() {
                    clearTimeout(this._timer),
                        this.media.off(n.default.MEDIA_LOAD_START, this._onLoadStart);
                }
            }
            e.default = a;
        },
        function(t, e, i) {
            "use strict";
            var s = i(1);
            Object.defineProperty(e, "__esModule", { value: !0 }), (e.default = void 0);
            var r = s(i(6)),
                n = s(i(10)),
                o = s(i(24));
            const a = '[data-inline-media-control="PlayPause"]',
                h = "[data-inline-media-controller='{id}']",
                l = "Pause",
                c = "Play",
                u = "Replay",
                d = { CLICK: "data-analytics-click", TITLE: "data-analytics-title" };
            class p extends r.default {
                constructor(t) {
                    super(t),
                        (this._container = t.container || this.media.el.parentElement),
                        (this._button = this._findButton()),
                        (this._onClick = this._onClick.bind(this)),
                        (this._onPlaybackStateChange =
                            this._onPlaybackStateChange.bind(this));
                    const e = this._button.dataset;
                    (this._ariaLabels = {
                        playing: e.ariaPlaying || t.ariaPlaying || l,
                        paused: e.ariaPaused || t.ariaPaused || c,
                        ended: e.ariaEnded || t.ariaEnded || u,
                    }),
                    this._button.addEventListener("click", this._onClick),
                        this.media.on(
                            n.default.PLAYBACK_STATE_CHANGE,
                            this._onPlaybackStateChange
                        ),
                        (this._activeAnalytics = Object.values(d).filter(
                            (t) =>
                            (this._button.hasAttribute(t + "-play") &&
                                this._button.hasAttribute(t + "-pause")) ||
                            this._button.hasAttribute(t + "-replay")
                        ));
                }
                _findButton() {
                    if (this.options.playPauseButton) return this.options.playPauseButton;
                    let t = this._container.querySelector(`${a}`);
                    if (!t) {
                        const e = document.querySelectorAll(h.replace("{id}", this.media.id));
                        for (const i of e)
                            t =
                            "PlayPause" === i.getAttribute("data-inline-media-control") ?
                            i :
                            i.querySelector(`${a}`);
                    }
                    return t;
                }
                _onPlaybackStateChange() {
                    switch (this.media.playbackState) {
                        case o.default.PLAYING:
                            this._button.setAttribute("aria-label", this._ariaLabels.playing);
                            break;
                        case o.default.ENDED:
                            this._button.setAttribute("aria-label", this._ariaLabels.ended);
                            break;
                        default:
                            this._button.setAttribute("aria-label", this._ariaLabels.paused);
                    }
                    this._setAnalyticsState();
                }
                _setAnalyticsState() {
                    let t;
                    switch (this.media.playbackState) {
                        case o.default.PLAYING:
                            t = "pause";
                            break;
                        case o.default.ENDED:
                            t = "replay";
                            break;
                        default:
                            t = "play";
                    }
                    for (const e of this._activeAnalytics) {
                        let i = t;
                        "replay" !== t ||
                            this._button.hasAttribute(`${e}-${i}`) ||
                            (i = "play"),
                            this._button.setAttribute(
                                e,
                                this._button.getAttribute(`${e}-${i}`)
                            );
                    }
                }
                _onClick(t) {
                    this.media.el.paused ? this.media.play() : this.media.el.pause();
                }
                destroy() {
                    this._button.removeEventListener("click", this._onClick),
                        this.media.off(
                            n.default.PLAYBACK_STATE_CHANGE,
                            this._onPlaybackStateChange
                        );
                }
            }
            e.default = p;
        },
        function(t, e, i) {
            "use strict";
            var s = i(1);
            Object.defineProperty(e, "__esModule", { value: !0 }), (e.default = void 0);
            var r = s(i(6)),
                n = s(i(70)),
                o = s(i(185)),
                a = (s(i(23)), s(i(71)), s(i(22)));
            class h extends r.default {
                constructor(t) {
                    super(t), (this._cachedPlaying = null), this._initialize();
                }
                _initialize() {
                    this._onBreakpointChange = this._onBreakpointChange.bind(this);
                    const t = Object.assign({ callback: this._onBreakpointChange },
                        this.options
                    );
                    (this._breakpointDetect = t.anim ? new o.default(t) : new n.default(t)),
                    (this._currentTime = 0);
                    const e = this.media.el.dataset;
                    (this._basePath =
                        this.options.basePath || e.inlineMediaBasepath || "./"),
                    this._onBreakpointChange();
                }
                _onBreakpointChange() {
                    this._currentBreakpoint = this._breakpointDetect.breakpoint;
                    const t =
                        window.devicePixelRatio > 1 ?
                        `${this._currentBreakpoint}_2x` :
                        this._currentBreakpoint,
                        e = `${this._basePath}${t}.mp4`;
                    this._swapSrc(e);
                }
                get src() {
                    return this._src;
                }
                async _swapSrc(t) {
                    if (((this._src = t), this.media.loadingState === a.default.EMPTY))
                        return;
                    const e =
                        null !== this._cachedPlaying ?
                        this._cachedPlaying :
                        !this.media.el.paused;
                    return (
                        this.media.loadingState === a.default.LOADED &&
                        (this._currentTime = this.media.el.currentTime),
                        (this._cachedPlaying = e),
                        await this.media.load(`${t}#t=${this._currentTime}`),
                        (this._cachedPlaying = null),
                        e ? this.media.play() : Promise.resolve()
                    );
                }
                destroy() {
                    this._breakpointDetect.destroy(), super.destroy();
                }
            }
            e.default = h;
        },
        function(t, e, i) {
            "use strict";
            Object.defineProperty(e, "__esModule", { value: !0 }), (e.default = void 0);
            e.default = { small: 0, medium: 570, large: 780, xlarge: 1280 };
        },
        function(t, e, i) {
            "use strict";
            var s = i(1);
            Object.defineProperty(e, "__esModule", { value: !0 }), (e.default = void 0);
            var r = s(i(70)),
                n = s(i(186));
            class o extends r.default {
                constructor(t) {
                    super(t);
                }
                _initialize() {
                    (this._anim = this.options.anim),
                    (this._bpMap = this.options.animBreakpointMap || n.default),
                    (this._updateBreakpoint = this._updateBreakpoint.bind(this)),
                    (this._callback = this.options.callback),
                    this._addEventListeners(),
                        this._updateBreakpoint();
                }
                _addEventListeners() {
                    this._anim.on("ON_BREAKPOINT_CHANGE", this._updateBreakpoint);
                }
                _removeEventListeners() {
                    this._anim.off("ON_BREAKPOINT_CHANGE", this._updateBreakpoint);
                }
                _updateBreakpoint() {
                    const t = this._bpMap[this._anim.model.pageMetrics.breakpoint];
                    let e = !1;
                    this._currentBreakpoint && this._currentBreakpoint !== t && (e = !0),
                        (this._currentBreakpoint = t),
                        e && this._callback();
                }
                destroy() {
                    super.destroy();
                }
            }
            e.default = o;
        },
        function(t, e, i) {
            "use strict";
            Object.defineProperty(e, "__esModule", { value: !0 }), (e.default = void 0);
            e.default = { S: "small", M: "medium", L: "large", X: "xlarge" };
        },
        function(t, e, i) {
            "use strict";
            const s = i(21);
            t.exports = class extends s {
                constructor(t) {
                    super(t),
                        (this.triggers = this.el.querySelectorAll(".tile-overlay-toggle")),
                        (this.labels = this.el.querySelectorAll("label")),
                        (this.btns = this.el.querySelectorAll(".tile-button-text"));
                }
                mounted() {
                    this.triggers.forEach((t, e) => {
                        const i = t.getAttribute("data-analytics-click"),
                            s = t.parentElement,
                            r = s.querySelector(".tile-overlay-content");
                        t.addEventListener("change", (n) => {
                                t.checked ?
                                    (this.btns[e].setAttribute("aria-expanded", !0),
                                        s.classList.add("expanded"),
                                        r.setAttribute("aria-hidden", !1),
                                        t.removeAttribute("data-analytics-click")) :
                                    (this.btns[e].setAttribute("aria-expanded", !1),
                                        s.classList.remove("expanded"),
                                        r.setAttribute("aria-hidden", !0),
                                        t.setAttribute("data-analytics-click", i));
                            }),
                            this.labels[e].addEventListener("keypress", (e) => {
                                (13 !== e.keyCode && 32 !== e.keyCode) ||
                                (e.preventDefault(),
                                    (t.checked = !t.checked),
                                    t.dispatchEvent(new Event("change")));
                            });
                    });
                }
                static IS_SUPPORTED() {
                    return !0;
                }
            };
        },
        function(t, e, i) {
            "use strict";
            t.exports = Object.assign({
                    applyPrices: i(189),
                    fetchEduProducts: i(72),
                    fetchProducts: i(81),
                    fetchTradeIns: i(82),
                    Product: i(76),
                    TradeIn: i(83),
                },
                i(80)
            );
        },
        function(t, e, i) {
            "use strict";
            const s = i(72),
                r = i(81),
                n = i(82),
                o = i(25),
                a = "Elements",
                h = "Hide",
                l = "HideAll",
                c = "MultipleElementsToHide",
                u = "Product",
                d = "SingleElementsToHide",
                p = "edupricing",
                m = "pricing",
                f = "tradein";
            t.exports = new(class {
                getProductID(t, e) {
                    let i = [];
                    return (
                        e.forEach((e) => {
                            i.push(e.dataset[`${t}${u}`]);
                        }), [...new Set(i)]
                    );
                }
                setElements(t) {
                    const e = [...document.querySelectorAll(`[data-${t}-product]`)];
                    let i = Array.prototype.slice
                        .call(e)
                        .filter((t) => "SCRIPT" !== t.tagName);
                    this[`${t}${a}`] = i;
                }
                getSingleElementToHide(t) {
                    const e = [...document.querySelectorAll(`[data-${t}-hide]`)];
                    this[`${t}${d}`] = e;
                }
                getMultipleElementsToHide(t) {
                    const e = [...document.querySelectorAll(`[data-${t}-hide-all]`)];
                    this[`${t}${c}`] = e;
                }
                fetchProductInfo(t, e = {}) {
                    let i, h;
                    const l = this.getProductID(t, this[`${t}${a}`]);
                    return o(t).then((o) => {
                        const a = Object.assign({}, o, e);
                        return (
                            t === m ?
                            (h = r(l, e)) :
                            t === p ?
                            (h = s(l, e)) :
                            t === f ?
                            (h = n(l, e)) :
                            (i = "API not supported"),
                            i || h.then((t) => ({ response: t, options: a }))
                        );
                    });
                }
                getValueFromPath(t, e) {
                    return t
                        .replace(/\s+/g, "")
                        .replace(/\$\{([\w\d.]+)\}/g, (t, i) =>
                            i.split(".").reduce((t, e) => (t && t[e] ? t[e] : ""), e)
                        );
                }
                handleError(t, e, i) {
                    this.getSingleElementToHide(i),
                        this[`${i}${d}`].forEach((s) => {
                            const r = s.dataset[`${i}${h}`],
                                n = e.products[r],
                                o = t.dataset[`${i}${u}`],
                                a = n && "productName" in n && "UNKNOWN" === n.productName,
                                l = n && "type" in n && "UNKNOWN" === n.type;
                            (e.error || !n || a || l) &&
                            r === o &&
                                ((n && !a && !l) || t.innerText || (s.style.display = "none"));
                        }),
                        this.getMultipleElementsToHide(i),
                        this[`${i}${c}`].forEach((t) => {
                            const s = t.dataset[`${i}${l}`].split(",").every((t) => {
                                const i =
                                    e.products[t] &&
                                    "productName" in e.products[t] &&
                                    "UNKNOWN" === e.products[t].productName,
                                    s =
                                    e.products[t] &&
                                    "type" in e.products[t] &&
                                    "UNKNOWN" === e.products[t].type;
                                return !e.products[t] || i || s;
                            });
                            (e.error || s) && (t.style.display = "none");
                        }),
                        t.innerText || (t.style.display = "none");
                }
                fetchProductDataFromHTML(t, e) {
                    return new Promise((i) => {
                        this.setElements(t),
                            this.fetchProductInfo(t, e)
                            .then(({ response: e, options: s }) => {
                                this[`${t}${a}`].forEach((i) => {
                                        let r;
                                        if (!e.error || s.dummyPrices) {
                                            const s = i.dataset[`${t}${u}`];
                                            let n = e.products[s];
                                            const o = (i.dataset.productTemplate || "").replace(
                                                /\$\{\s*([\w\d.]+)\s*\}/g,
                                                (t) => {
                                                    const e = this.getValueFromPath(t, n);
                                                    return e || (r = !0), e;
                                                }
                                            );
                                            n && !r ?
                                                ((i.textContent = o),
                                                    (i.dataset.pricingLoaded = ""),
                                                    i.parentElement.classList.add("has-dynamic-content")) :
                                                this.handleError(i, e, t);
                                        } else this.handleError(i, e, t);
                                    }),
                                    i(e.error);
                            })
                            .catch((t) => {
                                throw t;
                            });
                    });
                }
                loadEduPricingFromHTML(t) {
                    return this.fetchProductDataFromHTML(p, t);
                }
                loadPricingFromHTML(t) {
                    return this.fetchProductDataFromHTML(m, t);
                }
                loadTradeInFromHTML(t) {
                    return this.fetchProductDataFromHTML(f, t);
                }
            })();
        },
        function(t, e, i) {
            "use strict";
            const { mockPrices: s } = i(74),
                r = i(75);
            t.exports = function(t, e, i = "en") {
                const n = parseFloat(s[e] || e || 0),
                    o = r(n, i);
                return {
                    id: t,
                    name: "",
                    type: "WUIP",
                    price: {
                        value: n,
                        display: {
                            actual: "$" + Number(n).toLocaleString(i, { minimumFractionDigits: 2 }),
                            smart: "$" + o,
                            from: "From $" + o,
                        },
                    },
                };
            };
        },
        function(t, e, i) {
            "use strict";
            t.exports = {
                assert: i(192),
                count: i(193),
                countReset: i(194),
                dir: i(195),
                dirxml: i(196),
                enabled: i(68),
                error: i(197),
                group: i(198),
                groupCollapsed: i(199),
                groupEnd: i(200),
                info: i(201),
                log: i(71),
                profile: i(202),
                profileEnd: i(203),
                table: i(204),
                time: i(205),
                timeEnd: i(206),
                trace: i(207),
                warn: i(23),
            };
        },
        function(t, e, i) {
            "use strict";
            t.exports = i(0)("assert");
        },
        function(t, e, i) {
            "use strict";
            t.exports = i(0)("count");
        },
        function(t, e, i) {
            "use strict";
            t.exports = i(0)("countReset");
        },
        function(t, e, i) {
            "use strict";
            t.exports = i(0)("dir");
        },
        function(t, e, i) {
            "use strict";
            t.exports = i(0)("dirxml");
        },
        function(t, e, i) {
            "use strict";
            t.exports = i(0)("error");
        },
        function(t, e, i) {
            "use strict";
            t.exports = i(0)("group");
        },
        function(t, e, i) {
            "use strict";
            t.exports = i(0)("groupCollapsed");
        },
        function(t, e, i) {
            "use strict";
            t.exports = i(0)("groupEnd");
        },
        function(t, e, i) {
            "use strict";
            t.exports = i(0)("info");
        },
        function(t, e, i) {
            "use strict";
            t.exports = i(0)("profile");
        },
        function(t, e, i) {
            "use strict";
            t.exports = i(0)("profileEnd");
        },
        function(t, e, i) {
            "use strict";
            t.exports = i(0)("table");
        },
        function(t, e, i) {
            "use strict";
            t.exports = i(0)("time");
        },
        function(t, e, i) {
            "use strict";
            t.exports = i(0)("timeEnd");
        },
        function(t, e, i) {
            "use strict";
            t.exports = i(0)("trace");
        },
        function(t, e, i) {
            "use strict";
            var s = {};
            t.exports = function(t, e, i) {
                if (
                    ((t = t.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]")),
                        i || !s.hasOwnProperty(t))
                ) {
                    var r = new RegExp("[\\?&]" + t + "=([^&#]*)").exec(location.search),
                        n = null === r ? e : decodeURIComponent(r[1].replace(/\+/g, " "));
                    ("true" !== n && "false" !== n) || (n = "true" === n),
                    isNaN(parseFloat(n)) || (n = parseFloat(n)),
                        (s[t] = n);
                }
                return s[t];
            };
        },
        function(t, e, i) {
            "use strict";
            const s = i(210),
                r = /\?(.+)/,
                n = /(#.*)/;
            t.exports = function(t, e, i = []) {
                    const o = !Array.isArray(i),
                        a = [],
                        h = [],
                        l = (t) => {
                            t.match("^slug:") ? h.push(((t) => t.split(":")[1])(t)) : a.push(t);
                        };
                    if (o) l(i);
                    else
                        for (const t of i) l(t);
                    let c = ((t = t.replace(n, "")).match(r) || [])[1],
                        u = t;
                    if (i.length) {
                        const t = ((t, e, i) => {
                                const s = !t.length && e.length,
                                    r = t.length;
                                return "parts" === i ? i : s ? i.slugs : r ? i.ids : "";
                            })(a, h, e),
                            i = `${s(a)}${((t, e) => {
            const i = t.length && e.length,
              r = !t.length && e.length;
            return i ? `&slugs=${s(e)}` : r ? s(e) : "";
          })(a, h)}`;
        (u += c ? "&" : "?"), (u = u.concat(`${t}=${i}`));
      }
      return u;
    };
  },
  function (t, e, i) {
    "use strict";
    t.exports = function (t = []) {
      return (
        Array.isArray(t) || (t = [t]),
        t
          .filter((t) => "string" == typeof t)
          .map((t) => encodeURIComponent(String(t).trim()))
          .join(",")
      );
    };
  },
  function (t, e, i) {
    "use strict";
    t.exports = function (t) {
      try {
        return JSON.parse(t);
      } catch (t) {
        return null;
      }
    };
  },
  function (t, e, i) {
    "use strict";
    const s = i(12);
    t.exports = class extends Error {
      constructor(t = {}) {
        let e;
        "endpoint" === t.type &&
          (e =
            "Failed to fetch product prices: The API service endpoint was not specified."),
          super(e),
          (this.name = "ConfigurationError"),
          (this.type = t.type);
      }
      showHint() {
        "endpoint" === this.type &&
          (s.warn(
            this.message +
              " This may be expected if this page's locale doesn't have an Apple Online Store."
          ),
          s.info(
            'If prices are expected for this locale, check that the API service endpoint is specified in HTML with %c<link rel="ac:pricing-endpoint" href="/path/to/endpoint">%c or the "fetchProducts" function\'s "endpoint" option.',
            "font-family:monospace",
            ""
          ));
      }
    };
  },
  function (t, e, i) {
    "use strict";
    const s = i(12);
    t.exports = class extends Error {
      constructor() {
        super(
          "Failed to fetch product prices: The API service responded with a status of 404 (Not Found)."
        ),
          (this.name = "ServiceNotFoundError");
      }
      showHint() {
        s.warn(this.message),
          s.info(
            'Check the "href" value of the %c<link rel="ac:pricing-endpoint">%c tag or the "fetchProducts" function\'s "endpoint" option, if specified.',
            "font-family:monospace",
            ""
          );
      }
    };
  },
  function (t, e, i) {
    "use strict";
    const s = i(12);
    t.exports = class extends Error {
      constructor() {
        super(
          "Failed to fetch product prices: The Apple Online Store is temporarily unavailable."
        ),
          (this.name = "ServiceUnavailableError");
      }
      showHint() {
        s.warn(this.message);
      }
    };
  },
  function (t, e, i) {
    "use strict";
    const s = i(12);
    t.exports = class extends Error {
      constructor(t) {
        super(
          "Failed to fetch product prices: The API service did not respond within " +
            t +
            " seconds, so the request was aborted."
        ),
          (this.name = "TimeoutError"),
          (this.timeoutValue = t);
      }
      showHint() {
        s.warn(this.message);
      }
    };
  },
  function (t, e, i) {
    "use strict";
    const s = i(12);
    t.exports = class extends Error {
      constructor() {
        super("Failed to fetch prices: An unexpected error occured."),
          (this.name = "UnexpectedError");
      }
      showHint() {
        s.warn(this.message),
          s.info(
            "The API service endpoint may require authentication and/or authorization."
          );
      }
    };
  },
  function (t, e, i) {
    "use strict";
    const s = i(218),
      r = i(79),
      n = i(83);
    t.exports = class extends r {
      constructor(t, e) {
        super(t, e), (this.identifierParam = { ids: "ids", slugs: "slugs" });
      }
      createDummyItem(t) {
        return s(t, "unauthorized");
      }
      formatResponseItem(t, e) {
        let i = null;
        return (
          this.options.dummyPrices &&
            "UNKNOWN" === e.productName &&
            ((e = s(t, "unknown")), this.itemsWithDummyPrice.push(t)),
          (i = new n(e)),
          999999 === i.credit.value && this.itemsWithDummyPrice.push(t),
          i
        );
      }
      getItemsFromResponse(t) {
        return t.ids;
      }
    };
  },
  function (t, e, i) {
    "use strict";
    const { mockPrices: s } = i(74),
      r = i(75);
    t.exports = function (t, e, i = "en") {
      const n = parseFloat(s[e] || e || 0),
        o = r(n, i);
      return {
        id: t,
        productName: "",
        productNameWithMaxPrice: "",
        credit: {
          value: n,
          display: {
            actual:
              "$" + Number(n).toLocaleString(i, { minimumFractionDigits: 2 }),
            smart: "$" + o,
            from: "From $" + o,
            upto: "Up to $" + o,
          },
        },
      };
    };
  },
  function (t, e, i) {
    "use strict";
    function s() {
      this._createElements(), this._bindEvents();
    }
    var r = s.prototype;
    (r._bindEvents = function () {
      this._onResize = this._resize.bind(this);
    }),
      (r._createElements = function () {
        this.span = document.createElement("span");
        var t = this.span.style;
        if (
          ((t.visibility = "hidden"),
          (t.position = "absolute"),
          (t.top = "0"),
          (t.zIndex = "-1"),
          (this.span.innerHTML = "&nbsp;"),
          !window.ResizeObserver)
        ) {
          this.iframe = document.createElement("iframe");
          var e = this.iframe.style;
          (e.position = "absolute"),
            (e.top = "0"),
            (e.left = "0"),
            (e.width = "100%"),
            (e.height = "100%"),
            this.span.appendChild(this.iframe);
        }
        document.body.appendChild(this.span);
      }),
      (r.detect = function (t) {
        (this.originalSize = t || 17),
          (this.currentSize = parseFloat(
            window.getComputedStyle(this.span)["font-size"]
          )),
          this.currentSize > this.originalSize && this._onResize(),
          this.isDetecting ||
            (window.ResizeObserver
              ? ((this.resizeObserver = new ResizeObserver(this._onResize)),
                this.resizeObserver.observe(this.span))
              : this.iframe.contentWindow.addEventListener(
                  "resize",
                  this._onResize
                ),
            (this.isDetecting = !0));
      }),
      (r._resize = function () {
        (this.currentSize = parseFloat(
          window.getComputedStyle(this.span)["font-size"]
        )),
          this.originalSize < this.currentSize
            ? document.documentElement.classList.add("text-zoom")
            : document.documentElement.classList.remove("text-zoom"),
          window.dispatchEvent(new Event("resize")),
          window.dispatchEvent(
            new CustomEvent("resize:text-zoom", { detail: this })
          );
      }),
      (r.getScale = function () {
        return this.currentSize / this.originalSize;
      }),
      (r.remove = function () {
        this.isDetecting &&
          (this.resizeObserver && this.resizeObserver.unobserve(this.span),
          this.iframe &&
            this.iframe.contentWindow.removeEventListener(
              "resize",
              this._onResize
            ),
          (this.isDetecting = !1));
      }),
      (r.destroy = function () {
        this.remove(),
          this.span &&
            this.span.parentElement &&
            this.span.parentElement.removeChild(this.span),
          (this.span = null),
          (this.iframe = null),
          (this.resizeObserver = null);
      }),
      (t.exports = new s());
  },
  function (t, e, i) {
    "use strict";
    const s = i(4).EventEmitterMicro,
      r = i(9),
      n = i(16),
      o = i(42),
      a = i(87),
      h = i(88),
      l = i(228),
      c = i(229),
      u = { update: i(8), cancelUpdate: i(59), external: i(20), draw: i(5) };
    let d = null;
    t.exports = window.AC.SharedInstance.share(
      "AnimSystem",
      c.major,
      class extends s {
        constructor() {
          if ((super(), d))
            throw "You cannot create multiple AnimSystems. You probably want to create multiple groups instead. You can have unlimited groups on a page";
          (d = this),
            (this.groups = []),
            (this.scrollSystems = []),
            (this.timeSystems = []),
            (this._forceUpdateRAFId = -1),
            (this._initialized = !1),
            (this.model = r),
            (this.version = c.version),
            (this._resolveReady = () => {}),
            (this.ready = new Promise((t) => (this._resolveReady = t))),
            (this.onScroll = this.onScroll.bind(this)),
            (this.onResizedDebounced = this.onResizedDebounced.bind(this)),
            (this.onResizeImmediate = this.onResizeImmediate.bind(this));
        }
        initialize() {
          return (
            this._initialized ||
              ((this._initialized = !0),
              (this.timeSystems = []),
              (this.scrollSystems = []),
              (this.groups = []),
              this.setupEvents(),
              this.initializeResizeFilter(),
              this.initializeModel(),
              this.createDOMGroups(),
              this.createDOMKeyframes(),
              this._resolveReady()),
            this.ready
          );
        }
        remove() {
          return Promise.all(this.groups.map((t) => t.remove())).then(() => {
            (this.groups = null),
              (this.scrollSystems = null),
              (this.timeSystems = null),
              window.clearTimeout(r.RESIZE_TIMEOUT),
              window.removeEventListener("scroll", this.onScroll),
              window.removeEventListener("resize", this.onResizeImmediate),
              (this._events = {}),
              (this._initialized = !1),
              (this.ready = new Promise((t) => (this._resolveReady = t)));
          });
        }
        destroy() {
          return this.remove();
        }
        createTimeGroup(t) {
          let e = new l(t, this);
          return (
            this.groups.push(e),
            this.timeSystems.push(e),
            this.trigger(r.EVENTS.ON_GROUP_CREATED, e),
            e
          );
        }
        createScrollGroup(t) {
          if (!t)
            throw "AnimSystem scroll based groups must supply an HTMLElement";
          let e = new h(t, this);
          return (
            this.groups.push(e),
            this.scrollSystems.push(e),
            this.trigger(r.EVENTS.ON_GROUP_CREATED, e),
            e
          );
        }
        removeGroup(t) {
          return Promise.all(
            t.keyframeControllers.map((e) => t.removeKeyframeController(e))
          ).then(() => {
            let e = this.groups.indexOf(t);
            -1 !== e && this.groups.splice(e, 1),
              (e = this.scrollSystems.indexOf(t)),
              -1 !== e && this.scrollSystems.splice(e, 1),
              (e = this.timeSystems.indexOf(t)),
              -1 !== e && this.timeSystems.splice(e, 1),
              t.destroy();
          });
        }
        createDOMGroups() {
          document.body.setAttribute("data-anim-scroll-group", "body"),
            document
              .querySelectorAll("[data-anim-scroll-group]")
              .forEach((t) => this.createScrollGroup(t)),
            document
              .querySelectorAll("[data-anim-time-group]")
              .forEach((t) => this.createTimeGroup(t)),
            this.trigger(r.EVENTS.ON_DOM_GROUPS_CREATED, this.groups);
        }
        createDOMKeyframes() {
          let t = [];
          [n.DATA_ATTRIBUTE, o.DATA_ATTRIBUTE, a.DATA_ATTRIBUTE].forEach(
            function (e) {
              for (let i = 0; i < 12; i++)
                t.push(e + (0 === i ? "" : "-" + (i - 1)));
            }
          );
          for (let e = 0; e < t.length; e++) {
            let i = t[e],
              s = document.querySelectorAll("[" + i + "]");
            for (let t = 0; t < s.length; t++) {
              const e = s[t],
                r = JSON.parse(e.getAttribute(i));
              this.addKeyframe(e, r);
            }
          }
          u.update(() => {
            this.groups.forEach((t) => t.onKeyframesDirty({ silent: !0 })),
              this.groups.forEach((t) =>
                t.trigger(r.EVENTS.ON_DOM_KEYFRAMES_CREATED, t)
              ),
              this.trigger(r.EVENTS.ON_DOM_KEYFRAMES_CREATED, this),
              this.groups.forEach((t) => {
                t.forceUpdate({ waitForNextUpdate: !1, silent: !0 }),
                  t.reconcile();
              }),
              this.onScroll();
          }, !0);
        }
        initializeResizeFilter() {
          if (r.cssDimensionsTracker) return;
          const t =
            document.querySelector(".cssDimensionsTracker") ||
            document.createElement("div");
          t.setAttribute("cssDimensionsTracker", "true"),
            (t.style.position = "fixed"),
            (t.style.top = "0"),
            (t.style.width = "100%"),
            (t.style.height = "100vh"),
            (t.style.pointerEvents = "none"),
            (t.style.visibility = "hidden"),
            (t.style.zIndex = "-1"),
            document.documentElement.appendChild(t),
            (r.cssDimensionsTracker = t);
        }
        initializeModel() {
          (r.pageMetrics.windowHeight = r.cssDimensionsTracker.clientHeight),
            (r.pageMetrics.windowWidth = r.cssDimensionsTracker.clientWidth),
            (r.pageMetrics.scrollY = window.scrollY || window.pageYOffset),
            (r.pageMetrics.scrollX = window.scrollX || window.pageXOffset),
            (r.pageMetrics.breakpoint = r.getBreakpoint());
          let t = document.documentElement.getBoundingClientRect();
          (r.pageMetrics.documentOffsetX = t.left + r.pageMetrics.scrollX),
            (r.pageMetrics.documentOffsetY = t.top + r.pageMetrics.scrollY);
        }
        setupEvents() {
          window.removeEventListener("scroll", this.onScroll),
            window.addEventListener("scroll", this.onScroll),
            window.removeEventListener("resize", this.onResizeImmediate),
            window.addEventListener("resize", this.onResizeImmediate);
        }
        onScroll() {
          (r.pageMetrics.scrollY = window.scrollY || window.pageYOffset),
            (r.pageMetrics.scrollX = window.scrollX || window.pageXOffset);
          for (let t = 0, e = this.scrollSystems.length; t < e; t++)
            this.scrollSystems[t]._onScroll();
          this.trigger(r.PageEvents.ON_SCROLL, r.pageMetrics);
        }
        onResizeImmediate() {
          let t = r.cssDimensionsTracker.clientWidth,
            e = r.cssDimensionsTracker.clientHeight;
          if (
            t === r.pageMetrics.windowWidth &&
            e === r.pageMetrics.windowHeight
          )
            return;
          (r.pageMetrics.windowWidth = t),
            (r.pageMetrics.windowHeight = e),
            (r.pageMetrics.scrollY = window.scrollY || window.pageYOffset),
            (r.pageMetrics.scrollX = window.scrollX || window.pageXOffset);
          let i = document.documentElement.getBoundingClientRect();
          (r.pageMetrics.documentOffsetX = i.left + r.pageMetrics.scrollX),
            (r.pageMetrics.documentOffsetY = i.top + r.pageMetrics.scrollY),
            window.clearTimeout(r.RESIZE_TIMEOUT),
            (r.RESIZE_TIMEOUT = window.setTimeout(
              this.onResizedDebounced,
              250
            )),
            this.trigger(r.PageEvents.ON_RESIZE_IMMEDIATE, r.pageMetrics);
        }
        onResizedDebounced() {
          u.update(() => {
            let t = r.pageMetrics.breakpoint,
              e = r.getBreakpoint();
            if (e !== t) {
              (r.pageMetrics.previousBreakpoint = t),
                (r.pageMetrics.breakpoint = e);
              for (let t = 0, e = this.groups.length; t < e; t++)
                this.groups[t]._onBreakpointChange();
              this.trigger(r.PageEvents.ON_BREAKPOINT_CHANGE, r.pageMetrics);
            }
            for (let t = 0, e = this.groups.length; t < e; t++)
              this.groups[t].forceUpdate({ waitForNextUpdate: !1 });
            this.trigger(r.PageEvents.ON_RESIZE_DEBOUNCED, r.pageMetrics);
          }, !0);
        }
        forceUpdate({ waitForNextUpdate: t = !0, silent: e = !1 } = {}) {
          -1 !== this._forceUpdateRAFId &&
            u.cancelUpdate(this._forceUpdateRAFId);
          let i = () => {
            for (let t = 0, i = this.groups.length; t < i; t++) {
              this.groups[t].forceUpdate({ waitForNextUpdate: !1, silent: e });
            }
            return -1;
          };
          this._forceUpdateRAFId = t ? u.update(i, !0) : i();
        }
        addKeyframe(t, e) {
          let i = this.getGroupForTarget(t);
          return (
            (i = i || this.getGroupForTarget(document.body)),
            i.addKeyframe(t, e)
          );
        }
        getGroupForTarget(t) {
          if (t._animInfo && t._animInfo.group) return t._animInfo.group;
          let e = t;
          for (; e; ) {
            if (e._animInfo && e._animInfo.isGroup) return e._animInfo.group;
            e = e.parentElement;
          }
        }
        getControllerForTarget(t) {
          return t._animInfo && t._animInfo.controller
            ? t._animInfo.controller
            : null;
        }
      }
    );
  },
  function (t, e, i) {
    "use strict";
    const s = i(84);
    t.exports = class {
      constructor(t, e, i = !1) {
        (this.isGroup = i),
          (this.group = t),
          (this.controller = e),
          (this.controllers = []),
          (this.tweenProps = new s());
      }
    };
  },
  function (t, e, i) {
    "use strict";
    class s {
      constructor(t, e, i, s) {
        (this.mass = t),
          (this.stiffness = e),
          (this.damping = i),
          (this.initialVelocity = s),
          (this.m_w0 = Math.sqrt(this.stiffness / this.mass)),
          (this.m_zeta =
            this.damping / (2 * Math.sqrt(this.stiffness * this.mass))),
          this.m_zeta < 1
            ? ((this.m_wd =
                this.m_w0 * Math.sqrt(1 - this.m_zeta * this.m_zeta)),
              (this.m_A = 1),
              (this.m_B =
                (this.m_zeta * this.m_w0 - this.initialVelocity) / this.m_wd))
            : ((this.m_wd = 0),
              (this.m_A = 1),
              (this.m_B = -this.initialVelocity + this.m_w0));
      }
      solve(t) {
        return 0 === t || 1 === t
          ? t
          : 1 -
              (t =
                this.m_zeta < 1
                  ? Math.exp(-t * this.m_zeta * this.m_w0) *
                    (this.m_A * Math.cos(this.m_wd * t) +
                      this.m_B * Math.sin(this.m_wd * t))
                  : (this.m_A + this.m_B * t) * Math.exp(-t * this.m_w0));
      }
    }
    const r = /\d*\.?\d+/g;
    (s.fromCSSString = function (t) {
      let e = t.match(r);
      if (4 !== e.length)
        throw `SpringEasing could not convert ${cssString} to spring params`;
      let i = e.map(Number),
        n = new s(...i);
      return n.solve.bind(n);
    }),
      (t.exports = s);
  },
  function (t, e, i) {
    "use strict";
    t.exports = function (t, e) {
      if ("string" != typeof t) return t;
      try {
        return (e || document).querySelector(t) || document.querySelector(t);
      } catch (t) {
        return !1;
      }
    };
  },
  function (t, e, i) {
    "use strict";
    const s = i(225),
      r = new (i(89))();
    class n {
      constructor(t) {
        (this.group = t),
          (this.data = {
            target: null,
            anchors: null,
            metrics: this.group.metrics,
          });
      }
      parseArray(t, e) {
        return [this.parseExpression(t, e[0]), this.parseExpression(t, e[1])];
      }
      parseExpression(t, e) {
        if (!e) return null;
        if ("number" == typeof e) return e;
        if ("string" != typeof e)
          throw `Expression must be a string, received ${typeof e}: ${e}`;
        return (
          (this.data.target = t.controller.element),
          (this.data.anchors = t.anchors),
          (this.data.keyframe = t.keyframe),
          n._parse(e, this.data)
        );
      }
      parseTimeValue(t, e) {
        if ("number" == typeof e) return e;
        let i = this.group.expressionParser.parseExpression(t, e);
        return this.group.convertScrollPositionToTValue(i);
      }
      destroy() {
        this.group = null;
      }
      static parse(t, e) {
        return (
          (e = e || {}) &&
            (r.clear(),
            e.target && r.add(e.target),
            e.anchors && e.anchors.forEach((t) => r.add(t))),
          (e.metrics = r),
          n._parse(t, e)
        );
      }
      static _parse(t, e) {
        return s.Parse(t).execute(e);
      }
    }
    (n.programs = s.programs), (window.ExpressionParser = n), (t.exports = n);
  },
  function (t, e, i) {
    "use strict";
    const s = i(9),
      r = i(7),
      n = {},
      o = {
        smoothstep: (t, e, i) =>
          (i = o.clamp((i - t) / (e - t), 0, 1)) * i * (3 - 2 * i),
        deg: (t) => (180 * t) / Math.PI,
        rad: (t) => (t * Math.PI) / 180,
        random: (t, e) => Math.random() * (e - t) + t,
        atan: Math.atan2,
      };
    Object.getOwnPropertyNames(Math).forEach((t) =>
      o[t] ? null : (o[t.toLowerCase()] = Math[t])
    ),
      Object.getOwnPropertyNames(r).forEach((t) =>
        o[t] ? null : (o[t.toLowerCase()] = r[t])
      );
    let a = null;
    const h = "a",
      l = "ALPHA",
      c = "(",
      u = ")",
      d = "PLUS",
      p = "MINUS",
      m = "MUL",
      f = "DIV",
      _ = "INTEGER_CONST",
      g = "FLOAT_CONST",
      y = ",",
      E = "EOF",
      v = {
        NUMBERS: /\d|\d\.\d/,
        DIGIT: /\d/,
        OPERATOR: /[-+*/]/,
        PAREN: /[()]/,
        WHITE_SPACE: /\s/,
        ALPHA: /[a-zA-Z]|%/,
        ALPHANUMERIC: /[a-zA-Z0-9]/,
        OBJECT_UNIT: /^(t|l|b|r|%w|%h|%|h|w)$/,
        GLOBAL_METRICS_UNIT: /^(px|vh|vw)$/,
        ANY_UNIT: /^(t|l|b|r|%w|%h|%|h|w|px|vh|vw)$/,
        MATH_FUNCTION: new RegExp(`\\b(${Object.keys(o).join("|")})\\b`, "i"),
      },
      b = {
        round: 1,
        clamp: 3,
        lerp: 3,
        random: 2,
        atan: 2,
        floor: 1,
        ceil: 1,
        abs: 1,
        cos: 1,
        sin: 1,
        smoothstep: 3,
        rad: 1,
        deg: 1,
        pow: 2,
        calc: 1,
      };
    class w {
      constructor(t, e) {
        (this.type = t), (this.value = e);
      }
    }
    (w.ONE = new w("100", 100)), (w.EOF = new w(E, null));
    class T {
      constructor(t) {
        this.type = t;
      }
    }
    class x extends T {
      constructor(t, e) {
        super("UnaryOp"), (this.token = this.op = t), (this.expr = e);
      }
    }
    class A extends T {
      constructor(t, e, i) {
        super("BinOp"), (this.left = t), (this.op = e), (this.right = i);
      }
    }
    class I extends T {
      constructor(t, e) {
        if (
          (super("MathOp"),
          (this.op = t),
          (this.list = e),
          b[t.value] && e.length !== b[t.value])
        )
          throw new Error(
            `Incorrect number of arguments for '${t.value}'. Received ${
              e.length
            }, expected ${b[t.value]}`
          );
      }
    }
    class S extends T {
      constructor(t) {
        super("Num"), (this.token = t), (this.value = t.value);
      }
    }
    class P extends T {
      constructor(t, e, i) {
        super("RefValue"), (this.num = t), (this.ref = e), (this.unit = i);
      }
    }
    class C extends T {
      constructor(t, e) {
        super("CSSValue"), (this.ref = t), (this.propertyName = e);
      }
    }
    class O extends T {
      constructor(t, e) {
        super("PropValue"), (this.ref = t), (this.propertyName = e);
      }
    }
    class M {
      constructor(t) {
        let e;
        for (
          this.text = t,
            this.pos = 0,
            this.char = this.text[this.pos],
            this.tokens = [];
          (e = this.getNextToken()) && e !== w.EOF;

        )
          this.tokens.push(e);
        this.tokens.push(e);
      }
      advance() {
        this.char = this.text[++this.pos];
      }
      skipWhiteSpace() {
        for (; null != this.char && v.WHITE_SPACE.test(this.char); )
          this.advance();
      }
      name() {
        let t = "";
        for (; null != this.char && v.ALPHA.test(this.char); )
          (t += this.char), this.advance();
        return new w(l, t);
      }
      number() {
        let t = "";
        for (; null != this.char && v.DIGIT.test(this.char); )
          (t += this.char), this.advance();
        if (null != this.char && "." === this.char) {
          for (
            t += this.char, this.advance();
            null != this.char && v.DIGIT.test(this.char);

          )
            (t += this.char), this.advance();
          return new w(g, parseFloat(t));
        }
        return new w(_, parseInt(t));
      }
      getNextToken() {
        for (; null != this.char; )
          if (v.WHITE_SPACE.test(this.char)) this.skipWhiteSpace();
          else {
            if (v.DIGIT.test(this.char)) return this.number();
            if ("," === this.char) return this.advance(), new w(y, ",");
            if (v.OPERATOR.test(this.char)) {
              let t = "",
                e = this.char;
              switch (e) {
                case "+":
                  t = d;
                  break;
                case "-":
                  t = p;
                  break;
                case "*":
                  t = m;
                  break;
                case "/":
                  t = f;
              }
              return this.advance(), new w(t, e);
            }
            if (v.PAREN.test(this.char)) {
              let t = "",
                e = this.char;
              switch (e) {
                case "(":
                  t = c;
                  break;
                case ")":
                  t = u;
              }
              return this.advance(), new w(t, e);
            }
            if (v.ALPHA.test(this.char)) return this.name();
            this.error("Unexpected character " + this.char);
          }
        return w.EOF;
      }
    }
    class D {
      constructor(t) {
        (this.lexer = t), (this.pos = 0);
      }
      get currentToken() {
        return this.lexer.tokens[this.pos];
      }
      error(t, e = "") {
        let i = this.lexer.text.slice(this.pos - 3, this.pos + 3),
          s = new Error(`${t} in "${this.lexer.text}" near "${i}". ${e} `);
        throw (console.error(s.message, a ? a.keyframe || a.target : ""), s);
      }
      consume(t) {
        let e = this.currentToken;
        return (
          e.type === t
            ? (this.pos += 1)
            : this.error(
                `Invalid token ${this.currentToken.value}, expected ${t}`
              ),
          e
        );
      }
      consumeList(t) {
        t.includes(this.currentToken)
          ? (this.pos += 1)
          : this.error(
              `Invalid token ${this.currentToken.value}, expected ${tokenType}`
            );
      }
      expr() {
        let t = this.term();
        for (; this.currentToken.type === d || this.currentToken.type === p; ) {
          const e = this.currentToken;
          switch (e.value) {
            case "+":
              this.consume(d);
              break;
            case "-":
              this.consume(p);
          }
          t = new A(t, e, this.term());
        }
        return t;
      }
      term() {
        let t = this.factor();
        for (; this.currentToken.type === m || this.currentToken.type === f; ) {
          const e = this.currentToken;
          switch (e.value) {
            case "*":
              this.consume(m);
              break;
            case "/":
              this.consume(f);
          }
          t = new A(t, e, this.factor());
        }
        return t;
      }
      factor() {
        if (this.currentToken.type === d)
          return new x(this.consume(d), this.factor());
        if (this.currentToken.type === p)
          return new x(this.consume(p), this.factor());
        if (this.currentToken.type === _ || this.currentToken.type === g) {
          let t = new S(this.currentToken);
          if (
            ((this.pos += 1),
            v.OPERATOR.test(this.currentToken.value) ||
              this.currentToken.type === u ||
              this.currentToken.type === y ||
              this.currentToken.type === E)
          )
            return t;
          if (this.currentToken.type === l && this.currentToken.value === h)
            return (
              this.consume(l),
              new P(t, this.anchorIndex(), this.unit(v.ANY_UNIT))
            );
          if (this.currentToken.type === l)
            return (
              "%a" === this.currentToken.value &&
                this.error("%a is invalid, try removing the %"),
              new P(t, null, this.unit())
            );
          this.error("Expected a scaling unit type", "Such as 'h' / 'w'");
        } else {
          if (v.OBJECT_UNIT.test(this.currentToken.value))
            return new P(new S(w.ONE), null, this.unit());
          if (this.currentToken.value === h) {
            this.consume(l);
            const t = this.anchorIndex();
            if (v.OBJECT_UNIT.test(this.currentToken.value))
              return new P(new S(w.ONE), t, this.unit());
          } else if (this.currentToken.type === l) {
            if (
              "css" === this.currentToken.value ||
              "prop" === this.currentToken.value
            ) {
              const t = "css" === this.currentToken.value ? C : O;
              this.consume(l), this.consume(c);
              const e = this.propertyName();
              let i = null;
              return (
                this.currentToken.type === y &&
                  (this.consume(y), this.consume(l), (i = this.anchorIndex())),
                this.consume(u),
                new t(i, e)
              );
            }
            if (v.MATH_FUNCTION.test(this.currentToken.value)) {
              const t = this.currentToken.value.toLowerCase();
              if ("number" == typeof o[t])
                return this.consume(l), new S(new w(l, o[t]));
              const e = w[t] || new w(t, t),
                i = [];
              this.consume(l), this.consume(c);
              let s = null;
              do {
                this.currentToken.value === y && this.consume(y),
                  (s = this.expr()),
                  i.push(s);
              } while (this.currentToken.value === y);
              return this.consume(u), new I(e, i);
            }
          } else if (this.currentToken.type === c) {
            this.consume(c);
            let t = this.expr();
            return this.consume(u), t;
          }
        }
        this.error(`Unexpected token ${this.currentToken.value}`);
      }
      propertyName() {
        let t = "";
        for (; this.currentToken.type === l || this.currentToken.type === p; )
          (t += this.currentToken.value), (this.pos += 1);
        return t;
      }
      unit(t = v.ANY_UNIT) {
        const e = this.currentToken;
        if (e.type === l && t.test(e.value))
          return (
            this.consume(l),
            new w(
              l,
              (e.value = e.value.replace(/%(h|w)/, "$1").replace("%", "h"))
            )
          );
        this.error("Expected unit type");
      }
      anchorIndex() {
        const t = this.currentToken;
        if (t.type === _) return this.consume(_), new S(t);
        this.error(
          "Invalid anchor reference",
          ". Should be something like a0, a1, a2"
        );
      }
      parse() {
        const t = this.expr();
        return (
          this.currentToken !== w.EOF &&
            this.error(`Unexpected token ${this.currentToken.value}`),
          t
        );
      }
    }
    class R {
      constructor(t) {
        (this.parser = t), (this.root = t.parse());
      }
      visit(t) {
        let e = this[t.type];
        if (!e) throw new Error(`No visit method named, ${e}`);
        return e.call(this, t);
      }
      BinOp(t) {
        switch (t.op.type) {
          case d:
            return this.visit(t.left) + this.visit(t.right);
          case p:
            return this.visit(t.left) - this.visit(t.right);
          case m:
            return this.visit(t.left) * this.visit(t.right);
          case f:
            return this.visit(t.left) / this.visit(t.right);
        }
      }
      RefValue(t) {
        let e = this.unwrapReference(t),
          i = t.unit.value,
          r = t.num.value;
        const n = a.metrics.get(e);
        switch (i) {
          case "h":
            return 0.01 * r * n.height;
          case "t":
            return 0.01 * r * n.top;
          case "vh":
            return 0.01 * r * s.pageMetrics.windowHeight;
          case "vw":
            return 0.01 * r * s.pageMetrics.windowWidth;
          case "px":
            return r;
          case "w":
            return 0.01 * r * n.width;
          case "b":
            return 0.01 * r * n.bottom;
          case "l":
            return 0.01 * r * n.left;
          case "r":
            return 0.01 * r * n.right;
        }
      }
      PropValue(t) {
        return (null === t.ref ? a.target : a.anchors[t.ref.value])[
          t.propertyName
        ];
      }
      CSSValue(t) {
        let e = this.unwrapReference(t);
        const i = getComputedStyle(e).getPropertyValue(t.propertyName);
        return "" === i ? 0 : R.Parse(i).execute(a);
      }
      Num(t) {
        return t.value;
      }
      UnaryOp(t) {
        return t.op.type === d
          ? +this.visit(t.expr)
          : t.op.type === p
          ? -this.visit(t.expr)
          : void 0;
      }
      MathOp(t) {
        let e = t.list.map((t) => this.visit(t));
        return o[t.op.value].apply(null, e);
      }
      unwrapReference(t) {
        return null === t.ref
          ? a.target
          : (t.ref.value >= a.anchors.length &&
              console.error(
                `Not enough anchors supplied for expression ${this.parser.lexer.text}`,
                a.target
              ),
            a.anchors[t.ref.value]);
      }
      execute(t) {
        return (a = t), this.visit(this.root);
      }
      static Parse(t) {
        return n[t] || (n[t] = new R(new D(new M(t))));
      }
    }
    (R.programs = n), (t.exports = R);
  },
  function (t, e, i) {
    "use strict";
    const s = i(9),
      r = (i(16), i(42)),
      n = i(227),
      o = i(41),
      a = i(86),
      h = i(4).EventEmitterMicro,
      l = i(51),
      c = { update: i(8), external: i(20), draw: i(5) },
      u = Math.PI / 180,
      d = [
        "x",
        "y",
        "z",
        "scale",
        "scaleX",
        "scaleY",
        "rotation",
        "rotationX",
        "rotationY",
        "rotationZ",
      ],
      p = {
        create: i(53),
        rotateX: i(54),
        rotateY: i(55),
        rotateZ: i(56),
        scale: i(57),
      };
    t.exports = class extends h {
      constructor(t, e) {
        super(),
          (this._events.draw = []),
          (this.uuid = a()),
          (this.group = t),
          (this.element = e),
          (this._ownerIsElement = this.element instanceof Element),
          this._ownerIsElement
            ? (this.friendlyName =
                this.element.tagName +
                "." +
                Array.from(this.element.classList).join("."))
            : (this.friendlyName = this.element.friendlyName || this.uuid),
          (this.element._animInfo =
            this.element._animInfo || new s.AnimInfo(t, this)),
          (this.element._animInfo.controller = this),
          (this.element._animInfo.group = this.group),
          this.element._animInfo.controllers.push(this),
          (this.tweenProps = this.element._animInfo.tweenProps),
          (this.eventObject = new s.EventObject(this)),
          (this.needsStyleUpdate = !1),
          (this.needsClassUpdate = !1),
          (this.elementMetrics = this.group.metrics.add(this.element)),
          (this.attributes = []),
          (this.keyframes = {}),
          (this._allKeyframes = []),
          (this._activeKeyframes = []),
          (this.keyframesRequiringDispatch = []),
          this.updateCachedValuesFromElement(),
          (this.boundsMin = 0),
          (this.boundsMax = 0),
          (this.mat2d = new Float32Array(6)),
          (this.mat4 = p.create()),
          (this.needsWrite = !0),
          (this.onDOMWriteImp = this._ownerIsElement
            ? this.onDOMWriteForElement
            : this.onDOMWriteForObject);
      }
      destroy() {
        if (this.element._animInfo) {
          this.element._animInfo.controller === this &&
            (this.element._animInfo.controller = null);
          let t = this.element._animInfo.controllers.indexOf(this);
          -1 !== t && this.element._animInfo.controllers.splice(t, 1),
            0 === this.element._animInfo.controllers.length
              ? (this.element._animInfo = null)
              : ((this.element._animInfo.controller =
                  this.element._animInfo.controllers[
                    this.element._animInfo.controllers.length - 1
                  ]),
                (this.element._animInfo.group =
                  this.element._animInfo.controller.group));
        }
        (this.eventObject.controller = null),
          (this.eventObject.element = null),
          (this.eventObject.keyframe = null),
          (this.eventObject.tweenProps = null),
          (this.eventObject = null),
          (this.elementMetrics = null),
          (this.group = null),
          (this.keyframesRequiringDispatch = null);
        for (let t = 0; t < this._allKeyframes.length; t++)
          this._allKeyframes[t].destroy();
        (this._allKeyframes = null),
          (this._activeKeyframes = null),
          (this.attributes = null),
          (this.keyframes = null),
          (this.element = null),
          (this.tweenProps = null),
          super.destroy();
      }
      remove() {
        return this.group.removeKeyframeController(this);
      }
      updateCachedValuesFromElement() {
        if (!this._ownerIsElement) return;
        const t = getComputedStyle(this.element);
        let e = l(this.element, !0),
          i = s.KeyframeDefaults.epsilon,
          r = !1;
        ["x", "y", "z"].forEach((t, n) => {
          this.tweenProps[t] = new s.TargetValue(e.translation[n], i, r);
        }),
          (this.tweenProps.rotation = new s.TargetValue(
            e.eulerRotation[2],
            i,
            r
          )),
          ["rotationX", "rotationY", "rotationZ"].forEach((t, n) => {
            this.tweenProps[t] = new s.TargetValue(e.eulerRotation[n], i, r);
          }),
          (this.tweenProps.scaleZ = new s.TargetValue(e.scale[0], i, r)),
          ["scaleX", "scaleY", "scale"].forEach((t, n) => {
            this.tweenProps[t] = new s.TargetValue(e.scale[n], i, r);
          }),
          (this.tweenProps.opacity = new s.TargetValue(
            parseFloat(t.opacity),
            i,
            r
          ));
      }
      addKeyframe(t) {
        let e = n(t);
        if (!e)
          throw new Error(
            "AnimSystem Cannot create keyframe for from options `" + t + "`"
          );
        let i = new e(this, t);
        return (
          i.parseOptions(t),
          (i.id = this._allKeyframes.length),
          this._allKeyframes.push(i),
          i
        );
      }
      needsUpdate() {
        for (let t = 0, e = this.attributes.length; t < e; t++) {
          let e = this.attributes[t],
            i = this.tweenProps[e];
          if (Math.abs(i.current - i.target) > i.epsilon) return !0;
        }
        return !1;
      }
      updateLocalProgress(t) {
        for (let e = 0, i = this.attributes.length; e < i; e++) {
          let i = this.attributes[e],
            s = this.keyframes[this.attributes[e]];
          if (1 === s.length) {
            s[0].updateLocalProgress(t);
            continue;
          }
          let r = this.getNearestKeyframeForAttribute(i, t);
          r && r.updateLocalProgress(t);
        }
      }
      reconcile() {
        for (let t = 0, e = this.attributes.length; t < e; t++) {
          let e = this.attributes[t],
            i = this.getNearestKeyframeForAttribute(
              e,
              this.group.position.local
            );
          i.updateLocalProgress(this.group.position.local),
            i.snapAtCreation && i.reconcile(e);
        }
      }
      determineActiveKeyframes(t) {
        t = t || o(Array.from(document.documentElement.classList));
        let e = this._activeKeyframes,
          i = this.attributes,
          s = {};
        (this._activeKeyframes = []),
          (this.attributes = []),
          (this.keyframes = {});
        for (let e = 0; e < this._allKeyframes.length; e++) {
          let i = this._allKeyframes[e];
          if (i.markedForRemoval || i.hidden || !i.setEnabled(t))
            for (let t in i.animValues)
              (this.tweenProps[t].isActive = i.preserveState),
                i.preserveState && (s[t] = !0);
          else {
            this._activeKeyframes.push(i);
            for (let t in i.animValues)
              (this.keyframes[t] = this.keyframes[t] || []),
                this.keyframes[t].push(i),
                -1 === this.attributes.indexOf(t) &&
                  ((s[t] = !0),
                  this.attributes.push(t),
                  (this.tweenProps[t].isActive = !0));
          }
        }
        this.attributes.forEach((t) => (this.tweenProps[t].isActive = !0));
        let n = e.filter((t) => -1 === this._activeKeyframes.indexOf(t));
        if (0 === n.length) return;
        let a = i.filter(
          (t) => -1 === this.attributes.indexOf(t) && !s.hasOwnProperty(t)
        );
        if (0 !== a.length)
          if (((this.needsWrite = !0), this._ownerIsElement))
            c.external(() => {
              0 === Object.keys(s).filter((t) => d.includes(t)).length &&
                this.element.style.removeProperty("transform");
              for (let t = 0, e = a.length; t < e; ++t) {
                let e = a[t],
                  i = this.tweenProps[e];
                (i.current = i.target),
                  (i.isActive = !1),
                  "opacity" === e &&
                    this.element.style.removeProperty("opacity");
              }
              for (let t = 0, e = n.length; t < e; ++t) {
                let e = n[t];
                e instanceof r && !e.preserveState && e._unapply();
              }
            }, !0);
          else
            for (let t = 0, e = a.length; t < e; ++t) {
              let e = this.tweenProps[a[t]];
              (e.current = e.target), (e.isActive = !1);
            }
      }
      onDOMRead(t) {
        for (let e = 0, i = this.attributes.length; e < i; e++) {
          let i = this.attributes[e];
          this.tweenProps[i].previousValue = this.tweenProps[i].current;
          let s = this.getNearestKeyframeForAttribute(i, t);
          s && s.onDOMRead(i),
            this.tweenProps[i].previousValue !== this.tweenProps[i].current &&
              (this.needsWrite = !0);
        }
      }
      onDOMWrite() {
        (this.needsWrite || this.needsClassUpdate || this.needsStyleUpdate) &&
          ((this.needsWrite = !1),
          this.onDOMWriteImp(),
          this.handleEventDispatch());
      }
      onDOMWriteForObject() {
        for (let t = 0, e = this.attributes.length; t < e; t++) {
          let e = this.attributes[t];
          this.element[e] = this.tweenProps[e].current;
        }
      }
      onDOMWriteForElement(t = this.element.style) {
        let e = this.tweenProps;
        if (e.z.isActive || e.rotationX.isActive || e.rotationY.isActive) {
          const i = this.mat4;
          if (
            ((i[0] = 1),
            (i[1] = 0),
            (i[2] = 0),
            (i[3] = 0),
            (i[4] = 0),
            (i[5] = 1),
            (i[6] = 0),
            (i[7] = 0),
            (i[8] = 0),
            (i[9] = 0),
            (i[10] = 1),
            (i[11] = 0),
            (i[12] = 0),
            (i[13] = 0),
            (i[14] = 0),
            (i[15] = 1),
            e.x.isActive || e.y.isActive || e.z.isActive)
          ) {
            const t = e.x.current,
              s = e.y.current,
              r = e.z.current;
            (i[12] = i[0] * t + i[4] * s + i[8] * r + i[12]),
              (i[13] = i[1] * t + i[5] * s + i[9] * r + i[13]),
              (i[14] = i[2] * t + i[6] * s + i[10] * r + i[14]),
              (i[15] = i[3] * t + i[7] * s + i[11] * r + i[15]);
          }
          if (e.rotation.isActive || e.rotationZ.isActive) {
            const t = (e.rotation.current || e.rotationZ.current) * u;
            p.rotateZ(i, i, t);
          }
          if (e.rotationX.isActive) {
            const t = e.rotationX.current * u;
            p.rotateX(i, i, t);
          }
          if (e.rotationY.isActive) {
            const t = e.rotationY.current * u;
            p.rotateY(i, i, t);
          }
          (e.scale.isActive || e.scaleX.isActive || e.scaleY.isActive) &&
            p.scale(i, i, [e.scale.current, e.scale.current, 1]),
            (t.transform =
              "matrix3d(" +
              i[0] +
              "," +
              i[1] +
              "," +
              i[2] +
              "," +
              i[3] +
              "," +
              i[4] +
              "," +
              i[5] +
              "," +
              i[6] +
              "," +
              i[7] +
              "," +
              i[8] +
              "," +
              i[9] +
              "," +
              i[10] +
              "," +
              i[11] +
              "," +
              i[12] +
              "," +
              i[13] +
              "," +
              i[14] +
              "," +
              i[15] +
              ")");
        } else if (
          e.x.isActive ||
          e.y.isActive ||
          e.rotation.isActive ||
          e.rotationZ.isActive ||
          e.scale.isActive ||
          e.scaleX.isActive ||
          e.scaleY.isActive
        ) {
          const i = this.mat2d;
          if (
            ((i[0] = 1),
            (i[1] = 0),
            (i[2] = 0),
            (i[3] = 1),
            (i[4] = 0),
            (i[5] = 0),
            e.x.isActive || e.y.isActive)
          ) {
            const t = e.x.current,
              s = e.y.current,
              r = i[0],
              n = i[1],
              o = i[2],
              a = i[3],
              h = i[4],
              l = i[5];
            (i[0] = r),
              (i[1] = n),
              (i[2] = o),
              (i[3] = a),
              (i[4] = r * t + o * s + h),
              (i[5] = n * t + a * s + l);
          }
          if (e.rotation.isActive || e.rotationZ.isActive) {
            const t = (e.rotation.current || e.rotationZ.current) * u,
              s = i[0],
              r = i[1],
              n = i[2],
              o = i[3],
              a = i[4],
              h = i[5],
              l = Math.sin(t),
              c = Math.cos(t);
            (i[0] = s * c + n * l),
              (i[1] = r * c + o * l),
              (i[2] = s * -l + n * c),
              (i[3] = r * -l + o * c),
              (i[4] = a),
              (i[5] = h);
          }
          e.scale.isActive
            ? ((i[0] = i[0] * e.scale.current),
              (i[1] = i[1] * e.scale.current),
              (i[2] = i[2] * e.scale.current),
              (i[3] = i[3] * e.scale.current),
              (i[4] = i[4]),
              (i[5] = i[5]))
            : (e.scaleX.isActive || e.scaleY.isActive) &&
              ((i[0] = i[0] * e.scaleX.current),
              (i[1] = i[1] * e.scaleX.current),
              (i[2] = i[2] * e.scaleY.current),
              (i[3] = i[3] * e.scaleY.current),
              (i[4] = i[4]),
              (i[5] = i[5])),
            (t.transform =
              "matrix(" +
              i[0] +
              ", " +
              i[1] +
              ", " +
              i[2] +
              ", " +
              i[3] +
              ", " +
              i[4] +
              ", " +
              i[5] +
              ")");
        }
        if (
          (e.opacity.isActive && (t.opacity = e.opacity.current),
          this.needsStyleUpdate)
        ) {
          for (let t in this.tweenProps.targetStyles)
            null !== this.tweenProps.targetStyles[t] &&
              (this.element.style[t] = this.tweenProps.targetStyles[t]),
              (this.tweenProps.targetStyles[t] = null);
          this.needsStyleUpdate = !1;
        }
        this.needsClassUpdate &&
          (this.tweenProps.targetClasses.add.length > 0 &&
            this.element.classList.add.apply(
              this.element.classList,
              this.tweenProps.targetClasses.add
            ),
          this.tweenProps.targetClasses.remove.length > 0 &&
            this.element.classList.remove.apply(
              this.element.classList,
              this.tweenProps.targetClasses.remove
            ),
          (this.tweenProps.targetClasses.add.length = 0),
          (this.tweenProps.targetClasses.remove.length = 0),
          (this.needsClassUpdate = !1));
      }
      handleEventDispatch() {
        if (0 !== this.keyframesRequiringDispatch.length) {
          for (
            let t = 0, e = this.keyframesRequiringDispatch.length;
            t < e;
            t++
          ) {
            let e = this.keyframesRequiringDispatch[t];
            (e.needsEventDispatch = !1),
              (this.eventObject.keyframe = e),
              (this.eventObject.pageMetrics = s.pageMetrics),
              (this.eventObject.event = e.event),
              this.trigger(e.event, this.eventObject);
          }
          this.keyframesRequiringDispatch.length = 0;
        }
        if (0 !== this._events.draw.length) {
          (this.eventObject.keyframe = null), (this.eventObject.event = "draw");
          for (var t = this._events.draw.length - 1; t >= 0; t--)
            this._events.draw[t](this.eventObject);
        }
      }
      updateAnimationConstraints() {
        for (let t = 0, e = this._activeKeyframes.length; t < e; t++)
          this._activeKeyframes[t].evaluateConstraints();
        this.attributes.forEach((t) => {
          1 !== this.keyframes[t].length &&
            this.keyframes[t].sort(s.KeyframeComparison);
        }),
          this.updateDeferredPropertyValues();
      }
      refreshMetrics() {
        let t = new Set([this.element]);
        this._allKeyframes.forEach((e) => e.anchors.forEach((e) => t.add(e))),
          this.group.metrics.refreshCollection(t),
          (this.group.keyframesDirty = !0);
      }
      updateDeferredPropertyValues() {
        for (let t = 0, e = this.attributes.length; t < e; t++) {
          let e = this.attributes[t],
            i = this.keyframes[e];
          if (!(i[0].keyframeType > s.KeyframeTypes.InterpolationForward))
            for (let t = 0, s = i.length; t < s; t++) {
              let r = i[t];
              if (null === r.jsonProps[e][0]) {
                if (0 === t) {
                  r.animValues[e][0] = this.tweenProps[e].initialValue;
                  continue;
                }
                r.animValues[e][0] = i[t - 1].animValues[e][1];
              }
              if (null === r.jsonProps[e][1]) {
                if (t === s - 1)
                  throw new RangeError(
                    `AnimSystem - last keyframe cannot defer it's end value! ${e}:[${r.jsonProps[e][0]},null]`
                  );
                r.animValues[e][1] = i[t + 1].animValues[e][0];
              }
            }
        }
      }
      getBounds(t) {
        (this.boundsMin = Number.MAX_VALUE),
          (this.boundsMax = -Number.MAX_VALUE);
        for (let e = 0, i = this.attributes.length; e < i; e++) {
          let i = this.keyframes[this.attributes[e]];
          for (let e = 0; e < i.length; e++) {
            let s = i[e];
            (this.boundsMin = Math.min(s.start, this.boundsMin)),
              (this.boundsMax = Math.max(s.end, this.boundsMax)),
              (t.min = Math.min(s.start, t.min)),
              (t.max = Math.max(s.end, t.max));
          }
        }
      }
      getNearestKeyframeForAttribute(t, e) {
        e = void 0 !== e ? e : this.group.position.local;
        let i = null,
          s = Number.POSITIVE_INFINITY,
          r = this.keyframes[t];
        if (void 0 === r) return null;
        let n = r.length;
        if (0 === n) return null;
        if (1 === n) return r[0];
        for (let t = 0; t < n; t++) {
          let n = r[t];
          if (n.isInRange(e)) {
            i = n;
            break;
          }
          let o = Math.min(Math.abs(e - n.start), Math.abs(e - n.end));
          o < s && ((s = o), (i = n));
        }
        return i;
      }
      getAllKeyframesForAttribute(t) {
        return this.keyframes[t];
      }
      updateKeyframe(t, e) {
        t.parseOptions(e),
          t.evaluateConstraints(),
          (this.group.keyframesDirty = !0),
          c.update(() => {
            this.trigger(s.EVENTS.ON_KEYFRAME_UPDATED, t),
              this.group.trigger(s.EVENTS.ON_KEYFRAME_UPDATED, t);
          }, !0);
      }
      removeKeyframe(t) {
        return t.controller !== this
          ? Promise.resolve(null)
          : ((t.markedForRemoval = !0),
            (this.group.keyframesDirty = !0),
            new Promise((e) => {
              this.group.rafEmitter.executor.eventEmitter.once(
                "before:draw",
                () => {
                  e(t), t.destroy();
                  let i = this._allKeyframes.indexOf(t);
                  -1 !== i && this._allKeyframes.splice(i, 1);
                }
              );
            }));
      }
      updateAnimation(t, e) {
        return (
          this.group.gui &&
            console.warn(
              "KeyframeController.updateAnimation(keyframe,props) has been deprecated. Please use updateKeyframe(keyframe,props)"
            ),
          this.updateKeyframe(t, e)
        );
      }
    };
  },
  function (t, e, i) {
    "use strict";
    const s = i(9),
      r = i(16),
      n = i(87),
      o = i(42),
      a = function (t) {
        for (let e in t) {
          let i = t[e];
          if (-1 === s.KeyframeJSONReservedWords.indexOf(e) && Array.isArray(i))
            return !0;
        }
        return !1;
      };
    t.exports = (t) => {
      if (void 0 !== t.cssClass || void 0 !== t.style) {
        if (a(t))
          throw "CSS Keyframes cannot tween values, please use multiple keyframes instead";
        return o;
      }
      if (a(t)) return r;
      if (t.event) return n;
      throw (
        (delete t.anchors,
        `Could not determine tween type based on ${JSON.stringify(t)}`)
      );
    };
  },
  function (t, e, i) {
    "use strict";
    const s = i(88),
      r = i(7);
    let n = 0;
    const o = { create: i(11) };
    class a extends s {
      constructor(t, e) {
        t ||
          ((t = document.createElement("div")).className = "TimeGroup-" + n++),
          super(t, e),
          (window.timeGroup = window.timeGroup || this),
          (this.name = this.name || t.getAttribute("data-anim-time-group")),
          (this._isPaused = !0),
          (this._repeats = 0),
          (this._isReversed = !1),
          (this._timeScale = 1);
      }
      finalizeInit() {
        if (!this.anim)
          throw "TimeGroup not instantiated correctly. Please use `AnimSystem.createTimeGroup(el)`";
        (this.defaultEase = 1),
          (this.onPlayTimeUpdate = this.onPlayTimeUpdate.bind(this)),
          super.finalizeInit();
      }
      progress(t) {
        if (void 0 === t)
          return 0 === this.boundsMax
            ? 0
            : this.position.local / this.boundsMax;
        let e = t * this.boundsMax;
        (this.timelineUpdateRequired = !0), this._onScroll(e);
      }
      time(t) {
        if (void 0 === t) return this.position.local;
        (t = r.clamp(t, this.boundsMin, this.boundsMax)),
          (this.timelineUpdateRequired = !0),
          this._onScroll(t);
      }
      play(t) {
        this.reversed(!1),
          (this.isEnabled = !0),
          (this._isPaused = !1),
          this.time(t),
          this._playheadEmitter.run();
      }
      reverse(t) {
        this.reversed(!0),
          (this.isEnabled = !0),
          (this._isPaused = !1),
          this.time(t),
          this._playheadEmitter.run();
      }
      reversed(t) {
        if (void 0 === t) return this._isReversed;
        this._isReversed = t;
      }
      restart() {
        this._isReversed
          ? (this.progress(1), this.reverse(this.time()))
          : (this.progress(0), this.play(this.time()));
      }
      pause(t) {
        this.time(t), (this._isPaused = !0);
      }
      paused(t) {
        return void 0 === t
          ? this._isPaused
          : ((this._isPaused = t), this._isPaused || this.play(), this);
      }
      onPlayTimeUpdate(t) {
        if (this._isPaused) return;
        let e = r.clamp(t.delta / 1e3, 0, 0.5);
        this._isReversed && (e = -e);
        let i = this.time() + e * this._timeScale;
        if (this._repeats === a.REPEAT_FOREVER || this._repeats > 0) {
          let t = !1;
          !this._isReversed && i > this.boundsMax
            ? ((i -= this.boundsMax), (t = !0))
            : this._isReversed && i < 0 && ((i = this.boundsMax + i), (t = !0)),
            t &&
              (this._repeats =
                this._repeats === a.REPEAT_FOREVER
                  ? a.REPEAT_FOREVER
                  : this._repeats - 1);
        }
        this.time(i);
        let s = !this._isReversed && this.position.local !== this.duration,
          n = this._isReversed && 0 !== this.position.local;
        s || n ? this._playheadEmitter.run() : this.paused(!0);
      }
      updateProgress(t) {
        this.hasDuration()
          ? ((this.position.localUnclamped = t),
            (this.position.local = r.clamp(
              this.position.localUnclamped,
              this.boundsMin,
              this.boundsMax
            )))
          : (this.position.local = this.position.localUnclamped = 0);
      }
      updateBounds() {
        if (0 === this.keyframeControllers.length)
          return (this.boundsMin = 0), void (this.boundsMax = 0);
        let t = {
          min: Number.POSITIVE_INFINITY,
          max: Number.NEGATIVE_INFINITY,
        };
        for (let e = 0, i = this.keyframeControllers.length; e < i; e++)
          this.keyframeControllers[e].getBounds(t);
        (this.boundsMin = 0),
          (this.boundsMax = t.max),
          (this.viewableRange.a = this.viewableRange.b = 0),
          (this.viewableRange.c = this.viewableRange.d = this.boundsMax),
          (this.timelineUpdateRequired = !0);
      }
      setupRAFEmitter(t) {
        (this._playheadEmitter = new o.create()),
          this._playheadEmitter.on("update", this.onPlayTimeUpdate),
          super.setupRAFEmitter(t);
      }
      get duration() {
        return (
          this.keyframesDirty && this.onKeyframesDirty({ silent: !0 }),
          this.boundsMax
        );
      }
      timeScale(t) {
        return void 0 === t ? this._timeScale : ((this._timeScale = t), this);
      }
      repeats(t) {
        if (void 0 === t) return this._repeats;
        this._repeats = t;
      }
      getPosition() {
        return this.position.local;
      }
      convertScrollPositionToTValue(t) {
        return t;
      }
      convertTValueToScrollPosition(t) {
        return t;
      }
      hasDuration() {
        return this.duration > 0;
      }
      destroy() {
        this._playheadEmitter.destroy(),
          (this._playheadEmitter = null),
          super.destroy();
      }
    }
    (a.REPEAT_FOREVER = -1), (t.exports = a);
  },
  function (t, e, i) {
    "use strict";
    t.exports = { version: "3.2.1", major: "3.x", majorMinor: "3.2" };
  },
  function (t, e, i) {
    "use strict";
    const s = i(231),
      r = document.getElementById("chapternav");
    r && (t.exports = new s(r));
  },
  function (t, e, i) {
    "use strict";
    const s = i(232).ScrollContainer,
      r = {
        componentName: "chapternav",
        scrollEasing: "ease-out",
        scrollDuration: 0.4,
        usePaddles: !0,
      };
    t.exports = class {
      constructor(t, e) {
        return (
          (this.el = t),
          (e = Object.assign({}, r, e)),
          (this.options = {
            componentName: e.componentName,
            itemsSelector: e.itemsSelector || `.${e.componentName}-items`,
            itemSelector: e.itemSelector || `.${e.componentName}-link`,
            itemLabelSelector:
              e.itemLabelSelector || `.${e.componentName}-label`,
            itemNewSelector: e.itemNewSelector || `.${e.componentName}-new`,
            leftPaddleSelector:
              e.leftPaddleSelector || `.${e.componentName}-paddle-left`,
            rightPaddleSelector:
              e.rightPaddleSelector || `.${e.componentName}-paddle-right`,
            tallClass: e.tallClass || `${e.componentName}-tall`,
            scrollEasing: e.scrollEasing,
            scrollDuration: e.scrollDuration,
            usePaddles: e.usePaddles,
          }),
          this.setChapternavTall(this.isChapternavTall()),
          new s(this.el, this.options)
        );
      }
      isChapternavTall() {
        const t = this.el.querySelectorAll(this.options.itemSelector);
        let e = !1;
        return (
          t.forEach((t) => {
            const i = t.querySelector(this.options.itemLabelSelector),
              s = !!t.querySelector(this.options.itemNewSelector),
              r = i.getElementsByTagName("BR").length > 0;
            s && r && (e = !0);
          }),
          e
        );
      }
      setChapternavTall(t) {
        !0 === t
          ? this.el.classList.add(this.options.tallClass)
          : this.el.classList.remove(this.options.tallClass);
      }
    };
  },
  function (t, e, i) {
    "use strict";
    var s = i(233);
    t.exports = { ScrollContainer: s };
  },
  function (t, e, i) {
    "use strict";
    var s = i(90),
      r = i(234),
      n = i(63),
      o = i(85),
      a = i(235);
    function h(t, e) {
      (this.el = t),
        (this._options = e || {}),
        (this._wrapper = this.el.querySelector(this._options.itemsSelector)),
        (this._items = Array.prototype.slice.call(
          this.el.querySelectorAll(this._options.itemSelector)
        )),
        (this.lastCenteredItem = this._items[0]),
        (this._isRightToLeft = "rtl" === window.getComputedStyle(t).direction),
        (this._inlineStart = this._isRightToLeft ? "right" : "left"),
        (this._inlineEnd = this._isRightToLeft ? "left" : "right"),
        (this._scrollType = this._scrollDirection()),
        (this._usePaddles =
          void 0 === this._options.usePaddles || this._options.usePaddles),
        (this.centerItem = this.centerItem.bind(this)),
        this._init();
    }
    var l = h.prototype;
    (l._init = function () {
      this._usePaddles && this._setupPaddles();
    }),
      (l.centerItem = function (t, e) {
        this.lastCenteredItem = t;
        var i = 0.5 * s(this.el).width,
          n = r(t).left + 0.5 * s(t).width,
          o = Math.round(n - i);
        e
          ? (this.el.scrollLeft = this._setNormalizedScroll(o))
          : (this._destroyCurrentClip(),
            this._isRightToLeft && (o *= -1),
            this._smoothScrollTo(o));
      }),
      (l._getPaddles = function () {
        var t = this._isRightToLeft
            ? this._options.rightPaddleSelector
            : this._options.leftPaddleSelector,
          e = this._isRightToLeft
            ? this._options.leftPaddleSelector
            : this._options.rightPaddleSelector;
        return {
          start: this.el.querySelector(t),
          end: this.el.querySelector(e),
        };
      }),
      (l._setupPaddles = function () {
        this.el.classList.add("with-paddles"),
          (this._paddles = this._getPaddles()),
          (this._children = this._wrapper.children),
          (this._childCount = this._wrapper.children.length),
          (this._onScrollClipComplete = this._onScrollClipComplete.bind(this)),
          (this._onPaddleStartClick = this._onPaddleStartClick.bind(this)),
          this._paddles.start.addEventListener(
            "click",
            this._onPaddleStartClick
          ),
          (this._onPaddleEndClick = this._onPaddleEndClick.bind(this)),
          this._paddles.end.addEventListener("click", this._onPaddleEndClick),
          (this._onScroll = this._onScroll.bind(this)),
          this._wrapper.addEventListener("scroll", this._onScroll),
          (this._updateElementMetrics = this._updateElementMetrics.bind(this)),
          window.addEventListener("resize", this._updateElementMetrics),
          window.addEventListener(
            "orientationchange",
            this._updateElementMetrics
          ),
          this._updateElementMetrics();
      }),
      (l._updateElementMetrics = function () {
        (this._wrapperWidth = this._wrapper.offsetWidth),
          (this._contentWidth = this._wrapper.scrollWidth),
          this._contentWidth <= this._wrapperWidth &&
            (this._destroyCurrentClip(),
            0 !== this._wrapper.scrollLeft && (this._wrapper.scrollLeft = 0)),
          (this._scrollStart = this._wrapper.scrollLeft),
          this._usePaddles &&
            ((this._paddleWidth = this._paddles.start.offsetWidth),
            this._updatePaddleDisplay());
      }),
      (l._onScroll = function () {
        this._lockPaddles ||
          ((this._scrollStart = this._wrapper.scrollLeft),
          this._updatePaddleDisplay());
      }),
      (l._updatePaddleDisplay = function () {
        var t =
          this._getNormalizedScroll(this._scrollStart) + this._wrapperWidth;
        (this._paddles.start.disabled =
          this._getNormalizedScroll(this._scrollStart) <= 1),
          (this._paddles.end.disabled = t >= this._contentWidth - 1);
      }),
      (l._onPaddleStartClick = function (t) {
        this._smoothScrollTo(this._getPaddleStartScrollDestination());
      }),
      (l._getPaddleStartScrollDestination = function () {
        var t,
          e,
          i = this._getNormalizedScroll(this._scrollStart);
        for (e = this._childCount - 1; e > 0; e--)
          if (
            (t = this._normalizePosition(r(this._children[e])))[
              this._inlineStart
            ] < i
          )
            return t[this._inlineEnd] - this._wrapperWidth;
        return 0;
      }),
      (l._onPaddleEndClick = function (t) {
        this._smoothScrollTo(this._getPaddleEndScrollDestination());
      }),
      (l._getPaddleEndScrollDestination = function () {
        var t,
          e,
          i = this._getNormalizedScroll(this._scrollStart) + this._wrapperWidth;
        for (e = 0; e < this._childCount; e++)
          if (
            (t = this._normalizePosition(r(this._children[e])))[
              this._inlineEnd
            ] > i
          )
            return t[this._inlineStart];
        return this._contentWidth;
      }),
      (l._getBoundedScrollX = function (t) {
        var e = this._contentWidth - this._wrapperWidth;
        return Math.max(Math.min(t, e), 0);
      }),
      (l._smoothScrollTo = function (t) {
        if (
          (this._updateElementMetrics(),
          !this._lockPaddles && t !== this._scrollStart)
        ) {
          var e = this._wrapper.scrollLeft,
            i = {
              ease: o.fromCSSString(a[this._options.scrollEasing]),
              draw: (i) => {
                this._wrapper.scrollLeft = ((t, e, i) => t * (i - e) + e)(
                  i,
                  e,
                  this._setNormalizedScroll(t)
                );
              },
            };
          this._usePaddles && (this._lockPaddles = !0),
            (this._clip = new n(this._options.scrollDuration, i)),
            this._clip.play().then(() => {
              this._destroyCurrentClip(),
                (this._clip = null),
                this._usePaddles && this._onScrollClipComplete();
            });
        }
      }),
      (l._onScrollClipComplete = function () {
        this._updatePaddleDisplay(), (this._lockPaddles = !1), this._onScroll();
      }),
      (l._scrollDirection = function () {
        var t = "reverse",
          e = document.createElement("div");
        return (
          (e.style.cssText =
            "width:2px; height:1px; position:absolute; top:-1000px; overflow:scroll; font-size: 14px;"),
          (e.style.direction = "rtl"),
          (e.innerHTML = "test"),
          document.body.appendChild(e),
          e.scrollLeft > 0
            ? (t = "default")
            : ((e.scrollLeft = 1), 0 === e.scrollLeft && (t = "negative")),
          document.body.removeChild(e),
          t
        );
      }),
      (l._getNormalizedScroll = function (t) {
        if (!this._isRightToLeft) return t;
        var e = Math.abs(t);
        return (
          "default" === this._scrollType &&
            (e = this._contentWidth - this._wrapperWidth - e),
          e
        );
      }),
      (l._setNormalizedScroll = function (t) {
        var e = this._getBoundedScrollX(t);
        return this._isRightToLeft && "reverse" !== this._scrollType
          ? "negative" === this._scrollType
            ? -e
            : -(e - this._contentWidth + this._wrapperWidth)
          : e;
      }),
      (l._normalizePosition = function (t) {
        return this._isRightToLeft
          ? {
              top: t.top,
              right: this._wrapperWidth - t.right + this._paddleWidth,
              bottom: t.bottom,
              left: this._wrapperWidth - t.left + this._paddleWidth,
            }
          : {
              top: t.top,
              right: t.right - this._paddleWidth,
              bottom: t.bottom,
              left: t.left - this._paddleWidth,
            };
      }),
      (l._destroyCurrentClip = function () {
        this._clip &&
          this._clip._isPlaying &&
          (this._clip.destroy(), (this._lockPaddles = !1));
      }),
      (l._destroyPaddles = function () {
        this._paddles.start.removeEventListener(
          "click",
          this._onPaddleStartClick
        ),
          this._paddles.end.removeEventListener(
            "click",
            this._onPaddleEndClick
          ),
          this._wrapper.removeEventListener("scroll", this._onScroll),
          (this._paddles = null);
      }),
      (l.destroy = function () {
        (this._items = null),
          this._destroyCurrentClip(),
          this._destroyPaddles(),
          window.removeEventListener("resize", this._updateElementMetrics),
          window.removeEventListener(
            "orientationchange",
            this._updateElementMetrics
          );
      }),
      (t.exports = h);
  },
  function (t, e, i) {
    "use strict";
    var s = i(90);
    t.exports = function (t, e) {
      var i, r, n, o, a, h, l;
      return (
        e
          ? ((r = (i = t.getBoundingClientRect()).top),
            (n = i.left),
            (o = i.width),
            (a = i.height),
            t.offsetParent &&
              ((r -= (h = t.offsetParent.getBoundingClientRect()).top),
              (n -= h.left)))
          : ((l = s(t, e)),
            (r = t.offsetTop),
            (n = t.offsetLeft),
            (o = l.width),
            (a = l.height)),
        { top: r, right: n + o, bottom: r + a, left: n }
      );
    };
  },
  function (t, e, i) {
    "use strict";
    const s = {
      easeInCubic: "cubic-bezier(0.42, 0.0, 1.0, 1.0)",
      easeOutCubic: "cubic-bezier(0.0, 0.0, 0.58, 1.0)",
      easeInOutCubic: "cubic-bezier(0.42, 0.0, 0.58, 1.0)",
      easeInCirc: "cubic-bezier(0.600, 0.040, 0.980, 0.335)",
      easeOutCirc: "cubic-bezier(0.075, 0.820, 0.165, 1.000)",
      easeInOutCirc: "cubic-bezier(0.785, 0.135, 0.150, 0.860)",
      easeInExpo: "cubic-bezier(0.950, 0.050, 0.795, 0.035)",
      easeOutExpo: "cubic-bezier(0.190, 1.000, 0.220, 1.000)",
      easeInOutExpo: "cubic-bezier(1.000, 0.000, 0.000, 1.000)",
      easeInQuad: "cubic-bezier(0.550, 0.085, 0.680, 0.530)",
      easeOutQuad: "cubic-bezier(0.250, 0.460, 0.450, 0.940)",
      easeInOutQuad: "cubic-bezier(0.455, 0.030, 0.515, 0.955)",
      easeInQuart: "cubic-bezier(0.895, 0.030, 0.685, 0.220)",
      easeOutQuart: "cubic-bezier(0.165, 0.840, 0.440, 1.000)",
      easeInOutQuart: "cubic-bezier(0.770, 0.000, 0.175, 1.000)",
      easeInQuint: "cubic-bezier(0.755, 0.050, 0.855, 0.060)",
      easeOutQuint: "cubic-bezier(0.230, 1.000, 0.320, 1.000)",
      easeInOutQuint: "cubic-bezier(0.860, 0.000, 0.070, 1.000)",
      easeInSine: "cubic-bezier(0.470, 0.000, 0.745, 0.715)",
      easeOutSine: "cubic-bezier(0.390, 0.575, 0.565, 1.000)",
      easeInOutSine: "cubic-bezier(0.445, 0.050, 0.550, 0.950)",
      easeInBack: "cubic-bezier(0.600, -0.280, 0.735, 0.045)",
      easeOutBack: "cubic-bezier(0.175,  0.885, 0.320, 1.275)",
      easeInOutBack: "cubic-bezier(0.680, -0.550, 0.265, 1.550)",
      linear: "cubic-bezier(0.0, 0.0, 1.0, 1.0)",
      ease: "cubic-bezier(0.25, 0.1, 0.25, 1.0)",
      "ease-in": "cubic-bezier(0.42, 0.0, 1.0, 1.0)",
      "ease-out": "cubic-bezier(0.0, 0.0, 0.58, 1.0)",
      "ease-in-out": "cubic-bezier(0.42, 0.0, 0.58, 1.0)",
    };
    t.exports = s;
  },
]);