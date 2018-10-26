<!DOCTYPE html>
<html>
<head>
	<title>Cetak</title>
	<style type="text/css">
		.container{
			margin: 0 auto;
			width: 800px;
		}
		.txt-center{ text-align: center; }
		table{
			width: 800px;
		}
	</style>
</head>

<body>
<div class="container">
	<table border="0">
		<tr>
			<td width="20%"><img src="<?php echo base_url() ?>assets/img/logo_print.jpeg"></td>
			<td class="txt-center" colspan="2">
				<h2>SMK AL CHASANAH</h2>
				<p>JL Jakarta barat</p>
			</td>

		</tr>
		<tr>
			<td colspan="3"><hr></td>
			
		</tr>
		<tr>
			<td colspan="3" class="txt-center">Bismillah</td>
		</tr>
		<tr>
			<td>Nomor</td>
			<td>: <?php echo $record['no_surat_keluar'];?></td>
			<td></td>
		</tr>
		<tr>
			<td>Lampiran</td>
			<td>: -</td>
			<td></td>
		</tr>
		<tr>
			<td>Hal</td>
			<td>: <?php echo $record['perihal'];?></td>
			<td></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2"></td>
			<td>Kepada Yth:</td>
		</tr>
		<tr>
			<td colspan="2"></td>
			<td><?php echo $record['tujuan'];?></td>
		</tr>
		<tr>
			<td colspan="2"></td>
			<td>Di tempat</td>
		</tr>
		<tr >
			<td colspan="3" style="padding: 10px">
				<p><?php echo $record['isi_surat'];?></p>
			</td>
		</tr>
			<tr>
				<td colspan="3">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
				<td>Jakarta, <?php echo tgl_indo($record['tgl_surat_keluar']);?></td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
				<td>KA SMK xxx</td>
			</tr>
			<tr>
				<td colspan="3">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="3">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="3">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
				<td>Nama Kepsek</td>
			</tr>
		</tr>
	</table>
</div>
<script>
		window.print();
	</script>
</body>
</html>