<div class="container mx-auto">

    <h1 class="text-center text-[3rem] py-3">Sửa danh mục</h1>
    <?php
    
    if (isset($data['thongbao']) && $data['thongbao'] != "") {
        echo  '<div class="text-center alert alert-success">' . $data['thongbao'] . '</div>';
        unset($data['thongbao']);
    }
    ?>
<form action="" method="post"  >
  <div class="mb-3 row">
    <label for="inputEmail3" class="col-sm-12 col-form-label">Name</label>
    <div class="col-sm-12">
      <input type="text" required name="name" class="border-1 w-full outline-[#98cb50] px-2 py-2 rounded" id="name" value="<?php echo $data['cate']['name']?>">
    </div>
  </div>
  
  <button type="submit" class="btn  px-4 py-2 text-[#98cb50] hover:text-[#fff] border-1 border-[#98cb50] rounded  hover:bg-[#98cb50]" name="Update">Update</button>
</form>
</div>