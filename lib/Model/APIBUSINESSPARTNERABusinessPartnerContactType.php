<?php
/**
 * APIBUSINESSPARTNERABusinessPartnerContactType
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
 * APIBUSINESSPARTNERABusinessPartnerContactType Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\BusinessPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class APIBUSINESSPARTNERABusinessPartnerContactType implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'API_BUSINESS_PARTNER.A_BusinessPartnerContactType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'relationship_number' => 'string',
        'business_partner_company' => 'string',
        'business_partner_person' => 'string',
        'validity_end_date' => 'string',
        'validity_start_date' => 'string',
        'is_standard_relationship' => 'bool',
        'relationship_category' => 'string',
        'to_contact_address' => '\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABusinessPartnerContactTypeToContactAddress',
        'to_contact_relationship' => '\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPContactToFuncAndDeptType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'relationship_number' => null,
        'business_partner_company' => null,
        'business_partner_person' => null,
        'validity_end_date' => null,
        'validity_start_date' => null,
        'is_standard_relationship' => null,
        'relationship_category' => null,
        'to_contact_address' => null,
        'to_contact_relationship' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'relationship_number' => false,
		'business_partner_company' => false,
		'business_partner_person' => false,
		'validity_end_date' => false,
		'validity_start_date' => true,
		'is_standard_relationship' => true,
		'relationship_category' => true,
		'to_contact_address' => false,
		'to_contact_relationship' => true
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
        'relationship_number' => 'RelationshipNumber',
        'business_partner_company' => 'BusinessPartnerCompany',
        'business_partner_person' => 'BusinessPartnerPerson',
        'validity_end_date' => 'ValidityEndDate',
        'validity_start_date' => 'ValidityStartDate',
        'is_standard_relationship' => 'IsStandardRelationship',
        'relationship_category' => 'RelationshipCategory',
        'to_contact_address' => 'to_ContactAddress',
        'to_contact_relationship' => 'to_ContactRelationship'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'relationship_number' => 'setRelationshipNumber',
        'business_partner_company' => 'setBusinessPartnerCompany',
        'business_partner_person' => 'setBusinessPartnerPerson',
        'validity_end_date' => 'setValidityEndDate',
        'validity_start_date' => 'setValidityStartDate',
        'is_standard_relationship' => 'setIsStandardRelationship',
        'relationship_category' => 'setRelationshipCategory',
        'to_contact_address' => 'setToContactAddress',
        'to_contact_relationship' => 'setToContactRelationship'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'relationship_number' => 'getRelationshipNumber',
        'business_partner_company' => 'getBusinessPartnerCompany',
        'business_partner_person' => 'getBusinessPartnerPerson',
        'validity_end_date' => 'getValidityEndDate',
        'validity_start_date' => 'getValidityStartDate',
        'is_standard_relationship' => 'getIsStandardRelationship',
        'relationship_category' => 'getRelationshipCategory',
        'to_contact_address' => 'getToContactAddress',
        'to_contact_relationship' => 'getToContactRelationship'
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
        $this->setIfExists('relationship_number', $data ?? [], null);
        $this->setIfExists('business_partner_company', $data ?? [], null);
        $this->setIfExists('business_partner_person', $data ?? [], null);
        $this->setIfExists('validity_end_date', $data ?? [], null);
        $this->setIfExists('validity_start_date', $data ?? [], null);
        $this->setIfExists('is_standard_relationship', $data ?? [], null);
        $this->setIfExists('relationship_category', $data ?? [], null);
        $this->setIfExists('to_contact_address', $data ?? [], null);
        $this->setIfExists('to_contact_relationship', $data ?? [], null);
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

        if (!is_null($this->container['relationship_number']) && (mb_strlen($this->container['relationship_number']) > 12)) {
            $invalidProperties[] = "invalid value for 'relationship_number', the character length must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['business_partner_company']) && (mb_strlen($this->container['business_partner_company']) > 10)) {
            $invalidProperties[] = "invalid value for 'business_partner_company', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['business_partner_person']) && (mb_strlen($this->container['business_partner_person']) > 10)) {
            $invalidProperties[] = "invalid value for 'business_partner_person', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['relationship_category']) && (mb_strlen($this->container['relationship_category']) > 6)) {
            $invalidProperties[] = "invalid value for 'relationship_category', the character length must be smaller than or equal to 6.";
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
     * Gets relationship_number
     *
     * @return string|null
     */
    public function getRelationshipNumber()
    {
        return $this->container['relationship_number'];
    }

    /**
     * Sets relationship_number
     *
     * @param string|null $relationship_number BP Relationship Number
     *
     * @return self
     */
    public function setRelationshipNumber($relationship_number)
    {
        if (is_null($relationship_number)) {
            throw new \InvalidArgumentException('non-nullable relationship_number cannot be null');
        }
        if ((mb_strlen($relationship_number) > 12)) {
            throw new \InvalidArgumentException('invalid length for $relationship_number when calling APIBUSINESSPARTNERABusinessPartnerContactType., must be smaller than or equal to 12.');
        }

        $this->container['relationship_number'] = $relationship_number;

        return $this;
    }

    /**
     * Gets business_partner_company
     *
     * @return string|null
     */
    public function getBusinessPartnerCompany()
    {
        return $this->container['business_partner_company'];
    }

    /**
     * Sets business_partner_company
     *
     * @param string|null $business_partner_company Business Partner Number
     *
     * @return self
     */
    public function setBusinessPartnerCompany($business_partner_company)
    {
        if (is_null($business_partner_company)) {
            throw new \InvalidArgumentException('non-nullable business_partner_company cannot be null');
        }
        if ((mb_strlen($business_partner_company) > 10)) {
            throw new \InvalidArgumentException('invalid length for $business_partner_company when calling APIBUSINESSPARTNERABusinessPartnerContactType., must be smaller than or equal to 10.');
        }

        $this->container['business_partner_company'] = $business_partner_company;

        return $this;
    }

    /**
     * Gets business_partner_person
     *
     * @return string|null
     */
    public function getBusinessPartnerPerson()
    {
        return $this->container['business_partner_person'];
    }

    /**
     * Sets business_partner_person
     *
     * @param string|null $business_partner_person Business Partner Number
     *
     * @return self
     */
    public function setBusinessPartnerPerson($business_partner_person)
    {
        if (is_null($business_partner_person)) {
            throw new \InvalidArgumentException('non-nullable business_partner_person cannot be null');
        }
        if ((mb_strlen($business_partner_person) > 10)) {
            throw new \InvalidArgumentException('invalid length for $business_partner_person when calling APIBUSINESSPARTNERABusinessPartnerContactType., must be smaller than or equal to 10.');
        }

        $this->container['business_partner_person'] = $business_partner_person;

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
     * @param string|null $validity_end_date Validity Date (Valid To)
     *
     * @return self
     */
    public function setValidityEndDate($validity_end_date)
    {
        if (is_null($validity_end_date)) {
            throw new \InvalidArgumentException('non-nullable validity_end_date cannot be null');
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
     * @param string|null $validity_start_date Validity Date (Valid From)
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
     * Gets is_standard_relationship
     *
     * @return bool|null
     */
    public function getIsStandardRelationship()
    {
        return $this->container['is_standard_relationship'];
    }

    /**
     * Sets is_standard_relationship
     *
     * @param bool|null $is_standard_relationship Standard Relationship
     *
     * @return self
     */
    public function setIsStandardRelationship($is_standard_relationship)
    {
        if (is_null($is_standard_relationship)) {
            array_push($this->openAPINullablesSetToNull, 'is_standard_relationship');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('is_standard_relationship', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['is_standard_relationship'] = $is_standard_relationship;

        return $this;
    }

    /**
     * Gets relationship_category
     *
     * @return string|null
     */
    public function getRelationshipCategory()
    {
        return $this->container['relationship_category'];
    }

    /**
     * Sets relationship_category
     *
     * @param string|null $relationship_category Business Partner Relationship Category
     *
     * @return self
     */
    public function setRelationshipCategory($relationship_category)
    {
        if (is_null($relationship_category)) {
            array_push($this->openAPINullablesSetToNull, 'relationship_category');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('relationship_category', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($relationship_category) && (mb_strlen($relationship_category) > 6)) {
            throw new \InvalidArgumentException('invalid length for $relationship_category when calling APIBUSINESSPARTNERABusinessPartnerContactType., must be smaller than or equal to 6.');
        }

        $this->container['relationship_category'] = $relationship_category;

        return $this;
    }

    /**
     * Gets to_contact_address
     *
     * @return \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABusinessPartnerContactTypeToContactAddress|null
     */
    public function getToContactAddress()
    {
        return $this->container['to_contact_address'];
    }

    /**
     * Sets to_contact_address
     *
     * @param \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABusinessPartnerContactTypeToContactAddress|null $to_contact_address to_contact_address
     *
     * @return self
     */
    public function setToContactAddress($to_contact_address)
    {
        if (is_null($to_contact_address)) {
            throw new \InvalidArgumentException('non-nullable to_contact_address cannot be null');
        }
        $this->container['to_contact_address'] = $to_contact_address;

        return $this;
    }

    /**
     * Gets to_contact_relationship
     *
     * @return \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPContactToFuncAndDeptType|null
     */
    public function getToContactRelationship()
    {
        return $this->container['to_contact_relationship'];
    }

    /**
     * Sets to_contact_relationship
     *
     * @param \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPContactToFuncAndDeptType|null $to_contact_relationship to_contact_relationship
     *
     * @return self
     */
    public function setToContactRelationship($to_contact_relationship)
    {
        if (is_null($to_contact_relationship)) {
            array_push($this->openAPINullablesSetToNull, 'to_contact_relationship');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('to_contact_relationship', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['to_contact_relationship'] = $to_contact_relationship;

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


