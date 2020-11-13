const selectItem = () => {
    ["#sidebar", ".sidebar-item-expansive"].forEach(selector => [
        document.querySelectorAll(`${selector} > a`).forEach(item => {
            if (item.href == window.location.href) {
                item.classList.add("item-selected");
            } else {
                item.classList.remove("item-selected");
            }
        })
    ]);
};

window.addEventListener("click", selectItem);
