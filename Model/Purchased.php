<?php

namespace Custom\Purchased\Model;
use \Magento\Framework\DataObject\IdentityInterface;
use \Custom\Purchased\Api\Data\ViewInterface;
class Purchased extends \Magento\Framework\Model\AbstractModel implements ViewInterface, IdentityInterface
{
    const CACHE_TAG = 'custom_purchased_purchased';


    public function _construct()
    {
        $this->_init('Custom\Purchased\Model\ResourceModel\Purchased');
    }

    public function getSku()
        {
        return $this->getData(self::SKU);
    }

    /**
     * Get Content
     *
     * @return string|null
     */
    public function getItemId()
    {
        return $this->getData(self::ITEM_ID);
    }

    /**
     * Get Created At
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * Get ID
     *
     * @return int|null
     */
    
    /**
     * Return identities
     * @return string[]
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getItemId()];
    }

    /**
     * Set Title
     *
     * @param string $title
     * @return $this
     */
    public function setSku($sku)
    {
        return $this->setData(self::SKU, $sku);
    }

    /**
     * Set Content
     *
     * @param string $content
     * @return $this
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * Set Created At
     *
     * @param string $createdAt
     * @return $this
     */
    public function setItemId($item_id)
    {
        return $this->setData(self::ITEM_ID, $item_id);
    }

    /**
     * Set ID
     *
     * @param int $id
     * @return $this
     */
   
}



