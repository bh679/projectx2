<?php /* Smarty version Smarty-3.0.7, created on 2013-09-28 21:35:05
         compiled from "findInclude:modules/calendar/templates/include/eventslist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1555478127524783c9d8a7b8-30452567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '173ef6add57bbefb77172d5c7fc0b50adac8ce4b' => 
    array (
      0 => 'findInclude:modules/calendar/templates/include/eventslist.tpl',
      1 => 1380414714,
      2 => 'findInclude',
    ),
    '409253a9835228d5fe37056b8913f50ddf68fe64' => 
    array (
      0 => '/var/www/Kurogo-Mobile-Web/app/modules/calendar/templates/include/eventslist.tpl',
      1 => 1380414714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1555478127524783c9d8a7b8-30452567',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/Kurogo-Mobile-Web/lib/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_escape')) include '/var/www/Kurogo-Mobile-Web/lib/smarty/plugins/modifier.escape.php';
?><?php $_smarty_tpl->tpl_vars['defaultTemplateFile'] = new Smarty_variable("findInclude:common/templates/listItem.tpl", null, null);?>
<?php $_smarty_tpl->tpl_vars['listItemTemplateFile'] = new Smarty_variable((($tmp = @$_smarty_tpl->getVariable('listItemTemplateFile')->value)===null||$tmp==='' ? $_smarty_tpl->getVariable('defaultTemplateFile')->value : $tmp), null, null);?>
<?php ob_start(); ?>
<?php if ($_smarty_tpl->getVariable('prevURL')->value||$_smarty_tpl->getVariable('nextURL')->value){?>
  <div class="sidenav2">
    <?php if ($_smarty_tpl->getVariable('prevURL')->value&&$_smarty_tpl->getVariable('prev')->value){?>
      <a href="<?php echo $_smarty_tpl->getVariable('prevURL')->value;?>
" class="sidenav-prev">
        <?php if ($_smarty_tpl->getVariable('linkDateFormat')->value){?>
          <?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('prev')->value,$_smarty_tpl->getVariable('linkDateFormat')->value);?>

        <?php }else{ ?>
          <?php echo $_smarty_tpl->getVariable('prev')->value;?>

        <?php }?>
      </a> 
    <?php }?>
    <?php if ($_smarty_tpl->getVariable('nextURL')->value&&$_smarty_tpl->getVariable('next')->value){?>
      <a href="<?php echo $_smarty_tpl->getVariable('nextURL')->value;?>
" class="sidenav-next">
        <?php if ($_smarty_tpl->getVariable('linkDateFormat')->value){?>
          <?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('next')->value,$_smarty_tpl->getVariable('linkDateFormat')->value);?>

        <?php }else{ ?>
          <?php echo $_smarty_tpl->getVariable('next')->value;?>

        <?php }?>
      </a>
    <?php }?>
  </div>
<?php }?>
<?php  $_smarty_tpl->assign("sideNav", ob_get_contents()); Smarty::$_smarty_vars['capture']["sideNav"]=ob_get_clean();?>

<?php ob_start(); ?>
  <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('title')->value);?>
<?php if ($_smarty_tpl->getVariable('date')->value||$_smarty_tpl->getVariable('isToday')->value){?>: 
    
      <?php if ($_smarty_tpl->getVariable('isToday')->value){?>
        Today
      <?php }else{ ?>
        <?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('date')->value,$_smarty_tpl->getVariable('titleDateFormat')->value);?>

      <?php }?>
    
  <?php }?>
<?php  $_smarty_tpl->assign("fullTitle", ob_get_contents()); Smarty::$_smarty_vars['capture']["fullTitle"]=ob_get_clean();?>


  <div class="nonfocal sidenavHeader">
    <?php echo $_smarty_tpl->getVariable('sideNav')->value;?>

    <h2><?php echo $_smarty_tpl->getVariable('fullTitle')->value;?>
</h2>
  </div>


<ul class="results"<?php if ($_smarty_tpl->getVariable('resultslistID')->value){?> id="<?php echo $_smarty_tpl->getVariable('resultslistID')->value;?>
"<?php }?>>
  <?php if ($_smarty_tpl->getVariable('previousEventsURL')->value){?>
    <li class="pagerlink">
      <a href="<?php echo $_smarty_tpl->getVariable('previousEventsURL')->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("PREVIOUS_EVENT_TEXT",$_smarty_tpl->getVariable('maxPerPage')->value);?>
</a>
    </li>
  <?php }?>
  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('events')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>
    <?php if (!isset($_smarty_tpl->tpl_vars['item']->value['separator'])){?>
      <li<?php if ($_smarty_tpl->tpl_vars['item']->value['img']){?> class="icon"<?php }?>>
        <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('listItemTemplateFile')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('subTitleNewline',(($tmp = @$_smarty_tpl->getVariable('subTitleNewline')->value)===null||$tmp==='' ? true : $tmp)); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
      </li>
    <?php }?>
  <?php }} ?>
  <?php if (count($_smarty_tpl->getVariable('events')->value)==0){?>
    
      <li><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("NO_RESULTS");?>
</li>
    
  <?php }?>
  
  <?php if ($_smarty_tpl->getVariable('nextEventsURL')->value){?>
    <li class="pagerlink">
      <a href="<?php echo $_smarty_tpl->getVariable('nextEventsURL')->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("NEXT_EVENT_TEXT",$_smarty_tpl->getVariable('maxPerPage')->value);?>
</a>
    </li>
  <?php }?>
</ul>

<?php echo $_smarty_tpl->getVariable('sideNav')->value;?>

