$(document).ready(function() {
    function addShare() {
        var metaImgUrl = $("meta[property='og:image']").attr('content');
        var title = $('h1').text()
        var url = window.location.href
        const facebookShare = `https://www.facebook.com/sharer.php?u=${url}`
        const linkedinShare = `https://www.linkedin.com/shareArticle?mini=true&url=${url}&title=${title}&source=Cinstar LED`
        const pinterestShare = `https://pinterest.com/pin/create/bookmarklet/?media=${metaImgUrl}&url=${url}&description=${title}`
        const twitterShare = `http://twitter.com/share?url=${url}&text=${title}`
        $('.facebook').attr('href', facebookShare)
        $('.linkedin').attr('href', linkedinShare)
        $('.pinterest').attr('href', pinterestShare)
        $('.twitter').attr('href', twitterShare)
    }
    addShare()
});
