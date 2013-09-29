<?php /* Smarty version Smarty-3.0.7, created on 2013-09-28 21:31:03
         compiled from "/var/www/Kurogo-Mobile-Web/app/modules/photos/templates/index-tablet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1883710153524782d7e32b34-17397417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaaea9a78930301a4d97764f64312e3d9e38f367' => 
    array (
      0 => '/var/www/Kurogo-Mobile-Web/app/modules/photos/templates/index-tablet.tpl',
      1 => 1380414714,
      2 => 'file',
    ),
    'f8e9e1856a641f7a6ef3bd2d8d2d357a6d68bb74' => 
    array (
      0 => '/var/www/Kurogo-Mobile-Web/app/modules/photos/templates/index.tpl',
      1 => 1380414714,
      2 => 'file',
    ),
    '' => 
    array (
      0 => 'findInclude:common/templates/navlist.tpl',
      1 => 1380414714,
      2 => 'findInclude',
    ),
  ),
  'nocache_hash' => '1883710153524782d7e32b34-17397417',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/Kurogo-Mobile-Web/lib/smarty/plugins/modifier.escape.php';
?><?php $_template = new Smarty_Internal_Template("findInclude:common/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php if (isset($_smarty_tpl->getVariable('description',null,true,false)->value)&&strlen($_smarty_tpl->getVariable('description')->value)){?>
  <p class="nonfocal">
    <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('description')->value);?>

  </p>
<?php }?>


  
  <div class="photo-albums">
  <?php  $_smarty_tpl->tpl_vars['album'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('albums')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['album']->key => $_smarty_tpl->tpl_vars['album']->value){
?>
    <div class="album">
        <a href="<?php echo $_smarty_tpl->tpl_vars['album']->value['url'];?>
">
        <span class="album-cover"><img src="<?php echo $_smarty_tpl->tpl_vars['album']->value['img'];?>
" width="150" height="150" alt="" /></span>
        <span class="album-title"><?php echo $_smarty_tpl->tpl_vars['album']->value['title'];?>
</span>
        <span class="smallprint serviceicon <?php echo $_smarty_tpl->tpl_vars['album']->value['type'];?>
"><?php echo $_smarty_tpl->tpl_vars['album']->value['type'];?>
 | <?php echo $_smarty_tpl->tpl_vars['album']->value['albumcount'];?>
</span>
        </a>
    </div>
  <?php }} ?>
  </div> <!-- class="photo-albums" -->
  


<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
