<?php $this->load->view('header-template');?>
<?php $this->load->view('sidebar-template');?>
<style type="text/css">
  .table > tbody > tr > td, .table > tfoot > tr > td, .table > thead > tr > td {
    padding: 10px 5px;
}
</style>
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
                            <h4 class="page-title">Dashboard</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active text-white">Welcome to <?= $judul; ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="page-content-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-md-6 align-self-center">
                            <div class="card bg-primary mini-stat position-relative">
                                <div class="card-body">
                                    <div class="mini-stat-desc">
                                        <h6 class="text-uppercase verti-label mt-4 text-white-50">----------</h6>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mt-0 text-white-50">-------------------------</h6>
                                            <h3 class="mb-3 mt-0"> Users </h3>
                                            <div class="">
                                                <h4><span class="badge badge-light text-dark">Total: <?php echo $user; ?></h4>
                                            </div>
                                        </div>
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-account-group text-dark display-1 my-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="card m-b-20">
                <div class="card-body">

                  <div class="justify-content-center" id="retrieve-container" style="display:flex;">
                      <button type="submit" class="btn btn-success font-weight-bold" id="retrieve-button" style="font-size:16px; padding:10px;">
                          Generate User Data
                      </button>
                  </div>

                  <div class="" id="data-container" style="display:none;">
                    <h4 class="mt-0 header-title">Table User</h4>
                    <p align="left">
                      <a href="<?php echo base_url('dashboard/add_user');?>" class="btn btn-primary waves-effect waves-light mr-2" title="Add">
                          <i class="mdi mdi-plus"></i> Add
                      </a>
                      <a href="<?php echo base_url('dashboard/excel_user');?>" class="btn btn-success waves-effect waves-light mr-2" title="Export Excel">
                          <i class="mdi mdi-arrow-down-bold-circle"></i> Export Excel
                      </a>
                      <a href="<?php echo base_url('dashboard/pdf_user');?>" class="btn btn-danger waves-effect waves-light export-pdf" title="Export PDF">
                          <i class="mdi mdi-arrow-down-bold-circle-outline"></i> Export PDF
                      </a>
                    </p>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>

                          <tr>
                            <th style="width:5%;text-align:center;height: 30px;">No.</th>
                            <th style="width:15%;text-align:center;height: 30px;">Name</th>
                            <th style="width:15%;text-align:center;height: 30px;">Email</th>
                            <th style="width:25%;text-align:center;height: 30px;">Address</th>
                            <th style="width:15%;text-align:center;height: 30px;">NIK</th>
                            <th style="width:10%;text-align:center;height: 30px;">Gender</th>
                            <th style="width:10%;text-align:center;height: 30px;">Birthdate</th>
                            <th style="width:15%;text-align:center;height: 30px;">Option</th>
                          </tr>

                          </thead>

                        <tbody>
                        <?php
                          $no = 0;
                          if($data_user->num_rows() > 0){
                                  foreach($data_user->result() as $item){
                                    $no++;
                        ?>
                          <tr align="center" style="font-size: 12px;">
                            <td><?php echo $no;?></td>
                            <td><?php echo $item->name; ?></td>
                            <td><?php echo $item->email; ?></td>
                            <td><?php echo $item->address; ?></td>
                            <td><?php echo $item->nik; ?></td>
                            <td><?php echo $item->gender; ?></td>
                            <td id='birthdate'> </td>
                            <td>
                              <a href="<?php echo base_url('dashboard/user_update/'.$item->id);?>" class="btn btn-secondary waves-effect waves-light" title="Edit" data-original-title="Edit"><i class="mdi mdi-eye"></i> Edit</a>
                              <a href="<?php echo base_url('dashboard/user_delete/'.$item->id);?>" onClick="return confirm('Are you sure want to delete this user?');" class="btn btn-danger waves-effect waves-light" title="Delete" data-original-title="Delete"><i class="mdi mdi-delete"></i> Delete</a>
                            </td>
                          </tr>
                        <?php
                          }}
                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                  </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end page content-->

        </div> <!-- container-fluid -->

    </div> <!-- content -->
<script type="text/javascript">
    const retrieveDataUser = () => {
        let retrieveContainer = document.querySelector("#retrieve-container");
        let retrieveButton = document.getElementById("retrieve-button");
        let dataContainer = document.querySelector("#data-container");

        retrieveButton.addEventListener('click', () => {
          retrieveContainer.style.display = 'none';
          dataContainer.style.display = 'contents';
        })
    }

    const getBirthDate = () => {
        let nikValue = <?php
                        $nik_list = [];
                        foreach($data_user->result() as $item){$nik_list[] = $item->nik;}
                        $nik_item = json_encode($nik_list);
                        echo $nik_item;
                       ?>;

        let birthDate = document.querySelector("#birthdate");
        nikValue.map((row) => {
            const sixDigitNumber = row.toString();

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
            birthDate.innerHTML += `<div>${formattedDate}</div>`;
        });
    }
    retrieveDataUser();
    getBirthDate();
</script>
<?php $this->load->view('footer-template');?>