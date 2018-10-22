let cars = [{brand:'Toyota',model:'Camry','year':1999,'price':20000,image_url:"https://media.ed.edmunds-media.com/toyota/camry/2016/ot/2016_toyota_camry_LIFE1_ot_902163_1280.jpg"},{brand:'BMW',model:'X6',year:2014,price:25000,image_url:"https://media.ed.edmunds-media.com/bmw/x6/2016/oem/2016_bmw_x6_4dr-suv_xdrive50i_fq_oem_5_1280.jpg"},{brand:'Daewoo',model:'Nexia',year:2007,price:15000,image_url:"https://s.auto.drom.ru/i24207/c/photos/fullsize/daewoo/nexia/daewoo_nexia_695410.jpg"}];
let carsy = document.querySelector('#cars');
let items = document.querySelector('#items');
let sum = document.querySelector('#sum');
for (let i = 0;i<cars.length;i++){
    carsy.innerHTML+='<div class="card"><img src='+cars[i]['image_url']+ ' alt=""><div class="basket"><img src="http://simpleicon.com/wp-content/uploads/fruit_basket.png" alt=""></div></div>';
}
let baskets = document.querySelectorAll('.basket');
for (let j = 0;j<baskets.length;j++){
    baskets[j].addEventListener('click',function () {
        if ( baskets[j].getAttribute('data-status') === 'yes' ){
        items.innerHTML=parseInt(items.innerHTML)-1;
        baskets[j].children[0].setAttribute("src","http://simpleicon.com/wp-content/uploads/fruit_basket.png");
        sum.innerHTML=parseInt(sum.innerHTML)-parseInt(cars[j]['price']);
        baskets[j].setAttribute('data-status','');
    }
    else {
        items.innerHTML=parseInt(items.innerHTML)+1;
        baskets[j].children[0].setAttribute("src","http://simpleicon.com/wp-content/uploads/dollar.png");
        sum.innerHTML=parseInt(sum.innerHTML)+parseInt(cars[j]['price']);
        baskets[j].setAttribute('data-status','yes');
    }
    });
}