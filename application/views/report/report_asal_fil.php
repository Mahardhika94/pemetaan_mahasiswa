<html>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>
  <style>
  <?php echo $css; ?>
  
  </style>
  <body>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
		  <table width="520" border="0" align="center">
  <tr>
    <th width="552" scope="col"><h2><span class="col-md-12 style1">
	<?php echo $ket; ?>
      </h1>
    </span></h2></th>
  </tr>
</table>
          <table width="515" border="0" align="center">
            <tr>
              <th width="82" bgcolor="#009999" scope="col">No Pedaftaran </th>
              <th width="67" bgcolor="#009999" scope="col">Nama  </th>
              <th width="67" bgcolor="#009999" scope="col">Fakultas</th>
              <th width="47" bgcolor="#009999" scope="col">Prodi</th>
              <th width="69" bgcolor="#009999" scope="col">Provinsi</th>
              <th width="81" bgcolor="#009999" scope="col">Kabupaten</th>
              <th width="72" bgcolor="#009999" scope="col">Sekolah Asal</th>
            </tr>
			<?php foreach($data as $row){ ?>
            <tr>
              <td bgcolor="#99FF33"><?php echo $row->id_calon; ?></td>
              <td bgcolor="#99FF33"><?php echo $row->nama; ?></td>
              <td bgcolor="#99FF33"><?php echo $row->fakultas; ?></td>
              <td bgcolor="#99FF33"><?php echo $row->prodi; ?></td>
              <td bgcolor="#99FF33"><?php echo $row->provinsi; ?></td>
              <td bgcolor="#99FF33"><?php echo $row->kota_kab; ?></td>
              <td bgcolor="#99FF33"><?php echo $row->sekolah_asal; ?></td>
            </tr>
			<?php } ?>
          </table>
</div>
        </div>
      </div>
    </div>
  </body>

</html>