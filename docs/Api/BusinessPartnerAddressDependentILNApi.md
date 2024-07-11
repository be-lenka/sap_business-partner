# BeLenka\SAP\BusinessPartner\BusinessPartnerAddressDependentILNApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aBPAddrDepdntIntlLocNumberBusinessPartnerBusinessPartnerAddressIDAddressIDDelete()**](BusinessPartnerAddressDependentILNApi.md#aBPAddrDepdntIntlLocNumberBusinessPartnerBusinessPartnerAddressIDAddressIDDelete) | **DELETE** /A_BPAddrDepdntIntlLocNumber(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;) | Deletes address dependent data for the business partner address. |
| [**aBPAddrDepdntIntlLocNumberBusinessPartnerBusinessPartnerAddressIDAddressIDGet()**](BusinessPartnerAddressDependentILNApi.md#aBPAddrDepdntIntlLocNumberBusinessPartnerBusinessPartnerAddressIDAddressIDGet) | **GET** /A_BPAddrDepdntIntlLocNumber(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;) | Retrieves address dependent data for the business partner address. |
| [**aBPAddrDepdntIntlLocNumberBusinessPartnerBusinessPartnerAddressIDAddressIDPatch()**](BusinessPartnerAddressDependentILNApi.md#aBPAddrDepdntIntlLocNumberBusinessPartnerBusinessPartnerAddressIDAddressIDPatch) | **PATCH** /A_BPAddrDepdntIntlLocNumber(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;) | Updates address dependent data for the business partner address. |
| [**aBPAddrDepdntIntlLocNumberGet()**](BusinessPartnerAddressDependentILNApi.md#aBPAddrDepdntIntlLocNumberGet) | **GET** /A_BPAddrDepdntIntlLocNumber | Retrieves address dependent data for the business partner address. |
| [**aBPAddrDepdntIntlLocNumberPost()**](BusinessPartnerAddressDependentILNApi.md#aBPAddrDepdntIntlLocNumberPost) | **POST** /A_BPAddrDepdntIntlLocNumber | Creates new address dependent data for the business partner address. |
| [**aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToBPAddrDepdntIntlLocNumberGet()**](BusinessPartnerAddressDependentILNApi.md#aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToBPAddrDepdntIntlLocNumberGet) | **GET** /A_BusinessPartnerAddress(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;)/to_BPAddrDepdntIntlLocNumber | Retrieves address dependent data for the business partner address. |


## `aBPAddrDepdntIntlLocNumberBusinessPartnerBusinessPartnerAddressIDAddressIDDelete()`

```php
aBPAddrDepdntIntlLocNumberBusinessPartnerBusinessPartnerAddressIDAddressIDDelete($business_partner, $address_id)
```

Deletes address dependent data for the business partner address.

Deletes address dependent data for the business partner address identified by key fields business partner number and address ID.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerAddressDependentILNApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$address_id = 'address_id_example'; // string | Address Number

try {
    $apiInstance->aBPAddrDepdntIntlLocNumberBusinessPartnerBusinessPartnerAddressIDAddressIDDelete($business_partner, $address_id);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerAddressDependentILNApi->aBPAddrDepdntIntlLocNumberBusinessPartnerBusinessPartnerAddressIDAddressIDDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
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

## `aBPAddrDepdntIntlLocNumberBusinessPartnerBusinessPartnerAddressIDAddressIDGet()`

```php
aBPAddrDepdntIntlLocNumberBusinessPartnerBusinessPartnerAddressIDAddressIDGet($business_partner, $address_id, $select): \BeLenka\SAP\BusinessPartner\Model\ABPAddrDepdntIntlLocNumberType
```

Retrieves address dependent data for the business partner address.

Retrieves address dependent data for the business partner address by using the key fields business partner number and address ID.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerAddressDependentILNApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$address_id = 'address_id_example'; // string | Address Number
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aBPAddrDepdntIntlLocNumberBusinessPartnerBusinessPartnerAddressIDAddressIDGet($business_partner, $address_id, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerAddressDependentILNApi->aBPAddrDepdntIntlLocNumberBusinessPartnerBusinessPartnerAddressIDAddressIDGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **address_id** | **string**| Address Number | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABPAddrDepdntIntlLocNumberType**](../Model/ABPAddrDepdntIntlLocNumberType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPAddrDepdntIntlLocNumberBusinessPartnerBusinessPartnerAddressIDAddressIDPatch()`

```php
aBPAddrDepdntIntlLocNumberBusinessPartnerBusinessPartnerAddressIDAddressIDPatch($business_partner, $address_id, $modified_abp_addr_depdnt_intl_loc_number_type)
```

Updates address dependent data for the business partner address.

Updates address dependent data for the business partner address by using the key fields business partner number and address ID.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerAddressDependentILNApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$address_id = 'address_id_example'; // string | Address Number
$modified_abp_addr_depdnt_intl_loc_number_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedABPAddrDepdntIntlLocNumberType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedABPAddrDepdntIntlLocNumberType | New property values

try {
    $apiInstance->aBPAddrDepdntIntlLocNumberBusinessPartnerBusinessPartnerAddressIDAddressIDPatch($business_partner, $address_id, $modified_abp_addr_depdnt_intl_loc_number_type);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerAddressDependentILNApi->aBPAddrDepdntIntlLocNumberBusinessPartnerBusinessPartnerAddressIDAddressIDPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **address_id** | **string**| Address Number | |
| **modified_abp_addr_depdnt_intl_loc_number_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedABPAddrDepdntIntlLocNumberType**](../Model/ModifiedABPAddrDepdntIntlLocNumberType.md)| New property values | |

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

## `aBPAddrDepdntIntlLocNumberGet()`

```php
aBPAddrDepdntIntlLocNumberGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper4
```

Retrieves address dependent data for the business partner address.

Retrieves address dependent data for the business partner address by using the key fields business partner number and address ID.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerAddressDependentILNApi(
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
    $result = $apiInstance->aBPAddrDepdntIntlLocNumberGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerAddressDependentILNApi->aBPAddrDepdntIntlLocNumberGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper4**](../Model/Wrapper4.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPAddrDepdntIntlLocNumberPost()`

```php
aBPAddrDepdntIntlLocNumberPost($apibusinesspartnerabp_addr_depdnt_intl_loc_number_type_create): \BeLenka\SAP\BusinessPartner\Model\ABPAddrDepdntIntlLocNumberType
```

Creates new address dependent data for the business partner address.

Adds new address dependent data for the business partner address.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerAddressDependentILNApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnerabp_addr_depdnt_intl_loc_number_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPAddrDepdntIntlLocNumberTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPAddrDepdntIntlLocNumberTypeCreate | New entity

try {
    $result = $apiInstance->aBPAddrDepdntIntlLocNumberPost($apibusinesspartnerabp_addr_depdnt_intl_loc_number_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerAddressDependentILNApi->aBPAddrDepdntIntlLocNumberPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnerabp_addr_depdnt_intl_loc_number_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPAddrDepdntIntlLocNumberTypeCreate**](../Model/APIBUSINESSPARTNERABPAddrDepdntIntlLocNumberTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABPAddrDepdntIntlLocNumberType**](../Model/ABPAddrDepdntIntlLocNumberType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToBPAddrDepdntIntlLocNumberGet()`

```php
aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToBPAddrDepdntIntlLocNumberGet($business_partner, $address_id, $select): \BeLenka\SAP\BusinessPartner\Model\ABPAddrDepdntIntlLocNumberType
```

Retrieves address dependent data for the business partner address.

Retrieves general data of all the supplier records available in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerAddressDependentILNApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$address_id = 'address_id_example'; // string | Address Number
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToBPAddrDepdntIntlLocNumberGet($business_partner, $address_id, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerAddressDependentILNApi->aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToBPAddrDepdntIntlLocNumberGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **address_id** | **string**| Address Number | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABPAddrDepdntIntlLocNumberType**](../Model/ABPAddrDepdntIntlLocNumberType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
