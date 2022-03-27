<?php 

    include ('Despesas.php');
        if(!isset($_POST['cadastrar'])){
        header("location: despesas.php?preenchaFormulario");
    };

    if ( isset($_POST['cadastrar']) ) {
        $cadastrodeDespesasEmgeralDasIgrejas = new Despesas();
        $cadastrodeDespesasEmgeralDasIgrejas->cadastrodeDespesasEmgeralDasIgrejas($_POST);
    }
    

?>