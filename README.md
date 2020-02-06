# Certificat d'économies d'énergie - Catégorie

## Introduction

La classe CeeCategorie retourne les méthodes utiles pour obtenir des informations relatives aux catégories de ressources
du dispositif CEE


## Méthodes

```
CeeCategorie::get(int $ressources, int $compositionFoyer, string $codeRegion): ?string
```
Retourne la catégorie de ressource selon le dispositif des Certificats d'économies d'énergie

```
CeeCategorie::getPlafondPrecarite(int $compositionFoyer, string $codeRegion): int
```
Retourne le plafond de ressources de la catégorie "Précarité"

```
CeeCategorie::getPlafondGrandePrecarite(int $compositionFoyer, string $codeRegion): int
```
Retourne le plafond de ressources de la catégorie "Grande précarité énergétique"

```
CeeCategorie::getFractionCeeClassique(int $compositionFoyer, string $codeDepartement): float
```
Retourne la part du volume de certificats Classique

```
CeeCategorie::getFractionCeePrecarite(int $compositionFoyer, string $codeDepartement): float
```
Retourne la part du volume de certificats Précarité

```
CeeCategorie::getFractionCeeGrandePrecarite(int $compositionFoyer, string $codeDepartement): float
```
Retourne la part du volume de certificats Grande précarité énergétique

## Exemples

```
<?php>

use AideTravaux\Cee\Categorie\CeeCategorie;

CeeCategorie::get( 20000, 2, "11" );
CeeCategorie::getPlafondPrecarite( 2, "11" );
CeeCategorie::getPlafondGrandePrecarite( 2, "11" );
CeeCategorie::getFractionCeeClassique( "Grande précarité énergétique", "75" );
CeeCategorie::getFractionCeePrecarite( "Grande précarité énergétique", "75" );
CeeCategorie::getFractionCeeGrandePrecarite( "Grande précarité énergétique", "75" );

```

## Sources

- [Plafonds de ressources](https://www.legifrance.gouv.fr/affichTexte.do?cidTexte=JORFTEXT000030001603)
- [Codes région](https://www.insee.fr/fr/information/2114819)
