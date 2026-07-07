# Основное

В папке webapp лежит Laravel с сайтом

Всё сделал на чистом html+css+php

Есть docker-compose который разворачивает MySQL

Ссылка на сайт: https://techart.n1k1tal0x.com/

По архитектуре использовал то, что даёт стартовый Laravel, только потом увидел, что надо было в MVC. Но опыт работы с MVC у меня есть, также с фронтовским FSD.

Заданием можно было сделать дня за 2-3, но другие дела навалились(

Сайт развернул на nginx+certbot если интересно :)

# Папка webapp (Laravel)

### Компоненты

- Футер
webapp/resources/views/components/footer.blade.php

- Хедер
webapp/resources/views/components/header.blade.php

### Лейауты

- Основной (Хедер + Контент + Футер)
webapp/resources/views/layouts/main.blade.php

### Страници

- Главная
webapp/resources/views/index.blade.php

- Новость
webapp/resources/views/new.blade.php

### Css

- Основной дизайн
webapp/resources/views/new.blade.php

- Хедер
webapp/resources/css/header.css

- Футер
webapp/resources/css/footer.css

# Папка db

В ней лежит .sql скрипт который в контейнер помещается при запуске компоуза
