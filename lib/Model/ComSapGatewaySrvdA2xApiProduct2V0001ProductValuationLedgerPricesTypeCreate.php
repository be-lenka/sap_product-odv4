<?php
/**
 * ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerPricesTypeCreate
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
 * ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerPricesTypeCreate Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\ProductODV4
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerPricesTypeCreate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'com.sap.gateway.srvd_a2x.api_product_2.v0001.ProductValuationLedgerPrices_Type-create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'currency_role' => 'string',
        'ledger' => 'string',
        'product_price_unit_quantity' => '\BeLenka\SAP\ProductODV4\Model\PriceUnit',
        'currency' => 'string',
        'future_price' => '\BeLenka\SAP\ProductODV4\Model\FuturePrice',
        'future_price_validity_start_date' => '\DateTime',
        'base_unit' => 'string',
        'base_iso_unit' => 'string',
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
        'currency_role' => null,
        'ledger' => null,
        'product_price_unit_quantity' => null,
        'currency' => null,
        'future_price' => null,
        'future_price_validity_start_date' => 'date',
        'base_unit' => null,
        'base_iso_unit' => null,
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
        'currency_role' => false,
		'ledger' => false,
		'product_price_unit_quantity' => false,
		'currency' => false,
		'future_price' => false,
		'future_price_validity_start_date' => true,
		'base_unit' => false,
		'base_iso_unit' => false,
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
        'currency_role' => 'CurrencyRole',
        'ledger' => 'Ledger',
        'product_price_unit_quantity' => 'ProductPriceUnitQuantity',
        'currency' => 'Currency',
        'future_price' => 'FuturePrice',
        'future_price_validity_start_date' => 'FuturePriceValidityStartDate',
        'base_unit' => 'BaseUnit',
        'base_iso_unit' => 'BaseISOUnit',
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
        'currency_role' => 'setCurrencyRole',
        'ledger' => 'setLedger',
        'product_price_unit_quantity' => 'setProductPriceUnitQuantity',
        'currency' => 'setCurrency',
        'future_price' => 'setFuturePrice',
        'future_price_validity_start_date' => 'setFuturePriceValidityStartDate',
        'base_unit' => 'setBaseUnit',
        'base_iso_unit' => 'setBaseIsoUnit',
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
        'currency_role' => 'getCurrencyRole',
        'ledger' => 'getLedger',
        'product_price_unit_quantity' => 'getProductPriceUnitQuantity',
        'currency' => 'getCurrency',
        'future_price' => 'getFuturePrice',
        'future_price_validity_start_date' => 'getFuturePriceValidityStartDate',
        'base_unit' => 'getBaseUnit',
        'base_iso_unit' => 'getBaseIsoUnit',
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
        $this->setIfExists('currency_role', $data ?? [], null);
        $this->setIfExists('ledger', $data ?? [], null);
        $this->setIfExists('product_price_unit_quantity', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('future_price', $data ?? [], null);
        $this->setIfExists('future_price_validity_start_date', $data ?? [], null);
        $this->setIfExists('base_unit', $data ?? [], null);
        $this->setIfExists('base_iso_unit', $data ?? [], null);
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

        if ($this->container['currency_role'] === null) {
            $invalidProperties[] = "'currency_role' can't be null";
        }
        if ((mb_strlen($this->container['currency_role']) > 2)) {
            $invalidProperties[] = "invalid value for 'currency_role', the character length must be smaller than or equal to 2.";
        }

        if ($this->container['ledger'] === null) {
            $invalidProperties[] = "'ledger' can't be null";
        }
        if ((mb_strlen($this->container['ledger']) > 2)) {
            $invalidProperties[] = "invalid value for 'ledger', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) > 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['base_unit']) && (mb_strlen($this->container['base_unit']) > 3)) {
            $invalidProperties[] = "invalid value for 'base_unit', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['base_iso_unit']) && (mb_strlen($this->container['base_iso_unit']) > 3)) {
            $invalidProperties[] = "invalid value for 'base_iso_unit', the character length must be smaller than or equal to 3.";
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
     * Gets currency_role
     *
     * @return string
     */
    public function getCurrencyRole()
    {
        return $this->container['currency_role'];
    }

    /**
     * Sets currency_role
     *
     * @param string $currency_role External Currency Type and Valuation View
     *
     * @return self
     */
    public function setCurrencyRole($currency_role)
    {
        if (is_null($currency_role)) {
            throw new \InvalidArgumentException('non-nullable currency_role cannot be null');
        }
        if ((mb_strlen($currency_role) > 2)) {
            throw new \InvalidArgumentException('invalid length for $currency_role when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerPricesTypeCreate., must be smaller than or equal to 2.');
        }

        $this->container['currency_role'] = $currency_role;

        return $this;
    }

    /**
     * Gets ledger
     *
     * @return string
     */
    public function getLedger()
    {
        return $this->container['ledger'];
    }

    /**
     * Sets ledger
     *
     * @param string $ledger Ledger in General Ledger Accounting
     *
     * @return self
     */
    public function setLedger($ledger)
    {
        if (is_null($ledger)) {
            throw new \InvalidArgumentException('non-nullable ledger cannot be null');
        }
        if ((mb_strlen($ledger) > 2)) {
            throw new \InvalidArgumentException('invalid length for $ledger when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerPricesTypeCreate., must be smaller than or equal to 2.');
        }

        $this->container['ledger'] = $ledger;

        return $this;
    }

    /**
     * Gets product_price_unit_quantity
     *
     * @return \BeLenka\SAP\ProductODV4\Model\PriceUnit|null
     */
    public function getProductPriceUnitQuantity()
    {
        return $this->container['product_price_unit_quantity'];
    }

    /**
     * Sets product_price_unit_quantity
     *
     * @param \BeLenka\SAP\ProductODV4\Model\PriceUnit|null $product_price_unit_quantity product_price_unit_quantity
     *
     * @return self
     */
    public function setProductPriceUnitQuantity($product_price_unit_quantity)
    {
        if (is_null($product_price_unit_quantity)) {
            throw new \InvalidArgumentException('non-nullable product_price_unit_quantity cannot be null');
        }
        $this->container['product_price_unit_quantity'] = $product_price_unit_quantity;

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
            throw new \InvalidArgumentException('invalid length for $currency when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerPricesTypeCreate., must be smaller than or equal to 3.');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets future_price
     *
     * @return \BeLenka\SAP\ProductODV4\Model\FuturePrice|null
     */
    public function getFuturePrice()
    {
        return $this->container['future_price'];
    }

    /**
     * Sets future_price
     *
     * @param \BeLenka\SAP\ProductODV4\Model\FuturePrice|null $future_price future_price
     *
     * @return self
     */
    public function setFuturePrice($future_price)
    {
        if (is_null($future_price)) {
            throw new \InvalidArgumentException('non-nullable future_price cannot be null');
        }
        $this->container['future_price'] = $future_price;

        return $this;
    }

    /**
     * Gets future_price_validity_start_date
     *
     * @return \DateTime|null
     */
    public function getFuturePriceValidityStartDate()
    {
        return $this->container['future_price_validity_start_date'];
    }

    /**
     * Sets future_price_validity_start_date
     *
     * @param \DateTime|null $future_price_validity_start_date future_price_validity_start_date
     *
     * @return self
     */
    public function setFuturePriceValidityStartDate($future_price_validity_start_date)
    {
        if (is_null($future_price_validity_start_date)) {
            array_push($this->openAPINullablesSetToNull, 'future_price_validity_start_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('future_price_validity_start_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['future_price_validity_start_date'] = $future_price_validity_start_date;

        return $this;
    }

    /**
     * Gets base_unit
     *
     * @return string|null
     */
    public function getBaseUnit()
    {
        return $this->container['base_unit'];
    }

    /**
     * Sets base_unit
     *
     * @param string|null $base_unit base_unit
     *
     * @return self
     */
    public function setBaseUnit($base_unit)
    {
        if (is_null($base_unit)) {
            throw new \InvalidArgumentException('non-nullable base_unit cannot be null');
        }
        if ((mb_strlen($base_unit) > 3)) {
            throw new \InvalidArgumentException('invalid length for $base_unit when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerPricesTypeCreate., must be smaller than or equal to 3.');
        }

        $this->container['base_unit'] = $base_unit;

        return $this;
    }

    /**
     * Gets base_iso_unit
     *
     * @return string|null
     */
    public function getBaseIsoUnit()
    {
        return $this->container['base_iso_unit'];
    }

    /**
     * Sets base_iso_unit
     *
     * @param string|null $base_iso_unit Base unit of measure in ISO code
     *
     * @return self
     */
    public function setBaseIsoUnit($base_iso_unit)
    {
        if (is_null($base_iso_unit)) {
            throw new \InvalidArgumentException('non-nullable base_iso_unit cannot be null');
        }
        if ((mb_strlen($base_iso_unit) > 3)) {
            throw new \InvalidArgumentException('invalid length for $base_iso_unit when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationLedgerPricesTypeCreate., must be smaller than or equal to 3.');
        }

        $this->container['base_iso_unit'] = $base_iso_unit;

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


