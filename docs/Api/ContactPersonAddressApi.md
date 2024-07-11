# BeLenka\SAP\BusinessPartner\ContactPersonAddressApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aBPContactToAddressGet()**](ContactPersonAddressApi.md#aBPContactToAddressGet) | **GET** /A_BPContactToAddress | Retrieves workplace address records linked to business partner contact. |
| [**aBPContactToAddressPost()**](ContactPersonAddressApi.md#aBPContactToAddressPost) | **POST** /A_BPContactToAddress | Add new entity to A_BPContactToAddress |
| [**aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDGet()**](ContactPersonAddressApi.md#aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDGet) | **GET** /A_BPContactToAddress(RelationshipNumber&#x3D;&#39;{RelationshipNumber}&#39;,BusinessPartnerCompany&#x3D;&#39;{BusinessPartnerCompany}&#39;,BusinessPartnerPerson&#x3D;&#39;{BusinessPartnerPerson}&#39;,ValidityEndDate&#x3D;datetime&#39;{ValidityEndDate}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;) | Retrieves contact person workplace address record by using key fields. |
| [**aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDPatch()**](ContactPersonAddressApi.md#aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDPatch) | **PATCH** /A_BPContactToAddress(RelationshipNumber&#x3D;&#39;{RelationshipNumber}&#39;,BusinessPartnerCompany&#x3D;&#39;{BusinessPartnerCompany}&#39;,BusinessPartnerPerson&#x3D;&#39;{BusinessPartnerPerson}&#39;,ValidityEndDate&#x3D;datetime&#39;{ValidityEndDate}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;) | Update entity in A_BPContactToAddress |
| [**aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToEmailAddressGet()**](ContactPersonAddressApi.md#aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToEmailAddressGet) | **GET** /A_BPContactToAddress(RelationshipNumber&#x3D;&#39;{RelationshipNumber}&#39;,BusinessPartnerCompany&#x3D;&#39;{BusinessPartnerCompany}&#39;,BusinessPartnerPerson&#x3D;&#39;{BusinessPartnerPerson}&#39;,ValidityEndDate&#x3D;datetime&#39;{ValidityEndDate}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;)/to_EmailAddress | Retrieves email address data linked to business partner address fields. |
| [**aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToEmailAddressPost()**](ContactPersonAddressApi.md#aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToEmailAddressPost) | **POST** /A_BPContactToAddress(RelationshipNumber&#x3D;&#39;{RelationshipNumber}&#39;,BusinessPartnerCompany&#x3D;&#39;{BusinessPartnerCompany}&#39;,BusinessPartnerPerson&#x3D;&#39;{BusinessPartnerPerson}&#39;,ValidityEndDate&#x3D;datetime&#39;{ValidityEndDate}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;)/to_EmailAddress | Creates a new email address data for the existing business partner address. |
| [**aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToFaxNumberGet()**](ContactPersonAddressApi.md#aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToFaxNumberGet) | **GET** /A_BPContactToAddress(RelationshipNumber&#x3D;&#39;{RelationshipNumber}&#39;,BusinessPartnerCompany&#x3D;&#39;{BusinessPartnerCompany}&#39;,BusinessPartnerPerson&#x3D;&#39;{BusinessPartnerPerson}&#39;,ValidityEndDate&#x3D;datetime&#39;{ValidityEndDate}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;)/to_FaxNumber | Retrieves fax address data linked to business partner address. |
| [**aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToFaxNumberPost()**](ContactPersonAddressApi.md#aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToFaxNumberPost) | **POST** /A_BPContactToAddress(RelationshipNumber&#x3D;&#39;{RelationshipNumber}&#39;,BusinessPartnerCompany&#x3D;&#39;{BusinessPartnerCompany}&#39;,BusinessPartnerPerson&#x3D;&#39;{BusinessPartnerPerson}&#39;,ValidityEndDate&#x3D;datetime&#39;{ValidityEndDate}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;)/to_FaxNumber | Creates a new fax address data for the existing business partner address. |
| [**aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToMobilePhoneNumberGet()**](ContactPersonAddressApi.md#aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToMobilePhoneNumberGet) | **GET** /A_BPContactToAddress(RelationshipNumber&#x3D;&#39;{RelationshipNumber}&#39;,BusinessPartnerCompany&#x3D;&#39;{BusinessPartnerCompany}&#39;,BusinessPartnerPerson&#x3D;&#39;{BusinessPartnerPerson}&#39;,ValidityEndDate&#x3D;datetime&#39;{ValidityEndDate}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;)/to_MobilePhoneNumber | Retrieves mobile/telephone address records linked to business partner address. |
| [**aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToMobilePhoneNumberPost()**](ContactPersonAddressApi.md#aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToMobilePhoneNumberPost) | **POST** /A_BPContactToAddress(RelationshipNumber&#x3D;&#39;{RelationshipNumber}&#39;,BusinessPartnerCompany&#x3D;&#39;{BusinessPartnerCompany}&#39;,BusinessPartnerPerson&#x3D;&#39;{BusinessPartnerPerson}&#39;,ValidityEndDate&#x3D;datetime&#39;{ValidityEndDate}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;)/to_MobilePhoneNumber | Creates a new  mobile/telephone address record for the existing business partner address. |
| [**aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToPhoneNumberGet()**](ContactPersonAddressApi.md#aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToPhoneNumberGet) | **GET** /A_BPContactToAddress(RelationshipNumber&#x3D;&#39;{RelationshipNumber}&#39;,BusinessPartnerCompany&#x3D;&#39;{BusinessPartnerCompany}&#39;,BusinessPartnerPerson&#x3D;&#39;{BusinessPartnerPerson}&#39;,ValidityEndDate&#x3D;datetime&#39;{ValidityEndDate}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;)/to_PhoneNumber | Retrieves mobile/telephone address records linked to business partner address. |
| [**aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToPhoneNumberPost()**](ContactPersonAddressApi.md#aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToPhoneNumberPost) | **POST** /A_BPContactToAddress(RelationshipNumber&#x3D;&#39;{RelationshipNumber}&#39;,BusinessPartnerCompany&#x3D;&#39;{BusinessPartnerCompany}&#39;,BusinessPartnerPerson&#x3D;&#39;{BusinessPartnerPerson}&#39;,ValidityEndDate&#x3D;datetime&#39;{ValidityEndDate}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;)/to_PhoneNumber | Creates a new  mobile/telephone address record for the existing business partner address. |
| [**aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToURLAddressGet()**](ContactPersonAddressApi.md#aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToURLAddressGet) | **GET** /A_BPContactToAddress(RelationshipNumber&#x3D;&#39;{RelationshipNumber}&#39;,BusinessPartnerCompany&#x3D;&#39;{BusinessPartnerCompany}&#39;,BusinessPartnerPerson&#x3D;&#39;{BusinessPartnerPerson}&#39;,ValidityEndDate&#x3D;datetime&#39;{ValidityEndDate}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;)/to_URLAddress | Retrieves home page URL address records linked to business partner address. |
| [**aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToURLAddressPost()**](ContactPersonAddressApi.md#aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToURLAddressPost) | **POST** /A_BPContactToAddress(RelationshipNumber&#x3D;&#39;{RelationshipNumber}&#39;,BusinessPartnerCompany&#x3D;&#39;{BusinessPartnerCompany}&#39;,BusinessPartnerPerson&#x3D;&#39;{BusinessPartnerPerson}&#39;,ValidityEndDate&#x3D;datetime&#39;{ValidityEndDate}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;)/to_URLAddress | Creates a new home page URL address record to the existing business partner address. |
| [**aBusinessPartnerContactRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateToContactAddressGet()**](ContactPersonAddressApi.md#aBusinessPartnerContactRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateToContactAddressGet) | **GET** /A_BusinessPartnerContact(RelationshipNumber&#x3D;&#39;{RelationshipNumber}&#39;,BusinessPartnerCompany&#x3D;&#39;{BusinessPartnerCompany}&#39;,BusinessPartnerPerson&#x3D;&#39;{BusinessPartnerPerson}&#39;,ValidityEndDate&#x3D;datetime&#39;{ValidityEndDate}&#39;)/to_ContactAddress | Retrieves workplace address records linked to business partner contact. |
| [**aBusinessPartnerContactRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateToContactAddressPost()**](ContactPersonAddressApi.md#aBusinessPartnerContactRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateToContactAddressPost) | **POST** /A_BusinessPartnerContact(RelationshipNumber&#x3D;&#39;{RelationshipNumber}&#39;,BusinessPartnerCompany&#x3D;&#39;{BusinessPartnerCompany}&#39;,BusinessPartnerPerson&#x3D;&#39;{BusinessPartnerPerson}&#39;,ValidityEndDate&#x3D;datetime&#39;{ValidityEndDate}&#39;)/to_ContactAddress | Add new entity to related to_ContactAddress |


## `aBPContactToAddressGet()`

```php
aBPContactToAddressGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\BusinessPartner\Model\Wrapper10
```

Retrieves workplace address records linked to business partner contact.

Retrieves all the workplace address records linked to all the business partner contact records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\ContactPersonAddressApi(
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
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aBPContactToAddressGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactPersonAddressApi->aBPContactToAddressGet: ', $e->getMessage(), PHP_EOL;
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
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper10**](../Model/Wrapper10.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPContactToAddressPost()`

```php
aBPContactToAddressPost($apibusinesspartnerabp_contact_to_address_type_create): \BeLenka\SAP\BusinessPartner\Model\ABPContactToAddressType
```

Add new entity to A_BPContactToAddress

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\ContactPersonAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnerabp_contact_to_address_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPContactToAddressTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPContactToAddressTypeCreate | New entity

try {
    $result = $apiInstance->aBPContactToAddressPost($apibusinesspartnerabp_contact_to_address_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactPersonAddressApi->aBPContactToAddressPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnerabp_contact_to_address_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPContactToAddressTypeCreate**](../Model/APIBUSINESSPARTNERABPContactToAddressTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABPContactToAddressType**](../Model/ABPContactToAddressType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDGet()`

```php
aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDGet($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $address_id, $select, $expand): \BeLenka\SAP\BusinessPartner\Model\ABPContactToAddressType
```

Retrieves contact person workplace address record by using key fields.

Retrieves workplace address record by RelationshipNumber, BusinessPartnerCompany, BusinessPartnerPerson and ValidityEndDate.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\ContactPersonAddressApi(
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
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDGet($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $address_id, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactPersonAddressApi->aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDGet: ', $e->getMessage(), PHP_EOL;
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
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABPContactToAddressType**](../Model/ABPContactToAddressType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDPatch()`

```php
aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDPatch($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $address_id, $modified_abp_contact_to_address_type)
```

Update entity in A_BPContactToAddress

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\ContactPersonAddressApi(
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
$modified_abp_contact_to_address_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedABPContactToAddressType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedABPContactToAddressType | New property values

try {
    $apiInstance->aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDPatch($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $address_id, $modified_abp_contact_to_address_type);
} catch (Exception $e) {
    echo 'Exception when calling ContactPersonAddressApi->aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDPatch: ', $e->getMessage(), PHP_EOL;
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
| **modified_abp_contact_to_address_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedABPContactToAddressType**](../Model/ModifiedABPContactToAddressType.md)| New property values | |

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\ContactPersonAddressApi(
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
    echo 'Exception when calling ContactPersonAddressApi->aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToEmailAddressGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\ContactPersonAddressApi(
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
    echo 'Exception when calling ContactPersonAddressApi->aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToEmailAddressPost: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\ContactPersonAddressApi(
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
    echo 'Exception when calling ContactPersonAddressApi->aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToFaxNumberGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\ContactPersonAddressApi(
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
    echo 'Exception when calling ContactPersonAddressApi->aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToFaxNumberPost: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\ContactPersonAddressApi(
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
    echo 'Exception when calling ContactPersonAddressApi->aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToMobilePhoneNumberGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\ContactPersonAddressApi(
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
    echo 'Exception when calling ContactPersonAddressApi->aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToMobilePhoneNumberPost: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\ContactPersonAddressApi(
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
    echo 'Exception when calling ContactPersonAddressApi->aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToPhoneNumberGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\ContactPersonAddressApi(
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
    echo 'Exception when calling ContactPersonAddressApi->aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToPhoneNumberPost: ', $e->getMessage(), PHP_EOL;
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

## `aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToURLAddressGet()`

```php
aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToURLAddressGet($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $address_id, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper2
```

Retrieves home page URL address records linked to business partner address.

Retrieves all the home page URL address records linked to all business partner address records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\ContactPersonAddressApi(
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
    $result = $apiInstance->aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToURLAddressGet($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $address_id, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactPersonAddressApi->aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToURLAddressGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper2**](../Model/Wrapper2.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToURLAddressPost()`

```php
aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToURLAddressPost($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $address_id, $apibusinesspartnera_address_home_page_url_type_create): \BeLenka\SAP\BusinessPartner\Model\AAddressHomePageURLType
```

Creates a new home page URL address record to the existing business partner address.

Adds a new home page URL to the existing business partner address record. Multiple URLs can be linked to an address record.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\ContactPersonAddressApi(
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
$apibusinesspartnera_address_home_page_url_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressHomePageURLTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressHomePageURLTypeCreate | New entity

try {
    $result = $apiInstance->aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToURLAddressPost($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $address_id, $apibusinesspartnera_address_home_page_url_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactPersonAddressApi->aBPContactToAddressRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateAddressIDAddressIDToURLAddressPost: ', $e->getMessage(), PHP_EOL;
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
| **apibusinesspartnera_address_home_page_url_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERAAddressHomePageURLTypeCreate**](../Model/APIBUSINESSPARTNERAAddressHomePageURLTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\AAddressHomePageURLType**](../Model/AAddressHomePageURLType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerContactRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateToContactAddressGet()`

```php
aBusinessPartnerContactRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateToContactAddressGet($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\BusinessPartner\Model\Wrapper10
```

Retrieves workplace address records linked to business partner contact.

Retrieves all the workplace address records linked to all the business partner contact records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\ContactPersonAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relationship_number = 'relationship_number_example'; // string | BP Relationship Number
$business_partner_company = 'business_partner_company_example'; // string | Business Partner Number
$business_partner_person = 'business_partner_person_example'; // string | Business Partner Number
$validity_end_date = 2017-04-13T00:00; // string | Validity Date (Valid To)
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aBusinessPartnerContactRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateToContactAddressGet($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactPersonAddressApi->aBusinessPartnerContactRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateToContactAddressGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **relationship_number** | **string**| BP Relationship Number | |
| **business_partner_company** | **string**| Business Partner Number | |
| **business_partner_person** | **string**| Business Partner Number | |
| **validity_end_date** | **string**| Validity Date (Valid To) | |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper10**](../Model/Wrapper10.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerContactRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateToContactAddressPost()`

```php
aBusinessPartnerContactRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateToContactAddressPost($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $apibusinesspartnerabp_contact_to_address_type_create): \BeLenka\SAP\BusinessPartner\Model\ABPContactToAddressType
```

Add new entity to related to_ContactAddress

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\ContactPersonAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relationship_number = 'relationship_number_example'; // string | BP Relationship Number
$business_partner_company = 'business_partner_company_example'; // string | Business Partner Number
$business_partner_person = 'business_partner_person_example'; // string | Business Partner Number
$validity_end_date = 2017-04-13T00:00; // string | Validity Date (Valid To)
$apibusinesspartnerabp_contact_to_address_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPContactToAddressTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPContactToAddressTypeCreate | New entity

try {
    $result = $apiInstance->aBusinessPartnerContactRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateToContactAddressPost($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $apibusinesspartnerabp_contact_to_address_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactPersonAddressApi->aBusinessPartnerContactRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateToContactAddressPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **relationship_number** | **string**| BP Relationship Number | |
| **business_partner_company** | **string**| Business Partner Number | |
| **business_partner_person** | **string**| Business Partner Number | |
| **validity_end_date** | **string**| Validity Date (Valid To) | |
| **apibusinesspartnerabp_contact_to_address_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABPContactToAddressTypeCreate**](../Model/APIBUSINESSPARTNERABPContactToAddressTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABPContactToAddressType**](../Model/ABPContactToAddressType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
