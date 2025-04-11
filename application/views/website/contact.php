
    <style>
           
        .contact-header {
            border-bottom: 2px solid #dee2e6;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .office-details {
            margin-bottom: 30px;
        }
        .office-icon {
            margin-right: 10px;
            color: #0d6efd;
        }
        .search-box {
            margin-bottom: 30px;
        }
        .search-btn {
            background-color: #0d6efd;
            color: white;
            border: none;
            width: 100%;
        }
        .recent-posts {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
        }
        .recent-posts h4 {
            border-bottom: 2px solid #dee2e6;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }
        .recent-posts ul {
            padding-left: 20px;
        }
        .recent-posts li {
            margin-bottom: 10px;
        }
        .submit-btn {
            background-color: #0d6efd;
            color: white;
            padding: 8px 20px;
        }
        .social-media {
            margin-top: 20px;
        }
        .social-media a {
            margin-right: 15px;
            text-decoration: none;
        }
        .map-container {
            height: 250px;
            margin-top: 20px;
        }
        .map-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border: 1px solid #dee2e6;
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
         .map-container {
      overflow: hidden;
      border: 1px solid #ccc;
      position: relative;
    }

    .zoom-img {
      transition: transform 0.2s ease;
      cursor: zoom-in;
    }

    .zoomed {
      cursor: zoom-out;
    }
       
    </style>

     <div class=" container mt-4">
        
    
        <div class="row">
            <!-- Contact Information -->
            <div class="card col-lg-8">
                <nav aria-label="breadcrumb">
            <ol class=" breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('/');?>" style="color:black;">Home</a></li>
                <li class="breadcrumb-item active">Contact Us</li>
            </ol>
        </nav>
                <h2 class="contact-header">Contact Us</h2>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="office-details">
                            <h5>Our Details</h5>
                            <h6>Pune Office Address</h6>
                            <p>
                                <i class="fas fa-map-marker-alt office-icon"></i>
                                Office No. 106, 1st Floor, Specialty Business Center, Balewadi, Baner, Pune, Maharashtra 411045
                            </p>
                            
                            <h6>Madhya Pradesh office</h6>
                            <p>
                                <i class="fas fa-map-marker-alt office-icon"></i>
                                Address: 1/7, MIG First Floor Amber Complex, M.P. Nagar Zone-2, Bhopal, Madhya Pradesh 462011
                            </p>
                            
                            <p>
                                <i class="fas fa-phone office-icon"></i>
                                Phone: +91 831 923 3142
                            </p>
                            
                            <p>
                                <i class="fas fa-envelope office-icon"></i>
                                Email: info@mentoreducation.com
                            </p>
                            
                            <p>
                                <i class="fas fa-globe office-icon"></i>
                                Website: www.mentoreducation.com
                            </p>
                            
                            <div class="social-media">
                                <h6>Follow Us On Social Media</h6>
                                <a href="#"><i class="fab fa-instagram"></i> Follow on Instagram</a><br>
                                <a href="#"><i class="fab fa-facebook"></i> Follow on Facebook</a><br>
                                <a href="#"><i class="fab fa-quora"></i> Follow on Quora</a><br>
                                <a href="#"><i class="fab fa-linkedin"></i> Follow on LinkedIn</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="contact-form">
                            <h5>For Further Queries</h5>
                            <form id="contactsave">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="contact" class="form-label">Contact No *</label>
                                    <input type="text" class="form-control" id="contact" name="mobile" placeholder="Enter your contact no" maxlength="10" required
       oninput="this.value = this.value.replace(/[^0-9]/g, '')"
       pattern="[0-9]{10}" title="Enter a 10-digit mobile number only">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email Address">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" rows="4" name="message" placeholder="Enter your Query Here!"></textarea>
                                </div>
                                
                                <button type="submit" class="btn submit-btn">
                                    <i class="fas fa-paper-plane"></i> SUBMIT
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                
                <!-- Maps -->
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="map-container">
                            <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.033348096294!2d73.85674361419842!3d18.520430374664073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c089bdb00405%3A0x8d1d5c10b1650cf!2sPune%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1712800000000"
        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="map-container">
                            <iframe
         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3609.529980985864!2d85.1415323148877!3d25.59409498450873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f2a62814d4c32d%3A0x9fcb7ef1c9a7d20b!2sPatna%2C%20Bihar!5e0!3m2!1sen!2sin!4v1712811111111" 
        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="search-box" style="
    background: radial-gradient(#0ea05d, transparent);
">
                    <input type="text" class="form-control mb-2" placeholder="Search the site...">
                    <button class="btn search-btn">Search</button>
                </div>
                
                <div class="recent-posts">
                    <h4>RECENT POSTS</h4>
                    <ul>
                        <?php if(!empty($blog)){
                            foreach ($blog as $key => $value) {  ?>
                            <li>
                            <a href="<?php echo base_url('homeservice/blog_description/'.$value['id']); ?>" style="color:blue;"><?php echo $value['name']; ?></a>
                        </li>
                    <?php        }
                        }  ?>
                        
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>

   