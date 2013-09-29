<?php /* Smarty version Smarty-3.0.7, created on 2013-09-28 21:26:55
         compiled from "findInclude:common/templates/videoPlayer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:312449812524781df05ce58-50386580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb5a0de692e4ffeae0751b86948d1074393f1593' => 
    array (
      0 => 'findInclude:common/templates/videoPlayer.tpl',
      1 => 1380414714,
      2 => 'findInclude',
    ),
  ),
  'nocache_hash' => '312449812524781df05ce58-50386580',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('video')->value){?>
  <?php if ($_smarty_tpl->getVariable('video')->value->canPlay(Kurogo::deviceClassifier())){?>
    <?php $_smarty_tpl->tpl_vars['videoPlayerType'] = new Smarty_variable($_smarty_tpl->getVariable('video')->value->getType(), null, null);?>
    <div class="kgo-videoplayer kgo-videoplayer-<?php echo $_smarty_tpl->getVariable('videoPlayerType')->value;?>
">
      <div class="kgo-videoplayer-container">
        <?php $_template = new Smarty_Internal_Template("findInclude:common/templates/videoPlayer/videoPlayer_".($_smarty_tpl->getVariable('videoPlayerType')->value).".tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
      </div>
    </div>
  <?php }else{ ?>
    <div class="nonfocal">
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("VIDEO_UNSUPPORTED");?>

    </div>
  <?php }?>
<?php }else{ ?>
  <div class="nonfocal">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("VIDEO_INVALID");?>

  </div>
<?php }?>
