<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [

        /* Permitir consumo de APIS de equipo */
        'https://economica.tech/QRCONNECTX/post_equipo',
        'https://economica.tech/QRCONNECTX/put_equipo',
        'https://economica.tech/QRCONNECTX/delete_equipo',

        /* Permitir consumo de APIS de tipo de equipo */
        'https://economica.tech/QRCONNECTX/post_tipo_equipo',
        'https://economica.tech/QRCONNECTX/put_tipo_equipo',
        'https://economica.tech/QRCONNECTX/delete_tipo_equipo',

        /* Permitir consumo de APIS de equipo */
        'https://economica.tech/QRCONNECTX/post_mantenimiento',
        'https://economica.tech/QRCONNECTX/put_mantenimiento',
        'https://economica.tech/QRCONNECTX/delete_mantenimiento',

        /* Permitir consumo de APIS de equipo */
        'https://economica.tech/QRCONNECTX/post_tipo_mantenimiento',
        'https://economica.tech/QRCONNECTX/put_tipo_mantenimiento',
        'https://economica.tech/QRCONNECTX/delete_tipo_mantenimiento',
        
    ];
}
