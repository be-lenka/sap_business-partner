<?php
/**
 * APIBUSINESSPARTNERASupplierWithHoldingTaxTypeUpdate
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
 * APIBUSINESSPARTNERASupplierWithHoldingTaxTypeUpdate Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\BusinessPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class APIBUSINESSPARTNERASupplierWithHoldingTaxTypeUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'API_BUSINESS_PARTNER.A_SupplierWithHoldingTaxType-update';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'exemption_date_begin' => 'string',
        'exemption_date_end' => 'string',
        'exemption_reason' => 'string',
        'is_withholding_tax_subject' => 'bool',
        'recipient_type' => 'string',
        'withholding_tax_certificate' => 'string',
        'withholding_tax_code' => 'string',
        'withholding_tax_exmpt_percent' => 'float',
        'withholding_tax_number' => 'string',
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
        'exemption_date_begin' => null,
        'exemption_date_end' => null,
        'exemption_reason' => null,
        'is_withholding_tax_subject' => null,
        'recipient_type' => null,
        'withholding_tax_certificate' => null,
        'withholding_tax_code' => null,
        'withholding_tax_exmpt_percent' => 'decimal',
        'withholding_tax_number' => null,
        'authorization_group' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'exemption_date_begin' => true,
		'exemption_date_end' => true,
		'exemption_reason' => true,
		'is_withholding_tax_subject' => true,
		'recipient_type' => true,
		'withholding_tax_certificate' => true,
		'withholding_tax_code' => true,
		'withholding_tax_exmpt_percent' => true,
		'withholding_tax_number' => true,
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
        'exemption_date_begin' => 'ExemptionDateBegin',
        'exemption_date_end' => 'ExemptionDateEnd',
        'exemption_reason' => 'ExemptionReason',
        'is_withholding_tax_subject' => 'IsWithholdingTaxSubject',
        'recipient_type' => 'RecipientType',
        'withholding_tax_certificate' => 'WithholdingTaxCertificate',
        'withholding_tax_code' => 'WithholdingTaxCode',
        'withholding_tax_exmpt_percent' => 'WithholdingTaxExmptPercent',
        'withholding_tax_number' => 'WithholdingTaxNumber',
        'authorization_group' => 'AuthorizationGroup'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'exemption_date_begin' => 'setExemptionDateBegin',
        'exemption_date_end' => 'setExemptionDateEnd',
        'exemption_reason' => 'setExemptionReason',
        'is_withholding_tax_subject' => 'setIsWithholdingTaxSubject',
        'recipient_type' => 'setRecipientType',
        'withholding_tax_certificate' => 'setWithholdingTaxCertificate',
        'withholding_tax_code' => 'setWithholdingTaxCode',
        'withholding_tax_exmpt_percent' => 'setWithholdingTaxExmptPercent',
        'withholding_tax_number' => 'setWithholdingTaxNumber',
        'authorization_group' => 'setAuthorizationGroup'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'exemption_date_begin' => 'getExemptionDateBegin',
        'exemption_date_end' => 'getExemptionDateEnd',
        'exemption_reason' => 'getExemptionReason',
        'is_withholding_tax_subject' => 'getIsWithholdingTaxSubject',
        'recipient_type' => 'getRecipientType',
        'withholding_tax_certificate' => 'getWithholdingTaxCertificate',
        'withholding_tax_code' => 'getWithholdingTaxCode',
        'withholding_tax_exmpt_percent' => 'getWithholdingTaxExmptPercent',
        'withholding_tax_number' => 'getWithholdingTaxNumber',
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
        $this->setIfExists('exemption_date_begin', $data ?? [], null);
        $this->setIfExists('exemption_date_end', $data ?? [], null);
        $this->setIfExists('exemption_reason', $data ?? [], null);
        $this->setIfExists('is_withholding_tax_subject', $data ?? [], null);
        $this->setIfExists('recipient_type', $data ?? [], null);
        $this->setIfExists('withholding_tax_certificate', $data ?? [], null);
        $this->setIfExists('withholding_tax_code', $data ?? [], null);
        $this->setIfExists('withholding_tax_exmpt_percent', $data ?? [], null);
        $this->setIfExists('withholding_tax_number', $data ?? [], null);
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

        if (!is_null($this->container['exemption_reason']) && (mb_strlen($this->container['exemption_reason']) > 2)) {
            $invalidProperties[] = "invalid value for 'exemption_reason', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['recipient_type']) && (mb_strlen($this->container['recipient_type']) > 2)) {
            $invalidProperties[] = "invalid value for 'recipient_type', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['withholding_tax_certificate']) && (mb_strlen($this->container['withholding_tax_certificate']) > 25)) {
            $invalidProperties[] = "invalid value for 'withholding_tax_certificate', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['withholding_tax_code']) && (mb_strlen($this->container['withholding_tax_code']) > 2)) {
            $invalidProperties[] = "invalid value for 'withholding_tax_code', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['withholding_tax_number']) && (mb_strlen($this->container['withholding_tax_number']) > 16)) {
            $invalidProperties[] = "invalid value for 'withholding_tax_number', the character length must be smaller than or equal to 16.";
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
     * Gets exemption_date_begin
     *
     * @return string|null
     */
    public function getExemptionDateBegin()
    {
        return $this->container['exemption_date_begin'];
    }

    /**
     * Sets exemption_date_begin
     *
     * @param string|null $exemption_date_begin Date on Which Exemption Begins
     *
     * @return self
     */
    public function setExemptionDateBegin($exemption_date_begin)
    {
        if (is_null($exemption_date_begin)) {
            array_push($this->openAPINullablesSetToNull, 'exemption_date_begin');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('exemption_date_begin', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['exemption_date_begin'] = $exemption_date_begin;

        return $this;
    }

    /**
     * Gets exemption_date_end
     *
     * @return string|null
     */
    public function getExemptionDateEnd()
    {
        return $this->container['exemption_date_end'];
    }

    /**
     * Sets exemption_date_end
     *
     * @param string|null $exemption_date_end Date on Which Exemption Ends
     *
     * @return self
     */
    public function setExemptionDateEnd($exemption_date_end)
    {
        if (is_null($exemption_date_end)) {
            array_push($this->openAPINullablesSetToNull, 'exemption_date_end');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('exemption_date_end', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['exemption_date_end'] = $exemption_date_end;

        return $this;
    }

    /**
     * Gets exemption_reason
     *
     * @return string|null
     */
    public function getExemptionReason()
    {
        return $this->container['exemption_reason'];
    }

    /**
     * Sets exemption_reason
     *
     * @param string|null $exemption_reason Reason for Exemption
     *
     * @return self
     */
    public function setExemptionReason($exemption_reason)
    {
        if (is_null($exemption_reason)) {
            array_push($this->openAPINullablesSetToNull, 'exemption_reason');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('exemption_reason', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($exemption_reason) && (mb_strlen($exemption_reason) > 2)) {
            throw new \InvalidArgumentException('invalid length for $exemption_reason when calling APIBUSINESSPARTNERASupplierWithHoldingTaxTypeUpdate., must be smaller than or equal to 2.');
        }

        $this->container['exemption_reason'] = $exemption_reason;

        return $this;
    }

    /**
     * Gets is_withholding_tax_subject
     *
     * @return bool|null
     */
    public function getIsWithholdingTaxSubject()
    {
        return $this->container['is_withholding_tax_subject'];
    }

    /**
     * Sets is_withholding_tax_subject
     *
     * @param bool|null $is_withholding_tax_subject Indicator: Subject to Withholding Tax?
     *
     * @return self
     */
    public function setIsWithholdingTaxSubject($is_withholding_tax_subject)
    {
        if (is_null($is_withholding_tax_subject)) {
            array_push($this->openAPINullablesSetToNull, 'is_withholding_tax_subject');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('is_withholding_tax_subject', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['is_withholding_tax_subject'] = $is_withholding_tax_subject;

        return $this;
    }

    /**
     * Gets recipient_type
     *
     * @return string|null
     */
    public function getRecipientType()
    {
        return $this->container['recipient_type'];
    }

    /**
     * Sets recipient_type
     *
     * @param string|null $recipient_type Type of Recipient
     *
     * @return self
     */
    public function setRecipientType($recipient_type)
    {
        if (is_null($recipient_type)) {
            array_push($this->openAPINullablesSetToNull, 'recipient_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('recipient_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($recipient_type) && (mb_strlen($recipient_type) > 2)) {
            throw new \InvalidArgumentException('invalid length for $recipient_type when calling APIBUSINESSPARTNERASupplierWithHoldingTaxTypeUpdate., must be smaller than or equal to 2.');
        }

        $this->container['recipient_type'] = $recipient_type;

        return $this;
    }

    /**
     * Gets withholding_tax_certificate
     *
     * @return string|null
     */
    public function getWithholdingTaxCertificate()
    {
        return $this->container['withholding_tax_certificate'];
    }

    /**
     * Sets withholding_tax_certificate
     *
     * @param string|null $withholding_tax_certificate Exemption Certificate Number
     *
     * @return self
     */
    public function setWithholdingTaxCertificate($withholding_tax_certificate)
    {
        if (is_null($withholding_tax_certificate)) {
            array_push($this->openAPINullablesSetToNull, 'withholding_tax_certificate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('withholding_tax_certificate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($withholding_tax_certificate) && (mb_strlen($withholding_tax_certificate) > 25)) {
            throw new \InvalidArgumentException('invalid length for $withholding_tax_certificate when calling APIBUSINESSPARTNERASupplierWithHoldingTaxTypeUpdate., must be smaller than or equal to 25.');
        }

        $this->container['withholding_tax_certificate'] = $withholding_tax_certificate;

        return $this;
    }

    /**
     * Gets withholding_tax_code
     *
     * @return string|null
     */
    public function getWithholdingTaxCode()
    {
        return $this->container['withholding_tax_code'];
    }

    /**
     * Sets withholding_tax_code
     *
     * @param string|null $withholding_tax_code Withholding Tax Code
     *
     * @return self
     */
    public function setWithholdingTaxCode($withholding_tax_code)
    {
        if (is_null($withholding_tax_code)) {
            array_push($this->openAPINullablesSetToNull, 'withholding_tax_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('withholding_tax_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($withholding_tax_code) && (mb_strlen($withholding_tax_code) > 2)) {
            throw new \InvalidArgumentException('invalid length for $withholding_tax_code when calling APIBUSINESSPARTNERASupplierWithHoldingTaxTypeUpdate., must be smaller than or equal to 2.');
        }

        $this->container['withholding_tax_code'] = $withholding_tax_code;

        return $this;
    }

    /**
     * Gets withholding_tax_exmpt_percent
     *
     * @return float|null
     */
    public function getWithholdingTaxExmptPercent()
    {
        return $this->container['withholding_tax_exmpt_percent'];
    }

    /**
     * Sets withholding_tax_exmpt_percent
     *
     * @param float|null $withholding_tax_exmpt_percent withholding_tax_exmpt_percent
     *
     * @return self
     */
    public function setWithholdingTaxExmptPercent($withholding_tax_exmpt_percent)
    {
        if (is_null($withholding_tax_exmpt_percent)) {
            array_push($this->openAPINullablesSetToNull, 'withholding_tax_exmpt_percent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('withholding_tax_exmpt_percent', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        $this->container['withholding_tax_exmpt_percent'] = $withholding_tax_exmpt_percent;

        return $this;
    }

    /**
     * Gets withholding_tax_number
     *
     * @return string|null
     */
    public function getWithholdingTaxNumber()
    {
        return $this->container['withholding_tax_number'];
    }

    /**
     * Sets withholding_tax_number
     *
     * @param string|null $withholding_tax_number Withholding tax identification number
     *
     * @return self
     */
    public function setWithholdingTaxNumber($withholding_tax_number)
    {
        if (is_null($withholding_tax_number)) {
            array_push($this->openAPINullablesSetToNull, 'withholding_tax_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('withholding_tax_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($withholding_tax_number) && (mb_strlen($withholding_tax_number) > 16)) {
            throw new \InvalidArgumentException('invalid length for $withholding_tax_number when calling APIBUSINESSPARTNERASupplierWithHoldingTaxTypeUpdate., must be smaller than or equal to 16.');
        }

        $this->container['withholding_tax_number'] = $withholding_tax_number;

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
            throw new \InvalidArgumentException('invalid length for $authorization_group when calling APIBUSINESSPARTNERASupplierWithHoldingTaxTypeUpdate., must be smaller than or equal to 4.');
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


