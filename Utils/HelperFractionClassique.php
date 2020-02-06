<?php

namespace AideTravaux\CEE\Categorie\Utils;

use AideTravaux\CEE\Categorie\Entries;

abstract class HelperFractionClassique
{
    public static function get(string $categorieCee, string $codeDepartement): float
    {
        switch ($codeDepartement) {
            case '01':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.12;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.45;
                    default:
                        return (float) 1;
                }
            case '02':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.09;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.37;
                    default:
                        return (float) 1;
                }
            case '03':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.07;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.33;
                    default:
                        return (float) 1;
                }
            case '04':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.08;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.33;
                    default:
                        return (float) 1;
                }
            case '05':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.12;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.47;
                    default:
                        return (float) 1;
                }
            case '06':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.20;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.57;
                    default:
                        return (float) 1;
                }
            case '07':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.06;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.33;
                    default:
                        return (float) 1;
                }
            case '08':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.07;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.36;
                    default:
                        return (float) 1;
                }
            case '09':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.05;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.26;
                    default:
                        return (float) 1;
                }
            case '10':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.08;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.37;
                    default:
                        return (float) 1;
                }
            case '11':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.05;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.26;
                    default:
                        return (float) 1;
                }
            case '12':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.06;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.33;
                    default:
                        return (float) 1;
                }
            case '13':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.11;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.39;
                    default:
                        return (float) 1;
                }
            case '14':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.09;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.40;
                    default:
                        return (float) 1;
                }
            case '15':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.07;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.35;
                    default:
                        return (float) 1;
                }
            case '16':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.07;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.30;
                    default:
                        return (float) 1;
                }
            case '17':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.07;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.33;
                    default:
                        return (float) 1;
                }
            case '18':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.09;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.39;
                    default:
                        return (float) 1;
                }
            case '19':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.07;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.32;
                    default:
                        return (float) 1;
                }
            case '21':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.10;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.42;
                    default:
                        return (float) 1;
                }
            case '22':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.05;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.29;
                    default:
                        return (float) 1;
                }
            case '23':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.08;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.35;
                    default:
                        return (float) 1;
                }
            case '24':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.07;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.33;
                    default:
                        return (float) 1;
                }
            case '25':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.09;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.36;
                    default:
                        return (float) 1;
                }
            case '26':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.06;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.30;
                    default:
                        return (float) 1;
                }
            case '27':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.10;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.41;
                    default:
                        return (float) 1;
                }
            case '28':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.13;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.43;
                    default:
                        return (float) 1;
                }
            case '29':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.05;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.31;
                    default:
                        return (float) 1;
                }
            case '2A':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.13;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.41;
                    default:
                        return (float) 1;
                }
            case '2B':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.11;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.37;
                    default:
                        return (float) 1;
                }
            case '30':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.05;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.23;
                    default:
                        return (float) 1;
                }
            case '31':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.10;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.37;
                    default:
                        return (float) 1;
                }
            case '32':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.09;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.36;
                    default:
                        return (float) 1;
                }
            case '33':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.12;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.45;
                    default:
                        return (float) 1;
                }
            case '34':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.07;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.32;
                    default:
                        return (float) 1;
                }
            case '35':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.08;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.39;
                    default:
                        return (float) 1;
                }
            case '36':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.08;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.39;
                    default:
                        return (float) 1;
                }
            case '37':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.07;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.33;
                    default:
                        return (float) 1;
                }
            case '38':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.10;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.40;
                    default:
                        return (float) 1;
                }
            case '39':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.09;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.36;
                    default:
                        return (float) 1;
                }
            case '40':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.08;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.36;
                    default:
                        return (float) 1;
                }
            case '41':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.08;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.39;
                    default:
                        return (float) 1;
                }
            case '42':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.08;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.37;
                    default:
                        return (float) 1;
                }
            case '43':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.07;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.32;
                    default:
                        return (float) 1;
                }
            case '44':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.09;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.38;
                    default:
                        return (float) 1;
                }
            case '45':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.09;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.39;
                    default:
                        return (float) 1;
                }
            case '46':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.06;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.30;
                    default:
                        return (float) 1;
                }
            case '47':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.06;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.28;
                    default:
                        return (float) 1;
                }
            case '48':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.11;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.41;
                    default:
                        return (float) 1;
                }
            case '49':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.13;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.44;
                    default:
                        return (float) 1;
                }
            case '50':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.10;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.41;
                    default:
                        return (float) 1;
                }
            case '51':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.15;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.49;
                    default:
                        return (float) 1;
                }
            case '52':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.10;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.40;
                    default:
                        return (float) 1;
                }
            case '53':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.08;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.40;
                    default:
                        return (float) 1;
                }
            case '54':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.11;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.40;
                    default:
                        return (float) 1;
                }
            case '55':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.08;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.33;
                    default:
                        return (float) 1;
                }
            case '56':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.06;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.34;
                    default:
                        return (float) 1;
                }
            case '57':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.11;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.39;
                    default:
                        return (float) 1;
                }
            case '58':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.08;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.37;
                    default:
                        return (float) 1;
                }
            case '59':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.08;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.37;
                    default:
                        return (float) 1;
                }
            case '60':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.13;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.45;
                    default:
                        return (float) 1;
                }
            case '61':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.08;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.37;
                    default:
                        return (float) 1;
                }
            case '62':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.07;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.34;
                    default:
                        return (float) 1;
                }
            case '63':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.10;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.41;
                    default:
                        return (float) 1;
                }
            case '64':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.10;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.40;
                    default:
                        return (float) 1;
                }
            case '65':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.07;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.34;
                    default:
                        return (float) 1;
                }
            case '66':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.06;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.28;
                    default:
                        return (float) 1;
                }
            case '67':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.11;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.39;
                    default:
                        return (float) 1;
                }
            case '68':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.10;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.39;
                    default:
                        return (float) 1;
                }
            case '69':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.11;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.42;
                    default:
                        return (float) 1;
                }
            case '70':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.07;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.34;
                    default:
                        return (float) 1;
                }
            case '71':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.09;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.39;
                    default:
                        return (float) 1;
                }
            case '72':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.08;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.39;
                    default:
                        return (float) 1;
                }
            case '73':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.13;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.47;
                    default:
                        return (float) 1;
                }
            case '74':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.15;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.48;
                    default:
                        return (float) 1;
                }
            case '75':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.20;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.49;
                    default:
                        return (float) 1;
                }
            case '76':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.13;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.46;
                    default:
                        return (float) 1;
                }
            case '77':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.08;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.38;
                    default:
                        return (float) 1;
                }
            case '78':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.13;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.47;
                    default:
                        return (float) 1;
                }
            case '79':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.07;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.38;
                    default:
                        return (float) 1;
                }
            case '80':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.09;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.36;
                    default:
                        return (float) 1;
                }
            case '81':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.04;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.26;
                    default:
                        return (float) 1;
                }
            case '82':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.04;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.23;
                    default:
                        return (float) 1;
                }
            case '83':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.10;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.38;
                    default:
                        return (float) 1;
                }
            case '84':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.06;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.30;
                    default:
                        return (float) 1;
                }
            case '85':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.06;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.37;
                    default:
                        return (float) 1;
                }
            case '86':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.08;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.35;
                    default:
                        return (float) 1;
                }
            case '87':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.08;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.37;
                    default:
                        return (float) 1;
                }
            case '88':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.09;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.38;
                    default:
                        return (float) 1;
                }
            case '89':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.07;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.32;
                    default:
                        return (float) 1;
                }
            case '90':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.10;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.36;
                    default:
                        return (float) 1;
                }
            case '91':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.11;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.45;
                    default:
                        return (float) 1;
                }
            case '92':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.18;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.54;
                    default:
                        return (float) 1;
                }
            case '93':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.10;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.38;
                    default:
                        return (float) 1;
                }
            case '94':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.14;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.47;
                    default:
                        return (float) 1;
                }
            case '95':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.11;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.42;
                    default:
                        return (float) 1;
                }
            case '971':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.06;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.20;
                    default:
                        return (float) 1;
                }
            case '972':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.06;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.20;
                    default:
                        return (float) 1;
                }
            case '973':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.06;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.20;
                    default:
                        return (float) 1;
                }
            case '974':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.06;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.20;
                    default:
                        return (float) 1;
                }
            case '976':
                switch ($categorieCee) {
                    case Entries::CATEGORIES_CEE['categorie_cee_2']:
                        return (float) 0.06;
                    case Entries::CATEGORIES_CEE['categorie_cee_3']:
                        return (float) 0.20;
                    default:
                        return (float) 1;
                }
            default:
                return (float) 0;
        }
    }
}
