
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>pdf</title>
	<link href="<?php echo base_url('assets/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
  table{
    border-collapse: collapse;
  }
  tr>th{
    background-color: yellow;
  }
  tr>th,tr>td{
    padding: 5px;
  }
</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<table align="center">
				<tbody>
				<tr>
					<td colspan="3">
							<span><b><center><h3>PT. Progressio Nusantara Karya</h3></center></b></span>
						
						<div align="right">
							<span style="font-family: sans-serif; font-size: 14px;text-align: center;">
							<p>Jl. Raya Sunan Gunung Jati No 66 Desa Pasindangan Kecamatan Jamblang Kabupaten Cirebon</p></span>
							<hr>
						</div>
						
					</td>
				</tr>
				<tr>
					<td valign="top">
						<div align="center">
							
						</div>
					</td>
				</tr>
				<tr>
					<td width="302"></td>
					<td width="343"></td>
					<td width="339"></td>
				</tr>
				<tr>
					<td>
						<table border="0" style="width: 239px;">
						<tbody>
						</tbody>
						</table>
					</td>
				</tr>
				
				<tr>
					<td colspan="3" height="270" valign="top">
						<div align="justify">
							<h4 align="center">DATA SUPPLIER</h4>
							<table border="1" width="480" style="text-align: center; margin-top: 30px;">
							<thead>
								<tr>
									<th>no</th>
									<th>Nama supplier</th>
									<th>Alamat supplier</th>
									<th>No Hp</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$no =1;
								foreach ($supplier as $key) { ?>
								<tr>
									<td><?php echo $no++ ?></td>
									<td><?php echo $key->nama_supplier ?></td>
									<td><?php echo $key->alamat_supplier ?></td>
									<td><?php echo $key->telp_supplier ?></td>

								</tr>
							<?php } ?>
							</tbody>
						</table>
							<div align="justify">
								
							</div>
						</div>
						
					</td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td>
						<div align="center">
							
						</div>
						<br><br>
						<div align="center">
							
						</div>
					</td>
					<td></td>
					<td valign="top">
						<div align="center">
							<span style="font-size: 14px;">Cirebon, <?php echo date('d F Y') ?></span>
						</div>
						<br><br>
						<div align="center">
							<span style="font-size: 14px;">(..........................)</span>
						</div>
					</td>
				</tr>
				</tbody>
				</table>
		</div>
	</div>
</body>
</html>