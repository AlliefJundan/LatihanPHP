<?php
$nomor = array(1,2,3,4,5,6,7,8,9,10,);
foreach($nomor as $angka){
    if($angka % 2 == 1 ){
        echo $angka;
        echo "<br>";
    }
    }
    echo "<br>"

?>
<?php
$nomor = array(1,2,3,4,5,6,7,8,9,10,);
foreach($nomor as $angka){
    if($angka % 2 == 0 ){
        echo $angka;
        echo "<br>";
    }
    }
    echo "<br>"

?>

<?php
for ($x=1; $x <= 20; $x++) {
    if ( $x % 2 == 1) {
        echo " " .$x;
        if($x == 1){
            echo "<br>";
            echo "2";
        }
    }
}


?>
