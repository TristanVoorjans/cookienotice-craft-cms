<?php

namespace voorjans\cookienotice\assetbundles\cookienotice;

use craft\web\AssetBundle;

class CookieNoticeAsset extends AssetBundle
{
    public function init()
    {
        $this->sourcePath = "@voorjans/cookienotice/assetbundles/cookienotice/dist";
        $this->js = ['js/cookienotice.js'];
        $this->css = ['css/cookienotice.css'];

        parent::init();
    }
}