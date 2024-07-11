# BeLenka\SAP\BusinessPartner\PhoneNumberApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aAddressPhoneNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete()**](PhoneNumberApi.md#aAddressPhoneNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete) | **DELETE** /A_AddressPhoneNumber(AddressID&#x3D;&#39;{AddressID}&#39;,Person&#x3D;&#39;{Person}&#39;,OrdinalNumber&#x3D;&#39;{OrdinalNumber}&#39;) | Deletes mobile/telephone address records by key fields. |
| [**aAddressPhoneNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet()**](PhoneNumberApi.md#aAddressPhoneNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet) | **GET** /A_AddressPhoneNumber(AddressID&#x3D;&#39;{AddressID}&#39;,Person&#x3D;&#39;{Person}&#39;,OrdinalNumber&#x3D;&#39;{OrdinalNumber}&#39;) | Retrieves mobile/telephone address record by key fields. |
| [**aAddressPhoneNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch()**](PhoneNumberApi.md#aAddressPhoneNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch) | **PATCH** /A_AddressPhoneNumber(AddressID&#x3D;&#39;{AddressID}&#39;,Person&#x3D;&#39;{Person}&#39;,OrdinalNumber&#x3D;&#39;{OrdinalNumber}&#39;) | Updates mobile/telephone address records by key fields. |
| [**aAddressPhoneNumberGet()**](PhoneNumberApi.md#aAddressPhoneNumberGet) | **GET** /A_AddressPhoneNumber | Retrieves mobile/telephone address records linked to business partner address. |
| [**aAddressPhoneNumberPost()**](PhoneNumberApi.md#aAddressPhoneNumberPost) | **POST** /A_AddressPhoneNumber | Creates a new  mobile/telephone address record for the existing business partner address. |
| [**aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToMobilePhoneNumberGet()**](PhoneNumberApi.md#aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToMobilePhoneNumberGet) | **GET** /A_BPContactToAddress(RelationshipNumber&#x3D;&#39;{RelationshipNumber}&#39;,BusinessPartnerCompany&#x3D;&#39;{BusinessPartnerCompany}&#39;,BusinessPartnerPerson&#x3D;&#39;{BusinessPartnerPerson}&#39;,ValidityEndDate&#x3D;datetime&#39;{ValidityEndDate}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;)/to_MobilePhoneNumber | Retrieves mobile/telephone address records linked to business partner address. |
| [**aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToMobilePhoneNumberPost()**](PhoneNumberApi.md#aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToMobilePhoneNumberPost) | **POST** /A_BPContactToAddress(RelationshipNumber&#x3D;&#39;{RelationshipNumber}&#39;,BusinessPartnerCompany&#x3D;&#39;{BusinessPartnerCompany}&#39;,BusinessPartnerPerson&#x3D;&#39;{BusinessPartnerPerson}&#39;,ValidityEndDate&#x3D;datetime&#39;{ValidityEndDate}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;)/to_MobilePhoneNumber | Creates a new  mobile/telephone address record for the existing business partner address. |
| [**aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToPhoneNumberGet()**](PhoneNumberApi.md#aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToPhoneNumberGet) | **GET** /A_BPContactToAddress(RelationshipNumber&#x3D;&#39;{RelationshipNumber}&#39;,BusinessPartnerCompany&#x3D;&#39;{BusinessPartnerCompany}&#39;,BusinessPartnerPerson&#x3D;&#39;{BusinessPartnerPerson}&#39;,ValidityEndDate&#x3D;datetime&#39;{ValidityEndDate}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;)/to_PhoneNumber | Retrieves mobile/telephone address records linked to business partner address. |
| [**aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToPhoneNumberPost()**](PhoneNumberApi.md#aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToPhoneNumberPost) | **POST** /A_BPContactToAddress(RelationshipNumber&#x3D;&#39;{RelationshipNumber}&#39;,BusinessPartnerCompany&#x3D;&#39;{BusinessPartnerCompany}&#39;,BusinessPartnerPerson&#x3D;&#39;{BusinessPartnerPerson}&#39;,ValidityEndDate&#x3D;datetime&#39;{ValidityEndDate}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;)/to_PhoneNumber | Creates a new  mobile/telephone address record for the existing business partner address. |
| [**aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToMobilePhoneNumberGet()**](PhoneNumberApi.md#aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToMobilePhoneNumberGet) | **GET** /A_BusinessPartnerAddress(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;)/to_MobilePhoneNumber | Retrieves mobile/telephone address records linked to business partner address. |
| [**aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToMobilePhoneNumberPost()**](PhoneNumberApi.md#aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToMobilePhoneNumberPost) | **POST** /A_BusinessPartnerAddress(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;)/to_MobilePhoneNumber | Creates a new  mobile/telephone address record for the existing business partner address. |
| [**aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToPhoneNumberGet()**](PhoneNumberApi.md#aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToPhoneNumberGet) | **GET** /A_BusinessPartnerAddress(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;)/to_PhoneNumber | Retrieves mobile/telephone address records linked to business partner address. |
| [**aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToPhoneNumberPost()**](PhoneNumberApi.md#aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToPhoneNumberPost) | **POST** /A_BusinessPartnerAddress(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;)/to_PhoneNumber | Creates a new  mobile/telephone address record for the existing business partner address. |


## `aAddressPhoneNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete()`

```php
aAddressPhoneNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete($address_id, $person, $ordinal_number)
```

Deletes mobile/telephone address records by key fields.

Delete business partner mobile/telephone address data of the record identified by AddressID, Person, and OrdinalNumber fields.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PhoneNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_id = 'address_id_example'; // string | Address Number
$person = 'person_example'; // string | Person Number
$ordinal_number = 'ordinal_number_example'; // string | Sequence Number

try {
    $apiInstance->aAddressPhoneNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete($address_id, $person, $ordinal_number);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumberApi->aAddressPhoneNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberDelete: ', $e->getMessage(), PHP_EOL;
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

## `aAddressPhoneNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet()`

```php
aAddressPhoneNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet($address_id, $person, $ordinal_number, $select): \BeLenka\SAP\BusinessPartner\Model\AAddressPhoneNumberType
```

Retrieves mobile/telephone address record by key fields.

Retreives mobile/telephone address record by AddressID, Person and OrdinalNumber.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PhoneNumberApi(
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
    $result = $apiInstance->aAddressPhoneNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet($address_id, $person, $ordinal_number, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumberApi->aAddressPhoneNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\AAddressPhoneNumberType**](../Model/AAddressPhoneNumberType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aAddressPhoneNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch()`

```php
aAddressPhoneNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch($address_id, $person, $ordinal_number, $modified_a_address_phone_number_type)
```

Updates mobile/telephone address records by key fields.

Updates business partner mobile/telephone address data of the record identified by AddressID, Person, and OrdinalNumber.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PhoneNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_id = 'address_id_example'; // string | Address Number
$person = 'person_example'; // string | Person Number
$ordinal_number = 'ordinal_number_example'; // string | Sequence Number
$modified_a_address_phone_number_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedAAddressPhoneNumberType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedAAddressPhoneNumberType | New property values

try {
    $apiInstance->aAddressPhoneNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch($address_id, $person, $ordinal_number, $modified_a_address_phone_number_type);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumberApi->aAddressPhoneNumberAddressIDAddressIDPersonPersonOrdinalNumberOrdinalNumberPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address_id** | **string**| Address Number | |
| **person** | **string**| Person Number | |
| **ordinal_number** | **string**| Sequence Number | |
| **modified_a_address_phone_number_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedAAddressPhoneNumberType**](../Model/ModifiedAAddressPhoneNumberType.md)| New property values | |

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

## `aAddressPhoneNumberGet()`

```php
aAddressPhoneNumberGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper3
```

Retrieves mobile/telephone address records linked to business partner address.

Retrieves all the mobile/telephone address records linked to all the business partner address records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PhoneNumberApi(
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
    $result = $apiInstance->aAddressPhoneNumberGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumberApi->aAddressPhoneNumberGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper3**](../Model/Wrapper3.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aAddressPhoneNumberPost()`

```php
aAddressPhoneNumberPost($apibusinesspartnera_address_phone_number_type_create): \BeLenka\SAP\BusinessPartner\Model\AAddressPhoneNumberType
```

Creates a new  mobile/telephone address record for the existing business partner address.

Adds a new mobile/telephone record for the existing business partner address records. Multiple records can be linked to an address.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PhoneNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnera_address_phone_number_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressPhoneNumberTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressPhoneNumberTypeCreate | New entity

try {
    $result = $apiInstance->aAddressPhoneNumberPost($apibusinesspartnera_address_phone_number_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumberApi->aAddressPhoneNumberPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnera_address_phone_number_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressPhoneNumberTypeCreate**](../Model/APIBUSINESSPARTNERAAddressPhoneNumberTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\AAddressPhoneNumberType**](../Model/AAddressPhoneNumberType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToMobilePhoneNumberGet()`

```php
aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToMobilePhoneNumberGet($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $address_id, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper3
```

Retrieves mobile/telephone address records linked to business partner address.

Retrieves all the mobile/telephone address records linked to all the business partner address records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PhoneNumberApi(
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
    $result = $apiInstance->aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToMobilePhoneNumberGet($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $address_id, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumberApi->aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToMobilePhoneNumberGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper3**](../Model/Wrapper3.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToMobilePhoneNumberPost()`

```php
aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToMobilePhoneNumberPost($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $address_id, $apibusinesspartnera_address_phone_number_type_create): \BeLenka\SAP\BusinessPartner\Model\AAddressPhoneNumberType
```

Creates a new  mobile/telephone address record for the existing business partner address.

Adds a new mobile/telephone record for the existing business partner address records. Multiple records can be linked to an address.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PhoneNumberApi(
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
$apibusinesspartnera_address_phone_number_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressPhoneNumberTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressPhoneNumberTypeCreate | New entity

try {
    $result = $apiInstance->aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToMobilePhoneNumberPost($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $address_id, $apibusinesspartnera_address_phone_number_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumberApi->aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToMobilePhoneNumberPost: ', $e->getMessage(), PHP_EOL;
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
| **apibusinesspartnera_address_phone_number_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressPhoneNumberTypeCreate**](../Model/APIBUSINESSPARTNERAAddressPhoneNumberTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\AAddressPhoneNumberType**](../Model/AAddressPhoneNumberType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToPhoneNumberGet()`

```php
aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToPhoneNumberGet($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $address_id, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper3
```

Retrieves mobile/telephone address records linked to business partner address.

Retrieves all the mobile/telephone address records linked to all the business partner address records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PhoneNumberApi(
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
    $result = $apiInstance->aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToPhoneNumberGet($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $address_id, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumberApi->aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToPhoneNumberGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper3**](../Model/Wrapper3.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToPhoneNumberPost()`

```php
aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToPhoneNumberPost($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $address_id, $apibusinesspartnera_address_phone_number_type_create): \BeLenka\SAP\BusinessPartner\Model\AAddressPhoneNumberType
```

Creates a new  mobile/telephone address record for the existing business partner address.

Adds a new mobile/telephone record for the existing business partner address records. Multiple records can be linked to an address.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PhoneNumberApi(
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
$apibusinesspartnera_address_phone_number_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressPhoneNumberTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressPhoneNumberTypeCreate | New entity

try {
    $result = $apiInstance->aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToPhoneNumberPost($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $address_id, $apibusinesspartnera_address_phone_number_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumberApi->aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToPhoneNumberPost: ', $e->getMessage(), PHP_EOL;
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
| **apibusinesspartnera_address_phone_number_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressPhoneNumberTypeCreate**](../Model/APIBUSINESSPARTNERAAddressPhoneNumberTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\AAddressPhoneNumberType**](../Model/AAddressPhoneNumberType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToMobilePhoneNumberGet()`

```php
aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToMobilePhoneNumberGet($business_partner, $address_id, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper3
```

Retrieves mobile/telephone address records linked to business partner address.

Retrieves all the mobile/telephone address records linked to all the business partner address records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PhoneNumberApi(
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
    $result = $apiInstance->aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToMobilePhoneNumberGet($business_partner, $address_id, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumberApi->aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToMobilePhoneNumberGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper3**](../Model/Wrapper3.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToMobilePhoneNumberPost()`

```php
aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToMobilePhoneNumberPost($business_partner, $address_id, $apibusinesspartnera_address_phone_number_type_create): \BeLenka\SAP\BusinessPartner\Model\AAddressPhoneNumberType
```

Creates a new  mobile/telephone address record for the existing business partner address.

Adds a new mobile/telephone record for the existing business partner address records. Multiple records can be linked to an address.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PhoneNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$address_id = 'address_id_example'; // string | Address Number
$apibusinesspartnera_address_phone_number_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressPhoneNumberTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressPhoneNumberTypeCreate | New entity

try {
    $result = $apiInstance->aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToMobilePhoneNumberPost($business_partner, $address_id, $apibusinesspartnera_address_phone_number_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumberApi->aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToMobilePhoneNumberPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **address_id** | **string**| Address Number | |
| **apibusinesspartnera_address_phone_number_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressPhoneNumberTypeCreate**](../Model/APIBUSINESSPARTNERAAddressPhoneNumberTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\AAddressPhoneNumberType**](../Model/AAddressPhoneNumberType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToPhoneNumberGet()`

```php
aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToPhoneNumberGet($business_partner, $address_id, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper3
```

Retrieves mobile/telephone address records linked to business partner address.

Retrieves all the mobile/telephone address records linked to all the business partner address records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PhoneNumberApi(
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
    $result = $apiInstance->aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToPhoneNumberGet($business_partner, $address_id, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumberApi->aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToPhoneNumberGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper3**](../Model/Wrapper3.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToPhoneNumberPost()`

```php
aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToPhoneNumberPost($business_partner, $address_id, $apibusinesspartnera_address_phone_number_type_create): \BeLenka\SAP\BusinessPartner\Model\AAddressPhoneNumberType
```

Creates a new  mobile/telephone address record for the existing business partner address.

Adds a new mobile/telephone record for the existing business partner address records. Multiple records can be linked to an address.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PhoneNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$address_id = 'address_id_example'; // string | Address Number
$apibusinesspartnera_address_phone_number_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressPhoneNumberTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressPhoneNumberTypeCreate | New entity

try {
    $result = $apiInstance->aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToPhoneNumberPost($business_partner, $address_id, $apibusinesspartnera_address_phone_number_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumberApi->aBusinessPartnerAddressBusinessPartnerBusinessPartnerAddressIDAddressIDToPhoneNumberPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **address_id** | **string**| Address Number | |
| **apibusinesspartnera_address_phone_number_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressPhoneNumberTypeCreate**](../Model/APIBUSINESSPARTNERAAddressPhoneNumberTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\AAddressPhoneNumberType**](../Model/AAddressPhoneNumberType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
