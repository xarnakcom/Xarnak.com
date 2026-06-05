<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <title>SAM. | Блог дизайнера</title> <!-- название вкладки -->
  <style>
  body { 
    margin: -2.8px; /* Убираем отступы */
   }
  .menu {
    position: fixed; /* Фиксированное положение */
    right: 0px; /* Расстояние от правого края окна браузера */
    left: 0px;
    top: 0%; /* Расстояние сверху */
    z-index: 2;
    background-color: rgba(28,28,30,0.97);
   }
   a { 
    text-decoration: none; /* Отменяем подчеркивание у ссылки */
   }
    .btn {
  border: 2px solid black;
  background-color: white;
  color: black;
  padding: 10px;
  font-size: 16px;
  cursor: pointer;
  border-radius: 5px;
}
/* Gray */
.default {
  border-color: #ffffff;
  background: #1c1c1e;
  transition: 0.3s;
  color: white;
}

.default:hover {
  border-color: #ffffff;
  background: #ffffff;
  transition: 0.5s;
  color: #1c1c1e;
}
  </style>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="css/fonts.css"> <!-- шрифт -->
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/media.css">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="180x180" href="img/apple.png"/>
  <link rel="icon" type="image/png" sizes="192x192" href="img/android.png"/>
</head>
<body  bgcolor="#1c1c1e" alink="#ffffff" link="#ffffff" vlink="#ffffff"> <!-- цвета ссылок -->
  <table align="center" width="100%"> <!-- главная таблица -->
    <tbody align="center">
      <tr>
        <td width="100%"> <!-- меню -->
          <div class="menu">
            <table align="center" width="100%"> 
              <tr>
                <td align="center" width="9%">
                  <a href="About.html" target="_self">
                    <button class="btn default"><b>
                    Обо мне</b></button> <!-- кнопка обо мне --> 
                  </a>
                </td>
                <td align="center" width="9%">
                  <a href="donate.html" target="_self">
                    Пожертвовать <!-- пожертвовать --> 
                  </a>
                </td>
                <td align="right">
                  <a href="index.php" target="_self">
                    <img src="img/SAM1.png" width="90px"><!-- логотип кнопка на главную -->
                  </a>
                </td>
              </tr>
            </table>
          </div>
        </td>
      </tr>
      <tr>
        <td> <!-- Фон тень -->
         <br><br><br><?php $dir    = 'images';
$files = scandir($dir);
array_splice($files, 0, 2);
?>
<img src="<?php echo '/'. $dir .'/'.$files[array_rand($files, 1)];?>" align="center" width="48%">
      <tr><!-- НИЖНИЙ КАРАНТИТУЛ -->
        <td> 
          <table align="center" width="100%" bgcolor="#232323">
            <tr><!-- контакты почта и телефон -->
              <td bgcolor="#232323">
                <font color="#ffffff">
                  <p>+7 (912) 524 20-94</p>
                  <p><a href="mailto:y.stubio@icloud.com">y.stubio@icloud.com</a></p>
                </font>
              </td>
            </tr>
            <tr align="center" width="100%"> <!-- соц сети -->
              <td bgcolor="#171717" align="left">
               <a href="https://www.instagram.com/samg_ra" target="_blank"><img src="img/instagram.png"></a>
               <a href="https://www.youtube.com/channel/UCVLR8v0GsLpxFOggksqgbjQ" target="_blank"><img src="img/youtube.png"></a>
               <a href="https://twitter.com/samg_ra" target="_blank"><img src="img/Twitter.png"></a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
</body>