<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <table>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
      </tr>
        <?php
        $konek = mysqli_connect('localhost','root','','merge');
        $sql = "SELECT * FROM tbl_nama";
        $query = $konek -> query($sql);
        while($row = $query->fetch_array()){
          echo '<tr>';
          echo '<td>'.$row[0].'</td>';
          echo '<td>'.$row[1].'</td>';
          echo '<td>'.$row[2].'</td>';
          echo '</tr>';
        }
        ?>
    </table>
  </body>
</html>
