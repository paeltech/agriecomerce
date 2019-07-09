<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Category.
 *
 * @author  The scaffold-interface created at 2017-07-07 06:36:14am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Category extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'categories';

	
}
