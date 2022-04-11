# Introvert\SmsApi

All URIs are relative to *https://test.api.yadrocrm.ru/tmp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDPTemplates**](SmsApi.md#getDPTemplates) | **GET** /sms/getDPTemplates | Возвращает шаблоны sms для цифровой воронки
[**getTemplates**](SmsApi.md#getTemplates) | **GET** /sms/getTemplates | Возвращает шаблоны sms
[**send**](SmsApi.md#send) | **POST** /sms | Отправляет sms


# **getDPTemplates**
> object getDPTemplates()

Возвращает шаблоны sms для цифровой воронки

Возвращает шаблоны sms для цифровой воронки

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();

try {
    $result = $api->sms->getDPTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->getDPTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplates**
> \Introvert\Model\SmsTemplate getTemplates()

Возвращает шаблоны sms

Возвращает шаблоны sms

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();

try {
    $result = $api->sms->getTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->getTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Introvert\Model\SmsTemplate**](../Model/SmsTemplate.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **send**
> object send($body)

Отправляет sms

Отправляет sms

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$body = new \Introvert\Model\Sms(); // \Introvert\Model\Sms | Объект отправляемого sms

try {
    $result = $api->sms->send($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->send: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Introvert\Model\Sms**](../Model/\Introvert\Model\Sms.md)| Объект отправляемого sms |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

