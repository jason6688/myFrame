<?php
/* Smarty version 3.1.31, created on 2017-02-16 02:21:24
  from "F:\phpStudy\WWW\myFrame\app\view\Index\bootstrapt.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58a50ca47a2e77_35155001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e3026e5d769ccf0ede7e1e8e15253bd3e0daa2a' => 
    array (
      0 => 'F:\\phpStudy\\WWW\\myFrame\\app\\view\\Index\\bootstrapt.html',
      1 => 1487211679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a50ca47a2e77_35155001 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'F:\\phpStudy\\WWW\\myFrame\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bootstrapt测试</title>
    <!-- 引入 Bootstrap -->
    <link href="../../../public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="../../../public/js/jquery-1.8.0.min.js"><?php echo '</script'; ?>
>
    <!-- 包括所有已编译的插件 -->
    <?php echo '<script'; ?>
 src="../../../public/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body>
    <h1>bootstrapt测试</h1>
<?php echo $_smarty_tpl->tpl_vars['name']->value;
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time']->value,"%Y-%m-%d");?>


<button type="button" class="btn">Bootstrap测试按钮</button>

<?php echo '<script'; ?>
>
/*    if(typeof jQuery !='undefined'){
        alert("jQuery library is loaded!");
    }else{
        alert("jQuery library is not found!");
    }
    if (jQuery){
        alert('jQuery已加载');
    }*/
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
