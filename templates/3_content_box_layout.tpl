{extends file='layout.tpl'}
{block name='content-box-layout'}
    <div class='left-box'>

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

    <div class='center-box'>

        <div class='center-content-box'>	
            {block name='center-content-box'}

            {/block}
        </div>
    </div>
{/block}

{block name='footer'}
    {include file='footer.tpl'}
{/block}