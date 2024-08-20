<?php
/**
 * ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationAccountingTypeCreate
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
 * ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationAccountingTypeCreate Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\ProductODV4
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationAccountingTypeCreate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'com.sap.gateway.srvd_a2x.api_product_2.v0001.ProductValuationAccounting_Type-create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'commercial_price1_in_co_code_crcy' => '\BeLenka\SAP\ProductODV4\Model\CommercialPrice1',
        'commercial_price2_in_co_code_crcy' => '\BeLenka\SAP\ProductODV4\Model\CommercialPrice2',
        'commercial_price3_in_co_code_crcy' => '\BeLenka\SAP\ProductODV4\Model\CommercialPrice3',
        'devaluation_year_count' => 'string',
        'future_price' => '\BeLenka\SAP\ProductODV4\Model\FuturePrice',
        'future_price_validity_start_date' => '\DateTime',
        'lifo_valuation_pool_number' => 'string',
        'tax_pricel1_in_co_code_crcy' => '\BeLenka\SAP\ProductODV4\Model\TaxPrice1',
        'tax_price2_in_co_code_crcy' => '\BeLenka\SAP\ProductODV4\Model\TaxPrice2',
        'tax_price3_in_co_code_crcy' => '\BeLenka\SAP\ProductODV4\Model\TaxPrice3',
        'tax_based_prices_price_unit_qty' => '\BeLenka\SAP\ProductODV4\Model\PriceUnit',
        'is_lifo_and_fifo_relevant' => 'bool',
        'currency' => 'string',
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
        'commercial_price1_in_co_code_crcy' => null,
        'commercial_price2_in_co_code_crcy' => null,
        'commercial_price3_in_co_code_crcy' => null,
        'devaluation_year_count' => null,
        'future_price' => null,
        'future_price_validity_start_date' => 'date',
        'lifo_valuation_pool_number' => null,
        'tax_pricel1_in_co_code_crcy' => null,
        'tax_price2_in_co_code_crcy' => null,
        'tax_price3_in_co_code_crcy' => null,
        'tax_based_prices_price_unit_qty' => null,
        'is_lifo_and_fifo_relevant' => null,
        'currency' => null,
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
        'commercial_price1_in_co_code_crcy' => false,
		'commercial_price2_in_co_code_crcy' => false,
		'commercial_price3_in_co_code_crcy' => false,
		'devaluation_year_count' => false,
		'future_price' => false,
		'future_price_validity_start_date' => true,
		'lifo_valuation_pool_number' => false,
		'tax_pricel1_in_co_code_crcy' => false,
		'tax_price2_in_co_code_crcy' => false,
		'tax_price3_in_co_code_crcy' => false,
		'tax_based_prices_price_unit_qty' => false,
		'is_lifo_and_fifo_relevant' => false,
		'currency' => false,
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
        'commercial_price1_in_co_code_crcy' => 'CommercialPrice1InCoCodeCrcy',
        'commercial_price2_in_co_code_crcy' => 'CommercialPrice2InCoCodeCrcy',
        'commercial_price3_in_co_code_crcy' => 'CommercialPrice3InCoCodeCrcy',
        'devaluation_year_count' => 'DevaluationYearCount',
        'future_price' => 'FuturePrice',
        'future_price_validity_start_date' => 'FuturePriceValidityStartDate',
        'lifo_valuation_pool_number' => 'LIFOValuationPoolNumber',
        'tax_pricel1_in_co_code_crcy' => 'TaxPricel1InCoCodeCrcy',
        'tax_price2_in_co_code_crcy' => 'TaxPrice2InCoCodeCrcy',
        'tax_price3_in_co_code_crcy' => 'TaxPrice3InCoCodeCrcy',
        'tax_based_prices_price_unit_qty' => 'TaxBasedPricesPriceUnitQty',
        'is_lifo_and_fifo_relevant' => 'IsLIFOAndFIFORelevant',
        'currency' => 'Currency',
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
        'commercial_price1_in_co_code_crcy' => 'setCommercialPrice1InCoCodeCrcy',
        'commercial_price2_in_co_code_crcy' => 'setCommercialPrice2InCoCodeCrcy',
        'commercial_price3_in_co_code_crcy' => 'setCommercialPrice3InCoCodeCrcy',
        'devaluation_year_count' => 'setDevaluationYearCount',
        'future_price' => 'setFuturePrice',
        'future_price_validity_start_date' => 'setFuturePriceValidityStartDate',
        'lifo_valuation_pool_number' => 'setLifoValuationPoolNumber',
        'tax_pricel1_in_co_code_crcy' => 'setTaxPricel1InCoCodeCrcy',
        'tax_price2_in_co_code_crcy' => 'setTaxPrice2InCoCodeCrcy',
        'tax_price3_in_co_code_crcy' => 'setTaxPrice3InCoCodeCrcy',
        'tax_based_prices_price_unit_qty' => 'setTaxBasedPricesPriceUnitQty',
        'is_lifo_and_fifo_relevant' => 'setIsLifoAndFifoRelevant',
        'currency' => 'setCurrency',
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
        'commercial_price1_in_co_code_crcy' => 'getCommercialPrice1InCoCodeCrcy',
        'commercial_price2_in_co_code_crcy' => 'getCommercialPrice2InCoCodeCrcy',
        'commercial_price3_in_co_code_crcy' => 'getCommercialPrice3InCoCodeCrcy',
        'devaluation_year_count' => 'getDevaluationYearCount',
        'future_price' => 'getFuturePrice',
        'future_price_validity_start_date' => 'getFuturePriceValidityStartDate',
        'lifo_valuation_pool_number' => 'getLifoValuationPoolNumber',
        'tax_pricel1_in_co_code_crcy' => 'getTaxPricel1InCoCodeCrcy',
        'tax_price2_in_co_code_crcy' => 'getTaxPrice2InCoCodeCrcy',
        'tax_price3_in_co_code_crcy' => 'getTaxPrice3InCoCodeCrcy',
        'tax_based_prices_price_unit_qty' => 'getTaxBasedPricesPriceUnitQty',
        'is_lifo_and_fifo_relevant' => 'getIsLifoAndFifoRelevant',
        'currency' => 'getCurrency',
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
        $this->setIfExists('commercial_price1_in_co_code_crcy', $data ?? [], null);
        $this->setIfExists('commercial_price2_in_co_code_crcy', $data ?? [], null);
        $this->setIfExists('commercial_price3_in_co_code_crcy', $data ?? [], null);
        $this->setIfExists('devaluation_year_count', $data ?? [], null);
        $this->setIfExists('future_price', $data ?? [], null);
        $this->setIfExists('future_price_validity_start_date', $data ?? [], null);
        $this->setIfExists('lifo_valuation_pool_number', $data ?? [], null);
        $this->setIfExists('tax_pricel1_in_co_code_crcy', $data ?? [], null);
        $this->setIfExists('tax_price2_in_co_code_crcy', $data ?? [], null);
        $this->setIfExists('tax_price3_in_co_code_crcy', $data ?? [], null);
        $this->setIfExists('tax_based_prices_price_unit_qty', $data ?? [], null);
        $this->setIfExists('is_lifo_and_fifo_relevant', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
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

        if (!is_null($this->container['devaluation_year_count']) && (mb_strlen($this->container['devaluation_year_count']) > 2)) {
            $invalidProperties[] = "invalid value for 'devaluation_year_count', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['lifo_valuation_pool_number']) && (mb_strlen($this->container['lifo_valuation_pool_number']) > 4)) {
            $invalidProperties[] = "invalid value for 'lifo_valuation_pool_number', the character length must be smaller than or equal to 4.";
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
     * Gets commercial_price1_in_co_code_crcy
     *
     * @return \BeLenka\SAP\ProductODV4\Model\CommercialPrice1|null
     */
    public function getCommercialPrice1InCoCodeCrcy()
    {
        return $this->container['commercial_price1_in_co_code_crcy'];
    }

    /**
     * Sets commercial_price1_in_co_code_crcy
     *
     * @param \BeLenka\SAP\ProductODV4\Model\CommercialPrice1|null $commercial_price1_in_co_code_crcy commercial_price1_in_co_code_crcy
     *
     * @return self
     */
    public function setCommercialPrice1InCoCodeCrcy($commercial_price1_in_co_code_crcy)
    {
        if (is_null($commercial_price1_in_co_code_crcy)) {
            throw new \InvalidArgumentException('non-nullable commercial_price1_in_co_code_crcy cannot be null');
        }
        $this->container['commercial_price1_in_co_code_crcy'] = $commercial_price1_in_co_code_crcy;

        return $this;
    }

    /**
     * Gets commercial_price2_in_co_code_crcy
     *
     * @return \BeLenka\SAP\ProductODV4\Model\CommercialPrice2|null
     */
    public function getCommercialPrice2InCoCodeCrcy()
    {
        return $this->container['commercial_price2_in_co_code_crcy'];
    }

    /**
     * Sets commercial_price2_in_co_code_crcy
     *
     * @param \BeLenka\SAP\ProductODV4\Model\CommercialPrice2|null $commercial_price2_in_co_code_crcy commercial_price2_in_co_code_crcy
     *
     * @return self
     */
    public function setCommercialPrice2InCoCodeCrcy($commercial_price2_in_co_code_crcy)
    {
        if (is_null($commercial_price2_in_co_code_crcy)) {
            throw new \InvalidArgumentException('non-nullable commercial_price2_in_co_code_crcy cannot be null');
        }
        $this->container['commercial_price2_in_co_code_crcy'] = $commercial_price2_in_co_code_crcy;

        return $this;
    }

    /**
     * Gets commercial_price3_in_co_code_crcy
     *
     * @return \BeLenka\SAP\ProductODV4\Model\CommercialPrice3|null
     */
    public function getCommercialPrice3InCoCodeCrcy()
    {
        return $this->container['commercial_price3_in_co_code_crcy'];
    }

    /**
     * Sets commercial_price3_in_co_code_crcy
     *
     * @param \BeLenka\SAP\ProductODV4\Model\CommercialPrice3|null $commercial_price3_in_co_code_crcy commercial_price3_in_co_code_crcy
     *
     * @return self
     */
    public function setCommercialPrice3InCoCodeCrcy($commercial_price3_in_co_code_crcy)
    {
        if (is_null($commercial_price3_in_co_code_crcy)) {
            throw new \InvalidArgumentException('non-nullable commercial_price3_in_co_code_crcy cannot be null');
        }
        $this->container['commercial_price3_in_co_code_crcy'] = $commercial_price3_in_co_code_crcy;

        return $this;
    }

    /**
     * Gets devaluation_year_count
     *
     * @return string|null
     */
    public function getDevaluationYearCount()
    {
        return $this->container['devaluation_year_count'];
    }

    /**
     * Sets devaluation_year_count
     *
     * @param string|null $devaluation_year_count Lowest value: devaluation indicator
     *
     * @return self
     */
    public function setDevaluationYearCount($devaluation_year_count)
    {
        if (is_null($devaluation_year_count)) {
            throw new \InvalidArgumentException('non-nullable devaluation_year_count cannot be null');
        }
        if ((mb_strlen($devaluation_year_count) > 2)) {
            throw new \InvalidArgumentException('invalid length for $devaluation_year_count when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationAccountingTypeCreate., must be smaller than or equal to 2.');
        }

        $this->container['devaluation_year_count'] = $devaluation_year_count;

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
     * @param \DateTime|null $future_price_validity_start_date Date as of which the price is valid
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
     * Gets lifo_valuation_pool_number
     *
     * @return string|null
     */
    public function getLifoValuationPoolNumber()
    {
        return $this->container['lifo_valuation_pool_number'];
    }

    /**
     * Sets lifo_valuation_pool_number
     *
     * @param string|null $lifo_valuation_pool_number Pool number for LIFO valuation
     *
     * @return self
     */
    public function setLifoValuationPoolNumber($lifo_valuation_pool_number)
    {
        if (is_null($lifo_valuation_pool_number)) {
            throw new \InvalidArgumentException('non-nullable lifo_valuation_pool_number cannot be null');
        }
        if ((mb_strlen($lifo_valuation_pool_number) > 4)) {
            throw new \InvalidArgumentException('invalid length for $lifo_valuation_pool_number when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationAccountingTypeCreate., must be smaller than or equal to 4.');
        }

        $this->container['lifo_valuation_pool_number'] = $lifo_valuation_pool_number;

        return $this;
    }

    /**
     * Gets tax_pricel1_in_co_code_crcy
     *
     * @return \BeLenka\SAP\ProductODV4\Model\TaxPrice1|null
     */
    public function getTaxPricel1InCoCodeCrcy()
    {
        return $this->container['tax_pricel1_in_co_code_crcy'];
    }

    /**
     * Sets tax_pricel1_in_co_code_crcy
     *
     * @param \BeLenka\SAP\ProductODV4\Model\TaxPrice1|null $tax_pricel1_in_co_code_crcy tax_pricel1_in_co_code_crcy
     *
     * @return self
     */
    public function setTaxPricel1InCoCodeCrcy($tax_pricel1_in_co_code_crcy)
    {
        if (is_null($tax_pricel1_in_co_code_crcy)) {
            throw new \InvalidArgumentException('non-nullable tax_pricel1_in_co_code_crcy cannot be null');
        }
        $this->container['tax_pricel1_in_co_code_crcy'] = $tax_pricel1_in_co_code_crcy;

        return $this;
    }

    /**
     * Gets tax_price2_in_co_code_crcy
     *
     * @return \BeLenka\SAP\ProductODV4\Model\TaxPrice2|null
     */
    public function getTaxPrice2InCoCodeCrcy()
    {
        return $this->container['tax_price2_in_co_code_crcy'];
    }

    /**
     * Sets tax_price2_in_co_code_crcy
     *
     * @param \BeLenka\SAP\ProductODV4\Model\TaxPrice2|null $tax_price2_in_co_code_crcy tax_price2_in_co_code_crcy
     *
     * @return self
     */
    public function setTaxPrice2InCoCodeCrcy($tax_price2_in_co_code_crcy)
    {
        if (is_null($tax_price2_in_co_code_crcy)) {
            throw new \InvalidArgumentException('non-nullable tax_price2_in_co_code_crcy cannot be null');
        }
        $this->container['tax_price2_in_co_code_crcy'] = $tax_price2_in_co_code_crcy;

        return $this;
    }

    /**
     * Gets tax_price3_in_co_code_crcy
     *
     * @return \BeLenka\SAP\ProductODV4\Model\TaxPrice3|null
     */
    public function getTaxPrice3InCoCodeCrcy()
    {
        return $this->container['tax_price3_in_co_code_crcy'];
    }

    /**
     * Sets tax_price3_in_co_code_crcy
     *
     * @param \BeLenka\SAP\ProductODV4\Model\TaxPrice3|null $tax_price3_in_co_code_crcy tax_price3_in_co_code_crcy
     *
     * @return self
     */
    public function setTaxPrice3InCoCodeCrcy($tax_price3_in_co_code_crcy)
    {
        if (is_null($tax_price3_in_co_code_crcy)) {
            throw new \InvalidArgumentException('non-nullable tax_price3_in_co_code_crcy cannot be null');
        }
        $this->container['tax_price3_in_co_code_crcy'] = $tax_price3_in_co_code_crcy;

        return $this;
    }

    /**
     * Gets tax_based_prices_price_unit_qty
     *
     * @return \BeLenka\SAP\ProductODV4\Model\PriceUnit|null
     */
    public function getTaxBasedPricesPriceUnitQty()
    {
        return $this->container['tax_based_prices_price_unit_qty'];
    }

    /**
     * Sets tax_based_prices_price_unit_qty
     *
     * @param \BeLenka\SAP\ProductODV4\Model\PriceUnit|null $tax_based_prices_price_unit_qty tax_based_prices_price_unit_qty
     *
     * @return self
     */
    public function setTaxBasedPricesPriceUnitQty($tax_based_prices_price_unit_qty)
    {
        if (is_null($tax_based_prices_price_unit_qty)) {
            throw new \InvalidArgumentException('non-nullable tax_based_prices_price_unit_qty cannot be null');
        }
        $this->container['tax_based_prices_price_unit_qty'] = $tax_based_prices_price_unit_qty;

        return $this;
    }

    /**
     * Gets is_lifo_and_fifo_relevant
     *
     * @return bool|null
     */
    public function getIsLifoAndFifoRelevant()
    {
        return $this->container['is_lifo_and_fifo_relevant'];
    }

    /**
     * Sets is_lifo_and_fifo_relevant
     *
     * @param bool|null $is_lifo_and_fifo_relevant Data element for domain BOOLE: TRUE (='X') and FALSE (=' ')
     *
     * @return self
     */
    public function setIsLifoAndFifoRelevant($is_lifo_and_fifo_relevant)
    {
        if (is_null($is_lifo_and_fifo_relevant)) {
            throw new \InvalidArgumentException('non-nullable is_lifo_and_fifo_relevant cannot be null');
        }
        $this->container['is_lifo_and_fifo_relevant'] = $is_lifo_and_fifo_relevant;

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
            throw new \InvalidArgumentException('invalid length for $currency when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationAccountingTypeCreate., must be smaller than or equal to 3.');
        }

        $this->container['currency'] = $currency;

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
            throw new \InvalidArgumentException('invalid length for $base_unit when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationAccountingTypeCreate., must be smaller than or equal to 3.');
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
            throw new \InvalidArgumentException('invalid length for $base_iso_unit when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductValuationAccountingTypeCreate., must be smaller than or equal to 3.');
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


