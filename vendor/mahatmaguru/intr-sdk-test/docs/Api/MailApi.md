# Introvert\MailApi

All URIs are relative to *https://test.api.yadrocrm.ru/tmp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTemplate**](MailApi.md#getTemplate) | **GET** /mail/getTemplates | Возвращает шаблоны писем
[**getTemplatesList**](MailApi.md#getTemplatesList) | **GET** /mail/getTemplatesList | Возвращает список шаблонов писем
[**send**](MailApi.md#send) | **POST** /mail | Отправляет письмо


# **getTemplate**
> object getTemplate($id)

Возвращает шаблоны писем



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$id = 56; // int | 

try {
    $result = $api->mail->getTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailApi->getTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplatesList**
> object getTemplatesList()

Возвращает список шаблонов писем

Тело шаблона не возвращается, воспользуйтесь для этого методом getTemplate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();

try {
    $result = $api->mail->getTemplatesList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailApi->getTemplatesList: ', $e->getMessage(), PHP_EOL;
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

# **send**
> object send($body)

Отправляет письмо

Отправляет письмо от имени сотрудника зарегистрированного в ядре

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');


$api = new Introvert\ApiClient();
$body = new \Introvert\Model\Mail(); // \Introvert\Model\Mail | Объект отправляемого письма

try {
    $result = $api->mail->send($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailApi->send: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Introvert\Model\Mail**](../Model/\Introvert\Model\Mail.md)| Объект отправляемого письма |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

