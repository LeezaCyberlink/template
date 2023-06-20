<!DOCTYPE html>
<html>
<head>
   <title>Hospital</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="assets/css/main.css" />
   <link rel="stylesheet" href="assets/css/responsive.css" />
   <link rel="stylesheet" href="assets/css/uikit-rtl.css" />
   <link rel="stylesheet" href="assets/css/uikit-rtl.min.css" />
   <link rel="stylesheet" href="assets/css/uikit.css" />
   <link rel="stylesheet" href="assets/css/uikit.min.css">
   <script src="assets/js/uikit.min.js"></script>
      <script src="assets/js/uikit-icons.min.js"></script>
      <script src="assets/js/jquery-3.4.1.min.js"></script>
</head>

<body>
   
<div class="uk-offcanvas-content">
        <header>
            
            <div class="uk-preserve-color uk-position-top">
                    <div class="uk-navbar-container uk-visible@l "  style="z-index:999; position: relative; background-color: var(--green);">
                        <ul class="small-nav-font uk-margin-remove" style="color:white;" uk-grid>
                           <li class="uk-width-2-3 uk-flex " style="padding-top: 10px; padding-bottom:10px;">
                            <div><p class="uk-margin-remove"><span uk-icon="icon: phone"></span> Phone No: 015422639, 015421782, 9861666872</p></div>
                           <div class="uk-margin-left"><p class="uk-margin-remove "> <span uk-icon="icon: location"></span> Address: Jawalakhel, laltipur</p></div>
                        </li>
                            <li class="  uk-width-1-3" style="padding-top: 10px; padding-bottom:10px;">
                                <div class="uk-float-right">
                                <span uk-icon="icon: facebook" style="margin-right:6px;"></span>
                                <span uk-icon="icon: twitter"  style="margin-right:6px;"></span>
                                <span uk-icon="icon:  linkedin"  style="margin-right:6px;"></span>
                                <span uk-icon="icon: instagram"  style="margin-right:6px;"></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <nav class="uk-navbar-container   uk-sticky uk-sticky-fixed"  uk-sticky="start: 100; animation: uk-animation-slide-top; sel-target: uk-navbar-container ; cls-active: uk-navbar-sticky scroll-nav; cls-inactive: uk-navbar-transparent ;">
                        <div class="uk-container">
                            <div uk-navbar>
                                <div class="uk-navbar-left  ">
                                    <button class="uk-navbar-toggle uk-hidden@m" uk-toggle="target: #nav-offcanvas" uk-navbar-toggle-icon></button>
                                    <a class="uk-navbar-item uk-logo uk-margin-large-right" href="index.php">
                                    <img src="assets/img/logo.jpg" alt="" style=" width: 74px; height: 70px;">
                                    </a>
                                </div>

                                <div class="uk-navbar-right uk-visible@m  ">
                                    <ul class="uk-navbar-nav">
                                        <li class="uk-active"><a href="index.php" class="nav-font">Home</a></li>
                                        
                                        <li>
                                            <a href="about.php" class="nav-font">About Us</a>
                                        </li>
                                        <li>
                                            <a href="speciality.php" class="nav-font">Specialities</a>
                                            <div class="uk-navbar-dropdown uk-navbar-dropdown-width-3" uk-drop="delay-hide: 10; uk-animation-slide-top-small; duration: 300; boundary: header; boundary-align: true; pos: bottom-justify stretch: x; flip: false">
                                                <div class="uk-drop-grid uk-child-width-1-3" uk-grid>
                                                    <div>
                                                        <ul class="uk-nav uk-navbar-dropdown-nav  " >
                                                      
                                                            <li ><a href="inner-specilities.php" class="nav-font" ><span uk-icon="arrow-right"></span>Gynae Pathology</a> </li>
                                                            <li><a href="inner-specilities.php" class="nav-font"><span uk-icon="arrow-right"></span>Infectious Disease</a> </li>
                                                            <li><a href="inner-specilities.php" class="nav-font"><span uk-icon="arrow-right"></span>Biochemistry</a></li>  
                                                        </ul>
                                                      
                                                    </div>
                                                    
                                                    <div class="uk-padding-remove">
                                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                                            <li><a href="inner-specilities.php" class="nav-font"><span uk-icon="arrow-right"></span>Immunological Tests (Clia-Based Tests)</a></li>  
                                                            <li><a href="inner-specilities.php" class="nav-font"><span uk-icon="arrow-right"></span>Histology and Cytopathology</a></li>  
                                                            <li><a href="inner-specilities.php" class="nav-font"><span uk-icon="arrow-right"></span>Microbiology</a></li>  
                                                        </ul>
                                                        
                                                    </div>
                                                   
                                                    <div class="uk-padding-remove">
                                                        <ul class="uk-nav uk-navbar-dropdown-nav nav-font">
                                                            <li><a href="inner-specilities.php" class="nav-font"><span uk-icon="arrow-right"></span>Immunohistochemistry</a></li>  
                                                            <li><a href="inner-specilities.php" class="nav-font"><span uk-icon="arrow-right"></span>Flow Cytometry</a></li>  
                                                            <li><a href="inner-specilities.php" class="nav-font"><span uk-icon="arrow-right"></span>Recently added tests</a></li> 
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- <li>
                                            <a href="#" class="nav-font">Services</a>
                                        </li> -->
                                       
                                        <li>
                                            <a href="news.php" class="nav-font">News</a>
                                        </li>
                                        <li>
                                            <a href="contact.php" class="nav-font">Contact</a>
                                        </li>
                                        
                                    </ul>
                                    
                                </div>

                            </div>
                        </div>
                    </nav>
                </div>
        </header>