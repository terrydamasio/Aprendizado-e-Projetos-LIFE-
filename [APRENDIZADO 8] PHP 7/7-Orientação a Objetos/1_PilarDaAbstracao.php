<?php 
    //Pilar da Abstração: Entidade; Identidade; Características; Ações

    //modelo (Identidade) 
    class Funcionario {
        
        //atributos (caracteristicas)
        public $nome = 'Pedro';
        public $telefone = '11 23123-1232';
        public $numFilhos = 2;

        //metodos
        function resumirCadFunc() {
            //usar $this-><atributo> para acessar um atributo
            return "$this->nome possui $this->numFilhos filhos";
        }
        
        function modificarNumFilhos($numFilhos) {
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }
    }

    $y = new Funcionario();

    //para acessar atributos ou metodos pode-se usar ->
    echo $y->resumirCadFunc();

    echo '<br>';

    $y->modificarNumFilhos(3);
    echo $y->resumirCadFunc();
    echo '<br>';

    $x = new Funcionario();
    echo $x->resumirCadFunc();
    echo '<br>';
    $x->modificarNumFilhos(1);
    echo $x->resumirCadFunc();

    $z = new Funcionario();
    echo '<br>';
    $z->modificarNumFilhos(5);
    echo $z->resumirCadFunc();

?>