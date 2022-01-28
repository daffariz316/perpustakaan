<?php
if (isset($_GET['delete'])) {
    $id=$_GET['id'];
    $query_delete= mysqli_query($konek,"DELETE FROM anggota where id_anggota='$id'");

    if ($query_delete) {
        ?>
       <script>
            alert("data berhasil di delete");
            window.location.href='dashboard.php?page=anggota';
        </script>
        <?php
       
    }
}