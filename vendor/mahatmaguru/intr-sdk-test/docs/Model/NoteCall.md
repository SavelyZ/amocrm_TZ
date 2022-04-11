# NoteCall

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uniq** | **string** | Уникальный идентификатор звонка | 
**id_widget** | **string** | Идентификатор виджета телефонии | 
**phone** | **string** | Номер телефона | 
**duration** | **int** | Длительность в секундах | 
**link** | **string** | Прямая ссылка на запись звонка | 
**from** | **int** | Добавочный номер | 
**status** | **int** | Статус звонка       * 1 - Оставил голосовое сообщение       * 2 - Перезвонить позже       * 3 - Нет на месте       * 4 - Разговор состоялся       * 5 - Неверный номер       * 6 - Не дозвонился       * 7 - Номер занят | 
**element_id** | **int** |  | 
**element_type** | **int** | 2 (lead), 1 (contact). По умолчанию 2 (lead) | [optional] [default to 2]
**note_type** | **int** | тип звонка, 10 - Входящий звонок, 11 - Исходящий звонок. По умолчанию 10 | [optional] 
**date_create** | **string** |  | [optional] 
**crm_user_id** | **int** | id ответственного за звонок | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


