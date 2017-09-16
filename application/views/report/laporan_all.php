<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Laporan</title>
</head>

<body>
<table width="426" border="0" align="center">
  <tr>
    <th width="420" scope="col">LAPORAN CALON MAHASISWA BERDASARKAN PROGRAM STUDI UNIVERSITAS RESPATI YOGYAKARTA TAHUN <?PHP 	echo $th; ?></th>
  </tr>
</table>
<table width="493" border="1" align="center" bordercolor="#333333">
  <tr>
    <th width="241" rowspan="2" bgcolor="#E6E6FA" scope="col"><strong>Program Studi </strong></th>
    <th colspan="2" bgcolor="#E6E6FA" scope="col"><strong>Tahun</strong></th>
    <th width="74" rowspan="2" bgcolor="#E6E6FA" scope="col"><strong>Persentase</strong> % </th>
  </tr>
  <tr>
    <td width="65" bgcolor="#E6E6FA"><strong>Pendaftar</strong></td>
    <td width="69" bgcolor="#E6E6FA"><strong>Registrasi</strong></td>
  </tr>
  <tr>
    <td>D3 FISIOTERAPI</td>
    <td><?php $fisio= $fisio_nr + $fisio_yr; 
		echo $fisio;
	?></td>
    <td><?php echo $fisio_yr; ?></td>
    <td><?php echo round($fisio *100/$total) .' %'; ?></td>
  </tr>
  <tr>
    <td bgcolor="#E6E6FA">S1-KESEHATAN MASYARAKAT</td>
    <td><div align="right">
      <?php $kesmas= $kesmas_nr + $kesmas_yr; 
		echo $kesmas;
	?>
    </div></td>
    <td><div align="right"><?php echo $kesmas_yr; ?></div></td>
    <td><div align="right"><?php echo round($kesmas *100/$total) .' %'; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#E6E6FA">&nbsp;&nbsp;&nbsp;S1-KESMAS(TRANSFER)</td>
    <td><div align="right">
      <?php $kesmas_tran1= $kesmas_tran; 
		echo $kesmas_tran1;
	?>
    </div></td>
    <td><div align="right"><?php echo $kesmas_tran; ?></div></td>
    <td><div align="right"><?php echo round($kesmas_tran * 100 / $total) .' %'; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#E6E6FA">S1- ILMU GIZI</td>
    <td><div align="right">
      <?php $gizi = $gizi_nr + $gizi_yr; 
		echo $gizi;
	?>
    </div></td>
    <td><div align="right"><?php echo $gizi_yr; ?></div></td>
    <td><div align="right"><?php echo round($gizi * 100/$total) .' %'; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#E6E6FA">&nbsp;&nbsp;&nbsp; S1-GIZI (TRANSFER)</td>
    <td><div align="right">
      <?php $gizi_tran1= $gizi_tran; 
		echo $gizi_tran1;
	?>
    </div></td>
    <td><div align="right"><?php echo $gizi_tran; ?></div></td>
    <td><div align="right"><?php echo round($gizi_tran * 100/$total) .' %'; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#E6E6FA">S1-KEPERRAWATAN</td>
    <td><div align="right">
      <?php $perawat= $perawat_nr + $perawat_yr; 
		echo $perawat;
	?>
    </div></td>
    <td><div align="right"><?php echo $perawat_yr; ?></div></td>
    <td><div align="right"><?php echo round($perawat * 100 / $total) .' %'; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#E6E6FA">PROGRAM PROFESI NERS</td>
    <td><div align="right">
      <?php $ners = $ners_nr + $ners_yr; 
		echo $ners;
	?>
    </div></td>
    <td><div align="right"><?php echo $ners_yr; ?></div></td>
    <td><div align="right"><?php echo round($ners *100/$total) .' %'; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#E6E6FA">D-IV BIDAN PENDIDIK</td>
    <td><div align="right">
      <?php $bd4 = $bd4_nr + $bd4_yr; 
		echo $bd4;
	?>
    </div></td>
    <td><div align="right"><?php echo $bd4_tran; ?></div></td>
    <td><div align="right"><?php echo round($bd4_nr *100/$total) .' %'; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#E6E6FA">D-IV BIDAN PENDIDIK(TRANFERS)</td>
    <td><div align="right">
      <?php $bd4_tran1 = $bd4_tran; 
		echo $bd4_tran1;
	?>
    </div></td>
    <td><div align="right"><?php echo $bd4_tran; ?></div></td>
    <td><div align="right"><?php echo round($bd4_tran * 100/$total) .' %'; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#E6E6FA">D-III KEBIDANAN</td>
    <td><div align="right">
      <?php $bd3 = $bd3_nr + $bd3_yr; 
		echo $bd3;
	?>
    </div></td>
    <td><div align="right"><?php echo $bd3_yr; ?></div></td>
    <td><div align="right"><?php echo round($bd3 * 100 /$total) .' %'; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#E6E6FA">TOTAL FIKES</td>
    <td bgcolor="#E6E6FA"><div align="right">
      <?php $fikes_pend = $bd3 + $bd4_tran1 +  $bd4 + $ners + $perawat + $gizi_tran1 + $gizi + $kesmas_tran1 + $kesmas;
		echo $fikes_pend;
	?>    
    </div></td>
    <td bgcolor="#E6E6FA"><div align="right">
      <?php $fikes2 = $bd3_yr + $bd4_tran + $bd4_tran + $ners_yr + $perawat_yr + $gizi_tran + $gizi_yr + $kesmas_tran + $kesmas_yr; echo $fikes2; ?>
    </div></td>
    <td bgcolor="#E6E6FA"><div align="right"><?php echo $fikes_pend * 100 / $total .' %'; ?></div></td>
  </tr>
  <tr>
    <td bordercolor="#000000" bgcolor="#E6E6FA">S-1 T.ELEKTRO</td>
    <td><div align="right">
      <?php $te= $te_yr + $te_nr; 
				echo $te?>
    </div></td>
    <td><div align="right"><?php echo $te_yr; ?></div></td>
    <td><div align="right"><?php echo round($te * 100 /$total) .' %'; ?></div></td>
  </tr>
  <tr>
    <td bordercolor="#000000" bgcolor="#E6E6FA">S-1 T.INFORMATIKA</td>
    <td><div align="right">
      <?php $ti= $ti_nr + $ti_yr; 
		echo $ti;
	?>
    </div></td>
    <td><div align="right"><?php echo $ti_yr; ?></div></td>
    <td><div align="right"><?php echo round($ti*100/$total ).' %'; ?></div></td>
  </tr>
  <tr>
    <td bordercolor="#000000" bgcolor="#E6E6FA">S-1 SISTEM INFORMASI</td>
    <td><div align="right">
      <?php $si= $si_yr + $si_nr;
			echo $si;
	 ?>
    </div></td>
    <td><div align="right"><?php echo $si_yr; ?></div></td>
    <td><div align="right"><?php echo round($si*100/$total) .' %'; ?></div></td>
  </tr>
  <tr>
    <td bordercolor="#000000" bgcolor="#E6E6FA">D-III MANAJEMEN INFORMATIKA</td>
    <td><div align="right">
      <?php $mi =$mi_yr + $mi_nr; 
				echo $mi;
	?>
    </div></td>
    <td><div align="right"><?php echo $mi_yr; ?></div></td>
    <td><div align="right"><?php echo round($mi*100/$total) .' %'; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#E6E6FA">TOTAL FST</td>
    <td bgcolor="#E6E6FA"><div align="right">
      <?php $fst = $ti + $te + $si + $mi; echo $fst;?>
    </div></td>
    <td bgcolor="#E6E6FA"><div align="right">
      <?php $fst2 = $si_yr + $ti_yr + $mi_yr + $te_yr; echo $fst2; ?>
    </div></td>
    <td bgcolor="#E6E6FA"><div align="right"><?php echo $fst * 100 / $total .' %';?> </div></td>
  </tr>
  <tr>
    <td bgcolor="#E6E6FA">S-1 AKUNTANSI</td>
    <td><div align="right">
      <?php $akutansi= $akuntansi_nr + $akuntansi_yr; 
			echo $akutansi;
	?>
    </div></td>
    <td><div align="right"><?php echo $akuntansi_yr; ?></div></td>
    <td><div align="right"><?php echo round($akutansi*100/$total) .' %'; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#E6E6FA">S-1 HUB.INTERNASIONAL</td>
    <td><div align="right">
      <?php $hi = $hi_yr+$hi_nr;
			echo $hi;
	 ?>
    </div></td>
    <td><div align="right"><?php echo $hi_yr; ?></div></td>
    <td><div align="right"><?php echo round($hi * 100/$total) .' %'; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#E6E6FA">S-1 KOMUNIKASI</td>
    <td><div align="right">
      <?php $ilkom = $ilkom_nr + $ilkom_nr;
			echo $ilkom;
	 ?>
    </div></td>
    <td><div align="right"><?php echo $ilkom_yr; ?></div></td>
    <td><div align="right"><?php echo round($ilkom * 100 / $total) .' %'; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#E6E6FA">S-1 SASTRA INGGRIS</td>
    <td><div align="right">
      <?php $sig = $sig_yr + $sig_nr;
		echo $sig;
	 ?>
    </div></td>
    <td><div align="right"><?php echo $sig_yr; ?></div></td>
    <td><div align="right"><?php echo round($sig * 100 / $total) .' %'; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#E6E6FA">TOTAL FISE</td>
    <td bgcolor="#E6E6FA"><div align="right">
      <?php $fise = $akutansi + $hi + $ilkom + $sig; echo $fise;?>    
    </div></td>
    <td bgcolor="#E6E6FA"><div align="right">
      <?php  $fise2 =$ilkom_yr + $akuntansi_yr + $hi_yr + $sig_yr; echo $fise2; ?>    
    </div></td>
    <td bgcolor="#E6E6FA"><div align="right"><?php echo $fise * 100 /$total .' %'; ?></div></td>
  </tr>
  <tr>
    <td bgcolor="#E6E6FA">TOTAL</td>
    <td bgcolor="#E6E6FA"><div align="right"><?php echo $fise + $fst + $fikes_pend; ?></div></td>
    <td bgcolor="#E6E6FA"><div align="right"><?php echo $fise2 + $fikes2 + $fst2; ?></div></td>
    <td bgcolor="#E6E6FA"><div align="right">100 %</div></td>
  </tr>
  
</table>

<table width="799" border="0">
  <tr>
    <td width="521"></td>
    <td width="268"><div align="center">
      <p align="center"><strong>Yogyakarta, 08 Agustus 2017 </strong></p>
      <p align="center"><strong>Kepala Biro Humas dan Promosi </strong></p>
      <p>&nbsp;</p>
      <h3 align="center"><u>Farida Nur Aini,ST.,MT</u> </h3>
            <p align="center">NIK: 460004005 </p>
      <p></p>
    </td>
  </tr>
</table>

</body>
</html>
