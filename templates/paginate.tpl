{* {assign var="putDots" value=7} {assign var="border" value=6} 
{assign var="curPage" value=$pagination.curPage} 
{assign var="url" value=$pagination.url} 
{assign var="totalPages" value=$pagination.totalPages} *}


{if $totalPages > 1} 
    <div class="pages"> 
    <span> 
    
    {if $curPage > 1} 
        <a title="{#previous_page#}" href="{$url|replace:'%x':($curPage-1)}">&laquo;&laquo;</a> 
    {/if} 
    
    {* Handle the first part of the pages -- up to the current one *} 

    {if $curPage > $putDots} 
        <a title="{#page#} 1" href="{$url|replace:'%x':'1'}">1</a>
        ... 

        {section name=i start=$curPage-$border loop=$curPage} 
            {assign var="curPos" value=$smarty.section.i.index} 
                <a title="{#page#} {$curPos}" href="{$url|replace:'%x':$curPos}">{$curPos}</a> 
        {/section} 
    {else} 
        {section name=i start=1 loop=$curPage} 
             {assign var="curPos" value=$smarty.section.i.index} 
                <a title="{#page#} {$curPos}" href="{$url|replace:'%x':$curPos}">
                    {$curPos}
                </a> 
        {/section} 
                
    {/if} 
    
    {* Current page *}
                
    <a title="{#page#} {$curPage}" class="current" href="{$url|replace:'%x':$curPage}">{$curPage}</a> 
                
    {* Handle the last part of the pages -- from the current one to the end *} 
                
    {if $totalPages - $curPage + 1 > $putDots}                     
        {section name=i start=$curPage+1 loop=$curPage+$border+1}                         
            {assign var="curPos" value=$smarty.section.i.index} 
            <a title="{#page#} {$curPos}" href="{$url|replace:'%x':$curPos}">{$curPos}</a>                     
        {/section} 
                   
        ... 
        <a title="{#page#} {$totalPages}" href="{$url|replace:'%x':$totalPages}">{$totalPages}</a> 
        
    {else} 
        {section name=i start=$curPage+1 loop=$totalPages+1}                         
            {assign var="curPos" value=$smarty.section.i.index}
            <a title="{#page#} {$curPos}" href="{$url|replace:'%x':$curPos}">{$curPos}</a>                     
        {/section} 
                
    {/if} 
               
    {if $curPage < $totalPages} 
        <a title="{#next_page#}" href="{$url|replace:'%x':($curPage+1)}">&raquo;&raquo;</a>                 
    {/if} 
    
    </span> 
    </div>     
{/if}
