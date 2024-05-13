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

