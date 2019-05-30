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

use think\File;

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

function upload(File $file,$ext = 'jpg,png')
{
    $info = $file->validate(['ext'=>$ext])->move(ROOT_PATH . 'uploads');
    if($info){
        // 成功上传后 获取上传信息

        // 输出 jpg
//            echo $info->getExtension();
        // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
        return $info->getSaveName();
        // 输出 42a79759f284b767dfcb2a0197904287.jpg
//            echo $info->getFilename();
    }else{
        // 上传失败获取错误信息
        return $file->getError();
    }
}
