let button = document.getElementById("determinant");
button.onclick = function(){
    let 11 = document.getElementById("s11").value;
    let 12 = document.getElementById("s12").value;
    let 13 = document.getElementById("s13").value;
    let 21 = document.getElementById("s21").value;
    let 22 = document.getElementById("s22").value;
    let 23 = document.getElementById("s23").value;
    let 31 = document.getElementById("s31").value;
    let 32 = document.getElementById("s32").value;
    let 33 = document.getElementById("s33").value;
    
    let result = s11*((s22*s33)-(s23*s32))-s12*((s21*s33)-(s23*s31))+s13*((s21*s32)-(s22*s31));
    document.getElementById("result").innerHTML = result;
    

};