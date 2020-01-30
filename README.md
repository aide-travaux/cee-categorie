# Cee Categorie

## Description

```
CeeCategorie::get(int $income, int $household, string $codeRegion): ?string
```

Retourne la catégorie de ressource selon le dispositif des Certificats d'économies d'énergie

## Liste des paramètres

**income**

Ressources financières du foyer

**household**

Composition du foyer

**codeRegion**

Code région

## Valeurs de retour

Retourne la catégorie de ressource, ou NULL en cas de dépassement des plafonds.

## Exemples

```
<?php>

use AideTravaux\Cee\Categorie\CeeCategorie;

CeeCategorie::get(
  2, 20000, "11"
);

// "Grande précarité énergétique"

```

## Sources

- [Plafonds de ressources](https://www.legifrance.gouv.fr/affichTexte.do?cidTexte=JORFTEXT000030001603)
- [Codes région](https://www.insee.fr/fr/information/2114819)
