import {addCustomClass, removeCustomClass} from "../functions/customFunctions";
import vars from '../_vars'
import {modalClickHandler} from "./modals";

const {formSubmitBtn,formWrapper,activeMode, activeClass} = vars;

function toggleLoader() {
	removeCustomClass(formWrapper, 'loader');
	removeCustomClass(formWrapper, 'loaded');
}

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
		toggleLoader()
	}, false );



	formWrapper.addEventListener( 'wpcf7mailfailed', function( event ) {
		modalClickHandler('error',  activeClass, activeMode);
		toggleLoader()
	}, false );

}

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

