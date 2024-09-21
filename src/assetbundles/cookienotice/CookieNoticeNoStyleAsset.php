<?php

namespace voorjans\cookienotice\assetbundles\cookienotice;

use craft\web\AssetBundle;

class CookieNoticeNoStyleAsset extends AssetBundle
{
    public function init()
    {
        $this->sourcePath = "@voorjans/cookienotice/assetbundles/cookienotice/dist";
        $this->js = ['js/cookienotice.js'];

        parent::init();
    }
}