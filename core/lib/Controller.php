<?php
/**
 * Controller基类
 * User: shiyayun
 */
namespace core\lib;

use core\lib\Conf;

class Controller extends \core\Core
{
    public $assign;
    public function assign($name,$value){
        $this->assign[$name] = $value;
    }

    public function display($file = '')
    {
        /*$file = ucfirst($file);//控制器名首字母转大写
        $file = APP.'/view/'.$file;
        if (is_file($file)){
            extract($this->assign);//将数组转换成变量和值的形式
            include $file;
        }*/
        try{
            //引入twig模板引擎
            //$file = ucfirst($file);//控制器名首字母转大写

            $fileArr = array_filter(explode('/', $file));

            $requestUriArr = array_filter(explode('/', ucfirst(trim($_SERVER['REQUEST_URI'], '/'))));
            //p($requestUriArr);
            if (count($requestUriArr) >= 2) {
                $requestUriArr = $requestUriArr;
            } elseif (count($requestUriArr) >= 1){
                $requestUriArr[1] = 'index';
            }else{
                $requestUriArr[0] = 'Index';
                $requestUriArr[1] = 'index';
            }

            if (count($fileArr) >= 2){
                $fileDir = $fileArr[0]?ucfirst($fileArr[0]):'Index';
                $fileHtml = $fileArr[1]?$fileArr[1]:'index.html';
            }elseif(count($fileArr) >= 1){
                $fileDir = $requestUriArr[0]?$requestUriArr[0]:'Index';
                $fileHtml = $fileArr[0]?$fileArr[0]:'index.html';
            }else{
                $fileDir = $requestUriArr[0]?$requestUriArr[0]:'Index';
                $fileHtml = $requestUriArr[1]?$requestUriArr[1].'.html':'index.html';
            }

            //$file = APP.'/view/'.$file;
            $file = APP.'/view/'.$fileDir.'/'.$fileHtml;

            if (is_file($file)){
                /*if ($this->assign){
                    extract($this->assign);//将数组转换成变量和值的形式
                }
                include $file;*/

                //引入smarty模板引擎开始
                $smarty = new \Smarty();
                $smarty->setTemplateDir(Conf::get('TEMPLATE_DIR','smarty') ? Conf::get('TEMPLATE_DIR','smarty').$fileDir : APP.'/view/'.$fileDir.'/');
                $smarty->setCompileDir(Conf::get('COMPILE_DIR','smarty') ? Conf::get('COMPILE_DIR','smarty') : BASE.'/cache/smarty/templates_c/');
                $smarty->setCacheDir(Conf::get('CACHE_DIR','smarty') ? Conf::get('CACHE_DIR','smarty') : BASE.'/cache/smarty/smarty_cache/');
                $smarty->left_delimiter = Conf::get('LEFT_DELIMITER','smarty') ? Conf::get('LEFT_DELIMITER','smarty') : "{";
                $smarty->right_delimiter = Conf::get('RIGHT_DELIMITER','smarty') ? Conf::get('RIGHT_DELIMITER','smarty') : "}";
                if (DEBUG) {
                    //$smarty->debugging      = true;
                    $smarty->caching        = false;
                    $smarty->cache_lifetime = 0;
                } else {
                    //$smarty->debugging      = false;
                    $smarty->caching        = true;
                    $smarty->cache_lifetime = 120;
                }

                $smarty->assign($this->assign?$this->assign:'');
                $smarty->display($fileHtml);
                //引入smarty模板引擎结束

               /* $loader = new \Twig_Loader_Filesystem(APP.'/view/'.$fileDir);
                $twig = new \Twig_Environment($loader, array(
                    'cache' => BASE.'/cache/twig',
                    'debug' => DEBUG,
                ));

                $template = $twig->load($fileHtml);
                $template->display($this->assign?$this->assign:'');*/
            }else{
                throw new \Exception("File not exist:".$file);
            }
        }catch (\Exception $e){
            p($e->getMessage());
        }

    }
}