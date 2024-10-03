<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Label di Atas Gambar Berukuran A4</title>
  <style>
    /* Style untuk container gambar dan label */
    .container {
      position: relative;
      width: 11.69in; /* Lebar ukuran A4 */
      height: 8.27in; /* Tinggi ukuran A4 */
    }

    /* Style untuk gambar */
    .container img {
      width: 70px;
      height: 70px;
      position: absolute;
      top: 3%;
      left: 17%;
    }

    /* Style untuk label yang ada di atas gambar */
    .container .label { /**isian departemen */
      position: absolute;
      top: 11.5%;
      left: 31%;
      transform: translate(-50%, -50%); /* Agar label benar-benar di tengah */
      color: black;
      padding: 5px;
      font-size: 16px;
      border-radius: 5px;
    }

    .container .label2 { /**isian nama */
      position: absolute;
      top: 11.5%;
      left: 58%;
      transform: translate(-50%, -50%); /* Agar label benar-benar di tengah */
      color: black;
      padding: 5px;
      font-size: 16px;
      border-radius: 5px;
    }

    .container .label3 { /**isi untuk bulan */
      position: absolute;
      top: 13.5%;
      left: 56%;
      transform: translate(-50%, -50%); /* Agar label benar-benar di tengah */
      color: black;
      padding: 5px;
      font-size: 16px;
      border-radius: 5px;
    }

    .container .label4 {/**heang form absensi */
      position: absolute;
      top: 5%;
      left: 60%;
      transform: translate(-50%, -50%); /* Agar label benar-benar di tengah */
      color: black;
      padding: 5px;
      font-size: 16px;
      border-radius: 5px;
    }

    .container .label5 {/**heading PT>haldin */
      position: absolute;
      top: 3%;
      left:60%;
      transform: translate(-50%, -50%); /* Agar label benar-benar di tengah */
      color: black;
      padding: 5px;
      font-size: 16px;
      border-radius: 5px;
    }

    .container .label6 {/**departemen */
      position: absolute;
      top: 11.5%;
      left:21%;
      transform: translate(-50%, -50%); /* Agar label benar-benar di tengah */
      color: black;
      padding: 5px;
      font-size: 16px;
      border-radius: 5px;
    }

    .container .label7 {/**nama */
      position: absolute;
      top: 11.5%;
      left:50%;
      transform: translate(-50%, -50%); /* Agar label benar-benar di tengah */
      color: black;
      padding: 5px;
      font-size: 16px;
      border-radius: 5px;
    }

    .container .label8 { /**plant */
      position: absolute;
      top: 13.5%;
      left:19%;
      transform: translate(-50%, -50%); /* Agar label benar-benar di tengah */
      color: black;
      padding: 5px;
      font-size: 16px;
      border-radius: 5px;
    }

    .container .label9 { /** BUlan */
      position: absolute;
      top: 13.5%;
      left:50%;
      transform: translate(-50%, -50%); /* Agar label benar-benar di tengah */
      color: black;
      padding: 5px;
      font-size: 16px;
      border-radius: 5px;
    }

    .container .label10 {/**cost center */
      position: absolute;
      top:15.5%;
      left:21%;
      transform: translate(-50%, -50%); /* Agar label benar-benar di tengah */
      color: black;
      padding: 5px;
      font-size: 16px;
      border-radius: 5px;
    }

    /* Atur ukuran tabel */
    table {
      width: 65%; /* Lebar tabel 80% dari kontainer */
      height: auto; /* Tinggi tabel mengikuti konten */
      border-collapse: collapse; /* Gabungkan batas-batas tabel */
      margin: 20px auto; /* Posisi tabel di tengah halaman */
      background-color: 0; /* Warna latar belakang tabel */
      font-size: 9px ;
    }

    /* Atur border untuk setiap sel */
    table, th, td {
      border: 1px solid black;
    }

    /* Gaya untuk header tabel */
    th {
      background-color: 0;
      color: black;
      padding: 10px;
      text-align: center;
    }

    th.tanggal {
        width: 13.7%;

    }

    th.kjk {
      width: 20%;
    }

    /* Gaya untuk mengatur posisi dengan lebih presisi menggunakan position */
    .custom-table {
      position: absolute;
      top: 17.5%; /* Jarak dari atas halaman */
      left: 15%; /* Jarak dari kiri halaman */
    }
  </style>
</head>
<body>
  <div class="container">
    <img src="LOGO.png" alt="Gambar">
    <label class="label5">PT. HALDIN PACIFIC SMESTA</label>
    <label class="label4">FORM ABSENSI KARYAWAN HARIAN</label>
    <label class="label">Produksi</label>
    <label class="label2">Indra Juliansyah</label>
    <label class="label3">September</label>
    <label class="label6">Departemen :</label>
    <label class="label7">Nama :</label>
    <label class="label8">Plant :</label>
    <label class="label9">Bulan :</label>
    <label class="label10">Cost Center :</label>

  </div>
  
  <table id="" class="custom-table">
        <tr>
            <th rowspan="3"class="tanggal">Tanggal</th>
            <th colspan="2"class="absen">Absen</th>
            <th rowspan="3"class="shift">Shift</th>
            <th colspan="3"class="ttd"> TTD</th>
            <th colspan="11"class="mph"> Monitoring Personal Hygiene*</th>
            <th rowspan="3"class="ttdp">TTD Pengawas</th>
            <th rowspan="3"class="kjk">Keterangan/Jenis Kerja</th>
            
        </tr>

        <tr>
            <th rowspan="2"class="masuk-absen">Masuk</th>
            <th rowspan="2"class="keluar-absen">Keluar</th>
            <th rowspan="2"class="karyawan"> Karyawan</th>
            <th colspan="2"class="security"> Security</th>
            <th rowspan="2"class="1">1</th>
            <th rowspan="2"class="2">2</th>
            <th rowspan="2"class="3">3</th>
            <th rowspan="2"class="4">4</th>
            <th rowspan="2"class="5">5</th
            <th rowspan="2"class="6">6</th>
            <th rowspan="2"class="7">6</th>
            <th rowspan="2"class="8">8</th>
            <th rowspan="2"class="9">9</th>
            <th rowspan="2"class="10">10</th>
            <th rowspan="2"class="11">11</th>
            <th rowspan="2"class="12">12</th>
            
        </tr>

        <tr>
          <th>Masuk</th>
          <th>Keluar</th>
        </tr>

        <tr>
          <td>11-11-1111</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>

    </table>
</body>
</html>
