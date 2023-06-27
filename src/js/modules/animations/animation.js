import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';

export default function gsapAnimation() {
  gsap.registerPlugin(ScrollTrigger);

  function homeIntro() {
    gsap.fromTo('.logo', { x: -300 }, { duration: 2, x: 0 });

    gsap.from('.menu-item', {
      duration: 1.5,
      opacity: 0,
      y: 150,
      stagger: 0.25,
    });

    gsap.fromTo(
      '.home-intro__text > p',
      { x: 200 },
      { duration: 2, x: 0, ease: 'bounce' }
    );

    gsap.fromTo(
      '.home-intro__text > h1',
      { x: -300 },
      { duration: 2, x: 0, ease: 'bounce' }
    );

    gsap.from('.home-intro__image', {
      duration: 2,
      opacity: 0,
      scale: 0.8,
    });

    let input = document.querySelector('.form');
    gsap.from(input, { duration: 2, opacity: 0, y: -200 });
  }
  homeIntro();

  function getPlant() {
    gsap.from('.get-plant', {
      duration: 3,
      opacity: 0,

      scrollTrigger: {
        trigger: '.get-plant',
        start: 'top 100%',
      },
    });
  }
  getPlant();

  function offers() {
    gsap.from('.offers__item', {
      duration: 1.5,
      opacity: 0,
      x: 150,
      stagger: 0.25,
      scrollTrigger: {
        trigger: '.offers__item',
        start: 'top 80%',
      },
    });
  }
  offers();
}
