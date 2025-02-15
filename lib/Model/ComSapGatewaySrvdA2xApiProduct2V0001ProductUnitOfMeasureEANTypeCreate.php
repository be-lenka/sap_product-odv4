<?php
/**
 * ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureEANTypeCreate
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
 * ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureEANTypeCreate Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\ProductODV4
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureEANTypeCreate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'com.sap.gateway.srvd_a2x.api_product_2.v0001.ProductUnitOfMeasureEAN_Type-create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'consecutive_number' => 'string',
        'alternative_iso_unit' => 'string',
        'product_standard_id' => 'string',
        'international_article_number_cat' => 'string',
        'is_main_global_trade_item_number' => 'bool',
        'sap__messages' => '\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001SAPMessageCreate[]',
        '_product' => '\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductTypeCreate',
        '_product_unit_of_measure' => '\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureTypeCreate'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'consecutive_number' => null,
        'alternative_iso_unit' => null,
        'product_standard_id' => null,
        'international_article_number_cat' => null,
        'is_main_global_trade_item_number' => null,
        'sap__messages' => null,
        '_product' => null,
        '_product_unit_of_measure' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'consecutive_number' => false,
		'alternative_iso_unit' => false,
		'product_standard_id' => false,
		'international_article_number_cat' => false,
		'is_main_global_trade_item_number' => false,
		'sap__messages' => false,
		'_product' => false,
		'_product_unit_of_measure' => false
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
        'consecutive_number' => 'ConsecutiveNumber',
        'alternative_iso_unit' => 'AlternativeISOUnit',
        'product_standard_id' => 'ProductStandardID',
        'international_article_number_cat' => 'InternationalArticleNumberCat',
        'is_main_global_trade_item_number' => 'IsMainGlobalTradeItemNumber',
        'sap__messages' => 'SAP__Messages',
        '_product' => '_Product',
        '_product_unit_of_measure' => '_ProductUnitOfMeasure'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'consecutive_number' => 'setConsecutiveNumber',
        'alternative_iso_unit' => 'setAlternativeIsoUnit',
        'product_standard_id' => 'setProductStandardId',
        'international_article_number_cat' => 'setInternationalArticleNumberCat',
        'is_main_global_trade_item_number' => 'setIsMainGlobalTradeItemNumber',
        'sap__messages' => 'setSapMessages',
        '_product' => '_setProduct',
        '_product_unit_of_measure' => '_setProductUnitOfMeasure'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'consecutive_number' => 'getConsecutiveNumber',
        'alternative_iso_unit' => 'getAlternativeIsoUnit',
        'product_standard_id' => 'getProductStandardId',
        'international_article_number_cat' => 'getInternationalArticleNumberCat',
        'is_main_global_trade_item_number' => 'getIsMainGlobalTradeItemNumber',
        'sap__messages' => 'getSapMessages',
        '_product' => '_getProduct',
        '_product_unit_of_measure' => '_getProductUnitOfMeasure'
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
        $this->setIfExists('consecutive_number', $data ?? [], null);
        $this->setIfExists('alternative_iso_unit', $data ?? [], null);
        $this->setIfExists('product_standard_id', $data ?? [], null);
        $this->setIfExists('international_article_number_cat', $data ?? [], null);
        $this->setIfExists('is_main_global_trade_item_number', $data ?? [], null);
        $this->setIfExists('sap__messages', $data ?? [], null);
        $this->setIfExists('_product', $data ?? [], null);
        $this->setIfExists('_product_unit_of_measure', $data ?? [], null);
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

        if ($this->container['consecutive_number'] === null) {
            $invalidProperties[] = "'consecutive_number' can't be null";
        }
        if ((mb_strlen($this->container['consecutive_number']) > 5)) {
            $invalidProperties[] = "invalid value for 'consecutive_number', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['alternative_iso_unit']) && (mb_strlen($this->container['alternative_iso_unit']) > 3)) {
            $invalidProperties[] = "invalid value for 'alternative_iso_unit', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['product_standard_id']) && (mb_strlen($this->container['product_standard_id']) > 18)) {
            $invalidProperties[] = "invalid value for 'product_standard_id', the character length must be smaller than or equal to 18.";
        }

        if (!is_null($this->container['international_article_number_cat']) && (mb_strlen($this->container['international_article_number_cat']) > 2)) {
            $invalidProperties[] = "invalid value for 'international_article_number_cat', the character length must be smaller than or equal to 2.";
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
     * Gets consecutive_number
     *
     * @return string
     */
    public function getConsecutiveNumber()
    {
        return $this->container['consecutive_number'];
    }

    /**
     * Sets consecutive_number
     *
     * @param string $consecutive_number Consecutive Number
     *
     * @return self
     */
    public function setConsecutiveNumber($consecutive_number)
    {
        if (is_null($consecutive_number)) {
            throw new \InvalidArgumentException('non-nullable consecutive_number cannot be null');
        }
        if ((mb_strlen($consecutive_number) > 5)) {
            throw new \InvalidArgumentException('invalid length for $consecutive_number when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureEANTypeCreate., must be smaller than or equal to 5.');
        }

        $this->container['consecutive_number'] = $consecutive_number;

        return $this;
    }

    /**
     * Gets alternative_iso_unit
     *
     * @return string|null
     */
    public function getAlternativeIsoUnit()
    {
        return $this->container['alternative_iso_unit'];
    }

    /**
     * Sets alternative_iso_unit
     *
     * @param string|null $alternative_iso_unit Base unit of measure in ISO code
     *
     * @return self
     */
    public function setAlternativeIsoUnit($alternative_iso_unit)
    {
        if (is_null($alternative_iso_unit)) {
            throw new \InvalidArgumentException('non-nullable alternative_iso_unit cannot be null');
        }
        if ((mb_strlen($alternative_iso_unit) > 3)) {
            throw new \InvalidArgumentException('invalid length for $alternative_iso_unit when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureEANTypeCreate., must be smaller than or equal to 3.');
        }

        $this->container['alternative_iso_unit'] = $alternative_iso_unit;

        return $this;
    }

    /**
     * Gets product_standard_id
     *
     * @return string|null
     */
    public function getProductStandardId()
    {
        return $this->container['product_standard_id'];
    }

    /**
     * Sets product_standard_id
     *
     * @param string|null $product_standard_id International Article Number (EAN/UPC)
     *
     * @return self
     */
    public function setProductStandardId($product_standard_id)
    {
        if (is_null($product_standard_id)) {
            throw new \InvalidArgumentException('non-nullable product_standard_id cannot be null');
        }
        if ((mb_strlen($product_standard_id) > 18)) {
            throw new \InvalidArgumentException('invalid length for $product_standard_id when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureEANTypeCreate., must be smaller than or equal to 18.');
        }

        $this->container['product_standard_id'] = $product_standard_id;

        return $this;
    }

    /**
     * Gets international_article_number_cat
     *
     * @return string|null
     */
    public function getInternationalArticleNumberCat()
    {
        return $this->container['international_article_number_cat'];
    }

    /**
     * Sets international_article_number_cat
     *
     * @param string|null $international_article_number_cat Category of Global Trade Item Number (GTIN)
     *
     * @return self
     */
    public function setInternationalArticleNumberCat($international_article_number_cat)
    {
        if (is_null($international_article_number_cat)) {
            throw new \InvalidArgumentException('non-nullable international_article_number_cat cannot be null');
        }
        if ((mb_strlen($international_article_number_cat) > 2)) {
            throw new \InvalidArgumentException('invalid length for $international_article_number_cat when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureEANTypeCreate., must be smaller than or equal to 2.');
        }

        $this->container['international_article_number_cat'] = $international_article_number_cat;

        return $this;
    }

    /**
     * Gets is_main_global_trade_item_number
     *
     * @return bool|null
     */
    public function getIsMainGlobalTradeItemNumber()
    {
        return $this->container['is_main_global_trade_item_number'];
    }

    /**
     * Sets is_main_global_trade_item_number
     *
     * @param bool|null $is_main_global_trade_item_number Indicator: Main EAN
     *
     * @return self
     */
    public function setIsMainGlobalTradeItemNumber($is_main_global_trade_item_number)
    {
        if (is_null($is_main_global_trade_item_number)) {
            throw new \InvalidArgumentException('non-nullable is_main_global_trade_item_number cannot be null');
        }
        $this->container['is_main_global_trade_item_number'] = $is_main_global_trade_item_number;

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
     * Gets _product_unit_of_measure
     *
     * @return \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureTypeCreate|null
     */
    public function _getProductUnitOfMeasure()
    {
    return $this->container['_product_unit_of_measure'];
    }

    /**
     * Sets _product_unit_of_measure
     *
     * @param \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductUnitOfMeasureTypeCreate|null $_product_unit_of_measure _product_unit_of_measure
     *
     * @return self
     */
    public function _setProductUnitOfMeasure($_product_unit_of_measure)
    {
        if (is_null($_product_unit_of_measure)) {
            throw new \InvalidArgumentException('non-nullable _product_unit_of_measure cannot be null');
        }
        $this->container['_product_unit_of_measure'] = $_product_unit_of_measure;

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


