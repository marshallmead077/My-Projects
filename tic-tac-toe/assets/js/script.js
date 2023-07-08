const gameboard = document.querySelector("#gameboard")
const infodisplay = document.querySelector("#info")
const startcells = [
    "", "" ,"" ,"" ,"" ,"" ,"" ,"" ,"",
]
function creatboard(){
    startcells.forEach((cell, index) =>{
        const cellelemnet = document.createElement("div")
        cellelemnet.classList.add("square")
        gameboard.append(cellelemnet)
    })
}
creatboard()