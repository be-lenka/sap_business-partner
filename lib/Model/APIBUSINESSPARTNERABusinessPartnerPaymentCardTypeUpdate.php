<?php
/**
 * APIBUSINESSPARTNERABusinessPartnerPaymentCardTypeUpdate
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
 * APIBUSINESSPARTNERABusinessPartnerPaymentCardTypeUpdate Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\BusinessPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class APIBUSINESSPARTNERABusinessPartnerPaymentCardTypeUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'API_BUSINESS_PARTNER.A_BusinessPartnerPaymentCardType-update';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_standard_card' => 'bool',
        'card_description' => 'string',
        'validity_date' => 'string',
        'validity_end_date' => 'string',
        'card_holder' => 'string',
        'card_issuing_bank' => 'string',
        'card_issue_date' => 'string',
        'payment_card_lock' => 'string',
        'masked_card_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'is_standard_card' => null,
        'card_description' => null,
        'validity_date' => null,
        'validity_end_date' => null,
        'card_holder' => null,
        'card_issuing_bank' => null,
        'card_issue_date' => null,
        'payment_card_lock' => null,
        'masked_card_number' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'is_standard_card' => true,
		'card_description' => true,
		'validity_date' => true,
		'validity_end_date' => true,
		'card_holder' => true,
		'card_issuing_bank' => true,
		'card_issue_date' => true,
		'payment_card_lock' => true,
		'masked_card_number' => true
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
        'is_standard_card' => 'IsStandardCard',
        'card_description' => 'CardDescription',
        'validity_date' => 'ValidityDate',
        'validity_end_date' => 'ValidityEndDate',
        'card_holder' => 'CardHolder',
        'card_issuing_bank' => 'CardIssuingBank',
        'card_issue_date' => 'CardIssueDate',
        'payment_card_lock' => 'PaymentCardLock',
        'masked_card_number' => 'MaskedCardNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_standard_card' => 'setIsStandardCard',
        'card_description' => 'setCardDescription',
        'validity_date' => 'setValidityDate',
        'validity_end_date' => 'setValidityEndDate',
        'card_holder' => 'setCardHolder',
        'card_issuing_bank' => 'setCardIssuingBank',
        'card_issue_date' => 'setCardIssueDate',
        'payment_card_lock' => 'setPaymentCardLock',
        'masked_card_number' => 'setMaskedCardNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_standard_card' => 'getIsStandardCard',
        'card_description' => 'getCardDescription',
        'validity_date' => 'getValidityDate',
        'validity_end_date' => 'getValidityEndDate',
        'card_holder' => 'getCardHolder',
        'card_issuing_bank' => 'getCardIssuingBank',
        'card_issue_date' => 'getCardIssueDate',
        'payment_card_lock' => 'getPaymentCardLock',
        'masked_card_number' => 'getMaskedCardNumber'
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
        $this->setIfExists('is_standard_card', $data ?? [], null);
        $this->setIfExists('card_description', $data ?? [], null);
        $this->setIfExists('validity_date', $data ?? [], null);
        $this->setIfExists('validity_end_date', $data ?? [], null);
        $this->setIfExists('card_holder', $data ?? [], null);
        $this->setIfExists('card_issuing_bank', $data ?? [], null);
        $this->setIfExists('card_issue_date', $data ?? [], null);
        $this->setIfExists('payment_card_lock', $data ?? [], null);
        $this->setIfExists('masked_card_number', $data ?? [], null);
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

        if (!is_null($this->container['card_description']) && (mb_strlen($this->container['card_description']) > 40)) {
            $invalidProperties[] = "invalid value for 'card_description', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['card_holder']) && (mb_strlen($this->container['card_holder']) > 40)) {
            $invalidProperties[] = "invalid value for 'card_holder', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['card_issuing_bank']) && (mb_strlen($this->container['card_issuing_bank']) > 40)) {
            $invalidProperties[] = "invalid value for 'card_issuing_bank', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['payment_card_lock']) && (mb_strlen($this->container['payment_card_lock']) > 2)) {
            $invalidProperties[] = "invalid value for 'payment_card_lock', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['masked_card_number']) && (mb_strlen($this->container['masked_card_number']) > 25)) {
            $invalidProperties[] = "invalid value for 'masked_card_number', the character length must be smaller than or equal to 25.";
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
     * Gets is_standard_card
     *
     * @return bool|null
     */
    public function getIsStandardCard()
    {
        return $this->container['is_standard_card'];
    }

    /**
     * Sets is_standard_card
     *
     * @param bool|null $is_standard_card BP: Standard Payment Card
     *
     * @return self
     */
    public function setIsStandardCard($is_standard_card)
    {
        if (is_null($is_standard_card)) {
            array_push($this->openAPINullablesSetToNull, 'is_standard_card');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('is_standard_card', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['is_standard_card'] = $is_standard_card;

        return $this;
    }

    /**
     * Gets card_description
     *
     * @return string|null
     */
    public function getCardDescription()
    {
        return $this->container['card_description'];
    }

    /**
     * Sets card_description
     *
     * @param string|null $card_description Description of Credit Card Details
     *
     * @return self
     */
    public function setCardDescription($card_description)
    {
        if (is_null($card_description)) {
            array_push($this->openAPINullablesSetToNull, 'card_description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('card_description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($card_description) && (mb_strlen($card_description) > 40)) {
            throw new \InvalidArgumentException('invalid length for $card_description when calling APIBUSINESSPARTNERABusinessPartnerPaymentCardTypeUpdate., must be smaller than or equal to 40.');
        }

        $this->container['card_description'] = $card_description;

        return $this;
    }

    /**
     * Gets validity_date
     *
     * @return string|null
     */
    public function getValidityDate()
    {
        return $this->container['validity_date'];
    }

    /**
     * Sets validity_date
     *
     * @param string|null $validity_date Payment cards: Valid from
     *
     * @return self
     */
    public function setValidityDate($validity_date)
    {
        if (is_null($validity_date)) {
            array_push($this->openAPINullablesSetToNull, 'validity_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('validity_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['validity_date'] = $validity_date;

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
     * @param string|null $validity_end_date Payment Cards: Valid To
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
     * Gets card_holder
     *
     * @return string|null
     */
    public function getCardHolder()
    {
        return $this->container['card_holder'];
    }

    /**
     * Sets card_holder
     *
     * @param string|null $card_holder Payment Cards: Name of Cardholder
     *
     * @return self
     */
    public function setCardHolder($card_holder)
    {
        if (is_null($card_holder)) {
            array_push($this->openAPINullablesSetToNull, 'card_holder');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('card_holder', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($card_holder) && (mb_strlen($card_holder) > 40)) {
            throw new \InvalidArgumentException('invalid length for $card_holder when calling APIBUSINESSPARTNERABusinessPartnerPaymentCardTypeUpdate., must be smaller than or equal to 40.');
        }

        $this->container['card_holder'] = $card_holder;

        return $this;
    }

    /**
     * Gets card_issuing_bank
     *
     * @return string|null
     */
    public function getCardIssuingBank()
    {
        return $this->container['card_issuing_bank'];
    }

    /**
     * Sets card_issuing_bank
     *
     * @param string|null $card_issuing_bank Payment cards: Issuing bank
     *
     * @return self
     */
    public function setCardIssuingBank($card_issuing_bank)
    {
        if (is_null($card_issuing_bank)) {
            array_push($this->openAPINullablesSetToNull, 'card_issuing_bank');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('card_issuing_bank', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($card_issuing_bank) && (mb_strlen($card_issuing_bank) > 40)) {
            throw new \InvalidArgumentException('invalid length for $card_issuing_bank when calling APIBUSINESSPARTNERABusinessPartnerPaymentCardTypeUpdate., must be smaller than or equal to 40.');
        }

        $this->container['card_issuing_bank'] = $card_issuing_bank;

        return $this;
    }

    /**
     * Gets card_issue_date
     *
     * @return string|null
     */
    public function getCardIssueDate()
    {
        return $this->container['card_issue_date'];
    }

    /**
     * Sets card_issue_date
     *
     * @param string|null $card_issue_date Payment Cards: Date of Issue
     *
     * @return self
     */
    public function setCardIssueDate($card_issue_date)
    {
        if (is_null($card_issue_date)) {
            array_push($this->openAPINullablesSetToNull, 'card_issue_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('card_issue_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['card_issue_date'] = $card_issue_date;

        return $this;
    }

    /**
     * Gets payment_card_lock
     *
     * @return string|null
     */
    public function getPaymentCardLock()
    {
        return $this->container['payment_card_lock'];
    }

    /**
     * Sets payment_card_lock
     *
     * @param string|null $payment_card_lock Payment Cards: Reason for Payment Card Lock
     *
     * @return self
     */
    public function setPaymentCardLock($payment_card_lock)
    {
        if (is_null($payment_card_lock)) {
            array_push($this->openAPINullablesSetToNull, 'payment_card_lock');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payment_card_lock', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($payment_card_lock) && (mb_strlen($payment_card_lock) > 2)) {
            throw new \InvalidArgumentException('invalid length for $payment_card_lock when calling APIBUSINESSPARTNERABusinessPartnerPaymentCardTypeUpdate., must be smaller than or equal to 2.');
        }

        $this->container['payment_card_lock'] = $payment_card_lock;

        return $this;
    }

    /**
     * Gets masked_card_number
     *
     * @return string|null
     */
    public function getMaskedCardNumber()
    {
        return $this->container['masked_card_number'];
    }

    /**
     * Sets masked_card_number
     *
     * @param string|null $masked_card_number Masked Payment Card Number ( Digital Payment )
     *
     * @return self
     */
    public function setMaskedCardNumber($masked_card_number)
    {
        if (is_null($masked_card_number)) {
            array_push($this->openAPINullablesSetToNull, 'masked_card_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('masked_card_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($masked_card_number) && (mb_strlen($masked_card_number) > 25)) {
            throw new \InvalidArgumentException('invalid length for $masked_card_number when calling APIBUSINESSPARTNERABusinessPartnerPaymentCardTypeUpdate., must be smaller than or equal to 25.');
        }

        $this->container['masked_card_number'] = $masked_card_number;

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


