<?php /* Smarty version Smarty-3.1.13, created on 2014-01-19 09:26:52
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1242852d969dacb5834-75328943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1390123607,
      2 => 'file',
    ),
    'b34127f79bd095f65e6a012ca91ad92cf52d6e0e' => 
    array (
      0 => '.\\templates\\3_content_box_layout.tpl',
      1 => 1390123040,
      2 => 'file',
    ),
    'ecff8edd62bc4456f3a30265ebea0944033bcac7' => 
    array (
      0 => '.\\templates\\layout.tpl',
      1 => 1389873583,
      2 => 'file',
    ),
    '872ad83c6c6dd8184c99371575313f8f5a1f8b7e' => 
    array (
      0 => '.\\templates\\page_header.tpl',
      1 => 1389697960,
      2 => 'file',
    ),
    '4f2cc78dbbb1317284ce4016510379ba4c870b96' => 
    array (
      0 => '.\\templates\\paginate.tpl',
      1 => 1389972771,
      2 => 'file',
    ),
    'd728854e0796e96d1cb3c37ffe36e9f99867e462' => 
    array (
      0 => '.\\templates\\movie_recommendations_based_on_taste.tpl',
      1 => 1390082054,
      2 => 'file',
    ),
    'c5c510da39514e7b404b58ae2cc601fec2aebc5c' => 
    array (
      0 => '.\\templates\\movie_footer.tpl',
      1 => 1390081172,
      2 => 'file',
    ),
    '1be7ff7fdee636597edd726ee98dfef4bfd55d1f' => 
    array (
      0 => '.\\templates\\footer.tpl',
      1 => 1390123248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1242852d969dacb5834-75328943',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52d969db4352c1_50236658',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d969db4352c1_50236658')) {function content_52d969db4352c1_50236658($_smarty_tpl) {?>
 <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['lang_file']->value;?>
<?php $_tmp1=ob_get_clean();?><?php  $_config = new Smarty_Internal_Config($_tmp1, $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?> 
<!DOCTYPE html>
<html>
    <head>
        <?php echo $_smarty_tpl->getSubTemplate ('html_head_tag.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </head>

    <body class='body'>
         
            <?php /*  Call merged included template "page_header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('page_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1242852d969dacb5834-75328943');
content_52db9a5c0a0185_55419849($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "page_header.tpl" */?>  
        

        <div class='content-box'>
            
    <div class='left-box'>

        <div class='left-content-box'>
            

    <?php  $_smarty_tpl->tpl_vars['movie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['movie']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['movies_info_left_box']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['movie']->key => $_smarty_tpl->tpl_vars['movie']->value){
$_smarty_tpl->tpl_vars['movie']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['movie']->key;
?>

        <article> <header> <h1> 
            <span class="movie-title">
                <a href="movie.php?id=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['movie']->value['Response'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=="False"){?> <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['movies_basic_data']->value[$_tmp2];?>
 
                    <?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['movie']->value['Title'];?>
 
                    <?php }?> </a>
            </span>
                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['movie']->value['Response'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3=="False"){?>  <?php }else{ ?>
                    <span class="movie-year">
                        (<?php echo $_smarty_tpl->tpl_vars['movie']->value['Year'];?>
)
                    </span>
                    <?php }?> </h1> </header>
                    
            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['movie']->value['Response'];?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4=="False"){?>
                 <content> <?php echo $_smarty_tpl->getConfigVariable('no_movie_info_in_db');?>

                     <a href="https://www.google.hr/search?q=<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
<?php $_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['movies_basic_data']->value[$_tmp5];?>
" target="_blank">
                         <?php echo $_smarty_tpl->getConfigVariable('search_on_google');?>
</a> <br> <?php echo $_smarty_tpl->getConfigVariable('open_anyway');?>
 
                     <a href="movie.php?id=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('more');?>
.</a>
                 </content>
             <?php }else{ ?>    
                <footer>
                    <p class="movie-time"><?php echo $_smarty_tpl->tpl_vars['movie']->value['Runtime'];?>
 <?php echo $_smarty_tpl->getConfigVariable('separator');?>
 <?php echo $_smarty_tpl->tpl_vars['movie']->value['Genre'];?>
 <?php echo $_smarty_tpl->getConfigVariable('separator');?>
 
                        <span class="movie-rating"> <?php echo $_smarty_tpl->tpl_vars['movie']->value['imdbRating'];?>
 </span></p>
                </footer>
                <p>
                    <?php echo $_smarty_tpl->tpl_vars['movie']->value['Plot'];?>
 <a href="movie.php?id=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('more');?>
</a>
                </p>
             <?php }?>
         </article>
            <hr>
        <?php } ?> 
    
        </div>

    </div>

    
    <div class='right-box'>
        <div class='right-content-box'>	
            
    <h1><?php echo $_smarty_tpl->getConfigVariable('recommendations');?>
