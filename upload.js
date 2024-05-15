const uploadGambar = document.getElementById('uploadGambar');

    uploadGambar.addEventListener('dragover', (e) => {
        e.preventDefault();
        e.stopPropagation();
        uploadGambar.classList.add('dragover');
    });

    uploadGambar.addEventListener('dragleave', (e) => {
        e.preventDefault();
        e.stopPropagation();
        uploadGambar.classList.remove('dragover');
    });

    uploadGambar.addEventListener('drop', (e) => {
        e.preventDefault();
        e.stopPropagation();
        uploadGambar.classList.remove('dragover');

        const files = e.dataTransfer.files;
        if (files.length > 0) {
            const formData = new FormData();
            formData.append('file', files[0]);

            fetch('upload.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(result => {
                alert(result);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    });
