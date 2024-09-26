<html></html>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<body><h4>ABSENSI LAPORAN KERJA KARYAWAN HARIAN </h4><br>
<h4>HALDIN PACIFIC SEMESTA </h4>
<script>
        function updateOptions() {
            var produksiSelect = document.getElementById("produksi");
            var isiSelect = document.getElementById("isi_produksi");
            var stepSelect = document.getElementById("step_produksi");

            // Reset dropdown kedua dan ketiga
            isiSelect.innerHTML = "<option value=''>--Pilih Dulu Kategori Produksi--</option>";
            stepSelect.innerHTML = "<option value=''>--Pilih Dulu Isi Produksi--</option>";

            // Data isi produksi dan langkah
            var dataProduksi = {
                "produksi": [
                    {
                        name: "Liquid_Extractor",
                        steps: [
                            "Suport SCC",
                            "Suport BIB",
                            "Suport Meco"
                        ]
                    },
                    {
                        name: "Spray_dryer",
                        steps: [
                            "Suport SD 5",
                            "Suport SD 3",
                            "Suport SD 2"
                        ]
                    }
                ],
                "warehouse": [
                    {
                        name: "Finis_Good",
                        steps: [
                            "Packing_Produk",
                            "Repack_Produk"
                        ]
                    },
                    {
                        name: "Gudang",
                        steps: [
                            "Bongkar_Muat"
                        ]
                    }
                ]
            };

            // Perbarui dropdown kedua berdasarkan pilihan di dropdown pertama
            var selectedProduksi = produksiSelect.value;
            if (selectedProduksi in dataProduksi) {
                dataProduksi[selectedProduksi].forEach(function(item) {
                    var option = document.createElement("option");
                    option.value = item.name;
                    option.text = item.name;
                    isiSelect.appendChild(option);
                });
            }
        }

        function updateSteps() {
            var produksiSelect = document.getElementById("produksi").value;
            var isiSelect = document.getElementById("isi_produksi").value;
            var stepSelect = document.getElementById("step_produksi");

            // Reset dropdown ketiga
            stepSelect.innerHTML = "<option value=''>--Pilih Dulu Isi Produksi--</option>";

            // Data isi produksi dan langkah (sama dengan di fungsi sebelumnya)
            var dataProduksi = {
                "produksi": [
                    {
                        name: "Liquid_Extractor",
                        steps: [
                            "Suport SCC",
                            "Suport BIB",
                            "Suport Meco"
                        ]
                    },
                    {
                        name: "Spray_dryer",
                        steps: [
                            "Suport SD 5",
                            "Suport SD 3",
                            "Suport SD 2"
                        ]
                    }
                ],
                "warehouse": [
                    {
                        name: "Finis_Good",
                        steps: [
                            "Packing Produk",
                            "Repack_Produk"
                        ]
                    },
                    {
                        name: "Gudang",
                        steps: [
                            "Bongkar_Muat"
                        ]
                    }
                ]
            };

            // Perbarui dropdown ketiga berdasarkan pilihan di dropdown kedua
            if (produksiSelect in dataProduksi) {
                var selectedItem = dataProduksi[produksiSelect].find(function(item) {
                    return item.name === isiSelect;
                });

                if (selectedItem) {
                    selectedItem.steps.forEach(function(step) {
                        var option = document.createElement("option");
                        option.value = step;
                        option.text = step;
                        stepSelect.appendChild(option);
                    });
                }
            }
        }
    </script>
<form method="POST" id="dataform" >

<br>
            <label> Nama : </label>
            <input type= "text" placeholder="Masukan Nama" id="name"name="nama_pegawai" ></input>
            <br>


<label for="produksi"> Pilih Departemen:</label>
<select id="produksi" name="produksi" onchange="updateOptions()">
    <option value="">--Pilih--</option>
    <option value="produksi">Produksi </option>
    <option value="warehouse">Warehouse</option>
</select>
<br>

<label for="isi_produksi">Pilih Line:</label>
<select id="isi_produksi" name="isi_produksi" onchange="updateSteps()">
    <option value="">--Pilih Dulu Kategori Line--</option>
</select>
<br>

<label for="step_produksi">Pilih Jenis Kegiatan:</label>
<select id="step_produksi" name="step_produksi">
    <option value="">--Pilih Dulu Jenis Kegiatan--</option>
</select>



<br>

            <label> Tanggal : </label>
            <input type="date" id="date"></input>
            <br>
            <label> Shift : </label>
            <select name="Sift" id="sift">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="Long 1">Long 1</option>
                <option value="Long 2">Long 2</option>
                <option value="1/2 Shift">1/2 Sift</option>
            </select>
            <br>
            <label for="timeInput"> Jam Masuk </label>
            <input type="time" id="time1" name="timeInput" required>
            <label for="timeInput"> Jam Keluar </label>
            <input type="time" id="time2" name="timeInput" required>
            <br>
            <label> Aktivitas Kerja : </label>
            <input type= "text" placeholder="Isikan Aktivitas" name="aktivitas" ></input>
            <br>
            <input type='submit' id='submit' name="tambah_data" value='Tambah Data'></input>

            <script>
        // Fungsi untuk menambah data ke tabel
        document.getElementById('dataform').addEventListener('submit', function(e) {
            e.preventDefault(); // Mencegah halaman refresh

            // Ambil nilai dari input form
            const date = document.getElementById('date').value;
            const sift = document.getElementById('sift').value;
            const time1 = document.getElementById('time1').value;
            const time2 = document.getElementById('time2').value;
            const step_produksi = document.getElementById('step_produksi').value;

            // Dapatkan tabel dan tambahkan baris baru
            const table = document.getElementById('dataTable');
            const newRow = table.insertRow();

            const rowCount = table.rows.length; // Menghitung total baris, termasuk header

            // Tambah sel untuk masing-masing kolom
            const noCell = newRow.insertCell(0);
            const nameCell = newRow.insertCell(1);
            const ageCell = newRow.insertCell(2);
            const jobCell = newRow.insertCell(3);
            const time2Cell = newRow.insertCell(4);
            const kegiatanCell = newRow.insertCell(5);
            const deleteCell = newRow.insertCell(6);

            // Masukkan data ke dalam sel
            noCell.innerHTML = rowCount - 1;  // Minus 1 karena header tabel dihitung sebagai baris
            nameCell.innerHTML = date;
            ageCell.innerHTML = sift;
            jobCell.innerHTML = time1;
            time2Cell.innerHTML = time2;
            kegiatanCell.innerHTML = step_produksi;
            deleteCell.innerHTML = '<button class="btn btn-danger" onclick="deleteRow(this)">Hapus</button>'; // Tombol hapus

           
            // Bersihkan form setelah submit
            document.getElementById('dataForm').reset();
        });
        function deleteRow(button) {
        // Mendapatkan baris (tr) yang berisi tombol yang diklik
        var row = button.parentNode.parentNode; // Mengakses elemen <tr>
        row.parentNode.removeChild(row); // Menghapus baris dari tabel
    }
    </script>


<div class="container mt-5">
  <table id="dataTable" class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Sift</th>
            <th> Jam Masuk</th>
            <th> Jam Keluar</th>
            <th>Jenis Kegiatan</th>
            <th>Hapus</th>
            
        </tr>
     </thead>
    </table>


</form>

</body></html>