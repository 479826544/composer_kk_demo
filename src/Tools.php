<?php
namespace Tools;


class Tools
{

    /**
     * 创建订单号
     * @param $type
     * @return string
     */
    public function createOrderSn($type)
    {
        switch ($type) {
            case 1:
                $first = "S";
                break;
            case 2:
                $first = "J";
                break;
            case 3:
                $first = "C";
                break;
            default:
                $first = "D";
        }
        return $first . (intval(date('Y')) - 2011) . strtoupper(dechex(date('m'))) . date('d') . substr(time(), -5) . substr(microtime(), 2, 5) . sprintf('%02d', rand(0, 99));
    }


    /**
     * 浮点数的加减乘除
     * @param $left
     * @param $right
     * @param $type int 1加 2减 3乘 4除
     * @param $num int 保留小数个数
     * @return string|null
     */
    public function floatMath($left, $right, $type = 1, $num = 2)
    {
        switch ($type) {
            case 1:
                $result = bcadd($left, $right, $num);
                break;
            case 2:
                $result = bcsub($left, $right, $num);
                break;
            case 3:
                $result = bcmul($left, $right, $num);
                break;
            default:
                $result = bcdiv($left, $right, $num);
        }
        return $result;
    }


}