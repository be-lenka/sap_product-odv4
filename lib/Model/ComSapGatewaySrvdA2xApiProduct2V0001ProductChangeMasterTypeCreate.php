<?php
/**
 * ComSapGatewaySrvdA2xApiProduct2V0001ProductChangeMasterTypeCreate
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
 * ComSapGatewaySrvdA2xApiProduct2V0001ProductChangeMasterTypeCreate Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\ProductODV4
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ComSapGatewaySrvdA2xApiProduct2V0001ProductChangeMasterTypeCreate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'com.sap.gateway.srvd_a2x.api_product_2.v0001.ProductChangeMaster_Type-create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'change_number' => 'string',
        'revision_level' => 'string',
        '_product' => '\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductTypeCreate'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'change_number' => null,
        'revision_level' => null,
        '_product' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'change_number' => false,
		'revision_level' => false,
		'_product' => false
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
        'change_number' => 'ChangeNumber',
        'revision_level' => 'RevisionLevel',
        '_product' => '_Product'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'change_number' => 'setChangeNumber',
        'revision_level' => 'setRevisionLevel',
        '_product' => '_setProduct'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'change_number' => 'getChangeNumber',
        'revision_level' => 'getRevisionLevel',
        '_product' => '_getProduct'
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
        $this->setIfExists('change_number', $data ?? [], null);
        $this->setIfExists('revision_level', $data ?? [], null);
        $this->setIfExists('_product', $data ?? [], null);
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

        if ($this->container['change_number'] === null) {
            $invalidProperties[] = "'change_number' can't be null";
        }
        if ((mb_strlen($this->container['change_number']) > 12)) {
            $invalidProperties[] = "invalid value for 'change_number', the character length must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['revision_level']) && (mb_strlen($this->container['revision_level']) > 2)) {
            $invalidProperties[] = "invalid value for 'revision_level', the character length must be smaller than or equal to 2.";
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
     * Gets change_number
     *
     * @return string
     */
    public function getChangeNumber()
    {
        return $this->container['change_number'];
    }

    /**
     * Sets change_number
     *
     * @param string $change_number change_number
     *
     * @return self
     */
    public function setChangeNumber($change_number)
    {
        if (is_null($change_number)) {
            throw new \InvalidArgumentException('non-nullable change_number cannot be null');
        }
        if ((mb_strlen($change_number) > 12)) {
            throw new \InvalidArgumentException('invalid length for $change_number when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductChangeMasterTypeCreate., must be smaller than or equal to 12.');
        }

        $this->container['change_number'] = $change_number;

        return $this;
    }

    /**
     * Gets revision_level
     *
     * @return string|null
     */
    public function getRevisionLevel()
    {
        return $this->container['revision_level'];
    }

    /**
     * Sets revision_level
     *
     * @param string|null $revision_level Revision Level without Conversion Exit
     *
     * @return self
     */
    public function setRevisionLevel($revision_level)
    {
        if (is_null($revision_level)) {
            throw new \InvalidArgumentException('non-nullable revision_level cannot be null');
        }
        if ((mb_strlen($revision_level) > 2)) {
            throw new \InvalidArgumentException('invalid length for $revision_level when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductChangeMasterTypeCreate., must be smaller than or equal to 2.');
        }

        $this->container['revision_level'] = $revision_level;

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


