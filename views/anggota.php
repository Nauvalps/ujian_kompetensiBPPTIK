<?php
include "models/model_anggota.php";

$ambildata = new Anggota($connection);

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Anggota</h2>
            <ol class="breadcrumb">
                <li><a href="assets/pages/index.html"><i class="icon-dashboard"></i>Data Anggota</a></li>
            </ol>
        </div>
       <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table width="100%" class="table table-striped table-bordered table-hover" id="datatables">
                <thead>
                <tr>
                    <th class="text-center">Id Anggota</th>
                    <th>Nama Anggota</th>
                    <th>Alamat Anggota</th>
                    <th>Status Anggota</th>
                </tr>
                </thead>
                <tbody>
                <?php
                 // $no = 1;
                $tampil = $ambildata->tampil();
                 while ($data = $tampil->fetch_object()) {
                ?> 
                <tr>
                   <td align="center"><?php echo $data->id_anggota; ?></td>
                   <td><?php echo $data->nama_anggota; ?></td>
                   <td><?php echo $data->alamat; ?></td>
                   <td><?php echo $data->status_anggota; ?></td>
                  </tr>
                <?php
                } ?>
                </tbody>
            </table>
        </div>
        <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i>Tambah Anggota</button>&nbsp; &nbsp; &nbsp;  -->     
    </div>
</div>
