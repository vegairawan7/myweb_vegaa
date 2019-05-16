<?php
include('konek.php'); 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Tabel Mahasiswa</title>
</head>

<body>
<?php
$sql	= 'select * from nilai';
$query	= mysqli_query($db_link,$sql);
?>
<h2><strong><p align="center">Data Mahasiswa kampus ABC</p></strong></h2>
<table width="807" border="1" cellpadding="0" cellspacing="0" align="center">
  <!--DWLayoutTable-->
  <tr>
    <td width="112" height="29" align="center" valign="middle" >NIM</td>
    <td width="176" align="center" valign="middle" >Nama</td>
    <td width="270" align="center" valign="middle" >Email</td>
    <td width="180" align="center" valign="middle" >Jurusan</td>
    <td width="133" align="center" valign="middle" ><a href="tambah.php">TAMBAH</a></td></tr>
<?php
	while($data	= mysqli_fetch_array($query)){ 
?>
  <tr>
    <td p align="center" ><?php echo $data['nim']; ?></td>
    <td p align="center" ><?php echo $data['nama']; ?></td>
    <td p align="center" ><?php echo $data['email']; ?></td>
    <td p align="center" ><?php echo $data['jurusan']; ?></td>
    <td p align="center" >
	 <a href="edit.php?ni=<?php echo $data['nim'];?>" title="Edit data mahasiswa"> || edit || </a>
	<a href="delete.php?ni=<?php echo $data['nim'];?>" onclick="return confirm('Data akan dihapus??');">|| hapus ||</a>
	</td>
  </tr>
<?php
}
?>
</table>
</body>
</html>