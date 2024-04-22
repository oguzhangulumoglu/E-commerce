<?php
/* Smarty version 3.1.29, created on 2020-12-02 01:37:52
  from "/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fc6c5c083bc65_27588462',
  'file_dependency' => 
  array (
    '87762be812704b25e06f1b6dc78d8a1d690c9714' => 
    array (
      0 => '/home/admin/web/lastikkent.com.tr/public_html/application/views/admin/footer.tpl',
      1 => 1504791921,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc6c5c083bc65_27588462 ($_smarty_tpl) {
echo '<script'; ?>
 src="<?php echo base_url('assets/js/jquery-1.11.1.min.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo base_url('assets/js/bootstrap.min.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo base_url('assets/js/bootstrap-datepicker.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo base_url('assets/js/bootstrap-table.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo base_url('assets/js/bootstrap-datepicker.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo base_url('assets/js/jquery.upload.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo base_url('assets/js/script.js?v=_');
echo mktime();?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $('#calendar').datepicker();
    !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
<?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
