<?php declare (strict_types = 1);

namespace MaxiCompra\Blog\Controller\Post;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

/**
 * Catalog detail page controller.
 */
class ListAction implements HttpGetActionInterface
{
    /**
     * Index action
     *
     * @return \Magento\Framework\Controller\Result\Redirect
     */
    public function __construct(
        private PageFactory $pageFactory
    ) {}
    
        
    public function execute(): Page
    {
        return $this->pageFactory->create();
    }
}