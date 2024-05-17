// Находим модальное окно
const modal = document.querySelector('[data-popup="order"]');
const options = modal.querySelectorAll('option');

// Получаем все кнопки инициализации модального окна
const modalInitBtns = document.querySelectorAll('[data-order-name]');

const optionsValues = [];
const orderNames = [];


modalInitBtns.forEach(btn => {
    // Получаем значение атрибута data-order-name текущего элемента и добавляем его в массив
    const orderName = btn.getAttribute('data-order-name');
    orderNames.push(orderName);
});

options.forEach(option => {
    const value = option.value;

    optionsValues.push(value);
});

// Выводим массив значений в консоль
console.log(optionsValues);
console.log(orderNames);





