<!DOCTYPE html>
<html>

<head>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?></title>
</head>
<style>
    .navbar {
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.25);
        background-color: #FFFFFF;
    }

    .navbar .navbar-brand {
        padding-top: 20px;
        font-family: Open Sans;
        font-style: normal;
        font-weight: bold;
        font-size: 20px;
        color: #000000;
    }

    .navbar .navbar-nav>li>a {
        transition: 0.3s ease;
        font-family: Open Sans;
        font-style: normal;
        font-weight: normal;
        font-size: 15px;
        color: #000000;
        padding-top: 20px;
        padding-bottom: 20px;

    }

    .navbar .navbar-nav>li>a:hover,
    .navbar .navbar-nav>li>a:focus {
        background-color: #2C2B2B;
        color: #fff;
    }

    .dropdown-menu {
        background-color: inherit;
    }

    button {
        transition: 0.3s ease;
        width: 120px;
        height: 32px;
        background: #3586FF;
        border-radius: 44px;
        border-width: 0px;
    }

    #bcontact:hover,
    #bcontact:focus {
        background-color: #FFE600;
        color: #000000;
    }

    #contact {
        color: #FFFFFF;
        padding-top: 14px;
        padding-bottom: 13.5px;
        transition: 0s;
    }

    #contact:hover,
    #contact:focus {
        background-color: #fff;
        color: #fff;
    }

    #underline:hover,
    #underline:focus {
        background-color: #fff;
        color: #000000;
        text-decoration: underline;
    }

    .dropdown:hover>.dropdown-menu {
        display: block;

    }
</style>

</head>

<body>
    <nav class="navbar navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo base_url(); ?>">HealtHub</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" id="dropdownMenuButton" href="#">Disease Wiki
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Virus</a></li>
                            <li><a href="#">Bakteri</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Hospitals</a></li>
                    <li><a href="<?php echo base_url('about/index') ?>">About Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url('contact/index') ?>" id="contact"><button class="get-happier" id="bcontact" type="button">Contact Us</button></a></li>
                    <li class="active"><a id="underline" href="<?= site_url('auth') ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>