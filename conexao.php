<?php

    const DBDRIVE = "mysql";
    const DBHOST = "localhost";
    const DBNAME = "filmes";
    const DBUSER = "root";
    const DBPASSWORD = "";

    $conexao = new PDO(DBDRIVE.":hostname=".DBHOST.";dbname=".DBNAME,DBUSER,DBPASSWORD);

?>