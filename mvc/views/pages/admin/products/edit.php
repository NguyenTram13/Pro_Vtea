<div class="container mx-auto">

  <h1 class="py-3 text-center text-[3rem]">Sửa sản phẩm</h1>
  <?php

  if (isset($data['thongbao']) && $data['thongbao'] != "") {
    echo  '<div class="text-center alert alert-success">' . $data['thongbao'] . '</div>';
    unset($data['thongbao']);
  }
  ?>
  <form action="" method="post" enctype="multipart/form-data">

    <div class="mb-3 row">
      <label for="name" class="col-sm-12 col-form-label">Danh mục</label>

      <select class="hover:border-[#98cb50] focus:outline-[#98cb50] px-2 py-2 rounded" name="cate" aria-label="Default select example">
        <?php
        $select = '';
        foreach ($data['Cates'] as $item) {
          if ($item['id'] === $data['pros']['idCate']) {
            $select = 'selected';
          } else {
            $select = '';
          }

          echo '<option ' . $select . ' value="' . $item['id'] . '">' . $item['name'] . '</option> ';
        }

        ?>


      </select>
    </div>
    <div class="mb-3 row">
      <label for="name" class="col-sm-12 col-form-label">Name</label>
      <div class="col-sm-12">
        <input type="text" name="name" class="border-1 w-full outline-[#98cb50] px-2 py-2 rounded" id="name" placeholder="Nhập vào tên sản phẩm" value="<?php echo $data['pros']['name'] ?>">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="img" class="col-sm-12 col-form-label">Img</label>
      <div class="col-sm-12">
        <input type="file" name="img" class="border-1 w-full outline-[#98cb50] px-2 py-2 rounded" id="img">
      </div>
      <img src="<?php echo _PATH_UPLOAD_PRODUCT . $data['pros']['img'] ?>" class="mt-3 border" style="object-fit:cover;width:200px" alt="">
    </div>
    <div class="mb-3 row">
      <label for="" class="col-sm-12 col-form-label">Image Detail</label>
      <div class="col-sm-12">
        <input type="file" name="image_detail[]" multiple class="border-1 w-full outline-[#98cb50] px-2 py-2 rounded" id="img">
      </div>
      <div class="gap-3 d-flex">
        <?php
        foreach ($data['imgDetail'] as $item) {
          echo '
        
        <img src="' . _PATH_UPLOAD_PRODUCT . $item["path_img"] . '" class="mt-3 border " style="object-fit:cover;width:200px" alt="">
        ';
        }
        ?>

      </div>

    </div>
    <div class="mb-3 row">
      <label for="" class="col-sm-12 col-form-label">Price</label>
      <div class="col-sm-12">
        <input type="text" name="price" class="border-1 w-full outline-[#98cb50] px-2 py-2 rounded" id="price" placeholder="Nhập giá sản phẩm" value="<?php echo $data['pros']['price'] ?>">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="" class="col-sm-12 col-form-label">Describes</label>
      <div class="col-sm-12">
        <textarea class="border-1 w-full outline-[#98cb50] px-2 py-2 rounded" name="describes" id="describes" cols="30" rows="5" placeholder="Nhập mô tả sản phẩm">
        <?php echo $data['pros']['describes'] ?>
        </textarea>
        <!-- <input type=" text"  name="describes" class="border-1 w-full outline-[#98cb50] px-2 py-2 rounded" id="describes"> -->
      </div>
    </div>

    <input type="hidden" name="pros">
    <button type="submit" class="btn  px-4 py-2 text-[#98cb50] hover:text-[#fff] border-1 border-[#98cb50] rounded  hover:bg-[#98cb50]" name="updatePros">Update</button>
  </form>
</div>