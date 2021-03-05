<?php include('header.php'); ?>

<section class="container-fluid">
    <?php
    foreach ($object->agent_profile() as $agp) {

        $fm = $agp['agent_fname'];
    }


    ?>

    <h1>
        <?php echo $fm ?> Profile
    </h1>

    <div class="row">
        <div class="col-12 col-lg-4">
            <img src="uploads/agents/<?php echo $agp['agent_image'] ?>" class="img-fluid" alt="">
        </div>
        <div class="col-12 col-lg-6">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <td><?php echo $agp['agent_id'] ?></td>
                </tr>
                <tr>
                    <th>Company | Agency Name</th>
                    <td><?php echo $agp['agent_company'] ?></td>
                </tr>
                <tr>
                    <th>Full Name</th>
                    <td><?php echo $agp['agent_fname'] ?></td>
                </tr>
                <tr>
                    <th>Father Name</th>
                    <td><?php echo $agp['agent_fathername'] ?></td>
                </tr>
                <tr>
                    <th>User Name</th>
                    <td><?php echo $agp['agent_uname'] ?></td>
                </tr>
                <tr>
                    <th>Eamil</th>
                    <td><?php echo $agp['agent_email'] ?></td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td><?php echo $agp['agent_phone'] ?></td>
                </tr>
                <tr>
                    <th>CNIC</th>
                    <td><?php echo $agp['agent_cnic'] ?></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><?php echo $agp['agent_password'] ?></td>
                </tr>
                <tr>
                    <th>Date of Birth</th>
                    <td><?php echo $agp['agent_dob'] ?></td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td><?php echo $agp['agent_gender'] ?></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td><?php echo $agp['agent_address'] ?></td>
                </tr>
                <tr>
                    <th>Create Date & Time</th>
                    <td><?php echo $agp['createDT'] ?></td>
                </tr>
                <tr>
                    <th>Added || Create By</th>
                    <td><?php
                        foreach ($object->addby() as $appp) {
                            echo $appp['admin_fname'];
                        }
                        ?></td>
                </tr>

            </table>
        </div>
        <div href="" class="col-12 col-lg-2">
            <a class="btn btn-info">
                Update
            </a>
            <br>
            <br>
            <a href="" class="btn btn-danger">
                Delete
            </a>
        </div>
    </div>

</section>

<?php include('footer.php'); ?>