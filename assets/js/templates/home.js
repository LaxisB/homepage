const connType = navigator.connection?.effectiveType ?? "4g",
    saveData = navigator.connection?.saveData ?? !1;
connType === "4g" &&
    !saveData &&
    Array.from(document.querySelectorAll("video[data-autoplay]")).forEach((a) => a.play());
