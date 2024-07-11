# BeLenka\SAP\BusinessPartner\RatingsApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aBusinessPartnerBusinessPartnerToBusinessPartnerRatingGet()**](RatingsApi.md#aBusinessPartnerBusinessPartnerToBusinessPartnerRatingGet) | **GET** /A_BusinessPartner(&#39;{BusinessPartner}&#39;)/to_BusinessPartnerRating | Retrieves business partner ratings. |
| [**aBusinessPartnerBusinessPartnerToBusinessPartnerRatingPost()**](RatingsApi.md#aBusinessPartnerBusinessPartnerToBusinessPartnerRatingPost) | **POST** /A_BusinessPartner(&#39;{BusinessPartner}&#39;)/to_BusinessPartnerRating | Creates business partner ratings. |
| [**aBusinessPartnerRatingBusinessPartnerBusinessPartnerBusinessPartnerRatingProcedureBusinessPartnerRatingProcedureBPRatingValidityEndDatedatetimeBPRatingValidityEndDateDelete()**](RatingsApi.md#aBusinessPartnerRatingBusinessPartnerBusinessPartnerBusinessPartnerRatingProcedureBusinessPartnerRatingProcedureBPRatingValidityEndDatedatetimeBPRatingValidityEndDateDelete) | **DELETE** /A_BusinessPartnerRating(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,BusinessPartnerRatingProcedure&#x3D;&#39;{BusinessPartnerRatingProcedure}&#39;,BPRatingValidityEndDate&#x3D;datetime&#39;{BPRatingValidityEndDate}&#39;) | Deletes a business partner rating. |
| [**aBusinessPartnerRatingBusinessPartnerBusinessPartnerBusinessPartnerRatingProcedureBusinessPartnerRatingProcedureBPRatingValidityEndDatedatetimeBPRatingValidityEndDateGet()**](RatingsApi.md#aBusinessPartnerRatingBusinessPartnerBusinessPartnerBusinessPartnerRatingProcedureBusinessPartnerRatingProcedureBPRatingValidityEndDatedatetimeBPRatingValidityEndDateGet) | **GET** /A_BusinessPartnerRating(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,BusinessPartnerRatingProcedure&#x3D;&#39;{BusinessPartnerRatingProcedure}&#39;,BPRatingValidityEndDate&#x3D;datetime&#39;{BPRatingValidityEndDate}&#39;) | Retrieves business partner ratings. |
| [**aBusinessPartnerRatingBusinessPartnerBusinessPartnerBusinessPartnerRatingProcedureBusinessPartnerRatingProcedureBPRatingValidityEndDatedatetimeBPRatingValidityEndDatePatch()**](RatingsApi.md#aBusinessPartnerRatingBusinessPartnerBusinessPartnerBusinessPartnerRatingProcedureBusinessPartnerRatingProcedureBPRatingValidityEndDatedatetimeBPRatingValidityEndDatePatch) | **PATCH** /A_BusinessPartnerRating(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,BusinessPartnerRatingProcedure&#x3D;&#39;{BusinessPartnerRatingProcedure}&#39;,BPRatingValidityEndDate&#x3D;datetime&#39;{BPRatingValidityEndDate}&#39;) | Updates a business partner rating. |
| [**aBusinessPartnerRatingGet()**](RatingsApi.md#aBusinessPartnerRatingGet) | **GET** /A_BusinessPartnerRating | Retrieves business partner ratings. |
| [**aBusinessPartnerRatingPost()**](RatingsApi.md#aBusinessPartnerRatingPost) | **POST** /A_BusinessPartnerRating | Creates business partner ratings. |


## `aBusinessPartnerBusinessPartnerToBusinessPartnerRatingGet()`

```php
aBusinessPartnerBusinessPartnerToBusinessPartnerRatingGet($business_partner, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper28
```

Retrieves business partner ratings.

Retrieves business partner ratings of all the available records linked to business partners in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\RatingsApi(
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
    $result = $apiInstance->aBusinessPartnerBusinessPartnerToBusinessPartnerRatingGet($business_partner, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatingsApi->aBusinessPartnerBusinessPartnerToBusinessPartnerRatingGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper28**](../Model/Wrapper28.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerBusinessPartnerToBusinessPartnerRatingPost()`

```php
aBusinessPartnerBusinessPartnerToBusinessPartnerRatingPost($business_partner, $apibusinesspartnera_business_partner_rating_type_create): \BeLenka\SAP\BusinessPartner\Model\ABusinessPartnerRatingType
```

Creates business partner ratings.

Creates business partner ratings linked to an existing business partner.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\RatingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$apibusinesspartnera_business_partner_rating_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABusinessPartnerRatingTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABusinessPartnerRatingTypeCreate | New entity

try {
    $result = $apiInstance->aBusinessPartnerBusinessPartnerToBusinessPartnerRatingPost($business_partner, $apibusinesspartnera_business_partner_rating_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatingsApi->aBusinessPartnerBusinessPartnerToBusinessPartnerRatingPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **apibusinesspartnera_business_partner_rating_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABusinessPartnerRatingTypeCreate**](../Model/APIBUSINESSPARTNERABusinessPartnerRatingTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABusinessPartnerRatingType**](../Model/ABusinessPartnerRatingType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerRatingBusinessPartnerBusinessPartnerBusinessPartnerRatingProcedureBusinessPartnerRatingProcedureBPRatingValidityEndDatedatetimeBPRatingValidityEndDateDelete()`

```php
aBusinessPartnerRatingBusinessPartnerBusinessPartnerBusinessPartnerRatingProcedureBusinessPartnerRatingProcedureBPRatingValidityEndDatedatetimeBPRatingValidityEndDateDelete($business_partner, $business_partner_rating_procedure, $bp_rating_validity_end_date)
```

Deletes a business partner rating.

Deletes a business partner rating identified by business partner number, rating procedure and validity end date.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\RatingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$business_partner_rating_procedure = 'business_partner_rating_procedure_example'; // string | Rating Procedure
$bp_rating_validity_end_date = 2017-04-13T00:00; // string | Valid-to Date for Rating

try {
    $apiInstance->aBusinessPartnerRatingBusinessPartnerBusinessPartnerBusinessPartnerRatingProcedureBusinessPartnerRatingProcedureBPRatingValidityEndDatedatetimeBPRatingValidityEndDateDelete($business_partner, $business_partner_rating_procedure, $bp_rating_validity_end_date);
} catch (Exception $e) {
    echo 'Exception when calling RatingsApi->aBusinessPartnerRatingBusinessPartnerBusinessPartnerBusinessPartnerRatingProcedureBusinessPartnerRatingProcedureBPRatingValidityEndDatedatetimeBPRatingValidityEndDateDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **business_partner_rating_procedure** | **string**| Rating Procedure | |
| **bp_rating_validity_end_date** | **string**| Valid-to Date for Rating | |

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

## `aBusinessPartnerRatingBusinessPartnerBusinessPartnerBusinessPartnerRatingProcedureBusinessPartnerRatingProcedureBPRatingValidityEndDatedatetimeBPRatingValidityEndDateGet()`

```php
aBusinessPartnerRatingBusinessPartnerBusinessPartnerBusinessPartnerRatingProcedureBusinessPartnerRatingProcedureBPRatingValidityEndDatedatetimeBPRatingValidityEndDateGet($business_partner, $business_partner_rating_procedure, $bp_rating_validity_end_date, $select): \BeLenka\SAP\BusinessPartner\Model\ABusinessPartnerRatingType
```

Retrieves business partner ratings.

Retrieves business partner ratings of all the available records linked to business partners in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\RatingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$business_partner_rating_procedure = 'business_partner_rating_procedure_example'; // string | Rating Procedure
$bp_rating_validity_end_date = 2017-04-13T00:00; // string | Valid-to Date for Rating
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aBusinessPartnerRatingBusinessPartnerBusinessPartnerBusinessPartnerRatingProcedureBusinessPartnerRatingProcedureBPRatingValidityEndDatedatetimeBPRatingValidityEndDateGet($business_partner, $business_partner_rating_procedure, $bp_rating_validity_end_date, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatingsApi->aBusinessPartnerRatingBusinessPartnerBusinessPartnerBusinessPartnerRatingProcedureBusinessPartnerRatingProcedureBPRatingValidityEndDatedatetimeBPRatingValidityEndDateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **business_partner_rating_procedure** | **string**| Rating Procedure | |
| **bp_rating_validity_end_date** | **string**| Valid-to Date for Rating | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABusinessPartnerRatingType**](../Model/ABusinessPartnerRatingType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerRatingBusinessPartnerBusinessPartnerBusinessPartnerRatingProcedureBusinessPartnerRatingProcedureBPRatingValidityEndDatedatetimeBPRatingValidityEndDatePatch()`

```php
aBusinessPartnerRatingBusinessPartnerBusinessPartnerBusinessPartnerRatingProcedureBusinessPartnerRatingProcedureBPRatingValidityEndDatedatetimeBPRatingValidityEndDatePatch($business_partner, $business_partner_rating_procedure, $bp_rating_validity_end_date, $modified_a_business_partner_rating_type)
```

Updates a business partner rating.

Updates a business partner rating identified by business partner number, rating procedure and validity end date.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\RatingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$business_partner_rating_procedure = 'business_partner_rating_procedure_example'; // string | Rating Procedure
$bp_rating_validity_end_date = 2017-04-13T00:00; // string | Valid-to Date for Rating
$modified_a_business_partner_rating_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedABusinessPartnerRatingType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedABusinessPartnerRatingType | New property values

try {
    $apiInstance->aBusinessPartnerRatingBusinessPartnerBusinessPartnerBusinessPartnerRatingProcedureBusinessPartnerRatingProcedureBPRatingValidityEndDatedatetimeBPRatingValidityEndDatePatch($business_partner, $business_partner_rating_procedure, $bp_rating_validity_end_date, $modified_a_business_partner_rating_type);
} catch (Exception $e) {
    echo 'Exception when calling RatingsApi->aBusinessPartnerRatingBusinessPartnerBusinessPartnerBusinessPartnerRatingProcedureBusinessPartnerRatingProcedureBPRatingValidityEndDatedatetimeBPRatingValidityEndDatePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **business_partner_rating_procedure** | **string**| Rating Procedure | |
| **bp_rating_validity_end_date** | **string**| Valid-to Date for Rating | |
| **modified_a_business_partner_rating_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedABusinessPartnerRatingType**](../Model/ModifiedABusinessPartnerRatingType.md)| New property values | |

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

## `aBusinessPartnerRatingGet()`

```php
aBusinessPartnerRatingGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper28
```

Retrieves business partner ratings.

Retrieves business partner ratings of all the available records linked to business partners in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\RatingsApi(
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
    $result = $apiInstance->aBusinessPartnerRatingGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatingsApi->aBusinessPartnerRatingGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper28**](../Model/Wrapper28.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerRatingPost()`

```php
aBusinessPartnerRatingPost($apibusinesspartnera_business_partner_rating_type_create): \BeLenka\SAP\BusinessPartner\Model\ABusinessPartnerRatingType
```

Creates business partner ratings.

Creates business partner ratings linked to an existing business partner.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\RatingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnera_business_partner_rating_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABusinessPartnerRatingTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABusinessPartnerRatingTypeCreate | New entity

try {
    $result = $apiInstance->aBusinessPartnerRatingPost($apibusinesspartnera_business_partner_rating_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatingsApi->aBusinessPartnerRatingPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnera_business_partner_rating_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABusinessPartnerRatingTypeCreate**](../Model/APIBUSINESSPARTNERABusinessPartnerRatingTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABusinessPartnerRatingType**](../Model/ABusinessPartnerRatingType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
