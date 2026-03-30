import { utils, animate, onScroll, stagger } from "animejs";

// ╔══════════════════════════════════════════════════════╗
// ║                 CHESS BOARD ANIMATION                ║
// ╚══════════════════════════════════════════════════════╝
utils.$(".chess-board-item").forEach((element, index) => {
    animate(element, {
        scale: [0.5, 1],
        rotate: [
            index % 6 === 0 ? utils.random(-25, 50) : utils.random(-50, 50),
            "0deg",
        ],
        ease: "outCirc",
        duration: 1500,
        delay: stagger(250),
        autoplay: onScroll({ target: element }),
    });
});
