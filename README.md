Дэмо : www.lookatme-blog.in.ua/

Разработать проект по данным критериям:

Шаблон

Реализовать механизм шаблонизатора. Макет сайта создан с помощью

блочной, кросс-браузерной верстки. 

head 

content 

footer 

Footer расположен внизу экрана, независимо от наполнения. 

Пункты меню: 

• Главная

• Контакты

• Личный кабинет

• Войти/Выйти

«Личный кабинет» отображается только для зарегистрированных

пользователей. 

Главная

Страница отображает Ваше резюме с фотографией в произвольной форме. 

Войти/Выйти

1) Не зарегистрированный пользователь

Форма содержит поля: логин и пароль, ссылка на страницу

регистрации. 

a. Успех: отображать в правом верхнем углу иконку пользователя

(аватар), имя пользователя в формате – «[Имя] [1-я буква

фамилии].». Пример: «Иван Д.» 

b. Провал: Вывод ошибок аутентификации. 

2) Зарегистрированный пользователь – «Выйти» 

Регистрация

Форма обратной связи, которая дает возможность пользователям отправлять

письма на указанный адрес. Все поля обязательны для заполнения и

подвергаются проверке: 

• Фамилия; 

• Имя; 

• Логин: проверка на существование дубликатов в базе; 

• Пароль: не менее 6 и не более 16 символов, в базе хранится в

зашифрованном виде; 

• E-mail: корректный e-mail адрес; 

• Дата рождения: формат – «гггг-мм-дд»; 

• Мобильный телефон: формат – «***-*******»; 

• Проверка против спам-ботов (Captcha). 

Плюсом будет двухсторонняя проверка: на сервере и клиенте. 

При успешной регистрации отправляется письмо пользователю на указанный

им адрес. В противном случае данные, заполненные ранее, не очищаются и

выводится сообщение об ошибках формы. 

Личный кабинет

Страница дает возможность редактировать все регистрационные данные и

загружать иконку, также пользователь может закрыть свой профиль (удалить

профиль из базы данных с подтверждением на странице). По умолчанию

вместо аватара отображается стандартное фото. Плюсом будет

дополнительная обработка изображения (изменение размера, вращение, 

обрезка, ...).
