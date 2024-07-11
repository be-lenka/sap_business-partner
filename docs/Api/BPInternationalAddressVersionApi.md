# BeLenka\SAP\BusinessPartner\BPInternationalAddressVersionApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aBPIntlAddressVersionBusinessPartnerBusinessPartnerAddressIDAddressIDAddressRepresentationCodeAddressRepresentationCodeDelete()**](BPInternationalAddressVersionApi.md#aBPIntlAddressVersionBusinessPartnerBusinessPartnerAddressIDAddressIDAddressRepresentationCodeAddressRepresentationCodeDelete) | **DELETE** /A_BPIntlAddressVersion(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;,AddressRepresentationCode&#x3D;&#39;{AddressRepresentationCode}&#39;) | Removes the international address version assigned to the business partner by using the key fields. |
| [**aBPIntlAddressVersionBusinessPartnerBusinessPartnerAddressIDAddressIDAddressRepresentationCodeAddressRepresentationCodeGet()**](BPInternationalAddressVersionApi.md#aBPIntlAddressVersionBusinessPartnerBusinessPartnerAddressIDAddressIDAddressRepresentationCodeAddressRepresentationCodeGet) | **GET** /A_BPIntlAddressVersion(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;,AddressRepresentationCode&#x3D;&#39;{AddressRepresentationCode}&#39;) | Retrieves business partner international address versions by key fields. |
| [**aBPIntlAddressVersionBusinessPartnerBusinessPartnerAddressIDAddressIDAddressRepresentationCodeAddressRepresentationCodePatch()**](BPInternationalAddressVersionApi.md#aBPIntlAddressVersionBusinessPartnerBusinessPartnerAddressIDAddressIDAddressRepresentationCodeAddressRepresentationCodePatch) | **PATCH** /A_BPIntlAddressVersion(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;,AddressRepresentationCode&#x3D;&#39;{AddressRepresentationCode}&#39;) | Updates a business partner international address version. |
| [**aBPIntlAddressVersionGet()**](BPInternationalAddressVersionApi.md#aBPIntlAddressVersionGet) | **GET** /A_BPIntlAddressVersion | Retrieves business partner international address versions. |
| [**aBPIntlAddressVersionPost()**](BPInternationalAddressVersionApi.md#aBPIntlAddressVersionPost) | **POST** /A_BPIntlAddressVersion | Creates a new business partner international address version. |
| [**aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToBPIntlAddressVersionGet()**](BPInternationalAddressVersionApi.md#aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToBPIntlAddressVersionGet) | **GET** /A_BusinessPartnerAddress(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;)/to_BPIntlAddressVersion | Get entities from related to_BPIntlAddressVersion |
| [**aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToBPIntlAddressVersionPost()**](BPInternationalAddressVersionApi.md#aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToBPIntlAddressVersionPost) | **POST** /A_BusinessPartnerAddress(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;)/to_BPIntlAddressVersion | Add new entity to related to_BPIntlAddressVersion |


## `aBPIntlAddressVersionBusinessPartnerBusinessPartnerAddressIDAddressIDAddressRepresentationCodeAddressRepresentationCodeDelete()`

```php
aBPIntlAddressVersionBusinessPartnerBusinessPartnerAddressIDAddressIDAddressRepresentationCodeAddressRepresentationCodeDelete($business_partner, $address_id, $address_representation_code)
```

Removes the international address version assigned to the business partner by using the key fields.

Deletes a business partner international address version by BusinessPartner, AddressID and AddressRepresentationCode.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BPInternationalAddressVersionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$address_id = 'address_id_example'; // string | Address Number
$address_representation_code = 'address_representation_code_example'; // string | Version ID for International Addresses

try {
    $apiInstance->aBPIntlAddressVersionBusinessPartnerBusinessPartnerAddressIDAddressIDAddressRepresentationCodeAddressRepresentationCodeDelete($business_partner, $address_id, $address_representation_code);
} catch (Exception $e) {
    echo 'Exception when calling BPInternationalAddressVersionApi->aBPIntlAddressVersionBusinessPartnerBusinessPartnerAddressIDAddressIDAddressRepresentationCodeAddressRepresentationCodeDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **address_id** | **string**| Address Number | |
| **address_representation_code** | **string**| Version ID for International Addresses | |

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

## `aBPIntlAddressVersionBusinessPartnerBusinessPartnerAddressIDAddressIDAddressRepresentationCodeAddressRepresentationCodeGet()`

```php
aBPIntlAddressVersionBusinessPartnerBusinessPartnerAddressIDAddressIDAddressRepresentationCodeAddressRepresentationCodeGet($business_partner, $address_id, $address_representation_code, $select): \BeLenka\SAP\BusinessPartner\Model\ABPIntlAddressVersionType
```

Retrieves business partner international address versions by key fields.

Retrieves a business partner international address version by BusinessPartner, AddressID and AddressRepresentationCode.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BPInternationalAddressVersionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$address_id = 'address_id_example'; // string | Address Number
$address_representation_code = 'address_representation_code_example'; // string | Version ID for International Addresses
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aBPIntlAddressVersionBusinessPartnerBusinessPartnerAddressIDAddressIDAddressRepresentationCodeAddressRepresentationCodeGet($business_partner, $address_id, $address_representation_code, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BPInternationalAddressVersionApi->aBPIntlAddressVersionBusinessPartnerBusinessPartnerAddressIDAddressIDAddressRepresentationCodeAddressRepresentationCodeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **address_id** | **string**| Address Number | |
| **address_representation_code** | **string**| Version ID for International Addresses | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABPIntlAddressVersionType**](../Model/ABPIntlAddressVersionType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPIntlAddressVersionBusinessPartnerBusinessPartnerAddressIDAddressIDAddressRepresentationCodeAddressRepresentationCodePatch()`

```php
aBPIntlAddressVersionBusinessPartnerBusinessPartnerAddressIDAddressIDAddressRepresentationCodeAddressRepresentationCodePatch($business_partner, $address_id, $address_representation_code, $modified_abp_intl_address_version_type)
```

Updates a business partner international address version.

Updates a business partner international address version by BusinessPartner, AddressID and AddressRepresentationCode.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BPInternationalAddressVersionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$address_id = 'address_id_example'; // string | Address Number
$address_representation_code = 'address_representation_code_example'; // string | Version ID for International Addresses
$modified_abp_intl_address_version_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedABPIntlAddressVersionType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedABPIntlAddressVersionType | New property values

try {
    $apiInstance->aBPIntlAddressVersionBusinessPartnerBusinessPartnerAddressIDAddressIDAddressRepresentationCodeAddressRepresentationCodePatch($business_partner, $address_id, $address_representation_code, $modified_abp_intl_address_version_type);
} catch (Exception $e) {
    echo 'Exception when calling BPInternationalAddressVersionApi->aBPIntlAddressVersionBusinessPartnerBusinessPartnerAddressIDAddressIDAddressRepresentationCodeAddressRepresentationCodePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **address_id** | **string**| Address Number | |
| **address_representation_code** | **string**| Version ID for International Addresses | |
| **modified_abp_intl_address_version_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedABPIntlAddressVersionType**](../Model/ModifiedABPIntlAddressVersionType.md)| New property values | |

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

## `aBPIntlAddressVersionGet()`

```php
aBPIntlAddressVersionGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper18
```

Retrieves business partner international address versions.

Retrieves business partner international address versions of all the available records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BPInternationalAddressVersionApi(
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
    $result = $apiInstance->aBPIntlAddressVersionGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BPInternationalAddressVersionApi->aBPIntlAddressVersionGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper18**](../Model/Wrapper18.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPIntlAddressVersionPost()`

```php
aBPIntlAddressVersionPost($apibusinesspartnerabp_intl_address_version_type_create): \BeLenka\SAP\BusinessPartner\Model\ABPIntlAddressVersionType
```

Creates a new business partner international address version.

Creates a new international address version for an existing business partner.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BPInternationalAddressVersionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnerabp_intl_address_version_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPIntlAddressVersionTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPIntlAddressVersionTypeCreate | New entity

try {
    $result = $apiInstance->aBPIntlAddressVersionPost($apibusinesspartnerabp_intl_address_version_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BPInternationalAddressVersionApi->aBPIntlAddressVersionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnerabp_intl_address_version_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPIntlAddressVersionTypeCreate**](../Model/APIBUSINESSPARTNERABPIntlAddressVersionTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABPIntlAddressVersionType**](../Model/ABPIntlAddressVersionType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToBPIntlAddressVersionGet()`

```php
aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToBPIntlAddressVersionGet($business_partner, $address_id, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper18
```

Get entities from related to_BPIntlAddressVersion

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BPInternationalAddressVersionApi(
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
    $result = $apiInstance->aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToBPIntlAddressVersionGet($business_partner, $address_id, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BPInternationalAddressVersionApi->aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToBPIntlAddressVersionGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper18**](../Model/Wrapper18.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToBPIntlAddressVersionPost()`

```php
aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToBPIntlAddressVersionPost($business_partner, $address_id, $apibusinesspartnerabp_intl_address_version_type_create): \BeLenka\SAP\BusinessPartner\Model\ABPIntlAddressVersionType
```

Add new entity to related to_BPIntlAddressVersion

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BPInternationalAddressVersionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$address_id = 'address_id_example'; // string | Address Number
$apibusinesspartnerabp_intl_address_version_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPIntlAddressVersionTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPIntlAddressVersionTypeCreate | New entity

try {
    $result = $apiInstance->aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToBPIntlAddressVersionPost($business_partner, $address_id, $apibusinesspartnerabp_intl_address_version_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BPInternationalAddressVersionApi->aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToBPIntlAddressVersionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **address_id** | **string**| Address Number | |
| **apibusinesspartnerabp_intl_address_version_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPIntlAddressVersionTypeCreate**](../Model/APIBUSINESSPARTNERABPIntlAddressVersionTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABPIntlAddressVersionType**](../Model/ABPIntlAddressVersionType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
