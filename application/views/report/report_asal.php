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
    <th width="552" scope="col"><h2><span class="col-md-12 style1">Laporan Calon Mahasiswa Universitas Respati Yogyakarta Berdasarkan
      Sekolah Asal Pada Tahun <?php echo $th; ?>
      </h1>
    </span></h2></th>
  </tr>
</table>
          <table width="515" border="0" align="center">
            <tr>
              <th width="82" bgcolor="#E6E6FA" scope="col">No Pedaftaran </th>
              <th width="67" bgcolor="#E6E6FA" scope="col">Nama  </th>
              <th width="47" bgcolor="#E6E6FA" scope="col">Prodi</th>
			  <th width="67" bgcolor="#E6E6FA" scope="col">Fakultas</th>
			  <th width="81" bgcolor="#E6E6FA" scope="col">Kabupaten</th>
              <th width="69" bgcolor="#E6E6FA" scope="col">Provinsi</th>
              <th width="72" bgcolor="#E6E6FA" scope="col">Sekolah Asal</th>
			  <th width="72" bgcolor="#E6E6FA" scope="col">Pimpinan Sekolah</th>
            </tr>
			<?php foreach($data as $row){ ?>
            <tr>
              <td bgcolor="#E6E6FA"><?php echo $row->id_calon; ?></td>
              <td bgcolor="#E6E6FA"><?php echo $row->nama; ?></td>
			  <td bgcolor="#E6E6FA"><?php echo $row->prodi; ?></td>
              <td bgcolor="#E6E6FA"><?php echo $row->fakultas; ?></td>
			  <td bgcolor="#E6E6FA"><?php echo $row->kota_kab; ?></td>
              <td bgcolor="#E6E6FA"><?php echo $row->provinsi; ?></td>
              <td bgcolor="#E6E6FA"><?php echo $row->sekolah_asal; ?></td>
			  <td bgcolor="#E6E6FA"><?php echo $row->kepala_sekolah; ?></td>
            </tr>
			<?php } ?>
          </table>
</div>
        </div>
      </div>
    </div>
  </body>

</html>