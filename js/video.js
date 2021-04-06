// Поиск видео
function onYouTubePlayerAPIReady() {
    let videos = document.querySelectorAll('.video');
    for (let i = 0; i < videos.length; i++) {
        setupVideo(videos[i]);
    }
}

// Инициализация видео
function setupVideo(video) {
    let link = video.querySelector('.video__link');
    let button = video.querySelector('.video__button');
    let vimeo = link.classList.contains('video-vimeo');
    let id = parseMediaURL(link, vimeo);

    video.addEventListener('click', () => {
        link.remove();
        button.remove();

        let player;
        if (vimeo) {
            let iframe = createIframe(id, vimeo);
            video.appendChild(iframe);
            player = new Vimeo.Player(iframe);
        } else {
            // Создаю блок для преобразования в iframe
            let blockPlayer = document.createElement('div');
            blockPlayer.id = 'player__' + id;
            blockPlayer.classList.add('video__media');
            video.appendChild(blockPlayer)
            // Создаю iframe с видео
            player = new YT.Player(blockPlayer, {
                width: 500,
                height: 500,
                videoId: id,
                events: {
                    'onReady': onPlayerReady,
                },
            })
        }

        // Пауза при смене слайда
        $('#block-video__slider .slick-arrow, #block-video-dots .slick-dots button:not([aria-selected])').click(() => {
            if (vimeo) {
                player.pause();
            } else {
                player.pauseVideo();
            }
        });
    })

    link.removeAttribute('href');
    video.classList.add('video--enabled');
}

// Автозапуск видео YouTube
function onPlayerReady(event) {
    event.target.playVideo();
}

// Получение id из URL видео
function parseMediaURL(link, vimeo = false) {
    let regexp = /https:\/\/youtu\.be\/([a-zA-Z0-9_-]+)/;
    if (vimeo) {
        regexp = /https:\/\/vimeo\.com\/([a-zA-Z0-9_-]+)/;
    }
    let url = link.href;
    let match = url.match(regexp);

    return match[1];
}

// Создание iframe для Vimeo
function createIframe(id) {
    let iframe = document.createElement('iframe');

    iframe.setAttribute('id', 'youtube_' + id);
    iframe.setAttribute('width', 500);
    iframe.setAttribute('height', 500);
    iframe.setAttribute('allowfullscreen', '');
    iframe.setAttribute('allow', 'autoplay');
    iframe.setAttribute('src', generateURL(id));
    iframe.classList.add('video__media');

    return iframe;
}

// Создание URL для Vimeo
function generateURL(id) {
    return 'https://player.vimeo.com/video/' + id + '?rel=0&showinfo=0&autoplay=1';
}

// Inject YouTube API script
var tag = document.createElement('script');
tag.src = "//www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);