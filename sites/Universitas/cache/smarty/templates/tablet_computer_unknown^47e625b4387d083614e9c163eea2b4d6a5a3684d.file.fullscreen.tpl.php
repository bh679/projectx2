<?php /* Smarty version Smarty-3.0.7, created on 2013-09-28 21:26:47
         compiled from "/var/www/Kurogo-Mobile-Web/app/modules/map/templates/fullscreen.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1742862440524781d79e6fb7-81847924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47e625b4387d083614e9c163eea2b4d6a5a3684d' => 
    array (
      0 => '/var/www/Kurogo-Mobile-Web/app/modules/map/templates/fullscreen.tpl',
      1 => 1380414714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1742862440524781d79e6fb7-81847924',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('scalable',false); echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php $_template = new Smarty_Internal_Template("findInclude:modules/map/templates/searchbar.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<div id="spacer"></div>
<div id="<?php echo $_smarty_tpl->getVariable('mapImageElementId')->value;?>
" class="mapimage"></div>


<?php $_template = new Smarty_Internal_Template("findInclude:modules/map/templates/fullscreenfooter.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('hideFooterLinks',true); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
