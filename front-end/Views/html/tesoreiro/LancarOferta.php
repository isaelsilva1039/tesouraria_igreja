<?php 

    include 'CadastroIgreja.php';
    class LancarOferta extends CadastroIgreja{

        public function cadastrosDasOfertasDosCultosEtrabalhosDaigreja($param){
            $fk_igreja          = $param['fk_igreja'];
            $fk_dizimista       = $param['fk_dizimista'];
            $mes                = $param['mes'];
            $data_pagamento     = $param['data'];
            $valor              = $param['valor'];
            $tipoCulto          = $param['tipoCulto'];
            $observacoes        = $param['observacoes'];
            
          
                
            for ($i=0; $i < 10 ; $i++) { 
                        if ( $param[ $i ] == null ) {
                            header("location: lancarofertas.php?naoCadastrado=ok");
                        }
                }
            $lancarOfertasDosCultos = "INSERT INTO ofertas (fk_igreja,fk_dizimista,mes,data,valor,tipoCulto,observacoes) values 
            (:fk_igreja,:fk_dizimista,:mes,:data,:valor,:tipoCulto,:observacoes)";
            $lancarOfertasDosCultos = $this->db->prepare($lancarOfertasDosCultos);
            $lancarOfertasDosCultos->bindValue(':fk_igreja',$fk_igreja);
            $lancarOfertasDosCultos->bindValue(':fk_dizimista',$fk_dizimista);
            $lancarOfertasDosCultos->bindValue(':mes',$mes);
            $lancarOfertasDosCultos->bindValue(':data',$data_pagamento);
            $lancarOfertasDosCultos->bindValue(':valor',$valor);
            $lancarOfertasDosCultos->bindValue(':tipoCulto',$tipoCulto);
            $lancarOfertasDosCultos->bindValue(':observacoes',$observacoes);

            $lancarOfertasDosCultos->execute();
                if( $lancarOfertasDosCultos->rowCount() > 0 ){
                    header("location: lancarofertas.php?sucesso=ok");
                }else{
                    header("location: lancarofertas.php?naoCadastrado=ok");
                }
        }
  
  
    }
?>