import {addCustomClass, fadeOut, removeCustomClass} from "../functions/customFunctions";
import vars from '../_vars'
import {modalClickHandler, commonFunction} from "./modals";

const {formWrappers,activeMode, activeClass} = vars;

formWrappers.forEach(formWrapper => {
	const formSubmitBtn = formWrapper.querySelector('.main-form__btn');

	if (formWrapper && formSubmitBtn) {
		formSubmitBtn.addEventListener('click', function (){
			removeCustomClass(formWrapper, 'loaded');
			addCustomClass(formWrapper, 'loader');
		})
	
		formWrapper.addEventListener( 'wpcf7invalid', function( event ) {
			setTimeout(function (){
				addCustomClass(formWrapper, 'loaded')
			}, 1500)
		}, false );
	
	
		formWrapper.addEventListener( 'wpcf7mailsent', function( event ) {
			modalClickHandler('done',  activeClass, activeMode);

			const modalAttr = formWrapper.closest("[data-popup]").dataset.popup;

			// if(modalAttr) {
			// 	const curentModal = document.querySelector(`[data-popup="${modalAttr}"]`);
			// 	removeCustomClass(curentModal, 'active');
			// 	fadeOut(curentModal, 100);
			// }

			setTimeout(function (){
				commonFunction();
			}, 5000)

			removeCustomClass(formWrapper, 'loader');
			removeCustomClass(formWrapper, 'loaded');
		}, false );
	
		formWrapper.addEventListener( 'wpcf7mailfailed', function( event ) {
			removeCustomClass(formWrapper, 'loader');
			removeCustomClass(formWrapper, 'loaded');
		}, false );
	}
})

// Получаем все поля ввода на странице
const inputs = document.querySelectorAll('input[type="tel"]');

// Добавляем обработчик события "input" для каждого поля ввода
inputs.forEach(input => {
    input.addEventListener('input', function(event) {
        // Получаем значение поля ввода
        const value = input.value;
        
        // Заменяем все символы, кроме цифр, на пустую строку
        const newValue = value.replace(/\D/g, '');
        
        // Если значение изменилось (были удалены символы, кроме цифр), обновляем значение поля
        if (newValue !== value) {
            input.value = newValue;
        }
    });
});

