<script type="text/javascript">
// 　　document.documentElement.style.fontSize = document.documentElement.clientWidth / 750*100 + 'px';
    var setFontSize = function(){
        var deviceWidth = document.documentElement.clientWidth;
        if (deviceWidth > 992) {
            document.documentElement.style.fontSize = deviceWidth / 1920*100 +'px';
            console.log('abc', deviceWidth, document.documentElement.style.fontSize)
            // console.log('aaa', deviceWidtha, document.documentElement.style.fontSize)
        } else {
            document.documentElement.style.fontSize = deviceWidth / 750*100 +'px';
            console.log('ppp', deviceWidth, document.documentElement.style.fontSize)
        }
        // document.documentElement.style.fontSize = deviceWidth / 1920*100 +'px';
        
    }
    setFontSize();
    window.addEventListener('resize', setFontSize);
</script>