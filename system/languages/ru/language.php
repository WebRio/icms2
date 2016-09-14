<?php

    define('LANG_LOADING',                   'Загрузка...');
    define('LANG_SENDING',                   'Отправка...');
    define('LANG_MORE',                      'Подробнее');
    define('LANG_VERSION',                   'Версия');

    //CONTENT
    define('LANG_CONTENT_TYPE',              'Тип контента');
    define('LANG_CONTENT_TYPE_SETTINGS',     'Настроить %s');
    define('LANG_CONTENT_ADD_ITEM',          'Добавить %s');
    define('LANG_CONTENT_EDIT_ITEM',         'Редактировать %s');
    define('LANG_CONTENT_DELETE_ITEM',       'Удалить %s');
    define('LANG_CONTENT_DELETE_ITEM_CONFIRM',  'Вы уверены что хотите удалить %s?');
    define('LANG_CONTENT_NOT_APPROVED',      'Ожидает проверки');
    define('LANG_CONTENT_NOT_IS_PUB',		 'Не публикуется');

    define('LANG_SHOW_FILTER',               'Показать фильтр');
    define('LANG_FILTER',                    'Фильтр');
    define('LANG_FILTERS',                   'Фильтры');
    define('LANG_FILTER_FIELD',              'Фильтр по полю');
    define('LANG_FILTER_ADD',                'Добавить фильтр');
    define('LANG_FILTER_LIKE',               'содержит');
    define('LANG_FILTER_LIKE_BEGIN',         'начинается с');
    define('LANG_FILTER_LIKE_END',           'оканчивается на');
    define('LANG_FILTER_DATE_YOUNGER',       'не старше, дней');
    define('LANG_FILTER_DATE_OLDER',         'не моложе, дней');
    define('LANG_FILTER_NOT_NULL',           'заполнено');
    define('LANG_FILTER_IS_NULL',            'не заполнено');
    define('LANG_FILTER_APPLY',              'Фильтровать');
    define('LANG_FILTER_URL',                'Ссылка');
    define('LANG_FILTER_SAVE_DIFF_ORDER',    'Сохранять различную сортировку');
    define('LANG_SORTING_FIELD',             'Сортировка по полю');
    define('LANG_SORTING',                   'Сортировка');
    define('LANG_SORTING_ADD',               'Добавить правило');
    define('LANG_SORTING_ASC',               'По возрастанию');
    define('LANG_SORTING_DESC',              'По убыванию');
    define('LANG_PHOTO',                     'Изображение');
    define('LANG_PHOTOS',                    'Фотографии');
    define('LANG_COMMENTS',                  'Комментарии');
    define('LANG_RATING',                    'Рейтинг');
    define('LANG_KARMA',                     'Репутация');
    define('LANG_KARMA_UP',                  'Поднять');
    define('LANG_KARMA_DOWN',                'Опустить');
    define('LANG_CSS_CLASS',                 'Класс CSS');
    define('LANG_CSS_CLASS_WRAP',            'Класс CSS для контейнера');
    define('LANG_CSS_CLASS_TITLE',           'Класс CSS для заголовка');
    define('LANG_CSS_CLASS_BODY',            'Класс CSS для тела');
    define('LANG_GROUP',                     'Группа');
    define('LANG_GROUPS',                    'Группы');
    define('LANG_WROTE_IN_GROUP',            'в группе');
    define('LANG_DESIGN',					 'Дизайн');

    //WIDGETS
    define('LANG_WP_SYSTEM',                 'Системные');
    define('LANG_WP_CUSTOM',                 'Пользовательские');
    define('LANG_WP_ALL_PAGES',              'Все страницы');
    define('LANG_WP_HOME_PAGE',              'Главная страница');
    define('LANG_WIDGET_TAB_PREV',           'Объединять с предыдущим виджетом');
    define('LANG_WIDGET_TITLE_LINKS',        'Ссылки в заголовке виджета');
    define('LANG_WIDGET_TITLE_LINKS_HINT',   'В формате <b><em>Заголовок | URL</em></b>, например <b><em>Яндекс | http://www.yandex.ru</em></b><br>Если ссылка обернута в фигурные скобки <b>{ }</b> она будет показана только авторизованным пользователям<br>Одна ссылка в каждой строке');
    define('LANG_WIDGET_WRAPPER_TPL',		 'Шаблон контейнера');
    define('LANG_WIDGET_WRAPPER_TPL_HINT',	 'Название файла из папки <b>widgets</b> вашего шаблона, без расширения <b>.tpl.php</b>');
    define('LANG_WIDGET_BODY_TPL',			 'Шаблон виджета');
    define('LANG_WIDGET_BODY_TPL_HINT',	     'Название файла из папки <b>%s</b> вашего шаблона, без расширения <b>.tpl.php</b>');

    //PARSERS
    define('LANG_PARSER_BITMASK_MAX',        'Максимальное количество пунктов списка');
    define('LANG_PARSER_BITMASK_MAX_HINT',   'в предустановленных значениях');
    define('LANG_PARSER_CAPTION',            'Заголовок');
    define('LANG_PARSER_STRING',             'Строковое поле');
    define('LANG_PARSER_HIDDEN',             'Скрытое поле');
    define('LANG_PARSER_NUMBER',             'Число');
    define('LANG_PARSER_NUMBER_FILTER_RANGE','Фильтр по диапазону');
    define('LANG_PARSER_NUMBER_UNITS',       'Единица измерения');
    define('LANG_PARSER_CITY',               'Местоположение');
    define('LANG_PARSER_CITY_LOCATION_TYPE', 'Тип местоположения');
    define('LANG_PARSER_CITY_LOCATION_GROUP', 'Название для группировки');
    define('LANG_PARSER_CITY_LOCATION_GROUP_HINT', 'Если необходимо объединить местоположения страна-область-город, укажите одно имя объединения для всех полей. Как минимум должны быть созданы поля типа "страна" и "область"');
    define('LANG_PARSER_CITY_OUTPUT_STRING', 'Строка вывода значения поля');
    define('LANG_PARSER_CITY_OUTPUT_STRING_HINT', 'Например, "{country}, {city}", где country и city системные имена полей. Полезно использовать, отключая для вывода остальные поля группировки, показывая нужные значения в этом поле. Если не указано - выводится значение текущего поля.');
    define('LANG_PARSER_CHECKBOX',           'Флаг');
    define('LANG_PARSER_TEXT',               'Текст');
    define('LANG_PARSER_TEXT_MAX_LEN',       'Максимальная длина');
    define('LANG_PARSER_TEXT_MIN_LEN',       'Минимальная длина');
    define('LANG_PARSER_SHOW_SYMBOL_COUNT',  'Показывать количество символов при вводе');
    define('LANG_PARSER_HTML',               'Текст HTML');
    define('LANG_PARSER_HTML_EDITOR',        'Редактор HTML');
    define('LANG_PARSER_HTML_FILTERING',     'Обрабатывать типографом');
    define('LANG_PARSER_BUILD_REDIRECT_LINK', 'При обработке типографом внешние ссылки формировать через редирект');
    define('LANG_PARSER_HTML_TEASER_LEN',    'Обрезать текст при просмотре списка');
    define('LANG_PARSER_HTML_TEASER_LEN_HINT','Текст будет обрезан до указанной длины, форматирование будет удалено');
    define('LANG_PARSER_BBCODE',             'Текст: BB-code');
    define('LANG_PARSER_LIST',               'Список');
    define('LANG_PARSER_LIST_FILTER_HINT',   'Номер варианта');
    define('LANG_PARSER_LIST_FILTER_MULTI',  'Множественный выбор в фильтре');
    define('LANG_PARSER_LIST_GROUPS',        'Список групп пользователей');
    define('LANG_PARSER_LIST_GROUPS_SHOW_GUESTS',     'Показывать пункт "Гости"');
    define('LANG_PARSER_LIST_IS_MULTIPLE',   'Разрешить выбор нескольких вариантов');
    define('LANG_PARSER_LIST_MULTIPLE',      'Список: мультивыбор');
    define('LANG_PARSER_LIST_MULTIPLE_SHOW_ALL',      'Показывать пункт "Все"');
    define('LANG_PARSER_URL',                'Ссылка');
    define('LANG_PARSER_URL_REDIRECT',       'Ссылки через редирект');
    define('LANG_PARSER_URL_AUTO_HTTP',      'Автоматически добавлять http://');
    define('LANG_PARSER_AGE',                'Возраст');
    define('LANG_PARSER_AGE_DATE_TITLE',     'Заголовок даты начала отсчета');
    define('LANG_PARSER_AGE_FILTER_RANGE',   'Фильтр по диапазону');
    define('LANG_PARSER_AGE_FROM_DATE',      'Считать от указанной даты');
    define('LANG_PARSER_AGE_FROM_DATE_HINT', 'Если не указано, отсчет будет вестись от текущего значения времени');
    define('LANG_PARSER_DATE',               'Дата');
    define('LANG_PARSER_DATE_FILTER_HINT',   'ГГГГ-ММ-ДД');
    define('LANG_PARSER_DATE_SHOW_TIME',     'Показывать время');
    define('LANG_PARSER_USER',               'Пользователь');
    define('LANG_PARSER_USER_FILTER_HINT',   'ID пользователя');
    define('LANG_PARSER_USERS',              'Список пользователей');
    define('LANG_PARSER_IMAGE',              'Изображение');
    define('LANG_PARSER_IMAGES',             'Набор изображений');
    define('LANG_PARSER_IMAGE_ALLOW_IMPORT_LINK', 'Разрешить добавление по ссылке');
    define('LANG_PARSER_FIRST_IMAGE_EMPHASIZE', 'Выделять первое изображение в записи');
	define('LANG_PARSER_SMALL_IMAGE_PRESET', 'Пресет миниатюр');
    define('LANG_PARSER_IMAGE_SIZE_UPLOAD',  'Создавать превью-изображения');
    define('LANG_PARSER_IMAGE_SIZE_TEASER',  'Размер в списке');
    define('LANG_PARSER_IMAGE_SIZE_FULL',    'Размер в записи');
    define('LANG_PARSER_IMAGE_SIZE_MICRO',   'Микро');
    define('LANG_PARSER_IMAGE_SIZE_SMALL',   'Маленький');
    define('LANG_PARSER_IMAGE_SIZE_NORMAL',  'Средний');
    define('LANG_PARSER_IMAGE_SIZE_BIG',     'Большой');
    define('LANG_PARSER_IMAGE_SIZE_ORIGINAL','Оригинальный');
    define('LANG_PARSER_COLOR',              'Цвет');
    define('LANG_PARSER_FILE',               'Файл');
    define('LANG_PARSER_FILE_LABEL',         'Заголовок ссылки на файл');
    define('LANG_PARSER_FILE_LABEL_NAME',    'Имя файла');
    define('LANG_PARSER_FILE_LABEL_GET',     'Скачать');
    define('LANG_PARSER_FILE_EXTS',          'Допустимые расширения');
    define('LANG_PARSER_FILE_EXTS_HINT',     'Список расширений через запятую');
    define('LANG_PARSER_FILE_EXTS_FIELD_HINT',     'Допустимые типы файлов: %s');
    define('LANG_PARSER_FILE_SIZE_FIELD_HINT',     'Максимальный размер: %s');
    define('LANG_PARSER_FILE_MAX_SIZE',      'Максимальный размер, Мб');
    define('LANG_PARSER_FILE_MAX_SIZE_PHP',  'Не больше чем %d Мб (ограничение в настройках PHP)');
    define('LANG_PARSER_FILE_SHOW_SIZE',     'Показывать размер файла');
    define('LANG_PARSER_CURRENT_TIME',       'Текущее время');
    define('LANG_PARSER_IN_FULLTEXT_SEARCH', 'Участвует в полнотекстовом поиске');
    define('LANG_PARSER_IN_FULLTEXT_SEARCH_HINT', 'Внимание! При изменении этой опции индекс будет перестроен. На больших таблицах это может занять продолжительное время.');
    define('LANG_PARSER_ADD_FROM_LINK', 'добавить по ссылке');
    define('LANG_PARSER_ENTER_IMAGE_LINK', 'Введите ссылку на изображение');
    define('LANG_OR', 'или');
    define('LANG_BEGIN_TYPING', 'Начните вводить или выберите из списка');

    //USERS
    define('LANG_USER',                      'Пользователь');
    define('LANG_USERS',                     'Пользователи');
    define('LANG_AUTHOR',                    'Автор');
    define('LANG_REGISTRATION',              'Регистрация');
    define('LANG_USER_REGISTRATION',         'Регистрация пользователя');
    define('LANG_CREATE_ACCOUNT',            'Создайте аккаунт');
    define('LANG_LOG_IN',                    'Войти');
    define('LANG_LOG_IN_ACCOUNT',            'Войдите, используя Ваш аккаунт');
    define('LANG_LOG_IN_OPENID',             'Войдите через социальные сети');
    define('LANG_LOG_OUT',                   'Выйти');
    define('LANG_NO_ACCOUNT',                'Нет аккаунта?');
    define('LANG_REG_FIRST_TIME',            'Впервые у нас?');
    define('LANG_REG_ALREADY',               'Уже зарегистрированы?');
    define('LANG_EMAIL',                     'E-mail');
    define('LANG_PASSWORD',                  'Пароль');
    define('LANG_RETYPE_PASSWORD',           'Повторите пароль');
    define('LANG_USER_GROUP',                'Группа');
    define('LANG_USER_IS_ADMIN',             'Администратор');
    define('LANG_LOGIN_ERROR',               'Вход не выполнен. Проверьте правильность адреса e-mail и пароля.');
    define('LANG_LOGIN_REQUIRED',            'Для доступа к запрошенной странице необходима авторизация');
    define('LANG_LOGIN_ADMIN_ONLY',          'Войти на отключенный сайт может только администратор');
    define('LANG_NICKNAME',                  'Никнейм');
    define('LANG_ADMIN',                     'Администратор');
    define('LANG_EMAIL_FIND',                'Найти по фрагменту e-mail');
    define('LANG_FIND',                      'Найти');
    define('LANG_MY_PROFILE',                'Мой профиль');
    define('LANG_PROFILE',                   'Профиль');
    define('LANG_CITY',                      'Город');
    define('LANG_REGION',                    'Область');
    define('LANG_COUNTRY',                   'Страна');
    define('LANG_COMPANY',                   'Компания');
    define('LANG_PHONE',                     'Телефон');
    define('LANG_NAME',                      'Имя');
    define('LANG_SURNAME',                   'Фамилия');
    define('LANG_CHANGE_PASS',               'Сменить пароль');
    define('LANG_OLD_PASS',                  'Текущий пароль');
    define('LANG_OLD_PASS_INCORRECT',        'Текущий пароль указан неправильно');
    define('LANG_NEW_PASS',                  'Новый пароль');
    define('LANG_RETYPE_NEW_PASS',           'Повторите новый пароль');
    define('LANG_PASS_CHANGED',              'Пароль успешно изменен');
    define('LANG_REMEMBER_ME',               'Запомнить меня');
    define('LANG_PLEASE_LOGIN',              'Представьтесь, пожалуйста');
    define('LANG_LOGIN_ADMIN',               'Вход для администраторов');
    define('LANG_ONLINE',                    'Онлайн');
    define('LANG_USERS_PROFILE_LAST_IP',     'Последний IP');
    define('LANG_USERS_PROFILE_LOGDATE',     'Последний визит');

    //MODERATION
    define('LANG_MODERATION',                'Модерация');
    define('LANG_MODERATOR',                 'Модератор');
    define('LANG_MODERATORS',                'Модераторы');
    define('LANG_MODERATION_APPROVE',        'Разрешить публикацию');
    define('LANG_MODERATION_APPROVED',       'Страница опубликована');
    define('LANG_MODERATION_APPROVED_BY',    'Проверено модератором');
    define('LANG_MODERATION_PM_AUTHOR',      'Написать автору');
    define('LANG_MODERATION_NOTICE',         'Материал будет опубликован после проверки модератором');
    define('LANG_MODERATION_IDLE',           'Отправлено уведомление модератору %s');
    define('LANG_MODERATION_NO_TASKS',       'Нет материалов требующих проверки');

    //PERMISSIONS
    define('LANG_PERMISSIONS',               'Доступ');
    define('LANG_PERM_RULE',                 'Правило доступа');
    define('LANG_PERM_OPTION_NULL',          'Нет');
    define('LANG_PERM_OPTION_OWN',           'Только свои');
    define('LANG_PERM_OPTION_ALL',           'Все');
    define('LANG_SHOW_TO_GROUPS',            'Показывать группам');
    define('LANG_HIDE_FOR_GROUPS',           'Не показывать группам');

    //AUTHORIZATION
    define('LANG_AUTH_LOGIN',			 'Логин');
    define('LANG_AUTH_PASSWORD',		 'Пароль');

    //PASSWORD RESTORE
    define('LANG_FORGOT_PASS',               'Забыли пароль?');

    //SYSTEM ERRORS
    define('LANG_ERROR',					 'Ошибка');
    define('LANG_FORM_ERRORS',				 'Найдены ошибки в форме');
    define('LANG_TRACE_STACK',				 'Последние вызовы');
    define('ERR_COMPONENT_NOT_FOUND',		 'Требуемый компонент не найден');
    define('ERR_MODEL_NOT_FOUND',			 'Не найдена модель данных или она недоступна для чтения');
    define('ERR_TEMPLATE_NOT_FOUND', 		 'Не найден шаблон для отображения или он недоступен для чтения');
    define('ERR_LIBRARY_NOT_FOUND', 		 'Библиотека не найдена или недоступна для чтения');
    define('ERR_FILE_NOT_FOUND',             'Файл не найден');
    define('ERR_CLASS_NOT_FOUND', 		 	 'Класс не найден или недоступен для чтения');
    define('ERR_MODULE_NOT_FOUND', 		 	 'Модуль не найден');
    define('ERR_DATABASE_QUERY', 		 	 '<b>Ошибка в запросе БД</b>: <p>%s</p>');
    define('ERR_DATABASE_CONNECT', 		 	 'Ошибка соединения с базой данных');
    define('ERR_PAGE_NOT_FOUND', 		 	 'Страница не найдена');
    define('ERR_SITE_OFFLINE',               'Сайт отключен');
    define('ERR_SITE_OFFLINE_FULL',          'Сайт отключен. <a href="%s">Включить</a>');

    //UPLOAD ERRORS
    define('LANG_UPLOAD_ERR_OK',             'Файл успешно загружен');
    define('LANG_UPLOAD_ERR_INI_SIZE', 		 'Размер файла превышает допустимый: %s');
    define('LANG_UPLOAD_ERR_FORM_SIZE',      'Размер файла превышает допустимый');
    define('LANG_UPLOAD_ERR_PARTIAL', 		 'Файл был загружен не полностью');
    define('LANG_UPLOAD_ERR_NO_FILE', 		 'Файл не был загружен');
    define('LANG_UPLOAD_ERR_NO_TMP_DIR',     'Не найдена папка для временных файлов на сервере');
    define('LANG_UPLOAD_ERR_CANT_WRITE', 	 'Ошибка записи файла на диск');
    define('LANG_UPLOAD_ERR_EXTENSION', 	 'Загрузка файла была прервана');
    define('LANG_UPLOAD_ERR_MIME',           'Файл имеет неподходящий формат');

    //MONEY
    define('LANG_CURRENCY',                  'руб.');

    //VALIDATION ERRORS
    define('ERR_VALIDATE_REQUIRED',          'Заполните поле');
    define('ERR_VALIDATE_MIN',               'Слишком маленькое значение (минимум: %s)');
    define('ERR_VALIDATE_MAX',               'Слишком большое значение (максимум: %s)');
    define('ERR_VALIDATE_MIN_LENGTH',        'Слишком короткое значение (мин. длина: %s)');
    define('ERR_VALIDATE_MAX_LENGTH',        'Слишком длинное значение (макс. длина: %s)');
    define('ERR_VALIDATE_EMAIL',             'Неверный формат электронной почты');
    define('ERR_VALIDATE_REGEXP',            'Неверный формат');
    define('ERR_VALIDATE_ALPHANUMERIC',      'Только латинские буквы и цифры');
    define('ERR_VALIDATE_SYSNAME',           'Только латинские буквы (в нижнем регистре), цифры и знаки подчеркивания');
    define('ERR_VALIDATE_SLUG',              'Только латинские буквы (в нижнем регистре), цифры, дефис и прямой слеш');
    define('ERR_VALIDATE_DIGITS',            'Введите только цифры');
    define('ERR_VALIDATE_NUMBER',            'Введите число');
    define('ERR_VALIDATE_UNIQUE',            'Значение уже используется');
    define('ERR_VALIDATE_INVALID',           'Указано недопустимое значение');

    define('LANG_VALIDATE_REQUIRED',         'Поле должно быть заполнено');
    define('LANG_VALIDATE_DIGITS',           'Только целые числа');
    define('LANG_VALIDATE_NUMBER',           'Только числа');
    define('LANG_VALIDATE_ALPHANUMERIC',     'Только латинские буквы и цифры');
    define('LANG_VALIDATE_EMAIL',            'Адрес электронной почты');
    define('LANG_VALIDATE_UNIQUE',           'Уникальное значение');

    define('ERR_REQ_EMAIL', 		 	 	 'Необходимо указать e-mail!');
    define('ERR_EMPTY_FIELDS', 			 	 'Обнаружены пустые поля!');
    define('ERR_NICKNAME_EXISTS', 			 'Никнейм &laquo;%s&raquo; занят');
    define('ERR_WRONG_OLD_PASS', 		 	 'Ошибка изменения пароля: Старый пароль указан неверно');
    define('ERR_NEW_PASS_MISMATCH', 		 'Ошибка изменения пароля: Пароли не совпали');
    define('ERR_NEW_PASS_REQUIRED', 		 'Нужно указать новый пароль дважды!');

    //CAPTCHA
    define('LANG_CAPTCHA_CODE', 		 	 'Защита от спама');
    define('LANG_CAPTCHA_ERROR', 		 	 'Неправильно указан код защиты от спама');

    //LISTS
    define('LANG_NO_ITEMS', 		 		 'Нет элементов для просмотра');

    //ACTIONS
    define('LANG_ADD_CATEGORY',              'Создать категорию');
    define('LANG_ADD_CATEGORY_QUICK',        'или создать новую категорию внутри выбранной');
    define('LANG_EDIT_CATEGORY',             'Редактировать категорию');
    define('LANG_DELETE_CATEGORY',           'Удалить категорию');
    define('LANG_DELETE_CATEGORY_CONFIRM',   'Вы уверены что хотите удалить категорию?\nВсе содержимое также будет удалено!');
    define('LANG_ADD_FOLDER_QUICK',          'или создать новую папку');
    define('LANG_EDIT_FOLDER',               'Редактировать папку');
    define('LANG_DELETE_FOLDER',             'Удалить папку');
    define('LANG_DELETE_FOLDER_CONFIRM',     'Вы уверены что хотите удалить папку?\nВсе содержимое также будет удалено!');

    define('LANG_BY_DEFAULT',                'По-умолчанию');
    define('LANG_BASIC_OPTIONS',             'Общие');
    define('LANG_YES',                       'Да');
    define('LANG_NO',                        'Нет');
    define('LANG_LIST_LIMIT',                'Записей в списке');
    define('LANG_LIST_ALL',					 'Показать все');
    define('LANG_LIST_EMPTY',                'Нет элементов для отображения');
    define('LANG_LIST_NONE_SELECTED',        'Ничего не выделено');
    define('LANG_DOWNLOAD',                  'Скачать');
    define('LANG_UPLOAD',                    'Загрузить');
    define('LANG_SELECT_UPLOAD',             'Выбрать и загрузить');
    define('LANG_DROP_TO_UPLOAD',            'Перетащите файлы сюда, чтобы загрузить');
    define('LANG_CREATE',                    'Создать');
    define('LANG_APPLY',                     'Применить');
    define('LANG_ACCEPT',                    'Принять');
    define('LANG_DECLINE',                   'Отклонить');
    define('LANG_CONFIRM',                   'Подтвердить');
    define('LANG_INVITE',                    'Пригласить');
    define('LANG_ADD', 						 'Добавить');
    define('LANG_ADD_CONTENT',				 'Создать страницу');
    define('LANG_ADD_USER',                  'Создать пользователя');
    define('LANG_ADD_NEWS',					 'Создать новость');
    define('LANG_ADD_MENU',				 	 'Создать меню');
    define('LANG_ADD_MENUITEM',				 'Создать пункт меню');
    define('LANG_MENU_MORE',                 'Ещё');
    define('LANG_VIEW', 					 'Просмотр');
    define('LANG_EDIT', 					 'Редактировать');
    define('LANG_EDIT_SELECTED',			 'Редактировать выделенные');
    define('LANG_SHOW', 					 'Показать');
    define('LANG_SHOW_ALL',                  'Показать все');
    define('LANG_SHOW_SELECTED',			 'Показать выделенные');
    define('LANG_ADMIN_SELECTED', 			 'Сделать выбранных администраторами');
    define('LANG_UNADMIN_SELECTED',			 'Снять администраторские права у выделенных');
    define('LANG_HIDE', 					 'Скрыть');
    define('LANG_HIDE_SELECTED',			 'Скрыть выделенные');
    define('LANG_CONFIG', 					 'Настройки');
    define('LANG_DELETE', 					 'Удалить');
    define('LANG_DELETE_SELECTED',			 'Удалить выделенные');
    define('LANG_DELETE_SELECTED_CONFIRM',   'Удалить выделенные элементы?');
    define('LANG_MOVE',                      'Перенести');
    define('LANG_MOVE_TO_CATEGORY',          'Перенести в категорию');
    define('LANG_ON',	 					 'Вкл.');
    define('LANG_OFF', 						 'Выкл.');
    define('LANG_SAVE',						 'Сохранить');
    define('LANG_SAVE_CHANGES',              'Сохранить изменения');
    define('LANG_SAVE_ORDER',                'Сохранить порядок');
    define('LANG_SAVING',                    'Сохранение...');
    define('LANG_PREVIEW',                   'Предпросмотр');
    define('LANG_SEND',						 'Отправить');
    define('LANG_INSTALL',					 'Установить');
    define('LANG_INSERT',					 'Вставить');
    define('LANG_CANCEL',					 'Отменить');
    define('LANG_BACK',					 	 'Назад');
    define('LANG_IN_QUEUE',					 'Объектов на очереди');
    define('LANG_SELECT',                    'Выбрать');
    define('LANG_SELECT_ALL',				 'Выделить все');
    define('LANG_DESELECT_ALL',				 'Снять все');
    define('LANG_INVERT_ALL',				 'Инвертировать');
    define('LANG_CLOSE',                     'Закрыть');
    define('LANG_CONTINUE',                  'Продолжить');
    define('LANG_OPTIONS',                   'Опции');
    define('LANG_REPLY',                     'Ответить');
    define('LANG_REPLY_SPELLCOUNT',          'ответ|ответа|ответов');
    define('LANG_FROM',                      'от');
    define('LANG_TO',                        'до');
    define('LANG_IS_ENABLED',                'Активность');
    define('LANG_HELP',                      'Помощь');
    define('LANG_HELP_URL',                  'http://docs.instantcms.ru');

    //NAVIGATION
    define('LANG_HOME',                      'Главная');
    define('LANG_BACK_TO_HOME',              'Вернуться на главную');
    define('LANG_PAGE_NEXT', 				 'Следующая');
    define('LANG_PAGE_PREV',                 'Предыдущая');
    define('LANG_PAGE_FIRST', 				 'Первая');
    define('LANG_PAGE_LAST',                 'Последняя');
    define('LANG_PAGES', 					 'Страницы');
    define('LANG_PAGE', 					 'Страница');
    define('LANG_PAGE_ADD',                  'Добавить страницу');
    define('LANG_PAGE_DELETE',               'Удалить страницу');
    define('LANG_PAGE_CURRENT_DELETE',       'Удалить текущую страницу');
    define('LANG_PAGES_SHOWN',               'Показаны %d-%d из %d');
    define('LANG_PAGES_SHOW_PERPAGE',        'Показывать по');

    //FORMS
    define('LANG_SUBMIT', 					 'Отправить');
    define('LANG_SUBMIT_NOT_SAVE',			 'Покинуть страницу? Возможно, внесённые изменения не сохранятся.');

    //LAYOUT
    define('LANG_PAGE_BODY',                 'Тело страницы');
    define('LANG_PAGE_MENU',                 'Меню страницы');
    define('LANG_PAGE_HEADER',               'Шапка страницы');
    define('LANG_PAGE_FOOTER',               'Подвал страницы');
    define('LANG_PAGE_LOGO',                 'Логотип');
    define('LANG_MENU',                      'Меню');
    define('LANG_TITLE', 					 'Заголовок');
    define('LANG_SHOW_TITLE',                'Показывать заголовок');
    define('LANG_SYSTEM_NAME',               'Системное имя');
    define('LANG_SYSTEM_EDIT_NOTICE',	     '<b>Внимание:</b> при изменении системного имени поле будет создано заново и все текущие данные будут потеряны!');
    define('LANG_DESCRIPTION',               'Описание');
    define('LANG_INFORMATION',               'Информация');
    define('LANG_CONTENT', 					 'Содержимое');
    define('LANG_CATEGORY',                  'Категория');
    define('LANG_CATEGORY_TITLE',            'Название категории');
    define('LANG_FOLDER',                    'Папка');
    define('LANG_ROOT_NODE',                 'Корень');
    define('LANG_ROOT_CATEGORY',             'Корневая категория');
    define('LANG_PARENT_CATEGORY',           'Родительская категория');
    define('LANG_ADDITIONAL_CATEGORIES',	 'Дополнительные категории');
    define('LANG_MESSAGE', 					 'Текст сообщения');
    define('LANG_DATE', 					 'Дата');
    define('LANG_DATE_PUB',                  'Дата публикации');
    define('LANG_PUBLICATION',				 'Публикация');
    define('LANG_SLUG',                      'URL');
    define('LANG_PRIVACY',                   'Приватность');
    define('LANG_PRIVACY_PUBLIC',            'Показывать всем');
    define('LANG_PRIVACY_PRIVATE',           'Показывать только друзьям');
    define('LANG_PRIVACY_PRIVATE_HINT',      'Это приватная запись. Ее могут посмотреть только друзья автора.');
    define('LANG_ON_FRONT',				 	 'На главной');
    define('LANG_SHOWED',					 'Показано');
    define('LANG_ORDER',					 'Порядок');
    define('LANG_ORDER_DOWN',				 'Переместить вниз');
    define('LANG_ORDER_UP',					 'Переместить вверх');
    define('LANG_HITS',                      'Просмотры');
    define('LANG_GUEST',                     'Гость');

    //SEO
    define('LANG_SEO',                       'SEO');
    define('LANG_ROOT_SEO',                  'SEO для главной страницы');
    define('LANG_SEO_TITLE',                 'Тайтл страницы');
    define('LANG_SEO_KEYS',                  'Ключевые слова');
    define('LANG_SEO_KEYS_HINT',             'Ключевые слова страницы, через запятую');
    define('LANG_SEO_DESC',                  'Описание');
    define('LANG_SEO_DESC_HINT',             'Краткое описание страницы для поисковых систем');
    define('LANG_TAGS',                      'Теги');
    define('LANG_TAGS_HINT',                 'Ключевые слова, через запятую');

    //FILES
    define('LANG_B',               'байт');
    define('LANG_KB',              'Кб');
    define('LANG_MB',              'Мб');
    define('LANG_GB',              'Гб');
    define('LANG_TB',              'Тб');
    define('LANG_PB',              'Пб');

    //UNITS
    define('LANG_UNIT1',                     'единица');
    define('LANG_UNIT2',                     'единицы');
    define('LANG_UNIT10',                    'единиц');
    define('LANG_CH1',                       'символ');
    define('LANG_CH2',                       'символа');
    define('LANG_CH10',                      'символов');

    define('LANG_ISLEFT',                    'осталось');

    //DATES
    define('LANG_ALL',                       'Все');
    define('LANG_JUST_NOW',                  'Только что');
    define('LANG_SECONDS_AGO',               'Меньше минуты');
    define('LANG_YESTERDAY',                 'Вчера');
    define('LANG_TODAY',                     'Сегодня');
    define('LANG_TOMORROW',                  'Завтра');
    define('LANG_WEEK',                      'Неделя');
    define('LANG_WEEK1',                     'неделя');
    define('LANG_WEEK2',                     'недели');
    define('LANG_WEEK10',                    'недель');
    define('LANG_THIS_WEEK',                 'На этой неделе');
    define('LANG_THIS_MONTH',                'Ближайший месяц');
    define('LANG_EVENTS_THIS_WEEK',          'События на этой неделе');
    define('LANG_CALENDAR',                  'Календарь');
    define('LANG_TIME_ZONE',                 'Часовой пояс');
    define('LANG_YEAR',                      'Год');
    define('LANG_YEARS',                     'Года');
    define('LANG_YEAR1',                     'год');
    define('LANG_YEAR2',                     'года');
    define('LANG_YEAR10',                    'лет');
    define('LANG_MONTHS',                    'Месяцы');
    define('LANG_MONTH',                     'Месяц');
    define('LANG_MONTH1',                    'месяц');
    define('LANG_MONTH2',                    'месяца');
    define('LANG_MONTH10',                   'месяцев');
    define('LANG_DAYS',                      'Дни');
    define('LANG_DAY1',                      'день');
    define('LANG_DAY2',                      'дня');
    define('LANG_DAY10',                     'дней');
    define('LANG_HOURS',                     'Часы');
    define('LANG_HOUR1',                     'час');
    define('LANG_HOUR2',                     'часа');
    define('LANG_HOUR10',                    'часов');
    define('LANG_MINUTES',                   'Минуты');
    define('LANG_MINUTE1',                   'минута');
    define('LANG_MINUTE2',                   'минуты');
    define('LANG_MINUTE10',                  'минут');
    define('LANG_SECONDS',                   'Секунды');
    define('LANG_SECOND1',                   'секунда');
    define('LANG_SECOND2',                   'секунды');
    define('LANG_SECOND10',                  'секунд');
    define('LANG_DATE_AGO',                  '%s назад');

    //MAIL
    define('LANG_MAIL_DEFAULT_ALT',          'Для просмотра сообщения требуется почтовый клиент с поддержкой HTML');

    define('LANG_POWERED_BY_INSTANTCMS',     'Работает на <a href="http://instantcms.ru/">InstantCMS</a>');
    define('LANG_ICONS_BY_FATCOW',           'Иконки от <a href="http://www.fatcow.com/free-icons">FatCow</a>');
    define('LANG_DEBUG_QUERY_TIME',          'Запрос занял');