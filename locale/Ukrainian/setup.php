<?php
$locale['title'] = "Встановлення PHP-Fusion 9";
$locale['sub-title'] = "Скрипт встановлення PHP-Fusion 9";
$locale['welcome_title'] = 'Вітаємо у системі встановлення PHP-Fusion 9.00';
$locale['welcome_desc'] = "Майстер встановлення проведе Вас через ряд кроків необхідних для встановлення на Ваш сервер CMS PHP-Fusion. Якщо буде потреба додаткової підтримки, будь ласка, ознайомтесь з нашою <a class='strong' href='https://php-fusion.co.uk/infusions/wiki/documentation.php?page=208'>відкритою довідкою з встановлення</a>.";
$locale['terms'] = " Мною прочитано і я погоджуюсь з <a href='https://php-fusion.co.uk/license/'>умовами використання</a> PHP-Fusion.";
$locale['error_000'] = "Для використання PHP-Fusion, Ви маєте ознайомитись і погодитись з <a href='https://php-fusion.co.uk/license/'>умовами використання</a>.";
$locale['os_version'] = '9.0';
$locale['xml_lang'] = "ua";
$locale['charset'] = "utf-8";

// Index
$locale['step1'] = "Крок 1: Введення";
$locale['step2'] = "Крок 2: Перевірка файлів і каталогів";
$locale['step3'] = "Крок 3: Налаштування бази даних";
$locale['step4'] = "Крок 4: Налаштування / Встановлення бази даних";
$locale['step5'] = "Крок 5: Налаштування базової системи";
$locale['step6'] = "Крок 6: Налаштування головного адміністратора";
$locale['final'] = "Крок 7: Остаточні налаштування";

// Buttons
$locale['006'] = "Завершення встановлення";
$locale['007'] = "Далі";
$locale['008'] = "Спробувати ще раз";
$locale['009'] = "Завершити";

// Step 1
$locale['010'] = "Будь ласка, виберіть необхідну локалізацію (мову):";
$locale['011'] = "Завантажити інші локалізації можна з <a href='https://www.php-fusion.co.uk/downloads.php#langpacks'><strong>Офіційного сайту підтримки PHP-Fusion</strong></a>";
$locale['1001'] = 'Вітаємо у режимі відновлення PHP-Fusion 9.00.';
$locale['1002'] = 'Виявлено існуюче встановлення системи.<br/><br/>Будь ласка, виберіть одну із запропонованих дій для продовження.';
$locale['1003'] = 'Чисте встановлення';
$locale['1004'] = 'Ви можете видалити та очистити Вашу базу даних і розпочати чисте встановлення.';
$locale['1005'] = 'БУДЬ ЛАСКА, ЗБЕРЕЖІТЬ ОКРЕМО ВАШ ФАЙЛ CONFIG.PHP. ПІД ЧАС ОЧИЩЕННЯ ЙОГО БУДЕ ВИДАЛЕНО РАЗОМ З ІНШИМИ ДАНИМИ.';
$locale['1006'] = 'Видалити та почати встановлення знову';
$locale['1007'] = 'Встановлювач базової системи';
$locale['1008'] = 'Змінити базові налаштування системи.';
$locale['1009'] = 'Перейти до встановлення системи';
$locale['1010'] = 'Змінити налаштування головного облікового запису';
$locale['1011'] = 'Змінити налаштування головного адміністратора без потребивідновлення паролю або передачі його прав іншій особі.';
$locale['1012'] = 'Змінити налаштування головного адміністратора';
$locale['1013'] = 'Перебудувати файл .htaccess';
$locale['1014'] = 'Скасувати поточні налаштування файлу та замінити їх стандартними';
$locale['1015'] = 'Створити файл';

