# BeLenka\SAP\BusinessPartner\EmploymentOverviewApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aBPEmploymentBusinessPartnerBusinessPartnerBPEmploymentStartDatedatetimeBPEmploymentStartDateDelete()**](EmploymentOverviewApi.md#aBPEmploymentBusinessPartnerBusinessPartnerBPEmploymentStartDatedatetimeBPEmploymentStartDateDelete) | **DELETE** /A_BPEmployment(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,BPEmploymentStartDate&#x3D;datetime&#39;{BPEmploymentStartDate}&#39;) | Deletes a business partner employment. |
| [**aBPEmploymentBusinessPartnerBusinessPartnerBPEmploymentStartDatedatetimeBPEmploymentStartDateGet()**](EmploymentOverviewApi.md#aBPEmploymentBusinessPartnerBusinessPartnerBPEmploymentStartDatedatetimeBPEmploymentStartDateGet) | **GET** /A_BPEmployment(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,BPEmploymentStartDate&#x3D;datetime&#39;{BPEmploymentStartDate}&#39;) | Retrieves business partner employments. |
| [**aBPEmploymentBusinessPartnerBusinessPartnerBPEmploymentStartDatedatetimeBPEmploymentStartDatePatch()**](EmploymentOverviewApi.md#aBPEmploymentBusinessPartnerBusinessPartnerBPEmploymentStartDatedatetimeBPEmploymentStartDatePatch) | **PATCH** /A_BPEmployment(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,BPEmploymentStartDate&#x3D;datetime&#39;{BPEmploymentStartDate}&#39;) | Updates a business partner employment. |
| [**aBPEmploymentGet()**](EmploymentOverviewApi.md#aBPEmploymentGet) | **GET** /A_BPEmployment | Retrieves business partner employments. |
| [**aBPEmploymentPost()**](EmploymentOverviewApi.md#aBPEmploymentPost) | **POST** /A_BPEmployment | Creates business partner employments. |
| [**aBusinessPartnerBusinessPartnerToBPEmploymentGet()**](EmploymentOverviewApi.md#aBusinessPartnerBusinessPartnerToBPEmploymentGet) | **GET** /A_BusinessPartner(&#39;{BusinessPartner}&#39;)/to_BPEmployment | Retrieves business partner employments. |
| [**aBusinessPartnerBusinessPartnerToBPEmploymentPost()**](EmploymentOverviewApi.md#aBusinessPartnerBusinessPartnerToBPEmploymentPost) | **POST** /A_BusinessPartner(&#39;{BusinessPartner}&#39;)/to_BPEmployment | Creates business partner employments. |


## `aBPEmploymentBusinessPartnerBusinessPartnerBPEmploymentStartDatedatetimeBPEmploymentStartDateDelete()`

```php
aBPEmploymentBusinessPartnerBusinessPartnerBPEmploymentStartDatedatetimeBPEmploymentStartDateDelete($business_partner, $bp_employment_start_date)
```

Deletes a business partner employment.

Deletes a business partner employment identified by business partner number and start date of the employment.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\EmploymentOverviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$bp_employment_start_date = 2017-04-13T00:00; // string | Employed from

try {
    $apiInstance->aBPEmploymentBusinessPartnerBusinessPartnerBPEmploymentStartDatedatetimeBPEmploymentStartDateDelete($business_partner, $bp_employment_start_date);
} catch (Exception $e) {
    echo 'Exception when calling EmploymentOverviewApi->aBPEmploymentBusinessPartnerBusinessPartnerBPEmploymentStartDatedatetimeBPEmploymentStartDateDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **bp_employment_start_date** | **string**| Employed from | |

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

## `aBPEmploymentBusinessPartnerBusinessPartnerBPEmploymentStartDatedatetimeBPEmploymentStartDateGet()`

```php
aBPEmploymentBusinessPartnerBusinessPartnerBPEmploymentStartDatedatetimeBPEmploymentStartDateGet($business_partner, $bp_employment_start_date, $select): \BeLenka\SAP\BusinessPartner\Model\ABPEmploymentType
```

Retrieves business partner employments.

Retrieves business partner employments of all the available records linked to business partners in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\EmploymentOverviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$bp_employment_start_date = 2017-04-13T00:00; // string | Employed from
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aBPEmploymentBusinessPartnerBusinessPartnerBPEmploymentStartDatedatetimeBPEmploymentStartDateGet($business_partner, $bp_employment_start_date, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmploymentOverviewApi->aBPEmploymentBusinessPartnerBusinessPartnerBPEmploymentStartDatedatetimeBPEmploymentStartDateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **bp_employment_start_date** | **string**| Employed from | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABPEmploymentType**](../Model/ABPEmploymentType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPEmploymentBusinessPartnerBusinessPartnerBPEmploymentStartDatedatetimeBPEmploymentStartDatePatch()`

```php
aBPEmploymentBusinessPartnerBusinessPartnerBPEmploymentStartDatedatetimeBPEmploymentStartDatePatch($business_partner, $bp_employment_start_date, $modified_abp_employment_type)
```

Updates a business partner employment.

Updates a business partner employment identified by business partner number and start date of the employment.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\EmploymentOverviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$bp_employment_start_date = 2017-04-13T00:00; // string | Employed from
$modified_abp_employment_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedABPEmploymentType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedABPEmploymentType | New property values

try {
    $apiInstance->aBPEmploymentBusinessPartnerBusinessPartnerBPEmploymentStartDatedatetimeBPEmploymentStartDatePatch($business_partner, $bp_employment_start_date, $modified_abp_employment_type);
} catch (Exception $e) {
    echo 'Exception when calling EmploymentOverviewApi->aBPEmploymentBusinessPartnerBusinessPartnerBPEmploymentStartDatedatetimeBPEmploymentStartDatePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **bp_employment_start_date** | **string**| Employed from | |
| **modified_abp_employment_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedABPEmploymentType**](../Model/ModifiedABPEmploymentType.md)| New property values | |

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

## `aBPEmploymentGet()`

```php
aBPEmploymentGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper14
```

Retrieves business partner employments.

Retrieves business partner employments of all the available records linked to business partners in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\EmploymentOverviewApi(
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
    $result = $apiInstance->aBPEmploymentGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmploymentOverviewApi->aBPEmploymentGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper14**](../Model/Wrapper14.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPEmploymentPost()`

```php
aBPEmploymentPost($apibusinesspartnerabp_employment_type_create): \BeLenka\SAP\BusinessPartner\Model\ABPEmploymentType
```

Creates business partner employments.

Creates business partner employments linked to an existing business partner.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\EmploymentOverviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnerabp_employment_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPEmploymentTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPEmploymentTypeCreate | New entity

try {
    $result = $apiInstance->aBPEmploymentPost($apibusinesspartnerabp_employment_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmploymentOverviewApi->aBPEmploymentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnerabp_employment_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPEmploymentTypeCreate**](../Model/APIBUSINESSPARTNERABPEmploymentTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABPEmploymentType**](../Model/ABPEmploymentType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerBusinessPartnerToBPEmploymentGet()`

```php
aBusinessPartnerBusinessPartnerToBPEmploymentGet($business_partner, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper14
```

Retrieves business partner employments.

Retrieves business partner employments of all the available records linked to business partners in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\EmploymentOverviewApi(
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
    $result = $apiInstance->aBusinessPartnerBusinessPartnerToBPEmploymentGet($business_partner, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmploymentOverviewApi->aBusinessPartnerBusinessPartnerToBPEmploymentGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper14**](../Model/Wrapper14.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerBusinessPartnerToBPEmploymentPost()`

```php
aBusinessPartnerBusinessPartnerToBPEmploymentPost($business_partner, $apibusinesspartnerabp_employment_type_create): \BeLenka\SAP\BusinessPartner\Model\ABPEmploymentType
```

Creates business partner employments.

Creates business partner employments linked to an existing business partner.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\EmploymentOverviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$apibusinesspartnerabp_employment_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPEmploymentTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPEmploymentTypeCreate | New entity

try {
    $result = $apiInstance->aBusinessPartnerBusinessPartnerToBPEmploymentPost($business_partner, $apibusinesspartnerabp_employment_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmploymentOverviewApi->aBusinessPartnerBusinessPartnerToBPEmploymentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **apibusinesspartnerabp_employment_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPEmploymentTypeCreate**](../Model/APIBUSINESSPARTNERABPEmploymentTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABPEmploymentType**](../Model/ABPEmploymentType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
