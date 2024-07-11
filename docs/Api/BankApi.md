# BeLenka\SAP\BusinessPartner\BankApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aBusinessPartnerBankBusinessPartnerBusinessPartnerBankIdentificationBankIdentificationDelete()**](BankApi.md#aBusinessPartnerBankBusinessPartnerBusinessPartnerBankIdentificationBankIdentificationDelete) | **DELETE** /A_BusinessPartnerBank(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,BankIdentification&#x3D;&#39;{BankIdentification}&#39;) | Deletes business partner bank data. |
| [**aBusinessPartnerBankBusinessPartnerBusinessPartnerBankIdentificationBankIdentificationGet()**](BankApi.md#aBusinessPartnerBankBusinessPartnerBusinessPartnerBankIdentificationBankIdentificationGet) | **GET** /A_BusinessPartnerBank(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,BankIdentification&#x3D;&#39;{BankIdentification}&#39;) | Retrieves business partner bank data by using key fields. |
| [**aBusinessPartnerBankBusinessPartnerBusinessPartnerBankIdentificationBankIdentificationPatch()**](BankApi.md#aBusinessPartnerBankBusinessPartnerBusinessPartnerBankIdentificationBankIdentificationPatch) | **PATCH** /A_BusinessPartnerBank(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,BankIdentification&#x3D;&#39;{BankIdentification}&#39;) | Updates business partner bank data. |
| [**aBusinessPartnerBankGet()**](BankApi.md#aBusinessPartnerBankGet) | **GET** /A_BusinessPartnerBank | Retrieves business partner bank data. |
| [**aBusinessPartnerBankPost()**](BankApi.md#aBusinessPartnerBankPost) | **POST** /A_BusinessPartnerBank | Creates new business partner bank data. |
| [**aBusinessPartnerBusinessPartnerToBusinessPartnerBankGet()**](BankApi.md#aBusinessPartnerBusinessPartnerToBusinessPartnerBankGet) | **GET** /A_BusinessPartner(&#39;{BusinessPartner}&#39;)/to_BusinessPartnerBank | Retrieves business partner bank data. |
| [**aBusinessPartnerBusinessPartnerToBusinessPartnerBankPost()**](BankApi.md#aBusinessPartnerBusinessPartnerToBusinessPartnerBankPost) | **POST** /A_BusinessPartner(&#39;{BusinessPartner}&#39;)/to_BusinessPartnerBank | Creates new business partner bank data. |


## `aBusinessPartnerBankBusinessPartnerBusinessPartnerBankIdentificationBankIdentificationDelete()`

```php
aBusinessPartnerBankBusinessPartnerBusinessPartnerBankIdentificationBankIdentificationDelete($business_partner, $bank_identification)
```

Deletes business partner bank data.

Deletes bank data of the business partner record identified by business partner number and bank identification.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BankApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$bank_identification = 'bank_identification_example'; // string | Bank Details ID

try {
    $apiInstance->aBusinessPartnerBankBusinessPartnerBusinessPartnerBankIdentificationBankIdentificationDelete($business_partner, $bank_identification);
} catch (Exception $e) {
    echo 'Exception when calling BankApi->aBusinessPartnerBankBusinessPartnerBusinessPartnerBankIdentificationBankIdentificationDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **bank_identification** | **string**| Bank Details ID | |

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

## `aBusinessPartnerBankBusinessPartnerBusinessPartnerBankIdentificationBankIdentificationGet()`

```php
aBusinessPartnerBankBusinessPartnerBusinessPartnerBankIdentificationBankIdentificationGet($business_partner, $bank_identification, $select): \BeLenka\SAP\BusinessPartner\Model\ABusinessPartnerBankType
```

Retrieves business partner bank data by using key fields.

Retrieves business partner bank data identified by key fields such as business partner number and bank dentification.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BankApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$bank_identification = 'bank_identification_example'; // string | Bank Details ID
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aBusinessPartnerBankBusinessPartnerBusinessPartnerBankIdentificationBankIdentificationGet($business_partner, $bank_identification, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankApi->aBusinessPartnerBankBusinessPartnerBusinessPartnerBankIdentificationBankIdentificationGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **bank_identification** | **string**| Bank Details ID | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABusinessPartnerBankType**](../Model/ABusinessPartnerBankType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerBankBusinessPartnerBusinessPartnerBankIdentificationBankIdentificationPatch()`

```php
aBusinessPartnerBankBusinessPartnerBusinessPartnerBankIdentificationBankIdentificationPatch($business_partner, $bank_identification, $modified_a_business_partner_bank_type)
```

Updates business partner bank data.

Updates bank data of the business partner record identified by business partner number and bank identification.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BankApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$bank_identification = 'bank_identification_example'; // string | Bank Details ID
$modified_a_business_partner_bank_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedABusinessPartnerBankType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedABusinessPartnerBankType | New property values

try {
    $apiInstance->aBusinessPartnerBankBusinessPartnerBusinessPartnerBankIdentificationBankIdentificationPatch($business_partner, $bank_identification, $modified_a_business_partner_bank_type);
} catch (Exception $e) {
    echo 'Exception when calling BankApi->aBusinessPartnerBankBusinessPartnerBusinessPartnerBankIdentificationBankIdentificationPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **bank_identification** | **string**| Bank Details ID | |
| **modified_a_business_partner_bank_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedABusinessPartnerBankType**](../Model/ModifiedABusinessPartnerBankType.md)| New property values | |

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

## `aBusinessPartnerBankGet()`

```php
aBusinessPartnerBankGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper26
```

Retrieves business partner bank data.

Retrieves business partner bank data fields of all the available records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BankApi(
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
    $result = $apiInstance->aBusinessPartnerBankGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankApi->aBusinessPartnerBankGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper26**](../Model/Wrapper26.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerBankPost()`

```php
aBusinessPartnerBankPost($apibusinesspartnera_business_partner_bank_type_create): \BeLenka\SAP\BusinessPartner\Model\ABusinessPartnerBankType
```

Creates new business partner bank data.

Creates new business partner bank data linked to business partner.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BankApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnera_business_partner_bank_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABusinessPartnerBankTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABusinessPartnerBankTypeCreate | New entity

try {
    $result = $apiInstance->aBusinessPartnerBankPost($apibusinesspartnera_business_partner_bank_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankApi->aBusinessPartnerBankPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnera_business_partner_bank_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABusinessPartnerBankTypeCreate**](../Model/APIBUSINESSPARTNERABusinessPartnerBankTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABusinessPartnerBankType**](../Model/ABusinessPartnerBankType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerBusinessPartnerToBusinessPartnerBankGet()`

```php
aBusinessPartnerBusinessPartnerToBusinessPartnerBankGet($business_partner, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper26
```

Retrieves business partner bank data.

Retrieves business partner bank data fields of all the available records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BankApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aBusinessPartnerBusinessPartnerToBusinessPartnerBankGet($business_partner, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankApi->aBusinessPartnerBusinessPartnerToBusinessPartnerBankGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper26**](../Model/Wrapper26.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerBusinessPartnerToBusinessPartnerBankPost()`

```php
aBusinessPartnerBusinessPartnerToBusinessPartnerBankPost($business_partner, $apibusinesspartnera_business_partner_bank_type_create): \BeLenka\SAP\BusinessPartner\Model\ABusinessPartnerBankType
```

Creates new business partner bank data.

Creates new business partner bank data linked to business partner.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BankApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$apibusinesspartnera_business_partner_bank_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABusinessPartnerBankTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABusinessPartnerBankTypeCreate | New entity

try {
    $result = $apiInstance->aBusinessPartnerBusinessPartnerToBusinessPartnerBankPost($business_partner, $apibusinesspartnera_business_partner_bank_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankApi->aBusinessPartnerBusinessPartnerToBusinessPartnerBankPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **apibusinesspartnera_business_partner_bank_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABusinessPartnerBankTypeCreate**](../Model/APIBUSINESSPARTNERABusinessPartnerBankTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABusinessPartnerBankType**](../Model/ABusinessPartnerBankType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
