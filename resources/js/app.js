import './bootstrap';
import Alpine from 'alpinejs';
import './navbar';
import './report';
import './tentang';
import { gsap } from "gsap";

window.Alpine = Alpine;
Alpine.start();

gsap.to(".box",{
    duration: 3,
    rotation: 3,
    scale: 2,
    
})