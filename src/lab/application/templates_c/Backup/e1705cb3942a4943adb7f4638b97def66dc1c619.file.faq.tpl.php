<?php /* Smarty version Smarty3-RC3, created on 2015-05-25 08:20:51
         compiled from "C:/xampp/htdocs/microwave/application/templates\faq.tpl" */ ?>
<?php /*%%SmartyHeaderCode:285775562bf43b72880-66454247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1705cb3942a4943adb7f4638b97def66dc1c619' => 
    array (
      0 => 'C:/xampp/htdocs/microwave/application/templates\\faq.tpl',
      1 => 1352902648,
    ),
  ),
  'nocache_hash' => '285775562bf43b72880-66454247',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cycle')) include 'C:\xampp\htdocs\microwave\application\components\NSmarty\smarty\plugins\function.cycle.php';
if (!is_callable('smarty_modifier_stripslash')) include 'C:\xampp\htdocs\microwave\application\components\NSmarty\smarty\plugins\modifier.stripslash.php';
?><?php $_template = new Smarty_Internal_Template("_header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    <table width="1002" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><img src="images/panel_top.jpg" alt="" width="1002" height="18" /></td>
      </tr>
      <tr>
        <td id="panel_bg"><div id="container">
          <div class="page_heading">
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="6"><img src="images/heading_l.jpg" alt="" width="6" height="43" /></td>
                <td><h1>FAQ's</h1></td>
                <td width="6"><img src="images/heading_r.jpg" alt="" width="6" height="43" /></td>
              </tr>
            </table>
          </div>
          <div class="gap">&nbsp;</div>
          <div class="rows">
         <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['location']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['name'] = 'location';
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('arr')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['location']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['location']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['location']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['location']['total']);
?>
            <div class="<?php echo smarty_function_cycle(array('values'=>'panel_content2,panel_content'),$_smarty_tpl->smarty,$_smarty_tpl);?>
">
              <div>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><h1 class="heading1"><?php echo $_smarty_tpl->getVariable('arr')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location']['index']]['subject_name'];?>
</h1></td>
                    <td width="70"><img src="<?php echo @UPLOADS_SUBJECTS_URL;?>
<?php echo $_smarty_tpl->getVariable('arr')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location']['index']]['subject_thumbnail'];?>
" alt="" width="70" height="70" class="icon" /></td>
                  </tr>
                </table>
              </div>
              <div class="content">
              <?php $_smarty_tpl->tpl_vars['faq'] = new Smarty_variable($_smarty_tpl->getVariable('arr')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location']['index']]['faqs'], null, null);?>
              <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['location1']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['name'] = 'location1';
$_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('faq')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['location1']['total']);
?>
                <div class="faq_grid1"><?php echo smarty_modifier_stripslash($_smarty_tpl->getVariable('faq')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location1']['index']]['faq_question']);?>
</div>
                <div class="faq_grid2"><?php echo smarty_modifier_stripslash($_smarty_tpl->getVariable('faq')->value[$_smarty_tpl->getVariable('smarty')->value['section']['location1']['index']]['faq_answer']);?>
</div>
                 <?php endfor; endif; ?>
              </div>
            </div>
            <div class="gap">&nbsp;</div>
           <?php endfor; endif; ?>

          </div>
        </div></td>
      </tr>
      <tr>
        <td><img src="images/panel_btm.jpg" alt="" width="1002" height="18" /></td>
      </tr>
    </table>
 <?php $_template = new Smarty_Internal_Template("_footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
