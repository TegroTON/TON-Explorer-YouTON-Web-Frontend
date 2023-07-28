<?php
   require "_header.php";
   ?> 
<main class="main">
   <section class="section hero hero__bg d-flex align-items-center">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-md-12 col-lg-8 col-xl-6 mx-auto mx-lg-0 text-center text-lg-start">
               <h1 class="hero__title ps-0 ps-xl-5">
                  The Open <span class="d-block">Network Explorer</span>
               </h1>
               <form action="" class="search-form ps-0 ps-xl-5 mt-4 mx-auto">
                  <div class="input-group border-0 mb-3">
                     <select class="form-select w-25" aria-label="Default select example">
                        <option selected>All filters</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                     </select>
                     <input type="text" class="search-form__input form-control w-75" placeholder="Enter TON adress" aria-label="Recipient's username" aria-describedby="basic-addon2">
                  </div>
                  <button class="search-form__btn btn btn-primary" type="submit" value="Submit">
                  <i class="fa-regular fa-magnifying-glass"></i>
                  </buttom>
               </form>
            </div>
            <div class="col-lg-4 d-none d-lg-block ms-auto">
               <img class="hero__image" src="assets/img/hero-image.svg" alt="Toncoin">
            </div>
         </div>
         <div class="hero__background"></div>
      </div>
   </section>
   <section class="section market">
      <div class="container">
         <div class="bg-light rounded overflow-hidden">
            <div class="row">
               <div class="col-md-6 col-xl-4">
                  <div class="market-card d-flex px-4 pt-5">
                     <div class="market-card__icon me-3">
                        <i class="fa-light fa-gem fa-2xl lh-1"></i>
                     </div>
                     <div class="market-card__body">
                        <div class="market-card__name fw-medium fs-6 mb-1">Toncoin Price</div>
                        <p class="market-card__text text-muted m-0">
                           $2.45 @ 0.009972 TONCOIN <span class="text-danger fw-medium"><i class="fa-solid fa-caret-down ms-2 me-1"></i>1.412%</span>
                        </p>
                     </div>
                  </div>
                  <div class="market-card d-flex px-4 pt-5">
                     <div class="market-card__icon me-3">
                        <i class="fa-light fa-group-arrows-rotate fa-2xl lh-1"></i>
                     </div>
                     <div class="market-card__body">
                        <div class="market-card__name fw-medium fs-6 mb-1">Market Cap</div>
                        <p class="market-card__text text-muted m-0">
                           $3,185,745,879 <span class="text-danger fw-medium"><i class="fa-solid fa-caret-down ms-2 me-1"></i>5.12%</span>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-xl-4">
                  <div class="market-card d-flex px-4 pt-5">
                     <div class="market-card__icon me-3">
                        <i class="fa-light fa-file-chart-column fa-2xl lh-1"></i>
                     </div>
                     <div class="market-card__body">
                        <div class="market-card__name fw-medium fs-6 mb-1">Latests Block</div>
                        <p class="market-card__text text-muted m-0">
                           14937089 (3.0s) 
                        </p>
                     </div>
                     <div class="market-card__body text-end ms-auto d-none d-xl-block">
                        <div class="market-card__name fw-medium fs-6 mb-1">Transitions</div>
                        <p class="market-card__text text-muted m-0">
                           2,425.99 M (193.1 TPS) 
                        </p>
                     </div>
                  </div>
                  <div class="market-card d-flex px-4 py-5">
                     <div class="market-card__icon me-3">
                        <i class="fa-light fa-globe fa-2xl lh-1"></i>
                     </div>
                     <div class="market-card__body">
                        <div class="market-card__name fw-medium fs-6 mb-1">Fully Diluted Market Cap</div>
                        <p class="market-card__text text-muted m-0">
                           $3,185,745,879 <span class="text-success fw-medium"><i class="fa-solid fa-caret-up ms-2 me-1"></i>1.412%</span>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 col-xl-4">
                  <div class="market-card  bg-light-grey h-100 p-4">
                     <div class="d-flex align-items-center">
                        <div class="market-card__name fs-6 me-auto">Toncoin transaction history last 14 days</div>
                        <div class="dropdown">
                           <a class="" href="#!" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                           <i class="fa-solid fa-colon"></i>
                           </a>
                           <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="section latest">
      <div class="container">
         <div class="row">
            <div class="col-xl-6 mb-4 mb-xl-0">
               <div class="card">
                  <div class="card-header p-4 d-flex align-items-center justify-content-between">
                     <h3 class="card-title fs-6 m-0">Latest Blocks</h3>
                     <a href="/blocks.php" class="btn btn-sm btn-outline-secondary">View all blocks <i class="fa-solid fa-angle-right ms-2"></i></a>
                  </div>
                  <div class="latest__group list-group rounded-0 border-0">
                     <div class="latest-item list-group-item d-flex align-items-center border-0 border-bottom p-3">
                        <div class="d-flex align-items-center">
                           <div class="latest-item__icon">Bk</div>
                           <div class="ms-4">
                              <a href="#!" class="text-primary">14941708</a>
                              <p class="text-muted small m-0">17 secs ago</p>
                           </div>
                        </div>
                        <div class="d-none d-md-block">
                           <p class="mb-0">Validated By Validator: <a href="#!" class="text-primary">InfStones</a></p>
                           <p class="text-muted small mb-0"><span class="text-primary">150 txns</span> in 3 secs</p>
                        </div>
                        <div class="latest-item__ton">
                           1.11221 TON
                        </div>
                     </div>
                     <div class="latest-item list-group-item d-flex align-items-center border-0 border-bottom p-3">
                        <div class="d-flex align-items-center">
                           <div class="latest-item__icon">Bk</div>
                           <div class="ms-4">
                              <a href="#!" class="text-primary">14941708</a>
                              <p class="text-muted small m-0">17 secs ago</p>
                           </div>
                        </div>
                        <div class="d-none d-md-block">
                           <p class="mb-0">Validated By Validator: <a href="#!" class="text-primary">InfStones</a></p>
                           <p class="text-muted small mb-0"><span class="text-primary">150 txns</span> in 3 secs</p>
                        </div>
                        <div class="latest-item__ton">
                           1.11221 TON
                        </div>
                     </div>
                     <div class="latest-item list-group-item d-flex align-items-center border-0 border-bottom p-3">
                        <div class="d-flex align-items-center">
                           <div class="latest-item__icon">Bk</div>
                           <div class="ms-4">
                              <a href="#!" class="text-primary">14941708</a>
                              <p class="text-muted small m-0">17 secs ago</p>
                           </div>
                        </div>
                        <div class="d-none d-md-block">
                           <p class="mb-0">Validated By Validator: <a href="#!" class="text-primary">InfStones</a></p>
                           <p class="text-muted small mb-0"><span class="text-primary">150 txns</span> in 3 secs</p>
                        </div>
                        <div class="latest-item__ton">
                           1.11221 TON
                        </div>
                     </div>
                     <div class="latest-item list-group-item d-flex align-items-center border-0 border-bottom p-3">
                        <div class="d-flex align-items-center">
                           <div class="latest-item__icon">Bk</div>
                           <div class="ms-4">
                              <a href="#!" class="text-primary">14941708</a>
                              <p class="text-muted small m-0">17 secs ago</p>
                           </div>
                        </div>
                        <div class="d-none d-md-block">
                           <p class="mb-0">Validated By Validator: <a href="#!" class="text-primary">InfStones</a></p>
                           <p class="text-muted small mb-0"><span class="text-primary">150 txns</span> in 3 secs</p>
                        </div>
                        <div class="latest-item__ton">
                           1.11221 TON
                        </div>
                     </div>
                     <div class="latest-item list-group-item d-flex align-items-center border-0 border-bottom p-3">
                        <div class="d-flex align-items-center">
                           <div class="latest-item__icon">Bk</div>
                           <div class="ms-4">
                              <a href="#!" class="text-primary">14941708</a>
                              <p class="text-muted small m-0">17 secs ago</p>
                           </div>
                        </div>
                        <div class="d-none d-md-block">
                           <p class="mb-0">Validated By Validator: <a href="#!" class="text-primary">InfStones</a></p>
                           <p class="text-muted small mb-0"><span class="text-primary">150 txns</span> in 3 secs</p>
                        </div>
                        <div class="latest-item__ton">
                           1.11221 TON
                        </div>
                     </div>
                     <div class="latest-item list-group-item d-flex align-items-center border-0 border-bottom p-3">
                        <div class="d-flex align-items-center">
                           <div class="latest-item__icon">Bk</div>
                           <div class="ms-4">
                              <a href="#!" class="text-primary">14941708</a>
                              <p class="text-muted small m-0">17 secs ago</p>
                           </div>
                        </div>
                        <div class="d-none d-md-block">
                           <p class="mb-0">Validated By Validator: <a href="#!" class="text-primary">InfStones</a></p>
                           <p class="text-muted small mb-0"><span class="text-primary">150 txns</span> in 3 secs</p>
                        </div>
                        <div class="latest-item__ton">
                           1.11221 TON
                        </div>
                     </div>
                     <div class="latest-item list-group-item d-flex align-items-center border-0 border-bottom p-3">
                        <div class="d-flex align-items-center">
                           <div class="latest-item__icon">Bk</div>
                           <div class="ms-4">
                              <a href="#!" class="text-primary">14941708</a>
                              <p class="text-muted small m-0">17 secs ago</p>
                           </div>
                        </div>
                        <div class="d-none d-md-block">
                           <p class="mb-0">Validated By Validator: <a href="#!" class="text-primary">InfStones</a></p>
                           <p class="text-muted small mb-0"><span class="text-primary">150 txns</span> in 3 secs</p>
                        </div>
                        <div class="latest-item__ton">
                           1.11221 TON
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-6">
               <div class="card">
                  <div class="card-header p-4 d-flex align-items-center justify-content-between">
                     <h3 class="card-title fs-6 m-0"><span class="d-none d-md-inline">Latest</span> Transaction</h3>
                     <a href="" class="btn btn-sm btn-outline-secondary">View all transactions <i class="fa-solid fa-angle-right ms-2"></i></a>
                  </div>
                  <div class="latest__group list-group rounded-0 border-0">
                     <div class="latest-item list-group-item d-flex align-items-center border-0 border-bottom p-3">
                        <div class="d-flex align-items-center">
                           <div class="latest-item__icon">Bk</div>
                           <div class="ms-4">
                              <a href="#!" class="text-primary">14941708</a>
                              <p class="text-muted small m-0">17 secs ago</p>
                           </div>
                        </div>
                        <div class="d-none d-md-block">
                           <p class="mb-0">Validated By Validator: <a href="#!" class="text-primary">InfStones</a></p>
                           <p class="text-muted small mb-0"><span class="text-primary">150 txns</span> in 3 secs</p>
                        </div>
                        <div class="latest-item__ton">
                           1.11221 TON
                        </div>
                     </div>
                     <div class="latest-item list-group-item d-flex align-items-center border-0 border-bottom p-3">
                        <div class="d-flex align-items-center">
                           <div class="latest-item__icon">Bk</div>
                           <div class="ms-4">
                              <a href="#!" class="text-primary">14941708</a>
                              <p class="text-muted small m-0">17 secs ago</p>
                           </div>
                        </div>
                        <div class="d-none d-md-block">
                           <p class="mb-0">Validated By Validator: <a href="#!" class="text-primary">InfStones</a></p>
                           <p class="text-muted small mb-0"><span class="text-primary">150 txns</span> in 3 secs</p>
                        </div>
                        <div class="latest-item__ton">
                           1.11221 TON
                        </div>
                     </div>
                     <div class="latest-item list-group-item d-flex align-items-center border-0 border-bottom p-3">
                        <div class="d-flex align-items-center">
                           <div class="latest-item__icon">Bk</div>
                           <div class="ms-4">
                              <a href="#!" class="text-primary">14941708</a>
                              <p class="text-muted small m-0">17 secs ago</p>
                           </div>
                        </div>
                        <div class="d-none d-md-block">
                           <p class="mb-0">Validated By Validator: <a href="#!" class="text-primary">InfStones</a></p>
                           <p class="text-muted small mb-0"><span class="text-primary">150 txns</span> in 3 secs</p>
                        </div>
                        <div class="latest-item__ton">
                           1.11221 TON
                        </div>
                     </div>
                     <div class="latest-item list-group-item d-flex align-items-center border-0 border-bottom p-3">
                        <div class="d-flex align-items-center">
                           <div class="latest-item__icon">Bk</div>
                           <div class="ms-4">
                              <a href="#!" class="text-primary">14941708</a>
                              <p class="text-muted small m-0">17 secs ago</p>
                           </div>
                        </div>
                        <div class="d-none d-md-block">
                           <p class="mb-0">Validated By Validator: <a href="#!" class="text-primary">InfStones</a></p>
                           <p class="text-muted small mb-0"><span class="text-primary">150 txns</span> in 3 secs</p>
                        </div>
                        <div class="latest-item__ton">
                           1.11221 TON
                        </div>
                     </div>
                     <div class="latest-item list-group-item d-flex align-items-center border-0 border-bottom p-3">
                        <div class="d-flex align-items-center">
                           <div class="latest-item__icon">Bk</div>
                           <div class="ms-4">
                              <a href="#!" class="text-primary">14941708</a>
                              <p class="text-muted small m-0">17 secs ago</p>
                           </div>
                        </div>
                        <div class="d-none d-md-block">
                           <p class="mb-0">Validated By Validator: <a href="#!" class="text-primary">InfStones</a></p>
                           <p class="text-muted small mb-0"><span class="text-primary">150 txns</span> in 3 secs</p>
                        </div>
                        <div class="latest-item__ton">
                           1.11221 TON
                        </div>
                     </div>
                     <div class="latest-item list-group-item d-flex align-items-center border-0 border-bottom p-3">
                        <div class="d-flex align-items-center">
                           <div class="latest-item__icon">Bk</div>
                           <div class="ms-4">
                              <a href="#!" class="text-primary">14941708</a>
                              <p class="text-muted small m-0">17 secs ago</p>
                           </div>
                        </div>
                        <div class="d-none d-md-block">
                           <p class="mb-0">Validated By Validator: <a href="#!" class="text-primary">InfStones</a></p>
                           <p class="text-muted small mb-0"><span class="text-primary">150 txns</span> in 3 secs</p>
                        </div>
                        <div class="latest-item__ton">
                           1.11221 TON
                        </div>
                     </div>
                     <div class="latest-item list-group-item d-flex align-items-center border-0 border-bottom p-3">
                        <div class="d-flex align-items-center">
                           <div class="latest-item__icon">Bk</div>
                           <div class="ms-4">
                              <a href="#!" class="text-primary">14941708</a>
                              <p class="text-muted small m-0">17 secs ago</p>
                           </div>
                        </div>
                        <div class="d-none d-md-block">
                           <p class="mb-0">Validated By Validator: <a href="#!" class="text-primary">InfStones</a></p>
                           <p class="text-muted small mb-0"><span class="text-primary">150 txns</span> in 3 secs</p>
                        </div>
                        <div class="latest-item__ton">
                           1.11221 TON
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>
<?php
   require "_footer.php";
   ?>