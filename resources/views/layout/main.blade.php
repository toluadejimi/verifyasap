<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Metas -->
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <title>Verify Asap</title>
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{url('')}}/public/assets/assets/app/icons/icon-96x96.png"/>
    <link rel="apple-touch-icon-precomposed" href="{{url('')}}/public/assets/assets/app/icons/icon-96x96.png"/>
    <!-- Font -->
    <link rel="stylesheet" href="{{url('')}}/public/assets/assets/fonts/fonts.css"/>
    <!-- Icons -->
    <link rel="stylesheet" href="{{url('')}}/public/assets/assets/fonts/icons-alipay.css">
    <link rel="stylesheet" href="{{url('')}}/public/assets/assets/styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{url('')}}/public/assets/assets/styles/styles.css"/>
    <link rel="manifest" href="{{url('')}}/public/assets/assets/manifest.json"
          data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="192x192" href="{{url('')}}/public/assets/assets/app/icons/icon-192x192.png">


    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }


        @keyframes pulseAnim {
            0% {
                transform: scale(1);
                opacity: 0.7
            }
            50% {
                transform: scale(1.2);
                opacity: 0.4
            }
            100% {
                transform: scale(1);
                opacity: 0.7
            }
        }

        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #6610f2;

            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            /*  box-shadow: 2px 2px 3px #999; */
            z-index: 100;


        }

        .pulse {
            z-index: 0;
            position: fixed;
            content: '';
            bottom: 35px;
            right: 35px;
            width: 70px;
            height: 70px;
            border-radius: 100%;
            background-color: #6610f2;
            animation-name: pulseAnim;
            animation-duration: 3s;
            animation-iteration-count: infinite;
        }

        .my-float {
            margin-top: 16px;

        }


        /* Styles for lazy loader */
        .loader2 {
            border: 8px solid #f3f3f3; /* Light grey */
            border-top: 8px solid #3498db; /* Blue */
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
            margin: 20px auto; /* Center loader */
            display: none; /* Initially hidden */
        }


        .loaderpsb {
            border: 8px solid #f3f3f3; /* Light grey */
            border-top: 8px solid #3498db; /* Blue */
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
            margin: 20px auto; /* Center loader */
            display: none; /* Initially hidden */
        }

        .loaderwema {
            border: 8px solid #f3f3f3; /* Light grey */
            border-top: 8px solid #3498db; /* Blue */
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
            margin: 20px auto; /* Center loader */
            display: none; /* Initially hidden */
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }


        .search-container {
            position: relative;
            display: inline-block;
        }

        .search-box {
            width: 300px;
            top: 10px
            padding: 10px;
            font-size: 16px;
            box-sizing: border-box;
        }

        .dropdown {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            width: 100%;
            box-sizing: border-box;
            margin-top: 70px;
        }

        .dropdown .item {
            padding: 10px;
            cursor: pointer;
            border-bottom: 1px solid #ddd;
        }

        .dropdown .item:hover {
            background-color: #ddd;
        }
    </style>

    <style>

        /* CSS Document */

        @import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900|Rubik:300,400,500,700,900');

        /*********************************
        2. Body and some general stuff
        *********************************/

        * {
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
            text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
        }

        body {
            font-family: 'Rubik', sans-serif;
            font-size: 14px;
            font-weight: 400;
            background: #FFFFFF;
            color: #000000;
        }

        div {
            display: block;
            position: relative;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        ul {
            list-style: none;
            margin-bottom: 0px;
        }

        p {
            font-family: 'Rubik', sans-serif;
            font-size: 14px;
            line-height: 1.7;
            font-weight: 400;
            color: #828282;
            -webkit-font-smoothing: antialiased;
            -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
            text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
        }

        p a {
            display: inline;
            position: relative;
            color: inherit;
            border-bottom: solid 1px #ffa07f;
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease;
        }

        a, a:hover, a:visited, a:active, a:link {
            text-decoration: none;
            -webkit-font-smoothing: antialiased;
            -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
            text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
        }

        p a:active {
            position: relative;
            color: #FF6347;
        }

        p a:hover {
            color: #FFFFFF;
            background: #ffa07f;
        }

        p a:hover::after {
            opacity: 0.2;
        }

        ::selection {

        }

        p::selection {

        }

        h1 {
            font-size: 48px;
        }

        h2 {
            font-size: 36px;
        }

        h3 {
            font-size: 24px;
        }

        h4 {
            font-size: 18px;
        }

        h5 {
            font-size: 14px;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Rubik', sans-serif;
            font-weight: 500;
            -webkit-font-smoothing: antialiased;
            -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
            text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
        }

        h1::selection,
        h2::selection,
        h3::selection,
        h4::selection,
        h5::selection,
        h6::selection {

        }

        .form-control {
            color: #db5246;
        }

        section {
            display: block;
            position: relative;
            box-sizing: border-box;
        }

        .clear {
            clear: both;
        }

        .clearfix::before, .clearfix::after {
            content: "";
            display: table;
        }

        .clearfix::after {
            clear: both;
        }

        .clearfix {
            zoom: 1;
        }

        .float_left {
            float: left;
        }

        .float_right {
            float: right;
        }

        .trans_200 {
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease;
        }

        .trans_300 {
            -webkit-transition: all 300ms ease;
            -moz-transition: all 300ms ease;
            -ms-transition: all 300ms ease;
            -o-transition: all 300ms ease;
            transition: all 300ms ease;
        }

        .trans_400 {
            -webkit-transition: all 400ms ease;
            -moz-transition: all 400ms ease;
            -ms-transition: all 400ms ease;
            -o-transition: all 400ms ease;
            transition: all 400ms ease;
        }

        .trans_500 {
            -webkit-transition: all 500ms ease;
            -moz-transition: all 500ms ease;
            -ms-transition: all 500ms ease;
            -o-transition: all 500ms ease;
            transition: all 500ms ease;
        }

        .fill_height {
            height: 100%;
        }

        .super_container {
            width: 100%;
            overflow: hidden;
        }

        .prlx_parent {
            overflow: hidden;
        }

        .prlx {
            height: 130% !important;
        }

        .nopadding {
            padding: 0px !important;
        }

        .button {
            display: inline-block;
            background: #4079E0;
            border-radius: 5px;
            height: 38px;
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease;
        }

        .button a {
            display: block;
            font-size: 18px;
            font-weight: 400;
            line-height: 48px;
            color: #FFFFFF;
            padding-left: 35px;
            padding-right: 35px;
        }

        .button:hover {
            opacity: 0.8;
        }

        /*********************************
        3. Header
        *********************************/

        .header {
            position: relative;
            width: 100%;
            z-index: 10;
        }

        /*********************************
        3.1 Top Bar
        *********************************/

        .top_bar {
            width: 100%;
            height: 56px;
            background: #fafafa;
            border-bottom: solid 1px rgba(0, 0, 0, 0.05);
            z-index: 2;
        }

        .header.scrolled .top_bar {
            display: none;
        }

        .top_bar_contact {
            display: inline-block;
        }

        .top_bar_contact_item {
            font-size: 16px;
            font-weight: 300;
            line-height: 56px;
            margin-right: 40px;
        }

        .top_bar_contact_item:not(:first-child) {
            margin-right: 0px;
        }

        .top_bar_contact_item a {
            font-size: 16px;
            font-weight: 300;
            line-height: 56px;
            color: #000;
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease;
        }

        .top_bar_contact_item a:hover {
            color: #8a8a8a;
        }

        .top_bar_contact_item:last-child {
            margin-right: 0px;
        }

        .top_bar_icon {
            display: inline-block;
            margin-right: 14px;
            -webkit-transform: translateY(-2px);
            -moz-transform: translateY(-2px);
            -ms-transform: translateY(-2px);
            -o-transform: translateY(-2px);
            transform: translateY(-2px);
        }

        .top_bar_menu {
            display: inline-block;
        }

        .top_bar_dropdown li {
            padding-left: 13px;
            padding-right: 13px;
        }

        .standard_dropdown li {
            display: inline-block;
            position: relative;
            height: 56px;
        }

        .standard_dropdown li li {
            display: block;
            width: 100%;
        }

        .standard_dropdown li li a {
            display: block;
            width: 100%;
            border-bottom: solid 1px #f2f2f2;
            font-size: 16px;
        }

        .standard_dropdown li:last-child a {
            border-bottom: none;
        }

        .standard_dropdown li.hassubs > a i {
            display: inline-block;
            margin-left: 5px;
        }

        .standard_dropdown li a {
            display: block;
            position: relative;
            font-size: 16px;
            font-weight: 300;
            color: #000000;
            line-height: 56px;
            white-space: nowrap;
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease;
        }

        .standard_dropdown li a:hover {
            color: #0e8ce4;
        }

        .standard_dropdown li a i {
            display: none;
            -webkit-transform: translateY(-1px);
            -moz-transform: translateY(-1px);
            -ms-transform: translateY(-1px);
            -o-transform: translateY(-1px);
            transform: translateY(-1px);
            font-size: 12px;
        }

        .standard_dropdown li ul {
            display: block;
            position: absolute;
            top: 120%;
            left: 0;
            width: auto;
            visibility: hidden;
            opacity: 0;
            background: #FFFFFF;
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.1);
            -webkit-transition: opacity 0.3s ease;
            -moz-transition: opacity 0.3s ease;
            -ms-transition: opacity 0.3s ease;
            -o-transition: opacity 0.3s ease;
            transition: all 0.3s ease;
            z-index: 1;
        }

        .standard_dropdown li:hover > ul {
            top: 100%;
            visibility: visible;
            opacity: 1;
        }

        .standard_dropdown ul ul {
            left: 100%;
            top: 0 !important;
        }

        .top_bar_user {
            display: inline-block;
            margin-left: 35px;
        }

        .user_icon {
            display: inline-block;
            margin-right: 7px;
            -webkit-transform: translateY(-2px);
            -moz-transform: translateY(-2px);
            -ms-transform: translateY(-2px);
            -o-transform: translateY(-2px);
            transform: translateY(-2px);
            width: 15px;
        }

        .user_icon img {
            width: 100%;
        }

        .top_bar_user div {
            display: inline-block;
        }

        .top_bar_user div:nth-child(2) {
            margin-right: 21px;
        }

        .top_bar_user div:nth-child(2)::after {
            display: block;
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            right: -13px;
            width: 1px;
            height: 17px;
            background: rgba(0, 0, 0, 0.1);
            content: '';
        }

        .top_bar_user a {
            font-size: 16px;
            font-weight: 300;
            line-height: 56px;
            color: #000;
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease;
        }

        .top_bar_user a:hover {
            color: #8a8a8a;
        }

        /*********************************
        3.2 Header Main
        *********************************/

        .header_main {
            z-index: 1;
        }

        .header.scrolled .header_main {
            display: none;
        }

        .header_main_item {
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .logo_container {
            height: 80px;
        }

        .logo {
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .logo a {
            font-size: 36px;
            font-weight: 500;
            color: #0e8ce4;
        }

        .header_search {
            height: 90px;
        }

        .header_search_content {
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .header_search_form_container {
            width: 100%;
            height: 50px;
            border: solid 1px #e5e5e5;
            border-radius: 5px;
        }

        .header_search_form {
            width: 100%;
            height: 100%;
        }

        .header_search_input {
            display: block;
            position: relative;
            width: calc((100% - 50px) * 0.601);
            height: 100%;
            line-height: 50px;
            border: none !important;
            outline: none !important;
            padding-left: 26px;
            color: #7f7f7f;
            float: left;
        }

        .header_search_input::-webkit-input-placeholder {
            font-size: 16px !important;
            font-weight: 300;
            line-height: 50px;
            color: #a3a3a3 !important;
        }

        .header_search_input:-moz-placeholder /* older Firefox*/
        {
            font-size: 16px !important;
            font-weight: 300;
            line-height: 50px;
            color: #a3a3a3 !important;
        }

        .header_search_input::-moz-placeholder /* Firefox 19+ */
        {
            font-size: 16px !important;
            font-weight: 300;
            line-height: 50px;
            color: #a3a3a3 !important;
        }

        .header_search_input:-ms-input-placeholder {
            font-size: 16px !important;
            font-weight: 300;
            line-height: 50px;
            color: #a3a3a3 !important;
        }

        .header_search_input::input-placeholder {
            font-size: 16px !important;
            font-weight: 300;
            line-height: 50px;
            color: #a3a3a3 !important;
        }

        .custom_dropdown {
            width: calc((100% - 50px) * 0.399);
            height: 50px;
            float: left;
            padding-left: 26px;
        }

        .custom_dropdown::before {
            display: block;
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            left: 0;
            width: 1px;
            height: 28px;
            background: #e5e5e5;
            content: '';
        }

        .custom_dropdown_list i {
            display: inline-block;
            color: #a3a3a3;
            font-size: 10px;
            margin-left: 3px;
            -webkit-transform: translateY(-1px);
            -moz-transform: translateY(-1px);
            -ms-transform: translateY(-1px);
            -o-transform: translateY(-1px);
            transform: translateY(-1px);
        }

        .custom_dropdown_placeholder {
            display: inline-block;
            font-size: 16px;
            font-weight: 300;
            color: #a3a3a3;
            line-height: 48px;
            cursor: pointer;
        }

        .custom_dropdown_placeholder i {

        }

        .custom_list {
            text-align: left;
            position: absolute;
            padding: 0;
            top: 75px;
            left: -15px;
            visibility: hidden;
            opacity: 0;
            box-shadow: 0 0 25px rgba(63, 78, 100, 0.15);
            -webkit-transition: opacity 0.2s ease;
            -moz-transition: opacity 0.2s ease;
            -ms-transition: opacity 0.2s ease;
            -o-transition: opacity 0.2s ease;
            transition: all 0.2s ease;
        }

        .custom_list.active {
            visibility: visible;
            opacity: 1;
            top: 50px;
            box-shadow: 0 0 25px rgba(63, 78, 100, 0.15);
            -webkit-transition: opacity 0.3s ease;
            -moz-transition: opacity 0.3s ease;
            -ms-transition: opacity 0.3s ease;
            -o-transition: opacity 0.3s ease;
            transition: all 0.3s ease;
        }

        .custom_list li {
            height: 35px;
            padding-left: 15px;
            padding-right: 15px;
            background: #FFFFFF;
        }

        .custom_list li a {
            display: block;
            color: #a3a3a3;
            line-height: 35px;
            border-bottom: solid 1px #ededed;
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease;
        }

        .custom_list li a:hover {
            color: #0e8ce4;
        }

        select {
            display: inline;
            border: 0;
            width: auto;
            margin-left: 10px;
            outline: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            border-bottom: 2px solid #555;
            color: #7b00ff;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }

        select:hover {
            cursor: pointer;
        }

        select option {
            border: 0;
            border-bottom: 1px solid #555;
            padding: 10px;
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        .header_search_button {
            position: absolute;
            top: 0;
            right: 0;
            width: 50px;
            height: 100%;
            background: #0e8ce4;
            border: none;
            outline: none;
            cursor: pointer;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        .wishlist_cart {
            height: 90px;
        }

        .wishlist {
            margin-right: 50px;
        }

        .wishlist_icon img {
            width: 100%;
        }

        .wishlist_content {
            margin-left: 14px;
        }

        .wishlist_text a {
            font-size: 18px;
            font-weight: 400;
            color: #000000;
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease;
        }

        .wishlist_text a:hover {
            color: #0e8ce4;
        }

        .wishlist_count {
            margin-top: -2px;
            color: #a3a3a3;
            font-size: 14px;
        }

        .cart_count {
            position: absolute;
            bottom: -1px;
            right: -14px;
            width: 23px;
            height: 23px;
            background: #0e8ce4;
            border-radius: 50%;
            text-align: center;
        }

        .cart_count span {
            display: block;
            line-height: 23px;
            font-size: 12px;
            color: #FFFFFF;
            -webkit-transform: translateY(1px);
            -moz-transform: translateY(1px);
            -ms-transform: translateY(1px);
            -o-transform: translateY(1px);
            transform: translateY(1px);
        }

        .cart_icon img {
            width: 100%;
        }

        .cart_content {
            margin-left: 28px;
        }

        .cart_text a {
            font-size: 18px;
            font-weight: 400;
            color: #000000;
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease;
        }

        .cart_text a:hover {
            color: #0e8ce4;
        }

        .cart_price {
            font-size: 14px;
            color: #a3a3a3;
            margin-top: -2px;
        }

        /*********************************
        3.3 Main Navigation
        *********************************/

        .main_nav {
            width: 100%;
            border-top: solid 1px #f2f2f2;
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.1);
            background: #FFFFFF;
        }

        .header.scrolled .main_nav {
            position: fixed;
            top: 0;
            left: 0;
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease;
        }

        .main_nav_content {
            width: 100%;
            height: 55px;
        }

        .cat_menu_container {
            width: 293px;
            height: 100%;
            background: #0e8ce4;
            padding-left: 35px;
            cursor: pointer;
            z-index: 1;
        }

        .cat_menu_title {
            height: 100%;
        }

        .cat_burger {
            width: 18px;
            height: 14px;
        }

        .cat_burger span {
            display: block;
            position: absolute;
            left: 0;
            width: 100%;
            height: 2px;
            background: #FFFFFF;
        }

        .cat_burger span:nth-child(2) {
            top: 6px;
        }

        .cat_burger span:nth-child(3) {
            top: 12px;
        }

        .cat_menu_text {
            font-size: 18px;
            font-weight: 400;
            color: #FFFFFF;
            text-transform: uppercase;
            margin-left: 20px;
        }

        .cat_menu_container ul {
            display: block;
            position: absolute;
            top: 100%;
            left: 0;
            /*visibility: hidden;
            opacity: 0;*/
            min-width: 100%;
            background: #FFFFFF;
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.1);
            -webkit-transition: opacity 0.3s ease;
            -moz-transition: opacity 0.3s ease;
            -ms-transition: opacity 0.3s ease;
            -o-transition: opacity 0.3s ease;
            transition: all 0.3s ease;
        }

        .cat_menu_container > ul {
            padding-top: 13px;
        }

        .cat_menu_container:hover .cat_menu {
            visibility: visible;
            opacity: 1;
        }

        .cat_menu li {
            display: block;
            position: relative;
            width: auto;
            height: 46px;
            border-bottom: solid 1px #f2f2f2;
            padding-left: 35px;
            padding-right: 30px;
            white-space: nowrap;
        }

        .cat_menu li.hassubs > a i {
            display: block;
        }

        .cat_menu li a {
            display: block;
            position: relative;
            font-size: 16px;
            font-weight: 300;
            color: #000000;
            line-height: 46px;
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease;
        }

        .cat_menu li a:hover {
            color: #0e8ce4;
        }

        .cat_menu li a i {
            display: none;
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            right: 0;
            font-size: 12px;
        }

        .cat_menu li ul {
            display: block;
            position: absolute;
            top: 35px;
            left: 100%;
            visibility: hidden;
            opacity: 0;
            width: 100%;
            background: #FFFFFF;
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.1);
        }

        .cat_menu li:hover > ul {
            top: 0;
            visibility: visible;
            opacity: 1;
        }

        .main_nav_dropdown li {
            margin-right: 35px;
        }

        .main_nav_dropdown li:last-child {
            margin-right: 0px;
        }

        .main_nav_dropdown li a {
            font-size: 18px;
            font-weight: 400;
            color: #a19a9a;
            line-height: 60px;
        }

        .main_nav_dropdown li li {
            padding-left: 15px;
            padding-right: 15px;
            margin-right: 0px;
        }

        .menu_trigger_container {
            display: none;
            width: auto;
            height: 100%;
            padding-right: 25px;
            padding-left: 25px;
            cursor: pointer;
        }

        .menu_trigger {
            height: 100%;
        }

        .menu_burger_inner {
            display: inline-block;
        }

        .menu_trigger_text {
            display: inline-block;
            font-size: 18px;
            font-weight: 400;
            color: #FFFFFF;
            text-transform: uppercase;
            margin-right: 16px;
        }

        /*********************************
        3.4 Page Menu
        *********************************/

        .page_menu {
            margin-top: 15px;
            -webkit-transition: all 500ms ease;
            -moz-transition: all 500ms ease;
            -ms-transition: all 500ms ease;
            -o-transition: all 500ms ease;
            transition: all 500ms ease;
        }

        .page_menu_content {
            height: 0px;
            background: #0e8ce4;
            padding-left: 15px;
            padding-right: 15px;
            overflow: hidden;
        }

        .page_menu_search {
            display: none;
            width: 100%;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .page_menu_search_input {
            width: 100%;
            height: 40px;
            background: #FFFFFF;
            border: none;
            outline: none;
            padding-left: 25px;
        }

        .page_menu_item {
            display: block;
            position: relative;
            border-bottom: solid 1px rgba(255, 255, 255, 0.1);
            vertical-align: middle;
        }

        .page_menu_item > a {
            display: block;
            color: #FFFFFF;
            font-weight: 500;
            height: 50px;
            line-height: 50px;
            font-size: 14px;
            text-transform: uppercase;
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease;
        }

        .page_menu_item > a:hover {
            color: #b5aec4;
        }

        .page_menu_item a i {
            display: none;
            margin-left: 8px;
        }

        .page_menu_item.has-children > a > i {
            display: inline-block;
        }

        .page_menu_selection {
            margin: 0;
            width: 100%;
            height: 0px;
            overflow: hidden;
            z-index: 1;
        }

        .page_menu_selection li {
            padding-left: 10px;
            padding-right: 10px;
            line-height: 50px;
        }

        .page_menu_selection li a {
            display: block;
            color: #FFFFFF;
            border-bottom: solid 1px rgba(255, 255, 255, 0.1);
            font-size: 14px;
            text-transform: uppercase;
            -webkit-transition: opacity 0.3s ease;
            -moz-transition: opacity 0.3s ease;
            -ms-transition: opacity 0.3s ease;
            -o-transition: opacity 0.3s ease;
            transition: all 0.3s ease;
        }

        .page_menu_selection li a:hover {
            color: #b5aec4;
        }

        .page_menu_selection li:last-child a {
            border-bottom: none;
        }

        .menu_contact_item {
            display: inline-block;
            font-size: 12px;
            font-weight: 300;
            line-height: 56px;
            margin-right: 40px;
            color: #FFFFFF;
        }

        .menu_contact_item:not(:first-child) {
            margin-right: 0px;
        }

        .menu_contact_item a {
            font-size: 12px;
            font-weight: 300;
            line-height: 56px;
            color: #FFFFFF;
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease;
        }

        .menu_contact_item a:hover {
            color: #8a8a8a;
        }

        .menu_contact_item:last-child {
            margin-right: 0px;
        }

        .menu_contact_icon {
            display: inline-block;
            margin-right: 14px;
            -webkit-transform: translateY(-2px);
            -moz-transform: translateY(-2px);
            -ms-transform: translateY(-2px);
            -o-transform: translateY(-2px);
            transform: translateY(-2px);
        }


        /*********************************
        3.4 Responsive
        *********************************/

        @media (min-width: 1200px) {
            .container {
                max-width: 1300px !important;
            }

        }

        @media only screen and (max-width: 1199px) {

            .main_nav_dropdown li {
                margin-right: 30px;
            }

            .main_nav_dropdown li a {
                font-size: 16px;
            }

        }


        @media only screen and (max-width: 991px) {

            .header_search {
                height: 50px;
            }

            .custom_dropdown {
                text-align: left;
            }

            .main_nav {
                margin-top: 56px;
            }

            .main_nav_menu {
                display: none;
            }

            .logo_container,
            .wishlist_cart {
                height: 125px;
            }

            .main_nav_content {
                background: #ffffff;
            }

            .menu_trigger_container {
                display: block;
            }

            .top_bar {
                height: 40px;
            }

            .top_bar_contact_item {
                font-size: 12px;
                margin-right: 20px;
                line-height: 40px;
            }

            .top_bar_contact_item a {
                font-size: 12px;
                line-height: 40px;
            }

            .top_bar_icon {
                margin-right: 4px;
            }

            .top_bar_icon img {
                width: 70%;
            }

            .top_bar_menu {
                display: none;
            }

            .top_bar_user a {
                font-size: 12px;
                line-height: 40px;
            }

            .user_icon {
                -webkit-transform: translateY(-1px);
                -moz-transform: translateY(-1px);
                -ms-transform: translateY(-1px);
                -o-transform: translateY(-1px);
                transform: translateY(-1px);
                width: 12px;
            }

        }

        @media only screen and (max-width: 767px) {
            .header_search {
                display: none;
            }

            .page_menu_search {
                display: block;
            }

            .main_nav {
                margin-top: 0px;
            }

        }

        @media only screen and (max-width: 575px) {
            h2 {
                font-size: 24px;
            }

            p {
                font-size: 13px;
            }

            .top_bar {
                display: none;
            }

            .logo_container, .wishlist_cart {
                height: 72px;
            }

            .logo a {
                font-size: 24px;
            }

            .cat_burger {
                width: 16px;
                height: 12px;
            }

            .cat_burger span:nth-child(2) {
                top: 5px;
            }

            .cat_burger span:nth-child(3) {
                top: 10px;
            }

            .menu_trigger_text {
                font-size: 13px;
                margin-right: 10px;
            }

            .wishlist {
                margin-right: 23px;
            }

            .wishlist_content {
                margin-left: 6px;
            }

            .wishlist_text {
                display: none;
            }

            .cart_text {
                display: none;
            }

            .wishlist_text a,
            .cart_text a {
                font-size: 14px;
            }

            .wishlist_count,
            .cart_price {
                font-size: 12px;
            }

            .wishlist_icon {
                width: 20px;
            }

            .cart_content {
                margin-left: 18px;
            }

            .cart_icon {
                width: 17px;
            }

            .cart_count {
                width: 21px;
                height: 21px;
            }

            .cart_count span {
                line-height: 21px;
            }

            .top_bar_user {
                margin-left: 0px;
            }

            .header_search {
                display: none;
            }

            .main_nav {
                width: calc(100% + 30px);
                margin-left: -15px;
                margin-right: -15px;
                margin-top: 0px;
            }

            .main_nav_content {
                height: 0px;
            }

            .menu_trigger_container {
                padding-right: 15px;
            }

            .page_menu_item > a {
                font-size: 12px;
            }

            .page_menu_selection li a {
                font-size: 12px;
            }

            .button {
                height: 32px;
            }

            .button a {
                font-size: 12px;
                line-height: 32px;
                padding-left: 25px;
                padding-right: 25px;
            }

        }

    </style>


</head>

<body style="background: white">

<div class="preload preload-container">
    <div class="preload-logo">
        <div class="spinner"></div>
    </div>
</div>


<div style="background: white" class="app-header st2">
    <div class="tf-container">

        <div class="row">
            <div class="col-10 container d-flex d-md-none justify-content-start">
                <img style="width: 200px" src="{{url('')}}/public/assets/img/logo.png" alt="logo" height="20"
                     width="100">

            </div>

            <div class="col-10 d-none d-md-block  d-flex justify-content-center">
                <img style="width: 200px; margin-left: 330px" src="{{url('')}}/public/assets/img/logo.png" alt="logo"
                     height="20"
                     width="100">
            </div>


            <div class="col-2 d-flex justify-content-end">

                <div class="menu_trigger_container ml-auto">
                    <div class="menu_trigger d-flex flex-row align-items-center justify-content-start">
                        <div class="menu_burger">
                            <div style="background: #0A1A3D" class="cat_burger menu_burger_inner">
                                <span></span><span></span><span></span></div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="d-flex justify-content-center">


        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
        <div class="super_container mt-3">

            <!-- Header -->

            <header class="header">


                <div class="header_main">
                    <div class="container">
                        <div class="row">


                            <!-- Search -->
                            <div class="col-lg-6 col-12 d-none order-lg-2 order-3 text-lg-left text-right">
                                <div class="header_search">
                                    <div class="header_search_content">
                                        <div class="header_search_form_container">
                                            <form action="#" class="header_search_form clearfix">
                                                <div class="custom_dropdown" style="display: none;">
                                                    <div class="custom_dropdown_list">
                                                        <span
                                                            class="custom_dropdown_placeholder clc">All Categories</span>
                                                        <i class="fas fa-chevron-down"></i>
                                                        <ul class="custom_list clc">

                                                        </ul>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <!-- Main Navigation -->

                <nav class="main_nav">
                    <div class="container">
                        <div class="row">
                            <div class="col">

                                <div class="main_nav_content d-flex flex-row">
                                    <div class="main_nav_menu">
                                        <ul class="standard_dropdown main_nav_dropdown">
                                            <li><a href="/home">Home<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="/fund-wallet">Fund Wallet<i
                                                        class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="/orders">Orders<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="/contact">Contact<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a style="color: red" href="/log-out">Log Out<i
                                                        class="fas fa-chevron-down"></i></a></li>

                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </nav>

                <!-- Menu -->

                <div class="page_menu">
                    <div class="container">
                        <div class="row">
                            <div class="col">

                                <div class="page_menu_content">

                                    <ul class="page_menu_nav">
                                        <li class="page_menu_item">
                                            <a href="/home">Home<i class="fa fa-angle-down"></i></a>
                                        </li>
                                        <li class="page_menu_item"><a href="/fund-wallet">Fund Wallet<i
                                                    class="fa fa-angle-down"></i></a></li>
                                        <li class="page_menu_item"><a href="/orders">Orders<i
                                                    class="fa fa-angle-down"></i></a></li>
                                        <li style="color: red" class="page_menu_item"><a href="/log-out">Logout<i
                                                    class="fa fa-angle-down"></i></a></li>


                                    </ul>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </header>


        </div>
    </div>
</div>


@yield('content')

<!-- /preload -->


<script type="text/javascript" src="{{url('')}}/public/assets/assets/javascript/jquery.min.js"></script>
<script type="text/javascript" src="{{url('')}}/public/assets/assets/javascript/bootstrap.min.js"></script>
<script type="text/javascript" src="{{url('')}}/public/assets/assets/javascript/main.js"></script>
<script type="text/javascript" src="{{url('')}}/public/assets/assets/javascript/init.js"></script>

<script>
    // Toggle for country dropdown
    function toggleDropdown() {
        document.getElementById('dropdown').style.display = 'block';
    }

    // Toggle for service dropdown
    function toggleDropdownservice() {
        document.getElementById('dropdownservice').style.display = 'block';
    }

    // Filter for country items
    function filterItems() {
        const searchInput = document.getElementById('search').value.toLowerCase();
        const items = document.querySelectorAll('#dropdown .item');

        items.forEach(item => {
            const text = item.textContent.toLowerCase();
            if (text.includes(searchInput)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }

    // Filter for service items
    function filterItemsservice() {
        const searchInput = document.getElementById('searchservice').value.toLowerCase();
        const items = document.querySelectorAll('#dropdownservice .item');

        items.forEach(item => {
            const text = item.textContent.toLowerCase();
            if (text.includes(searchInput)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }

    // Select country
    function selectCountry(element) {
        document.getElementById('search').value = element.textContent;
        document.getElementById('dropdown').style.display = 'none';
        document.getElementById('selectedID').value = element.getAttribute('data-id');
    }

    // Select service
    function selectService(element) {
        document.getElementById('searchservice').value = element.textContent;
        document.getElementById('dropdownservice').style.display = 'none';
        document.getElementById('serviceID').value = element.getAttribute('data-id');
    }

    // Close dropdowns if clicked outside
    document.addEventListener('click', function (event) {
        const searchContainerCountry = document.querySelector('#search');
        const searchContainerService = document.querySelector('#searchservice');

        if (!searchContainerCountry.contains(event.target)) {
            document.getElementById('dropdown').style.display = 'none';
        }

        if (!searchContainerService.contains(event.target)) {
            document.getElementById('dropdownservice').style.display = 'none';
        }
    });
</script>
<script>

    $(document).ready(function () {
        "use strict";

        var menuActive = false;
        var header = $('.header');
        setHeader();
        initCustomDropdown();
        initPageMenu();

        function setHeader() {

            if (window.innerWidth > 991 && menuActive) {
                closeMenu();
            }
        }

        function initCustomDropdown() {
            if ($('.custom_dropdown_placeholder').length && $('.custom_list').length) {
                var placeholder = $('.custom_dropdown_placeholder');
                var list = $('.custom_list');
            }

            placeholder.on('click', function (ev) {
                if (list.hasClass('active')) {
                    list.removeClass('active');
                } else {
                    list.addClass('active');
                }

                $(document).one('click', function closeForm(e) {
                    if ($(e.target).hasClass('clc')) {
                        $(document).one('click', closeForm);
                    } else {
                        list.removeClass('active');
                    }
                });

            });

            $('.custom_list a').on('click', function (ev) {
                ev.preventDefault();
                var index = $(this).parent().index();

                placeholder.text($(this).text()).css('opacity', '1');

                if (list.hasClass('active')) {
                    list.removeClass('active');
                } else {
                    list.addClass('active');
                }
            });


            $('select').on('change', function (e) {
                placeholder.text(this.value);

                $(this).animate({width: placeholder.width() + 'px'});
            });
        }

        /*

        4. Init Page Menu

        */

        function initPageMenu() {
            if ($('.page_menu').length && $('.page_menu_content').length) {
                var menu = $('.page_menu');
                var menuContent = $('.page_menu_content');
                var menuTrigger = $('.menu_trigger');

                //Open / close page menu
                menuTrigger.on('click', function () {
                    if (!menuActive) {
                        openMenu();
                    } else {
                        closeMenu();
                    }
                });

                //Handle page menu
                if ($('.page_menu_item').length) {
                    var items = $('.page_menu_item');
                    items.each(function () {
                        var item = $(this);
                        if (item.hasClass("has-children")) {
                            item.on('click', function (evt) {
                                evt.preventDefault();
                                evt.stopPropagation();
                                var subItem = item.find('> ul');
                                if (subItem.hasClass('active')) {
                                    subItem.toggleClass('active');
                                    TweenMax.to(subItem, 0.3, {height: 0});
                                } else {
                                    subItem.toggleClass('active');
                                    TweenMax.set(subItem, {height: "auto"});
                                    TweenMax.from(subItem, 0.3, {height: 0});
                                }
                            });
                        }
                    });
                }
            }
        }

        function openMenu() {
            var menu = $('.page_menu');
            var menuContent = $('.page_menu_content');
            TweenMax.set(menuContent, {height: "auto"});
            TweenMax.from(menuContent, 0.3, {height: 0});
            menuActive = true;
        }

        function closeMenu() {
            var menu = $('.page_menu');
            var menuContent = $('.page_menu_content');
            TweenMax.to(menuContent, 0.3, {height: 0});
            menuActive = false;
        }


    });
</script>


<style>
    .float {
        position: fixed;
        width: 170px;
        height: 60px;
        bottom: 40px;
        right: 40px;
        background-color: rgba(255, 255, 255, 0);
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        z-index: 100;
    }

    .my-float {
        margin-top: 16px;
    }
</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <a  href="https://t.me/verifyasapp" class="float" target="_blank">
            <svg width="181" height="57" viewBox="0 0 181 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.5227 21.4545V36H10.2273L4.97159 28.358H4.88636V36H0.9375V21.4545H4.28977L9.46023 29.0682H9.57386V21.4545H13.5227Z" fill="#D9D9D9"/>
                <path d="M15.9906 36V21.4545H26.4736V24.6364H19.9395V27.1364H25.9338V30.3182H19.9395V32.8182H26.4452V36H15.9906Z" fill="#D9D9D9"/>
                <path d="M29.032 36V21.4545H39.515V24.6364H32.9809V27.1364H38.9752V30.3182H32.9809V32.8182H39.4866V36H29.032Z" fill="#D9D9D9"/>
                <path d="M47.67 36H42.0734V21.4545H47.6132C49.1094 21.4545 50.402 21.7457 51.4911 22.3281C52.5848 22.9058 53.4276 23.7391 54.0195 24.8281C54.616 25.9124 54.9143 27.2121 54.9143 28.7273C54.9143 30.2424 54.6184 31.5445 54.0266 32.6335C53.4347 33.7178 52.5966 34.5511 51.5124 35.1335C50.4281 35.7112 49.1473 36 47.67 36ZM46.0223 32.6477H47.528C48.2477 32.6477 48.8608 32.5317 49.3675 32.2997C49.8788 32.0677 50.2671 31.6676 50.5322 31.0994C50.8021 30.5313 50.9371 29.7405 50.9371 28.7273C50.9371 27.714 50.7998 26.9233 50.5251 26.3551C50.2553 25.7869 49.8575 25.3868 49.332 25.1548C48.8111 24.9228 48.1719 24.8068 47.4143 24.8068H46.0223V32.6477Z" fill="#D9D9D9"/>
                <path d="M61.9258 36V21.4545H65.8746V27.1364H71.1019V21.4545H75.0508V36H71.1019V30.3182H65.8746V36H61.9258Z" fill="#D9D9D9"/>
                <path d="M77.5258 36V21.4545H88.0087V24.6364H81.4746V27.1364H87.469V30.3182H81.4746V32.8182H87.9803V36H77.5258Z" fill="#D9D9D9"/>
                <path d="M90.5672 36V21.4545H94.516V32.8182H100.397V36H90.5672Z" fill="#D9D9D9"/>
                <path d="M102.593 36V21.4545H108.871C109.951 21.4545 110.896 21.6676 111.705 22.0938C112.515 22.5199 113.145 23.1188 113.594 23.8906C114.044 24.6624 114.269 25.5644 114.269 26.5966C114.269 27.6383 114.037 28.5402 113.573 29.3026C113.114 30.0649 112.467 30.652 111.634 31.0639C110.806 31.4759 109.837 31.6818 108.729 31.6818H104.979V28.6136H107.934C108.398 28.6136 108.793 28.5331 109.12 28.3722C109.451 28.2064 109.705 27.9721 109.88 27.669C110.06 27.366 110.15 27.0085 110.15 26.5966C110.15 26.1799 110.06 25.8248 109.88 25.5312C109.705 25.233 109.451 25.0057 109.12 24.8494C108.793 24.6884 108.398 24.608 107.934 24.608H106.542V36H102.593Z" fill="#D9D9D9"/>
                <path d="M181 28.5C181 44.2401 168.177 57 152.359 57C136.541 57 123.717 44.2401 123.717 28.5C123.717 12.7599 136.541 0 152.359 0C168.177 0 181 12.7599 181 28.5Z" fill="#D9D9D9"/>
                <path d="M142.119 21.6041C142.119 19.0438 143.198 16.5884 145.118 14.7781C147.038 12.9677 149.643 11.9506 152.359 11.9506C155.075 11.9506 157.679 12.9677 159.6 14.7781C161.52 16.5884 162.599 19.0438 162.599 21.6041C162.599 21.9699 162.753 22.3206 163.027 22.5793C163.302 22.8379 163.674 22.9832 164.062 22.9832C164.45 22.9832 164.822 22.8379 165.096 22.5793C165.37 22.3206 165.524 21.9699 165.524 21.6041C165.524 19.4874 164.95 17.4059 163.856 15.5575C162.762 13.7091 161.184 12.1552 159.274 11.0434C157.363 9.93164 155.183 9.29901 152.939 9.20563C150.696 9.11226 148.465 9.56124 146.458 10.5099C144.451 11.4586 142.734 12.8754 141.472 14.6257C140.209 16.376 139.442 18.4017 139.244 20.5101C139.046 22.6186 139.423 24.7397 140.34 26.672C141.257 28.6043 142.682 30.2835 144.481 31.55C146.024 32.6364 147.801 33.3905 149.686 33.7592C149.948 34.3131 150.396 34.7701 150.961 35.0596C151.526 35.3491 152.177 35.455 152.813 35.3608C153.448 35.2667 154.033 34.9778 154.476 34.5388C154.92 34.0998 155.198 33.5352 155.267 32.9323C155.336 32.3294 155.193 31.7219 154.858 31.2037C154.524 30.6856 154.019 30.2856 153.419 30.0657C152.82 29.8458 152.16 29.8183 151.542 29.9874C150.925 30.1565 150.383 30.5128 150.002 31.0011C147.757 30.5007 145.758 29.3005 144.327 27.595C142.896 25.8895 142.118 23.7785 142.119 21.6041ZM143.582 21.6041C143.582 20.0819 144.028 18.5893 144.87 17.2906C145.713 15.9919 146.919 14.9374 148.356 14.2432C149.793 13.549 151.405 13.2419 153.015 13.3558C154.626 13.4697 156.171 14.0001 157.482 14.8887C158.793 15.7773 159.819 16.9896 160.446 18.3923C161.074 19.7949 161.278 21.3335 161.038 22.8388C160.798 24.3441 160.122 25.7576 159.084 26.924C158.046 28.0904 156.688 28.9643 155.157 29.4496C154.37 28.8355 153.38 28.4994 152.359 28.4995C151.295 28.4995 150.321 28.8566 149.56 29.4496C147.818 28.897 146.303 27.8425 145.23 26.4348C144.158 25.0271 143.581 23.3374 143.582 21.6041ZM152.359 36.7739C153.061 36.7742 153.753 36.6157 154.377 36.3116C155.001 36.0075 155.538 35.5667 155.944 35.0262C156.349 34.4857 156.611 33.8614 156.708 33.2056C156.804 32.5498 156.733 31.8818 156.499 31.2576H164.793C166.151 31.2576 167.453 31.7661 168.413 32.6713C169.374 33.5765 169.913 34.8042 169.913 36.0844V36.7739C169.913 40.074 167.685 42.8652 164.522 44.7628C161.342 46.6715 157.037 47.8064 152.359 47.8064C147.68 47.8064 143.377 46.6715 140.195 44.7628C137.032 42.8652 134.804 40.074 134.804 36.7739V36.0844C134.804 34.8042 135.344 33.5765 136.304 32.6713C137.264 31.7661 138.566 31.2576 139.924 31.2576H141.912C143.783 33.0585 146.142 34.3416 148.732 34.9673C149.522 36.0582 150.853 36.7739 152.359 36.7739Z" fill="black"/>
            </svg>
        </a>


</body>
</html>
