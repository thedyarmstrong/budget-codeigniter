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
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><font color="blue"><i class="fa fa-edit"></i> Create Budget</font></h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>

            <div class="card-body">
              <form class="form-horizontal" action="<?php echo base_url('budget/prosescreatebudget')?>" method="POST">

                <div class="form-group">
                  <label for="jenis">Jenis Project :</label>
                  <select class="form-control" id="jenis" name="jenis" required>
                    <option disabled selected>Pilih Jenis Project</option>
                      <?php
                      if ($this->session->userdata('ses_divisi') == 'Direksi'){
                      ?>
                      <option id="jenb1" value="B1">B1</option>
                      <option id="jenb2" value="B2">B2</option>
                      <option id="rutin" value="Rutin">Rutin</option>
                      <option id="nonrut" value="Non Rutin">Non Rutin</option>
                      <option id="emergency" value="Emergency">Emergency</option>
                      <?php
                      }
                      else if ($this->session->userdata('ses_divisi') == 'FINANCE'){
                      ?>
                      <option id="rutin" value="Rutin">Rutin</option>
                      <option id="nonrut" value="Non Rutin">Non Rutin</option>
                      <option id="emergency" value="Emergency">Emergency</option>
                      <?php
                      }
                      ?>
                  </select>
                </div>

                <div id="katnonslow" class="form-group" style="display:none;">
                  <label for="kate">Kategori</label>
                    <select class="form-control" id="kate" name="katnon">
                      <option value="">Pilih Jenis Kategori Non Rutin</option>
                      <?php
                      foreach ($katnon as $key2) {
                      ?>
                      <option value="<?php echo $key2['kode'] ?>"><?php echo $key2['kode'] ?> - <?php echo $key2['kategori'] ?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>

                <div id="namab2" class="form-group">
                  <label for="nama">Nama Project :</label>
                  <input type="text" class="form-control" id="nama" name="nama" required>
                </div>

                <div id="namab1" class="form-group" style="display:none;">
                  <label for="kodeproject">Kode Project</label>
                    <select class="form-control" id="kodeproject" name="kodepro">
                      <option selected disabled>Pilih Kode Project</option>
                      <?php
                      foreach ($getallproject as $key) {
                      ?>
                      <option value="<?php echo $key['kode'] ?>"><?php echo $key['nama'] ?> - <b><?php echo $key['kode'] ?></b></option>
                      <?php
                      }
                      ?>
                    </select>
                </div>

                <div class="form-group">
                  <label for="tahun">Tahun :</label>
                  <select class="form-control" id="tahun" name="tahun" required>
                    <option disabled selected>Pilih Tahun</option>
                    <?php
                     for($i = 2019 ; $i <= 2030; $i++){
                        echo "<option>$i</option>";
                     }
                    ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="pic">PIC Budget :</label>
                  <select class="form-control" id="pic" name="idpengaju" required>
                    <option disabled selected>Pilih PIC Budget</option>
                    <?php
                    foreach ($allnama as $key3) {
                    ?>
                    <option value="<?php echo $key3['nama_user'] ?>"><?php echo $key3['nama_user'] ?> - <?php echo $key3['divisi'] ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>

                  <input type="hidden" class="form-control" name="pembuat" value="<?php echo $this->session->userdata('ses_nama_user') ?>">
                  <input type="hidden" class="form-control" name="status" value="Belum Di Ajukan">

                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <!-- /.card-body -->

            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
