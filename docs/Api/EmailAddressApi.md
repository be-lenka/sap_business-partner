# BeLenka\SAP\BusinessPartner\EmailAddressApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aAddressEmailAddressAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete()**](EmailAddressApi.md#aAddressEmailAddressAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete) | **DELETE** /A_AddressEmailAddress(AddressID&#x3D;&#39;{AddressID}&#39;,Person&#x3D;&#39;{Person}&#39;,OrdinalNumber&#x3D;&#39;{OrdinalNumber}&#39;) | Deletes email address record by using key fields. |
| [**aAddressEmailAddressAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet()**](EmailAddressApi.md#aAddressEmailAddressAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet) | **GET** /A_AddressEmailAddress(AddressID&#x3D;&#39;{AddressID}&#39;,Person&#x3D;&#39;{Person}&#39;,OrdinalNumber&#x3D;&#39;{OrdinalNumber}&#39;) | Retrieves email address data by using key fields. |
| [**aAddressEmailAddressAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch()**](EmailAddressApi.md#aAddressEmailAddressAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch) | **PATCH** /A_AddressEmailAddress(AddressID&#x3D;&#39;{AddressID}&#39;,Person&#x3D;&#39;{Person}&#39;,OrdinalNumber&#x3D;&#39;{OrdinalNumber}&#39;) | Updates email address record by using key fields. |
| [**aAddressEmailAddressGet()**](EmailAddressApi.md#aAddressEmailAddressGet) | **GET** /A_AddressEmailAddress | Retrieves email address data linked to business partner address fields. |
| [**aAddressEmailAddressPost()**](EmailAddressApi.md#aAddressEmailAddressPost) | **POST** /A_AddressEmailAddress | Creates a new email address data for the existing business partner address. |
| [**aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToEmailAddressGet()**](EmailAddressApi.md#aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToEmailAddressGet) | **GET** /A_BPContactToAddress(RelationshipNumber&#x3D;&#39;{RelationshipNumber}&#39;,BusinessPartnerCompany&#x3D;&#39;{BusinessPartnerCompany}&#39;,BusinessPartnerPerson&#x3D;&#39;{BusinessPartnerPerson}&#39;,ValidityEndDate&#x3D;datetime&#39;{ValidityEndDate}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;)/to_EmailAddress | Retrieves email address data linked to business partner address fields. |
| [**aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToEmailAddressPost()**](EmailAddressApi.md#aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToEmailAddressPost) | **POST** /A_BPContactToAddress(RelationshipNumber&#x3D;&#39;{RelationshipNumber}&#39;,BusinessPartnerCompany&#x3D;&#39;{BusinessPartnerCompany}&#39;,BusinessPartnerPerson&#x3D;&#39;{BusinessPartnerPerson}&#39;,ValidityEndDate&#x3D;datetime&#39;{ValidityEndDate}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;)/to_EmailAddress | Creates a new email address data for the existing business partner address. |
| [**aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToEmailAddressGet()**](EmailAddressApi.md#aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToEmailAddressGet) | **GET** /A_BusinessPartnerAddress(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;)/to_EmailAddress | Retrieves email address data linked to business partner address fields. |
| [**aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToEmailAddressPost()**](EmailAddressApi.md#aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToEmailAddressPost) | **POST** /A_BusinessPartnerAddress(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;)/to_EmailAddress | Creates a new email address data for the existing business partner address. |


## `aAddressEmailAddressAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete()`

```php
aAddressEmailAddressAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete($address_id, $person, $ordinal_number)
```

Deletes email address record by using key fields.

Deletes business partner email address data of the record identified by AddressID, Person, and OrdinalNumber.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\EmailAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_id = 'address_id_example'; // string | Address Number
$person = 'person_example'; // string | Person Number
$ordinal_number = 'ordinal_number_example'; // string | Sequence Number

try {
    $apiInstance->aAddressEmailAddressAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete($address_id, $person, $ordinal_number);
} catch (Exception $e) {
    echo 'Exception when calling EmailAddressApi->aAddressEmailAddressAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete: ', $e->getMessage(), PHP_EOL;
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

## `aAddressEmailAddressAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet()`

```php
aAddressEmailAddressAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet($address_id, $person, $ordinal_number, $select): \BeLenka\SAP\BusinessPartner\Model\AAddressEmailAddressType
```

Retrieves email address data by using key fields.

Retrieves email address data by using AddressID, Person and OrdinalNumber fields.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\EmailAddressApi(
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
    $result = $apiInstance->aAddressEmailAddressAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet($address_id, $person, $ordinal_number, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailAddressApi->aAddressEmailAddressAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\AAddressEmailAddressType**](../Model/AAddressEmailAddressType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aAddressEmailAddressAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch()`

```php
aAddressEmailAddressAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch($address_id, $person, $ordinal_number, $modified_a_address_email_address_type)
```

Updates email address record by using key fields.

Updates business partner email address data of the record identified by AddressID, Person and OrdinalNumber fields.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\EmailAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_id = 'address_id_example'; // string | Address Number
$person = 'person_example'; // string | Person Number
$ordinal_number = 'ordinal_number_example'; // string | Sequence Number
$modified_a_address_email_address_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedAAddressEmailAddressType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedAAddressEmailAddressType | New property values

try {
    $apiInstance->aAddressEmailAddressAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch($address_id, $person, $ordinal_number, $modified_a_address_email_address_type);
} catch (Exception $e) {
    echo 'Exception when calling EmailAddressApi->aAddressEmailAddressAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address_id** | **string**| Address Number | |
| **person** | **string**| Person Number | |
| **ordinal_number** | **string**| Sequence Number | |
| **modified_a_address_email_address_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedAAddressEmailAddressType**](../Model/ModifiedAAddressEmailAddressType.md)| New property values | |

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

## `aAddressEmailAddressGet()`

```php
aAddressEmailAddressGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper
```

Retrieves email address data linked to business partner address fields.

Retrieves all the email address data linked to all business partner address records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\EmailAddressApi(
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
    $result = $apiInstance->aAddressEmailAddressGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailAddressApi->aAddressEmailAddressGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper**](../Model/Wrapper.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aAddressEmailAddressPost()`

```php
aAddressEmailAddressPost($apibusinesspartnera_address_email_address_type_create): \BeLenka\SAP\BusinessPartner\Model\AAddressEmailAddressType
```

Creates a new email address data for the existing business partner address.

Adds a new email address data for the existing business partner address record. Multiple emails can be linked to an address record.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\EmailAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnera_address_email_address_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressEmailAddressTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressEmailAddressTypeCreate | New entity

try {
    $result = $apiInstance->aAddressEmailAddressPost($apibusinesspartnera_address_email_address_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailAddressApi->aAddressEmailAddressPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnera_address_email_address_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressEmailAddressTypeCreate**](../Model/APIBUSINESSPARTNERAAddressEmailAddressTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\AAddressEmailAddressType**](../Model/AAddressEmailAddressType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToEmailAddressGet()`

```php
aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToEmailAddressGet($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $address_id, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper
```

Retrieves email address data linked to business partner address fields.

Retrieves all the email address data linked to all business partner address records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\EmailAddressApi(
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
    $result = $apiInstance->aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToEmailAddressGet($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $address_id, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailAddressApi->aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToEmailAddressGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper**](../Model/Wrapper.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToEmailAddressPost()`

```php
aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToEmailAddressPost($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $address_id, $apibusinesspartnera_address_email_address_type_create): \BeLenka\SAP\BusinessPartner\Model\AAddressEmailAddressType
```

Creates a new email address data for the existing business partner address.

Adds a new email address data for the existing business partner address record. Multiple emails can be linked to an address record.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\EmailAddressApi(
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
$apibusinesspartnera_address_email_address_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressEmailAddressTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressEmailAddressTypeCreate | New entity

try {
    $result = $apiInstance->aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToEmailAddressPost($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $address_id, $apibusinesspartnera_address_email_address_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailAddressApi->aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToEmailAddressPost: ', $e->getMessage(), PHP_EOL;
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
| **apibusinesspartnera_address_email_address_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressEmailAddressTypeCreate**](../Model/APIBUSINESSPARTNERAAddressEmailAddressTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\AAddressEmailAddressType**](../Model/AAddressEmailAddressType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToEmailAddressGet()`

```php
aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToEmailAddressGet($business_partner, $address_id, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper
```

Retrieves email address data linked to business partner address fields.

Retrieves all the email address data linked to all business partner address records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\EmailAddressApi(
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
    $result = $apiInstance->aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToEmailAddressGet($business_partner, $address_id, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailAddressApi->aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToEmailAddressGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper**](../Model/Wrapper.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToEmailAddressPost()`

```php
aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToEmailAddressPost($business_partner, $address_id, $apibusinesspartnera_address_email_address_type_create): \BeLenka\SAP\BusinessPartner\Model\AAddressEmailAddressType
```

Creates a new email address data for the existing business partner address.

Adds a new email address data for the existing business partner address record. Multiple emails can be linked to an address record.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\EmailAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$address_id = 'address_id_example'; // string | Address Number
$apibusinesspartnera_address_email_address_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressEmailAddressTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressEmailAddressTypeCreate | New entity

try {
    $result = $apiInstance->aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToEmailAddressPost($business_partner, $address_id, $apibusinesspartnera_address_email_address_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailAddressApi->aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToEmailAddressPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **address_id** | **string**| Address Number | |
| **apibusinesspartnera_address_email_address_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressEmailAddressTypeCreate**](../Model/APIBUSINESSPARTNERAAddressEmailAddressTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\AAddressEmailAddressType**](../Model/AAddressEmailAddressType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
