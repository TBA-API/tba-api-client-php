<?php
/**
 * WLTRecord
 *
 * PHP version 5
 *
 * @category Class
 * @package  TBA-API\v3client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * The Blue Alliance API v3
 *
 * # Overview    Information and statistics about FIRST Robotics Competition teams and events.   # Authentication   All endpoints require an Auth Key to be passed in the header `X-TBA-Auth-Key`. If you do not have an auth key yet, you can obtain one from your [Account Page](/account).    A `User-Agent` header may need to be set to prevent a 403 Unauthorized error.
 *
 * The version of the OpenAPI document: 3.8.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TBA-API\v3client\TBA-API\v3client\model;

use \ArrayAccess;
use \TBA-API\v3client\ObjectSerializer;

/**
 * WLTRecord Class Doc Comment
 *
 * @category Class
 * @description A Win-Loss-Tie record for a team, or an alliance.
 * @package  TBA-API\v3client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WLTRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WLT_Record';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'losses' => 'int',
        'wins' => 'int',
        'ties' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'losses' => null,
        'wins' => null,
        'ties' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'losses' => 'losses',
        'wins' => 'wins',
        'ties' => 'ties'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'losses' => 'setLosses',
        'wins' => 'setWins',
        'ties' => 'setTies'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'losses' => 'getLosses',
        'wins' => 'getWins',
        'ties' => 'getTies'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['losses'] = isset($data['losses']) ? $data['losses'] : null;
        $this->container['wins'] = isset($data['wins']) ? $data['wins'] : null;
        $this->container['ties'] = isset($data['ties']) ? $data['ties'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['losses'] === null) {
            $invalidProperties[] = "'losses' can't be null";
        }
        if ($this->container['wins'] === null) {
            $invalidProperties[] = "'wins' can't be null";
        }
        if ($this->container['ties'] === null) {
            $invalidProperties[] = "'ties' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets losses
     *
     * @return int
     */
    public function getLosses()
    {
        return $this->container['losses'];
    }

    /**
     * Sets losses
     *
     * @param int $losses Number of losses.
     *
     * @return $this
     */
    public function setLosses($losses)
    {
        $this->container['losses'] = $losses;

        return $this;
    }

    /**
     * Gets wins
     *
     * @return int
     */
    public function getWins()
    {
        return $this->container['wins'];
    }

    /**
     * Sets wins
     *
     * @param int $wins Number of wins.
     *
     * @return $this
     */
    public function setWins($wins)
    {
        $this->container['wins'] = $wins;

        return $this;
    }

    /**
     * Gets ties
     *
     * @return int
     */
    public function getTies()
    {
        return $this->container['ties'];
    }

    /**
     * Sets ties
     *
     * @param int $ties Number of ties.
     *
     * @return $this
     */
    public function setTies($ties)
    {
        $this->container['ties'] = $ties;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

