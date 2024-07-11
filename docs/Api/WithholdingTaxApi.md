# BeLenka\SAP\BusinessPartner\WithholdingTaxApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToWithHoldingTaxGet()**](WithholdingTaxApi.md#aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToWithHoldingTaxGet) | **GET** /A_CustomerCompany(Customer&#x3D;&#39;{Customer}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;)/to_WithHoldingTax | Retrieves customer withholding tax records attached to customer company. |
| [**aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToWithHoldingTaxPost()**](WithholdingTaxApi.md#aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToWithHoldingTaxPost) | **POST** /A_CustomerCompany(Customer&#x3D;&#39;{Customer}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;)/to_WithHoldingTax | Creates new customer withholding tax record. |
| [**aCustomerWithHoldingTaxCustomerCustomerCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypeDelete()**](WithholdingTaxApi.md#aCustomerWithHoldingTaxCustomerCustomerCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypeDelete) | **DELETE** /A_CustomerWithHoldingTax(Customer&#x3D;&#39;{Customer}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;,WithholdingTaxType&#x3D;&#39;{WithholdingTaxType}&#39;) | Deletes customer withholding tax record linked to customer company by customer, customer company, withholding tax. |
| [**aCustomerWithHoldingTaxCustomerCustomerCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypeGet()**](WithholdingTaxApi.md#aCustomerWithHoldingTaxCustomerCustomerCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypeGet) | **GET** /A_CustomerWithHoldingTax(Customer&#x3D;&#39;{Customer}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;,WithholdingTaxType&#x3D;&#39;{WithholdingTaxType}&#39;) | Retrieves customer withholding tax records by using key fields. |
| [**aCustomerWithHoldingTaxCustomerCustomerCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypePatch()**](WithholdingTaxApi.md#aCustomerWithHoldingTaxCustomerCustomerCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypePatch) | **PATCH** /A_CustomerWithHoldingTax(Customer&#x3D;&#39;{Customer}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;,WithholdingTaxType&#x3D;&#39;{WithholdingTaxType}&#39;) | Updates customer company withholding tax record. |
| [**aCustomerWithHoldingTaxGet()**](WithholdingTaxApi.md#aCustomerWithHoldingTaxGet) | **GET** /A_CustomerWithHoldingTax | Retrieves customer withholding tax records attached to customer company. |
| [**aCustomerWithHoldingTaxPost()**](WithholdingTaxApi.md#aCustomerWithHoldingTaxPost) | **POST** /A_CustomerWithHoldingTax | Creates new customer withholding tax record. |


## `aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToWithHoldingTaxGet()`

```php
aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToWithHoldingTaxGet($customer, $company_code, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper45
```

Retrieves customer withholding tax records attached to customer company.

Retrieves all the withholding tax records attached to customer company in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\WithholdingTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$company_code = 'company_code_example'; // string | Company Code
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToWithHoldingTaxGet($customer, $company_code, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WithholdingTaxApi->aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToWithHoldingTaxGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **company_code** | **string**| Company Code | |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper45**](../Model/Wrapper45.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToWithHoldingTaxPost()`

```php
aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToWithHoldingTaxPost($customer, $company_code, $apibusinesspartnera_customer_with_holding_tax_type_create): \BeLenka\SAP\BusinessPartner\Model\ACustomerWithHoldingTaxType
```

Creates new customer withholding tax record.

Creates customer withholding tax record linked to customer company.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\WithholdingTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$company_code = 'company_code_example'; // string | Company Code
$apibusinesspartnera_customer_with_holding_tax_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerWithHoldingTaxTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerWithHoldingTaxTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToWithHoldingTaxPost($customer, $company_code, $apibusinesspartnera_customer_with_holding_tax_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WithholdingTaxApi->aCustomerCompanyCustomerCustomerCompanyCodeCompanyCodeToWithHoldingTaxPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **company_code** | **string**| Company Code | |
| **apibusinesspartnera_customer_with_holding_tax_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerWithHoldingTaxTypeCreate**](../Model/APIBUSINESSPARTNERACustomerWithHoldingTaxTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustomerWithHoldingTaxType**](../Model/ACustomerWithHoldingTaxType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerWithHoldingTaxCustomerCustomerCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypeDelete()`

```php
aCustomerWithHoldingTaxCustomerCustomerCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypeDelete($customer, $company_code, $withholding_tax_type)
```

Deletes customer withholding tax record linked to customer company by customer, customer company, withholding tax.

Deletes customer withholding tax record linked to customer company by fields such as Customer, CompanyCode, and WithholdingTaxType

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\WithholdingTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$company_code = 'company_code_example'; // string | Company Code
$withholding_tax_type = 'withholding_tax_type_example'; // string | Indicator for Withholding Tax Type

try {
    $apiInstance->aCustomerWithHoldingTaxCustomerCustomerCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypeDelete($customer, $company_code, $withholding_tax_type);
} catch (Exception $e) {
    echo 'Exception when calling WithholdingTaxApi->aCustomerWithHoldingTaxCustomerCustomerCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypeDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **company_code** | **string**| Company Code | |
| **withholding_tax_type** | **string**| Indicator for Withholding Tax Type | |

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

## `aCustomerWithHoldingTaxCustomerCustomerCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypeGet()`

```php
aCustomerWithHoldingTaxCustomerCustomerCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypeGet($customer, $company_code, $withholding_tax_type, $select): \BeLenka\SAP\BusinessPartner\Model\ACustomerWithHoldingTaxType
```

Retrieves customer withholding tax records by using key fields.

Retrieves customer withholding tax records by customer, company code, and withholding tax type.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\WithholdingTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$company_code = 'company_code_example'; // string | Company Code
$withholding_tax_type = 'withholding_tax_type_example'; // string | Indicator for Withholding Tax Type
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aCustomerWithHoldingTaxCustomerCustomerCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypeGet($customer, $company_code, $withholding_tax_type, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WithholdingTaxApi->aCustomerWithHoldingTaxCustomerCustomerCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **company_code** | **string**| Company Code | |
| **withholding_tax_type** | **string**| Indicator for Withholding Tax Type | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustomerWithHoldingTaxType**](../Model/ACustomerWithHoldingTaxType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerWithHoldingTaxCustomerCustomerCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypePatch()`

```php
aCustomerWithHoldingTaxCustomerCustomerCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypePatch($customer, $company_code, $withholding_tax_type, $modified_a_customer_with_holding_tax_type)
```

Updates customer company withholding tax record.

Updates customer withholding tax record linked to customer company by fields such as Customer, CompanyCode and WithholdingTaxType

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\WithholdingTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$company_code = 'company_code_example'; // string | Company Code
$withholding_tax_type = 'withholding_tax_type_example'; // string | Indicator for Withholding Tax Type
$modified_a_customer_with_holding_tax_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedACustomerWithHoldingTaxType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedACustomerWithHoldingTaxType | New property values

try {
    $apiInstance->aCustomerWithHoldingTaxCustomerCustomerCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypePatch($customer, $company_code, $withholding_tax_type, $modified_a_customer_with_holding_tax_type);
} catch (Exception $e) {
    echo 'Exception when calling WithholdingTaxApi->aCustomerWithHoldingTaxCustomerCustomerCompanyCodeCompanyCodeWithholdingTaxTypeWithholdingTaxTypePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **company_code** | **string**| Company Code | |
| **withholding_tax_type** | **string**| Indicator for Withholding Tax Type | |
| **modified_a_customer_with_holding_tax_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedACustomerWithHoldingTaxType**](../Model/ModifiedACustomerWithHoldingTaxType.md)| New property values | |

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

## `aCustomerWithHoldingTaxGet()`

```php
aCustomerWithHoldingTaxGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper45
```

Retrieves customer withholding tax records attached to customer company.

Retrieves all the withholding tax records attached to customer company in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\WithholdingTaxApi(
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
    $result = $apiInstance->aCustomerWithHoldingTaxGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WithholdingTaxApi->aCustomerWithHoldingTaxGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper45**](../Model/Wrapper45.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerWithHoldingTaxPost()`

```php
aCustomerWithHoldingTaxPost($apibusinesspartnera_customer_with_holding_tax_type_create): \BeLenka\SAP\BusinessPartner\Model\ACustomerWithHoldingTaxType
```

Creates new customer withholding tax record.

Creates customer withholding tax record linked to customer company.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\WithholdingTaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnera_customer_with_holding_tax_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerWithHoldingTaxTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerWithHoldingTaxTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerWithHoldingTaxPost($apibusinesspartnera_customer_with_holding_tax_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WithholdingTaxApi->aCustomerWithHoldingTaxPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnera_customer_with_holding_tax_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerWithHoldingTaxTypeCreate**](../Model/APIBUSINESSPARTNERACustomerWithHoldingTaxTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustomerWithHoldingTaxType**](../Model/ACustomerWithHoldingTaxType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
