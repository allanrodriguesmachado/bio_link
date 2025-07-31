import './bootstrap';
import 'flowbite';
import "tailwindcss";
import jQuery from 'jquery';
import {reorder} from './links/reorder.js';
import {darkAndLight} from './theme/darkAndLight.js'
import {sidebar} from "./menu/sidebar.js";

window.$ = jQuery;

function init() {
    reorder();
    darkAndLight()
    sidebar();
}

init()
