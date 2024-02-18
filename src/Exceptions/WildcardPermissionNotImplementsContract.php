<?php

namespace CodeNomads\RolesPermission\Exceptions;

use InvalidArgumentException;

class WildcardPermissionNotImplementsContract extends InvalidArgumentException
{
    public static function create()
    {
        return new static('Wildcard permission class must implements Spatie\Permission\Contracts\Wildcard contract');
    }
}
