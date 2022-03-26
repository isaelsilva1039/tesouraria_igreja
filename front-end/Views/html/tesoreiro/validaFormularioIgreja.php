<?php
    include 'CadastroIgreja.php';
    if(!isset($_POST['cadastrar'])){
        header("location: cadastros.php?preenchaFormulario");
    };

    if( isset($_POST['cadastrar'])  ){

    $cadastarIgreja = new CadastroIgreja();
    $cadastarIgreja->cadastarIgrejas($_POST);
   
    }
     

?>