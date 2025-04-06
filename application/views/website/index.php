    <!-- Main Content -->
    <div class="container my-4">
        <div class="row">
            <!-- Main Content Area -->
            <div class="col-lg-8">
                <!-- Article Card 1 -->
                  <?php if(!empty($blog)){
                    foreach ($blog as $key => $value) { ?>
                   <div class="card mb-4 article-card">
                    <img src="<?php echo base_url($value['photos']); ?>" class="card-img-top" alt="College Building">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $value['name']; ?></h5>
                        <p class="card-text text-muted small">Posted by Mentor Education • No Comments</p>
                        <p class="card-text"><?php echo $value['description']; ?></p>
                        <a href="<?php echo base_url('homeservice/blog_description/'.$value['id']); ?>" class="btn btn-light rounded-pill py-2 px-4">Read More</a>
                    </div>
                </div>
              <?php      }
                  }  ?>
                  </div>
            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Search Box -->
                <div class="card mb-4">
                    <div class="card-body" style="
    background: radial-gradient(#0ea05d, transparent);
">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search the site">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Recent Posts -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">RECENT POSTS</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                          <?php  if(!empty($blog)) {
                            foreach ($blog as $key => $value) {  ?>
                            <li class="mb-2"><a href="<?php echo base_url('homeservice/blog_description/'.$value['id']); ?>" class="text-decoration-none"><?php echo $value['name']; ?></a></li>
                   <?php          }
                          }  ?>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <div class="modal fade" id="dynamicModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="
    background: #90e4b2;
">
      <div class="modal-header">
        <img src="assets/logo_new.png" alt="" width="100">
        <h5 class="modal-title" style="color: white; font-weight: 800;" id="exampleModalLabel" style="text-align: center;">For Any Counselling Assistance Fill the Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form id="serviceOrderForm" method="POST" action="<?php echo site_url('homeservice/serviceorder');?>" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">Contact No</label>
          <input type="text" name="mobile" class="form-control" id="contact" 
       placeholder="Enter mobile" maxlength="10" required
       oninput="this.value = this.value.replace(/[^0-9]/g, '')"
       pattern="[0-9]{10}" title="Enter a 10-digit mobile number only">
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">Course</label>
            <select name="service" id="" class="form-control">
                <option value="">Select Course</option>
                <?php $courses = $this->db->get_where('services',array('status'=>1))->result_array(); 
                if(!empty($courses)){
                    foreach ($courses as $key => $value) { ?>
                        <option value="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></option>
               <?php     }
                } ?>
            </select>
            <!-- <input type="text" class="form-control" id="name" placeholder="Enter name"> -->
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">State</label>
             <select name="state" id="" class="form-control">
                <option value="">Select State</option>
                <option value="Bihar">Bihar</option>
                 <option value="Jharkhand">Jharkhand</option>
                  <option value="West Bengal">West Bengal</option>
                   <option value="Uttar pradesh">Uttar pradesh</option>
                    <option value="Kerala">Kerala</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">Message</label>
            <textarea name="query" id="" cols="10" rows="5" class="from form-control"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="redirectModal" tabindex="-1" aria-labelledby="redirectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div id="glitterOverlay"></div>
        <div class="modal-content">

            <div class="modal-header">
                <!-- <h5 class="modal-title">Countdown Timer</h5> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="wrapper">
                    <ul class="scene unselectable" data-friction-x="0.1" data-friction-y="0.1" data-scalar-x="25" data-scalar-y="15" id="scene">
                        <li class="layer" data-depth="0.00"></li>
                        <li class="layer" data-depth="0.10"><div class="background"></div></li>
                        <li class="layer" data-depth="0.20">
                            <div class="title">
                                <h2 id="animatedText"></h2>
                              
                            </div>
                        </li>
                        <li class="layer" data-depth="0.30">
                            <div class="sphere"><img alt="sphere" src="assets/logo_new.png"></div>
                        </li>
                        <li class="layer" data-depth="0.30">
                            <div class="hero">
                                <h1 id="countdownTimer">1d 00:00:00</h1>
                                <p class="sub-title">The most spectacular coming soon template!</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Glitter Effect Overlay -->


<!-- Bootstrap 5 JS -->


