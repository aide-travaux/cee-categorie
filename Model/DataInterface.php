<?php

namespace AideTravaux\CEE\Categorie\Model;

interface DataInterface
{
    public function getCodeRegion(): string;

    public function getCodeDepartement(): string;

    public function getCompositionMenage(): int;

    public function getRessourcesMenage(): float;

}
