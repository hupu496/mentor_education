<div class="container my-4">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Home</a></li>
                <?php if(!empty($blog)){ $i=0;
                    foreach($blog as $key => $value){  $i++;
                    if($i == 1){ ?>
                      <li class="breadcrumb-item active"><?php echo $value['coursename']; ?></li>
             <?php   }}  } ?>
              
            </ol>
        </nav>

        <div class="row">
            <!-- Main Content Area -->
            <div class="col-lg-8">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <!-- Article Card 1 -->
                     <?php if(!empty($blog)){ 
                    foreach($blog as $key => $value){   ?>
                    <div class="col">
                        <div class="card article-card">
                            <div class="card-body">
                                <img src="<?php echo base_url($value['photos']); ?>" alt="" width="100%">
                                <h5 class="card-title">
                                    <a href="<?php echo base_url('homeservice/blog_description/'.$value['blogid']); ?>" class="text-decoration-none" style="color:black;"><?php echo $value['name']; ?></a>
                                </h5>
                                <p class="text-muted small">No Comments | <?php echo date('Y-m-d',strtotime($value['added_on'])); ?></p>
                                <p class="card-text"><?php echo $value['description']; ?></p>
                            </div>
                        </div>
                    </div>
<?php } } ?>
                    <!-- Article Card 2 -->
                   
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Search Box -->
                <div class="card mb-4">
                    <div class="card-body" style="background: radial-gradient(#0ea05d, transparent);">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search the site">
                                <button class="btn btn-primary search-btn" type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Recent Posts -->
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">RECENT POSTS</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <?php if(!empty($blog)){
                                foreach($blog as $key => $value){   ?>
                        
                            <li class="mb-3">
                                <a href="<?php echo base_url('homeservice/blog_description/'.$value['id']); ?>" class="" style="color:blue;"><?php echo $value['name']; ?></a>
                            </li>
                            
                            <?php }}?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
   