const form = document.getElementById("form")
const btnCrearVectores = document.getElementById("btnCrearVectores")
let nVectores

btnCrearVectores.addEventListener("click", (e) => {
    e.preventDefault()
    const vectoresInput = document.getElementById("nVectores")
    const submitCalcular = document.createElement("input")
    nVectores = vectoresInput.value
    
    submitCalcular.setAttribute("type", "submit")
    submitCalcular.setAttribute("value", "calcular")
    submitCalcular.setAttribute("class", "submit-calcular")

    
    for (i = 0; i < nVectores; i++) {
        let magnitudLabel = document.createElement("label")
        let direcccionLabel = document.createElement("label")
        let magnitudInput = document.createElement("input")
        let direccionInput = document.createElement("input")
        
        let div = document.createElement("div")
        div.setAttribute("class", "vector-inputs-container")

        magnitudLabel.setAttribute("for", "magnitud")
        direcccionLabel.setAttribute("for", "direccion")
        magnitudLabel.innerHTML = "Magnitud"
        direcccionLabel.innerHTML = "Dirección: (ángulo polar)"
        
        magnitudInput.setAttribute("name", `magnitud_${i}`)
        magnitudInput.setAttribute("id", `magnitud_${i}`)
        magnitudInput.setAttribute("placeholder", `N`)
        magnitudInput.setAttribute("type", `number`)
        magnitudInput.setAttribute("step", "any")

        
        direccionInput.setAttribute("name", `direccion_${i}`)
        direccionInput.setAttribute("id", `direccion_${i}`)
        direccionInput.setAttribute("placeholder", `° (θ)`)
        direccionInput.setAttribute("type", `number`)
        direccionInput.setAttribute("step", `any`)

        div.appendChild(magnitudLabel)
        div.appendChild(magnitudInput)
        div.appendChild(direcccionLabel)
        div.appendChild(direccionInput)
        form.appendChild(div)
    }

    form.removeChild(form.children[1])
    form.removeChild(form.children[2])
    form.appendChild(submitCalcular)
    vectoresInput.setAttribute("class", "hidden")
})
