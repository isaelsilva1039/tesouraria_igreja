<?php
    include ('Cadastrodizimistas.php');
        if(!isset($_POST['cadastrar'])){
        header("location: cadastrosDizimistas.php?preenchaFormulario");
    };

    if ( isset($_POST['cadastrar']) ) {
        $cadastarDizimistas = new Castastrodizimistas();
        $cadastarDizimistas->cadastrarDizimistas($_POST);
    }
    

?>