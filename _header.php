<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>TON Blockchain Explorer — The Open Network</title>
      <meta property="og:type" content="website">
      <meta property="og:title" content="Tegro TON Explorer — The Open Network">
      <meta property="og:description" content="Youton.org allows you to explore and search the Binance blockchain for transactions, addresses, tokens, prices and other activities taking place on TON by Tegro Explorer.">
      <meta property="og:url" content="https://youton.org">
      <meta property="og:image" content="https://youton.org/assets/img/youtonexplorer.png">
      <meta property="og:site_name" content="TON Explorer by Tegro">
      <link rel="icon" type="image/png" href="/assets/img/favicon.ico" />
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700;800&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="/assets/css/style.css?v=<?=time()?>">
      <script src="/assets/js/fontawesome-pro.js" crossorigin="anonymous"></script>
   </head>
   <body>
      <div class="wrapper">
      <header class="header">
         <nav class="navbar navbar-expand-md">
            <div class="container">
               <a class="navbar-brand d-flex align-items-center" href="/">
                  <span class="logotype"></span>
               </a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <i class="fa-solid fa-bars"></i>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto">
                     <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/top-accounts.php">Top Accaunts</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/blocks.php">Blocks</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Transactions</a>
                     </li>
                  </ul>
                  <a href="#!" class="btn btn-primary collapsed" data-bs-toggle="collapse" data-bs-target="#flush-collapseSearch" aria-expanded="false" aria-controls="flush-collapseSearch" aria-current="page">Explore</a>
               </div>
            </div>
         </nav>
         <div id="flush-collapseSearch" class="accordion-collapse collapse" data-bs-parent="#flush-collapseSearch">
            <div class="container pt-4">
               <form action="" class="search-form">
                  <div class="input-group border-0">
                     <select class="form-select" aria-label="Default select example">
                        <option selected>All filters</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                     </select>
                     <input type="text" class="search-form__input form-control w-75" placeholder="Enter TON adress" aria-label="Recipient's username" aria-describedby="basic-addon2">
                  </div>
                  <button class="search-form__btn btn" type="submit" value="Submit">
                  <i class="fa-regular fa-magnifying-glass"></i>
                  </buttom>
               </form>
            </div>
         </div>
      </header>