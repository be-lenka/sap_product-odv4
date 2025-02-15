<?php
/**
 * ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantWorkSchedulingTypeUpdate
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
 * ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantWorkSchedulingTypeUpdate Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\ProductODV4
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantWorkSchedulingTypeUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'com.sap.gateway.srvd_a2x.api_product_2.v0001.ProductPlantWorkScheduling_Type-update';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'product_base_quantity' => '\BeLenka\SAP\ProductODV4\Model\BaseQuantity1',
        'unlimited_over_deliv_is_allowed' => 'bool',
        'over_delivery_tolerance_percent' => '\BeLenka\SAP\ProductODV4\Model\OverdeliveryToler',
        'under_delivery_tolerance_percent' => '\BeLenka\SAP\ProductODV4\Model\UnderdeliveryToler',
        'production_invtry_managed_loc' => 'string',
        'production_order_batch_code' => 'string',
        'prod_is_withdrawn_frm_prodn_bin' => 'bool',
        'transition_matrix_products_group' => 'string',
        'order_change_management_profile' => 'string',
        'product_component_backflush_code' => 'string',
        'setup_and_teardown_time' => '\BeLenka\SAP\ProductODV4\Model\SetupTime1',
        'production_scheduling_profile' => 'string',
        'transition_time' => '\BeLenka\SAP\ProductODV4\Model\Interoperation',
        'processing_time_in_days' => '\BeLenka\SAP\ProductODV4\Model\ProcessingTime1',
        'production_supervisor' => 'string',
        'product_production_quantity_unit' => 'string',
        'prod_production_quantity_iso_unit' => 'string',
        'base_unit' => 'string',
        'base_iso_unit' => 'string',
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
        'product_base_quantity' => null,
        'unlimited_over_deliv_is_allowed' => null,
        'over_delivery_tolerance_percent' => null,
        'under_delivery_tolerance_percent' => null,
        'production_invtry_managed_loc' => null,
        'production_order_batch_code' => null,
        'prod_is_withdrawn_frm_prodn_bin' => null,
        'transition_matrix_products_group' => null,
        'order_change_management_profile' => null,
        'product_component_backflush_code' => null,
        'setup_and_teardown_time' => null,
        'production_scheduling_profile' => null,
        'transition_time' => null,
        'processing_time_in_days' => null,
        'production_supervisor' => null,
        'product_production_quantity_unit' => null,
        'prod_production_quantity_iso_unit' => null,
        'base_unit' => null,
        'base_iso_unit' => null,
        'sap__messages' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'product_base_quantity' => false,
		'unlimited_over_deliv_is_allowed' => false,
		'over_delivery_tolerance_percent' => false,
		'under_delivery_tolerance_percent' => false,
		'production_invtry_managed_loc' => false,
		'production_order_batch_code' => false,
		'prod_is_withdrawn_frm_prodn_bin' => false,
		'transition_matrix_products_group' => false,
		'order_change_management_profile' => false,
		'product_component_backflush_code' => false,
		'setup_and_teardown_time' => false,
		'production_scheduling_profile' => false,
		'transition_time' => false,
		'processing_time_in_days' => false,
		'production_supervisor' => false,
		'product_production_quantity_unit' => false,
		'prod_production_quantity_iso_unit' => false,
		'base_unit' => false,
		'base_iso_unit' => false,
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
        'product_base_quantity' => 'ProductBaseQuantity',
        'unlimited_over_deliv_is_allowed' => 'UnlimitedOverDelivIsAllowed',
        'over_delivery_tolerance_percent' => 'OverDeliveryTolerancePercent',
        'under_delivery_tolerance_percent' => 'UnderDeliveryTolerancePercent',
        'production_invtry_managed_loc' => 'ProductionInvtryManagedLoc',
        'production_order_batch_code' => 'ProductionOrderBatchCode',
        'prod_is_withdrawn_frm_prodn_bin' => 'ProdIsWithdrawnFrmProdnBin',
        'transition_matrix_products_group' => 'TransitionMatrixProductsGroup',
        'order_change_management_profile' => 'OrderChangeManagementProfile',
        'product_component_backflush_code' => 'ProductComponentBackflushCode',
        'setup_and_teardown_time' => 'SetupAndTeardownTime',
        'production_scheduling_profile' => 'ProductionSchedulingProfile',
        'transition_time' => 'TransitionTime',
        'processing_time_in_days' => 'ProcessingTimeInDays',
        'production_supervisor' => 'ProductionSupervisor',
        'product_production_quantity_unit' => 'ProductProductionQuantityUnit',
        'prod_production_quantity_iso_unit' => 'ProdProductionQuantityISOUnit',
        'base_unit' => 'BaseUnit',
        'base_iso_unit' => 'BaseISOUnit',
        'sap__messages' => 'SAP__Messages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_base_quantity' => 'setProductBaseQuantity',
        'unlimited_over_deliv_is_allowed' => 'setUnlimitedOverDelivIsAllowed',
        'over_delivery_tolerance_percent' => 'setOverDeliveryTolerancePercent',
        'under_delivery_tolerance_percent' => 'setUnderDeliveryTolerancePercent',
        'production_invtry_managed_loc' => 'setProductionInvtryManagedLoc',
        'production_order_batch_code' => 'setProductionOrderBatchCode',
        'prod_is_withdrawn_frm_prodn_bin' => 'setProdIsWithdrawnFrmProdnBin',
        'transition_matrix_products_group' => 'setTransitionMatrixProductsGroup',
        'order_change_management_profile' => 'setOrderChangeManagementProfile',
        'product_component_backflush_code' => 'setProductComponentBackflushCode',
        'setup_and_teardown_time' => 'setSetupAndTeardownTime',
        'production_scheduling_profile' => 'setProductionSchedulingProfile',
        'transition_time' => 'setTransitionTime',
        'processing_time_in_days' => 'setProcessingTimeInDays',
        'production_supervisor' => 'setProductionSupervisor',
        'product_production_quantity_unit' => 'setProductProductionQuantityUnit',
        'prod_production_quantity_iso_unit' => 'setProdProductionQuantityIsoUnit',
        'base_unit' => 'setBaseUnit',
        'base_iso_unit' => 'setBaseIsoUnit',
        'sap__messages' => 'setSapMessages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_base_quantity' => 'getProductBaseQuantity',
        'unlimited_over_deliv_is_allowed' => 'getUnlimitedOverDelivIsAllowed',
        'over_delivery_tolerance_percent' => 'getOverDeliveryTolerancePercent',
        'under_delivery_tolerance_percent' => 'getUnderDeliveryTolerancePercent',
        'production_invtry_managed_loc' => 'getProductionInvtryManagedLoc',
        'production_order_batch_code' => 'getProductionOrderBatchCode',
        'prod_is_withdrawn_frm_prodn_bin' => 'getProdIsWithdrawnFrmProdnBin',
        'transition_matrix_products_group' => 'getTransitionMatrixProductsGroup',
        'order_change_management_profile' => 'getOrderChangeManagementProfile',
        'product_component_backflush_code' => 'getProductComponentBackflushCode',
        'setup_and_teardown_time' => 'getSetupAndTeardownTime',
        'production_scheduling_profile' => 'getProductionSchedulingProfile',
        'transition_time' => 'getTransitionTime',
        'processing_time_in_days' => 'getProcessingTimeInDays',
        'production_supervisor' => 'getProductionSupervisor',
        'product_production_quantity_unit' => 'getProductProductionQuantityUnit',
        'prod_production_quantity_iso_unit' => 'getProdProductionQuantityIsoUnit',
        'base_unit' => 'getBaseUnit',
        'base_iso_unit' => 'getBaseIsoUnit',
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
        $this->setIfExists('product_base_quantity', $data ?? [], null);
        $this->setIfExists('unlimited_over_deliv_is_allowed', $data ?? [], null);
        $this->setIfExists('over_delivery_tolerance_percent', $data ?? [], null);
        $this->setIfExists('under_delivery_tolerance_percent', $data ?? [], null);
        $this->setIfExists('production_invtry_managed_loc', $data ?? [], null);
        $this->setIfExists('production_order_batch_code', $data ?? [], null);
        $this->setIfExists('prod_is_withdrawn_frm_prodn_bin', $data ?? [], null);
        $this->setIfExists('transition_matrix_products_group', $data ?? [], null);
        $this->setIfExists('order_change_management_profile', $data ?? [], null);
        $this->setIfExists('product_component_backflush_code', $data ?? [], null);
        $this->setIfExists('setup_and_teardown_time', $data ?? [], null);
        $this->setIfExists('production_scheduling_profile', $data ?? [], null);
        $this->setIfExists('transition_time', $data ?? [], null);
        $this->setIfExists('processing_time_in_days', $data ?? [], null);
        $this->setIfExists('production_supervisor', $data ?? [], null);
        $this->setIfExists('product_production_quantity_unit', $data ?? [], null);
        $this->setIfExists('prod_production_quantity_iso_unit', $data ?? [], null);
        $this->setIfExists('base_unit', $data ?? [], null);
        $this->setIfExists('base_iso_unit', $data ?? [], null);
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

        if (!is_null($this->container['production_invtry_managed_loc']) && (mb_strlen($this->container['production_invtry_managed_loc']) > 4)) {
            $invalidProperties[] = "invalid value for 'production_invtry_managed_loc', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['production_order_batch_code']) && (mb_strlen($this->container['production_order_batch_code']) > 1)) {
            $invalidProperties[] = "invalid value for 'production_order_batch_code', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['transition_matrix_products_group']) && (mb_strlen($this->container['transition_matrix_products_group']) > 20)) {
            $invalidProperties[] = "invalid value for 'transition_matrix_products_group', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['order_change_management_profile']) && (mb_strlen($this->container['order_change_management_profile']) > 6)) {
            $invalidProperties[] = "invalid value for 'order_change_management_profile', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['product_component_backflush_code']) && (mb_strlen($this->container['product_component_backflush_code']) > 1)) {
            $invalidProperties[] = "invalid value for 'product_component_backflush_code', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['production_scheduling_profile']) && (mb_strlen($this->container['production_scheduling_profile']) > 6)) {
            $invalidProperties[] = "invalid value for 'production_scheduling_profile', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['production_supervisor']) && (mb_strlen($this->container['production_supervisor']) > 3)) {
            $invalidProperties[] = "invalid value for 'production_supervisor', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['product_production_quantity_unit']) && (mb_strlen($this->container['product_production_quantity_unit']) > 3)) {
            $invalidProperties[] = "invalid value for 'product_production_quantity_unit', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['prod_production_quantity_iso_unit']) && (mb_strlen($this->container['prod_production_quantity_iso_unit']) > 3)) {
            $invalidProperties[] = "invalid value for 'prod_production_quantity_iso_unit', the character length must be smaller than or equal to 3.";
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
     * Gets product_base_quantity
     *
     * @return \BeLenka\SAP\ProductODV4\Model\BaseQuantity1|null
     */
    public function getProductBaseQuantity()
    {
        return $this->container['product_base_quantity'];
    }

    /**
     * Sets product_base_quantity
     *
     * @param \BeLenka\SAP\ProductODV4\Model\BaseQuantity1|null $product_base_quantity product_base_quantity
     *
     * @return self
     */
    public function setProductBaseQuantity($product_base_quantity)
    {
        if (is_null($product_base_quantity)) {
            throw new \InvalidArgumentException('non-nullable product_base_quantity cannot be null');
        }
        $this->container['product_base_quantity'] = $product_base_quantity;

        return $this;
    }

    /**
     * Gets unlimited_over_deliv_is_allowed
     *
     * @return bool|null
     */
    public function getUnlimitedOverDelivIsAllowed()
    {
        return $this->container['unlimited_over_deliv_is_allowed'];
    }

    /**
     * Sets unlimited_over_deliv_is_allowed
     *
     * @param bool|null $unlimited_over_deliv_is_allowed Indicator: Unlimited Overdelivery Allowed
     *
     * @return self
     */
    public function setUnlimitedOverDelivIsAllowed($unlimited_over_deliv_is_allowed)
    {
        if (is_null($unlimited_over_deliv_is_allowed)) {
            throw new \InvalidArgumentException('non-nullable unlimited_over_deliv_is_allowed cannot be null');
        }
        $this->container['unlimited_over_deliv_is_allowed'] = $unlimited_over_deliv_is_allowed;

        return $this;
    }

    /**
     * Gets over_delivery_tolerance_percent
     *
     * @return \BeLenka\SAP\ProductODV4\Model\OverdeliveryToler|null
     */
    public function getOverDeliveryTolerancePercent()
    {
        return $this->container['over_delivery_tolerance_percent'];
    }

    /**
     * Sets over_delivery_tolerance_percent
     *
     * @param \BeLenka\SAP\ProductODV4\Model\OverdeliveryToler|null $over_delivery_tolerance_percent over_delivery_tolerance_percent
     *
     * @return self
     */
    public function setOverDeliveryTolerancePercent($over_delivery_tolerance_percent)
    {
        if (is_null($over_delivery_tolerance_percent)) {
            throw new \InvalidArgumentException('non-nullable over_delivery_tolerance_percent cannot be null');
        }
        $this->container['over_delivery_tolerance_percent'] = $over_delivery_tolerance_percent;

        return $this;
    }

    /**
     * Gets under_delivery_tolerance_percent
     *
     * @return \BeLenka\SAP\ProductODV4\Model\UnderdeliveryToler|null
     */
    public function getUnderDeliveryTolerancePercent()
    {
        return $this->container['under_delivery_tolerance_percent'];
    }

    /**
     * Sets under_delivery_tolerance_percent
     *
     * @param \BeLenka\SAP\ProductODV4\Model\UnderdeliveryToler|null $under_delivery_tolerance_percent under_delivery_tolerance_percent
     *
     * @return self
     */
    public function setUnderDeliveryTolerancePercent($under_delivery_tolerance_percent)
    {
        if (is_null($under_delivery_tolerance_percent)) {
            throw new \InvalidArgumentException('non-nullable under_delivery_tolerance_percent cannot be null');
        }
        $this->container['under_delivery_tolerance_percent'] = $under_delivery_tolerance_percent;

        return $this;
    }

    /**
     * Gets production_invtry_managed_loc
     *
     * @return string|null
     */
    public function getProductionInvtryManagedLoc()
    {
        return $this->container['production_invtry_managed_loc'];
    }

    /**
     * Sets production_invtry_managed_loc
     *
     * @param string|null $production_invtry_managed_loc Issue Storage Location
     *
     * @return self
     */
    public function setProductionInvtryManagedLoc($production_invtry_managed_loc)
    {
        if (is_null($production_invtry_managed_loc)) {
            throw new \InvalidArgumentException('non-nullable production_invtry_managed_loc cannot be null');
        }
        if ((mb_strlen($production_invtry_managed_loc) > 4)) {
            throw new \InvalidArgumentException('invalid length for $production_invtry_managed_loc when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantWorkSchedulingTypeUpdate., must be smaller than or equal to 4.');
        }

        $this->container['production_invtry_managed_loc'] = $production_invtry_managed_loc;

        return $this;
    }

    /**
     * Gets production_order_batch_code
     *
     * @return string|null
     */
    public function getProductionOrderBatchCode()
    {
        return $this->container['production_order_batch_code'];
    }

    /**
     * Sets production_order_batch_code
     *
     * @param string|null $production_order_batch_code Determination of batch entry in the production/process order
     *
     * @return self
     */
    public function setProductionOrderBatchCode($production_order_batch_code)
    {
        if (is_null($production_order_batch_code)) {
            throw new \InvalidArgumentException('non-nullable production_order_batch_code cannot be null');
        }
        if ((mb_strlen($production_order_batch_code) > 1)) {
            throw new \InvalidArgumentException('invalid length for $production_order_batch_code when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantWorkSchedulingTypeUpdate., must be smaller than or equal to 1.');
        }

        $this->container['production_order_batch_code'] = $production_order_batch_code;

        return $this;
    }

    /**
     * Gets prod_is_withdrawn_frm_prodn_bin
     *
     * @return bool|null
     */
    public function getProdIsWithdrawnFrmProdnBin()
    {
        return $this->container['prod_is_withdrawn_frm_prodn_bin'];
    }

    /**
     * Sets prod_is_withdrawn_frm_prodn_bin
     *
     * @param bool|null $prod_is_withdrawn_frm_prodn_bin Indicator: withdrawal of stock from production bin
     *
     * @return self
     */
    public function setProdIsWithdrawnFrmProdnBin($prod_is_withdrawn_frm_prodn_bin)
    {
        if (is_null($prod_is_withdrawn_frm_prodn_bin)) {
            throw new \InvalidArgumentException('non-nullable prod_is_withdrawn_frm_prodn_bin cannot be null');
        }
        $this->container['prod_is_withdrawn_frm_prodn_bin'] = $prod_is_withdrawn_frm_prodn_bin;

        return $this;
    }

    /**
     * Gets transition_matrix_products_group
     *
     * @return string|null
     */
    public function getTransitionMatrixProductsGroup()
    {
        return $this->container['transition_matrix_products_group'];
    }

    /**
     * Sets transition_matrix_products_group
     *
     * @param string|null $transition_matrix_products_group Group of Materials for Transition Matrix
     *
     * @return self
     */
    public function setTransitionMatrixProductsGroup($transition_matrix_products_group)
    {
        if (is_null($transition_matrix_products_group)) {
            throw new \InvalidArgumentException('non-nullable transition_matrix_products_group cannot be null');
        }
        if ((mb_strlen($transition_matrix_products_group) > 20)) {
            throw new \InvalidArgumentException('invalid length for $transition_matrix_products_group when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantWorkSchedulingTypeUpdate., must be smaller than or equal to 20.');
        }

        $this->container['transition_matrix_products_group'] = $transition_matrix_products_group;

        return $this;
    }

    /**
     * Gets order_change_management_profile
     *
     * @return string|null
     */
    public function getOrderChangeManagementProfile()
    {
        return $this->container['order_change_management_profile'];
    }

    /**
     * Sets order_change_management_profile
     *
     * @param string|null $order_change_management_profile Overall profile for order change management
     *
     * @return self
     */
    public function setOrderChangeManagementProfile($order_change_management_profile)
    {
        if (is_null($order_change_management_profile)) {
            throw new \InvalidArgumentException('non-nullable order_change_management_profile cannot be null');
        }
        if ((mb_strlen($order_change_management_profile) > 6)) {
            throw new \InvalidArgumentException('invalid length for $order_change_management_profile when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantWorkSchedulingTypeUpdate., must be smaller than or equal to 6.');
        }

        $this->container['order_change_management_profile'] = $order_change_management_profile;

        return $this;
    }

    /**
     * Gets product_component_backflush_code
     *
     * @return string|null
     */
    public function getProductComponentBackflushCode()
    {
        return $this->container['product_component_backflush_code'];
    }

    /**
     * Sets product_component_backflush_code
     *
     * @param string|null $product_component_backflush_code Indicator: Backflush
     *
     * @return self
     */
    public function setProductComponentBackflushCode($product_component_backflush_code)
    {
        if (is_null($product_component_backflush_code)) {
            throw new \InvalidArgumentException('non-nullable product_component_backflush_code cannot be null');
        }
        if ((mb_strlen($product_component_backflush_code) > 1)) {
            throw new \InvalidArgumentException('invalid length for $product_component_backflush_code when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantWorkSchedulingTypeUpdate., must be smaller than or equal to 1.');
        }

        $this->container['product_component_backflush_code'] = $product_component_backflush_code;

        return $this;
    }

    /**
     * Gets setup_and_teardown_time
     *
     * @return \BeLenka\SAP\ProductODV4\Model\SetupTime1|null
     */
    public function getSetupAndTeardownTime()
    {
        return $this->container['setup_and_teardown_time'];
    }

    /**
     * Sets setup_and_teardown_time
     *
     * @param \BeLenka\SAP\ProductODV4\Model\SetupTime1|null $setup_and_teardown_time setup_and_teardown_time
     *
     * @return self
     */
    public function setSetupAndTeardownTime($setup_and_teardown_time)
    {
        if (is_null($setup_and_teardown_time)) {
            throw new \InvalidArgumentException('non-nullable setup_and_teardown_time cannot be null');
        }
        $this->container['setup_and_teardown_time'] = $setup_and_teardown_time;

        return $this;
    }

    /**
     * Gets production_scheduling_profile
     *
     * @return string|null
     */
    public function getProductionSchedulingProfile()
    {
        return $this->container['production_scheduling_profile'];
    }

    /**
     * Sets production_scheduling_profile
     *
     * @param string|null $production_scheduling_profile production_scheduling_profile
     *
     * @return self
     */
    public function setProductionSchedulingProfile($production_scheduling_profile)
    {
        if (is_null($production_scheduling_profile)) {
            throw new \InvalidArgumentException('non-nullable production_scheduling_profile cannot be null');
        }
        if ((mb_strlen($production_scheduling_profile) > 6)) {
            throw new \InvalidArgumentException('invalid length for $production_scheduling_profile when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantWorkSchedulingTypeUpdate., must be smaller than or equal to 6.');
        }

        $this->container['production_scheduling_profile'] = $production_scheduling_profile;

        return $this;
    }

    /**
     * Gets transition_time
     *
     * @return \BeLenka\SAP\ProductODV4\Model\Interoperation|null
     */
    public function getTransitionTime()
    {
        return $this->container['transition_time'];
    }

    /**
     * Sets transition_time
     *
     * @param \BeLenka\SAP\ProductODV4\Model\Interoperation|null $transition_time transition_time
     *
     * @return self
     */
    public function setTransitionTime($transition_time)
    {
        if (is_null($transition_time)) {
            throw new \InvalidArgumentException('non-nullable transition_time cannot be null');
        }
        $this->container['transition_time'] = $transition_time;

        return $this;
    }

    /**
     * Gets processing_time_in_days
     *
     * @return \BeLenka\SAP\ProductODV4\Model\ProcessingTime1|null
     */
    public function getProcessingTimeInDays()
    {
        return $this->container['processing_time_in_days'];
    }

    /**
     * Sets processing_time_in_days
     *
     * @param \BeLenka\SAP\ProductODV4\Model\ProcessingTime1|null $processing_time_in_days processing_time_in_days
     *
     * @return self
     */
    public function setProcessingTimeInDays($processing_time_in_days)
    {
        if (is_null($processing_time_in_days)) {
            throw new \InvalidArgumentException('non-nullable processing_time_in_days cannot be null');
        }
        $this->container['processing_time_in_days'] = $processing_time_in_days;

        return $this;
    }

    /**
     * Gets production_supervisor
     *
     * @return string|null
     */
    public function getProductionSupervisor()
    {
        return $this->container['production_supervisor'];
    }

    /**
     * Sets production_supervisor
     *
     * @param string|null $production_supervisor Production Supervisor
     *
     * @return self
     */
    public function setProductionSupervisor($production_supervisor)
    {
        if (is_null($production_supervisor)) {
            throw new \InvalidArgumentException('non-nullable production_supervisor cannot be null');
        }
        if ((mb_strlen($production_supervisor) > 3)) {
            throw new \InvalidArgumentException('invalid length for $production_supervisor when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantWorkSchedulingTypeUpdate., must be smaller than or equal to 3.');
        }

        $this->container['production_supervisor'] = $production_supervisor;

        return $this;
    }

    /**
     * Gets product_production_quantity_unit
     *
     * @return string|null
     */
    public function getProductProductionQuantityUnit()
    {
        return $this->container['product_production_quantity_unit'];
    }

    /**
     * Sets product_production_quantity_unit
     *
     * @param string|null $product_production_quantity_unit Base Unit of Measure - No Conversion Routine
     *
     * @return self
     */
    public function setProductProductionQuantityUnit($product_production_quantity_unit)
    {
        if (is_null($product_production_quantity_unit)) {
            throw new \InvalidArgumentException('non-nullable product_production_quantity_unit cannot be null');
        }
        if ((mb_strlen($product_production_quantity_unit) > 3)) {
            throw new \InvalidArgumentException('invalid length for $product_production_quantity_unit when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantWorkSchedulingTypeUpdate., must be smaller than or equal to 3.');
        }

        $this->container['product_production_quantity_unit'] = $product_production_quantity_unit;

        return $this;
    }

    /**
     * Gets prod_production_quantity_iso_unit
     *
     * @return string|null
     */
    public function getProdProductionQuantityIsoUnit()
    {
        return $this->container['prod_production_quantity_iso_unit'];
    }

    /**
     * Sets prod_production_quantity_iso_unit
     *
     * @param string|null $prod_production_quantity_iso_unit Production Unit in ISO Code
     *
     * @return self
     */
    public function setProdProductionQuantityIsoUnit($prod_production_quantity_iso_unit)
    {
        if (is_null($prod_production_quantity_iso_unit)) {
            throw new \InvalidArgumentException('non-nullable prod_production_quantity_iso_unit cannot be null');
        }
        if ((mb_strlen($prod_production_quantity_iso_unit) > 3)) {
            throw new \InvalidArgumentException('invalid length for $prod_production_quantity_iso_unit when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantWorkSchedulingTypeUpdate., must be smaller than or equal to 3.');
        }

        $this->container['prod_production_quantity_iso_unit'] = $prod_production_quantity_iso_unit;

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
            throw new \InvalidArgumentException('invalid length for $base_unit when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantWorkSchedulingTypeUpdate., must be smaller than or equal to 3.');
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
            throw new \InvalidArgumentException('invalid length for $base_iso_unit when calling ComSapGatewaySrvdA2xApiProduct2V0001ProductPlantWorkSchedulingTypeUpdate., must be smaller than or equal to 3.');
        }

        $this->container['base_iso_unit'] = $base_iso_unit;

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


