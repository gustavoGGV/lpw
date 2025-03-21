<?php

class Presidente
{
    private int $numero;
    private string $nome;
    private int $anoInicioMandato;
    private int $anoFimMandato;

    /*
    public function desenharLinha()
    {
        echo "<tr>";
        echo "<td>" . $this->numero . "</td>";
        echo "<td>" . $this->nome . "</td>";
        echo "<td>" . $this->anoInicioMandato . "</td>";
        echo "<td>" . $this->anoFimMandato . "</td>";
        echo "</tr>";
    }
    */

    public function __construct($numero, $nome, $anoInicioMandato, $anoFimMandato)
    {
        $this->numero = $numero;
        $this->nome = $nome;
        $this->anoInicioMandato = $anoInicioMandato;
        $this->anoFimMandato = $anoFimMandato;
    }

    /**
     * Get the value of numero
     */
    public function getNumero(): int
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of anoInicioMandato
     */
    public function getAnoInicioMandato(): int
    {
        return $this->anoInicioMandato;
    }

    /**
     * Set the value of anoInicioMandato
     */
    public function setAnoInicioMandato(int $anoInicioMandato): self
    {
        $this->anoInicioMandato = $anoInicioMandato;

        return $this;
    }

    /**
     * Get the value of anoFimMandato
     */
    public function getAnoFimMandato(): int
    {
        return $this->anoFimMandato;
    }

    /**
     * Set the value of anoFimMandato
     */
    public function setAnoFimMandato(int $anoFimMandato): self
    {
        $this->anoFimMandato = $anoFimMandato;

        return $this;
    }
}
