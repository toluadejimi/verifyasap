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
            <div class="default-theme">



                <div style="color:#3f78e0; font-weight:bold;" class="flex justify-end text-white">
                    <a style="color:white;" href="fund-wallet" class="flex flex-col bg-primary rounded-b-lg px-5 py-2">
                        <span style="color:white;" class="text-xs font-medium">Wallet</span>
                        <span style="color:white;" class="text-xl">NGN{{ number_format(Auth::user()->wallet, 2)
                            }}</span>
                    </a>
                </div>



                <div wire:id="k3avItmW0YN9EgcVBf0J"
                    wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;k3avItmW0YN9EgcVBf0J&quot;,&quot;name&quot;:&quot;frontend.wallet&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;wallet&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[&quot;cancelOrder&quot;],&quot;path&quot;:&quot;https:\/\/verifyasap.com\/wallet&quot;},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;72bb1150&quot;,&quot;data&quot;:{&quot;amount&quot;:5,&quot;methods&quot;:[],&quot;selected&quot;:null,&quot;crypto&quot;:null,&quot;error&quot;:null,&quot;total&quot;:2,&quot;razorpay&quot;:null,&quot;page&quot;:1,&quot;paginators&quot;:{&quot;page&quot;:1}},&quot;dataMeta&quot;:{&quot;modelCollections&quot;:{&quot;methods&quot;:{&quot;class&quot;:&quot;App\\Models\\PaymentMethod&quot;,&quot;id&quot;:[5],&quot;relations&quot;:[],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null}}},&quot;checksum&quot;:&quot;e06f40890a224cc82793e013b7c726c2f372e57ddfbe3fab752c8a90a4d5fb44&quot;}}"
                    class="bg-white flex max-w-[480px] w-full flex-col mx-auto px-11 py-12">

                    <div class="text-center">
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
                    </div>


                    <a href="{{url('')}}/public/assets/"
                        class="aspect-[3.35] object-contain object-center w-[201px] overflow-hidden self-center max-w-full mt-2">
                        <img loading="lazy" srcset="https://i.postimg.cc/T18SnGvp/logo.png"
                            class="aspect-[3.35] object-contain object-center w-[201px] overflow-hidden self-center max-w-full mt-2" />
                    </a>





                    <div class="text-stone-900 text-xl font-bold self-center whitespace-nowrap mt-10">
                        Resolve Deposit
                    </div>



                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex flex-wrap justify-content-center px-0">
                            <div class="card-body p-5">

                                <form action="resolve-now" method="POST">
                                    @csrf

                                    <p> Resolve pending transactions by using your bank session ID / Refrence No on your
                                        transaction recepit
                                    <p>

                                    <h6>{{$ref}}</h6>

                                    <label class="my-3">Select Bank</label>
                                    <select class="form-control" required name="bank_type">
                                        <option value="">Select option</option>
                                        <option value="opay">OPAY</option>
                                        <option value="palmpay">PALMPAY</option>
                                        <option value="providus">PROVIDUS</option>
                                    </select>

                                    <label class="my-3">Enter Session ID or Reference</label>
                                    <div>
                                        <input type="text" name="session_id" required
                                               class="form-control p-2 text-dark mb-3" placeholder="Enter session ID or Reference">
                                        <small class="text-danger my-2">If transaction is from OPAY OR PALMPAY use the 3 letter generated as reference</small>
                                        <input hidden type="text" name="trx_ref"
                                               value="{{ $ref }}" required class="">

                                    </div>


                                    <button type="submit"
                                            style="background: linear-gradient(279deg, #FF0B9E -6.58%, #FF6501 121.69%); color: white;"
                                            class="btn text-start w-100 btn-rounded my-3">

                                        <svg class="cart me-4" width="16" height="16" viewBox="0 0 18 18" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.5158 2.01275C17.9478 0.81775 16.7898 -0.34025 15.5948 0.0927503L0.989804 5.37475C-0.209196 5.80875 -0.354196 7.44475 0.748804 8.08375L5.4108 10.7828L9.5738 6.61975C9.76241 6.43759 10.015 6.3368 10.2772 6.33908C10.5394 6.34135 10.7902 6.44652 10.9756 6.63193C11.161 6.81734 11.2662 7.06815 11.2685 7.33035C11.2708 7.59255 11.17 7.84515 10.9878 8.03375L6.8248 12.1968L9.5248 16.8587C10.1628 17.9617 11.7988 17.8158 12.2328 16.6178L17.5158 2.01275Z"
                                                fill="white"/>
                                        </svg>

                                        CONTINUE
                                    </button>


                                </form>

                            </div>
                    </ul>






                </div>




                <script>
                    var showButton = document.getElementById('span-3');
    var hideButton = document.getElementById('div-2');
    var myDiv = document.getElementById('myDiv');
    var myDiv2 = document.getElementById('myDiv3');



    showButton.addEventListener('click', function() {
      myDiv.style.display = 'block';
       myDiv2.style.display = 'none';
    });

    hideButton.addEventListener('click', function() {
      myDiv.style.display = 'none';
       myDiv2.style.display = 'block';
    });
    // JavaScript function to handle button clicks and color change
    function activateButton(button) {
      // Reset styles for both buttons
      document.getElementById('span-3').style.backgroundColor = 'white';

      document.getElementById('div-2').style.backgroundColor = 'white';

      // Change the color of the clicked button
      button.style.backgroundColor = '#1e1e1e'; // Red, change to the desired color
    }
                </script>
                </main>
            </div>
    </div>
    <!-- Livewire Component wire-end:k3avItmW0YN9EgcVBf0J -->
    </div>
    </div>
    <script src="/livewire/livewire.js?id=90730a3b0e7144480175" data-turbo-eval="false" data-turbolinks-eval="false">
    </script>
    <script data-turbo-eval="false" data-turbolinks-eval="false">
        window.livewire = new Livewire();window.Livewire = window.livewire;window.livewire_app_url = '';window.livewire_token = 'toMly90uEuHnJFQfBy9mkwUSirMwxb5rT5FLfcbg';window.deferLoadingAlpine = function (callback) {window.addEventListener('livewire:load', function () {callback();});};let started = false;window.addEventListener('alpine:initializing', function () {if (! started) {window.livewire.start();started = true;}});document.addEventListener("DOMContentLoaded", function () {if (! started) {window.livewire.start();started = true;}});
    </script>


</body>

</html>
