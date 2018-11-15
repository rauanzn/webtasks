<?php
if(isset($_POST['button'])){
    $year = (int)($_POST['years']);
    if(isset($_POST['additional1'])){
    $additional1 = $_POST['additional1'];}
        if(isset($_POST['additional2'])){
    $additional2 = $_POST['additional2'];}
        if(isset($_POST['additional3'])){
    $additional3 = $_POST['additional3'];}
    if(isset($additional1)){
    if($additional1!='yes'){
        $additional1 = 'no';
    }}
    else{
    $additional1 = 'no';
    }
        if(isset($additional2)){
    if($additional2!='yes'){
        $additional2 = 'no';
    }}
    else{
    $additional2 = 'no';
    }
            if(isset($additional3)){
    if($additional3!='yes'){
        $additional3 = 'no';
    }}
    else{
    $additional3='no';
    }
    echo 'You added new item <strong>' . $_POST['makers'] . ' </strong></br>';
    echo 'produced in ' . $year . ' ('.(2018 - $year).' years old) with ' . $_POST['engine'] . ' engine </br>' ;
    echo 'Tax payed : ' . $additional1 . '</br>';
    echo 'Technical check passed : ' . $additional2 . '</br>';
    echo 'Doesnt require investment : ' . $additional3 . '</br>';
    echo '$ '.$_POST['price'];
}
?>
<html>
<head>
</head>
<form action="task102.php" method="post">
    <select name="makers" id="makers">
         <option>Toyota</option>
         <option>Hyundai</option>
         <option>Vaz</option>
    </select>
    <select name="years" id="years">
        <?php
        for($i=2018;$i>1990;$i--){
          echo '<option>' . ($i) . '</option>';
        }
      ?>
    </select>
    <input type="text" name="model">
    <input type="radio" name="engine" value="gas">gas<br>
    <input type="radio" name="engine" value="diesel">diesel<br>
    <input type="radio" name="engine" value="petroleum"> petroleum<br>
    <input type="text" name="price">
    <input type="checkbox" name="additional1" value="yes"> tax payed<br>
    <input type="checkbox" name="additional2" value="yes"> technical check passed<br>
    <input type="checkbox" name="additional3" value="yes">doesn't require investment<br>
    <input type="submit" name="button"/>
</form>