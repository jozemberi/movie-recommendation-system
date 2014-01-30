{extends file='3_content_box_layout.tpl'}

{block name='language'} {config_load file={$lang_file}} {/block}

{block name='left-content-box'}

    {foreach from=$movies_info_left_box item=movie key=k}

        <article> <header> <h1> 
            <span class="movie-title">
                <a href="movie.php?id={$k}">
                    {if {$movie['Response']} == "False"} {$movies_basic_data[{$k}]} 
                    {else}{$movie['Title']} 
                    {/if} </a>
            </span>
                    {if {$movie['Response']} == "False"} {* nothing *} {else}
                    <span class="movie-year">
                        ({$movie['Year']})
                    </span>
                    {/if} </h1> </header>
                    
            {if {$movie['Response']} == "False"}
                 <content> {#no_movie_info_in_db#}
                     <a href="https://www.google.hr/search?q={$movies_basic_data[{$k}]}" target="_blank">
                         {#search_on_google#}</a> <br> {#open_anyway#} 
                     <a href="movie.php?id={$k}">{#more#}.</a>
                 </content>
             {else}    
                <footer>
                    <p class="movie-time">{$movie['Runtime']} {#separator#} {$movie['Genre']} {#separator#} 
                        <span class="movie-rating"> {$movie['imdbRating']} </span></p>
                </footer>
                <p>
                    {$movie['Plot']} <a href="movie.php?id={$k}">{#more#}</a>
                </p>
             {/if}
         </article>
            <hr>
        {/foreach} 
    {/block}

    {block name='center-content-box'}
        {foreach from=$movies_info_center_box item=movie key=k}

            <article> <header> <h1> <span class="movie-title">
                <a href="movie.php?id={$k}">
                    {if {$movie['Response']} == "False"} {$movies_basic_data[{$k}]} 
                    {else}{$movie['Title']} 
                    {/if} </a></span>
                    {if {$movie['Response']} == "False"}  {* nothing *} 
                        {else}
                    <span class="movie-year">
                        ({$movie['Year']})
                    </span>
                    {/if} </h1> </header>
                    
                    {if {$movie['Response']} == "False"}
                        <content> {#no_movie_info_in_db#}
                            <a href="https://www.google.hr/search?q={$movies_basic_data[{$k}]}" target="_blank">
                                {#search_on_google#}</a> <br> {#open_anyway#}
                            <a href="movie.php?id={$k}">{#more#}</a></content>
                        {else}    
                        <footer>
                            <p class="movie-time">{$movie['Runtime']} {#separator#} {$movie['Genre']} {#separator#} 
                                <span class="movie-rating"> {$movie['imdbRating']} </span></p>
                        </footer>
                        <p>
                            {$movie['Plot']} <a href="movie.php?id={$k}">{#more#}</a>
                        </p>
                    {/if}
                </article>
                <hr>
                {/foreach}

          {/block}

{block name='right-content-box'}
    <h1>{#recommendations#}</h1>
    <hr>
    {assign var="putDots" value=4} {assign var="border" value=2} 
    {assign var="curPage" value=$r_pagination.curPage} 
    {assign var="url" value=$r_pagination.url} 
    {assign var="totalPages" value=$r_pagination.totalPages} 

    {include file='paginate.tpl'}

    {include file='movie_recommendations_based_on_taste.tpl'}

    {include file='paginate.tpl'}

    <hr>

{/block}