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
    <th>Program Studi</th>
    <td>" . $_POST["PS"]."</td>
  </tr>
</table>
</body>
</html>";
?>