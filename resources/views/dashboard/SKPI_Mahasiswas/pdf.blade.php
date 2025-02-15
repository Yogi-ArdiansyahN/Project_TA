<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Custom styles for this template -->
    <link href="/css/dokumen.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Times New Roman', Times, serif;
        }

        .atasan-1 {
            text-align: center;
        }

        .tabel {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .my-table {
            width: 70%;
            text-align: justify;
        }
    </style>
</head>

<body>

    <head>
        <p style="text-align: right;">[No Ijazah] [{{$Mahasiswa->nama}}]</p>
    </head>

    <main>
        <div class="atasan">
            <img src="/img/unsur.png" height="100" width="100">
        </div>
        <div class="atasan-1">
            <h5>UNIVERSITAS SURYAKANCANA</h5>
        </div>
        <div class="tabel">
            <p class="p1">SURAT KETERANGAN PENDAMPING IJAZAH</p>
            <p>No: SKPI</p>
            <td>
                Surat Keterangan Pendamping Ijazah (SKPI) ini mengacu pada Kerangka Kualiﬁkasi Nasional Indonesia (KKNI) dan Konvensi Unesco tentang pengakuan studi, ijazah dan gelar pendidikan tinggi. Tujuan dari SKPI ini adalah menjadi dokumen yang menyatakan kemampuan kerja, penguasaan pengetahuan, dan sikap/moral pemegangnya.
            </td>
        </div>
        <!-- Identitas Pemilik SKPI -->
        <div class="tabel1">
            <table class="my-table1">
                <tr>
                    <td colspan="2">
                        <p class="p2" style="font-size: 20px;">01. Informasi tentang identitas diri pemegang SKPI</p>
                    </td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td></td>
                    <td></td>
                    <td>Tahun Lulus</td>
                </tr>
                <tr>
                    <td>
                        <p class="p2">{{ $Mahasiswa->nama }}</p>
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                        <p class="p2">2023</p>
                    </td>
                </tr>
                <tr>
                    <td>Tempat dan Tanggal Lahir</td>
                    <td></td>
                    <td></td>
                    <td>No Ijazah</td>
                </tr>
                <tr>
                    <td>
                        <p class="p2">{{ $Mahasiswa->tmpt_lahir }}, {{$Mahasiswa->ttl}}</p>
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                        <p class="p2">12345</p>
                    </td>
                </tr>
                <tr>
                    <td>Nomor Pokok Mahasiswa</td>
                    <td></td>
                    <td></td>
                    <td>Gelar</td>
                </tr>
                <tr>
                    <td>
                        <p class="p2">{{ $Mahasiswa->npm }}</p>
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                        <p class="p2">Sarjana Teknik</p>
                    </td>
                </tr>
            </table>
        </div>
        <!-- Penyelenggara Program -->
        <div class="tabel1">
            <table class="my-table1">
                <tr>
                    <td colspan="2">
                        <p class="p2" style="font-size: 20px;">02. Informasi tentang identitas Penyelenggara Program</p>
                    </td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td>SK Perguruan Tinggi</td>
                    <td></td>
                    <td></td>
                    <td> Persyaratan penerimaan</td>
                </tr>
                <tr>
                    <td>
                        <p class="p3">No: 100/D/0/2001 Tanggal 02 Agustus 2001</p>
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                        <p class="p3">Lulus pendidikan menengah atas/sederajat</p>
                    </td>
                </tr>
                <tr>
                    <td>Nama Perguruan Tinggi</td>
                    <td></td>
                    <td></td>
                    <td>Bahasa pengantar kuliah</td>
                </tr>
                <tr>
                    <td>
                        <p class="p3">Universitas Suryakancana</p>
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                        <p class="p3">Indonesia</p>
                    </td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td></td>
                    <td></td>
                    <td>Sistem Penilaian</td>
                </tr>
                <tr>
                    <td>
                        <p class="p4">{{$Mahasiswa->prodi}}</p>
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                        <p class="p3">Skala 1-4; A=4, B=3, C=2, D=1</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="p4">Kelas: {{ $Mahasiswa->kelas }}</p>
                    </td>
                    <td></td>
                    <td></td>
                    <td>Lama Studi Reguler</td>
                </tr>
                <tr>
                    <td>Jenis dan Jenjang Pendidikan</td>
                    <td></td>
                    <td></td>
                    <td>
                        <p class="p3">8 Semester</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="p3">Sarjana (Strata 1)</p>
                    </td>
                    <td></td>
                    <td></td>
                    <td>Jenis dan jenjang pendidikan lanjutan</td>
                </tr>
                <tr>
                    <td>Jenjang kualifikasi sesuai KKNI</td>
                    <td></td>
                    <td></td>
                    <td>
                        @if($Mahasiswa->pendidikan_lanjut)
                        <p class="p3">{{$Mahasiswa->pendidikan_lanjut}}</p>
                        @else
                        <p class="p3">-</p>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="p3">Level 6</p>
                    </td>
                    <td></td>
                    <td></td>
                    <td>Status Profesi (Bila Ada)</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        @if($Mahasiswa->status_profesi)
                        <p class="p3">{{$Mahasiswa->status_profesi}}</p>
                        @else
                        <p class="p3">-</p>
                        @endif
                    </td>
                </tr>

            </table>
        </div>
        <!-- Hasil Yang Dicapai -->
        <div class="tabel1">
            <table class="my-table1">
                <tr>
                    <td>
                        <p class="p2" style="font-size: 20px;">03. Informasi tentang kualifikasi dan hasil yang dicapai</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="p4">A. Capaian Pembelajaran</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="p5">Sarjana Teknik : {{ $Mahasiswa->prodi }}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="p5">(KKNI Level 6)</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="p6"><b>Kemampuan Kerja</b></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="p5">
                            {{ $Mahasiswa->kemampuan_kerja }}
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="p6"><b>Penguasaan Pengetahuan</b></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="p5">
                            {{ $Mahasiswa->penguasaan }}
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="p6"><b>Sikap Khusus</b></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="p5">
                            {{$Mahasiswa->sikap_khusus}}
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="p6">B. Aktivitas Prestasi dan Penghargaan</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="p5">Pemegang Surat Keterangan Pendamping Ijazah ini memiliki sertifikat profesional:</p>
                <tr>
                    <td>
                        @foreach($prestasis as $pres)
                        <p class="p5">{{$loop->iteration}}. {{$pres->nama}}</p>
                        @endforeach
                    </td>
                </tr>
                </td>
                <td>
                    <p class="p7">Mahasiswa Universitas Suryakancana telah mengikuti program atau telah memenuhi tanggung jawab:</p>
                    <tr>
                        <td>
                            @foreach($prestasis as $pres)
                            <p class="p5">{{$loop->iteration}}. {{$pres->nama}}</p>
                            @endforeach
                        </td>
                    </tr>
                </td>
                </tr>
                <tr>
                    <td>
                        <p class="p6">Catatan:</p>
                <tr>
                    <td>
                        <p class="p4">Program-program tersebut di atas terdiri atas kegiatan untuk mengembangkan soft skills mahasiswa. Daftar kegiatan ko-kurikuler dan ekstra-kurikuler yang diikuti oleh pemegang SKPI ini terlampir.</p>
                    </td>
                </tr>
                </td>
                </tr>
            </table>
        </div>
        <!-- Sistem Pendidikan -->
        <div class="tabel1">
            <table class="my-table1">
                <tr>
                    <td>
                        <p class="p2" style="font-size: 20px;">04. Informasi tentang Sistem Pendidikan Tinggi di Indonesia</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="p6">SISTEM PENDIDIKAN INDONESIA</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        @foreach($Infos as $info)
                        <p class="p6">{!! $info->pendidikan !!}</p>
                        @endforeach
                    </td>
                </tr>
            </table>
        </div>
        <!-- KKNI -->
        <div class="tabel1">
            <table class="my-table1">
                <tr>
                    <td>
                        <p class="p2" style="font-size: 20px;">05. Kerangka Kualifikasi Nasional Indonesia</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        @foreach($Infos as $info)
                        <p class="P6">{!! $info->kkni !!}</p>
                        @endforeach
                    </td>
                </tr>
            </table>
        </div>
        <div class="atasan">
            <img src="/img/template SKPI.png" alt="Profile Mahasiswa" height="400" width="470">
        </div>
        <div class="tabel1">
            <table class="my-table1">
                <tr>
                    <td>
                        <p class="p2" style="font-size: 20px;">06. Pengesahan SKPI</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Cianjur, Tanggal Bulan Tahun</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="p10" style="color: white;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, eveniet porro sint, enim doloremque ut a error aperiam illo velit aliquam pariatur consequuntur debitis incidunt voluptatum nesciunt perferendis. Officiis, blanditiis!
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="p9">H. Widy Setyawan, Ir., M.T.</p>
                <tr>
                    <td>
                        <p class="p8">
                            Dekan Fakultas Teknik
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="p8">Nomor Induk Karyawan : 4103005015</p>
                    </td>
                </tr>
                </td>
                </tr>
            </table>
        </div>

        <div class="tabel2">
            <table class="my-table1">
                <tr>
                    <td colspan="2">
                        <p class="p2">Catatan Resmi</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>
                                SKPI dikeluarkan oleh institusi pendidikan tinggi yang berwenang mengeluarkan ijazah sesuai dengan paraturan perundang-undangan yang berlaku.
                            </li>
                            <li>
                                SKPI hanya diterbitkan setelah mahasiswa dinyatakan lulus dari suatu program studi secara resmi oleh Perguruan Tinggi.
                            </li>
                            <li>
                                SKPI diterbitkan dalam Bahasa Indonesia dan Bahasa Inggris.
                            </li>
                            <li>
                                SKPI yang asli diterbitkan mengunakan kertas khusus (barcode/halogram security paper) berlogo Perguruan Tinggi, yang diterbitkan secara khusus oleh Perguruan Tinggi.
                            </li>
                            <li>
                                Penerima SKPI dicantumkan dalam situs resmi Perguruan Tinggi.
                            </li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>

        <div class="tabel2">
            <table class="my-table1">
                <tr>
                    <td colspan="2">
                        <p class="p8"><b>Alamat</b></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="p8">FAKULTAS TEKNIK</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="p8">UNIVERSITAS SURYAKANCANA</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="p8">Jl. Pasir Gede Raya Kec. Cianjur Kel. Bojongherang, Cianjur 43216</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="p8">Tel: (+62 263) 283578</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="p8">Fax: (+62 263) 283578</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="p8">Website: ft.unsur.ac.id</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="p8">Email: ftunsur@yahoo.com</p>
                    </td>
                </tr>

            </table>
        </div>
    </main>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> -->
</body>

</html>