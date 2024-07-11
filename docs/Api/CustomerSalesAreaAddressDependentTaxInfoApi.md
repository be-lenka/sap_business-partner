# BeLenka\SAP\BusinessPartner\CustomerSalesAreaAddressDependentTaxInfoApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aCustSlsAreaAddrDepdntTaxInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryDelete()**](CustomerSalesAreaAddressDependentTaxInfoApi.md#aCustSlsAreaAddrDepdntTaxInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryDelete) | **DELETE** /A_CustSlsAreaAddrDepdntTaxInfo(Customer&#x3D;&#39;{Customer}&#39;,SalesOrganization&#x3D;&#39;{SalesOrganization}&#39;,DistributionChannel&#x3D;&#39;{DistributionChannel}&#39;,Division&#x3D;&#39;{Division}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;,DepartureCountry&#x3D;&#39;{DepartureCountry}&#39;,CustomerTaxCategory&#x3D;&#39;{CustomerTaxCategory}&#39;) | Deletes address dependent customer sales area tax data. |
| [**aCustSlsAreaAddrDepdntTaxInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryGet()**](CustomerSalesAreaAddressDependentTaxInfoApi.md#aCustSlsAreaAddrDepdntTaxInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryGet) | **GET** /A_CustSlsAreaAddrDepdntTaxInfo(Customer&#x3D;&#39;{Customer}&#39;,SalesOrganization&#x3D;&#39;{SalesOrganization}&#39;,DistributionChannel&#x3D;&#39;{DistributionChannel}&#39;,Division&#x3D;&#39;{Division}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;,DepartureCountry&#x3D;&#39;{DepartureCountry}&#39;,CustomerTaxCategory&#x3D;&#39;{CustomerTaxCategory}&#39;) | Retrieves address dependent customer sales area tax data by using key fields. |
| [**aCustSlsAreaAddrDepdntTaxInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryPatch()**](CustomerSalesAreaAddressDependentTaxInfoApi.md#aCustSlsAreaAddrDepdntTaxInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryPatch) | **PATCH** /A_CustSlsAreaAddrDepdntTaxInfo(Customer&#x3D;&#39;{Customer}&#39;,SalesOrganization&#x3D;&#39;{SalesOrganization}&#39;,DistributionChannel&#x3D;&#39;{DistributionChannel}&#39;,Division&#x3D;&#39;{Division}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;,DepartureCountry&#x3D;&#39;{DepartureCountry}&#39;,CustomerTaxCategory&#x3D;&#39;{CustomerTaxCategory}&#39;) | Updates address dependent customer sales area tax data. |
| [**aCustSlsAreaAddrDepdntTaxInfoGet()**](CustomerSalesAreaAddressDependentTaxInfoApi.md#aCustSlsAreaAddrDepdntTaxInfoGet) | **GET** /A_CustSlsAreaAddrDepdntTaxInfo | Retrieves address dependent customer sales area tax data. |
| [**aCustSlsAreaAddrDepdntTaxInfoPost()**](CustomerSalesAreaAddressDependentTaxInfoApi.md#aCustSlsAreaAddrDepdntTaxInfoPost) | **POST** /A_CustSlsAreaAddrDepdntTaxInfo | Creates new address dependent customer sales area tax data. |
| [**aCustomerSalesAreaTaxCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryToSlsAreaAddrDepdntTaxGet()**](CustomerSalesAreaAddressDependentTaxInfoApi.md#aCustomerSalesAreaTaxCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryToSlsAreaAddrDepdntTaxGet) | **GET** /A_CustomerSalesAreaTax(Customer&#x3D;&#39;{Customer}&#39;,SalesOrganization&#x3D;&#39;{SalesOrganization}&#39;,DistributionChannel&#x3D;&#39;{DistributionChannel}&#39;,Division&#x3D;&#39;{Division}&#39;,DepartureCountry&#x3D;&#39;{DepartureCountry}&#39;,CustomerTaxCategory&#x3D;&#39;{CustomerTaxCategory}&#39;)/to_SlsAreaAddrDepdntTax | Retrieves address dependent customer sales area tax data. |
| [**aCustomerSalesAreaTaxCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryToSlsAreaAddrDepdntTaxPost()**](CustomerSalesAreaAddressDependentTaxInfoApi.md#aCustomerSalesAreaTaxCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryToSlsAreaAddrDepdntTaxPost) | **POST** /A_CustomerSalesAreaTax(Customer&#x3D;&#39;{Customer}&#39;,SalesOrganization&#x3D;&#39;{SalesOrganization}&#39;,DistributionChannel&#x3D;&#39;{DistributionChannel}&#39;,Division&#x3D;&#39;{Division}&#39;,DepartureCountry&#x3D;&#39;{DepartureCountry}&#39;,CustomerTaxCategory&#x3D;&#39;{CustomerTaxCategory}&#39;)/to_SlsAreaAddrDepdntTax | Creates new address dependent customer sales area tax data. |


## `aCustSlsAreaAddrDepdntTaxInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryDelete()`

```php
aCustSlsAreaAddrDepdntTaxInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryDelete($customer, $sales_organization, $distribution_channel, $division, $address_id, $departure_country, $customer_tax_category)
```

Deletes address dependent customer sales area tax data.

Deletes address dependent customer sales area tax data.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerSalesAreaAddressDependentTaxInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$sales_organization = 'sales_organization_example'; // string | Sales Organization
$distribution_channel = 'distribution_channel_example'; // string | Reference distrib.channel for cust.and material masters
$division = 'division_example'; // string | Division
$address_id = 'address_id_example'; // string | Business Partner Address Number (from BUT020)
$departure_country = 'departure_country_example'; // string | Departure Country/Region (from which the goods are sent)
$customer_tax_category = 'customer_tax_category_example'; // string | Tax Condition Type (Sales Tax, Value-Added Tax,...)

try {
    $apiInstance->aCustSlsAreaAddrDepdntTaxInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryDelete($customer, $sales_organization, $distribution_channel, $division, $address_id, $departure_country, $customer_tax_category);
} catch (Exception $e) {
    echo 'Exception when calling CustomerSalesAreaAddressDependentTaxInfoApi->aCustSlsAreaAddrDepdntTaxInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **sales_organization** | **string**| Sales Organization | |
| **distribution_channel** | **string**| Reference distrib.channel for cust.and material masters | |
| **division** | **string**| Division | |
| **address_id** | **string**| Business Partner Address Number (from BUT020) | |
| **departure_country** | **string**| Departure Country/Region (from which the goods are sent) | |
| **customer_tax_category** | **string**| Tax Condition Type (Sales Tax, Value-Added Tax,...) | |

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

## `aCustSlsAreaAddrDepdntTaxInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryGet()`

```php
aCustSlsAreaAddrDepdntTaxInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryGet($customer, $sales_organization, $distribution_channel, $division, $address_id, $departure_country, $customer_tax_category, $select): \BeLenka\SAP\BusinessPartner\Model\ACustSlsAreaAddrDepdntTaxInfoType
```

Retrieves address dependent customer sales area tax data by using key fields.

Retrieves address dependent customer sales area tax data by using key fields.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerSalesAreaAddressDependentTaxInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$sales_organization = 'sales_organization_example'; // string | Sales Organization
$distribution_channel = 'distribution_channel_example'; // string | Reference distrib.channel for cust.and material masters
$division = 'division_example'; // string | Division
$address_id = 'address_id_example'; // string | Business Partner Address Number (from BUT020)
$departure_country = 'departure_country_example'; // string | Departure Country/Region (from which the goods are sent)
$customer_tax_category = 'customer_tax_category_example'; // string | Tax Condition Type (Sales Tax, Value-Added Tax,...)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aCustSlsAreaAddrDepdntTaxInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryGet($customer, $sales_organization, $distribution_channel, $division, $address_id, $departure_country, $customer_tax_category, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerSalesAreaAddressDependentTaxInfoApi->aCustSlsAreaAddrDepdntTaxInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **sales_organization** | **string**| Sales Organization | |
| **distribution_channel** | **string**| Reference distrib.channel for cust.and material masters | |
| **division** | **string**| Division | |
| **address_id** | **string**| Business Partner Address Number (from BUT020) | |
| **departure_country** | **string**| Departure Country/Region (from which the goods are sent) | |
| **customer_tax_category** | **string**| Tax Condition Type (Sales Tax, Value-Added Tax,...) | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustSlsAreaAddrDepdntTaxInfoType**](../Model/ACustSlsAreaAddrDepdntTaxInfoType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustSlsAreaAddrDepdntTaxInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryPatch()`

```php
aCustSlsAreaAddrDepdntTaxInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryPatch($customer, $sales_organization, $distribution_channel, $division, $address_id, $departure_country, $customer_tax_category, $modified_a_cust_sls_area_addr_depdnt_tax_info_type)
```

Updates address dependent customer sales area tax data.

Updates address dependent customer sales area tax data.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerSalesAreaAddressDependentTaxInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$sales_organization = 'sales_organization_example'; // string | Sales Organization
$distribution_channel = 'distribution_channel_example'; // string | Reference distrib.channel for cust.and material masters
$division = 'division_example'; // string | Division
$address_id = 'address_id_example'; // string | Business Partner Address Number (from BUT020)
$departure_country = 'departure_country_example'; // string | Departure Country/Region (from which the goods are sent)
$customer_tax_category = 'customer_tax_category_example'; // string | Tax Condition Type (Sales Tax, Value-Added Tax,...)
$modified_a_cust_sls_area_addr_depdnt_tax_info_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedACustSlsAreaAddrDepdntTaxInfoType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedACustSlsAreaAddrDepdntTaxInfoType | New property values

try {
    $apiInstance->aCustSlsAreaAddrDepdntTaxInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryPatch($customer, $sales_organization, $distribution_channel, $division, $address_id, $departure_country, $customer_tax_category, $modified_a_cust_sls_area_addr_depdnt_tax_info_type);
} catch (Exception $e) {
    echo 'Exception when calling CustomerSalesAreaAddressDependentTaxInfoApi->aCustSlsAreaAddrDepdntTaxInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **sales_organization** | **string**| Sales Organization | |
| **distribution_channel** | **string**| Reference distrib.channel for cust.and material masters | |
| **division** | **string**| Division | |
| **address_id** | **string**| Business Partner Address Number (from BUT020) | |
| **departure_country** | **string**| Departure Country/Region (from which the goods are sent) | |
| **customer_tax_category** | **string**| Tax Condition Type (Sales Tax, Value-Added Tax,...) | |
| **modified_a_cust_sls_area_addr_depdnt_tax_info_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedACustSlsAreaAddrDepdntTaxInfoType**](../Model/ModifiedACustSlsAreaAddrDepdntTaxInfoType.md)| New property values | |

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

## `aCustSlsAreaAddrDepdntTaxInfoGet()`

```php
aCustSlsAreaAddrDepdntTaxInfoGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper50
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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerSalesAreaAddressDependentTaxInfoApi(
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
    $result = $apiInstance->aCustSlsAreaAddrDepdntTaxInfoGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerSalesAreaAddressDependentTaxInfoApi->aCustSlsAreaAddrDepdntTaxInfoGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper50**](../Model/Wrapper50.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustSlsAreaAddrDepdntTaxInfoPost()`

```php
aCustSlsAreaAddrDepdntTaxInfoPost($apibusinesspartnera_cust_sls_area_addr_depdnt_tax_info_type_create): \BeLenka\SAP\BusinessPartner\Model\ACustSlsAreaAddrDepdntTaxInfoType
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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerSalesAreaAddressDependentTaxInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnera_cust_sls_area_addr_depdnt_tax_info_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustSlsAreaAddrDepdntTaxInfoTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustSlsAreaAddrDepdntTaxInfoTypeCreate | New entity

try {
    $result = $apiInstance->aCustSlsAreaAddrDepdntTaxInfoPost($apibusinesspartnera_cust_sls_area_addr_depdnt_tax_info_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerSalesAreaAddressDependentTaxInfoApi->aCustSlsAreaAddrDepdntTaxInfoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerSalesAreaAddressDependentTaxInfoApi(
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
    echo 'Exception when calling CustomerSalesAreaAddressDependentTaxInfoApi->aCustomerSalesAreaTaxCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryToSlsAreaAddrDepdntTaxGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerSalesAreaAddressDependentTaxInfoApi(
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
    echo 'Exception when calling CustomerSalesAreaAddressDependentTaxInfoApi->aCustomerSalesAreaTaxCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionDepartureCountryDepartureCountryCustomerTaxCategoryCustomerTaxCategoryToSlsAreaAddrDepdntTaxPost: ', $e->getMessage(), PHP_EOL;
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
