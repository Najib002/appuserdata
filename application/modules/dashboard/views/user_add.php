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
                                    <h3>Data User</h3>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="page-content-wrapper">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Add User</h4>

                      <form class="form-horizontal" name="form_input" role="form" method="post" action="<?php echo base_url('dashboard/pro_add_user')?>" enctype="multipart/form-data"> 
                      <br>
                      <div class="form-group row">
                          <label for="text-input" class="col-sm-2 col-form-label">Name</label>
                          <div class="col-sm-10">
                            <input type="text" name="name_user" style="width: 88%;"  placeholder="Name" class="form-control" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="text-input" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" name="email" style="width: 88%;" class="form-control" placeholder="Email" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="text-input" class="col-sm-2 col-form-label">Address</label>
                          <div class="col-sm-10">
                            <input type="text" name="address" style="width: 88%;" class="form-control" placeholder="Address" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="text-input" class="col-sm-2 col-form-label">NIK</label>
                          <div class="col-sm-10">
                            <input type="text" id="nik" name="nik" style="width: 88%;" class="form-control" placeholder="NIK" onchange="getBirthdateHandler()" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="text-input" class="col-sm-2 col-form-label">Gender</label>
                          <div class="col-sm-10">
                              <input type="radio" name="gender" value="Male" required>
                                <label for="male">Male</label><br>
                              <input type="radio" name="gender" value="Female" required>
                                <label for="female">Female</label>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="text-input" class="col-sm-2 col-form-label">Birthdate</label>
                          <div class="col-sm-10">
                            <input type="text" id="birthdate" name="birthdate" style="width: 88%;" class="form-control" disabled required>
                          </div>
                      </div>

                          <br/>
                          <div class="form-actions text-left" style="margin-left: 5px;">
                            <button type="submit" class="btn btn-success mr-2"><i class="mdi mdi-check"></i> Save</button>
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
                <script src="<?php echo base_url(); ?>assets/assets/js/birthdateHandler.js"></script>

<?php $this->load->view('footer-template');?>
