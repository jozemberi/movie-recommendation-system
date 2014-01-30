<?php /* Smarty version Smarty-3.1.13, created on 2014-01-15 14:54:07
         compiled from ".\templates\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1613652d46ce636b551-51168613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1be7ff7fdee636597edd726ee98dfef4bfd55d1f' => 
    array (
      0 => '.\\templates\\footer.tpl',
      1 => 1389797556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1613652d46ce636b551-51168613',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52d46ce6374844_65039808',
  'variables' => 
  array (
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d46ce6374844_65039808')) {function content_52d46ce6374844_65039808($_smarty_tpl) {?>
<div id="page-footer-box">
    <div id="footer-content-box">
        <div id="footer-content-box-left">
            <?php $_smarty_tpl->tpl_vars["putDots"] = new Smarty_variable(7, null, 0);?> <?php $_smarty_tpl->tpl_vars["border"] = new Smarty_variable(6, null, 0);?> 
            <?php $_smarty_tpl->tpl_vars["curPage"] = new Smarty_variable($_smarty_tpl->tpl_vars['pagination']->value['curPage'], null, 0);?> 
            <?php $_smarty_tpl->tpl_vars["url"] = new Smarty_variable($_smarty_tpl->tpl_vars['pagination']->value['url'], null, 0);?> 
            <?php $_smarty_tpl->tpl_vars["totalPages"] = new Smarty_variable($_smarty_tpl->tpl_vars['pagination']->value['totalPages'], null, 0);?> 
            <p>

                <?php echo $_smarty_tpl->getSubTemplate ('paginate.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </p>
        </div>
        <div id="footer-lang-box">
            <p style="text-align: center;">Copyright &copy; 2013 <a href="http://google.com">Josip Žemberi</a> Jezik: <a href="http://google.com">Hrvatski | Engleski</a></p>
        </div> 
    </div>

</div>

<?php }} ?>