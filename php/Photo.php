<?php
include 'db.php';


    $sth = $pdo->prepare("SELECT * FROM photos");

    $sth->execute();

    $posts = $sth->fetchAll(PDO::FETCH_ASSOC);




function getPostImage($posts){
    $postsImage = [];
    foreach ($posts as $post){
        if ($post['media_type'] == 'IMAGE' OR $post['media_type'] = 'CAROUSEL_ALBUM'){
            $postsImage[] = $post;
        }
    }
    return $postsImage;
}

function getPostVideo($posts){
    $postsVideo = [];
    foreach ($posts as $post){
        if ($post['media_type'] == 'VIDEO'){
            $postsVideo[] = $post;
        }
    }
    return $postsVideo;
}

function getPostsWithEmotions($posts){
    $postsWithEmotions = [];
    foreach ($posts as $post){
        if ($post['emotions']){
            $postsWithEmotions[] = $post;
        }
    }
    return $postsWithEmotions;
}

$photosForGallery = getPostImage($posts); //#mymagic_by

$photosForSlider = getPostImage(getPostsWithEmotions($posts)); //#mymagic_by & #emotions

$videos = getPostVideo($posts); //#mymagic_by

