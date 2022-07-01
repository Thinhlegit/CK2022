<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
  </head>
  <body>
    <h2>Index</h2>
    <table >
      <tr>
        <td>STT</td>
        <td>Ma diem du lich</td>
        <td>Ten diem du lich</td>
        <td>Ten thanh pho</td>
        <td>Dac trung</td>
        <td>Chuc nang</td>
      </tr>
      <?php
      include 'connect.php';    
      $rows = mysqli_query($connect, "SELECT * FROM `diemdl`");
      $i = 1;
      ?>
      <?php foreach($rows as $row) : ?>
      <tr MaDDL = <?php echo $row['MaDDL']; ?>>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row["MaDDL"]; ?></td>
        <td><?php echo $row["TenDDL"]; ?></td>
        <td><?php echo $row["MaTTP"]; ?></td>
        <td><?php echo $row["Dactrung"]; ?></td>
        <td>
        
        <button><a href="c4.php?MaDDL=<?php echo $row['MaDDL']; ?>">View</a></button>
        <button type="button" onclick = "deletedata(<?php echo $row['MaDDL']; ?>);">Delete</button>
        </td>
      </tr>
      <?php endforeach; ?>
      <?php require 'script.php'; ?>
    </table>
  </body>
</html>
