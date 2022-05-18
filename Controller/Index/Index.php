<?php
declare(strict_types=1); 
namespace Custom\Purchased\Controller\Index;
use \Magento\Framework\App\ResponseInterface;
use \Magento\Framework\App\ActionInterface;
use \Magento\Framework\View\Result\PageFactory;


class Index implements ActionInterface
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $PageFactory;

    /**
     * @param PageFactory $resultPageFactory
     */
    public function __construct(PageFactory $PageFactory) {

        $this->PageFactory = $PageFactory;
        
    }

    /**
     * Prints the information 
     * @return Page
     */
    public function execute()
    {
        $resultpage = $this->PageFactory->create();
         return $resultpage;
    }
}