# BeLenka\SAP\BusinessPartner\PurchasingPartnerFunctionsApi

All URIs are relative to https://:/sap/opu/odata/sap/API_BUSINESS_PARTNER, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aSupplierPartnerFuncGet()**](PurchasingPartnerFunctionsApi.md#aSupplierPartnerFuncGet) | **GET** /A_SupplierPartnerFunc | Retrieves supplier purchasing organization partner function records. |
| [**aSupplierPartnerFuncPost()**](PurchasingPartnerFunctionsApi.md#aSupplierPartnerFuncPost) | **POST** /A_SupplierPartnerFunc | Creates a new partner function data linked to supplier purchasing organization. |
| [**aSupplierPartnerFuncSupplierSupplierPurchasingOrganizationPurchasingOrganizationSupplierSubrangeSupplierSubrangePlantPlantPartnerFunctionPartnerFunctionPartnerCounterPartnerCounterDelete()**](PurchasingPartnerFunctionsApi.md#aSupplierPartnerFuncSupplierSupplierPurchasingOrganizationPurchasingOrganizationSupplierSubrangeSupplierSubrangePlantPlantPartnerFunctionPartnerFunctionPartnerCounterPartnerCounterDelete) | **DELETE** /A_SupplierPartnerFunc(Supplier&#x3D;&#39;{Supplier}&#39;,PurchasingOrganization&#x3D;&#39;{PurchasingOrganization}&#39;,SupplierSubrange&#x3D;&#39;{SupplierSubrange}&#39;,Plant&#x3D;&#39;{Plant}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;,PartnerCounter&#x3D;&#39;{PartnerCounter}&#39;) | Deletes partner function record linked to supplier purchasing organization. |
| [**aSupplierPartnerFuncSupplierSupplierPurchasingOrganizationPurchasingOrganizationSupplierSubrangeSupplierSubrangePlantPlantPartnerFunctionPartnerFunctionPartnerCounterPartnerCounterGet()**](PurchasingPartnerFunctionsApi.md#aSupplierPartnerFuncSupplierSupplierPurchasingOrganizationPurchasingOrganizationSupplierSubrangeSupplierSubrangePlantPlantPartnerFunctionPartnerFunctionPartnerCounterPartnerCounterGet) | **GET** /A_SupplierPartnerFunc(Supplier&#x3D;&#39;{Supplier}&#39;,PurchasingOrganization&#x3D;&#39;{PurchasingOrganization}&#39;,SupplierSubrange&#x3D;&#39;{SupplierSubrange}&#39;,Plant&#x3D;&#39;{Plant}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;,PartnerCounter&#x3D;&#39;{PartnerCounter}&#39;) | Retrieves supplier purchasing organization partner function data by using the key fields. |
| [**aSupplierPartnerFuncSupplierSupplierPurchasingOrganizationPurchasingOrganizationSupplierSubrangeSupplierSubrangePlantPlantPartnerFunctionPartnerFunctionPartnerCounterPartnerCounterPatch()**](PurchasingPartnerFunctionsApi.md#aSupplierPartnerFuncSupplierSupplierPurchasingOrganizationPurchasingOrganizationSupplierSubrangeSupplierSubrangePlantPlantPartnerFunctionPartnerFunctionPartnerCounterPartnerCounterPatch) | **PATCH** /A_SupplierPartnerFunc(Supplier&#x3D;&#39;{Supplier}&#39;,PurchasingOrganization&#x3D;&#39;{PurchasingOrganization}&#39;,SupplierSubrange&#x3D;&#39;{SupplierSubrange}&#39;,Plant&#x3D;&#39;{Plant}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;,PartnerCounter&#x3D;&#39;{PartnerCounter}&#39;) | Updates partner function record linked to supplier purchasing organization by using key fields. |
| [**aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPartnerFunctionGet()**](PurchasingPartnerFunctionsApi.md#aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPartnerFunctionGet) | **GET** /A_SupplierPurchasingOrg(Supplier&#x3D;&#39;{Supplier}&#39;,PurchasingOrganization&#x3D;&#39;{PurchasingOrganization}&#39;)/to_PartnerFunction | Retrieves supplier purchasing organization partner function records. |
| [**aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPartnerFunctionPost()**](PurchasingPartnerFunctionsApi.md#aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPartnerFunctionPost) | **POST** /A_SupplierPurchasingOrg(Supplier&#x3D;&#39;{Supplier}&#39;,PurchasingOrganization&#x3D;&#39;{PurchasingOrganization}&#39;)/to_PartnerFunction | Creates a new partner function data linked to supplier purchasing organization. |


## `aSupplierPartnerFuncGet()`

```php
aSupplierPartnerFuncGet($top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper58
```

Retrieves supplier purchasing organization partner function records.

Retrieves partner function fields of all the available records in the system linked to supplier purchasing organization

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PurchasingPartnerFunctionsApi(
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
    $result = $apiInstance->aSupplierPartnerFuncGet($top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasingPartnerFunctionsApi->aSupplierPartnerFuncGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper58**](../Model/Wrapper58.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierPartnerFuncPost()`

```php
aSupplierPartnerFuncPost($apibusinesspartnera_supplier_partner_func_type_create): \BeLenka\SAP\BusinessPartner\Model\ASupplierPartnerFuncType
```

Creates a new partner function data linked to supplier purchasing organization.

Adds a new partner function record. Partner Counter will be automatically determined if a similar partner function already exists.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PurchasingPartnerFunctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apibusinesspartnera_supplier_partner_func_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierPartnerFuncTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierPartnerFuncTypeCreate | New entity

try {
    $result = $apiInstance->aSupplierPartnerFuncPost($apibusinesspartnera_supplier_partner_func_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasingPartnerFunctionsApi->aSupplierPartnerFuncPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apibusinesspartnera_supplier_partner_func_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierPartnerFuncTypeCreate**](../Model/APIBUSINESSPARTNERASupplierPartnerFuncTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ASupplierPartnerFuncType**](../Model/ASupplierPartnerFuncType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierPartnerFuncSupplierSupplierPurchasingOrganizationPurchasingOrganizationSupplierSubrangeSupplierSubrangePlantPlantPartnerFunctionPartnerFunctionPartnerCounterPartnerCounterDelete()`

```php
aSupplierPartnerFuncSupplierSupplierPurchasingOrganizationPurchasingOrganizationSupplierSubrangeSupplierSubrangePlantPlantPartnerFunctionPartnerFunctionPartnerCounterPartnerCounterDelete($supplier, $purchasing_organization, $supplier_subrange, $plant, $partner_function, $partner_counter)
```

Deletes partner function record linked to supplier purchasing organization.

Deletes partner function record by Supplier, PurchasingOrganization, SupplierSubrange, Plant, PartnerCounter and PartnerFunction

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PurchasingPartnerFunctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Account Number of Supplier
$purchasing_organization = 'purchasing_organization_example'; // string | Purchasing Organization
$supplier_subrange = 'supplier_subrange_example'; // string | Supplier Subrange
$plant = 'plant_example'; // string | Plant
$partner_function = 'partner_function_example'; // string | Partner Function
$partner_counter = 'partner_counter_example'; // string | Partner counter

try {
    $apiInstance->aSupplierPartnerFuncSupplierSupplierPurchasingOrganizationPurchasingOrganizationSupplierSubrangeSupplierSubrangePlantPlantPartnerFunctionPartnerFunctionPartnerCounterPartnerCounterDelete($supplier, $purchasing_organization, $supplier_subrange, $plant, $partner_function, $partner_counter);
} catch (Exception $e) {
    echo 'Exception when calling PurchasingPartnerFunctionsApi->aSupplierPartnerFuncSupplierSupplierPurchasingOrganizationPurchasingOrganizationSupplierSubrangeSupplierSubrangePlantPlantPartnerFunctionPartnerFunctionPartnerCounterPartnerCounterDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Account Number of Supplier | |
| **purchasing_organization** | **string**| Purchasing Organization | |
| **supplier_subrange** | **string**| Supplier Subrange | |
| **plant** | **string**| Plant | |
| **partner_function** | **string**| Partner Function | |
| **partner_counter** | **string**| Partner counter | |

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

## `aSupplierPartnerFuncSupplierSupplierPurchasingOrganizationPurchasingOrganizationSupplierSubrangeSupplierSubrangePlantPlantPartnerFunctionPartnerFunctionPartnerCounterPartnerCounterGet()`

```php
aSupplierPartnerFuncSupplierSupplierPurchasingOrganizationPurchasingOrganizationSupplierSubrangeSupplierSubrangePlantPlantPartnerFunctionPartnerFunctionPartnerCounterPartnerCounterGet($supplier, $purchasing_organization, $supplier_subrange, $plant, $partner_function, $partner_counter, $select): \BeLenka\SAP\BusinessPartner\Model\ASupplierPartnerFuncType
```

Retrieves supplier purchasing organization partner function data by using the key fields.

Retrieves partner function data by Supplier, PurchasingOrganization, SupplierSubrange, Plant, PartnerCounter, and PartnerFunction.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PurchasingPartnerFunctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Account Number of Supplier
$purchasing_organization = 'purchasing_organization_example'; // string | Purchasing Organization
$supplier_subrange = 'supplier_subrange_example'; // string | Supplier Subrange
$plant = 'plant_example'; // string | Plant
$partner_function = 'partner_function_example'; // string | Partner Function
$partner_counter = 'partner_counter_example'; // string | Partner counter
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aSupplierPartnerFuncSupplierSupplierPurchasingOrganizationPurchasingOrganizationSupplierSubrangeSupplierSubrangePlantPlantPartnerFunctionPartnerFunctionPartnerCounterPartnerCounterGet($supplier, $purchasing_organization, $supplier_subrange, $plant, $partner_function, $partner_counter, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasingPartnerFunctionsApi->aSupplierPartnerFuncSupplierSupplierPurchasingOrganizationPurchasingOrganizationSupplierSubrangeSupplierSubrangePlantPlantPartnerFunctionPartnerFunctionPartnerCounterPartnerCounterGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Account Number of Supplier | |
| **purchasing_organization** | **string**| Purchasing Organization | |
| **supplier_subrange** | **string**| Supplier Subrange | |
| **plant** | **string**| Plant | |
| **partner_function** | **string**| Partner Function | |
| **partner_counter** | **string**| Partner counter | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ASupplierPartnerFuncType**](../Model/ASupplierPartnerFuncType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierPartnerFuncSupplierSupplierPurchasingOrganizationPurchasingOrganizationSupplierSubrangeSupplierSubrangePlantPlantPartnerFunctionPartnerFunctionPartnerCounterPartnerCounterPatch()`

```php
aSupplierPartnerFuncSupplierSupplierPurchasingOrganizationPurchasingOrganizationSupplierSubrangeSupplierSubrangePlantPlantPartnerFunctionPartnerFunctionPartnerCounterPartnerCounterPatch($supplier, $purchasing_organization, $supplier_subrange, $plant, $partner_function, $partner_counter, $modified_a_supplier_partner_func_type)
```

Updates partner function record linked to supplier purchasing organization by using key fields.

Updates partner function record by Supplier, PurchasingOrganization, SupplierSubrange, Plant, PartnerCounter, and PartnerFunction.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PurchasingPartnerFunctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Account Number of Supplier
$purchasing_organization = 'purchasing_organization_example'; // string | Purchasing Organization
$supplier_subrange = 'supplier_subrange_example'; // string | Supplier Subrange
$plant = 'plant_example'; // string | Plant
$partner_function = 'partner_function_example'; // string | Partner Function
$partner_counter = 'partner_counter_example'; // string | Partner counter
$modified_a_supplier_partner_func_type = new \BeLenka\SAP\BusinessPartner\Model\ModifiedASupplierPartnerFuncType(); // \BeLenka\SAP\BusinessPartner\Model\ModifiedASupplierPartnerFuncType | New property values

try {
    $apiInstance->aSupplierPartnerFuncSupplierSupplierPurchasingOrganizationPurchasingOrganizationSupplierSubrangeSupplierSubrangePlantPlantPartnerFunctionPartnerFunctionPartnerCounterPartnerCounterPatch($supplier, $purchasing_organization, $supplier_subrange, $plant, $partner_function, $partner_counter, $modified_a_supplier_partner_func_type);
} catch (Exception $e) {
    echo 'Exception when calling PurchasingPartnerFunctionsApi->aSupplierPartnerFuncSupplierSupplierPurchasingOrganizationPurchasingOrganizationSupplierSubrangeSupplierSubrangePlantPlantPartnerFunctionPartnerFunctionPartnerCounterPartnerCounterPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Account Number of Supplier | |
| **purchasing_organization** | **string**| Purchasing Organization | |
| **supplier_subrange** | **string**| Supplier Subrange | |
| **plant** | **string**| Plant | |
| **partner_function** | **string**| Partner Function | |
| **partner_counter** | **string**| Partner counter | |
| **modified_a_supplier_partner_func_type** | [**\BeLenka\SAP\BusinessPartner\Model\ModifiedASupplierPartnerFuncType**](../Model/ModifiedASupplierPartnerFuncType.md)| New property values | |

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

## `aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPartnerFunctionGet()`

```php
aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPartnerFunctionGet($supplier, $purchasing_organization, $top, $skip, $filter, $inlinecount, $orderby, $select): \BeLenka\SAP\BusinessPartner\Model\Wrapper58
```

Retrieves supplier purchasing organization partner function records.

Retrieves partner function fields of all the available records in the system linked to supplier purchasing organization

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PurchasingPartnerFunctionsApi(
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
    $result = $apiInstance->aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPartnerFunctionGet($supplier, $purchasing_organization, $top, $skip, $filter, $inlinecount, $orderby, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasingPartnerFunctionsApi->aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPartnerFunctionGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\BusinessPartner\Model\Wrapper58**](../Model/Wrapper58.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPartnerFunctionPost()`

```php
aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPartnerFunctionPost($supplier, $purchasing_organization, $apibusinesspartnera_supplier_partner_func_type_create): \BeLenka\SAP\BusinessPartner\Model\ASupplierPartnerFuncType
```

Creates a new partner function data linked to supplier purchasing organization.

Adds a new partner function record. Partner Counter will be automatically determined if a similar partner function already exists.

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


$apiInstance = new BeLenka\SAP\BusinessPartner\Api\PurchasingPartnerFunctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supplier = 'supplier_example'; // string | Supplier's Account Number
$purchasing_organization = 'purchasing_organization_example'; // string | Purchasing Organization
$apibusinesspartnera_supplier_partner_func_type_create = new \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierPartnerFuncTypeCreate(); // \BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierPartnerFuncTypeCreate | New entity

try {
    $result = $apiInstance->aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPartnerFunctionPost($supplier, $purchasing_organization, $apibusinesspartnera_supplier_partner_func_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasingPartnerFunctionsApi->aSupplierPurchasingOrgSupplierSupplierPurchasingOrganizationPurchasingOrganizationToPartnerFunctionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supplier** | **string**| Supplier&#39;s Account Number | |
| **purchasing_organization** | **string**| Purchasing Organization | |
| **apibusinesspartnera_supplier_partner_func_type_create** | [**\BeLenka\SAP\BusinessPartner\Model\APIBUSINESSPARTNERASupplierPartnerFuncTypeCreate**](../Model/APIBUSINESSPARTNERASupplierPartnerFuncTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\BusinessPartner\Model\ASupplierPartnerFuncType**](../Model/ASupplierPartnerFuncType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
