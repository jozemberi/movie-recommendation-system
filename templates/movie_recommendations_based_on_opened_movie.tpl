<hr>
{foreach from=$show_recommendations item=movie key=k}
    <h3>  
        <span style="color: tomato;"> &hearts;</span> 
        {{math equation="x * y" x=$movie y=100}|string_format:"%.0f"}&#37; &rarr;
        <a href='movie.php?id={$k}'> 
            {$movies_basic_data[{$k}]} &rarr;

        </a>  
    </h3>
    <hr>
{/foreach}