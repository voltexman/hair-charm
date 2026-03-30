import { utils, animate, onScroll } from "animejs";

// ╔══════════════════════════════════════════════════════╗
// ║                 CHESS BOARD ANIMATION                ║
// ╚══════════════════════════════════════════════════════╝
animate(utils.$(".scissors"), {
    rotate: ["-110deg", "20deg"],
    transformOrigin: ["0px 0px", "50% 50%"],
    autoplay: onScroll({
        sync: 1,
        enter: "bottom",
        leave: "top",
    }),
});
