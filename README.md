<h1>Тестовое задание</h1>
<p>
    1. Расположение базы данных для импорта:
    <ul>
        <li><strong>DatabaseForImport</strong>/comments.sql</li>
    </ul>
</p>
<p>
2. Основной конфиг проекта располагается в его корневой папке 
с названием файла .env.example, остальные - в папке config.
</p>
<p>
    3. Инструкция запуска.
    <ul>
        <li>
            Если не установлен nodejs, то <a href="https://nodejs.org/en/">установить</a>;
        </li>
        <li>
            Если не установлен composer, то <a href="https://getcomposer.org/">установить</a>;
        </li>
        <li>
                   В новую папку клонировать файлы приложения:
                   <code>git clone https://github.com/Dalanes/taR8W-E-YjY.git</code>;
                </li>
                <li>
                   После чего установить все библиотеки и модули через composer:
                   
                   
                   composer update
                   composer dump-autoload
                   
</li>
                <li>
                    Создать базу данных и импортировать в неё comments.sql.
                    Сделать это можно двумя методами:
                    <ul>
                        <li>
                            Через консоль командой <code>mysql -u имя_пользователя -p пароль название_базы_данных < путь_до_comments.sql</code>;
                        </li>
                        <li>
                            Через phpMyAdmin (или любым другим приложением, управляющим БД): зайти во вкладку "Импорт",
                            выбрать файл comments.sql и импортировать.
                        </li>
                    </ul>
                </li>
                <li>
                    Зайти в файл .env.example и данные поля подредактировать под себя: 
                    
                    APP_NAME=Название_приложения
                    DB_DATABASE=Наименование_базы_данных
                    DB_USERNAME=Имя_пользователя
                    DB_PASSWORD=Пароль
                    
                    
</li>
                <li>
                    Переименовать .env.example в .env
                </li>
                <li>
                    Выполнить следующую очередь команд перейдя
                    в директорию проекта через консоль:
                    
                    php artisan config:cache
                    npm install
                    npm run dev
                    php artisan serve
</li>
                <li>
                    Открыть браузер и перейти на адрес, указанный в консоле.
                </li>
    </ul>
</p>
<p>
    4. Тестирование проводилось используя хелперскую функцию dd().
</p>

