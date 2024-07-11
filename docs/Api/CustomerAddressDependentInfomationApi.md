# BeLenka\SAP\BusinessPartner\CustomerAddressDependentInfomationApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aCustAddrDepdntInformationCustomerCustomerAddressIDAddressIDDelete()**](CustomerAddressDependentInfomationApi.md#aCustAddrDepdntInformationCustomerCustomerAddressIDAddressIDDelete) | **DELETE** /A_CustAddrDepdntInformation(Customer&#x3D;&#39;{Customer}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;) | Deletes address dependent customer data. |
| [**aCustAddrDepdntInformationCustomerCustomerAddressIDAddressIDGet()**](CustomerAddressDependentInfomationApi.md#aCustAddrDepdntInformationCustomerCustomerAddressIDAddressIDGet) | **GET** /A_CustAddrDepdntInformation(Customer&#x3D;&#39;{Customer}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;) | Retrieves address dependent customer data by using key fields. |
| [**aCustAddrDepdntInformationCustomerCustomerAddressIDAddressIDPatch()**](CustomerAddressDependentInfomationApi.md#aCustAddrDepdntInformationCustomerCustomerAddressIDAddressIDPatch) | **PATCH** /A_CustAddrDepdntInformation(Customer&#x3D;&#39;{Customer}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;) | Updates address dependent customer data. |
| [**aCustAddrDepdntInformationGet()**](CustomerAddressDependentInfomationApi.md#aCustAddrDepdntInformationGet) | **GET** /A_CustAddrDepdntInformation | Retrieves address dependent customer data. |
| [**aCustAddrDepdntInformationPost()**](CustomerAddressDependentInfomationApi.md#aCustAddrDepdntInformationPost) | **POST** /A_CustAddrDepdntInformation | Creates new address dependent customer data. |
| [**aCustomerCustomerToCustAddrDepdntInformationGet()**](CustomerAddressDependentInfomationApi.md#aCustomerCustomerToCustAddrDepdntInformationGet) | **GET** /A_Customer(&#39;{Customer}&#39;)/to_CustAddrDepdntInformation | Retrieves address dependent customer data. |
| [**aCustomerCustomerToCustAddrDepdntInformationPost()**](CustomerAddressDependentInfomationApi.md#aCustomerCustomerToCustAddrDepdntInformationPost) | **POST** /A_Customer(&#39;{Customer}&#39;)/to_CustAddrDepdntInformation | Creates new address dependent customer data. |


## `aCustAddrDepdntInformationCustomerCustomerAddressIDAddressIDDelete()`

```php
aCustAddrDepdntInformationCustomerCustomerAddressIDAddressIDDelete($customer, $address_id)
```

Deletes address dependent customer data.

Deletes address dependent customer data identified by key fields customer number and address ID.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerAddressDependentInfomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$address_id = 'address_id_example'; // string | Business Partner Address Number (from BUT020)

try {
    $apiInstance->aCustAddrDepdntInformationCustomerCustomerAddressIDAddressIDDelete($customer, $address_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressDependentInfomationApi->aCustAddrDepdntInformationCustomerCustomerAddressIDAddressIDDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
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

## `aCustAddrDepdntInformationCustomerCustomerAddressIDAddressIDGet()`

```php
aCustAddrDepdntInformationCustomerCustomerAddressIDAddressIDGet($customer, $address_id, $select): \BeLenka\SAP\BusinessPartner\Model\ACustAddrDepdntInformationType
```

Retrieves address dependent customer data by using key fields.

Retrieves address dependent customer data by using the key fields customer number and address ID.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerAddressDependentInfomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$address_id = 'address_id_example'; // string | Business Partner Address Number (from BUT020)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aCustAddrDepdntInformationCustomerCustomerAddressIDAddressIDGet($customer, $address_id, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressDependentInfomationApi->aCustAddrDepdntInformationCustomerCustomerAddressIDAddressIDGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **address_id** | **string**| Business Partner Address Number (from BUT020) | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustAddrDepdntInformationType**](../Model/ACustAddrDepdntInformationType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustAddrDepdntInformationCustomerCustomerAddressIDAddressIDPatch()`

```php
aCustAddrDepdntInformationCustomerCustomerAddressIDAddressIDPatch($customer, $address_id, $modified_a_cust_addr_depdnt_information_type)
```

Updates address dependent customer data.

Updates address dependent customer data identified by key fields customer number and address ID.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerAddressDependentInfomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$address_id = 'address_id_example'; // string | Business Partner Address Number (from BUT020)
$modified_a_cust_addr_depdnt_information_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedACustAddrDepdntInformationType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedACustAddrDepdntInformationType | New property values

try {
    $apiInstance->aCustAddrDepdntInformationCustomerCustomerAddressIDAddressIDPatch($customer, $address_id, $modified_a_cust_addr_depdnt_information_type);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressDependentInfomationApi->aCustAddrDepdntInformationCustomerCustomerAddressIDAddressIDPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **address_id** | **string**| Business Partner Address Number (from BUT020) | |
| **modified_a_cust_addr_depdnt_information_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedACustAddrDepdntInformationType**](../Model/ModifiedACustAddrDepdntInformationType.md)| New property values | |

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

## `aCustAddrDepdntInformationGet()`

```php
aCustAddrDepdntInformationGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper35
```

Retrieves address dependent customer data.

Retrieves address dependent customer data fields of all the available records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerAddressDependentInfomationApi(
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
    $result = $apiInstance->aCustAddrDepdntInformationGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressDependentInfomationApi->aCustAddrDepdntInformationGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper35**](../Model/Wrapper35.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustAddrDepdntInformationPost()`

```php
aCustAddrDepdntInformationPost($apibusinesspartnera_cust_addr_depdnt_information_type_create): \BeLenka\SAP\BusinessPartner\Model\ACustAddrDepdntInformationType
```

Creates new address dependent customer data.

Creates new address dependent customer data.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerAddressDependentInfomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnera_cust_addr_depdnt_information_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustAddrDepdntInformationTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustAddrDepdntInformationTypeCreate | New entity

try {
    $result = $apiInstance->aCustAddrDepdntInformationPost($apibusinesspartnera_cust_addr_depdnt_information_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressDependentInfomationApi->aCustAddrDepdntInformationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnera_cust_addr_depdnt_information_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustAddrDepdntInformationTypeCreate**](../Model/APIBUSINESSPARTNERACustAddrDepdntInformationTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustAddrDepdntInformationType**](../Model/ACustAddrDepdntInformationType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerCustomerToCustAddrDepdntInformationGet()`

```php
aCustomerCustomerToCustAddrDepdntInformationGet($customer, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper35
```

Retrieves address dependent customer data.

Retrieves address dependent customer data fields of all the available records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerAddressDependentInfomationApi(
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
    $result = $apiInstance->aCustomerCustomerToCustAddrDepdntInformationGet($customer, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressDependentInfomationApi->aCustomerCustomerToCustAddrDepdntInformationGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper35**](../Model/Wrapper35.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerCustomerToCustAddrDepdntInformationPost()`

```php
aCustomerCustomerToCustAddrDepdntInformationPost($customer, $apibusinesspartnera_cust_addr_depdnt_information_type_create): \BeLenka\SAP\BusinessPartner\Model\ACustAddrDepdntInformationType
```

Creates new address dependent customer data.

Creates new address dependent customer data.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerAddressDependentInfomationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$apibusinesspartnera_cust_addr_depdnt_information_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustAddrDepdntInformationTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustAddrDepdntInformationTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerCustomerToCustAddrDepdntInformationPost($customer, $apibusinesspartnera_cust_addr_depdnt_information_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressDependentInfomationApi->aCustomerCustomerToCustAddrDepdntInformationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **apibusinesspartnera_cust_addr_depdnt_information_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustAddrDepdntInformationTypeCreate**](../Model/APIBUSINESSPARTNERACustAddrDepdntInformationTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustAddrDepdntInformationType**](../Model/ACustAddrDepdntInformationType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
