<?php
class Detail extends Controller
{
    private $setting;
    private $menu;
    private $slider;
    private $product;
    private $cate;
    private $user;
    private $comment;




    public function __construct()
    {
        $this->setting = $this->model("SettingModel");
        $this->menu = $this->model("MenuModel");
        $this->slider = $this->model("SliderModel");
        $this->product = $this->model("ProductModel");
        $this->cate = $this->model("CategoryModel");
        $this->user = $this->model("UserModel");
        $this->comment = $this->model("CommentModel");
    }
    public function index($id)
    {
        $settings = $this->setting->getSetting("");
        $menus = $this->menu->getMenu("");
        $sliders = $this->slider->getSlider("");
        $product = $this->product->getone_Pros($id);
        $product_sam = $this->product->getCatePros($id, $product['idCate']);
        $imageDetail = $this->product->getImageDetail($id);
        $cate = $this->cate->getone_Cate($product['idCate']);
        $allcomment = $this->comment->getComment($id);
        $dataCmt = [];
        $dataPhanTram = [];
        $start = 0;
        foreach ($allcomment as $item) {
            $item['avt'] = $this->user->getone_UserID($item['user_id'])['avt'];
            $item['name'] = $this->user->getone_UserID($item['user_id'])['fullname'];
            $start += (int)$item['rating'];
            array_push($dataCmt, $item);
            if ((int)$item['rating'] == 1) {
                $dataPhanTram[1][] = $item;
            }
            if ((int)$item['rating'] == 2) {
                $dataPhanTram[2][] = $item;
            }
            if ((int)$item['rating'] == 3) {
                $dataPhanTram[3][] = $item;
            }
            if ((int)$item['rating'] == 4) {
                $dataPhanTram[4][] = $item;
            }
            if ((int)$item['rating'] == 5) {
                $dataPhanTram[5][] = $item;
            }
        }
        $arrayNew = [];
        foreach ($dataPhanTram as $key => $item) {
            $arrayNew[$key] = (count($item) / count($allcomment)) * 100;
        }
        $phantram = 0;
        if (count($allcomment) > 0) {

            $phantram = $start / count($allcomment);
        }
        return $this->view('client', [
            'page' => 'Detail',
            'css' => [
                'home',
                'about',
            ],
            'js' => [
                'main',
                'ajax',
                'detail',
                'comment'
            ],
            "settings" => $settings,
            "menus" => $menus,
            "sliders" => $sliders,
            "product" => $product,
            'product_sam' => $product_sam,
            'images' => $imageDetail,
            'cate' => $cate,
            'dataCmt' => $dataCmt,
            'arrayNew' => $arrayNew,
            'phantram' => $phantram,
            'count_comment' => count($allcomment)
        ]);
    }
    public function add_comment($id)
    {
        $rate = $_POST['rate'];
        $comment = $_POST['comment'];
        $iduser = $_POST['iduser'];
        $idpro = $_POST['idpro'];
        $date = date('Y-m-d H:i:s');
        if ($rate > 0) {
            $this->comment->create($idpro, $iduser, $comment, $rate, $date);
            $allcomment = $this->comment->getComment($idpro);
            $dataCmt = [];
            foreach ($allcomment as $item) {
                $item['avt'] = $this->user->getone_UserID($item['user_id'])['avt'];
                $item['name'] = $this->user->getone_UserID($item['user_id'])['fullname'];
                array_push($dataCmt, $item);
            }
            print_r(json_encode($dataCmt));
        }
    }
}
