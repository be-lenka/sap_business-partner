# BeLenka\SAP\BusinessPartner\CustomerTextApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aCustomerCustomerToCustomerTextGet()**](CustomerTextApi.md#aCustomerCustomerToCustomerTextGet) | **GET** /A_Customer(&#39;{Customer}&#39;)/to_CustomerText | Retrieves customer text data. |
| [**aCustomerCustomerToCustomerTextPost()**](CustomerTextApi.md#aCustomerCustomerToCustomerTextPost) | **POST** /A_Customer(&#39;{Customer}&#39;)/to_CustomerText | Creates customer long text. |
| [**aCustomerTextCustomerCustomerLanguageLanguageLongTextIDLongTextIDDelete()**](CustomerTextApi.md#aCustomerTextCustomerCustomerLanguageLanguageLongTextIDLongTextIDDelete) | **DELETE** /A_CustomerText(Customer&#x3D;&#39;{Customer}&#39;,Language&#x3D;&#39;{Language}&#39;,LongTextID&#x3D;&#39;{LongTextID}&#39;) | Deletes customer text records by using key fields. |
| [**aCustomerTextCustomerCustomerLanguageLanguageLongTextIDLongTextIDGet()**](CustomerTextApi.md#aCustomerTextCustomerCustomerLanguageLanguageLongTextIDLongTextIDGet) | **GET** /A_CustomerText(Customer&#x3D;&#39;{Customer}&#39;,Language&#x3D;&#39;{Language}&#39;,LongTextID&#x3D;&#39;{LongTextID}&#39;) | Retrieves customer text records using the key fields. |
| [**aCustomerTextCustomerCustomerLanguageLanguageLongTextIDLongTextIDPatch()**](CustomerTextApi.md#aCustomerTextCustomerCustomerLanguageLanguageLongTextIDLongTextIDPatch) | **PATCH** /A_CustomerText(Customer&#x3D;&#39;{Customer}&#39;,Language&#x3D;&#39;{Language}&#39;,LongTextID&#x3D;&#39;{LongTextID}&#39;) | Updates customer text records by using the key fields. |
| [**aCustomerTextGet()**](CustomerTextApi.md#aCustomerTextGet) | **GET** /A_CustomerText | Retrieves customer text data. |
| [**aCustomerTextPost()**](CustomerTextApi.md#aCustomerTextPost) | **POST** /A_CustomerText | Creates customer long text. |


## `aCustomerCustomerToCustomerTextGet()`

```php
aCustomerCustomerToCustomerTextGet($customer, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper40
```

Retrieves customer text data.

Retrieves all customer text data attached to a customer in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerTextApi(
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
    $result = $apiInstance->aCustomerCustomerToCustomerTextGet($customer, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerTextApi->aCustomerCustomerToCustomerTextGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper40**](../Model/Wrapper40.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerCustomerToCustomerTextPost()`

```php
aCustomerCustomerToCustomerTextPost($customer, $apibusinesspartnera_customer_text_type_create): \BeLenka\SAP\BusinessPartner\Model\ACustomerTextType
```

Creates customer long text.

Creates text data attached to a customer in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$apibusinesspartnera_customer_text_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerTextTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerTextTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerCustomerToCustomerTextPost($customer, $apibusinesspartnera_customer_text_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerTextApi->aCustomerCustomerToCustomerTextPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **apibusinesspartnera_customer_text_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerTextTypeCreate**](../Model/APIBUSINESSPARTNERACustomerTextTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustomerTextType**](../Model/ACustomerTextType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerTextCustomerCustomerLanguageLanguageLongTextIDLongTextIDDelete()`

```php
aCustomerTextCustomerCustomerLanguageLanguageLongTextIDLongTextIDDelete($customer, $language, $long_text_id)
```

Deletes customer text records by using key fields.

Deletes customer text records by Customer, Language, and LongTextID fields.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$language = 'language_example'; // string | Language key
$long_text_id = 'long_text_id_example'; // string | Text ID

try {
    $apiInstance->aCustomerTextCustomerCustomerLanguageLanguageLongTextIDLongTextIDDelete($customer, $language, $long_text_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerTextApi->aCustomerTextCustomerCustomerLanguageLanguageLongTextIDLongTextIDDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **language** | **string**| Language key | |
| **long_text_id** | **string**| Text ID | |

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

## `aCustomerTextCustomerCustomerLanguageLanguageLongTextIDLongTextIDGet()`

```php
aCustomerTextCustomerCustomerLanguageLanguageLongTextIDLongTextIDGet($customer, $language, $long_text_id, $select): \BeLenka\SAP\BusinessPartner\Model\ACustomerTextType
```

Retrieves customer text records using the key fields.

Retrieves customer text records by using Customer, Language, and LongTextID fields.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$language = 'language_example'; // string | Language key
$long_text_id = 'long_text_id_example'; // string | Text ID
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aCustomerTextCustomerCustomerLanguageLanguageLongTextIDLongTextIDGet($customer, $language, $long_text_id, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerTextApi->aCustomerTextCustomerCustomerLanguageLanguageLongTextIDLongTextIDGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **language** | **string**| Language key | |
| **long_text_id** | **string**| Text ID | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustomerTextType**](../Model/ACustomerTextType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerTextCustomerCustomerLanguageLanguageLongTextIDLongTextIDPatch()`

```php
aCustomerTextCustomerCustomerLanguageLanguageLongTextIDLongTextIDPatch($customer, $language, $long_text_id, $modified_a_customer_text_type)
```

Updates customer text records by using the key fields.

Updates customer text records by using Customer, Language, and LongTextID fields.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer Number
$language = 'language_example'; // string | Language key
$long_text_id = 'long_text_id_example'; // string | Text ID
$modified_a_customer_text_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedACustomerTextType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedACustomerTextType | New property values

try {
    $apiInstance->aCustomerTextCustomerCustomerLanguageLanguageLongTextIDLongTextIDPatch($customer, $language, $long_text_id, $modified_a_customer_text_type);
} catch (Exception $e) {
    echo 'Exception when calling CustomerTextApi->aCustomerTextCustomerCustomerLanguageLanguageLongTextIDLongTextIDPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | **string**| Customer Number | |
| **language** | **string**| Language key | |
| **long_text_id** | **string**| Text ID | |
| **modified_a_customer_text_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedACustomerTextType**](../Model/ModifiedACustomerTextType.md)| New property values | |

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

## `aCustomerTextGet()`

```php
aCustomerTextGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper40
```

Retrieves customer text data.

Retrieves all customer text data attached to a customer in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerTextApi(
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
    $result = $apiInstance->aCustomerTextGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerTextApi->aCustomerTextGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper40**](../Model/Wrapper40.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aCustomerTextPost()`

```php
aCustomerTextPost($apibusinesspartnera_customer_text_type_create): \BeLenka\SAP\BusinessPartner\Model\ACustomerTextType
```

Creates customer long text.

Creates text data attached to a customer in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\CustomerTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnera_customer_text_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerTextTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerTextTypeCreate | New entity

try {
    $result = $apiInstance->aCustomerTextPost($apibusinesspartnera_customer_text_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerTextApi->aCustomerTextPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnera_customer_text_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERACustomerTextTypeCreate**](../Model/APIBUSINESSPARTNERACustomerTextTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ACustomerTextType**](../Model/ACustomerTextType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
