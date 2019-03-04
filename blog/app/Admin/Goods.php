<?php

namespace App\Admin;
use App\Admin\Cates;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    public $table = 'shop_goods';



      public function goods()
    {
        return $this->belongsTo('app\Admin\Cates','cid');
    }


}
