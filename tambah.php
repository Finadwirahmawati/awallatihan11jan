<html>
<head>
</head>
<body>
    <center>
    <h1>Daftar Siswa</h1>
    <form action="proses_tambah.php"method="POST">
        <fieldset>
            <p>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" />
            </p>

            <p>
                <label for="kelas">Kelas :</label>
                <input type="text" name="nama" />
            </p>
            <p>
                <label for="jumlah">Jumlah :</label>
                <select nama="jurusan">
                <option value="RPL">RPL </option>
                    <option value="TSM">TSM </option>
                    <option value="TB">TB </option>
                    <option value="TL">TL </option>
                    <option value="TBG">TBG </option>
</select></br>
            </p>
            <p>
                <label for="tahun">Tahun :</label>
                <input type="text" name="tahun" />
            </p>
            <p>
                <label for="nominanal">Nominal :</label>
                <input type="text" name="nominal" />
            </p>
            <p>
                 <input type="submit" value="kirim" name="kirim_bayar" />
            </p>
        </fieldset>
</form>
</center>
</body>
</html>





