<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    {{-- <script src="../../../node_modules/tesseract.js/dist/tesseract.min.js"></script>
    <script src="../../js/tesseract.js/dist/tesseract.min.js"></script> --}}
    <script src="{{ asset('js/tesseract.js/dist/tesseract.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/exif-js/exif.js') }}"></script>
    <!-- v5 -->
    {{-- <script src='https://cdn.jsdelivr.net/npm/tesseract.js@5/dist/tesseract.min.js'></script> --}}
    <title>Photo</title>
</head>

<body>
    <form action="">
        <input id="image_input" type="file" accept="image/*" multiple>
        <div id="images" class="w-80 flex justify-center flex-wrap">
            <div id="start"></div>
        </div>
        <button type="submit"></button>
    </form>

    <script type="module">
        // This is a basic example more efficient than "basic.html".
        // In this example we create a worker once, and this worker is re-used
        // every time the user uploads a new file.  
        const worker = await Tesseract.createWorker("ind", 1, {
            corePath: "{{ asset('js/tesseract.js-core/') }}",
            workerPath: "{{ asset('js/tesseract.js/dist/worker.min.js') }}",
            // logger: function(m) {
            //     console.log(m);
            // }
        });

        const recognize = async function(evt) {
            await worker.setParameters({
                tessedit_char_whitelist: '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',
                tessedit_pageseg_mode: 12

            });
            const files = evt.target.files;
            const data = [];
            const formData = new FormData();

            const image = document.querySelector('#image_input')
            const imagesPreview = document.getElementById("images");
            const start = document.getElementById("start");

            for (let i = 0; i < files.length; i++) {
                // const ret = await worker.recognize(files[i]);
                // const text = ret.data.text;

                // // Push each image and its extracted text to the data array
                // data.push({
                //     image: files[i],
                //     text: text
                // });

                // Append each image and its extracted text to the FormData
                formData.append('images[]', files[i]);
                // formData.append('text[]', text);

                // Create a new img element for each image
                const imgPreview = document.createElement('img');
                imgPreview.className = 'img-preview w-80';
                imgPreview.alt = '';

                // Append the img element to the imagesPreview container
                imagesPreview.appendChild(imgPreview);

                // Display the recognized text
                // console.log(ret.data.text);

                // Display the recognized text below each image
                // const textDisplay = document.createElement('p');
                // textDisplay.textContent = ret.data.text;
                // imagesPreview.appendChild(textDisplay);

                // EXIF.getData(files[i], function() {
                //     var allMetaData = EXIF.getAllTags(this);
                //     var allMetaDataSpan = document.createElement('p');
                //     allMetaDataSpan.innerHTML = JSON.stringify(allMetaData, null, "\t");
                //     imagesPreview.appendChild(allMetaDataSpan);
                // });

                // Read the file and set the img src
                const oFReader = new FileReader();
                oFReader.readAsDataURL(files[i]);

                oFReader.onload = function(oFREvent) {
                    imgPreview.src = oFREvent.target.result;
                };
            }

            console.log(formData)
            // Log the contents of the FormData
            for (const entry of formData.entries()) {
                console.log(entry[0], entry[1]);
            }
            // Send the data array to the server
            const csrfToken = document.querySelector('meta[name="csrf-token"]').content;
            // Append the CSRF token to the FormData
            formData.append('_token', csrfToken);
            fetch('/photos/upload', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => console.log(data))
                .catch(error => console.error('Error:', error));
        }
        const elm = document.getElementById('image_input');
        elm.addEventListener('change', recognize);
    </script>
</body>

</html>
