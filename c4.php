<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit User</title>
  </head>
  <body>
    <h2>Edit User</h2>
    <form autocomplete="off" action="" method="post">
      <?php
      include 'connect.php';
      $MaDDL = $_GET["MaDDL"];
      $rows = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM `diemdl` WHERE MaDDL = $MaDDL"));
      ?>
      <input type="hidden" id="id" value="<?php echo $rows['id']; ?>">
      <label for="">Name</label>
      <input type="text" id="name" value="<?php echo $rows['name']; ?>"> <br>
      <label for="">Email</label>
      <input type="text" id="email" value="<?php echo $rows['email']; ?>"> <br>
      <label for="">Gender</label>
      <select class="" id="gender">
        <option value="Male" <?php if($rows["gender"] == "Male") echo "selected"; ?> >Male</option>
        <option value="Female" <?php if($rows["gender"] == "Female") echo "selected"; ?> >Female</option>
      </select> <br>
      <button type="button" onclick="submitData('edit');">Edit</button>
    </form>
    <form autocomplete="off" action="" method="post">
            <div>
                <label>Họ tên khách hàng</label>
                <div>
                    <select name="MaTTP" id="tenttp">
                    <?php
                        $sql = "SELECT * FROM `tinhtp`";
                        $result = mysqli_query($connect,$sql); 
                        if($result){
                            while($row = mysqli_fetch_array($result))
                            {
                                $TenTTP = $row['TenTTP'];
                                $MaTTP= $row['MaTTP'];  
                                echo '
                                    <option id ="MaTTP" value="'.$MaTTP.'">'.$TenTTP.'</option>';
                            }
                        }
                    ?>
                    </select>
                </div>
            </div>
            <label for="MaDDL">Ma diem du lich</label>
            <input type="text" id="MaDDL" name="MaDDL" >
            <br>
            <label for="TenDDL">Ten diem du lich</label>s
            <input type="text" id="TenDDL" name="TenDDL" >
            <br>
            <label for="Dactrung">Dac Trung</label>
            <input type="text" id="Dactrung" name="Dactrung" >
            <br>
            <button type="submit"  name="submit" >Thêm</button>
        </form>
    <br>
    <a href="index.php">Go To Index</a>
    <?php require 'script.php'; ?>
  </body>
</html>
