<?php /* Smarty version Smarty-3.1.13, created on 2014-01-19 09:36:00
         compiled from ".\templates\movie.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2880952d97945a5d3e2-35227350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab70579d8134e03671dc6d5762539f040a7a8af7' => 
    array (
      0 => '.\\templates\\movie.tpl',
      1 => 1390123708,
      2 => 'file',
    ),
    '9ee73896c0478bfb098f482dc63fd1a85d952428' => 
    array (
      0 => '.\\templates\\2_content_box_layout.tpl',
      1 => 1389889749,
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
    '1f53f2b369df10564e314141144094d83ffc1c54' => 
    array (
      0 => '.\\templates\\movie_recommendations_based_on_opened_movie.tpl',
      1 => 1390123820,
      2 => 'file',
    ),
    'c5c510da39514e7b404b58ae2cc601fec2aebc5c' => 
    array (
      0 => '.\\templates\\movie_footer.tpl',
      1 => 1390081172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2880952d97945a5d3e2-35227350',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52d979460cfe86_09353023',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d979460cfe86_09353023')) {function content_52d979460cfe86_09353023($_smarty_tpl) {?>
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('page_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2880952d97945a5d3e2-35227350');
content_52db9c8092c389_64886446($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "page_header.tpl" */?>  
        

        <div class='content-box'>
            
    <div class='movie-info-box'>
        <div class='left-content-box'>
            
    <a href="index.php"> <?php echo $_smarty_tpl->getConfigVariable('go_home');?>
 </a>
    <article>
        <header>
            <h1> <span class="movie-title">
                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['movie']->value['Response'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=="False"){?> <?php echo $_smarty_tpl->tpl_vars['movie_title']->value;?>
 
                    <?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['movie']->value['Title'];?>
 
                    <?php }?> </span>
                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['movie']->value['Response'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=="False"){?>  <?php }else{ ?>
                    <span class="movie-year">
                        (<?php echo $_smarty_tpl->tpl_vars['movie']->value['Year'];?>
)
                    </span>
                <?php }?>
            </h1>
        </header>
        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['movie']->value['Response'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3=="False"){?>
             
                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['from_db']->value;?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4=="False"){?>
                    <br>
                    <span style="font-size: 140%;">
                    <b><?php echo $_smarty_tpl->getConfigVariable('attention');?>
 </b> 
                    </span>
                    <br>
                    <span style="color:red;">
                        <?php echo $_smarty_tpl->getConfigVariable('no_movie_in_db');?>

                        <br><?php echo $_smarty_tpl->getConfigVariable('no_recommendation_influence');?>

                    </span>
                    <br>
                    <?php }else{ ?>
                        <br>
                        <?php echo $_smarty_tpl->getConfigVariable('no_movie_info_in_db');?>

                        <br>
                        <span style="color:green;">
                        <?php echo $_smarty_tpl->getConfigVariable('have_recommendation_influance');?>

                        </span>
                    <?php }?>
                    <br>
                    <?php echo $_smarty_tpl->getConfigVariable('before_search_on_google');?>

                    <a href="https://www.google.hr/search?q=<?php echo $_smarty_tpl->tpl_vars['movie_title']->value;?>
" target="_blank">
                        <?php echo $_smarty_tpl->getConfigVariable('search_on_google');?>
