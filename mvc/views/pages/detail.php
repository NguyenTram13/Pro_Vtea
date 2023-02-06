<div class="main">
    <div class="about-background">
        <div class="about-background-content">
            <div class="ab-content-text">
                <h2>Product Details</h2>
            </div>
        </div>
    </div>
    <div class="detail w-[70%] mx-[auto]">
        <style>
            html,
            body {
                position: relative;
                font-family: "popins", sans-serif;

            }

            body {
                /* font-family: Helvetica Neue, Helvetica, Arial, sans-serif; */
                font-size: 14px;
                margin: 0;
                padding: 0;
            }

            .swiper {
                width: 100%;
                height: 100%;
            }

            .swiper-slide {
                text-align: center;
                font-size: 18px;
                background: #fff;

                /* Center slide text vertically */
                display: -webkit-box;
                display: -ms-flexbox;
                display: -webkit-flex;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-justify-content: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-align-items: center;
                align-items: center;
            }

            .swiper-slide img {
                display: block;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            body {
                /* background: #000; */
                color: #000;
            }

            .swiper {
                width: 100%;
                height: 300px;
                margin-left: auto;
                margin-right: auto;
            }

            .swiper-slide {
                background-size: cover;
                background-position: center;
            }

            .mySwiper2 {
                height: 80%;
                width: 100%;
            }

            .mySwiper {
                height: 20%;
                box-sizing: border-box;
                padding: 10px 0;
            }

            .mySwiper .swiper-slide {
                width: 25%;
                height: 100%;
                opacity: 0.4;
            }

            .mySwiper .swiper-slide-thumb-active {
                opacity: 1;
            }

            .swiper-slide img {
                display: block;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .detail-comment,
            .detail-title {
                font-family: 'Playfair Display', 'Poppins', sans-serif;
            }

            .detail-vible {
                opacity: 1;
                visibility: visible !important;
            }

            .hover-border {
                position: relative;
            }

            .hover-border.active {
                color: #98cb50;
            }

            .hover-border.active::after {
                margin-bottom: -7px;
                content: "";
                position: absolute;
                width: 100%;
                height: 3px;
                left: 0;
                bottom: 0;
                /* transform: translateX(-50%); */
                background-color: #98cb50;
                transform: scale(0.7, 1);
                transition: transform 0.3s ease;
            }

            .hover-border.active:hover::after {
                transform: scale(1, 1);
            }

            .detail-tab {
                display: none;
            }

            .detail-tab.active {
                display: flex;
            }
        </style>
        <div class="row">
            <div class="col-6">

                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">

                    <div class="swiper-wrapper">

                        <!-- <div class="swiper-slide">
                            <img class="object-cover w-full h-full border" src="<?php echo _PATH_UPLOAD_PRODUCT . $data['product']['img'] ?>" />
                        </div> -->
                        <?php
                        if (!empty($data['images'])) {
                            foreach ($data['images'] as $image) {
                        ?>
                                <div class="swiper-slide">
                                    <img class="border-2 border-[#98cb50] " src="<?php echo _PATH_UPLOAD_PRODUCT . $image['path_img'] ?>" />
                                </div>
                        <?php
                            }
                        }
                        ?>

                    </div>
                    <div class="swiper-button-next text-slate-900 hover:text-[#98cb50]"></div>
                    <div class="swiper-button-prev  text-slate-900 hover:text-[#98cb50]"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="flex justify-center swiper-wrapper">
                        <!-- <div class="swiper-slide">
                            <img class="object-cover w-full h-full border" src="<?php echo _PATH_UPLOAD_PRODUCT . $data['product']['img'] ?>" />
                        </div> -->
                        <?php
                        if (!empty($data['images'])) {
                            foreach ($data['images'] as $image) {
                        ?>
                                <div class="swiper-slide">
                                    <img class="border-2 border-[#98cb50] " src="<?php echo _PATH_UPLOAD_PRODUCT . $image['path_img'] ?>" />
                                </div>
                        <?php
                            }
                        }
                        ?>

                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="p-5">
                    <div class="arrival-product-content">
                        <h3 class="text-[1.75rem] py-[10px] font-bold detail-title"><?php echo $data['product']['name'] ?></h3>
                        <div class="arrival-product-evaluate mb-[20px]">
                            <span class="raiting text-[#98cb50]">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                            <span class="sold-out"><?php echo $data['product']['views'] ?></span>
                        </div>
                        <p class="mb-[15px] text-[#888888]"><?php echo $data['product']['describes'] ?></p>
                        <!-- <p class="mb-[5px] font-bold ">BRANDS: <span class="font-normal cusor-pointer text-[#888888] hover:text-[#98cb50]"> Coco Lee</span></p> -->
                        <div class="font-bold">CATEGORIES: <a class="font-normal text-[#888888] hover:text-[#98cb50] "><?php echo $data['cate']['name'] ?></a></div>
                        <p class="arrival-product-price  text-[1.75rem] text-[#98cb50]">
                            $<span class="product-price "><?php echo $data['product']['price'] ?></span>
                        </p>
                        <div class="flex items-center gap-3">
                            <span class="font-bold">
                                QTY:
                            </span>
                            <div class="cf-list-2">
                                <span data-id="' . $pro['id'] . '" data-url="' . _WEB_ROOT . '/ajax' . '" data-pathimg="' . _PATH_UPLOAD_PRODUCT . '" class="down-pro hover:bg-[#98cb50] pt-[7px] transition-all  hover:text-white border inline-block leading-none p-[4px] w-[30px] text-center cursor-pointer min-w-[30px] text-center cursor-pointer max-w-[30px] text-center cursor-pointer h-[30px] text-center cursor-pointer">-</span>
                                <span class=" number_detail  transition-all hover:text-[#98cb50] font-bold inline-block leading-none p-[4px] w-[30px] text-center cursor-pointer min-w-[30px] text-center cursor-pointer max-w-[30px] text-center cursor-pointer h-[30px] text-center cursor-pointer">1</span>
                                <span data-id="' . $pro['id'] . '" data-url="' . _WEB_ROOT . '/ajax' . '" data-pathimg="' . _PATH_UPLOAD_PRODUCT . '" class="up-pro hover:bg-[#98cb50] pt-[7px] transition-all hover:text-white border inline-block leading-none p-[4px] w-[30px] text-center cursor-pointer min-w-[30px] text-center cursor-pointer max-w-[30px] text-center cursor-pointer h-[30px] text-center cursor-pointer">+</span>
                            </div>
                            <button data-url="<?php echo _WEB_ROOT . '/ajax' ?>" data-pathimg="<?php echo _PATH_UPLOAD_PRODUCT ?>" data-id="<?php echo $data['product']['id'] ?>" type="submit" class="bg-[#323334]  text-[#fff] hover:bg-[#4b4d4e] p-3 add_cart_detail"> <i class="fa-solid fa-bag-shopping"></i> ADD TO CART</button>
                        </div>
                        <div class="mt-[20px] ">
                            <a class="no-underline text-[#888888] hover:text-[#98cb50] mr-2" href=""><i class="fa-regular fa-heart"></i> <span>Add to wishlist</span></a>
                            <a class="no-underline text-[#888888]  hover:text-[#98cb50]" href=""><i class="fa-solid fa-scale-balanced"></i> <span>Compare</span></a>
                        </div>
                        <hr class="my-4">
                        <div class="footer-right-link">

                            <div class="row">
                                <?php
                                foreach ($data['settings'] as $setting) {
                                    // if ($setting['config_key'] !== 'Logo') {
                                    //     continue;
                                    // }
                                    if ($setting['config_key'] === 'Facebook') {
                                        echo '
                                            <a href="' . $setting['config_value'] . '" class="col col-2 border mr-2 rounded-full pt-2 hover:bg-[#3B5999] hover:text-[#fff] w-[40px] h-[40px] text-center fb"><i class="fa-brands fa-facebook-f"></i></a>
            
                                            ';
                                    }
                                    if ($setting['config_key'] === 'Twitter') {
                                        echo '
                                            <a href="' . $setting['config_value'] . '" class="col col-2 border mr-2 rounded-full pt-2 hover:bg-[#00adef] hover:text-[#fff] w-[40px] h-[40px] text-center tw"><i class="fa-brands fa-twitter"></i></a>
                                            
                                            ';
                                    }
                                    if ($setting['config_key'] === 'Instagram') {
                                        echo '
                                            <a href="' . $setting['config_value'] . '" class="col col-2 border mr-2 rounded-full pt-2 hover:bg-[#cc0001] hover:text-[#fff] w-[40px] h-[40px] text-center in"><i class="fa-brands fa-instagram"></i></a>
                                            
                                            ';
                                    }
                                    if ($setting['config_key'] === 'Linkedin') {
                                        echo '
                                            <a href="' . $setting['config_value'] . '" class="col col-2 border mr-2 rounded-full pt-2 hover:text-[#fff] hover:bg-[#0073b2] w-[40px] h-[40px] text-center li"><i class="fa-brands fa-linkedin-in"></i></a>
                                            
                                            ';
                                    }
                                    if ($setting['config_key'] === 'Pinterest') {
                                        echo '
                                            <a href="' . $setting['config_value'] . '" class="col col-2 border mr-2 rounded-full pt-2 hover:text-[#fff] hover:bg-[#f96a02] w-[40px] h-[40px] text-center pi"><i class="fa-brands fa-pinterest-p"></i></a>
                                            
                                            ';
                                    }
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

        <script>
            var swiper = new Swiper(".mySwiper", {
                spaceBetween: 10,
                slidesPerView: 4,
                freeMode: true,
                watchSlidesProgress: true,
            });
            var swiper2 = new Swiper(".mySwiper2", {
                spaceBetween: 10,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                thumbs: {
                    swiper: swiper,
                },
            });
        </script>
    </div>

    <div class="detail-comment  w-[70%] mx-[auto]">
        <div class="my-5 dc-menu">
            <ul class=" mb-2 flex justify-center gap-3 text-[22px] ">
                <li data-tab="1" class=" text-[#323334] cursor-pointer font-bold hover-border hover:text-[#98cb50] active">Description</li>
                <li data-tab="2" class="  text-[#323334] cursor-pointer font-bold hover-border hover:text-[#98cb50]">Reviews <span>(<?php echo $data['count_comment'] ?>)</span></li>
            </ul>
            <hr class="text-[#888888]">
        </div>
        <div class="dc-content text-[#888888]">
            <div class="row detail-tab active" data-tab="1">
                <div class="col-xs-12 col-sm-6" id="">
                    <div>
                        <h2 class="text-[18px] text-[#323334] pb-3">Nutrition facts</h2>
                        <p>Praesent id enim sit amet.Tdio vulputate eleifend in in tortor. ellus massa. siti iMassa ristique sit amet condim vel, facilisis.</p>
                        <ul class="py-3">
                            <li> <span class="text-[#98cb50]"><i class="fa-solid fa-check"></i></span> <span>Praesent id enim sit amet.Tdio vulputate</span></li>
                            <li> <span class="text-[#98cb50]"><i class="fa-solid fa-check"></i></span> <span>Eleifend in in tortor. ellus massa.Dristique sitii</span></li>
                            <li> <span class="text-[#98cb50]"><i class="fa-solid fa-check"></i></span> <span>Massa ristique sit amet condim vel</span></li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="text-[18px] text-[#323334] pb-3">Ingredients</h2>
                        <table class="">
                            <tr class="p-5 border-bottom">
                                <td class="text-[#323334] font-bold p-2 ">
                                    Material</td>
                                <td>Praesent id enim sit amet.Tdio vulputate</td>

                            </tr>
                            <tr class="border-bottom ">
                                <td class="text-[#323334] font-bold p-2">Claimed Size</td>
                                <td> Praesent id enim sit amet.Tdio</td>
                            </tr>
                            <tr class="border-bottom ">
                                <td class="text-[#323334] font-bold p-2">Recommended Use</td>
                                <td>Praesent id enim sit amet.Tdio vulputate eleifend in in toror. ellus massa. siti</td>
                            </tr>
                            <tr class="border-bottom ">
                                <td class="text-[#323334] font-bold p-2">Manufacturer</td>
                                <td>Praesent id enim sit</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <img src="<?php echo _PATH_ROOT_PUBLIC . '/img/detail/banner-13.png' ?>" alt="">
                </div>
            </div>

            <div class="my-5 row detail-tab" data-tab="2">
                <div class="col-4 ">
                    <div class="average_start">
                        <div class="flex items-center gap-3">
                            <span class="text-[80px] pb-4 text-[#3a3a3a]"><?php echo number_format($data['phantram'], 1) ?></span>
                            <div>
                                <h3 class="text-[#323334] mb-2 p-2">Average Rating</h3>
                                <div class="arrival-product-evaluate">
                                    <span id="rateYoSum" data-rateyo-rating="<?php echo $data['phantram']  ?>"></span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <table class="w-full">
                                <tr class="">
                                    <td class="w-[30%] ">
                                        <span id="rateYo1"></span>
                                    </td>
                                    <td class="w-[55%] ">
                                        <div class="progress h-[12px]">
                                            <?php
                                            $width = 0;
                                            if (isset($data['arrayNew']['5'])) {
                                                $width = $data['arrayNew']['5'];
                                            }

                                            $style = "width: " . $width . "%";
                                            ?>
                                            <div class="progress-bar bg-[#ffb639]  " role="progressbar" style="<?php echo $style ?>" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="w-[15%] pl-2"><?php echo isset($data['arrayNew']['5']) ? number_format($data['arrayNew']['5'], 1) : 0 ?>%</td>
                                </tr>
                                <tr class="">
                                    <td class="w-[30%] ">
                                        <span id="rateYo2"></span>
                                    </td>
                                    <td class="w-[55%] ">
                                        <div class="progress h-[12px]">
                                            <?php
                                            $width = 0;
                                            if (isset($data['arrayNew']['4'])) {
                                                $width = $data['arrayNew']['4'];
                                            }

                                            $style = "width: " . $width . "%";
                                            ?>
                                            <div class="progress-bar bg-[#ffb639]  " role="progressbar" style="<?php echo $style ?>" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="w-[15%] pl-2"> <?php echo isset($data['arrayNew']['4']) ? number_format($data['arrayNew']['4'], 1) : 0 ?>%</td>
                                </tr>
                                <tr class="">
                                    <td class="w-[30%] ">
                                        <span id="rateYo3"></span>
                                    </td>
                                    <td class="w-[55%] ">
                                        <div class="progress h-[12px]">
                                            <?php
                                            $width = 0;
                                            if (isset($data['arrayNew']['3'])) {
                                                $width = $data['arrayNew']['3'];
                                            }

                                            $style = "width: " . $width . "%";
                                            ?>
                                            <div class="progress-bar bg-[#ffb639]  " role="progressbar" style="<?php echo $style ?>" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="w-[15%] pl-2"> <?php echo isset($data['arrayNew']['3']) ? number_format($data['arrayNew']['3'], 1) : 0 ?>%</td>
                                </tr>
                                <tr class="">
                                    <td class="w-[30%] ">
                                        <span id="rateYo4"></span>
                                    </td>
                                    <td class="w-[55%] ">
                                        <div class="progress h-[12px]">
                                            <?php
                                            $width = 0;
                                            if (isset($data['arrayNew']['2'])) {
                                                $width = $data['arrayNew']['2'];
                                            }

                                            $style = "width: " . $width . "%";
                                            ?>
                                            <div class="progress-bar bg-[#ffb639]  " role="progressbar" style="<?php echo $style ?>" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="w-[15%] pl-2"><?php echo isset($data['arrayNew']['2']) ? number_format($data['arrayNew']['2'], 1) : 0 ?>%</td>
                                </tr>
                                <tr class="">
                                    <td class="w-[30%] ">
                                        <span id="rateYo5"></span>
                                    </td>
                                    <td class="w-[55%] ">
                                        <div class="progress h-[12px]">
                                            <?php
                                            $width = 0;
                                            if (isset($data['arrayNew']['1'])) {
                                                $width = $data['arrayNew']['1'];
                                            }

                                            $style = "width: " . $width . "%";
                                            ?>
                                            <div class="progress-bar bg-[#ffb639]  " role="progressbar" style="<?php echo $style ?>" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="w-[15%] pl-2"> <?php echo isset($data['arrayNew']['1']) ? number_format($data['arrayNew']['1'], 1) : 0 ?>%</td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <style>
                        .scroll-hidden::-webkit-scrollbar {
                            display: none;
                        }
                    </style>
                    <div class="h-3/4 right_detail boder border-[0.1px] p-2 overflow-auto scroll-hidden">

                        <div>
                            <div>
                                <h2 class="text-[#323334] text-[22px] mb-[10px]">Submit Your Review</h2>
                                <p>Your email address will not be published. Required fields are marked *</p>

                            </div>
                            <div class="my-[20px] ">
                                <span class="text-[#323334] ">Your Rating Of This Product :</span>
                                <div class="flex items-center gap-3">

                                    <span id="rateYo"></span>
                                    <span class="text-xl number-rate">4</span>
                                </div>

                                <!-- <span class="raiting-chose text-[#ccc] ">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span> -->
                            </div>
                            <form class="form_cmt" data-pathimg="<?php echo _PATH_UPLOAD_AVT ?>" data-iduser="<?php echo $_SESSION['user']['id'] ?>" data-idpro="<?php echo $data['product']['id'] ?>" action="<?php echo _WEB_ROOT . '/Detail/add_comment/' . $data['product']['id'] ?>" method="post" enctype="multipart/form-data">
                                <textarea class="border border-[#ededed] w-full text-[#888888] rounded  p-3" name="comment" id="comment" cols="30" rows="5"></textarea>
                                <div class="row">
                                    <div class="col-6">
                                        <input disabled type="text" class="border border-[#ededed] w-full text-[#888888] rounded  p-3" name="name" placeholder="Tên của bạn" value="<?php echo $_SESSION['user']['fullname'] ?>">
                                    </div>
                                    <div class="col-6">
                                        <input disabled type="text" class="border border-[#ededed] w-full text-[#888888] rounded  p-3" name="email" placeholder="Email của bạn" value="<?php echo $_SESSION['user']['email'] ?>">
                                    </div>
                                </div>
                                <div class="my-4">
                                    <input type="checkbox" name="" id="">
                                    <span>Save my name, email, and website in this browser for the next time I comment.
                                    </span>
                                    <p> You have to login to add images.</p>
                                </div>
                                <button type="submit" class="p-3 bg-[#000] text-[#fff] hover:bg-[#4b4d4e] w-[200px]">Submit Reviews</button>
                            </form>


                        </div>
                        <div class="my-5 list_comment">
                            <?php
                            if (count($data['dataCmt']) > 0) {
                                foreach ($data['dataCmt'] as $comment) {
                            ?>
                                    <div class="flex gap-2 my-3">
                                        <div>

                                            <img class="w-[100px] h-[100px] rounded-full" src="<?php echo $comment['avt'] ? _PATH_UPLOAD_AVT . $comment['avt'] : _PATH_UPLOAD_AVT . 'avt.jpg'   ?>" alt="">
                                        </div>
                                        <div>

                                            <div class="arrival-product-evaluate">
                                                <div class="rateYo" data-rateyo-read-only="true" data-rateyo-rating="<?php echo $comment['rating'] ?>"></div>
                                            </div>
                                            <div class="py-2">
                                                <span class="text-[#323334] font-bold text-[22px] "><?php echo $comment['name'] ?></span>
                                                <span></span>
                                            </div>
                                            <p><?php echo $comment['content'] ?></p>
                                            <div class="flex gap-32 py-2">
                                                <div class="hover:text-[#98cb50]">
                                                    <span><i class="fa-regular fa-thumbs-up"></i></span>
                                                    <span>Helpfull (2)</span>
                                                </div>
                                                <div class="hover:text-[#98cb50]">
                                                    <span><i class="fa-regular fa-thumbs-down"></i></span>
                                                    <span>Unhelpfull (0)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                }
                            }

                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="detail-help  w-[70%] mx-[auto] my-5">
        <div class="row g-5">
            <div class="col-4">

                <div class="p-4 text-center border rounded-md ">
                    <h3 class="pb-2  relative text-[#98cb50] after:block after:bg-slate-900 after:content[''] after:absolute after:w-[32px] after:-translate-x-1/2 after:left-[50%] after:my-2  after:h-[1px] after:text-[#323334] ">Why choose us?</h3>

                    <p class="pt-3 text-[#888888]">Praesent id enim sit amet.Tdio vulputate eleifend in in tortor. ellus massa. sitiassa ristique sit amet condim vel, facilisis.</p>
                </div>
            </div>
            <div class="col-4">

                <div class="p-4 text-center border rounded-md ">
                    <h3 class="pb-2  relative text-[#98cb50] after:block after:bg-slate-900 after:content[''] after:absolute after:w-[32px] after:-translate-x-1/2 after:left-[50%] after:my-2  after:h-[1px] after:text-[#323334] ">Returns</h3>
                    <p class="pt-3 text-[#888888]">Praesent id enim sit amet.Tdio vulputate eleifend in in tortor. ellus massa. sitiassa ristique sit amet condim vel, facilisis.</p>
                </div>
            </div>
            <div class="col-4">

                <div class="p-4 text-center border rounded-md ">
                    <h3 class="pb-2 relative text-[#98cb50] after:block after:bg-slate-900 after:content[''] after:absolute after:w-[32px] after:-translate-x-1/2 after:left-[50%] after:my-2  after:h-[1px] after:text-[#323334] ">Shipping</h3>

                    <p class="pt-3  text-[#888888]">Praesent id enim sit amet.Tdio vulputate eleifend in in tortor. ellus massa. sitiassa ristique sit amet condim vel, facilisis.</p>
                </div>
            </div>


        </div>
    </div>


    <div class="main-product w-[70%] mx-[auto]" data-aos="fade-up">

        <div class="new-arrival-title">

            <h2 data-aos="fade-up" data-aos-duration="2000">Related Products</h2>
        </div>
        <div class="container new-arrival-list" data-aos="fade-up" data-aos-duration="3000">
            <div class="row product-list2 ">
                <?php
                foreach ($data['product_sam'] as $new) {
                ?>
                    <div class="col-xs-12 col-sm-6 col-lg-3 ">
                        <div class="shadow item new-arrival-item " data-url="<?php echo _WEB_ROOT . '/ajax' ?>" data-pathimg="<?php echo _PATH_UPLOAD_PRODUCT  ?>" data-id="<?php echo $new['id'] ?>">
                            <div class="new-arrival-img">
                                <img src="<?php echo _PATH_UPLOAD_PRODUCT . $new['img'] ?>">
                                <div class="new-arrival-other">
                                    <div class="other-icon">
                                        <span class="other-icon-cart" data-id="<?php echo $new['id'] ?>">
                                            <i class="fa-solid fa-bag-shopping"></i>
                                        </span>
                                        <span>
                                            <i class="fa-solid fa-heart"></i>
                                        </span>
                                        <span>
                                            <i class="fa-solid fa-scale-balanced"></i>
                                        </span>
                                    </div>
                                    <div class="other-btn">
                                        <button>Quick View</button>
                                    </div>
                                </div>

                                <div>
                                    <span class="sale">12% off</span>
                                </div>
                            </div>
                            <div class="arrival-product-content">
                                <h3><a href="<?php echo _WEB_ROOT . '/Detail/index/' . $new['id'] ?>"><?php echo $new['name'] ?></a></h3>
                                <div class="arrival-product-evaluate">
                                    <span class="raiting text-[#ffb639]">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                    <span class="sold-out"><?php echo $new['views'] ?></span>
                                </div>
                                <p class="arrival-product-price">
                                    <span>$</span>
                                    <span class="product-price "><?php echo $new['price'] ?></span>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <div class="model-detail fixed z-[999] opacity-100 transition-all invisible shadow-2xl shadow-[#000]">
        <div class=" flex justify-between items-center w-[70%] mx-[auto] py-3 ">
            <div class="flex items-center gap-3">
                <div class="">
                    <img class="w-[100px]" src="<?php echo _PATH_UPLOAD_PRODUCT . $data['product']['img'] ?>" alt="">
                </div>
                <div class="">
                    <div>
                        <h3 class="text-[1rem] py-[10px]  detail-title"><?php echo $data['product']['name'] ?></h3>
                        <h2 class=" text-[1.125rem] text-[#98cb50]  detail-title">$<?php echo $data['product']['price'] ?></h2>
                    </div>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <div class="cf-list">
                    <span data-id="' . $pro['id'] . '" data-url="' . _WEB_ROOT . '/ajax' . '" data-pathimg="' . _PATH_UPLOAD_PRODUCT . '" class="down-pro hover:bg-[#98cb50] pt-[7px] transition-all  hover:text-white border inline-block leading-none p-[4px] w-[30px] text-center cursor-pointer min-w-[30px] text-center cursor-pointer max-w-[30px] text-center cursor-pointer h-[30px] text-center cursor-pointer">-</span>
                    <span class="  transition-all hover:text-[#98cb50] font-bold inline-block leading-none p-[4px] w-[30px] text-center cursor-pointer min-w-[30px] text-center cursor-pointer max-w-[30px] text-center cursor-pointer h-[30px] text-center cursor-pointer">1</span>
                    <span data-id="' . $pro['id'] . '" data-url="' . _WEB_ROOT . '/ajax' . '" data-pathimg="' . _PATH_UPLOAD_PRODUCT . '" class="up-pro hover:bg-[#98cb50] pt-[7px] transition-all hover:text-white border inline-block leading-none p-[4px] w-[30px] text-center cursor-pointer min-w-[30px] text-center cursor-pointer max-w-[30px] text-center cursor-pointer h-[30px] text-center cursor-pointer">+</span>
                </div>
                <button type="submit" class="bg-[#323334]  text-[#fff] hover:bg-[#4b4d4e] p-3"> <i class="fa-solid fa-bag-shopping"></i> ADD TO CART</button>
            </div>
        </div>
    </div>
</div>