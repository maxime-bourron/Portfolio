<?php

namespace App\Enum;

enum TypeContrat: string
{
    case Cdi = 'CDI';
    case Cdd = 'CDD';
    case Stage = 'Stage';
    case Apprentissage = 'Apprentissage';
    case Interim = 'Intérim';
}
