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
namespace Casoca\Importexportcategory\Block\Adminhtml\Importcategory\Edit\Tab;

class Importcategory extends \Magento\Backend\Block\Widget\Form\Generic implements \Magento\Backend\Block\Widget\Tab\TabInterface
{
    /**
     * Prepare form
     *
     * @return $this
     */
    protected function _prepareForm()
    {
        $form = $this->_formFactory->create();
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $storemanager = $objectManager->create('Magento\Store\Model\StoreManagerInterface');
       
        $fieldset = $form->addFieldset(
            'base_fieldset',
            [
                'legend' => __('Import Categories'),
                'class'  => 'fieldset-wide'
            ]
        );
        $fieldset->addField(
            'file',
            'file',
            [
                'name'  => 'file',
                'label' => __('Upload File'),
                'title' => __('Upload File'),
                'required' => true,
            ]
        );
        $this->setForm($form);
        return parent::_prepareForm();
    }

    /**
     * Prepare label for tab
     *
     * @return string
     */
    public function getTabLabel()
    {
        return __('Import Categories');
    }

    /**
     * Prepare title for tab
     *
     * @return string
     */
    public function getTabTitle()
    {
        return $this->getTabLabel();
    }

    /**
     * Can show tab in tabs
     *
     * @return boolean
     */
    public function canShowTab()
    {
        return true;
    }

    /**
     * Tab is hidden
     *
     * @return boolean
     */
    public function isHidden()
    {
        return false;
    }
}
