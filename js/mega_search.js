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
    var allURL="http://alice.library.ohiou.edu/search/X?SEARCH=";
    var vidURL="http://alice.library.ohiou.edu/search~S2/X?SEARCH=";
    
    var allSuffix="&l=&m=&b=&searchscope=7&SORT=R&p=&Da=&Db=";
    var vidSuffix="&searchscope=2&SORT=D";

    var searchString = cleanString(document.alicesearch.SEARCH.value);

    if(document.alicesearch.aliceselect.value == "v") {
        return vidURL + searchString + vidSuffix;
    } else {
        return allURL + searchString + allSuffix;
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
