<div id="materials-search" class="search-area">

    <div id="search-tabs" class="ui-tabs" style="display: none;">
        <ul class="ui-tabs-nav">
            <li><a href="#eds">ArticlesPlus</a></li>
            <li><a href="#alice">ALICE Catalog</a></li>
            <li><a href="#erm">Databases</a></li>
            <li><a href="#cr">Course Reserves</a></li>
            <li><a href="#scg">Subject & Course Guides</a></li>
        </ul>

        <div class="searchtab" id="eds" class="ui-tabs-hide ui-tabs-panel">
            <!-- EBSCOhost Custom Search Box Begins -->
            <form id="edssearch" action="" onsubmit="return ebscoHostSearchGo(this);" method="post">
                <input id="ebscohostwindow" name="ebscohostwindow" type="hidden" value="1" />
                <input id="ebscohosturl" name="ebscohosturl" type="hidden" value="http://search.ebscohost.com/login.aspx?direct=true&site=eds-live&scope=site&type=0&custid=s8447892&groupid=main&profid=eds&mode=and&cli0=FT1&clv0=Y&authtype=ip,guest" />
                <input id="ebscohostsearchsrc" name="ebscohostsearchsrc" type="hidden" value="db" />
                <input id="ebscohostsearchmode" name="ebscohostsearchmode" type="hidden" value="+AND+" />
                <input id="ebscohostkeywords" name="ebscohostkeywords" type="hidden" value="" />
                <div>
                    <h2 class="searchtext">Find articles and more</h2><br/>
                    <input class="searchinput" id="ebscohostsearchtext" name="ebscohostsearchtext" type="text" />
                    <input class="searchsubmit" type="submit" value="Search" />
                </div>
                <a class="searchlink" href="http://search.ebscohost.com/login.aspx?direct=true&site=eds-live&scope=site&type=1&custid=s8447892&groupid=main&profid=eds&mode=and&cli0=FT1&clv0=Y&authtype=ip,guest" target="_blank">Advanced Search</a>
            </form>
            <!-- EBSCOhost Custom Search Box Ends -->
        </div>

        <div class="searchtab" id="alice" class="ui-tabs-hide ui-tabs-panel">
            <form id="alicesearch" name="alicesearch" action="" onsubmit="window.open(AliceURL()); return false;"  method="post">
                <h2 class="searchtext">Find books, journal titles, videos, music, and more</h2><br/>
                <select id="aliceselect" style="width:120px;">
                    <option value="k">Keyword</option>
                    <option value="t">Title</option>
                    <option value="pt">- Periodical Title</option>
                    <option value="vt">- Video Title</option>
                    <option value="a">Author</option>
                </select>
                <input class="searchinput" type="text" value="" name="SEARCH" style="width: 375px;">
                <input class="searchsubmit" type="submit" value="Search">
                <a class="searchlink" href="http://alice.library.ohiou.edu/search/X#" target="_blank">Advanced Search</a>
            </form>
        </div>
    
        <div class="searchtab" id="erm" class="ui-tabs-hide ui-tabs-panel">
            <form id="ermsearch" name="ermsearch" action="" onsubmit="window.open(ErmURL()); return false;"  method="post">
                <h2 class="searchtext">Search for Databases by Name</h2><br/>
                <input class="searchinput" type="text" value="" name="SEARCH">
                <input class="searchsubmit" type="submit" value="Search">
                <a class="searchlink" href="http://alice.library.ohiou.edu/search/e#" target="_blank">Browse by Subject</a>
            </form>
        </div>

        <div class="searchtab" id="cr" class="ui-tabs-hide ui-tabs-panel">
            <form id="crsearch" name="crsearch" action="" onsubmit="window.open(ReservesURL()); return false;" method="post">
                <h2 class="searchtext">Find materials by course or instructor</h2><br/>
                <select id="crselect" style="width: 120px;">
                    <option value="r">Course</option>
                    <option value="p">Instructor</option>
                </select>
                <input class="searchinput" type="text" value="" name="SEARCH" style="width: 370px;">
                <input class="searchsubmit" type="submit" value="Search">
            </form>
        </div>

        <div class="searchtab" id="scg" class="ui-tabs-hide ui-tabs-panel">
            <form id="scgsearch" name="scgsearch" action="" onsubmit="window.open(LibGuidesURL()); return false;" method="post">
                <h2 class="searchtext">Find subject and course-specific research guides</h2><br/>
                <input class="searchinput" type="text" value="" name="SEARCH">
                <input class="searchsubmit" type="submit" value="Search">
            </form>
        </div>

    </div>

</div>

