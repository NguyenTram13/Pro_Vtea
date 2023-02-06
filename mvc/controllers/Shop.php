<?php
class Shop extends Controller
{
    private $category;
    private $setting;
    private $menu;
    private $slider;
    private $product;


    public function __construct()
    {
        $this->setting = $this->model("SettingModel");
        $this->menu = $this->model("MenuModel");
        $this->slider = $this->model("SliderModel");
        $this->category = $this->model("CategoryModel");
        $this->product = $this->model("ProductModel");
        $this->comment = $this->model("CommentModel");
    }
    public function index()
    {


        $cates = $this->category->getCateGroup("");
        $settings = $this->setting->getSetting("");
        $menus = $this->menu->getMenu("");
        $sliders = $this->slider->getSlider("");
        $products = $this->product->getPros("");

        $arrayNew = [];

        foreach ($products as $item) {
            $comments = $this->comment->getComment($item['id']);
            $avg = 0;
            foreach ($comments as $comment) {
                $avg += (int)$comment['rating'];
            }
            if (count($comments) > 0) {

                $item['caculate_start'] = number_format($avg / count($comments), 1);
            } else {
                $item['caculate_start'] = 0;
            }
            array_push($arrayNew, $item);
        }
        $products = $arrayNew;

        return $this->view('client', [
            'page' => 'shop',
            'page_active' => 'shop',

            'css' => [
                'home',
                'shop',
                'about',
            ],
            'js' => [
                'main',
                'ajax',
                'sliderPrice',
                'comment',
                'product',
            ],
            "settings" => $settings,
            "menus" => $menus,
            "sliders" => $sliders,
            "cates" => $cates,
            "products" => $products,
        ]);
    }
}
