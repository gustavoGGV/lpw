<?php

class Pokemon
{
    private string $imgLinkPok;
    private string $nomePok;
    private string $tipoPok;
    private string $pokepediaLinkPok;

    public function __construct($imgLinkPok, $nomePok, $tipoPok, $pokepediaLinkPok)
    {
        $this->imgLinkPok = $imgLinkPok;
        $this->nomePok = $nomePok;
        $this->tipoPok = $tipoPok;
        $this->pokepediaLinkPok = $pokepediaLinkPok;
    }

    /**
     * Get the value of imgLinkPok
     */
    public function getImgLinkPok(): string
    {
        return $this->imgLinkPok;
    }

    /**
     * Get the value of nomePok
     */
    public function getNomePok(): string
    {
        return $this->nomePok;
    }

    /**
     * Get the value of tipoPok
     */
    public function getTipoPok(): string
    {
        return $this->tipoPok;
    }

    /**
     * Get the value of pokepediaLinkPok
     */
    public function getPokepediaLinkPok(): string
    {
        return $this->pokepediaLinkPok;
    }
}
