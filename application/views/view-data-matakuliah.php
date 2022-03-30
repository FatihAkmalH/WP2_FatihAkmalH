<html>
    <head>
        <title>Tampil Data Matakuliah</title>
    </head>
</html>
<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Matakuliah
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                        <th>Kode Matakuliah</th>
                        <th>:</th>
                        <td>
                            <?= $kode; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Nama Matakuliah</th>
                        <td>:</td>
                        <td>
                            <?= $nama; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>SKS</th>
                        <td>:</td>
                        <td>
                            <?= $sks; ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center">
                            <a href="<?= base_url('Matakuliah'); ?>">Kembali</a>
                        </td>
                    </tr>
        </table>
    </center>
</body>