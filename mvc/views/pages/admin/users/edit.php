<div class="container mx-auto">

    <h1 class="text-center py-3 text-[3rem]">Sửa người dùng </h1>
    <?php

    if (isset($data['thongbao']) && $data['thongbao'] != "") {
        echo  '<div class="text-center alert alert-success">' . $data['thongbao'] . '</div>';
        unset($data['thongbao']);
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-6">

                <div class="mb-3 row">
                    <label for="name" class="col-sm-12 col-form-label">Nhóm người dùng</label>

                    <select class="border-1 w-full focus:outline-[#98cb50] outline-[#98cb50] px-2 py-2 rounded" name="groups" aria-label="Default select example">
                        <?php
                        $select = '';
                        foreach ($data['Grps'] as $item) {
                            if ($item['id'] === $data['users']['idGroups']) {
                                $select = 'selected';
                            } else {
                                $select = '';
                            }

                            echo '<option ' . $select . ' value="' . $item['id'] . '">' . $item['name'] . '</option> ';
                        }

                        ?>


                    </select>
                </div>
            </div>

            <div class="col-6">

                <div class="mb-3 row">
                    <label for="name" class="col-sm-12 col-form-label">Name</label>
                    <div class="col-sm-12">
                        <input type="text" name="name" class="border-1 w-full outline-[#98cb50] px-2 py-2 rounded" id="name" placeholder="Nhập vào tên người dùng" value="<?php echo $data['users']['fullname'] ?>">
                    </div>
                </div>
            </div>

            <div class=" col-6">

                <div class="mb-3 row">
                    <label for="img" class="col-sm-12 col-form-label">Avt</label>
                    <div class="col-sm-12">
                        <input type="file" name="avt" class="border-1 w-full outline-[#98cb50] px-2 py-2 rounded" id="avt">
                    </div>
                    <?php
                    if (!empty($data['users']['avt'])) {
                        echo '
                            <img src=" ' . _PATH_UPLOAD_AVT . '' . $data['users']['avt'] . ' " class="mt-3 " style="object-fit:cover;width:100px" alt=""/>
                            ';
                    } else {
                        echo '
                            <img src="  ' . _PATH_UPLOAD_AVT . '/avt.jpg " class="mt-3 " style="object-fit:cover;width:100px;" alt=""/>
                            ';
                    }

                    ?>

                </div>
            </div>

            <div class="col-6">

                <div class="mb-3 row">
                    <label for="" class="col-sm-12 col-form-label">Email</label>
                    <div class="col-sm-12">
                        <input type="email" name="email" multiple class="border-1 w-full outline-[#98cb50] px-2 py-2 rounded" id="email" value="<?php echo $data['users']['email'] ?>" placeholder="Nhập vào email">
                    </div>
                </div>
            </div>



            <div class="col-6">

                <div class="mb-3 row">
                    <label for="" class="col-sm-12 col-form-label">Password</label>
                    <div class="col-sm-12">
                        <input type="password" name="password" multiple class="border-1 w-full outline-[#98cb50] px-2 py-2 rounded" id="password" placeholder="Nhập mật khẩu mới">
                    </div>
                </div>
            </div>

            <div class="col-6">

                <div class="mb-3 row">
                    <label for="" class="col-sm-12 col-form-label">Confirm password</label>
                    <div class="col-sm-12">
                        <input type="password" name="cf-password" class="border-1 w-full outline-[#98cb50] px-2 py-2 rounded" id="cf-password" placeholder="Nhập lại mật khẩu mới">
                    </div>
                </div>
            </div>
            <div class="col-6">

                <div class="mb-3 row">
                    <label for="" class="col-sm-12 col-form-label">Address</label>
                    <div class="col-sm-12">
                        <input type="text" name="address" class="border-1 w-full outline-[#98cb50] px-2 py-2 rounded" id="address" placeholder="Nhập địa chỉ" value="<?php echo $data['users']['address'] ?>">
                    </div>
                </div>
            </div>
            <div class="col-6">

                <div class="mb-3 row">
                    <label for="" class="col-sm-12 col-form-label">Tel</label>
                    <div class="col-sm-12">
                        <input type="text" name="tel" class="border-1 w-full outline-[#98cb50] px-2 py-2 rounded" id="tel" placeholder="Nhập số điện thoại" value="<?php echo $data['users']['tel'] ?>">
                    </div>
                </div>
            </div>

        </div>

        <input type="hidden" name="users">
        <button type="submit" class="btn px-4 py-2 text-[#98cb50] hover:text-[#fff] border-1 border-[#98cb50] rounded  hover:bg-[#98cb50]" name="updateUsers">update</button>
    </form>
</div>