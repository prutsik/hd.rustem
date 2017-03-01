<?php
function lang($phrase){
    static $lang = array(
'NAVBAR_files'=>'Файли заявок',
'NAVBAR_live'=>'Активність користувачів',

'ALLSTATS_main' => 'Загальна статистика ',
'ALLSTATS_help' => 'У даному розділі міститься статистика всіх відділів та їх користувачів, на які Ви маєте права доступу.',
'ALLSTATS_unit' => 'Інформація про заявки Ваших відділів',
'ALLSTATS_unit_free' => 'Вільних заявок ',
'ALLSTATS_unit_lock' => 'Зайнятих заявок ',
'ALLSTATS_unit_ok' => 'Виконаних заявок ',
'ALLSTATS_user' => 'Поточна інформація про заявки користувачів Ваших відділів',
'ALLSTATS_user_fio' => 'ПІБ',
'ALLSTATS_user_free' => 'Вільних',
'ALLSTATS_user_lock' => 'блокування',
'ALLSTATS_user_ok' => 'Виконаних',
'ALLSTATS_user_out_all' => 'Створенню (всього)',
'ALLSTATS_user_out_all_not' => 'Створенню (не виконання)',
'stats_last_time'=>'Останній вхід: ',

'T_from'=>'з',
'FILES_title' => 'Файли заявок',
'FILES_off' => 'В даний момент відключено завантаження файлів до заявки. Для включення перейдіть <a href="./config"> сюди </a> і активуйте завантаження файлів до заявки. ',
'FILES_info' => 'В даному разділі ви можете переглянути всі прикріплені файли до заявки, а також видалити їх.',
'FILES_name' => 'Файл',
'FILES_ticket' => 'Заявка',
'FILES_size' => 'Розмір',
'FILES_del'=>'Видалити',
'FILES_down'=>'Завантажити',

'Live_title'=>'Активність користувачів',
'Live_info'=>'В даному розділі ви можете подивитися статус всіх користувачів системи.',
'Live_units'=>'Відділ',



'DEPS_off'=>'В даний момент відключений фіксований список тем заявок. Для його включення перейдіть <a href="./config"> сюди </a> і виберіть теми заявок "фіксований список".',


'CONF_mail'=>'E-mail адміністратора',
'CONF_title' => 'Налаштування системи',
'CONF_mains' => 'Загальні настройки',
'CONF_name' => 'Назва організації',
'CONF_title_org' => 'Заголовок системи',
'CONF_url' => 'URL системи',
'CONF_2arch' => 'Через скільки днів заявку в архів',
'CONF_2arch_info' => 'Для автоматичного перенесення заявок в архів, додайте в cron-планувальник рядок:',
'CONF_f_login' => 'Перший вхід і активація',
'CONF_f_login_opt_true' => 'Доступна посилання',
'CONF_false' => 'Не активно ',
'CONF_f_login_info' => 'Якщо у Вас вже є база користувачів (а точніше їх email), то кожен новий користувачів буде вводити email, і якщо такий вже є в базі, то на нього буде надсилатися пароль. Адміністратора це позбавляє від створення паролів і активації учёток. ',
'CONF_subj' => 'Теми заявок',
'CONF_fix_list' => 'Фіксований список',
'CONF_subj_text' => 'Поле вводу',
'CONF_subj_info' => 'При створенні заявок Ви можете визначити фіксирований набір тем або ж текстове поле, в яке вписують назву теми заявки.',
'CONF_fup' => 'Завантаження файлів до заявки',
'CONF_true' => 'Активно',
'CONF_fup_info' => 'Можливість прикріплення файлів до заявки.',
'CONF_act_edit' => 'Редагувати',
'CONF_mail_name' => 'Налаштування пошти',
'CONF_mail_status' => 'Поштові повідомлення',
'CONF_mail_host' => 'Адреса SMTP-сервера',
'CONF_mail_port' => 'Порт SMTP-сервера',
'CONF_mail_auth' => 'Авторизація',
'CONF_mail_type' => 'Тип авторизації',
'CONF_mail_login' => 'Логін',
'CONF_mail_pass' => 'Пароль',
'CONF_mail_from' => 'Відправник',
'CONF_mail_debug' => 'Режим налагодження',
'CONF_mail_type'=>'Тип',
'CONF_file_types'=>'Дозволені типи файлів',
'CONF_file_size'=>'Максимальний розмір файла',
'HELPER_info'=>'В даному розділі можуть міститися інструкції та документація для вирішення типових проблем.',
'CONF_info'=>'В даному розділі містяться основні настройки системи.',


	'LIST_pin' => 'Відділів',
        'DASHBOARD_TITLE' => 'Панель приладів',
        'DASHBOARD_ticket_stats' => 'Статистика заявок',
        'DASHBOARD_ticket_in_desc' => 'Вхідні вільні заявки, які ви можете взяти',
        'DASHBOARD_ticket_in' => 'вхідні заявки',
        'DASHBOARD_ticket_lock' => 'заблоковано мною',
        'DASHBOARD_ticket_lock_desc' => 'Заявки, з якими Ви працюєте',
        'DASHBOARD_ticket_out' => 'вихідні заявки',
        'DASHBOARD_ticket_out_desc' => 'Заявки, які створені Вами та залишились не виконаними',
        'DASHBOARD_last_news' => 'Останні зміни',
        'DASHBOARD_last_help' => 'Останнє з Центру Знань',
        'DASHBOARD_author' => 'Автор',
        'DASHBOARD_last_in' => 'Останні вхідні заявки',
        'APPROVED_info' => 'В даному розділі містяться запити користувачів системи на зміну інформації о клієнтах (користувачів).',
        'WORKERS_info' => 'В даному розділі міститься інформація про користувачів (клієнтів), ви можете знайти користувача та відправити запит на зміну інформації. Якщо у вас є достатньо прав, то зміна відбудеться одразу без підтвердження.',
        'NEW_title' => 'Створення нової заявки',
        'NEW_ok' => 'Заявка успішно створена!',
        'NEW_ok_1' => 'Ви можете',
        'NEW_ok_2' => 'поділитися посиланням',
        'NEW_ok_3' => 'на заявку або',
	'NEW_ok_4' => 'роздрукуйте її',
        'NEW_from' => 'Від кого',
        'NEW_from_desc' => 'ПІБ або<br>логін<br>користувача,<br>який<br>звернувся за<br>допомогою',
        'NEW_fio' => 'ПІБ, логін або тел користувача',
        'NEW_fio_desc' => 'Заповніть це поле',
        'NEW_to' => 'Кому',
        'NEW_to_desc' => 'Виконувач<br>заявки - або<br>весь відділ,<br>або<br>опціонально<br>конкретного<br>працівника.',
        'NEW_to_unit' => 'Підрозділ',
        'NEW_to_unit_desc' => 'Вкажіть відділ призначення або працівника',
        'NEW_to_user' => 'Виконавець',
        'NEW_prio' => 'Пріорітет',
        'NEW_prio_low' => 'Низький',
        'NEW_prio_norm' => 'Середній',
        'NEW_prio_high' => 'Високий',
        'NEW_prio_high_desc' => 'Буде<br>задіяно<br>SMS-<br>інформування',
        'NEW_subj' => 'Тема',
        'NEW_subj_msg' => 'Вкажіть тему заявки',
        'NEW_subj_det' => 'Тема заявки',
        'NEW_MSG' => 'Текст',
        'NEW_MSG_msg' => 'Вкажіть детально суть заявки',
        'NEW_MSG_ph' => 'Суть заявки',
        'NEW_button_create' => 'Створити заявку',
        'NEW_button_reset' => 'Очистити поля',
        'LIST_title' => 'Список заявок',
        'LIST_ok_t' => 'виконані заявки',
        'LIST_lock_t_i' => 'заявки, з якими Ви працюєте',
        'LIST_lock_t' => 'заявки, з якими інші працюють',
        'LIST_find_ph' => 'Введіть # або тему заявки, або текст заявки, або текст коментаря',
        'LIST_find_button' => 'Пошук',
        'LIST_in' => 'Вхідні',
        'LIST_out' => 'Вихідні',
        'LIST_arch' => 'Архів',
        'LIST_loading' => 'Йде завантаження',
        'CREATE_ACC_success' => 'Ваш обліковий запис успішно активовано!<br> На Вашу електронну пошту відіслано логін та пароль.',
        
        'CREATE_ACC_already' => 'Ваш обліковий запис вже активовано.',
        'CREATE_ACC_error' => 'Не знайдено користувача з таким електронним адресом.',
        'MAIN_TITLE' => 'СИСТЕМА ЗАЯВОК',
        'AUTH_USER' => 'Авторизація користувача',
        'login' => 'Логін',
        'pass' => 'Пароль',
        'remember_me' => 'Запам\'ятати мене',
        'error_auth' => 'Помилка авторизації.<br> Перевірте логін та пароль.',
        'first_in_auth' => 'Перший вхід та активація',
		'user_auth' => 'Активація користувача',
		'work_mail' => 'Ваш робочий e-mail',
		'action_auth' => 'Активувати',
		'log_in' => 'Увійти',
		'work_mail_ph' => 'Вкажіть Вашу робочу елeктронну пошту (e-mail).',
'NOTES_single' => 'Запис...',
't_LIST_prio' => 'Прiорiтет',
't_LIST_subj' => 'Тема',
//<?=lang('t_LIST_prio');
't_LIST_worker' => 'Користувач',
't_LIST_create' => 'Створено',
't_LIST_ago' => 'Минуло',
't_LIST_init' => 'Ініціатор',
't_LIST_to' => 'Кому',
't_LIST_status' => 'Статус',
't_LIST_action' => 'Дія',

't_list_a_nook' => 'відмітити, як не виконано',
't_list_a_unlock' => 'розблокувати',
't_list_a_lock' => 'заблокувати',
't_list_a_ok' => 'виконати',
't_list_a_all' => 'Всім',
't_list_a_user_ok' => 'Виконав',
't_list_a_date_ok' => 'Виконано',
't_list_a_p_norm' => 'Середній прiорiтет',
't_list_a_p_low' => 'Низький прiорiтет',
't_list_a_p_high' => 'Високий прiорiтет',
't_list_a_oko' => 'виконано',
't_list_a_arch' => 'в архіві',
't_list_a_lock_i' => 'працюю я',
't_list_a_lock_u' => 'працює',
't_list_a_hold' => 'очікування дії',
't_list_a_ok_no' => 'Виконано/не виконано',

'HELP_desc' => 'Опис проблеми',
'HELP_do' => 'Рішення',
'HELP_save' => 'Зберегти',
'HELP_back' => 'Назад',
'HELP_all' => 'Всі',
'HELP_create' => 'Створити',
'MSG_no_records' => 'Немає записів',
'TICKET_name' => 'Заявка',
'TICKET_print'=>'роздрукувати заявку',



'WORKER_TITLE' => 'Інформація про користувача',
'WORKER_fio' => 'ПІБ',
'WORKER_login' => 'Логін',
'WORKER_posada' => 'Посада',
'WORKER_unit' => 'Підрозділ',
'WORKER_tel' => 'Тел',
'WORKER_tel_full' => 'Телефон',
'WORKER_room' => 'Кабінет',
'WORKER_mail' => 'E-mail',
'WORKER_total' => 'Заявок',
'WORKER_last' => 'Остання',
'WORKER_edit_info' => 'Зміна інформації',
'WORKER_send_approve' => 'Відправити запит на зміну',

'PROFILE_msg_ok' => 'Інформацію успішно змінено.',
'PROFILE_msg_error' => 'Логін або e-mail мають не корректний формат.',
'PROFILE_msg_pass_err' => 'Старий пароль не вірний.',
'PROFILE_msg_pass_err2' => 'Нові паролі не співпадають.',
'PROFILE_msg_pass_err3' => 'Пароль повинен бути не менше 4 символів.',
'PROFILE_msg_pass_ok' => 'Пароль успішно змінено. Вам потрібно <a href=\'index.php\'>зайти заново в систему</a>.',
'PROFILE_msg_te' => 'Помилка',
'PROFILE_priv'=>'Ваші права в системі',
'PROFILE_priv_unit'=>'Доступ до відділів',

'TABLE_name' => 'Назва',
'TABLE_action' => 'Дія',
'PROFILE_msg_send' => 'Запит на зміну інформації про користувача відіслано. Зміни відбудуться тільки після перевірки адміністратором.',

'TICKET_msg_OK' => 'Заявка виконана',
'TICKET_msg_OK_error' => 'Не можливе виконання. Заявка вже виконана користувачем',
'TICKET_msg_unOK' => 'Заявка не виконана',
'TICKET_msg_unOK_error' => 'Не можливе не виконання',
'TICKET_msg_lock' => 'Заявку заблоковано',
'TICKET_msg_lock_error' => 'Не можливо заблокувати заявку. З нею працює',
'TICKET_msg_unlock' => 'Заявку розблоковано',
'TICKET_msg_refer' => 'Заявку переадресовано',
'empty' => 'пусто',
't_list_a_top' => 'ТОП 10 результатів пошуку',


'TICKET_status_arch' => 'заявка в архіві',
'TICKET_status_ok' => 'заявка виконана користувачем',
'TICKET_status_lock' => 'с заявкою працює',
'TICKET_status_new' => 'нова заявка, очікування дії',

'TICKET_action_unlock' => 'Розблокувати',
'TICKET_action_lock' => 'Заблокувати',
'TICKET_action_ok' => 'Виконано',
'TICKET_action_nook' => 'Не виконано',
'TICKET_msg_updated' => 'Заявку було оновлено.',
'TICKET_edit' => 'редагувати',

'TICKET_t_from' => 'Від',
'TICKET_t_was_create' => 'Було створено',
'TICKET_t_to' => 'Кому',
'TICKET_t_last_edit' => 'Останнє редагування',
'TICKET_t_worker' => 'Користувач',
'TICKET_t_last_up' => 'Останнє оновлення',
'TICKET_t_status' => 'Статус',
'TICKET_t_prio' => 'Пріорітет',
'TICKET_t_subj' => 'Тема',
'TICKET_t_refer' => 'Переадресувати',
'TICKET_t_refer_to' => 'Переадресувати на',
'TICKET_t_opt' => 'опціонально',
'TICKET_t_in_arch' => 'Заявка знаходиться в архіві.',
'TICKET_t_ok' => 'Заявку успішно виконано користувачем',
'TICKET_t_ok_1' => 'Через деякий час заявка перейде в архів.',
'TICKET_t_lock' => 'На даний час с заявкою працює користувач',
'TICKET_t_lock_1' => 'Тому Ви не можете працювати с заявкою.',
'TICKET_t_lock_i' => 'На даний час Ви працюєте с заявкою. Для того, щоб інші могли працювати, розблокуйте її.',
'TICKET_t_comment' => 'Коментарі',
'TICKET_t_history' => 'Історія змін',
'TICKET_t_your_comment' => 'Ваш коментар',
'TICKET_t_det_ticket' => 'Вкажіть детально суть заявки',
'TICKET_t_comm_ph' => 'Коментар до заявки',
'TICKET_t_send' => 'Відправити',
'TICKET_t_date' => 'Дата',
'TICKET_t_init' => 'Ініціатор',
'TICKET_t_action' => 'Дія',
'TICKET_t_desc' => 'Опис',
'TICKET_t_a_refer' => 'заявку переадресовано на',
'TICKET_t_a_arch' => 'заявку перенесено в архів',
'TICKET_t_a_ok' => 'заявку відмічено як виконано',
'TICKET_t_a_nook' => 'заявку відмічено як не виконано',
'TICKET_t_a_lock' => 'заявку заблоковано',
'TICKET_t_a_unlock' => 'заявку розблоковано',
'TICKET_t_a_create' => 'заявку було створено',
'TICKET_t_a_e_text' => 'в заявці було змінено повідомлення',
'TICKET_t_a_e_subj' => 'в заявці було змінено тему',
'TICKET_t_a_com' => 'заявку було прокоментовано',
'TICKET_t_no' => 'Немає такої заявки',
'TICKET_error_msg'=>'<strong>Упс!</strong> У Вас немає прав на додавання нового клієнта.',
'CLIENTS_name' => 'Користувачі',
'CLIENTS_find' => 'Знайти',
'CLIENTS_find_me' => 'Скористайтеся пошуком для редагування інформації...',
'USERS_profile_priv'=>'Доступ до заявок',

'TICKET_p_add_client'=>'Додавання клієнта',
'TICKET_p_edit_client'=>'Редагування клієнта',

'NAVBAR_tickets' => 'Заявки',
'NAVBAR_create_ticket' => 'Створити заявку',
'NAVBAR_list_ticket' => 'Список заявок',
'NAVBAR_workers' => 'Користувачі',
'NAVBAR_helper' => 'Центр знань',
'NAVBAR_notes' => 'Блокнот',
'NAVBAR_admin' => 'Адміністрування',
'NAVBAR_users' => 'Користувачі системи',
'NAVBAR_deps' => 'Відділи системи',
'NAVBAR_approve' => 'Підтвердження',
'NAVBAR_all_tickets' => 'Всі заявки',
'NAVBAR_reports' => 'Звіти',
'NAVBAR_db' => 'Довідники',
'NAVBAR_posads' => 'Посади',
'NAVBAR_units' => 'Управління',
'NAVBAR_subjs' => 'Теми заявок',
'NAVBAR_profile' => 'Профіль',
'NAVBAR_help' => 'Допомога',
'NAVBAR_logout' => 'Вийти',



'TICKET_ACTION_refer' => 'переадресовано користувачем',
'TICKET_ACTION_refer_to' => 'на',
'TICKET_ACTION_ok' => 'виконано користувачем',
'TICKET_ACTION_nook' => 'не виконано користувачем',
'TICKET_ACTION_lock' => 'заблоковано користувачем',
'TICKET_ACTION_unlock' => 'розблоковано користувачем',
'TICKET_ACTION_create' => 'створено користувачем',
'TICKET_ACTION_edit' => 'редактовано користувачем',
'TICKET_ACTION_edit' => 'редактовано користувачем',
'TICKET_ACTION_comment' => 'прокоментовано користувачем',
'TICKET_ACTION_arch' => 'заявку перенесено в архів',


'HELPER_title' => 'Центр знань',
'HELPER_back' => 'назад',
'HELPER_print'=>'роздрукувати',
'HELPER_pub' => 'Опублікував',
'HELPER_date' => 'Дата',
'HELPER_find' => 'Знайти',
'HELPER_create' => 'створити новий запис',
'HELPER_desc' => 'Опис проблеми або питання...',


'NOTES_title' => 'Персональний блокнот',
'NOTES_link' => 'Посилання на запис',
'NOTES_create' => 'створити новий запис',
'NOTES_cr' => 'Створіть новий запис або оберіть...',


'P_title' => 'Редагування інформації',
'P_main' => 'Загальна інформація',
'P_login' => 'Логін',
'P_mail' => 'E-mail',
'P_mail_desc' => 'Використовується виключно для сповіщення.',
'P_edit' => 'Редагувати',
'P_passedit' => 'Зміна пароля',
'P_pass_old' => 'Старий пароль',
'P_pass_old2' => 'Пароль старий',
'P_pass_new' => 'Новий пароль',
'P_pass_new2' => 'Пароль новий',
'P_pass_new_re' => 'Повторіть новий пароль',
'P_pass_new_re2' => 'Пароль новий (повторно)',
'P_do_edit_pass' => 'Змінити пароль',
'PROFILE_msg_add'=>'Користувача (клієнта) успішно додано',
'JS_not_found' => 'Не знайдено...',
'JS_ticket' => 'Заявку',
'JS_up' => 'Оновлено!',
'JS_save' => 'Зберегти',
'JS_pub' => 'Поділитись',
'JS_del' => 'Дійсно бажаєте видалити?',
'JS_create' => 'Створіть новий запис або оберіть...',
'JS_low' => 'Низький',
'JS_norm' => 'Середній',
'JS_high' => 'Високий',
'JS_unit' => 'Заповніть поле підрозділ',
'JS_probl' => 'Заповніть поле опис проблеми',
'JS_ok' => 'Виконано',
'JS_no_ok' => 'Не виконано',
'JS_unlock' => 'Розблокувати',
'JS_lock' => 'Заблокувати',


'USERS_title' => 'Користувачі системи',
'USERS_create' => 'Створити користувача',
'USERS_list' => 'Список користувачів',

'USERS_msg_add' => 'Користувача успішно додано!',
'USERS_new' => 'Новий користувач',
'USERS_fio' => 'ПІБ',
'USERS_fio_full' => 'Прізвіще, ім\'я та по-батькові',
'USERS_login' => 'Логін',
'USERS_pass' => 'Пароль',
'USERS_mail' => 'E-mail',
'USERS_units' => 'Відділи',
'USERS_unit' => 'Відділ',
'USERS_nach1' => 'Начальник управління',
'USERS_nach1_desc' => 'Буде видно всі заявки.',
'USERS_nach' => 'Начальник відділу',
'USERS_nach_desc' => 'Буде видно всі заявки, адресовані до обраного відділу, а також адресовані всім користувачам відділу.',
'USERS_wo' => 'Працівник',
'USERS_wo_desc' => 'Буде видно всі заявки, адресовані на відділ та користувачу. Заявки іншим користувачам відділу буде не видно.',
'USERS_make_create' => 'Створити користувача',

'USERS_uid' => 'UID',
'USERS_privs' => 'Привілеї',
'USERS_p_1' => 'Нач. відділу',
'USERS_p_2' => 'Працівник',
'USERS_p_3' => 'Нач. управління',
'USERS_msg_edit_ok' => 'Користувача успішно відредаговано!',
'USERS_make_edit' => 'Редагування користувача',
'USERS_acc' => 'Аккаунт',
'USERS_not_active' => 'Не активовано',
'USERS_active' => 'Активовано',
'USERS_editable' => 'Редагувати користувача',
'USERS_delete' => 'Видалити користувача',
'DEPS_title' => 'Відділи',
'DEPS_name' => 'Назва відділу',
'DEPS_add' => 'Додати',
'DEPS_n' => 'Назва',
'DEPS_action' => 'Дія',


'APPROVE_title' => 'Підтвердження зміни інформації',
'APPROVE_info' => 'Інфо',
'APPROVE_fio' => 'ПІБ',
'APPROVE_login' => 'Логін',
'APPROVE_posada' => 'Посада',
'APPROVE_unit' => 'Підрозділ',
'APPROVE_tel' => 'Тел',
'APPROVE_adr' => 'Адреса',
'APPROVE_mail' => 'Mail',
'APPROVE_app' => 'Підтвердити?',
'APPROVE_orig' => 'Оригінал',
'APPROVE_yes' => 'Так',
'APPROVE_no' => 'Ні',
'APPROVE_want' => 'хоче змінити на',


'POSADA_title' => 'Посади',
'POSADA_name' => 'Назва посади',
'POSADA_add' => 'Додати',
'POSADA_n' => 'Назва',
'POSADA_action' => 'Дія',


'UNITS_title' => 'Управління системи',
'UNITS_name' => 'Назва управління',
'UNITS_add' => 'Додати',
'UNITS_n' => 'Назва',
'UNITS_action' => 'Дія',


'SUBJ_title' => 'Теми заявок',
'SUBJ_name' => 'Назва теми',
'SUBJ_add' => 'Додати',
'SUBJ_n' => 'Назва',
'SUBJ_action' => 'Дія',

'DEPS_info'=>'В даному розділі знаходяться відділи, в які входять користувачі системи.<br> При створенні заявки, ви можете обрати один з цих відділів.',
'SUBJ_info'=>'В даному розділі знаходяться теми заявок.<br> При створенні заявки, ви можете обрати тему заявки.',
'POSADA_info'=>'В даному розділі знаходяться посади користувачів (клієнтів).<br> При створенні заявки, якщо у Вас є права на редагування або додавання користувачів (клієнтів), Ви можете обирати посаду.',
'UNITS_info'=>'В даному розділі знаходяться відділи користувачів (клієнтів).<br> При створенні заявки, якщо у Вас є права на редагування або додавання користувачів (клієнтів), Ви можете обирати відділ.',
'STATS_TITLE' => 'Статистика користувача',
'STATS_in' => 'Вхідні  заявки',
'STATS_out' => 'Вихідні заявки',
'STATS_new' => 'Нові',
'STATS_lock' => 'З якими працюю',
'STATS_ok' => 'Виконано мною',
'STATS_nook' => 'Не виконані',
'STATS_create' => 'Створено мною',
'STATS_lock_o' => 'Працюють',
'STATS_ok_o' => 'Виконано',
'STATS_help1' => '<li>Нові - заявки, які адресовані Вам або Вашому відділу і Ви можете їх виконати.</li>	<li>Заблоковані - заявки, над якими Ви працюєте.</li> <li>Виконані - заявки, які Ви вже виконали (через деякий час перейдуть в архів та зникнуть за графіку)</li>',
'STATS_help2' => '<li>Не виконані - заявки, які Ви створили, але їх ще ніхто не виконав.</li><li>Заблоковані - заявки, над якими хтось працює.</li><li>Виконані - заявки, які Ви створили та їх виконали</li>',
'STATS_in_now' => 'Вхідні заявки на даний час',
'STATS_t' => 'Заявок',
'STATS_t_ok' => 'Виконані',
'STATS_t_free' => 'Вільні',
'STATS_out_all' => 'Вихідні заявки за весь період',
'STATS_t_lock' => 'З якими працюють',



'DASHBOARD_def_msg' => ', вітаємо Вас в системі заявок!</strong></center><br>Рекомендуємо Вам ознайомитись з <a href=\'help\' class=\'alert-link\'> </i> інструкцією</a> по роботі з системою. Або <a href=\'create\' class=\'alert-link\'>створіть нову заявку</a> прямо зараз!',
  
'msg_creted_new_user' => 'Буде створено нового користувача.',


'MAIL_active' => 'Обліковий запис активовано',
'MAIL_adr' => 'Адреса',
'MAIL_active_u' => 'Обліковий запис активовано користувачу',
'MAIL_cong' => 'Вітаємо Вас в системі заявок',
'MAIL_data' => 'Дані',
'MAIL_name' => 'Система заявок',
'MAIL_new' => 'НОВА ЗАЯВКА',
'MAIL_code' => 'Код заявки',
'MAIL_2link' => 'Перейти на сторінку заявки',
'MAIL_info' => 'Інформація',
'MAIL_created' => 'Створив заявку',
'MAIL_to' => 'Кому',
'MAIL_prio' => 'Пріорітет',
'MAIL_worker' => 'Працівник',
'MAIL_msg' => 'Повідомлення',
'MAIL_subj' => 'Тема',
'MAIL_text' => 'Текст',
'REFER_comment_add'=>'доповнив',
'TICKET_file_upload'=>'обрати файли',
'TICKET_file_startupload'=>'завантажити',
'TICKET_file_upload_msg'=>'Ви можете перенести файли на сторінку',
'TICKET_file_add'=>'Додати файл',
'TICKET_file_list'=>'Додатковi файли',
'SYSTEM_lang'=>'Мова',
'summernote_lang'=> 'uk-UA',
'note_save'=>'Запис збережено',
'upload_errortypes'=>'Тип файлу не допускається',
'upload_errorsize'=>'Занадто великий файл',
'last_more'=>'ще',
'TICKET_file_notupload'=>'відмінити',
'TICKET_file_notupload_one'=>'відмінити',
'upload_not_u' => 'Ви забули завантажити файли',
'userinfo_ticket'=>'Заявки користувача',
'file_info'=>'Файл',
'file_info2'=>'завантажений',
'ticket_sort_def'=>'Показати всі',
'ticket_sort_ok'=>'Виконані',
'ticket_sort_ilock'=>'Заблоковані мною',
'ticket_sort_lock'=>'Заблоковані не мною',
'HELP_title' => 'Інструкція по роботі з заявками',
'HELP_new' => 'Створення заявки',
'HELP_review' => 'Перегляд заявки',
'HELP_edit_user' => 'Зміна інформації про користувача',
'HELP_new_text' => '<p>Для створення заявки, Вам необхідно заповнити обов\'язкові поля.
                                </p>
                                <ol>
                                    <li><strong>Від кого </strong> - Вам необхідно почати набирати частина прізвища, ім\'я, по батькові або логін. Якщо такий працівник вже є в системі, то Вам автоматично буде запропоновано вибрати його із Списку. Якщо його немає - то він буде створений. У правій частині сторінки Ви можете додатково вказати контактну інформацію про працівника. Як правило це контактний телефон, адреса.</li>
                                    <li><strong>Кому</strong> - вказується відділ. Обов\'язково вказати відділ, а також опціонально виконавця. Якщо вказати тільки відділ, то заявку побачать всі співробітники відділу. Якщо вказати ще й виконавця, то заявку побачить лише виконавець а також начальник його відділу.</li>
                                    <li><strong>Пріоритет </strong> - вказується пріоритет виконання заявки. У загальному списку заявки його можна побачити певними позначками.</li>
                                    <li><strong>Тема</strong> - вказується стисло тема заявки.</li>
                                    <li><strong>Повідомлення </strong> - вказується детально суть заявки.</li>
                                </ol>',
'HELP_review_text' => '<p>Вам доступні три "каталогу": "Вхідні", "Вихідні", "Архів". Детально про них нижче.
                                </p>
                                <ul>
                                    <li><strong>Вхідні </strong> - в цьому каталозі містяться всі заявки, адресуванні Вам безпосередньо або Вашому відділу. 
При наявності прав користувача - ви бачите тільки заявки адресуванні всьому відділу або Вам безпосередньо. (заявки адресовані Вам і відділу). 
При наявності прав начальника відділу - ви бачите все заявки Вашого відділу (адресовані Вам, користувачам, і відділу).
                                    </li>
                                    <li><strong>Вихідні</strong> - в цьому каталозі містяться всі заявки які створювали Ви. Ви можете переглядати статус Ваших створюваних заявок.
                                    </li>
                                    <li><strong>Архів</strong> - в цьому каталозі містяться всі заявки які були виконані, і через деякий час перейшли в архів. Вони відправляються в архів автоматично.
                                    </li>
                                </ul>
                                <p>
                                    У списку заявки мають різні кольори, для того, щоб бачити їх статус. Якщо заявка чорного кольором - то вона не прочитана. Синього - очікує дії. Жовтого - блокована Вами. Сірого - блокована користувачем. Зеленого - заявка виконана.
                                </p>
                                <center>
                                
                                </center>
                                <p>
                                    <strong>Як тільки Ви або Ваш відділ отримали нову заявку </strong>, Вам необхідно переглянути її, натиснувши на тему і прийняти рішення:
                                <ul>
                                    <li><strong>Переадресувати на інший відділ / або користувача </strong> - Якщо заявка не у Вашій компетенції, то ви можете перевести заявку на інший відділ або користувача.
                                    </li>
                                    <li><strong>Заблокувати її </strong> - для того щоб всі бачили, що Ви працюєте в даний час із заявкою, і інші користувачі не змогли нічого робити із заявкою крім начальника відділу.
                                    <li><strong>Виконати її</strong> - значить заявку виконали і через деякий час вона потрапить в архів</li>

                                        </ul>
                                    </li>
                                </ul>
                                </p>
                                <p>
                                    Також ви можете залишити коментар до заявці.
                                </p>',
'HELP_edit_user_text' => '<p>Іноді виникає необхідність доповнити інформацію про користувача або змінити її. 
Для цього існує розділ - Користувачі. Знайдіть того користувача, який вам потрібен і зміните дані. Після чого, вони пройдуть перевірку адміністратором системи і зміняться.
                                </p>',
'' => '',
'' => '',
'' => '',
'' => '',
'' => '',
'' => '',
'' => '',
'' => '',
'' => '',
'' => '',
'' => '',
'' => '',
'' => '',
'' => ''
    );
    return isset($lang[$phrase]) ? $lang[$phrase] : 'undefined';
}
?>
