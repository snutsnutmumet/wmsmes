<SCRIPT LANGUAGE="JavaScript" src="cal2.js">
  </script>
  <script language="javascript">
    addCalendar("Caritanggalawal","Tanggal","tglawal","form1");
    setWidth(90, 1, 15, 1);
    setFormat("dd-mm-yyyy");
  </script>
  <script language="javascript">
    addCalendar("Caritanggalakhir","Tanggal","tglakhir","form1");
    setWidth(90, 1, 15, 1);
    setFormat("dd-mm-yyyy");
  </script>
	
<?
	$tglsekarang=date("Y-m-d");
$today=ymd2dmy($tglsekarang);

	echo "<h2>Periodical Reporting</h2>
				<form name=form1 method=POST action='aksi.php?module=kasirlapcetakk'>
				<table>
				<tr><td>Tanggal Awal </td><td>: <input type=text onKeyDown=\"javascript:return dFilter (event.keyCode, this, '##-##-####');\" name=tglawal value='$today'>"; 
				 ?>
  <a href="javascript:showCal('Caritanggalawal')"><img src="images/calendar.png" border="0"></a>
  <?
	echo "</td></tr>
				<tr><td>Tanggal Akhir </td><td>: <input type=text onKeyDown=\"javascript:return dFilter (event.keyCode, this, '##-##-####');\" name=tglakhir value='$today'>"; 
				 ?>
  <a href="javascript:showCal('Caritanggalakhir')"><img src="images/calendar.png" border="0"></a>
  <?
	echo "</td></tr>
	
				<tr><td>Proses  </td><td>: 
					<select name=outin>
					 <option value='SEMUA'>SEMUA</option>					
					 <option value='import'>import</option>
					 <option value='export'>export</option>
					</select>
				</td></tr>
				<tr><td>Jenis Pembayaran  </td><td>: 
					<select name=cara_bayar>
					 <option value='SEMUA'>SEMUA</option>
					 <option value='CASH'>CASH</option>
					 <option value='PERIODICAL'>CREDIT</option>
					</select>
				</td></tr>		
	      <tr><td>Agent  </td><td>: 
				<select name=agent>
				<option value='SEMUA' selected>SEMUA</option>
				<option value='ACS'>ACS</option>
				<option value='GMFAA'>GMFAA</option>
				<option value='POS'>POS</option>
				<option value='QATAR'>QATAR</option>
				
				<option value='OTHERS'>Others</option>				
</td></tr>				
				<tr><td>Untuk  </td><td>: 
					<select name=untuk>
					 <option value='gp'>Internal GAPURA</option>
					 <option value='ap'>Angkasa Pura</option>
					</select>
				</td></tr>
				<tr><td colspan=2>
				<input type=submit value=\"per Customer\" name=bt_preview> <input type=submit value=\"per Tanggal\" name=bt_preview></td> 								
				</table>
        </form>";

?>