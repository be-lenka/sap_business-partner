# BeLenka\SAP\BusinessPartner\BusinessPartnerDataControllerApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aBPDataControllerBusinessPartnerBusinessPartnerDataControllerDataControllerPurposeForPersonalDataPurposeForPersonalDataGet()**](BusinessPartnerDataControllerApi.md#aBPDataControllerBusinessPartnerBusinessPartnerDataControllerDataControllerPurposeForPersonalDataPurposeForPersonalDataGet) | **GET** /A_BPDataController(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,DataController&#x3D;&#39;{DataController}&#39;,PurposeForPersonalData&#x3D;&#39;{PurposeForPersonalData}&#39;) | Get entity from A_BPDataController by key |
| [**aBPDataControllerBusinessPartnerBusinessPartnerDataControllerDataControllerPurposeForPersonalDataPurposeForPersonalDataPatch()**](BusinessPartnerDataControllerApi.md#aBPDataControllerBusinessPartnerBusinessPartnerDataControllerDataControllerPurposeForPersonalDataPurposeForPersonalDataPatch) | **PATCH** /A_BPDataController(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,DataController&#x3D;&#39;{DataController}&#39;,PurposeForPersonalData&#x3D;&#39;{PurposeForPersonalData}&#39;) | Updates a business partner data controller. |
| [**aBPDataControllerGet()**](BusinessPartnerDataControllerApi.md#aBPDataControllerGet) | **GET** /A_BPDataController | Retrieves business partner data controllers by using key fields. |
| [**aBPDataControllerPost()**](BusinessPartnerDataControllerApi.md#aBPDataControllerPost) | **POST** /A_BPDataController | Creates a new business partner data controller. |
| [**aBusinessPartnerBusinessPartnerToBPDataControllerGet()**](BusinessPartnerDataControllerApi.md#aBusinessPartnerBusinessPartnerToBPDataControllerGet) | **GET** /A_BusinessPartner(&#39;{BusinessPartner}&#39;)/to_BPDataController | Retrieves business partner data controllers by using key fields. |
| [**aBusinessPartnerBusinessPartnerToBPDataControllerPost()**](BusinessPartnerDataControllerApi.md#aBusinessPartnerBusinessPartnerToBPDataControllerPost) | **POST** /A_BusinessPartner(&#39;{BusinessPartner}&#39;)/to_BPDataController | Creates a new business partner data controller. |


## `aBPDataControllerBusinessPartnerBusinessPartnerDataControllerDataControllerPurposeForPersonalDataPurposeForPersonalDataGet()`

```php
aBPDataControllerBusinessPartnerBusinessPartnerDataControllerDataControllerPurposeForPersonalDataPurposeForPersonalDataGet($business_partner, $data_controller, $purpose_for_personal_data, $select): \BeLenka\SAP\BusinessPartner\Model\ABPDataControllerType
```

Get entity from A_BPDataController by key

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerDataControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$data_controller = 'data_controller_example'; // string | BP: Data Controller
$purpose_for_personal_data = 'purpose_for_personal_data_example'; // string | BP: Purpose
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aBPDataControllerBusinessPartnerBusinessPartnerDataControllerDataControllerPurposeForPersonalDataPurposeForPersonalDataGet($business_partner, $data_controller, $purpose_for_personal_data, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerDataControllerApi->aBPDataControllerBusinessPartnerBusinessPartnerDataControllerDataControllerPurposeForPersonalDataPurposeForPersonalDataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **data_controller** | **string**| BP: Data Controller | |
| **purpose_for_personal_data** | **string**| BP: Purpose | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABPDataControllerType**](../Model/ABPDataControllerType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPDataControllerBusinessPartnerBusinessPartnerDataControllerDataControllerPurposeForPersonalDataPurposeForPersonalDataPatch()`

```php
aBPDataControllerBusinessPartnerBusinessPartnerDataControllerDataControllerPurposeForPersonalDataPurposeForPersonalDataPatch($business_partner, $data_controller, $purpose_for_personal_data, $modified_abp_data_controller_type)
```

Updates a business partner data controller.

Updates a business partner data controller identified by key fields BusinessPartner, DataController, BPDataPurposeName..

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerDataControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$data_controller = 'data_controller_example'; // string | BP: Data Controller
$purpose_for_personal_data = 'purpose_for_personal_data_example'; // string | BP: Purpose
$modified_abp_data_controller_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedABPDataControllerType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedABPDataControllerType | New property values

try {
    $apiInstance->aBPDataControllerBusinessPartnerBusinessPartnerDataControllerDataControllerPurposeForPersonalDataPurposeForPersonalDataPatch($business_partner, $data_controller, $purpose_for_personal_data, $modified_abp_data_controller_type);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerDataControllerApi->aBPDataControllerBusinessPartnerBusinessPartnerDataControllerDataControllerPurposeForPersonalDataPurposeForPersonalDataPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **data_controller** | **string**| BP: Data Controller | |
| **purpose_for_personal_data** | **string**| BP: Purpose | |
| **modified_abp_data_controller_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedABPDataControllerType**](../Model/ModifiedABPDataControllerType.md)| New property values | |

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

## `aBPDataControllerGet()`

```php
aBPDataControllerGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper13
```

Retrieves business partner data controllers by using key fields.

Retrieves business partner data controllers of all the available records linked to business partners in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerDataControllerApi(
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
    $result = $apiInstance->aBPDataControllerGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerDataControllerApi->aBPDataControllerGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper13**](../Model/Wrapper13.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPDataControllerPost()`

```php
aBPDataControllerPost($apibusinesspartnerabp_data_controller_type_create): \BeLenka\SAP\BusinessPartner\Model\ABPDataControllerType
```

Creates a new business partner data controller.

Creates a new business partner data controller linked to an existing business partner.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerDataControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnerabp_data_controller_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPDataControllerTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPDataControllerTypeCreate | New entity

try {
    $result = $apiInstance->aBPDataControllerPost($apibusinesspartnerabp_data_controller_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerDataControllerApi->aBPDataControllerPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnerabp_data_controller_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPDataControllerTypeCreate**](../Model/APIBUSINESSPARTNERABPDataControllerTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABPDataControllerType**](../Model/ABPDataControllerType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerBusinessPartnerToBPDataControllerGet()`

```php
aBusinessPartnerBusinessPartnerToBPDataControllerGet($business_partner, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper13
```

Retrieves business partner data controllers by using key fields.

Retrieves business partner data controllers of all the available records linked to business partners in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerDataControllerApi(
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
    $result = $apiInstance->aBusinessPartnerBusinessPartnerToBPDataControllerGet($business_partner, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerDataControllerApi->aBusinessPartnerBusinessPartnerToBPDataControllerGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper13**](../Model/Wrapper13.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerBusinessPartnerToBPDataControllerPost()`

```php
aBusinessPartnerBusinessPartnerToBPDataControllerPost($business_partner, $apibusinesspartnerabp_data_controller_type_create): \BeLenka\SAP\BusinessPartner\Model\ABPDataControllerType
```

Creates a new business partner data controller.

Creates a new business partner data controller linked to an existing business partner.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerDataControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$apibusinesspartnerabp_data_controller_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPDataControllerTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPDataControllerTypeCreate | New entity

try {
    $result = $apiInstance->aBusinessPartnerBusinessPartnerToBPDataControllerPost($business_partner, $apibusinesspartnerabp_data_controller_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerDataControllerApi->aBusinessPartnerBusinessPartnerToBPDataControllerPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **apibusinesspartnerabp_data_controller_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPDataControllerTypeCreate**](../Model/APIBUSINESSPARTNERABPDataControllerTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABPDataControllerType**](../Model/ABPDataControllerType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
