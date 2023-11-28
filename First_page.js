let upcoming_bids_list = [{ product_img: "/img/fan1.jpeg", "product_name": 'fan', seller_name: "Philips", bid_time: new Date("2023-12-10T06:30:00") }, { product_img: "/img/fan1.jpeg", "product_name": 'fan2', seller_name: "usha", bid_time: new Date("2023-12-01T08:03:00") }]

function interval_time(i) {
    let current_date = new Date();
    let interval_ms =((upcoming_bids_list[i].bid_time).getTime() - current_date.getTime());
    let interval = new Date(interval_ms)
    return (`${interval.getDate()}/${interval.getHours()}/${interval.getMinutes()}/${interval.getSeconds()}`);
}

let bid_items = document.querySelector(".upcoming_bids_items")
function add_bid_item() {
    let item = ''
    for (let i = 0; i < upcoming_bids_list.length; i++) {
        let list = upcoming_bids_list[i];
        item += `<div class="up_bids" id='bid${i}'><a> <img class='up_bids_img' src='${list.product_img}'>
                <h3>${list.product_name}</h3>
                <p>${list.seller_name}</p>
                <p class="time${i}"></p>
                </a></div>`;
    }
    return item
}
bid_items.innerHTML = add_bid_item()
function add_time() {
    setInterval(function (){
    for (let i = 0; i < upcoming_bids_list.length; i++) {
        let upbid = document.querySelector(`.time${i}`);
        upbid.innerHTML = `-${interval_time(i)}`;

    }},1000)
}
add_time()


let chunk_items_list=[{ product_img: "/img/fan1.jpeg", "product_name": 'fan', seller_name: "Philips",chunk_price:120}]

let chunk_items = document.querySelector(".chunks_list")
function add_chunk_item() {
    let item = ''
    for (let i = 0; i < chunk_items_list.length; i++) {
        let list = chunk_items_list[i];
        item += `<div class="up_bids" id='ch${i}'>
                <a> <img class='up_bids_img' src='${list.product_img}'>
                <h3>${list.product_name}</h3>
                <p>${list.seller_name}</p>
                <p class="price${i}">$ ${list.chunk_price}</p>
                </a></div>`;
    }
    return item
}
chunk_items.innerHTML = add_chunk_item();



//########## publish input   #############################


