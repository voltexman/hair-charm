import { utils, animate, onScroll, stagger } from "animejs";

const boxNumber = utils.$(".box-number");
boxNumber.forEach((element) => {
    animate(element, {
        scale: [0.5, 1],
        ease: "outBack",
        duration: 1500,
        autoplay: onScroll({ target: element }),
    });
});

const chess = utils.$(".chess");
chess.forEach((element, index) => {
    animate(element, {
        scale: [0.75, 1],
        rotate: [(index % 3 === 0 ? -15 : 15) + "deg", "0deg"],
        ease: "outCirc",
        duration: 1500,
        delay: stagger(250),
        autoplay: onScroll({ target: element }),
    });
});
