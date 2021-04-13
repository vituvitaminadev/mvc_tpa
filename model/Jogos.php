<?php
class Jogos{


    private $id;
    private $nome;
    private $estilo;
    private $preco;

    private $con;

    public function __construct(){
        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);        
    }

    public function all(){
        // O MÉTOD PREPARE DA CLASS PDO ACEITA INSTRUÇÕES SQL
        $sql = $this->con->prepare("SELECT * FROM jogos ORDER BY nome");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);
        return $rows;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of estilo
     */ 
    public function getEstilo()
    {
        return $this->estilo;
    }

    /**
     * Set the value of estilo
     *
     * @return  self
     */ 
    public function setEstilo($estilo)
    {
        $this->estilo = $estilo;

        return $this;
    }

    /**
     * Get the value of preco
     */ 
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * Set the value of preco
     *
     * @return  self
     */ 
    public function setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }
}