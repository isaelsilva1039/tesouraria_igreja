<?php

include 'LancarOferta.php';

class Despesas extends LancarOferta{



    public function cadastrodeDespesasEmgeralDasIgrejas($param){
        $fk_igreja          = $param['fk_igreja'];
        $mes                = $param['mes'];
        $data               = $param['data'];
        $valor              = $param['valor'];
        $tipoDespesa        = $param['tipoDespesa'];
        $observacoes        = $param['observacoes'];

        for ($i=0; $i < 10 ; $i++) { 
                    if ( $param[ $i ] == null ) {
                        header("location: despesas.php?naoCadastrado=ok");
                    }
            }
        $despesasDaIgrejaEmgeral = "INSERT INTO despesas (fk_igreja,mes,data,valor,tipoDespesa,observacoes) values 
        (:fk_igreja,:mes,:data,:valor,:tipoDespesa,:observacoes)";
        $despesasDaIgrejaEmgeral = $this->db->prepare($despesasDaIgrejaEmgeral);
        $despesasDaIgrejaEmgeral->bindValue(':fk_igreja',$fk_igreja);
        $despesasDaIgrejaEmgeral->bindValue(':mes',$mes);
        $despesasDaIgrejaEmgeral->bindValue(':data',$data);
        $despesasDaIgrejaEmgeral->bindValue(':valor',$valor);
        $despesasDaIgrejaEmgeral->bindValue(':tipoDespesa',$tipoDespesa);
        $despesasDaIgrejaEmgeral->bindValue(':observacoes',$observacoes);

        $despesasDaIgrejaEmgeral->execute();
            if( $despesasDaIgrejaEmgeral->rowCount() > 0 ){
                header("location: despesas.php?sucesso=ok");
            }else{
                header("location: despesas.php?naoCadastrado=ok");
            }
    }

}