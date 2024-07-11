# BeLenka\SAP\BusinessPartner\AddressUsageApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aBuPaAddressUsageBusinessPartnerBusinessPartnerValidityEndDatedatetimeoffsetValidityEndDateAddressUsageAddressUsageAddressIDAddressIDDelete()**](AddressUsageApi.md#aBuPaAddressUsageBusinessPartnerBusinessPartnerValidityEndDatedatetimeoffsetValidityEndDateAddressUsageAddressUsageAddressIDAddressIDDelete) | **DELETE** /A_BuPaAddressUsage(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,ValidityEndDate&#x3D;datetimeoffset&#39;{ValidityEndDate}&#39;,AddressUsage&#x3D;&#39;{AddressUsage}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;) | Deletes address usage record by using key fields. |
| [**aBuPaAddressUsageBusinessPartnerBusinessPartnerValidityEndDatedatetimeoffsetValidityEndDateAddressUsageAddressUsageAddressIDAddressIDGet()**](AddressUsageApi.md#aBuPaAddressUsageBusinessPartnerBusinessPartnerValidityEndDatedatetimeoffsetValidityEndDateAddressUsageAddressUsageAddressIDAddressIDGet) | **GET** /A_BuPaAddressUsage(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,ValidityEndDate&#x3D;datetimeoffset&#39;{ValidityEndDate}&#39;,AddressUsage&#x3D;&#39;{AddressUsage}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;) | Retrieves address usage record by key fields. |
| [**aBuPaAddressUsageBusinessPartnerBusinessPartnerValidityEndDatedatetimeoffsetValidityEndDateAddressUsageAddressUsageAddressIDAddressIDPatch()**](AddressUsageApi.md#aBuPaAddressUsageBusinessPartnerBusinessPartnerValidityEndDatedatetimeoffsetValidityEndDateAddressUsageAddressUsageAddressIDAddressIDPatch) | **PATCH** /A_BuPaAddressUsage(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,ValidityEndDate&#x3D;datetimeoffset&#39;{ValidityEndDate}&#39;,AddressUsage&#x3D;&#39;{AddressUsage}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;) | Updates address usage record by using key fields. |
| [**aBuPaAddressUsageGet()**](AddressUsageApi.md#aBuPaAddressUsageGet) | **GET** /A_BuPaAddressUsage | Retrieves address usage linked to business partner address. |
| [**aBuPaAddressUsagePost()**](AddressUsageApi.md#aBuPaAddressUsagePost) | **POST** /A_BuPaAddressUsage | Creates an address usage record linked to a existing business partner address. |
| [**aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToAddressUsageGet()**](AddressUsageApi.md#aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToAddressUsageGet) | **GET** /A_BusinessPartnerAddress(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;)/to_AddressUsage | Retrieves address usage linked to business partner address. |
| [**aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToAddressUsagePost()**](AddressUsageApi.md#aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToAddressUsagePost) | **POST** /A_BusinessPartnerAddress(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;)/to_AddressUsage | Creates an address usage record linked to a existing business partner address. |


## `aBuPaAddressUsageBusinessPartnerBusinessPartnerValidityEndDatedatetimeoffsetValidityEndDateAddressUsageAddressUsageAddressIDAddressIDDelete()`

```php
aBuPaAddressUsageBusinessPartnerBusinessPartnerValidityEndDatedatetimeoffsetValidityEndDateAddressUsageAddressUsageAddressIDAddressIDDelete($business_partner, $validity_end_date, $address_usage, $address_id)
```

Deletes address usage record by using key fields.

Deletes address usage record by BusinessPartner, ValidityEndDate, AddressUsage and AddressID.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\AddressUsageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$validity_end_date = 2017-04-13T23:59; // string | Validity End of a Business Partner Address Usage
$address_usage = 'address_usage_example'; // string | Address Type
$address_id = 'address_id_example'; // string | Address Number

try {
    $apiInstance->aBuPaAddressUsageBusinessPartnerBusinessPartnerValidityEndDatedatetimeoffsetValidityEndDateAddressUsageAddressUsageAddressIDAddressIDDelete($business_partner, $validity_end_date, $address_usage, $address_id);
} catch (Exception $e) {
    echo 'Exception when calling AddressUsageApi->aBuPaAddressUsageBusinessPartnerBusinessPartnerValidityEndDatedatetimeoffsetValidityEndDateAddressUsageAddressUsageAddressIDAddressIDDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **validity_end_date** | **string**| Validity End of a Business Partner Address Usage | |
| **address_usage** | **string**| Address Type | |
| **address_id** | **string**| Address Number | |

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

## `aBuPaAddressUsageBusinessPartnerBusinessPartnerValidityEndDatedatetimeoffsetValidityEndDateAddressUsageAddressUsageAddressIDAddressIDGet()`

```php
aBuPaAddressUsageBusinessPartnerBusinessPartnerValidityEndDatedatetimeoffsetValidityEndDateAddressUsageAddressUsageAddressIDAddressIDGet($business_partner, $validity_end_date, $address_usage, $address_id, $select): \BeLenka\SAP\BusinessPartner\Model\ABuPaAddressUsageType
```

Retrieves address usage record by key fields.

Retrieves address usage record linked to a business partner address by BusinessPartner, ValidityEndDate, AddressUsage and AddressID.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\AddressUsageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$validity_end_date = 2017-04-13T23:59; // string | Validity End of a Business Partner Address Usage
$address_usage = 'address_usage_example'; // string | Address Type
$address_id = 'address_id_example'; // string | Address Number
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aBuPaAddressUsageBusinessPartnerBusinessPartnerValidityEndDatedatetimeoffsetValidityEndDateAddressUsageAddressUsageAddressIDAddressIDGet($business_partner, $validity_end_date, $address_usage, $address_id, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressUsageApi->aBuPaAddressUsageBusinessPartnerBusinessPartnerValidityEndDatedatetimeoffsetValidityEndDateAddressUsageAddressUsageAddressIDAddressIDGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **validity_end_date** | **string**| Validity End of a Business Partner Address Usage | |
| **address_usage** | **string**| Address Type | |
| **address_id** | **string**| Address Number | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABuPaAddressUsageType**](../Model/ABuPaAddressUsageType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBuPaAddressUsageBusinessPartnerBusinessPartnerValidityEndDatedatetimeoffsetValidityEndDateAddressUsageAddressUsageAddressIDAddressIDPatch()`

```php
aBuPaAddressUsageBusinessPartnerBusinessPartnerValidityEndDatedatetimeoffsetValidityEndDateAddressUsageAddressUsageAddressIDAddressIDPatch($business_partner, $validity_end_date, $address_usage, $address_id, $modified_abu_pa_address_usage_type)
```

Updates address usage record by using key fields.

Updates address usage record by BusinessPartner, ValidityEndDate, AddressUsage and AddressID.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\AddressUsageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$validity_end_date = 2017-04-13T23:59; // string | Validity End of a Business Partner Address Usage
$address_usage = 'address_usage_example'; // string | Address Type
$address_id = 'address_id_example'; // string | Address Number
$modified_abu_pa_address_usage_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedABuPaAddressUsageType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedABuPaAddressUsageType | New property values

try {
    $apiInstance->aBuPaAddressUsageBusinessPartnerBusinessPartnerValidityEndDatedatetimeoffsetValidityEndDateAddressUsageAddressUsageAddressIDAddressIDPatch($business_partner, $validity_end_date, $address_usage, $address_id, $modified_abu_pa_address_usage_type);
} catch (Exception $e) {
    echo 'Exception when calling AddressUsageApi->aBuPaAddressUsageBusinessPartnerBusinessPartnerValidityEndDatedatetimeoffsetValidityEndDateAddressUsageAddressUsageAddressIDAddressIDPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **validity_end_date** | **string**| Validity End of a Business Partner Address Usage | |
| **address_usage** | **string**| Address Type | |
| **address_id** | **string**| Address Number | |
| **modified_abu_pa_address_usage_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedABuPaAddressUsageType**](../Model/ModifiedABuPaAddressUsageType.md)| New property values | |

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

## `aBuPaAddressUsageGet()`

```php
aBuPaAddressUsageGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper20
```

Retrieves address usage linked to business partner address.

Retrieves all the address usage records linked to all business partner address records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\AddressUsageApi(
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
    $result = $apiInstance->aBuPaAddressUsageGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressUsageApi->aBuPaAddressUsageGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper20**](../Model/Wrapper20.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBuPaAddressUsagePost()`

```php
aBuPaAddressUsagePost($apibusinesspartnerabu_pa_address_usage_type_create): \BeLenka\SAP\BusinessPartner\Model\ABuPaAddressUsageType
```

Creates an address usage record linked to a existing business partner address.

Assigns address usage data to existing business partner address.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\AddressUsageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnerabu_pa_address_usage_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABuPaAddressUsageTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABuPaAddressUsageTypeCreate | New entity

try {
    $result = $apiInstance->aBuPaAddressUsagePost($apibusinesspartnerabu_pa_address_usage_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressUsageApi->aBuPaAddressUsagePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnerabu_pa_address_usage_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABuPaAddressUsageTypeCreate**](../Model/APIBUSINESSPARTNERABuPaAddressUsageTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABuPaAddressUsageType**](../Model/ABuPaAddressUsageType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToAddressUsageGet()`

```php
aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToAddressUsageGet($business_partner, $address_id, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper20
```

Retrieves address usage linked to business partner address.

Retrieves all the address usage records linked to all business partner address records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\AddressUsageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$address_id = 'address_id_example'; // string | Address Number
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToAddressUsageGet($business_partner, $address_id, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressUsageApi->aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToAddressUsageGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **address_id** | **string**| Address Number | |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper20**](../Model/Wrapper20.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToAddressUsagePost()`

```php
aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToAddressUsagePost($business_partner, $address_id, $apibusinesspartnerabu_pa_address_usage_type_create): \BeLenka\SAP\BusinessPartner\Model\ABuPaAddressUsageType
```

Creates an address usage record linked to a existing business partner address.

Assigns address usage data to existing business partner address.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\AddressUsageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$address_id = 'address_id_example'; // string | Address Number
$apibusinesspartnerabu_pa_address_usage_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABuPaAddressUsageTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABuPaAddressUsageTypeCreate | New entity

try {
    $result = $apiInstance->aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToAddressUsagePost($business_partner, $address_id, $apibusinesspartnerabu_pa_address_usage_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressUsageApi->aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToAddressUsagePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **address_id** | **string**| Address Number | |
| **apibusinesspartnerabu_pa_address_usage_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABuPaAddressUsageTypeCreate**](../Model/APIBUSINESSPARTNERABuPaAddressUsageTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABuPaAddressUsageType**](../Model/ABuPaAddressUsageType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
