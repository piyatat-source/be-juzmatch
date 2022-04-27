<?php

namespace PHPMaker2022\juzmatch;

// Page object
$ReasonTerminateContractAdd = &$Page;
?>
<script>
var currentTable = <?= JsonEncode($Page->toClientVar()) ?>;
ew.deepAssign(ew.vars, { tables: { reason_terminate_contract: currentTable } });
var currentForm, currentPageID;
var freason_terminate_contractadd;
loadjs.ready(["wrapper", "head"], function () {
    var $ = jQuery;
    // Form object
    freason_terminate_contractadd = new ew.Form("freason_terminate_contractadd", "add");
    currentPageID = ew.PAGE_ID = "add";
    currentForm = freason_terminate_contractadd;

    // Add fields
    var fields = currentTable.fields;
    freason_terminate_contractadd.addFields([
        ["reason_text", [fields.reason_text.visible && fields.reason_text.required ? ew.Validators.required(fields.reason_text.caption) : null], fields.reason_text.isInvalid]
    ]);

    // Form_CustomValidate
    freason_terminate_contractadd.customValidate = function(fobj) { // DO NOT CHANGE THIS LINE!
        // Your custom validation code here, return false if invalid.
        return true;
    }

    // Use JavaScript validation or not
    freason_terminate_contractadd.validateRequired = ew.CLIENT_VALIDATE;

    // Dynamic selection lists
    loadjs.done("freason_terminate_contractadd");
});
</script>
<script>
loadjs.ready("head", function () {
    // Write your table-specific client script here, no need to add script tags.
});
</script>
<?php $Page->showPageHeader(); ?>
<?php
$Page->showMessage();
?>
<form name="freason_terminate_contractadd" id="freason_terminate_contractadd" class="<?= $Page->FormClassName ?>" action="<?= CurrentPageUrl(false) ?>" method="post">
<?php if (Config("CHECK_TOKEN")) { ?>
<input type="hidden" name="<?= $TokenNameKey ?>" value="<?= $TokenName ?>"><!-- CSRF token name -->
<input type="hidden" name="<?= $TokenValueKey ?>" value="<?= $TokenValue ?>"><!-- CSRF token value -->
<?php } ?>
<input type="hidden" name="t" value="reason_terminate_contract">
<input type="hidden" name="action" id="action" value="insert">
<input type="hidden" name="modal" value="<?= (int)$Page->IsModal ?>">
<input type="hidden" name="<?= $Page->OldKeyName ?>" value="<?= $Page->OldKey ?>">
<div class="ew-add-div"><!-- page* -->
<?php if ($Page->reason_text->Visible) { // reason_text ?>
    <div id="r_reason_text"<?= $Page->reason_text->rowAttributes() ?>>
        <label id="elh_reason_terminate_contract_reason_text" for="x_reason_text" class="<?= $Page->LeftColumnClass ?>"><?= $Page->reason_text->caption() ?><?= $Page->reason_text->Required ? $Language->phrase("FieldRequiredIndicator") : "" ?></label>
        <div class="<?= $Page->RightColumnClass ?>"><div<?= $Page->reason_text->cellAttributes() ?>>
<span id="el_reason_terminate_contract_reason_text">
<textarea data-table="reason_terminate_contract" data-field="x_reason_text" name="x_reason_text" id="x_reason_text" cols="35" rows="4" placeholder="<?= HtmlEncode($Page->reason_text->getPlaceHolder()) ?>"<?= $Page->reason_text->editAttributes() ?> aria-describedby="x_reason_text_help"><?= $Page->reason_text->EditValue ?></textarea>
<?= $Page->reason_text->getCustomMessage() ?>
<div class="invalid-feedback"><?= $Page->reason_text->getErrorMessage() ?></div>
</span>
</div></div>
    </div>
<?php } ?>
</div><!-- /page* -->
<?php if (!$Page->IsModal) { ?>
<div class="row"><!-- buttons .row -->
    <div class="<?= $Page->OffsetColumnClass ?>"><!-- buttons offset -->
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?= $Language->phrase("AddBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?= HtmlEncode(GetUrl($Page->getReturnUrl())) ?>"><?= $Language->phrase("CancelBtn") ?></button>
    </div><!-- /buttons offset -->
</div><!-- /buttons .row -->
<?php } ?>
</form>
<?php
$Page->showPageFooter();
echo GetDebugMessage();
?>
<script>
// Field event handlers
loadjs.ready("head", function() {
    ew.addEventHandlers("reason_terminate_contract");
});
</script>
<script>
loadjs.ready("load", function () {
    // Write your table-specific startup script here, no need to add script tags.
});
</script>
