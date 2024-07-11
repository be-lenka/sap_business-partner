<?php
/**
 * APIBUSINESSPARTNERABusinessPartnerAliasType
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
 * APIBUSINESSPARTNERABusinessPartnerAliasType Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\BusinessPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class APIBUSINESSPARTNERABusinessPartnerAliasType implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'API_BUSINESS_PARTNER.A_BusinessPartnerAliasType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'business_partner' => 'string',
        'bp_alias_position_number' => 'string',
        'business_partner_alias_name' => 'string'
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
        'bp_alias_position_number' => null,
        'business_partner_alias_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'business_partner' => false,
		'bp_alias_position_number' => false,
		'business_partner_alias_name' => true
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
        'bp_alias_position_number' => 'BPAliasPositionNumber',
        'business_partner_alias_name' => 'BusinessPartnerAliasName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'business_partner' => 'setBusinessPartner',
        'bp_alias_position_number' => 'setBpAliasPositionNumber',
        'business_partner_alias_name' => 'setBusinessPartnerAliasName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'business_partner' => 'getBusinessPartner',
        'bp_alias_position_number' => 'getBpAliasPositionNumber',
        'business_partner_alias_name' => 'getBusinessPartnerAliasName'
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
        $this->setIfExists('bp_alias_position_number', $data ?? [], null);
        $this->setIfExists('business_partner_alias_name', $data ?? [], null);
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

        if (!is_null($this->container['bp_alias_position_number']) && (mb_strlen($this->container['bp_alias_position_number']) > 3)) {
            $invalidProperties[] = "invalid value for 'bp_alias_position_number', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['business_partner_alias_name']) && (mb_strlen($this->container['business_partner_alias_name']) > 80)) {
            $invalidProperties[] = "invalid value for 'business_partner_alias_name', the character length must be smaller than or equal to 80.";
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
            throw new \InvalidArgumentException('invalid length for $business_partner when calling APIBUSINESSPARTNERABusinessPartnerAliasType., must be smaller than or equal to 10.');
        }

        $this->container['business_partner'] = $business_partner;

        return $this;
    }

    /**
     * Gets bp_alias_position_number
     *
     * @return string|null
     */
    public function getBpAliasPositionNumber()
    {
        return $this->container['bp_alias_position_number'];
    }

    /**
     * Sets bp_alias_position_number
     *
     * @param string|null $bp_alias_position_number Items with Business Partner Name/Alias
     *
     * @return self
     */
    public function setBpAliasPositionNumber($bp_alias_position_number)
    {
        if (is_null($bp_alias_position_number)) {
            throw new \InvalidArgumentException('non-nullable bp_alias_position_number cannot be null');
        }
        if ((mb_strlen($bp_alias_position_number) > 3)) {
            throw new \InvalidArgumentException('invalid length for $bp_alias_position_number when calling APIBUSINESSPARTNERABusinessPartnerAliasType., must be smaller than or equal to 3.');
        }

        $this->container['bp_alias_position_number'] = $bp_alias_position_number;

        return $this;
    }

    /**
     * Gets business_partner_alias_name
     *
     * @return string|null
     */
    public function getBusinessPartnerAliasName()
    {
        return $this->container['business_partner_alias_name'];
    }

    /**
     * Sets business_partner_alias_name
     *
     * @param string|null $business_partner_alias_name Business Partner Alias
     *
     * @return self
     */
    public function setBusinessPartnerAliasName($business_partner_alias_name)
    {
        if (is_null($business_partner_alias_name)) {
            array_push($this->openAPINullablesSetToNull, 'business_partner_alias_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('business_partner_alias_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($business_partner_alias_name) && (mb_strlen($business_partner_alias_name) > 80)) {
            throw new \InvalidArgumentException('invalid length for $business_partner_alias_name when calling APIBUSINESSPARTNERABusinessPartnerAliasType., must be smaller than or equal to 80.');
        }

        $this->container['business_partner_alias_name'] = $business_partner_alias_name;

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


