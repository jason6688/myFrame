<?php
/**
 * smarty模板引擎配置
 * User: shiyayun
 */
return [
    'TEMPLATE_DIR' => APP.'/view/',
    'COMPILE_DIR' => BASE.'/cache/smarty/templates_c/',
    'CACHE_DIR' => BASE.'/cache/smarty/smarty_cache/',
    'LEFT_DELIMITER' => '<{',
    'RIGHT_DELIMITER' => '}>',
];