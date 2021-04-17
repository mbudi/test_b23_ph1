<!-- Soal 3 -->
<html>
  <body style="text-align: center;">
    <h2>Fungsi Cetak Gambar</h2>
    <p style="border-top: 1px solid #000; border-bottom: 1px solid #000; padding:10px 0 10px 0">
      <label for="i_panjang">Masukan panjang sisi</label>
      <input type="number" name="i_panjang" id="i_panjang" value="5"/><button onclick="cetak_gambar()">Cetak</button>
    </p>
    <h4>Hasil Cetak</h4>
    <p id="canvas"></p>
    <script>
      function cetak_gambar(){
        var panjang = parseInt(document.getElementById('i_panjang').value);
        var gambar = "";
        if (panjang % 2 == 1) {
          for (var i = 1; i <= panjang; i++){
            for (var j = 1; j <= panjang; j++){
              if(i % 2 == 0 && j != 1 && j != panjang){
                gambar += "=&nbsp;&nbsp;&nbsp;";
              } else {
                gambar += "*";
                if (j != panjang) gambar += "&nbsp;&nbsp;&nbsp;";
              }
            }
            if (i != panjang) gambar += "<br>";
          }
          
        } else {
          alert("panjang sisi ="+panjang+", adalah genap.\nMasukan angka ganjil!");
        }
        document.getElementById("canvas").innerHTML = gambar;
      }
    </script>
  </body>
</html>
