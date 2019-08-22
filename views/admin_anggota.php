<?php
include "models/model_anggota.php";

$ambildata = new Anggota($connection);

//mengecek aksi jika kosong maka melakukan sesuatu
if (@$_GET['act'] == '') {
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
                     <th>Opsi</th> 
                </tr>
                </thead>
                <tbody>
                <?php
                //menampilkan data dari table
                $tampil = $ambildata->tampil();
                 while ($data = $tampil->fetch_object()) {
                ?> 
                <tr>
                   <td align="center"><?php echo $data->id_anggota; ?></td>
                   <td><?php echo $data->nama_anggota; ?></td>
                   <td><?php echo $data->alamat; ?></td>
                   <td><?php echo $data->status_anggota; ?></td>
                   <td>
                     <a id="edit_anggota" data-toggle="modal" data-target="#edit" data-id="<?php echo $data->id_anggota;?>" data-nama="<?php echo $data->nama_anggota;?>" data-alamat="<?php echo $data->alamat;?>" data-status="<?php echo $data->status_anggota;?>">
                    <button class="btn btn-info btn-xs"><i class="fa fa-edit"></i>Edit</button>
                  </a>
                    <a href="?page=admin_anggota&act=del&id=<?php echo $data->id_anggota; ?>" onclick="return confirm('Apakah ingin menghapus data?')">
                       <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>Delete</button></a>
                   </td>
                  </tr>
                <?php
                } ?>
                </tbody>
            </table>
        </div>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i>Tambah Anggota</button>&nbsp; &nbsp; &nbsp; 
        <?php
        include 'tambah.anggota.php';
        include 'edit.anggota.php';
        ?>     
    </div>
</div>
<?php
//maka jika aksi delete maka data terhapus sesuai id
} else if (@$_GET['act'] == 'del') {  
    $ambildata->delete($_GET['id']);
    header("location: ?page=admin_anggota");
}