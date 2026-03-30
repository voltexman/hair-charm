import { utils, animate, onScroll, splitText, stagger } from "animejs";

animate(utils.$(".section-2 .section-image-left"), {
    y: ["-30%", "30%"],
    rotate: ["15deg", "-15deg"],
    alternate: true,
    autoplay: onScroll({
        sync: 1,
        enter: "bottom",
        leave: "top",
    }),
});

animate(utils.$(".image-rotate-left"), {
    rotate: ["-20deg", "20deg"],
    alternate: true,
    autoplay: onScroll({
        sync: 1,
        enter: "bottom",
        leave: "top",
    }),
});
animate(utils.$(".image-rotate-right"), {
    rotate: ["20deg", "-20deg"],
    alternate: true,
    autoplay: onScroll({
        sync: 1,
        enter: "bottom",
        leave: "top",
    }),
});

animate(utils.$(".image-rotate"), {
    rotate: ["20deg", "-20deg"],
    alternate: true,
    autoplay: onScroll({
        sync: 1,
        enter: "bottom",
        leave: "top",
    }),
});

const textDynamic = utils.$(".box-dynamic-text-right");
textDynamic.forEach((element) => {
    animate(element, {
        rotate: ["-10deg", "10deg"],
        alternate: true,
        autoplay: onScroll({
            sync: 1,
            enter: "bottom",
            leave: "top",
        }),
    });
});

animate(utils.$(".discount"), {
    scale: [0.9, 1.1],
    rotate: ["-7deg", "7deg"],
    alternate: true,
    loop: true,
    ease: "inOutQuad",
    duration: 750,
});

const { words } = splitText(".split-text", {
    words: { wrap: "clip" },
});
animate(words, {
    y: [($el) => (+$el.dataset.line % 2 ? "50%" : "-50%"), "0%"],
    opacity: [0, 1],
    duration: 1250,
    ease: "out(5)",
    delay: stagger(150),
    autoplay: onScroll({ target: words }),
});
