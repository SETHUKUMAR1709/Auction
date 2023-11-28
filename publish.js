function add_bid_input() {

    document.querySelector(".input").innerHTML = `

    <form class="publish" action="publishform.php" method="post" enctype="multipart/form-data">
            <div class="input_div">
            <label for="product_name">Product Name</label>
            <input type="text" id="product_name" name="product_name" required>

            <label for="seller_name">Seller Name</label>
            <input type="text" id="seller_name" name="seller_name" required>

            <label for="price">Enter the Min Price</label>
            <input id='price' type='number' required name="price" min=10000 max=9999999999>
            
            <label for="catogiries_option">Select Catagory</label>
            <select id="catogiries_option" name="catogiries_option">
            </select>

            <label for="caption">Write about your product in 50 letters</label>
            <input type="textarea" id="caption" name="caption" maxlength="50" required>
            
            <label for="image">Upload a Image (img size should be below 5mb)</label>
            <input type="file" accept=".png, .jpg, .jpeg,.jfif" id="image" name="image" required>
            
            <label for="bid_time">Enter the final time</label>
            <input id='bid_time' type='datetime-local' required name="bid_time">
            </div>
            
            <button type='submit' id="bid_submit">Submit</button>
        </form>`;
    add_catagories();
}
function add_chunk_input() {
    document.querySelector(".input").innerHTML = `
    <form class="publish" action="publishform2.php" method="post" enctype="multipart/form-data">
            <div class="input_div">
            <label for="product_name">Product Name</label>
            <input type="text" id="product_name" name="product_name" required>

            <label for="seller_name">Seller Name</label>
            <input type="text" id="seller_name" name="seller_name" required>

            <label for="caption">Caption (use below 50 letters)</label>
            <input type="textarea" id="caption" name="caption" maxlength="50" required>

            <label for="image">Upload a Image</label>
            <input type="file" accept="image/*" id="imgage" name="image" required>

            <label for="price">Enter the Price</label>
            <input id='price' type='number' required name="price">

            </div>
            <button type='submit' id="bid_submit">Submit</button>
            </form> `
}
let catagory_list = ['Electronics', "Antique","Appliances",'Furniture',"Properties","Vehicles"]
function add_catagories() {
    let form_select = document.querySelector('#catogiries_option');
    form_select.innerHTML = '';
    for (let i = 0; i < catagory_list.length; i++) {
        form_select.innerHTML += `<option value="${catagory_list[i]}">${catagory_list[i]}</option>`;
    }

}



