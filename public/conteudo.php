<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/default.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <style>
        body {
            background-color: beige;
        }
        .carousel{
            background-color: black;
        }
        footer{
            background-color: rgba(255, 255, 255, 1);
            padding: 10px;
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/350913.jpg" class="d-block w-20" style="margin-left: 500px;" alt="..." width="900" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/R.jpg" class="d-block w-20" alt="..." width="900" height="500" style="margin-left: 500px;">
    </div>
    <div class="carousel-item">
      <img src="img/Pizza_with_tomatoes.jpg" class="d-block w-20" alt="..." width="900" height="500" style="margin-left: 500px;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    
</body>
</html>