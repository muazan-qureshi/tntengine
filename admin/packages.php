<?php include('header.php'); ?>

<section>
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
                        <img class="card-img-top" src="../agent/uploads/pkg/" alt="">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $gp['pkg_name']?></h4>
                            <p class="card-text">Price <b><?php echo $gp['pkg_price']?></b></p>
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