<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AVE_SOLUTION</title>
    <link rel="stylesheet" href="style/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/css/styles-header.css">
    <link rel="stylesheet" href="style/css/styles-brand.css">
    <link rel="stylesheet" href="style/css/styles-home.css">
    <link rel="stylesheet" href="style/css/styles-local-stores.css">
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&language=vi"></script>
</head>
<body onLoad="initialize()">
     <div class="container-fluid">
        <div class="header">
            <div class="topbar">
                <div class="row width-1180 center">
                    <div class="col-md-3"><a href="#"> Currency : GBP<span class="caret"></span> </a></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-2"><a href="#">Register</a></div>
                    <div class="col-md-2"><a href="#">Sign In</a></div>
                    <div class="col-md-2 sign-in">
                        <a class="a-last" href="#"><img src="images/home/add-to-cart.png" alt="">empty<span class="caret"></span></a>
                    </div>
                </div>
            </div><!-- end topbar -->
            <div class="above-top-bar">
                <div class="logo">
                   <a href="./index.php"><img class="logo float-left" src="images/home/logo.png" alt="logo"></a>
                </div>
                <ul class="nav width-1180 center float-left">
                   <li class="nav-item float-right">
                        <a href="#" class="nav-link dropdown-toggle" role="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">LOOK BOOK<br> <span class="caret"></span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <div class="dropdown-item">
                                <div class="casuals box-item float-left">
                                    <h3>CASUALS </h3>
                                    <ul>
                                        <li><a href="#">Jackets</a></li>
                                        <li><a href="#">Hoodies & Sweatshirts</a></li>
                                        <li><a href="#">Polo Shirts</a></li>
                                        <li><a href="#">Sportswear</a></li>
                                        <li><a href="#">Trousers & Chinos</a></li>
                                        <li><a href="#">T-Shirts</a></li>
                                    </ul>
                                </div>
                                <div class="formal box-item float-left">
                                    <h3>FORMAL</h3>
                                    <ul>
                                        <li><a href="#">Jackets</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Suits</a></li>
                                        <li><a href="#">Trousers</a></li>
                                    </ul>
                                </div>
                                <div class="banner clearfix">
                                    <a href="#">
                                        <div class="sale">
                                                <p>AUTUMN SALE!</p>
                                                <p>UP TO 50% OFF</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item float-right">
                        <a href="#" class="nav-link dropdown-toggle" role="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">LOCAL STORES<br><span class="caret"></span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <div class="dropdown-item">
                                <div class="casuals box-item float-left">
                                    <h3>CASUALS</h3>
                                    <ul>
                                        <li><a href="#">Jackets</a></li>
                                        <li><a href="#">Hoodies & Sweatshirts</a></li>
                                        <li><a href="#">Polo Shirts</a></li>
                                        <li><a href="#">Sportswear</a></li>
                                        <li><a href="#">Trousers & Chinos</a></li>
                                        <li><a href="#">T-Shirts</a></li>
                                    </ul>
                                </div>
                                <div class="formal box-item float-left">
                                    <h3>FORMAL</h3>
                                    <ul>
                                        <li><a href="#">Jackets</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Suits</a></li>
                                        <li><a href="#">Trousers</a></li>
                                    </ul>
                                </div>
                                <div class="banner clearfix">
                                    <a href="#">
                                        <div class="sale">
                                                <p>AUTUMN SALE!</p>
                                                <p>UP TO 50% OFF</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item float-right">
                        <a class="nav-link" href="./thebrand.php">THE BRAND<br><span class="caret"></span></a>
                    </li>
                    <li class="nav-item float-right">
                        <a href="#" class="nav-link dropdown-toggle" role="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">WOMEN'S<br><span class="caret"></span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <div class="dropdown-item">
                                <div class="casuals box-item float-left">
                                    <h3>CASUALS</h3>
                                    <ul>
                                        <li><a href="#">Jackets</a></li>
                                        <li><a href="#">Hoodies & Sweatshirts</a></li>
                                        <li><a href="#">Polo Shirts</a></li>
                                        <li><a href="#">Sportswear</a></li>
                                        <li><a href="#">Trousers & Chinos</a></li>
                                        <li><a href="#">T-Shirts</a></li>
                                    </ul>
                                </div>
                                <div class="formal box-item float-left">
                                    <h3>FORMAL</h3>
                                    <ul>
                                        <li><a href="#">Jackets</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Suits</a></li>
                                        <li><a href="#">Trousers</a></li>
                                    </ul>
                                </div>
                                <div class="banner clearfix">
                                    <a href="#">
                                        <div class="sale">
                                                <p>AUTUMN SALE!</p>
                                                <p>UP TO 50% OFF</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>               
                    </li>
                    <li class="nav-item float-right">
                        <a href="#" class="nav-link dropdown-toggle" role="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MEN'S <br><span class="caret"></span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <div class="dropdown-item">
                                <div class="casuals box-item float-left">
                                    <h3>CASUALS</h3>
                                    <ul>
                                        <li><a href="#">Jackets</a></li>
                                        <li><a href="#">Hoodies & Sweatshirts</a></li>
                                        <li><a href="#">Polo Shirts</a></li>
                                        <li><a href="#">Sportswear</a></li>
                                        <li><a href="#">Trousers & Chinos</a></li>
                                        <li><a href="#">T-Shirts</a></li>
                                    </ul>
                                </div>
                                <div class="formal box-item float-left">
                                    <h3>FORMAL</h3>
                                    <ul>
                                        <li><a href="#">Jackets</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Suits</a></li>
                                        <li><a href="#">Trousers</a></li>
                                    </ul>
                                </div>
                                <div class="banner clearfix">
                                    <a href="#">
                                        <div class="sale">
                                                <p>AUTUMN SALE!</p>
                                                <p>UP TO 50% OFF</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>      
                    </li>
                </ul>
                <div class="search float-left">
                   <input type="text" id="info-search" placeholder="Search...">
                   <a href="#"><img src="images/home/icon-search.png" alt="search"></a>
                </div>
            </div> <!--  end above topbar --> 