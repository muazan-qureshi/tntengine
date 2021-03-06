<?php include('header.php'); ?>


<section class="container-fluid">
    <h1>
        Clients Query Table
    </h1>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>Sr No</th>
                <th>Query ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Date & Time</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $srno = 1;
            foreach ($object->client_query() as $cq) {
            ?>
                <tr>
                    <td><?php echo $srno; ?></td>
                    <td><?php echo $cq['cq_id'] ?></td>
                    <td><?php echo $cq['cq_name'] ?></td>
                    <td><?php echo $cq['cq_email'] ?></td>
                    <td><?php echo $cq['cq_subject'] ?></td>
                    <td><?php echo $cq['cq_message'] ?></td>
                    <td><?php echo $cq['cq_createDT'] ?></td>

                </tr>
            <?php
                $srno++;
            }
            ?>
        </tbody>
    </table>
</section>

<?php include('footer.php'); ?>