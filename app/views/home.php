<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="static/styles/main.css">
  <title>Комментарии</title>
</head>
<body>
  <header class="header">
    <div class="container">
      <div class="header_wrapper">
        <div class="header_main">
          <div class="header_contacts">
            <div class="contact">Телефон: 
              <a class="contact_link" href="tel:+74993409471">(499) 340-94-71</a>
            </div>
            <div class="contact">Email: 
              <a class="contact_link --underlined" href="mailto:info@future-group.ru">info@future-group.ru</a>
            </div>
          </div>
          <h1 class="header_title">
            Коментарии
          </h1>
        </div>
        <div class="header_logo">
          <img class="logo" src="static/img/logo.png" alt="logo">
        </div>
      </div>
    </div>
  </header>
  <main class="main">
    <section class="comments container">

      <?php include './app/views/layouts/comments.php' ?>

      <form action="/comment/create" method="POST" class="comments_form send-form">
        <h3 class="send-form_title">Оставить комментарий</h3>
        <div class="send-form_field">
          <label class="send-form_label" for="name">Выше имя</label>
          <input class="send-form_input field" name="name" id="name" type="text">
        </div>
        <div class="send-form_field">
          <label class="send-form_label" for="comment">Ваш комментарий</label>
          <textarea class="send-form_textarea field field--bordered" name="comment" id="comment"></textarea>
        </div>
        <button class="send-form_submit field field--bordered" type="submit">Отправить</button>
      </form>
    </section>
  </main>
  <footer class="footer">
    <div class="container">
      <div class="footer_wrapper">
        <div class="footer_logo">
          <img class="logo" src="static/img/logo.png" alt="logo">
        </div>
        <div class="footer_main">
          <div class="footer_contacts">
            <div class="contact">Телефон: 
              <a class="contact_link " href="tel:+74993409471">(499) 340-94-71</a>
            </div>
            <div class="contact">Email: 
              <a class="contact_link --underlined" href="mailto:info@future-group.ru">info@future-group.ru</a>
            </div>
            <div class="contact">
              Адрес: 
              <a href="#" class="contact_link --underlined">115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</a>
            </div>
          </div>
          <div class="footer_copyright">
            © 2010 - 2014 Future. Все права защищены
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>