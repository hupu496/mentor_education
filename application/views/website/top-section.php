<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link href="assets/logo_new.png" rel="shortcut icon" type="image/png">
       <meta content="yes" name="apple-mobile-web-app-capable">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"><!-- Core Meta Data -->
        <meta content="ThemeWagon" name="author">
        <meta content="The most spectacular coming soon template!" name="description">
        <meta content="Comming Soon, Responsive, Landing Page, One Page" name="keywords"><!-- Open Graph Meta Data -->
        <meta content="The most spectacular coming soon template!">
        <meta content="ThemeWagon">
        <meta content="ThemeWagon">
        <meta content="website">
        <meta content="index.html"><!-- Twitter Card Meta Data -->
        <meta content="summary" name="twitter:card">
        <meta content="@themewagon" name="twitter:site">
        <meta content="@themewagon" name="twitter:creator">
        <meta content="ThemeWagon" name="twitter:title">
        <meta content="Imminent - The most spectacular coming soon template!" name="twitter:description">

       

        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
        <!-- CSS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,900' rel='stylesheet' type='text/css'><!-- Styles -->
        <link href="<?php echo base_url("assets/assets/css/loader.css"); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url("assets/assets/css/normalize.css"); ?>" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url("assets/assets/css/font-awesome.min.css"); ?>">
        <link href="assets/assets/css/style.css" rel="stylesheet" type="text/css">
        <!--[if lt IE 9]>
            <link rel="stylesheet" type="text/css" href="css/ie.css" />
        <![endif]-->
        <!-- Javascript -->

        <script src="assets/assets/js/jquery.js"></script>
    <title>Mentor Education</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <style>
        body {
   font-family: "Roboto", sans-serif;
  font-optical-sizing: auto;
}
         .navbar-dark {
        background-color: #0d6efd !important;
    }
    
    
        .top-bar {
            background-color: #f8f9fa;
            padding: 5px 0;
            font-size: 14px;
        }
        .article-card {
            transition: transform 0.2s;
        }
        .article-card:hover {
            transform: translateY(-5px);
        }
        .nav-link {
        color: white !important;
        font-weight: normal;
    }
    
  .nav-link.active {
        background-color: white !important;
        color: blue !important;
        font-weight: bold !important;
    }
    .navbar-nav .nav-link:hover,
.dropdown-menu .dropdown-item:hover {
    background-color: white !important;
    color: blue !important;
}
   

        .post-item {
            border-bottom: 1px solid #eee;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }

        .post-meta {
            font-size: 0.9rem;
            color: #666;
        }

        .search-box {
            background-color: #fff;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 30px;
        }

        .recent-posts {
            background-color: #fff;
            padding: 15px;
            border-radius: 5px;
        }

        .recent-posts ul {
            list-style: none;
            padding-left: 0;
        }

        .recent-posts li {
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }

        .recent-posts li:last-child {
            border-bottom: none;
        }

        .post-thumbnail {
            max-width: 200px;
            border-radius: 5px;
            margin-right: 20px;
        }

        body {
           background-color: rgba(29, 28, 28, 0.125);
}
        

        .main-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }
        .card{
            box-shadow: 0px 0px 10px #adb5bd;
        }
        /* Dropdown animation */
.dropdown-menu {
    display: none;
    opacity: 0;
    transform: translateY(-10px);
    transition: opacity 0.5s ease, transform 0.5s ease;
}

/* Show dropdown with animation */
.dropdown:hover .dropdown-menu {
    display: block;
    opacity: 1;
    transform: translateY(0);
}
/* footer */
   .footer {
            background-color: #0d6efd;
            color: white;
            padding: 60px 0 30px;
        }

        .footer h5 {
            color: white;
            font-weight: 600;
            margin-bottom: 25px;
        }

        .footer ul {
            list-style: none;
            padding: 0;
        }

        .footer ul li {
            margin-bottom: 15px;
        }

        .footer ul li a {
            color: white;
            text-decoration: none;
            transition: padding-left 0.3s ease;
        }

        .footer ul li a:hover {
            padding-left: 8px;
            opacity: 0.8;
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            margin-right: 10px;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background-color: white;
            color: #0275d8;
            transform: translateY(-3px);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            margin-top: 40px;
        }

        .contact-info i {
            margin-right: 10px;
            width: 20px;
        }

        .newsletter-form .form-control {
            background-color: rgba(255, 255, 255, 0.1);
            border: none;
            color: white;
            padding: 10px 15px;
        }

        .newsletter-form .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .newsletter-form .btn {
            background-color: white;
            color: #0275d8;
            border: none;
            padding: 10px 25px;
        }

        .newsletter-form .btn:hover {
            background-color: #f8f9fa;
        }

    </style>
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col text-end">
                    <a href="<?php echo base_url("about"); ?>" style="font-weight: 800;" class="text-dark text-decoration-none me-3">About Us</a>
                    <a href="<?php echo base_url("privacy_policy"); ?>" style="font-weight: 800;"  class="text-dark text-decoration-none me-3">Privacy Policy</a>
                    <a href="<?php echo base_url("term_condition"); ?>" style="font-weight: 800;" class="text-dark text-decoration-none">Terms and conditions</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" style="font-size:22px;" href="<?php echo base_url("/"); ?>"> <img src="<?php echo base_url("assets/logo_new.png"); ?>" alt="" width="90px" style="
    background: white;
    border-radius: 100px;
    padding: 7px;
    box-shadow: 0px 0px 10px #32a92b;
"> &nbsp; &nbsp;MENTOR EDUCATION</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link"  style="font-weight:800"href="<?php echo base_url("/"); ?>"><i class="fas fa-home"></i> HOME</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"style="font-weight:800"  href="#" id="coursesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            COURSES
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="coursesDropdown">
                            <?php $courses = $this->db->get_where('services',array('status'=>1))->result_array();
                            if(!empty($courses)){
                                foreach($courses as $course){ ?>
                                <li><a class="dropdown-item" style="font-weight:500" href="<?php echo base_url($course['url_link']); ?>"><?php echo $course['name']; ?></a></li>
                        <?php    } } ?>
                           
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="font-weight:800" href="paid-counselling.html" id="counselingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            PAID COUNSELLING
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="counselingDropdown">
                              <?php $courses = $this->db->get_where('couselling',array('status'=>1))->result_array();
                            if(!empty($courses)){
                                foreach($courses as $couselling){ ?>
                                   <li><a class="dropdown-item" style="font-weight:500" href="<?php echo base_url($couselling['url_link']); ?>"><?php echo $couselling['name']; ?></a></li>
                                <?php }} ?>
                           
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-weight:800" href="<?php echo base_url("admission_news"); ?>">ADMISSION NEWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-weight:800" href="<?php echo base_url("contact"); ?>">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>