(function(h, f, c, j, d, l, k) { /*! Jssor */
    new(function() {});
    var e = {
        Dd: function(a) {
            return -c.cos(a * c.PI) / 2 + .5
        },
        Ed: function(a) {
            return a
        },
        Fd: function(a) {
            return -a * (a - 2)
        }
    };
    var b = new function() {
        var g = this,
            Bb = /\S+/g,
            G = 1,
            db = 2,
            hb = 3,
            gb = 4,
            lb = 5,
            H, r = 0,
            i = 0,
            s = 0,
            W = 0,
            z = 0,
            J = navigator,
            pb = J.appName,
            o = J.userAgent,
            p = parseFloat;

        function zb() {
            if (!H) {
                H = {
                    Ae: "ontouchstart" in h || "createTouch" in f
                };
                var a;
                if (J.pointerEnabled || (a = J.msPointerEnabled)) H.gd = a ? "msTouchAction" : "touchAction"
            }
            return H
        }

        function v(j) {
            if (!r) {
                r = -1;
                if (pb == "Microsoft Internet Explorer" && !!h.attachEvent && !!h.ActiveXObject) {
                    var e = o.indexOf("MSIE");
                    r = G;
                    s = p(o.substring(e + 5, o.indexOf(";", e))); /*@cc_on W=@_jscript_version@*/ ;
                    i = f.documentMode || s
                } else if (pb == "Netscape" && !!h.addEventListener) {
                    var d = o.indexOf("Firefox"),
                        b = o.indexOf("Safari"),
                        g = o.indexOf("Chrome"),
                        c = o.indexOf("AppleWebKit");
                    if (d >= 0) {
                        r = db;
                        i = p(o.substring(d + 8))
                    } else if (b >= 0) {
                        var k = o.substring(0, b).lastIndexOf("/");
                        r = g >= 0 ? gb : hb;
                        i = p(o.substring(k + 1, b))
                    } else {
                        var a = /Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(o);
                        if (a) {
                            r = G;
                            i = s = p(a[1])
                        }
                    }
                    if (c >= 0) z = p(o.substring(c + 12))
                } else {
                    var a = /(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(o);
                    if (a) {
                        r = lb;
                        i = p(a[2])
                    }
                }
            }
            return j == r
        }

        function q() {
            return v(G)
        }

        function R() {
            return q() && (i < 6 || f.compatMode == "BackCompat")
        }

        function fb() {
            return v(hb)
        }

        function kb() {
            return v(lb)
        }

        function wb() {
            return fb() && z > 534 && z < 535
        }

        function K() {
            v();
            return z > 537 || i > 42 || r == G && i >= 11
        }

        function P() {
            return q() && i < 9
        }

        function xb(a) {
            var b, c;
            return function(f) {
                if (!b) {
                    b = d;
                    var e = a.substr(0, 1).toUpperCase() + a.substr(1);
                    n([a].concat(["WebKit", "ms", "Moz", "O", "webkit"]), function(g, d) {
                        var b = a;
                        if (d) b = g + e;
                        if (f.style[b] != k) return c = b
                    })
                }
                return c
            }
        }

        function vb(b) {
            var a;
            return function(c) {
                a = a || xb(b)(c) || b;
                return a
            }
        }
        var L = vb("transform");

        function ob(a) {
            return {}.toString.call(a)
        }
        var F;

        function Hb() {
            if (!F) {
                F = {};
                n(["Boolean", "Number", "String", "Function", "Array", "Date", "RegExp", "Object"], function(a) {
                    F["[object " + a + "]"] = a.toLowerCase()
                })
            }
            return F
        }

        function n(b, d) {
            var a, c;
            if (ob(b) == "[object Array]") {
                for (a = 0; a < b.length; a++)
                    if (c = d(b[a], a, b)) return c
            } else
                for (a in b)
                    if (c = d(b[a], a, b)) return c
        }

        function C(a) {
            return a == j ? String(a) : Hb()[ob(a)] || "object"
        }

        function mb(a) {
            for (var b in a) return d
        }

        function A(a) {
            try {
                return C(a) == "object" && !a.nodeType && a != a.window && (!a.constructor || {}.hasOwnProperty.call(a.constructor.prototype, "isPrototypeOf"))
            } catch (b) {}
        }

        function u(a, b) {
            return {
                x: a,
                y: b
            }
        }

        function sb(b, a) {
            setTimeout(b, a || 0)
        }

        function I(b, d, c) {
            var a = !b || b == "inherit" ? "" : b;
            n(d, function(c) {
                var b = c.exec(a);
                if (b) {
                    var d = a.substr(0, b.index),
                        e = a.substr(b.index + b[0].length + 1, a.length - 1);
                    a = d + e
                }
            });
            a = c + (!a.indexOf(" ") ? "" : " ") + a;
            return a
        }

        function ub(b, a) {
            if (i < 9) b.style.filter = a
        }
        g.Ce = zb;
        g.ed = q;
        g.Fe = fb;
        g.pd = K;
        g.Ic = P;
        xb("transform");
        g.jc = function() {
            return i
        };
        g.oc = sb;

        function Z(a) {
            a.constructor === Z.caller && a.qc && a.qc.apply(a, Z.caller.arguments)
        }
        g.qc = Z;
        g.db = function(a) {
            if (g.Be(a)) a = f.getElementById(a);
            return a
        };

        function t(a) {
            return a || h.event
        }
        g.mc = t;
        g.Pb = function(b) {
            b = t(b);
            var a = b.target || b.srcElement || f;
            if (a.nodeType == 3) a = g.rc(a);
            return a
        };
        g.lc = function(a) {
            a = t(a);
            return {
                x: a.pageX || a.clientX || 0,
                y: a.pageY || a.clientY || 0
            }
        };

        function D(c, d, a) {
            if (a !== k) c.style[d] = a == k ? "" : a;
            else {
                var b = c.currentStyle || c.style;
                a = b[d];
                if (a == "" && h.getComputedStyle) {
                    b = c.ownerDocument.defaultView.getComputedStyle(c, j);
                    b && (a = b.getPropertyValue(d) || b[d])
                }
                return a
            }
        }

        function bb(b, c, a, d) {
            if (a !== k) {
                if (a == j) a = "";
                else d && (a += "px");
                D(b, c, a)
            } else return p(D(b, c))
        }

        function m(c, a) {
            var d = a ? bb : D,
                b;
            if (a & 4) b = vb(c);
            return function(e, f) {
                return d(e, b ? b(e) : c, f, a & 2)
            }
        }

        function Eb(b) {
            if (q() && s < 9) {
                var a = /opacity=([^)]*)/.exec(b.style.filter || "");
                return a ? p(a[1]) / 100 : 1
            } else return p(b.style.opacity || "1")
        }

        function Gb(b, a, f) {
            if (q() && s < 9) {
                var h = b.style.filter || "",
                    i = new RegExp(/[\s]*alpha\([^\)]*\)/g),
                    e = c.round(100 * a),
                    d = "";
                if (e < 100 || f) d = "alpha(opacity=" + e + ") ";
                var g = I(h, [i], d);
                ub(b, g)
            } else b.style.opacity = a == 1 ? "" : c.round(a * 100) / 100
        }
        var M = {
            S: ["rotate"],
            O: ["rotateX"],
            I: ["rotateY"],
            qb: ["skewX"],
            sb: ["skewY"]
        };
        if (!K()) M = B(M, {
            m: ["scaleX", 2],
            n: ["scaleY", 2],
            N: ["translateZ", 1]
        });

        function N(d, a) {
            var c = "";
            if (a) {
                if (q() && i && i < 10) {
                    delete a.O;
                    delete a.I;
                    delete a.N
                }
                b.e(a, function(d, b) {
                    var a = M[b];
                    if (a) {
                        var e = a[1] || 0;
                        if (O[b] != d) c += " " + a[0] + "(" + d + (["deg", "px", ""])[e] + ")"
                    }
                });
                if (K()) {
                    if (a.U || a.V || a.N) c += " translate3d(" + (a.U || 0) + "px," + (a.V || 0) + "px," + (a.N || 0) + "px)";
                    if (a.m == k) a.m = 1;
                    if (a.n == k) a.n = 1;
                    if (a.m != 1 || a.n != 1) c += " scale3d(" + a.m + ", " + a.n + ", 1)"
                }
            }
            d.style[L(d)] = c
        }
        g.Jc = m("transformOrigin", 4);
        g.pe = m("backfaceVisibility", 4);
        g.oe = m("transformStyle", 4);
        g.ne = m("perspective", 6);
        g.me = m("perspectiveOrigin", 4);
        g.le = function(a, b) {
            if (q() && s < 9 || s < 10 && R()) a.style.zoom = b == 1 ? "" : b;
            else {
                var c = L(a),
                    f = "scale(" + b + ")",
                    e = a.style[c],
                    g = new RegExp(/[\s]*scale\(.*?\)/g),
                    d = I(e, [g], f);
                a.style[c] = d
            }
        };
        g.Ub = function(b, a) {
            return function(c) {
                c = t(c);
                var e = c.type,
                    d = c.relatedTarget || (e == "mouseout" ? c.toElement : c.fromElement);
                (!d || d !== a && !g.je(a, d)) && b(c)
            }
        };
        g.a = function(a, d, b, c) {
            a = g.db(a);
            if (a.addEventListener) {
                d == "mousewheel" && a.addEventListener("DOMMouseScroll", b, c);
                a.addEventListener(d, b, c)
            } else if (a.attachEvent) {
                a.attachEvent("on" + d, b);
                c && a.setCapture && a.setCapture()
            }
        };
        g.z = function(a, c, d, b) {
            a = g.db(a);
            if (a.removeEventListener) {
                c == "mousewheel" && a.removeEventListener("DOMMouseScroll", d, b);
                a.removeEventListener(c, d, b)
            } else if (a.detachEvent) {
                a.detachEvent("on" + c, d);
                b && a.releaseCapture && a.releaseCapture()
            }
        };
        g.vb = function(a) {
            a = t(a);
            a.preventDefault && a.preventDefault();
            a.cancel = d;
            a.returnValue = l
        };
        g.fe = function(a) {
            a = t(a);
            a.stopPropagation && a.stopPropagation();
            a.cancelBubble = d
        };
        g.B = function(d, c) {
            var a = [].slice.call(arguments, 2),
                b = function() {
                    var b = a.concat([].slice.call(arguments, 0));
                    return c.apply(d, b)
                };
            return b
        };
        g.Ie = function(a, b) {
            if (b == k) return a.textContent || a.innerText;
            var c = f.createTextNode(b);
            g.Ib(a);
            a.appendChild(c)
        };
        g.xb = function(d, c) {
            for (var b = [], a = d.firstChild; a; a = a.nextSibling)(c || a.nodeType == 1) && b.push(a);
            return b
        };

        function nb(a, c, e, b) {
            b = b || "u";
            for (a = a ? a.firstChild : j; a; a = a.nextSibling)
                if (a.nodeType == 1) {
                    if (V(a, b) == c) return a;
                    if (!e) {
                        var d = nb(a, c, e, b);
                        if (d) return d
                    }
                }
        }
        g.u = nb;

        function T(a, d, f, b) {
            b = b || "u";
            var c = [];
            for (a = a ? a.firstChild : j; a; a = a.nextSibling)
                if (a.nodeType == 1) {
                    V(a, b) == d && c.push(a);
                    if (!f) {
                        var e = T(a, d, f, b);
                        if (e.length) c = c.concat(e)
                    }
                }
            return c
        }

        function ib(a, c, d) {
            for (a = a ? a.firstChild : j; a; a = a.nextSibling)
                if (a.nodeType == 1) {
                    if (a.tagName == c) return a;
                    if (!d) {
                        var b = ib(a, c, d);
                        if (b) return b
                    }
                }
        }
        g.Re = ib;
        g.Qe = function(b, a) {
            return b.getElementsByTagName(a)
        };

        function B() {
            var e = arguments,
                d, c, b, a, g = 1 & e[0],
                f = 1 + g;
            d = e[f - 1] || {};
            for (; f < e.length; f++)
                if (c = e[f])
                    for (b in c) {
                        a = c[b];
                        if (a !== k) {
                            a = c[b];
                            var h = d[b];
                            d[b] = g && (A(h) || A(a)) ? B(g, {}, h, a) : a
                        }
                    }
                return d
        }
        g.W = B;

        function ab(f, g) {
            var d = {},
                c, a, b;
            for (c in f) {
                a = f[c];
                b = g[c];
                if (a !== b) {
                    var e;
                    if (A(a) && A(b)) {
                        a = ab(a, b);
                        e = !mb(a)
                    }!e && (d[c] = a)
                }
            }
            return d
        }
        g.Bc = function(a) {
            return C(a) == "function"
        };
        g.Be = function(a) {
            return C(a) == "string"
        };
        g.Ke = function(a) {
            return !isNaN(p(a)) && isFinite(a)
        };
        g.e = n;

        function S(a) {
            return f.createElement(a)
        }
        g.wb = function() {
            return S("DIV")
        };
        g.Le = function() {
            return S("SPAN")
        };
        g.Cc = function() {};

        function X(b, c, a) {
            if (a == k) return b.getAttribute(c);
            b.setAttribute(c, a)
        }

        function V(a, b) {
            return X(a, b) || X(a, "data-" + b)
        }
        g.o = X;
        g.i = V;

        function x(b, a) {
            if (a == k) return b.className;
            b.className = a
        }
        g.Ec = x;

        function rb(b) {
            var a = {};
            n(b, function(b) {
                a[b] = b
            });
            return a
        }

        function tb(b, a) {
            return b.match(a || Bb)
        }

        function Q(b, a) {
            return rb(tb(b || "", a))
        }
        g.ce = tb;

        function cb(b, c) {
            var a = "";
            n(c, function(c) {
                a && (a += b);
                a += c
            });
            return a
        }

        function E(a, c, b) {
            x(a, cb(" ", B(ab(Q(x(a)), Q(c)), Q(b))))
        }
        g.rc = function(a) {
            return a.parentNode
        };
        g.K = function(a) {
            g.H(a, "none")
        };
        g.E = function(a, b) {
            g.H(a, b ? "none" : "")
        };
        g.wd = function(b, a) {
            b.removeAttribute(a)
        };
        g.ud = function() {
            return q() && i < 10
        };
        g.td = function(d, a) {
            if (a) d.style.clip = "rect(" + c.round(a.j) + "px " + c.round(a.s) + "px " + c.round(a.r) + "px " + c.round(a.g) + "px)";
            else {
                var g = d.style.cssText,
                    f = [new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i), new RegExp(/[\s]*cliptop: .*?[;]?/i), new RegExp(/[\s]*clipright: .*?[;]?/i), new RegExp(/[\s]*clipbottom: .*?[;]?/i), new RegExp(/[\s]*clipleft: .*?[;]?/i)],
                    e = I(g, f, "");
                b.ub(d, e)
            }
        };
        g.F = function() {
            return +new Date
        };
        g.G = function(b, a) {
            b.appendChild(a)
        };
        g.Cb = function(b, a, c) {
            (c || a.parentNode).insertBefore(b, a)
        };
        g.Gb = function(b, a) {
            a = a || b.parentNode;
            a && a.removeChild(b)
        };
        g.id = function(a, b) {
            n(a, function(a) {
                g.Gb(a, b)
            })
        };
        g.Ib = function(a) {
            g.id(g.xb(a, d), a)
        };
        g.kd = function(a, b) {
            var c = g.rc(a);
            b & 1 && g.A(a, (g.k(c) - g.k(a)) / 2);
            b & 2 && g.v(a, (g.l(c) - g.l(a)) / 2)
        };
        g.ld = function(b, a) {
            return parseInt(b, a || 10)
        };
        g.jd = p;
        g.je = function(b, a) {
            var c = f.body;
            while (a && b !== a && c !== a) try {
                a = a.parentNode
            } catch (d) {
                return l
            }
            return b === a
        };

        function Y(d, c, b) {
            var a = d.cloneNode(!c);
            !b && g.wd(a, "id");
            return a
        }
        g.cb = Y;
        g.fb = function(e, f) {
            var a = new Image;

            function b(e, d) {
                g.z(a, "load", b);
                g.z(a, "abort", c);
                g.z(a, "error", c);
                f && f(a, d)
            }

            function c(a) {
                b(a, d)
            }
            if (kb() && i < 11.6 || !e) b(!e);
            else {
                g.a(a, "load", b);
                g.a(a, "abort", c);
                g.a(a, "error", c);
                a.src = e
            }
        };
        g.qd = function(d, a, e) {
            var c = d.length + 1;

            function b(b) {
                c--;
                if (a && b && b.src == a.src) a = b;
                !c && e && e(a)
            }
            n(d, function(a) {
                g.fb(a.src, b)
            });
            b()
        };
        g.zd = function(a, g, i, h) {
            if (h) a = Y(a);
            var c = T(a, g);
            if (!c.length) c = b.Qe(a, g);
            for (var f = c.length - 1; f > -1; f--) {
                var d = c[f],
                    e = Y(i);
                x(e, x(d));
                b.ub(e, d.style.cssText);
                b.Cb(e, d);
                b.Gb(d)
            }
            return a
        };

        function Ib(a) {
            var l = this,
                p = "",
                r = ["av", "pv", "ds", "dn"],
                e = [],
                q, j = 0,
                h = 0,
                d = 0;

            function i() {
                E(a, q, e[d || j || h & 2 || h]);
                b.D(a, "pointer-events", d ? "none" : "")
            }

            function c() {
                j = 0;
                i();
                g.z(f, "mouseup", c);
                g.z(f, "touchend", c);
                g.z(f, "touchcancel", c)
            }

            function o(a) {
                if (d) g.vb(a);
                else {
                    j = 4;
                    i();
                    g.a(f, "mouseup", c);
                    g.a(f, "touchend", c);
                    g.a(f, "touchcancel", c)
                }
            }
            l.be = function(a) {
                if (a === k) return h;
                h = a & 2 || a & 1;
                i()
            };
            l.zc = function(a) {
                if (a === k) return !d;
                d = a ? 0 : 3;
                i()
            };
            l.T = a = g.db(a);
            var m = b.ce(x(a));
            if (m) p = m.shift();
            n(r, function(a) {
                e.push(p + a)
            });
            q = cb(" ", e);
            e.unshift("");
            g.a(a, "mousedown", o);
            g.a(a, "touchstart", o)
        }
        g.Tb = function(a) {
            return new Ib(a)
        };
        g.D = D;
        g.Fb = m("overflow");
        g.v = m("top", 2);
        g.A = m("left", 2);
        g.k = m("width", 2);
        g.l = m("height", 2);
        g.ae = m("marginLeft", 2);
        g.Je = m("marginTop", 2);
        g.q = m("position");
        g.H = m("display");
        g.p = m("zIndex", 1);
        g.ac = function(b, a, c) {
            if (a != k) Gb(b, a, c);
            else return Eb(b)
        };
        g.ub = function(a, b) {
            if (b != k) a.style.cssText = b;
            else return a.style.cssText
        };
        var U = {
            gb: g.ac,
            j: g.v,
            g: g.A,
            yb: g.k,
            Db: g.l,
            ob: g.q,
            af: g.H,
            nb: g.p
        };

        function w(f, l) {
            var e = P(),
                b = K(),
                d = wb(),
                h = L(f);

            function i(b, d, a) {
                var e = b.Q(u(-d / 2, -a / 2)),
                    f = b.Q(u(d / 2, -a / 2)),
                    g = b.Q(u(d / 2, a / 2)),
                    h = b.Q(u(-d / 2, a / 2));
                b.Q(u(300, 300));
                return u(c.min(e.x, f.x, g.x, h.x) + d / 2, c.min(e.y, f.y, g.y, h.y) + a / 2)
            }

            function a(d, a) {
                a = a || {};
                var f = a.N || 0,
                    l = (a.O || 0) % 360,
                    m = (a.I || 0) % 360,
                    o = (a.S || 0) % 360,
                    p = a.Ze;
                if (e) {
                    f = 0;
                    l = 0;
                    m = 0;
                    p = 0
                }
                var c = new Db(a.U, a.V, f);
                c.O(l);
                c.I(m);
                c.Wd(o);
                c.Ad(a.qb, a.sb);
                c.Sb(a.m, a.n, p);
                if (b) {
                    c.lb(a.mb, a.kb);
                    d.style[h] = c.Ud()
                } else if (!W || W < 9) {
                    var j = "";
                    if (o || a.m != k && a.m != 1 || a.n != k && a.n != 1) {
                        var n = i(c, a.R, a.Y);
                        g.Je(d, n.y);
                        g.ae(d, n.x);
                        j = c.Td()
                    }
                    var r = d.style.filter,
                        s = new RegExp(/[\s]*progid:DXImageTransform\.Microsoft\.Matrix\([^\)]*\)/g),
                        q = I(r, [s], j);
                    ub(d, q)
                }
            }
            w = function(e, c) {
                c = c || {};
                var h = c.mb,
                    i = c.kb,
                    f;
                n(U, function(a, b) {
                    f = c[b];
                    f !== k && a(e, f)
                });
                g.td(e, c.c);
                if (!b) {
                    h != k && g.A(e, c.sc + h);
                    i != k && g.v(e, c.Gc + i)
                }
                if (c.Sd)
                    if (d) sb(g.B(j, N, e, c));
                    else a(e, c)
            };
            g.Ab = N;
            if (d) g.Ab = w;
            if (e) g.Ab = a;
            else if (!b) a = N;
            g.C = w;
            w(f, l)
        }
        g.Ab = w;
        g.C = w;

        function Db(i, l, p) {
            var d = this,
                b = [1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, i || 0, l || 0, p || 0, 1],
                h = c.sin,
                g = c.cos,
                m = c.tan;

            function f(a) {
                return a * c.PI / 180
            }

            function o(a, b) {
                return {
                    x: a,
                    y: b
                }
            }

            function n(c, e, l, m, o, r, t, u, w, z, A, C, E, b, f, k, a, g, i, n, p, q, s, v, x, y, B, D, F, d, h, j) {
                return [c * a + e * p + l * x + m * F, c * g + e * q + l * y + m * d, c * i + e * s + l * B + m * h, c * n + e * v + l * D + m * j, o * a + r * p + t * x + u * F, o * g + r * q + t * y + u * d, o * i + r * s + t * B + u * h, o * n + r * v + t * D + u * j, w * a + z * p + A * x + C * F, w * g + z * q + A * y + C * d, w * i + z * s + A * B + C * h, w * n + z * v + A * D + C * j, E * a + b * p + f * x + k * F, E * g + b * q + f * y + k * d, E * i + b * s + f * B + k * h, E * n + b * v + f * D + k * j]
            }

            function e(c, a) {
                return n.apply(j, (a || b).concat(c))
            }
            d.Sb = function(a, c, d) {
                if (a == k) a = 1;
                if (c == k) c = 1;
                if (d == k) d = 1;
                if (a != 1 || c != 1 || d != 1) b = e([a, 0, 0, 0, 0, c, 0, 0, 0, 0, d, 0, 0, 0, 0, 1])
            };
            d.lb = function(a, c, d) {
                b[12] += a || 0;
                b[13] += c || 0;
                b[14] += d || 0
            };
            d.O = function(c) {
                if (c) {
                    a = f(c);
                    var d = g(a),
                        i = h(a);
                    b = e([1, 0, 0, 0, 0, d, i, 0, 0, -i, d, 0, 0, 0, 0, 1])
                }
            };
            d.I = function(c) {
                if (c) {
                    a = f(c);
                    var d = g(a),
                        i = h(a);
                    b = e([d, 0, -i, 0, 0, 1, 0, 0, i, 0, d, 0, 0, 0, 0, 1])
                }
            };
            d.Wd = function(c) {
                if (c) {
                    a = f(c);
                    var d = g(a),
                        i = h(a);
                    b = e([d, i, 0, 0, -i, d, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1])
                }
            };
            d.Ad = function(a, c) {
                if (a || c) {
                    i = f(a);
                    l = f(c);
                    b = e([1, m(l), 0, 0, m(i), 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1])
                }
            };
            d.Q = function(c) {
                var a = e(b, [1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, c.x, c.y, 0, 1]);
                return o(a[12], a[13])
            };
            d.Ud = function() {
                return "matrix3d(" + b.join(",") + ")"
            };
            d.Td = function() {
                return "progid:DXImageTransform.Microsoft.Matrix(M11=" + b[0] + ", M12=" + b[4] + ", M21=" + b[1] + ", M22=" + b[5] + ", SizingMethod='auto expand')"
            }
        }
        new function() {
            var a = this;

            function b(d, g) {
                for (var j = d[0].length, i = d.length, h = g[0].length, f = [], c = 0; c < i; c++)
                    for (var k = f[c] = [], b = 0; b < h; b++) {
                        for (var e = 0, a = 0; a < j; a++) e += d[c][a] * g[a][b];
                        k[b] = e
                    }
                return f
            }
            a.m = function(b, c) {
                return a.Fc(b, c, 0)
            };
            a.n = function(b, c) {
                return a.Fc(b, 0, c)
            };
            a.Fc = function(a, c, d) {
                return b(a, [
                    [c, 0],
                    [0, d]
                ])
            };
            a.Q = function(d, c) {
                var a = b(d, [
                    [c.x],
                    [c.y]
                ]);
                return u(a[0][0], a[1][0])
            }
        };
        var O = {
            sc: 0,
            Gc: 0,
            mb: 0,
            kb: 0,
            X: 1,
            m: 1,
            n: 1,
            S: 0,
            O: 0,
            I: 0,
            U: 0,
            V: 0,
            N: 0,
            qb: 0,
            sb: 0
        };
        g.Od = function(a) {
            var c = a || {};
            if (a)
                if (b.Bc(a)) c = {
                    ec: c
                };
                else if (b.Bc(a.c)) c.c = {
                ec: a.c
            };
            return c
        };
        g.Nd = function(l, m, w, n, y, z, o) {
            var a = m;
            if (l) {
                a = {};
                for (var g in m) {
                    var A = z[g] || 1,
                        v = y[g] || [0, 1],
                        f = (w - v[0]) / v[1];
                    f = c.min(c.max(f, 0), 1);
                    f = f * A;
                    var u = c.floor(f);
                    if (f != u) f -= u;
                    var h = n.ec || e.Dd,
                        i, B = l[g],
                        q = m[g];
                    if (b.Ke(q)) {
                        h = n[g] || h;
                        var x = h(f);
                        i = B + q * x
                    } else {
                        i = b.W({
                            zb: {}
                        }, l[g]);
                        b.e(q.zb || q, function(d, a) {
                            if (n.c) h = n.c[a] || n.c.ec || h;
                            var c = h(f),
                                b = d * c;
                            i.zb[a] = b;
                            i[a] += b
                        })
                    }
                    a[g] = i
                }
                var t = b.e(m, function(b, a) {
                    return O[a] != k
                });
                t && b.e(O, function(c, b) {
                    if (a[b] == k && l[b] !== k) a[b] = l[b]
                });
                if (t) {
                    if (a.X) a.m = a.n = a.X;
                    a.R = o.R;
                    a.Y = o.Y;
                    a.Sd = d
                }
            }
            if (m.c && o.lb) {
                var p = a.c.zb,
                    s = (p.j || 0) + (p.r || 0),
                    r = (p.g || 0) + (p.s || 0);
                a.g = (a.g || 0) + r;
                a.j = (a.j || 0) + s;
                a.c.g -= r;
                a.c.s -= r;
                a.c.j -= s;
                a.c.r -= s
            }
            if (a.c && b.ud() && !a.c.j && !a.c.g && a.c.s == o.R && a.c.r == o.Y) a.c = j;
            return a
        }
    };

    function n() {
        var a = this,
            d = [];

        function i(a, b) {
            d.push({
                cc: a,
                bc: b
            })
        }

        function g(a, c) {
            b.e(d, function(b, e) {
                b.cc == a && b.bc === c && d.splice(e, 1)
            })
        }
        a.ib = a.addEventListener = i;
        a.removeEventListener = g;
        a.f = function(a) {
            var c = [].slice.call(arguments, 1);
            b.e(d, function(b) {
                b.cc == a && b.bc.apply(h, c)
            })
        }
    }
    var m = function(z, C, i, J, M, L) {
        z = z || 0;
        var a = this,
            q, n, o, u, A = 0,
            G, H, F, B, y = 0,
            g = 0,
            m = 0,
            D, k, f, e, p, w = [],
            x;

        function O(a) {
            f += a;
            e += a;
            k += a;
            g += a;
            m += a;
            y += a
        }

        function t(o) {
            var h = o;
            if (p && (h >= e || h <= f)) h = ((h - f) % p + p) % p + f;
            if (!D || u || g != h) {
                var j = c.min(h, e);
                j = c.max(j, f);
                if (!D || u || j != m) {
                    if (L) {
                        var l = (j - k) / (C || 1);
                        if (i.Hd) l = 1 - l;
                        var n = b.Nd(M, L, l, G, F, H, i);
                        if (x) b.e(n, function(b, a) {
                            x[a] && x[a](J, b)
                        });
                        else b.C(J, n)
                    }
                    a.Mb(m - k, j - k);
                    m = j;
                    b.e(w, function(b, c) {
                        var a = o < g ? w[w.length - c - 1] : b;
                        a.J(m - y)
                    });
                    var r = g,
                        q = m;
                    g = h;
                    D = d;
                    a.tb(r, q)
                }
            }
        }

        function E(a, b, d) {
            b && a.Ob(e);
            if (!d) {
                f = c.min(f, a.yc() + y);
                e = c.max(e, a.Qb() + y)
            }
            w.push(a)
        }
        var r = h.requestAnimationFrame || h.webkitRequestAnimationFrame || h.mozRequestAnimationFrame || h.msRequestAnimationFrame;
        if (b.Fe() && b.jc() < 7) r = j;
        r = r || function(a) {
            b.oc(a, i.xc)
        };

        function I() {
            if (q) {
                var d = b.F(),
                    e = c.min(d - A, i.wc),
                    a = g + e * o;
                A = d;
                if (a * o >= n * o) a = n;
                t(a);
                if (!u && a * o >= n * o) K(B);
                else r(I)
            }
        }

        function s(h, i, j) {
            if (!q) {
                q = d;
                u = j;
                B = i;
                h = c.max(h, f);
                h = c.min(h, e);
                n = h;
                o = n < g ? -1 : 1;
                a.vc();
                A = b.F();
                r(I)
            }
        }

        function K(b) {
            if (q) {
                u = q = B = l;
                a.uc();
                b && b()
            }
        }
        a.Hc = function(a, b, c) {
            s(a ? g + a : e, b, c)
        };
        a.nc = s;
        a.Z = K;
        a.Cd = function(a) {
            s(a)
        };
        a.L = function() {
            return g
        };
        a.tc = function() {
            return n
        };
        a.hb = function() {
            return m
        };
        a.J = t;
        a.lb = function(a) {
            t(g + a)
        };
        a.Ac = function() {
            return q
        };
        a.Kd = function(a) {
            p = a
        };
        a.Ob = O;
        a.Dc = function(a, b) {
            E(a, 0, b)
        };
        a.Zb = function(a) {
            E(a, 1)
        };
        a.yc = function() {
            return f
        };
        a.Qb = function() {
            return e
        };
        a.tb = a.vc = a.uc = a.Mb = b.Cc;
        a.gc = b.F();
        i = b.W({
            xc: 16,
            wc: 50
        }, i);
        p = i.kc;
        x = i.Xd;
        f = k = z;
        e = z + C;
        H = i.Yd || {};
        F = i.Zd || {};
        G = b.Od(i.ab)
    };
    new(function() {});
    var i = function(p, fc) {
        var g = this;

        function Bc() {
            var a = this;
            m.call(a, -1e8, 2e8);
            a.ze = function() {
                var b = a.hb(),
                    d = c.floor(b),
                    f = t(d),
                    e = b - c.floor(b);
                return {
                    P: f,
                    ye: d,
                    ob: e
                }
            };
            a.tb = function(b, a) {
                var e = c.floor(a);
                if (e != a && a > b) e++;
                Ub(e, d);
                g.f(i.xe, t(a), t(b), a, b)
            }
        }

        function Ac() {
            var a = this;
            m.call(a, 0, 0, {
                kc: r
            });
            b.e(C, function(b) {
                D & 1 && b.Kd(r);
                a.Zb(b);
                b.Ob(ib / bc)
            })
        }

        function zc() {
            var a = this,
                b = Tb.T;
            m.call(a, -1, 2, {
                ab: e.Ed,
                Xd: {
                    ob: Zb
                },
                kc: r
            }, b, {
                ob: 1
            }, {
                ob: -2
            });
            a.Wb = b
        }

        function nc(o, n) {
            var b = this,
                e, f, h, k, c;
            m.call(b, -1e8, 2e8, {
                wc: 100
            });
            b.vc = function() {
                M = d;
                S = j;
                g.f(i.we, t(w.L()), w.L())
            };
            b.uc = function() {
                M = l;
                k = l;
                var a = w.ze();
                g.f(i.ve, t(w.L()), w.L());
                !a.ob && Dc(a.ye, s)
            };
            b.tb = function(i, g) {
                var b;
                if (k) b = c;
                else {
                    b = f;
                    if (h) {
                        var d = g / h;
                        b = a.ue(d) * (f - e) + e
                    }
                }
                w.J(b)
            };
            b.rb = function(a, d, c, g) {
                e = a;
                f = d;
                h = c;
                w.J(a);
                b.J(0);
                b.nc(c, g)
            };
            b.He = function(a) {
                k = d;
                c = a;
                b.Hc(a, j, d)
            };
            b.te = function(a) {
                c = a
            };
            w = new Bc;
            w.Dc(o);
            w.Dc(n)
        }

        function pc() {
            var c = this,
                a = Xb();
            b.p(a, 0);
            b.D(a, "pointerEvents", "none");
            c.T = a;
            c.Bb = function() {
                b.K(a);
                b.Ib(a)
            }
        }

        function xc(o, f) {
            var e = this,
                q, L, v, k, y = [],
                x, B, W, G, Q, F, h, w, p;
            m.call(e, -u, u + 1, {});

            function E(a) {
                q && q.Nc();
                T(o, a, 0);
                F = d;
                q = new I.M(o, I, b.jd(b.i(o, "idle")) || lc);
                q.J(0)
            }

            function Z() {
                q.gc < I.gc && E()
            }

            function M(p, r, o) {
                if (!G) {
                    G = d;
                    if (k && o) {
                        var h = o.width,
                            c = o.height,
                            n = h,
                            m = c;
                        if (h && c && a.eb) {
                            if (a.eb & 3 && (!(a.eb & 4) || h > K || c > J)) {
                                var j = l,
                                    q = K / J * c / h;
                                if (a.eb & 1) j = q > 1;
                                else if (a.eb & 2) j = q < 1;
                                n = j ? h * J / c : K;
                                m = j ? J : c * K / h
                            }
                            b.k(k, n);
                            b.l(k, m);
                            b.v(k, (J - m) / 2);
                            b.A(k, (K - n) / 2)
                        }
                        b.q(k, "absolute");
                        g.f(i.re, f)
                    }
                }
                b.K(r);
                p && p(e)
            }

            function Y(b, c, d, g) {
                if (g == S && s == f && N)
                    if (!Cc) {
                        var a = t(b);
                        A.nd(a, f, c, e, d);
                        c.qe();
                        U.Ob(a - U.yc() - 1);
                        U.J(a);
                        z.rb(b, b, 0)
                    }
            }

            function cb(b) {
                if (b == S && s == f) {
                    if (!h) {
                        var a = j;
                        if (A)
                            if (A.P == f) a = A.De();
                            else A.Bb();
                        Z();
                        h = new vc(o, f, a, q);
                        h.Vc(p)
                    }!h.Ac() && h.Nb()
                }
            }

            function R(d, g, l) {
                if (d == f) {
                    if (d != g) C[g] && C[g].ke();
                    else !l && h && h.ee();
                    p && p.zc();
                    var m = S = b.F();
                    e.fb(b.B(j, cb, m))
                } else {
                    var k = c.min(f, d),
                        i = c.max(f, d),
                        o = c.min(i - k, k + r - i),
                        n = u + a.he - 1;
                    (!Q || o <= n) && e.fb()
                }
            }

            function db() {
                if (s == f && h) {
                    h.Z();
                    p && p.ge();
                    p && p.se();
                    h.hd()
                }
            }

            function eb() {
                s == f && h && h.Z()
            }

            function ab(a) {
                !P && g.f(i.Oe, f, a)
            }

            function O() {
                p = w.pInstance;
                h && h.Vc(p)
            }
            e.fb = function(c, a) {
                a = a || v;
                if (y.length && !G) {
                    b.E(a);
                    if (!W) {
                        W = d;
                        g.f(i.Me, f);
                        b.e(y, function(a) {
                            if (!b.o(a, "src")) {
                                a.src = b.i(a, "src2");
                                b.H(a, a["display-origin"])
                            }
                        })
                    }
                    b.qd(y, k, b.B(j, M, c, a))
                } else M(c, a)
            };
            e.Ne = function() {
                var h = f;
                if (a.Uc < 0) h -= r;
                var d = h + a.Uc * tc;
                if (D & 2) d = t(d);
                if (!(D & 1)) d = c.max(0, c.min(d, r - u));
                if (d != f) {
                    if (A) {
                        var e = A.Ee(r);
                        if (e) {
                            var i = S = b.F(),
                                g = C[t(d)];
                            return g.fb(b.B(j, Y, d, g, e, i), v)
                        }
                    }
                    bb(d)
                }
            };
            e.Xb = function() {
                R(f, f, d)
            };
            e.ke = function() {
                p && p.ge();
                p && p.se();
                e.Kc();
                h && h.Pe();
                h = j;
                E()
            };
            e.qe = function() {
                b.K(o)
            };
            e.Kc = function() {
                b.E(o)
            };
            e.ie = function() {
                p && p.zc()
            };

            function T(a, c, e) {
                if (b.o(a, "jssor-slider")) return;
                if (!F) {
                    if (a.tagName == "IMG") {
                        y.push(a);
                        if (!b.o(a, "src")) {
                            Q = d;
                            a["display-origin"] = b.H(a);
                            b.K(a)
                        }
                    }
                    b.Ic() && b.p(a, (b.p(a) || 0) + 1)
                }
                var f = b.xb(a);
                b.e(f, function(f) {
                    var h = f.tagName,
                        i = b.i(f, "u");
                    if (i == "player" && !w) {
                        w = f;
                        if (w.pInstance) O();
                        else b.a(w, "dataavailable", O)
                    }
                    if (i == "caption") {
                        if (c) {
                            b.Jc(f, b.i(f, "to"));
                            b.pe(f, b.i(f, "bf"));
                            b.i(f, "3d") && b.oe(f, "preserve-3d")
                        } else if (!b.ed()) {
                            var g = b.cb(f, l, d);
                            b.Cb(g, f, a);
                            b.Gb(f, a);
                            f = g;
                            c = d
                        }
                    } else if (!F && !e && !k) {
                        if (h == "A") {
                            if (b.i(f, "u") == "image") k = b.Re(f, "IMG");
                            else k = b.u(f, "image", d);
                            if (k) {
                                x = f;
                                b.H(x, "block");
                                b.C(x, V);
                                B = b.cb(x, d);
                                b.q(x, "relative");
                                b.ac(B, 0);
                                b.D(B, "backgroundColor", "#000")
                            }
                        } else if (h == "IMG" && b.i(f, "u") == "image") k = f;
                        if (k) {
                            k.border = 0;
                            b.C(k, V)
                        }
                    }
                    T(f, c, e + 1)
                })
            }
            e.Mb = function(c, b) {
                var a = u - b;
                Zb(L, a)
            };
            e.P = f;
            n.call(e);
            b.ne(o, b.i(o, "p"));
            b.me(o, b.i(o, "po"));
            var H = b.u(o, "thumb", d);
            if (H) {
                b.cb(H);
                b.K(H)
            }
            b.E(o);
            v = b.cb(fb);
            b.p(v, 1e3);
            b.a(o, "click", ab);
            E(d);
            e.Ge = k;
            e.Zc = B;
            e.Wb = L = o;
            b.G(L, v);
            g.ib(203, R);
            g.ib(28, eb);
            g.ib(24, db)
        }

        function vc(y, f, p, q) {
            var a = this,
                n = 0,
                u = 0,
                h, j, e, c, k, t, r, o = C[f];
            m.call(a, 0, 0);

            function v() {
                b.Ib(L);
                cc && k && o.Zc && b.G(L, o.Zc);
                b.E(L, !k && o.Ge)
            }

            function w() {
                a.Nb()
            }

            function x(b) {
                r = b;
                a.Z();
                a.Nb()
            }
            a.Nb = function() {
                var b = a.hb();
                if (!B && !M && !r && s == f) {
                    if (!b) {
                        if (h && !k) {
                            k = d;
                            a.hd(d);
                            g.f(i.xd, f, n, u, h, c)
                        }
                        v()
                    }
                    var l, p = i.Yc;
                    if (b != c)
                        if (b == e) l = c;
                        else if (b == j) l = e;
                    else if (!b) l = j;
                    else l = a.tc();
                    g.f(p, f, b, n, j, e, c);
                    var m = N && (!E || F);
                    if (b == c)(e != c && !(E & 12) || m) && o.Ne();
                    else(m || b != e) && a.nc(l, w)
                }
            };
            a.ee = function() {
                e == c && e == a.hb() && a.J(j)
            };
            a.Pe = function() {
                A && A.P == f && A.Bb();
                var b = a.hb();
                b < c && g.f(i.Yc, f, -b - 1, n, j, e, c)
            };
            a.hd = function(a) {
                p && b.Fb(jb, a && p.pc.Ve ? "" : "hidden")
            };
            a.Mb = function(b, a) {
                if (k && a >= h) {
                    k = l;
                    v();
                    o.Kc();
                    A.Bb();
                    g.f(i.sd, f, n, u, h, c)
                }
                g.f(i.rd, f, a, n, j, e, c)
            };
            a.Vc = function(a) {
                if (a && !t) {
                    t = a;
                    a.ib($JssorPlayer$.Bd, x)
                }
            };
            p && a.Zb(p);
            h = a.Qb();
            a.Zb(q);
            j = h + q.Tc;
            e = h + q.Sc;
            c = a.Qb()
        }

        function Kb(a, c, d) {
            b.A(a, c);
            b.v(a, d)
        }

        function Zb(c, b) {
            var a = x > 0 ? x : eb,
                d = zb * b * (a & 1),
                e = Ab * b * (a >> 1 & 1);
            Kb(c, d, e)
        }

        function Pb() {
            pb = M;
            Ib = z.tc();
            G = w.L()
        }

        function gc() {
            Pb();
            if (B || !F && E & 12) {
                z.Z();
                g.f(i.od)
            }
        }

        function ec(f) {
            if (!B && (F || !(E & 12)) && !z.Ac()) {
                var d = w.L(),
                    b = c.ceil(G);
                if (f && c.abs(H) >= a.Qc) {
                    b = c.ceil(d);
                    b += hb
                }
                if (!(D & 1)) b = c.min(r - u, c.max(b, 0));
                var e = c.abs(b - d);
                e = 1 - c.pow(1 - e, 5);
                if (!P && pb) z.Cd(Ib);
                else if (d == b) {
                    sb.ie();
                    sb.Xb()
                } else z.rb(d, b, e * Vb)
            }
        }

        function Hb(a) {
            !b.i(b.Pb(a), "nodrag") && b.vb(a)
        }

        function rc(a) {
            Yb(a, 1)
        }

        function Yb(a, c) {
            a = b.mc(a);
            var k = b.Pb(a);
            if (!O && !b.i(k, "nodrag") && sc() && (!c || a.touches.length == 1)) {
                B = d;
                yb = l;
                S = j;
                b.a(f, c ? "touchmove" : "mousemove", Bb);
                b.F();
                P = 0;
                gc();
                if (!pb) x = 0;
                if (c) {
                    var h = a.touches[0];
                    ub = h.clientX;
                    vb = h.clientY
                } else {
                    var e = b.lc(a);
                    ub = e.x;
                    vb = e.y
                }
                H = 0;
                gb = 0;
                hb = 0;
                g.f(i.de, t(G), G, a)
            }
        }

        function Bb(e) {
            if (B) {
                e = b.mc(e);
                var f;
                if (e.type != "mousemove") {
                    var l = e.touches[0];
                    f = {
                        x: l.clientX,
                        y: l.clientY
                    }
                } else f = b.lc(e);
                if (f) {
                    var j = f.x - ub,
                        k = f.y - vb;
                    if (c.floor(G) != G) x = x || eb & O;
                    if ((j || k) && !x) {
                        if (O == 3)
                            if (c.abs(k) > c.abs(j)) x = 2;
                            else x = 1;
                        else x = O;
                        if (mb && x == 1 && c.abs(k) - c.abs(j) > 3) yb = d
                    }
                    if (x) {
                        var a = k,
                            i = Ab;
                        if (x == 1) {
                            a = j;
                            i = zb
                        }
                        if (!(D & 1)) {
                            if (a > 0) {
                                var g = i * s,
                                    h = a - g;
                                if (h > 0) a = g + c.sqrt(h) * 5
                            }
                            if (a < 0) {
                                var g = i * (r - u - s),
                                    h = -a - g;
                                if (h > 0) a = -g - c.sqrt(h) * 5
                            }
                        }
                        if (H - gb < -2) hb = 0;
                        else if (H - gb > 2) hb = -1;
                        gb = H;
                        H = a;
                        rb = G - H / i / (Y || 1);
                        if (H && x && !yb) {
                            b.vb(e);
                            if (!M) z.He(rb);
                            else z.te(rb)
                        }
                    }
                }
            }
        }

        function ab() {
            qc();
            if (B) {
                B = l;
                b.F();
                b.z(f, "mousemove", Bb);
                b.z(f, "touchmove", Bb);
                P = H;
                z.Z();
                var a = w.L();
                g.f(i.yd, t(a), a, t(G), G);
                E & 12 && Pb();
                ec(d)
            }
        }

        function jc(c) {
            if (P) {
                b.fe(c);
                var a = b.Pb(c);
                while (a && v !== a) {
                    a.tagName == "A" && b.vb(c);
                    try {
                        a = a.parentNode
                    } catch (d) {
                        break
                    }
                }
            }
        }

        function Jb(a) {
            C[s];
            s = t(a);
            sb = C[s];
            Ub(a);
            return s
        }

        function Dc(a, b) {
            x = 0;
            Jb(a);
            g.f(i.md, t(a), b)
        }

        function Ub(a, c) {
            wb = a;
            b.e(T, function(b) {
                b.Yb(t(a), a, c)
            })
        }

        function sc() {
            var b = i.Wc || 0,
                a = X;
            if (mb) a & 1 && (a &= 1);
            i.Wc |= a;
            return O = a & ~b
        }

        function qc() {
            if (O) {
                i.Wc &= ~X;
                O = 0
            }
        }

        function Xb() {
            var a = b.wb();
            b.C(a, V);
            b.q(a, "absolute");
            return a
        }

        function t(a) {
            return (a % r + r) % r
        }

        function kc(b, d) {
            if (d)
                if (!D) {
                    b = c.min(c.max(b + wb, 0), r - u);
                    d = l
                } else if (D & 2) {
                b = t(b + wb);
                d = l
            }
            bb(b, a.ic, d)
        }

        function xb() {
            b.e(T, function(a) {
                a.dc(a.Eb.Xe <= F)
            })
        }

        function hc() {
            if (!F) {
                F = 1;
                xb();
                if (!B) {
                    E & 12 && ec();
                    E & 3 && C[s].Xb()
                }
            }
        }

        function Ec() {
            if (F) {
                F = 0;
                xb();
                B || !(E & 12) || gc()
            }
        }

        function ic() {
            V = {
                yb: K,
                Db: J,
                j: 0,
                g: 0
            };
            b.e(Q, function(a) {
                b.C(a, V);
                b.q(a, "absolute");
                b.Fb(a, "hidden");
                b.K(a)
            });
            b.C(fb, V)
        }

        function ob(b, a) {
            bb(b, a, d)
        }

        function bb(g, f, j) {
            if (Rb && (!B && (F || !(E & 12)) || a.fd)) {
                M = d;
                B = l;
                z.Z();
                if (f == k) f = Vb;
                var e = Cb.hb(),
                    b = g;
                if (j) {
                    b = e + g;
                    if (g > 0) b = c.ceil(b);
                    else b = c.floor(b)
                }
                if (D & 2) b = t(b);
                if (!(D & 1)) b = c.max(0, c.min(b, r - u));
                var i = (b - e) % r;
                b = e + i;
                var h = e == b ? 0 : f * c.abs(i);
                h = c.min(h, f * u * 1.5);
                z.rb(e, b, h || 1)
            }
        }
        g.Hc = function() {
            if (!N) {
                N = d;
                C[s] && C[s].Xb()
            }
        };

        function W() {
            return b.k(y || p)
        }

        function lb() {
            return b.l(y || p)
        }
        g.R = W;
        g.Y = lb;

        function Eb(c, d) {
            if (c == k) return b.k(p);
            if (!y) {
                var a = b.wb(f);
                b.Ec(a, b.Ec(p));
                b.ub(a, b.ub(p));
                b.H(a, "block");
                b.q(a, "relative");
                b.v(a, 0);
                b.A(a, 0);
                b.Fb(a, "visible");
                y = b.wb(f);
                b.q(y, "absolute");
                b.v(y, 0);
                b.A(y, 0);
                b.k(y, b.k(p));
                b.l(y, b.l(p));
                b.Jc(y, "0 0");
                b.G(y, a);
                var h = b.xb(p);
                b.G(p, y);
                b.D(p, "backgroundImage", "");
                b.e(h, function(c) {
                    b.G(b.i(c, "noscale") ? p : a, c);
                    b.i(c, "autocenter") && Mb.push(c)
                })
            }
            Y = c / (d ? b.l : b.k)(y);
            b.le(y, Y);
            var g = d ? Y * W() : c,
                e = d ? c : Y * lb();
            b.k(p, g);
            b.l(p, e);
            b.e(Mb, function(a) {
                var c = b.ld(b.i(a, "autocenter"));
                b.kd(a, c)
            })
        }
        g.Vd = Eb;
        n.call(g);
        g.T = p = b.db(p);
        var a = b.W({
            eb: 0,
            he: 1,
            Kb: 1,
            Vb: 0,
            Pc: l,
            Hb: 1,
            jb: d,
            fd: d,
            Uc: 1,
            Xc: 3e3,
            Lc: 1,
            ic: 500,
            ue: e.Fd,
            Qc: 20,
            Mc: 0,
            bb: 1,
            Oc: 0,
            Rd: 1,
            hc: 1,
            Rc: 1
        }, fc);
        a.jb = a.jb && b.pd();
        if (a.Qd != k) a.Xc = a.Qd;
        if (a.Pd != k) a.Oc = a.Pd;
        var eb = a.hc & 3,
            tc = (a.hc & 4) / -4 || 1,
            kb = a.Ye,
            I = b.W({
                M: q,
                jb: a.jb
            }, a.Te);
        I.fc = I.fc || I.Se;
        var Fb = a.Md,
            Z = a.Ld,
            db = a.Ue,
            R = !a.Rd,
            y, v = b.u(p, "slides", R),
            fb = b.u(p, "loading", R) || b.wb(f),
            Nb = b.u(p, "navigator", R),
            dc = b.u(p, "arrowleft", R),
            ac = b.u(p, "arrowright", R),
            Lb = b.u(p, "thumbnavigator", R),
            oc = b.k(v),
            mc = b.l(v),
            V, Q = [],
            uc = b.xb(v);
        b.e(uc, function(a) {
            if (a.tagName == "DIV" && !b.i(a, "u")) Q.push(a);
            else b.Ic() && b.p(a, (b.p(a) || 0) + 1)
        });
        var s = -1,
            wb, sb, r = Q.length,
            K = a.Jd || oc,
            J = a.Id || mc,
            Wb = a.Mc,
            zb = K + Wb,
            Ab = J + Wb,
            bc = eb & 1 ? zb : Ab,
            u = c.min(a.bb, r),
            jb, x, O, yb, T = [],
            Qb, Sb, Ob, cc, Cc, N, E = a.Lc,
            lc = a.Xc,
            Vb = a.ic,
            qb, tb, ib, Rb = u < r,
            D = Rb ? a.Hb : 0,
            X, P, F = 1,
            M, B, S, ub = 0,
            vb = 0,
            H, gb, hb, Cb, w, U, z, Tb = new pc,
            Y, Mb = [];
        if (a.jb) Kb = function(a, c, d) {
            b.Ab(a, {
                U: c,
                V: d
            })
        };
        N = a.Pc;
        g.Eb = fc;
        ic();
        b.o(p, "jssor-slider", d);
        b.p(v, b.p(v) || 0);
        b.q(v, "absolute");
        jb = b.cb(v, d);
        b.Cb(jb, v);
        if (kb) {
            cc = kb.We;
            qb = kb.M;
            tb = u == 1 && r > 1 && qb && (!b.ed() || b.jc() >= 8)
        }
        ib = tb || u >= r || !(D & 1) ? 0 : a.Oc;
        X = (u > 1 || ib ? eb : -1) & a.Rc;
        var Gb = v,
            C = [],
            A, L, Db = b.Ce(),
            mb = Db.Ae,
            G, pb, Ib, rb;
        Db.gd && b.D(Gb, Db.gd, ([j, "pan-y", "pan-x", "none"])[X] || "");
        U = new zc;
        if (tb) A = new qb(Tb, K, J, kb, mb);
        b.G(jb, U.Wb);
        b.Fb(v, "hidden");
        L = Xb();
        b.D(L, "backgroundColor", "#000");
        b.ac(L, 0);
        b.Cb(L, Gb.firstChild, Gb);
        for (var cb = 0; cb < Q.length; cb++) {
            var wc = Q[cb],
                yc = new xc(wc, cb);
            C.push(yc)
        }
        b.K(fb);
        Cb = new Ac;
        z = new nc(Cb, U);
        if (X) {
            b.a(v, "mousedown", Yb);
            b.a(v, "touchstart", rc);
            b.a(v, "dragstart", Hb);
            b.a(v, "selectstart", Hb);
            b.a(f, "mouseup", ab);
            b.a(f, "touchend", ab);
            b.a(f, "touchcancel", ab);
            b.a(h, "blur", ab)
        }
        E &= mb ? 10 : 5;
        if (Nb && Fb) {
            Qb = new Fb.M(Nb, Fb, W(), lb());
            T.push(Qb)
        }
        if (Z && dc && ac) {
            Z.Hb = D;
            Z.bb = u;
            Sb = new Z.M(dc, ac, Z, W(), lb());
            T.push(Sb)
        }
        if (Lb && db) {
            db.Vb = a.Vb;
            Ob = new db.M(Lb, db);
            T.push(Ob)
        }
        b.e(T, function(a) {
            a.Jb(r, C, fb);
            a.ib(o.Lb, kc)
        });
        b.D(p, "visibility", "visible");
        Eb(W());
        b.a(v, "click", jc);
        b.a(p, "mouseout", b.Ub(hc, p));
        b.a(p, "mouseover", b.Ub(Ec, p));
        xb();
        a.Kb && b.a(f, "keydown", function(b) {
            if (b.keyCode == 37) ob(-a.Kb);
            else b.keyCode == 39 && ob(a.Kb)
        });
        var nb = a.Vb;
        if (!(D & 1)) nb = c.max(0, c.min(nb, r - u));
        z.rb(nb, nb, 0)
    };
    i.Oe = 21;
    i.de = 22;
    i.yd = 23;
    i.we = 24;
    i.ve = 25;
    i.Me = 26;
    i.re = 27;
    i.od = 28;
    i.xe = 202;
    i.md = 203;
    i.xd = 206;
    i.sd = 207;
    i.rd = 208;
    i.Yc = 209;
    var o = {
            Lb: 1
        },
        r = function(e, C) {
            var f = this;
            n.call(f);
            e = b.db(e);
            var s, A, z, r, k = 0,
                a, m, i, w, x, h, g, q, p, B = [],
                y = [];

            function v(a) {
                a != -1 && y[a].be(a == k)
            }

            function t(a) {
                f.f(o.Lb, a * m)
            }
            f.T = e;
            f.Yb = function(a) {
                if (a != r) {
                    var d = k,
                        b = c.floor(a / m);
                    k = b;
                    r = a;
                    v(d);
                    v(b)
                }
            };
            f.dc = function(a) {
                b.E(e, a)
            };
            var u;
            f.Jb = function(D) {
                if (!u) {
                    s = c.ceil(D / m);
                    k = 0;
                    var o = q + w,
                        r = p + x,
                        n = c.ceil(s / i) - 1;
                    A = q + o * (!h ? n : i - 1);
                    z = p + r * (h ? n : i - 1);
                    b.k(e, A);
                    b.l(e, z);
                    for (var f = 0; f < s; f++) {
                        var C = b.Le();
                        b.Ie(C, f + 1);
                        var l = b.zd(g, "numbertemplate", C, d);
                        b.q(l, "absolute");
                        var v = f % (n + 1);
                        b.A(l, !h ? o * v : f % i * o);
                        b.v(l, h ? r * v : c.floor(f / (n + 1)) * r);
                        b.G(e, l);
                        B[f] = l;
                        a.Rb & 1 && b.a(l, "click", b.B(j, t, f));
                        a.Rb & 2 && b.a(l, "mouseover", b.Ub(b.B(j, t, f), l));
                        y[f] = b.Tb(l)
                    }
                    u = d
                }
            };
            f.Eb = a = b.W({
                dd: 10,
                cd: 10,
                bd: 1,
                Rb: 1
            }, C);
            g = b.u(e, "prototype");
            q = b.k(g);
            p = b.l(g);
            b.Gb(g, e);
            m = a.ad || 1;
            i = a.vd || 1;
            w = a.dd;
            x = a.cd;
            h = a.bd - 1;
            a.Sb == l && b.o(e, "noscale", d);
            a.pb && b.o(e, "autocenter", a.pb)
        },
        s = function(a, g, h) {
            var c = this;
            n.call(c);
            var r, q, e, f, i;
            b.k(a);
            b.l(a);

            function k(a) {
                c.f(o.Lb, a, d)
            }

            function p(c) {
                b.E(a, c || !h.Hb && e == 0);
                b.E(g, c || !h.Hb && e >= q - h.bb);
                r = c
            }
            c.Yb = function(b, a, c) {
                if (c) e = a;
                else {
                    e = b;
                    p(r)
                }
            };
            c.dc = p;
            var m;
            c.Jb = function(c) {
                q = c;
                e = 0;
                if (!m) {
                    b.a(a, "click", b.B(j, k, -i));
                    b.a(g, "click", b.B(j, k, i));
                    b.Tb(a);
                    b.Tb(g);
                    m = d
                }
            };
            c.Eb = f = b.W({
                ad: 1
            }, h);
            i = f.ad;
            if (f.Sb == l) {
                b.o(a, "noscale", d);
                b.o(g, "noscale", d)
            }
            if (f.pb) {
                b.o(a, "autocenter", f.pb);
                b.o(g, "autocenter", f.pb)
            }
        };

    function q(e, d, c) {
        var a = this;
        m.call(a, 0, c);
        a.Nc = b.Cc;
        a.Tc = 0;
        a.Sc = c
    }
    jssor_1_slider_init = function() {
        var e = {
                Ld: {
                    M: s
                },
                Md: {
                    M: r
                }
            },
            d = new i("jssor_1", e);

        function a() {
            var b = d.T.parentNode.clientWidth;
            if (b) {
                b = c.min(b, 600);
                d.Vd(b)
            } else h.setTimeout(a, 30)
        }
        a();
        b.a(h, "load", a);
        b.a(h, "resize", a);
        b.a(h, "orientationchange", a)
    }
})(window, document, Math, null, true, false)