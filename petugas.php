<?php
    if (isset($_POST['save'])){
        $nama = $_POST['nama'];
        $jbt = $_POST['jabatan'];
        $no_telp = $_POST['nomor_telp'];
        $alamat = $_POST['alamat'];
        $username = $_POST['username'];
        $password =$_POST['password'];


        $options = [
            'cost' => 12,
        ];
        $password_enkript= password_hash($password,PASSWORD_BCRYPT, $options);

        $query_insert = mysqli_query($konek, "INSERT INTO petugas
        VALUES('','$nama','$jbt','$no_telp','$alamat','$username','$password_enkript')");

        if ($query_insert) {
            ?>

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            DATA ANGGOTA BARU BERHASIL DISIMPAN !!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }else {
            ?>

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            DATA GAGAL DISIMPAN !!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }
    }
?>

<center><h1 class="mt-4 mb-3">Data petugas</h1></center>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahanggota">
   Tambah Data
</button>
<br><br>
<table class="table table-success table-striped">
    <tr align="center">
        <th>No</th>
        <th>NAMA</th>
        <th>JABATAN</th>
        <th>NO_TELP</th>
        <th>ALAMAT</th>
        <th>USERNAME</th>
        <th>PASSWORD</th>
        <th>--Action--</th>
    </tr>
    <?php
    include "koneksi.php";
        $query = mysqli_query($konek,"SELECT * FROM petugas");
        $no = 1;
        foreach ($query as $row) {
    ?>
    <tr align ="center">
        <td align="center" valign="middle"><?php echo $no; ?></td>
        <td valign="middle"><?php echo $row['nama']; ?></td>
        <td valign="middle"><?php echo $row['jabatan']; ?></td>
        <td valign="middle"><?php echo $row['nomor_telp']; ?></td>
        <td valign="middle"><?php echo $row['alamat']; ?></td>
        <td valign="middle"><?php echo $row['username']; ?></td>
        <td valign="middle"><?php echo $row['password']; ?></td>
        <td valign="middle">
        <td valign="middle">
            <a href="?page=delete_petugas&delete=&id=<?php echo $row['id_petugas'];?>">
                <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            </a>
            <a href="?page=edit_petugas&edit=&id=<?php echo $row['id_petugas'];?>">
                <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
            </a>
        </td>
        </td>
    </tr>
    <?php
    $no++;
    }
    ?>
</table>

<!-- Modal -->
<div class="modal fade" id="tambahanggota" tabindex="-1" aria-labelledby="tambahpetugasLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="tambahpetugasLabel">Form Tambah petugas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="" method="post">
                <div class="form-group">
                    <input class="form-control" type="text" name="nama" placeholder="silahkan masukan nama">
                </div><br>
                <div class="form-group">
                <input class="form-control" type="text" name="jabatan" placeholder="silahkan masukan jabatan">
                </div><br>
                <div class="form-group">
                    <input class="form-control" type="text" name="nomor_telp" placeholder="silahkan masukan nomor telfon">
                </div><br>
                <div class="form-group">
                    <input class="form-control" type="text" name="alamat" placeholder="silahkan masukan alamat">
                </div><br>
                <div class="form-group">
                    <input class="form-control" type="text" name="username" placeholder="silahkan masukan username">
                </div><br>
                <div class="form-group">
                    <input class="form-control" type="text" name="password" placeholder="silahkan masukan passowrd">
                </div><br>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="Submit" name="save" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
