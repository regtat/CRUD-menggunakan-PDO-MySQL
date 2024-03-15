<html>
    <head>
        <title>Ubah Mahasiswa</title>
    </head>
    <body>
        <?php
        require "class/Mahasiswa.php";
        $mahasiswa=new Mahasiswa();

        $id=$_GET['id'];
        $ambil=$mahasiswa->AmbilMhs($id);
        $value=$ambil->fetch(PDO::FETCH_OBJ);?>

        <form method="post" action="aksi.php">
            <input name="id" type="hidden" value="<?=$id?>">
            Nama <input name="nama" type="text" value="<?=$value->nama?>" ><br>
            Jurusan <select name='jurusan'>
                <option value="Informatika"<?=($value->jurusan=='Informatika')?'selected':''?>>Informatika</option>
                <option value="Teknik Geologi"<?=($value->jurusan=='Teknik Geologi')?'selected':''?>>Teknik Geologi</option>
                <option value="Teknik Sipil"<?=($value->jurusan=='Teknik Sipil')?'selected':''?>>Teknik Sipil</option>
                <option value="Teknik Industri"<?=($value->jurusan=='Teknik Industri')?'selected':''?>>Teknik Industri</option>
                <option value="Teknik Elektro"<?=($value->jurusan=='Teknik Elektro')?'selected':''?>>Teknik Elektro</option>
            </select><br>
            Tahun Masuk <select name='tahun_masuk'>
                <option value="2019"<?=($value->tahun_masuk=='2019')?'selected':''?>>2019</option>
                <option value="2020"<?=($value->tahun_masuk=='2020')?'selected':''?>>2020</option>
                <option value="2021"<?=($value->tahun_masuk=='2021')?'selected':''?>>2021</option>
                <option value="2022"<?=($value->tahun_masuk=='2022')?'selected':''?>>2022</option>
                <option value="2023"<?=($value->tahun_masuk=='2023')?'selected':''?>>2023</option>
            </select><br>
            <button name="update" type="submit">Ubah</button>
        </form>
    </body>
</html>