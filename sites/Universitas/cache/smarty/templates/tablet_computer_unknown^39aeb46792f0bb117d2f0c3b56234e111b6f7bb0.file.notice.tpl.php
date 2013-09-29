<?php /* Smarty version Smarty-3.0.7, created on 2013-09-28 21:03:32
         compiled from "/var/www/Kurogo-Mobile-Web/app/modules/emergency/templates/notice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40373655252477c644b09f0-77197496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39aeb46792f0bb117d2f0c3b56234e111b6f7bb0' => 
    array (
      0 => '/var/www/Kurogo-Mobile-Web/app/modules/emergency/templates/notice.tpl',
      1 => 1380414714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40373655252477c644b09f0-77197496',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/Kurogo-Mobile-Web/lib/smarty/plugins/modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template("findInclude:common/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<div class="notice">
  
  <h1 class="slugline"><?php echo $_smarty_tpl->getVariable('emergencyNotice')->value['title'];?>
</h1>
  
  <p class="byline">
  
    <?php if ($_smarty_tpl->getVariable('emergencyNotice')->value['date']){?>
      <span class="pubdate"><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('emergencyNotice')->value['date'],$_smarty_tpl->getVariable('dateFormat')->value);?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('emergencyNotice')->value['date'],$_smarty_tpl->getVariable('timeFormat')->value);?>
</span>
    <?php }?>
  
  </p>    
  
  <div id="notice">
        
    <span id="noticebody">
      <?php echo $_smarty_tpl->getVariable('emergencyNotice')->value['body'];?>

    </span>
    
  </div><!--#notice-->
</div><!-- .notice -->

<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
