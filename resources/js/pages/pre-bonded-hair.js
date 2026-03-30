import { utils, animate, onScroll } from "animejs";

animate(utils.$(".ghost-image"), {
    y: ["0%", "50%"],
    autoplay: onScroll({
        target: utils.$(".section-3"),
        sync: 1,
        enter: "10px",
        leave: "10px",
    }),
});
