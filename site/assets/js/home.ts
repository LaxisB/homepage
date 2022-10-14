const connType = "connection" in navigator ? navigator.connection?.effectiveType : null;
console.log("loading home script");

if (!connType || connType === "4g") {
    console.log("autoplaying video");
    Array.from(document.querySelectorAll("video[data-autoplay]")).forEach((vid: HTMLVideoElement) => {
        vid.autplay = true;
        vid.play();
    });
}
