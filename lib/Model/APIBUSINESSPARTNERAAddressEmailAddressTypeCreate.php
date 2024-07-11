<?php
/**
 * APIBUSINESSPARTNERAAddressEmailAddressTypeCreate
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
 * APIBUSINESSPARTNERAAddressEmailAddressTypeCreate Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\BusinessPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class APIBUSINESSPARTNERAAddressEmailAddressTypeCreate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'API_BUSINESS_PARTNER.A_AddressEmailAddressType-create';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address_id' => 'string',
        'person' => 'string',
        'ordinal_number' => 'string',
        'is_default_email_address' => 'bool',
        'email_address' => 'string',
        'address_communication_remark_text' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address_id' => null,
        'person' => null,
        'ordinal_number' => null,
        'is_default_email_address' => null,
        'email_address' => null,
        'address_communication_remark_text' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'address_id' => false,
		'person' => false,
		'ordinal_number' => false,
		'is_default_email_address' => true,
		'email_address' => true,
		'address_communication_remark_text' => true
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
        'address_id' => 'AddressID',
        'person' => 'Person',
        'ordinal_number' => 'OrdinalNumber',
        'is_default_email_address' => 'IsDefaultEmailAddress',
        'email_address' => 'EmailAddress',
        'address_communication_remark_text' => 'AddressCommunicationRemarkText'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_id' => 'setAddressId',
        'person' => 'setPerson',
        'ordinal_number' => 'setOrdinalNumber',
        'is_default_email_address' => 'setIsDefaultEmailAddress',
        'email_address' => 'setEmailAddress',
        'address_communication_remark_text' => 'setAddressCommunicationRemarkText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_id' => 'getAddressId',
        'person' => 'getPerson',
        'ordinal_number' => 'getOrdinalNumber',
        'is_default_email_address' => 'getIsDefaultEmailAddress',
        'email_address' => 'getEmailAddress',
        'address_communication_remark_text' => 'getAddressCommunicationRemarkText'
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
        $this->setIfExists('address_id', $data ?? [], null);
        $this->setIfExists('person', $data ?? [], null);
        $this->setIfExists('ordinal_number', $data ?? [], null);
        $this->setIfExists('is_default_email_address', $data ?? [], null);
        $this->setIfExists('email_address', $data ?? [], null);
        $this->setIfExists('address_communication_remark_text', $data ?? [], null);
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

        if ($this->container['address_id'] === null) {
            $invalidProperties[] = "'address_id' can't be null";
        }
        if ((mb_strlen($this->container['address_id']) > 10)) {
            $invalidProperties[] = "invalid value for 'address_id', the character length must be smaller than or equal to 10.";
        }

        if ($this->container['person'] === null) {
            $invalidProperties[] = "'person' can't be null";
        }
        if ((mb_strlen($this->container['person']) > 10)) {
            $invalidProperties[] = "invalid value for 'person', the character length must be smaller than or equal to 10.";
        }

        if ($this->container['ordinal_number'] === null) {
            $invalidProperties[] = "'ordinal_number' can't be null";
        }
        if ((mb_strlen($this->container['ordinal_number']) > 3)) {
            $invalidProperties[] = "invalid value for 'ordinal_number', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['email_address']) && (mb_strlen($this->container['email_address']) > 241)) {
            $invalidProperties[] = "invalid value for 'email_address', the character length must be smaller than or equal to 241.";
        }

        if (!is_null($this->container['address_communication_remark_text']) && (mb_strlen($this->container['address_communication_remark_text']) > 50)) {
            $invalidProperties[] = "invalid value for 'address_communication_remark_text', the character length must be smaller than or equal to 50.";
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
     * Gets address_id
     *
     * @return string
     */
    public function getAddressId()
    {
        return $this->container['address_id'];
    }

    /**
     * Sets address_id
     *
     * @param string $address_id address_id
     *
     * @return self
     */
    public function setAddressId($address_id)
    {
        if (is_null($address_id)) {
            throw new \InvalidArgumentException('non-nullable address_id cannot be null');
        }
        if ((mb_strlen($address_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $address_id when calling APIBUSINESSPARTNERAAddressEmailAddressTypeCreate., must be smaller than or equal to 10.');
        }

        $this->container['address_id'] = $address_id;

        return $this;
    }

    /**
     * Gets person
     *
     * @return string
     */
    public function getPerson()
    {
        return $this->container['person'];
    }

    /**
     * Sets person
     *
     * @param string $person person
     *
     * @return self
     */
    public function setPerson($person)
    {
        if (is_null($person)) {
            throw new \InvalidArgumentException('non-nullable person cannot be null');
        }
        if ((mb_strlen($person) > 10)) {
            throw new \InvalidArgumentException('invalid length for $person when calling APIBUSINESSPARTNERAAddressEmailAddressTypeCreate., must be smaller than or equal to 10.');
        }

        $this->container['person'] = $person;

        return $this;
    }

    /**
     * Gets ordinal_number
     *
     * @return string
     */
    public function getOrdinalNumber()
    {
        return $this->container['ordinal_number'];
    }

    /**
     * Sets ordinal_number
     *
     * @param string $ordinal_number ordinal_number
     *
     * @return self
     */
    public function setOrdinalNumber($ordinal_number)
    {
        if (is_null($ordinal_number)) {
            throw new \InvalidArgumentException('non-nullable ordinal_number cannot be null');
        }
        if ((mb_strlen($ordinal_number) > 3)) {
            throw new \InvalidArgumentException('invalid length for $ordinal_number when calling APIBUSINESSPARTNERAAddressEmailAddressTypeCreate., must be smaller than or equal to 3.');
        }

        $this->container['ordinal_number'] = $ordinal_number;

        return $this;
    }

    /**
     * Gets is_default_email_address
     *
     * @return bool|null
     */
    public function getIsDefaultEmailAddress()
    {
        return $this->container['is_default_email_address'];
    }

    /**
     * Sets is_default_email_address
     *
     * @param bool|null $is_default_email_address Flag: this address is the default address
     *
     * @return self
     */
    public function setIsDefaultEmailAddress($is_default_email_address)
    {
        if (is_null($is_default_email_address)) {
            array_push($this->openAPINullablesSetToNull, 'is_default_email_address');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('is_default_email_address', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['is_default_email_address'] = $is_default_email_address;

        return $this;
    }

    /**
     * Gets email_address
     *
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string|null $email_address email_address
     *
     * @return self
     */
    public function setEmailAddress($email_address)
    {
        if (is_null($email_address)) {
            array_push($this->openAPINullablesSetToNull, 'email_address');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('email_address', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($email_address) && (mb_strlen($email_address) > 241)) {
            throw new \InvalidArgumentException('invalid length for $email_address when calling APIBUSINESSPARTNERAAddressEmailAddressTypeCreate., must be smaller than or equal to 241.');
        }

        $this->container['email_address'] = $email_address;

        return $this;
    }

    /**
     * Gets address_communication_remark_text
     *
     * @return string|null
     */
    public function getAddressCommunicationRemarkText()
    {
        return $this->container['address_communication_remark_text'];
    }

    /**
     * Sets address_communication_remark_text
     *
     * @param string|null $address_communication_remark_text Communication link notes
     *
     * @return self
     */
    public function setAddressCommunicationRemarkText($address_communication_remark_text)
    {
        if (is_null($address_communication_remark_text)) {
            array_push($this->openAPINullablesSetToNull, 'address_communication_remark_text');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address_communication_remark_text', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($address_communication_remark_text) && (mb_strlen($address_communication_remark_text) > 50)) {
            throw new \InvalidArgumentException('invalid length for $address_communication_remark_text when calling APIBUSINESSPARTNERAAddressEmailAddressTypeCreate., must be smaller than or equal to 50.');
        }

        $this->container['address_communication_remark_text'] = $address_communication_remark_text;

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


