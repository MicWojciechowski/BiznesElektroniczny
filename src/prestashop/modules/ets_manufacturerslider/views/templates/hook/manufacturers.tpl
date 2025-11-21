{**
 * Copyright ETS Software Technology Co., Ltd
 *
 * NOTICE OF LICENSE
 *
 * This file is not open source! Each license that you purchased is only available for 1 website only.
 * If you want to use this file on more websites (or projects), you need to purchase additional licenses.
 * You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future.
 *
 * @author ETS Software Technology Co., Ltd
 * @copyright  ETS Software Technology Co., Ltd
 * @license    Valid for 1 website (or project) for each purchase of license
*}
{if $manufacturers}
    <div id="ybc-mnf-block">
        <h4 class="h2 ybc-mnf-block-title text-uppercase"><span class="title_cat">{$YBC_MF_TITLE|escape:'htmlall':'UTF-8'}</span></h4>
        <ul id="ybc-mnf-block-ul" class="owl-carousel">
        	{foreach from=$manufacturers item=manufacturer}
        		<li class="ybc-mnf-block-li{if $YBC_MF_SHOW_NAME} ybc_mnf_showname{/if}">
                    <a class="ybc-mnf-block-a-img" href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)|escape:'html':'UTF-8'}">
                        <img src="{$manufacturer.image nofilter}" title="{$manufacturer.name|escape:'html':'UTF-8'}" alt="{$manufacturer.name|escape:'html':'UTF-8'}"/>
                    </a>
                    {if $YBC_MF_SHOW_NAME}
                        <a class="ybc-mnf-block-a-name" href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)|escape:'html':'UTF-8'}">
                            {$manufacturer.name|escape:'html':'UTF-8'}
                        </a>
                    {/if}
                </li>
        	{/foreach}
        </ul>
    </div>
{/if}
<script type="text/javascript">
    var YBC_MF_PER_ROW_DESKTOP = {$YBC_MF_PER_ROW_DESKTOP|intval};
    var YBC_MF_PER_ROW_MOBILE = {$YBC_MF_PER_ROW_MOBILE|intval};
    var YBC_MF_PER_ROW_TABLET = {$YBC_MF_PER_ROW_TABLET|intval};
    var YBC_MF_SHOW_NAV = {if $YBC_MF_SHOW_NAV}true{else}false{/if};
    var YBC_MF_AUTO_PLAY = {if $YBC_MF_AUTO_PLAY}true{else}false{/if};
    var YBC_MF_PAUSE = {if $YBC_MF_PAUSE}true{else}false{/if};
    var YBC_MF_SPEED = {$YBC_MF_SPEED|intval};
</script>