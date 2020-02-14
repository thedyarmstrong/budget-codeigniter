<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard')?>">Home</a></li>
            <li class="breadcrumb-item">Budget</li>
            <li class="breadcrumb-item active">Arsip Budget</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- <div class="container-fluid"> -->
      <!-- <div class="row"> -->
        <!-- <div class="col-12"> -->


          <!-- Card 2018 -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><font color="blue"><i class="fas fa-copy"></i> Arsip Budget 2018</font></h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#b12018">B1</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#b22018">B2</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#rutin2018">Rutin</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#nonrutin2018">Non Rutin</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#emergency2018">Emergency</a>
                  </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div id="b12018" class="container tab-pane active"><br>
                    <div class="table-responsive">
                      <table id="example1" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Nama Project</th>
                            <th>PIC</th>
                            <th>Total Budget</th>
                            <th>Sisa Budget</th>
                            <th>Status</th>
                            <th>View</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $i = 1;
                          foreach ($b12018 as $key1) {
                          $sisabudget1 = $key1['totalbudget'] - $key1['totbpu'];
                          ?>
                          <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $key1['nama'] ?></td>
                            <td><?php echo $key1['pengaju'] ?> - <?php echo $key1['divisi'] ?></td>
                            <td><?php echo 'Rp. ' . number_format( $key1['totalbudget'], 0 , '' , ',' ); ?></td>
                            <td><?php echo 'Rp. ' . number_format( $sisabudget1, 0 , '' , ',' ); ?></td>
                            <td><?php echo $key1['status'] ?></td>
                            <td><a href=""><i class="fa fa-eye"></i> View</a></td>
                            <td>
                              <a href="" class="btn btn-block bg-gradient-primary btn-sm"><i class="fa fa-folder-open"></i> Unarchive</a>
                            </td>
                          </tr>
                          <?php
                          }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div id="b22018" class="container tab-pane fade"><br>
                    <div class="table-responsive">
                      <table id="example3" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Nama Project</th>
                            <th>PIC</th>
                            <th>Total Budget</th>
                            <th>Sisa Budget</th>
                            <th>Status</th>
                            <th>View</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $i = 1;
                          foreach ($b22018 as $key2) {
                          $sisabudget2 = $key2['totalbudget'] - $key2['totbpu'];
                          ?>
                          <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $key2['nama'] ?></td>
                            <td><?php echo $key2['pengaju'] ?> - <?php echo $key2['divisi'] ?></td>
                            <td><?php echo 'Rp. ' . number_format( $key2['totalbudget'], 0 , '' , ',' ); ?></td>
                            <td><?php echo 'Rp. ' . number_format( $sisabudget2, 0 , '' , ',' ); ?></td>
                            <td><?php echo $key2['status'] ?></td>
                            <td><a href=""><i class="fa fa-eye"></i> View</a></td>
                            <td>
                              <a href="" class="btn btn-block bg-gradient-primary btn-sm"><i class="fa fa-folder-open"></i> Unarchive</a>
                            </td>
                          </tr>
                          <?php
                          }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div id="rutin2018" class="container tab-pane fade"><br>
                    <div class="table-responsive">
                      <table id="example4" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Nama Project</th>
                            <th>PIC</th>
                            <th>Total Budget</th>
                            <th>Sisa Budget</th>
                            <th>Status</th>
                            <th>View</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $i = 1;
                          foreach ($rutin2018 as $key3) {
                          $sisabudget3 = $key3['totalbudget'] - $key3['totbpu'];
                          ?>
                          <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $key3['nama'] ?></td>
                            <td><?php echo $key3['pengaju'] ?> - <?php echo $key3['divisi'] ?></td>
                            <td><?php echo 'Rp. ' . number_format( $key3['totalbudget'], 0 , '' , ',' ); ?></td>
                            <td><?php echo 'Rp. ' . number_format( $sisabudget3, 0 , '' , ',' ); ?></td>
                            <td><?php echo $key3['status'] ?></td>
                            <td><a href=""><i class="fa fa-eye"></i> View</a></td>
                            <td>
                              <a href="" class="btn btn-block bg-gradient-primary btn-sm"><i class="fa fa-folder-open"></i> Unarchive</a>
                            </td>
                          </tr>
                          <?php
                          }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div id="nonrutin2018" class="container tab-pane fade"><br>
                    <div class="table-responsive">
                      <table id="example5" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Nama Project</th>
                            <th>PIC</th>
                            <th>Total Budget</th>
                            <th>Sisa Budget</th>
                            <th>Status</th>
                            <th>View</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $i = 1;
                          foreach ($nonrutin2018 as $key4) {
                          $sisabudget4 = $key4['totalbudget'] - $key4['totbpu'];
                          ?>
                          <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $key4['nama'] ?></td>
                            <td><?php echo $key4['pengaju'] ?> - <?php echo $key4['divisi'] ?></td>
                            <td><?php echo 'Rp. ' . number_format( $key4['totalbudget'], 0 , '' , ',' ); ?></td>
                            <td><?php echo 'Rp. ' . number_format( $sisabudget4, 0 , '' , ',' ); ?></td>
                            <td><?php echo $key4['status'] ?></td>
                            <td><a href=""><i class="fa fa-eye"></i> View</a></td>
                            <td>
                              <a href="" class="btn btn-block bg-gradient-primary btn-sm"><i class="fa fa-folder-open"></i> Unarchive</a>
                            </td>
                          </tr>
                          <?php
                          }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div id="emergency2018" class="container tab-pane fade"><br>
                    <div class="table-responsive">
                      <table id="example6" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Nama Project</th>
                            <th>PIC</th>
                            <th>Total Budget</th>
                            <th>Sisa Budget</th>
                            <th>Status</th>
                            <th>View</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $i = 1;
                          foreach ($emergency2018 as $key5) {
                          $sisabudget5 = $key5['totalbudget'] - $key5['totbpu'];
                          ?>
                          <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $key5['nama'] ?></td>
                            <td><?php echo $key5['pengaju'] ?> - <?php echo $key5['divisi'] ?></td>
                            <td><?php echo 'Rp. ' . number_format( $key5['totalbudget'], 0 , '' , ',' ); ?></td>
                            <td><?php echo 'Rp. ' . number_format( $sisabudget5, 0 , '' , ',' ); ?></td>
                            <td><?php echo $key5['status'] ?></td>
                            <td><a href=""><i class="fa fa-eye"></i> View</a></td>
                            <td>
                              <a href="" class="btn btn-block bg-gradient-primary btn-sm"><i class="fa fa-folder-open"></i> Unarchive</a>
                            </td>
                          </tr>
                          <?php
                          }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- //Tab panes -->
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card  2018-->

        <!-- </div>
      </div> -->
    <!-- </div> -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
