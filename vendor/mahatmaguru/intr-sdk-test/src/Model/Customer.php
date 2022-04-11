<?php
/**
 * Customer
 *
 * PHP version 5
 *
 * @category Class
 * @package  Introvert
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * INTROVERT API
 *
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Introvert\Model;

use \ArrayAccess;

/**
 * Customer Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Introvert
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Customer implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Customer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'crm_user_id' => 'int',
        'next_price' => 'int',
        'periodicity' => 'int',
        'custom_fields' => 'object',
        'tags' => 'string',
        'next_date' => 'int'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'crm_user_id' => 'crm_user_id',
        'next_price' => 'next_price',
        'periodicity' => 'periodicity',
        'custom_fields' => 'custom_fields',
        'tags' => 'tags',
        'next_date' => 'next_date'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'crm_user_id' => 'setCrmUserId',
        'next_price' => 'setNextPrice',
        'periodicity' => 'setPeriodicity',
        'custom_fields' => 'setCustomFields',
        'tags' => 'setTags',
        'next_date' => 'setNextDate'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'crm_user_id' => 'getCrmUserId',
        'next_price' => 'getNextPrice',
        'periodicity' => 'getPeriodicity',
        'custom_fields' => 'getCustomFields',
        'tags' => 'getTags',
        'next_date' => 'getNextDate'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['crm_user_id'] = isset($data['crm_user_id']) ? $data['crm_user_id'] : null;
        $this->container['next_price'] = isset($data['next_price']) ? $data['next_price'] : null;
        $this->container['periodicity'] = isset($data['periodicity']) ? $data['periodicity'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['next_date'] = isset($data['next_date']) ? $data['next_date'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id id покупателя
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name 
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets crm_user_id
     * @return int
     */
    public function getCrmUserId()
    {
        return $this->container['crm_user_id'];
    }

    /**
     * Sets crm_user_id
     * @param int $crm_user_id id ответственного
     * @return $this
     */
    public function setCrmUserId($crm_user_id)
    {
        $this->container['crm_user_id'] = $crm_user_id;

        return $this;
    }

    /**
     * Gets next_price
     * @return int
     */
    public function getNextPrice()
    {
        return $this->container['next_price'];
    }

    /**
     * Sets next_price
     * @param int $next_price ожидаемая сумма покупки
     * @return $this
     */
    public function setNextPrice($next_price)
    {
        $this->container['next_price'] = $next_price;

        return $this;
    }

    /**
     * Gets periodicity
     * @return int
     */
    public function getPeriodicity()
    {
        return $this->container['periodicity'];
    }

    /**
     * Sets periodicity
     * @param int $periodicity периодичность (в днях)
     * @return $this
     */
    public function setPeriodicity($periodicity)
    {
        $this->container['periodicity'] = $periodicity;

        return $this;
    }

    /**
     * Gets custom_fields
     * @return object | array
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     * @param object | array $custom_fields пользовательские поля, объект вида     {id: value, id: [value, ...]}
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets tags
     * @return string
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param string $tags 
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets next_date
     * @return int
     */
    public function getNextDate()
    {
        return $this->container['next_date'];
    }

    /**
     * Sets next_date
     * @param int $next_date (timestamp) дата след. покупки
     * @return $this
     */
    public function setNextDate($next_date)
    {
        $this->container['next_date'] = $next_date;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Introvert\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Introvert\ObjectSerializer::sanitizeForSerialization($this));
    }
}


