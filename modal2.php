<?php
 $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "asset";
 
    // membuat koneksi
    $koneksi = new mysqli($servername, $username, $password, $dbname);
 
    // melakukan pengecekan koneksi
    if ($koneksi->connect_error) {
        die("Connection failed: " . $koneksi->connect_error);
    } 
 
    if($_POST['rowid']) {
        $id = $_POST['rowid'];
        // mengambil data berdasarkan id
        $sql = "SELECT * FROM golongan WHERE idgol = $id";
        $result = $koneksi->query($sql);
        foreach ($result as $baris) { ?>
            <table class="table">
                <tr>
                    <td>Kode Barang</td>
                    <td>:</td>
                    <td><?php echo $baris['idgol']; ?></td>
                </tr>
                <tr>
                    <td>Nama Barang</td>
                    <td>:</td>
                    <td><?php echo $baris['namagol']; ?></td>
                </tr>
                <tr>
                    <td>Deskripsi Barang</td>
                    <td>:</td>
                    <td><?php echo $baris['kodegol']; ?></td>
                </tr>
            </table>
        <?php 
 
        }
    }
    $koneksi->close();
?>