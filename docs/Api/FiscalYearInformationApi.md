# BeLenka\SAP\BusinessPartner\FiscalYearInformationApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aBPFiscalYearInformationBusinessPartnerBusinessPartnerBusinessPartnerFiscalYearBusinessPartnerFiscalYearDelete()**](FiscalYearInformationApi.md#aBPFiscalYearInformationBusinessPartnerBusinessPartnerBusinessPartnerFiscalYearBusinessPartnerFiscalYearDelete) | **DELETE** /A_BPFiscalYearInformation(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,BusinessPartnerFiscalYear&#x3D;&#39;{BusinessPartnerFiscalYear}&#39;) | Updates business partner financial services reporting attributes. |
| [**aBPFiscalYearInformationBusinessPartnerBusinessPartnerBusinessPartnerFiscalYearBusinessPartnerFiscalYearGet()**](FiscalYearInformationApi.md#aBPFiscalYearInformationBusinessPartnerBusinessPartnerBusinessPartnerFiscalYearBusinessPartnerFiscalYearGet) | **GET** /A_BPFiscalYearInformation(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,BusinessPartnerFiscalYear&#x3D;&#39;{BusinessPartnerFiscalYear}&#39;) | Retrieves business partner fiscal year information. |
| [**aBPFiscalYearInformationBusinessPartnerBusinessPartnerBusinessPartnerFiscalYearBusinessPartnerFiscalYearPatch()**](FiscalYearInformationApi.md#aBPFiscalYearInformationBusinessPartnerBusinessPartnerBusinessPartnerFiscalYearBusinessPartnerFiscalYearPatch) | **PATCH** /A_BPFiscalYearInformation(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,BusinessPartnerFiscalYear&#x3D;&#39;{BusinessPartnerFiscalYear}&#39;) | Updates business partner fiscal year information. |
| [**aBPFiscalYearInformationGet()**](FiscalYearInformationApi.md#aBPFiscalYearInformationGet) | **GET** /A_BPFiscalYearInformation | Retrieves business partner fiscal year information. |
| [**aBPFiscalYearInformationPost()**](FiscalYearInformationApi.md#aBPFiscalYearInformationPost) | **POST** /A_BPFiscalYearInformation | Creates business partner fiscal year information. |
| [**aBusinessPartnerBusinessPartnerToBPFiscalYearInformationGet()**](FiscalYearInformationApi.md#aBusinessPartnerBusinessPartnerToBPFiscalYearInformationGet) | **GET** /A_BusinessPartner(&#39;{BusinessPartner}&#39;)/to_BPFiscalYearInformation | Retrieves business partner fiscal year information. |
| [**aBusinessPartnerBusinessPartnerToBPFiscalYearInformationPost()**](FiscalYearInformationApi.md#aBusinessPartnerBusinessPartnerToBPFiscalYearInformationPost) | **POST** /A_BusinessPartner(&#39;{BusinessPartner}&#39;)/to_BPFiscalYearInformation | Creates business partner fiscal year information. |


## `aBPFiscalYearInformationBusinessPartnerBusinessPartnerBusinessPartnerFiscalYearBusinessPartnerFiscalYearDelete()`

```php
aBPFiscalYearInformationBusinessPartnerBusinessPartnerBusinessPartnerFiscalYearBusinessPartnerFiscalYearDelete($business_partner, $business_partner_fiscal_year)
```

Updates business partner financial services reporting attributes.

Updates financial services reporting attributes identified by business partner number.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\FiscalYearInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$business_partner_fiscal_year = 'business_partner_fiscal_year_example'; // string | Fiscal year

try {
    $apiInstance->aBPFiscalYearInformationBusinessPartnerBusinessPartnerBusinessPartnerFiscalYearBusinessPartnerFiscalYearDelete($business_partner, $business_partner_fiscal_year);
} catch (Exception $e) {
    echo 'Exception when calling FiscalYearInformationApi->aBPFiscalYearInformationBusinessPartnerBusinessPartnerBusinessPartnerFiscalYearBusinessPartnerFiscalYearDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **business_partner_fiscal_year** | **string**| Fiscal year | |

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

## `aBPFiscalYearInformationBusinessPartnerBusinessPartnerBusinessPartnerFiscalYearBusinessPartnerFiscalYearGet()`

```php
aBPFiscalYearInformationBusinessPartnerBusinessPartnerBusinessPartnerFiscalYearBusinessPartnerFiscalYearGet($business_partner, $business_partner_fiscal_year, $select): \BeLenka\SAP\BusinessPartner\Model\ABPFiscalYearInformationType
```

Retrieves business partner fiscal year information.

Retrieves business partner fiscal year information of all the available records linked to business partners in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\FiscalYearInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$business_partner_fiscal_year = 'business_partner_fiscal_year_example'; // string | Fiscal year
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aBPFiscalYearInformationBusinessPartnerBusinessPartnerBusinessPartnerFiscalYearBusinessPartnerFiscalYearGet($business_partner, $business_partner_fiscal_year, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalYearInformationApi->aBPFiscalYearInformationBusinessPartnerBusinessPartnerBusinessPartnerFiscalYearBusinessPartnerFiscalYearGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **business_partner_fiscal_year** | **string**| Fiscal year | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABPFiscalYearInformationType**](../Model/ABPFiscalYearInformationType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPFiscalYearInformationBusinessPartnerBusinessPartnerBusinessPartnerFiscalYearBusinessPartnerFiscalYearPatch()`

```php
aBPFiscalYearInformationBusinessPartnerBusinessPartnerBusinessPartnerFiscalYearBusinessPartnerFiscalYearPatch($business_partner, $business_partner_fiscal_year, $modified_abp_fiscal_year_information_type)
```

Updates business partner fiscal year information.

Updates business partner fiscal year information identified by business partner number and fiscal year.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\FiscalYearInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$business_partner_fiscal_year = 'business_partner_fiscal_year_example'; // string | Fiscal year
$modified_abp_fiscal_year_information_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedABPFiscalYearInformationType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedABPFiscalYearInformationType | New property values

try {
    $apiInstance->aBPFiscalYearInformationBusinessPartnerBusinessPartnerBusinessPartnerFiscalYearBusinessPartnerFiscalYearPatch($business_partner, $business_partner_fiscal_year, $modified_abp_fiscal_year_information_type);
} catch (Exception $e) {
    echo 'Exception when calling FiscalYearInformationApi->aBPFiscalYearInformationBusinessPartnerBusinessPartnerBusinessPartnerFiscalYearBusinessPartnerFiscalYearPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **business_partner_fiscal_year** | **string**| Fiscal year | |
| **modified_abp_fiscal_year_information_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedABPFiscalYearInformationType**](../Model/ModifiedABPFiscalYearInformationType.md)| New property values | |

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

## `aBPFiscalYearInformationGet()`

```php
aBPFiscalYearInformationGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper17
```

Retrieves business partner fiscal year information.

Retrieves business partner fiscal year information of all the available records linked to business partners in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\FiscalYearInformationApi(
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
    $result = $apiInstance->aBPFiscalYearInformationGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalYearInformationApi->aBPFiscalYearInformationGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper17**](../Model/Wrapper17.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPFiscalYearInformationPost()`

```php
aBPFiscalYearInformationPost($apibusinesspartnerabp_fiscal_year_information_type_create): \BeLenka\SAP\BusinessPartner\Model\ABPFiscalYearInformationType
```

Creates business partner fiscal year information.

Creates business partner fiscal year information linked to an existing business partner.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\FiscalYearInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnerabp_fiscal_year_information_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPFiscalYearInformationTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPFiscalYearInformationTypeCreate | New entity

try {
    $result = $apiInstance->aBPFiscalYearInformationPost($apibusinesspartnerabp_fiscal_year_information_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalYearInformationApi->aBPFiscalYearInformationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnerabp_fiscal_year_information_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPFiscalYearInformationTypeCreate**](../Model/APIBUSINESSPARTNERABPFiscalYearInformationTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABPFiscalYearInformationType**](../Model/ABPFiscalYearInformationType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerBusinessPartnerToBPFiscalYearInformationGet()`

```php
aBusinessPartnerBusinessPartnerToBPFiscalYearInformationGet($business_partner, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper17
```

Retrieves business partner fiscal year information.

Retrieves business partner fiscal year information of all the available records linked to business partners in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\FiscalYearInformationApi(
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
    $result = $apiInstance->aBusinessPartnerBusinessPartnerToBPFiscalYearInformationGet($business_partner, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalYearInformationApi->aBusinessPartnerBusinessPartnerToBPFiscalYearInformationGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper17**](../Model/Wrapper17.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerBusinessPartnerToBPFiscalYearInformationPost()`

```php
aBusinessPartnerBusinessPartnerToBPFiscalYearInformationPost($business_partner, $apibusinesspartnerabp_fiscal_year_information_type_create): \BeLenka\SAP\BusinessPartner\Model\ABPFiscalYearInformationType
```

Creates business partner fiscal year information.

Creates business partner fiscal year information linked to an existing business partner.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\FiscalYearInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$apibusinesspartnerabp_fiscal_year_information_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPFiscalYearInformationTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPFiscalYearInformationTypeCreate | New entity

try {
    $result = $apiInstance->aBusinessPartnerBusinessPartnerToBPFiscalYearInformationPost($business_partner, $apibusinesspartnerabp_fiscal_year_information_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiscalYearInformationApi->aBusinessPartnerBusinessPartnerToBPFiscalYearInformationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **apibusinesspartnerabp_fiscal_year_information_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPFiscalYearInformationTypeCreate**](../Model/APIBUSINESSPARTNERABPFiscalYearInformationTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABPFiscalYearInformationType**](../Model/ABPFiscalYearInformationType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
