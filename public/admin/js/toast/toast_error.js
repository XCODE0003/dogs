function toast(heading, text, icon)
{
    $.toast({
        heading: heading,
        text: text, //текст
        hideAfter: 10000, //время скрытия
        stack: 4, //макс количество
        position: 'top-right', //позиция
        icon: icon,
        loaderBg: '#0cc280',
        bgColor: (icon == 'success' ? "#076f49" : (icon == 'error' ? "#ff0000ab" : "#22a9a9")),
        // textColor:
    })
}