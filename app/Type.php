<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Type.
 *
 * @author  The scaffold-interface created at 2017-07-07 07:33:32am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Type extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'types';

	
}
