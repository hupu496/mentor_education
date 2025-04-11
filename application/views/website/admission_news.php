    <div class="container my-4">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="main-content">
                    <h2 class="mb-4">Category: Admission News</h2>

                    <!-- Post 1 -->
                    <?php if(!empty($blog)){
                        foreach ($blog as $key => $value) {?>
                    <div class="post-item d-flex">
                        <img src="<?php echo base_url($value['photos']); ?>" alt="NMAT Exam" class="post-thumbnail">
                        <div>
                            <h3><a href="#" class="text-decoration-none"><?php echo $value['name']; ?></a></h3>
                            <div class="post-meta mb-2">
                                <span><i class="far fa-user"></i> Mentor Education</span>
                                <span class="ms-3"><i class="far fa-comments"></i> No Comments</span>
                            </div>
                            <p><?php echo $value['description']; ?>...</p>
                            <a href="<?php echo base_url('homeservice/blog_description/'.$value['id']); ?>" class="btn btn-primary btn-sm">Continue Reading...</a>
                        </div>
                    </div>
                <?php    } } ?>
                    <!-- Post 2 -->
                   
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Search Box -->
                <div class="search-box" style="
    background: radial-gradient(#0ea05d, transparent);
">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search the site">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </form>
                </div>

                <!-- Recent Posts -->
                <div class="recent-posts">
                    <h4 class="mb-3">RECENT POSTS</h4>
                    <ul>
                        <?php if(!empty($blog)){
                            foreach ($blog as $key => $value) {  ?>
                              <li><a href="<?php echo base_url('homeservice/blog_description/'.$value['id']); ?>" class="text-decoration-none" style="color:blue;"><?php echo $value['name']; ?></a></li>
                       <?php     }
                        }  ?>
                        
                      
                    </ul>
                </div>
            </div>
        </div>
    </div>