# BeLenka\SAP\BusinessPartner\AddressIndependentEmailAddressApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aBPAddressIndependentEmailBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete()**](AddressIndependentEmailAddressApi.md#aBPAddressIndependentEmailBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete) | **DELETE** /A_BPAddressIndependentEmail(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;,Person&#x3D;&#39;{Person}&#39;,OrdinalNumber&#x3D;&#39;{OrdinalNumber}&#39;) | Removes an address-independent email address from a Business Partner. |
| [**aBPAddressIndependentEmailBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet()**](AddressIndependentEmailAddressApi.md#aBPAddressIndependentEmailBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet) | **GET** /A_BPAddressIndependentEmail(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;,Person&#x3D;&#39;{Person}&#39;,OrdinalNumber&#x3D;&#39;{OrdinalNumber}&#39;) | Retrieves address independent Business Partner email addresses. |
| [**aBPAddressIndependentEmailBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch()**](AddressIndependentEmailAddressApi.md#aBPAddressIndependentEmailBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch) | **PATCH** /A_BPAddressIndependentEmail(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;,Person&#x3D;&#39;{Person}&#39;,OrdinalNumber&#x3D;&#39;{OrdinalNumber}&#39;) | Updates an address-independent Business Partner email address. |
| [**aBPAddressIndependentEmailGet()**](AddressIndependentEmailAddressApi.md#aBPAddressIndependentEmailGet) | **GET** /A_BPAddressIndependentEmail | Retrieves address independent Business Partner email addresses. |
| [**aBPAddressIndependentEmailPost()**](AddressIndependentEmailAddressApi.md#aBPAddressIndependentEmailPost) | **POST** /A_BPAddressIndependentEmail | Creates an address-independent Business Partner email address. |
| [**aBusinessPartnerBusinessPartnerToAddressIndependentEmailGet()**](AddressIndependentEmailAddressApi.md#aBusinessPartnerBusinessPartnerToAddressIndependentEmailGet) | **GET** /A_BusinessPartner(&#39;{BusinessPartner}&#39;)/to_AddressIndependentEmail | Retrieves address independent Business Partner email addresses. |
| [**aBusinessPartnerBusinessPartnerToAddressIndependentEmailPost()**](AddressIndependentEmailAddressApi.md#aBusinessPartnerBusinessPartnerToAddressIndependentEmailPost) | **POST** /A_BusinessPartner(&#39;{BusinessPartner}&#39;)/to_AddressIndependentEmail | Creates an address-independent Business Partner email address. |


## `aBPAddressIndependentEmailBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete()`

```php
aBPAddressIndependentEmailBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete($business_partner, $address_id, $person, $ordinal_number)
```

Removes an address-independent email address from a Business Partner.

Deletes an address-independent email address identified by BusinessPartner, AddressID, Person, and OrdinalNumber.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\AddressIndependentEmailAddressApi(
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
    $apiInstance->aBPAddressIndependentEmailBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete($business_partner, $address_id, $person, $ordinal_number);
} catch (Exception $e) {
    echo 'Exception when calling AddressIndependentEmailAddressApi->aBPAddressIndependentEmailBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete: ', $e->getMessage(), PHP_EOL;
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

## `aBPAddressIndependentEmailBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet()`

```php
aBPAddressIndependentEmailBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet($business_partner, $address_id, $person, $ordinal_number, $select): \BeLenka\SAP\BusinessPartner\Model\ABPAddressIndependentEmailType
```

Retrieves address independent Business Partner email addresses.

Retrieves address-independent Business Partner email addresses by BusinessPartner, AddressID, Person, and OrdinalNumber.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\AddressIndependentEmailAddressApi(
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
    $result = $apiInstance->aBPAddressIndependentEmailBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet($business_partner, $address_id, $person, $ordinal_number, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressIndependentEmailAddressApi->aBPAddressIndependentEmailBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\ABPAddressIndependentEmailType**](../Model/ABPAddressIndependentEmailType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPAddressIndependentEmailBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch()`

```php
aBPAddressIndependentEmailBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch($business_partner, $address_id, $person, $ordinal_number, $modified_abp_address_independent_email_type)
```

Updates an address-independent Business Partner email address.

Updates an address-independent Business Partner email address identified by BusinessPartner, AddressID, Person, and OrdinalNumber.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\AddressIndependentEmailAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$address_id = 'address_id_example'; // string | Address Number
$person = 'person_example'; // string | Person Number
$ordinal_number = 'ordinal_number_example'; // string | Sequence Number
$modified_abp_address_independent_email_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedABPAddressIndependentEmailType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedABPAddressIndependentEmailType | New property values

try {
    $apiInstance->aBPAddressIndependentEmailBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch($business_partner, $address_id, $person, $ordinal_number, $modified_abp_address_independent_email_type);
} catch (Exception $e) {
    echo 'Exception when calling AddressIndependentEmailAddressApi->aBPAddressIndependentEmailBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **address_id** | **string**| Address Number | |
| **person** | **string**| Person Number | |
| **ordinal_number** | **string**| Sequence Number | |
| **modified_abp_address_independent_email_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedABPAddressIndependentEmailType**](../Model/ModifiedABPAddressIndependentEmailType.md)| New property values | |

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

## `aBPAddressIndependentEmailGet()`

```php
aBPAddressIndependentEmailGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper5
```

Retrieves address independent Business Partner email addresses.

Retrieves address-independent Business Partner email addresses by BusinessPartner, AddressID, Person, and OrdinalNumber.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\AddressIndependentEmailAddressApi(
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
    $result = $apiInstance->aBPAddressIndependentEmailGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressIndependentEmailAddressApi->aBPAddressIndependentEmailGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper5**](../Model/Wrapper5.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPAddressIndependentEmailPost()`

```php
aBPAddressIndependentEmailPost($apibusinesspartnerabp_address_independent_email_type_create): \BeLenka\SAP\BusinessPartner\Model\ABPAddressIndependentEmailType
```

Creates an address-independent Business Partner email address.

Creates an address-independent Business Partner email address linked to an existing Business Partner.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\AddressIndependentEmailAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnerabp_address_independent_email_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPAddressIndependentEmailTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPAddressIndependentEmailTypeCreate | New entity

try {
    $result = $apiInstance->aBPAddressIndependentEmailPost($apibusinesspartnerabp_address_independent_email_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressIndependentEmailAddressApi->aBPAddressIndependentEmailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnerabp_address_independent_email_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPAddressIndependentEmailTypeCreate**](../Model/APIBUSINESSPARTNERABPAddressIndependentEmailTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABPAddressIndependentEmailType**](../Model/ABPAddressIndependentEmailType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerBusinessPartnerToAddressIndependentEmailGet()`

```php
aBusinessPartnerBusinessPartnerToAddressIndependentEmailGet($business_partner, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper5
```

Retrieves address independent Business Partner email addresses.

Retrieves address-independent Business Partner email addresses by BusinessPartner, AddressID, Person, and OrdinalNumber.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\AddressIndependentEmailAddressApi(
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
    $result = $apiInstance->aBusinessPartnerBusinessPartnerToAddressIndependentEmailGet($business_partner, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressIndependentEmailAddressApi->aBusinessPartnerBusinessPartnerToAddressIndependentEmailGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper5**](../Model/Wrapper5.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerBusinessPartnerToAddressIndependentEmailPost()`

```php
aBusinessPartnerBusinessPartnerToAddressIndependentEmailPost($business_partner, $apibusinesspartnerabp_address_independent_email_type_create): \BeLenka\SAP\BusinessPartner\Model\ABPAddressIndependentEmailType
```

Creates an address-independent Business Partner email address.

Creates an address-independent Business Partner email address linked to an existing Business Partner.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\AddressIndependentEmailAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$apibusinesspartnerabp_address_independent_email_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPAddressIndependentEmailTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPAddressIndependentEmailTypeCreate | New entity

try {
    $result = $apiInstance->aBusinessPartnerBusinessPartnerToAddressIndependentEmailPost($business_partner, $apibusinesspartnerabp_address_independent_email_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressIndependentEmailAddressApi->aBusinessPartnerBusinessPartnerToAddressIndependentEmailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **apibusinesspartnerabp_address_independent_email_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPAddressIndependentEmailTypeCreate**](../Model/APIBUSINESSPARTNERABPAddressIndependentEmailTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABPAddressIndependentEmailType**](../Model/ABPAddressIndependentEmailType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
