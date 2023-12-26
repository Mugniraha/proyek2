document.addEventListener('DOMContentLoaded', function() {
    const orderButtons = document.querySelectorAll('.btnord');

    orderButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();

            const productId = button.getAttribute('data-idproduk');
            console.log('ID Produk yang dipilih:', productId);

            // Mengirim data ke backend melalui AJAX
            fetch(`/costumproduk/${productId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ productId: productId })
            })
            .then(response => {
                if (response.ok) {
                    return response.json();
                }
                throw new Error('Network response was not ok.');
            })
            .then(data => {
                console.log('Respon dari server:', data);
                // Di sini, Anda dapat menambahkan logika berdasarkan respon dari server
            })
            .catch(error => {
                console.error('Ada masalah dengan permintaan:', error);
            });
        });
    });
});
