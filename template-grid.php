<?php
/*
Template Name: Grid
*/
?>

<style>

    .table code {
        font-size: 13px;
        font-weight: 400;
    }
    .btn-outline {
        background-color: transparent;
        border-color: #563d7c;
        color: #563d7c;
    }
    .btn-outline:active, .btn-outline:focus, .btn-outline:hover {
        background-color: #563d7c;
        border-color: #563d7c;
        color: #fff;
    }
    .btn-outline-inverse {
        background-color: transparent;
        border-color: #cdbfe3;
        color: #fff;
    }
    .btn-outline-inverse:active, .btn-outline-inverse:focus, .btn-outline-inverse:hover {
        background-color: #fff;
        border-color: #fff;
        color: #563d7c;
        text-shadow: none;
    }
    .bs-docs-booticon {
        background-color: #563d7c;
        border-radius: 15%;
        color: #fff;
        cursor: default;
        display: block;
        font-weight: 500;
        text-align: center;
    }
    .bs-docs-booticon-sm {
        font-size: 20px;
        height: 30px;
        line-height: 28px;
        width: 30px;
    }
    .bs-docs-booticon-lg {
        font-size: 108px;
        height: 144px;
        line-height: 140px;
        width: 144px;
    }
    .bs-docs-booticon-inverse {
        background-color: #fff;
        color: #563d7c;
    }
    .bs-docs-booticon-outline {
        background-color: transparent;
        border: 1px solid #cdbfe3;
    }
    #skippy {
        background-color: #6f5499;
        color: #fff;
        display: block;
        outline: 0 none;
        padding: 1em;
    }
    #skippy .skiplink-text {
        outline: 1px dotted;
        padding: 0.5em;
    }
    .bs-docs-nav {
        background-color: #fff;
        border-bottom: 0 none;
        margin-bottom: 0;
    }
    .bs-home-nav .bs-nav-b {
        display: none;
    }
    .bs-docs-nav .navbar-brand, .bs-docs-nav .navbar-nav > li > a {
        color: #563d7c;
        font-weight: 500;
    }
    .bs-docs-nav .navbar-nav > .active > a, .bs-docs-nav .navbar-nav > .active > a:hover, .bs-docs-nav .navbar-nav > li > a:hover {
        background-color: #f9f9f9;
        color: #463265;
    }
    .bs-docs-nav .navbar-toggle .icon-bar {
        background-color: #563d7c;
    }
    .bs-docs-nav .navbar-header .navbar-toggle {
        border-color: #fff;
    }
    .bs-docs-nav .navbar-header .navbar-toggle:focus, .bs-docs-nav .navbar-header .navbar-toggle:hover {
        background-color: #f9f9f9;
        border-color: #f9f9f9;
    }
    .bs-docs-footer {
        border-top: 1px solid #e5e5e5;
        color: #767676;
        margin-top: 100px;
        padding-bottom: 40px;
        padding-top: 40px;
        text-align: center;
    }
    .bs-docs-footer-links {
        margin-top: 20px;
        padding-left: 0;
    }
    .bs-docs-footer-links li {
        display: inline;
        padding: 0 2px;
    }
    .bs-docs-footer-links li:first-child {
        padding-left: 0;
    }
    @media (min-width: 768px) {
    .bs-docs-footer p {
        margin-bottom: 0;
    }
    }
    .bs-docs-social {
        margin-bottom: 20px;
        text-align: center;
    }
    .bs-docs-social-buttons {
        display: inline-block;
        list-style: outside none none;
        margin-bottom: 0;
        padding-left: 0;
    }
    .bs-docs-social-buttons li {
        display: inline-block;
        line-height: 1;
        padding: 5px 8px;
    }
    .bs-docs-social-buttons .twitter-follow-button {
        width: 225px !important;
    }
    .bs-docs-social-buttons .twitter-share-button {
        width: 98px !important;
    }
    .github-btn {
        border: 0 none;
        overflow: hidden;
    }
    .bs-docs-header, .bs-docs-masthead {
        background-color: #6f5499;
        background-image: linear-gradient(to bottom, #563d7c 0px, #6f5499 100%);
        background-repeat: repeat-x;
        color: #cdbfe3;
        padding: 30px 15px;
        position: relative;
        text-align: center;
        text-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
    }
    .bs-docs-masthead .bs-docs-booticon {
        margin: 0 auto 30px;
    }
    .bs-docs-masthead h1 {
        color: #fff;
        font-weight: 300;
        line-height: 1;
    }
    .bs-docs-masthead .lead {
        color: #fff;
        font-size: 20px;
        margin: 0 auto 30px;
    }
    .bs-docs-masthead .version {
        color: #9783b9;
        margin-bottom: 30px;
        margin-top: -15px;
    }
    .bs-docs-masthead .btn {
        font-size: 20px;
        padding: 15px 30px;
        width: 100%;
    }
    @media (min-width: 480px) {
    .bs-docs-masthead .btn {
        width: auto;
    }
    }
    @media (min-width: 768px) {
    .bs-docs-masthead {
        padding: 80px 0;
    }
    .bs-docs-masthead h1 {
        font-size: 60px;
    }
    .bs-docs-masthead .lead {
        font-size: 24px;
    }
    }
    @media (min-width: 992px) {
    .bs-docs-masthead .lead {
        font-size: 30px;
        width: 80%;
    }
    }
    .bs-docs-header {
        font-size: 20px;
        margin-bottom: 40px;
    }
    .bs-docs-header h1 {
        color: #fff;
        margin-top: 0;
    }
    .bs-docs-header p {
        font-weight: 300;
        line-height: 1.4;
        margin-bottom: 0;
    }
    .bs-docs-header .container {
        position: relative;
    }
    @media (min-width: 768px) {
    .bs-docs-header {
        font-size: 24px;
        padding-bottom: 60px;
        padding-top: 60px;
        text-align: left;
    }
    .bs-docs-header h1 {
        font-size: 60px;
        line-height: 1;
    }
    }
    @media (min-width: 992px) {
    .bs-docs-header h1, .bs-docs-header p {
        margin-right: 380px;
    }
    }
    .carbonad {
        -moz-border-bottom-colors: none !important;
        -moz-border-left-colors: none !important;
        -moz-border-right-colors: none !important;
        -moz-border-top-colors: none !important;
        background: none repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
        border-color: #866ab3 !important;
        border-image: none !important;
        border-style: solid !important;
        border-width: 1px 0 !important;
        font-size: 13px !important;
        height: auto !important;
        line-height: 16px !important;
        margin: 30px -30px -31px !important;
        overflow: hidden;
        padding: 20px !important;
        text-align: left;
        width: auto !important;
    }
    .carbonad-img {
        margin: 0 !important;
    }
    .carbonad-tag, .carbonad-text {
        display: block !important;
        float: none !important;
        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif !important;
        height: auto !important;
        margin-left: 145px !important;
        width: auto !important;
    }
    .carbonad-text {
        padding-top: 0 !important;
    }
    .carbonad-tag {
        color: inherit !important;
        text-align: left !important;
    }
    .carbonad-tag a, .carbonad-text a {
        color: #fff !important;
    }
    .carbonad #azcarbon > img {
        display: none;
    }
    @media (min-width: 480px) {
    .carbonad {
        border-radius: 4px;
        border-width: 1px !important;
        margin: 20px auto !important;
        width: 330px !important;
    }
    .bs-docs-masthead .carbonad {
        margin: 50px auto 0 !important;
    }
    }
    @media (min-width: 768px) {
    .carbonad {
        margin-left: 0 !important;
        margin-right: 0 !important;
    }
    }
    @media (min-width: 992px) {
    .carbonad {
        margin: 0 !important;
        padding: 15px !important;
        position: absolute;
        right: 15px;
        top: 0;
        width: 330px !important;
    }
    .bs-docs-masthead .carbonad {
        position: static;
    }
    }
    .bs-docs-featurette {
        background-color: #fff;
        border-bottom: 1px solid #e5e5e5;
        color: #555;
        font-size: 16px;
        line-height: 1.5;
        padding-bottom: 40px;
        padding-top: 40px;
        text-align: center;
    }
    .bs-docs-featurette + .bs-docs-footer {
        border-top: 0 none;
        margin-top: 0;
    }
    .bs-docs-featurette-title {
        color: #333;
        font-size: 30px;
        font-weight: 400;
        margin-bottom: 5px;
    }
    .half-rule {
        margin: 40px auto;
        width: 100px;
    }
    .bs-docs-featurette h3 {
        color: #333;
        font-weight: 400;
        margin-bottom: 5px;
    }
    .bs-docs-featurette-img {
        color: #333;
        display: block;
        margin-bottom: 20px;
    }
    .bs-docs-featurette-img:hover {
        color: #337ab7;
        text-decoration: none;
    }
    .bs-docs-featurette-img img {
        display: block;
        margin-bottom: 15px;
    }
    @media (min-width: 480px) {
    .bs-docs-featurette .img-responsive {
        margin-top: 30px;
    }
    }
    @media (min-width: 768px) {
    .bs-docs-featurette {
        padding-bottom: 100px;
        padding-top: 100px;
    }
    .bs-docs-featurette-title {
        font-size: 40px;
    }
    .bs-docs-featurette .lead {
        margin-left: auto;
        margin-right: auto;
        max-width: 80%;
    }
    .bs-docs-featurette .img-responsive {
        margin-top: 0;
    }
    }
    .bs-docs-featured-sites {
        margin-left: -1px;
        margin-right: -1px;
    }
    .bs-docs-featured-sites .col-xs-6 {
        padding: 1px;
    }
    .bs-docs-featured-sites .img-responsive {
        margin-top: 0;
    }
    @media (min-width: 768px) {
    .bs-docs-featured-sites .col-sm-3:first-child img {
        border-bottom-left-radius: 4px;
        border-top-left-radius: 4px;
    }
    .bs-docs-featured-sites .col-sm-3:last-child img {
        border-bottom-right-radius: 4px;
        border-top-right-radius: 4px;
    }
    }
    .bs-examples .thumbnail {
        margin-bottom: 10px;
    }
    .bs-examples h4 {
        margin-bottom: 5px;
    }
    .bs-examples p {
        margin-bottom: 20px;
    }
    @media (max-width: 480px) {
    .bs-examples {
        margin-left: -10px;
        margin-right: -10px;
    }
    .bs-examples > [class^="col-"] {
        padding-left: 10px;
        padding-right: 10px;
    }
    }
    .bs-docs-sidebar.affix {
        position: static;
    }
    @media (min-width: 768px) {
    .bs-docs-sidebar {
        padding-left: 20px;
    }
    }
    .bs-docs-sidenav {
        margin-bottom: 20px;
        margin-top: 20px;
    }
    .bs-docs-sidebar .nav > li > a {
        color: #767676;
        display: block;
        font-size: 13px;
        font-weight: 500;
        padding: 4px 20px;
    }
    .bs-docs-sidebar .nav > li > a:focus, .bs-docs-sidebar .nav > li > a:hover {
        background-color: transparent;
        border-left: 1px solid #563d7c;
        color: #563d7c;
        padding-left: 19px;
        text-decoration: none;
    }
    .bs-docs-sidebar .nav > .active:focus > a, .bs-docs-sidebar .nav > .active:hover > a, .bs-docs-sidebar .nav > .active > a {
        background-color: transparent;
        border-left: 2px solid #563d7c;
        color: #563d7c;
        font-weight: 700;
        padding-left: 18px;
    }
    .bs-docs-sidebar .nav .nav {
        display: none;
        padding-bottom: 10px;
    }
    .bs-docs-sidebar .nav .nav > li > a {
        font-size: 12px;
        font-weight: 400;
        padding-bottom: 1px;
        padding-left: 30px;
        padding-top: 1px;
    }
    .bs-docs-sidebar .nav .nav > li > a:focus, .bs-docs-sidebar .nav .nav > li > a:hover {
        padding-left: 29px;
    }
    .bs-docs-sidebar .nav .nav > .active:focus > a, .bs-docs-sidebar .nav .nav > .active:hover > a, .bs-docs-sidebar .nav .nav > .active > a {
        font-weight: 500;
        padding-left: 28px;
    }
    .back-to-top, .bs-docs-theme-toggle {
        color: #999;
        display: none;
        font-size: 12px;
        font-weight: 500;
        margin-left: 10px;
        margin-top: 10px;
        padding: 4px 10px;
    }
    .back-to-top:hover, .bs-docs-theme-toggle:hover {
        color: #563d7c;
        text-decoration: none;
    }
    .bs-docs-theme-toggle {
        margin-top: 0;
    }
    @media (min-width: 768px) {
    .back-to-top, .bs-docs-theme-toggle {
        display: block;
    }
    }
    @media (min-width: 992px) {
    .bs-docs-sidebar .nav > .active > ul {
        display: block;
    }
    .bs-docs-sidebar.affix, .bs-docs-sidebar.affix-bottom {
        width: 213px;
    }
    .bs-docs-sidebar.affix {
        position: fixed;
        top: 20px;
    }
    .bs-docs-sidebar.affix-bottom {
        position: absolute;
    }
    .bs-docs-sidebar.affix .bs-docs-sidenav, .bs-docs-sidebar.affix-bottom .bs-docs-sidenav {
        margin-bottom: 0;
        margin-top: 0;
    }
    }
    @media (min-width: 1200px) {
    .bs-docs-sidebar.affix, .bs-docs-sidebar.affix-bottom {
        width: 263px;
    }
    }
    .bs-docs-section {
        margin-bottom: 60px;
    }
    .bs-docs-section:last-child {
        margin-bottom: 0;
    }
    h1[id] {
        margin-top: 0;
        padding-top: 20px;
    }
    .bs-callout {
        -moz-border-bottom-colors: none;
        -moz-border-left-colors: none;
        -moz-border-right-colors: none;
        -moz-border-top-colors: none;
        border-color: #eee;
        border-image: none;
        border-radius: 3px;
        border-style: solid;
        border-width: 1px 1px 1px 5px;
        margin: 20px 0;
        padding: 20px;
    }
    .bs-callout h4 {
        margin-bottom: 5px;
        margin-top: 0;
    }
    .bs-callout p:last-child {
        margin-bottom: 0;
    }
    .bs-callout code {
        border-radius: 3px;
    }
    .bs-callout + .bs-callout {
        margin-top: -5px;
    }
    .bs-callout-danger {
        border-left-color: #ce4844;
    }
    .bs-callout-danger h4 {
        color: #ce4844;
    }
    .bs-callout-warning {
        border-left-color: #aa6708;
    }
    .bs-callout-warning h4 {
        color: #aa6708;
    }
    .bs-callout-info {
        border-left-color: #1b809e;
    }
    .bs-callout-info h4 {
        color: #1b809e;
    }
    .color-swatches {
        margin: 0 -5px;
        overflow: hidden;
    }
    .color-swatch {
        border-radius: 3px;
        float: left;
        height: 60px;
        margin: 0 5px;
        width: 60px;
    }
    @media (min-width: 768px) {
    .color-swatch {
        height: 100px;
        width: 100px;
    }
    }
    .color-swatches .gray-darker {
        background-color: #222;
    }
    .color-swatches .gray-dark {
        background-color: #333;
    }
    .color-swatches .gray {
        background-color: #555;
    }
    .color-swatches .gray-light {
        background-color: #999;
    }
    .color-swatches .gray-lighter {
        background-color: #eee;
    }
    .color-swatches .brand-primary {
        background-color: #337ab7;
    }
    .color-swatches .brand-success {
        background-color: #5cb85c;
    }
    .color-swatches .brand-warning {
        background-color: #f0ad4e;
    }
    .color-swatches .brand-danger {
        background-color: #d9534f;
    }
    .color-swatches .brand-info {
        background-color: #5bc0de;
    }
    .color-swatches .bs-purple {
        background-color: #563d7c;
    }
    .color-swatches .bs-purple-light {
        background-color: #c7bfd3;
    }
    .color-swatches .bs-purple-lighter {
        background-color: #e5e1ea;
    }
    .color-swatches .bs-gray {
        background-color: #f9f9f9;
    }
    .bs-team .team-member {
        color: #555;
        line-height: 32px;
    }
    .bs-team .team-member:hover {
        color: #333;
        text-decoration: none;
    }
    .bs-team .github-btn {
        float: right;
        height: 20px;
        margin-top: 6px;
        width: 180px;
    }
    .bs-team img {
        border-radius: 4px;
        float: left;
        margin-right: 10px;
        width: 32px;
    }
    .bs-docs-browser-bugs td p {
        margin-bottom: 0;
    }
    .bs-docs-browser-bugs th:first-child {
        width: 18%;
    }
    .show-grid {
        margin-bottom: 15px;
    }
    .show-grid [class^="col-"] {
        background-color: rgba(86, 61, 124, 0.15);
        border: 1px solid rgba(86, 61, 124, 0.2);
        padding-bottom: 10px;
        padding-top: 10px;
    }
    .bs-example {
        border-color: #e5e5e5 #eee #eee;
        border-style: solid;
        border-width: 1px 0;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.05) inset;
        margin: 0 -15px 15px;
        padding: 45px 15px 15px;
        position: relative;
    }
    .bs-example:after {
        color: #959595;
        content: "Example";
        font-size: 12px;
        font-weight: 700;
        left: 15px;
        letter-spacing: 1px;
        position: absolute;
        text-transform: uppercase;
        top: 15px;
    }
    .bs-example + .highlight, .bs-example + .zero-clipboard + .highlight {
        border-radius: 0;
        border-width: 0 0 1px;
        margin: -15px -15px 15px;
    }
    @media (min-width: 768px) {
    .bs-example {
        background-color: #fff;
        border-color: #ddd;
        border-radius: 4px 4px 0 0;
        border-width: 1px;
        box-shadow: none;
        margin-left: 0;
        margin-right: 0;
    }
    .bs-example + .highlight, .bs-example + .zero-clipboard + .highlight {
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 4px;
        border-width: 1px;
        margin-left: 0;
        margin-right: 0;
        margin-top: -16px;
    }
    .bs-example-standalone {
        border-radius: 4px;
    }
    }
    .bs-example .container {
        width: auto;
    }
    .bs-example > .alert:last-child, .bs-example > .form-control:last-child, .bs-example > .jumbotron:last-child, .bs-example > .list-group:last-child, .bs-example > .navbar:last-child, .bs-example > .panel:last-child, .bs-example > .progress:last-child, .bs-example > .table-responsive:last-child > .table, .bs-example > .table:last-child, .bs-example > .well:last-child, .bs-example > blockquote:last-child, .bs-example > ol:last-child, .bs-example > p:last-child, .bs-example > ul:last-child {
        margin-bottom: 0;
    }
    .bs-example > p > .close {
        float: none;
    }
    .bs-example-type .table .type-info {
        color: #767676;
        vertical-align: middle;
    }
    .bs-example-type .table td {
        border-color: #eee;
        padding: 15px 0;
    }
    .bs-example-type .table tr:first-child td {
        border-top: 0 none;
    }
    .bs-example-type h1, .bs-example-type h2, .bs-example-type h3, .bs-example-type h4, .bs-example-type h5, .bs-example-type h6 {
        margin: 0;
    }
    .bs-example-bg-classes p {
        padding: 15px;
    }
    .bs-example > .img-circle, .bs-example > .img-rounded, .bs-example > .img-thumbnail {
        margin: 5px;
    }
    .bs-example > .table-responsive > .table {
        background-color: #fff;
    }
    .bs-example > .btn, .bs-example > .btn-group {
        margin-bottom: 5px;
        margin-top: 5px;
    }
    .bs-example > .btn-toolbar + .btn-toolbar {
        margin-top: 10px;
    }
    .bs-example-control-sizing input[type="text"] + input[type="text"], .bs-example-control-sizing select {
        margin-top: 10px;
    }
    .bs-example-form .input-group {
        margin-bottom: 10px;
    }
    .bs-example > textarea.form-control {
        resize: vertical;
    }
    .bs-example > .list-group {
        max-width: 400px;
    }
    .bs-example .navbar:last-child {
        margin-bottom: 0;
    }
    .bs-navbar-bottom-example, .bs-navbar-top-example {
        overflow: hidden;
        padding: 0;
        z-index: 1;
    }
    .bs-navbar-bottom-example .navbar-header, .bs-navbar-top-example .navbar-header {
        margin-left: 0;
    }
    .bs-navbar-bottom-example .navbar-fixed-bottom, .bs-navbar-top-example .navbar-fixed-top {
        margin-left: 0;
        margin-right: 0;
        position: relative;
    }
    .bs-navbar-top-example {
        padding-bottom: 45px;
    }
    .bs-navbar-top-example:after {
        bottom: 15px;
        top: auto;
    }
    .bs-navbar-top-example .navbar-fixed-top {
        top: -1px;
    }
    .bs-navbar-bottom-example {
        padding-top: 45px;
    }
    .bs-navbar-bottom-example .navbar-fixed-bottom {
        bottom: -1px;
    }
    .bs-navbar-bottom-example .navbar {
        margin-bottom: 0;
    }
    @media (min-width: 768px) {
    .bs-navbar-bottom-example .navbar-fixed-bottom, .bs-navbar-top-example .navbar-fixed-top {
        position: absolute;
    }
    }
    .bs-example .pagination {
        margin-bottom: 10px;
        margin-top: 10px;
    }
    .bs-example > .pager {
        margin-top: 0;
    }
    .bs-example-modal {
        background-color: #f5f5f5;
    }
    .bs-example-modal .modal {
        bottom: auto;
        display: block;
        left: auto;
        position: relative;
        right: auto;
        top: auto;
        z-index: 1;
    }
    .bs-example-modal .modal-dialog {
        left: auto;
        margin-left: auto;
        margin-right: auto;
    }
    .bs-example > .dropdown > .dropdown-toggle {
        float: left;
    }
    .bs-example > .dropdown > .dropdown-menu {
        clear: left;
        display: block;
        margin-bottom: 5px;
        position: static;
    }
    .bs-example-tabs .nav-tabs {
        margin-bottom: 15px;
    }
    .bs-example-tooltips {
        text-align: center;
    }
    .bs-example-tooltips > .btn {
        margin-bottom: 5px;
        margin-top: 5px;
    }
    .bs-example-tooltip .tooltip {
        display: inline-block;
        margin: 10px 20px;
        opacity: 1;
        position: relative;
    }
    .bs-example-popover {
        background-color: #f9f9f9;
        padding-bottom: 24px;
    }
    .bs-example-popover .popover {
        display: block;
        float: left;
        margin: 20px;
        position: relative;
        width: 260px;
    }
    .scrollspy-example {
        height: 200px;
        margin-top: 10px;
        overflow: auto;
        position: relative;
    }
    #collapseExample .well {
        margin-bottom: 0;
    }
    .bs-events-table > tbody > tr > td:first-child, .bs-events-table > thead > tr > th:first-child {
        white-space: nowrap;
    }
    .highlight {
        background-color: #f7f7f9;
        border: 1px solid #e1e1e8;
        border-radius: 4px;
        margin-bottom: 14px;
        padding: 9px 14px;
    }
    .highlight pre {
        background-color: transparent;
        border: 0 none;
        margin-bottom: 0;
        margin-top: 0;
        padding: 0;
        white-space: nowrap;
        word-break: normal;
    }
    .highlight pre code {
        color: #333;
        font-size: inherit;
    }
    .highlight pre code:first-child {
        display: inline-block;
        padding-right: 45px;
    }
    .table-responsive .highlight pre {
        white-space: normal;
    }
    .bs-table th small, .responsive-utilities th small {
        color: #999;
        display: block;
        font-weight: 400;
    }
    .responsive-utilities tbody th {
        font-weight: 400;
    }
    .responsive-utilities td {
        text-align: center;
    }
    .responsive-utilities td.is-visible {
        background-color: #dff0d8 !important;
        color: #468847;
    }
    .responsive-utilities td.is-hidden {
        background-color: #f9f9f9 !important;
        color: #ccc;
    }
    .responsive-utilities-test {
        margin-top: 5px;
    }
    .responsive-utilities-test .col-xs-6 {
        margin-bottom: 10px;
    }
    .responsive-utilities-test span {
        border-radius: 4px;
        display: block;
        font-size: 14px;
        font-weight: 700;
        line-height: 1.1;
        padding: 15px 10px;
        text-align: center;
    }
    .hidden-on .col-xs-6 .hidden-lg, .hidden-on .col-xs-6 .hidden-md, .hidden-on .col-xs-6 .hidden-sm, .hidden-on .col-xs-6 .hidden-xs, .visible-on .col-xs-6 .hidden-lg, .visible-on .col-xs-6 .hidden-md, .visible-on .col-xs-6 .hidden-sm, .visible-on .col-xs-6 .hidden-xs {
        border: 1px solid #ddd;
        color: #999;
    }
    .hidden-on .col-xs-6 .visible-lg-block, .hidden-on .col-xs-6 .visible-md-block, .hidden-on .col-xs-6 .visible-sm-block, .hidden-on .col-xs-6 .visible-xs-block, .visible-on .col-xs-6 .visible-lg-block, .visible-on .col-xs-6 .visible-md-block, .visible-on .col-xs-6 .visible-sm-block, .visible-on .col-xs-6 .visible-xs-block {
        background-color: #dff0d8;
        border: 1px solid #d6e9c6;
        color: #468847;
    }
    .bs-glyphicons {
        margin: 0 -10px 20px;
        overflow: hidden;
    }
    .bs-glyphicons-list {
        list-style: outside none none;
        padding-left: 0;
    }
    .bs-glyphicons li {
        background-color: #f9f9f9;
        border: 1px solid #fff;
        float: left;
        font-size: 10px;
        height: 115px;
        line-height: 1.4;
        padding: 10px;
        text-align: center;
        width: 25%;
    }
    .bs-glyphicons .glyphicon {
        font-size: 24px;
        margin-bottom: 10px;
        margin-top: 5px;
    }
    .bs-glyphicons .glyphicon-class {
        display: block;
        text-align: center;
        word-wrap: break-word;
    }
    .bs-glyphicons li:hover {
        background-color: #563d7c;
        color: #fff;
    }
    @media (min-width: 768px) {
    .bs-glyphicons {
        margin-left: 0;
        margin-right: 0;
    }
    .bs-glyphicons li {
        font-size: 12px;
        width: 12.5%;
    }
    }
    .bs-customizer .toggle {
        float: right;
        margin-top: 25px;
    }
    .bs-customizer label {
        color: #555;
        font-weight: 500;
        margin-top: 10px;
    }
    .bs-customizer h2 {
        margin-bottom: 5px;
        margin-top: 0;
        padding-top: 30px;
    }
    .bs-customizer h3 {
        margin-bottom: 0;
    }
    .bs-customizer h4 {
        margin-bottom: 0;
        margin-top: 15px;
    }
    .bs-customizer .bs-callout h4 {
        margin-bottom: 5px;
        margin-top: 0;
    }
    .bs-customizer input[type="text"] {
        background-color: #fafafa;
        font-family: Menlo,Monaco,Consolas,"Courier New",monospace;
    }
    .bs-customizer .help-block {
        font-size: 12px;
        margin-bottom: 5px;
    }
    #less-section label {
        font-weight: 400;
    }
    .bs-customize-download .btn-outline {
        padding: 20px;
    }
    .bs-customizer-alert {
        background-color: #d9534f;
        border-bottom: 1px solid #b94441;
        box-shadow: 0 1px 0 rgba(255, 255, 255, 0.25) inset;
        color: #fff;
        left: 0;
        padding: 15px 0;
        position: fixed;
        right: 0;
        top: 0;
        z-index: 1030;
    }
    .bs-customizer-alert .close {
        font-size: 24px;
        margin-top: -4px;
    }
    .bs-customizer-alert p {
        margin-bottom: 0;
    }
    .bs-customizer-alert .glyphicon {
        margin-right: 5px;
    }
    .bs-customizer-alert pre {
        background-color: #a83c3a;
        border-color: #973634;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05) inset, 0 1px 0 rgba(255, 255, 255, 0.1);
        color: #fff;
        margin: 10px 0 0;
    }
    .bs-dropzone {
        border: 2px dashed #eee;
        border-radius: 4px;
        color: #777;
        margin-bottom: 20px;
        padding: 20px;
        position: relative;
        text-align: center;
    }
    .bs-dropzone .import-header {
        margin-bottom: 5px;
    }
    .bs-dropzone .glyphicon-download-alt {
        font-size: 40px;
    }
    .bs-dropzone hr {
        width: 100px;
    }
    .bs-dropzone .lead {
        color: #333;
        font-weight: 400;
        margin-bottom: 10px;
    }
    #import-manual-trigger {
        cursor: pointer;
    }
    .bs-dropzone p:last-child {
        margin-bottom: 0;
    }
    .bs-brand-logos {
        background-color: #f9f9f9;
        border-radius: 4px;
        color: #563d7c;
        display: table;
        margin-bottom: 15px;
        overflow: hidden;
        width: 100%;
    }
    .bs-brand-item {
        padding: 60px 0;
        text-align: center;
    }
    .bs-brand-item + .bs-brand-item {
        border-top: 1px solid #fff;
    }
    .bs-brand-logos .inverse {
        background-color: #563d7c;
        color: #fff;
    }
    .bs-brand-item h1, .bs-brand-item h3 {
        margin-bottom: 0;
        margin-top: 0;
    }
    .bs-brand-item .bs-docs-booticon {
        margin-left: auto;
        margin-right: auto;
    }
    .bs-brand-item .glyphicon {
        border-radius: 50%;
        color: #fff;
        height: 30px;
        line-height: 30px;
        margin: 10px auto -10px;
        width: 30px;
    }
    .bs-brand-item .glyphicon-ok {
        background-color: #5cb85c;
    }
    .bs-brand-item .glyphicon-remove {
        background-color: #d9534f;
    }
    @media (min-width: 768px) {
    .bs-brand-item {
        display: table-cell;
        width: 1%;
    }
    .bs-brand-item + .bs-brand-item {
        border-left: 1px solid #fff;
        border-top: 0 none;
    }
    .bs-brand-item h1 {
        font-size: 60px;
    }
    }
    .zero-clipboard {
        display: none;
        position: relative;
    }
    .btn-clipboard {
        background-color: #fff;
        border: 1px solid #e1e1e8;
        border-radius: 0 4px;
        color: #767676;
        cursor: pointer;
        display: block;
        font-size: 12px;
        padding: 5px 8px;
        position: absolute;
        right: 0;
        top: 0;
        z-index: 10;
    }
    .btn-clipboard-hover {
        background-color: #563d7c;
        border-color: #563d7c;
        color: #fff;
    }
    @media (min-width: 768px) {
    .zero-clipboard {
        display: block;
    }
    .bs-example + .zero-clipboard .btn-clipboard {
        border-top-right-radius: 0;
        top: -16px;
    }
    }
    #focusedInput {
        border-color: rgba(82, 168, 236, 0.8);
        box-shadow: 0 0 8px rgba(82, 168, 236, 0.6);
        outline: 0 none;
    }
    .hll {
        background-color: #ffc;
    }
    .c {
        color: #999;
    }
    .err {
        background-color: #faa;
        color: #a00;
    }
    .k {
        color: #069;
    }
    .o {
        color: #555;
    }
    .cm {
        color: #999;
    }
    .cp {
        color: #099;
    }
    .c1 {
        color: #999;
    }
    .cs {
        color: #999;
    }
    .gd {
        background-color: #fcc;
        border: 1px solid #c00;
    }
    .ge {
        font-style: italic;
    }
    .gr {
        color: red;
    }
    .gh {
        color: #030;
    }
    .gi {
        background-color: #cfc;
        border: 1px solid #0c0;
    }
    .go {
        color: #aaa;
    }
    .gp {
        color: #009;
    }
    .gu {
        color: #030;
    }
    .gt {
        color: #9c6;
    }
    .kc {
        color: #069;
    }
    .kd {
        color: #069;
    }
    .kn {
        color: #069;
    }
    .kp {
        color: #069;
    }
    .kr {
        color: #069;
    }
    .kt {
        color: #078;
    }
    .m {
        color: #f60;
    }
    .s {
        color: #d44950;
    }
    .na {
        color: #4f9fcf;
    }
    .nb {
        color: #366;
    }
    .nc {
        color: #0a8;
    }
    .no {
        color: #360;
    }
    .nd {
        color: #99f;
    }
    .ni {
        color: #999;
    }
    .ne {
        color: #c00;
    }
    .nf {
        color: #c0f;
    }
    .nl {
        color: #99f;
    }
    .nn {
        color: #0cf;
    }
    .nt {
        color: #2f6f9f;
    }
    .nv {
        color: #033;
    }
    .ow {
        color: #000;
    }
    .w {
        color: #bbb;
    }
    .mf {
        color: #f60;
    }
    .mh {
        color: #f60;
    }
    .mi {
        color: #f60;
    }
    .mo {
        color: #f60;
    }
    .sb {
        color: #c30;
    }
    .sc {
        color: #c30;
    }
    .sd {
        color: #c30;
        font-style: italic;
    }
    .s2 {
        color: #c30;
    }
    .se {
        color: #c30;
    }
    .sh {
        color: #c30;
    }
    .si {
        color: #a00;
    }
    .sx {
        color: #c30;
    }
    .sr {
        color: #3aa;
    }
    .s1 {
        color: #c30;
    }
    .ss {
        color: #fc3;
    }
    .bp {
        color: #366;
    }
    .vc {
        color: #033;
    }
    .vg {
        color: #033;
    }
    .vi {
        color: #033;
    }
    .il {
        color: #f60;
    }
    .css .nt + .nt, .css .o, .css .o + .nt {
        color: #999;
    }
