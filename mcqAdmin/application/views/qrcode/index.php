<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="box-title">Qr code details</h3>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Qr code details</a></li>
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
                            <h3 class="card-title text-white">Qr code Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Qrcode id</th>
                                        <th>Qrcode </th>
                                        <th>Qrcode Created</th>
                                        <th>Qrcode redeemby</th>
                                        <th>Qrcode expired</th>
                                        <th>Qrcode redeemon</th>
                                        <th>Qrcode generated</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($qrlist as $q) { ?>
                                    <tr>
                                        <td><?php echo $q['idqrcodes']; ?></td>
                                        <td><?php echo $q['qrcodes_code']; ?></td>
                                        <td><?php echo $q['qrcodes_created']; ?></td>
                                        <td><?php echo $q['qrcodes_redeemby']; ?></td>
                                        <td><?php echo $q['qrcodes_expired']; ?></td>
                                        <td><?php echo $q['qrcodes_redeemdon']; ?></td>
                                        <td><?php echo $q['qrcodes_generated']; ?></td>
                                        <td>

                                            <a href="<?php echo site_url(
                                'Qrcodegenerated/qrcoderemove/' . $q['idqrcodes']
                            ); ?>" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
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