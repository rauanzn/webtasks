function linethru() {
    const line = event.currentTarget;
    if (line.parentNode.getAttribute('data-status')===''){
    line.parentNode.setAttribute('data-status','done');}
    else{
        line.parentNode.setAttribute('data-status','')
    }
}
const buttons = document.querySelectorAll('button');
for (const button of buttons){
button.addEventListener('click',linethru);}
