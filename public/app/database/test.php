<?php
 $db_host   = 'localhost';
 $db_user   = 'escuelac_webuser2019';
 $db_pass   = 'appcumbre+*-2019';
 $db_name   = 'escuelac_web2019';

try {
    $mbd = new PDO('mysql:host=localhost;port=3306;dbname=escuelac_web2019', $db_user, $db_pass);
    foreach($mbd->query('SELECT * from user where email="armandoaepp@gmail.com" and password=md5("armando") ') as $fila) {
        print_r($fila);
    }
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
 