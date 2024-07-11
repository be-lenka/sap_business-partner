# BeLenka\SAP\BusinessPartner\FaxNumberApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aAddressFaxNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete()**](FaxNumberApi.md#aAddressFaxNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete) | **DELETE** /A_AddressFaxNumber(AddressID&#x3D;&#39;{AddressID}&#39;,Person&#x3D;&#39;{Person}&#39;,OrdinalNumber&#x3D;&#39;{OrdinalNumber}&#39;) | Deletes fax address record by key field. |
| [**aAddressFaxNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet()**](FaxNumberApi.md#aAddressFaxNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet) | **GET** /A_AddressFaxNumber(AddressID&#x3D;&#39;{AddressID}&#39;,Person&#x3D;&#39;{Person}&#39;,OrdinalNumber&#x3D;&#39;{OrdinalNumber}&#39;) | Retrieves fax address records by key fields. |
| [**aAddressFaxNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch()**](FaxNumberApi.md#aAddressFaxNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch) | **PATCH** /A_AddressFaxNumber(AddressID&#x3D;&#39;{AddressID}&#39;,Person&#x3D;&#39;{Person}&#39;,OrdinalNumber&#x3D;&#39;{OrdinalNumber}&#39;) | Updates fax address record by key field. |
| [**aAddressFaxNumberGet()**](FaxNumberApi.md#aAddressFaxNumberGet) | **GET** /A_AddressFaxNumber | Retrieves fax address data linked to business partner address. |
| [**aAddressFaxNumberPost()**](FaxNumberApi.md#aAddressFaxNumberPost) | **POST** /A_AddressFaxNumber | Creates a new fax address data for the existing business partner address. |
| [**aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToFaxNumberGet()**](FaxNumberApi.md#aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToFaxNumberGet) | **GET** /A_BPContactToAddress(RelationshipNumber&#x3D;&#39;{RelationshipNumber}&#39;,BusinessPartnerCompany&#x3D;&#39;{BusinessPartnerCompany}&#39;,BusinessPartnerPerson&#x3D;&#39;{BusinessPartnerPerson}&#39;,ValidityEndDate&#x3D;datetime&#39;{ValidityEndDate}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;)/to_FaxNumber | Retrieves fax address data linked to business partner address. |
| [**aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToFaxNumberPost()**](FaxNumberApi.md#aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToFaxNumberPost) | **POST** /A_BPContactToAddress(RelationshipNumber&#x3D;&#39;{RelationshipNumber}&#39;,BusinessPartnerCompany&#x3D;&#39;{BusinessPartnerCompany}&#39;,BusinessPartnerPerson&#x3D;&#39;{BusinessPartnerPerson}&#39;,ValidityEndDate&#x3D;datetime&#39;{ValidityEndDate}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;)/to_FaxNumber | Creates a new fax address data for the existing business partner address. |
| [**aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToFaxNumberGet()**](FaxNumberApi.md#aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToFaxNumberGet) | **GET** /A_BusinessPartnerAddress(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;)/to_FaxNumber | Retrieves fax address data linked to business partner address. |
| [**aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToFaxNumberPost()**](FaxNumberApi.md#aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToFaxNumberPost) | **POST** /A_BusinessPartnerAddress(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;)/to_FaxNumber | Creates a new fax address data for the existing business partner address. |


## `aAddressFaxNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete()`

```php
aAddressFaxNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete($address_id, $person, $ordinal_number)
```

Deletes fax address record by key field.

Deletes business partner fax address data of the record identified by AddressID, Person and OrdinalNumber.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\FaxNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_id = 'address_id_example'; // string | Address Number
$person = 'person_example'; // string | Person Number
$ordinal_number = 'ordinal_number_example'; // string | Sequence Number

try {
    $apiInstance->aAddressFaxNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete($address_id, $person, $ordinal_number);
} catch (Exception $e) {
    echo 'Exception when calling FaxNumberApi->aAddressFaxNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address_id** | **string**| Address Number | |
| **person** | **string**| Person Number | |
| **ordinal_number** | **string**| Sequence Number | |

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

## `aAddressFaxNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet()`

```php
aAddressFaxNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet($address_id, $person, $ordinal_number, $select): \BeLenka\SAP\BusinessPartner\Model\AAddressFaxNumberType
```

Retrieves fax address records by key fields.

Retrieves fax address records by AddressID, Person, and OrdinalNumber field.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\FaxNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_id = 'address_id_example'; // string | Address Number
$person = 'person_example'; // string | Person Number
$ordinal_number = 'ordinal_number_example'; // string | Sequence Number
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aAddressFaxNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet($address_id, $person, $ordinal_number, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaxNumberApi->aAddressFaxNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address_id** | **string**| Address Number | |
| **person** | **string**| Person Number | |
| **ordinal_number** | **string**| Sequence Number | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\AAddressFaxNumberType**](../Model/AAddressFaxNumberType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aAddressFaxNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch()`

```php
aAddressFaxNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch($address_id, $person, $ordinal_number, $modified_a_address_fax_number_type)
```

Updates fax address record by key field.

Updates business partner fax address data of the record identified by AddressID, Person, and OrdinalNumber.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\FaxNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_id = 'address_id_example'; // string | Address Number
$person = 'person_example'; // string | Person Number
$ordinal_number = 'ordinal_number_example'; // string | Sequence Number
$modified_a_address_fax_number_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedAAddressFaxNumberType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedAAddressFaxNumberType | New property values

try {
    $apiInstance->aAddressFaxNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch($address_id, $person, $ordinal_number, $modified_a_address_fax_number_type);
} catch (Exception $e) {
    echo 'Exception when calling FaxNumberApi->aAddressFaxNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address_id** | **string**| Address Number | |
| **person** | **string**| Person Number | |
| **ordinal_number** | **string**| Sequence Number | |
| **modified_a_address_fax_number_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedAAddressFaxNumberType**](../Model/ModifiedAAddressFaxNumberType.md)| New property values | |

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

## `aAddressFaxNumberGet()`

```php
aAddressFaxNumberGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper1
```

Retrieves fax address data linked to business partner address.

Retrieves all the fax address data linked to all the business partner address records in the system

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\FaxNumberApi(
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
    $result = $apiInstance->aAddressFaxNumberGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaxNumberApi->aAddressFaxNumberGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper1**](../Model/Wrapper1.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aAddressFaxNumberPost()`

```php
aAddressFaxNumberPost($apibusinesspartnera_address_fax_number_type_create): \BeLenka\SAP\BusinessPartner\Model\AAddressFaxNumberType
```

Creates a new fax address data for the existing business partner address.

Adds a new fax address record for the existing business partner address record. Multiple fax can be linked to an address record.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\FaxNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnera_address_fax_number_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressFaxNumberTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressFaxNumberTypeCreate | New entity

try {
    $result = $apiInstance->aAddressFaxNumberPost($apibusinesspartnera_address_fax_number_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaxNumberApi->aAddressFaxNumberPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnera_address_fax_number_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressFaxNumberTypeCreate**](../Model/APIBUSINESSPARTNERAAddressFaxNumberTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\AAddressFaxNumberType**](../Model/AAddressFaxNumberType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToFaxNumberGet()`

```php
aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToFaxNumberGet($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $address_id, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper1
```

Retrieves fax address data linked to business partner address.

Retrieves all the fax address data linked to all the business partner address records in the system

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\FaxNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relationship_number = 'relationship_number_example'; // string | BP Relationship Number
$business_partner_company = 'business_partner_company_example'; // string | Business Partner Number
$business_partner_person = 'business_partner_person_example'; // string | Business Partner Number
$validity_end_date = 2017-04-13T00:00; // string | Validity Date (Valid To)
$address_id = 'address_id_example'; // string | Address Number
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToFaxNumberGet($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $address_id, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaxNumberApi->aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToFaxNumberGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **relationship_number** | **string**| BP Relationship Number | |
| **business_partner_company** | **string**| Business Partner Number | |
| **business_partner_person** | **string**| Business Partner Number | |
| **validity_end_date** | **string**| Validity Date (Valid To) | |
| **address_id** | **string**| Address Number | |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper1**](../Model/Wrapper1.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToFaxNumberPost()`

```php
aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToFaxNumberPost($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $address_id, $apibusinesspartnera_address_fax_number_type_create): \BeLenka\SAP\BusinessPartner\Model\AAddressFaxNumberType
```

Creates a new fax address data for the existing business partner address.

Adds a new fax address record for the existing business partner address record. Multiple fax can be linked to an address record.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\FaxNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relationship_number = 'relationship_number_example'; // string | BP Relationship Number
$business_partner_company = 'business_partner_company_example'; // string | Business Partner Number
$business_partner_person = 'business_partner_person_example'; // string | Business Partner Number
$validity_end_date = 2017-04-13T00:00; // string | Validity Date (Valid To)
$address_id = 'address_id_example'; // string | Address Number
$apibusinesspartnera_address_fax_number_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressFaxNumberTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressFaxNumberTypeCreate | New entity

try {
    $result = $apiInstance->aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToFaxNumberPost($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $address_id, $apibusinesspartnera_address_fax_number_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaxNumberApi->aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToFaxNumberPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **relationship_number** | **string**| BP Relationship Number | |
| **business_partner_company** | **string**| Business Partner Number | |
| **business_partner_person** | **string**| Business Partner Number | |
| **validity_end_date** | **string**| Validity Date (Valid To) | |
| **address_id** | **string**| Address Number | |
| **apibusinesspartnera_address_fax_number_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressFaxNumberTypeCreate**](../Model/APIBUSINESSPARTNERAAddressFaxNumberTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\AAddressFaxNumberType**](../Model/AAddressFaxNumberType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToFaxNumberGet()`

```php
aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToFaxNumberGet($business_partner, $address_id, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper1
```

Retrieves fax address data linked to business partner address.

Retrieves all the fax address data linked to all the business partner address records in the system

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\FaxNumberApi(
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
    $result = $apiInstance->aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToFaxNumberGet($business_partner, $address_id, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaxNumberApi->aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToFaxNumberGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper1**](../Model/Wrapper1.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToFaxNumberPost()`

```php
aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToFaxNumberPost($business_partner, $address_id, $apibusinesspartnera_address_fax_number_type_create): \BeLenka\SAP\BusinessPartner\Model\AAddressFaxNumberType
```

Creates a new fax address data for the existing business partner address.

Adds a new fax address record for the existing business partner address record. Multiple fax can be linked to an address record.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\FaxNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$address_id = 'address_id_example'; // string | Address Number
$apibusinesspartnera_address_fax_number_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressFaxNumberTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressFaxNumberTypeCreate | New entity

try {
    $result = $apiInstance->aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToFaxNumberPost($business_partner, $address_id, $apibusinesspartnera_address_fax_number_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaxNumberApi->aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToFaxNumberPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **address_id** | **string**| Address Number | |
| **apibusinesspartnera_address_fax_number_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressFaxNumberTypeCreate**](../Model/APIBUSINESSPARTNERAAddressFaxNumberTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\AAddressFaxNumberType**](../Model/AAddressFaxNumberType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