</style>

<div class="bs-docs-grid">
    <div class="row show-grid">
      <div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
      <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
    </div>
    <div class="row show-grid">
      <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
      <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
      <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
    </div>
    <div class="row show-grid">
      <div class="col-xs-6">.col-xs-6</div>
      <div class="col-xs-6">.col-xs-6</div>
    </div>
</div>

<div class="bs-docs-grid">
    <div class="row show-grid">
      <div class="col-md-4">.col-md-4</div>
      <div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
    </div>
    <div class="row show-grid">
      <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
      <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
    </div>
    <div class="row show-grid">
      <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
    </div>
</div>

<div data-example-id="simple-headings" class="bs-example bs-example-type">
    <table class="table">
      <tbody>
        <tr>
          <td><h1>h1. Bootstrap heading</h1></td>
          <td class="type-info">Semibold 36px</td>
        </tr>
        <tr>
          <td><h2>h2. Bootstrap heading</h2></td>
          <td class="type-info">Semibold 30px</td>
        </tr>
        <tr>
          <td><h3>h3. Bootstrap heading</h3></td>
          <td class="type-info">Semibold 24px</td>
        </tr>
        <tr>
          <td><h4>h4. Bootstrap heading</h4></td>
          <td class="type-info">Semibold 18px</td>
        </tr>
        <tr>
          <td><h5>h5. Bootstrap heading</h5></td>
          <td class="type-info">Semibold 14px</td>
        </tr>
        <tr>
          <td><h6>h6. Bootstrap heading</h6></td>
          <td class="type-info">Semibold 12px</td>
        </tr>
      </tbody>
    </table>
