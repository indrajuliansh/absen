<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Absensi Karyawan Harian</title>
  <style>
    /* Style untuk container gambar dan label */
    .container {
      position: relative;
      width: 11.69in; /* Lebar ukuran A4 */
      height: 8.27in; /* Tinggi ukuran A4 */
    }

    /* Style untuk gambar */
    .container img.logo  {
      width: 70px;
      height: 70px;
      position: absolute;
      top: 3%;
      left: 17%;
    }

    img.checkblue{
      width: 7px;
      height: 7px;
     padding:2px;

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
      width: 89%; /* Lebar tabel 80% dari kontainer */
      height: auto; /* Tinggi tabel mengikuti konten */
      border-collapse: collapse; /* Gabungkan batas-batas tabel */
      margin: 20px auto; /* Posisi tabel di tengah halaman */
      background-color: 0; /* Warna latar belakang tabel */
      
      font-size: 14px ;
    }

    /* Atur border untuk setiap sel */
    table, th, td {
      border: 1px solid black;
    }

    /* Gaya untuk header tabel */
    th {
      background-color: 0;
      color: black;
      text-align: center;
    }
th.mph {
  width:35%;
}
th.tanggal {
  width:14%;
}
th.kjk {
  width:23%;
}
th.shift {
  width:3.5%;
}
th.masuk-security {
  width:5%;
}
th.keluar-security {
  width:5%;
}
th.ttdp {
  width:6%;
}
th.karyawan {
  width:6%;
}
th.masuk-absen {
  width:4%;
}
th.keluar-absen {
  width:4%;
}
    /* Gaya untuk mengatur posisi dengan lebih presisi menggunakan position */
    .custom-table {
      position: absolute;
      top: 14.5%; /* Jarak dari atas halaman */
      left: 17%; /* Jarak dari kiri halaman */
      line height: 9px; /* Tinggi tabel mengikuti konten */
      padding:1px;
    }
  </style>
</head>
<body>
  <div class="container">
    <img src="LOGO.png" class="logo"alt="Gambar">
    <label class="label5">PT. HALDIN PACIFIC SMESTA</label>
    <label class="label4">FORM ABSENSI KARYAWAN HARIAN</label>
    <label class="label">Produksi</label>
    <label class="label2">Indra Juliansyah</label>
    <label class="label3">September</label>
    <label class="label6">Departemen :</label>
    <label class="label7">Nama       :</label>
    <label class="label8">Plant      :</label>
    <label class="label9">Bulan         :</label>
    <label class="label10">Cost Center  :</label>

  
  
  <table id="invoc" class="custom-table">
    <thead>
        <tr>
            <th rowspan="3"class="tanggal">Tanggal</th>
            <th colspan="2"class="absen">Absen</th>
            <th rowspan="3"class="shift">Shift</th>
            <th colspan="3"class="ttd"> TTD</th>
            <th colspan="12"class="mph"> Monitoring Personal Hygiene*</th>
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
            <th rowspan="2"class="5">5</th>
            <th rowspan="2"class="6">6</th>
            <th rowspan="2"class="7">7</th>
            <th rowspan="2"class="8">8</th>
            <th rowspan="2"class="9">9</th>
            <th rowspan="2"class="10">10</th>
            <th rowspan="2"class="11">11</th>
            <th rowspan="2"class="12">12</th>
            
        </tr>

        <tr>
          <th class="masuk-security">Masuk</th>
          <th class="keluar-security">Keluar</th>
        </tr>
        <tbody>

        </tbody>
  </thead>

    </table>
<div id="output"></div>

    <script>
        // Ambil data dari sessionStorage dan tampilkan di tabel
        window.onload = function() {
            let data = JSON.parse(sessionStorage.getItem('data')) || [];
            const tableBody = document.querySelector('#invoc tbody');
            data.forEach((item, index) => {
                const newRow = tableBody.insertRow();

                const nameCell = newRow.insertCell(0);
                const jobCell = newRow.insertCell(1);
                const time2Cell = newRow.insertCell(2);
                const ageCell = newRow.insertCell(3);
                const noCell = newRow.insertCell(4);

                const indra1Cell = newRow.insertCell(5)
                const indra2Cell = newRow.insertCell(6)
                const indra3Cell = newRow.insertCell(7)
                const indra4Cell = newRow.insertCell(8)
                const indra5Cell = newRow.insertCell(9)
                const indra6Cell = newRow.insertCell(10)
                const indra7Cell = newRow.insertCell(11)
                const indra8Cell = newRow.insertCell(12)
                const indra9Cell = newRow.insertCell(13)
                const indra10Cell = newRow.insertCell(14)
                const indra11Cell = newRow.insertCell(15)
                const indra12Cell = newRow.insertCell(16)
                const indra13Cell = newRow.insertCell(17)
                const indra14Cell = newRow.insertCell(18)
                const deleteCell = newRow.insertCell(19);
                const kegiatanCell = newRow.insertCell(20);
                


                // Masukkan data ke dalam sel
                nameCell.innerHTML = item.date;
                jobCell.innerHTML = item.time1;
                time2Cell.innerHTML = item.time2;
                ageCell.innerHTML = item.sift;
                noCell.innerHTML = '';

                indra1Cell.innerHTML='';
             indra2Cell.innerHTML='';
             indra3Cell.innerHTML='<img class="checkblue" src="check2.png" alt="Deskripsi Gambar"></img>';
             indra4Cell .innerHTML='<img class="checkblue" src="check2.png" alt="Deskripsi Gambar"></img>';
             indra5Cell .innerHTML='<img class="checkblue" src="check2.png" alt="Deskripsi Gambar"></img>';
             indra6Cell.innerHTML='<img class="checkblue" src="check2.png" alt="Deskripsi Gambar"></img>';
             indra7Cell .innerHTML='<img class="checkblue" src="check2.png" alt="Deskripsi Gambar"></img>';
             indra8Cell .innerHTML='<img class="checkblue" src="check2.png" alt="Deskripsi Gambar"></img>';
             indra9Cell .innerHTML='<img class="checkblue" src="check2.png" alt="Deskripsi Gambar"></img>';
             indra10Cell .innerHTML='<img class="checkblue" src="check2.png" alt="Deskripsi Gambar"></img>';
             indra11Cell.innerHTML='<img class="checkblue" src="check2.png" alt="Deskripsi Gambar"></img>';
             indra12Cell.innerHTML='<img class="checkblue" src="check2.png" alt="Deskripsi Gambar"></img>';
             indra13Cell.innerHTML='<img class="checkblue" src="check2.png" alt="Deskripsi Gambar"></img>';
             indra14Cell.innerHTML='<img class="checkblue" src="check2.png" alt="Deskripsi Gambar"></img>';
             deleteCell.innerHTML = '';
             
             kegiatanCell.innerHTML = item.step_produksi;
            });
        };
    
    // Mengambil data dari sessionStorage
    const name = sessionStorage.getItem('name');
    

    // Menampilkan data
    if (name) {
      document.getElementById('output').innerText = `Welcome, ${name}!`;
    } else {
      document.getElementById('output').innerText = 'No name found in session.';
    }
  </script>

    </div>
</body>
</html>
