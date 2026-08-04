import Alpine from "alpinejs";
window.Alpine = Alpine;
Alpine.start();

import AOS from "aos";
import "aos/dist/aos.css";

AOS.init({
    once: true,
    duration: 900,
    offset: 100,
});

import Lenis from "lenis";

const lenis = new Lenis({
    duration: 1.2,
    smoothWheel: true,
});

function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
}

requestAnimationFrame(raf);

import Typed from "typed.js";
window.Typed = Typed;

import gsap from "gsap";
window.gsap = gsap;

import { createIcons, icons } from "lucide";

window.addEventListener("DOMContentLoaded", () => {
    createIcons({ icons });

    if (document.querySelector("#typed")) {
        new Typed("#typed", {
            strings: [
                "Elegant.",
                "Fresh.",
                "Luxury.",
                "Long Lasting.",
            ],
            typeSpeed: 70,
            backSpeed: 40,
            backDelay: 1800,
            loop: true,
        });
    }

    gsap.from(".hero-title", {
        opacity: 0,
        y: 70,
        duration: 1,
    });

    gsap.from(".hero-subtitle", {
        opacity: 0,
        y: 40,
        delay: .4,
        duration: .8,
    });

    gsap.from(".hero-buttons", {
        opacity: 0,
        y: 30,
        delay: .8,
        duration: .7,
    });

    gsap.from(".perfume-card", {
        opacity: 0,
        x: 120,
        duration: 1.3,
        delay: .6,
    });
});

document.addEventListener("DOMContentLoaded", () => {

    const counterSection = document.querySelector("#statistics");

    if (!counterSection) return;

    import("countup.js").then(({ CountUp }) => {

        let started = false;

        const observer = new IntersectionObserver(entries => {

            if (entries[0].isIntersecting && !started) {

                started = true;

                document.querySelectorAll("[data-count]").forEach(item => {

                    new CountUp(item, item.dataset.count).start();

                });

            }

        });

        observer.observe(counterSection);

    });

});

window.addEventListener("scroll", () => {

    const nav = document.querySelector("nav");

    if (!nav) return;

    if (window.scrollY > 40) {

        nav.classList.add("shadow-2xl");

    } else {

        nav.classList.remove("shadow-2xl");

    }

});