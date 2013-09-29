<?php /* Smarty version Smarty-3.0.7, created on 2013-09-28 21:31:16
         compiled from "/var/www/Kurogo-Mobile-Web/app/modules/photos/templates/album.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1692722219524782e48dfdb2-26916283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ababf09200406464fe574af331c51a48ccf946c' => 
    array (
      0 => '/var/www/Kurogo-Mobile-Web/app/modules/photos/templates/album.tpl',
      1 => 1380414714,
      2 => 'file',
    ),
    '' => 
    array (
      0 => 'findInclude:modules/photos/templates/springboard.tpl',
      1 => 1380414714,
      2 => 'findInclude',
    ),
  ),
  'nocache_hash' => '1692722219524782e48dfdb2-26916283',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php ob_start(); ?>
<?php if ($_smarty_tpl->getVariable('prevURL')->value||$_smarty_tpl->getVariable('nextURL')->value){?>
  <div class="sidenav2">
    <?php if ($_smarty_tpl->getVariable('prevURL')->value&&$_smarty_tpl->getVariable('prev')->value){?>
      <a href="<?php echo $_smarty_tpl->getVariable('prevURL')->value;?>
" class="sidenav-prev">
          <?php echo $_smarty_tpl->getVariable('prev')->value;?>

      </a> 
    <?php }?>
      <div class="sidenavlabel"><?php echo $_smarty_tpl->getVariable('albumcount')->value;?>
 <?php if ($_smarty_tpl->getVariable('albumcount')->value==1){?> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("PICTURE_TEXT");?>
 <?php }else{ ?> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("PICTURES_TEXT");?>
 <?php }?></div>
    <?php if ($_smarty_tpl->getVariable('nextURL')->value&&$_smarty_tpl->getVariable('next')->value){?>
      <a href="<?php echo $_smarty_tpl->getVariable('nextURL')->value;?>
" class="sidenav-next">
          <?php echo $_smarty_tpl->getVariable('next')->value;?>

      </a>
    <?php }?>
  </div>
<?php }?>
<?php  $_smarty_tpl->assign("sideNav", ob_get_contents()); Smarty::$_smarty_vars['capture']["sideNav"]=ob_get_clean();?>


  <?php echo $_smarty_tpl->getVariable('sideNav')->value;?>




  <?php $_template = new Smarty_Internal_Template("findInclude:modules/photos/templates/springboard.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('springboardItems',$_smarty_tpl->getVariable('photos')->value);$_template->properties['nocache_hash']  = '1692722219524782e48dfdb2-26916283';
$_tpl_stack[] = $_smarty_tpl; $_smarty_tpl = $_template;?>
<?php /* Smarty version Smarty-3.0.7, created on 2013-09-28 21:31:16
         compiled from "findInclude:modules/photos/templates/springboard.tpl" */ ?>
<div class="gallery"<?php if ($_smarty_tpl->getVariable('springboardID')->value){?> id="<?php echo $_smarty_tpl->getVariable('springboardID')->value;?>
"<?php }?>>
  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('springboardItems')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>
    <?php if ($_smarty_tpl->tpl_vars['item']->value['separator']){?>
      
        <p class="separator">&nbsp;</p>
      
    <?php }else{ ?>
      <div <?php if ($_smarty_tpl->tpl_vars['item']->value['class']){?> class="<?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
"<?php }?>>
        <?php if ($_smarty_tpl->tpl_vars['item']->value['url']){?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
">
        <?php }?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" />
        <?php if ($_smarty_tpl->tpl_vars['item']->value['url']){?>
          </a>
        <?php }?>
      </div>
    <?php }?>
  <?php }} ?>
</div>
<?php $_smarty_tpl->updateParentVariables(0);?>
<?php /*  End of included template "findInclude:modules/photos/templates/springboard.tpl" */ ?>
<?php $_smarty_tpl = array_pop($_tpl_stack);?><?php unset($_template);?>



  <?php echo $_smarty_tpl->getVariable('sideNav')->value;?>



<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
