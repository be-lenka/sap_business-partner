# BeLenka\SAP\BusinessPartner\PurchasingOrganizationApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aSupplierPurchasingOrgGet()**](PurchasingOrganizationApi.md#aSupplierPurchasingOrgGet) | **GET** /A_SupplierPurchasingOrg | Retrieves supplier purchasing organization data. |
| [**aSupplierPurchasingOrgPost()**](PurchasingOrganizationApi.md#aSupplierPurchasingOrgPost) | **POST** /A_SupplierPurchasingOrg | Creates supplier purchasing organization data. |
| [**aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationGet()**](PurchasingOrganizationApi.md#aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationGet) | **GET** /A_SupplierPurchasingOrg(Supplier&#x3D;&#39;{Supplier}&#39;,PurchasingOrganization&#x3D;&#39;{PurchasingOrganization}&#39;) | Retrieves supplier purchasing organization data by using the key fields. |
| [**aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationPatch()**](PurchasingOrganizationApi.md#aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationPatch) | **PATCH** /A_SupplierPurchasingOrg(Supplier&#x3D;&#39;{Supplier}&#39;,PurchasingOrganization&#x3D;&#39;{PurchasingOrganization}&#39;) | Updates supplier purchasing organization data by using key fields. |
| [**aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPartnerFunctionGet()**](PurchasingOrganizationApi.md#aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPartnerFunctionGet) | **GET** /A_SupplierPurchasingOrg(Supplier&#x3D;&#39;{Supplier}&#39;,PurchasingOrganization&#x3D;&#39;{PurchasingOrganization}&#39;)/to_PartnerFunction | Retrieves supplier purchasing organization partner function records. |
| [**aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPartnerFunctionPost()**](PurchasingOrganizationApi.md#aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPartnerFunctionPost) | **POST** /A_SupplierPurchasingOrg(Supplier&#x3D;&#39;{Supplier}&#39;,PurchasingOrganization&#x3D;&#39;{PurchasingOrganization}&#39;)/to_PartnerFunction | Creates a new partner function data linked to supplier purchasing organization. |
| [**aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPurchasingOrgTextGet()**](PurchasingOrganizationApi.md#aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPurchasingOrgTextGet) | **GET** /A_SupplierPurchasingOrg(Supplier&#x3D;&#39;{Supplier}&#39;,PurchasingOrganization&#x3D;&#39;{PurchasingOrganization}&#39;)/to_PurchasingOrgText | Retrieves supplier purchasing organization text data. |
| [**aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPurchasingOrgTextPost()**](PurchasingOrganizationApi.md#aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPurchasingOrgTextPost) | **POST** /A_SupplierPurchasingOrg(Supplier&#x3D;&#39;{Supplier}&#39;,PurchasingOrganization&#x3D;&#39;{PurchasingOrganization}&#39;)/to_PurchasingOrgText | Creates supplier purchasing organization text data. |
| [**aSupplierSupplierToSupplierPurchasingOrgGet()**](PurchasingOrganizationApi.md#aSupplierSupplierToSupplierPurchasingOrgGet) | **GET** /A_Supplier(&#39;{Supplier}&#39;)/to_SupplierPurchasingOrg | Retrieves supplier purchasing organization data. |
| [**aSupplierSupplierToSupplierPurchasingOrgPost()**](PurchasingOrganizationApi.md#aSupplierSupplierToSupplierPurchasingOrgPost) | **POST** /A_Supplier(&#39;{Supplier}&#39;)/to_SupplierPurchasingOrg | Creates supplier purchasing organization data. |


## `aSupplierPurchasingOrgGet()`

```php
aSupplierPurchasingOrgGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\BusinessPartner\Model\Wrapper53
```

Retrieves supplier purchasing organization data.

Retrieves all the supplier purchasing organization data attached to supplier records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PurchasingOrganizationApi(
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
    $result = $apiInstance->aSupplierPurchasingOrgGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasingOrganizationApi->aSupplierPurchasingOrgGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper53**](../Model/Wrapper53.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierPurchasingOrgPost()`

```php
aSupplierPurchasingOrgPost($apibusinesspartnera_supplier_purchasing_org_type_create): \BeLenka\SAP\BusinessPartner\Model\ASupplierPurchasingOrgType
```

Creates supplier purchasing organization data.

Creates supplier purchasing organization data including PartnerFunctions and Text data.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PurchasingOrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnera_supplier_purchasing_org_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierPurchasingOrgTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierPurchasingOrgTypeCreate | New entity

try {
    $result = $apiInstance->aSupplierPurchasingOrgPost($apibusinesspartnera_supplier_purchasing_org_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasingOrganizationApi->aSupplierPurchasingOrgPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnera_supplier_purchasing_org_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierPurchasingOrgTypeCreate**](../Model/APIBUSINESSPARTNERASupplierPurchasingOrgTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ASupplierPurchasingOrgType**](../Model/ASupplierPurchasingOrgType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationGet()`

```php
aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationGet($supplier, $purchasing_organization, $select, $expand): \BeLenka\SAP\BusinessPartner\Model\ASupplierPurchasingOrgType
```

Retrieves supplier purchasing organization data by using the key fields.

Retrieves supplier purchasing organization data by using Supplier and PurchasingOrganization fields.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PurchasingOrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Supplier's Account Number
$purchasing_organization = 'purchasing_organization_example'; // string | Purchasing Organization
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationGet($supplier, $purchasing_organization, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasingOrganizationApi->aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Supplier&#39;s Account Number | |
| **purchasing_organization** | **string**| Purchasing Organization | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ASupplierPurchasingOrgType**](../Model/ASupplierPurchasingOrgType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationPatch()`

```php
aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationPatch($supplier, $purchasing_organization, $modified_a_supplier_purchasing_org_type)
```

Updates supplier purchasing organization data by using key fields.

Updates supplier purchasing organization record by Supplier and PurchasingOrganization fields.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PurchasingOrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Supplier's Account Number
$purchasing_organization = 'purchasing_organization_example'; // string | Purchasing Organization
$modified_a_supplier_purchasing_org_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedASupplierPurchasingOrgType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedASupplierPurchasingOrgType | New property values

try {
    $apiInstance->aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationPatch($supplier, $purchasing_organization, $modified_a_supplier_purchasing_org_type);
} catch (Exception $e) {
    echo 'Exception when calling PurchasingOrganizationApi->aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Supplier&#39;s Account Number | |
| **purchasing_organization** | **string**| Purchasing Organization | |
| **modified_a_supplier_purchasing_org_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedASupplierPurchasingOrgType**](../Model/ModifiedASupplierPurchasingOrgType.md)| New property values | |

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

## `aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPartnerFunctionGet()`

```php
aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPartnerFunctionGet($supplier, $purchasing_organization, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper58
```

Retrieves supplier purchasing organization partner function records.

Retrieves partner function fields of all the available records in the system linked to supplier purchasing organization

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PurchasingOrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Supplier's Account Number
$purchasing_organization = 'purchasing_organization_example'; // string | Purchasing Organization
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPartnerFunctionGet($supplier, $purchasing_organization, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasingOrganizationApi->aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPartnerFunctionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Supplier&#39;s Account Number | |
| **purchasing_organization** | **string**| Purchasing Organization | |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper58**](../Model/Wrapper58.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPartnerFunctionPost()`

```php
aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPartnerFunctionPost($supplier, $purchasing_organization, $apibusinesspartnera_supplier_partner_func_type_create): \BeLenka\SAP\BusinessPartner\Model\ASupplierPartnerFuncType
```

Creates a new partner function data linked to supplier purchasing organization.

Adds a new partner function record. Partner Counter will be automatically determined if a similar partner function already exists.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PurchasingOrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Supplier's Account Number
$purchasing_organization = 'purchasing_organization_example'; // string | Purchasing Organization
$apibusinesspartnera_supplier_partner_func_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierPartnerFuncTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierPartnerFuncTypeCreate | New entity

try {
    $result = $apiInstance->aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPartnerFunctionPost($supplier, $purchasing_organization, $apibusinesspartnera_supplier_partner_func_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasingOrganizationApi->aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPartnerFunctionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Supplier&#39;s Account Number | |
| **purchasing_organization** | **string**| Purchasing Organization | |
| **apibusinesspartnera_supplier_partner_func_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierPartnerFuncTypeCreate**](../Model/APIBUSINESSPARTNERASupplierPartnerFuncTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ASupplierPartnerFuncType**](../Model/ASupplierPartnerFuncType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPurchasingOrgTextGet()`

```php
aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPurchasingOrgTextGet($supplier, $purchasing_organization, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper59
```

Retrieves supplier purchasing organization text data.

Retrieves all the supplier purchasing organization text data attached to purchasing organization in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PurchasingOrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Supplier's Account Number
$purchasing_organization = 'purchasing_organization_example'; // string | Purchasing Organization
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPurchasingOrgTextGet($supplier, $purchasing_organization, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasingOrganizationApi->aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPurchasingOrgTextGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Supplier&#39;s Account Number | |
| **purchasing_organization** | **string**| Purchasing Organization | |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper59**](../Model/Wrapper59.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPurchasingOrgTextPost()`

```php
aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPurchasingOrgTextPost($supplier, $purchasing_organization, $apibusinesspartnera_supplier_purchasing_org_text_type_create): \BeLenka\SAP\BusinessPartner\Model\ASupplierPurchasingOrgTextType
```

Creates supplier purchasing organization text data.

Creates text data attached to a supplier purchasing organization in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PurchasingOrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Supplier's Account Number
$purchasing_organization = 'purchasing_organization_example'; // string | Purchasing Organization
$apibusinesspartnera_supplier_purchasing_org_text_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierPurchasingOrgTextTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierPurchasingOrgTextTypeCreate | New entity

try {
    $result = $apiInstance->aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPurchasingOrgTextPost($supplier, $purchasing_organization, $apibusinesspartnera_supplier_purchasing_org_text_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasingOrganizationApi->aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPurchasingOrgTextPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Supplier&#39;s Account Number | |
| **purchasing_organization** | **string**| Purchasing Organization | |
| **apibusinesspartnera_supplier_purchasing_org_text_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierPurchasingOrgTextTypeCreate**](../Model/APIBUSINESSPARTNERASupplierPurchasingOrgTextTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ASupplierPurchasingOrgTextType**](../Model/ASupplierPurchasingOrgTextType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierSupplierToSupplierPurchasingOrgGet()`

```php
aSupplierSupplierToSupplierPurchasingOrgGet($supplier, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\BusinessPartner\Model\Wrapper53
```

Retrieves supplier purchasing organization data.

Retrieves all the supplier purchasing organization data attached to supplier records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PurchasingOrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Account Number of Supplier
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aSupplierSupplierToSupplierPurchasingOrgGet($supplier, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasingOrganizationApi->aSupplierSupplierToSupplierPurchasingOrgGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Account Number of Supplier | |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper53**](../Model/Wrapper53.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierSupplierToSupplierPurchasingOrgPost()`

```php
aSupplierSupplierToSupplierPurchasingOrgPost($supplier, $apibusinesspartnera_supplier_purchasing_org_type_create): \BeLenka\SAP\BusinessPartner\Model\ASupplierPurchasingOrgType
```

Creates supplier purchasing organization data.

Creates supplier purchasing organization data including PartnerFunctions and Text data.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PurchasingOrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Account Number of Supplier
$apibusinesspartnera_supplier_purchasing_org_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierPurchasingOrgTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierPurchasingOrgTypeCreate | New entity

try {
    $result = $apiInstance->aSupplierSupplierToSupplierPurchasingOrgPost($supplier, $apibusinesspartnera_supplier_purchasing_org_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasingOrganizationApi->aSupplierSupplierToSupplierPurchasingOrgPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Account Number of Supplier | |
| **apibusinesspartnera_supplier_purchasing_org_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierPurchasingOrgTypeCreate**](../Model/APIBUSINESSPARTNERASupplierPurchasingOrgTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ASupplierPurchasingOrgType**](../Model/ASupplierPurchasingOrgType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
