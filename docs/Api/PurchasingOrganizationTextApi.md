# BeLenka\SAP\BusinessPartner\PurchasingOrganizationTextApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPurchasingOrgTextGet()**](PurchasingOrganizationTextApi.md#aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPurchasingOrgTextGet) | **GET** /A_SupplierPurchasingOrg(Supplier&#x3D;&#39;{Supplier}&#39;,PurchasingOrganization&#x3D;&#39;{PurchasingOrganization}&#39;)/to_PurchasingOrgText | Retrieves supplier purchasing organization text data. |
| [**aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPurchasingOrgTextPost()**](PurchasingOrganizationTextApi.md#aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPurchasingOrgTextPost) | **POST** /A_SupplierPurchasingOrg(Supplier&#x3D;&#39;{Supplier}&#39;,PurchasingOrganization&#x3D;&#39;{PurchasingOrganization}&#39;)/to_PurchasingOrgText | Creates supplier purchasing organization text data. |
| [**aSupplierPurchasingOrgTextGet()**](PurchasingOrganizationTextApi.md#aSupplierPurchasingOrgTextGet) | **GET** /A_SupplierPurchasingOrgText | Retrieves supplier purchasing organization text data. |
| [**aSupplierPurchasingOrgTextPost()**](PurchasingOrganizationTextApi.md#aSupplierPurchasingOrgTextPost) | **POST** /A_SupplierPurchasingOrgText | Creates supplier purchasing organization text data. |
| [**aSupplierPurchasingOrgTextSupplierSupplierPurchasingOrganizationPurchasingOrganizationLanguageLanguageLongTextIDLongTextIDDelete()**](PurchasingOrganizationTextApi.md#aSupplierPurchasingOrgTextSupplierSupplierPurchasingOrganizationPurchasingOrganizationLanguageLanguageLongTextIDLongTextIDDelete) | **DELETE** /A_SupplierPurchasingOrgText(Supplier&#x3D;&#39;{Supplier}&#39;,PurchasingOrganization&#x3D;&#39;{PurchasingOrganization}&#39;,Language&#x3D;&#39;{Language}&#39;,LongTextID&#x3D;&#39;{LongTextID}&#39;) | Deletes supplier purchasing organization text data by using key fields. |
| [**aSupplierPurchasingOrgTextSupplierSupplierPurchasingOrganizationPurchasingOrganizationLanguageLanguageLongTextIDLongTextIDGet()**](PurchasingOrganizationTextApi.md#aSupplierPurchasingOrgTextSupplierSupplierPurchasingOrganizationPurchasingOrganizationLanguageLanguageLongTextIDLongTextIDGet) | **GET** /A_SupplierPurchasingOrgText(Supplier&#x3D;&#39;{Supplier}&#39;,PurchasingOrganization&#x3D;&#39;{PurchasingOrganization}&#39;,Language&#x3D;&#39;{Language}&#39;,LongTextID&#x3D;&#39;{LongTextID}&#39;) | Retrieves supplier purchasing organization text data by using the key fields. |
| [**aSupplierPurchasingOrgTextSupplierSupplierPurchasingOrganizationPurchasingOrganizationLanguageLanguageLongTextIDLongTextIDPatch()**](PurchasingOrganizationTextApi.md#aSupplierPurchasingOrgTextSupplierSupplierPurchasingOrganizationPurchasingOrganizationLanguageLanguageLongTextIDLongTextIDPatch) | **PATCH** /A_SupplierPurchasingOrgText(Supplier&#x3D;&#39;{Supplier}&#39;,PurchasingOrganization&#x3D;&#39;{PurchasingOrganization}&#39;,Language&#x3D;&#39;{Language}&#39;,LongTextID&#x3D;&#39;{LongTextID}&#39;) | Updates supplier purchasing organization text data using key fields. |


## `aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPurchasingOrgTextGet()`

```php
aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPurchasingOrgTextGet($supplier, $purchasing_organization, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper59
```

Retrieves supplier purchasing organization text data.

Retrieves all the supplier purchasing organization text data attached to purchasing organization in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PurchasingOrganizationTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Supplier's Account Number
$purchasing_organization = 'purchasing_organization_example'; // string | Purchasing Organization
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPurchasingOrgTextGet($supplier, $purchasing_organization, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasingOrganizationTextApi->aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPurchasingOrgTextGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Supplier&#39;s Account Number | |
| **purchasing_organization** | **string**| Purchasing Organization | |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper59**](../Model/Wrapper59.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPurchasingOrgTextPost()`

```php
aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPurchasingOrgTextPost($supplier, $purchasing_organization, $apibusinesspartnera_supplier_purchasing_org_text_type_create): \BeLenka\SAP\BusinessPartner\Model\ASupplierPurchasingOrgTextType
```

Creates supplier purchasing organization text data.

Creates text data attached to a supplier purchasing organization in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PurchasingOrganizationTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Supplier's Account Number
$purchasing_organization = 'purchasing_organization_example'; // string | Purchasing Organization
$apibusinesspartnera_supplier_purchasing_org_text_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierPurchasingOrgTextTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierPurchasingOrgTextTypeCreate | New entity

try {
    $result = $apiInstance->aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPurchasingOrgTextPost($supplier, $purchasing_organization, $apibusinesspartnera_supplier_purchasing_org_text_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasingOrganizationTextApi->aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPurchasingOrgTextPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Supplier&#39;s Account Number | |
| **purchasing_organization** | **string**| Purchasing Organization | |
| **apibusinesspartnera_supplier_purchasing_org_text_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierPurchasingOrgTextTypeCreate**](../Model/APIBUSINESSPARTNERASupplierPurchasingOrgTextTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ASupplierPurchasingOrgTextType**](../Model/ASupplierPurchasingOrgTextType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierPurchasingOrgTextGet()`

```php
aSupplierPurchasingOrgTextGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper59
```

Retrieves supplier purchasing organization text data.

Retrieves all the supplier purchasing organization text data attached to purchasing organization in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PurchasingOrganizationTextApi(
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
    $result = $apiInstance->aSupplierPurchasingOrgTextGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasingOrganizationTextApi->aSupplierPurchasingOrgTextGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper59**](../Model/Wrapper59.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierPurchasingOrgTextPost()`

```php
aSupplierPurchasingOrgTextPost($apibusinesspartnera_supplier_purchasing_org_text_type_create): \BeLenka\SAP\BusinessPartner\Model\ASupplierPurchasingOrgTextType
```

Creates supplier purchasing organization text data.

Creates text data attached to a supplier purchasing organization in the system.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PurchasingOrganizationTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnera_supplier_purchasing_org_text_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierPurchasingOrgTextTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierPurchasingOrgTextTypeCreate | New entity

try {
    $result = $apiInstance->aSupplierPurchasingOrgTextPost($apibusinesspartnera_supplier_purchasing_org_text_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasingOrganizationTextApi->aSupplierPurchasingOrgTextPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnera_supplier_purchasing_org_text_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierPurchasingOrgTextTypeCreate**](../Model/APIBUSINESSPARTNERASupplierPurchasingOrgTextTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ASupplierPurchasingOrgTextType**](../Model/ASupplierPurchasingOrgTextType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierPurchasingOrgTextSupplierSupplierPurchasingOrganizationPurchasingOrganizationLanguageLanguageLongTextIDLongTextIDDelete()`

```php
aSupplierPurchasingOrgTextSupplierSupplierPurchasingOrganizationPurchasingOrganizationLanguageLanguageLongTextIDLongTextIDDelete($supplier, $purchasing_organization, $language, $long_text_id)
```

Deletes supplier purchasing organization text data by using key fields.

Deletes text data linked to purchasing organization by Supplier, PurchasingOrganization, Language, and LongTextID.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PurchasingOrganizationTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Account Number of Supplier
$purchasing_organization = 'purchasing_organization_example'; // string | Purchasing Organization
$language = 'language_example'; // string | Language key
$long_text_id = 'long_text_id_example'; // string | Text ID

try {
    $apiInstance->aSupplierPurchasingOrgTextSupplierSupplierPurchasingOrganizationPurchasingOrganizationLanguageLanguageLongTextIDLongTextIDDelete($supplier, $purchasing_organization, $language, $long_text_id);
} catch (Exception $e) {
    echo 'Exception when calling PurchasingOrganizationTextApi->aSupplierPurchasingOrgTextSupplierSupplierPurchasingOrganizationPurchasingOrganizationLanguageLanguageLongTextIDLongTextIDDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Account Number of Supplier | |
| **purchasing_organization** | **string**| Purchasing Organization | |
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

## `aSupplierPurchasingOrgTextSupplierSupplierPurchasingOrganizationPurchasingOrganizationLanguageLanguageLongTextIDLongTextIDGet()`

```php
aSupplierPurchasingOrgTextSupplierSupplierPurchasingOrganizationPurchasingOrganizationLanguageLanguageLongTextIDLongTextIDGet($supplier, $purchasing_organization, $language, $long_text_id, $select): \BeLenka\SAP\BusinessPartner\Model\ASupplierPurchasingOrgTextType
```

Retrieves supplier purchasing organization text data by using the key fields.

Retrieves supplier purchasing organization text data using Supplier, PurchasingOrganization, Language, and LongTextID

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PurchasingOrganizationTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Account Number of Supplier
$purchasing_organization = 'purchasing_organization_example'; // string | Purchasing Organization
$language = 'language_example'; // string | Language key
$long_text_id = 'long_text_id_example'; // string | Text ID
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aSupplierPurchasingOrgTextSupplierSupplierPurchasingOrganizationPurchasingOrganizationLanguageLanguageLongTextIDLongTextIDGet($supplier, $purchasing_organization, $language, $long_text_id, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasingOrganizationTextApi->aSupplierPurchasingOrgTextSupplierSupplierPurchasingOrganizationPurchasingOrganizationLanguageLanguageLongTextIDLongTextIDGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Account Number of Supplier | |
| **purchasing_organization** | **string**| Purchasing Organization | |
| **language** | **string**| Language key | |
| **long_text_id** | **string**| Text ID | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ASupplierPurchasingOrgTextType**](../Model/ASupplierPurchasingOrgTextType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierPurchasingOrgTextSupplierSupplierPurchasingOrganizationPurchasingOrganizationLanguageLanguageLongTextIDLongTextIDPatch()`

```php
aSupplierPurchasingOrgTextSupplierSupplierPurchasingOrganizationPurchasingOrganizationLanguageLanguageLongTextIDLongTextIDPatch($supplier, $purchasing_organization, $language, $long_text_id, $modified_a_supplier_purchasing_org_text_type)
```

Updates supplier purchasing organization text data using key fields.

Updates text data linked to purchasing organization by using Supplier, PurchasingOrganization, Language, and LongTextID fields.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PurchasingOrganizationTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Account Number of Supplier
$purchasing_organization = 'purchasing_organization_example'; // string | Purchasing Organization
$language = 'language_example'; // string | Language key
$long_text_id = 'long_text_id_example'; // string | Text ID
$modified_a_supplier_purchasing_org_text_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedASupplierPurchasingOrgTextType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedASupplierPurchasingOrgTextType | New property values

try {
    $apiInstance->aSupplierPurchasingOrgTextSupplierSupplierPurchasingOrganizationPurchasingOrganizationLanguageLanguageLongTextIDLongTextIDPatch($supplier, $purchasing_organization, $language, $long_text_id, $modified_a_supplier_purchasing_org_text_type);
} catch (Exception $e) {
    echo 'Exception when calling PurchasingOrganizationTextApi->aSupplierPurchasingOrgTextSupplierSupplierPurchasingOrganizationPurchasingOrganizationLanguageLanguageLongTextIDLongTextIDPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Account Number of Supplier | |
| **purchasing_organization** | **string**| Purchasing Organization | |
| **language** | **string**| Language key | |
| **long_text_id** | **string**| Text ID | |
| **modified_a_supplier_purchasing_org_text_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedASupplierPurchasingOrgTextType**](../Model/ModifiedASupplierPurchasingOrgTextType.md)| New property values | |

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
