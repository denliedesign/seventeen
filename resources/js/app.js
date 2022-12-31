import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// require('./bootstrap');
import { gsap } from "gsap";
import {ScrollTrigger} from 'gsap/ScrollTrigger';
import {ScrollSmoother} from 'gsap/ScrollSmoother';
import { SplitText } from "gsap/SplitText.js";
import { TextPlugin } from "gsap/TextPlugin.js";

gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(ScrollSmoother);
gsap.registerPlugin(SplitText);
gsap.registerPlugin(TextPlugin);
