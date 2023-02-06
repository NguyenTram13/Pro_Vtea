<!-- <a href=""></a> -->
<div class="container pt-3" data-aos="fade-right">
    <?php
    if (isset($data['thongbao']) && $data['thongbao'] != "") {
        echo  '<div class="text-center alert alert-success">' . $data['thongbao'] . '</div>';
        unset($data['thongbao']);
    }
    ?>

    <form method="POST" action="" class="form-cate form-product">
        <div class="gap-2 mb-3 d-flex">

            <input type="text" name="kyw" class=" cate-input product-input border-1 w-full outline-[#98cb50] px-2 py-2 rounded" placeholder="Search...">
            <button type="submit" class=" px-4 py-2 text-[#98cb50] hover:text-[#fff] border-1 border-[#98cb50] rounded  hover:bg-[#98cb50]">Search</button>
        </div>
    </form>
    <div class="text-center d-flex justify-content-center">

        <div class="loader"></div>
    </div>
    <?php
    if (isset($data['bill']) && $data['bill'] != "") {
    ?>
        <table class="table bg-white table-products table-invoice w-100" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
            <thead>
                <tr class="text-[20px]  bg-gray-200 text-[#000] ">
                    <th class="border-0">INFO USER</th>
                    <th class="text-center border-0" width="10%">TOTAL</th>
                    <th class="text-center border-0" width="20%">METHOR</th>
                    <th class="text-center border-0" width="10%">STATUS</th>

                    <th class="text-center border-0" width="20%">DATE</th>
                    <th class="text-center border-0" width="10%">VIEWS</th>

                </tr>
            </thead>
            <tbody>
                <?php

                foreach ($data['bill'] as $bill) {
                ?>
                    <tr class="text-[#888888] hover:bg-gray-100">
                        <td class="border-gray-300">
                            <div class="">
                                <div class="m-t-5 m-b-5">
                                    Name: <?php echo $bill['fullname'] ?><br>
                                    Email: <?php echo $bill['email'] ?><br>

                                    Address: <?php echo $bill['address'] ?><br>
                                    Phone: <?php echo $bill['tel'] ?><br>

                                </div>
                            </div>
                        </td>
                        <td class="text-center border-gray-300 text-[#7bdcb5] font-bold text-sm">$<?php echo  number_format($bill['total'], 2) ?></td>
                        <td class="text-center border-gray-300 text-[#fcb900]"><?php echo $bill['pttt'] ?></td>
                        <td class="text-center border-gray-300 text-[#8ed1fc] font-semibold">
                            <?php
                            echo   getStatus((int)$bill['status']);
                            ?>
                            <br>
                            <a class="hover:text-[#98cb50] no-underline text-[24px]" href="<?php echo _WEB_ROOT . '/bill/editStatus/' . $bill['id'] ?>">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>

                        </td>






                        <td class="text-center border-gray-300"><?php echo $bill['created_at'] ?></td>
                        <td class="text-center border-gray-300"><a href="<?php echo _WEB_ROOT . '/bill/listDetail/' . $bill['id'] ?>" class=" hover:text-[#98cb50]  text-[30px] cursor-pointer"><i class="fa-regular fa-eye"></i></a></td>

                    </tr>
            <?php

                };
            } else {
                echo '
                    <h2>Không có dữ liệu</h2>

                ';
            }

            ?>

            </tbody>

        </table>
</div>