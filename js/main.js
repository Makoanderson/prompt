document.addEventListener('DOMContentLoaded', function () {
    const fqamenus = document.getElementsByClassName("fqamenu");

    for (let i = 0; i < fqamenus.length; i++) {
        fqamenus[i].addEventListener("click", function () {
            this.classList.toggle("active");
            const panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }

    const contents = document.querySelectorAll(".panel li");
    const title = document.getElementById("title");
    contents.forEach((content) => {
        content.addEventListener("click", function () {
            title.innerText = this.innerText;
        });
    });
});
