<h1>
Поиск по имени
</h1>
<p>
Обращение к vk.com сделано через официальное апи, к ok.ru - через форму поиска людей на сайте.

</p>
<p>
<p>Необходимо создать приложение vk для размещения на сайте.</p>
<img src="Снимок экрана от 2023-04-21 23-54-07.png">
<p>Получить access_token (https://dev.vk.com/api/access-token/getting-started), прописать в .env как VK_TOKEN.</p>

<p>Также авторизоваться на сайте ok.ru, скопировать авторизационную куку AUTHCODE из запроса https://ok.ru/web-api/v2/search/toolbar
и прописать в .env как OK_RU_AUTH_CODE.</p>
<img src="Снимок экрана от 2023-04-21 23-49-25.png">

<img src="Снимок экрана от 2023-04-21 23-46-48.png">
<p><code>composer install</code></p>
<p><code>npm install</code></p>
<p><code>npm run watch</code></p>
