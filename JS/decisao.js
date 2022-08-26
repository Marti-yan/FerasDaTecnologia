
var idade = 17
var sexo = "masculino"
var time = "vasco"
console.log(idade)




switch (time) {
    case "vasco":
        console.log("isso ai mlk")
        break;
    case "flamengo":
        console.log("ai não 06")
        break;
    case "botafogo":
        console.log("ai não 06")
        break;

    default:
        console.log("????")
        break;
}



if (idade >= 18) {
    console.log("maior de idade")
} else if (sexo == "masculino") {
    console.log("menor de idade que talvez goste de carrinho")
} else {
    console.log("menor de idade que talvez goste de boneca")

}
