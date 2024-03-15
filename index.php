<html>
    <head>
        <title>Manajemen Mahasiswa</title>
    </head>
    <body>

        <a href="insert.php"><button class="btn btn-primary">Tambah Data Mahasiswa</button></a><br>
        <?php
        require 'class/Mahasiswa.php';
            $mahasiswa=new Mahasiswa();
            $data=$mahasiswa->LihatMhs();
            $id=1;
            ?>
            <table class="table table-striped">
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Tahun Masuk</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                    <?php
                    foreach($data as $row){?>
                    <td><?= $id++?></td>
                    <td><?= $row['nama']?></td>
                    <td><?= $row['jurusan']?></td>
                    <td><?= $row['tahun_masuk']?></td>
                    <td>
                        <a href="update.php?id=<?=$row['id']?>"><button class="btn btn-warning">Ubah</button></a>
                        <a href="aksi.php?id=<?=$row['id']?>"><button class="btn btn-danger">Hapus</button></a>
                    </td>
                </tr>
                <?php
                    }?>
        </table>
     
</div>
    </body>
</html>