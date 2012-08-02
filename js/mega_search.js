jQuery(document).ready(function($) {
    /* setup tabs */
    $("#search-tabs").tabs({show: tab_select_focus});
    $("#search-tabs").show();
    // initial focus
    $('.searchinput').focus();

    var term = $('#searchterm').val();

    if(! (typeof term === 'undefined')) {
        $('.searchinput').val(term);
    }
    
    
    /* RETRY links from search pages */

    $('#retry-alice').click(function() {
        $('#alicesearch').submit();
        return false;
    });

    $('#retry-eds').click(function() {
        $('#edssearch').submit();
        return false;
    });

    function tab_select_focus(event, ui) {
       var input = $(ui.panel).find('.searchinput');
       $(input).focus();
    }

    /* Info Hover PopUp */
    $('.info-hover').hover(
        function(e) {
            var text = $(this).siblings('.info-text');

            
            $(text).css('top', e.pageY - $(this).offset().top);
            $(text).css('left', e.pageX - $(this).offset().left + $(text).width());

            left = $(text).css('left');
            $(text).fadeIn(); 
        },
        function(e) {
           $(this).siblings('.info-text').fadeOut();
        }        
    );

});

function cleanString(str) {
    var newString="";
    for (i=0; i < str.length; i++)
    {
        if (str.charAt(i)==" ")
        { newString+="+"; }
        else if (str.charAt(i)=="/")
        { newString+="%2F";}
        else if (str.charAt(i)=="\\")
        { newString+="%5c"; }
        else
        { newString+=str.charAt(i); }
    }
    return newString; 
}

function AliceURL()
{
    var keywordURL="http://alice.library.ohiou.edu/search/X?SEARCH=(";
    var titleURL="http://alice.library.ohiou.edu/search/t?SEARCH=";
    var authorURL="http://alice.library.ohiou.edu/search/a?SEARCH=";

    
    var keywordSuffix=")&searchscope=7&SORT=D";
    var titleSuffix="&submit=Search&searchscope=7";
    var pTitleSuffix="&submit=Search&searchscope=1";
    var vTitleSuffix="&submit=Search&searchscope=2";
    var authorSuffix="&submit=Search&searchscope=7";

    var searchString = cleanString(document.alicesearch.SEARCH.value);

    var type = document.alicesearch.aliceselect.value;

    switch(type) {
        case "t":
            return titleURL + searchString + titleSuffix;
            break;
        case "pt":
            return titleURL + searchString + pTitleSuffix;
            break;
        case "vt":
            return titleURL + searchString + vTitleSuffix;
            break;
        case "a":
            return authorURL + searchString + authorSuffix;
            break;
        default:
            return keywordURL + searchString + keywordSuffix;
            break;
    }

}

function ErmURL()
{
    var baseURL="http://alice.library.ohiou.edu/search/X?SEARCH=(";
    var suffixURL=" and rectype:rectypee)";
    var searchString = cleanString(document.ermsearch.SEARCH.value);
    return baseURL + searchString + suffixURL;
}

function ReservesURL() {
    var baseURL="http://alice.library.ohiou.edu/search/" + document.crsearch.crselect.value + "?SEARCH=";
    var searchString = cleanString(document.crsearch.SEARCH.value);
    return baseURL + searchString;    
}

function LibGuidesURL() {
    var baseURL="http://libguides.library.ohiou.edu/search.php?iid=578&c=0&search=";
    var searchString = cleanString(document.scgsearch.SEARCH.value);
    return baseURL + searchString;
}
