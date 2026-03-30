import { utils, animate, onScroll, stagger, createTimeline } from "animejs";
import Swiper from "swiper";
import { EffectCards, Autoplay } from "swiper/modules";
import "swiper/css";
import "swiper/css/effect-cards";
import "swiper/css/autoplay";

// ╔══════════════════════════════════════════════════════╗
// ║               SECTION HEADER — ANIMATIONS            ║
// ╚══════════════════════════════════════════════════════╝
createTimeline({
    autoplay: onScroll({ target: ".section-header" }),
    defaults: {},
})
    .add(".panel-left", {
        x: ["-100%", 0],
        duration: 1500,
        ease: "inOutCirc",
    })
    .add(
        ".logo-left-box",
        {
            x: ["100%", 0],
            duration: 1250,
            ease: "inOutExpo",
        },
        ">",
    )
    .add(
        ".logo-right-box",
        {
            x: ["-100%", 0],
            duration: 1250,
            ease: "inOutExpo",
        },
        "-=1250",
    )
    .init();

// ╔══════════════════════════════════════════════════════╗
// ║                  SECTION 1 — ANIMATIONS              ║
// ╚══════════════════════════════════════════════════════╝
// createTimeline({
//     autoplay: onScroll({ target: utils.$(".section-1") }),
//     defaults: { ease: "outExpo" },
// }).init();

animate(".secret-label-anim", {
    rotate: [0, -10, 10, 0, -10, 10, 0, -10, 10, 0, -10, 0],
    scale: [1, 1.2, 1],
    transformOrigin: ["0px 0px", "50% 50%"],
    duration: 750,
    loop: true,
    direction: "alternate",
    ease: "inOutSine",
    autoplay: true,
    loopDelay: 3000,
});

// ╔══════════════════════════════════════════════════════╗
// ║                      SWIPER SLIDER                   ║
// ╚══════════════════════════════════════════════════════╝
new Swiper(".swiper", {
    modules: [EffectCards, Autoplay],
    effect: "cards",
    loop: true,
    grabCursor: true,
    centeredSlides: true,
    centeredSlidesBounds: true,
    centerInsufficientSlides: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    cardsEffect: {
        slideShadows: true,
        rotate: true,
        perSlideRotate: 4,
        perSlideOffset: 6,
    },
});

// ╔══════════════════════════════════════════════════════╗
// ║                 CHESS BOARD ANIMATION                ║
// ╚══════════════════════════════════════════════════════╝
animate(".chess-board-title", {
    x: ["100%", 0],
    opacity: [0, 1],
    ease: "outElastic",
    duration: 2000,
    autoplay: onScroll(),
});
utils.$(".chess-board-cell").forEach((element, index) => {
    animate(element, {
        scale: [0.75, 1],
        rotate: [
            (index % 6 === 0 ? utils.random(-5, -15) : utils.random(5, 15)) +
                "deg",
            "0deg",
        ],
        ease: "outCirc",
        duration: 1500,
        autoplay: onScroll({ target: element }),
    });
});

// ╔══════════════════════════════════════════════════════╗
// ║               COLOR LIST ANIMATION                   ║
// ║           Items, Circle & Hint Timeline              ║
// ╚══════════════════════════════════════════════════════╝
createTimeline({
    autoplay: onScroll({ target: ".color-list" }),
    defaults: { delay: stagger(250) },
})
    .add(".color-list-item", {
        scale: [0.85, 1],
        opacity: [0, 1],
        duration: 1500,
        delay: stagger(250),
        ease: "outElastic",
    })
    .add(
        ".ghost-image",
        {
            scale: [0.95, 1],
            opacity: [0, 0.05],
            duration: 2000,
        },
        "-=2000",
    )
    .add(
        ".color-circle",
        {
            scale: [0, 1],
            opacity: [0, 1],
            duration: 1200,
            delay: stagger(200),
            ease: "outElastic",
        },
        "-=1000",
    )
    .add(
        ".color-hint",
        {
            opacity: [0, 1],
            y: ["30px", "0px"],
            duration: 900,
            easing: "inOutSine",
        },
        "-=800",
    )
    .add(
        ".select-word",
        {
            scale: [1, 1.15, 1],
            duration: 900,
            loop: 2,
            direction: "alternate",
            easing: "inOutSine",
        },
        ">",
    )
    .init();

// ╔══════════════════════════════════════════════════════╗
// ║                DUAL BOX ANIMATION                    ║
// ║               Left box & right box                   ║
// ╚══════════════════════════════════════════════════════╝
createTimeline({
    autoplay: onScroll({ target: ".section-8" }),
    defaults: { delay: stagger(250), duration: 2500, ease: "outExpo" },
})
    .add(".section-8 .box-top", {
        y: ["-100%", 0],
        x: ["50%", 0],
        opacity: [0, 1],
    })
    .add(
        ".section-8 .box-bottom",
        { y: ["100%", 0], x: ["-50%", 0], opacity: [0, 1] },
        "-=2000",
    )
    .add(
        ".section-8 .box-image",
        {
            scale: [0.5, 1],
            opacity: [0, 1],
            duration: 3000,
            ease: "outElastic",
        },
        "-=2000",
    )
    .init();
createTimeline({
    autoplay: onScroll({ target: ".section-11" }),
    defaults: { delay: stagger(250), duration: 2000, ease: "outExpo" },
})
    .add(".section-11 .box-left", { x: ["-100%", 0], opacity: [0, 1] })
    .add(
        ".section-11 .box-right",
        { x: ["100%", 0], opacity: [0, 1] },
        "-=1300",
    )
    .add(
        ".section-11 .selected",
        {
            scale: [1, 1.05, 1],
            loop: 2,
            duration: 1000,
            direction: "alternate",
            ease: "linear",
        },
        ">",
    )
    .init();
createTimeline({
    autoplay: onScroll({ target: ".section-12" }),
    defaults: { delay: stagger(250), duration: 2000, ease: "outExpo" },
})
    .add(".section-12 .box-left", { x: ["-100%", 0], opacity: [0, 1] })
    .add(
        ".section-12 .box-right",
        { x: ["100%", 0], opacity: [0, 1] },
        "-=1300",
    )
    .add(
        ".section-12 .selected",
        {
            scale: [1, 1.1, 1],
            loop: 2,
            duration: 1000,
            direction: "alternate",
            ease: "linear",
        },
        ">",
    )
    .init();
