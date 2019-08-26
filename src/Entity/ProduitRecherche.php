<?php

namespace App\Entity;

use App\Entity\Marque;


class ProduitRecherche
{
/**
 * @var float|null
 */
private $maxPrix;

/**
 * @var Marque|null
 */
private $marqueRechercher;

/**
 * @var datetime|null
 */
private $date;


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
 * @return datetime|null
 */
public function getDate(): ?Date
{
    return $this->date;
}

/**
 * @param datetime|null $date
 * @return ProduitRecherche
 */
public function setDate(?Date $date): ProduitRecherche
{
    $this->date = $date;
    return $this;
}



}


