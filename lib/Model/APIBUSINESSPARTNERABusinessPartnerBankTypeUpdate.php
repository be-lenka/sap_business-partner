<?php
/**
 * APIBUSINESSPARTNERABusinessPartnerBankTypeUpdate
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
 * APIBUSINESSPARTNERABusinessPartnerBankTypeUpdate Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\BusinessPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class APIBUSINESSPARTNERABusinessPartnerBankTypeUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'API_BUSINESS_PARTNER.A_BusinessPartnerBankType-update';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bank_country_key' => 'string',
        'bank_number' => 'string',
        'bank_control_key' => 'string',
        'bank_account_holder_name' => 'string',
        'bank_account_name' => 'string',
        'validity_start_date' => 'string',
        'validity_end_date' => 'string',
        'iban' => 'string',
        'iban_validity_start_date' => 'string',
        'bank_account' => 'string',
        'bank_account_reference_text' => 'string',
        'collection_auth_ind' => 'bool',
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
        'bank_country_key' => null,
        'bank_number' => null,
        'bank_control_key' => null,
        'bank_account_holder_name' => null,
        'bank_account_name' => null,
        'validity_start_date' => null,
        'validity_end_date' => null,
        'iban' => null,
        'iban_validity_start_date' => null,
        'bank_account' => null,
        'bank_account_reference_text' => null,
        'collection_auth_ind' => null,
        'authorization_group' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'bank_country_key' => true,
		'bank_number' => true,
		'bank_control_key' => true,
		'bank_account_holder_name' => true,
		'bank_account_name' => true,
		'validity_start_date' => true,
		'validity_end_date' => true,
		'iban' => true,
		'iban_validity_start_date' => true,
		'bank_account' => true,
		'bank_account_reference_text' => true,
		'collection_auth_ind' => true,
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
        'bank_country_key' => 'BankCountryKey',
        'bank_number' => 'BankNumber',
        'bank_control_key' => 'BankControlKey',
        'bank_account_holder_name' => 'BankAccountHolderName',
        'bank_account_name' => 'BankAccountName',
        'validity_start_date' => 'ValidityStartDate',
        'validity_end_date' => 'ValidityEndDate',
        'iban' => 'IBAN',
        'iban_validity_start_date' => 'IBANValidityStartDate',
        'bank_account' => 'BankAccount',
        'bank_account_reference_text' => 'BankAccountReferenceText',
        'collection_auth_ind' => 'CollectionAuthInd',
        'authorization_group' => 'AuthorizationGroup'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bank_country_key' => 'setBankCountryKey',
        'bank_number' => 'setBankNumber',
        'bank_control_key' => 'setBankControlKey',
        'bank_account_holder_name' => 'setBankAccountHolderName',
        'bank_account_name' => 'setBankAccountName',
        'validity_start_date' => 'setValidityStartDate',
        'validity_end_date' => 'setValidityEndDate',
        'iban' => 'setIban',
        'iban_validity_start_date' => 'setIbanValidityStartDate',
        'bank_account' => 'setBankAccount',
        'bank_account_reference_text' => 'setBankAccountReferenceText',
        'collection_auth_ind' => 'setCollectionAuthInd',
        'authorization_group' => 'setAuthorizationGroup'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bank_country_key' => 'getBankCountryKey',
        'bank_number' => 'getBankNumber',
        'bank_control_key' => 'getBankControlKey',
        'bank_account_holder_name' => 'getBankAccountHolderName',
        'bank_account_name' => 'getBankAccountName',
        'validity_start_date' => 'getValidityStartDate',
        'validity_end_date' => 'getValidityEndDate',
        'iban' => 'getIban',
        'iban_validity_start_date' => 'getIbanValidityStartDate',
        'bank_account' => 'getBankAccount',
        'bank_account_reference_text' => 'getBankAccountReferenceText',
        'collection_auth_ind' => 'getCollectionAuthInd',
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
        $this->setIfExists('bank_country_key', $data ?? [], null);
        $this->setIfExists('bank_number', $data ?? [], null);
        $this->setIfExists('bank_control_key', $data ?? [], null);
        $this->setIfExists('bank_account_holder_name', $data ?? [], null);
        $this->setIfExists('bank_account_name', $data ?? [], null);
        $this->setIfExists('validity_start_date', $data ?? [], null);
        $this->setIfExists('validity_end_date', $data ?? [], null);
        $this->setIfExists('iban', $data ?? [], null);
        $this->setIfExists('iban_validity_start_date', $data ?? [], null);
        $this->setIfExists('bank_account', $data ?? [], null);
        $this->setIfExists('bank_account_reference_text', $data ?? [], null);
        $this->setIfExists('collection_auth_ind', $data ?? [], null);
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

        if (!is_null($this->container['bank_country_key']) && (mb_strlen($this->container['bank_country_key']) > 3)) {
            $invalidProperties[] = "invalid value for 'bank_country_key', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['bank_number']) && (mb_strlen($this->container['bank_number']) > 15)) {
            $invalidProperties[] = "invalid value for 'bank_number', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['bank_control_key']) && (mb_strlen($this->container['bank_control_key']) > 2)) {
            $invalidProperties[] = "invalid value for 'bank_control_key', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['bank_account_holder_name']) && (mb_strlen($this->container['bank_account_holder_name']) > 60)) {
            $invalidProperties[] = "invalid value for 'bank_account_holder_name', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['bank_account_name']) && (mb_strlen($this->container['bank_account_name']) > 40)) {
            $invalidProperties[] = "invalid value for 'bank_account_name', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['iban']) && (mb_strlen($this->container['iban']) > 34)) {
            $invalidProperties[] = "invalid value for 'iban', the character length must be smaller than or equal to 34.";
        }

        if (!is_null($this->container['bank_account']) && (mb_strlen($this->container['bank_account']) > 18)) {
            $invalidProperties[] = "invalid value for 'bank_account', the character length must be smaller than or equal to 18.";
        }

        if (!is_null($this->container['bank_account_reference_text']) && (mb_strlen($this->container['bank_account_reference_text']) > 20)) {
            $invalidProperties[] = "invalid value for 'bank_account_reference_text', the character length must be smaller than or equal to 20.";
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
     * Gets bank_country_key
     *
     * @return string|null
     */
    public function getBankCountryKey()
    {
        return $this->container['bank_country_key'];
    }

    /**
     * Sets bank_country_key
     *
     * @param string|null $bank_country_key Bank Country/Region Key
     *
     * @return self
     */
    public function setBankCountryKey($bank_country_key)
    {
        if (is_null($bank_country_key)) {
            array_push($this->openAPINullablesSetToNull, 'bank_country_key');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bank_country_key', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($bank_country_key) && (mb_strlen($bank_country_key) > 3)) {
            throw new \InvalidArgumentException('invalid length for $bank_country_key when calling APIBUSINESSPARTNERABusinessPartnerBankTypeUpdate., must be smaller than or equal to 3.');
        }

        $this->container['bank_country_key'] = $bank_country_key;

        return $this;
    }

    /**
     * Gets bank_number
     *
     * @return string|null
     */
    public function getBankNumber()
    {
        return $this->container['bank_number'];
    }

    /**
     * Sets bank_number
     *
     * @param string|null $bank_number bank_number
     *
     * @return self
     */
    public function setBankNumber($bank_number)
    {
        if (is_null($bank_number)) {
            array_push($this->openAPINullablesSetToNull, 'bank_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bank_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($bank_number) && (mb_strlen($bank_number) > 15)) {
            throw new \InvalidArgumentException('invalid length for $bank_number when calling APIBUSINESSPARTNERABusinessPartnerBankTypeUpdate., must be smaller than or equal to 15.');
        }

        $this->container['bank_number'] = $bank_number;

        return $this;
    }

    /**
     * Gets bank_control_key
     *
     * @return string|null
     */
    public function getBankControlKey()
    {
        return $this->container['bank_control_key'];
    }

    /**
     * Sets bank_control_key
     *
     * @param string|null $bank_control_key bank_control_key
     *
     * @return self
     */
    public function setBankControlKey($bank_control_key)
    {
        if (is_null($bank_control_key)) {
            array_push($this->openAPINullablesSetToNull, 'bank_control_key');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bank_control_key', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($bank_control_key) && (mb_strlen($bank_control_key) > 2)) {
            throw new \InvalidArgumentException('invalid length for $bank_control_key when calling APIBUSINESSPARTNERABusinessPartnerBankTypeUpdate., must be smaller than or equal to 2.');
        }

        $this->container['bank_control_key'] = $bank_control_key;

        return $this;
    }

    /**
     * Gets bank_account_holder_name
     *
     * @return string|null
     */
    public function getBankAccountHolderName()
    {
        return $this->container['bank_account_holder_name'];
    }

    /**
     * Sets bank_account_holder_name
     *
     * @param string|null $bank_account_holder_name Account Holder Name
     *
     * @return self
     */
    public function setBankAccountHolderName($bank_account_holder_name)
    {
        if (is_null($bank_account_holder_name)) {
            array_push($this->openAPINullablesSetToNull, 'bank_account_holder_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bank_account_holder_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($bank_account_holder_name) && (mb_strlen($bank_account_holder_name) > 60)) {
            throw new \InvalidArgumentException('invalid length for $bank_account_holder_name when calling APIBUSINESSPARTNERABusinessPartnerBankTypeUpdate., must be smaller than or equal to 60.');
        }

        $this->container['bank_account_holder_name'] = $bank_account_holder_name;

        return $this;
    }

    /**
     * Gets bank_account_name
     *
     * @return string|null
     */
    public function getBankAccountName()
    {
        return $this->container['bank_account_name'];
    }

    /**
     * Sets bank_account_name
     *
     * @param string|null $bank_account_name Name of Bank Account
     *
     * @return self
     */
    public function setBankAccountName($bank_account_name)
    {
        if (is_null($bank_account_name)) {
            array_push($this->openAPINullablesSetToNull, 'bank_account_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bank_account_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($bank_account_name) && (mb_strlen($bank_account_name) > 40)) {
            throw new \InvalidArgumentException('invalid length for $bank_account_name when calling APIBUSINESSPARTNERABusinessPartnerBankTypeUpdate., must be smaller than or equal to 40.');
        }

        $this->container['bank_account_name'] = $bank_account_name;

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
     * @param string|null $validity_start_date Validity Start of Business Partner Bank Details
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
     * @param string|null $validity_end_date Validity End of Business Partner Bank Details
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
     * Gets iban
     *
     * @return string|null
     */
    public function getIban()
    {
        return $this->container['iban'];
    }

    /**
     * Sets iban
     *
     * @param string|null $iban IBAN (International Bank Account Number)
     *
     * @return self
     */
    public function setIban($iban)
    {
        if (is_null($iban)) {
            array_push($this->openAPINullablesSetToNull, 'iban');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('iban', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($iban) && (mb_strlen($iban) > 34)) {
            throw new \InvalidArgumentException('invalid length for $iban when calling APIBUSINESSPARTNERABusinessPartnerBankTypeUpdate., must be smaller than or equal to 34.');
        }

        $this->container['iban'] = $iban;

        return $this;
    }

    /**
     * Gets iban_validity_start_date
     *
     * @return string|null
     */
    public function getIbanValidityStartDate()
    {
        return $this->container['iban_validity_start_date'];
    }

    /**
     * Sets iban_validity_start_date
     *
     * @param string|null $iban_validity_start_date Validity Start of IBAN
     *
     * @return self
     */
    public function setIbanValidityStartDate($iban_validity_start_date)
    {
        if (is_null($iban_validity_start_date)) {
            array_push($this->openAPINullablesSetToNull, 'iban_validity_start_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('iban_validity_start_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['iban_validity_start_date'] = $iban_validity_start_date;

        return $this;
    }

    /**
     * Gets bank_account
     *
     * @return string|null
     */
    public function getBankAccount()
    {
        return $this->container['bank_account'];
    }

    /**
     * Sets bank_account
     *
     * @param string|null $bank_account Bank Account Number
     *
     * @return self
     */
    public function setBankAccount($bank_account)
    {
        if (is_null($bank_account)) {
            array_push($this->openAPINullablesSetToNull, 'bank_account');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bank_account', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($bank_account) && (mb_strlen($bank_account) > 18)) {
            throw new \InvalidArgumentException('invalid length for $bank_account when calling APIBUSINESSPARTNERABusinessPartnerBankTypeUpdate., must be smaller than or equal to 18.');
        }

        $this->container['bank_account'] = $bank_account;

        return $this;
    }

    /**
     * Gets bank_account_reference_text
     *
     * @return string|null
     */
    public function getBankAccountReferenceText()
    {
        return $this->container['bank_account_reference_text'];
    }

    /**
     * Sets bank_account_reference_text
     *
     * @param string|null $bank_account_reference_text Reference Details for Bank Details
     *
     * @return self
     */
    public function setBankAccountReferenceText($bank_account_reference_text)
    {
        if (is_null($bank_account_reference_text)) {
            array_push($this->openAPINullablesSetToNull, 'bank_account_reference_text');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bank_account_reference_text', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($bank_account_reference_text) && (mb_strlen($bank_account_reference_text) > 20)) {
            throw new \InvalidArgumentException('invalid length for $bank_account_reference_text when calling APIBUSINESSPARTNERABusinessPartnerBankTypeUpdate., must be smaller than or equal to 20.');
        }

        $this->container['bank_account_reference_text'] = $bank_account_reference_text;

        return $this;
    }

    /**
     * Gets collection_auth_ind
     *
     * @return bool|null
     */
    public function getCollectionAuthInd()
    {
        return $this->container['collection_auth_ind'];
    }

    /**
     * Sets collection_auth_ind
     *
     * @param bool|null $collection_auth_ind Indicator: Collection Authorization
     *
     * @return self
     */
    public function setCollectionAuthInd($collection_auth_ind)
    {
        if (is_null($collection_auth_ind)) {
            array_push($this->openAPINullablesSetToNull, 'collection_auth_ind');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('collection_auth_ind', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['collection_auth_ind'] = $collection_auth_ind;

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
            throw new \InvalidArgumentException('invalid length for $authorization_group when calling APIBUSINESSPARTNERABusinessPartnerBankTypeUpdate., must be smaller than or equal to 4.');
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