<style>
    /* Glitter Effect */
    #glitterOverlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background: url('https://media4.giphy.com/media/v1.Y2lkPTc5MGI3NjExdHczeWRxcDFsOW5qbDJ6OXR5dGptNG0xcmpzcGhmdDRmb3VxcmhheiZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/9tXqnBCOMDbaCAEDJ8/giphy.gif') center/cover no-repeat;
        opacity: 0.7;
        z-index: 1050; /* Above modal */
        display: none;
    }

    /* Confetti Canvas */
    #confettiCanvas {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
    }
</style>
  <script>
        let text = "Big College Counselling Limit Sheet in Ug Pg Diploma varient cities. Provide 100% Schoolership";
        let index = 0;
        let speed = 200; // Typing speed in milliseconds

        function typeText() {
            if (index < text.length) {
                document.getElementById("animatedText").textContent += text.charAt(index);
                index++;
                setTimeout(typeText, speed);
            } else {
                document.getElementById("animatedText").style.borderRight = "none"; // Remove cursor after typing
            }
        }

        // Start the typing effect after a delay (optional)
        setTimeout(typeText, 1000);
    </script>
<script>
    setTimeout(function () {
        let modal = new bootstrap.Modal(document.getElementById('redirectModal'));
        modal.show();

       setTimeout(function () {
    // Show glitter effect
    let glitterOverlay = document.getElementById("glitterOverlay");
    glitterOverlay.style.display = "block";

    setTimeout(function () {
        // Hide glitter effect after 5 seconds
        glitterOverlay.style.display = "none";
    }, 5000);
}, 1000); // Show after 21 seconds

        // Countdown Timer
        let countdownElement = document.getElementById("countdownTimer");
        let endTime = new Date().getTime() + 24 * 60 * 60 * 1000; // 1 day from now

        let countdownInterval = setInterval(function () {
            let now = new Date().getTime();
            let timeLeft = endTime - now;

            let days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
            let hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            let minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

            countdownElement.textContent = `${days}d ${hours}:${minutes}:${seconds}`;

            if (timeLeft < 0) {
                clearInterval(countdownInterval);
                countdownElement.textContent = "00:00:00";
            }
        }, 1000);

        setTimeout(function () {
            let modalElement = document.getElementById('redirectModal');
            let modalInstance = bootstrap.Modal.getInstance(modalElement);
            modalInstance.hide();
        }, 20000); // Close modal after 20 seconds
    }, 3000); // Show modal after 3 seconds
     function startConfetti() {
        let canvas = document.getElementById("confettiCanvas");
        let ctx = canvas.getContext("2d");
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        let confetti = [];

        function ConfettiPiece() {
            this.x = Math.random() * canvas.width;
            this.y = Math.random() * canvas.height - canvas.height;
            this.size = Math.random() * 8 + 4;
            this.color = `hsl(${Math.random() * 360}, 100%, 70%)`;
            this.velocity = {
                x: Math.random() * 2 - 1,
                y: Math.random() * 3 + 2
            };
            this.rotation = Math.random() * 360;
            this.rotationSpeed = Math.random() * 10 - 5;
        }

        ConfettiPiece.prototype.update = function () {
            this.y += this.velocity.y;
            this.x += this.velocity.x;
            this.rotation += this.rotationSpeed;
            if (this.y > canvas.height) {
                this.y = 0 - this.size;
                this.x = Math.random() * canvas.width;
            }
        };

        ConfettiPiece.prototype.draw = function () {
            ctx.save();
            ctx.translate(this.x, this.y);
            ctx.rotate((this.rotation * Math.PI) / 180);
            ctx.fillStyle = this.color;
            ctx.fillRect(-this.size / 2, -this.size / 2, this.size, this.size);
            ctx.restore();
        };

        function createConfetti() {
            for (let i = 0; i < 100; i++) {
                confetti.push(new ConfettiPiece());
            }
        }

        function animateConfetti() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            confetti.forEach((piece) => {
                piece.update();
                piece.draw();
            });
            requestAnimationFrame(animateConfetti);
        }

        createConfetti();
        animateConfetti();

        setTimeout(() => {
            confetti = [];
            ctx.clearRect(0, 0, canvas.width, canvas.height);
        }, 5000); // Stop confetti after 5 seconds
    }
</script>
 