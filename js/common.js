$(document).ready(function() {
    switch ($.cookie('lang')){ 
        case 'en':
            $('.ui.dropdown').dropdown('set selected', '<i class="us flag" value="en"></i>english');
            break;
        case 'jp':
            $('.ui.dropdown').dropdown('set selected', '<i class="jp flag" value="ja"></i>日本語');
            break;
        case 'vi':
            $('.ui.dropdown').dropdown('set selected', '<i class="vn flag" value="vi"></i>Tiếng Việt');
            break;
        default:
            $('.ui.dropdown').dropdown('set selected', '<i class="jp flag" value="ja"></i>日本語');
    }

    $('.ui.dropdown').dropdown({
        onChange: function(value, text, $selectedItem) {
            $.cookie('lang', $selectedItem.context.childNodes[0].getAttribute("value"),
            {
                expires: 90,  // expire: 30 days
                path: '/'     // cover: all pages
            });
            console.log(value);
            location.reload();
        },
    });
});
