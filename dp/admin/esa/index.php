<html lang="en">

<head>
    <style>
        .anticon {
            display: inline-block;
            color: inherit;
            font-style: normal;
            line-height: 0;
            text-align: center;
            text-transform: none;
            vertical-align: -0.125em;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .anticon>* {
            line-height: 1;
        }

        .anticon svg {
            display: inline-block;
        }

        .anticon::before {
            display: none;
        }

        .anticon .anticon-icon {
            display: block;
        }

        .anticon[tabindex] {
            cursor: pointer;
        }

        .anticon-spin::before,
        .anticon-spin {
            display: inline-block;
            -webkit-animation: loadingCircle 1s infinite linear;
            animation: loadingCircle 1s infinite linear;
        }

        @-webkit-keyframes loadingCircle {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes loadingCircle {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>
    <meta charset="utf-8">
    <link rel="icon" href="/images/logo.png">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta name="theme-color" content="#000000">
    <meta name="description" content="Gajian lebih awal">
    <link rel="apple-touch-icon" href="/logo.png">
    <link rel="manifest" href="/manifest.json" crossorigin="use-credentials">
    <link rel="apple-touch-icon" sizes="180x180" href="./images/logo.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>EAS | Home</title>
    <link href="static/css/2.a95be28f.chunk.css" rel="stylesheet">
    <link href="static/css/main.1801256b.chunk.css" rel="stylesheet">
</head>

<body><noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
        <div>
            <div class="site-layout-background app-container with-background" style="padding: 0px;">
                <main>
                    <div class="app-header"><img src="../../img/delapanpadilogo.png"></div>
                    <div>
                        <div>
                            <div class="pb70 ">
                                <div class="main-wrapper mt60 px-3 py-3" style="background: url(&quot;/images/BG.jpeg&quot;) 0px -140px no-repeat;">
                                    <div class="ant-card ant-card-bordered app-card custom-shadow" style="width: 100%;">
                                        <div class="ant-card-body">
                                            <p class="text-center mb-0 greeting">Hi Dicky Erik Risbaya!</p>
                                            <h4 class="text-center mobile-header-label mb-4">Tarik Gajimu Hari Ini<div class="clearfix mb-5"></div>
                                            </h4>
                                            <div class="overlay-card"></div>
                                            <div class="single-chart"><svg id="day-svgpath" viewBox="0 0 36 36" class="circular-chart blue">
                                                    <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                                                    <path id="day-pie-chart" class="circle" stroke-width="10" stroke-dasharray="68, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path><text x="18" y="18.35" class="percentage" id="days-static"> 17 Hari</text><text x="18" y="22.85" class="percentage" id="days-count"> / 25 Hari Kerja</text>
                                                </svg></div>
                                            <div class="text-ceter mt-4 cycle-date">
                                                <h5>
                                                    <center>Siklus Baru Pada Tanggal &nbsp; <span id="cycle-date-value" style="color: #7380ec; font-weight: 600;">01 Nov 2022</span></center>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ant-card ant-card-bordered app-card custom-shadow mt-2" style="width: 100%;">
                                        <div class="ant-card-body">
                                            <div>
                                                <h4 class="text-center mobile-header-label">Saldo Yang Tersedia</h4>
                                                <center><a href="" target="__self" class="label mx-auto" style="background: #7380ec; color: white; padding: 5px 10px; border-radius: 8px; font-size: 13px;">Maksimum Gaji Yang Bisa Diakses : <b><span id="accessable_salary">100</span>%</b></a></center>
                                                <h1 class="text-center mt-3" id="balance-static">Rp 1,416,667</h1>
                                            </div>
                                            <form id="basic" autocomplete="off" class="ant-form ant-form-vertical ant-form-large">
                                                <div class="ant-row ant-form-item" style="row-gap: 0px;">
                                                    <div class="ant-col ant-form-item-label"><label for="basic_amount" class="" title="Nominal Penarikan">Nominal Penarikan</label></div>
                                                    <div class="ant-col ant-form-item-control">
                                                        <div class="ant-form-item-control-input">
                                                            <div class="ant-form-item-control-input-content">
                                                                <div class="ant-input-number ant-input-number-lg input-default" style="width: 100%; text-align: right;">
                                                                    <div class="ant-input-number-handler-wrap"><span unselectable="on" role="button" aria-label="Increase Value" aria-disabled="false" class="ant-input-number-handler ant-input-number-handler-up"><span role="img" aria-label="up" class="anticon anticon-up ant-input-number-handler-up-inner"><svg viewBox="64 64 896 896" focusable="false" data-icon="up" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                                    <path d="M890.5 755.3L537.9 269.2c-12.8-17.6-39-17.6-51.7 0L133.5 755.3A8 8 0 00140 768h75c5.1 0 9.9-2.5 12.9-6.6L512 369.8l284.1 391.6c3 4.1 7.8 6.6 12.9 6.6h75c6.5 0 10.3-7.4 6.5-12.7z"></path>
                                                                                </svg></span></span><span unselectable="on" role="button" aria-label="Decrease Value" aria-disabled="false" class="ant-input-number-handler ant-input-number-handler-down"><span role="img" aria-label="down" class="anticon anticon-down ant-input-number-handler-down-inner"><svg viewBox="64 64 896 896" focusable="false" data-icon="down" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                                                    <path d="M884 256h-75c-5.1 0-9.9 2.5-12.9 6.6L512 654.2 227.9 262.6c-3-4.1-7.8-6.6-12.9-6.6h-75c-6.5 0-10.3 7.4-6.5 12.7l352.6 486.1c12.8 17.6 39 17.6 51.7 0l352.6-486.1c3.9-5.3.1-12.7-6.4-12.7z"></path>
                                                                                </svg></span></span></div>
                                                                    <div class="ant-input-number-input-wrap"><input autocomplete="off" role="spinbutton" step="1" type="tel" placeholder="Masukkan nominal" id="basic_amount" class="ant-input-number-input" value=""></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ant-row ant-form-item" style="row-gap: 0px;">
                                                    <div class="ant-col ant-form-item-control">
                                                        <div class="ant-form-item-control-input">
                                                            <div class="ant-form-item-control-input-content"><button type="submit" class="ant-btn ant-btn-primary ant-btn-lg button-default-style btn-app-primary btn-block"><i class="fas fa-wallet fa-fw"></i><span>&nbsp; Tarik Saldo</span></button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-bar">
                                    <div class="ant-row" style="row-gap: 0px;">
                                        <div class="ant-col text-center ant-col-xs-8"><a aria-current="page" class="tab-bar-item selected-tab" href="/">
                                                <div class="tab-bar-icon"><span role="img" aria-label="home" class="anticon anticon-home" style="font-size: 18px;"><svg viewBox="64 64 896 896" focusable="false" data-icon="home" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                            <path d="M946.5 505L560.1 118.8l-25.9-25.9a31.5 31.5 0 00-44.4 0L77.5 505a63.9 63.9 0 00-18.8 46c.4 35.2 29.7 63.3 64.9 63.3h42.5V940h691.8V614.3h43.4c17.1 0 33.2-6.7 45.3-18.8a63.6 63.6 0 0018.7-45.3c0-17-6.7-33.1-18.8-45.2zM568 868H456V664h112v204zm217.9-325.7V868H632V640c0-22.1-17.9-40-40-40H432c-22.1 0-40 17.9-40 40v228H238.1V542.3h-96l370-369.7 23.1 23.1L882 542.3h-96.1z"></path>
                                                        </svg></span></div><label class="tab-bar-title">Home</label>
                                            </a></div>
                                        <div class="ant-col text-center ant-col-xs-8"><a class="tab-bar-item" href="/bills">
                                                <div class="tab-bar-icon"><span role="img" aria-label="file-protect" class="anticon anticon-file-protect" style="font-size: 18px;"><svg viewBox="64 64 896 896" focusable="false" data-icon="file-protect" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                            <path d="M644.7 669.2a7.92 7.92 0 00-6.5-3.3H594c-6.5 0-10.3 7.4-6.5 12.7l73.8 102.1c3.2 4.4 9.7 4.4 12.9 0l114.2-158c3.8-5.3 0-12.7-6.5-12.7h-44.3c-2.6 0-5 1.2-6.5 3.3l-63.5 87.8-22.9-31.9zM688 306v-48c0-4.4-3.6-8-8-8H296c-4.4 0-8 3.6-8 8v48c0 4.4 3.6 8 8 8h384c4.4 0 8-3.6 8-8zm-392 88c-4.4 0-8 3.6-8 8v48c0 4.4 3.6 8 8 8h184c4.4 0 8-3.6 8-8v-48c0-4.4-3.6-8-8-8H296zm184 458H208V148h560v296c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8V108c0-17.7-14.3-32-32-32H168c-17.7 0-32 14.3-32 32v784c0 17.7 14.3 32 32 32h312c4.4 0 8-3.6 8-8v-56c0-4.4-3.6-8-8-8zm402.6-320.8l-192-66.7c-.9-.3-1.7-.4-2.6-.4s-1.8.1-2.6.4l-192 66.7a7.96 7.96 0 00-5.4 7.5v251.1c0 2.5 1.1 4.8 3.1 6.3l192 150.2c1.4 1.1 3.2 1.7 4.9 1.7s3.5-.6 4.9-1.7l192-150.2c1.9-1.5 3.1-3.8 3.1-6.3V538.7c0-3.4-2.2-6.4-5.4-7.5zM826 763.7L688 871.6 550 763.7V577l138-48 138 48v186.7z"></path>
                                                        </svg></span></div><label class="tab-bar-title">Bills</label>
                                            </a></div>
                                        <div class="ant-col text-center ant-col-xs-8"><a class="tab-bar-item" href="/account">
                                                <div class="tab-bar-icon"><span role="img" aria-label="user" class="anticon anticon-user" style="font-size: 18px;"><svg viewBox="64 64 896 896" focusable="false" data-icon="user" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                            <path d="M858.5 763.6a374 374 0 00-80.6-119.5 375.63 375.63 0 00-119.5-80.6c-.4-.2-.8-.3-1.2-.5C719.5 518 760 444.7 760 362c0-137-111-248-248-248S264 225 264 362c0 82.7 40.5 156 102.8 201.1-.4.2-.8.3-1.2.5-44.8 18.9-85 46-119.5 80.6a375.63 375.63 0 00-80.6 119.5A371.7 371.7 0 00136 901.8a8 8 0 008 8.2h60c4.4 0 7.9-3.5 8-7.8 2-77.2 33-149.5 87.8-204.3 56.7-56.7 132-87.9 212.2-87.9s155.5 31.2 212.2 87.9C779 752.7 810 825 812 902.2c.1 4.4 3.6 7.8 8 7.8h60a8 8 0 008-8.2c-1-47.8-10.9-94.3-29.5-138.2zM512 534c-45.9 0-89.1-17.9-121.6-50.4S340 407.9 340 362c0-45.9 17.9-89.1 50.4-121.6S466.1 190 512 190s89.1 17.9 121.6 50.4S684 316.1 684 362c0 45.9-17.9 89.1-50.4 121.6S557.9 534 512 534z"></path>
                                                        </svg></span></div><label class="tab-bar-title">Account</label>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
    <script async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript">
        "serviceWorker" in navigator && window.addEventListener("load", () => {
            navigator.serviceWorker.register("./serviceworker.js?v=1.0.2").then(e => {
                e.update()
            }).catch(e => {})
        })
    </script>
    <script>
        ! function(e) {
            function r(r) {
                for (var n, u, i = r[0], c = r[1], f = r[2], p = 0, s = []; p < i.length; p++) u = i[p], Object.prototype.hasOwnProperty.call(o, u) && o[u] && s.push(o[u][0]), o[u] = 0;
                for (n in c) Object.prototype.hasOwnProperty.call(c, n) && (e[n] = c[n]);
                for (l && l(r); s.length;) s.shift()();
                return a.push.apply(a, f || []), t()
            }

            function t() {
                for (var e, r = 0; r < a.length; r++) {
                    for (var t = a[r], n = !0, i = 1; i < t.length; i++) {
                        var c = t[i];
                        0 !== o[c] && (n = !1)
                    }
                    n && (a.splice(r--, 1), e = u(u.s = t[0]))
                }
                return e
            }
            var n = {},
                o = {
                    1: 0
                },
                a = [];

            function u(r) {
                if (n[r]) return n[r].exports;
                var t = n[r] = {
                    i: r,
                    l: !1,
                    exports: {}
                };
                return e[r].call(t.exports, t, t.exports, u), t.l = !0, t.exports
            }
            u.e = function(e) {
                var r = [],
                    t = o[e];
                if (0 !== t)
                    if (t) r.push(t[2]);
                    else {
                        var n = new Promise((function(r, n) {
                            t = o[e] = [r, n]
                        }));
                        r.push(t[2] = n);
                        var a, i = document.createElement("script");
                        i.charset = "utf-8", i.timeout = 120, u.nc && i.setAttribute("nonce", u.nc), i.src = function(e) {
                            return u.p + "static/js/" + ({} [e] || e) + "." + {
                                3: "c4805ea3",
                                4: "a1c9273f",
                                5: "f58ea989",
                                6: "0dfcccdf",
                                7: "e3f59a72",
                                8: "10b9cc52",
                                9: "1ab445e3",
                                10: "e7953666",
                                11: "fad0972c",
                                12: "81b4121f"
                            } [e] + ".chunk.js"
                        }(e);
                        var c = new Error;
                        a = function(r) {
                            i.onerror = i.onload = null, clearTimeout(f);
                            var t = o[e];
                            if (0 !== t) {
                                if (t) {
                                    var n = r && ("load" === r.type ? "missing" : r.type),
                                        a = r && r.target && r.target.src;
                                    c.message = "Loading chunk " + e + " failed.\n(" + n + ": " + a + ")", c.name = "ChunkLoadError", c.type = n, c.request = a, t[1](c)
                                }
                                o[e] = void 0
                            }
                        };
                        var f = setTimeout((function() {
                            a({
                                type: "timeout",
                                target: i
                            })
                        }), 12e4);
                        i.onerror = i.onload = a, document.head.appendChild(i)
                    } return Promise.all(r)
            }, u.m = e, u.c = n, u.d = function(e, r, t) {
                u.o(e, r) || Object.defineProperty(e, r, {
                    enumerable: !0,
                    get: t
                })
            }, u.r = function(e) {
                "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
                    value: "Module"
                }), Object.defineProperty(e, "__esModule", {
                    value: !0
                })
            }, u.t = function(e, r) {
                if (1 & r && (e = u(e)), 8 & r) return e;
                if (4 & r && "object" == typeof e && e && e.__esModule) return e;
                var t = Object.create(null);
                if (u.r(t), Object.defineProperty(t, "default", {
                        enumerable: !0,
                        value: e
                    }), 2 & r && "string" != typeof e)
                    for (var n in e) u.d(t, n, function(r) {
                        return e[r]
                    }.bind(null, n));
                return t
            }, u.n = function(e) {
                var r = e && e.__esModule ? function() {
                    return e.default
                } : function() {
                    return e
                };
                return u.d(r, "a", r), r
            }, u.o = function(e, r) {
                return Object.prototype.hasOwnProperty.call(e, r)
            }, u.p = "/", u.oe = function(e) {
                throw console.error(e), e
            };
            var i = this["webpackJsonppaidbaq-v2"] = this["webpackJsonppaidbaq-v2"] || [],
                c = i.push.bind(i);
            i.push = r, i = i.slice();
            for (var f = 0; f < i.length; f++) r(i[f]);
            var l = c;
            t()
        }([])
    </script>
    <script src="/static/js/2.ede507c9.chunk.js"></script>
    <script src="/static/js/main.4e1bb40b.chunk.js"></script>
</body>

</html>