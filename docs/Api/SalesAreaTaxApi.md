# BeLenka\SAP\BusinessPartner\SalesAreaTaxApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSalesAreaTaxGet()**](SalesAreaTaxApi.md#aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSalesAreaTaxGet) | **GET** /A_CustomerSalesArea(Customer&#x3D;&#39;{Customer}&#39;,SalesOrganization&#x3D;&#39;{SalesOrganization}&#39;,DistributionChannel&#x3D;&#39;{DistributionChannel}&#39;,Division&#x3D;&#39;{Division}&#39;)/to_SalesAreaTax | Retrieves customer sales area data. |
| [**aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSalesAreaTaxPost()**](SalesAreaTaxApi.md#aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSalesAreaTaxPost) | **POST** /A_CustomerSalesArea(Customer&#x3D;&#39;{Customer}&#39;,SalesOrganization&#x3D;&#39;{SalesOrganization}&#39;,DistributionChannel&#x3D;&#39;{DistributionChannel}&#39;,Division&#x3D;&#39;{Division}&#39;)/to_SalesAreaTax | Retrieves customer sales area tax data. |
| [**aCustomerSalesAreaTaxCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryGet()**](SalesAreaTaxApi.md#aCustomerSalesAreaTaxCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryGet) | **GET** /A_CustomerSalesAreaTax(Customer&#x3D;&#39;{Customer}&#39;,SalesOrganization&#x3D;&#39;{SalesOrganization}&#39;,DistributionChannel&#x3D;&#39;{DistributionChannel}&#39;,Division&#x3D;&#39;{Division}&#39;,DepartureCountry&#x3D;&#39;{DepartureCountry}&#39;,CustomerTaxCategory&#x3D;&#39;{CustomerTaxCategory}&#39;) | Retrieves customer sales area tax data using key fields. |
| [**aCustomerSalesAreaTaxCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryPatch()**](SalesAreaTaxApi.md#aCustomerSalesAreaTaxCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryPatch) | **PATCH** /A_CustomerSalesAreaTax(Customer&#x3D;&#39;{Customer}&#39;,SalesOrganization&#x3D;&#39;{SalesOrganization}&#39;,DistributionChannel&#x3D;&#39;{DistributionChannel}&#39;,Division&#x3D;&#39;{Division}&#39;,DepartureCountry&#x3D;&#39;{DepartureCountry}&#39;,CustomerTaxCategory&#x3D;&#39;{CustomerTaxCategory}&#39;) | Deletes customer sales area tax data. |
| [**aCustomerSalesAreaTaxCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryToSlsAreaAddrDepdntTaxGet()**](SalesAreaTaxApi.md#aCustomerSalesAreaTaxCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryToSlsAreaAddrDepdntTaxGet) | **GET** /A_CustomerSalesAreaTax(Customer&#x3D;&#39;{Customer}&#39;,SalesOrganization&#x3D;&#39;{SalesOrganization}&#39;,DistributionChannel&#x3D;&#39;{DistributionChannel}&#39;,Division&#x3D;&#39;{Division}&#39;,DepartureCountry&#x3D;&#39;{DepartureCountry}&#39;,CustomerTaxCategory&#x3D;&#39;{CustomerTaxCategory}&#39;)/to_SlsAreaAddrDepdntTax | Retrieves address dependent customer sales area tax data. |
| [**aCustomerSalesAreaTaxCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryToSlsAreaAddrDepdntTaxPost()**](SalesAreaTaxApi.md#aCustomerSalesAreaTaxCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryToSlsAreaAddrDepdntTaxPost) | **POST** /A_CustomerSalesAreaTax(Customer&#x3D;&#39;{Customer}&#39;,SalesOrganization&#x3D;&#39;{SalesOrganization}&#39;,DistributionChannel&#x3D;&#39;{DistributionChannel}&#39;,Division&#x3D;&#39;{Division}&#39;,DepartureCountry&#x3D;&#39;{DepartureCountry}&#39;,CustomerTaxCategory&#x3D;&#39;{CustomerTaxCategory}&#39;)/to_SlsAreaAddrDepdntTax | Creates new address dependent customer sales area tax data. |
| [**aCustomerSalesAreaTaxGet()**](SalesAreaTaxApi.md#aCustomerSalesAreaTaxGet) | **GET** /A_CustomerSalesAreaTax | Retrieves customer sales area tax data. |
| [**aCustomerSalesAreaTaxPost()**](SalesAreaTaxApi.md#aCustomerSalesAreaTaxPost) | **POST** /A_CustomerSalesAreaTax | Creates customer sales area tax data. |


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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SalesAreaTaxApi(
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
    echo 'Exception when calling SalesAreaTaxApi->aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSalesAreaTaxGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SalesAreaTaxApi(
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
    echo 'Exception when calling SalesAreaTaxApi->aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSalesAreaTaxPost: ', $e->getMessage(), PHP_EOL;
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

## `aCustomerSalesAreaTaxCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryGet()`

```php
aCustomerSalesAreaTaxCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryGet($customer, $sales_organization, $distribution_channel, $division, $departure_country, $customer_tax_category, $select, $expand): \BeLenka\SAP\BusinessPartner\Model\ACustomerSalesAreaTaxType
```

Retrieves customer sales area tax data using key fields.

Get sales area tax data by Customer, SalesOrganization, DistributionChannel, Division, DepartureCountry and CustomerTaxCategory

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SalesAreaTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$sales_organization = 'sales_organization_example'; // string | Sales Organization
$distribution_channel = 'distribution_channel_example'; // string | Reference distrib.channel for cust.and material masters
$division = 'division_example'; // string | Division
$departure_country = 'departure_country_example'; // string | Departure Country/Region (from which the goods are sent)
$customer_tax_category = 'customer_tax_category_example'; // string | Tax Condition Type (Sales Tax, Value-Added Tax,...)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aCustomerSalesAreaTaxCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryGet($customer, $sales_organization, $distribution_channel, $division, $departure_country, $customer_tax_category, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesAreaTaxApi->aCustomerSalesAreaTaxCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **sales_organization** | **string**| Sales Organization | |
| **distribution_channel** | **string**| Reference distrib.channel for cust.and material masters | |
| **division** | **string**| Division | |
| **departure_country** | **string**| Departure Country/Region (from which the goods are sent) | |
| **customer_tax_category** | **string**| Tax Condition Type (Sales Tax, Value-Added Tax,...) | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustomerSalesAreaTaxType**](../Model/ACustomerSalesAreaTaxType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerSalesAreaTaxCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryPatch()`

```php
aCustomerSalesAreaTaxCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryPatch($customer, $sales_organization, $distribution_channel, $division, $departure_country, $customer_tax_category, $modified_a_customer_sales_area_tax_type)
```

Deletes customer sales area tax data.

Deletes customer sales area tax data from the sales record linked to the customer.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SalesAreaTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$sales_organization = 'sales_organization_example'; // string | Sales Organization
$distribution_channel = 'distribution_channel_example'; // string | Reference distrib.channel for cust.and material masters
$division = 'division_example'; // string | Division
$departure_country = 'departure_country_example'; // string | Departure Country/Region (from which the goods are sent)
$customer_tax_category = 'customer_tax_category_example'; // string | Tax Condition Type (Sales Tax, Value-Added Tax,...)
$modified_a_customer_sales_area_tax_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedACustomerSalesAreaTaxType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedACustomerSalesAreaTaxType | New property values

try {
    $apiInstance->aCustomerSalesAreaTaxCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryPatch($customer, $sales_organization, $distribution_channel, $division, $departure_country, $customer_tax_category, $modified_a_customer_sales_area_tax_type);
} catch (Exception $e) {
    echo 'Exception when calling SalesAreaTaxApi->aCustomerSalesAreaTaxCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **sales_organization** | **string**| Sales Organization | |
| **distribution_channel** | **string**| Reference distrib.channel for cust.and material masters | |
| **division** | **string**| Division | |
| **departure_country** | **string**| Departure Country/Region (from which the goods are sent) | |
| **customer_tax_category** | **string**| Tax Condition Type (Sales Tax, Value-Added Tax,...) | |
| **modified_a_customer_sales_area_tax_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedACustomerSalesAreaTaxType**](../Model/ModifiedACustomerSalesAreaTaxType.md)| New property values | |

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

## `aCustomerSalesAreaTaxCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryToSlsAreaAddrDepdntTaxGet()`

```php
aCustomerSalesAreaTaxCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryToSlsAreaAddrDepdntTaxGet($customer, $sales_organization, $distribution_channel, $division, $departure_country, $customer_tax_category, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper50
```

Retrieves address dependent customer sales area tax data.

Retrieves address dependent customer sales area tax data fields of all the available records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SalesAreaTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$sales_organization = 'sales_organization_example'; // string | Sales Organization
$distribution_channel = 'distribution_channel_example'; // string | Reference distrib.channel for cust.and material masters
$division = 'division_example'; // string | Division
$departure_country = 'departure_country_example'; // string | Departure Country/Region (from which the goods are sent)
$customer_tax_category = 'customer_tax_category_example'; // string | Tax Condition Type (Sales Tax, Value-Added Tax,...)
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aCustomerSalesAreaTaxCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryToSlsAreaAddrDepdntTaxGet($customer, $sales_organization, $distribution_channel, $division, $departure_country, $customer_tax_category, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesAreaTaxApi->aCustomerSalesAreaTaxCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryToSlsAreaAddrDepdntTaxGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **sales_organization** | **string**| Sales Organization | |
| **distribution_channel** | **string**| Reference distrib.channel for cust.and material masters | |
| **division** | **string**| Division | |
| **departure_country** | **string**| Departure Country/Region (from which the goods are sent) | |
| **customer_tax_category** | **string**| Tax Condition Type (Sales Tax, Value-Added Tax,...) | |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper50**](../Model/Wrapper50.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerSalesAreaTaxCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryToSlsAreaAddrDepdntTaxPost()`

```php
aCustomerSalesAreaTaxCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryToSlsAreaAddrDepdntTaxPost($customer, $sales_organization, $distribution_channel, $division, $departure_country, $customer_tax_category, $apibusinesspartnera_cust_sls_area_addr_depdnt_tax_info_type_create): \BeLenka\SAP\BusinessPartner\Model\ACustSlsAreaAddrDepdntTaxInfoType
```

Creates new address dependent customer sales area tax data.

Creates new address dependent customer sales area tax data.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SalesAreaTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$sales_organization = 'sales_organization_example'; // string | Sales Organization
$distribution_channel = 'distribution_channel_example'; // string | Reference distrib.channel for cust.and material masters
$division = 'division_example'; // string | Division
$departure_country = 'departure_country_example'; // string | Departure Country/Region (from which the goods are sent)
$customer_tax_category = 'customer_tax_category_example'; // string | Tax Condition Type (Sales Tax, Value-Added Tax,...)
$apibusinesspartnera_cust_sls_area_addr_depdnt_tax_info_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustSlsAreaAddrDepdntTaxInfoTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustSlsAreaAddrDepdntTaxInfoTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerSalesAreaTaxCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryToSlsAreaAddrDepdntTaxPost($customer, $sales_organization, $distribution_channel, $division, $departure_country, $customer_tax_category, $apibusinesspartnera_cust_sls_area_addr_depdnt_tax_info_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesAreaTaxApi->aCustomerSalesAreaTaxCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryToSlsAreaAddrDepdntTaxPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **sales_organization** | **string**| Sales Organization | |
| **distribution_channel** | **string**| Reference distrib.channel for cust.and material masters | |
| **division** | **string**| Division | |
| **departure_country** | **string**| Departure Country/Region (from which the goods are sent) | |
| **customer_tax_category** | **string**| Tax Condition Type (Sales Tax, Value-Added Tax,...) | |
| **apibusinesspartnera_cust_sls_area_addr_depdnt_tax_info_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustSlsAreaAddrDepdntTaxInfoTypeCreate**](../Model/APIBUSINESSPARTNERACustSlsAreaAddrDepdntTaxInfoTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustSlsAreaAddrDepdntTaxInfoType**](../Model/ACustSlsAreaAddrDepdntTaxInfoType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerSalesAreaTaxGet()`

```php
aCustomerSalesAreaTaxGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\BusinessPartner\Model\Wrapper47
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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SalesAreaTaxApi(
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
    $result = $apiInstance->aCustomerSalesAreaTaxGet($top, $skip, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesAreaTaxApi->aCustomerSalesAreaTaxGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper47**](../Model/Wrapper47.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerSalesAreaTaxPost()`

```php
aCustomerSalesAreaTaxPost($apibusinesspartnera_customer_sales_area_tax_type_create): \BeLenka\SAP\BusinessPartner\Model\ACustomerSalesAreaTaxType
```

Creates customer sales area tax data.

Creates customer sales area tax data in the sales record linked to the customer.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SalesAreaTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnera_customer_sales_area_tax_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerSalesAreaTaxTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerSalesAreaTaxTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerSalesAreaTaxPost($apibusinesspartnera_customer_sales_area_tax_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesAreaTaxApi->aCustomerSalesAreaTaxPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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
