<?php include('header.php'); ?>



<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="h3 mb-2 text-gray-800">Agents Tables</h1>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>ID</th>
                            <th>Fullname</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th></th>
                        </tr>
                    </thead>
                    <!-- <tfoot>
            <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Office</th>
              <th>Age</th>
              <th>Start date</th>
              <th>Salary</th>
            </tr>
          </tfoot> -->
                    <tbody>

                        <?php
                        $srno = 1;
                        foreach ($object->get_agent() as $agentdata) {

                        ?>
                            <tr>
                                <td><?php echo $srno ?></td>
                                <td><?php echo $agentdata['agent_id'] ?></td>
                                <td><?php echo $agentdata['agent_fname'] ?></td>
                                <td><?php echo $agentdata['agent_uname'] ?></td>
                                <td><?php echo $agentdata['agent_email'] ?></td>
                                <td><?php echo $agentdata['agent_phone'] ?></td>
                                <td>
                                    <a href="agent_profile.php?agp=<?php echo $agentdata['agent_id']?>" class="btn btn-dark">Profile</a>
                                </td>
                            </tr>

                        <?php
                            $srno++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


<?php include('footer.php'); ?>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>