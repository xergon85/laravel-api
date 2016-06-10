<?php
/**
 * Created by PhpStorm.
 * User: xergo
 * Date: 10-Jun-16
 * Time: 9:54 PM
 */

namespace App\Models;

use Zizaco\Entrust\EntrustRole;


class Role extends EntrustRole
{
    public $table = "roles";

    public $fillable = [
        'name',
        'display_name',
        'description'
    ];
}