<?php

namespace IslemKms\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

abstract class WithSoftDeletes extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
}
