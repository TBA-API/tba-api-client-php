<?php
/**
 * MatchScoreBreakdown2017Alliance
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
 * MatchScoreBreakdown2017Alliance Class Doc Comment
 *
 * @category Class
 * @package  TBAAPI\v3client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MatchScoreBreakdown2017Alliance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Match_Score_Breakdown_2017_Alliance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'auto_points' => 'int',
        'teleop_points' => 'int',
        'foul_points' => 'int',
        'adjust_points' => 'int',
        'total_points' => 'int',
        'robot1_auto' => 'string',
        'robot2_auto' => 'string',
        'robot3_auto' => 'string',
        'rotor1_auto' => 'bool',
        'rotor2_auto' => 'bool',
        'auto_fuel_low' => 'int',
        'auto_fuel_high' => 'int',
        'auto_mobility_points' => 'int',
        'auto_rotor_points' => 'int',
        'auto_fuel_points' => 'int',
        'teleop_fuel_points' => 'int',
        'teleop_fuel_low' => 'int',
        'teleop_fuel_high' => 'int',
        'teleop_rotor_points' => 'int',
        'k_pa_ranking_point_achieved' => 'bool',
        'teleop_takeoff_points' => 'int',
        'k_pa_bonus_points' => 'int',
        'rotor_bonus_points' => 'int',
        'rotor1_engaged' => 'bool',
        'rotor2_engaged' => 'bool',
        'rotor3_engaged' => 'bool',
        'rotor4_engaged' => 'bool',
        'rotor_ranking_point_achieved' => 'bool',
        'tech_foul_count' => 'int',
        'foul_count' => 'int',
        'touchpad_near' => 'string',
        'touchpad_middle' => 'string',
        'touchpad_far' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'auto_points' => null,
        'teleop_points' => null,
        'foul_points' => null,
        'adjust_points' => null,
        'total_points' => null,
        'robot1_auto' => null,
        'robot2_auto' => null,
        'robot3_auto' => null,
        'rotor1_auto' => null,
        'rotor2_auto' => null,
        'auto_fuel_low' => null,
        'auto_fuel_high' => null,
        'auto_mobility_points' => null,
        'auto_rotor_points' => null,
        'auto_fuel_points' => null,
        'teleop_fuel_points' => null,
        'teleop_fuel_low' => null,
        'teleop_fuel_high' => null,
        'teleop_rotor_points' => null,
        'k_pa_ranking_point_achieved' => null,
        'teleop_takeoff_points' => null,
        'k_pa_bonus_points' => null,
        'rotor_bonus_points' => null,
        'rotor1_engaged' => null,
        'rotor2_engaged' => null,
        'rotor3_engaged' => null,
        'rotor4_engaged' => null,
        'rotor_ranking_point_achieved' => null,
        'tech_foul_count' => null,
        'foul_count' => null,
        'touchpad_near' => null,
        'touchpad_middle' => null,
        'touchpad_far' => null
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
        'auto_points' => 'autoPoints',
        'teleop_points' => 'teleopPoints',
        'foul_points' => 'foulPoints',
        'adjust_points' => 'adjustPoints',
        'total_points' => 'totalPoints',
        'robot1_auto' => 'robot1Auto',
        'robot2_auto' => 'robot2Auto',
        'robot3_auto' => 'robot3Auto',
        'rotor1_auto' => 'rotor1Auto',
        'rotor2_auto' => 'rotor2Auto',
        'auto_fuel_low' => 'autoFuelLow',
        'auto_fuel_high' => 'autoFuelHigh',
        'auto_mobility_points' => 'autoMobilityPoints',
        'auto_rotor_points' => 'autoRotorPoints',
        'auto_fuel_points' => 'autoFuelPoints',
        'teleop_fuel_points' => 'teleopFuelPoints',
        'teleop_fuel_low' => 'teleopFuelLow',
        'teleop_fuel_high' => 'teleopFuelHigh',
        'teleop_rotor_points' => 'teleopRotorPoints',
        'k_pa_ranking_point_achieved' => 'kPaRankingPointAchieved',
        'teleop_takeoff_points' => 'teleopTakeoffPoints',
        'k_pa_bonus_points' => 'kPaBonusPoints',
        'rotor_bonus_points' => 'rotorBonusPoints',
        'rotor1_engaged' => 'rotor1Engaged',
        'rotor2_engaged' => 'rotor2Engaged',
        'rotor3_engaged' => 'rotor3Engaged',
        'rotor4_engaged' => 'rotor4Engaged',
        'rotor_ranking_point_achieved' => 'rotorRankingPointAchieved',
        'tech_foul_count' => 'techFoulCount',
        'foul_count' => 'foulCount',
        'touchpad_near' => 'touchpadNear',
        'touchpad_middle' => 'touchpadMiddle',
        'touchpad_far' => 'touchpadFar'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auto_points' => 'setAutoPoints',
        'teleop_points' => 'setTeleopPoints',
        'foul_points' => 'setFoulPoints',
        'adjust_points' => 'setAdjustPoints',
        'total_points' => 'setTotalPoints',
        'robot1_auto' => 'setRobot1Auto',
        'robot2_auto' => 'setRobot2Auto',
        'robot3_auto' => 'setRobot3Auto',
        'rotor1_auto' => 'setRotor1Auto',
        'rotor2_auto' => 'setRotor2Auto',
        'auto_fuel_low' => 'setAutoFuelLow',
        'auto_fuel_high' => 'setAutoFuelHigh',
        'auto_mobility_points' => 'setAutoMobilityPoints',
        'auto_rotor_points' => 'setAutoRotorPoints',
        'auto_fuel_points' => 'setAutoFuelPoints',
        'teleop_fuel_points' => 'setTeleopFuelPoints',
        'teleop_fuel_low' => 'setTeleopFuelLow',
        'teleop_fuel_high' => 'setTeleopFuelHigh',
        'teleop_rotor_points' => 'setTeleopRotorPoints',
        'k_pa_ranking_point_achieved' => 'setKPaRankingPointAchieved',
        'teleop_takeoff_points' => 'setTeleopTakeoffPoints',
        'k_pa_bonus_points' => 'setKPaBonusPoints',
        'rotor_bonus_points' => 'setRotorBonusPoints',
        'rotor1_engaged' => 'setRotor1Engaged',
        'rotor2_engaged' => 'setRotor2Engaged',
        'rotor3_engaged' => 'setRotor3Engaged',
        'rotor4_engaged' => 'setRotor4Engaged',
        'rotor_ranking_point_achieved' => 'setRotorRankingPointAchieved',
        'tech_foul_count' => 'setTechFoulCount',
        'foul_count' => 'setFoulCount',
        'touchpad_near' => 'setTouchpadNear',
        'touchpad_middle' => 'setTouchpadMiddle',
        'touchpad_far' => 'setTouchpadFar'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auto_points' => 'getAutoPoints',
        'teleop_points' => 'getTeleopPoints',
        'foul_points' => 'getFoulPoints',
        'adjust_points' => 'getAdjustPoints',
        'total_points' => 'getTotalPoints',
        'robot1_auto' => 'getRobot1Auto',
        'robot2_auto' => 'getRobot2Auto',
        'robot3_auto' => 'getRobot3Auto',
        'rotor1_auto' => 'getRotor1Auto',
        'rotor2_auto' => 'getRotor2Auto',
        'auto_fuel_low' => 'getAutoFuelLow',
        'auto_fuel_high' => 'getAutoFuelHigh',
        'auto_mobility_points' => 'getAutoMobilityPoints',
        'auto_rotor_points' => 'getAutoRotorPoints',
        'auto_fuel_points' => 'getAutoFuelPoints',
        'teleop_fuel_points' => 'getTeleopFuelPoints',
        'teleop_fuel_low' => 'getTeleopFuelLow',
        'teleop_fuel_high' => 'getTeleopFuelHigh',
        'teleop_rotor_points' => 'getTeleopRotorPoints',
        'k_pa_ranking_point_achieved' => 'getKPaRankingPointAchieved',
        'teleop_takeoff_points' => 'getTeleopTakeoffPoints',
        'k_pa_bonus_points' => 'getKPaBonusPoints',
        'rotor_bonus_points' => 'getRotorBonusPoints',
        'rotor1_engaged' => 'getRotor1Engaged',
        'rotor2_engaged' => 'getRotor2Engaged',
        'rotor3_engaged' => 'getRotor3Engaged',
        'rotor4_engaged' => 'getRotor4Engaged',
        'rotor_ranking_point_achieved' => 'getRotorRankingPointAchieved',
        'tech_foul_count' => 'getTechFoulCount',
        'foul_count' => 'getFoulCount',
        'touchpad_near' => 'getTouchpadNear',
        'touchpad_middle' => 'getTouchpadMiddle',
        'touchpad_far' => 'getTouchpadFar'
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

    const ROBOT1_AUTO_UNKNOWN = 'Unknown';
    const ROBOT1_AUTO_MOBILITY = 'Mobility';
    const ROBOT1_AUTO_NONE = 'None';
    const ROBOT2_AUTO_UNKNOWN = 'Unknown';
    const ROBOT2_AUTO_MOBILITY = 'Mobility';
    const ROBOT2_AUTO_NONE = 'None';
    const ROBOT3_AUTO_UNKNOWN = 'Unknown';
    const ROBOT3_AUTO_MOBILITY = 'Mobility';
    const ROBOT3_AUTO_NONE = 'None';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRobot1AutoAllowableValues()
    {
        return [
            self::ROBOT1_AUTO_UNKNOWN,
            self::ROBOT1_AUTO_MOBILITY,
            self::ROBOT1_AUTO_NONE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRobot2AutoAllowableValues()
    {
        return [
            self::ROBOT2_AUTO_UNKNOWN,
            self::ROBOT2_AUTO_MOBILITY,
            self::ROBOT2_AUTO_NONE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRobot3AutoAllowableValues()
    {
        return [
            self::ROBOT3_AUTO_UNKNOWN,
            self::ROBOT3_AUTO_MOBILITY,
            self::ROBOT3_AUTO_NONE,
        ];
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
        $this->container['auto_points'] = isset($data['auto_points']) ? $data['auto_points'] : null;
        $this->container['teleop_points'] = isset($data['teleop_points']) ? $data['teleop_points'] : null;
        $this->container['foul_points'] = isset($data['foul_points']) ? $data['foul_points'] : null;
        $this->container['adjust_points'] = isset($data['adjust_points']) ? $data['adjust_points'] : null;
        $this->container['total_points'] = isset($data['total_points']) ? $data['total_points'] : null;
        $this->container['robot1_auto'] = isset($data['robot1_auto']) ? $data['robot1_auto'] : null;
        $this->container['robot2_auto'] = isset($data['robot2_auto']) ? $data['robot2_auto'] : null;
        $this->container['robot3_auto'] = isset($data['robot3_auto']) ? $data['robot3_auto'] : null;
        $this->container['rotor1_auto'] = isset($data['rotor1_auto']) ? $data['rotor1_auto'] : null;
        $this->container['rotor2_auto'] = isset($data['rotor2_auto']) ? $data['rotor2_auto'] : null;
        $this->container['auto_fuel_low'] = isset($data['auto_fuel_low']) ? $data['auto_fuel_low'] : null;
        $this->container['auto_fuel_high'] = isset($data['auto_fuel_high']) ? $data['auto_fuel_high'] : null;
        $this->container['auto_mobility_points'] = isset($data['auto_mobility_points']) ? $data['auto_mobility_points'] : null;
        $this->container['auto_rotor_points'] = isset($data['auto_rotor_points']) ? $data['auto_rotor_points'] : null;
        $this->container['auto_fuel_points'] = isset($data['auto_fuel_points']) ? $data['auto_fuel_points'] : null;
        $this->container['teleop_fuel_points'] = isset($data['teleop_fuel_points']) ? $data['teleop_fuel_points'] : null;
        $this->container['teleop_fuel_low'] = isset($data['teleop_fuel_low']) ? $data['teleop_fuel_low'] : null;
        $this->container['teleop_fuel_high'] = isset($data['teleop_fuel_high']) ? $data['teleop_fuel_high'] : null;
        $this->container['teleop_rotor_points'] = isset($data['teleop_rotor_points']) ? $data['teleop_rotor_points'] : null;
        $this->container['k_pa_ranking_point_achieved'] = isset($data['k_pa_ranking_point_achieved']) ? $data['k_pa_ranking_point_achieved'] : null;
        $this->container['teleop_takeoff_points'] = isset($data['teleop_takeoff_points']) ? $data['teleop_takeoff_points'] : null;
        $this->container['k_pa_bonus_points'] = isset($data['k_pa_bonus_points']) ? $data['k_pa_bonus_points'] : null;
        $this->container['rotor_bonus_points'] = isset($data['rotor_bonus_points']) ? $data['rotor_bonus_points'] : null;
        $this->container['rotor1_engaged'] = isset($data['rotor1_engaged']) ? $data['rotor1_engaged'] : null;
        $this->container['rotor2_engaged'] = isset($data['rotor2_engaged']) ? $data['rotor2_engaged'] : null;
        $this->container['rotor3_engaged'] = isset($data['rotor3_engaged']) ? $data['rotor3_engaged'] : null;
        $this->container['rotor4_engaged'] = isset($data['rotor4_engaged']) ? $data['rotor4_engaged'] : null;
        $this->container['rotor_ranking_point_achieved'] = isset($data['rotor_ranking_point_achieved']) ? $data['rotor_ranking_point_achieved'] : null;
        $this->container['tech_foul_count'] = isset($data['tech_foul_count']) ? $data['tech_foul_count'] : null;
        $this->container['foul_count'] = isset($data['foul_count']) ? $data['foul_count'] : null;
        $this->container['touchpad_near'] = isset($data['touchpad_near']) ? $data['touchpad_near'] : null;
        $this->container['touchpad_middle'] = isset($data['touchpad_middle']) ? $data['touchpad_middle'] : null;
        $this->container['touchpad_far'] = isset($data['touchpad_far']) ? $data['touchpad_far'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRobot1AutoAllowableValues();
        if (!is_null($this->container['robot1_auto']) && !in_array($this->container['robot1_auto'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'robot1_auto', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRobot2AutoAllowableValues();
        if (!is_null($this->container['robot2_auto']) && !in_array($this->container['robot2_auto'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'robot2_auto', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRobot3AutoAllowableValues();
        if (!is_null($this->container['robot3_auto']) && !in_array($this->container['robot3_auto'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'robot3_auto', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets auto_points
     *
     * @return int|null
     */
    public function getAutoPoints()
    {
        return $this->container['auto_points'];
    }

    /**
     * Sets auto_points
     *
     * @param int|null $auto_points auto_points
     *
     * @return $this
     */
    public function setAutoPoints($auto_points)
    {
        $this->container['auto_points'] = $auto_points;

        return $this;
    }

    /**
     * Gets teleop_points
     *
     * @return int|null
     */
    public function getTeleopPoints()
    {
        return $this->container['teleop_points'];
    }

    /**
     * Sets teleop_points
     *
     * @param int|null $teleop_points teleop_points
     *
     * @return $this
     */
    public function setTeleopPoints($teleop_points)
    {
        $this->container['teleop_points'] = $teleop_points;

        return $this;
    }

    /**
     * Gets foul_points
     *
     * @return int|null
     */
    public function getFoulPoints()
    {
        return $this->container['foul_points'];
    }

    /**
     * Sets foul_points
     *
     * @param int|null $foul_points foul_points
     *
     * @return $this
     */
    public function setFoulPoints($foul_points)
    {
        $this->container['foul_points'] = $foul_points;

        return $this;
    }

    /**
     * Gets adjust_points
     *
     * @return int|null
     */
    public function getAdjustPoints()
    {
        return $this->container['adjust_points'];
    }

    /**
     * Sets adjust_points
     *
     * @param int|null $adjust_points adjust_points
     *
     * @return $this
     */
    public function setAdjustPoints($adjust_points)
    {
        $this->container['adjust_points'] = $adjust_points;

        return $this;
    }

    /**
     * Gets total_points
     *
     * @return int|null
     */
    public function getTotalPoints()
    {
        return $this->container['total_points'];
    }

    /**
     * Sets total_points
     *
     * @param int|null $total_points total_points
     *
     * @return $this
     */
    public function setTotalPoints($total_points)
    {
        $this->container['total_points'] = $total_points;

        return $this;
    }

    /**
     * Gets robot1_auto
     *
     * @return string|null
     */
    public function getRobot1Auto()
    {
        return $this->container['robot1_auto'];
    }

    /**
     * Sets robot1_auto
     *
     * @param string|null $robot1_auto robot1_auto
     *
     * @return $this
     */
    public function setRobot1Auto($robot1_auto)
    {
        $allowedValues = $this->getRobot1AutoAllowableValues();
        if (!is_null($robot1_auto) && !in_array($robot1_auto, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'robot1_auto', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['robot1_auto'] = $robot1_auto;

        return $this;
    }

    /**
     * Gets robot2_auto
     *
     * @return string|null
     */
    public function getRobot2Auto()
    {
        return $this->container['robot2_auto'];
    }

    /**
     * Sets robot2_auto
     *
     * @param string|null $robot2_auto robot2_auto
     *
     * @return $this
     */
    public function setRobot2Auto($robot2_auto)
    {
        $allowedValues = $this->getRobot2AutoAllowableValues();
        if (!is_null($robot2_auto) && !in_array($robot2_auto, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'robot2_auto', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['robot2_auto'] = $robot2_auto;

        return $this;
    }

    /**
     * Gets robot3_auto
     *
     * @return string|null
     */
    public function getRobot3Auto()
    {
        return $this->container['robot3_auto'];
    }

    /**
     * Sets robot3_auto
     *
     * @param string|null $robot3_auto robot3_auto
     *
     * @return $this
     */
    public function setRobot3Auto($robot3_auto)
    {
        $allowedValues = $this->getRobot3AutoAllowableValues();
        if (!is_null($robot3_auto) && !in_array($robot3_auto, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'robot3_auto', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['robot3_auto'] = $robot3_auto;

        return $this;
    }

    /**
     * Gets rotor1_auto
     *
     * @return bool|null
     */
    public function getRotor1Auto()
    {
        return $this->container['rotor1_auto'];
    }

    /**
     * Sets rotor1_auto
     *
     * @param bool|null $rotor1_auto rotor1_auto
     *
     * @return $this
     */
    public function setRotor1Auto($rotor1_auto)
    {
        $this->container['rotor1_auto'] = $rotor1_auto;

        return $this;
    }

    /**
     * Gets rotor2_auto
     *
     * @return bool|null
     */
    public function getRotor2Auto()
    {
        return $this->container['rotor2_auto'];
    }

    /**
     * Sets rotor2_auto
     *
     * @param bool|null $rotor2_auto rotor2_auto
     *
     * @return $this
     */
    public function setRotor2Auto($rotor2_auto)
    {
        $this->container['rotor2_auto'] = $rotor2_auto;

        return $this;
    }

    /**
     * Gets auto_fuel_low
     *
     * @return int|null
     */
    public function getAutoFuelLow()
    {
        return $this->container['auto_fuel_low'];
    }

    /**
     * Sets auto_fuel_low
     *
     * @param int|null $auto_fuel_low auto_fuel_low
     *
     * @return $this
     */
    public function setAutoFuelLow($auto_fuel_low)
    {
        $this->container['auto_fuel_low'] = $auto_fuel_low;

        return $this;
    }

    /**
     * Gets auto_fuel_high
     *
     * @return int|null
     */
    public function getAutoFuelHigh()
    {
        return $this->container['auto_fuel_high'];
    }

    /**
     * Sets auto_fuel_high
     *
     * @param int|null $auto_fuel_high auto_fuel_high
     *
     * @return $this
     */
    public function setAutoFuelHigh($auto_fuel_high)
    {
        $this->container['auto_fuel_high'] = $auto_fuel_high;

        return $this;
    }

    /**
     * Gets auto_mobility_points
     *
     * @return int|null
     */
    public function getAutoMobilityPoints()
    {
        return $this->container['auto_mobility_points'];
    }

    /**
     * Sets auto_mobility_points
     *
     * @param int|null $auto_mobility_points auto_mobility_points
     *
     * @return $this
     */
    public function setAutoMobilityPoints($auto_mobility_points)
    {
        $this->container['auto_mobility_points'] = $auto_mobility_points;

        return $this;
    }

    /**
     * Gets auto_rotor_points
     *
     * @return int|null
     */
    public function getAutoRotorPoints()
    {
        return $this->container['auto_rotor_points'];
    }

    /**
     * Sets auto_rotor_points
     *
     * @param int|null $auto_rotor_points auto_rotor_points
     *
     * @return $this
     */
    public function setAutoRotorPoints($auto_rotor_points)
    {
        $this->container['auto_rotor_points'] = $auto_rotor_points;

        return $this;
    }

    /**
     * Gets auto_fuel_points
     *
     * @return int|null
     */
    public function getAutoFuelPoints()
    {
        return $this->container['auto_fuel_points'];
    }

    /**
     * Sets auto_fuel_points
     *
     * @param int|null $auto_fuel_points auto_fuel_points
     *
     * @return $this
     */
    public function setAutoFuelPoints($auto_fuel_points)
    {
        $this->container['auto_fuel_points'] = $auto_fuel_points;

        return $this;
    }

    /**
     * Gets teleop_fuel_points
     *
     * @return int|null
     */
    public function getTeleopFuelPoints()
    {
        return $this->container['teleop_fuel_points'];
    }

    /**
     * Sets teleop_fuel_points
     *
     * @param int|null $teleop_fuel_points teleop_fuel_points
     *
     * @return $this
     */
    public function setTeleopFuelPoints($teleop_fuel_points)
    {
        $this->container['teleop_fuel_points'] = $teleop_fuel_points;

        return $this;
    }

    /**
     * Gets teleop_fuel_low
     *
     * @return int|null
     */
    public function getTeleopFuelLow()
    {
        return $this->container['teleop_fuel_low'];
    }

    /**
     * Sets teleop_fuel_low
     *
     * @param int|null $teleop_fuel_low teleop_fuel_low
     *
     * @return $this
     */
    public function setTeleopFuelLow($teleop_fuel_low)
    {
        $this->container['teleop_fuel_low'] = $teleop_fuel_low;

        return $this;
    }

    /**
     * Gets teleop_fuel_high
     *
     * @return int|null
     */
    public function getTeleopFuelHigh()
    {
        return $this->container['teleop_fuel_high'];
    }

    /**
     * Sets teleop_fuel_high
     *
     * @param int|null $teleop_fuel_high teleop_fuel_high
     *
     * @return $this
     */
    public function setTeleopFuelHigh($teleop_fuel_high)
    {
        $this->container['teleop_fuel_high'] = $teleop_fuel_high;

        return $this;
    }

    /**
     * Gets teleop_rotor_points
     *
     * @return int|null
     */
    public function getTeleopRotorPoints()
    {
        return $this->container['teleop_rotor_points'];
    }

    /**
     * Sets teleop_rotor_points
     *
     * @param int|null $teleop_rotor_points teleop_rotor_points
     *
     * @return $this
     */
    public function setTeleopRotorPoints($teleop_rotor_points)
    {
        $this->container['teleop_rotor_points'] = $teleop_rotor_points;

        return $this;
    }

    /**
     * Gets k_pa_ranking_point_achieved
     *
     * @return bool|null
     */
    public function getKPaRankingPointAchieved()
    {
        return $this->container['k_pa_ranking_point_achieved'];
    }

    /**
     * Sets k_pa_ranking_point_achieved
     *
     * @param bool|null $k_pa_ranking_point_achieved k_pa_ranking_point_achieved
     *
     * @return $this
     */
    public function setKPaRankingPointAchieved($k_pa_ranking_point_achieved)
    {
        $this->container['k_pa_ranking_point_achieved'] = $k_pa_ranking_point_achieved;

        return $this;
    }

    /**
     * Gets teleop_takeoff_points
     *
     * @return int|null
     */
    public function getTeleopTakeoffPoints()
    {
        return $this->container['teleop_takeoff_points'];
    }

    /**
     * Sets teleop_takeoff_points
     *
     * @param int|null $teleop_takeoff_points teleop_takeoff_points
     *
     * @return $this
     */
    public function setTeleopTakeoffPoints($teleop_takeoff_points)
    {
        $this->container['teleop_takeoff_points'] = $teleop_takeoff_points;

        return $this;
    }

    /**
     * Gets k_pa_bonus_points
     *
     * @return int|null
     */
    public function getKPaBonusPoints()
    {
        return $this->container['k_pa_bonus_points'];
    }

    /**
     * Sets k_pa_bonus_points
     *
     * @param int|null $k_pa_bonus_points k_pa_bonus_points
     *
     * @return $this
     */
    public function setKPaBonusPoints($k_pa_bonus_points)
    {
        $this->container['k_pa_bonus_points'] = $k_pa_bonus_points;

        return $this;
    }

    /**
     * Gets rotor_bonus_points
     *
     * @return int|null
     */
    public function getRotorBonusPoints()
    {
        return $this->container['rotor_bonus_points'];
    }

    /**
     * Sets rotor_bonus_points
     *
     * @param int|null $rotor_bonus_points rotor_bonus_points
     *
     * @return $this
     */
    public function setRotorBonusPoints($rotor_bonus_points)
    {
        $this->container['rotor_bonus_points'] = $rotor_bonus_points;

        return $this;
    }

    /**
     * Gets rotor1_engaged
     *
     * @return bool|null
     */
    public function getRotor1Engaged()
    {
        return $this->container['rotor1_engaged'];
    }

    /**
     * Sets rotor1_engaged
     *
     * @param bool|null $rotor1_engaged rotor1_engaged
     *
     * @return $this
     */
    public function setRotor1Engaged($rotor1_engaged)
    {
        $this->container['rotor1_engaged'] = $rotor1_engaged;

        return $this;
    }

    /**
     * Gets rotor2_engaged
     *
     * @return bool|null
     */
    public function getRotor2Engaged()
    {
        return $this->container['rotor2_engaged'];
    }

    /**
     * Sets rotor2_engaged
     *
     * @param bool|null $rotor2_engaged rotor2_engaged
     *
     * @return $this
     */
    public function setRotor2Engaged($rotor2_engaged)
    {
        $this->container['rotor2_engaged'] = $rotor2_engaged;

        return $this;
    }

    /**
     * Gets rotor3_engaged
     *
     * @return bool|null
     */
    public function getRotor3Engaged()
    {
        return $this->container['rotor3_engaged'];
    }

    /**
     * Sets rotor3_engaged
     *
     * @param bool|null $rotor3_engaged rotor3_engaged
     *
     * @return $this
     */
    public function setRotor3Engaged($rotor3_engaged)
    {
        $this->container['rotor3_engaged'] = $rotor3_engaged;

        return $this;
    }

    /**
     * Gets rotor4_engaged
     *
     * @return bool|null
     */
    public function getRotor4Engaged()
    {
        return $this->container['rotor4_engaged'];
    }

    /**
     * Sets rotor4_engaged
     *
     * @param bool|null $rotor4_engaged rotor4_engaged
     *
     * @return $this
     */
    public function setRotor4Engaged($rotor4_engaged)
    {
        $this->container['rotor4_engaged'] = $rotor4_engaged;

        return $this;
    }

    /**
     * Gets rotor_ranking_point_achieved
     *
     * @return bool|null
     */
    public function getRotorRankingPointAchieved()
    {
        return $this->container['rotor_ranking_point_achieved'];
    }

    /**
     * Sets rotor_ranking_point_achieved
     *
     * @param bool|null $rotor_ranking_point_achieved rotor_ranking_point_achieved
     *
     * @return $this
     */
    public function setRotorRankingPointAchieved($rotor_ranking_point_achieved)
    {
        $this->container['rotor_ranking_point_achieved'] = $rotor_ranking_point_achieved;

        return $this;
    }

    /**
     * Gets tech_foul_count
     *
     * @return int|null
     */
    public function getTechFoulCount()
    {
        return $this->container['tech_foul_count'];
    }

    /**
     * Sets tech_foul_count
     *
     * @param int|null $tech_foul_count tech_foul_count
     *
     * @return $this
     */
    public function setTechFoulCount($tech_foul_count)
    {
        $this->container['tech_foul_count'] = $tech_foul_count;

        return $this;
    }

    /**
     * Gets foul_count
     *
     * @return int|null
     */
    public function getFoulCount()
    {
        return $this->container['foul_count'];
    }

    /**
     * Sets foul_count
     *
     * @param int|null $foul_count foul_count
     *
     * @return $this
     */
    public function setFoulCount($foul_count)
    {
        $this->container['foul_count'] = $foul_count;

        return $this;
    }

    /**
     * Gets touchpad_near
     *
     * @return string|null
     */
    public function getTouchpadNear()
    {
        return $this->container['touchpad_near'];
    }

    /**
     * Sets touchpad_near
     *
     * @param string|null $touchpad_near touchpad_near
     *
     * @return $this
     */
    public function setTouchpadNear($touchpad_near)
    {
        $this->container['touchpad_near'] = $touchpad_near;

        return $this;
    }

    /**
     * Gets touchpad_middle
     *
     * @return string|null
     */
    public function getTouchpadMiddle()
    {
        return $this->container['touchpad_middle'];
    }

    /**
     * Sets touchpad_middle
     *
     * @param string|null $touchpad_middle touchpad_middle
     *
     * @return $this
     */
    public function setTouchpadMiddle($touchpad_middle)
    {
        $this->container['touchpad_middle'] = $touchpad_middle;

        return $this;
    }

    /**
     * Gets touchpad_far
     *
     * @return string|null
     */
    public function getTouchpadFar()
    {
        return $this->container['touchpad_far'];
    }

    /**
     * Sets touchpad_far
     *
     * @param string|null $touchpad_far touchpad_far
     *
     * @return $this
     */
    public function setTouchpadFar($touchpad_far)
    {
        $this->container['touchpad_far'] = $touchpad_far;

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