</div>

<div data-example-id="blockquote-cite" class="bs-example">
    <blockquote>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
</div>

<div data-example-id="simple-ul" class="bs-example">
    <ul>
      <li>Lorem ipsum dolor sit amet</li>
      <li>Consectetur adipiscing elit</li>
      <li>Integer molestie lorem at massa</li>
      <li>Facilisis in pretium nisl aliquet</li>
      <li>Nulla volutpat aliquam velit
        <ul>
          <li>Phasellus iaculis neque</li>
          <li>Purus sodales ultricies</li>
          <li>Vestibulum laoreet porttitor sem</li>
          <li>Ac tristique libero volutpat at</li>
        </ul>
      </li>
      <li>Faucibus porta lacus fringilla vel</li>
      <li>Aenean sit amet erat nunc</li>
      <li>Eget porttitor lorem</li>
    </ul>
</div>

<div data-example-id="horizontal-dl" class="bs-example">
    <dl class="dl-horizontal">
      <dt>Description lists</dt>
      <dd>A description list is perfect for defining terms.</dd>
      <dt>Euismod</dt>
      <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
      <dd>Donec id elit non mi porta gravida at eget metus.</dd>
      <dt>Malesuada porta</dt>
      <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
      <dt>Felis euismod semper eget lacinia</dt>
      <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
    </dl>
</div>

<div data-example-id="simple-kbd" class="bs-example">
  To switch directories, type <kbd>cd</kbd> followed by the name of the directory.<br>
  To edit settings, press <kbd><kbd>ctrl</kbd> + <kbd>,</kbd></kbd>
</div>

<div data-example-id="simple-pre" class="bs-example">

  <pre>&lt;p&gt;Sample text here...&lt;/p&gt;</pre>
</div>

<div data-example-id="simple-responsive-table" class="bs-example">
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
          </tr>
        </tbody>
      </table>
    </div><!-- /.table-responsive -->

    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
          </tr>
        </tbody>
      </table>
    </div><!-- /.table-responsive -->
</div>

<div data-example-id="basic-forms" class="bs-example">
    <form>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" placeholder="Enter email" id="exampleInputEmail1" class="form-control" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QsPDhss3LcOZQAAAU5JREFUOMvdkzFLA0EQhd/bO7iIYmklaCUopLAQA6KNaawt9BeIgnUwLHPJRchfEBR7CyGWgiDY2SlIQBT/gDaCoGDudiy8SLwkBiwz1c7y+GZ25i0wnFEqlSZFZKGdi8iiiOR7aU32QkR2c7ncPcljAARAkgckb8IwrGf1fg/oJ8lRAHkR2VDVmOQ8AKjqY1bMHgCGYXhFchnAg6omJGcBXEZRtNoXYK2dMsaMt1qtD9/3p40x5yS9tHICYF1Vn0mOxXH8Uq/Xb389wff9PQDbQRB0t/QNOiPZ1h4B2MoO0fxnYz8dOOcOVbWhqq8kJzzPa3RAXZIkawCenHMjJN/+GiIqlcoFgKKq3pEMAMwAuCa5VK1W3SAfbAIopum+cy5KzwXn3M5AI6XVYlVt1mq1U8/zTlS1CeC9j2+6o1wuz1lrVzpWXLDWTg3pz/0CQnd2Jos49xUAAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-position: right center;" autocomplete="off">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" placeholder="Password" id="exampleInputPassword1" class="form-control" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QsPDhss3LcOZQAAAU5JREFUOMvdkzFLA0EQhd/bO7iIYmklaCUopLAQA6KNaawt9BeIgnUwLHPJRchfEBR7CyGWgiDY2SlIQBT/gDaCoGDudiy8SLwkBiwz1c7y+GZ25i0wnFEqlSZFZKGdi8iiiOR7aU32QkR2c7ncPcljAARAkgckb8IwrGf1fg/oJ8lRAHkR2VDVmOQ8AKjqY1bMHgCGYXhFchnAg6omJGcBXEZRtNoXYK2dMsaMt1qtD9/3p40x5yS9tHICYF1Vn0mOxXH8Uq/Xb389wff9PQDbQRB0t/QNOiPZ1h4B2MoO0fxnYz8dOOcOVbWhqq8kJzzPa3RAXZIkawCenHMjJN/+GiIqlcoFgKKq3pEMAMwAuCa5VK1W3SAfbAIopum+cy5KzwXn3M5AI6XVYlVt1mq1U8/zTlS1CeC9j2+6o1wuz1lrVzpWXLDWTg3pz/0CQnd2Jos49xUAAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-position: right center;" autocomplete="off">
      </div>
      <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <input type="file" id="exampleInputFile">
        <p class="help-block">Example block-level help text here.</p>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox"> Check me out
        </label>
      </div>
      <button class="btn btn-default" type="submit">Submit</button>
    </form>
