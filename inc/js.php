<script src="../utils/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    // document.addEventListener('contextmenu', function (e) {
    //     e.preventDefault();
    // });
    document.addEventListener('selectstart', function (e) {
        e.preventDefault();
    });
    $(document).ready(function() {
        $(".subMenu-ul .subMenu-link").each(function(){
            $this = $(this);
            if($this[0].href==String(window.location) && $(window).width() > 1025){ 
                $(".subMenu-ul .subMenu-item").removeClass("menu-active");
                $this.parent().parent().parent().parent().addClass("menu-active");
                $this[0].style.cssText="background-color: #bc261a;color: #fff;"
                if ($this.parent().siblings('.subMenu-link').length > 0) {
                    $this.parent().siblings()[0].style.cssText="background-color: #bc261a;color: #fff;"
                }
            } 
        })
    })
</script>
<script type="text/javascript">
    $("#mobile-header").click(function(){
        $(".page-index").toggleClass('menu-open')
    })
    $('.has-sub').on('click', function(e){
    if($(window).width() < 1025) {
        // e.preventDefault();
        // var menuItem = $(this).parents('.menu-item');
        // var subMenu = menuItem.find('.subMenu');
        // var subMenuLength = menuItem.find('.subMenu-ul li').length;
        // var url = $(this).attr('href');
        // if (menuItem.hasClass('active')) {
        //     location.href = url;
        // } else {
        //     menuItem.addClass('active');
        //     subMenu.css({
        //         height: subMenuLength * 50
        //     });
        // }
    }
    });

    $(window).on("scroll",function(){
        if($(window).scrollTop()>0) {
            $(".header").addClass("fixed")
            $(".menu-link").addClass("active");
            $(".subMenu").addClass("active");
        }else{
            $(".header").removeClass("fixed");
            $(".menu-link").removeClass("active");
            $(".subMenu").removeClass("active");
        }
    })
    $(".menu-item").each(function(index){
        $(this).find('.menu-link').siblings('.menu-icon').click(function(e){
            $(this).children().toggleClass("icon-active")
            $(".subMenu").eq(index).toggleClass("subMenu-active");
            $(".subMenu-ul").eq(index).toggleClass("subMenu-ul-active");
        })
    })
    $(".subMenu-item").each(function(index){
        $(this).find('.menu-icon').click(function(e){
            e.preventDefault();
            $(this).children().toggleClass("icon-active")
            $(".thirdMenu-item").eq(index).toggleClass("subMenu-active");
        })
    })
        
</script>
<script type="text/javascript">
	function GetCurStyle(controller) {
		switch (controller.toLowerCase()) {
			case "home": $("#in0").addClass("menu-active"); break;
			case "about": $("#in01").addClass("menu-active"); break;
			case "products": $("#in02").addClass("menu-active"); break;
            case "markets": $("#in03").addClass("menu-active"); break;
			case "gallery": $("#in04").addClass("menu-active"); break;
			case "led-academy": $("#in05").addClass("menu-active"); break;
            case "news": $("#in06").addClass("menu-active"); break;
			case "contact": $("#in07").addClass("menu-active"); break;
			default: level1 = "";
		}
	}
    function BannerSlide(container,arrowClass) {
        var unsliders = $(container).unslider({
            fluid:true,
            delay: 5000,
        })
        var sliders = unsliders.data('unslider');
        
        $(arrowClass).click(function() {
            var fn = this.className.split(' ')[1];
            sliders[fn]();
        });

    }
</script>
<script>
    $(".target").click(function () {
    $("html, body").animate({scrollTop: $($(this).attr("href")).offset().top -100+ "px"}, 500);
        return false;
    });
    const messageLeft = $(".message-box").offset().left;
    const messageTop = $(".message-box").offset().top;
    const messageWidth = $(".content-container").innerWidth();
    $(window).scroll(function(){
        if($(window).scrollTop()>messageTop+300) {
            $(".message-box").addClass("fix");
            $(".message-box").css({
                // 'left':messageLeft + 60,
                // 'width':messageWidth*0.3,
            })
        }else{
            $(".message-box").removeClass("fix")
        }
    })
</script>
<script type="text/javascript">
    function scrollImg(boxclass, listclass) {
        $('.img-box').mouseover(function() {
    $('.img-box i').css('opacity', 1)
        }).mouseout(function() {
            $('.img-box i').css('opacity', 0)
        })
        var imgItemWidth = $(`${boxclass} .img`).outerWidth(true)
        var len = $(`${boxclass} .img`).length
        var imgMainWidth = imgItemWidth * len
        $(`${boxclass}`).css('width',Math.ceil(imgMainWidth));
        var num = 0
        $(`${listclass} li`).each(function(index) {
            $(this).mouseover(function() {
                num = index
                $(`${listclass} li`).removeClass('active')
                $(this).addClass('active')
                $(`${boxclass}`).css('left', -imgItemWidth*index)
            })
        })
        $('.left').click(function() {
            if (num === 0) {
                return
            }
            num --
            $(`${boxclass}`).css('left', -imgItemWidth*num)
            $(`${listclass} li`).removeClass('active')
            $(`${listclass} li`).eq(num).addClass('active')
        })
        $('.right').click(function() {
            if (num === 5) {
                return
            }
            num ++
            $(`${boxclass}`).css('left', -imgItemWidth*num)
            $(`${listclass} li`).removeClass('active')
            $(`${listclass} li`).eq(num).addClass('active')
        })
    }
    
</script>