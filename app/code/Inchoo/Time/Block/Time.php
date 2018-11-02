<?php
namespace Inchoo\Time\Block;

class Time extends \Magento\Framework\View\Element\Template
{
    public function getHelloWorldTxt()
    {
        return date('l jS \of F Y h:i:s A');
    }
}