</div>

<div data-example-id="form-inline-with-input-group" class="bs-example">
    <form class="form-inline">
      <div class="form-group">
        <label for="exampleInputAmount" class="sr-only">Amount (in dollars)</label>
        <div class="input-group">
          <div class="input-group-addon">$</div>
          <input type="text" placeholder="Amount" id="exampleInputAmount" class="form-control">
          <div class="input-group-addon">.00</div>
        </div>
      </div>
      <button class="btn btn-primary" type="submit">Transfer cash</button>
    </form>
</div>

<div data-example-id="form-validation-states" class="bs-example">
    <form>
      <div class="form-group has-success">
        <label for="inputSuccess1" class="control-label">Input with success</label>
        <input type="text" id="inputSuccess1" class="form-control">
      </div>
      <div class="form-group has-warning">
        <label for="inputWarning1" class="control-label">Input with warning</label>
        <input type="text" id="inputWarning1" class="form-control">
      </div>
      <div class="form-group has-error">
        <label for="inputError1" class="control-label">Input with error</label>
        <input type="text" id="inputError1" class="form-control">
      </div>
      <div class="has-success">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="option1" id="checkboxSuccess">
            Checkbox with success
          </label>
        </div>
      </div>
      <div class="has-warning">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="option1" id="checkboxWarning">
            Checkbox with warning
          </label>
        </div>
      </div>
      <div class="has-error">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="option1" id="checkboxError">
            Checkbox with error
          </label>
        </div>
      </div>
    </form>
</div>

<div data-example-id="form-validation-states-with-icons" class="bs-example">
    <form>
      <div class="form-group has-success has-feedback">
        <label for="inputSuccess2" class="control-label">Input with success</label>
        <input type="text" aria-describedby="inputSuccess2Status" id="inputSuccess2" class="form-control">
        <span aria-hidden="true" class="glyphicon glyphicon-ok form-control-feedback"></span>
        <span class="sr-only" id="inputSuccess2Status">(success)</span>
      </div>
      <div class="form-group has-warning has-feedback">
        <label for="inputWarning2" class="control-label">Input with warning</label>
        <input type="text" aria-describedby="inputWarning2Status" id="inputWarning2" class="form-control">
        <span aria-hidden="true" class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
        <span class="sr-only" id="inputWarning2Status">(warning)</span>
      </div>
      <div class="form-group has-error has-feedback">
        <label for="inputError2" class="control-label">Input with error</label>
        <input type="text" aria-describedby="inputError2Status" id="inputError2" class="form-control">
        <span aria-hidden="true" class="glyphicon glyphicon-remove form-control-feedback"></span>
        <span class="sr-only" id="inputError2Status">(error)</span>
      </div>
      <div class="form-group has-success has-feedback">
        <label for="inputGroupSuccess1" class="control-label">Input group with success</label>
        <div class="input-group">
          <span class="input-group-addon">@</span>
          <input type="text" aria-describedby="inputGroupSuccess1Status" id="inputGroupSuccess1" class="form-control">
        </div>
        <span aria-hidden="true" class="glyphicon glyphicon-ok form-control-feedback"></span>
        <span class="sr-only" id="inputGroupSuccess1Status">(success)</span>
      </div>
    </form>
</div>

<div data-example-id="block-btns" class="bs-example">
    <div style="max-width: 400px; margin: 0 auto 10px;" class="well">
      <button class="btn btn-primary btn-lg btn-block" type="button">Block level button</button>
      <button class="btn btn-default btn-lg btn-block" type="button">Block level button</button>
    </div>
</div>

<div data-example-id="image-shapes" class="bs-example bs-example-images">
    <img alt="140x140" class="img-rounded" data-src="holder.js/140x140" style="width: 140px; height: 140px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ1LjUiIHk9IjcwIiBzdHlsZT0iZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MTQweDE0MDwvdGV4dD48L2c+PC9zdmc+" data-holder-rendered="true">
    <img alt="140x140" class="img-circle" data-src="holder.js/140x140" style="width: 140px; height: 140px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ1LjUiIHk9IjcwIiBzdHlsZT0iZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MTQweDE0MDwvdGV4dD48L2c+PC9zdmc+" data-holder-rendered="true">
    <img alt="140x140" class="img-thumbnail" data-src="holder.js/140x140" style="width: 140px; height: 140px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ1LjUiIHk9IjcwIiBzdHlsZT0iZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MTQweDE0MDwvdGV4dD48L2c+PC9zdmc+" data-holder-rendered="true">
</div>

<div data-example-id="contextual-backgrounds-helpers" class="bs-example bs-example-bg-classes">
    <p class="bg-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
    <p class="bg-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
    <p class="bg-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
    <p class="bg-warning">Etiam porta sem malesuada magna mollis euismod.</p>
    <p class="bg-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
</div>

<div class="bs-example">
    <div class="color-swatches">
      <div class="color-swatch gray-darker"></div>
      <div class="color-swatch gray-dark"></div>
      <div class="color-swatch gray"></div>
      <div class="color-swatch gray-light"></div>
      <div class="color-swatch gray-lighter"></div>
    </div>
</div>

<div class="bs-example">
    <div class="color-swatches">
      <div class="color-swatch brand-primary"></div>
      <div class="color-swatch brand-success"></div>
      <div class="color-swatch brand-info"></div>
      <div class="color-swatch brand-warning"></div>
      <div class="color-swatch brand-danger"></div>
    </div>
</div>

