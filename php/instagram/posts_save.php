<?php
foreach ($posts as $post) {
    $emotions = null;
    if (tagsSearch($post->caption, ['emotions'])){
        $emotions = 1;
    }

    $data = [
        'id' => $post->id,
        'alt' => $post->caption,
        'emotions' => $emotions,
    ];

    $sth = $pdo->prepare("SELECT id FROM photos WHERE id = $post->id");
    $sth->execute();

    if ($sth->fetch()) {
        $sql = "UPDATE photos SET alt = :alt, emotions = :emotions WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute($data);
    } else {
        $data += [
            'media_url' => $post->media_url,
            'permalink' => $post->permalink,
            'media_type' => $post->media_type
        ];
        $sql = "INSERT INTO photos(id, media_url, permalink, alt, emotions, media_type) VALUES(:id, :media_url, :permalink, :alt, :emotions, :media_type)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute($data);
    }
}
