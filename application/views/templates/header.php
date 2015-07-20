<?php
/**
 * Created by PhpStorm.
 * User: Lynn
 * Date: 7/16/15
 * Time: 7:19 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
echo doctype('html5');
?>

<html>
<head>
    <title>Academic Section</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/material.min.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/styles.css");?>">
    <script src="<?php echo base_url("assets/material.min.js");?>"></script>
    <!-- link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" -->

    <!-- self hosted material icon fonts -->
    <style>
        @font-face {
            font-family: 'Material Icons';
            font-style: normal;
            font-weight: 400;
            src: url(https://example.com/MaterialIcons-Regular.eot); /* For IE6-8 */
            src: local('Material Icons'),
            local('MaterialIcons-Regular'),
            url(<?php echo base_url("assets/icons/iconfont/MaterialIcons-Regular.woff2");?>) format('woff2'),
            url(<?php echo base_url("assets/icons/iconfont/MaterialIcons-Regular.woff");?>) format('woff'),
            url(<?php echo base_url("assets/icons/iconfont/MaterialIcons-Regular.ttf");?>) format('truetype');
        }

        .material-icons {
            font-family: 'Material Icons';
            font-weight: normal;
            font-style: normal;
            font-size: 24px;  /* Preferred icon size */
            display: inline-block;
            width: 1em;
            height: 1em;
            line-height: 1;
            text-transform: none;
            letter-spacing: normal;
            word-wrap: normal;

            /* Support for all WebKit browsers. */
            -webkit-font-smoothing: antialiased;
            /* Support for Safari and Chrome. */
            text-rendering: optimizeLegibility;

            /* Support for Firefox. */
            -moz-osx-font-smoothing: grayscale;

            /* Support for IE. */
            font-feature-settings: 'liga';
        }
    </style>

</head>

<body>

<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    <!-- header -->
    <header class="demo-header mdl-layout__header mdl-color--white mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
            <span class="mdl-layout-title"><?php echo $title?></span>
            <div class="mdl-layout-spacer"></div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
                    <i class="material-icons">search</i>
                </label>
                <div class="mdl-textfield__expandable-holder">
                    <input class="mdl-textfield__input" type="text" id="search" />
                    <label class="mdl-textfield__label" for="search">Enter your query...</label>
                </div>
            </div>
            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
                <i class="material-icons">more_vert</i>
            </button>
            <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
                <li class="mdl-menu__item">My Profile</li>
                <li class="mdl-menu__item">Feedback</li>
                <li class="mdl-menu__item">Logout</li>
            </ul>
        </div>
    </header>

    <!-- drawer -->
    <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
            <img src="<?php echo base_url("assets/images/user.jpg");?>" class="demo-avatar">
            <div class="demo-avatar-dropdown">
                <span>hello@email.com</span>
                <div class="mdl-layout-spacer"></div>
                <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                    <i class="material-icons">arrow_drop_down</i>
                </button>
                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
                    <button class="mdl-menu__item">hello@email.com</button>
                    <button class="mdl-menu__item">info@domain.net</button>
                    <button class="mdl-menu__item">Add another account...</button>
                </ul>
            </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
            <a class="mdl-navigation__link" href="<?php echo base_url()?>"><i class="mdl-color-text--blue-grey-400 material-icons">home</i>Home</a>
            <a class="mdl-navigation__link" href="<?php echo base_url("index.php/site/about")?>"><i class="mdl-color-text--blue-grey-400 material-icons">home</i>About</a>
            <a class="mdl-navigation__link" href="<?php echo base_url("index.php/site/contact")?>"><i class="mdl-color-text--blue-grey-400 material-icons">home</i>Contact</a>
            <a class="mdl-navigation__link" href="<?php echo base_url("index.php/site/form")?>"><i class="mdl-color-text--blue-grey-400 material-icons">home</i>Form</a>
            <a class="mdl-navigation__link" href="<?php echo base_url("index.php/site/table")?>"><i class="mdl-color-text--blue-grey-400 material-icons">home</i>Table</a>
            <a class="mdl-navigation__link" href="<?php echo base_url("index.php/site/pec")?>"><i class="mdl-color-text--blue-grey-400 material-icons">home</i>PEC Form</a>
            <div class="mdl-layout-spacer"></div>
            <a class="mdl-navigation__link" href="#"><i class="mdl-color-text--blue-grey-400 material-icons">help_outline</i></a>
        </nav>
    </div>


    <!-- content container -->
    <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
    <!-- Close of Container div in footer -->
