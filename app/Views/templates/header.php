<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codeigni Test</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        li a:active {
            background-color: red;

        }


        li a:hover {
            background: blue;
            color: white;
        }

        a {
            color: white;
        }

        button {
            color: white;
            background: red;
        }

        #add:hover {
            background: yellow;
            color: black;
        }

        body {
            background: #FAEBD7;
            margin: 0;
        }

        .dropdown-item:hover {
            background: red;
            color: white;
        }
    </style>
</head>


<body>
    <div class="sticky-top">

        <nav class="navbar navbar-expand-lg " style="background-color:#FF6600;">
            <div class="container-fluid pt-3 ml-5">
                <div class="row ml-5">
                    <div class="row ml-5">
                        <a class="navbar-brand" href="/"><strong style="color: white;">LOGO</strong></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse ml-5 " id="navbarNavDropdown">
                            <!-- <ul class="navbar-nav ">
                        <li class="nav-item ">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=" /about">About us</a>
                        </li>
                        </ul> -->

                            <form class="form-inline my-2 my-lg-0" align="center">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 300px;">
                                <button class="btn btn-outline my-2 my-sm-0" type="submit">Search</button>
                            </form>
                            <ul class="navbar-nav">
                                <li><a href="/blog/insert" class="btn " id='add'>ADD PRODUCT</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-light bg-light navbar-expand-lg" id="myNavbar">
            <div class="container-fluid ml-5">
                <div class="row ml-5">
                    <div class="row ml-5">
                        <div class="collapse navbar-collapse" id="mainNav">
                            <ul class="navbar-nav ml-auto nav-fill">

                                <li class="nav-item">
                                    <a href="/" class="nav-link">หน้าแรก</a>
                                </li>

                                <li class="nav-item  dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ร้านค้า</a>

                                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="servicesDropdown">
                                        <div class="d-md-flex align-items-start justify-content-start">
                                            <div>
                                                <div class="dropdown-header" style="color:black;"><strong>Development</strong></div>
                                                <a class="dropdown-item" href="#">Bespoke software</a>
                                                <a class="dropdown-item" href="#">Mobile apps</a>
                                                <a class="dropdown-item" href="#">Websites</a>
                                            </div>
                                            <div>
                                                <div class="dropdown-header" style="color:black;"><strong>Professional Services</strong></div>
                                                <a class="dropdown-item" href="#">Project rescue</a>
                                                <a class="dropdown-item" href="#">Source code recovery</a>
                                                <a class="dropdown-item" href="#">Application support &amp; maintenance</a>
                                            </div>
                                            <div>
                                                <div class="dropdown-header"style="color:black;" ><strong>Fixed Price Services</strong></div>
                                                <a class="dropdown-item" href="#">Add cookie consent</a>
                                                <a class="dropdown-item" href="#">Add captcha</a>
                                                <a class="dropdown-item" href="#">Add core data</a>
                                                <a class="dropdown-item" href="#">Custom error pages</a>
                                                <a class="dropdown-item" href="#">Contact form creation</a>
                                                <a class="dropdown-item" href="#">Automated backups</a>
                                                <a class="dropdown-item" href="#">Image to HTML</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item ">
                                    <a href="/about" class="nav-link">เกี่ยวกับเรา</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="#" class="nav-link">ติดต่อเรา</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">บัญชีของฉัน</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </div>