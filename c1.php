<?php
    include 'connect.php';
    if (isset($_POST['submit'])){
        $MaTour = $_POST['MaTour'];
        $TenTour= $_POST['TenTour'];
        $NgayKhoiHanh  = date("Y-m-d");
       
        $SoNgay = $_POST['SoNgay'];
        $SoDem = $_POST['SoDem'];
        $Gia = $_POST['Gia'];
        $sql = "INSERT INTO `tour` (MaTour, TenTour, NgayKhoiHanh, SoNgay, SoDem, Gia) 
        values('$MaTour','$TenTour','$NgayKhoiHanh','$SoNgay','$SoDem','$Gia')";
        $result = mysqli_query($connect,$sql);
        if($result){
            echo "data inserted successfully";
        }
        else{
            echo "data inserted unsuccessfully";
        }
        $result->close();    
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm Tour Du Lịch</title>
</head>
<body>       
        <form method="post">
            <h2>Thêm Tour Du Lịch</h2>
            <label for="MaTour">Ma tour</label>
            <input type="text" name="MaTour" placeholder="">
            <br>
            <label for="TenTour">Ten tour</label>
            <input type="text" name="TenTour" >
            <br>
            <label for="">Ngay khoi hanh</label>
            <input id="NgayKhoiHanh" id="tenkh" type="date" name="NgayKhoiHanh"><br>
            
            <label for="SoNgay">So ngay</label>
            <input type="text" name="SoNgay" >
            <br>
            <label for="SoDem">So dem</label>
            <input type="text" name="SoDem" >
            <br>
            <label for="Gia">Gia</label>
            <input type="text" name="Gia" >
            <br>
            <button type="submit"  name="submit" >Thêm</button>
        </form>
</body>
</html>
<?php 
   


?>