{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
<div id="_desktop_user_info">
  <div class="user-info">
    {if $logged}
      <a
        class="logout hidden-sm-down"
        rel="nofollow"
      >
        <svg xmlns="http://www.w3.org/2000/svg" height="100px" viewBox="0 -960 960 960" width="100px" fill="#000000"><path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z"/></svg>
      </a>
      <a
        class="account"
        href="{$urls.pages.my_account}"
        title="{l s='View my customer account' d='Shop.Theme.Customeraccount'}"
        rel="nofollow"
      >
	<p> MOJE KONTO </p>
      </a>
	      <div class="dropdown_list">
	  <ul class="dropdown_list_ul dropdown_box custom_links_list">
	    <li class="line_name">
	      <span>Witaj {$customer.firstname}!</span>
	    </li>
	    <li>
	      <a href="https://localhost:8443/moje-konto" title="Przejdź do swojego konta w sklepie" rel="nofollow" class="dropdown_list_item">Moje konto</a>
	    </li>
	    <li>
	      <a href="https://flyhouse.pl/pl/moje-dane" rel="nofollow" class="dropdown_list_item" title="Moje dane">Moje dane</a>
	    </li>
	    <li>
	      <a href="https://localhost:8443/moje-adresy" rel="nofollow" class="dropdown_list_item" title="Moje adresy">Moje adresy</a>
	    </li>
	    <li>
	      <a href="https://localhost:8443/historia-zamowien" rel="nofollow" class="dropdown_list_item" title="Moje zamówienia">Moje zamówienia</a>
	    </li>
	    <li>
	      <a href="https://flyhouse.pl/pl/zwroty-produktow" rel="nofollow" class="dropdown_list_item" title="Zwroty produktów">Zwroty produktów</a>
	    </li>
	    <li>
	      <a href="https://flyhouse.pl/pl/korekty-platnosci" rel="nofollow" class="dropdown_list_item" title="Korekty płatności">Korekty płatności</a>
	    </li>
	    <li>
	      <a href="https://flyhouse.pl/pl/ulubione-produkty" rel="nofollow" class="dropdown_list_item" title="Ulubione produkty">Ulubione produkty</a>
	    </li>
	    <li>
	      <a href="//flyhouse.pl/pl/module/ps_emailalerts/account" rel="nofollow" class="dropdown_list_item" title="Moje powiadomienia">Moje powiadomienia</a>
	    </li>
	    <li>
	      <a href="https://flyhouse.pl/pl/moje-zgody-rodo" rel="nofollow" class="dropdown_list_item" title="Moje zgody">Moje zgody</a>
	    </li>
	    <li class="logoff_last">
	      <a href="https://localhost:8443/?mylogout=" rel="nofollow" class="dropdown_list_item " title="Wyloguj się ze swojego konta">
	        <i class="fto-logout-1"></i> Wyloguj się </a>
	    </li>
	  </ul>
	</div>
    {else}
      <a
        href="{$urls.pages.my_account}"
        title="{l s='Log in to your customer account' d='Shop.Theme.Customeraccount'}"
        rel="nofollow"
      >
        <i class="material-icons">&#xE7FF;</i>
        <span class="hidden-sm-down">{l s='Sign in' d='Shop.Theme.Actions'}</span>
      </a>
	<div class="dropdown_list">
	  <div class="dropdown_box login_from_block">
	    <div class="sidebar_login_form">
	      <h5>Witaj, jeśli masz już konto, zaloguj się.</h5>
	      <form action="https://localhost:8443/pl/logowanie" method="post">
	        <div class="form_content">
	          <input type="hidden" name="back" value="my-account">
	          <div class="form-group form-group-small    animation_placeholder placeholder_error_5 fields_border_2 email_style">
	            <div class="">
	              <input class="form-control" name="email" type="email" value="" required="" data-ddg-inputtype="identities.emailAddress" data-ddg-autofill="true" style="background-size: auto 24px !important; background-position: right center !important; background-repeat: no-repeat !important; background-origin: content-box !important; background-image: url(&quot;chrome-extension://bkdgflcldnnnapblkhphbgpggdiikppg/img/logo-small.svg&quot;) !important; transition: background !important;">
	              <label class=" required form-control-placeholder"> E-mail <span>...</span>
	              </label>
	              <span class="has_error_icon"></span>
	              <div class="help-block help-block-for-js alert alert-danger">
	                <ul class="steco_mb_0">
	                  <li> Błędnie wypełnione pole. </li>
	                </ul>
	              </div>
	            </div>
	          </div>
	          <div class="form-group form-group-small    animation_placeholder placeholder_error_5 fields_border_2 password_style st-not-empty">
	            <div class="">
	              <div class="input-group">
	                <input class="form-control js-child-focus js-visible-password" name="password" type="password" value="" required="" data-ddg-inputtype="credentials.password.new">
	                <label class=" required form-control-placeholder"> Hasło <span>...</span>
	                </label>
	                <span class="has_error_icon"></span>
	                <span class="input-group-btn">
	                  <button class="btn show_password" type="button" data-action="show-password" data-text-show="Pokaż" data-text-hide="Ukryj">
	                    <i class="fto-eye-off"></i>
	                  </button>
	                </span>
	              </div>
	              <div class="help-block help-block-for-js alert alert-danger">
	                <ul class="steco_mb_0">
	                  <li> Błędnie wypełnione pole. </li>
	                </ul>
	              </div>
	            </div>
	          </div>
	          <div class="form-group forgot-password">
	            <a href="https://localhost:8443/pl/odzyskiwanie-hasla" rel="nofollow" title="Nie pamiętasz hasła?"> Nie pamiętasz hasła? </a>
	          </div>
	        </div>
	        <div class="form-footer">
	          <input type="hidden" name="submitLogin" value="1">
	          <button class="btn btn-primary btn-spin btn-full-width" data-link-action="sign-in" type="submit"> Zaloguj się </button>
	        </div>
	      </form>
	    </div>
	    <div class="sidebar_auth_form">
	      <h5>Jesteś nowym użytkownikiem?</h5>
	      <a class="btn btn-border btn-full-width btn_arrow black_arrow btn-spin js-submit-active" href="https://localhost:8443/pl/logowanie?create_account=1" rel="nofollow" title="Zarejestruj się"> Zarejestruj się </a>
	    </div>
	  </div>
	</div>
    {/if}
  </div>
</div>
