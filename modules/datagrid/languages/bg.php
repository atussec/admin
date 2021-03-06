<?php
//------------------------------------------------------------------------------             
//*** Bulgarian (bg)
//------------------------------------------------------------------------------
function setLanguage(){ 
    $lang['='] = "=";  // "равно"; 
    $lang['>'] = ">";  // "по-голямо"; 
    $lang['<'] = "<";  // "по-малко";            
    $lang['add'] = "Добави"; 
    $lang['add_new'] = "+ Добави нов"; 
    $lang['add_new_record'] = "Добави нов запис";
    $lang['add_new_record_blocked'] = "Security check: attempt of adding a new record! Check your settings, the operation is not allowed!";    
    $lang['adding_operation_completed'] = "Операцията по добавяне е успешна!";
    $lang['adding_operation_uncompleted'] = "Операцията по добавяне е неуспешна!";                                    
    $lang['and'] = "и";
    $lang['any'] = "някой";                                                 
    $lang['ascending'] = "Увеличаващо"; 
    $lang['back'] = "Назад"; 
    $lang['cancel'] = "Прекъсни";
    $lang['cancel_creating_new_record'] = "Сигурни ли сте, че искате да премахнете записа?";
    $lang['check_all'] = "Избери всички";
    $lang['clear'] = "Clear";                
    $lang['create'] = "Създай"; 
    $lang['create_new_record'] = "Създай нов запис"; 
    $lang['current'] = "сегашен"; 
    $lang['delete'] = "Премахни"; 
    $lang['delete_record'] = "Премахни запис";
    $lang['delete_record_blocked'] = "Security check: attempt of deleting a record! Check your settings, the operation is not allowed!";    
    $lang['delete_selected'] = "Премахни избраното";
    $lang['delete_selected_records'] = "Сигурни ли сте че искате да премахнете избрания запис?";
    $lang['delete_this_record'] = "Сигурни ли сте че искате да премахнете този запис?";                                 
    $lang['deleting_operation_completed'] = "Премахването е исъществено успешно!";
    $lang['deleting_operation_uncompleted'] = "Премахването е незавършено!";                                    
    $lang['descending'] = "Намаляващо";
    $lang['details'] = "Подробно";
    $lang['details_selected'] = "Виж избрани";            
    $lang['edit'] = "Редактирай";
    $lang['edit_selected'] = "Редактирай избрани";
    $lang['edit_record'] = "Редактирай запис"; 
    $lang['edit_selected_records'] = "Сигурни ли сте че искате да редактирате избрания запис?";               
    $lang['errors'] = "Грешки";            
    $lang['export_to_excel'] = "Експорт към Excel";
    $lang['export_to_pdf'] = "Експорт към PDF";
    $lang['export_to_xml'] = "Експорт към XML";
    $lang['export_message'] = "<label class=\"default_class_label\">Файла _FILE_ е готов. След като приключите истеглянето,</label> <a class=\"default_class_error_message\" href=\"javascript: window.close();\">затворете прозореца</a>.";
    $lang['field'] = "Поле"; 
    $lang['field_value'] = "Стойност";
    $lang['file_find_error'] = "Не мога да намеря файла: <b>_FILE_</b>. <br>Проверете че съществъва и опитайте отново!";                                    
    $lang['file_opening_error'] = "Не мога да отворя файла. Проверете правата си.";                        
    $lang['file_writing_error'] = "Не мога да запиша във файла. Проверете правата си!";
    $lang['file_invalid file_size'] = "Грешен размер на файла";
    $lang['file_uploading_error'] = "Грешка при ъплоуда, опитайте отново!";
    $lang['file_deleting_error'] = "Грешка при премахване!";
    $lang['first'] = "първи";
    $lang['handle_selected_records'] = "Are you sure you want to handle the selected records?";
    $lang['hide_search'] = "Скрий търсене";
    $lang['last'] = "последен";
    $lang['like'] = "like";
    $lang['like%'] = "like%";  // "започва със"; 
    $lang['%like'] = "%like";  // "завършва със";
    $lang['%like%'] = "%like%";  
    $lang['loading_data'] = "зарежда данни...";
    $lang['max'] = "макс";                
    $lang['next'] = "следващ";
    $lang['no'] = "Не";                                
    $lang['no_data_found'] = "Няма информация"; 
    $lang['no_data_found_error'] = "Няма намерена информация!";                                
    $lang['no_image'] = "Мяма изображение";
    $lang['not_like'] = "не прилича";
    $lang['of'] = "на";
    $lang['operation_was_already_done'] = "The operation was already completed! You cannot retry it again.";            
    $lang['or'] = "или";                
    $lang['pages'] = "Страници";                    
    $lang['page_size'] = "Размер на страница"; 
    $lang['previous'] = "Предишен";                
    $lang['printable_view'] = "Изглед принтер";
    $lang['print_now'] = "Принтирай";
    $lang['print_now_title'] = "Натисни за да принтираш";
    $lang['record_n'] = "Запис #";
    $lang['refresh_page'] = "Refresh Page";
    $lang['remove'] = "Премахни";
    $lang['reset'] = "Обнови";                        
    $lang['results'] = "Резултат";
    $lang['required_fields_msg'] = "<font color='#cd0000'>*</font> Отбелязаните полета са задължителни";
    $lang['search'] = "Търси"; 
    $lang['search_d'] = "Търси"; // (description) 
    $lang['search_type'] = "Тип търсене"; 
    $lang['select'] = "Избери";
    $lang['set_date'] = "Постави дата";
    $lang['sort'] = "Sort";    
    $lang['total'] = "Общо";
    $lang['turn_on_debug_mode'] = "За по-вече информация, преминете в debug mode.";
    $lang['uncheck_all'] = "Отмаркирай всички";
    $lang['unhide_search'] = "Открий търсене";
    $lang['unique_field_error'] = "The field _FIELD_ позволява само уникална стойност - моля пре-въведете!";            
    $lang['update'] = "Обнови"; 
    $lang['update_record'] = "Обнови запис";
    $lang['update_record_blocked'] = "Security check: attempt of updating a record! Check your settings, the operation is not allowed!";
    $lang['updating_operation_completed'] = "Обновяването завърши успешно!";
    $lang['updating_operation_uncompleted'] = "Обновяване то е незавършено!";                        
    $lang['upload'] = "Ъплоуд";
    $lang['view'] = "Виж"; 
    $lang['view_details'] = "Виж подробности";
    $lang['warnings'] = "Внимание";            
    $lang['with_selected'] = "С избраните";
    $lang['wrong_field_name'] = "Грешно име на поле";
    $lang['wrong_parameter_error'] = "Грешен параметър [<b>_FIELD_</b>]: _VALUE_";
    $lang['yes'] = "ДА";                
    
    return $lang;
}
?>