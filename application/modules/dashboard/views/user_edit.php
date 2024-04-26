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
                                            <h4 class="mt-0 header-title">Edit User</h4>

                      <?php
                        foreach($data_user->result() as $item){
                            $id = $item->id;
                            $name_user = $item->name;
                            $email = $item->email;
                            $address = $item->address;
                            $nik = $item->nik;
                            $gender = $item->gender;
                        }
                      ?>

                      <form class="form-horizontal" name="form_input" role="form" method="post" action="<?php echo base_url('dashboard/pro_edit_user')?>" enctype="multipart/form-data"> 
                      <input type="hidden" name="id" id="id" style="width: 88%;" value="<?php echo $id; ?>">

                      <br>
                      <div class="form-group row">
                          <label for="text-input" class="col-sm-2 col-form-label">Name</label>
                          <div class="col-sm-10">
                            <input type="text" name="name_user" style="width: 88%;"  placeholder="Nama Customer" class="form-control" value="<?= $name_user ?>" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="text-input" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" name="email" style="width: 88%;"  class="form-control" placeholder="Email" value="<?= $email ?>" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="text-input" class="col-sm-2 col-form-label">Address</label>
                          <div class="col-sm-10">
                            <input type="text" name="address" style="width: 88%;"  class="form-control" placeholder="Address" value="<?= $address ?>" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="text-input" class="col-sm-2 col-form-label">NIK</label>
                          <div class="col-sm-10">
                            <input type="text" id="nik" name="nik" style="width: 88%;" class="form-control" placeholder="NIK" value="<?= $nik ?>" onchange="getBirthdateHandler()" required>
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
                <script type="text/javascript">
                    let nikValue = <?php echo $nik ?>;
                    let birthDate = document.getElementById("birthdate");

                    const sixDigitNumber = nikValue.toString();

                    let dateString = sixDigitNumber.substr(6, 6);

                    const day = dateString.substr(0, 2);
                    const month = dateString.substr(2, 2) - 1; // Month is 0-indexed in JavaScript Date object
                    const year = dateString.substr(4, 4); // Assuming it represents year in YY format

                    let monthNames = [
                        "January", "February", "March", "April", "May", "June", "July",
                        "August", "September", "October", "November", "December"
                    ];

                    if (year <= "24" && year >= "00") {
                        var formattedYear = "20" + year;
                    } else {
                        var formattedYear = "19" + year;
                    }

                    const formattedDate = `${day} ${monthNames[month]} ${formattedYear}`;
                    birthDate.value = formattedDate;
                </script>

                <script src="<?php echo base_url(); ?>assets/assets/js/birthdateHandler.js"></script>

<?php $this->load->view('footer-template');?>