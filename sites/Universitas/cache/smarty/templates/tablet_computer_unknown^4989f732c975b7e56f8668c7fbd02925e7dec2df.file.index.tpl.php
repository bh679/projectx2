<?php /* Smarty version Smarty-3.0.7, created on 2013-09-28 21:25:39
         compiled from "/var/www/Kurogo-Mobile-Web/app/modules/dining/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122846826052478193c3ebe9-33535595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4989f732c975b7e56f8668c7fbd02925e7dec2df' => 
    array (
      0 => '/var/www/Kurogo-Mobile-Web/app/modules/dining/templates/index.tpl',
      1 => 1380414714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122846826052478193c3ebe9-33535595',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/Kurogo-Mobile-Web/lib/smarty/plugins/modifier.escape.php';
?><?php $_template = new Smarty_Internal_Template("findInclude:common/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>


<?php if (isset($_smarty_tpl->getVariable('description',null,true,false)->value)&&strlen($_smarty_tpl->getVariable('description')->value)){?>
  <p class="nonfocal smallprint">
    <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('description')->value);?>

  </p>
<?php }?>

<div id="locations">
<?php  $_smarty_tpl->tpl_vars['locationGroup'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('groupedLocations')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['locationGroup']->key => $_smarty_tpl->tpl_vars['locationGroup']->value){
?>
	<?php if ($_smarty_tpl->tpl_vars['locationGroup']->value){?>
		<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/navlist.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('navListHeading',$_smarty_tpl->tpl_vars['locationGroup']->value['title']);$_template->assign('navlistItems',$_smarty_tpl->tpl_vars['locationGroup']->value['items']);$_template->assign('subTitleNewline',true); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
	<?php }?>
<?php }} ?>
</div>
<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
