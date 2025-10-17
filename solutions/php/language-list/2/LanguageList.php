<?php

function language_list(...$items)
{
    return $items;
}    

function add_to_language_list(array $language_list,$new_language)
{
    array_push($language_list, $new_language);

    return $language_list;
}

function prune_language_list(array $language_list)
{
    array_shift($language_list);

    return $language_list;
}

function current_language(array $language_list)
{
    return $language_list[0];
}

function language_list_length($language_list)
{
    return count($language_list);
}