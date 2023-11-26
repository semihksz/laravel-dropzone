<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Laravel Dropzone İle Çoklu Dosya Yükleme ve Veritabanına Kaydetme

1: İlk adım olarak bir proje oluşturuyoruz:

```bash
laravel new laravel-dropzone
```

2: Projeyi açtığımızda ilk işlem olarak .env dosyasını açıyoruz ve DB_USERNAME, DB_PASSWORD bilgilerimizi giriyoruz.

3: Sonrasında yüklenen dosyaları veritabanına da kaydedeceğimiz için bir Model ve Migration oluşturuyoruz:

```bash
php artisan make:model Images -m
```

4: Modelimizi ve Migration dosyamızı oluşturduktan sonra Images Migration dosyamızı açıyoruz ve eklemek istediğimiz sütunları yazıyoruz. Ben sadece name sütununu ekledim siz istediklerinizi ekleyebilirsiniz.

5: Migration dosyamızı oluşturduktan sonra Model dosyamızı açıyoruz ve eklediğimiz sütun isimlerini $fillable içerisine ekliyoruz.

6: Bu işlemleri tamamladıktan sonra tablomuzu oluşturuyoruz:

```bash
php artisan migrate
```

7: Tablomuz oluştuktan sonra bir Controller oluşturuyoruz:

```bash
php artisan make:controller DropzoneController
```

8: Controller oluştuktan sonra web.php dosyasını açıyoruz ve gerekli düzenlemeleri yapıyoruz.

9: Route'ları ayarladıktan sonra oluşturduğumuz DropzoneController dosyasını açıyoruz ve gerekli fonksiyonları ekliyoruz.

10: Ben view içerisindeki welcome.blade.php dosyasını dropzone.blade.php olarak değiştirdim siz istediğiniz ismi verebilirsiniz.

11: Son olarak dropzone.blade.php dosyasında gerekli işlemleri yaptıktan sonra projeyi çalıştırabilirsiniz.

```bash
php artisan serve
```

Not: dropzone.blade.php sayfasında dropzone cdn'lerini eklemeniz gerekmektedir.
