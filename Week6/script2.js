let op1 = document.querySelector('#countries');
let op2 = document.querySelector('#cities')
let countries = ["Kazakhstan","Russia","England","France"];
let cities_by_country = {"Kazakhstan":["Almaty","Astana","Karagandy"],"Russia":["Moscow","Saint-Petersburg","Kazan"],"England":["London","Manchester","Liverpool"],"France":["Paris","Lyon","Marseille"]};
 for (let i = 0;i<countries.length;i++){
    op1.innerHTML+=("<option>"+countries[i]+"</option>")
}
function ChangeCarList() {
    var op3 = op1.options[op1.selectedIndex].text;
    while (op2.options.length) {
        op2.remove(0);
    }
    var city = cities_by_country[op3];
    if (city!==undefined) {
        for (var j = 0; j < city.length; j++) {
            op2.innerHTML+=("<option>"+cities_by_country[op3][j]+"</option>")
        }
    }
}