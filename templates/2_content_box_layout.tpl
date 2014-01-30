{extends file='layout.tpl'}

{block name='content-box-layout'}
    <div class='movie-info-box'>
        <div class='left-content-box'>
            {block name='left-content-box'}

            {/block}
        </div>
    </div>

    {* Beetween left and center box on small screens *}
    <div class='right-box'>
        <div class='right-content-box'>	

            {block name='right-content-box'}

            {/block}

        </div>	
    </div>

{/block}

{block name='footer'}
    {include file='movie_footer.tpl'}
{/block}