<?php
/**
 * EventInsights2016
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
 * EventInsights2016 Class Doc Comment
 *
 * @category Class
 * @description Insights for FIRST Stronghold qualification and elimination matches.
 * @package  TBA-API\v3client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EventInsights2016 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Event_Insights_2016';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'low_bar' => 'float[]',
        'a_cheval_de_frise' => 'float[]',
        'a_portcullis' => 'float[]',
        'b_ramparts' => 'float[]',
        'b_moat' => 'float[]',
        'c_sally_port' => 'float[]',
        'c_drawbridge' => 'float[]',
        'd_rough_terrain' => 'float[]',
        'd_rock_wall' => 'float[]',
        'average_high_goals' => 'float',
        'average_low_goals' => 'float',
        'breaches' => 'float[]',
        'scales' => 'float[]',
        'challenges' => 'float[]',
        'captures' => 'float[]',
        'average_win_score' => 'float',
        'average_win_margin' => 'float',
        'average_score' => 'float',
        'average_auto_score' => 'float',
        'average_crossing_score' => 'float',
        'average_boulder_score' => 'float',
        'average_tower_score' => 'float',
        'average_foul_score' => 'float',
        'high_score' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'low_bar' => 'float',
        'a_cheval_de_frise' => 'float',
        'a_portcullis' => 'float',
        'b_ramparts' => 'float',
        'b_moat' => 'float',
        'c_sally_port' => 'float',
        'c_drawbridge' => 'float',
        'd_rough_terrain' => 'float',
        'd_rock_wall' => 'float',
        'average_high_goals' => 'float',
        'average_low_goals' => 'float',
        'breaches' => 'float',
        'scales' => 'float',
        'challenges' => 'float',
        'captures' => 'float',
        'average_win_score' => 'float',
        'average_win_margin' => 'float',
        'average_score' => 'float',
        'average_auto_score' => 'float',
        'average_crossing_score' => 'float',
        'average_boulder_score' => 'float',
        'average_tower_score' => 'float',
        'average_foul_score' => 'float',
        'high_score' => null
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
        'low_bar' => 'LowBar',
        'a_cheval_de_frise' => 'A_ChevalDeFrise',
        'a_portcullis' => 'A_Portcullis',
        'b_ramparts' => 'B_Ramparts',
        'b_moat' => 'B_Moat',
        'c_sally_port' => 'C_SallyPort',
        'c_drawbridge' => 'C_Drawbridge',
        'd_rough_terrain' => 'D_RoughTerrain',
        'd_rock_wall' => 'D_RockWall',
        'average_high_goals' => 'average_high_goals',
        'average_low_goals' => 'average_low_goals',
        'breaches' => 'breaches',
        'scales' => 'scales',
        'challenges' => 'challenges',
        'captures' => 'captures',
        'average_win_score' => 'average_win_score',
        'average_win_margin' => 'average_win_margin',
        'average_score' => 'average_score',
        'average_auto_score' => 'average_auto_score',
        'average_crossing_score' => 'average_crossing_score',
        'average_boulder_score' => 'average_boulder_score',
        'average_tower_score' => 'average_tower_score',
        'average_foul_score' => 'average_foul_score',
        'high_score' => 'high_score'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'low_bar' => 'setLowBar',
        'a_cheval_de_frise' => 'setAChevalDeFrise',
        'a_portcullis' => 'setAPortcullis',
        'b_ramparts' => 'setBRamparts',
        'b_moat' => 'setBMoat',
        'c_sally_port' => 'setCSallyPort',
        'c_drawbridge' => 'setCDrawbridge',
        'd_rough_terrain' => 'setDRoughTerrain',
        'd_rock_wall' => 'setDRockWall',
        'average_high_goals' => 'setAverageHighGoals',
        'average_low_goals' => 'setAverageLowGoals',
        'breaches' => 'setBreaches',
        'scales' => 'setScales',
        'challenges' => 'setChallenges',
        'captures' => 'setCaptures',
        'average_win_score' => 'setAverageWinScore',
        'average_win_margin' => 'setAverageWinMargin',
        'average_score' => 'setAverageScore',
        'average_auto_score' => 'setAverageAutoScore',
        'average_crossing_score' => 'setAverageCrossingScore',
        'average_boulder_score' => 'setAverageBoulderScore',
        'average_tower_score' => 'setAverageTowerScore',
        'average_foul_score' => 'setAverageFoulScore',
        'high_score' => 'setHighScore'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'low_bar' => 'getLowBar',
        'a_cheval_de_frise' => 'getAChevalDeFrise',
        'a_portcullis' => 'getAPortcullis',
        'b_ramparts' => 'getBRamparts',
        'b_moat' => 'getBMoat',
        'c_sally_port' => 'getCSallyPort',
        'c_drawbridge' => 'getCDrawbridge',
        'd_rough_terrain' => 'getDRoughTerrain',
        'd_rock_wall' => 'getDRockWall',
        'average_high_goals' => 'getAverageHighGoals',
        'average_low_goals' => 'getAverageLowGoals',
        'breaches' => 'getBreaches',
        'scales' => 'getScales',
        'challenges' => 'getChallenges',
        'captures' => 'getCaptures',
        'average_win_score' => 'getAverageWinScore',
        'average_win_margin' => 'getAverageWinMargin',
        'average_score' => 'getAverageScore',
        'average_auto_score' => 'getAverageAutoScore',
        'average_crossing_score' => 'getAverageCrossingScore',
        'average_boulder_score' => 'getAverageBoulderScore',
        'average_tower_score' => 'getAverageTowerScore',
        'average_foul_score' => 'getAverageFoulScore',
        'high_score' => 'getHighScore'
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
        $this->container['low_bar'] = isset($data['low_bar']) ? $data['low_bar'] : null;
        $this->container['a_cheval_de_frise'] = isset($data['a_cheval_de_frise']) ? $data['a_cheval_de_frise'] : null;
        $this->container['a_portcullis'] = isset($data['a_portcullis']) ? $data['a_portcullis'] : null;
        $this->container['b_ramparts'] = isset($data['b_ramparts']) ? $data['b_ramparts'] : null;
        $this->container['b_moat'] = isset($data['b_moat']) ? $data['b_moat'] : null;
        $this->container['c_sally_port'] = isset($data['c_sally_port']) ? $data['c_sally_port'] : null;
        $this->container['c_drawbridge'] = isset($data['c_drawbridge']) ? $data['c_drawbridge'] : null;
        $this->container['d_rough_terrain'] = isset($data['d_rough_terrain']) ? $data['d_rough_terrain'] : null;
        $this->container['d_rock_wall'] = isset($data['d_rock_wall']) ? $data['d_rock_wall'] : null;
        $this->container['average_high_goals'] = isset($data['average_high_goals']) ? $data['average_high_goals'] : null;
        $this->container['average_low_goals'] = isset($data['average_low_goals']) ? $data['average_low_goals'] : null;
        $this->container['breaches'] = isset($data['breaches']) ? $data['breaches'] : null;
        $this->container['scales'] = isset($data['scales']) ? $data['scales'] : null;
        $this->container['challenges'] = isset($data['challenges']) ? $data['challenges'] : null;
        $this->container['captures'] = isset($data['captures']) ? $data['captures'] : null;
        $this->container['average_win_score'] = isset($data['average_win_score']) ? $data['average_win_score'] : null;
        $this->container['average_win_margin'] = isset($data['average_win_margin']) ? $data['average_win_margin'] : null;
        $this->container['average_score'] = isset($data['average_score']) ? $data['average_score'] : null;
        $this->container['average_auto_score'] = isset($data['average_auto_score']) ? $data['average_auto_score'] : null;
        $this->container['average_crossing_score'] = isset($data['average_crossing_score']) ? $data['average_crossing_score'] : null;
        $this->container['average_boulder_score'] = isset($data['average_boulder_score']) ? $data['average_boulder_score'] : null;
        $this->container['average_tower_score'] = isset($data['average_tower_score']) ? $data['average_tower_score'] : null;
        $this->container['average_foul_score'] = isset($data['average_foul_score']) ? $data['average_foul_score'] : null;
        $this->container['high_score'] = isset($data['high_score']) ? $data['high_score'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['low_bar'] === null) {
            $invalidProperties[] = "'low_bar' can't be null";
        }
        if ($this->container['a_cheval_de_frise'] === null) {
            $invalidProperties[] = "'a_cheval_de_frise' can't be null";
        }
        if ($this->container['a_portcullis'] === null) {
            $invalidProperties[] = "'a_portcullis' can't be null";
        }
        if ($this->container['b_ramparts'] === null) {
            $invalidProperties[] = "'b_ramparts' can't be null";
        }
        if ($this->container['b_moat'] === null) {
            $invalidProperties[] = "'b_moat' can't be null";
        }
        if ($this->container['c_sally_port'] === null) {
            $invalidProperties[] = "'c_sally_port' can't be null";
        }
        if ($this->container['c_drawbridge'] === null) {
            $invalidProperties[] = "'c_drawbridge' can't be null";
        }
        if ($this->container['d_rough_terrain'] === null) {
            $invalidProperties[] = "'d_rough_terrain' can't be null";
        }
        if ($this->container['d_rock_wall'] === null) {
            $invalidProperties[] = "'d_rock_wall' can't be null";
        }
        if ($this->container['average_high_goals'] === null) {
            $invalidProperties[] = "'average_high_goals' can't be null";
        }
        if ($this->container['average_low_goals'] === null) {
            $invalidProperties[] = "'average_low_goals' can't be null";
        }
        if ($this->container['breaches'] === null) {
            $invalidProperties[] = "'breaches' can't be null";
        }
        if ($this->container['scales'] === null) {
            $invalidProperties[] = "'scales' can't be null";
        }
        if ($this->container['challenges'] === null) {
            $invalidProperties[] = "'challenges' can't be null";
        }
        if ($this->container['captures'] === null) {
            $invalidProperties[] = "'captures' can't be null";
        }
        if ($this->container['average_win_score'] === null) {
            $invalidProperties[] = "'average_win_score' can't be null";
        }
        if ($this->container['average_win_margin'] === null) {
            $invalidProperties[] = "'average_win_margin' can't be null";
        }
        if ($this->container['average_score'] === null) {
            $invalidProperties[] = "'average_score' can't be null";
        }
        if ($this->container['average_auto_score'] === null) {
            $invalidProperties[] = "'average_auto_score' can't be null";
        }
        if ($this->container['average_crossing_score'] === null) {
            $invalidProperties[] = "'average_crossing_score' can't be null";
        }
        if ($this->container['average_boulder_score'] === null) {
            $invalidProperties[] = "'average_boulder_score' can't be null";
        }
        if ($this->container['average_tower_score'] === null) {
            $invalidProperties[] = "'average_tower_score' can't be null";
        }
        if ($this->container['average_foul_score'] === null) {
            $invalidProperties[] = "'average_foul_score' can't be null";
        }
        if ($this->container['high_score'] === null) {
            $invalidProperties[] = "'high_score' can't be null";
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
     * Gets low_bar
     *
     * @return float[]
     */
    public function getLowBar()
    {
        return $this->container['low_bar'];
    }

    /**
     * Sets low_bar
     *
     * @param float[] $low_bar For the Low Bar - An array with three values, number of times damaged, number of opportunities to damage, and percentage.
     *
     * @return $this
     */
    public function setLowBar($low_bar)
    {
        $this->container['low_bar'] = $low_bar;

        return $this;
    }

    /**
     * Gets a_cheval_de_frise
     *
     * @return float[]
     */
    public function getAChevalDeFrise()
    {
        return $this->container['a_cheval_de_frise'];
    }

    /**
     * Sets a_cheval_de_frise
     *
     * @param float[] $a_cheval_de_frise For the Cheval De Frise - An array with three values, number of times damaged, number of opportunities to damage, and percentage.
     *
     * @return $this
     */
    public function setAChevalDeFrise($a_cheval_de_frise)
    {
        $this->container['a_cheval_de_frise'] = $a_cheval_de_frise;

        return $this;
    }

    /**
     * Gets a_portcullis
     *
     * @return float[]
     */
    public function getAPortcullis()
    {
        return $this->container['a_portcullis'];
    }

    /**
     * Sets a_portcullis
     *
     * @param float[] $a_portcullis For the Portcullis - An array with three values, number of times damaged, number of opportunities to damage, and percentage.
     *
     * @return $this
     */
    public function setAPortcullis($a_portcullis)
    {
        $this->container['a_portcullis'] = $a_portcullis;

        return $this;
    }

    /**
     * Gets b_ramparts
     *
     * @return float[]
     */
    public function getBRamparts()
    {
        return $this->container['b_ramparts'];
    }

    /**
     * Sets b_ramparts
     *
     * @param float[] $b_ramparts For the Ramparts - An array with three values, number of times damaged, number of opportunities to damage, and percentage.
     *
     * @return $this
     */
    public function setBRamparts($b_ramparts)
    {
        $this->container['b_ramparts'] = $b_ramparts;

        return $this;
    }

    /**
     * Gets b_moat
     *
     * @return float[]
     */
    public function getBMoat()
    {
        return $this->container['b_moat'];
    }

    /**
     * Sets b_moat
     *
     * @param float[] $b_moat For the Moat - An array with three values, number of times damaged, number of opportunities to damage, and percentage.
     *
     * @return $this
     */
    public function setBMoat($b_moat)
    {
        $this->container['b_moat'] = $b_moat;

        return $this;
    }

    /**
     * Gets c_sally_port
     *
     * @return float[]
     */
    public function getCSallyPort()
    {
        return $this->container['c_sally_port'];
    }

    /**
     * Sets c_sally_port
     *
     * @param float[] $c_sally_port For the Sally Port - An array with three values, number of times damaged, number of opportunities to damage, and percentage.
     *
     * @return $this
     */
    public function setCSallyPort($c_sally_port)
    {
        $this->container['c_sally_port'] = $c_sally_port;

        return $this;
    }

    /**
     * Gets c_drawbridge
     *
     * @return float[]
     */
    public function getCDrawbridge()
    {
        return $this->container['c_drawbridge'];
    }

    /**
     * Sets c_drawbridge
     *
     * @param float[] $c_drawbridge For the Drawbridge - An array with three values, number of times damaged, number of opportunities to damage, and percentage.
     *
     * @return $this
     */
    public function setCDrawbridge($c_drawbridge)
    {
        $this->container['c_drawbridge'] = $c_drawbridge;

        return $this;
    }

    /**
     * Gets d_rough_terrain
     *
     * @return float[]
     */
    public function getDRoughTerrain()
    {
        return $this->container['d_rough_terrain'];
    }

    /**
     * Sets d_rough_terrain
     *
     * @param float[] $d_rough_terrain For the Rough Terrain - An array with three values, number of times damaged, number of opportunities to damage, and percentage.
     *
     * @return $this
     */
    public function setDRoughTerrain($d_rough_terrain)
    {
        $this->container['d_rough_terrain'] = $d_rough_terrain;

        return $this;
    }

    /**
     * Gets d_rock_wall
     *
     * @return float[]
     */
    public function getDRockWall()
    {
        return $this->container['d_rock_wall'];
    }

    /**
     * Sets d_rock_wall
     *
     * @param float[] $d_rock_wall For the Rock Wall - An array with three values, number of times damaged, number of opportunities to damage, and percentage.
     *
     * @return $this
     */
    public function setDRockWall($d_rock_wall)
    {
        $this->container['d_rock_wall'] = $d_rock_wall;

        return $this;
    }

    /**
     * Gets average_high_goals
     *
     * @return float
     */
    public function getAverageHighGoals()
    {
        return $this->container['average_high_goals'];
    }

    /**
     * Sets average_high_goals
     *
     * @param float $average_high_goals Average number of high goals scored.
     *
     * @return $this
     */
    public function setAverageHighGoals($average_high_goals)
    {
        $this->container['average_high_goals'] = $average_high_goals;

        return $this;
    }

    /**
     * Gets average_low_goals
     *
     * @return float
     */
    public function getAverageLowGoals()
    {
        return $this->container['average_low_goals'];
    }

    /**
     * Sets average_low_goals
     *
     * @param float $average_low_goals Average number of low goals scored.
     *
     * @return $this
     */
    public function setAverageLowGoals($average_low_goals)
    {
        $this->container['average_low_goals'] = $average_low_goals;

        return $this;
    }

    /**
     * Gets breaches
     *
     * @return float[]
     */
    public function getBreaches()
    {
        return $this->container['breaches'];
    }

    /**
     * Sets breaches
     *
     * @param float[] $breaches An array with three values, number of times breached, number of opportunities to breach, and percentage.
     *
     * @return $this
     */
    public function setBreaches($breaches)
    {
        $this->container['breaches'] = $breaches;

        return $this;
    }

    /**
     * Gets scales
     *
     * @return float[]
     */
    public function getScales()
    {
        return $this->container['scales'];
    }

    /**
     * Sets scales
     *
     * @param float[] $scales An array with three values, number of times scaled, number of opportunities to scale, and percentage.
     *
     * @return $this
     */
    public function setScales($scales)
    {
        $this->container['scales'] = $scales;

        return $this;
    }

    /**
     * Gets challenges
     *
     * @return float[]
     */
    public function getChallenges()
    {
        return $this->container['challenges'];
    }

    /**
     * Sets challenges
     *
     * @param float[] $challenges An array with three values, number of times challenged, number of opportunities to challenge, and percentage.
     *
     * @return $this
     */
    public function setChallenges($challenges)
    {
        $this->container['challenges'] = $challenges;

        return $this;
    }

    /**
     * Gets captures
     *
     * @return float[]
     */
    public function getCaptures()
    {
        return $this->container['captures'];
    }

    /**
     * Sets captures
     *
     * @param float[] $captures An array with three values, number of times captured, number of opportunities to capture, and percentage.
     *
     * @return $this
     */
    public function setCaptures($captures)
    {
        $this->container['captures'] = $captures;

        return $this;
    }

    /**
     * Gets average_win_score
     *
     * @return float
     */
    public function getAverageWinScore()
    {
        return $this->container['average_win_score'];
    }

    /**
     * Sets average_win_score
     *
     * @param float $average_win_score Average winning score.
     *
     * @return $this
     */
    public function setAverageWinScore($average_win_score)
    {
        $this->container['average_win_score'] = $average_win_score;

        return $this;
    }

    /**
     * Gets average_win_margin
     *
     * @return float
     */
    public function getAverageWinMargin()
    {
        return $this->container['average_win_margin'];
    }

    /**
     * Sets average_win_margin
     *
     * @param float $average_win_margin Average margin of victory.
     *
     * @return $this
     */
    public function setAverageWinMargin($average_win_margin)
    {
        $this->container['average_win_margin'] = $average_win_margin;

        return $this;
    }

    /**
     * Gets average_score
     *
     * @return float
     */
    public function getAverageScore()
    {
        return $this->container['average_score'];
    }

    /**
     * Sets average_score
     *
     * @param float $average_score Average total score.
     *
     * @return $this
     */
    public function setAverageScore($average_score)
    {
        $this->container['average_score'] = $average_score;

        return $this;
    }

    /**
     * Gets average_auto_score
     *
     * @return float
     */
    public function getAverageAutoScore()
    {
        return $this->container['average_auto_score'];
    }

    /**
     * Sets average_auto_score
     *
     * @param float $average_auto_score Average autonomous score.
     *
     * @return $this
     */
    public function setAverageAutoScore($average_auto_score)
    {
        $this->container['average_auto_score'] = $average_auto_score;

        return $this;
    }

    /**
     * Gets average_crossing_score
     *
     * @return float
     */
    public function getAverageCrossingScore()
    {
        return $this->container['average_crossing_score'];
    }

    /**
     * Sets average_crossing_score
     *
     * @param float $average_crossing_score Average crossing score.
     *
     * @return $this
     */
    public function setAverageCrossingScore($average_crossing_score)
    {
        $this->container['average_crossing_score'] = $average_crossing_score;

        return $this;
    }

    /**
     * Gets average_boulder_score
     *
     * @return float
     */
    public function getAverageBoulderScore()
    {
        return $this->container['average_boulder_score'];
    }

    /**
     * Sets average_boulder_score
     *
     * @param float $average_boulder_score Average boulder score.
     *
     * @return $this
     */
    public function setAverageBoulderScore($average_boulder_score)
    {
        $this->container['average_boulder_score'] = $average_boulder_score;

        return $this;
    }

    /**
     * Gets average_tower_score
     *
     * @return float
     */
    public function getAverageTowerScore()
    {
        return $this->container['average_tower_score'];
    }

    /**
     * Sets average_tower_score
     *
     * @param float $average_tower_score Average tower score.
     *
     * @return $this
     */
    public function setAverageTowerScore($average_tower_score)
    {
        $this->container['average_tower_score'] = $average_tower_score;

        return $this;
    }

    /**
     * Gets average_foul_score
     *
     * @return float
     */
    public function getAverageFoulScore()
    {
        return $this->container['average_foul_score'];
    }

    /**
     * Sets average_foul_score
     *
     * @param float $average_foul_score Average foul score.
     *
     * @return $this
     */
    public function setAverageFoulScore($average_foul_score)
    {
        $this->container['average_foul_score'] = $average_foul_score;

        return $this;
    }

    /**
     * Gets high_score
     *
     * @return string[]
     */
    public function getHighScore()
    {
        return $this->container['high_score'];
    }

    /**
     * Sets high_score
     *
     * @param string[] $high_score An array with three values, high score, match key from the match with the high score, and the name of the match.
     *
     * @return $this
     */
    public function setHighScore($high_score)
    {
        $this->container['high_score'] = $high_score;

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