</a>
                        <br>
            
            
                <?php }else{ ?>    
            <footer>
                <p class="movie-time"><?php echo $_smarty_tpl->tpl_vars['movie']->value['Runtime'];?>
 <?php echo $_smarty_tpl->getConfigVariable('separator');?>
 <?php echo $_smarty_tpl->tpl_vars['movie']->value['Genre'];?>
 <?php echo $_smarty_tpl->getConfigVariable('separator');?>
 
                    <span class="movie-rating"> <?php echo $_smarty_tpl->tpl_vars['movie']->value['imdbRating'];?>
 </span></p>
            </footer>

            
            
            <img src="<?php echo $_smarty_tpl->tpl_vars['movie']->value['Poster'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['movie_title']->value;?>
" 
                 style="float: right;margin-left:2rem;margin-bottom:2rem;max-height:420px;">

            
            <hr>
                <b><?php echo $_smarty_tpl->getConfigVariable('plot');?>
</b> <?php echo $_smarty_tpl->tpl_vars['movie']->value['Plot'];?>

            <br><hr>
                <b><?php echo $_smarty_tpl->getConfigVariable('director');?>
</b> <?php echo $_smarty_tpl->tpl_vars['movie']->value['Director'];?>


                <br> <hr>
                <b><?php echo $_smarty_tpl->getConfigVariable('writers');?>
</b> <?php echo $_smarty_tpl->tpl_vars['movie']->value['Writer'];?>

                <br><hr>
                <b><?php echo $_smarty_tpl->getConfigVariable('actors');?>
</b> <?php echo $_smarty_tpl->tpl_vars['movie']->value['Actors'];?>

                <br><hr>

                <b><?php echo $_smarty_tpl->getConfigVariable('released');?>
</b> <?php echo $_smarty_tpl->tpl_vars['movie']->value['Released'];?>

                <br><hr>

                <b><?php echo $_smarty_tpl->getConfigVariable('awards');?>
</b> <?php echo $_smarty_tpl->tpl_vars['movie']->value['Awards'];?>

                <br><hr>
                <b><?php echo $_smarty_tpl->getConfigVariable('language');?>
</b> <?php echo $_smarty_tpl->tpl_vars['movie']->value['Language'];?>

                <br><hr>
                <b><?php echo $_smarty_tpl->getConfigVariable('country');?>
</b> <?php echo $_smarty_tpl->tpl_vars['movie']->value['Country'];?>

                <br><hr>

                <b><?php echo $_smarty_tpl->getConfigVariable('metascore');?>
</b> <?php echo $_smarty_tpl->tpl_vars['movie']->value['Metascore'];?>

                <br><hr>

                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['from_db']->value;?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5=="False"){?> 
                    <b><?php echo $_smarty_tpl->getConfigVariable('attention');?>
 </b> <span style="color:red;">
                        <?php echo $_smarty_tpl->getConfigVariable('no_movie_in_db');?>

                        <br><?php echo $_smarty_tpl->getConfigVariable('no_recommendation_influence');?>
</span>
                        <br> <hr>
                <?php }?>
                

                    <span style="clear:both;float: right;">
                        <br>
                        <a href="http://www.imdb.com/title/<?php echo $_smarty_tpl->tpl_vars['movie']->value['imdbID'];?>
/" 
                           target="_blank"><?php echo $_smarty_tpl->getConfigVariable('open_on_imdb');?>
</a>  
                    </span>
                    <br><br>
                
            <?php }?>
            
        </article>
            <br>
            <a href="index.php"> <?php echo $_smarty_tpl->getConfigVariable('go_home');?>
 </a>
            

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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('paginate.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2880952d97945a5d3e2-35227350');
content_52db9c80b1f989_69139015($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "paginate.tpl" */?>
    <?php /*  Call merged included template "movie_recommendations_based_on_opened_movie.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('movie_recommendations_based_on_opened_movie.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2880952d97945a5d3e2-35227350');
content_52db9c80d42525_93448882($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "movie_recommendations_based_on_opened_movie.tpl" */?>
    <?php /*  Call merged included template "paginate.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('paginate.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2880952d97945a5d3e2-35227350');
content_52db9c80b1f989_69139015($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "paginate.tpl" */?>
    <hr>


        </div>	
    </div>



            
    <?php /*  Call merged included template "movie_footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('movie_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2880952d97945a5d3e2-35227350');
content_52db9c80d9b634_65018286($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "movie_footer.tpl" */?>


        </div>

    </body>
</html>	<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-01-19 09:36:00
         compiled from ".\templates\page_header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52db9c8092c389_64886446')) {function content_52db9c8092c389_64886446($_smarty_tpl) {?>
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
<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-01-19 09:36:00
         compiled from ".\templates\paginate.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52db9c80b1f989_69139015')) {function content_52db9c80b1f989_69139015($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\wamp\\www\\josip-zemberi-bcc\\libs\\Smarty-3.1.13\\libs\\plugins\\modifier.replace.php';
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
<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-01-19 09:36:00
         compiled from ".\templates\movie_recommendations_based_on_opened_movie.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52db9c80d42525_93448882')) {function content_52db9c80d42525_93448882($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'D:\\wamp\\www\\josip-zemberi-bcc\\libs\\Smarty-3.1.13\\libs\\plugins\\function.math.php';
?><hr>
<?php  $_smarty_tpl->tpl_vars['movie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['movie']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['show_recommendations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['movie']->key => $_smarty_tpl->tpl_vars['movie']->value){
$_smarty_tpl->tpl_vars['movie']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['movie']->key;
?>
    <h3>  
        <span style="color: tomato;"> &hearts;</span> 
        <?php ob_start();?><?php echo smarty_function_math(array('equation'=>"x * y",'x'=>$_smarty_tpl->tpl_vars['movie']->value,'y'=>100),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo sprintf("%.0f",$_tmp1);?>
&#37; &rarr;
        <a href='movie.php?id=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
'> 
            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['movies_basic_data']->value[$_tmp2];?>
 &rarr;

        </a>  
    </h3>
    <hr>
<?php } ?><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-01-19 09:36:00
         compiled from ".\templates\movie_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52db9c80d9b634_65018286')) {function content_52db9c80d9b634_65018286($_smarty_tpl) {?>
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

<?php }} ?>