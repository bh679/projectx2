<?php /* Smarty version Smarty-3.0.7, created on 2013-09-28 21:26:55
         compiled from "findInclude:common/templates/bookmark.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1584924558524781df022844-55645443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e45a2ea83644776038c17a5f16813e538f4f735f' => 
    array (
      0 => 'findInclude:common/templates/bookmark.tpl',
      1 => 1380414714,
      2 => 'findInclude',
    ),
  ),
  'nocache_hash' => '1584924558524781df022844-55645443',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/Kurogo-Mobile-Web/lib/smarty/plugins/modifier.escape.php';
?><?php if ($_smarty_tpl->getVariable('item')->value){?>
<div id="bookmarkContainer">
  <a onclick="<?php if (strlen($_smarty_tpl->getVariable('GOOGLE_ANALYTICS_ID')->value)){?>_gaq.push(['_trackEvent', '<?php echo $_smarty_tpl->getVariable('configModule')->value;?>
', 'bookmark button pressed', '<?php echo smarty_modifier_escape(smarty_modifier_escape($_smarty_tpl->getVariable('item')->value,'javascript'),'html');?>
']);<?php }?>toggleBookmark('<?php echo $_smarty_tpl->getVariable('name')->value;?>
', '<?php echo smarty_modifier_escape(smarty_modifier_escape($_smarty_tpl->getVariable('item')->value,'javascript'),'html');?>
', <?php echo $_smarty_tpl->getVariable('exdate')->value;?>
, '<?php echo @COOKIE_PATH;?>
')">
    <div id="bookmark" ontouchstart="addClass(this, 'pressed')" ontouchend="removeClass(this, 'pressed')"<?php if ($_smarty_tpl->getVariable('bookmarkStatus')->value=="on"){?> class="on"<?php }?>></div>
  </a>
</div>
<?php }?>
