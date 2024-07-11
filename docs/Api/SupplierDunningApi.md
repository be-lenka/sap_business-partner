# BeLenka\SAP\BusinessPartner\SupplierDunningApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierDunningGet()**](SupplierDunningApi.md#aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierDunningGet) | **GET** /A_SupplierCompany(Supplier&#x3D;&#39;{Supplier}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;)/to_SupplierDunning | Retrieves dunning records attached to supplier company data. |
| [**aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierDunningPost()**](SupplierDunningApi.md#aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierDunningPost) | **POST** /A_SupplierCompany(Supplier&#x3D;&#39;{Supplier}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;)/to_SupplierDunning | Creates a new dunning records attached to supplier company. |
| [**aSupplierDunningGet()**](SupplierDunningApi.md#aSupplierDunningGet) | **GET** /A_SupplierDunning | Retrieves dunning records attached to supplier company data. |
| [**aSupplierDunningPost()**](SupplierDunningApi.md#aSupplierDunningPost) | **POST** /A_SupplierDunning | Creates a new dunning records attached to supplier company. |
| [**aSupplierDunningSupplierSupplierCompanyCodeCompanyCodeDunningAreaDunningAreaDelete()**](SupplierDunningApi.md#aSupplierDunningSupplierSupplierCompanyCodeCompanyCodeDunningAreaDunningAreaDelete) | **DELETE** /A_SupplierDunning(Supplier&#x3D;&#39;{Supplier}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;,DunningArea&#x3D;&#39;{DunningArea}&#39;) | Deletes supplier company code dunning record by using key fields. |
| [**aSupplierDunningSupplierSupplierCompanyCodeCompanyCodeDunningAreaDunningAreaGet()**](SupplierDunningApi.md#aSupplierDunningSupplierSupplierCompanyCodeCompanyCodeDunningAreaDunningAreaGet) | **GET** /A_SupplierDunning(Supplier&#x3D;&#39;{Supplier}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;,DunningArea&#x3D;&#39;{DunningArea}&#39;) | Retrieves supplier dunning records by using key fields. |
| [**aSupplierDunningSupplierSupplierCompanyCodeCompanyCodeDunningAreaDunningAreaPatch()**](SupplierDunningApi.md#aSupplierDunningSupplierSupplierCompanyCodeCompanyCodeDunningAreaDunningAreaPatch) | **PATCH** /A_SupplierDunning(Supplier&#x3D;&#39;{Supplier}&#39;,CompanyCode&#x3D;&#39;{CompanyCode}&#39;,DunningArea&#x3D;&#39;{DunningArea}&#39;) | Updates supplier company code dunning data using the key fields. |


## `aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierDunningGet()`

```php
aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierDunningGet($supplier, $company_code, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper56
```

Retrieves dunning records attached to supplier company data.

Retrieves all the dunning records attached to supplier company in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SupplierDunningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Account Number of Supplier
$company_code = 'company_code_example'; // string | Company Code
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierDunningGet($supplier, $company_code, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierDunningApi->aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierDunningGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Account Number of Supplier | |
| **company_code** | **string**| Company Code | |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper56**](../Model/Wrapper56.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierDunningPost()`

```php
aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierDunningPost($supplier, $company_code, $apibusinesspartnera_supplier_dunning_type_create): \BeLenka\SAP\BusinessPartner\Model\ASupplierDunningType
```

Creates a new dunning records attached to supplier company.

Assigns a new dunning records to a supplier company code.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SupplierDunningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Account Number of Supplier
$company_code = 'company_code_example'; // string | Company Code
$apibusinesspartnera_supplier_dunning_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierDunningTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierDunningTypeCreate | New entity

try {
    $result = $apiInstance->aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierDunningPost($supplier, $company_code, $apibusinesspartnera_supplier_dunning_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierDunningApi->aSupplierCompanySupplierSupplierCompanyCodeCompanyCodeToSupplierDunningPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Account Number of Supplier | |
| **company_code** | **string**| Company Code | |
| **apibusinesspartnera_supplier_dunning_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierDunningTypeCreate**](../Model/APIBUSINESSPARTNERASupplierDunningTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ASupplierDunningType**](../Model/ASupplierDunningType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierDunningGet()`

```php
aSupplierDunningGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper56
```

Retrieves dunning records attached to supplier company data.

Retrieves all the dunning records attached to supplier company in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SupplierDunningApi(
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
    $result = $apiInstance->aSupplierDunningGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierDunningApi->aSupplierDunningGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper56**](../Model/Wrapper56.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierDunningPost()`

```php
aSupplierDunningPost($apibusinesspartnera_supplier_dunning_type_create): \BeLenka\SAP\BusinessPartner\Model\ASupplierDunningType
```

Creates a new dunning records attached to supplier company.

Assigns a new dunning records to a supplier company code.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SupplierDunningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnera_supplier_dunning_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierDunningTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierDunningTypeCreate | New entity

try {
    $result = $apiInstance->aSupplierDunningPost($apibusinesspartnera_supplier_dunning_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierDunningApi->aSupplierDunningPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnera_supplier_dunning_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierDunningTypeCreate**](../Model/APIBUSINESSPARTNERASupplierDunningTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ASupplierDunningType**](../Model/ASupplierDunningType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierDunningSupplierSupplierCompanyCodeCompanyCodeDunningAreaDunningAreaDelete()`

```php
aSupplierDunningSupplierSupplierCompanyCodeCompanyCodeDunningAreaDunningAreaDelete($supplier, $company_code, $dunning_area)
```

Deletes supplier company code dunning record by using key fields.

Deletes supplier company code dunning record identified by Supplier, CompanyCode, and DunningArea fields.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SupplierDunningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Account Number of Supplier
$company_code = 'company_code_example'; // string | Company Code
$dunning_area = 'dunning_area_example'; // string | Dunning Area

try {
    $apiInstance->aSupplierDunningSupplierSupplierCompanyCodeCompanyCodeDunningAreaDunningAreaDelete($supplier, $company_code, $dunning_area);
} catch (Exception $e) {
    echo 'Exception when calling SupplierDunningApi->aSupplierDunningSupplierSupplierCompanyCodeCompanyCodeDunningAreaDunningAreaDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Account Number of Supplier | |
| **company_code** | **string**| Company Code | |
| **dunning_area** | **string**| Dunning Area | |

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

## `aSupplierDunningSupplierSupplierCompanyCodeCompanyCodeDunningAreaDunningAreaGet()`

```php
aSupplierDunningSupplierSupplierCompanyCodeCompanyCodeDunningAreaDunningAreaGet($supplier, $company_code, $dunning_area, $select): \BeLenka\SAP\BusinessPartner\Model\ASupplierDunningType
```

Retrieves supplier dunning records by using key fields.

Retrieves all the dunning records by using Supplier, CompanyCode, and DunningArea fields.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SupplierDunningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Account Number of Supplier
$company_code = 'company_code_example'; // string | Company Code
$dunning_area = 'dunning_area_example'; // string | Dunning Area
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aSupplierDunningSupplierSupplierCompanyCodeCompanyCodeDunningAreaDunningAreaGet($supplier, $company_code, $dunning_area, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierDunningApi->aSupplierDunningSupplierSupplierCompanyCodeCompanyCodeDunningAreaDunningAreaGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Account Number of Supplier | |
| **company_code** | **string**| Company Code | |
| **dunning_area** | **string**| Dunning Area | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ASupplierDunningType**](../Model/ASupplierDunningType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierDunningSupplierSupplierCompanyCodeCompanyCodeDunningAreaDunningAreaPatch()`

```php
aSupplierDunningSupplierSupplierCompanyCodeCompanyCodeDunningAreaDunningAreaPatch($supplier, $company_code, $dunning_area, $modified_a_supplier_dunning_type)
```

Updates supplier company code dunning data using the key fields.

Updates dunning data of a supplier company record identified by Supplier, CompanyCode, and DunningArea fields.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\SupplierDunningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Account Number of Supplier
$company_code = 'company_code_example'; // string | Company Code
$dunning_area = 'dunning_area_example'; // string | Dunning Area
$modified_a_supplier_dunning_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedASupplierDunningType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedASupplierDunningType | New property values

try {
    $apiInstance->aSupplierDunningSupplierSupplierCompanyCodeCompanyCodeDunningAreaDunningAreaPatch($supplier, $company_code, $dunning_area, $modified_a_supplier_dunning_type);
} catch (Exception $e) {
    echo 'Exception when calling SupplierDunningApi->aSupplierDunningSupplierSupplierCompanyCodeCompanyCodeDunningAreaDunningAreaPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Account Number of Supplier | |
| **company_code** | **string**| Company Code | |
| **dunning_area** | **string**| Dunning Area | |
| **modified_a_supplier_dunning_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedASupplierDunningType**](../Model/ModifiedASupplierDunningType.md)| New property values | |

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
