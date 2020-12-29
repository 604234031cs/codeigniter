<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codeigni Test</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
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
    }
</style>

<body>
    <nav class="navbar navbar-expand-md sticky-top " style="background-color:#FF6600;">
        <div class="container">

            <a class="navbar-brand" href="/"><strong style="color: white;">LOGO</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse sticky-top" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=" /about">About us</a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0" align="center">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 300px;">
                    <button class="btn btn-outline my-2 my-sm-0" type="submit">Search</button>
                </form>

                <ul class="navbar-nav">
                    <li><a href="/blog/insert" class="btn " id='add'>ADD PRODUCT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br>