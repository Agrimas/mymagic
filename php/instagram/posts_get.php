<?php
// Получить все посты
function getAllPosts()
{
    $query = queryForInstagramApi(LINK_GET_MEDIA);
    $posts = [];
    do {
        foreach ($query->data as $post) {
            $posts[] = $post;
        }
        $query = queryForInstagramApi($query->paging->next);
    } while (isset($query->paging->next));
    foreach ($query->data as $post) {
        $posts[] = $post;
    }
    return $posts;
}

//Поиск тегов в посте
function tagsSearch($caption, $tags = [])
{
    $found = true;
    foreach ($tags as $tag){
        if (strpos($caption, '#' . $tag) === false) {
            $found = false;
            break;
        }
    }
    return $found;
}

// Получить все посты по тегу
function getPostsByTag($posts, $tags = [])
{
    $postsWithTag = [];
    foreach ($posts as $post) {
        if (tagsSearch($post->caption, $tags)) {
            $postsWithTag[] = $post;
        }
    }
    return $postsWithTag;
}

$posts = getPostsByTag(getAllPosts(), ['mymagic_by']);


