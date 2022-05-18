<?php
namespace Custom\Purchased\Api\Data;

interface ViewInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const SKU           = 'sku';
    const  ITEM_ID      = 'item_id';
    const  NAME  = 'name';
    
    /**#@-*/


    /**
     * Get Title
     *
     * @return string|null
     */
    public function getSku();

    /**
     * Get Content
     *
     * @return string|null
     */
    public function getItemId();

    /**
     * Get Created At
     *
     * @return string|null
     */
    public function getName();

    /**
     * Get ID
     *
     * @return int|null
     */
    

    /**
     * Set Title
     *
     * @param string $title
     * @return $this
     */
    public function setSku($sku);

    /**
     * Set Content
     *
     * @param string $content
     * @return $this
     */
    public function setName($name);

    /**
     * Set Crated At
     *
     * @param int $createdAt
     * @return $this
     */
    public function setItemId($item_id);

   
}