
<div id="page-footer-box">
    <div id="footer-content-box">
        <div id="footer-content-box-left">
            {assign var="putDots" value=7} {assign var="border" value=6} 
            {assign var="curPage" value=$pagination.curPage} 
            {assign var="url" value=$pagination.url} 
            {assign var="totalPages" value=$pagination.totalPages} 

            {include file='paginate.tpl'}

        </div>
        <div id="footer-lang-box">
            <p style="text-align: center;"> 
                &copy;
                <a href='https://github.com/jozemberi' target='_blank'>
                    J. Žemberi
                </a>  | 

                <a href='http://www.best.hr/code-challenge/v4.0/' target='_blank'>
                    BCC 4.0
                </a> |
                {if {$lang} == "hr"}
                    HR | <a href='{$change_lang_url}&amp;lang=en'>EN</a>
                {else}
                    <a href='{$change_lang_url}&amp;lang=hr'>HR</a> | EN
                {/if}                 
                |
                <a href='http://validator.w3.org/check?uri=referer' target='_blank'>
                    HTML5
                </a> |
                <a href='http://jigsaw.w3.org/css-validator/check/referer' target='_blank'>
                    CSS </a> | 
                <a href='doc.php' target='_blank'> doc</a> |
                <button onclick="showLikedMovies();">&hearts;</button>

            </p>
        </div> 
    </div>

    {literal}
        <script>
            function showLikedMovies()
            {
                alert("{/literal}{#movie_you_liked#}:\n{foreach from=$liked_movies item=movie key=k}  id: {$k}; {#name#}: {$movies_basic_data[{$k}]}\n{/foreach} {literal}");
                    }
        </script>
    {/literal}
</div>

