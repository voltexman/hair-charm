import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

const mm = gsap.matchMedia();

const tl = gsap.timeline({
    scrollTrigger: {
        trigger: ".section-1",
        start: "top 80%",
        toggleActions: "play none none none",
    },
});

tl.from(".section-1 .box-title", {
    x: 100,
    opacity: 0,
    duration: 1,
    ease: "power2.out",
}).from(
    ".section-1 .box-content",
    {
        x: -100,
        opacity: 0,
        duration: 1,
        ease: "power2.out",
    },
    "-=0.5"
);

gsap.from(".section-2 .box-content", {
    scale: 0.5,
    opacity: 0,
    duration: 1,
    ease: "power2.out",
});

/* 📱 MOBILE */
mm.add("(max-width: 767px)", () => {
    gsap.fromTo(
        ".box-image",
        { rotate: -15 },
        {
            rotate: 15,
            ease: "none",
            scrollTrigger: {
                trigger: ".box-image",
                start: "top bottom",
                end: "bottom top",
                scrub: 0.25,
            },
        }
    );
});

/* 💻 TABLET + DESKTOP */
mm.add("(min-width: 768px)", () => {
    gsap.fromTo(
        ".section-3 .box-text",
        { x: "-25" },
        {
            x: "20%",
            ease: "none",
            scrollTrigger: {
                trigger: ".section-3 .box-text",
                start: "top bottom",
                end: "bottom top",
                scrub: 0.25,
            },
        }
    );

    gsap.fromTo(
        ".section-4 .box-image",
        { x: -80, y: 150 },
        {
            x: 40,
            y: -150,
            ease: "none",
            scrollTrigger: {
                trigger: ".section-4 .box-image",
                start: "top bottom",
                end: "bottom top",
                scrub: true,
            },
        }
    );

    gsap.fromTo(
        ".section-4 .box-text",
        { x: 50, y: -100 },
        {
            x: -50,
            y: 120,
            ease: "none",
            scrollTrigger: {
                trigger: ".section-4 .box-text",
                start: "top bottom",
                end: "bottom top",
                scrub: true,
            },
        }
    );

    gsap.fromTo(
        ".section-5-text",
        { x: "30" },
        {
            x: "-30%",
            ease: "none",
            scrollTrigger: {
                trigger: ".section-5-text",
                start: "top bottom",
                end: "bottom top",
                scrub: 0.25,
            },
        }
    );
});
