<div class="container mx-auto">

    <h1 class="text-center py-3 text-[3rem]">Thêm người dùng </h1>
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

                    <select class="form-select" name="grps" aria-label="Default select example">
                        <option selected>Chọn danh mục </option>
                        <?php
                        foreach ($data['Grps'] as $item) {

                            echo '<option value="' . $item['id'] . '">' . $item['name'] . '</option> ';
                        }

                        ?>


                    </select>
                </div>
            </div>

            <div class="col-6">

                <div class="mb-3 row">
                    <label for="name" class="col-sm-12 col-form-label">Name</label>
                    <div class="col-sm-12">
                        <input type="text" name="name" class="border-1 w-full outline-[#98cb50] px-2 py-2 rounded" id="name" placeholder="Nhập vào tên người dùng">
                    </div>
                </div>
            </div>

            <div class="col-6">

                <div class="mb-3 row">
                    <label for="img" class="col-sm-12 col-form-label">Avt</label>
                    <div class="col-sm-12">
                        <input type="file" name="avt" class="border-1 w-full outline-[#98cb50] px-2 py-2 rounded" id="avt">
                    </div>
                </div>
            </div>

            <div class="col-6">

                <div class="mb-3 row">
                    <label for="" class="col-sm-12 col-form-label">Email</label>
                    <div class="col-sm-12">
                        <input type="email" name="email" multiple class="border-1 w-full outline-[#98cb50] px-2 py-2 rounded" id="email">
                    </div>
                </div>
            </div>



            <div class="col-6">

                <div class="mb-3 row">
                    <label for="" class="col-sm-12 col-form-label">Password</label>
                    <div class="col-sm-12">
                        <input type="password" name="password" multiple class="border-1 w-full outline-[#98cb50] px-2 py-2 rounded" id="password" placeholder="Nhập mật khẩu">
                    </div>
                </div>
            </div>

            <div class="col-6">

                <div class="mb-3 row">
                    <label for="" class="col-sm-12 col-form-label">Confirm password</label>
                    <div class="col-sm-12">
                        <input type="password" name="cf-password" class="border-1 w-full outline-[#98cb50] px-2 py-2 rounded" id="cf-password" placeholder="Nhập lại mật khẩu">
                    </div>
                </div>
            </div>
            <div class="col-6">

                <div class="mb-3 row">
                    <label for="" class="col-sm-12 col-form-label">Address</label>
                    <div class="col-sm-12">
                        <input type="text" name="address" class="border-1 w-full outline-[#98cb50] px-2 py-2 rounded" id="address" placeholder="Nhập địa chỉ">
                    </div>
                </div>
            </div>
            <div class="col-6">

                <div class="mb-3 row">
                    <label for="" class="col-sm-12 col-form-label">Tel</label>
                    <div class="col-sm-12">
                        <input type="text" name="tel" class="border-1 w-full outline-[#98cb50] px-2 py-2 rounded" id="tel" placeholder="Nhập số điện thoại">
                    </div>
                </div>
            </div>

        </div>

        <input type="hidden" name="users">
        <button type="submit" class="btn  px-4 py-2 text-[#98cb50] hover:text-[#fff] border-1 border-[#98cb50] rounded  hover:bg-[#98cb50]" name="addUsers">Add</button>
    </form>
</div>