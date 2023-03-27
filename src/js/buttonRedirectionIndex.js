const btnSecondNewtonLaw = document.getElementById("btnSecondNewtonLaw")
const btnAccelerationFormula = document.getElementById("btnAccelerationFormula")
const btnSumaVectorial = document.getElementById("btnSumaVectorial")

btnSecondNewtonLaw.addEventListener("click", () => {
    location.href = "/src/view/force.php"
})

btnAccelerationFormula.addEventListener("click", () => {
    location.href = "/src/view/fiveFormulas.php"
})

btnSumaVectorial.addEventListener("click", () => {
    location.href = "/src/view/vectorialSum.php"
})