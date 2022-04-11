# Introvert\TelegramApi

All URIs are relative to *https://test.api.yadrocrm.ru/tmp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**send**](TelegramApi.md#send) | **POST** /telegram | Отправляет сообщение в telegram


# **send**
> object send($body)

Отправляет сообщение в telegram



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$body = new \Introvert\Model\Telegram(); // \Introvert\Model\Telegram | Объект сообщения

try {
    $result = $api->telegram->send($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelegramApi->send: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Introvert\Model\Telegram**](../Model/\Introvert\Model\Telegram.md)| Объект сообщения |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

