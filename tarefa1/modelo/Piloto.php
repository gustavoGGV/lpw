<?php

class Piloto {
  private string $nome;
  private string $imagem;
  private int $qtdCorridas;
  private int $qtdTitulos;
  private int $qtdVitorias;
  private int $qtdPodios;
  private int $numeroPalpite;

  public function __construct($nome, $imagem, $qtdCorridas, $qtdTitulos, $qtdVitorias, $qtdPodios, $numeroPalpite){
    $this->nome = $nome;
    $this->imagem = $imagem;
    $this->qtdCorridas = $qtdCorridas;
    $this->qtdTitulos = $qtdTitulos;
    $this->qtdVitorias = $qtdVitorias;
    $this->qtdPodios = $qtdPodios;
    $this->numeroPalpite = $numeroPalpite;
  }

  public function __toString(){
    return "<img src='" . $this->imagem . "' width='300' height='300'>\n
    <h2>" . $this->nome . "</h2>\n
    <h3>Títulos: " . $this->qtdTitulos . "</h3>\n
    <h3>Corridas: " . $this->qtdCorridas . "</h3>\n
    <h3>Vitórias: " . $this->qtdVitorias . "</h3>\n
    <h3>Pódios: " . $this->qtdPodios . "</h3>";
  }

  /**
   * Get the value of nome
   */
  public function getNome(): string
  {
    return $this->nome;
  }

  /**
   * Get the value of imagem
   */
  public function getImagem(): string
  {
    return $this->imagem;
  }

  /**
   * Get the value of qtdCorridas
   */
  public function getQtdCorridas(): int
  {
    return $this->qtdCorridas;
  }

  /**
   * Get the value of qtdVitorias
   */
  public function getQtdVitorias(): int
  {
    return $this->qtdVitorias;
  }

  /**
   * Get the value of qtdPodios
   */
  public function getQtdPodios(): int
  {
    return $this->qtdPodios;
  }

  /**
   * Get the value of numeroPalpite
   */
  public function getNumeroPalpite(): int
  {
    return $this->numeroPalpite;
  }

  /**
   * Get the value of qtdTitulos
   */
  public function getQtdTitulos(): int
  {
    return $this->qtdTitulos;
  }
}