</h1>
    <hr>
    <?php $_smarty_tpl->tpl_vars["putDots"] = new Smarty_variable(4, null, 0);?> <?php $_smarty_tpl->tpl_vars["border"] = new Smarty_variable(2, null, 0);?> 
    <?php $_smarty_tpl->tpl_vars["curPage"] = new Smarty_variable($_smarty_tpl->tpl_vars['r_pagination']->value['curPage'], null, 0);?> 
    <?php $_smarty_tpl->tpl_vars["url"] = new Smarty_variable($_smarty_tpl->tpl_vars['r_pagination']->value['url'], null, 0);?> 
    <?php $_smarty_tpl->tpl_vars["totalPages"] = new Smarty_variable($_smarty_tpl->tpl_vars['r_pagination']->value['totalPages'], null, 0);?> 

    <?php /*  Call merged included template "paginate.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('paginate.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1242852d969dacb5834-75328943');
content_52db9a5c1f5758_96071942($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "paginate.tpl" */?>

    <?php /*  Call merged included template "movie_recommendations_based_on_taste.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('movie_recommendations_based_on_taste.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1242852d969dacb5834-75328943');
content_52db9a5c41fd93_01143351($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "movie_recommendations_based_on_taste.tpl" */?>

    <?php /*  Call merged included template "paginate.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('paginate.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1242852d969dacb5834-75328943');
content_52db9a5c1f5758_96071942($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "paginate.tpl" */?>

    <hr>


        </div>	
    </div>

    <div class='center-box'>

        <div class='center-content-box'>	
            
        <?php  $_smarty_tpl->tpl_vars['movie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['movie']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['movies_info_center_box']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['movie']->key => $_smarty_tpl->tpl_vars['movie']->value){
$_smarty_tpl->tpl_vars['movie']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['movie']->key;
?>

            <article> <header> <h1> <span class="movie-title">
                <a href="movie.php?id=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['movie']->value['Response'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=="False"){?> <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['movies_basic_data']->value[$_tmp2];?>
 
                    <?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['movie']->value['Title'];?>
 
                    <?php }?> </a></span>
                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['movie']->value['Response'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3=="False"){?>   
                        <?php }else{ ?>
                    <span class="movie-year">
                        (<?php echo $_smarty_tpl->tpl_vars['movie']->value['Year'];?>
)
                    </span>
                    <?php }?> </h1> </header>
                    
                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['movie']->value['Response'];?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4=="False"){?>
                        <content> <?php echo $_smarty_tpl->getConfigVariable('no_movie_info_in_db');?>

                            <a href="https://www.google.hr/search?q=<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
<?php $_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['movies_basic_data']->value[$_tmp5];?>
" target="_blank">
                                <?php echo $_smarty_tpl->getConfigVariable('search_on_google');?>
</a> <br> <?php echo $_smarty_tpl->getConfigVariable('open_anyway');?>

                            <a href="movie.php?id=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('more');?>
</a></content>
                        <?php }else{ ?>    
                        <footer>
                            <p class="movie-time"><?php echo $_smarty_tpl->tpl_vars['movie']->value['Runtime'];?>
 <?php echo $_smarty_tpl->getConfigVariable('separator');?>
 <?php echo $_smarty_tpl->tpl_vars['movie']->value['Genre'];?>
 <?php echo $_smarty_tpl->getConfigVariable('separator');?>
 
                                <span class="movie-rating"> <?php echo $_smarty_tpl->tpl_vars['movie']->value['imdbRating'];?>
 </span></p>
                        </footer>
                        <p>
                            <?php echo $_smarty_tpl->tpl_vars['movie']->value['Plot'];?>
 <a href="movie.php?id=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('more');?>
</a>
                        </p>
                    <?php }?>
                </article>
                <hr>
                <?php } ?>

          
        </div>
    </div>


            
    <?php /*  Call merged included template "footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1242852d969dacb5834-75328943');
content_52db9a5c5edaf0_67628792($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "footer.tpl" */?>


        </div>

    </body>
