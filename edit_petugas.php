<?php



if (isset($_GET['edit'])) 
{
    $id = $_GET['id'];
    $query= mysqli_query($konek,"SELECT * FROM petugas WHERE id_petugas = '$id'");

    foreach ($query as $row) 
    {
        ?>
        <div class="container">
            <center><h3>Edit Data Petugas</h3></center>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                <form action="?page=edit_petugas_proses&save-edit" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id_petugas'] ?>">
                <div class="form-group">
                    <input value="<?php echo $row['nama'] ?>" class="form-control" type="text" name="nama" placeholder="Nomor Induk Siswa" required>
                </div>
                <div class="form-group mt-2">
                    <input value="<?php echo $row['jabatan'] ?>" class="form-control" type="text" name="jabatan" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group mt-2">
                    <input value="<?php echo $row['nomor_telp'] ?>" class="form-control" type="text" name="nomor_telp" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group mt-2">
                    <textarea name="alamat" class="form-control" placeholder="Alamat Lengkap"><?php echo $row['alamat']?></textarea>
                </div>
                <div class="form-group mt-2">
                    <input value="<?php echo $row['username']?>" class="form-control" type="text" name="username">
                </div>
                <div class="form-group mt-2">
                    <input value="<?php echo $row['password']?>" class="form-control" type="text" name="password" placeholder="PASSWORD">
                </div>
        </div>
                        <div class="form-group mt-2">
                            <center>
                                <button name="save-edit" class="btn btn-primary mb-3" type="submit">
                                    Save Edit
                                </button>
                            </center>
                        </div>
                    </form>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
        <?php
    }
}
?>