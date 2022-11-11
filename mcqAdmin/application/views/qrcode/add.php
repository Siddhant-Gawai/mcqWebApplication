<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="box-title">Add Qrcode</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">QR Code</a></li>
                        <li class="breadcrumb-item active">Add</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color:#20A4F3">
                        <h3 class="card-title text-white">QR Code</h3>
                    </div>
                    <?php echo form_open('Qrcodegenerater/qrcode'); ?>
                    <div class="card-body">
                        <div class="row container-fluid">
                            <div class="col-md-8">
                                <label for="classroom" class="control-label">Amount</label>
                                <div class="form-group">
                                    <input type="Number" placeholder="Enter amount" name="amount"
                                        value="<?php echo $this->input->post('amount'); ?>" class="form-control"
                                        id="amount" /><span
                                        style="color:red"><?php echo form_error('amount'); ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <label for="classroom" class="control-label">Quantity</label>
                            <div class="form-group">
                                <input type="number" placeholder="Enter quantity" name="quantity"
                                    value="<?php echo $this->input->post('quantity'); ?>" class="form-control"
                                    id="quantity" /><span style="color:red"><?php echo form_error('quantity'); ?></span>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <label for="color" class="control-label">Background Color</label>
                            <div class="form-group">
                                <input type="color" placeholder="Enter color" name="color"
                                    value="<?php echo $this->input->post('color'); ?>" class="form-control"
                                    id="color" /><span style="color:red"><?php echo form_error('color'); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn text-white btn-primary"
                            style="margin-left:20px; margin-bottom:10px;">
                            <i class="fa fa-check text-white"></i> Submit
                        </button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>

    </section>
</div>