<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key

$keyGl = '23bc075b710da43f0ffb50ff9e889aed';
$host =  'http://api.yadrocrm.ru/tmp';

Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', '23bc075b710da43f0ffb50ff9e889aed');
Introvert\Configuration::getDefaultConfiguration()->setHost('http://api.yadrocrm.ru/tmp');


function totalBudget($date_from, $date_to){
 //   echo "primer";
    $api = new Introvert\ApiClient();
    $crm_user_id = null; // int[] | фильтр по id ответственного
    $status = 142; // int[] | фильтр по id статуса
    $id = null; // int[] | фильтр по id
    $ifmodif = ""; // string | фильтр по дате изменения. timestamp или строка в формате 'D, j M Y H:i:s'
    $count = 250; // int | Количество запрашиваемых элементов
    $offset = 0; // int | смещение, относительно которого нужно вернуть элементы
    try {
        $result = $api->lead->getAll($crm_user_id, $status, $id, $ifmodif, $count, $offset);
        $sum = 0;
  //      echo '<pre>';
  //      echo($result[result][0][date_close]),' ',$result[count];
  //      echo '</pre>';
        for($i = 0; $i < $result[count]; $i++)
            if(($result[result][$i][date_close] > $date_from)&&($result[result][$i][date_close] < $date_to)){
                $sum += $result[result][$i][price];     
            }
        return ($sum);
    } catch (Exception $e) {
        echo 'Exception when calling LeadApi->getAll: ', $e->getMessage(), PHP_EOL;
    }
} 

function getClients() {
    return [
        [
            'id' => 1,
            'name' => 'intrdev',
            'api' => '23bc075b710da43f0ffb50ff9e889aed'
        ],
        [
            'id' => 2,
            'name' => 'artedegrass0',
            'api' => '23bc075b710da43f0ffb50ff9e889aed',
        ],
    ];
}

function run(){
    echo '<table border="2" >';
    for($i = 0; $i < count(getClients()); $i++){
        Introvert\Configuration::getDefaultConfiguration()->setApiKey('key', getClients()[$i][api]);
        $api = new Introvert\ApiClient();
        if(!empty($active = $api->account->info())){
            echo '<tr>';
            echo '<td>', getClients()[$i][id], '</td>';
            echo '<td>', getClients()[$i][name], '</td>';
            echo '<td>', totalBudget(1612409493, 1643945493),'</td>';
            echo '</tr>';
        } 
    }
echo '</table>';
}

run();

?>