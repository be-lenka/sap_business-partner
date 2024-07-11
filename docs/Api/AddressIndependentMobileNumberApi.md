# BeLenka\SAP\BusinessPartner\AddressIndependentMobileNumberApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aBPAddressIndependentMobileBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete()**](AddressIndependentMobileNumberApi.md#aBPAddressIndependentMobileBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete) | **DELETE** /A_BPAddressIndependentMobile(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;,Person&#x3D;&#39;{Person}&#39;,OrdinalNumber&#x3D;&#39;{OrdinalNumber}&#39;) | Removes an address-independent cellphone number from a Business Partner. |
| [**aBPAddressIndependentMobileBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet()**](AddressIndependentMobileNumberApi.md#aBPAddressIndependentMobileBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet) | **GET** /A_BPAddressIndependentMobile(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;,Person&#x3D;&#39;{Person}&#39;,OrdinalNumber&#x3D;&#39;{OrdinalNumber}&#39;) | Retrieves address-independent Business Partner cellphone numbers. |
| [**aBPAddressIndependentMobileBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch()**](AddressIndependentMobileNumberApi.md#aBPAddressIndependentMobileBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch) | **PATCH** /A_BPAddressIndependentMobile(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;,Person&#x3D;&#39;{Person}&#39;,OrdinalNumber&#x3D;&#39;{OrdinalNumber}&#39;) | Updates an address-independent Business Partner cellphone number. |
| [**aBPAddressIndependentMobileGet()**](AddressIndependentMobileNumberApi.md#aBPAddressIndependentMobileGet) | **GET** /A_BPAddressIndependentMobile | Retrieves address-independent Business Partner cellphone numbers. |
| [**aBPAddressIndependentMobilePost()**](AddressIndependentMobileNumberApi.md#aBPAddressIndependentMobilePost) | **POST** /A_BPAddressIndependentMobile | Creates an address-independent Business Partner cellphone number. |
| [**aBusinessPartnerBusinessPartnerToAddressIndependentMobileGet()**](AddressIndependentMobileNumberApi.md#aBusinessPartnerBusinessPartnerToAddressIndependentMobileGet) | **GET** /A_BusinessPartner(&#39;{BusinessPartner}&#39;)/to_AddressIndependentMobile | Retrieves address-independent Business Partner cellphone numbers. |
| [**aBusinessPartnerBusinessPartnerToAddressIndependentMobilePost()**](AddressIndependentMobileNumberApi.md#aBusinessPartnerBusinessPartnerToAddressIndependentMobilePost) | **POST** /A_BusinessPartner(&#39;{BusinessPartner}&#39;)/to_AddressIndependentMobile | Creates an address-independent Business Partner cellphone number. |


## `aBPAddressIndependentMobileBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete()`

```php
aBPAddressIndependentMobileBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete($business_partner, $address_id, $person, $ordinal_number)
```

Removes an address-independent cellphone number from a Business Partner.

Deletes an address-independent cellphone number identified by BusinessPartner, AddressID, Person, and OrdinalNumber.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\BusinessPartner\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\BusinessPartner\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\AddressIndependentMobileNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$address_id = 'address_id_example'; // string | Address Number
$person = 'person_example'; // string | Person Number
$ordinal_number = 'ordinal_number_example'; // string | Sequence Number

try {
    $apiInstance->aBPAddressIndependentMobileBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete($business_partner, $address_id, $person, $ordinal_number);
} catch (Exception $e) {
    echo 'Exception when calling AddressIndependentMobileNumberApi->aBPAddressIndependentMobileBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **address_id** | **string**| Address Number | |
| **person** | **string**| Person Number | |
| **ordinal_number** | **string**| Sequence Number | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPAddressIndependentMobileBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet()`

```php
aBPAddressIndependentMobileBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet($business_partner, $address_id, $person, $ordinal_number, $select): \BeLenka\SAP\BusinessPartner\Model\ABPAddressIndependentMobileType
```

Retrieves address-independent Business Partner cellphone numbers.

Retrieves address-independent Business Partner cellphone numbers by BusinessPartner, AddressID, Person, and OrdinalNumber.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\BusinessPartner\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\BusinessPartner\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\AddressIndependentMobileNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$address_id = 'address_id_example'; // string | Address Number
$person = 'person_example'; // string | Person Number
$ordinal_number = 'ordinal_number_example'; // string | Sequence Number
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aBPAddressIndependentMobileBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet($business_partner, $address_id, $person, $ordinal_number, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressIndependentMobileNumberApi->aBPAddressIndependentMobileBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **address_id** | **string**| Address Number | |
| **person** | **string**| Person Number | |
| **ordinal_number** | **string**| Sequence Number | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABPAddressIndependentMobileType**](../Model/ABPAddressIndependentMobileType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPAddressIndependentMobileBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch()`

```php
aBPAddressIndependentMobileBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch($business_partner, $address_id, $person, $ordinal_number, $modified_abp_address_independent_mobile_type)
```

Updates an address-independent Business Partner cellphone number.

Updates an address-independent Business Partner cellphone number identified by the key fields.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\BusinessPartner\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\BusinessPartner\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\AddressIndependentMobileNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$address_id = 'address_id_example'; // string | Address Number
$person = 'person_example'; // string | Person Number
$ordinal_number = 'ordinal_number_example'; // string | Sequence Number
$modified_abp_address_independent_mobile_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedABPAddressIndependentMobileType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedABPAddressIndependentMobileType | New property values

try {
    $apiInstance->aBPAddressIndependentMobileBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch($business_partner, $address_id, $person, $ordinal_number, $modified_abp_address_independent_mobile_type);
} catch (Exception $e) {
    echo 'Exception when calling AddressIndependentMobileNumberApi->aBPAddressIndependentMobileBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **address_id** | **string**| Address Number | |
| **person** | **string**| Person Number | |
| **ordinal_number** | **string**| Sequence Number | |
| **modified_abp_address_independent_mobile_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedABPAddressIndependentMobileType**](../Model/ModifiedABPAddressIndependentMobileType.md)| New property values | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPAddressIndependentMobileGet()`

```php
aBPAddressIndependentMobileGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper7
```

Retrieves address-independent Business Partner cellphone numbers.

Retrieves address-independent Business Partner cellphone numbers by BusinessPartner, AddressID, Person, and OrdinalNumber.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\BusinessPartner\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\BusinessPartner\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\AddressIndependentMobileNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aBPAddressIndependentMobileGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressIndependentMobileNumberApi->aBPAddressIndependentMobileGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper7**](../Model/Wrapper7.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPAddressIndependentMobilePost()`

```php
aBPAddressIndependentMobilePost($apibusinesspartnerabp_address_independent_mobile_type_create): \BeLenka\SAP\BusinessPartner\Model\ABPAddressIndependentMobileType
```

Creates an address-independent Business Partner cellphone number.

Creates an address-independent Business Partner cellphone number linked to an existing Business Partner.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\BusinessPartner\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\BusinessPartner\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\AddressIndependentMobileNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnerabp_address_independent_mobile_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPAddressIndependentMobileTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPAddressIndependentMobileTypeCreate | New entity

try {
    $result = $apiInstance->aBPAddressIndependentMobilePost($apibusinesspartnerabp_address_independent_mobile_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressIndependentMobileNumberApi->aBPAddressIndependentMobilePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnerabp_address_independent_mobile_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPAddressIndependentMobileTypeCreate**](../Model/APIBUSINESSPARTNERABPAddressIndependentMobileTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABPAddressIndependentMobileType**](../Model/ABPAddressIndependentMobileType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerBusinessPartnerToAddressIndependentMobileGet()`

```php
aBusinessPartnerBusinessPartnerToAddressIndependentMobileGet($business_partner, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper7
```

Retrieves address-independent Business Partner cellphone numbers.

Retrieves address-independent Business Partner cellphone numbers by BusinessPartner, AddressID, Person, and OrdinalNumber.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\BusinessPartner\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\BusinessPartner\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\AddressIndependentMobileNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aBusinessPartnerBusinessPartnerToAddressIndependentMobileGet($business_partner, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressIndependentMobileNumberApi->aBusinessPartnerBusinessPartnerToAddressIndependentMobileGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper7**](../Model/Wrapper7.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerBusinessPartnerToAddressIndependentMobilePost()`

```php
aBusinessPartnerBusinessPartnerToAddressIndependentMobilePost($business_partner, $apibusinesspartnerabp_address_independent_mobile_type_create): \BeLenka\SAP\BusinessPartner\Model\ABPAddressIndependentMobileType
```

Creates an address-independent Business Partner cellphone number.

Creates an address-independent Business Partner cellphone number linked to an existing Business Partner.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\BusinessPartner\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\BusinessPartner\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\AddressIndependentMobileNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$apibusinesspartnerabp_address_independent_mobile_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPAddressIndependentMobileTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPAddressIndependentMobileTypeCreate | New entity

try {
    $result = $apiInstance->aBusinessPartnerBusinessPartnerToAddressIndependentMobilePost($business_partner, $apibusinesspartnerabp_address_independent_mobile_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressIndependentMobileNumberApi->aBusinessPartnerBusinessPartnerToAddressIndependentMobilePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **apibusinesspartnerabp_address_independent_mobile_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPAddressIndependentMobileTypeCreate**](../Model/APIBUSINESSPARTNERABPAddressIndependentMobileTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABPAddressIndependentMobileType**](../Model/ABPAddressIndependentMobileType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
