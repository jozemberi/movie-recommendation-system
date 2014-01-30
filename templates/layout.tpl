{* Loading language file *}
{block name='language'} {config_load file='{$lang_file}'} {/block}
<!DOCTYPE html>
<html>
    <head>
        {include file='html_head_tag.tpl'}
    </head>

    <body class='body'>
        {block name='page_header'} 
            {include file='page_header.tpl'}  
        {/block}

        <div class='content-box'>
            {block name='content-box-layout'}

            {/block}

            {block name='footer'}
                {* movie footer is simpler so it's default *}
                {include file='movie_footer.tpl'}
            {/block}

        </div>

    </body>
</html>	