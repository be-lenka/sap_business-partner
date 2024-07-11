# BeLenka\SAP\BusinessPartner\BusinessPartnerAddressDependentTaxNumbersApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aBusPartAddrDepdntTaxNmbrBusinessPartnerBusinessPartnerAddressIDAddressIDBPTaxTypeBPTaxTypeDelete()**](BusinessPartnerAddressDependentTaxNumbersApi.md#aBusPartAddrDepdntTaxNmbrBusinessPartnerBusinessPartnerAddressIDAddressIDBPTaxTypeBPTaxTypeDelete) | **DELETE** /A_BusPartAddrDepdntTaxNmbr(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;,BPTaxType&#x3D;&#39;{BPTaxType}&#39;) | Deletes address dependent tax number data linked to a business partner. |
| [**aBusPartAddrDepdntTaxNmbrBusinessPartnerBusinessPartnerAddressIDAddressIDBPTaxTypeBPTaxTypeGet()**](BusinessPartnerAddressDependentTaxNumbersApi.md#aBusPartAddrDepdntTaxNmbrBusinessPartnerBusinessPartnerAddressIDAddressIDBPTaxTypeBPTaxTypeGet) | **GET** /A_BusPartAddrDepdntTaxNmbr(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;,BPTaxType&#x3D;&#39;{BPTaxType}&#39;) | Retrieves address dependent business partner tax number data by using key fields. |
| [**aBusPartAddrDepdntTaxNmbrBusinessPartnerBusinessPartnerAddressIDAddressIDBPTaxTypeBPTaxTypePatch()**](BusinessPartnerAddressDependentTaxNumbersApi.md#aBusPartAddrDepdntTaxNmbrBusinessPartnerBusinessPartnerAddressIDAddressIDBPTaxTypeBPTaxTypePatch) | **PATCH** /A_BusPartAddrDepdntTaxNmbr(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;,BPTaxType&#x3D;&#39;{BPTaxType}&#39;) | Updates address dependent tax number data linked to a business partner. |
| [**aBusPartAddrDepdntTaxNmbrGet()**](BusinessPartnerAddressDependentTaxNumbersApi.md#aBusPartAddrDepdntTaxNmbrGet) | **GET** /A_BusPartAddrDepdntTaxNmbr | Retrieves address dependent business partner tax number data. |
| [**aBusPartAddrDepdntTaxNmbrPost()**](BusinessPartnerAddressDependentTaxNumbersApi.md#aBusPartAddrDepdntTaxNmbrPost) | **POST** /A_BusPartAddrDepdntTaxNmbr | Creates new address dependent tax number data. |
| [**aBusinessPartnerBusinessPartnerToBusPartAddrDepdntTaxNmbrGet()**](BusinessPartnerAddressDependentTaxNumbersApi.md#aBusinessPartnerBusinessPartnerToBusPartAddrDepdntTaxNmbrGet) | **GET** /A_BusinessPartner(&#39;{BusinessPartner}&#39;)/to_BusPartAddrDepdntTaxNmbr | Retrieves address dependent business partner tax number data. |
| [**aBusinessPartnerBusinessPartnerToBusPartAddrDepdntTaxNmbrPost()**](BusinessPartnerAddressDependentTaxNumbersApi.md#aBusinessPartnerBusinessPartnerToBusPartAddrDepdntTaxNmbrPost) | **POST** /A_BusinessPartner(&#39;{BusinessPartner}&#39;)/to_BusPartAddrDepdntTaxNmbr | Creates new address dependent tax number data. |


## `aBusPartAddrDepdntTaxNmbrBusinessPartnerBusinessPartnerAddressIDAddressIDBPTaxTypeBPTaxTypeDelete()`

```php
aBusPartAddrDepdntTaxNmbrBusinessPartnerBusinessPartnerAddressIDAddressIDBPTaxTypeBPTaxTypeDelete($business_partner, $address_id, $bp_tax_type)
```

Deletes address dependent tax number data linked to a business partner.

Deletes address dependent tax number data identified by key fields such as business partner number and tax type.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerAddressDependentTaxNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$address_id = 'address_id_example'; // string | Address Number
$bp_tax_type = 'bp_tax_type_example'; // string | Tax Number Category

try {
    $apiInstance->aBusPartAddrDepdntTaxNmbrBusinessPartnerBusinessPartnerAddressIDAddressIDBPTaxTypeBPTaxTypeDelete($business_partner, $address_id, $bp_tax_type);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerAddressDependentTaxNumbersApi->aBusPartAddrDepdntTaxNmbrBusinessPartnerBusinessPartnerAddressIDAddressIDBPTaxTypeBPTaxTypeDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **address_id** | **string**| Address Number | |
| **bp_tax_type** | **string**| Tax Number Category | |

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

## `aBusPartAddrDepdntTaxNmbrBusinessPartnerBusinessPartnerAddressIDAddressIDBPTaxTypeBPTaxTypeGet()`

```php
aBusPartAddrDepdntTaxNmbrBusinessPartnerBusinessPartnerAddressIDAddressIDBPTaxTypeBPTaxTypeGet($business_partner, $address_id, $bp_tax_type, $select): \BeLenka\SAP\BusinessPartner\Model\ABusPartAddrDepdntTaxNmbrType
```

Retrieves address dependent business partner tax number data by using key fields.

Retrieves address dependent tax number data by using the key fields business partner number, address ID  and tax type.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerAddressDependentTaxNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$address_id = 'address_id_example'; // string | Address Number
$bp_tax_type = 'bp_tax_type_example'; // string | Tax Number Category
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aBusPartAddrDepdntTaxNmbrBusinessPartnerBusinessPartnerAddressIDAddressIDBPTaxTypeBPTaxTypeGet($business_partner, $address_id, $bp_tax_type, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerAddressDependentTaxNumbersApi->aBusPartAddrDepdntTaxNmbrBusinessPartnerBusinessPartnerAddressIDAddressIDBPTaxTypeBPTaxTypeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **address_id** | **string**| Address Number | |
| **bp_tax_type** | **string**| Tax Number Category | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABusPartAddrDepdntTaxNmbrType**](../Model/ABusPartAddrDepdntTaxNmbrType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusPartAddrDepdntTaxNmbrBusinessPartnerBusinessPartnerAddressIDAddressIDBPTaxTypeBPTaxTypePatch()`

```php
aBusPartAddrDepdntTaxNmbrBusinessPartnerBusinessPartnerAddressIDAddressIDBPTaxTypeBPTaxTypePatch($business_partner, $address_id, $bp_tax_type, $modified_a_bus_part_addr_depdnt_tax_nmbr_type)
```

Updates address dependent tax number data linked to a business partner.

Updates address dependent tax number data identified by key fields business partner number, address ID and tax type.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerAddressDependentTaxNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$address_id = 'address_id_example'; // string | Address Number
$bp_tax_type = 'bp_tax_type_example'; // string | Tax Number Category
$modified_a_bus_part_addr_depdnt_tax_nmbr_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedABusPartAddrDepdntTaxNmbrType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedABusPartAddrDepdntTaxNmbrType | New property values

try {
    $apiInstance->aBusPartAddrDepdntTaxNmbrBusinessPartnerBusinessPartnerAddressIDAddressIDBPTaxTypeBPTaxTypePatch($business_partner, $address_id, $bp_tax_type, $modified_a_bus_part_addr_depdnt_tax_nmbr_type);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerAddressDependentTaxNumbersApi->aBusPartAddrDepdntTaxNmbrBusinessPartnerBusinessPartnerAddressIDAddressIDBPTaxTypeBPTaxTypePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **address_id** | **string**| Address Number | |
| **bp_tax_type** | **string**| Tax Number Category | |
| **modified_a_bus_part_addr_depdnt_tax_nmbr_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedABusPartAddrDepdntTaxNmbrType**](../Model/ModifiedABusPartAddrDepdntTaxNmbrType.md)| New property values | |

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

## `aBusPartAddrDepdntTaxNmbrGet()`

```php
aBusPartAddrDepdntTaxNmbrGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper31
```

Retrieves address dependent business partner tax number data.

Retrieves address dependent tax number data of all the available records linked to business partners in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerAddressDependentTaxNumbersApi(
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
    $result = $apiInstance->aBusPartAddrDepdntTaxNmbrGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerAddressDependentTaxNumbersApi->aBusPartAddrDepdntTaxNmbrGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper31**](../Model/Wrapper31.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusPartAddrDepdntTaxNmbrPost()`

```php
aBusPartAddrDepdntTaxNmbrPost($apibusinesspartnera_bus_part_addr_depdnt_tax_nmbr_type_create): \BeLenka\SAP\BusinessPartner\Model\ABusPartAddrDepdntTaxNmbrType
```

Creates new address dependent tax number data.

Creates new address dependent tax number data linked to an existing business partner.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerAddressDependentTaxNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnera_bus_part_addr_depdnt_tax_nmbr_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABusPartAddrDepdntTaxNmbrTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABusPartAddrDepdntTaxNmbrTypeCreate | New entity

try {
    $result = $apiInstance->aBusPartAddrDepdntTaxNmbrPost($apibusinesspartnera_bus_part_addr_depdnt_tax_nmbr_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerAddressDependentTaxNumbersApi->aBusPartAddrDepdntTaxNmbrPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnera_bus_part_addr_depdnt_tax_nmbr_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABusPartAddrDepdntTaxNmbrTypeCreate**](../Model/APIBUSINESSPARTNERABusPartAddrDepdntTaxNmbrTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABusPartAddrDepdntTaxNmbrType**](../Model/ABusPartAddrDepdntTaxNmbrType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerBusinessPartnerToBusPartAddrDepdntTaxNmbrGet()`

```php
aBusinessPartnerBusinessPartnerToBusPartAddrDepdntTaxNmbrGet($business_partner, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper31
```

Retrieves address dependent business partner tax number data.

Retrieves address dependent tax number data of all the available records linked to business partners in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerAddressDependentTaxNumbersApi(
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
    $result = $apiInstance->aBusinessPartnerBusinessPartnerToBusPartAddrDepdntTaxNmbrGet($business_partner, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerAddressDependentTaxNumbersApi->aBusinessPartnerBusinessPartnerToBusPartAddrDepdntTaxNmbrGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper31**](../Model/Wrapper31.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerBusinessPartnerToBusPartAddrDepdntTaxNmbrPost()`

```php
aBusinessPartnerBusinessPartnerToBusPartAddrDepdntTaxNmbrPost($business_partner, $apibusinesspartnera_bus_part_addr_depdnt_tax_nmbr_type_create): \BeLenka\SAP\BusinessPartner\Model\ABusPartAddrDepdntTaxNmbrType
```

Creates new address dependent tax number data.

Creates new address dependent tax number data linked to an existing business partner.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerAddressDependentTaxNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$apibusinesspartnera_bus_part_addr_depdnt_tax_nmbr_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABusPartAddrDepdntTaxNmbrTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABusPartAddrDepdntTaxNmbrTypeCreate | New entity

try {
    $result = $apiInstance->aBusinessPartnerBusinessPartnerToBusPartAddrDepdntTaxNmbrPost($business_partner, $apibusinesspartnera_bus_part_addr_depdnt_tax_nmbr_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerAddressDependentTaxNumbersApi->aBusinessPartnerBusinessPartnerToBusPartAddrDepdntTaxNmbrPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **apibusinesspartnera_bus_part_addr_depdnt_tax_nmbr_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABusPartAddrDepdntTaxNmbrTypeCreate**](../Model/APIBUSINESSPARTNERABusPartAddrDepdntTaxNmbrTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABusPartAddrDepdntTaxNmbrType**](../Model/ABusPartAddrDepdntTaxNmbrType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
