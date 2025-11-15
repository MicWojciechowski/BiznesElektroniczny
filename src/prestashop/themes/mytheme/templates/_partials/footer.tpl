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
<div class="container">
  <div class="row">
    {block name='hook_footer_before'}
      {hook h='displayFooterBefore'}
    {/block}
  </div>
</div>
<div class="footer-container">
  <div class="container">
    <div class="row">
      {block name='hook_footer'}
        {hook h='displayFooter'}
      {/block}
    </div>

    <div class="row">
	<section class="col-lg-3 block footer_block rt_fb_like_box">
    <div class="title_block">
        <div class="title_block_inner">Facebook</div>
        <div class="opener"><i class="fto-plus-2 plus_sign"></i><i class="fto-minus minus_sign"></i></div>
    </div>

    <div class="footer_block_content fb_like_box_warp">
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FFlyhousePL&amp;tabs=timeline&amp;width=270&amp;height=200" style="border: none;width: 270px;height: 200px;"></iframe>
        <div id="fb-root"></div>
        <script>
        //<![CDATA[
        
        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
         
        //]]>
        </script>
    </div>
</section>
    </div>

    <div class="row">
      {block name='hook_footer_after'}
        {hook h='displayFooterAfter'}
      {/block}
    </div>
    <div class="row">
      <div class="col-md-12">
        <p class="text-sm-center">
          {block name='copyright_link'}
		<div class="d-flex justify-content-between p-2 border">
		  <div class="text-decoration-none">© 2025 <span><a href="/">www.flyhouse.pl</a> | Wszystkie prawa zastrzeżone</span></div>
		  <div class="text-decoration-none"><span><a href="https://prestaguru.pl" target="_blank"> PrestaShop pomoc </a> 
| <a href="https://helpguru.eu/optymalizacja-dla-wyszukiwarek-seo" target="_blank">Pozycjonowanie SEO</a></span></div>
		</div>
          {/block}
        </p>
      </div>
    </div>
  </div>
</div>
