<?php
if (@$_POST['bilangan_pertama'] != "" && @$_POST['bilangan_pemangkat'] != ""){
    $hasilpangkat = $_POST['bilangan_pertama'] ** $_POST ['bilangan_pemangkat'];
    
}else{
    echo"<p style='text-align : center; color: red; margin: 10px 0;'>Data harus diisi lengkap!!</p>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" style="display : flex; justify-content: center" method="POST">

   <center> 
    <table border="1">
        <tr>
            <td> <label for="bilangan"> Bilangan pertama :</label>
            <td> <input type="number" name="bilangan_pertama" id="bilangan">

            </td>
            </td>
        </tr>
        <tr>
            <td><label>Bilangan pemangkat :</label>
            <td><input type="number" name="bilangan_pemangkat">

            </td>
            </td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit">Hitung</td>
        </tr>
    </table>
    </center>
 </form>

 <?php
 
 echo "<center> hasil pangkat <b> " . $_POST ['bilangan_pertama'] . " pangkat " . $_POST ['bilangan_pemangkat'] . " = " . $hasilpangkat . "</b> </center>";
 ?>
 
</body>
</html>