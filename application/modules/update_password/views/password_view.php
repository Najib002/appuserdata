<?php $this->load->view('header-template');?>
<?php $this->load->view('sidebar-template');?>
 <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h3>Update Password</h3>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="page-content-wrapper">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Ganti Password</h4>
                      <?php
                        if($this->session->flashdata('error')) {
                            echo '<div class="alert alert-danger" role="alert">'.$this->session->flashdata('error').'</div>';
                        }
                        if($this->session->flashdata('success')) {
                            echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('success').'</div>';
                        }
                        foreach($data_employee->result() as $row){
                            $id = $row->id;
                            $username = $row->username;
                        }
                      ?>
                    <form class="form-horizontal" name="form_input" role="form" method="post" action="<?php echo base_url('update_password/pro_edit_password')?>" enctype="multipart/form-data"> 
                      <input type="hidden" name="id" id="id" style="width: 88%;" value="<?= $id; ?>">
                      <br>


                      <div class="form-group row">
                          <label for="text-input" class="col-sm-2 col-form-label">Username</label>
                          <div class="col-sm-10">
                            <input type="text" name="username" style="width: 88%;"  placeholder="Username" class="form-control" value="<?= $username; ?>" disabled required>
                          </div>
                      </div>

                       <div class="form-group row">
                          <label for="text-input" class="col-sm-2 col-form-label">Password Baru</label>
                          <div class="col-sm-10">
                            <input type="password" name="password_baru" style="width: 88%;"  placeholder="Password Baru" class="form-control" required autofocus>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="text-input" class="col-sm-2 col-form-label">Konfirmasi Password Baru</label>
                          <div class="col-sm-10">
                            <input type="password" name="konfirmasi_password" style="width: 88%;"  class="form-control" placeholder="Konfirmasi Password Baru" required>
                          </div>
                      </div>

                          <br/>
                      <div class="form-actions text-left" style="margin-left: 5px;">
                          <button type="submit" class="btn btn-success mr-2"><i class="mdi mdi-check"></i> Save </button>
                          <a href="<?php echo base_url('dashboard');?>">
                            <button type=button value="Cancel" class="btn btn-danger"><i class="mdi mdi-close"></i> Cancel </button>
                          </a>
                      </div>

                          </div>
                          </form>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div>
                        <!-- end page content-->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->

<?php $this->load->view('footer-template');?>


