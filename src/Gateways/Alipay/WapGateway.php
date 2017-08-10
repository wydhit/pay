<?php 

namespace Yansongda\Pay\Gateways\Alipay;

/**
* 
*/
class WebGateway extends Alipay
{
    /**
     * [getMethod description]
     * @author yansongda <me@yansongda.cn>
     * @version 2017-08-10
     * @return  [type]     [description]
     */
    private function getMethod() {
        return 'alipay.trade.wap.pay';
    }

    /**
     * [getProductCode description]
     * @author yansongda <me@yansongda.cn>
     * @version 2017-08-10
     * @return  [type]     [description]
     */
    private function getProductCode() {
        return 'QUICK_WAP_WAY';
    }
}