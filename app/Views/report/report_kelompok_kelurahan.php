<!DOCTYPE html>
<html>

<head>
    <title>Laporan Data Kelompok Per Kelurahan</title>
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/img/logo.png">
    <style type="text/css">
        body {
            font-family: sans-serif;
        }

        .head {
            border-style: double;
            border-width: 3px;
            border-color: white;
        }

        .body {
            border-collapse: collapse;
            border: 1px;
            border-color: black;
        }

        table tr .text2 {
            text-align: left;
            font-size: 13px;
        }

        table tr .text {
            text-align: center;
            font-size: 13px;
        }

        table tr td {
            font-size: 13px;
        }

        .tablemain {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
        }

        .tablemain tr {
            line-height: 30px;
            text-align: center;
        }
    </style>
</head>

<body>
    <center>
        <table class="head" width="650">
            <tr>
                <td><img src="<?= base_url(); ?>/assets/img/logo.png" width="90" height="90"></td>
                <td>
                    <center>
                        <font size="4">PEMERINTAHAN KOTA PADANG</font><br>
                        <font size="5"><b>DINAS PERTANIAN</b></font><br>
                        <font size="2">Alamat : Jalan Raya Sungai Lareh, Lubuk Minturun, Kec. Koto Tangah, Kota Padang, Sumatera Barat</font><br>
                        <font size="2"><i>Email : dupertakotapadang@gmail.com Kode Pos : 25586 No. Telp. (0751) 495892</i></font>
                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                    <hr>
                </td>
            </tr>
        </table>
        <table class="head" style="margin-top: 20px; margin-bottom: 20px;">
            <tr>
                <td>LAPORAN DATA KELOMPOK PER KELURAHAN</td>
            </tr>
        </table>
        <table class="head" width="680" style="margin-top: 20px; margin-bottom: 20px;">
            <tr style="height: 25px;">
                <td width="120">Nama Kelurahan</td>
                <td style="font-weight: bold;">:
                    <?php foreach ($namakelurahan as $row) : ?>
                        <?= $row['kelurahan_nama']; ?>
                    <?php endforeach; ?>
                </td>
            </tr>
        </table>
        <table class="tablemain" width="680">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Kecamatan</th>
                    <th>Kelurahan</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 0;
                foreach ($kelompokkelurahan as $row) : $no++ ?>
                    <tr>
                        <td> <?= $no; ?></td>
                        <td> <?= $row['kelompok_nama']; ?></td>
                        <td> <?= $row['kecamatan_nama']; ?></td>
                        <td> <?= $row['kelurahan_nama']; ?></td>
                        <td> <?= $row['kelompok_keterangan']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <br>
        <table width="625">
            <tr>
                <td width="430"><br><br><br><br></td>
                <td class="text" align="center">Padang, <?= date("d M Y"); ?><br><br>
                    (Kepala Penyuluh Lapangan)<br><br><br><br><br><br>
                    Lukman, SP,MP.<br>
                    NIP : 92001081990031003
                </td>
            </tr>
        </table>
    </center>
</body>

<script>
    // window.print();
</script>

</html>