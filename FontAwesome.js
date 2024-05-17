function getHTML(icon)
{
    let html = icon.outerHTML;
    html = html.split('>')[0]);}
    html +=">"+icon.nextSibling.data+"</i>";}
    html.replace('\n      ','');
    return html;
}

$(document).ready(function{

$('.BtnClass').off('click').on('click',
function(){
    $('#detailsFont').toggle();
    $('#detailsFont .modal-body').html("fa fa-fw");
});

$('.BtnHTML').off('click').on('click',
function(){
    let icon = this.closest('i');
    let html = getHTML(icon);
    $('#detailsFont').toggle();
    $('#detailsFont .modal-body').html(html);
});

});

);