<?php
function checkColumns($columns)
{

    if (!strstr($columns, '*')) {
        return explode('|', $columns);
    } else {
        return '*';
    }
}

function str2arr($str, $sp = '|', $kv = '=')
{
    if ($str) {
        $arr = str_replace(array($kv, $sp), array('"=>"', '","'), 'array("' . $str . '")');
        eval("\$arr" . " = $arr;");
    } else {
        $arr = [];
    }
    return $arr;
}

function OrderStrHandle($str, $sp = "|", $kv = ",")
{
}
/**
 * object 转 array
 */
function object_to_array($obj)
{
    $_arr = is_object($obj) ? get_object_vars($obj) : $obj;
    $arr = array();
    foreach ($_arr as $key => $val) {
        $val = (is_array($val)) || is_object($val) ? object_to_array($val) : $val;
        $arr[$key] = $val;
    }
    return $arr;
}

function Base64toImg($base64cxt, $path)
{
    if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64cxt, $result)) {
        //var_dump($result);die;
        $type = $result[2];
        $new_file = $path . session_create_id()  . ".{$type}";
        $new_cxt = base64_decode(str_replace($result[1], '', $base64cxt));
        return [$new_file, $new_cxt];
    } else {
        return false;
    }
}

function array_more_merge($ar1, $ar2, $key_name)
{
    if (!$ar1 || !is_array($ar1) || count($ar1) <= 0 || !$ar2 || !is_array($ar2) || count($ar2) <= 0 || !$key_name || strlen($key_name) <= 0) {
        return $ar1;
    }
    foreach ($ar1 as $i => $items) {
        foreach ($ar2 as $key => $item) {
            if ($ar2[$key][$key_name] == $ar1[$i][$key_name]) {
                $keys = array_keys($ar2[$key]);
                foreach ($keys as $name) {
                    $ar1[$i][$name] = $ar2[$key][$name];
                }
            }
        }
    }
    return $ar1;
}
/**
 * ar1 为大数组 $ar2 为小数组
 */
function model_filter_key($ar1, $ar2)
{
    if (!$ar1 || !is_array($ar1) || count($ar1) <= 0 || !$ar2 || !is_array($ar2) || count($ar2) <= 0) {
        return [];
    }
    foreach ($ar1 as $key => $value) {
        if (array_key_exists($key, $ar2)) {
            if (!(($value) == $ar2[$key])) {
                $arr[$key] = $ar2[$key];
            }
        }
    }
    return $arr;
}

function cat_nameTo_ink($str)
{
    return preg_replace('/[ ]|&/', '-', trim($str));
}

function str_Reg_filter(&$arr, $arr_str)
{
    foreach ($arr as $key => $value) {
        foreach ($arr_str as $val) {
            if (strstr($key, $val)) {
                $data[$key] = $value;
                unset($arr[$key]);
            }
        }
    }
    return $data;
}
function unset_Arr_col(&$arr, $str)
{
    foreach ($arr as $key => $value) {
        if (strstr($key, $str)) {
            $data[$key] = $value;
            unset($arr[$key]);
        }
    }
    return $data;
}
function agg_arr($arrData, $arr, $start, $handle)
{
    foreach ($arrData as $key => $value) {
        foreach ($arr as $val) {
            if (strstr($key, $val)) {
                $data[substr($key, $start, 1)][$val] = $value;
                $data[substr($key, $start, 1)]['handle'] = $handle;
                // unset($arrData[$key]);
                $arr[]=$key;
            }
        }
    }
    return $arrData;
}

function booleanToNum(&$arr)
{
    foreach ($arr as $key => $value) {
        if ($value == "true" || is_bool($value)) {
            $arr[$key] = 1;
        }
        if ($value == 'false' || is_bool($value)) {
            $arr[$key] = 0;
        }
    }
    return $arr;
}
