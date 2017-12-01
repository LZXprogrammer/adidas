<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{

    /**
     * 数据库连接。
     *
     * @var string
     */
    protected $connection = 'adidas';

    /**
     * 与模型关联的数据表。
     *
     * @var string
     */
    protected $table = 'adidas_managers';

    /**
     * 是否维护时间戳。
     *
     * @var string
     */
    public $timestamps = false;


}
