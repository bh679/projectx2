<?php /* Smarty version Smarty-3.0.7, created on 2013-09-28 22:43:38
         compiled from "/var/www/Kurogo-Mobile-Web/app/common/templates/help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1485948522524793da9a52e3-47645064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb4f1c15ff2fbf86b0d5b77a49fa59523dc561f3' => 
    array (
      0 => '/var/www/Kurogo-Mobile-Web/app/common/templates/help.tpl',
      1 => 1380414714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1485948522524793da9a52e3-47645064',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<div class="focal">
  <h2><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("HELP_TEXT",$_smarty_tpl->getVariable('moduleName')->value);?>
</h2>
  
  <?php  $_smarty_tpl->tpl_vars['paragraph'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('moduleStrings')->value['help']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['paragraph']->key => $_smarty_tpl->tpl_vars['paragraph']->value){
?>
    <p><?php echo $_smarty_tpl->tpl_vars['paragraph']->value;?>
</p>
  <?php }} ?>
</div>

<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
