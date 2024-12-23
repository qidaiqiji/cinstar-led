$(document).ready(function() {
    var url = window.location.href
    function createMeta() {
        const imgSrc = $('.img-box img')[0].src || ''
        var description = ''
        $('meta').each(function () {
            const name = $(this).attr('name');
            if (name === "description") {
                const content = $(this).attr('content');
                description = content
            }
        });
        const titleContent = $('title').text();
        $('<meta>', {
            property: 'og:url',
            content: url
        }).appendTo('head');
        $('<meta>', {
            property: 'og:title',
            content: titleContent,
        }).appendTo('head');
        $('<meta>', {
            property: 'og:description',
            content: description,
        }).appendTo('head');
        $('<meta>', {
            property: 'og:image',
            content: imgSrc
        }).appendTo('head');
        addShare()
    }
    function addShare() {
        var metaImgUrl = $("meta[property='og:image']").attr('content');
        var title = $('h1').text()
        const facebookShare = `https://www.facebook.com/sharer.php?u=${url}`
        const linkedinShare = `https://www.linkedin.com/shareArticle?mini=true&url=${url}&title=${title}&source=Cinstar LED`
        const pinterestShare = `https://pinterest.com/pin/create/bookmarklet/?media=${metaImgUrl}&url=${url}&description=${title}`
        const twitterShare = `http://twitter.com/share?url=${url}&text=${title}&hashtags=Blog`
        $('.facebook').attr('href', facebookShare)
        $('.linkedin').attr('href', linkedinShare)
        $('.pinterest').attr('href', pinterestShare)
        $('.twitter').attr('href', twitterShare)
    }
    createMeta()
});
