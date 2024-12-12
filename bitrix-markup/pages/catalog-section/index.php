<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Catalog section");

\Bitrix\Main\UI\Extension::load("local.vue-apps.catalog-section");
?>

<div id="catalogSection"></div>

<script src="/markup/pages/catalog-section/bx.ajax.runAction.js"></script>

<script>
	const catalogsection = new BX.Seller2.CatalogSection('#catalogSection', {
		'userid': '19891',
		'sessid': '<?=bitrix_sessid()?>',
		'signedParameters': 'YTowOnt9.9142992288be2a04123a66bfa996e850e694e8c6886728187ec9b5d8dc821aad',
	});
	catalogsection.run();
</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>