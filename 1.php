<!-- Soal 1 -->

<html>
<body style="text-align: center;">
	<h2>Fungsi Hitung Gerak 2 Objek</h2>
	<div style="border-top: 1px solid #000; border-bottom: 1px solid #000; padding:10px 0 10px 0;">
    <table style="text-align: left;">
      <tr>
        <td></td>
        <td></td>
        <td style="padding-left: 10px;"><strong>Nana</strong></td>
        <td style="padding-left: 10px;"><strong>Angela</strong></td>
      </tr>
      <tr>
        <td>start</td>
        <td>:</td>
        <td><input type="time" id="t_nana" value="12:00"/></td>
        <td><input type="time" id="t_angela" value="13:00"/></td>
      </tr>
      <tr>
        <td>Kecepatan</td>
        <td>:</td>
        <td><input type="number" id="v_nana" value="7" style="width: 50px; text-align: right;"/> m/s</td>
        <td><input type="number" id="v_angela" value="10" style="width: 50px; text-align: right;"/> m/s</td>
      </tr>
    </table>
    <button onclick="cetak_hasil()">Kapan Nana dan Angela berada di posisi yang sama?</button>
	</div>
	<h4>Nana dan Angela berada di posisi yang sama<br>pada pukul:</h4>
	<input type="time" id="t_meet"/>
	<script>
		function cetak_hasil(){
			var t_nana = document.getElementById('t_nana').value.split(":");
			var t_angela = document.getElementById('t_angela').value.split(":");
			var v_nana = document.getElementById('v_nana').value;
			var v_angela = document.getElementById('v_angela').value;

			t_nana_datef = new Date(0, 0, 0, t_nana[0], t_nana[1], 0);
			t_angela_datef = new Date(0, 0, 0, t_angela[0], t_angela[1], 0);
			var t_diff = (t_nana_datef.getTime() - t_angela_datef.getTime()) / 1000;

			var t_perjalanan = (t_diff * v_angela) / (v_nana - v_angela);
			var hours = Math.floor(t_perjalanan / 60 / 60);
    	t_perjalanan -= hours * 60 * 60;
    	var minutes = Math.floor(t_perjalanan / 60);

    	hours += parseInt(t_nana[0]);
    	minutes += parseInt(t_nana[1]);
    	var t_meet = hours+":"+minutes;

			document.getElementById("t_meet").value = t_meet;
		}
	</script>
</body>
</html>