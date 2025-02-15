<?php
/**
 * ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationCostingTypeCreate
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  BeLenka\SAP\ProductODV4
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Product
 *
 * The service supports following operations: GET, POST, PUT, PATCH, DELETE. You can create, read, update, and delete product master data at the entity level.
 *
 * The version of the OpenAPI document: 2.3.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace BeLenka\SAP\ProductODV4\Model;

use \ArrayAccess;
use \BeLenka\SAP\ProductODV4\ObjectSerializer;

/**
 * ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationCostingTypeCreate Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\ProductODV4
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationCostingTypeCreate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'com.sap.gateway.srvd_a2x.api_product_2.v0001.ProductValuationCosting_Type-create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'product_is_costed_with_qty_struc' => 'bool',
        'is_material_related_origin' => 'bool',
        'cost_origin_group' => 'string',
        'costing_overhead_group' => 'string',
        'planned_price1_in_co_code_crcy' => '\BeLenka\SAP\ProductODV4\Model\PlannedPrice1',
        'planned_price2_in_co_code_crcy' => '\BeLenka\SAP\ProductODV4\Model\PlannedPrice2',
        'planned_price3_in_co_code_crcy' => '\BeLenka\SAP\ProductODV4\Model\PlannedPrice3',
        'future_plnd_price1_valdty_date' => '\DateTime',
        'future_plnd_price2_valdty_date' => '\DateTime',
        'future_plnd_price3_valdty_date' => '\DateTime',
        'currency' => 'string',
        'sap__messages' => '\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001SAPMessageCreate[]',
        '_product' => '\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductTypeCreate',
        '_product_valuation' => '\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationTypeCreate'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'product_is_costed_with_qty_struc' => null,
        'is_material_related_origin' => null,
        'cost_origin_group' => null,
        'costing_overhead_group' => null,
        'planned_price1_in_co_code_crcy' => null,
        'planned_price2_in_co_code_crcy' => null,
        'planned_price3_in_co_code_crcy' => null,
        'future_plnd_price1_valdty_date' => 'date',
        'future_plnd_price2_valdty_date' => 'date',
        'future_plnd_price3_valdty_date' => 'date',
        'currency' => null,
        'sap__messages' => null,
        '_product' => null,
        '_product_valuation' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'product_is_costed_with_qty_struc' => false,
		'is_material_related_origin' => false,
		'cost_origin_group' => false,
		'costing_overhead_group' => false,
		'planned_price1_in_co_code_crcy' => false,
		'planned_price2_in_co_code_crcy' => false,
		'planned_price3_in_co_code_crcy' => false,
		'future_plnd_price1_valdty_date' => true,
		'future_plnd_price2_valdty_date' => true,
		'future_plnd_price3_valdty_date' => true,
		'currency' => false,
		'sap__messages' => false,
		'_product' => false,
		'_product_valuation' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'product_is_costed_with_qty_struc' => 'ProductIsCostedWithQtyStruc',
        'is_material_related_origin' => 'IsMaterialRelatedOrigin',
        'cost_origin_group' => 'CostOriginGroup',
        'costing_overhead_group' => 'CostingOverheadGroup',
        'planned_price1_in_co_code_crcy' => 'PlannedPrice1InCoCodeCrcy',
        'planned_price2_in_co_code_crcy' => 'PlannedPrice2InCoCodeCrcy',
        'planned_price3_in_co_code_crcy' => 'PlannedPrice3InCoCodeCrcy',
        'future_plnd_price1_valdty_date' => 'FuturePlndPrice1ValdtyDate',
        'future_plnd_price2_valdty_date' => 'FuturePlndPrice2ValdtyDate',
        'future_plnd_price3_valdty_date' => 'FuturePlndPrice3ValdtyDate',
        'currency' => 'Currency',
        'sap__messages' => 'SAP__Messages',
        '_product' => '_Product',
        '_product_valuation' => '_ProductValuation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_is_costed_with_qty_struc' => 'setProductIsCostedWithQtyStruc',
        'is_material_related_origin' => 'setIsMaterialRelatedOrigin',
        'cost_origin_group' => 'setCostOriginGroup',
        'costing_overhead_group' => 'setCostingOverheadGroup',
        'planned_price1_in_co_code_crcy' => 'setPlannedPrice1InCoCodeCrcy',
        'planned_price2_in_co_code_crcy' => 'setPlannedPrice2InCoCodeCrcy',
        'planned_price3_in_co_code_crcy' => 'setPlannedPrice3InCoCodeCrcy',
        'future_plnd_price1_valdty_date' => 'setFuturePlndPrice1ValdtyDate',
        'future_plnd_price2_valdty_date' => 'setFuturePlndPrice2ValdtyDate',
        'future_plnd_price3_valdty_date' => 'setFuturePlndPrice3ValdtyDate',
        'currency' => 'setCurrency',
        'sap__messages' => 'setSapMessages',
        '_product' => '_setProduct',
        '_product_valuation' => '_setProductValuation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_is_costed_with_qty_struc' => 'getProductIsCostedWithQtyStruc',
        'is_material_related_origin' => 'getIsMaterialRelatedOrigin',
        'cost_origin_group' => 'getCostOriginGroup',
        'costing_overhead_group' => 'getCostingOverheadGroup',
        'planned_price1_in_co_code_crcy' => 'getPlannedPrice1InCoCodeCrcy',
        'planned_price2_in_co_code_crcy' => 'getPlannedPrice2InCoCodeCrcy',
        'planned_price3_in_co_code_crcy' => 'getPlannedPrice3InCoCodeCrcy',
        'future_plnd_price1_valdty_date' => 'getFuturePlndPrice1ValdtyDate',
        'future_plnd_price2_valdty_date' => 'getFuturePlndPrice2ValdtyDate',
        'future_plnd_price3_valdty_date' => 'getFuturePlndPrice3ValdtyDate',
        'currency' => 'getCurrency',
        'sap__messages' => 'getSapMessages',
        '_product' => '_getProduct',
        '_product_valuation' => '_getProductValuation'
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
        $this->setIfExists('product_is_costed_with_qty_struc', $data ?? [], null);
        $this->setIfExists('is_material_related_origin', $data ?? [], null);
        $this->setIfExists('cost_origin_group', $data ?? [], null);
        $this->setIfExists('costing_overhead_group', $data ?? [], null);
        $this->setIfExists('planned_price1_in_co_code_crcy', $data ?? [], null);
        $this->setIfExists('planned_price2_in_co_code_crcy', $data ?? [], null);
        $this->setIfExists('planned_price3_in_co_code_crcy', $data ?? [], null);
        $this->setIfExists('future_plnd_price1_valdty_date', $data ?? [], null);
        $this->setIfExists('future_plnd_price2_valdty_date', $data ?? [], null);
        $this->setIfExists('future_plnd_price3_valdty_date', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('sap__messages', $data ?? [], null);
        $this->setIfExists('_product', $data ?? [], null);
        $this->setIfExists('_product_valuation', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['cost_origin_group']) && (mb_strlen($this->container['cost_origin_group']) > 4)) {
            $invalidProperties[] = "invalid value for 'cost_origin_group', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['costing_overhead_group']) && (mb_strlen($this->container['costing_overhead_group']) > 10)) {
            $invalidProperties[] = "invalid value for 'costing_overhead_group', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) > 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be smaller than or equal to 3.";
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
     * Gets product_is_costed_with_qty_struc
     *
     * @return bool|null
     */
    public function getProductIsCostedWithQtyStruc()
    {
        return $this->container['product_is_costed_with_qty_struc'];
    }

    /**
     * Sets product_is_costed_with_qty_struc
     *
     * @param bool|null $product_is_costed_with_qty_struc Material Is Costed with Quantity Structure
     *
     * @return self
     */
    public function setProductIsCostedWithQtyStruc($product_is_costed_with_qty_struc)
    {
        if (is_null($product_is_costed_with_qty_struc)) {
            throw new \InvalidArgumentException('non-nullable product_is_costed_with_qty_struc cannot be null');
        }
        $this->container['product_is_costed_with_qty_struc'] = $product_is_costed_with_qty_struc;

        return $this;
    }

    /**
     * Gets is_material_related_origin
     *
     * @return bool|null
     */
    public function getIsMaterialRelatedOrigin()
    {
        return $this->container['is_material_related_origin'];
    }

    /**
     * Sets is_material_related_origin
     *
     * @param bool|null $is_material_related_origin Material-related origin
     *
     * @return self
     */
    public function setIsMaterialRelatedOrigin($is_material_related_origin)
    {
        if (is_null($is_material_related_origin)) {
            throw new \InvalidArgumentException('non-nullable is_material_related_origin cannot be null');
        }
        $this->container['is_material_related_origin'] = $is_material_related_origin;

        return $this;
    }

    /**
     * Gets cost_origin_group
     *
     * @return string|null
     */
    public function getCostOriginGroup()
    {
        return $this->container['cost_origin_group'];
    }

    /**
     * Sets cost_origin_group
     *
     * @param string|null $cost_origin_group Origin Group as Subdivision of Cost Element
     *
     * @return self
     */
    public function setCostOriginGroup($cost_origin_group)
    {
        if (is_null($cost_origin_group)) {
            throw new \InvalidArgumentException('non-nullable cost_origin_group cannot be null');
        }
        if ((mb_strlen($cost_origin_group) > 4)) {
            throw new \InvalidArgumentException('invalid length for $cost_origin_group when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationCostingTypeCreate., must be smaller than or equal to 4.');
        }

        $this->container['cost_origin_group'] = $cost_origin_group;

        return $this;
    }

    /**
     * Gets costing_overhead_group
     *
     * @return string|null
     */
    public function getCostingOverheadGroup()
    {
        return $this->container['costing_overhead_group'];
    }

    /**
     * Sets costing_overhead_group
     *
     * @param string|null $costing_overhead_group Costing Overhead Group
     *
     * @return self
     */
    public function setCostingOverheadGroup($costing_overhead_group)
    {
        if (is_null($costing_overhead_group)) {
            throw new \InvalidArgumentException('non-nullable costing_overhead_group cannot be null');
        }
        if ((mb_strlen($costing_overhead_group) > 10)) {
            throw new \InvalidArgumentException('invalid length for $costing_overhead_group when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationCostingTypeCreate., must be smaller than or equal to 10.');
        }

        $this->container['costing_overhead_group'] = $costing_overhead_group;

        return $this;
    }

    /**
     * Gets planned_price1_in_co_code_crcy
     *
     * @return \BeLenka\SAP\ProductODV4\Model\PlannedPrice1|null
     */
    public function getPlannedPrice1InCoCodeCrcy()
    {
        return $this->container['planned_price1_in_co_code_crcy'];
    }

    /**
     * Sets planned_price1_in_co_code_crcy
     *
     * @param \BeLenka\SAP\ProductODV4\Model\PlannedPrice1|null $planned_price1_in_co_code_crcy planned_price1_in_co_code_crcy
     *
     * @return self
     */
    public function setPlannedPrice1InCoCodeCrcy($planned_price1_in_co_code_crcy)
    {
        if (is_null($planned_price1_in_co_code_crcy)) {
            throw new \InvalidArgumentException('non-nullable planned_price1_in_co_code_crcy cannot be null');
        }
        $this->container['planned_price1_in_co_code_crcy'] = $planned_price1_in_co_code_crcy;

        return $this;
    }

    /**
     * Gets planned_price2_in_co_code_crcy
     *
     * @return \BeLenka\SAP\ProductODV4\Model\PlannedPrice2|null
     */
    public function getPlannedPrice2InCoCodeCrcy()
    {
        return $this->container['planned_price2_in_co_code_crcy'];
    }

    /**
     * Sets planned_price2_in_co_code_crcy
     *
     * @param \BeLenka\SAP\ProductODV4\Model\PlannedPrice2|null $planned_price2_in_co_code_crcy planned_price2_in_co_code_crcy
     *
     * @return self
     */
    public function setPlannedPrice2InCoCodeCrcy($planned_price2_in_co_code_crcy)
    {
        if (is_null($planned_price2_in_co_code_crcy)) {
            throw new \InvalidArgumentException('non-nullable planned_price2_in_co_code_crcy cannot be null');
        }
        $this->container['planned_price2_in_co_code_crcy'] = $planned_price2_in_co_code_crcy;

        return $this;
    }

    /**
     * Gets planned_price3_in_co_code_crcy
     *
     * @return \BeLenka\SAP\ProductODV4\Model\PlannedPrice3|null
     */
    public function getPlannedPrice3InCoCodeCrcy()
    {
        return $this->container['planned_price3_in_co_code_crcy'];
    }

    /**
     * Sets planned_price3_in_co_code_crcy
     *
     * @param \BeLenka\SAP\ProductODV4\Model\PlannedPrice3|null $planned_price3_in_co_code_crcy planned_price3_in_co_code_crcy
     *
     * @return self
     */
    public function setPlannedPrice3InCoCodeCrcy($planned_price3_in_co_code_crcy)
    {
        if (is_null($planned_price3_in_co_code_crcy)) {
            throw new \InvalidArgumentException('non-nullable planned_price3_in_co_code_crcy cannot be null');
        }
        $this->container['planned_price3_in_co_code_crcy'] = $planned_price3_in_co_code_crcy;

        return $this;
    }

    /**
     * Gets future_plnd_price1_valdty_date
     *
     * @return \DateTime|null
     */
    public function getFuturePlndPrice1ValdtyDate()
    {
        return $this->container['future_plnd_price1_valdty_date'];
    }

    /**
     * Sets future_plnd_price1_valdty_date
     *
     * @param \DateTime|null $future_plnd_price1_valdty_date Date from Which Future Planned Price 1 Is Valid
     *
     * @return self
     */
    public function setFuturePlndPrice1ValdtyDate($future_plnd_price1_valdty_date)
    {
        if (is_null($future_plnd_price1_valdty_date)) {
            array_push($this->openAPINullablesSetToNull, 'future_plnd_price1_valdty_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('future_plnd_price1_valdty_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['future_plnd_price1_valdty_date'] = $future_plnd_price1_valdty_date;

        return $this;
    }

    /**
     * Gets future_plnd_price2_valdty_date
     *
     * @return \DateTime|null
     */
    public function getFuturePlndPrice2ValdtyDate()
    {
        return $this->container['future_plnd_price2_valdty_date'];
    }

    /**
     * Sets future_plnd_price2_valdty_date
     *
     * @param \DateTime|null $future_plnd_price2_valdty_date Date from Which Future Planned Price 2 Is Valid
     *
     * @return self
     */
    public function setFuturePlndPrice2ValdtyDate($future_plnd_price2_valdty_date)
    {
        if (is_null($future_plnd_price2_valdty_date)) {
            array_push($this->openAPINullablesSetToNull, 'future_plnd_price2_valdty_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('future_plnd_price2_valdty_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['future_plnd_price2_valdty_date'] = $future_plnd_price2_valdty_date;

        return $this;
    }

    /**
     * Gets future_plnd_price3_valdty_date
     *
     * @return \DateTime|null
     */
    public function getFuturePlndPrice3ValdtyDate()
    {
        return $this->container['future_plnd_price3_valdty_date'];
    }

    /**
     * Sets future_plnd_price3_valdty_date
     *
     * @param \DateTime|null $future_plnd_price3_valdty_date Date from Which Future Planned Price 3 Is Valid
     *
     * @return self
     */
    public function setFuturePlndPrice3ValdtyDate($future_plnd_price3_valdty_date)
    {
        if (is_null($future_plnd_price3_valdty_date)) {
            array_push($this->openAPINullablesSetToNull, 'future_plnd_price3_valdty_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('future_plnd_price3_valdty_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['future_plnd_price3_valdty_date'] = $future_plnd_price3_valdty_date;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency Currency Key
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        if ((mb_strlen($currency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationCostingTypeCreate., must be smaller than or equal to 3.');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets sap__messages
     *
     * @return \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001SAPMessageCreate[]|null
     */
    public function getSapMessages()
    {
        return $this->container['sap__messages'];
    }

    /**
     * Sets sap__messages
     *
     * @param \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001SAPMessageCreate[]|null $sap__messages sap__messages
     *
     * @return self
     */
    public function setSapMessages($sap__messages)
    {
        if (is_null($sap__messages)) {
            throw new \InvalidArgumentException('non-nullable sap__messages cannot be null');
        }
        $this->container['sap__messages'] = $sap__messages;

        return $this;
    }

    /**
     * Gets _product
     *
     * @return \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductTypeCreate|null
     */
    public function _getProduct()
    {
    return $this->container['_product'];
    }

    /**
     * Sets _product
     *
     * @param \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductTypeCreate|null $_product _product
     *
     * @return self
     */
    public function _setProduct($_product)
    {
        if (is_null($_product)) {
            throw new \InvalidArgumentException('non-nullable _product cannot be null');
        }
        $this->container['_product'] = $_product;

        return $this;
    }

    /**
     * Gets _product_valuation
     *
     * @return \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationTypeCreate|null
     */
    public function _getProductValuation()
    {
    return $this->container['_product_valuation'];
    }

    /**
     * Sets _product_valuation
     *
     * @param \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationTypeCreate|null $_product_valuation _product_valuation
     *
     * @return self
     */
    public function _setProductValuation($_product_valuation)
    {
        if (is_null($_product_valuation)) {
            throw new \InvalidArgumentException('non-nullable _product_valuation cannot be null');
        }
        $this->container['_product_valuation'] = $_product_valuation;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


