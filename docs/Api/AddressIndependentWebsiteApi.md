# BeLenka\SAP\BusinessPartner\AddressIndependentWebsiteApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aBPAddressIndependentWebsiteBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete()**](AddressIndependentWebsiteApi.md#aBPAddressIndependentWebsiteBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete) | **DELETE** /A_BPAddressIndependentWebsite(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;,Person&#x3D;&#39;{Person}&#39;,OrdinalNumber&#x3D;&#39;{OrdinalNumber}&#39;) | Removes an address-independent URL address from a Business Partner. |
| [**aBPAddressIndependentWebsiteBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet()**](AddressIndependentWebsiteApi.md#aBPAddressIndependentWebsiteBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet) | **GET** /A_BPAddressIndependentWebsite(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;,Person&#x3D;&#39;{Person}&#39;,OrdinalNumber&#x3D;&#39;{OrdinalNumber}&#39;) | Retrieves address-independent Business Partner URL addresses. |
| [**aBPAddressIndependentWebsiteBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch()**](AddressIndependentWebsiteApi.md#aBPAddressIndependentWebsiteBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch) | **PATCH** /A_BPAddressIndependentWebsite(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;,Person&#x3D;&#39;{Person}&#39;,OrdinalNumber&#x3D;&#39;{OrdinalNumber}&#39;) | Updates an address-independent Business Partner URL address. |
| [**aBPAddressIndependentWebsiteGet()**](AddressIndependentWebsiteApi.md#aBPAddressIndependentWebsiteGet) | **GET** /A_BPAddressIndependentWebsite | Retrieves address-independent Business Partner URL addresses. |
| [**aBPAddressIndependentWebsitePost()**](AddressIndependentWebsiteApi.md#aBPAddressIndependentWebsitePost) | **POST** /A_BPAddressIndependentWebsite | Creates an address-independent Business Partner URL address. |
| [**aBusinessPartnerBusinessPartnerToAddressIndependentWebsiteGet()**](AddressIndependentWebsiteApi.md#aBusinessPartnerBusinessPartnerToAddressIndependentWebsiteGet) | **GET** /A_BusinessPartner(&#39;{BusinessPartner}&#39;)/to_AddressIndependentWebsite | Retrieves address-independent Business Partner URL addresses. |
| [**aBusinessPartnerBusinessPartnerToAddressIndependentWebsitePost()**](AddressIndependentWebsiteApi.md#aBusinessPartnerBusinessPartnerToAddressIndependentWebsitePost) | **POST** /A_BusinessPartner(&#39;{BusinessPartner}&#39;)/to_AddressIndependentWebsite | Creates an address-independent Business Partner URL address. |


## `aBPAddressIndependentWebsiteBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete()`

```php
aBPAddressIndependentWebsiteBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete($business_partner, $address_id, $person, $ordinal_number)
```

Removes an address-independent URL address from a Business Partner.

Deletes an address-independent URL address identified by BusinessPartner, AddressID, Person, and OrdinalNumber.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\AddressIndependentWebsiteApi(
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
    $apiInstance->aBPAddressIndependentWebsiteBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete($business_partner, $address_id, $person, $ordinal_number);
} catch (Exception $e) {
    echo 'Exception when calling AddressIndependentWebsiteApi->aBPAddressIndependentWebsiteBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete: ', $e->getMessage(), PHP_EOL;
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

## `aBPAddressIndependentWebsiteBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet()`

```php
aBPAddressIndependentWebsiteBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet($business_partner, $address_id, $person, $ordinal_number, $select): \BeLenka\SAP\BusinessPartner\Model\ABPAddressIndependentWebsiteType
```

Retrieves address-independent Business Partner URL addresses.

Retrieves address-independent Business Partner URL addresses by BusinessPartner, AddressID, Person, and OrdinalNumber.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\AddressIndependentWebsiteApi(
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
    $result = $apiInstance->aBPAddressIndependentWebsiteBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet($business_partner, $address_id, $person, $ordinal_number, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressIndependentWebsiteApi->aBPAddressIndependentWebsiteBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\ABPAddressIndependentWebsiteType**](../Model/ABPAddressIndependentWebsiteType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPAddressIndependentWebsiteBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch()`

```php
aBPAddressIndependentWebsiteBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch($business_partner, $address_id, $person, $ordinal_number, $modified_abp_address_independent_website_type)
```

Updates an address-independent Business Partner URL address.

Updates an address-independent Business Partner URL address identified by BusinessPartner, AddressID, Person, and OrdinalNumber.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\AddressIndependentWebsiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$address_id = 'address_id_example'; // string | Address Number
$person = 'person_example'; // string | Person Number
$ordinal_number = 'ordinal_number_example'; // string | Sequence Number
$modified_abp_address_independent_website_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedABPAddressIndependentWebsiteType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedABPAddressIndependentWebsiteType | New property values

try {
    $apiInstance->aBPAddressIndependentWebsiteBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch($business_partner, $address_id, $person, $ordinal_number, $modified_abp_address_independent_website_type);
} catch (Exception $e) {
    echo 'Exception when calling AddressIndependentWebsiteApi->aBPAddressIndependentWebsiteBusinessPartnerBusinessPartnerAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **address_id** | **string**| Address Number | |
| **person** | **string**| Person Number | |
| **ordinal_number** | **string**| Sequence Number | |
| **modified_abp_address_independent_website_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedABPAddressIndependentWebsiteType**](../Model/ModifiedABPAddressIndependentWebsiteType.md)| New property values | |

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

## `aBPAddressIndependentWebsiteGet()`

```php
aBPAddressIndependentWebsiteGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper9
```

Retrieves address-independent Business Partner URL addresses.

Retrieves address-independent Business Partner URL addresses by BusinessPartner, AddressID, Person, and OrdinalNumber.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\AddressIndependentWebsiteApi(
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
    $result = $apiInstance->aBPAddressIndependentWebsiteGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressIndependentWebsiteApi->aBPAddressIndependentWebsiteGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper9**](../Model/Wrapper9.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPAddressIndependentWebsitePost()`

```php
aBPAddressIndependentWebsitePost($apibusinesspartnerabp_address_independent_website_type_create): \BeLenka\SAP\BusinessPartner\Model\ABPAddressIndependentWebsiteType
```

Creates an address-independent Business Partner URL address.

Creates an address-independent Business Partner URL address linked to an existing Business Partner.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\AddressIndependentWebsiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnerabp_address_independent_website_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPAddressIndependentWebsiteTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPAddressIndependentWebsiteTypeCreate | New entity

try {
    $result = $apiInstance->aBPAddressIndependentWebsitePost($apibusinesspartnerabp_address_independent_website_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressIndependentWebsiteApi->aBPAddressIndependentWebsitePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnerabp_address_independent_website_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPAddressIndependentWebsiteTypeCreate**](../Model/APIBUSINESSPARTNERABPAddressIndependentWebsiteTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABPAddressIndependentWebsiteType**](../Model/ABPAddressIndependentWebsiteType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerBusinessPartnerToAddressIndependentWebsiteGet()`

```php
aBusinessPartnerBusinessPartnerToAddressIndependentWebsiteGet($business_partner, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper9
```

Retrieves address-independent Business Partner URL addresses.

Retrieves address-independent Business Partner URL addresses by BusinessPartner, AddressID, Person, and OrdinalNumber.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\AddressIndependentWebsiteApi(
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
    $result = $apiInstance->aBusinessPartnerBusinessPartnerToAddressIndependentWebsiteGet($business_partner, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressIndependentWebsiteApi->aBusinessPartnerBusinessPartnerToAddressIndependentWebsiteGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper9**](../Model/Wrapper9.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerBusinessPartnerToAddressIndependentWebsitePost()`

```php
aBusinessPartnerBusinessPartnerToAddressIndependentWebsitePost($business_partner, $apibusinesspartnerabp_address_independent_website_type_create): \BeLenka\SAP\BusinessPartner\Model\ABPAddressIndependentWebsiteType
```

Creates an address-independent Business Partner URL address.

Creates an address-independent Business Partner URL address linked to an existing Business Partner.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\AddressIndependentWebsiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$apibusinesspartnerabp_address_independent_website_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPAddressIndependentWebsiteTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPAddressIndependentWebsiteTypeCreate | New entity

try {
    $result = $apiInstance->aBusinessPartnerBusinessPartnerToAddressIndependentWebsitePost($business_partner, $apibusinesspartnerabp_address_independent_website_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressIndependentWebsiteApi->aBusinessPartnerBusinessPartnerToAddressIndependentWebsitePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **apibusinesspartnerabp_address_independent_website_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPAddressIndependentWebsiteTypeCreate**](../Model/APIBUSINESSPARTNERABPAddressIndependentWebsiteTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABPAddressIndependentWebsiteType**](../Model/ABPAddressIndependentWebsiteType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
