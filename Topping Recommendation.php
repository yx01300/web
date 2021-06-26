<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>嚼對推薦 Topping Recommendation</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/milkshop.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <style>
    .modal-body {
      text-align: left;
      color: black;
    }

    .logo {
      text-decoration: none;
      color: rgba(146, 146, 146, 1.00);
    }
  </style>
  <script>
    //讓送出後不跳到別的頁面
    $('.sendToUser').on(
      'click',function() {
        var shop = $("#shop").val();
        var shop = $("#name").val();
        var size = $("input[type=radio]:checked").val();
        var sugar = $("input[type=radio]:checked").val();
        var ice = $("input[type=radio]:checked").val();
        var qty = $("#qty").val();
        if ($("input[name='selectUserRadio']").is(":checked") == false) {
          alert('Please, select a user to send.');
          return;
        }
      }
    );
  </script>
</head>

<body>
  <div id="mainWrapper">
    <header>
      <div id="logo"><a href="http://localhost:8080/web/網設專題/frist.html" class="logo">Home</a></div>
      <div id="headerLinks"><a href="cart.php" title="Cart"><img src="images/shopping-cart.png" alt="cart" height=30 >Cart</a></div>
    </header>
    <section id="offer">
      <h2>關鍵食克</h2>
      <p>HEALTH</p>
    </section>
    <div id="content">
      <section class="sidebar">
        <div id="menubar">
          <nav class="menu">
            <h2>MENU-迷客夏</h2>
            <hr>
            <ul>
              <li><a href="Topping Recommendation.php" title="Topping Recommendation">嚼對推薦</a></li>
              <li><a href="Tea.php" title="Tea">愛茶的牛</a></li>
              <li><a href="Fresh Milk Tea.php" title="Fresh Milk Tea">牧場鮮奶茶</a></li>
              <li><a href="Green Light Milk.php" title="Green Light Milk">綠光牧場鮮奶</a></li>
              <li><a href="Specials.php" title="Specials">手作特調</a></li>
            </ul>
          </nav>
        </div>
      </section>

      <section class="mainContent">
        <div class="productRow">
          <div style="text-align:center">
            <blockquote>
              <p class="producttitle"><u>嚼對推薦</u></p>
            </blockquote>
          </div>
          <article id="productInfo" class="productInfo">
            <div><img src="https://www.milkshoptea.com/includes/timthumb.php?src=upload/product/2104061441570000001.png&w=307&zc=2" alt="sample"></div>
            <p class="price">$55</p>
            <p class="productContent">珍珠伯爵紅茶拿鐵 </p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal1-1">
            <form method="POST">
              <div class="modal fade" id="Modal1-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">
                      <input type="hidden" name="Name" value="珍珠伯爵紅茶拿鐵">
                        <b>珍珠伯爵紅茶拿鐵</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="M" checked="True" /> M &nbsp; &nbsp;
                        <input type="radio" name="Size" value="L" /> L<br />
                      </div>
                      <div>
                        <font face="標楷體">甜度:
                          <input type="radio" name="Sugar" value="正常糖" checked="True" />正常糖
                          <input type="radio" name="Sugar" value="少糖" />少糖
                          <input type="radio" name="Sugar" value="半糖" />半糖
                          <input type="radio" name="Sugar" value="微糖" />微糖
                          <input type="radio" name="Sugar" value="無糖" />無糖
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">冰量:
                          <input type="radio" name="Ice" value="正常冰" checked="True" />正常冰
                          <input type="radio" name="Ice" value="少冰" />少冰
                          <input type="radio" name="Ice" value="微冰" />微冰
                          <input type="radio" name="Ice" value="去冰" />去冰
                          <input type="radio" name="Ice" value="溫" />溫
                          <input type="radio" name="Ice" value="熱" />熱
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">數量:
                          <input type="text" name="qty" value="1">
                        </font>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                      <button type="submit" class="btn btn-primary sendToUser">加入購物車</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </article>
          <article class="productInfo">
            <div><img alt="sample" src="https://www.milkshoptea.com/includes/timthumb.php?src=upload/product/2104081554070000001.png&w=307&zc=2"></div>
            <p class="price">$55</p>
            <p class="productContent">珍珠大正紅茶拿鐵</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal1-2">
            <form method="POST">
              <div class="modal fade" id="Modal1-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="1-2">
                      <input type="hidden" name="Name" value="珍珠大正紅茶拿鐵">
                        <b>珍珠大正紅茶拿鐵</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="M" checked="True" /> M &nbsp; &nbsp;
                        <input type="radio" name="Size" value="L" /> L<br />
                      </div>
                      <div>
                        <font face="標楷體">甜度:
                          <input type="radio" name="Sugar" value="正常糖" checked="True" />正常糖
                          <input type="radio" name="Sugar" value="少糖" />少糖
                          <input type="radio" name="Sugar" value="半糖" />半糖
                          <input type="radio" name="Sugar" value="微糖" />微糖
                          <input type="radio" name="Sugar" value="無糖" />無糖
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">冰量:
                          <input type="radio" name="Ice" value="正常冰" checked="True" />正常冰
                          <input type="radio" name="Ice" value="少冰" />少冰
                          <input type="radio" name="Ice" value="微冰" />微冰
                          <input type="radio" name="Ice" value="去冰" />去冰
                          <input type="radio" name="Ice" value="溫" />溫
                          <input type="radio" name="Ice" value="熱" />熱
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">數量:
                          <input type="text" name="qty" value="1">
                        </font>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                      <button type="submit" class="btn btn-primary sendToUser">加入購物車</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </article>
          <article class="productInfo">
            <div><img src="https://www.milkshoptea.com/includes/timthumb.php?src=upload/product/2104081554490000001.png&w=307&zc=2" alt="sample"></div>
            <p class="price">$60</p>
            <p class="productContent">芋圓茉香綠茶拿鐵</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal1-3">
            <form method="POST">
              <div class="modal fade" id="Modal1-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="1-3">
                      <input type="hidden" name="Name" value="芋圓茉香綠茶拿鐵">
                        <b>芋圓茉香綠茶拿鐵</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="M" checked="True" /> M &nbsp; &nbsp;
                        <input type="radio" name="Size" value="L" /> L<br />
                      </div>
                      <div>
                        <font face="標楷體">甜度:
                          <input type="radio" name="Sugar" value="正常糖" checked="True" />正常糖
                          <input type="radio" name="Sugar" value="少糖" />少糖
                          <input type="radio" name="Sugar" value="半糖" />半糖
                          <input type="radio" name="Sugar" value="微糖" />微糖
                          <input type="radio" name="Sugar" value="無糖" />無糖
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">冰量:
                          <input type="radio" name="Ice" value="正常冰" checked="True" />正常冰
                          <input type="radio" name="Ice" value="少冰" />少冰
                          <input type="radio" name="Ice" value="微冰" />微冰
                          <input type="radio" name="Ice" value="去冰" />去冰
                          <input type="radio" name="Ice" value="溫" />溫
                          <input type="radio" name="Ice" value="熱" />熱
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">數量:
                          <input type="text" name="qty" value="1">
                        </font>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                      <button type="submit" class="btn btn-primary sendToUser">加入購物車</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </article>
          <article class="productInfo">
            <div><img alt="sample" src="https://www.milkshoptea.com/includes/timthumb.php?src=upload/product/2104081555270000001.png&w=307&zc=2"></div>
            <p class="price">$75</p>
            <p class="productContent">手感芋圓芋泥鮮奶</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal1-4">
            <form method="POST">
              <div class="modal fade" id="Modal1-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="1-4">
                      <input type="hidden" name="Name" value="手感芋圓芋泥鮮奶">
                        <b>手感芋圓芋泥鮮奶</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="M" checked="True" /> M &nbsp; &nbsp;
                        <input type="radio" name="Size" value="L" /> L<br />
                      </div>
                      <div>
                        <font face="標楷體">甜度:
                          <input type="radio" name="Sugar" value="正常糖" checked="True" />正常糖
                          <input type="radio" name="Sugar" value="少糖" />少糖
                          <input type="radio" name="Sugar" value="半糖" />半糖
                          <input type="radio" name="Sugar" value="微糖" />微糖
                          <input type="radio" name="Sugar" value="無糖" />無糖
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">冰量:
                          <input type="radio" name="Ice" value="正常冰" checked="True" />正常冰
                          <input type="radio" name="Ice" value="少冰" />少冰
                          <input type="radio" name="Ice" value="微冰" />微冰
                          <input type="radio" name="Ice" value="去冰" />去冰
                          <input type="radio" name="Ice" value="溫" />溫
                          <input type="radio" name="Ice" value="熱" />熱
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">數量:
                          <input type="text" name="qty" value="1">
                        </font>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                      <button type="submit" class="btn btn-primary sendToUser">加入購物車</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </article>
          <article class="productInfo">
            <div><img alt="sample" src="https://www.milkshoptea.com/includes/timthumb.php?src=upload/product/2104081556130000001.png&w=307&zc=2"></div>
            <p class="price">$70</p>
            <p class="productContent">珍珠手炒黑糖鮮奶</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal1-5">
            <form method="POST">
              <div class="modal fade" id="Modal1-5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="1-5">
                      <input type="hidden" name="Name" value="珍珠手炒黑糖鮮奶">
                        <b>珍珠手炒黑糖鮮奶</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="M" checked="True" /> M &nbsp; &nbsp;
                        <input type="radio" name="Size" value="L" /> L<br />
                      </div>
                      <div>
                        <font face="標楷體">甜度:
                          <input type="radio" name="Sugar" value="正常糖" checked="True" />正常糖
                          <input type="radio" name="Sugar" value="少糖" />少糖
                          <input type="radio" name="Sugar" value="半糖" />半糖
                          <input type="radio" name="Sugar" value="微糖" />微糖
                          <input type="radio" name="Sugar" value="無糖" />無糖
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">冰量:
                          <input type="radio" name="Ice" value="正常冰" checked="True" />正常冰
                          <input type="radio" name="Ice" value="少冰" />少冰
                          <input type="radio" name="Ice" value="微冰" />微冰
                          <input type="radio" name="Ice" value="去冰" />去冰
                          <input type="radio" name="Ice" value="溫" />溫
                          <input type="radio" name="Ice" value="熱" />熱
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">數量:
                          <input type="text" name="qty" value="1">
                        </font>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                      <button type="submit" class="btn btn-primary sendToUser">加入購物車</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </article>
        </div>
        <div class="productRow">
          <article class="productInfo">
            <div><img alt="sample" src="https://www.milkshoptea.com/includes/timthumb.php?src=upload/product/2104081557230000001.png&w=307&zc=2"></div>
            <p class="price">$80</p>
            <p class="productContent">雙Q琥珀烏龍拿鐵</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal1-6">
            <form method="POST">
              <div class="modal fade" id="Modal1-6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="1-6">
                      <input type="hidden" name="Name" value="雙Q琥珀烏龍拿鐵">
                        <b>雙Q琥珀烏龍拿鐵</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="L" checked="True" /> L<br />
                      </div>
                      <div>
                        <font face="標楷體">甜度:
                          <input type="radio" name="Sugar" value="正常糖" checked="True" />正常糖
                          <input type="radio" name="Sugar" value="少糖" />少糖
                          <input type="radio" name="Sugar" value="半糖" />半糖
                          <input type="radio" name="Sugar" value="微糖" />微糖
                          <input type="radio" name="Sugar" value="無糖" />無糖
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">冰量:
                          <input type="radio" name="Ice" value="正常冰" checked="True" />正常冰
                          <input type="radio" name="Ice" value="少冰" />少冰
                          <input type="radio" name="Ice" value="微冰" />微冰
                          <input type="radio" name="Ice" value="去冰" />去冰
                          <input type="radio" name="Ice" value="溫" />溫
                          <input type="radio" name="Ice" value="熱" />熱
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">數量:
                          <input type="text" name="qty" value="1">
                        </font>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                      <button type="submit" class="btn btn-primary sendToUser">加入購物車</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </article>
          <article class="productInfo">
            <div><img alt="sample" src="https://www.milkshoptea.com/includes/timthumb.php?src=upload/product/2104081557590000001.png&w=307&zc=2"></div>
            <p class="price">$40</p>
            <p class="productContent">仙草凍冬瓜茶</p>
            <input type="submit" name="button" value="Buy" class="buyButton" data-toggle="modal" data-target="#Modal1-7">
            <form method="POST">
              <div class="modal fade" id="Modal1-7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="1-7">
                      <input type="hidden" name="Name" value="仙草凍冬瓜茶">
                        <b>仙草凍冬瓜茶</b>
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div>
                        <font face="標楷體">容量: </font>
                        <input type="radio" name="Size" value="L" checked="True" /> L<br />
                      </div>
                      <div>
                        <font face="標楷體">甜度:
                          <input type="radio" name="Sugar" value="正常糖" checked="True" />正常糖
                          <input type="radio" name="Sugar" value="少糖" />少糖
                          <input type="radio" name="Sugar" value="半糖" />半糖
                          <input type="radio" name="Sugar" value="微糖" />微糖
                          <input type="radio" name="Sugar" value="無糖" />無糖
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">冰量:
                          <input type="radio" name="Ice" value="正常冰" checked="True" />正常冰
                          <input type="radio" name="Ice" value="少冰" />少冰
                          <input type="radio" name="Ice" value="微冰" />微冰
                          <input type="radio" name="Ice" value="去冰" />去冰
                          <input type="radio" name="Ice" value="溫" />溫
                          <input type="radio" name="Ice" value="熱" />熱
                          <br />
                        </font>
                      </div>
                      <div>
                        <font face="標楷體">數量:
                          <input type="text" name="qty" value="1">
                        </font>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                      <button type="submit" class="btn btn-primary sendToUser">加入購物車</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </article>
        </div>
      </section>
    </div>
    <footer>
      <div>
        <p>&nbsp;</p>
      </div>
      <div>
        <p>&nbsp;</p>
      </div>
      <div class="footerlinks">
        <p><a href="#" title="Link">Link 1 </a></p>
        <p><a href="#" title="Link">Link 2</a></p>
        <p><a href="#" title="Link">Link 3</a></p>
      </div>
    </footer>
  </div>

  <?php
  $link = mysqli_connect("localhost", "root", "") or die("無法開啟MySQL資料庫連接!<br/>");
  mysqli_select_db($link, "網設專題");
  mysqli_query($link, 'SET NAMES utf8');
  $sql = "DELETE FROM cart_milkshop WHERE  qty=0";
  mysqli_query($link, $sql);
  $sql = "INSERT INTO cart_milkshop (`shop`, `name`,`size`,`sugar`,`ice`,`qty`)
    VALUES('milkshop','$_POST[Name]','$_POST[Size]','$_POST[Sugar]','$_POST[Ice]','$_POST[qty]')";
  if (!mysqli_query($link, $sql)) {
    die('Error: ' . mysqli_error($link));
  }
  ?>
</body>

</html>
