<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="box-title">Download Material List</h3>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Downloads</a></li>
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
                }, 3000);
            </script>
        </div>
        <div id="mydiv1">
            <?php echo $this->session->flashdata('danger'); ?>

            <script>
                setTimeout(function() {
                    $('#mydiv1').hide('fast');
                }, 3000);
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
                        <div class="card-header bg-white">
                            <h3 class="card-title">Download Material list | <a href="<?php echo base_url('Downloads/add'); ?>" class="btn btn-primary text-white">Add Download Material</a>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Title </th>
                                        <th>Description</th>
                                        <th>Links</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($downloads  as $d) { ?>
                                        <tr>
                                            <td> <?php echo $d['downloads_title']; ?> </td>
                                            <td> <?php echo $d['downloads_desc']; ?> </td>
                                            <!-- <td> <a href="<?php echo $d['downloads_links']; ?>" target="_blank" download>View Link</a> </td> -->
                                            <td>
                                                <?php
                                                if ($d['downloads_links'] == '0') {
                                                    echo ('<a href="');
                                                    echo $o['downloads_links'];
                                                    echo ('" target="blank"><span class="btn btn-sm btn-danger">Not availabale</span>');
                                                } else {
                                                    echo ('<a href="');
                                                    echo $d['downloads_links'];
                                                    echo ('" target="_blank"><span class="btn btn-sm btn-success">Open</span> </a>');
                                                }
                                                ?>
                                            </td>

                                            <td>
                                                <a href="<?php echo site_url('Downloads/removeDownload/' . $d['iddownloads']); ?>" class="btn btn-danger btn-sm text-white"> Delete</a>
                                                <a href="<?php echo site_url('Downloads/editDownload/' . $d['iddownloads']); ?>" class="btn btn-primary btn-sm text-white"><span class="fa fa-pen-alt"></span> Edit</a>
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