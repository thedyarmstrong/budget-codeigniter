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
            <li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
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
              <h3 class="card-title">List RTP # <?php echo date('Y-m-d'); ?></h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Req ID Transfer</th>
                      <th>Jenis</th>
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
                      <th>Total BPU</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    $totalall = 0;
                    foreach ($allrtp AS $key){
                    ?>
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td><?php echo $key['transfer_req_id'] ?></td>
                      <td><?php echo $key['jenis'] ?></td>
                      <td><a href="<?php echo base_url('seebudget/seefinance')?>/<?php echo $key['noid'] ?>" target="_blank"><?php echo $key['nampeng'] ?></a></td>
                      <td><?php echo $key['nosel'] ?> - <?php echo $key['rincian']?></td>
                      <td><?php echo $key['status'] ?></td>
                      <td><?php echo $key['term'] ?></td>
                      <td><?php echo $key['tglcair'] ?></td>
                      <td><?php echo $key['namapenerima'] ?></td>
                      <td><?php echo $key['namabank'] ?></td>
                      <td><?php echo $key['norek'] ?></td>
                      <td><?php echo $key['pengaju'] ?></td>
                      <td><a href="<?php echo base_url()?>/dist/uploadbpu/<?php echo $key['fileupload']?>" target="_blank"><i class="fa fa-file"></i></a></td>
                      <td><?php echo 'Rp. ' . number_format( $key['jumlah'], 0 , '' , ',' ); ?></td>
                    </tr>
                    <?php
                    $totalall += $key['jumlah'];
                    }
                    ?>
                  </tbody>
                </table>
              </div>

              <br/><br/>
              <div class="row">
              <div class="col-md-8"></div>
              <div class="col-md-2">Total Pengajuan :</div>
              <div class="col-md-2"><h3><?php echo 'Rp. ' . number_format( $totalall, 0 , '' , ',' ); ?></h3></div>
              </div>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
