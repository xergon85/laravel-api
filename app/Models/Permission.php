<?php
/**
 * Created by PhpStorm.
 * User: xergo
 * Date: 10-Jun-16
 * Time: 9:56 PM
 */

namespace App\Models;

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    public $table = 'permissions';
    
    public $fillable = [
        'name',
        'display_name',
        'description'
    ];
}