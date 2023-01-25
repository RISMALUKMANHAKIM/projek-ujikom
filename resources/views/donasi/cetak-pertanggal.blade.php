<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Laporan Data Donasi</title>
    <style>
        table tr td {
            font-size: 15px;
        }

        table tr .text {
            text-align: right;
            font-size: 15px;
        }

        table tr .text1 {
            text-align: left;
            font-size: 15px;
        }

    </style>
</head>

<body>
    <script language="JavaScript">
        var tanggallengkap = new String();
        var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
        namahari = namahari.split(" ");
        var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
        namabulan = namabulan.split(" ");
        var tgl = new Date();
        var hari = tgl.getDay();
        var tanggal = tgl.getDate();
        var bulan = tgl.getMonth();
        var tahun = tgl.getFullYear();
        tanggallengkap = namahari[hari] + ", " + tanggal + " " + namabulan[bulan] + " " + tahun;
    </script>
    <center>
        <table width="710">
            <tr>
                <td><img src="{{ asset('vendor/adminlte/dist/img/logo1.png') }}" width="70" height="70"></td>
                <td>
                    <center>
                        <font size="6"><b>YAYASAN PONDOK YATIM</b></font><br>
                        <font size="2">Jl. Udawa No.12, RT.001/RW.004, Arjuna, Kec. Cicendo, Kota Bandung, Jawa Barat
                            40172</font><br>
                        <font size="2">Email: yayasanpondokyatim@gmail.com, Telepon: +62 88223536101</font>
                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
        </table>
        <table width="710">
            <tr>
                <script language='JavaScript'>
                    document.write(tanggallengkap);
                </script></td>
            </tr>
        </table>
        <br>
        <table width="710">
            <tr>
                <td class="text2">
                    <h3>Laporan Data Donasi : </h3>
                </td>
            </tr>
        </table>
        <table border="1px" width="710">
            <tr>
                <th>No</th>
                <th>Nama Donatur</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Tanggal</th>
                <th>Nominal</th>
                <th>Pesan</th>
                <th>Bukti</th>
            </tr>
            @php $no=1; @endphp
            @foreach ($cetak as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->no_tlpn }}</td>
                    <td>{{ date('d-m-Y', strtotime($data->tanggal)) }}</td>
                    <td>Rp. {{ number_format($data->nominal) }}</td>
                    <td>{{ $data->ket }}</td>
                    <td><img src="{{ $data->image() }}" style="width:80px; height:150px;" alt="...">
                    </td>
                </tr>
            @endforeach
        </table>

        <table border="1" width="710" height="100">
            <tr>
                <td width="420" class="total"><b>Total Dana :</b>
                </td>
                <td align="center" class="jumlah"><b>Rp. {{ number_format($total) }}</b></td>
            </tr>
        </table>
    </center>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>
