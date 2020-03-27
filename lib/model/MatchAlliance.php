<?php
/**
 * MatchAlliance
 *
 * PHP version 5
 *
 * @category Class
 * @package  TBAAPI\v3client
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
 * OpenAPI Generator version: 4.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TBAAPI\v3client\TBAAPI\v3client\model;

use \ArrayAccess;
use \TBAAPI\v3client\ObjectSerializer;

/**
 * MatchAlliance Class Doc Comment
 *
 * @category Class
 * @package  TBAAPI\v3client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MatchAlliance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Match_alliance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'score' => 'int',
        'team_keys' => 'string[]',
        'surrogate_team_keys' => 'string[]',
        'dq_team_keys' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'score' => null,
        'team_keys' => null,
        'surrogate_team_keys' => null,
        'dq_team_keys' => null
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
        'score' => 'score',
        'team_keys' => 'team_keys',
        'surrogate_team_keys' => 'surrogate_team_keys',
        'dq_team_keys' => 'dq_team_keys'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'score' => 'setScore',
        'team_keys' => 'setTeamKeys',
        'surrogate_team_keys' => 'setSurrogateTeamKeys',
        'dq_team_keys' => 'setDqTeamKeys'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'score' => 'getScore',
        'team_keys' => 'getTeamKeys',
        'surrogate_team_keys' => 'getSurrogateTeamKeys',
        'dq_team_keys' => 'getDqTeamKeys'
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
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['team_keys'] = isset($data['team_keys']) ? $data['team_keys'] : null;
        $this->container['surrogate_team_keys'] = isset($data['surrogate_team_keys']) ? $data['surrogate_team_keys'] : null;
        $this->container['dq_team_keys'] = isset($data['dq_team_keys']) ? $data['dq_team_keys'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['score'] === null) {
            $invalidProperties[] = "'score' can't be null";
        }
        if ($this->container['team_keys'] === null) {
            $invalidProperties[] = "'team_keys' can't be null";
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
     * Gets score
     *
     * @return int
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param int $score Score for this alliance. Will be null or -1 for an unplayed match.
     *
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets team_keys
     *
     * @return string[]
     */
    public function getTeamKeys()
    {
        return $this->container['team_keys'];
    }

    /**
     * Sets team_keys
     *
     * @param string[] $team_keys team_keys
     *
     * @return $this
     */
    public function setTeamKeys($team_keys)
    {
        $this->container['team_keys'] = $team_keys;

        return $this;
    }

    /**
     * Gets surrogate_team_keys
     *
     * @return string[]|null
     */
    public function getSurrogateTeamKeys()
    {
        return $this->container['surrogate_team_keys'];
    }

    /**
     * Sets surrogate_team_keys
     *
     * @param string[]|null $surrogate_team_keys TBA team keys (eg `frc254`) of any teams playing as a surrogate.
     *
     * @return $this
     */
    public function setSurrogateTeamKeys($surrogate_team_keys)
    {
        $this->container['surrogate_team_keys'] = $surrogate_team_keys;

        return $this;
    }

    /**
     * Gets dq_team_keys
     *
     * @return string[]|null
     */
    public function getDqTeamKeys()
    {
        return $this->container['dq_team_keys'];
    }

    /**
     * Sets dq_team_keys
     *
     * @param string[]|null $dq_team_keys TBA team keys (eg `frc254`) of any disqualified teams.
     *
     * @return $this
     */
    public function setDqTeamKeys($dq_team_keys)
    {
        $this->container['dq_team_keys'] = $dq_team_keys;

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


