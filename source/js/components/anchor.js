import SmoothScroll from 'smooth-scroll';

// new SmoothScroll('a[href*="#"]', {
//   speed: 150,
//   offset: 0
// });

document.addEventListener('DOMContentLoaded', function() {
  // Проверяем наличие якоря в URL страницы
  if (window.location.hash) {
      // Получаем элемент с ID, соответствующим якорю
      const targetElement = document.querySelector(window.location.hash);
      if (targetElement) {
          // Прокручиваем страницу к этому элементу
          targetElement.scrollIntoView({
              behavior: 'smooth',
              block: 'start'
          });
      }
  }

  // Инициализируем плавный скролл для всех ссылок с якорями на текущей странице
  new SmoothScroll('a[href*="#"]', {
      speed: 150,
      offset: 0
  });
});

