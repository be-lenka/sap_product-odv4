<?php
/**
 * ComSapGatewaySrvdA2xApiProduct2V0001ProdPlntInternationalTradeTypeCreate
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
 * ComSapGatewaySrvdA2xApiProduct2V0001ProdPlntInternationalTradeTypeCreate Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\ProductODV4
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ComSapGatewaySrvdA2xApiProduct2V0001ProdPlntInternationalTradeTypeCreate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'com.sap.gateway.srvd_a2x.api_product_2.v0001.ProdPlntInternationalTrade_Type-create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'country_of_origin' => 'string',
        'region_of_origin' => 'string',
        'consumption_tax_ctrl_code' => 'string',
        'export_and_import_product_group' => 'string',
        'product_cas_number' => 'string',
        'prod_intl_trade_classification' => 'string',
        'sap__messages' => '\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001SAPMessageCreate[]',
        '_product' => '\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductTypeCreate',
        '_product_plant' => '\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantTypeCreate'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'country_of_origin' => null,
        'region_of_origin' => null,
        'consumption_tax_ctrl_code' => null,
        'export_and_import_product_group' => null,
        'product_cas_number' => null,
        'prod_intl_trade_classification' => null,
        'sap__messages' => null,
        '_product' => null,
        '_product_plant' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'country_of_origin' => false,
		'region_of_origin' => false,
		'consumption_tax_ctrl_code' => false,
		'export_and_import_product_group' => false,
		'product_cas_number' => false,
		'prod_intl_trade_classification' => false,
		'sap__messages' => false,
		'_product' => false,
		'_product_plant' => false
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
        'country_of_origin' => 'CountryOfOrigin',
        'region_of_origin' => 'RegionOfOrigin',
        'consumption_tax_ctrl_code' => 'ConsumptionTaxCtrlCode',
        'export_and_import_product_group' => 'ExportAndImportProductGroup',
        'product_cas_number' => 'ProductCASNumber',
        'prod_intl_trade_classification' => 'ProdIntlTradeClassification',
        'sap__messages' => 'SAP__Messages',
        '_product' => '_Product',
        '_product_plant' => '_ProductPlant'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country_of_origin' => 'setCountryOfOrigin',
        'region_of_origin' => 'setRegionOfOrigin',
        'consumption_tax_ctrl_code' => 'setConsumptionTaxCtrlCode',
        'export_and_import_product_group' => 'setExportAndImportProductGroup',
        'product_cas_number' => 'setProductCasNumber',
        'prod_intl_trade_classification' => 'setProdIntlTradeClassification',
        'sap__messages' => 'setSapMessages',
        '_product' => '_setProduct',
        '_product_plant' => '_setProductPlant'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country_of_origin' => 'getCountryOfOrigin',
        'region_of_origin' => 'getRegionOfOrigin',
        'consumption_tax_ctrl_code' => 'getConsumptionTaxCtrlCode',
        'export_and_import_product_group' => 'getExportAndImportProductGroup',
        'product_cas_number' => 'getProductCasNumber',
        'prod_intl_trade_classification' => 'getProdIntlTradeClassification',
        'sap__messages' => 'getSapMessages',
        '_product' => '_getProduct',
        '_product_plant' => '_getProductPlant'
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
        $this->setIfExists('country_of_origin', $data ?? [], null);
        $this->setIfExists('region_of_origin', $data ?? [], null);
        $this->setIfExists('consumption_tax_ctrl_code', $data ?? [], null);
        $this->setIfExists('export_and_import_product_group', $data ?? [], null);
        $this->setIfExists('product_cas_number', $data ?? [], null);
        $this->setIfExists('prod_intl_trade_classification', $data ?? [], null);
        $this->setIfExists('sap__messages', $data ?? [], null);
        $this->setIfExists('_product', $data ?? [], null);
        $this->setIfExists('_product_plant', $data ?? [], null);
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

        if (!is_null($this->container['country_of_origin']) && (mb_strlen($this->container['country_of_origin']) > 3)) {
            $invalidProperties[] = "invalid value for 'country_of_origin', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['region_of_origin']) && (mb_strlen($this->container['region_of_origin']) > 3)) {
            $invalidProperties[] = "invalid value for 'region_of_origin', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['consumption_tax_ctrl_code']) && (mb_strlen($this->container['consumption_tax_ctrl_code']) > 16)) {
            $invalidProperties[] = "invalid value for 'consumption_tax_ctrl_code', the character length must be smaller than or equal to 16.";
        }

        if (!is_null($this->container['export_and_import_product_group']) && (mb_strlen($this->container['export_and_import_product_group']) > 4)) {
            $invalidProperties[] = "invalid value for 'export_and_import_product_group', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['product_cas_number']) && (mb_strlen($this->container['product_cas_number']) > 15)) {
            $invalidProperties[] = "invalid value for 'product_cas_number', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['prod_intl_trade_classification']) && (mb_strlen($this->container['prod_intl_trade_classification']) > 9)) {
            $invalidProperties[] = "invalid value for 'prod_intl_trade_classification', the character length must be smaller than or equal to 9.";
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
     * Gets country_of_origin
     *
     * @return string|null
     */
    public function getCountryOfOrigin()
    {
        return $this->container['country_of_origin'];
    }

    /**
     * Sets country_of_origin
     *
     * @param string|null $country_of_origin Country/Region of Origin of Product
     *
     * @return self
     */
    public function setCountryOfOrigin($country_of_origin)
    {
        if (is_null($country_of_origin)) {
            throw new \InvalidArgumentException('non-nullable country_of_origin cannot be null');
        }
        if ((mb_strlen($country_of_origin) > 3)) {
            throw new \InvalidArgumentException('invalid length for $country_of_origin when calling ComSapGatewaySrvdA2xApiProduct2V0001ProdPlntInternationalTradeTypeCreate., must be smaller than or equal to 3.');
        }

        $this->container['country_of_origin'] = $country_of_origin;

        return $this;
    }

    /**
     * Gets region_of_origin
     *
     * @return string|null
     */
    public function getRegionOfOrigin()
    {
        return $this->container['region_of_origin'];
    }

    /**
     * Sets region_of_origin
     *
     * @param string|null $region_of_origin region_of_origin
     *
     * @return self
     */
    public function setRegionOfOrigin($region_of_origin)
    {
        if (is_null($region_of_origin)) {
            throw new \InvalidArgumentException('non-nullable region_of_origin cannot be null');
        }
        if ((mb_strlen($region_of_origin) > 3)) {
            throw new \InvalidArgumentException('invalid length for $region_of_origin when calling ComSapGatewaySrvdA2xApiProduct2V0001ProdPlntInternationalTradeTypeCreate., must be smaller than or equal to 3.');
        }

        $this->container['region_of_origin'] = $region_of_origin;

        return $this;
    }

    /**
     * Gets consumption_tax_ctrl_code
     *
     * @return string|null
     */
    public function getConsumptionTaxCtrlCode()
    {
        return $this->container['consumption_tax_ctrl_code'];
    }

    /**
     * Sets consumption_tax_ctrl_code
     *
     * @param string|null $consumption_tax_ctrl_code Control code for consumption taxes in foreign trade
     *
     * @return self
     */
    public function setConsumptionTaxCtrlCode($consumption_tax_ctrl_code)
    {
        if (is_null($consumption_tax_ctrl_code)) {
            throw new \InvalidArgumentException('non-nullable consumption_tax_ctrl_code cannot be null');
        }
        if ((mb_strlen($consumption_tax_ctrl_code) > 16)) {
            throw new \InvalidArgumentException('invalid length for $consumption_tax_ctrl_code when calling ComSapGatewaySrvdA2xApiProduct2V0001ProdPlntInternationalTradeTypeCreate., must be smaller than or equal to 16.');
        }

        $this->container['consumption_tax_ctrl_code'] = $consumption_tax_ctrl_code;

        return $this;
    }

    /**
     * Gets export_and_import_product_group
     *
     * @return string|null
     */
    public function getExportAndImportProductGroup()
    {
        return $this->container['export_and_import_product_group'];
    }

    /**
     * Sets export_and_import_product_group
     *
     * @param string|null $export_and_import_product_group Material Group for Intrastat
     *
     * @return self
     */
    public function setExportAndImportProductGroup($export_and_import_product_group)
    {
        if (is_null($export_and_import_product_group)) {
            throw new \InvalidArgumentException('non-nullable export_and_import_product_group cannot be null');
        }
        if ((mb_strlen($export_and_import_product_group) > 4)) {
            throw new \InvalidArgumentException('invalid length for $export_and_import_product_group when calling ComSapGatewaySrvdA2xApiProduct2V0001ProdPlntInternationalTradeTypeCreate., must be smaller than or equal to 4.');
        }

        $this->container['export_and_import_product_group'] = $export_and_import_product_group;

        return $this;
    }

    /**
     * Gets product_cas_number
     *
     * @return string|null
     */
    public function getProductCasNumber()
    {
        return $this->container['product_cas_number'];
    }

    /**
     * Sets product_cas_number
     *
     * @param string|null $product_cas_number CAS number for pharmaceutical products in foreign trade
     *
     * @return self
     */
    public function setProductCasNumber($product_cas_number)
    {
        if (is_null($product_cas_number)) {
            throw new \InvalidArgumentException('non-nullable product_cas_number cannot be null');
        }
        if ((mb_strlen($product_cas_number) > 15)) {
            throw new \InvalidArgumentException('invalid length for $product_cas_number when calling ComSapGatewaySrvdA2xApiProduct2V0001ProdPlntInternationalTradeTypeCreate., must be smaller than or equal to 15.');
        }

        $this->container['product_cas_number'] = $product_cas_number;

        return $this;
    }

    /**
     * Gets prod_intl_trade_classification
     *
     * @return string|null
     */
    public function getProdIntlTradeClassification()
    {
        return $this->container['prod_intl_trade_classification'];
    }

    /**
     * Sets prod_intl_trade_classification
     *
     * @param string|null $prod_intl_trade_classification Production statistics: PRODCOM number for foreign trade
     *
     * @return self
     */
    public function setProdIntlTradeClassification($prod_intl_trade_classification)
    {
        if (is_null($prod_intl_trade_classification)) {
            throw new \InvalidArgumentException('non-nullable prod_intl_trade_classification cannot be null');
        }
        if ((mb_strlen($prod_intl_trade_classification) > 9)) {
            throw new \InvalidArgumentException('invalid length for $prod_intl_trade_classification when calling ComSapGatewaySrvdA2xApiProduct2V0001ProdPlntInternationalTradeTypeCreate., must be smaller than or equal to 9.');
        }

        $this->container['prod_intl_trade_classification'] = $prod_intl_trade_classification;

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
     * Gets _product_plant
     *
     * @return \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantTypeCreate|null
     */
    public function _getProductPlant()
    {
    return $this->container['_product_plant'];
    }

    /**
     * Sets _product_plant
     *
     * @param \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantTypeCreate|null $_product_plant _product_plant
     *
     * @return self
     */
    public function _setProductPlant($_product_plant)
    {
        if (is_null($_product_plant)) {
            throw new \InvalidArgumentException('non-nullable _product_plant cannot be null');
        }
        $this->container['_product_plant'] = $_product_plant;

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


