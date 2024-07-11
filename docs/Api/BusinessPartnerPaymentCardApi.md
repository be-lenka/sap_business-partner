# BeLenka\SAP\BusinessPartner\BusinessPartnerPaymentCardApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aBusinessPartnerBusinessPartnerToPaymentCardGet()**](BusinessPartnerPaymentCardApi.md#aBusinessPartnerBusinessPartnerToPaymentCardGet) | **GET** /A_BusinessPartner(&#39;{BusinessPartner}&#39;)/to_PaymentCard | Retrieves business partner payment card data. |
| [**aBusinessPartnerBusinessPartnerToPaymentCardPost()**](BusinessPartnerPaymentCardApi.md#aBusinessPartnerBusinessPartnerToPaymentCardPost) | **POST** /A_BusinessPartner(&#39;{BusinessPartner}&#39;)/to_PaymentCard | Creates payment card data linked to business partner record. |
| [**aBusinessPartnerPaymentCardBusinessPartnerBusinessPartnerPaymentCardIDPaymentCardIDPaymentCardTypePaymentCardTypeCardNumberCardNumberDelete()**](BusinessPartnerPaymentCardApi.md#aBusinessPartnerPaymentCardBusinessPartnerBusinessPartnerPaymentCardIDPaymentCardIDPaymentCardTypePaymentCardTypeCardNumberCardNumberDelete) | **DELETE** /A_BusinessPartnerPaymentCard(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,PaymentCardID&#x3D;&#39;{PaymentCardID}&#39;,PaymentCardType&#x3D;&#39;{PaymentCardType}&#39;,CardNumber&#x3D;&#39;{CardNumber}&#39;) | Removes the payment card assigned to the business partner by using the key fields. |
| [**aBusinessPartnerPaymentCardBusinessPartnerBusinessPartnerPaymentCardIDPaymentCardIDPaymentCardTypePaymentCardTypeCardNumberCardNumberGet()**](BusinessPartnerPaymentCardApi.md#aBusinessPartnerPaymentCardBusinessPartnerBusinessPartnerPaymentCardIDPaymentCardIDPaymentCardTypePaymentCardTypeCardNumberCardNumberGet) | **GET** /A_BusinessPartnerPaymentCard(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,PaymentCardID&#x3D;&#39;{PaymentCardID}&#39;,PaymentCardType&#x3D;&#39;{PaymentCardType}&#39;,CardNumber&#x3D;&#39;{CardNumber}&#39;) | Retrieves business partner payment card data by key fields. |
| [**aBusinessPartnerPaymentCardBusinessPartnerBusinessPartnerPaymentCardIDPaymentCardIDPaymentCardTypePaymentCardTypeCardNumberCardNumberPatch()**](BusinessPartnerPaymentCardApi.md#aBusinessPartnerPaymentCardBusinessPartnerBusinessPartnerPaymentCardIDPaymentCardIDPaymentCardTypePaymentCardTypeCardNumberCardNumberPatch) | **PATCH** /A_BusinessPartnerPaymentCard(BusinessPartner&#x3D;&#39;{BusinessPartner}&#39;,PaymentCardID&#x3D;&#39;{PaymentCardID}&#39;,PaymentCardType&#x3D;&#39;{PaymentCardType}&#39;,CardNumber&#x3D;&#39;{CardNumber}&#39;) | Updates business partner payment card data. |
| [**aBusinessPartnerPaymentCardGet()**](BusinessPartnerPaymentCardApi.md#aBusinessPartnerPaymentCardGet) | **GET** /A_BusinessPartnerPaymentCard | Retrieves business partner payment card data. |
| [**aBusinessPartnerPaymentCardPost()**](BusinessPartnerPaymentCardApi.md#aBusinessPartnerPaymentCardPost) | **POST** /A_BusinessPartnerPaymentCard | Creates new business partner payment card data. |


## `aBusinessPartnerBusinessPartnerToPaymentCardGet()`

```php
aBusinessPartnerBusinessPartnerToPaymentCardGet($business_partner, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper32
```

Retrieves business partner payment card data.

Retrieves business partner payment cards of all the available records linked to business partners in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerPaymentCardApi(
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
    $result = $apiInstance->aBusinessPartnerBusinessPartnerToPaymentCardGet($business_partner, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerPaymentCardApi->aBusinessPartnerBusinessPartnerToPaymentCardGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper32**](../Model/Wrapper32.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerBusinessPartnerToPaymentCardPost()`

```php
aBusinessPartnerBusinessPartnerToPaymentCardPost($business_partner, $apibusinesspartnera_business_partner_payment_card_type_create): \BeLenka\SAP\BusinessPartner\Model\ABusinessPartnerPaymentCardType
```

Creates payment card data linked to business partner record.

Assigns new payment card data to the business partner record.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerPaymentCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$apibusinesspartnera_business_partner_payment_card_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABusinessPartnerPaymentCardTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABusinessPartnerPaymentCardTypeCreate | New entity

try {
    $result = $apiInstance->aBusinessPartnerBusinessPartnerToPaymentCardPost($business_partner, $apibusinesspartnera_business_partner_payment_card_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerPaymentCardApi->aBusinessPartnerBusinessPartnerToPaymentCardPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **apibusinesspartnera_business_partner_payment_card_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABusinessPartnerPaymentCardTypeCreate**](../Model/APIBUSINESSPARTNERABusinessPartnerPaymentCardTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABusinessPartnerPaymentCardType**](../Model/ABusinessPartnerPaymentCardType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerPaymentCardBusinessPartnerBusinessPartnerPaymentCardIDPaymentCardIDPaymentCardTypePaymentCardTypeCardNumberCardNumberDelete()`

```php
aBusinessPartnerPaymentCardBusinessPartnerBusinessPartnerPaymentCardIDPaymentCardIDPaymentCardTypePaymentCardTypeCardNumberCardNumberDelete($business_partner, $payment_card_id, $payment_card_type, $card_number)
```

Removes the payment card assigned to the business partner by using the key fields.

Deletes business partner payment card data by BusinessPartner, PaymentCardID, PaymentCardType and CardNumber.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerPaymentCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$payment_card_id = 'payment_card_id_example'; // string | Payment Card ID
$payment_card_type = 'payment_card_type_example'; // string | Payment Card Type
$card_number = 'card_number_example'; // string | Payment Cards: Card Number

try {
    $apiInstance->aBusinessPartnerPaymentCardBusinessPartnerBusinessPartnerPaymentCardIDPaymentCardIDPaymentCardTypePaymentCardTypeCardNumberCardNumberDelete($business_partner, $payment_card_id, $payment_card_type, $card_number);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerPaymentCardApi->aBusinessPartnerPaymentCardBusinessPartnerBusinessPartnerPaymentCardIDPaymentCardIDPaymentCardTypePaymentCardTypeCardNumberCardNumberDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **payment_card_id** | **string**| Payment Card ID | |
| **payment_card_type** | **string**| Payment Card Type | |
| **card_number** | **string**| Payment Cards: Card Number | |

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

## `aBusinessPartnerPaymentCardBusinessPartnerBusinessPartnerPaymentCardIDPaymentCardIDPaymentCardTypePaymentCardTypeCardNumberCardNumberGet()`

```php
aBusinessPartnerPaymentCardBusinessPartnerBusinessPartnerPaymentCardIDPaymentCardIDPaymentCardTypePaymentCardTypeCardNumberCardNumberGet($business_partner, $payment_card_id, $payment_card_type, $card_number, $select): \BeLenka\SAP\BusinessPartner\Model\ABusinessPartnerPaymentCardType
```

Retrieves business partner payment card data by key fields.

Retrieves business partner payment card data using Business Partner, card ID, card type and card number.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerPaymentCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$payment_card_id = 'payment_card_id_example'; // string | Payment Card ID
$payment_card_type = 'payment_card_type_example'; // string | Payment Card Type
$card_number = 'card_number_example'; // string | Payment Cards: Card Number
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aBusinessPartnerPaymentCardBusinessPartnerBusinessPartnerPaymentCardIDPaymentCardIDPaymentCardTypePaymentCardTypeCardNumberCardNumberGet($business_partner, $payment_card_id, $payment_card_type, $card_number, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerPaymentCardApi->aBusinessPartnerPaymentCardBusinessPartnerBusinessPartnerPaymentCardIDPaymentCardIDPaymentCardTypePaymentCardTypeCardNumberCardNumberGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **payment_card_id** | **string**| Payment Card ID | |
| **payment_card_type** | **string**| Payment Card Type | |
| **card_number** | **string**| Payment Cards: Card Number | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABusinessPartnerPaymentCardType**](../Model/ABusinessPartnerPaymentCardType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerPaymentCardBusinessPartnerBusinessPartnerPaymentCardIDPaymentCardIDPaymentCardTypePaymentCardTypeCardNumberCardNumberPatch()`

```php
aBusinessPartnerPaymentCardBusinessPartnerBusinessPartnerPaymentCardIDPaymentCardIDPaymentCardTypePaymentCardTypeCardNumberCardNumberPatch($business_partner, $payment_card_id, $payment_card_type, $card_number, $modified_a_business_partner_payment_card_type)
```

Updates business partner payment card data.

Updates business partner payment card data by BusinessPartner, PaymentCardID, PaymentCardType and CardNumber.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerPaymentCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_partner = 'business_partner_example'; // string | Business Partner Number
$payment_card_id = 'payment_card_id_example'; // string | Payment Card ID
$payment_card_type = 'payment_card_type_example'; // string | Payment Card Type
$card_number = 'card_number_example'; // string | Payment Cards: Card Number
$modified_a_business_partner_payment_card_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedABusinessPartnerPaymentCardType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedABusinessPartnerPaymentCardType | New property values

try {
    $apiInstance->aBusinessPartnerPaymentCardBusinessPartnerBusinessPartnerPaymentCardIDPaymentCardIDPaymentCardTypePaymentCardTypeCardNumberCardNumberPatch($business_partner, $payment_card_id, $payment_card_type, $card_number, $modified_a_business_partner_payment_card_type);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerPaymentCardApi->aBusinessPartnerPaymentCardBusinessPartnerBusinessPartnerPaymentCardIDPaymentCardIDPaymentCardTypePaymentCardTypeCardNumberCardNumberPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_partner** | **string**| Business Partner Number | |
| **payment_card_id** | **string**| Payment Card ID | |
| **payment_card_type** | **string**| Payment Card Type | |
| **card_number** | **string**| Payment Cards: Card Number | |
| **modified_a_business_partner_payment_card_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedABusinessPartnerPaymentCardType**](../Model/ModifiedABusinessPartnerPaymentCardType.md)| New property values | |

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

## `aBusinessPartnerPaymentCardGet()`

```php
aBusinessPartnerPaymentCardGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper32
```

Retrieves business partner payment card data.

Retrieves business partner payment card data fields of all the available records in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerPaymentCardApi(
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
    $result = $apiInstance->aBusinessPartnerPaymentCardGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerPaymentCardApi->aBusinessPartnerPaymentCardGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper32**](../Model/Wrapper32.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aBusinessPartnerPaymentCardPost()`

```php
aBusinessPartnerPaymentCardPost($apibusinesspartnera_business_partner_payment_card_type_create): \BeLenka\SAP\BusinessPartner\Model\ABusinessPartnerPaymentCardType
```

Creates new business partner payment card data.

Adds a new business partner payment card data to the business partner.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\BusinessPartnerPaymentCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnera_business_partner_payment_card_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABusinessPartnerPaymentCardTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABusinessPartnerPaymentCardTypeCreate | New entity

try {
    $result = $apiInstance->aBusinessPartnerPaymentCardPost($apibusinesspartnera_business_partner_payment_card_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessPartnerPaymentCardApi->aBusinessPartnerPaymentCardPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnera_business_partner_payment_card_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERABusinessPartnerPaymentCardTypeCreate**](../Model/APIBUSINESSPARTNERABusinessPartnerPaymentCardTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ABusinessPartnerPaymentCardType**](../Model/ABusinessPartnerPaymentCardType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
