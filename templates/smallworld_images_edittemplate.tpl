<div id="smallworld_edit_imageform" class="smallworld_content" title='<{$smarty.const._SMALLWORLD_IMAGE_EDIT_TITLE}>'>
    <{if $xoops_isuser}>
    <{if $check >= 2}>
    <form id="smallworld_edit_imgform" action="javascript: void(0)" method="post">
        <table class="smallworld_table" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td><label for="images"></label>
                    <{section name=i loop=$editimages}>
                    <{$editimages[i]}>
                    <{/section}>
                </td>
            </tr>
        </table>
        <br>
        <button class="smallworld_imagesavebtn" id="smallworld_edit_imagesavebtn"><{$smarty.const._SMALLWORLD_SUBMIT}></button>
    </form>
    <{/if}>
    <{/if}>
</div>
