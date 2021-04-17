<!-- Soal 2 -->

<html>
<body style="text-align: center;">
	<h2>Fungsi Urut Kata</h2>
	<p style="border-top: 1px solid #000; border-bottom: 1px solid #000; padding:10px 0 10px 0">
		<label for="i_kata">Masukan kata-kata</label>
		<br>
		<textarea name="i_kata" id="i_kata" rows="4" cols="50"></textarea>
		<br>
		<button onclick="cetak_hasil()">Urutkan</button>
	</p>
	<h4>Hasil Mengurutkan</h4>
	<span id="canvas"></span>
	<script>
		function cetak_hasil(){
			var kata = document.getElementById('i_kata').value;
			var arr_kata = kata.split(" ");
			var arr_num = new Array();
			var kata_terurut = "";
			
			for (var i = 0; i < arr_kata.length; i++) {
				arr_num[i] = parseInt(arr_kata[i].match(/\d/g));
				if (isNaN(arr_num[i])) arr_num[i] = Infinity;
			}

			for (var i = 1; i < arr_kata.length; i++) {
		    for (var j = 0; j < i; j++) {
	        if (arr_num[i] < arr_num[j]) {
	          var x = arr_num[i];
	          var y = arr_kata[i];

	          arr_num[i] = arr_num[j];
	          arr_num[j] = x;

	          arr_kata[i] = arr_kata[j];
	          arr_kata[j] = y;
	        }
	      }
			}

			for (var i = 0; i < arr_kata.length; i++) {
				kata_terurut += arr_kata[i]+" ";
			}
			document.getElementById("canvas").innerHTML = kata_terurut;
		}
	</script>
</body>
</html>