// Step 2
$locale['2001'] = "[Пройдено]";
$locale['2002'] = "[Помилка]";
$locale['2003'] = "Для продовження встановлення вказані файли/каталоги повинні мати <span class="label label-success">доступ для запису</span>, тому у разі блокування будь-якого контролю, будь ласка встановіть для них права (CHMOD) в значення 755 або 777";
$locale['2004'] = "Перевірка прав для запису відбулась успішно.<br />Натисніть кнопку [Далі], щоб продовжити.";
$locale['2005'] = "Перевірка прав для запису відбулась із помилками, будь-ласка, перевірте права (CHMOD) для файлів/каталогів з відміткою [Помилка].";
$locale['2006'] = 'Оновити';
$locale['2007'] = 'Перевірка структури файлів';

// Step 3 - Access criteria
$locale['3001'] = 'Налаштування бази даних та шляхів доступу на сервері';
$locale['3002'] = "Будь ласка, введіть параметри доступу до Вашої бази даних MySQL.";
$locale['031'] = "Назва хосту бази даних:";
$locale['032'] = "Ім'я користувача:";
$locale['033'] = "Пароль користувача:";
$locale['034'] = "Назва бази даних:";
$locale['035'] = "Префікс для таблиць:";
$locale['036'] = "Префікс для коржиків (cookie):";
$locale['037'] = "Ввімкнути PDO?";
$locale['038'] = "Здається, використання PDO не можливе";
$locale['039'] = "Ні";
$locale['039b'] = "Так";
$locale['039c'] = "Виберіть мови, що будуть використовуватися:";
$locale['039n'] = "Ім'я власника сайту";

// Step 4 - Database Setup
$locale['4001'] = "З'єднання з базою даних встановлено успішно.";
$locale['4002'] = "Файл конфігурації записано успішно.";
$locale['4003'] = "Таблиці бази даних створено успішно.";
$locale['4004'] = "Помилка:";
$locale['4005'] = "Неможливо з'єднатися із базою даних MySQL.";
$locale['4006'] = "Будь ласка, перевірте ім'я користувача та пароль для доступу.";
$locale['4007'] = "Неможливо записати дані в файл конфігурації.";
$locale['4008'] = "Будь ласка, перевірте права на дозвіл запису для файлу config.php.";
$locale['4009'] = "Неможливо створити таблиці бази даних MySQL.";
$locale['049'] = "Будь ласка, вкажіть назву бази даних.";
$locale['050'] = "Неможливо з'єднатися із базою даних MySQL.";
$locale['051'] = "База даних з вказаною назвою не існує.";
$locale['052'] = "Помилка префіксу таблиць.";
$locale['053'] = "Вказаний префікс таблиць вже використовується.";
$locale['054'] = "Неможливо виконати запис чи видалення таблиць.";
$locale['055'] = "Будь ласка, перевірте, чи має вказаний користувач права для читання, запису та видалення таблиць бази даних MySQL.";
$locale['056'] = "Залишились пусті поля.";
$locale['057'] = "Будь ласка, заповніть усі поля для налаштування з'єднання із базою даних MySQL.";

// Step 5
$locale['5001'] = "Будь ласка, перевірте базові налаштування системи.";
$locale['5002'] = "ВАЖЛИВО: Перед продовженням рекомендується створити резервну копію Ваших даних. Видалення системи знищить усі існуючі записи без можливості їх відновлення.";
$locale['5003'] = "Система готова.";
$locale['5004'] = "Ваш сайт тепер повністю налаштований.<br/><br/>Якщо Ви ще не налаштували обліковий запис головного адміністратора, будь ласка, перейдіть до наступного кроку. В іншому разі, можете видалити встановлювача.";

