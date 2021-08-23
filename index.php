<?
$cli = mysqli_connect('localhost','root','','users');



if($_GET['name']){
    $name = $_GET['name'];
    $result = mysqli_query($cli,"select * from `table1` where `name` = '$name'");

    while ($row = mysqli_fetch_assoc($result)){
        $us['name'] = $row['name'];
        $us['surname'] = $row['surname'];
    }
    echo 'Adi: ' . $us['name'] . '<br>Soyadi: ' . $us['surname'];


}

?>