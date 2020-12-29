
<?php
require_once 'db_connection.php';

if($_POST) {
    $lat1 = $_POST['start_latitude'];
    $lat2 = $_POST['end_latitude'];
    $lon1 = $_POST['start_longitude'];
    $lon2=$_POST['end_longitude'];
    

        $pi80 = M_PI / 180;
        $lat1 *= $pi80;
        $lon1 *= $pi80;
        $lat2 *= $pi80;
        $lon2 *= $pi80;
        $r = 6372.797;
        // mean radius of Earth in km
        $dlat = $lat2 - $lat1;
        $dlon = $lon2 - $lon1;
        $a = sin( $dlat / 2 ) * sin( $dlat / 2 ) + cos( $lat1 ) * cos( $lat2 ) * sin( $dlon / 2 ) * sin( $dlon / 2 );
        $c = 2 * atan2( sqrt( $a ), sqrt( 1 - $a ) );
        $km = $r * $c;
        echo $km;
        $connect->close();
}