const isRadio = document.getElementById("is")
const usRadio = document.getElementById("us")

isRadio.addEventListener("click", (e) => {
    const weightInput = document.getElementById("weight_input")
    const massInput = document.getElementById("mass_input")
    const acelerationInput = document.getElementById("aceleration_input")
    
    weightInput.setAttribute("placeholder", "N")
    massInput.setAttribute("placeholder", "Kg")
    acelerationInput.setAttribute("placeholder", "m/s²")
})

usRadio.addEventListener("click", () => {
    const weightInput = document.getElementById("weight_input")
    const massInput = document.getElementById("mass_input")
    const acelerationInput = document.getElementById("aceleration_input")

    weightInput.setAttribute("placeholder", "lb")
    massInput.setAttribute("placeholder", "slugs")
    acelerationInput.setAttribute("placeholder", "ft/s²")
})