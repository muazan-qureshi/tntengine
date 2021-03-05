<?php include('header.php'); ?>

<section class="container-fluid">
    <?php
    foreach ($object->admin_profile() as $adp) {

        $fm = $adp['admin_fname'];
    }

    ?>

    <h1>
        <?php echo $fm ?> Profile
    </h1>

    <div class="row">
        <div class="col-12 col-lg-4">
            <img src="uploads/admins/<?php echo $adp['admin_image'] ?>" class="img-fluid" alt="">
        </div>
        <div class="col-12 col-lg-4">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <td><?php echo $adp['admin_id'] ?></td>
                </tr>
                <tr>
                    <th>Full Name</th>
                    <td><?php echo $adp['admin_fname'] ?></td>
                </tr>
                <tr>
                    <th>Father Name</th>
                    <td><?php echo $adp['admin_fathername'] ?></td>
                </tr>
                <tr>
                    <th>User Name</th>
                    <td><?php echo $adp['admin_uname'] ?></td>
                </tr>
                <tr>
                    <th>Eamil</th>
                    <td><?php echo $adp['admin_email'] ?></td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td><?php echo $adp['admin_phone'] ?></td>
                </tr>
                <tr>
                    <th>CNIC</th>
                    <td><?php echo $adp['admin_cnic'] ?></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><?php echo $adp['admin_password'] ?></td>
                </tr>
                <tr>
                    <th>Date of Birth</th>
                    <td><?php echo $adp['admin_dob'] ?></td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td><?php echo $adp['admin_gender'] ?></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td><?php echo $adp['admin_address'] ?></td>
                </tr>
                <tr>
                    <th>Create Date & Time</th>
                    <td><?php echo $adp['createDT'] ?></td>
                </tr>

            </table>
        </div>
    </div>

</section>

<?php include('footer.php'); ?>