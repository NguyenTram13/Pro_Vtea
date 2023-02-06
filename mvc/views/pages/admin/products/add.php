<div class="container mx-auto">

  <h1 class="text-center text-[3rem] py-3">Thêm sản phẩm</h1>
  <?php

  if (isset($data['thongbao']) && $data['thongbao'] != "") {
    echo  '<div class="text-center alert alert-success">' . $data['thongbao'] . '</div>';
    unset($data['thongbao']);
  }
  ?>
  <form action="" method="post" enctype="multipart/form-data">

    <div class="mb-3 row">
      <label for="name" class="col-sm-12 col-form-label">Danh mục</label>

      <select class="hover:border-[#98cb50] focus:outline-[#98cb50] px-2 py-2 rounded" name="cate">
        <option class="" selected>Chọn danh mục </option>
        <?php
        foreach ($data['Cates'] as $item) {

          echo '<option class="!hover:bg-[#98cb50] " value="' . $item['id'] . '">' . $item['name'] . '</option> ';
        }

        ?>


      </select>
    </div>
    <div class="mb-3 row">
      <label for="name" class="col-sm-12 col-form-label">Name</label>
      <div class="col-sm-12">
        <input type="text" required name="name" class="border-1 w-full outline-[#98cb50] px-2 py-2 rounded" id="name" placeholder="Nhập vào tên sản phẩm">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="img" class="col-sm-12 col-form-label">Img</label>
      <div class="col-sm-12">
        <input type="file" required name="img" class="border-1 w-full outline-[#98cb50] px-2 py-2 rounded" id="img">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="" class="col-sm-12 col-form-label">Image Detail</label>
      <div class="col-sm-12">
        <input type="file" required name="image_detail[]" multiple class="border-1 w-full outline-[#98cb50] px-2 py-2 rounded" id="img">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="" class="col-sm-12 col-form-label">Price</label>
      <div class="col-sm-12">
        <input type="text" required name="price" class="border-1 w-full outline-[#98cb50] px-2 py-2 rounded" id="price" placeholder="Nhập giá sản phẩm">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="" class="col-sm-12 col-form-label">Describes</label>
      <div class="col-sm-12">
        <textarea class="border-1 w-full outline-[#98cb50] px-2 py-2 rounded" name="describes" id="describes" cols="30" rows="5" placeholder="Nhập mô tả sản phẩm"></textarea>
        <!-- <input type="text" required name="describes" class="border-1 w-full outline-[#98cb50] px-2 py-2 rounded" id="describes"> -->
      </div>
    </div>

    <input type="hidden" name="pros">
    <button type="submit" class="btn  px-4 py-2 text-[#98cb50] hover:text-[#fff] border-1 border-[#98cb50] rounded  hover:bg-[#98cb50]" name="addPros">Add</button>
  </form>
</div>