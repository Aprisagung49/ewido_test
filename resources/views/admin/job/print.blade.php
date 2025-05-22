<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    {{-- <button onclick="window.print()" style="margin-bottom: 20px;">🖨️ Cetak CV</button> --}}
    <title>CV Digital - {{ $pelamar->nama }}</title>
    <style>
        @media print {
            button {
                display: none;
            }
        }

        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            color: #333;
        }

        h1 {
            text-align: center;
            margin-bottom: 5px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 3px solid #333;
            padding-bottom: 10px;
            margin-bottom: 30px;
        }

        .header img {
            width: 120px;
            height: auto;
            border: 1px solid #ccc;
        }

        .section-title {
            background-color: #444;
            color: white;
            padding: 10px;
            margin-top: 30px;
            font-weight: bold;
            font-size: 16px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        td {
            padding: 6px 10px;
            vertical-align: top;
        }

        td:first-child {
            width: 200px;
            font-weight: bold;
        }

        tr:not(:last-child) td {
            border-bottom: 1px solid #ddd;
        }

        ul {
            padding-left: 20px;
        }

        @media print {
            @page {
                size: A4;
                margin: 20mm;
            }
        }
    </style>
</head>

<body>

    <div class="header">
        <div>
            <h1>Curriculum Vitae</h1>
            <h2>{{ $pelamar->nama }}</h2>
        </div>
        @if ($file_uploads && $file_uploads->pas_foto_upload)
            <img src="{{ asset('storage/' . $file_uploads->pas_foto_upload) }}" alt="Foto KTP"
                class="w-40 h-60 object-cover rounded-lg" />
        @else
            <div class="w-40 h-60 bg-gray-300 rounded-lg flex items-center justify-center text-gray-600 text-sm">
                160x240
            </div>
        @endif
    </div>

    <div class="section-title">Data Diri</div>
    <table>
        <tr>
            <td>Nama</td>
            <td>{{ $pelamar->nama }}</td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>{{ $pelamar->nik }}</td>
        </tr>
        <tr>
            <td>Tempat & Tanggal Lahir</td>
            <td>{{ $pelamar->tempat_lahir }},
                {{ \Carbon\Carbon::parse($pelamar->tanggal_lahir)->translatedFormat('d F Y') }}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>{{ $pelamar->jenis_kelamin }}</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>{{ $pelamar->agama }}</td>
        </tr>
        <tr>
            <td>Status Perkawinan</td>
            <td>{{ $pelamar->status_menikah }}</td>
        </tr>
        <tr>
            <td>No. HP</td>
            <td>{{ $pelamar->nohp }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $pelamar->email }}</td>
        </tr>
        <tr>
            <td>Alamat KTP</td>
            <td>{{ $pelamar->alamatKtp->alamat1 }}</td>
        </tr>
        <tr>
            <td>Alamat Domisili</td>
            <td>{{ $pelamar->alamatDomisili->alamat0 }}</td>
        </tr>
    </table>

    <div class="section-title">Pendidikan</div>
    <table>
        <tr>
            <td>Pendidikan Terakhir</td>
            <td>{{ $pelamar->education->last_education }}</td>
        </tr>
        <tr>
            <td>Nama Institusi</td>
            <td>{{ $pelamar->education->name_school }}</td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>{{ $pelamar->education->jurusan }}</td>
        </tr>

        <tr>
            <td>Tahun Lulus</td>
            <td>{{ $pelamar->education->tahun_kelulusan }}</td>
        </tr>
    </table>

    <div class="section-title">Pengalaman Kerja</div>
    @forelse ($pelamar->experiences as $exp)
        <table>
            <tr>
                <td>Perusahaan</td>
                <td>{{ $exp->nama_perusahaan }}</td>
            </tr>
            <tr>
                <td>Posisi</td>
                <td>{{ $exp->jabatan }}</td>
            </tr>
            <tr>
                <td>Tahun Masuk</td>
                <td>{{ $exp->tanggal_mulai }}</td>
            </tr>
            <tr>
                <td>Tahun Keluar</td>
                <td>{{ $exp->tanggal_selesai }}</td>
            </tr>
        </table>
    @empty
        <p>Tidak ada pengalaman kerja.</p>
    @endforelse

    <div class="section-title">Keahlian</div>
    <ul>


        @foreach (optional($pelamar->skill)->keahlian ?? [] as $keahlian)
            <span
                class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-gray-700 dark:text-gray-300">
                {{ is_array($keahlian) ? implode(', ', $keahlian) : $keahlian }}
            </span>
        @endforeach


    </ul>

    <div class="section-title">Kesehatan</div>
    <table>

        <tr>
            <td>Penyakit</td>
            <td>{{ optional($pelamar->riwayatKesehatan)->nama_penyakit }}</td>
        </tr>
    </table>

    <div class="section-title">Informasi Tambahan</div>
    <table>

        <tr>
            <td>Kenalan di perusahaan</td>
            <td>{{ optional($pelamar->job_information)->kenalan }}</td>
        </tr>
        <tr>
            <td>Kesiapan Penempatan</td>
            <td>{{ $pelamar->job_information->siap_ditempatkan }}</td>
        </tr>
        <tr>
            <td>Referensi Kerja</td>
            <td>
                @foreach (Arr::wrap($pelamar->job_information->referensi_kerja) as $ref)
                    {{ $ref }}{{ !$loop->last ? ', ' : '' }}
                @endforeach
            </td>
        </tr>
    </table>

</body>

<script>
    window.onload = function() {
        window.print();
    };
</script>

</html>
