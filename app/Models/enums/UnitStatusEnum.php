<?php

namespace App\Models\enums;

enum UnitStatusEnum: string
{
    case AVAILABLE = 'available';
    case SOLD = 'sold';
    case RENTED = 'rented';
    case UNDER_CONSTRUCTION = 'under_construction';
}
