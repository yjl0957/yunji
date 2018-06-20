<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>볼빨간사춘기</title>
    <link href="main.css" rel="stylesheet" type="text/css">
  </head>
  <body id="rd1">
    <h1><a href="main.html">BOLBBALGAN4</a></h1>
    <div id="wrapBody">

			<header>
				<nav >
					<ul>
            <li><a href="Red PLANET.php?id=우주를 줄게">Red PLANET</a></li>
            <li><a href="Red Diary Page.1.php?id=썸 탈꺼야">Red Diary Page.1</a></li>
            <li><a href="Red Diary Page.2.php?id=바람사람">Red Diary Page.2</a></li>
					</ul>
				</nav>
			</header>

    </div>
    <div id="submenu"> <!--서브메뉴-->

        <ul>
          <script>
            var submenu = ['썸 탈꺼야', 'Blue', '고쳐주세요', '상상', '나의 사춘기에게'];
            var j = 0;
            while(j <submenu.length){
              document.write('<li><a href="Red Diary Page.1.php?id='+submenu[j]+'">'+submenu[j]+'</a><li>');
              j = j+1;
            }
          </script>
            </ul>
        <div id="maintext"><!--본문-->
          <?php
          echo $_GET['id'];
          echo nl2br("\n");
          echo file_get_contents("data/".$_GET['id']);
          ?>
        </div>
    </div>
    </body>
</html>
