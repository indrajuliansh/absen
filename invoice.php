<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
</head>
<body>
    <div id="invoice">
        <h1>Invoice</h1>
        <p>Nama: Indra Juliansyah</p>
        <p>Total: $100</p>
    </div>

    <button id="download-pdf">Download PDF</button>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script>
        document.getElementById("download-pdf").addEventListener("click", function () {
            const { jsPDF } = window.jspdf;

            // Membuat dokumen PDF dengan orientasi landscape dan ukuran A4
            var doc = new jsPDF({
                orientation: 'landscape',
                unit: 'mm',
                format: 'a4'
            });

            // Ukuran A4: 297mm x 210mm
            var width = doc.internal.pageSize.getWidth();
            var height = doc.internal.pageSize.getHeight();

            // Ambil elemen HTML
            var invoice = document.getElementById("invoice").innerText;
            
            // Tambahkan teks ke PDF
            doc.text(invoice, 10, 10);
            
            // Simpan file PDF
            doc.save("invoice.pdf");
        });
    </script>
</body>
</html>
