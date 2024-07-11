# BeLenka\SAP\BusinessPartner\BusinessPartnerRelationshipApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aBPRelationshipGet()**](BusinessPartnerRelationshipApi.md#aBPRelationshipGet) | **GET** /A_BPRelationship | Retrieves business partner relationship data. |
| [**aBPRelationshipPost()**](BusinessPartnerRelationshipApi.md#aBPRelationshipPost) | **POST** /A_BPRelationship | Creates new business partner relationship data. |
| [**aBPRelationshipRelationshipNumberRelationshipNumberBusinessPartner1BusinessPartner1BusinessPartner2BusinessPartner2ValidityEndDatedatetimeValidityEndDateDelete()**](BusinessPartnerRelationshipApi.md#aBPRelationshipRelationshipNumberRelationshipNumberBusinessPartner1BusinessPartner1BusinessPartner2BusinessPartner2ValidityEndDatedatetimeValidityEndDateDelete) | **DELETE** /A_BPRelationship(RelationshipNumber&#x3D;&#39;{RelationshipNumber}&#39;,BusinessPartner1&#x3D;&#39;{BusinessPartner1}&#39;,BusinessPartner2&#x3D;&#39;{BusinessPartner2}&#39;,ValidityEndDate&#x3D;datetime&#39;{ValidityEndDate}&#39;) | Removes the relationship assigned to the business partner by using the key fields. |
| [**aBPRelationshipRelationshipNumberRelationshipNumberBusinessPartner1BusinessPartner1BusinessPartner2BusinessPartner2ValidityEndDatedatetimeValidityEndDateGet()**](BusinessPartnerRelationshipApi.md#aBPRelationshipRelationshipNumberRelationshipNumberBusinessPartner1BusinessPartner1BusinessPartner2BusinessPartner2ValidityEndDatedatetimeValidityEndDateGet) | **GET** /A_BPRelationship(RelationshipNumber&#x3D;&#39;{RelationshipNumber}&#39;,BusinessPartner1&#x3D;&#39;{BusinessPartner1}&#39;,BusinessPartner2&#x3D;&#39;{BusinessPartner2}&#39;,ValidityEndDate&#x3D;datetime&#39;{ValidityEndDate}&#39;) | Retrieves business partner relationship data by using key fields. |
| [**aBPRelationshipRelationshipNumberRelationshipNumberBusinessPartner1BusinessPartner1BusinessPartner2BusinessPartner2ValidityEndDatedatetimeValidityEndDatePatch()**](BusinessPartnerRelationshipApi.md#aBPRelationshipRelationshipNumberRelationshipNumberBusinessPartner1BusinessPartner1BusinessPartner2BusinessPartner2ValidityEndDatedatetimeValidityEndDatePatch) | **PATCH** /A_BPRelationship(RelationshipNumber&#x3D;&#39;{RelationshipNumber}&#39;,BusinessPartner1&#x3D;&#39;{BusinessPartner1}&#39;,BusinessPartner2&#x3D;&#39;{BusinessPartner2}&#39;,ValidityEndDate&#x3D;datetime&#39;{ValidityEndDate}&#39;) | Updates business partner relationship data. |
| [**aBusinessPartnerBusinessPartnerToBPRelationshipGet()**](BusinessPartnerRelationshipApi.md#aBusinessPartnerBusinessPartnerToBPRelationshipGet) | **GET** /A_BusinessPartner(&#39;{BusinessPartner}&#39;)/to_BPRelationship | Retrieves business partner relationship data. |
| [**aBusinessPartnerBusinessPartnerToBPRelationshipPost()**](BusinessPartnerRelationshipApi.md#aBusinessPartnerBusinessPartnerToBPRelationshipPost) | **POST** /A_BusinessPartner(&#39;{BusinessPartner}&#39;)/to_BPRelationship | Add new entity to related to_BPRelationship |


## `aBPRelationshipGet()`

```php
aBPRelationshipGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper19
```

Retrieves business partner relationship data.

Retrieves business partner relationship data fields of all the available records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerRelationshipApi(
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
    $result = $apiInstance->aBPRelationshipGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerRelationshipApi->aBPRelationshipGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper19**](../Model/Wrapper19.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPRelationshipPost()`

```php
aBPRelationshipPost($apibusinesspartnerabp_relationship_type_create): \BeLenka\SAP\BusinessPartner\Model\ABPRelationshipType
```

Creates new business partner relationship data.

Adds a new business partner relationship to the business partner.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerRelationshipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnerabp_relationship_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPRelationshipTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPRelationshipTypeCreate | New entity

try {
    $result = $apiInstance->aBPRelationshipPost($apibusinesspartnerabp_relationship_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerRelationshipApi->aBPRelationshipPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnerabp_relationship_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPRelationshipTypeCreate**](../Model/APIBUSINESSPARTNERABPRelationshipTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABPRelationshipType**](../Model/ABPRelationshipType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPRelationshipRelationshipNumberRelationshipNumberBusinessPartner1BusinessPartner1BusinessPartner2BusinessPartner2ValidityEndDatedatetimeValidityEndDateDelete()`

```php
aBPRelationshipRelationshipNumberRelationshipNumberBusinessPartner1BusinessPartner1BusinessPartner2BusinessPartner2ValidityEndDatedatetimeValidityEndDateDelete($relationship_number, $business_partner1, $business_partner2, $validity_end_date)
```

Removes the relationship assigned to the business partner by using the key fields.

Deletes business partner relationship data by RelationshipNumber, BusinessPartner1, BusinessPartner2 and ValidityEndDate

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerRelationshipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relationship_number = 'relationship_number_example'; // string | BP Relationship Number
$business_partner1 = 'business_partner1_example'; // string | Business Partner Number
$business_partner2 = 'business_partner2_example'; // string | Business Partner Number
$validity_end_date = 2017-04-13T00:00; // string | Validity Date (Valid To)

try {
    $apiInstance->aBPRelationshipRelationshipNumberRelationshipNumberBusinessPartner1BusinessPartner1BusinessPartner2BusinessPartner2ValidityEndDatedatetimeValidityEndDateDelete($relationship_number, $business_partner1, $business_partner2, $validity_end_date);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerRelationshipApi->aBPRelationshipRelationshipNumberRelationshipNumberBusinessPartner1BusinessPartner1BusinessPartner2BusinessPartner2ValidityEndDatedatetimeValidityEndDateDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **relationship_number** | **string**| BP Relationship Number | |
| **business_partner1** | **string**| Business Partner Number | |
| **business_partner2** | **string**| Business Partner Number | |
| **validity_end_date** | **string**| Validity Date (Valid To) | |

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

## `aBPRelationshipRelationshipNumberRelationshipNumberBusinessPartner1BusinessPartner1BusinessPartner2BusinessPartner2ValidityEndDatedatetimeValidityEndDateGet()`

```php
aBPRelationshipRelationshipNumberRelationshipNumberBusinessPartner1BusinessPartner1BusinessPartner2BusinessPartner2ValidityEndDatedatetimeValidityEndDateGet($relationship_number, $business_partner1, $business_partner2, $validity_end_date, $select): \BeLenka\SAP\BusinessPartner\Model\ABPRelationshipType
```

Retrieves business partner relationship data by using key fields.

Retrieves business partner relationship data by RelationshipNumber, BusinessPartner1, BusinessPartner2 and ValidityEndDate.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerRelationshipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relationship_number = 'relationship_number_example'; // string | BP Relationship Number
$business_partner1 = 'business_partner1_example'; // string | Business Partner Number
$business_partner2 = 'business_partner2_example'; // string | Business Partner Number
$validity_end_date = 2017-04-13T00:00; // string | Validity Date (Valid To)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aBPRelationshipRelationshipNumberRelationshipNumberBusinessPartner1BusinessPartner1BusinessPartner2BusinessPartner2ValidityEndDatedatetimeValidityEndDateGet($relationship_number, $business_partner1, $business_partner2, $validity_end_date, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerRelationshipApi->aBPRelationshipRelationshipNumberRelationshipNumberBusinessPartner1BusinessPartner1BusinessPartner2BusinessPartner2ValidityEndDatedatetimeValidityEndDateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **relationship_number** | **string**| BP Relationship Number | |
| **business_partner1** | **string**| Business Partner Number | |
| **business_partner2** | **string**| Business Partner Number | |
| **validity_end_date** | **string**| Validity Date (Valid To) | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABPRelationshipType**](../Model/ABPRelationshipType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPRelationshipRelationshipNumberRelationshipNumberBusinessPartner1BusinessPartner1BusinessPartner2BusinessPartner2ValidityEndDatedatetimeValidityEndDatePatch()`

```php
aBPRelationshipRelationshipNumberRelationshipNumberBusinessPartner1BusinessPartner1BusinessPartner2BusinessPartner2ValidityEndDatedatetimeValidityEndDatePatch($relationship_number, $business_partner1, $business_partner2, $validity_end_date, $modified_abp_relationship_type)
```

Updates business partner relationship data.

Updates business partner relationship data by RelationshipNumber, BusinessPartner1, BusinessPartner2 and ValidityEndDate

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerRelationshipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relationship_number = 'relationship_number_example'; // string | BP Relationship Number
$business_partner1 = 'business_partner1_example'; // string | Business Partner Number
$business_partner2 = 'business_partner2_example'; // string | Business Partner Number
$validity_end_date = 2017-04-13T00:00; // string | Validity Date (Valid To)
$modified_abp_relationship_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedABPRelationshipType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedABPRelationshipType | New property values

try {
    $apiInstance->aBPRelationshipRelationshipNumberRelationshipNumberBusinessPartner1BusinessPartner1BusinessPartner2BusinessPartner2ValidityEndDatedatetimeValidityEndDatePatch($relationship_number, $business_partner1, $business_partner2, $validity_end_date, $modified_abp_relationship_type);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerRelationshipApi->aBPRelationshipRelationshipNumberRelationshipNumberBusinessPartner1BusinessPartner1BusinessPartner2BusinessPartner2ValidityEndDatedatetimeValidityEndDatePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **relationship_number** | **string**| BP Relationship Number | |
| **business_partner1** | **string**| Business Partner Number | |
| **business_partner2** | **string**| Business Partner Number | |
| **validity_end_date** | **string**| Validity Date (Valid To) | |
| **modified_abp_relationship_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedABPRelationshipType**](../Model/ModifiedABPRelationshipType.md)| New property values | |

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

## `aBusinessPartnerBusinessPartnerToBPRelationshipGet()`

```php
aBusinessPartnerBusinessPartnerToBPRelationshipGet($business_partner, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper19
```

Retrieves business partner relationship data.

Retrieves business partner relationship data fields of all the available records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerRelationshipApi(
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
    $result = $apiInstance->aBusinessPartnerBusinessPartnerToBPRelationshipGet($business_partner, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerRelationshipApi->aBusinessPartnerBusinessPartnerToBPRelationshipGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper19**](../Model/Wrapper19.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerBusinessPartnerToBPRelationshipPost()`

```php
aBusinessPartnerBusinessPartnerToBPRelationshipPost($business_partner, $apibusinesspartnerabp_relationship_type_create): \BeLenka\SAP\BusinessPartner\Model\ABPRelationshipType
```

Add new entity to related to_BPRelationship

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerRelationshipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$apibusinesspartnerabp_relationship_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPRelationshipTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPRelationshipTypeCreate | New entity

try {
    $result = $apiInstance->aBusinessPartnerBusinessPartnerToBPRelationshipPost($business_partner, $apibusinesspartnerabp_relationship_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerRelationshipApi->aBusinessPartnerBusinessPartnerToBPRelationshipPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **apibusinesspartnerabp_relationship_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPRelationshipTypeCreate**](../Model/APIBUSINESSPARTNERABPRelationshipTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABPRelationshipType**](../Model/ABPRelationshipType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
