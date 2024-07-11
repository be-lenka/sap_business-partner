# BeLenka\SAP\BusinessPartner\CustomerAddressDependentExternalIdentifierApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aCustAddrDepdntExtIdentifierCustomerCustomerAddressIDAddressIDDelete()**](CustomerAddressDependentExternalIdentifierApi.md#aCustAddrDepdntExtIdentifierCustomerCustomerAddressIDAddressIDDelete) | **DELETE** /A_CustAddrDepdntExtIdentifier(Customer&#x3D;&#39;{Customer}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;) | Deletes the address dependent external identifier of a customer. |
| [**aCustAddrDepdntExtIdentifierCustomerCustomerAddressIDAddressIDGet()**](CustomerAddressDependentExternalIdentifierApi.md#aCustAddrDepdntExtIdentifierCustomerCustomerAddressIDAddressIDGet) | **GET** /A_CustAddrDepdntExtIdentifier(Customer&#x3D;&#39;{Customer}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;) | Retrieves the address dependent external identifier of customers. |
| [**aCustAddrDepdntExtIdentifierCustomerCustomerAddressIDAddressIDPatch()**](CustomerAddressDependentExternalIdentifierApi.md#aCustAddrDepdntExtIdentifierCustomerCustomerAddressIDAddressIDPatch) | **PATCH** /A_CustAddrDepdntExtIdentifier(Customer&#x3D;&#39;{Customer}&#39;,AddressID&#x3D;&#39;{AddressID}&#39;) | Updates the address dependent external identifier of a customer. |
| [**aCustAddrDepdntExtIdentifierGet()**](CustomerAddressDependentExternalIdentifierApi.md#aCustAddrDepdntExtIdentifierGet) | **GET** /A_CustAddrDepdntExtIdentifier | Retrieves the address dependent external identifier of customers. |
| [**aCustAddrDepdntExtIdentifierPost()**](CustomerAddressDependentExternalIdentifierApi.md#aCustAddrDepdntExtIdentifierPost) | **POST** /A_CustAddrDepdntExtIdentifier | Creates the address dependent external identifier of a customer. |
| [**aCustomerCustomerToCustAddrDepdntExtIdentifierGet()**](CustomerAddressDependentExternalIdentifierApi.md#aCustomerCustomerToCustAddrDepdntExtIdentifierGet) | **GET** /A_Customer(&#39;{Customer}&#39;)/to_CustAddrDepdntExtIdentifier | Get entities from related to_CustAddrDepdntExtIdentifier |
| [**aCustomerCustomerToCustAddrDepdntExtIdentifierPost()**](CustomerAddressDependentExternalIdentifierApi.md#aCustomerCustomerToCustAddrDepdntExtIdentifierPost) | **POST** /A_Customer(&#39;{Customer}&#39;)/to_CustAddrDepdntExtIdentifier | Add new entity to related to_CustAddrDepdntExtIdentifier |


## `aCustAddrDepdntExtIdentifierCustomerCustomerAddressIDAddressIDDelete()`

```php
aCustAddrDepdntExtIdentifierCustomerCustomerAddressIDAddressIDDelete($customer, $address_id)
```

Deletes the address dependent external identifier of a customer.

Deletes the address dependent external identifier identified by customer number and address ID.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerAddressDependentExternalIdentifierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$address_id = 'address_id_example'; // string | Business Partner Address Number (from BUT020)

try {
    $apiInstance->aCustAddrDepdntExtIdentifierCustomerCustomerAddressIDAddressIDDelete($customer, $address_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressDependentExternalIdentifierApi->aCustAddrDepdntExtIdentifierCustomerCustomerAddressIDAddressIDDelete: ', $e->getMessage(), PHP_EOL;
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

## `aCustAddrDepdntExtIdentifierCustomerCustomerAddressIDAddressIDGet()`

```php
aCustAddrDepdntExtIdentifierCustomerCustomerAddressIDAddressIDGet($customer, $address_id, $select): \BeLenka\SAP\BusinessPartner\Model\ACustAddrDepdntExtIdentifierType
```

Retrieves the address dependent external identifier of customers.

Retrieves the address dependent external identifiers of all the available records linked to customers in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerAddressDependentExternalIdentifierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$address_id = 'address_id_example'; // string | Business Partner Address Number (from BUT020)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aCustAddrDepdntExtIdentifierCustomerCustomerAddressIDAddressIDGet($customer, $address_id, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressDependentExternalIdentifierApi->aCustAddrDepdntExtIdentifierCustomerCustomerAddressIDAddressIDGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **address_id** | **string**| Business Partner Address Number (from BUT020) | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustAddrDepdntExtIdentifierType**](../Model/ACustAddrDepdntExtIdentifierType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustAddrDepdntExtIdentifierCustomerCustomerAddressIDAddressIDPatch()`

```php
aCustAddrDepdntExtIdentifierCustomerCustomerAddressIDAddressIDPatch($customer, $address_id, $modified_a_cust_addr_depdnt_ext_identifier_type)
```

Updates the address dependent external identifier of a customer.

Updates the address dependent external identifier identified by customer number and address ID.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerAddressDependentExternalIdentifierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$address_id = 'address_id_example'; // string | Business Partner Address Number (from BUT020)
$modified_a_cust_addr_depdnt_ext_identifier_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedACustAddrDepdntExtIdentifierType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedACustAddrDepdntExtIdentifierType | New property values

try {
    $apiInstance->aCustAddrDepdntExtIdentifierCustomerCustomerAddressIDAddressIDPatch($customer, $address_id, $modified_a_cust_addr_depdnt_ext_identifier_type);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressDependentExternalIdentifierApi->aCustAddrDepdntExtIdentifierCustomerCustomerAddressIDAddressIDPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **address_id** | **string**| Business Partner Address Number (from BUT020) | |
| **modified_a_cust_addr_depdnt_ext_identifier_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedACustAddrDepdntExtIdentifierType**](../Model/ModifiedACustAddrDepdntExtIdentifierType.md)| New property values | |

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

## `aCustAddrDepdntExtIdentifierGet()`

```php
aCustAddrDepdntExtIdentifierGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper34
```

Retrieves the address dependent external identifier of customers.

Retrieves the address dependent external identifiers of all the available records linked to customers in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerAddressDependentExternalIdentifierApi(
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
    $result = $apiInstance->aCustAddrDepdntExtIdentifierGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressDependentExternalIdentifierApi->aCustAddrDepdntExtIdentifierGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper34**](../Model/Wrapper34.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustAddrDepdntExtIdentifierPost()`

```php
aCustAddrDepdntExtIdentifierPost($apibusinesspartnera_cust_addr_depdnt_ext_identifier_type_create): \BeLenka\SAP\BusinessPartner\Model\ACustAddrDepdntExtIdentifierType
```

Creates the address dependent external identifier of a customer.

Creates the address dependent external identifier linked to an existing customer.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerAddressDependentExternalIdentifierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnera_cust_addr_depdnt_ext_identifier_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustAddrDepdntExtIdentifierTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustAddrDepdntExtIdentifierTypeCreate | New entity

try {
    $result = $apiInstance->aCustAddrDepdntExtIdentifierPost($apibusinesspartnera_cust_addr_depdnt_ext_identifier_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressDependentExternalIdentifierApi->aCustAddrDepdntExtIdentifierPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnera_cust_addr_depdnt_ext_identifier_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustAddrDepdntExtIdentifierTypeCreate**](../Model/APIBUSINESSPARTNERACustAddrDepdntExtIdentifierTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustAddrDepdntExtIdentifierType**](../Model/ACustAddrDepdntExtIdentifierType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerCustomerToCustAddrDepdntExtIdentifierGet()`

```php
aCustomerCustomerToCustAddrDepdntExtIdentifierGet($customer, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper34
```

Get entities from related to_CustAddrDepdntExtIdentifier

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerAddressDependentExternalIdentifierApi(
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
    $result = $apiInstance->aCustomerCustomerToCustAddrDepdntExtIdentifierGet($customer, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressDependentExternalIdentifierApi->aCustomerCustomerToCustAddrDepdntExtIdentifierGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper34**](../Model/Wrapper34.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerCustomerToCustAddrDepdntExtIdentifierPost()`

```php
aCustomerCustomerToCustAddrDepdntExtIdentifierPost($customer, $apibusinesspartnera_cust_addr_depdnt_ext_identifier_type_create): \BeLenka\SAP\BusinessPartner\Model\ACustAddrDepdntExtIdentifierType
```

Add new entity to related to_CustAddrDepdntExtIdentifier

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerAddressDependentExternalIdentifierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$apibusinesspartnera_cust_addr_depdnt_ext_identifier_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustAddrDepdntExtIdentifierTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustAddrDepdntExtIdentifierTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerCustomerToCustAddrDepdntExtIdentifierPost($customer, $apibusinesspartnera_cust_addr_depdnt_ext_identifier_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressDependentExternalIdentifierApi->aCustomerCustomerToCustAddrDepdntExtIdentifierPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **apibusinesspartnera_cust_addr_depdnt_ext_identifier_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustAddrDepdntExtIdentifierTypeCreate**](../Model/APIBUSINESSPARTNERACustAddrDepdntExtIdentifierTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustAddrDepdntExtIdentifierType**](../Model/ACustAddrDepdntExtIdentifierType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
