const isRadio = document.getElementById("is")
const usRadio = document.getElementById("us")
const form = document.getElementById("form")

isRadio.addEventListener("click", (e) => {
    const initial_velocity_input = document.getElementById("initial_velocity_input")
    const final_velocity_input = document.getElementById("final_velocity_input")
    const time_input = document.getElementById("time_input")
    
    initial_velocity_input.setAttribute("placeholder", "m/s")
    final_velocity_input.setAttribute("placeholder", "m/s²")
    time_input.setAttribute("placeholder", "s")
})

usRadio.addEventListener("click", () => {
    const initial_velocity_input = document.getElementById("initial_velocity_input")
    const final_velocity_input = document.getElementById("final_velocity_input")
    const time_input = document.getElementById("time_input")

    initial_velocity_input.setAttribute("placeholder", "ft/s")
    final_velocity_input.setAttribute("placeholder", "ft/s²")
    time_input.setAttribute("placeholder", "s")
})

form.addEventListener("submit", (e) => {
    e.preventDefault()
    const initial_velocity_input = document.getElementById("initial_velocity_input")
    const acceleration_input = document.getElementById("acceleration_input")
    const time_input = document.getElementById("time_input")

    if (!(initial_velocity_input.value == "" || acceleration_input.value == "" || time_input.value == "")) {
        form.submit()
    } else {
        alert("Llene los campos")
    }
})
