# BeLenka\SAP\BusinessPartner\SalesPartnerFunctionsApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aCustSalesPartnerFuncCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionPartnerCounterPartnerCounterPartnerFunctionPartnerFunctionDelete()**](SalesPartnerFunctionsApi.md#aCustSalesPartnerFuncCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionPartnerCounterPartnerCounterPartnerFunctionPartnerFunctionDelete) | **DELETE** /A_CustSalesPartnerFunc(Customer&#x3D;&#39;{Customer}&#39;,SalesOrganization&#x3D;&#39;{SalesOrganization}&#39;,DistributionChannel&#x3D;&#39;{DistributionChannel}&#39;,Division&#x3D;&#39;{Division}&#39;,PartnerCounter&#x3D;&#39;{PartnerCounter}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;) | Deletes partner function record linked to customer sales area. |
| [**aCustSalesPartnerFuncCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionPartnerCounterPartnerCounterPartnerFunctionPartnerFunctionGet()**](SalesPartnerFunctionsApi.md#aCustSalesPartnerFuncCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionPartnerCounterPartnerCounterPartnerFunctionPartnerFunctionGet) | **GET** /A_CustSalesPartnerFunc(Customer&#x3D;&#39;{Customer}&#39;,SalesOrganization&#x3D;&#39;{SalesOrganization}&#39;,DistributionChannel&#x3D;&#39;{DistributionChannel}&#39;,Division&#x3D;&#39;{Division}&#39;,PartnerCounter&#x3D;&#39;{PartnerCounter}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;) | Retrieves sales area partner function data by using key fields. |
| [**aCustSalesPartnerFuncCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionPartnerCounterPartnerCounterPartnerFunctionPartnerFunctionPatch()**](SalesPartnerFunctionsApi.md#aCustSalesPartnerFuncCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionPartnerCounterPartnerCounterPartnerFunctionPartnerFunctionPatch) | **PATCH** /A_CustSalesPartnerFunc(Customer&#x3D;&#39;{Customer}&#39;,SalesOrganization&#x3D;&#39;{SalesOrganization}&#39;,DistributionChannel&#x3D;&#39;{DistributionChannel}&#39;,Division&#x3D;&#39;{Division}&#39;,PartnerCounter&#x3D;&#39;{PartnerCounter}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;) | Updates partner function record linked to customer sales area |
| [**aCustSalesPartnerFuncGet()**](SalesPartnerFunctionsApi.md#aCustSalesPartnerFuncGet) | **GET** /A_CustSalesPartnerFunc | Retrieves customer sales area partner function records. |
| [**aCustSalesPartnerFuncPost()**](SalesPartnerFunctionsApi.md#aCustSalesPartnerFuncPost) | **POST** /A_CustSalesPartnerFunc | Creates a new partner function record linked to customer sales area. |
| [**aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToPartnerFunctionGet()**](SalesPartnerFunctionsApi.md#aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToPartnerFunctionGet) | **GET** /A_CustomerSalesArea(Customer&#x3D;&#39;{Customer}&#39;,SalesOrganization&#x3D;&#39;{SalesOrganization}&#39;,DistributionChannel&#x3D;&#39;{DistributionChannel}&#39;,Division&#x3D;&#39;{Division}&#39;)/to_PartnerFunction | Retrieves customer sales area partner function records. |
| [**aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToPartnerFunctionPost()**](SalesPartnerFunctionsApi.md#aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToPartnerFunctionPost) | **POST** /A_CustomerSalesArea(Customer&#x3D;&#39;{Customer}&#39;,SalesOrganization&#x3D;&#39;{SalesOrganization}&#39;,DistributionChannel&#x3D;&#39;{DistributionChannel}&#39;,Division&#x3D;&#39;{Division}&#39;)/to_PartnerFunction | Creates a new partner function record linked to customer sales area. |


## `aCustSalesPartnerFuncCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionPartnerCounterPartnerCounterPartnerFunctionPartnerFunctionDelete()`

```php
aCustSalesPartnerFuncCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionPartnerCounterPartnerCounterPartnerFunctionPartnerFunctionDelete($customer, $sales_organization, $distribution_channel, $division, $partner_counter, $partner_function)
```

Deletes partner function record linked to customer sales area.

Deletes partner function record by Customer, SalesOrganization, DistributionChannel, Division, PartnerCounter and PartnerFunction

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SalesPartnerFunctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$sales_organization = 'sales_organization_example'; // string | Sales Organization
$distribution_channel = 'distribution_channel_example'; // string | Distribution Channel
$division = 'division_example'; // string | Division
$partner_counter = 'partner_counter_example'; // string | Partner counter
$partner_function = 'partner_function_example'; // string | Partner Function

try {
    $apiInstance->aCustSalesPartnerFuncCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionPartnerCounterPartnerCounterPartnerFunctionPartnerFunctionDelete($customer, $sales_organization, $distribution_channel, $division, $partner_counter, $partner_function);
} catch (Exception $e) {
    echo 'Exception when calling SalesPartnerFunctionsApi->aCustSalesPartnerFuncCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionPartnerCounterPartnerCounterPartnerFunctionPartnerFunctionDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **sales_organization** | **string**| Sales Organization | |
| **distribution_channel** | **string**| Distribution Channel | |
| **division** | **string**| Division | |
| **partner_counter** | **string**| Partner counter | |
| **partner_function** | **string**| Partner Function | |

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

## `aCustSalesPartnerFuncCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionPartnerCounterPartnerCounterPartnerFunctionPartnerFunctionGet()`

```php
aCustSalesPartnerFuncCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionPartnerCounterPartnerCounterPartnerFunctionPartnerFunctionGet($customer, $sales_organization, $distribution_channel, $division, $partner_counter, $partner_function, $select): \BeLenka\SAP\BusinessPartner\Model\ACustSalesPartnerFuncType
```

Retrieves sales area partner function data by using key fields.

Retrieves partner function data by Customer, SalesOrganization, DistributionChannel, Division, PartnerCounter, and PartnerFunction.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SalesPartnerFunctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$sales_organization = 'sales_organization_example'; // string | Sales Organization
$distribution_channel = 'distribution_channel_example'; // string | Distribution Channel
$division = 'division_example'; // string | Division
$partner_counter = 'partner_counter_example'; // string | Partner counter
$partner_function = 'partner_function_example'; // string | Partner Function
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aCustSalesPartnerFuncCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionPartnerCounterPartnerCounterPartnerFunctionPartnerFunctionGet($customer, $sales_organization, $distribution_channel, $division, $partner_counter, $partner_function, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesPartnerFunctionsApi->aCustSalesPartnerFuncCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionPartnerCounterPartnerCounterPartnerFunctionPartnerFunctionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **sales_organization** | **string**| Sales Organization | |
| **distribution_channel** | **string**| Distribution Channel | |
| **division** | **string**| Division | |
| **partner_counter** | **string**| Partner counter | |
| **partner_function** | **string**| Partner Function | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustSalesPartnerFuncType**](../Model/ACustSalesPartnerFuncType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustSalesPartnerFuncCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionPartnerCounterPartnerCounterPartnerFunctionPartnerFunctionPatch()`

```php
aCustSalesPartnerFuncCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionPartnerCounterPartnerCounterPartnerFunctionPartnerFunctionPatch($customer, $sales_organization, $distribution_channel, $division, $partner_counter, $partner_function, $modified_a_cust_sales_partner_func_type)
```

Updates partner function record linked to customer sales area

Updates partner function record by Customer, SalesOrganization, DistributionChannel, Division, PartnerCounter and PartnerFunction

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SalesPartnerFunctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$sales_organization = 'sales_organization_example'; // string | Sales Organization
$distribution_channel = 'distribution_channel_example'; // string | Distribution Channel
$division = 'division_example'; // string | Division
$partner_counter = 'partner_counter_example'; // string | Partner counter
$partner_function = 'partner_function_example'; // string | Partner Function
$modified_a_cust_sales_partner_func_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedACustSalesPartnerFuncType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedACustSalesPartnerFuncType | New property values

try {
    $apiInstance->aCustSalesPartnerFuncCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionPartnerCounterPartnerCounterPartnerFunctionPartnerFunctionPatch($customer, $sales_organization, $distribution_channel, $division, $partner_counter, $partner_function, $modified_a_cust_sales_partner_func_type);
} catch (Exception $e) {
    echo 'Exception when calling SalesPartnerFunctionsApi->aCustSalesPartnerFuncCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionPartnerCounterPartnerCounterPartnerFunctionPartnerFunctionPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **sales_organization** | **string**| Sales Organization | |
| **distribution_channel** | **string**| Distribution Channel | |
| **division** | **string**| Division | |
| **partner_counter** | **string**| Partner counter | |
| **partner_function** | **string**| Partner Function | |
| **modified_a_cust_sales_partner_func_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedACustSalesPartnerFuncType**](../Model/ModifiedACustSalesPartnerFuncType.md)| New property values | |

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

## `aCustSalesPartnerFuncGet()`

```php
aCustSalesPartnerFuncGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper46
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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SalesPartnerFunctionsApi(
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
    $result = $apiInstance->aCustSalesPartnerFuncGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesPartnerFunctionsApi->aCustSalesPartnerFuncGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper46**](../Model/Wrapper46.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustSalesPartnerFuncPost()`

```php
aCustSalesPartnerFuncPost($apibusinesspartnera_cust_sales_partner_func_type_create): \BeLenka\SAP\BusinessPartner\Model\ACustSalesPartnerFuncType
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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SalesPartnerFunctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnera_cust_sales_partner_func_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustSalesPartnerFuncTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustSalesPartnerFuncTypeCreate | New entity

try {
    $result = $apiInstance->aCustSalesPartnerFuncPost($apibusinesspartnera_cust_sales_partner_func_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesPartnerFunctionsApi->aCustSalesPartnerFuncPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SalesPartnerFunctionsApi(
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
    echo 'Exception when calling SalesPartnerFunctionsApi->aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToPartnerFunctionGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SalesPartnerFunctionsApi(
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
    echo 'Exception when calling SalesPartnerFunctionsApi->aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToPartnerFunctionPost: ', $e->getMessage(), PHP_EOL;
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
