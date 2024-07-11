# BeLenka\SAP\BusinessPartner\CustomerUnloadingPointAddressDependentInformationApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aCustUnldgPtAddrDepdntInfoCustomerCustomerAddressIDAddressIDUnloadingPointNameUnloadingPointNameDelete()**](CustomerUnloadingPointAddressDependentInformationApi.md#aCustUnldgPtAddrDepdntInfoCustomerCustomerAddressIDAddressIDUnloadingPointNameUnloadingPointNameDelete) | **DELETE** /A_CustUnldgPtAddrDepdntInfo(Customer&#x3D;&#39;{Customer}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;,UnloadingPointName&#x3D;&#39;{UnloadingPointName}&#39;) | Deletes address dependent customer unloading point data. |
| [**aCustUnldgPtAddrDepdntInfoCustomerCustomerAddressIDAddressIDUnloadingPointNameUnloadingPointNameGet()**](CustomerUnloadingPointAddressDependentInformationApi.md#aCustUnldgPtAddrDepdntInfoCustomerCustomerAddressIDAddressIDUnloadingPointNameUnloadingPointNameGet) | **GET** /A_CustUnldgPtAddrDepdntInfo(Customer&#x3D;&#39;{Customer}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;,UnloadingPointName&#x3D;&#39;{UnloadingPointName}&#39;) | Retrieves address dependent customer unloading point data by using key fields. |
| [**aCustUnldgPtAddrDepdntInfoCustomerCustomerAddressIDAddressIDUnloadingPointNameUnloadingPointNamePatch()**](CustomerUnloadingPointAddressDependentInformationApi.md#aCustUnldgPtAddrDepdntInfoCustomerCustomerAddressIDAddressIDUnloadingPointNameUnloadingPointNamePatch) | **PATCH** /A_CustUnldgPtAddrDepdntInfo(Customer&#x3D;&#39;{Customer}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;,UnloadingPointName&#x3D;&#39;{UnloadingPointName}&#39;) | Updates address dependent customer unloading point data. |
| [**aCustUnldgPtAddrDepdntInfoGet()**](CustomerUnloadingPointAddressDependentInformationApi.md#aCustUnldgPtAddrDepdntInfoGet) | **GET** /A_CustUnldgPtAddrDepdntInfo | Retrieves address dependent customer unloading point data. |
| [**aCustUnldgPtAddrDepdntInfoPost()**](CustomerUnloadingPointAddressDependentInformationApi.md#aCustUnldgPtAddrDepdntInfoPost) | **POST** /A_CustUnldgPtAddrDepdntInfo | Creates new address dependent customer unloading point data. |
| [**aCustomerCustomerToCustUnldgPtAddrDepdntInfoGet()**](CustomerUnloadingPointAddressDependentInformationApi.md#aCustomerCustomerToCustUnldgPtAddrDepdntInfoGet) | **GET** /A_Customer(&#39;{Customer}&#39;)/to_CustUnldgPtAddrDepdntInfo | Retrieves address dependent customer unloading point data. |
| [**aCustomerCustomerToCustUnldgPtAddrDepdntInfoPost()**](CustomerUnloadingPointAddressDependentInformationApi.md#aCustomerCustomerToCustUnldgPtAddrDepdntInfoPost) | **POST** /A_Customer(&#39;{Customer}&#39;)/to_CustUnldgPtAddrDepdntInfo | Creates new address dependent customer unloading point data. |


## `aCustUnldgPtAddrDepdntInfoCustomerCustomerAddressIDAddressIDUnloadingPointNameUnloadingPointNameDelete()`

```php
aCustUnldgPtAddrDepdntInfoCustomerCustomerAddressIDAddressIDUnloadingPointNameUnloadingPointNameDelete($customer, $address_id, $unloading_point_name)
```

Deletes address dependent customer unloading point data.

Deletes address dependent customer unloading point data by using the key fields customer number, address ID, unloading point name.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerUnloadingPointAddressDependentInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$address_id = 'address_id_example'; // string | Business Partner Address Number (from BUT020)
$unloading_point_name = 'unloading_point_name_example'; // string | Unloading Point

try {
    $apiInstance->aCustUnldgPtAddrDepdntInfoCustomerCustomerAddressIDAddressIDUnloadingPointNameUnloadingPointNameDelete($customer, $address_id, $unloading_point_name);
} catch (Exception $e) {
    echo 'Exception when calling CustomerUnloadingPointAddressDependentInformationApi->aCustUnldgPtAddrDepdntInfoCustomerCustomerAddressIDAddressIDUnloadingPointNameUnloadingPointNameDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **address_id** | **string**| Business Partner Address Number (from BUT020) | |
| **unloading_point_name** | **string**| Unloading Point | |

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

## `aCustUnldgPtAddrDepdntInfoCustomerCustomerAddressIDAddressIDUnloadingPointNameUnloadingPointNameGet()`

```php
aCustUnldgPtAddrDepdntInfoCustomerCustomerAddressIDAddressIDUnloadingPointNameUnloadingPointNameGet($customer, $address_id, $unloading_point_name, $select): \BeLenka\SAP\BusinessPartner\Model\ACustUnldgPtAddrDepdntInfoType
```

Retrieves address dependent customer unloading point data by using key fields.

Retrieves address dependent customer unloading point data by using the key fields customer number, address ID, unloading point name.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerUnloadingPointAddressDependentInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$address_id = 'address_id_example'; // string | Business Partner Address Number (from BUT020)
$unloading_point_name = 'unloading_point_name_example'; // string | Unloading Point
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aCustUnldgPtAddrDepdntInfoCustomerCustomerAddressIDAddressIDUnloadingPointNameUnloadingPointNameGet($customer, $address_id, $unloading_point_name, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerUnloadingPointAddressDependentInformationApi->aCustUnldgPtAddrDepdntInfoCustomerCustomerAddressIDAddressIDUnloadingPointNameUnloadingPointNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **address_id** | **string**| Business Partner Address Number (from BUT020) | |
| **unloading_point_name** | **string**| Unloading Point | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustUnldgPtAddrDepdntInfoType**](../Model/ACustUnldgPtAddrDepdntInfoType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustUnldgPtAddrDepdntInfoCustomerCustomerAddressIDAddressIDUnloadingPointNameUnloadingPointNamePatch()`

```php
aCustUnldgPtAddrDepdntInfoCustomerCustomerAddressIDAddressIDUnloadingPointNameUnloadingPointNamePatch($customer, $address_id, $unloading_point_name, $modified_a_cust_unldg_pt_addr_depdnt_info_type)
```

Updates address dependent customer unloading point data.

Updates address dependent customer unloading point data by using the key fields customer number, address ID, unloading point name.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerUnloadingPointAddressDependentInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$address_id = 'address_id_example'; // string | Business Partner Address Number (from BUT020)
$unloading_point_name = 'unloading_point_name_example'; // string | Unloading Point
$modified_a_cust_unldg_pt_addr_depdnt_info_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedACustUnldgPtAddrDepdntInfoType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedACustUnldgPtAddrDepdntInfoType | New property values

try {
    $apiInstance->aCustUnldgPtAddrDepdntInfoCustomerCustomerAddressIDAddressIDUnloadingPointNameUnloadingPointNamePatch($customer, $address_id, $unloading_point_name, $modified_a_cust_unldg_pt_addr_depdnt_info_type);
} catch (Exception $e) {
    echo 'Exception when calling CustomerUnloadingPointAddressDependentInformationApi->aCustUnldgPtAddrDepdntInfoCustomerCustomerAddressIDAddressIDUnloadingPointNameUnloadingPointNamePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **address_id** | **string**| Business Partner Address Number (from BUT020) | |
| **unloading_point_name** | **string**| Unloading Point | |
| **modified_a_cust_unldg_pt_addr_depdnt_info_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedACustUnldgPtAddrDepdntInfoType**](../Model/ModifiedACustUnldgPtAddrDepdntInfoType.md)| New property values | |

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

## `aCustUnldgPtAddrDepdntInfoGet()`

```php
aCustUnldgPtAddrDepdntInfoGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper42
```

Retrieves address dependent customer unloading point data.

Retrieves address dependent customer unloading point data fields of all the available records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerUnloadingPointAddressDependentInformationApi(
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
    $result = $apiInstance->aCustUnldgPtAddrDepdntInfoGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerUnloadingPointAddressDependentInformationApi->aCustUnldgPtAddrDepdntInfoGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper42**](../Model/Wrapper42.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustUnldgPtAddrDepdntInfoPost()`

```php
aCustUnldgPtAddrDepdntInfoPost($apibusinesspartnera_cust_unldg_pt_addr_depdnt_info_type_create): \BeLenka\SAP\BusinessPartner\Model\ACustUnldgPtAddrDepdntInfoType
```

Creates new address dependent customer unloading point data.

Creates new address dependent customer unloading point data.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerUnloadingPointAddressDependentInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnera_cust_unldg_pt_addr_depdnt_info_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustUnldgPtAddrDepdntInfoTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustUnldgPtAddrDepdntInfoTypeCreate | New entity

try {
    $result = $apiInstance->aCustUnldgPtAddrDepdntInfoPost($apibusinesspartnera_cust_unldg_pt_addr_depdnt_info_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerUnloadingPointAddressDependentInformationApi->aCustUnldgPtAddrDepdntInfoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnera_cust_unldg_pt_addr_depdnt_info_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustUnldgPtAddrDepdntInfoTypeCreate**](../Model/APIBUSINESSPARTNERACustUnldgPtAddrDepdntInfoTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustUnldgPtAddrDepdntInfoType**](../Model/ACustUnldgPtAddrDepdntInfoType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerCustomerToCustUnldgPtAddrDepdntInfoGet()`

```php
aCustomerCustomerToCustUnldgPtAddrDepdntInfoGet($customer, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper42
```

Retrieves address dependent customer unloading point data.

Retrieves address dependent customer unloading point data fields of all the available records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerUnloadingPointAddressDependentInformationApi(
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

try {
    $result = $apiInstance->aCustomerCustomerToCustUnldgPtAddrDepdntInfoGet($customer, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerUnloadingPointAddressDependentInformationApi->aCustomerCustomerToCustUnldgPtAddrDepdntInfoGet: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper42**](../Model/Wrapper42.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerCustomerToCustUnldgPtAddrDepdntInfoPost()`

```php
aCustomerCustomerToCustUnldgPtAddrDepdntInfoPost($customer, $apibusinesspartnera_cust_unldg_pt_addr_depdnt_info_type_create): \BeLenka\SAP\BusinessPartner\Model\ACustUnldgPtAddrDepdntInfoType
```

Creates new address dependent customer unloading point data.

Creates new address dependent customer unloading point data.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerUnloadingPointAddressDependentInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$apibusinesspartnera_cust_unldg_pt_addr_depdnt_info_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustUnldgPtAddrDepdntInfoTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustUnldgPtAddrDepdntInfoTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerCustomerToCustUnldgPtAddrDepdntInfoPost($customer, $apibusinesspartnera_cust_unldg_pt_addr_depdnt_info_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerUnloadingPointAddressDependentInformationApi->aCustomerCustomerToCustUnldgPtAddrDepdntInfoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **apibusinesspartnera_cust_unldg_pt_addr_depdnt_info_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustUnldgPtAddrDepdntInfoTypeCreate**](../Model/APIBUSINESSPARTNERACustUnldgPtAddrDepdntInfoTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustUnldgPtAddrDepdntInfoType**](../Model/ACustUnldgPtAddrDepdntInfoType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
