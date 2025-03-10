const navigation = document.querySelector("[data-id='menu']")
// console.log(navigation)
navigation.addEventListener("click", function (e) {
    
    const currentElement = e.target

    if (currentElement.matches('[data-dropdown], [data-dropdown] *')) {
        const parentLi =  currentElement.closest("li")
        const arrowButtom = parentLi.querySelector("[data-row]")

        if (parentLi.matches("[data-toggle]")) {
            // console.log("El elemento tiene el atributo")
            parentLi.removeAttribute("data-toggle")
            arrowButtom.classList.remove("rotate-180");

        } else {            
            // console.log("El elemento NO tiene el atributo")
            parentLi.setAttribute("data-toggle", "")
            arrowButtom.classList.add("rotate-180");
        }
    }
})
