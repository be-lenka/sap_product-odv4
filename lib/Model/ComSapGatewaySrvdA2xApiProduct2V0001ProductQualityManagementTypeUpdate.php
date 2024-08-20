<?php
/**
 * ComSapGatewaySrvdA2xApiProduct2V0001ProductQualityManagementTypeUpdate
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
 * ComSapGatewaySrvdA2xApiProduct2V0001ProductQualityManagementTypeUpdate Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\ProductODV4
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ComSapGatewaySrvdA2xApiProduct2V0001ProductQualityManagementTypeUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'com.sap.gateway.srvd_a2x.api_product_2.v0001.ProductQualityManagement_Type-update';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'qlty_mgmt_in_procmt_is_active' => 'bool',
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
        'qlty_mgmt_in_procmt_is_active' => null,
        'sap__messages' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'qlty_mgmt_in_procmt_is_active' => false,
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
        'qlty_mgmt_in_procmt_is_active' => 'QltyMgmtInProcmtIsActive',
        'sap__messages' => 'SAP__Messages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'qlty_mgmt_in_procmt_is_active' => 'setQltyMgmtInProcmtIsActive',
        'sap__messages' => 'setSapMessages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'qlty_mgmt_in_procmt_is_active' => 'getQltyMgmtInProcmtIsActive',
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
        $this->setIfExists('qlty_mgmt_in_procmt_is_active', $data ?? [], null);
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
     * Gets qlty_mgmt_in_procmt_is_active
     *
     * @return bool|null
     */
    public function getQltyMgmtInProcmtIsActive()
    {
        return $this->container['qlty_mgmt_in_procmt_is_active'];
    }

    /**
     * Sets qlty_mgmt_in_procmt_is_active
     *
     * @param bool|null $qlty_mgmt_in_procmt_is_active QM in Procurement Is Active
     *
     * @return self
     */
    public function setQltyMgmtInProcmtIsActive($qlty_mgmt_in_procmt_is_active)
    {
        if (is_null($qlty_mgmt_in_procmt_is_active)) {
            throw new \InvalidArgumentException('non-nullable qlty_mgmt_in_procmt_is_active cannot be null');
        }
        $this->container['qlty_mgmt_in_procmt_is_active'] = $qlty_mgmt_in_procmt_is_active;

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


