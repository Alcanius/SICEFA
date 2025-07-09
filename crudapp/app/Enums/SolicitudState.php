<?php

namespace App\Enums;

enum SolicitudState: string
{
    case Pendiente = 'PENDIENTE';
    case EnEjecucion = 'EN_EJECUCIÓN';
    case Realizada = 'REALIZADA';
}
