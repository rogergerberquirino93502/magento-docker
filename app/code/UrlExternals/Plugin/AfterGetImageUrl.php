<?php
namespace MaxiCompra\Blog\Plugin;

use Magento\Catalog\Block\Product\Image;

class AfterGetImageUrl
{
     /**
     * AfterGetImage constructor.
     */
    public function __construct(
        )
        {
        }

        /**
         * @param Image $image
         * @param $method
         * @return array|null
         */
        public function after__call(Image $image, $result, $method)
        {
            try {
                if ($method == 'getImageUrl' && $image->getProductId() > 0) {
                    $result = "https://m.media-amazon.com/images/I/71z6gsI87bL._AC_SL1500_.jpg";
                }
            } catch (\Exception $e) {
            }
            return $result;
        }

}
