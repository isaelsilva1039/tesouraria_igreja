<?php 

    include 'CadastroIgreja.php';

    class Castastrodizimistas extends CadastroIgreja{

        public function cadastrarDizimistas( $param ){
            $nome_dizimista    = $param['nome_dizimista'];
            $email_dizimista   = $param['email_dizimista'];
            $cidade            = $param['cidade'];
            $barrio            = $param['barrio'];
            $endereco          = $param['endereco'];
            $telefone          = $param['telefone'];
            $cargo             = $param['cargo'];
            $fk_igreja         = $param['fk_igreja'];

                for ($i=0; $i < 10 ; $i++) { 
                        if ( $param[ $i ] == null ) {
                            header("location: cadastros.php?naoCadastrado=ok");
                        }
                }
            $cadastramentoDosDizimistasIgrejas = "INSERT INTO dizimistas (nome_dizimista,email_dizimista,cidade,barrio,endereco,telefone,cargo,fk_igreja) 
            values (:nome_dizimista,:email_dizimista,:cidade,:barrio,:endereco,:telefone,:cargo,:fk_igreja)";
            $cadastramentoDosDizimistasIgrejas = $this->db->prepare($cadastramentoDosDizimistasIgrejas);
            $cadastramentoDosDizimistasIgrejas->bindValue(':nome_dizimista',$nome_dizimista);
            $cadastramentoDosDizimistasIgrejas->bindValue(':email_dizimista',$email_dizimista);
            $cadastramentoDosDizimistasIgrejas->bindValue(':cidade',$cidade);
            $cadastramentoDosDizimistasIgrejas->bindValue(':barrio',$barrio);
            $cadastramentoDosDizimistasIgrejas->bindValue(':endereco',$endereco);
            $cadastramentoDosDizimistasIgrejas->bindValue(':telefone',$telefone);
            $cadastramentoDosDizimistasIgrejas->bindValue(':cargo',$cargo);
            $cadastramentoDosDizimistasIgrejas->bindValue(':fk_igreja',$fk_igreja);
            $cadastramentoDosDizimistasIgrejas->execute();
                if( $cadastramentoDosDizimistasIgrejas->rowCount() > 0 ){
                    header("location: cadastrosDizimistas.php?sucesso=ok");
                }else{
                    header("location: cadastrosDizimistas.php?naoCadastrado=ok");
                }
        }
        
    }

?>