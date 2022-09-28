<?php

namespace MaxiCompra\Blog\Plugin\Minicart;

use Magento\Checkout\CustomerData\AbstractItem;

class AfterGetItemData
{
    /**
     * AfterGetImageData constructor.
     */
    public function __construct(
    )
    {
    }
    /**
     * @param AbstractItem $item
     * @param $result
     * @return mixed
     */
    public function afterGetItemData(AbstractItem $item, $result)
    {
        try {
            if ($result['product_id'] > 0) {
                $image = "https://m.media-amazon.com/images/I/71z6gsI87bL._AC_SL1500_.jpg";
                $result['product_image']['src'] = $image;
            }
        } catch (\Exception $e) {
        }
        return $result;
    }
}
