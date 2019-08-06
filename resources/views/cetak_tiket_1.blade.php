<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body class="font">
<style>
    .isi{
        border: 2px solid black;
        font-size: 11px;
        border-collapse: collapse;
    }
    .isi td{
        border: 1px solid black;
        padding: 3px;
    }
    .bold{
        font-weight: bold;
    }
    .judul{
        font-weight: bold;
        text-align: right;
    }
    .font{
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
</style>
<table width="100%">
    <tr>
        <td>
            <img src="{{public_path('/template/image/logo_setjen.png')}}" style="width: 5em;" alt="Logo">
        </td>
        <td style="text-align: right;">
            <p style="line-height: 16px; font-size: 13px; margin-bottom: 0px;">FORMULIR PENANGANAN PERMASALAHAN<br>JARINGAN INTERNET DAN KOMPUTER JARINGAN</p>
            <p style="line-height: 16px; font-size: 11px; margin-top: 0px;">BIDANG DATA DAN TEKNOLOGI INFORMASI<br>SEKERTARIAT JENDRERAL DAN BK DPR RI<br>GEDUNG NUSANTARA 1 LANTAI 3<br>021 - 575 6100</p>
        </td>
    </tr>
</table>
<table width="20%" style="margin-top:10px; margin-bottom: 5px;">
    <tr style="font-size:11px;">
        <td style="font-weight: bold;">NOMOR</td>
        <td>:</td>
        <td>{{$tiket->nomor}}</td>
    </tr>
    <tr style="font-size:11px;">
        <td style="font-weight: bold;">TANGGAL</td>
        <td>:</td>
        <td>{{$tiket->created_at->format("d/m/Y")}}</td>
    </tr>
</table>
<table width="100%" class="isi">
    <tr>
        <td class="judul" colspan="4">DATA PEMOHON *</td>
    </tr>
    <tr>
        <td class="bold" width="17%">NAMA PEMOHON</td>
        @if($tiket->jenispelapor == "Pegawai")
            @php $pelapor = \App\Siap::find($tiket->pelapor) @endphp
        @elseif($tiket->jenispelapor == "Anggota")
            @php $pelapor = \App\Sigota::find($tiket->pelapor) @endphp
        @else
            @php $pelapor = \App\PelaporLain::find($tiket->pelapor) @endphp
        @endif
        <td colspan="3">{{$pelapor->nama}}</td>
    </tr>
    <tr>
        <td class="bold">BAGIAN</td>
        <td colspan="3">{{$pelapor->fraksi}}</td>
    </tr>
    <tr>
        <td class="bold">GEDUNG</td>
        <td>{{$pelapor->gedung}}</td>
        <td class="bold" width="17%">UNIT KERJA</td>
        <td>{{$tiket->jenispelapor}}</td>
    </tr>
    <tr>
        <td class="bold">NOMOR RUANGAN</td>
        <td>{{$pelapor->ruang}}</td>
        <td class="bold">LANTAI</td>
        <td>{{$pelapor->lantai}}</td>
    </tr>
    <tr>
        <td class="bold">NOMOR TELPON</td>
        <td>{{$tiket->phone_pelapor}}</td>
        <td class="bold">EMAIL</td>
        <td>{{$tiket->email_pelapor}}</td>
    </tr>
    <tr>
        <td class="judul" colspan="4" style="border-top: 2px solid black;">NAMA PERANGKAT *</td>
    </tr>
    <tr>
        <td class="bold">TIPE</td>
        <td colspan="3">
            <p style="margin-right: 1em; display: inline">[</p>] PC
            <p style="margin-left:1em; margin-right: 1em; display: inline">[</p>] Laptop
            <p style="margin-left:1em; margin-right: 1em; display: inline">[</p>] Handphone
            <p style="margin-left:1em; margin-right: 1em; display: inline">[</p>] Printer Jaringan
            <p style="margin-left:1em; margin-right: 1em; display: inline">[</p>] Access Point
        </td>
    </tr>
    <tr>
        <td></td>
        <td colspan="3"><p style="margin-right: 1em; display: inline">[</p>] Lain-lain :</td>
    </tr>
    <tr>
        <td class="bold">MERK</td>
        <td></td>
        <td class="bold">RAM</td>
        <td></td>
    </tr>
    <tr>
        <td class="bold">SISTEM OPERASI</td>
        <td></td>
        <td class="bold">SERIAL NUMBER</td>
        <td></td>
    </tr>
    <tr>
        <td class="judul" colspan="4" style="border-top: 2px solid black;">DATA PERMASALAHAN *</td>
    </tr>
    <tr>
        <td class="bold">KATEGORI</td>
        <td colspan="3">{{$tiket->daftar_kasuses->kasus}}</td>
    </tr>
    <tr>
        <td class="bold" height="7%" valign="top">PERMASALAHAN</td>
        <td colspan="3" valign="top">
            @if(strlen($tiket->permasalahan)<=300)
                {!! $tiket->permasalahan !!}
            @else
                {!! substr($tiket->permasalahan,0,300) . '...'; !!}
            @endif
        </td>
    </tr>
    <tr>
        <td class="bold">DESKRIPSI</td>
        <td colspan="3"></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td colspan="3"></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td colspan="3"></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td colspan="3"></td>
    </tr>
    <tr>
        <td class="judul" colspan="4" style="border-top: 2px solid black;">DATA PEMECAHAN MASALAH / SOLUSI *</td>
    </tr>
    <tr>
        <td class="bold">SOLUSI</td>
        <td colspan="3"></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td colspan="3"></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td colspan="3"></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td colspan="3"></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td colspan="3"></td>
    </tr>
    <tr>
        <td class="judul" colspan="4" style="border-top: 2px solid black;">DATA PERSETUJUAN **</td>
    </tr>
    <tr>
        <td colspan="4" height="15%" valign="top" style="padding: 15px;">
            <p style="margin-left: 5px;">Permasalahan ini telah ditangani dan dapat diterima dengan baik</p>
            <table width="100%" style="margin-bottom: 50px;">
                <tr>
                    <td width="60%" class="bold" style="border: 0px;">NAMA PEMOHON : {{$pelapor->nama}}</td>
                    <td class="bold" style="border: 0px;">TEKNISI : {{$tiket->petugases->nama}}</td>
                </tr>
                <tr>
                    <td class="bold" style="border: 0px;">TTD / PARAF:</td>
                    <td class="bold" style="border: 0px;">TANGGAL PELAKSANAAN :</td>
                </tr>
            </table>
            <p style="font-size:7px; margin-left: 5px; margin-bottom: 0px;">KETERANGAN<br>*diisi oleh teknisi<br>**diisi oleh pemohon dan teknisi</p>
        </td>
    </tr>
</table>
</body>
</html>