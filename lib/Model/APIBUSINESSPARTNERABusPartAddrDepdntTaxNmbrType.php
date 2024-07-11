<?php
/**
 * APIBUSINESSPARTNERABusPartAddrDepdntTaxNmbrType
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
 * APIBUSINESSPARTNERABusPartAddrDepdntTaxNmbrType Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\BusinessPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class APIBUSINESSPARTNERABusPartAddrDepdntTaxNmbrType implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'API_BUSINESS_PARTNER.A_BusPartAddrDepdntTaxNmbrType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'business_partner' => 'string',
        'address_id' => 'string',
        'bp_tax_type' => 'string',
        'bp_tax_number' => 'string',
        'bp_tax_long_number' => 'string',
        'authorization_group' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'business_partner' => null,
        'address_id' => null,
        'bp_tax_type' => null,
        'bp_tax_number' => null,
        'bp_tax_long_number' => null,
        'authorization_group' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'business_partner' => false,
		'address_id' => false,
		'bp_tax_type' => false,
		'bp_tax_number' => true,
		'bp_tax_long_number' => true,
		'authorization_group' => true
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
        'business_partner' => 'BusinessPartner',
        'address_id' => 'AddressID',
        'bp_tax_type' => 'BPTaxType',
        'bp_tax_number' => 'BPTaxNumber',
        'bp_tax_long_number' => 'BPTaxLongNumber',
        'authorization_group' => 'AuthorizationGroup'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'business_partner' => 'setBusinessPartner',
        'address_id' => 'setAddressId',
        'bp_tax_type' => 'setBpTaxType',
        'bp_tax_number' => 'setBpTaxNumber',
        'bp_tax_long_number' => 'setBpTaxLongNumber',
        'authorization_group' => 'setAuthorizationGroup'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'business_partner' => 'getBusinessPartner',
        'address_id' => 'getAddressId',
        'bp_tax_type' => 'getBpTaxType',
        'bp_tax_number' => 'getBpTaxNumber',
        'bp_tax_long_number' => 'getBpTaxLongNumber',
        'authorization_group' => 'getAuthorizationGroup'
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
        $this->setIfExists('business_partner', $data ?? [], null);
        $this->setIfExists('address_id', $data ?? [], null);
        $this->setIfExists('bp_tax_type', $data ?? [], null);
        $this->setIfExists('bp_tax_number', $data ?? [], null);
        $this->setIfExists('bp_tax_long_number', $data ?? [], null);
        $this->setIfExists('authorization_group', $data ?? [], null);
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

        if (!is_null($this->container['business_partner']) && (mb_strlen($this->container['business_partner']) > 10)) {
            $invalidProperties[] = "invalid value for 'business_partner', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['address_id']) && (mb_strlen($this->container['address_id']) > 10)) {
            $invalidProperties[] = "invalid value for 'address_id', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['bp_tax_type']) && (mb_strlen($this->container['bp_tax_type']) > 4)) {
            $invalidProperties[] = "invalid value for 'bp_tax_type', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['bp_tax_number']) && (mb_strlen($this->container['bp_tax_number']) > 20)) {
            $invalidProperties[] = "invalid value for 'bp_tax_number', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['bp_tax_long_number']) && (mb_strlen($this->container['bp_tax_long_number']) > 60)) {
            $invalidProperties[] = "invalid value for 'bp_tax_long_number', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['authorization_group']) && (mb_strlen($this->container['authorization_group']) > 4)) {
            $invalidProperties[] = "invalid value for 'authorization_group', the character length must be smaller than or equal to 4.";
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
     * Gets business_partner
     *
     * @return string|null
     */
    public function getBusinessPartner()
    {
        return $this->container['business_partner'];
    }

    /**
     * Sets business_partner
     *
     * @param string|null $business_partner Business Partner Number
     *
     * @return self
     */
    public function setBusinessPartner($business_partner)
    {
        if (is_null($business_partner)) {
            throw new \InvalidArgumentException('non-nullable business_partner cannot be null');
        }
        if ((mb_strlen($business_partner) > 10)) {
            throw new \InvalidArgumentException('invalid length for $business_partner when calling APIBUSINESSPARTNERABusPartAddrDepdntTaxNmbrType., must be smaller than or equal to 10.');
        }

        $this->container['business_partner'] = $business_partner;

        return $this;
    }

    /**
     * Gets address_id
     *
     * @return string|null
     */
    public function getAddressId()
    {
        return $this->container['address_id'];
    }

    /**
     * Sets address_id
     *
     * @param string|null $address_id address_id
     *
     * @return self
     */
    public function setAddressId($address_id)
    {
        if (is_null($address_id)) {
            throw new \InvalidArgumentException('non-nullable address_id cannot be null');
        }
        if ((mb_strlen($address_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $address_id when calling APIBUSINESSPARTNERABusPartAddrDepdntTaxNmbrType., must be smaller than or equal to 10.');
        }

        $this->container['address_id'] = $address_id;

        return $this;
    }

    /**
     * Gets bp_tax_type
     *
     * @return string|null
     */
    public function getBpTaxType()
    {
        return $this->container['bp_tax_type'];
    }

    /**
     * Sets bp_tax_type
     *
     * @param string|null $bp_tax_type bp_tax_type
     *
     * @return self
     */
    public function setBpTaxType($bp_tax_type)
    {
        if (is_null($bp_tax_type)) {
            throw new \InvalidArgumentException('non-nullable bp_tax_type cannot be null');
        }
        if ((mb_strlen($bp_tax_type) > 4)) {
            throw new \InvalidArgumentException('invalid length for $bp_tax_type when calling APIBUSINESSPARTNERABusPartAddrDepdntTaxNmbrType., must be smaller than or equal to 4.');
        }

        $this->container['bp_tax_type'] = $bp_tax_type;

        return $this;
    }

    /**
     * Gets bp_tax_number
     *
     * @return string|null
     */
    public function getBpTaxNumber()
    {
        return $this->container['bp_tax_number'];
    }

    /**
     * Sets bp_tax_number
     *
     * @param string|null $bp_tax_number Business Partner Tax Number
     *
     * @return self
     */
    public function setBpTaxNumber($bp_tax_number)
    {
        if (is_null($bp_tax_number)) {
            array_push($this->openAPINullablesSetToNull, 'bp_tax_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bp_tax_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($bp_tax_number) && (mb_strlen($bp_tax_number) > 20)) {
            throw new \InvalidArgumentException('invalid length for $bp_tax_number when calling APIBUSINESSPARTNERABusPartAddrDepdntTaxNmbrType., must be smaller than or equal to 20.');
        }

        $this->container['bp_tax_number'] = $bp_tax_number;

        return $this;
    }

    /**
     * Gets bp_tax_long_number
     *
     * @return string|null
     */
    public function getBpTaxLongNumber()
    {
        return $this->container['bp_tax_long_number'];
    }

    /**
     * Sets bp_tax_long_number
     *
     * @param string|null $bp_tax_long_number Business Partner Tax Number
     *
     * @return self
     */
    public function setBpTaxLongNumber($bp_tax_long_number)
    {
        if (is_null($bp_tax_long_number)) {
            array_push($this->openAPINullablesSetToNull, 'bp_tax_long_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bp_tax_long_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($bp_tax_long_number) && (mb_strlen($bp_tax_long_number) > 60)) {
            throw new \InvalidArgumentException('invalid length for $bp_tax_long_number when calling APIBUSINESSPARTNERABusPartAddrDepdntTaxNmbrType., must be smaller than or equal to 60.');
        }

        $this->container['bp_tax_long_number'] = $bp_tax_long_number;

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
     * @param string|null $authorization_group authorization_group
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
            throw new \InvalidArgumentException('invalid length for $authorization_group when calling APIBUSINESSPARTNERABusPartAddrDepdntTaxNmbrType., must be smaller than or equal to 4.');
        }

        $this->container['authorization_group'] = $authorization_group;

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