<div class="bs-glyphicons">
  <ul class="bs-glyphicons-list">

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-asterisk"></span>
      <span class="glyphicon-class">glyphicon glyphicon-asterisk</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-plus"></span>
      <span class="glyphicon-class">glyphicon glyphicon-plus</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-euro"></span>
      <span class="glyphicon-class">glyphicon glyphicon-euro</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-eur"></span>
      <span class="glyphicon-class">glyphicon glyphicon-eur</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-minus"></span>
      <span class="glyphicon-class">glyphicon glyphicon-minus</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-cloud"></span>
      <span class="glyphicon-class">glyphicon glyphicon-cloud</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-envelope"></span>
      <span class="glyphicon-class">glyphicon glyphicon-envelope</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-pencil"></span>
      <span class="glyphicon-class">glyphicon glyphicon-pencil</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-glass"></span>
      <span class="glyphicon-class">glyphicon glyphicon-glass</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-music"></span>
      <span class="glyphicon-class">glyphicon glyphicon-music</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-search"></span>
      <span class="glyphicon-class">glyphicon glyphicon-search</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-heart"></span>
      <span class="glyphicon-class">glyphicon glyphicon-heart</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-star"></span>
      <span class="glyphicon-class">glyphicon glyphicon-star</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-star-empty"></span>
      <span class="glyphicon-class">glyphicon glyphicon-star-empty</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-user"></span>
      <span class="glyphicon-class">glyphicon glyphicon-user</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-film"></span>
      <span class="glyphicon-class">glyphicon glyphicon-film</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-th-large"></span>
      <span class="glyphicon-class">glyphicon glyphicon-th-large</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-th"></span>
      <span class="glyphicon-class">glyphicon glyphicon-th</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-th-list"></span>
      <span class="glyphicon-class">glyphicon glyphicon-th-list</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-ok"></span>
      <span class="glyphicon-class">glyphicon glyphicon-ok</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-remove"></span>
      <span class="glyphicon-class">glyphicon glyphicon-remove</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-zoom-in"></span>
      <span class="glyphicon-class">glyphicon glyphicon-zoom-in</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-zoom-out"></span>
      <span class="glyphicon-class">glyphicon glyphicon-zoom-out</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-off"></span>
      <span class="glyphicon-class">glyphicon glyphicon-off</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-signal"></span>
      <span class="glyphicon-class">glyphicon glyphicon-signal</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-cog"></span>
      <span class="glyphicon-class">glyphicon glyphicon-cog</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-trash"></span>
      <span class="glyphicon-class">glyphicon glyphicon-trash</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-home"></span>
      <span class="glyphicon-class">glyphicon glyphicon-home</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-file"></span>
      <span class="glyphicon-class">glyphicon glyphicon-file</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-time"></span>
      <span class="glyphicon-class">glyphicon glyphicon-time</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-road"></span>
      <span class="glyphicon-class">glyphicon glyphicon-road</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-download-alt"></span>
      <span class="glyphicon-class">glyphicon glyphicon-download-alt</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-download"></span>
      <span class="glyphicon-class">glyphicon glyphicon-download</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-upload"></span>
      <span class="glyphicon-class">glyphicon glyphicon-upload</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-inbox"></span>
      <span class="glyphicon-class">glyphicon glyphicon-inbox</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-play-circle"></span>
      <span class="glyphicon-class">glyphicon glyphicon-play-circle</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-repeat"></span>
      <span class="glyphicon-class">glyphicon glyphicon-repeat</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-refresh"></span>
      <span class="glyphicon-class">glyphicon glyphicon-refresh</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-list-alt"></span>
      <span class="glyphicon-class">glyphicon glyphicon-list-alt</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-lock"></span>
      <span class="glyphicon-class">glyphicon glyphicon-lock</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-flag"></span>
      <span class="glyphicon-class">glyphicon glyphicon-flag</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-headphones"></span>
      <span class="glyphicon-class">glyphicon glyphicon-headphones</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-volume-off"></span>
      <span class="glyphicon-class">glyphicon glyphicon-volume-off</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-volume-down"></span>
      <span class="glyphicon-class">glyphicon glyphicon-volume-down</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-volume-up"></span>
      <span class="glyphicon-class">glyphicon glyphicon-volume-up</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-qrcode"></span>
      <span class="glyphicon-class">glyphicon glyphicon-qrcode</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-barcode"></span>
      <span class="glyphicon-class">glyphicon glyphicon-barcode</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-tag"></span>
      <span class="glyphicon-class">glyphicon glyphicon-tag</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-tags"></span>
      <span class="glyphicon-class">glyphicon glyphicon-tags</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-book"></span>
      <span class="glyphicon-class">glyphicon glyphicon-book</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-bookmark"></span>
      <span class="glyphicon-class">glyphicon glyphicon-bookmark</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-print"></span>
      <span class="glyphicon-class">glyphicon glyphicon-print</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-camera"></span>
      <span class="glyphicon-class">glyphicon glyphicon-camera</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-font"></span>
      <span class="glyphicon-class">glyphicon glyphicon-font</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-bold"></span>
      <span class="glyphicon-class">glyphicon glyphicon-bold</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-italic"></span>
      <span class="glyphicon-class">glyphicon glyphicon-italic</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-text-height"></span>
      <span class="glyphicon-class">glyphicon glyphicon-text-height</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-text-width"></span>
      <span class="glyphicon-class">glyphicon glyphicon-text-width</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-align-left"></span>
      <span class="glyphicon-class">glyphicon glyphicon-align-left</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-align-center"></span>
      <span class="glyphicon-class">glyphicon glyphicon-align-center</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-align-right"></span>
      <span class="glyphicon-class">glyphicon glyphicon-align-right</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-align-justify"></span>
      <span class="glyphicon-class">glyphicon glyphicon-align-justify</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-list"></span>
      <span class="glyphicon-class">glyphicon glyphicon-list</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-indent-left"></span>
      <span class="glyphicon-class">glyphicon glyphicon-indent-left</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-indent-right"></span>
      <span class="glyphicon-class">glyphicon glyphicon-indent-right</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-facetime-video"></span>
      <span class="glyphicon-class">glyphicon glyphicon-facetime-video</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-picture"></span>
      <span class="glyphicon-class">glyphicon glyphicon-picture</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-map-marker"></span>
      <span class="glyphicon-class">glyphicon glyphicon-map-marker</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-adjust"></span>
      <span class="glyphicon-class">glyphicon glyphicon-adjust</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-tint"></span>
      <span class="glyphicon-class">glyphicon glyphicon-tint</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-edit"></span>
      <span class="glyphicon-class">glyphicon glyphicon-edit</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-share"></span>
      <span class="glyphicon-class">glyphicon glyphicon-share</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-check"></span>
      <span class="glyphicon-class">glyphicon glyphicon-check</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-move"></span>
      <span class="glyphicon-class">glyphicon glyphicon-move</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-step-backward"></span>
      <span class="glyphicon-class">glyphicon glyphicon-step-backward</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-fast-backward"></span>
      <span class="glyphicon-class">glyphicon glyphicon-fast-backward</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-backward"></span>
      <span class="glyphicon-class">glyphicon glyphicon-backward</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-play"></span>
      <span class="glyphicon-class">glyphicon glyphicon-play</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-pause"></span>
      <span class="glyphicon-class">glyphicon glyphicon-pause</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-stop"></span>
      <span class="glyphicon-class">glyphicon glyphicon-stop</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-forward"></span>
      <span class="glyphicon-class">glyphicon glyphicon-forward</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-fast-forward"></span>
      <span class="glyphicon-class">glyphicon glyphicon-fast-forward</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-step-forward"></span>
      <span class="glyphicon-class">glyphicon glyphicon-step-forward</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-eject"></span>
      <span class="glyphicon-class">glyphicon glyphicon-eject</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-chevron-left"></span>
      <span class="glyphicon-class">glyphicon glyphicon-chevron-left</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-chevron-right"></span>
      <span class="glyphicon-class">glyphicon glyphicon-chevron-right</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-plus-sign"></span>
      <span class="glyphicon-class">glyphicon glyphicon-plus-sign</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-minus-sign"></span>
      <span class="glyphicon-class">glyphicon glyphicon-minus-sign</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-remove-sign"></span>
      <span class="glyphicon-class">glyphicon glyphicon-remove-sign</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-ok-sign"></span>
      <span class="glyphicon-class">glyphicon glyphicon-ok-sign</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-question-sign"></span>
      <span class="glyphicon-class">glyphicon glyphicon-question-sign</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-info-sign"></span>
      <span class="glyphicon-class">glyphicon glyphicon-info-sign</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-screenshot"></span>
      <span class="glyphicon-class">glyphicon glyphicon-screenshot</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-remove-circle"></span>
      <span class="glyphicon-class">glyphicon glyphicon-remove-circle</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-ok-circle"></span>
      <span class="glyphicon-class">glyphicon glyphicon-ok-circle</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-ban-circle"></span>
      <span class="glyphicon-class">glyphicon glyphicon-ban-circle</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-arrow-left"></span>
      <span class="glyphicon-class">glyphicon glyphicon-arrow-left</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-arrow-right"></span>
      <span class="glyphicon-class">glyphicon glyphicon-arrow-right</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-arrow-up"></span>
      <span class="glyphicon-class">glyphicon glyphicon-arrow-up</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-arrow-down"></span>
      <span class="glyphicon-class">glyphicon glyphicon-arrow-down</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-share-alt"></span>
      <span class="glyphicon-class">glyphicon glyphicon-share-alt</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-resize-full"></span>
      <span class="glyphicon-class">glyphicon glyphicon-resize-full</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-resize-small"></span>
      <span class="glyphicon-class">glyphicon glyphicon-resize-small</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-exclamation-sign"></span>
      <span class="glyphicon-class">glyphicon glyphicon-exclamation-sign</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-gift"></span>
      <span class="glyphicon-class">glyphicon glyphicon-gift</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-leaf"></span>
      <span class="glyphicon-class">glyphicon glyphicon-leaf</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-fire"></span>
      <span class="glyphicon-class">glyphicon glyphicon-fire</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-eye-open"></span>
      <span class="glyphicon-class">glyphicon glyphicon-eye-open</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-eye-close"></span>
      <span class="glyphicon-class">glyphicon glyphicon-eye-close</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-warning-sign"></span>
      <span class="glyphicon-class">glyphicon glyphicon-warning-sign</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-plane"></span>
      <span class="glyphicon-class">glyphicon glyphicon-plane</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-calendar"></span>
      <span class="glyphicon-class">glyphicon glyphicon-calendar</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-random"></span>
      <span class="glyphicon-class">glyphicon glyphicon-random</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-comment"></span>
      <span class="glyphicon-class">glyphicon glyphicon-comment</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-magnet"></span>
      <span class="glyphicon-class">glyphicon glyphicon-magnet</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-chevron-up"></span>
      <span class="glyphicon-class">glyphicon glyphicon-chevron-up</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-chevron-down"></span>
      <span class="glyphicon-class">glyphicon glyphicon-chevron-down</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-retweet"></span>
      <span class="glyphicon-class">glyphicon glyphicon-retweet</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span>
      <span class="glyphicon-class">glyphicon glyphicon-shopping-cart</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-folder-close"></span>
      <span class="glyphicon-class">glyphicon glyphicon-folder-close</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-folder-open"></span>
      <span class="glyphicon-class">glyphicon glyphicon-folder-open</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-resize-vertical"></span>
      <span class="glyphicon-class">glyphicon glyphicon-resize-vertical</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-resize-horizontal"></span>
      <span class="glyphicon-class">glyphicon glyphicon-resize-horizontal</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-hdd"></span>
      <span class="glyphicon-class">glyphicon glyphicon-hdd</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-bullhorn"></span>
      <span class="glyphicon-class">glyphicon glyphicon-bullhorn</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-bell"></span>
      <span class="glyphicon-class">glyphicon glyphicon-bell</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-certificate"></span>
      <span class="glyphicon-class">glyphicon glyphicon-certificate</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-thumbs-up"></span>
      <span class="glyphicon-class">glyphicon glyphicon-thumbs-up</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-thumbs-down"></span>
      <span class="glyphicon-class">glyphicon glyphicon-thumbs-down</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-hand-right"></span>
      <span class="glyphicon-class">glyphicon glyphicon-hand-right</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-hand-left"></span>
      <span class="glyphicon-class">glyphicon glyphicon-hand-left</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-hand-up"></span>
      <span class="glyphicon-class">glyphicon glyphicon-hand-up</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-hand-down"></span>
      <span class="glyphicon-class">glyphicon glyphicon-hand-down</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-circle-arrow-right"></span>
      <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-right</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-circle-arrow-left"></span>
      <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-left</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-circle-arrow-up"></span>
      <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-up</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-circle-arrow-down"></span>
      <span class="glyphicon-class">glyphicon glyphicon-circle-arrow-down</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-globe"></span>
      <span class="glyphicon-class">glyphicon glyphicon-globe</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-wrench"></span>
      <span class="glyphicon-class">glyphicon glyphicon-wrench</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-tasks"></span>
      <span class="glyphicon-class">glyphicon glyphicon-tasks</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-filter"></span>
      <span class="glyphicon-class">glyphicon glyphicon-filter</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-briefcase"></span>
      <span class="glyphicon-class">glyphicon glyphicon-briefcase</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-fullscreen"></span>
      <span class="glyphicon-class">glyphicon glyphicon-fullscreen</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-dashboard"></span>
      <span class="glyphicon-class">glyphicon glyphicon-dashboard</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-paperclip"></span>
      <span class="glyphicon-class">glyphicon glyphicon-paperclip</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-heart-empty"></span>
      <span class="glyphicon-class">glyphicon glyphicon-heart-empty</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-link"></span>
      <span class="glyphicon-class">glyphicon glyphicon-link</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-phone"></span>
      <span class="glyphicon-class">glyphicon glyphicon-phone</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-pushpin"></span>
      <span class="glyphicon-class">glyphicon glyphicon-pushpin</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-usd"></span>
      <span class="glyphicon-class">glyphicon glyphicon-usd</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-gbp"></span>
      <span class="glyphicon-class">glyphicon glyphicon-gbp</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-sort"></span>
      <span class="glyphicon-class">glyphicon glyphicon-sort</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-sort-by-alphabet"></span>
      <span class="glyphicon-class">glyphicon glyphicon-sort-by-alphabet</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-sort-by-alphabet-alt"></span>
      <span class="glyphicon-class">glyphicon glyphicon-sort-by-alphabet-alt</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-sort-by-order"></span>
      <span class="glyphicon-class">glyphicon glyphicon-sort-by-order</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-sort-by-order-alt"></span>
      <span class="glyphicon-class">glyphicon glyphicon-sort-by-order-alt</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-sort-by-attributes"></span>
      <span class="glyphicon-class">glyphicon glyphicon-sort-by-attributes</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-sort-by-attributes-alt"></span>
      <span class="glyphicon-class">glyphicon glyphicon-sort-by-attributes-alt</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-unchecked"></span>
      <span class="glyphicon-class">glyphicon glyphicon-unchecked</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-expand"></span>
      <span class="glyphicon-class">glyphicon glyphicon-expand</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-collapse-down"></span>
      <span class="glyphicon-class">glyphicon glyphicon-collapse-down</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-collapse-up"></span>
      <span class="glyphicon-class">glyphicon glyphicon-collapse-up</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
      <span class="glyphicon-class">glyphicon glyphicon-log-in</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-flash"></span>
      <span class="glyphicon-class">glyphicon glyphicon-flash</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-log-out"></span>
      <span class="glyphicon-class">glyphicon glyphicon-log-out</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-new-window"></span>
      <span class="glyphicon-class">glyphicon glyphicon-new-window</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-record"></span>
      <span class="glyphicon-class">glyphicon glyphicon-record</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-save"></span>
      <span class="glyphicon-class">glyphicon glyphicon-save</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-open"></span>
      <span class="glyphicon-class">glyphicon glyphicon-open</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-saved"></span>
      <span class="glyphicon-class">glyphicon glyphicon-saved</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-import"></span>
      <span class="glyphicon-class">glyphicon glyphicon-import</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-export"></span>
      <span class="glyphicon-class">glyphicon glyphicon-export</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-send"></span>
      <span class="glyphicon-class">glyphicon glyphicon-send</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-floppy-disk"></span>
      <span class="glyphicon-class">glyphicon glyphicon-floppy-disk</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-floppy-saved"></span>
      <span class="glyphicon-class">glyphicon glyphicon-floppy-saved</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-floppy-remove"></span>
      <span class="glyphicon-class">glyphicon glyphicon-floppy-remove</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-floppy-save"></span>
      <span class="glyphicon-class">glyphicon glyphicon-floppy-save</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-floppy-open"></span>
      <span class="glyphicon-class">glyphicon glyphicon-floppy-open</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-credit-card"></span>
      <span class="glyphicon-class">glyphicon glyphicon-credit-card</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-transfer"></span>
      <span class="glyphicon-class">glyphicon glyphicon-transfer</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-cutlery"></span>
      <span class="glyphicon-class">glyphicon glyphicon-cutlery</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-header"></span>
      <span class="glyphicon-class">glyphicon glyphicon-header</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-compressed"></span>
      <span class="glyphicon-class">glyphicon glyphicon-compressed</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-earphone"></span>
      <span class="glyphicon-class">glyphicon glyphicon-earphone</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-phone-alt"></span>
      <span class="glyphicon-class">glyphicon glyphicon-phone-alt</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-tower"></span>
      <span class="glyphicon-class">glyphicon glyphicon-tower</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-stats"></span>
      <span class="glyphicon-class">glyphicon glyphicon-stats</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-sd-video"></span>
      <span class="glyphicon-class">glyphicon glyphicon-sd-video</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-hd-video"></span>
      <span class="glyphicon-class">glyphicon glyphicon-hd-video</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-subtitles"></span>
      <span class="glyphicon-class">glyphicon glyphicon-subtitles</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-sound-stereo"></span>
      <span class="glyphicon-class">glyphicon glyphicon-sound-stereo</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-sound-dolby"></span>
      <span class="glyphicon-class">glyphicon glyphicon-sound-dolby</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-sound-5-1"></span>
      <span class="glyphicon-class">glyphicon glyphicon-sound-5-1</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-sound-6-1"></span>
      <span class="glyphicon-class">glyphicon glyphicon-sound-6-1</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-sound-7-1"></span>
      <span class="glyphicon-class">glyphicon glyphicon-sound-7-1</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-copyright-mark"></span>
      <span class="glyphicon-class">glyphicon glyphicon-copyright-mark</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-registration-mark"></span>
      <span class="glyphicon-class">glyphicon glyphicon-registration-mark</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-cloud-download"></span>
      <span class="glyphicon-class">glyphicon glyphicon-cloud-download</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-cloud-upload"></span>
      <span class="glyphicon-class">glyphicon glyphicon-cloud-upload</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-tree-conifer"></span>
      <span class="glyphicon-class">glyphicon glyphicon-tree-conifer</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-tree-deciduous"></span>
      <span class="glyphicon-class">glyphicon glyphicon-tree-deciduous</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-cd"></span>
      <span class="glyphicon-class">glyphicon glyphicon-cd</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-save-file"></span>
      <span class="glyphicon-class">glyphicon glyphicon-save-file</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-open-file"></span>
      <span class="glyphicon-class">glyphicon glyphicon-open-file</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-level-up"></span>
      <span class="glyphicon-class">glyphicon glyphicon-level-up</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-copy"></span>
      <span class="glyphicon-class">glyphicon glyphicon-copy</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-paste"></span>
      <span class="glyphicon-class">glyphicon glyphicon-paste</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-alert"></span>
      <span class="glyphicon-class">glyphicon glyphicon-alert</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-equalizer"></span>
      <span class="glyphicon-class">glyphicon glyphicon-equalizer</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-king"></span>
      <span class="glyphicon-class">glyphicon glyphicon-king</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-queen"></span>
      <span class="glyphicon-class">glyphicon glyphicon-queen</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-pawn"></span>
      <span class="glyphicon-class">glyphicon glyphicon-pawn</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-bishop"></span>
      <span class="glyphicon-class">glyphicon glyphicon-bishop</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-knight"></span>
      <span class="glyphicon-class">glyphicon glyphicon-knight</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-baby-formula"></span>
      <span class="glyphicon-class">glyphicon glyphicon-baby-formula</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-tent"></span>
      <span class="glyphicon-class">glyphicon glyphicon-tent</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-blackboard"></span>
      <span class="glyphicon-class">glyphicon glyphicon-blackboard</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-bed"></span>
      <span class="glyphicon-class">glyphicon glyphicon-bed</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-apple"></span>
      <span class="glyphicon-class">glyphicon glyphicon-apple</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-erase"></span>
      <span class="glyphicon-class">glyphicon glyphicon-erase</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-hourglass"></span>
      <span class="glyphicon-class">glyphicon glyphicon-hourglass</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-lamp"></span>
      <span class="glyphicon-class">glyphicon glyphicon-lamp</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-duplicate"></span>
      <span class="glyphicon-class">glyphicon glyphicon-duplicate</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-piggy-bank"></span>
      <span class="glyphicon-class">glyphicon glyphicon-piggy-bank</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-scissors"></span>
      <span class="glyphicon-class">glyphicon glyphicon-scissors</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-bitcoin"></span>
      <span class="glyphicon-class">glyphicon glyphicon-bitcoin</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-yen"></span>
      <span class="glyphicon-class">glyphicon glyphicon-yen</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-ruble"></span>
      <span class="glyphicon-class">glyphicon glyphicon-ruble</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-scale"></span>
      <span class="glyphicon-class">glyphicon glyphicon-scale</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-ice-lolly"></span>
      <span class="glyphicon-class">glyphicon glyphicon-ice-lolly</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-ice-lolly-tasted"></span>
      <span class="glyphicon-class">glyphicon glyphicon-ice-lolly-tasted</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-education"></span>
      <span class="glyphicon-class">glyphicon glyphicon-education</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-option-horizontal"></span>
      <span class="glyphicon-class">glyphicon glyphicon-option-horizontal</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-option-vertical"></span>
      <span class="glyphicon-class">glyphicon glyphicon-option-vertical</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-menu-hamburger"></span>
      <span class="glyphicon-class">glyphicon glyphicon-menu-hamburger</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-modal-window"></span>
      <span class="glyphicon-class">glyphicon glyphicon-modal-window</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-oil"></span>
      <span class="glyphicon-class">glyphicon glyphicon-oil</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-grain"></span>
      <span class="glyphicon-class">glyphicon glyphicon-grain</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-sunglasses"></span>
      <span class="glyphicon-class">glyphicon glyphicon-sunglasses</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-text-size"></span>
      <span class="glyphicon-class">glyphicon glyphicon-text-size</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-text-color"></span>
      <span class="glyphicon-class">glyphicon glyphicon-text-color</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-text-background"></span>
      <span class="glyphicon-class">glyphicon glyphicon-text-background</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-object-align-top"></span>
      <span class="glyphicon-class">glyphicon glyphicon-object-align-top</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-object-align-bottom"></span>
      <span class="glyphicon-class">glyphicon glyphicon-object-align-bottom</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-object-align-horizontal"></span>
      <span class="glyphicon-class">glyphicon glyphicon-object-align-horizontal</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-object-align-left"></span>
      <span class="glyphicon-class">glyphicon glyphicon-object-align-left</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-object-align-vertical"></span>
      <span class="glyphicon-class">glyphicon glyphicon-object-align-vertical</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-object-align-right"></span>
      <span class="glyphicon-class">glyphicon glyphicon-object-align-right</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-triangle-right"></span>
      <span class="glyphicon-class">glyphicon glyphicon-triangle-right</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-triangle-left"></span>
      <span class="glyphicon-class">glyphicon glyphicon-triangle-left</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-triangle-bottom"></span>
      <span class="glyphicon-class">glyphicon glyphicon-triangle-bottom</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-triangle-top"></span>
      <span class="glyphicon-class">glyphicon glyphicon-triangle-top</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-console"></span>
      <span class="glyphicon-class">glyphicon glyphicon-console</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-superscript"></span>
      <span class="glyphicon-class">glyphicon glyphicon-superscript</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-subscript"></span>
      <span class="glyphicon-class">glyphicon glyphicon-subscript</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-menu-left"></span>
      <span class="glyphicon-class">glyphicon glyphicon-menu-left</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-menu-right"></span>
      <span class="glyphicon-class">glyphicon glyphicon-menu-right</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-menu-down"></span>
      <span class="glyphicon-class">glyphicon glyphicon-menu-down</span>
    </li>

    <li>
      <span aria-hidden="true" class="glyphicon glyphicon-menu-up"></span>
      <span class="glyphicon-class">glyphicon glyphicon-menu-up</span>
    </li>

  </ul>
