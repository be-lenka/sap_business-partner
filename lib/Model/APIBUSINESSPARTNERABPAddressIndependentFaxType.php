<?php
/**
 * APIBUSINESSPARTNERABPAddressIndependentFaxType
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
 * APIBUSINESSPARTNERABPAddressIndependentFaxType Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\BusinessPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class APIBUSINESSPARTNERABPAddressIndependentFaxType implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'API_BUSINESS_PARTNER.A_BPAddressIndependentFaxType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'business_partner' => 'string',
        'address_id' => 'string',
        'person' => 'string',
        'ordinal_number' => 'string',
        'fax_country' => 'string',
        'fax_area_code_subscriber_number' => 'string',
        'fax_number_extension' => 'string',
        'international_fax_number' => 'string',
        'is_default_fax_number' => 'bool',
        'validity_end_date' => 'string',
        'validity_start_date' => 'string'
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
        'person' => null,
        'ordinal_number' => null,
        'fax_country' => null,
        'fax_area_code_subscriber_number' => null,
        'fax_number_extension' => null,
        'international_fax_number' => null,
        'is_default_fax_number' => null,
        'validity_end_date' => null,
        'validity_start_date' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'business_partner' => false,
		'address_id' => false,
		'person' => false,
		'ordinal_number' => false,
		'fax_country' => true,
		'fax_area_code_subscriber_number' => true,
		'fax_number_extension' => true,
		'international_fax_number' => true,
		'is_default_fax_number' => true,
		'validity_end_date' => true,
		'validity_start_date' => true
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
        'person' => 'Person',
        'ordinal_number' => 'OrdinalNumber',
        'fax_country' => 'FaxCountry',
        'fax_area_code_subscriber_number' => 'FaxAreaCodeSubscriberNumber',
        'fax_number_extension' => 'FaxNumberExtension',
        'international_fax_number' => 'InternationalFaxNumber',
        'is_default_fax_number' => 'IsDefaultFaxNumber',
        'validity_end_date' => 'ValidityEndDate',
        'validity_start_date' => 'ValidityStartDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'business_partner' => 'setBusinessPartner',
        'address_id' => 'setAddressId',
        'person' => 'setPerson',
        'ordinal_number' => 'setOrdinalNumber',
        'fax_country' => 'setFaxCountry',
        'fax_area_code_subscriber_number' => 'setFaxAreaCodeSubscriberNumber',
        'fax_number_extension' => 'setFaxNumberExtension',
        'international_fax_number' => 'setInternationalFaxNumber',
        'is_default_fax_number' => 'setIsDefaultFaxNumber',
        'validity_end_date' => 'setValidityEndDate',
        'validity_start_date' => 'setValidityStartDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'business_partner' => 'getBusinessPartner',
        'address_id' => 'getAddressId',
        'person' => 'getPerson',
        'ordinal_number' => 'getOrdinalNumber',
        'fax_country' => 'getFaxCountry',
        'fax_area_code_subscriber_number' => 'getFaxAreaCodeSubscriberNumber',
        'fax_number_extension' => 'getFaxNumberExtension',
        'international_fax_number' => 'getInternationalFaxNumber',
        'is_default_fax_number' => 'getIsDefaultFaxNumber',
        'validity_end_date' => 'getValidityEndDate',
        'validity_start_date' => 'getValidityStartDate'
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
        $this->setIfExists('person', $data ?? [], null);
        $this->setIfExists('ordinal_number', $data ?? [], null);
        $this->setIfExists('fax_country', $data ?? [], null);
        $this->setIfExists('fax_area_code_subscriber_number', $data ?? [], null);
        $this->setIfExists('fax_number_extension', $data ?? [], null);
        $this->setIfExists('international_fax_number', $data ?? [], null);
        $this->setIfExists('is_default_fax_number', $data ?? [], null);
        $this->setIfExists('validity_end_date', $data ?? [], null);
        $this->setIfExists('validity_start_date', $data ?? [], null);
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

        if (!is_null($this->container['person']) && (mb_strlen($this->container['person']) > 10)) {
            $invalidProperties[] = "invalid value for 'person', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['ordinal_number']) && (mb_strlen($this->container['ordinal_number']) > 3)) {
            $invalidProperties[] = "invalid value for 'ordinal_number', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['fax_country']) && (mb_strlen($this->container['fax_country']) > 3)) {
            $invalidProperties[] = "invalid value for 'fax_country', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['fax_area_code_subscriber_number']) && (mb_strlen($this->container['fax_area_code_subscriber_number']) > 30)) {
            $invalidProperties[] = "invalid value for 'fax_area_code_subscriber_number', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['fax_number_extension']) && (mb_strlen($this->container['fax_number_extension']) > 10)) {
            $invalidProperties[] = "invalid value for 'fax_number_extension', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['international_fax_number']) && (mb_strlen($this->container['international_fax_number']) > 30)) {
            $invalidProperties[] = "invalid value for 'international_fax_number', the character length must be smaller than or equal to 30.";
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
            throw new \InvalidArgumentException('invalid length for $business_partner when calling APIBUSINESSPARTNERABPAddressIndependentFaxType., must be smaller than or equal to 10.');
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
            throw new \InvalidArgumentException('invalid length for $address_id when calling APIBUSINESSPARTNERABPAddressIndependentFaxType., must be smaller than or equal to 10.');
        }

        $this->container['address_id'] = $address_id;

        return $this;
    }

    /**
     * Gets person
     *
     * @return string|null
     */
    public function getPerson()
    {
        return $this->container['person'];
    }

    /**
     * Sets person
     *
     * @param string|null $person person
     *
     * @return self
     */
    public function setPerson($person)
    {
        if (is_null($person)) {
            throw new \InvalidArgumentException('non-nullable person cannot be null');
        }
        if ((mb_strlen($person) > 10)) {
            throw new \InvalidArgumentException('invalid length for $person when calling APIBUSINESSPARTNERABPAddressIndependentFaxType., must be smaller than or equal to 10.');
        }

        $this->container['person'] = $person;

        return $this;
    }

    /**
     * Gets ordinal_number
     *
     * @return string|null
     */
    public function getOrdinalNumber()
    {
        return $this->container['ordinal_number'];
    }

    /**
     * Sets ordinal_number
     *
     * @param string|null $ordinal_number ordinal_number
     *
     * @return self
     */
    public function setOrdinalNumber($ordinal_number)
    {
        if (is_null($ordinal_number)) {
            throw new \InvalidArgumentException('non-nullable ordinal_number cannot be null');
        }
        if ((mb_strlen($ordinal_number) > 3)) {
            throw new \InvalidArgumentException('invalid length for $ordinal_number when calling APIBUSINESSPARTNERABPAddressIndependentFaxType., must be smaller than or equal to 3.');
        }

        $this->container['ordinal_number'] = $ordinal_number;

        return $this;
    }

    /**
     * Gets fax_country
     *
     * @return string|null
     */
    public function getFaxCountry()
    {
        return $this->container['fax_country'];
    }

    /**
     * Sets fax_country
     *
     * @param string|null $fax_country Country/Region for Telephone/Fax Number
     *
     * @return self
     */
    public function setFaxCountry($fax_country)
    {
        if (is_null($fax_country)) {
            array_push($this->openAPINullablesSetToNull, 'fax_country');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fax_country', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($fax_country) && (mb_strlen($fax_country) > 3)) {
            throw new \InvalidArgumentException('invalid length for $fax_country when calling APIBUSINESSPARTNERABPAddressIndependentFaxType., must be smaller than or equal to 3.');
        }

        $this->container['fax_country'] = $fax_country;

        return $this;
    }

    /**
     * Gets fax_area_code_subscriber_number
     *
     * @return string|null
     */
    public function getFaxAreaCodeSubscriberNumber()
    {
        return $this->container['fax_area_code_subscriber_number'];
    }

    /**
     * Sets fax_area_code_subscriber_number
     *
     * @param string|null $fax_area_code_subscriber_number Fax Number: Dialing Code and Number
     *
     * @return self
     */
    public function setFaxAreaCodeSubscriberNumber($fax_area_code_subscriber_number)
    {
        if (is_null($fax_area_code_subscriber_number)) {
            array_push($this->openAPINullablesSetToNull, 'fax_area_code_subscriber_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fax_area_code_subscriber_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($fax_area_code_subscriber_number) && (mb_strlen($fax_area_code_subscriber_number) > 30)) {
            throw new \InvalidArgumentException('invalid length for $fax_area_code_subscriber_number when calling APIBUSINESSPARTNERABPAddressIndependentFaxType., must be smaller than or equal to 30.');
        }

        $this->container['fax_area_code_subscriber_number'] = $fax_area_code_subscriber_number;

        return $this;
    }

    /**
     * Gets fax_number_extension
     *
     * @return string|null
     */
    public function getFaxNumberExtension()
    {
        return $this->container['fax_number_extension'];
    }

    /**
     * Sets fax_number_extension
     *
     * @param string|null $fax_number_extension Fax no.: Extension
     *
     * @return self
     */
    public function setFaxNumberExtension($fax_number_extension)
    {
        if (is_null($fax_number_extension)) {
            array_push($this->openAPINullablesSetToNull, 'fax_number_extension');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fax_number_extension', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($fax_number_extension) && (mb_strlen($fax_number_extension) > 10)) {
            throw new \InvalidArgumentException('invalid length for $fax_number_extension when calling APIBUSINESSPARTNERABPAddressIndependentFaxType., must be smaller than or equal to 10.');
        }

        $this->container['fax_number_extension'] = $fax_number_extension;

        return $this;
    }

    /**
     * Gets international_fax_number
     *
     * @return string|null
     */
    public function getInternationalFaxNumber()
    {
        return $this->container['international_fax_number'];
    }

    /**
     * Sets international_fax_number
     *
     * @param string|null $international_fax_number Complete Number: Dialing Code+Number+Extension
     *
     * @return self
     */
    public function setInternationalFaxNumber($international_fax_number)
    {
        if (is_null($international_fax_number)) {
            array_push($this->openAPINullablesSetToNull, 'international_fax_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('international_fax_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($international_fax_number) && (mb_strlen($international_fax_number) > 30)) {
            throw new \InvalidArgumentException('invalid length for $international_fax_number when calling APIBUSINESSPARTNERABPAddressIndependentFaxType., must be smaller than or equal to 30.');
        }

        $this->container['international_fax_number'] = $international_fax_number;

        return $this;
    }

    /**
     * Gets is_default_fax_number
     *
     * @return bool|null
     */
    public function getIsDefaultFaxNumber()
    {
        return $this->container['is_default_fax_number'];
    }

    /**
     * Sets is_default_fax_number
     *
     * @param bool|null $is_default_fax_number Indicator : Current Default Fax Number
     *
     * @return self
     */
    public function setIsDefaultFaxNumber($is_default_fax_number)
    {
        if (is_null($is_default_fax_number)) {
            array_push($this->openAPINullablesSetToNull, 'is_default_fax_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('is_default_fax_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['is_default_fax_number'] = $is_default_fax_number;

        return $this;
    }

    /**
     * Gets validity_end_date
     *
     * @return string|null
     */
    public function getValidityEndDate()
    {
        return $this->container['validity_end_date'];
    }

    /**
     * Sets validity_end_date
     *
     * @param string|null $validity_end_date validity_end_date
     *
     * @return self
     */
    public function setValidityEndDate($validity_end_date)
    {
        if (is_null($validity_end_date)) {
            array_push($this->openAPINullablesSetToNull, 'validity_end_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('validity_end_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['validity_end_date'] = $validity_end_date;

        return $this;
    }

    /**
     * Gets validity_start_date
     *
     * @return string|null
     */
    public function getValidityStartDate()
    {
        return $this->container['validity_start_date'];
    }

    /**
     * Sets validity_start_date
     *
     * @param string|null $validity_start_date validity_start_date
     *
     * @return self
     */
    public function setValidityStartDate($validity_start_date)
    {
        if (is_null($validity_start_date)) {
            array_push($this->openAPINullablesSetToNull, 'validity_start_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('validity_start_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['validity_start_date'] = $validity_start_date;

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


