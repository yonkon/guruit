
<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
wp_enqueue_script( 'jquery');
?>
<div id="ms_bgsize_fix">&nbsp;</div>
<div class="main_page content">
<!--	Коричневые кнопки-->
	<a class="main_page button" id="link_site_development" href="/web_development">Разработка сайтов</a>
	<a class="main_page button" id="link_web_design" href="/design">Веб-дизайн</a>
	<a class="main_page button" id="link_infographics" href="/infographics" >Инфографика</a>
	<a class="main_page button" id="link_seo" href="/seo">SEO</a>
	<a class="main_page button" id="link_portfolio" href="/portfolio">Портфолио</a>
	<a class="main_page button" id="link_contacts" href="/contacts" >Контакты</a>

	<a class="main_page button" id="link_make_order" >Заказать услугу</a>
<!--	Коричневые кнопки - КОНЕЦ -->
<!-- Синие кнопки -->
	<a class="main_page button" id="link_details" href="/about" >Подробнее</a>
<!-- Синие кнопки - КОНЕЦ -->
<!-- Ссылки-->
	<a class="main_page button" id="link_download" >Скачать</a>
	<a class="main_page button" id="link_portfolio_count" href="/portfolio">Работ в нашем <span class="underlined">портфолио</span></a>
<!-- Ссылки - КОНЕЦ -->
<!-- Невидимые кнопки-->
	<a class="main_page button"  id="link_email" >Почта</a>
	<a class="main_page button social"  id="link_vk"  >&nbsp;</a>
	<a class="main_page button social"  id="link_fb" >&nbsp;</a>
	<a class="main_page button social"  id="link_tw" >&nbsp;</a>
	<!-- Невидимые кнопки-->
    <!-- Серединка-->
  <div id="bulb_on"></div>
  <div id="bulb_off"></div>
    <div id="elips_on"></div>
    <div id="elips_off"></div>
  <div id="lamp_on"></div>
  <div id="lamp_off"></div>
  <div id="sifri"></div>

</div>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/lamp_switcher.js"></script>

<!--<script type="javascript">
    function disableSelection(target){
        if (typeof target.onselectstart!="undefined") // для IE:
            target.onselectstart=function(){return false}
        else if (typeof target.style.MozUserSelect!="undefined") //для Firefox:
            target.style.MozUserSelect="none"
        else // для всех других (типа Оперы):
            target.onmousedown=function(){return false}
        target.style.cursor = "default"
    }</script>
<script type="javascript">  disableSelection(document.getElementById("link_contacts")); </script>-->