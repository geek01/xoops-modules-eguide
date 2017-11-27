<{if $event.eid}>
    <{include file="db:eguide_item.tpl"}>
<{else}>
    <h3 class="page-header"><{$smarty.const._MD_DETAIL}></h3>
<{/if}>
<{if $errors}>
    <div class="error">
        <{foreach item=msg from=$errors}>
            <{$msg}>
            <br>
        <{/foreach}>
    </div>
<{/if}>

<div class="evform">
    <{if $items}>
        <table cellspacing="1" cellpadding="2" border="0" class="outer table table-bordered table-striped">
            <{foreach key=lab item=fm from=$items name=item}>
                <{if preg_match("/^-/", $items[$smarty.foreach.item.iteration].label)}>
                    <{if empty($form_continue)}>
                        <tr class="<{cycle values="even, odd"}>">
                        <td class="head"><{$fm.label}></td>
                        <td>
                        <{assign var=form_continue value=1}>
                    <{/if}>
                    <{$fm.value}>
                <{else}>
                    <{if !empty($form_continue)}>
                        <{$fm.value}></td></tr>
                        <{assign var=form_continue value=0}>
                    <{else}>
                        <tr class="<{cycle values="even,odd"}>">
                            <td class="head"><{$fm.label}></td>
                            <td><{$fm.value}></td>
                        </tr>
                    <{/if}>
                <{/if}>
            <{/foreach}>
        </table>
    <{/if}>
    <div class="evtbl">
        <{if $values}>
            <table cellspacing="1" cellpadding="2" border="0" class="outer table table-bordered table-striped">
                <{foreach key=lab item=val from=$values}>
                    <tr class="<{cycle values="even,odd"}>">
                        <td class="head"><{$lab}></td>
                        <td><{$val|escape}></td>
                    </tr>
                <{/foreach}>
            </table>
        <{/if}>
        <div style="text-align: center;">
            <{if $cancel}>
                <table align="center">
                    <tr>
                        <td><{$submit}></td>
                        <td><{$cancel}></td>
                    </tr>
                </table>
            <{else}>
                <{$submit}>
            <{/if}>
        </div>
    </div>
</div>
