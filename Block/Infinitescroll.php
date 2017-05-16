<?php

namespace TheCodingTutor\Infinitescroll\Block;

/**
 * Infinitescroll content block
 */
class Infinitescroll extends \Magento\Framework\View\Element\Template
{   
    protected $_scopeConfigObject;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        $this->_scopeConfigObject = $context->getScopeConfig();
        parent::__construct(
            $context,
            $data
        );
    }

    /**
     * @return mixed
     */
    public function isEnabled()
    {
        $enabled = $this->_scopeConfigObject->getValue('thecodingtutor_infinitescroll/basic_setting/enabled');
        return $enabled;
    }

    /**
     * @return mixed
     */
    public function removePagination()
    {
        $removePagination = $this->_scopeConfigObject->getValue('thecodingtutor_infinitescroll/advance_settings/remove_pagination');
        return $removePagination;
    }

    /**
     * @return mixed
     */
    public function strictScreenWidth()
    {
        $strictScreenWidth = $this->_scopeConfigObject->getValue('thecodingtutor_infinitescroll/advance_settings/only_for_selected_screen');
        return $strictScreenWidth;
    }

    /**
     * @return mixed
     */
    public function getMinScreenWidth()
    {
        return !empty($this->_scopeConfigObject->getValue('thecodingtutor_infinitescroll/advance_settings/min_width')) ? $this->_scopeConfigObject->getValue('thecodingtutor_infinitescroll/advance_settings/min_width') : 0;
    }

    public function getMaxScreenWidth()
    {
        return !empty($this->_scopeConfigObject->getValue('thecodingtutor_infinitescroll/advance_settings/max_width')) ? $this->_scopeConfigObject->getValue('thecodingtutor_infinitescroll/advance_settings/max_width') : 767;
    }

    /**
     * @return mixed
     */
    public function getListMode()
    {
        $listMode = $this->_scopeConfigObject->getValue('catalog/frontend/list_mode');
        return $listMode;
    }
}
