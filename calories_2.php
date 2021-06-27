<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>calories_2</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/calories.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <style>
    .modal-body {
      text-align: left;
      color: black;
    }
  </style>
</head>

<body>
  <div id="mainWrapper">
    <header>
      <div id="logo">LOGO </div>
      <div id="headerLinks"><a href="cart1.php" title="Cart">Cart</a></div>
    </header>
    <section id="offer">
      <h2>關鍵食克</h2>
      <p>HEALTH&nbsp;</p>
    </section>
    <div id="content">
      <section class="sidebar">
        <div id="menubar">
          <nav class="menu">
            <h2>
              Calories-熱量表</h2>
            <hr>
            <ul>
              <li><a href="calories_all.php" title="熱量總覽">總覽</a></li>
              <li><a href="calories_1.php" title="熱量100以下">200以下</a></li>
              <li><a href="calories_2.php" title="熱量100~200">200~300</a></li>
              <li><a href="calories_3.php" title="熱量200~300">300~400</a></li>
              <li><a href="calories_4.php" title="熱量300~400">400~500</a></li>
              <li><a href="calories_5.php" title="熱量500以上">500以上</a></li>
            </ul>
          </nav>
        </div>
      </section>
      <section class="mainContent">
        <div class="productRow">
          <div style="text-align:center">
            <blockquote>
              <p class="title"><u>熱量200~300</u></p>
            </blockquote>
          </div>
          <article class="productInfo">
            <div style="text-align:center">
                <blockquote>
                <p class="producttitle"><u>迷客夏</u></p>
                </blockquote>
            </div>
            <?php
            $link = mysqli_connect("localhost", "root", "root")
              or die("無法開啟MySQL資料庫連接!<br/>");
            mysqli_select_db($link, "CSV_DB2");  // 選擇myschool資料庫
            // 設定SQL查詢字串
            $sql = "SELECT * FROM milk WHERE cal BETWEEN 200 AND 300";
            //送出UTF8編碼的MySQL指令
            mysqli_query($link, 'SET NAMES utf8');
            $result = mysqli_query($link, $sql);
            // 一筆一筆的以表格顯示記錄
            echo "<table border=1 width='250'><tr>";
            // 顯示欄位名稱
            while ($meta = mysqli_fetch_field($result))
              echo "<td>" . $meta->name . "</td>";
            echo "</tr>"; // 取得欄位數
            $total_fields = mysqli_num_fields($result);
            // 顯示每一筆記錄
            while ($row = mysqli_fetch_row($result)) {
              echo "<tr>"; // 顯示每一筆記錄的欄位值
              for ($i = 0; $i <= $total_fields - 1; $i++)
                echo "<td>" . $row[$i] . "</td>";
              echo "</tr>";
            }
            echo "</table>";
            ?>
          </article>
          <article class="productInfo">
            <div style="text-align:center">
                <blockquote>
                <p class="producttitle"><u>CoCo</u></p>
                </blockquote>
            </div>
            <?php
            $link = mysqli_connect("localhost", "root", "root")
              or die("無法開啟MySQL資料庫連接!<br/>");
            mysqli_select_db($link, "CSV_DB2");  // 選擇myschool資料庫
            // 設定SQL查詢字串
            $sql = "SELECT * FROM coco WHERE cal BETWEEN 200 AND 300";
            //送出UTF8編碼的MySQL指令
            mysqli_query($link, 'SET NAMES utf8');
            $result = mysqli_query($link, $sql);
            // 一筆一筆的以表格顯示記錄
            echo "<table border=1 width='250'><tr>";
            // 顯示欄位名稱
            while ($meta = mysqli_fetch_field($result))
              echo "<td>" . $meta->name . "</td>";
            echo "</tr>"; // 取得欄位數
            $total_fields = mysqli_num_fields($result);
            // 顯示每一筆記錄
            while ($row = mysqli_fetch_row($result)) {
              echo "<tr>"; // 顯示每一筆記錄的欄位值
              for ($i = 0; $i <= $total_fields - 1; $i++)
                echo "<td>" . $row[$i] . "</td>";
              echo "</tr>";
            }
            echo "</table>";
            ?>
          </article>
          <article class="productInfo">
            <div style="text-align:center">
                <blockquote>
                <p class="producttitle"><u>麻古茶坊</u></p>
                </blockquote>
            </div>
            <?php
            $link = mysqli_connect("localhost", "root", "root")
              or die("無法開啟MySQL資料庫連接!<br/>");
            mysqli_select_db($link, "CSV_DB2");  // 選擇myschool資料庫
            // 設定SQL查詢字串
            $sql = "SELECT * FROM macu WHERE cal BETWEEN 200 AND 300";
            //送出UTF8編碼的MySQL指令
            mysqli_query($link, 'SET NAMES utf8');
            $result = mysqli_query($link, $sql);
            // 一筆一筆的以表格顯示記錄
            echo "<table border=1 width='250'><tr>";
            // 顯示欄位名稱
            while ($meta = mysqli_fetch_field($result))
              echo "<td>" . $meta->name . "</td>";
            echo "</tr>"; // 取得欄位數
            $total_fields = mysqli_num_fields($result);
            // 顯示每一筆記錄
            while ($row = mysqli_fetch_row($result)) {
              echo "<tr>"; // 顯示每一筆記錄的欄位值
              for ($i = 0; $i <= $total_fields - 1; $i++)
                echo "<td>" . $row[$i] . "</td>";
              echo "</tr>";
            }
            echo "</table>";
            mysqli_free_result($result); // 釋放佔用記憶體  
            mysqli_close($link); // 關閉資料庫連接
            ?>
          </article>
        </div>
      </section>
    </div>
  </div>
</body>
</html>