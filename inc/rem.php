<script>
// 　　document.documentElement.style.fontSize = document.documentElement.clientWidth / 750*100 + 'px';
    var setFontSize = function(){
        var deviceWidth = document.documentElement.clientWidth;
        if (deviceWidth > 991) {
            document.documentElement.style.fontSize = deviceWidth / 1920*100 +'px';
        } else {
            document.documentElement.style.fontSize = deviceWidth / 750*100 +'px';
        }
    }
    setFontSize();
    window.addEventListener('resize', setFontSize);
</script>