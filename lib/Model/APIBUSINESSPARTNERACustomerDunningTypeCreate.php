<?php
/**
 * APIBUSINESSPARTNERACustomerDunningTypeCreate
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  BeLenka\SAP\BusinessPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Business Partner (A2X)
 *
 * This service enables you to create, display, update, and delete data related to Business Partner, Supplier, and Customer with the data provided in a payload, in an API call. This service also supports create deep entity operation and batch processing.
 *
 * The version of the OpenAPI document: 1.5.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace BeLenka\SAP\BusinessPartner\Model;

use \ArrayAccess;
use \BeLenka\SAP\BusinessPartner\ObjectSerializer;

/**
 * APIBUSINESSPARTNERACustomerDunningTypeCreate Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\BusinessPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class APIBUSINESSPARTNERACustomerDunningTypeCreate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'API_BUSINESS_PARTNER.A_CustomerDunningType-create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customer' => 'string',
        'company_code' => 'string',
        'dunning_area' => 'string',
        'dunning_block' => 'string',
        'dunning_level' => 'string',
        'dunning_procedure' => 'string',
        'dunning_recipient' => 'string',
        'last_dunned_on' => 'string',
        'leg_dunning_procedure_on' => 'string',
        'dunning_clerk' => 'string',
        'authorization_group' => 'string',
        'customer_account_group' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'customer' => null,
        'company_code' => null,
        'dunning_area' => null,
        'dunning_block' => null,
        'dunning_level' => null,
        'dunning_procedure' => null,
        'dunning_recipient' => null,
        'last_dunned_on' => null,
        'leg_dunning_procedure_on' => null,
        'dunning_clerk' => null,
        'authorization_group' => null,
        'customer_account_group' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'customer' => false,
		'company_code' => false,
		'dunning_area' => false,
		'dunning_block' => true,
		'dunning_level' => true,
		'dunning_procedure' => true,
		'dunning_recipient' => true,
		'last_dunned_on' => true,
		'leg_dunning_procedure_on' => true,
		'dunning_clerk' => true,
		'authorization_group' => true,
		'customer_account_group' => true
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
        'customer' => 'Customer',
        'company_code' => 'CompanyCode',
        'dunning_area' => 'DunningArea',
        'dunning_block' => 'DunningBlock',
        'dunning_level' => 'DunningLevel',
        'dunning_procedure' => 'DunningProcedure',
        'dunning_recipient' => 'DunningRecipient',
        'last_dunned_on' => 'LastDunnedOn',
        'leg_dunning_procedure_on' => 'LegDunningProcedureOn',
        'dunning_clerk' => 'DunningClerk',
        'authorization_group' => 'AuthorizationGroup',
        'customer_account_group' => 'CustomerAccountGroup'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer' => 'setCustomer',
        'company_code' => 'setCompanyCode',
        'dunning_area' => 'setDunningArea',
        'dunning_block' => 'setDunningBlock',
        'dunning_level' => 'setDunningLevel',
        'dunning_procedure' => 'setDunningProcedure',
        'dunning_recipient' => 'setDunningRecipient',
        'last_dunned_on' => 'setLastDunnedOn',
        'leg_dunning_procedure_on' => 'setLegDunningProcedureOn',
        'dunning_clerk' => 'setDunningClerk',
        'authorization_group' => 'setAuthorizationGroup',
        'customer_account_group' => 'setCustomerAccountGroup'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer' => 'getCustomer',
        'company_code' => 'getCompanyCode',
        'dunning_area' => 'getDunningArea',
        'dunning_block' => 'getDunningBlock',
        'dunning_level' => 'getDunningLevel',
        'dunning_procedure' => 'getDunningProcedure',
        'dunning_recipient' => 'getDunningRecipient',
        'last_dunned_on' => 'getLastDunnedOn',
        'leg_dunning_procedure_on' => 'getLegDunningProcedureOn',
        'dunning_clerk' => 'getDunningClerk',
        'authorization_group' => 'getAuthorizationGroup',
        'customer_account_group' => 'getCustomerAccountGroup'
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
        $this->setIfExists('customer', $data ?? [], null);
        $this->setIfExists('company_code', $data ?? [], null);
        $this->setIfExists('dunning_area', $data ?? [], null);
        $this->setIfExists('dunning_block', $data ?? [], null);
        $this->setIfExists('dunning_level', $data ?? [], null);
        $this->setIfExists('dunning_procedure', $data ?? [], null);
        $this->setIfExists('dunning_recipient', $data ?? [], null);
        $this->setIfExists('last_dunned_on', $data ?? [], null);
        $this->setIfExists('leg_dunning_procedure_on', $data ?? [], null);
        $this->setIfExists('dunning_clerk', $data ?? [], null);
        $this->setIfExists('authorization_group', $data ?? [], null);
        $this->setIfExists('customer_account_group', $data ?? [], null);
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

        if ($this->container['customer'] === null) {
            $invalidProperties[] = "'customer' can't be null";
        }
        if ((mb_strlen($this->container['customer']) > 10)) {
            $invalidProperties[] = "invalid value for 'customer', the character length must be smaller than or equal to 10.";
        }

        if ($this->container['company_code'] === null) {
            $invalidProperties[] = "'company_code' can't be null";
        }
        if ((mb_strlen($this->container['company_code']) > 4)) {
            $invalidProperties[] = "invalid value for 'company_code', the character length must be smaller than or equal to 4.";
        }

        if ($this->container['dunning_area'] === null) {
            $invalidProperties[] = "'dunning_area' can't be null";
        }
        if ((mb_strlen($this->container['dunning_area']) > 2)) {
            $invalidProperties[] = "invalid value for 'dunning_area', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['dunning_block']) && (mb_strlen($this->container['dunning_block']) > 1)) {
            $invalidProperties[] = "invalid value for 'dunning_block', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['dunning_level']) && (mb_strlen($this->container['dunning_level']) > 1)) {
            $invalidProperties[] = "invalid value for 'dunning_level', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['dunning_procedure']) && (mb_strlen($this->container['dunning_procedure']) > 4)) {
            $invalidProperties[] = "invalid value for 'dunning_procedure', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['dunning_recipient']) && (mb_strlen($this->container['dunning_recipient']) > 10)) {
            $invalidProperties[] = "invalid value for 'dunning_recipient', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['dunning_clerk']) && (mb_strlen($this->container['dunning_clerk']) > 2)) {
            $invalidProperties[] = "invalid value for 'dunning_clerk', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['authorization_group']) && (mb_strlen($this->container['authorization_group']) > 4)) {
            $invalidProperties[] = "invalid value for 'authorization_group', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['customer_account_group']) && (mb_strlen($this->container['customer_account_group']) > 4)) {
            $invalidProperties[] = "invalid value for 'customer_account_group', the character length must be smaller than or equal to 4.";
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
     * Gets customer
     *
     * @return string
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param string $customer Customer Number
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        if (is_null($customer)) {
            throw new \InvalidArgumentException('non-nullable customer cannot be null');
        }
        if ((mb_strlen($customer) > 10)) {
            throw new \InvalidArgumentException('invalid length for $customer when calling APIBUSINESSPARTNERACustomerDunningTypeCreate., must be smaller than or equal to 10.');
        }

        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets company_code
     *
     * @return string
     */
    public function getCompanyCode()
    {
        return $this->container['company_code'];
    }

    /**
     * Sets company_code
     *
     * @param string $company_code company_code
     *
     * @return self
     */
    public function setCompanyCode($company_code)
    {
        if (is_null($company_code)) {
            throw new \InvalidArgumentException('non-nullable company_code cannot be null');
        }
        if ((mb_strlen($company_code) > 4)) {
            throw new \InvalidArgumentException('invalid length for $company_code when calling APIBUSINESSPARTNERACustomerDunningTypeCreate., must be smaller than or equal to 4.');
        }

        $this->container['company_code'] = $company_code;

        return $this;
    }

    /**
     * Gets dunning_area
     *
     * @return string
     */
    public function getDunningArea()
    {
        return $this->container['dunning_area'];
    }

    /**
     * Sets dunning_area
     *
     * @param string $dunning_area dunning_area
     *
     * @return self
     */
    public function setDunningArea($dunning_area)
    {
        if (is_null($dunning_area)) {
            throw new \InvalidArgumentException('non-nullable dunning_area cannot be null');
        }
        if ((mb_strlen($dunning_area) > 2)) {
            throw new \InvalidArgumentException('invalid length for $dunning_area when calling APIBUSINESSPARTNERACustomerDunningTypeCreate., must be smaller than or equal to 2.');
        }

        $this->container['dunning_area'] = $dunning_area;

        return $this;
    }

    /**
     * Gets dunning_block
     *
     * @return string|null
     */
    public function getDunningBlock()
    {
        return $this->container['dunning_block'];
    }

    /**
     * Sets dunning_block
     *
     * @param string|null $dunning_block dunning_block
     *
     * @return self
     */
    public function setDunningBlock($dunning_block)
    {
        if (is_null($dunning_block)) {
            array_push($this->openAPINullablesSetToNull, 'dunning_block');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dunning_block', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($dunning_block) && (mb_strlen($dunning_block) > 1)) {
            throw new \InvalidArgumentException('invalid length for $dunning_block when calling APIBUSINESSPARTNERACustomerDunningTypeCreate., must be smaller than or equal to 1.');
        }

        $this->container['dunning_block'] = $dunning_block;

        return $this;
    }

    /**
     * Gets dunning_level
     *
     * @return string|null
     */
    public function getDunningLevel()
    {
        return $this->container['dunning_level'];
    }

    /**
     * Sets dunning_level
     *
     * @param string|null $dunning_level dunning_level
     *
     * @return self
     */
    public function setDunningLevel($dunning_level)
    {
        if (is_null($dunning_level)) {
            array_push($this->openAPINullablesSetToNull, 'dunning_level');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dunning_level', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($dunning_level) && (mb_strlen($dunning_level) > 1)) {
            throw new \InvalidArgumentException('invalid length for $dunning_level when calling APIBUSINESSPARTNERACustomerDunningTypeCreate., must be smaller than or equal to 1.');
        }

        $this->container['dunning_level'] = $dunning_level;

        return $this;
    }

    /**
     * Gets dunning_procedure
     *
     * @return string|null
     */
    public function getDunningProcedure()
    {
        return $this->container['dunning_procedure'];
    }

    /**
     * Sets dunning_procedure
     *
     * @param string|null $dunning_procedure dunning_procedure
     *
     * @return self
     */
    public function setDunningProcedure($dunning_procedure)
    {
        if (is_null($dunning_procedure)) {
            array_push($this->openAPINullablesSetToNull, 'dunning_procedure');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dunning_procedure', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($dunning_procedure) && (mb_strlen($dunning_procedure) > 4)) {
            throw new \InvalidArgumentException('invalid length for $dunning_procedure when calling APIBUSINESSPARTNERACustomerDunningTypeCreate., must be smaller than or equal to 4.');
        }

        $this->container['dunning_procedure'] = $dunning_procedure;

        return $this;
    }

    /**
     * Gets dunning_recipient
     *
     * @return string|null
     */
    public function getDunningRecipient()
    {
        return $this->container['dunning_recipient'];
    }

    /**
     * Sets dunning_recipient
     *
     * @param string|null $dunning_recipient Account Number of the Dunning Recipient
     *
     * @return self
     */
    public function setDunningRecipient($dunning_recipient)
    {
        if (is_null($dunning_recipient)) {
            array_push($this->openAPINullablesSetToNull, 'dunning_recipient');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dunning_recipient', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($dunning_recipient) && (mb_strlen($dunning_recipient) > 10)) {
            throw new \InvalidArgumentException('invalid length for $dunning_recipient when calling APIBUSINESSPARTNERACustomerDunningTypeCreate., must be smaller than or equal to 10.');
        }

        $this->container['dunning_recipient'] = $dunning_recipient;

        return $this;
    }

    /**
     * Gets last_dunned_on
     *
     * @return string|null
     */
    public function getLastDunnedOn()
    {
        return $this->container['last_dunned_on'];
    }

    /**
     * Sets last_dunned_on
     *
     * @param string|null $last_dunned_on Date of Last Dunning Notice
     *
     * @return self
     */
    public function setLastDunnedOn($last_dunned_on)
    {
        if (is_null($last_dunned_on)) {
            array_push($this->openAPINullablesSetToNull, 'last_dunned_on');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_dunned_on', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['last_dunned_on'] = $last_dunned_on;

        return $this;
    }

    /**
     * Gets leg_dunning_procedure_on
     *
     * @return string|null
     */
    public function getLegDunningProcedureOn()
    {
        return $this->container['leg_dunning_procedure_on'];
    }

    /**
     * Sets leg_dunning_procedure_on
     *
     * @param string|null $leg_dunning_procedure_on Date of the Legal Dunning Proceedings
     *
     * @return self
     */
    public function setLegDunningProcedureOn($leg_dunning_procedure_on)
    {
        if (is_null($leg_dunning_procedure_on)) {
            array_push($this->openAPINullablesSetToNull, 'leg_dunning_procedure_on');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('leg_dunning_procedure_on', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['leg_dunning_procedure_on'] = $leg_dunning_procedure_on;

        return $this;
    }

    /**
     * Gets dunning_clerk
     *
     * @return string|null
     */
    public function getDunningClerk()
    {
        return $this->container['dunning_clerk'];
    }

    /**
     * Sets dunning_clerk
     *
     * @param string|null $dunning_clerk dunning_clerk
     *
     * @return self
     */
    public function setDunningClerk($dunning_clerk)
    {
        if (is_null($dunning_clerk)) {
            array_push($this->openAPINullablesSetToNull, 'dunning_clerk');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dunning_clerk', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($dunning_clerk) && (mb_strlen($dunning_clerk) > 2)) {
            throw new \InvalidArgumentException('invalid length for $dunning_clerk when calling APIBUSINESSPARTNERACustomerDunningTypeCreate., must be smaller than or equal to 2.');
        }

        $this->container['dunning_clerk'] = $dunning_clerk;

        return $this;
    }

    /**
     * Gets authorization_group
     *
     * @return string|null
     */
    public function getAuthorizationGroup()
    {
        return $this->container['authorization_group'];
    }

    /**
     * Sets authorization_group
     *
     * @param string|null $authorization_group Authorization Group
     *
     * @return self
     */
    public function setAuthorizationGroup($authorization_group)
    {
        if (is_null($authorization_group)) {
            array_push($this->openAPINullablesSetToNull, 'authorization_group');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('authorization_group', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($authorization_group) && (mb_strlen($authorization_group) > 4)) {
            throw new \InvalidArgumentException('invalid length for $authorization_group when calling APIBUSINESSPARTNERACustomerDunningTypeCreate., must be smaller than or equal to 4.');
        }

        $this->container['authorization_group'] = $authorization_group;

        return $this;
    }

    /**
     * Gets customer_account_group
     *
     * @return string|null
     */
    public function getCustomerAccountGroup()
    {
        return $this->container['customer_account_group'];
    }

    /**
     * Sets customer_account_group
     *
     * @param string|null $customer_account_group Customer Account Group
     *
     * @return self
     */
    public function setCustomerAccountGroup($customer_account_group)
    {
        if (is_null($customer_account_group)) {
            array_push($this->openAPINullablesSetToNull, 'customer_account_group');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('customer_account_group', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($customer_account_group) && (mb_strlen($customer_account_group) > 4)) {
            throw new \InvalidArgumentException('invalid length for $customer_account_group when calling APIBUSINESSPARTNERACustomerDunningTypeCreate., must be smaller than or equal to 4.');
        }

        $this->container['customer_account_group'] = $customer_account_group;

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


