<?php include('header.php'); 
                           

?>

<section class="container">
    <h3 class="text-center py-3">
        All Packages
    </h3>
    <div class="col-12">
        <div class="row">

            <?php
            foreach ($object->pkg_createBY() as $gp) {
            ?>
                <div class="col-12 col-lg-4">
                    <div class="card text-left">
                        <div class="card-header p-0">
                            
                                <div class="carousel-item active">
                                    <img src="../agent/uploads/pkg/thumbnail/<?php echo $gp['pkg_thumbnail']  ?>" class="img-fluid" alt="">
                                </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $gp['pkg_name'] ?></h4>
                            <p class="card-text">Price <b><?php echo $gp['pkg_price'] ?></b></p>

                            
                                <div class="row">
                                    <div>
                                         <img src="uploads/agents/<?php echo $gp['agent_image']  ?>" style="width:60px; height:50px;" class="img-profile rounded-circle">
                                    </div>
                                    <div class="px-3">
                                        <span><?php echo $gp['agent_uname'] ?></span>
                                        <br>
                                        <span><?php echo $gp['pkg_createDT'] ?></span>
                                    </div>
                                </div>
                                <br>
                                <a href="package_detail.php?pkgid=<?php echo $gp['pkg_id']?>" class="btn btn-primary btn-block">
                                    View More
                                </a>
                      
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>

    </div>
</section>

<?php include('footer.php'); ?>