</html>	<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-01-19 09:26:52
         compiled from ".\templates\page_header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52db9a5c0a0185_55419849')) {function content_52db9a5c0a0185_55419849($_smarty_tpl) {?>
<div class='page-header-box'>
    <div class='page-header-content-box'>
        <div class="page-header-left-box">
            <div class='page-header-left-box-content'> 
                <a href='index.php'> 
                    <img src='css/img/logo.png' alt='logo' height="50" /></a> 
                <span class="page-title"> <?php echo $_smarty_tpl->getConfigVariable('page_title');?>
</span>

            </div>
        </div>
        <div class="page-header-right-box">
            <div class="page-header-right-box-content">
                <div id="searchfield">
                    <form action='movie.php' method='get' name='search'>
                        <input type="text" name="name" class="biginput" id="autocomplete" placeholder="<?php echo $_smarty_tpl->getConfigVariable('search_placeholder');?>
">
                        <input type="submit" class="flatbtn" value="<?php echo $_smarty_tpl->getConfigVariable('search');?>
" >
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-01-19 09:26:52
         compiled from ".\templates\paginate.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52db9a5c1f5758_96071942')) {function content_52db9a5c1f5758_96071942($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\wamp\\www\\josip-zemberi-bcc\\libs\\Smarty-3.1.13\\libs\\plugins\\modifier.replace.php';
?>


<?php if ($_smarty_tpl->tpl_vars['totalPages']->value>1){?> 
    <div class="pages"> 
    <span> 
    
    <?php if ($_smarty_tpl->tpl_vars['curPage']->value>1){?> 
        <a title="<?php echo $_smarty_tpl->getConfigVariable('previous_page');?>
" href="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['url']->value,'%x',($_smarty_tpl->tpl_vars['curPage']->value-1));?>
">&laquo;&laquo;</a> 
    <?php }?> 
    
     

    <?php if ($_smarty_tpl->tpl_vars['curPage']->value>$_smarty_tpl->tpl_vars['putDots']->value){?> 
        <a title="<?php echo $_smarty_tpl->getConfigVariable('page');?>
 1" href="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['url']->value,'%x','1');?>
">1</a>
        ... 

        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = (int)$_smarty_tpl->tpl_vars['curPage']->value-$_smarty_tpl->tpl_vars['border']->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['curPage']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?> 
            <?php $_smarty_tpl->tpl_vars["curPos"] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['section']['i']['index'], null, 0);?> 
                <a title="<?php echo $_smarty_tpl->getConfigVariable('page');?>
 <?php echo $_smarty_tpl->tpl_vars['curPos']->value;?>
" href="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['url']->value,'%x',$_smarty_tpl->tpl_vars['curPos']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['curPos']->value;?>
</a> 
        <?php endfor; endif; ?> 
    <?php }else{ ?> 
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['curPage']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?> 
             <?php $_smarty_tpl->tpl_vars["curPos"] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['section']['i']['index'], null, 0);?> 
                <a title="<?php echo $_smarty_tpl->getConfigVariable('page');?>
 <?php echo $_smarty_tpl->tpl_vars['curPos']->value;?>
" href="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['url']->value,'%x',$_smarty_tpl->tpl_vars['curPos']->value);?>
">
                    <?php echo $_smarty_tpl->tpl_vars['curPos']->value;?>

                </a> 
        <?php endfor; endif; ?> 
                
    <?php }?> 
    
    
                
    <a title="<?php echo $_smarty_tpl->getConfigVariable('page');?>
 <?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
" class="current" href="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['url']->value,'%x',$_smarty_tpl->tpl_vars['curPage']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
</a> 
                
     
                
    <?php if ($_smarty_tpl->tpl_vars['totalPages']->value-$_smarty_tpl->tpl_vars['curPage']->value+1>$_smarty_tpl->tpl_vars['putDots']->value){?>                     
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = (int)$_smarty_tpl->tpl_vars['curPage']->value+1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['curPage']->value+$_smarty_tpl->tpl_vars['border']->value+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>                         
            <?php $_smarty_tpl->tpl_vars["curPos"] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['section']['i']['index'], null, 0);?> 
            <a title="<?php echo $_smarty_tpl->getConfigVariable('page');?>
 <?php echo $_smarty_tpl->tpl_vars['curPos']->value;?>
