<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="box-title">Users Redeem Details</h3>
                </div><!-- col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Users Redeem Details</a></li>
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
                            <h3 class="card-title text-white">Users Redeem Details</h3>
                        </div>
                        <!-- card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>id QRcode</th>
                                        <th>QRCode Code </th>
                                        <th>QRCode Created</th>
                                        <th>QRCode RedeemdOn</th>
                                        <!-- <th>Actions</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php foreach ($history as $h) { ?> 
                                    <tr>
                                        <td><?php echo $h['idqrcodes']; ?></td>
                                        <td><?php echo $h['qrcodes_code']; ?></td>
                                        <td><?php echo $h['qrcodes_created']; ?></td>
                                        <td><?php echo $h['qrcodes_redeemdon']; ?></td>
                                        
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