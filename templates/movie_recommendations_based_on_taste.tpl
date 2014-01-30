<hr>
{foreach from=$show_recommendations item=movie key=k}
    <h3 style="color: snow">  
        {if {$movie} <= 5 && {$movie} >= 4.5}
            &#9733; &#9733; &#9733; &#9733; &#9733;
            {else if {$movie} < 4.5 && {$movie} >= 4}
                &#9733; &#9733; &#9733; &#9733;&#9734;
                {else if {$movie} < 4 && {$movie} >= 3}
                    &#9733; &#9733; &#9733;&#9734;&#9734;
                    {else if {$movie} < 3 && {$movie} >= 2}
                        &#9733; &#9733;&#9734;&#9734;&#9734;
                    {else}
                        &#9733;&#9734;&#9734;&#9734;&#9734;
                    {/if}

                    <a href='movie.php?id={$k}'>  
                        {$movies_basic_data[{$k}]} 
                        &rarr;
                    </a>  
                </h3>
                <hr>
            {/foreach}