
const prevBtns = document.querySelectorAll(".btn-prev");
const nextBtns = document.querySelectorAll(".btn-next");
const formSteps = document.querySelectorAll(".child-container");

let formStepsNum = 0;

nextBtns.forEach((btn) => {
    btn.addEventListener("click", ( ) => {
        formStepsNum++;
        updateFormSteps( );
        updateProgressbar( );
    });
});

prevBtns.forEach((btn) => {
    btn.addEventListener("click", ( ) => {
        formStepsNum--;
        updateFormSteps( );
        updateProgressbar( );
    });
});

function updateFormSteps( ) {
    formSteps.forEach((formSteps) => {
        formSteps.classList.contains("child-active") 
        formSteps.classList.remove("child-active");
    })

    formSteps[formStepsNum] .classList.add("child-active");
}