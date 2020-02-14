<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>
<div class="sukses" data-flashdata="<?php echo $this->session->flashdata('sukses'); ?>"></div>
<div class="informasi" data-flashdata="<?php echo $this->session->flashdata('informasi'); ?>"></div>
<div class="gagal" data-flashdata="<?php echo $this->session->flashdata('gagal'); ?>"></div>
<div class="hapus" data-flashdata="<?php echo $this->session->flashdata('hapus'); ?>"></div>


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
            <li class="breadcrumb-item">Check BPU</li>
            <li class="breadcrumb-item active">Check BPU B1</li>
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

          <!-- B1 -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><i class="fa fa-table"></i> List Check Budget B1</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <!-- card-body -->
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama Pengajuan</th>
                      <th>No & Rincian Item</th>
                      <th>Status Biaya</th>
                      <th>Term BPU</th>
                      <th>Tanggal Bayar</th>
                      <th>Nama Penerima</th>
                      <th>Nama Bank</th>
                      <th>Nomor Rekening</th>
                      <th>Pengaju</th>
                      <th>File Upload</th>
                      <th>Input Jumlah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    foreach ($bpuuncekb1 AS $key){
                    ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><a href="<?php echo base_url('seebudget/seefinance')?>/<?php echo $key['noid'] ?>" target="_blank"><?php echo $key['nampeng'] ?></a></td>
                      <td><?php echo $key['nosel'] ?> - <?php echo $key['rincian']?></td>
                      <td><?php echo $key['status'] ?></td>
                      <td><?php echo $key['termbpu'] ?></td>
                      <td><?php echo $key['tglcair'] ?></td>
                      <td><?php echo $key['nampen'] ?></td>
                      <td><?php echo $key['namabank'] ?></td>
                      <td><?php echo $key['norek'] ?></td>
                      <td><?php echo $key['pengajubpu'] ?></td>
                      <td><a href="<?php echo base_url()?>/dist/uploadbpu/<?php echo $key['fileupload']?>" target="_blank"><i class="fa fa-file"></i></a></td>
                      <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-b1<?php echo $i; ?>"><i class="fa fa-edit"></i></button></td>
                      <td>
                        <?php
                        $waktu = $key['waktupeng'];
                        $bpunya = $this->db->query("SELECT * FROM bpu WHERE waktu='$waktu'")->row_array();
                        echo $bpunya['waktu'];
                        ?>
                      </td>
                    </tr>
                    <div class="modal" id="modal-b1<?php echo $i; ?>">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">B1 - Check BPU #<?php echo $i++; ?></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="<?php echo base_url('bpu/prosescek') ?>" method="POST">
                              <input type="hidden" name="back" value="cekbpub1">
                              <input type="hidden" name="waktu" value="<?php echo $key['waktupeng']?>">
                              <input type="hidden" name="nosel" value="<?php echo $key['nosel']?>">
                              <input type="hidden" name="termbpu" value="<?php echo $key['termbpu']?>">
                              <input type="hidden" name="jmlbpu" value="<?php echo $key['jmlbpu']?>">
                              <input type="hidden" name="checkby" value="<?php echo $this->session->userdata('ses_nama_user')?>">

                              <div class="form-group">
                                <label for="jumlahnya">Total BPU :</label>
                                <input type="number" class="form-control" name="totalbpu" placeholder="xxx.xxx">
                              </div>

                          </div>
                          <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            </form>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.B1 -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
