<?php

namespace app\models;

class LayoutModel
{
    public static function renderCatsList()
    {
        $catsObj = new Categories();
        $categories = $catsObj->getCatsWithoutParent();
        $li = "";
        foreach ($categories as $category)
        {
            $li .= "<li class='list-group-item list-group-item-action'>".$category['name']."</li>\n";
        }
        $list = "\n<ul class='list-group'>\n". $li ."</ul>\n";
        echo $list;
    }

    public static function renderBanners()
    {
        $bannerObj = new Banners();
        $banners = $bannerObj->getBanners();
        $div = "";
        foreach ($banners as $banner)
        {
            $div .= "<div><a href='".$banner['alias']."'><img src='banners/".$banner['img']."' alt='".$banner['name']."'></a></div>\n";
        }
        $block = "<div class='banners'>". $div ."</div>";
        echo $block;
    }

    public static function renderHeaderText()
    {
        $headObj = new Headers();
        $header = $headObj->getHeaderText();
        $div = "<div class='header_content text-center'><p>". $header['content'] ."</p></div>";
        echo $div;
    }

    public static function renderFooterText()
    {
        $footObj = new Headers();
        $footer = $footObj->getFooterText();
        $div = "<div class='footer_content text-center'><p>". $footer['content'] ."</p></div>";
        echo $div;
    }
}