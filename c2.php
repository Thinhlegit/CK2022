<?php
    include 'connect.php';
    if (isset($_POST['submit'])){
        $MaDDL = $_POST['MaDDL'];
        $TenDDL= $_POST['TenDDL'];
        $MaTTP = $_POST['MaTTP'];
        $Dactrung = $_POST['Dactrung'];

        $sql = "INSERT INTO `diemdl` (MaDDL, TenDDL, MaTTP, Dactrung) 
        values('$MaDDL','$TenDDL','$MaTTP','$Dactrung')";
        $result = mysqli_query($connect,$sql);
        if($result){
            echo "data inserted successfully";
            // header("location:display.php");
        }
        else{
            echo "data inserted unsuccessfully";
        }
        // $result->close();    
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Customer</title>
</head>
<body >   
        <form method="post">
            <div>
                <label>Tanh Pho</label>
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

</body>
</html>
<?php 
   


?>