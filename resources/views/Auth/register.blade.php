<script id="pixel-chaty" async="true" src="https://cdn.chaty.app/pixel.js?id=SQB08AOB"></script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{url('')}}/public/assets/storage/images/favicon.png" type="image/png">
    <title>Verify Asap</title>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="{{url('')}}/public/assets/css/vendor.css">
    <link rel="stylesheet" href="{{url('')}}/public/assets/css/common.css">
    <script src="{{url('')}}/public/assets/vendor/Shortcode/Shortcode.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="{{url('')}}/public/assets/js/app.js" defer></script>
    <style>
        [wire\:loading],
        [wire\:loading\.delay],
        [wire\:loading\.inline-block],
        [wire\:loading\.inline],
        [wire\:loading\.block],
        [wire\:loading\.flex],
        [wire\:loading\.table],
        [wire\:loading\.grid],
        [wire\:loading\.inline-flex] {
            display: none;
        }

        [wire\:loading\.delay\.shortest],
        [wire\:loading\.delay\.shorter],
        [wire\:loading\.delay\.short],
        [wire\:loading\.delay\.long],
        [wire\:loading\.delay\.longer],
        [wire\:loading\.delay\.longest] {
            display: none;
        }

        [wire\:offline] {
            display: none;
        }

        [wire\:dirty]:not(textarea):not(input):not(select) {
            display: none;
        }

        input:-webkit-autofill,
        select:-webkit-autofill,
        textarea:-webkit-autofill {
            animation-duration: 50000s;
            animation-name: livewireautofill;
        }

        @keyframes livewireautofill {
            from {}
        }


        /* line 27, bootstrap-select.scss */
        select.bs-select-hidden,
        select.selectpicker {
            display: none !important;
        }

        /* line 32, bootstrap-select.scss */
        .bootstrap-select {
            width: 220px \0;
            /*IE9 and below*/
        }

        /* line 37, bootstrap-select.scss */
        .bootstrap-select.btn-group>.dropdown-toggle {
            height: 100%;
        }

        /* line 43, bootstrap-select.scss */
        .bootstrap-select>.dropdown-toggle {
            width: 100%;
            padding-right: 25px;
            z-index: 1;
        }

        /* line 48, bootstrap-select.scss */
        .bootstrap-select>.dropdown-toggle.bs-placeholder,
        .bootstrap-select>.dropdown-toggle.bs-placeholder:hover,
        .bootstrap-select>.dropdown-toggle.bs-placeholder:focus,
        .bootstrap-select>.dropdown-toggle.bs-placeholder:active {
            color: #999;
        }

        /* line 56, bootstrap-select.scss */
        .bootstrap-select>select {
            position: absolute !important;
            bottom: 0;
            left: 50%;
            display: block !important;
            width: 0.5px !important;
            height: 100% !important;
            padding: 0 !important;
            opacity: 0 !important;
            border: none;
        }

        /* line 67, bootstrap-select.scss */
        .bootstrap-select>select.mobile-device {
            top: 0;
            left: 0;
            display: block !important;
            width: 100% !important;
            z-index: 2;
        }

        /* line 77, bootstrap-select.scss */
        .has-error .bootstrap-select .dropdown-toggle,
        .error .bootstrap-select .dropdown-toggle {
            border-color: #b94a48;
        }

        /* line 82, bootstrap-select.scss */
        .bootstrap-select.fit-width {
            width: auto !important;
        }

        /* line 86, bootstrap-select.scss */
        .bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
            width: 220px;
        }

        /* line 90, bootstrap-select.scss */
        .bootstrap-select .dropdown-toggle:focus {
            outline: thin dotted #333333 !important;
            outline: 5px auto -webkit-focus-ring-color !important;
            outline-offset: -2px;
        }

        /* line 97, bootstrap-select.scss */
        .bootstrap-select.form-control {
            margin-bottom: 0;
            padding: 0;
            border: none;
        }

        /* line 102, bootstrap-select.scss */
        .bootstrap-select.form-control:not([class*="col-"]) {
            width: 100%;
        }

        /* line 106, bootstrap-select.scss */
        .bootstrap-select.form-control.input-group-btn {
            z-index: auto;
        }

        /* line 110, bootstrap-select.scss */
        .bootstrap-select.form-control.input-group-btn:not(:first-child):not(:last-child)>.btn {
            border-radius: 0;
        }

        /* line 119, bootstrap-select.scss */
        .bootstrap-select.btn-group:not(.input-group-btn),
        .bootstrap-select.btn-group[class*="col-"] {
            float: none;
            display: inline-block;
            margin-left: 0;
        }

        /* line 130, bootstrap-select.scss */
        .bootstrap-select.btn-group.dropdown-menu-right,
        .bootstrap-select.btn-group[class*="col-"].dropdown-menu-right,
        .row .bootstrap-select.btn-group[class*="col-"].dropdown-menu-right {
            float: right;
        }

        /* line 135, bootstrap-select.scss */
        .form-inline .bootstrap-select.btn-group,
        .form-horizontal .bootstrap-select.btn-group,
        .form-group .bootstrap-select.btn-group {
            margin-bottom: 0;
        }

        /* line 141, bootstrap-select.scss */
        .form-group-lg .bootstrap-select.btn-group.form-control,
        .form-group-sm .bootstrap-select.btn-group.form-control {
            padding: 0;
        }

        /* line 145, bootstrap-select.scss */
        .form-group-lg .bootstrap-select.btn-group.form-control .dropdown-toggle,
        .form-group-sm .bootstrap-select.btn-group.form-control .dropdown-toggle {
            height: 100%;
            font-size: inherit;
            line-height: inherit;
            border-radius: inherit;
        }

        /* line 155, bootstrap-select.scss */
        .form-inline .bootstrap-select.btn-group .form-control {
            width: 100%;
        }

        /* line 159, bootstrap-select.scss */
        .bootstrap-select.btn-group.disabled,
        .bootstrap-select.btn-group>.disabled {
            cursor: not-allowed;
        }

        /* line 163, bootstrap-select.scss */
        .bootstrap-select.btn-group.disabled:focus,
        .bootstrap-select.btn-group>.disabled:focus {
            outline: none !important;
        }

        /* line 168, bootstrap-select.scss */
        .bootstrap-select.btn-group.bs-container {
            position: absolute;
            height: 0 !important;
            padding: 0 !important;
        }

        /* line 173, bootstrap-select.scss */
        .bootstrap-select.btn-group.bs-container .dropdown-menu {
            z-index: 1060;
        }

        /* line 180, bootstrap-select.scss */
        .bootstrap-select.btn-group .dropdown-toggle .filter-option {
            display: inline-block;
            overflow: hidden;
            width: 100%;
            text-align: left;
        }

        /* line 187, bootstrap-select.scss */
        .bootstrap-select.btn-group .dropdown-toggle .caret {
            position: absolute;
            top: 50%;
            right: 12px;
            margin-top: -2px;
            vertical-align: middle;
        }

        /* line 196, bootstrap-select.scss */
        .bootstrap-select.btn-group[class*="col-"] .dropdown-toggle {
            width: 100%;
        }

        /* line 201, bootstrap-select.scss */
        .bootstrap-select.btn-group .dropdown-menu {
            min-width: 100%;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        /* line 205, bootstrap-select.scss */
        .bootstrap-select.btn-group .dropdown-menu.inner {
            display: block;
            position: static;
            float: none;
            border: 0;
            padding: 0;
            margin: 0;
            border-radius: 0;
            box-shadow: none;
        }

        /* line 216, bootstrap-select.scss */
        .bootstrap-select.btn-group .dropdown-menu a.dropdown-item {
            position: relative;
            cursor: pointer;
            user-select: none;
        }

        /* line 221, bootstrap-select.scss */
        .bootstrap-select.btn-group .dropdown-menu a.dropdown-item.active small {
            color: #fff;
        }

        /* line 225, bootstrap-select.scss */
        .bootstrap-select.btn-group .dropdown-menu a.dropdown-item.disabled a {
            cursor: not-allowed;
        }

        /* line 229, bootstrap-select.scss */
        .bootstrap-select.btn-group .dropdown-menu a.dropdown-item.hidden {
            display: none;
        }

        /* line 233, bootstrap-select.scss */
        .bootstrap-select.btn-group .dropdown-menu a.dropdown-item span.dropdown-item-inner {
            display: block;
        }

        /* line 236, bootstrap-select.scss */
        .bootstrap-select.btn-group .dropdown-menu a.dropdown-item span.dropdown-item-inner.opt {
            position: relative;
            padding-left: 2.25em;
        }

        /* line 241, bootstrap-select.scss */
        .bootstrap-select.btn-group .dropdown-menu a.dropdown-item span.dropdown-item-inner span.check-mark {
            display: none;
        }

        /* line 245, bootstrap-select.scss */
        .bootstrap-select.btn-group .dropdown-menu a.dropdown-item span.dropdown-item-inner span.text {
            display: inline-block;
        }

        /* line 250, bootstrap-select.scss */
        .bootstrap-select.btn-group .dropdown-menu a.dropdown-item small {
            padding-left: 0.5em;
        }

        /* line 257, bootstrap-select.scss */
        .bootstrap-select.btn-group .dropdown-menu .dropdown-item .span.check-mark {
            display: none;
        }

        /* line 261, bootstrap-select.scss */
        .bootstrap-select.btn-group .dropdown-menu .dropdown-item .span.text {
            display: inline-block;
        }

        /* line 266, bootstrap-select.scss */
        .bootstrap-select.btn-group .dropdown-menu .notify {
            position: absolute;
            bottom: 5px;
            width: 96%;
            margin: 0 2%;
            min-height: 26px;
            padding: 3px 5px;
            background: whitesmoke;
            border: 1px solid #e3e3e3;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
            pointer-events: none;
            opacity: 0.9;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        /* line 282, bootstrap-select.scss */
        .bootstrap-select.btn-group .no-results {
            padding: 3px;
            background: #f5f5f5;
            margin: 0 5px;
            white-space: nowrap;
        }

        /* line 290, bootstrap-select.scss */
        .bootstrap-select.btn-group.fit-width .dropdown-toggle .filter-option {
            position: static;
        }

        /* line 294, bootstrap-select.scss */
        .bootstrap-select.btn-group.fit-width .dropdown-toggle .caret {
            position: static;
            top: auto;
            margin-top: -1px;
        }

        /* line 302, bootstrap-select.scss */
        .bootstrap-select.btn-group.show-tick .dropdown-menu a.selected span.dropdown-item-inner span.check-mark {
            position: absolute;
            display: inline-block;
            right: 15px;
            margin-top: 5px;
        }

        /* line 309, bootstrap-select.scss */
        .bootstrap-select.btn-group.show-tick .dropdown-menu a a span.text {
            margin-right: 34px;
        }

        /* line 316, bootstrap-select.scss */
        .bootstrap-select.show-menu-arrow.open>.dropdown-toggle {
            z-index: 1061;
        }

        /* line 321, bootstrap-select.scss */
        .bootstrap-select.show-menu-arrow .dropdown-toggle:before {
            content: '';
            border-left: 7px solid transparent;
            border-right: 7px solid transparent;
            border-bottom: 7px solid rgba(204, 204, 204, 0.2);
            position: absolute;
            bottom: -4px;
            left: 9px;
            display: none;
        }

        /* line 332, bootstrap-select.scss */
        .bootstrap-select.show-menu-arrow .dropdown-toggle:after {
            content: '';
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            border-bottom: 6px solid white;
            position: absolute;
            bottom: -4px;
            left: 10px;
            display: none;
        }

        /* line 345, bootstrap-select.scss */
        .bootstrap-select.show-menu-arrow.dropup .dropdown-toggle:before {
            bottom: auto;
            top: -3px;
            border-top: 7px solid rgba(204, 204, 204, 0.2);
            border-bottom: 0;
        }

        /* line 352, bootstrap-select.scss */
        .bootstrap-select.show-menu-arrow.dropup .dropdown-toggle:after {
            bottom: auto;
            top: -3px;
            border-top: 6px solid white;
            border-bottom: 0;
        }

        /* line 361, bootstrap-select.scss */
        .bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle:before {
            right: 12px;
            left: auto;
        }

        /* line 366, bootstrap-select.scss */
        .bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle:after {
            right: 13px;
            left: auto;
        }

        /* line 373, bootstrap-select.scss */
        .bootstrap-select.show-menu-arrow.open>.dropdown-toggle:before,
        .bootstrap-select.show-menu-arrow.open>.dropdown-toggle:after {
            display: block;
        }

        /* line 380, bootstrap-select.scss */
        .bs-searchbox,
        .bs-actionsbox,
        .bs-donebutton {
            padding: 4px 8px;
        }

        /* line 386, bootstrap-select.scss */
        .bs-actionsbox {
            width: 100%;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        /* line 390, bootstrap-select.scss */
        .bs-actionsbox .btn-group button {
            width: 50%;
        }

        /* line 395, bootstrap-select.scss */
        .bs-donebutton {
            float: left;
            width: 100%;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        /* line 400, bootstrap-select.scss */
        .bs-donebutton .btn-group button {
            width: 100%;
        }

        /* line 406, bootstrap-select.scss */
        .bs-searchbox+.bs-actionsbox {
            padding: 0 8px 4px;
        }

        /* line 410, bootstrap-select.scss */
        .bs-searchbox .form-control {
            margin-bottom: 0;
            width: 100%;
            float: none;
        }

        /* line 417, bootstrap-select.scss */
        .input-group .bs-searchbox .form-control {
            width: 100%;
        }
    </style>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kadwa:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --head-font: "Kadwa";
            --body-font: "Poppins";
        }

        .bg-primary {
            background-color: #6633db;
        }

        .text-primary {
            color: #6633db;
        }

        .border-primary {
            border-color: #6633db;
        }

        .bg-secondary {
            background-color: #c1dc78;
        }

        .text-secondary {
            color: #c1dc78;
        }

        .border-secondary {
            border-color: #c1dc78;
        }

        .bg-tertiary {
            background-color: #d2ab3e;
        }

        .text-tertiary {
            color: #d2ab3e;
        }

        .border-tertiary {
            border-color: #d2ab3e;
        }

        input:checked~.toggle-path {
            background-color: #6633db;
        }
    </style>
    <style>
        #span-3 {
            color: #6633db;
            white-space: nowrap;
            justify-content: center;
            border-radius: 20px;
            background-color: #1e1e1e;
            padding: 21px 50px;
            font: 700 16px Inter, sans-serif;
        }

        #div-2 {
            white-space: nowrap;
            justify-content: center;
            color: #6633db;
            border-radius: 20px;
            padding: 21px 50px;
            font: 700 16px Inter, sans-serif;
        }

        #myDiv3 {
            display: none;
        }
    </style>