// Step 6 - Super Admin login
$locale['6001'] = "Обліковий запис головного адміністратора";
$locale['6002'] = "Налаштуйте Ваш обліковий запис головного адміністратора.";
$locale['6003'] = "Змінити обліковий запис головного адміністратора";
$locale['6004'] = "Виявлено існуючий обліковий запис головного адміністратора. Якщо бажаєте змінити його налаштування, будь ласка, введіть нові значення для оновлення інформації про головного адміністратора системи. ";
$locale['061'] = "Ім'я користувача:";
$locale['062'] = "Пароль авторизації:";
$locale['063'] = "Підтвердження паролю:";
$locale['064'] = "Пароль адміністрування";
$locale['065'] = "Підтвердження паролю:";
$locale['066'] = "Адреса E-mail:";

// Step 6 - User details validation
$locale['070'] = "Ім'я користувача містить недопустимі символи.";
$locale['070b'] = "Поле з іменем користувача не можна залишати порожнім.";
$locale['071'] = "Паролі авторизації не співпадають.";
$locale['072'] = "Недопустимий пароль авторизації, будь ласка, використовуйте лише латинські літери та цифри.<br />Довжина паролю повинна бути не менше 8 символів.";
$locale['072b'] = "Поля з паролем авторизації та його підтвердженням не можна залишати порожніми.";
$locale['073'] = "Паролі адміністрування не співпадають.";
$locale['074'] = "Паролі авторизації та адміністрування повинні бути різними.";
$locale['075'] = "Недопустимий пароль адміністрування, будь-ласка, використовуйте лише латинські літери та цифри.<br />Довжина паролю повинна бути не менше 8 символів";
$locale['075b'] = "Поля з паролем адміністрування та його підтвердженням не можна залишати порожніми.";
$locale['076'] = "Вказана адреса Е-mail некоректна.";
$locale['076b'] = "Поле з адресою E-mail не можна залишати порожнім.";
$locale['077'] = "Помилка налаштування:";

// Step 6 - Admin Panels
$locale['080'] = "Адміністратори";
$locale['081'] = "Розділи статей";
$locale['082'] = "Статті";
$locale['083'] = "Банери";
$locale['084'] = "BB-коди";
$locale['085'] = "Чорний список";
$locale['086'] = "Коментарі";
$locale['087'] = "Сторінки";
$locale['088'] = "Резервна копія бази даних";
$locale['089'] = "Розділи завантажень";
$locale['090'] = "Завантаження";
$locale['091'] = "ЧАП";
$locale['092'] = "Форум";
$locale['093'] = "Зображення";
$locale['094'] = "Додатки";
$locale['095'] = "Панель додатків";
$locale['096'] = "Користувачі";
$locale['097'] = "Розділи новин";
$locale['098'] = "Новини";
$locale['099'] = "Панелі";
$locale['100'] = "Фотоальбоми";
$locale['101'] = "Інформація про PHP";
$locale['102'] = "Опитування";
$locale['103'] = "";
$locale['104'] = "Навігація";
$locale['105'] = "Усміхайлики";
$locale['106'] = "Ухвалення";
$locale['107'] = "Оновлення";
$locale['108'] = "Групи користувачів";
$locale['109'] = "Розділи посилань";
$locale['110'] = "Посилання";
$locale['111'] = "Головне";
$locale['112'] = "Час і дата";
$locale['113'] = "Форум";
$locale['114'] = "Реєстрація";
$locale['115'] = "Фотогалерея";
$locale['116'] = "Різне";
$locale['117'] = "Приватні повідомлення";
$locale['118'] = "Поля користувача";
$locale['119'] = "Ранги на форумі";
$locale['120'] = "Розділи полів користувача";
$locale['121'] = "Новини";
$locale['122'] = "Користувачі";
$locale['123'] = "Завантаження";
$locale['124'] = "Записів на сторінці";
$locale['125'] = "Безпека";
$locale['126'] = "Новини";
$locale['127'] = "Завантаження";
$locale['128'] = "Скидання паролю адміністрування";
$locale['129'] = "Журнал помилок";
$locale['129a'] = "Журнал користувача";
$locale['129b'] = "robots.txt";
$locale['129c'] = "Налаштування мови";
$locale['129d'] = "Статичні посилання";
$locale['129f'] = "Інтернет магазин";
$locale['130a'] = "Розділи блогу";
$locale['130b'] = "Блог";

