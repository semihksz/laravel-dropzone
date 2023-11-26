<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

    <div class="controller">
        <h2>Laravel Çoklu Fotoğraf Yükleme</h2>
        <div class="dropzone" id="myDropzone"></div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script>
        //myDropzone divde tanımlanmış id değeridir
        Dropzone.options.myDropzone = {
            //controllerda $request->file('file')  buraya yazdığımız file paramName'den geliyor
            paramName: "file",
            //en fazla yüklenebilecek olan dosya boyutunu yazıyoruz
            maxFilesize: 12,
            //en fazla yüklenebilecek dosya sayısını belirtiyoruz (zorunlu değil)
            maxFiles: 5,
            //dosyaların gönderileceği yolu belirtiyoruz
            url: "{{ route('dropzone.upload') }}",
            //hata almamak için token belirtiyoruz buradaki token head etiketleri içerisinde tanımlanan token
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },

            //kabul edilen dosya uzantılarını yazıyoruz
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            success: function(file, response) {
                console.log(response);
            },
            error: function(file, response) {
                return false;
            }
        }
    </script>
</body>

</html>
