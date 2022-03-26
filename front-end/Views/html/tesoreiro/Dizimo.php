<?php
include 'CadastroIgreja.php';

class Dizimo extends CadastroIgreja
{
    public function cadastarDizimo($param){
        $fk_igreja    = $param['fk_igreja'];
        $fk_dizimista = $param['fk_dizimista'];
        $mes          = $param['mes'];
        $data_pagamento         = $param['data'];
        $valor        = $param['valor'];
            for ($i=0; $i < 10 ; $i++) { 
                    if ( $param[ $i ] == null ) {
                        header("location: cadastros.php?naoCadastrado=ok");
                    }
            }
        $cadastramentoDizimo = "INSERT INTO dizimimos (fk_igreja,fk_dizimista,mes,data_pagamento,valor) values (:fk_igreja,:fk_dizimista,:mes,:data_pagamento,:valor)";
        $cadastramentoDizimo = $this->db->prepare($cadastramentoDizimo);
        $cadastramentoDizimo->bindValue(':fk_igreja',$fk_igreja);
        $cadastramentoDizimo->bindValue(':fk_dizimista',$fk_dizimista);
        $cadastramentoDizimo->bindValue(':mes',$mes);
        $cadastramentoDizimo->bindValue(':data_pagamento',$data_pagamento);
        $cadastramentoDizimo->bindValue(':valor',$valor);
        $cadastramentoDizimo->execute();
            if( $cadastramentoDizimo->rowCount() > 0 ){
                header("location: financeiro.php?sucesso=ok");
            }else{
                header("location: financeiro.php?naoCadastrado=ok");
            }
    }


}
