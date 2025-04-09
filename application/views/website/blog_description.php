<?php 
$desc = $blog_description;

// Decode JSON
$particulars = json_decode($desc['Exam_Particulars'], true);
$details = json_decode($desc['ExamDetails'], true);

$events = json_decode($desc['Events'], true);
$dates = json_decode($desc['Dates'], true);

$entrance_exams = json_decode($desc['EntranceExam'], true);
$eligibility = json_decode($desc['EligibilityCriteria'], true);

$sections = json_decode($desc['Sections'], true);
$times = json_decode($desc['AllottedTime'], true);
$questions = json_decode($desc['Questions'], true);

$RegistrationProcess = json_decode($desc['RegistrationProcess'], true);
$DocumentsRequired = json_decode($desc['DocumentsRequired'], true);

$Nameprogram = json_decode($desc['Nameprogram'], true);
$Campus = json_decode($desc['Campus'], true);
$Seats = json_decode($desc['Seats'], true);

$Program = json_decode($desc['Program'], true);
$fee = json_decode($desc['fee'], true);

$current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http");
$current_url .= "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$encoded_url = urlencode($current_url);
$encoded_msg = urlencode("Check this out!");

?>

    <style>
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
              font-family: "Roboto", sans-serif;
  font-optical-sizing: auto;
        }

        .main-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }
        .content-container {
            background-color: white;
            padding: 25px;
            margin: 20px auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .breadcrumb {
            background-color: transparent;
            padding: 0;
            margin-bottom: 15px;
        }
        .breadcrumb-item a {
            text-decoration: none;
            color: #0d6efd;
        }
        .author-info {
            color: #6c757d;
            margin-bottom: 20px;
            font-size: 14px;
        }
        .author-info i {
            margin-right: 5px;
        }
        .summary-heading {
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
            text-transform: uppercase;
        }
        .info-table {
            margin-bottom: 30px;
            border: 1px solid #dee2e6;
        }
        .info-table th {
            background-color: #0d6efd;
            color: white;
            text-align: center;
            padding: 10px;
        }
        .info-table tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        .info-table td {
            padding: 8px 10px;
            border: 1px solid #dee2e6;
        }
        .info-table a {
            color: #0d6efd;
            text-decoration: none;
        }
        .social-share {
            position: fixed;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
        }
        .social-share a {
            display: block;
            width: 40px;
            height: 40px;
            margin-bottom: 10px;
            text-align: center;
            line-height: 40px;
            color: white;
            border-radius: 5px;
        }
        .whatsapp {
            background-color: #25D366;
        }
        .facebook {
            background-color: #3b5998;
        }
        .share {
            background-color: #6c757d;
        }
        @media (max-width: 768px) {
            .social-share {
                position: static;
                display: flex;
                justify-content: center;
                margin-top: 20px;
                transform: none;
            }
            .social-share a {
                margin: 0 5px;
            }
        }
         /* .container {
            background-color: white;
            padding: 30px;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        } */
        .section-title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 15px;
            color: #333;
            text-transform: uppercase;
        }
        .table {
            margin-bottom: 30px;
            border: 1px solid #dee2e6;
        }
        .table th {
            background-color: #0072bc;
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            padding: 12px;
        }
        .table td {
            padding: 12px;
            vertical-align: middle;
        }
        .admission-process {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 6px;
            margin-bottom: 30px;
        }
        .admission-process p {
            margin-bottom: 10px;
        }
        .highlight {
            color: #ff6b00;
            font-weight: 500;
        }
        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }
        }
        /*  */
         .google-news-banner {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
            text-align: center;
            box-shadow: 0px 4px 10px #adb5bd;
        }
        .google-news-icon {
            width: 40px;
            margin-bottom: 10px;
        }
        .top-recruiters img {
            height: 40px;
            margin: 10px;
            object-fit: contain;
        }
        .facility-item {
            margin-bottom: 10px;
        }
        .facility-icon {
            width: 20px;
            margin-right: 10px;
        }
    .faculty-card {
    position: relative;
    border: 1px solid #dee2e6;
    padding: 15px;
    margin-bottom: 15px;
    border-radius: 5px;
    box-shadow: 0px 4px 10px #adb5bd;
    overflow: hidden;
    transition: box-shadow 0.3s ease-in-out;
}

.faculty-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 100%; /* Start off-screen (right side) */
    width: 100%;
    height: 100%;
    background: linear-gradient(to left, rgba(127, 233, 132, 0.5), transparent);
    transition: left 0.5s ease-in-out; /* Moves in 0.5s */
}

.faculty-card:hover::before {
    left: 0; /* Moves from right to left */
}

