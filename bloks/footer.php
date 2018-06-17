<footer>
		<div id="social">
	<a href="http://vk.com"  title="Группа Вк " target="_blank">	<img src="/img/vk.png" alt="Vk" title="Vk"></a>
	<a href="http://facebook.com" title="Группа Facebook" target="_blank"> <img src="/img/facebook.png" alt="Facebook" title="Facebook"></a>
	<a href="http://twitter.com" title="Группа Twitter" target="_blank"> <img src="/img/twitter.png" alt="Twitter" title="Twitter"></a>

	
	

			<div id="rights">
				Все права защищены &copy;  <?php echo date ('Y')?> 
			</div>
		</div>
		</footer>


<div class="in_top">
    <img src="http://mmetallurg.ru/assets/template/images/up.png" >  
</div>




<style>
.in_top{
    position: fixed;
    left: 0px;
    top: 0px;
    width: 70px;
    height: 100%;
    opacity: 0.5;
    filter: alpha(opacity=50);
    cursor: pointer;
    display: none;
}



@media(min-width: 375px) and (max-width: 1366px){
    .in_top{
    display: none !important;
}
}
.in_top:hover{
    background-color: rgba(0,0,0, 0.9880392);
    opacity: 0.2;
    filter: alpha(opacity=100);
}
.in_top img{
    display: block;
    width: 100px;
    margin-top: 400px;
    text-align: center;
    color: #45688E;
    font-weight: bold;
}

</style>



<script type="text/javascript" src="js/jquery-3.1.1.min.js"> </script>
<script>
// объявим переменные
var bottom_position = 0; // положение страницы
var flag_bottom = false; // флаг, для отображения кнопки "назад"
var flag_animate = false;// Флаг, определяющий, выполнение анимации
 
$(document).ready(function(){
    // клик по кнопке вверх/назад
    $('.in_top').click(function(){
        // поднимаем флаг, началась выполнениние анимации
        flag_animate = true;
        // если на данный момент кнопка "назад"
        if(flag_bottom){
            // то скролим страницу в нужное место
            $("body,html").animate({"scrollTop":bottom_position}, 300, function(){ 
                // опускаем влаг анимации, она закончилась
                flag_animate = false;
            });
            // меняем кнопку
            flag_bottom = false;
            $('.in_top .img').html('↑ Наверх ');
        }else{
            // если кнопка "вверх"
            $("body,html").animate({"scrollTop":0}, 300, function(){ 
                flag_animate = false;
            });     
            // запомним на сколько была прокручена страница
            bottom_position = $(window).scrollTop();
            // и зададим флаг, что нужно показать кнопку "назад"
            flag_bottom = true;
            $('.in_top .img').html('↓ Назад ');
        }
    });
  
    // делаем проверку при скролле
    $(window).scroll(function(event){
        var countScroll = $(window).scrollTop();
        // если прокрутили больше 100 пикселей и анимация не выполняется, то показываем кнопку
        if (countScroll > 2000 && !flag_animate){
            $('.in_top').show();
            if(flag_bottom){
                flag_bottom = false;
                $('.in_top img').html('↑ Наверх ');
            }
        // иначе прячем кнопку, если это не кнопка "назад"
        }else{
            if(!flag_bottom){
                $('.in_top').hide();
            }
        }
    });
});

</script>