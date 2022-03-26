<?php
    include ('Dizimo.php');
        if(!isset($_POST['cadastrar'])){
        header("location: financeiro.php?preenchaFormulario");
    };

    if ( isset($_POST['cadastrar']) ) {
        $dizimo = new Dizimo();
        $dizimo->cadastarDizimo($_POST);
    }
    

?>