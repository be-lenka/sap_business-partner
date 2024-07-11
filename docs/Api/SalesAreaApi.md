# BeLenka\SAP\BusinessPartner\SalesAreaApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aCustomerCustomerToCustomerSalesAreaGet()**](SalesAreaApi.md#aCustomerCustomerToCustomerSalesAreaGet) | **GET** /A_Customer(&#39;{Customer}&#39;)/to_CustomerSalesArea | Retrieves customer sales area data. |
| [**aCustomerCustomerToCustomerSalesAreaPost()**](SalesAreaApi.md#aCustomerCustomerToCustomerSalesAreaPost) | **POST** /A_Customer(&#39;{Customer}&#39;)/to_CustomerSalesArea | Creates customer sales data. |
| [**aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionGet()**](SalesAreaApi.md#aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionGet) | **GET** /A_CustomerSalesArea(Customer&#x3D;&#39;{Customer}&#39;,SalesOrganization&#x3D;&#39;{SalesOrganization}&#39;,DistributionChannel&#x3D;&#39;{DistributionChannel}&#39;,Division&#x3D;&#39;{Division}&#39;) | Retrieves customer sales area data by key fields. |
| [**aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionPatch()**](SalesAreaApi.md#aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionPatch) | **PATCH** /A_CustomerSalesArea(Customer&#x3D;&#39;{Customer}&#39;,SalesOrganization&#x3D;&#39;{SalesOrganization}&#39;,DistributionChannel&#x3D;&#39;{DistributionChannel}&#39;,Division&#x3D;&#39;{Division}&#39;) | Updates customer sales data. |
| [**aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToPartnerFunctionGet()**](SalesAreaApi.md#aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToPartnerFunctionGet) | **GET** /A_CustomerSalesArea(Customer&#x3D;&#39;{Customer}&#39;,SalesOrganization&#x3D;&#39;{SalesOrganization}&#39;,DistributionChannel&#x3D;&#39;{DistributionChannel}&#39;,Division&#x3D;&#39;{Division}&#39;)/to_PartnerFunction | Retrieves customer sales area partner function records. |
| [**aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToPartnerFunctionPost()**](SalesAreaApi.md#aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToPartnerFunctionPost) | **POST** /A_CustomerSalesArea(Customer&#x3D;&#39;{Customer}&#39;,SalesOrganization&#x3D;&#39;{SalesOrganization}&#39;,DistributionChannel&#x3D;&#39;{DistributionChannel}&#39;,Division&#x3D;&#39;{Division}&#39;)/to_PartnerFunction | Creates a new partner function record linked to customer sales area. |
| [**aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSalesAreaTaxGet()**](SalesAreaApi.md#aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSalesAreaTaxGet) | **GET** /A_CustomerSalesArea(Customer&#x3D;&#39;{Customer}&#39;,SalesOrganization&#x3D;&#39;{SalesOrganization}&#39;,DistributionChannel&#x3D;&#39;{DistributionChannel}&#39;,Division&#x3D;&#39;{Division}&#39;)/to_SalesAreaTax | Retrieves customer sales area data. |
| [**aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSalesAreaTaxPost()**](SalesAreaApi.md#aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSalesAreaTaxPost) | **POST** /A_CustomerSalesArea(Customer&#x3D;&#39;{Customer}&#39;,SalesOrganization&#x3D;&#39;{SalesOrganization}&#39;,DistributionChannel&#x3D;&#39;{DistributionChannel}&#39;,Division&#x3D;&#39;{Division}&#39;)/to_SalesAreaTax | Retrieves customer sales area tax data. |
| [**aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSalesAreaTextGet()**](SalesAreaApi.md#aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSalesAreaTextGet) | **GET** /A_CustomerSalesArea(Customer&#x3D;&#39;{Customer}&#39;,SalesOrganization&#x3D;&#39;{SalesOrganization}&#39;,DistributionChannel&#x3D;&#39;{DistributionChannel}&#39;,Division&#x3D;&#39;{Division}&#39;)/to_SalesAreaText | Retrieves customer sales area text data. |
| [**aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSalesAreaTextPost()**](SalesAreaApi.md#aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSalesAreaTextPost) | **POST** /A_CustomerSalesArea(Customer&#x3D;&#39;{Customer}&#39;,SalesOrganization&#x3D;&#39;{SalesOrganization}&#39;,DistributionChannel&#x3D;&#39;{DistributionChannel}&#39;,Division&#x3D;&#39;{Division}&#39;)/to_SalesAreaText | Creates a new customer sales area text data. |
| [**aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSlsAreaAddrDepdntInfoGet()**](SalesAreaApi.md#aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSlsAreaAddrDepdntInfoGet) | **GET** /A_CustomerSalesArea(Customer&#x3D;&#39;{Customer}&#39;,SalesOrganization&#x3D;&#39;{SalesOrganization}&#39;,DistributionChannel&#x3D;&#39;{DistributionChannel}&#39;,Division&#x3D;&#39;{Division}&#39;)/to_SlsAreaAddrDepdntInfo | Retrieves address dependent customer sales area data. |
| [**aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSlsAreaAddrDepdntInfoPost()**](SalesAreaApi.md#aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSlsAreaAddrDepdntInfoPost) | **POST** /A_CustomerSalesArea(Customer&#x3D;&#39;{Customer}&#39;,SalesOrganization&#x3D;&#39;{SalesOrganization}&#39;,DistributionChannel&#x3D;&#39;{DistributionChannel}&#39;,Division&#x3D;&#39;{Division}&#39;)/to_SlsAreaAddrDepdntInfo | Creates new address dependent customer sales area data. |
| [**aCustomerSalesAreaGet()**](SalesAreaApi.md#aCustomerSalesAreaGet) | **GET** /A_CustomerSalesArea | Retrieves customer sales area data. |
| [**aCustomerSalesAreaPost()**](SalesAreaApi.md#aCustomerSalesAreaPost) | **POST** /A_CustomerSalesArea | Creates customer sales data. |


## `aCustomerCustomerToCustomerSalesAreaGet()`

```php
aCustomerCustomerToCustomerSalesAreaGet($customer, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\BusinessPartner\Model\Wrapper38
```

Retrieves customer sales area data.

Retrieves customer sales area data fields of all the available records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SalesAreaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aCustomerCustomerToCustomerSalesAreaGet($customer, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesAreaApi->aCustomerCustomerToCustomerSalesAreaGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper38**](../Model/Wrapper38.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerCustomerToCustomerSalesAreaPost()`

```php
aCustomerCustomerToCustomerSalesAreaPost($customer, $apibusinesspartnera_customer_sales_area_type_create): \BeLenka\SAP\BusinessPartner\Model\ACustomerSalesAreaType
```

Creates customer sales data.

Creates sales data linked to a customer including Sales Area Tax, Partner Functions, and Sales Area Text.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SalesAreaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$apibusinesspartnera_customer_sales_area_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerSalesAreaTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerSalesAreaTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerCustomerToCustomerSalesAreaPost($customer, $apibusinesspartnera_customer_sales_area_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesAreaApi->aCustomerCustomerToCustomerSalesAreaPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **apibusinesspartnera_customer_sales_area_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerSalesAreaTypeCreate**](../Model/APIBUSINESSPARTNERACustomerSalesAreaTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustomerSalesAreaType**](../Model/ACustomerSalesAreaType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionGet()`

```php
aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionGet($customer, $sales_organization, $distribution_channel, $division, $select, $expand): \BeLenka\SAP\BusinessPartner\Model\ACustomerSalesAreaType
```

Retrieves customer sales area data by key fields.

Retrieves customer sales area data by using Customer, SalesOrganization, DistributionChannel and Division.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SalesAreaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$sales_organization = 'sales_organization_example'; // string | Sales Organization
$distribution_channel = 'distribution_channel_example'; // string | Distribution Channel
$division = 'division_example'; // string | Division
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionGet($customer, $sales_organization, $distribution_channel, $division, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesAreaApi->aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **sales_organization** | **string**| Sales Organization | |
| **distribution_channel** | **string**| Distribution Channel | |
| **division** | **string**| Division | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustomerSalesAreaType**](../Model/ACustomerSalesAreaType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionPatch()`

```php
aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionPatch($customer, $sales_organization, $distribution_channel, $division, $modified_a_customer_sales_area_type)
```

Updates customer sales data.

Updates sales data identified by Customer, SalesOrganization, DistributionChannel and Division.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SalesAreaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$sales_organization = 'sales_organization_example'; // string | Sales Organization
$distribution_channel = 'distribution_channel_example'; // string | Distribution Channel
$division = 'division_example'; // string | Division
$modified_a_customer_sales_area_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedACustomerSalesAreaType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedACustomerSalesAreaType | New property values

try {
    $apiInstance->aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionPatch($customer, $sales_organization, $distribution_channel, $division, $modified_a_customer_sales_area_type);
} catch (Exception $e) {
    echo 'Exception when calling SalesAreaApi->aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **sales_organization** | **string**| Sales Organization | |
| **distribution_channel** | **string**| Distribution Channel | |
| **division** | **string**| Division | |
| **modified_a_customer_sales_area_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedACustomerSalesAreaType**](../Model/ModifiedACustomerSalesAreaType.md)| New property values | |

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

## `aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToPartnerFunctionGet()`

```php
aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToPartnerFunctionGet($customer, $sales_organization, $distribution_channel, $division, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper46
```

Retrieves customer sales area partner function records.

Retrieves partner function fields of all the available records in the system linked to customer sales areas.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SalesAreaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$sales_organization = 'sales_organization_example'; // string | Sales Organization
$distribution_channel = 'distribution_channel_example'; // string | Distribution Channel
$division = 'division_example'; // string | Division
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToPartnerFunctionGet($customer, $sales_organization, $distribution_channel, $division, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesAreaApi->aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToPartnerFunctionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **sales_organization** | **string**| Sales Organization | |
| **distribution_channel** | **string**| Distribution Channel | |
| **division** | **string**| Division | |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper46**](../Model/Wrapper46.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToPartnerFunctionPost()`

```php
aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToPartnerFunctionPost($customer, $sales_organization, $distribution_channel, $division, $apibusinesspartnera_cust_sales_partner_func_type_create): \BeLenka\SAP\BusinessPartner\Model\ACustSalesPartnerFuncType
```

Creates a new partner function record linked to customer sales area.

Adds a new partner function record. Partner counter will be automatically determined if a similar partner function already exist.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SalesAreaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$sales_organization = 'sales_organization_example'; // string | Sales Organization
$distribution_channel = 'distribution_channel_example'; // string | Distribution Channel
$division = 'division_example'; // string | Division
$apibusinesspartnera_cust_sales_partner_func_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustSalesPartnerFuncTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustSalesPartnerFuncTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToPartnerFunctionPost($customer, $sales_organization, $distribution_channel, $division, $apibusinesspartnera_cust_sales_partner_func_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesAreaApi->aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToPartnerFunctionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **sales_organization** | **string**| Sales Organization | |
| **distribution_channel** | **string**| Distribution Channel | |
| **division** | **string**| Division | |
| **apibusinesspartnera_cust_sales_partner_func_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustSalesPartnerFuncTypeCreate**](../Model/APIBUSINESSPARTNERACustSalesPartnerFuncTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustSalesPartnerFuncType**](../Model/ACustSalesPartnerFuncType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSalesAreaTaxGet()`

```php
aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSalesAreaTaxGet($customer, $sales_organization, $distribution_channel, $division, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\BusinessPartner\Model\Wrapper47
```

Retrieves customer sales area data.

Retrieves customer sales area data fields of all the available records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SalesAreaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$sales_organization = 'sales_organization_example'; // string | Sales Organization
$distribution_channel = 'distribution_channel_example'; // string | Distribution Channel
$division = 'division_example'; // string | Division
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSalesAreaTaxGet($customer, $sales_organization, $distribution_channel, $division, $top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesAreaApi->aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSalesAreaTaxGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **sales_organization** | **string**| Sales Organization | |
| **distribution_channel** | **string**| Distribution Channel | |
| **division** | **string**| Division | |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper47**](../Model/Wrapper47.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSalesAreaTaxPost()`

```php
aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSalesAreaTaxPost($customer, $sales_organization, $distribution_channel, $division, $apibusinesspartnera_customer_sales_area_tax_type_create): \BeLenka\SAP\BusinessPartner\Model\ACustomerSalesAreaTaxType
```

Retrieves customer sales area tax data.

Retrieves customer sales area tax data fields of all the available records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SalesAreaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$sales_organization = 'sales_organization_example'; // string | Sales Organization
$distribution_channel = 'distribution_channel_example'; // string | Distribution Channel
$division = 'division_example'; // string | Division
$apibusinesspartnera_customer_sales_area_tax_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerSalesAreaTaxTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerSalesAreaTaxTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSalesAreaTaxPost($customer, $sales_organization, $distribution_channel, $division, $apibusinesspartnera_customer_sales_area_tax_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesAreaApi->aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSalesAreaTaxPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **sales_organization** | **string**| Sales Organization | |
| **distribution_channel** | **string**| Distribution Channel | |
| **division** | **string**| Division | |
| **apibusinesspartnera_customer_sales_area_tax_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerSalesAreaTaxTypeCreate**](../Model/APIBUSINESSPARTNERACustomerSalesAreaTaxTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustomerSalesAreaTaxType**](../Model/ACustomerSalesAreaTaxType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSalesAreaTextGet()`

```php
aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSalesAreaTextGet($customer, $sales_organization, $distribution_channel, $division, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper48
```

Retrieves customer sales area text data.

Retrieves customer sales area text  fields of all the available records in the system linked to customer sales areas.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SalesAreaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$sales_organization = 'sales_organization_example'; // string | Sales Organization
$distribution_channel = 'distribution_channel_example'; // string | Distribution Channel
$division = 'division_example'; // string | Division
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSalesAreaTextGet($customer, $sales_organization, $distribution_channel, $division, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesAreaApi->aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSalesAreaTextGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **sales_organization** | **string**| Sales Organization | |
| **distribution_channel** | **string**| Distribution Channel | |
| **division** | **string**| Division | |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper48**](../Model/Wrapper48.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSalesAreaTextPost()`

```php
aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSalesAreaTextPost($customer, $sales_organization, $distribution_channel, $division, $apibusinesspartnera_customer_sales_area_text_type_create): \BeLenka\SAP\BusinessPartner\Model\ACustomerSalesAreaTextType
```

Creates a new customer sales area text data.

Adds new sales area text record in the language specified. If no language is specified, the text will be created in system language.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SalesAreaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$sales_organization = 'sales_organization_example'; // string | Sales Organization
$distribution_channel = 'distribution_channel_example'; // string | Distribution Channel
$division = 'division_example'; // string | Division
$apibusinesspartnera_customer_sales_area_text_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerSalesAreaTextTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerSalesAreaTextTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSalesAreaTextPost($customer, $sales_organization, $distribution_channel, $division, $apibusinesspartnera_customer_sales_area_text_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesAreaApi->aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSalesAreaTextPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **sales_organization** | **string**| Sales Organization | |
| **distribution_channel** | **string**| Distribution Channel | |
| **division** | **string**| Division | |
| **apibusinesspartnera_customer_sales_area_text_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerSalesAreaTextTypeCreate**](../Model/APIBUSINESSPARTNERACustomerSalesAreaTextTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustomerSalesAreaTextType**](../Model/ACustomerSalesAreaTextType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSlsAreaAddrDepdntInfoGet()`

```php
aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSlsAreaAddrDepdntInfoGet($customer, $sales_organization, $distribution_channel, $division, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper49
```

Retrieves address dependent customer sales area data.

Retrieves address dependent customer sales area data fields of all the available records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SalesAreaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$sales_organization = 'sales_organization_example'; // string | Sales Organization
$distribution_channel = 'distribution_channel_example'; // string | Distribution Channel
$division = 'division_example'; // string | Division
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSlsAreaAddrDepdntInfoGet($customer, $sales_organization, $distribution_channel, $division, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesAreaApi->aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSlsAreaAddrDepdntInfoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **sales_organization** | **string**| Sales Organization | |
| **distribution_channel** | **string**| Distribution Channel | |
| **division** | **string**| Division | |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper49**](../Model/Wrapper49.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSlsAreaAddrDepdntInfoPost()`

```php
aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSlsAreaAddrDepdntInfoPost($customer, $sales_organization, $distribution_channel, $division, $apibusinesspartnera_cust_sls_area_addr_depdnt_info_type_create): \BeLenka\SAP\BusinessPartner\Model\ACustSlsAreaAddrDepdntInfoType
```

Creates new address dependent customer sales area data.

Creates new address dependent customer sales area data.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SalesAreaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$sales_organization = 'sales_organization_example'; // string | Sales Organization
$distribution_channel = 'distribution_channel_example'; // string | Distribution Channel
$division = 'division_example'; // string | Division
$apibusinesspartnera_cust_sls_area_addr_depdnt_info_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustSlsAreaAddrDepdntInfoTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustSlsAreaAddrDepdntInfoTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSlsAreaAddrDepdntInfoPost($customer, $sales_organization, $distribution_channel, $division, $apibusinesspartnera_cust_sls_area_addr_depdnt_info_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesAreaApi->aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSlsAreaAddrDepdntInfoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **sales_organization** | **string**| Sales Organization | |
| **distribution_channel** | **string**| Distribution Channel | |
| **division** | **string**| Division | |
| **apibusinesspartnera_cust_sls_area_addr_depdnt_info_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustSlsAreaAddrDepdntInfoTypeCreate**](../Model/APIBUSINESSPARTNERACustSlsAreaAddrDepdntInfoTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustSlsAreaAddrDepdntInfoType**](../Model/ACustSlsAreaAddrDepdntInfoType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerSalesAreaGet()`

```php
aCustomerSalesAreaGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\BusinessPartner\Model\Wrapper38
```

Retrieves customer sales area data.

Retrieves customer sales area data fields of all the available records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SalesAreaApi(
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
    $result = $apiInstance->aCustomerSalesAreaGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesAreaApi->aCustomerSalesAreaGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper38**](../Model/Wrapper38.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerSalesAreaPost()`

```php
aCustomerSalesAreaPost($apibusinesspartnera_customer_sales_area_type_create): \BeLenka\SAP\BusinessPartner\Model\ACustomerSalesAreaType
```

Creates customer sales data.

Creates sales data linked to a customer including Sales Area Tax, Partner Functions, and Sales Area Text.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SalesAreaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnera_customer_sales_area_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerSalesAreaTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerSalesAreaTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerSalesAreaPost($apibusinesspartnera_customer_sales_area_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesAreaApi->aCustomerSalesAreaPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnera_customer_sales_area_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerSalesAreaTypeCreate**](../Model/APIBUSINESSPARTNERACustomerSalesAreaTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustomerSalesAreaType**](../Model/ACustomerSalesAreaType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
