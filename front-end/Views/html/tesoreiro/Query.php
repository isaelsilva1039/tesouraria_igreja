<?php 

    include 'CadastroIgreja.php';

     class Query extends CadastroIgreja{

        public function selecionarIgrejaParaOcasastroDoDizimista(){
           $queryComAsIgrejas = $this->getSelect('igrejas');
           $arrayIgrjas = [];
           foreach ($queryComAsIgrejas as $igreja) {
               $queryComAsIgrejas = $igreja['nome_igreja'];
           }

           return $queryComAsIgrejas;
        }

        public function selecionarDizimista(){
            $queryComOsDizimistas = $this->getSelect('dizimistas');
            $queryComOsDizimistas = [];
            foreach ($queryComOsDizimistas as $dizimista) {
                $queryComdizimista = $dizimista['nome_igreja'];
            }

            return $queryComdizimista;
         }


    }

?>