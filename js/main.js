// document.addEventListener('DOMContentLoaded', function () {
//     const accordionTitles = document.querySelectorAll('.js-accordion-title');

//     accordionTitles.forEach(function (title) {
//         title.addEventListener('click', function () {
//             const content = this.nextElementSibling;
//             content.style.transition = 'height 0.2s';
//             content.style.overflow = 'hidden';
//             if (content.style.height === '0px' || content.style.height === '') {
//                 content.style.height = content.scrollHeight + 'px';
//                 content.style.padding = '20px 40px';
//                 this.classList.add('open');
//             } else {
//                 content.style.height = '0px';
//                 content.style.padding = '0';
//                 this.classList.remove('open');
//             }
//         });
//     });
// });

// document.addEventListener('DOMContentLoaded', function () {
//     const accordionTitles = document.querySelectorAll('.js-accordion-title');

//     accordionTitles.forEach(function (title) {
//         title.addEventListener('click', function () {
//             const content = this.nextElementSibling;
//             content.style.transition = 'height 0.2s';
//             content.style.overflow = 'hidden';
//             if (content.style.height === '0px' || content.style.height === '') {
//                 content.style.height = content.scrollHeight + 'px';
//                 this.classList.add('open');
//                 // クリックされたタイトルの次の要素（.accordion-text）にもopenクラスを追加
//                 const nextElement = this.nextElementSibling;
//                 if (nextElement && nextElement.classList.contains('accordion-text')) {
//                     nextElement.classList.add('open');
//                 }
//             } else {
//                 content.style.height = 'auto';
//                 this.classList.remove('open');
//                 // クリックされたタイトルの次の要素（.accordion-text）にもopenクラスを削除
//                 const nextElement = this.nextElementSibling;
//                 if (nextElement && nextElement.classList.contains('accordion-text')) {
//                     nextElement.classList.remove('open');
//                 }
//             }
//         });
//     });
// });

document.addEventListener('DOMContentLoaded', function () {
    const accordionTitles = document.querySelectorAll('.js-accordion-title');

    accordionTitles.forEach(function (title) {
        title.addEventListener('click', function () {
            const content = this.nextElementSibling;
            content.style.transition = 'max-height 0.2s';
            //content.style.maxHeight = maxHeight;
            content.style.overflow = 'hidden';
            if (content.style.height === '0px' || content.style.height === '') {
                content.style.height = content.scrollHeight + 'px';
                this.classList.add('open');
                // クリックされたタイトルの次の要素（.accordion-text）にもopenクラスを追加
                const nextElement = this.nextElementSibling;
                if (nextElement && nextElement.classList.contains('accordion-text')) {
                    nextElement.classList.add('open');
                    // .open クラスが付いている時に padding を設定する
                    nextElement.style.padding = '20px 40px';
                }
            } else {
                //content.style.height = '0px';
                this.classList.remove('open');
                // クリックされたタイトルの次の要素（.accordion-text）にもopenクラスを削除
                const nextElement = this.nextElementSibling;
                if (nextElement) {
                    nextElement.classList.remove('open');
                    // .open クラスが外れた時に padding を 0 に設定する
                    nextElement.style.padding = '0';
                    nextElement.style.height = '0px';
                }
            }
        });
    });
});

// document.addEventListener('DOMContentLoaded', function () {
//     const accordionTitles = document.querySelectorAll('.js-accordion-title');

//     accordionTitles.forEach(function (title) {
//         title.addEventListener('click', function () {
//             const content = this.nextElementSibling;
//             content.style.transition = 'max-height 0.2s';
//             content.style.overflow = 'hidden';
//             if (content.style.maxHeight === '0px' || content.style.maxHeight === '') {
//                 content.style.maxHeight = content.scrollHeight + 'px';
//                 // クリックされたタイトルと次の要素（.accordion-text）の両方にopenクラスを追加
//                 this.classList.add('open');
//                 const nextElement = this.nextElementSibling;
//                 if (nextElement && nextElement.classList.contains('accordion-text')) {
//                     nextElement.classList.add('open');
//                 }
//             } else {
//                 // クリックされたタイトルと次の要素（.accordion-text）の両方からopenクラスを削除
//                 this.classList.remove('open');
//                 const nextElement = this.nextElementSibling;
//                 if (nextElement && nextElement.classList.contains('accordion-text', 'accordion-title', 'js-accordion-title')) {
//                     nextElement.classList.remove('open');
//                     nextElement.style.padding = '0';
//                     nextElement.style.maxHeight = '0px';
//                 }
//             }
//         });
//     });
// });









