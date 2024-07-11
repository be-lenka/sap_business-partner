# BeLenka\SAP\BusinessPartner\CustomerSalesAreaAddressDependentInformationApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aCustSlsAreaAddrDepdntInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDDelete()**](CustomerSalesAreaAddressDependentInformationApi.md#aCustSlsAreaAddrDepdntInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDDelete) | **DELETE** /A_CustSlsAreaAddrDepdntInfo(Customer&#x3D;&#39;{Customer}&#39;,SalesOrganization&#x3D;&#39;{SalesOrganization}&#39;,DistributionChannel&#x3D;&#39;{DistributionChannel}&#39;,Division&#x3D;&#39;{Division}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;) | Deletes address dependent customer sales area data. |
| [**aCustSlsAreaAddrDepdntInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDGet()**](CustomerSalesAreaAddressDependentInformationApi.md#aCustSlsAreaAddrDepdntInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDGet) | **GET** /A_CustSlsAreaAddrDepdntInfo(Customer&#x3D;&#39;{Customer}&#39;,SalesOrganization&#x3D;&#39;{SalesOrganization}&#39;,DistributionChannel&#x3D;&#39;{DistributionChannel}&#39;,Division&#x3D;&#39;{Division}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;) | Retrieves address dependent customer sales area data by using key fields. |
| [**aCustSlsAreaAddrDepdntInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDPatch()**](CustomerSalesAreaAddressDependentInformationApi.md#aCustSlsAreaAddrDepdntInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDPatch) | **PATCH** /A_CustSlsAreaAddrDepdntInfo(Customer&#x3D;&#39;{Customer}&#39;,SalesOrganization&#x3D;&#39;{SalesOrganization}&#39;,DistributionChannel&#x3D;&#39;{DistributionChannel}&#39;,Division&#x3D;&#39;{Division}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;) | Updates address dependent customer sales area data. |
| [**aCustSlsAreaAddrDepdntInfoGet()**](CustomerSalesAreaAddressDependentInformationApi.md#aCustSlsAreaAddrDepdntInfoGet) | **GET** /A_CustSlsAreaAddrDepdntInfo | Retrieves address dependent customer sales area data. |
| [**aCustSlsAreaAddrDepdntInfoPost()**](CustomerSalesAreaAddressDependentInformationApi.md#aCustSlsAreaAddrDepdntInfoPost) | **POST** /A_CustSlsAreaAddrDepdntInfo | Creates new address dependent customer sales area data. |
| [**aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSlsAreaAddrDepdntInfoGet()**](CustomerSalesAreaAddressDependentInformationApi.md#aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSlsAreaAddrDepdntInfoGet) | **GET** /A_CustomerSalesArea(Customer&#x3D;&#39;{Customer}&#39;,SalesOrganization&#x3D;&#39;{SalesOrganization}&#39;,DistributionChannel&#x3D;&#39;{DistributionChannel}&#39;,Division&#x3D;&#39;{Division}&#39;)/to_SlsAreaAddrDepdntInfo | Retrieves address dependent customer sales area data. |
| [**aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSlsAreaAddrDepdntInfoPost()**](CustomerSalesAreaAddressDependentInformationApi.md#aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSlsAreaAddrDepdntInfoPost) | **POST** /A_CustomerSalesArea(Customer&#x3D;&#39;{Customer}&#39;,SalesOrganization&#x3D;&#39;{SalesOrganization}&#39;,DistributionChannel&#x3D;&#39;{DistributionChannel}&#39;,Division&#x3D;&#39;{Division}&#39;)/to_SlsAreaAddrDepdntInfo | Creates new address dependent customer sales area data. |


## `aCustSlsAreaAddrDepdntInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDDelete()`

```php
aCustSlsAreaAddrDepdntInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDDelete($customer, $sales_organization, $distribution_channel, $division, $address_id)
```

Deletes address dependent customer sales area data.

Deletes address dependent customer sales area data.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerSalesAreaAddressDependentInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$sales_organization = 'sales_organization_example'; // string | Sales Organization
$distribution_channel = 'distribution_channel_example'; // string | Distribution Channel
$division = 'division_example'; // string | Division
$address_id = 'address_id_example'; // string | Business Partner Address Number (from BUT020)

try {
    $apiInstance->aCustSlsAreaAddrDepdntInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDDelete($customer, $sales_organization, $distribution_channel, $division, $address_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerSalesAreaAddressDependentInformationApi->aCustSlsAreaAddrDepdntInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **sales_organization** | **string**| Sales Organization | |
| **distribution_channel** | **string**| Distribution Channel | |
| **division** | **string**| Division | |
| **address_id** | **string**| Business Partner Address Number (from BUT020) | |

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

## `aCustSlsAreaAddrDepdntInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDGet()`

```php
aCustSlsAreaAddrDepdntInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDGet($customer, $sales_organization, $distribution_channel, $division, $address_id, $select): \BeLenka\SAP\BusinessPartner\Model\ACustSlsAreaAddrDepdntInfoType
```

Retrieves address dependent customer sales area data by using key fields.

Retrieves address dependent customer sales area data by using key fields.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerSalesAreaAddressDependentInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$sales_organization = 'sales_organization_example'; // string | Sales Organization
$distribution_channel = 'distribution_channel_example'; // string | Distribution Channel
$division = 'division_example'; // string | Division
$address_id = 'address_id_example'; // string | Business Partner Address Number (from BUT020)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aCustSlsAreaAddrDepdntInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDGet($customer, $sales_organization, $distribution_channel, $division, $address_id, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerSalesAreaAddressDependentInformationApi->aCustSlsAreaAddrDepdntInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **sales_organization** | **string**| Sales Organization | |
| **distribution_channel** | **string**| Distribution Channel | |
| **division** | **string**| Division | |
| **address_id** | **string**| Business Partner Address Number (from BUT020) | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustSlsAreaAddrDepdntInfoType**](../Model/ACustSlsAreaAddrDepdntInfoType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustSlsAreaAddrDepdntInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDPatch()`

```php
aCustSlsAreaAddrDepdntInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDPatch($customer, $sales_organization, $distribution_channel, $division, $address_id, $modified_a_cust_sls_area_addr_depdnt_info_type)
```

Updates address dependent customer sales area data.

Updates address dependent customer sales area data.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerSalesAreaAddressDependentInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$sales_organization = 'sales_organization_example'; // string | Sales Organization
$distribution_channel = 'distribution_channel_example'; // string | Distribution Channel
$division = 'division_example'; // string | Division
$address_id = 'address_id_example'; // string | Business Partner Address Number (from BUT020)
$modified_a_cust_sls_area_addr_depdnt_info_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedACustSlsAreaAddrDepdntInfoType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedACustSlsAreaAddrDepdntInfoType | New property values

try {
    $apiInstance->aCustSlsAreaAddrDepdntInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDPatch($customer, $sales_organization, $distribution_channel, $division, $address_id, $modified_a_cust_sls_area_addr_depdnt_info_type);
} catch (Exception $e) {
    echo 'Exception when calling CustomerSalesAreaAddressDependentInformationApi->aCustSlsAreaAddrDepdntInfoCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionAddressIDAddressIDPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **sales_organization** | **string**| Sales Organization | |
| **distribution_channel** | **string**| Distribution Channel | |
| **division** | **string**| Division | |
| **address_id** | **string**| Business Partner Address Number (from BUT020) | |
| **modified_a_cust_sls_area_addr_depdnt_info_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedACustSlsAreaAddrDepdntInfoType**](../Model/ModifiedACustSlsAreaAddrDepdntInfoType.md)| New property values | |

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

## `aCustSlsAreaAddrDepdntInfoGet()`

```php
aCustSlsAreaAddrDepdntInfoGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper49
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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerSalesAreaAddressDependentInformationApi(
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
    $result = $apiInstance->aCustSlsAreaAddrDepdntInfoGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerSalesAreaAddressDependentInformationApi->aCustSlsAreaAddrDepdntInfoGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper49**](../Model/Wrapper49.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustSlsAreaAddrDepdntInfoPost()`

```php
aCustSlsAreaAddrDepdntInfoPost($apibusinesspartnera_cust_sls_area_addr_depdnt_info_type_create): \BeLenka\SAP\BusinessPartner\Model\ACustSlsAreaAddrDepdntInfoType
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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerSalesAreaAddressDependentInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnera_cust_sls_area_addr_depdnt_info_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustSlsAreaAddrDepdntInfoTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustSlsAreaAddrDepdntInfoTypeCreate | New entity

try {
    $result = $apiInstance->aCustSlsAreaAddrDepdntInfoPost($apibusinesspartnera_cust_sls_area_addr_depdnt_info_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerSalesAreaAddressDependentInformationApi->aCustSlsAreaAddrDepdntInfoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerSalesAreaAddressDependentInformationApi(
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
    echo 'Exception when calling CustomerSalesAreaAddressDependentInformationApi->aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSlsAreaAddrDepdntInfoGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerSalesAreaAddressDependentInformationApi(
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
    echo 'Exception when calling CustomerSalesAreaAddressDependentInformationApi->aCustomerSalesAreaCustomerCustomerSalesOrganizationSalesOrganizationDistributionChannelDistributionChannelDivisionDivisionToSlsAreaAddrDepdntInfoPost: ', $e->getMessage(), PHP_EOL;
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