</head>

<body>
    <div class="default-theme">


        <!DOCTYPE html>
        <html wire:id="KYyr7BXHmAukicbrQqma"
            wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;KYyr7BXHmAukicbrQqma&quot;,&quot;name&quot;:&quot;frontend.home&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;\/&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;295eff0e&quot;,&quot;data&quot;:{&quot;numbers&quot;:[],&quot;features&quot;:[],&quot;sections&quot;:[],&quot;assigned&quot;:[],&quot;user&quot;:[],&quot;orders&quot;:[],&quot;filters&quot;:{&quot;number&quot;:{&quot;country&quot;:[]},&quot;private&quot;:{&quot;country&quot;:[]},&quot;rented&quot;:{&quot;country&quot;:[]}},&quot;private&quot;:[],&quot;rented&quot;:[],&quot;types&quot;:[&quot;Open&quot;,&quot;Register Only&quot;,&quot;Private&quot;,&quot;Shared Buy&quot;,&quot;Private Buy&quot;],&quot;bg&quot;:[&quot;bg-gray-200&quot;,&quot;bg-lime-200&quot;,&quot;bg-red-200&quot;,&quot;bg-purple-200&quot;,&quot;bg-pink-200&quot;],&quot;text&quot;:[&quot;text-gray-800&quot;,&quot;text-lime-800&quot;,&quot;text-red-800&quot;,&quot;text-purple-800&quot;,&quot;text-pink-800&quot;]},&quot;dataMeta&quot;:{&quot;modelCollections&quot;:{&quot;numbers&quot;:{&quot;class&quot;:null,&quot;id&quot;:[],&quot;relations&quot;:[],&quot;connection&quot;:null,&quot;collectionClass&quot;:null},&quot;features&quot;:{&quot;class&quot;:&quot;App\\Models\\Feature&quot;,&quot;id&quot;:[1,2,3],&quot;relations&quot;:[],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null},&quot;sections&quot;:{&quot;class&quot;:&quot;App\\Models\\Section&quot;,&quot;id&quot;:[1,2],&quot;relations&quot;:[],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null},&quot;assigned&quot;:{&quot;class&quot;:null,&quot;id&quot;:[],&quot;relations&quot;:[],&quot;connection&quot;:null,&quot;collectionClass&quot;:null},&quot;orders&quot;:{&quot;class&quot;:null,&quot;id&quot;:[],&quot;relations&quot;:[],&quot;connection&quot;:null,&quot;collectionClass&quot;:null}},&quot;models&quot;:{&quot;user&quot;:{&quot;class&quot;:&quot;App\\Models\\User&quot;,&quot;id&quot;:7,&quot;relations&quot;:[],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null}},&quot;collections&quot;:[&quot;private&quot;,&quot;rented&quot;]},&quot;checksum&quot;:&quot;cf962efb8d221e5ebe86618f48f0f85d335196fa78ebeb696ca9cf0e7856a18d&quot;}}"
            lang="en">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description"
                content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
            <meta name="keywords"
                content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
            <meta name="author" content="elemis">
            <title>Verify Asap | SMS Verification Website.</title>
            <link rel="shortcut icon" href="{{url('')}}/public/assets/img/favicon.png">
            <link rel="stylesheet" href="{{url('')}}/public/assets/css/plugins.css">
            <link rel="stylesheet" href="{{url('')}}/public/assets/css/style.css">
            <link rel="preload" href="{{url('')}}/public/assets/css/fonts/space.css" as="style"
                onload="this.rel='stylesheet'">
        </head>

        <body>

            
    <div class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="index.html">
                    <img src="{{url('')}}/public/assets/storage/images/logo.png" alt="logo">
                </a>
            </div>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif
            @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
            @endif

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

                <form method="POST" action="register_now">
                    @csrf


                    <h1 class="mt-4 mb-5 text-center"> Create an account </h1>
                    <div>
                        <label class="block font-medium text-sm text-gray-700" for="email">
                            Username
                        </label>
                        <input
                            class="border-gray-300 focus:border-primary focus:ring-1 focus:ring-primary focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
                            id="username" type="text" name="username" required="required" autofocus="autofocus">
                    </div>


                    <div>
                        <label class="block font-medium text-sm text-gray-700" for="email">
                            Email
                        </label>
                        <input
                            class="border-gray-300 focus:border-primary focus:ring-1 focus:ring-primary focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
                            id="email" type="email" name="email" required="required" autofocus="autofocus">
                    </div>

                    <div class="mt-4">
                        <label class="block font-medium text-sm text-gray-700" for="password">
                            Password
                        </label>
                        <input
                            class="border-gray-300 focus:border-primary focus:ring-1 focus:ring-primary focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
                            id="password" type="password" name="password" required="required"
                            autocomplete="current-password">
                    </div>

                    <div class="mt-4">
                        <label class="block font-medium text-sm text-gray-700" for="password">
                            Confirm Password
                        </label>
                        <input
                            class="border-gray-300 focus:border-primary focus:ring-1 focus:ring-primary focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
                            id="password" type="password" name="password_confirmation" required="required"
                            autocomplete="current-password">
                    </div>


                    <div class="flex items-center justify-end mt-4">

                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-4">
                            Register
                        </button>
                    </div>




                </form>




            </div>

            <a class="underline text-sm text-gray-600 hover:text-gray-900 mt-3" href="login">
                Already had an account Login?
            </a>

        </div>
    </div>
</body>

</html>
