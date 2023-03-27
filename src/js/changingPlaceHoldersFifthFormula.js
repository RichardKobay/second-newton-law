const isRadio = document.getElementById("is")
const usRadio = document.getElementById("us")
const form = document.getElementById("form")

isRadio.addEventListener("click", (e) => {
    const initial_velocity_input = document.getElementById("initial_velocity_input")
    const final_velocity_input = document.getElementById("final_velocity_input")
    const time_input = document.getElementById("time_input")
    
    initial_velocity_input.setAttribute("placeholder", "m/s²")
    final_velocity_input.setAttribute("placeholder", "m/s")
    time_input.setAttribute("placeholder", "m/s")
})

usRadio.addEventListener("click", () => {
    const initial_velocity_input = document.getElementById("initial_velocity_input")
    const final_velocity_input = document.getElementById("final_velocity_input")
    const time_input = document.getElementById("time_input")

    initial_velocity_input.setAttribute("placeholder", "ft/s²")
    final_velocity_input.setAttribute("placeholder", "ft/s")
    time_input.setAttribute("placeholder", "ft/s")
})

form.addEventListener("submit", (e) => {
    e.preventDefault()
    const initial_velocity_input = document.getElementById("initial_velocity_input")
    const final_velocity_input = document.getElementById("final_velocity_input")
    const time_input = document.getElementById("time_input")

    if (!(initial_velocity_input.value == "" || final_velocity_input.value == "" || time_input.value == "")) {
        form.submit()
    } else {
        alert("Llene los campos")
    }
})
