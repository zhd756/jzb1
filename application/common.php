<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

function _array_column(array $array, $column_key, $index_key=null){
    $result = [];
    foreach($array as $arr) {
//        if(!is_array($arr)) {
//            continue;
//        }

        if(is_null($column_key)){
            $value = $arr;
        }else{
            $value = $arr[$column_key];
        }

        if(!is_null($index_key)){
            $key = $arr[$index_key];
            $result[$key] = $value;
        }else{
            $result[] = $value;
        }
    }

    return $result;
}