" href="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['url']->value,'%x',$_smarty_tpl->tpl_vars['curPos']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['curPos']->value;?>
</a>                     
        <?php endfor; endif; ?> 
                   
        ... 
        <a title="<?php echo $_smarty_tpl->getConfigVariable('page');?>
 <?php echo $_smarty_tpl->tpl_vars['totalPages']->value;?>
" href="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['url']->value,'%x',$_smarty_tpl->tpl_vars['totalPages']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['totalPages']->value;?>
</a> 
        
    <?php }else{ ?> 
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = (int)$_smarty_tpl->tpl_vars['curPage']->value+1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['totalPages']->value+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>                         
            <?php $_smarty_tpl->tpl_vars["curPos"] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['section']['i']['index'], null, 0);?>
            <a title="<?php echo $_smarty_tpl->getConfigVariable('page');?>
 <?php echo $_smarty_tpl->tpl_vars['curPos']->value;?>
" href="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['url']->value,'%x',$_smarty_tpl->tpl_vars['curPos']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['curPos']->value;?>
</a>                     
        <?php endfor; endif; ?> 
                
    <?php }?> 
               
    <?php if ($_smarty_tpl->tpl_vars['curPage']->value<$_smarty_tpl->tpl_vars['totalPages']->value){?> 
        <a title="<?php echo $_smarty_tpl->getConfigVariable('next_page');?>
" href="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['url']->value,'%x',($_smarty_tpl->tpl_vars['curPage']->value+1));?>
">&raquo;&raquo;</a>                 
    <?php }?> 
    
    </span> 
    </div>     
<?php }?>
<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-01-19 09:26:52
         compiled from ".\templates\movie_recommendations_based_on_taste.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52db9a5c41fd93_01143351')) {function content_52db9a5c41fd93_01143351($_smarty_tpl) {?><hr>
<?php  $_smarty_tpl->tpl_vars['movie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['movie']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['show_recommendations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['movie']->key => $_smarty_tpl->tpl_vars['movie']->value){
$_smarty_tpl->tpl_vars['movie']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['movie']->key;
?>
    <h3 style="color: snow">  
        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['movie']->value;?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['movie']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp1<=5&&$_tmp2>=4.5){?>
            &#9733; &#9733; &#9733; &#9733; &#9733;
            <?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['movie']->value;?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['movie']->value;?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp3<4.5&&$_tmp4>=4){?>
                &#9733; &#9733; &#9733; &#9733;&#9734;
                <?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['movie']->value;?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['movie']->value;?>
<?php $_tmp6=ob_get_clean();?><?php if ($_tmp5<4&&$_tmp6>=3){?>
                    &#9733; &#9733; &#9733;&#9734;&#9734;
                    <?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['movie']->value;?>
<?php $_tmp7=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['movie']->value;?>
<?php $_tmp8=ob_get_clean();?><?php if ($_tmp7<3&&$_tmp8>=2){?>
                        &#9733; &#9733;&#9734;&#9734;&#9734;
                    <?php }else{ ?>
                        &#9733;&#9734;&#9734;&#9734;&#9734;
                    <?php }}}}?>

                    <a href='movie.php?id=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
'>  
                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
<?php $_tmp9=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['movies_basic_data']->value[$_tmp9];?>
 
                        &rarr;
                    </a>  
                </h3>
                <hr>
            <?php } ?><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-01-19 09:26:52
         compiled from ".\templates\movie_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52db9a5c58c019_58090543')) {function content_52db9a5c58c019_58090543($_smarty_tpl) {?>
