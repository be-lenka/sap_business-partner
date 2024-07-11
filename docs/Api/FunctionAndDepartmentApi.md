# BeLenka\SAP\BusinessPartner\FunctionAndDepartmentApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aBPContactToFuncAndDeptGet()**](FunctionAndDepartmentApi.md#aBPContactToFuncAndDeptGet) | **GET** /A_BPContactToFuncAndDept | Retrieves contact person department and function data. |
| [**aBPContactToFuncAndDeptRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateGet()**](FunctionAndDepartmentApi.md#aBPContactToFuncAndDeptRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateGet) | **GET** /A_BPContactToFuncAndDept(RelationshipNumber&#x3D;&#39;{RelationshipNumber}&#39;,BusinessPartnerCompany&#x3D;&#39;{BusinessPartnerCompany}&#39;,BusinessPartnerPerson&#x3D;&#39;{BusinessPartnerPerson}&#39;,ValidityEndDate&#x3D;datetime&#39;{ValidityEndDate}&#39;) | Retrieves contact person department and function data by using key fields. |
| [**aBPContactToFuncAndDeptRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDatePatch()**](FunctionAndDepartmentApi.md#aBPContactToFuncAndDeptRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDatePatch) | **PATCH** /A_BPContactToFuncAndDept(RelationshipNumber&#x3D;&#39;{RelationshipNumber}&#39;,BusinessPartnerCompany&#x3D;&#39;{BusinessPartnerCompany}&#39;,BusinessPartnerPerson&#x3D;&#39;{BusinessPartnerPerson}&#39;,ValidityEndDate&#x3D;datetime&#39;{ValidityEndDate}&#39;) | Updates contact person department and function data record by key field. |
| [**aBusinessPartnerContactRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateToContactRelationshipGet()**](FunctionAndDepartmentApi.md#aBusinessPartnerContactRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateToContactRelationshipGet) | **GET** /A_BusinessPartnerContact(RelationshipNumber&#x3D;&#39;{RelationshipNumber}&#39;,BusinessPartnerCompany&#x3D;&#39;{BusinessPartnerCompany}&#39;,BusinessPartnerPerson&#x3D;&#39;{BusinessPartnerPerson}&#39;,ValidityEndDate&#x3D;datetime&#39;{ValidityEndDate}&#39;)/to_ContactRelationship | Retrieves contact person department and function data. |


## `aBPContactToFuncAndDeptGet()`

```php
aBPContactToFuncAndDeptGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper11
```

Retrieves contact person department and function data.

Retrieves all the contact person department and function data linked to all business partner contact records in the system

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\FunctionAndDepartmentApi(
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
    $result = $apiInstance->aBPContactToFuncAndDeptGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FunctionAndDepartmentApi->aBPContactToFuncAndDeptGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper11**](../Model/Wrapper11.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPContactToFuncAndDeptRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateGet()`

```php
aBPContactToFuncAndDeptRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateGet($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $select): \BeLenka\SAP\BusinessPartner\Model\ABPContactToFuncAndDeptType
```

Retrieves contact person department and function data by using key fields.

Retrieves department and function record by RelationshipNumber, BusinessPartnerCompany, BusinessPartnerPerson, and ValidityEndDate.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\FunctionAndDepartmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relationship_number = 'relationship_number_example'; // string | BP Relationship Number
$business_partner_company = 'business_partner_company_example'; // string | Business Partner Number
$business_partner_person = 'business_partner_person_example'; // string | Business Partner Number
$validity_end_date = 2017-04-13T00:00; // string | Validity Date (Valid To)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aBPContactToFuncAndDeptRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateGet($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FunctionAndDepartmentApi->aBPContactToFuncAndDeptRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **relationship_number** | **string**| BP Relationship Number | |
| **business_partner_company** | **string**| Business Partner Number | |
| **business_partner_person** | **string**| Business Partner Number | |
| **validity_end_date** | **string**| Validity Date (Valid To) | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABPContactToFuncAndDeptType**](../Model/ABPContactToFuncAndDeptType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBPContactToFuncAndDeptRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDatePatch()`

```php
aBPContactToFuncAndDeptRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDatePatch($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $modified_abp_contact_to_func_and_dept_type)
```

Updates contact person department and function data record by key field.

Updates department and function data by RelationshipNumber, BusinessPartnerCompany, BusinessPartnerPerson, and ValidityEndDate.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\FunctionAndDepartmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relationship_number = 'relationship_number_example'; // string | BP Relationship Number
$business_partner_company = 'business_partner_company_example'; // string | Business Partner Number
$business_partner_person = 'business_partner_person_example'; // string | Business Partner Number
$validity_end_date = 2017-04-13T00:00; // string | Validity Date (Valid To)
$modified_abp_contact_to_func_and_dept_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedABPContactToFuncAndDeptType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedABPContactToFuncAndDeptType | New property values

try {
    $apiInstance->aBPContactToFuncAndDeptRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDatePatch($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $modified_abp_contact_to_func_and_dept_type);
} catch (Exception $e) {
    echo 'Exception when calling FunctionAndDepartmentApi->aBPContactToFuncAndDeptRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDatePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **relationship_number** | **string**| BP Relationship Number | |
| **business_partner_company** | **string**| Business Partner Number | |
| **business_partner_person** | **string**| Business Partner Number | |
| **validity_end_date** | **string**| Validity Date (Valid To) | |
| **modified_abp_contact_to_func_and_dept_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedABPContactToFuncAndDeptType**](../Model/ModifiedABPContactToFuncAndDeptType.md)| New property values | |

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

## `aBusinessPartnerContactRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateToContactRelationshipGet()`

```php
aBusinessPartnerContactRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateToContactRelationshipGet($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $select): \BeLenka\SAP\BusinessPartner\Model\ABPContactToFuncAndDeptType
```

Retrieves contact person department and function data.

Retrieves all the contact person department and function data linked to all business partner contact records in the system

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\FunctionAndDepartmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relationship_number = 'relationship_number_example'; // string | BP Relationship Number
$business_partner_company = 'business_partner_company_example'; // string | Business Partner Number
$business_partner_person = 'business_partner_person_example'; // string | Business Partner Number
$validity_end_date = 2017-04-13T00:00; // string | Validity Date (Valid To)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aBusinessPartnerContactRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateToContactRelationshipGet($relationship_number, $business_partner_company, $business_partner_person, $validity_end_date, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FunctionAndDepartmentApi->aBusinessPartnerContactRelationshipNumberRelationshipNumberBusinessPartnerCompanyBusinessPartnerCompanyBusinessPartnerPersonBusinessPartnerPersonValidityEndDatedatetimeValidityEndDateToContactRelationshipGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **relationship_number** | **string**| BP Relationship Number | |
| **business_partner_company** | **string**| Business Partner Number | |
| **business_partner_person** | **string**| Business Partner Number | |
| **validity_end_date** | **string**| Validity Date (Valid To) | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABPContactToFuncAndDeptType**](../Model/ABPContactToFuncAndDeptType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
