<?php

namespace App\Models\enums;


enum PlaceTypeEnum: string
{
    case Transportation = 'Transportation';
    case Educational = 'Educational';
    case Medical = 'Medical';
    case Shopping = 'Shopping';
    case Recreational = 'Recreational';
    case Dining = 'Dining';
    case Services = 'Services';
}