</div>

<div data-example-id="glyphicons-accessibility" class="bs-example">
  <div role="alert" class="alert alert-danger">
    <span aria-hidden="true" class="glyphicon glyphicon-exclamation-sign"></span>
    <span class="sr-only">Error:</span>
    Enter a valid email address
  </div>
</div>

<div data-example-id="glyphicons-general" class="bs-example">
  <div role="toolbar" class="btn-toolbar">
    <div class="btn-group">
      <button aria-label="Left Align" class="btn btn-default" type="button"><span aria-hidden="true" class="glyphicon glyphicon-align-left"></span></button>
      <button aria-label="Center Align" class="btn btn-default" type="button"><span aria-hidden="true" class="glyphicon glyphicon-align-center"></span></button>
      <button aria-label="Right Align" class="btn btn-default" type="button"><span aria-hidden="true" class="glyphicon glyphicon-align-right"></span></button>
      <button aria-label="Justify" class="btn btn-default" type="button"><span aria-hidden="true" class="glyphicon glyphicon-align-justify"></span></button>
    </div>
  </div>
  <div role="toolbar" class="btn-toolbar">
    <button class="btn btn-default btn-lg" type="button"><span aria-hidden="true" class="glyphicon glyphicon-star"></span> Star</button>
    <button class="btn btn-default" type="button"><span aria-hidden="true" class="glyphicon glyphicon-star"></span> Star</button>
    <button class="btn btn-default btn-sm" type="button"><span aria-hidden="true" class="glyphicon glyphicon-star"></span> Star</button>
    <button class="btn btn-default btn-xs" type="button"><span aria-hidden="true" class="glyphicon glyphicon-star"></span> Star</button>
  </div>
</div>

<div data-example-id="static-dropdown" class="bs-example">
  <div class="dropdown clearfix">
    <button aria-expanded="true" data-toggle="dropdown" id="dropdownMenu1" type="button" class="btn btn-default dropdown-toggle">
      Dropdown
      <span class="caret"></span>
    </button>
    <ul aria-labelledby="dropdownMenu1" role="menu" class="dropdown-menu">
      <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Action</a></li>
      <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Another action</a></li>
      <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Something else here</a></li>
      <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Separated link</a></li>
    </ul>
  </div>
</div>

<div data-example-id="button-group-sizing" class="bs-example">
  <div aria-label="Large button group" role="group" class="btn-group btn-group-lg">
    <button class="btn btn-default" type="button">Left</button>
    <button class="btn btn-default" type="button">Middle</button>
    <button class="btn btn-default" type="button">Right</button>
  </div>
  <br>
  <div aria-label="Default button group" role="group" class="btn-group">
    <button class="btn btn-default" type="button">Left</button>
    <button class="btn btn-default" type="button">Middle</button>
    <button class="btn btn-default" type="button">Right</button>
  </div>
  <br>
  <div aria-label="Small button group" role="group" class="btn-group btn-group-sm">
    <button class="btn btn-default" type="button">Left</button>
    <button class="btn btn-default" type="button">Middle</button>
    <button class="btn btn-default" type="button">Right</button>
  </div>
  <br>
  <div aria-label="Extra-small button group" role="group" class="btn-group btn-group-xs">
    <button class="btn btn-default" type="button">Left</button>
    <button class="btn btn-default" type="button">Middle</button>
    <button class="btn btn-default" type="button">Right</button>
  </div>
</div>

<div data-example-id="simple-justified-button-group" class="bs-example">
  <div aria-label="Justified button group" role="group" class="btn-group btn-group-justified">
    <a role="button" class="btn btn-default" href="#">Left</a>
    <a role="button" class="btn btn-default" href="#">Middle</a>
    <a role="button" class="btn btn-default" href="#">Right</a>
  </div>
  <br>
  <div aria-label="Justified button group with nested dropdown" role="group" class="btn-group btn-group-justified">
    <a role="button" class="btn btn-default" href="#">Left</a>
    <a role="button" class="btn btn-default" href="#">Middle</a>
    <div role="group" class="btn-group">
      <a aria-expanded="false" role="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle" href="#">
        Dropdown <span class="caret"></span>
      </a>
      <ul role="menu" class="dropdown-menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </div>
  </div>
</div>

<div data-example-id="single-button-dropdown" class="bs-example">
  <div class="btn-group">
    <button aria-expanded="false" data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">Default <span class="caret"></span></button>
    <ul role="menu" class="dropdown-menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div><!-- /btn-group -->
  <div class="btn-group">
    <button aria-expanded="false" data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">Primary <span class="caret"></span></button>
    <ul role="menu" class="dropdown-menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div><!-- /btn-group -->
  <div class="btn-group">
    <button aria-expanded="false" data-toggle="dropdown" class="btn btn-success dropdown-toggle" type="button">Success <span class="caret"></span></button>
    <ul role="menu" class="dropdown-menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div><!-- /btn-group -->
  <div class="btn-group">
    <button aria-expanded="false" data-toggle="dropdown" class="btn btn-info dropdown-toggle" type="button">Info <span class="caret"></span></button>
    <ul role="menu" class="dropdown-menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div><!-- /btn-group -->
  <div class="btn-group">
    <button aria-expanded="false" data-toggle="dropdown" class="btn btn-warning dropdown-toggle" type="button">Warning <span class="caret"></span></button>
    <ul role="menu" class="dropdown-menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div><!-- /btn-group -->
  <div class="btn-group">
    <button aria-expanded="false" data-toggle="dropdown" class="btn btn-danger dropdown-toggle" type="button">Danger <span class="caret"></span></button>
    <ul role="menu" class="dropdown-menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div><!-- /btn-group -->
</div>

<div data-example-id="split-button-dropdown" class="bs-example">
  <div class="btn-group">
    <button class="btn btn-default" type="button">Default</button>
    <button aria-expanded="false" data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
      <span class="caret"></span>
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <ul role="menu" class="dropdown-menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div><!-- /btn-group -->
  <div class="btn-group">
    <button class="btn btn-primary" type="button">Primary</button>
    <button aria-expanded="false" data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">
      <span class="caret"></span>
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <ul role="menu" class="dropdown-menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div><!-- /btn-group -->
  <div class="btn-group">
    <button class="btn btn-success" type="button">Success</button>
    <button aria-expanded="false" data-toggle="dropdown" class="btn btn-success dropdown-toggle" type="button">
      <span class="caret"></span>
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <ul role="menu" class="dropdown-menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div><!-- /btn-group -->
  <div class="btn-group">
    <button class="btn btn-info" type="button">Info</button>
    <button aria-expanded="false" data-toggle="dropdown" class="btn btn-info dropdown-toggle" type="button">
      <span class="caret"></span>
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <ul role="menu" class="dropdown-menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div><!-- /btn-group -->
  <div class="btn-group">
    <button class="btn btn-warning" type="button">Warning</button>
    <button aria-expanded="false" data-toggle="dropdown" class="btn btn-warning dropdown-toggle" type="button">
      <span class="caret"></span>
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <ul role="menu" class="dropdown-menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div><!-- /btn-group -->
  <div class="btn-group">
    <button class="btn btn-danger" type="button">Danger</button>
    <button aria-expanded="false" data-toggle="dropdown" class="btn btn-danger dropdown-toggle" type="button">
      <span class="caret"></span>
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <ul role="menu" class="dropdown-menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul>
  </div><!-- /btn-group -->
</div>

<form data-example-id="input-group-sizing" class="bs-example bs-example-form">
  <div class="input-group input-group-lg">
    <span id="sizing-addon1" class="input-group-addon">@</span>
    <input type="text" aria-describedby="sizing-addon1" placeholder="Username" class="form-control">
  </div>
  <br>
  <div class="input-group">
    <span id="sizing-addon2" class="input-group-addon">@</span>
    <input type="text" aria-describedby="sizing-addon2" placeholder="Username" class="form-control">
  </div>
  <br>
  <div class="input-group input-group-sm">
    <span id="sizing-addon3" class="input-group-addon">@</span>
    <input type="text" aria-describedby="sizing-addon3" placeholder="Username" class="form-control">
  </div>
</form>

<form data-example-id="input-group-with-button" class="bs-example bs-example-form">
  <div class="row">
    <div class="col-lg-6">
      <div class="input-group">
        <span class="input-group-btn">
          <button type="button" class="btn btn-default">Go!</button>
        </span>
        <input type="text" placeholder="Search for..." class="form-control">
      </div><!-- /input-group -->
    </div><!-- /.col-lg-6 -->
    <div class="col-lg-6">
      <div class="input-group">
        <input type="text" placeholder="Search for..." class="form-control">
        <span class="input-group-btn">
          <button type="button" class="btn btn-default">Go!</button>
        </span>
      </div><!-- /input-group -->
    </div><!-- /.col-lg-6 -->
  </div><!-- /.row -->
