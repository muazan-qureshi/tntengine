<?php include('header.php'); ?>

<section class="container">
    <h3 class="text-center py-3">
        All Packages
    </h3>
    <div class="col-12">
        <div class="row">

            <?php
            foreach ($object->get_pkgs() as $gp) {
            ?>
                <div class="col-12 col-lg-4">
                    <div class="card text-left">
                        <div class="card-header p-0">
                            <?php
                            $img = json_decode($gp['pkg_image']);
                            $count = count(json_decode($gp['pkg_image']));
                            for ($i = 0; $i < $count; $i++) {

                            ?>
                                <div class="carousel-item active">
                                    <img src="../agent/uploads/pkg/<?php echo $img[$i] ?>" class="img-fluid" alt="">

                                </div>

                            <?php } ?>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $gp['pkg_name'] ?></h4>
                            <p class="card-text">Price <b><?php echo $gp['pkg_price'] ?></b></p>

                            <?php
                            // $a = $gp['pkg_createBY'];
                            // foreach ($object->pkg_createBY() as $cby) {
                            ?>
                                <div class="row">
                                    <div>
                                        <img src="uploads/agents/<?php //echo $cby['aimg'] ?>" style="width:60px; height:50px;" class="img-profile rounded-circle">
                                    </div>
                                    <div class="px-3">
                                        <span><?php //echo $cby['afname'] ?></span>
                                        <br>
                                        <span><?php //echo $cby['cdt'] ?></span>
                                    </div>
                                </div>
                                <br>
                                <button class="btn btn-primary btn-block">
                                    View More
                                </button>
                            <?php //} ?>
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