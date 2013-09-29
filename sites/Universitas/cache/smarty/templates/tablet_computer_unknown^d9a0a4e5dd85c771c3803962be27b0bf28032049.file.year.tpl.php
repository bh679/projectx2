<?php /* Smarty version Smarty-3.0.7, created on 2013-09-28 22:20:39
         compiled from "/var/www/Kurogo-Mobile-Web/app/modules/calendar/templates/year.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136048241952478e7765bf31-42897070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9a0a4e5dd85c771c3803962be27b0bf28032049' => 
    array (
      0 => '/var/www/Kurogo-Mobile-Web/app/modules/calendar/templates/year.tpl',
      1 => 1380414714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136048241952478e7765bf31-42897070',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php $_template = new Smarty_Internal_Template("findInclude:modules/calendar/templates/include/eventslist.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title',($_smarty_tpl->getVariable('feedTitle')->value)." for ".($_smarty_tpl->getVariable('current')->value));$_template->assign('date',false);$_template->assign('linkDateFormat',false); echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
