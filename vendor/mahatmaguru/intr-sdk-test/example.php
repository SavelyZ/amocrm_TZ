<?php
require_once(__DIR__ . '/autoload.php');

// Configure API key authorization: api_key
Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', '');

$api = new Introvert\ApiClient();

try {
    $contactId = 0;

    // можно создать объект и передать в него массив параметров
    $newContact = new \Introvert\Model\Contact([
        'name' => 'Name',
        'phone' => '1234567890',
        'crm_user_id' => '1234567890',
        'custom_fields' => [
            '123456' => 'value'
        ]
    ]);
    $data = $api->contact->create($newContact);
    print_r($data);

    // можно задавать параметры для объекта по отдельности
    $newContact = new \Introvert\Model\Contact();
    $newContact->setName('Name2');
    $newContact->setPhone('12345678902');
    $newContact->setCrmUserId('12345678902');
    $newContact->setCustomFields([
        '123456' => 'value2'
    ]);
    $data = $api->contact->create($newContact);
    print_r($data);

    // можно просто передать массив
    $newContact = [
        'name' => 'Name3',
        'phone' => '12345678903',
        'crm_user_id' => '12345678903',
        'custom_fields' => [
            '123456' => 'value3'
        ]
    ];
    $data = $api->contact->create($newContact);
    print_r($data);

} catch (Exception $e) {
    echo 'Exception when calling api method ', $e->getMessage(), PHP_EOL;
}
