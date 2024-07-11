
let vid = document.querySelector('video');


function playVideo() {
    if (vid.paused) {
    vid.play();
    } else {
    vid.pause();
    }

}
