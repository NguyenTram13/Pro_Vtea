<div class="container mx-auto">

    <h1 class="text-center py-3 text-[3rem]">Thêm slider</h1>
    <?php

    if (isset($data['thongbao']) && $data['thongbao'] != "") {
        echo  '<div class="text-center alert alert-success">' . $data['thongbao'] . '</div>';
        unset($data['thongbao']);
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3 row">
            <label for="" class="col-sm-12 col-form-label">Caption</label>
            <div class="col-sm-12">
                <input type="text" required name="caption" class="border-1 w-full outline-[#98cb50] px-2 py-2 rounded" id="caption" placeholder="Nhập vào caption">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-sm-12 col-form-label">Img</label>
            <div class="col-sm-12">
                <input type="file" name="img" class="border-1 w-full outline-[#98cb50] px-2 py-2 rounded" id="img">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-sm-12 col-form-label">Title</label>
            <div class="col-sm-12">
                <input type="text" required name="title" class="border-1 w-full outline-[#98cb50] px-2 py-2 rounded" id="title" placeholder="Nhập vào title">
            </div>
        </div>
        <input type="hidden" name="slider">
        <button type="submit" class="btn  px-4 py-2 text-[#98cb50] hover:text-[#fff] border-1 border-[#98cb50] rounded  hover:bg-[#98cb50]" name="addSlider">Add</button>
    </form>
</div>