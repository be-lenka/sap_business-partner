# BeLenka\SAP\BusinessPartner\IdentificationApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aBuPaIdentificationBusinessPartnerBusinessPartnerBPIdentificationTypeBPIdentificationTypeBPIdentificationNumberBPIdentificationNumberDelete()**](IdentificationApi.md#aBuPaIdentificationBusinessPartnerBusinessPartnerBPIdentificationTypeBPIdentificationTypeBPIdentificationNumberBPIdentificationNumberDelete) | **DELETE** /A_BuPaIdentification(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,BPIdentificationType&#x3D;&#39;{BPIdentificationType}&#39;,BPIdentificationNumber&#x3D;&#39;{BPIdentificationNumber}&#39;) | Deletes business partner identification data. |
| [**aBuPaIdentificationBusinessPartnerBusinessPartnerBPIdentificationTypeBPIdentificationTypeBPIdentificationNumberBPIdentificationNumberGet()**](IdentificationApi.md#aBuPaIdentificationBusinessPartnerBusinessPartnerBPIdentificationTypeBPIdentificationTypeBPIdentificationNumberBPIdentificationNumberGet) | **GET** /A_BuPaIdentification(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,BPIdentificationType&#x3D;&#39;{BPIdentificationType}&#39;,BPIdentificationNumber&#x3D;&#39;{BPIdentificationNumber}&#39;) | Retrieves business partner identification data by using key fields. |
| [**aBuPaIdentificationBusinessPartnerBusinessPartnerBPIdentificationTypeBPIdentificationTypeBPIdentificationNumberBPIdentificationNumberPatch()**](IdentificationApi.md#aBuPaIdentificationBusinessPartnerBusinessPartnerBPIdentificationTypeBPIdentificationTypeBPIdentificationNumberBPIdentificationNumberPatch) | **PATCH** /A_BuPaIdentification(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,BPIdentificationType&#x3D;&#39;{BPIdentificationType}&#39;,BPIdentificationNumber&#x3D;&#39;{BPIdentificationNumber}&#39;) | Updates business partner identification data. |
| [**aBuPaIdentificationGet()**](IdentificationApi.md#aBuPaIdentificationGet) | **GET** /A_BuPaIdentification | Retrieves business partner identification data. |
| [**aBuPaIdentificationPost()**](IdentificationApi.md#aBuPaIdentificationPost) | **POST** /A_BuPaIdentification | Creates new business partner identification data. |
| [**aBusinessPartnerBusinessPartnerToBuPaIdentificationGet()**](IdentificationApi.md#aBusinessPartnerBusinessPartnerToBuPaIdentificationGet) | **GET** /A_BusinessPartner(&#39;{BusinessPartner}&#39;)/to_BuPaIdentification | Retrieves business partner identification data. |
| [**aBusinessPartnerBusinessPartnerToBuPaIdentificationPost()**](IdentificationApi.md#aBusinessPartnerBusinessPartnerToBuPaIdentificationPost) | **POST** /A_BusinessPartner(&#39;{BusinessPartner}&#39;)/to_BuPaIdentification | Creates new business partner identification data. |


## `aBuPaIdentificationBusinessPartnerBusinessPartnerBPIdentificationTypeBPIdentificationTypeBPIdentificationNumberBPIdentificationNumberDelete()`

```php
aBuPaIdentificationBusinessPartnerBusinessPartnerBPIdentificationTypeBPIdentificationTypeBPIdentificationNumberBPIdentificationNumberDelete($business_partner, $bp_identification_type, $bp_identification_number)
```

Deletes business partner identification data.

Deletes business partner identification data by using business partner number, identification type, and identification number.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\IdentificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$bp_identification_type = 'bp_identification_type_example'; // string | Identification Type
$bp_identification_number = 'bp_identification_number_example'; // string | Identification Number

try {
    $apiInstance->aBuPaIdentificationBusinessPartnerBusinessPartnerBPIdentificationTypeBPIdentificationTypeBPIdentificationNumberBPIdentificationNumberDelete($business_partner, $bp_identification_type, $bp_identification_number);
} catch (Exception $e) {
    echo 'Exception when calling IdentificationApi->aBuPaIdentificationBusinessPartnerBusinessPartnerBPIdentificationTypeBPIdentificationTypeBPIdentificationNumberBPIdentificationNumberDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **bp_identification_type** | **string**| Identification Type | |
| **bp_identification_number** | **string**| Identification Number | |

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

## `aBuPaIdentificationBusinessPartnerBusinessPartnerBPIdentificationTypeBPIdentificationTypeBPIdentificationNumberBPIdentificationNumberGet()`

```php
aBuPaIdentificationBusinessPartnerBusinessPartnerBPIdentificationTypeBPIdentificationTypeBPIdentificationNumberBPIdentificationNumberGet($business_partner, $bp_identification_type, $bp_identification_number, $select): \BeLenka\SAP\BusinessPartner\Model\ABuPaIdentificationType
```

Retrieves business partner identification data by using key fields.

Retrieves business partner identification data using business partner number, identification type, and identification number.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\IdentificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$bp_identification_type = 'bp_identification_type_example'; // string | Identification Type
$bp_identification_number = 'bp_identification_number_example'; // string | Identification Number
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aBuPaIdentificationBusinessPartnerBusinessPartnerBPIdentificationTypeBPIdentificationTypeBPIdentificationNumberBPIdentificationNumberGet($business_partner, $bp_identification_type, $bp_identification_number, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentificationApi->aBuPaIdentificationBusinessPartnerBusinessPartnerBPIdentificationTypeBPIdentificationTypeBPIdentificationNumberBPIdentificationNumberGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **bp_identification_type** | **string**| Identification Type | |
| **bp_identification_number** | **string**| Identification Number | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABuPaIdentificationType**](../Model/ABuPaIdentificationType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBuPaIdentificationBusinessPartnerBusinessPartnerBPIdentificationTypeBPIdentificationTypeBPIdentificationNumberBPIdentificationNumberPatch()`

```php
aBuPaIdentificationBusinessPartnerBusinessPartnerBPIdentificationTypeBPIdentificationTypeBPIdentificationNumberBPIdentificationNumberPatch($business_partner, $bp_identification_type, $bp_identification_number, $modified_abu_pa_identification_type)
```

Updates business partner identification data.

Updates business partner identification data by using business partner number, identification type, and identification number.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\IdentificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$bp_identification_type = 'bp_identification_type_example'; // string | Identification Type
$bp_identification_number = 'bp_identification_number_example'; // string | Identification Number
$modified_abu_pa_identification_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedABuPaIdentificationType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedABuPaIdentificationType | New property values

try {
    $apiInstance->aBuPaIdentificationBusinessPartnerBusinessPartnerBPIdentificationTypeBPIdentificationTypeBPIdentificationNumberBPIdentificationNumberPatch($business_partner, $bp_identification_type, $bp_identification_number, $modified_abu_pa_identification_type);
} catch (Exception $e) {
    echo 'Exception when calling IdentificationApi->aBuPaIdentificationBusinessPartnerBusinessPartnerBPIdentificationTypeBPIdentificationTypeBPIdentificationNumberBPIdentificationNumberPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **bp_identification_type** | **string**| Identification Type | |
| **bp_identification_number** | **string**| Identification Number | |
| **modified_abu_pa_identification_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedABuPaIdentificationType**](../Model/ModifiedABuPaIdentificationType.md)| New property values | |

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

## `aBuPaIdentificationGet()`

```php
aBuPaIdentificationGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper21
```

Retrieves business partner identification data.

Retrieves business partner identification data fields of all the records available records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\IdentificationApi(
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
    $result = $apiInstance->aBuPaIdentificationGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentificationApi->aBuPaIdentificationGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper21**](../Model/Wrapper21.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBuPaIdentificationPost()`

```php
aBuPaIdentificationPost($apibusinesspartnerabu_pa_identification_type_create): \BeLenka\SAP\BusinessPartner\Model\ABuPaIdentificationType
```

Creates new business partner identification data.

Creates new identification data record linked to business partner.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\IdentificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnerabu_pa_identification_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABuPaIdentificationTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABuPaIdentificationTypeCreate | New entity

try {
    $result = $apiInstance->aBuPaIdentificationPost($apibusinesspartnerabu_pa_identification_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentificationApi->aBuPaIdentificationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnerabu_pa_identification_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABuPaIdentificationTypeCreate**](../Model/APIBUSINESSPARTNERABuPaIdentificationTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABuPaIdentificationType**](../Model/ABuPaIdentificationType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerBusinessPartnerToBuPaIdentificationGet()`

```php
aBusinessPartnerBusinessPartnerToBuPaIdentificationGet($business_partner, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper21
```

Retrieves business partner identification data.

Retrieves business partner identification data fields of all the records available records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\IdentificationApi(
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
    $result = $apiInstance->aBusinessPartnerBusinessPartnerToBuPaIdentificationGet($business_partner, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentificationApi->aBusinessPartnerBusinessPartnerToBuPaIdentificationGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper21**](../Model/Wrapper21.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerBusinessPartnerToBuPaIdentificationPost()`

```php
aBusinessPartnerBusinessPartnerToBuPaIdentificationPost($business_partner, $apibusinesspartnerabu_pa_identification_type_create): \BeLenka\SAP\BusinessPartner\Model\ABuPaIdentificationType
```

Creates new business partner identification data.

Creates new identification data record linked to business partner.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\IdentificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$apibusinesspartnerabu_pa_identification_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABuPaIdentificationTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABuPaIdentificationTypeCreate | New entity

try {
    $result = $apiInstance->aBusinessPartnerBusinessPartnerToBuPaIdentificationPost($business_partner, $apibusinesspartnerabu_pa_identification_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentificationApi->aBusinessPartnerBusinessPartnerToBuPaIdentificationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **apibusinesspartnerabu_pa_identification_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABuPaIdentificationTypeCreate**](../Model/APIBUSINESSPARTNERABuPaIdentificationTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABuPaIdentificationType**](../Model/ABuPaIdentificationType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
