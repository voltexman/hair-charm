import {
    createTimeline,
    onScroll,
    utils,
    stagger,
    splitText,
    animate,
} from "animejs";
import.meta.glob(["../images/**", "../fonts/**"], { eager: true });
import "./bootstrap";

// import Alpine from "alpinejs";
import {
    Livewire,
    Alpine,
} from "../../vendor/livewire/livewire/dist/livewire.esm";

// Alpine.start();

Livewire.start();

window.animate = animate;
window.utils = utils;

// ╔══════════════════════════════════════════════════════╗
// ║              Анімація головного меню                 ║
// ╚══════════════════════════════════════════════════════╝
window.addEventListener("open-main-menu", () => {
    animate(".main-menu-item", {
        scale: [0.75, 1],
        opacity: [0, 1],
        duration: 1250,
        delay: stagger(150),
        ease: "outElastic",
    });
});

const categoriesSelectSection = document.querySelector(".box-category-select");
if (categoriesSelectSection) {
    animate(
        categoriesSelectSection,
        {
            scale: [0.5, 1],
            opacity: [0, 1],
        },
        {
            // У Motion One параметри easing та duration зазвичай ідуть третім аргументом
            easing: "ease-out", // "outElastic" може потребувати окремої бібліотеки або специфічного рядка
            duration: 1.5, // У Motion One час часто в секундах, а не мілісекундах
            delay: onScroll({ target: categoriesSelectSection }),
        },
    );
}

// utils.$(".box-image").forEach((element) => {
//     animate(element, {
//         scale: [0.75, 1],
//         ease: "outElastic",
//         duration: 1800,
//         autoplay: onScroll({ target: element }),
//     });
// });

// ─────────────────────────────
// Анімація шапки (header)
// Спочатку заголовок потім підпис
// ─────────────────────────────
const header = document.querySelector(".page-header");

if (header) {
    createTimeline({
        autoplay: onScroll({ target: header }), // Використовуємо змінну замість селектора
        defaults: {
            ease: "outExpo",
            duration: 1750,
        },
    })
        .add(".page-header-title", {
            y: [-200, 0],
            opacity: [0, 1],
        })
        .add(
            ".page-header-caption",
            {
                y: [100, 0],
                opacity: [0, 1],
            },
            "-=1250",
        )
        .init();
}

// ╔══════════════════════════════════════════════════════╗
// ║                   Анімація секцій                    ║
// ║                 Заголовок та контент                 ║
// ╚══════════════════════════════════════════════════════╝
utils.$("section").forEach((section) => {
    const title = section.querySelector(".box-title");
    const contents = section.querySelectorAll(".box-content");
    const lastWords = section.querySelectorAll(".box-title-last-word");

    let { words = [] } = title
        ? splitText(title, { words: { wrap: "visible" }, chars: true })
        : {};

    const timeline = createTimeline({
        autoplay: onScroll({ target: section }),
        defaults: { delay: stagger(250) },
    });

    title &&
        timeline.add(words, {
            y: [($el) => (+$el.dataset.line % 2 ? "75%" : "-75%"), "0%"],
            scale: [0.95, 1],
            opacity: [0, 1],
            duration: 550,
            ease: "outExpo",
        });

    contents.length &&
        contents.forEach((item, i) => {
            timeline.add(
                item,
                {
                    opacity: [0, 1],
                    y: ["20px", "0px"],
                    duration: 600,
                    delay: i * 250,
                },
                title ? ">" : 0,
            );
        });

    lastWords &&
        lastWords.forEach((item, i) => {
            timeline.add(
                item,
                {
                    x: ["75%", 0],
                    opacity: [0, 1],
                    ease: "outElastic",
                    delay: i * 250,
                },
                ">",
            );
        });
    timeline.init();
});

// ─────────────────────────────
// Анімація списків (<ul> → <li>)
// кожен список має власний onScroll і свій таймлайн
// ─────────────────────────────
utils.$("ul").forEach((element) => {
    createTimeline({
        autoplay: onScroll({ target: element }),
        defaults: { ease: "outQuart", delay: stagger(250) },
    })
        .add(element.querySelectorAll("li"), {
            translateX: [-40, 0],
            opacity: [0, 1],
        })
        .init();
});

utils.$(".split-words").forEach((element) => {
    const { words } = splitText(element, {
        words: { wrap: "visible" },
        chars: true,
    });

    words &&
        animate(words, {
            x: () => [utils.random(-80, 80) + "%", "0%"],
            y: () => [utils.random(-70, 70) + "%", "0%"],
            scale: [0.95, 1],
            opacity: [0, 1],
            delay: stagger(150),
            ease: "inOut(3)",
            duration: 1500,
            autoplay: onScroll({ target: element }),
        });
});
