<?php

namespace App\Entity;

use App\Entity\Marque;


class ProduitRecherche
{


/**
 * @var string|null
 */
private $nomProduit;

/**
 * @var float|null
 */
private $maxPrix;

/**
 * @var Marque|null
 */
private $marqueRechercher;

/**
 * @var DateTime|null
 */
private $dateChercher;


/**
 * @return float|null
 */
public function getMaxPrix(): ?float
{
    return $this->maxPrix;
}

/**
 * @param float|null $maxPrix
 * @return ProduitRecherche
 */
public function setMaxPrix(?int $maxPrix): ProduitRecherche
{
    $this->maxPrix = $maxPrix;
    return $this;
}

/**
 * @return string|null
 */
public function getNomProduit(): ?string
{
    return $this->nomProduit;
}

/**
 * @param string|null $nomProduit
 * @return ProduitRecherche
 */
public function setNomProduit(?string $nomProduit): ProduitRecherche
{
    $this->nomProduit = $nomProduit;
    return $this;
}

/**
 * @return Marque
 */
public function getMarqueRechercher(): ?Marque
{
    
    return $this->marqueRechercher;
}

/**
 * @param Marque|null $marqueRechercher
 * @return ProduitRecherche
 */
public function setMarqueRechercher(?Marque $marqueRechercher): ProduitRecherche
{
    
    $this->marqueRechercher = $marqueRechercher;
    return $this;
}


/**
 * @return DateTime|null
 */
public function getdateChercher(): ?DateTime
{
    return $this->dateChercher;
}

/**
 * @param DateTime|null $dateChercher
 * @return ProduitRecherche
 */
public function setdateChercher(?Date $dateChercher): ProduitRecherche
{
    $this->dateChercher = $dateChercher;
    return $this;
}

public function __toString(){

    return $this->nomProduit;
}

}


