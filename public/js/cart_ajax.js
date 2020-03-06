var prods = document.querySelectorAll("tr.shop-prods");

for(i = 0; i < prods.length; i++) {
    prods[i].addEventListener("click", function(event){
        event.preventDefault();
        var prod = this;
        var id = prod.querySelector("td a.add-to-cart-link").href.split("?id=", 2)[1];
        var qty = prod.querySelector("td.product-qty-link").innerText;


        var xhr = new XMLHttpRequest();
        var method = "GET";
        var url = "cart/add?id="+id+"&qty="+qty;

        xhr.open(method, url, true);
        xhr.setRequestHeader('X-Requested-With','XMLHttpRequest');

        xhr.send();

        xhr.onreadystatechange = function() {
            if (xhr.readyState !== 4) return;
            if (xhr.status !== 200) {
                alert("ERROR!\n"+xhr.status + " => " + xhr.statusText);
            } else {
                var response = xhr.responseText;
                showCart(response);
            }
        };

    });
}

function showCart(cart)
{
    var elem = document.getElementById("cart");
    elem.innerHTML = cart;
    elem.style.display = "block";
    document.querySelector("div.fade").style.opacity = 1;
}



function clearCart()
{
    var xhr = new XMLHttpRequest();
    var method = "GET";
    var url = "/cart/clear";

    xhr.open(method, url, true);
    xhr.setRequestHeader('X-Requested-With','XMLHttpRequest');
    xhr.send();

    xhr.onreadystatechange = function() {
        if (xhr.readyState !== 4) return;
        if (xhr.status !== 200) {
            alert("ERROR!\n"+xhr.status + " => " + xhr.statusText);
        } else {
            var response = xhr.responseText;
            showCart(response);
        }
    };
}

function closeModal()
{
    var elem = document.getElementById("cart");
    elem.style.display = "none";
    document.querySelector("div.fade").style.opacity = 0;
}


function deleteProduct(element)
{
    var id = element.dataset.id;
    var xhr = new XMLHttpRequest();
    var method = "GET";
    var url = "/cart/delete?id="+id;

    xhr.open(method, url, true);
    xhr.setRequestHeader('X-Requested-With','XMLHttpRequest');
    xhr.send();

    xhr.onreadystatechange = function() {
        if (xhr.readyState !== 4) return;
        if (xhr.status !== 200) {
            alert("ERROR!\n"+xhr.status + " => " + xhr.statusText);
        } else {
            var response = xhr.responseText;
            showCart(response);
        }
    };

    // console.log(url);
}
