<div class="mt10">
    <div class="row mt10 footer-row">
        <div class="columns twelve">
            <p class="right"><a target="_blank" href="http://example.com">Your copyright &copy; <?php echo date('Y')?></a></p>
            <p><a href="<?php echo erLhcoreClassModelChatConfig::fetch('customer_site_url')->current_value?>"><?php echo htmlspecialchars(erLhcoreClassModelChatConfig::fetch('customer_company_name')->current_value)?></a></p>
        </div>
    </div>
</div>

<?php include_once(erLhcoreClassDesign::designtpl('pagelayouts/parts/page_footer_js.tpl.php'));?>
<?php include_once(erLhcoreClassDesign::designtpl('pagelayouts/parts/page_footer_js_extension_multiinclude.tpl.php'));?>

