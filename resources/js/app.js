import './bootstrap';
import 'flowbite';
import "tailwindcss";
import jQuery from 'jquery';
import {link} from './link.js';
import {darkAndLight} from './theme/darkAndLight.js'

window.$ = jQuery;

link();
darkAndLight()