</form>

<div data-example-id="simple-nav-tabs" class="bs-example">
  <ul class="nav nav-tabs">
    <li class="active" role="presentation"><a href="#">Home</a></li>
    <li role="presentation"><a href="#">Profile</a></li>
    <li role="presentation"><a href="#">Messages</a></li>
  </ul>
</div>

<div data-example-id="nav-tabs-with-dropdown" class="bs-example">
  <ul class="nav nav-tabs">
    <li class="active" role="presentation"><a href="#">Home</a></li>
    <li role="presentation"><a href="#">Help</a></li>
    <li class="dropdown" role="presentation">
      <a aria-expanded="false" role="button" href="#" data-toggle="dropdown" class="dropdown-toggle">
        Dropdown <span class="caret"></span>
      </a>
      <ul role="menu" class="dropdown-menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </li>
  </ul>
</div>

<div data-example-id="default-navbar" class="bs-example">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <span class="caret"></span></a>
              <ul role="menu" class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <form role="search" class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" placeholder="Search" class="form-control">
            </div>
            <button class="btn btn-default" type="submit">Submit</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <span class="caret"></span></a>
              <ul role="menu" class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
</div>

<div data-example-id="navbar-form" class="bs-example">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button data-target="#bs-example-navbar-collapse-2" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand">Brand</a>
        </div>
        <div id="bs-example-navbar-collapse-2" class="collapse navbar-collapse">
          <form role="search" class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" placeholder="Search" class="form-control">
            </div>
            <button class="btn btn-default" type="submit">Submit</button>
          </form>
        </div>
      </div>
    </nav>
</div>

<div data-example-id="simple-breadcrumbs" class="bs-example">
    <ol class="breadcrumb">
      <li class="active">Home</li>
    </ol>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="active">Library</li>
    </ol>
    <ol style="margin-bottom: 5px;" class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><a href="#">Library</a></li>
      <li class="active">Data</li>
    </ol>
</div>

<div data-example-id="disabled-active-pagination" class="bs-example">
    <nav>
      <ul class="pagination">
        <li class="disabled"><a aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
     </ul>
   </nav>
</div>

<div data-example-id="aligned-pager-links" class="bs-example">
    <nav>
      <ul class="pager">
        <li class="previous"><a href="#"><span aria-hidden="true">←</span> Older</a></li>
        <li class="next"><a href="#">Newer <span aria-hidden="true">→</span></a></li>
      </ul>
    </nav>
</div>

<div data-example-id="labels-in-headings" class="bs-example">
    <h1>Example heading <span class="label label-default">New</span></h1>
    <h2>Example heading <span class="label label-default">New</span></h2>
    <h3>Example heading <span class="label label-default">New</span></h3>
    <h4>Example heading <span class="label label-default">New</span></h4>
    <h5>Example heading <span class="label label-default">New</span></h5>
    <h6>Example heading <span class="label label-default">New</span></h6>
</div>

<div data-example-id="label-variants" class="bs-example">
    <span class="label label-default">Default</span>
    <span class="label label-primary">Primary</span>
    <span class="label label-success">Success</span>
    <span class="label label-info">Info</span>
    <span class="label label-warning">Warning</span>
    <span class="label label-danger">Danger</span>
</div>

<div data-example-id="badges-in-pills" class="bs-example">
    <ul role="tablist" class="nav nav-pills">
      <li class="active" role="presentation"><a href="#">Home <span class="badge">42</span></a></li>
      <li role="presentation"><a href="#">Profile</a></li>
      <li role="presentation"><a href="#">Messages <span class="badge">3</span></a></li>
    </ul>
</div>

<div data-example-id="simple-jumbotron" class="bs-example">
    <div class="jumbotron">
      <h1>Hello, world!</h1>
      <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <p><a role="button" href="#" class="btn btn-primary btn-lg">Learn more</a></p>
    </div>
</div>

<div data-example-id="simple-page-header" class="bs-example">
    <div class="page-header">
      <h1>Example page header <small>Subtext for header</small></h1>
    </div>
</div>

<div data-example-id="simple-thumbnails" class="bs-example">
    <div class="row">
      <div class="col-xs-6 col-md-3">
        <a class="thumbnail" href="#">
          <img alt="100%x180" data-src="holder.js/100%x180" style="height: 180px; width: 100%; display: block;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjYxIiB5PSI5MCIgc3R5bGU9ImZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0O2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjE3MXgxODA8L3RleHQ+PC9nPjwvc3ZnPg==" data-holder-rendered="true">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a class="thumbnail" href="#">
          <img alt="100%x180" data-src="holder.js/100%x180" style="height: 180px; width: 100%; display: block;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjYxIiB5PSI5MCIgc3R5bGU9ImZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0O2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjE3MXgxODA8L3RleHQ+PC9nPjwvc3ZnPg==" data-holder-rendered="true">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a class="thumbnail" href="#">
          <img alt="100%x180" data-src="holder.js/100%x180" style="height: 180px; width: 100%; display: block;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjYxIiB5PSI5MCIgc3R5bGU9ImZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0O2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjE3MXgxODA8L3RleHQ+PC9nPjwvc3ZnPg==" data-holder-rendered="true">
        </a>
      </div>
      <div class="col-xs-6 col-md-3">
        <a class="thumbnail" href="#">
          <img alt="100%x180" data-src="holder.js/100%x180" style="height: 180px; width: 100%; display: block;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjYxIiB5PSI5MCIgc3R5bGU9ImZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0O2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjE3MXgxODA8L3RleHQ+PC9nPjwvc3ZnPg==" data-holder-rendered="true">
        </a>
      </div>
    </div>
</div>

<div data-example-id="thumbnails-with-custom-content" class="bs-example">
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img alt="100%x200" data-src="holder.js/100%x200" style="height: 200px; width: 100%; display: block;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjkzIiB5PSIxMDAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTFwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4yNDJ4MjAwPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a role="button" class="btn btn-primary" href="#">Button</a> <a role="button" class="btn btn-default" href="#">Button</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img alt="100%x200" data-src="holder.js/100%x200" style="height: 200px; width: 100%; display: block;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjkzIiB5PSIxMDAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTFwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4yNDJ4MjAwPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a role="button" class="btn btn-primary" href="#">Button</a> <a role="button" class="btn btn-default" href="#">Button</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img alt="100%x200" data-src="holder.js/100%x200" style="height: 200px; width: 100%; display: block;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjkzIiB5PSIxMDAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTFwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4yNDJ4MjAwPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true">
          <div class="caption">
            <h3>Thumbnail label</h3>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a role="button" class="btn btn-primary" href="#">Button</a> <a role="button" class="btn btn-default" href="#">Button</a></p>
          </div>
        </div>
      </div>
    </div>
</div>

<div data-example-id="alerts-with-links" class="bs-example">
    <div role="alert" class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Well done!</strong> You successfully read <a class="alert-link" href="#">this important alert message</a>.
    </div>
    <div role="alert" class="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Heads up!</strong> This <a class="alert-link" href="#">alert needs your attention</a>, but it's not super important.
    </div>
    <div role="alert" class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Warning!</strong> Better check yourself, you're <a class="alert-link" href="#">not looking too good</a>.
    </div>
    <div role="alert" class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Oh snap!</strong> <a class="alert-link" href="#">Change a few things up</a> and try submitting again.
    </div>
</div>

<div data-example-id="progress-bar-with-label" class="bs-example">
    <div class="progress">
      <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar">
        60%
      </div>
    </div>
</div>

<div data-example-id="striped-progress-bar" class="bs-example">
    <div class="progress">
      <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success progress-bar-striped">
        <span class="sr-only">40% Complete (success)</span>
      </div>
    </div>
    <div class="progress">
      <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-info progress-bar-striped">
        <span class="sr-only">20% Complete</span>
      </div>
    </div>
    <div class="progress">
      <div style="width: 60%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-warning progress-bar-striped">
        <span class="sr-only">60% Complete (warning)</span>
      </div>
    </div>
    <div class="progress">
      <div style="width: 80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-danger progress-bar-striped">
        <span class="sr-only">80% Complete (danger)</span>
      </div>
    </div>
</div>

<div data-example-id="stacked-progress-bar" class="bs-example">
    <div class="progress">
      <div style="width: 35%" class="progress-bar progress-bar-success">
        <span class="sr-only">35% Complete (success)</span>
      </div>
      <div style="width: 20%" class="progress-bar progress-bar-warning progress-bar-striped">
        <span class="sr-only">20% Complete (warning)</span>
      </div>
      <div style="width: 10%" class="progress-bar progress-bar-danger">
        <span class="sr-only">10% Complete (danger)</span>
      </div>
    </div>
</div>

<div data-example-id="animated-progress-bar" class="bs-example">
    <div class="progress">
      <div style="width: 45%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="progress-bar progress-bar-striped active"><span class="sr-only">45% Complete</span></div>
    </div>
</div>

<div data-example-id="default-media" class="bs-example">
    <div class="media">
      <div class="media-left">
        <a href="#">
          <img alt="64x64" data-src="holder.js/64x64" class="media-object" style="width: 64px; height: 64px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PGRlZnMvPjxyZWN0IHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjE0LjUiIHk9IjMyIiBzdHlsZT0iZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9nPjwvc3ZnPg==" data-holder-rendered="true">
        </a>
      </div>
      <div class="media-body">
        <h4 class="media-heading">Media heading</h4>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
      </div>
    </div>
    <div class="media">
      <div class="media-left">
        <a href="#">
          <img alt="64x64" data-src="holder.js/64x64" class="media-object" style="width: 64px; height: 64px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PGRlZnMvPjxyZWN0IHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjE0LjUiIHk9IjMyIiBzdHlsZT0iZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9nPjwvc3ZnPg==" data-holder-rendered="true">
        </a>
      </div>
      <div class="media-body">
        <h4 class="media-heading">Media heading</h4>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
        <div class="media">
          <div class="media-left">
            <a href="#">
              <img alt="64x64" data-src="holder.js/64x64" class="media-object" style="width: 64px; height: 64px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PGRlZnMvPjxyZWN0IHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjE0LjUiIHk9IjMyIiBzdHlsZT0iZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9nPjwvc3ZnPg==" data-holder-rendered="true">
            </a>
          </div>
          <div class="media-body">
            <h4 class="media-heading">Nested media heading</h4>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
        </div>
      </div>
    </div>
    <div class="media">
      <div class="media-body">
        <h4 class="media-heading">Media heading</h4>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
      </div>
      <div class="media-right">
        <a href="#">
          <img alt="64x64" data-src="holder.js/64x64" class="media-object" style="width: 64px; height: 64px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PGRlZnMvPjxyZWN0IHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjE0LjUiIHk9IjMyIiBzdHlsZT0iZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9nPjwvc3ZnPg==" data-holder-rendered="true">
        </a>
      </div>
    </div>
    <div class="media">
      <div class="media-left">
        <a href="#">
          <img alt="64x64" data-src="holder.js/64x64" class="media-object" style="width: 64px; height: 64px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PGRlZnMvPjxyZWN0IHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjE0LjUiIHk9IjMyIiBzdHlsZT0iZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9nPjwvc3ZnPg==" data-holder-rendered="true">
        </a>
      </div>
      <div class="media-body">
        <h4 class="media-heading">Media heading</h4>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
      </div>
      <div class="media-right">
        <a href="#">
          <img alt="64x64" data-src="holder.js/64x64" class="media-object" style="width: 64px; height: 64px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PGRlZnMvPjxyZWN0IHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjE0LjUiIHk9IjMyIiBzdHlsZT0iZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9nPjwvc3ZnPg==" data-holder-rendered="true">
        </a>
      </div>
    </div>
</div>

<div data-example-id="list-group-badges" class="bs-example">
    <ul class="list-group">
      <li class="list-group-item">
        <span class="badge">14</span>
        Cras justo odio
      </li>
      <li class="list-group-item">
        <span class="badge">2</span>
        Dapibus ac facilisis in
      </li>
      <li class="list-group-item">
        <span class="badge">1</span>
        Morbi leo risus
      </li>
    </ul>
</div>

<div data-example-id="list-group-variants" class="bs-example">
    <div class="row">
      <div class="col-sm-6">
        <ul class="list-group">
          <li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
          <li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
          <li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
          <li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
        </ul>
      </div>
      <div class="col-sm-6">
        <div class="list-group">
          <a class="list-group-item list-group-item-success" href="#">Dapibus ac facilisis in</a>
          <a class="list-group-item list-group-item-info" href="#">Cras sit amet nibh libero</a>
          <a class="list-group-item list-group-item-warning" href="#">Porta ac consectetur ac</a>
          <a class="list-group-item list-group-item-danger" href="#">Vestibulum at eros</a>
        </div>
      </div>
    </div>
</div>