//Multilanguage table rights
$locale['MLT001'] = "Статті";
$locale['MLT002'] = "Сторінки";
$locale['MLT003'] = "Завантаження";
$locale['MLT004'] = "ЧАП";
$locale['MLT005'] = "Форум";
$locale['MLT006'] = "Новини";
$locale['MLT007'] = "Фотогалерея";
$locale['MLT008'] = "Опитування";
$locale['MLT009'] = "Шаблони E-mail";
$locale['MLT010'] = "Посилання";
$locale['MLT011'] = "Внутрішні посилання";
$locale['MLT012'] = "Панелі";
$locale['MLT013'] = "Ранги на форумі";
$locale['MLT014'] = "Блог";
$locale['MLT015'] = "Інтернет магазин";

// Step 6 - Navigation Links
$locale['130'] = "Головна";
$locale['131'] = "Статті";
$locale['132'] = "Файли";
$locale['133'] = "ЧАП";
$locale['134'] = "Форум";
$locale['135'] = "Контакти";
$locale['136'] = "Новини";
$locale['137'] = "Посилання";
$locale['138'] = "Фотогалерея";
$locale['139'] = "Пошук";
$locale['140'] = "Пропозиція посилання";
$locale['141'] = "Пропозиція новини";
$locale['142'] = "Пропозиція статті";
$locale['143'] = "Пропозиція зображення";
$locale['144'] = "Пропозиція завантаження";

// Stage 6 - Panels
$locale['160'] = "Навігація";
$locale['161'] = "Зараз на сайті";
$locale['162'] = "Теми форуму";
$locale['163'] = "Останні статті";
$locale['164'] = "Привітання";
$locale['165'] = "Список тем форуму";
$locale['166'] = "Користувач";
$locale['167'] = "Опитування";
$locale['168'] = "";

// Stage 6 - News Categories
$locale['180'] = "Помилки";
$locale['181'] = "Завантаження";
$locale['182'] = "Ігри";
$locale['183'] = "Графіка";
$locale['184'] = "Техніка";
$locale['185'] = "Блоги";
$locale['186'] = "Користувачі";
$locale['187'] = "Додатки";
$locale['188'] = "Медіа";
$locale['189'] = "Інтернет";
$locale['190'] = "Новини";
$locale['191'] = "PHP-Fusion";
$locale['192'] = "Безпека";
$locale['193'] = "Програми";
$locale['194'] = "Теми";
$locale['195'] = "Windows";

// Stage 6 - Sample Forum Ranks
$locale['200'] = "Головний адміністратор";
$locale['201'] = "Адміністратор";
$locale['202'] = "Модератор";
$locale['203'] = "Новенький";
$locale['204'] = "Початківець";
$locale['205'] = "Користувач";
$locale['206'] = "Досвідчений";
$locale['207'] = "Ветеран";
$locale['208'] = "Еліта";

// Stage 6 - Sample Smileys
$locale['210'] = "Посміхаюсь";
$locale['211'] = "Підморгую";
$locale['212'] = "Сумний";
$locale['213'] = "Похмурий";
$locale['214'] = "Здивований";
$locale['215'] = "Дражнюсь";
$locale['216'] = "Крутий";
$locale['217'] = "Сміюсь";
$locale['218'] = "Злий";

// Stage 6 - User Field Categories
$locale['219'] = "Профіль";
$locale['220'] = "Контакти";
$locale['221'] = "Різне";
$locale['222'] = "Параметри";
$locale['223'] = "Статистика";

// Welcome message
$locale['230'] = "Ласкаво просимо на сайт!";

