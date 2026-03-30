import {
    createTimeline,
    stagger,
    splitText,
    utils,
    onScroll,
    animate,
} from "animejs";

const listCaption = utils.$(".list-caption");

const sectionImageLeft = utils.$(".section-image-left");
const sectionImageRight = utils.$(".section-image-right");

listCaption.forEach((element) => {
    const hint = utils.$(".hint");
    const { words } = splitText(element, {
        words: { wrap: "visible" },
    });
    createTimeline({
        autoplay: onScroll({ target: element }),
        defaults: { ease: "inOut(3)", duration: 1500 },
    })
        .add(
            words,
            {
                x: [($el) => (+$el.dataset.line % 2 ? "50%" : "-50%"), "0%"],
                opacity: [0, 1],
            },
            stagger(250)
        )
        .add(hint, {
            y: [100, 0],
            opacity: [0, 1],
            duration: 1000,
        })
        .init();
});

animate(sectionImageLeft, {
    y: ["-25%", "25%"],
    rotate: ["15deg", "-15deg"],
    alternate: true,
    ease: "inOutQuad",
    autoplay: onScroll({
        sync: 1,
        enter: "bottom",
        leave: "top",
    }),
});

animate(sectionImageRight, {
    y: ["-25%", "25%"],
    rotate: ["-15deg", "15deg"],
    alternate: true,
    ease: "inOutQuad",
    autoplay: onScroll({
        sync: 1,
        enter: "bottom",
        leave: "top",
    }),
});
