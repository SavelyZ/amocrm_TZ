# Introvert\PbxApi

All URIs are relative to *https://test.api.yadrocrm.ru/tmp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**call**](PbxApi.md#call) | **POST** /pbx/call | Совершает звонок
[**history**](PbxApi.md#history) | **GET** /pbx/history | История звонков
[**records**](PbxApi.md#records) | **GET** /pbx/record | Архив записей звонков


# **call**
> object call($from, $to, $to_num, $to_name)

Совершает звонок



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$from = "from_example"; // string | Кто, первый вызываемый номер (номер абонента или внешний номер)
$to = "to_example"; // string | Кому, второй вызываемый номер (любой)
$to_num = "to_num_example"; // string | Телефонный номер который увидит первый вызываемый номер
$to_name = "to_name_example"; // string | Имя пользователя которое увидит первый вызываемый номер

try {
    $result = $api->pbx->call($from, $to, $to_num, $to_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PbxApi->call: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**| Кто, первый вызываемый номер (номер абонента или внешний номер) |
 **to** | **string**| Кому, второй вызываемый номер (любой) |
 **to_num** | **string**| Телефонный номер который увидит первый вызываемый номер | [optional]
 **to_name** | **string**| Имя пользователя которое увидит первый вызываемый номер | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **history**
> object history($date_from, $date_to, $type)

История звонков

Возвращает историю звонков в формате JSON

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$date_from = 56; // int | (timestamp) начальная дата
$date_to = 56; // int | (timestamp) конечная дата
$type = "type_example"; // string | тип звонка inbound/outbound

try {
    $result = $api->pbx->history($date_from, $date_to, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PbxApi->history: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_from** | **int**| (timestamp) начальная дата |
 **date_to** | **int**| (timestamp) конечная дата |
 **type** | **string**| тип звонка inbound/outbound | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **records**
> object records($date_from, $date_to, $type)

Архив записей звонков

Возвращает ссылку на архив записей звонков

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$date_from = 56; // int | (timestamp) начальная дата
$date_to = 56; // int | (timestamp) конечная дата
$type = "type_example"; // string | тип звонка inbound/outbound

try {
    $result = $api->pbx->records($date_from, $date_to, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PbxApi->records: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_from** | **int**| (timestamp) начальная дата |
 **date_to** | **int**| (timestamp) конечная дата |
 **type** | **string**| тип звонка inbound/outbound | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

