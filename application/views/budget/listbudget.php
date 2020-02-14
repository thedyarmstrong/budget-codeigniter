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
            <li class="breadcrumb-item active">Create Budget</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">


          <!-- Card 2020 -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><font color="blue"><i class="fa fa-table"></i> LIst Budget 2020</font></h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#b12020">B1</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#b22020">B2</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#rutin2020">Rutin</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#nonrutin2020">Non Rutin</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#emergency2020">Emergency</a>
                  </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div id="b12020" class="container tab-pane active"><br>
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
                          $divisinya = $this->session->userdata('ses_divisi');
                          if($divisinya == 'Direksi' OR $divisinya == 'FINANCE' OR $divisinya == 'B1'):
                          $i = 1;
                          foreach ($b12020 as $key1) {
                          $sisabudget1 = $key1['totalbudget'] - $key1['totbpu'];
                          ?>
                          <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $key1['nama'] ?></td>
                            <td><?php echo $key1['pengaju'] ?> - <?php echo $key1['divisi'] ?></td>
                            <td><?php echo 'Rp. ' . number_format( $key1['totalbudget'], 0 , '' , ',' ); ?></td>
                            <td><?php echo 'Rp. ' . number_format( $sisabudget1, 0 , '' , ',' ); ?></td>
                            <td><?php echo $key1['status'] ?></td>
                            <td>
                              <?php
                              if ($this->session->userdata('ses_divisi') == 'Direksi'){
                              ?>
                                <a href="<?php echo base_url('seebudget/seedireksi')?>/<?php echo $key1['noid']?>"><i class="fa fa-eye"></i> View</a>
                              <?php
                              }
                              else if($this->session->userdata('ses_divisi') == 'FINANCE'){
                              ?>
                                <a href="<?php echo base_url('seebudget/seefinance')?>/<?php echo $key1['noid']?>"><i class="fa fa-eye"></i> View</a>
                              <?php
                              }
                              ?>
                            </td>
                            <td>
                              <?php
                              if ($this->session->userdata('ses_divisi') == 'Direksi'){
                              ?>
                              <a href="" class="btn btn-block bg-gradient-success btn-sm"><i class="fa fa-flag-checkered"></i> Finish</a>
                              <a href="" class="btn btn-block bg-gradient-warning btn-sm tombol-hapus"><i class="fa fa-pause"></i> Dissapprove</a>
                              <?php
                              }else{
                                echo "";
                              }
                              ?>
                            </td>
                          </tr>
                          <?php
                          }
                          endif
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div id="b22020" class="container tab-pane fade"><br>
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
                          $divisinya = $this->session->userdata('ses_divisi');
                          if($divisinya == 'Direksi' OR $divisinya == 'FINANCE' OR $divisinya == 'B2'):
                          $i = 1;
                          foreach ($b22020 as $key2) {
                          $sisabudget2 = $key2['totalbudget'] - $key2['totbpu'];
                          ?>
                          <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $key2['nama'] ?></td>
                            <td><?php echo $key2['pengaju'] ?> - <?php echo $key2['divisi'] ?></td>
                            <td><?php echo 'Rp. ' . number_format( $key2['totalbudget'], 0 , '' , ',' ); ?></td>
                            <td><?php echo 'Rp. ' . number_format( $sisabudget2, 0 , '' , ',' ); ?></td>
                            <td><?php echo $key2['status'] ?></td>
                            <td>
                              <?php
                              if ($this->session->userdata('ses_divisi') == 'Direksi'){
                              ?>
                                <a href="<?php echo base_url('seebudget/seedireksi')?>/<?php echo $key2['noid']?>"><i class="fa fa-eye"></i> View</a>
                              <?php
                              }
                              else if($this->session->userdata('ses_divisi') == 'FINANCE'){
                              ?>
                                <a href="<?php echo base_url('seebudget/seefinance')?>/<?php echo $key2['noid']?>"><i class="fa fa-eye"></i> View</a>
                              <?php
                              }
                              ?>
                            </td>
                            <td>
                              <?php
                              if ($this->session->userdata('ses_divisi') == 'Direksi'){
                              ?>
                              <a href="" class="btn btn-block bg-gradient-success btn-sm"><i class="fa fa-flag-checkered"></i> Finish</a>
                              <a href="" class="btn btn-block bg-gradient-warning btn-sm tombol-hapus"><i class="fa fa-pause"></i> Dissapprove</a>
                              <?php
                              }else{
                                echo "";
                              }
                              ?>
                            </td>
                          </tr>
                          <?php
                          }
                          endif
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div id="rutin2020" class="container tab-pane fade"><br>
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
                          $divisinya = $this->session->userdata('ses_divisi');
                          if($divisinya == 'Direksi' OR $divisinya == 'FINANCE'):
                          $i = 1;
                          foreach ($rutin2020 as $key3) {
                          $sisabudget3 = $key3['totalbudget'] - $key3['totbpu'];
                          ?>
                          <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $key3['nama'] ?></td>
                            <td><?php echo $key3['pengaju'] ?> - <?php echo $key3['divisi'] ?></td>
                            <td><?php echo 'Rp. ' . number_format( $key3['totalbudget'], 0 , '' , ',' ); ?></td>
                            <td><?php echo 'Rp. ' . number_format( $sisabudget3, 0 , '' , ',' ); ?></td>
                            <td><?php echo $key3['status'] ?></td>
                            <td>
                              <?php
                              if ($this->session->userdata('ses_divisi') == 'Direksi'){
                              ?>
                                <a href="<?php echo base_url('seebudget/seedireksi')?>/<?php echo $key3['noid']?>"><i class="fa fa-eye"></i> View</a>
                              <?php
                              }
                              else if($this->session->userdata('ses_divisi') == 'FINANCE'){
                              ?>
                                <a href="<?php echo base_url('seebudget/seefinance')?>/<?php echo $key3['noid']?>"><i class="fa fa-eye"></i> View</a>
                              <?php
                              }
                              ?>
                            </td>
                            <td>
                              <?php
                              if($this->session->userdata('ses_divisi') == 'FINANCE' && $this->session->userdata('ses_hak_akses') == 'Manager' || $this->session->userdata('ses_divisi') == 'Direksi'){
                              ?>
                              <a href="" class="btn btn-block bg-gradient-success btn-sm"><i class="fa fa-flag-checkered"></i> Finish</a>
                              <a href="" class="btn btn-block bg-gradient-warning btn-sm tombol-hapus"><i class="fa fa-pause"></i> Dissapprove</a>
                              <?php
                              }
                              else{
                                echo "";
                              }
                              ?>
                            </td>
                          </tr>
                          <?php
                          }
                          endif
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div id="nonrutin2020" class="container tab-pane fade"><br>
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
                          foreach ($nonrutin2020 as $key4) {
                          $sisabudget4 = $key4['totalbudget'] - $key4['totbpu'];
                          ?>
                          <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $key4['nama'] ?></td>
                            <td><?php echo $key4['pengaju'] ?> - <?php echo $key4['divisi'] ?></td>
                            <td><?php echo 'Rp. ' . number_format( $key4['totalbudget'], 0 , '' , ',' ); ?></td>
                            <td><?php echo 'Rp. ' . number_format( $sisabudget4, 0 , '' , ',' ); ?></td>
                            <td><?php echo $key4['status'] ?></td>
                            <td>
                              <?php
                              if ($this->session->userdata('ses_divisi') == 'Direksi'){
                              ?>
                                <a href="<?php echo base_url('seebudget/seedireksi')?>/<?php echo $key4['noid']?>"><i class="fa fa-eye"></i> View</a>
                              <?php
                              }
                              else if($this->session->userdata('ses_divisi') == 'FINANCE'){
                              ?>
                                <a href="<?php echo base_url('seebudget/seefinance')?>/<?php echo $key4['noid']?>"><i class="fa fa-eye"></i> View</a>
                              <?php
                              }
                              ?>
                            </td>
                            <td>
                              <?php
                              if($this->session->userdata('ses_divisi') == 'FINANCE' && $this->session->userdata('ses_hak_akses') == 'Manager' || $this->session->userdata('ses_divisi') == 'Direksi'){
                              ?>
                              <a href="" class="btn btn-block bg-gradient-success btn-sm"><i class="fa fa-flag-checkered"></i> Finish</a>
                              <a href="" class="btn btn-block bg-gradient-warning btn-sm tombol-hapus"><i class="fa fa-pause"></i> Dissapprove</a>
                              <?php
                              }
                              else{
                                echo "";
                              }
                              ?>
                            </td>
                          </tr>
                          <?php
                          }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div id="emergency2020" class="container tab-pane fade"><br>
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
                          $divisinya = $this->session->userdata('ses_divisi');
                          if($divisinya == 'Direksi' OR $divisinya == 'FINANCE'):
                          $i = 1;
                          foreach ($emergency2020 as $key5) {
                          $sisabudget5 = $key5['totalbudget'] - $key5['totbpu'];
                          ?>
                          <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $key5['nama'] ?></td>
                            <td><?php echo $key5['pengaju'] ?> - <?php echo $key5['divisi'] ?></td>
                            <td><?php echo 'Rp. ' . number_format( $key5['totalbudget'], 0 , '' , ',' ); ?></td>
                            <td><?php echo 'Rp. ' . number_format( $sisabudget5, 0 , '' , ',' ); ?></td>
                            <td><?php echo $key5['status'] ?></td>
                            <td>
                              <?php
                              if ($this->session->userdata('ses_divisi') == 'Direksi'){
                              ?>
                                <a href="<?php echo base_url('seebudget/seedireksi')?>/<?php echo $key5['noid']?>"><i class="fa fa-eye"></i> View</a>
                              <?php
                              }
                              else if($this->session->userdata('ses_divisi') == 'FINANCE'){
                              ?>
                                <a href="<?php echo base_url('seebudget/seefinance')?>/<?php echo $key5['noid']?>"><i class="fa fa-eye"></i> View</a>
                              <?php
                              }
                              ?>
                            </td>
                            <td>
                              <?php
                              if($this->session->userdata('ses_divisi') == 'FINANCE' && $this->session->userdata('ses_hak_akses') == 'Manager' || $this->session->userdata('ses_divisi') == 'Direksi'){
                              ?>
                              <a href="" class="btn btn-block bg-gradient-success btn-sm"><i class="fa fa-flag-checkered"></i> Finish</a>
                              <a href="" class="btn btn-block bg-gradient-warning btn-sm tombol-hapus"><i class="fa fa-pause"></i> Dissapprove</a>
                              <?php
                              }
                              else{
                                echo "";
                              }
                              ?>
                            </td>
                          </tr>
                          <?php
                          }
                          endif
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
          <!-- /.card  2020-->

          <!-- Card 2019 -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><font color="blue"><i class="fa fa-table"></i> LIst Budget 2019</font></h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#b12019">B1</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#b22019">B2</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#rutin2019">Rutin</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#nonrutin2019">Non Rutin</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#emergency2019">Emergency</a>
                  </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div id="b12019" class="container tab-pane active"><br>
                    <div class="table-responsive">
                      <table id="example7" class="table table-bordered table-hover">
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
                          $divisinya = $this->session->userdata('ses_divisi');
                          if($divisinya == 'Direksi' OR $divisinya == 'FINANCE' OR $divisinya == 'B1'):
                          $i = 1;
                          foreach ($b12019 as $key6) {
                          $sisabudget6 = $key6['totalbudget'] - $key6['totbpu'];
                          ?>
                          <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $key6['nama'] ?></td>
                            <td><?php echo $key6['pengaju'] ?> - <?php echo $key6['divisi'] ?></td>
                            <td><?php echo 'Rp. ' . number_format( $key6['totalbudget'], 0 , '' , ',' ); ?></td>
                            <td><?php echo 'Rp. ' . number_format( $sisabudget6, 0 , '' , ',' ); ?></td>
                            <td><?php echo $key6['status'] ?></td>
                            <td>
                              <?php
                              if ($this->session->userdata('ses_divisi') == 'Direksi'){
                              ?>
                                <a href="<?php echo base_url('seebudget/seedireksi')?>/<?php echo $key6['noid']?>"><i class="fa fa-eye"></i> View</a>
                              <?php
                              }
                              else if($this->session->userdata('ses_divisi') == 'FINANCE'){
                              ?>
                                <a href="<?php echo base_url('seebudget/seefinance')?>/<?php echo $key6['noid']?>"><i class="fa fa-eye"></i> View</a>
                              <?php
                              }
                              ?>
                            </td>
                            <td>
                              <?php
                              if($this->session->userdata('ses_divisi') == 'FINANCE' && $this->session->userdata('ses_hak_akses') == 'Manager' || $this->session->userdata('ses_divisi') == 'Direksi'){
                              ?>
                              <a href="" class="btn btn-block bg-gradient-success btn-sm"><i class="fa fa-flag-checkered"></i> Finish</a>
                              <a href="" class="btn btn-block bg-gradient-warning btn-sm tombol-hapus"><i class="fa fa-pause"></i> Dissapprove</a>
                              <?php
                              }
                              else{
                                echo "";
                              }
                              ?>
                            </td>
                          </tr>
                          <?php
                          }
                          endif
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div id="b22019" class="container tab-pane fade"><br>
                    <div class="table-responsive">
                      <table id="example8" class="table table-bordered table-hover">
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
                          $divisinya = $this->session->userdata('ses_divisi');
                          if($divisinya == 'Direksi' OR $divisinya == 'FINANCE' OR $divisinya == 'B2'):
                          $i = 1;
                          foreach ($b22019 as $key7) {
                          $sisabudget7 = $key7['totalbudget'] - $key7['totbpu'];
                          ?>
                          <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $key7['nama'] ?></td>
                            <td><?php echo $key7['pengaju'] ?> - <?php echo $key7['divisi'] ?></td>
                            <td><?php echo 'Rp. ' . number_format( $key7['totalbudget'], 0 , '' , ',' ); ?></td>
                            <td><?php echo 'Rp. ' . number_format( $sisabudget7, 0 , '' , ',' ); ?></td>
                            <td><?php echo $key7['status'] ?></td>
                            <td>
                              <?php
                              if ($this->session->userdata('ses_divisi') == 'Direksi'){
                              ?>
                                <a href="<?php echo base_url('seebudget/seedireksi')?>/<?php echo $key7['noid']?>"><i class="fa fa-eye"></i> View</a>
                              <?php
                              }
                              else if($this->session->userdata('ses_divisi') == 'FINANCE'){
                              ?>
                                <a href="<?php echo base_url('seebudget/seefinance')?>/<?php echo $key7['noid']?>"><i class="fa fa-eye"></i> View</a>
                              <?php
                              }
                              ?>
                            </td>
                            <td>
                              <?php
                              if($this->session->userdata('ses_divisi') == 'FINANCE' && $this->session->userdata('ses_hak_akses') == 'Manager' || $this->session->userdata('ses_divisi') == 'Direksi'){
                              ?>
                              <a href="" class="btn btn-block bg-gradient-success btn-sm"><i class="fa fa-flag-checkered"></i> Finish</a>
                              <a href="" class="btn btn-block bg-gradient-warning btn-sm tombol-hapus"><i class="fa fa-pause"></i> Dissapprove</a>
                              <?php
                              }
                              else{
                                echo "";
                              }
                              ?>
                            </td>
                          </tr>
                          <?php
                          }
                          endif
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div id="rutin2019" class="container tab-pane fade"><br>
                    <div class="table-responsive">
                      <table id="example9" class="table table-bordered table-hover">
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
                          $divisinya = $this->session->userdata('ses_divisi');
                          if($divisinya == 'Direksi' OR $divisinya == 'FINANCE'):
                          $i = 1;
                          foreach ($rutin2019 as $key8) {
                          $sisabudget8 = $key8['totalbudget'] - $key8['totbpu'];
                          ?>
                          <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $key8['nama'] ?></td>
                            <td><?php echo $key8['pengaju'] ?> - <?php echo $key8['divisi'] ?></td>
                            <td><?php echo 'Rp. ' . number_format( $key8['totalbudget'], 0 , '' , ',' ); ?></td>
                            <td><?php echo 'Rp. ' . number_format( $sisabudget8, 0 , '' , ',' ); ?></td>
                            <td><?php echo $key8['status'] ?></td>
                            <td>
                              <?php
                              if ($this->session->userdata('ses_divisi') == 'Direksi'){
                              ?>
                                <a href="<?php echo base_url('seebudget/seedireksi')?>/<?php echo $key8['noid']?>"><i class="fa fa-eye"></i> View</a>
                              <?php
                              }
                              else if($this->session->userdata('ses_divisi') == 'FINANCE'){
                              ?>
                                <a href="<?php echo base_url('seebudget/seefinance')?>/<?php echo $key8['noid']?>"><i class="fa fa-eye"></i> View</a>
                              <?php
                              }
                              ?>
                            </td>
                            <td>
                              <a href="" class="btn btn-block bg-gradient-success btn-sm"><i class="fa fa-flag-checkered"></i> Finish</a>
                              <a href="" class="btn btn-block bg-gradient-warning btn-sm tombol-hapus"><i class="fa fa-pause"></i> Dissapprove</a>
                            </td>
                          </tr>
                          <?php
                          }
                          endif
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div id="nonrutin2019" class="container tab-pane fade"><br>
                    <div class="table-responsive">
                      <table id="example10" class="table table-bordered table-hover">
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
                          foreach ($nonrutin2019 as $key9) {
                          $sisabudget9 = $key9['totalbudget'] - $key9['totbpu'];
                          ?>
                          <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $key9['nama'] ?></td>
                            <td><?php echo $key9['pengaju'] ?> - <?php echo $key9['divisi'] ?></td>
                            <td><?php echo 'Rp. ' . number_format( $key9['totalbudget'], 0 , '' , ',' ); ?></td>
                            <td><?php echo 'Rp. ' . number_format( $sisabudget9, 0 , '' , ',' ); ?></td>
                            <td><?php echo $key9['status'] ?></td>
                            <td>
                              <?php
                              if ($this->session->userdata('ses_divisi') == 'Direksi'){
                              ?>
                                <a href="<?php echo base_url('seebudget/seedireksi')?>/<?php echo $key9['noid']?>"><i class="fa fa-eye"></i> View</a>
                              <?php
                              }
                              else if($this->session->userdata('ses_divisi') == 'FINANCE'){
                              ?>
                                <a href="<?php echo base_url('seebudget/seefinance')?>/<?php echo $key9['noid']?>"><i class="fa fa-eye"></i> View</a>
                              <?php
                              }
                              ?>
                            </td>
                            <td>
                              <a href="" class="btn btn-block bg-gradient-success btn-sm"><i class="fa fa-flag-checkered"></i> Finish</a>
                              <a href="" class="btn btn-block bg-gradient-warning btn-sm tombol-hapus"><i class="fa fa-pause"></i> Dissapprove</a>
                            </td>
                          </tr>
                          <?php
                          }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div id="emergency2019" class="container tab-pane fade"><br>
                    <div class="table-responsive">
                      <table id="example11" class="table table-bordered table-hover">
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
                          $divisinya = $this->session->userdata('ses_divisi');
                          if($divisinya == 'Direksi' OR $divisinya == 'FINANCE'):
                          $i = 1;
                          foreach ($emergency2019 as $key10) {
                          $sisabudget10 = $key10['totalbudget'] - $key10['totbpu'];
                          ?>
                          <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $key10['nama'] ?></td>
                            <td><?php echo $key10['pengaju'] ?> - <?php echo $key10['divisi'] ?></td>
                            <td><?php echo 'Rp. ' . number_format( $key10['totalbudget'], 0 , '' , ',' ); ?></td>
                            <td><?php echo 'Rp. ' . number_format( $sisabudget10, 0 , '' , ',' ); ?></td>
                            <td><?php echo $key10['status'] ?></td>
                            <td>
                              <?php
                              if ($this->session->userdata('ses_divisi') == 'Direksi'){
                              ?>
                                <a href="<?php echo base_url('seebudget/seedireksi')?>/<?php echo $key10['noid']?>"><i class="fa fa-eye"></i> View</a>
                              <?php
                              }
                              else if($this->session->userdata('ses_divisi') == 'FINANCE'){
                              ?>
                                <a href="<?php echo base_url('seebudget/seefinance')?>/<?php echo $key10['noid']?>"><i class="fa fa-eye"></i> View</a>
                              <?php
                              }
                              ?>
                            </td>
                            <td>
                              <a href="" class="btn btn-block bg-gradient-success btn-sm"><i class="fa fa-flag-checkered"></i> Finish</a>
                              <a href="" class="btn btn-block bg-gradient-warning btn-sm tombol-hapus"><i class="fa fa-pause"></i> Dissapprove</a>
                            </td>
                          </tr>
                          <?php
                          }
                          endif
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
          <!-- /.card 2019 -->




        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
