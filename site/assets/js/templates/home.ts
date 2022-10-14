const connType = navigator.connection?.effectiveType ?? "4g";
const saveData = navigator.connection?.saveData ?? false;

if (connType === "4g" && !saveData) {
    Array.from(document.querySelectorAll("video[data-autoplay]")).forEach((vid: HTMLVideoElement) => vid.play());
}
