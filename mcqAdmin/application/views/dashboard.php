 <div class="content-wrapper">
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0 text-dark">Dashboard</h1>
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Home</a></li>
                         <li class="breadcrumb-item active">Admin</li>
                     </ol>
                 </div>
             </div>
         </div>
     </div>
     <!-- /.content-header -->

     <!-- Main content -->
     <section class="content">
         <div class="container-fluid">
             <!-- Small boxes (Stat box) -->
             <div class="row">
                 <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-danger">
                         <div class="inner">
                             <p>Total Users Count</p>
                             <h3>
                                <?php echo $this->db->count_all('users') ?>
                             </h3>
                         </div>
                         <div class="icon">
                             <i class="fas fa-users"></i>
                         </div>
                         <a href="<?php echo base_url('Dashboard/studentIndex') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
                 <!-- ./col -->
                 <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-success">
                         <div class="inner">
                             <p>Total Questions Added</p>
                             <h3>
                             <?php echo $this->db->count_all('questions') ?>
                             </h3>
                         </div>
                         <div class="icon">
                             <i class="fa fa-question-circle"></i>
                         </div>
                         <a href="<?php echo base_url('Downloads/question') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
                 <!-- ./col -->
                 <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-warning">
                         <div class="inner">
                             <p>Total upcoming exams</p>
                             <h3>
                             <?php echo $this->db->count_all('upcomingexams') ?>
                             </h3>
                         </div>
                         <div class="icon">
                             <i class="fas fa-book-open"></i>
                         </div>
                         <a href="<?php echo base_url('Downloads/ue') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
                 <!-- ./col -->
                 <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-purple">
                         <div class="inner">
                             <p>Total exams</p>
                             <h3>
                             <?php echo $this->db->count_all('exams') ?>
                             </h3>
                         </div>
                         <div class="icon">
                             <i class="fas fa-book-open"></i>
                         </div>
                         <a href="<?php echo base_url('Downloads/exam') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
                 <!-- ./col -->
             </div>
             <!-- /.row -->
         </div>
         <div class="card card-success">
         </div>
     </section>

     <!-- Marquee Start -->
     <section class="content">
         <div class="row">
             <div class="col-md-12">
                 <div class="card card-primary">
                     <div class="card-header bg-secondary">
                         <h3 class="card-title">Edit moving text</h3>
                     </div>

                     <div class="card-header bg-light">
                         <p> <b> Text In moving : </b> <?php echo $martext['marquee_text'] ?> </p>
                     </div>
                     <?php echo form_open('Dashboard/editmarque/' . $martext['idmarquee']); ?>
                     <div class="card-body">
                         <div class="row container-fluid">
                             <div class="col-md-8">
                                 <label for="textone" class="control-label">Text</label>
                                 <div class="form-group">
                                     <input type="text" name="textone" value="<?php echo $this->input->post('textone') ? $this->input->post('textone') : $martext['marquee_text']; ?>" class="form-control" id="mtext" />
                                     <span style="color:red"><?php echo form_error('textone'); ?></span>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="box-footer">
                         <button type="submit" class="btn text-white bg-success" style="margin-left:20px; margin-bottom:10px;">
                             Submit
                         </button>
                     </div>
                     <?php echo form_close(); ?>
                 </div>
             </div>
         </div>

     </section>
     <!-- Marquee End -->

     <!-- Notifications -->
     <section class="content">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-12">
                     <div class="card">
                         <div class="card-header bg-dark">
                             <h3 class="card-title">Notifications list </h3>
                         </div>
                         <!-- /.card-header -->
                         <div class="card-body">
                             <table id="example1" class="table table-bordered table-striped">
                                 <thead>
                                     <tr>
                                         <th>Title </th>
                                         <th>Description</th>
                                         <th>Action</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php foreach ($notice  as $d) { ?>
                                         <tr>
                                             <td> <?php echo $d['notices_title']; ?> </td>
                                             <td> <?php echo $d['notices_desc']; ?> </td>
                                             <td> <a href="<?php echo site_url('Downloads/removeNotices/' . $d['idnotices']); ?>" class="btn btn-danger btn-sm text-white"><span class="fa fa-trash-alt"></span> Delete</a></td>
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