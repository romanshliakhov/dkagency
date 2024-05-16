import vars from "../_vars";
import { disableScroll } from "../functions/disable-scroll";
import { enableScroll } from "../functions/enable-scroll";
import {
  removeClassInArray,
  addCustomClass,
  removeCustomClass,fadeOut,fadeIn
} from "../functions/customFunctions";

export function modalClickHandler(attribute, activeClass, overlayClass = activeClass) {
  const curentModal = overlay.querySelector(`[data-popup="${attribute}"]`);
  removeClassInArray(modals, activeClass);
  addCustomClass(overlay, overlayClass);
  addCustomClass(curentModal, activeClass);
  fadeIn(curentModal, 200)
  disableScroll();

  innerButton = overlay.querySelector(`${"[data-popup]"}.${activeClass} .close`);
}

const {
  overlay,
  activeClass,
  mobileMenu,
  modals,
  modalsButton,
  activeMode,
  burger
} = vars;
let innerButton;
const commonFunction = function () {
  removeCustomClass(overlay, activeMode);
  removeCustomClass(overlay, activeClass);
  removeClassInArray(modals, activeClass);

  modals.forEach((modal) => fadeOut(modal, 300))
  enableScroll();
};

function findAttribute(element, attributeName) {
  let target = element;
  while (target && target !== document) {
    if (target.hasAttribute(attributeName)) {
      return target.getAttribute(attributeName);
    }
    target = target.parentNode;
  }
  return null;
}

function buttonClickHandler(e, buttonAttribute, activeClass) {
  e.preventDefault();
  const currentModalId = findAttribute(e.target, buttonAttribute);
  if (!currentModalId) {return}

  const currentModal = overlay.querySelector(`[data-popup="${currentModalId}"]`);
  
  mobileMenu && removeCustomClass(mobileMenu, activeClass);
  burger && removeClassInArray(burger, activeClass);

  removeClassInArray(modals, activeClass);
  addCustomClass(overlay, activeClass);
  addCustomClass(overlay, activeMode);
  addCustomClass(currentModal, activeClass);
  fadeIn(currentModal, 200, 'flex');

  disableScroll();
  innerButton = overlay.querySelector(`${"[data-popup]"}.${activeClass} .close`);
}

function overlayClickHandler(e, activeClass) {
  if (e.target === overlay || e.target === innerButton) commonFunction();
}

function modalInit(buttonsArray, buttonAttribute, activeClass) {
  buttonsArray.map(function (btn) {
    btn.addEventListener("click", (e) => {
      buttonClickHandler(e, buttonAttribute, activeClass);

      if (btn.dataset.orderName) {
        const form = document.querySelector(`[data-popup="${btn.getAttribute(buttonAttribute)}"] .main-form`);
    
        if (form) {
            let hiddenInput = form.querySelector('input[name="form_name"]');
            if (!hiddenInput) {
                hiddenInput = document.createElement('input');
                hiddenInput.type = 'hidden';
                hiddenInput.name = 'form_name';
                form.appendChild(hiddenInput);
            }
            hiddenInput.value = btn.dataset.orderName;
        }
      }
    });

    
  });
}

overlay && overlay.addEventListener("click", function (e) {
  overlayClickHandler(e, activeClass);
});

modalInit(modalsButton, "data-btn-modal", activeClass);
