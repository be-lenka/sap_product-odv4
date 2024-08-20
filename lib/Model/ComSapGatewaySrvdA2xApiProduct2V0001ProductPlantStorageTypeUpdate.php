<?php
/**
 * ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantStorageTypeUpdate
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
 * ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantStorageTypeUpdate Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\ProductODV4
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantStorageTypeUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'com.sap.gateway.srvd_a2x.api_product_2.v0001.ProductPlantStorage_Type-update';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'phys_inventory_for_cycle_counting' => 'string',
        'maximum_storage_period' => '\BeLenka\SAP\ProductODV4\Model\MaxStoragePeriod',
        'prod_maximum_storage_period_unit' => 'string',
        'maximum_storage_period_iso_unit' => 'string',
        'cycle_counting_indicator_is_fixed' => 'bool',
        'sap__messages' => '\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001SAPMessageUpdate[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'phys_inventory_for_cycle_counting' => null,
        'maximum_storage_period' => null,
        'prod_maximum_storage_period_unit' => null,
        'maximum_storage_period_iso_unit' => null,
        'cycle_counting_indicator_is_fixed' => null,
        'sap__messages' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'phys_inventory_for_cycle_counting' => false,
		'maximum_storage_period' => false,
		'prod_maximum_storage_period_unit' => false,
		'maximum_storage_period_iso_unit' => false,
		'cycle_counting_indicator_is_fixed' => false,
		'sap__messages' => false
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
        'phys_inventory_for_cycle_counting' => 'PhysInventoryForCycleCounting',
        'maximum_storage_period' => 'MaximumStoragePeriod',
        'prod_maximum_storage_period_unit' => 'ProdMaximumStoragePeriodUnit',
        'maximum_storage_period_iso_unit' => 'MaximumStoragePeriodISOUnit',
        'cycle_counting_indicator_is_fixed' => 'CycleCountingIndicatorIsFixed',
        'sap__messages' => 'SAP__Messages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'phys_inventory_for_cycle_counting' => 'setPhysInventoryForCycleCounting',
        'maximum_storage_period' => 'setMaximumStoragePeriod',
        'prod_maximum_storage_period_unit' => 'setProdMaximumStoragePeriodUnit',
        'maximum_storage_period_iso_unit' => 'setMaximumStoragePeriodIsoUnit',
        'cycle_counting_indicator_is_fixed' => 'setCycleCountingIndicatorIsFixed',
        'sap__messages' => 'setSapMessages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'phys_inventory_for_cycle_counting' => 'getPhysInventoryForCycleCounting',
        'maximum_storage_period' => 'getMaximumStoragePeriod',
        'prod_maximum_storage_period_unit' => 'getProdMaximumStoragePeriodUnit',
        'maximum_storage_period_iso_unit' => 'getMaximumStoragePeriodIsoUnit',
        'cycle_counting_indicator_is_fixed' => 'getCycleCountingIndicatorIsFixed',
        'sap__messages' => 'getSapMessages'
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
        $this->setIfExists('phys_inventory_for_cycle_counting', $data ?? [], null);
        $this->setIfExists('maximum_storage_period', $data ?? [], null);
        $this->setIfExists('prod_maximum_storage_period_unit', $data ?? [], null);
        $this->setIfExists('maximum_storage_period_iso_unit', $data ?? [], null);
        $this->setIfExists('cycle_counting_indicator_is_fixed', $data ?? [], null);
        $this->setIfExists('sap__messages', $data ?? [], null);
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

        if (!is_null($this->container['phys_inventory_for_cycle_counting']) && (mb_strlen($this->container['phys_inventory_for_cycle_counting']) > 1)) {
            $invalidProperties[] = "invalid value for 'phys_inventory_for_cycle_counting', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['prod_maximum_storage_period_unit']) && (mb_strlen($this->container['prod_maximum_storage_period_unit']) > 3)) {
            $invalidProperties[] = "invalid value for 'prod_maximum_storage_period_unit', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['maximum_storage_period_iso_unit']) && (mb_strlen($this->container['maximum_storage_period_iso_unit']) > 3)) {
            $invalidProperties[] = "invalid value for 'maximum_storage_period_iso_unit', the character length must be smaller than or equal to 3.";
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
     * Gets phys_inventory_for_cycle_counting
     *
     * @return string|null
     */
    public function getPhysInventoryForCycleCounting()
    {
        return $this->container['phys_inventory_for_cycle_counting'];
    }

    /**
     * Sets phys_inventory_for_cycle_counting
     *
     * @param string|null $phys_inventory_for_cycle_counting Physical Inventory Indicator for Cycle Counting
     *
     * @return self
     */
    public function setPhysInventoryForCycleCounting($phys_inventory_for_cycle_counting)
    {
        if (is_null($phys_inventory_for_cycle_counting)) {
            throw new \InvalidArgumentException('non-nullable phys_inventory_for_cycle_counting cannot be null');
        }
        if ((mb_strlen($phys_inventory_for_cycle_counting) > 1)) {
            throw new \InvalidArgumentException('invalid length for $phys_inventory_for_cycle_counting when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantStorageTypeUpdate., must be smaller than or equal to 1.');
        }

        $this->container['phys_inventory_for_cycle_counting'] = $phys_inventory_for_cycle_counting;

        return $this;
    }

    /**
     * Gets maximum_storage_period
     *
     * @return \BeLenka\SAP\ProductODV4\Model\MaxStoragePeriod|null
     */
    public function getMaximumStoragePeriod()
    {
        return $this->container['maximum_storage_period'];
    }

    /**
     * Sets maximum_storage_period
     *
     * @param \BeLenka\SAP\ProductODV4\Model\MaxStoragePeriod|null $maximum_storage_period maximum_storage_period
     *
     * @return self
     */
    public function setMaximumStoragePeriod($maximum_storage_period)
    {
        if (is_null($maximum_storage_period)) {
            throw new \InvalidArgumentException('non-nullable maximum_storage_period cannot be null');
        }
        $this->container['maximum_storage_period'] = $maximum_storage_period;

        return $this;
    }

    /**
     * Gets prod_maximum_storage_period_unit
     *
     * @return string|null
     */
    public function getProdMaximumStoragePeriodUnit()
    {
        return $this->container['prod_maximum_storage_period_unit'];
    }

    /**
     * Sets prod_maximum_storage_period_unit
     *
     * @param string|null $prod_maximum_storage_period_unit Unit for maximum storage period
     *
     * @return self
     */
    public function setProdMaximumStoragePeriodUnit($prod_maximum_storage_period_unit)
    {
        if (is_null($prod_maximum_storage_period_unit)) {
            throw new \InvalidArgumentException('non-nullable prod_maximum_storage_period_unit cannot be null');
        }
        if ((mb_strlen($prod_maximum_storage_period_unit) > 3)) {
            throw new \InvalidArgumentException('invalid length for $prod_maximum_storage_period_unit when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantStorageTypeUpdate., must be smaller than or equal to 3.');
        }

        $this->container['prod_maximum_storage_period_unit'] = $prod_maximum_storage_period_unit;

        return $this;
    }

    /**
     * Gets maximum_storage_period_iso_unit
     *
     * @return string|null
     */
    public function getMaximumStoragePeriodIsoUnit()
    {
        return $this->container['maximum_storage_period_iso_unit'];
    }

    /**
     * Sets maximum_storage_period_iso_unit
     *
     * @param string|null $maximum_storage_period_iso_unit Unit for the maximum storage period in ISO code
     *
     * @return self
     */
    public function setMaximumStoragePeriodIsoUnit($maximum_storage_period_iso_unit)
    {
        if (is_null($maximum_storage_period_iso_unit)) {
            throw new \InvalidArgumentException('non-nullable maximum_storage_period_iso_unit cannot be null');
        }
        if ((mb_strlen($maximum_storage_period_iso_unit) > 3)) {
            throw new \InvalidArgumentException('invalid length for $maximum_storage_period_iso_unit when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantStorageTypeUpdate., must be smaller than or equal to 3.');
        }

        $this->container['maximum_storage_period_iso_unit'] = $maximum_storage_period_iso_unit;

        return $this;
    }

    /**
     * Gets cycle_counting_indicator_is_fixed
     *
     * @return bool|null
     */
    public function getCycleCountingIndicatorIsFixed()
    {
        return $this->container['cycle_counting_indicator_is_fixed'];
    }

    /**
     * Sets cycle_counting_indicator_is_fixed
     *
     * @param bool|null $cycle_counting_indicator_is_fixed CC indicator is fixed
     *
     * @return self
     */
    public function setCycleCountingIndicatorIsFixed($cycle_counting_indicator_is_fixed)
    {
        if (is_null($cycle_counting_indicator_is_fixed)) {
            throw new \InvalidArgumentException('non-nullable cycle_counting_indicator_is_fixed cannot be null');
        }
        $this->container['cycle_counting_indicator_is_fixed'] = $cycle_counting_indicator_is_fixed;

        return $this;
    }

    /**
     * Gets sap__messages
     *
     * @return \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001SAPMessageUpdate[]|null
     */
    public function getSapMessages()
    {
        return $this->container['sap__messages'];
    }

    /**
     * Sets sap__messages
     *
     * @param \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001SAPMessageUpdate[]|null $sap__messages sap__messages
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


