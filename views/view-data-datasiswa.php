<html> 
    
<head>
    <title>Tampil Data Data Siswa</title> 
</head> 
<body bgcolor="grey"> 
    <center> 
        <table> 
            <tr>
                <th colspan="3" style="font-size:20px;"> 
                    Tampil Data Data Siswa D-Lemas 
                </th> 
            </tr> 
            <tr> 
                <td colspan="3"> 
                    <hr> 
                </td>
            </tr>
            <tr align="left"> 
                <th>Nama Siswa</th> 
                <th>:</th> 
                <td> 
                    <?= $nama; ?> 
                </td> 
            </tr> 
            <tr align="left">
                <th>NIS</th> 
                <th>:</th> 
                <td> 
                    <?= $nis; ?> 
                </td> 
            </tr> 
            <tr align="left">
                <th>Kelas</th> 
                <th>:</th> 
                <td> 
                    <?= $kelas; ?> 
                </td> 
            </tr> 
            <tr align="left">
                <th>Tanggal Lahir</th> 
                <th>:</th> 
                <td> 
                    <?= $tanggal_lahir; ?> 
                </td> 
            </tr> 
            <tr align="left">
                <th>Tempat Lahir</th> 
                <th>:</th> 
                <td> 
                    <?= $tempat_lahir; ?> 
                </td> 
            </tr> 
            <tr align="left">
                <th>Alamat</th> 
                <th>:</th> 
                <td> 
                    <?= $alamat; ?> 
                </td> 
            </tr> 
            <tr align="left"> 
                <th>Jenis Kelamin</th> 
                <th>:</th> 
                <td> 
                    <?= $jenis_kelamin; ?> 
                </td> 
            </tr>
            <tr align="left"> 
                <th>Agama</th> 
                <th>:</th> 
                <td> 
                    <?= $agama; ?> 
                </td> 
            </tr>
            <tr> 
                <td colspan="3" align="center" style="padding-top:10px;">
                    <a  style="color:white; text-decoration:none; font-size:15px; border-style:solid; border-width:medium; border-radius:10px; padding:3px;"  
                    href="<?= base_url('datasiswa'); ?>">Kembali</a> 
                </td>
            </tr> 
        </table> 
    </center> 
</body> 
</html>