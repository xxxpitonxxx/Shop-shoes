<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.css">
    <title>Добавление товара</title>
    
</head>

<body>


<nav class="navbar navbar-expand-lg bg-light">
        <div class="container card1">
          <a class="navbar-brand" href="#">Goods<i class="fa-regular fa-handshake"></i>store</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Наша продукция
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Кроссовки</a></li>
                      <li><a class="dropdown-item" href="#">Туфли</a></li>
                      <li><a class="dropdown-item" href="#">Кеды</a></li>
                      <li><a class="dropdown-item" href="#">Ботинки</a></li>
                      <li><a class="dropdown-item" href="#">Ботфорты</a></li>
                      <li><a class="dropdown-item" href="#">Сапоги</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Остальные товары</a></li>
                    </ul>
                  </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Главная</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Новости</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Контакты</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Услуги</a>
              </li>

            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Поиск</button>
            </form>
          </div>
        </div>
      </nav>
      

<h1 class="text">Добавить товар</h1>


    <div class="but">

    <form method="post" enctype="multipart/form-data">

        <input type="text"  name="article" placeholder="Введите артикул" required><br>
        <input type="text"  name="productname" placeholder="Введите название товара" required><br>
        <input type="text"  name="brand" placeholder="Введите название бренда" required><br>
        <input type="text"  name="cost" placeholder="Введите цену" required><br>
        <textarea name="description" placeholder="Введите описание" cols="35" rows="5" required></textarea><br>
        <input type="file"  name="photo" required><br>
        <input type="submit" class="btn btn-outline-secondary" value="Добавить" name="add"><i class="fa-thin fa-plus fa-2xl"></i>
    </form>
    </div>


    <br>
<br>
<br>


  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5 card1">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Goods<i class="fa-regular fa-handshake"></i>store</a>
            </h6>
            <p>
                По интересующим вопросам обращайтесь по телефону: +7(4842) 91-91-91 или напишите нам на почту goodsstore.@mail.ru 
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Продукция
            </h6>
            <p>
              <a href="#!" class="text-reset">Кроссовки</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Ботинки</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Туфли</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Кеды</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Покупателям
            </h6>
            <p>
              <a href="#!" class="text-reset"></a>
            </p>
            <p>
              <a href="#!" class="text-reset">Как сделать заказ</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Способ оплаты</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Доставка</a>
              <p>
              <a href="#!" class="text-reset">Возврат денежных средств</a>
            </p>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Контакты</h6>
            <p><i class=""></i><i class="fa fa-home" aria-hidden="true"></i>     Калуга, Россия</p>
            <p>
              <i class=""></i>
              <i class="" aria-hidden="true"></i><i class="fa fa-envelope" aria-hidden="true"></i>     goodsstore.@mail.ru
            </p>
            <p><i class=""></i><i class="fa fa-envelope" aria-hidden="true"></i>     +7(4842) 91-91-91</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>



<?
session_start();
include 'dbconnect.php';

//if(!empty($_SESSION['login']))
//{
//
//}

if ($_POST['add']) {

    $article = $_POST['article'];
    $productname = $_POST['productname'];
    $brand = $_POST['brand'];
    $cost = $_POST['cost'];
    $description = $_POST['description'];

    
    if (!empty($article) and !empty($productname) and !empty($brand) and !empty($cost) and !empty($description)) {

                $db = dbconn();
            

                $uploaddir = 'files/';
                $uploadfile = $uploaddir . basename($_FILES['photo']['name']);
                if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
                    echo 'ok';
                } else {
                    echo 'ne ok';
                }
            }
             
            $query = $db->query("INSERT INTO `goods_store`(`Артикул`, `Название товара`, `Бренд`, `Цена`, `Описание`, `photo`) 
            VALUES ('$article','$productname','$brand','$cost','$description','$uploadfile')"); 
        
        }
    

?>