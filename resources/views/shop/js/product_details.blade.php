<script>
let userType = '';

function updateQuantity(value) {
    const quantityInput = document.getElementById('quantityInput');
    let quantity = parseInt(quantityInput.value);

    if (userType !== 'b2b') {
        quantity += value;
        if (quantity < 1) {
            quantity = 1;
        } else if (quantity > 30) {
            quantity = 30;
        }
    } else {
        quantity += value;
        if (quantity < 10) {
            quantity = 10;
        }
    }

    quantityInput.value = quantity;
}

window.addEventListener('DOMContentLoaded', function() {
    const quantityInput = document.getElementById('quantityInput');
    userType = "{{ auth()->check() && auth()->user()->usertype === 'b2b' ? 'b2b' : '' }}";

    if (userType !== 'b2b') {
        quantityInput.value = '1';
        quantityInput.setAttribute('min', '1');
        quantityInput.setAttribute('max', '30');
    } else {
        quantityInput.value = '10';
        quantityInput.setAttribute('min', '10');
        quantityInput.removeAttribute('max');
    }
});


function setQuantityAndSubmit(event) {
    event.preventDefault();
    const quantityInput = document.getElementById('quantityInput');
    const quantityFormInput = document.getElementById('quantityFormInput');
    quantityFormInput.value = quantityInput.value;
    document.getElementById('quantityForm').submit();
}
</script>