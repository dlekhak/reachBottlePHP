<?php
if(file_exists($config['MODELS'].$controller.$config['EXT_PHP'])){
    include $config['MODELS'].$controller.$config['EXT_PHP'];
}

if(file_exists($config['VIEWS'].$controller.$config['EXT_PHTML'])){
    include $config['VIEWS'].$controller.$config['EXT_PHTML'];
}