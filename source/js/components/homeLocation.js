import { disableScroll } from '../functions/disable-scroll';
import { enableScroll } from '../functions/enable-scroll';
import vars from '../_vars';

import {toggleClassInArray, toggleCustomClass, removeCustomClass, removeClassInArray, addCustomClass} from '../functions/customFunctions';
const {
	overlay,
	burger,
	mobileMenu,
	header,
	anchorLinks,
	activeClass} = vars;

window.addEventListener('DOMContentLoaded', function() {
    anchorLinks.forEach(function(item){
        item.addEventListener('click', function(e){
            let clickValue = item.getAttribute('href');

            if(!document.body.classList.contains('home')) {
                window.location.href = `${window.location.origin}/${clickValue}`;

                removeCustomClass(mobileMenu,activeClass);
                removeClassInArray(burger,activeClass);
                removeCustomClass(overlay,activeClass);
            }
        });
    });

    if (overlay) {
        overlay.addEventListener('click', function(e){
            if (e.target.classList.contains('overlay')) {
                hideMenuHandler(overlay,mobileMenu,burger);
            }
        });
    }
});