<div id="page-footer-box">
    <div id="footer-content-box">
        <div id="footer-content-box-left">
            <p style="text-align: center;">
                Copyright &copy;
                <a href='https://github.com/jozemberi' target='_blank'>
                    Josip Žemberi
                </a>  2014 | 

                <a href='http://www.best.hr/code-challenge/v4.0/' target='_blank'>
                    BEST Code Challenge 4.0
                </a>

            </p>

        </div>
        <div id="footer-lang-box">
            <p style="text-align: center;">
                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=="hr"){?>
                    HR | <a href='<?php echo $_smarty_tpl->tpl_vars['change_lang_url']->value;?>
&amp;lang=en'>EN</a>
                <?php }else{ ?>
                    <a href='<?php echo $_smarty_tpl->tpl_vars['change_lang_url']->value;?>
&amp;lang=hr'>HR</a> | EN
                <?php }?>                 
                |
                <a href='http://validator.w3.org/check?uri=referer' target='_blank'>
                    HTML5
                </a> |
                <a href='http://jigsaw.w3.org/css-validator/check/referer' target='_blank'>
                    CSS </a> | 
                <a href='doc.php' target='_blank'> doc</a>|
                <button onclick="showLikedMovies();">&hearts;</button>
            </p>
        </div> 
    </div>
    
        <script>
            function showLikedMovies()
            {
                alert("<?php echo $_smarty_tpl->getConfigVariable('movie_you_liked');?>
:\n<?php  $_smarty_tpl->tpl_vars['movie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['movie']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['liked_movies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['movie']->key => $_smarty_tpl->tpl_vars['movie']->value){
$_smarty_tpl->tpl_vars['movie']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['movie']->key;
?>  id: <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
; <?php echo $_smarty_tpl->getConfigVariable('name');?>
: <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['movies_basic_data']->value[$_tmp2];?>
\n<?php } ?> ");
                    }
        </script>
    

</div>

<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-01-19 09:26:52
         compiled from ".\templates\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52db9a5c5edaf0_67628792')) {function content_52db9a5c5edaf0_67628792($_smarty_tpl) {?>
<div id="page-footer-box">
    <div id="footer-content-box">
        <div id="footer-content-box-left">
            <?php $_smarty_tpl->tpl_vars["putDots"] = new Smarty_variable(7, null, 0);?> <?php $_smarty_tpl->tpl_vars["border"] = new Smarty_variable(6, null, 0);?> 
            <?php $_smarty_tpl->tpl_vars["curPage"] = new Smarty_variable($_smarty_tpl->tpl_vars['pagination']->value['curPage'], null, 0);?> 
            <?php $_smarty_tpl->tpl_vars["url"] = new Smarty_variable($_smarty_tpl->tpl_vars['pagination']->value['url'], null, 0);?> 
            <?php $_smarty_tpl->tpl_vars["totalPages"] = new Smarty_variable($_smarty_tpl->tpl_vars['pagination']->value['totalPages'], null, 0);?> 

            <?php /*  Call merged included template "paginate.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('paginate.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1242852d969dacb5834-75328943');
content_52db9a5c1f5758_96071942($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "paginate.tpl" */?>

        </div>
        <div id="footer-lang-box">
            <p style="text-align: center;"> 
                &copy;
                <a href='https://github.com/jozemberi' target='_blank'>
                    J. Žemberi
                </a>  | 

                <a href='http://www.best.hr/code-challenge/v4.0/' target='_blank'>
                    BCC 4.0
                </a> |
                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=="hr"){?>
                    HR | <a href='<?php echo $_smarty_tpl->tpl_vars['change_lang_url']->value;?>
&amp;lang=en'>EN</a>
                <?php }else{ ?>
                    <a href='<?php echo $_smarty_tpl->tpl_vars['change_lang_url']->value;?>
&amp;lang=hr'>HR</a> | EN
                <?php }?>                 
                |
                <a href='http://validator.w3.org/check?uri=referer' target='_blank'>
                    HTML5
                </a> |
                <a href='http://jigsaw.w3.org/css-validator/check/referer' target='_blank'>
                    CSS </a> | 
                <a href='doc.php' target='_blank'> doc</a> |
                <button onclick="showLikedMovies();">&hearts;</button>

            </p>
        </div> 
    </div>

    
        <script>
            function showLikedMovies()
            {
                alert("<?php echo $_smarty_tpl->getConfigVariable('movie_you_liked');?>
:\n<?php  $_smarty_tpl->tpl_vars['movie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['movie']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['liked_movies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['movie']->key => $_smarty_tpl->tpl_vars['movie']->value){
$_smarty_tpl->tpl_vars['movie']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['movie']->key;
?>  id: <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
; <?php echo $_smarty_tpl->getConfigVariable('name');?>
: <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['movies_basic_data']->value[$_tmp2];?>
\n<?php } ?> ");
                    }
        </script>
    
</div>

<?php }} ?>