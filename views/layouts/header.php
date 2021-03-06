<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MaxZam shop</title>
<meta name="keywords" content="web store" />
<meta name="description" content="Web Store" />
<link href="/template/css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="/template/css/ddsmoothmenu.css" />

<script type="text/javascript" src="/template/js/jquery.min.js"></script>
<script type="text/javascript" src="/template/js/ddsmoothmenu.js"></script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<link rel="stylesheet" type="text/css" href="/template/css/styles.css" />
<script language="javascript" type="text/javascript" src="/template/scripts/mootools-1.2.1-core.js"></script>
<script language="javascript" type="text/javascript" src="/template/scripts/mootools-1.2-more.js"></script>
<script language="javascript" type="text/javascript" src="/template/scripts/slideitmoo-1.1.js"></script>
<script language="javascript" type="text/javascript">
	window.addEvents({
		'domready': function(){
			/* thumbnails example , div containers */
			new SlideItMoo({
						overallContainer: 'SlideItMoo_outer',
						elementScrolled: 'SlideItMoo_inner',
						thumbsContainer: 'SlideItMoo_items',		
						itemsVisible: 5,
						elemsSlide: 2,
						duration: 200,
						itemsSelector: '.SlideItMoo_element',
						itemWidth: 171,
						showControls:1});
		},
		
	});

	function clearText(field)
	{
		if (field.defaultValue == field.value) field.value = '';
		else if (field.value == '') field.value = field.defaultValue;
	}
</script>

</head>

<body id="home">

<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title"><h1><a href="/">shop</a></h1></div>
        
        <div id="header_right">
            <ul id="language">
            
               <?php if (User::isGuest()):?>
            <li><a href="/user/register">Регистрация</a></li>
            <li><a href="/user/login">Вход</a></li>
             <?php else:?>
            
            <li><a href="/user/logout">Выход</a></li>
            <li><a href="/cabinet">Аккаунт</a></li>
            <?php endif;?> 
            <li><a href="/cart">Корзина 
                    <span id="cart-count">(<?php echo Cart::countItems();?>)</span></a></li>
            </ul>
            <div class="cleaner"></div>
            <div id="templatemo_search">
                <form action="#" method="post">
                  <input type="text" value="Search" name="search" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="submit" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form>
            </div>
         </div> <!-- END -->
    </div> <!-- END of header -->
    

    <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="/" >Главная</a></li>
            <li><a href="/catalog">Каталог</a> 
            </li>
            <li><a href="/about">О магазине</a>
            </li>
            <li><a href="/contacts">Обратная связь</a></li>
            
        </ul>
        <br style="clear: left" />
    </div> <!-- end of templatemo_menu -->