.faculty-card:hover {
    box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2); /* Optional: Adds a subtle hover effect */
}

        .contact-form {
            background-color: #0275d8;
            color: white;
            padding: 20px;
            border-radius: 8px;
            margin: 30px 0;
        }
        .contact-form h3 {
            text-align: center;
            margin-bottom: 20px;
        }
        .contact-form .form-control {
            margin-bottom: 15px;
        }
        .contact-form .btn-submit {
            background-color: white;
            color: #0275d8;
            font-weight: bold;
            border-radius: 20px;
            padding: 5px 20px;
        }
        .related-post {
            margin-bottom: 20px;
        }
        .related-post img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .related-post h6 {
            font-size: 14px;
            font-weight: bold;
        }
        .comment-section {
            margin-top: 40px;
        }
        blockquote {
            border-left: 3px solid #ccc;
            padding-left: 15px;
            font-style: italic;
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
    </style>

   <div class="container content-container">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#"><?php echo $blog_description['coursename']; ?></a></li>
                <li class="breadcrumb-item active"><?php echo $blog_description['name']; ?></li>
            </ol>
        </nav>
        
        <!-- Author Info -->
        <div class="author-info">
            <span class="me-3"><i class="fas fa-user"></i> Mentor Education</span>
            <span><i class="fas fa-comments"></i> No Comments</span>
        </div>
        
        <!-- Main Content -->
        <h2 class="summary-heading"><?php echo $blog_description['exam_name']; ?>:</h2>
        
        <!-- Information Table -->
        <table class="table info-table">
            <thead>
                <tr>
                    <th >Exam Particulars</th>
                     <th colspan="2">Exam Details</th>
                </tr>
               
            </thead>
          <tbody>
        <?php foreach ($particulars as $i => $label): ?>
            <tr>
                <td width="30%"><?= htmlspecialchars($label) ?></td>
                <td>
                    <?php 
                    $value = $details[$i] ?? '';
                    if (filter_var($value, FILTER_VALIDATE_URL)) {
                        echo '<a href="' . htmlspecialchars($value) . '" target="_blank">' . htmlspecialchars($value) . '</a>';
                    } else {
                        echo htmlspecialchars($value);
                    }
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
        </table>
    </div>
    
    <!-- Social Share Buttons -->
    <div class="social-share">
        <a href="https://wa.me/918319233142?text=Hello%2C%20I%20am%20interested%20in%20your%20services" class="whatsapp" title="Share on WhatsApp"><i class="fab fa-whatsapp"></i></a>
        <a href="#" class="facebook" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="share" title="Share"><i class="fas fa-share-alt"></i></a>
        <div id="copy-msg" style="display:none; color:green; margin-top:10px;">🔗 Link copied to share!</div>
    </div>
    
    <div class="container content-container">
        <!-- Seats Intake Section -->
        <h2 class="section-title">Result Date and Registration Date:</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Events</th>
                        <th>Dates</th>
                    </tr>
                </thead>
                <tbody>
                   <?php foreach ($events as $i => $event): ?>
            <tr>
                <td width="30%"><?= htmlspecialchars($event) ?></td>
                <td><?= htmlspecialchars($dates[$i] ?? '') ?></td>
            </tr>
        <?php endforeach; ?>
                </tbody>
            </table>
        </div>

         <h2 class="section-title">Entrance Exams & Eligibility:</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Entrance Exam</th>
                        <th>Eligibility Criteria</th>
                    </tr>
                </thead>
                 <tbody>
        <?php foreach ($entrance_exams as $i => $exam): ?>
            <tr>
                <td width="30%"><?= htmlspecialchars($exam) ?></td>
                <td><?= htmlspecialchars($eligibility[$i] ?? '') ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
            </table>
        </div>

        <!-- Eligibility Criteria Section -->
        <h2 class="section-title">Exam Pattern :</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sections</th>
                        <th>Allotted Time</th>
                        <th>Questions</th>
                    </tr>
                </thead>
                <tbody>
                  <?php foreach ($sections as $i => $section): ?>
            <tr>
                <td><?= htmlspecialchars($section) ?></td>
                <td><?= htmlspecialchars($times[$i] ?? '') ?></td>
                <td><?= htmlspecialchars($questions[$i] ?? '') ?></td>
            </tr>
        <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Admission Process Section -->
        <h2 class="section-title">Registration Process :</h2>
        <div class="admission-process">
           <?php foreach ($RegistrationProcess as $i => $RegistrationProces): ?>
            <p><strong>Stage <?= $i; ?>:</strong><?= htmlspecialchars($RegistrationProces) ?></p>
           
        <?php endforeach; ?>
          
        </div>
         <!-- Admission Process Section -->
        <h2 class="section-title">Documents Required at the time of Admission :</h2>
        <div class="admission-process">
           <?php foreach ($DocumentsRequired as $i => $DocumentsRequireds): ?>
            <p><strong>Stage <?= $i; ?>:</strong><?= htmlspecialchars($DocumentsRequireds) ?></p>
           
        <?php endforeach; ?>
          
        </div>

        <!-- Selection Parameters Section -->
        <h2 class="section-title">Accepting Colleges Seats Intake:</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name of the program</th>
                        <th>Campus</th>
                        <th>Total Seats</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Nameprogram as $i => $Nameprograms): ?>
            <tr>
                <td><?= htmlspecialchars($Nameprograms) ?></td>
                <td><?= htmlspecialchars($Campus[$i] ?? '') ?></td>
                <td><?= htmlspecialchars($Seats[$i] ?? '') ?></td>
            </tr>
        <?php endforeach; ?>
                </tbody>
            </table>
        </div>
         <h2 class="section-title">Fees 2024-26:</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Program</th>
                       
                        <th>Fees</th>
                    </tr>
                </thead>
                <tbody>
                     <?php foreach ($Program as $i => $Programs): ?>
            <tr>
                <td width="30%"><?= htmlspecialchars($Programs) ?></td>
                <td><?= htmlspecialchars($fee[$i] ?? '') ?></td>
            </tr>
        <?php endforeach; ?>
                </tbody>
            </table>
        </div>
       
    <div class="container mt-4 card">
           <!-- Google News Banner -->
        <div class="google-news-banner mt-4">
            <img src="https://upload.wikimedia.org/wikipedia/commons/d/da/Google_News_icon.svg" alt="Google News" class="google-news-icon">
            <h5 class="mb-1">FOLLOW US ON GOOGLE NEWS</h5>
            <p class="mb-0 small">To Get Latest Update About Colleges Fees, Cut off, Counselling, Admissions.</p>
        </div>

        <!-- Top Recruiters -->
        <div class="mb-4">
            <h5 class="mb-3">TOP RECRUITERS:</h5>
            <div class="top-recruiters d-flex flex-wrap align-items-center">
                <img src="<?php echo base_url("assets/assets/images/CRISIL.PNG"); ?>" alt="CRISIL">
                <img src="<?php echo base_url("assets/assets/images/EY.PNG"); ?>" alt="EY">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Tata_logo.svg/2560px-Tata_logo.svg.png" alt="TATA">
                <img src="<?php echo base_url("assets/assets/images/bigbasket.png"); ?>" alt="Big Basket">
                <img src="<?php echo base_url("assets/assets/images/icici.jfif"); ?>" alt="ICICI">
            </div>
        </div>

        <!-- Contact Form -->
        <div class="contact-form">
            <h3>To Know Cut off (Open-Close Rank), Counselling Updates, Management Quota Admission Details Fill the Form</h3>
            <form method="POST" action="<?php echo site_url('homeservice/serviceorder');?>" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="mb-3">
                    <label for="contact" class="form-label">Contact No</label>
                    <input type="text" class="form-control" id="contact" name="mobile" placeholder="Enter your Mobile No.">
                </div>
                <div class="mb-3">
                    <label for="course" class="form-label">Courses are you Looking For?</label>
                    <select class="form-select" id="course" name="service">
                        <?php if(!empty($services)){
                            foreach($services as $service){ ?>
                              <option value="<?php echo $service['id']; ?>"><?php echo $service['name']; ?></option>
                      <?php  } }?>
                        
                    </select>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" name="message" id="message" rows="4" placeholder="Enter Your Query!"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-submit">
                        <i class="fas fa-paper-plane me-2"></i> SUBMIT
                    </button>
                </div>
            </form>
        </div>

        <!-- Related Posts -->
        <div class="mb-4">
            <h5 class="mb-3">Related Posts</h5>
            <div class="row">
                <?php if(!empty($blog)){ 
                    foreach($blog as $post){ ?>
                <div class="col-md-4">
                    <div class="related-post">
                        <img src="<?php echo base_url($post['photos']); ?>" alt="Indore College">
                        <h6><?php echo $post['name']; ?></h6>
                    </div>
                </div>
                <?php } } ?>
            </div>
        </div>

        <!-- Comment Section -->
        <div class="comment-section">
            <h5 class="mb-3">LEAVE A REPLY</h5>
            <form>
                <div class="mb-3">
                    <textarea class="form-control" rows="5" name="message" placeholder="Comment Text*"></textarea>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="name" placeholder="Name*">
                    </div>
                    <div class="col-md-4">
                        <input type="email" class="form-control" name="email" placeholder="Email*">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="subject" placeholder="Website">
                    </div>
                </div>
               
                <button type="submit" class="btn btn-primary">Post Comment</button>
            </form>
        </div>
    </div>
    </div>
    <script>
  document.querySelector('.share').addEventListener('click', function(e) {
    e.preventDefault();
    const currentUrl = window.location.href;

    // Copy to clipboard
    navigator.clipboard.writeText(currentUrl).then(function() {
      const msgBox = document.getElementById('copy-msg');
      msgBox.style.display = 'block';

      // Hide after 2 seconds
      setTimeout(() => {
        msgBox.style.display = 'none';
      }, 2000);
    }).catch(function(err) {
      alert('Failed to copy link: ' + err);
    });
  });
</script>
    
 