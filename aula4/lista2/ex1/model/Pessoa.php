<?php

class Pessoa
{
    private string $nome;
    private string $sobrenome;
    private int $idade;

    public function __construct(string $nome, string $sobrenome, int $idade){
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->idade = $idade;
    }
    
    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Get the value of sobrenome
     */
    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }

    /**
     * Get the value of idade
     */
    public function getIdade(): int
    {
        return $this->idade;
    }
}
