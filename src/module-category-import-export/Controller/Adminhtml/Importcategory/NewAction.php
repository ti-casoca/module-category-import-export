<?php
/**
* 
* Import / Export Category
* 
* @category     Casoca
* @package      Import / Export Category
* @copyright    Copyright (c) 2024 Casoca (https://casoca.com.br)
* @version      1.0.0
* @license      https://opensource.org/licenses/OSL-3.0
* @license      https://opensource.org/licenses/AFL-3.0
*
*/
namespace Casoca\Importexportcategory\Controller\Adminhtml\Importcategory;

class NewAction extends \Magento\Backend\App\Action
{
    /**
     * Redirect result factory
     *
     * @var \Magento\Backend\Model\View\Result\ForwardFactory
     */
    protected $_resultForwardFactory;

    /**
     * constructor
     *
     * @param \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory
     * @param \Magento\Backend\App\Action\Context $context
     */
    public function __construct(
        \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory,
        \Magento\Backend\App\Action\Context $context
    ) {
    
        $this->_resultForwardFactory = $resultForwardFactory;
        parent::__construct($context);
    }

    /**
     * forward to edit
     *
     * @return \Magento\Backend\Model\View\Result\Forward
     */
    public function execute()
    {
        $resultForward = $this->_resultForwardFactory->create();
        $resultForward->forward('edit');
        return $resultForward;
    }
}
