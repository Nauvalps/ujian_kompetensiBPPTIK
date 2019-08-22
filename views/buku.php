 <?php
include "models/model_buku.php";

$ambildata = new Buku($connection);


?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Buku</h2>
            <ol class="breadcrumb">
                <li><a href="assets/pages/index.html"><i class="icon-dashboard"></i>Data Buku</a></li>
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
                    <th class="text-center">Kode Buku</th>
                    <th>Judul Buku</th>
                    <th>Pengarang Buku</th>
                    <th>Jumlah Buku</th>
                    <th>Penerbit Buku</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $tampil = $ambildata->tampil();
                  while ($data = $tampil->fetch_object()) {
                ?> 
                <tr>
                   <td align="center"><?php echo $data->kode_buku; ?></td>
                   <td><?php echo $data->judul_buku;?></td>
                   <td><?php echo $data->pengarang_buku?></td>
                   <td><?php echo $data->stok_buku;?></td>
                   <td><?php echo $data->penerbit_buku;?></td>
                   
                  </tr>
                <?php
                } 
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
