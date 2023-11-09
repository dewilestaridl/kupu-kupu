<!DOCTYPE html>
<html>
  <head>
    <title>Penghitung Keuangan</title>
    <style>
      body {
        background-image: url('background3.jpg');
        background-size: cover;
        background-repeat: no-repeat;
      }
    </style>
    <style>
      /* CSS untuk tampilan yang lebih menarik */
      body {
        font-family: Arial, sans-serif;
        background-color:whitesmoke;
        text-align: center;
      }

      h1 {
        color:aliceblue;
      }

      #calculator {
        background-color: white;
        max-width: 490px;
        margin: 0 auto;
        padding: 70px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px #aaa;
      }

      label {
        display: block;
        text-align: left;
        margin-top: 3px;
        font-weight: bold;
        color: #333;
      }

      input {
        width: 90%;
        padding: 12px;
        border: 3px solid #ccc;
        border-radius: 12px;
      }

      button {
        margin-top: 7px;
        padding: 12px;
        background-color: #3A1;
        color: #FDD;
        border: none;
        border-radius: 7px;
        cursor: pointer;
        font-weight: bold;
      }

      button:hover {
        background-color:#555;
      }

      #result-container {
        background-color: white;
        max-width: 510px;
        margin: 15px auto;
        padding: 60px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px #aaa;
        text-align:right 20px left 40px;
      }

      p {
        color: #555;
      }

      /* Akhiri CSS untuk tampilan yang lebih menarik */
    </style>
  </head>
  <body>
    <h1>Penghitung Keuangan</h1>
    <form id="calculator">
      <label for="income">Pemasukan:</label>
      <input type="text" id="income" placeholder="Pemasukan" oninput="formatUang()" required />
      <br />
      <button type="button" onclick="hitungKeuangan()">Hitung</button>
    </form>
    <div id="result-container">
      <h2>Alokasi Budget:</h2>
      <p id="jajan"></p>
      <p id="makan"></p>
      <p id="transportasi"></p>
      <p id="uang_darurat"></p>
      <p id="kebutuhan_harian"></p>
      <p id="tabungan"></p>
    </div>

    <script>
      function formatUang() {
        var input = document.getElementById("income");
        var value = input.value.replace(/\D/g, ""); // Hapus karakter non-digit
        value = value.replace(/\B(?=(\d{3})+(?!\d))/g, "."); // Tambahkan titik setiap 3 angka

        input.value = value;
      }

      function hitungKeuangan() {
        var pemasukan = parseFloat(document.getElementById("income").value.replace(/\D/g, '')); // Ambil nilai pemasukan setelah menghapus karakter non-digit

        if (isNaN(pemasukan)) {
          alert("Harap isi kolom pemasukan.");
          return;
        }

        var total_keuangan = pemasukan;
        var jajan = total_keuangan * 0.20;
        var makan = total_keuangan * 0.30;
        var transportasi = total_keuangan * 0.10;
        var uang_darurat = total_keuangan * 0.10;
        var kebutuhan_harian = total_keuangan * 0.30;
        var tabungan = total_keuangan * 0.05;

        document.getElementById("jajan").innerHTML = `Jajan : ${jajan.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",")}`;
        document.getElementById("makan").innerHTML = `Makan : ${makan.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",")}`;
        document.getElementById("transportasi").innerHTML = `Transportasi : ${transportasi.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",")}`;
        document.getElementById("uang_darurat").innerHTML = `Uang Darurat : ${uang_darurat.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",")}`;
        document.getElementById("kebutuhan_harian").innerHTML = `Kebutuhan Harian : ${kebutuhan_harian.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",")}`;
        document.getElementById("tabungan").innerHTML = `Tabungan : ${tabungan.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",")}`;
      }
    </script>
  </body>
</html>
