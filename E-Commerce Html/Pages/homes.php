<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="stylesheet" href="../Styles/Utility.css" />
  <link rel="stylesheet" href="../Styles/bootstrap.min.css" />
  <link rel="stylesheet" href="../Styles/FadeSlider.css" />
  <link rel="stylesheet" href="../Styles/output.css" />
  <link rel="stylesheet" href="../Styles/Home.css">
</head>

<body>
  <!-- newsletter -->
    <div class="bg-white mx-auto shadow-lg rounded-lg  flex items-center justify-center w-[860px] h-[400px]">
     <div class="col-5">
      <img alt="Flat lay of fashion items including a green sweater, blue jeans, a coffee mug, a bowl of coffee beans, and a pair of shoes" class="rounded-l-lg" height="500" src="../Images/newsletter_banner.jpg" width="500"/>
     </div>
     <div class="col-6 p-8 relative">
      <button class="absolute top-4 right-4 text-gray-500">
       <i class="fas fa-times">
       </i>
      </button>
      <h2 class="text-2xl font-bold mb-4">
       Subscribe Newsletter!
      </h2>
      <p class="text-gray-600 mb-6">
       Subscribe to our latest newsletter to get news about special discounts and upcoming sales.
      </p>
      <div class="flex mb-6">
       <input class="border border-gray-300 p-2 flex-grow rounded-l-md" placeholder="Enter your email address..." type="email"/>
       <button class="bg-gray-300 text-gray-700 px-4 rounded-r-md">
        SUBSCRIBE
       </button>
      </div>
      <div class="border border-dashed border-gray-400 p-4 flex items-center justify-between">
       <span>
        Your coupon code display here
       </span>
       <i class="fas fa-cut text-gray-500">
       </i>
      </div>
      <div class="mt-4 flex items-center">
       <input class="mr-2" id="no-popup" type="checkbox"/>
       <label class="text-gray-600" for="no-popup">
        Do not show this popup again
       </label>
      </div>
     </div>
    </div>
  <?php
    include('Header.php');
  ?>
  <!-- banner -->
  <section class="py-7 bg-darkColor">
    <div class="containers">
      <div class="flex flex-wrap align-items-center justify-between">
        <!-- Slider Section -->
        <div class="col-9" style="padding-right: 7px">
          <div class="slider">
            <ul class="items">
              <!-- Slide 1 -->
              <li class="item current">
                <div class="h-100 relative">
                  <img src="../Images/Banner/b1.jpg" alt="Slide 1" class="rounded-lg" />
                  <div class="absolute top-7 left-1/2 py-5 inline-block">
                    <p class="font-semibold text-xl pb-4">
                      Big Saving Days Sale
                    </p>
                    <h3 class="font-bold text-4xl w-[23rem] leading-normal">
                      Women Solid Round Green T-Shirt
                    </h3>
                    <p class="pt-3 font-semibold text-lg flex items-center">
                      Starting At Only
                      <span class="text-mainColor font-bold text-3xl ps-3">
                        $59.00
                      </span>
                    </p>
                    <button class="btn-main2 mt-4 text-lg">Shop Now</button>
                  </div>
                </div>
              </li>
              <!-- Slide 2 -->
              <li class="item">
                <div class="h-100 relative">
                  <img src="../Images/Banner/b2.jpg" alt="Slide 1" class="rounded-lg" />
                  <div class="absolute top-7 left-1/2 py-5 inline-block">
                    <p class="font-semibold text-xl pb-4">
                      Big Saving Days Sale
                    </p>
                    <h3 class="font-bold text-4xl w-[23rem] leading-normal">
                      Buy Modern Chair In Black Color
                    </h3>
                    <p class="pt-3 font-semibold text-lg flex items-center">
                      Starting At Only
                      <span class="text-mainColor font-bold text-3xl ps-3">
                        $99.00
                      </span>
                    </p>
                    <button class="btn-main2 mt-4 text-lg">Shop Now</button>
                  </div>
                </div>
              </li>
            </ul>
            <!-- Navigation buttons -->
            <div class="buttons">
              <button id="prev" class="button prev" aria-label="Previous slide"></button>
              <button id="next" class="button next" aria-label="Next slide"></button>
            </div>
            <div class="dots">
              <button class="dot current" aria-label="Slide 1"></button>
              <button class="dot" aria-label="Slide 2"></button>
            </div>
          </div>
        </div>

        <!-- Side Images Section -->
        <div class="w-[228px] overflow-hidden">
          <div class="relative">
            <img src="../Images/Banner/b3.jpg" alt="Samsung Gear VR Camera" class="rounded-lg pb-4 w-100 h-[230px]" />
            <div class="absolute top-0 py-4 px-3 inline left-0">
              <p class="font-semibold text-xl w-[65%] pb-2">
                Samsung Gear VR Camera
              </p>
              <p class="text-mainColor font-bold text-xl pb-2">$129.00</p>
              <a href="#" class="underline">Shop Now</a>
            </div>
          </div>
          <div class="relative">
            <img src="../Images/Banner/b4.jpg" alt="Samsung Gear VR Camera" class="rounded-lg pb-4 w-100 h-[230px]" />
            <div class="absolute top-0 py-4 px-3 inline -right-28">
              <p class="font-semibold text-xl w-[65%] pb-2">
                Marcel Dining Room Chair
              </p>
              <p class="text-mainColor font-bold text-xl pb-2">$129.00</p>
              <a href="#" class="underline">Shop Now</a>
            </div>
          </div>
        </div>

        <!-- Banner Products Section -->
        <div class="col-12 py-16">
          <div class="flex flex-wrap justify-between">
            <div class="col-2" style="padding: 2px">
              <div class="relative" style="width: 100%; border-radius: 0.5rem">
                <div style="background-color: white; width: 100%">
                  <img src="../Images/Banner/p1.jpg" alt="Smart Tablet" class="rounded-lg pb-4 shadow-sm"
                    style="width: 100%; height: 100%" />
                  <div style="
                        position: absolute;
                        bottom: 8px;
                        text-align: center;
                        width: 100%;
                        padding: 3px;
                      ">
                    <p style="font-weight: 600; font-size: 1.125rem">
                      Smart Tablet
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-2" style="padding: 2px">
              <div class="relative" style="width: 100%; border-radius: 0.5rem">
                <div style="background-color: white; width: 100%">
                  <img src="../Images/Banner/p2.jpg" alt="Smart Tablet" class="rounded-lg pb-4 shadow-sm"
                    style="width: 100%; height: 100%" />
                  <div style="
                        position: absolute;
                        bottom: 8px;
                        text-align: center;
                        width: 100%;
                        padding: 3px;
                      ">
                    <p style="font-weight: 600; font-size: 1.125rem">
                      Crepe T-Shirt
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-2" style="padding: 2px">
              <div class="relative" style="width: 100%; border-radius: 0.5rem">
                <div style="background-color: white; width: 100%">
                  <img src="../Images/Banner/p3.jpg" alt="Smart Tablet" class="rounded-lg pb-4 shadow-sm"
                    style="width: 100%; height: 100%" />
                  <div style="
                        position: absolute;
                        bottom: 8px;
                        text-align: center;
                        width: 100%;
                        padding: 3px;
                      ">
                    <p style="font-weight: 600; font-size: 1.125rem">
                      Leather Watch
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-2" style="padding: 2px">
              <div class="relative" style="width: 100%; border-radius: 0.5rem">
                <div style="background-color: white; width: 100%">
                  <img src="../Images/Banner/p4.jpg" alt="Smart Tablet" class="rounded-lg pb-4 shadow-sm"
                    style="width: 100%; height: 100%" />
                  <div style="
                        position: absolute;
                        bottom: 8px;
                        text-align: center;
                        width: 100%;
                        padding: 3px;
                      ">
                    <p style="font-weight: 600; font-size: 1.125rem">
                      Rolling Diamond
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-2" style="padding: 2px">
              <div class="relative" style="width: 100%; border-radius: 0.5rem">
                <div style="background-color: white; width: 100%">
                  <img src="../Images/Banner/p5.jpg" alt="Smart Tablet" class="rounded-lg pb-4 shadow-sm"
                    style="width: 100%; height: 100%" />
                  <div style="
                        position: absolute;
                        bottom: 8px;
                        text-align: center;
                        width: 100%;
                        padding: 3px;
                      ">
                    <p style="font-weight: 600; font-size: 1.125rem">
                      Wooden Chair
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-2" style="padding: 2px">
              <div class="relative" style="width: 100%; border-radius: 0.5rem">
                <div style="background-color: white; width: 100%">
                  <img src="../Images/Banner/p6.jpg" alt="Smart Tablet" class="rounded-lg pb-4 shadow-sm"
                    style="width: 100%; height: 100%" />
                  <div style="
                        position: absolute;
                        bottom: 8px;
                        text-align: center;
                        width: 100%;
                        padding: 3px;
                      ">
                    <p style="font-weight: 600; font-size: 1.125rem">
                      Sneaker Shoes
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Repeat for other Banner Products -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- free shipping + iamges -->
  <section class="bg-white py-14">
    <div class="containers">
      <!-- Border Section -->
      <div class="border-mainColor px-2 py-6 rounded-lg">
        <div class="flex items-center">
          <div class="col-4 border-r px-1">
            <div class="w-full flex items-center text-3xl font-semibold justify-evenly">
              <!-- Use the appropriate icon library -->
              <img src="../Images//Vectors/delivery.png" class="h-9" />
              Free Shipping
            </div>
          </div>
          <div class="col-5 px-3 border-r">
            <div class="w-full items-center text-lg">
              Free Delivery Now On Your First Order and over $200
            </div>
          </div>
          <div class="col-3 pe-4 justify-end flex">
            <div class="w-full flex items-center text-3xl font-semibold justify-end">
              - Only $200*
            </div>
          </div>
        </div>
      </div>

      <!-- Images Section -->
      <div class="flex flex-wrap items-center col-12 overflow-hidden pt-5">
        <!-- Image 1 -->
        <div class="relative col-4 px-3 overflow-hidden">
          <div class="w-full h-full overflow-hidden">
            <img src="../Images/Banner/b5.jpg" alt="S22 Samsung Smartphone"
              class="rounded-lg w-full imgs h-[230px] p-0" />
          </div>
          <div class="absolute top-0 py-4 px-3 inline -right-24">
            <div class="inline">
              <p class="font-semibold text-xl w-[65%] pb-2">S22 Samsung Smartphone</p>
              <p class="text-mainColor font-bold text-xl pb-2">$250.00</p>
              <a href="#" class="underline">Shop Now</a>
            </div>
          </div>
        </div>

        <!-- Image 2 -->
        <div class="relative col-4 px-3 overflow-hidden">
          <div class="w-full h-full overflow-hidden">
            <img src="../Images/Banner/b6.jpg" alt="Armchair Made By Shopstic"
              class="rounded-lg w-full imgs h-[230px] p-0" />
          </div>
          <div class="absolute top-0 py-4 px-3 inline -right-24">
            <div class="inline">
              <p class="font-semibold text-xl w-[65%] pb-2">Armchair Made By Shopstic</p>
              <p class="text-mainColor font-bold text-xl pb-2">$190.00</p>
              <a href="#" class="underline">Shop Now</a>
            </div>
          </div>
        </div>

        <!-- Image 3 -->
        <div class="relative col-4 px-3 overflow-hidden">
          <div class="w-full h-full overflow-hidden">
            <img src="../Images/Banner/b7.jpg" alt="CMS Noise Wireless Headphones"
              class="rounded-lg w-full imgs h-[230px] p-0" />
          </div>
          <div class="absolute top-0 py-4 px-3 inline -right-24">
            <div class="inline">
              <p class="font-semibold text-xl w-[65%] pb-2">CMS Noise Wireless Headphones</p>
              <p class="text-mainColor font-bold text-xl pb-2">$129.00</p>
              <a href="#" class="underline">Shop Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- arrivals -->
  <section class="overflow-hidden">
    <div class="containers">
      <div class="d-flex flex-wrap justify-between">
        <div class="col-6 px-2">
          <div class="overflow-hidden">
            <img src="../Images/Arrivals/fashion.jpg" alt="fashion" class="imgs h-100">
          </div>
        </div>
        <div class="col-6 px-2 flex flex-wrap">
          <div class="col-5">
            <div class="overflow-hidden">
              <img src="../Images/Arrivals/accessories.jpg" alt="accessories" class="h-50 imgs">
            </div>
            <div class="overflow-hidden  mt-14">
              <img src="../Images/Arrivals/footwear.jpg" alt="footwear" class="h-50 imgs">
            </div>
          </div>
          <div class="col-7">
            <div class="overflow-hidden h-100">
              <img src="../Images/Arrivals/watches.jpg" alt="" class="h-100 px-3">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- filtering section1 -->
  <section class="py-14">
    <div class="containers">
      <div class="d-flex flex-wrap wow animate__animated animate__fadeInUp animate__delay-1s">
        <!-- tabs -->
        <ul class="nav nav-pills justify-content-center py-5" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
              type="button" role="tab" aria-controls="pills-home" aria-selected="true">Fashion</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
              type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Electronic</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
              type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Furniture</button>
          </li>
        </ul>
        <!-- content  -->
        <div class="tab-content" id="pills-tabContent">
          <!-- fashion -->
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="d-flex flex-wrap col-12">
              <!-- col1 -->
              <div class="w-[228px] relative group">
                <div class="border rounded-md">
                  <div class="filter-img filter-img1">
                  </div>
                  <div class="p-3">
                    <p class="text-slate-400 text-sm">Initech space</p>
                    <h6 class="text-sm py-3 font-semibold font-mono">Apple Smart Watch / Midnight Aluminum</h6>
                    <p class=""><del class="text-slate-400">$58.00</del> <span
                        class="text-mainColor font-semibold">$51.04</span></p>
                  </div>
                  <!-- icons -->
                  <ul
                    class="absolute right-0 top-4 opacity-0 transition-all duration-500 group-hover:opacity-100 group-hover:right-5">
                    <li class="">
                      <a href="#" class="p-2 rounded-full border inline-block">
                        <img src="../Images/Vectors/heart.png" alt="" class="h-5">
                      </a>
                    </li>
                    <li class="">
                      <a href="#" class="p-2 rounded-full border inline-block">
                        <img src="../Images/Vectors/repost.png" alt="" class="h-5">
                      </a>
                    </li>
                    <li class="">
                      <a href="#" class="p-2 rounded-full border inline-block" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        <img src="../Images/Vectors/eye.png" alt="" class="h-5">
                      </a>
                    </li>
                    <li class="">
                      <a href="#" class="p-2 rounded-full border inline-block">
                        <img src="../Images/Vectors/shopping-cart.png" alt="" class="h-5">
                      </a>
                    </li>
                  </ul>
                  <!-- Button trigger modal -->
                  <!-- Modal -->
                  <div class="modal fade w-100" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog w-[75%] max-w-[75%]">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          ...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Understood</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- col2 -->
              <div class="w-[228px]">
                <div class="border rounded-md">
                  <div class="filter-img filter-img2">
                  </div>
                  <div class="p-3">
                    <p class="text-slate-400 text-sm">Initech space</p>
                    <h6 class="text-sm py-3 font-semibold font-mono">Apple Smart Watch / Midnight Aluminum</h6>
                    <p class=""><del class="text-slate-400">$58.00</del> <span
                        class="text-mainColor font-semibold">$51.04</span></p>
                  </div>
                </div>
              </div>
              <!-- col3 -->
              <div class="w-[228px]">
                <div class="border rounded-md">
                  <div class="filter-img filter-img3">
                  </div>
                  <div class="p-3">
                    <p class="text-slate-400 text-sm">Initech space</p>
                    <h6 class="text-sm py-3 font-semibold font-mono">Apple Smart Watch / Midnight Aluminum</h6>
                    <p class=""><del class="text-slate-400">$58.00</del> <span
                        class="text-mainColor font-semibold">$51.04</span></p>
                  </div>
                </div>
              </div>
              <!-- col5 -->
              <div class="w-[228px]">
                <div class="border rounded-md">
                  <div class="filter-img filter-img5 p-3 w-100">
                  </div>
                  <div class="p-3">
                    <p class="text-slate-400 text-sm">Initech space</p>
                    <h6 class="text-sm py-3 font-semibold font-mono">Apple Smart Watch / Midnight Aluminum</h6>
                    <p class=""><del class="text-slate-400">$58.00</del> <span
                        class="text-mainColor font-semibold">$51.04</span></p>
                  </div>
                </div>
              </div>
              <!-- col6 -->
              <div class="w-[228px]">
                <div class="border rounded-md">
                  <div class="filter-img filter-img6">
                  </div>
                  <div class="p-3">
                    <p class="text-slate-400 text-sm">Initech space</p>
                    <h6 class="text-sm py-3 font-semibold font-mono">Apple Smart Watch / Midnight Aluminum</h6>
                    <p class=""><del class="text-slate-400">$58.00</del> <span
                        class="text-mainColor font-semibold">$51.04</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- electronics -->
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="tab-pane fade show " id="pills-profile" role="tabpanel" aria-labelledby="pills-home-tab">
              <div class="d-flex flex-wrap col-12">
                <!-- col1 -->
                <div class="w-[228px]">
                  <div class="border rounded-md">
                    <div class="filter-img filterE-img1">
                    </div>
                    <div class="p-3">
                      <p class="text-slate-400 text-sm">Initech space</p>
                      <h6 class="text-sm py-3 font-semibold font-mono">Apple Smart Watch / Midnight Aluminum</h6>
                      <p class=""><del class="text-slate-400">$58.00</del> <span
                          class="text-mainColor font-semibold">$51.04</span></p>
                    </div>
                  </div>
                </div>
                <!-- col2 -->
                <div class="w-[228px]">
                  <div class="border rounded-md">
                    <div class="filter-img filterE-img2">
                    </div>
                    <div class="p-3">
                      <p class="text-slate-400 text-sm">Initech space</p>
                      <h6 class="text-sm py-3 font-semibold font-mono">Apple Smart Watch / Midnight Aluminum</h6>
                      <p class=""><del class="text-slate-400">$58.00</del> <span
                          class="text-mainColor font-semibold">$51.04</span></p>
                    </div>
                  </div>
                </div>
                <!-- col3 -->
                <div class="w-[228px]">
                  <div class="border rounded-md">
                    <div class="filter-img filterE-img3">
                    </div>
                    <div class="p-3">
                      <p class="text-slate-400 text-sm">Initech space</p>
                      <h6 class="text-sm py-3 font-semibold font-mono">Apple Smart Watch / Midnight Aluminum</h6>
                      <p class=""><del class="text-slate-400">$58.00</del> <span
                          class="text-mainColor font-semibold">$51.04</span></p>
                    </div>
                  </div>
                </div>
                <!-- col4 -->
                <div class="w-[228px]">
                  <div class="border rounded-md">
                    <div class="filter-img filterE-img4">
                    </div>
                    <div class="p-3">
                      <p class="text-slate-400 text-sm">Initech space</p>
                      <h6 class="text-sm py-3 font-semibold font-mono">Apple Smart Watch / Midnight Aluminum</h6>
                      <p class=""><del class="text-slate-400">$58.00</del> <span
                          class="text-mainColor font-semibold">$51.04</span></p>
                    </div>
                  </div>
                </div>
                <!-- col-5 -->
                <div class="w-[228px]">
                  <div class="border rounded-md">
                    <div class="filter-img filterE-img5">
                    </div>
                    <div class="p-3">
                      <p class="text-slate-400 text-sm">Initech space</p>
                      <h6 class="text-sm py-3 font-semibold font-mono">Apple Smart Watch / Midnight Aluminum</h6>
                      <p class=""><del class="text-slate-400">$58.00</del> <span
                          class="text-mainColor font-semibold">$51.04</span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- watch offer banner -->
  <section>
    <div class="containers overflow-hidden">
      <div class="imgs bg-[url('../Images/offer-banner.jpg')] bg-contain bg-no-repeat h-28 w-100 ">
        <div class="text-center py-4">
          <h3 class="text-white font-bold text-2xl">WATCH</h3>
          <span class="text-white w-50 inline-block text-sm">M6 Smart Band 2.3 – Fitness Band
            Men’s and Women’s Health Tracking, Red Strap</span>
        </div>
      </div>
    </div>
  </section>
  <!-- Latest Products -->
  <section class="py-14">
    <div class="containers">
      <div class="d-flex flex-wrap wow animate__animated animate__fadeInUp animate__delay-1s">
        <h3 class="font-bold text-2xl py-3">Latest Products</h3>
        <!-- content  -->
        <div class="tab-content" id="pills-tabContent">
          <!-- fashion -->
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="d-flex flex-wrap col-12">
              <!-- col1 -->
              <div class="w-[228px] relative group">
                <div class="border rounded-md">
                  <div class="filter-img filter-img1">
                  </div>
                  <div class="p-3">
                    <p class="text-slate-400 text-sm">Initech space</p>
                    <h6 class="text-sm py-3 font-semibold font-mono">Apple Smart Watch / Midnight Aluminum</h6>
                    <p class=""><del class="text-slate-400">$58.00</del> <span
                        class="text-mainColor font-semibold">$51.04</span></p>
                  </div>
                  <!-- icons -->
                  <ul
                    class="absolute right-0 top-4 opacity-0 transition-all duration-500 group-hover:opacity-100 group-hover:right-5">
                    <li class="">
                      <a href="#" class="p-2 rounded-full border inline-block">
                        <img src="../Images/Vectors/heart.png" alt="" class="h-5">
                      </a>
                    </li>
                    <li class="">
                      <a href="#" class="p-2 rounded-full border inline-block">
                        <img src="../Images/Vectors/repost.png" alt="" class="h-5">
                      </a>
                    </li>
                    <li class="">
                      <a href="#" class="p-2 rounded-full border inline-block" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        <img src="../Images/Vectors/eye.png" alt="" class="h-5">
                      </a>
                    </li>
                    <li class="">
                      <a href="#" class="p-2 rounded-full border inline-block">
                        <img src="../Images/Vectors/shopping-cart.png" alt="" class="h-5">
                      </a>
                    </li>
                  </ul>
                  <!-- Button trigger modal -->
                  <!-- Modal -->
                  <div class="modal fade w-100" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog w-[75%] max-w-[75%]">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          ...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Understood</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- col2 -->
              <div class="w-[228px]">
                <div class="border rounded-md">
                  <div class="filter-img filter-img2">
                  </div>
                  <div class="p-3">
                    <p class="text-slate-400 text-sm">Initech space</p>
                    <h6 class="text-sm py-3 font-semibold font-mono">Apple Smart Watch / Midnight Aluminum</h6>
                    <p class=""><del class="text-slate-400">$58.00</del> <span
                        class="text-mainColor font-semibold">$51.04</span></p>
                  </div>
                </div>
              </div>
              <!-- col3 -->
              <div class="w-[228px]">
                <div class="border rounded-md">
                  <div class="filter-img filter-img3">
                  </div>
                  <div class="p-3">
                    <p class="text-slate-400 text-sm">Initech space</p>
                    <h6 class="text-sm py-3 font-semibold font-mono">Apple Smart Watch / Midnight Aluminum</h6>
                    <p class=""><del class="text-slate-400">$58.00</del> <span
                        class="text-mainColor font-semibold">$51.04</span></p>
                  </div>
                </div>
              </div>
              <!-- col5 -->
              <div class="w-[228px]">
                <div class="border rounded-md">
                  <div class="filter-img filter-img5 p-3 w-100">
                  </div>
                  <div class="p-3">
                    <p class="text-slate-400 text-sm">Initech space</p>
                    <h6 class="text-sm py-3 font-semibold font-mono">Apple Smart Watch / Midnight Aluminum</h6>
                    <p class=""><del class="text-slate-400">$58.00</del> <span
                        class="text-mainColor font-semibold">$51.04</span></p>
                  </div>
                </div>
              </div>
              <!-- col6 -->
              <div class="w-[228px]">
                <div class="border rounded-md">
                  <div class="filter-img filter-img6">
                  </div>
                  <div class="p-3">
                    <p class="text-slate-400 text-sm">Initech space</p>
                    <h6 class="text-sm py-3 font-semibold font-mono">Apple Smart Watch / Midnight Aluminum</h6>
                    <p class=""><del class="text-slate-400">$58.00</del> <span
                        class="text-mainColor font-semibold">$51.04</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- electronics -->
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="tab-pane fade show " id="pills-profile" role="tabpanel" aria-labelledby="pills-home-tab">
              <div class="d-flex flex-wrap col-12">
                <!-- col1 -->
                <div class="w-[228px]">
                  <div class="border rounded-md">
                    <div class="filter-img filterE-img1">
                    </div>
                    <div class="p-3">
                      <p class="text-slate-400 text-sm">Initech space</p>
                      <h6 class="text-sm py-3 font-semibold font-mono">Apple Smart Watch / Midnight Aluminum</h6>
                      <p class=""><del class="text-slate-400">$58.00</del> <span
                          class="text-mainColor font-semibold">$51.04</span></p>
                    </div>
                  </div>
                </div>
                <!-- col2 -->
                <div class="w-[228px]">
                  <div class="border rounded-md">
                    <div class="filter-img filterE-img2">
                    </div>
                    <div class="p-3">
                      <p class="text-slate-400 text-sm">Initech space</p>
                      <h6 class="text-sm py-3 font-semibold font-mono">Apple Smart Watch / Midnight Aluminum</h6>
                      <p class=""><del class="text-slate-400">$58.00</del> <span
                          class="text-mainColor font-semibold">$51.04</span></p>
                    </div>
                  </div>
                </div>
                <!-- col3 -->
                <div class="w-[228px]">
                  <div class="border rounded-md">
                    <div class="filter-img filterE-img3">
                    </div>
                    <div class="p-3">
                      <p class="text-slate-400 text-sm">Initech space</p>
                      <h6 class="text-sm py-3 font-semibold font-mono">Apple Smart Watch / Midnight Aluminum</h6>
                      <p class=""><del class="text-slate-400">$58.00</del> <span
                          class="text-mainColor font-semibold">$51.04</span></p>
                    </div>
                  </div>
                </div>
                <!-- col4 -->
                <div class="w-[228px]">
                  <div class="border rounded-md">
                    <div class="filter-img filterE-img4">
                    </div>
                    <div class="p-3">
                      <p class="text-slate-400 text-sm">Initech space</p>
                      <h6 class="text-sm py-3 font-semibold font-mono">Apple Smart Watch / Midnight Aluminum</h6>
                      <p class=""><del class="text-slate-400">$58.00</del> <span
                          class="text-mainColor font-semibold">$51.04</span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- offers -->
  <section class="py-14">
    <div class="containers">
      <div class="d-flex flex-wrap">
        <!-- 1st col -->
        <div class="col-6 px-2">
          <div class="overflow-hidden">
            <div class="bg-[url('../Images/offers/sofa.jpg')] bg-cover h-[210px] bg-no-repeat rounded-lg imgs1">
              <div class="py-4 px-5">
                <p>Save Up To 20% Off</p>
                <h3 class="font-bold text-2xl w-50 font-serif py-3">Santa Lucia Three Seater Sofa</h3>
                <button class="btn-main2">Shop Now</button>
              </div>
            </div>
          </div>
        </div>
        <!-- 2nd col -->
        <div class="col-6 px-2">
          <div class="overflow-hidden">
            <div class="px-2 bg-[url('../Images/offers/wear.jpg')] bg-cover h-[210px] bg-no-repeat rounded-lg imgs1">
              <div class="py-4 px-5">
                <p>Best Online Discount</p>
                <h3 class="font-bold text-xl w-50 font-serif py-3">Woman In Red Crew Neck T-shirt</h3>
                <button class="btn-main2">Shop Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Deal of the Day -->
  <section class="py-14">
    <div class="containers">
      <div class="d-flex flex-wrap wow animate__animated animate__fadeInUp animate__delay-1s">
        <h3 class="font-bold text-2xl py-3">Deal of the Day</h3>
        <!-- content  -->
        <div class="col-12" id="pills-tabContent">
          <!--  -->
          <div class="tab-pane fade show active border-mainColor rounded-md ">
            <div class="d-flex col-12">
              <!-- col1 -->
              <div class="w-[228px] relative group">
                <div class="border rounded-md">
                  <div class="filter-img deal-img1">
                    <img src="images/Bags/b (12).jpg" alt="" class="h-100 w-75 mx-auto">
                  </div>
                  <div class="p-3">
                    <p class="text-slate-400 text-sm">Initech space</p>
                    <h6 class="text-sm py-3 font-semibold font-mono">Brown Purse</h6>
                    <p class=""><del class="text-slate-400">$58.00</del> <span
                        class="text-mainColor font-semibold">$51.04</span></p>
                  </div>
                  <!-- icons -->
                  <ul
                    class="absolute right-0 top-4 opacity-0 transition-all duration-500 group-hover:opacity-100 group-hover:right-5">
                    <li class="">
                      <a href="#" class="p-2 rounded-full border inline-block">
                        <img src="../Images/Vectors/heart.png" alt="" class="h-5">
                      </a>
                    </li>
                    <li class="">
                      <a href="#" class="p-2 rounded-full border inline-block">
                        <img src="../Images/Vectors/repost.png" alt="" class="h-5">
                      </a>
                    </li>
                    <li class="">
                      <a href="#" class="p-2 rounded-full border inline-block" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        <img src="../Images/Vectors/eye.png" alt="" class="h-5">
                      </a>
                    </li>
                    <li class="">
                      <a href="#" class="p-2 rounded-full border inline-block">
                        <img src="../Images/Vectors/shopping-cart.png" alt="" class="h-5">
                      </a>
                    </li>
                  </ul>
                  <!-- Button trigger modal -->
                  <!-- Modal -->
                  <div class="modal fade w-100" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog w-[75%] max-w-[75%]">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          ...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Understood</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- col2 -->
              <div class="w-[228px]">
                <div class="border rounded-md">
                  <div class="filter-img deal-img2">
                  <img src="images/Cosmetics/cosmetics (10).jpg" alt="" class="w-75 mx-auto">
                  </div>
                  <div class="p-3">
                    <p class="text-slate-400 text-sm">Initech space</p>
                    <h6 class="text-sm py-3 font-semibold font-mono">Blunt Face Cream</h6>
                    <p class=""><del class="text-slate-400">$58.00</del> <span
                        class="text-mainColor font-semibold">$51.04</span></p>
                  </div>
                </div>
              </div>
              <!-- col3 -->
              <div class="w-[228px]">
                <div class="border rounded-md">
                  <div class="filter-img deal-img3 pt-10">
                  <img src="images/Earrings/e12.jpg" alt="" class="w-75 mx-auto">
                  </div>
                  <div class="p-3">
                    <p class="text-slate-400 text-sm">Initech space</p>
                    <h6 class="text-sm py-3 font-semibold font-mono">Combo Hnaging Earring</h6>
                    <p class=""><del class="text-slate-400">$58.00</del> <span
                        class="text-mainColor font-semibold">$51.04</span></p>
                  </div>
                </div>
              </div>
              <!-- col5 -->
              <div class="w-[228px]">
                <div class="border rounded-md">
                  <div class="filter-img deal-img5 p-3 w-100">
                    <img src="images/Furniture/furniture (4).jpg" alt="">
                  </div>
                  <div class="p-3">
                    <p class="text-slate-400 text-sm">Initech space</p>
                    <h6 class="text-sm py-3 font-semibold font-mono">wooden Cabinet </h6>
                    <p class=""><del class="text-slate-400">$58.00</del> <span
                        class="text-mainColor font-semibold">$51.04</span></p>
                  </div>
                </div>
              </div>
              <!-- col6 -->
              <div class="w-[228px]">
                <div class="border rounded-md">
                  <div class="filter-img deal-img6">
                    <img src="images/electronics/Fan.jpg" alt="" height="100px" class="h-[70px]">
                  </div>
                  <div class="p-3">
                    <p class="text-slate-400 text-sm">Initech space</p>
                    <h6 class="text-sm py-3 font-semibold font-mono">Fan/ Midnight Aluminum</h6>
                    <p class=""><del class="text-slate-400">$58.00</del> <span
                        class="text-mainColor font-semibold">$51.04</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- offers -->
  <section class="py-14">
    <div class="containers">
      <div class="d-flex flex-wrap">
        <!-- 1st col -->
        <div class="col-6 px-2">
          <div class="overflow-hidden">
            <div class="bg-[url('../Images/offers/watch.jpg')] bg-cover h-[210px] bg-no-repeat rounded-lg imgs1">
              <div class="py-4 px-5">
                <p>20 Days Return Products</p>
                <h3 class="font-bold text-2xl w-50 font-serif py-3">Mobile Shope-Smart Watch T-55</h3>
                <button class="btn-main2">Shop Now</button>
              </div>
            </div>
          </div>
        </div>
        <!-- 2nd col -->
        <div class="col-6 px-2">
          <div class="overflow-hidden">
            <div class="px-2 bg-[url('../Images/offers/bulb.jpg')] bg-cover h-[210px] bg-no-repeat rounded-lg imgs1">
              <div class="py-4 px-5">
                <p>Save Up To 30% Off</p>
                <h3 class="font-bold text-xl w-50 font-serif py-3">Decoration Design Lamp Light</h3>
                <button class="btn-main2">Shop Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- brands logo -->
  <section class="py-5 border-b">
    <div class="containers">
      <div class="d-flex flex-wrap">
        <div class="w-[228px]">
          <div>
            <img src="../Images/brandsLogo/1.jpg" alt="1" class="animate-pulse">
          </div>
        </div>
        <div class="w-[228px]">
          <div>
            <img src="../Images/brandsLogo/2.jpg" alt="2" class="animate-pulse">
          </div>
        </div>
        <div class="w-[228px]">
          <div>
            <img src="../Images/brandsLogo/3.jpg" alt="3" class="animate-pulse">
          </div>
        </div>
        <div class="w-[228px]">
          <div>
            <img src="../Images/brandsLogo/4.jpg" alt="4" class="animate-pulse">
          </div>
        </div>
        <div class="w-[228px]">
          <div>
            <img src="../Images/brandsLogo/5.jpg" alt="5" class="animate-pulse">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- testimonial -->
  <section>
    <div class="containers">
      <div class="max-w-7xl mx-auto py-12">
        <h2 class="text-2xl font-bold mb-8">
          What Our Clients Say
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="bg-white p-6 rounded-lg shadow-md border">
            <div class="flex items-center mb-4">
              <img alt="Portrait of Patrick Goodman" class="w-16 h-16 rounded-full mr-4" height="100"
                src="../Images/testimonial/user1.jpg"
                width="100" />
              <div>
                <h3 class="text-lg font-bold">
                  Patrick Goodman
                </h3>
                <p class="text-gray-600">
                  Manager
                </p>
              </div>
            </div>
            <p class="text-gray-700">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the
              industrys standard dummy text randomised words which dont look even slightly believable
            </p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-md border">
            <div class="flex items-center mb-4">
              <img alt="Portrait of Luies Charls" class="w-16 h-16 rounded-full mr-4" height="100"
                src="../Images/testimonial/user2.jpg"
                width="100" />
              <div>
                <h3 class="text-lg font-bold">
                  Luies Charls
                </h3>
                <p class="text-gray-600">
                  Helper
                </p>
              </div>
            </div>
            <p class="text-gray-700">
              Galley of type and scrambled it to make a type specimen book Lorem Ipsum is simply dummy text of the
              printing and typesetting t predefined chunks as necessary, making this the first true generator
            </p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-md border">
            <div class="flex items-center mb-4">
              <img alt="Portrait of Jecob Goeckno" class="w-16 h-16 rounded-full mr-4" height="100"
                src="../Images/testimonial/user3.jpg"
                width="100" />
              <div>
                <h3 class="text-lg font-bold">
                  Jecob Goeckno
                </h3>
                <p class="text-gray-600">
                  Unit Manager
                </p>
              </div>
            </div>
            <p class="text-gray-700">
              Letraset sheets containing Lorem with desktop publishing printer took a galley Lorem Ipsum is simply dummy
              text of the printing model sentence structures, to generate Lorem Ipsum which looks
            </p>
          </div>
        </div>
        <div class="flex justify-end mt-8">
          <button class="bg-gray-200 text-gray-600 rounded-full p-2 mr-2">
            <i class="fas fa-chevron-left">
            </i>
          </button>
          <button class="bg-gray-200 text-gray-600 rounded-full p-2">
            <i class="fas fa-chevron-right">
            </i>
          </button>
        </div>
      </div>
    </div>
  </section>
  <!-- blog -->
  <section>
    <div class="containers">
      <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-8">
          From The Blog
        </h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Blog Post 1 -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img alt="A cozy living room with a sofa, coffee table, and a chair" class="w-full h-48 object-cover"
              height="400" src="../Images/blog/1.jpg" width="600" />
            <div class="p-4">
              <div class="flex items-center text-red-500 mb-2">
                <i class="far fa-clock mr-2">
                </i>
                <span class="text-sm font-semibold">
                  5 April, 2023
                </span>
              </div>
              <h2 class="text-xl font-bold mb-2">
                Modern Living Room Furniture
              </h2>
              <p class="text-gray-600 mb-4">
                Discover our range of modern living room furniture that combines comfort and style. Perfect for any home
                decor.
              </p>
              <a class="text-red-500 font-semibold" href="#">
                READ MORE
              </a>
            </div>
          </div>
          <!-- Blog Post 2 -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img alt="A child wearing a VR headset" class="w-full h-48 object-cover" height="400"
              src="../Images/blog/2.jpg" width="600" />
            <div class="p-4">
              <div class="flex items-center text-red-500 mb-2">
                <i class="far fa-clock mr-2">
                </i>
                <span class="text-sm font-semibold">
                  3 April, 2023
                </span>
              </div>
              <h2 class="text-xl font-bold mb-2">
                Virtual Reality Headset
              </h2>
              <p class="text-gray-600 mb-4">
                Experience the future of gaming and entertainment with our state-of-the-art VR headset. Immersive and
                interactive.
              </p>
              <a class="text-red-500 font-semibold" href="#">
                READ MORE
              </a>
            </div>
          </div>
          <!-- Blog Post 3 -->
          <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img alt="A person holding wireless earbuds" class="w-full h-48 object-cover" height="400"
              src="../Images/blog/3.jpg" width="600" />
            <div class="p-4">
              <div class="flex items-center text-red-500 mb-2">
                <i class="far fa-clock mr-2">
                </i>
                <span class="text-sm font-semibold">
                  1 April, 2023
                </span>
              </div>
              <h2 class="text-xl font-bold mb-2">
                Wireless Earbuds
              </h2>
              <p class="text-gray-600 mb-4">
                Enjoy high-quality sound and convenience with our latest wireless earbuds. Perfect for music lovers on
                the go.
              </p>
              <a class="text-red-500 font-semibold" href="#">
                READ MORE
              </a>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- follow us on inst -->
  <section class="bg-pink-50 py-10">
    <div class="containers mx-auto py-10">
      <h2 class="text-center text-2xl font-bold mb-6">
        Follow Us On Instagram
      </h2>
      <div class="grid grid-cols-7 gap-4">
        <div class="rounded overflow-hidden">
          <img alt="White hoodie with jeans and decorative items" class="w-full" height="200"
            src="../Images/insta/9.jpg" width="200" />
        </div>
        <div class="rounded overflow-hidden">
          <img alt="Hand holding a pair of pearl earrings" class="w-full" height="200" src="../Images/insta/10.jpg"
            width="200" />
        </div>
        <div class="rounded overflow-hidden">
          <img alt="Person wearing a smartwatch" class="w-full" height="200" src="../Images/insta/3.jpg" width="200" />
        </div>
        <div class="rounded overflow-hidden">
          <img alt="Woman in a pink coat smiling" class="w-full" height="200" src="../Images/insta/4.jpg" width="200" />
        </div>
        <div class="rounded overflow-hidden">
          <img alt="Person holding a black handbag" class="w-full" height="200" src="../Images/insta/5.jpg"
            width="200" />
        </div>
        <div class="rounded overflow-hidden">
          <img alt="Perfume bottle with flowers" class="w-full" height="200" src="../Images/insta/6.jpg" width="200" />
        </div>
        <div class="rounded overflow-hidden">
          <img alt="Perfume bottle with flowers" class="w-full" height="200" src="../Images/insta/7.jpg" width="200" />
        </div>
      </div>
    </div>
  </section>
  <!-- policy -->
  <section class="py-28">
    <div class="containers">
      <div class="flex flex-wrap justify-center space-x-12 py-8">
        <div class="text-center">
          <img src="../Images/policyicons/1.svg" alt="1" class="h-16 mx-auto">
          <h3 class="mt-2 text-lg font-semibold">Free Shipping</h3>
          <p class="text-gray-500">For all Orders Over $100</p>
        </div>
        <div class="text-center">
          <img src="../Images/policyicons/2.svg" alt="2" class="h-16 mx-auto">
          <h3 class="mt-2 text-lg font-semibold">30 Days Returns</h3>
          <p class="text-gray-500">For an Exchange Product</p>
        </div>
        <div class="text-center">
          <img src="../Images/policyicons/3.svg" alt="3" class="h-16 mx-auto">
          <h3 class="mt-2 text-lg font-semibold">Secured Payment</h3>
          <p class="text-gray-500">Payment Cards Accepted</p>
        </div>
        <div class="text-center">
          <img src="../Images/policyicons/4.svg" alt="4" class="h-16 mx-auto">
          <h3 class="mt-2 text-lg font-semibold">Special Gifts</h3>
          <p class="text-gray-500">Our First Product Order</p>
        </div>
        <div class="text-center">
          <img src="../Images/policyicons/5.svg" alt="5" class="h-16 mx-auto">
          <h3 class="mt-2 text-lg font-semibold">Support 24/7</h3>
          <p class="text-gray-500">Contact us Anytime</p>
        </div>
      </div>
    </div>
  </section>
  <!-- footer -->
   <footer class="border-t pb-10 border-b">
    <div class="containers mx-auto py-10">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
          <!-- Contact Us Section -->
          <div class="border-r">
              <h2 class="text-lg font-bold mb-4">Contact Us</h2>
              <p>Zara - Mega Super Store</p>
              <p>507-Union Trade Centre</p>
              <p>France</p>
              <p class="mt-4">sales@yourcompany.com</p>
              <p class="text-red-500 text-xl mt-4">(+91) 9876-543-210</p>
          </div>
          <!-- Products Section -->
          <div>
              <h2 class="text-lg font-bold mb-4">Products</h2>
              <ul>
                  <li class="mb-2">Prices Drop</li>
                  <li class="mb-2">New Products</li>
                  <li class="mb-2">Best Sales</li>
                  <li class="mb-2">Contact Us</li>
                  <li class="mb-2">Sitemap</li>
                  <li class="mb-2">Stores</li>
              </ul>
          </div>
          <!-- Our Company Section -->
          <div>
              <h2 class="text-lg font-bold mb-4">Our Company</h2>
              <ul>
                  <li class="mb-2">Delivery</li>
                  <li class="mb-2">Legal Notice</li>
                  <li class="mb-2">Terms And Conditions Of Use</li>
                  <li class="mb-2">About Us</li>
                  <li class="mb-2">Secure Payment</li>
                  <li class="mb-2">Login</li>
              </ul>
          </div>
          <!-- Subscribe To Newsletter Section -->
          <div>
              <h2 class="text-lg font-bold mb-4">Subscribe To Newsletter</h2>
              <p class="mb-4">Subscribe to our latest newsletter to get news about special discounts.</p>
              <input type="email" placeholder="Your Email Address" class="w-full p-2 border border-gray-300 rounded mb-4">
              <button class="w-full bg-red-500 text-white p-2 rounded">SUBSCRIBE</button>
              <div class="mt-4">
                  <input type="checkbox" id="agree" class="mr-2">
                  <label for="agree">I agree to the terms and conditions and the privacy policy</label>
              </div>
          </div>
      </div>
  </div>
   </footer>
  </div>
  </section>
  <script src="../Js/bootstrap.min.js"></script>
  <script src="../Js/FadeSlide.js"></script>
  <!-- newsletter script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        const popup = document.getElementById('popup');
        const closeBtn = document.getElementById('close-btn');
        const noPopupCheckbox = document.getElementById('no-popup');

        if (!localStorage.getItem('noPopup')) {
            popup.classList.remove('hidden');
        }

        closeBtn.addEventListener('click', function() {
            popup.classList.add('hidden');
            if (noPopupCheckbox.checked) {
                localStorage.setItem('noPopup', 'true');
            }
        });
    });
</script>
</body>

</html>