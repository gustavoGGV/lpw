<?php

class Link {
    private string $linkImg;
    private string $info;

    public function __construct(string $linkImg, string $info){
        $this->linkImg = $linkImg;
        $this->info = $info;
    }

    /**
     * Get the value of linkImg
     */
    public function getLinkImg(): string
    {
        return $this->linkImg;
    }

    /**
     * Get the value of info
     */
    public function getInfo(): string
    {
        return $this->info;
    }
}
