<?php
/**
 * ComSapGatewaySrvdA2xApiProduct2V0001ProdSalesDeliverySalesTaxTypeCreate
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
 * ComSapGatewaySrvdA2xApiProduct2V0001ProdSalesDeliverySalesTaxTypeCreate Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\ProductODV4
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ComSapGatewaySrvdA2xApiProduct2V0001ProdSalesDeliverySalesTaxTypeCreate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'com.sap.gateway.srvd_a2x.api_product_2.v0001.ProdSalesDeliverySalesTax_Type-create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'country' => 'string',
        'product_sales_tax_category' => 'string',
        'product_tax_classification' => 'string',
        'sap__messages' => '\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001SAPMessageCreate[]',
        '_product' => '\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductTypeCreate',
        '_product_sales_delivery' => '\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesDeliveryTypeCreate'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'country' => null,
        'product_sales_tax_category' => null,
        'product_tax_classification' => null,
        'sap__messages' => null,
        '_product' => null,
        '_product_sales_delivery' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'country' => false,
		'product_sales_tax_category' => false,
		'product_tax_classification' => false,
		'sap__messages' => false,
		'_product' => false,
		'_product_sales_delivery' => false
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
        'country' => 'Country',
        'product_sales_tax_category' => 'ProductSalesTaxCategory',
        'product_tax_classification' => 'ProductTaxClassification',
        'sap__messages' => 'SAP__Messages',
        '_product' => '_Product',
        '_product_sales_delivery' => '_ProductSalesDelivery'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country' => 'setCountry',
        'product_sales_tax_category' => 'setProductSalesTaxCategory',
        'product_tax_classification' => 'setProductTaxClassification',
        'sap__messages' => 'setSapMessages',
        '_product' => '_setProduct',
        '_product_sales_delivery' => '_setProductSalesDelivery'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country' => 'getCountry',
        'product_sales_tax_category' => 'getProductSalesTaxCategory',
        'product_tax_classification' => 'getProductTaxClassification',
        'sap__messages' => 'getSapMessages',
        '_product' => '_getProduct',
        '_product_sales_delivery' => '_getProductSalesDelivery'
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
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('product_sales_tax_category', $data ?? [], null);
        $this->setIfExists('product_tax_classification', $data ?? [], null);
        $this->setIfExists('sap__messages', $data ?? [], null);
        $this->setIfExists('_product', $data ?? [], null);
        $this->setIfExists('_product_sales_delivery', $data ?? [], null);
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

        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ((mb_strlen($this->container['country']) > 3)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 3.";
        }

        if ($this->container['product_sales_tax_category'] === null) {
            $invalidProperties[] = "'product_sales_tax_category' can't be null";
        }
        if ((mb_strlen($this->container['product_sales_tax_category']) > 4)) {
            $invalidProperties[] = "invalid value for 'product_sales_tax_category', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['product_tax_classification']) && (mb_strlen($this->container['product_tax_classification']) > 1)) {
            $invalidProperties[] = "invalid value for 'product_tax_classification', the character length must be smaller than or equal to 1.";
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
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country Departure Country/Region (from which the goods are sent)
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        if ((mb_strlen($country) > 3)) {
            throw new \InvalidArgumentException('invalid length for $country when calling ComSapGatewaySrvdA2xApiProduct2V0001ProdSalesDeliverySalesTaxTypeCreate., must be smaller than or equal to 3.');
        }

        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets product_sales_tax_category
     *
     * @return string
     */
    public function getProductSalesTaxCategory()
    {
        return $this->container['product_sales_tax_category'];
    }

    /**
     * Sets product_sales_tax_category
     *
     * @param string $product_sales_tax_category Tax Condition Type (Sales Tax, Value-Added Tax,...)
     *
     * @return self
     */
    public function setProductSalesTaxCategory($product_sales_tax_category)
    {
        if (is_null($product_sales_tax_category)) {
            throw new \InvalidArgumentException('non-nullable product_sales_tax_category cannot be null');
        }
        if ((mb_strlen($product_sales_tax_category) > 4)) {
            throw new \InvalidArgumentException('invalid length for $product_sales_tax_category when calling ComSapGatewaySrvdA2xApiProduct2V0001ProdSalesDeliverySalesTaxTypeCreate., must be smaller than or equal to 4.');
        }

        $this->container['product_sales_tax_category'] = $product_sales_tax_category;

        return $this;
    }

    /**
     * Gets product_tax_classification
     *
     * @return string|null
     */
    public function getProductTaxClassification()
    {
        return $this->container['product_tax_classification'];
    }

    /**
     * Sets product_tax_classification
     *
     * @param string|null $product_tax_classification product_tax_classification
     *
     * @return self
     */
    public function setProductTaxClassification($product_tax_classification)
    {
        if (is_null($product_tax_classification)) {
            throw new \InvalidArgumentException('non-nullable product_tax_classification cannot be null');
        }
        if ((mb_strlen($product_tax_classification) > 1)) {
            throw new \InvalidArgumentException('invalid length for $product_tax_classification when calling ComSapGatewaySrvdA2xApiProduct2V0001ProdSalesDeliverySalesTaxTypeCreate., must be smaller than or equal to 1.');
        }

        $this->container['product_tax_classification'] = $product_tax_classification;

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
     * Gets _product_sales_delivery
     *
     * @return \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesDeliveryTypeCreate|null
     */
    public function _getProductSalesDelivery()
    {
    return $this->container['_product_sales_delivery'];
    }

    /**
     * Sets _product_sales_delivery
     *
     * @param \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductSalesDeliveryTypeCreate|null $_product_sales_delivery _product_sales_delivery
     *
     * @return self
     */
    public function _setProductSalesDelivery($_product_sales_delivery)
    {
        if (is_null($_product_sales_delivery)) {
            throw new \InvalidArgumentException('non-nullable _product_sales_delivery cannot be null');
        }
        $this->container['_product_sales_delivery'] = $_product_sales_delivery;

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


