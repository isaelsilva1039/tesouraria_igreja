<?php
    include ('LancarOferta.php');
        if(!isset($_POST['cadastrar'])){
        header("location: lancarofertas.php?preenchaFormulario");
    };

    if ( isset($_POST['cadastrar']) ) {
        $cadastrosDasOfertasDosCultosEtrabalhosDaigreja = new LancarOferta();
        $cadastrosDasOfertasDosCultosEtrabalhosDaigreja->cadastrosDasOfertasDosCultosEtrabalhosDaigreja($_POST);
    }
    

?>