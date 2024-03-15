<html>
    <head>
        <title>Tambah Data</title>
    </head>
        <body>
        <form method="post" action="aksi.php">
        Nama <input name="nama" type="text" required><br>
        Jurusan <select name="jurusan" required>
            <option value="Informatika">Informatika</option>
            <option value="Teknik Geologi">Teknik Geologi</option>
            <option value="Teknik Sipil">Teknik Sipil</option>
            <option value="Teknik Industri">Teknik Industri</option>
            <option value="Teknik Elektro">Teknik Elektro</option>
        </select><br>
            Tahun Masuk <select name="tahun_masuk" required>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
        </select><br>
            <button class="btn btn-success" name="insert" type="sumbit">Tambah</button>
            <a><button class="btn btn-warning" name="reset">Batal</button></a>
        </form>
    </body>
</html>