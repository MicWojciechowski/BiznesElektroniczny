{*
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
{if isset($arr) && count($arr) && isset($position) && count($position)}
    <ul class="ets-list-hook">
        {foreach from=$position item='p'}
            {if in_array($p.id, $arr)}
                <li>{$p.name|escape:'html':'UTF-8'}<span>{$p.hook|escape:'html':'UTF-8'}</span></li>
            {/if}
        {/foreach}
    </ul>
{/if}