<?php
    include '../../../../Conexao/Conexao.php';
    
    class CadastroIgreja extends Conexao{
            
        public function cadastarIgrejas( $param ){
            $dirigente   = $param['dirigente'];
            $nome_igreja = $param['nome_igreja'];
            $cidade      = $param['cidade'];
            $barrio      = $param['barrio'];
            $endereco    = $param['endereco'];
                for ($i=0; $i < 10 ; $i++) { 
                        if ( $param[ $i ] == null ) {
                            header("location: cadastros.php?naoCadastrado=ok");
                        }
                }
            $cadastramentoIgrejas = "INSERT INTO igrejas (dirigente,nome_igreja,cidade,barrio,endereco) values (:dirigente,:nome_igreja,:cidade,:barrio,:endereco)";
            $cadastramentoIgrejas = $this->db->prepare($cadastramentoIgrejas);
            $cadastramentoIgrejas->bindValue(':dirigente',$dirigente);
            $cadastramentoIgrejas->bindValue(':nome_igreja',$nome_igreja);
            $cadastramentoIgrejas->bindValue(':cidade',$cidade);
            $cadastramentoIgrejas->bindValue(':barrio',$barrio);
            $cadastramentoIgrejas->bindValue(':endereco',$endereco);
            $cadastramentoIgrejas->execute();
                if( $cadastramentoIgrejas->rowCount() > 0 ){
                    header("location: cadastros.php?sucesso=ok");
                }else{
                    header("location: cadastros.php?naoCadastrado=ok");
                }
        }

        private function idConta(){
            $cadastramentoIgrejas = "SELECT id FROM igrejas order by id desc limit 1 ";
            $cadastramentoIgrejas = $this->db->prepare($cadastramentoIgrejas);
            $cadastramentoIgrejas->execute();
             $contId = $cadastramentoIgrejas->fetch()[0];
             return $contId+1;
        }

        private  function setSelect($tabela){
            $selecionarIgrejasLocais = " SELECT * FROM $tabela";
            $selecionarIgrejasLocais = $this->db->prepare($selecionarIgrejasLocais);
            $selecionarIgrejasLocais->execute();
            return $selecionarIgrejasLocais->fetchAll();
        }

        public function getSelect($tabela){
           return $this->setSelect($tabela);
        }


    }   
?>