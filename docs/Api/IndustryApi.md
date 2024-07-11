# BeLenka\SAP\BusinessPartner\IndustryApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aBuPaIndustryGet()**](IndustryApi.md#aBuPaIndustryGet) | **GET** /A_BuPaIndustry | Retrieves business partner industry data. |
| [**aBuPaIndustryIndustrySectorIndustrySectorIndustrySystemTypeIndustrySystemTypeBusinessPartnerBusinessPartnerDelete()**](IndustryApi.md#aBuPaIndustryIndustrySectorIndustrySectorIndustrySystemTypeIndustrySystemTypeBusinessPartnerBusinessPartnerDelete) | **DELETE** /A_BuPaIndustry(IndustrySector&#x3D;&#39;{IndustrySector}&#39;,IndustrySystemType&#x3D;&#39;{IndustrySystemType}&#39;,BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;) | Deletes business partner industry data. |
| [**aBuPaIndustryIndustrySectorIndustrySectorIndustrySystemTypeIndustrySystemTypeBusinessPartnerBusinessPartnerGet()**](IndustryApi.md#aBuPaIndustryIndustrySectorIndustrySectorIndustrySystemTypeIndustrySystemTypeBusinessPartnerBusinessPartnerGet) | **GET** /A_BuPaIndustry(IndustrySector&#x3D;&#39;{IndustrySector}&#39;,IndustrySystemType&#x3D;&#39;{IndustrySystemType}&#39;,BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;) | Retrieves business partner industry data by key fields. |
| [**aBuPaIndustryIndustrySectorIndustrySectorIndustrySystemTypeIndustrySystemTypeBusinessPartnerBusinessPartnerPatch()**](IndustryApi.md#aBuPaIndustryIndustrySectorIndustrySectorIndustrySystemTypeIndustrySystemTypeBusinessPartnerBusinessPartnerPatch) | **PATCH** /A_BuPaIndustry(IndustrySector&#x3D;&#39;{IndustrySector}&#39;,IndustrySystemType&#x3D;&#39;{IndustrySystemType}&#39;,BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;) | Updates business partner industry data. |
| [**aBuPaIndustryPost()**](IndustryApi.md#aBuPaIndustryPost) | **POST** /A_BuPaIndustry | Creates industry data linked to business partner record. |
| [**aBusinessPartnerBusinessPartnerToBuPaIndustryGet()**](IndustryApi.md#aBusinessPartnerBusinessPartnerToBuPaIndustryGet) | **GET** /A_BusinessPartner(&#39;{BusinessPartner}&#39;)/to_BuPaIndustry | Retrieves business partner industry data. |
| [**aBusinessPartnerBusinessPartnerToBuPaIndustryPost()**](IndustryApi.md#aBusinessPartnerBusinessPartnerToBuPaIndustryPost) | **POST** /A_BusinessPartner(&#39;{BusinessPartner}&#39;)/to_BuPaIndustry | Creates industry data linked to business partner record. |


## `aBuPaIndustryGet()`

```php
aBuPaIndustryGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper22
```

Retrieves business partner industry data.

Retrieves business partner industry data fields of all the available records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\IndustryApi(
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
    $result = $apiInstance->aBuPaIndustryGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustryApi->aBuPaIndustryGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper22**](../Model/Wrapper22.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBuPaIndustryIndustrySectorIndustrySectorIndustrySystemTypeIndustrySystemTypeBusinessPartnerBusinessPartnerDelete()`

```php
aBuPaIndustryIndustrySectorIndustrySectorIndustrySystemTypeIndustrySystemTypeBusinessPartnerBusinessPartnerDelete($industry_sector, $industry_system_type, $business_partner)
```

Deletes business partner industry data.

Removes industry data linked to the business partner record identified by IndustrySector, IndustrySystemType, and BusinessPartner.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\IndustryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$industry_sector = 'industry_sector_example'; // string | Industry
$industry_system_type = 'industry_system_type_example'; // string | Industry System
$business_partner = 'business_partner_example'; // string | Business Partner Number

try {
    $apiInstance->aBuPaIndustryIndustrySectorIndustrySectorIndustrySystemTypeIndustrySystemTypeBusinessPartnerBusinessPartnerDelete($industry_sector, $industry_system_type, $business_partner);
} catch (Exception $e) {
    echo 'Exception when calling IndustryApi->aBuPaIndustryIndustrySectorIndustrySectorIndustrySystemTypeIndustrySystemTypeBusinessPartnerBusinessPartnerDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **industry_sector** | **string**| Industry | |
| **industry_system_type** | **string**| Industry System | |
| **business_partner** | **string**| Business Partner Number | |

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

## `aBuPaIndustryIndustrySectorIndustrySectorIndustrySystemTypeIndustrySystemTypeBusinessPartnerBusinessPartnerGet()`

```php
aBuPaIndustryIndustrySectorIndustrySectorIndustrySystemTypeIndustrySystemTypeBusinessPartnerBusinessPartnerGet($industry_sector, $industry_system_type, $business_partner, $select): \BeLenka\SAP\BusinessPartner\Model\ABuPaIndustryType
```

Retrieves business partner industry data by key fields.

Retrieves business partner industry data by using industry sector, industry system type and business partner number

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\IndustryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$industry_sector = 'industry_sector_example'; // string | Industry
$industry_system_type = 'industry_system_type_example'; // string | Industry System
$business_partner = 'business_partner_example'; // string | Business Partner Number
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aBuPaIndustryIndustrySectorIndustrySectorIndustrySystemTypeIndustrySystemTypeBusinessPartnerBusinessPartnerGet($industry_sector, $industry_system_type, $business_partner, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustryApi->aBuPaIndustryIndustrySectorIndustrySectorIndustrySystemTypeIndustrySystemTypeBusinessPartnerBusinessPartnerGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **industry_sector** | **string**| Industry | |
| **industry_system_type** | **string**| Industry System | |
| **business_partner** | **string**| Business Partner Number | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABuPaIndustryType**](../Model/ABuPaIndustryType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBuPaIndustryIndustrySectorIndustrySectorIndustrySystemTypeIndustrySystemTypeBusinessPartnerBusinessPartnerPatch()`

```php
aBuPaIndustryIndustrySectorIndustrySectorIndustrySystemTypeIndustrySystemTypeBusinessPartnerBusinessPartnerPatch($industry_sector, $industry_system_type, $business_partner, $modified_abu_pa_industry_type)
```

Updates business partner industry data.

Updates business partner industry data by industry sector, industry system type and business partner number

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\IndustryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$industry_sector = 'industry_sector_example'; // string | Industry
$industry_system_type = 'industry_system_type_example'; // string | Industry System
$business_partner = 'business_partner_example'; // string | Business Partner Number
$modified_abu_pa_industry_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedABuPaIndustryType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedABuPaIndustryType | New property values

try {
    $apiInstance->aBuPaIndustryIndustrySectorIndustrySectorIndustrySystemTypeIndustrySystemTypeBusinessPartnerBusinessPartnerPatch($industry_sector, $industry_system_type, $business_partner, $modified_abu_pa_industry_type);
} catch (Exception $e) {
    echo 'Exception when calling IndustryApi->aBuPaIndustryIndustrySectorIndustrySectorIndustrySystemTypeIndustrySystemTypeBusinessPartnerBusinessPartnerPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **industry_sector** | **string**| Industry | |
| **industry_system_type** | **string**| Industry System | |
| **business_partner** | **string**| Business Partner Number | |
| **modified_abu_pa_industry_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedABuPaIndustryType**](../Model/ModifiedABuPaIndustryType.md)| New property values | |

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

## `aBuPaIndustryPost()`

```php
aBuPaIndustryPost($apibusinesspartnerabu_pa_industry_type_create): \BeLenka\SAP\BusinessPartner\Model\ABuPaIndustryType
```

Creates industry data linked to business partner record.

Assigns new industry data to the business partner record.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\IndustryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnerabu_pa_industry_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABuPaIndustryTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABuPaIndustryTypeCreate | New entity

try {
    $result = $apiInstance->aBuPaIndustryPost($apibusinesspartnerabu_pa_industry_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustryApi->aBuPaIndustryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnerabu_pa_industry_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABuPaIndustryTypeCreate**](../Model/APIBUSINESSPARTNERABuPaIndustryTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABuPaIndustryType**](../Model/ABuPaIndustryType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerBusinessPartnerToBuPaIndustryGet()`

```php
aBusinessPartnerBusinessPartnerToBuPaIndustryGet($business_partner, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper22
```

Retrieves business partner industry data.

Retrieves business partner industry data fields of all the available records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\IndustryApi(
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
    $result = $apiInstance->aBusinessPartnerBusinessPartnerToBuPaIndustryGet($business_partner, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustryApi->aBusinessPartnerBusinessPartnerToBuPaIndustryGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper22**](../Model/Wrapper22.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerBusinessPartnerToBuPaIndustryPost()`

```php
aBusinessPartnerBusinessPartnerToBuPaIndustryPost($business_partner, $apibusinesspartnerabu_pa_industry_type_create): \BeLenka\SAP\BusinessPartner\Model\ABuPaIndustryType
```

Creates industry data linked to business partner record.

Assigns new industry data to the business partner record.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\IndustryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$apibusinesspartnerabu_pa_industry_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABuPaIndustryTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABuPaIndustryTypeCreate | New entity

try {
    $result = $apiInstance->aBusinessPartnerBusinessPartnerToBuPaIndustryPost($business_partner, $apibusinesspartnerabu_pa_industry_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndustryApi->aBusinessPartnerBusinessPartnerToBuPaIndustryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **apibusinesspartnerabu_pa_industry_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABuPaIndustryTypeCreate**](../Model/APIBUSINESSPARTNERABuPaIndustryTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABuPaIndustryType**](../Model/ABuPaIndustryType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
