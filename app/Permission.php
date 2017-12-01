<?php namespace App;

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    /**
    * 获取顶节点和下面的二级节点
    *
    * @param array $top_nodes
    * @return Array $data
    */
    public function data_node()
    {
        $top_nodes = $this->where('pid', 0)->get();
        $data = [];
        foreach ($top_nodes as $key => $value) {
            $data[$key] = $value;
            $data[$key]['child'] = $this->where('pid', $value->id)->get();
        }
    }


}