<div data-example-id="contextual-panels" class="bs-example">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Panel title</h3>
      </div>
      <div class="panel-body">
        Panel content
      </div>
    </div>
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Panel title</h3>
      </div>
      <div class="panel-body">
        Panel content
      </div>
    </div>
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Panel title</h3>
      </div>
      <div class="panel-body">
        Panel content
      </div>
    </div>
    <div class="panel panel-warning">
      <div class="panel-heading">
        <h3 class="panel-title">Panel title</h3>
      </div>
      <div class="panel-body">
        Panel content
      </div>
    </div>
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h3 class="panel-title">Panel title</h3>
      </div>
      <div class="panel-body">
        Panel content
      </div>
    </div>
</div>

<div data-example-id="panel-without-body-with-table" class="bs-example">
    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Panel heading</div>

      <!-- Table -->
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </div>
</div>

<div data-example-id="responsive-embed-16by9-iframe-youtube" class="bs-example">
    <div class="embed-responsive embed-responsive-16by9">
      <iframe allowfullscreen="" src="//www.youtube.com/embed/zpOULjyy-n8?rel=0" class="embed-responsive-item"></iframe>
    </div>
</div>

<div data-example-id="large-well" class="bs-example">
    <div class="well well-lg">
      Look, I'm in a large well!
    </div>
</div>

<div data-example-id="static-modal" class="bs-example bs-example-modal">
    <div class="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">
            <p>One fine body…</p>
          </div>
          <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
            <button class="btn btn-primary" type="button">Save changes</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>

<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" class="modal fade" id="myModal" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
          <h4 id="myModalLabel" class="modal-title">Modal title</h4>
        </div>
        <div class="modal-body">
          <h4>Text in a modal</h4>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>

          <h4>Popover in a modal</h4>
          <p>This <a data-content="And here's some amazing content. It's very engaging. right?" title="" class="btn btn-default popover-test" role="button" href="#" data-original-title="A Title">button</a> should trigger a popover on click.</p>

          <h4>Tooltips in a modal</h4>
          <p><a title="" class="tooltip-test" href="#" data-original-title="Tooltip">This link</a> and <a title="" class="tooltip-test" href="#" data-original-title="Tooltip">that link</a> should have tooltips on hover.</p>

          <hr>

          <h4>Overflowing text to show scroll behavior</h4>
          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
        </div>
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
          <button class="btn btn-primary" type="button">Save changes</button>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<div style="padding-bottom: 24px;" class="bs-example">
    <button data-target="#myModal" data-toggle="modal" class="btn btn-primary btn-lg" type="button">
      Launch demo modal
    </button>
</div>

<div data-example-id="embedded-scrollspy" class="bs-example">
    <nav class="navbar navbar-default navbar-static" id="navbar-example2">
      <div class="container-fluid">
        <div class="navbar-header">
          <button data-target=".bs-example-js-navbar-scrollspy" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand">Project Name</a>
        </div>
        <div class="collapse navbar-collapse bs-example-js-navbar-scrollspy">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#fat">@fat</a></li>
            <li class=""><a href="#mdo">@mdo</a></li>
            <li class="dropdown">
              <a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" id="navbarDrop1" href="#">Dropdown <span class="caret"></span></a>
              <ul aria-labelledby="navbarDrop1" role="menu" class="dropdown-menu">
                <li class=""><a tabindex="-1" href="#one">one</a></li>
                <li><a tabindex="-1" href="#two">two</a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="#three">three</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="scrollspy-example" data-offset="0" data-target="#navbar-example2" data-spy="scroll">
      <h4 id="fat">@fat</h4>
      <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
      <h4 id="mdo">@mdo</h4>
      <p>Veniam marfa mustache skateboard, adipisicing fugiat velit pitchfork beard. Freegan beard aliqua cupidatat mcsweeney's vero. Cupidatat four loko nisi, ea helvetica nulla carles. Tattooed cosby sweater food truck, mcsweeney's quis non freegan vinyl. Lo-fi wes anderson +1 sartorial. Carles non aesthetic exercitation quis gentrify. Brooklyn adipisicing craft beer vice keytar deserunt.</p>
      <h4 id="one">one</h4>
      <p>Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.</p>
      <h4 id="two">two</h4>
      <p>In incididunt echo park, officia deserunt mcsweeney's proident master cleanse thundercats sapiente veniam. Excepteur VHS elit, proident shoreditch +1 biodiesel laborum craft beer. Single-origin coffee wayfarers irure four loko, cupidatat terry richardson master cleanse. Assumenda you probably haven't heard of them art party fanny pack, tattooed nulla cardigan tempor ad. Proident wolf nesciunt sartorial keffiyeh eu banh mi sustainable. Elit wolf voluptate, lo-fi ea portland before they sold out four loko. Locavore enim nostrud mlkshk brooklyn nesciunt.</p>
      <h4 id="three">three</h4>
      <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
      <p>Keytar twee blog, culpa messenger bag marfa whatever delectus food truck. Sapiente synth id assumenda. Locavore sed helvetica cliche irony, thundercats you probably haven't heard of them consequat hoodie gluten-free lo-fi fap aliquip. Labore elit placeat before they sold out, terry richardson proident brunch nesciunt quis cosby sweater pariatur keffiyeh ut helvetica artisan. Cardigan craft beer seitan readymade velit. VHS chambray laboris tempor veniam. Anim mollit minim commodo ullamco thundercats.
      </p>
    </div>
</div>

<div data-example-id="togglable-tabs" role="tabpanel" class="bs-example bs-example-tabs">
    <ul role="tablist" class="nav nav-tabs" id="myTab">
      <li class="" role="presentation"><a aria-expanded="false" aria-controls="home" data-toggle="tab" role="tab" id="home-tab" href="#home">Home</a></li>
      <li role="presentation" class="active"><a aria-controls="profile" data-toggle="tab" id="profile-tab" role="tab" href="#profile" aria-expanded="true">Profile</a></li>
      <li class="dropdown" role="presentation">
        <a aria-controls="myTabDrop1-contents" data-toggle="dropdown" class="dropdown-toggle" id="myTabDrop1" href="#" aria-expanded="false">Dropdown <span class="caret"></span></a>
        <ul id="myTabDrop1-contents" aria-labelledby="myTabDrop1" role="menu" class="dropdown-menu">
          <li><a aria-controls="dropdown1" data-toggle="tab" id="dropdown1-tab" role="tab" tabindex="-1" href="#dropdown1">@fat</a></li>
          <li><a aria-controls="dropdown2" data-toggle="tab" id="dropdown2-tab" role="tab" tabindex="-1" href="#dropdown2">@mdo</a></li>
        </ul>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div aria-labelledby="home-tab" id="home" class="tab-pane fade" role="tabpanel">
        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
      </div>
      <div aria-labelledby="profile-tab" id="profile" class="tab-pane fade active in" role="tabpanel">
        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
      </div>
      <div aria-labelledby="dropdown1-tab" id="dropdown1" class="tab-pane fade" role="tabpanel">
        <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
      </div>
      <div aria-labelledby="dropdown2-tab" id="dropdown2" class="tab-pane fade" role="tabpanel">
        <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
      </div>
    </div>
</div>

<div class="bs-example tooltip-demo">
    <div class="bs-example-tooltips">
      <button title="" data-placement="left" data-toggle="tooltip" class="btn btn-default" type="button" data-original-title="Tooltip on left">Tooltip on left</button>
      <button title="" data-placement="top" data-toggle="tooltip" class="btn btn-default" type="button" data-original-title="Tooltip on top">Tooltip on top</button>
      <button title="" data-placement="bottom" data-toggle="tooltip" class="btn btn-default" type="button" data-original-title="Tooltip on bottom">Tooltip on bottom</button>
      <button title="" data-placement="right" data-toggle="tooltip" class="btn btn-default" type="button" data-original-title="Tooltip on right">Tooltip on right</button>
    </div>
</div>

<div style="padding-bottom: 24px;" class="bs-example">

    <a data-content="And here's some amazing content. It's very engaging. Right?" title="" data-trigger="focus" data-toggle="popover" role="button" class="btn btn-lg btn-danger bs-docs-popover" tabindex="0" data-original-title="Dismissible popover">Dismissible popover</a>
</div>

<div data-example-id="dismissible-alert-js" class="bs-example bs-example-standalone">
    <div role="alert" class="alert alert-warning alert-dismissible fade in">
      <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
      <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
    </div>

    <div role="alert" class="alert alert-danger alert-dismissible fade in">
      <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
      <h4>Oh snap! You got an error!</h4>
      <p>Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
      <p>
        <button class="btn btn-danger" type="button">Take this action</button>
        <button class="btn btn-default" type="button">Or do this</button>
      </p>
    </div>
</div>

<div data-example-id="buttons-checkbox" class="bs-example">
    <div data-toggle="buttons" class="btn-group">
      <label class="btn btn-primary">
        <input type="checkbox" autocomplete="off" checked=""> Checkbox 1 (pre-checked)
      </label>
      <label class="btn btn-primary">
        <input type="checkbox" autocomplete="off"> Checkbox 2
      </label>
      <label class="btn btn-primary active">
        <input type="checkbox" autocomplete="off"> Checkbox 3
      </label>
    </div>
</div>

<div data-example-id="buttons-radio" class="bs-example">
    <div data-toggle="buttons" class="btn-group">
      <label class="btn btn-primary active">
        <input type="radio" checked="" autocomplete="off" id="option1" name="options"> Radio 1 (preselected)
      </label>
      <label class="btn btn-primary">
        <input type="radio" autocomplete="off" id="option2" name="options"> Radio 2
      </label>
      <label class="btn btn-primary">
        <input type="radio" autocomplete="off" id="option3" name="options"> Radio 3
      </label>
    </div>
</div>

<div data-example-id="collapse-accordion" class="bs-example">
    <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
      <div class="panel panel-default">
        <div id="headingOne" role="tab" class="panel-heading">
          <h4 class="panel-title">
            <a aria-controls="collapseOne" aria-expanded="true" href="#collapseOne" data-parent="#accordion" data-toggle="collapse">
              Collapsible Group Item #1
            </a>
          </h4>
        </div>
        <div aria-labelledby="headingOne" role="tabpanel" class="panel-collapse collapse in" id="collapseOne">
          <div class="panel-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div id="headingTwo" role="tab" class="panel-heading">
          <h4 class="panel-title">
            <a aria-controls="collapseTwo" aria-expanded="false" href="#collapseTwo" data-parent="#accordion" data-toggle="collapse" class="collapsed">
              Collapsible Group Item #2
            </a>
          </h4>
        </div>
        <div aria-labelledby="headingTwo" role="tabpanel" class="panel-collapse collapse" id="collapseTwo">
          <div class="panel-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div id="headingThree" role="tab" class="panel-heading">
          <h4 class="panel-title">
            <a aria-controls="collapseThree" aria-expanded="false" href="#collapseThree" data-parent="#accordion" data-toggle="collapse" class="collapsed">
              Collapsible Group Item #3
            </a>
          </h4>
        </div>
        <div aria-labelledby="headingThree" role="tabpanel" class="panel-collapse collapse" id="collapseThree">
          <div class="panel-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
    </div>
</div>

<div data-example-id="carousel-with-captions" class="bs-example">
    <div data-ride="carousel" class="carousel slide" id="carousel-example-captions">
      <ol class="carousel-indicators">
        <li class="" data-slide-to="0" data-target="#carousel-example-captions"></li>
        <li data-slide-to="1" data-target="#carousel-example-captions" class=""></li>
        <li data-slide-to="2" data-target="#carousel-example-captions" class="active"></li>
      </ol>
      <div role="listbox" class="carousel-inner">
        <div class="item">
          <img alt="900x500" data-src="holder.js/900x500/auto/#777:#777" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDkwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzc3NyIvPjxnPjx0ZXh0IHg9IjM0MS41IiB5PSIyNTAiIHN0eWxlPSJmaWxsOiM3Nzc7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6NDJwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj45MDB4NTAwPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true">
          <div class="carousel-caption">
            <h3>First slide label</h3>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </div>
        </div>
        <div class="item">
          <img alt="900x500" data-src="holder.js/900x500/auto/#666:#666" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDkwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiIvPjxnPjx0ZXh0IHg9IjM0MS41IiB5PSIyNTAiIHN0eWxlPSJmaWxsOiM2NjY7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6NDJwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj45MDB4NTAwPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true">
          <div class="carousel-caption">
            <h3>Second slide label</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="item active">
          <img alt="900x500" data-src="holder.js/900x500/auto/#555:#5555" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDkwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSIvPjxnPjx0ZXh0IHg9IjM0MS41IiB5PSIyNTAiIHN0eWxlPSJmaWxsOiM1NTU1O2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjQycHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+OTAweDUwMDwvdGV4dD48L2c+PC9zdmc+" data-holder-rendered="true">
          <div class="carousel-caption">
            <h3>Third slide label</h3>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
        </div>
      </div>
      <a data-slide="prev" role="button" href="#carousel-example-captions" class="left carousel-control">
        <span aria-hidden="true" class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a data-slide="next" role="button" href="#carousel-example-captions" class="right carousel-control">
        <span aria-hidden="true" class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>

<script>
    (function($){
        $(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
        $(function () {
          $('[data-toggle="popover"]').popover();
        });
    })(jQuery);
</script>