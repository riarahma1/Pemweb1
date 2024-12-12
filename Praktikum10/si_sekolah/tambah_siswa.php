<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah Siswa</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h2>Form Pendaftaran Siswa</h2>
        <form action="proses_tambah.php" method="POST">
            <table>
                <tr>
                    <td>Nama Siswa</td>
                    <td><input type="text" name="nama_siswa" required></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea name="alamat_siswa" required></textarea></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>
                        <select name="agama_siswa"required>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Asal Sekolah</td>
                    <td><input type="text" name="asal_sekolah" required></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;">
                        <button type="submit">Simpan</button>
                        <button type="reset">Reset</button>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>