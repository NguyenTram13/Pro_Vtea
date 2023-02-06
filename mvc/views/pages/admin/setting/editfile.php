<div class="container mx-auto">

    <h1 class="text-center py-3 text-[3rem]">Sửa Setting</h1>
    <?php

    if (isset($data['thongbao']) && $data['thongbao'] != "") {
        echo  '<div class="text-center alert alert-success">' . $data['thongbao'] . '</div>';
        unset($data['thongbao']);
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3 row">
            <label for="" class="col-sm-12 col-form-label">Config Key</label>
            <div class="col-sm-12">
                <input type="text" required name="config_key" class="border-1 w-full outline-[#98cb50] px-2 py-2 rounded" id="config_key" value="<?php echo $data['setting']['config_key'] ?>">
            </div>
        </div>
        <div class="mb-3  row">
            <label for="" class="col-sm-12 col-form-label">Config value</label>
            <div class="col-sm-12">
                <input type="file" name="config_value" class="border-1 w-full outline-[#98cb50] px-2 py-2 rounded" id="config_value">
            </div>
            <img src="<?php echo _PATH_UPLOAD_SETTING . $data['setting']['config_value'] ?>" class="mt-3 " style="object-fit:cover;width:200px" alt="">

        </div>
        <button type=" submit" class="btn  px-4 py-2 text-[#98cb50] hover:text-[#fff] border-1 border-[#98cb50] rounded  hover:bg-[#98cb50]" name="updateSetting">Update</button>
    </form>
</div>