<?php

namespace App\Entity;

class PriceSearch
{
    
    private ? int $minPrice=null;
    
    private ? int $maxPrice= null;

    public function getMinPrice(): ?int
    {
        return $this->minPrice;
    }
    public function setMinPrice(int $minPrice): self
    {
        $this->minPrice = $minPrice;
        return $this;
    }
    public function getMaxPrice(): ?int
    {
        return $this->maxPrice;
    }
    public function setMaxPrice(int $maxPrice): self
    {
        $this->maxPrice = $maxPrice;
        return $this;
    }
}
