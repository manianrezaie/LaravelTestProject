<!DOCTYPE html>
<html lang="fa" direction="rtl" style="direction: rtl;">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>
        Test Project
    </title>
    <meta name="description" content="Big Office panel area">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Web font -->
    <script src="/assets/js/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]},
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->
    <!--begin::Base Styles -->
    <!--begin::Page Vendors -->


    <!--<link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />-->
    <!--end::Page Vendors -->

    <link href="{{asset('assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/demo/default/base/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/style/rtl.css')}}" rel="stylesheet" type="text/css"/>

    <!--end::Base Styles -->
    <link rel="shortcut icon" href="{{asset('images/brands/favicon.ico')}}"/>
    @yield('reststyle')
</head>
<!-- end::Head -->
<!-- end::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

@yield('body')
<script>
    String.prototype.toEnglishDigits = function () {
        let id = {'۰': '0', '۱': '1', '۲': '2', '۳': '3', '۴': '4', '۵': '5', '۶': '6', '۷': '7', '۸': '8', '۹': '9'};
        return this.replace(/[^0-9.]/g, function (w) {
            return id[w] || w;
        });
    };

    function getParentLang(node) {
        var defaultLang = 'fa';
        var currLang = null;
        while (currLang === null && node.parentNode) {
            if (node.getAttribute && node.getAttribute('lang')) {
                currLang = node.getAttribute('lang');
            }
            node = node.parentNode;
        }
        return currLang || defaultLang;
    }

    function TraceNodes(e) {
        if (e.nodeType === 3 && getParentLang(e) === 'fa' /* Persian */) {
            e.nodeValue = e.nodeValue.toPersianDigit();
        } else {
            for (let t = 0; t < e.childNodes.length; t++) {
                TraceNodes(e.childNodes[t]);
            }
        }
    }

    String.prototype.toPersianDigit = function (e) {
        return this.replace(/\d+/g, function (t) {
            let n = [], r = [];
            for (let i = 0; i < t.length; i++) {
                n.push(t.charCodeAt(i))
            }
            for (let s = 0; s < n.length; s++) {
                r.push(String.fromCharCode(n[s] + (!!e && e === true ? 1584 : 1728)))
            }
            return r.join("")
        })
    };
    // TraceNodes(document);
</script>
<script src="{{asset('assets/vendors/base/vendors.bundle.rtl.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/demo/default/base/scripts.bundle.rtl.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/demo/default/custom/components/base/sweetalert2.js')}}" type="text/javascript"></script>

@yield('restscripts')
</body>
<!-- end::Body -->
</html>
