<?php


class Products extends Controller
{
    private $products;
    private $cates;

    function __construct()
    {
        $this->products = $this->model('ProductModel');
        $this->cates = $this->model('CategoryModel');
    }
    function list()
    {
        $kyw = "";
        $cate = 0;

        if (isset($_POST['kyw']) && $_POST['kyw'] != "") {
            $kyw = $_POST['kyw'];
        }
        if (isset($_POST['cate']) && $_POST['cate'] != "") {
            $cate = $_POST['cate'];
        }
        $pros = $this->products->getPros($kyw, $cate);
        $listCate = $this->cates->getCate("");

        return $this->view(
            'admin',
            [
                'page' => 'products/list',
                'pros' => $pros,
                'Cates' => $listCate,
                'idCateSelected' => $cate,
                'page_active' => 'product'


            ]
        );
    }

    function add()
    {

        if (isset($_POST['name']) && $_POST['name'] != "") {
            $name = $_POST['name'];
            $cate = $_POST['cate'];

            $price = $_POST['price'];
            $describes = $_POST['describes'];
            $date = date('Y-m-d H:i:s');

            $img = $_FILES['img']['name'];
            $detaiImg = $_FILES['image_detail'];
            for ($i = 0; $i < count($detaiImg['name']); $i++) {
                $target_file = _UPLOAD . '/product/' .  basename($_FILES['image_detail']['name'][$i]);
                if (move_uploaded_file($_FILES['image_detail']['tmp_name'][$i], $target_file)) {
                } else {
                }
            }
            $target_file = _UPLOAD . '/product/' .  basename($_FILES['img']['name']);
            if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
            } else {
            }

            $idProduct = $this->products->addPros($name, $img, $price, $describes, $date, $cate);
            foreach ($_FILES['image_detail']['name'] as $name) {

                $this->products->addImageProduct($idProduct, $name, $date);
            }
            if ($idProduct) {
                $thongbao = "Th??m s???n ph???m th??nh c??ng";
            } else {
                $thongbao = "Th??m s???n ph???m th???t b???i";
            }
            $listCate = $this->cates->getCate("");

            return $this->view(
                'admin',
                [
                    'page' => 'products/add',

                    'thongbao' => $thongbao,
                    'Cates' => $listCate,
                    'page_active' => 'product'


                ]
            );
        } else {
            $listCate = $this->cates->getCate("");

            return $this->view(
                'admin',
                [
                    'page' => 'products/add',
                    'Cates' => $listCate,
                    'page_active' => 'product'

                ]
            );
        }
    }

    function edit($id)
    {
        if (isset($_POST['name']) && $_POST['name'] != "") {
            $date = date('Y-m-d H:i:s');
            $cate = $_POST['cate'];

            $price = $_POST['price'];
            $describes = $_POST['describes'];

            $detaiImg = $_FILES['image_detail'];
            if (!empty($detaiImg['name'][0])) {

                for ($i = 0; $i < count($detaiImg['name']); $i++) {
                    $target_file = _UPLOAD . '/product/' .  basename($_FILES['image_detail']['name'][$i]);
                    if (move_uploaded_file($_FILES['image_detail']['tmp_name'][$i], $target_file)) {
                    } else {
                    }
                }


                $this->products->deleteImgPros($id);
                foreach ($_FILES['image_detail']['name'] as $name) {

                    $this->products->addImageProduct($id, $name, $date);
                }
            }
            $img = $_FILES['img']['name'];
            if (!empty($img)) {

                $target_file = _UPLOAD . '/product/' .  basename($_FILES['img']['name']);
                if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
                } else {
                }
            }
            $name = $_POST['name'];
            $edit = $this->products->editPros($id, $name, $img, $price, $describes, $date, $cate);
            if ($edit) {
                $thongbao = "S???a s???n ph???m th??nh c??ng";
            } else {
                $thongbao = "S???a s???n ph???m th???t b???i";
            }
            $onepros = $this->products->getone_Pros($id);
            $listCate = $this->cates->getCate("");
            $imgDetail = $this->products->getImgDetail($id);


            return $this->view(
                'admin',
                [
                    'page' => 'products/edit',

                    'thongbao' => $thongbao,
                    'pros' => $onepros,
                    'Cates' => $listCate,
                    'imgDetail' => $imgDetail,
                    'page_active' => 'product'

                ]
            );
        } else {
            $onepros = $this->products->getone_Pros($id);
            $imgDetail = $this->products->getImgDetail($id);
            // print_r($imgDetail);
            // die();
            $listCate = $this->cates->getCate("");

            return $this->view(
                'admin',
                [
                    'page' => 'products/edit',
                    'pros' => $onepros,
                    'Cates' => $listCate,
                    'imgDetail' => $imgDetail,
                    'page_active' => 'product'

                ]
            );
        }
    }
    function delete($id)
    {
        $listCate = $this->cates->getCate("");
        $cate = 0;
        $del = $this->products->deletePros($id);
        $delImg = $this->products->deleteImgPros($id);
        if ($del) {
            $thongbao = "X??a s???n ph???m th??nh c??ng";
        } else {
            $thongbao = "X??a s???n ph???m th???t b???i";
        }
        $pros = $this->products->getPros("");
        return $this->view(
            'admin',
            [
                'page' => 'products/list',
                'pros' => $pros,
                'thongbao' => $thongbao,
                'page_active' => 'product',
                'idCateSelected' => $cate,
                'Cates' => $listCate,


            ]
        );
    }
}
