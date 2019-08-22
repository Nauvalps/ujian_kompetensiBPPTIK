<?php
include "models/model_buku.php";

$ambildata = new Buku($connection);

if (@$_GET['act'] == '') {
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
                    <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                 // $no = 1;
                $tampil = $ambildata->tampil();
                 while ($data = $tampil->fetch_object()) {
                ?> 
                <tr>
                   <td align="center"><?php echo $data->kode_buku; ?></td>
                   <td><?php echo $data->judul_buku;?></td>
                   <td><?php echo $data->pengarang_buku?></td>
                   <td><?php echo $data->stok_buku;?></td>
                   <td><?php echo $data->penerbit_buku;?></td>
                   <td>
                    <a id="edit_buku" data-toggle="modal" data-target="#edit" data-id="<?php echo $data->kode_buku;?>" data-nama="<?php echo $data->judul_buku;?>" data-pengarangbuku="<?php echo $data->pengarang_buku;?>" data-stk="<?php echo $data->stok_buku;?>" data-penerbitbuku="<?php echo $data->penerbit_buku;?>">
                    <button class="btn btn-info btn-xs"><i class="fa fa-edit"></i>Edit</button>
                  </a>
                    <a href="?page=admin_buku&act=del&id=<?php echo $data->kode_buku; ?>" onclick="return confirm('Apakah ingin menghapus data?')">
                       <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>Delete</button></a>
                   </td>
                  </tr>
                <?php
                } ?>
                </tbody>
            </table>
        </div>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i>Tambah Buku</button>&nbsp; &nbsp; &nbsp;
        <?php
        include 'tambah.buku.php';
        include 'edit.buku.php';
        ?>
    </div>
</div>
<?php
} else if (@$_GET['act'] == 'del') {
   // $ambildata->tampil($_GET['id']);
   // ->fetch_object()->gambar_buku;

    $ambildata->delete($_GET['id']);
    header("location: ?page=admin_buku");
}