<?php
echo "<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}
</style>
</head>
<body>
<h2>Hasil Output</h2>
<table>
  <tr>
    <th>NIM</th>
    <td>" . $_POST["nim"]."</td>
  </tr>
  <tr>
    <th>Nama</th>
    <td>" . $_POST["nama"]."</td>
  </tr>
  <tr>
    <th>Jenis Kelamin</th>
    <td>" . $_POST["gender"]."</td>
  </tr>
  <tr>
    <th>Alamat</th>
    <td>" . $_POST["alamat"]."</td>
  </tr>
  <tr>
    <th>Program Studi</th>
    <td>" . $_POST["prodi"]."</td>
  </tr>
  <tr>
    <th>Bahasa Pemrograman yang dikuasai</th>
    <td>" . $_POST["prodikuasai"]."</td>
  </tr>
</table>
</body>
</html>";
?>