// Final message
$locale['7001'] = "Встановлення завершено успішно";
$locale['7002'] = "PHP-Fusion 9.00 тепер готова до використання. Натисніть кнопку [Завершити] для перезапису файлу config_temp.php в config.php<br/>";
$locale['7003'] = "<strong>Примітка:</strong> З міркувань безпеки настійливо рекомендується<br />видалити каталог /install та встановити права доступу (CHMOD) для файлу config.php на значення 644.";
$locale['7004'] = "Дякуємо за вибір PHP-Fusion!";

// Default time settings
// http://php.net/manual/en/function.strftime.php
$locale['shortdate'] = "%d.%m.%y";
$locale['longdate'] = "%B %d %Y %H:%M:%S";
$locale['forumdate'] = "%d-%m-%Y %H:%M";
$locale['newsdate'] = "%B %d %Y";
$locale['subheaderdate'] = "%B %d %Y %H:%M:%S";

// Email Template Setup
// Please do NOT translate the words between brackets [] !
$locale['T001'] = "Шаблони для E-mail";
$locale['T101'] = "Сповіщення про нові приватні повідомлення";
$locale['T102'] = "Ви отримали нове приватне повідомлення від [USER] на сайті [SITENAME]";
$locale['T103'] = "Вітаємо [RECEIVER],\r\nВи отримали нове приватне повідомлення із заголовком [SUBJECT] від [USER] на сайті [SITENAME]. Ви можете прочитати його за цим посиланням: [SITEURL]messages.php\r\n\r\nПовідомлення: [MESSAGE]\r\n\r\nЯкщо Ви не бажаєте більше отримувати такі сповіщення, можете вимкнути сповіщення через E-mail в панелі керування приватними повідомленнями.\r\n\r\nЗ повагою,\r\n[SENDER].";
$locale['T201'] = "Сповіщення про нові відповіді на форумі";
$locale['T202'] = "Сповіщення про відповідь у темі - [SUBJECT]";
$locale['T203'] = "Вітаємо [RECEIVER],\r\n\r\nУ темі \'[SUBJECT]\', за якою Ви слідкуєте на сайті [SITENAME] з'явилась нова відповідь. Ви можете прочитати її за цим посиланням:\r\n\r\n[THREAD_URL]\r\n\r\nЯкщо Ви не бажаєте більше отримувати такі сповіщення, можете скористатись посиланням \'Припинити слідкувати за цією темою\' у верхній частині теми.\r\n\r\nRegards,\r\n[SENDER].";
$locale['T301'] = "Форма для зв'язку";
$locale['T302'] = "[ТЕМА]";
$locale['T303'] = "[ПОВІДОМЛЕННЯ]";

// Language Admin
$locale['L001'] = "Багатомовність";

// Official Supported System List
$locale['articles']['title'] = "Статті";
$locale['articles']['description'] = "Стандартна ситема документації.";
$locale['blog']['title'] = "Блог";
$locale['blog']['description'] = "Стандартна система блогів.";
$locale['downloads']['title'] = "Завантаження";
$locale['downloads']['description'] = "Стандартна система завантажень.";
$locale['eshop']['title'] = "Інтернет магазин";
$locale['eshop']['description'] = "Система електронної комерції.";
$locale['faqs']['title'] = "Часті питання";
$locale['faqs']['description'] = "Система бази знань на основі запитань-відповідей.";
$locale['forums']['title'] = "Форум";
$locale['forums']['description'] = "Система обговорень на сайті.";
$locale['news']['title'] = "Новини";
$locale['news']['description'] = "Система публікації новин.";
$locale['photos']['title'] = "Світлини";
$locale['photos']['description'] = "Система публікації фотогалерей.";
$locale['polls']['title'] = "Опитування";
$locale['polls']['description'] = "Система опитувань та голосувань користувачів.";
$locale['weblinks']['title'] = "Посилання";
$locale['weblinks']['description'] = "Система каталогів зовнішніх посилань на сайти.";
$locale['install'] = "Встановити базову систему";































?>