{extends file='2_content_box_layout.tpl'}

{block name='language'} {config_load file={$lang_file}} {/block}

{* block name='page_header'} {include file='page_header.tpl'}  {/block *}

{block name='left-content-box'}
    <a href="index.php"> {#go_home#} </a>
    <article>
        <header>
            <h1> <span class="movie-title">
                    {if {$movie['Response']} == "False"} {$movie_title} 
                    {else}{$movie['Title']} 
                    {/if} </span>
                    {if {$movie['Response']} == "False"}  {else}
                    <span class="movie-year">
                        ({$movie['Year']})
                    </span>
                {/if}
            </h1>
        </header>
        {if {$movie['Response']} == "False"}
             
                    {if {$from_db} == "False"}
                    <br>
                    <span style="font-size: 140%;">
                    <b>{#attention#} </b> 
                    </span>
                    <br>
                    <span style="color:red;">
                        {#no_movie_in_db#}
                        <br>{#no_recommendation_influence#}
                    </span>
                    <br>
                    {else}
                        <br>
                        {#no_movie_info_in_db#}
                        <br>
                        <span style="color:green;">
                        {#have_recommendation_influance#}
                        </span>
                    {/if}
                    <br>
                    {#before_search_on_google#}
                    <a href="https://www.google.hr/search?q={$movie_title}" target="_blank">
                        {#search_on_google#}</a>
                        <br>
            
            
                {else}    
            <footer>
                <p class="movie-time">{$movie['Runtime']} {#separator#} {$movie['Genre']} {#separator#} 
                    <span class="movie-rating"> {$movie['imdbRating']} </span></p>
            </footer>

            {*
            <img src="{$movie['Poster']}" alt="{$movie_title}" 
                 style="float: right;margin-left:2rem;max-height:250px;">           
            *}
            
            <img src="{$movie['Poster']}" alt="{$movie_title}" 
                 style="float: right;margin-left:2rem;margin-bottom:2rem;max-height:420px;">

            
            <hr>
                <b>{#plot#}</b> {$movie['Plot']}
            <br><hr>
                <b>{#director#}</b> {$movie['Director']}

                <br> <hr>
                <b>{#writers#}</b> {$movie['Writer']}
                <br><hr>
                <b>{#actors#}</b> {$movie['Actors']}
                <br><hr>

                <b>{#released#}</b> {$movie['Released']}
                <br><hr>

                <b>{#awards#}</b> {$movie['Awards']}
                <br><hr>
                <b>{#language#}</b> {$movie['Language']}
                <br><hr>
                <b>{#country#}</b> {$movie['Country']}
                <br><hr>

                <b>{#metascore#}</b> {$movie['Metascore']}
                <br><hr>

                {if {$from_db} == "False"} 
                    <b>{#attention#} </b> <span style="color:red;">
                        {#no_movie_in_db#}
                        <br>{#no_recommendation_influence#}</span>
                        <br> <hr>
                {/if}
                

                    <span style="clear:both;float: right;">
                        <br>
                        <a href="http://www.imdb.com/title/{$movie['imdbID']}/" 
                           target="_blank">{#open_on_imdb#}</a>  
                    </span>
                    <br><br>
                
            {/if}
            
        </article>
            <br>
            <a href="index.php"> {#go_home#} </a>
            
{/block}

{block name='right-content-box'}
    <h1>{#recommendations#}</h1>
    <hr>
    {assign var="putDots" value=4} {assign var="border" value=2} 
    {assign var="curPage" value=$r_pagination.curPage} 
    {assign var="url" value=$r_pagination.url} 
    {assign var="totalPages" value=$r_pagination.totalPages} 

    {include file='paginate.tpl'}
    {include file='movie_recommendations_based_on_opened_movie.tpl'}
    {include file='paginate.tpl'}
    <hr>
{/block}