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
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css");?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/sticky-footer-navbar.css");?>" />
</head>

<body>

<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url()?>">Academic Section</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo base_url()?>">Home</a></li>
                <li><a href="<?php echo base_url("index.php/site/about")?>">About</a></li>
                <li><a href="<?php echo base_url("index.php/site/contact")?>">Contact</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../navbar/">My Profile</a></li>
                <li><a href="./">Feedback</a></li>
                <li><a href="../navbar-fixed-top/">Logout</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">

    <!-- Close of Container div in footer -->
