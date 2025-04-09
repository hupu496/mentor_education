<style>
    a {
      color: white;
      text-decoration: none;
    }

    a:hover {
      color: white;
      text-decoration: none;
    }
</style>
<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- Company Info -->
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <h5>About Company</h5>
                <p>We are dedicated to providing the best educational counseling services to help students achieve their academic goals.</p>
                <div class="social-links mt-4">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <h5>Quick Links</h5>
                <ul>
                    <li><a href="<?php echo base_url('/about'); ?>">About Us</a></li>
                    <li><a href="<?php echo base_url('/service/1'); ?>">Our Services</a></li>
                    <li><a href="<?php echo base_url('couselling/1'); ?>">Career Counseling</a></li>
                    <li><a href="<?php echo base_url('admission_news'); ?>">Admission Process</a></li>
                    <li><a href="<?php echo base_url('/contact'); ?>">Contact Us</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <h5>Contact Info</h5>
                <div class="contact-info">
                    <p><i class="fas fa-map-marker-alt"></i> 123 Education Street, City, Country</p>
                    <p><a href="tel:+918319233142"><i class="fas fa-phone"></i> +91 831 923 3142</a></p>
                    <p><a href="mailto:info@mentoreducation.com"><i class="fas fa-envelope"></i> info@mentoreducation.com </a></p>
                    <p><i class="fas fa-clock"></i> Mon-Fri: 9:00 AM - 6:00 PM</p>
                </div>
            </div>

            <!-- Newsletter -->
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <h5>Newsletter</h5>
                <p>Subscribe to our newsletter for updates and news.</p>
                <form class="">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Enter email" aria-label="Enter email">
                        <button class="btn btn-success" type="submit">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Footer Bottom -->
       <div class="row footer-bottom">
    <div class="col-md-5 text-center text-md-start">
        <p class="mb-0">&copy; 2024 Mentor Education. All rights reserved.</p>
    </div>
    <div class="col-md-2"> <span id="visitor-count" style="background:black; padding:5px;"class="ms-3">Visitors: 0</span></div>
    <div class="col-md-5 text-center text-md-end">
        <p class="mb-0">
            <a href="<?php echo base_url('/privacy_policy'); ?>" class="text-white me-3">Privacy Policy</a>
            <a href="<?php echo base_url('/term_condition'); ?>" class="text-white me-3">Terms & Conditions</a>
            <!-- <a href="<?php echo base_url(); ?>" class="text-white">FAQ</a> -->
           
        </p>
    </div>
</div>
    </div>
</footer>

    <!-- Modal -->
    <!-- Bootstrap Modal -->
    <script>
// Get visitor count from localStorage (for demo)
let count = localStorage.getItem('visitor_count') || 0;

// Increment and update localStorage
count++;
localStorage.setItem('visitor_count', count);

// Show on page
document.getElementById('visitor-count').textContent = 'Visitors: ' + count;
</script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="assets/assets/js/plugins.js"></script> 
        <script src="assets/assets/js/jquery.countdown.min.js"></script> 
        <script src="assets/assets/js/main.js"></script>
<!-- Bootstrap JS (Ensure Bootstrap 5 is included) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Automatically show dropdown on hover
        document.querySelectorAll('.nav-item.dropdown').forEach(function(dropdown) {
            dropdown.addEventListener('mouseenter', function() {
                const dropdownMenu = this.querySelector('.dropdown-menu');
                if (dropdownMenu) {
                    dropdownMenu.classList.add('show');
                }
            });

            dropdown.addEventListener('mouseleave', function() {
                const dropdownMenu = this.querySelector('.dropdown-menu');
                if (dropdownMenu) {
                    dropdownMenu.classList.remove('show');
                }
            });
        });
    </script>
    <script>
document.addEventListener("DOMContentLoaded", function() {
    var dynamicModal = new bootstrap.Modal(document.getElementById('dynamicModal'));
    dynamicModal.show();
});
</script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        let navLinks = document.querySelectorAll(".nav-link");

        navLinks.forEach(link => {
            link.addEventListener("click", function () {
                // Remove active class from all nav-links
                navLinks.forEach(nav => nav.classList.remove("active"));

                // Add active class to the clicked link
                this.classList.add("active");
            });
        });
    });
    // 
    const whatsappIcon = document.createElement("div");
whatsappIcon.innerHTML = `
  <a href="https://wa.me/918319233142?text=Hello%2C%20I%20am%20interested%20in%20your%20services" target="_blank">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" width="50" height="50">
  </a>
`;

// Apply styles to keep it fixed
whatsappIcon.style.position = "fixed";
whatsappIcon.style.bottom = "20px";
whatsappIcon.style.right = "20px";
whatsappIcon.style.zIndex = "1000";

// Append to the body
document.body.appendChild(whatsappIcon);
// 
const callicon = document.createElement("div");
callicon.innerHTML = `
   <a href="tel:+918319233142" target="_blank">
   <img width="40" height="40" src="<?php echo base_url('assets/call.webp'); ?>" alt="phone"/>
  </a>
`;

// Apply styles to keep it fixed
callicon.style.position = "fixed";
callicon.style.bottom = "80px";
callicon.style.right = "20px";
callicon.style.zIndex = "1000";

// Append to the body
document.body.appendChild(callicon);
// fkldjsf
document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".dropdown").forEach(function(dropdown) {
        dropdown.addEventListener("mouseenter", function() {
            let menu = this.querySelector(".dropdown-menu");
            menu.style.display = "block";
            setTimeout(() => {
                menu.style.opacity = "1";
                menu.style.transform = "translateY(0)";
            }, 10);
        });

        dropdown.addEventListener("mouseleave", function() {
            let menu = this.querySelector(".dropdown-menu");
            menu.style.opacity = "0";
            menu.style.transform = "translateY(-10px)";
            setTimeout(() => {
                menu.style.display = "none";
            }, 500);
        });
    });
});

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  $(document).ready(function () {
    $('#serviceOrderForm').on('submit', function (e) {
      e.preventDefault();

      $.ajax({
        type: 'POST',
        url: 'http://localhost/mentor_education/homeservice/serviceorder', // Update here
        data: $(this).serialize(),
        dataType: 'json',
        success: function (response) {
          console.log("Server response:", response);
          if (response.status === 'success') {
            Swal.fire({
              icon: 'success',
              title: 'Success!',
              text: response.message
            });
            $('#serviceOrderForm')[0].reset();
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Error!',
              text: response.message
            });
          }
        },
        error: function (xhr, status, error) {
          console.error("AJAX Error:", status, error);
          Swal.fire({
            icon: 'error',
            title: 'Request Failed',
            text: 'Something went wrong. Please try again.',
            footer: '<pre>' + xhr.responseText + '</pre>'
          });
        }
      });
    });
  });
</script>
</body>
</html>

