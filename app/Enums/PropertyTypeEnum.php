<?php

namespace App\Enums;

enum PropertyTypeEnum: string{
    case SINGLE = 'Single Family Home';
    case TOWNHOUSE = 'Townhouse';
    case MULTIFAMILY = 'Multi-Family Home';
    case BUNGALOW = 'Bungalow';
}