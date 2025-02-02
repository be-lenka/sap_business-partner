<?php
/**
 * APIBUSINESSPARTNERACustAddrDepdntInformationType
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
 * APIBUSINESSPARTNERACustAddrDepdntInformationType Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\BusinessPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class APIBUSINESSPARTNERACustAddrDepdntInformationType implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'API_BUSINESS_PARTNER.A_CustAddrDepdntInformationType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customer' => 'string',
        'address_id' => 'string',
        'express_train_station_name' => 'string',
        'train_station_name' => 'string',
        'city_code' => 'string',
        'county' => 'string'
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
        'address_id' => null,
        'express_train_station_name' => null,
        'train_station_name' => null,
        'city_code' => null,
        'county' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'customer' => false,
		'address_id' => false,
		'express_train_station_name' => true,
		'train_station_name' => true,
		'city_code' => true,
		'county' => true
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
        'address_id' => 'AddressID',
        'express_train_station_name' => 'ExpressTrainStationName',
        'train_station_name' => 'TrainStationName',
        'city_code' => 'CityCode',
        'county' => 'County'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer' => 'setCustomer',
        'address_id' => 'setAddressId',
        'express_train_station_name' => 'setExpressTrainStationName',
        'train_station_name' => 'setTrainStationName',
        'city_code' => 'setCityCode',
        'county' => 'setCounty'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer' => 'getCustomer',
        'address_id' => 'getAddressId',
        'express_train_station_name' => 'getExpressTrainStationName',
        'train_station_name' => 'getTrainStationName',
        'city_code' => 'getCityCode',
        'county' => 'getCounty'
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
        $this->setIfExists('address_id', $data ?? [], null);
        $this->setIfExists('express_train_station_name', $data ?? [], null);
        $this->setIfExists('train_station_name', $data ?? [], null);
        $this->setIfExists('city_code', $data ?? [], null);
        $this->setIfExists('county', $data ?? [], null);
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

        if (!is_null($this->container['customer']) && (mb_strlen($this->container['customer']) > 10)) {
            $invalidProperties[] = "invalid value for 'customer', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['address_id']) && (mb_strlen($this->container['address_id']) > 10)) {
            $invalidProperties[] = "invalid value for 'address_id', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['express_train_station_name']) && (mb_strlen($this->container['express_train_station_name']) > 25)) {
            $invalidProperties[] = "invalid value for 'express_train_station_name', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['train_station_name']) && (mb_strlen($this->container['train_station_name']) > 25)) {
            $invalidProperties[] = "invalid value for 'train_station_name', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['city_code']) && (mb_strlen($this->container['city_code']) > 4)) {
            $invalidProperties[] = "invalid value for 'city_code', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['county']) && (mb_strlen($this->container['county']) > 3)) {
            $invalidProperties[] = "invalid value for 'county', the character length must be smaller than or equal to 3.";
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
     * @return string|null
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param string|null $customer Customer Number
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        if (is_null($customer)) {
            throw new \InvalidArgumentException('non-nullable customer cannot be null');
        }
        if ((mb_strlen($customer) > 10)) {
            throw new \InvalidArgumentException('invalid length for $customer when calling APIBUSINESSPARTNERACustAddrDepdntInformationType., must be smaller than or equal to 10.');
        }

        $this->container['customer'] = $customer;

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
     * @param string|null $address_id Business Partner Address Number (from BUT020)
     *
     * @return self
     */
    public function setAddressId($address_id)
    {
        if (is_null($address_id)) {
            throw new \InvalidArgumentException('non-nullable address_id cannot be null');
        }
        if ((mb_strlen($address_id) > 10)) {
            throw new \InvalidArgumentException('invalid length for $address_id when calling APIBUSINESSPARTNERACustAddrDepdntInformationType., must be smaller than or equal to 10.');
        }

        $this->container['address_id'] = $address_id;

        return $this;
    }

    /**
     * Gets express_train_station_name
     *
     * @return string|null
     */
    public function getExpressTrainStationName()
    {
        return $this->container['express_train_station_name'];
    }

    /**
     * Sets express_train_station_name
     *
     * @param string|null $express_train_station_name Express train station
     *
     * @return self
     */
    public function setExpressTrainStationName($express_train_station_name)
    {
        if (is_null($express_train_station_name)) {
            array_push($this->openAPINullablesSetToNull, 'express_train_station_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('express_train_station_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($express_train_station_name) && (mb_strlen($express_train_station_name) > 25)) {
            throw new \InvalidArgumentException('invalid length for $express_train_station_name when calling APIBUSINESSPARTNERACustAddrDepdntInformationType., must be smaller than or equal to 25.');
        }

        $this->container['express_train_station_name'] = $express_train_station_name;

        return $this;
    }

    /**
     * Gets train_station_name
     *
     * @return string|null
     */
    public function getTrainStationName()
    {
        return $this->container['train_station_name'];
    }

    /**
     * Sets train_station_name
     *
     * @param string|null $train_station_name train_station_name
     *
     * @return self
     */
    public function setTrainStationName($train_station_name)
    {
        if (is_null($train_station_name)) {
            array_push($this->openAPINullablesSetToNull, 'train_station_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('train_station_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($train_station_name) && (mb_strlen($train_station_name) > 25)) {
            throw new \InvalidArgumentException('invalid length for $train_station_name when calling APIBUSINESSPARTNERACustAddrDepdntInformationType., must be smaller than or equal to 25.');
        }

        $this->container['train_station_name'] = $train_station_name;

        return $this;
    }

    /**
     * Gets city_code
     *
     * @return string|null
     */
    public function getCityCode()
    {
        return $this->container['city_code'];
    }

    /**
     * Sets city_code
     *
     * @param string|null $city_code city_code
     *
     * @return self
     */
    public function setCityCode($city_code)
    {
        if (is_null($city_code)) {
            array_push($this->openAPINullablesSetToNull, 'city_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('city_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($city_code) && (mb_strlen($city_code) > 4)) {
            throw new \InvalidArgumentException('invalid length for $city_code when calling APIBUSINESSPARTNERACustAddrDepdntInformationType., must be smaller than or equal to 4.');
        }

        $this->container['city_code'] = $city_code;

        return $this;
    }

    /**
     * Gets county
     *
     * @return string|null
     */
    public function getCounty()
    {
        return $this->container['county'];
    }

    /**
     * Sets county
     *
     * @param string|null $county county
     *
     * @return self
     */
    public function setCounty($county)
    {
        if (is_null($county)) {
            array_push($this->openAPINullablesSetToNull, 'county');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('county', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($county) && (mb_strlen($county) > 3)) {
            throw new \InvalidArgumentException('invalid length for $county when calling APIBUSINESSPARTNERACustAddrDepdntInformationType., must be smaller than or equal to 3.');
        }

        $this->container['county'] = $county;

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


