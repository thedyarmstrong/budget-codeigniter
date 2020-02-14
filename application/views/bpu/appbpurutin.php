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
            <li class="breadcrumb-item">BPU</li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url('bpu/approvebpu')?>">Approve BPU</a></li>
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

          <!-- Rutin -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><i class="fa fa-table"></i> List Approve BPU Rutin</h3>
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
                      <th>Jenis</th>
                      <th>Nama Pengajuan</th>
                      <th>PIC Bugdet</th>
                      <th>No & Rincian Item</th>
                      <th>Status Biaya</th>
                      <th>Term BPU</th>
                      <th>Tanggal Bayar</th>
                      <th>Nama Penerima</th>
                      <th>Nama Bank</th>
                      <th>Nomor Rekening</th>
                      <th>Pengaju</th>
                      <th>File Upload</th>
                      <th>Total BPU</th>
                      <th><i class="fa fa-check"></i> Checker</th>
                      <th>Tgl Check</th>
                      <th>Approve</th>
                    </tr>
                  </thead>
                  <tbody>
                    <form action="<?php echo base_url('bpu/prosessetuju') ?>" method="POST">
                    <?php
                    $totalall = 0;
                    $i = 1;
                    foreach ($bpurutinapp AS $key){
                    ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $key['jenis'] ?></td>
                      <td><a href="<?php echo base_url('seebudget/seefinance')?>/<?php echo $key['noid'] ?>" target="_blank"><?php echo $key['nampeng'] ?></a></td>
                      <td><?php echo $key['nampeng'] ?></td>
                      <td><?php echo $key['nosel'] ?> - <?php echo $key['rincian']?></td>
                      <td><?php echo $key['status'] ?></td>
                      <td><?php echo $key['termbpu'] ?></td>
                      <td><?php echo $key['tglcair'] ?></td>
                      <td><?php echo $key['nampen'] ?></td>
                      <td><?php echo $key['namabank'] ?></td>
                      <td><?php echo $key['norek'] ?></td>
                      <td><?php echo $key['pengajubpu'] ?></td>
                      <td><a href="<?php echo base_url()?>/dist/uploadbpu/<?php echo $key['fileupload']?>" target="_blank"><i class="fa fa-file"></i></a></td>
                      <td><?php echo 'Rp. ' . number_format( $key['jmlbpu'], 0 , '' , ',' ); ?></td>
                      <td><?php echo $key['checkby'] ?></td>
                      <td><?php echo $key['tglcheck'] ?></td>
                      <input type="hidden" name="waktu<?php echo $i; ?>" value="<?php echo $key['waktupeng']?>">
                      <input type="hidden" name="nosel<?php echo $i; ?>" value="<?php echo $key['nosel']?>">
                      <input type="hidden" name="termbpu<?php echo $i; ?>" value="<?php echo $key['termbpu']?>">
                      <input type="hidden" name="tglcair<?php echo $i; ?>" value="<?php echo $key['tglcair']?>">
                      <td><input type="checkbox" class="form-control" name="check[]" value="<?php echo $i++; ?>"></td>
                    </tr>
                    <?php
                    $totalall += $key['jmlbpu'];
                    }
                    ?>
                  </tbody>
                </table>
              </div>

              <br/><br/>
              <div class="row">
              <div class="col-md-10"></div>
              <div class="col-md-2"><h3><?php echo 'Rp. ' . number_format( $totalall, 0 , '' , ',' ); ?></h3></div>
              </div>
              <div class="row">
              <div class="col-md-10"></div>
              <div class="col-md-2"><button type="submit" class="btn btn-lg btn-success">Setujui BPU >></button></div>
              </div>
              </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.Rutin -->


        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
