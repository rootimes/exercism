<?php

function language_list(...$items)
{
    if (empty($items))
    {
        return [];
    }

    return $items;
}    

function add_to_language_list(array $language_list, string $new_language)
{
    $language_list[] = $new_language;
    
    return $language_list;
}

function prune_language_list(array $language_list)
{
    return array_slice($language_list, 1);
}

function current_language(array $language_list)
{
    return $language_list[0];
}

function language_list_length($language_list)
{
    return count($language_list);
}