<?php 
$desc = $couselling;

// Decode JSON
$heading = json_decode($desc['heading'], true);
$description = json_decode($desc['description'], true);
$standard_text = json_decode($desc['standard_text'], true);
$premium_text = json_decode($desc['premium_text'], true);

?>
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
            background-color:rgba(29, 28, 28, 0.125);
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

        .article-card {
            transition: transform 0.2s;
        }
        .article-card:hover {
            transform: translateY(-5px);
        }
           .nav-link {
            color: white !important;
        }
        
        .nav-link.active {
            background-color: #fff !important;
            color: #000 !important;
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
            background-color:rgba(29, 28, 28, 0.125);
        }

        .main-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }
         .card{
            box-shadow: 0px 0px 10px #adb5bd;
        }
            body {
     font-family: "Roboto", sans-serif;
  font-optical-sizing: auto;
}
        .brand-name {
            color: white;
            font-size: 24px;
            font-weight: bold;
        }
        
        .nav-link {
            color: white !important;
        }
        
        .pricing-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        
        .pricing-header {
            padding: 20px;
            text-align: center;
        }
        
        .price {
            font-size: 2.5rem;
            font-weight: bold;
            color: #0d6efd;
        }
        
        .feature-list {
            list-style: none;
            padding: 0;
        }
        
        .feature-list li {
            padding: 10px 20px;
            border-bottom: 1px solid #eee;
        }
        
        .feature-list li:before {
            content: "✓";
            margin-right: 10px;
            color: #0d6efd;
        }
        
        .info-box {
            background-color: #fff3e6;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 30px;
        }
           .nav-link {
            color: white !important;
        }
        
        .nav-link.active {
            background-color: #fff !important;
            color: #000 !important;
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
            background-color:rgba(29, 28, 28, 0.125);
        }

        .main-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }
         .card{
            box-shadow: 0px 0px 10px #adb5bd;
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
        .enquire-form {
    max-width: 500px; /* Limit width */
    margin: 50px auto; /* Center the form */
    padding: 20px;
    background: #3f98fd;
    color: white;
    font-weight: 500;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Soft shadow */
    /* text-align: center; */
}

/* Submit Button: Centered & Block Style */
.enquire-form .btn-submit {
    display: block;
    width: 100%;
    padding: 12px;
    background-color: #f5f5f5;
    color: #0d6efd;
    font-size: 18px;
    font-weight: bold;
    border: none;
    border-radius: 10px;
    transition: background 0.3s ease-in-out;
}

/* Hover Effect */
.enquire-form .btn-submit:hover {
    background-color: #084298;
}
        
        .enquire-form h3 {
            text-align: center;
            font-size: 1.2rem;
            margin-bottom: 20px;
            color: white;
        }
        
        .form-control {
            margin-bottom: 15px;
        }
         .card{
            box-shadow: 0px 0px 10px #adb5bd;
        }
         .enquire-forms {
  
    margin: 50px auto; /* Center the form */
    padding: 20px;
    background: #3f98fd;
    color: white;
    font-weight: 500;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Soft shadow */
    /* text-align: center; */
}
    </style>
</head>
<body>
    <!-- Top Bar -->
 
    <div class="container my-4 card">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>" style="color:black;">Home</a></li>
                <li class="breadcrumb-item active"><?php echo $couselling['name']; ?></li>
            </ol>
        </nav>

        <h2 class="text-center mb-4">WHY YOU NEED 'PAID COUNSELLING' SERVICES ?</h2>

        <div class="info-box mb-5">
            <p class="mb-3">
                <strong><?php echo $couselling['name']; ?></strong> 
            </p>
            <?php if(!empty($heading)){
            foreach ($heading as $key => $value) { ?>
               <p class="mb-3">
               <?= htmlspecialchars($value) ?>
            </p>
            <?php } }
              ?>
            
            
        </div>

        <h3 class="text-center mb-4"><?php echo $couselling['cousellingname']; ?></h3>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="pricing-card">
                    <div class="pricing-header bg-light">
                        <h4>STANDARD PLAN</h4>
                        <div class="price">₹<?php echo $couselling['standard_plan_price']; ?></div>
                    </div>
                    <ul class="feature-list">
                        <?php if(!empty($standard)){
                         foreach ($standard_text as $key => $value) {  ?>
                        <li>  <?= htmlspecialchars($value) ?></li>
                      <?php  } } ?>
                        
                       
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pricing-card">
                    <div class="pricing-header bg-primary text-white">
                        <h4>PREMIUM PLAN</h4>
                        <div class="price text-white">₹<?php echo $couselling['preminum_plan_price']; ?></div>
                    </div>
                    <ul class="feature-list">
                         <?php if(!empty($premium_text)){ 
                            foreach ($premium_text as $key => $value) {  ?>
                        <li>  <?= htmlspecialchars($value) ?></li>
                      <?php  } }?>
                        
                    </ul>
                </div>
            </div>
            
        </div>

        <div class="col-md-12 enquire-forms">
            <h3 class="text-center">WHY US !</h3>
        <ul class="feature-list">
                         <?php if(!empty($description)){  foreach ($description as $key => $value) {  ?>
                        <li>  <?= htmlspecialchars($value) ?></li>
                      <?php  } }?>
                        
                    </ul>
        </div>
         <div class="enquire-form">
    <h3>To Know Cut off (Open-Close Rank) Details, Fill the Form</h3>
    <form id="serviceOrderForm1">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name">
        </div>
        <div class="mb-3">
            <label for="mobile" class="form-label">Mobile No</label>
            <input type="tel" class="form-control" name="mobile" placeholder="Enter your Mobile No" maxlength="10" required
       oninput="this.value = this.value.replace(/[^0-9]/g, '')"
       pattern="[0-9]{10}" title="Enter a 10-digit mobile number only">
        </div>
        <div class="mb-3">
            <label for="course" class="form-label">Courses are you Looking For?</label>
            <select class="form-control" name="service">
                  <option>Select Course</option>
                <?php if(!empty($service)){
                    
                    foreach ($service as $key => $value) { ?>
                     
                        <option value="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></option>
                   <?php }
                } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea name="message" cols="5" rows="5" name="query" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <button class="btn-submit" type="submit"><i class="fas fa-arrow-right"></i>SUBMIT</button>
        </div>
    </form>
</div>
    </div>
   

     