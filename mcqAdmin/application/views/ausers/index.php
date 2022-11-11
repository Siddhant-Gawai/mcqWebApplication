<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="box-title">Users details</h3>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Users details</a></li>
                        <li class="breadcrumb-item active">Index</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-----flash messages--->
    <div class="container-fluid">
        <div id="mydivs">
            <?php echo $this->session->flashdata('success'); ?>

            <script>
            setTimeout(function() {
                $('#mydivs').hide('fast');
            }, 1000);
            </script>
        </div>
        <div id="mydiv1">
            <?php echo $this->session->flashdata('danger'); ?>

            <script>
            setTimeout(function() {
                $('#mydiv1').hide('fast');
            }, 1000);
            </script>
        </div>
    </div>
    <!-----flash messages end--->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header" style="background-color:#20A4F3">
                            <h3 class="card-title text-white">Users Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>User id</th>
                                        <th>User Name </th>
                                        <th>User CustomerID</th>
                                        <th>User Phone</th>
                                        <th>User Created</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($userslist as $u) { ?>
                                    <tr>
                                        <td><?php echo $u['idusers']; ?></td>
                                        <td><?php echo $u['users_name']; ?></td>
                                        <td><?php echo $u['users_customid']; ?></td>
                                        <td><?php echo $u['users_phone']; ?></td>
                                        <td><?php echo $u['users_created']; ?></td>
                                        <td>

                                            <a href="<?php echo site_url('Ausers/ausersremove/' . $u['idusers']); ?>" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span>&nbsp Delete</a>
                                            <a href="<?php echo site_url('Ausers/redeemh/' . $u['idusers']); ?>" class="btn btn-primary btn-sm"><span class="fa fa-gift"></span>&nbsp Redeem History</a>
                                        
                                        </td>
                                    </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>