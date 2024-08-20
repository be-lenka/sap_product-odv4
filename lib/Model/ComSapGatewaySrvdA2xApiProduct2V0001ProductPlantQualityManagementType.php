<?php
/**
 * ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantQualityManagementType
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
 * ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantQualityManagementType Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\ProductODV4
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantQualityManagementType implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'com.sap.gateway.srvd_a2x.api_product_2.v0001.ProductPlantQualityManagement_Type';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'product' => 'string',
        'plant' => 'string',
        'prod_qlty_management_control_key' => 'string',
        'has_post_to_inspection_stock' => 'bool',
        'insp_lot_documentation_is_required' => 'bool',
        'quality_mgmt_system_for_supplier' => 'string',
        'recrrg_insp_interval_time_in_days' => '\BeLenka\SAP\ProductODV4\Model\InspectionInterval',
        'product_quality_certificate_type' => 'string',
        'prod_quality_authorization_group' => 'string',
        'sap__messages' => '\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001SAPMessage[]',
        '_product' => '\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductType',
        '_product_plant' => '\BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'product' => null,
        'plant' => null,
        'prod_qlty_management_control_key' => null,
        'has_post_to_inspection_stock' => null,
        'insp_lot_documentation_is_required' => null,
        'quality_mgmt_system_for_supplier' => null,
        'recrrg_insp_interval_time_in_days' => null,
        'product_quality_certificate_type' => null,
        'prod_quality_authorization_group' => null,
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
        'product' => false,
		'plant' => false,
		'prod_qlty_management_control_key' => false,
		'has_post_to_inspection_stock' => false,
		'insp_lot_documentation_is_required' => false,
		'quality_mgmt_system_for_supplier' => false,
		'recrrg_insp_interval_time_in_days' => false,
		'product_quality_certificate_type' => false,
		'prod_quality_authorization_group' => false,
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
        'product' => 'Product',
        'plant' => 'Plant',
        'prod_qlty_management_control_key' => 'ProdQltyManagementControlKey',
        'has_post_to_inspection_stock' => 'HasPostToInspectionStock',
        'insp_lot_documentation_is_required' => 'InspLotDocumentationIsRequired',
        'quality_mgmt_system_for_supplier' => 'QualityMgmtSystemForSupplier',
        'recrrg_insp_interval_time_in_days' => 'RecrrgInspIntervalTimeInDays',
        'product_quality_certificate_type' => 'ProductQualityCertificateType',
        'prod_quality_authorization_group' => 'ProdQualityAuthorizationGroup',
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
        'product' => 'setProduct',
        'plant' => 'setPlant',
        'prod_qlty_management_control_key' => 'setProdQltyManagementControlKey',
        'has_post_to_inspection_stock' => 'setHasPostToInspectionStock',
        'insp_lot_documentation_is_required' => 'setInspLotDocumentationIsRequired',
        'quality_mgmt_system_for_supplier' => 'setQualityMgmtSystemForSupplier',
        'recrrg_insp_interval_time_in_days' => 'setRecrrgInspIntervalTimeInDays',
        'product_quality_certificate_type' => 'setProductQualityCertificateType',
        'prod_quality_authorization_group' => 'setProdQualityAuthorizationGroup',
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
        'product' => 'getProduct',
        'plant' => 'getPlant',
        'prod_qlty_management_control_key' => 'getProdQltyManagementControlKey',
        'has_post_to_inspection_stock' => 'getHasPostToInspectionStock',
        'insp_lot_documentation_is_required' => 'getInspLotDocumentationIsRequired',
        'quality_mgmt_system_for_supplier' => 'getQualityMgmtSystemForSupplier',
        'recrrg_insp_interval_time_in_days' => 'getRecrrgInspIntervalTimeInDays',
        'product_quality_certificate_type' => 'getProductQualityCertificateType',
        'prod_quality_authorization_group' => 'getProdQualityAuthorizationGroup',
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
        $this->setIfExists('product', $data ?? [], null);
        $this->setIfExists('plant', $data ?? [], null);
        $this->setIfExists('prod_qlty_management_control_key', $data ?? [], null);
        $this->setIfExists('has_post_to_inspection_stock', $data ?? [], null);
        $this->setIfExists('insp_lot_documentation_is_required', $data ?? [], null);
        $this->setIfExists('quality_mgmt_system_for_supplier', $data ?? [], null);
        $this->setIfExists('recrrg_insp_interval_time_in_days', $data ?? [], null);
        $this->setIfExists('product_quality_certificate_type', $data ?? [], null);
        $this->setIfExists('prod_quality_authorization_group', $data ?? [], null);
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

        if (!is_null($this->container['product']) && (mb_strlen($this->container['product']) > 18)) {
            $invalidProperties[] = "invalid value for 'product', the character length must be smaller than or equal to 18.";
        }

        if (!is_null($this->container['plant']) && (mb_strlen($this->container['plant']) > 4)) {
            $invalidProperties[] = "invalid value for 'plant', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['prod_qlty_management_control_key']) && (mb_strlen($this->container['prod_qlty_management_control_key']) > 8)) {
            $invalidProperties[] = "invalid value for 'prod_qlty_management_control_key', the character length must be smaller than or equal to 8.";
        }

        if (!is_null($this->container['quality_mgmt_system_for_supplier']) && (mb_strlen($this->container['quality_mgmt_system_for_supplier']) > 4)) {
            $invalidProperties[] = "invalid value for 'quality_mgmt_system_for_supplier', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['product_quality_certificate_type']) && (mb_strlen($this->container['product_quality_certificate_type']) > 4)) {
            $invalidProperties[] = "invalid value for 'product_quality_certificate_type', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['prod_quality_authorization_group']) && (mb_strlen($this->container['prod_quality_authorization_group']) > 6)) {
            $invalidProperties[] = "invalid value for 'prod_quality_authorization_group', the character length must be smaller than or equal to 6.";
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
     * Gets product
     *
     * @return string|null
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param string|null $product Product Number
     *
     * @return self
     */
    public function setProduct($product)
    {
        if (is_null($product)) {
            throw new \InvalidArgumentException('non-nullable product cannot be null');
        }
        if ((mb_strlen($product) > 18)) {
            throw new \InvalidArgumentException('invalid length for $product when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantQualityManagementType., must be smaller than or equal to 18.');
        }

        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets plant
     *
     * @return string|null
     */
    public function getPlant()
    {
        return $this->container['plant'];
    }

    /**
     * Sets plant
     *
     * @param string|null $plant plant
     *
     * @return self
     */
    public function setPlant($plant)
    {
        if (is_null($plant)) {
            throw new \InvalidArgumentException('non-nullable plant cannot be null');
        }
        if ((mb_strlen($plant) > 4)) {
            throw new \InvalidArgumentException('invalid length for $plant when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantQualityManagementType., must be smaller than or equal to 4.');
        }

        $this->container['plant'] = $plant;

        return $this;
    }

    /**
     * Gets prod_qlty_management_control_key
     *
     * @return string|null
     */
    public function getProdQltyManagementControlKey()
    {
        return $this->container['prod_qlty_management_control_key'];
    }

    /**
     * Sets prod_qlty_management_control_key
     *
     * @param string|null $prod_qlty_management_control_key Control Key for Quality Management in Procurement
     *
     * @return self
     */
    public function setProdQltyManagementControlKey($prod_qlty_management_control_key)
    {
        if (is_null($prod_qlty_management_control_key)) {
            throw new \InvalidArgumentException('non-nullable prod_qlty_management_control_key cannot be null');
        }
        if ((mb_strlen($prod_qlty_management_control_key) > 8)) {
            throw new \InvalidArgumentException('invalid length for $prod_qlty_management_control_key when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantQualityManagementType., must be smaller than or equal to 8.');
        }

        $this->container['prod_qlty_management_control_key'] = $prod_qlty_management_control_key;

        return $this;
    }

    /**
     * Gets has_post_to_inspection_stock
     *
     * @return bool|null
     */
    public function getHasPostToInspectionStock()
    {
        return $this->container['has_post_to_inspection_stock'];
    }

    /**
     * Sets has_post_to_inspection_stock
     *
     * @param bool|null $has_post_to_inspection_stock Has Post to Inspection Stock
     *
     * @return self
     */
    public function setHasPostToInspectionStock($has_post_to_inspection_stock)
    {
        if (is_null($has_post_to_inspection_stock)) {
            throw new \InvalidArgumentException('non-nullable has_post_to_inspection_stock cannot be null');
        }
        $this->container['has_post_to_inspection_stock'] = $has_post_to_inspection_stock;

        return $this;
    }

    /**
     * Gets insp_lot_documentation_is_required
     *
     * @return bool|null
     */
    public function getInspLotDocumentationIsRequired()
    {
        return $this->container['insp_lot_documentation_is_required'];
    }

    /**
     * Sets insp_lot_documentation_is_required
     *
     * @param bool|null $insp_lot_documentation_is_required Documentation required indicator
     *
     * @return self
     */
    public function setInspLotDocumentationIsRequired($insp_lot_documentation_is_required)
    {
        if (is_null($insp_lot_documentation_is_required)) {
            throw new \InvalidArgumentException('non-nullable insp_lot_documentation_is_required cannot be null');
        }
        $this->container['insp_lot_documentation_is_required'] = $insp_lot_documentation_is_required;

        return $this;
    }

    /**
     * Gets quality_mgmt_system_for_supplier
     *
     * @return string|null
     */
    public function getQualityMgmtSystemForSupplier()
    {
        return $this->container['quality_mgmt_system_for_supplier'];
    }

    /**
     * Sets quality_mgmt_system_for_supplier
     *
     * @param string|null $quality_mgmt_system_for_supplier Required QM System for Supplier
     *
     * @return self
     */
    public function setQualityMgmtSystemForSupplier($quality_mgmt_system_for_supplier)
    {
        if (is_null($quality_mgmt_system_for_supplier)) {
            throw new \InvalidArgumentException('non-nullable quality_mgmt_system_for_supplier cannot be null');
        }
        if ((mb_strlen($quality_mgmt_system_for_supplier) > 4)) {
            throw new \InvalidArgumentException('invalid length for $quality_mgmt_system_for_supplier when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantQualityManagementType., must be smaller than or equal to 4.');
        }

        $this->container['quality_mgmt_system_for_supplier'] = $quality_mgmt_system_for_supplier;

        return $this;
    }

    /**
     * Gets recrrg_insp_interval_time_in_days
     *
     * @return \BeLenka\SAP\ProductODV4\Model\InspectionInterval|null
     */
    public function getRecrrgInspIntervalTimeInDays()
    {
        return $this->container['recrrg_insp_interval_time_in_days'];
    }

    /**
     * Sets recrrg_insp_interval_time_in_days
     *
     * @param \BeLenka\SAP\ProductODV4\Model\InspectionInterval|null $recrrg_insp_interval_time_in_days recrrg_insp_interval_time_in_days
     *
     * @return self
     */
    public function setRecrrgInspIntervalTimeInDays($recrrg_insp_interval_time_in_days)
    {
        if (is_null($recrrg_insp_interval_time_in_days)) {
            throw new \InvalidArgumentException('non-nullable recrrg_insp_interval_time_in_days cannot be null');
        }
        $this->container['recrrg_insp_interval_time_in_days'] = $recrrg_insp_interval_time_in_days;

        return $this;
    }

    /**
     * Gets product_quality_certificate_type
     *
     * @return string|null
     */
    public function getProductQualityCertificateType()
    {
        return $this->container['product_quality_certificate_type'];
    }

    /**
     * Sets product_quality_certificate_type
     *
     * @param string|null $product_quality_certificate_type product_quality_certificate_type
     *
     * @return self
     */
    public function setProductQualityCertificateType($product_quality_certificate_type)
    {
        if (is_null($product_quality_certificate_type)) {
            throw new \InvalidArgumentException('non-nullable product_quality_certificate_type cannot be null');
        }
        if ((mb_strlen($product_quality_certificate_type) > 4)) {
            throw new \InvalidArgumentException('invalid length for $product_quality_certificate_type when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantQualityManagementType., must be smaller than or equal to 4.');
        }

        $this->container['product_quality_certificate_type'] = $product_quality_certificate_type;

        return $this;
    }

    /**
     * Gets prod_quality_authorization_group
     *
     * @return string|null
     */
    public function getProdQualityAuthorizationGroup()
    {
        return $this->container['prod_quality_authorization_group'];
    }

    /**
     * Sets prod_quality_authorization_group
     *
     * @param string|null $prod_quality_authorization_group Material Authorization Group for Activities in QM
     *
     * @return self
     */
    public function setProdQualityAuthorizationGroup($prod_quality_authorization_group)
    {
        if (is_null($prod_quality_authorization_group)) {
            throw new \InvalidArgumentException('non-nullable prod_quality_authorization_group cannot be null');
        }
        if ((mb_strlen($prod_quality_authorization_group) > 6)) {
            throw new \InvalidArgumentException('invalid length for $prod_quality_authorization_group when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantQualityManagementType., must be smaller than or equal to 6.');
        }

        $this->container['prod_quality_authorization_group'] = $prod_quality_authorization_group;

        return $this;
    }

    /**
     * Gets sap__messages
     *
     * @return \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001SAPMessage[]|null
     */
    public function getSapMessages()
    {
        return $this->container['sap__messages'];
    }

    /**
     * Sets sap__messages
     *
     * @param \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001SAPMessage[]|null $sap__messages sap__messages
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
     * @return \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductType|null
     */
    public function _getProduct()
    {
    return $this->container['_product'];
    }

    /**
     * Sets _product
     *
     * @param \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductType|null $_product _product
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
     * @return \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantType|null
     */
    public function _getProductPlant()
    {
    return $this->container['_product_plant'];
    }

    /**
     * Sets _product_plant
     *
     * @param \BeLenka\SAP\ProductODV4\Model\ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantType|null $_product_plant _product_plant
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


