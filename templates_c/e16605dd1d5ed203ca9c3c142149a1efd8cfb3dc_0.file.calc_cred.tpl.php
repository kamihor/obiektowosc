<?php
/* Smarty version 3.1.39, created on 2021-08-17 20:59:38
  from 'D:\xampp\htdocs\obiektowosc\app\calc_cred.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611c071a7d0ec5_48019893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e16605dd1d5ed203ca9c3c142149a1efd8cfb3dc' => 
    array (
      0 => 'D:\\xampp\\htdocs\\obiektowosc\\app\\calc_cred.tpl',
      1 => 1629223847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611c071a7d0ec5_48019893 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_222431494611c071a653d48_54695833', 'footer');
?>



<h2 class="content-head is-center">Prosty kalkulator</h2>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1655505972611c071a6552e2_41146547', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_445899575611c071a7d0745_65186777', 'footer');
?>


<!-- Scripts -->
<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_222431494611c071a653d48_54695833 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_222431494611c071a653d48_54695833',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Autor: Kamil Horzela<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1655505972611c071a6552e2_41146547 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1655505972611c071a6552e2_41146547',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="main" class="wrapper style1">
    <div class="container">
        <section>
            <form method="post" action="#">
                <div class="form">
                    <input type="text" name="value" id="value" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->value;?>
" placeholder="Kwota" />
                    <input type="text"  name="years" id="years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->years;?>
" placeholder="Okres spłaty w latach" />
                    <input type="text"  name="percent" id="percent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->percent;?>
" placeholder="Oprocentowanie" />
                    <ul class="actions">
                        <li><input style="margin-top: 1em;" type="submit" value="Oblicz" class="primary" /></li>
                    </ul>
                </div>
            </form>

            
            <?php if ($_smarty_tpl->tpl_vars['messages']->value->isError()) {?>
                <ol class="messbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
            <ul class="alt">
                <li> <?php echo $_smarty_tpl->tpl_vars['err']->value;?>
 </li>
            </ul>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>
            <?php }?>


        
                <?php if ($_smarty_tpl->tpl_vars['messages']->value->isInfo()) {?>
                <ol class="messbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
            <ul class="alt">
                <li> <?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
 </li>
            </ul>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>
            <?php }?>



            <?php if ((isset($_smarty_tpl->tpl_vars['result']->value->result))) {?>
                <ol class="messbox">
            <h4>Miesięczna rata</h4>
            <p class="res">
                <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['result']->value->result);?>

                zł
            </p>
            </ol>
            <?php }?>     


        </section>
    </div>
</div>
<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_445899575611c071a7d0745_65186777 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_445899575611c071a7d0745_65186777',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- Footer -->
<footer id="footer">
    <ul class="copyright">
        <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
    </ul>
</footer>

<?php
}
}
/* {/block 'footer'} */
}
